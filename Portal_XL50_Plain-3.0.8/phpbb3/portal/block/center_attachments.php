<?php
/*
*
* @name center_attachments.php
* @package phpBB3 Portal XL 5.0
* @version $Id: center_attachments.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
$number_of_attachments = $portal_config['portal_attachments_number'];
$allow_recent_title_limit = $portal_config['portal_recent_title_limit'];

/**
* Fetch attachments
*/
$filter_forum 		= request_var('f',0);
$filter_type 		= request_var('type','');
$filter_size 		= request_var('size',0);
$order 				= request_var('order','');
$start 				= request_var('att', 0);
$start 				= ($start < 0) ? 0 : $start;
$limit_attachments 	= $number_of_attachments; // number of attachments allowed to show, set in portal's ACP

/* filetime ' . ((!$config['display_order']) ? 'DESC' : 'ASC') . ', post_msg_id ASC'
* database filter routines
*/
$filter_forum_sql 	= ($filter_forum != 0) ? ' AND p.forum_id = "' . $filter_forum . '"' : "";
$filter_type_sql 	= ($filter_type != "") ? ' AND a.extension = "' . $filter_type . '"' : "";
$filter_size_sql 	= ($filter_size > 0) ? ' AND filesize >= ' . $filter_size . '"' : "";
switch ($order) {
	default:
		$order_sql = "LOWER(a.filetime) DESC";
		break;
}

/*
* Set up sql vars
*/
$sql_array = array(
    'SELECT'    			=> 't.*, p.*, u.username, f.forum_name, f.forum_id, a.* ',
    'FROM'        			=> array(
		POSTS_TABLE			=> 'p',
        TOPICS_TABLE        => 't',
        USERS_TABLE         => 'u',
        FORUMS_TABLE        => 'f',
        ATTACHMENTS_TABLE  	=> 'a'
    ),
    'WHERE'        			=> "p.post_attachment = 1
        $filter_forum_sql
        $filter_type_sql
        AND a.post_msg_id = p.post_id
        AND t.topic_id = p.topic_id
        AND u.user_id = p.poster_id
        AND f.forum_id = p.forum_id",
    'ORDER_BY'    			=> $order_sql
);
/*
* query database
*/
$sql = $db->sql_build_query('SELECT', $sql_array);    
$result = $db->sql_query($sql);
$num_attachments = sizeof($db->sql_fetchrowset($result));
$result = $db->sql_query_limit($sql, $limit_attachments, $start);

while ($row = $db->sql_fetchrow($result))
{
		
	if ($auth->acl_get('u_download') && $auth->acl_get('f_download', $row['forum_id']))
	{
		
		$size_lang = ($row['filesize'] >= 1048576) ? $user->lang['MB'] : (($row['filesize'] >= 1024) ? $user->lang['KB'] : $user->lang['BYTES']);
		$row['filesize'] = ($row['filesize'] >= 1048576) ? round((round($row['filesize'] / 1048576 * 100) / 100), 2) : (($row['filesize'] >= 1024) ? round((round($row['filesize'] / 1024 * 100) / 100), 2) : $row['filesize']);
	    $replace = str_replace(array('_','.rar','.zip','.jpg','.gif','.png','.RAR','.ZIP','.JPG','.GIF','.PNG','.','-'), ' ', $row['real_filename']);
		$ShortFileName = character_limit($replace, $allow_recent_title_limit);

		$template->assign_block_vars('attach', array(
		'FILESIZE'			=> $row['filesize'] . ' ' . $size_lang,
		'FILETIME'			=> $user->format_date($row['filetime']),
		'REAL_FILENAME'		=> $ShortFileName,
		'ATTACH_DATE' 		=> $user->format_date($row['filetime'], $format = 'd M Y'),		
		'PHYSICAL_FILENAME'	=> basename($row['physical_filename']),
		'ATTACH_ID'			=> $row['attach_id'],
		'ATTACH_COUNT'		=> $row['download_count'],		
		'POST_IDS'			=> (!empty($post_id[$row['attach_id']])) ? $post_id[$row['attach_id']] : '',
		'ATTACH_ICON_IMG'	=> ($auth->acl_get('u_download') && $auth->acl_get('f_download', $row['forum_id']) && $row['topic_attachment']) ? $user->img('icon_topic_attach', $user->lang['TOTAL_ATTACHMENTS']) : '',
		'U_FILE'			=> append_sid($phpbb_root_path . 'download/file.' . $phpEx, 'id=' . $row['attach_id']),
		'U_FILELINK'		=> append_sid($phpbb_root_path . 'viewtopic.' . $phpEx . '?t=' . $row['topic_id'] . '&amp;p=' . $row['post_id'] . '#p' . $row['post_id']),
		));
	
	} // end auth downloads
  		
}
$db->sql_freeresult($result);
unset($row);

if ($num_attachments <> 0)
{
	$template->assign_vars(array(
		'ATTACH_PAGINATION'         => generate_repository(append_sid("{$phpbb_root_path}portal.$phpEx"), $num_attachments, $limit_attachments, $start, 'attachments'),
		'ATTACH_PAGE_NUMBER'        => on_page($num_attachments, $limit_attachments, $start) ,
		'ATTACH_TOTAL_ATTACHMENTS'	=> $num_attachments,
		'L_TOTAL_ATTACHMENTS'		=> $user->lang['TOTAL_ATTACHMENTS'],

		));
}

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/center_attachments.html',
	));

?>