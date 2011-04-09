<?php
/**
*
* common [Slovak]
*
* @package language
* @version $Id: common.php,v 1.195 2010/01/05 23:00:00 phpbb3.sk Exp $
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> 'Slovenský preklad: <a href="http://www.phpbb3.sk">phpbb3.sk</a> | <a href="http://www.phpbb.sk">phpbb.sk</a>.',
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'		=> '|d M Y|',	// 01 Jan 2007 (with Relative days enabled)
	'USER_LANG'			=> 'sk-SK',

	'1_DAY'			=> '1 deň',
	'1_MONTH'		=> '1 mesiac',
	'1_YEAR'		=> '1 rok',
	'2_WEEKS'		=> '2 týždne',
	'3_MONTHS'		=> '3 mesiace',
	'6_MONTHS'		=> '6 mesiacov',
	'7_DAYS'		=> '7 dní',

	'ACCOUNT_ALREADY_ACTIVATED'		=> 'Váš účet je už aktivovaný',
	'ACCOUNT_DEACTIVATED'			=> 'Váš účet bol ručne deaktivovaný a musí byť znovu aktivovaný administrátorom.',
	'ACCOUNT_NOT_ACTIVATED'			=> 'Váš účet ešte nebol aktivovaný',
	'ACP'							=> 'Administrátorský panel',
	'ACTIVE'						=> 'aktívny',
	'ACTIVE_ERROR'					=> 'Bolo zadané ešte neaktivované užívateľské meno. Aktivujte svoj účet a skúste sa prihlásiť znova. Ak problémy pretrvávajú, kontaktujte administrátora.',
	'ADMINISTRATOR'					=> 'Administrátor',
	'ADMINISTRATORS'				=> 'Administrátori',
	'AGE'							=> 'Vek',
	'AIM'							=> 'AIM',
	'ALLOWED'						=> 'Povolené',
	'ALL_FILES'						=> 'Všetky súbory',
	'ALL_FORUMS'					=> 'Všetky fóra',
	'ALL_MESSAGES'					=> 'Všetky správy',
	'ALL_POSTS'						=> 'Všetky príspevky',
	'ALL_TIMES'						=> 'Všetky časy sú v %1$s %2$s',
	'ALL_TOPICS'					=> 'Všetky témy',
	'AND'							=> 'A',
	'ARE_WATCHING_FORUM'			=> 'Ste prihlásený k sledovaniu tohto fóra',
	'ARE_WATCHING_TOPIC'			=> 'Ste prihlásený k sledovaniu tejto témy.',
	'ASCENDING'						=> 'Vzostupne (A-Z, 0-9)',
	'ATTACHMENTS'					=> 'Prílohy',
	'ATTACHED_IMAGE_NOT_IMAGE'		=> 'Pokúsili ste sa pripojiť neplatný obrázok.',
	'AUTHOR'						=> 'Autor',
	'AUTH_NO_PROFILE_CREATED'		=> 'Vytváranie užívateľského účtu zlyhalo',
	'AVATAR_DISALLOWED_CONTENT'		=> 'Nahrávanie bolo zrušené, pretože bolo identifikované ako možný útok.',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'Prípona %s nie je povolená',
	'AVATAR_EMPTY_REMOTE_DATA'		=> 'Avatar nemôže byť nahraný na server, ide o neplatný formát súboru, alebo je súbor poškodený.',
	'AVATAR_EMPTY_FILEUPLOAD'		=> 'Nahraný súbor s avatarom je prázdny.',
	'AVATAR_INVALID_FILENAME'		=> '%s je neplatný názov súboru',
	'AVATAR_NOT_UPLOADED'			=> 'Avatar nemôže byť nahraný na server.',
	'AVATAR_NO_SIZE'				=> 'Nie je možné získať šírku, alebo výšku avataru, na ktorý odkazujete, zadajte šírku/výšku ručne.',
	'AVATAR_PARTIAL_UPLOAD'			=> 'Súbor bol nahraný na server iba čiastočne',
	'AVATAR_PHP_SIZE_NA'			=> 'Príliš veľký súbor avataru.<br />Nemôžem určiť maximálnu veľkosť, definovanú v php.ini.',
	'AVATAR_PHP_SIZE_OVERRUN'		=> 'Príliš veľký súbor avataru, maximálna veľkosť obrázku je %d %2$s.<br />Veľkosť je nastavená v súbore php.ini a nemôže byť prekročená.',
	'AVATAR_URL_INVALID'			=> 'Zadaná URL je neplatná.',
	'AVATAR_URL_NOT_FOUND'			=> 'Zadaný súbor nebol nájdený.',
	'AVATAR_WRONG_FILESIZE'			=> 'Súbor s avatarom musí mať veľkosť medzi 0 a %1d %2s.',
	'AVATAR_WRONG_SIZE'				=> 'Avatar musí byť najmenej %1$d pixelov široký, %2$d pixelov vysoký a maximálne %3$d pixelov široký a %4$d pixelov vysoký. Zvolený avatar je %5$d pixelov široký a %6$d pixelov vysoký.',

	'BACK_TO_TOP'			=> 'Hore',
	'BACK_TO_PREV'			=> 'Späť na predchádzajúcu stránku',
	'BAN_TRIGGERED_BY_EMAIL'=> 'Dostali ste ban na vašu e-mailovú adresu.',
	'BAN_TRIGGERED_BY_IP'	=> 'Dostali ste ban na vašu IP adresu.',
	'BAN_TRIGGERED_BY_USER'	=> 'Dostali ste ban na vaše užívateľské meno.',
	'BBCODE_GUIDE'			=> 'BBCode návod',
	'BCC'					=> 'BCC',
	'BIRTHDAYS'				=> 'Narodeniny',
	'BOARD_BAN_PERM'		=> 'Boli ste <strong>trvale</strong> zablokovaný.<br /><br />Prosím kontaktujte %2$sAdministrátora fóra%3$s pre viac informácií.',
	'BOARD_BAN_REASON'		=> 'Dôvod zablokovania: <strong>%s</strong>',
	'BOARD_BAN_TIME'		=> 'Boli ste vykázaný z tohto fóra do <strong>%1$s</strong>.<br /><br />Prosím kontaktujte %2$sAdministrátora fóra%3$s pre viac informácií.',
	'BOARD_DISABLE'			=> 'Prepáčte, ale momentálne je fórum nedostupné',
	'BOARD_DISABLED'		=> 'Prepáčte, ale fórum je momentálne vypnuté',
	'BOARD_UNAVAILABLE'		=> 'Prepáčte, fórum je dočasne nedostupné, skúste sa pripojiť neskôr',
	'BROWSING_FORUM'		=> 'Užívatelia prehlaidávajú toto fórum: %1$s',
	'BROWSING_FORUM_GUEST'	=> 'Užívatelia prezerajúci fórum: %1$s a %2$d hosť',
	'BROWSING_FORUM_GUESTS'	=> 'Užívatelia prezerajúci fórum: %1$s a %2$d hostia',
	'BYTES'					=> 'Bajtov',

	'CANCEL'				=> 'Zrušiť',
	'CHANGE'				=> 'Zmeniť',
	'CHANGE_FONT_SIZE'		=> 'Zmeniť veľkosť písma',
	'CHANGING_PREFERENCES'	=> 'Mení nastavenia fóra',
	'CHANGING_PROFILE'		=> 'Mení profil na fóre',
	'CLICK_VIEW_PRIVMSG'	=> '%sSúkromné správy%s',
	'COLLAPSE_VIEW'			=> 'Zmenšiť náhľad',
	'CLOSE_WINDOW'			=> 'Zavrieť okno',
	'COLOUR_SWATCH'			=> 'Vzorník farieb',
	'COMMA_SEPARATOR'		=> ', ',	// Used in pagination of ACP & prosilver, use localised comma if appropriate, eg: Ideographic or Arabic
	'CONFIRM'				=> 'Potvrdiť',
	'CONFIRM_CODE'			=> 'Overovací kód',
	'CONFIRM_CODE_EXPLAIN'	=> 'Zadajte kód presne tak, ako ho vidíte. Používajte malé aj veľké písmená.',
	'CONFIRM_CODE_WRONG'	=> 'Vložený overovací kód je nesprávny.',
	'CONFIRM_OPERATION'		=> 'Naozaj chcete spustiť túto operáciu?',
	'CONGRATULATIONS'		=> 'Gratulujeme',
	'CONNECTION_FAILED'		=> 'Spojenie zlyhalo',
	'CONNECTION_SUCCESS'	=> 'Spojenie prebehlo úspešne!',
	'COOKIES_DELETED'		=> 'Všetky cookies vytvorené fórom boli odstránené.',
	'CURRENT_TIME'			=> 'Aktuálny čas je %s',

	'DAY'					=> 'Deň',
	'DAYS'					=> 'Dní',
	'DELETE'				=> 'Vymazať',
	'DELETE_ALL'			=> 'Vymazať všetko',
	'DELETE_COOKIES'		=> 'Vymazať všetky cookies fóra',
	'DELETE_MARKED'			=> 'Vymazať označené',
	'DELETE_POST'			=> 'Vymazať príspevok',
	'DELIMITER'				=> 'Oddeľovač',
	'DESCENDING'			=> 'Zostupne (Z-A, 9-0)',
	'DISABLED'				=> 'Vypnuté',
	'DISPLAY'				=> 'Zobraziť',
	'DISPLAY_GUESTS'		=> 'Zobraziť hostí',
	'DISPLAY_MESSAGES'		=> 'Zobraziť správy z predchádzajúceho',
	'DISPLAY_POSTS'			=> 'Zobraziť príspevky z predchádzajúceho',
	'DISPLAY_TOPICS'		=> 'Zobraziť témy z predchádzajúceho',
	'DOWNLOADED'			=> 'Stiahnuté',
	'DOWNLOADING_FILE'		=> 'Sťahovanie súboru',
	'DOWNLOAD_COUNT'		=> '%d krát',
	'DOWNLOAD_COUNTS'		=> '%d krát',
	'DOWNLOAD_COUNT_NONE'	=> 'Zatiaľ nikým nestiahnuté',
	'VIEWED_COUNT'			=> 'Zobrazené %d krát',
	'VIEWED_COUNTS'			=> 'Zobrazené %d krát',
	'VIEWED_COUNT_NONE'		=> 'Zatiaľ nikým nezobrazené',

	'EDIT_POST'							=> 'Editovať príspevok',
	'EMAIL'								=> 'E-mail',
	'EMAIL_ADDRESS'						=> 'E-mailová adresa',
	'EMAIL_SMTP_ERROR_RESPONSE'			=> 'Posielanie e-mailu zlyhalo na <strong>riadku %1$s</strong>. Odozva: %2$s',
	'EMPTY_SUBJECT'						=> 'Pri zakladaní novej témy, musíte uviesť názov témy.',
	'EMPTY_MESSAGE_SUBJECT'				=> 'Musíte uviesť predmet pri písaní novej správy.',
	'ENABLED'							=> 'Povolené',
	'ENCLOSURE'							=> 'Uzavreté',
	'ERR_CHANGING_DIRECTORY'			=> 'Nie je možné zmeniť adresár',
	'ERR_CONNECTING_SERVER'				=> 'Chyba pri spojení so serverom',
	'ERR_JAB_AUTH'						=> 'Nemôžem autorizovať užívateľa na Jabber serveri.',
	'ERR_JAB_CONNECT'					=> 'Nemôžem sa pripojiť na Jabber server.',
	'ERR_UNABLE_TO_LOGIN'				=> 'Chyba počas prihlasovania. Zadané užívateľské meno, alebo heslo je nesprávne.',
	'ERR_UNWATCHING'					=> 'Pri odhlasovaní z odberu noviniek sa objavila chyba.',
	'ERR_WATCHING'						=> 'Pri prihlasovaní k odberu noviniek sa objavila chyba.',
	'ERR_WRONG_PATH_TO_PHPBB'			=> 'Vložená cesta k phpBB je neplatná.',
	'EXPAND_VIEW'						=> 'Zväčšiť náhľad',
	'EXTENSION'							=> 'Rozšírenie',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'Rozšírenie <strong>%s</strong> bolo deaktivované a nemôže byť zobrazené',

	'FAQ'					=> 'FAQ',
	'FAQ_EXPLAIN'			=> 'Často kladené otázky',
	'FILENAME'				=> 'Názov súboru',
	'FILESIZE'				=> 'Veľkosť súboru',
	'FILEDATE'				=> 'Dátum súboru',
	'FILE_COMMENT'			=> 'Poznámka',
	'FILE_NOT_FOUND'		=> 'Požadovaný súbor nenájdený',
	'FIND_USERNAME'			=> 'Vyhľadať užívateľa',
	'FOLDER'				=> 'Priečinok',
	'FORGOT_PASS'			=> 'Zabudol/a som heslo',
	'FORM_INVALID'			=> 'Odoslaný formulár nebol platný. Pokúste sa ho odoslať znovu.',
	'FORUM'					=> 'Fórum',
	'FORUMS'				=> 'Fóra',
	'FORUMS_MARKED'			=> 'Označiť všetky fóra ako prečítané',
	'FORUM_CAT'				=> 'Kategória fóra',
	'FORUM_INDEX'			=> 'Obsah fóra',
	'FORUM_LINK'			=> 'Odkaz na fórum',
	'FORUM_LOCATION'		=> 'Umiestnenie fóra',
	'FORUM_LOCKED'			=> 'Fórum je zamknuté',
	'FORUM_RULES'			=> 'Pravidlá fóra',
	'FORUM_RULES_LINK'		=> 'Prosím kliknite pre zobrazenie pravidiel fóra',
	'FROM'					=> 'z',
	'FSOCK_DISABLED'		=> 'Operácia nemohla byť dokončená, pretože funkcie <var>fsockopen</var> sú zakázané alebo hľadaný server nebol nájdený.',

	'FTP_FSOCK_HOST'				=> 'FTP server',
	'FTP_FSOCK_HOST_EXPLAIN'		=> 'FTP server používaný pre pripojenie k fóru',
	'FTP_FSOCK_PASSWORD'			=> 'FTP heslo',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'Heslo pre FTP prístup',
	'FTP_FSOCK_PORT'				=> 'FTP port',
	'FTP_FSOCK_PORT_EXPLAIN'		=> 'Port pre pripojenie k serveru',
	'FTP_FSOCK_ROOT_PATH'			=> 'Cesta k phpBB',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'Cesta z root do priečinku s phpBB',
	'FTP_FSOCK_TIMEOUT'				=> 'FTP časový limit',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'		=> 'Čas v sekundách, koľko má systém čakať na odpoveď serveru',
	'FTP_FSOCK_USERNAME'			=> 'FTP užívateľské meno',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'Užívateľské meno pre prihlásenie sa na server.',

	'FTP_HOST'					=> 'FTP server',
	'FTP_HOST_EXPLAIN'			=> 'FTP server používaný pre pripojenie k fóru',
	'FTP_PASSWORD'				=> 'FTP heslo',
	'FTP_PASSWORD_EXPLAIN'		=> 'Heslo pre FTP prístup',
	'FTP_PORT'					=> 'FTP port',
	'FTP_PORT_EXPLAIN'			=> 'Port pre pripojenie k serveru',
	'FTP_ROOT_PATH'				=> 'Cesta k phpBB',
	'FTP_ROOT_PATH_EXPLAIN'		=> 'Cesta z root do priečinku s phpBB',
	'FTP_TIMEOUT'				=> 'FTP časový limit',
	'FTP_TIMEOUT_EXPLAIN'		=> 'Čas v sekundách, koľko má systém čakať na odpoveď serveru',
	'FTP_USERNAME'				=> 'FTP užívateľské meno',
	'FTP_USERNAME_EXPLAIN'		=> 'Užívateľské meno pre prihlásenie sa na server',

	'GENERAL_ERROR'				=> 'Všeobecná chyba',
	'GB'						=> 'GB',
	'GIB'						=> 'GiB',
	'GO'						=> 'Choď',
	'GOTO_PAGE'					=> 'Choď na stránku',
	'GROUP'						=> 'Skupina',
	'GROUPS'					=> 'Skupiny',
	'GROUP_ERR_TYPE'			=> 'Nesprávny typ označenia skupiny.',
	'GROUP_ERR_USERNAME'		=> 'Chýbajúce meno skupiny.',
	'GROUP_ERR_USER_LONG'		=> 'Meno skupiny je príliš dlhé.',
	'GUEST'						=> 'Hosť',
	'GUEST_USERS_ONLINE'		=> 'Fórum prezerá %d hostí',
	'GUEST_USERS_TOTAL'			=> '%d hostí',
	'GUEST_USERS_ZERO_ONLINE'	=> 'Žiadny hosť neprezerá fórum',
	'GUEST_USERS_ZERO_TOTAL'	=> '0 hostí',
	'GUEST_USER_ONLINE'			=> 'Fórum prezerá %d hosť',
	'GUEST_USER_TOTAL'			=> '%d hosť',
	'G_ADMINISTRATORS'			=> 'Administrátori',
	'G_BOTS'					=> 'Boti',
	'G_GUESTS'					=> 'Hostia',
	'G_REGISTERED'				=> 'Registrovaní užívatelia',
	'G_REGISTERED_COPPA'		=> 'Registrovaní COPPA užívatelia',
	'G_GLOBAL_MODERATORS'		=> 'Globálni moderátori',
	'G_NEWLY_REGISTERED'		=> 'Noví členovia fóra',

	'HIDDEN_USERS_ONLINE'		=> '%d skrytých užívateľov on-line',
	'HIDDEN_USERS_TOTAL'			=> '%d skrytých',
	'HIDDEN_USERS_TOTAL_AND'		=> '%d skrytých a ',
	'HIDDEN_USERS_ZERO_ONLINE'		=> '0 skrytých užívateľov',
	'HIDDEN_USERS_ZERO_TOTAL'		=> '0 skrytých',
	'HIDDEN_USERS_ZERO_TOTAL_AND'	=> '0 skrytých a ',
	'HIDDEN_USER_ONLINE'			=> '%d skrytých užívateľov',
	'HIDDEN_USER_TOTAL'				=> '%d skrytí',
	'HIDDEN_USER_TOTAL_AND'			=> '%d skrytý a ',
	'HIDE_GUESTS'				=> 'Skryť hostí',
	'HIDE_ME'					=> 'Skryť môj on-line stav pre toto prihlásenie',
	'HOURS'						=> 'Hodín',
	'HOME'						=> 'Domov',

	'ICQ'						=> 'ICQ',
	'ICQ_STATUS'				=> 'ICQ stav',
	'IF'						=> 'ak',
	'IMAGE'						=> 'Obrázok',
	'IMAGE_FILETYPE_INVALID'	=> 'Typ obrázku %d pre mimetype %s nie je podporovaný.',
	'IMAGE_FILETYPE_MISMATCH'	=> 'Chybný typ obrázku: obrázok musí byť %1$s , prípona však bola %2$s .',
	'IN'						=> 'v',
	'INDEX'						=> 'Obsah',
	'INFORMATION'				=> 'Informácia',
	'INTERESTS'					=> 'Záujmy',
	'INVALID_DIGEST_CHALLENGE'	=> 'Neplatná požiadavka na spracovanie',
	'INVALID_EMAIL_LOG'			=> 'Nie je náhodou <strong>%s</strong> neplatná e-mailova adresa?',
	'IP'						=> 'IP',
	'IP_BLACKLISTED'			=> 'Vaša IP %1$s bola zablokovaná, pretože je na Čiernej listine. Pre viac informácií sa prosím pozrite na <a href="%2$s">%2$s</a>.',

	'JABBER'				=> 'Jabber',
	'JOINED'				=> 'Registrovaný',
	'JUMP_PAGE'				=> 'Zadajte číslo stránky, na ktorú chcete prejsť',
	'JUMP_TO'				=> 'Skočiť na',
	'JUMP_TO_PAGE'			=> 'Kliknite pre skok na stránku…',

	'KB'					=> 'KB',
  'KIB'					=> 'KiB',
  
	'LAST_POST'							=> 'Posledný príspevok',
	'LAST_UPDATED'						=> 'Posledná aktualizácia',
	'LAST_VISIT'						=> 'Posledná návšteva',
	'LDAP_NO_LDAP_EXTENSION'			=> 'LDAP rozšírenie, nie je dostupné',
	'LDAP_NO_SERVER_CONNECTION'			=> 'Nie je možné pripojiť sa na LDAP server',
	'LDAP_SEARCH_FAILED'				=> 'Došlo k chybe pri hľadaní v adresári LDAP.',
	'LEGEND'							=> 'Legenda',
	'LOCATION'							=> 'Bydlisko',
	'LOCK_POST'							=> 'Zamknutý príspevok',
	'LOCK_POST_EXPLAIN'					=> 'Zabrániť upravovaniu',
	'LOCK_TOPIC'						=> 'Zamknúť tému',
	'LOGIN'								=> 'Prihlásenie',
	'LOGIN_CHECK_PM'					=> 'Prihlásiť sa, pre čítanie súkromných správ',
	'LOGIN_CONFIRMATION'				=> 'Potvrdenie prihlásenia',
	'LOGIN_CONFIRM_EXPLAIN'				=> 'Pre zabránenie vytvárania registrácií spambotmi sa vyžaduje potvrdenie registrácie zadaním kódu, ktorý je zobrazovaný v obrázku nad okienkom do ktorého treba tento kód prepísať. Ak je tento kód nečitateľný, kontaktujte %sAdministrátora fóra%s.', // nepoužitý
	'LOGIN_ERROR_ATTEMPTS'				=> 'Prekročili ste maximálny povolený počet pokusov o prihlásenie. Teraz musíte okrem svojho užívateľského mena a hesla opísať aj CAPTCHA nižšie.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'Neboli ste autorizovaný serverom Apache.',
	'LOGIN_ERROR_PASSWORD'				=> 'Zadali ste zlé heslo. Prosím skontrolujte svoje heslo a skúste sa prihlásiť znovu. Ak máte stále problém prihlásiť sa, kontaktujte %sAdministrátora fóra%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT'		=> 'Nebolo možné previesť vaše heslo pri prechode zo staršej verzie fóra. %sZažiadajte prosím o nové%s. Pokiaľ problémy pretrvávajú, kontaktujte %sAdministrátora fóra%s.',
	'LOGIN_ERROR_USERNAME'				=> 'Zadali ste zlé užívateľské meno. Prosím skontrolujte svoje užívateľské meno a skúste to znovu. Ak máte stále problém prihlásiť sa, kontaktujte %sAdministrátora fóra%s.',
	'LOGIN_FORUM'						=> 'Pred prispievaním v tomto fóre, musíte zadať jeho heslo.',
	'LOGIN_INFO'						=> 'Pred prihlásením sa musíte zaregistrovať. Registrácia trvá iba chvíľu, po prihlásení môžete začať využívať všetky služby tohto fóra. Administrátor fóra môže registrovaným užívateľom udeliť rozšírené právomoci. Pred registráciou sa uistite, že ste sa oboznámili s našimi podmienkami pre užívanie fóra a s ďalšími pravidlami a ujednaniami. Zároveň sa uistite, že si prečítate akékoľvek pravidlá, ktoré sa na fóre objavia.',
	'LOGIN_VIEWFORUM'					=> 'Administrátor, vyžaduje prihlásenie pre prezeranie tohto fóra.',
	'LOGIN_EXPLAIN_EDIT'				=> 'Pre upravovanie príspevkov v tomto fóre, musíte byť prihlásený.',
	'LOGIN_EXPLAIN_VIEWONLINE'         	=> 'Pre zobrazenie výpisu online užívateľov musíte byť registrovaný a prihlásený.',
	'LOGOUT'							=> 'Odhlásenie',
	'LOGOUT_USER'						=> 'Odhlásenie [ %s ]',
	'LOG_ME_IN'							=> 'Automatické prihlásenie pri každej návšteve',

	'MARK'					=> 'Označiť',
	'MARK_ALL'				=> 'Označiť všetko',
	'MARK_FORUMS_READ'		=> 'Označiť všetky fóra ako prečítané',
	'MB'					=> 'MB',
	'MIB'					=> 'MiB',
	'MCP'					=> 'Moderátorský panel',
	'MEMBERLIST'			=> 'Členovia',
	'MEMBERLIST_EXPLAIN'	=> 'Zobraziť zoznam všetkých členov',
	'MERGE'					=> 'Zlúčiť',
	'MERGE_POSTS'			=> 'Zlúčiť príspevky',
	'MERGE_TOPIC'			=> 'Zlúčiť témy',
	'MESSAGE'				=> 'Správa',
	'MESSAGES'				=> 'Správy',
	'MESSAGE_BODY'			=> 'Telo správy',
	'MINUTES'				=> 'Minút',
	'MODERATE'				=> 'Moderovať',
	'MODERATOR'				=> 'Moderátor',
	'MODERATORS'			=> 'Moderátori',
	'MONTH'					=> 'Mesiac',
	'MOVE'					=> 'Presunúť',
	'MSNM'					=> 'MSNM/WLM',

	'NA'						=> 'Neprístupné',
	'NEWEST_USER'				=> 'Najnovším užívateľom je <strong>%s</strong>',
	'NEW_MESSAGE'				=> 'Nová správa',
	'NEW_MESSAGES'				=> 'Nové správy',
	'NEW_PM'					=> '<strong style="color:#FF0000;">%d</strong> nová správa',
	'NEW_PMS'					=> '<strong style="color:#FF0000;">%d</strong> nové správy',
	'NEW_POST'					=> 'Nový príspevok',	// Nepoužíva
	'NEW_POSTS'					=> 'Nové príspevky',	// Nepoužíva
	'NEXT'						=> 'Ďalší',	// Použité pri stránkovaní
	'NEXT_STEP'					=> 'Ďalší',
	'NEVER'						=> 'Nikdy',
	'NO'						=> 'Nie',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'Nie ste oprávnený spravovať túto skupinu.',
	'NOT_AUTHORISED'			=> 'Nie ste oprávnený pre prístup do tejto sekcie.',
	'NOT_WATCHING_FORUM'		=> 'Už nie ste prihlásený pre odber noviniek z tohto fóra.',
	'NOT_WATCHING_TOPIC'		=> 'Už nie ste prihlásený pre prijímanie upozornení na správy v tejto téme.',
	'NOTIFY_ADMIN'				=> 'Informujte prosím administrátora fóra alebo webmastera.',
	'NOTIFY_ADMIN_EMAIL'		=> 'Informujte prosím administrátora fóra alebo webmastera: <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'		=> 'Nemáte prístup k tomuto súboru.',
	'NO_ACTION'					=> 'Nešpecifikovaná akcia.',
	'NO_ADMINISTRATORS'			=> 'Toto fórum nemá žiadnych administrátorov.',
	'NO_AUTH_ADMIN'				=> 'Nemáte administrátorské oprávnenie a preto nie ste oprávnený pre prístup k administrácii.',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'Nie ste oprávnený potvrdiť ďalšieho užívateľa.',
	'NO_AUTH_OPERATION'			=> 'Nemáte dostatočné oprávnenie na dokončenie akcie.',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'Zlyhalo spojenie na Smtp server : %1$s : %2$s',
	'NO_BIRTHDAYS'				=> 'Dnes nemá narodeniny nikto z užívateľov',
	'NO_EMAIL_MESSAGE'			=> 'E-mailová správa bola prázdna',
	'NO_EMAIL_RESPONSE_CODE'	=> 'Nepodarilo sa získať odozvu z e-mailového serveru.',
	'NO_EMAIL_SUBJECT'			=> 'Chýbajúci subjekt e-mailu.',
	'NO_FEED_ENABLED'		=> 'Exporty nie sú povolené na tomto fóre.',
	'NO_FEED'						=> 'Zvolený export nie je dostupný.',
	'NO_FORUM'					=> 'Zvolené fórum neexistuje.',
	'NO_FORUMS'					=> 'Na tejto stránke nie sú žiadne fóra.',
	'NO_GROUP'					=> 'Zvolená skupina neexistuje.',
	'NO_GROUP_MEMBERS'			=> 'Táto skupina nemá žiadnych členov',
	'NO_IPS_DEFINED'			=> 'Žiadne definované IP, alebo  Hostname',
	'NO_MEMBERS'				=> 'Na základe zadaných kritérií nebol nájdený žiaden užívateľ',
	'NO_MESSAGES'				=> 'Žiadne správy',
	'NO_MODE'					=> 'Nešpecifikovaný mód.',
	'NO_MODERATORS'				=> 'Toto fórum nemá moderátorov.',
	'NO_NEW_MESSAGES'			=> 'Žiadne nové správy',
	'NO_NEW_PM'					=> '0 nových správ',
	'NO_NEW_POSTS'				=> 'Žiadne nové príspevky',	// Nepoužíva
	'NO_ONLINE_USERS'			=> 'Žiadny registrovaný užívateľ nie je prítomný',
	'NO_POSTS'					=> 'Žiadne príspevky',
	'NO_POSTS_TIME_FRAME'		=> 'Neexistujú žiadne príspevky v tejto téme pre zvolený čas.',
	'NO_SUBJECT'				=> 'Nebol zvolený predmet',								// Used for posts having no subject defined but displayed within management pages.
	'NO_SUCH_SEARCH_MODULE'		=> 'Zvolený spôsob hľadania neexistuje',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'Žiadne podporované autentifikačné metódy',
	'NO_TOPIC'					=> 'Zvolená téma neexistuje.',
	'NO_TOPIC_FORUM'			=> 'Téma alebo fórum už neexistuje.',
	'NO_TOPICS'					=> 'Neexistujú žiadne témy alebo príspevky v tomto fóre.',
	'NO_TOPICS_TIME_FRAME'		=> 'Neexistujú žiadne témy v tomto fóre pre zvolený čas.',
	'NO_UNREAD_PM'				=> '0 neprečítaných správ',
	'NO_UNREAD_POSTS'			=> 'Žiadne neprečítané príspevky',
	'NO_UPLOAD_FORM_FOUND'		=> 'Nahrávanie na fórum sa spustilo, ale nebol nájdený žiadny platný spôsob pre nahranie súboru.',
	'NO_USER'					=> 'Zadaný užívateľ neexistuje.',
	'NO_USERS'					=> 'Zadaní užívatelia neexistujú.',
	'NO_USER_SPECIFIED'			=> 'Nebolo zadané žiadne užívateľské meno',
	// Nullar/Singular/Plural language entry. The key numbers define the number range in which a certain grammatical expression is valid.
	'NUM_POSTS_IN_QUEUE'		=> array(
		0			=> 'Žiadne príspevky čakajúce na schválenie',		// 0
		1			=> '1 príspevok čaká na schválenie',		// 1
		2			=> 'Počet príspevkov čakajúcich na schválenie: %d',		// 2+
	),

	'OCCUPATION'				=> 'Zamestnanie',
	'OFFLINE'					=> 'Offline',
	'ONLINE'					=> 'On-line',
	'ONLINE_BUDDIES'			=> 'On-line priateľov',
	'ONLINE_USERS_TOTAL'		=> 'Celkovo <strong>%d</strong> on-line užívateľov :: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> '<strong>Nikto</strong> nie je prítomný :: ',
	'ONLINE_USER_TOTAL'			=> 'Celkovo je <strong>%d</strong> užívateľov prítomných: ',
	'OPTIONS'					=> 'Možnosti',

	'PAGE_OF'				=> 'Stránka <strong>%1$d</strong> z <strong>%2$d</strong>',
	'PASSWORD'				=> 'Heslo',
	'PIXEL'					=> 'px',
	'PLAY_QUICKTIME_FILE'	=> 'Prehrať súbor - Quicktime',
	'PM'					=> 'SS',
	'PM_REPORTED'			=> 'Kliknite pre zobrazenie nahlásení',
	'POSTING_MESSAGE'		=> 'Píše správu v %s',
	'POSTING_PRIVATE_MESSAGE'	=> 'Píše súkromnú správu',
	'POST'					=> 'Poslať',
	'POST_ANNOUNCEMENT'		=> 'Oznámenie',
	'POST_STICKY'			=> 'Dôležité',
	'POSTED'				=> 'Napísal',
	'POSTED_IN_FORUM'		=> 'v',
	'POSTED_ON_DATE'		=> 'v',
	'POSTS'					=> 'Príspevky',
	'POSTS_UNAPPROVED'		=> 'Minimálne jeden príspevok, nebol schválený.',
	'POST_BY_AUTHOR'		=> 'od',
	'POST_BY_FOE'			=> 'Tento príspevok napísal <strong>%1$s</strong>, ktorý je vo vašom liste ignorovaných. %2$sZobraziť príspevky%3$s.',
	'POST_DAY'				=> '%.2f príspevkov za deň',
	'POST_DETAILS'			=> 'Detaily príspevku',
	'POST_NEW_TOPIC'		=> 'Vytvoriť novú tému',
	'POST_REPLY'			=> 'Odoslať odpoveď',
	'POST_PCT'				=> '%.2f%% zo všetkých príspevkov',
	'POST_PCT_ACTIVE'		=> '%.2f%% užívateľových príspevkov',
	'POST_PCT_ACTIVE_OWN'	=> '%.2f%% vašich príspevkov',
	'POST_REPORTED'			=> 'Kliknite pre zobrazenie oznámení',
	'POST_SUBJECT'			=> 'Predmet príspevku',
	'POST_TIME'				=> 'Čas odoslania',
	'POST_TOPIC'			=> 'Odoslať novú tému',
	'POST_UNAPPROVED'		=> 'Tento príspevok čaká na schválenie. Kliknite pre odsúhlasenie príspevku.',
	'PREVIEW'				=> 'Náhľad',
	'PREVIOUS'				=> 'Predchádzajúci',// Použité pri stránkovaní
	'PREVIOUS_STEP'			=> 'Predchádzajúci',
	'PRIVACY'				=> 'Ochrana súkromia',
	'PRIVATE_MESSAGE'		=> 'Súkromná správa',
	'PRIVATE_MESSAGES'		=> 'Súkromné správy',
	'PRIVATE_MESSAGING'		=> 'Súkromné správy',
	'PROFILE'				=> 'Užívateľský panel',

	'READING_FORUM'				=> 'Prezerá témy v %s',
	'READING_GLOBAL_ANNOUNCE'	=> 'Číta globálne oznámenie',
	'READING_LINK'				=> 'Prechádza na odkaz na fóre %s',
	'READING_TOPIC'				=> 'Číta v téme %s',
	'READ_PROFILE'				=> 'Profil',
	'REASON'					=> 'Dôvod',
	'RECORD_ONLINE_USERS'		=> 'Naraz bolo prítomných najviac <strong>%1$s</strong> užívateľov dňa %2$s',
	'REDIRECT'					=> 'Presmerovať',
	'REDIRECTS'					=> 'Celkom presmerovaní',
	'REGISTER'					=> 'Registrovať',
	'REGISTERED_USERS'			=> 'Registrovaní užívatelia:',
	'REG_USERS_ONLINE'			=> 'Je tu práve %d registrovaných užívateľov a ',
	'REG_USERS_TOTAL'			=> '%d registrovaných, ',
	'REG_USERS_TOTAL_AND'		=> '%d registrovaných a ',
	'REG_USERS_ZERO_ONLINE'		=> 'Nie je prítomný nikto z registrovaných užívateľov a ',
	'REG_USERS_ZERO_TOTAL'		=> 'žiadny registrovaný užívateľ, ',
	'REG_USERS_ZERO_TOTAL_AND'	=> '0 registrovaných a ',
	'REG_USER_ONLINE'			=> 'Je tu práve %d registrovaný užívateľ a ',
	'REG_USER_TOTAL'			=> '%d registrovaný, ',
	'REG_USER_TOTAL_AND'		=> '%d registrovaný a ',
	'REMOVE'					=> 'Odstrániť',
	'REMOVE_INSTALL'			=> 'Prosím zmažte, alebo presuňte inštalačný priečinok pred začatím používania fóra. Pokiaľ nebude odstránený inštalačný priečinok, bude prístupný iba administrátorský panel.',
	'REPLIES'					=> 'Odpovede',
	'REPLY_WITH_QUOTE'			=> 'Odpoveď s citáciou',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'Odpovedá na globálne oznámenie',
	'REPLYING_MESSAGE'			=> 'Odpovedá na správu v %s',
	'REPORT_BY'					=> 'Ohlásenie',
	'REPORT_POST'				=> 'Ohlásiť tento príspevok',
	'REPORTING_POST'			=> 'Ohlásenie príspevku',
	'RESEND_ACTIVATION'			=> 'Znovu poslať aktivačný e-mail',
	'RESET'						=> 'Reset',
	'RESTORE_PERMISSIONS'		=> 'Obnoviť oprávnenia',
	'RETURN_INDEX'				=> '%sSpäť na hlavnú stránku%s',
	'RETURN_FORUM'				=> '%sSpäť do naposledy navštíveného fóra%s',
	'RETURN_PAGE'				=> '%sSpäť na predchádzajúcu stránku%s',
	'RETURN_TOPIC'				=> '%sSpäť na naposledy navštívenú tému%s',
	'RETURN_TO'					=> 'Späť na',
	
	'FEED'						=> 'ATOM',
	'FEED_NEWS'				=> 'Novinky',
	'FEED_TOPICS_ACTIVE'		=> 'Aktívne témy',
	'FEED_TOPICS_NEW'			=> 'Nové témy',
	
	'RULES_ATTACH_CAN'			=> '<strong>Môžete</strong> prikladať súbory v tomto fóre',
	'RULES_ATTACH_CANNOT'		=> '<strong>Nemôžete</strong> zasielať súbory v tomto fóre',
	'RULES_DELETE_CAN'			=> '<strong>Môžete</strong> mazať svoje príspevky v tomto fóre',
	'RULES_DELETE_CANNOT'		=> '<strong>Nemôžete</strong> mazať svoje príspevky v tomto fóre',
	'RULES_DOWNLOAD_CAN'		=> '<strong>Môžete</strong> sťahovať súbory v tomto fóre',
	'RULES_DOWNLOAD_CANNOT'		=> '<strong>Nemôžete</strong> sťahovať súbory v tomto fóre',
	'RULES_EDIT_CAN'			=> '<strong>Môžete</strong> upravovať svoje príspevky v tomto fóre',
	'RULES_EDIT_CANNOT'			=> '<strong>Nemôžete</strong> upravovať svoje príspevky v tomto fóre',
	'RULES_LOCK_CAN'			=> '<strong>Môžete</strong> zamykať svoje témy v tomto fóre',
	'RULES_LOCK_CANNOT'			=> '<strong>Nemôžete</strong> zamykať svoje témy v tomto fóre',
	'RULES_POST_CAN'			=> '<strong>Môžete</strong> zakladať nové témy v tomto fóre',
	'RULES_POST_CANNOT'			=> '<strong>Nemôžete</strong> zakladať nové témy v tomto fóre',
	'RULES_REPLY_CAN'			=> '<strong>Môžete</strong> odpovedať na témy v tomto fóre',
	'RULES_REPLY_CANNOT'		=> '<strong>Nemôžete</strong> odpovedať na témy v tomto fóre',
	'RULES_VOTE_CAN'			=> '<strong>Môžete</strong> hlasovať v tomto fóre',
	'RULES_VOTE_CANNOT'			=> '<strong>Nemôžete</strong> hlasovať v tomto fóre',

	'SEARCH'					=> 'Hľadať',
	'SEARCH_MINI'				=> 'Hľadaj…',
	'SEARCH_ADV'				=> 'Pokročilé hľadanie',
	'SEARCH_ADV_EXPLAIN'		=> 'Zobraziť možnosti pokročilého hľadania',
	'SEARCH_KEYWORDS'			=> 'Hľadať kľúčové slová',
	'SEARCHING_FORUMS'			=> 'Prehľadáva fórum',
	'SEARCH_ACTIVE_TOPICS'		=> 'Zobraziť aktívne témy',
	'SEARCH_FOR'				=> 'Hľadať',
	'SEARCH_FORUM'				=> 'Hľadať v tomto fóre',
	'SEARCH_NEW'				=> 'Zobraziť nové príspevky',
	'SEARCH_POSTS_BY'			=> 'Hľadať príspevky od',
	'SEARCH_SELF'				=> 'Zobraziť Vaše príspevky',
	'SEARCH_TOPIC'				=> 'Hľadať v tejto téme',
	'SEARCH_UNANSWERED'			=> 'Zobraziť témy bez odpovede',
	'SEARCH_UNREAD'				=> 'Zobraziť neprečítané príspevky',
	'SECONDS'					=> 'Sekúnd',
	'SELECT'					=> 'Vybrať',
	'SELECT_ALL_CODE'			=> 'Vybrať všetko',
	'SELECT_DESTINATION_FORUM'	=> 'Prosím zvoľte cieľové fórum',
	'SELECT_FORUM'				=> 'Zvoľte fórum',
	'SEND_EMAIL'				=> 'E-mail',
	'SEND_EMAIL_USER'			=> 'Poslať e-mail užívateľovi',				// Used as: {L_SEND_EMAIL_USER} {USERNAME} -> E-mail UserX
	'SEND_PRIVATE_MESSAGE'		=> 'Poslať súkromnú správu',
	'SETTINGS'					=> 'Nastavenia',
	'SIGNATURE'					=> 'Podpis',
	'SKIP'						=> 'Skočiť na obsah',
	'SMTP_NO_AUTH_SUPPORT'		=> 'SMTP server nepodporuje prihlásenie',
	'SORRY_AUTH_READ'			=> 'Nie ste oprávnený čítať toto fórum',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'Nie ste oprávnený sťahovať pripojené súbory',
	'SORT_BY'					=> 'Zoradiť podľa',
	'SORT_JOINED'				=> 'Dátumu registrácie',
	'SORT_LOCATION'				=> 'Bydliska',
	'SORT_RANK'					=> 'Hodnosti',
	'SORT_POSTS'						=> 'Príspevky',
	'SORT_TOPIC_TITLE'			=> 'Názvu témy',
	'SORT_USERNAME'				=> 'Užívateľského mena',
	'SPLIT_TOPIC'				=> 'Rozdeliť tému',
	'SQL_ERROR_OCCURRED'		=> 'Chyba SQL servera počas načítavania stránky. Ak problém pretrváva, kontaktujte %sAdministrátora fóra%s.',
	'STATISTICS'				=> 'Štatistiky',
	'START_WATCHING_FORUM'		=> 'Sledovať fórum',
	'START_WATCHING_TOPIC'		=> 'Sledovať tému',
	'STOP_WATCHING_FORUM'		=> 'Ukončiť sledovanie fóra',
	'STOP_WATCHING_TOPIC'		=> 'Ukončiť sledovanie témy',
	'SUBFORUM'					=> 'Sub-fórum',
	'SUBFORUMS'					=> 'Sub-fóra',
	'SUBJECT'					=> 'Predmet',
	'SUBMIT'					=> 'Odoslať',

	'TERMS_USE'			=> 'Pravidlá pre používanie',
	'TEST_CONNECTION'	=> 'Testovať pripojenie',
	'THE_TEAM'			=> 'Tím',
	'TIME'				=> 'Čas',
	'TOO_LARGE'						=> 'Zadaná hodnota je príliš veľká.',
	'TOO_LARGE_MAX_RECIPIENTS'		=> 'Hodnota <strong>Maximálny počet povolených príjemcov súkromnej správy</strong> ktorú ste zadali, je príliš veľká.',
	
	'TOO_LONG'						=> 'Hodnota, ktorú ste zadali, je príliš dlhá.',
	'TOO_LONG_AIM'					=> 'Zadané meno AIM je príliš dlhé.',
	'TOO_LONG_CONFIRM_CODE'			=> 'Zadaný potvrdzovací kód je príliš dlhý.',
	'TOO_LONG_DATEFORMAT'			=> 'Zadaný formát dátumu je príliš dlhý.',
	'TOO_LONG_ICQ'					=> 'Zadané číslo ICQ je príliš dlhé.',
	'TOO_LONG_INTERESTS'			=> 'Zadané záľuby je príliš dlhé.',
	'TOO_LONG_JABBER'				=> 'Zadané meno Jabber účtu je príliš dlhé.',
	'TOO_LONG_LOCATION'				=> 'Zadané bydlisko je príliš dlhé.',
	'TOO_LONG_MSN'					=> 'Zadané meno pre MSN je príliš dlhé.',
	'TOO_LONG_NEW_PASSWORD'			=> 'Zadané heslo je príliš dlhé.',
	'TOO_LONG_OCCUPATION'			=> 'Zadané vzdelanie je príliš dlhé.',
	'TOO_LONG_PASSWORD_CONFIRM'		=> 'Zadané overenie hesla je príliš dlhé.',
	'TOO_LONG_USER_PASSWORD'		=> 'Zadané heslo je príliš dlhé.',
	'TOO_LONG_USERNAME'				=> 'Zadané užívateľské meno je príliš dlhé.',
	'TOO_LONG_EMAIL'				=> 'Zadaná e-mailová adresa je príliš dlhá.',
	'TOO_LONG_EMAIL_CONFIRM'		=> 'Zadané overenie e-mailovej adresy je príliš dlhé.',
	'TOO_LONG_WEBSITE'				=> 'Zadaná adresa internetovej stránky je príliš dlhá.',
	'TOO_LONG_YIM'					=> 'Zadané meno pre yahoo messenger je príliš dlhé.',

	'TOO_MANY_VOTE_OPTIONS'			=> 'Pokúsili ste sa označiť príliš veľa možností.',

	'TOO_SHORT'						=> 'Hodnota, ktorú ste zadali, je príliš krátka.',
	'TOO_SHORT_AIM'					=> 'Zadané meno AIM je príliš krátke.',
	'TOO_SHORT_CONFIRM_CODE'		=> 'Zadaný potvrdzovací kód je príliš krátky.',
	'TOO_SHORT_DATEFORMAT'			=> 'Zadaný formát dátumu je príliš krátky.',
	'TOO_SHORT_ICQ'					=> 'Zadané číslo ICQ je príliš krátke.',
	'TOO_SHORT_INTERESTS'			=> 'Zadaná záľuba je príliš krátka.',
	'TOO_SHORT_JABBER'				=> 'Zadané meno Jabber účtu je príliš krátke.',
	'TOO_SHORT_LOCATION'			=> 'Zadané bydlisko je príliš krátke.',
	'TOO_SHORT_MSN'					=> 'Zadané meno pre MSN je príliš krátke.',
	'TOO_SHORT_NEW_PASSWORD'		=> 'Zadané heslo je príliš krátke.',
	'TOO_SHORT_OCCUPATION'			=> 'Zadané vzdelanie je príliš krátke.',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'Zadané overenie hesla je príliš krátke.',
	'TOO_SHORT_USER_PASSWORD'		=> 'Zadané heslo je príliš krátke.',
	'TOO_SHORT_USERNAME'			=> 'Zadané užívateľské meno je príliš krátke.',
	'TOO_SHORT_EMAIL'				=> 'Zadaná e-mailová adresa je príliš krátka.',
	'TOO_SHORT_EMAIL_CONFIRM'		=> 'Zadané overenie e-mailovej adresy je príliš krátke.',
	'TOO_SHORT_WEBSITE'				=> 'Zadaná adresa internetovej stránky je príliš krátka.',
	'TOO_SHORT_YIM'					=> 'Zadané meno pre yahoo messenger je príliš krátke.',
	'TOO_SMALL'						=> 'Zadaná hodnota je príliš malá.',
	'TOO_SMALL_MAX_RECIPIENTS'		=> 'Hodnota <strong>Maximálny počet povolených príjemcov súkromnej správy</strong> ktorú ste zadali, je príliš malá.',
	'TOPIC'				=> 'Téma',
	'TOPICS'			=> 'Témy',
	'TOPICS_UNAPPROVED'	=> 'Aspoň jedna téma v tomto fóre nebola schválená.',
	'TOPIC_ICON'		=> 'Ikona témy',
	'TOPIC_LOCKED'		=> 'Táto téma je zamknutá, nemôžete posielať nové príspevky alebo odpovedať na staršie.',
	'TOPIC_LOCKED_SHORT'=> 'Téma zamknutá',
	'TOPIC_MOVED'		=> 'Presunutá téma',
	'TOPIC_REVIEW'		=> 'Prehľad témy',
	'TOPIC_TITLE'		=> 'Názov témy',
	'TOPIC_UNAPPROVED'	=> 'Táto téma, nebola schválená',
	'TOTAL_ATTACHMENTS'	=> 'Príloha(y)',
	'TOTAL_LOG'			=> '1 záznam',
	'TOTAL_LOGS'		=> '%d záznamov',
	'TOTAL_NO_PM'		=> 'Žiadna súkromná správa',
	'TOTAL_PM'			=> 'Celkom 1 súkromná správa',
	'TOTAL_PMS'			=> 'Celkovo %d súkromných správ',
	'TOTAL_POSTS'		=> 'Príspevkov celkom',
	'TOTAL_POSTS_OTHER'	=> 'Celkom <strong>%d</strong> príspevkov',
	'TOTAL_POSTS_ZERO'	=> 'Celkom <strong>žiadny</strong> príspevok',
	'TOPIC_REPORTED'	=> 'Táto téma bola nahlásená',
	'TOTAL_TOPICS_OTHER'=> 'Celkom <strong>%d</strong> tém',
	'TOTAL_TOPICS_ZERO'	=> 'Celkom <strong>žiadna</strong> téma',
	'TOTAL_USERS_OTHER'	=> 'Celkovo <strong>%d</strong> užívateľov',
	'TOTAL_USERS_ZERO'	=> 'Celkom <strong>žiadny</strong> užívateľ',
	'TRACKED_PHP_ERROR'	=> 'PHP chyba: %s',

	'UNABLE_GET_IMAGE_SIZE'	=> 'Prístup k obrázku sa nepodaril alebo súbor nie je súborom obrázku.',
	'UNABLE_TO_DELIVER_FILE'=> 'Nebolo možné doručiť súbor.',
	'UNKNOWN_BROWSER'		=> 'Neznámy typ prehliadača',
	'UNMARK_ALL'			=> 'Zrušiť označenie všetkých',
	'UNREAD_MESSAGES'		=> 'Neprečítané správy',
	'UNREAD_PM'				=> '<strong>%d</strong> neprečítaná správa',
	'UNREAD_PMS'			=> '<strong>%d</strong> neprečítaných správ',
	'UNREAD_POST'			=> 'Neprečítaný príspevok',
	'UNREAD_POSTS'			=> 'Neprečítané príspevky',
	'UNWATCHED_FORUMS'		=> 'Už nesledujete vybrané fóra.',
	'UNWATCHED_TOPICS'		=> 'Už nesledujete vybrané témy.',
	'UNWATCHED_FORUMS_TOPICS'   => 'Už nesledujete vybrané položky.',
	'UPDATE'				=> 'Aktualizovať',
	'UPLOAD_IN_PROGRESS'	=> 'Práve prebieha aktualizácia',
	'URL_REDIRECT'			=> 'Ak váš prehliadač nepodporuje meta presmerovanie, kliknite na odkaz %spre presmerovanie%s .',
	'USERGROUPS'			=> 'Skupiny',
	'USERNAME'				=> 'Užívateľské meno',
	'USERNAMES'				=> 'Uživateľské mená',
	'USER_AVATAR'			=> 'Obrázok užívateľa',
	'USER_CANNOT_READ'		=> 'Nemôžete čítať príspevky v tejto téme',
	'USER_POST'				=> '%d Príspevok',
	'USER_POSTS'			=> '%d Príspevky',
	'USERS'					=> 'Užívatelia',
	'USE_PERMISSIONS'		=> 'Otestovať užívateľské oprávnenia',
	'USER_NEW_PERMISSION_DISALLOWED'	=> 'Je nám ľúto, ale túto funkciu zatiaľ nemôžete využiť. Ste na fóre registrovaný ešte krátko a je potrebné, aby ste sa viac podieľali na fóre pre povolenie týchto funkcií.',


	'VARIANT_DATE_SEPARATOR'	=> ' / ',	// Used in date format dropdown, eg: "Today, 13:37 / 01 Jan 2007, 13:37" ... to join a relative date with calendar date
	'VIEWED'					=> 'Zobrazené',
	'VIEWING_FAQ'				=> 'Prezerá FAQ',
	'VIEWING_MEMBERS'			=> 'Prezerá užívateľov',
	'VIEWING_ONLINE'			=> 'Prezerá Kto je on-line',
	'VIEWING_MCP'				=> 'Prezerá moderátorský ovládací panel',
	'VIEWING_MEMBER_PROFILE'	=> 'Prezerá užívateľský profil',
	'VIEWING_PRIVATE_MESSAGES'	=> 'Prezerá súkromné správy',
	'VIEWING_REGISTER'			=> 'Registruje nový účet',
	'VIEWING_UCP'				=> 'Prezerá si užívateľský panel',
	'VIEWS'						=> 'Zobrazenia',
	'VIEW_BOOKMARKS'			=> 'Zobrazenie záložiek',
	'VIEW_FORUM_LOGS'			=> 'Zobrazenie logov fóra',
	'VIEW_LATEST_POST'			=> 'Zobrazenie posledných príspevkov',
	'VIEW_NEWEST_POST'			=> 'Zobraziť posledný príspevok bez odpovede',
	'VIEW_NOTES'				=> 'Zobraziť užívateľove poznámky',
	'VIEW_ONLINE_TIME'			=> 'založené na aktivite užívateľov za poslednú %d minútu',
	'VIEW_ONLINE_TIMES'			=> 'založené na aktivite užívateľov za posledných %d minút',
	'VIEW_TOPIC'				=> 'Zobrazenie témy',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Oznámenie: ',
	'VIEW_TOPIC_GLOBAL'			=> 'Globálne oznámenie: ',
	'VIEW_TOPIC_LOCKED'			=> 'Zamknuté: ',
	'VIEW_TOPIC_LOGS'			=> 'Zobrazenie logov témy',
	'VIEW_TOPIC_MOVED'			=> 'Presunuté: ',
	'VIEW_TOPIC_POLL'			=> 'Hlasovanie: ',
	'VIEW_TOPIC_STICKY'			=> 'Dôležité: ',
	'VISIT_WEBSITE'				=> 'Navštívte internetovú stránku',

	'WARNINGS'			=> 'Varovania',
	'WARN_USER'			=> 'Upozorniť užívateľa',
	'WELCOME_SUBJECT'	=> 'Vitajte na fóre %s',
	'WEBSITE'			=> 'Internetová stránka',
	'WHOIS'				=> 'Kto je to',
	'WHO_IS_ONLINE'		=> 'Kto je on-line',
	'WRONG_PASSWORD'	=> 'Zadali ste neplatné heslo.',
	

	'WRONG_DATA_ICQ'			=> 'Zadané číslo nie je správne číslo ICQ.',
	'WRONG_DATA_JABBER'			=> 'Zadané meno nie je správne pre jabber účet.',
	'WRONG_DATA_LANG'			=> 'Zadaný jazyk je neplatný.',
	'WRONG_DATA_WEBSITE'		=> 'Zadaná adresa musí byť platná vrátane protokolu. Napríklad: http://www.example.com/.',
  'WROTE'             => 'píše',
   
	'YEAR'				=> 'Rok',
	'YEAR_MONTH_DAY'	=> '(RRRR-MM-DD)',
	'YES'				=> 'Áno',
	'YIM'				=> 'YIM',
	'YOU_LAST_VISIT'	=> 'Posledná návšteva %s',
	'YOU_NEW_PM'		=> 'Máte novú súkromnú správu vo vašej schránke prijatých správ',
	'YOU_NEW_PMS'		=> 'Máte nové súkromné správy vo vašej schránke prijatých správ',
	'YOU_NO_NEW_PM'		=> 'Žiadne nové súkromné správy',

	'datetime'			=> array(
		'TODAY'		=> 'Dnes, ',
		'TOMORROW'	=> 'Zajtra, ',
		'YESTERDAY'	=> 'Včera, ',
		'AGO'		=> array(
			0		=> 'menej ako pred minútou',
			1		=> 'pred %d minút',
			2		=> 'pred %d minút',
			60		=> 'pred hodinou',
		),

		'Sunday'	=> 'Nedeľa',
		'Monday'	=> 'Pondelok',
		'Tuesday'	=> 'Utorok',
		'Wednesday'	=> 'Streda',
		'Thursday'	=> 'Štvrtok',
		'Friday'	=> 'Piatok',
		'Saturday'	=> 'Sobota',

		'Sun'		=> 'Ned',
		'Mon'		=> 'Pon',
		'Tue'		=> 'Uto',
		'Wed'		=> 'Str',
		'Thu'		=> 'Štv',
		'Fri'		=> 'Pia',
		'Sat'		=> 'Sob',

		'January'	=> 'Január',
		'February'	=> 'Február',
		'March'		=> 'Marec',
		'April'		=> 'Apríl',
		'May'		=> 'Máj',
		'June'		=> 'Jún',
		'July'		=> 'Júl',
		'August'	=> 'August',
		'September' => 'September',
		'October'	=> 'Október',
		'November'	=> 'November',
		'December'	=> 'December',

		'Jan'		=> 'Jan',
		'Feb'		=> 'Feb',
		'Mar'		=> 'Mar',
		'Apr'		=> 'Apr',
		'May_short'	=> 'Máj',	// Short representation of "May". May_short used because in english the short and long date are the same for May.
		'Jun'		=> 'Jún',
		'Jul'		=> 'Júl',
		'Aug'		=> 'Aug',
		'Sep'		=> 'Sep',
		'Oct'		=> 'Okt',
		'Nov'		=> 'Nov',
		'Dec'		=> 'Dec',
	),

	'tz'				=> array(
		'-12'	=> 'GMT - 12 hodín',
		'-11'	=> 'GMT - 11 hodín',
		'-10'	=> 'GMT - 10 hodín',
		'-9.5'	=> 'GMT - 9:30 hodín',
		'-9'	=> 'GMT - 9 hodín',
		'-8'	=> 'GMT - 8 hodín',
		'-7'	=> 'GMT - 7 hodín',
		'-6'	=> 'GMT - 6 hodín',
		'-5'	=> 'GMT - 5 hodín',
		'-4.5'	=> 'GMT - 4:30 hodín',
		'-4'	=> 'GMT - 4 hodiny',
		'-3.5'	=> 'GMT - 3:30 hodín',
		'-3'	=> 'GMT - 3 hodiny',
		'-2'	=> 'GMT - 2 hodiny',
		'-1'	=> 'GMT - 1 hodina',
		'0'		=> 'GMT',
		'1'		=> 'GMT + 1 hodina',
		'2'		=> 'GMT + 2 hodiny',
		'3'		=> 'GMT + 3 hodiny',
		'3.5'	=> 'GMT + 3:30 hodín',
		'4'		=> 'GMT + 4 hodiny',
		'4.5'	=> 'GMT + 4:30 hodín',
		'5'		=> 'GMT + 5 hodín',
		'5.5'	=> 'GMT + 5:30 hodín',
		'5.75'	=> 'GMT + 5:45 hodín',
		'6'		=> 'GMT + 6 hodín',
		'6.5'	=> 'GMT + 6:30 hodín',
		'7'		=> 'GMT + 7 hodín',
		'8'		=> 'GMT + 8 hodín',
		'8.75'	=> 'GMT + 8:45 hodín',
		'9'		=> 'GMT + 9 hodín',
		'9.5'	=> 'GMT + 9:30 hodín',
		'10'	=> 'GMT + 10 hodín',
		'10.5'	=> 'GMT + 10:30 hodín',
		'11'	=> 'GMT + 11 hodín',
		'11.5'	=> 'GMT + 11:30 hodín',
		'12'	=> 'GMT + 12 hodín',
		'12.75'	=> 'GMT + 12:45 hodín',
		'13'	=> 'GMT + 13 hodín',
		'14'	=> 'GMT + 14 hodín',
		'dst'	=> '[ letný čas ]',
	),

	'tz_zones'	=> array(
		'-19'	=> '[GMT - 199] Pluto Time',
		'-12'	=> '[GMT - 12] Baker Island Time',
		'-11'	=> '[GMT - 11] Niue Time, Samoa Standard Time',
		'-10'	=> '[GMT - 10] Hawaii-Aleutian Standard Time, Cook Island Time',
		'-9.5'	=> '[GMT - 9:30] Marquesas Islands Time',
		'-9'	=> '[GMT - 9] Alaska Standard Time, Gambier Island Time',
		'-8'	=> '[GMT - 8] Pacific Standard Time',
		'-7'	=> '[GMT - 7] Mountain Standard Time',
		'-6'	=> '[GMT - 6] Central Standard Time',
		'-5'	=> '[GMT - 5] Eastern Standard Time',
		'-4.5'	=> '[GMT - 4:30] Venezuelan Standard Time',
		'-4'	=> '[GMT - 4] Atlantic Standard Time',
		'-3.5'	=> '[GMT - 3:30] Newfoundland Standard Time',
		'-3'	=> '[GMT - 3] Amazon Standard Time, Central Greenland Time',
		'-2'	=> '[GMT - 2] Fernando de Noronha Time, South Georgia &amp; the South Sandwich Islands Time',
		'-1'	=> '[GMT - 1] Azores Standard Time, Cape Verde Time, Eastern Greenland Time',
		'0'		=> '[GMT] Western European Time, Greenwich Mean Time',
		'1'		=> '[GMT + 1] Bratislava, Central European Time, West African Time',
		'2'		=> '[GMT + 2] Eastern European Time, Central African Time',
		'3'		=> '[GMT + 3] Moscow Standard Time, Eastern African Time',
		'3.5'	=> '[GMT + 3:30] Iran Standard Time',
		'4'		=> '[GMT + 4] Gulf Standard Time, Samara Standard Time',
		'4.5'	=> '[GMT + 4:30] Afghanistan Time',
		'5'		=> '[GMT + 5] Pakistan Standard Time, Yekaterinburg Standard Time',
		'5.5'	=> '[GMT + 5:30] Indian Standard Time, Sri Lanka Time',
		'5.75'	=> '[GMT + 5:45] Nepal Time',
		'6'		=> '[GMT + 6] Bangladesh Time, Bhutan Time, Novosibirsk Standard Time',
		'6.5'	=> '[GMT + 6:30] Cocos Islands Time, Myanmar Time',
		'7'		=> '[GMT + 7] Indochina Time, Krasnoyarsk Standard Time',
		'8'		=> '[GMT + 8] Chinese Standard Time, Australian Western Standard Time, Irkutsk Standard Time',
		'8.75'	=> '[GMT + 8:45] Southeastern Western Australia Standard Time',
		'9'		=> '[GMT + 9] Japan Standard Time, Korea Standard Time, Chita Standard Time',
		'9.5'	=> '[GMT + 9:30] Australian Central Standard Time',
		'10'	=> '[GMT + 10] Australian Eastern Standard Time, Vladivostok Standard Time',
		'10.5'	=> '[GMT + 10:30] Lord Howe Standard Time',
		'11'	=> '[GMT + 11] Solomon Island Time, Magadan Standard Time',
		'11.5'	=> '[GMT + 11:30] Norfolk Island Time',
		'12'	=> '[GMT + 12] New Zealand Time, Fiji Time, Kamchatka Standard Time',
		'12.75'	=> '[GMT + 12:45] Chatham Islands Time',
		'13'	=> '[GMT + 13] Tonga Time, Phoenix Islands Time',
		'14'	=> '[GMT + 14] Line Island Time',
		'19'	=> '[GMT + 199] Mercury Time',
	),

	// The value is only an example and will get replaced by the current time on view
	'dateformats'	=> array(
		'd M Y, H:i'			=> '01 Jan 2007, 13:37',
		'd M Y H:i'				=> '01 Jan 2007 13:37',
		'M jS, \'y, H:i'		=> 'Jan 1., \'07, 13:37',
		'D M d, Y g:i a'		=> 'Pon Jan 01, 2007 1:37 pm',
		'F jS, Y, g:i a'		=> 'Január 1., 2007, 1:37 pm',
		'|d M Y|, H:i'			=> 'Dnes, 13:37 / 01 Jan 2007, 13:37',
		'|F jS, Y|, g:i a'		=> 'Dnes, 1:37 pm / Január 1., 2007, 1:37 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> 'D d. M Y G:i:s', // po 10. leden 2005 17:57:23

));

/*
* Portal XL related language definitions
*/

