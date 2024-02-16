<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach($arResult["ITEMS"] as $ID=>$arItem){
$arImg = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => '49', "height" => '49'), BX_RESIZE_IMAGE_PROPORTIONAL, true);
$arResult["ITEMS"][$ID]["PREVIEW_PICTURE"] = $arImg;
$arResult["ITEMS"][$ID]["PREVIEW_TEXT"] = TruncateText($arItem["PREVIEW_TEXT"], 150);
}
?>