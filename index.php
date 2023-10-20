<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Биржа недвижимости");
?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<body>

  
  <div class="site-section site-section-sm bg-light">

   <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"line_home", 
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
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"USE_FILTER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "advertisement",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "9",
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
			0 => "BATHROOMS",
			1 => "FLOORS",
			2 => "GARAGE",
			3 => "TOTAL_AREA",
			4 => "PRICE",
			5 => "",
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
		"COMPONENT_TEMPLATE" => "line_home"
	),
	false
);?>
   
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 text-center mb-5">
          <div class="site-section-title">
            <h2><?=GetMessage("OURSERVICES")?></h2>
          </div>
        </div>
      </div>

      <?$APPLICATION->IncludeComponent("bitrix:news.line", "services_main", Array(
	        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
	      	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	      	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	      	"CACHE_TYPE" => "A",	// Тип кеширования
	      	"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
	      	"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "",
      2 => "PROPERTY_SERVICE_LINK",
	      	),
	      	"IBLOCKS" => "",	// Код информационного блока
	      	"IBLOCK_TYPE" => "services",	// Тип информационного блока
	      	"NEWS_COUNT" => "6",	// Количество новостей на странице
	      	"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
	      	"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
	      	"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
	      	"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	      	"COMPONENT_TEMPLATE" => ".default"
	        ),
         	false
          );?>
    </div>
  </div>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <div class="site-section-title">
            <h2><?=GetMessage("BLOG")?></h2>
          </div>
        </div>
      </div>      
      
      <?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"blog_main", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "#SITE_DIR#/blog.php?ID=#ELEMENT_ID#",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "PREVIEW_TEXT",
			3 => "PREVIEW_PICTURE",
			4 => "DATE_ACTIVE_FROM",
			5 => "",
		),
		"IBLOCKS" => array(
			0 => "1",
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "blog_main"
	),
	false
);?>
    </div>

  </div>

  
</body>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>