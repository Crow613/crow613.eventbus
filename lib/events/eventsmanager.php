<?php

namespace Crow613\EventBus\Events;


use Crow613\EventBus\Contract\Events\EventsManagerInterface;

abstract class EventsManager
{
    public string $moduleId = '';
    public string $eventName = '';
    public string $class = '';
    public string $handler = '';

    /**
     * @param string $class
     * @param string $handler
     * @return $this
     */
    protected function make(string $class, string $handler): EventsManagerInterface
    {
        $this->class = $class;
        $this->handler = $handler;
        return $this;
    }
}