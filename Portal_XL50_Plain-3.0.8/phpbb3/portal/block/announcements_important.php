<?php
/**
*
* @name announcements_important.php
* @package phpBB3 Portal XL 5.0
* @version $Id: announcements_important.php,v 1.4 2010/03/30 damysterious Exp $
*
* @copyright (c) 2007, 2010 Portal XL Group
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

/**
* initalise some global variables
*/
global $portal_config, $config, $phpbb_root_path, $phpEx, $db;

/*
* Begin block script here
*/
$sql_from = TOPICS_TABLE . ' t ';
$sql_select = '';

if ($config['load_db_track'])
{
	$sql_from .= ' LEFT JOIN ' . TOPICS_POSTED_TABLE . ' tp ON (tp.topic_id = t.topic_id 
	AND tp.user_id = ' . $user->data['user_id'] . ')';
	$sql_select .= ', tp.topic_posted';
}

if ($config['load_db_lastread'])
{
	$sql_from .= ' LEFT JOIN ' . TOPICS_TRACK_TABLE . ' tt ON (tt.topic_id = t.topic_id
	AND tt.user_id = ' . $user->data['user_id'] . ')';
	$sql_select .= ', tt.mark_time';
}

$topic_type = $user->lang['VIEW_TOPIC_GLOBAL'];
$folder = 'global_read';
$folder_new = 'global_unread';

// Get cleaned up list... return only those forums not having the f_read permission
$forum_ary = $auth->acl_getf('!f_read', true);
$forum_ary = array_unique(array_keys($forum_ary));

// Determine first forum the user is able to read into - for global announcement link
$sql = 'SELECT forum_id, forum_name 
FROM ' . FORUMS_TABLE . '
WHERE forum_type = ' . FORUM_POST;

if (sizeof($forum_ary))
{
	$sql .= ' AND ' . $db->sql_in_set('forum_id', $forum_ary, true);
}
$result = $db->sql_query_limit($sql, 1);
$g_forum_id = (int) $db->sql_fetchfield('forum_id');
$db->sql_freeresult($result);

$sql = "SELECT t.* $sql_select 
	FROM $sql_from
	WHERE t.forum_id = 0
		AND t.topic_type = " . POST_GLOBAL . '
	ORDER BY t.topic_last_post_time DESC';

