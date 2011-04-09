<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: misc.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
	'ALREADY_SUBSCRIBED'		=> 'Sei già iscritto.',

	'BLOG_USER_NOT_PROVIDED'	=> 'Devi selezionare l’user_id o il blog_id dell’oggetto a cui vuoi iscriverti.',

	'NOT_ALLOWED_CHANGE_VOTE'	=> 'Non ti è consentito modificare il tuo voto.',
	'NOT_SUBSCRIBED'			=> 'Non sei iscritto.',

	'RESYNC_BLOG'				=> 'Sincronizza blog',
	'RESYNC_BLOG_CONFIRM'		=> 'Sei sicuro di voler sincronizzare tutti i dati del blog?  Questa operazione potrebbe richiedere un pò di tempo.',
	'RESYNC_BLOG_SUCCESS'		=> 'Il mod blog utente è stato sincronizzato con successo.',

	'SEARCH_BLOG_ONLY'			=> 'Ricerca solo nei blogs',
	'SEARCH_BLOG_TITLE_ONLY'	=> 'Ricerca nei titoli',
	'SEARCH_TITLE_MSG'			=> 'Ricerca nei titoli e messaggi',
	'SUBSCRIBE_BLOG_CONFIRM'	=> 'Come vuoi ricevere le notifiche alle nuove risposte aggiunti a questo blog?',
	'SUBSCRIBE_BLOG_TITLE'		=> 'Sottoscrizione blog',
	'SUBSCRIPTION_ADDED'		=> 'Sottoscrizione aggiunta con successo.',
	'SUBSCRIPTION_REMOVED'		=> 'La tua sottoscrizione è stata eliminata con successo',

	'UNSUBSCRIBE_BLOG_CONFIRM'	=> 'Sei sicuro di voler cancellare la tua sottoscrizione a questo blog?',
	'UNSUBSCRIBE_USER_CONFIRM'	=> 'Sei sicuro di voler cancellare la tua sottoscrizione a questo utente?',
));

?>