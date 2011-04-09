<?php
/*
*
* @name portal_crawler_linker.php (v 1.0)
* @package phpBB3 Portal XL Premod
* @version $Id: portal_crawler_linker.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/

/**
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

/**
* Start session management
*/
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/portal_xl');

/**
* Output the basic page
*/
page_header($config['sitename'] . ' : ' . $user->lang['CRAWLER_LINKS']);

$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['CRAWLER_LINKS'],
));

$start = request_var('start', 0);
$limit = 500;

// Select only the word count here, we do not need the other stuff.
$sql = 'SELECT COUNT(w.word_id) AS count FROM ' . SEARCH_WORDLIST_TABLE . ' w';
$result = $db->sql_query($sql);
$row=$db->sql_fetchrow($result);
$db->sql_freeresult($result);
$num_words = $row['count'];
// Joining might improve the speed on some SQL servers.
$sql = "SELECT w.word_id, w.word_text, m.title_match, m.post_id, m.word_id
      FROM " . SEARCH_WORDLIST_TABLE . " w JOIN " . SEARCH_WORDMATCH_TABLE . " m ON
      (w.word_id = m.word_id)
      ORDER BY w.word_text ASC";
$result = $db->sql_query_limit($sql, $limit, $start);

$linkrow = array();
if ($row = $db->sql_fetchrow($result))
{
	do
	{
		$linkrow[] = $row;
	}
	while ($row = $db->sql_fetchrow($result));
	$db->sql_freeresult($result);

	$total_links = count($linkrow);
}

for($i = 0; $i < $total_links; $i = $i+10)
{
	$template->assign_block_vars('linkrow', array(
		'U_LINK1'	=> append_sid($phpbb_root_path . 'viewtopic.' . $phpEx . '?p=' . $linkrow[$i]['post_id'] . '&amp;hilit=' . $linkrow[$i]['word_text'] . '#p' . $linkrow[$i]['post_id']),
		'WORD1' => $linkrow[$i]['word_text'],
		'U_LINK2' 	=> append_sid($phpbb_root_path . 'viewtopic.' . $phpEx . '?p=' . $linkrow[$i+1]['post_id'] . '&amp;hilit=' . $linkrow[$i+1]['word_text'] . '#p' . $linkrow[$i+1]['post_id']),
		'WORD2' => $linkrow[$i+1]['word_text'],
		'U_LINK3' 	=> append_sid($phpbb_root_path . 'viewtopic.' . $phpEx . '?p=' . $linkrow[$i+2]['post_id'] . '&amp;hilit=' . $linkrow[$i+2]['word_text'] . '#p' . $linkrow[$i+2]['post_id']),
		'WORD3' => $linkrow[$i+2]['word_text'],
		'U_LINK4' 	=> append_sid($phpbb_root_path . 'viewtopic.' . $phpEx . '?p=' . $linkrow[$i+3]['post_id'] . '&amp;hilit=' . $linkrow[$i+3]['word_text'] . '#p' . $linkrow[$i+3]['post_id']),
		'WORD4' => $linkrow[$i+3]['word_text'],
		'U_LINK5' 	=> append_sid($phpbb_root_path . 'viewtopic.' . $phpEx . '?p=' . $linkrow[$i+4]['post_id'] . '&amp;hilit=' . $linkrow[$i+4]['word_text'] . '#p' . $linkrow[$i+4]['post_id']),
		'WORD5' => $linkrow[$i+4]['word_text'],
		'U_LINK6' 	=> append_sid($phpbb_root_path . 'viewtopic.' . $phpEx . '?p=' . $linkrow[$i+5]['post_id'] . '&amp;hilit=' . $linkrow[$i+5]['word_text'] . '#p' . $linkrow[$i+5]['post_id']),
		'WORD6' => $linkrow[$i+5]['word_text'],
		'U_LINK7' 	=> append_sid($phpbb_root_path . 'viewtopic.' . $phpEx . '?p=' . $linkrow[$i+6]['post_id'] . '&amp;hilit=' . $linkrow[$i+6]['word_text'] . '#p' . $linkrow[$i+6]['post_id']),
		'WORD7' => $linkrow[$i+6]['word_text'],
		'U_LINK8' 	=> append_sid($phpbb_root_path . 'viewtopic.' . $phpEx . '?p=' . $linkrow[$i+7]['post_id'] . '&amp;hilit=' . $linkrow[$i+7]['word_text'] . '#p' . $linkrow[$i+7]['post_id']),
		'WORD8' => $linkrow[$i+7]['word_text'],
		'U_LINK9' 	=> append_sid($phpbb_root_path . 'viewtopic.' . $phpEx . '?p=' . $linkrow[$i+8]['post_id'] . '&amp;hilit=' . $linkrow[$i+8]['word_text'] . '#p' . $linkrow[$i+8]['post_id']),
		'WORD9' => $linkrow[$i+8]['word_text'],
		'U_LINK10' 	=> append_sid($phpbb_root_path . 'viewtopic.' . $phpEx . '?p=' . $linkrow[$i+9]['post_id'] . '&amp;hilit=' . $linkrow[$i+9]['word_text'] . '#p' . $linkrow[$i+9]['post_id']),
		'WORD10' => $linkrow[$i+9]['word_text']
		));
}
/**
* End processing
*/

$template->assign_vars(array(
	'PAGINATION'            	=> generate_pagination(append_sid("{$phpbb_root_path}portal/portal_crawler_linker.$phpEx"), $num_words, $limit, $start ),
	'PAGE_NUMBER'           	=> on_page($num_words, $limit, $start) ,
	'TOTALWORDS'				=> $num_words,
	'L_CRAWLER_LINKS_TOTAL'		=> $user->lang['CRAWLER_LINKS_TOTAL'],
	'L_CRAWLER_LINKS'			=> $user->lang['CRAWLER_LINKS'],
	'U_CRAWLER_LINKER'			=> append_sid("{$phpbb_root_path}portal/portal_crawler_linker.$phpEx"),
	));

$template->set_filenames(array(
	'body' => 'portal/portal_crawler_linker.html')
);

make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));

page_footer();

?> 