<?php
/*
*
* @name center_gallery_rondom_scroll.php
* @package phpBB3 Portal XL Premod
* @version $Id: center_gallery_rondom_scroll.php,v 1.28 2008/11/27 13:29:21 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/
$gallery_root_path = GALLERY_ROOT_PATH;
$include_pgalleries = false;

global $auth, $cache, $config, $db, $gallery_config, $portal_config, $template, $user;
global $location, $location_url, $album_data, $gallery_root_path, $phpbb_root_path, $phpEx, $album_access_array;

/**
* Get general album information
*/
if (!function_exists('load_gallery_config'))
{
	$recent_image_addon = true;
	include($phpbb_root_path . $gallery_root_path . 'includes/common.' . $phpEx);
	include($phpbb_root_path . $gallery_root_path . 'includes/permissions.' . $phpEx);
}

if (!isset($album_data))
{
	$user->add_lang('mods/gallery');
	$album_access_array = get_album_access_array();
	$albums = $cache->obtain_album_list();
}

if (!function_exists('generate_text_for_display'))
{
	include($phpbb_root_path . 'includes/message_parser.' . $phpEx);
}

/**
* Random Scroll Pics
*/
$album_id = $user_id = 0;
$limit_sql = 15;

if ($album_id && !(gallery_acl_check('i_view', $album_id) || gallery_acl_check('m_status', $album_id)))
{
	return;
}

$moderate_albums = $view_albums = array();
if ($album_id)
{
	if (gallery_acl_check('i_view', $album_id))
	{
		$view_albums[] = $album_id;
		$sql_permission_where = '(image_album_id = ' . $album_id . ' AND image_status <> ' . IMAGE_UNAPPROVED . ')';
	}
	if (gallery_acl_check('m_status', $album_id))
	{
		$moderate_albums[] = $album_id;
		$sql_permission_where = '(image_album_id = ' . $album_id . ')';
	}
	if (gallery_acl_check('c_read', $album_id))
	{
		$comment_albums[] = $album_id;
	}
}
else
{
	$moderate_albums = gallery_acl_album_ids('m_status', 'array', true, $include_pgalleries);
	$view_albums = array_diff(gallery_acl_album_ids('i_view', 'array', true, $include_pgalleries), $moderate_albums);
	$comment_albums = gallery_acl_album_ids('c_read', 'array', true, $include_pgalleries);

	$sql_permission_where = '(';
	$sql_permission_where .= ((sizeof($view_albums)) ? '(' . $db->sql_in_set('image_album_id', $view_albums) . ' AND image_status <> ' . IMAGE_UNAPPROVED . (($user_id) ? ' AND image_contest = ' . IMAGE_NO_CONTEST : '') . ')' : '');
	$sql_permission_where .= ((sizeof($moderate_albums)) ? ((sizeof($view_albums)) ? ' OR ' : '') . '(' . $db->sql_in_set('image_album_id', $moderate_albums, false, true) . ')' : '');
	$sql_permission_where .= ($user_id) ? ') AND image_user_id = ' . $user_id : ')';
}

if ((sizeof($view_albums) || sizeof($moderate_albums)) && $limit_sql)
{
	$sql = 'SELECT p.*, u.user_id, u.username, u.user_colour
		FROM ' . GALLERY_IMAGES_TABLE . ' AS p
		LEFT JOIN ' . USERS_TABLE . ' AS u
			ON p.image_user_id = u.user_id
		LEFT JOIN ' . GALLERY_ALBUMS_TABLE . ' AS ct
			ON p.image_album_id = ct.album_id
		WHERE ' . $sql_permission_where . ' 
			AND ( p.image_status = 1)
		GROUP BY p.image_id
			ORDER BY RAND()';
	$result = $db->sql_query_limit($sql, $limit_sql);

	$center_gallery_rondom_scroll = array();

	while( $row = $db->sql_fetchrow($result) )
	{
		$center_gallery_rondom_scroll[] = $row;
	}

	if (count($center_gallery_rondom_scroll) > 0)
	{
		for ($i = 0; $i < count($center_gallery_rondom_scroll); $i += $gallery_config['cols_per_page'])
		{
			$template->assign_block_vars('image_random_scroll', array());

			for ($j = $i; $j < ($i + $gallery_config['cols_per_page']); $j++)
			{
				if( $j >= count($center_gallery_rondom_scroll) )
				{
					break;
				}

				$album_id = $center_gallery_rondom_scroll[$j]['image_album_id'];

				$template->assign_block_vars('image_random_scroll_col', array(
					'U_PIC' 		=> append_sid("{$phpbb_root_path}{$gallery_root_path}image.$phpEx?image_id=" . $center_gallery_rondom_scroll[$j]['image_id']), 
					'THUMBNAIL'	    => generate_image_link('thumbnail', 'highslide', $center_gallery_rondom_scroll[$j]['image_id'], $center_gallery_rondom_scroll[$j]['image_name'], $center_gallery_rondom_scroll[$j]['image_album_id']),
					'U_IMAGE' 		=> append_sid("{$phpbb_root_path}{$gallery_root_path}album.$phpEx", "album_id=$album_id"),
					'IMAGE_NAME'	=> $center_gallery_rondom_scroll[$j]['image_name'],
					'DESC'		    => generate_text_for_display($center_gallery_rondom_scroll[$j]['image_desc'], $center_gallery_rondom_scroll[$j]['image_desc_uid'], $center_gallery_rondom_scroll[$j]['image_desc_bitfield'], 7),
    				'TITLE' 		=> $center_gallery_rondom_scroll[$j]['image_name'], 
    				'POSTER' 		=> $center_gallery_rondom_scroll[$j]['username'], 
    				'TIME' 			=> $user->format_date($center_gallery_rondom_scroll[$j]['image_time']), 
					));
			}
		}
	}
	else
	{
		$template->assign_block_vars('no_pics', array());
	}
}
else
{
	$template->assign_block_vars('no_pics', array());
}
$db->sql_freeresult($result);

/*
* Start output the page
*/
$template->assign_vars(array(
	'L_CATEGORY' 			=> $user->lang['ALBUM'],
	'L_PICS' 				=> $user->lang['IMAGES'],
	'L_LAST_PIC' 			=> $user->lang['LAST_IMAGE'],

	'S_COLS' 				=> $gallery_config['cols_per_page'],
	'S_COL_WIDTH' 			=> (100/$gallery_config['cols_per_page']) . '%',

//	'L_RECENT_PUBLIC_PICS' 	=> $user->lang['RECENT_PUBLIC_IMAGES'],
	'L_NO_PICS' 			=> $user->lang['NO_IMAGES'],
//	'L_PIC_TITLE' 			=> $user->lang['IMAGE_TITLE'],
	'L_VIEW' 				=> $user->lang['VIEWS'],
	'L_POSTER' 				=> $user->lang['POSTER'],
	'L_POSTED' 				=> $user->lang['POSTED'],

	'U_GALLERY_MOD'			=> append_sid("{$phpbb_root_path}{$gallery_root_path}index.$phpEx"),
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
	'body' => 'portal/center_gallery_rondom_scroll.html',
	));

?>