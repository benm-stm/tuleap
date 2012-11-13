<?php
/**
 * Copyright (c) Xerox Corporation, Codendi Team, 2001-2009. All rights reserved
 *
 * This file is a part of Codendi.
 *
 * Codendi is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Codendi is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Codendi. If not, see <http://www.gnu.org/licenses/>.
 */

require_once('Workflow.class.php');
require_once('Transition.class.php');
require_once('Workflow_Dao.class.php');
require_once('Workflow_TransitionDao.class.php');
require_once('common/permission/PermissionsManager.class.php');
require_once('PostAction/Transition_PostActionFactory.class.php');
require_once 'Transition/ConditionFactory.class.php';

class TransitionFactory {

    /** @var Workflow_Transition_ConditionFactory */
    private $condition_factory;

    /**
     * Should use the singleton instance()
     *
     * @param Workflow_Transition_ConditionFactory $condition_factory
     */
    public function __construct(Workflow_Transition_ConditionFactory $condition_factory) {
        $this->condition_factory = $condition_factory;
    }
    
    /**
     * Hold an instance of the class
     */
    protected static $_instance;
    
    /**
     * The singleton method
     * 
     * @return TransitionFactory
     */
    public static function instance() {
        if (!isset(self::$_instance)) {
            $c = __CLASS__;
            self::$_instance = new $c(Workflow_Transition_ConditionFactory::build());
        }
        return self::$_instance;
    }
    
    /**
     * Build a Transition instance
     *
     * @param Array    $row      The data describing the transition
     * @param Workflow $workflow Workflow the transition belongs to
     *
     * @return Transition
     */
    public function getInstanceFromRow($row, Workflow $workflow = null) {
        if (!$workflow) {
            $workflow = WorkflowFactory::instance()->getWorkflow($row['workflow_id']);
        }
        
        $field_values = $workflow->getAllFieldValues();
        $from         = null;
        $to           = null;
        if (isset($field_values[$row['from_id']])) {
            $from = $field_values[$row['from_id']];
        }
        if (isset($field_values[$row['to_id']])) {
            $to = $field_values[$row['to_id']];
        }
        
        $transition = new Transition($row['transition_id'],
                                     $row['workflow_id'],
                                     $from,
                                     $to);
        $this->getPostActionFactory()->loadPostActions($transition);
        return $transition;
    }
    
    /**
     * @return Transition_PostActionFactory
     */
    public function getPostActionFactory() {
        return new Transition_PostActionFactory();
    }
    
    /**
    * Get a transition
    *
    * @param int transition_id The transition_id
    *
    * @return Transition
    */
    public function getTransition($transition_id) {
        $dao = $this->getDao();
        if ($row = $dao->searchById($transition_id)->getRow()) {
            return $this->getInstanceFromRow($row);
        }
        return null;
    }
    
    protected $cache_transition_id = array();
    /**
     * Get a transition id
     *
     * @param int from 
     * @param int to
     *
     * @return Transition
     */
    public function getTransitionId($from, $to) {
        $dao = $this->getDao();
        if ($from != null) {
            $from = $from->getId();
        }
        if ( ! isset($this->cache_transition_id[$from][$to]) ) {
            $this->cache_transition_id[$from][$to] = array(null);
            if ($row = $dao->searchByFromTo($from, $to)->getRow()) {
                $this->cache_transition_id[$from][$to] = array($row['transition_id']);
            }
        }
        return $this->cache_transition_id[$from][$to][0];
    }
    
    /**
     * Say if a field is used in its tracker workflow transitions
     *
     * @param Tracker_FormElement_Field $field The field
     *
     * @return bool
     */
    public function isFieldUsedInTransitions(Tracker_FormElement_Field $field) {
        return $this->getPostActionFactory()->isFieldUsedInPostActions($field);
    }
    
    /**
     * Get the Workflow Transition dao
     *
     * @return Worflow_TransitionDao
     */
    protected function getDao() {
        return new Workflow_TransitionDao();
    }
    
    /**
     * Creates a transition Object
     * 
     * @param SimpleXMLElement $xml         containing the structure of the imported workflow
     * @param array            &$xmlMapping containig the newly created formElements idexed by their XML IDs
     * 
     * @return Transition The transition object, or null if error
     */
    public function getInstanceFromXML($xml, &$xmlMapping) {
        
        $from = null;
        if ((string)$xml->from_id['REF'] != 'null') {
            $from = $xmlMapping[(string)$xml->from_id['REF']];
        }
        $to = $xmlMapping[(string)$xml->to_id['REF']];
        
        $transition = new Transition(0, 0, $from, $to);
        $postactions = array();
        if ($xml->postactions) {
            $tpaf = new Transition_PostActionFactory();
            foreach(array('postaction_field_date', 'postaction_field_int', 'postaction_field_float') as $post_action_type) {
                foreach ($xml->postactions->$post_action_type as $p) {            
                    $postactions[] = $tpaf->getInstanceFromXML($p, $xmlMapping, $transition);
                }
            }
        }
        $transition->setPostActions($postactions);

        // Conditions on transition
        $transition->setConditions($this->condition_factory->getAllInstancesFromXML($xml, $xmlMapping, $transition));

        return $transition;
    }
    