// Portal
$lang = array_merge($lang, array(
    'PORTAL_MODS'			=> 'Databáza Módu',	
));

// [img] Resize Width Images
$lang = array_merge($lang, array(
	'IMG_CLICK_HERE'	=> 'Kliknutím zobrazím plnú veľkosť zobrazenia!',
));

// Event Calendar
$lang = array_merge($lang, array(
	'CALENDAR'		=> 'Kalendár',
	// minical short day names	
	'mini_datetime'	=> array(
		  'Su'		=> 'Ne',
		  'Mo'		=> 'Po',
		  'Tu'		=> 'Ut',
		  'We'		=> 'Str',
		  'Th'		=> 'Štv',
		  'Fr'		=> 'Pia',
		  'Sa'		=> 'So',
	),
));


// Animate Digits IP Tracking Counter
$lang = array_merge($lang, array(
	'COUNTER' 			=> 'Bilancia Návštev',
	'COUNTER_STARTDATE' => 'Počet od %s',
	'HITS_PER_DAY'		=> 'Záznamov za deň',
	'HITS_PER_HOUR'		=> 'Záznamov za hodinu',
	'HITS_PER_MONTH'	=> 'Záznamov za mesiac',
	'HITS_PER_USER'		=> 'Záznamov na uživateľa',
	'HITS_PER_WEEK'		=> 'Záznamov za týždeň',
	'HITS_PER_YEAR'		=> 'Záznamov za rok',
	'IP_TRACKING_NO' 	=> '[Žiadna IP nie je Sledovaná]',
	'IP_TRACKING_YES' 	=> '[Sledujem IP]',
));

