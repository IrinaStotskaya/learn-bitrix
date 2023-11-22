<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>


</div>
</div>
</div>
<footer class="site-footer">
      <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="mb-5">
                <?$APPLICATION->IncludeComponent(
                   	"bitrix:main.include", 
                   	".default", 
                   	array(
                   		"COMPONENT_TEMPLATE" => ".default",
                   		"AREA_FILE_SHOW" => "file",
                   		"PATH" => "/include/footer_about.php",
                   		"EDIT_TEMPLATE" => ""
                   	),
                   	false
                         );?> 
              </div>  
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
              <div class="row mb-5">
                <div class="col-md-12">
                  <h3 class="footer-heading mb-4"><?=GetMessage('NAV_MENU')?></h3>
                </div>
                <div class="col-md-6 col-lg-6">
                      <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_main", Array(
         	          "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
         	          	"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
         	          	"DELAY" => "N",	// Откладывать выполнение шаблона меню
         	          	"MAX_LEVEL" => "1",	// Уровень вложенности меню
         	          	"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
         	          		0 => "",
         	          	),
         	          	"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
         	          	"MENU_CACHE_TYPE" => "N",	// Тип кеширования
         	          	"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
         	          	"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
         	          	"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
         	          ),
         	          false
                    );?>
                         
                </div>              
              </div>
            </div>   
                <div class="col-lg-4 mb-5 mb-lg-0">    
                  <?$APPLICATION->IncludeComponent(
                     	"bitrix:main.include", 
                     	".default", 
                     	array(
                     		"COMPONENT_TEMPLATE" => ".default",
                     		"AREA_FILE_SHOW" => "file",
                     		"PATH" => "/include/footer_copyright.php",
                     		"EDIT_TEMPLATE" => ""
                     	),
                     	false
                           );?>
                   
                </div>
             
          </div>
                  <div class="row pt-5 mt-5 text-center">
                     <div class="col-md-12">
                     <?$APPLICATION->IncludeComponent(
                            	"bitrix:main.include", 
                            	".default", 
                            	array(
                            		"COMPONENT_TEMPLATE" => ".default",
                            		"AREA_FILE_SHOW" => "file",
                            		"PATH" => "/include/footer_follow.php",
                            		"EDIT_TEMPLATE" => ""
                            	),
                            	false
                                  );?>
                     </div>
                  </div>
      </div>  
    </footer>

</body>
</html>