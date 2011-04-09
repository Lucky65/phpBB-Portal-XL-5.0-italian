<?php
/*
*
* @name announcement_centre.php
* @package phpBB3 Portal XL 5.0
* @version $Id: announcement_centre.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
if (!function_exists('get_announcement_data'))
{
	include_once($phpbb_root_path . 'includes/functions_announcements.' . $phpEx);
}
get_announcement_data();


// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/announcement_centre.html',
	));

?>