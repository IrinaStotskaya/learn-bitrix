<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О сервисе");
?>
<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
	<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "photo.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
<div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="200">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "text.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>