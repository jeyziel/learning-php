<?php 

namespace App\Creational\AbstractFactory\Exemplo1;

use App\Creational\AbstractFactory\Exemplo1\AbstractFactory;

class JsonFactory extends AbstractFactory
{
	public function createText(String $content) : Text
	{
		return new JsonText($content);
	}
}