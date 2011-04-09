<?php
/*
*
* @name whos_online_phpbb
* @package phpBB3 Portal XL 5.0
* @version $Id: whos_online_phpbb.php,v 1.2 2009/10/13 damysterious Exp $
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
if ($auth->acl_gets('a_group', 'a_groupadd', 'a_groupdel'))
{
	$sql = 'SELECT group_id, group_name, group_colour, group_type
		FROM ' . GROUPS_TABLE . '
		WHERE group_legend = 1
		ORDER BY group_name ASC';
}
else
{
	$sql = 'SELECT g.group_id, g.group_name, g.group_colour, g.group_type
		FROM ' . GROUPS_TABLE . ' g
		LEFT JOIN ' . USER_GROUP_TABLE . ' ug
			ON (
				g.group_id = ug.group_id
				AND ug.user_id = ' . $user->data['user_id'] . '
				AND ug.user_pending = 0
			)
		WHERE g.group_legend = 1
			AND (g.group_type <> ' . GROUP_HIDDEN . ' OR ug.user_id = ' . $user->data['user_id'] . ')
		ORDER BY g.group_name ASC';
}
$result = $db->sql_query($sql);

$legend = array();
while ($row = $db->sql_fetchrow($result))
{
	// www.phpBB-SEO.com SEO TOOLKIT BEGIN
	$phpbb_seo->prepare_url('group', $row['group_name'], $row['group_id']);
	// www.phpBB-SEO.com SEO TOOLKIT END	
	
	$colour_text = ($row['group_colour']) ? ' style="color:#' . $row['group_colour'] . '"' : '';
	$group_name = ($row['group_type'] == GROUP_SPECIAL) ? $user->lang['G_' . $row['group_name']] : $row['group_name'];

	if ($row['group_name'] == 'BOTS' || ($user->data['user_id'] != ANONYMOUS && !$auth->acl_get('u_viewprofile')))
	{
		$legend[] = '<span' . $colour_text . '>' . $group_name . '</span>';
	}
	else
	{
		$legend[] = '<a' . $colour_text . ' href="' . append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=group&amp;g=' . $row['group_id']) . '">' . $group_name . '</a>';
	}
}
$db->sql_freeresult($result);

$legend = implode(', ', $legend);

//
// users online list borrowed from includes/functions.php
//
$display_online_list = true;

// Last Visit MOD
$logged_visible_lastvisit = $logged_hidden_lastvisit = $guests_lastvisit = 0;
$l_lastvisit_users = $lastvisit_userlist = '';

$sql = 'SELECT COUNT(DISTINCT s.session_ip) as num_guests
	FROM ' . SESSIONS_TABLE . ' s
	WHERE s.session_user_id = ' . ANONYMOUS . '
		AND s.session_last_visit > ' . strtotime("-1 day");
$result = $db->sql_query($sql);
$guests_lastvisit = (int) $db->sql_fetchfield('num_guests');
$db->sql_freeresult($result);
				
$sql = 'SELECT username, username_clean, user_id, user_type, user_allow_viewonline, user_colour, user_lastvisit, user_country_flag
	FROM ' . USERS_TABLE . '
	WHERE user_lastvisit > ' . strtotime("-1 day") . '
	ORDER BY username_clean ASC';
$result = $db->sql_query($sql);

while( ($row = $db->sql_fetchrow($result)) )
{
	if ($row['user_id'] != ANONYMOUS)
	{

		if ($row['user_colour'])
		{
				// Country Flags Version 3.0.6
				if ($user->data['user_id'] != ANONYMOUS)
				{
					$flag_title = $flag_img = $flag_img_src = '';
					get_user_flag($row['user_country_flag'], $row['user_country'], $flag_title, $flag_img, $flag_img_src);
				}
				// Country Flags Version 3.0.6
				
				$user_colour = ($row['user_colour']) ? ' style="color:#' . $row['user_colour'] .'" onmouseover="show_popup(' .$row['user_id']. ')" onmouseout="close_popup()"' : ' ' . $flag_img;
//              $user_colour = ($row['user_colour']) ? ' style="color:#' . $row['user_colour'] .'"' : '';
				$row['username'] = '<strong>' . $row['username'] . '</strong> ' . $flag_img;
		}
		else
		{
			$user_colour = '';
		}
			
		if ($row['user_allow_viewonline'])
		{
			$user_lastvisit_link = $row['username'];
			$logged_visible_lastvisit++;
		}
		else
		{
			$user_lastvisit_link = '<em>' . $row['username'] . '</em>';
			$logged_hidden_lastvisit++;
		}
		
		if ($row['user_allow_viewonline'] || $auth->acl_get('u_viewonline'))
		{
			if ($row['user_type'] <> USER_IGNORE)
			{
				$user_lastvisit_link = '<a href="' . append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['user_id']) . '"' . $user_colour . '>' . $user_lastvisit_link . '</a>';
			}
			else
			{
				$user_lastvisit_link = ($user_colour) ? '<span' . $user_colour . '>' . $user_lastvisit_link . '</span>' : $user_lastvisit_link;
			}
				$lastvisit_userlist .= ($lastvisit_userlist != '') ? ', ' . $user_lastvisit_link : $user_lastvisit_link;
		}
	}
}
$db->sql_freeresult($result);

if (!$lastvisit_userlist)
{
	$lastvisit_userlist = $user->lang['NO_LASTVISIT_USERS'];
}

if (empty($_REQUEST['f']))
{
	$lastvisit_userlist = $user->lang['REGISTERED_USERS'] . ' ' . $lastvisit_userlist;
}
else
{
	$lastvisit_userlist = sprintf($lastvisit_userlist, $guests_lastvisit);
}

$total_lastvisit_users = $logged_visible_lastvisit + $logged_hidden_lastvisit + $guests_lastvisit;

// Build online listing
$vars_lastvisit = array(
	'LASTVISIT'	=> array('total_lastvisit_users', 'v_t_user_s'),
	'REG'		=> array('logged_visible_lastvisit', 'v_r_user_s'),
	'HIDDEN'	=> array('logged_hidden_lastvisit', 'v_h_user_s'),
	'GUEST'		=> array('guests_lastvisit', 'v_g_user_s') 
);

foreach ($vars_lastvisit as $v_prefix => $var_ary)
{
	switch (${$var_ary[0]})
	{
		case 0:
			${$var_ary[1]} = $user->lang[$v_prefix . '_VISITS_ZERO_TOTAL'];
		break;

		case 1:
			${$var_ary[1]} = $user->lang[$v_prefix . '_VISIT_TOTAL'];
		break;

		default:
			${$var_ary[1]} = $user->lang[$v_prefix . '_VISITS_TOTAL'];
		break;
	}
}
unset($vars_lastvisit);

$l_lastvisit_users = sprintf($v_t_user_s, $total_lastvisit_users);
$l_lastvisit_users .= sprintf($v_r_user_s, $logged_visible_lastvisit);
$l_lastvisit_users .= sprintf($v_h_user_s, $logged_hidden_lastvisit);
$l_lastvisit_users .= sprintf($v_g_user_s, $guests_lastvisit);
// Last Visit MOD

// Assign specific vars
$template->assign_vars(array(
	'LEGEND'					=> $legend,
	'TOTAL_USERS_LASTVISIT'		=> $l_lastvisit_users,
	'LASTVISIT_USER_LIST' 		=> $lastvisit_userlist,
));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/whos_online_phpbb.html',
	));

?>