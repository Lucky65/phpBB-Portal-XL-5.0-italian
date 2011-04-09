<?php
/** 
*
* @name portal_xl.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_xl.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
* @copyright (c) 2007, 2009  Portal XL Group
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/09/05
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
	'PORTAL'			=> 'Portale',
	'PORTAL_INDEX'		=> 'Indice portale',
	'ANNOUNCMENTS'		=> 'Annunci',
	'NEWS'			    => 'Articoli',
	'POLL'			    => 'Sondaggi',
	'NO_POLL'			=> 'Nessun sondaggio disponibile',
	'READ_FULL'			=> 'Leggi tutto',
	'NO_NEWS'			=> 'Nessun articolo',
	'POSTED_BY'			=> 'Autore',
	'COMMENTS'			=> 'Risposte',
	'VIEW_COMMENTS'		=> 'Leggi risposte',
	'POST_REPLY'		=> 'Scrivi risposta',
	'CLOCK'				=> 'Orologio',
	'TOPIC_VIEWS'		=> 'Letture',
	'FORUMS'		    => 'Forums',
	'EXPAND'		    => 'Espandi',
	'COLLAPSE'		    => 'Comprimi',
	'INVERT'		    => 'Inverti',
	'LEFTCOL'		    => 'Sinistra +/-',
	'RIGHTCOL'		    => 'Destra +/-',

	// who is online
	'WIO_TOTAL'			=> 'Totale',
	'WIO_REGISTERED'	=> 'Registrati',
	'WIO_HIDDEN'		=> 'Nascosti',
	'WIO_GUEST'			=> 'Ospiti',
	//'RECORD_ONLINE_USERS'=> 'View record: <strong>%1$s</strong><br />%2$s',

	// welcome
	'WELCOME'			=> 'Benvenuto',
	
	// mp3 player
	'MEDIA_PLAYER'			=> 'Media player',
	'MEDIA_PLAYER_POPUP'	=> 'Media player',
	'MEDIA_UPLOAD'			=> 'Aggiungi media',
	'MEDIA_PLAYER_VERSION'	=> 'Media Player 2009',

	// user menu
	'USER_MENU'			=> 'Menu utente',
	'UM_LOG_ME_IN'		=> 'Ricordami',
	'UM_HIDE_ME'		=> 'Nascondimi',
	'UM_MAIN_SUBSCRIBED'=> 'Sottoscrizioni',
	'UM_BOOKMARKS'		=> 'Preferiti',

	// statistic
	'ST_NEW'				=> 'Articoli',
	'ST_NEW_POSTS'			=> 'Messaggi',
	'ST_NEW_TOPICS'			=> 'Argomenti',
	'ST_NEW_ANNS'			=> 'Annunci',
	'ST_NEW_STICKYS'		=> 'Importanti',
	'ST_TOP'				=> 'Totale',
	'ST_TOP_ANNS'			=> 'Annunci',
	'ST_TOP_STICKYS'		=> 'Importanti',
	'ST_TOT_ATTACH'			=> 'Allegati',
	'ST_TOT_FILES'			=> 'Files',
	'ST_PORTAL_STARTDATE'	=> 'Data inizio',

	'FILES_ATTACHMENTS'		=> 'Statistiche allegati',
	'FILES_PER_DAY'			=> 'Allegati per giorno',
	'FILES_PER_POST'		=> 'Allegati per messaggio',
	'FILES_PER_TOPIC'		=> 'Allegati per argomento',
	'FILES_PER_USER'		=> 'Allegati per utente',

	// visit counter
	'ST_TOT_VISIT'				=> 'Totale visite',
	'ST_LAT_VISIT'				=> 'Tuo IP',

	// attachments
	'TOP_COUNT'         		=> 'Scaricato',
	'TOP_DATE'         			=> 'Scritto il',
	'TOP_FILENAME'         		=> 'Files',
	'TOP_FILESIZE'         		=> 'Dimensione',
	'TOP_TEL'         			=> 'Top Downloads',
	'TOP_X'         			=> 'Volte',
	'VIEW_TOPIC_ATTACHMENTS' 	=> 'Totale allegati',

	// search
	'SH'		=> 'Vai',
	'SH_SITE'	=> 'Forums',
	'SH_POSTS'	=> 'Messaggi',
	'SH_AUTHOR'	=> 'Autore',
	'SH_ENGINE'	=> 'Ricerca',
	'SH_ADV'	=> 'Ricerca avanzata',
	
	// recent
	'RECENT_TOPIC'		=> 'Messaggi recenti',
	'RECENT_ANN' 		=> 'Annunci',
	'RECENT_HOT_TOPIC' 	=> 'Risposte recenti',
	'LAST_REPLIED'      => 'Ultima risposta',
   	'BY'            	=> 'Da',
   	'ON'            	=> 'Il',
   
	// random member
	'RND_MEMBER'	=> 'Numero casuale',
	'RND_JOIN'		=> 'Registrato',
	'RND_POSTS' 	=> 'Messaggi',
	'RND_OCC' 		=> 'Occupazione',
	'RND_FROM' 		=> 'Località',
	'RND_WWW' 		=> 'Sito Web',

	// random banners
	'RND_B_BANNERS'	=> 'Links casuali', // normal banners (88x31) on portal
	'RND_H_BANNERS'	=> 'Banner casuale', // horizontal banners ( ) on portal
	'RND_V_BANNERS'	=> 'Banner casuale', // vertical banners (130x600) on portal
	
	// random member
	'GOOGLE_ADDS'		=> 'Pubblicità Google-Partner',
	'GOOGLE_ADDS_TXT'	=> 'Inserisci qui la tua pubblicità!',

	// most poster
	'MOST_POSTER' => 'Top autori',

	// links
	'LINKS' => 'Links',

	// latest members
	'LATEST_MEMBERS' => 'Ultimi utenti',

	// make donation
	'DONATION' 		=> 'Fai una donazione',
	'DONATION_TEXT' => 'Siamo un sito senza scopo di lucro, ma se vuoi sostenere il nostro progetto, il costo del server, la banda utilizzata, il dominio etc., puoi aiutarci con una piccola donazione.',
	'PAY_MSG'		=> 'Seleziona la cifra che vuoi donare e prosegui cliccando su PayPal.',
	'PAY_ITEM' 		=> 'Fai una donazione', // paypal item
	'CURRENCY_MSG' 	=> 'Scegli valuta: ',
	'AMOUNT_MSG' 	=> 'Scegli quanto vuoi donare: ',
	'CLICK_MSG' 	=> 'Clicca per fare una donazione',

	// main menu
	'M_MENU' 		=> 'Menu',
	'M_CONTENT' 	=> 'Contenuto',
	'M_ACP' => 'ACP', // nome breve
    'M_MCP' => 'MCP', // nome breve
	'M_HELP' 		=> 'Aiuto',
	'M_BBCODE' 		=> 'BBCode FAQ',
	'M_TERMS' 		=> 'Termini di servizio',
	'M_PRV' 		=> 'Privacy policy',
	'M_SEARCH' 		=> 'Cerca',

	// link us
	'LINK_US' 		=> 'Linkaci',
	'LINK_US_TXT' 	=> 'Inserisci sul tuo sito un link a <strong>%s</strong>. Usa il seguente codice HTML:',

	// friends
	'FRIENDS'				=> 'Amici',
	'FRIENDS_OFFLINE'		=> 'Offline',
	'FRIENDS_ONLINE'		=> 'Online',
	'NO_FRIENDS'			=> 'Non risultano amici definiti',
	'NO_FRIENDS_OFFLINE'	=> 'Nessun amico offline',
	'NO_FRIENDS_ONLINE'		=> 'Nessun amico online',
	
	// last bots
	'LAST_VISITED_BOTS'		=> 'Ultima visita bots %s',
	
	// wordgraph
   	'WORDGRAPH'				=> 'Paroliere',
   
	// change style
   	'BOARD_STYLES'			=> 'Stile forum',
   	'VIEW_STYLES'			=> 'Vedi stili',
   	'TOTAL_STYLES'			=> 'Stili disponibili',
    'STYLE_SELECT'          => 'Seleziona stile',
	
	// team
	'NO_ADMINISTRATORS_P'	=> 'Nessun amministratore',
	'NO_MODERATORS_P'		=> 'Nessun moderatore',

	// chatbox
    'CHAT'                  => 'Chatbox',
	'VIEWING_CHAT'          => 'Vedi chatbox',
	'CHAT_EXPLAIN'			=> 'Chat centrale',

	// weather
   	'PORTAL_WEATHER'         => 'Meteo',

	// syndicate
   	'PORTAL_SYNDICATE'       => 'Info',

	// navx
   	'PORTAL_NAVX'            => 'Naviga-X',

	// last visitors
   	'L_LAST_VISIT' 			=> 'Gli ultimi %s utenti registrati',

   	// Visit Counter
   	'VISIT_COUNTER_1' 		=> 'Questo sito ha avuto <b>%d</b> visite totali dal %s',
	'VISIT_COUNTER_2'		=> 'Questo sito ha avuto <b>%d</b> visite totali dal 10 Gennaio 2009',
	'VISIT_COUNTER_3'		=> 'Questo sito ha avuto <b>%d</b> pagine visitate dal %s',
   	'VISIT_COUNTER' 		=> 'Contatore visite',

   	// gallery
   	'L_GALLERY'         	=> 'Galleria immaggini',

   	// forum categories
	'FCATEGORIES'			=> 'Categorie Forum',
	
	// actual topics scroll block
	'RECENT_ACTUAL_TOPIC'		=> 'Argomenti recenti',
	'RECENT_ACTUAL_ANN' 		=> 'Annunci recenti',
	'RECENT_ACTUAL_HOT_TOPIC' 	=> 'Argomenti popolari recenti',
    'RECENT_ACTUAL_ANN_NO'      => 'Spiacente, non sono stati trovati annunci',
	 	
   	// similar topics
	'SIMILAR_TOPICS'			=> 'Argomenti simili',
	
   	// downloads
	'L_DOWNLOADS'				=> 'Downloads gratuiti',

   	// jumpbox RC4
	'RETURN_TO_SEARCH_ADV'	    => 'Ritorna alla ricerca avanzata',
	'RETURN_TO'					=> 'Ritorna a',
	
   	// php info
	'PHP_INFO_EXPLAIN'			=> 'Info Server',
	'DATABASE_SERVER_INFO'		=> 'Database Server',
	'GZIP_COMPRESSION'			=> 'Compressione Gzip ',
	'OFF'						=> 'Spento',
	'ON'						=> 'Il',
	'OS_INFO'					=> 'Sistema operativo',
	'PHP_INFO'					=> 'Script compiler',
	'WEBSERVER_INFO'			=> 'Tipo webserver',
	
    //Last Visit MOD
	'LAST_VISITS'				=> 'Ultime visite',
	'NO_LASTVISIT_USERS' 		=> 'Nessuno',
	
	'GUEST_VISITS_TOTAL'			=> '%d ospiti',
	'GUEST_VISITS_ZERO_TOTAL'	=> '0 ospiti',
	'GUEST_VISIT_TOTAL'			=> '%d ospite',

	'HIDDEN_VISITS_TOTAL'		=> '%d nascosti e ',
	'HIDDEN_VISITS_ZERO_TOTAL'	=> '0 nascosti e ',
	'HIDDEN_VISIT_TOTAL'		=> '%d nascosti e ',

	'LASTVISIT_VISITS_TOTAL'		=> 'Nelle ultime 24 ore ci hanno visitato in totale <strong>%d</strong> utenti :: ',
	'LASTVISIT_VISITS_ZERO_TOTAL'	=> 'Nelle ultime 24 ore ci hanno visitato in totale <strong>0</strong> utenti :: ',
	'LASTVISIT_VISIT_TOTAL'			=> 'Nelle ultime 24 ore ci hanno visitato in totale <strong>%d</strong> utenti :: ',
	
	'REG_VISITS_TOTAL'			=> '%d registrati, ',
	'REG_VISITS_ZERO_TOTAL'		=> '0 registrati, ',
	'REG_VISIT_TOTAL'			=> '%d registrati, ',

    // quotes
	'QUOTES_INFO'			    => 'Citazione del giorno',

    // partners
	'PARTNERS_INFO'			    => 'Affiliati',

    // scroll message
    'SCROLL_MESSAGE' 			=> 'Messaggio informativo',

    // crawler linker
    'CRAWLER_LINKS_TOTAL' 		=> 'Links totali crawler',
    'CRAWLER_LINKS' 			=> 'Crawler Feeds',

    // portal mods
	'MODS_DATABASE'				=> 'Mods Database',
	'MODS_DATABASE_EXPLAIN'		=> 'Qui puoi gestire il tuo database mods. Aggiungere, Modificare o Cancellare Mods dal tuo database.',
	'MOD_ADD'					=> 'Aggiungi Mod',
	'MOD_ADDED'					=> 'Nuova Mod aggiunta al database.',
	'MOD_DELETED'				=> 'Mod cancellata con successo.',
	'MOD_EDIT'					=> 'Modifica Mods',
	'MOD_EDIT_EXPLAIN'			=> 'Qui puoi aggiungere o modificare una mod esistente. Il titolo e la versione sono necessari. Devi anche aggiungere i dettagli informativi della mod e dove è possibile scaricarla.',
	'BOT_NAME'					=> 'Nome bot',
	'BOT_NAME_EXPLAIN'			=> 'Usato solo per tua informazione.',
	'MOD_NAME_TAKEN'			=> 'Il titolo è già in uso nel database, non puoi usare questo, prova con un nuovo titolo.',
	'MOD_UPDATED'				=> 'Aggiornamento mod eseguito.',
	'ERR_MOD_NO_MATCHES'		=> 'Devi fornire almeno il titolo e la versione del mod per questa voce',
	'NO_MOD'					=> 'Non sono stati trovate mods con questo ID.',
	'MOD_TITLE'					=> 'Titolo mod',
	'MOD_VERSION'				=> 'Versione',
	'MOD_VERSION_TYPE'			=> 'Tipo versione',
	'MOD_VERSION_TYPE_EXPLAIN'	=> 'Beta, Alpha, Dev o RC*',
	'MOD_DESC'					=> 'Descrizione',
	'MOD_AUTHOR'				=> 'Autore',
	'MOD_URL'					=> 'URL Mod',
	'MOD_VISIT_WEBSITE'			=> 'Link URL dove la mod è pubblicata',
	'MOD_DOWNLOAD_MOD'			=> 'Link dove la mod può essere scaricata',
	'MOD_LIST_MOD'				=> '1 Mod installata',
	'MOD_LIST_MODS'				=> '%s Mods installate',
	'SORT_MOD_TITLE'			=> 'Ordinamento titolo mod',
	'SORT_MOD_VERSION'			=> 'Ordinamento versione mod',
	'SORT_MOD_VERSION'			=> 'Ordinamento versione mod',
	'SORT_MOD_AUTHOR'			=> 'Ordinamento autore mod',
   	'VIEWING_PORTAL'			=> 'Stà guardando il portale',
	'DOWNLOAD_MOD'				=> 'Download',

	// Portal Pages
  	'PAGES_LIST_TITLE' 			=> 'Pagine portale',
  	'PAGES_NOT_EXIST' 			=> 'Questa pagina non esiste.',
  	'PAGES_NONE_EXIST' 			=> 'Nessuna pagina esistente.',
  	'PAGES_QUERY_FAILED' 		=> 'Impossibile ottenere query pagine.',
  	'PAGES_VIEW_FULL' 			=> 'Vedi pagine portale',

	// Boardwide definitions for RSS 2 links
  	'RSS_FEED_FORUM' 			=> 'RSS 2 Feed Forum',
  	'RSS_FEED_ATTACHMENTS' 		=> 'RSS 2 Feed Allegati',
	'RSS_FEED_DOWNLODS' 		=> 'RSS 2 Feed Downloads',
	'RSS_FEED_KB' 				=> 'RSS 2 Feed Guida Base',
	'RSS_FEED_GALLERY' 			=> 'RSS 2 Feed Galleria',
	'RSS_FEED_ARCADE' 			=> 'RSS 2 Feed Arcade',
	'RSS_FEED_VIDEO'            => 'RSS 2 Feed Video',

	// corrected/added since 0.4B5 
	'NO_ANNOUNCEMENTS'			=> 'Nessun annuncio',
	'FILEBASE_TITLE_VISIT'		=> 'Visite file base',
   	'LAST_ON' 				    => 'Ultima visita', // ajax userinfo
  	'RSS_FEEDS' 				=> 'RSS Info',

	// corrected/added since RC1
	'OPEN_CLOSE_COLUMNS'		=> 'Apri-Chiudi tutte le colonne',
	
	// corrected/added since RC2 below
	'ACRONYM'					=> 'Acronimi',
	'ACRONYMS'					=> 'Acronimi e abbrevazioni',
	'ACRONYM_TOTAL'				=> 'Totale acronimi nel database',
	'ACRONYM_REPLACEMENT'		=> 'Descrizione acronimi',
	'ACRONYM_URL'		        => 'Url download',
	'TOTAL_FILES_COUNT'			=> 'Totale files nel database',
	'ST_TOT_ACTIVE_POSTERS'		=> 'Autori attivi',
	'ST_TOT_ATTACH_SIZE'		=> 'Allegati',
	'ST_TOT_FILES_SIZE'			=> 'Dimensione',
	'ST_TOT_ACRONYM'			=> 'Acronimi',
	'ST_TOT_FLAGS'				=> 'Bandiere',
	'ST_TOT_PICTURES'			=> 'Immaggini',
	'ST_TOT_KB_ARTICLES'		=> 'Articoli',
	'ST_TOT_POSTS'				=> 'Messaggi',
	'ST_TOT_TOPICS'				=> 'Argomenti',
	'ST_TOT_CHAT_USERS'			=> 'Utenti in chat',
	'ST_TOT_THANKS_USERS'		=> 'Ringraziamenti',	

	 // gender statistics
	'USER_GENDERS'				=> 'Sesso utenti',
	'USERS_WITH_GENDER'			=> 'Utenti che hanno specificato genere sessuale',
	'MALE_FEMALE_RATIO'			=> 'Rapporto Maschi-Femmmine',
	'MALE_COUNT'				=> 'Utenti maschi',
	'FEMALE_COUNT'				=> 'Utenti femmine',
	
	'IMG_SIZE_ALTERED'			=> 'Le immaggini potranno essere modificate per adattarsi in una nuova finestra.<br /> Clicca per aprirla nella dimensione originale.',
	'RETURN_PORTAL'				=> '%sRitorna al portale%s',
	'KB_RECENT_ARTICLES'		=> 'Guida Base articoli recenti',
	'FILEBASE_TITLE'			=> 'File base',

	// corrected/added since RC3 below
	'IMPORTANT_NEWS'			=> 'Annunci globali',
   	'TOTAL_NEWS'				=> 'Totale articoli',
   	'TOTAL_ANNOUNCEMENTS'		=> 'Totale annunci',
   	'NO_PICS'					=> 'Nessuna immagine disponibile',

	// corrected/added since RC4 below
	// Recent Topics
	'RECENT_SHOWING_POSTS'		=> 'Messaggi recenti:',
	'RECENT_SELECT_MODE'		=> 'Seleziona modo',
	'RECENT_TOPICS'				=> 'Argomenti recenti',
	'RECENT_TODAY'				=> 'Oggi',
	'RECENT_YESTERDAY'			=> 'Ieri',
	'RECENT_LAST24'				=> 'Ultime 24 ore',
	'RECENT_LASTWEEK'			=> 'Ultima settimana',
	'RECENT_DAYS'				=> 'Giorni',
	'RECENT_LASTXDAYS'			=> 'Ultimi %s giorni',
	'RECENT_LAST'				=> 'Ultimo',
	'RECENT_FIRST'				=> 'Iniziato il %s',
	'RECENT_FIRST_POSTER'		=> ' da %s',
	'RECENT_SELECT_MODE'		=> 'Seleziona modo:',
	'RECENT_TITLE_ONE'			=> '<font size=4>%s</font> argomento %s', // %s = topics; %s = sort method
	'RECENT_TITLE_MORE'			=> '<font size=4>%s</font> argomenti %s', // %s = topics; %s = sort method
	'RECENT_TITLE_TODAY'		=> ' da oggi',
	'RECENT_TITLE_YESTERDAY'	=> ' da ieri',
	'RECENT_TITLE_LAST24'		=> ' ultime 24 ore',
	'RECENT_TITLE_WEEK'			=> ' ultima settimana',
	'RECENT_TITLE_LASTXDAYS'	=> ' ultimo giorno %s', // %s = days
	'RECENT_NO_TOPICS'			=> 'Nessun argomento trovato.',
	'RECENT_WRONG_MODE'			=> 'Hai selezionato un modo errato.',
	'RECENT_CLICK_RETURN'		=> 'Clicca %squi%s per tornare all’ultimo sito.',
	'TOTAL_RECENT_TOPICS'		=> '%s argomenti recenti trovati',

	// corrected/added since 0.2 
	'NO_IMPORTANT_NEWS'			=> 'Non ci sono annunci',
	'GOOGLE_BACK_TO_ENGLISH'	=> 'Invio',
	'FORUM_STYLE'				=> 'Stile forum',
	'BACK_TO_TOP'			    => 'Sù',
	'BACK_TO_BOTTOM'		    => 'Giù',

    // wordgraph
   	'BBCODETAGS'				=> 'bbCode Tags',
	   
   // change language
      'BOARD_LANGUAGE'         => 'Lingua forum',
      'VIEW_LANGUAGE'          => 'Vedi linguaggio',
      'TOTAL_LANGUAGE'         => 'Lingue disponibili',
      'LANGUAGE_SELECT'        => 'Seleziona lingua',


	
   // phpBB Gallery
     'RANDOM_PIC'             => 'Immagini casuali',
     'TOTAL_IMAGES'           => 'Totale immagini ',
     'TOTAL_PICVIEW'          => 'viste, ',
     'TOTAL_RATEPOINT'        => 'voti, ',
     'TOTAL_PICVOTES'         => 'punteggi.',
     'NEWEST_PIC'             => 'Nuova immagine',
     'NEWEST_PICS'            => 'Nuove immagini',
     'PIC_TITLE'              => 'Titolo',
     'PIC_RECEIVED'           => 'Ricevuto',
     'PIC_POSTER'             => 'Autore',
     'LOGIN_LOGOUT_GALLERY'   => 'Loggati per vedere le immagini',
     'PIC_COMMENTS'           => 'Commenti',
     'NEW_PIC_COMMENTS'       => 'nuovi commenti',
     'NO_NEW_PIC_COMMENTS'    => 'nessun commento',
     'RECENT_PUBLIC_PICS'     => 'Immagini recenti',

	 // portal i18n widgets/blocks
   	'WIDG_EDIT_TEXT'			=> 'Modifica',
   	'WIDG_CLOSE_TEXT'			=> 'Chiudi',
   	'WIDG_EXTENT_TEXT'			=> 'Estendi',
   	'WIDG_COLLAPSE_TEXT'		=> 'Sposta',
   	'WIDG_CANCEL_TEXT'		    => 'Cancella',
	'WIDG_EDIT'					=> 'Modifica questo blocco',
	'WIDG_CLOSE'				=> 'Chiudi questo blocco',
	'WIDG_REMOVE'				=> 'Vuoi eliminare questo blocco?',
	'WIDG_CANCEL'				=> 'Cancella modifica',
	'WIDG_EXTENT'				=> 'Estendi questo blocco',
	'WIDG_COLLAPSE'				=> 'Sposta questo blocco',
 
  // Highslide JS
   'HIGHSLIDE_LOADINGTEXT'      => 'Caricamento...',
   'HIGHSLIDE_LOADINGTITLE'   => 'Clicca per cancellare',
   'HIGHSLIDE_FOCUSTITLE'      => 'Clicca sul pulsante per portare in primo piano',
   'HIGHSLIDE_FULLEXPANDTITLE'   => 'Espandi alla dimensione attuale',
   'HIGHSLIDE_FULLEXPANDTEXT'   => 'Dimensione piena',
   'HIGHSLIDE_CREDITSTEXT'		=> 'Powered by <i>Highslide JS</i>',
   'HIGHSLIDE_CREDITSTITLE'   => 'Vai su Highslide JS homepage',
   'HIGHSLIDE_PREVIOUSTEXT'   => 'Indietro',
   'HIGHSLIDE_PREVIOUSTITLE'   => 'Indietro (freccia sinistra)',
   'HIGHSLIDE_NEXTTEXT'      => 'Avanti',
   'HIGHSLIDE_NEXTTITLE'      => 'Avanti (freccia destra)',
   'HIGHSLIDE_MOVETITLE'      => 'Sposta',
   'HIGHSLIDE_MOVETEXT'      => 'Sposta',
   'HIGHSLIDE_CLOSETEXT'      => 'Chiudi',
   'HIGHSLIDE_CLOSETITLE'      => 'Chiudi (esci)',
   'HIGHSLIDE_RESIZETITLE'      => 'Ridimensiona',
   'HIGHSLIDE_PLAYTEXT'      => 'Carica',
   'HIGHSLIDE_PLAYTITLE'      => 'Carica slideshow (barra spaziatrice)',
   'HIGHSLIDE_PAUSETEXT'      => 'Pausa',
   'HIGHSLIDE_PAUSETITLE'      => 'Pausa slideshow (barra spaziatrice)',
   'HIGHSLIDE_NUMBER'         => 'Immagini %1 di %2',
   'HIGHSLIDE_RESTORETITLE'   => 'Clicca per chiudere, clicca e muovi il mouse per spostare. Usa le freccie per avanti o indietro.',

   // Signatures, use short words as the space is limited
   'SIG_STATISTICS_FOR'      => 'Statistiche per',
   'SIG_PHPBB_VERSION'         => 'Versione phpBB:',
   'SIG_PORTALXL_VERSION'      => '- Versione Portal XL:',
   'SIG_MEMBERS'            => 'Iscritti:',
   'SIG_ONLINE'            => 'Online:',
   'SIG_DOMAIN'            => '- Tuo IP:',
   'SIG_TOTAL_POSTS'         => 'Totale messaggi:',
   'SIG_POSTS_IN'            => 'messaggi in',
   'SIG_TOPICS'            => 'argomenti',
   'SIG_TOPICS_CAPS'         => 'Argomenti:',
   'SIG_NEWEST_MEMBER'         => 'Ultimo iscritto:',
   'SIG_WELCOME_BACK'         => 'Benvenuto',
   'SIG_RANK'               => 'Livello:',
   'SIG_POSTS'               => 'Messaggi:',
   'SIG_MEMBER_FOR'         => 'Utente da',
   'SIG_POST_PERCENTAGE'      => 'Percentuale messaggi:',
   'SIG_LAST_VISITED'         => 'Ultima visita:',
   'SIG_AGE'					=> 'Nome e compleanno:',
   'SIG_DAYS'					=> 'giorni',
   'SIG_TIMEPLAYED'			=> 'Tempo giocato : ',
   'SIG_USERWINS'				=> 'Totale Vincite : ',
   'SIG_TOTALGAMES'			=> 'Giochi : ',
   'SIG_GAMESPLAYED'			=> 'Totale Partite : ',
	
	 // 06-10-2009 new entries portal pages
	'TOTAL_PAGE_PAGES'		    => 'Totale pagine',

	// Thanks
	'MOST_THANKS'				=> 'I più ringraziati',
	'THANK_GIVEN'				=> 'Out',
	'THANK_RECEIVED'			=> 'In',
	
	// Gender posts
	'ST_TOT_MALE_GENDER_POSTS'	=> 'Messaggi maschi',
	'ST_TOT_FEMALE_GENDER_POSTS'=> 'Messaggi femmine',
	'ST_TOT_UNDEF_GENDER_POSTS'	=> 'Messaggi sesso indefinito',
	// Show voters         
   'TOTAL_HAVE_VOTED'         => 'Voti utenti',
   
   // Ranks page      
    'NO_RANKS'        => 'Nessun livello installato su questo forum.',
    'RANKS_TITLE'     => 'Lista livelli',
    'RANK_EDIT'       => 'Modifica livello',
    'RANKS'           => 'Pagina livelli',
    'RANK_ID'         => '#',
    'RANK_TITLE'      => 'Titolo livello',
    'RANK_MIN'        => 'Messaggi minimi',
    'RANK_IMAGE'      => 'Immagine livello',
    'RANK_COUNT'      => '1 livello installato',
    'RANK_COUNT'      => '%s livelli installati',
   
   // Smiles page      
    'NO_SMILES'       => 'Nessun smiles installato su questo forum.',
    'SMILES_TITLE'    => 'Lista smiles',
    'SMILEY_ID'       => '#',
    'SMILEY_CODE'     => 'Codice smiley',
    'SMILEY_IMG'      => 'Immagine smiley',
    'SMILEY_DESC'     => 'Descrizione smiley',
    'SMILIEY_COUNT'   => '1 smile installato',
    'SMILIEY_COUNT'   => '%s smiles installati',
	
  // Guest Hide BBCode MOD   
   'HIDE_REG'       => 'Disponibile solo agli utenti registrati.',
   'HIDE_ON'       => '<strong>Testo nascosto</strong>: attivato',
   'HIDE_OFF'       => '<strong>Testo nascosto</strong>: disattivato',
  
	// phpBB AJAX Chat
	'SHOUTBOX'		=> 'Chat',
	'CHAT_LABEL'	=> 'In chat',
	'CHAT_TITLE'	=> 'Online',
	'CHAT_WINDOW'	=> 'Finestra chat',
	// phpBB AJAX Chat
	
	// script welcome message login block
   'WELCOME_MORNING'   => 'Buon giorno ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']) . '!',
   'WELCOME_AFTERNOON'   => 'Buon pomeriggio ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']). '!',
   'WELCOME_EVENING'   => 'Buona sera ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']) . '!',
   'WELCOME_GENERAL'   => 'Benvenuto @ ' . $config['sitename'] . ' ',
 	// script welcome message login block
	
	// SEO meta keyword dispaly in viewtopic		
	'COMMON_SEARCH_TERMS'	=> 'Parole chiavi per questo argomento',
	// Naviagtion pop-up menu entries      
   'LOGIN_PORTAL_INFO'          => 'Per poter accedere al sito è necessario essere registrati. Tieni presente che che per utilizzare la maggior parte delle funzioni di questo sito è necessario essere registrati. L’amministratore può anche concedere ulteriori autorizzazioni agli utenti registrati. Assicurati di leggere le regole del forum e come utilizzarlo al meglio.',
   'LOGIN_MORE_PORTAL_INFO'   => 'Altre informazioni di login...',
   'LOGOUT_PORTAL_INFO'      => 'Assicurati di controllare questo sito il più spesso possibile. Ci saranno la pubblicazione delle modifiche e integrazioni effettuate durante la settimana. Grazie per il vostro tempo visitando ' . $config['sitename'] . ', ci auguriamo che lo aggiungerai tra i tuoi preferiti!',
   'LOGOUT_MORE_PORTAL_INFO'   => 'Altre informazioni di logout...',
   // Reset closed/deleted blocks to default state
   'PORTAL_RESET_BLOCKS'      => 'Azzera blocchi',
   'PORTAL_WIDGET_STATES'      => 'Stato widget',
   'PORTAL_OPEN_COLUMNS'      => 'Mostra tutte le colonne',
   'PORTAL_CLOSE_COLUMNS'      => 'Nascondi tutte le colonne',
   'PORTAL_OPEN_MENUS'          => 'Mostra menu widgets',
   'PORTAL_CLOSE_MENUS'      => 'Nascondi menu widgets',
   // Viewtopic user information dropdown
    'USERS_INFORMATION'                     => 'Informazioni utente',
	// Paypal Currencies
   'PAYPAL_CURRENCY_GBP'      => 'Pounds Sterling (GBP)',
   'PAYPAL_CURRENCY_USD'      => 'U.S. Dollars (USD)',
   'PAYPAL_CURRENCY_EUR'      => 'Euro (EUR)',
   'PAYPAL_CURRENCY_AUD'      => 'Australian Dollars (AUD)',
   'PAYPAL_CURRENCY_CAD'      => 'Canadian Dollars (CAD)',
   'PAYPAL_CURRENCY_CZK'      => 'Czech Koruna (CZK)',
   'PAYPAL_CURRENCY_DKK'      => 'Danish Kroner (DKK)',
   'PAYPAL_CURRENCY_HKD'      => 'Hong Kong Dollars (HKD)',
   'PAYPAL_CURRENCY_HUF'      => 'Hungarian Forint (HUF)',
   'PAYPAL_CURRENCY_NZD'      => 'New Zealand Dollars (NZD)',
   'PAYPAL_CURRENCY_NOK'      => 'Norwegian Kroner (NOK)',
   'PAYPAL_CURRENCY_PLN'      => 'Polish Zlotych (PLN)',
   'PAYPAL_CURRENCY_SGD'      => 'Singapore Dollars (SGD)',
   'PAYPAL_CURRENCY_SEK'      => 'Swedish Kronor (SEK)',
   'PAYPAL_CURRENCY_CHF'      => 'Swiss Francs (CHF)',
   'PAYPAL_CURRENCY_JPY'      => 'Yen (JPY)',
	
 	// bbCodes page		
    'NO_BBCODES'       			=> 'Nessun BBCode installato su questo forum.',
    'BBCODES_TITLE'    			=> 'Elenco BBCodes',
    'BBCODE_ID'       			=> '#',
    'BBCODE_DISPLAY'       		=> 'Attivo',
    'BBCODE_CODE'     			=> 'Uso del BBCode',
    'BBCODE_TPL'     			=> 'Trasforma in HTML',
    'BBCODE_HELP'     			=> 'Aiuto in linea',
    'BBCODE_ICON'     			=> 'Icona',
	'BBCODE_COUNT'	  			=> '1 BBCode installato',
	'BBCODE_COUNT'   			=> '%s BBCodes installati',
	
   // zodiac
   'ZODIAC'       			    => 'Zodiaci',
	
	/**
	* DO NOT REMOVE or CHANGE (text translation is allowed)!
	*/
	'PORTAL_COPY' 			=> '&copy; 2007, 2009 Portal XL Group, the original insane crazy Portal for phpBB3',
	'PORTAL_VERSION' 		=> 'Portal XL 5.0 ~ ',
	));

?>