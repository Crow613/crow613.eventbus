<?php
namespace Crow613\EventBus\Event\Iblock;

final class OnBeforeUpdateEvent extends \Crow613\EventBus\Event\RegisterEvents
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