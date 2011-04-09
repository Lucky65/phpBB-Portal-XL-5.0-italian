<?php
/**
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Available functions
*
* display_albums()
* generate_album_nav()
* get_album_parents()
* get_album_moderators()
* assign_image_block()
*
*/

/**
* Display albums
*
* borrowed from phpBB3
* @author: phpBB Group
* @function: display_forums
*/
function display_albums($root_data = '', $display_moderators = true, $return_moderators = false)
{
	global $auth, $db, $gallery_config, $template, $user;
	global $phpbb_root_path, $gallery_root_path, $phpEx;

	$album_rows = $subalbums = $album_ids = $album_ids_moderator = $album_moderators = $active_album_ary = array();
	$parent_id = $visible_albums = 0;
	$sql_from = '';
	$mode = request_var('mode', '');

	// Mark albums read?
	$mark_read = request_var('mark', '');

	if ($mark_read == 'all')
	{
		$mark_read = '';
	}

	if (!$root_data)
	{
		if ($mark_read == 'albums')
		{
			$mark_read = 'all';
		}
		$root_data = array('album_id' => NON_PERSONAL_ALBUMS);
		$sql_where = 'a.album_user_id = ' . NON_PERSONAL_ALBUMS;
		
		// www.phpBB-SEO.com SEO TOOLKIT BEGIN -> Zero dupe
		global $phpbb_seo;
		if ( !$phpbb_seo->seo_opt['zero_dupe']['strict'] ) { // strict mode is here a bit faster
			if ( !empty($phpbb_seo->seo_static['albumindex']) ) {
				$phpbb_seo->set_cond( (boolean) (utf8_strpos($phpbb_seo->seo_path['uri'], $phpbb_seo->seo_static['albumindex']) === false), 'do_redir');
			} else {
				$phpbb_seo->set_cond( (boolean) (utf8_strpos($phpbb_seo->seo_path['uri'], "index.$phpEx") !== false), 'do_redir');
			}
		}
		$phpbb_seo->seo_chk_dupe('', '', $phpbb_root_path . $gallery_root_path);
		// www.phpBB-SEO.com SEO TOOLKIT END -> Zero dupe
		
	}
	else if ($root_data == 'personal')
	{
		if ($mark_read == 'albums')
		{
			$mark_read = 'all';
		}
		$root_data = array('album_id' => 0);//@todo: I think this is incorrect!?
		$sql_where = 'a.album_user_id > ' . NON_PERSONAL_ALBUMS;
		$num_pgalleries = $gallery_config['personal_counter'];
		$first_char = request_var('first_char', '');
		if ($first_char == 'other')
		{
			// Loop the ASCII: a-z
			for ($i = 97; $i < 123; $i++)
			{
				$sql_where .= ' AND u.username_clean NOT ' . $db->sql_like_expression(chr($i) . $db->any_char);
			}
		}
		else if ($first_char)
		{
			$sql_where .= ' AND u.username_clean ' . $db->sql_like_expression(substr($first_char, 0, 1) . $db->any_char);
		}

		if ($first_char)
		{
			// We do not view all personal albums, so we need to recount, for the pagination.
			$sql_array = array(
				'SELECT'		=> 'count(a.album_id) as pgalleries',
				'FROM'			=> array(GALLERY_ALBUMS_TABLE => 'a'),

				'LEFT_JOIN'		=> array(
					array(
						'FROM'		=> array(USERS_TABLE => 'u'),
						'ON'		=> 'u.user_id = a.album_user_id',
					),
				),

				'WHERE'			=> 'a.parent_id = 0 AND ' . $sql_where,
			);
			$sql = $db->sql_build_query('SELECT', $sql_array);
			$result = $db->sql_query($sql);
			$num_pgalleries = $db->sql_fetchfield('pgalleries');
			$db->sql_freeresult($result);
		}

		$mode_personal = true;
		$start = request_var('start', 0);
		$limit = $gallery_config['pgalleries_per_page'];
		
		// www.phpBB-SEO.com SEO TOOLKIT BEGIN -> Zero dupe
		global $phpbb_seo;
		$start = max(0, request_var('start', 0));
		// Make sure $start is set to the last page if it exceeds the amount
		if ($start < 0 || $start > $num_pgalleries) {
			$start = ($start < 0) ? 0 : floor(($num_pgalleries) / $limit) * $limit;
		}
		$phpbb_seo->seo_opt['zero_dupe']['start'] = $phpbb_seo->seo_chk_start( $start, $limit );
		$phpbb_seo->seo_opt['zero_dupe']['redir_def'] = array(
			'mode' => array('val' => 'personal', 'keep' => true),
			'first_char' =>  array('val' => $first_char, 'keep' => !empty($first_char)),
			'start' => array('val' => $phpbb_seo->seo_opt['zero_dupe']['start'], 'keep' => true),
		);
		$phpbb_seo->seo_chk_dupe('', '', $phpbb_root_path . $gallery_root_path);
		// www.phpBB-SEO.com SEO TOOLKIT END -> Zero dupe
		
		$template->assign_vars(array(
			'PAGINATION'				=> generate_pagination(append_sid("{$phpbb_root_path}{$gallery_root_path}index.$phpEx", 'mode=' . $mode . (($first_char) ? '&amp;first_char=' . $first_char : '')), $num_pgalleries, $limit, $start),
			'TOTAL_PGALLERIES_SHORT'	=> sprintf($user->lang['TOTAL_PGALLERIES_SHORT'], $num_pgalleries),
			'PAGE_NUMBER'				=> on_page($num_pgalleries, $limit, $start),
		));
	}
	else
	{
		$sql_where = 'a.left_id > ' . $root_data['left_id'] . ' AND a.left_id < ' . $root_data['right_id'] . ' AND a.album_user_id = ' . $root_data['album_user_id'];
	}

	$sql_array = array(
		'SELECT'	=> 'a.*, at.mark_time',
		'FROM'		=> array(GALLERY_ALBUMS_TABLE => 'a'),

		'LEFT_JOIN'	=> array(
			array(
				'FROM'	=> array(GALLERY_ATRACK_TABLE => 'at'),
				'ON'	=> 'at.user_id = ' . $user->data['user_id'] . ' AND a.album_id = at.album_id'
			)
		),

		'ORDER_BY'	=> 'a.album_user_id, a.left_id',
	);

	if (isset($mode_personal))
	{
		$sql_array['LEFT_JOIN'][] = array(
			'FROM'	=> array(USERS_TABLE => 'u'),
			'ON'	=> 'u.user_id = a.album_user_id'
		);
		$sql_array['ORDER_BY'] = 'u.username_clean, a.left_id';
	}
	$sql_array['LEFT_JOIN'][] = array(
		'FROM'	=> array(GALLERY_CONTESTS_TABLE => 'c'),
		'ON'	=> 'c.contest_album_id = a.album_id'
	);
	$sql_array['SELECT'] = $sql_array['SELECT'] . ', c.contest_marked';


	$sql = $db->sql_build_query('SELECT', array(
		'SELECT'	=> $sql_array['SELECT'],
		'FROM'		=> $sql_array['FROM'],
		'LEFT_JOIN'	=> $sql_array['LEFT_JOIN'],
		'WHERE'		=> $sql_where,
		'ORDER_BY'	=> $sql_array['ORDER_BY'],
	));

	$result = $db->sql_query($sql);

	$album_tracking_info = array();
	$branch_root_id = $root_data['album_id'];
	while ($row = $db->sql_fetchrow($result))
	{
		$album_id = $row['album_id'];

		// Mark albums read?
		if ($mark_read == 'albums' || $mark_read == 'all')
		{
			if (gallery_acl_check('a_list', $album_id, $row['album_user_id']))
			{
				$album_ids[] = $album_id;
				continue;
			}
		}

		// Category with no members
		if (!$row['album_type'] && ($row['left_id'] + 1 == $row['right_id']))
		{
			continue;
		}

		// Skip branch
		if (isset($right_id))
		{
			if ($row['left_id'] < $right_id)
			{
				continue;
			}
			unset($right_id);
		}

		if (!gallery_acl_check('a_list', $album_id, $row['album_user_id']))
		{
			// if the user does not have permissions to list this album, skip everything until next branch
			$right_id = $row['right_id'];
			continue;
		}

		$album_tracking_info[$album_id] = (!empty($row['mark_time'])) ? $row['mark_time'] : ((isset($user->gallery['user_lastmark'])) ? $user->gallery['user_lastmark'] : 0);

		$row['album_images'] = $row['album_images'];
		$row['album_images_real'] = $row['album_images_real'];

		if ($row['parent_id'] == $root_data['album_id'] || $row['parent_id'] == $branch_root_id)
		{
			if ($row['album_type'])
			{
				$album_ids_moderator[] = (int) $album_id;
			}

			// Direct child of current branch
			$parent_id = $album_id;
			$album_rows[$album_id] = $row;

			if (!$row['album_type'] && $row['parent_id'] == $root_data['album_id'])
			{
				$branch_root_id = $album_id;
			}
			$album_rows[$parent_id]['album_id_last_image'] = $row['album_id'];
			$album_rows[$parent_id]['album_type_last_image'] = $row['album_type'];
			$album_rows[$parent_id]['album_contest_marked'] = $row['contest_marked'];
			$album_rows[$parent_id]['orig_album_last_image_time'] = $row['album_last_image_time'];
		}
		else if ($row['album_type'])
		{
			$subalbums[$parent_id][$album_id]['display'] = ($row['display_on_index']) ? true : false;
			$subalbums[$parent_id][$album_id]['name'] = $row['album_name'];
			$subalbums[$parent_id][$album_id]['orig_album_last_image_time'] = $row['album_last_image_time'];
			$subalbums[$parent_id][$album_id]['children'] = array();

			if (isset($subalbums[$parent_id][$row['parent_id']]) && !$row['display_on_index'])
			{
				$subalbums[$parent_id][$row['parent_id']]['children'][] = $album_id;
			}

			$album_rows[$parent_id]['album_images'] += $row['album_images'];
			$album_rows[$parent_id]['album_images_real'] += $row['album_images_real'];

			if ($row['album_last_image_time'] > $album_rows[$parent_id]['album_last_image_time'])
			{
				$album_rows[$parent_id]['album_last_image_id'] = $row['album_last_image_id'];
				$album_rows[$parent_id]['album_last_image_name'] = $row['album_last_image_name'];
				$album_rows[$parent_id]['album_last_image_time'] = $row['album_last_image_time'];
				$album_rows[$parent_id]['album_last_user_id'] = $row['album_last_user_id'];
				$album_rows[$parent_id]['album_last_username'] = $row['album_last_username'];
				$album_rows[$parent_id]['album_last_user_colour'] = $row['album_last_user_colour'];
				$album_rows[$parent_id]['album_type_last_image'] = $row['album_type'];
				$album_rows[$parent_id]['album_contest_marked'] = $row['contest_marked'];
				$album_rows[$parent_id]['album_id_last_image'] = $album_id;
			}
		}
	}
	$db->sql_freeresult($result);

	// Handle marking albums
	if ($mark_read == 'albums' || $mark_read == 'all')
	{
		$redirect = build_url('mark', 'hash');
		$token = request_var('hash', '');
		if (check_link_hash($token, 'global'))
		{
			if ($mark_read == 'all')
			{
				gallery_markread('all');
				$message = sprintf($user->lang['RETURN_INDEX'], '<a href="' . $redirect . '">', '</a>');
			}
			else
			{
				gallery_markread('albums', $album_ids);
				$message = sprintf($user->lang['RETURN_ALBUM'], '<a href="' . $redirect . '">', '</a>');
			}
			meta_refresh(3, $redirect);
			trigger_error($user->lang['ALBUMS_MARKED'] . '<br /><br />' . $message);
		}
		else
		{
			$message = sprintf($user->lang['RETURN_PAGE'], '<a href="' . $redirect . '">', '</a>');
			meta_refresh(3, $redirect);
			trigger_error($message);
		}
	}


	// Grab moderators ... if necessary
	if ($display_moderators)
	{
		if ($return_moderators)
		{
			$album_ids_moderator[] = $root_data['album_id'];
		}
		get_album_moderators($album_moderators, $album_ids_moderator);
	}

	// Used to tell whatever we have to create a dummy category or not.
	$last_catless = true;
	foreach ($album_rows as $row)
	{
		// Empty category
		if (($row['parent_id'] == $root_data['album_id']) && ($row['album_type'] == ALBUM_CAT))
		{
			$template->assign_block_vars('albumrow', array(
				'S_IS_CAT'				=> true,
				'ALBUM_ID'				=> $row['album_id'],
				'ALBUM_NAME'			=> $row['album_name'],
				'ALBUM_DESC'			=> generate_text_for_display($row['album_desc'], $row['album_desc_uid'], $row['album_desc_bitfield'], $row['album_desc_options']),
				'ALBUM_FOLDER_IMG'		=> '',
				'ALBUM_FOLDER_IMG_SRC'	=> '',
				'ALBUM_IMAGE'			=> ($row['album_image']) ? $phpbb_root_path . $row['album_image'] : '',
				'U_VIEWALBUM'			=> append_sid("{$phpbb_root_path}{$gallery_root_path}album.$phpEx", 'album_id=' . $row['album_id']))
			);

			continue;
		}

		$visible_albums++;
		if (($mode == 'personal') && (($visible_albums <= $start) || ($visible_albums > ($start + $limit))))
		{
			continue;
		}

		$album_id = $row['album_id'];
		$album_unread = (isset($album_tracking_info[$album_id]) && ($row['orig_album_last_image_time'] > $album_tracking_info[$album_id]) && ($user->data['user_id'] != ANONYMOUS)) ? true : false;

		$folder_image = $folder_alt = $l_subalbums = '';
		$subalbums_list = array();

		// Generate list of subalbums if we need to
		if (isset($subalbums[$album_id]))
		{
			foreach ($subalbums[$album_id] as $subalbum_id => $subalbum_row)
			{
				$subalbum_unread = (isset($album_tracking_info[$subalbum_id]) && $subalbum_row['orig_album_last_image_time'] > $album_tracking_info[$subalbum_id] && ($user->data['user_id'] != ANONYMOUS)) ? true : false;

				if (!$subalbum_unread && !empty($subalbum_row['children']) && ($user->data['user_id'] != ANONYMOUS))
				{
					foreach ($subalbum_row['children'] as $child_id)
					{
						if (isset($album_tracking_info[$child_id]) && $subalbums[$album_id][$child_id]['orig_album_last_image_time'] > $album_tracking_info[$child_id])
						{
							// Once we found an unread child album, we can drop out of this loop
							$subalbum_unread = true;
							break;
						}
					}
				}

				if ($subalbum_row['display'] && $subalbum_row['name'])
				{
					$subalbums_list[] = array(
						'link'		=> append_sid("{$phpbb_root_path}{$gallery_root_path}album.$phpEx", 'album_id=' . $subalbum_id),
						'name'		=> $subalbum_row['name'],
						'unread'	=> $subalbum_unread,
					);
				}
				else
				{
					unset($subalbums[$album_id][$subalbum_id]);
				}

				if ($subalbum_unread)
				{
					$album_unread = true;
				}
			}

			$l_subalbums = (sizeof($subalbums[$album_id]) == 1) ? $user->lang['SUBALBUM'] . ': ' : $user->lang['SUBALBUMS'] . ': ';
			$folder_image = ($album_unread) ? 'forum_unread_subforum' : 'forum_read_subforum';
		}
		else
		{
			$folder_alt = ($album_unread) ? 'NEW_IMAGES' : 'NO_NEW_IMAGES';
			$folder_image = ($album_unread) ? 'forum_unread' : 'forum_read';
		}
		if ($row['album_status'] == ITEM_LOCKED)
		{
			$folder_image = ($album_unread) ? 'forum_unread_locked' : 'forum_read_locked';
			$folder_alt = 'ALBUM_LOCKED';
		}

		// Create last post link information, if appropriate
		if ($row['album_last_image_id'])
		{
			$lastimage_name = $row['album_last_image_name'];
			$lastimage_time = $user->format_date($row['album_last_image_time']);
			$lastimage_image_id = $row['album_last_image_id'];
			$lastimage_album_id = $row['album_id_last_image'];
			$lastimage_album_type = $row['album_type_last_image'];
			$lastimage_contest_marked = $row['album_contest_marked'];
			$lastimage_uc_thumbnail = generate_image_link('fake_thumbnail', $gallery_config['link_thumbnail'], $lastimage_image_id, $lastimage_name, $lastimage_album_id);
			$lastimage_uc_name = generate_image_link('image_name', $gallery_config['link_image_name'], $lastimage_image_id, $lastimage_name, $lastimage_album_id);
			$lastimage_uc_icon = generate_image_link('lastimage_icon', $gallery_config['link_image_icon'], $lastimage_image_id, $lastimage_name, $lastimage_album_id);
		}
		else
		{
			$lastimage_time = $lastimage_image_id = $lastimage_album_id = $lastimage_album_type = 0;
			$lastimage_name = $lastimage_uc_thumbnail = $lastimage_uc_name = $lastimage_uc_icon = '';
		}

		// Output moderator listing ... if applicable
		$l_moderator = $moderators_list = '';
		if ($display_moderators && !empty($album_moderators[$album_id]))
		{
			$l_moderator = (sizeof($album_moderators[$album_id]) == 1) ? $user->lang['MODERATOR'] : $user->lang['MODERATORS'];
			$moderators_list = implode(', ', $album_moderators[$album_id]);
		}

		$s_subalbums_list = array();
		foreach ($subalbums_list as $subalbum)
		{
			$s_subalbums_list[] = '<a href="' . $subalbum['link'] . '" class="subforum ' . (($subalbum['unread']) ? 'unread' : 'read') . '" title="' . (($subalbum['unread']) ? $user->lang['NEW_IMAGES'] : $user->lang['NO_NEW_IMAGES']) . '">' . $subalbum['name'] . '</a>';
		}
		$s_subalbums_list = (string) implode(', ', $s_subalbums_list);
		$catless = ($row['parent_id'] == $root_data['album_id']) ? true : false;

		$template->assign_block_vars('albumrow', array(
			'S_IS_CAT'			=> false,
			'S_NO_CAT'			=> $catless && !$last_catless,
			'S_LOCKED_ALBUM'	=> ($row['album_status'] == ITEM_LOCKED) ? true : false,
			'S_LIST_SUBALBUMS'	=> ($row['display_subalbum_list']) ? true : false,
			'S_SUBALBUMS'		=> (sizeof($subalbums_list)) ? true : false,

			'ALBUM_ID'				=> $row['album_id'],
			'ALBUM_NAME'			=> $row['album_name'],
			'ALBUM_DESC'			=> generate_text_for_display($row['album_desc'], $row['album_desc_uid'], $row['album_desc_bitfield'], $row['album_desc_options']),
			'IMAGES'				=> $row['album_images'],
			'UNAPPROVED_IMAGES'		=> (gallery_acl_check('m_status', $album_id, $row['album_user_id'])) ? ($row['album_images_real'] - $row['album_images']) : 0,
			'ALBUM_FOLDER_IMG'		=> $user->img($folder_image, $folder_alt),
			'ALBUM_FOLDER_IMG_SRC'	=> $user->img($folder_image, $folder_alt, false, '', 'src'),
			'ALBUM_FOLDER_IMG_ALT'	=> isset($user->lang[$folder_alt]) ? $user->lang[$folder_alt] : '',
			'ALBUM_IMAGE'			=> ($row['album_image']) ? $phpbb_root_path . $row['album_image'] : '',
			'LAST_IMAGE_TIME'		=> $lastimage_time,
			'LAST_USER_FULL'		=> (($lastimage_album_type == ALBUM_CONTEST) && ($lastimage_contest_marked && !gallery_acl_check('m_status', $album_id, $row['album_user_id']))) ? $user->lang['CONTEST_USERNAME'] : get_username_string('full', $row['album_last_user_id'], $row['album_last_username'], $row['album_last_user_colour']),
			'UC_FAKE_THUMBNAIL'		=> ($gallery_config['disp_fake_thumb']) ? $lastimage_uc_thumbnail : '',
			'UC_IMAGE_NAME'			=> $lastimage_uc_name,
			'UC_LASTIMAGE_ICON'		=> $lastimage_uc_icon,
			'ALBUM_COLOUR'			=> get_username_string('colour', $row['album_last_user_id'], $row['album_last_username'], $row['album_last_user_colour']),
			'MODERATORS'			=> $moderators_list,
			'SUBALBUMS'				=> $s_subalbums_list,

			'L_SUBALBUM_STR'		=> $l_subalbums,
			'L_ALBUM_FOLDER_ALT'	=> $folder_alt,
			'L_MODERATOR_STR'		=> $l_moderator,

			'U_VIEWALBUM'			=> append_sid("{$phpbb_root_path}{$gallery_root_path}album.$phpEx", 'album_id=' . $row['album_id']),
		));

		// Assign subforums loop for style authors
		foreach ($subalbums_list as $subalbum)
		{
			$template->assign_block_vars('albumrow.subalbum', array(
				'U_SUBALBUM'	=> $subalbum['link'],
				'SUBALBUM_NAME'	=> $subalbum['name'],
				'S_UNREAD'		=> $subalbum['unread'],
			));
		}

		$last_catless = $catless;
	}

	$template->assign_vars(array(
		'U_MARK_ALBUMS'		=> ($user->data['is_registered']) ? append_sid("{$phpbb_root_path}{$gallery_root_path}album.$phpEx", 'hash=' . generate_link_hash('global') . '&amp;album_id=' . $root_data['album_id'] . '&amp;mark=albums') : '',
		'S_HAS_SUBALBUM'	=> ($visible_albums) ? true : false,
		'L_SUBFORUM'		=> ($visible_albums == 1) ? $user->lang['SUBALBUM'] : $user->lang['SUBALBUMS'],
		'LAST_POST_IMG'		=> $user->img('icon_topic_latest', 'VIEW_LATEST_POST'),
		'FAKE_THUMB_SIZE'	=> $gallery_config['fake_thumb_size'],
	));

	if ($return_moderators)
	{
		return array($active_album_ary, $album_moderators);
	}

	return array($active_album_ary, array());
}

