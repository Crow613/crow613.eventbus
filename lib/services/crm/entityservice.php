<?php

namespace Crow613\EventBus\Services\crm;

class EntityService extends \Crow613\EventBus\Services\EventService
{
    protected string $type = "entity";
    protected string $eventClass = "\Crow613\Eventbus\Events\Crm\CrmEventManager";

}