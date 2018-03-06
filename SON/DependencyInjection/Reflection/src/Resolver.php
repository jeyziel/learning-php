<?php 

namespace SON\DI;

class Resolver
{
	private $dependenciesInject;

	public function resolveFunction($fn, $dependenciesInject = [])
	{
		if ($dependenciesInject !== []) {
			$this->dependenciesInject = $dependenciesInject;
		}

		$info = new \ReflectionFunction($fn);
        $parameters = $info->getParameters();
        $dependencies = $this->getDependencies($parameters);
        return call_user_func_array($info->getClosure(), $dependencies);
	}

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
				$dependencies[] = $this->resolveNonClass($parameter);
			}else {
				$dependencies[] = $this->resolveClass($dependency);
			}
		}

		return $dependencies;
	}

	protected function resolveNonClass(\ReflectionParameter $parameter)
	{
		if (isset($this->dependenciesInject[$parameter->name])) {
            return $this->dependenciesInject[$parameter->name];
        }
        if ($parameter->isDefaultValueAvailable()) {
            return $parameter->getDefaultValue();
        }

		throw new \Exception("cannot resolve the unknow");
	}

	

}