/**
* Create album navigation links for given album, create parent
* list if currently null, assign basic album info to template
*
* borrowed from phpBB3
* @author: phpBB Group
* @function: generate_forum_nav
*/
function generate_album_nav(&$album_data)
{
	global $db, $user, $template;
	global $phpEx, $phpbb_root_path, $gallery_root_path;

	// Get album parents
	$album_parents = get_album_parents($album_data);

	// Display username for personal albums
	if ($album_data['album_user_id'] > NON_PERSONAL_ALBUMS)
	{
		$sql = 'SELECT user_id, username, user_colour
			FROM ' . USERS_TABLE . '
			WHERE user_id = ' . (int) $album_data['album_user_id'];
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$template->assign_block_vars('navlinks', array(
				'FORUM_NAME'	=> $user->lang['PERSONAL_ALBUMS'],
				'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$gallery_root_path}index.$phpEx", 'mode=personal'),
			));
		}
		$db->sql_freeresult($result);
	}

	// Build navigation links
	if (!empty($album_parents))
	{
		foreach ($album_parents as $parent_album_id => $parent_data)
		{
			list($parent_name, $parent_type) = array_values($parent_data);

			$template->assign_block_vars('navlinks', array(
				'FORUM_NAME'	=> $parent_name,
				'FORUM_ID'		=> $parent_album_id,
				'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$gallery_root_path}album.$phpEx", 'album_id=' . $parent_album_id),
			));
		}
	}

	$template->assign_block_vars('navlinks', array(
		'FORUM_NAME'	=> $album_data['album_name'],
		'FORUM_ID'		=> $album_data['album_id'],
		'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$gallery_root_path}album.$phpEx", 'album_id=' . $album_data['album_id']),
	));

	$template->assign_vars(array(
		'ALBUM_ID' 		=> $album_data['album_id'],
		'ALBUM_NAME'	=> $album_data['album_name'],
		'ALBUM_DESC'	=> generate_text_for_display($album_data['album_desc'], $album_data['album_desc_uid'], $album_data['album_desc_bitfield'], $album_data['album_desc_options']),
		'ALBUM_CONTEST_START'	=> ($album_data['contest_id']) ? sprintf($user->lang['CONTEST_START' . ((($album_data['contest_start']) < time())? 'ED' : 'S')], $user->format_date(($album_data['contest_start']), false, true)) : '',
		'ALBUM_CONTEST_RATING'	=> ($album_data['contest_id']) ? sprintf($user->lang['CONTEST_RATING_START' . ((($album_data['contest_start'] + $album_data['contest_rating']) < time())? 'ED' : 'S')], $user->format_date(($album_data['contest_start'] + $album_data['contest_rating']), false, true)) : '',
		'ALBUM_CONTEST_END'		=> ($album_data['contest_id']) ? sprintf($user->lang['CONTEST_END' . ((($album_data['contest_start'] + $album_data['contest_end']) < time())? 'ED' : 'S')], $user->format_date(($album_data['contest_start'] + $album_data['contest_end']), false, true)) : '',
	));

	return;
}

