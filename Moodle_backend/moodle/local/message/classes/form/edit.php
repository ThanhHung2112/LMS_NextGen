<?php

//moodleform is defined in formslib.php
require_once("$CFG->libdir/formslib.php");

class edit extends moodleform {
    //Add elements to form
    public function definition() {
        global $CFG;
       
        $mform = $this->_form; // Don't forget the underscore! 

        $mform->addElement('textarea', 'messagetext', "Paragraph");
        $mform->setType('messagetext', PARAM_NOTAGS); // Set type of element.
        $mform->setDefault('messagetext', 'Please your paragraph');       // Default value.
       
        $options = array(
            '0' => \core\output\notification::NOTIFY_WARNING,
            '1' => \core\output\notification::NOTIFY_SUCCESS,
            '2' => \core\output\notification::NOTIFY_ERROR,
            '3' => \core\output\notification::NOTIFY_INFO
        );

        $this->add_action_buttons();
    }
    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
}