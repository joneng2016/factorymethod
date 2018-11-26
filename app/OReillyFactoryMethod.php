<?php

namespace App;

class ORellyFactoryMethod extends AbstractFactoryMethod{
	private $context="OReilly";
	function makePHPBook($param)
	{
		$book = null;
		switch ($param) {
			case 'us':
				$book = new OReillyPHPBook;
				break;
			case 'other'
				$book = new SamsPHPBook;
			default:
				$book = new OReillyPHPBook;
			break;
		}
		return $book;
	}
}
