<?php
/** 
*
* @name kb_recent_articles.php
* @package phpBB3 Portal XL Premod
* @version $Id: kb_recent_articles.php,v 1.3 2009/10/13 damysterious Exp $
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

$user->setup('mods/kb');

// Artikel
$sql = "SELECT a.*, u.username, u.user_colour, u.user_id, u.user_country_flag
	FROM " . KB_ARTICLE_TABLE . " a,	" . USERS_TABLE . " u
	WHERE a.activ  = '1' 
	AND a.user_id = u.user_id
	ORDER BY post_time DESC";
$result = $db->sql_query_limit($sql, $allow_max_articles);
while ($row = $db->sql_fetchrow($result))
{
	$row['bbcode_options'] = (($row['enable_bbcode']) ? OPTION_FLAG_BBCODE : 0) +
    	(($row['enable_smilies']) ? OPTION_FLAG_SMILIES : 0) + 
    	(($row['enable_magic_url']) ? OPTION_FLAG_LINKS : 0);
	$message = generate_text_for_display($row['article'], $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options']);
	$message = smiley_text($message); // Always process smilies after parsing bbcodes

	// Country Flags Version 3.0.6
	if ($user->data['user_id'] != ANONYMOUS)
	{
		$flag_title = $flag_img = $flag_img_src = '';
		get_user_flag($row['user_country_flag'], $row['user_country'], $flag_title, $flag_img, $flag_img_src);
	}
	// Country Flags Version 3.0.6
		
	$row['username'] = '<b style="color:#' . $row['user_colour'] . '">' . $row['username'] . '</b> ' . $flag_img;

	if ($portal_config['portal_acronyms_allow'] == true)
	{
		$phpEx = substr(strrchr(__FILE__, '.'), 1);
		include_once($phpbb_root_path . 'portal/includes/functions_acronym.' . $phpEx);
		$message = acronym_pass($message);
	}

	$template->assign_block_vars('kb_recent_artikel', array(
		'ARTIKEL'			=> $message,
		'TITLE'				=> $row['titel'],
		'DESCRIPTION'		=> substr(str_replace('\n', '<br />', $row['description']), 0, $allow_kb_recent_limit) . '...',
		'TIME'				=> $user->format_date($row['post_time']),
		'HITS'				=> $row['hits'],
		'ARTIKEL_ID'		=> $row['article_id'],
		'U_ARTIKEL'			=> append_sid("{$phpbb_root_path}knowledge/kb_show." . $phpEx . '?id=' . $row['article_id']),
		'POST_AUTHOR_FULL'	=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']),
      	'U_USERNAME'   		=> append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['user_id']),
		'LAST_POST_IMG'		=> $user->img('icon_topic_latest', 'VIEW_LATEST_POST'),
		'NEWEST_POST_IMG'	=> $user->img('icon_topic_newest', 'VIEW_NEWEST_POST'),
		'TOPIC_LATEST_IMG'	=> '<img src="' . $phpbb_root_path . 'styles/' . $user->theme['template_path'] . '/imageset/icon_topic_latest.gif" />',
		'ARROW_DOWN_IMG'	=> '<img src="' . $phpbb_root_path . 'styles/' . $user->theme['template_path'] . '/theme/images/arrow_down.gif" />',
	));
}
$db->sql_freeresult($result);


// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/kb_recent_articles.html',
	));

?>