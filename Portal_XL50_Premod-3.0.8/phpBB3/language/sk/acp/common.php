<?php
/**
*
* acp common [Slovak]
*
* @package language
* @version $Id: common.php,v 1.120 2010/01/05 23:00:00 phpbb3.sk Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administrátori',
	'ACP_ADMIN_LOGS'			=> 'Administračný log',
	'ACP_ADMIN_ROLES'			=> 'Administrátorské role',
	'ACP_ATTACHMENTS'			=> 'Prílohy',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Nastavenie príloh',
	'ACP_AUTH_SETTINGS'			=> 'Autentifikácia',
	'ACP_AUTOMATION'			=> 'Automatizácia',
	'ACP_AVATAR_SETTINGS'		=> 'Nastavenie avatarov',

	'ACP_BACKUP'				=> 'Záloha',
	'ACP_BAN'					=> 'Banovanie',
	'ACP_BAN_EMAILS'			=> 'Ban e-mailových adries',
	'ACP_BAN_IPS'				=> 'Ban IP adries',
	'ACP_BAN_USERNAMES'			=> 'Ban užívateľských mien',
	'ACP_BBCODES'				=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Konfigurácia fóra',
	'ACP_BOARD_FEATURES'		=> 'Funkcie fóra',
	'ACP_BOARD_MANAGEMENT'		=> 'Správa fóra',
	'ACP_BOARD_SETTINGS'		=> 'Nastavenie fóra',
	'ACP_BOTS'					=> 'Boti/vyhľadávače',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Databáza',
	'ACP_CAT_DOT_MODS'			=> '.Módy',
	'ACP_CAT_FORUMS'			=> 'Fóra',
	'ACP_CAT_GENERAL'			=> 'Všeobecné',
	'ACP_CAT_MAINTENANCE'		=> 'Správa',
	'ACP_CAT_PERMISSIONS'		=> 'Oprávnenia',
	'ACP_CAT_POSTING'			=> 'Prispievanie',
	'ACP_CAT_STYLES'			=> 'Štýly',
	'ACP_CAT_SYSTEM'			=> 'Systém',
	'ACP_CAT_USERGROUP'			=> 'Užívatelia a skupiny',
	'ACP_CAT_USERS'				=> 'Užívatelia',
	'ACP_CLIENT_COMMUNICATION'	=> 'Komunikácia klientov',
	'ACP_COOKIE_SETTINGS'		=> 'Nastavenie cookies',
	'ACP_CRITICAL_LOGS'			=> 'Log chýb',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Vlastné pole v profile',

	'ACP_DATABASE'				=> 'Správa databázy',
	'ACP_DISALLOW'				=> 'Zakázať',
	'ACP_DISALLOW_USERNAMES'	=> 'Zakázať užívateľské mená',

	'ACP_EMAIL_SETTINGS'		=> 'Nastavenie e-mailov',
	'ACP_EXTENSION_GROUPS'		=> 'Spravovať skupiny typov súborov',
	
	'ACP_FEED'					=> 'Exporty ATOM',
	'ACP_FEED_SETTINGS'			=> 'Nastavenie exportov',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Oprávnenia založená na fórach',
	'ACP_FORUM_LOGS'				=> 'Log fór',
	'ACP_FORUM_MANAGEMENT'			=> 'Správa fór',
	'ACP_FORUM_MODERATORS'			=> 'Moderátori fór',
	'ACP_FORUM_PERMISSIONS'			=> 'Oprávnenie fór',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Kopírovať oprávnenie fóra',
	'ACP_FORUM_ROLES'				=> 'Rola fór',

	'ACP_GENERAL_CONFIGURATION'		=> 'Všeobecná konfigurácia',
	'ACP_GENERAL_TASKS'				=> 'Bežné úlohy',
	'ACP_GLOBAL_MODERATORS'			=> 'Globálni moderátori',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Globálne oprávnenia',
	'ACP_GROUPS'					=> 'Skupiny',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Skupinové oprávnenia fór',
	'ACP_GROUPS_MANAGE'				=> 'Spravovať skupiny',
	'ACP_GROUPS_MANAGEMENT'			=> 'Správa skupiny',
	'ACP_GROUPS_PERMISSIONS'		=> 'Oprávnenie skupín',

	'ACP_ICONS'					=> 'Ikony tém',
	'ACP_ICONS_SMILIES'			=> 'Ikony tém/smajlíky',
	'ACP_IMAGESETS'				=> 'Sady obrázkov',
	'ACP_INACTIVE_USERS'		=> 'Neaktívni užívatelia',
	'ACP_INDEX'					=> 'Obsah administrácie',

	'ACP_JABBER_SETTINGS'		=> 'Nastavenie Jabbera',

	'ACP_LANGUAGE'				=> 'Správa jazykov',
	'ACP_LANGUAGE_PACKS'		=> 'Jazykové balíky',
	'ACP_LOAD_SETTINGS'			=> 'Nastavenie zaťaženia',
	'ACP_LOGGING'				=> 'Zaznamenávam',

	'ACP_MAIN'					=> 'Obsah administrácie',
	'ACP_MANAGE_EXTENSIONS'		=> 'Spravovať typy súborov',
	'ACP_MANAGE_FORUMS'			=> 'Spravovať fóra',
	'ACP_MANAGE_RANKS'			=> 'Spravovať hodnosti',
	'ACP_MANAGE_REASONS'		=> 'Spravovať dôvody hlásení/zamietnutí',
	'ACP_MANAGE_USERS'			=> 'Spravovať užívateľov',
	'ACP_MASS_EMAIL'			=> 'Hromadný e-mail',
	'ACP_MESSAGES'				=> 'Správy',
	'ACP_MESSAGE_SETTINGS'		=> 'Nastavenie súkromných správ',
	'ACP_MODULE_MANAGEMENT'		=> 'Správa modulov',
	'ACP_MOD_LOGS'				=> 'Moderátorský log',
	'ACP_MOD_ROLES'				=> 'Moderátorské role',
  'ACP_NO_ITEMS'				=> 'Nie su tu žiadne predmety.',
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Nepripojené prílohy',

	'ACP_PERMISSIONS'			=> 'Oprávnenia',
	'ACP_PERMISSION_MASKS'		=> 'Masky oprávnení',
	'ACP_PERMISSION_ROLES'		=> 'Role oprávnení',
	'ACP_PERMISSION_TRACE'		=> 'Sledovanie oprávnení',
	'ACP_PHP_INFO'				=> 'Informácie o PHP',
	'ACP_POST_SETTINGS'			=> 'Nastavenie príspevkov',
	'ACP_PRUNE_FORUMS'			=> 'Prečistiť fóra',
	'ACP_PRUNE_USERS'			=> 'Prečistiť užívateľov',
	'ACP_PRUNING'				=> 'Prečisťovanie',

	'ACP_QUICK_ACCESS'			=> 'Rýchly prístup',

	'ACP_RANKS'					=> 'Hodnosti',
	'ACP_REASONS'				=> 'Dôvody schválení/zamietnutí',
	'ACP_REGISTER_SETTINGS'		=> 'Nastavenie registrácie užívateľov',

	'ACP_RESTORE'				=> 'Obnoviť',

	'ACP_SEARCH'				=> 'Nastavenie hľadania',
	'ACP_SEARCH_INDEX'			=> 'Vyhľadávací index',
	'ACP_SEARCH_SETTINGS'		=> 'Nastavenie vyhľadávania',

	'ACP_SECURITY_SETTINGS'		=> 'Nastavenie zabezpečenia',
	'ACP_SEND_STATISTICS'		=> 'Odoslať štatistickú správu',
	'ACP_SERVER_CONFIGURATION'	=> 'Konfigurácia servera',
	'ACP_SERVER_SETTINGS'		=> 'Nastavenie servera',
	'ACP_SIGNATURE_SETTINGS'	=> 'Nastavenie podpisov',
	'ACP_SMILIES'				=> 'Smajlíky',
	'ACP_STYLE_COMPONENTS'		=> 'Komponenty štýlov',
	'ACP_STYLE_MANAGEMENT'		=> 'Správa štýlov',
	'ACP_STYLES'				=> 'Štýly',
	
	'ACP_SUBMIT_CHANGES'		=> 'Odoslať zmeny',

	'ACP_TEMPLATES'				=> 'Templaty',
	'ACP_THEMES'				=> 'Skiny',

	'ACP_UPDATE'					=> 'Aktualizujem',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Užívateľské oprávnenia fór',
	'ACP_USERS_LOGS'				=> 'Užívateľský log',
	'ACP_USERS_PERMISSIONS'			=> 'Oprávnenie užívateľov',
	'ACP_USER_ATTACH'				=> 'Prílohy',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Spätná väzba',
	'ACP_USER_GROUPS'				=> 'Skupiny',
	'ACP_USER_MANAGEMENT'			=> 'Správa užívateľov',
	'ACP_USER_OVERVIEW'				=> 'Prehľad',
	'ACP_USER_PERM'					=> 'Oprávnenie',
	'ACP_USER_PREFS'				=> 'Nastavenie',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Hodnosť',
	'ACP_USER_ROLES'				=> 'Užívateľské role',
	'ACP_USER_SECURITY'				=> 'Bezpečnosť užívateľa',
	'ACP_USER_SIG'					=> 'Podpis',
  'ACP_USER_WARNINGS' => 'Varovania',

	'ACP_VC_SETTINGS'					=> 'Ochrana proti Spambotom',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Náhľad obrázku CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Skontrolovať aktualizácie',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Zobraziť administračné oprávnenia',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Zobraziť oprávnenia moderovania fór',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Zobraziť oprávnenia založené na fórach',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Zobraziť globálne moderovacie oprávnenia',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Zobraziť oprávnenia založené na užívateľoch',

	'ACP_WORDS'					=> 'Cenzúra slov',

	'ACTION'				=> 'Akcia',
	'ACTIONS'				=> 'Akcie',
	'ACTIVATE'				=> 'Aktivovať',
	'ADD'					=> 'Pridať',
	'ADMIN'					=> 'Administrácia',
	'ADMIN_INDEX'			=> 'Obsah administrácie',
	'ADMIN_PANEL'			=> 'Administrácia fóra',
	
	'ADM_LOGOUT'			=> 'ACP&nbsp;Odhlásiť',
	'ADM_LOGGED_OUT'		=> 'Úspešne ste sa odhlásili z administračného kontrolného panela',

	'BACK'					=> 'Späť',

	'COLOUR_SWATCH'			=> 'Vzorník bezpečných farieb',
	'CONFIG_UPDATED'		=> 'Nastavenie bolo úspešne aktualizované.',

	'DEACTIVATE'				=> 'Deaktivovať',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Vložená cesta "%s" neexistuje.',
	'DIRECTORY_NOT_DIR'			=> 'Vložená cesta "%s" nie je zložka.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Vložená cesta "%s" nie je zapisovateľná.',
	'DISABLE'					=> 'Zakázať',
	'DOWNLOAD'					=> 'Stiahnuť',
	'DOWNLOAD_AS'				=> 'Stiahnuť ako',
	'DOWNLOAD_STORE'			=> 'Stiahnuť, alebo uložiť súbor',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Môžete priamo stiahnuť súbor, alebo ho uložiť vo svojej <samp>store/</samp> zložke.',

	'EDIT'					=> 'Upraviť',
	'ENABLE'				=> 'Povoliť',
	'EXPORT_DOWNLOAD'		=> 'Stiahnuť',
	'EXPORT_STORE'			=> 'Uložiť',

	'GENERAL_OPTIONS'		=> 'Všeobecné možnosti',
	'GENERAL_SETTINGS'		=> 'Všeobecné nastavenia',
	'GLOBAL_MASK'			=> 'Globálna maska oprávnení',

	'INSTALL'				=> 'Inštalovať',
	'IP'					=> 'IP adresa',
	'IP_HOSTNAME'			=> 'IP adresy, alebo názvy hostiteľov',

	'LOGGED_IN_AS'			=> 'Ste prihlásený ako:',
	'LOGIN_ADMIN'			=> 'Pre správu fóra musíte byť prihlásený a oprávnený užívateľ.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Pre správu fóra sa musíte znovu prihlásiť.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Úspešne ste sa prihlásili a teraz budete presmerovaný na Administráciu fóra',
	'LOOK_UP_FORUM'			=> 'Vyberte fórum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Môžete vybrať viac než jedno fórum',

	'MANAGE'				=> 'Spravovať',
	'MENU_TOGGLE'			=> 'Zobraziť, alebo skryť postranné menu',
	
	'MORE'					=> 'Viac',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Viac informácií »',
	
	'MOVE_DOWN'				=> 'Posunúť dolu',
	'MOVE_UP'				=> 'Posunúť hore',

	'NOTIFY'				=> 'Upozornenie',
	'NO_ADMIN'				=> 'Nemáte oprávnenie spravovať fórum.',
	'NO_EMAILS_DEFINED'		=> 'Nebola nájdená žiadna platná e-mailová adresa',
	'NO_PASSWORD_SUPPLIED'	=> 'Musíte zadať heslo pre prístup do administrácie fóra.',

	'OFF'					=> 'Vypnuté',
	'ON'					=> 'Zapnuté',

	'PARSE_BBCODE'						=> 'Spracovávať BBCode',
	'PARSE_SMILIES'						=> 'Spracovávať smajlíkov',
	'PARSE_URLS'						=> 'Spracovávať odkazy',
	'PERMISSIONS_TRANSFERRED'			=> 'Oprávnenia boli prenesené',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Teraz máte oprávnenia %1$s. Môžete prechádzať fórum s užívateľským oprávnením, ale nemôžete vstúpiť do administrácie fóra, pretože administrátorské oprávnenia neboli prenesené. Môžete sa kedykoľvek <a href="%2$s"><strong>vrátiť k vašim oprávneniam</strong></a>.',
	'PROCEED_TO_ACP'					=> '%sPokračovať na Administráciu fóra%s',

	'REMIND'							=> 'Pripomenúť',
	'RESYNC'							=> 'Znovu synchronizovať',
	'RETURN_TO'							=> 'Vrátiť sa na…',

	'SELECT_ANONYMOUS'		=> 'Vybrať anonymného užívateľa',
	'SELECT_OPTION'			=> 'Vybrať možnosť',
 	'SETTING_TOO_LOW'			=> 'Vložená hodnota pre nastavenie „%1$s“ je príliš malá. Minimálna povolená hodnota je %2$d.',
	'SETTING_TOO_BIG'			=> 'Vložená hodnota pre nastavenie „%1$s“ je príliš vysoká. Najväčšia povolená hodnota je %2$d.',
	'SETTING_TOO_LONG'		=> 'Vložená hodnota pre nastavenie „%1$s“ je príliš dlhá. Najväčšia povolená dĺžka je %2$d.',
	'SETTING_TOO_SHORT'		=> 'Vložená hodnota pre nastavenie „%1$s“ nieje dost dlhá. Minimálna povolená dĺžka je %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Ukázať všetky operácie',
	'UCP'					=> 'Užívateľský ovládací panel',
	'USERNAMES_EXPLAIN'		=> 'Vložte každé užívateľské meno na nový riadok',
	'USER_CONTROL_PANEL'	=> 'Užívateľský ovládací panel',

	'WARNING'				=> 'Upozornenie',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Tato stránka vypisuje informácie o verzii PHP inštalovanej na tomto serveri. Obsahuje detaily o načítaných moduloch, dostupných premenných a predvolených nastaveniach. Tieto informácie môžu byť užitočné pri riešení problémov. Berte na vedomie, že niektoré hostingy môžu z bezpečnostných dôvodov obmedzovať informácie, ktoré sa vám zobrazia. Odporúčame vám, aby ste nikde nezverejňovali zobrazené informácie. Zverejnite ich, iba ak sa na ne pýtajú <a href="http://www.phpbb.com/about/team/">tímoví členovia</a> na oficiálnych poradných fórach.',

	'NO_PHPINFO_AVAILABLE'	=> 'Nedajú sa zistiť informácie o PHP. Funkcia phpinfo() je vypnutá z bezpečnostných dôvodov.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Tento log vypisuje všetky činnosti administrátorov. Môžete ich zoradiť podľa mena, dátumu, IP, alebo akcie. Pokiaľ máte príslušné oprávnenia, môžete zmazať jednotlivé záznamy, alebo celý log.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Tu sú zobrazené všetky činnosti, ktoré spravilo fórum samo. Tento log vám poskytuje informácie, ktoré môžete použiť pre riešenie špecifických problémov, napr. nedoručovanie e-mailov. Môžete ich zoradiť podľa mena, dátumu, IP, alebo akcie. Pokiaľ máte príslušné oprávnenia, môžete zmazať jednotlivé záznamy, alebo celý log.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Tento log vypisuje všetky činnosti moderátorov, vyberte fórum z rozbaľovacieho menu. Môžete ich zoradiť podľa mena, dátumu, IP, alebo akcie. Pokiaľ máte príslušné oprávnenia, môžete zmazať jednotlivé záznamy, alebo celý log.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Toto vypisuje všetky činnosti uskutočnené užívateľovi, alebo na užívateľoch.',
	'ALL_ENTRIES'				=> 'Všetky záznamy',

	'DISPLAY_LOG'	=> 'Zobraziť záznamy za posledných',

	'NO_ENTRIES'	=> 'Žiadne záznamy pre toto obdobie',

	'SORT_IP'		=> 'IP adresa',
	'SORT_DATE'		=> 'Dátum',
	'SORT_ACTION'	=> 'Záznam',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Ďakujeme, že ste si zvolili phpBB ako riešenie pre vaše fórum. Táto obrazovka vám dá rýchly prehľad o rôznych štatistikách fóra. Odkazy na ľavej stránke obrazovky vám dovoľujú spravovať všetky aspekty vášho fóra. Každá stránka obsahuje inštrukcie k použitiu.',
	'ADMIN_LOG'					=> 'Záznam administrátorských činností',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Tu je prehľad posledných piatich akcií vykonaných administrátormi. Úplný záznam si môžete zobraziť zvolením odpovedajúcej položky v menu, alebo kliknutím na nižšie uvedený odkaz.',
	'AVATAR_DIR_SIZE'			=> 'Veľkosť zložky s avatarmi',

	'BOARD_STARTED'		=> 'Dátum spustenia',
	'BOARD_VERSION'     => 'Verzia fóra',

	'DATABASE_SERVER_INFO'	=> 'Databázový server',
	'DATABASE_SIZE'			=> 'Veľkosť databázy',

	'FILES_PER_DAY'		=> 'Príloh za deň',
	'FORUM_STATS'		=> 'Štatistiky fóra',

	'GZIP_COMPRESSION'	=> 'GZip kompresia',

	'NOT_AVAILABLE'		=> 'Nedostupné',
	'NUMBER_FILES'		=> 'Počet príloh',
	'NUMBER_POSTS'		=> 'Počet príspevkov',
	'NUMBER_TOPICS'		=> 'Počet tém',
	'NUMBER_USERS'		=> 'Počet užívateľov',
	'NUMBER_ORPHAN'		=> 'Nepripojených príloh',
	
	'PHP_VERSION_OLD'	=> 'Verzia PHP na vašom serveri už dlhšie nebude podporovaná budúcimi verziami phpBB. %sDetaily%s',

	'POSTS_PER_DAY'		=> 'Príspevkov za deň',

	'PURGE_CACHE'			=> 'Prečistiť cache',
	'PURGE_CACHE_CONFIRM'	=> 'Naozaj chcete prečistiť celú cache?',
	'PURGE_CACHE_EXPLAIN'	=> 'Prečistí všetky uložené súbory v cache ako napríklad šablóny, alebo dotazy.',
	
	'PURGE_SESSIONS'			=> 'Prečistiť všetky sessions',
	'PURGE_SESSIONS_CONFIRM'	=> 'Naozaj chcete zmazať všetky sessions? Zmazaním odhlásite všetkych užívateľov.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Odstráni všetky sessions a odhlási všetkych užívateľov prečistením ich databázovej tabuľky. Toto sa hodí pri nekontrolovanom náraste počtu sessions.',


	'RESET_DATE'			=> 'Resetovať dátum',
	'RESET_DATE_CONFIRM'			=> 'Naozaj chcete vynulovať dátum založenia fóra?',
	'RESET_ONLINE'			=> 'Resetovať rekord online užívateľov',
	'RESET_ONLINE_CONFIRM'			=> 'Naozaj chcete vynulovať rekord prítomných užívateľov?',
	'RESYNC_POSTCOUNTS'		=> 'Resynchronizovať počítadlá príspevkov',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Len existujúce príspevky budú brané do úvahy. Prečistené príspevky nebudú počítané.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Naozaj chcete synchronizovať počítadlá príspevkov?',
	'RESYNC_POST_MARKING'	=> 'Resynchronizovať označené témy',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Naozaj chcete resynchronizovať označené témy?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Najskôr odznačí všetky témy, a potom správne označí tie, v ktorých užívateľ vykázal aktivitu v posledných šiestich mesiacoch.',
	'RESYNC_STATS'			=> 'Resynchronizovať štatistiky',
	'RESYNC_STATS_CONFIRM'			=> 'Naozaj chcete resynchronizovať štatistiky?',
	'RESYNC_STATS_EXPLAIN'			=> 'Prepočíta celkový počet užívateľov, príspevkov, tém a príloh.',
	'RUN'							=> 'Spustiť teraz',

	'STATISTIC'			=> 'Štatistika',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Resynchronizovať, alebo vynulovať štatistiky',

	'TOPICS_PER_DAY'	=> 'Tém za deň',

	'UPLOAD_DIR_SIZE'	=> 'Veľkosť všetkých príloh',
	'USERS_PER_DAY'		=> 'Užívateľov za deň',

	'VALUE'					=> 'Hodnota',
	'VERSIONCHECK_FAIL'			=> 'Nepodarilo sa zistiť informácie o poslednej verzii.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Znovu zkontrolovať verziu',
	'VIEW_ADMIN_LOG'		=> 'Zobraziť administrátorský log',
	'VIEW_INACTIVE_USERS'	=> 'Zobraziť neaktívnych užívateľov',

	'WELCOME_PHPBB'			=> 'Vitajte v phpBB',
	'WRITABLE_CONFIG'		=> 'Do vášho konfiguračného súboru (config.php) je možné zapisovať. Odporúčame vám zmeniť atribúty (CHMOD) tohto súboru na 640 alebo na 644 (napríklad: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Dátum neaktivity',
	'INACTIVE_REASON'				=> 'Dôvod',
	'INACTIVE_REASON_MANUAL'		=> 'Účet deaktivovaný administrátorom',
	'INACTIVE_REASON_PROFILE'		=> 'Zmenené detaily v profile',
	'INACTIVE_REASON_REGISTER'		=> 'Nový registrovaný užívateľ',
	'INACTIVE_REASON_REMIND'		=> 'Nútená reaktivácia účtu',
	'INACTIVE_REASON_UNKNOWN'		=> 'Neznámy',
	'INACTIVE_USERS'				=> 'Neaktívni užívatelia',
	'INACTIVE_USERS_EXPLAIN'		=> 'Toto je zoznam užívateľov, ktorí sa registrovali, ale ich účty nie sú aktívne. Môžete aktivovať, zmazať, alebo upozorniť (odoslaním e-mailu) týchto užívateľov, pokiaľ chcete.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Toto je zoznam posledných 10 registrovaných užívateľov, ktorí majú neaktívne účty. Úplný zoznam je dostupný z odpovedajúcej položky v menu, alebo z odkazu pod miestom, kde môžete aktivovať, zmazať, alebo upozorniť (odoslaním e-mailu) týchto užívateľov.',

	'NO_INACTIVE_USERS'	=> 'Žiadny neaktívni užívatelia',

	'SORT_INACTIVE'		=> 'Dátum neaktivity',
	'SORT_LAST_VISIT'	=> 'Posledná návšteva',
	'SORT_REASON'		=> 'Dôvod',
	'SORT_REG_DATE'		=> 'Dátum registrácie',
	'SORT_LAST_REMINDER'=> 'Naposledy upozornený',
	'SORT_REMINDER'		=> 'Pripomenutie odoslané',

	'USER_IS_INACTIVE'		=> 'Užívateľ je neaktívny',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Budeme radi, keď na servery phpBB odošlite štatistické informácie o nastavení vášho servera a fóra. Všetky dáta, ktoré by mohli identifikovať vaše fórum alebo stránky boli odstránené, informácie sú úplne <strong> anonymné </strong>. Na základe zaslaných podrobností môžeme lepšie rozhodovať o budúcnosti a vývoji phpBB. Štatistiky budú zobrazené verejne a budú tiež zdieľané s vývojármi PHP, programovacím jazykom, v ktorom je phpBB napísané.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Kliknite na nasledujúce tlačítko pre zobrazenie náhľadu odoslaných informácií.',
	'DONT_SEND_STATISTICS'		=> 'Vráťte sa do administrácie, ak nechcete zaslať žiadne informácie.',
	'GO_ACP_MAIN'							=> 'Prejsť na hlavnú stránku administrácie',
	'HIDE_STATISTICS'					=> 'Skryť podrobnosti',
	'SEND_STATISTICS'					=> 'Odoslať informácie',
	'SHOW_STATISTICS'					=> 'Zobraziť podrobnosti',
	'THANKS_SEND_STATISTICS'	=> 'Ďakujeme za odoslanie informácií, budú využité k lepšiemu vývoju phpBB.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Pridané, alebo upravené užívateľské oprávnenie užívateľa</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Pridané, alebo upravené užívateľské oprávnenie skupiny</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Pridané, alebo upravené globálne moderátorské oprávnenie užívateľa</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Pridané, alebo upravené globálne moderátorské oprávnenie skupiny</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Pridané, alebo upravené administrátorské oprávnenie užívateľa</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Pridané, alebo upravené administrátorské oprávnenie skupiny</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Pridaní, alebo upravení Administrátori</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Pridaní, alebo upravení Globálni Moderátori</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Pridaný, alebo upravený prístup užívateľa k fóru</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Pridaný, alebo upravený prístup užívateľa k moderovaniu fóra</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Pridaný, alebo upravený prístup skupiny k fóru</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Pridaný, alebo upravený prístup skupiny k moderovaniu fóra</strong> od %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Pridaní, alebo upravení Moderátori</strong> od %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Pridané, alebo upravené oprávnenie k fóru</strong> od %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Odstránení Administrátori</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Odstránení Globálni Moderátori</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Odstránení Moderátori</strong> from %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Odstránené užívateľské/skupinové oprávnenie k fóru</strong> od %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Oprávnenia prenesené od</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Vlastné oprávnenie obnovené po používaní oprávnení od</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Neúspešný pokus o prihlásenie administrátora</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Úspešné prihlásenie do administrácie</strong>',

	'LOG_ATTACHMENTS_DELETED'   => '<strong>Zmazané prílohy užívateľov</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Pridané, alebo upravené koncovky príloh</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Odobraté koncovky príloh</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Aktualizácia koncoviek príloh</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Pridaná skupina typov súborov</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Upravená skupina typov súborov</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Odstránená skupina typov súborov</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Nepriradená príloha pripojená k príspevku</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Nepriradená príloha odstránená</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Odobratý užívateľ z banov</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Odobratá IP z banov</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Odobratý e-mail z banov</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Zabanovaný užívateľ</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>Zabanovaná IP</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Zabanovaný e-mail</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Užívateľ odbanovaný</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>IP odbanovaná</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>E-mail odbanovaný</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Pridaný nový BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Úprava BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Odstránenie BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Pridaný nový bot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Odstránený bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Aktualizácia existujúceho bota</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Vyprázdnenie administrátorského logu</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Vyprázdnenie chybového logu</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Vyprázdnenie moderátorského logu</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Vyprázdnenie užívateľského logu</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Vyprázdnenie užívateľských logov</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Zmena nastavenia príloh</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Zmena nastavenia autentifikácie</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Zmena nastavenia avatarov</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Zmena nastavenia cookies</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Zmena nastavenia e-mailov</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Zmena nastavenia funkcií fóra</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Zmena nastavenia zaťaženia servera</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Zmena nastavenia súkromných správ</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Zmena nastavenia príspevkov</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Zmena nastavenia registrácie</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Zmena nastavenia vyhľadávania</strong>',
	'LOG_CONFIG_FEED'				=> '<strong>Zmena nastavenia exportov ATOM</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Zmena nastavenia bezpečnosti</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Zmena nastavenia servera</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Zmena nastavenia fóra</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Zmena nastavenia podpisov</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Zmena nastavenia anti-spambot</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Schválená téma</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Užívateľom oživená téma</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Odstránený príspevok</strong><br />» %s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Odstránená tieňová téma</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Odstránená téma</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Skopírovaná téma</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Téma zamknutá</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Zamknutý príspevok</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Spojené príspevky</strong> v tému<br />» %s',
	'LOG_MOVE'					=> '<strong>Presunutá téma</strong><br />» z %1$s do %2$s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Uzavreté nahlásenie SS</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Odstranené nahlásenie SS</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Schválený príspevok</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Odmietnutý príspevok “%1$s” z nasledujúceho dôvodu</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Upravený príspevok “%1$s” od</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Uzavreté hlásenie</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Odstránené hlásenie</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Presunuté rozdelené príspevky</strong><br />» do %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Rozdelené príspevky</strong><br />» z %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Schválená téma</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Odmietnutá téma “%1$s” z nasledujúceho dôvodu</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynchronizácia počítadiel tém</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Zmenený druh témy</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Téma odomknutá</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Príspevok odomknutý</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Pridané zakázané užívateľské meno</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Odstránené zakázané užívateľské meno</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Záloha databázy</strong>',
	'LOG_DB_DELETE'			=> '<strong>Odstránená záloha databázy</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Obnova databázy</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Odobraná IP/hostiteľ zo zoznamu sťahovaní</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Pridaná IP/hostiteľ do zoznamu sťahovaní</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Odstránená IP/hostiteľ zo zoznamu sťahovaní</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Chyba Jabbera</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Chyba v e-maile</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Vytvorené nové fórum</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Skopírované oprávnenie fóra</strong> z %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Odstránené fórum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Odstránené fórum a jeho sub-fóra</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Odstránené fórum a jeho sub-fóra presunuté</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Odstránené fórum a jeho príspevky presunuté </strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Odstránené fórum a jeho sub-fóra, príspevky presunuté</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Odstránené fórum a presun jeho príspevkov</strong> do %1$s <strong>a subfór</strong> do %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Odstránené fórum a jeho príspevky</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Odstránené fórum a jeho príspevky a subfóra</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Odstránené fórum s jeho príspevkami, subfóra presunuté</strong> do %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Upravené detaily fóra</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Presunuté fórum</strong> %1$s <strong>dole</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Presunuté fórum</strong> %1$s <strong>hore</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Resynchronizácia fóra</strong><br />» %s',
	'LOG_GENERAL_ERROR'	=> '<strong>Vyskytla sa všeobecná chyba</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Vytvorená nová užívateľská skupina</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Skupina %1$s nastavená ako prednastavená pre užívateľa</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Skupina odstránená</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Moderátori skupiny degradovaní</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Užívatelia povýšení na moderátorov skupiny </strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Užívatelia odstránení zo skupiny</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Upravené detaily o skupine</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Pridaní noví moderátori skupiny</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Užívatelia prijatí do skupiny</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'			=> '<strong>Pridaní noví užívatelia do skupiny</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Uživatelia zažiadali o vstup do skupiny „%1$s“ a musia byť schválení</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Chyba pri generování obrázku</strong><br />» Chyba v %1$s v riadku %2$s: %3$s',

	'LOG_IMAGESET_ADD_DB'		=> '<strong>Pridaná sada obrázkov do databázy</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		=> '<strong>Pridaná sada obrázkov v súborovom systéme</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		=> '<strong>Odstránené sady obrázkov</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Upravené detaily sady obrázkov</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			=> '<strong>Upravená sada obrázkov</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		=> '<strong>Export sady obrázkov</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'      => '<strong>V sade obrázkov chýba “%2$s” preklad</strong><br />» %1$s',
  'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Obnovený preklad “%2$s” sady obrázkov</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Obnovenie sady obrázkov</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktivácia neaktívnych užívateľov</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Odstránenie neaktívnych užívateľov</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Odoslané pripomenutia pre neaktívnych užívateľov</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Prechod z %1$s na phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Inštalácia phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Zlyhala kontrola IP session/prehliadača/X_FORWARDED_FOR</strong><br />»Užívateľská IP "<em>%1$s</em>" porovnaná s IP session "<em>%2$s</em>", užívateľské označenie prehliadača "<em>%3$s</em>" porovnané s označením session "<em>%4$s</em>" a užívateľský reťazec X_FORWARDED_FOR "<em>%5$s</em>" porovnaný s X_FORWARDED_FOR session "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Zmena účtu Jabbera</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Zmena hesla Jabbera</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Registrácia Jabber účtu</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Zmena nastavení Jabbera</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Odstránený jazykový balík</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Inštalácia jazykového balíku</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Aktualizácia detailov jazykového balíku</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Nahradený jazykový súbor</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Odoslaný jazykový súbor a nahraný do zložky pre ukladanie</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Odoslaný hromadný e-mail</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Zmenený odosielateľ v téme "%1$s"</strong><br />» z %2$s na %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Modul vypnutý</strong>» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Modul zapnutý</strong>» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Modul posunutý dole</strong><br />» %1$s pod %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Modul posunutý hore</strong><br />» %1$s nad %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Modul odstránený</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Pridaný modul</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Modul upravený</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Administrátorská rola pridaná</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Administrátorská rola upravená</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Administrátorská rola odstránená</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Rola fóra pridaná</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Rola fóra upravená</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Rola fóra odstránená</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderátorská rola pridaná</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderátorská rola upravená</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderátorská rola odstránená</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Užívateľská rola pridaná</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Užívateľská rola upravená</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Užívateľská rola odstránená</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Aktivované pole v profile</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Pridané pole v profile</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Deaktivované pole v profile</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Zmena poľa v profile</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Odstránenie poľa v profile</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Prečistenie fór</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Automatické prečistenie fór</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Užívatelia deaktivovaní</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Užívatelia a príspevky prečistené</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Užívatelia prečistení a príspevky ponechané</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Prečistená cache</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Prečistené sessions</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Pridaná nová hodnosť</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Odstránená hodnosť</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Upravená hodnosť</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Pridaný dôvod hlásenia/zamietnutia</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Odstránený dôvod hlásenia/zamietnutia</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Aktualizácia dôvodu hlásenia/zamietnutia</strong><br />» %s',

  'LOG_REFERER_INVALID'		=> '<strong>Overenie referenta zlyhalo</strong><br />»Referent bol “<em>%1$s</em>”. Požiadavka bola zrušená a sessions zničené.',
	'LOG_RESET_DATE'			=> '<strong>Resetovaný čas spustenia fóra</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Resetovaný rekord online užívateľov</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Resynchonizácia počtu príspevkov</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Označené témy synchronizované</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Príspevky, témy a štatistiky resynchronizované</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Vytvorený vyhľadávací index pre</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Odstránený vyhľadávací index pre</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Pridaný nový štýl</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Odstránený štýl</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Upravený štýl</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Exportovaný štýl</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Pridaný nový template do databázy</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Pridaný nový template do systému súborov</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Odstránené cacheované verzie súborov pre template <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Odstránený súbor šablón</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Upravený súbor šablón <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Upravené detaily súboru šablón</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Export súboru šablón</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Obnovenie súboru šablón</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Pridaný nový skin do databázy</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Pridaný nový skin do systému súborov</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Skin zmazaný</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Detaily editovaného skinu</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Editovaný skin <em>%1$s</em></strong><br />',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Editovaný skin <em>%1$s</em></strong><br />» Modifikovaný súbor <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Exportovaný skin</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Obnovenie skinov</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Aktualizácia databázy z verzie %1$s na verziu %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Aktualizácia phpBB z verzie %1$s na verziu %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Užívateľ aktivovaný</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Zabanovaný užívateľ cez správu užívateĺov</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Zabanovaná IP cez správu užívateľov</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Zabanovaný email cez správu užívateľov</strong> z dôvodu "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Zmazaný užívateľ</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Odstránené všetky prílohy od užívateľa</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Odstránený užívateľský avatar</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Vyprázdnená zložka správ na odoslanie užívateľa</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Odstránené všetky príspevky od užívateľa</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Odstránený podpis užívateľa</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Užívateľ deaktivovaný</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Presunuté užívateľské príspevky</strong><br />» príspevky od "%1$s" do fóra "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Zmenené heslo užívateľa</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Nútená reaktivácia účtu</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Odstranené označenie „Nový člen fóra“ u</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Užívateľ "%1$s" zmenil e-mail</strong><br />» z "%2$s" na "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Zmenené užívateľské meno</strong><br />» z "%1$s" na "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Aktualizácia užívateľa</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Užívateľský účet aktivovaný</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Odstránený avatar užívateľa</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Odstránený podpis užívateľa</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Pridaný komentár k užívateľovi</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Pridaný záznam:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Deaktivácia užívateľského účtu</strong>',
	'LOG_USER_LOCK'				=> '<strong>Užívateľ zamkol svoje témy</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Všetky príspevky presunuté do fóra "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Nútená reaktivácia účtu</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Užívateľ odomkol svoje témy</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Pridané varovanie</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Užívateľovi bolo udelené následovné varovanie</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Užívateľ zmenil prednastavenú skupinu</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Užívateľ zosadený z moderovania skupiny</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Užívateľ vstúpil do skupiny</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Užívateľ vstúpil do skupiny a čaká na schválenie</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Užívateľ vystúpil zo skupiny/strong><br />» %s',
	
	'LOG_WARNING_DELETED'		=> '<strong>Odstránené varovanie užívateľa</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>Odstránené varovania užívateľa: %2$s</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Odstránené všetky varovania užívateľa</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Pridané cenzúrované slovo</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Odstránené cenzúrované slovo</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Upravené cenzúrované slovo</strong><br />» %s',
));

/*
* Portal XL related language definitions
*/

