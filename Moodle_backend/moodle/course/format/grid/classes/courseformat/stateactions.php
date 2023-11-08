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

namespace format_grid\courseformat;

use core_courseformat\stateupdates;
use core_courseformat\stateactions as stateactions_base;
use stdClass;

/**
 * Contains the core course state actions specific to grid format.
 *
 * @package    format_grid
 * @copyright  2022 Ferran Recio <ferran@moodle.com>
 * @copyright  &copy; 2023-onwards G J Barnard based upon work done by Ferran Recio.
 * @author     G J Barnard - {@link https://gjbarnard.co.uk} and
 *                           {@link http://moodle.org/user/profile.php?id=442195}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class stateactions extends stateactions_base {

    /**
     * Create a course section.
     *
     * This method follows the same logic as changenumsections.php.
     *
     * @param stateupdates $updates the affected course elements track
     * @param stdClass $course the course object
     * @param int[] $ids not used
     * @param int $targetsectionid optional target section id (if not passed section will be appended)
     * @param int $targetcmid not used
     */
    public function section_add(
        stateupdates $updates,
        stdClass $course,
        array $ids = [],
        ?int $targetsectionid = null,
        ?int $targetcmid = null
    ): void {
        parent::section_add($updates, $course, $ids, $targetsectionid, $targetcmid);
        $format = course_get_format($course);
        $format->section_added();
    }

    /**
     * Delete course sections.
     *
     * This method follows the same logic as editsection.php.
     *
     * @param stateupdates $updates the affected course elements track
     * @param stdClass $course the course object
     * @param int[] $ids section ids
     * @param int $targetsectionid not used
     * @param int $targetcmid not used
     */
    public function section_delete(
        stateupdates $updates,
        stdClass $course,
        array $ids = [],
        ?int $targetsectionid = null,
        ?int $targetcmid = null
    ): void {
        parent::section_delete($updates, $course, $ids, $targetsectionid, $targetcmid);
        $format = course_get_format($course);
        $format->section_deleted();
    }
}
