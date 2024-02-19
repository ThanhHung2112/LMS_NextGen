<?php


global $OUTPUT;
require_once(__DIR__ . '/../../config.php');

global $DB;

$PAGE->set_url(new moodle_url('/local/message/viewRS.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('Check Recommendation System');

echo $OUTPUT->header();

$templatecontext = (object)[

];

global $DB;

function convert_to_template($before_courses) {
    $after_courses = array();
    foreach ($before_courses as $course) {
        $parts_category_description = explode('-', $course ->summary);
        $parts_fullname_level = explode('-', $course ->fullname);
        $category = trim($parts_category_description[0]);
        $fullname = trim($parts_fullname_level[0]);
        $level = trim($parts_fullname_level[1]);
        $course -> fullname = $fullname;
        $course -> category_template = $category;
        $course -> level = $level;
        if ($course -> id > 1) {
            $course -> id_for_image = $course -> id - 3410;
            if ($course -> id_for_image > 1000) {
                $new_value = ($course -> id_for_image - 1001) / (3525-1001);
                $course -> id_for_image = intval($new_value * 1000 + 1);
            }
        } else {
            $course -> id_for_image = 1;
        }

        $course -> id_for_re_sys = $course -> id - 3411;
        array_push($after_courses, (object)$course);
    }
    return $after_courses;
}

// Search course
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $templatecontext -> is_searched = true;
    $user_id = $_POST["user-id"];
    if (!empty($user_id)) {
        $templatecontext -> search_keyword = $user_id;
        global $DB;
        // Sử dụng $DB->get_records_sql để thực hiện truy vấn SQL
        try {
            $user = $DB->get_record('user', array('id' => $user_id), '*', MUST_EXIST);

            // Convert to suitable format to render
            if ($user) {

                // Render Enrolled Courses
                $sql = "SELECT *
                        FROM {user_enrolments} ue
                        JOIN {enrol} e ON ue.enrolid = e.id
                        JOIN {course} c ON e.courseid = c.id
                        WHERE ue.userid = :userid";

                $enrollments = $DB->get_records_sql($sql, array('userid' => $user_id));

                if (!empty($enrollments)) {
                    $templatecontext->enrolled_courses = convert_to_template($enrollments);

                    // Has enrolled courses -> has recommended courses
                    // Render recommended courses
                    $data = array();

                    foreach ($templatecontext->enrolled_courses as $enrolled_course) {
                        array_push($data, $enrolled_course -> id_for_re_sys);
                    }

                    $api_url= 'http://localhost:5000/recommend-course';

                    $json_data = json_encode($data);

                    $ch = curl_init();

                    curl_setopt($ch, CURLOPT_URL, $api_url);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


                    $response = curl_exec($ch);

                    curl_close($ch);
                    $courses = json_decode($response);
                    $courses_id_list = $courses -> recommended_list;

                    if ($courses_id_list) {
                        for ($i = 0; $i < count($courses_id_list); $i++) {
                            $courses_id_list[$i] += 3411;
                        }

                        $courses_id_list = implode(',', $courses_id_list);
                        $sql = "SELECT * FROM {course} WHERE id IN ($courses_id_list)";
                        $recommended_courses = $DB->get_records_sql($sql);
                        $templatecontext->recommended_courses = convert_to_template($recommended_courses);
                        $templatecontext->recommended_message = false;
                    } else {
                        $templatecontext -> recommended_message = "An error occurred with the recommendation system API.";
                    }
                } else {
                    $templatecontext->search_message = "User haven't enrolled in any courses";
                    $templatecontext->recommended_message = "User don't have any course recommendations (This is because user haven't registered for any courses).";
                }



            } else {
                $templatecontext -> search_message = "No matching user found.";
            }
        } catch (dml_exception $e) {
            $templatecontext -> search_message = "Please enter a right user id (or user id not exist)!";
        }



    } else {
        $templatecontext -> search_message = "Please enter a search keyword.";
    }
}


echo $OUTPUT->render_from_template('local_message/viewRS', $templatecontext);

echo $OUTPUT -> footer();