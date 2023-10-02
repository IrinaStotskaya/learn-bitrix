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
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                  <?$APPLICATION->IncludeComponent(
	                   "bitrix:menu", 
	                   "horizontal_multilevel", 
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
	                   	"COMPONENT_TEMPLATE" => "horizontal_multilevel",
	                   	"DELAY" => "N",
	                   	"ALLOW_MULTI_SELECT" => "N"
	                   ),
	                   false,
	                   array(
	                   	"ACTIVE_COMPONENT" => "Y"
	                   )
                    );?>

              <!-- <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.html">Home</a>
                </li>
                <li class="has-children">
                  <a href="properties.html">Properties</a>
                  <ul class="dropdown">
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Lease</a></li>
                    <li class="has-children">
                      <a href="#">Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul> -->
            </nav>
          </div>


        </div>
      </div>
    </div>
  </div>

  <div class="slide-one-item home-slider owl-carousel">

    <div class="site-blocks-cover" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/hero_bg_1.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5">

      <div class="text">
        <h2>853 S Lucerne Blvd</h2>
        <p class="location"><span class="property-icon icon-room"></span> Los Angeles, CA 90005</p>
        <p class="mb-2"><strong>$2,250,500</strong></p>


        <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>

      </div>
    </div>

    <div class="site-blocks-cover" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/hero_bg_3.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5">

      <div class="text">
        <h2>625 S. Berendo St</h2>
        <p class="location"><span class="property-icon icon-room"></span>607 Los Angeles, CA 90005</p>
        <p class="mb-2"><strong>$2,250,500</strong></p>


        <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>

      </div>

    </div>
    <?$GLOBALS['IsPriority_filter'] = array('PROPERTY_PRIORITY' => '5');
      $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "600",
		"CACHE_TYPE" => "Y",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "/news.php?ID=#ELEMENT_ID#",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "IsPriority_filter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "advertisement",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Недвижимость",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
  </div>

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
  
    
