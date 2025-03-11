<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказы");
?>
    <div class="main">
        <div class="personal">
            <div class="container">
                <h1 class="section__title">
                    <? $APPLICATION->ShowTitle(); ?>
                </h1>
                <div class="personal-wrap">
                    <div class="customers-menu">
                        <? $APPLICATION->IncludeFile( '/personal/sect_sidebar.php' ); ?>
                    </div>
                    <div class="customers-content">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:sale.personal.order",
                            ".default",
                            array(
                                "SEF_MODE" => "Y",
                                "SEF_FOLDER" => "/personal/order/",
                                "ORDERS_PER_PAGE" => 10,
                                "PATH_TO_PAYMENT" => "/personal/order/payment/",
                                "PATH_TO_BASKET" => "/personal/cart/",
                                "SET_TITLE" => "Y",
                                "SAVE_IN_SESSION" => "N",
                                "NAV_TEMPLATE" => "",
                                "SHOW_ACCOUNT_NUMBER" => "Y",
                                "COMPONENT_TEMPLATE" => ".default",
                                "DETAIL_HIDE_USER_INFO" => array(
                                    0 => "0",
                                ),
                                "PROP_1" => array(
                                ),
                                "PROP_2" => array(
                                ),
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "3600",
                                "CACHE_GROUPS" => "Y",
                                "PATH_TO_CATALOG" => "/catalog/",
                                "DISALLOW_CANCEL" => "N",
                                "CUSTOM_SELECT_PROPS" => array(
                                ),
                                "HISTORIC_STATUSES" => array(
                                    0 => "F",
                                ),
                                "RESTRICT_CHANGE_PAYSYSTEM" => array(
                                    0 => "F",
                                    1 => "N",
                                    2 => "P",
                                    3 => "PZ",
                                ),
                                "REFRESH_PRICES" => "N",
                                "ORDER_DEFAULT_SORT" => "ID",
                                "ALLOW_INNER" => "N",
                                "ONLY_INNER_FULL" => "N",
                                "COMPOSITE_FRAME_MODE" => "A",
                                "COMPOSITE_FRAME_TYPE" => "AUTO",
                                "SEF_URL_TEMPLATES" => array(
                                    "list" => "index.php",
                                    "detail" => "detail/#ID#/",
                                    "cancel" => "cancel/#ID#/",
                                )
                            ),
                            false
                        );?>
                        <?/*$APPLICATION->IncludeComponent(
                            "bitrix:sale.personal.order.list",
                            ".default",
                            array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ALLOW_INNER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "3600",
                                "CACHE_TYPE" => "A",
                                "COMPONENT_TEMPLATE" => ".default",
                                "DEFAULT_SORT" => "ID",
                                "DISALLOW_CANCEL" => "Y",
                                "HISTORIC_STATUSES" => array(
                                ),
                                "ID" => $ID,
                                "NAV_TEMPLATE" => "",
                                "ONLY_INNER_FULL" => "N",
                                "ORDERS_PER_PAGE" => "10",
                                "PATH_TO_BASKET" => "/cart/",
                                "PATH_TO_CANCEL" => "",
                                "PATH_TO_CATALOG" => "/catalog/",
                                "PATH_TO_COPY" => "/cart/",
                                "PATH_TO_DETAIL" => "/cabinet/orders/#ID#",
                                "PATH_TO_PAYMENT" => "/cabinet/orders/payment.php",
                                "REFRESH_PRICES" => "N",
                                "RESTRICT_CHANGE_PAYSYSTEM" => array(
                                    0 => "F",
                                    1 => "P",
                                ),
                                "SAVE_IN_SESSION" => "Y",
                                "SET_TITLE" => "Y",
                                "STATUS_COLOR_B" => "gray",
                                "STATUS_COLOR_F" => "gray",
                                "STATUS_COLOR_H" => "gray",
                                "STATUS_COLOR_N" => "green",
                                "STATUS_COLOR_OT" => "gray",
                                "STATUS_COLOR_P" => "yellow",
                                "STATUS_COLOR_PSEUDO_CANCELLED" => "red",
                                "STATUS_COLOR_SV" => "gray",
                                "STATUS_COLOR_TT" => "gray",
                                "STATUS_COLOR_ZO" => "gray"
                            ),
                            false
                        );*/?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>