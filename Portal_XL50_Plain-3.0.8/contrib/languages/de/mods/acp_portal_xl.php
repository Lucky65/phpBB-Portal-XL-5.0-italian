<?php
/** 
*
* @name acp_portal_xl.php [Deutsch — Du]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl.php,v 1.1.1.1 2009/05/15 04:02:14 damysterious Exp $
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
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(

   'ACP_PORTAL_INFO'                  			=> 'Portal Administration',
   'ACP_PORTAL_INFO_EXPLAIN'           			=> 'Danke, dass du dich f&uuml;r das Portal XL entschieden hast und als deine Portall&ouml;sung ausgew&auml;hlt hast. Die deutsche Sprachversion ist 0.5 <a href="http://www.portalxl.nl/forum/viewtopic.php?f=30&t=931#p4968">check out for new one</a>. Auf dieser Seite kannst du dein Portal verwalten. Die Screens hier bieten einen kleinen &Uuml;berblick. Die auf der linken Seite befindlichen Links lassen dich spezifisch durchs Portal Navigieren. ACP settings by DaMysterious 2007.<br />
    <div class="successbox">
	<h3>Author Notes</h3>
	<p>Creating, maintaining and updating this MOD required/requires a lot of time and effort.<br />
	   If you appreciate PortalXL and feel the desire to express your thanks through a donation this would be greatly appreciated.<br /> 
	   PortalXL\'s Paypal ID is <strong>portalxl@xs4all.nl</strong>, or visit our special PortalXL donation page <a href="http://www.portalxl.nl/PORTAL_XL_Paypal_Donation.html" target="_blank">here</a>.<br /><br />
	   The suggested minimum donation amount for this MOD is Euro 25.00 (any higher amount will help more).<br />
	   If you are a registered user of the portalxl.nl forum, please leave your forum name/alias as comment so your level can be raised up in exchange.</p>
	</div><p>',

	// announcements
   'ACP_PORTAL_ANNOUNCE_INFO'           		=> 'Portal Ank&uuml;ndigungen',
   'ACP_PORTAL_ANNOUNCE_SETTINGS'               => 'Ank&uuml;ndigungen Einstellungen',
   'ACP_PORTAL_ANNOUNCE_SETTINGS_EXPLAIN'       => 'Hier &auml;nderst du deine Ank&uuml;ndigungsinformationen und dazugeh&ouml;rige Optionen.',
   'PORTAL_ANNOUNCMENTS'                       	=> 'Zeige Ank&uuml;ndigungen',
   'PORTAL_ANNOUNCMENTS_EXPLAIN'                => 'Zeige diesen block Ja/Nein?',
   'PORTAL_NUMBER_OF_ANNOUNCMENTS'             	=> 'Anzahl der Ank&uuml;ndigungen im Portal',
   'PORTAL_NUMBER_OF_ANNOUNCMENTS_EXPLAIN'      => '0 entspricht unendlich',
   'PORTAL_ANNOUNCMENTS_DAY'                   	=> 'Anzahl der Tage die eine Ank&uuml;ndigung gezeigt wird',
   'PORTAL_ANNOUNCMENTS_DAY_EXPLAIN'           	=> '0 entspricht unendlich',
   'PORTAL_ANNOUNCMENTS_LENGTH'                	=> 'Max L&auml;nge von Ank&uuml;ndigungen.',
   'PORTAL_ANNOUNCMENTS_LENGTH_EXPLAIN'       	=> '0 entspricht unendlich',
   'PORTAL_GLOBAL_ANNOUNCMENTS_FORUM'          	=> 'Forum ID Globale Ank&uuml;ndigungen ',
   'PORTAL_GLOBAL_ANNOUNCMENTS_FORUM_EXPLAIN'   => 'Forum wo die Artikel herbezogen werden, f&uuml;r alle Foren einfach freilassen, trenne mit Komma, z.Bsp. 1,2,5',

	// news
   'ACP_PORTAL_NEWS_INFO'                  		=> 'Portal News',
   'ACP_PORTAL_NEWS_SETTINGS'                  	=> 'News Einstellungen',
   'ACP_PORTAL_NEWS_SETTINGS_EXPLAIN'       	=> 'HIer kannst du die News Informationen &auml;ndern und die dazugeh&ouml;rigen Optionen.',
   'PORTAL_NEWS'                              	=> 'Zeige news',
   'PORTAL_NEWS_EXPLAIN'                        => 'Zeige diesen block Ja/Nein?',
   'PORTAL_SHOW_ALL_NEWS'                     	=> 'Show all of the articles in this forum',
   'PORTAL_SHOW_ALL_NEWS_EXPLAIN'             	=> 'Einschlie&szlig;lich Wichtiges, Ank&uuml;ndigungen und globalen Ank&uuml;ndigungen?',
   'PORTAL_NUMBER_OF_NEWS'                    	=> 'Anzahl der angezigten News im Portal',
   'PORTAL_NUMBER_OF_NEWS_EXPLAIN'            	=> '0 bedeutet unbegrenzt',
   'PORTAL_NEWS_LENGTH'                       	=> 'Max L&auml;nge der News Artikel.',
   'PORTAL_NEWS_LENGTH_EXPLAIN'               	=> '0 bedeutet unbegrenzt',
   'PORTAL_NEWS_FORUM'                        	=> 'News Forum ID',
   'PORTAL_NEWS_FORUM_EXPLAIN'             		=> 'Foren von denen wir die Artikel her beziehen, f&uuml;r alle einfach Feld freilassen, trenne mit einem Komme f&uuml;r einzelne Foren, z. Bsp. 1,2,5',

	// recent toBilder
   'ACP_PORTAL_RECENT_INFO'                  	=> 'Portal Neue Themen',	
   'ACP_PORTAL_RECENT_SETTINGS'                 => 'Neue Themen Einstellungen',	
   'ACP_PORTAL_RECENT_SETTINGS_EXPLAIN'       	=> 'Hier kannst du die Informationen zu neuen Themen verwalten und die dazugeh&ouml;rigen Optionen.',
   'PORTAL_RECENT'                  			=> 'Zeige neue Themen',
   'PORTAL_RECENT_EXPLAIN'                  	=> 'Zeige diesen block Ja/Nein? <br /> Die drei-tabs in dem oberen Mittel block einschlie&szlig;lich Ank&uuml;ndigungen, Top Themen und Beitr&auml;ge. Auswahl "Nein" wird den ganzen block deaktivieren.',
   'PORTAL_MAX_TOPIC'                          	=> 'Begrenze Anzahl der Ank&uuml;ndigungen/Top Beitr&auml;ge',
   'PORTAL_MAX_TOPIC_EXPLAIN'                   => '0 bedeutet unbegrenzt',
   'PORTAL_RECENT_TITLE_LIMIT'                 	=> 'Titelzeichen Limit f&uuml;r neue Beitr&auml;ge &Uuml;berschriften',
   'PORTAL_RECENT_TITLE_LIMIT_EXPLAIN'          => '0 bedeutet unbegrenzt',
   'PORTAL_SHOW_LAST_NEWS'						=> 'Zeige letzte News im Portal',
   
	// paypal
   'ACP_PORTAL_PAYPAL_INFO'                  	=> 'Portal Paypal',	
   'ACP_PORTAL_PAYPAL_SETTINGS'                 => 'Paypal Einstellungen',
   'ACP_PORTAL_PAYPAL_SETTINGS_EXPLAIN'       	=> 'Hier kannst du deine Paypal Informationen und dazugeh&ouml;rige Optionen einstellen.',
   'PORTAL_PAY_C_BLOCK'                        	=> 'zeige paypal center',
   'PORTAL_PAY_C_BLOCK_EXPLAIN'                 => 'zeige diesen block Ja/Nein?',
   'PORTAL_PAY_S_BLOCK'                        	=> 'zeige paypal klein',
   'PORTAL_PAY_S_BLOCK_EXPLAIN'                 => 'zeige diesen block Ja/Nein?',
   'PORTAL_PAY_ACC'                            	=> 'Paypal Account zu nutzen',
   'PORTAL_PAY_ACC_EXPLAIN'                     => 'Gib deine Paypal E-Mail Addresse ein die du f&uuml;r deinen account nutzt z. Bsp. xxx@xxx.com',

	// last member
   'ACP_PORTAL_MEMBERS_INFO'               		=> 'Portal letzte Mitglieder',
   'ACP_PORTAL_MEMBERS_SETTINGS'                => 'Einstellungen Neuer Mitglieder',
   'ACP_PORTAL_MEMBERS_SETTINGS_EXPLAIN'       	=> 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten.',
   'PORTAL_LATEST_MEMBERS'                  	=> 'Zeige letzte Mitglieder',
   'PORTAL_LATEST_MEMBERS_EXPLAIN'              => 'Zeige diesen block Ja/Nein?',
   'PORTAL_MAX_LAST_MEMBER'                    	=> 'Anzahl der angezeigten letzten Mitglieder',
   'PORTAL_MAX_LAST_MEMBER_EXPLAIN'             => '0 bedeutet unbegrenzt',
   
	// bots
   'ACP_PORTAL_BOTS_INFO'                    	=> 'Portal Besuchende Bots',
   'ACP_PORTAL_BOTS_SETTINGS'                   => 'Besuchende Bots Einstellungen',
   'ACP_PORTAL_BOTS_SETTINGS_EXPLAIN'       	=> 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten.',
   'PORTAL_LOAD_LAST_VISITED_BOTS'             	=> 'Zeige besuchende bots',
   'PORTAL_LOAD_LAST_VISITED_BOTS_EXPLAIN'      => 'Zeige diesen block Ja/Nein?',
   'PORTAL_LAST_VISITED_BOTS_NUMBER'           	=> 'Wie viele bots anzeigen?',
   'PORTAL_LAST_VISITED_BOTS_NUMBER_EXPLAIN'    => '0 bedeutet unbegrenzt',
   
	// polls   
   'ACP_PORTAL_POLLS_INFO'                    	=> 'Portal Umfrage',	
   'ACP_PORTAL_POLLS_SETTINGS'                  => 'Umfrage Einstellungen',
   'ACP_PORTAL_POLLS_SETTINGS_EXPLAIN'       	=> 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten.',
   'PORTAL_POLL_TOPIC'                         	=> 'Zeige Umfragen',
   'PORTAL_POLL_TOPIC_EXPLAIN'                  => 'Zeige diesen block Ja/Nein?',
   'PORTAL_POLL_TOPIC_ID'                      	=> 'Zeige Umfrage mit folgender Themen ID',
   'PORTAL_POLL_TOPIC_ID_EXPLAIN'             	=> 'Themen ID (Themen Nummer) zur Herkunftbestimmung und anzeigen woher, setze auf 0 (Lasse das Feld nicht leer!!!) um nichts einzustellen.',
   'PORTAL_POLL_FORUM_ID'                      	=> 'Zeige Umfrage mit folgender Foren ID',
   'PORTAL_POLL_FORUM_ID_EXPLAIN'             	=> 'Foren ID (Foren Nummer) zur Herkunftbestimmung und anzeigen woher, setze auf 0 (Lasse das Feld nicht leer!!!) um nichts einzustellen.',
   'PORTAL_POLL_POST_ID'                      	=> 'Zeige Umfrage mit folgender Beitrags ID',
   'PORTAL_POLL_POST_ID_EXPLAIN'             	=> 'Beitrags ID (Beitrags Nummer) zur Herkunftbestimmung und anzeigen woher, setze auf 0 (Lasse das Feld nicht leer!!!) um nichts einzustellen.',

	// most poster
   'ACP_PORTAL_MOST_POSTER_INFO'                => 'Portal Top Poster',
   'ACP_PORTAL_MOST_POSTER_SETTINGS'            => 'Top Poster Einstellungen',
   'ACP_PORTAL_MOST_POSTER_SETTINGS_EXPLAIN'    => 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten.',
   'PORTAL_TOP_POSTERS'                  		=> 'Zeige Top Poster',
   'PORTAL_TOP_POSTERS_EXPLAIN'                 => 'Zeige diesen block Ja/Nein?',
   'PORTAL_MAX_MOST_POSTER'                    	=> 'Wie viele Top Poster anzeigen?',
   'PORTAL_MAX_MOST_POSTER_EXPLAIN'             => '0 bedeutet unbegrenzt',

	// left and right column width 
   'ACP_PORTAL_COLLUMN_WIDTH_INFO'              => 'Portal Spaltenbreite',
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS'          => 'Einstellungen der Spaltenbreite links und rechts',	
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS_EXPLAIN'  => 'Spaltenbreite der Boxen links und rechts.',
   'PORTAL_LEFT_COLLUMN_WIDTH'                 	=> 'Breite der linken Portalspalte',
   'PORTAL_LEFT_COLLUMN_WIDTH_EXPLAIN'          => '&Auml;ndere die Breite der linken Spalte in pixel, vorgschlagener Wert 180',
   'PORTAL_RIGHT_COLLUMN_WIDTH'                 => 'Breite der rechten Portalspalte',
   'PORTAL_RIGHT_COLLUMN_WIDTH_EXPLAIN'         => '&Auml;ndere die Breite der rechten Spalte in pixel, vorgschlagener Wert 180',
   
	// attachments    
   'ACP_PORTAL_ATTACHMENTS_NUMBER_INFO'         		=> 'Portal Anh&auml;nge',
   'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS'     		=> 'Einstellungen f&uuml;r Anh&auml;nge',
   'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS_EXPLAIN'     => 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten.',
   'PORTAL_ATTACHMENTS'                  				=> 'Zeige Anh&auml;nge',
   'PORTAL_ATTACHMENTS_EXPLAIN'                  		=> 'Zeige diesen block Ja/Nein?',
   'PORTAL_ATTACHMENTS_NUMBER'                 			=> 'Anzahl der angezeigten Anh&auml;nge',
   'PORTAL_ATTACHMENTS_NUMBER_EXPLAIN'                 	=> '0 bedeutet unbegrenzt',

	// general 
   'ACP_PORTAL_SWITCHES_INFO'                  	=> 'Portal Block Tauscher',
   'ACP_PORTAL_SWITCHES_SETTINGS'               => 'Allgemein Portalblock Einstellungen',
   'ACP_PORTAL_SWITCHES_SETTINGS_EXPLAIN'       => 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten.',
   'PORTAL_GOOGLE_S_BLOCK'                  	=> 'Google adds small',
   'PORTAL_GOOGLE_S_BLOCK_EXPLAIN'              => 'Zeige diesen block Ja/Nein? <br /> Dies ist ein vordefinierter Google Partner block 120x240_as, der Dateiname ist <strong>google_adds.html</strong>.',
   'PORTAL_GOOGLE_C_BLOCK'                  	=> 'Google adds center',
   'PORTAL_GOOGLE_C_BLOCK_EXPLAIN'              => 'Zeige diesen block Ja/Nein? <br />Dies ist ein vordefinierter Google Partner block 234x60_as, der Dateiname ist <strong>google_adds_portal.html</strong>.',
   'PORTAL_FORUM_BLOCK'                  		=> 'Forum center',
   'PORTAL_FORUM_BLOCK_EXPLAIN'                 => 'Zeige diesen block Ja/Nein? <br /> Der portal\'s big forum center block, das ist das gleiche wie phpBB\'s index page.',
   'PORTAL_ADVANCED_STAT'                  		=> 'Benutzerdefinierte Statistiken',
   'PORTAL_ADVANCED_STAT_EXPLAIN'               => 'Zeige diesen block Ja/Nein?',
   'PORTAL_LEADERS'                  			=> 'Leiter / Team',
   'PORTAL_LEADERS_EXPLAIN'                  	=> 'Zeige diesen block Ja/Nein?',
   'PORTAL_CLOCK'                  				=> 'Uhrzeit',
   'PORTAL_CLOCK_EXPLAIN'                  		=> 'Zeige diesen block Ja/Nein?',
   'PORTAL_LINK_US'                  			=> 'Link us',
   'PORTAL_LINK_US_EXPLAIN'                  	=> 'Zeige diesen block Ja/Nein? <br /> Erm&ouml;glicht HTML Code um andere auf deine Seite linken zu lassen, mittels copy and paste, der gegebene HTML Code mit einem 88x31 Banner wird auf deren Seite angezeigt.',
   'PORTAL_LINKS'                  				=> 'Links',
   'PORTAL_LINKS_EXPLAIN'                  		=> 'Zeige diesen block Ja/Nein? <br /> Zum Hinzf&uuml;gen und &Auml;ndern von Links f&uuml;r diesen block. Die dazugeh&ouml;rige Datei ist <strong>links.html</strong>.',
   'PORTAL_WELCOME'                  			=> 'Willkommen Bereich',
   'PORTAL_WELCOME_EXPLAIN'                  	=> 'Zeige diesen block Ja/Nein?',
   'PORTAL_RANKS'                  			    => 'Rang Center',
   'PORTAL_RANKS_EXPLAIN'                  		=> 'Zeige diesen block Ja/Nein? <br /> Dieser Tab block Beinhaltet Word graph, R&auml;nge, Anh&auml;nge und Forumliste. W&auml;hle "Nein" wenn der block deaktiviert werden soll.',
   'PORTAL_MAX_ONLINE_FRIENDS'                 	=> 'Anzeigelimit der Online Freunde',
   'PORTAL_MAX_ONLINE_FRIENDS_EXPLAIN'          => 'Anzeigelimit der Online Freunde im Portal Block mit der dazugeh&ouml;rigen Einstellung (standard ist 8).',
   'PORTAL_MAINMENU_NORMAL'                  	=> 'Navigations Men&uuml;',
   'PORTAL_MAINMENU_NORMAL_EXPLAIN'      		=> 'Zeige diesen block Ja/Nein? <br /> Verwalte hier die Eintr&auml;ge im Navigations block im Portal.',
   'PORTAL_MAINMENU_DHTML'                  	=> 'Navigation Men&uuml; DHTML',
   'PORTAL_MAINMENU_DHTML_EXPLAIN'              => 'Zeige diesen block Ja/Nein? <br /> Zum &Auml;ndern und Hinzuf&uuml;gen der Optionen des Blocks. Die dazugeh&ouml;rgie Datei ist main_menu_dhtml.html.',

    // wordgraph
   'ACP_PORTAL_WORDGRAPH_INFO'					=> 'Portal Wordgraph',
   'ACP_PORTAL_WORDGRAPH_SETTINGS'              => 'Wordgraph Einstellungen',	
   'ACP_PORTAL_WORDGRAPH_SETTINGS_EXPLAIN'      => 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten.',
   'PORTAL_WORDGRAPH'                  			=> 'Zeige wordgraph',
   'PORTAL_WORDGRAPH_EXPLAIN'                  	=> 'Zeige diesen block Ja/Nein?',
   'PORTAL_WORD_GRAPH_MAX_WORDS'                => 'Wie viele Worte sollen angezeigt werden?',
   'PORTAL_WORD_GRAPH_MAX_WORDS_EXPLAIN'        => '0 bedeutet unbegrenzt',
   'PORTAL_WORD_GRAPH_WORD_COUNTS'              => 'Bestimme die Anzahl',
   'PORTAL_WORD_GRAPH_WORD_COUNTS_EXPLAIN'      => 'Beinhaltet Anzeigeanzahl pro Wort z. Bsp. (25) Ja/Nein?',
   'PORTAL_WORD_GRAPH_RATIO'              		=> 'Benutzt verschiedene Wortgr&ouml;&szlig;e der Darstellung',
   'PORTAL_WORD_GRAPH_RATIO_EXPLAIN'            => 'Ver&auml;ndere Wortgr&ouml;&szlig;e der Darstellung (gr&ouml;&szlig;er/kleiner) Wortgr&ouml;&szlig;e (standard=4). Diese Einstellung ist im Verh&auml;ltnis zu dem Wert der angezeigten W&ouml;rter. Je mehr W&ouml;rter, desto mehr Seitenverh&auml;ltnis k&ouml;nnen Sie w&auml;hlen, um die Worte zu vergr&ouml;&szlig;ern.',

/* not in use at moment
   'PORTAL_WORD_GRAPH_MAX_SIZE'              	=> 'Maximum font size in pixel',
   'PORTAL_WORD_GRAPH_MAX_SIZE_EXPLAIN'         => 'Set maximum value of font size for words in wordgraph.',
   'PORTAL_WORD_GRAPH_MIN_SIZE'              	=> 'Minimum font size in pixel',
   'PORTAL_WORD_GRAPH_MIN_SIZE_EXPLAIN'         => 'Set minimum value of font size for words in wordgraph.',
*/
	
	// random 
   'ACP_PORTAL_RANDOM_INFO'                  	=> 'Portal Random',
   'ACP_PORTAL_RANDOM_SETTINGS'               	=> 'Random banners/blocks Einstellungen',
   'ACP_PORTAL_RANDOM_SETTINGS_EXPLAIN'       	=> 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten.',
   'PORTAL_RAN_HO_BLOCK'                  		=> 'Zuf&auml;llige Banner im Horizontal zentriert (max. Werte 386x60 pix)',
   'PORTAL_RAN_HO_BLOCK_EXPLAIN'                => 'Zeige diesen block Ja/Nein?',
   'PORTAL_RAN_VE_BLOCK'                  		=> 'Zuf&auml;llige Banner Vertikal (max. Werte 130x600 pix)',
   'PORTAL_RAN_VE_BLOCK_EXPLAIN'                => 'Zeige diesen block Ja/Nein?',
   'PORTAL_RAN_LI_BLOCK'                  		=> 'Zuf&auml;llige Banner Links (max. Werte 88x31 pix).',
   'PORTAL_RAN_LI_BLOCK_EXPLAIN'                => 'Zeige diesen block Ja/Nein? <br /> Dieses Men&uuml; f&uuml;gt dazu von der Portal Partner Administration hinzu - Verwalte in diesem block angezeigten Partner.',
   'PORTAL_RANDOM_MEMBER'                  		=> 'Zuf&auml;llige Mitglieder',
   'PORTAL_RANDOM_MEMBER_EXPLAIN'               => 'Zeige diesen block Ja/Nein?',

	// welcome message
   'ACP_PORTAL_WELCOME_INFO'                  	=> 'Portal Willkommen',
   'ACP_PORTAL_WELCOME_SETTINGS'               	=> 'Willkommen Einstellungen',
   'ACP_PORTAL_WELCOME_TXT_SETTINGS'           	=> 'Willkommnen Text Einstellungen',
   'ACP_PORTAL_WELCOME_SETTINGS_EXPLAIN'       	=> 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten.',
   'PORTAL_WELCOME_INTRO'                  	    => 'Willkommensnachricht f&uuml;r G&auml;ste',
   'PORTAL_WELCOME_INTRO_EXPLAIN'               => '&Auml;ndere die Willkommensnachricht f&uuml;r G&auml;ste. Max. 2000 Zeichen (html erlaubt)! Die restlichen Zeichen werden automatisch abgeschnitten.',
   'PORTAL_WELCOME_BACK'                        => 'Willkommensnachricht registrierter Benutzer',
   'PORTAL_WELCOME_BACK_EXPLAIN'                => '&Auml;ndere die Willkommensnachricht f&uuml;r registrierte Benutzer. Max. 2000 Zeichen (html erlaubt)! Die restlichen Zeichen werden automatisch abgeschnitten.',

	// chatbox
   'ACP_PORTAL_SHOUTBOX_INFO'					=> 'Portal Chatbox',
   'ACP_PORTAL_SHOUTBOX_SETTINGS'				=> 'Chatbox Einstellungen',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_HC'			=> 'Chatbox H&ouml;hen und Farbeinstellungen vom Portal Block',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_HCB'			=> 'Chatbox H&ouml;hen und Farbeinstellungen vom gro&szlig;en Block',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_EXPLAIN'		=> 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten. Der Text wird nach 600 Zeichen automatisch abgeschnitten.',
   'PORTAL_SHOUTBOX'                  			=> 'Zeige chatbox',
   'PORTAL_SHOUTBOX_EXPLAIN'                  	=> 'Zeige diesen block Ja/Nein?',
   'PORTAL_SHOUTBOX_NUMBER'                  	=> 'Wie viele Chateintrg&auml;ge sollen angzeigt werden?',
   'PORTAL_SHOUTBOX_NUMBER_EXPLAIN'             => '0 = unendlich, ansonsten werden die x letzten angezeigt',
   'PORTAL_SHOUTBOX_SESSION_TIME'               => 'Erlaubte Session Zeit',
   'PORTAL_SHOUTBOX_SESSION_TIME_EXPLAIN'       => 'F&uuml;ge einen Betrag zwischen 0 und 999 Sekunden ein nachdem die Session endet, Standard sind 300 Sekunden',
   'PORTAL_SHOUTBOX_DEFAULT_DELAY'              => 'Akualisierungsverz&ouml;gerung',
   'PORTAL_SHOUTBOX_DEFAULT_DELAY_EXPLAIN'      => 'F&uuml;ge einen Betrag zwischen 0 und 999 Sekunden ein nachdem die chatbox automatisch neu geladen wird, Standard sind 15 Sekunden',












	// weather
   'ACP_PORTAL_WEATHER_INFO'				    => 'Portal Wetter',
   'ACP_PORTAL_WEATHER_SETTINGS'			    => 'Wetter Einstellungen',
   'ACP_PORTAL_WEATHER_SETTINGS_GER'			=> 'Wetter Einstellungen f&uuml;r wetter.com aus Deutschland',
   'ACP_PORTAL_WEATHER_SETTINGS_ALT'			=> 'Wetter Einstellungen f&uuml;r alle alternativen Wetter Seiten',
   'ACP_PORTAL_WEATHER_SETTINGS_EXPLAIN'	    => 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten. Standard Wetterseite ist wetter.com von Deutschland. Zum &auml;ndern musst du die url in styles/prosilver/template/portal/block/weather.html &auml;ndern, oder f&uuml;lle die anternativen Felder unten aus. Bis zu drei verschiedene Wetterseiten sind m&ouml;glich.',
   'PORTAL_WEATHER'                  		    => 'Zeige Wetter',
   'PORTAL_WEATHER_EXPLAIN'                     => 'Zeige diesen block Ja/Nein?',
   'PORTAL_WEATHER_GER'                  		=> 'Zeige Wetter Wetter f&uuml;r wetter.com',
   'PORTAL_WEATHER_GER_EXPLAIN'                 => 'Zeige diesen block Ja/Nein?',
   'PORTAL_WEATHER_ZIPCODE'                  	=> 'Deine PLZ',
   'PORTAL_WEATHER_ZIPCODE_EXPLAIN'             => 'Gib hier deine Postleitzahl an f&uuml;r Deutschlands wetter.com',
   'PORTAL_WEATHER_ALTERNATE_URL'              	=> 'Deine alternative Wetter URL',
   'PORTAL_WEATHER_ALTERNATE_URL_EXPLAIN'       => 'Trage die komplette Wetter URL hier ein um einen alternativen Wetterbereich festzulegen. F&uuml;r keine Anzeige frei lassen',
   'PORTAL_WEATHER_ALTERNATE_URL1'              => 'Deine alternative Wetter URL',
   'PORTAL_WEATHER_ALTERNATE_URL1_EXPLAIN'      => 'Trage die komplette Wetter URL hier ein um einen alternativen Wetterbereich festzulegen. F&uuml;r keine Anzeige frei lassen',
   'PORTAL_WEATHER_ALTERNATE_URL2'              => 'Deine alternative Wetter URL',
   'PORTAL_WEATHER_ALTERNATE_URL2_EXPLAIN'      => 'Trage die komplette Wetter URL hier ein um einen alternativen Wetterbereich festzulegen. F&uuml;r keine Anzeige frei lassen',
   
	// syndication
   'ACP_PORTAL_SYNDICATE_INFO'				    => 'Portal RSS / RDF Syndication',
   'ACP_PORTAL_SYNDICATE_INFO_SETTINGS'			=> '&Auml;ndere syndication Einstellungen',
   'ACP_PORTAL_SYNDICATE_INFO_SETTINGS_EXPLAIN'	=> 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten.',
   'PORTAL_SYNDICATE'                  		    => 'Zeige Syndication',
   'PORTAL_SYNDICATE_EXPLAIN'                   => 'Zeige diesen block Ja/Nein?',

	// Portal Index
   'ACP_PORTAL_INDEX_INFO'				        => 'Portal Index',
   'ACP_PORTAL_INDEX_INFO_LAYOUT'	    		=> 'Zeige Bl&ouml;cke auf index/viewforum',
   'ACP_PORTAL_INDEX_INFO_LAYOUT_EXPLAIN'		=> 'Anzeigen Ja/Nein?',
   'ACP_PORTAL_INDEX_INFO_SETTINGS'			    => '&Auml;ndere index/viewforum block Einstellunen',
   'ACP_PORTAL_INDEX_INFO_COLUMN_SETTINGS'	    => '&Auml;ndere index/viewforum Spalten Einstellungen',
   'ACP_PORTAL_INDEX_INFO_SETTINGS_EXPLAIN'	    => 'Hier kann du deine index/viewforum Navigation anpassen, board index und viewforum index sind hier kombiniert. Das Layout wird f&uuml;r beide angepasst.',
   'PORTAL_INDEX_LEFT'                  		=> 'Anzeige des Blocks auf der linken Seite',
   'PORTAL_INDEX_LEFT_EXPLAIN'                  => 'Anzeige des Blocks auf der linken Seite portal index/viewforum Ja/Nein?',
   'PORTAL_INDEX_LEFT_COLLUMN_WIDTH'            => 'Spaltenbreite der linken Seite',
   'PORTAL_INDEX_LEFT_COLLUMN_WIDTH_EXPLAIN'    => '&Auml;ndere Spaltenbreite der linken Seite in pixel, Standardwert = 180',
   'PORTAL_INDEX_RIGHT'                  		=> 'Anzeige des Blocks auf der rechten Seite',
   'PORTAL_INDEX_RIGHT_EXPLAIN'                 => 'AAnzeige des Blocks auf der rechten Seite portal index/viewforum Ja/Nein?',
   'PORTAL_INDEX_RIGHT_COLLUMN_WIDTH'           => 'Spaltenbreite der rechten Seite',
   'PORTAL_INDEX_RIGHT_COLLUMN_WIDTH_EXPLAIN'   => '&Auml;ndere Spaltenbreite der rechten Seite in pixel, Standardwert = 180',

	// change style
   'ACP_PORTAL_BOARD_STYLE_INFO'				=> '&Auml;ndere Board Style',
   'ACP_PORTAL_BOARD_STYLE_SETTINGS'			=> '&Auml;ndere Board Style Einstellungen',
   'ACP_PORTAL_BOARD_STYLE_SETTINGS_EXPLAIN'	=> 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten.',

	// media player
   'ACP_PORTAL_MEDIA_INFO'            			=> 'Media player',
   'ACP_PORTAL_MEDIA_INFO_EXPLAIN'    			=> '&Auml;ndere media player Informationen und die dazugeh&ouml;rigen Einstellungen.',
   'PORTAL_MEDIA_PLAYER'               			=> 'Anzeige media player?',
   'PORTAL_MEDIA_PLAYER_EXPLAIN'       			=> 'Zeige diesen block Ja/Nein?',

	// picture gallery
   'ACP_PORTAL_GALLERY_INFO'            		=> 'Bilder Galerie',
   'ACP_PORTAL_GALLERY_INFO_EXPLAIN'   			=> '&Auml;ndere Bilder Galerie Informationen und die dazugeh&ouml;rigen Einstellungen.',
   'PORTAL_PICTURE_GALLERY'               		=> 'Anzeige Bilder Galerie?',
   'PORTAL_PICTURE_GALLERY_EXPLAIN'    			=> 'Zeige diesen block Ja/Nein?',

	// scroll message
   'ACP_PORTAL_SCROLL_MESSAGE_INFO'            			=> 'Scroll Message',
   'ACP_PORTAL_SCROLL_MESSAGE_INFO_EXPLAIN'   			=> 'Der marquee tag ist kein-standard HTML markup element type welches das von rechts nach links scrollen ergibt. Die Standard Breite des MARQUEE Elements ist ist identisch zum vorherigen/&uuml;bergeordnetem element.',
   'PORTAL_SCROLL_MESSAGE_DISPLAY'               		=> 'Anzeige Scroll Message?',
   'PORTAL_SCROLL_MESSAGE_DISPLAY_EXPLAIN'    			=> 'Zeige diesen block Ja/Nein?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE'               		=> 'Zeige scroll/marquee Effekt?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_EXPLAIN'    			=> 'Anzeigen Ja/Nein?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTCOLOR'            => 'Textfarbe',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTCOLOR_EXPLAIN'	=> 'HEX Code Farben wie #ffffff f&uuml;r wei&szlig; sind erlaubt, oder Farben wie vilolet. Standard ist #ff0000 ',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTSIZE'         	=> 'Schriftgr&ouml;&szlig;e',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTSIZE_EXPLAIN' 	=> 'Schriftgr&ouml;&szlig;e in pixel. Standard sind 10px.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_DIRECTION'         	=> 'Scroll Richtung',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_DIRECTION_EXPLAIN' 	=> 'Scroll Richtung des Textes einstellen. Zul&auml;ssige Werte sind <strong>left</strong>, <strong>right</strong>, <strong>up</strong> und <strong>down</strong>.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SPEED'         		=> 'Scroll Betrag',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SPEED_EXPLAIN' 		=> 'Betrag der Schritte (in pixel) zwischen den aufeinanderfolgenden Anzeigen was die Animation beeinflusst.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_ALIGN'         		=> 'Scroll Ausrichtung',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_ALIGN_EXPLAIN' 		=> 'Folgende Optionen: top, middle und bottom. Bestimmt die Position der marquee Anzeige Box relativ zur jetztigen Ausrichtung.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BEHAVIOR'         	=> 'Scroll Verhalten',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BEHAVIOR_EXPLAIN' 	=> 'Einstellung zum Scroll Verhalten. Drei Werte sind m&ouml;glich. Das Scollen startet sobald die Seite geladen ist, nicht wenn die Benutzer in das marquee reinscrollen. <br /><br />Optionen: <br /><strong>scroll</strong> Der Text startet vom anderen Ende wenn er durchgelaufen ist. Das ist die Standardeinstellung. <br /><strong>slide</strong> erreicht der Text das Ende des Feldes erscheint er sofort neu am Anfang. <br /><strong>alternate</strong> "springt" springt der Text an das Ende.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BGCOLOR'         		=> 'Scroll Hintergrundfarbe',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BGCOLOR_EXPLAIN' 		=> 'Hintergrundfarbe der Anzeigebox.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HEIGHT'         		=> 'Scroll H&ouml;he',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HEIGHT_EXPLAIN' 		=> 'Zur Einstellung der H&ouml;he der Box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_WIDTH'         		=> 'Scroll Breite',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_WIDTH_EXPLAIN' 		=> 'Zur Einstellung der Breite der Box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HSPACE'         		=> 'Scroll hspace',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HSPACE_EXPLAIN' 		=> 'Horizontaler Abstand um die Box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_VSPACE'         		=> 'Scroll vspace',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_VSPACE_EXPLAIN' 		=> 'Vertikaler Abstand um die Box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_LOOP'         		=> 'Scroll loop',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_LOOP_EXPLAIN' 		=> 'Wie oft angezeigt wird. Der Wert -1 und infinite beide entsprechen unendlich.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SCROLLDELAY'         	=> 'Scroll delay',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SCROLLDELAY_EXPLAIN' 	=> 'Bestimmt die Scrollverz&ouml;gerung (in Millisekunden) f&uuml;r den Scrolleffekt.',
   'PORTAL_SCROLL_MESSAGE_INTRO' 						=> 'Scroll message Text',
   'PORTAL_SCROLL_MESSAGE_INTRO_EXPLAIN' 				=> 'Bearbeite hier bzw. f&uuml;ge hier deine Scroll Text Nachricht hinzu.  Bis zu 1000 sind erlaubt, html ist erlaubt, cookies sind aktiviert! Die restlichen Zeichen werden abgeschnitten.',
   'ACP_PORTAL_SCROLL_MESSAGE_TXT_SETTINGS'         	=> 'Scrollbarer Text',

	// meta tags
   'ACP_PORTAL_METATAGS_INFO'            			=> 'META Tags',
   'ACP_PORTAL_METATAGS_INFO_EXPLAIN'   			=> 'Willkommen zum META Tags Management. Beschreibung der Seite f&uuml;r Suchmaschinen.<br/ >Deine Seite wird besser indiziiert.<br/ >Weiterhin, erlauben diese Tags weitere Optionen wie die indirekte URL.',
   'PORTAL_META_REDIRECT_URL_TIME'            		=> 'Weiterleitungszeit (Sekunden)',
   'PORTAL_META_REDIRECT_URL_TIME_EXPLAIN'          => 'Reguliert die Verz&ouml;gerung von Weiterleitungen zwischen Seiten. Wenn nicht gew&uuml;nscht einfch frei lassen f&uuml;r automatisch!',
   'PORTAL_META_REDIRECT_URL_ADRESS'            	=> 'Weiterleitungsadresse (URL)',
   'PORTAL_META_REDIRECT_URL_ADRESS_EXPLAIN'        => 'Wohin wird nach der Verz&ouml;gerung weitergeleitet. F&uuml;r automatisch einfach freilassen!',
   'PORTAL_META_REFRESH'            				=> 'META Aktualisierung',
   'PORTAL_META_REFRESH_EXPLAIN'        			=> 'Verz&ouml;gerung des Browser zur Aktualisierung. Angabe in Sekunden. F&uuml;r automatisch einfach freilassen!',
   'PORTAL_META_PRAGMA'            					=> 'META Pragma',
   'PORTAL_META_PRAGMA_EXPLAIN'        				=> 'Untersagt die Aufnahme in den Browser Cache.<br/ >- Zur Best&auml;tigung <i>no-cache</i> w&auml;hlen, wenn nicht, freilassen.',
   'PORTAL_META_KEYWORDS'            				=> 'META Keywords',
   'PORTAL_META_KEYWORDS_EXPLAIN'        			=> 'Funktion: Indiziert Stichworte zum Fnden &uuml;ber eine Suchseite.<br />- Max. Zeichen: 1000 oder 100 Worte.<br/ >- In der Anzahl der Zeichen nicht vergessen die <a href="accent.htm">AkzentCode Zeichen</a> mitz&auml;hlen. Zum Beispiel das "à", kodiert &amp&agrave; in HTML Zeichen ergeben 8.<br />- Keine Wortwiederholungen erlaubt (Suchmaschinen m&ouml;gen das nicht).<br />- Getrennt werden die Worte per Komma oder Leerzeichen.',
   'PORTAL_META_DESCRIPTION'            			=> 'META Description',
   'PORTAL_META_DESCRIPTION_EXPLAIN'        		=> 'Description of your site.<br />- Max. Anzahl an Zeichen: 200<br />- Vermeiden Sie die Akzente, kann Probleme bei Suchmaschinen geben.',
   'PORTAL_META_AUTHOR'            					=> 'META Author',
   'PORTAL_META_AUTHOR_EXPLAIN'        				=> 'Angaben zum Verfasser der Seite.<br/ >- Trage deine Daten ein.<br/ >- Mehrere Verfasser mit Komma Trennen.',
   'PORTAL_META_IDENTIFIER_URL'            			=> 'META Identifier-url',
   'PORTAL_META_IDENTIFIER_URL_EXPLAIN'        		=> 'Erm&ouml;glich url zu zu ordnen.<br />- Gib die URL deiner Seite ein.<br />- Nur eine URL.',
   'PORTAL_META_REPLY_TO'            				=> 'META Reply-to',
   'PORTAL_META_REPLY_TO_EXPLAIN'        			=> 'Erlaubt die E-Mail Adresse des Webmasters anzugeben.<br/ > Am besten nur eine Adresse.',
   'PORTAL_META_REVISIT_AFTER'            			=> 'META Revisit-after',
   'PORTAL_META_REVISIT_AFTER_EXPLAIN'        		=> 'Anzahl der Tage bis der Spider (Roboter der Suchmaschine) wieder vorbeikommt. - 15 days" oder "30 days" sind die besten Optionen.',
   'PORTAL_META_CATEGORY'            				=> 'META Category',
   'PORTAL_META_CATEGORY_EXPLAIN'        			=> 'Erlaubt deine Seite in eine Kategorie einzuordnen. Suchmaschinen ordnen sich Katogorien zu.',
   'PORTAL_META_COPYRIGHT'            				=> 'META Copyright',
   'PORTAL_META_COPYRIGHT_EXPLAIN'        			=> 'Typischer unqulifizierter Copyright Hinweis.',
   'PORTAL_META_GENERATOR'            				=> 'META Generator',
   'PORTAL_META_GENERATOR_EXPLAIN'        			=> 'Womit wurde dieser Code generiert? Nenne die Software wenn du willst.',
   'PORTAL_META_ROBOTS'            					=> 'META Robots',
   'PORTAL_META_ROBOTS_EXPLAIN'        				=> 'Kontrolliert die Suchroboter.<br/ >- <strong>all</strong> = Alle Seiten werden indiziert (beim standard)<br />- <strong>none</strong> = Nicht alle Seiten werden indiziert<br />- <strong>index</strong> = nur Indexseite<br />- <strong>noindex</strong> = Die Links werden weiterverfolgt aber die Seite wird nicht indiziert<br />- <strong>follow</strong> = Der Bot folgt den auf der Seite befindlichen Links.<br />- <strong>nofollow</strong> = Damit er das nicht tut.<br />- <strong>noodp</strong> = Bestimmte sperren z. Bsp. (Live Search Microsoft). MSN Search ingnoriert nun alles.',
   'PORTAL_META_DISTRIBUTION'            			=> 'META Distribution',
   'PORTAL_META_DISTRIBUTION_EXPLAIN'        		=> 'Klassifikationen der Einteilung des Inhaltes deiner Seite:<br/ >- <strong>Global</strong> (Im gesamten Web)<br/ >- <strong>Local</strong> (vorbehaltlich lokaler IP Block Ihrer Website)<br/ >- <strong>IU</strong> (Interne Einsatzes, der nicht f&uuml;r den &ouml;ffentlichen Vertrieb).',
   'PORTAL_META_CREATION_YEAR'            			=> 'META Date-creation-yyyy',
   'PORTAL_META_CREATION_YEAR_EXPLAIN'        		=> 'Jahr der Erstellung Ihrer Website zB. 2005.',
   'PORTAL_META_CREATION_MONTH'            			=> 'META Date-creation-mm',
   'PORTAL_META_CREATION_MONTH_EXPLAIN'        		=> 'Monat der Erstellung Ihrer Website zB. 03.',
   'PORTAL_META_CREATION_DAY'            			=> 'META Date-creation-dd',
   'PORTAL_META_CREATION_DAY_EXPLAIN'        		=> 'Tag der Erstellung Ihrer Website zB. 23.',
   'PORTAL_META_REVISION_YEAR'            			=> 'META Date-revision-yyyy',
   'PORTAL_META_REVISION_YEAR_EXPLAIN'        		=> 'Jahr der &Auml;nderung Ihrer Website zB. 2007.',
   'PORTAL_META_REVISION_MONTH'            			=> 'META Date-revision-mm',
   'PORTAL_META_REVISION_MONTH_EXPLAIN'        		=> 'Monat der &Auml;nderung Ihrer Website zB. 08.',
   'PORTAL_META_REVISION_DAY'            			=> 'META Date-revision-dd',
   'PORTAL_META_REVISION_DAY_EXPLAIN'        		=> 'Tag der &Auml;nderung Ihrer Website zB. 21.',

	// other
   'ACP_PORTAL_OTHER_INFO'                  	=> 'Sonstige Portal Einstellungen',
   'ACP_PORTAL_OTHER_SETTINGS'               	=> 'Sonstige Portal Einstellungen',
   'ACP_PORTAL_OTHER_SETTINGS_EXPLAIN'       	=> 'Hier kannst die Informationen und dazugeh&ouml;renden Optionen bearbeiten.',
   'PORTAL_MAX_LASTVISITS'                 		=> 'Begrenzung der Anzahl der zuletzt besuchten Benutzer',
   'PORTAL_MAX_LASTVISITS_EXPLAIN'          	=> 'Anzeige der zuletzt dagewesen Nutzer im Portal (Standard ist 5).',
   'PORTAL_ACT_RECENT_HOT_TOPICS'               => 'Anzeige der letzten Themen und Beitr&auml;ge (scroll)?',
   'PORTAL_ACT_RECENT_HOT_TOPICS_EXPLAIN'    	=> 'Zeige diesen block Ja/Nein?',
   'PORTAL_ACT_RECENT_TOPICS'               	=> 'Anzeige der letzten Themen (scroll)?',
   'PORTAL_ACT_RECENT_TOPICS_EXPLAIN'    		=> 'Zeige diesen block Ja/Nein?',
   'PORTAL_ANNOUNCE_IMPORTANT'               	=> 'Anzeige der Wichtigen Ank&uuml;ndigungen?',
   'PORTAL_ANNOUNCE_IMPORTANT_EXPLAIN'    		=> 'Zeige diesen block Ja/Nein?',
   'PORTAL_DONWLOADS'               			=> 'Anzeige der Downloads?',
   'PORTAL_DONWLOADS_EXPLAIN'    				=> 'Zeige diesen block Ja/Nein?',
   'PORTAL_FORUMLIST'               			=> 'Anzeige der Forenliste?',
   'PORTAL_FORUMLIST_EXPLAIN'    				=> 'Zeige diesen block Ja/Nein? <br /> Zeigt alle Foren der Seite als Liste in einem Block.',
   'PORTAL_PHPINFO'               				=> 'Anzeige der PHP info?',
   'PORTAL_PHPINFO_EXPLAIN'    					=> 'Zeige diesen block Ja/Nein?',
   'PORTAL_QUOTES'               				=> 'Anzeige der Zitate?',
   'PORTAL_QUOTES_EXPLAIN'    					=> 'Zeige diesen block Ja/Nein?',

   'PORTAL_DRAG_DROP'               			=> 'Portal Drag and Drop Optionen',
   'PORTAL_DRAG_DROP_EXPLAIN'       			=> 'Zeige diesen block Ja/Nein? <br /> Global aktivieren / deaktivieren der Drag and Drop Funktion der Blocks im Portal / Index.',

   'PORTAL_RAN_H_BLOCK'                     	=> '<b>ge&auml;nderte Portal Einstellungen</b>',
   'CONFIG_UPDATED'								=> 'Konfiguration erfolgreich aktualisiert.',
   'VIEWING_PORTAL'								=> 'Portal ansehen',
   
   // corrected/added since RC2 below
   //'PORTAL_PICTURE_RESIZE'						=> 'Automatically picture resize (pixel)',
   //'PORTAL_PICTURE_RESIZE_EXPLAIN'				=> 'Resize of pictures using the img-tag in messages which are placed as portal news.',
   
   'PORTAL_PICTURE_RESIZE'						=> 'Automatische Bildanpassung (pixel)',
   'PORTAL_PICTURE_RESIZE_EXPLAIN'				=> 'Autamisches anpassen der Bildgr&ouml;sse f&uuml;r Nachrichten in den Portal-News.',
   
   // corrected/added since RC5 below
	//'ACP_COUNTER_SETTINGS_EXPLAIN'	=> 'Settings for animate digits IP tracking counter.',
	//'ACP_COUNTER_DIGITS_SETTINGS'	=> 'Counter digits settings',
	//'ACP_COUNTER_DISPLAY_SETTINGS'	=> 'Counter display settings',
	//'ACP_COUNTER_IP_SETTINGS'		=> 'Counter IP blocking settings',
	
	'ACP_COUNTER_SETTINGS_EXPLAIN'	=> 'Einstellungen f&uuml;r animierten DIGITS IP TRACKING Z&auml;hler.',
	'ACP_COUNTER_DIGITS_SETTINGS'	=> 'Einstellungen f&uuml;r den DIGITS Z&auml;hler',
	'ACP_COUNTER_DISPLAY_SETTINGS'	=> 'Aussehen den DIGITS Z&auml;hlers',
	'ACP_COUNTER_IP_SETTINGS'		=> 'Einstellungen f&uuml;r IP-Blocker Z&auml;hler',

	'COUNTER_DIGITS_PATH'				=> 'Pfad zu den DIGITS',
	'COUNTER_DIGITS_PATH_EXPLAIN'		=> 'Pfad zu den DIGITS innerhalb des phpBB3 - Root, z.B. <samp>images/counter/digits</samp>',
	'COUNTER_DIGITS_ANI_PATH'			=> 'Pfad zu den animierten DIGITS',
	'COUNTER_DIGITS_ANI_PATH_EXPLAIN'	=> 'Pfad zu den animierten DIGITS innerhalb des phpBB3 - Root, z.B. <samp>images/counter/digits_ani</samp>',
	'COUNTER_DIGITS_NUMBER'				=> 'Anzahl der angezeigten DIGITS',
	'COUNTER_DIGITS_NUMBER_EXPLAIN'		=> 'Wieviele DIGITS sollen dargestellt werden?',
	'COUNTER_DIGITS_WIDTH'				=> 'DIGIT-Breite',
	'COUNTER_DIGITS_WIDTH_EXPLAIN'		=> 'Wie breit soll ein DIGIT sein?',
	'COUNTER_DIGITS_HEIGHT'				=> 'DIGIT-H&ouml;he',
	'COUNTER_DIGITS_HEIGHT_EXPLAIN'		=> 'Wie hoch soll ein DIGIT sein?',
	'COUNTER_DISPLAY_IMAGE'				=> 'Anzeige als Bild',
	'COUNTER_DISPLAY_NONE'				=> 'Keine Anzeige',
	'COUNTER_DISPLAY_STATS'				=> 'Alle Statistiken Anzeigen',
	'COUNTER_DISPLAY_STATS_EXPLAIN'		=> 'Erlauben das alle Statisken zum Z&auml;hler werden angezeigt werden.',
	'COUNTER_DISPLAY_TEXT'				=> 'Darstellung als Text',
	'COUNTER_BLOCK_IP'					=> 'Blocken von IPs erlauben',
	'COUNTER_BLOCK_IP_EXPLAIN'			=> 'IP Adressen vom Counter auschliessen, um Tracking/Blocking zu Erlauben. Mit dieser Option arbeitet der Counter sicherer und sauberer: Die Treffer einer IP werden exakt gez&auml;hlt. Ansonsten z&auml;hlt der Counter jeden Refresh des Users, welches das reale Ergebnis verf&auml;lscht.',
	'COUNTER_BLOCK_TIME'				=> 'Blocking Zeit',
	'COUNTER_BLOCK_TIME_EXPLAIN'		=> 'Wieviele Sekunden soll eine IP bis zur n&auml;chsten Z&auml;hlung blockiert werden?',
	'COUNTER_IP_LOGFILE'				=> 'IP log Datei',
	'COUNTER_IP_LOGFILE_EXPLAIN'		=> 'Pfad zu der IP-Log datei innerhalb des phpbb-Roots, z.B. <samp>images/counter/ip.txt</samp>. Nur erforderlich wenn IP-Blocking aktiviert ist.',

	'SELECT_COUNTER_DISPLAY_MODE'			=> 'Z&auml;hler Anzeige Modus',
	'SELECT_COUNTER_DISPLAY_MODE_EXPLAIN'	=> 'W&auml;hle den Anzeige Modus f&uuml;r den Z&auml;hler.',
   
));

?>
