<?php
/**
*
* toplist [Italian]
*
* version $Id: points.php 248 2009-07-28 02:22:43Z femu $
* copyright (c) 2009 WyriHaximus
* @copyright(c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/09/04
* license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if ( empty($lang) || !is_array($lang) )
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
// ’ » „ “ — …
//

$lang = array_merge($lang, array(
	'TOPLIST_EDIT' 										=> 'Modifica',
	'TOPLIST_DELETE' 									=> 'Cancella',
	'TOPLIST_RANK' 										=> 'Rank',
	'TOPLIST_SITE' 										=> 'Sito',
	'TOPLIST_HITS_IN' 									=> 'In',
	'TOPLIST_HITS_OUT' 									=> 'Out',
	'TOPLIST_HITS_IMG' 									=> 'Immagine',
	'TOPLIST' 											=> 'Toplist',
	'TOPLIST_SQL_ERROR' 								=> 'Errore eseguendo SQL query.',
	'TOPLIST_EDIT_WEBSITE' 								=> 'Modifica sito',
	'TOPLIST_ADD_WEBSITE' 								=> 'Aggiungi sito',
	'TOPLIST_NAME' 										=> 'Nome:',
	'TOPLIST_INFO' 										=> 'Info:',
	'TOPLIST_SITE_URL' 									=> 'URL sito:',
	'TOPLIST_BANNER_URL' 								=> 'URL banner:',
	'TOPLIST_RESEND_HTML' 								=> 'Inviami il codice HTML per email:',
	'TOPLIST_DISPLAYS_IMAGES' 							=> 'Visualizza immagini:',
	'TOPLIST_TOPLIST' 									=> 'Toplist',
	'TOPLIST_NO_ID' 									=> 'Nessun ID trovato!',
	'TOPLIST_NO_AUTH' 									=> 'Non sei autorizzato.',
	'TOPLIST_EDIT_DONE' 								=> 'Il tuo sito è stato aggiornato.<br />Devi attendere 60 secondi prima di vedere visibili le modifiche nella toplist.',
	'TOPLIST_DID_RESEND' 								=> 'Il codice html per la toplist è stato inviato alla tua email.',
	'TOPLIST_SITE_VIEW' 								=> 'Informazioni sito',
	'TOPLIST_PROCEED_TO_SITE' 							=> 'Continua con questo sito >>>',
	'TOPLIST_EDIT_SITES' 								=> 'Modifica siti',
	'TOPLIST_ADD_SITES' 								=> 'Aggiungi sito',
	'TOPLIST_LOGIN_EXP' 								=> 'Devi essere loggato per continuare.',
	'TOPLIST_ADD_DONE' 									=> 'Il tuo sito è stato aggiunto.<br />Il codice della toplist deve essere aggiunto sul tuo sito web, come è stato indicato nell’email che hai ricevuto all’inizio.<br />Aggiungi il codice HTML seguente sul tuo sito potrai così far votare ai visitatori del tuo sito!<br /><textarea name="textarea" cols="150" rows="2">%s</textarea>',
	'TOPLIST_ADD_DONE_EMAIL' 							=> "Ciao %1\$s,\n\nil tuo sito '%2\$s' è stato aggiunto alla toplist con successo. Aggiungi il codice HTML seguente sul tuo sito potrai così far votare ai visitatori del tuo sito!\n%3\$s\n%4\$s\n",
	'TOPLIST_DELETE_DONE' 								=> "Il tuo sito è stato cancellato.<br />Devi attendere 60 secondi prima di vedere visibili le modifiche nella toplist.",
	'TOPLIST_CONFIRM_DELETE' 							=> 'Cancellazione sito',
	'TOPLIST_CONFIRM_COMMENT_DELETE' 					=> 'Sei sicuro di voler cancellare questo commento?',
	'TOPLIST_CONFIRM_DELETE_CONFIRM' 					=> 'Sei sicuro di voler cancellare questo sito? Dopo averlo cancellato non potrai più tornare indietro!',
	'TOPLIST_COMMENT_NOT_DELETED' 						=> 'Il commento non è stato cancellato!',
	'TOPLIST_COMMENT_DELETED' 							=> 'Il commento è stato cancellato!',
	'TOPLIST_NOT_RATED_YET' 							=> 'Non ancora valutato.',
	'TOPLIST_RATING_COLL' 								=> 'Voti',
	'TOPLIST_BAD_AUTH' 									=> 'Fallita autenticazione hash!',
	'TOPLIST_RATING_DONE' 								=> 'Voto eseguito.',
	'TOPLIST_ALLREADY_RATED' 							=> 'Hai già votato per questo sito.',
	'TOPLIST_DISABLED' 									=> 'L’amministratore ha disabilitato la Toplist su questo forum.',
	'TOPLIST_DISABLED_RATING' 							=> 'L’amministratore ha disabilitato la votazione della Toplist su questo forum.',
	'TOPLIST_ADD_SITE' 									=> 'Aggiungi sito',
	'TOPLIST_PREVIEW' 									=> 'Anteprima (<a href="http://www.thumbshots.org" target="_blank" title="Anteprima by Thumbshots.org">by Thumbshots.org</a>)',
	'TOPLIST_RATE_THIS_SITE' 							=> 'Vota questo sito',
	'TOPLIST_NO_SITES_IN_TOPLIST' 						=> 'Nessun sito nella toplist.',
	'TOPLIST_NO_COMMENTS' 								=> 'Nessun commento trovato. Sei libero di commentarne uno!',
	'TOPLIST_SITE_OF_THE_MOMENT' 						=> 'Sito del momento',
	'TOPLIST_CHECK_CODE' 								=> 'Controlla il codice sul sito',
	'TOPLIST_ADMIN_TOPLIST_SETTINGS' 					=> 'Configurazione Toplist',
	'TOPLIST_ADMIN_ENABLE_TOPLIST' 						=> 'Attiva Toplist',
	'TOPLIST_ADMIN_ENABLE_TOPLIST_EXPLAIN' 				=> 'Abilita o disabilita l’intera toplist. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist">questa pagina</a>. Leggi prima di attivare questo mod!!!',
	'TOPLIST_ADMIN_ENABLE_RATINGS' 						=> 'Attiva votazioni',
	'TOPLIST_ADMIN_ENABLE_RATINGS_EXPLAIN' 				=> 'Abilita o disabilita il sistema di voti sulla toplist. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Rating">questa pagina</a>.',
	'TOPLIST_ADMIN_ENABLE_COMMENTS' 					=> 'Attiva commenti',
	'TOPLIST_ADMIN_ENABLE_COMMENTS_EXPLAIN' 			=> 'Abilita o disabilita i commenti sui siti. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Comments">questa pagina</a>.',
	'TOPLIST_ADMIN_ENABLE_SITE_THUMBNAILS' 				=> 'Attiva anteprime',
	'TOPLIST_ADMIN_ENABLE_SITE_THUMBNAILS_EXPLAIN' 		=> 'Abilita o disabilita le anteprime sui siti. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Thumbnails">questa pagina</a>.',
	'TOPLIST_ADMIN_ENABLE_PAGENATION' 					=> 'Attiva paginazione',
	'TOPLIST_ADMIN_ENABLE_PAGENATION_EXPLAIN' 			=> 'Abilita o disabilita paginazione per la diffusione su più di 2 pagine. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pagenation">questa pagina</a>.',
	'TOPLIST_ADMIN_SITES_PER_PAGE' 						=> 'Siti per pagina',
	'TOPLIST_ADMIN_SITES_PER_PAGE_EXPLAIN' 				=> 'Numero di siti per pagina. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pagenation">questa pagina</a>.',
	'TOPLIST_ADMIN_ANTI_FLOOD_WAIT_TIME' 				=> 'Tempo attesa Anti-Flood',
	'TOPLIST_ADMIN_ANTI_FLOOD_WAIT_TIME_EXPLAIN' 		=> 'Un visitatore può generare un ’hit’ entro un certo numero di secondi.<br /><i>Nota: Aggiungendo 0 il risultato sarà la disabilitazione del meccanismo anti-flood!!! Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Anti_Flood">questa pagina</a>.',
	'TOPLIST_ADMIN_ENABLE_HITS_IN' 						=> 'Attiva Hits In',
	'TOPLIST_ADMIN_ENABLE_HITS_OUT' 					=> 'Attiva Hits Out',
	'TOPLIST_ADMIN_ENABLE_HITS_IMAGE' 					=> 'Attiva Hits Immagine',
	'TOPLIST_ADMIN_ENABLE_PR' 							=> 'Attiva Google Pagerank',
	'TOPLIST_ADMIN_ENABLE_REFRESH' 						=> 'Attiva aggiornamento lista',
	'TOPLIST_ADMIN_ENABLE_REFRESH_EXPLAIN' 				=> 'Aggiorna la Toplist entro un certo tempo',
	'TOPLIST_ADMIN_REFRESH_TIME' 						=> 'Tempo aggiornamento (in secondi)',
	'TOPLIST_ADMIN_REFRESH_TIME_EXPLAIN' 				=> 'Tempo in secondi per l’aggiornamento',
	'TOPLIST_ADMIN_ENABLE_ALEXA' 						=> 'Attiva Alexa Rank',
	'TOPLIST_ADMIN_ENABLE_HITS_IN_EXPLAIN' 				=> 'Processa e visualizza nella hits.',
	'TOPLIST_ADMIN_ENABLE_HITS_OUT_EXPLAIN' 			=> 'Processa e visualizza out hits.',
	'TOPLIST_ADMIN_ENABLE_HITS_IMAGE_EXPLAIN' 			=> 'Processa e visualizza le immagini visualizzate.',
	'TOPLIST_ADMIN_ENABLE_PR_EXPLAIN' 					=> 'Processa Google Pagerank.',
	'TOPLIST_ADMIN_ENABLE_ALEXA_EXPLAIN' 				=> 'Processa Alexa Rank.',
	'TOPLIST_ADMIN_BANNER_WIDTH' 						=> 'Larghezza massima banner',
	'TOPLIST_ADMIN_BANNER_HEIGHT' 						=> 'Altezza massima banner',
	'TOPLIST_ADMIN_BANNER_RESIZE' 						=> 'Ridimensiona banner',
	'TOPLIST_ADMIN_BANNER_WIDTH_EXPLAIN' 				=> 'Se la larghezza massima del banner è più grande di questo valore sarà ridimensionata alla dimensione più piccola e secondo le impostazioni. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Banner_Resize">questa pagina</a>.',
	'TOPLIST_ADMIN_BANNER_HEIGHT_EXPLAIN' 				=> 'Se l’altezza massima del banner è più grande di questo valore sarà ridimensionata alla dimensione più piccola e secondo le impostazioni. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Banner_Resize">questa pagina</a>.',
	'TOPLIST_ADMIN_BANNER_RESIZE_EXPLAIN' 				=> 'Ridimensiona banner, se la larghezza o l’altezza del banner è maggiore, quindi secondo il valore massimo specificato qui di seguito. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Banner_Resize">questa pagina</a>.',
	'TOPLIST_ADMIN_IN_HITS_WEIGHT' 						=> 'Peso in Hits',
	'TOPLIST_ADMIN_OUT_HITS_WEIGHT' 					=> 'Peso out Hits',
	'TOPLIST_ADMIN_IMG_HITS_WEIGHT' 					=> 'Mostra peso immagine',
	'TOPLIST_ADMIN_RATING_WEIGHT' 						=> 'Valutazione peso',
	'TOPLIST_ADMIN_PR_WEIGHT' 							=> 'Peso Google Pagerank',
	'TOPLIST_ADMIN_ALEXA_WEIGHT' 						=> 'Peso Alexa Rank',
	'TOPLIST_ADMIN_IN_HITS_WEIGHT_EXPLAIN' 				=> 'Cambiando le impostazioni ti permetterà di modificare l’ordine in cui vengono visualizzati i siti. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Weight">questa pagina</a>.',
	'TOPLIST_ADMIN_OUT_HITS_WEIGHT_EXPLAIN' 			=> 'Cambiando le impostazioni ti permetterà di modificare l’ordine in cui vengono visualizzati i siti. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Weight">questa pagina</a>.',
	'TOPLIST_ADMIN_IMG_HITS_WEIGHT_EXPLAIN' 			=> 'Cambiando le impostazioni ti permetterà di modificare l’ordine in cui vengono visualizzati i siti. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Weight">questa pagina</a>.',
	'TOPLIST_ADMIN_RATING_WEIGHT_EXPLAIN' 				=> 'Cambiando le impostazioni ti permetterà di modificare l’ordine in cui vengono visualizzati i siti. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Weight">questa pagina</a>.',
	'TOPLIST_ADMIN_PR_WEIGHT_EXPLAIN' 					=> 'Cambiando le impostazioni ti permetterà di modificare l’ordine in cui vengono visualizzati i siti. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Weight">questa pagina</a>.',
	'TOPLIST_ADMIN_ALEXA_WEIGHT_EXPLAIN' 				=> 'Cambiando le impostazioni ti permetterà di modificare l’ordine in cui vengono visualizzati i siti. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_MOD_Weight">questa pagina</a>.',
	'TOPLIST_ADMIN_SITE_OF_THE_MOMENT' 					=> 'Sito del momento',
	'TOPLIST_ADMIN_SITE_OF_THE_MOMENT_LENGTH' 			=> 'Lunghezza sito del momento',
	'TOPLIST_ADMIN_SITE_OF_THE_MOMENT_EXPLAIN' 			=> 'Mostra un campione prelevato sulla parte superiore del sito web (immagine toplist sito del momento). Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Site_of_the_Moment">questa pagina</a>.',
	'TOPLIST_ADMIN_SITE_OF_THE_MOMENT_LENGTH_EXPLAIN' 	=> 'Tempo in secondi in cui il sito del momento viene visualizzato.',
	'TOPLIST_ADMIN_IMAGE_CACHE_DAYS' 					=> 'Tempo cache immagine (in giorni)',
	'TOPLIST_ADMIN_IMAGE_CACHE_DAYS_EXPLAIN' 			=> 'La durata della cache immagini. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Cache">questa pagina</a>.',
	'TOPLIST_ADMIN_CHECK_CODE' 							=> 'Controlla il codice nella lista dei siti',
	'TOPLIST_ADMIN_CHECK_CODE_EXPLAIN' 					=> 'Attiva il controllo remoto del codice della toplists sulla lista dei siti. Quest’opzione assicura che i siti nella lista inviano il link di ritorno. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Code_Check">questa pagina</a>.',
	'TOPLIST_ADMIN_CHECK_CODE_TIME' 					=> 'Intervallo di tempo per verificare il codice di cron',
	'TOPLIST_ADMIN_CHECK_CODE_TIME_EXPLAIN' 			=> 'Attiva il controllo remoto del codice della toplists sulla lista dei siti. Quest’opzione assicura che i siti nella lista inviano il link di ritorno. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Code_Check">questa pagina</a>.',
	'TOPLIST_EDIT_ERROR' 								=> 'Assicurati di compilare questo campo in modo corretto.',
	'TOPLIST_EDIT_ERROR_SITE' 							=> 'Non puoi aggiungere questo due volte.',
	'TOPLIST_ADMIN_ENABLE_CACHE' 						=> 'Attiva la cache SQL',
	'TOPLIST_ADMIN_ENABLE_CACHE_EXPLAIN' 				=> 'Abilita un carico più pesante delle SQL queries. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Cache">questa pagina</a>',
	'TOPLIST_ADMIN_ENABLE_CACHE_TIME' 					=> 'Attiva lunghezza cache SQL',
	'TOPLIST_ADMIN_ENABLE_CACHE_TIME_EXPLAIN' 			=> 'La lunghezza in secondi della cache in una query SQL. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Cache">questa pagina</a>',
	'TOPLIST_ADMIN_ENABLE_CACHE_CLEAR' 					=> 'Attiva cancellazione della cache',
	'TOPLIST_ADMIN_ENABLE_CACHE_CLEAR_EXPLAIN' 			=> 'Quando abilitata la cancellazione della cache viene effettuato l’aggiornamento delle tabelle. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Cache">questa pagina</a>',
    'ACP_TOPLIST' 										=> 'MOD Toplist',
    'ACP_TOPLIST_SETTINGS' 								=> 'Configurazione',
    'ACP_TOPLIST_SETTINGS_EXPLAIN' 						=> 'Puoi determinare le impostazioni base per la tua toplist, sii saggio e diffida degli imbroglioni!',
    'ACP_TOPLIST_POINTSMODS' 							=> 'Punteggi',
    'ACP_TOPLIST_BASIC' 								=> 'Base',
    'ACP_TOPLIST_CACHE' 								=> 'Cache',
    'ACP_TOPLIST_ANTICHEAT' 							=> 'Anti-Frode',
    'ACP_TOPLIST_WEIGHT' 								=> 'Peso',
    'ACP_TOPLIST_SITEOFTHEMOMENT' 						=> 'Sito del momento',
    'ACP_TOPLIST_BANNERRESIZE' 							=> 'Ridimensionamento banner',
    'TOPLIST_ADMIN_POINTS_ENABLE' 						=> 'Attiva il supporto punteggi',
    'TOPLIST_ADMIN_POINTS_PER_ADD' 						=> 'Punteggio per aggiungi sito',
    'TOPLIST_ADMIN_POINTS_PER_EDIT' 					=> 'Punteggio per modifica sito',
    'TOPLIST_ADMIN_POINTS_PER_IMG_HIT_VISITOR' 			=> 'Punteggio per hit immagine (visitatore)',
    'TOPLIST_ADMIN_POINTS_PER_IN_HIT_VISITOR' 			=> 'Punteggio per hit in (visitatore)',
    'TOPLIST_ADMIN_POINTS_PER_OUT_HIT_VISITOR' 			=> 'Punteggio per hit out (visitatore)',
    'TOPLIST_ADMIN_POINTS_PER_IMG_HIT_OWNER' 			=> 'Punteggio per hit immagine (amministratore)',
    'TOPLIST_ADMIN_POINTS_PER_IN_HIT_OWNER' 			=> 'Punteggio per hit in (amministratore)',
    'TOPLIST_ADMIN_POINTS_PER_OUT_HIT_OWNER' 			=> 'Punteggio per hit out (amministratore)',
    'TOPLIST_ADMIN_POINTS_PER_RATE' 					=> 'Punteggio per voto',
    'TOPLIST_ADMIN_POINTS_PER_COMMENT' 					=> 'Punteggio per commento',
    'TOPLIST_ADMIN_POINTS_ENABLE_EXPLAIN' 				=> 'Consente di attribuire dei punti per alcune azioni',
    'TOPLIST_ADMIN_POINTS_PER_ADD_EXPLAIN' 				=> 'Aggiungi un punteggio per aggiungi sito. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">questa pagina</a>',
    'TOPLIST_ADMIN_POINTS_PER_EDIT_EXPLAIN' 			=> 'Aggiungi un punteggio per modifica sito. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">questa pagina</a>',
    'TOPLIST_ADMIN_POINTS_PER_IMG_HIT_VISITOR_EXPLAIN' 	=> 'Aggiungi un punteggio per hit immagine per uno specifico sito e visitatore. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">questa pagina</a>',
    'TOPLIST_ADMIN_POINTS_PER_IN_HIT_VISITOR_EXPLAIN' 	=> 'Aggiungi un punteggio per hit in per uno specifico sito e visitatore. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">questa pagina</a>',
    'TOPLIST_ADMIN_POINTS_PER_OUT_HIT_VISITOR_EXPLAIN' 	=> 'Aggiungi un punteggio per hit out per uno specifico sito e visitatore. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">questa pagina</a>',
    'TOPLIST_ADMIN_POINTS_PER_IMG_HIT_OWNER_EXPLAIN' 	=> 'Aggiungi un punteggio per hit immagine per uno specifico sito e amministratore. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">questa pagina</a>',
    'TOPLIST_ADMIN_POINTS_PER_IN_HIT_OWNER_EXPLAIN' 	=> 'Aggiungi un punteggio per hit in per uno specifico sito e amministratore. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">questa pagina</a>',
    'TOPLIST_ADMIN_POINTS_PER_OUT_HIT_OWNER_EXPLAIN' 	=> 'Aggiungi un punteggio per hit out per uno specifico sito e amministratore. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">questa pagina</a>',
    'TOPLIST_ADMIN_POINTS_PER_RATE_EXPLAIN' 			=> 'Aggiungi un punteggio per votazione ad un sito. Nota bene i punti vengono assegnati solo la prima volta. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">questa pagina</a>',
    'TOPLIST_ADMIN_POINTS_PER_COMMENT_EXPLAIN' 			=> 'Aggiungi un punteggio per commenti ad un sito. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Pointsmods">questa pagina</a>',
    'TOPLIST_ADMIN_SITE_OF_THE_MOMENT_INDEX' 			=> 'Sito del momento nell’indice',
    'TOPLIST_ADMIN_SITE_OF_THE_MOMENT_INDEX_EXPLAIN' 	=> 'Visualizza il sito del momento nell’indice del forum. Per altre informazioni leggi <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Site_of_the_Moment">questa pagina</a>.',
    'TOPLIST_VOTE_FOR_SITE' 							=> 'Vota per questo sito',
    'TOPLIST_ADMIN_CREDITS' 							=> 'Mostra crediti',
    'TOPLIST_ADMIN_CREDITS_EXPLAIN' 					=> 'Mostra crediti sulle pagine dove la Toplist è caricata.',
    'TOPLIST_VERSION_CHECK' 							=> 'Controllo versione',
    'TOPLIST_VERSION_CHECK_EXPLAIN' 					=> 'Controlla se la versione del MOD Toplist è aggiornata.',
    'TOPLIST_VERSION_UP_TO_DATE_ACP' 					=> 'MOD Toplist aggiornato',
    'TOPLIST_VERSION_NOT_UP_TO_DATE_ACP' 				=> 'MOD Toplist non aggiornato',
    'TOPLIST_CURRENT_VERSION' 							=> 'Attuale versione installata',
    'TOPLIST_LATEST_VERSION' 							=> 'Ultima versione disponibile',
    'TOPLIST_UPDATE_INSTRUCTIONS_INCOMPLETE' 			=> '
		<h1>Incompleto aggiornamento rilevato</h1>
		<p>phpBB ha rilevato un aggiornamento automatico incompleto. Assicurati di seguire ogni passo entro il tool di aggiornamento automatico. Qui di seguito troverai il link, oppure vai direttamente alla tua directory di installazione.</p>
	',
    'TOPLIST_UPDATE_INSTRUCTIONS' 						=> '
		<h1>Annuncio di rilascio versione</h1>
		<p>Leggi <a href="%1$s" title="%1$s"><strong>l’annuncio di rilascio per l’ultima versione</strong></a> prima di continuare con il processo di aggiornamento, può contenere informazioni utili. Contiene inoltre il link per il download completo, nonché il registro delle modifiche.</p>
		<br />
		<h1>Ora la tua installazione sarà aggiornata con il pacchetto di aggiornamento automatico</h1>
		<p>Il modo consigliato di aggiornare la tua installazione elencato qui è valido solo per il pacchetto di aggiornamento automatico. Sarai in grado di aggiornare l’installazione utilizzando i metodi elencati all’interno del file INSTALL.html. Gli steps per l’aggiornamento automatico sono:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Vai sull’ <a href="%1$s" title="%1$s"><strong>annuncio di rilascio versione</strong></a> ed il download dell’archivio di "Aggiornamento automatico".<br /><br /></li>
			<li>Decomprimi l’archivio.<br /><br /></li>
			<li>Carica il pacchetto decompresso con la tua cartella install nella root del tuo sito (dove hai il config.php).<br /><br /></li>
		</ul>
		<p>Una volta caricato, il tuo forum sarà offline per i normali utenti a causa della directory di installazione ora presente.<br /><br />
		<strong><a href="%2$s" title="%2$s">Ora prosegui con l’aggiornamento puntando sul tuo browser alla cartella install</a>.</strong><br />
		<br />
		Verrai guidato nel processo di aggiornamento. Ti sarà comunicato quando l’aggiornamento sarà completo.
		</p>
	',
        'TOPLIST_ADMIN_ENABLE_SCORE' => 'Mostra voti',
        'TOPLIST_ADMIN_ENABLE_SCORE_EXPLAIN' => 'Mostra voti calcolati sul rank dei siti',
        'TOPLIST_ADMIN_SHOW_DISABLED' => 'Mostra siti disabilitati',
        'TOPLIST_ADMIN_SHOW_DISABLED_EXPLAIN' => 'Mostra i siti disabiliati, esegui il rank dei siti abiliati e poi disabilitali',
        'TOPLIST_SCORE' => 'Voti',
        'TOPLIST_CHECK_CODE_DONE' => 'Codice sito toplist controllato. Lo stato è satto aggiornato.',
        'TOPLIST_PLAIN' => 'Base',
        'TOPLIST_GD_OPTIONS' => 'Immagine GD con rank',
        'TOPLIST_CODE_DP' => 'Codice:',
        'TOPLIST_SITE_DISABLED' => 'Disabilita perchè non è stato trovato il codice toplist sul sito!',
        'TOPLIST_RATING_UPDATED' => 'Valutazione aggiornata',
        'TOPLIST_SUBJECT' => 'Oggetto:',
        'TOPLIST_MESSAGE' => 'Messaggio:',
        'TOPLIST_POST_COMMENT' => 'Scrivi un commento',
        'ACP_TOPLIST_UPDATE' => 'Notifica aggiornamenti',
        'TOPLIST_ADMIN_ENABLE_UPDATE_CHECK' => 'Invia email su aggiornamenti di sicurezza',
        'TOPLIST_ADMIN_ENABLE_UPDATE_CHECK_EXPLAIN' => 'Invia una email a tutti gli amministratori del forum se ci sono aggiornamenti di sicurezza per la mod. Per altre informazioni consulta <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Update_Notification">questa pagina</a>',
        'TOPLIST_ADMIN_ENABLE_UPDATE_CHECK_SECURITY' => 'Invia una email per i normali aggiornamenti',
        'TOPLIST_ADMIN_ENABLE_UPDATE_CHECK_SECURITY_EXPLAIN' => 'Invia una email qunado ci sono normali aggiornamenti. Per altre informazioni consulta <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Update_Notification">questa pagina</a>',
        'ACP_TOPLIST_ADMIN_HELP' => 'Aiuto',
        'TOPLIST_ADMIN_HELP_ENABLE' => 'Mostra finestra di aiuto toplist',
        'TOPLIST_ADMIN_HELP_ENABLE_EXPLAIN' => 'Attivando questa funzione viene mostrata una finestra con il testo di aiuto a seconda delle funzionalità abilitate al di sopra della toplist. Per ulteriori informazioni consulta <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Help">questa pagina</a>',
        'TOPLIST_ADMIN_HELP_CUSTOM_ENABLE' => 'Testo personalizzato utente',
        'TOPLIST_ADMIN_HELP_CUSTOM_ENABLE_EXPLAIN' => 'Abilitando questa funzione viene utilizzato un indice language definito nel file language della toplist piuttosto che il testo automaticamente generato. Per ulteriori informazioni consulta <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Help">questa pagina</a>',
        'TOPLIST_ADMIN_HELP_CUSTOM_LANGINDEX' => 'Indice lingua',
        'TOPLIST_ADMIN_HELP_CUSTOM_LANGINDEX_EXPLAIN' => 'Specifica un indice di lingua usato per la toplist per mostrare il testo personalizzato di aiuto. Per ulteriori informazioni consulta <a href="http://wiki.wyrihaximus.net/wiki/PhpBB_Toplist_Help">questa pagina</a>',
        'TOPLIST_INFORMATION' => 'Informazioni Toplist',
        'TOPLIST_HELP_INTRO' => 'La toplist è una graduatoria dei siti inseriti.',
        'TOPLIST_HELP_DESC_START' => 'La lista è ordinata secondo un punteggio calcolato e ordinata secondo il nome dei siti',
        'TOPLIST_HELP_DESC_HITS_FROM_SITES' => ', graduatoria dai siti',
        'TOPLIST_HELP_DESC_HITS_TO_SITES' => ', graduatoria ai siti',
        'TOPLIST_HELP_DESC_IMAGE_SHOWS' => ', immagini visualizzate',
        'TOPLIST_HELP_DESC_RATING' => ', voti',
        'TOPLIST_HELP_DESC_END' => '.',
        'TOPLIST_HELP_LNKEXCH_START' => 'Gli utenti possono aggiungere i loro siti e inserire il codice in dotazione',
        'TOPLIST_HELP_LNKEXCH_CODECHECK' => ', il codice sul sito viene controllato periodicamente e sarà disabilitata se non viene trovato,',
        'TOPLIST_HELP_LNKEXCH_END' => ' per lo scambio links.',
        'TOPLIST_HELP_COMMENTS' => 'Gli utenti possono commentare i siti quando cliccano nella pagina di voto.',
        'TOPLIST_MOBILE_COMMENTS' => 'Messaggi inviati con dispositivo mobile',
        'TOPLIST_COMMENT_SEND' => 'Invia commento',
        'TOPLIST_COMMENT_PREVIEW' => 'Anteprima commento',
        'TOPLIST_EDIT_WEBSITE_SHORT' => 'Salva modifiche',
        'TOPLIST_ADD_WEBSITE_SHORT' => 'Aggiungi sito',
        'TOPLIST_NORMAL_IMAGE_DESC' => '<strong>Anteprima:</strong> Qui puoi vedere l’immagine della Toplist per il tuo sito.',
        'TOPLIST_GD_IMAGE_DESC' => '<strong>Anteprima:</strong> Qui puoi vedere l’immagine con il ranking della Toplist per il tuo sito.',
        '' => '',
));

// Custom help text
$lang = array_merge($lang, array(
    'TOPLIST_CUSTOM_HELP' => 'Aggiungi il tuo testo personalizzato in lang/it/mods/toplist.php alla fine del file (cerca questo testo ;)).',
));

?>