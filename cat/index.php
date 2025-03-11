<?
define("HIDE_SIDEBAR", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if(!isset($_SESSION["sorting"])){
	$_SESSION["sorting"] = "name";
	$_SESSION["sorting_asc"] = "asc";

}
if(isset($_REQUEST["sorting"])){
	$_SESSION["sorting"] = $_REQUEST["sorting"];
}
if(isset($_REQUEST["sorting_asc"])){
	$_SESSION["sorting_asc"] = $_REQUEST["sorting_asc"];
}

?>
<div class="cat">

</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
