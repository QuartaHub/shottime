<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';

$APPLICATION->IncludeComponent(
	'bitrix:ui.sidepanel.wrapper',
	'',
	[
		'POPUP_COMPONENT_NAME' => 'bitrix:biconnector.key.list',
		'POPUP_COMPONENT_TEMPLATE_NAME' => '',
		'POPUP_COMPONENT_PARAMS' => [
			'KEY_LIST_URL' => 'key_list.php',
			'KEY_ADD_URL' => 'key_edit.php',
			'KEY_EDIT_URL' => 'key_edit.php?key_id=#ID#',
		],
		'POPUP_COMPONENT_USE_BITRIX24_THEME' => 'Y',
	]
);

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';
