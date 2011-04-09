<?php
/*
*
* @name user_info.php
* @package phpBB3 Portal XL
* @version $Id: user_info.php,v 1.1.1.1 2009/05/15 05:16:45 damysterious Exp $
*
* Block user_info.php contributed by black_terror
*
* @copyright (c) 2007, 2009  Portal XL Group
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
$user->add_lang('mods/portal_xl_user_info');

/*
* Begin block script here
*/
$l_privmsgs_text = $l_privmsgs_text_unread = '';
$s_privmsg_new = false;

// Obtain number of new private messages if user is logged in
if (!empty($user->data['is_registered']))
{
	if ($user->data['user_new_privmsg'])
	{
		$l_message_new = ($user->data['user_new_privmsg'] == 1) ? $user->lang['NEW_PM'] : $user->lang['NEW_PMS'];
		$l_privmsgs_text = sprintf($l_message_new, $user->data['user_new_privmsg']);

		if (!$user->data['user_last_privmsg'] || $user->data['user_last_privmsg'] > $user->data['session_last_visit'])
		{
			$sql = 'UPDATE ' . USERS_TABLE . '
				SET user_last_privmsg = ' . $user->data['session_last_visit'] . '
				WHERE user_id = ' . $user->data['user_id'];
			$db->sql_query($sql);

			$s_privmsg_new = true;
		}
		else
		{
			$s_privmsg_new = false;
		}
	}
	else
	{
		$l_privmsgs_text = $user->lang['NO_NEW_PM'];
		$s_privmsg_new = false;
	}

	$l_privmsgs_text_unread = '';

	if ($user->data['user_unread_privmsg'] && $user->data['user_unread_privmsg'] != $user->data['user_new_privmsg'])
	{
		$l_message_unread = ($user->data['user_unread_privmsg'] == 1) ? $user->lang['UNREAD_PM'] : $user->lang['UNREAD_PMS'];
		$l_privmsgs_text_unread = sprintf($l_message_unread, $user->data['user_unread_privmsg']);
	}
}

/**
* [+] view new posts number since last visit
*
* WHERE post_time > ' . $user->data['user_lastmark'] . '
* WHERE post_time > ' . $user->data['user_lastvisit'] . '
*/
if ($user->data['is_registered'])
{
	// new posts since last visit
	$sql = "SELECT COUNT(distinct post_id) as total_posts
		FROM " . POSTS_TABLE . "
		WHERE post_time >= " . $user->data['session_last_visit'];
	$result = $db->sql_query($sql);
    $total_posts = (int) $db->sql_fetchfield('total_posts', false, $result);
    $db->sql_freeresult($result);
		
	// your post number
	$sql = "SELECT user_posts
		FROM " . USERS_TABLE . "
		WHERE user_id = " . $user->data['user_id'];
	$result = $db->sql_query($sql);
	$your_posts = (int) $db->sql_fetchfield('user_posts');
    $db->sql_freeresult($result);
}
/**
* [-] view new posts number since last visit
*
*/

/*
* Get user information
*/
$user_id = $user->data['user_id'];
$username = $user->data['username'];

	$sql = 'SELECT *
		FROM ' . USERS_TABLE . '
		WHERE ' . (($username) ? "username_clean = '" . $db->sql_escape(utf8_clean_string($username)) . "'" : "user_id = $user_id");
	$result = $db->sql_query($sql);
	$member = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

$user_avatar = get_user_avatar($member['user_avatar'], $member['user_avatar_type'], $member['user_avatar_width'], $member['user_avatar_height']);
$rank_title = $rank_img = '';
get_user_rank($member['user_rank'], $member['user_posts'], $rank_title, $rank_img, $rank_img_src);
$username = $member['username'];
$user_id = (int) $member['user_id'];
$colour = $member['user_colour'];

// Last visit date/time
$s_last_visit = ($user->data['user_id'] != ANONYMOUS) ? $user->format_date($user->data['session_last_visit']) : '';

