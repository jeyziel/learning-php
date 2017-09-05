<?php 

namespace App\Creational\AbstractFactory\Exemplo1;

use App\Creational\AbstractFactory\Exemplo1\AbstractFactory;

class HtmlFactory extends AbstractFactory
{
	public function createText(String $content) : Text
	{
		return new HtmlText($content);
	}
}