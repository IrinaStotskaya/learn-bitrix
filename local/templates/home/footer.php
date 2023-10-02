<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
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
                  <!-- <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Properties</a></li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-6">
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms</a></li>
                  </ul> -->
                  <?$APPLICATION->IncludeComponent(
                         "bitrix:menu",
                         "",
                         Array(
                         	"ALLOW_MULTI_SELECT" => "N",
                         	"CHILD_MENU_TYPE" => "left",
                         	"DELAY" => "N",
                         	"MAX_LEVEL" => "1",
                         	"MENU_CACHE_GET_VARS" => array(""),
                         	"MENU_CACHE_TIME" => "3600",
                         	"MENU_CACHE_TYPE" => "N",
                         	"MENU_CACHE_USE_GROUPS" => "Y",
                         	"ROOT_MENU_TYPE" => "left",
                         	"USE_EXT" => "N"
                         )
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