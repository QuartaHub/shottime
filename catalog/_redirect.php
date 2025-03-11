<?php
/*
 * пример реализуемого редиректа
https://shottime.ru/catalog/kronshteyny_dlya_optiki/adapter_shottime_pod_koltsa_weaver_na_prizmu_9_11mm/ ->
https://shottime.ru/catalog/products/adapter_shottime_pod_koltsa_weaver_na_prizmu_9_11mm/
*/
$uri_arr = explode( '/', $_SERVER['REQUEST_URI']);
if(count($uri_arr) == 5 AND $uri_arr[2] != 'products') {
    $arTov = \Bitrix\Iblock\ElementTable::getList(array(
        'filter' => array('IBLOCK_ID' => CATALOG_IBLOCK_ID,'CODE' => $uri_arr[3]),
        'limit' => 1,
    ))->fetch();
    if(!empty($arTov)){
        //редирект
        LocalRedirect("/catalog/products/". $uri_arr[3]."/");
    }
}