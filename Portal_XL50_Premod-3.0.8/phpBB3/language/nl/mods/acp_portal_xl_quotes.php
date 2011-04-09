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
	'TITLE' 					=> 'Citaat beheer',
	'TITLE_EXPLAIN'				=> 'Van dit formulier kunt maken / wijzigen / verwijderen Quotes. U kunt zo veel citaten zoals u graag laten zien in dit blok, maar er is een limiet voor willekeurige weergave van 1 citaat set.',
 
	'PORTAL_QUOTES_EDIT_HEADER'	=> 'Citaat toevoegen of wijzigen',
	'ACP_MANAGE_QUOTE'			=> 'Tevoegen of wijzigen van citaten',
	'ACP_QUOTE_EXPLAIN'			=> 'Citaat beheer',
	'ADD_QUOTE'					=> 'Voeg citaat toe',
	'AUTHOR'					=> 'Auteur',
	'AUTHOR_INFO'				=> 'Auteur',
	'AUTHOR_EXPLAIN'			=> 'Naam van de originele bedenker, zet onbekend neer als je het niet weet.',
	'DISABLE'					=> '<b>Blok enabled</b>',
	'DISABLE_BLOCK'				=> 'Enable',
	'ENABLE'					=> '<b>Blok disabled</b>',
	'ENABLE_BLOCK'				=> 'Disable',
	'MUST_SELECT_QUOTE'			=> 'Geselecteerde citaat',
	'QUOTE'						=> 'Citatenin de database',
	'QUOTE_INFO'				=> 'Citaat',
	'QUOTE_EXPLAIN'				=> 'Tekst van je citaat komt hier',
	'QUOTE_ADDED'				=> 'Citaat succesvol toegevoegd',
	'QUOTE_DISABLE'				=> '<b>Enable</b>',
	'QUOTE_DISABLE_EXPLAIN'		=> '<b>Enable :</b><br>Blok zichtbaar op het forum.',
	'QUOTE_DISABLE_EXPLAIN2'	=> 'Je kunt het blok zichtbaar of onzichtbaar maken op het forum : ',
	'QUOTE_REMOVED'				=> 'Citaat succesvol verwijderd',
	'QUOTE_UPDATED'				=> 'Citaat succesvol gewijzigd',
	'RESET_QUOTE' 				=> 'Reset',

));

?>