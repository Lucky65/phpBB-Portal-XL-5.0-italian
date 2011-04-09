<?php
/** 
*
* @name acp_portal_xl_forumadds.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_forumadds.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
	'TITLE' 				=> 'Forum Advertenties beheer',
	'TITLE_EXPLAIN'			=> 'Forum advertenties worden vanuit hier beheerd. Je kunt zoveel advertenties toevoegen als je wilt en die je wilt laten zien in de viewtopic, ze worden random getoont.',
	'NEED_VALUES'  			=> 'Je moet <strong>alle</strong> velden invullen voor de advertentie.',
	'ADDED'  				=> 'De advertentie is toegevoegd aan de database!',
	'UPDATED'  				=> 'De advertentie is geupdate.',
	'DELETED' 	 			=> 'De advertentie is succesvol verwijdert uit de database!',
	'REALY_DELETE'  		=> 'Weet je zeker dat je de advertentie wilt verwijderen?',
	'MUST_SELECT_ADDS'		=> 'Selecteer advertenties',
	
	'ADDS'  				=> 'Advertentie',
	'NEW_AD' 				=> 'Voeg advertentie toe',
	'ADDS_NAME' 			=> 'Naam',
	'ADDS_NAME_DESC' 		=> 'Naam van de advertentie.',
	'ADDS_CODE' 			=> 'Inhoud van de advertentie',
	'ADDS_CODE_DESC' 		=> 'Inhoud voor het gebruik van de advertentie',
	'ADDS_FORUMS' 			=> 'Forums',
	'ADDS_FORUMS_DESC' 		=> 'Vul het forum ID in waar de advertentie wordt getoond. Meerdere forums scheiden door een komma.',
	'ADDS_FORUMS_DESCALL' 	=> 'In alle forums laten zien?',
	'ADDS_ACTIVE' 			=> 'Actief',
	'ADDS_ACTIVE_DESC' 		=> 'Advertentie laten zien? ',
	'YES' 					=> 'Ja',
	'NO' 					=> 'Nee',
	'GUEST' 				=> 'Gast',
	'ADDS_VIEWS' 			=> 'Aantal keer bekeken',
	'ADDS_ALL' 				=> 'Alle forums',
	'ADDS_SHOW' 			=> 'In forums',
	'ADDS_VIEWS_DESC' 		=> 'Aantal keer dat de advertentie bekeken is',
	'ADDS_MAX_VIEWS' 		=> 'Maximaal aantal keer te bekijken',
	'ADDS_MAX_VIEWS_DESC' 	=> 'Maximaal aantal keer te bekijken',         
	'POSITION' 				=> 'Positie',
	'POSITION_DESC' 		=> 'Vanwaar moet de advertentie getoond worden? ',
	'POSITION1' 			=> 'Na de eerste post',
	'POSITION2' 			=> 'Na elke reactie',
	'POSITION3' 			=> 'Boven de posts',
	'POSITION4' 			=> 'Onder de posts',
	'ADDS_IN_SYSTEM' 		=> 'Advertenties in de database',
	'ADDS_IN_SYSTEM_DESC' 	=> 'De lijst vcan advertenties die al in de database zitten',
	'SHOW_IN_ALL_FORUMS' 	=> 'In alle forums laten zien?',
	'ADD_ADVERTISEMENT'		=> 'Voeg een advertentie toe',		
	'RESET_ADDS'			=> 'Reset',		
	'ADD_ADDS'				=> 'Advertentie toevoegen',		

	));

?>