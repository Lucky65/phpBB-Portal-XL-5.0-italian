<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: posting.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/13
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
	'ADD_BLOG'					=> 'Aggiungi una nuova voce blog',
	'APPROVE_BLOG'				=> 'Approva voce blog',
	'APPROVE_BLOG_CONFIRM'		=> 'Sei sicuro di voler approvare questa voce blog?',
	'APPROVE_BLOG_SUCCESS'		=> 'Hai correttamente approvato questa voce blog per la visione pubblica.',
	'APPROVE_REPLY'				=> 'Approva commento',
	'APPROVE_REPLY_CONFIRM'		=> 'Sei sicuro di voler approvare questo commento?',
	'APPROVE_REPLY_SUCCESS'		=> 'Hai correttamente approvato questo commento per la visione pubblica.',

	'BLOG_ALREADY_APPROVED'		=> 'Questa voce blog è stata già approvata.',
	'BLOG_ALREADY_DELETED'		=> 'Voce blog correttamente cancellata.',
	'BLOG_APPROVE_PM'			=> 'Questo è un messaggio automatico inviato dal blog utente.<br /><br />%1$ ha appena inviato <a href="%2$s">questa voce blog</a> ed è necessario approvarla prima di essere visibile pubblicamente.<br />Prenditi il tempo di decidere cosa deve essere fatto.',
	'BLOG_APPROVE_PM_SUBJECT'	=> 'Autorizzazione necessaria per voce blog!',
	'BLOG_DELETED'				=> 'Voce blog cancellata.',
	'BLOG_EDIT_LOCKED'			=> 'Voce blog bloccata per le modifiche.',
	'BLOG_EDIT_SUCCESS'			=> 'Voce blog modificata con successo!',
	'BLOG_NEED_APPROVE'			=> 'Un moderatore o un amministratore deve approvare la tua voce blog prima di essere visibile pubblicamente.',
	'BLOG_NOT_DELETED'			=> 'Questa voce blog non è stata cancellata.  Perchè non provi a ripristinarla?',
	'BLOG_REPORT_CONFIRM'		=> 'Sei sicuro di voler inviare rapporto per questa voce blog?',
	'BLOG_REPORT_PM'			=> 'Questo è un messaggio automatico inviato dal blog utente.<br /><br />%1$ ha appena inviato un rapporto per <a href="%2$s">per questa voce blog</a>.<br />Prenditi il tempo di vedere oltre il rapporto e decidere cosa deve essere fatto.',
	'BLOG_REPORT_PM_SUBJECT'	=> 'Rapporto voce blog!',
	'BLOG_SUBMIT_SUCCESS'		=> 'Questa voce è stata correttamente inviata!',
	'BLOG_SUBSCRIPTION_NOTICE'	=> 'Questo è un messaggio automatico inviato dal blog utente per notificarti un nuovo commento inviato da [url=%1$s]questa[/url] voce blog di %2$s.<br /><br />Se non vuoi più ricevere queste notifiche clicca [url=%3$s]qui[/url] per annullare la sottoscrizione.',
	'BLOG_UNDELETED'			=> 'Blog ripristinato.',

	'CATEGORY_EXPLAIN'			=> 'Puoi selezionare più di una categoria tenendo premuto CTRL e cliccandoci sopra.<br /><br />Le voci blogs sono <strong>sempre</strong> mostrate nel tuo blog personale.',

	'DELETE_BLOG_CONFIRM'		=> 'Sei sicuro di voler cancellare questa voce blog?',
	'DELETE_REPLY_CONFIRM'		=> 'Sei sicuro di voler cancellare questo commento?',

	'EDIT_A_BLOG'				=> 'Modifica voce blog',
	'EDIT_A_REPLY'				=> 'Modifica commento',

	'HARD_DELETE'				=> 'Cancellazione totale',
	'HARD_DELETE_EXPLAIN'		=> 'Se selezioni questa opzione non puoi più tornare indietro!',

	'NO_PERMISSIONS_SINGLE'		=> 'Non puoi leggere o rispondere a questa voce blog.',

	'PERMISSIONS'				=> 'Permessi',

	'REPLY_ALREADY_APPROVED'	=> 'Questo commento è stato già approvato.',
	'REPLY_APPROVE_PM'			=> 'Questo è un messaggio automatico inviato dal blog utente.<br /><br />%1$ ha appena inviato <a href="%2$s">questo commento</a> ed è necessario approvarlo prima di essere visibile pubblicamente.<br />Prenditi il tempo di decidere cosa deve essere fatto.',
	'REPLY_APPROVE_PM_SUBJECT'	=> 'Autorizzazione necessaria per commento blog!',
	'REPLY_DELETED'				=> 'Commento cancellato.',
	'REPLY_EDIT_LOCKED'			=> 'Commento bloccato per le modifiche.',
	'REPLY_EDIT_SUCCESS'		=> 'Il commento è stato già modificato!',
	'REPLY_NEED_APPROVE'		=> 'Un moderatore o un amministratore deve approvare il tuo commento prima di essere visibile pubblicamente.',
	'REPLY_NOT_DELETED'			=> 'Questa commento non è stato cancellato.  Perchè non provi a ripristinarlo',
	'REPLY_PERMISSIONS_SINGLE'	=> 'Puoi leggere e rispondere a questa voce blog.',
	'REPLY_REPORT_CONFIRM'		=> 'Sei sicuro di voler inviare un rapporto per questo commento?',
	'REPLY_REPORT_PM'			=> 'Questo è un messaggio automatico inviato dal blog utente.<br /><br />%1$ ha appena inviato <a href="%2$s">questo commento</a> ed è necessario approvarlo prima di essere visibile pubblicamente.<br />Prenditi il tempo di decidere cosa deve essere fatto.',
	'REPLY_SUBMIT_SUCCESS'		=> 'Il commento è stato inviato con successo!',
	'REPLY_UNDELETED'			=> 'Il commento è stato ripristinato.',

	'SUBSCRIPTION_NOTICE'		=> 'Avviso di sottoscrizione da parte del blog utente',

	'UNDELETE_BLOG'				=> 'Ripristina voce blog',
	'UNDELETE_BLOG_CONFIRM'		=> 'Sei sicuro di voler ripristinare questa voce blog?',
	'UNDELETE_REPLY'			=> 'Ripristina commentot',
	'UNDELETE_REPLY_CONFIRM'	=> 'Sei sicuro di voler ripristinare questo commento?',
	'USER_SUBSCRIPTION_NOTICE'	=> 'Questo è un messaggio automatico inviato dal blog utente per notificarti un nuova voce blog inviato da %1$s.  YPuoi vedere il blog [url=%2$s]qui[/url].<br /><br />Se non vuoi più ricevere queste notifiche clicca [url=%3$s]qui[/url] per annullare la sottoscrizione.',

	'VIEW_PERMISSIONS_SINGLE'	=> 'Puoi leggere questa voce blog.',
));

?>