<?php
/** 
*
* @name acp_portal_xl_newsfeeds.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_newsfeeds.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
	'TITLE' 					=> 'Beheer RSS Feed Database',
	'TITLE_EXPLAIN'				=> 'Hier kun je de RSS feed database beheren, creeer/wijzig/delete feed om te laten zien op de portal.',
 
	'PORTAL_FEED_EDIT_HEADER'	=> 'Toevoegen of wijzigen van een feed',
	'ACP_MANAGE_FEED'			=> 'Voeg toe of wijzig feed',
	'ACP_FEED_EXPLAIN'			=> 'Feed\'s beheer',
	'ADD_FEED'					=> 'Voeg feed toe',
	'DISABLE'					=> '<b>Blok enabled</b>',
	'DISABLE_BLOCK'				=> 'Enable',
	'ENABLE'					=> '<b>Blok disabled</b>',
	'ENABLE_BLOCK'				=> 'Disable',
	'MUST_SELECT_FEED'			=> 'Geselecteerde feed',
	'FEED'						=> 'Feed\'s in de database',
	'VISIT_FEED'				=> 'Abonneer op feed',
	'FEED_INFO'					=> 'Feed',
	'FEED_EXPLAIN'				=> 'Tekst van de feed plaats je hier',
	'FEED_ADDED'				=> 'Feed succesvol toegevoegd',
	'FEED_REMOVED'				=> 'Feed succesvol gewijzigd',
	'FEED_UPDATED'				=> 'Feed succesvol geupdate',
	'RESET_FEED' 				=> 'Reset',
	'FEED_EDIT'					=> 'Wijzig Feed\'s',
	'FEED_EDIT_EXPLAIN'			=> 'Hier kun je een nieuwe feed aanmaken of een feed wijzigen. Titel en versie nummer zijn verplicht. U zult ook in staat om details van de plaats waar de feed kan gedownload worden van en waar de feed zelf kunt u vinden.',
	'FEED_TITLE'				=> 'Feed Titel',
	'FEED_TITLE_EXPLAIN'		=> 'Kleine pakkende titel voor de feed.',
	'FEED_SHOW'					=> 'Laten zien Ja/Nee?',
	'FEED_URL'					=> 'Feed URL',
	'FEED_URL_EXPLAIN'			=> 'Specificeer url voor deze feed (link naar feed  -omschrijving of -onderwerp).',
	'FEED_POSITIONS'			=> 'Positie',
	'FEED_POSITION'				=> 'Laat deze feed zien op welke positie?',
	'FEED_POSITION_EXPLAIN'		=> 'Specificeer op welke kant van het RSS blok deze feed zal veschijnen.',
	'LEFT'						=> 'Links',
	'RIGHT'						=> 'Rechts',
	'NOT_SET'					=> 'Niet gezet',
	'FEED_CACHE_TIME'			=> 'Cache tijd',
	'FEED_CACHE_TIME_EXPLAIN'	=> 'Maximale leeftijd van het cache-bestand voor een feed voordat deze wordt bijgewerkt in seconden (standaard is 1 uur = 60 minuten = 3600 seconden.',
	'CACHE_TIME'				=> 'seconden',
	'FEED_ITEMS_LIMIT'			=> 'Items limiet',
	'FEED_ITEMS_LIMIT_EXPLAIN'	=> 'Maximale aantal items/rijen om te laten zien in een enkele feed.',
	'ITEMS_LIMIT'				=> 'rijen',
	'FEED_RANDOM_LIMIT'			=> 'Random limiet',
	'FEED_RANDOM_LIMIT_EXPLAIN'	=> 'Maximale feeds in het random blok.',
	'RANDOM_LIMIT'				=> 'feeds',
	'BLOCK_FEED_SETTINGS'		=> 'Algemene feed instellingen',

));

?>