<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Как стать партнером");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"FORGOT_PASSWORD_URL" => "/s2/login",
		"PROFILE_URL" => "/s2/login/user.php",
		"REGISTER_URL" => "/s2/login/registration.php",
		"SHOW_ERRORS" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>