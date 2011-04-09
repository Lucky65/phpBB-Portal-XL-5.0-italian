<?php
/** 
*
* @name wordgraph.php
* @package phpBB3 Portal XL 5.0
* @version $Id: wordgraph.php,v 1.1.1.1 2009/05/15 05:16:45 damysterious Exp $
*
* @copyright (c) 2007, 2009  Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/

/*
* Start session management
*/
global $phpEx, $phpbb_root_path, $word;

/*
* Begin block script here
*/
$word_graph_max_words = $portal_config['portal_word_graph_max_words'];
$word_graph_ratio = $portal_config['portal_word_graph_ratio'];
$word_graph_word_counts = $portal_config['portal_word_graph_word_counts'];

$tag_var = 'keywords';
$u_action = append_sid("{$phpbb_root_path}search.$phpEx", 'i=search&amp;mode=search');

/*
* Get words and number of those words
*/
$sql = 'SELECT l.word_text, COUNT(*) AS word_count  
	FROM ' . SEARCH_WORDLIST_TABLE . ' AS l, ' . SEARCH_WORDMATCH_TABLE . ' AS m 
	WHERE m.word_id = l.word_id 
	GROUP BY m.word_id 
	ORDER BY word_count DESC';
$result = $db->sql_query_limit($sql, $word_graph_max_words);

$words_array = array();
while ($row = $db->sql_fetchrow($result))
{
	$words_array[$word] = $row['word_count'];
	$word_font_size = rand( $word_graph_ratio, 22 );
	
	$template->assign_block_vars('wordgraph_loop', array(
		'WORD' 				=> ($word_graph_word_counts) ? $row['word_text'] . '(' . $words_array[$row['word_text']] . ')' : $row['word_text'],
		'WORD_FONT_SIZE'    => $word_font_size,
		'WORD_SEARCH_URL' 	=> $u_action . "&amp;$tag_var=" . urlencode($row['word_text']),
	));
	
}
$db->sql_freeresult($result);

$template->assign_vars(array(
	'L_WORDGRAPH' => $user->lang['WORDGRAPH'],
));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/wordgraph.html',
	));

?>