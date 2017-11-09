<?php
class block_succeed extends block_base {
    public function init() {
        $this->title = get_string('succeed_title', 'block_succeed');
    }
	public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }
 
    $this->content         =  new stdClass;
	$this->content->text   = '<div class="succeed_links">';
	//$this->content->text  .= '<strong>Study Guides</strong><br>';
	$this->content->text  .= '<a title="succeed@solent homepage" href="/succeed">succeed@solent homepage</a><br>';
	$this->content->text  .= '<a title="Referencing and academic integrity" href="/succeed/referencing">Referencing and academic integrity</a><br>';
	$this->content->text  .= '<a title="Academic writing" href="/succeed/academic-writing">Academic writing</a><br>';
	$this->content->text  .= '<a title="Time management and group work" href="/succeed/time-group-work">Time management and group work</a><br>';
	$this->content->text  .= '<a title="Writing essays and reports" href="/succeed/writing-essays-reports">Writing essays and reports</a><br>';
	$this->content->text  .= '<a title="Literature reviews" href="/succeed/literature-reviews">Literature reviews</a><br>';
	$this->content->text  .= '<a title="Dissertations" href="/succeed/dissertations">Dissertations</a><br>';
	$this->content->text  .= '<a title="Grammar" href="/succeed/grammar">Grammar</a><br>';
	$this->content->text  .= '<a title="Research skills" href="/succeed/research-skills">Research skills</a><br>';
    $this->content->text  .= '<a title="Passing exams and tutor feedback" href="/succeed/passing-exams">Passing exams and tutor feedback</a><br>';
	$this->content->text  .= '<a title="Presentations" href="/succeed/presentations">Presentations</a><br>';
	$this->content->text  .= '<a title="Essential digital skills and awareness" href="/succeed/digital-skills">Essential digital skills and awareness</a><br>';
	$this->content->text  .= '<a title="Maths and statistics" href="/succeed/maths-statistics">Maths and statistics</a><br>';
	$this->content->text  .= '<a title="Critical thinking" href="/succeed/critical-thinking">Critical thinking</a><br>';
	$this->content->text  .= '<a title="Reflective thinking and writing" href="/succeed/reflective-thinking-writing">Reflective thinking and writing</a><br>';
	$this->content->text  .= '</div>';
	
	
    $this->content->footer = '';
 
    return $this->content;
  }
}