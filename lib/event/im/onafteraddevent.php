<?php
namespace Crow613\EventBus\Event\Iblock;

final class OnAfterAddEvent extends \Crow613\EventBus\Event\RegisterEvents
{
    protected function __construct()
    {
        $this->moduleId = 'im';
        $this->eventName = static::$eventName;
        $this->class = static::$class;
        $this->handler = static::$handler;
    }   
    final public static function messageHandlerRegister(string $class, string $handler): void
    {
    }
}