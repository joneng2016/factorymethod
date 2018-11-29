<?php

namespace App;

class ORellyFactoryMethod extends AbstractFactoryMethod
{
	private $context="ORelly";
	function makePHPBook($param)
	{
		$book = null;
		switch ($param) {
			case 'us':
				$book = new ORellyPHPBook;
				break;
			case 'other':
				$book = new SamsPHPBook;
			default:
				$book = new ORellyPHPBook;
			break;
		}
		return $book;
	}
}