/**
* Returns album parents as an array. Get them from album_data if available, or update the database otherwise
*
* borrowed from phpBB3
* @author: phpBB Group
* @function: get_forum_parents
*/
function get_album_parents(&$album_data)
{
	global $db;

	$album_parents = array();
	if ($album_data['parent_id'] > 0)
	{
		if ($album_data['album_parents'] == '')
		{
			$sql = 'SELECT album_id, album_name, album_type
				FROM ' . GALLERY_ALBUMS_TABLE . '
				WHERE left_id < ' . $album_data['left_id'] . '
					AND right_id > ' . $album_data['right_id'] . '
					AND album_user_id = ' . $album_data['album_user_id'] . '
				ORDER BY left_id ASC';
			$result = $db->sql_query($sql);

			while ($row = $db->sql_fetchrow($result))
			{
				$album_parents[$row['album_id']] = array($row['album_name'], (int) $row['album_type']);
			}
			$db->sql_freeresult($result);

			$album_data['album_parents'] = serialize($album_parents);

			$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . "
				SET album_parents = '" . $db->sql_escape($album_data['album_parents']) . "'
				WHERE parent_id = " . $album_data['parent_id'];
			$db->sql_query($sql);
		}
		else
		{
			$album_parents = unserialize($album_data['album_parents']);
		}
	}

	return $album_parents;
}

