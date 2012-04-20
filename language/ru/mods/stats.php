<?php
/**
*
* @package phpBB Statistics
* @version $Id: stats.php 45 2009-06-12 15:08:48Z marc1706 $
* @copyright (c) 2009 Marc Alexander(marc1706) www.m-a-styles.de, (c) TheUniqueTiger - Nayan Ghosh
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @based on: Forum Statistics by TheUniqueTiger - Nayan Ghosh
* @translator: Kastaneda — http://www.teosofia.ru
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'STATS'								=> 'Статистика конференции',
	'STATS_EXPLAIN'						=> 'Расширенная статистика конференции',
	'STATS_BASIC'						=> 'Общая статистика',
	'STATS_BASIC_BASIC'					=> 'Общая статистика',
	'STATS_BASIC_ADVANCED'				=> 'Расширенная статистика',
	'STATS_BASIC_MISCELLANEOUS'			=> 'Прочая статистика',
	'STATS_ACTIVITY'					=> 'Активность',
	'STATS_ACTIVITY_FORUMS'				=> 'Статистика форумов',
	'STATS_ACTIVITY_TOPICS'				=> 'Статистика тем',
	'STATS_ACTIVITY_USERS'				=> 'Статистика участников',
	'STATS_CONTRIBUTIONS'				=> 'Наполнение',
	'STATS_CONTRIBUTIONS_ATTACHMENTS'	=> 'Статистика вложений',
	'STATS_CONTRIBUTIONS_POLLS'			=> 'Статистика опросов',
	'STATS_PERIODIC'					=> 'Периодика',
	'STATS_PERIODIC_DAILY'				=> 'Ежедневная статистика',
	'STATS_PERIODIC_MONTHLY'			=> 'Ежемесячная статистика',
	'STATS_PERIODIC_HOURLY'				=> 'Ежечасная статистика',
	'STATS_SETTINGS'					=> 'Настройки',
	'STATS_SETTINGS_BOARD'				=> 'Настройки конференции',
	'STATS_SETTINGS_PROFILE'			=> 'Личные настройки',
	'STATS_ADDONS'						=> 'Дополнения',
	'STATS_ADDONS_MISCELLANEOUS'		=> 'hide',	
	'STATS_DISABLED'					=> ' в настоящее время отключена',

	'TOTALS'							=> 'Общие',
	'OVERALL'							=> 'Общие данные',
	'NONE'								=> 'Нет',
	'LIMIT_PROMPT'						=> '%s для отображения',
	'GB'								=> 'Гбайт',
	'AS_ON'								=> '%s',
	'DAMAGED_ADDON'						=> 'The Add-On %1$s is damaged. The following variables do not exist: %2$s. Please contact the author of the Add-On.',
	'ADDON_DISABLED'					=> 'The add-on you selected is currently disabled.<br /><br />',
	'ADDON_DISABLED_TITLE'				=> 'Add-On disabled',
	'NO_ADDONS'							=> 'There are currently no add-ons installed.<br /><br />',
	'NO_ADDONS_TITLE'					=> 'No installed Add-Ons',
	
	//basic stats
	'TOTAL_POSTS'						=> 'Всего сообщений',
	'TOTAL_TOPICS'						=> 'Всего тем',
	'TOTAL_USERS'						=> 'Всего пользователей',
	'TOTAL_FORUM_CAT'					=> 'Всего категорий',
	'TOTAL_FORUM_POST'					=> 'Всего форумов',
	'TOTAL_FORUM_LINK'					=> 'Всего ссылок',
	'TOTAL_FORUMS'						=> 'Всего форумов и категорий',
	'FORUMS'							=> 'Форумы',
	'TOTAL_ATTACHMENTS'					=> 'Всего вложений',
	'TOTAL_POLLS'						=> 'Всего опросов',
	'TOTAL_VIEWS'						=> 'Просмотры тем',
	'TOPICS'							=> 'Темы',
	'TOPICS_GLOBAL'						=> 'Важные объявления',
	'TOPICS_ANNOUNCE'					=> 'Объявления',
	'TOPICS_STICKY'						=> 'Прикреплённые темы',
	'TOPICS_NORMAL'						=> 'Обычные темы',
	'TOPICS_UNAPPROVED'					=> 'Неутверждённые темы',
	'UNAPPROVED_POSTS'					=> 'Неутверждённые сообщения',
	'USERS'								=> 'Пользователи',
	'USERS_INACTIVE'					=> 'Неактивные пользователи',
	'USERS_INACTIVE_EXPLAIN'			=> 'пользователи, не заходившие ни разу за последние %d дней',
	'USERS_ACTIVE'						=> 'Активные пользователи',
	'USERS_ACTIVE_EXPLAIN'				=> 'пользователи, заходившие хотя бы один раз за %d дней',
	'USERS_TOTAL_BOTS'					=> 'Зарегистрированные боты',
	'USERS_VISITED_BOTS'				=> 'Посетившие боты',
	'AVG_FILES_DAY'						=> 'Вложений в день',
	'AVERAGES'							=> 'Усреднённые данные',
	//advanced stats
	'BOARD_BACKGROUND'					=> 'Конференция',
	'START_DATE'						=> 'Запуск конференции',
	'BOARD_AGE'							=> 'Возраст конференции',
	'SECOND'							=> 'секунда',
	'SECONDS'							=> 'секунд',
	'MINUTE'							=> 'минута',
	'MINUTES'							=> 'минут',
	'HOUR'								=> 'час',
	'HOURS'								=> 'часов',
	'DAY'								=> 'день',
	'DAYS'								=> 'дней',
	'MONTH'								=> 'месяц',
	'MONTHS'							=> 'месяцев',
	'YEAR'								=> 'год',
	'YEARS'								=> 'лет',
	'BOARD_VERSION'						=> 'Версия phpBB',
	'GZIP_COMPRESSION'					=> 'Сжатие GZip',
	'ON'								=> 'Включено',
	'OFF'								=> 'Отключено',
	'DATABASE'							=> 'База данных',
	'DATABASE_SIZE'						=> 'Размер базы данных',
	'DATABASE_INFO'						=> 'Сведения о базе данных',
	'FILESYSTEM'						=> 'Файловая система',
	'ATTACHMENTS_TOTAL'					=> 'Всего вложений',
	'ATTACHMENTS_SIZE'					=> 'Общий размер вложений',
	'AVATARS_TOTAL'						=> 'Всего аватар',
	'AVATARS_SIZE'						=> 'Общий размер аватар',
	'CACHED_FILES_TOTAL'				=> 'Кэшированных файлов',
	'CACHED_FILES_SIZE'					=> 'Общий размер кэша',
	'INSTALLED_COMPONENTS'				=> 'Установленные компоненты',
	'STYLES'							=> 'Стили',
	'IMAGESETS'							=> 'Наборы рисунков',
	'TEMPLATES'							=> 'Шаблоны',
	'THEMES'							=> 'Темы',
	'LANG_PACKS'						=> 'Языковые пакеты',
	'BY'								=> 'Разработчик:',
	'BOARD_VERSION_SECURE'				=> '3.x.x',
	'SORT_BY_PROMPT'					=> 'Сортировать информацию об установленных компонентах по',

	// miscellaneous stats
	'SMILEY'							=> 'Смайлики',
	'SMILEY_COUNT'						=> 'Установленно смайликов',
	'SMILEY_POST_COUNT'					=> 'Смайликов в форме ответа',
	'TOP_SMILIES_BY_URL'				=> 'Лучшая %d смайликов',
	'TOP_BBCODES'						=> 'Лучшая %d BBCodes',
	'TOP_ICONS'							=> 'Лучшая %d значков',
	'WARNING_COUNT'						=> 'Всего предупреждений',
	'OWN_WARNINGS_COUNT'				=> 'Ваших предупреждений',
	'WARNINGS_PER_USER'					=> 'Предупреждений на пользователя',
	'WARNINGS_PER_DAY'					=> 'Предупреждений в день',
	'BBCODE'							=> 'BBCodes',
	'BBCODE_COUNT'						=> 'Всего BBCodes',
	'BBCODE_COUNT_CUSTOM'				=> 'Настраиваемых BBCodes',
	'ICONS'								=> 'Значки',
	'COMPONENTS_NAME'					=> 'Именам',
	'COMPONENTS_ID'						=> 'Идентификаторам',
	'COMPONENTS_AUTHOR'					=> 'Авторам',

	//activity - forums
	'COUNT'								=> 'Число',
	'PERCENT'							=> 'Процент',
	'TOP_FORUMS_BY_TOPICS'				=> 'Самые активные %d форумов (по темам)',
	'TOP_FORUMS_BY_POSTS'				=> 'Самые активные %d форумов (по сообщениям)',
	'TOP_FORUMS_BY_POLLS'				=> 'Самые активные %d форумов (по опросам)',
	'TOP_FORUMS_BY_STICKY'				=> 'Самые активные %d форумов (по прикреплённым темам)',
	'TOP_FORUMS_BY_VIEWS'				=> 'Самые активные %d форумов (по просмотрам)',
	'TOP_FORUMS_BY_PARTICIPATION'		=> 'Самые активные %d форумов (по участию пользователей)',
	'TOP_FORUMS_BY_SUBSCRIPTIONS'		=> 'Самые активные %d форумов (по подпискам)',
	//activity - topics
	'TOP_TOPICS_BY_POSTS'				=> 'Самые активные %d тем (по сообщениям)',
	'TOP_TOPICS_BY_POSTS_PCT_EXPLAIN'	=> 'Показанный процент — это процент от сообщений в этой теме к общему количеству сообщений.',
	'TOP_TOPICS_BY_POSTS_BAR_EXPLAIN'	=> 'Показанная полоса — это для сравнения с темой с наибольшим количеством сообщений.',
	'TOP_TOPICS_BY_VIEWS'				=> 'Самые активные %d тем (по просмотрам)',
	'TOP_TOPICS_BY_VIEWS_PCT_EXPLAIN'	=> 'Показанный процент — это процент от просмотров темы по сравнению с общим количеством просмотров темы.',
	'TOP_TOPICS_BY_PARTICIPATION'		=> 'Самые активные %d тем (по участию пользователей)',
	'TOP_TOPICS_BY_ATTACHMENTS'			=> 'Самые активные %d тем (по вложениям)',
	'TOP_TOPICS_BY_BOOKMARKS'			=> 'Самые активные %d тем (по закладкам)',
	'TOP_TOPICS_BY_SUBSCRIPTIONS'		=> 'Самые активные %d тем (по подпискам)',
	//activity - users
	'MEMBERS'							=> 'Участники',
	'TOTAL_MEMBERS'						=> 'Всего пользователей',
	'TOTAL_REG_USERS'					=> 'Зарегистрированных',
	'MOST_ONLINE'						=> 'Рекорд посетителей',
	'INCLUDING_BOTS'					=> 'вместе с ботами',
	'TOTAL_ONLINE'						=> 'Всего посетителей',
	'ONLINE_ON'							=> '',
	'TOTAL_HIDDEN'						=> 'Скрытых пользователей',
	'TOTAL_MEMBERS_ONLINE'				=> 'Всего участников',
	'TOP_USERS_BY_POSTS'				=> 'Самые активные %d пользователей (по сообщениям)',
	'TOP_USERS_BY_TOPICS'				=> 'Самые активные %d пользователей (по темам)',
	'TOP_FRIENDS'						=> 'Лучшая %d друзей',
	'TOP_FOES'							=> 'Лучшая %d недругов',
	'TOP_USERS_BY_RECENT_POSTS'			=> 'Самые активные %1$d пользователей (по последним сообщениям за последние %2$d дней)',
	'RECENT_POSTS_DAYS_LIMIT_PROMPT'	=> 'Число дней для подсчёта последних сообщений',
	'WHO_IS_ONLINE_EXPLAIN'				=> '(основано на активности посетителей за последние %d минут)',
	'RANKS_POSTS'						=> 'Звания (не специальные звания, основанные на количестве сообщений)',
	'RANKS'								=> 'Звания',
	'RANK_MIN_POSTS'					=> 'Число сообщений',
	'MEMBER_COUNT'						=> 'Число пользователей',
	'DELETED_USERS'						=> 'Удалённых пользователей',
	//contributions - attachments
	'ATTACHMENTS_ORPHAN'				=> 'Потерянных вложений',
	'ATTACHMENTS_ORPHAN_SIZE'			=> 'Размер потерянных вложений',
	'ATTACHMENTS_OR_USERS'				=> 'Вложения и пользователи',
	'RECENT_ATTACHMENTS'				=> 'Последние %d вложений',
	'ATTACH_ON'							=> '',
	'ATTACH_DETAILS'					=> 'Подробности',
	'TOP_ATTACHMENTS_BY_FILETYPE'		=> 'Самые популярные %d типов вложений (по расширению файлов)',
	'ATTACHMENT_FILETYPES'				=> 'Типы файлов вложений',
	'TOP_ATTACHMENTS_BY_FILESIZE'		=> 'Самые популярные %d вложений (по размеру файла)',
	'TOP_ATTACHMENTS_BY_DOWNLOAD'		=> 'Самые популярные %d вложений (по количество загрузок)',
	'FILESIZE'							=> 'Размер файла',
	'TOP_USERS_BY_ATTACHMENTS'			=> 'Самые активные %d пользователей (по вложениям)',
	'TOTAL_DOWNLOADS'					=> 'Всего загрузок файлов',
	'TOTAL_DOWNLOADS_SIZE'				=> 'Общий размер загрузок',
	//contributions - polls
	'TOTAL_OPEN_POLLS'					=> 'Всего открытых опросов',
	'TOTAL_POLL_VOTES'					=> 'Всего голосов',
	'RECENT_POLLS'						=> 'Последние %d опросов',
	'POLLS'								=> 'Опросы',
	'TOP_POLLS_BY_VOTES'				=> 'Самые популярные %d опросов (по голосам)',
	'TOTAL_POLLS_VOTED'					=> 'Всего опросов, в которых вы голосовали',
	'TOTAL_ACCESSIBLE_POLLS'			=> 'Всего доступных опросов',
	//periodic - daily, monthly
	'JANUARY'							=> 'Январь',
	'FEBRUARY'							=> 'Февраль',
	'MARCH'								=> 'Март',
	'APRIL'								=> 'Апрель',
	'MAY'								=> 'Май',
	'JUNE'								=> 'Июнь',
	'JULY'								=> 'Июль',
	'AUGUST'							=> 'Август',
	'SEPTEMBER'							=> 'Сентябрь',
	'OCTOBER'							=> 'Октябрь',
	'NOVEMBER'							=> 'Ноябрь',
	'DECEMBER'							=> 'Декабрь',
	'PERIODIC_DAY'						=> 'День',
	'PERIODIC_MONTH'					=> 'Месяц',
	'AVG_POSTS_DAY'						=> 'Сообщений в день',
	'AVG_TOPICS_DAY'					=> 'Тем в день',
	'AVG_USER_REGS_DAY'					=> 'Регистраций в день',
	'AVG_POSTS_MONTH'					=> 'Среднее число сообщений в месяц',
	'AVG_TOPICS_MONTH'					=> 'Среднее число тем в месяц',
	'AVG_USER_REGS_MONTH'				=> 'Среднее число регистраций в месяц',
	'TOTAL_USER_REGS'					=> 'Всего регистраций',
	'STATS_MONTH_EXPLAIN'				=> 'Ниже отображена статистика за <strong>%s</strong>',
	'STATS_YEAR_EXPLAIN'				=> 'Ниже отображена статистика за <strong>%s</strong> год',
	'USER_REGS'							=> 'Регистрации',
	'SHOW_STATS_FOR_MONTH'				=> 'Показать статистику за месяц',
	'SHOW_STATS_FOR_YEAR'				=> 'Показать статистику за год',
	'ALL'								=> 'Все',
	//periodic- hourly
	'SELECT_TIME_PERIOD'				=> 'Выберите период времени',
	'PERCENT_OF_TOTAL'					=> '%% от общего числа %s',
	'PERIODIC_HOUR'						=> 'Час',
	'HOURLY_STATS_EXPLAIN'				=> 'Ниже отображена статистика за <strong>%s</strong>',
	//settings - board
	'OVERRIDE_STYLE_EXPLAIN'			=> 'Администраторы конференции установили принудительное изменение стиля пользователя на стиль по умолчанию.',
	'DEFAULT_STYLE_EXPLAIN'				=> 'Стиль по умолчанию — <strong>%1$s (%2$s)</strong>, и используется он всем пользователями (вместе с ботами).',
	'STYLE'								=> 'Стиль',
	'USERS_INCL_BOTS'					=> 'Пользователи, использующие этот стиль (с ботами)',
	'LANGUAGES_BY_USERS'				=> 'Языки (пользователи с этим языком)',
	'LANGUAGE'							=> 'Язык',
	'TIMEZONES_BY_USERS'				=> 'Часовые пояса (пользователи с этим часовым поясом)',
	'TIMEZONE'							=> 'Часовой пояс',
	'LEGEND_BOLD_ITALIC'				=> 'Элемент, выделенный полужирным шрифтом, является наибольшим в группе. Элемент, выделенный курсивным шрифтом, указывает на группу, в которую входите вы.',
	'SINGLE_LANG_EXPLAIN'				=> 'На конференции установлен один языковой пакет, который используется всеми пользователями.',
	'DEFAULT_LANG_EXPLAIN'				=> 'Языковой пакет по умолчанию — <strong>%1$s (%2$s)</strong>.',
	//settings - profile
	'AGE_RANGES'						=> 'Диапазоны возрастов',
	'AGE_RANGE'							=> 'Возрастной диапазон',
	'SEL_AGE_INTERVAL_PROMPT'			=> 'Выберите возрастной диапазон',
	'USERS_WITH_BIRTHDAY'				=> 'Пользователи, указавшие день рождения',
	'USERS_WITH_LOCATION'				=> 'Пользователи, указавшие город',
	'USER_LOCATIONS'					=> 'Города',
	'TOP_USER_LOCATIONS'				=> 'Самые популярные %d городов',
	'CUSTOM_PROFILE_FIELD'				=> 'Дополнительное поле в профиле',
	'CPF_TOP_X'							=> 'Top %1$d %2$s',
	'TOTAL_VALUES_SET_PROMPT'			=> 'Пользователи, установившие %s',
	'DEFAULT'							=> 'по умолчанию',

	// viewonline
	'VIEWING_STATS'						=> 'Просмотр статистики конференции',

));
?>