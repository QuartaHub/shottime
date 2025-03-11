<?
global $APPLICATION;
?>

<div class="nav-catalog modal-another" data-modal="catalog">
	<div class="modal__inner" data-modal-inner="catalog">
		<div class="container">
			<div class="nav-catalog__title"> каталог
				<div class="modal__close" data-modal-close="catalog">
					<svg class="icon icon-close">
						<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-close"></use>
					</svg>
				</div>
			</div>
			<div class="nav-catalog__grid nav-catalog2">
				<? $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"smart_catalog_top",
					[
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => [ "" ],
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "N",
					]
				); ?>
			</div>
		</div>
	</div>
</div>
<div class="nav-search modal-another" data-modal="search">
	<div class="modal__inner" data-modal-inner="search">
		<div class="container">
			<div class="nav-search__content">
				<form class="form">
					<div class="form-block">
						<label class="form-label">
							<svg class="icon icon-search-reverse">
								<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-search-reverse"></use>
							</svg>
                            <div class="catalog__search ajaxsearch__wrapper" id="ajaxsearch_id_header_mob">
                                <div class="input-wrapper">
                                    <input type="text" class="form-input search-input ajaxsearch__input"  placeholder="Введите запрос для поиска" name="q" value="" autocomplete="off">
                                </div>
                            </div>
<!--							<input type="text" class="form-input" placeholder="Введите запрос для поиска"/>-->
						</label>
						<button type="reset" class="form-close">
							<svg class="icon icon-close">
								<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-close"></use>
							</svg>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="mobile-menu modal" data-modal="mobile-menu">
	<div class="modal__inner" data-modal-inner="mobile-menu">
		<div class="mobile-menu__header">
			<div class="header__inner">
				<div class="header__left">
					<div class="header__logo header__item">
						<div class="header__mobile-menu" data-modal-close="mobile-menu">
							<div class="close">
								<svg class="icon icon-close">
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-close"></use>
								</svg>
							</div>
						</div>
						<a href="/" class="logo">
							<picture>
								<img src="/upload/Логотип.png" alt=""/>
							</picture>
						</a>
					</div>
				</div>
				<div class="header__right">
					<div class="header__actions">
						<button class="header__search link-modal-another" data-modal-close="mobile-menu" data-modal-open="search">
							<svg class="icon icon-search">
								<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-search"></use>
							</svg>
						</button>
						<a href="#" class="header__profile" data-modal-close="mobile-menu" data-modal-open="profile">
							<svg class="icon icon-profile">
								<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-profile"></use>
							</svg>
<!--							<span class="header__profile-value"> 12 </span>-->
						</a>
                        <a href="/compare" class="header__top-item btn btn-link header__compare" style="padding: 0">
                            <div class="position-relative">
                                <svg style="vertical-align: bottom;" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.78723 0.542553L5.78723 4.34043L1.98936 4.34043C1.84547 4.34043 1.70747 4.39759 1.60572 4.49934C1.50397 4.60108 1.44681 4.73909 1.44681 4.88298L1.44681 15.9149L0.542553 15.9149C0.398659 15.9149 0.260658 15.9721 0.15891 16.0738C0.0571616 16.1756 -3.00056e-08 16.3136 -2.37158e-08 16.4574C-1.74259e-08 16.6013 0.0571616 16.7393 0.15891 16.8411C0.260659 16.9428 0.398659 17 0.542553 17L16.4574 17C16.6013 17 16.7393 16.9428 16.8411 16.8411C16.9428 16.7393 17 16.6013 17 16.4574C17 16.3136 16.9428 16.1756 16.8411 16.0738C16.7393 15.9721 16.6013 15.9149 16.4574 15.9149L15.5532 15.9149L15.5532 7.7766C15.5532 7.6327 15.496 7.4947 15.3943 7.39295C15.2925 7.2912 15.1545 7.23404 15.0106 7.23404L11.2128 7.23404L11.2128 0.542552C11.2128 0.398658 11.1556 0.260658 11.0539 0.15891C10.9521 0.0571628 10.8141 -4.727e-07 10.6702 -4.6641e-07L6.32979 -2.76684e-07C6.18589 -2.70394e-07 6.04789 0.057163 5.94614 0.15891C5.84439 0.260658 5.78723 0.398658 5.78723 0.542553ZM2.53191 5.42553L5.78723 5.42553L5.78723 15.9149L2.53191 15.9149L2.53191 5.42553ZM14.4681 8.31915L14.4681 15.9149L11.2128 15.9149L11.2128 8.31915L14.4681 8.31915ZM10.1277 1.08511L10.1277 15.9149L6.87234 15.9149L6.87234 1.08511L10.1277 1.08511Z" fill="#2A2B2B"></path>
                                </svg>
                                <?
                                $f = 0;
                                if(isset($_SESSION['favourites']) && count($_SESSION['favourites'])){
                                    $f = count($_SESSION['favourites']);
                                }
                                ?>
                                <span class="compare-badge badge-" style="<?=($f>0?'display:block':'display:none')?>"><?=$f?></span>
                            </div>
                        </a>
					</div>
				</div>
			</div>
		</div>
		<div class="mobile-menu__content">
			<? $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"smart_top_mob",
				[
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => [ "" ],
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "top",
					"USE_EXT" => "N",
				]
			); ?>
			<div class="mobile-menu__contacts">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					[
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"PATH" => "/include/telephone.php",
					]
				); ?>
			</div>
			<div class="mobile-menu__contacts">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					[
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"PATH" => "/include/email.php",
					]
				); ?>
			</div>
			<div class="mobile-menu__social">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					[
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "standard.php",
						"PATH" => "/include/socnet.php",
					]
				); ?>
			</div>
		</div>
	</div>
