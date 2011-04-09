<?php
/**
*
* common [Italian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @copyright (c) 2010 phpBB.it - translated on 2010-11-17
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'TRANSLATION_INFO'	=> 'Traduzione Italiana <a href="http://www.phpbb.it/">phpBB.it</a>',
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'		=> '|d M Y|',	// 01 Jan 2007 (with Relative days enabled)
	'USER_LANG'			=> 'it',

	'1_DAY'			=> '1 giorno',
	'1_MONTH'		=> '1 mese',
	'1_YEAR'		=> '1 anno',
	'2_WEEKS'		=> '2 settimane',
	'3_MONTHS'		=> '3 mesi',
	'6_MONTHS'		=> '6 mesi',
	'7_DAYS'		=> '7 giorni',

	'ACCOUNT_ALREADY_ACTIVATED'		=> 'Il tuo account è già stato attivato.',
	'ACCOUNT_DEACTIVATED'			=> 'Il tuo account è stato disattivato e può essere riattivato solo da un amministratore.',
	'ACCOUNT_NOT_ACTIVATED'			=> 'Il tuo account non è ancora stato attivato.',
	'ACP'							=> 'Pannello di Controllo Amministratore',
	'ACTIVE'						=> 'Attivo',
	'ACTIVE_ERROR'					=> 'Il nome utente inserito risulta ancora inattivo. Se riscontri problemi nell’attivazione dell’account contatta un amministratore.',
	'ADMINISTRATOR'					=> 'Amministratore',
	'ADMINISTRATORS'				=> 'Amministratori',
	'AGE'							=> 'Età',
	'AIM'							=> 'AIM',
	'ALLOWED'						=> 'Permesso',
	'ALL_FILES'						=> 'Tutti i file',
	'ALL_FORUMS'					=> 'Tutti i forum',
	'ALL_MESSAGES'					=> 'Tutti i messaggi privati',
	'ALL_POSTS'						=> 'Tutti i messaggi',
	'ALL_TIMES'						=> 'Tutti gli orari sono %1$s %2$s',
	'ALL_TOPICS'					=> 'Tutti gli argomenti',
	'AND'							=> 'E',
	'ARE_WATCHING_FORUM'			=> 'Hai scelto di ricevere aggiornamenti per questo forum.',
	'ARE_WATCHING_TOPIC'			=> 'Hai scelto di ricevere aggiornamenti per questo argomento.',
	'ASCENDING'						=> 'Crescente',
	'ATTACHMENTS'					=> 'Allegati',
	'ATTACHED_IMAGE_NOT_IMAGE'		=> 'Il file immagine che vuoi allegare non è valido.',
	'AUTHOR'						=> 'Autore',
	'AUTH_NO_PROFILE_CREATED'		=> 'La creazione del profilo utente è fallita.',
	'AVATAR_DISALLOWED_CONTENT'     => 'Il contenuto è stato respinto in quanto il file caricato è stato identificato come un possibile vettore di attacco.',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'Questo file non può essere visualizzato perchè l’estensione <strong>%s</strong> non è permessa.',
	'AVATAR_EMPTY_REMOTE_DATA'		=> 'L’avatar non puó essere caricato, il file potrebbe non essere valido o corrotto.',
	'AVATAR_EMPTY_FILEUPLOAD'		=> 'Il file dell’avatar inviato è vuoto.',
	'AVATAR_INVALID_FILENAME'		=> '%s è un nome file non valido.',
	'AVATAR_NOT_UPLOADED'			=> 'L’avatar non puó essere caricato.',
	'AVATAR_NO_SIZE'				=> 'Non è possibile determinare larghezza o altezza dell’avatar collegato. Inserisci i valori manualmente.',
	'AVATAR_PARTIAL_UPLOAD'			=> 'Il file è stato caricato solo parzialmente.',
	'AVATAR_PHP_SIZE_NA'			=> 'Il file avatar è troppo grande.<br />Non è possibile determinare la grandezza massima permessa definita da PHP in php.ini.',
	'AVATAR_PHP_SIZE_OVERRUN'		=> 'Il file avatar è troppo grande. la dimensione massima permessa è %1$d %2$s.<br />Questo valore è impostato nel file di sistema php.ini e non puó essere modificato.',
	'AVATAR_URL_INVALID'			=> 'L’indirizzo specificato non è valido.',
	'AVATAR_URL_NOT_FOUND'			=> 'Il file specificato non puó essere trovato.',
	'AVATAR_WRONG_FILESIZE'			=> 'La dimensione file dell’avatar deve essere compresa tra 0 e %1d %2s.',
	'AVATAR_WRONG_SIZE'				=> 'L’avatar sottoposto è largo %5$d pixel e alto %6$d pixel. Gli avatar devono avere una larghezza minima di %1$d pixel e un’altezza minima %2$d pixel, mentre non possono superare %3$d pixel di larghezza e %4$d pixel di altezza.',

	'BACK_TO_TOP'			=> 'Top',
	'BACK_TO_PREV'			=> 'Torna alla pagina precedente',
	'BAN_TRIGGERED_BY_EMAIL'=> 'Questo ban è riferito al tuo indirizzo e-mail.',
	'BAN_TRIGGERED_BY_IP'	=> 'Questo ban è riferito al tuo indirizzo IP.',
	'BAN_TRIGGERED_BY_USER'	=> 'Questo ban è riferito al tuo nome utente.',
	'BBCODE_GUIDE'			=> 'Guida BBCode',
	'BCC'					=> 'CCN',
	'BIRTHDAYS'				=> 'Compleanni',
	'BOARD_BAN_PERM'		=> 'Sei stato <strong>permanentemente</strong> bannato da questa board.<br /><br />Contatta un %2$samministratore%3$s per maggiori informazioni.',
	'BOARD_BAN_REASON'		=> 'Motivazione del ban: <strong>%s</strong>',
	'BOARD_BAN_TIME'		=> 'Sei stato bannato fino al <strong>%1$s</strong>.<br /><br />Contatta un %2$samministratore%3$s per maggiori informazioni.',
	'BOARD_DISABLE'			=> 'Spiacente, in questo momento la board è irraggiungibile.',
	'BOARD_DISABLED'		=> 'La board è momentaneamente disattivata.',
	'BOARD_UNAVAILABLE'		=> 'Spiacente, la board è momentaneamente irraggiungibile. Riprova tra qualche minuto.',
	'BROWSING_FORUM'		=> 'Visitano il forum: %1$s',
	'BROWSING_FORUM_GUEST'	=> 'Visitano il forum: %1$s e %2$d ospite',
	'BROWSING_FORUM_GUESTS'	=> 'Visitano il forum: %1$s e %2$d ospiti',
	'BYTES'					=> 'Bytes',

	'CANCEL'				=> 'Annulla',
	'CHANGE'				=> 'Modifica',
	'CHANGE_FONT_SIZE'		=> 'Modifica dimensione carattere',
	'CHANGING_PREFERENCES'	=> 'Modifica preferenze board',
	'CHANGING_PROFILE'		=> 'Modifica impostazioni profilo',
	'CLICK_VIEW_PRIVMSG'	=> '%sVai alla tua casella di posta%s',
	'COLLAPSE_VIEW'			=> 'Stringi visuale',
	'CLOSE_WINDOW'			=> 'Chiudi finestra',
	'COLOUR_SWATCH'			=> 'Selezione colori',
	'COMMA_SEPARATOR'		=> ', ',	// Used in pagination of ACP & prosilver, use localised comma if appropriate, eg: Ideographic or Arabic
	'CONFIRM'				=> 'Conferma',
	'CONFIRM_CODE'			=> 'Codice di conferma',
	'CONFIRM_CODE_EXPLAIN'	=> 'Inserisci il codice esattamente come lo vedi nell’immagine. Non c’è differenza tra maiuscole e minuscole. Lo zero non esiste.',
	'CONFIRM_CODE_WRONG'	=> 'Il codice di conferma inserito è errato.',
	'CONFIRM_OPERATION'		=> 'Sei sicuro di voler effettuare questa operazione?',
	'CONGRATULATIONS'		=> 'Tanti auguri a',
	'CONNECTION_FAILED'		=> 'Connessione fallita.',
	'CONNECTION_SUCCESS'	=> 'Connessione riuscita!',
	'COOKIES_DELETED'		=> 'Tutti i cookie sono stati cancellati correttamente.',
	'CURRENT_TIME'			=> 'Oggi è %s',

	'DAY'					=> 'Giorno',
	'DAYS'					=> 'giorni',
	'DELETE'				=> 'Cancella',
	'DELETE_ALL'			=> 'Cancella tutto',
	'DELETE_COOKIES'		=> 'Cancella cookie',
	'DELETE_MARKED'			=> 'Cancella selezionati',
	'DELETE_POST'			=> 'Cancella messaggio',
	'DELIMITER'				=> 'Delimitatore',
	'DESCENDING'			=> 'Decrescente',
	'DISABLED'				=> 'Disabilitato',
	'DISPLAY'				=> 'Visualizza',
	'DISPLAY_GUESTS'		=> 'Visualizza ospiti',
	'DISPLAY_MESSAGES'		=> 'Visualizza ultimi messaggi',
	'DISPLAY_POSTS'			=> 'Visualizza ultimi messaggi',
	'DISPLAY_TOPICS'		=> 'Visualizza ultimi argomenti',
	'DOWNLOADED'			=> 'Scaricato',
	'DOWNLOADING_FILE'		=> 'Trasferimento file in corso',
	'DOWNLOAD_COUNT'		=> 'Scaricato %d volta',
	'DOWNLOAD_COUNTS'		=> 'Scaricato %d volte',
	'DOWNLOAD_COUNT_NONE'	=> 'Mai scaricato',
	'VIEWED_COUNT'			=> 'Osservato %d volta',
	'VIEWED_COUNTS'			=> 'Osservato %d volte',
	'VIEWED_COUNT_NONE'		=> 'Mai osservato',

	'EDIT_POST'							=> 'Modifica messaggio',
	'EMAIL'								=> 'E-mail', // Short form for EMAIL_ADDRESS
	'EMAIL_ADDRESS'						=> 'Indirizzo e-mail',
	'EMAIL_SMTP_ERROR_RESPONSE'			=> 'Si è verificato un errore alla <strong>linea %1$s</strong> durante l’invio e-mail. Messaggio: %2$s.',
	'EMPTY_SUBJECT'						=> 'Devi specificare un oggetto per il nuovo argomento.',
	'EMPTY_MESSAGE_SUBJECT'				=> 'Devi specificare un oggetto per il nuovo messaggio.',
	'ENABLED'							=> 'Abilitato',
	'ENCLOSURE'							=> 'Incluso',
	'ERR_CHANGING_DIRECTORY'			=> 'Impossibile cambiare cartella.',
	'ERR_CONNECTING_SERVER'				=> 'Errore durante la connessione al server.',
	'ERR_JAB_AUTH'						=> 'Autorizzazione negata sul server Jabber.',
	'ERR_JAB_CONNECT'					=> 'Impossibile connettersi al server Jabber.',
	'ERR_UNABLE_TO_LOGIN'				=> 'Il nome utente o la password non sono corretti.',
	'ERR_UNWATCHING'                    => 'Si è verificato un errore durante l’annullamento della sottoscrizione.',
	'ERR_WATCHING'                      => 'Si è verificato un errore durante la sottoscrizione.',
	'ERR_WRONG_PATH_TO_PHPBB'			=> 'Il percorso a phpBB specificato sembra non essere valido.',
	'EXPAND_VIEW'						=> 'Espandi visuale',
	'EXTENSION'							=> 'Estensione',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'L’estensione <strong>%s</strong> è stata disattivata e non puó essere visualizzata.',

	'FAQ'					=> 'FAQ',
	'FAQ_EXPLAIN'			=> 'FAQ (Domande Frequenti)',
	'FILENAME'				=> 'Nome file',
	'FILESIZE'				=> 'Dimensione file',
	'FILEDATE'				=> 'Data del file',
	'FILE_COMMENT'			=> 'Commento file',
	'FILE_NOT_FOUND'		=> 'Il file cercato non puó essere trovato.',
	'FIND_USERNAME'			=> 'Trova utente',
	'FOLDER'				=> 'Cartella',
	'FORGOT_PASS'			=> 'Ho dimenticato la password',
	'FORM_INVALID'			=> 'Il form inviato non è valido. Prova a inviarlo di nuovo.',
	'FORUM'					=> 'Forum',
	'FORUMS'				=> 'Forum',
	'FORUMS_MARKED'			=> 'Tutti i forum sono stati segnati come già letti.',
	'FORUM_CAT'				=> 'Categoria forum',
	'FORUM_INDEX'			=> 'Indice',
	'FORUM_LINK'			=> 'Forum link',
	'FORUM_LOCATION'		=> 'Posizione forum',
	'FORUM_LOCKED'			=> 'Forum bloccato',
	'FORUM_RULES'			=> 'Regole del forum',
	'FORUM_RULES_LINK'		=> 'Clicca per leggere le regole del forum',
	'FROM'					=> 'da',
	'FSOCK_DISABLED'		=> 'L’operazione non puó essere terminata perché la funzione <var>fsockopen</var> è stata disabilitata o il server interrogato non puó essere trovato.',

	'FTP_FSOCK_HOST'				=> 'Host FTP',
	'FTP_FSOCK_HOST_EXPLAIN'		=> 'Server FTP utilizzato per la connessione del tuo sito.',
	'FTP_FSOCK_PASSWORD'			=> 'Password FTP',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'Password per il tuo nome utente FTP.',
	'FTP_FSOCK_PORT'				=> 'Porta FTP',
	'FTP_FSOCK_PORT_EXPLAIN'		=> 'Porta utilizzata per connetterti al server FTP.',
	'FTP_FSOCK_ROOT_PATH'			=> 'Percorso a phpBB',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'Percorso alla cartella principale di phpBB.',
	'FTP_FSOCK_TIMEOUT'				=> 'Timeout FTP',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'		=> 'Tempo, in secondi, in cui il sistema attende una risposta da parte del server.',
	'FTP_FSOCK_USERNAME'			=> 'Nome utente FTP',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'Nome utente utilizzato per connetterti al server.',

	'FTP_HOST'					=> 'Host FTP',
	'FTP_HOST_EXPLAIN'			=> 'Server FTP utilizzato per la connessione del tuo sito.',
	'FTP_PASSWORD'				=> 'Password FTP',
	'FTP_PASSWORD_EXPLAIN'		=> 'Password per il tuo nome utente FTP.',
	'FTP_PORT'					=> 'Porta FTP',
	'FTP_PORT_EXPLAIN'			=> 'Porta utilizzata per connetterti al server.',
	'FTP_ROOT_PATH'				=> 'Percorso a phpBB',
	'FTP_ROOT_PATH_EXPLAIN'		=> 'Percorso alla cartella principale di phpBB.',
	'FTP_TIMEOUT'				=> 'Timeout FTP',
	'FTP_TIMEOUT_EXPLAIN'		=> 'Tempo, in secondi, in cui il sistema attende una risposta da parte del server.',
	'FTP_USERNAME'				=> 'Nome utente FTP',
	'FTP_USERNAME_EXPLAIN'		=> 'Nome utente utilizzato per connetterti al server.',

	'GENERAL_ERROR'				=> 'Errore Generale',
	'GB'						=> 'GB',
    'GIB'						=> 'GiB',
	'GO'						=> 'Vai',
	'GOTO_PAGE'					=> 'Vai alla pagina',
	'GROUP'						=> 'Gruppo',
	'GROUPS'					=> 'Gruppi',
	'GROUP_ERR_TYPE'			=> 'Il tipo di gruppo specificato non è appropriato.',
	'GROUP_ERR_USERNAME'		=> 'Non hai specificato un nome per il gruppo.',
	'GROUP_ERR_USER_LONG'		=> 'Il nome gruppo non deve superare i 60 caratteri. Il nome gruppo specificato è troppo lungo.',
	'GUEST'						=> 'Ospite',
	'GUEST_USERS_ONLINE'		=> 'Ci sono %d ospiti connessi',
	'GUEST_USERS_TOTAL'			=> '%d ospiti',
	'GUEST_USERS_ZERO_ONLINE'	=> 'Ci sono 0 ospiti connessi',
	'GUEST_USERS_ZERO_TOTAL'	=> '0 ospiti',
	'GUEST_USER_ONLINE'			=> 'C’è %d ospite connesso',
	'GUEST_USER_TOTAL'			=> '%d ospite',
	'G_ADMINISTRATORS'			=> 'Amministratori',
	'G_BOTS'					=> 'Bot',
	'G_GUESTS'					=> 'Ospiti',
	'G_REGISTERED'				=> 'Utenti registrati',
	'G_REGISTERED_COPPA'		=> 'Utenti MINORENNI registrati',
	'G_GLOBAL_MODERATORS'		=> 'Moderatori globali',
	'G_NEWLY_REGISTERED'		=> 'Nuovi utenti registrati',

	'HIDDEN_USERS_ONLINE'		=> '%d utenti nascosti connessi',
	'HIDDEN_USERS_TOTAL'		=> '%d nascosti',
	'HIDDEN_USERS_TOTAL_AND'	=> '%d nascosti e ',
	'HIDDEN_USERS_ZERO_ONLINE'	=> '0 utenti nascosti connessi',
	'HIDDEN_USERS_ZERO_TOTAL'	=> '0 nascosti',
	'HIDDEN_USERS_ZERO_TOTAL_AND'	=> '0 nascosti e ',
	'HIDDEN_USER_ONLINE'		=> '%d utente nascosto connesso',
	'HIDDEN_USER_TOTAL'			=> '%d nascosto',
	'HIDDEN_USER_TOTAL_AND'		=> '%d nascosto e ',
	'HIDE_GUESTS'				=> 'Nascondi ospiti',
	'HIDE_ME'					=> 'Nascondi il mio stato per questa sessione',
	'HOURS'						=> 'Ore',
	'HOME'						=> 'Home',

	'ICQ'						=> 'ICQ',
	'ICQ_STATUS'				=> 'Stato ICQ',	
	'IF'						=> 'Se',
	'IMAGE'						=> 'Immagine',
	'IMAGE_FILETYPE_INVALID'	=> 'Il file immagine con estensione %d per il mimetype %s, non è supportato.',
	'IMAGE_FILETYPE_MISMATCH'	=> 'Errore nel formato immagine: dovrebbe avere estensione %1$s ma ha estensione %2$s.',
	'IN'						=> 'in',
	'INDEX'						=> 'Indice',
	'INFORMATION'				=> 'Informazione',
	'INTERESTS'					=> 'Interessi',
	'INVALID_DIGEST_CHALLENGE'	=> 'Dato inserito non valido.',
	'INVALID_EMAIL_LOG'			=> '<strong>%s</strong> potrebbe essere un indirizzo e-mail non valido?',
	'IP'						=> 'IP',
	'IP_BLACKLISTED'			=> 'Il tuo IP %1$s è stato bloccato perchè incluso nella blacklist. Per maggiori dettagli <a href="%2$s">%2$s</a>.',

	'JABBER'				=> 'Jabber',
	'JOINED'				=> 'Iscritto il',
	'JUMP_PAGE'				=> 'Inserisci il numero della pagina alla quale vuoi andare.',
	'JUMP_TO'				=> 'Vai a',
	'JUMP_TO_PAGE'			=> 'Clicca per andare alla pagina...',

	'KB'					=> 'KB',
	'KIB'					=> 'KiB',

	'LAST_POST'							=> 'Ultimo messaggio',
	'LAST_UPDATED'						=> 'Ultima attività',
	'LAST_VISIT'						=> 'Ultima visita',
	'LDAP_NO_LDAP_EXTENSION'			=> 'Estensione LDAP non disponibile.',
	'LDAP_NO_SERVER_CONNECTION'			=> 'Impossibile connettersi al server LDAP.',
	'LDAP_SEARCH_FAILED'				=> 'Si è verificato un errore durante la ricerca della directory LDAP.',
	'LEGEND'							=> 'Legenda',
	'LOCATION'							=> 'Località',
	'LOCK_POST'							=> 'Blocca messaggio',
	'LOCK_POST_EXPLAIN'					=> 'Non permette modifiche',
	'LOCK_TOPIC'						=> 'Blocca argomento',
	'LOGIN'								=> 'Login',
	'LOGIN_CHECK_PM'					=> 'Collegati per controllare i messaggi privati.',
	'LOGIN_CONFIRMATION'				=> 'Conferma login',
	'LOGIN_CONFIRM_EXPLAIN'				=> 'Dopo un numero massimo di tentativi di accesso falliti verrà richiesto l’inserimento di un codice di conferma. Questo serve a prevenire accessi non autorizzati. Il codice è visualizzato nell’immagine sottostante. Se l’immagine non compare o se hai problemi di visualizzazione, contatta un %samministratore%s.', // unused
	'LOGIN_ERROR_ATTEMPTS'				=> 'Hai superato il numero massimo di tentativi di accesso. In aggiunta ai dati nome utente e password dovrai inserire anche il codice di conferma che leggi nell’immagine sottostante.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'Non sei stato riconosciuto da Apache.',
	'LOGIN_ERROR_PASSWORD'				=> 'La password inserita non è corretta, fai un altro tentativo. Se il problema persiste contatta un %sAmministratore%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT'		=> 'Non è stato possibile convertire la tua password al momento dell’aggiornamento del software di questa board. %sRichiedi una nuova password%s. Se il problema persiste contatta un %samministratore%s.',
	'LOGIN_ERROR_USERNAME'				=> 'Il nome utente inserito non è corretto, fai un altro tentativo. Se il problema persiste contatta un %sAmministratore%s.',
	'LOGIN_FORUM'						=> 'Per leggere o inviare messaggi su questo forum devi inserire la password.',
	'LOGIN_INFO'						=> 'Per eseguire il login devi essere registrato. La registrazione richiede solo pochi secondi e garantisce l’accesso alle funzioni avanzate. L’amministratore puó anche dare permessi speciali agli utenti. Prima di eseguire il login assicurati di aver letto i termini d’uso e le varie regole.',
	'LOGIN_VIEWFORUM'					=> 'Per leggere questo forum devi essere registrato ed aver effettuato il login.',
	'LOGIN_EXPLAIN_EDIT'				=> 'Per modificare i messaggi di questo forum devi essere registrato ed aver effettuato il login.',
	'LOGIN_EXPLAIN_VIEWONLINE'			=> 'Per visualizzare la lista utenti in linea devi essere registrato e loggato.',
	'LOGOUT'							=> 'Logout',
	'LOGOUT_USER'						=> 'Logout [ %s ]',
	'LOG_ME_IN'							=> 'Collegami in automatico ad ogni visita',

	'MARK'					=> 'Seleziona',
	'MARK_ALL'				=> 'Seleziona tutto',
	'MARK_FORUMS_READ'		=> 'Segna come già letti',
	'MB'					=> 'MB',
	'MIB'					=> 'MiB',
	'MCP'					=> 'Pannello di Controllo Moderatore',
	'MEMBERLIST'			=> 'Iscritti',
	'MEMBERLIST_EXPLAIN'	=> 'Lista utenti registrati',
	'MERGE'					=> 'Unisci',
	'MERGE_POSTS'			=> 'Unisci messaggi',
	'MERGE_TOPIC'			=> 'Unisci argomento',
	'MESSAGE'				=> 'Messaggio',
	'MESSAGES'				=> 'Messaggi',
	'MESSAGE_BODY'			=> 'Corpo del messaggio',
	'MINUTES'				=> 'Minuti',
	'MODERATE'				=> 'Modera',
	'MODERATOR'				=> 'Moderatore',
	'MODERATORS'			=> 'Moderatori',
	'MONTH'					=> 'Mese',
	'MOVE'					=> 'Sposta',
	'MSNM'					=> 'MSN/WLM',	

	'NA'						=> 'Non disponibile',
	'NEWEST_USER'				=> 'Ultimo iscritto: <strong>%s</strong>',
	'NEW_MESSAGE'				=> 'Nuovo messaggio',
	'NEW_MESSAGES'				=> 'Nuovi messaggi',
	'NEW_PM'					=> '<strong>%d</strong> nuovo messaggio privato',
	'NEW_PMS'					=> '<strong>%d</strong> nuovi messaggi privati',
	'NEW_POST'					=> 'Nuovo messaggio',	// Not used anymore
	'NEW_POSTS'					=> 'Nuovo messaggi',	// Not used anymore
	'NEXT'						=> 'Prossimo',  // Used in pagination
	'NEXT_STEP'					=> 'Avanti',
	'NEVER'						=> 'Mai',
	'NO'						=> 'No',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'Non hai il permesso di gestire questo gruppo.',
	'NOT_AUTHORISED'			=> 'Non hai il permesso di accedere a quest’area.',
	'NOT_WATCHING_FORUM'		=> 'La tua sottoscrizione a questo forum è terminata.',
	'NOT_WATCHING_TOPIC'		=> 'La tua sottoscrizione a questo argomento è terminata.',
	'NOTIFY_ADMIN'				=> 'Per favore, invia notifica ad un amministratore.',
	'NOTIFY_ADMIN_EMAIL'		=> 'Per favore, invia notifica ad un amministratore: <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'		=> 'Non hai il permesso di accedere a questo file.',
	'NO_ACTION'					=> 'Nessuna azione specificata.',
	'NO_ADMINISTRATORS'			=> 'Non ci sono amministratori.',
	'NO_AUTH_ADMIN'				=> 'Non hai i permessi di amministratore, quindi non puoi accedere al pannello di controllo amministratore.',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'Non puoi autenticarti come altro utente.',
	'NO_AUTH_OPERATION'			=> 'Non hai i permessi necessari per completare questa operazione.',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'Impossibile connettersi all’host smtp: %1$s : %2$s',
	'NO_BIRTHDAYS'				=> 'Nessun compleanno oggi',
	'NO_EMAIL_MESSAGE'			=> 'Il contenuto della e-mail è vuoto.',
	'NO_EMAIL_RESPONSE_CODE'	=> 'Impossibile ottenere il codice di risposta del server mail.',
	'NO_EMAIL_SUBJECT'			=> 'Non è stato specificato un oggetto per l’e-mail.',
	'NO_FORUM'					=> 'Il forum che hai selezionato non esiste.',
	'NO_FORUMS'					=> 'Non sono presenti forum.',
	'NO_GROUP'					=> 'Il gruppo richiesto non esiste.',
	'NO_GROUP_MEMBERS'			=> 'Questo gruppo non ha ancora iscritti.',
	'NO_IPS_DEFINED'			=> 'Nessun indirizzo IP o hostname definito',
	'NO_MEMBERS'				=> 'Nessun iscritto corrisponde a questi criteri di ricerca.',
	'NO_MESSAGES'				=> 'Nessun messaggio',
	'NO_MODE'					=> 'Nessuna modalità specificata.',
	'NO_MODERATORS'				=> 'Non ci sono moderatori.',
	'NO_NEW_MESSAGES'			=> 'Nessun nuovo messaggio',
	'NO_NEW_PM'					=> '<strong>0</strong> nuovi messaggi privati',
	'NO_NEW_POSTS'				=> 'Nessun nuovo messaggio',	// Not used anymore
	'NO_ONLINE_USERS'			=> 'Nessuno',
	'NO_POSTS'					=> 'Nessun messaggio',
	'NO_POSTS_TIME_FRAME'		=> 'Nessun messaggio in questo argomento nel periodo impostato.',
	'NO_FEED_ENABLED'			=> 'I feed non sono disponibili in questa Board.',
	'NO_FEED'					=> 'Il feed richiesto non è disponibile.',
	'NO_SUBJECT'				=> 'Nessun oggetto specificato',								// Used for posts having no subject defined but displayed within management pages.
	'NO_SUCH_SEARCH_MODULE'		=> 'La ricerca preimpostata non esiste.',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'Metodo di autenticazione non supportato.',
	'NO_TOPIC'					=> 'L’argomento richiesto non esiste.',
	'NO_TOPIC_FORUM'			=> 'L’argomento o il forum non esistono più.',
	'NO_TOPICS'					=> 'Non ci sono argomenti o messaggi in questo forum.',
	'NO_TOPICS_TIME_FRAME'		=> 'Nessun argomento in questo forum nel periodo impostato.',
	'NO_UNREAD_PM'				=> '<strong>0</strong> messaggi non letti',
	'NO_UNREAD_POSTS'			=> 'Nessun messaggio da leggere',
	'NO_UPLOAD_FORM_FOUND'		=> 'Caricamento iniziato, ma non è stato trovata alcuna forma valida di caricamento del file.',
	'NO_USER'					=> 'L’utente richiesto non esiste.',
	'NO_USERS'					=> 'Gli utenti richiesti non esistono.',
	'NO_USER_SPECIFIED'			=> 'Nessun nome utente specificato.',

 // Nullar/Singular/Plural language entry. The key numbers define the number range in which a certain grammatical expression is valid.
 'NUM_POSTS_IN_QUEUE' => array(
  0 => 'Nessun messaggio in coda approvazione', // 0
  1 => '1 messaggio in coda approvazione', // 1
  2 => '%d messaggi in coda approvazione', // 2+
),
	
	'OCCUPATION'				=> 'Occupazione',
	'OFFLINE'					=> 'Non connesso',
	'ONLINE'					=> 'Connesso',
	'ONLINE_BUDDIES'			=> 'Amici connessi',
	'ONLINE_USERS_TOTAL'		=> 'In totale ci sono <strong>%d</strong> utenti connessi :: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'In totale ci sono <strong>0</strong> utenti connessi :: ',
	'ONLINE_USER_TOTAL'			=> 'In totale c’è <strong>%d</strong> utente connesso :: ',
	'OPTIONS'					=> 'Opzioni',

	'PAGE_OF'				=> 'Pagina <strong>%1$d</strong> di <strong>%2$d</strong>',
	'PASSWORD'				=> 'Password',
	'PIXEL'					=> 'px',	
	'PLAY_QUICKTIME_FILE'	=> 'Riproduci file Quicktime',
	'PM'					=> 'MP',
	'PM_REPORTED'			=> 'Clicca per visualizzare la segnalazione',
	'POSTING_MESSAGE'		=> 'Sta inviando un messaggio in %s',
	'POSTING_PRIVATE_MESSAGE'	=> 'Sta scrivendo un messaggio privato',
	'POST'					=> 'Messaggio',
	'POST_ANNOUNCEMENT'		=> 'Annuncio',
	'POST_STICKY'			=> 'Importante',
	'POSTED'				=> 'Inviato',
	'POSTED_IN_FORUM'		=> 'in',
	'POSTED_ON_DATE'		=> 'il',
	'POSTS'					=> 'Messaggi',
	'POSTS_UNAPPROVED'		=> 'Uno o più messaggi in questo argomento non sono stati approvati.',
	'POST_BY_AUTHOR'		=> 'da',
	'POST_BY_FOE'			=> 'Questo messaggio è stato scritto da <strong>%1$s</strong> il quale è inserito nella tua lista ignorati. %2$sVisualizza il messaggio%3$s.',
	'POST_DAY'				=> '%.2f messaggi al giorno',
	'POST_DETAILS'			=> 'Dettagli messaggio',
	'POST_NEW_TOPIC'		=> 'Apri un nuovo argomento',
	'POST_PCT'				=> '%.2f%% del totale messaggi',
	'POST_PCT_ACTIVE'		=> '%.2f%% dei messaggi dell’utente',
	'POST_PCT_ACTIVE_OWN'	=> '%.2f%% dei tuoi messaggi',
	'POST_REPLY'			=> 'Rispondi al messaggio',
	'POST_REPORTED'			=> 'Clicca per vedere la segnalazione',
	'POST_SUBJECT'			=> 'Oggetto del messaggio',
	'POST_TIME'				=> 'Ora di invio',
	'POST_TOPIC'			=> 'Scrivi un nuovo argomento',
	'POST_UNAPPROVED'		=> 'Questo messaggio è in attesa di approvazione',
	'PREVIEW'				=> 'Anteprima',
	'PREVIOUS'				=> 'Precedente',    // Used in pagination
	'PREVIOUS_STEP'			=> 'Indietro',
	'PRIVACY'				=> 'Trattamento dei dati personali',
	'PRIVATE_MESSAGE'		=> 'Messaggio privato',
	'PRIVATE_MESSAGES'		=> 'Messaggi privati',
	'PRIVATE_MESSAGING'		=> 'Messaggistica privata',
	'PROFILE'				=> 'Pannello di Controllo Utente',

	'READING_FORUM'				=> 'Sta leggendo un argomento in %s',
	'READING_GLOBAL_ANNOUNCE'	=> 'Sta leggendo un annuncio globale',
	'READING_LINK'				=> 'Sta seguendo un collegamento del forum %s',
	'READING_TOPIC'				=> 'Sta leggendo un argomento in %s',
	'READ_PROFILE'				=> 'Profilo',
	'REASON'					=> 'Motivazione',
	'RECORD_ONLINE_USERS'		=> 'Record di utenti connessi: <strong>%1$s</strong> registrato il %2$s',
	'REDIRECT'					=> 'Reindirizzamento',
	'REDIRECTS'					=> 'Reindirizzamenti totali',
	'REGISTER'					=> 'Iscriviti',
	'REGISTERED_USERS'			=> 'Iscritti connessi:',
	'REG_USERS_ONLINE'			=> 'Ci sono %d utenti iscritti e ',
	'REG_USERS_TOTAL'			=> '%d iscritti, ',
	'REG_USERS_TOTAL_AND'		=> '%d iscritti e ',
	'REG_USERS_ZERO_ONLINE'		=> 'Ci sono 0 utenti iscritti e ',
	'REG_USERS_ZERO_TOTAL'		=> '0 iscritti, ',
	'REG_USERS_ZERO_TOTAL_AND'	=> '0 iscritti e ',
	'REG_USER_ONLINE'			=> 'C’è %d utente iscritto e ',
	'REG_USER_TOTAL'			=> '%d iscritto, ',
	'REG_USER_TOTAL_AND'		=> '%d iscritto e ',
	'REMOVE'					=> 'Rimuovi',
	'REMOVE_INSTALL'			=> 'Cancella, sposta o rinomina la cartella di installazione prima di continuare. Se questa cartella è ancora presente sarà solo possibile accedere all’amministrazione.',
	'REPLIES'					=> 'Risposte',
	'REPLY_WITH_QUOTE'			=> 'Rispondi citando',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'Sta rispondendo all’annuncio globale',
	'REPLYING_MESSAGE'			=> 'Sta rispondendo al messaggio in %s',
	'REPORT_BY'					=> 'Segnalato da',
	'REPORT_POST'				=> 'Segnala il messaggio',
	'REPORTING_POST'			=> 'Sta facendo la segnalazione di un messaggio',
	'RESEND_ACTIVATION'			=> 'Rispedisci l’e-mail di attivazione',
	'RESET'						=> 'Ripristina',
	'RESTORE_PERMISSIONS'		=> 'Ripristina permessi',
	'RETURN_INDEX'				=> '%sTorna alla pagina iniziale%s',
	'RETURN_FORUM'				=> '%sTorna all’ultimo forum visitato%s',
	'RETURN_PAGE'				=> '%sTorna alla pagina precedente%s',
	'RETURN_TOPIC'				=> '%sTorna all’ultimo argomento letto%s',
	'RETURN_TO'					=> 'Torna a',
	'FEED'						=> 'Feed',
	'FEED_NEWS'					=> 'News',
	'FEED_TOPICS_ACTIVE'		=> 'Argomenti attivi',
	'FEED_TOPICS_NEW'			=> 'Nuovi argomenti',	
	'RULES_ATTACH_CAN'			=> '<strong>Puoi</strong> inviare allegati',
	'RULES_ATTACH_CANNOT'		=> '<strong>Non puoi</strong> inviare allegati',
	'RULES_DELETE_CAN'			=> '<strong>Puoi</strong> cancellare i tuoi messaggi',
	'RULES_DELETE_CANNOT'		=> '<strong>Non puoi</strong> cancellare i tuoi messaggi',
	'RULES_DOWNLOAD_CAN'		=> '<strong>Puoi</strong> scaricare gli allegati',
	'RULES_DOWNLOAD_CANNOT'		=> '<strong>Non puoi</strong> scaricare gli allegati',
	'RULES_EDIT_CAN'			=> '<strong>Puoi</strong> modificare i tuoi messaggi',
	'RULES_EDIT_CANNOT'			=> '<strong>Non puoi</strong> modificare i tuoi messaggi',
	'RULES_LOCK_CAN'			=> '<strong>Puoi</strong> bloccare i tuoi argomenti',
	'RULES_LOCK_CANNOT'			=> '<strong>Non puoi</strong> bloccare i tuoi argomenti',
	'RULES_POST_CAN'			=> '<strong>Puoi</strong> aprire nuovi argomenti',
	'RULES_POST_CANNOT'			=> '<strong>Non puoi</strong> aprire nuovi argomenti',
	'RULES_REPLY_CAN'			=> '<strong>Puoi</strong> rispondere negli argomenti',
	'RULES_REPLY_CANNOT'		=> '<strong>Non puoi</strong> rispondere negli argomenti',
	'RULES_VOTE_CAN'			=> '<strong>Puoi</strong> partecipare ai sondaggi',
	'RULES_VOTE_CANNOT'			=> '<strong>Non puoi</strong> partecipare ai sondaggi',

	'SEARCH'					=> 'Cerca',
	'SEARCH_MINI'				=> 'Cerca...',
	'SEARCH_ADV'				=> 'Ricerca avanzata',
	'SEARCH_ADV_EXPLAIN'		=> 'Visualizza le opzioni di ricerca avanzata',
	'SEARCH_KEYWORDS'			=> 'Ricerca per termini',
	'SEARCHING_FORUMS'			=> 'Sta cercando nel forum',
	'SEARCH_ACTIVE_TOPICS'		=> 'Argomenti attivi',
	'SEARCH_FOR'				=> 'Cerca per',
	'SEARCH_FORUM'				=> 'Cerca qui...',
	'SEARCH_NEW'				=> 'Messaggi recenti',
	'SEARCH_POSTS_BY'			=> 'Cerca i messaggi di',
	'SEARCH_SELF'				=> 'I tuoi messaggi',
	'SEARCH_TOPIC'				=> 'Cerca qui...',
	'SEARCH_UNANSWERED'			=> 'Messaggi senza risposta',
	'SEARCH_UNREAD'				=> 'Messaggi non letti',
	'SECONDS'					=> 'Secondi',
	'SELECT'					=> 'Seleziona',
	'SELECT_ALL_CODE'			=> 'Seleziona tutto',
	'SELECT_DESTINATION_FORUM'	=> 'Seleziona il forum di destinazione',
	'SELECT_FORUM'				=> 'Seleziona il forum',
	'SEND_EMAIL'				=> 'E-mail',				// Used for submit buttons
	'SEND_EMAIL_USER'			=> 'E-mail',				// Used as: {L_SEND_EMAIL_USER} {USERNAME} -> E-mail UserX
	'SEND_PRIVATE_MESSAGE'		=> 'Invia messaggio privato',
	'SETTINGS'					=> 'Impostazioni',
	'SIGNATURE'					=> 'Firma',
	'SKIP'						=> 'Passa al contenuto',
	'SMTP_NO_AUTH_SUPPORT'		=> 'Il server SMTP non supporta l’autenticazione.',
	'SORRY_AUTH_READ'			=> 'Non sei autorizzato a leggere questo forum.',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'Non sei autorizzato a scaricare questo allegato.',
	'SORT_BY'					=> 'Ordina per',
	'SORT_JOINED'				=> 'Data di registrazione',
	'SORT_LOCATION'				=> 'Località',
	'SORT_RANK'					=> 'Livello',
	'SORT_POSTS'				=> 'Messaggi',
	'SORT_TOPIC_TITLE'			=> 'Titolo argomento',
	'SORT_USERNAME'				=> 'Nome utente',
	'SPLIT_TOPIC'				=> 'Dividi argomento',
	'SQL_ERROR_OCCURRED'		=> 'Si è verificato un errore SQL richiamando questa pagina. Contatta un %samministratore%s se il problema persiste.',
	'STATISTICS'				=> 'Statistiche',
	'START_WATCHING_FORUM'		=> 'Sottoscrivi forum',
	'START_WATCHING_TOPIC'		=> 'Sottoscrivi argomento',
	'STOP_WATCHING_FORUM'		=> 'Annulla sottoscrizione forum',
	'STOP_WATCHING_TOPIC'		=> 'Annulla sottoscrizione argomento',
	'SUBFORUM'					=> 'Subforum',
	'SUBFORUMS'					=> 'Subforum',
	'SUBJECT'					=> 'Titolo',
	'SUBMIT'					=> 'Invia',

	'TERMS_USE'			=> 'Condizioni d’uso',
	'TEST_CONNECTION'	=> 'Test connessione',
	'THE_TEAM'			=> 'Staff',
	'TIME'				=> 'Ora',
	'TOO_LARGE'						=> 'Il valore inserito è troppo grande.',
	'TOO_LARGE_MAX_RECIPIENTS'		=> 'Il valore del <strong>numero massimo consentito di destinatari per messaggio privato</strong> inserito è troppo grande.',

    'TOO_LONG'                      => 'Il valore inserito è troppo lungo.',
	
	'TOO_LONG_AIM'					=> 'Il riferimento AIM inserito è troppo lungo.',
	'TOO_LONG_CONFIRM_CODE'			=> 'Il codice di conferma inserito è troppo lungo.',
	'TOO_LONG_DATEFORMAT'			=> 'Il formato della data è troppo lungo.',
	'TOO_LONG_ICQ'					=> 'Il numero ICQ inserito è troppo lungo.',
	'TOO_LONG_INTERESTS'			=> 'Il campo interessi inserito è troppo lungo.',
	'TOO_LONG_JABBER'				=> 'Il nome account Jabber inserito è troppo lungo.',
	'TOO_LONG_LOCATION'				=> 'La località inserita è troppo lunga.',
	'TOO_LONG_MSN'					=> 'Il nome account MSN/WLM inserito è troppo lungo.',
	'TOO_LONG_NEW_PASSWORD'			=> 'La password inserita è troppo lunga.',
	'TOO_LONG_OCCUPATION'			=> 'Il campo occupazione inserito è troppo lungo.',
	'TOO_LONG_PASSWORD_CONFIRM'		=> 'La password di conferma inserita è troppo lunga.',
	'TOO_LONG_USER_PASSWORD'		=> 'La password inserita è troppo lunga.',
	'TOO_LONG_USERNAME'				=> 'Il nome utente inserito è troppo lungo.',
	'TOO_LONG_EMAIL'				=> 'L’e-mail inserita è troppo lunga.',
	'TOO_LONG_EMAIL_CONFIRM'		=> 'L’e-mail di conferma inserita è troppo lunga.',
	'TOO_LONG_WEBSITE'				=> 'L’indirizzo web inserito è troppo lungo.',
	'TOO_LONG_YIM'					=> 'Il nome Yahoo! Messenger inserito è troppo lungo.',

	'TOO_MANY_VOTE_OPTIONS'			=> 'Stai tentando di votare con troppe opzioni.',
 
    'TOO_SHORT'                     => 'Il valore inserito è troppo corto.',

	'TOO_SHORT_AIM'					=> 'Il riferimento AIM inserito è troppo corto.',
	'TOO_SHORT_CONFIRM_CODE'		=> 'Il codice di conferma inserito è troppo corto.',
	'TOO_SHORT_DATEFORMAT'			=> 'Il formato della data è troppo corto.',
	'TOO_SHORT_ICQ'					=> 'Il numero ICQ inserito è troppo corto.',
	'TOO_SHORT_INTERESTS'			=> 'Il campo interessi inserito è troppo corto.',
	'TOO_SHORT_JABBER'				=> 'Il nome account Jabber inserito è troppo corto.',
	'TOO_SHORT_LOCATION'			=> 'La località inserita è troppo corta.',
	'TOO_SHORT_MSN'					=> 'Il nome account MSN/WLM inserito è troppo corto.',
	'TOO_SHORT_NEW_PASSWORD'		=> 'La password inserita è troppo corta.',
	'TOO_SHORT_OCCUPATION'			=> 'Il campo occupazione inserito è troppo corto.',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'La password di conferma inserita è troppo corta.',
	'TOO_SHORT_USER_PASSWORD'		=> 'La password inserita è troppo corta.',
	'TOO_SHORT_USERNAME'			=> 'Il nome utente inserito è troppo corto.',
	'TOO_SHORT_EMAIL'				=> 'L’e-mail inserita è troppo corta.',
	'TOO_SHORT_EMAIL_CONFIRM'		=> 'L’e-mail di conferma inserita è troppo corta.',
	'TOO_SHORT_WEBSITE'				=> 'L’indirizzo web inserito è troppo corto.',
	'TOO_SHORT_YIM'					=> 'Il nome account Yahoo! inserito è troppo corto.',
	'TOO_SMALL'						=> 'Il valore immesso è troppo piccolo.',
	'TOO_SMALL_MAX_RECIPIENTS'		=> 'Il valore del <strong>numero massimo di destinatari consentiti per messaggio privato</strong> che hai inserito è troppo piccolo.',

	'TOPIC'				=> 'Argomento',
	'TOPICS'			=> 'Argomenti',
	'TOPICS_UNAPPROVED'	=> 'Almeno un argomento in questo forum non è stato approvato.',
	'TOPIC_ICON'		=> 'Icona argomento',
	'TOPIC_LOCKED'		=> 'Questo argomento è bloccato, non puoi modificare o inviare ulteriori messaggi.',
	'TOPIC_LOCKED_SHORT'=> 'Argomento bloccato',
	'TOPIC_MOVED'		=> 'Argomento spostato',
	'TOPIC_REVIEW'		=> 'Revisione argomento',
	'TOPIC_TITLE'		=> 'Titolo argomento',
	'TOPIC_UNAPPROVED'	=> 'Questo argomento non è stato approvato',
	'TOTAL_ATTACHMENTS'	=> 'Allegato(i)',
	'TOTAL_LOG'			=> '1 log',
	'TOTAL_LOGS'		=> '%d log',
	'TOTAL_NO_PM'		=> '0 messaggi privati in totale',
	'TOTAL_PM'			=> '1 messaggio privato in totale',
	'TOTAL_PMS'			=> '%d messaggi privati in totale',
	'TOTAL_POSTS'		=> 'Totale messaggi',
	'TOTAL_POSTS_OTHER'	=> 'Totale messaggi: <strong>%d</strong>',
	'TOTAL_POSTS_ZERO'	=> 'Totale messaggi: <strong>0</strong>',
	'TOPIC_REPORTED'	=> 'E’ stata fatta una segnalazione per questo argomento',
	'TOTAL_TOPICS_OTHER'=> 'Totale argomenti: <strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'	=> 'Totale argomenti: <strong>0</strong>',
	'TOTAL_USERS_OTHER'	=> 'Totale iscritti: <strong>%d</strong>',
	'TOTAL_USERS_ZERO'	=> 'Totale iscritti: <strong>0</strong>',
	'TRACKED_PHP_ERROR'	=> 'Errori PHP registrati: %s',

	'UNABLE_GET_IMAGE_SIZE'	=> 'Impossibile determinare le dimensioni dell’immagine.',
	'UNABLE_TO_DELIVER_FILE'=> 'Impossibile trasportare il file.',
	'UNKNOWN_BROWSER'		=> 'Browser sconosciuto',
	'UNMARK_ALL'			=> 'Deseleziona tutto',
	'UNREAD_MESSAGES'		=> 'Messaggi non letti',
	'UNREAD_PM'				=> '<strong>%d</strong> messaggio non letto',
	'UNREAD_PMS'			=> '<strong>%d</strong> messaggi non letti',
	'UNREAD_POST'			=> 'Messaggio da leggere',
	'UNREAD_POSTS'			=> 'Messaggi da leggere',
	'UNWATCHED_FORUMS'		=> 'Non stai piú controllando i forum selezionati.',
	'UNWATCHED_TOPICS'		=> 'Non stai piú controllando gli argomenti selezionati.',
	'UNWATCHED_FORUMS_TOPICS'	=> 'Non stai piú controllando le voci selezionati.',
	'UPDATE'				=> 'Aggiorna',
	'UPLOAD_IN_PROGRESS'	=> 'Invio in corso.',
	'URL_REDIRECT'			=> 'Se il tuo browser non supporta il redirect %sclicca qui per andare alla pagina%s.',
	'USERGROUPS'			=> 'Gruppi',
	'USERNAME'				=> 'Nome utente',
	'USERNAMES'				=> 'Nomi utente',
	'USER_AVATAR'			=> 'Avatar utente',
	'USER_CANNOT_READ'		=> 'Non puoi leggere i messaggi di questo forum.',
	'USER_POST'				=> '%d messaggio',
	'USER_POSTS'			=> '%d messaggi',
	'USERS'					=> 'Utenti',
	'USE_PERMISSIONS'		=> 'Prova i permessi dell’utente',

	'USER_NEW_PERMISSION_DISALLOWED'	=> 'Siamo spiacenti, ma non sei autorizzato ad utilizzare questa funzione. Essendo appena registrato, si richiede una tua partecipazione più attiva per utilizzare questa funzione.',

	'VARIANT_DATE_SEPARATOR'	=> ' / ',	// Used in date format dropdown, eg: "Today, 13:37 / 01 Jan 2007, 13:37" ... to join a relative date with calendar date
	'VIEWED'					=> 'Visto',
	'VIEWING_FAQ'				=> 'Sta leggendo le FAQ',
	'VIEWING_MEMBERS'			=> 'Sta visualizzando i dettagli di un iscritto',
	'VIEWING_ONLINE'			=> 'Sta visualizzando chi c’è in linea',
	'VIEWING_MCP'				=> 'Sta utilizzando il pannello di controllo moderatore',
	'VIEWING_MEMBER_PROFILE'	=> 'Sta visualizzando il profilo di un iscritto',
	'VIEWING_PRIVATE_MESSAGES'	=> 'Sta leggendo i messaggi privati',
	'VIEWING_REGISTER'			=> 'Si sta iscrivendo',
	'VIEWING_UCP'				=> 'Sta utilizzando il pannello di controllo utente',
	'VIEWS'						=> 'Visite ',
	'VIEW_BOOKMARKS'			=> 'Vedi segnalibri',
	'VIEW_FORUM_LOGS'			=> 'Vedi log',
	'VIEW_LATEST_POST'			=> 'Vedi ultimi messaggi',
	'VIEW_NEWEST_POST'			=> 'Vedi ultimi messaggi non letti',
	'VIEW_NOTES'				=> 'Leggi note utente',
	'VIEW_ONLINE_TIME'			=> 'basato sugli utenti attivi nell’ultimo %d minuto',
	'VIEW_ONLINE_TIMES'			=> 'basato sugli utenti attivi negli ultimi %d minuti',
	'VIEW_TOPIC'				=> 'Leggi argomento',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Annuncio: ',
	'VIEW_TOPIC_GLOBAL'			=> 'Annuncio globale: ',
	'VIEW_TOPIC_LOCKED'			=> 'Bloccato: ',
	'VIEW_TOPIC_LOGS'			=> 'Vedi log',
	'VIEW_TOPIC_MOVED'			=> 'Spostato: ',
	'VIEW_TOPIC_POLL'			=> 'Sondaggio: ',
	'VIEW_TOPIC_STICKY'			=> 'Importante: ',
	'VISIT_WEBSITE'				=> 'Visita il sito web',

	'WARNINGS'			=> 'Richiami',
	'WARN_USER'			=> 'Richiama utente',
	'WELCOME_SUBJECT'	=> 'Benvenuto in %s',
	'WEBSITE'			=> 'Sito web',
	'WHOIS'				=> 'Whois',
	'WHO_IS_ONLINE'		=> 'Chi c’è in linea',
	'WRONG_PASSWORD'	=> 'La password inserita è errata.',

	'WRONG_DATA_ICQ'			=> 'Il numero inserito non è un numero ICQ valido.',
	'WRONG_DATA_JABBER'			=> 'Il nome inserito non è un nome account Jabber valido.',
	'WRONG_DATA_LANG'			=> 'La lingua specificata non è valida.',
	'WRONG_DATA_WEBSITE'		=> 'L’indirizzo del sito web deve essere un URL valido ed includere il protocollo. Es: http://www.esempio.it/.',
	'WROTE'						=> 'ha scritto',

	'YEAR'				=> 'Anno',
	'YEAR_MONTH_DAY'	=> '(AAAA-MM-GG)',
	'YES'				=> 'Sì',
	'YIM'				=> 'YIM',	
	'YOU_LAST_VISIT'	=> 'Ultimo accesso: %s',
	'YOU_NEW_PM'		=> 'Hai un nuovo messaggio privato.',
	'YOU_NEW_PMS'		=> 'Hai nuovi messaggi privati.',
	'YOU_NO_NEW_PM'		=> 'Nessun nuovo messaggio privato.',

       'datetime'         => array(
          'TODAY'      => 'oggi',
          'TOMORROW'   => 'domani',
          'YESTERDAY'   => 'ieri',
		  
	   'AGO'		=> array(
			0		=> 'meno di un minuto fa',
			1		=> '%d minuto fa',
			2		=> '%d minuti fa',
			60		=> '1 ora fa',
		),

          'Sunday'   => 'domenica',
          'Monday'   => 'lunedì',
          'Tuesday'   => 'martedì',
          'Wednesday'   => 'mercoledì',
          'Thursday'   => 'giovedì',
          'Friday'   => 'venerdì',
          'Saturday'   => 'sabato',

          'Sun'      => 'dom',
          'Mon'      => 'lun',
          'Tue'      => 'mar',
          'Wed'      => 'mer',
          'Thu'      => 'gio',
          'Fri'      => 'ven',
          'Sat'      => 'sab',

          'January'   => 'gennaio',
          'February'   => 'febbraio',
          'March'      => 'marzo',
          'April'      => 'aprile',
          'May'      => 'maggio',
          'June'      => 'giugno',
          'July'      => 'luglio',
          'August'   => 'agosto',
          'September' => 'settembre',
          'October'   => 'ottobre',
          'November'   => 'novembre',
          'December'   => 'dicembre',

          'Jan'      => 'gen',
          'Feb'      => 'feb',
          'Mar'      => 'mar',
          'Apr'      => 'apr',
          'May_short'   => 'mag',
          'Jun'      => 'giu',
          'Jul'      => 'lug',
          'Aug'      => 'ago',
          'Sep'      => 'set',
          'Oct'      => 'ott',
          'Nov'      => 'nov',
          'Dec'      => 'dic',
       ),

       'tz'            => array(
          '-12'   => 'UTC - 12 ore',
          '-11'   => 'UTC - 11 ore',
          '-10'   => 'UTC - 10 ore',
          '-9.5'   => 'UTC - 9:30 ore',
          '-9'   => 'UTC - 9 ore',
          '-8'   => 'UTC - 8 ore',
          '-7'   => 'UTC - 7 ore',
          '-6'   => 'UTC - 6 ore',
          '-5'   => 'UTC - 5 ore',
          '-4.5'   => 'UTC - 4:30 ore',
          '-4'   => 'UTC - 4 ore',
          '-3.5'   => 'UTC - 3:30 ore',
          '-3'   => 'UTC - 3 ore',
          '-2'   => 'UTC - 2 ore',
          '-1'   => 'UTC - 1 ora',
          '0'      => 'UTC',
          '1'      => 'UTC + 1 ora',
          '2'      => 'UTC + 2 ore',
          '3'      => 'UTC + 3 ore',
          '3.5'   => 'UTC + 3:30 ore',
          '4'      => 'UTC + 4 ore',
          '4.5'   => 'UTC + 4:30 ore',
          '5'      => 'UTC + 5 ore',
          '5.5'   => 'UTC + 5:30 ore',
          '5.75'   => 'UTC + 5:45 ore',
          '6'      => 'UTC + 6 ore',
          '6.5'   => 'UTC + 6:30 ore',
          '7'      => 'UTC + 7 ore',
          '8'      => 'UTC + 8 ore',
          '9'      => 'UTC + 9 ore',
          '9.5'   => 'UTC + 9:30 ore',
          '10'   => 'UTC + 10 ore',
          '10.5'   => 'UTC + 10:30 ore',
          '11'   => 'UTC + 11 ore',
          '11.5'   => 'UTC + 11:30 ore',
          '12'   => 'UTC + 12 ore',
          '12.75'   => 'UTC + 12:45 ore',
          '13'   => 'UTC + 13 ore',
          '14'   => 'UTC + 14 ore',
          'dst'   => '[ <abbr title="Ora legale in vigore">ora legale</abbr> ]',
       ),

       'tz_zones'   => array(
	      '-19'	=> '[UTC - 199] Pluto',
          '-12'   => '[UTC -12] Isola Baker',
          '-11'   => '[UTC -11] Samoa, Isole Midway',
          '-10'   => '[UTC -10] Hawaii, Tahiti',
          '-9.5'   => '[UTC -9:30] Isole Marchesi',
          '-9'   => '[UTC -9] Alaska',
          '-8'   => '[UTC -8] Costa del Pacifico',
          '-7'   => '[UTC -7] USA centro-occidentali',
          '-6'   => '[UTC -6] Città del Messico, USA centro-orientali',
          '-5'   => '[UTC -5] Costa dell’Atlantico, Brasile occidentale, Cuba',
          '-4.5'   => '[UTC -4:30] Venezuela',
          '-4'   => '[UTC -4] Brasile centrale, Barbados, Bolivia, Cile',
          '-3.5'   => '[UTC -3:30] Terranova',
          '-3'   => '[UTC -3] Argentina, Brasile orientale, Uruguay',
          '-2'   => '[UTC -2] Bermuda',
          '-1'   => '[UTC -1] Isole Azzorre, Capo Verde',
          '0'      => '[UTC] Europa occidentale, Regno Unito (GMT)',
          '1'      => '[UTC +1] Europa centrale, Italia',
          '2'      => '[UTC +2] Europa orientale, Grecia',
          '3'      => '[UTC +3] Mosca, Arabia Saudita',
          '3.5'   => '[UTC +3:30] Iran',
          '4'      => '[UTC +4] Emirati Arabi Uniti',
          '4.5'   => '[UTC +4:30] Afghanistan',
          '5'      => '[UTC +5] Pakistan, Maldive',
          '5.5'   => '[UTC +5:30] India, Sri Lanka',
          '5.75'   => '[UTC +5:45] Nepal',
          '6'      => '[UTC +6] Bangladesh',
          '6.5'   => '[UTC +6:30] Myanmar',
          '7'      => '[UTC +7] Indonesia occidentale, Thailandia, Vietnam',
          '8'      => '[UTC +8] Cina, Hong Kong, Singapore, Taiwan, Perth',
          '9'      => '[UTC +9] Giappone, Corea, Indonesia orientale',
          '9.5'   => '[UTC +9:30] Adelaide',
          '10'   => '[UTC +10] Sydney, Papua Nuova Guinea',
          '10.5'   => '[UTC +10:30] Isola Lord Howe',
          '11'   => '[UTC +11] Isole Salomone, Nuova Caledonia',
          '11.5'   => '[UTC +11:30] Isole Norfolk',
          '12'   => '[UTC +12] Nuova Zelanda, Figi',
          '12.75'   => '[UTC +12:45] Isole Chatham',
          '13'   => '[UTC +13] Tonga',
          '14'   => '[UTC +14] Isole della linea',
		  '19'	=> '[UTC + 199] Mercury'
       ),

       // The value is only an example and will get replaced by the current time on view
       'dateformats'   => array(
          'd/m/Y, G:i'            => '08/12/2007, 13:15',
          '|d/m/Y|, G:i'         => '08/12/2007, 13:15 / oggi, 13:15',
          'j M Y, G:i'         => '8 dic 2007, 13:37',
          '|j M Y|, G:i'         => '8 dic 2007, 13:37 / oggi, 13:15',
          'j F Y, G:i'      => '8 dicembre 2007, 13:15',
        '|j F Y|, G:i'      => '8 dicembre 2007, 13:15 / oggi, 13:15',
          'D j M Y, G:i'      => 'sab 8 dic 2007, 13:15',
          '|D j M Y|, G:i'      => 'sab 8 dic 2007, 13:15 / oggi, 13:15',
          'l j F Y, G:i'      => 'sabato 8 dicembre 2007, 13:15',
          '|l j F Y|, G:i'      => 'sabato 8 dicembre 2007, 13:15 / oggi, 13:15'
       ),

       // The default dateformat which will be used on new installs in this language
       // Translators should change this if a the usual date format is different
       'default_dateformat'   => '|d/m/Y|, G:i', // 08/12/2007, 13:15 / oggi, 13:15
));

/*
* Portal XL related language definitions
*/

