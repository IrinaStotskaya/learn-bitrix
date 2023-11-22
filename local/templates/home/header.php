<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?$APPLICATION->ShowHead();?>
  <title><?$APPLICATION->ShowTitle()?></title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">

  <? use Bitrix\Main\Page\Asset;  
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");

  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
  ?> 
</head>

<body>
  <?$APPLICATION->ShowPanel();?>
  <div class="site-loader"></div>

  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
            <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span
                  class="d-none d-md-inline-block ml-2">
                  <?$APPLICATION->IncludeComponent(
                   	"bitrix:main.include", 
                   	".default", 
                   	array(
                   		"COMPONENT_TEMPLATE" => ".default",
                   		"AREA_FILE_SHOW" => "file",
                   		"PATH" => "/include/phone.php",
                   		"EDIT_TEMPLATE" => ""
                   	),
                   	false
                         );?></span></a>
            <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span
                  class="d-none d-md-inline-block ml-2">
                  <?$APPLICATION->IncludeComponent(
                   	"bitrix:main.include", 
                   	".default", 
                   	array(
                   		"COMPONENT_TEMPLATE" => ".default",
                   		"AREA_FILE_SHOW" => "file",
                   		"PATH" => "/include/email.php",
                   		"EDIT_TEMPLATE" => ""
                   	),
                   	false
                         );?></span></a>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">		  
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include", 
              ".default", 
              array(
              	"COMPONENT_TEMPLATE" => ".default",
              	"AREA_FILE_SHOW" => "file",
              	"PATH" => "/include/logo_socialmedia.php",
              	"EDIT_TEMPLATE" => ""
              ),
              false
                   );?>
				   <p><a href="/login/auth.php" class= "h5"><?echo GetMessage("MAIN_LOGIN")?></a></p>
        </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class=""><a href="index.html" class="h5 text-uppercase text-black"><strong>
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include", 
              ".default", 
              array(
              	"COMPONENT_TEMPLATE" => ".default",
              	"AREA_FILE_SHOW" => "file",
              	"PATH" => "/include/logo.php",
              	"EDIT_TEMPLATE" => ""
              ),
              false
                   );?></strong></a></h1>
          </div>
              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
				  <div class="col-4 col-md-4 col-lg-8">
		  
                  <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel1", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "horizontal_multilevel1",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
            </nav>
		
          </div>


        </div>
      </div>
    </div>
  </div>
    
    <?$page = $APPLICATION->GetCurPage();
	if($page == "/"):?>
    <?$GLOBALS['IsPriority_filter'] = array('PROPERTY_PRIORITY' => '5');
	 
      $APPLICATION->IncludeComponent("bitrix:news.list", "slider1", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "Y",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "/news.php?ID=#ELEMENT_ID#",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "IsPriority_filter",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "6",	// Код информационного блока
		"IBLOCK_TYPE" => "advertisement",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "4",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Недвижимость",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "PRICE",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => "slider"
	),
	false
      );?>
    
 

  <div class="py-5">
    <div class="container">
	    <div class="row">
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <span class="icon mr-3 flaticon-house"></span>
            <div class="text">
            <?$APPLICATION->IncludeComponent(
                   	"bitrix:main.include", 
                   	".default", 
                   	array(
                   		"COMPONENT_TEMPLATE" => ".default",
                   		"AREA_FILE_SHOW" => "file",
                   		"PATH" => "/include/text_main1.php",
                   		"EDIT_TEMPLATE" => ""
                   	),
                   	false
                         );?> 
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <span class="icon mr-3 flaticon-rent"></span>
            <div class="text">
            <?$APPLICATION->IncludeComponent(
                   	"bitrix:main.include", 
                   	".default", 
                   	array(
                   		"COMPONENT_TEMPLATE" => ".default",
                   		"AREA_FILE_SHOW" => "file",
                   		"PATH" => "/include/text_main2.php",
                   		"EDIT_TEMPLATE" => ""
                   	),
                   	false
                         );?> 
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <span class="icon mr-3 flaticon-location"></span>
            <div class="text">
            <?$APPLICATION->IncludeComponent(
                   	"bitrix:main.include", 
                   	".default", 
                   	array(
                   		"COMPONENT_TEMPLATE" => ".default",
                   		"AREA_FILE_SHOW" => "file",
                   		"PATH" => "/include/text_main3.php",
                   		"EDIT_TEMPLATE" => ""
                   	),
                   	false
                         );?> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?endif?>
  <?$page = $APPLICATION->GetCurPage();
	if($page !== "/"):?>  
	<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?=$SITE_TEMPLATE_PATH?>/local/templates/home/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
		    <?if($page !== "/about/contacts/feedback.php"):?>
            <h1 class="mb-2"><?=GetMessage("ABOUT_US")?></h1>
			<?else:?>
			<h1 class="mb-2"><?=GetMessage("CONTACT_US")?></h1>	
			<?endif;?>
            <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"chain",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
          </div>
        </div>
      </div>
    </div>
	<div class="site-section border-bottom">
	<div class="container">
	<div class="row align-items-center">
    <?endif?>