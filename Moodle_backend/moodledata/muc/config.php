<?php defined('MOODLE_INTERNAL') || die();
 $configuration = array (
  'siteidentifier' => '4c06a65be0eb42509c0d759f4b73c812',
  'stores' => 
  array (
    'default_application' => 
    array (
      'name' => 'default_application',
      'plugin' => 'file',
      'configuration' => 
      array (
      ),
      'features' => 30,
      'modes' => 3,
      'default' => true,
      'class' => 'cachestore_file',
      'lock' => 'cachelock_file_default',
    ),
    'default_session' => 
    array (
      'name' => 'default_session',
      'plugin' => 'session',
      'configuration' => 
      array (
      ),
      'features' => 14,
      'modes' => 2,
      'default' => true,
      'class' => 'cachestore_session',
      'lock' => 'cachelock_file_default',
    ),
    'default_request' => 
    array (
      'name' => 'default_request',
      'plugin' => 'static',
      'configuration' => 
      array (
      ),
      'features' => 31,
      'modes' => 4,
      'default' => true,
      'class' => 'cachestore_static',
      'lock' => 'cachelock_file_default',
    ),
  ),
  'modemappings' => 
  array (
    0 => 
    array (
      'mode' => 1,
      'store' => 'default_application',
      'sort' => -1,
    ),
    1 => 
    array (
      'mode' => 2,
      'store' => 'default_session',
      'sort' => -1,
    ),
    2 => 
    array (
      'mode' => 4,
      'store' => 'default_request',
      'sort' => -1,
    ),
  ),
  'definitions' => 
  array (
    'core/string' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 30,
      'canuselocalstore' => true,
      'component' => 'core',
      'area' => 'string',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/langmenu' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'canuselocalstore' => true,
      'component' => 'core',
      'area' => 'langmenu',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/databasemeta' => 
    array (
      'mode' => 1,
      'requireidentifiers' => 
      array (
        0 => 'dbfamily',
      ),
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 15,
      'component' => 'core',
      'area' => 'databasemeta',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/eventinvalidation' => 
    array (
      'mode' => 1,
      'staticacceleration' => true,
      'requiredataguarantee' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'eventinvalidation',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/questiondata' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'requiredataguarantee' => false,
      'datasource' => 'question_finder',
      'datasourcefile' => 'question/engine/bank.php',
      'component' => 'core',
      'area' => 'questiondata',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/htmlpurifier' => 
    array (
      'mode' => 1,
      'canuselocalstore' => true,
      'component' => 'core',
      'area' => 'htmlpurifier',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/config' => 
    array (
      'mode' => 1,
      'staticacceleration' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'config',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/groupdata' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 2,
      'component' => 'core',
      'area' => 'groupdata',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/calendar_subscriptions' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'core',
      'area' => 'calendar_subscriptions',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/calendar_categories' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simpledata' => true,
      'invalidationevents' => 
      array (
        0 => 'changesincoursecat',
        1 => 'changesincategoryenrolment',
      ),
      'ttl' => 900,
      'component' => 'core',
      'area' => 'calendar_categories',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/capabilities' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 2,
      'ttl' => 3600,
      'component' => 'core',
      'area' => 'capabilities',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/yuimodules' => 
    array (
      'mode' => 1,
      'component' => 'core',
      'area' => 'yuimodules',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/observers' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 2,
      'component' => 'core',
      'area' => 'observers',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/plugin_manager' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'plugin_manager',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/coursecattree' => 
    array (
      'mode' => 1,
      'staticacceleration' => true,
      'invalidationevents' => 
      array (
        0 => 'changesincoursecat',
      ),
      'component' => 'core',
      'area' => 'coursecattree',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/coursecat' => 
    array (
      'mode' => 2,
      'invalidationevents' => 
      array (
        0 => 'changesincoursecat',
        1 => 'changesincourse',
      ),
      'ttl' => 600,
      'component' => 'core',
      'area' => 'coursecat',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/coursecatrecords' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'invalidationevents' => 
      array (
        0 => 'changesincoursecat',
      ),
      'component' => 'core',
      'area' => 'coursecatrecords',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/coursesectionspreferences' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'simpledata' => false,
      'staticacceleration' => true,
      'component' => 'core',
      'area' => 'coursesectionspreferences',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/coursecontacts' => 
    array (
      'mode' => 1,
      'staticacceleration' => true,
      'simplekeys' => true,
      'ttl' => 3600,
      'component' => 'core',
      'area' => 'coursecontacts',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/courseeditorstate' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'courseeditorstate',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/repositories' => 
    array (
      'mode' => 4,
      'component' => 'core',
      'area' => 'repositories',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/externalbadges' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'ttl' => 3600,
      'component' => 'core',
      'area' => 'externalbadges',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/coursemodinfo' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'canuselocalstore' => true,
      'requirelockingbeforewrite' => true,
      'component' => 'core',
      'area' => 'coursemodinfo',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/userselections' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'userselections',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/completion' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'ttl' => 3600,
      'staticacceleration' => true,
      'staticaccelerationsize' => 2,
      'component' => 'core',
      'area' => 'completion',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/coursecompletion' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'ttl' => 3600,
      'staticacceleration' => true,
      'staticaccelerationsize' => 30,
      'component' => 'core',
      'area' => 'coursecompletion',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/navigation_expandcourse' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'navigation_expandcourse',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/suspended_userids' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'suspended_userids',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/roledefs' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 30,
      'component' => 'core',
      'area' => 'roledefs',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/plugin_functions' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 5,
      'component' => 'core',
      'area' => 'plugin_functions',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/tags' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'staticacceleration' => true,
      'component' => 'core',
      'area' => 'tags',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/grade_categories' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'invalidationevents' => 
      array (
        0 => 'changesingradecategories',
      ),
      'component' => 'core',
      'area' => 'grade_categories',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/temp_tables' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'temp_tables',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/tagindexbuilder' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simplevalues' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 10,
      'ttl' => 900,
      'invalidationevents' => 
      array (
        0 => 'resettagindexbuilder',
      ),
      'component' => 'core',
      'area' => 'tagindexbuilder',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/contextwithinsights' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 1,
      'component' => 'core',
      'area' => 'contextwithinsights',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/message_processors_enabled' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 3,
      'component' => 'core',
      'area' => 'message_processors_enabled',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/message_time_last_message_between_users' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simplevalues' => true,
      'datasource' => '\\core_message\\time_last_message_between_users',
      'component' => 'core',
      'area' => 'message_time_last_message_between_users',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/fontawesomeiconmapping' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 1,
      'component' => 'core',
      'area' => 'fontawesomeiconmapping',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/postprocessedcss' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => false,
      'component' => 'core',
      'area' => 'postprocessedcss',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/user_group_groupings' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'core',
      'area' => 'user_group_groupings',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/presignup' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simpledata' => true,
      'ttl' => 1800,
      'component' => 'core',
      'area' => 'presignup',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/modelfirstanalyses' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'modelfirstanalyses',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/portfolio_add_button_portfolio_instances' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'staticacceleration' => true,
      'component' => 'core',
      'area' => 'portfolio_add_button_portfolio_instances',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/course_user_dates' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'core',
      'area' => 'course_user_dates',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/calculablesinfo' => 
    array (
      'mode' => 4,
      'simplekeys' => false,
      'simpledata' => false,
      'component' => 'core',
      'area' => 'calculablesinfo',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/user_course_content_items' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'component' => 'core',
      'area' => 'user_course_content_items',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/user_favourite_course_content_items' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'component' => 'core',
      'area' => 'user_favourite_course_content_items',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/recommendation_favourite_course_content_items' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'component' => 'core',
      'area' => 'recommendation_favourite_course_content_items',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/contentbank_enabled_extensions' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'core',
      'area' => 'contentbank_enabled_extensions',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/contentbank_context_extensions' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'core',
      'area' => 'contentbank_context_extensions',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/h5p_content_type_translations' => 
    array (
      'mode' => 1,
      'simpledata' => true,
      'component' => 'core',
      'area' => 'h5p_content_type_translations',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/h5p_library_files' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'canuselocalstore' => true,
      'component' => 'core',
      'area' => 'h5p_library_files',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/grade_letters' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 100,
      'component' => 'core',
      'area' => 'grade_letters',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/license' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => false,
      'component' => 'core',
      'area' => 'license',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/gradesetting' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 100,
      'component' => 'core',
      'area' => 'gradesetting',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/course_image' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'datasource' => '\\core_course\\cache\\course_image',
      'component' => 'core',
      'area' => 'course_image',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/contentbank_allowed_categories' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simpledata' => true,
      'invalidationevents' => 
      array (
        0 => 'changesincoursecat',
        1 => 'changesincategoryenrolment',
      ),
      'component' => 'core',
      'area' => 'contentbank_allowed_categories',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/contentbank_allowed_courses' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simpledata' => true,
      'invalidationevents' => 
      array (
        0 => 'changesincoursecat',
        1 => 'changesincategoryenrolment',
        2 => 'changesincourse',
      ),
      'component' => 'core',
      'area' => 'contentbank_allowed_courses',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/reportbuilder_allowed_reports' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'ttl' => 1800,
      'component' => 'core',
      'area' => 'reportbuilder_allowed_reports',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'core/file_imageinfo' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'canuselocalstore' => true,
      'staticaccelerationsize' => 100,
      'component' => 'core',
      'area' => 'file_imageinfo',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'availability_completion/previous_cache' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'availability_completion',
      'area' => 'previous_cache',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'availability_grade/scores' => 
    array (
      'mode' => 1,
      'staticacceleration' => true,
      'staticaccelerationsize' => 2,
      'ttl' => 3600,
      'component' => 'availability_grade',
      'area' => 'scores',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'availability_grade/items' => 
    array (
      'mode' => 1,
      'staticacceleration' => true,
      'staticaccelerationsize' => 2,
      'ttl' => 3600,
      'component' => 'availability_grade',
      'area' => 'items',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'mod_assign/overrides' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'datasource' => '\\mod_assign\\cache\\overrides',
      'component' => 'mod_assign',
      'area' => 'overrides',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'mod_bigbluebuttonbn/serverinfo' => 
    array (
      'mode' => 1,
      'invalidationevents' => 
      array (
        0 => 'mod_bigbluebuttonbn/serversettingschanged',
      ),
      'component' => 'mod_bigbluebuttonbn',
      'area' => 'serverinfo',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'mod_bigbluebuttonbn/validatedurls' => 
    array (
      'mode' => 1,
      'simpledata' => true,
      'component' => 'mod_bigbluebuttonbn',
      'area' => 'validatedurls',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'mod_bigbluebuttonbn/recordings' => 
    array (
      'mode' => 1,
      'invalidationevents' => 
      array (
        0 => 'mod_bigbluebuttonbn/recordingchanged',
        1 => 'mod_bigbluebuttonbn/serversettingschanged',
      ),
      'ttl' => 300,
      'component' => 'mod_bigbluebuttonbn',
      'area' => 'recordings',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'mod_bigbluebuttonbn/currentfetch' => 
    array (
      'mode' => 4,
      'component' => 'mod_bigbluebuttonbn',
      'area' => 'currentfetch',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'mod_forum/forum_is_tracked' => 
    array (
      'mode' => 4,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'mod_forum',
      'area' => 'forum_is_tracked',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'mod_glossary/concepts' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => false,
      'staticacceleration' => true,
      'staticaccelerationsize' => 30,
      'component' => 'mod_glossary',
      'area' => 'concepts',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'mod_lesson/overrides' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'datasource' => '\\mod_lesson\\cache\\overrides',
      'component' => 'mod_lesson',
      'area' => 'overrides',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'mod_lti/keyset' => 
    array (
      'mode' => 1,
      'component' => 'mod_lti',
      'area' => 'keyset',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'mod_quiz/overrides' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'datasource' => '\\mod_quiz\\cache\\overrides',
      'component' => 'mod_quiz',
      'area' => 'overrides',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'repository_googledocs/folder' => 
    array (
      'mode' => 1,
      'simplekeys' => false,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 10,
      'canuselocalstore' => true,
      'component' => 'repository_googledocs',
      'area' => 'folder',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'repository_onedrive/folder' => 
    array (
      'mode' => 1,
      'simplekeys' => false,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 10,
      'canuselocalstore' => true,
      'component' => 'repository_onedrive',
      'area' => 'folder',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_dataprivacy/purpose' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 30,
      'component' => 'tool_dataprivacy',
      'area' => 'purpose',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_dataprivacy/purpose_overrides' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => false,
      'staticacceleration' => true,
      'staticaccelerationsize' => 50,
      'component' => 'tool_dataprivacy',
      'area' => 'purpose_overrides',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_dataprivacy/contextlevel' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 10,
      'component' => 'tool_dataprivacy',
      'area' => 'contextlevel',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_mobile/plugininfo' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 1,
      'component' => 'tool_mobile',
      'area' => 'plugininfo',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_mobile/subscriptiondata' => 
    array (
      'mode' => 2,
      'simplekeys' => true,
      'simpledata' => false,
      'component' => 'tool_mobile',
      'area' => 'subscriptiondata',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_monitor/eventsubscriptions' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 10,
      'component' => 'tool_monitor',
      'area' => 'eventsubscriptions',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_policy/policy_optional' => 
    array (
      'mode' => 4,
      'component' => 'tool_policy',
      'area' => 'policy_optional',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_uploadcourse/helper' => 
    array (
      'mode' => 4,
      'component' => 'tool_uploadcourse',
      'area' => 'helper',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_usertours/tourdata' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 1,
      'component' => 'tool_usertours',
      'area' => 'tourdata',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'tool_usertours/stepdata' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'staticaccelerationsize' => 1,
      'component' => 'tool_usertours',
      'area' => 'stepdata',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'quizaccess_seb/quizsettings' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'quizaccess_seb',
      'area' => 'quizsettings',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'quizaccess_seb/config' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'quizaccess_seb',
      'area' => 'config',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
    'quizaccess_seb/configkey' => 
    array (
      'mode' => 1,
      'simplekeys' => true,
      'simpledata' => true,
      'staticacceleration' => true,
      'component' => 'quizaccess_seb',
      'area' => 'configkey',
      'selectedsharingoption' => 2,
      'userinputsharingkey' => '',
    ),
  ),
  'definitionmappings' => 
  array (
  ),
  'locks' => 
  array (
    'cachelock_file_default' => 
    array (
      'name' => 'cachelock_file_default',
      'type' => 'cachelock_file',
      'dir' => 'filelocks',
      'default' => true,
    ),
  ),
);