<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

?>
<a class="header__user modal-call" data-modal="authorization" href="#">11111</a>


    <div class="modal" id="authorization">
        <div class="modal-dialog">
            <div class="modal-dialog__close"></div>
            <div class="modal-container">
                <div class="modal-close"></div>
                <div class="tabs">
                    <input type="radio" name="tab-btn" id="tab-reg" value="1" checked>
                    <label for="tab-reg">Регистрация</label>
                    <input type="radio" name="tab-btn" id="tab-auth" value="1">
                    <label for="tab-auth">Вход</label>
                    <div id="block-reg">
                        <div class="modal-content">
                            <div class="reg-form__form-hide">
                                <input type="radio" name="choice" id="choice-bride" class="modal__choice_radio" checked>
                                <label class="modal__choice_label" for="choice-bride">
                                    <div class="modal__choice_btn">
                                        <div class="modal__choice_box"></div>
                                        <div class="modal__choice_text">Невеста</div>
                                    </div>
                                </label>
                                <input type="radio" name="choice" id="choice-spec" class="modal__choice_radio">
                                <label class="modal__choice_label" for="choice-spec">
                                    <div class="modal__choice_btn">
                                        <div class="modal__choice_box"></div>
                                        <div class="modal__choice_text">Свадебный специалист</div>
                                    </div>
                                </label>
                                <div class="modal__choice_content" id="block-bride">
                                    <div class="reg-form__form-hide">
                                        <? $APPLICATION->IncludeComponent("bitrix:main.register", "", array(
                                            "AUTH" => "N",
                                            "SHOW_FIELDS" => array("NAME", "LAST_NAME", "EMAIL"),
                                            "REQUIRED_FIELDS" => array("NAME", "LAST_NAME", "EMAIL"),
                                            "SET_TITLE" => "N",
                                            "SUCCESS_PAGE" => "",
                                            "USER_PROPERTY" => array(),
                                            "USER_PROPERTY_NAME" => "",
                                            "USE_BACKURL" => "N",
                                            "FORM_ID" => "reg_bride_form",
                                            "WOAUTH" => "Y",
                                        )); ?>
                                    </div>
                                </div>
                                <div class="modal__choice_content" id="block-spec">
                                    <div class="reg-form__form-hide">
                                        <? $APPLICATION->IncludeComponent("bitrix:main.register", "", array(
                                            "AUTH" => "N",
                                            "SHOW_FIELDS" => array("NAME", "LAST_NAME", "EMAIL"),
                                            "REQUIRED_FIELDS" => array("NAME", "LAST_NAME", "EMAIL"),
                                            "SET_TITLE" => "N",
                                            "SUCCESS_PAGE" => "",
                                            "USER_PROPERTY" => array(),
                                            "USER_PROPERTY_NAME" => "",
                                            "USE_BACKURL" => "N",
                                            "FORM_ID" => "reg_spec_form",
                                            "WOAUTH" => "Y",
                                        )); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="reg-form__form-success">
                                <h4>РЕГИСТРАЦИЯ ПРОШЛА УСПЕШНО!</h4>
                                <span>Подтвердите свой e-mail, перейдя<br/>по ссылке в полученном письме</span>
                            </div>
                        </div>
                        <img class="reg-form__form-hide" src="<?=SITE_TEMPLATE_PATH?>/img/shape-reg-head.png" alt="">
                        <img class="reg-form__form-success" src="<?=SITE_TEMPLATE_PATH?>/img/shape-reg-mini.png" alt="">
                    </div>
                    <div id="block-auth">
                        <div class="modal-content">

                            <input type="radio" name="choice-auth" id="choice-auth-bride" class="modal__choice_radio js_account_radio" checked>
                            <label class="modal__choice_label" for="choice-auth-bride">
                                <div class="modal__choice_btn">
                                    <div class="modal__choice_box"></div>
                                    <div class="modal__choice_text">Невеста</div>
                                </div>
                            </label>

                            <input type="radio" name="choice-auth" id="choice-auth-spec" class="modal__choice_radio js_account_radio">
                            <label class="modal__choice_label" for="choice-auth-spec">
                                <div class="modal__choice_btn">
                                    <div class="modal__choice_box"></div>
                                    <div class="modal__choice_text">Свадебный специалист</div>
                                </div>
                            </label>

                            <div class="modal__choice_content" id="block-auth-bride">
                                <? $APPLICATION->IncludeComponent("bitrix:system.auth.form", "", array(
                                    "FORGOT_PASSWORD_URL" => "/account/?forgot_password=yes",
                                    "PROFILE_URL" => "/account/",
                                    "REGISTER_URL" => "/register/",
                                    "SHOW_ERRORS" => "Y",
                                    "FORM_ID" => "auth_bride_form",
                                    "FORM_ACCOUNT" => "BRIDE",
                                    "FORM_GROUP_CODE" => "sv_brides",
                                    "AUTH" => "N",
                                )); ?>
                            </div>
                            <div class="modal__choice_content" id="block-auth-spec">
                                <? $APPLICATION->IncludeComponent("bitrix:system.auth.form", "", array(
                                    "FORGOT_PASSWORD_URL" => "/account/?forgot_password=yes",
                                    "PROFILE_URL" => "/account/",
                                    "REGISTER_URL" => "/register/",
                                    "SHOW_ERRORS" => "Y",
                                    "FORM_ID" => "auth_spec_form",
                                    "FORM_ACCOUNT" => "SPEC",
                                    "FORM_GROUP_CODE" => "sv_specs",
                                    "AUTH" => "N",
                                )); ?>
                            </div>
                            <div class="hidden" id="block-forgotpasswd">
                                <?$APPLICATION->IncludeComponent("bitrix:system.auth.forgotpasswd", ".default", Array(
                                    "SHOW_ERRORS" => "Y",
                                    "AUTH_RESULT" => $APPLICATION->arAuthResult
                                ));?>
                            </div>

                        </div>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/shape-auth-head.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>