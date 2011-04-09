<?php
/** 
*
* @name acp_portal_xl_acronyms.php [Deutsch — Du]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_acronyms.php,v 1.1.1.1 2009/05/15 04:02:14 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL Group
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

$lang = array_merge($lang, array(
	'TITLE'	=> 'Akronym- und Abk&uuml;rzungsmanagement',
	'TITLE_EXPLAIN'	=> 'Hier kannst Du Akronyme erstellen/&auml;ndern/l&ouml;schen. Akronyme und Initialen sind Abk&uuml;rzungen, z.B. <strong>NATO</strong>, <strong>laser</strong>, und <strong>IBM</strong>, meist aus dem allgemeinen Sprachgebrauch. Diese Abk&uuml;rzungen werden meist dann verwendet, wenn man auf lange umschreibungen verzichten will (wie in <em><strong>IBM</strong></em>), oder als Wort (wie in <em><strong>NATO</strong></em>), oder als Kombination (as in <em><strong>IUPAC</strong></em>). Du kannst so viele Akronyme hinzuf&uuml;gen, wie Du willst.',
	'PORTAL_ACRONYMS_EDIT_HEADER'	=> 'Bearbeite oder f&uuml;ge ein Acronym hinzu',
	'ACP_MANAGE_ACRONYM'	=> 'Bearbeiten und hinzuf&uuml;gen von Acronymen',
	'ACP_ACRONYM_EXPLAIN'	=> 'Acronyme verwalten',
	'ADD_ACRONYM'	=> 'Acronym hinzuf&uuml;gen',
	'DESCRIPTION'	=> 'Acronym',
	'DESCRIPTION_INFO'	=> 'Acronym info',
	'DESCRIPTION_EXPLAIN'	=> 'info ist die ausgebene Inhalt zum Acronym.',
	'MUST_SELECT_ACRONYM'	=> 'gew&auml;hltes Acronym',
	'ACRONYM'	=> 'Acronyme in Datenbank',
	'ACRONYM_INFO'	=> 'Acronym',
	'ACRONYM_EXPLAIN'	=> 'Initialiserte Buchstaben von W&ouml;rtern oder Teile von W&ouml;rtern deines Acronym kommen hier rein',
	'ACRONYM_ADDED'	=> 'Acronym erfolgreich hinzugef&uuml;gt',
	'ACRONYM_DISABLE_EXPLAIN2'	=> 'Du kannst die Anzeige vom Block im Forum aktivieren und deaktivieren : ',
	'ACRONYM_REMOVED'	=> 'Acronym erfolgreich entfernt',
	'ACRONYM_UPDATED'	=> 'Acronym erfolgreich bearbeitet',
	'RESET_ACRONYM'	=> 'Zur&uuml;cksetzen',
	'BLOCK_ACRONYM_SETTINGS'	=> 'Allgemeine Acronym Einstellungen',
	'ACRONYM_ALLOW'	=> 'Acromyme boardweit aktiviert?',
	'ACRONYM_ACTIVE'	=> 'Erlaube Acronyme',
	'ACRONYM_ACTIVE_EXPLAIN'	=> 'Aktiviere Acronyme boardweit Ja/Nein?',
));

?>