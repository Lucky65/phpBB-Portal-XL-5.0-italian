<?php
/**
*
* @name portal_mods.php
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_mods.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
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
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup(array('mods/portal_xl'));

$start = request_var('start', 0);
$limit = $portal_config['portal_attachments_number'];

// grab the mods
$sql = "SELECT mod_id
	FROM " . PORTAL_MODS_TABLE . " 
	ORDER BY mod_title ASC";
$result = $db->sql_query_limit($sql, $limit, $start);

$portal_mods = array();
while ($row = $db->sql_fetchrow($result))
{
	$portal_mods[] = (int) $row['mod_id'];
}
$db->sql_freeresult($result);

// count the mods
$sql = 'SELECT COUNT(mod_id) AS total_mods
	FROM ' . PORTAL_MODS_TABLE;
$result = $db->sql_query($sql);
$total_mods = (int) $db->sql_fetchfield('total_mods');
$db->sql_freeresult($result);

// did we got some MODS?
if (sizeof($portal_mods))
{
	$sql = 'SELECT * 
		FROM ' . PORTAL_MODS_TABLE . '
		WHERE ' . $db->sql_in_set('mod_id', $portal_mods);
	$result = $db->sql_query($sql);

	$id_cache = array();
	while ($row = $db->sql_fetchrow($result))
	{
		$id_cache[$row['mod_id']] = $row;
	}
	$db->sql_freeresult($result);

	for ($i = 0, $end = sizeof($portal_mods); $i < $end; $i++)
	{
		$mod_id = $portal_mods[$i];
		$row =& $id_cache[$mod_id];
		
	$template->assign_block_vars('portal_mods', array(
		'ROW_NUMBER'		=> $i + ($start + 1),
		'MOD_TITLE'			=> $row['mod_title'],
		'MOD_VERSION'		=> $row['mod_version'],
		'MOD_VERSION_TYPE'	=> $row['mod_version_type'],
		'MOD_DESC'			=> $row['mod_desc'],
		'MOD_AUTHOR'		=> $row['mod_author'],
		'MOD_URL'			=> $row['mod_url'],
		'MOD_DOWNLOAD_URL'	=> $row['mod_download'],
		
		'MOD_URL_IMG' 		=> "{$phpbb_root_path}portal/images/icons/user_go.png",
		'MOD_DOWNLOAD_IMG' 	=> "{$phpbb_root_path}portal/images/icons/page_white_go.png",
		));
	
		unset($id_cache[$mod_id]);
	}
}

// generate page
$template->assign_vars(array(
	'PAGINATION'	=> generate_pagination(append_sid("{$phpbb_root_path}portal/portal_mods.$phpEx"), $total_mods, $limit, $start),
	'PAGE_NUMBER'	=> on_page($total_mods, $limit, $start),
	'TOTAL_MODS'	=> ($total_mods == 1) ? $user->lang['MOD_LIST_MODS'] : sprintf($user->lang['MOD_LIST_MODS'], $total_mods)
	));

// Output the page
page_header($config['sitename'] . ' : ' . $user->lang['MODS_DATABASE']);

$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['MODS_DATABASE'],
	'U_VIEW_FORUM'  => append_sid("{$phpbb_root_path}portal/portal_mods.$phpEx")
	));

$template->set_filenames(array(
	'body' => 'portal/portal_mods.html',
	));
	
make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));

page_footer();
?>