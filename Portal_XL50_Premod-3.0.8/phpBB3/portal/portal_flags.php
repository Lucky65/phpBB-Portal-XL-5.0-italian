<?php
/**
*
* @name portal_flags.php
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_flags.php,v 1.2 2009/11/02 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup(array('mods/flags'));

// How many users used which country?
$sql = 'SELECT user_country_flag, COUNT(user_country_flag) AS flag_count
	FROM ' . USERS_TABLE . '
	WHERE user_type IN (' . USER_NORMAL . ', ' . USER_FOUNDER . ')
	GROUP BY user_country_flag';
$result = $db->sql_query($sql);

$flag_count = array();
while ($row = $db->sql_fetchrow($result))
{
	$flag_count[$row['user_country_flag']] = $row['flag_count'];
}
$db->sql_freeresult($result);

$sql = 'SELECT *
	FROM ' . COUNTRY_FLAGS_TABLE . '
	ORDER BY flag_country';
$result = $db->sql_query($sql);

while ($row = $db->sql_fetchrow($result))
{
	$template->assign_block_vars('flags', array(
		'FLAG_COUNTRY'	=> $row['flag_country'],
		'FLAG_CODE'		=> $row['flag_code'],
		'USED_BY'		=> (isset($flag_count[$row['flag_code']])) ? $flag_count[$row['flag_code']] : 0,
		'FLAG_IMAGE'	=> ($row['flag_image']) ? $phpbb_root_path . $config['country_flags_path'] . '/' . $row['flag_image'] : $phpbb_root_path . 'images/spacer.gif',
	));
}
$db->sql_freeresult($result);

// Output page
page_header($config['sitename'] . ' : ' . $user->lang['COUNTRY_FLAGS']);

$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['COUNTRY_FLAGS'],
	'U_VIEW_FORUM'  => append_sid("{$phpbb_root_path}portal/portal_flags.$phpEx")
));

$template->set_filenames(array(
	'body' => 'portal/portal_flags_body.html')
);

make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));

page_footer();

?>