<?php
/** 
*
* @name cumulus_tag.php
* @package phpBB3 Portal XL 5.0
* @version $Id: cumulus_tag.php,v 1.1 2010/04/07 damysterious Exp $
*
* @copyright (c) 2007, 2010  Portal XL Group
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

/*
* Begin block script here
*/
$cloud_max_words = $portal_config['portal_word_graph_max_words'];
$word_graph_ratio = $portal_config['portal_word_graph_ratio'];
$cloud_counts = $portal_config['portal_word_graph_word_counts'];

$tag_var = 'keywords';

/*
* Possible switches are 'search' or 'users'
*/
if ( $_SERVER["SCRIPT_NAME"] == "{$phpbb_root_path}portal.$phpEx" )
{
  $cloud_mode = "users";
}
else
{
  $cloud_mode = 'search';
}

/*
* Get words and number of those words, or forum users to display in the cloud.
*/
switch($cloud_mode)
{
  case 'search':
	  $sql = 'SELECT l.word_text, COUNT(*) AS cloud_count
		  FROM ' . SEARCH_WORDLIST_TABLE . ' AS l, ' . SEARCH_WORDMATCH_TABLE . ' AS m
		  WHERE m.word_id = l.word_id
		  GROUP BY m.word_id
		  ORDER BY cloud_count DESC';
	  $result = $db->sql_query_limit($sql, $cloud_max_words);
	  
	  $clouds_array = array();
	  
	  while ($row = $db->sql_fetchrow($result))
	  {
		  $u_action = append_sid("{$phpbb_root_path}search.$phpEx", 'i=search&amp;mode=search');
		  $clouds_array[$row['word_text']] = $row['cloud_count'];
		  $cloud_font_size = rand( $word_graph_ratio, 14 );
	  
		  $template->assign_block_vars('clouds_loop', array(
			  'TAGS' 				=> ($cloud_counts) ? $cloud . '(' . $clouds_array[$row['word_text']] . ')' : $row['word_text'],
			  'TAGS_ALL_VIEW' 	=> $row['word_text'],
			  'TAGS_FONT_SIZE'    => $cloud_font_size,
			  'TAGS_SEARCH_URL' 	=> $u_action . "&amp;$tag_var=" . urlencode($row['word_text']),
		  ));
		  
	  }
	  $db->sql_freeresult($result);
  break;
  
  case 'users':
	  $sql = 'SELECT user_id, username, user_colour, user_avatar
		  FROM ' . USERS_TABLE . '
		  WHERE user_type <> ' . USER_IGNORE . '
		  ORDER BY username_clean ASC';
	  $result = $db->sql_query_limit($sql, $cloud_max_words);   
	  
	  $clouds_array = array();
	  
	  while ($row = $db->sql_fetchrow($result))
	  {
		  $u_action = append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=viewprofile&amp;u=" . $row['user_id']);
		  $clouds_array[$row['username']] = $row['cloud_count'];
		  $cloud_font_size = rand( $word_graph_ratio, 14 );
		  
		  // Send block variables to template
		  $template->assign_block_vars('clouds_loop', array(
			  'TAGS' 				=> ($cloud_counts) ? $cloud . '(' . $clouds_array[$row['username']] . ')' : $row['username'],
			  'TAGS_ALL_VIEW' 	=> $row['username'],
			  'TAGS_FONT_SIZE'    => $cloud_font_size,
			  'TAGS_SEARCH_URL' 	=> $u_action,
			  'TAGS_ALL_VIEW'	    => urlencode("<a href='" . $u_action . "' style='font-size:" . $cloud_font_size . "px' color='0x" . $row['user_colour'] . "'>" . $row['username'] . "</a>"),
		  ));
	  
	  }
	  $db->sql_freeresult($result);
  break;
}

$template->assign_vars(array(
	'L_WORDGRAPH' => $user->lang['WORDGRAPH'],
));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/cumulus_tag.html',
	));

?>