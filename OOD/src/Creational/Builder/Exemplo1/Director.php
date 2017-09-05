<?php 

namespace App\Creational\Builder\Exemplo1;


use App\Creational\Builder\Exemplo1\BuilderInterface;
use App\Creational\Builder\Exemplo1\Parts\Vehicle;

class Director
{
    public function build(BuilderInterface $builder) : Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}

