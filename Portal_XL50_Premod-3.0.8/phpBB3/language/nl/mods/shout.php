<?php
/**
*
* mods_shout.php [Dutch (Casual Honorifics)‎]
*
* @package language
* @version $Id: shout.php,v 1.1.1.1 2009/05/15 05:16:05 damysterious Exp $
* @copyright (c) 2005 phpBB Group 
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
	'MISSING_DIV'	=> 'De shoutbox div kan niet worden gevonden',
	'NO_POST_GUEST'	=> 'Gasten kunnen geen berichten plaatsen',
	'LOADING'	=> 'Aan het laden',
	'POST_MESSAGE'	=> 'Plaats bericht',
	'SENDING'	=> 'Verstuurd bericht',
	'MESSAGE_EMPTY'	=> 'Bericht is leeg',
	'XML_ER'	=> 'XML fout!',
	'NO_MESSAGE'	=> 'Er zijn geen berichten',
	'NO_AJAX'	=> 'Geen ajax',
	'JS_ERR'	=> 'Er is een javascript fout opgetreden. \\nFoutmelding:',
	'LINE'	=> 'Lijn',
	'FILE'	=> 'Bestand',
	'FLOOD_ERROR'	=> 'Flood error',
	'POSTED'	=> 'Bericht verzonden',
	'NO_QUOTE'	=> 'Gebruik geen lijst, quotes of bbcode',
	'SMILIES'	=> 'Smilies',
	'DEL_SHOUT'	=> 'Weet je zeker dat je deze shout wilt verwijderen?',
	'NO_SHOUT_ID'	=> 'Geen shout id',
	'MSG_DEL_DONE'	=> 'Bericht verwijderd',
	'ONLY_ONE_OPEN'	=> 'Je kunt maar 1 wijzigingsbox open hebben',
	'EDIT'	=> 'wijzig',
	'CANCEL'	=> 'annuleer',
	'SENDING_EDIT'	=> 'Verstuurd wijzigingen rapport',
	'EDIT_DONE'	=> 'Bericht is gewijzigd',
	'SHOUTBOX'	=> 'Shoutbox',
	'SERVER_ERR'	=> 'Oeps, er ging iets mis in de communicatie met de server.',
	// No permission errors
	'NO_SMILIE_PERM'	=> 'Je mag geen smilies plaatsen',
	'NO_DELETE_PERM'	=> 'Je mag geen berichten verwijderen',
	'NO_POST_PERM'	=> 'Je mag geen berichten plaatsen',
	'NO_EDIT_PERM'	=> 'Je kunt dit bericht niet wijzigen',
	'NO_VIEW_PERM'	=> 'Je hebt niet voldoende rechten om de shoutbox te bekijken',
	'NO_ADMIN_PERM'	=> 'Geen administratieve permissies gevonden',
	// Installation
	'MOD_INSTALLED'	=> 'De MOD is geinstalleerd',
	'MOD_UPGRADED'	=> 'De MOD is geupgrade',
	'MOD_UPDATED'	=> 'De MOD is geupdate',
	'NO_FOUNDER'	=> 'Alleen oprichters kunnen dit beheren',
	'ONLY_UPGRADE'	=> 'Dit bestand is alleen bedoeld voor upgrades van versie 1.x',
	'ONLY_INSTALL'	=> 'Dit bestand is bedoeld voor nieuwe installaties',
	'ONLY_UPDATE'	=> 'Dit bestand is bedoeld voor updates',
	'ALREADY_UPTODATE'	=> 'De database is al up to date',
));

?>