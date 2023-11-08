<?php


require_once(__DIR__ . '/../../config.php');

// Get course id from param url
$courseid = required_param('id', PARAM_INT);

$PAGE->set_url(new moodle_url('/local/message/coursedetails.php'), array('id' => $courseid));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('Course details');

echo $OUTPUT->header();

global $DB;

$templatecontext = (object)[];

function convert_to_template($before_courses) {
    $after_courses = array();
    foreach ($before_courses as $course) {
        $parts_category_description = explode('-', $course ->summary);
        $parts_fullname_level = explode('-', $course ->fullname);
        $description =  trim($parts_category_description[1]);
        $category = trim($parts_category_description[0]);
        $fullname = trim($parts_fullname_level[0]);
        $level = trim($parts_fullname_level[1]);
        $course -> fullname = $fullname;
        $course -> category_template = $category;
        $course -> level = $level;
        $course -> description = $description;
        $course -> id_for_re_sys = $course -> id - 3411;

        if ($course -> id > 1) {
            $course -> id_for_image = $course -> id - 3410;
            if ($course -> id_for_image > 1000) {
                $new_value = ($course -> id_for_image - 1001) / (3525-1001);
                $course -> id_for_image = intval($new_value * 1000 + 1);
            }
        } else {
            $course -> id_for_image = 1;
        }
        array_push($after_courses, (object)$course);
    }
    return $after_courses;
}

// Sử dụng biến $DB để truy vấn thông tin khóa học
$sql = "SELECT * FROM {course} WHERE id = :courseid";
$params = array('courseid' => $courseid);

$course = $DB->get_record_sql($sql, $params);
$course = convert_to_template(array($course))[0];
// Handle relevant Courses
$field = $course -> category_template;
$sql = "SELECT * FROM {course} WHERE summary LIKE ? LIMIT 10";
$relevant_courses = $DB->get_records_sql($sql, array("%$field -%"));

$templatecontext -> course = $course;
$templatecontext -> relevant_courses = convert_to_template($relevant_courses);


echo $OUTPUT->render_from_template('local_message/coursedetails', $templatecontext);

echo $OUTPUT->footer();