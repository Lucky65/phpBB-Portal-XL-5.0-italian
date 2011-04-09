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
	'TITLE' 					=> 'Manage RSS Feed\'s Datenbank',
	'TITLE_EXPLAIN'				=> 'Hier kannst du deine RSS Feed\'s Datenbank f&uuml;hren, erstelle/bearbeite/l&ouml;sche Feeds von hier die auf der portal\'s Seite angezeigt werden.',
 
	'PORTAL_FEED_EDIT_HEADER'	=> 'Hinzuf&uuml;gen oder Ver&auml;ndern einer MOD',
	'ACP_MANAGE_FEED'			=> 'Hinzuf&uuml;gen oder Ver&auml;ndern von MODs',
	'ACP_FEED_EXPLAIN'			=> 'Feed\'s Management',
	'ADD_FEED'					=> 'MOD hinzuf&uuml;gen',
	'DISABLE'					=> '<b>Block aktiviert</b>',
	'DISABLE_BLOCK'				=> 'Aktivieren',
	'ENABLE'					=> '<b>Block deaktiviert</b>',
	'ENABLE_BLOCK'				=> 'Deaktivieren',
	'MUST_SELECT_FEED'			=> 'MOD ausw&auml;hlen',
	'FEED'						=> 'Feed\'s in Datenbank',
	'VISIT_FEED'				=> 'Beschreibung zum feed',
	'FEED_INFO'					=> 'Feed',
	'FEED_EXPLAIN'				=> 'Text vom Feed kommt hier rein',
	'FEED_ADDED'				=> 'Feed erolgreich hinzugef&uuml;gt',
	'FEED_REMOVED'				=> 'Feed erfolgreich entfernt',
	'FEED_UPDATED'				=> 'Feed erfolgreich bearbeitet',
	'RESET_FEED' 				=> 'Zur&uuml;cksetzen',
	'FEED_EDIT'					=> 'Bearbeite Feed\'s',
	'FEED_EDIT_EXPLAIN'			=> 'Hier erstellte Feeds bearbeiten und neue hinzuf&uuml;gen. Du kannst bestimmen von wo die Feed runtergeladen werden k&ouml;nnen.',
	'FEED_TITLE'				=> 'Feed Titel',
	'FEED_TITLE_EXPLAIN'		=> 'Beschreibe kurz den Titel zum Feed.',
	'FEED_SHOW'					=> 'Anzeigen Ja/Nein?',
	'FEED_URL'					=> 'Feed URL',
	'FEED_URL_EXPLAIN'			=> 'Richte eine bestimmte Seiten URL f&uuml;r diesen Feed ein (Link zum Feed -Beschreibung -Thema).',
	'FEED_POSITIONS'			=> 'Position',
	'FEED_POSITION'				=> 'An welcher Position anzeigen?',
	'FEED_POSITION_EXPLAIN'		=> 'Bestimme auf welcher Seite der Link sein soll.',
	'LEFT'						=> 'links',
	'RIGHT'						=> 'rechts',
	'NOT_SET'					=> 'Nicht gesetzt',
	'FEED_CACHE_TIME'			=> 'Cache time',
	'FEED_CACHE_TIME_EXPLAIN'	=> 'Max Zeit bis der Cache aktualisiert wird, in Sekunden (Standard ist 1 Stunde = 60 Minuten = 3600 Sekunden).',
	'CACHE_TIME'				=> 'Sekunden',
	'FEED_ITEMS_LIMIT'			=> 'Anzeige Limit',
	'FEED_ITEMS_LIMIT_EXPLAIN'	=> 'Maximale Punkte / Zeilen die f&uuml;r einen einzigen Feed angezeigt werden.',
	'ITEMS_LIMIT'				=> 'Zeilen',
	'FEED_RANDOM_LIMIT'			=> 'zuf&auml;lliges Limit',
	'FEED_RANDOM_LIMIT_EXPLAIN'	=> 'Maximale Feeds mit Zufall im Block.',
	'RANDOM_LIMIT'				=> 'Feeds',
	'BLOCK_FEED_SETTINGS'		=> 'Allgemeine Feeds Einstellungen',

));

?>