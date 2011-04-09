<?php
/**
*
* @package DM Video
* @version $Id: searchvideo.php 211 2009-12-18 10:23:29Z femu $
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
$string = '';
$video_id	= request_var('v', 0);
$cat_id 	= request_var('c', 0);

// Main template variables for the navigation
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['DMV_VIDEO'],
	'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
));

// Do the search
if ( isset($_POST['submit']) )
{
	$string = request_var('search_string', '', true);
	
	$sql_array = array(
		'SELECT'    => '*',

		'FROM'      => array(
			DM_VIDEO_TABLE => 'v'
		),

		'WHERE'     => 'LCASE(video_title) LIKE LCASE("%' . $string . '%")
			OR LCASE(video_songtext) LIKE LCASE("%' . $string . '%")
			OR LCASE(video_singer) LIKE LCASE("%' . $string . '%")',

		'ORDER_BY'	=> 'video_title ASC'
	);

	$sql = $db->sql_build_query('SELECT', $sql_array);
	$result = $db->sql_query($sql);

	while ($row = $db->sql_fetchrow($result))
	{
		$video_id	= (int) $row['video_id'];
		$cat_id		= (int) $row['video_cat_id'];
		$title 		= (string) $row['video_title'];
		$singer		= (string) $row['video_singer'];
		$duration	= (string) $row['video_duration'];
		
		$template->assign_block_vars('results', array(
			'TITLE'			=> $title,
			'SINGER'		=> $singer,
			'DURATION'		=> $duration,
			'U_SHOW_VIDEO'	=> append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v=" . (int) $video_id . "&amp;c=" . (int) $cat_id),
		));
	}
	$db->sql_freeresult($result);
}

// Local template variables for the navigation
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['DMV_SEARCH'],
	'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
));

// Main template stuff
$template->assign_vars(array(
	'SEARCH_RESULTS'	=> sprintf($user->lang['DMV_SEARCH_RESULTS'], $string),
	'RETURN_MAIN'		=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
	'NO_RESULTS'		=> sprintf($user->lang['DMV_SEARCH_NO_RESULTS'], $string),
	'DMV_COPY_NOTE'		=> sprintf($user->lang['DMV_COPY_NOTE'], (string) $dmv_config['copyright_email'], $dmv_config['copyright_show']),
	'S_POST_ACTION'		=> append_sid("{$phpbb_root_path}{$dm_video_path}searchvideo.$phpEx"),
));

// Header information
page_header($user->lang['DMV_VIDEO'] . ' &bull; ' . $user->lang['DMV_SEARCH_RESULTS_HEADER']);

// Template file to use
$template->set_filenames(array(
   'body' => $dm_video_path . 'searchvideo_body.html'
));

// Footer information
page_footer();

?>