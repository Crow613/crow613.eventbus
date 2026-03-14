<?php
namespace Crow613\EventBus\Event;

class RegisterEvents extends \Crow613\EventBus\Event\Config\Events
{
    protected  static string $moduleId = '';
    protected  static string $eventName = '';
    protected  static string $class = '';
    protected  static string $handler = '';

    /**
     * @param string $eventName
     * @param string $class
     * @param string $handler
     * @return void
     */
    protected static function handlerRegister(
        string $eventName,
        string $class, 
        string $handler 
    ): void 
    {
        self::$eventName = $eventName;
        self::$class = $class;
        self::$handler = $handler;
        \Crow613\EventBus\Dispatcher\EventDispatcher::dispatch(new static());
    }
}