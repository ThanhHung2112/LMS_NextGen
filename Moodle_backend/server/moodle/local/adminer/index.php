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
 * Print adminer in an iframe. It chooses the db driver by looking into the Moodle db configuration.
 *
 * @package    local_adminer
 * @author Andreas Grabs <moodle@grabs-edv.de>
 * @copyright  Andreas Grabs
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/../../config.php');
require_once($CFG->libdir . '/adminlib.php');

switch ($CFG->dbtype) {
    case 'pgsql':
        $adminerdriver = 'pgsql';
        break;
    case 'sqlsrv':
    case 'mssql':
        $adminerdriver = 'mssql';
        break;
    case 'oci':
        $adminerdriver = 'oracle';
        break;
    default:
        $adminerdriver = 'server'; // This is for mysql.
        break;
}

require_login();
require_capability('local/adminer:useadminer', context_system::instance());

$myconfig = get_config('local_adminer');

admin_externalpage_setup('local_adminer', '', null);

$PAGE->set_heading($SITE->fullname);
$PAGE->set_title($SITE->fullname . ': ' . get_string('pluginname', 'local_adminer'));

// Check whether we have a legacy theme (clean, more, ...) or a boost based theme.
$legacycss = false;
if ($PAGE->theme->name != 'boost') { // If the theme is not boost itself it could have a boost parent.
    if (!in_array('boost', $PAGE->theme->parents)) {
        $legacycss = true;
    }
}

raise_memory_limit(MEMORY_HUGE);
set_time_limit(300);

$urloptions = array($adminerdriver => '', 'username' => '');
if (!empty($myconfig->startwithdb)) {
    $urloptions['db'] = $CFG->dbname;
}
$adminerurl = new \moodle_url('/local/adminer/lib/run_adminer.php', $urloptions);
$framebackgroundurl = new \moodle_url('/pix/y/loading.gif');

$modalcss = '
    .modal-dialog {
        max-width: 80%;
        margin-top: 5px;
        margin-bottom: 0;
    }
    .modal-content {
        max-height: 99vh;
    }
    #adminer-frame {
        background:url('.$framebackgroundurl->out().') center center no-repeat;
    }

    {{#legacycss}}
        .modal-backdrop.show {
            opacity: 0.8;
        }
        #local-adminer-modal.modal.fade.show {
            opacity: 1;
        }
    {{/legacycss}}
';

$content = new \stdClass();
$content->adminerurl = $adminerurl->out(false);
$content->adminerlaunchtitle = get_string('launchadminer', 'local_adminer');
// $content->framebackgroundurl = new \moodle_url('/pix/y/loading.gif');
$content->title = get_string('pluginname', 'local_adminer');
$content->modalcss = $modalcss;
if ($legacycss) {
    $content->legacycss = new \moodle_url('/local/adminer/legacy/legacy.css');
}

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'local_adminer'));
echo $OUTPUT->render_from_template('local_adminer/adminer', $content);
echo $OUTPUT->footer();
