<?php

namespace App;

class VisualQuickstartPHPBook extends AbstractBook{
	private $author;
	private $title;
	function __construct()
	{
		$this->author = 'Larry Ullman';
		$this->title = 'PHP for the Word Wide Web';
	}
	function getAuthor(){return $this->author;};
	function getTitle(return $this->title;);
}