// Portal
$lang = array_merge($lang, array(
    'PORTAL_MODS'			=> 'Database Mods',
	
));

// [img] Resize Width Images
$lang = array_merge($lang, array(
	'IMG_CLICK_HERE'	=> 'Clicca qui per ridimensionare!',
));

// Event Calendar
$lang = array_merge($lang, array(
	'CALENDAR'		=> 'Calendario',
	// minical short day names
	'mini_datetime'	=> array(
		  'Su'		=> 'Do',
		  'Mo'		=> 'Lu',
		  'Tu'		=> 'Ma',
		  'We'		=> 'Me',
		  'Th'		=> 'Gi',
		  'Fr'		=> 'Ve',
		  'Sa'		=> 'Sa',
	),
));

// Animate Digits IP Tracking Counter
$lang = array_merge($lang, array(
	'COUNTER' 			=> 'Contatore visite',
	'COUNTER_STARTDATE' => 'Visite dal %s',
	'HITS_PER_DAY'		=> 'Maggiori visite giorno',
	'HITS_PER_HOUR'		=> 'Maggiori visite ora',
	'HITS_PER_MONTH'	=> 'Maggiori visite mese',
	'HITS_PER_USER'		=> 'Maggiori visite utente',
	'HITS_PER_WEEK'		=> 'Maggiori visite settimana',
	'HITS_PER_YEAR'		=> 'Maggiori visite anno',
	'IP_TRACKING_NO' 	=> '[Nessun IP monitorato]',
	'IP_TRACKING_YES' 	=> '[Monitoraggio IP]',
	'TRANSLATION_INFO' 	=> 'Traduzione Italiana PhpBB <a href="http://www.phpbb.it/">phpBB.it</a> - Per Portal XL <a href="http://www.portalxl.eu/">portalxl.eu</a>'
	
));

