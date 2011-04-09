<?php
/** 
*
* @name portal_xl.php [Deutsch — Du]
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_xl.php,v 1.1.1.1 2009/05/15 04:02:16 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL Group
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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(

	// PlusXL 5.0 install
	'PORTAL_VERSION'		=> 'XL 5.0 Plain Final ',
	'PORTAL_SETTINGS'		=> 'Portal Einstellungen',

	// error definitions
	'COULD_NOT_QUERY_TOPIC'	=> 'Konnte folgende Themeninformation f&uuml;r das Portal in news/announcement nicht abfragen',

	// general definitions
	'PORTAL'			=> 'Portal',
	'PORTAL_INDEX'		=> 'Portal index',
	'ANNOUNCMENTS'		=> 'Ank&uuml;ndigungen',
	'NEWS'			    => 'News',
	'POLL'			    => 'Umfrage',
	'READ_FULL'			=> 'Lese Alles',
	'NO_NEWS'			=> 'keine news',
	'NO_POLL'			=> 'Keine Umfrage verf&uuml;gbar',
	'POSTED_BY'			=> 'Poster',
	'COMMENTS'			=> 'Kommentare',
	'VIEW_COMMENTS'		=> 'Kommentare ansehen',
	'POST_REPLY'		=> 'Kommentar schreiben',
	'CLOCK'				=> 'Uhr',
	'TOPIC_VIEWS'		=> 'Sichtungen',
	'FORUMS'		    => 'Foren',
	'EXPAND'		    => '&ouml;ffnen',
	'COLLAPSE'		    => 'schlie&szlig;en',
	'INVERT'		    => 'umkehren',
	'LEFTCOL'		    => 'Links +/-',
	'RIGHTCOL'		    => 'Rechts +/-',

	// who is online
	'WIO_TOTAL'			=> 'Alle',
	'WIO_REGISTERED'	=> 'Registriete',
	'WIO_HIDDEN'		=> 'Versteckte',
	'WIO_GUEST'			=> 'G&auml;ste',
	//'RECORD_ONLINE_USERS'=> 'Rekord: <strong>%1$s</strong><br />%2$s',

	// welcome
	'WELCOME'			=> 'Willkommen',
	
	// mp3 player
	'MEDIA_PLAYER'			=> 'Media player',
	'MEDIA_PLAYER_POPUP'	=> 'Media player',
	'MEDIA_UPLOAD'			=> 'Upload media',
	'MEDIA_PLAYER_VERSION'	=> 'Media Player v.2.5',

	// Benutzer menu
	'USER_MENU'			=> 'Benutzer-Men&uuml;',
	'UM_LOG_ME_IN'		=> 'eingeloggt bleiben',
	'UM_HIDE_ME'		=> 'versteckt',
	'UM_MAIN_SUBSCRIBED'=> 'Abbonniert',
	'UM_BOOKMARKS'		=> 'Lesezeichen',

	// statistic
	'ST_NEW'				=> 'Neu',
	'ST_NEW_POSTS'			=> 'Neue Beitr&auml;ge',
	'ST_NEW_TOPICS'			=> 'Neues Thema',
	'ST_NEW_ANNS'			=> 'Neue Ank&uuml;ndigung',
	'ST_NEW_STICKYS'		=> 'Neue Mitteilungen',
	'ST_TOP'				=> 'ingesamt',
	'ST_TOP_ANNS'			=> 'Ank&uuml;ndigungen insgesamt',
	'ST_TOP_STICKYS'		=> 'Mitteilungen insgesamt',
	'ST_TOT_ATTACH'			=> 'Anh&auml;nge insgesamt',
	'ST_TOT_FILES'			=> 'Datei(en) insgesamt',
	'ST_PORTAL_STARTDATE'	=> 'gestartet am',
	'FILES_ATTACHMENTS'		=> 'Statistiken der Anh&auml;nge',
	'FILES_PER_DAY'			=> 'Anh&auml;nge pro Tag',
	'FILES_PER_POST'		=> 'Anh&auml;nge pro Beitrag',
	'FILES_PER_TOPIC'		=> 'Anh&auml;nge pro Beitrag',
	'FILES_PER_USER'		=> 'Anh&auml;nge pro Benutzer',

	// visit counter
	'ST_TOT_VISIT'				=> 'Besuche insgesamt',
	'ST_LAT_VISIT'				=> 'Deine IP',

	// attachments
	'TOP_COUNT'         		=> 'heruntergeladen',
	'TOP_DATE'         			=> 'hinzugef&uuml;gt am',
	'TOP_FILENAME'         		=> 'Dateien',
	'TOP_FILESIZE'         		=> 'Gr&ouml;&szlig;e',
	'TOP_TEL'         			=> 'Top Downloads',
	'TOP_X'         			=> 'mal',
	'VIEW_TOPIC_ATTACHMENTS' 	=> 'Anh&auml;nge insgesamt',

	// search
	'SH'		=> 'suchen',
	'SH_SITE'	=> 'Foren',
	'SH_POSTS'	=> 'Beitr&auml;ge',
	'SH_AUTHOR'	=> 'Verfasser',
	'SH_ENGINE'	=> 'Suchmaschinen',
	'SH_ADV'	=> 'benutzerdefinierte Suche',
	
	// recent
	'RECENT_TOPIC'		=> 'letzte Themen',
	'RECENT_ANN' 		=> 'Ank&uuml;ndigungen',
	'RECENT_HOT_TOPIC' 	=> 'Letzte Antworten',
	'LAST_REPLIED'      => 'zuletzt hinzugef&uuml;gt',
   	'BY'            	=> 'von',
   	'ON'            	=> 'an',
   
	// random member
	'RND_MEMBER'	=> 'Zuf&auml;lliges Mitglied',
	'RND_JOIN'		=> 'Betritt',
	'RND_POSTS' 	=> 'Beitr&auml;ge',
	'RND_OCC' 		=> 'T&auml;tigkeit',
	'RND_FROM' 		=> 'Wohnort',
	'RND_WWW' 		=> 'Webseite',

	// random banners
	'RND_B_BANNERS'	=> 'Zuf&auml;llige Links', // normal banners (88x31) on portal
	'RND_H_BANNERS'	=> 'Zuf&auml;llige Banner', // horizontal banners ( ) on portal
	'RND_V_BANNERS'	=> 'Zuf&auml;llige Banner', // vertical banners (130x600) on portal
	
	// random member
	'GOOGLE_ADDS'		=> 'Google/Partner Adds',
	'GOOGLE_ADDS_TXT'	=> 'Hier Werben!',

	// most poster
	'MOST_POSTER' => 'Top Poster',

	// links
	'LINKS' => 'Links',

	// latest members
	'LATEST_MEMBERS' => 'Neueste Mitglieder',

	// make donation
	'DONATION' 		=> 'Spenden',
	'DONATION_TEXT' => 'Diese Spende dient nicht dazu, dem Empf&auml;nger zu weiterem Einkommen zu verhelfen. Eine Spende ist freiwillig und hilft die laufenden Kosten zu decken, um die Seite und deren Services am leben zu halten.',
	'PAY_MSG'		=> 'NAchdem Du/Sie die H&ouml;he der Spende gew&auml;hlt haben, klickt man einfach auf das PayPal Symbol um weiter zu kommen.',
	'PAY_ITEM' 		=> 'Spende best&auml;tigen', // paypal item

	// main menu
	'M_MENU' 		=> 'Navigation',
	'M_CONTENT' 	=> 'Inhalt',
	'M_ACP' 		=> 'ACP',
	'M_HELP' 		=> 'Hilfe',
	'M_BBCODE' 		=> 'BBCode FAQ',
	'M_TERMS' 		=> 'Nutzungsbedingungen',
	'M_PRV' 		=> 'Datenschutz Erkl&auml;rung',
	'M_SEARCH' 		=> 'Suche',

	// link us
	'LINK_US' 		=> 'Link to us',
	'LINK_US_TXT' 	=> 'Bitte verlinke <strong>%s</strong>. Benutze folgenden HTML-Code:',

	// friends
	'FRIENDS'				=> 'Freunde',
	'FRIENDS_OFFLINE'		=> 'Offline',
	'FRIENDS_ONLINE'		=> 'Online',
	'NO_FRIENDS'			=> 'Zur Zeit noch keine Freunde',
	'NO_FRIENDS_OFFLINE'	=> 'Keine Freunde offline',
	'NO_FRIENDS_ONLINE'		=> 'Keine Freunde online',
	
	// last bots
	'LAST_VISITED_BOTS'		=> 'Zuletzt %s besuchte bots',
	
	// wordgraph
   	'WORDGRAPH'				=> 'W&ouml;rter-Matrix',
   
	// change style
   	'BOARD_STYLES'			=> 'Styleauswahl',
   	'VIEW_STYLES'			=> 'Siehe Style',
   	'TOTAL_STYLES'			=> 'Verf&uuml;gbare Styles',
	
	// team
	'NO_ADMINISTRATORS_P'	=> 'Keine Administratoren',
	'NO_MODERATORS_P'		=> 'Keine Moderatoren',

	// chatbox
    'CHAT'                  => 'Chatbox',
	'VIEWING_CHAT'          => 'Chatbox ansehen',
	'CHAT_EXPLAIN'			=> 'Chat with Users',

	// weather
   	'PORTAL_WEATHER'         => 'Wetter',

	// syndicate
   	'PORTAL_SYNDICATE'       => 'Interessensgemeinschaft',

	// navx
   	'PORTAL_NAVX'            => 'Navigate-X',

	// last visitors
   	'L_LAST_VISIT' 			=> 'Zuletzt %s registriete Besucher',

   	// Visit Counter
   	'VISIT_COUNTER_1' 		=> '<b>%d</b> Besucher seit %s',
	'VISIT_COUNTER_2'		=> '<b>%d</b> Besucher seit Sonntag, M&auml;rz 16, 2007',
	'VISIT_COUNTER_3'		=> '<b>%d</b> Seitenbesuche seit %s',
   	'VISIT_COUNTER' 		=> 'Besucherz&auml;hler',

   	// gallery
   	'L_GALLERY'         	=> 'Bildergalerie',

   	// forum categories
	'FCATEGORIES'			=> 'Forenkategorien',
	
	// actual toBilder scroll block
	'RECENT_ACTUAL_TOPIC'		=> 'Letzte Themen',
	'RECENT_ACTUAL_ANN' 		=> 'Letzte Ank&uuml;ndigungen',
	'RECENT_ACTUAL_HOT_TOPIC' 	=> 'Letzte Top Themen',
    'RECENT_ACTUAL_ANN_NO'      => 'Sorry, keine Ank&uuml;ndigungen gefunden',
	 	
   	// similar toBilder
	'SIMILAR_TOPICS'			=> 'Gleiche Themen',
	
   	// downloads
	'L_DOWNLOADS'				=> 'Freie Downloads',

   	// jumpbox RC4
	'RETURN_TO_SEARCH_ADV'	    => 'Zur&uuml;ck zur benutzerdefinierten Suche',
	'RETURN_TO'					=> 'Zur&uuml;ck zu/r',
	
   	// php info
	'PHP_INFO_EXPLAIN'			=> 'Server Info',
	'DATABASE_SERVER_INFO'		=> 'Databank Server',
	'GZIP_COMPRESSION'			=> 'GZip Kompression ',
	'OFF'						=> 'aus',
	'ON'						=> 'an',
	'OS_INFO'					=> 'Betriebssystem',
	'PHP_INFO'					=> 'Script &Uuml;bersetzer',
	'WEBSERVER_INFO'			=> 'Webserver Typ',
	
    //Last Visit MOD
	'LAST_VISITS'				=> 'Letzte Besuche',
	'NO_LASTVISIT_USERS' 		=> 'Keine registrierten Benutzer',
	
	'GUEST_VISITS_TOTAL'			=> '%d G&auml;ste',
	'GUEST_VISITS_ZERO_TOTAL'	=> '0 G&auml;ste',
	'GUEST_VISIT_TOTAL'			=> '%d G&auml;ste',

	'HIDDEN_VISITS_TOTAL'		=> '%d versteckt und ',
	'HIDDEN_VISITS_ZERO_TOTAL'	=> '0 versteckt und ',
	'HIDDEN_VISIT_TOTAL'		=> '%d versteckt und ',

	'LASTVISIT_VISITS_TOTAL'		=> 'Insgesamt <strong>%d</strong> Benutzer online heute :: ',
	'LASTVISIT_VISITS_ZERO_TOTAL'	=> 'Insgesamt <strong>0</strong> Benutzer online heute :: ',
	'LASTVISIT_VISIT_TOTAL'			=> 'Insgesamt <strong>%d</strong> Benutzer online heute:: ',
	
	'REG_VISITS_TOTAL'			=> '%d registriert, ',
	'REG_VISITS_ZERO_TOTAL'		=> '0 registriert, ',
	'REG_VISIT_TOTAL'			=> '%d registriert, ',

    // quotes
	'QUOTES_INFO'			    => 'Zitat des Tages',

    // partners
	'PARTNERS_INFO'			    => 'Partnerinfo',

    // Scroll Message
    'SCROLL_MESSAGE' 			=> 'Info',

    // crawler linker
    'CRAWLER_LINKS_TOTAL' 		=> 'Links insgesamt',
    'CRAWLER_LINKS' 			=> 'Feeds',

    // portal mods
	'MODS_DATABASE'				=> 'Mod Datenbank',
	'MODS_DATABASE_EXPLAIN'		=> 'Hier kannst du deine Mod-Datenbank verwalten. Hinzuf&uuml;gen, Aktualisieren oder L&ouml;schen der Mods in der Datenbank.',
	'MOD_ADD'					=> 'Mod hinzuf&uuml;gen',
	'MOD_ADDED'					=> 'Neuer Mod erfolgreich hinzugef&uuml;gt.',
	'MOD_DELETED'				=> 'Mod erfolgreich gel&ouml;scht.',
	'MOD_EDIT'					=> 'Aktualsiere Mods',
	'MOD_EDIT_EXPLAIN'			=> 'Hier kannst du einen Mod hinzuf&uuml;gen und existierende aktualisieren. Der Name und die Version sind notwendig. Du kannst also Details eingeben und wo der Mod zu finden und zum Download zu finden ist.',
	'BOT_NAME'					=> 'Bot Name',
	'BOT_NAME_EXPLAIN'			=> 'Nur zu deiner eigenen Information.',
	'MOD_NAME_TAKEN'			=> 'Der Name ist schon vergeben. Bitte w&auml;hle einen neuen Namen.',
	'MOD_UPDATED'				=> 'Vorhandener Mod erfolgreich aktualisiert.',
	'ERR_MOD_NO_MATCHES'		=> 'Zu guter letzt musst du f&uuml;r den Mod noch Name und Version bestimmen.',
	'NO_MOD'					=> 'Keine Mod gefunden mit der ID.',
	'MOD_TITLE'					=> 'Mod Name',
	'MOD_VERSION'				=> 'Version',
	'MOD_VERSION_TYPE'			=> 'Version Typ',
	'MOD_VERSION_TYPE_EXPLAIN'	=> 'Beta, Alpha, Dev or RC*',
	'MOD_DESC'					=> 'Beschreibung',
	'MOD_AUTHOR'				=> 'Verfasser',
	'MOD_URL'					=> 'URL',
	'MOD_VISIT_WEBSITE'			=> 'URL Link zur Mod-Ver&ouml;ffentlichung',
	'MOD_DOWNLOAD_MOD'			=> 'URL Link zum Mod-Download',
	'MOD_LIST_MOD'				=> '1 Mod installiert',
	'MOD_LIST_MODS'				=> '%s Mods installiert',
	'SORT_MOD_TITLE'			=> 'SORTIERE_MOD_TITLE',
	'SORT_MOD_VERSION'			=> 'SORTIERE_MOD_VERSION',
	'SORT_MOD_VERSION'			=> 'SORTIERE_MOD_VERSION',
	'SORT_MOD_AUTHOR'			=> 'SORTIERE_MOD_AUTHOR',
   	'VIEWING_PORTAL'			=> 'Portal ansehen',

	// Portal Pages
  	'PAGES_LIST_TITLE' 			=> 'Portalseiten',
  	'PAGES_NOT_EXIST' 			=> 'Die Seite existiert nicht.',
  	'PAGES_NONE_EXIST' 			=> 'Die Seite existiert nicht.',
  	'PAGES_QUERY_FAILED' 		=> 'Konnte Seite nicht finden.',
  	'PAGES_VIEW_FULL' 			=> 'Seite ansehen',

	// Gallery
  	'RANDOM_PIC' 				=> 'Zufalls-Bilder',
  	'TOTAL_IMAGES' 				=> 'Bilder in unserer ',
  	'TOTAL_PICVIEW' 			=> 'Betrachtungen, ',
  	'TOTAL_RATEPOINT' 			=> 'Punkte, ',
  	'TOTAL_PICVOTES' 			=> 'Punkte.',
  	'NEWEST_PIC' 				=> 'Neuestes Bild',
  	'NEWEST_PICS' 				=> 'Neue Bilder',
  	'PIC_RECEIVED' 				=> 'hinzugef&uuml;gt',
  	'PIC_POSTER' 				=> 'Poster',
  	'LOGIN_LOGOUT_GALLERY' 		=> 'Bitte logge dich ein um die Bilder zu sehen',
  	'PIC_COMMENTS' 				=> 'Kommentare',
  	'NEW_PIC_COMMENTS' 			=> 'letzte Kommentare',
  	'NO_NEW_PIC_COMMENTS' 		=> 'Keine Kommentare',


	// Boardwide definitions for tooltip tag "title"
  	'RSS_FEED_FORUM' 			=> 'RSS 2 Feed Forum',
  	'RSS_FEED_ATTACHMENTS' 		=> 'RSS 2 Feed Anh&auml;nge',

	// corrected/added since 0.4B5 
	'NO_ANNOUNCEMENTS'			=> 'Keine Ank&uuml;ndigungen',
	'FILEBASE_TITLE_VISIT'		=> 'filebase-besuch',
   	'L_LAST_VISIT' 				=> 'letzter Besuch',
  	'RSS_FEEDS' 				=> 'RSS Syndication',

	// corrected/added since RC1
	'OPEN_CLOSE_COLUMNS'		=> '&Ouml;ffnen/schlie&szlig;en aller Blocks',
	
	// corrected/added since RC2 below
	'ACRONYM'					=> 'Acronyme',
	'ACRONYMS'					=> 'Acronyme und Abk&uuml;rzungen',
	'ACRONYM_TOTAL'				=> 'Alle Acronyme in der Datenbank',
	'ACRONYM_REPLACEMENT'		=> 'Acronym Eintragungen',
	'TOTAL_FILES_COUNT'			=> 'Dateien in der Datenbank',
	'ST_TOT_ACTIVE_POSTERS'		=> 'Aktive Schreiber',
	'ST_TOT_ATTACH_SIZE'		=> 'Anhangsgr&ouml;sse',
	'ST_TOT_FILES_SIZE'			=> 'Dateigr&ouml;sse',
	'ST_TOT_ACRONYM'			=> 'Acronyms',
	'ST_TOT_FLAGS'				=> 'Flaggen',
	'ST_TOT_PICTURES'			=> 'Bilder',
	'ST_TOT_KB_ARTICLES'		=> 'KB Artikel',
	'ST_TOT_POSTS'				=> 'Artikel',
	'ST_TOT_TOPICS'				=> 'Themen',
	'ST_TOT_CHAT_USERS'			=> 'User im Chat',

	 // gender statistics
	'USER_GENDERS'				=> 'User Geschlecht',
	'USERS_WITH_GENDER'			=> 'User die Ihr Geschlecht angegeben haben',
	'MALE_FEMALE_RATIO'			=> 'Verh&auml;ltnis Mann/Frau',
	'MALE_COUNT'				=> 'M&auml;nnliche Mitglieder',
	'FEMALE_COUNT'				=> 'Weibliche Mitglieder',
	
	'IMG_SIZE_ALTERED'			=> 'Die Bildgr&ouml;sse wurde auf die Fenstergr&ouml;sse angepasst.<br /> Klicke auf das Bild, um es in seiner Originalgr&ouml;sse zu sehen.',
	'RETURN_PORTAL'				=> '%sZur&uuml;ck zur Portalseite%s',
	'KB_RECENT_ARTICLES'		=> 'KnowledgeBase Neueste Artikel',
	'FILEBASE_TITLE'			=> 'Filebase',

	// corrected/added since RC3 below
	'IMPORTANT_NEWS'			=> 'Globale Ank&uuml;ndigungen',
   	'TOTAL_NEWS'				=> 'Alle News',
   	'TOTAL_ANNOUNCEMENTS'		=> 'Alle Ank&uuml;ndigungen(s)',
   	'NO_PICS'					=> 'Keine Bilder verfügbar',

	// corrected/added since RC4 below
	// Recent Topics
	'RECENT_SHOWING_POSTS'		=> 'Zeige Artikel von:',
	'RECENT_SELECT_MODE'		=> 'Auswahlmodus',
	'RECENT_TOPICS'				=> 'Neue Themen',
	'RECENT_TODAY'				=> 'Heute',
	'RECENT_YESTERDAY'			=> 'Gestern',
	'RECENT_LAST24'				=> 'Letzte 24 Stunden',
	'RECENT_LASTWEEK'			=> 'Letzte Woche',
	'RECENT_DAYS'				=> 'Tage',
	'RECENT_LASTXDAYS'			=> 'Letzte %s Tage',
	'RECENT_LAST'				=> 'Letzte',
	'RECENT_FIRST'				=> 'gestartet am %s',
	'RECENT_FIRST_POSTER'		=> ' von %s',
	'RECENT_SELECT_MODE'		=> 'Wähle einen Modus:',
	'RECENT_TITLE_ONE'			=> '<font size=4>%s</font> Thema %s', // %s = topics; %s = sort method
	'RECENT_TITLE_MORE'			=> '<font size=4>%s</font> Themen %s', // %s = topics; %s = sort method
	'RECENT_TITLE_TODAY'		=> ' von Heute',
	'RECENT_TITLE_YESTERDAY'	=> ' von Gestern',
	'RECENT_TITLE_LAST24'		=> ' aus den letzten 24 Stunden',
	'RECENT_TITLE_WEEK'			=> ' von der letzten Woche',
	'RECENT_TITLE_LASTXDAYS'	=> ' von den letzen %s Tagen', // %s = days
	'RECENT_NO_TOPICS'			=> 'Keine Themen gefunden.',
	'RECENT_WRONG_MODE'			=> 'Du hast einen falschen Modus gew&auml;hlt.',
	'RECENT_CLICK_RETURN'		=> 'Click %shere%s um zur Neuigkeitenseite zur&uuml;ck zu gehen.',
	'TOTAL_RECENT_TOPICS'		=> '%s neue Themen gefunden',

	// corrected/added since 0.2 
	'NO_IMPORTANT_NEWS'			=> 'No announcements',
	'GOOGLE_BACK_TO_ENGLISH'	=> 'Return',
	'FORUM_STYLE'				=> 'Forum style',
	'BACK_TO_TOP'			    => 'Top',
	'BACK_TO_BOTTOM'		    => 'Bottom',
	
	// wordgraph
   	'BBCODETAGS'				=> 'bbCode Tags',
	
	// portal i18n widgets/blocks
   	'WIDG_EDIT_TEXT'			=> 'Edit',
   	'WIDG_CLOSE_TEXT'			=> 'Close',
   	'WIDG_EXTENT_TEXT'			=> 'Extend',
   	'WIDG_COLLAPSE_TEXT'		=> 'Collapse',
   	'WIDG_CANCEL_TEXT'		    => 'Cancel',
	'WIDG_EDIT'					=> 'Edit this block',
	'WIDG_CLOSE'				=> 'Close this block',
	'WIDG_REMOVE'				=> 'Remove this block?',
	'WIDG_CANCEL'				=> 'Cancel edition',
	'WIDG_EXTENT'				=> 'Extend this block',
	'WIDG_COLLAPSE'				=> 'Collapse this block',
 
	 // Highslide JS
	'HIGHSLIDE_LOADINGTEXT'		=> 'Loading...',
	'HIGHSLIDE_LOADINGTITLE'	=> 'Click to cancel',
	'HIGHSLIDE_FOCUSTITLE'		=> 'Click to bring to front',
	'HIGHSLIDE_FULLEXPANDTITLE'	=> 'Expand to actual size',
	'HIGHSLIDE_FULLEXPANDTEXT'	=> 'Full size',
	'HIGHSLIDE_CREDITSTEXT'		=> 'Powered by <i>Highslide JS</i>',
	'HIGHSLIDE_CREDITSTITLE'	=> 'Go to the Highslide JS homepage',
	'HIGHSLIDE_PREVIOUSTEXT'	=> 'Previous',
	'HIGHSLIDE_PREVIOUSTITLE'	=> 'Previous (arrow left)',
	'HIGHSLIDE_NEXTTEXT'		=> 'Next',
	'HIGHSLIDE_NEXTTITLE'		=> 'Next (arrow right)',
	'HIGHSLIDE_MOVETITLE'		=> 'Move',
	'HIGHSLIDE_MOVETEXT'		=> 'Move',
	'HIGHSLIDE_CLOSETEXT'		=> 'Close',
	'HIGHSLIDE_CLOSETITLE'		=> 'Close (esc)',
	'HIGHSLIDE_RESIZETITLE'		=> 'Resize',
	'HIGHSLIDE_PLAYTEXT'		=> 'Play',
	'HIGHSLIDE_PLAYTITLE'		=> 'Play slideshow (spacebar)',
	'HIGHSLIDE_PAUSETEXT'		=> 'Pause',
	'HIGHSLIDE_PAUSETITLE'		=> 'Pause slideshow (spacebar)',
	'HIGHSLIDE_NUMBER'			=> 'Image %1 of %2',
	'HIGHSLIDE_RESTORETITLE'	=> 'Click to close image, click and drag to move. Use arrow keys for next and previous.',

	// 06-10-2009 new entries portal pages
	'TOTAL_PAGE_PAGES'		    => 'Total pages',
  
	'FRONTPAGE'                => 'Front Page',
	'BOOKMARKS'                => 'Manage Bookmarks',
	'SUBSCRIPTION'             => 'Manage Subscriptions',
	'DRAFTS'                   => 'Manage Drafts',
	'ATTACHMENTS'              => 'Manage Attachments',
	
	'UPROFILE'                 => 'Edit Profile',
	'SIGNATURE'                => 'Edit Signature',
	'AVATAR'                   => 'Edit Avatar',
	'ACCOUNT'                  => 'Edit Account',
	
	'GLOBALSETTINGS'           => 'Edit Global Settings',
	'POSTINDEFAULT'            => 'Edit Posting Defaults',
	'DISPLAYOPTIONS'           => 'Edit Display Options',
	
	'COMPOSEPMMESSAGESG'       => 'Compose PM Message',
	'MANAGEPMDRAFTS'           => 'Manage PM Drafts',
	'INBOX'                    => 'Inbox',
	'OUTBOX'                   => 'Outbox',
	'SENDMESSAGEBOX'           => 'Sendbox',
	'UNREADMESSAGES'           => 'Unreadbox',
	'RULEFOLDERSETTING'        => 'Rules &amp; Folders',
	
	'EDITMEMBERSHIP'           => 'Edit Memberships',
	'MANAGEGROUPS'             => 'Manage Groups',
	
	'MANAGEFRIENDS'            => 'Manage Friends',
	'MANAGEFOES'               => 'Manage Foes',
	
	'PRIVATE_MESSAGES'     	   => 'Private Messages',
	'POST_TOPIC_INFO'     	   => 'Post &amp; Topic',
	'GROUPS_INFO'  			   => 'Usergroups',
	'OVERVIEW_INFO' 		   => 'Overview',
	'FRIENDS_FOES'			   => 'Friends &amp; Foes',
	'ADMIN'			   		   => 'Administration',
	'PROFILE_INFO'     	       => 'Settings &amp; Profile',
	'ACPANEL'     	       	   => 'ACP',
	
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
	

	/**
	* DO NOT REMOVE or CHANGE (text translation is allowed)!
	*/
	'PORTAL_COPY' 			=> '&copy; 2007, 2009 Portal XL Group, the original insane crazy Portal for phpBB3',
	'PORTAL_VERSION' 		=> 'Portal XL 5.0 ~ ',
	));

?>