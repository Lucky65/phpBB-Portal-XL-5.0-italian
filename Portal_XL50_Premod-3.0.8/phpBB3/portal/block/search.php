<?php
/*
*
* @name search.php
* @package phpBB3 Portal XL 5.0
* @version $Id: search.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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

/*
* Begin block script here
*/

// Assign specific vars
$template->assign_vars(array(
	'S_SEARCH_ACTION'	=> "{$phpbb_root_path}search.$phpEx",
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/search.html',
	));

?>