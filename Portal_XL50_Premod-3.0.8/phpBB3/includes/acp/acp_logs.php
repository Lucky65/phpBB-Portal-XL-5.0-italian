<?php
/**
*
* @package acp
* @version $Id: acp_logs.php 10042 2009-08-22 02:56:05Z terrafrost $
* @copyright (c) 2005 phpBB Group
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
class acp_logs
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('mcp');

		// Set up general vars
		$action		= request_var('action', '');
		$forum_id	= request_var('f', 0);
		$topic_id	= request_var('t', 0);
		$start		= request_var('start', 0);
		$deletemark = (!empty($_POST['delmarked'])) ? true : false;
		$deleteall	= (!empty($_POST['delall'])) ? true : false;
		$marked		= request_var('mark', array(0));
		// AdvancedBlockMOD 1.0.3						
		$ip			= request_var('ip', 'ip');
		// AdvancedBlockMOD 1.0.3						

		// Sort keys
		$sort_days	= request_var('st', 0);
		$sort_key	= request_var('sk', 't');
		$sort_dir	= request_var('sd', 'd');

		$this->tpl_name = 'acp_logs';
		$this->log_type = constant('LOG_' . strtoupper($mode));

		// AdvancedBlockMOD 1.0.3						
		// Whois (special case)
		if ($action == 'whois')
		{
			include($phpbb_root_path . 'includes/functions_user.' . $phpEx);

			$user->add_lang('acp/users');

			$this->page_title = 'WHOIS';
			$this->tpl_name = 'simple_body';

			$user_ip = request_var('user_ip', '');
			$domain = gethostbyaddr($user_ip);
			$ipwhois = user_ipwhois($user_ip);

			$template->assign_vars(array(
				'MESSAGE_TITLE'		=> sprintf($user->lang['IP_WHOIS_FOR'], $domain),
				'MESSAGE_TEXT'		=> nl2br($ipwhois))
			);

			return;
		}
		// AdvancedBlockMOD 1.0.3						

		// Delete entries if requested and able
		if (($deletemark || $deleteall) && $auth->acl_get('a_clearlogs'))
		{
			if (confirm_box(true))
			{
				$where_sql = '';

				if ($deletemark && sizeof($marked))
				{
					$sql_in = array();
					foreach ($marked as $mark)
					{
						$sql_in[] = $mark;
					}
					$where_sql = ' AND ' . $db->sql_in_set('log_id', $sql_in);
					unset($sql_in);
				}

				if ($where_sql || $deleteall)
				{
					$sql = 'DELETE FROM ' . LOG_TABLE . "
						WHERE log_type = {$this->log_type}
						$where_sql";
					$db->sql_query($sql);

					add_log('admin', 'LOG_CLEAR_' . strtoupper($mode));
				}
			}
			else
			{
				confirm_box(false, $user->lang['CONFIRM_OPERATION'], build_hidden_fields(array(
					'f'			=> $forum_id,
					'start'		=> $start,
					'delmarked'	=> $deletemark,
					'delall'	=> $deleteall,
					'mark'		=> $marked,
					'st'		=> $sort_days,
					'sk'		=> $sort_key,
					'sd'		=> $sort_dir,
					'i'			=> $id,
					'mode'		=> $mode,
					'action'	=> $action))
				);
			}
		}

		// Sorting
		$limit_days = array(0 => $user->lang['ALL_ENTRIES'], 1 => $user->lang['1_DAY'], 7 => $user->lang['7_DAYS'], 14 => $user->lang['2_WEEKS'], 30 => $user->lang['1_MONTH'], 90 => $user->lang['3_MONTHS'], 180 => $user->lang['6_MONTHS'], 365 => $user->lang['1_YEAR']);
		$sort_by_text = array('u' => $user->lang['SORT_USERNAME'], 't' => $user->lang['SORT_DATE'], 'i' => $user->lang['SORT_IP'], 'o' => $user->lang['SORT_ACTION']);
		$sort_by_sql = array('u' => 'u.username_clean', 't' => 'l.log_time', 'i' => 'l.log_ip', 'o' => 'l.log_operation');

		$s_limit_days = $s_sort_key = $s_sort_dir = $u_sort_param = '';
		gen_sort_selects($limit_days, $sort_by_text, $sort_days, $sort_key, $sort_dir, $s_limit_days, $s_sort_key, $s_sort_dir, $u_sort_param);

		// Define where and sort sql for use in displaying logs
		$sql_where = ($sort_days) ? (time() - ($sort_days * 86400)) : 0;
		$sql_sort = $sort_by_sql[$sort_key] . ' ' . (($sort_dir == 'd') ? 'DESC' : 'ASC');

		$keywords = utf8_normalize_nfc(request_var('keywords', '', true));
		$keywords_param = !empty($keywords) ? '&amp;keywords=' . urlencode(htmlspecialchars_decode($keywords)) : '';

		$l_title = $user->lang['ACP_' . strtoupper($mode) . '_LOGS'];
		$l_title_explain = $user->lang['ACP_' . strtoupper($mode) . '_LOGS_EXPLAIN'];

		$this->page_title = $l_title;

		// Define forum list if we're looking @ mod logs
		if ($mode == 'mod')
		{
			$forum_box = '<option value="0">' . $user->lang['ALL_FORUMS'] . '</option>' . make_forum_select($forum_id);
			
			$template->assign_vars(array(
				'S_SHOW_FORUMS'			=> true,
				'S_FORUM_BOX'			=> $forum_box)
			);
		}

		// Grab log data
		$log_data = array();
		$log_count = 0;
		view_log($mode, $log_data, $log_count, $config['topics_per_page'], $start, $forum_id, 0, 0, $sql_where, $sql_sort, $keywords);

		$template->assign_vars(array(
			'L_TITLE'		=> $l_title,
			'L_EXPLAIN'		=> $l_title_explain,
			'U_ACTION'		=> $this->u_action,

			'S_ON_PAGE'		=> on_page($log_count, $config['topics_per_page'], $start),
			'PAGINATION'	=> generate_pagination($this->u_action . "&amp;$u_sort_param$keywords_param", $log_count, $config['topics_per_page'], $start, true),

			'S_LIMIT_DAYS'	=> $s_limit_days,
			'S_SORT_KEY'	=> $s_sort_key,
			'S_SORT_DIR'	=> $s_sort_dir,
			'S_CLEARLOGS'	=> $auth->acl_get('a_clearlogs'),
			'S_KEYWORDS'	=> $keywords,
			)
		);

		foreach ($log_data as $row)
		{
			$data = array();
				
// AdvancedBlockMOD 1.0.3						
			// $checks = array('viewtopic', 'viewlogs', 'viewforum');
			$checks = array('viewtopic', 'viewlogs', 'viewforum', 'dnsbllookup');
// AdvancedBlockMOD 1.0.3						
			
// phpBB Gallery integration
			if ($mode == 'gallery')
			{
				$checks = array('viewimage', 'viewalbum');
			}
// phpBB Gallery integration
			
			foreach ($checks as $check)
			{
				if (isset($row[$check]) && $row[$check])
				{
					$data[] = '<a href="' . $row[$check] . '">' . $user->lang['LOGVIEW_' . strtoupper($check)] . '</a>';
				}
			}

			$template->assign_block_vars('log', array(
				'USERNAME'			=> $row['username_full'],
				'REPORTEE_USERNAME'	=> ($row['reportee_username'] && $row['user_id'] != $row['reportee_id']) ? $row['reportee_username_full'] : '',

// AdvancedBlockMOD 1.0.3						
				// 'IP'				=> $row['ip'],
				'IP'				=> ($ip == 'hostname') ? gethostbyaddr_with_cache($row['ip']) : $row['ip'],
// AdvancedBlockMOD 1.0.3						
				'DATE'				=> $user->format_date($row['time']),
				'ACTION'			=> $row['action'],
				'DATA'				=> (sizeof($data)) ? implode(' | ', $data) : '',
				'ID'				=> $row['id'],
// AdvancedBlockMOD 1.0.3						
				'U_SHOW_IP'			=> $this->u_action . "&amp;start=$start&amp;ip=" . (($ip == 'ip') ? 'hostname' : 'ip'),
				'U_WHOIS'			=> $this->u_action . "&amp;action=whois&amp;user_ip={$row['ip']}",
// AdvancedBlockMOD 1.0.3						
				)
			);
		}
	}
}

// AdvancedBlockMOD 1.0.3						
/**
* performance increasing with using cache for DNS queries
* took idea from http://www.php.net/manual/en/function.gethostbyaddr.php#25091
**/
function gethostbyaddr_with_cache($address)
{
	global $dns_cache;

	if (isset($dns_cache[$address]))
	{
		return $dns_cache[$address];
	}
	else
	{
		$dns_cache[$address] = gethostbyaddr($address);
		return $dns_cache[$address];
	}
}
// AdvancedBlockMOD 1.0.3						

?>