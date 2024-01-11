<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

\Bitrix\Main\Loader::registerAutoLoadClasses(
    null,
    [
        'UserToGroup' => '/local/php_interface/include/add_user.php',
        'AgentsHLEvents' => '/local/php_interface/include/hl_events.php',
    ]   
);

AddEventHandler("main", "OnAfterUserAdd", Array("UserToGroup","addUser"));

$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('', 'AgentsOnAfterAdd', Array("AgentsHLEvents","onAfterHLEvent"));
$eventManager->addEventHandler('', 'AgentsOnAfterUpdate', Array("AgentsHLEvents","onAfterHLEvent"));
$eventManager->addEventHandler('', 'AgentsOnAfterDelete', Array("AgentsHLEvents","onAfterHLEvent"));
 