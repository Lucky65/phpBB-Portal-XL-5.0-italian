<?php
/**
*
* @package phpBB3
* @version $Id: functions_user_reminder.php 228 2009-05-21 10:09:57Z lefty74 $ 
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

/**
* Send all the user remindes provided that they are set to
* automatically sent
*/
function send_user_reminders()
{
	global $db, $user, $template, $config;
	global $phpEx, $phpbb_root_path;

	$excl_user_id_ary = $excl_user_type_ary = $protect_grp_user_ids = $massmailchce = array();

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

	// did we override the users 'dont email me if i 
	$massmailchce = ($config['user_reminder_ignore_no_email'] == OVERRIDE) ? array(0,1) : array(1);
			
	if ( $config['user_reminder_inactive_still_enable'] == AUTOMATIC )
	{
		$time = (int) (time() - ($config['user_reminder_inactive_still_days'] * 86400));

		$user_list_ary = $user_list_log_ary = $user_id_update_sql = array();
		$and_choice = '';

		if ( ($config['user_reminder_inactive_still_opt_zero'] && $config['user_reminder_inactive_still_opt_inactive'] && $config['user_reminder_inactive_still_opt_not_logged_in']) || (!$config['user_reminder_inactive_still_opt_zero'] && !$config['user_reminder_inactive_still_opt_inactive'] && !$config['user_reminder_inactive_still_opt_not_logged_in']) )
		{
			$and_choice = '(user_reminder_zero_poster < ' . $time  . ' AND user_reminder_zero_poster > 0) OR (user_reminder_inactive > 0 AND user_reminder_inactive <  ' . $time  . ') OR (user_reminder_not_logged_in > 0 AND user_reminder_not_logged_in < ' . $time  . ')';
		}
		else
		{
			$and_choice = ($config['user_reminder_inactive_still_opt_zero']) ? '(user_reminder_zero_poster < ' . $time  . ' AND user_reminder_zero_poster > 0)' : '';
			$and_choice .= ($config['user_reminder_inactive_still_opt_inactive']) ? (($and_choice != '') ? ' OR ' : '') . '(user_reminder_inactive > 0 AND user_reminder_inactive <  ' . $time  . ')' : '';
			$and_choice .= ($config['user_reminder_inactive_still_opt_not_logged_in']) ?  (($and_choice != '') ? ' OR ' : '') . '(user_reminder_not_logged_in > 0 AND user_reminder_not_logged_in < ' . $time  . ')' : '';
		}

		$sql = 'SELECT user_id, user_type, user_allow_massemail, user_reminder_zero_poster, user_reminder_inactive, user_reminder_not_logged_in, user_email, user_notify_type, user_jabber, username, user_lang, username_clean
			FROM ' . USERS_TABLE . '
        	WHERE ' . $db->sql_in_set('user_id', $excl_user_id_ary, true) . '
				AND ' . $db->sql_in_set('user_type', $excl_user_type_ary, true) . "
				AND ( $and_choice )
			AND " . $db->sql_in_set('user_allow_massemail', $massmailchce) . '
				AND user_reminder_inactive_still = 0';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			if (trim($row['user_email']))
			{
				$user_list_ary[] = array(
					'method'	=> $row['user_notify_type'],
					'email'		=> $row['user_email'],
					'jabber'	=> $row['user_jabber'],
					'name'		=> $row['username'],
					'lang'		=> $row['user_lang']
				);
				
				$user_list_log_ary[] = (string) $row['username_clean'];
				$user_id_update_sql[] = (int) $row['user_id'];
				
			}
		}
		$db->sql_freeresult($result);

		if (sizeof($user_list_ary))
		{
			send_reminder_emails($user_list_ary, 'user_reminder_inactive_still');
			
			$sql_ary = array(
			'user_reminder_inactive_still'		=> time()
			);
			
			$sql = 'UPDATE ' . USERS_TABLE . '
				SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE ' .  $db->sql_in_set('user_id', $user_id_update_sql);
			$db->sql_query($sql);
		
			
			if ($config['user_reminder_log_opt_auto_emails'])
			{
				add_log('admin', 'LOG_USER_REMINDER_AUTO_INACTIVE_STILL', implode(', ', $user_list_log_ary));				
			}

		}
	}

	if ( $config['user_reminder_zero_poster_enable'] == AUTOMATIC )
	{
		$time = (int) (time() - ($config['user_reminder_zero_poster_days'] * 86400));
		
		$user_list_ary = $user_list_log_ary = $user_id_update_sql= array();		
		
		$sql = 'SELECT user_id, user_type, user_posts, user_reminder_zero_poster, user_allow_massemail, user_regdate, user_email, user_notify_type, user_jabber, username, user_lang, username_clean
			FROM ' . USERS_TABLE . '
        	WHERE ' . $db->sql_in_set('user_id', $excl_user_id_ary, true) . '
				AND ' . $db->sql_in_set('user_type', $excl_user_type_ary, true) . '
				AND user_posts = 0
				AND user_reminder_zero_poster = 0
				AND ' . $db->sql_in_set('user_allow_massemail', $massmailchce) . '
				AND user_regdate <= ' . $time;
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			if (trim($row['user_email']))
			{
				$user_list_ary[] = array(
					'method'	=> $row['user_notify_type'],
					'email'		=> $row['user_email'],
					'jabber'	=> $row['user_jabber'],
					'name'		=> $row['username'],
					'lang'		=> $row['user_lang']
				);
				$user_list_log_ary[] = (string) $row['username_clean'];
				$user_id_update_sql[] = (int) $row['user_id'];
			}
		}
		$db->sql_freeresult($result);

		if (sizeof($user_list_ary))
		{
			send_reminder_emails($user_list_ary, 'user_reminder_zero_poster');
			
			$sql_ary = array(
			'user_reminder_zero_poster'		=> (int) time()
			);

			$sql = 'UPDATE ' . USERS_TABLE . '
				SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE ' .  $db->sql_in_set('user_id', $user_id_update_sql);
			$db->sql_query($sql);

			if ($config['user_reminder_log_opt_auto_emails'])
			{
				add_log('admin', 'LOG_USER_REMINDER_AUTO_ZERO_POSTER', implode(', ', $user_list_log_ary));
			}
		}
	}

	if ( $config['user_reminder_inactive_enable'] == AUTOMATIC )
	{
		$time = (int) (time() - ($config['user_reminder_inactive_days'] * 86400));
		$user_list_ary = $user_list_log_ary = $user_id_update_sql = array();			
		
		$sql_array = array(
			'SELECT'	=> 'u.user_id, u.user_type, u.user_reminder_inactive, u.user_allow_massemail, u.user_lastvisit, u.user_email, u.user_notify_type, u.user_jabber, u.username, u.user_lang, u.username_clean, MAX(s.session_time) AS session_time',
		
			'FROM'		=> array(
				USERS_TABLE	=> 'u'
			),
		
			'LEFT_JOIN'	=> array(
				array(
					'FROM'	=> array(SESSIONS_TABLE => 's'),
					'ON'	=> 's.session_user_id = u.user_id'
				)
			),
		
			'WHERE' => $db->sql_in_set('u.user_id', $excl_user_id_ary, true) . ' 
						AND ' . $db->sql_in_set('u.user_type', $excl_user_type_ary, true) . ' 
						AND u.user_reminder_inactive = 0 
						AND ' . $db->sql_in_set('u.user_allow_massemail', $massmailchce) . " 
						AND (u.user_lastvisit < $time OR session_time < $time)",
	
			'GROUP_BY'	=> 'u.user_id, u.user_type, u.user_reminder_inactive, u.user_allow_massemail, u.user_lastvisit, u.user_email, u.user_notify_type, u.user_jabber, u.username, u.user_lang, u.username_clean',
			'ORDER_BY'	=> 'u.user_lastvisit DESC'
		);
		
		$sql = $db->sql_build_query('SELECT', $sql_array);
		$result = $db->sql_query($sql);
		
		while ($row = $db->sql_fetchrow($result))
		{

			if( max($row['session_time'], $row['user_lastvisit']) < $time && ($row['user_lastvisit'] <> 0 && !$row['session_time']))
			{
				if (trim($row['user_email']))
				{
					$user_list_ary[] = array(
						'method'	=> $row['user_notify_type'],
						'email'		=> $row['user_email'],
						'jabber'	=> $row['user_jabber'],
						'name'		=> $row['username'],
						'lang'		=> $row['user_lang']
					);
				
					$user_list_log_ary[] = (string) $row['username_clean'];
					$user_id_update_sql[] = (int) $row['user_id'];
				}
	
			}
		}
		$db->sql_freeresult($result);

		if (sizeof($user_list_ary))
		{
			send_reminder_emails($user_list_ary, 'user_reminder_inactive');
			
			$sql_ary = array(
			'user_reminder_inactive'		=> (int) time()
			);

			$sql = 'UPDATE ' . USERS_TABLE . '
				SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE ' .  $db->sql_in_set('user_id', $user_id_update_sql);
			$db->sql_query($sql);

			if ($config['user_reminder_log_opt_auto_emails'])
			{
				add_log('admin', 'LOG_USER_REMINDER_AUTO_INACTIVE', implode(', ', $user_list_log_ary));
			}
		}
	}

	if ( $config['user_reminder_not_logged_in_enable'] == AUTOMATIC )
	{
		$time = (int) (time() - ($config['user_reminder_not_logged_in_days'] * 86400));
		$user_list_ary = $user_list_log_ary = $user_id_update_sql = array();				
		
		$sql_array = array(
			'SELECT'	=> 'u.user_id, u.user_type, u.user_reminder_not_logged_in, u.user_regdate, u.user_allow_massemail, u.user_lastvisit, u.user_email, u.user_notify_type, u.user_jabber, u.username, u.user_lang, u.username_clean, MAX(s.session_time) AS session_time',
		
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
					AND u.user_reminder_not_logged_in = 0
					AND u.user_regdate <= $time
					AND " . $db->sql_in_set('u.user_allow_massemail', $massmailchce) . '
					AND u.user_lastvisit = 0',
		
			'GROUP_BY'	=> 'u.user_id, u.user_type, u.user_reminder_not_logged_in, u.user_regdate, u.user_allow_massemail, u.user_lastvisit, u.user_email, u.user_notify_type, u.user_jabber, u.username, u.user_lang, u.username_clean',
			'ORDER_BY'	=> 'u.user_regdate DESC'
		);
		
		$sql = $db->sql_build_query('SELECT', $sql_array);

		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{

			if (!$row['session_time'])
			{
		
				if (trim($row['user_email']))
				{
					$user_list_ary[] = array(
						'method'	=> $row['user_notify_type'],
						'email'		=> $row['user_email'],
						'jabber'	=> $row['user_jabber'],
						'name'		=> $row['username'],
						'lang'		=> $row['user_lang']
					);

					$user_list_log_ary[] = (string) $row['username_clean'];
					$user_id_update_sql[] = (int) $row['user_id'];
				}
		
			}
		}
		$db->sql_freeresult($result);

		if (sizeof($user_list_ary))
		{
			send_reminder_emails($user_list_ary, 'user_reminder_not_logged_in');
			
			$sql_ary = array(
			'user_reminder_not_logged_in'		=> (int) time()
			);

			$sql = 'UPDATE ' . USERS_TABLE . '
				SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE ' .  $db->sql_in_set('user_id', $user_id_update_sql);
			$db->sql_query($sql);

			if ($config['user_reminder_log_opt_auto_emails'])
			{
				add_log('admin', 'LOG_USER_REMINDER_AUTO_NOT_LOGGED_IN', implode(', ', $user_list_log_ary));
			}
		}
	}

}

