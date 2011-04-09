<?php
/**
*
* @package acp
* @version $Id: info_acp_user_reminder.php 200 2009-04-22 19:51:49Z lefty74 $
* @copyright (c) 2008 lefty74
* @translation  by Plati, lefty74
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

// Merge language entries into the common lang array
$lang = array_merge($lang, array(
	'USER_REMINDER' 						=> 'User Reminder',
	'ACP_USER_REMINDER_CONFIGURATION' 		=> 'Konfiguration',
	'ACP_USER_REMINDER_ZERO_POSTER'			=> 'Nullposter',
	'ACP_USER_REMINDER_INACTIVE' 			=> 'Inaktive Mitglieder',
	'ACP_USER_REMINDER_NOT_LOGGED_IN'		=> 'Noch nicht eingeloggt',
	'ACP_USER_REMINDER_INACTIVE_STILL'		=> 'Zweite Erinnerung',
	'ACP_USER_REMINDER_PROTECTED_USERS'		=> 'Geschützte Mitglieder',
		
	//Admin logs
	'LOG_USER_REMINDER_DELETE_SECOND_REMINDER'		=> '<strong>Zweite Erinnerung gelöscht durch</strong><br />» %s',
	'LOG_USER_REMINDER_DELETE_INACTIVE_REMINDER'	=> '<strong>Inaktive Erinnerung gelöscht durch</strong><br />» %s',
	'LOG_USER_REMINDER_DELETE_ZERO_POST_REMINDER'	=> '<strong>Nullposter Erinnerung gelöscht durch</strong><br />» %s',

	'LOG_USER_REMINDER_AUTO_RUN'			=> '<strong>Automatisches User Reminder script ausgeführt</strong>',
	'LOG_USER_REMINDER_AUTO_ZERO_POSTER'	=> '<strong>Auto Erinnerungsmails geschickt an Nullposter</strong><br />» %s',
	'LOG_USER_REMINDER_ZERO_POSTER'			=> '<strong>Erinnerungsmail an Nullposter geschickt</strong><br />» %s',
	'LOG_USER_REMINDER_ZERO_POSTER_CLEAR'	=> '<strong>Erinnerungen an Nullposter gelöscht</strong><br />» %s',
	'LOG_USER_REMINDER_INACTIVE'			=> '<strong>Erinnerungsmail an inaktive Mitglieder geschickt</strong><br />» %s',
	'LOG_USER_REMINDER_AUTO_INACTIVE'		=> '<strong>Auto Erinnerungsmail an inaktive Mitglieder geschickt</strong><br />» %s',
	'LOG_USER_REMINDER_INACTIVE_CLEAR'		=> '<strong>Erinnerungen an inaktive Mitglieder gelöscht</strong><br />» %s',
	'LOG_USER_REMINDER_NOT_LOGGED_IN'		=> '<strong>Erinnerungsmail an nie eingeloggte Mitglieder geschickt</strong><br />» %s',
	'LOG_USER_REMINDER_AUTO_NOT_LOGGED_IN'		=> '<strong>Auto Erinnerungsmail an nie eingeloggte Mitglieder geschickt</strong><br />» %s',
	'LOG_USER_REMINDER_NOT_LOGGED_IN_CLEAR'	=> '<strong>Erinnerungen an nie eingeloggte Mitglieder gelöscht</strong><br />» %s',
	'LOG_USER_REMINDER_INACTIVE_STILL'		=> '<strong>Zweite Erinnerungsmail an Mitglieder geschickt, die auf eine frühere Erinnerung nicht reagiert haben</strong><br />» %s',
	'LOG_USER_REMINDER_AUTO_INACTIVE_STILL'		=> '<strong>Auto Zweite Erinnerungsmail an Mitglieder geschickt, die auf eine frühere Erinnerung nicht reagiert haben</strong><br />» %s',
	'LOG_USER_REMINDER_INACTIVE_STILL_CLEAR'	=> '<strong>Zweite Erinnerungen an Mitglieder gelöscht</strong><br />» %s',
	'LOG_USER_REMINDER_CLEARED'				=> '<strong>Erinnerungen von geschützten Mitgliedern gelöscht</strong><br />» %s',
	'LOG_USER_PROTECTED'						=> '<strong>Mitglieder vor Erinnerungen geschützt</strong><br />» %s',
	'LOG_USER_UNPROTECTED'						=> '<strong>Mitgliederschutz vor Erinnerungen entfernt</strong><br />» %s',

	'LOG_USER_REMINDER_CONFIG_UPDATED'		=> '<strong>User Reminder Konfiguration aktualisiert</strong>',

	
	));
?>