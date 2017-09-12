<?php 

namespace App\Creational\FactoryMethod\Exemplo1;

use App\Creational\FactoryMethod\Exemplo1\VehicleInterface;

abstract class FactoryMethod
{
	const CHEAP = 'cheap';
	const FAST = 'fast';

	abstract protected function createVehicle(String $type):VehicleInterface;

	public function create(String $type) : VehicleInterface
	{
		$obj = $this->createVehicle($type);
        $obj->setColor('black');
        return $obj;
	} 



}