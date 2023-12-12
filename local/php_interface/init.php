<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

\Bitrix\Main\Loader::registerAutoLoadClasses(
    null,
    [
        'UserToGroup' => '/local/php_interface/include/add_user.php',
    ]   
);

AddEventHandler("main", "OnAfterUserAdd", Array("UserToGroup","addUser"));
