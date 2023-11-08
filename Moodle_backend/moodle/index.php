<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle frontpage.
 *
 * @package    core
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if (!file_exists('./config.php')) {
    header('Location: install.php');
    die;
}

require_once('config.php');
require_once($CFG->dirroot .'/course/lib.php');
require_once($CFG->libdir .'/filelib.php');

redirect_if_major_upgrade_required();

$urlparams = array();
if (!empty($CFG->defaulthomepage) &&
        ($CFG->defaulthomepage == HOMEPAGE_MY || $CFG->defaulthomepage == HOMEPAGE_MYCOURSES) &&
        optional_param('redirect', 1, PARAM_BOOL) === 0
) {
    $urlparams['redirect'] = 0;
}
$PAGE->set_url('/', $urlparams);
$PAGE->set_pagelayout('frontpage');
$PAGE->add_body_class('limitedwidth');
$PAGE->set_other_editing_capability('moodle/course:update');
$PAGE->set_other_editing_capability('moodle/course:manageactivities');
$PAGE->set_other_editing_capability('moodle/course:activityvisibility');

// Prevent caching of this page to stop confusion when changing page after making AJAX changes.
$PAGE->set_cacheable(false);

require_course_login($SITE);

$hasmaintenanceaccess = has_capability('moodle/site:maintenanceaccess', context_system::instance());

// If the site is currently under maintenance, then print a message.
if (!empty($CFG->maintenance_enabled) and !$hasmaintenanceaccess) {
    print_maintenance_message();
}

$hassiteconfig = has_capability('moodle/site:config', context_system::instance());

if ($hassiteconfig && moodle_needs_upgrading()) {
    redirect($CFG->wwwroot .'/'. $CFG->admin .'/index.php');
}

// If site registration needs updating, redirect.
\core\hub\registration::registration_reminder('/index.php');

if (get_home_page() != HOMEPAGE_SITE) {
    // Redirect logged-in users to My Moodle overview if required.
    $redirect = optional_param('redirect', 1, PARAM_BOOL);
    if (optional_param('setdefaulthome', false, PARAM_BOOL)) {
        set_user_preference('user_home_page_preference', HOMEPAGE_SITE);
    } else if (!empty($CFG->defaulthomepage) && ($CFG->defaulthomepage == HOMEPAGE_MY) && $redirect === 1) {
        // At this point, dashboard is enabled so we don't need to check for it (otherwise, get_home_page() won't return it).
        redirect($CFG->wwwroot .'/my/');
    } else if (!empty($CFG->defaulthomepage) && ($CFG->defaulthomepage == HOMEPAGE_MYCOURSES) && $redirect === 1) {
        redirect($CFG->wwwroot .'/my/courses.php');
    } else if (!empty($CFG->defaulthomepage) && ($CFG->defaulthomepage == HOMEPAGE_USER)) {
        $frontpagenode = $PAGE->settingsnav->find('frontpage', null);
        if ($frontpagenode) {
            $frontpagenode->add(
                get_string('makethismyhome'),
                new moodle_url('/', array('setdefaulthome' => true)),
                navigation_node::TYPE_SETTING);
        } else {
            $frontpagenode = $PAGE->settingsnav->add(get_string('frontpachogesettings'), null, navigation_node::TYPE_SETTING, null);
            $frontpagenode->force_open();
            $frontpagenode->add(get_string('makethismyhome'),
                new moodle_url('/', array('setdefaulthome' => true)),
                navigation_node::TYPE_SETTING);
        }
    }
}

// Trigger event.
course_view(context_course::instance(SITEID));

$PAGE->set_pagetype('site-index');
$PAGE->set_docs_path('');
$editing = $PAGE->user_is_editing();
$PAGE->set_title(get_string('home'));
$PAGE->set_heading($SITE->fullname);
$PAGE->set_secondary_active_tab('coursehome');

$courserenderer = $PAGE->get_renderer('core', 'course');

if ($hassiteconfig) {
    $editurl = new moodle_url('/course/view.php', ['id' => SITEID, 'sesskey' => sesskey()]);
    $editbutton = $OUTPUT->edit_button($editurl);
    $PAGE->set_button($editbutton);
}

echo $OUTPUT->header();

$siteformatoptions = course_get_format($SITE)->get_format_options();
$modinfo = get_fast_modinfo($SITE);
$modnamesused = $modinfo->get_used_module_names();

// Print Section or custom info.
if (!empty($CFG->customfrontpageinclude)) {
    // Pre-fill some variables that custom front page might use.
    $modnames = get_module_types_names();
    $modnamesplural = get_module_types_names(true);
    $mods = $modinfo->get_cms();

    include($CFG->customfrontpageinclude);

} else if ($siteformatoptions['numsections'] > 0) {
    echo $courserenderer->frontpage_section1();
}
// Include course AJAX.
include_course_ajax($SITE, $modnamesused);

// Render available courses
//echo $courserenderer->frontpage();



// Function to convert course query from database into suitable format for rendering
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

$templatecontext = (object)[
    "is_searched" => false,
    "search_message" => false,
    "search_keyword" => false,
    "is_admin" => is_siteadmin($USER->id),
];

global $DB;

// Search course
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $templatecontext -> is_searched = true;
    $search_keyword = $_POST["course-name"];
    if (!empty($search_keyword)) {
        $templatecontext -> search_keyword = $search_keyword;
        global $DB;
        // Sử dụng $DB->get_records_sql để thực hiện truy vấn SQL
        $sql = "SELECT * FROM {course} WHERE fullname LIKE :keyword";
        $params = array('keyword' => "%$search_keyword%");
        $search_courses = $DB->get_records_sql($sql, $params);

        // Convert to suitable format to render
        if (!empty($search_courses)) {
            $num_founded_courses = count($search_courses);
            $templatecontext -> num_founded_courses = $num_founded_courses;
            $templatecontext -> search_courses = convert_to_template($search_courses);
        } else {
            $templatecontext -> search_message = "No matching courses found.";
        }
    } else {
        $templatecontext -> search_message = "Please enter a search keyword.";
    }
}

// Render enrolled Courses List
$templatecontext -> isloggedin = false;


if (isloggedin()) {
    $templatecontext -> isloggedin = true;

    global $USER;

    // Get id of current user
    $user_id = $USER->id;

    // Query sql
    $sql = "SELECT *
            FROM {user_enrolments} ue
            JOIN {enrol} e ON ue.enrolid = e.id
            JOIN {course} c ON e.courseid = c.id
            WHERE ue.userid = :userid";

    $enrollments = $DB->get_records_sql($sql, array('userid' => $user_id));

    $templatecontext->enrolled_courses = convert_to_template($enrollments);
}

// Render recommendation courses
$templatecontext->recommended_message = "You don't have any course recommendations (This is because you haven't registered for any courses).";
if (!$templatecontext -> is_admin) {
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
//
//    $courses_id_list = json_decode($courses_id_list, true);
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

}

$courses = $DB->get_records('course', array(), '', '*', 0, 10);

$courses_to_template = convert_to_template($courses);

$templatecontext -> courses = $courses_to_template;


echo $OUTPUT->render_from_template('local_message/courseList', $templatecontext);
// End render courses list

if ($editing && has_capability('moodle/course:create', context_system::instance())) {
    echo $courserenderer->add_new_course_button();
}
echo $OUTPUT->footer();
