<?php
/** 
*
* @name acp_portal_xl.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
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

   'ACP_PORTAL_INFO'                  			=> 'Portal Administration',
   'ACP_PORTAL_INFO_EXPLAIN'           			=> 'Thank you for choosing Portal XL 5.0 as your portal solution. On this site you can manage the portal of your board. The screens inhere will give you a quick overview of all the various portal settings. The links on the left hand side of this screen allow you to control every aspect of your portal experience. ACP settings by DaMysterious 2007.<br />
    <div class="successbox">
	<h3>Author Notes</h3>
	<p>Creating, maintaining and updating this MOD required/requires a lot of time and effort.<br />
	   If you appreciate PortalXL and feel the desire to express your thanks through a donation this would be greatly appreciated.<br /> 
	   PortalXL\'s Paypal ID is <strong>portalxl@xs4all.nl</strong>, or visit our special PortalXL donation page <a href="http://www.portalxl.nl/PORTAL_XL_Paypal_Donation.html" target="_blank">here</a>.<br /><br />
	   The suggested minimum donation amount for this MOD is Euro 25.00 (any higher amount will help more).<br />
	   If you are a registered user of the portalxl.nl forum, please leave your forum name/alias as comment so your level can be raised up in exchange.</p>
	</div><p>',

	// announcements
   'ACP_PORTAL_ANNOUNCE_INFO'           		=> 'Portaal mededelingen',
   'ACP_PORTAL_ANNOUNCE_SETTINGS'               => 'mededelingen installingen',
   'ACP_PORTAL_ANNOUNCE_SETTINGS_EXPLAIN'       => 'Hier kun je de mededelingen veranderen en andere specifieke opties beheren.',
   'PORTAL_ANNOUNCMENTS'                       	=> 'Laat mededelingen zien.',
   'PORTAL_ANNOUNCMENTS_EXPLAIN'                => 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_NUMBER_OF_ANNOUNCMENTS'             	=> 'Aantgal mededelingen op de portaal',
   'PORTAL_NUMBER_OF_ANNOUNCMENTS_EXPLAIN'      => '0 betekent onbeperkt',
   'PORTAL_ANNOUNCMENTS_DAY'                   	=> 'Aantal dagen dat de mededeling blijft staan',
   'PORTAL_ANNOUNCMENTS_DAY_EXPLAIN'           	=> '0 betekent onbeperkt',
   'PORTAL_ANNOUNCMENTS_LENGTH'                	=> 'Maximale lengte van de mededelingen.',
   'PORTAL_ANNOUNCMENTS_LENGTH_EXPLAIN'       	=> 'Deze waarde betekent het aantal karakters dat getoond wordt. 0 betekent onbeperkt.',
   'PORTAL_GLOBAL_ANNOUNCMENTS_FORUM'          	=> 'Globale mededelingen forum ID',
   'PORTAL_GLOBAL_ANNOUNCMENTS_FORUM_EXPLAIN'   => 'Forum waar we de artikelen vandaan halen (je moet een forum ID invullen), voor meerdere forums gebruik je een komma, bijv. 1,2,5. Laat dit veld niet leeg, 0 is dan vereist.',

	// news
   'ACP_PORTAL_NEWS_INFO'                  		=> 'Portaal Nieuws',
   'ACP_PORTAL_NEWS_SETTINGS'                  	=> 'Nieuws instellingen',
   'ACP_PORTAL_NEWS_SETTINGS_EXPLAIN'       	=> 'Hier kun je de nieuws informatie veranderen en andere specifieke opties beheren.',
   'PORTAL_NEWS'                              	=> 'Laat nieuws zien',
   'PORTAL_NEWS_EXPLAIN'                        => 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_SHOW_ALL_NEWS'                     	=> 'Laat alle artikelen zien in dit forum',
   'PORTAL_SHOW_ALL_NEWS_EXPLAIN'             	=> 'Inclusief stickies, mededelingen en globale mededelingen?',
   'PORTAL_NUMBER_OF_NEWS'                    	=> 'Aantal nieuws artikelen op het portaal',
   'PORTAL_NUMBER_OF_NEWS_EXPLAIN'            	=> '0 betekent onbeperkt',
   'PORTAL_NEWS_LENGTH'                       	=> 'Maximale lengte van een nieuws artikel.',
   'PORTAL_NEWS_LENGTH_EXPLAIN'               	=> 'Deze waarde betekent het aantal karakters dat getoond wordt. 0 betekent onbeperkt.',
   'PORTAL_NEWS_FORUM'                        	=> 'Nieuws Forum ID',
   'PORTAL_NEWS_FORUM_EXPLAIN'             		=> 'Forum waar we de artikelen vandaan halen (je moet een forum ID invullen), voor meerdere forums gebruik je een komma, bijv. 1,2,5. Laat dit veld niet leeg, 0 is dan vereist.',

	// recent topics
   'ACP_PORTAL_RECENT_INFO'                  	=> 'Portaal recente onderwerpen',	
   'ACP_PORTAL_RECENT_SETTINGS'                 => 'Recente onderwerpen instellingen',	
   'ACP_PORTAL_RECENT_SETTINGS_EXPLAIN'       	=> 'Hier kun je de recente onderwerpen veranderen en andere specifieke opties beheren.',
   'PORTAL_RECENT'                  			=> 'Laat recente onderwepen zien',
   'PORTAL_RECENT_EXPLAIN'                  	=> 'Laat dit blok zien. Ja/Nee? <br /> Dit 3-tabblad bovenste centrum blok bevat Mededelingen, populaire onderwerpen en onderwerpen. Indien je "Nee" kiest, dan verdwijnt het hele blok.',
   'PORTAL_MAX_TOPIC'                          	=> 'Limiet van recente onderwerpen',
   'PORTAL_MAX_TOPIC_EXPLAIN'                   => '0 betekent onbeperkt',
   'PORTAL_RECENT_TITLE_LIMIT'                 	=> 'Karakter limiet voor de recente onderwerpen',
   'PORTAL_RECENT_TITLE_LIMIT_EXPLAIN'          => '0 betekent onbeperkt',
   
	// paypal
   'ACP_PORTAL_PAYPAL_INFO'                  	=> 'Portaal Paypal',	
   'ACP_PORTAL_PAYPAL_SETTINGS'                 => 'Paypal instellingen',
   'ACP_PORTAL_PAYPAL_SETTINGS_EXPLAIN'       	=> 'Hier kun je Paypal informatie veranderen en andere specifieke opties beheren.',
   'PORTAL_PAY_C_BLOCK'                        	=> 'Laat Paypal center zien',
   'PORTAL_PAY_C_BLOCK_EXPLAIN'                 => 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_PAY_S_BLOCK'                        	=> 'Klein Paypal blok',
   'PORTAL_PAY_S_BLOCK_EXPLAIN'                 => 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_PAY_ACC'                            	=> 'Paypal account om te gebruiken',
   'PORTAL_PAY_ACC_EXPLAIN'                     => 'Vul het email adres in wat je voor je Paypal account hebt gebruikt, bijv xxx@xxx.com',

	// last member
   'ACP_PORTAL_MEMBERS_INFO'               		=> 'Portaal nieuwste leden',
   'ACP_PORTAL_MEMBERS_SETTINGS'                => 'Nieuwste leden instellingen',
   'ACP_PORTAL_MEMBERS_SETTINGS_EXPLAIN'       	=> 'Hier kun je nieuwste leden instellingen veranderen en andere specifieke opties beheren.',
   'PORTAL_LATEST_MEMBERS'                  	=> 'Laat nieuwste leden zien',
   'PORTAL_LATEST_MEMBERS_EXPLAIN'              => 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_MAX_LAST_MEMBER'                    	=> 'Limiet van te laten zien nieuwste leden',
   'PORTAL_MAX_LAST_MEMBER_EXPLAIN'             => '0 betekent onbeperkt',
   
	// bots
   'ACP_PORTAL_BOTS_INFO'                    	=> 'Portaal bezoekende Bots',
   'ACP_PORTAL_BOTS_SETTINGS'                   => 'Bezoekende bots instellingen',
   'ACP_PORTAL_BOTS_SETTINGS_EXPLAIN'       	=> 'Hier kun je bezoekende bots instellingen veranderen en andere specifieke opties beheren.',
   'PORTAL_LOAD_LAST_VISITED_BOTS'             	=> 'Laat bezoekende bots zien',
   'PORTAL_LOAD_LAST_VISITED_BOTS_EXPLAIN'      => 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_LAST_VISITED_BOTS_NUMBER'           	=> 'Hoeveel bots laten we zien?',
   'PORTAL_LAST_VISITED_BOTS_NUMBER_EXPLAIN'    => '0 betekent onbeperkt',
   
	// polls   
   'ACP_PORTAL_POLLS_INFO'                    	=> 'Portaal Poll',	
   'ACP_PORTAL_POLLS_SETTINGS'                  => 'Poll instellingen',
   'ACP_PORTAL_POLLS_SETTINGS_EXPLAIN'       	=> 'Hier kun je poll instellingen veranderen en andere specifieke opties beheren.',
   'PORTAL_POLL_TOPIC'                         	=> 'Laat polls zien',
   'PORTAL_POLL_TOPIC_EXPLAIN'                  => 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_POLL_TOPIC_ID'                      	=> 'Laat poll zien uit welk onderwerp ID',
   'PORTAL_POLL_TOPIC_ID_EXPLAIN'             	=> 'Onderwerp ID (onderwerp nummer) waar de poll staat en die je wilt laten zien, stel 0 in (laat dit veld niet leeg) om niets te laten zien.',
   'PORTAL_POLL_FORUM_ID'                      	=> 'Display poll from which forum ID',
   'PORTAL_POLL_FORUM_ID_EXPLAIN'             	=> 'Forum ID (forum nummer) waar de poll staat en die je wilt laten zien, stel 0 in (laat dit veld niet leeg) om niets te laten zien',
   'PORTAL_POLL_POST_ID'                      	=> 'Display poll from which post ID',
   'PORTAL_POLL_POST_ID_EXPLAIN'             	=> 'Post ID (post nummer) waar de poll staat en die je wilt laten zien, stel 0 in (laat dit veld niet leeg) om niets te laten zien.',

	// most poster
   'ACP_PORTAL_MOST_POSTER_INFO'                => 'Portaal ergste spammers',
   'ACP_PORTAL_MOST_POSTER_SETTINGS'            => 'Ergste spammer instellingen',
   'ACP_PORTAL_MOST_POSTER_SETTINGS_EXPLAIN'    => 'Hier kun je ergste spammer instellingen veranderen en andere specifieke opties beheren.',
   'PORTAL_TOP_POSTERS'                  		=> 'Laat ergste spammers zien',
   'PORTAL_TOP_POSTERS_EXPLAIN'                 => 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_MAX_MOST_POSTER'                    	=> 'Hoeveel spammers laten we zien',
   'PORTAL_MAX_MOST_POSTER_EXPLAIN'             => '0 betekent onbeperkt',

	// left and right column width 
   'ACP_PORTAL_COLLUMN_WIDTH_INFO'              => 'Portaal kolom breedte',
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS'          => 'Linker en rechter kolom breedte instellingen',	
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS_EXPLAIN'  => 'Hier kun je de linker en rechter kolom breedte instellingen vinden voor de portaal pagina.',
   'PORTAL_LEFT_COLLUMN_WIDTH'                 	=> 'Breedte van de linker portaal kolom',
   'PORTAL_LEFT_COLLUMN_WIDTH_EXPLAIN'          => 'Verander de breedte van de linker kolom, aanbevolen waarde is 180',
   'PORTAL_RIGHT_COLLUMN_WIDTH'                 => 'Breedte van de rechter portaal kolom',
   'PORTAL_RIGHT_COLLUMN_WIDTH_EXPLAIN'         => 'Verander de breedte van de rechter kolom, aanbevolen waarde is 180',
   
	// attachments    
   'ACP_PORTAL_ATTACHMENTS_NUMBER_INFO'         		=> 'Portaal bijlages',
   'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS'     		=> 'Bijlage instellingen',
   'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS_EXPLAIN'     => 'Hier kun je bijlage instellingen veranderen en andere specifieke opties beheren.',
   'PORTAL_ATTACHMENTS'                  				=> 'Laat bijalgen zien',
   'PORTAL_ATTACHMENTS_EXPLAIN'                  		=> 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_ATTACHMENTS_NUMBER'                 			=> 'Limiet van aantal bijlages',
   'PORTAL_ATTACHMENTS_NUMBER_EXPLAIN'                 	=> '0 betekent onbeperkt',

	// general 
   'ACP_PORTAL_SWITCHES_INFO'                  	=> 'Portaal blok switches',
   'ACP_PORTAL_SWITCHES_SETTINGS'               => 'Algemene blok switch instellingen',
   'ACP_PORTAL_SWITCHES_SETTINGS_EXPLAIN'       => 'Hier kun je switches instellingen veranderen en andere specifieke opties beheren.',
   'PORTAL_GOOGLE_S_BLOCK'                  	=> 'Google advertenties klein',
   'PORTAL_GOOGLE_S_BLOCK_EXPLAIN'              => 'Laat dit blok zien. Ja/Nee? <br /> Dit is een voorgedefinieerd Google Partner blok 120x240_as, bestandsnaam is <strong>google_adds.html</strong>.',
   'PORTAL_GOOGLE_C_BLOCK'                  	=> 'Google adds center',
   'PORTAL_GOOGLE_C_BLOCK_EXPLAIN'              => 'Laat dit blok zien. Ja/Nee? <br /> Dit is een voorgedefinieerd Google Partner blok 234x60_as, bestandsnaam is <strong>google_adds_portal.html</strong>.',
   'PORTAL_FORUM_BLOCK'                  		=> 'Forum center',
   'PORTAL_FORUM_BLOCK_EXPLAIN'                 => 'Laat dit blok zien. Ja/Nee? <br /> Het portaals grote forum center blok, Dit is dezelfde als de index pagina van phpBB.',
   'PORTAL_ADVANCED_STAT'                  		=> 'Geavanceerde statistieken',
   'PORTAL_ADVANCED_STAT_EXPLAIN'               => 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_LEADERS'                  			=> 'Leiders / Team',
   'PORTAL_LEADERS_EXPLAIN'                  	=> 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_CLOCK'                  				=> 'Klok',
   'PORTAL_CLOCK_EXPLAIN'                  		=> 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_LINK_US'                  			=> 'Link naar ons',
   'PORTAL_LINK_US_EXPLAIN'                  	=> 'Laat dit blok zien. Ja/Nee? <br /> Levert een html code die andere mensen op hun site kunnen zetten met een link naar deze site. De HTML code is inclusief een banner van 88*31 die op de andere site te zien zal zijn.',
   'PORTAL_LINKS'                  				=> 'Links',
   'PORTAL_LINKS_EXPLAIN'                  		=> 'Laat dit blok zien. Ja/Nee? <br /> Om nieuwe links of links te veranderen is een handmatige bewerking van <strong>links.html</strong> nodig.',
   'PORTAL_WELCOME'                  			=> 'Welkom center',
   'PORTAL_WELCOME_EXPLAIN'                  	=> 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_RANKS'                  			    => 'Rangen center',
   'PORTAL_RANKS_EXPLAIN'                  		=> 'Laat dit blok zien. Ja/Nee? <br /> Deze 3-tabblad kolom bevat word graph, rangen, bijlagen and forum lijst. Als je voor "nee" kiest, dan verdwijnt het hele blok.',
   'PORTAL_MAX_ONLINE_FRIENDS'                 	=> 'Maximaal aantal online vrienden',
   'PORTAL_MAX_ONLINE_FRIENDS_EXPLAIN'          => 'Limit het laten zien van online vrienden in het portaal blok naar een bepaalde waarde (standaard is 8).',
   'PORTAL_MAINMENU_NORMAL'                  	=> 'Navigatie menu',
   'PORTAL_MAINMENU_NORMAL_EXPLAIN'      		=> 'Laat dit blok zien. Ja/Nee? <br /> Dit menu haalt data vanuit de portaal menu administratie menu\'s en zal het in dit blok laten zien.',
   'PORTAL_MAINMENU_DHTML'                  	=> 'Navigatie menu DHTML',
   'PORTAL_MAINMENU_DHTML_EXPLAIN'              => 'Laat dit blok zien. Ja/Nee? <br /> Om nieuwe of andere opties toe te voegen, moet je handmatig het bestand <strong>main_menu_dhtml.html</strong> aanpassen.',

    // wordgraph
   'ACP_PORTAL_WORDGRAPH_INFO'					=> 'Portal Wordgraph',
   'ACP_PORTAL_WORDGRAPH_SETTINGS'              => 'Wordgraph settings',	
   'ACP_PORTAL_WORDGRAPH_SETTINGS_EXPLAIN'      => 'Here you can change your wordgraph information and certain specific options.',
   'PORTAL_WORDGRAPH'                  			=> 'Display wordgraph',
   'PORTAL_WORDGRAPH_EXPLAIN'                  	=> 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_WORD_GRAPH_MAX_WORDS'                => 'Hoeveel woorden laten we zien',
   'PORTAL_WORD_GRAPH_MAX_WORDS_EXPLAIN'        => '0 betekent onbeperkt',
   'PORTAL_WORD_GRAPH_WORD_COUNTS'              => 'Include count values to display',
   'PORTAL_WORD_GRAPH_WORD_COUNTS_EXPLAIN'      => 'Display count values per word eg. (25) Yes/No?',
   'PORTAL_WORD_GRAPH_RATIO'              		=> 'Used aspect ratio word size',
   'PORTAL_WORD_GRAPH_RATIO_EXPLAIN'            => 'Change the aspect ratio (bigger/smaller) word size (default=4). This setting is relative to the value of displayed words. The more words, the more aspect ratio you can choose to make the words bigger.',

/* not in use at moment
   'PORTAL_WORD_GRAPH_MAX_SIZE'              	=> 'Maximum font size in pixel',
   'PORTAL_WORD_GRAPH_MAX_SIZE_EXPLAIN'         => 'Set maximum value of font size for words in wordgraph.',
   'PORTAL_WORD_GRAPH_MIN_SIZE'              	=> 'Minimum font size in pixel',
   'PORTAL_WORD_GRAPH_MIN_SIZE_EXPLAIN'         => 'Set minimum value of font size for words in wordgraph.',
*/
	
	// random 
   'ACP_PORTAL_RANDOM_INFO'                  	=> 'Portaal Random',
   'ACP_PORTAL_RANDOM_SETTINGS'               	=> 'Random banners/blok instellingen',
   'ACP_PORTAL_RANDOM_SETTINGS_EXPLAIN'       	=> 'Hier kun je random banners/blok instellingen veranderen en andere specifieke opties beheren.',
   'PORTAL_RAN_HO_BLOCK'                  		=> 'Random banners horizontaal center (max. grootte 386x60 pixels)',
   'PORTAL_RAN_HO_BLOCK_EXPLAIN'                => 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_RAN_VE_BLOCK'                  		=> 'Random banners vertikaal (max. grootte 130x600 pixels)',
   'PORTAL_RAN_VE_BLOCK_EXPLAIN'                => 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_RAN_LI_BLOCK'                  		=> 'Random banners links (max. grootte 88x31 pixels).',
   'PORTAL_RAN_LI_BLOCK_EXPLAIN'                => 'Laat dit blok zien. Ja/Nee? <br /> Dit menu haalt data uit het portaal administratie Partners deel - Beheer partners.',
   'PORTAL_RANDOM_MEMBER'                  		=> 'Random leden',
   'PORTAL_RANDOM_MEMBER_EXPLAIN'               => 'Laat dit blok zien. Ja/Nee?',

	// welcome message
   'ACP_PORTAL_WELCOME_INFO'                  	=> 'Portaal Welkom',
   'ACP_PORTAL_WELCOME_SETTINGS'               	=> 'Welkom instellingen',
   'ACP_PORTAL_WELCOME_TXT_SETTINGS'           	=> 'Welkom text instellingen',
   'ACP_PORTAL_WELCOME_SETTINGS_EXPLAIN'       	=> 'Hier kun je welkom berichten veranderen en andere specifieke opties beheren.',
   'PORTAL_WELCOME_INTRO'                  	    => 'Welkomst bericht gast gebruikers',
   'PORTAL_WELCOME_INTRO_EXPLAIN'               => 'Verander het welkom bericht voor gasten. Max. 2000 karakters (html toegestaan)! Alle tekst na de limiet vervalt automatisch.',
   'PORTAL_WELCOME_BACK'                        => 'Welcome message registered users',
   'PORTAL_WELCOME_BACK_EXPLAIN'                => 'Verander het welkom bericht voor geregistreerde leden. Max. 2000 karakters (html toegestaan)! Alle tekst na de limiet vervalt automatisch.',

	// chatbox
   'ACP_PORTAL_SHOUTBOX_INFO'					=> 'Portaal Chatbox',
   'ACP_PORTAL_SHOUTBOX_SETTINGS'				=> 'Chatbox instellingen',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_HC'			=> 'Chatbox hoogte en breedte instellingen portaal blok',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_HCB'			=> 'Chatbox hoogte en breedte instellingen grote blok',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_EXPLAIN'		=> 'Hier kun je chatbox informatie veranderen en andere specifieke opties beheren. Alle tekst vervalt automatisch na 600 karakters.',
   'PORTAL_SHOUTBOX'                  			=> 'Laat chatbox zien',
   'PORTAL_SHOUTBOX_EXPLAIN'                  	=> 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_SHOUTBOX_NUMBER'                  	=> 'Hoeveel chats laten we zien',
   'PORTAL_SHOUTBOX_NUMBER_EXPLAIN'             => '0 betekent onbeperkt, elke andere waarde toont de laatste chats op de portal en chat pagina',
   'PORTAL_SHOUTBOX_SESSION_TIME'               => 'Toegestande sessie tijd',
   'PORTAL_SHOUTBOX_SESSION_TIME_EXPLAIN'       => 'Voeg een waarde toe. Na deze waarde wordt de sessie gestopt. De standaard waarde is 300 seconden',
   'PORTAL_SHOUTBOX_DEFAULT_DELAY'              => 'Reload vertraging',
   'PORTAL_SHOUTBOX_DEFAULT_DELAY_EXPLAIN'      => 'Voeg een waarde toe. Na deze waarde wordt de chatbox herstart. De standaard waarde is 15 seconden',

	// weather
   'ACP_PORTAL_WEATHER_INFO'				    => 'Portaal Weer',
   'ACP_PORTAL_WEATHER_SETTINGS'			    => 'Weer instellingen',
   'ACP_PORTAL_WEATHER_SETTINGS_GER'			=> 'Weer instellingen voor wetter.com vanuit Duitsland',
   'ACP_PORTAL_WEATHER_SETTINGS_ALT'			=> 'Weer instellingen voor alternatieve weer sites',
   'ACP_PORTAL_WEATHER_SETTINGS_EXPLAIN'	    => 'Hier kun je weer informatie veranderen en andere specifieke opties beheren. De standaard site is wetter.com uit Duitsland. Je kunt het veranderen naar elke site die je wilt in styles/prosilver/template/portal/block/weather.html, of vul de alternatieve velden hieronder in. Tot 3 verschillende weer sites is mogelijk.',
   'PORTAL_WEATHER'                  		    => 'Laat weer zien',
   'PORTAL_WEATHER_EXPLAIN'                     => 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_WEATHER_GER'                  		=> 'Laat weer zien van het duitse wetter.com',
   'PORTAL_WEATHER_GER_EXPLAIN'                 => 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_WEATHER_ZIPCODE'                  	=> 'Je postcode',
   'PORTAL_WEATHER_ZIPCODE_EXPLAIN'             => 'Vul je lokale postcode in om het weer te laten zien voor je regio van het duitse wetter.com',
   'PORTAL_WEATHER_ALTERNATE_URL'              	=> 'Je alternatieve weer URLL',
   'PORTAL_WEATHER_ALTERNATE_URL_EXPLAIN'       => 'Plak hier je alternatieve URL voor het weer. Laat leeg om niets te laten zien',
   'PORTAL_WEATHER_ALTERNATE_URL1'              => 'Je alternatieve weer URLL',
   'PORTAL_WEATHER_ALTERNATE_URL1_EXPLAIN'      => 'Plak hier je alternatieve URL voor het weer. Laat leeg om niets te laten zien',
   'PORTAL_WEATHER_ALTERNATE_URL2'              => 'Je alternatieve weer URLL',
   'PORTAL_WEATHER_ALTERNATE_URL2_EXPLAIN'      => 'Plak hier je alternatieve URL voor het weer. Laat leeg om niets te laten zien',
   
	// syndication
   'ACP_PORTAL_SYNDICATE_INFO'				    => 'Portaal RSS / RDF Syndicatie',
   'ACP_PORTAL_SYNDICATE_INFO_SETTINGS'			=> 'Wijzig syndicatie instellingen',
   'ACP_PORTAL_SYNDICATE_INFO_SETTINGS_EXPLAIN'	=> 'Hier kun je syndicatie veranderen en andere specifieke opties beheren.',
   'PORTAL_SYNDICATE'                  		    => 'Laat syndicatie zien',
   'PORTAL_SYNDICATE_EXPLAIN'                   => 'Laat dit blok zien. Ja/Nee?',

	// Portal Index
   'ACP_PORTAL_INDEX_INFO'				        => 'Portaal index',
   'ACP_PORTAL_INDEX_INFO_LAYOUT'	    		=> 'Laat blokken zien op index/viewforum',
   'ACP_PORTAL_INDEX_INFO_LAYOUT_EXPLAIN'		=> 'Laten zien Ja/Nee?',
   'ACP_PORTAL_INDEX_INFO_SETTINGS'			    => 'Wijzig index/viewforum blok instellingen',
   'ACP_PORTAL_INDEX_INFO_COLUMN_SETTINGS'	    => 'Wijzig index/viewforum kolom instellingen',
   'ACP_PORTAL_INDEX_INFO_SETTINGS_EXPLAIN'	    => 'Hier kun je de instellingen van index/viewforum navigatie, forum index en viewforum index is gecombineerd hier. Als je dit wijzigt zal het effect hebben op de index en viewforum layout.',
   'PORTAL_INDEX_LEFT'                  		=> 'Laat blok kolom zien aan de linkerkant van de site',
   'PORTAL_INDEX_LEFT_EXPLAIN'                  => 'Laat kolom zien op het linkergedeelte van de site index/viewforum Ja/Nee?',
   'PORTAL_INDEX_LEFT_COLLUMN_WIDTH'            => 'Breedte van de linker kolom',
   'PORTAL_INDEX_LEFT_COLLUMN_WIDTH_EXPLAIN'    => 'Verander de breedte van de linker kolom in pixels, aanbevolen waarde is 180',
   'PORTAL_INDEX_RIGHT'                  		=> 'Laat blok kolom zien aan de rexchterkant van de site',
   'PORTAL_INDEX_RIGHT_EXPLAIN'                 => 'Laat kolom zien op het linkergedeelte van de site index/viewforum Ja/Nee?',
   'PORTAL_INDEX_RIGHT_COLLUMN_WIDTH'           => 'Breedte van de rechter kolom',
   'PORTAL_INDEX_RIGHT_COLLUMN_WIDTH_EXPLAIN'   => 'Verander de breedte van de rechter kolom in pixels, aanbevolen waarde is 180',

	// change style
   'ACP_PORTAL_BOARD_STYLE_INFO'				=> 'Wijzig portaal stijl',
   'ACP_PORTAL_BOARD_STYLE_SETTINGS'			=> 'Wijzig portaal stijl instellingen',
   'ACP_PORTAL_BOARD_STYLE_SETTINGS_EXPLAIN'	=> 'Hier kun je portaal stijl instellingen veranderen en andere specifieke opties beheren.',

	// media player
   'ACP_PORTAL_MEDIA_INFO'            			=> 'Media speler',
   'ACP_PORTAL_MEDIA_INFO_EXPLAIN'    			=> 'Hier kun je media speler instellingen veranderen en andere specifieke opties beheren.',
   'PORTAL_MEDIA_PLAYER'               			=> 'Laat media speler zien?',
   'PORTAL_MEDIA_PLAYER_EXPLAIN'       			=> 'Laat dit blok zien. Ja/Nee?',

	// picture gallery
   'ACP_PORTAL_GALLERY_INFO'            		=> 'Afbeelding gallerij',
   'ACP_PORTAL_GALLERY_INFO_EXPLAIN'   			=> 'Hier kun je afbeelding gallerij instellingen veranderen en andere specifieke opties beheren.',
   'PORTAL_PICTURE_GALLERY'               		=> 'Laat afbeelding gallerij zien?',
   'PORTAL_PICTURE_GALLERY_EXPLAIN'    			=> 'Laat dit blok zien. Ja/Nee?',

	// scroll message
   'ACP_PORTAL_SCROLL_MESSAGE_INFO'            			=> 'Scroll bericht',
   'ACP_PORTAL_SCROLL_MESSAGE_INFO_EXPLAIN'   			=> 'De marquee tag is een niet-standaard HTML markup element die tekst van links naar rechts en rechts naar links over het scherm laat gaan. De standaard breedte van het MARQUEE element staat gelijk aan de breedte van zijn "parent element".',
   'PORTAL_SCROLL_MESSAGE_DISPLAY'               		=> 'Laat scroll bericht zien?',
   'PORTAL_SCROLL_MESSAGE_DISPLAY_EXPLAIN'    			=> 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE'               		=> 'Laat scroll/marquee effect zien?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_EXPLAIN'    			=> 'Laat zien Ja/Nee?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTCOLOR'            => 'Tekst kleur',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTCOLOR_EXPLAIN'	=> 'HEX or kleur namen zijn toegstaan zoals #ffffff voor wit, of kleur namen zoals violet. Standaard is #ff0000 ',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTSIZE'         	=> 'Tekst grootte',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTSIZE_EXPLAIN' 	=> 'Tekst grootte voor de tekst in pixels. Standaard is 10px.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_DIRECTION'         	=> 'Scroll richting',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_DIRECTION_EXPLAIN' 	=> 'Scroll richting voor de tekst. Dit attribuut comntroleert de richting van het scrollen. Toegestane waardes zijn <strong>links</strong>, <strong>rechts</strong>, <strong>omhoog</strong> en <strong>omlaag</strong> dit specificeert het einde van de box vanwaar het scrollen start.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SPEED'         		=> 'Scroll hoeveelheid',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SPEED_EXPLAIN' 		=> 'Dit beheert de heoveelheid beweging (in pixels) tussen de succesvolle toning die de animatie vertoont.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_ALIGN'         		=> 'Scroll align',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_ALIGN_EXPLAIN' 		=> 'Deze tag kan een van de waarden boven-, midden-en onderaan. Hij regelt de positionering van de tent display box ten opzichte van de huidige tekst op exact dezelfde wijze als de img-tag \'s, sluiten attribuut.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BEHAVIOR'         	=> 'Scroll behavior',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BEHAVIOR_EXPLAIN' 	=> 'Deze tag controles op het gedrag van de weergegeven tekst. Er zijn drie mogelijke waarden. Tekst scrollen begint zodra de pagina wordt gedownload, maar niet wanneer de gebruiker primeurs schuift de tent in beeld. <br /> <br /> Opties: <br /> <strong> ga </ strong> tekst scrollt over display en opnieuw blijkt uit het andere eind wanneer hij is verdwenen uit het ene uiteinde. Dit is het standaard gedrag. <br /> <strong> dia </ strong> dit is vergelijkbaar met bladeren, met dien verstande dat wanneer de schuifdeuren tekst bereikt de verre kant van het vak, verdwijnt en wordt opnieuw aan de start eind van het vak. Als het display is niet looping vervolgens de tekst blijft het zich op de verre kant van het vak. <br /> <strong> plaatsvervanger </ strong> tekst weigeringen tussen de uiteinden van het vak.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BGCOLOR'         		=> 'Scroll bgcolor',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BGCOLOR_EXPLAIN' 		=> 'Deze tag bepaalt de achtergrondkleur van het display box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HEIGHT'         		=> 'Scroll height',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HEIGHT_EXPLAIN' 		=> 'Hiermee wordt de hoogte van het display box bepaald',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_WIDTH'         		=> 'Scroll breedte',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_WIDTH_EXPLAIN' 		=> 'Hiermee wordt de breedte van het display box bepaald.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HSPACE'         		=> 'Scroll horizontale ruimte',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HSPACE_EXPLAIN' 		=> 'Hiermee wordt de horizontale ruimte rondom het display box bepaald.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_VSPACE'         		=> 'Scroll vertikale ruimte',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_VSPACE_EXPLAIN' 		=> 'Hiermee wordt de vertikale ruimte rondom het display box bepaald.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_LOOP'         		=> 'Scroll loop',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_LOOP_EXPLAIN' 		=> 'De waarde van dit attribuut controles het aantal cycli display. De waarden -1 en oneindig betekenen tot in het oneindige.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SCROLLDELAY'         	=> 'Scroll vertraging',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SCROLLDELAY_EXPLAIN' 	=> 'Hiermee wordt de vertraging (in milliseconden) tussen de opeenvolgende schermen die de indruk wekken van animatie.',
   'PORTAL_SCROLL_MESSAGE_INTRO' 						=> 'Scroll bericht tekst',
   'PORTAL_SCROLL_MESSAGE_INTRO_EXPLAIN' 				=> 'Toevoegen / wijzigen van een scrollable hier uw bericht. Maximaal 1000 tekens platte tekst is mogelijk, html is toegestaan, cookies zijn ingeschakeld! Alle tekst na het maximum aantal tekens wordt automatisch afgekapt.',
   'ACP_PORTAL_SCROLL_MESSAGE_TXT_SETTINGS'         	=> 'Scrollbare tekst',

	// meta tags
   'ACP_PORTAL_METATAGS_INFO'            			=> 'META Tags',
   'ACP_PORTAL_METATAGS_INFO_EXPLAIN'   			=> 'Welkom op de META tags management. Deze tags kun je een beschrijving van uw website naar de zoekmachine. <br/> Dit maakt het mogelijk de zoekmachine voor het indexeren van uw site beter. <br/> Bovendien zijn deze codes kunt andere opties zoals het automatisch omleiden naar een andere URL.',
   'PORTAL_META_REDIRECT_URL_TIME'            		=> 'Omleidingstijd (sec)',
   'PORTAL_META_REDIRECT_URL_TIME_EXPLAIN'          => 'Hier kunt u een vertraging in enkele seconden voordat de browser het document automatisch wordt omgeleid naar een URL opgegeven. Het aantal voor de URL is de vertraging in seconden die de browser zal "onderbreken" voordat de omleiding plaatsvindt. Laat dit leeg voor <strong> Nee </ strong> worden automatisch doorverbonden!',
   'PORTAL_META_REDIRECT_URL_ADRESS'            	=> 'Omleidings adres (URL)',
   'PORTAL_META_REDIRECT_URL_ADRESS_EXPLAIN'        => 'Specifies a URL the browser automatically redirect the document to after above specifyed redirection time. Leave blank for <strong>No</strong> automatically redirection!',
   'PORTAL_META_REFRESH'            				=> 'META Refresh',
   'PORTAL_META_REFRESH_EXPLAIN'        			=> 'Hier kunt u een vertraging in enkele seconden voordat de browser automatisch herlaadt het document. Het nummer is de vertraging in seconden die de browser zal "onderbreken" voordat de refresh plaatsvindt. Voer een getal in seconden. Laat dit leeg voor <strong> Nee </ strong> automatisch wordt vernieuwd!',
   'PORTAL_META_PRAGMA'            					=> 'META Pragma',
   'PORTAL_META_PRAGMA_EXPLAIN'        				=> 'Verbieden het record van de pagina in het cachegeheugen van de browser. <br/> - Voor het gebruik van deze tag, <i> no-cache </ i>, zo niet, links leeg.',
   'PORTAL_META_KEYWORDS'            				=> 'META Keywords',
   'PORTAL_META_KEYWORDS_EXPLAIN'        			=> 'Functie: Vermeld bij de zoekmachines de sleutel woorden in verband met uw site. <br /> - Maximum aantal karakters: 1000 of 100 sleutelwoorden. <br/> - In het aantal karakters, vergeet dan niet rekenen de <a href = "accent.htm"> geaccentueerde letters </ a> als gecodeerd in HTML. Bijvoorbeeld de letter "A", gecodeerd in HTML & A telt voor acht tekens. <br /> - Je moet niet herhalen meerdere malen hetzelfde sleutelwoord (de zoekmachines niet bevalt). <br /> - De sleutel woorden zijn gescheiden door een komma, een spatie of een komma en een spatie, het is uw keuze.',
   'PORTAL_META_DESCRIPTION'            			=> 'META Omschrijving',
   'PORTAL_META_DESCRIPTION_EXPLAIN'        		=> 'Beschrijving van uw site. <br /> - Maximum aantal tekens: 200 <br /> - Vermijd de accenten op bepaalde motoren zij niet in aanmerking genomen.',
   'PORTAL_META_AUTHOR'            					=> 'META Auteur',
   'PORTAL_META_AUTHOR_EXPLAIN'        				=> 'Hiermee kan de identificatie van de site auteur. <br/> - Zet de eerste naam in kleine, gevolgd door de achternaam in hoofdletter. <br/> - Als u wilt, kunt u meerdere auteurs gescheiden door een komma.',
   'PORTAL_META_IDENTIFIER_URL'            			=> 'META Identificatie-url',
   'PORTAL_META_IDENTIFIER_URL_EXPLAIN'        		=> 'Maakt mogelijk om de URL. <br /> - Voer de URL van uw startpagina. <br /> - U mag slechts een URL.',
   'PORTAL_META_REPLY_TO'            				=> 'META Reply Naar',
   'PORTAL_META_REPLY_TO_EXPLAIN'        			=> 'Maakt het mogelijk om het e-mailadres van de webmaster. <br/> Het verdient de voorkeur om alleen een adres.',
   'PORTAL_META_REVISIT_AFTER'            			=> 'META opnieuw-bezoeken-na',
   'PORTAL_META_REVISIT_AFTER_EXPLAIN'        		=> 'Hiermee kunt u specificeren van het aantal dagen voordat de spin (robot van de motor) zal de index van uw site. - 15 dagen "of" 30 days "zijn de beste opties.',
   'PORTAL_META_CATEGORY'            				=> 'META Categorie',
   'PORTAL_META_CATEGORY_EXPLAIN'        			=> 'Maakt het mogelijk om de categorie van uw site. Gebruikt door een aantal motoren die een indeling per categorie.',
   'PORTAL_META_COPYRIGHT'            				=> 'META Copyright',
   'PORTAL_META_COPYRIGHT_EXPLAIN'        			=> 'Typisch een goedkeurende verklaring van het auteursrecht. <br /> - U kunt de auteursrechten, handelsmerken, patenten, of andere informatie met betrekking tot uw intellectuele eigendom.',
   'PORTAL_META_GENERATOR'            				=> 'META Generator',
   'PORTAL_META_GENERATOR_EXPLAIN'        			=> 'Meestal is de naam en het versienummer van een publishing tool gebruikt voor het maken van de pagina. <br/> - Kan worden gebruikt door toolleveranciers te beoordelen marktpenetratie. <br /> - Zelfde als meta-tags uitgever.',
   'PORTAL_META_ROBOTS'            					=> 'META Robots',
   'PORTAL_META_ROBOTS_EXPLAIN'        				=> 'Controls robots van zoekmachines op een per-pagina basis. <br/> - <strong> Alle </ strong> = De bot index hele site (standaard) <br /> - <strong> geen </ strong> = De bot niet indexeren van uw site op alle <br /> - <strong> index </ strong> = uw pagina wordt geïndexeerd <br /> - <strong> noindex </ strong> = Uw pagina is niet geïndexeerd, maar de bot zullen volgen de link van uw pagina <br /> - <strong> volgen </ strong> = De bot nemen nota van uw de link op uw pagina voor het indexeren van hen na. <br /> - <strong> nofollow </ strong> = The index bot niet de link op uw pagina. <br /> - <strong> NOODP </ strong> = opting out van Open Directory Listings voor webmasters (Live Search van Microsoft). Dit vertelt de MSN search bot geen gebruik te maken van de site DMOZ fragment is alleen MSN negeert ODP inhoud voor uw pagina.',
   'PORTAL_META_DISTRIBUTION'            			=> 'META Distribution',
   'PORTAL_META_DISTRIBUTION_EXPLAIN'        		=> 'Er zijn drie classificaties van de distributie van uw web content: <br/> - <strong> Global </ strong> (het hele web) <br/> - <strong> Local </ strong> (gereserveerd voor de lokale IP-blok uw site) <br/> - <strong> IE </ strong> (intern gebruik en niet voor de distributie).',
   'PORTAL_META_CREATION_YEAR'            			=> 'META Date-creation-yyyy',
   'PORTAL_META_CREATION_YEAR_EXPLAIN'        		=> 'Jaar waarin de site gemaakt is, bijv 2005.',
   'PORTAL_META_CREATION_MONTH'            			=> 'META Date-creation-mm',
   'PORTAL_META_CREATION_MONTH_EXPLAIN'        		=> 'Maand waarin de site gemaakt is, bijv 03.',
   'PORTAL_META_CREATION_DAY'            			=> 'META Date-creation-dd',
   'PORTAL_META_CREATION_DAY_EXPLAIN'        		=> 'Dag waarop de site gemaakt is, bijv . 23.',
   'PORTAL_META_REVISION_YEAR'            			=> 'META Date-revision-yyyy',
   'PORTAL_META_REVISION_YEAR_EXPLAIN'        		=> 'Jaar waarin de site gemaakt is, bijv 2005.',
   'PORTAL_META_REVISION_MONTH'            			=> 'META Date-revision-mm',
   'PORTAL_META_REVISION_MONTH_EXPLAIN'        		=> 'Maand waarin de site gemaakt is, bijv 03.',
   'PORTAL_META_REVISION_DAY'            			=> 'META Date-revision-dd',
   'PORTAL_META_REVISION_DAY_EXPLAIN'        		=> 'Dag waarop de site gemaakt is, bijv 21.',

	// other
   'ACP_PORTAL_OTHER_INFO'                  	=> 'Portaal andere instellingen',
   'ACP_PORTAL_OTHER_SETTINGS'               	=> 'Portaal andere instellingen',
   'ACP_PORTAL_OTHER_SETTINGS_EXPLAIN'       	=> 'Hier kun je alle ander opties en specifieke instellingen beheren.',
   'PORTAL_MAX_LASTVISITS'                 		=> 'Limiet van aantal getoonde "laatste bezoekers"',
   'PORTAL_MAX_LASTVISITS_EXPLAIN'          	=> 'Limiet van het aantal getoonde "laatste bezoekers" op de portal in het "who is online" blok naar een bepaalde waarde (sstandaard is 5).',
   'PORTAL_ACT_RECENT_HOT_TOPICS'               => 'Laat actuele recente onderwerpen zien (scroll)?',
   'PORTAL_ACT_RECENT_HOT_TOPICS_EXPLAIN'    	=> 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_ACT_RECENT_TOPICS'               	=> 'Laat actuele recente onderwerpen zien (scroll)?',
   'PORTAL_ACT_RECENT_TOPICS_EXPLAIN'    		=> 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_ANNOUNCE_IMPORTANT'               	=> 'Laat globale mededelingen zien?',
   'PORTAL_ANNOUNCE_IMPORTANT_EXPLAIN'    		=> 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_DONWLOADS'               			=> 'laat downloads zien?',
   'PORTAL_DONWLOADS_EXPLAIN'    				=> 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_FORUMLIST'               			=> 'Laat forumlijst zien?',
   'PORTAL_FORUMLIST_EXPLAIN'    				=> 'Laat dit blok zien. Ja/Nee? <br /> Shows forums of the site, condensed in a block as list.',
   'PORTAL_PHPINFO'               				=> 'Laat PHP info zien?',
   'PORTAL_PHPINFO_EXPLAIN'    					=> 'Laat dit blok zien. Ja/Nee?',
   'PORTAL_QUOTES'               				=> 'Laat quotes zien?',
   'PORTAL_QUOTES_EXPLAIN'    					=> 'Laat dit blok zien. Ja/Nee?',

   'PORTAL_DRAG_DROP'               			=> 'Portal Drag and Drop opties',
   'PORTAL_DRAG_DROP_EXPLAIN'       			=> 'Enable deze optie Ja/Nee? <br /> Globaal enable / disable deze functie voor de blokkenb in de portaal / index.',

   'PORTAL_RAN_H_BLOCK'                     	=> '<b>Gewijzigde portaal instellingen</b>',
   'CONFIG_UPDATED'								=> 'Configuratie succesvol gewijzigd.',
   'VIEWING_PORTAL'								=> 'Bekijkt portaal',
   
   // corrected/added since RC2 below
   'PORTAL_PICTURE_RESIZE'						=> 'Automatisch afbeelding verkleinen (pixel)',
   'PORTAL_PICTURE_RESIZE_EXPLAIN'				=> 'Het formaat van foto\'s met behulp van de img-tag in berichten die worden geplaatst als portal nieuws.',
   
   // corrected/added since RC5 below
	'ACP_COUNTER_SETTINGS_EXPLAIN'	=> 'Instellingen voor animate cijfers IP tracking counter.',
	'ACP_COUNTER_DIGITS_SETTINGS'	=> 'Teller cijfers instellingen',
	'ACP_COUNTER_DISPLAY_SETTINGS'	=> 'Teller display instellingen',
	'ACP_COUNTER_IP_SETTINGS'		=> 'Teller ip blokkeer instellingen',

	'COUNTER_DIGITS_PATH'				=> 'Teller pad',
	'COUNTER_DIGITS_PATH_EXPLAIN'		=> 'Pad van de teller onder uw phpBB root dir, bv. <samp> images / teller / cijfers </ SAMP>',
	'COUNTER_DIGITS_ANI_PATH'			=> 'Animeer teller pad',
	'COUNTER_DIGITS_ANI_PATH_EXPLAIN'	=> 'Pad van de animatie-teller onder uw phpBB root dir, bv. <samp> images / teller / digits_ani </ SAMP>',
	'COUNTER_DIGITS_NUMBER'				=> 'Aantal cijfers',
	'COUNTER_DIGITS_NUMBER_EXPLAIN'		=> 'Aantal cijfers dat je in de teller wilt laten zien',
	'COUNTER_DIGITS_WIDTH'				=> 'Cijfer breedte',
	'COUNTER_DIGITS_WIDTH_EXPLAIN'		=> 'Breedte van de cijgers',
	'COUNTER_DIGITS_HEIGHT'				=> 'Cijfer hoogte',
	'COUNTER_DIGITS_HEIGHT_EXPLAIN'		=> 'Hoogte van de cijfers',
	'COUNTER_DISPLAY_IMAGE'				=> 'Laat als afbeelding zien',
	'COUNTER_DISPLAY_NONE'				=> 'Geen afbeelding',
	'COUNTER_DISPLAY_STATS'				=> 'Laat teller statistieken zien',
	'COUNTER_DISPLAY_STATS_EXPLAIN'		=> 'Laat display met statistische informatie over teller',
	'COUNTER_DISPLAY_TEXT'				=> 'Laat als tekst zien',
	'COUNTER_BLOCK_IP'					=> 'Sta IP blokkades toe',
	'COUNTER_BLOCK_IP_EXPLAIN'			=> 'Laat tracking / blokkeren van IP-adressen uit teller. Deze optie zal ervoor zorgen dat uw teller correct werken: hits niet zullen stijgen als gebruikers hun browser vernieuwen met het blokkeren van de tijd waarin u kunt instellen hieronder.',
	'COUNTER_BLOCK_TIME'				=> 'IP blocking time',
	'COUNTER_BLOCK_TIME_EXPLAIN'		=> 'Aantal seconden de teller bijhouden / blokkeert alle IP-adressen.',
	'COUNTER_IP_LOGFILE'				=> 'IP log bestand',
	'COUNTER_IP_LOGFILE_EXPLAIN'		=> 'Het adres van IP-logbestand onder uw phpBB root dir, bv. <samp> images / teller / ip.txt </ SAMP>. Vereist als je het blokkeren van IP-enabled Laat optie.',

	'SELECT_COUNTER_DISPLAY_MODE'			=> 'Teller display modus',
	'SELECT_COUNTER_DISPLAY_MODE_EXPLAIN'	=> 'Selecteer weergavemodi voor de counter. <br /> <strong> Opmerking </ strong>: Je hebt altijd <strong> </ strong> te klikken / activeren <strong> als afbeeldingen </ strong> of <strong> als tekst </ strong>, voordat wijzigingen op te slaan naar andere instellingen.',

    'PORTAL_SHOW_LAST_NEWS'               	=> 'Sortorder portal news messages',
    'PORTAL_SHOW_LAST_NEWS_EXPLAIN'       	=> 'Yes = Latest message/reply first <br />No = First topic first.',

    'PORTAL_SHOW_AJAX_USERINFO'               	=> 'Ajax user info',
    'PORTAL_SHOW_AJAX_USERINFO_EXPLAIN'       	=> 'Display ajax user info Yes/No?',
    'PORTAL_SHOW_TOPIC_HOVER_PREVIEW'           => 'Topic hover preview',
    'PORTAL_SHOW_TOPIC_HOVER_PREVIEW_EXPLAIN'   => 'Display topic hover preview Yes/No?',
    'PORTAL_SHOW_TOOL_TIPS'           			=> 'Board wide tool tips',
    'PORTAL_SHOW_TOOL_TIPS_EXPLAIN'   			=> 'Display board wide tool tips Yes/No?',
    'PORTAL_SHOW_THANKS'           			    => 'Thank Post MOD',
    'PORTAL_SHOW_THANKS_EXPLAIN'   			    => 'Enable Thank Post MOD Yes/No?',
	
    'PORTAL_SHOW_BBCODE_BOX'           			=> 'Custom bbCode Box',
    'PORTAL_SHOW_BBCODE_BOX_EXPLAIN'   			=> 'Enable Custom bbCode Box Yes/No?',
    'PORTAL_SHOW_ZODIACS'           			=> 'Zodiacs in viewtopic',
    'PORTAL_SHOW_ZODIACS_EXPLAIN'   			=> 'Enable Zodiacs in viewtopic Yes/No?',
    'PORTAL_SHOW_LOGO'           				=> 'Site Logo',
    'PORTAL_SHOW_LOGO_EXPLAIN'   				=> 'Enable site logo in style header Yes/No?',
    'PORTAL_SHOW_SITENAME'           			=> 'Site Name and Description',
    'PORTAL_SHOW_SITENAME_EXPLAIN'   			=> 'Enable site name and description in style header Yes/No?',

	// pagination 
    'ACP_PORTAL_ANNOUNCE_PAG_SETTINGS' => 'Announcements pagination settings',
    'ACP_PORTAL_NEWS_PAG_SETTINGS'     => 'News pagination settings',

    'PORTAL_PAG_REPOSITORY'            => 'Article repository',
    'PORTAL_PAG_REPOSITORY_EXPLAIN'    => 'Display pagination Yes/No? <br /><br />If enabled the article page numbers will be displayed under the last article in the block.',
    'PORTAL_PAG_PERMISSIONS'           => 'Pagination permissions',
    'PORTAL_PAG_PERMISSIONS_EXPLAIN'   => 'Allow permissions Yes/No?',
    'PORTAL_PAG_SHOW_ALL'              => 'Show all types of messages',
    'PORTAL_PAG_SHOW_ALL_EXPLAIN'      => 'Display all messages Yes/No? <br /><br />All types of articles such as announcement, global announcement, sticky and normal will be counted in for the news section. The announcement section will count in global announcements and announcements only.',

));

?>