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
<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <?echo $arResult["DETAIL_TEXT"];?>
        </div>
        <div class="review-autor">
            <?=$arResult["NAME"]?>, <?=$arResult["DISPLAY_ACTIVE_FROM"]?> г., <?=$arResult["DISPLAY_PROPERTIES"]['POSITION']['DISPLAY_VALUE']?>, <?=$arResult["DISPLAY_PROPERTIES"]['COMPANY']['DISPLAY_VALUE']?>.
        </div>
    </div>
    <?if($arResult["DETAIL_PICTURE"]["SRC"]):?>
        <div style="clear: both;" class="review-img-wrap"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img"></div>
    <?else:?>
        <div style="clear: both;" class="review-img-wrap"><img src="<?=SITE_TEMPLATE_PATH.'/img/rew/no_photo.jpg'?>" alt="img"></div>
    <?endif;?>
</div>
<?if($arResult["DISPLAY_PROPERTIES"]['DOCS']):?>
<div class="exam-review-doc">
    <p><?=$arResult["DISPLAY_PROPERTIES"]['DOCS']['NAME']?>:</p>
    <?if(count($arResult["DISPLAY_PROPERTIES"]['DOCS']['VALUE'])>1):?>
        <?foreach ($arResult["DISPLAY_PROPERTIES"]['DOCS']['FILE_VALUE'] as $file):?>
            <div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png"><a href="<?=$file['SRC']?>"><?=$file['ORIGINAL_NAME']?></a></div>
        <?endforeach;?>
    <?elseif(count($arResult["DISPLAY_PROPERTIES"]['DOCS']['VALUE'])==1):?>
        <?$file=$arResult["DISPLAY_PROPERTIES"]['DOCS']['FILE_VALUE']?>
        <div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png"><a href="<?=$file['SRC']?>"><?=$file['ORIGINAL_NAME']?></a></div>
    <?endif;?>
</div>
<?endif;?>
