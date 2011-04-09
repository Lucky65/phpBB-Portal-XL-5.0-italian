<?php
/** 
*
* @name portal_xl.php [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_xl.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
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

global $config, $user;

$lang = array_merge($lang, array(

	// general definitions
	'PORTAL'			=> 'Portál',
	'PORTAL_INDEX'		=> 'Portál index',
	'ANNOUNCMENTS'		=> 'Oznámenia',
	'NEWS'			    => 'Nové',
	'POLL'			    => 'Hlasovanie',
	'NO_POLL'			=> 'Zatial nikdo nehlasoval',
	'READ_FULL'			=> 'Prečítať všetko',
	'NO_NEWS'			=> 'Žiadne správy',
	'POSTED_BY'			=> 'Odosielateľ',
	'COMMENTS'			=> 'Komentáre',
	'VIEW_COMMENTS'		=> 'Zobrazím komentáre',
	'POST_REPLY'		=> 'Reagovať komentárom',
	'CLOCK'				=> 'Hodiny',
	'TOPIC_VIEWS'		=> 'Zobrazené',
	'FORUMS'		    => 'Fóra',
	'EXPAND'		    => 'Rozbalím',
	'COLLAPSE'		    => 'Zbalím',
	'INVERT'		    => 'Zmeniť',
	'LEFTCOL'		    => 'Vľavo +/-',
	'RIGHTCOL'		    => 'Vpravo +/-',

	// who is online
	'WIO_TOTAL'			=> 'Celkom',
	'WIO_REGISTERED'	=> 'Registrovaný',
	'WIO_HIDDEN'		=> 'Skrytý',
	'WIO_GUEST'			=> 'Hostia',
	//'RECORD_ONLINE_USERS'=> 'Zobraziť záznam: <strong>%1$s</strong><br />%2$s',

	// welcome
	'WELCOME'			=> 'Zdravím všetkých návštevníkov tejto stránky',
	
	// mp3 player
	'MEDIA_PLAYER'			=> 'Prehrávač médií',
	'MEDIA_PLAYER_POPUP'	=> 'Prehrávač médií',
	'MEDIA_UPLOAD'			=> 'Nahrať médium',
	'MEDIA_PLAYER_VERSION'	=> 'Prehrávač Médií 2008',

	// user menu
	'USER_MENU'			=> 'Uživateľská ponuka',
	'UM_LOG_ME_IN'		=> 'Pripomeň mi',
	'UM_HIDE_ME'		=> 'Skry ma',
	'UM_MAIN_SUBSCRIBED'=> 'Správa sledovaní',
	'UM_BOOKMARKS'		=> 'Správa záložiek',

	// statistic
	'ST_NEW'				=> 'Nové',
	'ST_NEW_POSTS'			=> 'Príspevky',
	'ST_NEW_TOPICS'			=> 'Témy',
	'ST_NEW_ANNS'			=> 'Oznámenia',
	'ST_NEW_STICKYS'		=> 'Dôležité',
	'ST_TOP'				=> 'Celkom',
	'ST_TOP_ANNS'			=> 'Oznámenia',
	'ST_TOP_STICKYS'		=> 'Dôležité',
	'ST_TOT_ATTACH'			=> 'Prílohy',
	'ST_TOT_FILES'			=> 'Súbory',
	'ST_PORTAL_STARTDATE'	=> 'Dnes je:',

	'FILES_ATTACHMENTS'		=> 'Štatistika príloh',
	'FILES_PER_DAY'			=> 'Prílohy za deň',
	'FILES_PER_POST'		=> 'Prílohy k príspevkom',
	'FILES_PER_TOPIC'		=> 'Prílohy k témam',
	'FILES_PER_USER'		=> 'Prílohy na uživateľa',

	// visit counter
	'ST_TOT_VISIT'				=> 'Celkom návštev',
	'ST_LAT_VISIT'				=> 'Tvoja IP je:',

	// attachments
	'TOP_COUNT'         		=> 'Stiahnutia',
	'TOP_DATE'         			=> 'Uverejnené o',
	'TOP_FILENAME'         		=> 'Súbory',
	'TOP_FILESIZE'         		=> 'Veľkosť',
	'TOP_TEL'         			=> 'Najviac Sťahované',
	'TOP_X'         			=> 'x',
	'VIEW_TOPIC_ATTACHMENTS' 	=> 'Celkom príloh',

	// search
	'SH'		=> 'go',
	'SH_SITE'	=> 'fórum',
	'SH_POSTS'	=> 'príspevky',
	'SH_AUTHOR'	=> 'autor',
	'SH_ENGINE'	=> 'kde hľadať',
	'SH_ADV'	=> 'rozšitené hľadanie',
	
	// recent
	'RECENT_TOPIC'		=> 'Nové príspevky',
	'RECENT_ANN' 		=> 'Oznámenia',
	'RECENT_HOT_TOPIC' 	=> 'Nové odpovede',
	'LAST_REPLIED'      => 'Zadal',
   	'BY'            	=> 'p.',
   	'ON'            	=> 'V',
   
	// random member
	'RND_MEMBER'	=> 'Ľubovoľný  člen',
	'RND_JOIN'		=> 'Založený',
	'RND_POSTS' 	=> 'Príspevky',
	'RND_OCC' 		=> 'Povolanie',
	'RND_FROM' 		=> 'Lokalizácia',
	'RND_WWW' 		=> 'Web.stránka',

	// random banners
	'RND_B_BANNERS'	=> 'Ľubovoľné Linky', // normal banners (88x31) on portal
	'RND_H_BANNERS'	=> 'Ľubovoľný Baner', // horizontal banners ( ) on portal
	'RND_V_BANNERS'	=> 'Ľubovoľný Baner', // vertical banners (130x600) on portal
	
	// random member
	'GOOGLE_ADDS'		=> 'Google/Pridanie Partnera',
	'GOOGLE_ADDS_TXT'	=> 'Sem umiestnite pridaných!',

	// most poster
	'MOST_POSTER' => 'Najlepší odosielateľ',

	// links
	'LINKS' => 'Linky',

	// latest members
	'LATEST_MEMBERS' => 'Najnovší členovia',

	// make donation
	'DONATION' 		=> 'Dať dar',
	'DONATION_TEXT' => 'je podpora za služby bez zámeru nejakého príjmu. Každý kto chce môže podporiť tento portál a to darom tak, že sa platba použieje za server, alebo doménu a iné veci ktoré sú potrebné financovať pre kvalitný chod Fóra či Portálu.',
	'PAY_MSG'		=> 'Po zadaní čiastky z ponuky ktorú chcete darovať, môžete prejsť ďalej kliknutím na obrázok pre zadanie Výplaty cez Internet ("PayPal").',
	'PAY_ITEM' 		=> 'Podarovanie', // paypal item
	'CURRENCY_MSG' 	=> 'Voľba meny: ',
	'AMOUNT_MSG' 	=> 'Zadajte, koľko chcete darovať: ',
	'CLICK_MSG' 	=> 'Kliknutím prejdete na stránku paypal',

	// main menu
	'M_MENU' 		=> 'Ponuka',
	'M_CONTENT' 	=> 'Obsah',
	'M_ACP'       => 'ACP', // short name
	'M_MCP'       => 'MCP', // short name
	'M_HELP' 		=> 'Pomoc',
	'M_BBCODE' 		=> 'BBCode FAQ',
	'M_TERMS' 		=> 'Pravidlá pre použivanie',
	'M_PRV' 		=> 'Ochrana súkromia',
	'M_SEARCH' 		=> 'Hľadať',

	// link us
	'LINK_US' 		=> 'Odkaz na náš Portál',
	'LINK_US_TXT' 	=> '<strong>%s</strong> Pre vzájomnú spoluprácu. Link na náš Portál je, cez nasledujúce HTML:',

	// friends
	'FRIENDS'				=> 'Priatelia',
	'FRIENDS_OFFLINE'		=> 'Offline',
	'FRIENDS_ONLINE'		=> 'Online',
	'NO_FRIENDS'			=> 'Aktuálne nie sú žiadny priatelia zadefinovaný',
	'NO_FRIENDS_OFFLINE'	=> 'Nie sú žiadny priatelia offline',
	'NO_FRIENDS_ONLINE'		=> 'Nie sú žiadny priatelia online',
	
	// last bots
	'LAST_VISITED_BOTS'		=> 'Posledná návšteva botov %s',
	
	// wordgraph
   	'WORDGRAPH'				=> 'Wordgraph',
   
	// change style
   	'BOARD_STYLES'			=> 'Štýly Panelu',
   	'VIEW_STYLES'			=> 'Náhlad štýlov',
   	'TOTAL_STYLES'			=> 'Dostupné štýly',
    'STYLE_SELECT'          => 'Volba štýlu',
	
	// team
	'NO_ADMINISTRATORS_P'	=> 'Nie sú prítomný žiadny administrátory',
	'NO_MODERATORS_P'		=> 'Nie sú prítomný žiadny moderátory',

	// chatbox
    'CHAT'                  => 'Chat',
	'VIEWING_CHAT'          => 'Zobrazím zadanie z Chatom',
	'CHAT_EXPLAIN'			=> 'Centrálny Chat',

	// weather
   	'PORTAL_WEATHER'         => 'Počasie',

	// syndicate
   	'PORTAL_SYNDICATE'       => 'Združenia',

	// navx
   	'PORTAL_NAVX'            => 'Navigácia-X',

	// last visitors
   	'L_LAST_VISIT' 			=> 'Posledný %s zaznamenaný hostia',

   	// Visit Counter
   	'VISIT_COUNTER_1' 		=> 'Panel bol <b>%d</b> návštívený od %s',
	'VISIT_COUNTER_2'		=> 'Panel bol <b>%d</b> návštívený od Nedele, 7. Júna, 2009',
	'VISIT_COUNTER_3'		=> 'Stránka bola <b>%d</b> zobrazená od %s',
   	'VISIT_COUNTER' 		=> 'Navštívenia',

   	// gallery
   	'L_GALLERY'         	=> 'Galéria Obrázkov',

   	// forum categories
	'FCATEGORIES'			=> 'Kategórie vo Fóre',
	
	// actual topics scroll block
	'RECENT_ACTUAL_TOPIC'		=> 'Nové témy',
	'RECENT_ACTUAL_ANN' 		=> 'Nové oznámenia',
	'RECENT_ACTUAL_HOT_TOPIC' 	=> 'Populárne témy',
    'RECENT_ACTUAL_ANN_NO'      => 'Ľutujem, ale nenašiel som žiadne oznámenia',
	 	
   	// similar topics
	'SIMILAR_TOPICS'			=> 'Podobné témy',
	
   	// downloads
	'L_DOWNLOADS'				=> 'Voľné downloady',

   	// jumpbox RC4
	'RETURN_TO_SEARCH_ADV'	    => 'Späť do rozšíreného hľadania',
	'RETURN_TO'					=> 'Naspäť na',
	
   	// php info
	'PHP_INFO_EXPLAIN'			=> 'Server Info',
	'DATABASE_SERVER_INFO'		=> 'Databáza Servera',
	'GZIP_COMPRESSION'			=> 'Kompresia GZip ',
	'OFF'						=> 'Vypnúť',
	'ON'						=> 'Zapnúť',
	'OS_INFO'					=> 'Operačný systém',
	'PHP_INFO'					=> 'Spracovateľ Skriptu',
	'WEBSERVER_INFO'			=> 'Typ Webservera',
	
    //Last Visit MOD
	'LAST_VISITS'				=> 'Posledné Návštevy',
	'NO_LASTVISIT_USERS' 		=> 'Nie sú tu žiadny registrovaný uživatelia',
	
	'GUEST_VISITS_TOTAL'			=> '%d hostí',
	'GUEST_VISITS_ZERO_TOTAL'	=> '0 hostí',
	'GUEST_VISIT_TOTAL'			=> '%d hosť',

	'HIDDEN_VISITS_TOTAL'		=> '%d skrytý a ',
	'HIDDEN_VISITS_ZERO_TOTAL'	=> '0 skrytý a ',
	'HIDDEN_VISIT_TOTAL'		=> '%d skrytý a ',

	'LASTVISIT_VISITS_TOTAL'		=> 'Boli tu uživatelia <strong>%d</strong> za posledných 24 hodín :: ',
	'LASTVISIT_VISITS_ZERO_TOTAL'	=> 'Boli tu uživatelia <strong>0</strong> za posledných 24 hodín  :: ',
	'LASTVISIT_VISIT_TOTAL'			=> 'Boli tu uživatelia <strong>%d</strong> za posledných 24 hodín :: ',
	
	'REG_VISITS_TOTAL'			=> '%d registrovaný, ',
	'REG_VISITS_ZERO_TOTAL'		=> '0 registrovaný, ',
	'REG_VISIT_TOTAL'			=> '%d registrovaný, ',

    // quotes
	'QUOTES_INFO'			    => 'Citácie na tento deň',

    // partners
	'PARTNERS_INFO'			    => 'Partnery *',

    // scroll message
    'SCROLL_MESSAGE' 			=> 'Info Správy',

    // crawler linker
    'CRAWLER_LINKS_TOTAL' 		=> 'Crawler Celkom linkov',
    'CRAWLER_LINKS' 			=> 'Crawler',

    // portal mods
	'MODS_DATABASE'				=> 'Databáza Módov',
	'MODS_DATABASE_EXPLAIN'		=> 'Tu si môžete menežovať vašu Databázu Módov a to pridat, upraviť alebo ich vymazať z databázy Módov.',
	'MOD_ADD'					=> 'Pridať Mód',
	'MOD_ADDED'					=> 'Nový Mód bol úspešne pridaný.',
	'MOD_DELETED'				=> 'Mód bol úspešne vymazaný.',
	'MOD_EDIT'					=> 'Upravenie Módov',
	'MOD_EDIT_EXPLAIN'			=> 'Tu si môžete pridať alebo editovať zadané hodnoty existujúceho Módu. Názov a číslo verzie sú v zadaní povinné. Ďalej sú tu detaily, kde sa dá Mód stiahnuť a kde sa samotný Mód nachádza.',
	'BOT_NAME'					=> 'Názov Bota',
	'BOT_NAME_EXPLAIN'			=> 'Použiva sa len pre vašu vlastnú informáciu.',
	'MOD_NAME_TAKEN'			=> 'Tento názov v Databáze Módov je už použitý a preto nemôže byť použitý znova.',
	'MOD_UPDATED'				=> 'Existujúci Mód bol úspešne aktualizovaný.',
	'ERR_MOD_NO_MATCHES'		=> 'Musíte k Názvu Módu zadať aj Verziu Módu.',
	'NO_MOD'					=> 'Zadaný ID Módu som nenašiel.',
	'MOD_TITLE'					=> 'Názov Módu',
	'MOD_VERSION'				=> 'Verzia',
	'MOD_VERSION_TYPE'			=> 'Typ Verzie',
	'MOD_VERSION_TYPE_EXPLAIN'	=> 'Beta, Alpha, Dev alebo RC*',
	'MOD_DESC'					=> 'Popis',
	'MOD_AUTHOR'				=> 'Autor',
	'MOD_URL'					=> 'Lokalizácia',
	'MOD_VISIT_WEBSITE'			=> 'Linka URL kde je Mód publikovaný',
	'MOD_DOWNLOAD_MOD'			=> 'Linka URL kde sa dá stiahnuť tento Mód',
	'MOD_LIST_MOD'				=> 'Nainštalovaný je 1 Mód',
	'MOD_LIST_MODS'				=> 'Nainštalovaných Módov je %s',
	'SORT_MOD_TITLE'			=> 'SORT_MOD_TITLE',
	'SORT_MOD_VERSION'			=> 'SORT_MOD_VERSION',
	'SORT_MOD_AUTHOR'			=> 'SORT_MOD_AUTHOR',
   	'VIEWING_PORTAL'			=> 'Zobrazenie portálu',
	'DOWNLOAD_MOD'				=> 'Download',

	// Portal Pages
  	'PAGES_LIST_TITLE' 			=> 'Stránky Portálu',
  	'PAGES_NOT_EXIST' 			=> 'Táto stránka nejestvuje.',
  	'PAGES_NONE_EXIST' 			=> 'Nie sú tu žiadne stránky.',
  	'PAGES_QUERY_FAILED' 		=> 'Stránky neviem vyvolať.',
  	'PAGES_VIEW_FULL' 			=> 'Toto fórum použiva',

	// Boardwide definitions for tooltip tag "title"
  	'RSS_FEED_FORUM' 			=> 'Vstup RSS 2 na Fórum',
  	'RSS_FEED_ATTACHMENTS' 		=> 'Vstup na Prílohy RSS 2 ',
  	'RSS_FEED_DOWNLODS' 		=> 'RSS 2 Zdroj Downloadu',
  	'RSS_FEED_KB' 				=> 'RSS 2 Zdroj Bázy Poznatkov',
  	'RSS_FEED_GALLERY' 			=> 'RSS 2 Zdroj Galérie',
  	'RSS_FEED_ARCADE' 			=> 'RSS 2 Zdroj Arkády',
  	'RSS_FEED_VIDEO' 			=> 'RSS 2 Zdroj Video',

	// corrected/added since 0.4B5 
	'NO_ANNOUNCEMENTS'			=> 'Nie sú tu žiadne oznámenia',
	'FILEBASE_TITLE_VISIT'		=> 'Návštívená báza súboru',
   	'LAST_ON' 				    => 'Posledná návšteva', // ajax userinfo
  	'RSS_FEEDS' 				=> 'Pridružené RSS',

	// corrected/added since RC1
	'OPEN_CLOSE_COLUMNS'		=> 'Zbalím/Rozbalím všetky bloky',
	
	// Reset closed/deleted blocks to default state
   'PORTAL_RESET_BLOCKS'      => 'Obnovím bloky',
	
	// corrected/added since RC2 below
	'ACRONYM'					=> 'Akronymy',
	'ACRONYMS'					=> 'Akronymy Skratiek',
	'ACRONYM_TOTAL'				=> 'Celkom sa použiva v databáze akronymov',
	'ACRONYM_REPLACEMENT'		=> 'Vysvetlenie Akronymov',
	'ACRONYM_URL'				=> 'Akronymy url',
	'TOTAL_FILES_COUNT'			=> 'Celkom je v databáze súborov',
	'ST_TOT_ACTIVE_POSTERS'		=> 'Aktívne príspevky',
	'ST_TOT_ATTACH_SIZE'		=> 'Veľ.príloh',
	'ST_TOT_FILES_SIZE'			=> 'Veľ.súborov',
	'ST_TOT_ACRONYM'			=> 'Skratky',
	'ST_TOT_FLAGS'				=> 'Vlajky',
	'ST_TOT_PICTURES'			=> 'Obrázky',
	'ST_TOT_KB_ARTICLES'		=> 'KB v člankoch',
	'ST_TOT_POSTS'				=> 'Príspevkov',
	'ST_TOT_TOPICS'				=> 'Tém',
	'ST_TOT_CHAT_USERS'			=> 'Uživateľov na chate',
	'ST_TOT_THANKS_USERS'		=> 'Poďakovaní',

	 // gender statistics
	'USER_GENDERS'				=> 'Pohlavie Uživatelov',
	'USERS_WITH_GENDER'			=> 'Uživatelia ktorý zverejnili svoje pohlavie',
	'MALE_FEMALE_RATIO'			=> 'Pomer Muži/Ženy',
	'MALE_COUNT'				=> 'Muži',
	'FEMALE_COUNT'				=> 'Ženy',
	
	'IMG_SIZE_ALTERED'			=> 'Rozmery obrázka môžu byť zmenené do velkosti okna.<br /> Kliknutím na obrázok, ho vrátim do pôvodnej veľkosti.',
	'RETURN_PORTAL'				=> '%sSpäť na stránku portálu%s',
	'KB_RECENT_ARTICLES'		=> 'Články z Bázy Poznatkov',
	'FILEBASE_TITLE'			=> 'Báza Súboru',

	// corrected/added since RC3 below
	'IMPORTANT_NEWS'			=> 'Globál Oznámení',
   	'TOTAL_NEWS'				=> 'Celkom Nových',
   	'TOTAL_ANNOUNCEMENTS'		=> 'Celkom Oznámení',
   	'NO_PICS'					=> 'Nie je dostupný žiadny obrázok',

	// corrected/added since RC4 below
	// Recent Topics
	'RECENT_SHOWING_POSTS'		=> 'Stav príspevkov:',
	'RECENT_SELECT_MODE'		=> 'Volba režimu',
	'RECENT_TOPICS'				=> 'Nové Príspevky',
	'RECENT_TODAY'				=> 'Dnes',
	'RECENT_YESTERDAY'			=> 'Včera',
	'RECENT_LAST24'				=> 'Posledných 24 Hodín',
	'RECENT_LASTWEEK'			=> 'Minulý týždeň',
	'RECENT_DAYS'				=> 'Dní',
	'RECENT_LASTXDAYS'			=> 'Z posledných %s dní',
	'RECENT_LAST'				=> 'Za posledných',
	'RECENT_FIRST'				=> 'spustený %s',
	'RECENT_FIRST_POSTER'		=> ' od %s',
	'RECENT_SELECT_MODE'		=> 'Volba režimu:',
	'RECENT_TITLE_ONE'			=> '<font size=4>%s</font> téma %s', // %s = topics; %s = sort method
	'RECENT_TITLE_MORE'			=> '<font size=4>%s</font> témy %s', // %s = topics; %s = sort method
	'RECENT_TITLE_TODAY'		=> ' za dnes',
	'RECENT_TITLE_YESTERDAY'	=> ' od včera',
	'RECENT_TITLE_LAST24'		=> ' za posledných 24 hodín',
	'RECENT_TITLE_WEEK'			=> ' za posledný týždeň',
	'RECENT_TITLE_LASTXDAYS'	=> ' za posledných  %s dní', // %s = days
	'RECENT_NO_TOPICS'			=> 'Žiadne témy som nenašiel.',
	'RECENT_WRONG_MODE'			=> 'Zadaný bol nesprávny mód.',
	'RECENT_CLICK_RETURN'		=> 'Kliknite %ssem%s a vrátim sa na stránku.',
	'TOTAL_RECENT_TOPICS'		=> 'Najdených bolo celkom tém %s',

	// corrected/added since 0.2 
	'NO_IMPORTANT_NEWS'			=> 'Nie sú tu žiadne oznámenia',
	'GOOGLE_BACK_TO_ENGLISH'	=> 'Naspäť',
	'FORUM_STYLE'				=> 'Štýl Fóra',
	'BACK_TO_TOP'			    => 'Hore',
	'BACK_TO_BOTTOM'		    => 'Dole',
	
	// bbCode tags
   	'BBCODETAGS'				=> 'Tagy bbCode',
   	
   	// change language
   	'BOARD_LANGUAGE'			=> 'Jazyky na Panely',
   	'VIEW_LANGUAGE'				=> 'Zobrazím jazyky',
   	'TOTAL_LANGUAGE'			=> 'Dostupné jazyky',
    'LANGUAGE_SELECT'          	=> 'Volba jazyka',

	// phpBB Gallery
  	'RANDOM_PIC' 				=> 'Náhodné obrázky',
  	'TOTAL_IMAGES' 				=> 'Obrázky v galérii celkom ',
  	'TOTAL_PICVIEW' 			=> 'zobrazené, ',
  	'TOTAL_RATEPOINT' 			=> 'počet bodov, ',
  	'TOTAL_PICVOTES' 			=> 'počet hlasovaní.',
  	'NEWEST_PIC' 				=> 'Najnovší obrátok',
  	'NEWEST_PICS' 				=> 'Najnovšie obrázky',
  	'PIC_TITLE' 				=> 'Titul',
  	'PIC_RECEIVED' 				=> 'Dostal',
  	'PIC_POSTER' 				=> 'Udelil',
  	'LOGIN_LOGOUT_GALLERY' 		=> 'Musíte byť prihlásený ak si chcete pozrieť obrázky',
  	'PIC_COMMENTS' 				=> 'Komentáre',
  	'NEW_PIC_COMMENTS' 			=> 'najnovšie komentáre',
  	'NO_NEW_PIC_COMMENTS' 		=> 'nie su žiadne okomentáre',
  	'RECENT_PUBLIC_PICS' 		=> 'Recentné obrátky',	
	
	// portal i18n widgets/blocks
   	'WIDG_EDIT_TEXT'			=> 'Upraviť',
   	'WIDG_CLOSE_TEXT'			=> 'Zavrieť',
   	'WIDG_EXTENT_TEXT'			=> 'Rozbaliť',
   	'WIDG_COLLAPSE_TEXT'		=> 'Zbaliť',
   	'WIDG_CANCEL_TEXT'		    => 'Zrušiť',
	'WIDG_EDIT'					=> 'Upraviť blok',
	'WIDG_CLOSE'				=> 'Odsránim blok',
	'WIDG_REMOVE'				=> 'Odsránim blok?',
	'WIDG_CANCEL'				=> 'Zruším úpravu',
	'WIDG_EXTENT'				=> 'Rozbalím blok',
	'WIDG_COLLAPSE'				=> 'Zbalím blok',
  
	 // Highslide JS
	'HIGHSLIDE_LOADINGTEXT'		=> 'Zavádzam...',
	'HIGHSLIDE_LOADINGTITLE'	=> 'Kliknutím zruším',
	'HIGHSLIDE_FOCUSTITLE'		=> 'Kliknutím presuniem do popredia',
	'HIGHSLIDE_FULLEXPANDTITLE'	=> 'Rozbalím do skutočnej veľkosti',
	'HIGHSLIDE_FULLEXPANDTEXT'	=> 'Plná veľkosť',
	'HIGHSLIDE_CREDITSTEXT'		=> 'Domovská stránka <i>Highslide JS</i>',
	'HIGHSLIDE_CREDITSTITLE'	=> 'Prejdem na domovskú stránku Highslide JS',
	'HIGHSLIDE_PREVIOUSTEXT'	=> 'Predchádzajúci',
	'HIGHSLIDE_PREVIOUSTITLE'	=> 'Predchádzajúci (šípka vľavo)',
	'HIGHSLIDE_NEXTTEXT'		=> 'Ďalej',
	'HIGHSLIDE_NEXTTITLE'		=> 'Ďalšie (šípka vpravo)',
	'HIGHSLIDE_MOVETITLE'		=> 'Presunúť',
	'HIGHSLIDE_MOVETEXT'		=> 'Presunúť',
	'HIGHSLIDE_CLOSETEXT'		=> 'Zavrieť',
	'HIGHSLIDE_CLOSETITLE'		=> 'Zavrieť (esc)',
	'HIGHSLIDE_RESIZETITLE'		=> 'Zmeniť veľkosť',
	'HIGHSLIDE_PLAYTEXT'		=> 'Spustiť',
	'HIGHSLIDE_PLAYTITLE'		=> 'Prehrať prezentáciu diapozitívmi (medzerník)',
	'HIGHSLIDE_PAUSETEXT'		=> 'Pozastaviť',
	'HIGHSLIDE_PAUSETITLE'		=> 'Pozastaviť prezentáciu diapozitívmi (medzerník)',
	'HIGHSLIDE_NUMBER'			=> 'Obrázok %1 z %2',
	'HIGHSLIDE_RESTORETITLE'	=> 'Kliknutím zatvoríte obrázok alebo kliknite a pohybom pretiahnite obrázok. Môžete použiť aj šípky na klávesnici pre výkon kroku ďalej alebo späť.',

	// Signatures, use short words as the space is limited
	'SIG_STATISTICS_FOR'		=> 'Štatistika pre',
	'SIG_PHPBB_VERSION'			=> 'Verzia phpBB:',
	'SIG_PORTALXL_VERSION'		=> '- Verzia Portálu XL:',
	'SIG_MEMBERS'				=> 'Členovia:',
	'SIG_ONLINE'				=> 'Online:',
	'SIG_DOMAIN'				=> '- Tvoja IP:',
	'SIG_TOTAL_POSTS'			=> 'Celkom príspevkov:',
	'SIG_POSTS_IN'				=> 'príspevkov v',
	'SIG_TOPICS'				=> 'tém',
	'SIG_TOPICS_CAPS'			=> 'Tém je:',
	'SIG_NEWEST_MEMBER'			=> 'Najnovší člen:',
	'SIG_WELCOME_BACK'			=> 'Vitajte späť',
	'SIG_RANK'					=> 'Hodnosť:',
	'SIG_POSTS'					=> 'Prispevkov:',
	'SIG_MEMBER_FOR'			=> 'Členom je už',
	'SIG_POST_PERCENTAGE'		=> 'Prispevky v %:',
	'SIG_LAST_VISITED'			=> 'Posledná návšteva:',
	'SIG_AGE'					=> 'Vek:',
	'SIG_DAYS'					=> 'dní',
	'SIG_TIMEPLAYED'			=> 'Čas Hrania - ',
	'SIG_USERWINS'				=> 'Celkom Výhier - ',
	'SIG_TOTALGAMES'			=> 'Hry - ',
	'SIG_GAMESPLAYED'			=> 'Celkom Hrané - ',
	
	// 06-10-2009 new entries portal pages
	'TOTAL_PAGE_PAGES'		    => 'Celkom stránok',
	
	// Thanks
	'MOST_THANKS'				=> 'Najviac poďakovaní',
	'THANK_GIVEN'				=> 'Poďakoval',
	'THANK_RECEIVED'			=> 'Dostal',
	
	// Gender posts
	'ST_TOT_MALE_GENDER_POSTS'	=> 'Príspevky mužov',
	'ST_TOT_FEMALE_GENDER_POSTS'=> 'Príspevky žien',
	'ST_TOT_UNDEF_GENDER_POSTS'	=> 'Príspevky nedefinovaných',
	
	// Show voters			
	'TOTAL_HAVE_VOTED'			=> 'Hlasoval',
	
	// Ranks page		
    'NO_RANKS'        => 'Na tomto fóre nie sú nainštalovalné hodnosti.',
    'RANKS_TITLE'     => 'Zoznam hodností',
    'RANK_EDIT'       => 'Upraviť hodnosť',
    'RANKS'           => 'Stránka hodností',
    'RANK_ID'         => '#',
    'RANK_TITLE'      => 'Titul hodnosti',
    'RANK_MIN'        => 'Minimum príspevkov',
    'RANK_IMAGE'      => 'Obrázok hodnosti',
	'RANK_COUNT'	  => 'Nainštalovaná je 1 Hodnosť',
	'RANK_COUNT'      => 'Ceľkom je nainštalovaných Hodností %s',
	
 	// Smiles page		
    'NO_SMILES'       => 'Na tomto fóre nie sú nainštalovalné smailíky.',
    'SMILES_TITLE'    => 'Zoznam Smailov',
    'SMILEY_ID'       => '#',
    'SMILEY_CODE'     => 'Kódy smailov',
    'SMILEY_IMG'      => 'Obrázky smailov',
    'SMILEY_DESC'     => 'Emócie',
	'SMILIEY_COUNT'	  => 'Nainštalovaný je 1 Smail',
	'SMILIEY_COUNT'   => 'Ceľkom je nainštalovaných Smailov %s',
	
 	// Guest Hide BBCode MOD	
	'HIDE_REG' 		=> 'Chat je k dispozícii iba pre registrovaných uživateľov.',
	'HIDE_ON' 		=> '<strong>Skryť text</strong>: Zapnúť',
	'HIDE_OFF' 		=> '<strong>Skryť text</strong>: Vypnúť',
  
	// phpBB AJAX Chat
	'SHOUTBOX'		=> 'Chatbox',
	'CHAT_LABEL'	=> 'Chat',
	'CHAT_TITLE'	=> 'Online',
	'CHAT_WINDOW'	=> 'Okno Chatu',
	// phpBB AJAX Chat
  
	// script welcome message login block
	'WELCOME_MORNING'	=> 'Dobrý deň ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']) . '!',
	'WELCOME_AFTERNOON'	=> 'Dobré popoludnie ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']). '!',
	'WELCOME_EVENING'	=> 'Dobrý večer ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']) . '!',
	'WELCOME_GENERAL'	=> 'Vitaj @ ' . $config['sitename'] . ' ',
	// script welcome message login block
	
	// SEO meta keyword dispaly in viewtopic		
	'COMMON_SEARCH_TERMS'	=> 'Kľúčové slová pre túto tému',	

	// Naviagtion pop-up menu entries		
	'LOGIN_PORTAL_INFO'	    	=> 'Pred prihlásením sa musíte zaregistrovať. Registrácia trvá iba chvíľu, po prihlásení môžete začať využívať všetky služby fóra. Administrátor fóra môže poskytnúť aj dodatočné oprávnenia pre registrovaných uživateľov. Pred prihlásením sa uistite, že súhlasíte s našimi podmienkami používania a ďalšími zásadami. Nezabudnite si prečítať aj pravidlá fóra.',
	'LOGIN_MORE_PORTAL_INFO'	=> 'Ďakujeme za tvoju návštevu',
	'LOGOUT_PORTAL_INFO'		=> 'Je nám ľúto že nás ideš opustiť, ale je možné, že do ďalšej návštevy tu budú nové zmeny a dodatky. Kolektív fóra, ' . $config['sitename'] . ' sa teší na tvoju budúcu návštevu Portálu o ktorom dúfame, že budeš informovať svojich priateľov a známych aby prispelí svojov účasťov a pomocov k rozvoju tohoto Portálu!',
	'LOGOUT_MORE_PORTAL_INFO'	=> 'Ďakujeme za tvoju návštevu',  

	// Reset closed/deleted blocks to default state
	'PORTAL_RESET_BLOCKS'		=> 'Reset blocks',
	'PORTAL_WIDGET_STATES'		=> 'Widget states',
	'PORTAL_OPEN_COLUMNS'		=> 'Show all columns',
	'PORTAL_CLOSE_COLUMNS'		=> 'Hide all columns',
	'PORTAL_OPEN_MENUS'		    => 'Show Widgets menus',
	'PORTAL_CLOSE_MENUS'		=> 'Hide Widgets menus',
	
	// Viewtopic user information dropdown		
	'USERS_INFORMATION'			=> 'Users Information',

	// Paypal Currencies
	'PAYPAL_CURRENCY_GBP'		=> 'Pounds Sterling (GBP)',
	'PAYPAL_CURRENCY_USD'		=> 'U.S. Dollars (USD)',
	'PAYPAL_CURRENCY_EUR'		=> 'Euros (EUR)',
	'PAYPAL_CURRENCY_AUD'		=> 'Australian Dollars (AUD)',
	'PAYPAL_CURRENCY_CAD'		=> 'Canadian Dollars (CAD)',
	'PAYPAL_CURRENCY_CZK'		=> 'Czech Koruna (CZK)',
	'PAYPAL_CURRENCY_DKK'		=> 'Danish Kroner (DKK)',
	'PAYPAL_CURRENCY_HKD'		=> 'Hong Kong Dollars (HKD)',
	'PAYPAL_CURRENCY_HUF'		=> 'Hungarian Forint (HUF)',
	'PAYPAL_CURRENCY_NZD'		=> 'New Zealand Dollars (NZD)',
	'PAYPAL_CURRENCY_NOK'		=> 'Norwegian Kroner (NOK)',
	'PAYPAL_CURRENCY_PLN'		=> 'Polish Zlotych (PLN)',
	'PAYPAL_CURRENCY_SGD'		=> 'Singapore Dollars (SGD)',
	'PAYPAL_CURRENCY_SEK'		=> 'Swedish Kronor (SEK)',
	'PAYPAL_CURRENCY_CHF'		=> 'Swiss Francs (CHF)',
	'PAYPAL_CURRENCY_JPY'		=> 'Yen (JPY)',
	
 	// bbCodes page		
    'NO_BBCODES'       			=> 'No bbCodes installed on this forum.',
    'BBCODES_TITLE'    			=> 'bbCodes List',
    'BBCODE_ID'       			=> '#',
    'BBCODE_DISPLAY'       		=> 'Active',
    'BBCODE_CODE'     			=> 'bbCode tag',
    'BBCODE_TPL'     			=> 'bbCode html',
    'BBCODE_HELP'     			=> 'bbCode helpline',
    'BBCODE_ICON'     			=> 'Icon',
	'BBCODE_COUNT'	  			=> '1 bbCode installed',
	'BBCODE_COUNT'   			=> '%s bbCodes installed',

    // zodiacs
    'ZODIAC'                    => 'Zodiacs',


	/**
	* DO NOT REMOVE or CHANGE (text translation is allowed)!
	*/
	'PORTAL_COPY' 			=> '&copy; 2007, 2009 Portal XL Skupina, pôvodného portálu pre phpBB3',
	'PORTAL_VERSION' 		=> 'Portál XL 5.0 ~ ',
	));

?>