// Knowledge Base
$lang = array_merge($lang, array(
	'KNOWLEDGE_BASE'	=> 'Poznatky',
	'KBASE'				=> 'Báza Poznatkov',
));

// Anti Bot Question
$lang = array_merge($lang, array(
	'AB_QUESTION_EXPLAIN'	=> 'Pre ochranu proti spamu. Prosím vyriešte vyššie uvedenú otázku.',
));

// start Thank Post MOD
$lang = array_merge($lang, array(
	'REMOVE_THANKS'			=> 'Odstránim poďakovanie ktoré ste dal užívateľovi: ',
	'THANK_POST1'			=> 'Poďakujem užívateľovi: ',
	'THANK_POST2'			=> ' za príspevok',
	'THANK_TEXT_1'			=> 'Uživateľovi',
	'THANK_TEXT_2'			=> '',
	'THANK_TEXT_2pl'		=> 'uživatelia',
	'THANK_GENDER_F'		=> 'poďakoval jej za príspevok',
	'THANK_GENDER_M'		=> 'poďakoval za príspevok',
	'THANK_GENDER_U'		=> 'poďakoval za príspevok',
	'RECEIVED'				=> 'Obdržal',
	'THANKS'				=> 'x Ďakujem',
	'GIVEN'					=> 'Udelil',
	'TP_UPDATED'			=> 'Inštalácia Módu Odoslania ďakovania bola aktualizovaná na 0.4.0! Prosím obnov túto stránku pritom ti prajem pekný deň!',
));
// end Thank Post MOD

