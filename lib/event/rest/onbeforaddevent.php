<?php
namespace Crow613\EventBus\Event\Crm;

final class OnBeforeAddEvent extends \Crow613\EventBus\Event\RegisterEvents
{
    protected function __construct()
    {
        $this->moduleId = 'crm';
        $this->eventName = static::$eventName;
        $this->class = static::$class;
        $this->handler = static::$handler;
    }

    /**
     * @param string $class
     * @param string $handler
     * @return void
     */
    final public static function leadHandlerRegister(string $class, string $handler): void
    {
        self::handlerRegister(self::BEFORE_CRM_LEAD_ADD, $class, $handler);
    }

    /**
     * @param string $class
     * @param string $handler
     * @return void
     */
    final public static function dealHandlerRegister(string $class, string $handler): void
    {
        self::handlerRegister(self::BEFORE_CRM_DEAL_ADD, $class, $handler);
    }

    /**
     * @param string $class
     * @param string $handler
     * @return void
     */
    final public static function contactHandlerRegister(string $class, string $handler): void
    {
        self::handlerRegister(self::BEFORE_CRM_CONTACT_ADD, $class, $handler);
    }

    /**
     * @param string $class
     * @param string $handler
     * @return void
     */
    final public static function companyHandlerRegister(string $class, string $handler): void
    {
        self::handlerRegister(self::BEFORE_CRM_COMPANY_ADD, $class, $handler);
    }

    /**
     * @param string $class
     * @param string $handler
     * @return void
     */
    final public static function activityHandlerRegister(string $class, string $handler): void
    {
        self::handlerRegister(self::BEFORE_CRM_ACTIVITY_ADD, $class, $handler);
    }

    /**
     * @param string $class
     * @param string $handler
     * @return void
     */
    final public static function entityHandlerRegister(string $class, string $handler): void
    {
        self::handlerRegister(self::AFTER_CRM_ENTITY_ADD, $class, $handler);
    }
}