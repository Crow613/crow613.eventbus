<?php


use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
class crow613_eventbus extends CModule
{
    public function __construct()
    {
        $this->MODULE_ID = 'crow613.eventbus';
        $arModuleVersion = [];

        if(!file_exists(__DIR__ . "/../version.php")) {

            $arModulesVersion["CROW613_EVENTBUS_VERSION"] = "1.0.0";
            $arModulesVersion["CROW613_EVENTBUS_VERSION_DATE"] = "07-02-2026";
        }
        require(__DIR__ . "/../version.php");

        $this->MODULE_VERSION = $arModulesVersion['CROW613_EVENTBUS_VERSION'];
        $this->MODULE_VERSION_DATE = $arModulesVersion['CROW613_EVENTBUS_VERSION_DATE'] ;
        $this->MODULE_NAME = Loc::getMessage('CROW613_EVENTBUS_MODULE_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('CROW613_EVENTBUS_MODULE_DESCRIPTION');
        $this->PARTNER_NAME = Loc::getMessage('CROW613_EVENTBUS_PARTNER_NAME');
        $this->PARTNER_URI = Loc::getMessage('CROW613_EVENTBUS_PARTNER_URI');
    }
    public function DoInstall()
    {
        \Bitrix\Main\ModuleManager::registerModule($this->MODULE_ID);
    }
    public function DoUninstall()
    {
        \Bitrix\Main\ModuleManager::unRegisterModule($this->MODULE_ID);
    }
}