<?php
/** 
*
* @author Tobi Schaefer http://www.tas2580.de/
*
* @package Knowledge_Base
* @version $Id: kb_show.php,v 1.1.1.1 2009/05/15 05:15:38 damysterious Exp $
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
include($phpbb_root_path . 'includes/bbcode.' . $phpEx);
include($phpbb_root_path . 'includes/functions_kb.' . $phpEx);
include('kb_common.' . $phpEx);


$config['allow_pm_attach'] = $config['allow_attachments'];

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup(array('viewforum', 'mods/kb'));

$id = request_var('id', 0);
$filename = request_var('filename', '');
$mode = request_var('mode', '');
$filename = str_replace('/' . KB_FOLDER . '/', '', $filename);

// Select article data
$where = ($filename != '') ? "a.page_uri = '" . $db->sql_escape($filename). "'" : "a.article_id = '$id'";
$sql_array = array(
	'SELECT'	=> 'c.cat_title, c.show_edits, t.name, a.article_id, a.page_uri, a.titel, a.post_id, a.description, a.hits, a.article, a.post_time, a.bbcode_bitfield, a.bbcode_uid, a.activ, a.enable_bbcode, a.enable_smilies, a.enable_magic_url, a.cat_id, a.type_id, a.user_id, a.last_edit_user, a.last_change, a.has_attachment, u.username, u.user_colour, u.user_id, p.topic_id, p.forum_id',

	'FROM'		=> array(
		KB_ARTICLE_TABLE	=> 'a',
	),
	'LEFT_JOIN'	=> array(
		array(
			'FROM'	=>	array(USERS_TABLE	=> 'u'),
			'ON'	=> 'a.user_id = u.user_id'
		),
		array(
			'FROM'	=>	array(POSTS_TABLE	=> 'p'),
			'ON'	=> 'p.post_id = a.post_id'
		),
		array(
			'FROM'	=>	array(KB_TYPES_TABLE	=> 't'),
			'ON'	=> 't.type_id = a.type_id'
		),

		array(
			'FROM'	=>	array(KB_CATEGORIE_TABLE	=> 'c'),
			'ON'	=> 'c.cat_id = a.cat_id'
		),
	),
	'WHERE'		=> $where,
);
$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql, $kb_config['cache_time']);
$row = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

// URL check if SEO
if (KB_SEO == true && !empty($row['page_uri']) && !isset($_GET['explain']) && !isset($_GET['highlight']) && $mode != 'print')
{
	$script_path = ( $config['script_path'] != '/' ) ? $config['script_path'] . '/' : '/';
	$needed_url = $script_path . KB_FOLDER . '/'. $row['page_uri'] . '.html';
	if($needed_url != $_SERVER['REQUEST_URI'])
	{
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: " . generate_board_url() . $needed_url);
	}
}

// Article activ?
if(!$row || ($row['activ'] == '0' && !$auth->acl_get('u_edit_kb')))
{	
	trigger_error($user->lang['NO_ARTICLE'] . '<br /><br />' . sprintf($user->lang['BACK_TO_KB'], '<a href="' . append_sid("{$kb_root_path}") . '">', '</a>'));
}

// last change user
if (($row['last_change'] != $row['post_time']) && $row['show_edits'] == '1')
{
	$sql = 'SELECT username, user_colour, user_id
		FROM ' . USERS_TABLE . '
		WHERE user_id = ' . (int) $row['last_edit_user'];
	$result = $db->sql_query($sql, $kb_config['cache_time']);
	$last_user = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);
	$last_change_user = get_username_string('full', $last_user['user_id'], $last_user['username'], $last_user['user_colour']);
}
else
{
	$last_change_user = '';
}

// Update views, but not for bots
if (!$user->data['is_bot'])
{
	$sql = 'UPDATE ' . KB_ARTICLE_TABLE . '
		SET hits = hits + 1
		WHERE article_id = ' . (int) $row['article_id'];
	$db->sql_query($sql);
}

// Get attachements
if ($auth->acl_get('u_download') && $row['has_attachment'] && $config['allow_attachments'])
{
	$sql = 'SELECT *
		FROM ' . ATTACHMENTS_TABLE . '
		WHERE post_msg_id = ' . (int) $row['article_id'] . '
				AND in_message = 2
				AND topic_id = 0
				AND is_orphan = 0
		ORDER BY filetime DESC';
	$result = $db->sql_query($sql);

	while ($arow = $db->sql_fetchrow($result))
	{
		$attachments[] = $arow;
	}
	$db->sql_freeresult($result);
}

$row['bbcode_options'] = (($row['enable_bbcode']) ? OPTION_FLAG_BBCODE : 0) +
    (($row['enable_smilies']) ? OPTION_FLAG_SMILIES : 0) + 
    (($row['enable_magic_url']) ? OPTION_FLAG_LINKS : 0);
$message = generate_text_for_display($row['article'], $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options']);

/*
if ($portal_config['portal_acronyms_allow'] == true)
{
	include_once($phpbb_root_path . 'portal/includes/functions_acronym.' . $phpEx);
	$message = acronym_pass($message);
}
*/

if (!empty($attachments) && $config['allow_attachments'])
{
	parse_attachments(0, $message, $attachments, $update_count);
	foreach ($attachments as $attachment)
	{
		$template->assign_block_vars('attachment', array(
			'DISPLAY_ATTACHMENT'	=> $attachment)
		);
	}
}

