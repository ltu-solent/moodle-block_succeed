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
 * Succeed block
 *
 * @package   block_succeed
 * @author    Mark Sharp <mark.sharp@solent.ac.uk>
 * @copyright 2022 Solent University {@link https://www.solent.ac.uk}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


class block_succeed extends block_base {
    public function init() {
        $this->title = get_string('succeed_title', 'block_succeed');
    }
    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->text = '
    <p>
        <img src="/blocks/succeed/images/home.png" alt="" width="25" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/succeed">Succeed Home Page</a>
    </p>
    <p>
        <img src="/blocks/succeed/images/get-ready.svg" alt="" width="25" height="25" role="presentation" />
        <a href="https://learn.solent.ac.uk/getreadytolearn">Get Ready to Learn</a>
    </p>
    <br>
    <h4>The Assignment Process</h4>
    <p>
        <img src="/blocks/succeed/images/1-assignment-briefs-icon.png" alt="" width="25" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/starting-assignments">Starting Assignments</a>
    </p>
    <p>
        <img src="/blocks/succeed/images/2-finding-resources.png" alt="" width="25" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/finding-sources">Finding Sources</a>
    </p>
    <p>
        <img src="/blocks/succeed/images/3-using-resources-icon.png" alt="" width="25" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/using-sources">Using Sources</a>
    </p>
    <p>
        <img src="/blocks/succeed/images/4-planning-and-development-icon.png" alt="" width="25" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/critical-thinking">Critical Thinking and Planning</a>
    </p>
    <p>
        <img src="/blocks/succeed/images/5-writing-the-assignment-icon.png" alt="" width="25" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/writing">Writing an Assignment</a>
    </p>
    <p>
        <img src="/blocks/succeed/images/6-referencing-icon.png" alt="" width="25" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/referencing">Referencing</a>
    </p>
    <p>
        <img src="/blocks/succeed/images/7-reflection-feedback-icon.png" alt="" width="25" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/feedback-reflection">Feedback and Reflection</a>
    </p>
    <p>
        <img src="/blocks/succeed/images/8-dissertations-icon.png" alt="" width="25" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/dissertations">Dissertations and Major Projects</a>
    </p>
    <br>
    <h4>Professional Skills</h4>
    <p>
        <img src="/blocks/succeed/images/teamwork-icon.png" alt="" width="25" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/group-work">Group Work</a>
    </p>
    <p>
        <img src="/blocks/succeed/images/organising-time-icon.png" alt="" width="21" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/time-stress">Managing Time and Stress</a>
    </p>
    <p>
        <img src="/blocks/succeed/images/presentations-icon.png" alt="" width="25" height="26" role="presentation">
        <a href="https://learn.solent.ac.uk/presentations">Giving Presentations</a>
    </p>
    <p>
        <img src="/blocks/succeed/images/grammar-lauhuage-icon.png" alt="" width="25" height="23" role="presentation">
        <a href="https://learn.solent.ac.uk/grammar">Grammar and Language Skills</a>
    </p>
    <p>
        <img src="/blocks/succeed/images/maths-skills-icon.png" alt="" width="19" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/maths-statistics">Maths and Numeracy</a>
    </p>
    <p>
        <img src="/blocks/succeed/images/professional-practice-icon.png" alt="" width="21" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/professional-presence">Professional Presence</a>
    </p>
    <br />
    <h4>Research Methods</h4>
    <p>
        <img src="/blocks/succeed/images/statistics-icon.png" alt="" width="25" height="25" role="presentation">
        <a href="https://learn.solent.ac.uk/quantitative-research-methods">Quantitative and Statistics</a>
    </p>
    ';

        return $this->content;
    }
}
