<?php

namespace App;

class SamsFactoryMethod extends AbstractFactoryMethod
{
	private $context = "Sams";
	function makePHPBook($param)	
	{
		$book = "null";
		switch ($param) 
		{
			case "us":
				$book = new SamsPHPBook;
			break;
			case "other":
				$book = new ORellyPHPBook;
			case "otherother":
				$book = new VisualQuickstartPHPBook;
			break;
			default:
				$book = new SamsPHPBook;
			break;
		}
		return $book;
	}
}
