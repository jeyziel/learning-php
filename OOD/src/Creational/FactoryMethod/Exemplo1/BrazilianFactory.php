<?php 

namespace App\Creational\FactoryMethod\Exemplo1;

use App\Creational\FactoryMethod\Exemplo1\Bicycle;
use App\Creational\FactoryMethod\Exemplo1\CarFerrari;
use App\Creational\FactoryMethod\Exemplo1\FactoryMethod;
use App\Creational\FactoryMethod\Exemplo1\VehicleInterface;

class BrazilianFactory extends FactoryMethod
{
    protected function createVehicle(string $type): VehicleInterface
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                return new CarFerrari();
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}