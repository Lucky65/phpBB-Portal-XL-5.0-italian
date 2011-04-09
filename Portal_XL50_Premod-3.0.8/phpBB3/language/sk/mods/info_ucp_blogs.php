<?php
/**
*
* @package phpBB3 User Blog  [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @version $Id: info_ucp_blogs.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
	'UCP_BLOG'						=> 'Blog',
	'UCP_BLOG_PERMISSIONS'			=> 'Oprávnenia Blogu',
	'UCP_BLOG_SETTINGS'				=> 'Nastavenia Blogu',
	'UCP_BLOG_TITLE_DESCRIPTION'	=> 'Názov a popis Blogu',
));

?>