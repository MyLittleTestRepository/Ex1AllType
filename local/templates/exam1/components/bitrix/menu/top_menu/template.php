<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?use \Bitrix\Main\Localization\Loc;?>
<?Loc::loadMessages(__FILE__)?>
<?if (!empty($arResult))://menu?>
    <nav class="nav">
        <div class="inner-wrap">
            <div class="menu-block popup-wrap">
                <a href="" class="btn-menu btn-toggle"></a>
                <div class="menu popup-block">
                    <ul class="">
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>
    <?if ($arItem["PERMISSION"] > "D"):?>
	    <?if ($arItem["IS_PARENT"]):?>
                        <li><a href="<?=$arItem['LINK']?>"<?if (!empty($arItem['PARAMS']['MENU_COLOR'])):?>class="<?=$arItem['PARAMS']['MENU_COLOR']?>"<?endif?>><?=$arItem['TEXT']?></a><ul>
                                <?if(!empty($arItem['PARAMS']['MENU_TEXT'])):?>
                                    <div class="menu-text"><?=$arItem['PARAMS']['MENU_TEXT']?></div>
                                <?endif;?>
    	<?else:?>
                                <li<?if (!empty($arItem['PARAMS']['MAIN_PAGE'])):?> class="main-page"<?endif?>><a href="<?=$arItem['LINK']?>"<?if (!empty($arItem['PARAMS']['MENU_COLOR'])):?>class="<?=$arItem['PARAMS']['MENU_COLOR']?>"<?endif?>><?=$arItem['TEXT']?></a></li>
		<?endif?>
	<?endif?>
	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
<?endforeach?>
<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
                    </ul>
                    <a href="" class="btn-close"></a>
                </div>
                <div class="menu-overlay"></div>
            </div>
        </div>
    </nav>
<?endif//menu?>