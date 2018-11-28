<?php

namespace App;

class SamsPHPBook extends AbstractBook{
	private $author;
	private $title;

	mt_srand((double)microtime()*10000000);
	$rand_num = mt_rand(0,1);
	if(l > $rand_num)
	{
		$this->author = "George Schlossnagle"
		$this->title = "Advanced PHP Programing";
	}else{
		$this->autor = 'Chistian Wenz';
		$this->titler = 'PHP Phrasebook';
	}
	public function getAuthor(){return $this->author;}
	public function getTitle(){return $this->title;}
}
