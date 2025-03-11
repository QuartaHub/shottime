<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?>
	<div class="f__search">
		<form method="get" action="/search/" autocomplete="off">
			<div class="catalog__search ajaxsearch__wrapper" id="ajaxsearch_id_header">
				<button class="btn" type="submit"><img  src="/assets/img/icons/icon-search.png" alt="submit"></button>
				<input type="text" class="input ajaxsearch__input"  placeholder="ПОИСК_" name="q" value="<?=$arResult["REQUEST"]["QUERY"]?>" autocomplete="off">
			</div>
			<div class="f__search_hint">
				По артикулу или наименованию товара
			</div>
		</form>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>