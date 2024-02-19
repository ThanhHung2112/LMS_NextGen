<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Prints an instance of mod_demo.
 *
 * @package     mod_demo
 * @copyright   21E1020020@hueuni.edu.vn
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require(__DIR__.'/../../config.php');
require_once(__DIR__.'/lib.php');

// Course module id.
$id = optional_param('id', 0, PARAM_INT);

// Activity instance id.
$d = optional_param('d', 0, PARAM_INT);

// Action grading, edit, ...
$action = optional_param('action', '', PARAM_TEXT);


if ($id) {
    $cm = get_coursemodule_from_id('demo', $id, 0, false, MUST_EXIST);
    $course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
    $moduleinstance = $DB->get_record('demo', array('id' => $cm->instance), '*', MUST_EXIST);
} else {
    $moduleinstance = $DB->get_record('demo', array('id' => $d), '*', MUST_EXIST);
    $course = $DB->get_record('course', array('id' => $moduleinstance->course), '*', MUST_EXIST);
    $cm = get_coursemodule_from_instance('demo', $moduleinstance->id, $course->id, false, MUST_EXIST);
}

require_login($course, true, $cm);

$modulecontext = context_module::instance($cm->id);

//$event = \mod_demo\event\course_module_viewed::create(array(
//    'objectid' => $moduleinstance->id,
//    'context' => $modulecontext
//));
//$event->add_record_snapshot('course', $course);
//$event->add_record_snapshot('demo', $moduleinstance);
//$event->trigger();

$PAGE->set_url('/mod/demo/view.php', array('id' => $cm->id));
//$PAGE->set_title(format_string($moduleinstance->name));
$PAGE->set_title("AI ASSGINMENT");
$PAGE->set_heading(format_string($course->fullname));
$PAGE->set_context($modulecontext);

echo $OUTPUT->header();


$templatecontext = (object)[
    'course_id' => $id,
    'is_admin' => false,
    'questions' => '',
];

global $USER;
$current_user = $USER;

if (is_siteadmin($current_user->id)) {
    $templatecontext -> is_admin = true;
}

