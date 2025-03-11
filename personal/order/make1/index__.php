<?
define("HIDE_SIDEBAR", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

Spro\Option::changeOptions('main', 'new_user_registration', 'Y');
$APPLICATION->SetTitle("Заказы");
?>
<script src="https://api-maps.yandex.ru/2.1/?apikey=d0d72f8a-07f1-4957-a7c0-1b3c534ca715&lang=ru_RU" type="text/javascript"></script>

<?$APPLICATION->IncludeComponent(
    "opensource:order",
    ".default",
//	"bitrix:sale.order.ajax",
//	"custom",
	array(),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
