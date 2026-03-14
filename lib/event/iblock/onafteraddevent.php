<?php
namespace Crow613\EventBus\Event\Im;

final class OnAfterAddEvent extends \Crow613\EventBus\Event\AbstractEvents
{
    protected function __construct()
    {
        $this->moduleId = 'iblock';
        $this->eventName = static::$eventName;
        $this->class = static::$class;
        $this->handler = static::$handler;
    }   
    final public static function elementHandlerRegister(string $class, string $handler): void
    {
    }
    final public static function sectionHandlerRegister(string $class, string $handler): void
    {
    }
}