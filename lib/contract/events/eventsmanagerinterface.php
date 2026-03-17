<?php

namespace Crow613\EventBus\Contract\Events;

interface EventsManagerInterface
{

    /**
     * @param string $type
     * @param string $eventMethod
     * @param string $handlerClass
     * @param string $handlerMethod
     * @param string|false $stateEvent
     * @return EventsManagerInterface
     */
    public function buildEvent(
        string       $type,
        string       $eventMethod,
        string       $handlerClass,
        string       $handlerMethod,
        string|false $stateEvent = false
    ): EventsManagerInterface;
}