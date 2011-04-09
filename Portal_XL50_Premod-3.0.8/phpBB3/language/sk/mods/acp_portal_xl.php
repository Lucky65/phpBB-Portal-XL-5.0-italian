<?php
/** 
*
* @name acp_portal_xl.php [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
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

$lang = array_merge($lang, array(

   'ACP_PORTAL_INFO'                  			=> 'Správa Portálu',
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
   'ACP_PORTAL_ANNOUNCE_INFO'           		=> 'Oznámenia Portálu',
   'ACP_PORTAL_ANNOUNCE_SETTINGS'               => 'Nastavenie Oznámení',
   'ACP_PORTAL_ANNOUNCE_SETTINGS_EXPLAIN'       => 'V zadaných volbách môžete meniť nastavenie pre ohlasovanie oznámení.',
   'PORTAL_ANNOUNCMENTS'                       	=> 'Zobrazím oznámenia',
   'PORTAL_ANNOUNCMENTS_EXPLAIN'                => 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_NUMBER_OF_ANNOUNCMENTS'             	=> 'Počet oznámení v Portále',
   'PORTAL_NUMBER_OF_ANNOUNCMENTS_EXPLAIN'      => '0 znamená nekonečne',
   'PORTAL_ANNOUNCMENTS_DAY'                   	=> 'Počet dní pre zobrazenie oznamu',
   'PORTAL_ANNOUNCMENTS_DAY_EXPLAIN'           	=> '0 znamená nekonečne',
   'PORTAL_ANNOUNCMENTS_LENGTH'                	=> 'Max.dĺžka oznámení.',
   'PORTAL_ANNOUNCMENTS_LENGTH_EXPLAIN'       	=> 'Zadanie pre počet písmen ktoré budú zobrazené. 0 znamená nekonečne.',
   'PORTAL_GLOBAL_ANNOUNCMENTS_FORUM'          	=> 'Globálne oznámenia ID fór',
   'PORTAL_GLOBAL_ANNOUNCMENTS_FORUM_EXPLAIN'   => 'Pred zavedené odstavce (MUSÍTE uviesť ID fóra),  pridružených-fór oddelujte čiarkou, napr. 1,2,5. toto pole nenechávajte prázdne, 0 platí tiež.',

	// news
   'ACP_PORTAL_NEWS_INFO'                  		=> 'Správy v Portále',
   'ACP_PORTAL_NEWS_SETTINGS'                  	=> 'Nastavenie správ ',
   'ACP_PORTAL_NEWS_SETTINGS_EXPLAIN'       	=> 'V tomto nastavení môžete zmeniť určité voľby správy vašich noviniek.',
   'PORTAL_NEWS'                              	=> 'Zobrazenie noviniek',
   'PORTAL_NEWS_EXPLAIN'                        => 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_SHOW_ALL_NEWS'                     	=> 'Zobrazím všetky články v tomto fóre',
   'PORTAL_SHOW_ALL_NEWS_EXPLAIN'             	=> 'Zahrniem Dôležité oznámenia, a Všeobecné oznámenia?',
   'PORTAL_NUMBER_OF_NEWS'                    	=> 'Počet článkov noviniek zobrazených v Portále',
   'PORTAL_NUMBER_OF_NEWS_EXPLAIN'            	=> '0 znamená nekonečne',
   'PORTAL_NEWS_LENGTH'                       	=> 'Maximálna dĺžka zadania článku',
   'PORTAL_NEWS_LENGTH_EXPLAIN'               	=> 'Zadajte hodnotu, pre počet znakov ktoré budem môcť zobraziť. 0 znamená nekonečne.',
   'PORTAL_NEWS_FORUM'                        	=> 'Novinky z ID Fór',
   'PORTAL_NEWS_FORUM_EXPLAIN'             		=> 'Z fór pretiahnutie článkov (MUSÍTE špecifikovať ID fór), separujte čiarkou ak to bude z viacerých fór, napr. 1,2,5. toto pole nenechajte prázdne, 0 platí tiež.',

	// recent topics
   'ACP_PORTAL_RECENT_INFO'                  	=> 'Portál Recentné témy',	
   'ACP_PORTAL_RECENT_SETTINGS'                 => 'Nastavenia recentných tém',	
   'ACP_PORTAL_RECENT_SETTINGS_EXPLAIN'       	=> 'V tomto zadaní môžete zmeniť správu určitých možnosti vašich nedávnych tém.',
   'PORTAL_RECENT'                  			=> 'Zobrazenie recentných tém',
   'PORTAL_RECENT_EXPLAIN'                  	=> 'Zobrazím tento blok Áno/Nie? <br /> Táto trojica tabuliek vrchný a stredný blok zahrňuje Oznámenia, Populárne témy a Zvolené. Témy. Zadaním "Nie" vyradím z prevádzky všetky bloky.',
   'PORTAL_MAX_TOPIC'                          	=> 'Limit recentných, oznámenia horúce témy',
   'PORTAL_MAX_TOPIC_EXPLAIN'                   => '0 znamená nekonečne',
   'PORTAL_RECENT_TITLE_LIMIT'                 	=> 'Limit pre recentný typ hlavičky tém',
   'PORTAL_RECENT_TITLE_LIMIT_EXPLAIN'          => '0 znamená nekonečne',
   
	// paypal
   'ACP_PORTAL_PAYPAL_INFO'                  	=> 'Portál Paypal',	
   'ACP_PORTAL_PAYPAL_SETTINGS'                 => 'Nastavenie Paypal',
   'ACP_PORTAL_PAYPAL_SETTINGS_EXPLAIN'       	=> 'V tomto zadaní môžete zmeniť určité špecifické volby Paypal.<br /><span style="color:red;">Aby sa zobrazila Platba treba si v Nastavení Blokov vytvoriť príslušný blok. (použi súbor html: Center donation multi currency, velké z textom, alebo malé okno: Center donation, hodi sa ak sa blok zadeli na niektorú stranu stránky) </span>',
   'PORTAL_PAY_C_BLOCK'                        	=> 'Zobrazenie funkcie paypal',
   'PORTAL_PAY_C_BLOCK_EXPLAIN'                 => 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_PAY_S_BLOCK'                        	=> 'Zobrazím malý paypal',
   'PORTAL_PAY_S_BLOCK_EXPLAIN'                 => 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_PAY_ACC'                            	=> 'Email pre účet v Paypal',
   'PORTAL_PAY_ACC_EXPLAIN'                     => 'Zadajte vašu emajlovú adresu v Paypal, ktorú pužívate pri vašom prihlásení do účtu npr. xxx@xxx.com',

	// last member
   'ACP_PORTAL_MEMBERS_INFO'               		=> 'Portál Najnovší členovia',
   'ACP_PORTAL_MEMBERS_SETTINGS'                => 'Najnovší členovia nastavenia',
   'ACP_PORTAL_MEMBERS_SETTINGS_EXPLAIN'       	=> 'V tomto zadaní môžete zmeniť počet vašich najnovších členov o ktorých, zobrazím informácie a určité špecifické nastavenia.',
   'PORTAL_LATEST_MEMBERS'                  	=> 'Zobrazenie najnovších členov',
   'PORTAL_LATEST_MEMBERS_EXPLAIN'              => 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_MAX_LAST_MEMBER'                    	=> 'Limit zobrazenia z najnovších členov',
   'PORTAL_MAX_LAST_MEMBER_EXPLAIN'             => '0 znamená nekonečne',
   
	// bots
   'ACP_PORTAL_BOTS_INFO'                    	=> 'Portál Navštevujúci Boti',
   'ACP_PORTAL_BOTS_SETTINGS'                   => 'Nastavenia Hosťujúcich Botov',
   'ACP_PORTAL_BOTS_SETTINGS_EXPLAIN'       	=> 'V tomto nastavení môžete zmeniť počet hosťujúcich botov.',
   'PORTAL_LOAD_LAST_VISITED_BOTS'             	=> 'Zobrazenie navštevujúcich Botov',
   'PORTAL_LOAD_LAST_VISITED_BOTS_EXPLAIN'      => 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_LAST_VISITED_BOTS_NUMBER'           	=> 'Koľkým botom sa zobrazím',
   'PORTAL_LAST_VISITED_BOTS_NUMBER_EXPLAIN'    => '0 znamená nekonečne',
   
	// polls   
   'ACP_PORTAL_POLLS_INFO'                    	=> 'Portál Hlasovanie',	
   'ACP_PORTAL_POLLS_SETTINGS'                  => 'Nastavenie hlasovania',
   'ACP_PORTAL_POLLS_SETTINGS_EXPLAIN'       	=> 'V tomto nastavení môžete zmeniť určité možnosti pre zobrazenie hlasovania.</br> <span style="color:red;">Pred zmenov týchto zadaní si v Nasatavení Blokov, vytvorte príslušny blok súbor html</span>',
   'PORTAL_POLL_TOPIC'                         	=> 'Zobrazím prieskum',
   'PORTAL_POLL_TOPIC_EXPLAIN'                  => 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_POLL_TOPIC_ID'                      	=> 'Zobrazím hlasovanie z ID témy',
   'PORTAL_POLL_TOPIC_ID_EXPLAIN'             	=> 'ID témy ide o (značenie témy) ktorá platí pre aktuálne hlasovanie a malo by sa zobraziť ako info, nastavte aj keď 0 ( nenechávajte toto pole prázdne) inak sa hlasovanie neuskutoční .',
   'PORTAL_POLL_FORUM_ID'                      	=> 'Zobrazím hlasovanie z ID fóra',
   'PORTAL_POLL_FORUM_ID_EXPLAIN'             	=> 'ID fóra ide o (označenie fóra) ktoré platí pre aktuálne hlasovanie a malo by sa zobraziť ako info, nastavte aj keď 0 ( nenechávajte toto pole prázdne) inak sa hlasovanie neuskutoční .',
   'PORTAL_POLL_POST_ID'                      	=> 'Zobrazím hlasovanie z ID prispevkov',
   'PORTAL_POLL_POST_ID_EXPLAIN'             	=> 'ID príspevku ide o (označenie príspevku) ktoré platí pre aktuálne hlasovanie a malo by sa zobraziť ako info, nastavte aj keď 0 ( nenechávajte toto pole prázdne) inak sa hlasovanie neuskutoční .',
                                  
	// most poster
   'ACP_PORTAL_MOST_POSTER_INFO'                => 'Portál Najväčší Odosielateľ',
   'ACP_PORTAL_MOST_POSTER_SETTINGS'            => 'Nastavenie najvyšieho počtu odosielateľov',
   'ACP_PORTAL_MOST_POSTER_SETTINGS_EXPLAIN'    => 'V tomto nastavení môžete zmeniť počet odosielateľov.',
   'PORTAL_TOP_POSTERS'                  		=> 'Zobrazenie vcelku/top odosielateľov',
   'PORTAL_TOP_POSTERS_EXPLAIN'                 => 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_MAX_MOST_POSTER'                    	=> 'Koľko plagátov zobrazím',
   'PORTAL_MAX_MOST_POSTER_EXPLAIN'             => '0 znamená nekonečne',

	// left and right column width 
   'ACP_PORTAL_COLLUMN_WIDTH_INFO'              => 'Šírka Kolón v Portále',
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS'          => 'Nastavenia ľavéj a pravéj šírky kolón',	
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS_EXPLAIN'  => 'V tomto zadaní môžete zmeniť ľavú a pravú šírku kolón na stránke portálu.',
   'PORTAL_LEFT_COLLUMN_WIDTH'                 	=> 'Hodnota šírky ľavéj kolóny na portále',
   'PORTAL_LEFT_COLLUMN_WIDTH_EXPLAIN'          => 'Upravenie šírky ľavého stĺpca v pixeloch, doporučená hodnota je 180',
   'PORTAL_RIGHT_COLLUMN_WIDTH'                 => 'Hodnota šírky pravéj kolóny na portále',
   'PORTAL_RIGHT_COLLUMN_WIDTH_EXPLAIN'         => 'Upravenie šírky pravého stĺpca v pixeloch, doporučená hodnota je 180',
   
	// attachments    
   'ACP_PORTAL_ATTACHMENTS_NUMBER_INFO'         		=> 'Portál Prílohy',
   'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS'     		=> 'Nastavenie príloh',
   'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS_EXPLAIN'     => 'V tomto zadaní môžete zmeniť určité špecifické volby príloh.',
   'PORTAL_ATTACHMENTS'                  				=> 'Zobrazenie príloh',
   'PORTAL_ATTACHMENTS_EXPLAIN'                  		=> 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_ATTACHMENTS_NUMBER'                 			=> 'Limit zobrazovaných príloh',
   'PORTAL_ATTACHMENTS_NUMBER_EXPLAIN'                 	=> '0 znamená nekonečne',

	// general 
   'ACP_PORTAL_SWITCHES_INFO'                  	=> 'Portál Blok prepínače',
   'ACP_PORTAL_SWITCHES_SETTINGS'               => 'Všeobecné nastavenia blok pripojených',
   'ACP_PORTAL_SWITCHES_SETTINGS_EXPLAIN'       => 'V tomto nastavení môžete zmeniť správu prepínačov a ich určité špecifické možnosti.',
   'PORTAL_GOOGLE_S_BLOCK'                  	=> 'Pridanie v malom Google',
   'PORTAL_GOOGLE_S_BLOCK_EXPLAIN'              => 'Zobrazím tento blok Áno/Nie? <br /> This is a Pre-defined Google Partner block 120x240_as, filename is <strong>google_adds.html</strong>.',
   'PORTAL_GOOGLE_C_BLOCK'                  	=> 'Centrum Google',
   'PORTAL_GOOGLE_C_BLOCK_EXPLAIN'              => 'Zobrazím tento blok Áno/Nie? <br /> Toto je Preddefinovaný Partner blok Google 234x60_as, názov súboru je <strong>google_adds_portal.html</strong>.',
   'PORTAL_FORUM_BLOCK'                  		=> 'Centrum Fóra',
   'PORTAL_FORUM_BLOCK_EXPLAIN'                 => 'Zobrazím tento blok Áno/Nie? <br /> Portál je veľké fórum a centrum bloku, v podstate je rovnaký ako index stránky phpBB.',
   'PORTAL_ADVANCED_STAT'                  		=> 'Rozšírená štatistika',
   'PORTAL_ADVANCED_STAT_EXPLAIN'               => 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_LEADERS'                  			=> 'Vedúci / Tým',
   'PORTAL_LEADERS_EXPLAIN'                  	=> 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_CLOCK'                  				=> 'Hodiny',
   'PORTAL_CLOCK_EXPLAIN'                  		=> 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_LINK_US'                  			=> 'Link na Portál',
   'PORTAL_LINK_US_EXPLAIN'                  	=> 'Zobrazím tento blok Áno/Nie? <br /> Html kód, ktorý umožňuje prenajať linku vašej stránky pomocou prekopírovania a vloženia, html kód zahŕňa banner veľkosti 88x31, ktorý sa bude zobrazovať na ich stránke.',
   'PORTAL_LINKS'                  				=> 'Linky',
   'PORTAL_LINKS_EXPLAIN'                  		=> 'Zobrazím tento blok Áno/Nie? <br /> Ak chcete pridať nový, alebo zmeniť linky pre tento blok manuálnov úpravov názvu súboru musí byť aj v <strong>link.html</strong>.',
   'PORTAL_WELCOME'                  			=> 'Zdravím všetkých návštevníkov tejto stránky',
   'PORTAL_WELCOME_EXPLAIN'                  	=> 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_RANKS'                  			    => 'Centrum Hodnotenia',
   'PORTAL_RANKS_EXPLAIN'                  		=> 'Zobrazím tento blok Áno/Nie? <br /> Tieto tri záložky dole uprostred bloku obsahujú aplikácie Word graf, Hodnosti, Prílohy a zoznam Fóra. Zadaním "Nie" sa vypne celý blok.',
   'PORTAL_MAX_ONLINE_FRIENDS'                 	=> 'Limit zobrazovania priateľov ktorý sú online',
   'PORTAL_MAX_ONLINE_FRIENDS_EXPLAIN'          => 'Zadanie počtu priateľov ktorý sú online pre zobrazenie v bloku portálu (predvolba je nastavená pre 8).',
   'PORTAL_MAINMENU_NORMAL'                  	=> 'Pozície menu',
   'PORTAL_MAINMENU_NORMAL_EXPLAIN'      		=> 'Zobrazím tento blok Áno/Nie? <br /> Toto zadanie spracuje informácie Správy Ponuky a túto Ponuku ukáže v tomto bloku portálu.',
   'PORTAL_MAINMENU_DHTML'                  	=> 'Pozície menu DHTML',
   'PORTAL_MAINMENU_DHTML_EXPLAIN'              => 'Zobrazím tento blok Áno/Nie? <br /> Ak chcete pridať, alebo manuálne zmeniť možnosti tohto bloku musíte upraviť súbor main_menu_dhtml.html.',

    // wordgraph
   'ACP_PORTAL_WORDGRAPH_INFO'					=> 'Portál grafika textu',
   'ACP_PORTAL_WORDGRAPH_SETTINGS'              => 'Nastavenia grafiky textu',	
   'ACP_PORTAL_WORDGRAPH_SETTINGS_EXPLAIN'      => 'V tomto zadaní môžete zmeniť určité špecifické volby v štýlu textu.',
   'PORTAL_WORDGRAPH'                  			=> 'Zobraziť wordgraph',
   'PORTAL_WORDGRAPH_EXPLAIN'                  	=> 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_WORD_GRAPH_MAX_WORDS'                => 'Koľko slov zobrazím',
   'PORTAL_WORD_GRAPH_MAX_WORDS_EXPLAIN'        => '0 znamená nekonečne',
   'PORTAL_WORD_GRAPH_WORD_COUNTS'              => 'Zobrazím obsiahnutý obsah zadanej hodnoty ',
   'PORTAL_WORD_GRAPH_WORD_COUNTS_EXPLAIN'      => 'Zobrazím počet hodnoty slov napr. (25) Áno/Nie? </br>Toto sa zobrazí ako vyhodnotenie, časť slova čo je vo vašej databáze. Hodnota bude zobrazená po slove ak sa bude zhodovať',
   'PORTAL_WORD_GRAPH_RATIO'              		=> 'Použiť vzhľad proporcie veľkosť slova:',
   'PORTAL_WORD_GRAPH_RATIO_EXPLAIN'            => 'Zmena proporcie veľkosti ide o (velké a malé) slová (prednastavená veľkosť je=4). Toto nastavenie je relatívna hodnota pre zobrazenie slov. Ak je viac slov, tak je viac aspektov, pre vytvorenie polôh väčších slov.',

/* not in use at moment
   'PORTAL_WORD_GRAPH_MAX_SIZE'              	=> 'Maximálna veľkosť fontu v pixeloch',
   'PORTAL_WORD_GRAPH_MAX_SIZE_EXPLAIN'         => 'Nastavenie maximálnej hodnoty veľkosti písma pre slová vo wordgraph.',
   'PORTAL_WORD_GRAPH_MIN_SIZE'              	=> 'Minimálna veľkosť fontu v pixeloch',
   'PORTAL_WORD_GRAPH_MIN_SIZE_EXPLAIN'         => 'Nastavenie minimálnej hodnoty veľkosti písma pre slová vo wordgraph.',
*/
	
	// random 
   'ACP_PORTAL_RANDOM_INFO'                  	=> 'Náhodné zobrazenie v Portále',
   'ACP_PORTAL_RANDOM_SETTINGS'               	=> 'Náhodné banery/nastavenie blokov',
   'ACP_PORTAL_RANDOM_SETTINGS_EXPLAIN'       	=> 'V tomto nastavení môžete zmeniť náhodné zobrazovanie informácií v blokoch.',
   'PORTAL_RAN_HO_BLOCK'                  		=> 'Náhodné vodorovné banery v strede portálu (max.veľkosť 386x60 pix)',
   'PORTAL_RAN_HO_BLOCK_EXPLAIN'                => 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_RAN_VE_BLOCK'                  		=> 'Náhodné banners zvislé banery (max.veľkosť 130x600 pix)',
   'PORTAL_RAN_VE_BLOCK_EXPLAIN'                => 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_RAN_LI_BLOCK'                  		=> 'Náhodné linky banerov (max.veľkosť 88x31 pix).',
   'PORTAL_RAN_LI_BLOCK_EXPLAIN'                => 'Zobrazím tento blok Áno/Nie? <br /> Toto zadanie spracuje informácie Správu Partnerov a túto Správu Partnerov ukáže v tomto bloku portálu.',
   'PORTAL_RANDOM_MEMBER'                  		=> 'Ľubovoľný člen',
   'PORTAL_RANDOM_MEMBER_EXPLAIN'               => 'Zobrazím tento blok Áno/Nie?',

	// welcome message
   'ACP_PORTAL_WELCOME_INFO'                  	=> 'Portál Zdraví všetkých návštevníkov tejto stránky',
   'ACP_PORTAL_WELCOME_SETTINGS'               	=> 'Nastavenie Uvítania: Zdravím všetkých návštevníkov tejto stránky',
   'ACP_PORTAL_WELCOME_TXT_SETTINGS'           	=> 'Nastavenie textu: Zdravím všetkých návštevníkov tejto stránky',
   'ACP_PORTAL_WELCOME_SETTINGS_EXPLAIN'       	=> 'V týchto nastaveniach môžete zmeniť uvítacie zadania.',
   'PORTAL_WELCOME_INTRO'                  	    => 'Zdravím všetkých návštevníkov tejto stránky, oznámenia pre hosťov',
   'PORTAL_WELCOME_INTRO_EXPLAIN'               => 'Nastavenie uvítacieho oznámenia pre hosťov. Max.2000 znakov (povolené je zadanie aj v html)! Celý text bude automaticky orezaný na zadanú dĺžku.',
   'PORTAL_WELCOME_BACK'                        => 'Zdravím všetkých návštevníkov tejto stránky, oznámenie pre registrovaných uživateľov',
   'PORTAL_WELCOME_BACK_EXPLAIN'                => 'Nastavenie uvítacieho oznámenia pre registrovaných uživateľov. Max.2000 znakov (povolené je zadanie aj v html)! Celý text bude automaticky orezaný na zadanú dĺžku.',

	// chatbox
   'ACP_PORTAL_SHOUTBOX_INFO'					=> 'Chat v Portále',
   'ACP_PORTAL_SHOUTBOX_SETTINGS'				=> 'Nastavenia Chatu',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_HC'			=> 'Chat, nastavenia výška a farba v bloku portálu',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_HCB'			=> 'Chat, nastavenia výška a farba veľkého bloku',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_EXPLAIN'		=> 'V tomto zadaní môžete zmeniť určité špecifické nastavenia. Text bude automaticky.orezaný po 600 znakoch.',
   'PORTAL_SHOUTBOX'                  			=> 'Zobrazenie Chatu',
   'PORTAL_SHOUTBOX_EXPLAIN'                  	=> 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_SHOUTBOX_NUMBER'                  	=> 'Počet, zobrazovania komunikácii',
   'PORTAL_SHOUTBOX_NUMBER_EXPLAIN'             => '0 znamená nekonečne, akákoľvek iná hodnota zobrazí, zadaný počet najnovších komunikácii na stránke portálu',
   'PORTAL_SHOUTBOX_SESSION_TIME'               => 'Povolený čas relácie',
   'PORTAL_SHOUTBOX_SESSION_TIME_EXPLAIN'       => 'Zadajte hodnotu medzi 0 a 999 sekúnd po ktorých relácia vyprší, predvolená hodnota je 300 sekúnd',
   'PORTAL_SHOUTBOX_DEFAULT_DELAY'              => 'Čas medzi znovu načítaním',
   'PORTAL_SHOUTBOX_DEFAULT_DELAY_EXPLAIN'      => 'Zadajte hodnotu medzi 0 a 999 sekúnd pre automatické znovu načítanie chatu, predvolená hodnota je 15 sekúnd',

	// weather
   'ACP_PORTAL_WEATHER_INFO'				    => 'Počasie v Portále',
   'ACP_PORTAL_WEATHER_SETTINGS'			    => 'Nastavenia počasia',
   'ACP_PORTAL_WEATHER_SETTINGS_GER'			=> 'Nastavenie počasia z pocasie.sk Slovensko',
   'ACP_PORTAL_WEATHER_SETTINGS_ALT'			=> 'Nastavenie počasia z alternatívnej stránky',
   'ACP_PORTAL_WEATHER_SETTINGS_EXPLAIN'	    => 'V tomto zadaní môžete zmeniť vaše informácie o počasí. Štandardne je nastavené počasie zo stránky pocasie.sk Slovensko. Lenže túto predvolbu môžete zmenit pre ine umiestenie počasia, ak zmenenite url v styles/prosilver/template/portal/block/weather.html. Ale tu si môžete zadať až tri odlišné linky miestneho počasia, ak vyplníte poľia ktoré sú dole.',
   'PORTAL_WEATHER'                  		    => 'Zobrazenie počasia',
   'PORTAL_WEATHER_EXPLAIN'                     => 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_WEATHER_GER'                  		=> 'Zobrazím predpoveď počasia',
   'PORTAL_WEATHER_GER_EXPLAIN'                 => 'Zobrazím tento blok Áno/Nie? </br>Toto zadanie stráca vyznam v tomto nastavení, pokial sa ponechá prednastavený blok počasia, čítaj nižšie ',
   'PORTAL_WEATHER_ZIPCODE'                  	=> 'Vaše poštové smerovacie číslo',
   'PORTAL_WEATHER_ZIPCODE_EXPLAIN'             => 'Toto pole je pre zadania vášho poštového smerovacieho čísla, ide o počasie, prednastavená je B.Bystrica, ale je to len vzor, toto pole ako take, stráca vyznam v tomto nastavení nakoľko v skripte inštalácie je zadaná predpoveď na celé slovensko z http://www.in-pocasie.sk/pocasie-pre-web/ kde ak chcete si môžete vygenerovať skript pre vlastný region',
   'PORTAL_WEATHER_ALTERNATE_URL'              	=> 'Alternatívna URL počasia',
   'PORTAL_WEATHER_ALTERNATE_URL_EXPLAIN'       => 'Sem zadajte kompletnú URL počasia ide o link ktorým sa pripojite k vášmu alternatívnemu poskytovateľovy počasia. </br>Ponechajte tento box prázdny ak nechcete aby bolo počasie zobrazené. Upozornenie: Zadanie v boxe je z inštalačneho skriptu a je zobrazene vľavo hore na portály',
   'PORTAL_WEATHER_ALTERNATE_URL1'              => 'Alternatívna URL počasia',
   'PORTAL_WEATHER_ALTERNATE_URL1_EXPLAIN'      => 'Sem zadajte kompletnú URL počasia ide o link ktorým sa pripojite k vášmu alternatívnemu poskytovateľovy počasia alebo vygenerovaný skrip pre region z http://www.in-pocasie.sk/pocasie-pre-web </br>Ponechajte tento box prázdny ak nechcete aby bolo počasie zobrazené. ',
   'PORTAL_WEATHER_ALTERNATE_URL2'              => 'Alternatívna URL počasia',
   'PORTAL_WEATHER_ALTERNATE_URL2_EXPLAIN'      => 'Sem zadajte kompletnú URL počasia ide o link ktorým sa pripojite k vášmu alternatívnemu poskytovateľovy počasia alebo vygenerovaný skrip pre region z http://www.in-pocasie.sk/pocasie-pre-web </br>Ponechajte tento box prázdny ak nechcete aby bolo počasie zobrazené. ',
   
	// syndication
   'ACP_PORTAL_SYNDICATE_INFO'				    => 'Portal RSS / RDF informácie o webových stránkach (SYNDICATE)',
   'ACP_PORTAL_SYNDICATE_INFO_SETTINGS'			=> 'Zmena nastavení informácií o webových stránkach (SYNDICATE)',
   'ACP_PORTAL_SYNDICATE_INFO_SETTINGS_EXPLAIN'	=> 'V tomto zadaní môžete zmeniť niektoré konkrétne volby svojho publikovania informácií.',
   'PORTAL_SYNDICATE'                  		    => 'Zobrazenie informácií o webových stránkach',
   'PORTAL_SYNDICATE_EXPLAIN'                   => 'Zobrazím tento blok Áno/Nie?',

	// Portal Index
   'ACP_PORTAL_INDEX_INFO'				        => 'Obsah v Portále',
   'ACP_PORTAL_INDEX_INFO_LAYOUT'	    		=> 'Zobrazím bloky v indexe a v zobrazení fóra',
   'ACP_PORTAL_INDEX_INFO_LAYOUT_EXPLAIN'		=> 'Zobrazím Áno/Nie?',
   'ACP_PORTAL_INDEX_INFO_SETTINGS'			    => 'Zmena obsahu v zobrazení fóra nastavenie bloku',
   'ACP_PORTAL_INDEX_INFO_COLUMN_SETTINGS'	    => 'Zmena obsahu v zobrazení fóra nastavenie stĺpca',
   'ACP_PORTAL_INDEX_INFO_SETTINGS_EXPLAIN'	    => 'Tu môžete zmeniť obsah polohy zobrazenia fóra, ide o kombináciu obsahu a obsahu zobrazenia fóra. Zmenené nastavenie bude mať efekt na indexe zobrazeného rozvrhnutia fóra.',
   'PORTAL_INDEX_LEFT'                  		=> 'Zobrazenie kolóny bloku na ľavéj strane stránky',
   'PORTAL_INDEX_LEFT_EXPLAIN'                  => 'Zobrazím kolónu v ľavo na stránke v portále a na obsahu zobrazeného fóra Áno/Nie?',
   'PORTAL_INDEX_LEFT_COLLUMN_WIDTH'            => 'Hodnota šírky ľavéj kolóny',
   'PORTAL_INDEX_LEFT_COLLUMN_WIDTH_EXPLAIN'    => 'Zadanie šírky ľavéj kolóny v pixeloch, odporúčaná hodnota 180',
   'PORTAL_INDEX_RIGHT'                  		=> 'Zobrazenie kolóny bloku na pravéj strane stránky',
   'PORTAL_INDEX_RIGHT_EXPLAIN'                 => 'Zobrazím kolónu na pravéj strane v portály a na obsahu zobrazeného fóra Áno/Nie?',
   'PORTAL_INDEX_RIGHT_COLLUMN_WIDTH'           => 'Hodnota šírky ptavéj kolóny',
   'PORTAL_INDEX_RIGHT_COLLUMN_WIDTH_EXPLAIN'   => 'Zadanie šírky pravéj kolóny v pixeloch, odporúčaná hodnota 180',

	// change style
   'ACP_PORTAL_BOARD_STYLE_INFO'				=> 'Zmena štýlu panela',
   'ACP_PORTAL_BOARD_STYLE_SETTINGS'			=> 'Nastavenie zmeny štýlu panela',
   'ACP_PORTAL_BOARD_STYLE_SETTINGS_EXPLAIN'	=> 'V tomto zadaní môžete zmeniť svoj štýl panela informácií cez zadané volby.',

	// media player
   'ACP_PORTAL_MEDIA_INFO'            			=> 'Prehrávač médií',
   'ACP_PORTAL_MEDIA_INFO_EXPLAIN'    			=> 'Nastavenie informácií o prehrávači médií cez zadané volby.',
   'PORTAL_MEDIA_PLAYER'               			=> 'Zobrazím prehrávač médií?',
   'PORTAL_MEDIA_PLAYER_EXPLAIN'       			=> 'Zobrazím tento blok Áno/Nie?',

	// picture gallery
   'ACP_PORTAL_GALLERY_INFO'            		=> 'Obrázky galérie',
   'ACP_PORTAL_GALLERY_INFO_EXPLAIN'   			=> 'Zmena obrázkov galérie cez zadané volby.',
   'PORTAL_PICTURE_GALLERY'               		=> 'Zobrazím obrázky galérie?',
   'PORTAL_PICTURE_GALLERY_EXPLAIN'    			=> 'Zobrazím tento blok Áno/Nie?',

	// scroll message
   'ACP_PORTAL_SCROLL_MESSAGE_INFO'            			=> 'Rolovanie správy',
   'ACP_PORTAL_SCROLL_MESSAGE_INFO_EXPLAIN'   			=> 'Tag marquee nie je štandard HTML tento prvok spracuje text v zobrazení a to tak že text sa roluje sprava do ľava cez obrazovkou. Prednastavená šírka MARQUEE prvku sa rovná forme základného prvku. <br /><span style="color:red;">Aby sa zobrazilo rolovanie textu treba si v Nastavení Blokov vytvoriť príslušný blok. (použi súbor html: Scroll message)</span>',
   'PORTAL_SCROLL_MESSAGE_DISPLAY'               		=> 'Zobrazím pohybujúci sa text správy?',
   'PORTAL_SCROLL_MESSAGE_DISPLAY_EXPLAIN'    			=> 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE'               		=> 'Zobrazím efekt rolovania/marquee?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_EXPLAIN'    			=> 'Zobrazím Áno/Nie?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTCOLOR'            => 'Farba Textu',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTCOLOR_EXPLAIN'	=> 'Zadanie farby v HEX formáte ako napríklad zadanie: #ffffff je biela to znamená že text by bol v bielej farbe, alebo môžete použiť aj názov farby ako white, violet, yellow, blue stď.  Predvolená farba textu je červená:  #ff0000 ',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTSIZE'         	=> 'Veľkosť Fontu',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTSIZE_EXPLAIN' 	=> 'Veľkosť fontu textu v pixeloch. Prednastavený je 10px.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_DIRECTION'         	=> 'Smer Rolovania',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_DIRECTION_EXPLAIN' 	=> 'Smer rolovania textu. Tento atribút určuje smer rolovania. Použite len anglické zadania <strong>left</strong>, - do ľava, <strong>right</strong>, - do prava, <strong>up</strong> - hore, a <strong>down</strong> - dole.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SPEED'         		=> 'Prechod Rolovania',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SPEED_EXPLAIN' 		=> 'Toto zadanie určuje, prechod pohyb (v pixeloch) v postupe zobrazenia, ktorý vyvoláva dojem animácie.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_ALIGN'         		=> 'Nastavenie Rolovania',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_ALIGN_EXPLAIN' 		=> 'Toto označenie môže mať jednu z hodnôt, Použite len anglické zadania: <strong>top</strong> - hore, <strong>middle</strong> - stred a <strong>bottom</strong> - dole. Tým sa ovláda marquee teda rolovanie zobrazenia textu presne rovnakým spôsobom ako v img tagu atribút align.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BEHAVIOR'         	=> 'Správanie Rolovania',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BEHAVIOR_EXPLAIN' 	=> 'Táto zadanie určuje správanie sa zobrazovania textu. Existujú tri možné hodnoty. Rolovanie textu sa spustí hneď zo zavedeném stránky. <br /><br />Možnosti: <br /><strong>scroll</strong> text roluje naprieč displeja a objaví sa opäť ked na jednom konci zmizne tak na druhom konci sa znovu spustí. Toto je štandardné chovanie. <br /><strong>slide</strong> je to podobné rolovanie , keď posúvaý text dosiahne koniec poľa, zmizne a znova sa spustí na konci poľa. Ale ak zobrazenie nie je v slučke tak text zostane umiestnený na druhom konci poľa. <br /><strong>alternate</strong> text "roluje" z jednej strany na druhú.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BGCOLOR'         		=> 'Rolovanie Farba Pozadia',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BGCOLOR_EXPLAIN' 		=> 'Toto zadanie určuje farbu pozadia zobrazenia v boxe.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HEIGHT'         		=> 'Rolovanie Výška',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HEIGHT_EXPLAIN' 		=> 'Toto zadanie určuje výšku zobrazenia v boxe.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_WIDTH'         		=> 'Rolovania Šírka',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_WIDTH_EXPLAIN' 		=> 'Toto zadanie určuje šírku zobrazenia v boxe.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HSPACE'         		=> 'Rolovanie vodorovný priestor ',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HSPACE_EXPLAIN' 		=> 'Toto zadanie určuje vodorovný priestor okolo zobrazenia v boxe.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_VSPACE'         		=> 'Rolovanie zvislý priestor',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_VSPACE_EXPLAIN' 		=> 'Toto zadanie určuje zvislý priestor okolo zobrazenia v boxe.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_LOOP'         		=> 'Slučka Rolovania',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_LOOP_EXPLAIN' 		=> 'Toto zadanie atribútu určuje počet zobrazení cyklov. Hodnoty -1 a infinite znamená že slučka bude pokračovať donekonečna.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SCROLLDELAY'         	=> 'Omeškanie Rolovania',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SCROLLDELAY_EXPLAIN' 	=> 'Toto zadanie určuje oneskorenie (v milisekundách) medzi postupom zobrazenie, ktoré vyvoláva dojem, animácie.',
   'PORTAL_SCROLL_MESSAGE_INTRO' 						=> 'Text správy',
   'PORTAL_SCROLL_MESSAGE_INTRO_EXPLAIN' 				=> 'Sen zadajte správu.  Môže sa zadať až 1000 písmen jednoduchého textu, môže sa použiť aj html , ako aj cookies! Celý text po prekročenom limite bude automaticky orezaný.',
   'ACP_PORTAL_SCROLL_MESSAGE_TXT_SETTINGS'         	=> 'Rolovací Text',

	// meta tags
   'ACP_PORTAL_METATAGS_INFO'            			=> 'META Tagy',
   'ACP_PORTAL_METATAGS_INFO_EXPLAIN'   			=> 'Nastavenie META Tagov. Tieto značky Vám umožnia vytvoriť popis vašej webovéj stránky pre vyhľadávače.<br/ >Tým sa umožní internetovým vyhľadávačom ľahšie a lepšie registrovať vaše stránky.<br/ >Okrem toho tieto značky umožnia aj iné, ako je automatické presmerovanie na inú adresu URL.',
   'PORTAL_META_REDIRECT_URL_TIME'            		=> 'Presmerovanie Čas v (sec)',
   'PORTAL_META_REDIRECT_URL_TIME_EXPLAIN'          => 'Určuje zdržanie v sekundách pre prehliadač pokial automaticky presmeruje dokumenty zadanej URL. Číslo pred URL je zdržanie v sekundách, v ktorých sa prehliadač "pozastaví" pred výkonom presmerovania. Nechajte pole prázdne <strong>Nezadajte nič</strong> ak chcete aby sa vykonalo automatické presmerovanie!',
   'PORTAL_META_REDIRECT_URL_ADRESS'            	=> 'Adresa presmerovania (URL)',
   'PORTAL_META_REDIRECT_URL_ADRESS_EXPLAIN'        => 'Zadajte URL pre prehliadač ktorý automaticky presmeruje dokument až po vyššie zadaneho času presmerovania. Nechajte pole prázdne <strong>Nezadajte nič</strong> ak chcete aby sa vykonalo automatické presmerovanie!',
   'PORTAL_META_REFRESH'            				=> 'META Obnovovanie',
   'PORTAL_META_REFRESH_EXPLAIN'        			=> 'Určuje pozdržanie v sekundách prehliadača pokial automaticky načíta dokument. Číslo je pozdržanie v sekundách, pre prehliadač ktorý sa "pozastaví" pred výkonom aktualizácie. Nezadajte nič</strong> ak chcete aby sa vykonalo automatické obnovenie!',
   'PORTAL_META_PRAGMA'            					=> 'META Pragma',
   'PORTAL_META_PRAGMA_EXPLAIN'        				=> 'Zakáže zaznamenanie stránky do cache pamäti prehliadača.<br/ >- Ak chcete použíť túto značku, zadajte <i>no-cache</i>, ak nie. nechajte pole prázdne.',
   'PORTAL_META_KEYWORDS'            				=> 'META Kľúčové Slová',
   'PORTAL_META_KEYWORDS_EXPLAIN'        			=> 'Funkcia: Uveďte pre vyhľadávače kľúčové slová súvisiace s vašov stránkov.<br />- Maximálny povolený počet znakov je: 1000 alebo 100 kľúčových slov.<br/ >- V počte znakov, nezabudnite počítať aj zo <a href="accent.htm">zvýraznným písmom</a> niektorých kódov v HTML. Napríklad znaky "" a kódy &amp&agrave; v HTML sa rátajú ako osem znakov.<br />- Nemali by ste v zadaní opakovať niekoľkokrát rovnaké kľúčové slovo (vyhľadávačom sa to nepáči).<br />- Kľúčové slová sa oddelujú čiarkou, medzerou alebo čiarkou a medzerou, je to na vás ako sa rozhodnete.',
   'PORTAL_META_DESCRIPTION'            			=> 'META Popis',
   'PORTAL_META_DESCRIPTION_EXPLAIN'        		=> 'Popis vašej stránky.<br />- Maximálny povolený počet znakov je: 200<br />- Vyhnite sa akcentom, niektoré motory to neberú do úvahy.',
   'PORTAL_META_AUTHOR'            					=> 'META Autor',
   'PORTAL_META_AUTHOR_EXPLAIN'        				=> 'Umožňuje identifikáciu autora webu.<br/ >- Zadajte krstné meno malými pismenami, priezvisko, veľkými písmenami.<br/ >- Ak chcete, môžete zadať aj viac autorov ale oddelte ich čiarkou.',
   'PORTAL_META_IDENTIFIER_URL'            			=> 'META Identifikátor-url',
   'PORTAL_META_IDENTIFIER_URL_EXPLAIN'        		=> 'Umožňuje zadať URL.<br />- Sem zadajte adresu URL vašej domovskej stránky.<br />- Môžete zadať iba jednu URL.',
   'PORTAL_META_REPLY_TO'            				=> 'META Reakcia',
   'PORTAL_META_REPLY_TO_EXPLAIN'        			=> 'Umožňuje zadať e-mail majiteľa siete.<br/ > Najoptimálnešie ja ak sa dá len jedna adresa.',
   'PORTAL_META_REVISIT_AFTER'            			=> 'META Po Novej Návšteve',
   'PORTAL_META_REVISIT_AFTER_EXPLAIN'        		=> 'Ide o zadanie počtu dní pre pavúka (robot motora) pred tým ako bude znovu indexovať vaše stránky. - 15 dní "alebo" 30 dní "toto je najlepšia varianta.',
   'PORTAL_META_CATEGORY'            				=> 'META Kategória',
   'PORTAL_META_CATEGORY_EXPLAIN'        			=> 'Umožňuje určiť kategóriu vášho webu. Toto nastavenie používajú niektoré motory, ktoré zadávajú zaradenie do skupín.',
   'PORTAL_META_COPYRIGHT'            				=> 'META Autorské Právo',
   'PORTAL_META_COPYRIGHT_EXPLAIN'        			=> 'Ide o vyhlásenie ako je autorské právo.<br /> - Sem môžete zahrnúť autorské právo, ochranné známky, patenty, alebo iné informácie týkajúce sa duševného vlastníctva.',
   'PORTAL_META_GENERATOR'            				=> 'META Generátor',
   'PORTAL_META_GENERATOR_EXPLAIN'        			=> 'Poväčšine ide o názov a číslo verzie nastroja pre publikovanie vytvorenia stránky.<br/ >- Môže sa to použiť ako pomôcka ocenenia pre preniknutie na trh predajcom. <br / >- Rovnaké ako fráza méty vydavateľa.',
   'PORTAL_META_ROBOTS'            					=> 'META Roboti',
   'PORTAL_META_ROBOTS_EXPLAIN'        				=> 'Ovládacie prvky, roboti vyhľadávače základej stránky.<br/ >- <strong>all</strong> = Robot indexuje všetky stránky (štandardne)<br />- <strong>none</strong> = Robot neindexuje nič na vašej stránke<br />- <strong>index</strong> = vaše stránky sú indexované<br />- <strong>noindex</strong> = Vaša stránka nie je indexované, ale robot bude sledovať odkaz na vašu stránku<br />- <strong>follow</strong> = Robot zoberie na vedomie váš link na stránku pre indexovanie ale použije ho neskôr.<br />- <strong>nofollow</strong> = Robot neindexuje odkaz na vašu stránku .<br />- <strong>noodp</strong> = Voľba Out of Open Directory ide o výpis pre webmasterov (Microsoft Live Search). Ako h¾adanie MSN roboti nepoužívajú len stránky lokalizované ako DMOZ a MSN, ODP ignoruje obsah vašej stránky.',
   'PORTAL_META_DISTRIBUTION'            			=> 'META Distribúcia',
   'PORTAL_META_DISTRIBUTION_EXPLAIN'        		=> 'Existujú tri klasifikácie distribúcie vášho obsahu webu:<br/ >- <strong>Global</strong> (celý web)<br/ >- <strong>Local</strong> (vyhradené pre lokálne blok IP vášho webu)<br/ >- <strong>IU</strong> (Vnútorné použitie, nie je pre verejnú distribúciu).',
   'PORTAL_META_CREATION_YEAR'            			=> 'META Dátum-vytvorenia-yyyy',
   'PORTAL_META_CREATION_YEAR_EXPLAIN'        		=> 'Vytvorenie, rok vašej stránky napríklad. 2005.',
   'PORTAL_META_CREATION_MONTH'            			=> 'META Dátum-vytvorenia-mm',
   'PORTAL_META_CREATION_MONTH_EXPLAIN'        		=> 'Vytvorenie, mesiac vašej stránky napríklad. 03.',
   'PORTAL_META_CREATION_DAY'            			=> 'META Dátum-vytvorenia-dd',
   'PORTAL_META_CREATION_DAY_EXPLAIN'        		=> 'Vytvorenie, deň vašej stránky napríklad. 23.',
   'PORTAL_META_REVISION_YEAR'            			=> 'META Dátum-revision-yyyy',
   'PORTAL_META_REVISION_YEAR_EXPLAIN'        		=> 'Vytvorenie, rok vašej stránky napríklad. 2007.',
   'PORTAL_META_REVISION_MONTH'            			=> 'META Dátum-revízia-mm',
   'PORTAL_META_REVISION_MONTH_EXPLAIN'        		=> 'Vytvorenie, mesiac vašej stránky napríklad. 08.',
   'PORTAL_META_REVISION_DAY'            			=> 'META Dátum-revízia-dd',
   'PORTAL_META_REVISION_DAY_EXPLAIN'        		=> 'Vytvorenie, deň vašej stránky napríklad. 21.',

	// other
   'ACP_PORTAL_OTHER_INFO'                  	=> 'Ďalšie nastavenia Portálu',
   'ACP_PORTAL_OTHER_SETTINGS'               	=> 'Ďalšie nastavenia Portálu',
   'ACP_PORTAL_OTHER_SETTINGS_EXPLAIN'       	=> 'V tomto zadaní možete zmeniť niektoré špecifické nastavenia.',
   'PORTAL_MAX_LASTVISITS'                 		=> 'Limit zobrazovania posledných uživateľov ktorý navštívili Portál',
   'PORTAL_MAX_LASTVISITS_EXPLAIN'          	=> 'Zadanie počtu posledných uživateľov ktorý navštívili Portál pre zobrazenie v bloku portálu (predvolba je nastavená pre 5).',
   'PORTAL_ACT_RECENT_HOT_TOPICS'               => 'Zobrazím aktuálne posledné horúce témy(scroll)?',
   'PORTAL_ACT_RECENT_HOT_TOPICS_EXPLAIN'    	=> 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_ACT_RECENT_TOPICS'               	=> 'Zobrazím aktuálne/nedávne témy (rolovane)?',
   'PORTAL_ACT_RECENT_TOPICS_EXPLAIN'    		=> 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_ANNOUNCE_IMPORTANT'               	=> 'Zobrazím dôležité oznámenia?',
   'PORTAL_ANNOUNCE_IMPORTANT_EXPLAIN'    		=> 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_DONWLOADS'               			=> 'Zobrazím downloady?',
   'PORTAL_DONWLOADS_EXPLAIN'    				=> 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_FORUMLIST'               			=> 'Zobrazím Zoznam Fór?',
   'PORTAL_FORUMLIST_EXPLAIN'    				=> 'Zobrazím tento blok Áno/Nie? <br /> Zobrazí stránku bloku zhustene ako zoznam.',
   'PORTAL_PHPINFO'               				=> 'Zobrazím info o PHP?',
   'PORTAL_PHPINFO_EXPLAIN'    					=> 'Zobrazím tento blok Áno/Nie?',
   'PORTAL_QUOTES'               				=> 'Zobrazím Citácie?',
   'PORTAL_QUOTES_EXPLAIN'    					=> 'Zobrazím tento blok Áno/Nie?',

   'PORTAL_DRAG_DROP'               			=> 'Možnosť ťahaj a pusť v Portále',
   'PORTAL_DRAG_DROP_EXPLAIN'       			=> 'Aktivujem túto funkciu Áno/Nie? <br /> Globálne aktivujem alebo deaktivujem funkciu ťahaj a pusť, v portále obsah blokov.',

   'PORTAL_RAN_H_BLOCK'                     	=> '<b>Zmena Nastavenie Portálu</b>',
   'CONFIG_UPDATED'								=> 'Aktualizácia nastavenia prebehla úspešne.',
   'VIEWING_PORTAL'								=> 'Zobrazenie portálu',
   
   // corrected/added since RC2 below
   'PORTAL_PICTURE_RESIZE'						=> 'Automatické prestavenie obrázka (pixel)',
   'PORTAL_PICTURE_RESIZE_EXPLAIN'				=> 'Prestavenie obrázkov s príponov img v správach ktoré sú umiestnené ako novinky portálu.',
   
   // corrected/added since RC5 below
	'ACP_COUNTER_SETTINGS_EXPLAIN'	=> 'Nastavenie pre animované čislice počítadla sledovania IP. <br /><span style="color:red;">Aby sa zobrazilo počítadlo treba si v Nastavení Blokov vytvoriť príslušný blok. (použi súbor html: Digits counter)</span>.',
	'ACP_COUNTER_DIGITS_SETTINGS'	=> 'Nastavenie animovaného počítadla',
	'ACP_COUNTER_DISPLAY_SETTINGS'	=> 'Nastavenie zobrazenia počítadla',
	'ACP_COUNTER_IP_SETTINGS'		=> 'Nastavenie blokovania počítadla IP',

	'COUNTER_DIGITS_PATH'				=> 'Cesta k číslam',
	'COUNTER_DIGITS_PATH_EXPLAIN'		=> 'Cesta k číslam v roote phpBB. <samp>images/counter/digits</samp>',
	'COUNTER_DIGITS_ANI_PATH'			=> 'Cesta k animovaným číslam',
	'COUNTER_DIGITS_ANI_PATH_EXPLAIN'	=> 'Cesta k animovaným číslam v roote phpBB. <samp>images/counter/digits_ani</samp>',
	'COUNTER_DIGITS_NUMBER'				=> 'Počet číslic',
	'COUNTER_DIGITS_NUMBER_EXPLAIN'		=> 'Počet číslíc zobrazovaných v zaznamníku',
	'COUNTER_DIGITS_WIDTH'				=> 'Šírka číslic',
	'COUNTER_DIGITS_WIDTH_EXPLAIN'		=> 'Zadanie pre šírku číslic',
	'COUNTER_DIGITS_HEIGHT'				=> 'Výška číslic',
	'COUNTER_DIGITS_HEIGHT_EXPLAIN'		=> 'Zadanie pre výšku číslic',
	'COUNTER_DISPLAY_IMAGE'				=> 'Zobraziť',
	'COUNTER_DISPLAY_NONE'				=> 'Nezobraziť',
	'COUNTER_DISPLAY_STATS'				=> 'Zobrazenie štatistiky v záznamníku počítadla',
	'COUNTER_DISPLAY_STATS_EXPLAIN'		=> 'Povolím zobrazenie podrobnej štatistiky v záznamníku počítadla',
	'COUNTER_DISPLAY_TEXT'				=> 'Len text',
	'COUNTER_BLOCK_IP'					=> 'Povoliť blokovanie IP',
	'COUNTER_BLOCK_IP_EXPLAIN'			=> 'Umožním sledovanie/blokovaných IP adries. Táto voľba bude v počítadle fungovať správne: a to tak že záznam aktivit sa nezvýši žiadnym užívateľom obnovením prehliadača za čas blokovania, ktorý môžete nastavenia nižšie.',
	'COUNTER_BLOCK_TIME'				=> 'Čas blokovania IP',
	'COUNTER_BLOCK_TIME_EXPLAIN'		=> 'Počet sekúnd pre sledovanie/blokovania každej IP adresy v počítadle.',
	'COUNTER_IP_LOGFILE'				=> 'Súbor záznamenaných IP',
	'COUNTER_IP_LOGFILE_EXPLAIN'		=> 'Cesta k súboru zaznamenaných IP vo vašom roote phpBB, napríklad <samp>images/counter/ip.txt</samp>. Platí to, ak ste povolil voľbu blokovania IP.<br /><span style="color:red;">Pozor: tento súbor musi mať zadaný atribut CHMOD 777.</span>',

	'SELECT_COUNTER_DISPLAY_MODE'			=> 'Režim zobrazenia počítadla',
	'SELECT_COUNTER_DISPLAY_MODE_EXPLAIN'	=> 'Nastavenia režimu pre zobrazenie počítadla:  Zobraziť <strong>Zobrazí aj digitálne počítadlo</strong> alebo <strong>Zobraziť len text</strong> <br /><strong>Pozor</strong>: Musíte <strong>vždy</strong> vždy pred kliknutím/Odoslať nastaviť niektoré z nastavení, pred uložením zmien vykonaných v ďalších nastaveniach ktoré sú dole.',

    'PORTAL_SHOW_LAST_NEWS'               	=> 'Triedenie nových správ v portále',
    'PORTAL_SHOW_LAST_NEWS_EXPLAIN'       	=> 'Ano = Posledná správa a prvá odpoveď <br />Nie = Prvá téma.',

	  'PORTAL_SHOW_AJAX_USERINFO'               	=> 'Ajax, info o uživateľovy',
    'PORTAL_SHOW_AJAX_USERINFO_EXPLAIN'       	=> 'Ajax, zobrazím info o uživateľovy Áno/Nie?',
    'PORTAL_SHOW_TOPIC_HOVER_PREVIEW'           => 'Prednáhľad témy',
    'PORTAL_SHOW_TOPIC_HOVER_PREVIEW_EXPLAIN'   => 'Zobrazím vznašajúcu sa tému v prednáhľade Áno/Nie?',
    'PORTAL_SHOW_TOOL_TIPS'           			=> 'V panely veľké nápomocné tipy',
    'PORTAL_SHOW_TOOL_TIPS_EXPLAIN'   			=> 'Zobrazím v panely veľké nápomocné tipy Áno/Nie?',
    'PORTAL_SHOW_THANKS'           			    => 'Zobrazím MÓD Poďakovanie za príspevok',
    'PORTAL_SHOW_THANKS_EXPLAIN'   			    => 'Aktivujem MÓD poďakovať za Príspevok  Áno/Nie?',
	
    'PORTAL_SHOW_BBCODE_BOX'           			=> 'Custom bbCode Box',
    'PORTAL_SHOW_BBCODE_BOX_EXPLAIN'   			=> 'Enable Custom bbCode Box Yes/No?',
    'PORTAL_SHOW_ZODIACS'           			=> 'Zodiacs in viewtopic',
    'PORTAL_SHOW_ZODIACS_EXPLAIN'   			=> 'Enable Zodiacs in viewtopic Yes/No?',
    'PORTAL_SHOW_LOGO'           				=> 'Site Logo',
    'PORTAL_SHOW_LOGO_EXPLAIN'   				=> 'Enable site logo in style header Yes/No?',
    'PORTAL_SHOW_SITENAME'           			=> 'Site Name and Description',
    'PORTAL_SHOW_SITENAME_EXPLAIN'   			=> 'Enable site name and description in style header Yes/No?',

	// pagination 
    'ACP_PORTAL_ANNOUNCE_PAG_SETTINGS' => 'Nastavenie stránkovania výpisov',
    'ACP_PORTAL_NEWS_PAG_SETTINGS'     => 'Nastavenie stránkovania správ',

    'PORTAL_PAG_REPOSITORY'            => 'Schránka článkov',
    'PORTAL_PAG_REPOSITORY_EXPLAIN'    => 'Zobrazovať očíslovanie Ano/Nie? <br /><br />Ak umožníte v stránke číslovanie odstavcov  budú zobrazené pod posledným odstavcom v bloku.',
    'PORTAL_PAG_PERMISSIONS'           => 'Povolenie stránkovania',
    'PORTAL_PAG_PERMISSIONS_EXPLAIN'   => 'Nechám povolené Áno/Nie?',
    'PORTAL_PAG_SHOW_ALL'              => 'Zobrazenie všetkých typov správ',
    'PORTAL_PAG_SHOW_ALL_EXPLAIN'      => 'Zobrazím všetky správy Áno/Nie? <br /><br />Všetky tipy článkov ako, globálny oznam, dôležity a normálny oznam ich počet bude v sekcii správ. Tieto oznámenia v časti, globálne oznámenia a oznámenia budú iba spočítané.',

));

?>