$topic_list = $rowset = array();
// If the user can't see any forums, he can't read any posts because fid of 0 is invalid
if ($g_forum_id)
{
	$result = $db->sql_query($sql);

	while ($row = $db->sql_fetchrow($result))
	{
		$topic_list[] = $row['topic_id'];
		$rowset[$row['topic_id']] = $row;
	}
		$db->sql_freeresult($result);
	}

	$topic_tracking_info = array();
	if ($config['load_db_lastread'])
	{
		$topic_tracking_info = get_topic_tracking(0, $topic_list, $rowset, false, $topic_list);
	}
	else
	{
		$topic_tracking_info = get_complete_topic_tracking(0, $topic_list, $topic_list);
	}

	foreach ($topic_list as $topic_id)
	{
		$row = &$rowset[$topic_id];

		$forum_id = $row['forum_id'];
		$topic_id = $row['topic_id'];
		
		// last comments
		$announcements_important_last_post_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id'] . '&amp;start=' . @intval($phpbb_seo->seo_opt['topic_last_page'][$row['topic_id']]) ) . '#p' . $row['topic_last_post_id'];
		// topic id
		$announcements_important_topic_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id'] . '&amp;start=' . @intval($phpbb_seo->seo_opt['topic_last_page'][$row['topic_id']]) ) . '#p' . $row['topic_first_post_id'];

		$unread_topic = (isset($topic_tracking_info[$topic_id]) && $row['topic_last_post_time'] > $topic_tracking_info[$topic_id]) ? true : false;

		$folder_img = ($unread_topic) ? $folder_new : $folder;
		$folder_alt = ($unread_topic) ? 'NEW_POSTS' : (($row['topic_status'] == ITEM_LOCKED) ? 'TOPIC_LOCKED' : 'NO_NEW_POSTS');

		if ($row['topic_status'] == ITEM_LOCKED)
		{
			$folder_img .= '_locked';
		}

		// Posted image?
		if (!empty($row['topic_posted']) && $row['topic_posted'])
		{
			$folder_img .= '_mine';
		}

		$real_forum_id = ( $forum_id == 0 ) ? $row['forum_id']: $forum_id;

		$template->assign_block_vars('topicrow', array(
			'FORUM_ID'				=> $forum_id,
			'TOPIC_ID'				=> $topic_id,
			'LAST_POST_SUBJECT'		=> $row['topic_last_post_subject'],
			'LAST_POST_TIME'		=> $user->format_date($row['topic_last_post_time']),
			'LAST_POST_AUTHOR'		=> ($row['topic_last_poster_id'] == ANONYMOUS) ? (($row['topic_last_poster_name'] != '') ? $row['topic_last_poster_name'] . ' ' : $user->lang['GUEST'] . ' ') : $row['topic_last_poster_name'],
			'LAST_POST_AUTHOR_COLOUR'	=> ($row['topic_last_poster_colour']) ? '#' . $row['topic_last_poster_colour'] : '',
			'TOPIC_TITLE'			=> censor_text($row['topic_title']),
			'TOPIC_TYPE'			=> $topic_type,

			'LAST_POST_IMG'			=> $user->img('icon_topic_latest', 'VIEW_LATEST_POST'),
			'NEWEST_POST_IMG'		=> $user->img('icon_topic_newest', 'VIEW_NEWEST_POST'),
			'TOPIC_FOLDER_IMG'		=> $user->img($folder_img, $folder_alt),
			'TOPIC_FOLDER_IMG_SRC'	=> $user->img($folder_img, $folder_alt, false, '', 'src'),
			'ATTACH_ICON_IMG'		=> ($auth->acl_get('u_download') && $auth->acl_get('f_download', $forum_id) && $row['topic_attachment']) ? $user->img('icon_topic_attach', '') : '',

			'S_USER_POSTED'			=> (!empty($row['topic_posted']) && $row['topic_posted']) ? true : false,
			'S_UNREAD'				=> $unread_topic,

			'U_LAST_POST'			=> $announcements_important_last_post_url,
			'U_LAST_POST_AUTHOR'	=> ($row['topic_last_poster_id'] != ANONYMOUS) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u='  . $row['topic_last_poster_id']) : '',
			'U_NEWEST_POST'			=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$g_forum_id&amp;t=$topic_id&amp;view=unread") . '#unread',
			'U_VIEW_TOPIC'			=> $announcements_important_topic_url
			));
	}

if ($config['load_user_activity'])
{
	if (!function_exists('display_user_activity'))
	{
		include_once($phpbb_root_path . 'includes/functions_display.' . $phpEx);
	}
	display_user_activity($user->data);
}

// Do the relevant calculations 
$memberdays = max(1, round((time() - $user->data['user_regdate']) / 86400));
$posts_per_day = $user->data['user_posts'] / $memberdays;
$percentage = ($config['num_posts']) ? min(100, ($user->data['user_posts'] / $config['num_posts']) * 100) : 0;

$template->assign_vars(array(
	'USER_COLOR'		=> (!empty($user->data['user_colour'])) ? $user->data['user_colour'] : '', 
	'JOINED'			=> $user->format_date($user->data['user_regdate']),
	'VISITED'			=> (empty($last_visit)) ? ' - ' : $user->format_date($last_visit),
	'WARNINGS'			=> ($user->data['user_warnings']) ? $user->data['user_warnings'] : 0,
	'POSTS'				=> ($user->data['user_posts']) ? $user->data['user_posts'] : 0,
	'POSTS_DAY'			=> sprintf($user->lang['POST_DAY'], $posts_per_day),
	'POSTS_PCT'			=> sprintf($user->lang['POST_PCT'], $percentage),

	'OCCUPATION'		=> (!empty($row['user_occ'])) ? $row['user_occ'] : '',
	'INTERESTS'			=> (!empty($row['user_interests'])) ? $row['user_interests'] : '',

	'U_SEARCH_USER'		=> ($auth->acl_get('u_search')) ? append_sid("{$phpbb_root_path}search.$phpEx", 'author_id=' . $user->data['user_id'] . '&amp;sr=posts') : '')
	);

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/announcements_important.html',
	));

?>