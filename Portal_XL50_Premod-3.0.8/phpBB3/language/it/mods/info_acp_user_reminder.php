<?php
/**
*
* @package acp
* @version $Id: info_acp_user_reminder.php 198 2009-04-13 13:23:27Z lefty74 $
* @copyright (c) 2008 lefty74 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translated in Italian language by Roberto Restelli (dueerre@hotmail.com)
* @update translation in Italian ( Lucky65 di phpbb.it - http://www.portalxl.eu )
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

// Merge language entries into the common lang array
$lang = array_merge($lang, array(
	'USER_REMINDER' 						=> 'Promemoria Utenti',
	'ACP_USER_REMINDER_CONFIGURATION' 		=> 'Configurazione',
	'ACP_USER_REMINDER_ZERO_POSTER'			=> ' Utenti con nessun messaggio inviato',
	'ACP_USER_REMINDER_INACTIVE' 			=> ' Utenti inattivi',
	'ACP_USER_REMINDER_NOT_LOGGED_IN'		=> ' Utenti mai connessi',
	'ACP_USER_REMINDER_INACTIVE_STILL'		=> ' Secondo promemoria',
	'ACP_USER_REMINDER_PROTECTED_USERS'		=> ' Utenti esonerati',
	
	//Admin logs
	'LOG_USER_REMINDER_DELETE_SECOND_REMINDER'		=> '<strong>Reset del secondo promemoria, il</strong><br />» %s',
	'LOG_USER_REMINDER_DELETE_INACTIVE_REMINDER'	=> '<strong>Reset del promemoria per utenti inattivi, il </strong><br />» %s',
	'LOG_USER_REMINDER_DELETE_ZERO_POST_REMINDER'	=> '<strong>Reset del promemoria per utenti con nessun messaggio pubblico, il </strong><br />» %s',

	'LOG_USER_REMINDER_AUTO_RUN'			=> '<strong>Eseguita procedura automatica di invio Promemoria Utenti</strong>',
	'LOG_USER_REMINDER_ZERO_POSTER'			=> '<strong>Inviata e-mail di promemoria agli utenti che non hanno mai inviato un messaggio pubblico</strong><br />» %s',
	'LOG_USER_REMINDER_AUTO_ZERO_POSTER'	=> '<strong>Inviata e-mail automatica di promemoria agli utenti che non hanni mani inviato un messaggio pubblico</strong><br />» %s',
	'LOG_USER_REMINDER_ZERO_POSTER_CLEAR'	=> '<strong>Reset del promemoria agli utenti con nessun messaggio pubblico</strong><br />» %s',
	'LOG_USER_REMINDER_INACTIVE'			=> '<strong>Inviata e-mail di promemoria agli utenti inattivi</strong><br />» %s',
	'LOG_USER_REMINDER_AUTO_INACTIVE'		=> '<strong>Inviata e-mail automatica di promemoria agli utenti inattivi</strong><br />» %s',
	'LOG_USER_REMINDER_INACTIVE_CLEAR'		=> '<strong>Reset del promemoria agli utenti inattivi</strong><br />» %s',
	'LOG_USER_REMINDER_NOT_LOGGED_IN'		=> '<strong>Inviata e-mail di promemoria agli utenti mai connessi</strong><br />» %s',
	'LOG_USER_REMINDER_AUTO_NOT_LOGGED_IN'		=> '<strong>Inviata e-mail automatica di promemoria agli utenti mai connessi</strong><br />» %s',
	'LOG_USER_REMINDER_NOT_LOGGED_IN_CLEAR'	=> '<strong>Reset del promemoria agli utenti mai connessi</strong><br />» %s',
	'LOG_USER_REMINDER_INACTIVE_STILL'		=> '<strong>Inviata e-mail con secondo promemoria agli utenti</strong><br />» %s',
	'LOG_USER_REMINDER_AUTO_INACTIVE_STILL'		=> '<strong>Inviata e-mail automatica con secondo promemoria agli utenti</strong><br />» %s',
	'LOG_USER_REMINDER_INACTIVE_STILL_CLEAR'	=> '<strong>Reset del secondo promemoria agli utenti</strong><br />» %s',
	'LOG_USER_REMINDER_CLEARED'				=> '<strong>Reset del promemoria per utenti esonerati</strong><br />» %s',
	'LOG_USER_PROTECTED'						=> '<strong>Utente aggiunto all’elenco degli esonerati dall’invio dei promemoria</strong><br />» %s',
	'LOG_USER_UNPROTECTED'						=> '<strong>Utente rimosso dall’elenco degli esonerati dall’invio dei promemoria</strong><br />» %s',

	
	'LOG_USER_REMINDER_CONFIG_UPDATED'		=> '<strong>Aggiornamento configurazione di Promemoria Utenti</strong>',

	
	));
?>