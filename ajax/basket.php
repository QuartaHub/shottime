<?php
session_start();
header("Cache-Control: no-cache");
header("Pragma: no-cache");

require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");
/* Избранное */
global $APPLICATION;
global $USER;
//header('Content-Type: application/json');
use \Bitrix\Main;
use \Bitrix\Sale;

Bitrix\Main\Loader::includeModule("sale");

//CModule::IncludeModule( 'iblock' );

$resBasket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());
$basket = [];
foreach ($resBasket->getBasketItems() as $item){
    $basket[$item->getId()] = $item->getProductId();
}

echo json_encode(['res' => $basket], JSON_FORCE_OBJECT);
die();