// Posts per day
$lang = array_merge($lang, array(
	'POSTS_PER_DAY_OTHER'	=> 'Pridaných príspevkov je <strong>%.2f</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'Pridaných príspevkov je <strong>Nie sú žiadne</strong>',
));

// Announcements Centre
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TITLE_GUESTS'		=> 'Upozornenie',
	'ANNOUNCEMENT_TITLE'			=> 'Upozornenie',
));

// Portal FAQ
$lang = array_merge($lang, array(
	'FAQ_PORTAL'				=> 'Portál FAQ',
	'FAQ_PORTAL_EXPLAIN'		=> 'Portál, Odpovede na Často Kladené Otázky',
));

// Rules page
$lang = array_merge($lang, array(
	'RULES_PAGE'				=> 'Pravidlá Portálu',
	'RULES'						=> 'Pravidlá',
));

// Similar Topics 1.0.0
$lang = array_merge($lang, array(
	'SIMILAR_TOPICS'			=> 'Odsúhlasenie tém',
));

/*
 * Welcome PM on First Login (WPM)
 * By DualFusion
 */
$lang = array_merge($lang, array(
	'ACP_WELCOME_PM'		=> 'Prvé Prihlásenie SS',
	'LOG_CONFIG_WELCOME_PM'	=> '<strong>Zmena Nastavenia, Uvítanie v Súkromnej Správe</strong>',
));
/* End WPM */