// Knowledge Base
$lang = array_merge($lang, array(
	'KNOWLEDGE_BASE'	=> 'Guida Base',
	'KBASE'				=> 'Guida Base',
));

// Anti Bot Question
$lang = array_merge($lang, array(
	'AB_QUESTION_EXPLAIN'	=> 'Per la protezione contro lo spam, rispondi alla domanda di cui sopra.',
));

// start Thank Post MOD
$lang = array_merge($lang, array(
	'REMOVE_THANKS'			=> 'Elimina il ringraziamento a ',
	'THANK_POST1'			=> 'Ringrazia ',
	'THANK_POST2'			=> ' per questo messaggio',
	'THANK_TEXT_1'			=> '',
	'THANK_TEXT_2'			=> 'Grazie a',
	'THANK_TEXT_2pl'		=> 'Grazie a',
	'THANK_GENDER_F'		=> 'da parte di',
	'THANK_GENDER_M'		=> 'da parte di',
	'THANK_GENDER_U'		=> 'da parte di',
	'RECEIVED'				=> 'Ricevuti',
	'THANKS'				=> 'ringraziamenti',
	'GIVEN'					=> 'Fatti',
	'TP_UPDATED'			=> 'Il tuo messaggio è stato aggiornato!',
));
// end Thank Post MOD

