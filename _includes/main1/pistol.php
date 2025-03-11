<section class="section section-slider">
		<div class="container">
			<div class="section__wrapper">
				<div class="section__content">
					<div class="section__title"> <? $APPLICATION->IncludeFile( '/_includes/main/slider1_title.php' ); ?> </div>
					<div class="section__description">
						<? $APPLICATION->IncludeFile( '/_includes/main/slider1_text.php' ); ?>
					</div>
					<div class="section__slider-navigation">
						<button class="swiper-button-prev ui-swiper-button">
							<svg class="icon icon-arrow-prev">
								<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-arrow-prev"></use>
							</svg>
						</button>
						<button class="swiper-button-next ui-swiper-button">
							<svg class="icon icon-arrow-next">
								<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite.svg#icon-arrow-next"></use>
							</svg>
						</button>
					</div>
				</div>
				<div class="section__slider">
					<? $APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"smart_sub_slider_pistol",
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
							"COMPONENT_TEMPLATE" => ".default",
							"DETAIL_URL" => "",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"FIELD_CODE" => [ 0 => "", 1 => "", ],
							"FILTER_NAME" => "",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => IBLOCKS['ib-pistol'],
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
							"PROPERTY_CODE" => [ 0 => "", 1 => "", ],
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
						]
					); ?>
				</div>
			</div>
		</div>
	</section>