// Portal
$lang = array_merge($lang, array(
	'PORTAL'								=> 'Portál',
   	'ACP_CAT_PORTAL'           				=> 'Portál',
   	'ACP_PORTAL'           					=> 'Portál',
   	'ACP_PORTAL_ADMIN'           			=> 'Všeobecné',
   	'ACP_PORTAL_INFO'           			=> 'Všeobecné',	
    'ACP_PORTAL_ANNOUNCE_INFO'  			=> 'Oznámenia',
    'ACP_PORTAL_NEWS_INFO'      			=> 'Správy',
   	'ACP_PORTAL_RECENT_INFO'    			=> 'Nové Príspevky',	
   	'ACP_PORTAL_WORDGRAPH_INFO'				=> 'Grafika Textu',
    'ACP_PORTAL_PAYPAL_INFO'        		=> 'Paypal',	
    'ACP_PORTAL_ATTACHMENTS_NUMBER_INFO'    => 'Prílohy',
    'ACP_PORTAL_MEMBERS_INFO'               => 'Najnovší Členovia',
    'ACP_PORTAL_POLLS_INFO'                 => 'Hlasovanie',	
    'ACP_PORTAL_BOTS_INFO'                  => 'Hosťujúci Boti',
    'ACP_PORTAL_MOST_POSTER_INFO'           => 'Celkom Odosielateľov',
    'ACP_PORTAL_RANDOM_INFO'                => 'Rôzne Banery',
    'ACP_PORTAL_WELCOME_INFO'               => 'Uvítanie',
    'ACP_PORTAL_WEATHER_INFO'			    => 'Počasie',
    'ACP_PORTAL_SYNDICATE_INFO'			    => 'Pridruženie',
    'ACP_PORTAL_SCROLL_MESSAGE_INFO'        => 'Rolovanie Správ',
    'ACP_PORTAL_METATAGS_INFO'        		=> 'Meta Tagy',
	'ACP_MANAGE_PORTAL'						=> 'Nastavenie Portálu',

	// Portal XL portal blocks //
   	'ACP_PORTAL_CAT_BLOCKS'           		=> 'Bloky Portálu',
   	'ACP_PORTAL_ADMIN_BLOCKS'           	=> 'Bloky Portálu',
	'ACP_PORTAL_BLOCKS'						=> 'Bloky Portálu',
	'ACP_MANAGE_BLOCKS'						=> 'Portál Nastavenie Blokov',

	// Portal XL index/viewtopic blocks //
   	'ACP_PORTAL_INDEX_CAT_BLOCKS'           => 'Obsah Bloku',
   	'ACP_PORTAL_INDEX_ADMIN_BLOCKS'         => 'Obsah Bloku',
	'ACP_PORTAL_INDEX_BLOCKS'				=> 'Obsah Bloku',
	'ACP_PORTAL_BLOCKS_INDEX'				=> 'Obsah Bloku',
	'ACP_MANAGE_INDEX_BLOCKS'				=> 'Fórum Nastavenie Blokov',

	// Portal XL portal menu //
   	'ACP_PORTAL_CAT_MENUS'           		=> 'Ponuky',
   	'ACP_PORTAL_ADMIN_MENUS'           		=> 'Ponuky',
	'ACP_PORTAL_MENUS'						=> 'Ponuky',
	'ACP_MANAGE_MENUS'						=> 'Nastavenie Ponúk',
		
	// Portal XL portal quotes //
   	'ACP_PORTAL_CAT_QUOTES'           		=> 'Citáty',
   	'ACP_PORTAL_ADMIN_QUOTES'           	=> 'Citáty',
	'ACP_PORTAL_QUOTES'						=> 'Citáty',
	'ACP_MANAGE_QUOTES'						=> 'Nastavenie Citátov',
		
	// Portal XL portal partners //
   	'ACP_PORTAL_CAT_BANNERS'          		=> 'Banery',
   	'ACP_PORTAL_ADMIN_BANNERS'           	=> 'Banery',
	'ACP_PORTAL_BANNERS'					=> 'Partnery Nastavenie Banerov',
	'ACP_MANAGE_BANNERS'					=> 'Nastavenie Partnerských Banerov 88x31',
		
	// Portal XL portal banners horizontal //
   	'ACP_PORTAL_CAT_BANNERS_HO'          		=> 'Banery',
   	'ACP_PORTAL_ADMIN_BANNERS_HO'           	=> 'Banery',
	'ACP_PORTAL_BANNERS_HO'						=> 'Banery vodorovné',
	'ACP_MANAGE_BANNERS_HO'						=> 'Nastavenie Vodorovných Banerov 400x60',

	// Portal XL portal banners vertical //
   	'ACP_PORTAL_CAT_BANNERS_VE'          		=> 'Banery',
   	'ACP_PORTAL_ADMIN_BANNERS_VE'           	=> 'Banery',
	'ACP_PORTAL_BANNERS_VE'						=> 'Banery zvislo',
	'ACP_MANAGE_BANNERS_VE'						=> 'Nastavenie Zvislých Banerov 130x600',

	// Portal XL portal links //
   	'ACP_PORTAL_CAT_LINKS'           			=> 'Linky',
   	'ACP_PORTAL_ADMIN_LINKS'           			=> 'Linky',
	'ACP_PORTAL_LINKS'							=> 'Linky',
	'ACP_MANAGE_LINKS'							=> 'Nastavenie Linkov',
		
	// Portal XL portal mods //
   	'ACP_PORTAL_CAT_MODS'           			=> 'Módy',
   	'ACP_PORTAL_ADMIN_MODS'         			=> 'Módy',
	'ACP_PORTAL_MODS'							=> 'Módy',
	'ACP_MANAGE_MODS'							=> 'Info o Dostupných Módoch',
		
	// Portal XL portal adds //
   	'ACP_PORTAL_CAT_ADDS'           			=> 'Inzeráty Fóra',
   	'ACP_PORTAL_ADMIN_ADDS'         			=> 'Inzeráty Fóra',
	'ACP_PORTAL_FORUMADDS'							=> 'Inzeráty Fóra',
	'ACP_MANAGE_ADDS'							=> 'Nastavenie Inzerátov do Fór',
		
	// Portal XL portal pages //
   	'ACP_PORTAL_CAT_PAGES'           			=> 'Stránky Portálu',
   	'ACP_PORTAL_ADMIN_PAGES'         			=> 'Stránky Portálu',
	'ACP_PORTAL_PAGES'							=> 'Stránky Portálu',
	'ACP_MANAGE_PAGES'							=> 'Nastavenie Stránok Portálu',
		
	// Portal XL portal newsfeeds //
   	'ACP_PORTAL_CAT_NEWSFEEDS'           		=> 'Portál Nové Kanály',
   	'ACP_PORTAL_ADMIN_NEWSFEEDS'         		=> 'Portál Nové Kanály',
	'ACP_PORTAL_NEWSFEEDS'						=> 'Portál Nové Kanály',
	'ACP_MANAGE_NEWSFEEDS'						=> 'Nastavenie Nových Kanálov',
		
	// Portal XL portal acronyms //
   	'ACP_PORTAL_CAT_ACRONYMS'           		=> 'Akronymy Portálu',
   	'ACP_PORTAL_ADMIN_ACRONYMS'         		=> 'Akronymy Portálu',
	'ACP_PORTAL_ACRONYMS'						=> 'Akronymy Portálu',
	'ACP_MANAGE_ACRONYMS'						=> 'Nastavenie Skratiek',
		
	// Portal XL portal impressum //
   	'ACP_PORTAL_CAT_IMPRESSUM'           		=> 'Tiráž Portálu',
   	'ACP_PORTAL_ADMIN_IMPRESSUM'         		=> 'Tiráž Portálu',
	'ACP_PORTAL_IMPRESSUM'						=> 'Tiráž Portálu',
	'ACP_MANAGE_IMPRESSUM'						=> 'Nastavenie Tiráže',
		
	// Portal XL portal log entries
	'LOG_CONFIG_PORTAL'				=> '<strong>Uložil všeoecné nastavenie Portálu</strong>',
	'LOG_CONFIG_ANNOUNCEMENTS'		=> '<strong>Uložil oznámenie v Portále</strong>',
	'LOG_CONFIG_NEWS'				=> '<strong>Uložil správu v Portále</strong>',
	'LOG_CONFIG_RECENT'				=> '<strong>Pridal novú tému do Portálu</strong>',
	'LOG_CONFIG_WORDGRAPH'			=> '<strong>Pridal oznam do Portálu</strong>',
	'LOG_CONFIG_COLLUMN'			=> '<strong>Upravil šírka stĺpca v Portálu</strong>',
	'LOG_CONFIG_PAYPAL'				=> '<strong>Pridal paypal do Portálu</strong>',
	'LOG_CONFIG_ATTACHMENTS'		=> '<strong>Pridal prílohu do Portálu</strong>',
	'LOG_CONFIG_MEMBERS'			=> '<strong>Uložil členov do Portálu</strong>',
	'LOG_CONFIG_POLLS'				=> '<strong>Uložil hlasovanie do Portálu</strong>',
	'LOG_CONFIG_BOTS'				=> '<strong>Uložil hosťujúcich botov v Portále</strong>',
	'LOG_CONFIG_POSTER'				=> '<strong>Uložil najväčšieho odosielateľa v Portále</strong>',
	'LOG_CONFIG_RANDOM'				=> '<strong>Uložil priamo do Portálu</strong>',
	'LOG_CONFIG_WELCOME'			=> '<strong>Uložil privítanie v Portále</strong>',
	'LOG_CONFIG_WEATHER'	    	=> '<strong>Uložil počasie v Portále</strong>',
	'LOG_CONFIG_SYNDICATE'	    	=> '<strong>Uložil syndikačné formáty v Portále</strong>',
	'LOG_CONFIG_PLUXLINDEX'	    	=> '<strong>Uložil tabuľku/viewtopic index Portálu</strong>',
  	'LOG_CONFIG_SCROLLMESSAGE'      => '<strong>Uložil zvitky správ do Portálu</strong>',
  	'LOG_CONFIG_METATAGS'      		=> '<strong>Uložil nastavenie META tagov v Portále</strong>',

	// installation logging
	'PORTAL_LOG_INSTALL_PORTAL'	=> '<strong>Inštalácia Portálu XL</strong>',
	'PORTAL_LOG_UNINSTALL_PORTAL'	=> '<strong>Odinštalovanie Portál XL</strong>',
	'PORTAL_LOG_UPDATE_PORTAL'	=> '<strong>Portal XL aktualizácia databázy</strong>',
	
));
  
