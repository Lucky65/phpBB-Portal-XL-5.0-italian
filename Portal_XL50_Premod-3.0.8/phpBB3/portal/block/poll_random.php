<?php
/*
*
* @name poll_random.php
* @package phpBB3 Portal XL 5.0
* @version $Id: poll_random.php,v 1.3 2010/10/31 damysterious Exp $
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
$user->add_lang('viewtopic');

/*
* Begin block script here
*/
global $portal_config, $config, $phpbb_root_path, $db, $user, $template, $phpEx;
// include($phpbb_root_path . 'includes/bbcode.' . $phpEx);

/**
* @ignore
*/

$user->add_lang('viewtopic');

$view = request_var('view', '');
$update = request_var('update', false);
$poll_view = request_var('polls', '');

$poll_view_ar = ( strpos(urldecode($poll_view), ',') !== FALSE ) ? explode(',', urldecode($poll_view)) : (($poll_view != '') ? array($poll_view) : array());

if ($update)
{
	$up_topic_id = request_var('t', 0);
	$up_forum_id = request_var('f', 0);
	$voted_id = request_var('vote_id', array('' => 0));

	$cur_voted_id = array();
	if ($user->data['is_registered'])
	{
		$sql = 'SELECT poll_option_id
			FROM ' . POLL_VOTES_TABLE . '
			WHERE topic_id = ' . $up_topic_id . '
				AND vote_user_id = ' . $user->data['user_id'];
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$cur_voted_id[] = $row['poll_option_id'];
		}
		$db->sql_freeresult($result);
	}
	else
	{
		// Cookie based guest tracking ... I don't like this but hum ho
		// it's oft requested. This relies on "nice" users who don't feel
		// the need to delete cookies to mess with results.
		if (isset($_COOKIE[$config['cookie_name'] . '_poll_' . $up_topic_id]))
		{
			$cur_voted_id = explode(',', request_var($config['cookie_name'] . '_poll_' . $up_topic_id, 0, false, true));
			$cur_voted_id = array_map('intval', $cur_voted_id);
		}
	}

	$sql = 'SELECT t.poll_length, t.poll_start, t.poll_vote_change, t.topic_status, f.forum_status, t.poll_max_options
			FROM ' . TOPICS_TABLE . ' t, ' . FORUMS_TABLE . " f
			WHERE t.forum_id = f.forum_id AND t.topic_id = " . (int) $up_topic_id . " AND t.forum_id = " . (int) $up_forum_id;
	$result = $db->sql_query_limit($sql, 1);
	$topic_data = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	$s_can_up_vote = (((!sizeof($cur_voted_id) && $auth->acl_get('f_vote', $up_forum_id)) ||
		($auth->acl_get('f_votechg', $up_forum_id) && $topic_data['poll_vote_change'])) &&
		(($topic_data['poll_length'] != 0 && $topic_data['poll_start'] + $topic_data['poll_length'] > time()) || $topic_data['poll_length'] == 0) &&
		$topic_data['topic_status'] != ITEM_LOCKED &&
		$topic_data['forum_status'] != ITEM_LOCKED) ? true : false;

	if( $s_can_up_vote )
	{
		if (!sizeof($voted_id) || sizeof($voted_id) > $topic_data['poll_max_options'] || in_array(VOTE_CONVERTED, $cur_voted_id))
		{
			$redirect_url = append_sid("{$phpbb_root_path}portal.$phpEx");
	
			meta_refresh(5, $redirect_url);
			if (!sizeof($voted_id))
			{
				$message = 'NO_VOTE_OPTION';
			}
			else if (sizeof($voted_id) > $topic_data['poll_max_options'])
			{
				$message = 'TOO_MANY_VOTE_OPTIONS';
			}
			else
			{
				$message = 'VOTE_CONVERTED';
			}
	
			$message = $user->lang[$message] . '<br /><br />' . sprintf($user->lang['RETURN_PORTAL'], '<a href="' . $redirect_url . '">', '</a>');
			trigger_error($message);
		}
	
		foreach ($voted_id as $option)
		{
			if (in_array($option, $cur_voted_id))
			{
				continue;
			}
	
			$sql = 'UPDATE ' . POLL_OPTIONS_TABLE . '
				SET poll_option_total = poll_option_total + 1
				WHERE poll_option_id = ' . (int) $option . '
					AND topic_id = ' . (int) $up_topic_id;
			$db->sql_query($sql);
	
			if ($user->data['is_registered'])
			{
				$sql_ary = array(
					'topic_id'			=> (int) $up_topic_id,
					'poll_option_id'	=> (int) $option,
					'vote_user_id'		=> (int) $user->data['user_id'],
					'vote_user_ip'		=> (string) $user->ip,
				);
	
				$sql = 'INSERT INTO ' . POLL_VOTES_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
				$db->sql_query($sql);
			}
		}
	
		foreach ($cur_voted_id as $option)
		{
			if (!in_array($option, $voted_id))
			{
				$sql = 'UPDATE ' . POLL_OPTIONS_TABLE . '
					SET poll_option_total = poll_option_total - 1
					WHERE poll_option_id = ' . (int) $option . '
						AND topic_id = ' . (int) $up_topic_id;
				$db->sql_query($sql);
	
				if ($user->data['is_registered'])
				{
					$sql = 'DELETE FROM ' . POLL_VOTES_TABLE . '
						WHERE topic_id = ' . (int) $up_topic_id . '
							AND poll_option_id = ' . (int) $option . '
							AND vote_user_id = ' . (int) $user->data['user_id'];
					$db->sql_query($sql);
				}
			}
		}
	
		if ($user->data['user_id'] == ANONYMOUS && !$user->data['is_bot'])
		{
			$user->set_cookie('poll_' . $up_topic_id, implode(',', $voted_id), time() + 31536000);
		}
	
		$sql = 'UPDATE ' . TOPICS_TABLE . '
			SET poll_last_vote = ' . time() . "
			WHERE topic_id = $up_topic_id";
		//, topic_last_post_time = ' . time() . " -- for bumping topics with new votes, ignore for now
		$db->sql_query($sql);
	
		$redirect_url = append_sid("{$phpbb_root_path}portal.$phpEx");
	
		meta_refresh(5, $redirect_url);
		trigger_error($user->lang['VOTE_SUBMITTED'] . '<br /><br />' . sprintf($user->lang['RETURN_PORTAL'], '<a href="' . $redirect_url . '">', '</a>'));
	}
}

