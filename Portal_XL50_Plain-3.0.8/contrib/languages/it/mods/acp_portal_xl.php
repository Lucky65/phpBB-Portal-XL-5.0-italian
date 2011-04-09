<?php
/** 
*
* @name acp_portal_xl.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009  Portal XL Group
* @copyright (c) 2009, 2010 luckylab.eu - upgrade translation for portal xl on 2010/08/09
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

   'ACP_PORTAL_INFO'                  			=> 'Amministrazione Portale',
   'ACP_PORTAL_INFO_EXPLAIN'           			=> 'Grazie per aver scelto Portal XL 5.0 come soluzione portale. Su questo sito puoi gestire il portale del tuo forum. Le schermate che stai vedendo daranno una rapida panoramica di tutte le varie impostazioni del portale. I links sulla sinistra di questa schermata ti permettono di controllare ogni aspetto della tua esperienza di portale. La configurazione ACP è di Mysterious 2007. La traduzione italiana di Portal xl e Portal xl Premod è a cura di Lucky (www.portalxl.eu).<br />
    <div class="successbox">
    <h3>Note Autore</h3>
    <p>La creazione, il mantenimento e gli aggiornamenti per il progetto Portal XL Italia richiedono molto tempo e fatica.<br />
       Chiunque voglia sostenere questa comunità può farlo, contribuendo a coprire i costi di supporto, server, dominio, ecc. in questo modo siamo in grado di mantenere questo sito on-line a favore del progetto e dei nostri utenti.<br /> 
       Puoi donare sulla nostra ID pay-pal <strong>admin@portalxl.eu</strong>, o visitare la pagina donazioni <a href="http://www.portalxl.eu/donate.php" target="_blank">qui</a>.<br /><br />
       Il supporto minimo di questo progetto è di Euro 25.00 (ogni altro aiuto sarà sempre gradito).<br />
       Se sei già registrato come utente sul nostro portale, non dimenticare di comunicare il tuo nome utente nella ragione della tua donazione.</p>
    </div><p>',


	// announcements
   'ACP_PORTAL_ANNOUNCE_INFO'           		=> 'Annunci Portale',
   'ACP_PORTAL_ANNOUNCE_SETTINGS'               => 'Configurazione annunci',
   'ACP_PORTAL_ANNOUNCE_SETTINGS_EXPLAIN'       => 'Qui puoi modificare gli annunci informativi ed alcune opzioni specifiche.',
   'PORTAL_ANNOUNCMENTS'                       	=> 'Annunci visualizzati',
   'PORTAL_ANNOUNCMENTS_EXPLAIN'                => 'Visualizza blocco Si/No?',
   'PORTAL_NUMBER_OF_ANNOUNCMENTS'             	=> 'Numero degli annunci del Portale',
   'PORTAL_NUMBER_OF_ANNOUNCMENTS_EXPLAIN'      => '0 per infiniti',
   'PORTAL_ANNOUNCMENTS_DAY'                   	=> 'Numero di giorni per visualizzare gli annunci',
   'PORTAL_ANNOUNCMENTS_DAY_EXPLAIN'           	=> '0 per infiniti',
   'PORTAL_ANNOUNCMENTS_LENGTH'                	=> 'Lunghezza massima per gli annunci.',
   'PORTAL_ANNOUNCMENTS_LENGTH_EXPLAIN'       	=> 'Questo valore conta i caratteri che possono essere visualizzati. 0 per infiniti.',
   'PORTAL_GLOBAL_ANNOUNCMENTS_FORUM'          	=> 'ID forum per annunci globali',
   'PORTAL_GLOBAL_ANNOUNCMENTS_FORUM_EXPLAIN'   => 'Forum per annunci globali (devi specificare un ID) separato da una virgola per multi-forums, es. 1,2,5. Non lasciare questo campo vuoto, anche solo 0 è richiesto.',

	// news
   'ACP_PORTAL_NEWS_INFO'                  		=> 'News Portale',
   'ACP_PORTAL_NEWS_SETTINGS'                  	=> 'Configurazione News',
   'ACP_PORTAL_NEWS_SETTINGS_EXPLAIN'       	=> 'Qui puoi modificare le news ed alcune opzioni specifiche.',
   'PORTAL_NEWS'                              	=> 'News visualizzate',
   'PORTAL_NEWS_EXPLAIN'                        => 'Visualizza blocco Si/No?',
   'PORTAL_SHOW_ALL_NEWS'                     	=> 'Mostra tutti gli articoli nel forum',
   'PORTAL_SHOW_ALL_NEWS_EXPLAIN'             	=> 'Includi importanti, annunci e annunci globali?',
   'PORTAL_NUMBER_OF_NEWS'                    	=> 'Numero di nuovi articoli nel Portale',
   'PORTAL_NUMBER_OF_NEWS_EXPLAIN'            	=> '0 per infiniti',
   'PORTAL_NEWS_LENGTH'                       	=> 'Lunghezza massima per News',
   'PORTAL_NEWS_LENGTH_EXPLAIN'               	=> 'Questo valore conta i caratteri che possono essere visualizzati. 0 per infiniti.',
   'PORTAL_NEWS_FORUM'                        	=> 'ID per News',
   'PORTAL_NEWS_FORUM_EXPLAIN'             		=> 'Forum per news (devi specificare un ID) separato da una virgola per multi-forums, es. 1,2,5. Non lasciare questo campo vuoto, anche solo 0 è richiesto.',

	// recent topics
   'ACP_PORTAL_RECENT_INFO'                  	=> 'Messaggi recenti portale',
   'ACP_PORTAL_RECENT_SETTINGS'                 => 'Configurazione messaggi recenti',
   'ACP_PORTAL_RECENT_SETTINGS_EXPLAIN'       	=> 'Qui puoi modificare i messaggi recenti ed alcune opzioni specifiche.',
   'PORTAL_RECENT'                  			=> 'Messaggi recenti visualizzati',
   'PORTAL_RECENT_EXPLAIN'                  	=> 'Visualizza blocchi Si/No <br /> Questa scheda comprende annunci, messaggi popolari e articoli. Scegli "No" per disattivare l’intero blocco.',
   'PORTAL_MAX_TOPIC'                          	=> 'Limite degli annunci recenti',
   'PORTAL_MAX_TOPIC_EXPLAIN'                   => '0 per infiniti',
   'PORTAL_RECENT_TITLE_LIMIT'                 	=> 'Limite caratteri per messaggi recenti',
   'PORTAL_RECENT_TITLE_LIMIT_EXPLAIN'          => '0 per infiniti',
   
	// paypal
   'ACP_PORTAL_PAYPAL_INFO'                  	=> 'Paypal portale',
   'ACP_PORTAL_PAYPAL_SETTINGS'                 => 'Configurazione Paypal',
   'ACP_PORTAL_PAYPAL_SETTINGS_EXPLAIN'       	=> 'Qui puoi modificare le tue informazioni paypal ed alcune opzioni specifiche.',
   'PORTAL_PAY_C_BLOCK'                        	=> 'Visualizza paypal al centro',
   'PORTAL_PAY_C_BLOCK_EXPLAIN'                 => 'Visualizza blocco Si/No?',
   'PORTAL_PAY_S_BLOCK'                        	=> 'Visualizza pulsante piccolo',
   'PORTAL_PAY_S_BLOCK_EXPLAIN'                 => 'Visualizza blocco Si/No?',
   'PORTAL_PAY_ACC'                            	=> 'Account paypal',
   'PORTAL_PAY_ACC_EXPLAIN'                     => 'Inserisci la tua email paypal es. xxx@xxx.com',

	// last member
   'ACP_PORTAL_MEMBERS_INFO'               		=> 'Ultimi utenti portale',
   'ACP_PORTAL_MEMBERS_SETTINGS'                => 'Ultima configurazione utenti',
   'ACP_PORTAL_MEMBERS_SETTINGS_EXPLAIN'       	=> 'Qui puoi modificare le tue informazioni utenti ed alcune opzioni specifiche.',
   'PORTAL_LATEST_MEMBERS'                  	=> 'Visualizza ultimi utenti',
   'PORTAL_LATEST_MEMBERS_EXPLAIN'              => 'Visualizza blocco Si/No?',
   'PORTAL_MAX_LAST_MEMBER'                    	=> 'Limite per visualizzazione ultimi utenti',
   'PORTAL_MAX_LAST_MEMBER_EXPLAIN'             => '0 per infiniti',
   
	// bots
   'ACP_PORTAL_BOTS_INFO'                    	=> 'Visite bots portale',
   'ACP_PORTAL_BOTS_SETTINGS'                   => 'Configurazione visite bots',
   'ACP_PORTAL_BOTS_SETTINGS_EXPLAIN'       	=> 'Qui puoi modificare le tue informazioni bots ed alcune opzioni specifiche.',
   'PORTAL_LOAD_LAST_VISITED_BOTS'             	=> 'Visite bots visualizzate',
   'PORTAL_LOAD_LAST_VISITED_BOTS_EXPLAIN'      => 'Visualizza blocco Si/No?',
   'PORTAL_LAST_VISITED_BOTS_NUMBER'           	=> 'Quanti bots vuoi visualizzare',
   'PORTAL_LAST_VISITED_BOTS_NUMBER_EXPLAIN'    => '0 per infiniti',
   
	// polls   
   'ACP_PORTAL_POLLS_INFO'                    	=> 'Sondaggi portale',
   'ACP_PORTAL_POLLS_SETTINGS'                  => 'Configurazione sondaggi',
   'ACP_PORTAL_POLLS_SETTINGS_EXPLAIN'       	=> 'Qui puoi modificare le tue informazioni sondaggi ed alcune opzioni specifiche.',
   'PORTAL_POLL_TOPIC'                         	=> 'Sondaggi visualizzati',
   'PORTAL_POLL_TOPIC_EXPLAIN'                  => 'Visualizza blocco Si/No?',
   'PORTAL_POLL_TOPIC_ID'                      	=> 'Visualizza sondaggi del relativo argomento ID',
   'PORTAL_POLL_TOPIC_ID_EXPLAIN'             	=> 'Messaggio ID (numero topic) che desideri visualizzare, selezionato a 0 (non lasciare il campo vuoto).',
   'PORTAL_POLL_FORUM_ID'                      	=> 'Visualizza sondaggio del relativo forum ID',
   'PORTAL_POLL_FORUM_ID_EXPLAIN'             	=> 'Forum ID (numero forum) che desideri visualizzare, selezionato a 2 (non lasciare il campo vuoto).',
   'PORTAL_POLL_POST_ID'                      	=> 'Visualizza sondaggio del relativo messaggio ID',
   'PORTAL_POLL_POST_ID_EXPLAIN'             	=> 'Messaggio ID (numero messaggio) che desideri visualizzare, selezionato a 0 (non lasciare il campo vuoto).',

	// most poster
   'ACP_PORTAL_MOST_POSTER_INFO'                => 'Maggiori autori portale',
   'ACP_PORTAL_MOST_POSTER_SETTINGS'            => 'Configurazione maggiori autori',
   'ACP_PORTAL_MOST_POSTER_SETTINGS_EXPLAIN'    => 'Qui puoi modificare le tue informazioni autori ed alcune opzioni specifiche.',
   'PORTAL_TOP_POSTERS'                  		=> 'Visualizza maggiori autori',
   'PORTAL_TOP_POSTERS_EXPLAIN'                 => 'Visualizza blocco Si/No?',
   'PORTAL_MAX_MOST_POSTER'                    	=> 'Quanti autori vuoi visualizzare',
   'PORTAL_MAX_MOST_POSTER_EXPLAIN'             => '0 per infiniti',

	// left and right column width 
   'ACP_PORTAL_COLLUMN_WIDTH_INFO'              => 'Larghezza colonne portale',
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS'          => 'Configurazione colonne sinistra e destra',
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS_EXPLAIN'  => 'Qui puoi modificare le tue configurazioni relative alla larghezza colonne ed alcune opzioni specifiche.',
   'PORTAL_LEFT_COLLUMN_WIDTH'                 	=> 'Valore larghezza colonna sinistra del portale',
   'PORTAL_LEFT_COLLUMN_WIDTH_EXPLAIN'          => 'Modifica la larghezza in pixel della colonna di sinistra, valore raccomandato 180',
   'PORTAL_RIGHT_COLLUMN_WIDTH'                 => 'Valore larghezza della colonna di destra del portale',
   'PORTAL_RIGHT_COLLUMN_WIDTH_EXPLAIN'         => 'Modifica la larghezza in pixel della colonna di destra, valore raccomandato 180',
   
	// attachments    
   'ACP_PORTAL_ATTACHMENTS_NUMBER_INFO'         		=> 'Allegati portale',
   'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS'     		=> 'Configurazione allegati',
   'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS_EXPLAIN'     => 'Qui puoi modificare le tue informazioni allegati ed alcune opzioni specifiche.',
   'PORTAL_ATTACHMENTS'                  				=> 'Allegati visualizzati',
   'PORTAL_ATTACHMENTS_EXPLAIN'                  		=> 'Visualizza blocco Si/No?',
   'PORTAL_ATTACHMENTS_NUMBER'                 			=> 'Limite allegati visualizzati',
   'PORTAL_ATTACHMENTS_NUMBER_EXPLAIN'                 	=> '0 per infiniti',

	// general 
   'ACP_PORTAL_SWITCHES_INFO'                  	=> 'Blocchi portale',
   'ACP_PORTAL_SWITCHES_SETTINGS'               => 'Configurazione generale blocchi',
   'ACP_PORTAL_SWITCHES_SETTINGS_EXPLAIN'       => 'Qui puoi modificare le tue informazioni blocchi ed alcune opzioni specifiche.',
   'PORTAL_GOOGLE_S_BLOCK'                  	=> 'Aggiungi Google',
   'PORTAL_GOOGLE_S_BLOCK_EXPLAIN'              => 'Vuoi visualizzare questo blocco Si/No? <br /> Google, il partner predefinito è blocco 120x240_as, il nome del file è <strong>google_adds.html</strong>.',
   'PORTAL_GOOGLE_C_BLOCK'                  	=> 'Aggiungi Google centrale',
   'PORTAL_GOOGLE_C_BLOCK_EXPLAIN'              => 'Vuoi visualizzare questo blocco Si/No? <br /> Google, il partner predefinito è blocco 234x60_as, il nome del file è <strong>google_adds_portal.html</strong>.',
   'PORTAL_FORUM_BLOCK'                  		=> 'Forum centrale',
   'PORTAL_FORUM_BLOCK_EXPLAIN'                 => 'Vuoi visualizzare questo blocco Si/No? <br /> Il blocco centrale è lo stesso dell’indice phpbb.',
   'PORTAL_ADVANCED_STAT'                  		=> 'Statistiche avanzate',
   'PORTAL_ADVANCED_STAT_EXPLAIN'               => 'Vuoi visualizzare questo blocco Si/No?',
   'PORTAL_LEADERS'                  			=> 'Leaders / Team',
   'PORTAL_LEADERS_EXPLAIN'                  	=> 'Vuoi visualizzare questo blocco Si/No?',
   'PORTAL_CLOCK'                  				=> 'Orologio',
   'PORTAL_CLOCK_EXPLAIN'                  		=> 'Vuoi visualizzare questo blocco Si/No?',
   'PORTAL_LINK_US'                  			=> 'Linkaci',
   'PORTAL_LINK_US_EXPLAIN'                  	=> 'Vuoi visualizzare questo blocco Si/No? <br /> Fornisce il codice html per consentire di copiare ed incollare un banner 88x31 su altri siti.',
   'PORTAL_LINKS'                  				=> 'Links',
   'PORTAL_LINKS_EXPLAIN'                  		=> 'Vuoi visualizzare questo blocco Si/No? <br /> Per aggiungere nuovi o modificare links per questo blocco devi modificare il file <strong>links.html</strong> necessariamente.',
   'PORTAL_WELCOME'                  			=> 'Benvenuto centrale',
   'PORTAL_WELCOME_EXPLAIN'                  	=> 'Vuoi visualizzare questo blocco Si/No?',
   'PORTAL_RANKS'                  			    => 'Livello centrale',
   'PORTAL_RANKS_EXPLAIN'                  		=> 'Vuoi visualizzare questo blocco Si/No? <br /> Questa scheda include paroliere, livelli, allegati ed elenco del forum. Scegli "No" per disabilitare il blocco.',
   'PORTAL_MAX_ONLINE_FRIENDS'                 	=> 'Limite visualizzazione amici online',
   'PORTAL_MAX_ONLINE_FRIENDS_EXPLAIN'          => 'Limita la visualizzazione nel blocco del portale degli amici online ad un certo valore (default è 8).',
   'PORTAL_MAINMENU_NORMAL'                  	=> 'Menu navigazione',
   'PORTAL_MAINMENU_NORMAL_EXPLAIN'      		=> 'Vuoi visualizzare questo blocco Si/No? <br /> Questo farà rientrare dal portale al menu di amministrazione - Gestisci i menu e mostra sopra il blocco.',
   'PORTAL_MAINMENU_DHTML'                  	=> 'Menu DHTML navigazione',
   'PORTAL_MAINMENU_DHTML_EXPLAIN'              => 'Vuoi visualizzare questo blocco Si/No? <br /> Per aggiungere nuovi o modificare links per questo blocco devi modificare il file main_menu_dhtml.html .',

    // wordgraph
   'ACP_PORTAL_WORDGRAPH_INFO'					=> 'Paroliere portale',
   'ACP_PORTAL_WORDGRAPH_SETTINGS'              => 'Configurazione paroliere',
   'ACP_PORTAL_WORDGRAPH_SETTINGS_EXPLAIN'      => 'Qui puoi modificare le tue informazioni paroliere ed alcune opzioni specifiche.',
   'PORTAL_WORDGRAPH'                  			=> 'Mostra paroliere',
   'PORTAL_WORDGRAPH_EXPLAIN'                  	=> 'Vuoi visualizzare questo blocco Si/No?',
   'PORTAL_WORD_GRAPH_MAX_WORDS'                => 'Quante parole vuoi mostrare',
   'PORTAL_WORD_GRAPH_MAX_WORDS_EXPLAIN'        => '0 per infinite',
   'PORTAL_WORD_GRAPH_WORD_COUNTS_EXPLAIN'      => 'Visualizza il conto delle parole es. (25) Si/No?',
   'PORTAL_WORD_GRAPH_RATIO'              		=> 'Dimensione ratio',
   'PORTAL_WORD_GRAPH_RATIO'              		=> 'Viene usata la dimensione del ratio',
   'PORTAL_WORD_GRAPH_RATIO_EXPLAIN'            => 'Modifica il ratio (grande/piccolo) della dimensione parola (default=4). Questo valore è relativo al valore delle parole visualizzate. Per le altre parole e gli altri aspetti ratio puoi scegliere di assegnare un ratio grande.',

/* not in use at moment
   'PORTAL_WORD_GRAPH_MAX_SIZE'              	=> 'Maximum font size in pixel',
   'PORTAL_WORD_GRAPH_MAX_SIZE_EXPLAIN'         => 'Set maximum value of font size for words in wordgraph.',
   'PORTAL_WORD_GRAPH_MIN_SIZE'              	=> 'Minimum font size in pixel',
   'PORTAL_WORD_GRAPH_MIN_SIZE_EXPLAIN'         => 'Set minimum value of font size for words in wordgraph.',
*/
	
	// random 
   'ACP_PORTAL_RANDOM_INFO'                  	=> 'Casuali portale',
   'ACP_PORTAL_RANDOM_SETTINGS'               	=> 'Configurazione banners/blocchi casuali',
   'ACP_PORTAL_RANDOM_SETTINGS_EXPLAIN'       	=> 'Qui puoi modificare le tue informazioni banners/blocchi casuali ed alcune opzioni specifiche.',
   'PORTAL_RAN_HO_BLOCK'                  		=> 'Banners orizzontali centrali casuali (max. dim. 386x60 pix)',
   'PORTAL_RAN_HO_BLOCK_EXPLAIN'                => 'Vuoi visualizzare questo blocco Si/No?',
   'PORTAL_RAN_VE_BLOCK'                  		=> 'Banners verticali casuali (max. dim. 386x60 130x600 pix)',
   'PORTAL_RAN_VE_BLOCK_EXPLAIN'                => 'Vuoi visualizzare questo blocco Si/No?',
   'PORTAL_RAN_LI_BLOCK'                  		=> 'Banners links (max. dim. 88x31 pix).',
   'PORTAL_RAN_LI_BLOCK_EXPLAIN'                => 'Vuoi visualizzare questo blocco Si/No? <br /> Questo farà rientrare dal portale al menu di amministrazione - Gestisci i menu e mostra sopra il blocco.',
   'PORTAL_RANDOM_MEMBER'                  		=> 'Utenti casuali',
   'PORTAL_RANDOM_MEMBER_EXPLAIN'               => 'Vuoi visualizzare questo blocco Si/No?',

	// welcome message
   'ACP_PORTAL_WELCOME_INFO'                  	=> 'Benvenuto portale',
   'ACP_PORTAL_WELCOME_SETTINGS'               	=> 'Configurazione benvenuto',
   'ACP_PORTAL_WELCOME_TXT_SETTINGS'           	=> 'Configurazione testo di benvenuto',
   'ACP_PORTAL_WELCOME_SETTINGS_EXPLAIN'       	=> 'Qui puoi modificare il messaggio di benvenuto ed alcune opzioni specifiche.',
   'PORTAL_WELCOME_INTRO'                  	    => 'Messaggio di benvenuto per gli ospiti',
   'PORTAL_WELCOME_INTRO_EXPLAIN'               => 'Modifica il messaggio di benvenuto per gli ospiti. Max. 2000 caratteri (html consentito)! Tutto il testo oltre il limite viene automaticamente tagliato.',
   'PORTAL_WELCOME_BACK'                        => 'Messaggio di benvenuto per gli utenti registrati',
   'PORTAL_WELCOME_BACK_EXPLAIN'                => 'Modifica il messaggio di benvenuto per gli utenti registrati. Max. 2000 caratteri (html consentito)! Tutto il testo oltre il limite viene automaticamente tagliato.',

	// chatbox
   'ACP_PORTAL_SHOUTBOX_INFO'					=> 'Chatbox portale',
   'ACP_PORTAL_SHOUTBOX_SETTINGS'				=> 'Configurazione Chatbox',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_HC'			=> 'Configurazione altezza e colore Chatbox portale',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_HCB'			=> 'Configurazione altezza e colore grande blocco',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_EXPLAIN'		=> 'Qui puoi modificare chatbox ed alcune opzioni specifiche. Il testo oltre il limite massimo di 600 caratteri viene automaticamente tagliato.',
   'PORTAL_SHOUTBOX'                  			=> 'Visualizza chatbox',
   'PORTAL_SHOUTBOX_EXPLAIN'                  	=> 'Visualizza questo blocco Si/No?',
   'PORTAL_SHOUTBOX_NUMBER'                  	=> 'Quante chats vuoi visualizzare',
   'PORTAL_SHOUTBOX_NUMBER_EXPLAIN'             => '0 per infinite, ogni altro valore visualizzato influenza le chats del portale e della pagina',
   'PORTAL_SHOUTBOX_SESSION_TIME'               => 'Sessioni permesse',
   'PORTAL_SHOUTBOX_SESSION_TIME_EXPLAIN'       => 'Aggiungi un valore tra 0 e 999 secondi la sessiona espira, la configurazione di default è 300 secondi',
   'PORTAL_SHOUTBOX_DEFAULT_DELAY'              => 'Ricarica ritardo',
   'PORTAL_SHOUTBOX_DEFAULT_DELAY_EXPLAIN'      => 'Aggiungi un valore tra 0 e 999 secondi per ricaricare un ritardo automatico, la configurazione di default è 15 secondi',

	// weather
   'ACP_PORTAL_WEATHER_INFO'				    => 'Meteo portale',
   'ACP_PORTAL_WEATHER_SETTINGS'			    => 'Configurazione meteo',
   'ACP_PORTAL_WEATHER_SETTINGS_GER'			=> 'Configurazione meteo di wetter.com dalla Germania',
   'ACP_PORTAL_WEATHER_SETTINGS_ALT'			=> 'Configurazione meteo per altri siti meteo',
   'ACP_PORTAL_WEATHER_SETTINGS_EXPLAIN'	    => 'Qui puoi modificare le informazioni meteo ed alcune opzioni specifiche. Il sito di configurazione di default è wetter.com dalla Germania. Se vuoi cambiare con altri siti devi modificare l’url in styles/prosilver/template/portal/block/weather.html, o compilare i campi sottostanti. Oltre i tre links non è possibile aggiungere.',
   'PORTAL_WEATHER'                  		    => 'Visualizza meteo',
   'PORTAL_WEATHER_EXPLAIN'                     => 'Visualizza questo blocco Si/No?',
   'PORTAL_WEATHER_GER'                  		=> 'Visualizza meteo dalla Germania wetter.com',
   'PORTAL_WEATHER_GER_EXPLAIN'                 => 'Visualizza questo blocco Si/No?',
   'PORTAL_WEATHER_ZIPCODE'                  	=> 'Il tuo codice postale',
   'PORTAL_WEATHER_ZIPCODE_EXPLAIN'             => 'Inserisci il tuo codice postale per visualizzare la tua area da wetter.com',
   'PORTAL_WEATHER_ALTERNATE_URL'              	=> 'L’url del tuo sito alternativo meteo',
   'PORTAL_WEATHER_ALTERNATE_URL_EXPLAIN'       => 'Incolla il tuo completo url meteo qui. Lascia vuoto per non visualizzarlo',
   'PORTAL_WEATHER_ALTERNATE_URL1'              => 'L’url del tuo sito alternativo meteo',
   'PORTAL_WEATHER_ALTERNATE_URL1_EXPLAIN'      => 'Incolla il tuo completo url meteo qui. Lascia vuoto per non visualizzarlo',
   'PORTAL_WEATHER_ALTERNATE_URL2'              => 'L’url del tuo sito alternativo meteo',
   'PORTAL_WEATHER_ALTERNATE_URL2_EXPLAIN'      => 'Incolla il tuo completo url meteo qui. Lascia vuoto per non visualizzarlo',
   
	// syndication
   'ACP_PORTAL_SYNDICATE_INFO'				    => 'RSS / RDF Info',
   'ACP_PORTAL_SYNDICATE_INFO_SETTINGS'			=> 'Modifica configurazione info RSS',
   'ACP_PORTAL_SYNDICATE_INFO_SETTINGS_EXPLAIN'	=> 'Qui puoi modificare le informazioni RSS ed alcune opzioni specifiche.',
   'PORTAL_SYNDICATE'                  		    => 'Visualizza RSS / RDF',
   'PORTAL_SYNDICATE_EXPLAIN'                   => 'Visualizza questo blocco Si/No?',

	// Portal Index
   'ACP_PORTAL_INDEX_INFO'				        => 'Indice portale',
   'ACP_PORTAL_INDEX_INFO_LAYOUT'	    		=> 'Visualizza blocchi su indice/forum',
   'ACP_PORTAL_INDEX_INFO_LAYOUT_EXPLAIN'		=> 'Visualizza Si/No?',
   'ACP_PORTAL_INDEX_INFO_SETTINGS'			    => 'Modifica configurazione blocco indice/forum',
   'ACP_PORTAL_INDEX_INFO_COLUMN_SETTINGS'	    => 'Modifica configurazione colonne indice/forum',
   'ACP_PORTAL_INDEX_INFO_SETTINGS_EXPLAIN'	    => 'Qui puoi modificare la tua navigazione indice/forum, indice forum e forum è combinato qui. Modificando la configurazione essa avrà effetto sul layout di infice e forum.',
   'PORTAL_INDEX_LEFT'                  		=> 'Modifica configurazione colonna blocco si sinistra',
   'PORTAL_INDEX_LEFT_EXPLAIN'                  => 'Visualizza la colonna di sinistra in indice/forum Si/No?',
   'PORTAL_INDEX_LEFT_COLLUMN_WIDTH'            => 'Larghezza della colonna di sinistra',
   'PORTAL_INDEX_LEFT_COLLUMN_WIDTH_EXPLAIN'    => 'Modifica larghezza colonna sinistra in pixel, il valore raccomandato è 180',
   'PORTAL_INDEX_RIGHT'                  		=> 'Visualizza la colonna di destra',
   'PORTAL_INDEX_RIGHT_EXPLAIN'                 => 'Visualizza la colonna di destra in indice/forum Si/No?',
   'PORTAL_INDEX_RIGHT_COLLUMN_WIDTH'           => 'Larghezza della colonna di destra',
   'PORTAL_INDEX_RIGHT_COLLUMN_WIDTH_EXPLAIN'   => 'Modifica larghezza colonna destra in pixel, il valore raccomandato è 180',

	// change style
   'ACP_PORTAL_BOARD_STYLE_INFO'				=> 'Modifica stile forum',
   'ACP_PORTAL_BOARD_STYLE_SETTINGS'			=> 'Modifica congigurazione stile forum',
   'ACP_PORTAL_BOARD_STYLE_SETTINGS_EXPLAIN'	=> 'Qui puoi modificare le informazioni di stile ed alcune opzioni specifiche.',

	// media player
   'ACP_PORTAL_MEDIA_INFO'            			=> 'Media player',
   'ACP_PORTAL_MEDIA_INFO_EXPLAIN'    			=> 'Modifica le informazioni media player ed alcune opzioni specifiche.',
   'PORTAL_MEDIA_PLAYER'               			=> 'Visualizza media player?',
   'PORTAL_MEDIA_PLAYER_EXPLAIN'       			=> 'Visualizza questo blocco Si/No?',

	// picture gallery
   'ACP_PORTAL_GALLERY_INFO'            		=> 'Galleria immagini',
   'ACP_PORTAL_GALLERY_INFO_EXPLAIN'   			=> 'Modifica le informazioni galleria ed alcune opzioni specifiche.',
   'PORTAL_PICTURE_GALLERY'               		=> 'Visualizza galleria immagini?',
   'PORTAL_PICTURE_GALLERY_EXPLAIN'    			=> 'Visualizza questo blocco Si/No?',

	// scroll message
   'ACP_PORTAL_SCROLL_MESSAGE_INFO'            			=> 'Messaggio scorrevole',
   'ACP_PORTAL_SCROLL_MESSAGE_INFO_EXPLAIN'   			=> 'Il tag marquee è un tag HTML che genera un testo scorrevole da destra a sinistra. La larghezza predefinita del marqee è pari alla larghezza dell’elemento principale.',
   'PORTAL_SCROLL_MESSAGE_DISPLAY'               		=> 'Visualizza messaggio scorrevole?',
   'PORTAL_SCROLL_MESSAGE_DISPLAY_EXPLAIN'    			=> 'Visualizza questo blocco Si/No?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE'               		=> 'Visualizza effetto scorrevole/colorato?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_EXPLAIN'    			=> 'Visualizza Si/No?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTCOLOR'            => 'Colore testo',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTCOLOR_EXPLAIN'	=> 'HEX o il nome del colore ad esempio #ffffff per bianco. Il colore di default è #ff0000 ',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTSIZE'         	=> 'Dimensione testo',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTSIZE_EXPLAIN' 	=> 'Dimensione testo in pixel. Il valore di default è 10px.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_DIRECTION'         	=> 'Direzione scorrimento',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_DIRECTION_EXPLAIN' 	=> 'Direzione del testo scorrevole. Questo attributo controlla la direzione del testo scorrevole. I valori permessi sono <strong>left</strong>, <strong>right</strong>, <strong>up</strong> e <strong>down</strong> specificando la fine della casella di scorrimento dall’inizio.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SPEED'         		=> 'Velocità scorrimento',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SPEED_EXPLAIN' 		=> 'Controlla la velocità del movimento (in pixel) tra le successive visualizzazioni delle animazioni.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_ALIGN'         		=> 'Allineamento scorrimento',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_ALIGN_EXPLAIN' 		=> 'Questo tag assume valori di alto, medio e basso (top, middle e bottom). Esso controlla il posizionamento del marqee per il testo attuale esattamente nello stesso modo come il tag img con attributo align.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BEHAVIOR'         	=> 'Comportamento scorrimento',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BEHAVIOR_EXPLAIN' 	=> 'Questo tag controlla il comportamento del testo visualizzato. Ci sono tre possibili valori. Inizia a scorrere il testo non appena la pagina viene caricata. <br /><br />Opzioni: <br /><strong>scroll</strong> il testo scorre attraverso lo schermo e ri-appare all’altra estremità quando è scomparso. Questo è il comportamento di default. <br /><strong>slide</strong> è simile allo scorrimento ad eccezione del fatto che quando il testo scorrevole raggiunge l’estremità del box, scompare e si riavvia a partire della fine del box. Se lo schermo non è loop il testo rimane posizionato alla fine del box. <br /><strong>alternate</strong> il testo "rimbalza" tra le estremità del box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BGCOLOR'         		=> 'Colore scorrimento',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BGCOLOR_EXPLAIN' 		=> 'Questo tag controllo il colore di sfondo del box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HEIGHT'         		=> 'Altezza scorrimento',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HEIGHT_EXPLAIN' 		=> 'Questo tag controlla l’altezza del box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_WIDTH'         		=> 'Larghezza scorrimento',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_WIDTH_EXPLAIN' 		=> 'Questo tag controlla la larghezza del box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HSPACE'         		=> 'Spazio orizzontale scorrimento',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HSPACE_EXPLAIN' 		=> 'Controlla lo spazio orizzontale del box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_VSPACE'         		=> 'Spazio verticale scorrimento',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_VSPACE_EXPLAIN' 		=> 'Controlla lo spazio verticale del box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_LOOP'         		=> 'Loop scorrimento',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_LOOP_EXPLAIN' 		=> 'Questo valore controlla il numero di cicli. Il valore -1 è infinito significa che continua fino a infinito.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SCROLLDELAY'         	=> 'Ritardo scorrimento',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SCROLLDELAY_EXPLAIN' 	=> 'Controlla il ritardo in millesecondi tra le successive visualizzazioni per imprimere l’animazione.',
   'PORTAL_SCROLL_MESSAGE_INTRO' 						=> 'Codice testo scorrevole',
   'PORTAL_SCROLL_MESSAGE_INTRO_EXPLAIN' 				=> 'Aggiungi/modifica un messaggio.  Oltre i 1000 caratteri, il testo viene automaticamente tagliato, HTML è consentito, i cookie sono abilitati!',
   'ACP_PORTAL_SCROLL_MESSAGE_TXT_SETTINGS'         	=> 'Testo scorrimento',

	// meta tags
   'ACP_PORTAL_METATAGS_INFO'            			=> 'META Tags',
   'ACP_PORTAL_METATAGS_INFO_EXPLAIN'   			=> 'Benvenuto nella gestione dei META Tags. I tags creano una descrizione del tuo sito utili per i motori di ricerca.<br/ >Ciò consentirà al motore di ricerca di indicizzare meglio il tuo sito.<br/ >Questi tags consentono altre opzioni come il reindirizzamento automatico ad un altro URL.',
   'PORTAL_META_REDIRECT_URL_TIME'            		=> 'Reindirizzamento tempo (sec)',
   'PORTAL_META_REDIRECT_URL_TIME_EXPLAIN'          => 'Specifica il tempo in secondi entro il quale i browser reindirizza automaticamente ad un URL specifico. Lascia in bianco per non eseguire <strong>nessun</strong> reindirizzamento automatico!',
   'PORTAL_META_REDIRECT_URL_ADRESS'            	=> 'Indirizzo di reindirizzamento (URL)',
   'PORTAL_META_REDIRECT_URL_ADRESS_EXPLAIN'        => 'Specifica un URL per il reindirizzamento da eseguire in un tempo determinato. Lascia in bianco per non eseguire <strong>nessun</strong> reindirizzamento automatico!',
   'PORTAL_META_REFRESH'            				=> 'Aggiornamento META',
   'PORTAL_META_REFRESH_EXPLAIN'        			=> 'Specifica un tempo in secondi prima che il browser aggiorni automaticamente il documento. Lascia in bianco per non eseguire <strong>nessun</strong> aggiornamento automatico!',
   'PORTAL_META_PRAGMA'            					=> 'Cache META',
   'PORTAL_META_PRAGMA_EXPLAIN'        				=> 'Proibisce al record della pagina di conservare nella cache del browser.<br/ >- Se usi questo tag, aggiungi <i>no-cache</i>, altrimenti lascia il campo in bianco.',
   'PORTAL_META_KEYWORDS'            				=> 'Keywords META',
   'PORTAL_META_KEYWORDS_EXPLAIN'        			=> 'Funzione: Indica ai motori di ricerca le keywords relative al tuo sito.<br />- Massimo numero di caratteri: 1000 o 100 keywords.<br/ >- Il numero di caratteri, non considera le <a href="accent.htm">lettere accentate</a> incorporate nel codice HTML. Ad esempio la lettera  "à", codifica &ampà; il conteggio HTML è di otto caratteri.<br />- Non ripetere più volte la stessa keyword ai motori questa pratica non piace.<br />- Le keywords devono essere separate da una virgola, uno spazio, una virgola ed uno spazio, questa è la migliore soluzione.',
   'PORTAL_META_DESCRIPTION'            			=> 'Descrizione META',
   'PORTAL_META_DESCRIPTION_EXPLAIN'        		=> 'Descrizione del tuo sito.<br />- Numero massimo di caratteri: 200<br />- Evita gli accenti, su alcuni motori non sono presi in considerazione.',
   'PORTAL_META_AUTHOR'            					=> 'META autore',
   'PORTAL_META_AUTHOR_EXPLAIN'        				=> 'Permette di identificare l’autore del sito.<br/ >- Aggiungi il primo nome in minuscolo, seguita dal cognome in maiuscolo.<br/ >- Se devi aggiungere più autori separa questi ultimi da una virgola.',
   'PORTAL_META_IDENTIFIER_URL'            			=> 'META url-identificativo',
   'PORTAL_META_IDENTIFIER_URL_EXPLAIN'        		=> 'Specifica l’URL.<br />- Scrivi l’URL del tuo sito.<br />- Devi scrivere solo l’URL.',
   'PORTAL_META_REPLY_TO'            				=> 'META Replica-a',
   'PORTAL_META_REPLY_TO_EXPLAIN'        			=> 'Permette di specificare l’email del webmaster.<br/ > Preferibilmente specificare un solo indirizzo email.',
   'PORTAL_META_REVISIT_AFTER'            			=> 'META Rivisita-dopo',
   'PORTAL_META_REVISIT_AFTER_EXPLAIN'        		=> 'Permette di specificare il numero di giorni entro i quali lo spider (robot dei motori di ricerca) potreanno visitare nuovamente il tuo sito. - 15 giorni" o "30 giorni" è la migliore soluzione.',
   'PORTAL_META_CATEGORY'            				=> 'Categoria META',
   'PORTAL_META_CATEGORY_EXPLAIN'        			=> 'Permette di specificare la categoria del sito. Usata per certi motori per creare una classificazione di categorie.',
   'PORTAL_META_COPYRIGHT'            				=> 'META Copyright',
   'PORTAL_META_COPYRIGHT_EXPLAIN'        			=> 'Utilizzato per il copyright.<br /> - Puoi includere copyright, trademarks, patents, o altre informazioni.',
   'PORTAL_META_GENERATOR'            				=> 'Generatore META',
   'PORTAL_META_GENERATOR_EXPLAIN'        			=> 'Utilizzato per il nome e la versione della piattaforma utilizzata alla creazione delle pagine.<br/ >- Utilizzato dai venditori come strumento di penetrazione del mercato <br / >- Stessi tags come meta pubblici.',
   'PORTAL_META_ROBOTS'            					=> 'META Robots',
   'PORTAL_META_ROBOTS_EXPLAIN'        				=> 'Controlla il robots delle pagine.<br/ >- <strong>all</strong> = Il bot indicizza tutto il sito (per default)<br />- <strong>none</strong> = Il bot non indicizza nessuna pagina del tuo sito<br />- <strong>index</strong> = indicizza solo la tua pagina index<br />- <strong>noindex</strong> = Le tue pagine sono indicizzate ma il bot seguirà i links delle tue pagine<br />- <strong>follow</strong> = Il bot seguirà i link delle tue pagine per indicizzarle dopo.<br />- <strong>nofollow</strong> = Il bot indicizzerà i links delle tue pagine.<br />- <strong>noodp</strong> = Opzione per le Open Directory liste di webmasters (Live Search Microsoft).',
   'PORTAL_META_DISTRIBUTION'            			=> 'Distribuzione META',
   'PORTAL_META_DISTRIBUTION_EXPLAIN'        		=> 'Utilizzato per classificare la distribuzione del tuo contenuto web:<br/ >- <strong>Global</strong> (l’intero web)<br/ >- <strong>Local</strong> (riservato per IP locali per il tuo sito)<br/ >- <strong>IU</strong> (Uso interno, non per pubbliche distribuzioni).',
   'PORTAL_META_CREATION_YEAR'            			=> 'META Data-creazione-yyyy',
   'PORTAL_META_CREATION_YEAR_EXPLAIN'        		=> 'Creazione anno del sito es. 2008.',
   'PORTAL_META_CREATION_MONTH'            			=> 'META Data-creazione-mm',
   'PORTAL_META_CREATION_MONTH_EXPLAIN'        		=> 'Creation mese del sito es. 03.',
   'PORTAL_META_CREATION_DAY'            			=> 'META Data-creazione-dd',
   'PORTAL_META_CREATION_DAY_EXPLAIN'        		=> 'Creazione giorno del sito es. 23.',
   'PORTAL_META_REVISION_YEAR'            			=> 'META Data-revisione-yyyy',
   'PORTAL_META_REVISION_YEAR_EXPLAIN'        		=> 'Revisione anno del sito es. 2009.',
   'PORTAL_META_REVISION_MONTH'            			=> 'META Data-revisione-mm',
   'PORTAL_META_REVISION_MONTH_EXPLAIN'        		=> 'Revisione mese del sito es. 08.',
   'PORTAL_META_REVISION_DAY'            			=> 'META Data-revisione-dd',
   'PORTAL_META_REVISION_DAY_EXPLAIN'        		=> 'Revisione giorno del sito es. 21.',

	// other
   'ACP_PORTAL_OTHER_INFO'                  	=> 'Portale altre configurazioni',
   'ACP_PORTAL_OTHER_SETTINGS'               	=> 'Portale altre configurazioni',
   'ACP_PORTAL_OTHER_SETTINGS_EXPLAIN'       	=> 'Qui puoi modificare altre informazioni ed alcune specifiche opzioni.',
   'PORTAL_MAX_LASTVISITS'                 		=> 'Limite di visualizzazione ultime visite',
   'PORTAL_MAX_LASTVISITS_EXPLAIN'          	=> 'Limite di visualizzazione ultime visite nel portale, chi c’è on line nel blocco e per un certo valore (default è 5).',
   'PORTAL_ACT_RECENT_HOT_TOPICS'               => 'Vuoi visualizzare gli attuali argomenti recenti (scorrevole)?',
   'PORTAL_ACT_RECENT_HOT_TOPICS_EXPLAIN'    	=> 'Vuoi visualizzare questo blocco Si/No?',
   'PORTAL_ACT_RECENT_TOPICS'               	=> 'Vuoi visualizzare gli attuali argomenti recenti (scorrevole)?',
   'PORTAL_ACT_RECENT_TOPICS_EXPLAIN'    		=> 'Vuoi visualizzare questo blocco Si/No?',
   'PORTAL_ANNOUNCE_IMPORTANT'               	=> 'Vuoi visualizzare gli annunci?',
   'PORTAL_ANNOUNCE_IMPORTANT_EXPLAIN'    		=> 'Vuoi visualizzare questo blocco Si/No?',
   'PORTAL_DONWLOADS'               			=> 'Vuoi visualizzare i downloads?',
   'PORTAL_DONWLOADS_EXPLAIN'    				=> 'Vuoi visualizzare questo blocco Si/No?',
   'PORTAL_FORUMLIST'               			=> 'Vuoi visualizzare la lista del forum?',
   'PORTAL_FORUMLIST_EXPLAIN'    				=> 'Vuoi visualizzare questo blocco Si/No? <br /> Visualizza la lista del forum condensata in una lista.',
   'PORTAL_PHPINFO'               				=> 'Vuoi visualizzare PHP info?',
   'PORTAL_PHPINFO_EXPLAIN'    					=> 'Vuoi visualizzare questo blocco Si/No?',
   'PORTAL_QUOTES'               				=> 'Vuoi visualizzare le citazioni?',
   'PORTAL_QUOTES_EXPLAIN'    					=> 'Vuoi visualizzare questo blocco Si/No?',

   'PORTAL_DRAG_DROP'               			=> 'Opzioni "seleziona e sposta" portale',
   'PORTAL_DRAG_DROP_EXPLAIN'       			=> 'Abilita questo strumento SI/No? <br /> Abilita globalmente abilita / disabilita la funzione del blocco nell’indice del portale.',

   'PORTAL_RAN_H_BLOCK'                     	=> '<b>Altera configurazione portale</b>',
   'CONFIG_UPDATED'								=> 'Configurazione aggiornata correttamente.',
   'VIEWING_PORTAL'								=> 'Vedi portale',
   
   // corrected/added since RC2 below
   'PORTAL_PICTURE_RESIZE'						=> 'Ridimensiona automaticamente la dimensione delle immagini (pixel)',
   'PORTAL_PICTURE_RESIZE_EXPLAIN'				=> 'Ridimensiona le immagini usando il tag img nei messaggi posizionati nelle news del portale.',
   
   // corrected/added since RC5 below
	'ACP_COUNTER_SETTINGS_EXPLAIN'	=> 'Impostazioni per animare le cifre di monitoraggio IP.',
	'ACP_COUNTER_DIGITS_SETTINGS'	=> 'Configurazione contatore',
	'ACP_COUNTER_DISPLAY_SETTINGS'	=> 'Impostazione contatore',
	'ACP_COUNTER_IP_SETTINGS'		=> 'Contro il blocco delle impostazioni IP',

	'COUNTER_DIGITS_PATH'				=> 'Percorso',
	'COUNTER_DIGITS_PATH_EXPLAIN'		=> 'Percorso nella root phpBB, es. <samp>images/counter/digits</samp>',
	'COUNTER_DIGITS_ANI_PATH'			=> 'Percorso cifre animate',
	'COUNTER_DIGITS_ANI_PATH_EXPLAIN'	=> 'Percorso cifre animate nella root phpBB, es. <samp>images/counter/digits_ani</samp>',
	'COUNTER_DIGITS_NUMBER'				=> 'Numero delle cifre',
	'COUNTER_DIGITS_NUMBER_EXPLAIN'		=> 'Numero delle cifre per visualizzare il contatore',
	'COUNTER_DIGITS_WIDTH'				=> 'Larghezza cifre',
	'COUNTER_DIGITS_WIDTH_EXPLAIN'		=> 'Larghezza delle cifre',
	'COUNTER_DIGITS_HEIGHT'				=> 'Altezza cifre',
	'COUNTER_DIGITS_HEIGHT_EXPLAIN'		=> 'Altezza delle cifre',
	'COUNTER_DISPLAY_IMAGE'				=> 'Visualizza immagini',
	'COUNTER_DISPLAY_NONE'				=> 'Non visualizzare',
	'COUNTER_DISPLAY_STATS'				=> 'Visualizza statisti contatore',
	'COUNTER_DISPLAY_STATS_EXPLAIN'		=> 'Permetti la visualizzazione delle statistiche del contaore',
	'COUNTER_DISPLAY_TEXT'				=> 'Visualizza come testo',
	'COUNTER_BLOCK_IP'					=> 'Permetti il blocco degli IP',
	'COUNTER_BLOCK_IP_EXPLAIN'			=> 'Abilita monitoraggio/blocco degli indirizzi IP per il contatore. Questa opzione potrà funzionare correttamente se gli utenti aggiorneranno il loro browser al di sotto del tempo fissato nei campi di sotto.',
	'COUNTER_BLOCK_TIME'				=> 'Tempo blocco IP',
	'COUNTER_BLOCK_TIME_EXPLAIN'		=> 'Numero di secondi per monitoraggio/blocco di ogni indirizzo IP.',
	'COUNTER_IP_LOGFILE'				=> 'IP log file',
	'COUNTER_IP_LOGFILE_EXPLAIN'		=> 'Percorso del log IP nel tuo phpBB, es. <samp>images/counter/ip.txt</samp>. Richiede che sia abilitato l’opzione per abilitare il blocco degli indirizzo IP.',

	'SELECT_COUNTER_DISPLAY_MODE'			=> 'Modo visualizzazione contatore',
	'SELECT_COUNTER_DISPLAY_MODE_EXPLAIN'	=> 'Seleziona il modo di visualizzazione per il contatore. <br /><strong>Nota</strong>: Puoi <strong>sempre</strong> cliccare/attivare <strong>mostra immaggini</strong> o <strong>Visualizza come testo</strong>, prima di salvare le modifiche.',

    'PORTAL_SHOW_LAST_NEWS'               	=> 'Ordinamento news messaggi',
    'PORTAL_SHOW_LAST_NEWS_EXPLAIN'       	=> 'Si = Ultimo messaggio/replica primo <br />No = Primo argomento per primo.',

