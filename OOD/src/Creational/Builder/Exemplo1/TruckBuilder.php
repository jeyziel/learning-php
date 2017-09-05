<?php 

namespace App\Creational\Builder\Exemplo1;

use App\Creational\Builder\Exemplo1\Parts\Door;
use App\Creational\Builder\Exemplo1\Parts\Wheel;
use App\Creational\Builder\Exemplo1\Parts\Truck;
use App\Creational\Builder\Exemplo1\Parts\Engine;
use App\Creational\Builder\Exemplo1\Parts\Vehicle;
use App\Creational\Builder\Exemplo1\BuilderInterface;



class TruckBuilder implements BuilderInterface
{
    
    private $truck;


    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
