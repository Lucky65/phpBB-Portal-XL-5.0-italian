<?php
/** 
*
* @name center_kb_articles.php
* @package phpBB3 Portal XL Premod
* @version $Id: center_kb_articles.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/
$allow_max_articles = $portal_config['portal_max_topics'];
$allow_kb_recent_limit = $portal_config['portal_recent_title_limit'];

include($phpbb_root_path . 'includes/functions_kb.' . $phpEx);
include($phpbb_root_path . 'knowledge/kb_common.' . $phpEx);

$user->setup('mods/kb');

$id 	= request_var('id', 0);
$start	= request_var('start', 0);

// Categorie info
$sql = 'SELECT *
	FROM ' . KB_CATEGORIE_TABLE . '
	WHERE cat_id = ' . (int) $id;
$result = $db->sql_query($sql, $kb_config['cache_time']);
$cat_row = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

// Sub categories
$data = make_categorie_list($id);

// Article in this categorie
$sql = 'SELECT COUNT(a.article_id) AS total_articles
	FROM ' . KB_ARTICLE_TABLE . " a
	WHERE a.activ = '1'
		AND a.cat_id = " . (int) $id;
$result = $db->sql_query($sql, $kb_config['cache_time']);
$total_articles = (int) $db->sql_fetchfield('total_articles');
$db->sql_freeresult($result);

// Artikel
$sql = "SELECT a.*, u.*
	FROM " . KB_ARTICLE_TABLE . " a,	" . USERS_TABLE . " u
	WHERE a.activ  = '1' 
	AND a.user_id = u.user_id
	ORDER BY post_time DESC";
$result = $db->sql_query_limit($sql, $allow_max_articles);
while ($row = $db->sql_fetchrow($result))
{
	if ($portal_config['portal_acronyms_allow'] == true)
	{
		$phpEx = substr(strrchr(__FILE__, '.'), 1);
		include_once($phpbb_root_path . 'portal/includes/functions_acronym.' . $phpEx);
		$row['description'] = acronym_pass($row['description']);
	}

	$dotts = strlen($row['description']) > 50 ? '...' : '';
	$template->assign_block_vars('article_row', array(
		'TITLE'				=> $row['titel'],
		'DESCRIPTION'		=> substr(str_replace('\n', '<br />', $row['description']), 0, 50) . $dotts,
		'TIME'				=> $user->format_date($row['post_time']),
		'HITS'				=> $row['hits'],
		'U_ARTICLE'			=> article_link($row['article_id'], $row['page_uri']),
		'AUTHOR_FULL'		=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']),
	));
}
$db->sql_freeresult($result);

// Assign index specific vars
$template->assign_vars(array(
	'PAGINATION'		=> generate_pagination('kb_categorie.php?id=' . $id, $total_articles, $config['topics_per_page'], $start),
	'PAGE_NUMBER'		=> on_page($total_articles, $config['topics_per_page'], $start),

	'TOTAL_TOPICS'		=> $total_articles,

	'CAT_TITLE'			=> $cat_row['cat_title'],
	'CAT_DESCRIPTION'	=> $cat_row['description'],
	'U_ADD_ARTICLE'		=> append_sid("{$kb_root_path}kbposting.$phpEx", 'cat_id=' . $id),
	'S_ADD_ARTICLE'		=> $auth->acl_get('u_add_kb'),
	'NOFORUMNAV'		=> true,
	'CLASSIC_INDEX'		=> $kb_config['kb_mode'],
	'S_SEARCHBOX_ACTION'	=> append_sid("{$kb_root_path}kb-search.$phpEx", 'terms=all'),
	'CATEGORIE_ID'		=> $id,
	'U_MCP'					=> ($auth->acl_get('m_activate_kb') || $auth->acl_get('m_report_kb') || $auth->acl_get('m_log_kb')) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=kb&mode=kb_main') : '',
));


// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/center_kb_articles.html',
	));

?>