<?php 

namespace App\Creational\FactoryMethod\Exemplo1;

use App\Creational\FactoryMethod\Exemplo1\VehicleInterface;


class CarFerrari implements VehicleInterface
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