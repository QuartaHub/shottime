<?php
session_start();
header("Cache-Control: no-cache");
header("Pragma: no-cache");

require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");
/* Избранное */
global $APPLICATION;
global $USER;

/*
 * <div data-id="<?=$arItem["ID"]?>" class="like <?if(array_search($arItem["ID"],$GLOBALS["FAVOURITES"]) !== false) echo 'is-active';?> like_button"></div>
 * */

//var_dump(unserialize($_COOKIE['favourites']));
//var_dump($_SESSION["favourites"]);


/*
 * Причёсываем массивы сессии и кукисов
 *
 * */
$arElements = [];
if(isset($_COOKIE['favourites'])){
    $coo = unserialize($_COOKIE['favourites']);
}
if(isset($_SESSION["favourites"])){
    $ses = $_SESSION["favourites"];
}
if(isset($coo) && count($coo)){
    $arElements = array_merge($arElements, $coo);
}
if(isset($ses) && count($ses)){
    $arElements = array_merge($arElements, $ses);
}

//
//if(count($coo)>0){
//    if(isset($_SESSION["favourites"]) && count($_SESSION["favourites"])){
//        if($coo !== $_SESSION["favourites"]){
//            $arElements = array_merge(unserialize($_COOKIE['favourites']), $_SESSION["favourites"]);
//        }
//    }
//}


$arElements = array_unique($arElements);

if(count($arElements) > 0){
    setcookie("favourites", serialize($arElements), time() + 60*60*24*60, "/");
    $_COOKIE['favourites'] = serialize($arElements);
    $_SESSION["favourites"] = $arElements;
}else{
    unset($_COOKIE['favourites']);
    setcookie("favourites", '', - 1, "/");
    $_SESSION["favourites"] = [];
}


if($_REQUEST['ID'])
{
    $id=(int)($_REQUEST["ID"]);
//    if(!$USER->IsAuthorized()) // Для неавторизованного
//    {
        if($_REQUEST["CHECKED"] == 'false')
        {
            $key = array_search($id, $arElements); // Находим элемент, который нужно удалить из избранного
            unset($arElements[$key]);
            $result = 2; // Датчик. Удаляем
        } else {
            $arElements[] = $id;
            $result = 1; // Датчик. Добавляем
        }
        $arElements = array_unique($arElements);
        if(count($arElements) < 1){
            setcookie("favourites", '', time() - 1, "/");
            $_SESSION["favourites"] = [];
        } else {
            setcookie("favourites", serialize($arElements), time() + 60*60*24*60, "/");
            $_SESSION["favourites"] = $arElements;
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
}
//var_dump($_SESSION["favourites"]);

/* Избранное */

$res['res'] = $arElements;
echo json_encode($res, JSON_FORCE_OBJECT);
die();