//-- mod : Contact board administration ------------------------------------------------------------
//-- add
$lang = array_merge($lang, array(
	'CONTACT_BOARD_ADMIN'		=> 'Kontaktovanie Administrátora',
	'CONTACT_BOARD_ADMIN_SHORT'	=> 'Kontakt',
));
//-- fin mod : Contact board administration --------------------------------------------------------

// start mod view or mark unread posts
$lang = array_merge($lang, array(
	'LOGIN_EXPLAIN_VIEWUNREADS'	=> 'Musíte byť prihlásený aby som zobrazil váš zoznam neprečítaných príspevkov',
	'MARK_PM_UNREAD'			=> 'Označím súkromnú správu ako neprečítanú',
	'MARK_POST_UNREAD'			=> 'Označím príspevok ako neprečítaný',
	'NO_UNREADS'				=> 'Neprečítané príspevky',
	'PM_MARKED_UNREAD'			=> 'Súkromné správy označené ako neprečítané',
	'POST_MARKED_UNREAD'		=> 'Príspevky označené ako neprečítané',
	'RETURN_INBOX'				=> 'Vrátim sa späť do súkromných správ',
	'VIEW_UNREAD_PMS'			=> 'Zobrazím neprečítané súkromné správy',
	'VIEW_UNREADS'				=> 'Neprečítané príspevky',
));
// end mod view or mark unread posts