// corrected/added since 0.2
    'PORTAL_SHOW_TOOL_TIPS'           			=> 'Vuoi visualizzare suggerimenti',
    'PORTAL_SHOW_TOOL_TIPS_EXPLAIN'   			=> 'Vuoi visualizzare suggerimenti nel forum Si/No?',

	// pagination
    'ACP_PORTAL_ANNOUNCE_PAG_SETTINGS' => 'Configurazione paginazione annunci',
    'ACP_PORTAL_NEWS_PAG_SETTINGS'     => 'Configurazione paginazione annunci',

    'PORTAL_PAG_REPOSITORY'            => 'Repository articoli',
    'PORTAL_PAG_REPOSITORY_EXPLAIN'    => 'Vuoi visualizzare paginazione Si/No? <br /><br /> Se abiliti i numeri degli articoli, puoi visualizzare l’ultimo articolo nel blocco.',
    'PORTAL_PAG_PERMISSIONS'           => 'Permessi paginazione',
    'PORTAL_PAG_PERMISSIONS_EXPLAIN'   => 'Attiva permessi Si/No?',
    'PORTAL_PAG_SHOW_ALL'              => 'Vuoi visualizzare tutti i tipi di messaggi',
    'PORTAL_PAG_SHOW_ALL_EXPLAIN'      => 'Vuoi visualizzare tutti i messaggi Si/No? <br /><br />Tutti i tipi di articoli come gli annunci, annunci globali, importanti e normali saranno considerati nella sezione articoli. La sezione annunci sarà conteggiata negli annunci globali e annunci normali.',

));

?>
