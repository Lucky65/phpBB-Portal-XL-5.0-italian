<?php
/** 
*
* @name portal_xl.php [English]
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//
global $config, $user;

$lang = array_merge($lang, array(

	// general definitions
	'PORTAL'			=> 'Portal',
	'PORTAL_INDEX'			=> 'Portal index',
	'ANNOUNCMENTS'			=> 'Ank&uuml;ndigungen',
	'NEWS'			    	=> 'News',
	'POLL'			    	=> 'Umfrage',
	'NO_POLL'			=> 'Keine Umfrage vorhanden',
	'READ_FULL'			=> 'Alles lesen',
	'NO_NEWS'			=> 'Keine News',
	'POSTED_BY'			=> 'Poster',
	'COMMENTS'			=> 'Kommentare',
	'VIEW_COMMENTS'			=> 'Kommentare ansehen',
	'POST_REPLY'			=> 'Kommentar schreiben',
	'CLOCK'				=> 'Uhr',
	'TOPIC_VIEWS'			=> 'Sichtungen',
	'FORUMS'		    	=> 'Foren',
	'EXPAND'		    	=> '&ouml;ffnen',
	'COLLAPSE'		    	=> 'schlie&szlig;en',
	'INVERT'		    	=> 'umkehren',
	'LEFTCOL'		    	=> 'Links +/-',
	'RIGHTCOL'		    	=> 'Rechts +/-',

	// who is online
	'WIO_TOTAL'			=> 'Alle',
	'WIO_REGISTERED'		=> 'Registrierte',
	'WIO_HIDDEN'			=> 'Versteckte',
	'WIO_GUEST'			=> 'G&auml;ste',
	//'RECORD_ONLINE_USERS'		=> 'Rekord: <strong>%1$s</strong><br />%2$s',

	// welcome
	'WELCOME'			=> 'Willkommen',
	
	// mp3 player
	'MEDIA_PLAYER'			=> 'Media player',
	'MEDIA_PLAYER_POPUP'		=> 'Media player',
	'MEDIA_UPLOAD'			=> 'Media hinaufladen',
	'MEDIA_PLAYER_VERSION'		=> 'Media Player 2009',

	// Benutzer menu
	'USER_MENU'			=> 'Benutzer-Men&uuml;',
	'UM_LOG_ME_IN'			=> 'eingeloggt bleiben',
	'UM_HIDE_ME'			=> 'versteckt',
	'UM_MAIN_SUBSCRIBED'		=> 'Abonniert',
	'UM_BOOKMARKS'			=> 'Lesezeichen',

	// statistic
	'ST_NEW'			=> 'Neu',
	'ST_NEW_POSTS'			=> 'Neue Beitr&auml;ge',
	'ST_NEW_TOPICS'			=> 'Neues Thema',
	'ST_NEW_ANNS'			=> 'Neue Ank&uuml;ndigung',
	'ST_NEW_STICKYS'		=> 'Neue Mitteilungen',
	'ST_TOP'			=> 'ingesamt',
	'ST_TOP_ANNS'			=> 'Ank&uuml;ndigungen insgesamt',
	'ST_TOP_STICKYS'		=> 'Mitteilungen insgesamt',
	'ST_TOT_ATTACH'			=> 'Anh&auml;nge insgesamt',
	'ST_TOT_FILES'			=> 'Datei(en) insgesamt',
	'ST_PORTAL_STARTDATE'		=> 'gestartet am',

	'FILES_ATTACHMENTS'		=> 'Statistiken der Anh&auml;nge',
	'FILES_PER_DAY'			=> 'Anh&auml;nge pro Tag',
	'FILES_PER_POST'		=> 'Anh&auml;nge pro Beitrag',
	'FILES_PER_TOPIC'		=> 'Anh&auml;nge pro Beitrag',
	'FILES_PER_USER'		=> 'Anh&auml;nge pro Benutzer',

	// visit counter
	'ST_TOT_VISIT'			=> 'Besuche insgesamt',
	'ST_LAT_VISIT'			=> 'Deine IP',

	// attachments
	'TOP_COUNT'         		=> 'heruntergeladen',
	'TOP_DATE'         		=> 'hinzugef&uuml;gt am',
	'TOP_FILENAME'         		=> 'Dateien',
	'TOP_FILESIZE'         		=> 'Gr&ouml;&szlig;e',
	'TOP_TEL'         		=> 'Top Downloads',
	'TOP_X'         		=> 'mal',
	'VIEW_TOPIC_ATTACHMENTS' 	=> 'Anh&auml;nge insgesamt',

	// search
	'SH'				=> 'Suchen',
	'SH_SITE'			=> 'Foren',
	'SH_POSTS'			=> 'Beitr&auml;ge',
	'SH_AUTHOR'			=> 'Verfasser',
	'SH_ENGINE'			=> 'Suchmaschinen',
	'SH_ADV'			=> 'Benutzerdefinierte Suche',
	
	// recent
	'RECENT_TOPIC'			=> 'Letzte Themen',
	'RECENT_ANN' 			=> 'Ank&uuml;ndigungen',
	'RECENT_HOT_TOPIC' 		=> 'Letzte Antworten',
	'LAST_REPLIED'      		=> 'zuletzt hinzugef&uuml;gt',
   	'BY'            		=> 'von',
   	'ON'            		=> 'an',
   
	// random member
	'RND_MEMBER'			=> 'Zuf&auml;lliges Mitglied',
	'RND_JOIN'			=> 'Betritt',
	'RND_POSTS' 			=> 'Beitr&auml;ge',
	'RND_OCC' 			=> 'T&auml;tigkeit',
	'RND_FROM' 			=> 'Wohnort',
	'RND_WWW' 			=> 'Webseite',

	// random banners
	'RND_B_BANNERS'			=> 'Zuf&auml;llige Links', // normal banners (88x31) on portal
	'RND_H_BANNERS'			=> 'Zuf&auml;llige Banner', // horizontal banners ( ) on portal
	'RND_V_BANNERS'			=> 'Zuf&auml;llige Banner', // vertical banners (130x600) on portal
	
	// random member
	'GOOGLE_ADDS'			=> 'Google/Partner Adds',
	'GOOGLE_ADDS_TXT'		=> 'Hier Werben!',

	// most poster
	'MOST_POSTER' 			=> 'Top Poster',

	// links
	'LINKS' 			=> 'Links',

	// latest members
	'LATEST_MEMBERS' 		=> 'Neueste Mitglieder',

	// make donation
	'DONATION' 			=> 'Spenden',
	'DONATION_TEXT' 		=> 'Dies ist eine freie Communty, welche nicht darauf abziehlt irgendeine Gewinne zu registrieren. Trotzdem sind wir auf deine Spende angewie&szlig;en, um unsere Serverkosten und sonstige Unkosten decken zu k&ouml;nnen. Danke f&uuml;r deine Spende!',
	'PAY_MSG'			=> 'Nachdem du den Betrag zum Spenden vom Men&uuml; gew&auml;hlt hast, kannst du deine Spende durch einen Klick auf das PayPal-Bild akzeptieren.',
	'PAY_ITEM' 			=> 'Spende best&auml;tigen', // paypal item
	'CURRENCY_MSG' 			=> 'W&auml;hle die W&auml;hrung: ',
	'AMOUNT_MSG' 			=> 'W&auml;hle den Beitrag den du spenden willst: ',
	'CLICK_MSG' 			=> 'Klicke um zu spenden',

	// main menu
	'M_MENU' 				=> 'Navigation',
	'M_CONTENT' 				=> 'Inhalt',
	'M_ACP' 		=> 'ACP', // short name
	'M_MCP' 		=> 'MCP', // short name
	'M_HELP' 				=> 'Hilfe',
	'M_BBCODE' 				=> 'BBCode FAQ',
	'M_TERMS' 				=> 'Nutzungsbedingungen',
	'M_PRV' 				=> 'Datenschutz Erkl&auml;rung',
	'M_SEARCH' 				=> 'Suche',

	// link us
	'LINK_US' 				=> 'Link zu uns',
	'LINK_US_TXT' 				=> 'Bitte verlinke <strong>%s</strong>. Benutze folgenden HTML-Code:',

	// friends
	'FRIENDS'				=> 'Freunde',
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'NO_FRIENDS'				=> 'Zur Zeit noch keine Freunde',
	'NO_FRIENDS_OFFLINE'			=> 'Keine Freunde offline',
	'NO_FRIENDS_ONLINE'			=> 'Keine Freunde online',
	
	// last bots
	'LAST_VISITED_BOTS'			=> 'Zuletzt %s besuchende Bots',
	
	// wordgraph
   	'WORDGRAPH'				=> 'W&ouml;rter-Matrix',
   
	// change style
   	'BOARD_STYLES'				=> 'Styleauswahl',
   	'VIEW_STYLES'				=> 'Siehe Style',
   	'TOTAL_STYLES'				=> 'Verf&uuml;gbare Styles',
   	'STYLE_SELECT'				=> 'W&auml;hle Style',
	
	// team
	'NO_ADMINISTRATORS_P'			=> 'Keine Administratoren',
	'NO_MODERATORS_P'			=> 'Keine Moderatoren',

	// chatbox
    	'CHAT'                  		=> 'Chatbox',
	'VIEWING_CHAT'          		=> 'Chatbox ansehen',
	'CHAT_EXPLAIN'				=> 'Chat mit Benutzer',

	// weather
   	'PORTAL_WEATHER'         		=> 'Wetter',

	// syndicate
   	'PORTAL_SYNDICATE'       		=> 'Interessensgemeinschaft',

	// navx
   	'PORTAL_NAVX'            		=> 'Navigate-X',

	// last visitors
   	'L_LAST_VISIT' 				=> 'Zuletzt %s registriete Besucher',

   	// Visit Counter
   	'VISIT_COUNTER_1' 			=> '<b>%d</b> Besucher seit %s',
	'VISIT_COUNTER_2'			=> '<b>%d</b> Besucher seit Sonntag, M&auml;rz 16, 2007',
	'VISIT_COUNTER_3'			=> '<b>%d</b> Seitenbesuche seit %s',
   	'VISIT_COUNTER' 			=> 'Besucherz&auml;hler',

   	// gallery
   	'L_GALLERY'         			=> 'Bildergalerie',

   	// forum categories
	'FCATEGORIES'				=> 'Forenkategorien',
	
	// actual toBilder scroll block
	'RECENT_ACTUAL_TOPIC'			=> 'Letzte Themen',
	'RECENT_ACTUAL_ANN' 			=> 'Letzte Ank&uuml;ndigungen',
	'RECENT_ACTUAL_HOT_TOPIC' 		=> 'Letzte Top Themen',
    	'RECENT_ACTUAL_ANN_NO'      		=> 'Es tut mir leid, aber es wurden leider keine Ank&uuml;ndigungen gefunden',
	 	
   	// similar topics
	'SIMILAR_TOPICS'			=> 'Ähnliche Beitr&auml;ge',
	
   	// downloads
	'L_DOWNLOADS'				=> 'Freie Downloads',

   	// jumpbox RC4
	'RETURN_TO_SEARCH_ADV'	    		=> 'Zur&uuml;ck zur benutzerdefinierten Suche',
	'RETURN_TO'				=> 'Zur&uuml;ck zur',
	
   	// php info
	'PHP_INFO_EXPLAIN'			=> 'Server Info',
	'DATABASE_SERVER_INFO'			=> 'Databank Server',
	'GZIP_COMPRESSION'			=> 'GZip Kompression ',
	'OFF'					=> 'aus',
	'ON'					=> 'an',
	'OS_INFO'				=> 'Betriebssystem',
	'PHP_INFO'				=> 'Script &Uuml;bersetzer',
	'WEBSERVER_INFO'			=> 'Webservertyp',
	
    //Last Visit MOD
	'LAST_VISITS'				=> 'Letzte Besuche',
	'NO_LASTVISIT_USERS' 			=> 'Keine registrierten Benutzer',
	
	'GUEST_VISITS_TOTAL'			=> '%d G&auml;ste',
	'GUEST_VISITS_ZERO_TOTAL'		=> '0 G&auml;ste',
	'GUEST_VISIT_TOTAL'			=> '%d G&auml;ste',

	'HIDDEN_VISITS_TOTAL'			=> '%d versteckt und ',
	'HIDDEN_VISITS_ZERO_TOTAL'		=> '0 versteckt und ',
	'HIDDEN_VISIT_TOTAL'			=> '%d versteckt und ',

	'LASTVISIT_VISITS_TOTAL'		=> 'Insgesamt <strong>%d</strong> Benutzer online heute :: ',
	'LASTVISIT_VISITS_ZERO_TOTAL'		=> 'Insgesamt <strong>0</strong> Benutzer online heute :: ',
	'LASTVISIT_VISIT_TOTAL'			=> 'Insgesamt <strong>%d</strong> Benutzer online heute:: ',
	
	'REG_VISITS_TOTAL'			=> '%d registriert, ',
	'REG_VISITS_ZERO_TOTAL'			=> '0 registriert, ',
	'REG_VISIT_TOTAL'			=> '%d registriert, ',

    // quotes
	'QUOTES_INFO'			    	=> 'Zitat des Tages',

    // partners
	'PARTNERS_INFO'			    	=> 'Partnerinfo',

    // Scroll Message
    	'SCROLL_MESSAGE' 			=> 'Info',

    // crawler linker
    	'CRAWLER_LINKS_TOTAL' 			=> 'Links insgesamt',
    	'CRAWLER_LINKS' 			=> 'Feeds',

    // portal mods
	'MODS_DATABASE'				=> 'Mod Datenbank',
	'MODS_DATABASE_EXPLAIN'			=> 'Hier kannst du deine Mod-Datenbank verwalten. Hinzuf&uuml;gen, Aktualisieren oder L&ouml;schen der Mods in der Datenbank.',
	'MOD_ADD'				=> 'Mod hinzuf&uuml;gen',
	'MOD_ADDED'				=> 'Neuer Mod erfolgreich hinzugef&uuml;gt.',
	'MOD_DELETED'				=> 'Mod erfolgreich gel&ouml;scht.',
	'MOD_EDIT'				=> 'Aktualsiere Mods',
	'MOD_EDIT_EXPLAIN'			=> 'Hier kannst du einen Mod hinzuf&uuml;gen und existierende aktualisieren. Der Name und die Version sind notwendig. Du kannst also Details eingeben und wo der Mod zu finden und zum Download zu finden ist.',
	'BOT_NAME'				=> 'Bot Name',
	'BOT_NAME_EXPLAIN'			=> 'Nur zu deiner eigenen Information.',
	'MOD_NAME_TAKEN'			=> 'Der Name ist schon vergeben. Bitte w&auml;hle einen neuen Namen.',
	'MOD_UPDATED'				=> 'Vorhandener Mod erfolgreich aktualisiert.',
	'ERR_MOD_NO_MATCHES'			=> 'Zu guter letzt musst du f&uuml;r den Mod noch Name und Version bestimmen.',
	'NO_MOD'				=> 'Keine Mod gefunden mit der ID.',
	'MOD_TITLE'				=> 'Mod Name',
	'MOD_VERSION'				=> 'Version',
	'MOD_VERSION_TYPE'			=> 'Version Typ',
	'MOD_VERSION_TYPE_EXPLAIN'		=> 'Beta, Alpha, Dev or RC*',
	'MOD_DESC'				=> 'Beschreibung',
	'MOD_AUTHOR'				=> 'Verfasser',
	'MOD_URL'				=> 'URL',
	'MOD_VISIT_WEBSITE'			=> 'URL Link zur Mod-Ver&ouml;ffentlichung',
	'MOD_DOWNLOAD_MOD'			=> 'URL Link zum Mod-Download',
	'MOD_LIST_MOD'				=> '1 Mod installiert',
	'MOD_LIST_MODS'				=> '%s Mods installiert',
	'SORT_MOD_TITLE'            		=> 'Sortiere nach Mod Titel',
	'SORT_MOD_VERSION'          		=> 'Sortiere nach Mod Version',
	'SORT_MOD_AUTHOR'           		=> 'Sortiere nach Mod Autor',
   	'VIEWING_PORTAL'			=> 'Portal ansehen',
	'DOWNLOAD_MOD'				=> 'Download',

	// Portal Pages
  	'PAGES_LIST_TITLE' 			=> 'Portalseiten',
  	'PAGES_NOT_EXIST' 			=> 'Die Seite existiert nicht.',
  	'PAGES_NONE_EXIST' 			=> 'Die Seite existiert nicht.',
  	'PAGES_QUERY_FAILED' 			=> 'Konnte Seite nicht finden.',
  	'PAGES_VIEW_FULL' 			=> 'Seite ansehen',

	// Boardwide definitions for tooltip tag "title"
  	'RSS_FEED_FORUM' 			=> 'RSS 2 Feed Forum',
  	'RSS_FEED_ATTACHMENTS' 			=> 'RSS 2 Feed Attachments',
  	'RSS_FEED_DOWNLODS' 			=> 'RSS 2 Feed Downloads',
  	'RSS_FEED_KB' 				=> 'RSS 2 Feed Wissensbank',
  	'RSS_FEED_GALLERY'			=> 'RSS 2 Feed Galerie',
  	'RSS_FEED_ARCADE' 			=> 'RSS 2 Feed Arcade',
  	'RSS_FEED_VIDEO' 			=> 'RSS 2 Feed Video',

	// corrected/added since 0.4B5 
	'NO_ANNOUNCEMENTS'			=> 'Keine Ank&uuml;ndigungen',
	'FILEBASE_TITLE_VISIT'			=> 'Besuche Filebase',
   	'LAST_ON' 				=> 'Letzter Besuch', // ajax userinfo
  	'RSS_FEEDS' 				=> 'RSS Syndication',

	// corrected/added since RC1
	'OPEN_CLOSE_COLUMNS'			=> '&Ouml;ffnen/Schlie&szlig;en aller Blocks',
	
	// corrected/added since RC2 below
	'ACRONYM'				=> 'Acronyme',
	'ACRONYMS'				=> 'Acronyme und Abk&uuml;rzungen',
	'ACRONYM_TOTAL'				=> 'Alle Acronyme in der Datenbank',
	'ACRONYM_REPLACEMENT'			=> 'Acronym Eintragungen',
	'ACRONYM_URL'				=> 'Acronym URL',
	'TOTAL_FILES_COUNT'			=> 'Dateien in der Datenbank',
	'ST_TOT_ACTIVE_POSTERS'			=> 'Aktive Schreiber',
	'ST_TOT_ATTACH_SIZE'			=> 'Anhangsgr&ouml;sse',
	'ST_TOT_FILES_SIZE'			=> 'Dateigr&ouml;sse',
	'ST_TOT_ACRONYM'			=> 'Acronyms',
	'ST_TOT_FLAGS'				=> 'Flaggen',
	'ST_TOT_PICTURES'			=> 'Bilder',
	'ST_TOT_KB_ARTICLES'			=> 'KB Artikel',
	'ST_TOT_POSTS'				=> 'Artikel',
	'ST_TOT_TOPICS'				=> 'Themen',
	'ST_TOT_CHAT_USERS'			=> 'Benutzer im Chat',
	'ST_TOT_THANKS_USERS'			=> 'Benutzer bedankt',

	 // gender statistics
	'USER_GENDERS'				=> 'User Geschlecht',
	'USERS_WITH_GENDER'			=> 'User die Ihr Geschlecht angegeben haben',
	'MALE_FEMALE_RATIO'			=> 'Verh&auml;ltnis Mann/Frau',
	'MALE_COUNT'				=> 'M&auml;nnliche Mitglieder',
	'FEMALE_COUNT'				=> 'Weibliche Mitglieder',
	
	'IMG_SIZE_ALTERED'			=> 'Die Bildgr&ouml;sse wurde auf die Fenstergr&ouml;sse angepasst.<br /> Klicke auf das Bild, um es in seiner Originalgr&ouml;sse zu sehen.',
	'RETURN_PORTAL'				=> '%sZur&uuml;ck zur Portalseite%s',
	'KB_RECENT_ARTICLES'			=> 'Wissensbank neueste Artikel',
	'FILEBASE_TITLE'			=> 'Downloadbereich',

	// corrected/added since RC3 below
	'IMPORTANT_NEWS'			=> 'Globale Ank&uuml;ndigungen',
   	'TOTAL_NEWS'				=> 'Alle News',
   	'TOTAL_ANNOUNCEMENTS'			=> 'Alle Ank&uuml;ndigungen(s)',
   	'NO_PICS'				=> 'Keine Bilder verf&uuml;gbar',

	// corrected/added since RC4 below
	// Recent Topics
	'RECENT_SHOWING_POSTS'			=> 'Zeige Artikel von:',
	'RECENT_SELECT_MODE'			=> 'Auswahlmodus',
	'RECENT_TOPICS'				=> 'Neue Themen',
	'RECENT_TODAY'				=> 'Heute',
	'RECENT_YESTERDAY'			=> 'Gestern',
	'RECENT_LAST24'				=> 'Letzte 24 Stunden',
	'RECENT_LASTWEEK'			=> 'Letzte Woche',
	'RECENT_DAYS'				=> 'Tage',
	'RECENT_LASTXDAYS'			=> 'Letzte %s Tage',
	'RECENT_LAST'				=> 'Letzte',
	'RECENT_FIRST'				=> 'gestartet am %s',
	'RECENT_FIRST_POSTER'			=> ' von %s',
	'RECENT_SELECT_MODE'			=> 'W&auml;hle einen Modus:',
	'RECENT_TITLE_ONE'			=> '<font size=4>%s</font> Thema %s', // %s = topics; %s = sort method
	'RECENT_TITLE_MORE'			=> '<font size=4>%s</font> Themen %s', // %s = topics; %s = sort method
	'RECENT_TITLE_TODAY'			=> ' von Heute',
	'RECENT_TITLE_YESTERDAY'		=> ' von Gestern',
	'RECENT_TITLE_LAST24'			=> ' aus den letzten 24 Stunden',
	'RECENT_TITLE_WEEK'			=> ' von der letzten Woche',
	'RECENT_TITLE_LASTXDAYS'		=> ' von den letzen %s Tagen', // %s = days
	'RECENT_NO_TOPICS'			=> 'Keine Themen gefunden.',
	'RECENT_WRONG_MODE'			=> 'Du hast einen falschen Modus gew&auml;hlt.',
	'RECENT_CLICK_RETURN'			=> 'Klicke %shere%s um zur Neuigkeitenseite zur&uuml;ck zu gehen.',
	'TOTAL_RECENT_TOPICS'			=> '%s neue Themen gefunden',

	// corrected/added since 0.2 
	'NO_IMPORTANT_NEWS'			=> 'Keine Ank$uuml;ndigungen',
	'GOOGLE_BACK_TO_ENGLISH'		=> 'Zur&uuml;ck',
	'FORUM_STYLE'				=> 'Forumstyle',
	'BACK_TO_TOP'				=> 'Anfang',
	'BACK_TO_BOTTOM'			=> 'Ende',
	
	// bbCode tags
   	'BBCODETAGS'				=> 'BBCode Tags',
   
	// change language
   	'BOARD_LANGUAGE'			=> 'Boardsprachen',
   	'VIEW_LANGUAGE'				=> 'Sprache anzeigen',
   	'TOTAL_LANGUAGE'			=> 'Verf&uuml;gbare Sprachen',
    	'LANGUAGE_SELECT'          		=> 'W&auml;hle Sprache',

	// phpBB Gallery
  	'RANDOM_PIC' 				=> 'Zufalls-Bilder',
  	'TOTAL_IMAGES' 				=> 'Bilder in unserer ',
  	'TOTAL_PICVIEW' 			=> 'Betrachtungen, ',
  	'TOTAL_RATEPOINT' 			=> 'Punkte, ',
  	'TOTAL_PICVOTES' 			=> 'Punkte.',
  	'NEWEST_PIC' 				=> 'Neuestes Bild',
  	'NEWEST_PICS' 				=> 'Neue Bilder',
  	'PIC_TITLE' 				=> 'Titel',
  	'PIC_RECEIVED' 				=> 'hinzugef&uuml;gt',
  	'PIC_POSTER' 				=> 'Poster',
  	'LOGIN_LOGOUT_GALLERY' 			=> 'Bitte logge dich ein um die Bilder zu sehen',
  	'PIC_COMMENTS' 				=> 'Kommentare',
  	'NEW_PIC_COMMENTS' 			=> 'letzte Kommentare',
  	'NO_NEW_PIC_COMMENTS' 			=> 'Keine Kommentare',
	'RECENT_PUBLIC_PICS'       		=> 'Letzte Bilder',
	
	// portal i18n widgets/blocks
	'WIDG_EDIT_TEXT' 			=> 'Editieren',
	'WIDG_CLOSE_TEXT' 			=> 'Entfernen',
	'WIDG_EXTENT_TEXT' 			=> '&Ouml;ffnen',
	'WIDG_COLLAPSE_TEXT' 			=> 'Minimieren',
	'WIDG_CANCEL_TEXT' 			=> 'Abbrechen',
	'WIDG_EDIT' 				=> 'Editiere diesen Block',
	'WIDG_CLOSE' 				=> 'Entferne diesen Block',
	'WIDG_REMOVE' 				=> 'Diesen Block entfernen?',
	'WIDG_CANCEL' 				=> 'Edition abbrechen',
	'WIDG_EXTENT' 				=> 'Block maximieren',
	'WIDG_COLLAPSE' 			=> 'Block minimieren',
	
	// Highslide JS
	'HIGHSLIDE_LOADINGTEXT' 		=> 'Laden...',
	'HIGHSLIDE_LOADINGTITLE' 		=> 'Klicke, um abzubrechen',
	'HIGHSLIDE_FOCUSTITLE'			=> 'Klicke, um in den Vordergrund zu bringen',
	'HIGHSLIDE_FULLEXPANDTITLE'		=> 'Maximiere zu normaler Gr&ouml;&szlig;e',
	'HIGHSLIDE_FULLEXPANDTEXT' 		=> 'Maximale Gr&ouml;&szlig;e',
	'HIGHSLIDE_CREDITSTEXT' 		=> 'Powered by <i>Highslide JS</i>',
	'HIGHSLIDE_CREDITSTITLE' 		=> 'Gehe zur Highslide JS Homepage',
	'HIGHSLIDE_PREVIOUSTEXT' 		=> 'Letztes',
	'HIGHSLIDE_PREVIOUSTITLE' 		=> 'Letztes (Pfeil links)',
	'HIGHSLIDE_NEXTTEXT' 			=> 'N&auml;chstes',
	'HIGHSLIDE_NEXTTITLE' 			=> 'N&auml;chstes (Pfeil rechts)',
	'HIGHSLIDE_MOVETITLE' 			=> 'Bewegen',
	'HIGHSLIDE_MOVETEXT' 			=> 'Bewegen',
	'HIGHSLIDE_CLOSETEXT' 			=> 'Schlie&szlig;en',
	'HIGHSLIDE_CLOSETITLE' 			=> 'Schlie&szlig;en (esc)',
	'HIGHSLIDE_RESIZETITLE' 		=> 'Gr&ouml;&szlig;e &auml;ndern',
	'HIGHSLIDE_PLAYTEXT' 			=> 'Start',
	'HIGHSLIDE_PLAYTITLE' 			=> 'Diashow abspielen (Leertaste)',
	'HIGHSLIDE_PAUSETEXT' 			=> 'Pause',
	'HIGHSLIDE_PAUSETITLE' 			=> 'Diashow stoppen (Leertaste)',
	'HIGHSLIDE_NUMBER' 			=> 'Bild %1 of %2',
	'HIGHSLIDE_RESTORETITLE' 		=> 'Klicke, um das Bild zu schließen, halte die Maustaste gedrückt, um das Bild zu bewegen. Nutze die Pfeiltasten, um das nächste/vorherige Bild zu sehen.',

	// Signatures, use short words as the space is limited
	'SIG_STATISTICS_FOR'			=> 'Statistik für',
	'SIG_PHPBB_VERSION'			=> 'phpBB Version:',
	'SIG_PORTALXL_VERSION'			=> '- Portal XL Version:',
	'SIG_MEMBERS'				=> 'Mitglieder:',
	'SIG_ONLINE'				=> 'Online:',
	'SIG_DOMAIN'				=> '- Deine IP:',
	'SIG_TOTAL_POSTS'			=> 'Beiträge gesamt:',
	'SIG_POSTS_IN'				=> 'Beiträge in',
	'SIG_TOPICS'				=> 'Themen',
	'SIG_TOPICS_CAPS'			=> 'Themen:',
	'SIG_NEWEST_MEMBER'			=> 'Neuestes Mitglied:',
	'SIG_WELCOME_BACK'			=> 'Willkommen zurück',
	'SIG_RANK'				=> 'Rang:',
	'SIG_POSTS'				=> 'Beiträge:',
	'SIG_MEMBER_FOR'			=> 'Mitglied seit',
	'SIG_POST_PERCENTAGE'			=> 'Beitragsanteil:',
	'SIG_LAST_VISITED'			=> 'Zuletzt besucht:',
	'SIG_AGE'				=> 'Alter:',
	'SIG_DAYS'				=> 'Tage',
	'SIG_TIMEPLAYED'			=> 'Spielzeit - ',
	'SIG_USERWINS'				=> 'Gewinne insgesamt - ',
	'SIG_TOTALGAMES'			=> 'Spiele - ',
	'SIG_GAMESPLAYED'			=> 'Insgesamt gespielt - ',
	
	// 06-10-2009 new entries portal pages
	'TOTAL_PAGE_PAGES'			=> 'Seiten insgesamt',
	
	// Thanks
	'MOST_THANKS'				=> 'Meiste DANKE',
	'THANK_GIVEN'				=> 'Gegeben',
	'THANK_RECEIVED'			=> 'Bekommen',
	
	// Gender posts
	'ST_TOT_MALE_GENDER_POSTS'		=> 'M&auml;nliche Beitr&auml;ge',
	'ST_TOT_FEMALE_GENDER_POSTS'		=> 'Weibliche Beitr&auml;ge',
	'ST_TOT_UNDEF_GENDER_POSTS'		=> 'Undefinierte Beitr&auml;ge',
	
	// Show voters         
	'TOTAL_HAVE_VOTED'			=> 'Haben gew&auml;hlt',	
	
	// Ranks page		
    	'NO_RANKS'				=> 'Keine R&auml;nge auf diesem Board installiert.',
    	'RANKS_TITLE'				=> 'Rangliste',
    	'RANK_EDIT'				=> 'R&auml;nge bearbeiten',
    	'RANKS'					=> 'Rangseite',
    	'RANK_ID'				=> '#',
    	'RANK_TITLE'				=> 'Rangtitel',
    	'RANK_MIN'				=> 'Minimale Postanzahl',
    	'RANK_IMAGE'				=> 'Rangbild',
	'RANK_COUNT'				=> '1 Rang installiert',
	'RANK_COUNT'				=> '%s R&auml;nge installiert',
	
 	// Smiles page		
    	'NO_SMILES'				=> 'Keine Smilies auf diesem Board installiert.',
    	'SMILES_TITLE'				=> 'Smileyliste',
    	'SMILEY_ID'				=> '#',
    	'SMILEY_CODE'				=> 'Smiley Code',
    	'SMILEY_IMG'				=> 'Smileybild',
    	'SMILEY_DESC'				=> 'Smiley Emotion',
	'SMILIEY_COUNT'				=> '1 Smiley installiert',
	'SMILIEY_COUNT'				=> '%s Smilies installiert',
	
 	// Guest Hide BBCode MOD	
	'HIDE_REG'				=> 'Nur f&uuml;r registrierte Benutzer sichtbar.',
	'HIDE_ON'				=> '<strong>Versteckter Text</strong>: EIN',
	'HIDE_OFF'				=> '<strong>Versteckter Text</strong>: AUS',
  
	// phpBB AJAX Chat
	'SHOUTBOX'		=> 'Chatbox',
	'CHAT_LABEL'	=> 'Im Chat',
	'CHAT_TITLE'	=> 'Online',
	'CHAT_WINDOW'	=> 'Chatbox Fenster',
	// phpBB AJAX Chat
  
	// script welcome message login block
	'WELCOME_MORNING'	=> 'Guten Morgen ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']) . '!',
	'WELCOME_AFTERNOON'	=> 'Guten Tag ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']). '!',
	'WELCOME_EVENING'	=> 'Guten Abend ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']) . '!',
	'WELCOME_GENERAL'	=> 'Willkommen @ ' . $config['sitename'] . ' ',
	// script welcome message login block
	
	// SEO meta keyword dispaly in viewtopic		
	'COMMON_SEARCH_TERMS'	=> 'Keywords for this topic',
	
	// Naviagtion pop-up menu entries		
	'LOGIN_PORTAL_INFO'	    	=> 'In order to login you must be registered. Please be aware that to use most of the functions of this site you will need to register your details. The board administrator may also grant additional permissions to registered users. Please ensure you read any forum rules as you navigate around the board.',
	'LOGIN_MORE_PORTAL_INFO'	=> 'More login info...',
	'LOGOUT_PORTAL_INFO'		=> 'Be sure to check this website as often as possible. We will be posting changes and additions throughout the week. Thank you for your time visiting ' . $config['sitename'] . ', and we hope you will bookmark this site!',
	'LOGOUT_MORE_PORTAL_INFO'	=> 'More logout info...',

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
	'PORTAL_COPY' 			=> '&copy; 2007, 2009 Portal XL Group, the original insane crazy Portal for phpBB3',
	'PORTAL_VERSION' 		=> 'Portal XL 5.0 ~ ',
	));

?>