// Character Countdown
$lang = array_merge($lang, array(
	'CHARACTERS_COUNT_DOWN'			=> 'Zadané znaky:',
));

// www.phpBB-SEO.com SEO TOOLKIT BEGIN -> GYM Sitemaps
$lang = array_merge($lang, array(
	'GYM_LINKS' => 'Linky',
	'GYM_LINK' => 'Link',
	'GYM_RSS_SLIDE_START' => 'Spustím rolovanie',
	'GYM_RSS_SLIDE_STOP' => 'Zastavím rolovanie',
	'GYM_RSS_SOURCE' => 'Zdroj',
));
// www.phpBB-SEO.com SEO TOOLKIT END -> GYM Sitemaps

// Radio Mod
$lang = array_merge($lang, array(
	'RADIO' => 'Rádio',
	'TV' => 'Televízia',
));

// phpbb Calendar Version 0.1.0
$lang = array_merge($lang, array(
	'VIEWING_CALENDAR'			=> 'Prezeranie kalendára',
	'VIEWING_CALENDAR_DAY'		=> 'Kalendár bol zobrazený za deň',
	'VIEWING_CALENDAR_EVENT'	=> 'Zobrazené udalosti kalendára boli',
	'VIEWING_CALENDAR_MONTH'	=> 'Kalendár bol zobrazený za mesiac',
	'VIEWING_CALENDAR_WEEK'		=> 'Kalendár bol zobrazený za týždeň',
	'EDITING_CALENDAR_EVENT'	=> 'Upravených udalostí v kalendáry bolo',
	'CREATING_CALENDAR_EVENT'	=> 'Vytvorených udalostí v kalendáry je',
));

