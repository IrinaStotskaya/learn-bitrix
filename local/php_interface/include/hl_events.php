<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

class AgentsHLEvents{
   public static function onAfterHLEvent(\Bitrix\Main\Entity\Event $event) {
    
    $tableName = $event->getEntity()->getDBTableName();
    $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
    $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
   }
}