/**
* lets check whether any reminders can be cleared
*/
function clear_user_reminders()
{
	global $db, $user, $config;

	// lets see if some of the user_reminders can be cleared
	//  lets start with the zero posters
	if ($user->data['user_posts'] <> 0 && $user->data['user_reminder_zero_poster'] )
	{
		// lets also check whether this person got possibly a second reminder
		if ($user->data['user_reminder_inactive_still'] && ($config['user_reminder_inactive_still_opt_zero'] || (!$config['user_reminder_inactive_still_opt_zero'] && !$config['user_reminder_inactive_still_opt_inactive'] && !$config['user_reminder_inactive_still_opt_not_logged_in'])) )
		{
			delete_second_reminder();
			
			if ($config['user_reminder_log_opt_users_react'])
			{
				add_log('admin', 'LOG_USER_REMINDER_DELETE_SECOND_REMINDER', (string) $user->data['username_clean']);
			}
			
		}
		delete_zero_post_reminder();
		
		if ($config['user_reminder_log_opt_users_react'])
		{
			add_log('admin', 'LOG_USER_REMINDER_DELETE_ZERO_POST_REMINDER', (string) $user->data['username_clean']);
		}
		
	}
	// and now lets see if the user has reminders for not being active or logged in and clear those
	if ($user->data['user_reminder_inactive'] || $user->data['user_reminder_not_logged_in'])	
	{
		// lets also check whether this person got possibly a second reminder
		if ($user->data['user_reminder_inactive_still'] && ($config['user_reminder_inactive_still_opt_inactive'] || $config['user_reminder_inactive_still_opt_not_logged_in'] || (!$config['user_reminder_inactive_still_opt_zero'] && !$config['user_reminder_inactive_still_opt_inactive'] && !$config['user_reminder_inactive_still_opt_not_logged_in'])) )
		{
			// lets only delete the second reminder if the user does not have a zero post reminder that would trigger a second reminder
			if ( !($user->data['user_reminder_zero_poster'] + $config['user_reminder_inactive_still_days'] * 86400 >= time() && $config['user_reminder_inactive_still_opt_zero']))
			{
				delete_second_reminder();
				if ($config['user_reminder_log_opt_users_react'])
				{
					add_log('admin', 'LOG_USER_REMINDER_DELETE_SECOND_REMINDER', (string) $user->data['username_clean']);
				}
			}
		}
		delete_inactive_user_reminder();

		if ($config['user_reminder_log_opt_users_react'])
		{
			add_log('admin', 'LOG_USER_REMINDER_DELETE_INACTIVE_REMINDER', (string) $user->data['username_clean']);
		}
		
	}
	
}

