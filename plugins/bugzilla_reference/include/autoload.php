<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
function autoloadc29ffaf58ab8b07f330366fc067a3a82($class) {
    static $classes = null;
    if ($classes === null) {
        $classes = array(
            'bugzilla_referenceplugin' => '/bugzilla_referencePlugin.class.php',
            'tuleap\\bugzilla\\administration\\controller' => '/Bugzilla/Administration/Controller.php',
            'tuleap\\bugzilla\\administration\\presenter' => '/Bugzilla/Administration/Presenter.php',
            'tuleap\\bugzilla\\administration\\router' => '/Bugzilla/Administration/Router.php',
            'tuleap\\bugzilla\\plugin\\descriptor' => '/Bugzilla/Plugin/Descriptor.php',
            'tuleap\\bugzilla\\plugin\\info' => '/Bugzilla/Plugin/Info.php'
        );
    }
    $cn = strtolower($class);
    if (isset($classes[$cn])) {
        require dirname(__FILE__) . $classes[$cn];
    }
}
spl_autoload_register('autoloadc29ffaf58ab8b07f330366fc067a3a82');
// @codeCoverageIgnoreEnd
