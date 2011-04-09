<?php
/** 
*
* @name acp_portal_xl_quotes.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_quotes.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
	'TITLE' 					=> 'Zitate Verwaltung',
	'TITLE_EXPLAIN'				=> 'Hier kannst du Zitate erstellen/bearbeiten/l&ouml;schen. Du kannst soviele hinzuf&uuml;gen wie du willst in diesem block, aber bei der Zuf&auml;lligen Anzeige ist ein Limit von 1 quote Set.',
 
	'PORTAL_QUOTES_EDIT_HEADER'	=> 'Hinzuf&uuml;gen oder Bearbeiten eines Zitates',
	'ACP_MANAGE_QUOTE'			=> 'Hinzuf&uuml;gen oder Bearbeiten eines Zitates',
	'ACP_QUOTE_EXPLAIN'			=> 'Zitate Verwaltung',
	'ADD_QUOTE'					=> 'Zitat hinzuf&uuml;gen',
	'AUTHOR'					=> 'Verfasser',
	'AUTHOR_INFO'				=> 'Verfasser',
	'AUTHOR_EXPLAIN'			=> 'Name des Original Verfassers, schreibe unbekannt wenn du es nicht wei&szlig;t.',
	'DISABLE'					=> '<b>Block aktiviert</b>',
	'DISABLE_BLOCK'				=> 'Aktivieren',
	'ENABLE'					=> '<b>Block deaktiviert</b>',
	'ENABLE_BLOCK'				=> 'Deaktivieren',
	'MUST_SELECT_QUOTE'			=> 'W&auml;hle ein Zitat',
	'QUOTE'						=> 'Zitate in Datenbank',
	'QUOTE_INFO'				=> 'Zitat Info',
	'QUOTE_EXPLAIN'				=> 'Der Text deines Zitates geht hier hinein',
	'QUOTE_ADDED'				=> 'Zitat erfolgreich hinzugef&uuml;gt',
	'QUOTE_DISABLE'				=> '<b>Aktivieren</b>',
	'QUOTE_DISABLE_EXPLAIN'		=> '<b>Aktivieren :</b><br>Block Anzeige in den Foren.',
	'QUOTE_DISABLE_EXPLAIN2'	=> 'Du kannst die Block Anzeige im Forum Deaktivieren und Aktivieren : ',
	'QUOTE_REMOVED'				=> 'Zitat erfolgreich gel&ouml;scht',
	'QUOTE_UPDATED'				=> 'Zitat erfolgreich bearbeitet',
	'RESET_QUOTE' 				=> 'Zur&uuml;cksetzen',

));

?>