// Country Flags Version 3.0.6
$lang = array_merge($lang, array(
	'COUNTRY'			=> 'Krajina',
	'COUNTRY_FLAGS'		=> 'Vlajka kraliny',
	'TOO_SHORT_FLAG'	=> 'Musíte zadať vlajku svojej krajiny',
	'GROUP_FLAG'		=> 'Skupina národných vlajok',
	'SELECT_FLAG'		=> 'Vyberte vašu národnú vlajku',
	'SORT_FLAG'			=> 'Vlajka kraliny',
	'USER_FLAG'			=> 'Uživateľova Vlajka kraliny',
));

// -- Gender MOD 1.0.1
$lang = array_merge($lang, array(
	'GENDER'			=> 'Pohlavie',
	'GENDER_EXPLAIN'	=> 'Prosím, zadajte svoje pohlavia.',
	'GENDER_X'			=> 'Bez zadania',
	'GENDER_M'			=> 'Muž',
	'GENDER_F'			=> 'Žena',
));

// Google Search
$lang = array_merge($lang, array(
	'SEARCH_GOOGLE' 	=> 'Vyhľadám v Google?',
));

// phpBB AJAX Chat
$lang = array_merge($lang, array(
	'SHOUTBOX'		=> 'Chat',
	'CHAT_LABEL'	=> 'V Chate',
	'CHAT_TITLE'	=> 'Online',
	'CHAT_WINDOW'	=> 'Chat v Okne',
));

