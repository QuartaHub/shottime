<?php
session_start();
header("Cache-Control: no-cache");
header("Pragma: no-cache");

require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");
/* Избранное */
global $APPLICATION;
global $USER;
//header('Content-Type: application/json');


CModule::IncludeModule( 'iblock' );

/*
 * <div data-id="<?=$arItem["ID"]?>" class="like <?if(array_search($arItem["ID"],$GLOBALS["FAVOURITES"]) !== false) echo 'is-active';?> like_button"></div>
 * */

// $_SESSION[$arParams["NAME"]][$arParams["IBLOCK_ID"]]["ITEMS"]
$ids = [];
if($_REQUEST['ID']) {
    $ids[] = (int)($_REQUEST["ID"]);
}
if($_REQUEST['IDS']){
    $ids = $_REQUEST['IDS'];
}
//    if(!$USER->IsAuthorized()) // Для неавторизованного
//    {

$arElements = [];
if(isset($_SESSION["CATALOG_COMPARE_LIST"]) && isset($_SESSION["CATALOG_COMPARE_LIST"][CATALOG_IBLOCK_ID]) && isset($_SESSION["CATALOG_COMPARE_LIST"][CATALOG_IBLOCK_ID]["ITEMS"])){
    $arElements = array_keys($_SESSION["CATALOG_COMPARE_LIST"][CATALOG_IBLOCK_ID]["ITEMS"]);
}
if(is_array($ids) && count($ids)>0){
    foreach ($ids as $id){
        if($_REQUEST["CHECKED"] == 'false')
        {
            $key = array_search($id, $arElements); // Находим элемент, который нужно удалить из избранного
            unset($arElements[$key]);
            $result = 2; // Удаляем
        } else {
            $arElements[] = $id;
            $result = 1; // Добавляем
        }
    }

    if(empty($arElements)){
        unset($_SESSION["CATALOG_COMPARE_LIST"][CATALOG_IBLOCK_ID]['ITEMS']);
    } else {
        unset($_SESSION["CATALOG_COMPARE_LIST"][CATALOG_IBLOCK_ID]['ITEMS']);

        $obElList = CIBlockElement::GetList(
            [
                'ID' => 'DESC'
            ],
            [
                'IBLOCK_ID' => CATALOG_IBLOCK_ID,
                'ID' => $arElements,
                'ACTIVE' => 'Y',
            ],
            false,
            false
        );

        while ($item = $obElList->GetNext())
        {
            $_SESSION["CATALOG_COMPARE_LIST"][CATALOG_IBLOCK_ID]["ITEMS"][$item["ID"]] = $item;
        }
    }
}

//    }
//    else { // Для авторизованного
//        $idUser = $USER->GetID();
//        $rsUser = CUser::GetByID($idUser);
//        $arUser = $rsUser->Fetch();
//        $arElements = $arUser['UF_FAVORITES'];	 // Достаём избранное пользователя
//
//        if(!in_array($id, $arElements)) // Если еще нету этой позиции в избранном
//        {
//            $arElements[] = $id;
//            $result = 1;
//
//        }
//        else {
//            if($_REQUEST["CHECKED"] == 'false'){
//                $key = array_search($id, $arElements); // Находим элемент, который нужно удалить из избранного
//                unset($arElements[$key]);
//                $result = 2;
//            }else{
//                $result = 1;
//            }
//        }
//
//        $USER->Update($idUser, Array("UF_FAVORITES" => $arElements)); // Добавляем элемент в избранное
//    }

$ak = [];

if(isset($_SESSION["CATALOG_COMPARE_LIST"]) && isset($_SESSION["CATALOG_COMPARE_LIST"][CATALOG_IBLOCK_ID]) && isset($_SESSION["CATALOG_COMPARE_LIST"][CATALOG_IBLOCK_ID]["ITEMS"])){
    $ak = array_keys($_SESSION["CATALOG_COMPARE_LIST"][CATALOG_IBLOCK_ID]["ITEMS"]);
}
echo json_encode($ak, JSON_FORCE_OBJECT);
die();