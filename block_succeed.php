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
	$this->content->text  .= '<strong>Study Guides</strong><br>';
	$this->content->text  .= '<a title="succeed@solent Homepage" href="/succeed">succeed@solent Homepage</a><br>';
	$this->content->text  .= '<a title="Research skills" href="/succeed/research-skills">Research skills</a><br>';
	//$this->content->text  .= '<a title="Online submission" href="/succeed/online-submission">Online submission</a><br>';
	$this->content->text  .= '<a title="Passing exams" href="/succeed/passing-exams">Passing exams</a><br>';
	$this->content->text  .= '<a title="Managing your learning" href="/succeed/managing-your-learning">Managing your learning</a><br>';
	$this->content->text  .= '<a title="Dissertations" href="/succeed/dissertations">Dissertations</a><br>';
	$this->content->text  .= '<a title="Writing strategies" href="/succeed/writing-strategies">Writing strategies</a><br>';
	$this->content->text  .= '<a title="Reflective thinking and writing" href="/succeed/reflective-thinking-writing">Reflective thinking and writing</a><br>';
    $this->content->text  .= '<a title="Referencing and plagiarism" href="/succeed/referencing-plagiarism">Referencing and plagiarism</a><br>';
	$this->content->text  .= '<a title="Working in groups" href="/succeed/working-in-groups">Working in groups</a><br>';
	$this->content->text  .= '<a title="Using tutor feedback" href="/succeed/using-tutor-feedback">Using tutor feedback</a><br>';
	$this->content->text  .= '<a title="Critical thinking" href="/succeed/critical-thinking">Critical thinking</a><br>';
	$this->content->text  .= '<a title="Literature reviews" href="/succeed/literature-reviews">Literature reviews</a><br>';
	$this->content->text  .= '<a title="Writing academically" href="/succeed/writing-academically">Writing academically</a><br>';
	$this->content->text  .= '</div>';
	
	
    $this->content->footer = '';
 
    return $this->content;
  }
}