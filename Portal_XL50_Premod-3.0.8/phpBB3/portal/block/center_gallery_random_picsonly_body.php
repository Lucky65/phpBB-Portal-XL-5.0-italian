<?php
/*
*
* @name center_gallery_random_picsonly_body.php
* @package phpBB3 Portal XL Premod
* @version $Id: center_gallery_random_picsonly_body.php,v 1.25 2008/11/27 13:29:21 damysterious Exp $
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

/*
* Random Pics limited by gallery config column value
*/
$album_id = $user_id = 0;
$limit_sql = 1;

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
	$sql = 'SELECT p.*, u.user_id, u.username, u.user_colour, r.rate_image_id, AVG(r.rate_point) AS rating, COUNT(DISTINCT c.comment_id) AS comments
		FROM ' . GALLERY_IMAGES_TABLE . ' AS p
		LEFT JOIN ' . USERS_TABLE . ' AS u
			ON p.image_user_id = u.user_id
		LEFT JOIN ' . GALLERY_ALBUMS_TABLE . ' AS ct
			ON p.image_album_id = ct.album_id
		LEFT JOIN ' . GALLERY_RATES_TABLE . ' AS r
			ON p.image_id = r.rate_image_id
		LEFT JOIN ' . GALLERY_COMMENTS_TABLE . ' AS c
			ON p.image_id = c.comment_image_id
		WHERE ' . $sql_permission_where . ' 
			AND ( p.image_status = 1)
		GROUP BY p.image_id
			ORDER BY RAND()
			LIMIT ' . $gallery_config['cols_per_page'];
	$result = $db->sql_query($sql);

	$center_gallery_random_picsonly_row = array();

	while( $row = $db->sql_fetchrow($result) )
	{
		$center_gallery_random_picsonly_row[] = $row;
	}

	if (count($center_gallery_random_picsonly_row) > 0)
	{
		for ($i = 0; $i < count($center_gallery_random_picsonly_row); $i += $gallery_config['cols_per_page'])
		{
			$template->assign_block_vars('rand_pics', array());

			for ($j = $i; $j < ($i + $gallery_config['cols_per_page']); $j++)
			{
				if( $j >= count($center_gallery_random_picsonly_row) )
				{
					break;
				}

				if(!$center_gallery_random_picsonly_row[$j]['rating'])
				{
					$center_gallery_random_picsonly_row[$j]['rating'] = $user->lang['NOT_RATED'];
				}
				else
				{
					$center_gallery_random_picsonly_row[$j]['rating'] = round($center_gallery_random_picsonly_row[$j]['rating'], 2);
				}

				$album_id = $center_gallery_random_picsonly_row[$j]['image_album_id'];

				$template->assign_block_vars('rand_pics.rand_col', array(
					'U_PIC' 		=> append_sid("{$phpbb_root_path}{$gallery_root_path}image.$phpEx?image_id=" . $center_gallery_random_picsonly_row[$j]['image_id']), 
					'THUMBNAIL'	    => generate_image_link('thumbnail', 'highslide', $center_gallery_random_picsonly_row[$j]['image_id'], $center_gallery_random_picsonly_row[$j]['image_name'], $center_gallery_random_picsonly_row[$j]['image_album_id']),
					'U_IMAGE' 		=> append_sid("{$phpbb_root_path}{$gallery_root_path}album.$phpEx", "album_id=$album_id"),
					'IMAGE_NAME'	=> $center_gallery_random_picsonly_row[$j]['image_name'],
					'DESC'		    => generate_text_for_display($center_gallery_random_picsonly_row[$j]['image_desc'], $center_gallery_random_picsonly_row[$j]['image_desc_uid'], $center_gallery_random_picsonly_row[$j]['image_desc_bitfield'], 7),
					)
				);

				if ($center_gallery_random_picsonly_row[$j]['user_id'] == 'ALBUM_GUEST')
				{
					$recent_poster = ($center_gallery_random_picsonly_row[$j]['image_username'] == '') ? $user->lang['GUEST'] : $center_gallery_random_picsonly_row[$j]['image_username'];
				}

				$template->assign_block_vars('rand_pics.rand_detail', array(
					'TITLE'			=> $center_gallery_random_picsonly_row[$j]['image_name'],
					'POSTER_FULL'	=> get_username_string('full', $center_gallery_random_picsonly_row[$j]['user_id'], ($center_gallery_random_picsonly_row[$j]['user_id'] <> ANONYMOUS) ? $center_gallery_random_picsonly_row[$j]['username'] : $user->lang['GUEST'], $center_gallery_random_picsonly_row[$j]['user_colour']),
					'TIME'			=> $user->format_date($center_gallery_random_picsonly_row[$j]['image_time']),
					'VIEW'			=> $center_gallery_random_picsonly_row[$j]['image_view_count'],
					'RATING'		=> ($gallery_config['rate'] == 1) ? ( '<a href="' . append_sid("{$phpbb_root_path}{$gallery_root_path}image_page.$phpEx?image_id=" . $center_gallery_random_picsonly_row[$j]['image_id']) . '#rating">' . $user->lang['RATING'] . '</a>: ' . $center_gallery_random_picsonly_row[$j]['rating'] . '<br />') : '',
					'COMMENTS'		=> ($gallery_config['comment'] == 1) ? ( '<a href="' . append_sid("{$phpbb_root_path}{$gallery_root_path}image_page.$phpEx?image_id=" . $center_gallery_random_picsonly_row[$j]['image_id']) . '#comments">' . $user->lang['COMMENTS'] . '</a>: ' . $center_gallery_random_picsonly_row[$j]['comments'] . '<br />') : '',
					'IP'			=> ($user->data['user_type'] == USER_FOUNDER) ? $user->lang['IP'] . ': <a href="http://www.nic.com/cgi-bin/whois.cgi?query=' . $center_gallery_random_picsonly_row[$j]['image_user_ip'] . '" target="_blank">' . $center_gallery_random_picsonly_row[$j]['image_user_ip'] . '</a><br />' : '',
					'U_VIEW_CAT' 	=> append_sid("{$phpbb_root_path}{$gallery_root_path}album.$phpEx?album_id=". $center_gallery_random_picsonly_row[$j]['image_album_id']),
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
* Get/Create Albumstats
*/

/* Total Pics */
$sql = "SELECT count(*) AS count FROM " . GALLERY_IMAGES_TABLE; 
if( !($result = $db->sql_query($sql)) ) 
{ 
  message_die(GENERAL_ERROR, 'Could not obtain image count ', '', __LINE__, __FILE__, $sql); 
} 
$row = $db->sql_fetchrow($result); 
$TotalImages = $row['count']; 

/* Total Views */
$sql = "SELECT SUM(image_view_count) AS count FROM " . GALLERY_IMAGES_TABLE; 
if( !($result = $db->sql_query($sql)) ) 
{ 
  message_die(GENERAL_ERROR, 'Could not obtain image view count ', '', __LINE__, __FILE__, $sql); 
} 
$pic_view_count = $db->sql_fetchrow($result); 
$pic_view_count = $pic_view_count['count']; 

/* Total Ratings */
$sql = "SELECT SUM(rate_point) AS count FROM " . GALLERY_RATES_TABLE; 
if( !($result = $db->sql_query($sql)) ) 
{ 
  message_die(GENERAL_ERROR, 'Could not obtain image rating count ', '', __LINE__, __FILE__, $sql); 
} 
$rate_point = $db->sql_fetchrow($result); 
$rate_point = $rate_point['count']; 

/* Total Votes */
/*
$sql = "SELECT SUM(image_rate_count) AS count FROM " . GALLERY_IMAGES_TABLE; 
if( !($result = $db->sql_query($sql)) ) 
{ 
  message_die(GENERAL_ERROR, 'Could not obtain image pic rating count ', '', __LINE__, __FILE__, $sql); 
} 
$pic_rate_count = $db->sql_fetchrow($result); 
$pic_rate_count = $pic_rate_count['count']; 
*/

/* Total Comments */
$sql = "SELECT COUNT(comment_id) as total_comments FROM " . GALLERY_COMMENTS_TABLE; 
if( !($result = $db->sql_query($sql)) ) 
{ 
  message_die(GENERAL_ERROR, 'Could not obtain image rating count ', '', __LINE__, __FILE__, $sql); 
} 
$comment_id = $db->sql_fetchrow($result); 
$comment_id = $comment_id['total_comments']; 
$new_pic_comments = '';

/* New comments */
if ($allowed_albums != '')
{
	$sql = 'SELECT p.*, u.user_id, u.username, u.user_colour, r.rate_image_id, AVG(r.rate_point) AS rating, COUNT(DISTINCT c.comment_id) AS comments
		FROM ' . GALLERY_IMAGES_TABLE . ' AS p
		LEFT JOIN ' . USERS_TABLE . ' AS u
			ON p.image_user_id = u.user_id
		LEFT JOIN ' . GALLERY_ALBUMS_TABLE . ' AS ct
			ON p.image_album_id = ct.album_id
		LEFT JOIN ' . GALLERY_RATES_TABLE . ' AS r
			ON p.image_id = r.rate_image_id
		LEFT JOIN ' . GALLERY_COMMENTS_TABLE . ' AS c
			ON p.image_id = c.comment_image_id
		WHERE p.image_album_id IN (' . $allowed_albums . ') 
			AND ( p.image_status = 1)
		GROUP BY p.image_id
		ORDER BY p.image_time DESC
		LIMIT ' . $gallery_config['cols_per_page'];
	$result = $db->sql_query($sql);
	if( $result )
	{
		$center_gallery_random_picsonly_comment_row = $db->sql_fetchrow($result);
		if( $center_gallery_random_picsonly_comment_row['comments'] == 0 )
		{
			$new_pic_comments = ('<b>0</b>&nbsp;' . $user->lang['NEW_PIC_COMMENTS']);
		}
		else
		{
//			$new_pic_comments = ('<b>' . $center_gallery_random_picsonly_comment_row['total_comments'] . '</b>' . '&nbsp;' . $user->lang['NEW_PIC_COMMENTS']);
			$new_pic_comments = ($gallery_config['comment'] == 1) ? ( '<a href="'. append_sid("{$phpbb_root_path}{$gallery_root_path}image_page.$phpEx?id=". $center_gallery_random_picsonly_comment_row['image_id']) . '#comments">' . $user->lang['NEW_PIC_COMMENTS'] . '</a>: ' . $center_gallery_random_picsonly_comment_row['comments'] . '<br />') : '';
		}
	}
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

	'TOTAL_IMAGES' 			=> $TotalImages,
	'TOTAL_PICVIEW' 		=> $pic_view_count,
	// 'TOTAL_PICVOTES' 	=> $pic_rate_count,
	'TOTAL_RATEPOINT' 		=> $rate_point,
	'L_RANDOM_PIC' 			=> $user->lang['RANDOM_PIC'], 
	'L_TOTAL_IMAGES' 		=> $user->lang['TOTAL_IMAGES'],
	'L_TOTAL_PICVIEW' 		=> $user->lang['TOTAL_PICVIEW'],
	'L_TOTAL_RATEPOINT' 	=> $user->lang['TOTAL_RATEPOINT'],
	// 'L_TOTAL_PICVOTES' 	=> $user->lang['TOTAL_PICVOTES'],
	'L_NEWEST_PICS' 		=> $user->lang['NEWEST_PICS'],
	'L_NEW_PIC_COMMENTS' 	=> $new_pic_comments,
	'L_PIC_COMMENTS' 		=> $user->lang['PIC_COMMENTS'],
	'L_NO_NEW_PIC_COMMENTS' => $user->lang['NO_NEW_PIC_COMMENTS'],
	'U_NEW_PIC_COMMENTS' 	=> $new_pic_comments,
	'U_GALLERY_MOD'			=> append_sid("{$phpbb_root_path}{$gallery_root_path}index.$phpEx"),
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/center_gallery_random_picsonly_body.html',
	));

?>