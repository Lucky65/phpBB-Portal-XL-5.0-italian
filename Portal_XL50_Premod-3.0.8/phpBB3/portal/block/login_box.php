<?php
/*
*
* @name login_box.php
* @package phpBB3 Portal XL 5.0
* @version $Id: login_box.php,v 1.3 2009/10/13 damysterious Exp $
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
$user->setup(array('viewforum', 'mods/portal_xl'));

/*
* Begin block script here
*/
global $portal_config, $db, $user, $template, $auth, $phpEx, $phpbb_root_path, $config, $total_post;

/**
* [+] view new posts number since last visit
*
* WHERE post_time > ' . $user->data['user_lastmark'] . '
* WHERE post_time > ' . $user->data['user_lastvisit'] . '
*/
if ($user->data['is_registered'])
{
	$sql = 'SELECT COUNT(post_id) as total FROM ' . POSTS_TABLE . ' p
	LEFT JOIN ' . TOPICS_TRACK_TABLE . ' tt ON (tt.topic_id = p.topic_id AND tt.user_id = ' . $user->data['user_id'] . ')
	LEFT JOIN ' . FORUMS_TRACK_TABLE . ' ft ON (ft.forum_id = p.forum_id AND ft.user_id = ' . $user->data['user_id'] . ')
	  WHERE post_time > ' . $user->data['user_lastvisit'] . '
	AND post_time > ' . $user->data['user_lastmark'] . '
	AND poster_id != ' . $user->data['user_id'] . '
	AND (tt.topic_id IS NULL OR tt.mark_time < p.post_time)
	AND (ft.forum_id IS NULL OR ft.mark_time < p.post_time)';

    $result = $db->sql_query($sql);
    $total_posts = $db->sql_fetchfield('total', false, $result);
    $db->sql_freeresult($result);
	
	// Assign specific vars
	$template->assign_vars(array(
		'L_SEARCH_NEW'			=> $user->lang['SEARCH_NEW'] . '&nbsp;(' . $total_posts . ')',
		));
}
/**
* [-] view new posts number since last visit
*/

/**
* [+] get user rank
*/
	$sql = 'SELECT 
		user_rank,
		user_posts,
		user_country_flag
	FROM 
		' . USERS_TABLE . "
	WHERE 
		user_id = " . $user->data['user_id'];
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$rank_title = $rank_img = $rank_img_src = '';
			get_user_rank($row['user_rank'], $row['user_posts'], $rank_title, $rank_img, $rank_img_src);
		    
			$flag_title = $flag_img = $flag_img_src = '';
			get_user_flag($row['user_country_flag'], $row['user_country'], $flag_title, $flag_img, $flag_img_src);
		}
		$db->sql_freeresult($result);
/**
* [-] get user rank
*/

/**
* calling portal login function
*/
portal_login_box();

/**
* Generate logged in/logged out status
*/
if ($user->data['user_id'] != ANONYMOUS)
{
	$u_login_logout = append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=logout', true, $user->session_id);
	$l_login_logout = sprintf($user->lang['LOGOUT_USER'], $user->data['username']);
}
else
{
	$u_login_logout = append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=login');
	$l_login_logout = $user->lang['LOGIN'];
}

// Last visit date/time
$s_last_visit = ($user->data['user_id'] != ANONYMOUS) ? $user->format_date($user->data['session_last_visit']) : '';

// Assign specific vars
$template->assign_vars(array(
	'S_USER_LOGGED_IN'		=> ($user->data['user_id'] != ANONYMOUS) ? true : false,	
	'U_SEARCH_SELF'			=> append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=egosearch'),
	'U_SEARCH_NEW'			=> append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=newposts'),
	'U_SEARCH_UNANSWERED'	=> append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=unanswered'),
	'U_SEARCH_ACTIVE_TOPICS'=> append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=active_topics'),

	'U_LOGIN_LOGOUT'		=> $u_login_logout,
	'L_LOGIN_LOGOUT'		=> $l_login_logout,
	'LAST_VISIT_DATE'		=> sprintf($user->lang['YOU_LAST_VISIT'], $s_last_visit),
	'SEARCH_NEW' 			=> $user->lang['SEARCH_NEW'],

	'U_PORTAL'				=> append_sid("{$phpbb_root_path}portal.$phpEx"),
	
	'U_BOOKMARKS'           => append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=main&amp;mode=bookmarks'),
	'U_SUBSCRIBED'          => append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=main&amp;mode=subscribed'),
	'U_PRIVATEMSGS'			=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=pm&amp;folder=inbox'),
	
	'USER_AVATAR'			=> get_user_avatar($user->data['user_avatar'], $user->data['user_avatar_type'], $user->data['user_avatar_width'], $user->data['user_avatar_height']),
	'NO_USER_AVATAR'		=> '<img src="' . $phpbb_root_path . 'styles/' . $user->theme['template_path'] . '/theme/images/no_avatar.gif" alt="" />',
	'USERNAME_FULL' 		=> get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']),
    'U_USERNAME'   			=> append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $user->data['user_id']),
	'U_PROFILE'				=> append_sid("{$phpbb_root_path}ucp.$phpEx"),
	'U_MODCP'				=> append_sid("{$phpbb_root_path}mcp.$phpEx", false, true, $user->session_id),
	'RANK_TITLE'			=> $rank_title,
	'RANK_IMG'				=> $rank_img,
	'RANK_IMG_SRC'			=> $rank_img_src,
	
	'FLAG_TITLE'			=> $flag_title,
	'FLAG_IMG'				=> $flag_img,
	'FLAG_IMG_SRC'			=> $flag_img_src,
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/login_box.html',
	));

?>