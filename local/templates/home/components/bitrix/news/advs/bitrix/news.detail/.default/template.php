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

<div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?=GetMessage("PROPERTY_DETAILS");?></span>
            <h1 class="mb-2"><?echo $arResult["NAME"]?></h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?echo $arResult["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]?></strong></p>
          </div>
        </div>
      </div>
    </div>
	<div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" style="margin-top: -150px;">
            <div class="mb-5">
              <div class="slide-one-item home-slider owl-carousel">
                 <?if (!isset($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"])):?>
                      <?foreach($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"] as $photo):?>
                      <div><img src="<?echo $photo["SRC"]?>" alt="Image" class="img-fluid"></div>
                      <?endforeach;?>
                 <?else:?>
                      <div><img src="<?echo $arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"]?>" alt="Image" class="img-fluid"></div>
                 <?endif;?>
              </div>
            </div>
            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"><?echo $arResult["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]?></strong>
                </div>              
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs"><?=GetMessage("UPDATE_DT")?></span>
                    <span class="property-specs-number"><?echo substr($arResult["TIMESTAMP_X"], 0, 11)?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs"><?echo $arResult["DISPLAY_PROPERTIES"]["FLOORS"]["NAME"]?></span>
                    <span class="property-specs-number"><?echo $arResult["DISPLAY_PROPERTIES"]["FLOORS"]["VALUE"]?></span>
                    
                  </li>
                  <li>
				            <span class="property-specs"><?echo $arResult["DISPLAY_PROPERTIES"]["TOTAL_AREA"]["NAME"]?></span>
                    <span class="property-specs-number"><?echo $arResult["DISPLAY_PROPERTIES"]["TOTAL_AREA"]["VALUE"]?><?=GetMessage("METERS")?><sup>2</sup></span>
                    
                  </li>
                </ul>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?echo $arResult["DISPLAY_PROPERTIES"]["BATHROOMS"]["NAME"]?></span>
                  <strong class="d-block"><?echo $arResult["DISPLAY_PROPERTIES"]["BATHROOMS"]["VALUE"]?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?echo $arResult["DISPLAY_PROPERTIES"]["GARAGE"]["NAME"]?></span>
                  <strong class="d-block"><?echo $arResult["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"]?></strong>
                </div>
              </div>
              <h2 class="h4 text-black"><?=GetMessage("MORE")?></h2>
              <p><?echo $arResult["DETAIL_TEXT"];?></p>
              <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3"><?=GetMessage("PROPERTY_GALLERY")?></h2>
                </div>
                <?if (!isset($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"])):?>
                  <?foreach($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"] as $photo):?>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                      <a href="<?echo $photo["SRC"]?>" class="image-popup gal-item"><img src="<?echo $photo["SRC"]?>" alt="Image" class="img-fluid"></a>
                  </div>
                  <?endforeach;?>
                <?else:?>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                      <a href="<?echo $arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"]?>" class="image-popup gal-item"><img src="<?echo $arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"]?>" alt="Image" class="img-fluid"></a>
                  </div>
                <?endif;?>                
              </div>
            </div>
            <h2 class="h4 text-black"><?=GetMessage("EXTERNAL")?></h2>
            <?if (is_array($arResult["DISPLAY_PROPERTIES"]["EXTERNAL_LINKS"]["DISPLAY_VALUE"])):?>
            <?foreach($arResult["DISPLAY_PROPERTIES"]["EXTERNAL_LINKS"]["DISPLAY_VALUE"] as $ext_link):?>
            <p><?echo $ext_link;?></p>
            <?endforeach;?>
            <?else:?>
              <p><?echo $arResult["DISPLAY_PROPERTIES"]["EXTERNAL_LINKS"]["DISPLAY_VALUE"];?></p>
            <?endif;?>
            <?if (!isset($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_FILES"]["FILE_VALUE"]["SRC"])):?>
            <?foreach($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_FILES"]["FILE_VALUE"] as $addFile):?>
              <p><a href = "<?echo $addFile["SRC"];?>"><?echo $addFile["FILE_NAME"];?></a></P>
            <?endforeach;?>
            <?else:?>
              <p><a href = "<?echo $arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_FILES"]["FILE_VALUE"]["SRC"];?>"><?echo $arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_FILES"]["FILE_VALUE"]["FILE_NAME"];?></a></P>
            <?endif;?>
          </div>
          <div class="col-lg-4 pl-md-5">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3"></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
            </div>

          </div>
          
        </div>
      </div>
    </div>
</div>



