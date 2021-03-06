<?php
/**
*
* gallery_acp [Italian]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @copyright (c) 2009, 2011 luckylab.eu - update translation for portal xl on 2011/03/29
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

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

$lang = array_merge($lang, array(
	'ACP_GALLERY_CLEANUP_EXPLAIN'	=> 'Qui puoi eliminare alcuni files obsoleti.',
	'ACP_GALLERY_OVERVIEW'			=> 'phpBB Gallery',
	'ACP_GALLERY_OVERVIEW_EXPLAIN'	=> 'Ecco alcuni dati statistici della la tua galleria.',
	'ACP_IMPORT_ALBUMS'				=> 'Importa immagini',
	'ACP_IMPORT_ALBUMS_EXPLAIN'		=> 'Qui è possibile importare immagini da gran parte del file system. Prima di importare le immagini, accertati di averle ridimensionate manualmente.',


	'ADD_ALBUM_ON_TOP'				=> 'Aggiungi album in alto',
	'ADD_PERMISSIONS'				=> 'Aggiungi permessi',
	'ALBUM_ADMIN'					=> 'Amministrazione Album',
	'ALBUM_ADMIN_EXPLAIN'			=> 'Nella Galleria di phpBB non ci sono le categorie, tutto è basato sugli album. Ogni album può avere un numero illimitato di sotto-albums ed è possibile stabilire se possono essere inseriti o meno (vale a dire se essa agisce come una vecchia categoria). Qui è possibile aggiungere, modificare, cancellare, bloccare, sbloccare i singoli album come pure impostare alcuni controlli supplementari. Se le tue immagini necessitano di sincronizzazione è possibile anche sincronizzare un album. <strong>È necessario copiare o impostare autorizzazioni appropriate per il nuovo album creato per loro visualizzate.</strong>',
	'ALBUM_AUTH_TITLE'				=> 'Permessi album',
	'ALBUM_CREATED'					=> 'Album creato correttamente.',
	'ALBUM_DELETE'					=> 'Cancella album',
	'ALBUM_DELETE_EXPLAIN'			=> 'Il modulo sottostante ti permette di eliminare un album e decidere dove vuoi mettere le immagini che contiene',
	'ALBUM_DELETED'					=> 'Questo album è stato correttamente cancellato.',
	'ALBUM_DESC'					=> 'Descrizione',
	'ALBUM_DESC_EXPLAIN'			=> 'Ogni marcatore HTML sarà visualizzato.',
	'ALBUM_DESC_TOO_LONG'			=> 'La descrizione per l’album è troppo lunga, non deve essere superiore a 4000 caratteri.',
	'ALBUM_EDIT_EXPLAIN'			=> 'Con questo modulo puoi personalizzare questo album. Nota che la moderazione è impostata tramite le autorizzazioni di ogni album o  ' . /*user or */ 'gruppo.',
	'ALBUM_ID'						=> 'Album-ID',
	'ALBUM_IMAGE'					=> 'Immagine album',
	'ALBUM_IMAGE_EXPLAIN'			=> 'Posizione, relativa al tuo phpBB, di un’addizionale immagine associata a questo album.',
	'ALBUM_NAME_EMPTY'				=> 'Devi aggiungere un nome per questo album.',
	'ALBUM_NO_TYPE_CHANGE_TO_CONTEST'	=> 'Un album non-concorso non può essere trasformato in un album concorso.',
	'ALBUM_PARENT'					=> 'Album padre',
	'ALBUM_PASSWORD'				=> 'Album password',
	'ALBUM_PASSWORD_EXPLAIN'		=> 'Definisci una password per questo album, utilizza il sistema preferenze di autorizzazione.',
	'ALBUM_PASSWORD_CONFIRM'		=> 'Conferma password album',
	'ALBUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Deve essere aggiunto solo se è stata impostata una password.',
	'ALBUM_RESYNCED'				=> 'Album “%s” correttamente sincronizzato',
	'ALBUM_SETTINGS'				=> 'Configurazioni album',
	'ALBUM_STATUS'					=> 'Stato album',
	'ALBUM_TYPE'					=> 'Tipo album',
	'ALBUM_TYPE_CAT'				=> 'Categoria',
	'ALBUM_TYPE_CONTEST'			=> 'Rassegna',
	'ALBUM_TYPE_UPLOAD'				=> 'Album',
	'ALBUM_UPDATED'					=> 'L’album è stato aggiornato con successo.',
	'ALBUM_WATERMARK'				=> 'Visualizza watermark',
	'ALBUM_WATERMARK_EXPLAIN'		=> 'Se impostata su <samp>No</samp>, il watermark non sarà visualizzato indipendentemente dai permessi impostati.',
	'ALBUM_WITH_CONTEST_NO_TYPE_CHANGE'	=> 'Un album-rassegna non può essere trasformato in un album-non-concorso.',
	'ALBUMS'						=> 'Albums',

	'CACHE_DIR_SIZE'				=> 'Dimensione cache/-directory',
	'CHANGE_AUTHOR'					=> 'Modifica autore a ospite',
	'CHECK'							=> 'Controllo',
	'CHECK_AUTHOR_EXPLAIN'			=> 'Nessuna immagine senza autore trovata.',
	'CHECK_COMMENT_EXPLAIN'			=> 'Nessun commento senza autore trovato.',
	'CHECK_ENTRY_EXPLAIN'			=> 'Devi eseguire il controllo, per la ricerca di file, senza la base dati.',
	'CHECK_PERSONALS_EXPLAIN'		=> 'Nessun dato personale senza valido proprietario trovato.',
	'CHECK_PERSONALS_BAD_EXPLAIN'	=> 'Nessun album personale trovato.',
	'CHECK_SOURCE_EXPLAIN'			=> 'Nessuna voce trovata. Esegui il controllo, per essere sicuro.',
	'CLEAN_AUTHORS_DONE'			=> 'Immagini senza valido autore cancellate.',
	'CLEAN_CHANGED'					=> 'Autore modificato in "Ospite".',
	'CLEAN_COMMENTS_DONE'			=> 'Commenti senza valido autore cancellati.',
	'CLEAN_ENTRIES_DONE'			=> 'Files nel database cancellati.',
	'CLEAN_GALLERY'					=> 'Pulizia gallery',
	'CLEAN_GALLERY_ABORT'			=> 'Pulizia fallita!',
	'CLEAN_PERSONALS_DONE'			=> 'Albums personali senza valido autore cancellati.',
	'CLEAN_PERSONALS_BAD_DONE'		=> 'Albums personali dagli utenti selezionati cancellati.',
	'CLEAN_SOURCES_DONE'			=> 'Immagini senza file cancellati.',
	'COLS_PER_PAGE'					=> 'Numero di colonne sulla pagina anteprima',
	'COMMENT'						=> 'Commento',
	'COMMENT_ID'					=> 'ID-Commento',
	'COMMENT_SYSTEM'				=> 'Attiva sistema commenti',
	'CONFIRM_CLEAN'					=> 'Questo passaggio non può essere annullata!',
	'CONFIRM_CLEAN_AUTHORS'			=> 'Cancella immagini senza autore valido?',
	'CONFIRM_CLEAN_COMMENTS'		=> 'Cancella commenti senza autore valido?',
	'CONFIRM_CLEAN_ENTRIES'			=> 'Cancella files nel database?',
	'CONFIRM_CLEAN_PERSONALS'		=> 'Cancella albums personali senza autore valido?<br /><strong>» %s</strong>',
	'CONFIRM_CLEAN_PERSONALS_BAD'	=> 'Cancella albums dagli utenti selezionati?<br /><strong>» %s</strong>',
	'CONFIRM_CLEAN_SOURCES'			=> 'Elimina file di immagini?',
	'CONTEST_DATE_EXPLAIN'			=> 'Aggiungi data nel formato YYYY-MM-DD HH:MM.',
	'CONTEST_END'					=> 'Fine concorso',
	'CONTEST_END_BEFORE_RATING'		=> 'La fine della rassegna non può essere prima dell’inizio-concorso-voti.',
	'CONTEST_END_BEFORE_START'		=> 'La fine della rassegna non può essere prima dell’inizio-concorso.',
	'CONTEST_END_EXPLAIN'			=> 'Dopo la fine della rassegna gli utenti non possono votare le immagini.',
	'CONTEST_END_INVALID'			=> 'Fine rassegna non valida (%s). Devi inserire una data nel formato YYYY-MM-DD HH:MM.',
	'CONTEST_RATING'				=> 'Inizio votazione',
	'CONTEST_RATING_BEFORE_START'	=> 'L’inizio della rassegna-votazione non può essere precedente.',
	'CONTEST_RATING_EXPLAIN'		=> 'Dopo l’"inizio votazione" gli utenti non possono caricare immagini.',
	'CONTEST_RATING_INVALID'		=> 'Inizio votazione-rassegna non valido (%s). Devi inserire una data nel formato YYYY-MM-DD HH:MM.',
	'CONTEST_SETTINGS'				=> 'Configurazione rassegna',
	'CONTEST_START'					=> 'Inizio rassegna',
	'CONTEST_START_EXPLAIN'			=> 'All’inizio della rassegna gli utenti non possono caricare immagini.',
	'CONTEST_START_INVALID'			=> 'Inizio rassegna non valido (%s). Devi inserire una data nel formato YYYY-MM-DD HH:MM.',
	'COPY_PERMISSIONS'				=> 'Copia permessi da',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Se selezioni la copia dei permessi, l’album avrà gli stessi permessi selezionati qui. Se nessun album è selezionato è necessario configurare i permessi successivamente.',
	'COPY_PERMISSIONS_ALBUM_FROM_EXPLAIN'	=> 'La fonte da dove vuoi copiare i permessi.',
	'COPY_PERMISSIONS_ALBUM_TO_EXPLAIN'		=> 'L’album di destinazione dove vuoi copiare i permessi.',
	'COPY_PERMISSIONS_CONFIRM'		=> 'Tieni presente che questa operazione sovrascrive tutte le autorizzazioni esistenti sugli album selezionati.',	
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Se selezioni la copia dei permessi, l’album avrà gli stessi permessi selezionati qui. Questo sovrascriverà ogni permesso che precedentemente configurato con questo album. Se non è selezionato nessun album verrano conservate le autorizzazioni correnti.',
	'COPY_PERMISSIONS_FROM'			=> 'Copia permessi da',
	'COPY_PERMISSIONS_SUCCESSFUL'	=> 'Permessi copiati con successo.',
	'COPY_PERMISSIONS_TO'			=> 'Permessi applicati a',	
	'CREATE_ALBUM'					=> 'Crea nuovo album',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Cancella contenuto o sposta album',
	'DECIDE_MOVE_DELETE_SUBALBUMS'	=> 'Cancella sotto-albums o sposta album',
	'DEFAULT_SORT_EXPLAIN'			=> 'Se selezionato <samp>Default</samp>, sarà impostato l’ordinamento predefinito.',
	'DEFAULT_SORT_METHOD'			=> 'Metodo ordinamento predefinito',
	'DEFAULT_SORT_ORDER'			=> 'Ordinamento predefinito',
	'DELETE_ALBUM_SUBS'				=> 'Devi prima eliminare i sotto-albums',
	'DELETE_ALL_IMAGES'				=> 'Cancella immagini',
	'DELETE_IMAGES'					=> 'Cancella immagini',
	'DELETE_PERMISSIONS'			=> 'Cancella permessi',
	'DELETE_SUBALBUMS'				=> 'Cancella sotto-albums e le loro immagini',
	'DISP_BIRTHDAYS'				=> 'Mostra compleanni',
	'DISP_EXIF_DATA'				=> 'Dati di visualizzazione Exif',
	'DISP_FAKE_THUMB'				=> 'Mostra anteprime nella lista album',
	'DISP_LOGIN'					=> 'Mostra campo login',
	'DISP_LOGIN_EXP'				=> 'Solo ospiti',
	'DISP_PERSONAL_ALBUM_PROFILE'	=> 'Visualizza link ad album personali nel profilo utente',
	'DISP_STATISTIC'				=> 'Visualizza statistiche galleria',
	'DISP_TOTAL_IMAGES'				=> 'Visualizza "Totale immagini" nell’indice.' . $phpEx,
	'DISP_USER_IMAGES_PROFILE'		=> 'Visualizza statistiche con caricamento immagini nel profilo utente',
	'DISP_VIEWTOPIC_ICON'			=> 'Mostra pulsante all’album personale nel vedi argomento (viewtopic).' . $phpEx,
	'DISP_VIEWTOPIC_IMAGES'			=> 'Mostra conteggio immagini nel vedi argomento (viewtopic).' . $phpEx,
	'DISP_VIEWTOPIC_LINK'			=> 'Link conteggio immagine nelle immagini utente',
	'DISP_WHOISONLINE'				=> 'Mostra chi c’è on line',
	'DISPLAY_IN_RRC'				=> 'Visualizza immagini di questo album in immagini "Recenti-Casuali"',
	'DONT_COPY_PERMISSIONS'			=> 'Non copiare permessi',

	'EDIT_ALBUM'					=> 'Modifica album',

	'FAKE_THUMB_SIZE'				=> 'Dimensione anteprima',
	'FAKE_THUMB_SIZE_EXP'			=> 'Se vuoi ridimensionare a piena immagine ricorda 16 pixels per la black-info-line',

	'GALLERY_ALBUMS_TITLE'			=> 'Controllo albums galleria',
	'GALLERY_CONFIG'				=> 'Configurazione galleria',
	'GALLERY_CONFIG_EXPLAIN'		=> 'Puoi modificare la configurazione generale di phpBB Gallery qui.',
	'GALLERY_CONFIG_UPDATED'		=> 'Configurazione galleria aggiornata con successo.',
	'GALLERY_INDEX'					=> 'Indice galleria',
	'GALLERY_PURGE_CACHE_EXPLAIN'	=> 'Se usi lo strumento cache anteprime, devi cancellare prima la tua cache dopo aver modificato la configurazione anteprime in "Configurazione galleria" in modo che esse vengano rigenerate.',
	'GALLERY_STATS'					=> 'Statictiche galleria',
	'GALLERY_VERSION'				=> 'Versione galleria',
	'GD_VERSION'					=> 'Ottimizza per versione GD',
	'GENERAL_ALBUM_SETTINGS'		=> 'Configurazione generale album',
	'GIF_ALLOWED'					=> 'Permetti il caricamento di file GIF',
	'GUPLOAD_DIR_SIZE'				=> 'Dimensione directory/-caricamento',

	'HACKING_ATTEMPT'				=> 'Tentativo Hacking!',
	'HANDLE_IMAGES'					=> 'Che cosa fare con le immagini',
	'HANDLE_SUBS'					=> 'Che cosa fare con i sotto-albums',
	'HOTLINK_ALLOWED'				=> 'Domini consentiti per hotlink',
	'HOTLINK_ALLOWED_EXP'			=> 'I domini devono essere separati da una virgola (no spazi). Es: "flying-bits.org,phpbb.com"',
	'HOTLINK_PREVENT'				=> 'Prevenzione hotlink',

	'IMAGE_DESC_MAX_LENGTH'			=> 'Lunghezza massima descrizione/commento (bytes)',
	'IMAGE_ID'						=> 'ID-immagine',
	'IMAGE_SETTINGS'				=> 'Configurazione immagine',
	'IMAGES_PER_DAY'				=> 'immagini per giorno',
	'IMPORT_ALBUM'					=> 'Album importati per:',
	'IMPORT_DEBUG_MES'				=> '%1$s immagini importate. Ci sono ancora %2$s immagini.',
	'IMPORT_DIR_EMPTY'				=> 'La cartella %s è vuota. Devi prima caricare le immagini prima di fare l’importazione.',
	'IMPORT_FINISHED'				=> 'Tutte le %1$s immagini sono state importate con successo.',
	'IMPORT_MISSING_ALBUM'			=> 'Seleziona un album per importare le immagini.',
	'IMPORT_SELECT'					=> 'Scegli l’immagine che vuoi importare. Successivamente carica le immagini cancellate. Tutte le immagini sono ora disponibili.',
	'IMPORT_SCHEMA_CREATED'			=> 'Lo schema di importazione è stato creato con successo, attendi ora l’importazione delle immagini.',
	'IMPORT_USER'					=> 'Inviata da',
	'IMPORT_USER_EXP'				=> 'Qui puoi aggiungere l’immagine ad un’altro utente.',
	'INDEX_SETTINGS'				=> 'Configurazione per galleria/indice.' . $phpEx,
	'INFO_LINE'						=> 'Visualizza dimensione-file su anteprima',
	'INHERIT_PERMISSIONS_ALBUM'		=> 'Ereditano le autorizzazioni di un altro album',
	'INHERIT_PERMISSIONS_VICTIM'	=> 'Ereditano le autorizzazioni di un altra configurazione',

	'JPG_ALLOWED'					=> 'Consenti il caricamento di file JPG',
	'JPG_QUALITY'					=> 'Qualità JPG',
	'JPG_QUALITY_EXP'				=> 'Quando si effettua la rotazione o il ridimensionamento delle immagini, la dimensione del file potrebbe aumentare. Con questa opzione è possibile ridurre la qualità, per risparmiare spazio su disco.',
	
	'LIST_INDEX'					=> 'Lista sotto-album nella legenda dell’album padre',
	'LIST_INDEX_EXPLAIN'			=> 'Visualizza questo album sull’indice e altrove come un collegamento all’interno dell’album padre se l’opzione “ lista sutto-albums nella legenda ” è attivata.',
	'LIST_SUBALBUMS'				=> 'Lista sotto-album nella legenda',
	'LIST_SUBALBUMS_EXPLAIN'		=> 'Visualizza questo album sull’indice e altrove come un collegamento all’interno dell’album padre se l’opzione “ lista sutto-albums nella legenda ” è attivata.',
	'LOCKED'						=> 'Bloccato',
	'LOOK_UP_ALBUM'					=> 'Selziona un album',
	'LOOK_UP_ALBUMS_EXPLAIN'		=> 'Sei in grado di selezionare più di un album.',	

	'MANAGE_CRASHED_ENTRIES'		=> 'Gestione voci bloccate',
	'MANAGE_CRASHED_IMAGES'			=> 'Gestione immagini bloccate',
	'MANAGE_PERSONALS'				=> 'Gestione albums personali',
	'MAX_IMAGES_PER_ALBUM'			=> 'Numero massimo di immagini per ciascun album',
	'MAX_IMAGES_PER_ALBUM_EXP'		=> 'Illimitata è -1',
	'MEDIUM_CACHE'					=> 'Cache immagini ridimensionate per immagine-pagina',
	'MEDIUM_DIR_SIZE'				=> 'Dimensione media/-directory',
	'MISSING_ALBUM_NAME'			=> 'Devi aggiungere un nome per questo album.',
	'MISSING_AUTHOR'				=> 'Immagini senza autore valido',
	'MISSING_AUTHOR_C'				=> 'Commenti senza autore valido',
	'MISSING_ENTRY'					=> 'Files senza voce nel database',
	'MISSING_IMPORT_SCHEMA'			=> 'Lo schema di importazione (%s) non è stato trovato.',
	'MISSING_OWNER'					=> 'Album personali senza autore valido',
	'MISSING_OWNER_EXP'				=> 'Sotto-albums, immagini e commenti possono essere eliminati.',
	'MISSING_SOURCE'				=> 'Le immagini senza file',
	'MOVE_IMAGES_TO'				=> 'Sposta immagini su',
	'MOVE_SUBALBUMS_TO'				=> 'Sposta sotto-albums su',

	'NEW_ALBUM_CREATED'				=> 'Nuovo album creato con successo',
	'NO_ALBUM_SELECTED'				=> 'È necessario selezionare almeno un album.',
	'NO_DESTINATION_ALBUM'			=> 'Non è stato specificato un album per spostare il contenuto.',	
	'NO_FILE_SELECTED'				=> 'È necessario selezionare almeno un file.',
	'NO_PERMISSIONS_SELECTED'		=> 'È necessario selezionare almeno un album o una speciale autorizzazione.',
	'NO_VICTIM_SELECTED'			=> 'È necessario selezionare almeno un utente o gruppo.',
	'NO_INHERIT'					=> 'Non copiare permessi',
	'NO_PARENT_ALBUM'				=> 'Nessun padre',
	'NO_SUBALBUMS'					=> 'Nessun album allegato',
	'NUMBER_ALBUMS'					=> 'Numero di albums',
	'NUMBER_IMAGES'					=> 'Numero di immagini',
	'NUMBER_PERSONALS'				=> 'Numero di albums personali',

	'OWN_PERSONAL_ALBUMS'			=> 'Propri album personali',

	'PERMISSION'					=> 'Permessi',
	'PERMISSION_NEVER'				=> 'Mai',
	'PERMISSION_NO'					=> 'No',
	'PERMISSION_SETTING'			=> 'Configurazione',
	'PERMISSION_YES'				=> 'Si',

	'PERMISSION_A_LIST'				=> 'Può vedere album',
	'PERMISSION_ALBUM_COUNT'		=> 'Numero di sotto-albums personali possibili',
	'PERMISSION_ALBUM_UNLIMITED'	=> 'Numero illimitato di sotto-albums personali',
	'PERMISSION_C'					=> 'Commenti',
	'PERMISSION_C_DELETE'			=> 'Può cancellare i suoi commenti',
	'PERMISSION_C_EDIT'				=> 'Può modificare i suoi commenti',
	'PERMISSION_C_POST'				=> 'Può commentare le immagini',
	'PERMISSION_C_READ'				=> 'Può leggere i commenti',
	'PERMISSION_I'					=> 'immagini',
	'PERMISSION_I_APPROVE'			=> 'Può caricare immagini senza approvazione',
	'PERMISSION_I_COUNT'			=> 'Numero di immagini caricate',
	'PERMISSION_I_DELETE'			=> 'Può cancellare le sue immagini',
	'PERMISSION_I_EDIT'				=> 'Può modificare le sue immagini',
	'PERMISSION_I_LOCK'				=> 'Può bloccare immagini',
	'PERMISSION_I_RATE'				=> 'Può votare immagini',
    'PERMISSION_I_RATE_EXPLAIN'		=> 'Gli ospiti e le immagini caricate non possono <strong>mai</strong> votare le immagini.',	
	'PERMISSION_I_REPORT'			=> 'Può segnalare immagini',
	'PERMISSION_I_UNLIMITED'		=> 'Può caricare immagini illimitate',
	'PERMISSION_I_UPLOAD'			=> 'Può caricare immagini',
	'PERMISSION_I_UPLOAD_EXPLAIN'	=> 'Questa autorizzazione è anche usata per determinare se l’utente può spostare le immagini per l’album, quando dispone di autorizzazioni di moderatore in altri forum.',
	'PERMISSION_I_VIEW'				=> 'Può vedere immagini',
	'PERMISSION_I_WATERMARK'		=> 'Può vedere immagini con watermark',
	'PERMISSION_M'					=> 'Moderazione',
	'PERMISSION_MISC'				=> 'Misti', //Miscellaneous
	'PERMISSION_M_COMMENTS'			=> 'Può moderare commenti',
	'PERMISSION_M_DELETE'			=> 'Può cancellare immagini',
	'PERMISSION_M_EDIT'				=> 'Può modificare immagini',
	'PERMISSION_M_MOVE'				=> 'Può spostare immagini',
	'PERMISSION_M_REPORT'			=> 'Può gestire le segnalazioni',
	'PERMISSION_M_STATUS'			=> 'Può approvare e bloccare le immagini',

	'PERMISSION_EMPTY'				=> 'Non hai configurato tutti i permessi.',
	'PERMISSIONS'					=> 'Permessi',
	'PERMISSIONS_COPY'				=> 'Copia permessi album',
	'PERMISSIONS_COPY_EXPLAIN'		=> 'Qui è possibile copiare i permessi da un album ad un altro.',	
	'PERMISSIONS_EXPLAIN'			=> 'Qui è possibile modificare gli album a cui utenti e gruppi possono accedere.',
	'PERMISSIONS_STORED'			=> 'Permessi salvati con successo.',
	'PERSONAL_ALBUM_INDEX'			=> 'Vedi albums personali nell’indice',
	'PERSONAL_ALBUM_INDEX_EXP'		=> 'Se scegli "No", ci sarà il collegamento diretto.',
	'PGALLERIES_PER_PAGE'			=> 'Numero di gallerie personali per pagina',
	'PHPBB_INTEGRATION'				=> 'integrazione phpBB',
	'PNG_ALLOWED'					=> 'Consenti invio di files PNG',
	'PURGED_CACHE'					=> 'Svuota la cache',

	'RATE_SCALE'					=> 'Scala voti',
	'RATE_SYSTEM'					=> 'Attiva sistema voti',
	'REDIRECT_ACL'					=> 'Ora puoi attivare e %sconfigurare permessi%s per questo album.',
	'REMOVE_IMAGES_FOR_CAT'			=> 'E’ necessario eliminare le immagini di questo album, prima di passare il tipo di album alla categoria.',
	'RESET_RATING'					=> 'Azzera voti album',
	'RESET_RATING_COMPLETED'		=> 'Voti cancellati con successo.',
	'RESET_RATING_CONFIRM'			=> 'Vuoi davvero eliminare tutti i voti sulle immagini dell’album "%s"?',
	'RESET_RATING_EXPLAIN'			=> 'Elimina tutti i voti sulle immagini nell’album specifico. Immettere id-album nel campo sul lato destro.',
	'RESIZE_IMAGES'					=> 'Ridimensiona immagini più grandi',
	'RESYNC_IMAGECOUNTS'			=> 'Sincronizza conteggio immagini',
	'RESYNC_IMAGECOUNTS_CONFIRM'	=> 'Sei sicuro di voler sincronizzare il conteggio delle immagini?',
	'RESYNC_IMAGECOUNTS_EXPLAIN'	=> 'Solo le immagini esistenti saranno prese in considerazione.',
	'RESYNC_LAST_IMAGES'			=> 'Aggiorna "ultima immagine"',
	'RESYNC_PERSONALS'				=> 'Sincronizza id albums personali',
	'RESYNC_PERSONALS_CONFIRM'		=> 'Sei sicuro di voler sincronizzare il conteggio delle immagini?',
	'RESYNCED_IMAGECOUNTS'			=> 'Sincronizza conteggio immagini',
	'RESYNCED_LAST_IMAGES'			=> 'Aggiorna "ultima immagine"',
	'RESYNCED_PERSONALS'			=> 'Sincronizza id albums personali',
	'ROTATE_IMAGES'                 => 'Permette di ruotare le immagini',
	'ROTATE_IMAGES_EXP'				=> 'Questa funzione non può essere utilizzata al momento, come la funzione di "ruota immagine"  anche se non è inclusa nella vostra versione GD.',
	'ROWS_PER_PAGE'					=> 'Numero di righe nella pagina di anteprima',

	'RRC_DISPLAY_ALBUMNAME'			=> 'Nome album',
	'RRC_DISPLAY_COMMENTS'			=> 'Commenti',
	'RRC_DISPLAY_IMAGENAME'			=> 'Nome immagine',
	'RRC_DISPLAY_IMAGETIME'			=> 'Tempo immagine',
	'RRC_DISPLAY_IMAGEVIEWS'		=> 'Visualizzazioni immagini',
	'RRC_DISPLAY_IP'                => 'Ip utente',
	'RRC_DISPLAY_NONE'				=> 'Nessuno',
	'RRC_DISPLAY_OPTIONS'			=> 'I valori che devono essere visualizzati sotto le anteprime',
	'RRC_DISPLAY_USERNAME'			=> 'Nome utente',
	'RRC_DISPLAY_RATINGS'			=> 'Voti',
	'RRC_GINDEX'					=> 'Recenti- & immagini Casuali & Commenti - Funzionalità',
	'RRC_GINDEX_COLUMNS'			=> 'Colonne',
	'RRC_GINDEX_COMMENTS'			=> 'Seleziona e sposta commenti',
	'RRC_GINDEX_CONTESTS'			=> 'Numero di concorsi',
	'RRC_GINDEX_CROWS'				=> 'Numero di commenti',
	'RRC_GINDEX_MODE'				=> 'Modo',
	'RRC_GINDEX_MODE_EXP'			=> '"immagini casuali" può richiedere maggior carico su database di grandi dimensioni!',
	'RRC_GINDEX_PGALLERIES'			=> 'Visulizzazione immagini di albums personali',
	'RRC_GINDEX_ROWS'				=> 'Righe',
	'RRC_MODE_COMMENTS'				=> 'Commenti',
	'RRC_MODE_NONE'					=> 'Nessuno',
	'RRC_MODE_RANDOM'				=> 'immagini casuali',
	'RRC_MODE_RECENT'				=> 'immagini recenti',
	'RRC_PROFILE_COLUMNS'			=> 'Colonne',
	'RRC_PROFILE_MODE'				=> 'Modo "Recenti- & immagini Casuali"-Funzionalità nel profilo',
	'RRC_PROFILE_MODE_EXP'			=> '"immagini casuali" può richiedere maggior carico su database di grandi dimensioni!',
	'RRC_PROFILE_ROWS'				=> 'Righe',

	'RSZ_HEIGHT'					=> 'Altezza massima sulla visualizzazione immagini',
	'RSZ_WIDTH'						=> 'Larghezza massima sulla visualizzazione immagini',
    
	'SEARCH_SETTINGS'				=> 'Configurazioni di ricerca',
	'SELECT_ALBUM'					=> 'Seleziona album',
	'SELECT_GROUPS'					=> 'Seleziona gruppi',
	'SELECT_PERM_SYS'				=> 'Seleziona sistema-permessi',
	'SELECT_PERMISSIONS'			=> 'Seleziona permessi',
	'SELECTED_ALBUM_NOT_EXIST'		=> 'Album non esistenti.',	
	'SELECTED_ALBUMS'				=> 'Seleziona albums',
	'SELECTED_GROUPS'				=> 'Seleziona gruppi',
	'SELECTED_PERM_SYS'				=> 'Seleziona sistema-permessi',
	'SET_PERMISSIONS'				=> '<br />Configura <a href="%s">permessi</a> now.',
	'SHORTED_IMAGENAMES'			=> 'Abbrevia nome immagini',
	'SHORTED_IMAGENAMES_EXP'		=> 'Se il nome di un’immagine include spazi ed è troppo lungo, il layout potrebbe essere danneggiato.',
	'SORRY_NO_STATISTIC'			=> 'Spiacente, il valore delle statistiche non è disponibile.',
	'SYNC_IN_PROGRESS'				=> 'Sincronizza album',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> 'Attuale sincronizzazione intervallo immagini %1$d/%2$d.',

	'THUMBNAIL_CACHE'				=> 'Anteprima cache',
	'THUMBNAIL_QUALITY'				=> 'Qualita anteprima (1-100)',
	'THUMBNAIL_SETTINGS'			=> 'Configurazione anteprima',

	'UC_IMAGE_NAME'					=> 'Nome immagine',
	'UC_IMAGE_ICON'					=> 'Ultima icona immagine',
	'UC_IMAGEPAGE'					=> 'Imagine su pagina immagini (con commenti e voti)',
	'UC_LINK_CONFIG'				=> 'Link configurazione',
	'UC_LINK_HIGHSLIDE'				=> 'Apri Highslide-Plugin',
	'UC_LINK_IMAGE'					=> 'Apri immagini',
	'UC_LINK_IMAGE_PAGE'			=> 'Apri pagina immagine (con commenti e voti)',
	'UC_LINK_LYTEBOX'				=> 'Apri Lytebox-Plugin',
	'UC_LINK_NONE'					=> 'Nessun Link',
    'UC_LINK_SHADOWBOX'             => 'Apri Shadowbox-Plugin',
	'UC_THUMBNAIL'					=> 'Anteprima',
	'UC_THUMBNAIL_EXP'				=> 'Usato anche per il BBCode.',
	'UNLOCKED'						=> 'Sbloccato',
	'UPDATE_BBCODE'					=> 'BBCode aggiornato',
	'UPLOAD_IMAGES'					=> 'Carica immagini multiple',

	'VIEW_IMAGE_URL'				=> 'Visualizza URL immagini sulla pagina immagini',

	'WATERMARK'						=> 'Watermark',
	'WATERMARK_HEIGHT'				=> 'Altezza minima per watermark',
	'WATERMARK_HEIGHT_EXP'			=> 'Per evitare che immagini piccole siano contenute in Watermark, è possibile immettere una minimo-larghezza/altezza.',
	'WATERMARK_IMAGES'				=> 'immagini Watermark',
	'WATERMARK_OPTIONS'				=> 'Opzioni Watermark',
	'WATERMARK_POSITION'			=> 'Posizione Watermark',
	'WATERMARK_POSITION_BOTTOM'		=> 'In basso',
	'WATERMARK_POSITION_CENTER'		=> 'centro',
	'WATERMARK_POSITION_LEFT'		=> 'sinistra',
	'WATERMARK_POSITION_MIDDLE'		=> 'Al centro',
	'WATERMARK_POSITION_RIGHT'		=> 'destra',
	'WATERMARK_POSITION_TOP'		=> 'In alto',
	'WATERMARK_SOURCE'		 		=> 'Percorso file Watermark (relativo alla root del tuo phpbb)',
	'WATERMARK_WIDTH'				=> 'Larghezza minima per watermark',
	'WATERMARK_WIDTH_EXP'			=> 'Per evitare che immagini piccole siano contenute in Watermark, è possibile immettere una minimo-larghezza/altezza.',
));

/**
* A copy of Handyman` s MOD version check, to view it on the gallery overview
*/
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TOPIC'	=> 'Annuncio di rilascio',
	'CURRENT_VERSION'		=> 'Versione corrente',
	'DOWNLOAD_LATEST'		=> 'Download ultima versione',
	'LATEST_VERSION'		=> 'Ultima Versione',
	'NO_INFO'					=> 'Il server non può essere contattato',
	'NOT_UP_TO_DATE'			=> 'La MOD %s non è aggiornata',
	'RELEASE_ANNOUNCEMENT'	=> 'Argomento annuncio',
	'UP_TO_DATE'			=> 'La MOD %s è aggiornata',
	'VERSION_CHECK'			=> 'Controllo versione MOD',
));

?>