<?php

namespace Crow613\EventBus\Services;

use Crow613\EventBus\Core\Container\Container;
use Crow613\EventBus\Dispatcher\EventDispatcher;

abstract class EventService
{
    protected string $type = "";
    protected string $eventClass = "";
    private string $eventMethod = "";

    /**
     * @param string $handlerClass
     * @param string $handlerMethod
     * @return void
     */
    final public function afterListenAdd(string $handlerClass, string $handlerMethod): void
    {
        $this->eventMethod = "add";
        $this->buildListen($handlerClass, $handlerMethod, "after");

    }

    /**
     * @param string $handlerClass
     * @param string $handlerMethod
     * @return void
     */
    final public function beforeListenAdd(string $handlerClass, string $handlerMethod): void
    {
        $this->eventMethod = "add";
        $this->buildListen($handlerClass, $handlerMethod, "before");
    }

    /**
     * @param string $handlerClass
     * @param string $handlerMethod
     * @return void
     */
    final public function afterListenUpdate(string $handlerClass, string $handlerMethod): void
    {
        $this->eventMethod = "update";
        $this->buildListen($handlerClass, $handlerMethod, "after");

    }

    /**
     * @param string $handlerClass
     * @param string $handlerMethod
     * @return void
     */
    final public function beforeListenUpdate(string $handlerClass, string $handlerMethod): void
    {
        $this->eventMethod = "update";
        $this->buildListen($handlerClass, $handlerMethod, "before");
    }

    /**
     * @param string $handlerClass
     * @param string $handlerMethod
     * @return void
     */
    final public function afterListenDelete(string $handlerClass, string $handlerMethod): void
    {
        $this->eventMethod = "delete";
        $this->buildListen($handlerClass, $handlerMethod, "after");
    }

    /**
     * @param string $handlerClass
     * @param string $handlerMethod
     * @return void
     */
    final public function beforeListenDelete(string $handlerClass, string $handlerMethod): void
    {
        $this->eventMethod = "delete";
        $this->buildListen($handlerClass, $handlerMethod, "before");
    }

    /**
     * @param $handlerClass
     * @param $handlerMethod
     * @param $eventState
     * @return void
     */
    private function buildListen(
        $handlerClass,
        $handlerMethod,
        $eventState
    ): void
    {
        $container = new Container();
        $serviceEventBuild = $container->get($this->eventClass);
        $serviceEventRegister = $container->get(EventDispatcher::class);

        $buildEvent = $serviceEventBuild->buildEvent(
            $this->type,
            $this->eventMethod,
            $handlerClass,
            $handlerMethod,
            $eventState
        );
        $serviceEventRegister->dispatch($buildEvent);
    }
}