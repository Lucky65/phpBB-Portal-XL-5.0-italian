<?php
/** 
*
* ucp info_ucp_arcade[English]
*
* @package language
* @version $Id: info_ucp_arcade.php 629 2008-12-07 19:18:39Z JRSweets $
* @copyright (c) 2008 JeffRusso.net
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

//Arcade
$lang = array_merge($lang, array(
	'ARCADE_DELETE_FAVORITE'				=> 'Bevorzugtes Spiel entfernen',
	'ARCADE_DELETE_FAVORITES'				=> 'Bevorzugte Spiele entfernen',
	'ARCADE_DELETE_FAVORITES_CONFIRM'		=> 'Sind Sie sich sicher, dass Sie diese bevorzugten Spiele entfernen m&ouml;chten?',
	'ARCADE_DELETE_FAVORITE_CONFIRM'		=> 'Sind Sie sich sicher, dass Sie dieses bevorzugte Spiel entfernen m&ouml;chten?',
	'ARCADE_FAVORITES_DELETED'				=> 'Bevorzugte Spiele erfolgreich entfernt.',
	'ARCADE_FAVORITE_DELETED'				=> 'Bevorzugtes Spiel erfolgreich entfernt.',
	'ARCADE_OVERRIDE_USER_SORT_UCP'			=> 'Die Standard-Sortiereinstellungen werden derzeit vom Administrator &uuml;berschrieben.',
	
	'UCP_ARCADE'							=> 'Spielhalle',
	'UCP_ARCADE_FAVORITES'					=> 'Favoriten verwalten',
	'UCP_ARCADE_FAVORITES_EXPLAIN'			=> 'Sie k&ouml;nnen Ihre Lieblingsspiele unten ansehen und entfernen.',
	'UCP_ARCADE_SETTINGS'					=> 'Einstellungen',
	'UCP_ARCADE_SETTINGS_EXPLAIN'			=> 'Diese Einstellungen kontrollieren verschiedene Bereiche der Spielhalle.',
));

?>