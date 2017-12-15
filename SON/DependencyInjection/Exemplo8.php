<?php 

namespace MyNamespace;

class Dependency 
{
	public function showMe()
	{
		return 'ola eu sou o ' . Dependency::class;
	}
}

$class = new \ReflectionClass('MyNamespace\Dependency');
// $object = $class->newInstance();

var_dump($class->getMethods());