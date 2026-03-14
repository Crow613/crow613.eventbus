<?php
namespace Crow613\EventBus\Event\Config;

abstract class  Events
{
     // Authorization and Security Events
    public const  BEFORE_USER_LOGIN = 'OnBeforeUserLogin';
    public const  AFTER_USER_LOGIN = 'OnAfterUserLogin';
    public const  BEFORE_USER_AUTHORIZE = 'OnBeforeUserAuthorize';
    public const  AFTER_USER_AUTHORIZE = 'OnAfterUserAuthorize';
    public const  AUTH_PROVIDERS_BUILD_LIST = 'OnAuthProvidersBuildList';  

    // Bizproc Events
    public const  BEFORE_WORKFLOW_START = 'OnBeforeWorkflowStart';
    public const  AFTER_WORKFLOW_START = 'OnAfterWorkflowStart';
    public const  AFTER_WORKFLOW_COMPLETE = 'OnAfterWorkflowComplete';
    public const  BEFORE_ACTIVITY_EXECUTE = 'OnBeforeActivityExecute';
    public const  AFTER_ACTIVITY_EXECUTE = 'OnAfterActivityExecute';
    public const  ON_ACTIVITY_ERROR = 'OnActivityError';

    // CRM Entity Events
    public const  BEFORE_CRM_ENTITY_UPDATE = 'OnBeforeCrmEntityUpdate';
    public const  AFTER_CRM_ENTITY_UPDATE = 'OnAfterCrmEntityUpdate';
    public const  BEFORE_CRM_ENTITY_ADD = 'OnBeforeCrmEntityAdd';
    public const  AFTER_CRM_ENTITY_ADD = 'OnAfterCrmEntityAdd';
    public const  BEFORE_CRM_ENTITY_DELETE = 'OnBeforeCrmEntityDelete';
    public const  AFTER_CRM_ENTITY_DELETE = 'OnAfterCrmEntityDelete';

    // DEAL Events
    public const  BEFORE_CRM_DEAL_UPDATE = 'OnBeforeCrmDealUpdate';
    public const  AFTER_CRM_DEAL_UPDATE = 'OnAfterCrmDealUpdate';
    public const  BEFORE_CRM_DEAL_ADD = 'OnBeforeCrmDealAdd';
    public const  AFTER_CRM_DEAL_ADD = 'OnAfterCrmDealAdd';
    public const  BEFORE_CRM_DEAL_DELETE = 'OnBeforeCrmDealDelete';
    public const  AFTER_CRM_DEAL_DELETE = 'OnAfterCrmDealDelete';

    // LEAD Events
    public const  BEFORE_CRM_LEAD_UPDATE = 'OnBeforeCrmLeadUpdate';
    public const  AFTER_CRM_LEAD_UPDATE = 'OnAfterCrmLeadUpdate';
    public const  BEFORE_CRM_LEAD_ADD = 'OnBeforeCrmLeadAdd';
    public const  AFTER_CRM_LEAD_ADD = 'OnAfterCrmLeadAdd';
    public const  BEFORE_CRM_LEAD_DELETE = 'OnBeforeCrmLeadDelete';
    public const  AFTER_CRM_LEAD_DELETE = 'OnAfterCrmLeadDelete';

    // CONTACT Events
    public const  BEFORE_CRM_CONTACT_UPDATE = 'OnBeforeCrmContactUpdate';
    public const  AFTER_CRM_CONTACT_UPDATE = 'OnAfterCrmContactUpdate';
    public const  BEFORE_CRM_CONTACT_ADD = 'OnBeforeCrmContactAdd';
    public const  AFTER_CRM_CONTACT_ADD = 'OnAfterCrmContactAdd';
    public const  BEFORE_CRM_CONTACT_DELETE = 'OnBeforeCrmContactDelete';
    public const  AFTER_CRM_CONTACT_DELETE = 'OnAfterCrmContactDelete';

    // COMPANY Events
    public const  BEFORE_CRM_COMPANY_UPDATE = 'OnBeforeCrmCompanyUpdate';
    public const  AFTER_CRM_COMPANY_UPDATE = 'OnAfterCrmCompanyUpdate';
    public const  BEFORE_CRM_COMPANY_ADD = 'OnBeforeCrmCompanyAdd';
    public const  AFTER_CRM_COMPANY_ADD = 'OnAfterCrmCompanyAdd';
    public const  BEFORE_CRM_COMPANY_DELETE = 'OnBeforeCrmCompanyDelete';
    public const  AFTER_CRM_COMPANY_DELETE = 'OnAfterCrmCompanyDelete';

    // STATUS Events
    public const  ON_CRM_STATUS_ADD = 'OnCrmStatusAdd';
    public const  ON_CRM_STATUS_UPDATE = 'OnCrmStatusUpdate';
    public const  ON_CRM_STATUS_DELETE = 'OnCrmStatusDelete';
    public const  ON_CRM_DEAL_STAGE_CHANGE = 'OnCrmDealStageChange';

    // CRM Activity Events
    public const  BEFORE_CRM_ACTIVITY_UPDATE = 'OnBeforeCrmActivityUpdate';
    public const  AFTER_CRM_ACTIVITY_UPDATE = 'OnAfterCrmActivityUpdate';
    public const  BEFORE_CRM_ACTIVITY_ADD = 'OnBeforeCrmActivityAdd';
    public const  AFTER_CRM_ACTIVITY_ADD = 'OnAfterCrmActivityAdd';
    public const  BEFORE_CRM_ACTIVITY_DELETE = 'OnBeforeCrmActivityDelete';
    public const  AFTER_CRM_ACTIVITY_DELETE = 'OnAfterCrmActivityDelete';  

