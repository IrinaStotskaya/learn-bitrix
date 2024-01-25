<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<hr>
<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?echo $arResult["DETAIL_TEXT"];?>
		<div class="review-autor">
			<?=$arResult["NAME"]?>, <?=$arResult["DISPLAY_ACTIVE_FROM"] . ',' . $arResult["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"] . ',' . $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"] . '.'?>
		</div>
	</div>
	<?if(is_array($arResult["DETAIL_PICTURE"])):?>
		<div style="clear: both;" class="review-img-wrap"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img"></div>
	<?else:?>
		<div style="clear: both;" class="review-img-wrap"><img src="<?=SITE_TEMPLATE_PATH . '/img/rew/no_photo.jpg'?>" alt="img"></div>
	<?endif;?>
</div>
<?if(isset($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"])):?>
<div class="exam-review-doc">
<p><?echo GetMessage("REW_DOCUMENTS")?></p>
<?if(isset($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"]["SRC"])):?>
	<?$file = $arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"];?>
	<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH . '/img/icons/pdf_ico_40.png'?>"><a href="<?echo $file["SRC"]?>"><?=$file["FILE_NAME"]?></a></div>
<?else:?>
<?foreach ($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"] as $file):?>
<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH . '/img/icons/pdf_ico_40.png'?>"><a href="<?echo $file["SRC"]?>"><?=$file["FILE_NAME"]?></a></div>
<?endforeach;?>
<?endif;?>
</div>
<?endif;?>
<hr>
