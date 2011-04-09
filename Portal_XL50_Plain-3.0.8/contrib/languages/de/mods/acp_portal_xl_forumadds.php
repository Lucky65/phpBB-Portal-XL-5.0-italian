<?php
/** 
*
* @name acp_portal_xl_forumadds.php [Deutsch — Du]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_forumadds.php,v 1.1.1.1 2009/05/15 04:02:15 damysterious Exp $
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
	'TITLE' 				=> 'Forum Reklame Verwaltung',
	'TITLE_EXPLAIN'			=> 'The Forum Reklame kann hier verwaltet werden. Du kannst so viele hinzuf&uuml;gen wie du willst. Alle werden zuf&auml;llig angezeigt.',

	'NEED_VALUES'  			=> 'Du musst <strong>alle</strong> Felder ausf&uuml;llen um Reklame hinzuf&uuml;gen zu k&ouml;nnen.',
	'ADDED'  				=> 'Die Reklame wurde zur Datenbank hizugef&uuml;gt!',
	'UPDATED'  				=> 'Die Reklame wurde aktualisiert.',
	'DELETED' 	 			=> 'Die Reklame wurde erfolgreich aus der Datenbank gel&ouml;scht!',
	'REALY_DELETE'  		=> 'Wilst du die Reklame wirklich l&ouml;schen?',
	'MUST_SELECT_ADDS'		=> 'Gew&auml;hlt wurde',
	
	'ADDS'  				=> 'Reklame',
	'NEW_AD' 				=> 'F&uuml;ge Reklame hinzu',
	'ADDS_NAME' 			=> 'Name',
	'ADDS_NAME_DESC' 		=> 'Name der Reklame.',
	'ADDS_CODE' 			=> 'Hinzugef&uuml;gte Beschreibung',
	'ADDS_CODE_DESC' 		=> 'Beschreibung zur Reklame hier',
	'ADDS_FORUMS' 			=> 'Foren',
	'ADDS_FORUMS_DESC' 		=> 'Gib die Foren ID des Forums oder der Foren in denen Reklame angezeigt werden soll, einzelne Foren werden mittel Komma getrennt z. Bsp. 2,3,5 .',
	'ADDS_FORUMS_DESCALL' 	=> 'In allen Foren anzeigen?',
	'ADDS_ACTIVE' 			=> 'aktiv',
	'ADDS_ACTIVE_DESC' 		=> 'Reklame zeigen? ',
	'YES' 					=> 'Ja',
	'NO' 					=> 'Nein',
	'GUEST' 				=> 'Gast',
	'ADDS_VIEWS' 			=> 'Reklame angesehen',
	'ADDS_ALL' 				=> 'Alle Foren',
	'ADDS_SHOW' 			=> 'In Foren',
	'ADDS_VIEWS_DESC' 		=> 'Wie oft die Reklame gesehen wurde.',
	'ADDS_MAX_VIEWS' 		=> 'Max angesehen',
	'ADDS_MAX_VIEWS_DESC' 	=> 'Die meisten Betrachtungen f&uuml;r diese Reklame',         
	'POSITION' 				=> 'Position',
	'POSITION_DESC' 		=> 'Von welcher Position soll die Reklame angezeigt werden? ',
	'POSITION1' 			=> 'Nach dem ersten Beitrag',
	'POSITION2' 			=> 'Nach jedem Beitrag',
	'POSITION3' 			=> '&Uuml;ber dem Beitrag',
	'POSITION4' 			=> 'Unter dem Beitrag',
	'ADDS_IN_SYSTEM' 		=> 'Reklame in der Datenbank',
	'ADDS_IN_SYSTEM_DESC' 	=> 'Eine Auflistung der bereits in der Dankenbank vorhandenen Reklame',
	'SHOW_IN_ALL_FORUMS' 	=> 'In allen Foren anzeigen?',
	'ADD_ADVERTISEMENT'		=> 'F&uuml;gt Reklame hinzu',		
	'RESET_ADDS'			=> 'Zur&uuml;cksetzen',		
	'ADD_ADDS'				=> 'Reklame hinzuf&uuml;gen',		

	));

?>