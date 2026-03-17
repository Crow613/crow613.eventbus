<?php

namespace Crow613\EventBus\Services\crm;

class ContactService extends \Crow613\EventBus\Services\EventService
{
    protected string $type = "contact";
    protected string $eventClass = "\Crow613\Eventbus\Events\Crm\CrmEventManager";

}