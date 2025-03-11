<?

use Spro\Image;

require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php" );
$APPLICATION->SetTitle("О компании");
$APPLICATION->SetPageProperty("title", "О компании");
?><p>
</p>
 <?php
// Список новостей
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"photos",                            // [bottom, .default, official, table]
	array(
		// region Основные параметры
		"IBLOCK_TYPE"                      =>  SITE_ID,              // Тип информационного блока (используется только для проверки) : array ( '-' => ' ', 'catalog' => '[catalog] Каталоги', 'news' => '[news] Новости', 'offers' => '[offers] Торговые предложения', 'services' => '[services] Сервисы', 'references' => '[references] Справочники', )
		"IBLOCK_ID"                        =>  64,  // Код информационного блока : array ( 1 => 'Новости', 2 => 'Одежда', 3 => 'Одежда (предложения)', )
		"NEWS_COUNT"                       =>  "20",                // Количество новостей на странице
		// endregion
		// region Источник данных
		"SORT_BY1"                         =>  "SORT",       // Поле для первой сортировки новостей : array ( 'ID' => 'ID', 'NAME' => 'Название', 'ACTIVE_FROM' => 'Дата начала активности', 'SORT' => 'Сортировка', 'TIMESTAMP_X' => 'Дата последнего изменения', )
		"SORT_ORDER1"                      =>  "ASC",              // Направление для первой сортировки новостей : array ( 'ASC' => 'По возрастанию', 'DESC' => 'По убыванию', )
		"SORT_BY2"                         =>  "SORT",              // Поле для второй сортировки новостей : array ( 'ID' => 'ID', 'NAME' => 'Название', 'ACTIVE_FROM' => 'Дата начала активности', 'SORT' => 'Сортировка', 'TIMESTAMP_X' => 'Дата последнего изменения', )
		"SORT_ORDER2"                      =>  "ASC",               // Направление для второй сортировки новостей : array ( 'ASC' => 'По возрастанию', 'DESC' => 'По убыванию', )
		"FILTER_NAME"                      =>  "",                  // Фильтр
		"FIELD_CODE"                       =>  array(''),           // Поля : array ( 'ID' => 'ID', 'CODE' => 'Символьный код', 'XML_ID' => 'Внешний код', 'NAME' => 'Название', 'TAGS' => 'Теги', 'SORT' => 'Сортировка', 'PREVIEW_TEXT' => 'Описание для анонса', 'PREVIEW_PICTURE' => 'Картинка для анонса', 'DETAIL_TEXT' => 'Детальное описание', 'DETAIL_PICTURE' => 'Детальная картинка', 'DATE_ACTIVE_FROM' => 'Начало активности (дата)', 'ACTIVE_FROM' => 'Начало активности (время)', 'DATE_ACTIVE_TO' => 'Окончание активности (дата)', 'ACTIVE_TO' => 'Окончание активности (время)', 'SHOW_COUNTER' => 'Количество показов', 'SHOW_COUNTER_START' => 'Дата первого показа', 'IBLOCK_TYPE_ID' => 'Тип информационного блока', 'IBLOCK_ID' => 'ID информационного блока', 'IBLOCK_CODE' => 'Символьный код информационного блока', 'IBLOCK_NAME' => 'Название информационного блока', 'IBLOCK_EXTERNAL_ID' => 'Внешний код информационного блока', 'DATE_CREATE' => 'Дата создания', 'CREATED_BY' => 'Кем создан (ID)', 'CREATED_USER_NAME' => 'Кем создан (имя)', 'TIMESTAMP_X' => 'Дата изменения', 'MODIFIED_BY' => 'Кем изменен (ID)', 'USER_NAME' => 'Кем изменен (имя)', )
		"PROPERTY_CODE"                    =>  array(''),           // Свойства
		"CHECK_DATES"                      =>  "Y",                 // Показывать только активные на данный момент элементы
		// endregion
		// region Шаблоны ссылок
		"DETAIL_URL"                       =>  "",                  // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		// endregion
		// region Управление режимом AJAX
		"AJAX_MODE"                        =>  "N",                 // Включить режим AJAX
		"AJAX_OPTION_JUMP"                 =>  "N",                 // Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE"                =>  "Y",                 // Включить подгрузку стилей
		"AJAX_OPTION_HISTORY"              =>  "N",                 // Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL"           =>  "",                  // Дополнительный идентификатор
		// endregion
		// region Настройки кеширования
		"CACHE_TYPE"                       =>  "A",                 // Тип кеширования : array ( 'A' => 'Авто + Управляемое', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
		"CACHE_TIME"                       =>  "36000000",          // Время кеширования (сек.)
		"CACHE_NOTES"                      =>  "",                  //
		"CACHE_FILTER"                     =>  "N",                 // Кешировать при установленном фильтре
		"CACHE_GROUPS"                     =>  "Y",                 // Учитывать права доступа
		// endregion
		// region Дополнительные настройки
		"PREVIEW_TRUNCATE_LEN"             =>  "",                  // Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT"               =>  "d.m.Y",             // Формат показа даты : array ( 'd-m-Y' => '22-02-2007', 'm-d-Y' => '02-22-2007', 'Y-m-d' => '2007-02-22', 'd.m.Y' => '22.02.2007', 'd.M.Y' => '22.Фев.2007', 'm.d.Y' => '02.22.2007', 'j M Y' => '22 Фев 2007', 'M j, Y' => 'Фев 22, 2007', 'j F Y' => '22 Февраля 2007', 'f j, Y' => 'Февраль 22, 2007', 'd.m.y g:i A' => '22.02.07 7:30 AM', 'd.M.y g:i A' => '22.Фев.07 7:30 AM', 'd.M.Y g:i A' => '22.Фев.2007 7:30 AM', 'd.m.y G:i' => '22.02.07 7:30', 'd.m.Y H:i' => '22.02.2007 07:30', 'SHORT' => 'Формат сайта', 'FULL' => 'Формат сайта (включая время)', )
		"SET_TITLE"                        =>  "Y",                 // Устанавливать заголовок страницы
		"SET_BROWSER_TITLE"                =>  "Y",                 // Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS"                =>  "Y",                 // Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION"             =>  "Y",                 // Устанавливать описание страницы
		"SET_STATUS_404"                   =>  "N",                 // Устанавливать статус 404, если не найдены элемент или раздел
		"INCLUDE_IBLOCK_INTO_CHAIN"        =>  "Y",                 // Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN"               =>  "Y",                 // Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL"         =>  "N",                 // Скрывать ссылку, если нет детального описания
		"PARENT_SECTION"                   =>  "",                  // ID раздела
		"PARENT_SECTION_CODE"              =>  "",                  // Код раздела
		"INCLUDE_SUBSECTIONS"              =>  "Y",                 // Показывать элементы подразделов раздела
		// endregion
		// region Настройки постраничной навигации
		"PAGER_TEMPLATE"                   =>  ".default",          // Шаблон постраничной навигации : array ( '.default' => '.default (Встроенный шаблон)', 'arrows_adm' => 'arrows_adm (Встроенный шаблон)', 'modern' => 'modern (Встроенный шаблон)', 'orange' => 'orange (Встроенный шаблон)', 'visual' => 'visual (Встроенный шаблон)', 'blog' => 'blog (Общий шаблон)', 'forum' => 'forum (Общий шаблон)', 'arrows' => 'arrows (Новый адаптивный шаблон интернет-магазина)', )
		"DISPLAY_TOP_PAGER"                =>  "N",                 // Выводить над списком
		"DISPLAY_BOTTOM_PAGER"             =>  "Y",                 // Выводить под списком
		"PAGER_TITLE"                      =>  "Новости",           // Название категорий
		"PAGER_SHOW_ALWAYS"                =>  "N",                 // Выводить всегда
		"PAGER_DESC_NUMBERING"             =>  "N",                 // Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME"  =>  "36000",             // Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL"                   =>  "N",                 // Показывать ссылку 'Все'
		// endregion
	)
);
?>
<h2 class="section-title" style="margin-bottom: 16px">
	<b>Создание бренда и сотрудничество с </b><b>QUARTA</b><b>.</b>
