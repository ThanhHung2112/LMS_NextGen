<?php


require_once(__DIR__ . '/../../config.php');

global $DB;

$PAGE->set_url(new moodle_url('/local/message/manage.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('Manage messages');

$message = $DB->get_records('local_message');

echo $OUTPUT->header();

$templatecontext = (object)[
    'messages' => $messages
];

echo $OUTPUT->render_from_template('local_message/manage', $templatecontext);

echo $OUTPUT->footer();