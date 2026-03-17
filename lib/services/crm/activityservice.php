<?php

namespace Crow613\EventBus\Services\crm;

class ActivityService extends \Crow613\EventBus\Services\EventService
{
    protected string $type = "activity";
    protected string $eventClass = "\Crow613\Eventbus\Events\Crm\CrmEventManager";

}