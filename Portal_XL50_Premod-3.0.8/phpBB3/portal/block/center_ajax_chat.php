<?php
/**
*
* @name center_ajax_chat.php
* @package phpBB3 Portal XL 5.0
* @version $Id: center_ajax_chat.php,v 1.0 2009/11/12 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/

/*
* Start session management
*/
$user->setup(array('mods/portal_xl'));

/*
* Begin block script here
*/
getShoutBoxContent();

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/center_ajax_chat.html',
	));

?>