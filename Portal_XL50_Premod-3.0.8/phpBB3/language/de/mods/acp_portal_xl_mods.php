<?php
/** 
*
* @name acp_portal_xl_mods.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_mods.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
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
	'TITLE' 					=> 'Manage Mod\'s Datenbank',
	'TITLE_EXPLAIN'				=> 'Von diesem Formular aus k&ouml;nnen Sie Ihre Mod \'s Datenbank, erstellen / bearbeiten / l&ouml;schen.',
 
	'PORTAL_MOD_EDIT_HEADER'	=> 'Hinzuf&uuml;gen und Bearbeiten eines Mod',
	'ACP_MANAGE_MOD'			=> 'Hinzuf&uuml;gen und Bearbeiten eines Mod\'s',
	'ACP_MOD_EXPLAIN'			=> 'Mod\'s Management',
	'ADD_MOD'					=> 'Mod hinzuf&uuml;gen',
	'DISABLE'					=> '<b>Block aktiviert</b>',
	'DISABLE_BLOCK'				=> 'Aktivieren',
	'ENABLE'					=> '<b>Block deaktiviert</b>',
	'ENABLE_BLOCK'				=> 'Deaktivieren',
	'MUST_SELECT_MOD'			=> 'Mod ausgew&auml;hlt',
	'MOD'						=> 'Mod\'s in Datenbank',
	'MOD_INFO'					=> 'Mod',
	'MOD_EXPLAIN'				=> 'Der Text zu deinem Mod kommt hier rein',
	'MOD_ADDED'					=> 'Mod erfolgreich hinzugef&uuml;gt',
	'MOD_DISABLE'				=> '<b>Aktivieren</b>',
	'MOD_DISABLE_EXPLAIN'		=> '<b>Aktivieren :</b><br>Block Im Forum anzeigen.',
	'MOD_DISABLE_EXPLAIN2'		=> 'Du kannst die Anzeige aktivieren und deaktivieren : ',
	'MOD_REMOVED'				=> 'Mod erfolgreich entfernt',
	'MOD_UPDATED'				=> 'Mod erfolgreich bearbeitet',
	'RESET_MOD' 				=> 'Zur&uuml;cksetzen',
	'MOD_EDIT'					=> 'Bearbeite Mod\'s',
	'MOD_EDIT_EXPLAIN'			=> 'Hier kannst du einen existierenden Mod bearbeiten. Du kannst ebenfalls zus&auml;tzliche Details hinzuf&uuml;gen.',
	'MOD_TITLE'					=> 'Mod Titel',
	'MOD_TITLE_EXPLAIN'			=> 'Kurzer aber gut beschreibender Text zum Mod.',
	'MOD_VERSION'				=> 'Version',
	'MOD_VERSION_EXPLAIN'		=> 'Versions Nummer z.Bsp. 0.4B5',
	'MOD_VERSION_TYPE'			=> 'Versions Typ',
	'MOD_VERSION_TYPE_EXPLAIN'	=> 'Alpha, Beta, Dev oder RC*',
	'MOD_DESC'					=> 'Beschreibung',
	'MOD_DESC_EXPLAIN'			=> 'Die Beschreibung zu deinem Mod kommt hier rein. Eine klare Beschreibung kann meistens aus der Installationbeschreibung genommen werden.',
	'MOD_AUTHOR'				=> 'Verfasser',
	'MOD_AUTHOR_EXPLAIN'		=> 'Name des Original Verfassers, wenn unbekannt freilassen',
	'MOD_URL'					=> 'URL',
	'MOD_URL_EXPLAIN'			=> 'Bestimme eine Seiten URL f&uuml;r diese Modifikation (Link zum Mod -Beschreibung -Thema).',
	'MOD_DOWNLOAD'				=> 'Download',
	'MOD_DOWNLOAD_EXPLAIN'		=> 'Bestimme eine Download URL f&uuml;r diese Modifikation (direkt Link zum Download).',

));

?>