<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("auth");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"home", 
	array(
		"COMPONENT_TEMPLATE" => "home",
		"REGISTER_URL" => "/login/registratsiya.php",
		"FORGOT_PASSWORD_URL" => "/login",
		"PROFILE_URL" => "",
		"SHOW_ERRORS" => "N"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>