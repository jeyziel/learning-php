<?php 

namespace App\Creational\Builder\Exemplo1;

use App\Creational\Builder\Exemplo1\Parts\Vehicle;


interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}