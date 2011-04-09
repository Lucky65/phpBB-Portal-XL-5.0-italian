<?php
/**
*
* info_acp_dm_video [Italian]
*
* @package language
* @version $Id: info_acp_dm_video.php 207 2009-12-17 12:22:54Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
* @copyright (c) 2010 luckylab.eu - translated for portal xl on 2010/05/25
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
// ’ » „ “ — …
//

$lang = array_merge($lang, array(
	'ACP_DMV_CONFIG'				=> 'Configurazione',
	'ACP_DMV_CONFIG_EXPLAIN'		=> 'Questa è la configurazione base per DM Video',
	'ACP_DMV_DM_VIDEO'				=> 'DM Video',
	'ACP_DMV_DM_VIDEO_CAT'			=> 'Categorie DM Video',
	'ACP_DMV_EDIT'					=> 'Modifica video',
	'ACP_DMV_EDIT_EXPLAIN'			=> 'Qui puoi modificare o cancellare i video esistenti.<br />Cliccando sul titolo del video puoi guardare il video in una nuova finestra.',
	'ACP_DMV_MANAGE_CATEGORIES'		=> 'Categorie',
	'ACP_DMV_RELEASE'				=> 'Video da approvare',
	'ACP_DMV_RELEASE_EXPLAIN'		=> 'Qui puoi autorizzare i nuovi video.<br />Cliccando sul titolo del video puoi guardare il video in una nuova finestra',
	'ACP_DMV_RELEASE_EDIT'			=> 'Modifica autorizzazione video',
	'ACP_DMV_RELEASE_EDIT_EXPLAIN'	=> 'Qui puoi autorizzare nuovi video che non sono ancora visibili agli altri utenti.<br />Cliccando sul titolo del video puoi guardare il video in una nuova finestra',
	'ACP_DMV_REPORTED'				=> 'Segnalazioni video',
	'ACP_DMV_REPORTED_EXPLAIN'		=> 'Qui puoi modicare le segnalazioni video.<br />Cliccando sul titolo del video puoi guardare il video in una nuova finestra',
	'ACP_DMV_REPORTED_EDIT'			=> 'Modifica segnalazioni video',
	'ACP_DMV_REPORTED_EDIT_EXPLAIN'	=> 'Qui puoi verificare se ci sono segnalazioni di video non funzionanti.<br />Cliccando sul titolo del video puoi guardare il video in una nuova finestra e verificare i video non funzionanti.',
	'ALL_VIDEOS'					=> 'Tutti i video',

	'DMV_ADD'						=> 'Aggiunto',
	'DMV_APPROVAL'					=> 'Visualizzato',
	'DMV_APPROVAL_EXPLAIN'			=> 'Configura se il video deve essere visibile agli utenti',
	'DMV_CAT_DELETE'				=> 'Qui puoi cancellare una categoria',
	'DMV_CAT_DELETE_DONE'			=> 'Categoria cancellata',
	'DMV_CAT_EDIT'					=> 'Qui puoi modificare una categoria',
	'DMV_CAT_EDIT_DONE'				=> 'Categoria modificata.',
	'DMV_CAT_NAME'					=> 'Categoria',
	'DMV_CAT_NAME_EMPTY'			=> 'Devi inserire un nome per la categoria',
	'DMV_CAT_NAME_EXPLAIN'			=> 'Categoria dove il video è inserito',
	'DMV_CAT_NEW'					=> 'Qui puoi aggiungere una nuova categoria',
	'DMV_CAT_NEW_DONE'				=> 'Categoria aggiunta',
	'DMV_CAT_SELECT'				=> 'Qui puoi aggiungere, modificare o cancellare categorie',
	'DMV_CLICK'						=> 'qui',
	'DMV_CONFIG_ACP_PAGE'			=> 'Numero di video per pagina (ACP)',
	'DMV_CONFIG_ACP_PAGE_EXPLAIN'	=> 'Seleziona il numero di video per pagina, come ti piacerebbe vederlo in ACP',
	'DMV_CONFIG_ANNOUNCE_SETTINGS'	=> 'Configurazione annunci',
	'DMV_CONFIG_ANNOUNCE_ENABLE'	=> 'Annuncio nuovo video',
	'DMV_CONFIG_ANNOUNCE_ENABLE_EX'	=> 'Attiva, se preferisci pubblicare un annuncio di un nuovo video nel forum',
	'DMV_CONFIG_ANNOUNCE_FORUM'		=> 'Seleziona un forum',
	'DMV_CONFIG_ANNOUNCE_FORUM_EX'	=> 'Qui puoi selezionare un forum per pubblicare un annuncio ad ogni nuovo video',
	'DMV_CONFIG_ANNOUNCE_TITLE'		=> '[Video] %1$s',
	'DMV_CONFIG_ANNOUNCE_MSG'		=> 'Ciao,

è stato aggiunto un nuovo video!

Titolo: <strong>%1$s</strong>
Autore: <strong>%2$s</strong>
Durata: <strong>%3$s</strong>

<strong>Clicca %4$s per guardare il video!</strong>

Buon divertimento!',
	'DMV_CONFIG_COMMENT'			=> 'Numero di commenti per pagina (visualizzati da utenti)',
	'DMV_CONFIG_COMMENT_EXPLAIN'	=> 'Imposta il numero di commenti per pagina visualizzati dagli utenti',
	'DMV_CONFIG_COPY_EMAIL'			=> 'Indirizzo email informazioni copyright',
	'DMV_CONFIG_COPY_EMAIL_EXPLAIN'	=> 'Indirizzo email, che dovrebbe essere utilizzato per inviare le denunce di copyright, es. copyrights@yourdomain.com',
	'DMV_CONFIG_COPY_SHOW'			=> 'Visualizzazione indirizzo email informazioni Copyright',
	'DMV_CONFIG_COPY_SHOW_EXPLAIN'	=> 'Come il tuo indirizzo e-mail sarà visualizzato nelle informazioni di copyrights, ad esempio:  Copyrights tuodominio dot com',
	'DMV_CONFIG_MAIN_SETTINGS'		=> 'Configurazioni base',
	'DMV_CONFIG_NEWEST'				=> 'Numero di nuovi video',
	'DMV_CONFIG_NEWEST_EXPLAIN'		=> 'Seleziona il numero di video, come saranno visualizzati i nuovi video',
	'DMV_CONFIG_PM_SETTINGS'		=> 'Configurazione MP',
	'DMV_CONFIG_PM_FROM_ID'			=> 'ID utente da',
	'DMV_CONFIG_PM_FROM_ID_EX'		=> 'ID utente che invia un messagio personale',
	'DMV_CONFIG_PM_TO_ID'			=> 'ID utente a',
	'DMV_CONFIG_PM_TO_ID_EX'		=> 'ID utente che riceve un messagio personale, se un nuovo video è stato rilasciato',
	'DMV_CONFIG_POINTS_SETTINGS'	=> 'Configurazione punteggi',
	'DMV_CONFIG_POINTS_EXPLAIN'		=> 'Se hai installato la mod Ultimate Points, puoi dare ulteriori punti ai tuoi utenti per la pubblicazione di nuovi video (i punti saranno sottratti se i video sono cancellati).',
	'DMV_CONFIG_POINTS_INACTIVE'	=> 'Se hai installato la mod Ultimate Points, ma è <strong>disattivato</strong> l’UPS, dovrai attivarlo per dare la possibilità di accreditare nuovi punti agli utenti che inviano nuovi video.',
	'DMV_CONFIG_POINTS_ENABLE'		=> 'Abilita punti per nuovi video',
	'DMV_CONFIG_POINTS_ENABLE_EX'	=> 'Attivando questa opzione saranno accreditati nuovi punti agli utenti che inviano nuovi video',
	'DMV_CONFIG_POINTS_VALUE'		=> 'Punti per video',
	'DMV_CONFIG_POINTS_VALUE_EX'	=> 'Inserisci qui i punti che vuoi accreditare agli utenti per i loro video. I punti saranno aggiunti dopo che il video viene rilasciato (e sottratti, quando il video verrà eliminato).',
	'DMV_CONFIG_TOP_VIEWS'			=> 'Numero di video ordinati per i più visti',
	'DMV_CONFIG_TOP_VIEWS_EXPLAIN'	=> 'Seleziona il numero di video, quelli che saranno visualizzati tra quelli più visti',
	'DMV_CONFIG_TOP_RATE'			=> 'Numero di video ordinati per i più votati',
	'DMV_CONFIG_TOP_RATE_EXPLAIN'	=> 'Seleziona il numero di video, quelli che saranno visualizzati tra quelli più votati',
	'DMV_CONFIG_UPDATED'			=> 'La configurazione è stata aggiornata',
	'DMV_CONFIG_USER_PAGE'			=> 'Numero di video per pagina (visualizzati da utenti)',
	'DMV_CONFIG_USER_PAGE_EXPLAIN'	=> 'Seleziona il numero di video per pagina che saranno visualizzati dagli utenti',
	'DMV_CREATE_CAT'				=> 'Aggiungi categoria',
	'DMV_DELETE'					=> 'Cancella',
	'DMV_CAT_DELETE_DONE'			=> 'La categoria è stata cancellata',
	'DMV_DELETED'					=> 'La voce è stata cancellata',
	'DMV_DELETED_CAT'				=> 'La categoria selezionata è stata cancellata',
	'DMV_DELETED_CAT_NOT'			=> 'La categoria selezionata <strong>non</strong> è stata cancellata',
	'DMV_DELETE_HAS_FILES'			=> 'Ci sono ancora video elencati in questa categoria!<br />Devi prima cancellare o spostare i video contenuti nella categoria!',
	'DMV_CAT_NOT_EXISTS'			=> 'La categoria non esiste',

	'DMV_DELETE_SUB_CATS'			=> 'Cancella o sposta prima le sotto-categorie',
	'DMV_DEL_CAT'					=> 'Vuoi cancellare questa categoria?',
	'DMV_DEL_DELETED_SUBS'			=> 'Le sotto-categorie sono state cancellate',
	'DMV_DEL_DELETED_VIDEOS'		=> 'I video sono stati cancellati',
	'DMV_DEL_DM_VIDEOS'				=> 'Cancella video',
	'DMV_DEL_MOVED_SUBS'			=> 'Le sotto-categorie sono state spostate in %s',
	'DMV_DEL_MOVED_VIDEOS'			=> 'I video sono stati spostati in %s',
	'DMV_DEL_SUBS'					=> 'cancella sotto-categorie',
	'DMV_DEL_SUBS_TO'				=> 'Sposta sott-categorie',
	'DMV_DEL_SUBS_YES'				=> 'Vuoi cancellare le categorie incluse nelle sotto-categorie?',
	'DMV_DEL_VIDEOS_TO'				=> 'Sposta video in',
	'DMV_DEL_VIDEOS_YES'			=> 'Delete category including the videos?',
	'DMV_DM_VIDEO_ACP_CATSD'		=> 'Sei sicuro di voler cancellare le categorie selezionate?',
	'DMV_DM_VIDEO_ACP_CATSE'		=> 'Modifica categoria',
	'DMV_DM_VIDEO_ACP_CATSN'		=> 'Aggiungi categoria',
	'DMV_DM_VIDEO_INDEX'			=> 'DM Video',
	'DMV_DURATION'					=> 'Durata del video',
	'DMV_DURATION_EXPLAIN'			=> 'Aggiungi la durata del video nel seguente formato: 5:00 (per indicare 5 minuti)',
	'DMV_MULTI'						=> '%d video',
	'DMV_NEED_DATA'					=> 'Devi inserire titolo e url del video!',
	'DMV_NEED_TITLE'				=> 'Devi inserire il titolo del video!',
	'DMV_NEED_URL'					=> 'Devi inserire l’URL per il video!',
	'DMV_NEW_CAT'					=> 'Aggiungi nuova categoria',
	'DMV_NEW_CAT_DESC'				=> 'Descrizione della categoria',
	'DMV_NEW_CAT_DESC_EXPLAIN'		=> 'BB-Codes, smiles e links sono riconosciuti automaticamente',
	'DMV_NEW_CAT_NAME'				=> 'Nome categoria',
	'DMV_NEW_CAT_PARENT'			=> 'Categoria padre',
	'DMV_NEW_VIDEOS'				=> 'Informazione per i nuovi video',
	'DMV_NEW_VIDEOS_EXPLAIN'		=> 'Se attivato, fornisce informazioni nell’header per i nuovi video.',
	'DMV_NO_PARENT'					=> 'Nessuna categoria padre',
	'DMV_NO_RELEASE'				=> 'Non ci sono video per questa versione',
	'DMV_NO_REPORTS'				=> 'Non ci sono rapporti video',
	'DMV_NO_SUBCAT'					=> 'non ci sono stto-categorie',
	'DMV_PAGINATION'				=> 'Totale voci %1$s di %2$s Totale %3$s pagine: %4$s',
	'DMV_PM_FROM_ERROR'				=> 'L’<strong>ID utente</strong> non esiste!',
	'DMV_PM_TO_ERROR'				=> 'L’<strong>ID utente</strong> non esiste!',
	'DMV_REALY_DELETE'				=> 'Sei sicuro di voler cancellare questa voce?',
	'DMV_REMOVE_INSTALL'			=> 'Devi cancellare la cartella <strong>install</strong>',
	'DMV_REPORTED'					=> 'Video non funzionante',
	'DMV_REPORTED_EXPLAIN'			=> 'Imposta questo campo su no, se si desideri impostare il video come copia di lavoro',
	'DMV_SINGER'					=> 'Nome dell’autore',
	'DMV_SINGER_EXPLAIN'			=> 'In nome dell’autore',
	'DMV_SINGLE'					=> '1 video',
	'DMV_SONGTEXT'					=> 'Descrizione',
	'DMV_SONGTEXT_EXPLAIN'			=> 'La descrizione del video',
	'DMV_SORT_APPROVAL'				=> 'Approvazione',
	'DMV_SORT_ARTIST'				=> 'Autore',
	'DMV_SORT_ASC'					=> 'Ascendente',
	'DMV_SORT_CAT'					=> 'Categoria',
	'DMV_SORT_DESC'					=> 'Discendente',
	'DMV_SORT_DIRECTION'			=> 'Ordinamento',
	'DMV_SORT_FROMNAME'				=> 'inviato da',
	'DMV_SORT_KEYS'					=> 'Chiave di ordinamento ',
	'DMV_SORT_TITLE'				=> 'Titolo',
	'DMV_SUB_CATS'					=> 'Sotto-categorie',
	'DMV_TITLE'						=> 'Titolo del video',
	'DMV_TITLE_EXPLAIN'				=> 'Il titolo del video',
	'DMV_UPDATED'					=> 'La tua voce è stata aggiornata.',
	'DMV_URL'						=> 'URL video',
	'DMV_URL_EXPLAIN'				=> 'Il codice embedded (non il link diretto!) ottenuto da YouTube, MyVideo o altri.',
	'DMV_USERNAME'					=> 'Aggiunto da',
	'DMV_VIDEO_IMG'					=> 'Link immagine',
	'DMV_VIDEO_IMG_EXPLAIN'			=> 'Il link dell’immagine per il video. La dimensione non deve essere superiore a 250 x 250px! Assicurati che il link sia disponibile e funzionante!',
	'DMV_VIDEO_IMG_EXPLAIN'			=> 'Aggiungi il link dell’immagine per il video. La dimensione non deve essere superiore a 250 x 250px! Assicurati che il link sia disponibile e funzionante!',

	'LOG_USER_VIDEO_ADDED'			=> 'Video <strong>%s</strong> aggiunto',
	'LOG_USER_VIDEO_EDITED'			=> 'Modificato video n. <strong>%s</strong>',
	'LOG_USER_VIDEO_DELETED'		=> 'Cancellato video n. <strong>%s</strong>',
	'LOG_USER_COMMENT_ADDED'		=> 'Aaggiunto commento pe ril video n. <strong>%s</strong>',
	'LOG_USER_COMMENT_EDITED'		=> 'Modificato commento n. <strong>%s</strong>',
	'LOG_USER_COMMENT_DELETED'		=> 'Cancellato commento n. <strong>%s</strong>',
	'LOG_USER_VIDEO_RATE'			=> 'Votato video n. <strong>%s</strong>',
	'LOG_USER_VIDEO_RATE_EDITED'	=> 'Modificato voto per il video n. <strong>%s</strong>',
	'LOG_USER_VIDEO_REPORTED'		=> 'Segnalato video n. <strong>%s</strong>',

	'LOG_ADMIN_VIDEO_UPDATED'		=> 'Aggiornato video n. <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_DELETED'		=> 'Cancellato video n. <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_REP_UPDATED'	=> 'Aggiornato rapporto video <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_REP_DELETED'	=> 'Cancellato rapporto video <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_REL_UPDATED'	=> 'Aggiornata versione video <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_REL_DELETED'	=> 'Cancellata versione video <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_CONFIG_UPDATED' => 'Aggiornata configurazione video',
	'LOG_ADMIN_VIDEO_CAT_ADDED'		=> 'Aggiunta nuova categoria video <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_CAT_UPDATED'	=> 'Aggiornata nuova categoria video <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_CAT_DELETED'	=> 'Cancellata nuova categoria video <strong>%s</strong>',
));

?>