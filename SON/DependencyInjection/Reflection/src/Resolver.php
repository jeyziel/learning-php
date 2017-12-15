<?php 

namespace SON\DI;

class Resolver
{
	public function resolveClass($class, $dependenciesInject = [])
	{
		if ($dependenciesInject !== []) {
			$this->dependenciesInject = $dependenciesInject;
		}

		if (is_string($class)) {
			$class = new \ReflectionClass($class);
		}

		if (!$class->isInstantiable()) {
			throw new \Exception("{$class->name} is not instatiable");
		}

		$constructor = $class->getConstructor();

		if (is_null($constructor)) {
			return new $class->name;
		}

		$parameters = $constructor->getParameters();
		$dependencies = $this->getDependencies( $parameters );
		return $class->newInstanceArgs($dependencies);
	}

	protected function getDependencies( $parameters )
	{
		$dependencies = [];
		foreach($parameters as $parameter) {
			$dependency = $parameter->getClass();
			if (is_null($dependency)) {
				//nao retorna uma classe
			}else {
				$dependencies[] = $this->resolveClass($dependency);
			}
		}

		return $dependencies;
	}

	

}