switch ($action) {
    case '':
        // Xử lý render
        $templatecontext -> has_assign = false;

        $id_ass = $moduleinstance->id;
        $assign = $DB->get_record('demo_assign', array('id_ass' => $id_ass));
        if ($assign) {
            $templatecontext -> has_assign = true;
            $templatecontext -> type_assign = $assign -> type;
            $templatecontext -> assign = $assign -> question;

            if ($assign -> type == 0) {
                $generated_questions = json_decode($assign -> question);
                $summarizes = json_decode($assign -> summarize);

                foreach ($generated_questions as $question) {
                    $question->question = ucfirst($question->question);
                    $question->answer = ucfirst($question->answer);
                    $question -> summary = ucfirst($summarizes[$question -> id - 1] -> summarize);
                }

                $templatecontext -> generated_questions = $generated_questions;
                $templatecontext -> file_path = $assign -> filepath;
                $templatecontext -> file_name = basename($assign -> filepath);
                $templatecontext -> id_assign = $id_ass;
            }

            if ($assign -> type == 2) {
                $templatecontext -> vietname_assign = true;
                $templatecontext -> vietnamese_questions = json_decode($assign -> question);
            }
        }

        // Check submission
        $submission = $DB->get_record('demo_writing_submit', array('id_user' => $current_user->id, 'id_ass' => $id_ass));
        if ($submission) {
            $templatecontext -> has_submission = true;
        }

        // Summary - participants
        $course = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
        $table = 'user_enrolments';
        $fields = 'DISTINCT userid';
        $conditions = ['enrolid' => $DB->get_field('enrol', 'id', ['courseid' => $course -> id])];
        $user_ids = $DB->get_records($table, $conditions, '', $fields);
        $user_ids = array_values($user_ids); // Chuyển đổi mảng kết hợp thành mảng tuần tự
        $participants_num = count($user_ids);
        $templatecontext -> participants_num = $participants_num;

        // Summary - submitted, need grading
        $submissions = $DB->get_records('demo_writing_submit', ['id_ass' => $id_ass]);
        $submited_num = count($submissions);
        $templatecontext -> submited_num = $submited_num;

        // Summary - Need grading
        $nullGradeSubmissions = $DB->get_records('demo_writing_submit', ['grade' => null]);
        $templatecontext -> need_grading_num = count($nullGradeSubmissions);

        // Summary for participant
        if ($templatecontext -> is_admin == false) {
            $submission = $DB->get_record('demo_writing_submit',
                ['id_user' => $current_user -> id,
                 'id_ass' => $id_ass]);
            $templatecontext -> is_graded = false;
            if ($submission -> grade) {
                $templatecontext -> grade = $submission -> grade;
                $templatecontext -> comment = $submission -> feedback;
            }
        }

        echo $OUTPUT->render_from_template('local_message/assign', $templatecontext);
        break;



    case 'addsubmission':
        $id_ass = $moduleinstance->id;
        $assign = $DB->get_record('demo_assign', array('id_ass' => $id_ass));
        if ($assign) {
            if ($assign -> type == 0) {
                $templatecontext -> ai_assign = true;
            } elseif ($assign -> type == 1) {
                $templatecontext -> manual_assign = true;
            } else {
                $templatecontext -> vietnamese_assign = true;

                $templatecontext -> vietnamese_questions = json_decode($assign -> question);
            }
            $templatecontext -> assign = $assign -> question;

            if ($assign -> type == 0) {
                $generated_questions = json_decode($assign -> question);

                foreach ($generated_questions as $question) {
                    $question->question = ucfirst($question->question);
                    $question->answer = ucfirst($question->answer);
                }


                // Thêm id vào để hiển thị input có name khác biệt
                $result = [];
                // Duyệt qua mảng và thêm các phần tử vào mảng kết quả
                foreach ($generated_questions as $question) {
                    $result[] = ["id" => $question -> id, "question" => $question -> question , "corrected_answer" => $question->answer];
                }

                $templatecontext -> generated_questions = $result;
                $templatecontext -> file_path = $assign -> filepath;
                $templatecontext -> file_name = basename($assign -> filepath);
            } else {
                $templatecontext -> question = $assign -> question;
            }
        }

        // Handle submit form answer -> save database
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST['answer']) {
                $data_to_save = new stdClass();
                $data_to_save -> answer = $_POST['answer'];
                $data_to_save -> id_ass = $id_ass;
                $data_to_save -> id_user = $current_user -> id;
                $DB->insert_record('demo_writing_submit', $data_to_save);
                redirect(new moodle_url('/mod/demo/view.php', array('id' => $cm->id)), 'Done', 0);
            
            // Vừa xử lý AI vừa xử lý Vietnamese quá tiện lợi
            } else {
                $answers = array_values($_POST);

                // Chuyển thêm corrected answer thành array để lưu vào cơ sở dữ liệu
                $assign = $DB->get_record('demo_assign', array('id_ass' => $id_ass));
                $generated_questions = json_decode($assign -> question);


                $corrected_answers = array(); // Tạo một mảng để chứa giá trị "answer"

                foreach ($generated_questions as $item) {
                    $corrected_answers[] = $item -> answer;
                }
                // Lưu vào cơ sở dữ liệu
                $data_to_save = new stdClass();
                $data_to_save->answer = json_encode($answers);
                $data_to_save->corrected_answer = json_encode($corrected_answers);
                $data_to_save->id_user = $current_user->id;

                $moduleinstance = $DB->get_record('demo', array('id' => $cm->instance), '*', MUST_EXIST);
                $data_to_save -> id_ass = $moduleinstance -> id;

                $record = $DB->insert_record('demo_writing_submit', $data_to_save);

                redirect(new moodle_url('/mod/demo/view.php', array('id' => $cm->id)), 'Done', 0);
            }


        }


        echo $OUTPUT->render_from_template('local_message/addsubmission', $templatecontext);
        break;

    case 'editsubmission':
        $id_ass = $moduleinstance->id;
        $assign = $DB->get_record('demo_assign', array('id_ass' => $id_ass));

        if ($assign) {
            $templatecontext -> type_assign = $assign -> type;
            $templatecontext -> assign = $assign -> question;

            if ($assign -> type == 0) {
                $templatecontext -> ai_assign = true;
            } elseif ($assign -> type == 1) {
                $templatecontext -> manual_assign = true;
            } else {
                $templatecontext -> vietnamese_assign = true;

                $templatecontext -> vietnamese_questions = json_decode($assign -> question);
            }

            if ($assign -> type == 0) {
                $generated_questions = json_decode($assign -> question);

                foreach ($generated_questions as $question) {
                    $question->question = ucfirst($question->question);
                    $question->answer = ucfirst($question->answer);
                }


                // Duyệt qua mảng và thêm các phần tử vào mảng kết quả

                // add the last answers of current user
                $submission = $DB->get_record('demo_writing_submit', array('id_user' => $current_user->id, 'id_ass' => $id_ass));
                $answers = json_decode($submission -> answer);
                // Thêm id vào để hiển thị input có name khác biệt
                $result = [];
                $id = 1;
                foreach ($generated_questions as $question) {
                    $result[] = ["id" => $id, "question" => $question -> question ,
                                 "answer" => $answers[$id-1], 'corrected_answer' => $question -> answer];
                    $id++;
                }
                $templatecontext -> answers = json_encode($result);
                $templatecontext -> generated_questions = $result;
                $templatecontext -> file_path = $assign -> filepath;
                $templatecontext -> file_name = basename($assign -> filepath);
            } else {
                $submission = $DB->get_record('demo_writing_submit', array('id_user' => $current_user->id, 'id_ass' => $id_ass));
                $templatecontext -> question = $assign -> question;
                $templatecontext -> answer = $submission -> answer;
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($assign -> type == 0 or $assign -> type == 2) {
                $answers = array_values($_POST);
                $submission = $DB->get_record('demo_writing_submit', array('id_user' => $current_user->id, 'id_ass' => $id_ass));

                // Lưu vào cơ sở dữ liệu
                $data_to_save = new stdClass();
                $data_to_save -> id = $submission->id;
                $data_to_save-> answer = json_encode($answers);
                $conditions = array('id_user' => $current_user->id);

                $success = $DB->update_record('demo_writing_submit', $data_to_save, $conditions);

                //add handle database query (if necessary)

                redirect(new moodle_url('/mod/demo/view.php', array('id' => $cm->id)), 'Done', 0);
            } else {
                $submission = $DB->get_record('demo_writing_submit', array('id_user' => $current_user->id, 'id_ass' => $id_ass));
                $submission -> answer =  $_POST['answer'];
                $submission -> feedback = null;
                $submission -> factcheck = null;
                $DB -> update_record('demo_writing_submit', $submission);
                redirect(new moodle_url('/mod/demo/view.php', array('id' => $cm->id)), 'Done', 0);
            }

        }


        // Addsubmission and Editsubmission use 1 template
        echo $OUTPUT->render_from_template('local_message/addsubmission', $templatecontext);
        break;

    case 'createassign':
        $moduleinstance = $DB->get_record('demo', array('id' => $cm->instance), '*', MUST_EXIST);
        $id_ass = $moduleinstance -> id;
        $templatecontext ->  id_ass = $id_ass;

        // Xử lý trong trường hợp edit
        $is_edit = optional_param('edit', '', PARAM_TEXT);
        if ($is_edit) {
            // Render phù hợp với edit
            $assign = $DB->get_record('demo_assign', array('id_ass' => $id_ass));
            $templatecontext -> is_edit = true;
            if ($assign -> type == 0) {
                $templatecontext -> ai_assign = true;
            } elseif ($assign -> type == 1){
                $templatecontext -> manual_assign = true;
                $templatecontext -> question = $assign -> question;
            }
            // Render câu hỏi với bài kiểm tra thủ công
            else {
                $templatecontext -> vietnamese_assign = true;
            }
        }

        // Xử lý khi giao thức POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($is_edit) {
                if ($_FILES['file']) {
                    $file = $_FILES['file'];
                    $fileName = $file['name'];
                    $fileTmpName = $file['tmp_name'];
                    $fileDestination = '';

                    if ($fileName) {
                        $fileDestination = 'D:/VietFuture/full_moodle/server/moodle/mod/demo/static_files/' . $fileName; // Thư mục lưu tệp tải lên
                    }

                    move_uploaded_file($fileTmpName, $fileDestination);

                    $templatecontext -> uploaded_file_path = $fileDestination;
                }
                if ($_POST['question_and_summarize'] != '') {
                    // Xử lý response trước khi lưu
                    $assign = $DB->get_record('demo_assign', array('id_ass' => $id_ass));
                    $question_and_summarize = $_POST['question_and_summarize'];
                    $question_data = json_decode($question_and_summarize);
                    $assign->summarize = json_encode($question_data -> summarize_texts);
                    $assign->filepath = "http://localhost/mod/demo/static_files/" . $_POST['file_name'];
                    $assign->question = json_encode($question_data -> questions_generated);
                    $assign->is_summ = 1; // Set to 1 or 0 as needed
                    $assign -> type = 0;
                    $record = $DB->update_record('demo_assign', $assign);

                    // Redirect sau khi lưu
                    redirect(new moodle_url('/mod/demo/view.php', array('id' => $cm->id)), 'Done', 0);
                }
                if ($_POST['question']) {
                    $assign = $DB->get_record('demo_assign', array('id_ass' => $id_ass));
                    $assign->summarize = null;
                    $assign->filepath = null;
                    $assign -> question = $_POST['question'];
                    $assign -> type = 1;
                    $DB->update_record('demo_assign', $assign);
                    redirect(new moodle_url('/mod/demo/view.php', array('id' => $cm->id)), 'Done', 0);
                }

                // Xử lý edit cho Câu hỏi tiếng việt
                if ($_POST['is-vietnamese-assign']) {
                    $data = $_POST;
                    $vietnamese_problems = [];
    
                    for ($i = 1; isset($data['question' . $i]); $i++) {
                        $vietnamese_problems[] = [
                            'id' => $i,
                            'question' => $data['question' . $i],
                            'answer' => $data['answer' . $i],
                        ];
                    }
                    

                    $assign = $DB->get_record('demo_assign', array('id_ass' => $id_ass));
                    $assign->summarize = null;
                    $assign->filepath = null;
                    $assign -> question = json_encode($vietnamese_problems);
                    $assign -> type = 2;
                    $DB->update_record('demo_assign', $assign);
                    redirect(new moodle_url('/mod/demo/view.php', array('id' => $cm->id)), 'Done', 0);
                }

            }
            // Xử lý lưu file trên server
            if ($_FILES['file']) {
                $file = $_FILES['file'];
                $fileName = $file['name'];
                $fileTmpName = $file['tmp_name'];
                $fileDestination = '';

                if ($fileName) {
                    $fileDestination = 'D:/VietFuture/full_moodle/server/moodle/mod/demo/static_files/' . $fileName; // Thư mục lưu tệp tải lên
                }

                move_uploaded_file($fileTmpName, $fileDestination);

                $templatecontext -> uploaded_file_path = $fileDestination;
            }
            // Xử lý khi tạo bài kiểm tra thử công
            if ($_POST['question']) {
                $data_to_save = new stdClass();
                $data_to_save -> question = $_POST['question'];
                $data_to_save -> type = 1;
                $data_to_save -> id_ass = $id_ass;
                $DB->insert_record('demo_assign', $data_to_save);
                redirect(new moodle_url('/mod/demo/view.php', array('id' => $cm->id)), 'Done', 0);
            }
            // Xử lý tạo mới và lưu một question generator
            if ($_POST['question_and_summarize'] != '') {
                // Xử lý response trước khi lưu
                $question_and_summarize = $_POST['question_and_summarize'];

                $question_data = json_decode($question_and_summarize);
                $data_to_save = new stdClass();
                $data_to_save->summarize = json_encode($question_data -> summarize_texts);
                $data_to_save->filepath = "http://localhost/mod/demo/static_files/" . $_POST['file_name'];
                $data_to_save->question = json_encode($question_data -> questions_generated);
                $data_to_save->is_summ = 1; // Set to 1 or 0 as needed
                $data_to_save -> type = 0;
                $moduleinstance = $DB->get_record('demo', array('id' => $cm->instance), '*', MUST_EXIST);
                $data_to_save -> id_ass = $moduleinstance -> id;
                $record = $DB->insert_record('demo_assign', $data_to_save);

                // Redirect sau khi lưu
                redirect(new moodle_url('/mod/demo/view.php', array('id' => $cm->id)), 'Done', 0);

            }

            // Xử lý render câu hỏi và câu trả lời để khi nhập số lượng câu hỏi
            if ($_POST['number-of-questions']) {
                $number_of_question = intval($_POST['number-of-questions']);

                $number_of_question_for_render = [];
                for ($i = 1; $i <= $number_of_question; $i++) {
                    $number_of_question_for_render[] = ['id' => $i];
                }
                $templatecontext -> number_of_question = $number_of_question_for_render;
                $templatecontext -> has_num = true;
            }

            // Xử lý khi nhận câu hỏi và câu trả lời tiếng việt
            if ($_POST['is-vietnamese-assign']) {
                $data = $_POST;
                $vietnamese_problems = [];

                for ($i = 1; isset($data['question' . $i]); $i++) {
                    $vietnamese_problems[] = [
                        'id' => $i,
                        'question' => $data['question' . $i],
                        'answer' => $data['answer' . $i],
                    ];
                }

                $templatecontext -> test = json_encode($vietnamese_problems);
                // Lưu vào cơ sở dữ liệu
                $data_to_save = new stdClass();
                $data_to_save->question = json_encode($vietnamese_problems);
                $data_to_save->is_summ = 1;
                $data_to_save -> type = 2;
                $moduleinstance = $DB->get_record('demo', array('id' => $cm->instance), '*', MUST_EXIST);
                $data_to_save -> id_ass = $moduleinstance -> id;
                $record = $DB->insert_record('demo_assign', $data_to_save);
                redirect(new moodle_url('/mod/demo/view.php', array('id' => $cm->id)), 'Done', 0);
            }
        }

        echo $OUTPUT->render_from_template('local_message/createassign', $templatecontext);
        break;

    case 'viewsub':
        $id_ass = $moduleinstance->id;
        $templatecontext -> module_instance = $id;

        $user_ids = $DB->get_records('demo_writing_submit', ['id_ass' => $id_ass], '', 'id_user');
        $table_demo_writing_submit = 'demo_writing_submit';
        $table_user = 'user';
        $fields_user = 'u.id, u.firstname, u.lastname, u.email, d.grade';

        $conditions_demo_writing_submit = ['id_ass' => $id_ass];
        $conditions_user = ['u.id' => $user_ids];

        $join_condition = "u.id = d.id_user";

        $user_data = $DB->get_records_sql("
                SELECT $fields_user
                FROM {" . $table_demo_writing_submit . "} d
                JOIN {" . $table_user . "} u ON $join_condition
                WHERE d.id_ass = :id_ass
            ", ['id_ass' => $id_ass]);

        // Đã lấy được id, firstname, lastname, email, grade trong $user_data
        $templatecontext -> has_submission = false;
        if (!empty($user_data)) {
            $templatecontext->has_submission = true;
            $user_template = array();
            foreach ($user_data as $user) {
                $user -> fullname = $user -> firstname . ' ' . $user -> lastname;
                $user_template[] = $user;
            }
            $templatecontext -> users = $user_template;
            $templatecontext -> id_ass = $id_ass;
        }

//        $templatecontext -> submissions = ;

        echo $OUTPUT->render_from_template('local_message/viewsub', $templatecontext);
        break;

    case 'grading':
        $id_user = optional_param('id-user', 0, PARAM_INT);
        $id_ass = optional_param('id-ass', 0, PARAM_INT);

        $submission = $DB->get_record('demo_writing_submit', array('id_user' => $id_user, 'id_ass' => $id_ass));
        $assign = $DB->get_record('demo_assign', array('id_ass' => $id_ass));

        $templatecontext -> type_assign = $assign -> type;
        $templatecontext -> module_instance_id = $id;

        if ($assign -> type == 0) {
            $templatecontext -> ai_assign = true;

            // Render assign->summarize dùng cho việc gọi api và hiện loading
            $templatecontext -> summarizes = json_decode($assign -> summarize);
            $questions_and_correct_answer = json_decode($assign -> question);
            $answers = json_decode($submission -> answer);
            $factcheck = json_decode($submission -> factcheck);
            $summarizes = json_decode($assign -> summarize);

            function capitalizeAfterDot($inputString) {
                return preg_replace_callback('/\.\s*([a-z])/', function($match) {
                    return strtoupper($match[0]);
                }, $inputString);
            }

            $questions_and_correct_answer_and_answers = [];
            foreach ($answers as $index => $answer) {
                $questions_and_correct_answer_and_answers[] = [
                    "answer" => ucfirst($answer),
                    "summary" => capitalizeAfterDot(ucfirst($summarizes[$index] -> summarize)),
                    "id" => $questions_and_correct_answer[$index] -> id,
                    "question" => ucfirst($questions_and_correct_answer[$index] -> question),
                    "factcheck" => $factcheck[$index] -> label
                ];
            }


            $templatecontext -> information = $questions_and_correct_answer_and_answers;
            $templatecontext -> file_path = $assign -> filepath;
            $templatecontext -> file_name = basename($assign -> filepath);
        } elseif ($assign -> type == 1) {
            $templatecontext -> manual_assign = true;

            $templatecontext -> question = $assign -> question;
            $templatecontext -> writing_answer = $submission -> answer;
            $english_check = json_decode($submission -> factcheck);
            $templatecontext -> cefr = $english_check -> predicted_level;

            // Xử lý để hiển thị cả error words
            $correct_answer = $english_check -> corrected_texts[0] -> corrected_text;
            $templatecontext -> correct_answer = $correct_answer;

            foreach ($english_check -> grammar_check as $tense_check) {
                $tense_check -> tense = ucfirst($tense_check -> tense);
            }

            if ($english_check -> grammar_check) {
                $tenses = array_column($english_check -> grammar_check , 'tense');
                $tense_counts = array_count_values($tenses);
                $result = [];
                foreach (array_unique($tenses) as $tense) {
                    $result[] = ["tense" => $tense, "frequency" => $tense_counts[$tense]];
                }
                $templatecontext -> has_tenses = true;
    
    
                $templatecontext -> tenses = $result;
            }
        } else {
            $templatecontext -> vietnamese_assign = true;

            // Render assign->summarize dùng cho việc gọi api và hiện loading
            $vietnamese_info = json_decode($assign -> question);
            $answers = json_decode($submission -> answer);

            function capitalizeAfterDot($inputString) {
                return preg_replace_callback('/\.\s*([a-z])/', function($match) {
                    return strtoupper($match[0]);
                }, $inputString);
            }

            $vietnamese_questions = [];
            foreach ($answers as $index => $answer) {
                $vietnamese_questions[] = [
                    "answer" => ucfirst($answer),
                    "corrected_answer" => capitalizeAfterDot(ucfirst($vietnamese_info[$index] -> answer)),
                    "id" => $vietnamese_info[$index] -> id,
                    "question" => ucfirst($vietnamese_info[$index] -> question),
                ];
            }


            $templatecontext -> vietnamese_questions = $vietnamese_questions;
        }


        // nhận được parameter là edit=true thì hiển thị thêm điểm và feedback để giáo viên sửa lại
        $is_edit = optional_param('edit', 0, PARAM_TEXT);

        if ($is_edit) {
            $templatecontext -> old_grade = $submission -> grade;
            $templatecontext -> old_feedback = $submission -> feedback;
        }




        // Xử lý lưu grade:
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $submission -> grade = intval($_POST['grade']);
            $submission -> feedback = $_POST['feedback'];

            // Xử lý cả factcheck và grammar check trong cùng một textarea bên dưới
            // trong database factcheck sẽ là cả grammar check và factcheck nhé
            $submission -> factcheck = $_POST['factcheck'];

            $DB->update_record('demo_writing_submit', $submission);

            if ($_POST['is-factcheck'] != 'true') {
                redirect(new moodle_url('/mod/demo/view.php', array('id' => $cm->id, 'action' => 'viewsub')), 'Done', 0);
            } else {
                redirect(new moodle_url('/mod/demo/view.php', array('id' => $cm->id, 'action' => 'grading',
                    'id-ass' => $id_ass, 'id-user' => $id_user)), 'Done', 0);
            }
        }




        echo $OUTPUT->render_from_template('local_message/grading', $templatecontext);
        break;
    
    case 'editAIquestion':
        $id_ass = optional_param('id-ass', 0, PARAM_INT);
        $assign = $DB->get_record('demo_assign', array('id_ass' => $id_ass));
        $generated_questions = json_decode($assign -> question);
        $summarizes = json_decode($assign -> summarize);
        foreach ($generated_questions as $question) {
            $question->question = ucfirst($question->question);
            $question->answer = ucfirst($question->answer);
            $question -> summary = ucfirst($summarizes[$question -> id - 1] -> summarize);
        }
        $templatecontext -> generated_questions = $generated_questions;
        $templatecontext -> file_path = $assign -> filepath;
        $templatecontext -> file_name = basename($assign -> filepath);

        // POST METHOD: Edit AI questions
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $data = $_POST;
            $summarize_to_save = [];

            // Get question from assign
            $question_to_save = json_decode($assign -> question);

            foreach ($data as $key => $value) {
                $check_key = substr($key, 0, $length - 1);
                $id = substr($key, -1); // Lấy số cuối cùng từ key (ví dụ: "question1" => 1)
                if ($check_key == "summary") {
                    $summaryKey = 'summary' . $id;
                    $summarize_to_save[] = ["id" => $id, "summarize" => $data[$summaryKey]];
                }

                if ($check_key == "question") {
                    $question_to_save[$id - 1] -> question  = $data['question' . $id];
                }
            }

            $assign -> summarize = json_encode($summarize_to_save);
            $assign -> question = json_encode($question_to_save);

            $DB->update_record('demo_assign', $assign);
            redirect(new moodle_url('/mod/demo/view.php', array('id' => $cm->id), 'Done', 0));
            
        }

        
        echo $OUTPUT->render_from_template('local_message/editAIquestion', $templatecontext);
        break;
}


echo $OUTPUT->footer();
