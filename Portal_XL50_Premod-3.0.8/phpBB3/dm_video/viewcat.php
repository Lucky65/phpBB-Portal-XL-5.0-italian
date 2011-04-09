<?php
/**
*
* @package DM Video
* @version $Id: viewcat.php 211 2009-12-18 10:23:29Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/message_parser.' . $phpEx);

// Some mod related variables and includes
$dm_video_path = (defined('DM_VIDEO_ROOT_PATH')) ? DM_VIDEO_ROOT_PATH : 'dm_video/';
include($phpbb_root_path . $dm_video_path . 'common.' . $phpEx);

// Do the session handling
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/dm_video');

// Set some variables
$cat_id = request_var('c', 0);
$start	= request_var('start', 0);

// Main template variables for the navigation
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['DMV_VIDEO'],
	'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
));

// We need some information about the cat, we are in
$cat_data = get_cat_info($cat_id);

// Generate the navigation
generate_cat_nav($cat_data);

// Generate the sub categories list
generate_cat_list($cat_id);

// Generate the video list
generate_video_list($cat_id);

// Send variables to the template
$template->assign_vars(array(
	'VIDEO_CAT'			=> false,
	'VIDEO_CAT_ID'		=> (int) $cat_data['cat_id'],
	'CAT_NAME'			=> (string) $cat_data['cat_name'],
	'CAT_DESC'			=> generate_text_for_display($cat_data['cat_desc'], $cat_data['cat_desc_uid'], $cat_data['cat_desc_bitfield'], $cat_data['cat_desc_options']),
	'U_VIDEO_CAT'		=> append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "c=" . (int) $cat_data['cat_id']),
	'U_POST_NEW_VIDEO'	=> append_sid("{$phpbb_root_path}{$dm_video_path}postvideo.$phpEx", "mode=new&amp;c=" . (int) $cat_data['cat_id']),
));

// Copyright notice
$template->assign_vars(array(
	'DMV_COPY_NOTE'	=> sprintf($user->lang['DMV_COPY_NOTE'], (string) $dmv_config['copyright_email'], (string) $dmv_config['copyright_show']),
));

// Header information
page_header($user->lang['DMV_VIDEO'] . ' &bull; ' . censor_text($cat_data['cat_name']));

// Template file to use
$template->set_filenames(array(
	'body' => $dm_video_path . 'viewcat_body.html'
));

// Footer information
page_footer();

?>