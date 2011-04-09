<?php
/**
*
* @package DM Video
* @version $Id: showcomments.php 216 2009-12-20 13:44:46Z femu $
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
$video_id 	= request_var('v', 0);
$cat_id		= request_var('c', 0);
$start 	 	= request_var('start', 0);
$number  	= (string) $dmv_config['video_page_comment'];

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

// Selecting the total number of comments
$sql_array = array(
    'SELECT'    => 'COUNT(comment_id) AS total_comments',

    'FROM'      => array(
        DM_VIDEO_COMMENT_TABLE => 'vc'
    ),

    'WHERE'     =>  'video_id = ' . (int) $video_id,
);

$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql);

$row = $db->sql_fetchrow($result);
$total_comments = (int) $row['total_comments'];
$db->sql_freeresult($result);

// Selecting the name of video for the title
$sql_array = array(
    'SELECT'    => 'video_title',

    'FROM'      => array(
        DM_VIDEO_TABLE => 'v'
    ),

    'WHERE'     =>  'video_id = ' . (int) $video_id,
);

$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql);

$row = $db->sql_fetchrow($result);
$video_title = (string) $row['video_title'];
$db->sql_freeresult($result);

// Selecting the needed fields from the comment and users table
// and send the values as the comment rows with pagination
$sql_array = array(
    'SELECT'    => 'vc.*, u.username, u.user_id, u.user_colour',

    'FROM'      => array(
        DM_VIDEO_COMMENT_TABLE  => 'vc'
    ),

    'LEFT_JOIN' => array(
        array(
            'FROM'  => array(USERS_TABLE => 'u'),
            'ON'    => 'vc.video_user_id = u.user_id'
        )
    ),

    'WHERE'     => 'vc.video_id = ' . (int) $video_id,
	
	'ORDER_BY'	=> 'vc.comment_id DESC'
);

$sql = $db->sql_build_query('SELECT', $sql_array);
// Following limit is need to set the pagination!!
$result = $db->sql_query_limit($sql, $number, $start);

while ($row = $db->sql_fetchrow($result))
{
	$video_comment = generate_text_for_display($row['video_comment'], $row['comment_bbcode_uid'], $row['comment_bbcode_bitfield'], $row['comment_bbcode_options']);
	$video_comment_id	= (int) $row['comment_id'];
	$video_username		= (string) $row['video_username'];
	$video_user_colour	= (string) $row['video_user_colour'];
	$video_time			= (string) $row['video_time'];

	$template->assign_block_vars('comments',array(
		'VIDEO_COMMENT'			=> $video_comment,

		'S_EDIT_COMMENT'		=> (($auth->acl_get('u_dm_video_comment_edit') && $row['video_user_id'] == $user->data['user_id']) || $auth->acl_get('a_dm_video_edit')) ? true : false,
		'S_DELETE_COMMENT'		=> (($auth->acl_get('u_dm_video_comment_del') && $row['video_user_id'] == $user->data['user_id']) || $auth->acl_get('a_dm_video_edit')) ? true : false,

		'COMMENT_AUTHOR_FULL'	=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour'], $row['username']),
		'COMMENT_POST_TIME'		=> $user->format_date($row['video_time']),

		'U_EDIT_COMMENT'		=> append_sid("{$phpbb_root_path}{$dm_video_path}postcomment.$phpEx", "mode=edit&amp;p=" . (int) $video_comment_id),
		'U_DELETE_COMMENT'		=> append_sid("{$phpbb_root_path}{$dm_video_path}postcomment.$phpEx", "mode=delete&amp;p=" . (int) $video_comment_id),
	));
}

// Local template variables for the navigation
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['DMV_COMMENT'],
	'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}showcomments.$phpEx", "v=" . (int) $video_id . "&amp;c=" . (int) $cat_id),
));

// Main template stuff
$template->assign_vars(array(
	'VIDEO_NAME'		=> $video_title,
	'VIDEO_TITLE' 		=> sprintf($user->lang['DMV_COMMENT_SHOW'], $video_title),

	'EDIT_IMG' 			=> $user->img('icon_post_edit', 'EDIT_POST'),
	'DELETE_IMG' 		=> $user->img('icon_post_delete', 'DELETE_POST'),

	'S_ADD_COMMENT'		=> $auth->acl_get('u_dm_video_comment_add'),

	'U_ADD_COMMENT'		=> append_sid("{$phpbb_root_path}{$dm_video_path}postcomment.$phpEx", "mode=new&amp;c=" . (int) $cat_id . "&amp;v=" . (int) $video_id),
	'U_BACK_CAT'		=> append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "c=" . (int) $cat_id),
	'U_BACK_VIDEO'		=> append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v=" . (int) $video_id . "&amp;c=" . (int) $cat_id),
	
	'PAGINATION' 		=> generate_pagination(append_sid("{$phpbb_root_path}{$dm_video_path}showcomments.$phpEx", "v=" . (int) $video_id . "&amp;c=" . (int) $cat_id), (int) $total_comments, (int) $number, (int) $start),
	'PAGE_NUMBER'		=> on_page($total_comments, $number, $start),
	'TOTAL_COMMENTS'	=> ($total_comments == 1) ? $user->lang['DMV_COMMENT_SINGLE'] : sprintf($user->lang['DMV_COMMENT_MULTI'], $total_comments),
));

// Copyright notice
$template->assign_vars(array(
	'DMV_COPY_NOTE'		=> sprintf($user->lang['DMV_COPY_NOTE'], $dmv_config['copyright_email'], $dmv_config['copyright_show']),
));

// Header information
page_header($user->lang['DMV_VIDEO'] . ' &bull; ' . $user->lang['DMV_COMMENT']);

// Template file to use
$template->set_filenames(array(
   'body' => $dm_video_path . 'showcomments_body.html'
));

// Footer information
page_footer();

?>