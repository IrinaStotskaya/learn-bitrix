<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?><?$APPLICATION->IncludeComponent(
	"mcart:agents.list", 
	".default", 
	array(
		"HLBLOCK_TNAME" => "b_estate_agents",
		"COMPONENT_TEMPLATE" => ".default",
		"CACHE_TYPE" => "A",
		"PAGE_COUNT" => "3",
		"CACHE_TIME" => "360000"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>