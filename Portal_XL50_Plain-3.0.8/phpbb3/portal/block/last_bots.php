<?php
/**
*
* @name last_bots.php
* @package phpBB3 Portal XL 5.0
* @version $Id: last_bots.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
$number_last_visited_bots_number = $portal_config['portal_last_visited_bots_number'];

// Last x visited bots
$sql = 'SELECT username, user_colour, user_lastvisit
	FROM ' . USERS_TABLE . '
	WHERE user_type = ' . USER_IGNORE . ' 
	ORDER BY user_lastvisit DESC';
$result = $db->sql_query_limit($sql, $number_last_visited_bots_number);

while ($row = $db->sql_fetchrow($result))
{
	$template->assign_block_vars('last_visited_bots', array(
		'BOT_NAME'			=> get_username_string('full', '', $row['username'], $row['user_colour']),
//		'LAST_VISIT_DATE'	=> $user->format_date($row['user_lastvisit'], 'd.m.Y, H:i'),
		'LAST_VISIT_DATE'	=> $user->format_date($row['user_lastvisit'], 'd/M/Y, H:i'),
	));
}
$db->sql_freeresult($result);

// Assign specific vars
$template->assign_vars(array(
	'LAST_VISITED_BOTS'		=> sprintf($user->lang['LAST_VISITED_BOTS'], $number_last_visited_bots_number),
	)
);

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/last_bots.html',
	));

?>