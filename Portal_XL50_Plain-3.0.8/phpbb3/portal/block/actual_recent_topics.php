<?php
/*
*
* @name actual_recent_topics.php
* @package phpBB3 Portal XL 5.0
* @version $Id: actual_recent_topics.php,v 1.4 2009/10/13 damysterious Exp $
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
$allow_max_topics = $portal_config['portal_max_topics'];
$allow_recent_title_limit = $portal_config['portal_recent_title_limit'];

/**
* Fetch all recent topics if we want to show them on portal (marque/scroll block)
*
*/
	$sql = 'SELECT
			f.forum_id,
			f.forum_name,
         	t.topic_id,
	        t.forum_id,
			t.forum_id,
			t.topic_id,
			t.topic_approved,
            t.topic_first_post_id,			
			t.topic_last_post_id,			
			t.topic_time,
			t.topic_title,
			t.topic_replies,
			t.topic_poster,
			t.topic_attachment,
			t.topic_views,
			t.topic_type,			
			t.poll_title,			
			u.username,
			u.user_id,
			u.user_type,
			u.user_colour,			
			p.post_id,
			p.post_text,			
			p.enable_smilies,
			p.enable_bbcode,
			p.enable_magic_url,
			p.bbcode_bitfield,
			p.bbcode_uid
		FROM
			' . TOPICS_TABLE . ' AS t,
			' . USERS_TABLE . ' AS u,
			' . POSTS_TABLE . ' AS p,
			' . FORUMS_TABLE . ' AS f
		WHERE
				 t.topic_poster = u.user_id
			 AND t.topic_first_post_id = p.post_id
		     AND t.topic_approved = 1 
		     AND t.topic_type = 0
		     AND f.forum_id = t.forum_id
	    ORDER BY t.topic_time DESC';
		$result = $db->sql_query_limit($sql, $allow_max_topics);

while( ($row = $db->sql_fetchrow($result)) && ($row['topic_title'] != '') )
{
	// auto auth
	if ( ($auth->acl_get('f_read', $row['forum_id'])) || ($row['forum_id'] == '0') )
	{
		// last comments
		$actual_recent_topics_last_post_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id'] . '&amp;start=' . @intval($phpbb_seo->seo_opt['topic_last_page'][$row['topic_id']]) ) . '#p' . $row['topic_last_post_id'];
		// topic id
		$actual_recent_topics_topic_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id'] . '&amp;start=' . @intval($phpbb_seo->seo_opt['topic_last_page'][$row['topic_id']]) ) . '#p' . $row['post_id'];
		$row['username'] = '<b style="color:#' . $row['user_colour'] . '">' . $row['username'] . '</b> ';

			$template->assign_block_vars('actual_topics', array( 
			'U_TITLE' => $actual_recent_topics_topic_url,
			'L_TITLE' => censor_text($row['topic_title']), 
			'U_POSTER' => (($row['user_type'] == USER_NORMAL || $row['user_type'] == USER_FOUNDER) && $row['user_id'] != ANONYMOUS) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['user_id']) : '',
			'S_POSTER' => $row['username'],
			'S_POSTTIME' => $user->format_date($row['topic_time']), 
			'MINI_POST_IMG'	=> $user->img('icon_post_target', 'POST'),
			)); 
	} 
}
$db->sql_freeresult($result);

		// Assign specific vars
		$template->assign_vars(array(
			'L_TOPIC_VIEWS'				=> $user->lang['TOPIC_VIEWS'],
			'L_POSTED_BY'				=> $user->lang['POSTED_BY'],
			'L_COMMENTS'				=> $user->lang['COMMENTS'],
			'L_VIEW_COMMENTS'			=> $user->lang['VIEW_COMMENTS'],
			'L_RECENT_ACTUAL_TOPIC'		=> $user->lang['RECENT_ACTUAL_TOPIC'],
			'L_RECENT_ACTUAL_ANN'		=> $user->lang['RECENT_ACTUAL_ANN'],
			'L_RECENT_ACTUAL_HOT_TOPIC'	=> $user->lang['RECENT_ACTUAL_HOT_TOPIC'],
			));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/actual_recent_topics.html',
	));

?>