    // Disk Events
    public const  AFTER_FILE_ADD = 'OnAfterFileAdd';
    public const  AFTER_FILE_UPDATE = 'OnAfterFileUpdate';
    public const  AFTER_FILE_DELETE = 'OnAfterFileDelete';
    public const  AFTER_FOLDER_ADD = 'OnAfterFolderAdd';
    public const  AFTER_FOLDER_DELETE = 'OnAfterFolderDelete';

    // Email Events
    public const  BEFORE_EVENT_SEND = 'OnBeforeEventSend';
    public const  AFTER_EVENT_SEND = 'OnAfterEventSend';
    public const  BEFORE_MAIL_SEND = 'OnBeforeMailSend'; 
    public const  MAIL_SEND = 'OnMailSend';

    // Highload Block Events
    public const  BEFORE_HIGHLOAD_BLOCK_ADD = 'OnBeforeHighloadBlockAdd';
    public const  AFTER_HIGHLOAD_BLOCK_ADD = 'OnAfterHighloadBlockAdd';
    public const  BEFORE_HIGHLOAD_BLOCK_UPDATE = 'OnBeforeHighloadBlockUpdate';
    public const  AFTER_HIGHLOAD_BLOCK_UPDATE = 'OnAfterHighloadBlockUpdate';

    // Main Events
    public const  PAGE_START = 'OnPageStart';
    public const  BEFORE_PROLOG = 'OnBeforeProlog';
    public const  PROLOG = 'OnProlog';
    public const  END_BUFFER_CONTENT = 'OnEndBufferContent';
    public const  EPILOG = 'OnEpilog';
    public const  AFTER_EPILOG = 'OnAfterEpilog';
    
     // Iblock Events
    public const  AFTER_ELEMENT_ADD = 'OnAfterIBlockElementAdd';
    public const  AFTER_ELEMENT_UPDATE = 'OnAfterIBlockElementUpdate';
    public const  AFTER_ELEMENT_DELETE = 'OnAfterIBlockElementDelete';

    public const  BEFORE_ELEMENT_ADD = 'OnBeforeIBlockElementAdd';
    public const  BEFORE_ELEMENT_UPDATE = 'OnBeforeIBlockElementUpdate';
    public const  BEFORE_ELEMENT_DELETE = 'OnBeforeIBlockElementDelete';

    public const  AFTER_SECTION_ADD = 'OnAfterIBlockSectionAdd';
    public const  AFTER_SECTION_UPDATE = 'OnAfterIBlockSectionUpdate';
    public const  AFTER_SECTION_DELETE = 'OnAfterIBlockSectionDelete';

    public const  BEFORE_SECTION_ADD = 'OnBeforeIBlockSectionAdd';
    public const  BEFORE_SECTION_UPDATE = 'OnBeforeIBlockSectionUpdate';
    public const  BEFORE_SECTION_DELETE = 'OnBeforeIBlockSectionDelete';
    
    public const  ON_PROPERTY_BUILD_LIST = 'OnIBlockPropertyBuildList';

    // IM Events
    public const  AFTER_MESSAGE_ADD = 'OnAfterMessageAdd';
    public const  BEFORE_MESSAGE_ADD = 'OnBeforeMessageAdd';
    public const  AFTER_CHAT_CREATE = 'OnAfterChatCreate';
    public const  AFTER_CHAT_DELETE = 'OnAfterChatDelete';

    // Marketplace Events
    public const  ON_MODULE_INSTALLED = 'OnModuleInstalled';
    public const  ON_MODULE_UNINSTALLED = 'OnModuleUninstalled';
    public const  ON_MODULE_UPDATE = 'OnModuleUpdate';

    // User Events
    public const  ON_BEFORE_USER_ADD = 'OnBeforeUserAdd';
    public const  ON_AFTER_USER_ADD = 'OnAfterUserAdd';
    public const  ON_BEFORE_USER_UPDATE = 'OnBeforeUserUpdate';
    public const  ON_AFTER_USER_UPDATE = 'OnAfterUserUpdate';
    public const  ON_BEFORE_USER_DELETE = 'OnBeforeUserDelete';
    public const  ON_AFTER_USER_DELETE = 'OnAfterUserDelete';
    public const  ON_USER_LOGIN = 'OnUserLogin';
    public const  ON_USER_LOGOUT = 'OnUserLogout';   
    public const  ON_USER_AUTHORIZE = 'OnUserAuthorize';
    public const  ON_USER_LOGIN_EXTERNAL = 'OnUserLoginExternal';

    // Rest Events
    public const  ON_REST_SERVICE_BUILD_DESCRIPTION = 'OnRestServiceBuildDescription';
    public const  ON_REST_APP_INSTALL = 'OnRestAppInstall';
    public const  ON_REST_APP_UNINSTALL = 'OnRestAppUninstall';

    // Task Events
    public const  ON_TASK_ADD = 'OnTaskAdd';
    public const  ON_TASK_UPDATE = 'OnTaskUpdate';
    public const  ON_TASK_DELETE = 'OnTaskDelete';
    public const  ON_TASK_STATUS_CHANGED = 'OnTaskStatusChanged';
    public const  ON_TASK_COMMENT_ADD = 'OnTaskCommentAdd';
    public const  ON_TASK_ELAPSED_TIME_ADD = 'OnTaskElapsedTimeAdd';
}