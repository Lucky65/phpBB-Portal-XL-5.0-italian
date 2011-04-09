<?php
/** 
*
* @author Tobi Schaefer http://www.tas2580.de/
*
* @package Knowledge_Base
* @version $Id: index.php,v 1.1.1.1 2009/05/15 05:15:37 damysterious Exp $
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
include('kb_common.' . $phpEx);

$mode	= request_var('mode', '');

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/kb');

//delete
if ($mode =='delete' && (($auth->acl_get('u_del_kb') && $row['user_id'] == $user->data['user_id']) || $auth->acl_get('m_del_kb')))
{
	$id	= request_var('id', 0);
	if(delete_article($id))
	{
		trigger_error($user->lang['ARTICLE_DELETED'] . '<br /><br />' . sprintf($user->lang['BACK_TO_KB'], '<a href="' . append_sid("{$kb_root_path}") . '">', '</a>'));
	}
}

$data = make_categorie_list(0);

$u_newest_article = isset($data['newest_id']) ? article_link($data['newest_id'], $data['newest_uri']) : '';

// Assign index specific vars
$template->assign_vars(array(
	'U_ADD_ARTICLE'			=> append_sid("{$kb_root_path}kbposting.$phpEx"),
	'U_ACTION'				=> append_sid("{$kb_root_path}kb-search.$phpEx"),
	'U_MODERATE'			=> append_sid("{$kb_root_path}kb_mcp.$phpEx"),
	'U_NEWEST_ARTICLE'		=> $u_newest_article,
	'S_ACTIVATE_ARTICLE'	=> $auth->acl_get('u_activate_kb'),
	'S_ADD_ARTICLE'			=> $auth->acl_get('u_add_kb'),
	'COUNT_ARTICLE'			=> $data['count_article'],
	'CONT_CATS'				=> $data['count_cats'],
	'NEWEST_ARTICLE'		=> isset($data['newest_title']) ? $data['newest_title'] : '',
	'KB_TITLE'				=> $kb_config['kb_title'],
	'KB_DESCRIPTION'		=> $kb_config['kb_description'],
	'CLASSIC_INDEX'			=> $kb_config['kb_mode'],
	'U_MCP'					=> ($auth->acl_get('m_activate_kb') || $auth->acl_get('m_report_kb') || $auth->acl_get('m_log_kb')) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=kb&mode=kb_main') : '',
	'NOFORUMNAV'			=> true,
	)
);

$template->assign_block_vars('navlinks', array(
	'U_VIEW_FORUM'	=> append_sid("{$kb_root_path}"),
	'FORUM_NAME'	=> $user->lang['KBASE'])
);

// Output page
page_header($config['sitename'] . ' : ' . $user->lang['KBASE']);

$template->set_filenames(array(
	'body' => 'kb/kb_index.html')
);

page_footer();

?>