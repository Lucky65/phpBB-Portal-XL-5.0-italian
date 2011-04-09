<?php
/*
*
* @name center_arcade_header.php
* @package phpBB3 Portal XL 5.0
* @version $Id: center_arcade_header.php,v 1.0 2009/11/14 damysterious Exp $
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
* Begin block script here
*/

/**
* Only include once
*/

/*
* Start session management
*/
if (file_exists($phpbb_root_path . 'includes/arcade/arcade_common.' . $phpEx))
{
	include($phpbb_root_path . 'includes/arcade/arcade_common.' . $phpEx);		
	// Initialize arcade auth
	$auth_arcade->acl($user->data);
	// Initialize arcade class
	$arcade = new arcade(false);

	display_arcade_header();
}

$template->assign_vars(array(
    'U_ARCADE' 		=> append_sid("{$phpbb_root_path}arcade.$phpEx"),
	'S_IN_ARCADE'	=> false
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/center_arcade_header.html',
	));

?>