/*
* Assign specific template variables
*/
$template->assign_vars(array(
	'L_NEW_SEARCH'    				=> $user->lang['SEARCH_NEW'] . '&nbsp;(' . $total_posts . ')',
	'L_SELF_SEARCH'    				=> $user->lang['SEARCH_SELF'] . '&nbsp;(' . $your_posts . ')',
	
	'LAST_VISIT_DATE'				=> sprintf($user->lang['YOU_LAST_VISIT'], $s_last_visit),

	'USER_AVATAR'    				=> $user_avatar,
	'NO_USER_AVATAR'				=> '<img src="' . $phpbb_root_path . 'styles/' . $user->theme['template_path'] . '/theme/images/no_avatar.gif" alt="" />',
	
	'RANK_TITLE'    				=> $rank_title,
	'RANK_IMG'        				=> $rank_img,
	'RANK_IMG_SRC'    				=> $rank_img_src,

	'USERNAME_FULL'     			=> get_username_string('full', $user_id, $username, $colour),
	'U_USERNAME'          			=> append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $user->data['user_id']),
	'USER_COLOR'        			=> get_username_string('colour', $user_id, $username, $colour),
	'U_VIEW_PROFILE'    			=> get_username_string('profile', $user_id, $username, $colour),

	'U_NEW_SEARCH'					=> append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=newposts'),
	'U_SELF_SEARCH'					=> append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=egosearch'),
	'U_UNANSWERED_SEARCH'			=> append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=unanswered'),
	'U_ACTIVE_TOPICS_SEARCH'		=> append_sid("{$phpbb_root_path}search.$phpEx", 'search_id=active_topics'),

	'U_FRONTPAGE'      				=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=main&amp;mode=front'),
	'U_BOOKMARKS'      				=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=main&amp;mode=bookmarks'),
	'U_SUBSCRIBED'  	       		=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=main&amp;mode=subscribed'),
	'U_DRAFTS'      				=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=main&amp;mode=drafts'),
	'U_ATTACHMENTS'      			=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=main&amp;mode=attachments'),
	
	'U_UPROFILE'      				=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=profile&amp;mode=profile_info'),
	'U_SIGNATURE'      				=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=profile&amp;mode=signature'),
	'U_AVATAR'      				=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=profile&amp;mode=avatar'),
	'U_ACCOUNT'      				=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=profile&amp;mode=reg_details'),
	
	'U_GLOBALSETTINGS'      		=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=prefs&amp;mode=personal'),
	'U_POSTINDEFAULT'           	=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=prefs&amp;mode=post'),
	'U_DISPLAYOPTIONS'      		=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=prefs&amp;mode=view'),
	
	'U_PRIVATEMSG'   				=> ($config['allow_privmsg'] && $auth->acl_get('u_sendpm') && ($auth->acl_gets('a_', 'm_') || $auth->acl_getf_global('m_'))) ? append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=pm&amp;folder=inbox') : '',
	'U_COMPOSEPMMESSAGESG'      	=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=pm&amp;mode=compose'),
	'U_MANAGEPMDRAFTS'          	=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=pm&amp;mode=drafts'),
	'U_INBOX'                   	=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=pm&amp;mode=inbox'),
	'U_OUTBOX'                  	=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=pm&amp;mode=outbox'),
	'U_SENDMESSAGEBOX'          	=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=pm&amp;mode=sendbox'),
	'U_UNREADMESSAGES'          	=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=pm&amp;mode=unreadbox'),
	'U_RULEFOLDERSETTING'       	=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=pm&amp;mode=options'),
	
	'U_EDITMEMBERSHIP'          	=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=groups&amp;mode=membership'),
	'U_MANAGEGROUPS'            	=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=groups&amp;mode=manage'),
	
	'U_MANAGEFRIENDS'           	=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=zebra&amp;mode=friends'),
	'U_MANAGEFOES'              	=> append_sid($phpbb_root_path . 'ucp.' . $phpEx . '?i=zebra&amp;mode=foes'),

	'U_DELETE_COOKIES'				=> append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=delete_cookies'),
	'U_MARK_FORUMS'					=> ($user->data['is_registered'] || $config['load_anon_lastread']) ? append_sid("{$phpbb_root_path}index.$phpEx", 'hash=' . generate_link_hash('global') . '&amp;mark=forums') : '',

	'U_RULES'				    	=> append_sid("{$phpbb_root_path}faq.$phpEx", 'mode=rules'),
	
	'PRIVATE_MESSAGE_INFO'			=> $l_privmsgs_text,
	'PRIVATE_MESSAGE_INFO_UNREAD'	=> $l_privmsgs_text_unread,

	'S_USER_NEW_PRIVMSG'			=> $user->data['user_new_privmsg'],
	'S_USER_UNREAD_PRIVMSG'			=> $user->data['user_unread_privmsg'],

));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/user_info.html',
	));

?>