// Posts per day
$lang = array_merge($lang, array(
	'POSTS_PER_DAY_OTHER'	=> 'Messaggi per giorno <strong>%.2f</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'Messaggi per giorno <strong>nessuno</strong>',
));

// Announcements Centre
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TITLE_GUESTS'		=> 'Annunci locali ospiti',
	'ANNOUNCEMENT_TITLE'			=> 'Annunci locali sito',
));

// Portal FAQ
$lang = array_merge($lang, array(
	'FAQ_PORTAL'				=> 'FAQ Portale',
	'FAQ_PORTAL_EXPLAIN'		=> 'Portale Risposte alle Domande Frequenti',
));

// Rules page
$lang = array_merge($lang, array(
	'RULES_PAGE'				=> 'Regole Forum',
	'RULES'						=> 'Regole',
));

// Similar Topics 1.0.0
$lang = array_merge($lang, array(
	'SIMILAR_TOPICS'			=> 'Argomenti simili',
));

/*
 * Welcome PM on First Login (WPM)
 * By DualFusion
 */
$lang = array_merge($lang, array(
	'ACP_WELCOME_PM'		=> 'Messaggio di benvenuto al primo login',
	'LOG_CONFIG_WELCOME_PM'	=> '<strong>Configurazione messaggio di benvenuto</strong>',
));
/* End WPM */

