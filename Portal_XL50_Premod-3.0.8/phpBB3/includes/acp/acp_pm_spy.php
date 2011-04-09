<?php
/**
*
* @package acp_pm_spy
* @version $Id: 1.0.0
* @copyright (c) 2008 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/

class acp_pm_spy
{
	var $u_action;

	function main($id, $mode)
	{
		global $config, $db, $user, $template, $phpbb_root_path, $phpEx;
		
		// Start initial var setup
		$start			= request_var('start', 0);
		$sort_key		= request_var('sk', 'd');
		$sd = $sort_dir	= request_var('sd', 'd');
		$delete			= (!empty($_POST['delete'])) ? true : false;

		if ($delete)
		{
			$pm_spy_list = request_var('mark', array(''));

			// Restore the array to its correct format
			$pm_spy_list = str_replace('#', '"', $pm_spy_list);

			foreach ($pm_spy_list as $pm_msg_list)
			{
				$pm_list[] = unserialize($pm_msg_list);
			}

			if (!sizeof($pm_spy_list))
			{
				trigger_error('NO_PM_SELECTED');
			}

			if (!function_exists('delete_pm'))
			{
				include($phpbb_root_path . 'includes/functions_privmsgs.' . $phpEx);
			}

			foreach ($pm_list as $row)
			{
				delete_pm($row['user_id'], $row['msg_ids'], $row['folder_id']);
			}

			add_log('admin', 'LOG_PM_SPY');
		}

		$sort_dir = ($sort_dir == 'd') ? ' DESC' : ' ASC';

		switch ($sort_key)
		{
			case 'b':
				$order_by = 'u.username_clean' . $sort_dir;
				$order_sql = ' AND t.user_id = u.user_id ';
			break;

			case 'd':
				$order_by = 'p.message_time' . $sort_dir;
				$order_sql = ' AND t.user_id = u.user_id ';
			break;

			case 'f':
				$order_by = 'u.username_clean' . $sort_dir;
				$order_sql = ' AND t.author_id = u.user_id ';
			break;

			case 'i':
				$order_by = 'p.author_ip' . $sort_dir. ', u.username_clean ASC';
				$order_sql = ' AND t.user_id = u.user_id ';
			break;

			case 'p':
				$order_by = 't.folder_id' . $sort_dir. ', u.username_clean ASC';
				$order_sql = ' AND t.user_id = u.user_id ';
			break;

			case 't':
				$order_by = 'to_username' . $sort_dir;
				$order_sql = ' AND t.user_id = u.user_id ';
			break;			
		}
		
		// Get PM count for pagination
		$sql = 'SELECT COUNT(msg_id) AS total_pm
			FROM ' . PRIVMSGS_TO_TABLE;
		$result = $db->sql_query($sql);

		$total_pm = (int) $db->sql_fetchfield('total_pm');
		$db->sql_freeresult($result);

		if ($total_pm == 0)
		{
			trigger_error($user->lang['NO_PM_DATA']);
		}

		$this->tpl_name		= 'acp_pm_spy';
		$this->page_title	= 'ACP_PM_SPY';

		$pm_box_ary = array(
			PRIVMSGS_HOLD_BOX	=> $user->lang['PM_HOLDBOX'],
			PRIVMSGS_NO_BOX		=> $user->lang['PM_NOBOX'],
			PRIVMSGS_OUTBOX		=> $user->lang['PM_OUTBOX'],
			PRIVMSGS_SENTBOX	=> $user->lang['PM_SENTBOX'],
			PRIVMSGS_INBOX		=> $user->lang['PM_INBOX'],
		);

		$flags = (($config['auth_bbcode_pm']) ? OPTION_FLAG_BBCODE : 0) + (($config['auth_smilies_pm']) ? OPTION_FLAG_SMILIES : 0) + (($config['allow_post_links']) ? OPTION_FLAG_LINKS : 0);

		$sql = 'SELECT p.msg_id, p.message_subject, p.message_text, p.bbcode_uid, p.bbcode_bitfield, p.message_time, p.bcc_address, p.to_address, p.author_ip, t.user_id, t.author_id, t.folder_id, LOWER(u.username) AS to_username
			FROM ' . PRIVMSGS_TABLE . ' p, ' . PRIVMSGS_TO_TABLE . ' t, ' . USERS_TABLE . ' u
			WHERE p.msg_id = t.msg_id ' .
				$order_sql . '
			ORDER BY ' . $order_by;
		$result = $db->sql_query_limit($sql, $config['topics_per_page'], $start);

		while ($row = $db->sql_fetchrow($result))
		{			
			$template->assign_block_vars('pm_row', array(
				'AUTHOR_IP'			=> $row['author_ip'],
				'BCC'				=> ($row['bcc_address']) ? get_pm_user_data($row['user_id'], $row['author_id']) : '',
				'DATE'				=> $user->format_date($row['message_time']),
				'FOLDER'			=> ($row['folder_id'] > PRIVMSGS_INBOX) ? $user->lang['PM_SAVED'] : $pm_box_ary[$row['folder_id']],
				'FROM'				=> get_pm_user_data($row['author_id']),
				'IS_GROUP'			=> (strstr($row['to_address'], 'g')) ? 'G' : '',

				'LAST_VISIT_FROM'	=> get_last_visit($row['author_id']),
				'LAST_VISIT_TO'		=> ($row['to_address']) ? get_last_visit($row['user_id'], $row['author_id']) : '',

				// We have to replace " in this variable because the template system will not parse it.
				'PM_ID'				=> str_replace('"', '#', serialize(array('msg_ids' => $row['msg_id'], 'user_id' => $row['user_id'], 'folder_id' => $row['folder_id']))),
				
				// Create a unique key for the js script
				'PM_KEY'			=> $row['msg_id'] . $row['user_id'],
				'PM_SUBJECT'		=> $row['message_subject'],
				'PM_TEXT'			=> generate_text_for_display($row['message_text'], $row['bbcode_uid'], $row['bbcode_bitfield'], $flags),		
				'TO'				=> ($row['to_address']) ? get_pm_user_data($row['user_id'], $row['author_id']) : '',
			));
		}
		$db->sql_freeresult($result);

		$sort_by_text = array('f' => $user->lang['SORT_FROM'], 't' => $user->lang['SORT_TO'], 'b' => $user->lang['SORT_BCC'], 'p' => $user->lang['SORT_PM_BOX'], 'i' => $user->lang['SORT_IP'], 'd' => $user->lang['SORT_DATE']);
		$limit_days = array();
		$s_sort_key = $s_limit_days = $s_sort_dir = $u_sort_param = '';
		gen_sort_selects($limit_days, $sort_by_text, $sort_days, $sort_key, $sd, $s_limit_days, $s_sort_key, $s_sort_dir, $u_sort_param);

		$action = $this->u_action . '&amp;sk=' . $sort_key . '&amp;sd=' . $sd;

		$template->assign_vars(array(			
			'MESSAGE_COUNT'		=> $total_pm,
			'PAGINATION'		=> generate_pagination($action, $total_pm, $config['topics_per_page'], $start, true),	

			'S_INSTALL_CHECK'	=> file_exists($phpbb_root_path . 'install_pm_spy.' . $phpEx),
			'S_ON_PAGE'			=> on_page($total_pm, $config['topics_per_page'], $start),
			'S_SORT_KEY'		=> $s_sort_key,
			'S_SORT_DIR'		=> $s_sort_dir,

			'U_ACTION'			=> $this->u_action . '&amp;action=delete',
		));
	}
}

function get_last_visit($user_id, $author = 0)
{
	global $db, $config, $user;

	if ($user_id == $author)
	{
		$last_visit = '';
	}
	else
	{
		$sql = 'SELECT session_user_id, MAX(session_time) AS session_time
			FROM ' . SESSIONS_TABLE . '
			WHERE session_time >= ' . (time() - $config['session_length']) . '
				AND ' . $db->sql_in_set('session_user_id', $user_id) . '
			GROUP BY session_user_id';
		$result = $db->sql_query($sql);

		$session_times = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$session_times[$row['session_user_id']] = $row['session_time'];
		}
		$db->sql_freeresult($result);

		$sql = 'SELECT user_lastvisit
			FROM ' . USERS_TABLE . '
			WHERE ' . $db->sql_in_set('user_id', $user_id);
		$result = $db->sql_query($sql);
				
		while ($row = $db->sql_fetchrow($result))
		{	
			$session_time = (!empty($session_times[$user_id])) ? $session_times[$user_id] : 0;
			$last_visit = (!empty($session_time)) ? $session_time : $row['user_lastvisit'];
			$last_visit = $user->format_date($last_visit);
		}
		$db->sql_freeresult($result);
	}

	return $last_visit;
}

function get_pm_user_data($pm_user, $author = 0)
{
	global $db;

	if ($pm_user == $author)
	{
		$user_info = '';
	}
	else
	{
		$sql = 'SELECT username, user_colour
			FROM ' . USERS_TABLE . '
			WHERE ' . $db->sql_in_set('user_id', $pm_user);
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);

		$user_info = get_username_string('full',(int) $pm_user, $row['username'], $row['user_colour']);
	}
	return $user_info;
}

?>