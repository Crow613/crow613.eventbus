<?php

namespace Crow613\EventBus\Services\crm;

class DealService extends \Crow613\EventBus\Services\EventService
{
    protected string $type = "deal";
    protected string $eventClass = "\Crow613\Eventbus\Events\Crm\CrmEventManager";

}