//-- mod : Contact board administration ------------------------------------------------------------
//-- add
$lang = array_merge($lang, array(
	'CONTACT_BOARD_ADMIN'		=> 'Contatta amministratore del forum',
	'CONTACT_BOARD_ADMIN_SHORT'	=> 'Contattaci',
));
//-- fin mod : Contact board administration --------------------------------------------------------

// start mod view or mark unread posts
$lang = array_merge($lang, array(
	'LOGIN_EXPLAIN_VIEWUNREADS'	=> 'Devi essere loggato per vedere la lista dei messaggi non letti',
	'MARK_PM_UNREAD'			=> 'Segna messaggi come non letti',
	'MARK_POST_UNREAD'			=> 'Segna messaggio come non letto',
	'NO_UNREADS'				=> 'Non risultano messaggi non letti',
	'PM_MARKED_UNREAD'			=> 'Messaggi privati segnati come non letti',
	'POST_MARKED_UNREAD'		=> 'Messaggio segnato come non letto',
	'RETURN_INBOX'				=> 'Ritorna alla casella messaggi',
	'VIEW_UNREAD_PMS'			=> 'Vedi messaggi non letti',
	'VIEW_UNREADS'				=> 'Vedi messaggi non letti',
));
// end mod view or mark unread posts

// Automatic DST 1.0.6
$lang = array_merge($lang, array(
	'AUTOMATIC'						=> 'Automatica',
));
// Character Countdown
$lang = array_merge($lang, array(
   'CHARACTERS_COUNT_DOWN'         => 'Caratteri scritti:',
));

