<?php
namespace Crow613\EventBus\Register;

use Bitrix\Main\EventManager;

class EventRegister 
{

    /**
     * @param string $moduleId
     * @param string $eventName
     * @param string $class
     * @param string $handler
     * @return void
     */
    protected static function init(
        string $moduleId,
        string $eventName, 
        string $class,
        string $handler ): void
    {
       EventManager::getInstance()
       ->addEventHandler( 
        $moduleId, 
        $eventName,
        [$class, $handler]
        );
    }
}