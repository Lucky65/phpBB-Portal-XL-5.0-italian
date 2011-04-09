<?php
/**
*
* @package DM Video
* @version $Id: showvideo.php 216 2009-12-20 13:44:46Z femu $
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
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'includes/bbcode.' . $phpEx);
include($phpbb_root_path . 'includes/message_parser.' . $phpEx);

// Some mod related variables and includes
$dm_video_path = (defined('DM_VIDEO_ROOT_PATH')) ? DM_VIDEO_ROOT_PATH : 'dm_video/';
include($phpbb_root_path . $dm_video_path . 'common.' . $phpEx);

// Do the session handling
$user->session_begin();
$auth->acl($user->data);
$user->setup(array('viewtopic', 'viewforum', 'mods/dm_video'));

// Set some variables
$video_id	= request_var('v', 0);
$cat_id 	= request_var('c', 0);

// Main template variables for the navigation
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['DMV_VIDEO'],
	'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
));

// We need som informations about the category we are in for the navigation
$cat_data = get_cat_info($cat_id);

// Generate the navigation
generate_cat_nav($cat_data);

// Generate the sub categories
generate_cat_list($cat_id);

// Select the needed data to show the rating
$sql_array = array(
    'SELECT'    => 'video_votetotal, video_votesum',

    'FROM'      => array(
        DM_VIDEO_TABLE => 'v'
    ),

    'WHERE'     =>  'video_id = ' . (int) $video_id,
);

$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

$votes 		= (int) $row['video_votetotal'];
$sum 		= (int)$row['video_votesum'];
$avg_score 	= ($row['video_votetotal'] == 0) ? 0 : round($row['video_votesum'] / $row['video_votetotal'], 2);

// Select the needed data to show the video
$sql_array = array(
    'SELECT'    => 'v.*, u.username, u.user_id, u.user_colour',

    'FROM'      => array(
        DM_VIDEO_TABLE  => 'v'
    ),

    'LEFT_JOIN' => array(
        array(
            'FROM'  => array(USERS_TABLE => 'u'),
            'ON'    => 'v.video_user_id = u.user_id'
        )
    ),

    'WHERE'     => 'v.video_id = ' . (int) $video_id,
);

$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);

$video_user_id 		= (int) $row['video_user_id'];
$video_username 	= (string) $row['video_username'];
$video_usercolour 	= (string) $row['user_colour'];
$video_img 			= (string) $row['video_image'];
$songtext 			= generate_text_for_display($row['video_songtext'], $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options']);

// Select the category name
$sql_array = array(
    'SELECT'    => 'cat_name',

    'FROM'      => array(
        DM_VIDEO_CATS_TABLE => 'c'
    ),

    'WHERE'     =>  'cat_id = ' . (int) $cat_id,
);

$sql2 = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql2);
$row2 = $db->sql_fetchrow($result);

// Count the number of comments
$sql_array = array(
    'SELECT'    => 'COUNT(comment_id) AS comment_counter',

    'FROM'      => array(
        DM_VIDEO_COMMENT_TABLE => 'vc'
    ),

    'WHERE'     =>  'video_id = ' . (int) $video_id,
);

$sql3 = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql3);

$comment_counter = (int) $db->sql_fetchfield('comment_counter');

if ( $comment_counter == 0 )
{
	$template->assign_vars(array(
		'CC' => $user->lang['DMV_COMMENT_NO_CC'],
	));
}
elseif ( $comment_counter == 1 )
{
	$template->assign_vars(array(
		'CC' => $user->lang['DMV_COMMENT_SINGLE'],
	));
}
else
{
	$template->assign_vars(array(
		'CC' => sprintf($user->lang['DMV_COMMENT_MULTI'], $comment_counter),
	));
}

// Send the variables to the template
$template->assign_vars(array(
	'EDIT_IMG' 				=> $user->img('icon_post_edit', 'EDIT_POST'),
	'DELETE_IMG' 			=> $user->img('icon_post_delete', 'DELETE_POST'),
	'REPORT_IMG'			=> $user->img('icon_post_report', 'REPORT_POST'),

	'S_HAS_PERM_RATE'		=> $auth->acl_get('u_dm_video_rate'),
	'S_ADD_VIDEO'			=> $auth->acl_get('u_dm_video_add'),
	'S_EDIT_VIDEO'			=> (($auth->acl_get('u_dm_video_edit') && $row['video_user_id'] == $user->data['user_id']) || $auth->acl_get('a_dm_video_edit')),
	'S_REPORT_VIDEO'		=> $auth->acl_get('u_dm_video_report') || $auth->acl_get('a_dm_video_edit'),
	'S_DELETE_VIDEO'		=> (($auth->acl_get('u_dm_video_del') && $row['video_user_id'] == $user->data['user_id']) || $auth->acl_get('a_dm_video_edit')),
	'S_SHOW_COMMENTS'		=> $auth->acl_get('u_dm_video_comment_view'),
	'U_COMMENT_VIDEO'		=> append_sid("{$phpbb_root_path}{$dm_video_path}showcomments.$phpEx", "v=" . (int) $video_id . "&amp;c=" . (int) $cat_id),
	'U_EDIT_VIDEO'			=> append_sid("{$phpbb_root_path}{$dm_video_path}postvideo.$phpEx", "mode=edit&amp;v=" . (int) $video_id . "&amp;c=" . (int) $cat_id),
	'U_DELETE_VIDEO'		=> append_sid("{$phpbb_root_path}{$dm_video_path}postvideo.$phpEx", "mode=delete&amp;v=" . (int) $video_id . "&amp;c=" . (int) $cat_id),
	'U_REPORT_VIDEO'		=> append_sid("{$phpbb_root_path}{$dm_video_path}reportvideo.$phpEx", "v=" . (int) $video_id . "&amp;c=" . (int) $cat_id),
	'U_RATE_VIDEO'			=> append_sid("{$phpbb_root_path}{$dm_video_path}ratevideo.$phpEx", "v=" . (int) $video_id . "&amp;c=" . (int) $cat_id),
	'U_SHOW_POPUP'			=> append_sid("{$phpbb_root_path}{$dm_video_path}showpopup.$phpEx", "v=" . (int) $video_id),

	'VIDEO_RATING_IMG' 		=> set_rating_image($votes, $sum, $avg_score),	
	
	'VIDEO_CLICKS'			=> ($row['video_counter'] == 1) ? $user->lang['DMV_SINGLE_VIEW'] : sprintf($user->lang['DMV_MULTI_VIEW'], $row['video_counter']),

	'VIDEO_ADDED_BY'		=> get_username_string('full', $video_user_id, $video_username,$video_usercolour),
	'VIDEO_TITLE' 			=> (string) $row['video_title'],
	'VIDEO_SONGTEXT'		=> (string) $songtext,
	'VIDEO_URL' 			=> htmlspecialchars_decode($row['video_url']),
	'VIDEO_SINGER'			=> (string) $row['video_singer'],
	'VIDEO_DURATION'		=> (string) $row['video_duration'],
	'VIDEO_CAT_NAME'		=> (string) $row2['cat_name'],
	'VIDEO_TIME'			=> $user->format_date($row['video_time']),
	'VIDEO_IMAGE'			=> htmlspecialchars_decode($video_img),
	'U_BACK_CAT'			=> append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "c=" . $cat_id),
));

$db->sql_freeresult($result);

// Update the view counter
if (isset($user->data['session_page']) && !$user->data['is_bot'] && strpos($user->data['session_page'], '&amp;c=' . $cat_id) === false)
{
	$db->sql_query('UPDATE ' . DM_VIDEO_TABLE . ' SET video_counter = video_counter + 1 WHERE video_id = ' . (int) $video_id);
}

// Copyright notice
$template->assign_vars(array(
	'DMV_COPY_NOTE'		=> sprintf($user->lang['DMV_COPY_NOTE'], (string) $dmv_config['copyright_email'], $dmv_config['copyright_show']),
));

// Header information
page_header($user->lang['DMV_VIDEO'] . ' &bull; ' . censor_text($row['video_title']));

// Template file to use
$template->set_filenames(array(
   'body' => $dm_video_path . 'showvideo_body.html'
));

// Footer information
page_footer();

?>