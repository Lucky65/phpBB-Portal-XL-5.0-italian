<?php
/**
*
* @package phpBB3 User Blog Friends
* @version $Id: friends.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
	'BLOG_FRIENDS_DESCRIPTION'	=> 'Aggiunge la lista amici nel blog utente',
	'BLOG_FRIENDS_TITLE'		=> 'Amici',

	'FRIENDS'					=> 'Amici',
	'FRIENDS_OFFLINE'			=> 'Amici offline',
	'FRIENDS_ONLINE'			=> 'Amici online',

	'NO_FRIENDS_OFFLINE'		=> 'Nessun amico offline',
	'NO_FRIENDS_ONLINE'			=> 'Nessun amico online',
));

?>