    /**
     * Delete a workflow
     *
     * @param Workflow $workflow
     * 
     * @return boolean
     */
    public function deleteWorkflow($workflow) {
        $transitions = $this->getTransitions($workflow);
        $workflow_id = $workflow->getId();
        
        //Delete permissions
        foreach($transitions as $transition) {
            permission_clear_all($workflow->getTracker()->getGroupId(), 'PLUGIN_TRACKER_WORKFLOW_TRANSITION', $transition->getTransitionId(), false);
        }
        
        //Delete postactions
        if ($this->getPostActionFactory()->deleteWorkflow($workflow_id)) {
            return $this->getDao()->deleteWorkflowTransitions($workflow_id);
        }
    }
    
    /**
     * Get the transitions of the workflow
     * 
     * @param Workflow $workflow The workflow
     *
     * @return Array of Transition
     */
    public function getTransitions(Workflow $workflow){
        $transitions = array();
        foreach($this->getDao()->searchByWorkflow($workflow->getId()) as $row) {
            $transitions[] = $this->getInstanceFromRow($row, $workflow);
        }
        return $transitions;
    }
    
    /**
     * Creates transition in the database
     *
     * @param int $workflow_id The workflow_id of the transitions to save
     * @param Transition          $transition The transition
     *
     * @return void
     */
    public function saveObject($workflow_id, $transition) {
        
        $dao = $this->getDao();
        
        if($transition->getFieldValueFrom() == null) {
            $from_id=null;
        } else {
            $from_id = $transition->getFieldValueFrom()->getId();
        }
        $to_id = $transition->getFieldValueTo()->getId();
        $transition_id = $dao->addTransition($workflow_id, $from_id, $to_id);
        $transition->setTransitionId($transition_id);
        
        //Save postactions
        $postactions = $transition->getPostActions();
        foreach ($postactions as $postaction) {
            $tpaf = new Transition_PostActionFactory();
            $tpaf->saveObject($postaction);
        }
        
        //Save conditions
        $transition->getConditions()->saveObject();
    }
    
   /**
    * Adds permissions in the database
    * 
    * @param Array $ugroups the list of ugroups
    * @param Transition          $transition  The transition
    * 
    * @return boolean
    */
    public function addPermissions($ugroups, $transition) {
        $pm = PermissionsManager::instance();
        $permission_type = 'PLUGIN_TRACKER_WORKFLOW_TRANSITION';
        foreach ($ugroups as $ugroup) {
            if(!$pm->addPermission($permission_type, (int)$transition, $ugroup)) {
                return false;
            }
        }
        return true;
    }
    
   /**
    * Duplicate the transitions
    * 
    * @param Array $values array of old and new values of the field
    * @param int   $workflow_id the workflow id
    * @param Array $transitions the transitions to duplicate
    * @param Array $field_mapping the field mapping
    * @param Array $ugroup_mapping the ugroup mapping
    * @param bool  $duplicate_static_perms true if duplicate static perms, false otherwise
    *
    * @return void
    */
    public function duplicate($values, $workflow_id, $transitions, $field_mapping, $ugroup_mapping = false, $duplicate_type) {
        
        if ($transitions != null) {
            foreach ($transitions as $transition) {
                if ($transition->getFieldValueFrom() == null) {
                    $from_id = 'null';
                    $to      = $transition->getFieldValueTo()->getId();
                    foreach ($values as $value=>$id_value) {
                        if ($value == $to) {
                            $to_id = $id_value;
                        }
                    }                    
                } else {
                    $from = $transition->getFieldValueFrom()->getId();
                    $to   = $transition->getFieldValueTo()->getId();
                    foreach ($values as $value=>$id_value) {
                        
                        if ($value == $from) {
                            $from_id = $id_value;
                        }
                        if ($value == $to) {
                            $to_id = $id_value;
                        }
                    }
                }
                
                $transition_id = $this->addTransition($workflow_id, $from_id, $to_id);
                
                // Duplicate permissions
                $from_transition_id = $transition->getTransitionId();
                $this->duplicatePermissions($from_transition_id, $transition_id, $ugroup_mapping, $duplicate_type);
                
                // Duplicate postactions
                $postactions = $transition->getPostActions();
                $tpaf = $this->getPostActionFactory();
                $tpaf->duplicate($from_transition_id, $transition_id, $postactions, $field_mapping);
            }
        }
    }
    
   /**
    * Add a transition in db
    * 
    * @param int $workflow_id the old transition id
    * @param int $from_id the new transition id
    * @param int $to_id the ugroup mapping
    *
    * @return void
    */
    public function addTransition($workflow_id, $from_id, $to_id) {
        return $this->getDao()->addTransition($workflow_id, $from_id, $to_id);
    }
    
   /**
    * Duplicate the transitions permissions
    * 
    * @param int $from_transition_id the old transition id
    * @param int $transition_id the new transition id
    * @param Array $ugroup_mapping the ugroup mapping
    *
    * @return void
    */
    public function duplicatePermissions($from_transition_id, $transition_id, $ugroup_mapping = false, $duplicate_type) {
        $pm = PermissionsManager::instance();        
        $permission_type = array('PLUGIN_TRACKER_WORKFLOW_TRANSITION');
        //Duplicate tracker permissions
        $pm->duplicatePermissions($from_transition_id, $transition_id, $permission_type, $ugroup_mapping, $duplicate_type);
    }
}
?>