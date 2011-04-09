<?php
/**
*
* acp [German]
* translation by purzl-->Portal XL Germany http://www.portalxl.cwsurf.de
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
	'ACP_PM_SPY'			=> 'Priv. Nachrichten &uuml;berwachen',
	'AUTHOR_IP'				=> 'Autor IP',
	'DATE'					=> 'Datum',
	'DELETE_PMS'			=> 'L&ouml;sche PM’s',
	'NO_PM_SELECTED'		=> 'Keine PM’s ausgew&&auml;uml;hlt',
	'PM_BOX'				=> 'PM box',
	'PM_SPY_READ'			=> 'Nachrichten Liste',
	'PM_SPY_READ_EXPLAIN'	=> 'Hier ist eine Liste aller privaten Nachrichten des Forums.',
	'TO'					=> 'An',
	'TOTAL_USERS'			=> 'Total users',
	'PM_COUNT'				=> 'Anzahl Nachrichten',

	'INSTALL_NOT_DELETED'	=> 'Achtung! Das Installationsfile ist noch nicht gel&ouml;scht!',

	'PM_HOLDBOX'			=> 'Postausgang',	
	'PM_INBOX'				=> 'Posteingang',
	'PM_NOBOX'				=> 'Entw&uuml;rfe',
	'PM_OUTBOX'				=> 'Ausgang',
	'PM_SAVED'				=> 'gespeicherte PM´s',
	'PM_SENTBOX'			=> 'gesendete PM´s',

	'SORT_FROM'				=> 'Von',
	'SORT_TO'				=> 'An',
	'SORT_BCC'				=> 'BCC',
	'SORT_PM_BOX'			=> 'PM box',
	
	'LOG_PM_SPY'			=> '<strong>Nachrichten gel&ouml;scht von PM Spy</strong><br />',
));

// Install
$lang = array_merge($lang, array(
	'NO_FOUNDER'				=> 'Sie sind nicht berechtigt PM Spy zu installieren Sie <strong>m&uuml;ssen</strong> &uuml;ber ausreichend Rechte verf&uuml;gen!.',
	'INSTALL_PM_SPY'			=> 'Installiere PM Spy Mod',
	'COMPLETE'					=> 'Installation komplett! ...',
));

?>