<?
/*
http://stalker.ru/upload/iblock/d87/u04648qvjnuc3dm65fhkqze9h9z6zha7/21s3ddf12412sd4asd1.png.png
http://stalker.ru/upload/iblock/9ac/cwdfo1iuemyfkogugginztqyn5wgi0j9/21s3ddf12412sd4asd1.png.png
http://stalker.ru/upload/iblock/021/m8cnonqgwoil5fq0afc213949zv2y2gu/3y4j4g2j4.png.png
http://stalker.ru/upload/iblock/84e/7zlt9nkm6rszifyktt16rmitfixfa4yh/3y4j4g2j4.png.png
http://stalker.ru/upload/iblock/308/q2naki9o1936jrn380zcu1bhkm8a5bhe/3kf8gjs63.png.png
http://stalker.ru/upload/iblock/47b/pem4pjve7g4sp20uey10ecw46ay9i2rp/3kf8gjs63.png.png
http://stalker.ru/upload/iblock/d50/cc9t212k6j06qvjids259s24yex2ujix/34kk4h234k.png.png
http://stalker.ru/upload/iblock/96c/maaeapm69xcl9luj1nm58v2lqwdaii5t/34kk4h234k.png.png
http://stalker.ru/upload/iblock/8fa/b6193fjv68np7xenp6154za069gmg9fx/9vuhyuikfxtt8wf1ibk7djrg86ls5uj7.png
http://stalker.ru/upload/iblock/873/r3bmv3xt85z1u72gf365a5ur39o6hqkf/9vuhyuikfxtt8wf1ibk7djrg86ls5uj7.png
http://stalker.ru/upload/iblock/12e/7uyrxl1yzubzo9fcosjpik83sqzzw72c/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/1c9/8k00spk0cxu304lerofux2dog80tyhn8/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/253/xx9ykvt9073kue2g8whl7ade7yzg7m5d/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/87b/3r75l3mimjw78czta8phz1cfvn3txkpn/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/671/aasl6whde4x22bwu234l23iae3nuy2xg/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/6d5/5ijgnbvjywmchro6zmpa7b889twijsqi/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/043/yeuyecvdirioargzoup02kgstwnyuy2p/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/c70/d9b18i4fgryq41x5hft23v5soc7lj1t6/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/d4e/th2tumv8ellu6krxdiamd41m23i611zd/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/f8c/gy0jzlppiays40arjohupuufx7k81wew/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/652/ulgznhxphfz6g064cg6ltl0kya31g6p2/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/cab/34a7djydy830rujupntzduu7qoh2ilpo/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/b7d/om8nt3dnsqbe5ejqaiwhdiqqxsy5p9st/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/163/tzkry6gvut1u9pqm76e3b1wo0mjx3rp8/grsbvegmd9ymkcup8v5xbol0dk8qo7gg.jpg
http://stalker.ru/upload/iblock/8e3/2wcuzwa4uc4czscckycpdcufz92fs5nt/03j5qxglaruaj4z38skfwrohkeg17snf.jpg
http://stalker.ru/upload/iblock/312/r3ngddf9jfgmz8qe7lt963nb0pxhja1h/0as3slzhf1qpd1029u2z7s90fzxm9dvg.jpg
http://stalker.ru/upload/iblock/522/6c34kcfb5aanxan0lts2mkittf2en8d2/zeu9qzd8eahfeckoufv7gvzrjuhx3n10.jpg
http://stalker.ru/upload/iblock/a1c/di1e5db5tea098dfcp1uaqypxy7oc508/6som81bw0nlcvvxvv40312eqem8ut040.jpg
http://stalker.ru/upload/iblock/679/qngq34xspuf6msjhxidbxltzsb8i0s26/ncdju1iy6jjji9jtti2ui0mf3mv1hhif.jpg
http://stalker.ru/upload/iblock/a2f/lu6ekj13fvn0b65lhjugonsq21r6l83t/t19cbep45zmi3ayhkcojn8xzzwk6l8zy.jpg
http://stalker.ru/upload/iblock/d07/u1dl5b5hnkwesdls3ltftvdxdrseuq7w/amrb9sto58o1o1700ww75yfwoljnckp6.jpg
http://stalker.ru/upload/iblock/cfe/0ul9mmeqbsnmi9xa64fxqw32y12b3bp9/7lbdv7zbh07hxem352illgxavpue7h2u.jpg
http://stalker.ru/upload/iblock/2f2/10j7286rzn7yyqdxdb7tdlvaa5tz4270/j0xnfek37izvm619qtwjvw8ayhpagdf6.jpg
http://stalker.ru/upload/iblock/e0b/jmpqxj01genkvmobp2f9lwj6qbkt106j/STG2-23B%201.png
http://stalker.ru/upload/iblock/718/e3tpf0t42u1ypk6dfoxeh5ovafjifkaj/STA-23B%203.png
http://stalker.ru/upload/iblock/3db/b3z06dvroy6q0ww691lkwc0f6crajcio/Group%20563.png
http://stalker.ru/upload/iblock/342/k5pw22c3k7ptf0tlhu71b79j7lxk7gwf/STG2-23B%201.png
http://stalker.ru/upload/iblock/2cf/ncdck0qhj192nnsq0lqxwzu9u5ygg27b/STG1-89Y%201.png
http://stalker.ru/upload/iblock/280/fpat312q4duouy305ipm3mgtkb0sxcix/STA-23B%201.png
http://stalker.ru/upload/iblock/dde/a88rfrtishq6dh2biwoomt3cwbchgrry/s1911t.png
http://stalker.ru/upload/iblock/aa7/voq1ft7d5jn56r46mcm46tn8hikq7y4p/Group%20561%20(1).png
http://stalker.ru/upload/iblock/e96/n0cfnqdnetgv0lcl6adj3utsi7nuj8y0/s92pl.png
http://stalker.ru/upload/iblock/5c1/fmxar68t08nqej034q9esjof66c3c61x/Group%20564.png
http://stalker.ru/upload/iblock/403/ttsk8e82qs1rklw28fl3fvn3ihdgm96q/dasgjklgfbh.png
http://stalker.ru/upload/iblock/d0b/xj1jyypcp4bdpiuvjtt9anolqccc42tz/djsjdadf.png
http://stalker.ru/upload/iblock/69d/nkfqdxmyi98q1y1b0qudimzob3b4hm90/dsvdvzsdzsdzc.png
http://stalker.ru/upload/iblock/638/adm1i6dxvu2jucdhggp0ssi3l0vf2vuj/fasdaded.png
http://stalker.ru/upload/iblock/5c7/a0jolqt3ebycfi6g4k389hfgn9f5ai7l/zhxkckxzfg.png
http://stalker.ru/upload/medialibrary/8e8/v52124nplnyh76x0ft37g9zio1nqcrv8/Group%201%20(2).png


 */

?>