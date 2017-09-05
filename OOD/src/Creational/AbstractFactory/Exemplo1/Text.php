<?php 

namespace App\Creational\AbstractFactory\Exemplo1;

abstract class Text
{
	/**
	*@var string
	*/
	private $text;

	public function __construct(String $text)
	{
		$this->text = $text;
	}
}