// AdvancedBlockMOD 1.0.3						
$lang = array_merge($lang, array(
	'WRONG_TIMEZONE'	=> 'You entered an incorrect timezone. Please stay on earth!',
));

// Mod_Share_On by JesusADS
$lang = array_merge($lang, array(
	'SHARE_ON'				=> 'Share on ...',
	'SHARE_FACEBOOK'		=> 'Facebook',
	'SHARE_TWITTER'			=> 'Twitter',
	'SHARE_ORKUT'			=> 'Orkut',
	'SHARE_DIGG'			=> 'Digg',
	'SHARE_MYSPACE'			=> 'MySpace',
	'SHARE_DELICIOUS'		=> 'Delicious',
	'SHARE_TECHNORATI'		=> 'Technorati',

	'SHARE_ON_FACEBOOK'		=> 'Share on Facebook',
	'SHARE_ON_TWITTER'		=> 'Share on Twitter',
	'SHARE_ON_ORKUT'		=> 'Share on Orkut',
	'SHARE_ON_DIGG'			=> 'Share on Digg',
	'SHARE_ON_MYSPACE'		=> 'Share on MySpace',
	'SHARE_ON_DELICIOUS'	=> 'Share on Delicious',
	'SHARE_ON_TECHNORATI'	=> 'Share on Technorati',
));

// Toplist MOD 2.0.0RC3						
$lang = array_merge($lang, array(
    'VIEWING_TOPLIST'       => 'Viewing the Top Sites',
));


?>