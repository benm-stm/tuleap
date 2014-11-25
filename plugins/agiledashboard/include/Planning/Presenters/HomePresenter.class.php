<?php
/**
 * Copyright (c) Enalean, 2014. All Rights Reserved.
 *
 * This file is a part of Tuleap.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap. If not, see <http://www.gnu.org/licenses/>.
 */

class Planning_Presenter_HomePresenter {

    /** @var Planning_Presenter_MilestoneAccessPresenter[] */
    public $milestone_presenters;

    /** @var int */
    public $group_id;

    /** @var Planning_Presenter_LastLevelMilestone[] */
    public $last_level_milestone_presenters;

    /** @var string */
    private $period;

    /** @var string */
    private $project_name;

    /** @var bool */
    private $kanban_activated;

    /** @var bool */
    private $uses_lab_feature;

    public function __construct(
        $milestone_access_presenters,
        $group_id,
        $last_level_milestone_presenters,
        $period,
        $project_name,
        $kanban_activated,
        $uses_lab_feature
    ) {
        $this->milestone_presenters            = $milestone_access_presenters;
        $this->group_id                        = $group_id;
        $this->last_level_milestone_presenters = $last_level_milestone_presenters;
        $this->period                          = $period;
        $this->project_name                    = $project_name;
        $this->kanban_activated                = $kanban_activated;
        $this->uses_lab_feature                = $uses_lab_feature;
    }

    public function past() {
        return $GLOBALS['Language']->getText('plugin_agiledashboard','past');
    }

    public function now() {
        return $GLOBALS['Language']->getText('plugin_agiledashboard','now');
    }

    public function future() {
        return $GLOBALS['Language']->getText('plugin_agiledashboard','future');
    }

    public function past_active() {
        if ($this->period == Planning_Controller::PAST_PERIOD) {
            return 'active';
        }

        return '';
    }

    public function now_active() {
        if (! $this->past_active() && !$this->future_active()) {
            return 'active';
        }

        return '';
    }

    public function future_active() {
        if ($this->period == Planning_Controller::FUTURE_PERIOD) {
            return 'active';
        }

        return '';
    }

    public function project_backlog() {
        return $GLOBALS['Language']->getText('plugin_agiledashboard','project_backlog', array($this->project_name));
    }

    public function has_milestone_presenters() {
        return ! empty($this->milestone_presenters);
    }

    public function user_helper() {
        if ($this->past_active() !== '') {
            return $GLOBALS['Language']->getText('plugin_agiledashboard','home_user_helper_done');
        }

        return $GLOBALS['Language']->getText('plugin_agiledashboard','home_user_helper_others');
    }

    public function add_kanban() {
        return $GLOBALS['Language']->getText('plugin_agiledashboard','add_kanban');
    }

    public function user_can_see_kanban() {
        return $this->kanban_activated && $this->uses_lab_feature;
    }
}