/**
* Obtain list of moderators of each album
*
* borrowed from phpBB3
* @author: phpBB Group
* @function: get_forum_moderators
*/
function get_album_moderators(&$album_moderators, $album_id = false)
{
	global $auth, $config, $db, $phpbb_root_path, $phpEx, $template, $user;
	// www.phpBB-SEO.com SEO TOOLKIT BEGIN
	global $phpbb_seo;
	// www.phpBB-SEO.com SEO TOOLKIT END
	$album_id_ary = array();

	if ($album_id !== false)
	{
		if (!is_array($album_id))
		{
			$album_id = array($album_id);
		}

		// Exchange key/value pair to be able to faster check for the album id existence
		$album_id_ary = array_flip($album_id);
	}

	$sql_array = array(
		'SELECT'	=> 'm.*, u.user_colour, g.group_colour, g.group_type',
		'FROM'		=> array(GALLERY_MODSCACHE_TABLE => 'm'),

		'LEFT_JOIN'	=> array(
			array(
				'FROM'	=> array(USERS_TABLE => 'u'),
				'ON'	=> 'm.user_id = u.user_id',
			),
			array(
				'FROM'	=> array(GROUPS_TABLE => 'g'),
				'ON'	=> 'm.group_id = g.group_id',
			),
		),

		'WHERE'		=> 'm.display_on_index = 1',
		'ORDER_BY'	=> 'm.group_id ASC, m.user_id ASC',
	);

	// We query every album here because for caching we should not have any parameter.
	$sql = $db->sql_build_query('SELECT', $sql_array);
	$result = $db->sql_query($sql, 3600);

	while ($row = $db->sql_fetchrow($result))
	{
		$a_id = (int) $row['album_id'];

		if (!isset($album_id_ary[$a_id]))
		{
			continue;
		}

		if (!empty($row['user_id']))
		{
			$album_moderators[$a_id][] = get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']);
		}
		else
		{
			$group_name = (($row['group_type'] == GROUP_SPECIAL) ? $user->lang['G_' . $row['group_name']] : $row['group_name']);

			if ($user->data['user_id'] != ANONYMOUS && !$auth->acl_get('u_viewprofile'))
			{
				$album_moderators[$a_id][] = '<span' . (($row['group_colour']) ? ' style="color:#' . $row['group_colour'] . ';"' : '') . '>' . $group_name . '</span>';
			}
			else
			{
				// www.phpBB-SEO.com SEO TOOLKIT BEGIN
				$phpbb_seo->prepare_url('group', $row['group_name'], $row['group_id']);
				// www.phpBB-SEO.com SEO TOOLKIT END
				$album_moderators[$a_id][] = '<a' . (($row['group_colour']) ? ' style="color:#' . $row['group_colour'] . ';"' : '') . ' href="' . append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=group&amp;g=' . $row['group_id']) . '">' . $group_name . '</a>';
			}
		}
	}
	$db->sql_freeresult($result);

	return;
}

