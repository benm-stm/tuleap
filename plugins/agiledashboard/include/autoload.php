<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
function autoload08f42b04afb6cb0e77e3c9236e744094($class) {
    static $classes = null;
    if ($classes === null) {
        $classes = array(
            'adminpresenter' => '/AgileDashboard/AdminPresenter.class.php',
            'agiledashboard_backlogitem_subbacklogitemdao' => '/AgileDashboard/BacklogItem/SubBacklogItemDao.class.php',
            'agiledashboard_backlogitem_subbacklogitemprovider' => '/AgileDashboard/BacklogItem/SubBacklogItemProvider.class.php',
            'agiledashboard_backlogitemdao' => '/AgileDashboard/BacklogItemDao.class.php',
            'agiledashboard_backlogitempresenter' => '/AgileDashboard/BacklogItemPresenter.class.php',
            'agiledashboard_cardrepresentation' => '/AgileDashboard/REST/v1/CardRepresentation.class.php',
            'agiledashboard_columnrepresentation' => '/AgileDashboard/REST/v1/ColumnRepresentation.class.php',
            'agiledashboard_controller' => '/AgileDashboard/AgileDashboardController.class.php',
            'agiledashboard_dao' => '/Dao.class.php',
            'agiledashboard_defaultpaneinfo' => '/AgileDashboard/DefaultPaneInfo.class.php',
            'agiledashboard_fieldpriorityaugmenter' => '/AgileDashboard/FieldPriorityAugmenter.php',
            'agiledashboard_kanbandao' => '/AgileDashboard/KanbanDao.class.php',
            'agiledashboard_kanbanmanager' => '/AgileDashboard/KanbanManager.class.php',
            'agiledashboard_milestone_backlog_artifactsfinder' => '/AgileDashboard/Milestone/Backlog/ArtifactsFinder.class.php',
            'agiledashboard_milestone_backlog_backlogitem' => '/AgileDashboard/Milestone/Backlog/BacklogItem.class.php',
            'agiledashboard_milestone_backlog_backlogitembuilder' => '/AgileDashboard/Milestone/Backlog/BacklogItemBuilder.class.php',
            'agiledashboard_milestone_backlog_backlogitemcollection' => '/AgileDashboard/Milestone/Backlog/BacklogItemCollection.class.php',
            'agiledashboard_milestone_backlog_backlogitemcollectionfactory' => '/AgileDashboard/Milestone/Backlog/BacklogItemCollectionFactory.class.php',
            'agiledashboard_milestone_backlog_backlogitempresenterbuilder' => '/AgileDashboard/Milestone/Backlog/BacklogItemPresenterBuilder.class.php',
            'agiledashboard_milestone_backlog_backlogitempresentercollection' => '/AgileDashboard/Milestone/Backlog/BacklogItemPresenterCollection.class.php',
            'agiledashboard_milestone_backlog_backlogrowpresenter' => '/AgileDashboard/Milestone/Backlog/BacklogRowPresenter.class.php',
            'agiledashboard_milestone_backlog_backlogstrategy' => '/AgileDashboard/Milestone/Backlog/BacklogStrategy.class.php',
            'agiledashboard_milestone_backlog_backlogstrategyfactory' => '/AgileDashboard/Milestone/Backlog/BacklogStrategyFactory.class.php',
            'agiledashboard_milestone_backlog_descendantbacklogstrategy' => '/AgileDashboard/Milestone/Backlog/DescendantBacklogStrategy.class.php',
            'agiledashboard_milestone_backlog_ibacklogitem' => '/AgileDashboard/Milestone/Backlog/IBacklogItem.class.php',
            'agiledashboard_milestone_backlog_ibacklogitemcollection' => '/AgileDashboard/Milestone/Backlog/IBacklogItemCollection.class.php',
            'agiledashboard_milestone_backlog_ibuildbacklogitemandbacklogitemcollection' => '/AgileDashboard/Milestone/Backlog/IBuildBacklogItemAndBacklogItemCollection.class.php',
            'agiledashboard_milestone_milestonedao' => '/AgileDashboard/Milestone/MilestoneDao.class.php',
            'agiledashboard_milestone_milestonereportcriterionoptionsprovider' => '/AgileDashboard/Milestone/MilestoneReportCriterionOptionsProvider.class.php',
            'agiledashboard_milestone_milestonereportcriterionprovider' => '/AgileDashboard/Milestone/MilestoneReportCriterionProvider.class.php',
            'agiledashboard_milestone_milestonestatuscounter' => '/AgileDashboard/Milestone/MilestoneStatusCounter.class.php',
            'agiledashboard_milestone_pane_content_contentnewpresenter' => '/AgileDashboard/Milestone/Pane/Content/ContentNewPresenter.class.php',
            'agiledashboard_milestone_pane_content_contentpane' => '/AgileDashboard/Milestone/Pane/Content/ContentPane.class.php',
            'agiledashboard_milestone_pane_content_contentpaneinfo' => '/AgileDashboard/Milestone/Pane/Content/ContentPaneInfo.class.php',
            'agiledashboard_milestone_pane_content_contentpresenter' => '/AgileDashboard/Milestone/Pane/Content/ContentPresenter.class.php',
            'agiledashboard_milestone_pane_content_contentpresenterbuilder' => '/AgileDashboard/Milestone/Pane/Content/ContentPresenterBuilder.class.php',
            'agiledashboard_milestone_pane_content_contentpresenterdescendant' => '/AgileDashboard/Milestone/Pane/Content/ContentPresenterDescendant.class.php',
            'agiledashboard_milestone_pane_content_topcontentpresenter' => '/AgileDashboard/Milestone/Pane/TopContent/TopContentPresenter.class.php',
            'agiledashboard_milestone_pane_panepresenterbuilderfactory' => '/AgileDashboard/Milestone/Pane/PanePresenterBuilderFactory.class.php',
            'agiledashboard_milestone_pane_planning_planningpane' => '/AgileDashboard/Milestone/Pane/Planning/PlanningPane.class.php',
            'agiledashboard_milestone_pane_planning_planningpaneinfo' => '/AgileDashboard/Milestone/Pane/Planning/PlanningPaneInfo.class.php',
            'agiledashboard_milestone_pane_planning_planningpresenter' => '/AgileDashboard/Milestone/Pane/Planning/PlanningPresenter.class.php',
            'agiledashboard_milestone_pane_planning_planningpresenterbuilder' => '/AgileDashboard/Milestone/Pane/Planning/PlanningPresenterBuilder.class.php',
            'agiledashboard_milestone_pane_planning_planningsubmilestonepresenter' => '/AgileDashboard/Milestone/Pane/Planning/PlanningSubMilestonePresenter.class.php',
            'agiledashboard_milestone_pane_planning_planningsubmilestonepresentercollection' => '/AgileDashboard/Milestone/Pane/Planning/PlanningSubMilestonePresenterCollection.class.php',
            'agiledashboard_milestone_pane_planning_planningsubmilestonepresenterfactory' => '/AgileDashboard/Milestone/Pane/Planning/PlanningSubMilestonePresenterFactory.class.php',
            'agiledashboard_milestone_pane_planning_planningv2pane' => '/AgileDashboard/Milestone/Pane/Planning/PlanningV2Pane.class.php',
            'agiledashboard_milestone_pane_planning_planningv2paneinfo' => '/AgileDashboard/Milestone/Pane/Planning/PlanningV2PaneInfo.class.php',
            'agiledashboard_milestone_pane_planning_planningv2presenter' => '/AgileDashboard/Milestone/Pane/Planning/PlanningV2Presenter.class.php',
            'agiledashboard_milestone_pane_planning_submilestonefinder' => '/AgileDashboard/Milestone/Pane/Planning/SubmilestoneFinder.class.php',
            'agiledashboard_milestone_pane_presenterdata' => '/AgileDashboard/Milestone/Pane/PresenterData.class.php',
            'agiledashboard_milestone_pane_topcontent_topcontentpaneinfo' => '/AgileDashboard/Milestone/Pane/TopContent/TopContentPaneInfo.class.php',
            'agiledashboard_milestone_pane_topcontent_topcontentpresenterbuilder' => '/AgileDashboard/Milestone/Pane/TopContent/TopContentPresenterBuilder.class.php',
            'agiledashboard_milestone_pane_topplanning_topplanningpaneinfo' => '/AgileDashboard/Milestone/Pane/TopPlanning/TopPlanningPaneInfo.class.php',
            'agiledashboard_milestone_pane_topplanning_topplanningpresenterbuilder' => '/AgileDashboard/Milestone/Pane/TopPlanning/TopPlanningPresenterBuilder.class.php',
            'agiledashboard_milestone_pane_topplanning_topplanningv2paneinfo' => '/AgileDashboard/Milestone/Pane/TopPlanning/TopPlanningV2PaneInfo.class.php',
            'agiledashboard_milestone_selectedmilestoneidprovider' => '/AgileDashboard/Milestone/SelectedMilestoneIdProvider.class.php',
            'agiledashboard_milestonepresenter' => '/Planning/MilestonePresenter.class.php',
            'agiledashboard_milestonescardwallrepresentation' => '/AgileDashboard/REST/v1/MilestonesCardwallRepresentation.class.php',
            'agiledashboard_pane' => '/AgileDashboard/Pane.class.php',
            'agiledashboard_paneiconlinkpresenter' => '/AgileDashboard/PaneIconLinkPresenter.class.php',
            'agiledashboard_paneiconlinkpresentercollectionfactory' => '/AgileDashboard/PaneIconLinkPresenterCollectionFactory.class.php',
            'agiledashboard_paneinfo' => '/AgileDashboard/PaneInfo.class.php',
            'agiledashboard_paneinfofactory' => '/AgileDashboard/PaneInfoFactory.class.php',
            'agiledashboard_paneredirectionextractor' => '/PaneRedirectionExtractor.class.php',
            'agiledashboard_planning_nearestplanningtrackerprovider' => '/AgileDashboard/Planning/NearestPlanningTrackerProvider.class.php',
            'agiledashboard_rest_resourcesinjector' => '/AgileDashboard/REST/ResourcesInjector.class.php',
            'agiledashboard_semantic_dao_initialeffort' => '/AgileDashboard/Semantic/Dao/Dao_InitialEffort.class.php',
            'agiledashboard_semantic_dao_initialeffortdao' => '/AgileDashboard/Semantic/Dao/InitialEffortDao.class.php',
            'agiledashboard_semantic_initialeffort' => '/AgileDashboard/Semantic/Semantic_InitialEffort.class.php',
            'agiledashboard_semantic_initialeffortfactory' => '/AgileDashboard/Semantic/Semantic_InitialEffortFactory.class.php',
            'agiledashboard_sequenceidmanager' => '/AgileDashboard/SequenceIdManager.php',
            'agiledashboard_submilestonepresenter' => '/AgileDashboard/SubmilestonePresenter.class.php',
            'agiledashboard_submilestonepresenterbuilder' => '/AgileDashboard/SubmilestonePresenterBuilder.class.php',
            'agiledashboard_swimlinerepresentation' => '/AgileDashboard/REST/v1/SwimlineRepresentation.class.php',
            'agiledashboard_xmlcontroller' => '/AgileDashboard/AgileDashboardXMLController.class.php',
            'agiledashboard_xmlexporter' => '/AgileDashboard/XMLExporter.class.php',
            'agiledashboard_xmlexporternodenotvalidexception' => '/AgileDashboard/AgileDashboard_XMLExporterNodeNotValidException.class.php',
            'agiledashboard_xmlexporterunabletogetvalueexception' => '/AgileDashboard/XMLExporterUnableToGetValueException.class.php',
            'agiledashboard_xmlimporter' => '/AgileDashboard/XMLImporter.class.php',
            'agiledashboard_xmlimporterinvalidtrackermappingsexception' => '/AgileDashboard/XMLImporterInvalidTrackerMappingsException.class.php',
            'agiledashboardplugin' => '/agiledashboardPlugin.class.php',
            'agiledashboardplugindescriptor' => '/AgileDashboardPluginDescriptor.class.php',
            'agiledashboardplugininfo' => '/AgileDashboardPluginInfo.class.php',
            'agiledashboardrouter' => '/AgileDashboardRouter.class.php',
            'breadcrumb_agiledashboard' => '/BreadCrumbs/AgileDashboard.class.php',
            'breadcrumb_artifact' => '/BreadCrumbs/Artifact.class.php',
            'breadcrumb_breadcrumbgenerator' => '/BreadCrumbs/BreadCrumbGenerator.class.php',
            'breadcrumb_merger' => '/BreadCrumbs/Merger.class.php',
            'breadcrumb_milestone' => '/BreadCrumbs/Milestone.class.php',
            'breadcrumb_nocrumb' => '/BreadCrumbs/NoCrumb.class.php',
            'breadcrumb_pipe' => '/BreadCrumbs/Pipe.class.php',
            'breadcrumb_planning' => '/BreadCrumbs/Planning.class.php',
            'breadcrumb_planningandartifact' => '/BreadCrumbs/PlanningAndArtifact.class.php',
            'breadcrumb_virtualtopmilestone' => '/BreadCrumbs/VirtualTopMilestone.class.php',
            'milestonereportcriteriondao' => '/AgileDashboard/Milestone/MilestoneReportCriterionDao.class.php',
            'planning' => '/Planning/Planning.class.php',
            'planning_artifactcreationcontroller' => '/Planning/ArtifactCreationController.class.php',
            'planning_artifactlinker' => '/Planning/ArtifactLinker.class.php',
            'planning_artifactmilestone' => '/Planning/ArtifactMilestone.class.php',
            'planning_artifactparentsselector' => '/Planning/ArtifactParentsSelector.class.php',
            'planning_artifactparentsselector_command' => '/Planning/ArtifactParentsSelector/Command.class.php',
            'planning_artifactparentsselector_nearestmilestonewithbacklogtrackercommand' => '/Planning/ArtifactParentsSelector/NearestMilestoneWithBacklogTrackerCommand.class.php',
            'planning_artifactparentsselector_parentinsamehierarchycommand' => '/Planning/ArtifactParentsSelector/ParentInSameHierarchyCommand.class.php',
            'planning_artifactparentsselector_sametrackercommand' => '/Planning/ArtifactParentsSelector/SameTrackerCommand.class.php',
            'planning_artifactparentsselector_subchildrenbelongingtotrackercommand' => '/Planning/ArtifactParentsSelector/SubChildrenBelongingToTrackerCommand.class.php',
            'planning_artifactparentsselectoreventlistener' => '/Planning/ArtifactParentsSelectorEventListener.class.php',
            'planning_carddisplaypreferences' => '/Planning/CardDisplayPreferences.class.php',
            'planning_controller' => '/Planning/PlanningController.class.php',
            'planning_formpresenter' => '/Planning/PlanningFormPresenter.class.php',
            'planning_importtemplateformpresenter' => '/Planning/ImportTemplateFormPresenter.class.php',
            'planning_invalidconfigurationexception' => '/Planning/InvalidConfigurationException.class.php',
            'planning_milestone' => '/Planning/Milestone.class.php',
            'planning_milestonecontroller' => '/Planning/MilestoneController.class.php',
            'planning_milestonecontrollerfactory' => '/Planning/MilestoneControllerFactory.class.php',
            'planning_milestonefactory' => '/Planning/MilestoneFactory.class.php',
            'planning_milestonelinkpresenter' => '/Planning/MilestoneLinkPresenter.class.php',
            'planning_milestonepanefactory' => '/Planning/MilestonePaneFactory.class.php',
            'planning_milestoneredirectparameter' => '/Planning/MilestoneRedirectParameter.class.php',
            'planning_milestoneselectorcontroller' => '/Planning/MilestoneSelectorController.class.php',
            'planning_nomilestone' => '/Planning/NoMilestone.class.php',
            'planning_noplanningsexception' => '/Planning/NoPlanningsException.class.php',
            'planning_notfoundexception' => '/Planning/NotFoundException.class.php',
            'planning_planningadminpresenter' => '/Planning/PlanningAdminPresenter.class.php',
            'planning_planningoutofhierarchyadminpresenter' => '/Planning/PlanningOutOfHierarchyAdminPresenter.class.php',
            'planning_presenter_emptyhomepresenter' => '/Planning/Presenters/EmptyHomePresenter.class.php',
            'planning_presenter_homepresenter' => '/Planning/Presenters/HomePresenter.class.php',
            'planning_presenter_lastlevelmilestone' => '/Planning/Presenters/LastLevelMilestone.class.php',
            'planning_presenter_milestoneaccesspresenter' => '/Planning/Presenters/MilestoneAccessPresenter.class.php',
            'planning_presenter_milestoneburndownsummarypresenter' => '/Planning/Presenters/MilestoneBurndownSummaryPresenter.class.php',
            'planning_presenter_milestonesummarypresenter' => '/Planning/Presenters/MilestoneSummaryPresenter.class.php',
            'planning_presenter_milestonesummarypresenterabstract' => '/Planning/Presenters/MilestoneSummaryPresenterAbstract.class.php',
            'planning_presenter_php51homepresenter' => '/Planning/Presenters/PHP51HomePresenter.class.php',
            'planning_requestvalidator' => '/Planning/PlanningRequestValidator.class.php',
            'planning_shortaccess' => '/Planning/ShortAccess.class.php',
            'planning_shortaccessfactory' => '/Planning/ShortAccessFactory.class.php',
            'planning_shortaccessmilestonepresenter' => '/Planning/ShortAccessMilestonePresenter.class.php',
            'planning_trackerpresenter' => '/Planning/TrackerPresenter.class.php',
            'planning_virtualtopmilestone' => '/Planning/VirtualTopMilestone.class.php',
            'planning_virtualtopmilestonecontroller' => '/Planning/VirtualTopMilestoneController.class.php',
            'planning_virtualtopmilestonepanefactory' => '/Planning/VirtualTopMilestonePaneFactory.class.php',
            'planningdao' => '/Planning/PlanningDao.class.php',
            'planningfactory' => '/Planning/PlanningFactory.class.php',
            'planningparameters' => '/Planning/PlanningParameters.class.php',
            'planningpresenter' => '/Planning/PlanningPresenter.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\artifactdoesnotexistexception' => '/AgileDashboard/REST/v1/ArtifactDoesNotExistException.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\artifactisclosedoralreadyplannedinanothermilestone' => '/AgileDashboard/REST/v1/ArtifactIsClosedOrAlreadyPlannedInAnotherMilestone.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\artifactisnotinbacklogtrackerexception' => '/AgileDashboard/REST/v1/ArtifactIsNotInBacklogTrackerException.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\artifactisnotinopenandunassignedtopbacklogitemsexception' => '/AgileDashboard/REST/v1/ArtifactIsNotInOpenAndUnassignedBacklogItemsException.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\artifactisnotinopenandunplannedbacklogitemsexception' => '/AgileDashboard/REST/v1/ArtifactIsNotInOpenAndUnplannedBacklogItemsException.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\artifactlinkupdater' => '/AgileDashboard/REST/v1/ArtifactLinkUpdater.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\backlogitemparentreference' => '/AgileDashboard/REST/v1/BacklogItemParentReference.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\backlogitemrepresentation' => '/AgileDashboard/REST/v1/BacklogItemRepresentation.php',
            'tuleap\\agiledashboard\\rest\\v1\\backlogitemresource' => '/AgileDashboard/REST/v1/BacklogItemResource.php',
            'tuleap\\agiledashboard\\rest\\v1\\elementcannotbesubmilestoneexception' => '/AgileDashboard/REST/v1/ElementCannotBeSubmilestoneException.php',
            'tuleap\\agiledashboard\\rest\\v1\\idsfrombodyarenotuniqueexception' => '/AgileDashboard/REST/v1/IdsFromBodyAreNotUniqueException.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\itemlistedtwiceexception' => '/AgileDashboard/REST/v1/SubmilestoneListedTwiceException.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\milestonecontentupdater' => '/AgileDashboard/REST/v1/MilestoneContentUpdater.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\milestoneinforepresentation' => '/AgileDashboard/REST/v1/MilestoneInfoRepresentation.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\milestoneparentreference' => '/AgileDashboard/REST/v1/MilestoneParentReference.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\milestonerepresentation' => '/AgileDashboard/REST/v1/MilestoneRepresentation.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\milestoneresource' => '/AgileDashboard/REST/v1/MilestoneResource.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\milestoneresourcevalidator' => '/AgileDashboard/REST/v1/MilestoneResourceValidator.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\milestonesubmilestonesupdater' => '/AgileDashboard/REST/v1/MilestoneSubMilestonesUpdater.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\planningrepresentation' => '/AgileDashboard/REST/v1/PlanningRepresentation.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\planningresource' => '/AgileDashboard/REST/v1/PlanningResource.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\projectbacklogresource' => '/AgileDashboard/REST/v1/ProjectBacklogResource.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\projectmilestonesresource' => '/AgileDashboard/REST/v1/ProjectMilestonesResource.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\projectplanningsresource' => '/AgileDashboard/REST/v1/ProjectPlanningsResource.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\submilestonealreadyhasaparentexception' => '/AgileDashboard/REST/v1/SubMilestoneAlreadyHasAParentException.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\submilestonedoesnotexistexception' => '/AgileDashboard/REST/v1/SubMilestoneDoesNotExistException.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\usercannotreadsubmilestoneexception' => '/AgileDashboard/REST/v1/UserCannotReadSubMilestoneException.class.php',
            'tuleap\\agiledashboard\\rest\\v1\\usercannotupdatemilestoneexception' => '/AgileDashboard/REST/v1/UserCannotUpdateMilestoneException.php',
            'xmlimporterinputnotwellformedexception' => '/AgileDashboard/XMLImporterInputNotWellFormedException.class.php'
        );
    }
    $cn = strtolower($class);
    if (isset($classes[$cn])) {
        require dirname(__FILE__) . $classes[$cn];
    }
}
spl_autoload_register('autoload08f42b04afb6cb0e77e3c9236e744094');
// @codeCoverageIgnoreEnd