// Animate Digits IP Tracking Counter
$lang = array_merge($lang, array(
	'ACP_COUNTER_SETTINGS'	=> 'Nastavenie Počítadla',
	'COUNTER_STARTED'		=> 'Spustenie Počítadla',
	'HITS_PER_DAY'			=> 'Záznamov za tento deň',
	'LOG_CONFIG_COUNTER'	=> '<strong>Zmenil nastavenie počítadla</strong>',
	'LOG_RESET_COUNTER'		=> '<strong>Vynulovanie záznamov sa vynuluje: dátum spustenia, čas a hodnoty spustení</strong>',
	'NUMBER_HITS'			=> 'Počet záznamov',
	'RESET_COUNTER'			=> 'Vynulovať záznamy',
	'RESET_COUNTER_CONFIRM'	=> 'Naozaj chcete vynulovať všetky dáta počítadala?',
	'RESET_COUNTER_EXPLAIN'	=> 'Vynulovaním všetkých dát počítadla sa vynuluje: dátum spustenia, čas a všetky záznamy.',
));

// phpbb Calendar
$lang = array_merge($lang, array(
    'ACP_CALENDAR'				=> 'Kalendár',
    'ACP_CALENDAR_SETTINGS'				=> 'Nastavenie Kalendára',
    'ACP_CALENDAR_DELETE_EVENT_TYPE'	=> 'Vymazať udalosť',
    'ACP_CALENDAR_ETYPES'				=> 'Vytvoriť Kategóriu Kalendára',
));

