<?php
/**
*
* viewforum [Slovak]
*
* @package language
* @version $Id: viewforum.php,v 1.18 2007/10/15 00:00:00 phpbb3.sk Exp $
* @copyright (c) 2007 phpBB Group
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
	'ACTIVE_TOPICS'			=> 'Obľúbené témy',
	'ANNOUNCEMENTS'			=> 'Oznámenia',

	'FORUM_PERMISSIONS'		=> 'Oprávnenia fóra',

	'ICON_ANNOUNCEMENT'		=> 'Oznámenie',
	'ICON_STICKY'			=> 'Dôležité',

	'LOGIN_NOTIFY_FORUM'	=> 'Pre zobrazenie tohto fóra musíte byť prihlásený.',

	'MARK_TOPICS_READ'		=> 'Označiť témy ako prečítané',

	'NEW_POSTS_HOT'			=> 'Nové príspevky [ Obľúbené ]',   // nepoužíva
	'NEW_POSTS_LOCKED'		=> 'Nové príspevky [ Zamknuté ]',   // nepoužíva
	'NO_NEW_POSTS_HOT'		=> 'Žiadne nové príspevky [ Obľúbené ]',   // nepoužíva
	'NO_NEW_POSTS_LOCKED'	=> 'Žiadne nové príspevky [ Zamknuté ]',   // nepoužíva
	'NO_READ_ACCESS'		=> 'Nemáte oprávnenia pre zobrazenie tém v tomto fóre.',
	'NO_UNREAD_POSTS_HOT'		=> 'Neprečítané príspevky [ Obľúbené ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Neprečítané príspevky [ Zamknuté ]',

	'POST_FORUM_LOCKED'		=> 'Fórum je zamknuté',

	'TOPICS_MARKED'			=> 'Všetky témy v tomto fóre boli označené ako prečítané.',

	'UNREAD_POSTS_HOT'		=> 'Prečítané príspevky [ Obľúbené ]',
	'UNREAD_POSTS_LOCKED'	=> 'Prečítané príspevky [ Zamknuté ]',

	'VIEW_FORUM'			=> 'Zobraziť fórum',
	'VIEW_FORUM_TOPIC'		=> '1 téma',
	'VIEW_FORUM_TOPICS'		=> '%d tém',
));

$lang = array_merge($lang, array(
    'GLOBAL_ANNOUNCEMENTS'  => 'Globálne Oznámenia',
	'STICKY'                => 'Dôležité',
));

?>