<?php 

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use App\Creational\FactoryMethod\Exemplo1\Bicycle;
use App\Creational\FactoryMethod\Exemplo1\BrazilianFactory;
use App\Creational\FactoryMethod\Exemplo1\CarFerrari;
use App\Creational\FactoryMethod\Exemplo1\FactoryMethod;
use PHPUnit\Framework\TestCase;



class FactoryMethodTest extends TestCase
{
    public function testCanCreateCheapVehicleInBrazil()
    {
        $factory = new BrazilianFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $result);
    }

    public function testCanCreateFastVehicleInBrazil()
    {
    	$factory = new BrazilianFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarFerrari::class, $result);
    }


    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage spaceship is not a valid vehicle
     */
    public function testUnknownType()
    {
        (new BrazilianFactory())->create('spaceship');
    }
}