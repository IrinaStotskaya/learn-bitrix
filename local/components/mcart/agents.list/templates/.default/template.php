<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

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
$this->setFrameMode(true);?>


<div class="container agents-list">
<div class="row mb-5">
  <div class="col-12">
    <div class="site-section-title">
      <h2><?echo GetMessage("AGENTS_LIST_TITLE")?></h2>
    </div>
  </div>
</div>
<div class="mb-5">
    <?foreach($arResult["AGENTS"]["ITEMS"] as $arAgent):?>
    <div class="agent__card">
        <div class="small-info">
            <?if (isset($arAgent["UF_AGENT_PHOTO_PATH"]) and $arAgent["UF_AGENT_PHOTO_PATH"] != ''):?>
            <div class="avatar" style="background-image: url(<?=$arAgent["UF_AGENT_PHOTO_PATH"];?>);"></div>
            <?else:?>
            <div class="avatar" style="background-image: url('<?=$this->GetFolder()."/images/no-avatar.png"?>');"></div>
            <?endif?>  
            <div class="info">
                <div class="name"><?echo $arAgent["UF_AGENT_NAME"];?></div>
            </div>
        </div>
        <div class="agent__card_item">
            <div class="agent__card_info">
                <div class="card__info_item">
                    <div class="position"><?echo GetMessage("AGENTS_EMAIL");?></div>
                    <div class="name"><?echo $arAgent["UF_AGENT_EMAIL"];?></div>
                </div>
                <div class="card__info_item">
                    <div class="position"><?echo GetMessage("AGENTS_PHONE");?></div>
                    <div class="name"><?echo $arAgent["UF_AGENT_PHONE"];?></div>
                </div>
                <div class="card__info_item">
                    <div class="position"><?echo GetMessage("AGENTS_ACTIVITY_TYPE");?></div>
                    <div class="name"><?echo $arAgent["UF_AGENT_ACTIVITY_TYPE_VALUE"];?></div>
                </div>
            </div>
        </div>
        <a class="star <?if(is_array($arResult["STAR_AGENTS"]) && in_array($arAgent["ID"], $arResult["STAR_AGENTS"])){echo"active";}?>" data-id="<?echo $arAgent["ID"]?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" data-id="<?echo $arAgent["ID"]?>">
                <path d="M12 4L14.472 9.26604L20 10.1157L16 14.2124L16.944 20L12 17.266L7.056 20L8 14.2124L4 10.1157L9.528 9.26604L12 4Z" stroke="#95929A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    <?endforeach;?>
</div>
<div class="row">
    <?
    $APPLICATION->IncludeComponent(
    	"bitrix:main.pagenavigation",
    	"agents_nav",
    	array(
    		"NAV_OBJECT" => $arResult["AGENTS"]["NAV_OBJECT"],
    	),
    	false
    );
    ?>
</div>

</div>
<?
/*
 * Для постраничной навигации использовать компонент bitrix:main.pagenavigation
 */
?>


