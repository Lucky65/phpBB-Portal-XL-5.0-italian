<?php
/*
*
* @name whos_online.php
* @package phpBB3 Portal XL 5.0
* @version $Id: whos_online.php,v 1.3 2009/10/13 damysterious Exp $
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

// Grab group details for legend display
$sql = 'SELECT group_id, group_name, group_colour, group_type
	FROM ' . GROUPS_TABLE . '
	WHERE group_legend = 1
		AND group_type <> ' . GROUP_HIDDEN . '
	ORDER BY group_name ASC';
$result = $db->sql_query($sql);

$legend = '';
while ($row = $db->sql_fetchrow($result))
{
	$colour_text = ($row['group_colour']) ? ' style="color:#' . $row['group_colour'] . '"' : '';

	if ($row['group_name'] == 'BOTS')
	{
		$legend .= (($legend != '') ? ', ' : '') . '<span' . $colour_text . '>' . $user->lang['G_BOTS'] . '</span>';
	}
	else
	{
		$legend .= (($legend != '') ? ', ' : '') . '<a' . $colour_text . ' href="' . append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=group&amp;g=' . $row['group_id']) . '">' . (($row['group_type'] == GROUP_SPECIAL) ? $user->lang['G_' . $row['group_name']] : $row['group_name']) . '</a>';
	}
}
$db->sql_freeresult($result);

//
// users online list borrowed from includes/functions.php 
//
$display_online_list = true;

// Get users online list ... if required
$l_online_users = $online_userlist = $l_online_record = '';

if ($config['load_online'] && $config['load_online_time'] && $display_online_list)
{
	$userlist_ary = $userlist_visible = array();
	$logged_visible_online = $logged_hidden_online = $guests_online = $prev_user_id = 0;
	$prev_session_ip = $reading_sql = '';

	if (!empty($_REQUEST['f']))
	{
		$f = request_var('f', 0);

		// Do not change this (it is defined as _f_={forum_id}x within session.php)
		$reading_sql = " AND s.session_page LIKE '%\_f\_={$f}x%'";

		// Specify escape character for MSSQL
		if ($db->sql_layer == 'mssql' || $db->sql_layer == 'mssql_odbc')
		{
			$reading_sql .= " ESCAPE '\\'";
		}
	}

	// Get number of online guests
	if (!$config['load_online_guests'])
	{
		if ($db->sql_layer === 'sqlite')
		{
			$sql = 'SELECT COUNT(session_ip) as num_guests
				FROM (
					SELECT DISTINCT s.session_ip
						FROM ' . SESSIONS_TABLE . ' s
						WHERE s.session_user_id = ' . ANONYMOUS . '
							AND s.session_time >= ' . (time() - ($config['load_online_time'] * 60)) . 
							$reading_sql .
				')';
		}
		else
		{
			$sql = 'SELECT COUNT(DISTINCT s.session_ip) as num_guests
				FROM ' . SESSIONS_TABLE . ' s
				WHERE s.session_user_id = ' . ANONYMOUS . '
					AND s.session_time >= ' . (time() - ($config['load_online_time'] * 60)) . 
				$reading_sql;
		}
		$result = $db->sql_query($sql);
		$guests_online = (int) $db->sql_fetchfield('num_guests');
		$db->sql_freeresult($result);
	}

		$sql = 'SELECT u.username, u.username_clean, u.user_id, u.user_type, u.user_allow_viewonline, u.user_colour, s.session_ip, s.session_viewonline
		FROM ' . USERS_TABLE . ' u, ' . SESSIONS_TABLE . ' s
		WHERE s.session_time >= ' . (time() - (intval($config['load_online_time']) * 60)) . 
			$reading_sql .
			((!$config['load_online_guests']) ? ' AND s.session_user_id <> ' . ANONYMOUS : '') . '
			AND u.user_id = s.session_user_id 
			ORDER BY u.username_clean ASC, s.session_ip ASC';
	$result = $db->sql_query($sql);

	while ($row = $db->sql_fetchrow($result))
	{
		// User is logged in and therefore not a guest
		if ($row['user_id'] != ANONYMOUS)
		{
			// Skip multiple sessions for one user
			if ($row['user_id'] != $prev_user_id)
			{
				if ($row['user_colour'])
				{
					$user_colour = ' style="color:#' . $row['user_colour'] . '"';
					$row['username'] = '<strong>' . $row['username'] . '</strong>';
				}
				else
				{
					$user_colour = '';
				}

				if ($row['user_allow_viewonline'] && $row['session_viewonline'])
				{
					$user_online_link = $row['username'];
					$logged_visible_online++;
				}
				else
				{
					$user_online_link = '<em>' . $row['username'] . '</em>';
					$logged_hidden_online++;
				}

				if (($row['user_allow_viewonline'] && $row['session_viewonline']) || $auth->acl_get('u_viewonline'))
				{
					if ($row['user_type'] <> USER_IGNORE)
					{
						$user_online_link = '<a href="' . append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['user_id']) . '"' . $user_colour . '>' . $user_online_link . '</a>';
					}
					else
					{
						$user_online_link = ($user_colour) ? '<span' . $user_colour . '>' . $user_online_link . '</span>' : $user_online_link;
					}

					$online_userlist .= ($online_userlist != '') ? ', ' . $user_online_link : $user_online_link;
				}
			}

			$prev_user_id = $row['user_id'];
		}
		else
		{
			// Skip multiple sessions for one user
			if ($row['session_ip'] != $prev_session_ip)
			{
				$guests_online++;
			}
		}

		$prev_session_ip = $row['session_ip'];
	}
	$db->sql_freeresult($result);

	if (!$online_userlist)
	{
		$online_userlist = $user->lang['NO_ONLINE_USERS'];
	}

	if (empty($_REQUEST['f']))
	{
		$online_userlist = $user->lang['REGISTERED_USERS'] . ' ' . $online_userlist;
	}
	else
	{
		$l_online = ($guests_online == 1) ? $user->lang['BROWSING_FORUM_GUEST'] : $user->lang['BROWSING_FORUM_GUESTS'];
		$online_userlist = sprintf($l_online, $online_userlist, $guests_online);
	}

	$total_online_users = $logged_visible_online + $logged_hidden_online + $guests_online;

	if ($total_online_users > $config['record_online_users'])
	{
		set_config('record_online_users', $total_online_users, true);
		set_config('record_online_date', time(), true);
	}

	// Build online listing
	$vars_online = array(
		'ONLINE'	=> array('total_online_users', 'l_t_user_s'),
		'REG'		=> array('logged_visible_online', 'l_r_user_s'),
		'HIDDEN'	=> array('logged_hidden_online', 'l_h_user_s'),
		'GUEST'		=> array('guests_online', 'l_g_user_s')
	);

	foreach ($vars_online as $l_prefix => $var_ary)
	{
		switch (${$var_ary[0]})
		{
			case 0:
				${$var_ary[1]} = $user->lang[$l_prefix . '_USERS_ZERO_TOTAL'];
			break;

			case 1:
				${$var_ary[1]} = $user->lang[$l_prefix . '_USER_TOTAL'];
			break;

			default:
				${$var_ary[1]} = $user->lang[$l_prefix . '_USERS_TOTAL'];
			break;
		}
	}
	unset($vars_online);

	$l_online_users = sprintf($l_t_user_s, $total_online_users);
	$l_online_users .= sprintf($l_r_user_s, $logged_visible_online);
	$l_online_users .= sprintf($l_h_user_s, $logged_hidden_online);
	$l_online_users .= sprintf($l_g_user_s, $guests_online);

	$l_online_record = sprintf($user->lang['RECORD_ONLINE_USERS'], $config['record_online_users'], $user->format_date($config['record_online_date']));

	$l_online_time = ($config['load_online_time'] == 1) ? 'VIEW_ONLINE_TIME' : 'VIEW_ONLINE_TIMES';
	$l_online_time = sprintf($user->lang[$l_online_time], $config['load_online_time']);
}
else
{
	$l_online_time = '';
}


// Assign specific vars
$template->assign_vars(array(
	'TOTAL_ONLINE_USERS'	=> $total_online_users,
	'VISIBLE_ONLINE'		=> $logged_visible_online,
	'HIDDEN_ONLINE'			=> $logged_hidden_online,
	'GUEST_ONLINE'			=> $guests_online,
	'RECORD_USERS'			=> $l_online_record,
	'LEGEND'				=> $legend,
	)
);

// users last visit
$number_of_lastvisits_to_display = $portal_config['portal_max_lastvisits'];
$lastvisit_list = '';
$lastvisits = $number_of_lastvisits_to_display;

	$sql = 'SELECT user_id, username, user_colour, user_lastvisit
		FROM ' . USERS_TABLE . '
		WHERE user_type IN (' . USER_NORMAL . ', ' . USER_FOUNDER . ')
			AND user_lastvisit > ' . (time() - (24 * 60 * 60)) . '
		ORDER BY user_lastvisit DESC';
	$result = $db->sql_query($sql);
	while ($row = $db->sql_fetchrow($result) AND $lastvisits > 0)
	{

	$user_colour = ($row['user_colour']) ? ' style="color:#' . $row['user_colour'] .'"' : '';
	  $lastvisit_list .= (($lastvisit_list != '') ? '<br>' : '') . $user->format_date($row['user_lastvisit'], 'H:i') . ' ' . '<strong><a' . $user_colour . ' href="' . append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['user_id']) . '">' . $row['username'] . '</a></strong>';
	  $lastvisits --;
}
$db->sql_freeresult($result);

$template->assign_vars(array(
	'L_LAST_VISIT' => sprintf($user->lang['L_LAST_VISIT'], $number_of_lastvisits_to_display),
	'LAST_VISIT' => $lastvisit_list,
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/whos_online.html',
	));

?>