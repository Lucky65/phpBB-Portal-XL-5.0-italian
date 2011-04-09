<?php
/**
*
* @package DM Video
* @version $Id: all_videos.php 210 2009-12-18 08:39:13Z femu $
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

// Main template variables for the navigation
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['DMV_VIDEO'],
	'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
));

// Set globals and values for number per page
global $db, $template, $phpbb_root_path, $phpEx, $user, $config, $dm_video_path, $dmv_config;

$start	= request_var('start', 0);
$number	= (int) $dmv_config['video_page_user'];

// The sorting stuff
$sort_days	= request_var('st', 0);
$sort_key	= request_var('sk', 'video_title');
$sort_dir	= request_var('sd', 'ASC');
$limit_days = array(0 => $user->lang['ALL_POSTS'], 1 => $user->lang['1_DAY'], 7 => $user->lang['7_DAYS'], 14 => $user->lang['2_WEEKS'], 30 => $user->lang['1_MONTH'], 90 => $user->lang['3_MONTHS'], 180 => $user->lang['6_MONTHS'], 365 => $user->lang['1_YEAR']);

$sort_by_text	= array('t' => $user->lang['DMV_SORT_TITLE'], 'a' => $user->lang['DMV_SORT_ARTIST'], 'u' => $user->lang['DMV_SORT_FROMNAME'], 'r' => $user->lang['DMV_SORT_RATING'], 'v' => $user->lang['DMV_SORT_VIEWS']);
$sort_by_sql 	= array('t' => 'video_title', 'a' => 'video_singer', 'u' => 'video_username', 'r' => 'video_votesum / video_votetotal', 'v' => 'video_counter');

$s_limit_days 	= $s_sort_key = $s_sort_dir = $u_sort_param = '';
gen_sort_selects($limit_days, $sort_by_text, $sort_days, $sort_key, $sort_dir, $s_limit_days, $s_sort_key, $s_sort_dir, $u_sort_param);
$sql_sort_order = $sort_by_sql[$sort_key] . ' ' . (($sort_dir == 'd') ? 'DESC' : 'ASC');

// Total number of videos
$sql_array = 	array(
    'SELECT'    => 	'COUNT(video_id) AS total_videos',

    'FROM'      => 	array(
        DM_VIDEO_TABLE =>	'v',
    ),

    'WHERE'     =>  'video_approval = "1"
        AND video_reported = "1"',
);

$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);

$total_videos = (int) $row['total_videos'];
$db->sql_freeresult($result);

// Select the videos
$sql_array =	array(
	'SELECT'	=> 	'v.*, u.*, c.*',

	'FROM'		=> 	array(
		DM_VIDEO_TABLE	=> 	'v',
	),

	'LEFT_JOIN'	=>	array(
		array(
			'FROM'	=> 	array(USERS_TABLE => 'u'),
			'ON'	=> 	'v.video_user_id = u.user_id'
		),
		array(
			'FROM'	=> 	array(DM_VIDEO_CATS_TABLE => 'c'),
			'ON'	=> 	'v.video_cat_id = c.cat_id'
		),
	),

	'WHERE'		=>	'v.video_approval = 1',

	'ORDER_BY'	=>	'v.' . $sql_sort_order,
);

$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query_limit($sql, $number, $start);

while ($row = $db->sql_fetchrow($result))
{
	$votes 		= (float) $row['video_votetotal'];
	$sum 		= (float) $row['video_votesum'];
	$avg_score 	= ($row['video_votetotal'] == 0) ? 0 : round($row['video_votesum'] / $row['video_votetotal'], 2);
	$cat_id 	= (int) $row['video_cat_id'];

	// Send the results to the template
	$template->assign_block_vars('newest', array(
		'TITLE'				=> (string) $row['video_title'],
		'CAT_NAME' 			=> (string) $row['cat_name'],
		'SINGER'			=> (string) $row['video_singer'],
		'DURATION'			=> (string) $row['video_duration'],
		'RATING'			=> set_rating_image($votes, $sum, $avg_score),
		'VIEWS'				=> (int) $row['video_counter'],
		'POST_AUTHOR_FULL'	=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour'], $row['username']),
		'POST_TIME'			=> $user->format_date($row['video_time']),
		'U_SHOW_VIDEO'		=> append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v=" . $row['video_id'] . "&amp;c=" . $cat_id),
	));
		
}
$db->sql_freeresult($result);

// Local template variables for the navigation
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['DMV_ALL_VIDEOS_LIST'],
	'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}all_videos.$phpEx"),
));

// Main template stuff
$template->assign_vars(array(
	'S_SELECT_SORT_DIR'	=> $s_sort_dir,
	'S_SELECT_SORT_KEY'	=> $s_sort_key,
	'DMV_COPY_NOTE'		=> sprintf($user->lang['DMV_COPY_NOTE'], $dmv_config['copyright_email'], $dmv_config['copyright_show']),
	'U_BACK'			=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
	'PAGINATION' 		=> generate_pagination(append_sid("{$phpbb_root_path}{$dm_video_path}all_videos.$phpEx"), $total_videos, $number, $start),
	'PAGE_NUMBER'		=> on_page((int) $total_videos, (int) $number, (int) $start),
	'TOTAL_VIDEOS'		=> ((int) $total_videos == 1) ? $user->lang['DMV_SINGLE'] : sprintf($user->lang['DMV_MULTI'], $total_videos),
));

// Header information
page_header($user->lang['DMV_VIDEO'] . ' &bull; ' . $user->lang['DMV_ALL_VIDEOS_LIST']);

// Template file to use
$template->set_filenames(array(
	'body' => $dm_video_path . 'all_videos_body.html'
));

// Footer information
page_footer();

?>