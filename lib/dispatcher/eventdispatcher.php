<?php

namespace Crow613\EventBus\Dispatcher;

use Bitrix\Main\EventManager;
use Crow613\EventBus\Events\EventsManager;

class EventDispatcher
{

    /**
     * @param EventsManager $event
     * @return void
     */
    public static function dispatch(EventsManager $event): void
    {
        self::init(
            $event->moduleId,
            $event->eventName,
            $event->class,
            $event->handler
        );
    }

    /**
     * @param string $moduleId
     * @param string $eventName
     * @param string $class
     * @param string $handler
     * @return void
     */
    private static function init(
        string $moduleId,
        string $eventName,
        string $class,
        string $handler): void
    {
        EventManager::getInstance()
            ->addEventHandler(
                $moduleId,
                $eventName,
                [$class, $handler]
            );
    }

}