</h2>
<p>
	История бренда ShotTime началась в 2017 году. Основатель бренда, опытный охотник и стрелок, решил создать компанию, которая будет производить высококачественные, но в то же время недорогие, товары для любителей стрельбы и охоты. Он хотел, чтобы стрелковый спорт в нашей стране стал доступен каждому желающему.<br>
	 Компания ShotTime начала с производства активных стрелковых наушников и охотничьих засидок. Постепенно ассортимент выпускаемой продукции расширялся.
</p>
<p>
	В настоящий момент к наушникам и засидкам добавились стрелковые защитные очки и маски, разнообразный оружейный тюнинг, аксессуары для чистки и пристрелки оружия.
</p>
<p>
	Сегодня бренд ShotTime известен своими качественными продуктами, которые обеспечивают комфорт, безопасность и результативность на стрельбище и охоте. Благодаря своей репутации и качеству товаров, ShotTime завоевал признание охотников и стрелков и продолжает развиваться, предлагая новые продукты и решения для своих клиентов.
</p>
<p>
	Компания Quarta является эксклюзивным поставщиком продукции ShotTime в России.
</p>
<h2 class="section-title" style="margin-bottom: 16px; margin-top: 16px">
	<b>Почему стоит заказать у нас?</b>
</h2>
<ul class="customers__list section-list">
	<li class="section-list__item" >
		Быстрая доставка и гарантия возврата в кратчайшие сроки. Мы давно на рынке и заботимся о наших клиентах.
	</li>
	<li class="section-list__item">
		Все товары полностью соответсвуют описанию. Смотрите обзоры и читайте реальные отзывы на нашем сайте, YouTube, Ozon, Яндекс и Wildberries.
	</li>
	<li class="section-list__item">
		Наши менеджеры готовы проконсультировать вас в любое удобное время. Мы поможем сделать выбор, расскажем о всех достоинствах и преимуществах, как оформить заказ и получить посылку.
	</li>
