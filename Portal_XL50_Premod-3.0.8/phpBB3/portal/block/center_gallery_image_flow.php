<?php
/*
*
* @name center_gallery_image_flow.php
* @package phpBB3 Portal XL Premod
* @version $Id: center_gallery_image_flow.php,v 1.28 2008/11/27 13:29:21 damysterious Exp $
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
* Random Image Flow Pics
*/
$album_id = $user_id = 0;
$limit_sql = 10;

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
	$sql = 'SELECT i.*, a.album_name, a.album_status, a.album_id, a.album_user_id
		FROM ' . GALLERY_IMAGES_TABLE . ' i
		LEFT JOIN ' . GALLERY_ALBUMS_TABLE . ' a
			ON i.image_album_id = a.album_id
		WHERE ' . $sql_permission_where . '
		ORDER BY i.image_time DESC';
	$result = $db->sql_query_limit($sql, $limit_sql);

	$center_gallery_image_flow = array();

	while( $row = $db->sql_fetchrow($result) )
	{
		$center_gallery_image_flow[] = $row;
	}

	if (count($center_gallery_image_flow) > 0)
	{
		for ($i = 0; $i < count($center_gallery_image_flow); $i += $gallery_config['cols_per_page'])
		{
			$template->assign_block_vars('image_flow', array());

			for ($j = $i; $j < ($i + $gallery_config['cols_per_page']); $j++)
			{
				if( $j >= count($center_gallery_image_flow) )
				{
					break;
				}

				$album_id = $center_gallery_image_flow[$j]['image_album_id'];

				$template->assign_block_vars('center_gallery_image_flow', array(
					'U_PIC' 		=> append_sid("{$phpbb_root_path}{$gallery_root_path}image_page.$phpEx?album_id=". $center_gallery_image_flow[$j]['image_album_id'] . '&amp;image_id=' . $center_gallery_image_flow[$j]['image_id']),
					'THUMBNAIL' 	=> append_sid("{$phpbb_root_path}{$gallery_root_path}image.$phpEx", 'album_id=' . $center_gallery_image_flow[$j]['image_album_id'] . '&amp;image_id=' . $center_gallery_image_flow[$j]['image_id']),
					'DESC' 			=> generate_text_for_display($center_gallery_image_flow[$j]['image_desc'], $center_gallery_image_flow[$j]['image_desc_uid'], $center_gallery_image_flow[$j]['image_desc_bitfield'], 7),
					'TITLE'			=> $center_gallery_image_flow[$j]['image_name'], 
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

// Set some stats, get posts count from forums data if we... hum... retrieve all forums data
$total_images	= $config['num_images'];
$total_comments	= $gallery_config['num_comments'];
$total_pgalleries	= $gallery_config['personal_counter'];
$l_total_image_s = ($total_images == 0) ? 'TOTAL_IMAGES_ZERO' : 'TOTAL_IMAGES_OTHER';
$l_total_comment_s = ($total_comments == 0) ? 'TOTAL_COMMENTS_ZERO' : 'TOTAL_COMMENTS_OTHER';
$l_total_pgallery_s = ($total_pgalleries == 0) ? 'TOTAL_PGALLERIES_ZERO' : 'TOTAL_PGALLERIES_OTHER';

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
	
	'TOTAL_IMAGES'			=> ($gallery_config['disp_statistic']) ? sprintf($user->lang[$l_total_image_s], $total_images) : '',
	'TOTAL_COMMENTS'		=> sprintf($user->lang[$l_total_comment_s], $total_comments),
	'TOTAL_PGALLERIES'		=> (gallery_acl_check('a_list', PERSONAL_GALLERY_PERMISSIONS)) ? sprintf($user->lang[$l_total_pgallery_s], $total_pgalleries) : '',
	'NEWEST_PGALLERIES'		=> ($total_pgalleries) ? sprintf($user->lang['NEWEST_PGALLERY'], get_username_string('full', $gallery_config['newest_pgallery_user_id'], $gallery_config['newest_pgallery_username'], $gallery_config['newest_pgallery_user_colour'], '', append_sid("{$phpbb_root_path}{$gallery_root_path}album.$phpEx", 'album_id=' . $gallery_config['newest_pgallery_album_id']))) : '',
	
	'U_GALLERY_MOD'			=> append_sid("{$phpbb_root_path}{$gallery_root_path}index.$phpEx"),
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
	'body' => 'portal/center_gallery_image_flow.html',
	));

?>