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
        $this->content->text = '<p>
    <a href="https://learn.solent.ac.uk/course/view.php?id=90">
    <img src="/blocks/succeed/images/home.png" alt="" width="25" height="25" role="presentation">&nbsp;Succeed Home Page</a>
    </p><br>
    <h4>The Assignment Process:</h4>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=1">
            <img src="/blocks/succeed/images/1-assignment-briefs-icon.png" alt="" width="25" height="25" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31627&amp;section=0">1. Starting Assignments</a>
    </p>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=2">
            <img src="/blocks/succeed/images/2-finding-resources.png" alt="" width="25" height="25" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31629&amp;section=0">2. Finding Sources&nbsp;</a>
    </p>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=3">
            <img src="/blocks/succeed/images/3-using-resources-icon.png" alt="" width="25" height="25" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31628&amp;section=0">3. Using Sources&nbsp;</a>
    </p>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=4">
            <img src="/blocks/succeed/images/4-planning-and-development-icon.png" alt="" width="25" height="25" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31630&amp;section=0">4.&nbsp;Critical Thinking and Planning&nbsp;</a>
    </p>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=5">
            <img src="/blocks/succeed/images/5-writing-the-assignment-icon.png" alt="" width="25" height="25" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31631&amp;section=0">5. Writing an Assignment</a>
    </p>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=7">
            <img src="/blocks/succeed/images/6-referencing-icon.png" alt="" width="25" height="25" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31632&amp;section=0">6. Referencing</a>
    </p>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=9">
            <img src="/blocks/succeed/images/7-reflection-feedback-icon.png" alt="" width="25" height="25" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31636&amp;section=0">7. Feedback and Reflection</a>
    </p>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=10">
            <img src="/blocks/succeed/images/8-dissertations-icon.png" alt="" width="25" height="25" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31634&amp;section=0">8. Dissertations and Major Projects</a>
    </p>
    <br>
    <h4>Professional Skills:</h4>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=11">
            <img src="/blocks/succeed/images/teamwork-icon.png" alt="" width="25" height="25" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31690&amp;section=0">Group Work</a>
    </p>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=12">
            <img src="/blocks/succeed/images/organising-time-icon.png" alt="" width="21" height="25" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31635&amp;section=0">Managing Time and Stress</a>
    </p>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=6">
            <img src="/blocks/succeed/images/presentations-icon.png" alt="" width="25" height="26" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31637&amp;section=0">Giving Presentations</a>
    </p>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=13">
            <img src="/blocks/succeed/images/grammar-lauhuage-icon.png" alt="" width="25" height="23" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31649&amp;section=0">Grammar and Language Skills</a>
    </p>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=14">
            <img src="/blocks/succeed/images/maths-skills-icon.png" alt="" width="19" height="25" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31689&amp;section=0">Maths and Statistics</a>
    </p>
    <p>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31447&amp;section=15">
            <img src="/blocks/succeed/images/professional-practice-icon.png" alt="" width="21" height="25" role="presentation">
        </a>
        <a href="https://learn.solent.ac.uk/course/view.php?id=31691&amp;section=0">Professional Presence</a>
    </p>';

        return $this->content;
    }
}