// www.phpBB-SEO.com SEO TOOLKIT BEGIN - TITLE
$lang['Page'] = 'Pagina ';
// www.phpBB-SEO.com SEO TOOLKIT END - TITLE
// www.phpBB-SEO.com SEO TOOLKIT BEGIN -> GYM Sitemaps
$lang = array_merge($lang, array(
	'GYM_LINKS' => 'Links',
	'GYM_LINK' => 'Link',
	'GYM_RSS_SLIDE_START' => 'Inizio scroller',
	'GYM_RSS_SLIDE_STOP' => 'Fine scroller',
	'GYM_RSS_SOURCE' => 'Fonte',
));
// www.phpBB-SEO.com SEO TOOLKIT END -> GYM Sitemaps
// www.phpBB-SEO.com SEO TOOLKIT BEGIN - Related Topics
$lang['RELATED_TOPICS'] = 'Argomenti correlati';
// www.phpBB-SEO.com SEO TOOLKIT END - Related Topics

// Radio Mod
$lang = array_merge($lang, array(
	'RADIO' => 'Radio',
));

// phpbb Calendar Version 0.1.0
$lang = array_merge($lang, array(
	'VIEWING_CALENDAR'			=> 'Guarda il calendario',
	'VIEWING_CALENDAR_DAY'		=> 'Guarda il calendario del giorno',
	'VIEWING_CALENDAR_EVENT'	=> 'Guarda evento del calendario',
	'VIEWING_CALENDAR_MONTH'	=> 'Guarda il calendario del mese',
	'VIEWING_CALENDAR_WEEK'		=> 'Guarda il calendario della settimana',
	'EDITING_CALENDAR_EVENT'	=> 'Modificato evento del calendario',
	'CREATING_CALENDAR_EVENT'	=> 'Creato evento del calendario',
));

