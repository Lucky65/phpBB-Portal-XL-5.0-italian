<?php
/*
*
* @name gallery_vertical.php
* @package phpBB3 Portal XL Premod
* @version $Id: gallery_vertical.php,v 1.21 2008/11/27 13:29:21 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/
$gallery_root_path = GALLERY_ROOT_PATH;
$include_pgalleries = false;

global $auth, $cache, $config, $db, $gallery_config, $portal_config, $template, $user;
global $location, $location_url, $album_data, $gallery_root_path, $phpbb_root_path, $phpEx, $album_access_array;

/**
* Get general album information
*/
if (!function_exists('load_gallery_config'))
{
	$recent_image_addon = true;
	include($phpbb_root_path . $gallery_root_path . 'includes/common.' . $phpEx);
	include($phpbb_root_path . $gallery_root_path . 'includes/permissions.' . $phpEx);
}

if (!isset($album_data))
{
	$user->add_lang('mods/gallery');
	$album_access_array = get_album_access_array();
	$albums = $cache->obtain_album_list();
}

if (!function_exists('generate_text_for_display'))
{
	include($phpbb_root_path . 'includes/message_parser.' . $phpEx);
}

/**
* Vertical limit set to given column value in album config
*/
include($phpbb_root_path . $gallery_root_path . 'includes/functions_recent.' . $phpEx);
$ints = array(
	'rows'		=> 2,
	'columns'	=> 1,
	'comments'	=> 0,
	'contests'	=> $gallery_config['rrc_gindex_contests'],
);
/**
* int		array	including all relevent numbers for rows, columns and stuff like that,
* display	int		sum of the options which should be displayed, see gallery/includes/constants.php "// Display-options for RRC-Feature" for values
* modes		int		sum of the modes which should be displayed, see gallery/includes/constants.php "// Mode-options for RRC-Feature" for values
* collapse	bool	collapse comments
* include_pgalleries	bool	include personal albums
* mode_id	string	'user' or 'album' to only display images of a certain user or album
* id		int		user_id for user profile or album_id for view of recent and random images
*/
if ($gallery_config['rrc_gindex_mode'])
{
	recent_gallery_images($ints, $gallery_config['rrc_gindex_display'], $gallery_config['rrc_gindex_mode'], $gallery_config['rrc_gindex_comments'], $gallery_config['rrc_gindex_pgalleries']);
}

// Set some stats, get posts count from forums data if we... hum... retrieve all forums data
$total_images	= $config['num_images'];
$total_comments	= $gallery_config['num_comments'];
$total_pgalleries	= $gallery_config['personal_counter'];
$l_total_image_s = ($total_images == 0) ? 'TOTAL_IMAGES_ZERO' : 'TOTAL_IMAGES_OTHER';
$l_total_comment_s = ($total_comments == 0) ? 'TOTAL_COMMENTS_ZERO' : 'TOTAL_COMMENTS_OTHER';
$l_total_pgallery_s = ($total_pgalleries == 0) ? 'TOTAL_PGALLERIES_ZERO' : 'TOTAL_PGALLERIES_OTHER';

$template->assign_vars(array(
	'TOTAL_IMAGES'			=> ($gallery_config['disp_statistic']) ? sprintf($user->lang[$l_total_image_s], $total_images) : '',
	'TOTAL_COMMENTS'		=> sprintf($user->lang[$l_total_comment_s], $total_comments),
	'TOTAL_PGALLERIES'		=> (gallery_acl_check('a_list', PERSONAL_GALLERY_PERMISSIONS)) ? sprintf($user->lang[$l_total_pgallery_s], $total_pgalleries) : '',
	'NEWEST_PGALLERIES'		=> ($total_pgalleries) ? sprintf($user->lang['NEWEST_PGALLERY'], get_username_string('full', $gallery_config['newest_pgallery_user_id'], $gallery_config['newest_pgallery_username'], $gallery_config['newest_pgallery_user_colour'], '', append_sid("{$phpbb_root_path}{$gallery_root_path}album.$phpEx", 'album_id=' . $gallery_config['newest_pgallery_album_id']))) : '',
	
	'U_GALLERY_MOD'			=> append_sid("{$phpbb_root_path}{$gallery_root_path}index.$phpEx"),
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/gallery_vertical.html',
	));

?>