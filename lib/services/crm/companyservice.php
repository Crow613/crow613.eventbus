<?php

namespace Crow613\EventBus\Services\crm;

class CompanyService extends \Crow613\EventBus\Services\EventService
{
    protected string $type = "company";
    protected string $eventClass = "\Crow613\Eventbus\Events\Crm\CrmEventManager";
}