<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>

<div class="col-md-12 col-lg-8 mb-5">

<?
if ($arResult['SHOW_ERRORS'] === 'Y' && $arResult['ERROR'] && !empty($arResult['ERROR_MESSAGE']))
{
	ShowMessage($arResult['ERROR_MESSAGE']);
}
?>

<?if($arResult["FORM_TYPE"] == "login"):?>

<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>" class="p-5 bg-white border">
<?if($arResult["BACKURL"] <> ''):?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
<?foreach ($arResult["POST"] as $key => $value):?>
	<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
<?endforeach?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />
	<div class="row form-group">
        <div class="col-md-12 mb-3 mb-md-0">
		    <label class="font-weight-bold" for="fullname"><?=GetMessage("AUTH_LOGIN")?></label>
		    <input type="text" name="USER_LOGIN" class="form-control" placeholder="<?=GetMessage("AUTH_LOGIN")?>" value="">
			<script>
				BX.ready(function() {
					var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
					if (loginCookie)
					{
						var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
						var loginInput = form.elements["USER_LOGIN"];
						loginInput.value = loginCookie;
					}
				});
			</script>
		</div>
	</div>

	<div class="row form-group">
        <div class="col-md-12 mb-3 mb-md-0">
		    <label class="font-weight-bold" for="fullname"><?=GetMessage("AUTH_PASSWORD")?></label>
		    <input type="text" name="USER_PASSWORD" class="form-control" placeholder="<?=GetMessage("AUTH_PASSWORD")?>" autocomplete="off">
		</div>
	</div>		

<?if ($arResult["STORE_PASSWORD"] == "Y"):?>
	    <div class="row form-group">
		  <div class="col-md-12 mb-3 mb-md-0">	
	        <input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" />
			<label class="font-weight-bold" for="USER_REMEMBER_frm" title="<?=GetMessage("AUTH_REMEMBER_ME")?>"><?echo GetMessage("AUTH_REMEMBER_SHORT")?></label>
          </div>
        </div>
<?endif?>
<?if ($arResult["CAPTCHA_CODE"]):?>
		
	<div class="row form-group">
		<div class="col-md-12">
			<label class="font-weight-bold"><?echo GetMessage("AUTH_CAPTCHA_PROMT")?></label>
		</div>
		<div class="col-md-12">
			<input type="hidden" name="captcha_sid" class="form-control" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
		    <img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA">
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold"><?=GetMessage("MFT_CAPTCHA_CODE")?></label>
		    <input type="text" name="captcha_word" class="form-control" value="">
	    </div>
	</div>
<?endif?>
        <div class="row form-group">
		   <div class="col-md-12">
            <input type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" class="btn btn-primary  py-2 px-4 rounded-0">
		   </div>
		</div>
		<div class="row form-group">
			<?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>	
					<div class="col-md-12">
						<noindex><a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a></noindex>
					</div>
			<?endif?>
	        <div class="col-md-12">
			    <noindex><a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a></noindex>
		    </div>
	    </div>
</form>

<?
elseif($arResult["FORM_TYPE"] == "otp"):
?>

<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>" class="p-5 bg-white border">
<?if($arResult["BACKURL"] <> ''):?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="OTP" />
	<div class="row form-group">
		<div class="col-md-12">
		    <label class="font-weight-bold"><?echo GetMessage("auth_form_comp_otp")?></label>
		    <input type="text" name="USER_OTP" value="" autocomplete="off" class="form-control"/>
		</div>
	</div>
<?if ($arResult["CAPTCHA_CODE"]):?>
	<div class="row form-group">
		<div class="col-md-12">
			<label class="font-weight-bold"><?echo GetMessage("AUTH_CAPTCHA_PROMT")?></label>
		</div>
		<div class="col-md-12">
			<input type="hidden" name="captcha_sid" class="form-control" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
		    <img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA">
		</div>
		<div class="col-md-12">
			<label class="font-weight-bold"><?=GetMessage("MFT_CAPTCHA_CODE")?></label>
		    <input type="text" name="captcha_word" class="form-control" value="">
	    </div>
	</div>
<?endif?>
<?if ($arResult["REMEMBER_OTP"] == "Y"):?>
	<div class="row form-group">
		<div class="col-md-12">
		    <input type="checkbox" id="OTP_REMEMBER_frm" name="OTP_REMEMBER" value="Y" />
		    <label for="OTP_REMEMBER_frm" title="<?echo GetMessage("auth_form_comp_otp_remember_title")?>" class="font-weight-bold"><?echo GetMessage("auth_form_comp_otp_remember")?></label>
		</div>
	</div>		
<?endif?>	
    <div class="row form-group">
		<div class="col-md-12">	
		    <input type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" class="btn btn-primary  py-2 px-4 rounded-0"/>	
		    <noindex><a href="<?=$arResult["AUTH_LOGIN_URL"]?>" rel="nofollow"><?echo GetMessage("auth_form_comp_auth")?></a></noindex>
		</div>
	</div>
</form>

<?
else:
?>

<form action="<?=$arResult["AUTH_URL"]?>" class="p-5 bg-white border">
    <div class="row form-group">
		<div class="col-md-12">
		    <label class="font-weight-bold"><?=$arResult["USER_NAME"]?></label>
			<label class="font-weight-bold">[<?=$arResult["USER_LOGIN"]?>]</label>
			<a href="<?=$arResult["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=GetMessage("AUTH_PROFILE")?></a>
		</div>
	</div>
			
		    <?foreach ($arResult["GET"] as $key => $value):?>
		    	<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
		    <?endforeach?>
		    <?=bitrix_sessid_post()?>
		    <input type="hidden" name="logout" value="yes" />
	<div class="row form-group">
		<div class="col-md-12">
		    <input type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" class="btn btn-primary  py-2 px-4 rounded-0"/>
		</div>
	</div>	
</form>
<?endif?>
</div>

