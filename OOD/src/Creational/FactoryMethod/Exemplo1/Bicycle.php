<?php 

namespace App\Creational\FactoryMethod\Exemplo1;

use App\Creational\FactoryMethod\Exemplo1\VehicleInterface;


class Bicycle implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;
	

    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }
}