<?php
/**
*
* @name portal_ranks.php
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_ranks.php,v 1.0 2009/10/25 damysterious Exp $
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
$user->setup(array('mods/portal_xl'));

$start = request_var('start', 0);
$limit = $portal_config['portal_attachments_number'];

// grab the ranks
$sql = "SELECT rank_id
	FROM " . RANKS_TABLE . " 
	ORDER BY rank_id ASC";
$result = $db->sql_query_limit($sql, $limit, $start);

$portal_ranks = array();
while ($row = $db->sql_fetchrow($result))
{
	$portal_ranks[] = (int) $row['rank_id'];
}
$db->sql_freeresult($result);

// count the ranks
$sql = 'SELECT COUNT(rank_id) AS total_ranks
    FROM ' . RANKS_TABLE;
$result = $db->sql_query($sql);
$total_ranks = (int) $db->sql_fetchfield('total_ranks');
$db->sql_freeresult($result);

// did we got some ranks?
if (sizeof($portal_ranks))
{
	$sql = 'SELECT * 
		FROM ' . RANKS_TABLE . '
		WHERE ' . $db->sql_in_set('rank_id', $portal_ranks);
	$result = $db->sql_query($sql);

	$id_cache = array();
	while ($row = $db->sql_fetchrow($result))
	{
		$id_cache[$row['rank_id']] = $row;
	}
	$db->sql_freeresult($result);

	for ($i = 0, $end = sizeof($portal_ranks); $i < $end; $i++)
	{
		$rank_id = $portal_ranks[$i];
		$row =& $id_cache[$rank_id];

		$template->assign_block_vars('rank', array(
			'ROW_NUMBER'	    => $i + ($start + 1),
			'RANK_ID'        	=> $row['rank_id'],
			'RANK_TITLE'        => (isset($row['rank_title'])) ? $row['rank_title'] : '',
			'RANK_MIN'        	=> (isset($row['rank_min']) && !$row['rank_special']) ? $row['rank_min'] : '-',
			'S_RANK_SPECIAL'    => (isset($row['rank_special'])) ? true : false,
			'RANK_IMAGE'        => (empty($row['rank_image'])) ? '' : $phpbb_root_path . $config['ranks_path'] . '/' . $row['rank_image'],
			'U_EDIT_RANK'       => ($auth->acl_get('a_ranks')) ? append_sid("{$phpbb_root_path}adm/index.$phpEx", 'i=ranks&amp;mode=ranks&amp;action=edit&amp;id=' . $row['rank_id'], true, $user->session_id) : '',
		));
	
		unset($id_cache[$rank_id]);
	}
}

// generate page
$template->assign_vars(array(
	'PAGINATION'	=> generate_pagination(append_sid("{$phpbb_root_path}portal/portal_ranks.$phpEx"), $total_ranks, $limit, $start),
	'PAGE_NUMBER'	=> on_page($total_ranks, $limit, $start),
	'TOTAL_RANKS'	=> ($total_ranks == 1) ? $user->lang['RANK_COUNT'] : sprintf($user->lang['RANK_COUNT'], $total_ranks)
	));

$template->assign_vars(array(
    'ICON_EDIT'       => '<img src="' . $phpbb_root_path . 'adm/images/icon_edit.gif" alt="' . $user->lang['RANK_EDIT'] . '" title="' . $user->lang['RANK_EDIT'] . '" />',
	));

// Output the page
page_header($config['sitename'] . ' : ' . $user->lang['RANKS']);

$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'      => $user->lang['RANKS'],
	'U_VIEW_FORUM'    => append_sid("{$phpbb_root_path}portal/portal_ranks.$phpEx")
	));

$template->set_filenames(array(
    'body' => 'portal/portal_ranks_body.html'
	));

make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));

page_footer();

?>