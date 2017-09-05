<?php 

namespace App\Creational\AbstractFactory\Exemplo1;

abstract class AbstractFactory
{
	/**
	* In this case, the abstract factory is a contract for creating some
	*components for the web.There are two ways of rendering text: HTML and JSON
	*/
	abstract public function createText(String $text): Text;
}