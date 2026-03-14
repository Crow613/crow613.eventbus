<?php
namespace Crow613\EventBus\Event\Im;

final class OnAfterCreateEvent extends \Crow613\EventBus\Event\RegisterEvents
{
    protected function __construct()
    {
        $this->moduleId = 'im';
        $this->eventName = static::$eventName;
        $this->class = static::$class;
        $this->handler = static::$handler;
    }   
    final public static function chatHandlerRegister(string $class, string $handler): void
    {
    }
}