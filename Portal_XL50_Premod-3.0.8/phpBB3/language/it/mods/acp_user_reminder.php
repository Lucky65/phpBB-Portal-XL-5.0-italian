<?php
/** 
*
* acp_user_reminder [Italian]
*
* @package language
* @version $Id: acp_user_reminder.php 228 2009-05-21 10:09:57Z lefty74 $
* @copyright (c) 2008 lefty74
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translated in Italian language by Roberto Restelli (dueerre@hotmail.com)
* @update translation in Italian ( Lucky65 di phpbb.it - http://www.portalxl.eu )
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}


/**
* DO NOT CHANGE
*/
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

// Announcement  settings
$lang = array_merge($lang, array(
	'TITLE'											=> 'Promemoria Utenti',
	'TITLE_EXPLAIN'									=> 'Qui puoi gestire i promemoria da inviare agli utenti che non sono stati attivi di recente.',

	//Configuration text
	'GENERAL_CONFIGURATION' 						=> 'Configurazione Generale',
	'CATEGORY_CONFIGURATION' 						=> 'Configurazione Categorie',
	'LOGGING_CONFIGURATION' 						=> 'Configurazione Log',
	'USER_REMINDER_ENABLE'							=> 'Abilita promemoria automatici',
	'USER_REMINDER_ENABLE_EXPLAIN'					=> 'Abilita o disabilita i promemoria automatici. Ciascuna categoria può essere impostata su automatico / manuale attraverso i controlli nella sezionepiù sotto',
	'USER_REMINDER_BCC_EMAIL_ADDRESS'				=> 'Indirizzo e-mail nascosto',
	'USER_REMINDER_BCC_EMAIL_ADDRESS_EXPLAIN'		=> 'Inserisci un indirizzo e-mail per ricevere una copia nascosta di ogni sollecito. Lascia in bianco per disattivare.',	
	'USER_REMINDER_IGNORE_NO_EMAIL'					=> 'Ignora utenti che hanno scelto di non ricevere e-mail dagli amministratori',
	'USER_REMINDER_IGNORE_NO_EMAIL_EXPLAIN'			=> 'Impostando a ’Si’ verrà sovrascritta la scelta dell’utente nel caso in cui questi abbia scelto di non ricevere e-mail dagli Amministratori',
	'USER_REMINDER_PROTECTED_USERS'					=> 'Utenti esonerati',
	'USER_REMINDER_PROTECTED_USERS_EXPLAIN'			=> 'Lista delle utenze che sono esonerate dal ricevere i promemoria. Si possono rimuovere le impostazioni di esonero anche attraverso la sezione degli Utenti esonerati.<br /><br />IMPORTANTE! Per compilare la lista bisogna utilizzare le ’user_id’ (NON il nome utente) e la virgola come separatore per le diverse utenze.',
	'USER_REMINDER_PROTECTED_GROUPS'				=> 'Gruppi protetti',
	'USER_REMINDER_PROTECTED_GROUPS_EXPLAIN'		=> 'Seleziona qui i gruppi da proteggere per l’invio dei promemoria. <br /><br />IMPORTANTE! <b>Non</b> non sarai in grado di eliminare la protezione di utenti contenuti in in questi gruppi. L’unico modo è quello di deselezionare il gruppo qui. <br /><br />Per deselezionare tutti i gruppi, seleziona <em>Nessun Gruppo selezionato</em>',	
	'USER_REMINDER_DELETE_CHOICE'					=> 'Opzioni per la cancellazione degli utenti',
	'USER_REMINDER_DELETE_CHOICE_EXPLAIN'			=> 'Se si sceglie di cancellare gli utenti, indicare qui le modalità di cancellazione dei messaggi esistenti',
	'USER_REMINDER_ZERO_POSTER_ENABLE'				=> 'Promemoria per utenti che non hanno mai inviato messaggi pubblici',
	'USER_REMINDER_ZERO_POSTER_DAYS'				=> 'Numero di giorni successivi alla registrazione, per l’invio del promemoria',
	'USER_REMINDER_ZERO_POSTER_DAYS_EXPLAIN'		=> 'Se impostato su automatico, il promemoria verrà inviato dopo x giorni dalla registrazione a tutti gli utenti che non hanno mai inviato nemmeno un messaggio pubblico',
	'USER_REMINDER_INACTIVE_ENABLE'					=> 'Promemoria per utenti inattivi',
	'USER_REMINDER_INACTIVE_DAYS'					=> 'Numero di giorni dopo l’ultima connessione, per l’invio del promemoria',
	'USER_REMINDER_INACTIVE_DAYS_EXPLAIN'			=> 'Se impostato su automatico, il promemoria verrà inviato dopo x giorni dall’ultima connessione',
	'USER_REMINDER_NOT_LOGGED_IN_ENABLE'			=> 'Promemoria per utenti attivati ma mai connessi',
	'USER_REMINDER_NOT_LOGGED_IN_DAYS'				=> 'Numero di giorni dopo l’attivazione (senza aver mai effettuato connessioni)',
	'USER_REMINDER_NOT_LOGGED_IN_DAYS_EXPLAIN'		=> 'Se impostato su automatico, il promemoria verrà inviato dopo x giorni dopo l’attivazione',
	'USER_REMINDER_INACTIVE_STILL_ENABLE'			=> 'Secondo promemoria agli utenti',
	'USER_REMINDER_INACTIVE_STILL_ENABLE_EXPLAIN'	=> 'Questa opzione permette di inviare un ulteriore promemoria agli utenti che non hanno avuto reazione al promemoria precedente',
	'USER_REMINDER_USERS_PER_PAGE'					=> 'Utenti visualizzati per pagina',
	'USER_REMINDER_USERS_PER_PAGE_EXPLAIN'			=> 'Indica quanti utenti devono essere visualizzati per pagina. Se lasciato a 0, saranno visualizzati quelli predefiniti del valore configurato nella board, es. %d.',	
	'USER_REMINDER_LOGGING_OPTIONS'					=> 'Tracciatura nel Log',
	'USER_REMINDER_LOGGING_OPTIONS_EXPLAIN'			=> 'Indicare quali azioni devono essere tracciate nel Log applicativo',
	'USER_REMINDER_LOG_OPT_SCRIPT'					=> 'Esecuzione della procedura automatica di invio promemoria',
	'USER_REMINDER_LOG_OPT_USERS_REACT'				=> 'Utenti che hanno reagito ai solleciti (per esempio tornando a connettersi)',
	'USER_REMINDER_LOG_OPT_AUTO_EMAILS'				=> 'Log delle e-mail automatiche inviate agli utenti',
	'USER_REMINDER_INACTIVE_STILL_OPTIONS'			=> 'Il secondo promemoria è basato su',
	'USER_REMINDER_INACTIVE_STILL_OPTIONS_EXPLAIN'	=> 'Queste sono le tipologie per cui è previsto il secondo promemoria (esempio: se l’opzione ’Utenti Inattivi’ è attivata, il promemoria verrà inviato solamente agli utenti inattivi). Se nessuna opzione è attivata l’impostazione verrà applicata a tutti gli elementi della lista.',
	'USER_REMINDER_INACTIVE_STILL_DAYS'				=> 'Numero di giorni tra il primo ed il secondo promemoria',
	'USER_REMINDER_INACTIVE_STILL_DAYS_EXPLAIN'		=> 'Se impostato su automatico, un promemoria verrà inviato dopo x giorni dal primo promemoria, solamente per gli utenti che afferiscono ad una o più delle categorie indicate sopra',

	'YES'			=> 'Si',
	'NO'			=> 'No',
	'MANUAL'		=> 'Manuale',
	'AUTOMATIC'		=> 'Automatico',
	
	// Titles and Explanations of the ACP sections
	'ZERO_POSTS_TITLE'				=> 'Nessun messaggio inviato',
	'ZERO_POSTS_TITLE_EXPLAIN'		=> 'La lista sottostante elenca gli utenti che non hanno mai inviato un messaggio pubblico e che si sono registrati più di %d giorni fa.<br/>Dalla lista è possibile verificare se un utente ha già ricevuto dei precedenti promemoria.<br/>Attraverso i comandi in fondo alla pagina è possibile inviare manualmente un promemoria, annullare l’invio del promemoria, ed altri comandi.<br/>&nbsp;',
	'INACTIVE_TITLE'				=> 'Utenti Inattivi',
	'INACTIVE_TITLE_EXPLAIN'		=> 'La lista sottostante elenca gli utenti che non si sono connessi da almeno %d giorni.<br/>Dalla lista è possibile verificare se un utente ha già ricevuto dei precedenti promemoria.<br/>Attraverso i comandi in fondo alla pagina è possibile inviare manualmente un promemoria, annullare l’invio del promemoria, ed altri comandi.<br/>&nbsp;',
	'NOT_LOGGED_IN_TITLE'			=> 'Utenti attivati ma mai connessi',
	'NOT_LOGGED_IN_TITLE_EXPLAIN'	=> 'La lista sottostante elenca gli utenti che si sono attivati ma che non hanno mai effettuato una connessione.<br/>Dalla lista è possibile verificare se un utente ha già ricevuto dei precedenti promemoria.<br/>Attraverso i comandi in fondo alla pagina è possibile inviare manualmente un promemoria, annullare l’invio del promemoria, ed altri comandi.<br/>&nbsp;',
	'INACTIVE_STILL_TITLE'			=> 'Secondo Promemoria',
	'INACTIVE_STILL_TITLE_EXPLAIN'	=> 'La lista sottostante elenca gli utenti che non hanno reagito al primo promemoria (a seconda dei settaggi: utensi senza messaggi, utenti inattivi o utenti mai connessi) inviato da almeno %d giorni.<br/>Attraverso i comandi in fondo alla pagina è possibile inviare manualmente un promemoria, annullare l’invio del promemoria, ed altri comandi.<br/>&nbsp;',
	'PROTECTED_USERS_TITLE'			=> 'Utenti Esonerati',
	'PROTECTED_USERS_TITLE_EXPLAIN'	=> 'La lista sottostante elenca gli utenti esonerati, per i quali non verrà effettuato l’invio del promemoria.<br/>E’ possibile annullare l’esonero attraverso il comando in fondo alla pagina, oppure attraverso la pagina principale di configurazione.<br/>&nbsp;',
	'NON_EMAIL_RECEIVERS_EXPLAIN'	=> '(x) indica i membri che hanno scelto di non ricevere e-mail dagli Amministratori (l’opzione ’ Gli amministratori possono inviarti e-mail’ è impostata a NO)',
	'USERS_IN_GROUP_EXPLAIN'		=> '[x] indica i membri protetti nel gruppo. Eliminare l’opzione dalla lista non elimina gli utenti da questa lista!',
	
	// Row Titles
	'USER_POSTS'				=> 'Messaggi pubblici',
	'USER_LASTVISIT'			=> 'Ultima visita',
	'USER_REGDATE'				=> 'Registrazione',
	'REMINDED_POSTS'			=> 'Promemoria <br /> per nessun messaggio',
	'REMINDED_INACTIVE'			=> 'Promemoria <br /> utente inattivo',
	'REMINDED_NOT_LOGGED_IN'	=> 'Promemoria <br /> utente mai connesso',
	'REMINDED_INACTIVE_STILL'	=> 'Secondo <br /> Promemoria',

//	'TIME_SPENT'	=> '%d mese(i), %d giorno(i) fa',
	'TIME_SPENT'	=> '%s giorno(i) fa',
	'TOTAL_USERS'	=> '%1$s di %2$s Utenti ',
	'TOTAL_USERS_PCT'	=> '(%.2f%% di tutti gli utenti)',

	'NO_USERS_FOUND'	=> 'Nessun utente trovato',	
	
	//ACP Config/Trigger confirmation
	'USER_UPDATED'			=> 'Attività di Promemoria Utenti completata',	
	'NO_USER_UNPROTECTED'	=> 'Nessun utente non protetto.<br/>La selezione include solo gli utenti di gruppi protetti.',		
	'ERROR_USER_UPDATED'	=> 'Nessun Promemoria inviato.<br/>La selezione include solamente gli utenti che non possono inviare promemoria',	
	'USERS_DELETED'			=> 'Utente(i) cancellato(i)',	
	'ERROR_USERS_DELETED'	=> 'I seguenti utenti non possono essere cancellati:<br/> %s',	

	'UR_TOO_MANY_CHARS'		=> 'Hai provato a salvare %d caratteri. Ricorda che puoi salvare fino ad un massimo di 255 caratteri. Se hai bisogni di più caratteri, considera la creazione di un gruppo con la protezione di utenti per i Promemoria.',

	'ERROR_EMAIL_CONFIRM_OPERATION' 	=> 'Attenzione che nella selezione sono presenti utenti che per i quali l’azione è già stata portata a termine.<br/>',	
	'ERROR_NOEMAIL_CONFIRM_OPERATION' 	=> 'Sono stati selezionati utenti che hanno scelto di non ricevere messaggi dagli Amministratori. Essi non riceveranno questi promemoria.<br/>',	
	'DELETE_USER_CONFIRM_OPERATION' 	=> 'E’ stato scelto di cancellare gli utenti. <strong>Attenzione che questo processo è irreversibile una volta completato.</strong><br/>',	
	'EMAIL_DELETED_USERS' 				=> 'Inviare l’e-mail ai membri cancellati?',	

	'USER_REMINDER_CONFIG_UPDATED'	=> 'La configurazione dei Promemoria Utenti è stata aggiornata',

	//selection options
	'DISPLAY_CHOICE'	=> 'Display',
	'REMINDER'			=> 'Invia Promemoria',
	'CLEAR'				=> 'Resetta Promemoria',	
	'CLEAR_ALL'			=> 'Resetta tutti i Promemoria',	
	'PROTECT_USER'		=> 'Aggiungi all’elenco degli esonerati',
	'DELETE_USER'		=> 'Cancella Utente',
	'UNPROTECT_USER'	=> 'Rimuovi dall’elenco degli esonerati',
	'ALL'				=> 'Tutti',
	'REMINDED'			=> 'Promemoria effettuato',
	'NOT_REMINDED'		=> 'Promemoria non effettuato',
	'REMINDER_DATE'		=> 'Data del Promemoria',
	
	//install vars
	'UR_CONFIG_FIELDS_UPDATED_CREATED'	=>	'Campi di configurazione creati/aggiornati',
	'UR_INSTALL_COMPLETE'				=> 	'<strong>Installazione di Promemoria Utenti completata. E’ necessario eliminare la cartella <samp>/install</samp>!!</strong>',
	'UR_DELETE_COMPLETE'				=> 	'<strong>Rimozione di Promemoria Utenti completata. E’ necessario eliminare la cartella <samp>/install</samp>!!	</strong>',
	'UR_INSTALL_RETURN'					=> 	'<br /><br /><br />Cliccare %squi%s per tornare all’indice principale.',
	'UR_CONFIGS_CREATED'				=> 	'Creazione campi di configurazione completata.',
	'UR_USER_FIELDS_ADDED'				=>	'Campi Utente aggiunti dove necessario ed effettuata indicizzazione',
	'UR_USER_FIELDS_DELETED'			=>	'Campi Utente rimossi',
	'UR_BACKUP_WARN'					=> 	'E’ consigliabile eseguire un backup prima di proseguire!!!',
	'UR_INSTALL_DESC'					=> 	'Questa parte dell’installazione creerà nuove tabelle e campi di database ed aggiungerà i nuovi moduli. <br />Per proseguire cliccare sul link qui sotto:',
	'UR_NEW_INSTALL'					=> 	'Nuova Installazione',
	'UR_UPGRADE_DESC'					=> 	'Questa parte dell’installazione procederà con l’aggiornamento/rimozione di tabelle e campi del database ed aggiungerà/rimuoverà i moduli necessari. <br />Per proseguire cliccare sul link qui sotto:',
	'UR_UPGRADE'				=> 	'Aggiornamento a %s',
	'UR_UP_TO_DATE'			=> 	'La versione %s attualmente installata è la più aggiornata disponibile',

	'UR_INSTALL_REDIRECT'	=> 	'Attendere mentre si viene rediretti al completamento dell’installazione.',
	'UR_UNINSTALL_REDIRECT'	=> 	'Attendere mentre si viene rediretti al completamento della rimozione.',
	'UR_UNINSTALL'			=> 	'Disinstallazione',

	'UR_MODULE_ADDED'			=> 	'Il modulo Promemoria Utenti è stato (ri)aggiunto.',
	'UR_TABLE_CONFIG_DELETE'	=> 	'Campi di configurazione Promemoria Utenti rimossi   <br />',
	'UR_MODULE_DELETED'			=> 	'Modulo Promemoria Utenti rimosso   <br />',
));

?>