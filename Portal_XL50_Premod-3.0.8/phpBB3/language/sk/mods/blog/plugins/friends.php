<?php
/**
*
* @package phpBB3 User Blog Friends
* @version $Id: friends.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'BLOG_FRIENDS_DESCRIPTION'	=> 'Pridá zoznam Priateľov do Uživateľských Blogov',
	'BLOG_FRIENDS_TITLE'		=> 'Priatelia',

	'FRIENDS'					=> 'Priatelia',
	'FRIENDS_OFFLINE'			=> 'Priatelia Offline',
	'FRIENDS_ONLINE'			=> 'Priatelia Online',

	'NO_FRIENDS_OFFLINE'		=> 'Nie sú žiadny Priatelia Offline',
	'NO_FRIENDS_ONLINE'			=> 'Nie sú žiadny Priatelia Online',
));

?>