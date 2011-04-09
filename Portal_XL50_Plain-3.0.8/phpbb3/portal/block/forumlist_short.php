<?php
/*
*
* @name forumlist_short.php
* @package phpBB3 Portal XL 5.0
* @version $Id: forumlist_short.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
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
$sql = 'SELECT forum_id, forum_name, forum_type, forum_desc, forum_image, forum_desc_uid, forum_desc_bitfield, forum_desc_options, forum_topics, forum_posts, forum_flags, forum_link
	FROM ' . FORUMS_TABLE . '
	ORDER BY left_id ASC';
$result = $db->sql_query($sql);	

while ($row = $db->sql_fetchrow($result))
{
	$template->assign_block_vars('forumlist', array(
		'S_IS_CAT'				=> ($row['forum_type'] == FORUM_LINK) ? '' : 'POSTS',
		'S_IS_LINK'				=> ($row['forum_type'] == FORUM_LINK) ? 'CLICKS' : '',
				
		'FORUM_ID'				=> $row['forum_id'],
		'FORUM_NAME'			=> $row['forum_name'],
		'FORUM_DESC'			=> generate_text_for_display($row['forum_desc'], $row['forum_desc_uid'], $row['forum_desc_bitfield'], $row['forum_desc_options']),
		'FORUM_TOPICS'			=> $row['forum_topics'],
		'FORUM_POSTS'			=> $row['forum_posts'],

		'CLICKS'				=> ($row['forum_type'] != FORUM_LINK || $row['forum_flags'] & FORUM_FLAG_LINK_TRACK) ? $row['forum_posts'] : '',
		'FORUM_IMAGE_SRC'		=> ($row['forum_image']) ? $phpbb_root_path . $row['forum_image'] : '',
		'U_VIEWFORUM'			=> ($row['forum_type'] != FORUM_LINK || ($row['forum_flags'] & FORUM_FLAG_LINK_TRACK)) ? append_sid("{$phpbb_root_path}viewforum.$phpEx", 'f=' . $row['forum_id']) : $row['forum_link'],
		)
	);
}
$db->sql_freeresult($result);

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/forumlist_short.html',
	));

?>