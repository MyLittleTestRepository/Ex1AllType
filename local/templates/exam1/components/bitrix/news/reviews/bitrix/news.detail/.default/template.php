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
    <div style="clear: both;" class="review-img-wrap"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img"></div>
</div>
<?if(false):?>
<div class="exam-review-doc">
    <p>Документы:</p>
    <div  class="exam-review-item-doc"><img class="rew-doc-ico" src="./img/icons/pdf_ico_40.png"><a href="">Файл 1</a></div>
    <div  class="exam-review-item-doc"><img class="rew-doc-ico" src="./img/icons/pdf_ico_40.png"><a href="">Файл 2</a></div>
    <div  class="exam-review-item-doc"><img class="rew-doc-ico" src="./img/icons/pdf_ico_40.png"><a href="">Файл 3</a></div>
</div>
<?endif;?>
