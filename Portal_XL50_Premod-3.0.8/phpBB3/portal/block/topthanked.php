<?php
/*
*
* @name topthanked.php
* @package phpBB3 Portal XL 5.0
* @version $Id: topthanked.php,v 1.1.1.1 2009/05/15 05:16:44 damysterious Exp $
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
global $cache, $config, $db, $user, $auth;
global $template;
	
$top_thanked = $portal_config['portal_attachments_number'];
	
/*
* Start session management
*/

/*
* Begin block script here
*/
$sql = 'SELECT username, user_id, user_type, user_colour, user_thanked AS num_thanks_from
	FROM ' . USERS_TABLE . '
		WHERE user_id <> ' . (int) ANONYMOUS . '
			AND user_type <> ' . (int) USER_IGNORE . '
				AND user_thanked > 0
		ORDER BY user_thanked DESC';
$result = $db->sql_query_limit($sql, $top_thanked, 0, 0);

while ($row = $db->sql_fetchrow($result))
{
	$top_thanked_list  .= (($top_thanked_list  != '') ? ', ' : '') . get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']) . '&nbsp;('. $row['num_thanks_from'] .')';
}
$db->sql_freeresult($result);

// Assign index specific vars
$template->assign_vars(array(
	'TOP_THANKED_LIST'			=> $top_thanked_list));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/topthanked.html',
	));

?>