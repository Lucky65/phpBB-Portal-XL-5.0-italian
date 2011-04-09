<?php
/*
*
* @name portal_acronyms.php
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_acronyms.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
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

$start = request_var('start', 0);
$limit = $portal_config['portal_attachments_number'];

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup(array('mods/portal_xl'));

// Select Data from DB
$sql = 'SELECT acronym, description, acronym_id, acronym_url
		FROM ' . PORTAL_ACRONYMS_TABLE . ' 
		ORDER BY acronym';
$result = $db->sql_query($sql);
$num_acronyms = sizeof($db->sql_fetchrowset($result));
$result = $db->sql_query_limit($sql, $limit, $start);

	$portal_acronymrow = array();
	while($row = $db->sql_fetchrow($result))
	{
		$portal_acronymrow[] = $row;
	}

	if (!sizeof($portal_acronymrow))
	{
		trigger_error($user->lang['PAGES_NONE_EXIST']);
	}

	for ($i = 0 ; $i < sizeof($portal_acronymrow); $i++)
	{
		$acronym 		= $portal_acronymrow[$i]['acronym'];
		$description 	= $portal_acronymrow[$i]['description'];
		$acronym_id 	= $portal_acronymrow[$i]['acronym_id'];
		$acronym_url	= $portal_acronymrow[$i]['acronym_url'];

		$template->assign_block_vars("acronym", array(
			"S_ROW_COUNT" 	=> $i,
			"ACRONYM" 		=> $acronym,
			"REPLACEMENT" 	=> $description,
			"ACRONYM_URL" 	=> $acronym_url,
			));
	}

	$template->assign_vars(array(
		"ACRONYMS" 			=> $user->lang['ACRONYMS'],
		"L_ACRONYM" 		=> $user->lang['ACRONYM'],
		"L_REPLACEMENT" 	=> $user->lang['ACRONYM_REPLACEMENT'],
		"ACRONYM_TOTALS" 	=> $num_acronyms,
		));

	// generate page
	$template->assign_vars(array(
		'PAGINATION'	=> generate_pagination(append_sid("{$phpbb_root_path}portal/portal_acronyms.$phpEx"), $num_acronyms, $limit, $start),
		'PAGE_NUMBER'	=> on_page($num_acronyms, $limit, $start),
		));

// Output page
page_header($config['sitename'] . ' : ' . $user->lang['ACRONYM']);

$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['ACRONYM'],
	));

$template->set_filenames(array(
	'body' => 'portal/portal_acronyms.html',
	));
	
make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));

page_footer();

?>