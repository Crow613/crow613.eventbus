<?php

namespace Crow613\EventBus\Core\Container;
use Closure;
use ReflectionClass;
use ReflectionParameter;

class Container
{
    private array $bindings = [];
    private array $instances = [];

    /**
     * @param string $id
     * @param Closure $resolver
     * @return void
     */
    public function bind(string $id, Closure $resolver): void
    {
        $this->bindings[$id] = $resolver;
    }

    /**
     * @param string $id
     * @param Closure $resolver
     * @return void
     */
    public function singleton(string $id, Closure $resolver): void
    {
        $this->bindings[$id] = function($container) use ($id, $resolver) {
            if(!isset($this->instances[$id])) $this->instances[$id] = $resolver($container);
            return $this->instances[$id];
        };

    }

    /**
     * @param string $id
     * @return object|string
     */
    public function get(string $id): Object|string
    {
        if(isset($this->bindings[$id])) return $this->bindings[$id];

        return $this->build($id);
    }

    /**
     * @param string $class
     * @return object|string
     * @throws \ReflectionException
     */
    private function build(string $class): Object|string
    {
        if (!class_exists($class))
        {
           throw new \InvalidArgumentException("Class {$class} does not exist.");
        }
        $reflection = new ReflectionClass($class);
        if(!$reflection->isInstantiable())
        {
            throw new \ReflectionException("Class {$class} is not instantiable.");
        }
        $constructor = $reflection->getConstructor();
        if(!$constructor)
        {
            return new $class();
        }
        $dependencies = [];

        foreach($constructor->getParameters() as $param)
        {
            $dependencies[] = $this->resolveParameter($param);
        }
        return $reflection->newInstanceArgs($dependencies);
    }

    /**
     * @param ReflectionParameter $parameter
     * @return Closure
     */
    private function resolveParameter(ReflectionParameter $parameter): Closure
    {
        $type = $parameter->getType();
        if(!$type)
        {
            throw new \InvalidArgumentException("Parameter {$parameter->getName()} does not exist.");
        }
        $className =  $type->getName();
        return $this->get($className);
    }
}