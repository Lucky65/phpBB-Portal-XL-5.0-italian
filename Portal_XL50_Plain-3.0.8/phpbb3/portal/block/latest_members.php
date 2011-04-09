<?php
/*
*
* @name latest_members.php
* @package phpBB3 Portal XL 5.0
* @version $Id: latest_members.php,v 1.4 2010/01/22 damysterious Exp $
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

/*
* Begin block script here
*/
$number_of_max_last_members = $portal_config['portal_max_last_member'];

$sql = 'SELECT user_id, username, user_regdate, user_colour
	FROM ' . USERS_TABLE . '
	WHERE user_type <> ' . USER_IGNORE . '
	AND user_inactive_time = 0
	ORDER BY user_regdate DESC';
	
$result = $db->sql_query_limit($sql, $number_of_max_last_members);

while( ($row = $db->sql_fetchrow($result)) && ($row['username'] != '') )
{
	$user_colour = ($row['user_colour']) ? ' style="color:#' . $row['user_colour'] .'"' : '';

	$template->assign_block_vars('latest_members', array(
		'USERNAME'		=> censor_text($row['username']),
		'USERNAME_COLOR'=> ($row['user_colour']) ? ' style="color:#' . $row['user_colour'] .'"' : '',
		'U_USERNAME'	=> append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['user_id']),
		'JOINED'		=> $user->format_date($row['user_regdate'], $format = 'd M'),
		)
	);
}
$db->sql_freeresult($result);

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/latest_members.html',
	));

?>