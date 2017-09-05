<?php 

namespace AppTest\Creational;

use App\Creational\Math;

//./vendor/bin/phpunit tests/Creational/MathTest.php
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
	public function testSum()
	{
		$m = new Math();
		$this->assertEquals(5,$m->sum(3,2));
	}
}