// Country Flags Version 3.0.6
$lang = array_merge($lang, array(
	'COUNTRY'			=> 'Nazione',
	'COUNTRY_FLAGS'		=> 'Bandiera nazionale',
	'TOO_SHORT_FLAG'	=> 'Devi selezionare la bandiera della tua nazione',
	'GROUP_FLAG'		=> 'Bandiera nazionale gruppo',
	'SELECT_FLAG'		=> 'Seleziona la tua bandiera nazionale',
	'SORT_FLAG'			=> 'Bandiera nazionale',
	'USER_FLAG'			=> 'Bandiera nazionale utente',
));

// -- Gender MOD 1.0.1
$lang = array_merge($lang, array(
	'GENDER'			=> 'Sesso',
	'GENDER_EXPLAIN'	=> 'Inserisci il tuo genere sessuale.',
	'GENDER_X'			=> 'Non specificato',
	'GENDER_M'			=> 'Maschio',
	'GENDER_F'			=> 'Femmina',
));

// Google Search
$lang = array_merge($lang, array(
	'SEARCH_GOOGLE' 	=> 'Ricerca con Google?',
));

// phpBB AJAX Chat
$lang = array_merge($lang, array(
	'SHOUTBOX'		=> 'Chat',
	'CHAT_LABEL'	=> 'In Chat',
	'CHAT_TITLE'	=> 'Online',
	'CHAT_WINDOW'	=> 'Finestra chat',
));

