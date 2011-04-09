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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(

   // general definitions
   'PORTAL'         => 'Portal',
   'PORTAL_INDEX'      => 'Portal index',
   'ANNOUNCMENTS'      => 'Bekendtgørelser',
   'NEWS'             => 'Nyheder',
   'POLL'             => 'Afstemning',
   	'NO_POLL'			=> 'Ingen afstemning tilgængelig',
   'READ_FULL'         => 'Læs alle',
   'NO_NEWS'         => 'Ingen nyheder',
   'POSTED_BY'         => 'Forfatter',
   'COMMENTS'         => 'Svar',
   'VIEW_COMMENTS'      => 'Vis svar',
   'POST_REPLY'      => 'Skriv svar',
   'CLOCK'            => 'Ur',
   'TOPIC_VIEWS'      => 'Vist',
   'FORUMS'          => 'Fora',
   'EXPAND'          => 'Åben',
   'COLLAPSE'          => 'Luk',
   'INVERT'          => 'Inverter',
   'LEFTCOL'          => 'Venstre +/-',
   'RIGHTCOL'          => 'Højre +/-',

   // who is online
   'WIO_TOTAL'         => 'I alt',
   'WIO_REGISTERED'   => 'Registeret',
   'WIO_HIDDEN'      => 'Skjult',
   'WIO_GUEST'         => 'Gæst',
   //'RECORD_ONLINE_USERS'=> 'Vis liste: <strong>%1$s</strong><br />%2$s',

   // welcome
   'WELCOME'         => 'Velkommen',
   
   // mp3 player
   'MEDIA_PLAYER'         => 'Media player',
   'MEDIA_PLAYER_POPUP'   => 'Media player',
   'MEDIA_UPLOAD'         => 'Upload media',
   'MEDIA_PLAYER_VERSION'   => 'Media Player v.2.5',

   // user menu
   'USER_MENU'         => 'Bruger menu',
   'UM_LOG_ME_IN'      => 'Husk mig',
   'UM_HIDE_ME'      => 'Skjul mig',
   'UM_MAIN_SUBSCRIBED'=> 'Tilmeldt',
   'UM_BOOKMARKS'      => 'Bogmærker',

   // statistic
   'ST_NEW'            => 'Nye',
   'ST_NEW_POSTS'         => 'Nye indlæg',
   'ST_NEW_TOPICS'         => 'Nye emner',
   'ST_NEW_ANNS'         => 'Nye bekendtgørelser',
   'ST_NEW_STICKYS'      => 'Nye opslag',
   'ST_TOP'            => 'I alt',
   'ST_TOP_ANNS'         => 'Antal bekendtgørelser',
   'ST_TOP_STICKYS'      => 'Antal opslag',
   'ST_TOT_ATTACH'         => 'Antal vedhæftet filer',
   'ST_TOT_FILES'         => 'File(r)',
   'ST_PORTAL_STARTDATE'   => 'Startdato',

   'FILES_ATTACHMENTS'      => 'Statistik for vedhæftede filer',
   'FILES_PER_DAY'         => 'Vedhæftede filer pr dag',
   'FILES_PER_POST'      => 'Vedhæftede filer pr indlæg',
   'FILES_PER_TOPIC'      => 'Vedhæftede filer pr emne',
   'FILES_PER_USER'      => 'Vedhæftede filer pr bruger',

   // visit counter
   'ST_TOT_VISIT'            => 'Antal besøg',
   'ST_LAT_VISIT'            => 'Din IP',

   // attachments
   'TOP_COUNT'               => 'Hent',
   'TOP_DATE'                  => 'Oploaded den',
   'TOP_FILENAME'               => 'Filer',
   'TOP_FILESIZE'               => 'Størrelse',
   'TOP_TEL'                  => 'Top Downloads',
   'TOP_X'                  => 'Antal gange',
   'VIEW_TOPIC_ATTACHMENTS'    => 'Antal vedhæftede filer',

   // search
   'SH'      => 'Start søgning',
   'SH_SITE'   => 'Forum',
   'SH_POSTS'   => 'i indlæg',
   'SH_AUTHOR'   => 'efter forfatter',
   'SH_ENGINE'   => 'Søgemaskiner',
   'SH_ADV'   => 'Advanceret søgning',
   
   // recent
   'RECENT_TOPIC'      => 'Nyeste emner',
   'RECENT_ANN'       => 'Bekendtgørelser',
   'RECENT_HOT_TOPIC'    => 'Nyeste indlæg',
   'LAST_REPLIED'      => 'Seneste svar',
   'BY'               => 'af',
   'ON'               => 'den',
   
   // random member
   'RND_MEMBER'   => 'Tilfældigt medlem',
   'RND_JOIN'      => 'Oprettet',
   'RND_POSTS'    => 'Antal indlæg',
   'RND_OCC'       => 'Beskæftigelse',
   'RND_FROM'       => 'Lokalitet',
   'RND_WWW'       => 'Hjemmeside',

   // random banners
   'RND_B_BANNERS'   => 'Tilfældige links', // normal banners (88x31) on portal
   'RND_H_BANNERS'   => 'Tilfældig banner', // horizontal banners ( ) on portal
   'RND_V_BANNERS'   => 'Tilfældig banner', // vertical banners (130x600) on portal
   
   // random member
   'GOOGLE_ADDS'      => 'Google/Partner Adds',
   'GOOGLE_ADDS_TXT'   => 'Indsæt din annonce her!',

   // most poster
   'MOST_POSTER' => 'Mest aktive',

   // links
   'LINKS' => 'Links',

   // latest members
   'LATEST_MEMBERS' => 'Seneste medlem',

   // make donation
   'DONATION'       => 'Giv donation',
   'DONATION_TEXT' => 'is a formation suplying services with no intention of any revenue. Anyone who wants to support this formation can do it by donating so that the cost of server, the domain and etc. could be paid of.',
   'PAY_MSG'      => 'After selecting the amount which you want to donate from the menu, you can go on by clicking on the picture of PayPal.',
   'PAY_ITEM'       => 'Make donation', // paypal item

   // main menu
   'M_MENU'       => 'Menu',
   'M_CONTENT'    => 'Indhold',
   'M_ACP'       => 'AKP',
   'M_HELP'       => 'Hjælp',
   'M_BBCODE'       => 'BBCode OSS',
   'M_TERMS'       => 'Betingelser',
   'M_PRV'       => 'Fortrolighedserklæring',
   'M_SEARCH'       => 'Søgning',

   // link us
   'LINK_US'       => 'Link til os',
   'LINK_US_TXT'    => 'Du er velkommen til at linke til <strong>%s</strong>. Brug da den følgende HTML-kode:',

   // friends
   'FRIENDS'            => 'Venner',
   'FRIENDS_OFFLINE'      => 'Offline',
   'FRIENDS_ONLINE'      => 'Online',
   'NO_FRIENDS'         => 'Du har endnu ikke angivet nogle venner',
   'NO_FRIENDS_OFFLINE'   => 'Ingen venner offline',
   'NO_FRIENDS_ONLINE'      => 'Ingen venner online',
   
   // last bots
   'LAST_VISITED_BOTS'      => 'Seneste %s bots',
   
   // wordgraph
   'WORDGRAPH'            => 'Wordgraph',
   
   // change style
   'BOARD_STYLES'         => 'Layout',
   'VIEW_STYLES'         => 'Vælg layout',
   'TOTAL_STYLES'         => 'Tilgængelige layouts',
   'STYLE_SELECT'			=> 'Vælg layout',
   
   // team
   'NO_ADMINISTRATORS_P'   => 'Ingen administratorer',
   'NO_MODERATORS_P'      => 'Ingen moderatorer',

   // chatbox
   'CHAT'                  => 'Chatbox',
   'VIEWING_CHAT'          => 'Vis chatbox',
   'CHAT_EXPLAIN'         => 'Chat Center',

   // weather
   'PORTAL_WEATHER'         => 'Vejret',

   // syndicate
   'PORTAL_SYNDICATE'       => 'RSS output',

   // navx
   'PORTAL_NAVX'            => 'Navigate-X',

   // last visitors
   'L_LAST_VISIT'          => 'Seneste %s besøgende',

      // Visit Counter
   'VISIT_COUNTER_1'       => 'Dette forum har haft <b>%d</b> besøgende siden %s',
   'VISIT_COUNTER_2'      => 'Dette forum har haft <b>%d</b> besøgende siden søndag d. 16 marts 2007',
   'VISIT_COUNTER_3'      => 'Denne side haft <b>%d</b> sidevisninger siden %s',
   'VISIT_COUNTER'       => 'Besøgstæller',

      // gallery
   'L_GALLERY'            => 'Billedgallery',

      // forum categories
   'FCATEGORIES'         => 'Forum kategorier',
   
   // actual topics scroll block
   'RECENT_ACTUAL_TOPIC'      => 'Nyeste emner',
   'RECENT_ACTUAL_ANN'       => 'Nyeste bekendtgørelser',
   'RECENT_ACTUAL_HOT_TOPIC'    => 'Nyeste indlæg',
    'RECENT_ACTUAL_ANN_NO'      => 'Der blev ikke fundet nogle Bekendtgørelser',
       
      // similar topics
   'SIMILAR_TOPICS'         => 'Lignende emner',
   
      // downloads
   'L_DOWNLOADS'            => 'Gratis downloads',

      // jumpbox RC4
   'RETURN_TO_SEARCH_ADV'       => 'Vend tilbage til avanceret søgning',
   'RETURN_TO'               => 'Gå tilbage til',
   
      // php info
   'PHP_INFO_EXPLAIN'         => 'Server Info',
   'DATABASE_SERVER_INFO'      => 'Database Server',
   'GZIP_COMPRESSION'         => 'GZip kompression ',
   'OFF'                  => 'Off',
   'ON'                  => 'On',
   'OS_INFO'               => 'Operativsystem',
   'PHP_INFO'               => 'Script compiler',
   'WEBSERVER_INFO'         => 'Webserver type',
   
    //Last Visit MOD
   'LAST_VISITS'            => 'Seneste besøgende',
   'NO_LASTVISIT_USERS'       => 'Ingen registerede brugerer',
   
   'GUEST_VISITS_TOTAL'         => '%d gæster',
   'GUEST_VISITS_ZERO_TOTAL'   => '0 guests',
   'GUEST_VISIT_TOTAL'         => '%d gæster',

   'HIDDEN_VISITS_TOTAL'      => '%d skjult og ',
   'HIDDEN_VISITS_ZERO_TOTAL'   => '0 skjult og ',
   'HIDDEN_VISIT_TOTAL'      => '%d skjult og ',

   'LASTVISIT_VISITS_TOTAL'      => 'I alt har der været <strong>%d</strong> brugerer online idag :: ',
   'LASTVISIT_VISITS_ZERO_TOTAL'   => 'I alt har der værete <strong>0</strong> brugerer online idag :: ',
   'LASTVISIT_VISIT_TOTAL'         => 'I alt har der været <strong>%d</strong> brugerer online idag :: ',
   
   'REG_VISITS_TOTAL'         => '%d registeret, ',
   'REG_VISITS_ZERO_TOTAL'      => '0 registeret, ',
   'REG_VISIT_TOTAL'         => '%d registeret, ',

    // quotes
   'QUOTES_INFO'             => 'Dagens citat',

    // partners
   'PARTNERS_INFO'             => 'Partners',

    // scroll message
    'SCROLL_MESSAGE'          => 'Info-besked',

    // crawler linker
    'CRAWLER_LINKS_TOTAL'       => 'Crawler links',
    'CRAWLER_LINKS'          => 'Crawler Feeds',

    // portal mods
   'MODS_DATABASE'            => 'Mods Database',
   'MODS_DATABASE_EXPLAIN'      => 'Du kan vedligeholde din Mods Database her.',
   'MOD_ADD'               => 'Tilføj Mod',
   'MOD_ADDED'               => 'Nyt mod tilføjet.',
   'MOD_DELETED'            => 'Mod slettet.',
   'MOD_EDIT'               => 'Rediger Mods',
   'MOD_EDIT_EXPLAIN'         => 'Her kan du redigere et eksisterende Mod.',
   'BOT_NAME'               => 'Bot navn',
   'BOT_NAME_EXPLAIN'         => 'Bruges kun til din egen information.',
   'MOD_NAME_TAKEN'         => 'Titlen findes allerede i Mods Databasen og kan derfor ikke benyttes igen.',
   'MOD_UPDATED'            => 'Mod opdateret.',
   'ERR_MOD_NO_MATCHES'      => 'Du skal mindst angive en title og en version type for moddet.',
   'NO_MOD'               => 'Ingen Mods med det angivet ID blev fundet.',
   'MOD_TITLE'               => 'Mod Titel',
   'MOD_VERSION'            => 'Version',
   'MOD_VERSION_TYPE'         => 'Versions Type',
   'MOD_VERSION_TYPE_EXPLAIN'   => 'Beta, Alpha, Dev eller RC*',
   'MOD_DESC'               => 'Beskrivelse',
   'MOD_AUTHOR'            => 'Forfatter',
   'MOD_URL'               => 'Lokalisation',
   'MOD_VISIT_WEBSITE'         => 'URL Link til hvor Moddet findes',
   'MOD_DOWNLOAD_MOD'         => 'URL Link til hvor Moddet kan hentes',
   'MOD_LIST_MOD'            => '1 Mod installed',
   'MOD_LIST_MODS'            => '%s Mods installed',
   'SORT_MOD_TITLE'         => 'SORT_MOD_TITLE',
   'SORT_MOD_VERSION'         => 'SORT_MOD_VERSION',
   'SORT_MOD_VERSION'         => 'SORT_MOD_VERSION',
   'SORT_MOD_AUTHOR'         => 'SORT_MOD_AUTHOR',
      'VIEWING_PORTAL'         => 'Vis portal',

   // Portal Pages
     'PAGES_LIST_TITLE'          => 'Portal-sider',
     'PAGES_NOT_EXIST'          => 'Denne side findes ikke.',
     'PAGES_NONE_EXIST'          => 'Der er ingen sider.',
     'PAGES_QUERY_FAILED'       => 'Kunne ikke finde disse sider.',
     'PAGES_VIEW_FULL'          => 'Vis portal-side',

   // Gallery
     'RANDOM_PIC'             => 'Tilfældige billeder',
     'TOTAL_IMAGES'             => 'billeder i vores ',
     'TOTAL_PICVIEW'          => 'antal gange vis, ',
     'TOTAL_RATEPOINT'          => 'ratingpoint, ',
     'TOTAL_PICVOTES'          => 'stemmepoint.',
     'NEWEST_PIC'             => 'Nyeste billede',
     'NEWEST_PICS'             => 'Nyeste billeder',
     'PIC_RECEIVED'             => 'Modtaget',
     'PIC_POSTER'             => 'Poster',
     'LOGIN_LOGOUT_GALLERY'       => 'Login for at se billeder',
     'PIC_COMMENTS'             => 'Kommentarer',
     'NEW_PIC_COMMENTS'          => 'nyeste kommentarer',
     'NO_NEW_PIC_COMMENTS'       => 'ingen kommentarer',

   // Boardwide definitions for tooltip tag "title"
     'RSS_FEED_FORUM'          => 'RSS 2 Feed Forum',
     'RSS_FEED_ATTACHMENTS'       => 'RSS 2 Feed filer',

   // corrected/added since 0.4B5
   'NO_ANNOUNCEMENTS'         => 'Ingen bekendtgørelser',
   'FILEBASE_TITLE_VISIT'      => 'Besøg filbase',
      'LAST_ON'                 => 'Sidste besøg', // ajax userinfo
     'RSS_FEEDS'             => 'RSS Syndication',

   // corrected/added since RC1
   'OPEN_CLOSE_COLUMNS'      => '?en/luk alle rækker',
   
   // corrected/added since RC2 below
   'ACRONYM'               => 'Akronymer',
   'ACRONYMS'               => 'Akronyms og forkortelser',
   'ACRONYM_TOTAL'            => 'Antal akronymer i database',
   'ACRONYM_REPLACEMENT'      => 'Akronym erstatning',
   	'ACRONYM_URL'				=> 'Acronym adresse',
   'TOTAL_FILES_COUNT'         => 'Antal filer i database',
   'ST_TOT_ACTIVE_POSTERS'      => 'Aktive posters',
   'ST_TOT_ATTACH_SIZE'      => 'Vedhæftet størrelse',
   'ST_TOT_FILES_SIZE'         => 'Filstørrelse',
   'ST_TOT_ACRONYM'         => 'Akronymer',
   'ST_TOT_FLAGS'            => 'Flag',
   'ST_TOT_PICTURES'         => 'Billeder',
   'ST_TOT_KB_ARTICLES'      => 'KB artikler',
   'ST_TOT_POSTS'            => 'Poster',
   'ST_TOT_TOPICS'            => 'Emner',
   'ST_TOT_CHAT_USERS'         => 'Bruger på chat',

    // gender statistics
   'USER_GENDERS'            => 'Bruger køn',
   'USERS_WITH_GENDER'         => 'Brugere der har oplyst deres køn',
   'MALE_FEMALE_RATIO'         => 'Mand/kvinde ratio',
   'MALE_COUNT'            => 'Mandlige medlemmer',
   'FEMALE_COUNT'            => 'Kvindelige medlemmer',
   
   'IMG_SIZE_ALTERED'         => 'Billedstørrelsen kan ændres for at passe til vinduet.<br /> Klik på billedet for at åbne det i den oprindelige størrelse.',
   'RETURN_PORTAL'            => '%sVend tilbage til portal siden%s',
   'KB_RECENT_ARTICLES'      => 'Vidensbasens seneste artikler',
   'FILEBASE_TITLE'         => 'Filbase',

   	// corrected/added since RC3 below
	'IMPORTANT_NEWS'			=> 'Globale opslag',
   	'TOTAL_NEWS'				=> 'Totale nyheder',
   	'TOTAL_ANNOUNCEMENTS'		=> 'Totale opslag',
   	'NO_PICS'					=> 'Ingen billeder tilgængelige',
 
   // corrected/added since RC4 below
	// Recent Topics
	'RECENT_SHOWING_POSTS'		=> 'Viser indlæg fra:',
	'RECENT_SELECT_MODE'		=> 'Vælg form',
	'RECENT_TOPICS'				=> 'Seneste emner',
	'RECENT_TODAY'				=> 'Idag',
	'RECENT_YESTERDAY'			=> 'Igår',
	'RECENT_LAST24'				=> 'Sidste 24 timer',
	'RECENT_LASTWEEK'			=> 'Sidste uge',
	'RECENT_DAYS'				=> 'Dage',
	'RECENT_LASTXDAYS'			=> 'Sidste %s dage',
	'RECENT_LAST'				=> 'Sidste',
	'RECENT_FIRST'				=> 'startet den %s',
	'RECENT_FIRST_POSTER'		=> ' af %s',
	'RECENT_SELECT_MODE'		=> 'Vælg form:',
	'RECENT_TITLE_ONE'			=> '<font size=4>%s</font> emne %s', // %s = topics; %s = sort method
	'RECENT_TITLE_MORE'			=> '<font size=4>%s</font> emner %s', // %s = topics; %s = sort method
	'RECENT_TITLE_TODAY'		=> ' fra idag',
	'RECENT_TITLE_YESTERDAY'	=> ' fra igår',
	'RECENT_TITLE_LAST24'		=> ' fra de sidste 24 timer',
	'RECENT_TITLE_WEEK'			=> ' fra den sidste uge',
	'RECENT_TITLE_LASTXDAYS'	=> ' fra de sidste %s dage', // %s = days
	'RECENT_NO_TOPICS'			=> 'Ingen emner blev fundet.',
	'RECENT_WRONG_MODE'			=> 'Du har valgt en forkert form.',
	'RECENT_CLICK_RETURN'		=> 'Klik %sher%s for at returnere til seneste side.',
	'TOTAL_RECENT_TOPICS'		=> '%s seneste emner fundet',

	// corrected/added since 0.2 
	'NO_IMPORTANT_NEWS'			=> 'Ingen opslag',
	'GOOGLE_BACK_TO_ENGLISH'	=> 'Returner',
	'FORUM_STYLE'				=> 'Forum style',
	'BACK_TO_TOP'			    => 'Til toppen',
	'BACK_TO_BOTTOM'		    => 'Til bunden',
	
	// wordgraph
   	'BBCODETAGS'				=> 'bbCode Tags',
	
	// portal i18n widgets/blocks
   	'WIDG_EDIT_TEXT'			=> 'Rediger',
   	'WIDG_CLOSE_TEXT'			=> 'Luk',
   	'WIDG_EXTENT_TEXT'			=> 'Udvid',
   	'WIDG_COLLAPSE_TEXT'		=> 'Kollaps',
   	'WIDG_CANCEL_TEXT'		    => 'Fortryd',
	'WIDG_EDIT'					=> 'Rediger denne blok',
	'WIDG_CLOSE'				=> 'Luk denne blok',
	'WIDG_REMOVE'				=> 'Fjern denne blok',
	'WIDG_CANCEL'				=> 'Fortryd redigering',
	'WIDG_EXTENT'				=> 'Udvid denne blok',
	'WIDG_COLLAPSE'				=> 'Kollaps denne blok',
 
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
	'TOTAL_PAGE_PAGES'		    => 'Total antal sider',
  
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