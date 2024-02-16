<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="nav">
<div class="inner-wrap">
    <div class="menu-block popup-wrap">
        <a href="" class="btn-menu btn-toggle"></a>
        	<div class="menu popup-block">
            	<ul class="">
					<li class="main-page"><a href="/s2/"><?echo GetMessage("MENU_MAIN")?></a></li>

				<?
				$previousLevel = 0;
				foreach($arResult as $arItem):?>
					<?$colorClass = '';
					if (isset($arItem["PARAMS"]["MENU_COLOR"])){
					$colorClass = 'class="' . $arItem["PARAMS"]["MENU_COLOR"] . '"';
					}?>

					<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
						<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
					<?endif?>
					
					<?if ($arItem["IS_PARENT"]):?>
					
						<?if ($arItem["DEPTH_LEVEL"] == 1):?>
							<li><a href="<?=$arItem["LINK"]?>" <?=$colorClass?>><?=$arItem["TEXT"]?></a>
								<ul>
									<?if(isset($arItem["PARAMS"]["MENU_TEXT"])):?>
									<div class="menu-text"><?echo $arItem["PARAMS"]["MENU_TEXT"]?></div>
									<?endif;?>
						<?else:?>
							<li><a href="<?=$arItem["LINK"]?>" <?=$colorClass?>><?=$arItem["TEXT"]?></a>
								<ul>
								<?if(isset($arItem["PARAMS"]["MENU_TEXT"])):?>
								<div class="menu-text"><?echo $arItem["PARAMS"]["MENU_TEXT"]?></div>
								<?endif;?>
						<?endif?>
								
					<?else:?>
					
						<?if ($arItem["PERMISSION"] > "D"):?>
						
							<?if ($arItem["DEPTH_LEVEL"] == 1):?>
								<li><a href="<?=$arItem["LINK"]?>" <?=$colorClass?>><?=$arItem["TEXT"]?></a></li>
							<?else:?>
								<li><a href="<?=$arItem["LINK"]?>" <?=$colorClass?>><?=$arItem["TEXT"]?></a></li>
							<?endif?>
															
						<?endif?>
							
					<?endif?>
							
					<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

					<?endforeach?>
               
              		<?if ($previousLevel > 1)://close last item tags?>
              				<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
              		<?endif?>
					
              		</ul>
              		<?endif?>
               
            	<a href="" class="btn-close"></a>
            </div>
        <div class="menu-overlay"></div>
    </div>
</div>
</nav>

