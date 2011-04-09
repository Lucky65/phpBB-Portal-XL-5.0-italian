<?php
/**
*
* @name ajax_userinfo.php
* @package phpBB3 Portal XL 5.0
* @version $Id: ajax_userinfo.php,v 0.1.1 2010/12/30 03:23:16
*
* @copyright (c) 2007, 2010 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

// AJAX Userinfo by Tobi (http://www.seo-phpbb.org)


// Check that the $_GET['mode'] variable has been set and is a number
$ajax_userid = $_GET['userid'];

if (!is_numeric($ajax_userid))
{
	die('');
}

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_user.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
$user->session_begin();
$user->setup();

// Select some Userdata from DB
$sql = 'SELECT *
	FROM ' . USERS_TABLE . ' 
	WHERE user_id = '. (int) $ajax_userid;
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);

if (!$row['user_from'])
{
	$row['user_from'] = 'N/A';
}
if (!$row['user_website'])
{
	$row['user_website'] = 'N/A';
}

// Send XML File
echo header('Content-Type: text/xml; charset=utf-8');
echo '<' . '?xml version="1.0" encoding="UTF-8"?' . '>';
echo '<userdata>';
echo '<username>' . $row['username'] . '</username>';
echo '<colour>' . trim((empty($row['user_colour'])) ? '000000' : $row['user_colour']  ) . '</colour>';
echo '<regdate>' . $user->format_date($row['user_regdate']) . '</regdate>';
echo '<posts>' . $row['user_posts'] . '</posts>';
echo '<from>' . $row['user_from'] . '</from>';
echo '<lastvisit>' . $user->format_date($row['user_lastvisit']) . '</lastvisit>';
echo '<website>' .$row['user_website']. '</website>';
echo'</userdata>';

$db->sql_freeresult($result);

?>