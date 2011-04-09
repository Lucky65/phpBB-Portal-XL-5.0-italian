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
	'PORTAL'			=> 'Portaal',
	'PORTAL_INDEX'		=> 'Portaalindex',
	'ANNOUNCMENTS'		=> 'Aankondigingen',
	'NEWS'			    => 'Nieuws',
	'POLL'			    => 'Rondvraag',
	'NO_POLL'			=> 'Geen rondvraag beschikbaar',
	'READ_FULL'			=> 'Volledige versie',
	'NO_NEWS'			=> 'Geen nieuws',
	'POSTED_BY'			=> 'Plaatser',
	'COMMENTS'			=> 'Antwoord(en)',
	'VIEW_COMMENTS'		=> 'Bekijk antwoord',
	'POST_REPLY'		=> 'Plaats antwoord',
	'CLOCK'				=> 'Klok',
	'TOPIC_VIEWS'		=> 'Bekeken',
	'FORUMS'		    => 'Forums',
	'EXPAND'		    => 'Uitvouwen',
	'COLLAPSE'		    => 'Invouwen',
	'INVERT'		    => 'Invert',
	'LEFTCOL'		    => 'Links +/-',
	'RIGHTCOL'		    => 'Rechts +/-',

	// who is online
	'WIO_TOTAL'			=> 'Totaal',
	'WIO_REGISTERED'	=> 'Geregistreerd',
	'WIO_HIDDEN'		=> 'Verborgen',
	'WIO_GUEST'			=> 'Gast',
	//'RECORD_ONLINE_USERS'=> 'Bekijk record: <strong>%1$s</strong><br />%2$s',

	// welcome
	'WELCOME'			=> 'Welkom',
	
	// mp3 player
	'MEDIA_PLAYER'			=> 'Mediaspeler',
	'MEDIA_PLAYER_POPUP'	=> 'Mediaspeler',
	'MEDIA_UPLOAD'			=> 'Upload media',
	'MEDIA_PLAYER_VERSION'	=> 'Mediaspeler 2009',

	// user menu
    'USER_MENU'             => 'Gebruikersmenu',
	'UM_LOG_ME_IN'			=> 'Herinner mij',
	'UM_HIDE_ME'			=> 'Onzichtbaar',
	'UM_MAIN_SUBSCRIBED'	=> 'Geabbonneerd',
	'UM_BOOKMARKS'			=> 'Voorkeuren',

	// statistic
	'ST_NEW'				=> 'Nieuw',
	'ST_NEW_POSTS'			=> 'Bericht',
	'ST_NEW_TOPICS'			=> 'Onderwerp',
	'ST_NEW_ANNS'			=> 'Aankondiging',
	'ST_NEW_STICKYS'		=> 'Belangrijk',
	'ST_TOP'				=> 'Totaal',
	'ST_TOP_ANNS'			=> 'Aankondigingen',
	'ST_TOP_STICKYS'		=> 'Belangrijk',
	'ST_TOT_ATTACH'			=> 'Aanhangsel(en)',
	'ST_TOT_FILES'			=> 'Bestand(en)',
	'ST_PORTAL_STARTDATE'	=> 'Startdatum',

	'FILES_ATTACHMENTS'		=> 'Aanhangsel(en) statistiek',
	'FILES_PER_DAY'			=> 'Aanhangsel(en) per day',
	'FILES_PER_POST'		=> 'Aanhangsel(en) per post',
	'FILES_PER_TOPIC'		=> 'Aanhangsel(en) per topic',
	'FILES_PER_USER'		=> 'Aanhangsel(en) per user',

	// visit counter
	'ST_TOT_VISIT'				=> 'Totaal bezoeken',
	'ST_LAT_VISIT'				=> 'Jouw IP',

	// attachments
	'TOP_COUNT'         		=> 'Gedownload',
	'TOP_DATE'         			=> 'Geplaatst op',
	'TOP_FILENAME'         		=> 'Bestanden',
	'TOP_FILESIZE'         		=> 'Grootte',
	'TOP_TEL'         			=> 'Top downloads',
	'TOP_X'         			=> 'Keer(en)',
	'VIEW_TOPIC_ATTACHMENTS' 	=> 'Totaal aanhangselen',

	// search
	'SH'				=> 'ga',
	'SH_SITE'			=> 'forums',
	'SH_POSTS'			=> 'berichten',
	'SH_AUTHOR'			=> 'autheur',
	'SH_ENGINE'			=> 'zoekmachines',
	'SH_ADV'			=> 'Uitgebreid zoeken',
	
	// recent
	'RECENT_TOPIC'		=> 'Actuele onderwerpen',
	'RECENT_ANN' 		=> 'Aankondigingen',
	'RECENT_HOT_TOPIC' 	=> 'Recente antwoorden',
	'LAST_REPLIED'      => 'Laaste antwoord',
   	'BY'            	=> 'Door',
   	'ON'            	=> 'Op',
   
	// random member
	'RND_MEMBER'	=> 'Willekeurige gebruiker',
	'RND_JOIN'		=> 'Aangemeld',
	'RND_POSTS' 	=> 'Berichten',
	'RND_OCC' 		=> 'Beroep',
	'RND_FROM' 		=> 'Locatie',
	'RND_WWW' 		=> 'Website',

	// random banners
	'RND_B_BANNERS'	=> 'Willekeurige linken', // normal banners (88x31) on portal
	'RND_H_BANNERS'	=> 'Willekeurige banner', // horizontal banners ( ) on portal
	'RND_V_BANNERS'	=> 'Willekeurige banner', // vertical banners (130x600) on portal
	
	// random member
	'GOOGLE_ADDS'		=> 'Google/Partner toevoeging',
	'GOOGLE_ADDS_TXT'	=> 'Plaats hier je toevoeging!',

	// most poster
	'MOST_POSTER' => 'Top plaatser',

	// links
	'LINKS' => 'Verwijzingen',

	// latest members
	'LATEST_MEMBERS' => 'Laatste gebruiker',

	// make donation
	'DONATION' 		=> 'Overweeg een donatie',
    'DONATION_TEXT' => 'is een forum zonder enig winstoogmerk. Iedereen die ondersteuning wil verlenen kan dit doen door te doneren, zodat de kosten van de server, het domein enzovoort, kunnen worden betaald.',
	'PAY_MSG'		=> 'Na het selecteren van het bedrag dat u wilt doneren vanuit het menu, kun je verder gaan door te klikken op de afbeelding van PayPal.',
	'PAY_ITEM' 		=> 'Doe een donatie',
	'CURRENCY_MSG' 	=> 'Kies valuta: ',
	'AMOUNT_MSG' 	=> 'Kies bedrag dat je wenst te doneren: ',
	'CLICK_MSG' 	=> 'Klik om te doneren',

	// main menu
	'M_MENU' 		=> 'Menu',
	'M_CONTENT' 	=> 'Inhoud',
	'M_ACP' 		=> 'Beheerderspaneel', // short name
	'M_MCP' 		=> 'Moderatorspaneel', // short name
	'M_HELP' 		=> 'Hulp',
	'M_BBCODE' 		=> 'BBCode handleiding',
	'M_TERMS' 		=> 'Gebruikersvoorwaarden',
	'M_PRV' 		=> 'Privacybeleid',
	'M_SEARCH' 		=> 'Zoek',

	// link us
	'LINK_US' 		=> 'Forum link',
	'LINK_US_TXT' 	=> 'Vrijblijvende link naar <strong>%s</strong>. Gebruik de onderstaande HTML voor verwerking in jouw site:',

	// friends
	'FRIENDS'				=> 'Vrienden',
	'FRIENDS_OFFLINE'		=> 'Offline',
	'FRIENDS_ONLINE'		=> 'Online',
	'NO_FRIENDS'			=> 'Geen vrienden opgegeven',
	'NO_FRIENDS_OFFLINE'	=> 'Geen vrienden offline',
	'NO_FRIENDS_ONLINE'		=> 'Geen vrienden online',
	
	// last bots
	'LAST_VISITED_BOTS'		=> 'Laatst %s gesignaliseerde zoekrobots',
	
	// wordgraph
   	'WORDGRAPH'				=> 'Woordspelerijen',
   
	// change style
   	'BOARD_STYLES'			=> 'Forumstyles',
   	'VIEW_STYLES'			=> 'Bekijk style',
   	'TOTAL_STYLES'			=> 'Beschikbare stylen',
    'STYLE_SELECT'          => 'Kies style',
	
	// team
	'NO_ADMINISTRATORS_P'	=> 'Geen beheerders',
	'NO_MODERATORS_P'		=> 'Geen moderatoren',

	// chatbox
    'CHAT'                  => 'Chatbox',
	'VIEWING_CHAT'          => 'Bekijk chatbox',
	'CHAT_EXPLAIN'			=> 'Chat Center',

	// weather
   	'PORTAL_WEATHER'         => 'Weer',

	// syndicate
   	'PORTAL_SYNDICATE'       => 'Verzamel',

	// navx
   	'PORTAL_NAVX'            => 'Navigatie-X',

	// last visitors
   	'L_LAST_VISIT' 			=> 'Laatste %s geregistreerde bezoekers',

   	// Visit Counter
   	'VISIT_COUNTER_1' 		=> 'Dit forum heeft <b>%d</b> bezoeker(s) sinds %s',
	'VISIT_COUNTER_2'		=> 'Dit forum heeft <b>%d</b> bezoeker(s) sinds zondag, maart 16, 2007',
	'VISIT_COUNTER_3'		=> 'Dit forum heeft <b>%d</b> paginahits sinds %s',
   	'VISIT_COUNTER' 		=> 'Bezoekenteller',

   	// gallery
   	'L_GALLERY'         	=> 'Photogalerie',

   	// forum categories
	'FCATEGORIES'			=> 'Forumcategorie',
	
	// actual topics scroll block
	'RECENT_ACTUAL_TOPIC'		=> 'Actuele onderwerpen',
	'RECENT_ACTUAL_ANN' 		=> 'Actuele aankondigigen',
	'RECENT_ACTUAL_HOT_TOPIC' 	=> 'Actuele geliefde onderwerpen',
    'RECENT_ACTUAL_ANN_NO'      => 'Sorry, er zijn geen aankondigigen gevonden',
	 	
   	// similar topics
	'SIMILAR_TOPICS'			=> 'Gerelateerde onderwerpen',
	
   	// downloads
	'L_DOWNLOADS'				=> 'Vrije downloads',

   	// jumpbox RC4
	'RETURN_TO_SEARCH_ADV'	    => 'Terug naar uitgebreid zoeken',
	'RETURN_TO'					=> 'Terug naar',
	
   	// php info
	'PHP_INFO_EXPLAIN'			=> 'Server Info',
	'DATABASE_SERVER_INFO'		=> 'Database Server',
	'GZIP_COMPRESSION'			=> 'GZip compressie ',
	'OFF'						=> 'Aan',
	'ON'						=> 'Op',
	'OS_INFO'					=> 'Operatiesysteem',
	'PHP_INFO'					=> 'Scriptcompiler',
	'WEBSERVER_INFO'			=> 'Webserver type',
	
    //Last Visit MOD
	'LAST_VISITS'				=> 'Laatste bezoeken',
	'NO_LASTVISIT_USERS' 		=> 'Geen geregistreerde gebruiker(s)',
	
	'GUEST_VISITS_TOTAL'			=> '%d gast(en)',
	'GUEST_VISITS_ZERO_TOTAL'	=> '0 gast(en)',
	'GUEST_VISIT_TOTAL'			=> '%d gast',

	'HIDDEN_VISITS_TOTAL'		=> '%d verborgen en ',
	'HIDDEN_VISITS_ZERO_TOTAL'	=> '0 verborgen en ',
	'HIDDEN_VISIT_TOTAL'		=> '%d verborgen en ',

	'LASTVISIT_VISITS_TOTAL'		=> 'Totaal waren <strong>%d</strong> gebruikers online binnen de laatste 24 uur :: ',
	'LASTVISIT_VISITS_ZERO_TOTAL'	=> 'Totaal waren er <strong>0</strong> gebruikers online binnen de laatste 24 uur :: ',
	'LASTVISIT_VISIT_TOTAL'			=> 'Totaal was  <strong>%d</strong> gebruiker online binnen de laatste 24 uur :: ',
	
	'REG_VISITS_TOTAL'			=> '%d geregistreerd, ',
	'REG_VISITS_ZERO_TOTAL'		=> '0 geregistreerd, ',
	'REG_VISIT_TOTAL'			=> '%d geregistreerd, ',

    // quotes
	'QUOTES_INFO'			    => 'Spreuk van de dag',

    // partners
	'PARTNERS_INFO'			    => 'Partners',

    // scroll message
    'SCROLL_MESSAGE' 			=> 'Infobericht',

    // crawler linker
    'CRAWLER_LINKS_TOTAL' 		=> 'Crawler linken totaal',
    'CRAWLER_LINKS' 			=> 'Crawler bronnen',

    // portal mods
	'MODS_DATABASE'				=> 'Modsdatabank',
	'MODS_DATABASE_EXPLAIN'		=> 'Pleeg hier het onderhoud van je Mods Database. Toevoegen, bewerken of verwijderen Mods.',
	'MOD_ADD'					=> 'Toevoegen modificatie',
    'MOD_ADDED'                 => 'Nieuwe modificatie succesvol toegevoegd.',
    'MOD_DELETED'               => 'Modificatie succesvol verwijderd.',
	'MOD_EDIT'					=> 'Bewerk modificaties',
    'MOD_EDIT_EXPLAIN'          => 'Hier kun je een bestaand item toevoegen of bewerken. De titel en het versienummer zijn verplicht. Je zult ook in staat zijn om de details van waar de mod kan worden gedownload en waar de Mod zelf kan gevonden worden te bekijken.',
	'BOT_NAME'					=> 'Botnaam',
	'BOT_NAME_EXPLAIN'			=> 'Wordt alleen gebruikt voor uw eigen gegevens.',
	'MOD_NAME_TAKEN'			=> 'De titel is al in gebruik in de Mods Database en kan niet opnieuw gebruikt worden.',
	'MOD_UPDATED'				=> 'Bestaande Mod bijgewerkt.',
    'ERR_MOD_NO_MATCHES'        => 'Je moet tenminste de Mod-titel en Mod-versie voor dit item opgeven.',
	'NO_MOD'					=> 'Geen Mod gevonden met de opgegeven ID.',
	'MOD_TITLE'					=> 'Modificatietitel',
	'MOD_VERSION'				=> 'Versie',
	'MOD_VERSION_TYPE'			=> 'Versietype',
	'MOD_VERSION_TYPE_EXPLAIN'	=> 'Beta, Alpha, Dev of RC*',
	'MOD_DESC'					=> 'Omschrijving',
	'MOD_AUTHOR'				=> 'Autheur',
	'MOD_URL'					=> 'Locatie',
	'MOD_VISIT_WEBSITE'			=> 'URL Link where Mod is published',
	'MOD_DOWNLOAD_MOD'			=> 'URL Link where Mod can be downloaded',
	'MOD_LIST_MOD'				=> '1 Modificatie toegevoegd',
	'MOD_LIST_MODS'				=> '%s Modificaties toegevoegd',
	'SORT_MOD_TITLE'            => 'Sorteer naar modificatie-titel',
	'SORT_MOD_VERSION'          => 'Sorteer naar modificatie-versie',
	'SORT_MOD_AUTHOR'           => 'Sorteer naar modificatie-autheur',
   	'VIEWING_PORTAL'			=> 'Bekijk portaal',
	'DOWNLOAD_MOD'				=> 'Download',

	// Portal Pages
  	'PAGES_LIST_TITLE' 			=> 'Portaalpagina\'s',
  	'PAGES_NOT_EXIST' 			=> 'Deze pagina bestaat niet.',
  	'PAGES_NONE_EXIST' 			=> 'Er zijn geen pagina\'s aanwezig.',
  	'PAGES_QUERY_FAILED' 		=> 'Fout tijdens opvragen pagina\'s.',
  	'PAGES_VIEW_FULL' 			=> 'Bekijk portaalpagina',

	// Boardwide definitions for RSS 2 links
  	'RSS_FEED_FORUM' 			=> 'RSS 2 bron forum',
  	'RSS_FEED_ATTACHMENTS' 		=> 'RSS 2 bron bijlagen',
  	'RSS_FEED_DOWNLODS' 		=> 'RSS 2 bron downloads',
  	'RSS_FEED_KB' 				=> 'RSS 2 bron kennis bank',
  	'RSS_FEED_GALLERY' 			=> 'RSS 2 bron galerie',
  	'RSS_FEED_ARCADE' 			=> 'RSS 2 bron Arcade',
  	'RSS_FEED_VIDEO' 			=> 'RSS 2 Feed Video',

	// corrected/added since 0.4B5 
	'NO_ANNOUNCEMENTS'			=> 'Geen aankondigingen',
	'FILEBASE_TITLE_VISIT'		=> 'Bezoek de downloadbase',
   	'LAST_ON' 				    => 'Laatste bezoek', // ajax userinfo
  	'RSS_FEEDS' 				=> 'RSS Syndicatie',

	// corrected/added since RC1
	'OPEN_CLOSE_COLUMNS'		=> 'Open/Sluit alle kolommen',
	
	// corrected/added since RC2 below
	'ACRONYM'					=> 'Acroniem',
	'ACRONYMS'					=> 'Acroniemen en afkortingen',
	'ACRONYM_TOTAL'				=> 'Totaal acroniemen in databank',
	'ACRONYM_REPLACEMENT'		=> 'Acroniem vervanger',
	'ACRONYM_URL'				=> 'Acroniem url',
	'TOTAL_FILES_COUNT'			=> 'Totaal bestanden in databank',
	'ST_TOT_ACTIVE_POSTERS'		=> 'Actieve schrijvers',
	'ST_TOT_ATTACH_SIZE'		=> 'Bijlangengrootte',
	'ST_TOT_FILES_SIZE'			=> 'Bestandgrootte',
	'ST_TOT_ACRONYM'			=> 'Acroniemen',
	'ST_TOT_FLAGS'				=> 'Vlaggen',
	'ST_TOT_PICTURES'			=> 'Plaatjes',
	'ST_TOT_KB_ARTICLES'		=> 'KB artiekelen',
	'ST_TOT_POSTS'				=> 'Berichten',
	'ST_TOT_TOPICS'				=> 'Onderwerpen',
	'ST_TOT_CHAT_USERS'			=> 'Gebruikers in chat',
	'ST_TOT_THANKS_USERS'		=> 'Gebruikers bedankt',

	 // gender statistics
	'USER_GENDERS'				=> 'Geslacht',
	'USERS_WITH_GENDER'			=> 'Gebruikers die een geslacht op hebben gegeven',
	'MALE_FEMALE_RATIO'			=> 'Man/Vrouw ratio',
	'MALE_COUNT'				=> 'Mannelijke gebruikers',
	'FEMALE_COUNT'				=> 'Vrouwelijke gebruikers',
	
	'IMG_SIZE_ALTERED'			=> 'Grootte van het plaatje kan aangepast zijn om in venster te passen.<br /> Klik op het plaatje om het in originele grootte te openen.',
	'RETURN_PORTAL'				=> '%sTerug naar de portaalpagina%s',
	'KB_RECENT_ARTICLES'		=> 'Kennisbank recente artikelen',
	'FILEBASE_TITLE'			=> 'Downloads',

	// corrected/added since RC3 below
	'IMPORTANT_NEWS'			=> 'Globale aankondiging',
   	'TOTAL_NEWS'				=> 'Totaal niews',
   	'TOTAL_ANNOUNCEMENTS'		=> 'Totaal aankondigingen',
   	'NO_PICS'					=> 'Geen plaatjes beschikbaar',

	// corrected/added since RC4 below
	// Recent Topics
	'RECENT_SHOWING_POSTS'		=> 'Bekijk berichten van:',
	'RECENT_SELECT_MODE'		=> 'Kies mode',
	'RECENT_TOPICS'				=> 'Recente onderwerpen',
	'RECENT_TODAY'				=> 'Vandaag',
	'RECENT_YESTERDAY'			=> 'Gisteren',
	'RECENT_LAST24'				=> 'Laatste 24 uur',
	'RECENT_LASTWEEK'			=> 'Laatste week',
	'RECENT_DAYS'				=> 'Dagen',
	'RECENT_LASTXDAYS'			=> 'Laatste %s dagen',
	'RECENT_LAST'				=> 'Laatste',
	'RECENT_FIRST'				=> 'started at %s',
	'RECENT_FIRST_POSTER'		=> ' by %s',
	'RECENT_SELECT_MODE'		=> 'Kies mode:',
	'RECENT_TITLE_ONE'			=> '<font size=4>%s</font> onderwerp %s', // %s = topics; %s = sort method
	'RECENT_TITLE_MORE'			=> '<font size=4>%s</font> onderwerpen %s', // %s = topics; %s = sort method
	'RECENT_TITLE_TODAY'		=> ' van vandaag',
	'RECENT_TITLE_YESTERDAY'	=> ' van gisteren',
	'RECENT_TITLE_LAST24'		=> ' van de laatste 24 uur',
	'RECENT_TITLE_WEEK'			=> ' van de laatste week',
	'RECENT_TITLE_LASTXDAYS'	=> ' van de laatste %s dagen', // %s = days
	'RECENT_NO_TOPICS'			=> 'Geen onderwerpen gevonden.',
	'RECENT_WRONG_MODE'			=> 'Je heb een foutieve mode gekozen.',
	'RECENT_CLICK_RETURN'		=> 'Klik %shier%s om naar de recente pagina terug te keren.',
	'TOTAL_RECENT_TOPICS'		=> '%s recente onderwerpen gevonden',

	// corrected/added since 0.2 
	'NO_IMPORTANT_NEWS'			=> 'Geen aankondigingen',
	'GOOGLE_BACK_TO_ENGLISH'	=> 'Terug',
	'FORUM_STYLE'				=> 'Forumstyle',
	'BACK_TO_TOP'			    => 'Naar boven',
	'BACK_TO_BOTTOM'		    => 'Naar beneden',
	
	// bbCode tags
   	'BBCODETAGS'				=> 'bbCode Tags',
   
	// change language
   	'BOARD_LANGUAGE'			=> 'Forumtalen',
   	'VIEW_LANGUAGE'				=> 'Bekijk taal',
   	'TOTAL_LANGUAGE'			=> 'Beschikbare talen',
    'LANGUAGE_SELECT'          	=> 'Kies taal',

	// phpBB Gallery
  	'RANDOM_PIC' 				=> 'Willekeurige afbeeldingen',
  	'TOTAL_IMAGES' 				=> 'plaatjes in onze ',
  	'TOTAL_PICVIEW' 			=> 'bekeken, ',
  	'TOTAL_RATEPOINT' 			=> 'waarderingspunten, ',
  	'TOTAL_PICVOTES' 			=> 'stempunten.',
  	'NEWEST_PIC' 				=> 'Nieuwste afbeelding',
  	'NEWEST_PICS' 				=> 'Nieuwste afbeeldingen',
  	'PIC_TITLE' 				=> 'Afbeeldingnaam',
  	'PIC_RECEIVED' 				=> 'Ontvangen',
  	'PIC_POSTER' 				=> 'Plaatser',
  	'LOGIN_LOGOUT_GALLERY' 		=> 'Login on de afbeeldingen te kunnen bekijken',
  	'PIC_COMMENTS' 				=> 'Commentaren',
  	'NEW_PIC_COMMENTS' 			=> 'nieuwste commentaren',
  	'NO_NEW_PIC_COMMENTS' 		=> 'geen commentaren',
  	'RECENT_PUBLIC_PICS' 		=> 'Actuele afbeeldingen',
	
	// portal i18n widgets/blocks
   	'WIDG_EDIT_TEXT'			=> 'Bewerken',
   	'WIDG_CLOSE_TEXT'			=> 'Sluiten',
   	'WIDG_EXTENT_TEXT'			=> 'Uitvouwen',
   	'WIDG_COLLAPSE_TEXT'		=> 'Invouwen',
   	'WIDG_CANCEL_TEXT'		    => 'Ongedaan',
	'WIDG_EDIT'					=> 'Bewerk dit blok',
	'WIDG_CLOSE'				=> 'Sluit dit blok',
	'WIDG_REMOVE'				=> 'Verwijder dit blok?',
	'WIDG_CANCEL'				=> 'Bewerken ongedaan maken',
	'WIDG_EXTENT'				=> 'Dit blok uitvouwen',
	'WIDG_COLLAPSE'				=> 'Dit blok invouwen',
 
	 // Highslide JS
	'HIGHSLIDE_LOADINGTEXT'		=> 'Bezig met laden...',
	'HIGHSLIDE_LOADINGTITLE'	=> 'Klik om te stoppen',
	'HIGHSLIDE_FOCUSTITLE'		=> 'Klik om naar voren te brengen',
	'HIGHSLIDE_FULLEXPANDTITLE'	=> 'Vergroot tot ware grootte',
	'HIGHSLIDE_FULLEXPANDTEXT'	=> 'Volledige grootte',
	'HIGHSLIDE_CREDITSTEXT'		=> 'Powered by <i>Highslide JS</i>',
	'HIGHSLIDE_CREDITSTITLE'	=> 'Ga naar de Highslide JS homepage',
	'HIGHSLIDE_PREVIOUSTEXT'	=> 'Vorige',
	'HIGHSLIDE_PREVIOUSTITLE'	=> 'Vorige (pijl links)',
	'HIGHSLIDE_NEXTTEXT'		=> 'Volgende',
	'HIGHSLIDE_NEXTTITLE'		=> 'Volgende (pijl rechts)',
	'HIGHSLIDE_MOVETITLE'		=> 'Verplaats',
	'HIGHSLIDE_MOVETEXT'		=> 'Verplaats',
	'HIGHSLIDE_CLOSETEXT'		=> 'Sluiten',
	'HIGHSLIDE_CLOSETITLE'		=> 'Sluiten (esc)',
	'HIGHSLIDE_RESIZETITLE'		=> 'Aanpassen',
	'HIGHSLIDE_PLAYTEXT'		=> 'Afspelen',
	'HIGHSLIDE_PLAYTITLE'		=> 'Afspelen slideshow (spacebar)',
	'HIGHSLIDE_PAUSETEXT'		=> 'Pauze',
	'HIGHSLIDE_PAUSETITLE'		=> 'Pauze slideshow (spacebar)',
	'HIGHSLIDE_NUMBER'			=> 'Plaatje %1 van %2',
	'HIGHSLIDE_RESTORETITLE'	=> 'Klik om het plaatje te sluiten, klik en beweeg om te verplaatsen. Gebruik de pijltoetsen voor volgende en vorige.',

	// Signatures, use short words as the space is limited
	'SIG_STATISTICS_FOR'		=> 'Statistieken voor',
	'SIG_PHPBB_VERSION'			=> 'phpBB versie:',
	'SIG_PORTALXL_VERSION'		=> '- Portal XL versie:',
	'SIG_MEMBERS'				=> 'Gebruikers:',
	'SIG_ONLINE'				=> 'Online:',
	'SIG_DOMAIN'				=> '- Jouw IP:',
	'SIG_TOTAL_POSTS'			=> 'Berichten:',
	'SIG_POSTS_IN'				=> 'berichten in',
	'SIG_TOPICS'				=> 'onderwerpen',
	'SIG_TOPICS_CAPS'			=> 'Onderwerpen:',
	'SIG_NEWEST_MEMBER'			=> 'Niewste gebruiker:',
	'SIG_WELCOME_BACK'			=> 'Welkom terug',
	'SIG_RANK'					=> 'Rang:',
	'SIG_POSTS'					=> 'Berichten:',
	'SIG_MEMBER_FOR'			=> 'Gebruiker sinds',
	'SIG_POST_PERCENTAGE'		=> 'Post percentage:',
	'SIG_LAST_VISITED'			=> 'Laatste bezoek:',
	'SIG_AGE'					=> 'Leeftijd:',
	'SIG_DAYS'					=> 'dagen',
	'SIG_TIMEPLAYED'			=> 'Time Gaming - ',
	'SIG_USERWINS'				=> 'Total Wins - ',
	'SIG_TOTALGAMES'			=> 'Games - ',
	'SIG_GAMESPLAYED'			=> 'Total Plays - ',
	
	// 06-10-2009 new entries portal pages
	'TOTAL_PAGE_PAGES'		    => 'Totaal paginas',
	
	// Thanks
	'MOST_THANKS'				=> 'Meest bedankt',
	'THANK_GIVEN'				=> 'Uit',
	'THANK_RECEIVED'			=> 'In',
	
	// Gender posts
	'ST_TOT_MALE_GENDER_POSTS'	=> 'Berichten door mannen',
	'ST_TOT_FEMALE_GENDER_POSTS'=> 'Berichten door vrouwen',
	'ST_TOT_UNDEF_GENDER_POSTS'	=> 'Ongespecificeerde berichten',
	
	// Show voters			
	'TOTAL_HAVE_VOTED'			=> 'Hebben gestemd',
	
	// Ranks page		
    'NO_RANKS'        => 'Geen rangen toegankelijk op dit forum.',
    'RANKS_TITLE'     => 'Rangenlijst',
    'RANK_EDIT'       => 'Bewerk rang',
    'RANKS'           => 'Rangenpagina',
    'RANK_ID'         => '#',
    'RANK_TITLE'      => 'Rangtitel',
    'RANK_MIN'        => 'Minimum berichten',
    'RANK_IMAGE'      => 'Rangplaatje',
	'RANK_COUNT'	  => '1 Rang ge&iuml;nstalleerd',
	'RANK_COUNT'      => '%s Rangen ge&iuml;nstalleerd',
	
 	// Smiles page		
    'NO_SMILES'       => 'Er zijn geen smiles ge&iuml;nstalleerd in dit forum.',
    'SMILES_TITLE'    => 'Smileslijst',
    'SMILEY_ID'       => '#',
    'SMILEY_CODE'     => 'Smiley code',
    'SMILEY_IMG'      => 'Smiley plaatje',
    'SMILEY_DESC'     => 'Smiley emotie',
	'SMILIEY_COUNT'	  => '1 smile ge&iuml;nstalleerd',
	'SMILIEY_COUNT'   => '%s smiles ge&iuml;nstalleerd',
	
 	// Guest Hide BBCode MOD	
    'HIDE_REG'      => 'Uitsluitend beschikbaar voor geregistreerde gebruikers.',
	'HIDE_ON' 		=> '<strong>Verborgen tekst</strong>: AAN',
	'HIDE_OFF' 		=> '<strong>Verborgen tekst</strong>: UIT',
  
	// phpBB AJAX Chat
	'SHOUTBOX'		=> 'Chatbox',
	'CHAT_LABEL'	=> 'In Chatbox',
	'CHAT_TITLE'	=> 'Online',
	'CHAT_WINDOW'	=> 'Chatbox als venster',
	// phpBB AJAX Chat
  
	// script welcome message login block
	'WELCOME_MORNING'       => 'Goedemorgen ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']) . '!',
	'WELCOME_AFTERNOON'     => 'Goedemiddag ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']). '!',
	'WELCOME_EVENING'       => 'Goedenavond ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']) . '!',
	'WELCOME_GENERAL'		=> 'Welkom @ ' . $config['sitename'] . ' ',
	// script welcome message login block
	
	// SEO meta keyword dispaly in viewtopic		
	'COMMON_SEARCH_TERMS'	=> 'Sleutelwoorden voor dit onderwerp:',
	
	// Naviagtion pop-up menu entries		
	'LOGIN_PORTAL_INFO'	    	=> 'Om je te kunnen aanmelden moet je eerst geregisteerd zijn. Registeren neemt alleen een paar secondes in beslag, maar het geeft je veel meer mogelijkheden. Het is mogelijk dat de forumbeheerder extra permissies geeft aan geregistreerde gebruikers. Voordat je gaat registeren, wees er dan zeker van dat je bekend wordt met onze gebruikersvoorwaarden en de andere relaterende voorwaarden. Wees er ook zeker van dat je de forumregels doorleest wanneer je dit forum doorzoekt.',
	'LOGIN_MORE_PORTAL_INFO'	=> 'Meer inloginfo...',
	'LOGOUT_PORTAL_INFO'		=> 'Bezoek deze site zo vaak mogelijk. Ontwikkelingen en veranderingen zullen dagelijks in het forum gepost worden. Dank je voor het bezoek aan ' . $config['sitename'] . ', wij hopen dat je de site toevoegd aan je favorieten!',
	'LOGOUT_MORE_PORTAL_INFO'	=> 'Meer uitloginfo...',

	// Reset closed/deleted blocks to default state
	'PORTAL_RESET_BLOCKS'		=> 'Reset blokken',
	'PORTAL_WIDGET_STATES'		=> 'Blokken status',
	'PORTAL_OPEN_COLUMNS'		=> 'Toon alle kollommen',
	'PORTAL_CLOSE_COLUMNS'		=> 'Verberg alle kollommen',
	'PORTAL_OPEN_MENUS'		    => 'Toon blokkenmenus',
	'PORTAL_CLOSE_MENUS'		=> 'Verberg blokkenmenus',
	
	// Viewtopic user information dropdown		
    'USERS_INFORMATION'         => 'Gebruikersinfo',

	// Paypal Currencies
	'PAYPAL_CURRENCY_GBP'		=> 'Pond Sterling (GBP)',
	'PAYPAL_CURRENCY_USD'		=> 'U.S. Dollars (USD)',
	'PAYPAL_CURRENCY_EUR'		=> 'Euros (EUR)',
	'PAYPAL_CURRENCY_AUD'		=> 'Australische Dollars (AUD)',
	'PAYPAL_CURRENCY_CAD'		=> 'Canadese Dollars (CAD)',
	'PAYPAL_CURRENCY_CZK'		=> 'Tsjechische Kroon (CZK)',
	'PAYPAL_CURRENCY_DKK'		=> 'Deense Kronen (DKK)',
	'PAYPAL_CURRENCY_HKD'		=> 'Hong Kong Dollars (HKD)',
	'PAYPAL_CURRENCY_HUF'		=> 'Hongaarse Forint (HUF)',
	'PAYPAL_CURRENCY_NZD'		=> 'Nieuw-Zeelandse Follars (NZD)',
	'PAYPAL_CURRENCY_NOK'		=> 'Noorse Kronen (NOK)',
	'PAYPAL_CURRENCY_PLN'		=> 'Poolse Zloty (PLN)',
	'PAYPAL_CURRENCY_SGD'		=> 'Singapore Dollars (SGD)',
	'PAYPAL_CURRENCY_SEK'		=> 'Zweedse Kronen (SEK)',
	'PAYPAL_CURRENCY_CHF'		=> 'Zwitserse Franken (CHF)',
	'PAYPAL_CURRENCY_JPY'		=> 'Yen (JPY)',
	
 	// bbCodes page		
    'NO_BBCODES'       			=> 'Geen bbCodes beschikbaar op dit forum.',
    'BBCODES_TITLE'    			=> 'Lijst bbCodes',
    'BBCODE_ID'       			=> '#',
    'BBCODE_DISPLAY'       		=> 'Actief',
    'BBCODE_CODE'     			=> 'bbCode tag',
    'BBCODE_TPL'     			=> 'bbCode html',
    'BBCODE_HELP'     			=> 'bbCode hulp',
    'BBCODE_ICON'     			=> 'Icoon',
	'BBCODE_COUNT'	  			=> '1 bbCode beschikbaar',
	'BBCODE_COUNT'   			=> '%s bbCodes beschikbaar',

    // zodiacs
    'ZODIAC'                    => 'Dierenriemtekens',


	/**
	* DO NOT REMOVE or CHANGE (text translation is allowed)!
	*/
	'PORTAL_COPY' 			=> '&copy; 2007, 2009 Portal XL Group, the original insane crazy Portal for phpBB3',
	'PORTAL_VERSION' 		=> 'Portal XL 5.0 ~ ',
	));

?>