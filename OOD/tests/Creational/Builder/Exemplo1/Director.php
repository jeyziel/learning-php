<?php

use PHPUnit\Framework\TestCase;
use App\Creational\Builder\Exemplo1\Director;
use App\Creational\Builder\Exemplo1\Parts\Truck;
use App\Creational\Builder\Exemplo1\TruckBuilder;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }
}
