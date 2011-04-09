<?php
/**
*
* @name portal_smiles.php
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_smiles.php,v 1.0 2009/10/25 damysterious Exp $
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

// grab the smiles
$sql = "SELECT smiley_id
	FROM " . SMILIES_TABLE . " 
	ORDER BY smiley_id ASC";
$result = $db->sql_query_limit($sql, $limit, $start);

$portal_smiles = array();
while ($row = $db->sql_fetchrow($result))
{
	$portal_smiles[] = (int) $row['smiley_id'];
}
$db->sql_freeresult($result);

// count the smiles
$sql = 'SELECT COUNT(smiley_id) AS total_smiles
    FROM ' . SMILIES_TABLE;
$result = $db->sql_query($sql);
$total_smiles = (int) $db->sql_fetchfield('total_smiles');
$db->sql_freeresult($result);

// did we got some smiles?
if (sizeof($portal_smiles))
{
	$sql = 'SELECT * 
		FROM ' . SMILIES_TABLE . '
		WHERE ' . $db->sql_in_set('smiley_id', $portal_smiles);
	$result = $db->sql_query($sql);

	$id_cache = array();
	while ($row = $db->sql_fetchrow($result))
	{
		$id_cache[$row['smiley_id']] = $row;
	}
	$db->sql_freeresult($result);

	for ($i = 0, $end = sizeof($portal_smiles); $i < $end; $i++)
	{
		$smiley_id = $portal_smiles[$i];
		$row =& $id_cache[$smiley_id];
		
		$template->assign_block_vars('smilies', array(
			'ROW_NUMBER'	   => $i + ($start + 1),
			'SMILEY_ID'        => $row['smiley_id'],
			'A_SMILEY_CODE'    => addslashes($row['code']),
			'SMILEY_IMG'       => $phpbb_root_path . $config['smilies_path'] . '/' . $row['smiley_url'],
			'SMILEY_CODE'      => $row['code'],
			'SMILEY_DESC'      => $row['emotion'],
			'SMILEY_WIDTH'     => $row['smiley_width'],
			'SMILEY_HEIGHT'    => $row['smiley_height'],
		));
	
		unset($id_cache[$smiley_id]);
	}
}

// generate page
$template->assign_vars(array(
	'PAGINATION'	=> generate_pagination(append_sid("{$phpbb_root_path}portal/portal_smiles.$phpEx"), $total_smiles, $limit, $start),
	'PAGE_NUMBER'	=> on_page($total_smiles, $limit, $start),
	'TOTAL_SMILES'	=> ($total_smiles == 1) ? $user->lang['SMILIEY_COUNT'] : sprintf($user->lang['SMILIEY_COUNT'], $total_smiles)
	));

// Output the page
page_header($config['sitename'] . ' : ' . $user->lang['SMILES_TITLE']);

// Set up the Navlinks for the forums navbar
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'       => $user->lang['SMILES_TITLE'],
	'U_VIEW_FORUM'     => append_sid("{$phpbb_root_path}portal/portal_smiles.$phpEx")
	));

$template->set_filenames(array(
    'body' => 'portal/portal_smiles_body.html'
	));

make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));

page_footer();

?>