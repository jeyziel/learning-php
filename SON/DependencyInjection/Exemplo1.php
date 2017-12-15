<?php 


class DataBase
{
	private $driver;

	public function __construct($pdo)
	{
		$this->driver = $pdo;
	}

}

class Driver{

	private $name;

	public function getName()
	{
		return "DRIVER";
	}
}

$ioc = [];
$ioc['db'] = function() {
	$driver = new Driver();
	return new Database($driver);
};

var_dump($ioc['db']());




