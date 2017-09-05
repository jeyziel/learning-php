<?php 

namespace AppTest\Creational\AbstractFactory\Exemplo1;


use App\Creational\AbstractFactory\Exemplo1\HtmlFactory;
use App\Creational\AbstractFactory\Exemplo1\HtmlText;
use App\Creational\AbstractFactory\Exemplo1\JsonFactory;
use App\Creational\AbstractFactory\Exemplo1\JsonText;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
	public function testCanCreateHtmlText()
	{
		$factory = new HtmlFactory();
		$text = $factory->createText('foobar');

		$this->assertInstanceOf(HtmlText::class, $text);
	}

	public function testCanCreateJsonText()
	{
		$factory = new JsonFactory();
		$text = $factory->createText('foobar');
		$this->assertInstanceOf(JsonText::class,$text);
	}
}