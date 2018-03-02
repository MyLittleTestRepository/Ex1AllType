<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? \Bitrix\Main\Localization\Loc::loadMessages(__FILE__) ?>
<? $troot = SITE_TEMPLATE_PATH; ?>
</div>
</div>
<!-- /content -->
<!-- side -->
<div class="side">
    <!-- side menu -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "left",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(""),
            "MENU_CACHE_TIME" => "3600000",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_THEME" => "site",
            "ROOT_MENU_TYPE" => "left",
            "USE_EXT" => "Y"
        )
    );?>
    <!-- /side menu -->
    <!-- side anonse -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "side_useful",
        Array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "sect",
            "AREA_FILE_SUFFIX" => "inc_side_useful",
            "EDIT_TEMPLATE" => ""
        )
    );?>
    <!-- /side anonse -->
    <!-- side wrap -->
    <div class="side-wrap">
        <div class="item-wrap">
            <!-- side action -->
            <div class="side-block side-action">
                <img src="<?= $troot ?>/img/side-action-bg.jpg" alt="" class="bg">
                <div class="photo-block">
                    <img src="<?= $troot ?>/img/side-action.jpg" alt="">
                </div>
                <div class="text-block">
                    <div class="title">Акция!</div>
                    <p>Мебельная полка всего за 560 <span class="r">a</span>
                    </p>
                </div>
                <a href="" class="btn-more">подробнее</a>
            </div>
            <!-- /side action -->
        </div>

        <!-- footer rew slider box -->
        <div class="item-wrap">
            <div class="rew-footer-carousel">
                <div class="item">
                    <div class="side-block side-opin">
                        <div class="inner-block">
                            <div class="title">
                                <div class="photo-block">
                                    <img src="<?= $troot ?>/img/side-opin.jpg" alt="">
                                </div>
                                <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                                <div class="pos-block">Генеральный директор,"Офис+"</div>
                            </div>
                            <div class="text-block">“В магзине предоставили потрясающий выбор
                                расцветок, а также, получил большую скидку по карте постоянного...
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="side-block side-opin">
                        <div class="inner-block">
                            <div class="title">
                                <div class="photo-block">
                                    <img src="<?= $troot ?>/img/side-opin.jpg" alt="">
                                </div>
                                <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                                <div class="pos-block">Генеральный директор,"Офис+"</div>
                            </div>
                            <div class="text-block">“В магазине предоставили потрясающий выбор
                                расцветок, а также, получил большую скидку по карте постоянного...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / footer rew slider box -->
    </div>
    <!-- /side wrap -->
</div>
<!-- /side -->
</div>
<!-- /content box -->
</div>
<!-- /page -->
<div class="empty"></div>
</div>
<!-- /wrap -->
<!-- footer -->
<footer class="footer">
    <div class="inner-wrap">
        <nav class="main-menu">
            <div class="item">
                <div class="title-block">О магазине</div>
                <ul>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600000",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "bottom",
                            "USE_EXT" => "N"
                        )
                    );?>
                </ul>
            </div>
            <div class="item">
                <div class="title-block">Каталог товаров</div>
                <ul>
                    <li><a href="">Кухни</a>
                    </li>
                    <li><a href="">Гарнитуры</a>
                    </li>
                    <li><a href="">Спальни и матрасы</a>
                    </li>
                    <li><a href="">Столы и стулья</a>
                    </li>
                    <li><a href="">Раскладные диваны</a>
                    </li>
                    <li><a href="">Кресла</a>
                    </li>
                    <li><a href="">Кровати и кушетки</a>
                    </li>
                    <li><a href="">Тумобчки и прихожие</a>
                    </li>
                    <li><a href="">Аксессуары</a>
                    </li>
                    <li><a href="">Каталоги мебели</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="contacts-block">
            <div class="title-block"><?= \Bitrix\Main\Localization\Loc::getMessage('CONTACTS') ?></div>
            <div class="loc-block">
                <div class="address">ул. Летняя, стр.12, офис 512</div>
                <div class="phone"><?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/phone.html"
                        )
                    );?>
                </div>
            </div>
            <div class="main-soc-block">
                <a href="" class="soc-item">
                    <img src="<?= $troot ?>/img/icons/soc01.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?= $troot ?>/img/icons/soc02.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?= $troot ?>/img/icons/soc03.png" alt="">
                </a>
                <a href="" class="soc-item">
                    <img src="<?= $troot ?>/img/icons/soc04.png" alt="">
                </a>
            </div>
            <div class="copy-block">© 2000 - 2012 "Мебельный магазин"</div>
        </div>
    </div>
</footer>
<!-- /footer -->
</body>

</html>