// AdvancedBlockMOD 1.0.3						
$lang = array_merge($lang, array(
	'WRONG_TIMEZONE'	=> 'Hai inserito un fuso orario non corretto. Sei pregato di restare sulla Terra!',
));

// Mod_Share_On by JesusADS
$lang = array_merge($lang, array(
	'SHARE_ON'				=> 'Condividi su ...',
	'SHARE_FACEBOOK'		=> 'Facebook',
	'SHARE_TWITTER'			=> 'Twitter',
	'SHARE_ORKUT'			=> 'Orkut',
	'SHARE_DIGG'			=> 'Digg',
	'SHARE_MYSPACE'			=> 'MySpace',
	'SHARE_DELICIOUS'		=> 'Delicious',
	'SHARE_TECHNORATI'		=> 'Technorati',

	'SHARE_ON_FACEBOOK'		=> 'Condividi su Facebook',
	'SHARE_ON_TWITTER'		=> 'Condividi su Twitter',
	'SHARE_ON_ORKUT'		=> 'Condividi su Orkut',
	'SHARE_ON_DIGG'			=> 'Condividi su Digg',
	'SHARE_ON_MYSPACE'		=> 'Condividi su MySpace',
	'SHARE_ON_DELICIOUS'	=> 'Condividi su Delicious',
	'SHARE_ON_TECHNORATI'	=> 'Condividi su Technorati',
));

// Toplist MOD 2.0.0RC3						
$lang = array_merge($lang, array(
    'VIEWING_TOPLIST'       => 'Vedi Top List',
));

?>