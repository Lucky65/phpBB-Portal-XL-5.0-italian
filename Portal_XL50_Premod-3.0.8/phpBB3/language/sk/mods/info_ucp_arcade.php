<?php
/**
*
* ucp info_ucp_arcade [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'ARCADE_DELETE_FAVORITE'			=> 'Zmazať obľúbenú hru',
	'ARCADE_DELETE_FAVORITES'			=> 'Zmazať obľúbené hry',
	'ARCADE_DELETE_FAVORITES_CONFIRM'	=> 'Naozaj mám zmazať tieto obľúbené hry?',
	'ARCADE_DELETE_FAVORITE_CONFIRM'	=> 'Naozaj mám zmazať túto obľúbenú hru?',
	'ARCADE_FAVORITES_DELETED'			=> 'Obľúbená hra bola úspešne vymazaná.',
	'ARCADE_FAVORITE_DELETED'			=> 'Obľúbené hry boli úspešne vymazané.',
	'ARCADE_OVERRIDE_USER_SORT_UCP'		=> 'Aktuálne nastavenie triedenia je predvolené z panela administrátora.',

	'UCP_ARCADE'						=> 'Arkáda v phpBB',
	'UCP_ARCADE_FAVORITES'				=> 'Správa obľúbených',
	'UCP_ARCADE_FAVORITES_EXPLAIN'		=> 'Môžete si prezrieť alebo odstrániť svoje obľúbené hry.',
	'UCP_ARCADE_SETTINGS'				=> 'Nastavenie správ',
	'UCP_ARCADE_SETTINGS_EXPLAIN'		=> 'Nastavenia rôznych aspektov arkády.',
));

?>
