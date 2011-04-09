<?php
/**
*
* @package phpBB3 User Blog Friends
* @version $Id: friends.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $ 
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* German translation Version 1.0.7 by FatFreddy (http://www.mebitco.de) 
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
	'BLOG_FRIENDS_DESCRIPTION'	=> 'F&uuml;gt den User Blogs eine Freundesliste hinzu',
	'BLOG_FRIENDS_TITLE'		=> 'Freunde',

	'FRIENDS'					=> 'Freunde',
	'FRIENDS_OFFLINE'			=> 'Freunde Offline',
	'FRIENDS_ONLINE'			=> 'Freunde Online',

	'NO_FRIENDS_OFFLINE'		=> 'Keine Freunde Offline',
	'NO_FRIENDS_ONLINE'			=> 'Keine Freunde Online',
));

?>