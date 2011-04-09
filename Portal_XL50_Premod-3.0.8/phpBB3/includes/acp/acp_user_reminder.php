<?php

/**
*
* @package phpBB3
* @version $Id: acp_user_reminder.php 229 2009-05-21 16:25:26Z lefty74 $
* @copyright (c) 2008 lefty74
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

class acp_user_reminder
{
	var $u_action;

	function main($id, $mode)
	{
		global $user, $db, $config, $template;
		
		$user->add_lang(array('mods/acp_user_reminder','acp/users', 'ucp'));
		$this->tpl_name = 'acp_user_reminder_userrow';
		add_form_key('user_reminder');
		$action = request_var('action', '');
		$mark	= request_var('mark', array(0));
		$start	= request_var('start', 0);
		
		$excl_user_id_ary = $excl_user_type_ary = $protect_grp_user_ids = array();

		//lets exclude the ones the admins have spared
		$excl_user_id_ary = explode(',', $config['user_reminder_protected_users']);

		if ($config['user_reminder_protected_group'])
		{
			$sql = 'SELECT user_id
				FROM ' . USER_GROUP_TABLE . '
				WHERE ' . $db->sql_in_set('group_id', explode(",", $config['user_reminder_protected_group']));
			$result = $db->sql_query($sql);
			
			while ($row = $db->sql_fetchrow($result))
			{
				$protect_grp_user_ids[] = $row['user_id'];
			}
			$db->sql_freeresult($result);		
		
			$excl_user_id_ary = array_unique(array_merge($excl_user_id_ary, $protect_grp_user_ids));

		}
		
		//lets exclude the banned users	 
		$sql = 'SELECT ban_userid 
			FROM ' . BANLIST_TABLE . '
			WHERE ban_userid <> 0';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$excl_user_id_ary[] = $row['ban_userid'];
		}
		$db->sql_freeresult($result);
		
		//lets also exclude the guest user
		$excl_user_id_ary[] = ANONYMOUS;
		//lets exclude also some user types
		$excl_user_type_ary = array(USER_IGNORE, USER_INACTIVE);

		switch ($mode)
		{
			case 'zero_poster':
				$title = 'ACP_USER_REMINDER_ZERO_POSTER';
				$this->page_title = $user->lang[$title];
				$this->zero_poster($excl_user_id_ary, $excl_user_type_ary);
				$this->dropdown_action($action, $mark, 'user_reminder_zero_poster');
				$this->build_dropdown('user_reminder_zero_poster');
			break;

			case 'inactive':
				$title = 'ACP_USER_REMINDER_INACTIVE';
				$this->page_title = $user->lang[$title];
				$this->dropdown_action($action, $mark, 'user_reminder_inactive');
				$this->build_dropdown('user_reminder_inactive');
				$this->inactive($excl_user_id_ary, $excl_user_type_ary);
			break;
			
			case 'inactive_still':
				$title = 'ACP_USER_REMINDER_INACTIVE_STILL';
				$this->page_title = $user->lang[$title];
				$this->dropdown_action($action, $mark, 'user_reminder_inactive_still');
				$this->build_dropdown('user_reminder_inactive_still');
				$this->inactive_still($excl_user_id_ary, $excl_user_type_ary);
			break;
			
			case 'not_logged_in':
				$title = 'ACP_USER_REMINDER_NOT_LOGGED_IN';
				$this->page_title = $user->lang[$title];
				$this->dropdown_action($action, $mark, 'user_reminder_not_logged_in');
				$this->build_dropdown('user_reminder_not_logged_in');
				$this->not_logged_in($excl_user_id_ary, $excl_user_type_ary);
			break;
			
			case 'protected_users':
				$title = 'ACP_USER_REMINDER_PROTECTED_USERS';
				$this->page_title = $user->lang[$title];
				$this->dropdown_action($action, $mark, 'user_reminder_protected_users', $protect_grp_user_ids);
				$this->build_dropdown('user_reminder_protected_users');
				$this->protected_users();
			break;
			
			default:
				$title = 'ACP_USER_REMINDER_CONFIGURATION';
				$this->page_title = $user->lang[$title];
				$this->tpl_name = 'acp_user_reminder';
				$this->configuration();
			break;
		}

		$template->assign_vars(array(
			'USER_REMINDER_VERSION'		=> $config['urmod_version'],
	));
		
	}

	function configuration()
	{
		global $template, $user, $auth, $phpbb_root_path, $phpEx, $config;

		$submit 	= (isset($_POST['submit'])) ? true : false;

		$config_user_reminder_row = array(
		'user_reminder_enable' 								=> request_var('user_reminder_enable', 0),
		'user_reminder_zero_poster_enable' 					=> request_var('user_reminder_zero_poster_enable', 0),
		'user_reminder_ignore_no_email' 					=> request_var('user_reminder_ignore_no_email', 0),
		'user_reminder_delete_choice' 						=> request_var('user_reminder_delete_choice', 0),
		'user_reminder_zero_poster_days' 					=> request_var('user_reminder_zero_poster_days', 0),
		'user_reminder_inactive_enable' 					=> request_var('user_reminder_inactive_enable', 0),
		'user_reminder_inactive_days' 						=> request_var('user_reminder_inactive_days', 0),
		'user_reminder_inactive_still_enable' 				=> request_var('user_reminder_inactive_still_enable', 0),
		'user_reminder_inactive_still_days' 				=> request_var('user_reminder_inactive_still_days', 0),
		'user_reminder_not_logged_in_enable' 				=> request_var('user_reminder_not_logged_in_enable', 0),
		'user_reminder_not_logged_in_days' 					=> request_var('user_reminder_not_logged_in_days', 0),
		'user_reminder_inactive_still_opt_zero' 			=> request_var('user_reminder_inactive_still_opt_zero', 0),
		'user_reminder_inactive_still_opt_inactive' 		=> request_var('user_reminder_inactive_still_opt_inactive', 0),
		'user_reminder_inactive_still_opt_not_logged_in' 	=> request_var('user_reminder_inactive_still_opt_not_logged_in', 0),
		'user_reminder_log_opt_script' 						=> request_var('user_reminder_log_opt_script', 0),
		'user_reminder_log_opt_users_react' 				=> request_var('user_reminder_log_opt_users_react', 0),
		'user_reminder_log_opt_auto_emails' 				=> request_var('user_reminder_log_opt_auto_emails', 0),
		'user_reminder_users_per_page' 						=> request_var('user_reminder_users_per_page', 0),
		);

		$user_reminder_protected_users 						= request_var('user_reminder_protected_users', '');	
		$user_reminder_protected_group						= request_var('user_reminder_protected_group', array(0));
		$user_reminder_bcc_email							= strtolower(request_var('user_reminder_bcc_email', ''));
		
		if ($submit)
		{
			if (!check_form_key('user_reminder'))
			{
				trigger_error('FORM_INVALID');
			}
			
			if ( !function_exists('validate_email'))
			{
				include($phpbb_root_path . 'includes/functions_user.' . $phpEx);
			}
			$error = validate_email($user_reminder_bcc_email);

			if ($error && $user_reminder_bcc_email)
			{
				trigger_error($user->lang[$error . '_EMAIL'] . adm_back_link($this->u_action), E_USER_WARNING);
			}
			else 
			{
				set_config('user_reminder_bcc_email', (string) $user_reminder_bcc_email);	
			}
			
			foreach ($config_user_reminder_row as $config_name => $config_value)
			{
				set_config($config_name, (int) $config_value);
			}

			// ok, in case people put too many spaces after the comma, lets make it simple and remove them all before storage
			$user_reminder_protected_users = str_replace(' ', '', $user_reminder_protected_users);

			if( strlen(trim($user_reminder_protected_users, ',')) <= 255)
			{
				set_config('user_reminder_protected_users', (string) trim($user_reminder_protected_users, ','));	
			}
			else 
			{
				trigger_error(sprintf($user->lang['UR_TOO_MANY_CHARS'], strlen(trim($user_reminder_protected_users, ','))) . adm_back_link($this->u_action));
			}

			
			set_config('user_reminder_protected_group', (string) implode(",", $user_reminder_protected_group));

			add_log('admin', 'LOG_USER_REMINDER_CONFIG_UPDATED');
			trigger_error($user->lang['USER_REMINDER_CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}		

		//lets just make the id's look pretty and sort them numerical 
		$temp_sort_ids = $selected_groups = '';
		if ($config['user_reminder_protected_users'])
		{
			$temp_sort_ids_ary = explode(',', $config['user_reminder_protected_users']);
			sort($temp_sort_ids_ary);
			$temp_sort_ids = implode(',', $temp_sort_ids_ary);
	
			$temp_sort_ids = ltrim($temp_sort_ids, ',');
		}
		$selected_groups = 	explode(",", $config['user_reminder_protected_group']);
								
		$template->assign_vars(array(
			'U_ACTION'		=> $this->u_action,
			
			'USER_REMINDER_ENABLE'							=> $config['user_reminder_enable'],
			'USER_REMINDER_ZERO_POSTER_ENABLE'				=> $config['user_reminder_zero_poster_enable'],
			'USER_REMINDER_IGNORE_NO_EMAIL'					=> $config['user_reminder_ignore_no_email'],
			'USER_REMINDER_PROTECTED_USERS'					=> str_replace(',', ', ', $temp_sort_ids),
			'USER_REMINDER_DELETE_CHOICE'					=> $config['user_reminder_delete_choice'],
			'USER_REMINDER_ZERO_POSTER_DAYS'				=> $config['user_reminder_zero_poster_days'],
			'USER_REMINDER_INACTIVE_ENABLE'					=> $config['user_reminder_inactive_enable'],
			'USER_REMINDER_INACTIVE_DAYS'					=> $config['user_reminder_inactive_days'],
			'USER_REMINDER_INACTIVE_STILL_ENABLE'			=> $config['user_reminder_inactive_still_enable'],
			'USER_REMINDER_INACTIVE_STILL_DAYS'				=> $config['user_reminder_inactive_still_days'],
			'USER_REMINDER_NOT_LOGGED_IN_ENABLE'			=> $config['user_reminder_not_logged_in_enable'],
			'USER_REMINDER_NOT_LOGGED_IN_DAYS'				=> $config['user_reminder_not_logged_in_days'],
			'USER_REMINDER_INACTIVE_STILL_OPT_ZERO'			=> $config['user_reminder_inactive_still_opt_zero'],
			'USER_REMINDER_INACTIVE_STILL_OPT_INACTIVE'		=> $config['user_reminder_inactive_still_opt_inactive'],
			'USER_REMINDER_INACTIVE_STILL_OPT_NOT_LOGGED_IN'=> $config['user_reminder_inactive_still_opt_not_logged_in'],
			'USER_REMINDER_LOG_OPT_SCRIPT'					=> $config['user_reminder_log_opt_script'],
			'USER_REMINDER_LOG_OPT_USERS_REACT'				=> $config['user_reminder_log_opt_users_react'],
			'USER_REMINDER_LOG_OPT_AUTO_EMAILS'				=> $config['user_reminder_log_opt_auto_emails'],
			'USER_REMINDER_BCC_EMAIL'						=> $config['user_reminder_bcc_email'],
			'USER_REMINDER_USERS_PER_PAGE'					=> $config['user_reminder_users_per_page'],
			'USER_REMINDER_USERS_PER_PAGE_EXPLAIN'			=> sprintf($user->lang['USER_REMINDER_USERS_PER_PAGE_EXPLAIN'],$config['topics_per_page']),

			'U_FIND_USERNAME'	=> append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=searchuser&amp;form=acp_user_reminder&amp;field=user_reminder_protected_users'),

			'S_USER_REMINDER_PROTECTED_GROUP'			=> $this->group_protect_select_options_selected($selected_groups),
			'S_CAN_DELETE_USER'						=> ($auth->acl_get('a_userdel')) ? true : false,
			)
		);
	}

	function zero_poster($excl_user_id_ary, $excl_user_type_ary)
	{
		global $db, $template, $config, $user;
		$time = (int) (time() - ($config['user_reminder_zero_poster_days'] * 86400));
		
		$u_sort_param = $sql_choice = $sql_sort = '';
		
		$this->build_choice('user_reminder_zero_poster', $u_sort_param, $sql_choice, $sql_sort);
		$no_email_arry = array();		
		
		$start	= request_var('start', 0);				 
		
		$sql = 'SELECT COUNT(user_id) AS user_count
			FROM ' . USERS_TABLE . '
        	WHERE ' . $db->sql_in_set('user_id', $excl_user_id_ary, true) . '
				AND ' . $db->sql_in_set('user_type', $excl_user_type_ary, true) . "
				AND user_posts = 0
				AND user_regdate <= {$time}
				{$sql_choice}";
		$result = $db->sql_query($sql);
		$user_count = (int) $db->sql_fetchfield('user_count');
		$db->sql_freeresult($result);

	
		$sql = 'SELECT user_id, user_type, user_posts, user_regdate, user_allow_massemail, username, user_colour, user_reminder_zero_poster, user_reminder_inactive, user_reminder_not_logged_in, user_reminder_inactive_still
			FROM ' . USERS_TABLE . '
        	WHERE ' . $db->sql_in_set('user_id', $excl_user_id_ary, true) . '
				AND ' . $db->sql_in_set('user_type', $excl_user_type_ary, true) . "
				AND user_posts = 0
				AND user_regdate <= {$time}
				{$sql_choice}
			ORDER BY {$sql_sort}";
		$result = $db->sql_query_limit($sql, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start);


		while ($row = $db->sql_fetchrow($result))
		{

			$registered = (int) (floor((time() - $row['user_regdate']) / 86400));
//			$month = floor($registered / 30);
//			$day = floor($registered- ($month * 30));
			
			if (!$row['user_allow_massemail'])
			{
				$no_email_arry[] = $row['user_id'];
			}
		
			$template->assign_block_vars('userrow', array(
				'USERNAME'			=> (!$row['user_allow_massemail']) ? get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']) . '<span style="color: red;">&nbsp;(x)</span>' : get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']),
				'USER_ID'			=> $row['user_id'],
//				'USER_ROW'			=> ( $row['user_regdate'] ) ? sprintf($user->lang['TIME_SPENT'],$month, $day) : '-',
				'USER_ROW'			=> ( $row['user_regdate'] ) ? sprintf($user->lang['TIME_SPENT'],$registered) : '-',
				'USER_POSTS'		=> $row['user_posts'],
				'S_IS_ZERO_POSTS'	=> true,
				'USER_REMINDER_ZERO_POSTER'		=> ($row['user_reminder_zero_poster']) ? $user->format_date(($row['user_reminder_zero_poster']), 'd M Y') : '-',
				'USER_REMINDER_INACTIVE'		=> ($row['user_reminder_inactive']) ? $user->format_date(($row['user_reminder_inactive']), 'd M Y') : '-',
				'USER_REMINDER_NOT_LOGGED_IN'	=> ($row['user_reminder_not_logged_in']) ? $user->format_date(($row['user_reminder_not_logged_in']), 'd M Y') : '-',
				'USER_REMINDER_INACTIVE_STILL'	=> ($row['user_reminder_inactive_still']) ? $user->format_date(($row['user_reminder_inactive_still']), 'd M Y') : '-',
			));
		}
		$db->sql_freeresult($result);

		
		$template->assign_vars(array(
			'PAGINATION'	=> generate_pagination($this->u_action . "&amp;$u_sort_param", $user_count, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start, true),
			'S_ON_PAGE'	=> on_page($user_count, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start),
			'TOTAL_USERS'	=> ($user_count == 0) ? '' : sprintf($user->lang['TOTAL_USERS'], $user_count, $config['num_users']),
			'PERCENTAGE'	=> ($user_count == 0) ? '' : sprintf($user->lang['TOTAL_USERS_PCT'], (min(100, ($user_count / $config['num_users']) * 100))),

			'S_IS_ZERO_POSTS'	=> true,
			'S_IS_RECEIVE_NO_MAILS'	=> sizeof($no_email_arry) ? true : false,
			'L_USER_ROW'	=> $user->lang['USER_REGDATE'],
			'L_SUBTITLE'	=> $user->lang['ZERO_POSTS_TITLE'],
			'L_SUBTITLE_EXPLAIN'	=> sprintf($user->lang['ZERO_POSTS_TITLE_EXPLAIN'],$config['user_reminder_zero_poster_days']),
		));
	}

	function inactive($excl_user_id_ary, $excl_user_type_ary)
	{
		global $db, $template, $config, $user;
		
		$time = (int) (time() - ($config['user_reminder_inactive_days'] * 86400));
		$u_sort_param = $sql_choice = $sql_sort = '';
		$this->build_choice('user_reminder_inactive',$u_sort_param, $sql_choice, $sql_sort);
		$no_email_arry = $user_list_ary = array();	
		
		$start	= request_var('start', 0);				 
		
		$sql_array = array(
			'SELECT'	=> 'u.user_id, u.user_lastvisit, MAX(s.session_time) AS session_time',
		
			'FROM'		=> array(
				USERS_TABLE	=> 'u'
			),
		
			'LEFT_JOIN'	=> array(
				array(
					'FROM'	=> array(SESSIONS_TABLE => 's'),
					'ON'	=> 's.session_user_id = u.user_id'
				)
			),
		
			'WHERE'		=> $db->sql_in_set('u.user_id', $excl_user_id_ary, true) . '
						AND ' . $db->sql_in_set('u.user_type', $excl_user_type_ary, true) . "
						AND (u.user_lastvisit < $time OR session_time < $time )  
						$sql_choice",
		
			'GROUP_BY'	=> 'u.user_id, u.user_lastvisit'
		);
		
		$sql = $db->sql_build_query('SELECT', $sql_array);

		$result = $db->sql_query($sql);
		
		while ($row = $db->sql_fetchrow($result))
		{
			if( max($row['session_time'], $row['user_lastvisit']) < (int) $time && ($row['user_lastvisit'] <> 0 && !$row['session_time']))
			{
				$user_list_ary[] = $row['user_id'];
			}
		}
		$db->sql_freeresult($result);

		$user_count = sizeof($user_list_ary);

		if($user_count)
		{
			$sql_array = array(
				'SELECT'	=> 'u.user_id, u.user_posts, u.user_type, u.user_lastvisit, u.user_allow_massemail, u.username, u.user_colour, u.user_reminder_zero_poster, u.user_reminder_inactive, u.user_reminder_not_logged_in, u.user_reminder_inactive_still, MAX(s.session_time) AS session_time',
			
				'FROM'		=> array(
					USERS_TABLE	=> 'u'
				),
			
				'LEFT_JOIN'	=> array(
					array(
						'FROM'	=> array(SESSIONS_TABLE => 's'),
						'ON'	=> 's.session_user_id = u.user_id'
					)
				),
			
				'WHERE'		=> $db->sql_in_set('u.user_id', $user_list_ary, false),
			
				'GROUP_BY'	=> 'u.user_id, u.user_posts, u.user_type, u.user_lastvisit, u.user_allow_massemail, u.username, u.user_colour, u.user_reminder_zero_poster, u.user_reminder_inactive, u.user_reminder_not_logged_in, u.user_reminder_inactive_still',
				'ORDER_BY'	=> "u.{$sql_sort}"

			);
			
			$sql = $db->sql_build_query('SELECT', $sql_array);
			$result = $db->sql_query_limit($sql, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start);
	
			while ($row = $db->sql_fetchrow($result))
			{
				$lastvisit = (int) (floor((time() - max($row['session_time'], $row['user_lastvisit'])) / 86400));
				if (!$row['user_allow_massemail'])
				{
					$no_email_arry[] = $row['user_id'];
				}
				
				$user_name_row = get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']);

				// lets add the users post count to the name
				$user_name_row .= '&nbsp;(' . $row['user_posts'] . ')';
				// user does not want admins to send emails to them, lets mark that user
				$user_name_row .= (!$row['user_allow_massemail']) ? '<span style="color: red;">&nbsp;(x)</span>' : ''; 
				
				$template->assign_block_vars('userrow', array(
					'USERNAME'			=> $user_name_row,
					'USER_ID'			=> $row['user_id'],
					'USER_ROW'			=> ( $row['user_lastvisit'] ) ? sprintf($user->lang['TIME_SPENT'],$lastvisit) : '-',
		
					'USER_REMINDER_ZERO_POSTER'		=> ($row['user_reminder_zero_poster']) ? $user->format_date(($row['user_reminder_zero_poster']), 'd M Y') : '-',
					'USER_REMINDER_INACTIVE'		=> ($row['user_reminder_inactive']) ? $user->format_date(($row['user_reminder_inactive']), 'd M Y') : '-',
					'USER_REMINDER_NOT_LOGGED_IN'	=> ($row['user_reminder_not_logged_in']) ? $user->format_date(($row['user_reminder_not_logged_in']), 'd M Y') : '-',
					'USER_REMINDER_INACTIVE_STILL'	=> ($row['user_reminder_inactive_still']) ? $user->format_date(($row['user_reminder_inactive_still']), 'd M Y') : '-',
				));
			}
			$db->sql_freeresult($result);
		}
		
		$template->assign_vars(array(
			'PAGINATION'	=> generate_pagination($this->u_action . "&amp;$u_sort_param", $user_count, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start, true),
			'S_ON_PAGE'	=> on_page($user_count, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start),
			'TOTAL_USERS'	=> ($user_count == 0) ? '' : sprintf($user->lang['TOTAL_USERS'], $user_count, $config['num_users']),
			'PERCENTAGE'	=> ($user_count == 0) ? '' : sprintf($user->lang['TOTAL_USERS_PCT'], (min(100, ($user_count / $config['num_users']) * 100))),

			'S_IS_RECEIVE_NO_MAILS'	=> sizeof($no_email_arry) ? true : false,
			'L_USER_ROW'	=> $user->lang['USER_LASTVISIT'],
			'L_SUBTITLE'	=> $user->lang['INACTIVE_TITLE'],
			'L_SUBTITLE_EXPLAIN'	=> sprintf($user->lang['INACTIVE_TITLE_EXPLAIN'],$config['user_reminder_inactive_days']),
			)
		);
	}


	function not_logged_in($excl_user_id_ary, $excl_user_type_ary)
	{
		global $db, $template, $user, $config;

		$time = (int) (time() - ($config['user_reminder_not_logged_in_days'] * 86400));
		$u_sort_param = $sql_choice = $sql_sort = '';
		 
		$this->build_choice('user_reminder_not_logged_in',$u_sort_param, $sql_choice, $sql_sort);
		$no_email_arry = $user_list_ary = array();
				
		$start	= request_var('start', 0);				 
		
		$sql_array = array(
			'SELECT'	=> 'u.user_id, MAX(s.session_time) AS session_time',
		
			'FROM'		=> array(
				USERS_TABLE	=> 'u'
			),
		
			'LEFT_JOIN'	=> array(
				array(
					'FROM'	=> array(SESSIONS_TABLE => 's'),
					'ON'	=> 's.session_user_id = u.user_id'
				)
			),
		
			'WHERE'		=> $db->sql_in_set('u.user_id', $excl_user_id_ary, true) . '
						AND ' . $db->sql_in_set('u.user_type', $excl_user_type_ary, true) . "
						AND u.user_lastvisit = 0
						AND u.user_regdate <= $time  
						$sql_choice",
		
			'GROUP_BY'	=> 'u.user_id'
		);
		
		$sql = $db->sql_build_query('SELECT', $sql_array);

		$result = $db->sql_query($sql);
		
		while ($row = $db->sql_fetchrow($result))
		{
			$user_list_ary[] = $row['user_id'];
		}
		
		$db->sql_freeresult($result);		
		
		$user_count = sizeof($user_list_ary);

		
		if($user_count)
		{
			$sql_array = array(
				'SELECT'	=> 'u.user_id, u.user_type, u.user_lastvisit, u.user_regdate, u.user_allow_massemail, u.username, u.user_colour, u.user_reminder_zero_poster, u.user_reminder_inactive, u.user_reminder_not_logged_in, u.user_reminder_inactive_still, MAX(s.session_time) AS session_time',
			
				'FROM'		=> array(
					USERS_TABLE	=> 'u'
				),
			
				'LEFT_JOIN'	=> array(
					array(
						'FROM'	=> array(SESSIONS_TABLE => 's'),
						'ON'	=> 's.session_user_id = u.user_id'
					)
				),
			
				'WHERE'		=> $db->sql_in_set('u.user_id', $user_list_ary),
			
				'GROUP_BY'	=> 'u.user_id, u.user_type, u.user_lastvisit, u.user_regdate, u.user_allow_massemail, u.username, u.user_colour, u.user_reminder_zero_poster, u.user_reminder_inactive, u.user_reminder_not_logged_in, u.user_reminder_inactive_still',
			'ORDER_BY'	=> "u.{$sql_sort}"
			);
			
			$sql = $db->sql_build_query('SELECT', $sql_array);
			
			$result = $db->sql_query_limit($sql, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start);
			while ($row = $db->sql_fetchrow($result))
			{
				if (!$row['session_time'])
				{
					$lastvisit = (int) (floor((time() - $row['user_regdate']) / 86400));
					if (!$row['user_allow_massemail'])
					{
						$no_email_arry[] = $row['user_id'];
					}
		
					$template->assign_block_vars('userrow', array(
						'USERNAME'			=> (!$row['user_allow_massemail']) ? get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']) . '<span style="color: red;">&nbsp;(x)</span>' : get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']),
						'USER_ID'			=> $row['user_id'],
						'USER_ROW'			=> ( $row['user_regdate'] ) ? sprintf($user->lang['TIME_SPENT'], $lastvisit) : '-',
			
						'USER_REMINDER_ZERO_POSTER'		=> ($row['user_reminder_zero_poster']) ? $user->format_date(($row['user_reminder_zero_poster']), 'd M Y') : '-',
						'USER_REMINDER_INACTIVE'		=> ($row['user_reminder_inactive']) ? $user->format_date(($row['user_reminder_inactive']), 'd M Y') : '-',
						'USER_REMINDER_NOT_LOGGED_IN'	=> ($row['user_reminder_not_logged_in']) ? $user->format_date(($row['user_reminder_not_logged_in']), 'd M Y') : '-',
						'USER_REMINDER_INACTIVE_STILL'	=> ($row['user_reminder_inactive_still']) ? $user->format_date(($row['user_reminder_inactive_still']), 'd M Y') : '-',
	
					));
				}
			}
			$db->sql_freeresult($result);
		}
		$template->assign_vars(array(
			'PAGINATION'	=> generate_pagination($this->u_action . "&amp;$u_sort_param", $user_count, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start, true),
			'S_ON_PAGE'	=> on_page($user_count, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start),
			'TOTAL_USERS'	=> ($user_count == 0) ? '' : sprintf($user->lang['TOTAL_USERS'], $user_count, $config['num_users']),
			'PERCENTAGE'	=> ($user_count == 0) ? '' : sprintf($user->lang['TOTAL_USERS_PCT'], (min(100, ($user_count / $config['num_users']) * 100))),

			'S_IS_RECEIVE_NO_MAILS'	=> sizeof($no_email_arry) ? true : false,
			'L_USER_ROW'	=> $user->lang['USER_REGDATE'],
			'L_SUBTITLE'	=> $user->lang['NOT_LOGGED_IN_TITLE'],
			'L_SUBTITLE_EXPLAIN'	=> $user->lang['NOT_LOGGED_IN_TITLE_EXPLAIN'],
			)
		);
	}

	
	function inactive_still($excl_user_id_ary, $excl_user_type_ary)
	{
		global $db, $template, $config, $user;
		$time = (int) (time() - ($config['user_reminder_inactive_still_days'] * 86400));
		$u_sort_param = $sql_choice = $sql_sort = '';
		$this->build_choice('user_reminder_inactive_still',$u_sort_param, $sql_choice, $sql_sort);
		$no_email_arry = $user_list_ary = array();		
		
		$and_choice = '';
		if ( ($config['user_reminder_inactive_still_opt_zero'] && $config['user_reminder_inactive_still_opt_inactive'] && $config['user_reminder_inactive_still_opt_not_logged_in']) || (!$config['user_reminder_inactive_still_opt_zero'] && !$config['user_reminder_inactive_still_opt_inactive'] && !$config['user_reminder_inactive_still_opt_not_logged_in']) )
		{
			$and_choice = '(user_reminder_zero_poster < ' . $time  . ' AND user_reminder_zero_poster > 0) OR (user_reminder_inactive > 0 AND user_reminder_inactive <  ' . (int)$time  . ') OR (user_reminder_not_logged_in > 0 AND user_reminder_not_logged_in < ' . $time  . ')';
		}
		else
		{
			$and_choice = ($config['user_reminder_inactive_still_opt_zero']) ? '(user_reminder_zero_poster < ' . $time  . ' AND user_reminder_zero_poster > 0)' : '';
			$and_choice .= ($config['user_reminder_inactive_still_opt_inactive']) ? (($and_choice != '') ? ' OR ' : '') . '(user_reminder_inactive > 0 AND user_reminder_inactive <  ' . $time  . ')' : '';
			$and_choice .= ($config['user_reminder_inactive_still_opt_not_logged_in']) ?  (($and_choice != '') ? ' OR ' : '') . '(user_reminder_not_logged_in > 0 AND user_reminder_not_logged_in < ' . $time  . ')' : '';
		}


		$start	= request_var('start', 0);				 
		
		$sql = 'SELECT user_id
			FROM ' . USERS_TABLE . '
         	WHERE ' . $db->sql_in_set('user_id', $excl_user_id_ary, true) . '
				AND ' . $db->sql_in_set('user_type', $excl_user_type_ary, true) . 
				$sql_choice . "
				AND ( $and_choice )				
			ORDER BY {$sql_sort}";
		$result = $db->sql_query($sql);
		
		while ($row = $db->sql_fetchrow($result))
		{
			$user_list_ary[] = $row['user_id'];
		}
		
		$db->sql_freeresult($result);		
		$user_count = sizeof($user_list_ary);

		
		
		if($user_count)
		{
			$sql = 'SELECT user_id, user_posts, user_reminder_zero_poster, user_reminder_inactive, user_reminder_not_logged_in, user_id, user_type, user_lastvisit, user_allow_massemail, username, user_colour, user_reminder_inactive_still 
				FROM ' . USERS_TABLE . '
	         	WHERE ' . $db->sql_in_set('user_id', $user_list_ary) . "
				ORDER BY {$sql_sort}";
			$result = $db->sql_query_limit($sql, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start);
			
			while ($row = $db->sql_fetchrow($result))
			{
				$lastvisit = (int) (floor(( time() - $row['user_lastvisit']) / 86400));
				if (!$row['user_allow_massemail'])
				{
					$no_email_arry[] = $row['user_id'];
				}

				$user_name_row = get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']);

				// lets add the users post count to the name
				$user_name_row .= '&nbsp;(' . $row['user_posts'] . ')';
				// user does not want admins to send emails to them, lets mark that user
				$user_name_row .= (!$row['user_allow_massemail']) ? '<span style="color: red;">&nbsp;(x)</span>' : ''; 
	
				$template->assign_block_vars('userrow', array(
					'USERNAME'			=> $user_name_row,
					'USER_ROW'			=> ( $row['user_lastvisit'] ) ? sprintf($user->lang['TIME_SPENT'],$lastvisit) : '-',
					'USER_ID'			=> $row['user_id'],
	
					'USER_REMINDER_ZERO_POSTER'		=> ($row['user_reminder_zero_poster']) ? $user->format_date(($row['user_reminder_zero_poster']), 'd M Y') : '-',
					'USER_REMINDER_INACTIVE'		=> ($row['user_reminder_inactive']) ? $user->format_date(($row['user_reminder_inactive']), 'd M Y') : '-',
					'USER_REMINDER_NOT_LOGGED_IN'	=> ($row['user_reminder_not_logged_in']) ? $user->format_date(($row['user_reminder_not_logged_in']), 'd M Y') : '-',
					'USER_REMINDER_INACTIVE_STILL'	=> ($row['user_reminder_inactive_still']) ? $user->format_date(($row['user_reminder_inactive_still']), 'd M Y') : '-',
				));
			}
			$db->sql_freeresult($result);
		}
		
		$template->assign_vars(array(
			'PAGINATION'	=> generate_pagination($this->u_action . "&amp;$u_sort_param", $user_count, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start, true),
			'S_ON_PAGE'	=> on_page($user_count, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start),
			'TOTAL_USERS'	=> ($user_count == 0) ? '' : sprintf($user->lang['TOTAL_USERS'], $user_count, $config['num_users']),
			'PERCENTAGE'	=> ($user_count == 0) ? '' : sprintf($user->lang['TOTAL_USERS_PCT'], (min(100, ($user_count / $config['num_users']) * 100))),

			'S_IS_RECEIVE_NO_MAILS'	=> sizeof($no_email_arry) ? true : false,
			'L_USER_ROW'	=> $user->lang['USER_LASTVISIT'],
			'L_SUBTITLE'	=> $user->lang['INACTIVE_STILL_TITLE'],
			'L_SUBTITLE_EXPLAIN'	=> sprintf($user->lang['INACTIVE_STILL_TITLE_EXPLAIN'], $config['user_reminder_inactive_still_days']),
			)
		);
	}
	
	function protected_users()
	{
		global $db, $template, $config, $user;
		
		$user_name_row = '';
		$protected_in_group_ary = $protected_users_ids = $protected_grp_ids = $protected_grp_user_ids = $no_email_arry = array();
		$protected_users_ids = ($config['user_reminder_protected_users']) ? explode(",", $config['user_reminder_protected_users']) : array();
		
		$start	= request_var('start', 0);
		
		if ($config['user_reminder_protected_group'])
		{
			$sql = 'SELECT user_id
				FROM ' . USER_GROUP_TABLE . '
				WHERE ' . $db->sql_in_set('group_id', explode(",", $config['user_reminder_protected_group']));
			$result = $db->sql_query($sql);
			
			while ($row = $db->sql_fetchrow($result))
			{
				$protected_grp_user_ids[] = $row['user_id'];
			}
			$db->sql_freeresult($result);		
		
			$protected_users_ids = array_unique(array_merge($protected_users_ids, $protected_grp_user_ids));
		}
		
		$user_count = sizeof($protected_users_ids);

		if ($user_count)
		{
			// lets flip the array to find values instead of using in_array
			$protected_grp_user_ids = array_flip($protected_grp_user_ids);
		
			$sql = 'SELECT user_id, user_lastvisit, user_allow_massemail, username, user_colour ,user_reminder_zero_poster, user_reminder_inactive, user_reminder_not_logged_in, user_reminder_inactive_still
				FROM ' . USERS_TABLE . '
	         	WHERE ' . $db->sql_in_set('user_id', $protected_users_ids) . '
				ORDER BY username ASC';
			$result = $db->sql_query_limit($sql, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start);
			
			while ($row = $db->sql_fetchrow($result))
			{
				$lastvisit = (int) (floor((time() - $row['user_lastvisit']) / 86400));
	
				if (!$row['user_allow_massemail'])
				{
					$no_email_arry[] = $row['user_id'];
				}
				
				$user_name_row = get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']);

				// user does not want admins to send emails to them, lets mark that user
				$user_name_row .= (!$row['user_allow_massemail']) ? '<span style="color: red;">&nbsp;(x)</span>' : ''; 
				
				// user is in a protected user group, lets mark that too
				if(isset($protected_grp_user_ids[$row['user_id']]))
				{
					$user_name_row .= '<span style="color: purple;">&nbsp;[x]</span>'; 
					// lets just store the id in an array so that we know if any users are in protected groups
					$protected_in_group_ary[] = $row['user_id'];
				}
				
				
				$template->assign_block_vars('userrow', array(
					'USERNAME'			=> $user_name_row,
					'USER_ROW'			=> ( $row['user_lastvisit'] ) ? sprintf($user->lang['TIME_SPENT'],$lastvisit) : '-',
					'USER_ID'			=> $row['user_id'],
	
					'USER_REMINDER_ZERO_POSTER'		=> ($row['user_reminder_zero_poster']) ? $user->format_date(($row['user_reminder_zero_poster']), 'd M Y') : '-',
					'USER_REMINDER_INACTIVE'		=> ($row['user_reminder_inactive']) ? $user->format_date(($row['user_reminder_inactive']), 'd M Y') : '-',
					'USER_REMINDER_NOT_LOGGED_IN'	=> ($row['user_reminder_not_logged_in']) ? $user->format_date(($row['user_reminder_not_logged_in']), 'd M Y') : '-',
					'USER_REMINDER_INACTIVE_STILL'	=> ($row['user_reminder_inactive_still']) ? $user->format_date(($row['user_reminder_inactive_still']), 'd M Y') : '-',
				));
			}
			$db->sql_freeresult($result);
		}
		
		$template->assign_vars(array(
			'PAGINATION'	=> generate_pagination($this->u_action, $user_count, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start, true),
			'S_ON_PAGE'	=> on_page($user_count, ($config['user_reminder_users_per_page']) ? $config['user_reminder_users_per_page'] : $config['topics_per_page'], $start),
			'TOTAL_USERS'	=> ($user_count == 0) ? '' : sprintf($user->lang['TOTAL_USERS'], $user_count, $config['num_users']),
			'PERCENTAGE'	=> ($user_count == 0) ? '' : sprintf($user->lang['TOTAL_USERS_PCT'], (min(100, ($user_count / $config['num_users']) * 100))),

			'S_IS_RECEIVE_NO_MAILS'	=> sizeof($no_email_arry) ? true : false,
			'S_IS_USERS_IN_GROUP'	=> sizeof($protected_in_group_ary) ? true : false,
			'S_IS_PROTECTED_USERS'	=> true,
			'L_USER_ROW'			=> $user->lang['USER_LASTVISIT'],
			'L_SUBTITLE'			=> $user->lang['PROTECTED_USERS_TITLE'],
			'L_SUBTITLE_EXPLAIN'	=> $user->lang['PROTECTED_USERS_TITLE_EXPLAIN'],
			)
		);
	}

	function dropdown_action($action, $mark, $case, $protect_grp_user_ids = false)
	{
		global $user, $auth, $phpbb_root_path, $db, $phpEx, $config;
		
		if ($case == 'user_reminder_protected_users')
		{
			switch ($action)
			{
				case $case:
					if (sizeof($mark))
					{
						if (confirm_box(true))
						{
							$protected_user_ids = $new_protected_user_ids_ary = $new_mark = array();
							$new_protected_user_ids = '';
							
							//before we start, lets take out the users that are in a protected group
							$new_mark = array_diff($mark, $protect_grp_user_ids);
							
							//here we do a bit of putting current protected users in an array, take out the ones from the $new_mark array and save it							
							$protected_user_ids = explode(',', $config['user_reminder_protected_users']);
							$new_protected_user_ids_ary = array_diff($protected_user_ids, $new_mark);
							$new_protected_user_ids = implode(',', $new_protected_user_ids_ary);
										
							set_config('user_reminder_protected_users', (string) ltrim($new_protected_user_ids, ','));
							
							if (sizeof($new_mark))
							{
								$sql_id = ' IN (' . implode(', ', $new_mark) . ')';
								$sql = 'SELECT user_id, username_clean 
									FROM ' . USERS_TABLE . " 
									WHERE user_id $sql_id";
								$result = $db->sql_query($sql);
								
								$user_id_ary = $username_ary = $user_list_ary = array();
								while ($row = $db->sql_fetchrow($result))
								{
										$user_id_ary[] = (int) $row['user_id'];
										$username_ary[] = (string) $row['username_clean'];
								}
								$db->sql_freeresult($result);
									
									add_log('admin', 'LOG_USER_UNPROTECTED', implode(', ', $username_ary));
									trigger_error($user->lang['USER_UPDATED'] . adm_back_link($this->u_action));								
							}
							else 
							{
								trigger_error($user->lang['NO_USER_UNPROTECTED'] . adm_back_link($this->u_action), E_USER_WARNING);								
							}

						}
						else
						{
							confirm_box(false, $user->lang['CONFIRM_OPERATION'], build_hidden_fields(array(
								'mark'		=> $mark,
								'action'	=> $action))
							);
						}
					}
				break;
	
				case 'user_delete':
					// lets just be sure that only an admin with user delete rights is here
					if ( !$auth->acl_get('a_userdel'))
					{
						trigger_error($user->lang['NO_AUTH_OPERATION'] . adm_back_link($this->u_action), E_USER_WARNING);
					}
					
					if ( !function_exists('user_delete'))
					{
						include($phpbb_root_path . 'includes/functions_user.' . $phpEx);
					}
					if (sizeof($mark))
					{
						if (confirm_box(true))
						{
							$email_delete = request_var('email_delete', 0);
							$sql_id = ' IN (' . implode(', ', $mark) . ')';
							$sql = 'SELECT user_id, user_type, username_clean, username, user_allow_massemail, user_email, user_notify_type, user_jabber, user_lang
								FROM ' . USERS_TABLE . " 
								WHERE user_id $sql_id";
							$result = $db->sql_query($sql);
	
							$username_ary = $username_neg_ary = $user_list_ary = array();
							$delete_type = ($config['user_reminder_delete_choice'] == RETAIN_POSTS) ? 'retain' : 'remove';
							while ($row = $db->sql_fetchrow($result))
							{
								// Some basic rules, you can't delete a founder, the guest user(should not happen anyway but better be sure) or yourself ;P
								if ($row['user_type'] != USER_FOUNDER || ($row['user_id'] != (ANONYMOUS || $user->data['user_id'])) )
								{
	
									$username_ary[] = (string) $row['username_clean'];
									user_delete($delete_type, $row['user_id'], $row['username']);
									if ($email_delete && ($row['user_allow_massemail']  || $config['user_reminder_ignore_no_email'] == OVERRIDE) && trim($row['user_email']))
									{
										$user_list_ary[] = array(
											'method'	=> $row['user_notify_type'],
											'email'		=> $row['user_email'],
											'jabber'	=> $row['user_jabber'],
											'name'		=> $row['username'],
											'lang'		=> $row['user_lang']
										);
									}
								}
								else 
								{
									$username_neg_ary[] = (string) $row['username_clean'];
								}
							}	
							$db->sql_freeresult($result);
			
							if (sizeof($username_ary))
							{
	
								if(!function_exists('send_reminder_emails'))
								{
	    							include($phpbb_root_path . 'includes/functions_user_reminder.' . $phpEx);
								}
	    						send_reminder_emails($user_list_ary, 'user_reminder_delete_notify');
	
								$message = $user->lang['USERS_DELETED'];
								$message .= sizeof($username_neg_ary) ? '<br />' . sprintf($user->lang['ERROR_USERS_DELETED'], implode(', ', $username_neg_ary)) : '';
								
								add_log('admin', 'LOG_USER_DELETED', implode(', ', $username_ary));
								trigger_error($message . adm_back_link($this->u_action));
							}
							else 
							{
								trigger_error((sprintf($user->lang['ERROR_USERS_DELETED'], implode(', ', $username_neg_ary)))  . adm_back_link($this->u_action), E_USER_WARNING);
							}
						}
						else
						{
							
							$message = $user->lang['DELETE_USER_CONFIRM_OPERATION'];
							$message .= $user->lang['CONFIRM_OPERATION'];
							confirm_box(false, $message, build_hidden_fields(array(
								'mark'		=> $mark,
								'action'	=> $action)), 'confirm_body_user_reminder_delete.html'
							);
						}
					}		
				break;
				case 'clear_reminders':
					if (sizeof($mark))
					{
						if (confirm_box(true))
						{
							$sql_id = ' IN (' . implode(', ', $mark) . ')';
							$sql = 'SELECT user_id, username_clean 
								FROM ' . USERS_TABLE . " 
								WHERE user_id $sql_id";
							$result = $db->sql_query($sql);
	
							$user_id_ary = array();
							while ($row = $db->sql_fetchrow($result))
							{
								$user_id_ary[] = (int) $row['user_id'];
								$username_ary[] = (string) $row['username_clean'];
							}
							$db->sql_freeresult($result);
							$db->sql_transaction('begin');
	
							$sql_ary = array(
								'user_reminder_inactive'		=> 0,
								'user_reminder_zero_poster'		=> 0,
								'user_reminder_not_logged_in'	=> 0,
								'user_reminder_inactive_still'	=> 0,
							);
	
							$sql = 'UPDATE ' . USERS_TABLE . '
								SET ' . $db->sql_build_array('UPDATE', $sql_ary) . "
								WHERE user_id $sql_id";
							$db->sql_query($sql);
	
							$db->sql_transaction('commit');
	
	
							add_log('admin', 'LOG_USER_REMINDER_CLEARED', implode(', ', $username_ary));
							trigger_error($user->lang['USER_UPDATED'] . adm_back_link($this->u_action));
						}
						else
						{
							confirm_box(false, $user->lang['CONFIRM_OPERATION'], build_hidden_fields(array(
								'mark'		=> $mark,
								'action'	=> $action))
							);
						}
					}
			
				break;
			}
			
		}
		else 
		{
			switch ($action)
			{
				case (string) $case:
					if (sizeof($mark))
					{
						if (confirm_box(true))
						{
							$sql_id = ' IN (' . implode(', ', $mark) . ')';
							$sql = 'SELECT user_id, user_allow_massemail, username_clean, user_notify_type, user_email, user_jabber, username, user_lang 
								FROM ' . USERS_TABLE . " 
								WHERE user_id $sql_id";
							$result = $db->sql_query($sql);
							
							$user_id_ary = $username_ary = $user_list_ary = array();
							while ($row = $db->sql_fetchrow($result))
							{
								if($row['user_allow_massemail'] || $config['user_reminder_ignore_no_email'] == OVERRIDE)
								{
									$user_id_ary[] = (int) $row['user_id'];
									$username_ary[] = (string) $row['username_clean'];
		
									if (trim($row['user_email']))
									{
										$user_list_ary[] = array(
											'method'	=> $row['user_notify_type'],
											'email'		=> $row['user_email'],
											'jabber'	=> $row['user_jabber'],
											'name'		=> $row['username'],
											'lang'		=> $row['user_lang']
										);
									}
								}
							}
							$db->sql_freeresult($result);
							$db->sql_transaction('begin');
							
							if (sizeof($user_list_ary))
							{						
								$sql_id = ' IN (' . implode(', ', $user_id_ary) . ')';
								$sql_ary = array(
									(string) $case		=> (int) time(),
								);
		
								$sql = 'UPDATE ' . USERS_TABLE . '
									SET ' . $db->sql_build_array('UPDATE', $sql_ary) . "
									WHERE user_id $sql_id";
								$db->sql_query($sql);
		
								$db->sql_transaction('commit');
		
									if(!function_exists('send_reminder_emails'))
									{
		    							include($phpbb_root_path . 'includes/functions_user_reminder.' . $phpEx);
									}
		    						send_reminder_emails($user_list_ary, (string) $case);
								
								add_log('admin', 'LOG_' . strtoupper($case), implode(', ', $username_ary));
								trigger_error($user->lang['USER_UPDATED'] . adm_back_link($this->u_action));
							}
							else
							{
								trigger_error($user->lang['ERROR_USER_UPDATED'] . adm_back_link($this->u_action), E_USER_WARNING);
							}
						}
						else
						{
							// lets check if we want to carry out an action that has previously been done already and make sure the admin is aware of this
							$sql_id = ' IN (' . implode(', ', $mark) . ')';
							$sql = 'SELECT user_id, username, user_allow_massemail, ' . (string) $case . '
								FROM ' . USERS_TABLE . " 
								WHERE user_id $sql_id
								AND ($case > 0 OR user_allow_massemail = 0)";
							$result = $db->sql_query($sql);
	
							$no_emails_ary = $already_emailed_ary = array();
							while ($row = $db->sql_fetchrow($result))
							{
								if(!$row['user_allow_massemail'] && $config['user_reminder_ignore_no_email'] != OVERRIDE)
								{
									$no_emails_ary[] = $row['username'];
								}
								elseif($row['' . (string) $case . ''])
								{
									$already_emailed_ary[] = $row['user_id'];							
								}
							}
							$db->sql_freeresult($result);
							
							$lang_confirm = (sizeof($already_emailed_ary)) ? $user->lang['ERROR_EMAIL_CONFIRM_OPERATION'] : '';
							$lang_confirm .= (sizeof($no_emails_ary)) ? $user->lang['ERROR_NOEMAIL_CONFIRM_OPERATION'] : '';
							$lang_confirm .= $user->lang['CONFIRM_OPERATION'];
	
							confirm_box(false, $lang_confirm, build_hidden_fields(array(
								'mark'		=> $mark,
								'action'	=> $action))
							);
						}
					}
				break;
	
				case $case . '_clear':
					
					if (sizeof($mark))
					{
						if (confirm_box(true))
						{
							$sql_id = ' IN (' . implode(', ', $mark) . ')';
							$sql = 'SELECT user_id, username_clean 
								FROM ' . USERS_TABLE . " 
								WHERE user_id $sql_id";
							$result = $db->sql_query($sql);
	
							$user_id_ary = array();
							while ($row = $db->sql_fetchrow($result))
							{
								$user_id_ary[] = (int) $row['user_id'];
								$username_ary[] = (string) $row['username_clean'];
							}
							$db->sql_freeresult($result);
							$db->sql_transaction('begin');
	
							$sql_ary = array(
								$case		=> 0,
							);
	
							$sql = 'UPDATE ' . USERS_TABLE . '
								SET ' . $db->sql_build_array('UPDATE', $sql_ary) . "
								WHERE user_id $sql_id";
							$db->sql_query($sql);
	
							$db->sql_transaction('commit');
	
	
							add_log('admin', 'LOG_' . strtoupper($case) . '_CLEAR', implode(', ', $username_ary));
							trigger_error($user->lang['USER_UPDATED'] . adm_back_link($this->u_action));
						}
						else
						{
							confirm_box(false, $user->lang['CONFIRM_OPERATION'], build_hidden_fields(array(
								'mark'		=> $mark,
								'action'	=> $action))
							);
						}
					}
			
				break;
				case 'user_delete':
					// lets just be sure that only an admin with user delete rights is here
					if ( !$auth->acl_get('a_userdel'))
					{
						trigger_error($user->lang['NO_AUTH_OPERATION'] . adm_back_link($this->u_action), E_USER_WARNING);
					}
					
					if ( !function_exists('user_delete'))
					{
						include($phpbb_root_path . 'includes/functions_user.' . $phpEx);
					}
					if (sizeof($mark))
					{
						if (confirm_box(true))
						{
							$email_delete = request_var('email_delete', 0);
							$sql_id = ' IN (' . implode(', ', $mark) . ')';
							$sql = 'SELECT user_id, user_type, username_clean, username, user_allow_massemail, user_notify_type, user_jabber, user_lang, user_email
								FROM ' . USERS_TABLE . " 
								WHERE user_id $sql_id";
							$result = $db->sql_query($sql);
	
							$username_ary = $username_neg_ary = $user_list_ary = array();
							$delete_type = ($config['user_reminder_delete_choice'] == RETAIN_POSTS) ? 'retain' : 'remove';
							while ($row = $db->sql_fetchrow($result))
							{
								// Some basic rules, you can't delete a founder, the guest user(should not happen anyway but better be sure) or yourself ;P
								if ($row['user_type'] != USER_FOUNDER || ($row['user_id'] != (ANONYMOUS || $user->data['user_id'])) )
								{
	
									$username_ary[] = (string) $row['username_clean'];
									user_delete($delete_type, $row['user_id'], $row['username']);
									if ($email_delete && ($row['user_allow_massemail']  || $config['user_reminder_ignore_no_email'] == OVERRIDE) && trim($row['user_email']))
									{
										$user_list_ary[] = array(
											'method'	=> $row['user_notify_type'],
											'email'		=> $row['user_email'],
											'jabber'	=> $row['user_jabber'],
											'name'		=> $row['username'],
											'lang'		=> $row['user_lang']
										);
									}
								}
								else 
								{
									$username_neg_ary[] = (string) $row['username_clean'];
								}
							}	
							$db->sql_freeresult($result);
			
							if (sizeof($username_ary))
							{
	
								if(!function_exists('send_reminder_emails'))
								{
	    							include($phpbb_root_path . 'includes/functions_user_reminder.' . $phpEx);
								}
	    						send_reminder_emails($user_list_ary, 'user_reminder_delete_notify');
	
								$message = $user->lang['USERS_DELETED'];
								$message .= sizeof($username_neg_ary) ? '<br />' . sprintf($user->lang['ERROR_USERS_DELETED'], implode(', ', $username_neg_ary)) : '';
								
								add_log('admin', 'LOG_USER_DELETED', implode(', ', $username_ary));
								trigger_error($message . adm_back_link($this->u_action));
							}
							else 
							{
								trigger_error((sprintf($user->lang['ERROR_USERS_DELETED'], implode(', ', $username_neg_ary)))  . adm_back_link($this->u_action), E_USER_WARNING);
							}
						}
						else
						{
							
							$message = $user->lang['DELETE_USER_CONFIRM_OPERATION'];
							$message .= $user->lang['CONFIRM_OPERATION'];
							confirm_box(false, $message, build_hidden_fields(array(
								'mark'		=> $mark,
								'action'	=> $action)), 'confirm_body_user_reminder_delete.html'
							);
						}
					}		
				break;
				case 'user_protect':
					if (sizeof($mark))
					{
						if (confirm_box(true))
						{
							$protected_user_ids = $new_protected_user_ids_ary = array();
							$new_protected_user_ids = '';
							
							//here we do a bit of putting current protectd users in an array, merge the new protected users in it and save it
							$protected_user_ids = explode(',', $config['user_reminder_protected_users']);
							$new_protected_user_ids_ary = array_merge($protected_user_ids, $mark);
							$new_protected_user_ids = implode(',', $new_protected_user_ids_ary);
						
							if( strlen(trim($new_protected_user_ids, ',')) <= 255)
							{
								set_config('user_reminder_protected_users', (string) trim($new_protected_user_ids, ','));	
							}
							else 
							{
								trigger_error(sprintf($user->lang['UR_TOO_MANY_CHARS'], strlen($new_protected_user_ids)) . adm_back_link($this->u_action));
							}

							$sql_id = ' IN (' . implode(', ', $mark) . ')';
							$sql = 'SELECT user_id, username_clean 
								FROM ' . USERS_TABLE . " 
								WHERE user_id $sql_id";
							$result = $db->sql_query($sql);
	
							$user_id_ary = array();
							while ($row = $db->sql_fetchrow($result))
							{
								$user_id_ary[] = (int) $row['user_id'];
								$username_ary[] = (string) $row['username_clean'];
							}
							$db->sql_freeresult($result);
	
							add_log('admin', 'LOG_USER_PROTECTED', implode(', ', $username_ary));
							trigger_error($user->lang['USER_UPDATED'] . adm_back_link($this->u_action));
						}
						else
						{
							$message = $user->lang['CONFIRM_OPERATION'];
							confirm_box(false, $message, build_hidden_fields(array(
								'mark'		=> $mark,
								'action'	=> $action))
							);
						}
					}		
				break;
			}
		}
	}
	
	function build_dropdown($case)
	{
		global $template, $auth, $user;

		$s_options = '';

		if ($case == 'user_reminder_protected_users' )
		{
			$_options = $auth->acl_get('a_userdel') ? array($case => 'UNPROTECT_USER', 'clear_reminders' => 'CLEAR_ALL', 'user_delete' => 'DELETE_USER') : array($case => 'DESELECT_USER', 'clear_reminders' => 'CLEAR_ALL');
		}
		else
		{
			$_options = $auth->acl_get('a_userdel') ? array($case => 'REMINDER', $case . '_clear' => 'CLEAR', 'user_protect' => 'PROTECT_USER', 'user_delete' => 'DELETE_USER') : array($case => 'REMINDER', $case . '_clear' => 'CLEAR', 'user_protect' => 'PROTECT_USER');
		}

		foreach ($_options as $value => $lang)
		{
			$s_options .= '<option value="' . $value . '">' . $user->lang[$lang] . '</option>';
		}

		$template->assign_vars(array(
			'U_ACTION'					=> $this->u_action,
			'S_USER_REMINDER_OPTIONS'	=> $s_options)
		);
	}
	
	function build_choice($choice_option, &$u_sort_param, &$sql_choice, &$sql_sort)
	{
		global $template, $user;

		// Sort keys
		$sort_choice	= request_var('st', 'i');
		$sort_key		= request_var('sk', 'i');
		$sort_dir		= request_var('sd', 'd');

		
		// Sorting
		$limit_choice = array('i' => $user->lang['ALL'], 'j' => $user->lang['REMINDED'], 'l' => $user->lang['NOT_REMINDED']);
		$sort_by_text = array('i' => ($choice_option == 'user_reminder_zero_poster' || $choice_option == 'user_reminder_not_logged_in') ? $user->lang['SORT_REG_DATE'] : $user->lang['SORT_LAST_VISIT'], 'j' => $user->lang['SORT_USERNAME'], 'l' => $user->lang['REMINDER_DATE']);
		$sort_by_sql = array('i' => ($choice_option == 'user_reminder_zero_poster' || $choice_option == 'user_reminder_not_logged_in') ? 'user_regdate' : 'user_lastvisit' , 'j' => 'username_clean', 'l' => $choice_option);

		$s_limit_choice = $s_sort_key = $s_sort_dir = $u_sort_param = '';
		
		//lets make use of the existing function, we used the sort_choice for the days select, might as utilise existing functions ;)
		gen_sort_selects($limit_choice, $sort_by_text, $sort_choice, $sort_key, $sort_dir, $s_limit_choice, $s_sort_key, $s_sort_dir, $u_sort_param);

		// Define sort sql for use in displaying reminder rows
		$sql_sort = $sort_by_sql[$sort_key] . ' ' . (($sort_dir == 'd') ? 'DESC' : 'ASC');

		if ( $sort_choice == 'j' )
		{
			$sql_choice = ' AND ' . $choice_option . ' > 0';
		}
		elseif ( $sort_choice == 'l' )
		{
			$sql_choice = ' AND ' . $choice_option . ' = 0';
		}

		$template->assign_vars(array(
			'S_LIMIT_CHOICE'	=> $s_limit_choice,	
			'S_SORT_KEY'		=> $s_sort_key,	
			'S_SORT_DIR'		=> $s_sort_dir,	
		));
		
		return;
	}
	
	/**
	* Generate list of groups (option fields with select) 
	* note: This is a modified function from functions_admin.php
	* @param int $group_ids The groupids to mark as selected
	*
	* @return string The list of options.
	*/
	function group_protect_select_options_selected($group_ids)
	{
		global $db, $auth, $user, $template;
		global $phpbb_root_path, $phpEx, $config;
		
	
		//lets not show the guests and bots by default
		$exclude_sql = "WHERE group_name <> 'GUESTS' AND group_name <> 'BOTS'";

		$sql_and = (!$config['coppa_enable']) ? (($exclude_sql) ? ' AND ' : ' WHERE ') . "group_name <> 'REGISTERED_COPPA'" : '';
	
		$sql = 'SELECT group_id, group_name, group_type
			FROM ' . GROUPS_TABLE . "
			$exclude_sql
			$sql_and
			ORDER BY group_type DESC, group_name ASC";
		$result = $db->sql_query($sql);
		
		$s_group_options = '';
		$s_group_options .= '<option style="color:red; font-weight:bold;" value="0"' . (($config['user_reminder_protected_group'] == 0) ? ' selected="selected"' : '') . '>' . $user->lang['UR_NONE_SELECTED'] . '</option>';
		while ($row = $db->sql_fetchrow($result))
		{
				
			$selected = (in_array($row['group_id'], $group_ids, true)) ? ' selected="selected"' : '';
			$s_group_options .= '<option' . (($row['group_type'] == GROUP_SPECIAL) ? ' class="sep"' : '') . ' value="' . $row['group_id'] . '"' . $selected . '>' . (($row['group_type'] == GROUP_SPECIAL) ? $user->lang['G_' . $row['group_name']] : $row['group_name']) . '</option>';
		}
		$db->sql_freeresult($result);
	
		return $s_group_options;
	}
	
}
?>