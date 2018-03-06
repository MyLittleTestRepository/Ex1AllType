<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
    <?= $arResult["NAV_STRING"] ?><br/>
<? endif; ?>
<div class="item-wrap">
    <div class="rew-footer-carousel">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="side-block side-opin">
                    <div class="inner-block">
                        <div class="title">
                            <div class="photo-block">
                                <?if($arItem["PREVIEW_PICTURE"]["SRC"]):?>
                                    <?
                                    $link=CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'],['width'=>39,'height'=>39])['src'];
                                    ?>
                                    <img src="<?=$link?>" alt="">
                                <?else:?>
                                    <img src="<?=SITE_TEMPLATE_PATH.'/img/rew/no_photo_left_block.jpg'?>" alt="">
                                <?endif;?>
                            </div>
                            <div class="name-block"><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a></div>
                            <div class="pos-block"><?=$arItem['DISPLAY_PROPERTIES']['POSITION']['DISPLAY_VALUE']?>,"<?=$arItem['DISPLAY_PROPERTIES']['COMPANY']['DISPLAY_VALUE']?>"</div>
                        </div>
                        <div class="text-block">“<? echo substr($arItem["PREVIEW_TEXT"],0,150); ?>...
                        </div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <br/><?= $arResult["NAV_STRING"] ?>
<? endif; ?>
