<?php
/**
*
* ucp info_ucp_arcade[Italian]
*
* @package language
* @version $Id: info_ucp_arcade.php 629 2008-12-07 19:18:39Z JRSweets $
* @copyright (c) 2008 JeffRusso.net
* @copyright (c) 2009, 2010 luckylab.eu - revision for portal xl on 2010/01/15
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
	'ARCADE_DELETE_FAVORITE'			=> 'Elimina gioco preferito',
	'ARCADE_DELETE_FAVORITES'			=> 'Elimina giochi preferiti',
	'ARCADE_DELETE_FAVORITES_CONFIRM'	=> 'Sei sicuro di voler eliminare questi giochi preferiti?',
	'ARCADE_DELETE_FAVORITE_CONFIRM'	=> 'Sei sicuro di voler eliminare questo gioco preferito?',
	'ARCADE_FAVORITES_DELETED'			=> 'Giochi preferiti eliminati con successo.',
	'ARCADE_FAVORITE_DELETED'			=> 'Gioco preferito eliminato con successo.',
	'ARCADE_OVERRIDE_USER_SORT_UCP'		=> 'Le seguenti impostazioni predefinite sono attualmente sovrascritte dall’amministratore del forum.',

	'UCP_ARCADE'						=> 'Sala giochi',
	'UCP_ARCADE_FAVORITES'				=> 'Gestisci i preferiti',
	'UCP_ARCADE_FAVORITES_EXPLAIN'		=> 'Puoi vedere o eliminare i tuoi giochi preferiti.',
	'UCP_ARCADE_SETTINGS'				=> 'Impostazioni',
	'UCP_ARCADE_SETTINGS_EXPLAIN'		=> 'Il controllo di queste impostazioni varia a seconda delle funzioni della sala giochi.',
));

?>