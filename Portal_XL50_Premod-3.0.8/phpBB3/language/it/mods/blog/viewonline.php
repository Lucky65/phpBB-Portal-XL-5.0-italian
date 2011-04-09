<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: common.php 375 2008-04-22 16:43:42Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/13
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
	'ADDING_BLOG_ENTRY'		=> 'Sta inviando una nuova voce blog',
	'ADDING_BLOG_REPLY'		=> 'Sta commentando una voce blog',

	'VIEWING_BLOGS'			=> 'Sta guardando i blogs',
	'VIEWING_BLOG_ENTRY'	=> 'Sta guardando voci dei blogs',
	'VIEWING_USERS_BLOG'	=> 'Sta guardando il blog di %s',
));

?>