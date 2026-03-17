<?php

namespace Crow613\EventBus\Events\Crm;

use Crow613\EventBus\Contract\Events\EventsManagerInterface;
use Crow613\EventBus\Events\EventsManager;

class CrmEventManager extends EventsManager implements EventsManagerInterface
{
    public string $moduleId = 'crm';

    /**
     * @param string $type
     * @param string $eventMethod
     * @param string $handlerClass
     * @param string $handlerMethod
     * @param string|false $stateEvent
     * @return EventsManagerInterface
     * @throws \Exception
     */
    final public function buildEvent(
        string       $type,
        string       $eventMethod,
        string       $handlerClass,
        string       $handlerMethod,
        string|false $stateEvent = false
    ): EventsManagerInterface
    {
        $filePath = "/config/crm/";
        $filePath = $this->getPathAndStateChecker($filePath, $stateEvent);

        require dirname(__DIR__) . $filePath;
        /**
         * @var array $arEvents
         */
        $this->eventName = $arEvents[$type][$eventMethod];
        return $this->make($handlerClass, $handlerMethod);
    }

    /**
     * @param $filePath
     * @param $stateEvent
     * @return string|\Exception
     * @throws \Exception
     */
    private function getPathAndStateChecker($filePath, $stateEvent): string|\Exception
    {
        switch ($stateEvent):
            case "after":
                $filePath = $filePath . "autherevent.php";
                break;
            case "before":
                $filePath = $filePath . "beforeevent.php";
                break;
            case false:
                $filePath = $filePath . "status.php";
                break;
            default:
                throw new \Exception("state event not found");
        endswitch;

        if (!file_exists(dirname(__DIR__) . $filePath)) {
            throw new \Exception("config file not found : " . dirname(__DIR__) . $filePath);
        }
        return $filePath;
    }

}