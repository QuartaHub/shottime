<?
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/technocom/tehnocom_functions.php");

header('Content-Type: application/json; charset=utf-8');
//header('Content-Type: application/json');

//echo(CATALOG_IBLOCK_ID);

$APPLICATION->IncludeComponent(
    "nimda:search.page",
    "ajax",
    array(
        "RESTART" => "N",
        "CHECK_DATES" => "N",
        "USE_TITLE_RANK" => "Y",
        "DEFAULT_SORT" => "rank",
        "arrFILTER" => array(
            0 => "iblock_1c_catalog",
        ),
        "arrFILTER_main" => "",
        "arrFILTER_iblock_services" => array(
            0 => "all",
        ),
        "arrFILTER_iblock_news" => array(
            0 => "all",
        ),
        "arrFILTER_iblock_catalog" => array(
            0 => "all",
        ),
        "SHOW_WHERE" => "N",
        "SHOW_WHEN" => "N",
        "PAGE_RESULT_COUNT" => "10",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_SHADOW" => "Y",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Результаты поиска",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "arrows",
        "USE_SUGGEST" => "N",
        "SHOW_ITEM_TAGS" => "N",
        "SHOW_ITEM_DATE_CHANGE" => "N",
        "SHOW_ORDER_BY" => "N",
        "SHOW_TAGS_CLOUD" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "COMPONENT_TEMPLATE" => "ajax",
        "NO_WORD_LOGIC" => "N",
        "FILTER_NAME" => "",
        "arrFILTER_iblock_1c_catalog" => array(
            0 => CATALOG_IBLOCK_ID,
        ),
        "USE_LANGUAGE_GUESS" => "Y",
        "SHOW_RATING" => "",
        "RATING_TYPE" => "",
        "PATH_TO_USER_PROFILE" => ""
    ),
    false
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");