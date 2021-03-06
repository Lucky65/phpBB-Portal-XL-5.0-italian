<?php
/**
*
* common [Italian]
*
* @package language
* @version $Id: common.php 9162 2008-12-03 11:18:31Z acydburn $
* @copyright (c) 2005 phpBB Group
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
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
          /* Controls */
					'TITLE' => 'Livestream Radio',
					'NO_CHOICE_MADE_YET' => 'Non hai selezionato nessuna stazione.',
					'LISTENING_TO' => 'Stai ascoltando',
					'NOW_PLAYING' => 'Stai ascoltando',
));
?>