// Country Flags Version 3.0.6
$lang = array_merge($lang, array(
	'ACP_FLAG_SETTINGS'		=> 'Nastavenia vlajok',
	'ACP_FLAGS'				=> 'Vlajky krajín',
	'ACP_MANAGE_FLAGS'		=> 'Správa vlajky krajín',
	'ACP_USER_FLAG'			=> 'Vlajky krajín',
	'ACP_USER_COUNTRY_FLAG'	=> 'Vlajky krajín',
	'LOG_CONFIG_FLAG'		=> '<strong>Zmenil nastavenie vlajky </strong>',
	'LOG_FLAG_ADDED'		=> '<strong>Pridal nové vlajky</strong><br />» %1$s (%2$s)',
	'LOG_FLAG_REMOVED'		=> '<strong>Odstránil vlajku krajiny</strong><br />» %1$s (%2$s)',
	'LOG_FLAG_UPDATED'		=> '<strong>Aktualizoval vlajku krajiny</strong><br />» %1$s (%2$s)',
));

// Friend list on member view by DaMysterious
$lang = array_merge($lang, array(
	'ACP_FRIEND_SETTINGS' 	=> 'Profil priatelia',
	'ACP_PROFILE_FRIENDS' 	=> 'Nastavenia profilu priatelia',
));