$where = '';
$poll_forums = false;

if( $portal_config['portal_poll_forum_id'] !== '' )
{
	$poll_forums_config  = explode(',' ,$portal_config['portal_poll_forum_id']);
	foreach($poll_forums_config as $poll_forum )
	{
		if ( is_numeric(trim($poll_forum)) === TRUE )
		{
			$poll_forum = (int) trim($poll_forum);
			if( $auth->acl_get('f_read', $poll_forum) )
			{
				$poll_forums = true;
				$where .= ($where == "") ? "t.forum_id = '{$poll_forum}'" : " OR t.forum_id = '{$poll_forum}'";
			}
		}
	}
}
else
{
	$forum_list = $auth->acl_getf('f_read', true);

	foreach($forum_list as $pf => $pf_data )
	{
		$pf = (int) trim($pf);
		$poll_forums = true;
		$where .= ($where == "") ? "t.forum_id = '{$pf}'" : " OR t.forum_id = '{$pf}'";
	}
}

$where = ($where !== '') ? "AND ({$where})" : '';

if( $poll_forums === TRUE )
{
	
	$sql = 'SELECT t.poll_title, t.poll_start, t.topic_id, t.forum_id, t.poll_length, t.poll_vote_change, t.poll_max_options, t.topic_status, f.forum_status
			FROM ' . TOPICS_TABLE . ' t, ' . FORUMS_TABLE . " f
			WHERE t.forum_id = f.forum_id AND t.topic_approved = 1 AND t.poll_start > 0
			{$where}
			ORDER BY RAND()
			LIMIT 4";
	$result = $db->sql_query($sql);
	
	$has_poll = false;

	if ($result)
	{
		
		while( $data = $db->sql_fetchrow($result) )
		{
			$has_poll = true;
			$poll_has_options = false;

			$topic_id = (int) $data['topic_id'];
			$forum_id = (int) $data['forum_id'];

			$cur_voted_id = array();
			if( $has_poll = true )
			{
				if ($user->data['is_registered'])
				{
					$vote_sql = 'SELECT poll_option_id
						FROM ' . POLL_VOTES_TABLE . '
						WHERE topic_id = ' . $topic_id . '
							AND vote_user_id = ' . $user->data['user_id'];
					$vote_result = $db->sql_query($vote_sql);
				
					while ($row = $db->sql_fetchrow($vote_result))
					{
						$cur_voted_id[] = $row['poll_option_id'];
					}
					$db->sql_freeresult($vote_result);
				}
				else
				{
					// Cookie based guest tracking ... I don't like this but hum ho
					// it's oft requested. This relies on "nice" users who don't feel
					// the need to delete cookies to mess with results.
					if (isset($_COOKIE[$config['cookie_name'] . '_poll_' . $topic_id]))
					{
						$cur_voted_id = explode(',', request_var($config['cookie_name'] . '_poll_' . $topic_id, 0, false, true));
						$cur_voted_id = array_map('intval', $cur_voted_id);
					}
				}
	
				$s_can_vote = (((!sizeof($cur_voted_id) && $auth->acl_get('f_vote', $forum_id)) ||
					($auth->acl_get('f_votechg', $forum_id) && $data['poll_vote_change'])) &&
					(($data['poll_length'] != 0 && $data['poll_start'] + $data['poll_length'] > time()) || $data['poll_length'] == 0) &&
					$data['topic_status'] != ITEM_LOCKED &&
					$data['forum_status'] != ITEM_LOCKED) ? true : false;
			} else {
				$s_can_vote = false;
			}

			$s_display_results = ( !$s_can_vote || ( $s_can_vote && sizeof($cur_voted_id) ) || ( $view == 'viewpoll' && in_array($topic_id, $poll_view_ar) ) ) ? true : false;

			$poll_sql = 'SELECT po.poll_option_id, po.poll_option_text, po.poll_option_total
				FROM ' . POLL_OPTIONS_TABLE . " po
				WHERE po.topic_id = {$topic_id}
				ORDER BY po.poll_option_id";

			$poll_result = $db->sql_query($poll_sql);
			
			$poll_total_votes = 0;

			$poll_data = array();

			if ($poll_result)
			{
				while( $polls_data = $db->sql_fetchrow($poll_result) )
				{
					$poll_has_options = true;
					$poll_data[] = $polls_data;
					$poll_total_votes += $polls_data['poll_option_total'];
				}
			}
			$db->sql_freeresult($poll_result);
			
			$make_poll_view = array();
			
			if( in_array($topic_id, $poll_view_ar) === FALSE )
			{
				$make_poll_view[] = $topic_id;
				$make_poll_view = array_merge($poll_view_ar, $make_poll_view);
			}
			
			$poll_view_str = urlencode( implode(',', $make_poll_view) );
			
			// www.phpBB-SEO.com SEO TOOLKIT BEGIN
			$phpbb_seo->set_url($data['forum_name'], $data['forum_id'], $phpbb_seo->seo_static['forum']);
			$phpbb_seo->prepare_iurl($data, 'topic', $data['topic_type'] == POST_GLOBAL ? $phpbb_seo->seo_static['global_announce'] : $phpbb_seo->seo_url['forum'][$data['forum_id']]);
			$phpbb_seo->set_user_url( $data['username'], $data['user_id'] );
			// www.phpBB-SEO.com SEO TOOLKIT END
	
			$portalvote_url = append_sid("{$phpbb_root_path}portal.$phpEx", 'f=' . $forum_id . '&amp;t=' . $topic_id);
			// $portalvote_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $forum_id . '&amp;t=' . $topic_id);
         	$viewtopic_url  = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $forum_id . '&amp;t=' . $topic_id);

			$poll_end = $data['poll_length'] + $data['poll_start'];

			$template->assign_block_vars('poll', array(
				'S_POLL_HAS_OPTIONS' 	=> $poll_has_options,
				'POLL_QUESTION' 		=> $data['poll_title'],
				'U_POLL_TOPIC' 			=> append_sid($phpbb_root_path . 'viewtopic.' . $phpEx . '?t=' . $topic_id . '&amp;f=' . $forum_id),
				'POLL_LENGTH' 			=> $data['poll_length'],
				'TOPIC_ID' 				=> $topic_id,
				'TOTAL_VOTES' 			=> $poll_total_votes,
				'L_MAX_VOTES'			=> ($data['poll_max_options'] == 1) ? $user->lang['MAX_OPTION_SELECT'] : sprintf($user->lang['MAX_OPTIONS_SELECT'], $data['poll_max_options']),
				'L_POLL_LENGTH'			=> ($data['poll_length']) ? sprintf($user->lang[($poll_end > time()) ? 'POLL_RUN_TILL' : 'POLL_ENDED_AT'], $user->format_date($poll_end)) : '',
				'S_CAN_VOTE'			=> $s_can_vote,
				'S_DISPLAY_RESULTS'		=> $s_display_results,
				'S_IS_MULTI_CHOICE'		=> ($data['poll_max_options'] > 1) ? true : false,
				'S_POLL_ACTION'			=> $portalvote_url,
		
				'U_VIEW_TOPIC'			=> $viewtopic_url
			));

			foreach($poll_data as $pd)
			{
				$option_pct = ($poll_total_votes > 0) ? $pd['poll_option_total'] / $poll_total_votes : 0;
				$option_pct_txt = sprintf("%.1d%%", ($option_pct * 100));

				$template->assign_block_vars('poll.poll_option', array(
					'POLL_OPTION_ID' 		=> $pd['poll_option_id'],
					'POLL_OPTION_CAPTION' 	=> $pd['poll_option_text'],
					'POLL_OPTION_RESULT' 	=> $pd['poll_option_total'],
					'POLL_OPTION_PERCENT' 	=> $option_pct_txt,
					'POLL_OPTION_PCT'		=> round($option_pct * 100),
					'POLL_OPTION_IMG' 		=> $user->img('poll_center', $option_pct_txt, round($option_pct * 10)),
					'POLL_OPTION_VOTED'		=> (in_array($pd['poll_option_id'], $cur_voted_id)) ? true : false
				));
			}
		}
	}		

	$db->sql_freeresult($result);

	$template->assign_vars(array(
		'S_DISPLAY_POLL' => true,
		'S_HAS_POLL' => $has_poll,
		'POLL_LEFT_CAP_IMG'	=> $user->img('poll_left'),
		'POLL_RIGHT_CAP_IMG'=> $user->img('poll_right'),
	));
}

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/poll_random.html',
	));

?>