<?php
/** 
*
* @author Tobi Schaefer http://www.tas2580.de/
*
* @package Knowledge_Base
* @version $Id: kb_categorie.php,v 1.1.1.1 2009/05/15 05:15:38 damysterious Exp $
* @copyright (c) 2007 SEO phpBB http://www.phpbb-seo.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'includes/functions_kb.' . $phpEx);
include($phpbb_root_path . 'includes/bbcode.' . $phpEx);
include('kb_common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/kb');

$id 	= request_var('id', 0);
$start	= request_var('start', 0);

// Categorie info
$sql = 'SELECT cat_id, cat_title, parent_id, description
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

$sql_array = array(
	'SELECT'	=> 'a.article_id, a.titel, a.description, a.cat_id, a.post_time, a.page_uri, a.hits, u.username, u.user_colour, a.user_id',

	'FROM'		=> array(
		KB_ARTICLE_TABLE	=> 'a',
	),
	'LEFT_JOIN'	=> array(
		array(
			'FROM'	=>	array(USERS_TABLE	=> 'u'),
			'ON'	=> 'u.user_id = a.user_id'
		),
	),
	'WHERE'		=> 'a.activ  = "1" 
		AND a.cat_id = ' . (int) $id,
	'ORDER_BY'	=> 'a.' . $db->sql_escape($kb_config['sort_order']) . ' ' . $db->sql_escape($kb_config['sort_order_dir'])
);
$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query_limit($sql, $config['topics_per_page'], $start);
while ($row = $db->sql_fetchrow($result))
{
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

	'TOTAL_TOPICS'	=> $total_articles,

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

$template->assign_block_vars('navlinks', array(
	'U_VIEW_FORUM'	=> append_sid("{$kb_root_path}"),
	'FORUM_NAME'	=> $user->lang['KBASE'])
);



$categorie_nav = get_categorie_branch($id, 'parents', 'descending', true);
foreach ($categorie_nav as $row)
{
	$template->assign_block_vars('navlinks', array(
		'U_VIEW_FORUM'	=> (KB_SEO == true) ? append_sid("{$kb_root_path}categorie-" . $row['cat_id'] . '.html') : append_sid("{$kb_root_path}kb_categorie.php", 'id=' . $row['cat_id']),
		'FORUM_NAME'	=> $row['cat_title'])
	);
}


// Output page
page_header($user->lang['KBASE'] . '-' . $cat_row['cat_title']);

$template->set_filenames(array(
	'body' => 'kb/kb_categorie.html')
);

page_footer();

?>