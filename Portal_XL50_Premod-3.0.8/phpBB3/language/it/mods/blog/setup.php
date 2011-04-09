<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: setup.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/06/26
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ALREADY_INSTALLED'				=> 'Hai già installato il mod utente blog.<br /><br />Clicca %squi%s per tornare alla pagina principale blog.',
	'ALREADY_UPDATED'				=> 'Stai usando l’ultima versione del mod utente blog.<br /><br />Clicca %squi%s per tornare alla pagina principale blog.',

	'BACKUP_NOTICE'					=> 'Assicurati di eseguire un backup di tutti i dati del forum prima di tentare l’aggiornamento. Se qualcosa va storto durante il processo di aggiornamento e non hai i dati di backup rischi di perdere tutto.',

	'CLEANUP'						=> 'Ottimizzazione',
	'CLEANUP_COMPLETE'				=> 'Le tabelle sono state ottimizzate con successo.',
	'CONVERTED_BLOG_IDS_MISSING'	=> 'Gli id del blog convertito sono assenti nella cache.  Ripristina i dati con il tuo backup e prova nuovamente l’aggiornamento.',
	'CONVERT_COMPLETE'				=> 'Il processo di aggiornamento è stato completato con successo.',
	'CONVERT_FOES'					=> 'Converti ignorati',
	'CONVERT_FOES_EXPLAIN'			=> 'Converti gli utenti weblog_blocked in ignorati.',
	'CONVERT_FRIENDS'				=> 'Converti amici',
	'CONVERT_FRIENDS_EXPLAIN'		=> 'Converti gli utenti weblog_blocked in amici.',

	'DB_TABLE_NOT_EXIST'			=> 'La tabella %s non è presente nel database selezionato.',

	'FINAL'							=> 'Finale',

	'INDEX_COMPLETE'				=> 'I blogs e le risposte sono ora indicizzate ne sistema di ricerca.',
	'INSTALL_BLOG_DB'				=> 'Installa mod utente blog',
	'INSTALL_BLOG_DB_CONFIRM'		=> 'Sei pronto ad installare i dati nel database per questo mod?',
	'INSTALL_BLOG_DB_FAIL'			=> 'Installazione mod utente blog fallita.<br />Invia se vuoi un rapporto dei seguenti errori a EXreaction:<br />',
	'INSTALL_BLOG_DB_SUCCESS'		=> 'Gai correttamente aggiornato il database per il mod blog utente.<br /><br />Clicca %squi%s per tornare alla pagina principale blog.',

	'LIMIT_EXPLAIN'					=> 'Numero di oggetti, se il valore impostato è troppo alto potrebbe essere necessario ripetere l’intero aggiornamento.',
	'LIMIT_INCORRECT'				=> 'E’ necessario specificare un valore, anche 1. E’ altamente consigliabile utilizzare almeno il valore 100, ma non più di 1000, a seconda delle impostazioni PHP.',

	'NEXT_PART'						=> 'Procedi alla parte successiva',
	'NOT_INSTALLED'					=> 'Devi installare la mod blog utente prima di aggiornare lo script.',
	'NO_STAGE'						=> 'Non hai specificato una parte di inizio.',

	'PRE_UPGRADE_COMPLETE'			=> 'Puoi ora cominciare il processo di conversione. Ricorda che potrebbe essere necessario fare modifiche manuali e regolare molte cose dopo la conversione automatica, in particolare verificare le autorizzazioni assegnate.',

	'REINDEX'						=> 'Indicizzazione',
	'RESYNC'						=> 'Sincronizzazione',
	'RESYNC_COMPLETE'				=> 'La mod blog utente è stata sincronizzata.',
	'RETURN_LAST_STEP'				=> 'Clicca qui per ritornare allo step successivo.',

	'SCHEMA_NOT_EXIST'				=> 'Lo schema del database non è presente.  Scarica una copia recente di questo mod e invia al tuo server tutti i files.  Se non riesci a risolvere questo problema, contatta EXreaction.',
	'SEARCH_BREAK_CONTINUE_NOTICE'	=> 'Sezione %1$s di %2$s, Parte %3$s di %4$s completate, ma ci sono altre sezioni o/o parti da terminare.<br />Clicca ora su continua se non sei automaticamente reindirizzato alla pagina successiva.',
	'SUCCESS'						=> 'Successo',
	'SUCCESSFULLY_UPDATED'			=> 'La mod blog utente è ora aggiornata alla versione %1$s.<br /><br />Clicca %2$squi%3$s per tornare alla pagina principale blog.',

	'TRUNCATE_TABLES'				=> 'Tronca le tabelle esistenti',
	'TRUNCATE_TABLES_EXPLAIN'		=> 'Questa opzione cancellerà tutti i dati nelle tabelle esistenti della mod blog utente. Se selezioni No i nuovi dati verranno aggiunti insieme al tuo blog esistente e alle risposte.',

	'UNINSTALL_BLOG_DB'				=> 'Disinstalla mod blog utente',
	'UNINSTALL_BLOG_DB_CONFIRM'		=> 'Sei sicuro di voler eliminare i dati della mod blog utente?<br /><br /><strong>Se esegui l’operazione TUTTI i dati utente dalla mod blog utente andranno persi.</strong>',
	'UNINSTALL_BLOG_DB_SUCCESS'		=> 'La mod blog utente è stata eliminata dal database.  Per eliminarla definitivamente devi modificare e cancellare tutti i files che hai aggiunto durante l’installazione.',
	'UPDATE_INSTRUCTIONS'			=> 'Aggiornamento',
	'UPDATE_INSTRUCTIONS_CONFIRM'	=> 'Assicurati di aver letto le istruzioni nella sezione documenti <b>prima</b> di eseguire questo script.<br /><br />Sei pronto ad eseguire l’aggiornamento del database per il mod blog utente?',
	'UPGRADE_BLOGS'					=> 'Aggiornamento Blogs',
	'UPGRADE_BREAK_CONTINUE_NOTICE'	=> 'Fase %1$s, Sezione %2$s di %3$s, Parte %4$s di %5$s completata, ma ci sono altre sezioni o/o parti da terminare.<br />Clicca ora su continua se non sei automaticamente reindirizzato alla pagina successiva.',
	'UPGRADE_COMPLETE'				=> 'Il processo di aggiornamento è stato completato con successo!<br />Esegui un backups e hai finito la conversione e controlla la configurazione dei dati per verificare se il funzionamento è corretto.',
	'UPGRADE_LIST'					=> 'Lista aggiornamento',
	'UPGRADE_PHP'					=> 'Stai eseguendo una versione di PHP non supportata. Devi essere in possesso almeno della versione PHP 5.1.0 o superiore per usare questo mod.',
	'UPGRADE_REPLIES'				=> 'Aggiornamento risposte',

	'WELCOME_MESSAGE'				=> 'Benvenuto nella mod blog utente!

Argomento versione:
http://lithiumstudios.org/forum/viewtopic.php?f=41&t=433

Supporto dell’autore del mod solo su lithiumstudios.org

Se hai commenti oppure hai bisogno di supporto, scrivi sul forum dell’autore:
http://www.lithiumstudios.org/forum/viewforum.php?f=57

Controlla tutte le informazioni prima di chiedere supporto.
http://www.lithiumstudios.org/forum/viewforum.php?f=41

Scarica la traduzione italiana su forum.luckylab.eu
http://www.portalxl.eu/downloads.php?view=detail&df_id=38',

	'WELCOME_SUBJECT'				=> 'Benvenuto nella Mod blog utente!',
));

?>