<?php
/**
*
* @package phpBB3
* @version $Id: functions_announcements.php,v 1.1.1.1 2009/05/15 05:13:37 damysterious Exp $
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
* Generate list of groups (option fields with select) 
* note: This is a modified function from functions_admin.php
* @param int $group_ids The groupids to mark as selected
* @param array $exclude_ids The group ids to exclude from the list, false (default) if you whish to exclude no id
* @param int $manage_founder If set to false (default) all groups are returned, if 0 only those groups returned not being managed by founders only, if 1 only those groups returned managed by founders only.
*
* @return string The list of options.
*/
function group_select_options_selected($group_ids, $exclude_ids = false, $manage_founder = false)
{
	global $db, $auth, $user, $template;
	global $phpbb_root_path, $phpEx, $config;

	$exclude_sql = ($exclude_ids !== false && sizeof($exclude_ids)) ? 'WHERE ' . $db->sql_in_set('group_id', array_map('intval', $exclude_ids), true) : '';
	$sql_and = (!$config['coppa_enable']) ? (($exclude_sql) ? ' AND ' : ' WHERE ') . "group_name <> 'REGISTERED_COPPA'" : '';
	$sql_founder = ($manage_founder !== false) ? (($exclude_sql || $sql_and) ? ' AND ' : ' WHERE ') . 'group_founder_manage = ' . (int) $manage_founder : '';

	$sql = 'SELECT group_id, group_name, group_type
		FROM ' . GROUPS_TABLE . "
		$exclude_sql
		$sql_and
		$sql_founder
		ORDER BY group_type DESC, group_name ASC";
	$result = $db->sql_query($sql);
	
	$s_group_options = '';
	while ($row = $db->sql_fetchrow($result))
	{
			
		$selected = (in_array($row['group_id'], $group_ids, true)) ? ' selected="selected"' : '';
		$s_group_options .= '<option' . (($row['group_type'] == GROUP_SPECIAL) ? ' class="sep"' : '') . ' value="' . $row['group_id'] . '"' . $selected . '>' . (($row['group_type'] == GROUP_SPECIAL) ? $user->lang['G_' . $row['group_name']] : $row['group_name']) . '</option>';
	}
	$db->sql_freeresult($result);

	return $s_group_options;
}