/**
* A copy of Handyman` s MOD version check, to view it on the overview
*/
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TOPIC'	=> 'Oznam',
	'CURRENT_VERSION'		=> 'Aktuálna verzia',
	'DOWNLOAD_LATEST'		=> 'Stiahnite si najnovšiu verziu',
	'LATEST_VERSION'		=> 'Posledná verzia',
	'NO_INFO'				=> 'Neviem sa spojiť zo serverom',
	'NOT_UP_TO_DATE'		=> '%s nie je aktuálna',
	'RELEASE_ANNOUNCEMENT'	=> 'Oznámenie',
	'UP_TO_DATE'			=> '%s je aktuálna',
	'VERSION_CHECK'			=> 'Preverenie verzie MÓDU',
));

// AdvancedBlockMOD 1.0.3						
$lang = array_merge($lang, array(
	'ACP_BLOCK_LOGS'			=> 'Block log',
	'ACP_BLOCK_LOGS_EXPLAIN'	=> 'This lists the actions carried out by timezone check and by DNS check e.g. while user registration. This log provides you with information you are able to use for controlling the DNSBL check function. If you have appropriate permissions you can also clear individual operations or the log as a whole.<br /><strong>The different logs have to be enabled under SECURITY SETTINGS!</strong>',
	'ACP_DNSBL'					=> 'DNSBL settings',

	'LOG_CLEAR_BLOCK'			=> '<strong>Cleared block log</strong>',
	'LOG_DNSBL'					=> '<strong>User blocked by DNSBL check.</strong><br />For more information look at other entries for the same IP address.',
	'LOG_DNSBL_ADD'				=> '<strong>Created new DNS Blacklist entry</strong><br />» %s',
	'LOG_DNSBL_DELETE'			=> '<strong>Deleted DNS Blacklist entry</strong><br />» %s',
	'LOG_DNSBL_EDIT'			=> '<strong>Edited DNS Blacklist entry details</strong><br />» %s',
	'LOG_DNSBL_FOUND'			=> '<strong>IP address of spammer recognized by DNSBL check</strong><br />»Blacklist “<em>%s</em>”',
	'LOG_DNSBL_MOVE_DOWN'		=> '<strong>Moved DNS Blacklist</strong> %1$s <strong>below</strong> %2$s',
	'LOG_DNSBL_MOVE_UP'			=> '<strong>Moved DNS Blacklist</strong> %1$s <strong>above</strong> %2$s',
	'LOG_DNSBL_REGISTER'		=> '<strong>User blocked while registration by DNSBL check.</strong><br />For more information look at other entries for the same IP address.',
	'LOG_DNSMX'					=> '<strong>User e-mail address blocked by DNS MX check.</strong><br />»Domain “<em>%s</em>”',
	'LOG_WRONG_TZ'				=> '<strong>User blocked by timezone check.</strong><br />»Timezone “<em>%s</em>”',
));

// Log Entry Email on Birthday version 1.0.1b
$lang = array_merge($lang, array(
	'LOG_BIRTHDAY_EMAIL_SENT'		=> '<strong>Birthday email sent to</strong><br />» %s',
));

// Log Entry Ajax Shoutbox
$lang = array_merge($lang, array(
	'LOG_AS_PURGED'		=> '<strong>Cleared shoutbox log</strong><br />» %s',
));

// Mod_Share_On by JesusADS module entry
$lang = array_merge($lang, array(
	'ACP_SHARE_ON'			=> 'Share On',
	'ACP_SHARE_ON_SETTINGS'	=> 'Share On settings',

));

?>