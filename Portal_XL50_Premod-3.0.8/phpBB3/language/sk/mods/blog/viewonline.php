<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: common.php 375 2008-04-22 16:43:42Z exreaction@gmail.com $
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
	'ADDING_BLOG_ENTRY'		=> 'Odoslané Nové Zadania do blogu',
	'ADDING_BLOG_REPLY'		=> 'Komentáre a Zadania v Blogu',

	'VIEWING_BLOGS'			=> 'Prezerá Blogy',
	'VIEWING_BLOG_ENTRY'	=> 'Zobrazené Zadania Blogu',
	'VIEWING_USERS_BLOG'	=> 'Prezerá Blog %s',
));

?>