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
 * JS module for the course homepage.
 *
 * @module      core_course/view
 * @copyright   2021 Jun Pataleta <jun@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import * as CourseEvents from 'core_course/events';
import jQuery from 'jquery';

/**
 * Whether the event listener has already been registered for this module.
 *
 * @type {boolean}
 */
let registered = false;

/**
 * If the manualCompletionToggled event has fired.
 *
 * @type {boolean}
 */
let mctFired = false;

/**
 * Function to intialise and register event listeners for this module.
 *
 * @param {boolean} showcompletion Show completion is on.
 */
export const init = (showcompletion) => {
    if (registered) {
        return;
    }
    // Listen for toggled manual completion states of activities.
    document.addEventListener(CourseEvents.manualCompletionToggled, () => {
        mctFired = true;
    });
    registered = true;

    jQuery('#gridPopup').on('show.bs.modal', function(event) {
        var trigger = jQuery(event.relatedTarget);
        var section = trigger.data('section');

        var gml = jQuery('#gridPopupLabel');
        var triggersectionname = jQuery('#gridpopupsection-' + section).data('sectiontitle');
        gml.text(triggersectionname);

        var modal = jQuery(this);
        modal.find('#gridpopupsection-' + section).addClass('active');

        jQuery('#gridPopupCarousel').on('slid.bs.carousel', function() {
            var sno = jQuery('.gridcarousel-item.active').data('sectiontitle');
            gml.text(sno);
        });
    });
    jQuery('#gridPopup').on('hidden.bs.modal', function() {
        jQuery('.gridcarousel-item').removeClass('active');
        if (showcompletion && mctFired) {
            mctFired = false;
            window.location.reload();
        }
    });
};
