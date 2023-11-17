<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.registration", 
	"home_reg", 
	array(
		"COMPONENT_TEMPLATE" => "home_reg",
		"USER_PROPERTY" => array(	// Показывать доп. свойства
			0 => "UF_USER_ROLE",
		),
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>