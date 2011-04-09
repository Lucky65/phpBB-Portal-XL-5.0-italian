<?php
/**
*
* @package DM Video
* @version $Id: reportvideo.php 211 2009-12-18 10:23:29Z femu $
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
$video_id	= request_var('v', 0);
$cat_id 	= request_var('c', 0);

// Main template variables for the navigation
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['DMV_VIDEO'],
	'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
));

// Select the needed data to show the rating
$sql = 'UPDATE ' . DM_VIDEO_TABLE . '
	SET video_approval = "0", video_reported = "0"
	WHERE video_id = ' . (int) $video_id;
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);
$db->sql_freeresult($result);
add_log('user', (int) $user->data['user_id'], 'LOG_USER_VIDEO_REPORTED', str_replace('%', '*', (int) $video_id));

// Copyright notice
$template->assign_vars(array(
	'DMV_COPY_NOTE'		=> sprintf($user->lang['DMV_COPY_NOTE'], (string) $dmv_config['copyright_email'], (string) $dmv_config['copyright_show']),
));

// Send the variables to the template
$template->assign_vars(array(
	'REPORT_THANKS'	=> $user->lang['DMV_REPORTED_THANKS'],
	'U_BACK_CAT'	=> append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "c=" . (int) $cat_id),
	)
);
$db->sql_freeresult($result);

// Header information
page_header($user->lang['DMV_VIDEO'] . ' &bull; ' . censor_text($row['video_title']));

// Template file to use
$template->set_filenames(array(
   'body' => $dm_video_path . 'reported_body.html'
));

// Footer information
page_footer();

?>