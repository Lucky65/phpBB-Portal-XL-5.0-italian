<?php
/**
*
* @package DM Video
* @version $Id: topten.php 211 2009-12-18 10:23:29Z femu $
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

// Check authorisation
$is_authorised = ($auth->acl_get('u_dm_video_view') || $auth->acl_get('a_dm_video_view')) ? true : false;

if (!$is_authorised)
{
	trigger_error('NOT_AUTHORISED');
}

// Set the variable show by hits or the rating
$mode = request_var('mode', '');

// Main template variables for the navigation
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['DMV_VIDEO'],
	'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
));

// Create Top XX Videos by hits and ratings
switch($mode)
{
	case 'hits':
		{
			set_top_10_hits();
			
			// The output of the page
			page_header($user->lang['DMV_VIDEO'] . ' &bull; ' . $user->lang['DMV_INDEX']);

			$template->set_filenames(array(
				'body' => $dm_video_path . 'topten_hits_body.html'
			));

			$template->assign_block_vars('navlinks', array(
				'FORUM_NAME'	=> sprintf($user->lang['DMV_HITS'], (string) $dmv_config['top_views']),
				'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}topten.$phpEx", "mode=hits"),
			));

			// Copyright notice
			$template->assign_vars(array(
				'DMV_COPY_NOTE'		=> sprintf($user->lang['DMV_COPY_NOTE'], (string) $dmv_config['copyright_email'], (string) $dmv_config['copyright_show']),
			));

			page_footer();
		}
	break;
	
	case 'rating':
		{
			set_top_10_rating();
			
			// The output of the page
			page_header($user->lang['DMV_VIDEO'] . ' &bull; ' . $user->lang['DMV_INDEX']);

			$template->set_filenames(array(
				'body' => $dm_video_path . 'topten_ratings_body.html'
			));

			$template->assign_block_vars('navlinks', array(
				'FORUM_NAME'	=> sprintf($user->lang['DMV_RATES'], $dmv_config['top_ratings']),
				'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}topten.$phpEx", "mode=rating"),
			));

			// Copyright notice
			$template->assign_vars(array(
				'DMV_COPY_NOTE'		=> sprintf($user->lang['DMV_COPY_NOTE'], (string) $dmv_config['copyright_email'], (string) $dmv_config['copyright_show']),
			));

			page_footer();
		}
	break;
}

?>