</div>
<div class="modal-cart modal" data-modal="cart">
	<?	$APPLICATION->IncludeFile('/_includes/_modal_cart.php', false, array('SHOW_BORDER' => false));
	?>
</div>
<div class="modal modal-profile" data-modal="profile">
    <div class="modal__inner" data-modal-inner="profile">
        <div class="modal__close" data-modal-close="profile">
            <svg class="icon icon-close">
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-close"></use>
            </svg>
        </div>
        <div class="modal-profile__content">
            <div class="modal-profile__tabs tabs" data-tabs>
                <div class="tabs__head" data-tabs-head>
                    <div class="tabs__item is-active" data-tabs-item="login">Войти</div>
                    <div class="tabs__item" data-tabs-item="signup">Регистрация</div>
                </div>
                <div class="tabs__body">
                    <div class="tabs__content is-active" data-tabs-content="login">
                        <? $APPLICATION->IncludeComponent("bitrix:system.auth.authorize", "", array(
                            "FORGOT_PASSWORD_URL" => "/auth/?forgot_password=yes",
                            "PROFILE_URL" => "/personal/",
                            "REGISTER_URL" => "/auth/reg/",
                            "SHOW_ERRORS" => "Y",
                            "FORM_ID" => "auth_bride_form",
                            "FORM_ACCOUNT" => "BRIDE",
                            "FORM_GROUP_CODE" => "sv_brides",
                            "AUTH" => "N",
                            "NOT_SHOW_LINKS" => "Y"
                        )); ?>
                        <div class="policy">
                            Нажимая кнопку "Войти", Вы соглашаетесь <a href="/politic/" target="_blank">c условиями политики кон&shy;фи&shy;ден&shy;ци&shy;аль&shy;но&shy;сти</a>
                        </div>
                        <a href="/personal/?forgot_password=yes" class="forget-password__link"> Забыли пароль? </a>
                    </div>
                    <div class="tabs__content" data-tabs-content="signup">
                        <? $APPLICATION->IncludeComponent("bitrix:system.auth.registration", "", array(
                            "AUTH" => "N",
                            "SHOW_FIELDS" => array("NAME", "LAST_NAME", "EMAIL"),
                            "REQUIRED_FIELDS" => array("NAME", "LAST_NAME", "EMAIL"),
                            "SET_TITLE" => "N",
                            "SUCCESS_PAGE" => "/auth/reg/",
                            "USER_PROPERTY" => array(),
                            "USER_PROPERTY_NAME" => "",
                            "USE_BACKURL" => "N",
                            "FORM_ID" => "reg_bride_form",
                            "WOAUTH" => "Y",
                        )); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-profile" data-modal="profile1">
	<div class="modal__inner" data-modal-inner="profile">
		<div class="modal__close" data-modal-close="profile">
			<svg class="icon icon-close">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-close"></use>
			</svg>
		</div>
		<div class="modal-profile__content">
			<div class="modal-profile__tabs tabs" data-tabs>
				<div class="tabs__head" data-tabs-head>
					<div class="tabs__item is-active" data-tabs-item="login">Войти</div>
					<div class="tabs__item" data-tabs-item="signup">Регистрация</div>
				</div>
				<div class="tabs__body">
					<div class="tabs__content is-active" data-tabs-content="login">
						<form class="ui-form ui-form--login" data-ajax-form>
							<div data-form-result></div>
							<input type="hidden" name="action" value="User/login">
												<input type="hidden" name="afterCallback" value="afterRegister">
							<div class="ui-block">
								<label class="ui-label">
									<input type="email" name="email" class="ui-input" placeholder="E-mail" />
								</label>
							</div>
							<div class="ui-block">
								<label class="ui-label">
									<input type="password" name="pass" class="ui-input" placeholder="Пароль" />
								</label>
							</div>
							<button type="submit" class="ui-button ui-button--red"> Войти </button>
						</form>
                        <div class="policy">
                            Нажимая кнопку "Войти", Вы соглашаетесь <a href="/politic/" target="_blank">c условиями политики кон&shy;фи&shy;ден&shy;ци&shy;аль&shy;но&shy;сти</a>
                        </div>
						<a href="#" class="forget-password__link"> Забыли пароль? </a>
					</div>
					<div class="tabs__content" data-tabs-content="signup">
						<form class="ui-form" data-ajax-form>
							<div data-form-result></div>
							<input type="hidden" name="action" value="User/register">
							<input type="hidden" name="afterCallback" value="afterRegister">
							<div class="ui-block">
								<label class="ui-label">
									<input type="text" name="name" class="ui-input" placeholder="Имя" />
								</label>
							</div>
							<div class="ui-block">
								<label class="ui-label">
									<input type="text" name="last_name" class="ui-input" placeholder="Фамилия" />
								</label>
							</div>
							<div class="ui-block">
								<label class="ui-label">
									<input type="email" name="email" class="ui-input" placeholder="E-mail" />
								</label>
							</div>
							<div class="ui-block">
								<label class="ui-label">
									<input type="password" name="pass" class="ui-input" placeholder="Пароль" />
								</label>
							</div>
							<div class="ui-block">
								<label class="ui-label">
									<input type="password" name="pass2" class="ui-input" placeholder="Пароль" />
								</label>
							</div>
							<button type="submit" class="ui-button ui-button--red"> Зарегистрироваться </button>
							<div class="policy">
								Нажимая кнопку "Зарегистрироваться", Вы соглашаетесь <a href="/politic/" target="_blank">c условиями политики конфиденциальности</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal modal-profile" data-modal="feedback1">
	<div class="modal__inner" data-modal-inner="profile">
		<div class="modal__close" data-modal-close="feedback">
			<svg class="icon icon-close">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-close"></use>
			</svg>
		</div>
		<div class="modal-profile__content">
			<div class="modal-profile__tabs tabs" data-tabs>

				<div class="tabs__body">

					<div class="tabs__content  is-active" data-tabs-content="signup">
						<form class="ui-form" data-ajax-form>
							<div data-form-result></div>
							<input type="hidden" name="action" value="WebForm/feedback">
							<input type="hidden" name="afterCallback" value="afterFeedback">
							<div class="ui-block">
								<label class="ui-label">
									<input type="text" name="name" class="ui-input" placeholder="ФИО" />
								</label>
							</div>
							<div class="ui-block">
								<label class="ui-label">
									<input type="email" name="email" class="ui-input" placeholder="E-mail" />
								</label>
							</div>
							<div class="ui-block">
								<label class="ui-label">
									<textarea class="ui-input" name="message" placeholder="Текст сообщения"></textarea>
								</label>
							</div>
							<button type="submit" class="ui-button ui-button--red"> Отправить сообщение </button>
							<div class="policy">
								Нажимая кнопку "Отправить сообщение ", Вы соглашаетесь <a href="/politic/" target="_blank">c условиями политики конфиденциальности</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal modal-profile" data-modal="feedback">
	<div class="modal__inner" data-modal-inner="profile">
		<div class="modal__close" data-modal-close="feedback">
			<svg class="icon icon-close">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-close"></use>
			</svg>
		</div>
		<div class="modal-profile__content">
			<div class="modal-profile__tabs tabs" data-tabs>

				<div class="tabs__body">

                    <?/*?>
					<div class="tabs__content  is-active" data-tabs-content="signup">
                        <script data-b24-form="inline/13/si6xyp" data-skip-moving="true">(function(w,d,u){var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})(window,document,'https://crm.quarta-hunt.ru/upload/crm/form/loader_13_si6xyp.js');</script>
					</div>
                    <?*/?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php /*
<div class="modal-favorite modal" data-modal="favorite">
	<div class="modal__inner" data-modal-inner="favorite">
		<div class="modal__close" data-modal-close="favorite">
			<svg class="icon icon-close">
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-close"></use>
			</svg>
		</div>
		<div class="modal__header">
			<div class="section__title"> Избранное </div>
		</div>
		<div class="modal-cart__content">
			<div class="modal-cart__list">
				<div class="modal-cart__item">
					<div class="modal-cart__item-img">
						<picture>
							<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/thumb.webp" />
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/thumb.jpg" alt="" class="lazy">
						</picture>
						<div class="dot dot--top-left"></div>
						<div class="dot dot--top-right"></div>
						<div class="dot dot--bottom-right"></div>
						<div class="dot dot--bottom-left"></div>
					</div>
					<div class="modal-cart__item-content">
						<div class="modal-cart__item-name"> Пистолет Макарова ПМММакарова ПММ </div>
						<div class="modal-cart__item-price">
							<div class="price">
								<div class="price-new">
									<span class="value">8 500</span> руб
								</div>
								<div class="price-old">
									<span class="value">10 495</span> руб
								</div>
							</div>
						</div>
					</div>
					<div class="modal-cart__remove">
						<svg class="icon icon-close">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-close"></use>
						</svg>
					</div>
				</div>
				<div class="modal-cart__item">
					<div class="modal-cart__item-img">
						<picture>
							<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/thumb.webp" />
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/thumb.jpg" alt="" class="lazy">
						</picture>
						<div class="dot dot--top-left"></div>
						<div class="dot dot--top-right"></div>
						<div class="dot dot--bottom-right"></div>
						<div class="dot dot--bottom-left"></div>
					</div>
					<div class="modal-cart__item-content">
						<div class="modal-cart__item-name"> Пистолет Макарова ПМММакарова ПММ </div>
						<div class="modal-cart__item-price">
							<div class="price">
								<div class="price-new">
									<span class="value">8 500</span> руб
								</div>
								<div class="price-old">
									<span class="value">10 495</span> руб
								</div>
							</div>
						</div>
					</div>
					<div class="modal-cart__remove">
						<svg class="icon icon-close">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-close"></use>
						</svg>
					</div>
				</div>
				<div class="modal-cart__item">
					<div class="modal-cart__item-img">
						<picture>
							<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/thumb.webp" />
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/thumb.jpg" alt="" class="lazy">
						</picture>
						<div class="dot dot--top-left"></div>
						<div class="dot dot--top-right"></div>
						<div class="dot dot--bottom-right"></div>
						<div class="dot dot--bottom-left"></div>
					</div>
					<div class="modal-cart__item-content">
						<div class="modal-cart__item-name"> Пистолет Макарова ПМММакарова ПММ </div>
						<div class="modal-cart__item-price">
							<div class="price">
								<div class="price-new">
									<span class="value">8 500</span> руб
								</div>
								<div class="price-old">
									<span class="value">10 495</span> руб
								</div>
							</div>
						</div>
					</div>
					<div class="modal-cart__remove">
						<svg class="icon icon-close">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-close"></use>
						</svg>
					</div>
				</div>
				<div class="modal-cart__item">
					<div class="modal-cart__item-img">
						<picture>
							<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/thumb.webp" />
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/thumb.jpg" alt="" class="lazy">
						</picture>
						<div class="dot dot--top-left"></div>
						<div class="dot dot--top-right"></div>
						<div class="dot dot--bottom-right"></div>
						<div class="dot dot--bottom-left"></div>
					</div>
					<div class="modal-cart__item-content">
						<div class="modal-cart__item-name"> Пистолет Макарова ПМММакарова ПММ </div>
						<div class="modal-cart__item-price">
							<div class="price">
								<div class="price-new">
									<span class="value">8 500</span> руб
								</div>
								<div class="price-old">
									<span class="value">10 495</span> руб
								</div>
							</div>
						</div>
					</div>
					<div class="modal-cart__remove">
						<svg class="icon icon-close">
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-close"></use>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-cart__total">
			<div class="ui-button ui-button--transparent"> Все избранное </div>
		</div>
	</div>
</div>
*/?>