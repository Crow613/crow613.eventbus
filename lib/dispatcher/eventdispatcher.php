<?php

namespace Crow613\EventBus\Dispatcher;

use Crow613\EventBus\Event\RegisterEvents;
use Crow613\EventBus\Register\EventRegister;

 final class EventDispatcher extends EventRegister
{
     /**
      * @param RegisterEvents $event
      * @return void
      */
     public static function dispatch(\Crow613\EventBus\Event\RegisterEvents $event): void
    {
        self::init(
            $event->moduleId,
            $event->eventName,
            $event->class,
            $event->handler
        );
    }

}