<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="col-md-12 col-lg-8 mb-5">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="p-5 bg-white border">
<?=bitrix_sessid_post()?>
    <div class="row form-group">
        <div class="col-md-12 mb-3 mb-md-0">
		    <label class="font-weight-bold" for="fullname"><?=GetMessage("MFT_NAME")?></label>
		    <input type="text" name="user_name" id="fullname" class="form-control" placeholder="<?=GetMessage("MFT_NAME")?>" value="<?=$arResult["AUTHOR_NAME"]?>">
		</div>
	</div>
	<div class="row form-group">
        <div class="col-md-12">
		    <label class="font-weight-bold" for="fullname"><?=GetMessage("MFT_EMAIL")?></label>
		    <input type="email" name="user_email" id="email" class="form-control" placeholder="<?=GetMessage("MFT_EMAIL")?>" value="<?=$arResult["AUTHOR_EMAIL"]?>">
		</div>
	</div>

	<div class="row form-group">
        <div class="col-md-12">
		    <label class="font-weight-bold" for="message"><?=GetMessage("MFT_MESSAGE")?>
		    <textarea name="MESSAGE" id="message" cols="30" rows="5" class="form-control" placeholder="<?=$arResult["MESSAGE"]?>"></textarea>
		</div>
	</div>

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="row form-group">
		<div class="col-md-12">
			<label class="font-weight-bold"><?=GetMessage("MFT_CAPTCHA")?></label>
		</div>
		<div class="col-md-12">
			<input type="hidden" name="captcha_sid" class="form-control" value="<?=$arResult["capCode"]?>">
		    <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold"><?=GetMessage("MFT_CAPTCHA_CODE")?>
		    <input type="text" name="captcha_word" class="form-control" value="">
	    </div>
	</div>
	<?endif;?>
	<div class="row form-group">
        <div class="col-md-12">
		  <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
          <input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn btn-primary  py-2 px-4 rounded-0">
        </div>
    </div>
</form>
</div>
