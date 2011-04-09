<?php
/** 
*
* acp_add_user [Italian]
*
* @author David Lewis (Highway of Life) http://phpbbacademy.com
*
* @package acp
* @version $Id: info_acp_add_user_mod.php 31M 2007-08-05 01:14:00Z (local) $
* @copyright (c) 2007 Star Trek Guide Group
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

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

$lang = array_merge($lang, array(
	'ACP_ACCOUNT_ADDED'			=> 'L’account utente è stato creato. L’utente può ora loggarsi con nome utente e pssword inviato nell’email di attivazione.',
	'ACP_ACCOUNT_INACTIVE'		=> 'L’account utente è stato creato. L’amministratore richiede l’attivazione degli utenti.<br />Una chiave di attivazione è stata inviata all’indirizzo email dell’utente.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'L’account utente è stato creato. L’amministratore richiede l’attivazione degli utenti.<br />Una email è stata inviata all’amministratore e l’utente sarà informato quando l’account sarà attivato.',
	'ACP_ADD_USER'				=> 'Aggiunta utenti',
	'ACP_ADD_USER_ACCOUNT'		=> 'Aggiunta account utenti',
	'ACP_ADMIN_ACTIVATE'		=> 'Una email verrà inviata all’amministratore per l’attivazione dell’account, in alternativa, si può verificare è possibile selezionare la casella qui sotto per attivare l’account immediatamente, una volta creato. L’utente riceverà una e-mail contenente i dettagli di accesso.',
	'ACP_EMAIL_ACTIVATE'		=> 'Dopo la creazione dell’account, l’utente riceverà una email contenente tutti dati di accesso.',
	'ACP_INSTANT_ACTIVATE'		=> 'L’account è stato attivato instantaneamente. l’utente riceverà una email contenente i dati di login.',
	
	'ADD_USER'					=> 'Aggiungi utente',
	'ADD_USER_EXPLAIN'			=> 'Crea un nuovo account utente. Se sei un’amministratore, potrai attivare immediatamente l’utente.',
	'ADD_USER_MOD_INSTALLED'	=> 'Aggiungi utente versione MOD %s installata<br />Assicurati di assegnare <em>user_add</em> permessi amministrativi per gli utenti di cui vuoi abilitare l’accesso a questo modulo.',
	'ADD_USER_MOD_UPDATED'		=> 'Aggiungi utente aggiornamento versione MOD %s',
	'ADMIN_ACTIVATE'			=> 'Attiva account utente',
	
	'EDIT_USER_GROUPS'			=> '%sClicca qui per modificare il gruppo utente per questo utente%s',
	
	'CONTINUE_EDIT_USER'		=> '%1$sClicca qui per gestire il %2$ profilo%3$s', // es.: Click here to edit Joe’s profile.
	'LOG_USER_ADDED'			=> '<strong>Nuovo utente creato</strong><br />» %s',
	
	'acl_a_add_user'			=> array('lang' => 'Puoi creare un nuovo account utente', 'cat' => 'user_group'),
));

?>