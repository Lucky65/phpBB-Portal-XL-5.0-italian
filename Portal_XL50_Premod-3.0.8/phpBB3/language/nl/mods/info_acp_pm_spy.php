<?php
/**
*
* acp [English]
*
* @package disclaimer
* @version 1.0.0
* @copyright (c) 2008 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
	'ACP_PM_SPY'			=> 'PM Spion',
	'AUTHOR_IP'				=> 'IP Adres van de auteur',
	'DATE'					=> 'Datum',
	'DELETE_PMS'			=> 'Verwijder berichten',
	'NO_PM_SELECTED'		=> 'Geen berichten geselecteerd',
	'PM_BOX'				=> 'Berichten box',
	'PM_SPY_READ'			=> 'Prive berichten lijst',
	'PM_SPY_READ_EXPLAIN'	=> 'Hier is een lijst met alle prive berichten van de site.',
	'TO'					=> 'Naar',
	'TOTAL_USERS'			=> 'Aantal gebruikers',
	'PM_COUNT'				=> 'Aantal berichten',

	'INSTALL_NOT_DELETED'	=> 'Het installatiebestand voor de mod is nog niet verwijderd',

	'PM_HOLDBOX'			=> 'Held',	
	'PM_INBOX'				=> 'Inbox',
	'PM_NOBOX'				=> 'Geen box',
	'PM_OUTBOX'				=> 'Outbox',
	'PM_SAVED'				=> 'Opgeslagen',
	'PM_SENTBOX'			=> 'Verstuurd',

	'SORT_FROM'				=> 'Van',
	'SORT_TO'				=> 'Naar',
	'SORT_BCC'				=> 'BCC',
	'SORT_PM_BOX'			=> 'PM box',
	
	'LOG_PM_SPY'			=> '<strong>Prive berichten verwijderd door PM Spy</strong><br />',
));

// Install
$lang = array_merge($lang, array(
	'NO_FOUNDER'				=> 'Je hebt geen rechten om de mod te installeren, hiervoor moet je Founder zijn.',
	'INSTALL_PM_SPY'			=> 'Bezig met installeren van de PM Spy Mod',
	'COMPLETE'					=> 'Installatie gelukt ...',
));

?>