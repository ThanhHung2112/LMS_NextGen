<?php


require_once(__DIR__ . '/../../config.php');
require_once($CFG->dirroot . '/local/message/classes/form/edit.php');

$PAGE->set_url(new moodle_url('/local/message/edit.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('Edit');

// Display form
$mform = new edit();

echo $OUTPUT->header();

$mform->display();

if ($mform->is_cancelled()) {
    // Go back to manage.php page
    redirect($CFG->wwwroot . '/local/message/edit.php', 'You cancel the message form');

}
else if ($fromform = $mform->get_data()) {

//    Use to save into database
//    $recordtoinsert = new stdClass();
//    $recordtoinsert->messagetext = $fromform->messagetext;

    $api_url = 'http://localhost:5000/process_form';
    $api_data = json_encode([
        'messagetext' => $fromform->messagetext
    ]);
// Truy vấn SQL enroll
    // Call api enro]
    // response
    // render
//    $ch = curl_init($api_url);
//    curl_setopt($ch, CURLOPT_POST, 1);
//    curl_setopt($ch, CURLOPT_POSTFIELDS, $api_data);
//    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//        'Content-Type: application/json',
//        'Content-Length: ' . strlen($api_data) // Thêm độ dài dữ liệu vào tiêu đề
//    ));
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
//    $api_response = curl_exec($ch);
//    if ($api_response === false) {
//        // Xử lý lỗi nếu có
//        $error_message = curl_error($ch);
//        // Điều hướng hoặc thực hiện xử lý lỗi tại đây
//    } else {
//        $templatecontext = (object)[
//            'question'=> $fromform->messagetext,
//            'answer'=>$api_response
//        ];
//
//        echo $OUTPUT->render_from_template('local_message/manage', $templatecontext);
//    }
    $templatecontext = (object)[
        'questions'=> array(
            (object)['id'=>1, 'question'=>'What?'],
            (object)['id'=>1, 'question'=>'When?'],
            (object)['id'=>1, 'question'=>'Where?'],
        ),
        'answers'=> "bus"
    ];

    echo $OUTPUT->render_from_template('local_message/manage', $templatecontext);
//    $DB->insert_record('local_message', $recordtoinsert);


}

echo $OUTPUT->footer();