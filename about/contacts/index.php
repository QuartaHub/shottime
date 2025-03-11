<? require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php" );
$APPLICATION->SetTitle("Задайте вопрос");
$APPLICATION->SetTitle( "Задайте вопрос" );
?><div class="main">
 <section class="contacts">
	<div class="container">
		<div class="section__title">
			 Контакты
		</div>
		<div class="contacts-block">
			<div class="contacts-element">
				<div class="contacts-row">
					<div class="contacts-item">
<!--						<div class="contacts-item__title">Связаться</div>-->
						<div class="contacts-info">
							<div class="contacts-info__title">
								Телефон
							</div>
							 <?$APPLICATION->IncludeFile('/_includes/contacts/phones.php', false, ['MODE'=> 'text']);?>
						</div>
                        <div class="contacts-info">
                            <div class="contacts-info__title">
                                Адрес
                            </div>
                            <div class="contacts-info__text">
                                <?$APPLICATION->IncludeFile('/_includes/contacts/address.php', false, ['MODE'=> 'text']);?>
                            </div>
                            <div class="contacts-info__text">
                                <br>
                                <?$APPLICATION->IncludeFile('/_includes/contacts/work_time.php', false, ['MODE'=> 'text']);?>
                            </div>
                        </div>
					</div>
					<div class="contacts-item">
<!--						<div class="contacts-item__title">Адрес магазина:</div>-->
                        <div class="contacts-info">
                            <div class="contacts-info__title">
                                E-mail
                            </div>
                            <div class="contacts-info__text">
                                <div class="contacts-info__text_list">
                                <?$APPLICATION->IncludeFile('/_includes/contacts/email.php', false, ['MODE'=> 'text']);?>
                                    <br>
                                </div>
                            </div>
                        </div>
<?/*
						<div class="contacts-info">
							<div class="contacts-info__title">
                                Социальные сети
							</div>
							<div class="contacts-info__text">
                                <?$APPLICATION->IncludeFile('/_includes/contacts/social.php', false, ['MODE'=> 'text']);?>
							</div>
						</div>
*/?>
					</div>
				</div>
				<div class="contacts-social">
<!--					<div class="contacts-social__title">-->
<!--						Мы в соцсетях-->
<!--					</div>-->
					 <?/*$APPLICATION->IncludeComponent(
	"spro:widget",
	"social",
Array(),
false,
Array(
	'HIDE_ICONS' => 'Y'
)
);*/?>
                    <?/*$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "standard.php",
                            "PATH" => "/include/social_icons.php",
                        ]
                    );*/?>
				</div>
 <button class="ui-button ui-button--border contacts-button" type="button" data-modal-open="feedback">Связаться с нами</button>
			</div>
			<div class="contacts-map">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"API_KEY" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:59.845314924935835;s:10:\"yandex_lon\";d:30.322703432055732;s:12:\"yandex_scale\";i:17;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:30.322703432055757;s:3:\"LAT\";d:59.845314924944816;s:4:\"TEXT\";s:40:\"Quarta Оружейный Квартал\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "600",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		)
	),
	false,
	array(
		"HIDE_ICONS" => "N"
	)
);?>
			</div>
		</div>
	</div>
 </section>
</div>

	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"smart_tizers",
		[
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "Y",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPONENT_TEMPLATE" => "smart_media_1",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => [
				0 => "",
				1 => "",
			],
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => IBLOCKS['ib-tizers'],
			"IBLOCK_TYPE" => SITE_ID,
			"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => [
				0 => "",
				1 => "",
			],
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
		],
		false
	); ?>

<? require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php" ) ?>