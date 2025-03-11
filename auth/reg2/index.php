<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
    <div class="row">
        <div class="col-xs-3"></div>
        <div class="col-xs-6">

<?$APPLICATION->IncludeComponent(
    "nimda:main.register",
    ".default",
    array(
        "AUTH" => "N",
        "REQUIRED_FIELDS" => array(
            0 => "EMAIL",
            1 => "NAME",
            2 => "SECOND_NAME",
            3 => "LAST_NAME",
            4 => "PERSONAL_CITY",
            5 => "PERSONAL_STATE",
            6 => "WORK_PHONE",
            7 => "WORK_CITY",
            8 => "WORK_STATE",
        ),
        "SET_TITLE" => "Y",
        "SHOW_FIELDS" => array(
            0 => "EMAIL",
            1 => "NAME",
            2 => "SECOND_NAME",
            3 => "LAST_NAME",
            4 => "WORK_COMPANY",
            5 => "WORK_PHONE",
            6 => "WORK_CITY",
            7 => "WORK_STATE",
        ),
        "SUCCESS_PAGE" => "/reg_ok.php",
        "USER_PROPERTY" => array(
        ),
        "USER_PROPERTY_NAME" => "",
        "USE_BACKURL" => "Y",
        "COMPONENT_TEMPLATE" => ".default",
        "USE_CAPTCHA" => "Y"
    ),
    false
);?>
        </div>
        <div class="col-xs-3"></div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>