</ul>
<h2 class="section-title" style="margin-bottom: 16px; margin-top: 16px">
	<b>QUARTA</b><b> и </b><b>ShotTime</b><b> гарантируют качество.</b>
</h2>
<p>
	<span style="background: #f9f9f9;">Благодаря высококачественным материалам, отлаженному технологическому процессу и постоянному взаимодействию между компанией QUARTA и производителем, активные наушники и стрелковые очки </span>ShotTime<span style="background: #f9f9f9;"> достигли лучшего на сегодняшний день соотношения цены и качества. При отгрузке вся продукция тщательно упаковывается, а при поступлении на склад каждая партия очков и наушников проходит строгий контроль: испытания на надёжность и соответствие требуемым характеристикам, а также проверку на полную комплектацию. Постоянная обратная связь между покупателями, продавцами и производителем позволяет работать над улучшением качества продукции. QUARTA и </span>ShotTime<span style="background: #f9f9f9;"> дают гарантию на все изделия, вне зависимости от линейки. Подробности по гарантии — в карточках товаров. Вы можете легко обменять не подошедший товар, купленный онлайн или в нашем розничном магазине.</span>
</p>
<br>
<div class="customers__characteristics">
	<div class="characteristic-card">
 <span class="lt-plus">
		<? Image::showSVG( 'plus' ) ?> </span> <span class="rt-plus">
		<? Image::showSVG( 'plus' ) ?> </span> <span class="lb-plus">
		<? Image::showSVG( 'plus' ) ?> </span> <span class="rb-plus">
		<? Image::showSVG( 'plus' ) ?> </span>
		<h3 class="characteristic-card__title"> НАДЁЖНАЯ ЗАЩИТА </h3>
		<p class="characteristic-card__text">
			 Ваши глаза и уши под надёжной защитой
		</p>
	</div>
	<div class="characteristic-card">
 <span class="lt-plus">
		<? Image::showSVG( 'plus' ) ?> </span> <span class="rt-plus">
		<? Image::showSVG( 'plus' ) ?> </span> <span class="lb-plus">
		<? Image::showSVG( 'plus' ) ?> </span> <span class="rb-plus">
		<? Image::showSVG( 'plus' ) ?> </span>
		<h3 class="characteristic-card__title"> ВЫГОДНЫЕ ЦЕНЫ </h3>
		<p class="characteristic-card__text">
			 Самые доступные стрелковые очки и наушники в России
		</p>
	</div>
	<div class="characteristic-card">
 <span class="lt-plus">
		<? Image::showSVG( 'plus' ) ?> </span> <span class="rt-plus">
		<? Image::showSVG( 'plus' ) ?> </span> <span class="lb-plus">
		<? Image::showSVG( 'plus' ) ?> </span> <span class="rb-plus">
		<? Image::showSVG( 'plus' ) ?> </span>
		<h3 class="characteristic-card__title"> ВЫСОКОЕ КАЧЕСТВО </h3>
		<p class="characteristic-card__text">
			 Качественные материалы и прочные конструкции
		</p>
	</div>
	<div class="characteristic-card">
 <span class="lt-plus">
		<? Image::showSVG( 'plus' ) ?> </span> <span class="rt-plus">
		<? Image::showSVG( 'plus' ) ?> </span> <span class="lb-plus">
		<? Image::showSVG( 'plus' ) ?> </span> <span class="rb-plus">
		<? Image::showSVG( 'plus' ) ?> </span>
		<h3 class="characteristic-card__title"> УДОБНАЯ ДОСТАВКА </h3>
		<p class="characteristic-card__text">
			 Доставка в любой регион России в течение 5 дней
		</p>
	</div>
</div>
<?/*
<div class="products lg-none">
	<div class="products__card">
	</div>
	<div class="products__card">
	</div>
	<div class="products__card">
	</div>
	<div class="products__card">
	</div>
	<div class="products__card">
	</div>
	<div class="products__card">
	</div>
	<div class="products__card">
	</div>
	<div class="products__card">
	</div>
</div>
*/?>
<? require( $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php" ); ?>