/**
* Deletes the User Reminder timestamp for zero poster
*/
function delete_zero_post_reminder()
{
	global $db, $user;

	$sql_ary = array(
	'user_reminder_zero_poster'		=> 0
	);

	$sql = 'UPDATE ' . USERS_TABLE . '
		SET ' . $db->sql_build_array('UPDATE', $sql_ary) . "
		WHERE user_id = " . $user->data['user_id'];
	$db->sql_query($sql);

}

/**
* Deletes the User Reminder timestamp from inactive users
*/
function delete_inactive_user_reminder()
{
	global $db, $user;

	$sql_ary = array(
	'user_reminder_inactive'		=> 0,
	'user_reminder_not_logged_in'	=> 0
	);

	$sql = 'UPDATE ' . USERS_TABLE . '
		SET ' . $db->sql_build_array('UPDATE', $sql_ary) . "
		WHERE user_id = " . $user->data['user_id'];
	$db->sql_query($sql);

}

/**
* Deletes the User Reminder timestamp from the users that 
* have received a second reminder
*/
function delete_second_reminder()
{
	global $db, $user;

	$sql_ary = array(
	'user_reminder_inactive_still'	=> 0
	);

	$sql = 'UPDATE ' . USERS_TABLE . '
		SET ' . $db->sql_build_array('UPDATE', $sql_ary) . "
		WHERE user_id = " . $user->data['user_id'];
	$db->sql_query($sql);

}

/**
* Sends emails to specified users
*/
function send_reminder_emails($user_list_ary, $case)
{
	global $user, $config, $phpbb_root_path, $template, $db, $phpEx;

    if (!class_exists('messenger'))
    {
    	include($phpbb_root_path . 'includes/functions_messenger.' . $phpEx);
	}
	
	$messenger = new messenger();

	foreach ($user_list_ary as $pos => $addr)
	{

		$messenger->template($case, $addr['lang']);

		$messenger->to($addr['email'], $addr['name']);
		$messenger->im($addr['jabber'], $addr['name']);

		// lets see if the admin wants to send a blind copy
		if ($config['user_reminder_bcc_email'])
		{
			$messenger->bcc($config['user_reminder_bcc_email']);
		}
		
		$messenger->assign_vars(array(
			'USERNAME'		=> htmlspecialchars_decode($addr['name'])
		));

		$messenger->send($addr['method']);

	}
	unset($user_list_ary);

	$messenger->save_queue();
	unset($messenger);
	
}
?>