// highlight search words
$hilit_words = request_var('highlight', '');
$highlight_match = $highlight = '';
if ($hilit_words)
{
	foreach (explode(' ', trim($hilit_words)) as $word)
	{
		if (trim($word))
		{
			$word = str_replace('\*', '\w+?', preg_quote($word, '#'));
			$word = preg_replace('#(^|\s)\\\\w\*\?(\s|$)#', '$1\w+?$2', $word);
			$highlight_match .= (($highlight_match != '') ? '|' : '') . $word;
		}
	}
}
if ($highlight_match)
{
	$message = preg_replace('#(?!<.*)(?<!\w)(' . $highlight_match . ')(?!\w|[^<>]*(?:</s(?:cript|tyle))?>)#is', '<span class="posthilit">\1</span>', $message);
}

if($auth->acl_get('m_report_kb'))
{
	$sql = 'SELECT  report_id
		FROM ' . KB_REPORTS_TABLE . ' 
		WHERE article_id = ' . (int) $row['article_id'] . '
			AND report_closed = 0';
	$result = $db->sql_query($sql);
	$report = $db->sql_fetchrow($result);
	$report_id = $report['report_id'];
	$s_reported = ($report_id) ? true : false;
}
else
{
	$s_reported = false;
} 

// Assign index specific vars
$template->assign_vars(array(
	'HITS'					=> $row['hits']+1,
	'TYPE'					=> ($row['name'] !='0') ? $row['name'] : '',
	//'POST_URI'            => ($row['post_id'] != 0 && $row['topic_id']) ? generate_seourl_topic($row['topic_id'], false, $row['forum_id']) : '',
	'POST_URI'              => ($row['post_id'] != 0) ? append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id']) : '',
	'LAST_CHANGE'			=> ($row['last_change'] != $row['post_time'] && $row['show_edits'] == '1') ? $user->format_date($row['last_change']) : '',
	'USER'					=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']),
	'CHANGE_USER'			=> $last_change_user,
	'ARTICLE_TIME'			=> $user->format_date($row['post_time']),
	'ARTICLE'				=> $message,
	'ID'					=> $id,
	'EDIT_IMG' 				=> $user->img('icon_post_edit', 'EDIT_POST'),
	'DELETE_IMG' 			=> $user->img('icon_post_delete', 'DELETE_POST'),
	'INFO_IMG' 				=> $user->img('icon_post_info', 'VIEW_INFO'),
	'REPORT_IMG'			=> $user->img('icon_post_report', 'REPORT_POST'),
	'U_MCP'					=> ($auth->acl_get('m_activate_kb') || $auth->acl_get('m_report_kb') || $auth->acl_get('m_log_kb')) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=kb&mode=kb_main') : '',
	'U_ARTICLE_HISTORY'		=> append_sid("{$phpbb_root_path}mcp.$phpEx?i=kb&mode=kb_main&a=" . $row['article_id']),
	'U_ADD_ARTICLE'			=> append_sid("{$kb_root_path}kbposting.$phpEx"),
	'U_EDIT_ARTICLE'		=> append_sid("{$kb_root_path}kbposting.$phpEx", 'mode=edit&amp;id=' . $row['article_id']),
	'U_REPORT'				=> append_sid("{$kb_root_path}kbreport.$phpEx", 'id=' . $row['article_id']),
	'U_DELETE_ARTICLE'		=> append_sid("{$kb_root_path}index.$phpEx", 'mode=delete&amp;id=' . $row['article_id']),
	'TITEL'					=> $row['titel'],
	'NOFORUMNAV'			=> true,
	'DESCRIPTION'			=> str_replace('\n', '<br />', $row['description']),
	'S_ADD_ARTICLE'			=> $auth->acl_get('u_add_kb'),
	'S_EDIT_ARTICLE'		=> (($auth->acl_get('u_edit_kb') && $row['user_id'] == $user->data['user_id']) || $auth->acl_get('m_edit_kb')),
	'S_ARTICLE_LOG'			=> $auth->acl_get('m_log_kb'),
	'S_ARTICLE_REPORT'		=> $auth->acl_get('u_report_kb'),
	'S_DELETE_ARTICLE'		=> (($auth->acl_get('u_del_kb') && $row['user_id'] == $user->data['user_id']) || $auth->acl_get('m_del_kb')),
	'U_PRINT_TOPIC'			=> $auth->acl_get('u_print_kb') ? append_sid("{$kb_root_path}kb_show.$phpEx", 'mode=print&amp;id=' . $row['article_id']) : '',
	'S_POST_REPORTED'		=> $s_reported,
	'REPORTED_IMG'			=> $user->img('icon_topic_reported', 'POST_REPORTED'),
	'U_MCP_REPORT'			=> isset($report_id) ? append_sid("{$phpbb_root_path}mcp.$phpEx?i=kb&amp;mode=kb_reports&amp;part=view&amp;r=$report_id") : '',
	)
);

$template->assign_block_vars('navlinks', array(
	'U_VIEW_FORUM'	=> append_sid("{$kb_root_path}"),
	'FORUM_NAME'	=> $user->lang['KBASE'])
);

$categorie_nav = get_categorie_branch($row['cat_id'], 'parents', 'descending', true);
foreach ($categorie_nav as $row1)
{
	$template->assign_block_vars('navlinks', array(
		'U_VIEW_FORUM'	=> (KB_SEO == true) ? append_sid("{$kb_root_path}categorie-" . $row1['cat_id'] . '.html') : append_sid("{$kb_root_path}kb_categorie.php", 'id=' . $row1['cat_id']),
		'FORUM_NAME'	=> $row1['cat_title'])
	);
}

// Output page
page_header($row['titel']);

$template->set_filenames(array(
	'body' => $mode == 'print' ? 'kb/kb_print.html' : 'kb/kb_show.html')
);

page_footer();

?>