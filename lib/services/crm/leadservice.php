<?php

namespace Crow613\EventBus\Services\Crm;


class LeadService extends \Crow613\EventBus\Services\EventService
{
    protected string $type = "lead";
    protected string $eventClass = "\Crow613\Eventbus\Events\Crm\CrmEventManager";

}