/**
* Assigns an image with all data to the defined template-block
*
* @param string	$template_block	Name of the template-block
* @param array	$image_data		Array with the image-data, all columns of GALLERY_IMAGES_TABLE are needed. album_name may be additionally assigned
*/
function assign_image_block($template_block, &$image_data, $album_status, $display = 126, $album_user_id = -1)
{
	global $auth, $gallery_config, $template, $user;
	global $gallery_root_path, $phpbb_root_path, $phpEx;

	$st	= request_var('st', 0);
	$sk	= request_var('sk', $gallery_config['sort_method']);
	$sd	= request_var('sd', $gallery_config['sort_order']);

	$image_data['rating'] = $user->lang['NOT_RATED'];
	if ($image_data['image_rates'])
	{
		$image_data['rating'] = sprintf((($image_data['image_rates'] == 1) ? $user->lang['RATE_STRING'] : $user->lang['RATES_STRING']), $image_data['image_rate_avg'] / 100, $image_data['image_rates']);
	}
	// Hide the result, while still rating on contests
	if ($image_data['image_contest'])
	{
		$image_data['rating'] = $user->lang['CONTEST_RATING_HIDDEN'];
	}

	$perm_user_id = ($user->data['user_perm_from'] == 0) ? $user->data['user_id'] : $user->data['user_perm_from'];
	$allow_edit = ((gallery_acl_check('i_edit', $image_data['image_album_id'], $album_user_id) && ($image_data['image_user_id'] == $perm_user_id) && ($album_status != ITEM_LOCKED)) || gallery_acl_check('m_edit', $image_data['image_album_id'], $album_user_id)) ? true : false;
	$allow_delete = ((gallery_acl_check('i_delete', $image_data['image_album_id'], $album_user_id) && ($image_data['image_user_id'] == $perm_user_id) && ($album_status != ITEM_LOCKED)) || gallery_acl_check('m_delete', $image_data['image_album_id'], $album_user_id)) ? true : false;

	$template->assign_block_vars($template_block, array(
		'IMAGE_ID'		=> $image_data['image_id'],
		'UC_IMAGE_NAME'	=> ($display & RRC_DISPLAY_IMAGENAME) ? generate_image_link('image_name', $gallery_config['link_image_name'], $image_data['image_id'], $image_data['image_name'], $image_data['image_album_id'], false, true, "&amp;sk={$sk}&amp;sd={$sd}&amp;st={$st}") : '',
		'UC_THUMBNAIL'	=> generate_image_link('thumbnail', $gallery_config['link_thumbnail'], $image_data['image_id'], $image_data['image_name'], $image_data['image_album_id']),
		'U_ALBUM'		=> ($display & RRC_DISPLAY_ALBUMNAME) ? append_sid("{$phpbb_root_path}{$gallery_root_path}album.$phpEx", 'album_id=' . $image_data['image_album_id']) : '',
		'S_UNAPPROVED'	=> (gallery_acl_check('m_status', $image_data['image_album_id'], $album_user_id) && ($image_data['image_status'] == IMAGE_UNAPPROVED)) ? true : false,
		'S_LOCKED'		=> ($image_data['image_status'] == IMAGE_LOCKED) ? true : false,
		'S_REPORTED'	=> (gallery_acl_check('m_report', $image_data['image_album_id'], $album_user_id) && $image_data['image_reported']) ? true : false,

		'ALBUM_NAME'		=> ($display & RRC_DISPLAY_ALBUMNAME) ? ((isset($image_data['album_name'])) ? ((utf8_strlen(htmlspecialchars_decode($image_data['album_name'])) > $gallery_config['shorted_imagenames'] + 3) ? htmlspecialchars(utf8_substr(htmlspecialchars_decode($image_data['album_name']), 0, $gallery_config['shorted_imagenames']) . '...') : ($image_data['album_name'])) : '') : '',
		'ALBUM_NAME_FULL'	=> ($display & RRC_DISPLAY_ALBUMNAME) ? ((isset($image_data['album_name'])) ? $image_data['album_name'] : '') : '',
		'POSTER'		=> ($display & RRC_DISPLAY_USERNAME) ? (($image_data['image_contest'] && !gallery_acl_check('m_status', $image_data['image_album_id'], $album_user_id)) ? $user->lang['CONTEST_USERNAME'] : get_username_string('full', $image_data['image_user_id'], $image_data['image_username'], $image_data['image_user_colour'])) : '',
		'TIME'			=> ($display & RRC_DISPLAY_IMAGETIME) ? $user->format_date($image_data['image_time']) : '',
		'VIEW'			=> ($display & RRC_DISPLAY_IMAGEVIEWS) ? $image_data['image_view_count'] : -1,
		'CONTEST_RANK'		=> ($image_data['image_contest_rank']) ? $user->lang['CONTEST_RESULT_' . $image_data['image_contest_rank']] : '',
		'CONTEST_RANK_ID'	=> $image_data['image_contest_rank'],

		'S_RATINGS'		=> (($display & RRC_DISPLAY_RATINGS) ? (($gallery_config['allow_rates'] && gallery_acl_check('i_rate', $image_data['image_album_id'], $album_user_id)) ? $image_data['rating'] : '') : ''),
		'U_RATINGS'		=> append_sid("{$phpbb_root_path}{$gallery_root_path}image_page.$phpEx", 'album_id=' . $image_data['image_album_id'] . "&amp;image_id=" . $image_data['image_id']) . '#rating',
		'L_COMMENTS'	=> ($image_data['image_comments'] == 1) ? $user->lang['COMMENT'] : $user->lang['COMMENTS'],
		'S_COMMENTS'	=> (($display & RRC_DISPLAY_COMMENTS) ? (($gallery_config['allow_comments'] && gallery_acl_check('c_read', $image_data['image_album_id'], $album_user_id)) ? (($image_data['image_comments']) ? $image_data['image_comments'] : $user->lang['NO_COMMENTS']) : '') : ''),
		'U_COMMENTS'	=> append_sid("{$phpbb_root_path}{$gallery_root_path}image_page.$phpEx", 'album_id=' . $image_data['image_album_id'] . "&amp;image_id=" . $image_data['image_id']) . '#comments',

		'S_IP'		=> (($display & RRC_DISPLAY_IP) && $auth->acl_get('a_')) ? $image_data['image_user_ip'] : '',
		'U_WHOIS'	=> append_sid("{$phpbb_root_path}{$gallery_root_path}mcp.$phpEx", 'mode=whois&amp;ip=' . $image_data['image_user_ip']),
		'U_REPORT'	=> (gallery_acl_check('m_report', $image_data['image_album_id'], $album_user_id) && $image_data['image_reported']) ? append_sid("{$phpbb_root_path}{$gallery_root_path}mcp.$phpEx", "mode=report_details&amp;album_id={$image_data['image_album_id']}&amp;option_id=" . $image_data['image_reported']) : '',
		'U_STATUS'	=> (gallery_acl_check('m_status', $image_data['image_album_id'], $album_user_id)) ? append_sid("{$phpbb_root_path}{$gallery_root_path}mcp.$phpEx", "mode=queue_details&amp;album_id={$image_data['image_album_id']}&amp;option_id=" . $image_data['image_id']) : '',
		'L_STATUS'	=> ($image_data['image_status'] == IMAGE_UNAPPROVED) ? $user->lang['APPROVE_IMAGE'] : (($image_data['image_status'] == IMAGE_APPROVED) ? $user->lang['CHANGE_IMAGE_STATUS'] : $user->lang['UNLOCK_IMAGE']),
		'U_MOVE'	=> (gallery_acl_check('m_move', $image_data['image_album_id'], $album_user_id)) ? append_sid("{$phpbb_root_path}{$gallery_root_path}mcp.$phpEx", "action=images_move&amp;album_id={$image_data['image_album_id']}&amp;image_id=" . $image_data['image_id'] . "&amp;redirect=redirect") : '',
		'U_EDIT'	=> $allow_edit ? append_sid("{$phpbb_root_path}{$gallery_root_path}posting.$phpEx", "mode=image&amp;submode=edit&amp;album_id={$image_data['image_album_id']}&amp;image_id=" . $image_data['image_id']) : '',
		'U_DELETE'	=> $allow_delete ? append_sid("{$phpbb_root_path}{$gallery_root_path}posting.$phpEx", "mode=image&amp;submode=delete&amp;album_id={$image_data['image_album_id']}&amp;image_id=" . $image_data['image_id']) : '',
	));
}

?>