/**
* get all the announcement data
*
* @param string $birthday_list, true or false
*/
function get_announcement_data()
{
	global $db, $auth, $user, $template;
	global $phpbb_root_path, $phpEx, $config;

	$birthday_list = '';
	if ($config['load_birthdays'] && $config['allow_birthdays'])
	{
		// Generate birthday list if required ...
		$now = getdate(time() + $user->timezone + $user->dst - date('Z'));
		$sql = 'SELECT user_id, username, user_colour, user_birthday, user_avatar, user_avatar_type, user_avatar_width, user_avatar_height
			FROM ' . USERS_TABLE . "
			WHERE user_birthday LIKE '" . $db->sql_escape(sprintf('%2d-%2d-', $now['mday'], $now['mon'])) . "%'
				AND user_type IN (" . USER_NORMAL . ', ' . USER_FOUNDER . ')';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
		//obtain the avatar and username for the birthday announcements
			$birthday_list = 1; 
			$max_bdavatar_size = $avatar_width = $avatar_height = '';
			if ( !empty($row['user_avatar']) )
			{
				$max_bdavatar_size = 40; // This is going to be the maximum dimensions for the avatar width or height, change this value if you want the maximum dimensions different
			
				if ( $row['user_avatar_width'] >= $row['user_avatar_height'] )
				{
					$avatar_width = ( $row['user_avatar_width'] > $max_bdavatar_size ) ? $max_bdavatar_size : $row['user_avatar_width'] ;
					$avatar_height = ( $avatar_width == $max_bdavatar_size ) ? round($max_bdavatar_size / $row['user_avatar_width'] * $row['user_avatar_height']) : $row['user_avatar_height'] ;
				}
				else 
				{
					$avatar_height = ( $row['user_avatar_height'] > $max_bdavatar_size ) ? $max_bdavatar_size : $row['user_avatar_height'] ;
					$avatar_width = ( $avatar_height == $max_bdavatar_size ) ? round($max_bdavatar_size / $row['user_avatar_height'] * $row['user_avatar_width']) : $row['user_avatar_width'] ;
				}
			}
			if ( !function_exists('get_user_avatar') ) // only  checking for one of the functions as the other is in the same file
			{
				include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
			}
			$template->assign_block_vars('bdannounce', array(
			'AVATAR'	=> get_user_avatar($row['user_avatar'], $row['user_avatar_type'], $avatar_width, $avatar_height, $row['username']),
			'USERNAME'	=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour'])));

		}
		$db->sql_freeresult($result);
	}

	// Generate the announcement data
	$sql = 'SELECT * 
		FROM ' . ANNOUNCEMENTS_CENTRE_TABLE;
	$result = $db->sql_query($sql);
	$announcement = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	$selected_groups = array();
	$selected_groups = explode(",", $announcement['announcement_show_group']);

	$sql = 'SELECT *
		FROM ' . USER_GROUP_TABLE . '
		WHERE ' . $db->sql_in_set('group_id', $selected_groups) . '
			AND user_id = ' . $user->data['user_id'];
	$db->sql_query($sql);
	$result = $db->sql_query_limit($sql,1,0);
	$is_in_group = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	//Announcement Centre by lefty74
	if ( ($user->data['user_id']) == ANONYMOUS && $announcement['announcement_show'] == GUESTS_ONLY ) // Guests only
	{
		$announcement_show = true;
		$announcement_show_everyone_guests = true;
	}
	else if ( $user->data['user_id'] != ANONYMOUS  && ($is_in_group && $announcement['announcement_show'] == GROUPS_ONLY) ) // Groups only
	{
		$announcement_show = true;
		$announcement_show_everyone_guests = false;
	}
	else if ( $announcement['announcement_show'] == EVERYONE ) // Everyone
	{
		$announcement_show = true;
		$announcement_show_everyone_guests = true;
	}
	else 
	{
		$announcement_show = false;
		$announcement_show_everyone_guests = false;
	}
	//Announcement Centre by lefty74

	// Assign index specific vars
	$template->assign_vars(array(
		'ANNOUNCEMENT_TEXT' 			=> generate_text_for_display($announcement['announcement_text'],$announcement['announcement_text_bbcode_uid'], $announcement['announcement_text_bbcode_bitfield'], $announcement['announcement_text_bbcode_options']),
		'ANNOUNCEMENT_TITLE_GUESTS'		=> $announcement['announcement_title_guests'],
		'ANNOUNCEMENT_TEXT_GUESTS'		=> generate_text_for_display($announcement['announcement_text_guests'],$announcement['announcement_text_guests_bbcode_uid'], $announcement['announcement_text_guests_bbcode_bitfield'], $announcement['announcement_text_guests_bbcode_options']),
		'ANNOUNCEMENT_TITLE' 			=> $announcement['announcement_title'],
		'ANNOUNCEMENT_TITLE_GUESTS' 	=> $announcement['announcement_title_guests'],
		'ANNOUNCEMENT_ENABLE' 			=> $config['announcement_enable'],
		'ANNOUNCEMENT_ENABLE_GUESTS' 	=> $announcement['announcement_enable_guests'],
		'ANNOUNCEMENT_SHOW' 			=> $announcement_show,
		'ANNOUNCEMENT_SHOW_EVERYONE' 	=> $announcement_show_everyone_guests,
		'ANNOUNCEMENT_SHOW_BIRTHDAY'	=> ( $birthday_list != '' && $announcement['announcement_show_birthdays'] ) ? true : false,
		'ANNOUNCEMENT_BIRTHDAY_AVATAR'	=> ($announcement['announcement_birthday_avatar']) ? true : false)
		);
}

/**
* prepares the preview announcement text
*/
function preview_announcement($text)
{
	$uid			= $bitfield			= $options	= '';	
	$allow_bbcode	= $allow_smilies	= true;
	$allow_urls		= false;
	//lets (mis)use generate_text_for_storage to create some uid, bitfield... for our preview
	generate_text_for_storage($text, $uid, $bitfield, $options, $allow_bbcode, $allow_urls, $allow_smilies);
	//now we created it, lets show it
	$text			= generate_text_for_display($text, $uid, $bitfield, $options);
	
	return $text;
}
?>