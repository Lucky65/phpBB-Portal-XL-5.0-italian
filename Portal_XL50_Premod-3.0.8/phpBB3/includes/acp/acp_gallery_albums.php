<?php
/**
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* mostly borrowed from phpBB3
* @author: phpBB Group
* @location: includes/acp/acp_forums.php
*
* Note: There are several code parts commented out, for example the album/forum_password.
*       I didn't remove them, to have it easier when I implement this feature one day. I hope it's okay.
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class acp_gallery_albums
{
	var $u_action;
	var $parent_id = 0;

	function main($id, $mode)
	{
		global $cache, $config, $db, $user, $auth, $template;
		global $phpbb_admin_path, $gallery_root_path, $phpbb_root_path, $phpEx;
		$gallery_root_path = GALLERY_ROOT_PATH;

		include($phpbb_root_path . $gallery_root_path . 'includes/constants.' . $phpEx);
		include($phpbb_root_path . $gallery_root_path . 'includes/functions.' . $phpEx);
		include($phpbb_root_path . $gallery_root_path . 'includes/permissions.' . $phpEx);
		$gallery_config = load_gallery_config();

		$user->add_lang(array('mods/gallery_acp', 'mods/gallery'));
		$this->tpl_name = 'gallery_albums';
		$this->page_title = 'ACP_GALLERY_MANAGE_ALBUMS';

		$form_key = 'acp_gallery_albums';
		add_form_key($form_key);

		$action		= request_var('action', '');
		$update		= (isset($_POST['update'])) ? true : false;
		$album_id	= request_var('a', 0);

		$this->parent_id	= request_var('parent_id', 0);
		$album_data = $errors = array();
		if ($update && !check_form_key($form_key))
		{
			$update = false;
			$errors[] = $user->lang['FORM_INVALID'];
		}

		// Major routines
		if ($update)
		{
			switch ($action)
			{
				case 'delete':
					$action_subalbums	= request_var('action_subalbums', '');
					$subalbums_to_id	= request_var('subalbums_to_id', 0);
					$action_images		= request_var('action_images', '');
					$images_to_id		= request_var('images_to_id', 0);

					$errors = $this->delete_album($album_id, $action_images, $action_subalbums, $images_to_id, $subalbums_to_id);

					if (sizeof($errors))
					{
						break;
					}

					$cache->destroy('sql', GALLERY_ALBUMS_TABLE);

					trigger_error($user->lang['ALBUM_DELETED'] . adm_back_link($this->u_action . '&amp;parent_id=' . $this->parent_id));

				break;

				case 'edit':
					$album_data = array(
						'album_id'		=>	$album_id
					);

				// No break; here

				case 'add':

					$album_data += array(
						'parent_id'				=> request_var('album_parent_id', $this->parent_id),
						'album_type'			=> request_var('album_type', ALBUM_UPLOAD),
						'type_action'			=> request_var('type_action', ''),
						'album_status'			=> request_var('album_status', ITEM_UNLOCKED),
						'album_parents'			=> '',
						'album_name'			=> utf8_normalize_nfc(request_var('album_name', '', true)),
						'album_desc'			=> utf8_normalize_nfc(request_var('album_desc', '', true)),
						'album_desc_uid'		=> '',
						'album_desc_options'	=> 7,
						'album_desc_bitfield'	=> '',
						'album_image'			=> request_var('album_image', ''),
						'album_watermark'		=> request_var('album_watermark', false),
						'album_sort_key'		=> request_var('album_sort_key', ''),
						'album_sort_dir'		=> request_var('album_sort_dir', ''),
						'display_subalbum_list'	=> request_var('display_subalbum_list', false),
						'display_on_index'		=> request_var('display_on_index', false),
						'display_in_rrc'		=> request_var('display_in_rrc', false),
						/*
						'album_password'		=> request_var('album_password', '', true),
						'album_password_confirm'=> request_var('album_password_confirm', '', true),
						'album_password_unset'	=> request_var('album_password_unset', false),
						*/
					);

					// Categories are not able to be locked...
					if ($album_data['album_type'] == ALBUM_CAT)
					{
						$album_data['album_status'] = ITEM_UNLOCKED;
					}

					// Contests need contest_data, freaky... :-O
					$contest_data = array(
						'contest_start'			=> request_var('contest_start', ''),
						'contest_rating'		=> request_var('contest_rating', ''),
						'contest_end'			=> request_var('contest_end', ''),
					);

					// Get data for album description if specified
					if ($album_data['album_desc'])
					{
						generate_text_for_storage($album_data['album_desc'], $album_data['album_desc_uid'], $album_data['album_desc_bitfield'], $album_data['album_desc_options'], request_var('desc_parse_bbcode', false), request_var('desc_parse_urls', false), request_var('desc_parse_smilies', false));
					}

					$errors = $this->update_album_data($album_data, $contest_data);

					if (!sizeof($errors))
					{
						$album_perm_from = request_var('album_perm_from', 0);

						// Copy permissions? You do not need permissions for that in the gallery
						if ($album_perm_from && $album_perm_from != $album_data['album_id'])
						{
							// If we edit a album delete current permissions first
							if ($action == 'edit')
							{
								$sql = 'DELETE FROM ' . GALLERY_PERMISSIONS_TABLE . '
									WHERE perm_album_id = ' . $album_data['album_id'];
								$db->sql_query($sql);

								$sql = 'DELETE FROM ' . GALLERY_MODSCACHE_TABLE . '
									WHERE album_id = ' . $album_data['album_id'];
								$db->sql_query($sql);
							}

							$sql = 'SELECT *
								FROM ' . GALLERY_PERMISSIONS_TABLE . '
								WHERE perm_album_id = ' . $album_perm_from;
							$result = $db->sql_query($sql);
							while ($row = $db->sql_fetchrow($result))
							{
								$perm_data[] = array(
									'perm_role_id'					=> $row['perm_role_id'],
									'perm_album_id'					=> $album_data['album_id'],
									'perm_user_id'					=> $row['perm_user_id'],
									'perm_group_id'					=> $row['perm_group_id'],
									'perm_system'					=> $row['perm_system'],
								);
							}
							$db->sql_freeresult($result);

							$modscache_ary = array();
							$sql = 'SELECT * FROM ' . GALLERY_MODSCACHE_TABLE . '
								WHERE album_id = ' . $album_perm_from;
							$result = $db->sql_query($sql);
							while ($row = $db->sql_fetchrow($result))
							{
								$modscache_ary[] = array(
									'album_id'			=> $album_data['album_id'],
									'user_id'			=> $row['user_id'],
									'username'			=> $row['username'],
									'group_id'			=> $row['group_id'],
									'group_name'		=> $row['group_name'],
									'display_on_index'	=> $row['display_on_index'],
								);
							}
							$db->sql_freeresult($result);

							$db->sql_multi_insert(GALLERY_PERMISSIONS_TABLE, $perm_data);
							$db->sql_multi_insert(GALLERY_MODSCACHE_TABLE, $modscache_ary);
						}

						$cache->destroy('sql', GALLERY_ALBUMS_TABLE);
						$cache->destroy('sql', GALLERY_MODSCACHE_TABLE);
						$cache->destroy('sql', GALLERY_PERMISSIONS_TABLE);
						$cache->destroy('_albums');

						$acl_url = '&amp;mode=manage&amp;action=v_mask&amp;album_id[]=' . $album_data['album_id'];

						$message = ($action == 'add') ? $user->lang['ALBUM_CREATED'] : $user->lang['ALBUM_UPDATED'];
						$message .= '<br /><br />' . sprintf($user->lang['REDIRECT_ACL'], '<a href="' . append_sid("{$phpbb_admin_path}index.$phpEx", 'i=gallery_permissions' . $acl_url) . '">', '</a>');

						// Redirect directly to permission settings screen
						if ($action == 'add' && !$album_perm_from)
						{
							meta_refresh(5, append_sid("{$phpbb_admin_path}index.$phpEx", 'i=gallery_permissions' . $acl_url));
						}

						trigger_error($message . adm_back_link($this->u_action . '&amp;parent_id=' . $this->parent_id));
					}

				break;
			}
		}

		switch ($action)
		{
			case 'move_up':
			case 'move_down':

				if (!$album_id)
				{
					trigger_error($user->lang['NO_ALBUM'] . adm_back_link($this->u_action . '&amp;parent_id=' . $this->parent_id), E_USER_WARNING);
				}

				$sql = 'SELECT *
					FROM ' . GALLERY_ALBUMS_TABLE . "
					WHERE album_id = $album_id";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				if (!$row)
				{
					trigger_error($user->lang['NO_ALBUM'] . adm_back_link($this->u_action . '&amp;parent_id=' . $this->parent_id), E_USER_WARNING);
				}

				$move_album_name = $this->move_album_by($row, $action, 1);

				if ($move_album_name !== false)
				{
					add_log('admin', 'LOG_ALBUM_' . strtoupper($action), $row['album_name'], $move_album_name);
					$cache->destroy('sql', GALLERY_ALBUMS_TABLE);
				}

			break;

			case 'sync':
			case 'sync_album':
				if (!$album_id)
				{
					trigger_error($user->lang['NO_ALBUM'] . adm_back_link($this->u_action . '&amp;parent_id=' . $this->parent_id), E_USER_WARNING);
				}


				$sql = 'SELECT album_name, album_type
					FROM ' . GALLERY_ALBUMS_TABLE . "
					WHERE album_id = $album_id";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				if (!$row)
				{
					trigger_error($user->lang['NO_ALBUM'] . adm_back_link($this->u_action . '&amp;parent_id=' . $this->parent_id), E_USER_WARNING);
				}

				update_album_info($album_id);

				add_log('admin', 'LOG_ALBUM_SYNC', $row['album_name']);

				$template->assign_var('L_ALBUM_RESYNCED', sprintf($user->lang['ALBUM_RESYNCED'], $row['album_name']));

			break;

			case 'add':
			case 'edit':

				// Show form to create/modify a album
				if ($action == 'edit')
				{
					$this->page_title = 'EDIT_ALBUM';
					$row = get_album_info($album_id);
					$old_album_type = $row['album_type'];

					if (!$update)
					{
						$album_data = $row;
					}
					else
					{
						$album_data['left_id'] = $row['left_id'];
						$album_data['right_id'] = $row['right_id'];
					}
					if ($row['album_type'] == ALBUM_CONTEST)
					{
						$contest_data = $this->get_contest_info('album', $album_id);
					}
					else
					{
						// Default values, 3 days later rate and 7 for the end of the contest
						$contest_data = array(
							'contest_start'			=> time(),
							'contest_rating'		=> 3 * 86400,
							'contest_end'			=> 7 * 86400,
						);
					}

					// Make sure no direct child albums are able to be selected as parents.
					$exclude_albums = array();
					foreach (get_album_branch(NON_PERSONAL_ALBUMS, $album_id, 'children') as $row)
					{
						$exclude_albums[] = $row['album_id'];
					}

					$parents_list = gallery_albumbox(true, '', $album_data['parent_id'], false, $exclude_albums);

					/*
					$album_data['album_password_confirm'] = $album_data['album_password'];
					*/
				}
				else
				{
					$this->page_title = 'CREATE_ALBUM';

					$album_id = $this->parent_id;
					$parents_list = gallery_albumbox(true, '', $this->parent_id);

					// Fill album data with default values
					if (!$update)
					{
						$album_data = array(
							'parent_id'				=> $this->parent_id,
							'album_type'			=> ALBUM_UPLOAD,
							'album_status'			=> ITEM_UNLOCKED,
							'album_name'			=> utf8_normalize_nfc(request_var('album_name', '', true)),
							'album_desc'			=> '',
							'album_image'			=> '',
							'album_watermark'		=> true,
							'album_sort_key'		=> '',
							'album_sort_dir'		=> '',
							'display_subalbum_list'	=> true,
							'display_on_index'		=> true,
							'display_in_rrc'		=> true,
							/*
							'album_password'		=> '',
							'album_password_confirm'=> '',
							*/
						);

						// Default values, 3 days later rate and 7 for the end of the contest
						$contest_data = array(
							'contest_start'			=> time(),
							'contest_rating'		=> 3 * 86400,
							'contest_end'			=> 7 * 86400,
						);
					}
				}

				$album_desc_data = array(
					'text'			=> $album_data['album_desc'],
					'allow_bbcode'	=> true,
					'allow_smilies'	=> true,
					'allow_urls'	=> true
				);

				// Parse desciption if specified
				if ($album_data['album_desc'])
				{
					if (!isset($album_data['album_desc_uid']))
					{
						// Before we are able to display the preview and plane text, we need to parse our request_var()'d value...
						$album_data['album_desc_uid'] = '';
						$album_data['album_desc_bitfield'] = '';
						$album_data['album_desc_options'] = 0;

						generate_text_for_storage($album_data['album_desc'], $album_data['album_desc_uid'], $album_data['album_desc_bitfield'], $album_data['album_desc_options'], request_var('desc_allow_bbcode', false), request_var('desc_allow_urls', false), request_var('desc_allow_smilies', false));
					}

					// decode...
					$album_desc_data = generate_text_for_edit($album_data['album_desc'], $album_data['album_desc_uid'], $album_data['album_desc_options']);
				}

				$album_type_options = '';
				$album_type_ary = array(ALBUM_CAT => 'CAT', ALBUM_UPLOAD => 'UPLOAD', ALBUM_CONTEST => 'CONTEST');

				foreach ($album_type_ary as $value => $lang)
				{
					$album_type_options .= '<option value="' . $value . '"' . (($value == $album_data['album_type']) ? ' selected="selected"' : '') . '>' . $user->lang['ALBUM_TYPE_' . $lang] . '</option>';
				}

				$album_sort_key_options = '';
				$album_sort_key_options .= '<option' . ((!in_array($album_data['album_sort_key'], array('t', 'n', 'vc', 'u', 'ra', 'r', 'c', 'lc'))) ? ' selected="selected"' : '') . " value=''>" . $user->lang['SORT_DEFAULT'] . '</option>';
				$album_sort_key_options .= '<option' . (($album_data['album_sort_key'] == 't') ? ' selected="selected"' : '') . " value='t'>" . $user->lang['TIME'] . '</option>';
				$album_sort_key_options .= '<option' . (($album_data['album_sort_key'] == 'n') ? ' selected="selected"' : '') . " value='n'>" . $user->lang['IMAGE_NAME'] . '</option>';
				$album_sort_key_options .= '<option' . (($album_data['album_sort_key'] == 'vc') ? ' selected="selected"' : '') . " value='vc'>" . $user->lang['VIEWS'] . '</option>';
				$album_sort_key_options .= '<option' . (($album_data['album_sort_key'] == 'u') ? ' selected="selected"' : '') . " value='u'>" . $user->lang['USERNAME'] . '</option>';
				$album_sort_key_options .= '<option' . (($album_data['album_sort_key'] == 'ra') ? ' selected="selected"' : '') . " value='ra'>" . $user->lang['RATING'] . '</option>';
				$album_sort_key_options .= '<option' . (($album_data['album_sort_key'] == 'r') ? ' selected="selected"' : '') . " value='r'>" . $user->lang['RATES_COUNT'] . '</option>';
				$album_sort_key_options .= '<option' . (($album_data['album_sort_key'] == 'c') ? ' selected="selected"' : '') . " value='c'>" . $user->lang['COMMENTS'] . '</option>';
				$album_sort_key_options .= '<option' . (($album_data['album_sort_key'] == 'lc') ? ' selected="selected"' : '') . " value='lc'>" . $user->lang['NEW_COMMENT'] . '</option>';

				$album_sort_dir_options = '';
				$album_sort_dir_options .= '<option' . ((($album_data['album_sort_dir'] != 'd') && ($album_data['album_sort_dir'] != 'a')) ? ' selected="selected"' : '') . " value=''>" . $user->lang['SORT_DEFAULT'] . '</option>';
				$album_sort_dir_options .= '<option' . (($album_data['album_sort_dir'] == 'd') ? ' selected="selected"' : '') . " value='d'>" . $user->lang['SORT_DESCENDING'] . '</option>';
				$album_sort_dir_options .= '<option' . (($album_data['album_sort_dir'] == 'a') ? ' selected="selected"' : '') . " value='a'>" . $user->lang['SORT_ASCENDING'] . '</option>';

				$statuslist = '<option value="' . ITEM_UNLOCKED . '"' . (($album_data['album_status'] == ITEM_UNLOCKED) ? ' selected="selected"' : '') . '>' . $user->lang['UNLOCKED'] . '</option><option value="' . ITEM_LOCKED . '"' . (($album_data['album_status'] == ITEM_LOCKED) ? ' selected="selected"' : '') . '>' . $user->lang['LOCKED'] . '</option>';

				$sql = 'SELECT album_id
					FROM ' . GALLERY_ALBUMS_TABLE . '
					WHERE album_type = ' . ALBUM_UPLOAD . "
						AND album_user_id = 0
						AND album_id <> $album_id";
				$result = $db->sql_query_limit($sql, 1);

				$uploadable_album_exists = false;
				if ($db->sql_fetchrow($result))
				{
					$uploadable_album_exists = true;
				}
				$db->sql_freeresult($result);

				// Subalbum move options
				if ($action == 'edit' && in_array($album_data['album_type'], array(ALBUM_UPLOAD, ALBUM_CONTEST)))
				{
					$subalbums_id = array();
					$subalbums = get_album_branch(NON_PERSONAL_ALBUMS, $album_id, 'children');

					foreach ($subalbums as $row)
					{
						$subalbums_id[] = $row['album_id'];
					}

					$albums_list = gallery_albumbox(true, '', $album_data['parent_id'], false, $subalbums_id);

					if ($uploadable_album_exists)
					{
						$template->assign_vars(array(
							'S_MOVE_ALBUM_OPTIONS'		=> gallery_albumbox(true, '', $album_data['parent_id'], false, $subalbums_id, 0, ALBUM_UPLOAD),
						));
					}

					$template->assign_vars(array(
						'S_HAS_SUBALBUMS'		=> ($album_data['right_id'] - $album_data['left_id'] > 1) ? true : false,
						'S_ALBUMS_LIST'			=> $albums_list,
					));
				}
				elseif ($uploadable_album_exists)
				{
					$template->assign_vars(array(
						'S_MOVE_ALBUM_OPTIONS'		=> gallery_albumbox(true, '', $album_data['parent_id'], false, $album_id, 0, ALBUM_UPLOAD),
					));
				}

				/*
				if (strlen($album_data['album_password']) == 32)
				{
					$errors[] = $user->lang['ALBUM_PASSWORD_OLD'];
				}
				*/

				$template->assign_vars(array(
					'S_EDIT_ALBUM'		=> true,
					'S_ERROR'			=> (sizeof($errors)) ? true : false,
					'S_PARENT_ID'		=> $this->parent_id,
					'S_ALBUM_PARENT_ID'	=> $album_data['parent_id'],
					'S_ADD_ACTION'		=> ($action == 'add') ? true : false,

					'U_BACK'			=> $this->u_action . '&amp;parent_id=' . $this->parent_id,
					'U_EDIT_ACTION'		=> $this->u_action . "&amp;parent_id={$this->parent_id}&amp;action=$action&amp;a=$album_id",

					'L_COPY_PERMISSIONS_EXPLAIN'	=> $user->lang['COPY_PERMISSIONS_' . strtoupper($action) . '_EXPLAIN'],
					'L_TITLE'						=> $user->lang[$this->page_title],
					'ERROR_MSG'						=> (sizeof($errors)) ? implode('<br />', $errors) : '',

					'ALBUM_NAME'				=> $album_data['album_name'],
					'ALBUM_IMAGE'				=> $album_data['album_image'],
					'ALBUM_IMAGE_SRC'			=> ($album_data['album_image']) ? $phpbb_root_path . $album_data['album_image'] : '',
					/*
					'S_ALBUM_PASSWORD_SET'		=> (empty($album_data['album_password'])) ? false : true,
					*/

					'ALBUM_DESC'				=> $album_desc_data['text'],
					'S_DESC_BBCODE_CHECKED'		=> ($album_desc_data['allow_bbcode']) ? true : false,
					'S_DESC_SMILIES_CHECKED'	=> ($album_desc_data['allow_smilies']) ? true : false,
					'S_DESC_URLS_CHECKED'		=> ($album_desc_data['allow_urls']) ? true : false,

					'S_ALBUM_TYPE_OPTIONS'		=> $album_type_options,
					'S_STATUS_OPTIONS'			=> $statuslist,
					'S_PARENT_OPTIONS'			=> $parents_list,
					'S_ALBUM_OPTIONS'			=> gallery_albumbox(true, '', ($action == 'add') ? $album_data['parent_id'] : false, false, ($action == 'edit') ? $album_data['album_id'] : false),

					'S_ALBUM_ORIG_UPLOAD'		=> (isset($old_album_type) && $old_album_type == ALBUM_UPLOAD) ? true : false,
					'S_ALBUM_ORIG_CAT'			=> (isset($old_album_type) && $old_album_type == ALBUM_CAT) ? true : false,
					'S_ALBUM_ORIG_CONTEST'		=> (isset($old_album_type) && $old_album_type == ALBUM_CONTEST) ? true : false,
					'S_ALBUM_UPLOAD'			=> ($album_data['album_type'] == ALBUM_UPLOAD) ? true : false,
					'S_ALBUM_CAT'				=> ($album_data['album_type'] == ALBUM_CAT) ? true : false,
					'S_ALBUM_CONTEST'			=> ($album_data['album_type'] == ALBUM_CONTEST) ? true : false,
					'ALBUM_UPLOAD'				=> ALBUM_UPLOAD,
					'ALBUM_CAT'					=> ALBUM_CAT,
					'ALBUM_CONTEST'				=> ALBUM_CONTEST,
					'S_CAN_COPY_PERMISSIONS'	=> true,

					'S_ALBUM_WATERMARK'			=> ($album_data['album_watermark']) ? true : false,
					'ALBUM_SORT_KEY_OPTIONS'	=> $album_sort_key_options,
					'ALBUM_SORT_DIR_OPTIONS'	=> $album_sort_dir_options,
					'S_DISPLAY_SUBALBUM_LIST'	=> ($album_data['display_subalbum_list']) ? true : false,
					'S_DISPLAY_ON_INDEX'		=> ($album_data['display_on_index']) ? true : false,
					'S_DISPLAY_IN_RRC'			=> ($album_data['display_in_rrc']) ? true : false,

					'S_CONTEST_START'			=> $user->format_date($contest_data['contest_start'], 'Y-m-d H:i'),
					'CONTEST_RATING'			=> $user->format_date($contest_data['contest_start'] + $contest_data['contest_rating'], 'Y-m-d H:i'),
					'CONTEST_END'				=> $user->format_date($contest_data['contest_start'] + $contest_data['contest_end'], 'Y-m-d H:i'),
				));

				return;

			break;

			case 'delete':

				if (!$album_id)
				{
					trigger_error($user->lang['NO_ALBUM'] . adm_back_link($this->u_action . '&amp;parent_id=' . $this->parent_id), E_USER_WARNING);
				}

				$album_data = get_album_info($album_id);

				$subalbums_id = array();
				$subalbums = get_album_branch(NON_PERSONAL_ALBUMS, $album_id, 'children');

				foreach ($subalbums as $row)
				{
					$subalbums_id[] = $row['album_id'];
				}

				$albums_list = gallery_albumbox(true, '', $album_data['parent_id'], false, $subalbums_id);

				$sql = 'SELECT album_id
					FROM ' . GALLERY_ALBUMS_TABLE . '
					WHERE album_type = ' . ALBUM_UPLOAD . "
						AND album_id <> $album_id
						AND album_user_id = 0";
				$result = $db->sql_query_limit($sql, 1);

				if ($db->sql_fetchrow($result))
				{
					$template->assign_vars(array(
						'S_MOVE_ALBUM_OPTIONS'		=> gallery_albumbox(true, '', $album_data['parent_id'], false, $subalbums_id, 0, ALBUM_UPLOAD),
					));
				}
				$db->sql_freeresult($result);

				$parent_id = ($this->parent_id == $album_id) ? 0 : $this->parent_id;
				$template->assign_vars(array(
					'S_DELETE_ALBUM'		=> true,
					'U_ACTION'				=> $this->u_action . "&amp;parent_id={$parent_id}&amp;action=delete&amp;a=" . $album_id,
					'U_BACK'				=> $this->u_action . '&amp;parent_id=' . $this->parent_id,

					'ALBUM_NAME'			=> $album_data['album_name'],
					'S_ALBUM_POST'			=> (in_array($album_data['album_type'], array(ALBUM_UPLOAD, ALBUM_CONTEST))) ? true : false,
					'S_HAS_SUBALBUMS'		=> ($album_data['right_id'] - $album_data['left_id'] > 1) ? true : false,
					'S_ALBUMS_LIST'			=> $albums_list,

					'S_ERROR'				=> (sizeof($errors)) ? true : false,
					'ERROR_MSG'				=> (sizeof($errors)) ? implode('<br />', $errors) : '',
				));

				return;
			break;
		}

		// Default management page
		if (!$this->parent_id)
		{
			$navigation = $user->lang['GALLERY_INDEX'];
		}
		else
		{
			$navigation = '<a href="' . $this->u_action . '">' . $user->lang['GALLERY_INDEX'] . '</a>';

			$albums_nav = get_album_branch(NON_PERSONAL_ALBUMS, $this->parent_id, 'parents', 'descending');
			foreach ($albums_nav as $row)
			{
				if ($row['album_id'] == $this->parent_id)
				{
					$navigation .= ' -&gt; ' . $row['album_name'];
				}
				else
				{
					$navigation .= ' -&gt; <a href="' . $this->u_action . '&amp;parent_id=' . $row['album_id'] . '">' . $row['album_name'] . '</a>';
				}
			}
		}

		// Jumpbox
		$album_box = gallery_albumbox(true, '', $this->parent_id, false, false);

		if ($action == 'sync' || $action == 'sync_album')
		{
			$template->assign_var('S_RESYNCED', true);
		}

		$sql = 'SELECT *
			FROM ' . GALLERY_ALBUMS_TABLE . "
			WHERE parent_id = {$this->parent_id}
				AND album_user_id = " . NON_PERSONAL_ALBUMS . '
			ORDER BY left_id';
		$result = $db->sql_query($sql);

		if ($row = $db->sql_fetchrow($result))
		{
			do
			{
				$album_type = $row['album_type'];

				if ($row['album_status'] == ITEM_LOCKED)
				{
					$folder_image = '<img src="images/icon_folder_lock.gif" alt="' . $user->lang['LOCKED'] . '" />';
				}
				else
				{
					$folder_image = ($row['left_id'] + 1 != $row['right_id']) ? '<img src="images/icon_subfolder.gif" alt="' . $user->lang['SUBALBUM'] . '" />' : '<img src="images/icon_folder.gif" alt="' . $user->lang['FOLDER'] . '" />';
				}

				$url = $this->u_action . "&amp;parent_id=$this->parent_id&amp;a={$row['album_id']}";

				$template->assign_block_vars('albums', array(
					'FOLDER_IMAGE'		=> $folder_image,
					'ALBUM_IMAGE'		=> ($row['album_image']) ? '<img src="' . $phpbb_root_path . $row['album_image'] . '" alt="" />' : '',
					'ALBUM_IMAGE_SRC'	=> ($row['album_image']) ? $phpbb_root_path . $row['album_image'] : '',
					'ALBUM_NAME'		=> $row['album_name'],
					'ALBUM_DESCRIPTION'	=> generate_text_for_display($row['album_desc'], $row['album_desc_uid'], $row['album_desc_bitfield'], $row['album_desc_options']),
					'ALBUM_IMAGES'		=> $row['album_images'],

					'S_ALBUM_POST'		=> ($album_type != ALBUM_CAT) ? true : false,

					'U_ALBUM'			=> $this->u_action . '&amp;parent_id=' . $row['album_id'],
					'U_MOVE_UP'			=> $url . '&amp;action=move_up',
					'U_MOVE_DOWN'		=> $url . '&amp;action=move_down',
					'U_EDIT'			=> $url . '&amp;action=edit',
					'U_DELETE'			=> $url . '&amp;action=delete',
					'U_SYNC'			=> $url . '&amp;action=sync')
				);
			}
			while ($row = $db->sql_fetchrow($result));
		}
		else if ($this->parent_id)
		{
			$row = get_album_info($this->parent_id);

			$url = $this->u_action . '&amp;parent_id=' . $this->parent_id . '&amp;a=' . $row['album_id'];

			$template->assign_vars(array(
				'S_NO_ALBUMS'		=> true,

				'U_EDIT'			=> $url . '&amp;action=edit',
				'U_DELETE'			=> $url . '&amp;action=delete',
				'U_SYNC'			=> $url . '&amp;action=sync',
			));
		}
		$db->sql_freeresult($result);

		$template->assign_vars(array(
			'ERROR_MSG'		=> (sizeof($errors)) ? implode('<br />', $errors) : '',
			'NAVIGATION'	=> $navigation,
			'ALBUM_BOX'		=> $album_box,
			'U_SEL_ACTION'	=> $this->u_action,
			'U_ACTION'		=> $this->u_action . '&amp;parent_id=' . $this->parent_id,

			'U_PROGRESS_BAR'	=> $this->u_action . '&amp;action=progress_bar',
			'UA_PROGRESS_BAR'	=> addslashes($this->u_action . '&amp;action=progress_bar'),
		));
	}

	/**
	* Get contest details
	*/
	function get_contest_info($mode = 'album', $id)
	{
		global $db;

		$sql = 'SELECT *
			FROM ' . GALLERY_CONTESTS_TABLE . '
			WHERE ' . (($mode = 'album') ? 'contest_album_id' : 'contest_id') . ' = ' . (int) $id;
		$result = $db->sql_query_limit($sql, 1);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		if (!$row)
		{
			trigger_error('NO_CONTEST', E_USER_ERROR);
		}

		return $row;
	}

	/**
	* Update album data
	*
	* borrowed from phpBB3
	* @author: phpBB Group
	* @function: update_forum_data
	*/
	function update_album_data(&$album_data, &$contest_data)
	{
		global $db, $user, $cache;

		$errors = array();

		if (!$album_data['album_name'])
		{
			$errors[] = $user->lang['ALBUM_NAME_EMPTY'];
		}

		if (utf8_strlen($album_data['album_desc']) > 4000)
		{
			$errors[] = $user->lang['ALBUM_DESC_TOO_LONG'];
		}

		/*if ($album_data['album_password'] || $album_data['album_password_confirm'])
		{
			if ($album_data['album_password'] != $album_data['album_password_confirm'])
			{
				$album_data['album_password'] = $album_data['album_password_confirm'] = '';
				$errors[] = $user->lang['ALBUM_PASSWORD_MISMATCH'];
			}
		}*/
		// Validate the contest timestamps:
		if ($album_data['album_type'] == ALBUM_CONTEST)
		{
			$start_date_error = $date_error = false;
			if (!preg_match('#(\\d{4})-(\\d{1,2})-(\\d{1,2}) (\\d{1,2}):(\\d{2})#', $contest_data['contest_start'], $m))
			{
				$errors[] = sprintf($user->lang['CONTEST_START_INVALID'], $contest_data['contest_start']);
				$start_date_error = true;
			}
			else
			{
				$contest_data['contest_start'] = gmmktime($m[4], $m[5], 0, $m[2], $m[3], $m[1]) - ($user->timezone + $user->dst);
			}
			if (!preg_match('#(\\d{4})-(\\d{1,2})-(\\d{1,2}) (\\d{1,2}):(\\d{2})#', $contest_data['contest_rating'], $m))
			{
				$errors[] = sprintf($user->lang['CONTEST_RATING_INVALID'], $contest_data['contest_rating']);
				$date_error = true;
			}
			elseif (!$start_date_error)
			{
				$contest_data['contest_rating'] = gmmktime($m[4], $m[5], 0, $m[2], $m[3], $m[1]) - ($user->timezone + $user->dst) - $contest_data['contest_start'];
			}
			if (!preg_match('#(\\d{4})-(\\d{1,2})-(\\d{1,2}) (\\d{1,2}):(\\d{2})#', $contest_data['contest_end'], $m))
			{
				$errors[] = sprintf($user->lang['CONTEST_END_INVALID'], $contest_data['contest_end']);
				$date_error = true;
			}
			elseif (!$start_date_error)
			{
				$contest_data['contest_end'] = gmmktime($m[4], $m[5], 0, $m[2], $m[3], $m[1]) - ($user->timezone + $user->dst) - $contest_data['contest_start'];
			}
			if (!$start_date_error && !$date_error)
			{
				if ($contest_data['contest_end'] < $contest_data['contest_rating'])
				{
					$errors[] = $user->lang['CONTEST_END_BEFORE_RATING'];
				}
				if ($contest_data['contest_rating'] < 0)
				{
					$errors[] = $user->lang['CONTEST_RATING_BEFORE_START'];
				}
				if ($contest_data['contest_end'] < 0)
				{
					$errors[] = $user->lang['CONTEST_END_BEFORE_START'];
				}
			}
		}

		// Unset data that are not database fields
		$album_data_sql = $album_data;
		/*
		unset($album_data_sql['album_password_confirm']);
		*/

		// What are we going to do tonight Brain? The same thing we do everynight,
		// try to take over the world ... or decide whether to continue update
		// and if so, whether it's a new album/cat/contest or an existing one
		if (sizeof($errors))
		{
			return $errors;
		}

		/*
		// As we don't know the old password, it's kinda tricky to detect changes
		if ($album_data_sql['album_password_unset'])
		{
			$albumdata_sql['album_password'] = '';
		}
		else if (empty($album_data_sql['album_password']))
		{
			unset($album_data_sql['album_password']);
		}
		else
		{
			$album_data_sql['album_password'] = phpbb_hash($album_data_sql['album_password']);
		}
		unset($album_data_sql['album_password_unset']);
		*/

		if (!isset($album_data_sql['album_id']))
		{
			// no album_id means we're creating a new album
			unset($album_data_sql['type_action']);
			$add_on_top = request_var('add_on_top', 0);

			if ($album_data_sql['parent_id'])
			{
				$sql = 'SELECT left_id, right_id, album_type
					FROM ' . GALLERY_ALBUMS_TABLE . '
					WHERE album_id = ' . $album_data_sql['parent_id'];
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				if (!$row)
				{
					trigger_error($user->lang['PARENT_NOT_EXIST'] . adm_back_link($this->u_action . '&amp;' . $this->parent_id), E_USER_WARNING);
				}

				if (!$add_on_top)
				{
					$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . '
						SET left_id = left_id + 2, right_id = right_id + 2
						WHERE album_user_id = 0
							AND left_id > ' . $row['right_id'];
					$db->sql_query($sql);

					$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . '
						SET right_id = right_id + 2
						WHERE album_user_id = 0
							AND ' . $row['left_id'] . ' BETWEEN left_id AND right_id';
					$db->sql_query($sql);

					$album_data_sql['left_id'] = $row['right_id'];
					$album_data_sql['right_id'] = $row['right_id'] + 1;
				}
				else
				{
					$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . '
						SET left_id = left_id + 2, right_id = right_id + 2
						WHERE album_user_id = 0
							AND left_id > ' . $row['left_id'];
					$db->sql_query($sql);

					$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . '
						SET right_id = right_id + 2
						WHERE album_user_id = 0
							AND ' . $row['left_id'] . ' BETWEEN left_id AND right_id';
					$db->sql_query($sql);

					$album_data_sql['left_id'] = $row['left_id'] + 1;
					$album_data_sql['right_id'] = $row['left_id'] + 2;
				}
			}
			else
			{
				if (!$add_on_top)
				{
					$sql = 'SELECT MAX(right_id) AS right_id
						FROM ' . GALLERY_ALBUMS_TABLE . '
						WHERE album_user_id = 0';
					$result = $db->sql_query($sql);
					$row = $db->sql_fetchrow($result);
					$db->sql_freeresult($result);

					$album_data_sql['left_id'] = $row['right_id'] + 1;
					$album_data_sql['right_id'] = $row['right_id'] + 2;
				}
				else
				{
					$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . '
						SET left_id = left_id + 2, right_id = right_id + 2
						WHERE album_user_id = 0';
					$db->sql_query($sql);

					$album_data_sql['left_id'] = 1;
					$album_data_sql['right_id'] = 2;
				}
			}

			$sql = 'INSERT INTO ' . GALLERY_ALBUMS_TABLE . ' ' . $db->sql_build_array('INSERT', $album_data_sql);
			$db->sql_query($sql);
			$album_data['album_id'] = (int) $db->sql_nextid();

			// Type is contest, so create it...
			if ($album_data['album_type'] == ALBUM_CONTEST)
			{
				$contest_data_sql = $contest_data;
				$contest_data_sql['contest_album_id'] = $album_data['album_id'];
				$contest_data_sql['contest_marked'] = IMAGE_CONTEST;

				$sql = 'INSERT INTO ' . GALLERY_CONTESTS_TABLE . ' ' . $db->sql_build_array('INSERT', $contest_data_sql);
				$db->sql_query($sql);
				$album_data['album_contest'] = (int) $db->sql_nextid();

				$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . '
					SET album_contest = ' . $album_data['album_contest'] . '
					WHERE album_id = ' . $album_data['album_id'];
				$db->sql_query($sql);
			}

			add_log('admin', 'LOG_ALBUM_ADD', $album_data['album_name']);
		}
		else
		{
			$row = get_album_info($album_data_sql['album_id']);
			$reset_marked_images = false;

			if ($row['album_type'] == ALBUM_CONTEST && $album_data_sql['album_type'] != ALBUM_CONTEST)
			{
				// Changing a contest to album? No!
				// Changing a contest to category? No!
				$errors[] = $user->lang['ALBUM_WITH_CONTEST_NO_TYPE_CHANGE'];
				return $errors;
			}
			else if ($row['album_type'] != ALBUM_CONTEST && $album_data_sql['album_type'] == ALBUM_CONTEST)
			{
				// Changing a album to contest? No!
				// Changing a category to contest? No!
				$errors[] = $user->lang['ALBUM_NO_TYPE_CHANGE_TO_CONTEST'];
				return $errors;
			}
			else if ($row['album_type'] == ALBUM_CAT && $album_data_sql['album_type'] == ALBUM_UPLOAD)
			{
				// Changing a category to a album? Yes!
				// Reset the data (you couldn't upload directly in a cat, you must use a album)
				$album_data_sql['album_images'] = $album_data_sql['album_images_real'] = $album_data_sql['album_last_image_id'] = $album_data_sql['album_last_user_id'] = $album_data_sql['album_last_image_time'] = $album_data_sql['album_contest'] = 0;
				$album_data_sql['album_last_username'] = $album_data_sql['album_last_user_colour'] = $album_data_sql['album_last_image_name'] = '';
			}
			else if ($row['album_type'] == ALBUM_UPLOAD && $album_data_sql['album_type'] == ALBUM_CAT)
			{
				// Changing a album to a category? Yes!
				// we're turning a uploadable album into a non-uploadable album
				if ($album_data_sql['type_action'] == 'move')
				{
					$to_album_id = request_var('to_album_id', 0);

					if ($to_album_id)
					{
						$errors = $this->move_album_content($album_data_sql['album_id'], $to_album_id);
					}
					else
					{
						return array($user->lang['NO_DESTINATION_ALBUM']);
					}
				}
				else if ($album_data_sql['type_action'] == 'delete')
				{
					$errors = $this->delete_album_content($album_data_sql['album_id']);
				}
				else
				{
					return array($user->lang['NO_ALBUM_ACTION']);
				}
			}
			else if ($row['album_type'] == ALBUM_CONTEST && $album_data_sql['album_type'] == ALBUM_CONTEST)
			{
				// Changing a contest to contest? Yes!
				// We need to check for the contest_data
				$row_contest = $this->get_contest_info('album', $album_data['album_id']);
				$contest_data['contest_id'] = $row_contest['contest_id'];
				if ($row_contest['contest_marked'] == IMAGE_NO_CONTEST)
				{
					// If the old contest is finished, but the new one isn't, we need to remark the images!
					// If we change it the other way round, the album.php will do the end on the first visit!
					if (($row_contest['contest_start'] + $row_contest['contest_end']) > time())
					{
						$contest_data['contest_marked'] = IMAGE_CONTEST;
						$reset_marked_images = true;
					}
				}
			}

			if (sizeof($errors))
			{
				return $errors;
			}

			if ($row['parent_id'] != $album_data_sql['parent_id'])
			{
				if ($row['album_id'] != $album_data_sql['parent_id'])
				{
					$errors = $this->move_album($album_data_sql['album_id'], $album_data_sql['parent_id']);
				}
				else
				{
					$album_data_sql['parent_id'] = $row['parent_id'];
				}
			}

			if (sizeof($errors))
			{
				return $errors;
			}

			unset($album_data_sql['type_action']);

			if ($row['album_name'] != $album_data_sql['album_name'])
			{
				// The album name has changed, clear the parents list of all albums (for safety)
				$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . "
					SET album_parents = ''";
				$db->sql_query($sql);
			}

			// Setting the album id to the album id is not really received well by some dbs. ;)
			$album_id = $album_data_sql['album_id'];
			unset($album_data_sql['album_id']);

			$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . '
				SET ' . $db->sql_build_array('UPDATE', $album_data_sql) . '
				WHERE album_id = ' . $album_id;
			$db->sql_query($sql);

			if ($album_data_sql['album_type'] == ALBUM_CONTEST)
			{
				// Setting the contest id to the contest id is not really received well by some dbs. ;)
				$contest_id = $contest_data['contest_id'];
				unset($contest_data['contest_id']);

				$sql = 'UPDATE ' . GALLERY_CONTESTS_TABLE . '
					SET ' . $db->sql_build_array('UPDATE', $contest_data) . '
					WHERE contest_id = ' . $contest_id;
				$db->sql_query($sql);
				if ($reset_marked_images)
				{
					// If the old contest is finished, but the new one isn't, we need to remark the images!
					$sql = 'UPDATE ' . GALLERY_IMAGES_TABLE . '
						SET image_contest_rank = 0,
							image_contest_end = 0,
							image_contest = ' . IMAGE_CONTEST . '
						WHERE image_album_id = ' . $album_id;
					$db->sql_query($sql);
				}

				// Add it back
				$contest_data['contest_id'] = $contest_id;
			}

			// Add it back
			$album_data['album_id'] = $album_id;

			add_log('admin', 'LOG_ALBUM_EDIT', $album_data['album_name']);
		}

		return $errors;
	}

	/**
	* Move album
	*
	* borrowed from phpBB3
	* @author: phpBB Group
	* @function: move_forum
	*/
	function move_album($from_id, $to_id)
	{
		global $db, $user;

		$to_data = $moved_ids = $errors = array();

		// Get the parent data
		if ($to_id > 0)
		{
			$to_data = get_album_info($to_id);
		}

		$moved_albums = get_album_branch(0, $from_id, 'children', 'descending');
		$from_data = $moved_albums[0];
		$diff = sizeof($moved_albums) * 2;

		$moved_ids = array();
		for ($i = 0, $end = sizeof($moved_albums); $i < $end; ++$i)
		{
			$moved_ids[] = $moved_albums[$i]['album_id'];
		}

		// Resync parents
		$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . "
			SET right_id = right_id - $diff, album_parents = ''
			WHERE album_user_id = " . NON_PERSONAL_ALBUMS . '
				AND left_id < ' . $from_data['right_id'] . "
				AND right_id > " . $from_data['right_id'];
		$db->sql_query($sql);

		// Resync righthand side of tree
		$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . "
			SET left_id = left_id - $diff, right_id = right_id - $diff, album_parents = ''
			WHERE album_user_id = " . NON_PERSONAL_ALBUMS . '
				AND left_id > ' . $from_data['right_id'];
		$db->sql_query($sql);

		if ($to_id > 0)
		{
			// Retrieve $to_data again, it may have been changed...
			$to_data = get_album_info($to_id);

			// Resync new parents
			$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . "
				SET right_id = right_id + $diff, album_parents = ''
				WHERE album_user_id = " . NON_PERSONAL_ALBUMS . '
					AND ' . $to_data['right_id'] . ' BETWEEN left_id AND right_id
					AND ' . $db->sql_in_set('album_id', $moved_ids, true);
			$db->sql_query($sql);

			// Resync the righthand side of the tree
			$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . "
				SET left_id = left_id + $diff, right_id = right_id + $diff, album_parents = ''
				WHERE album_user_id = " . NON_PERSONAL_ALBUMS . '
					AND left_id > ' . $to_data['right_id'] . '
					AND ' . $db->sql_in_set('album_id', $moved_ids, true);
			$db->sql_query($sql);

			// Resync moved branch
			$to_data['right_id'] += $diff;

			if ($to_data['right_id'] > $from_data['right_id'])
			{
				$diff = '+ ' . ($to_data['right_id'] - $from_data['right_id'] - 1);
			}
			else
			{
				$diff = '- ' . abs($to_data['right_id'] - $from_data['right_id'] - 1);
			}
		}
		else
		{
			$sql = 'SELECT MAX(right_id) AS right_id
				FROM ' . GALLERY_ALBUMS_TABLE . '
				WHERE album_user_id = ' . NON_PERSONAL_ALBUMS . '
					AND ' . $db->sql_in_set('album_id', $moved_ids, true);
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);

			$diff = '+ ' . ($row['right_id'] - $from_data['left_id'] + 1);
		}

		$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . "
			SET left_id = left_id $diff, right_id = right_id $diff, album_parents = ''
			WHERE album_user_id = " . NON_PERSONAL_ALBUMS . '
				AND ' . $db->sql_in_set('album_id', $moved_ids);
		$db->sql_query($sql);

		return $errors;
	}

	/**
	* Move album content from one to another album
	*
	* borrowed from phpBB3
	* @author: phpBB Group
	* @function: move_forum_content
	*/
	function move_album_content($from_id, $to_id, $sync = true)
	{
		global $cache, $db;

		$sql = 'UPDATE ' . LOG_TABLE . "
			SET album_id = $to_id
			WHERE album_id = $from_id
				AND log_type = " . LOG_GALLERY;
		$db->sql_query($sql);

		// Reset contest-information for safety.
		$sql = 'UPDATE ' . GALLERY_IMAGES_TABLE . '
			SET image_album_id = ' . $to_id . ',
				image_contest_rank = 0,
				image_contest_end = 0,
				image_contest = ' . IMAGE_NO_CONTEST . '
			WHERE image_album_id = ' . $from_id;
		$db->sql_query($sql);

		$sql = 'UPDATE ' . GALLERY_REPORTS_TABLE . "
			SET report_album_id = $to_id
			WHERE report_album_id = $from_id";
		$db->sql_query($sql);

		//@todo: merge queries into loop
		$sql = 'DELETE FROM ' . GALLERY_CONTESTS_TABLE . '
			WHERE contest_album_id = ' . $from_id;
		$db->sql_query($sql);

		$sql = 'DELETE FROM ' . GALLERY_PERMISSIONS_TABLE . '
			WHERE perm_album_id = ' . $from_id;
		$db->sql_query($sql);

		$table_ary = array(GALLERY_WATCH_TABLE, GALLERY_MODSCACHE_TABLE);
		foreach ($table_ary as $table)
		{
			$sql = "DELETE FROM $table
				WHERE album_id = $from_id";
			$db->sql_query($sql);
		}

		$cache->destroy('sql', GALLERY_ALBUMS_TABLE);
		$cache->destroy('sql', GALLERY_COMMENTS_TABLE);
		$cache->destroy('sql', GALLERY_FAVORITES_TABLE);
		$cache->destroy('sql', GALLERY_IMAGES_TABLE);
		$cache->destroy('sql', GALLERY_RATES_TABLE);
		$cache->destroy('sql', GALLERY_REPORTS_TABLE);
		$cache->destroy('sql', GALLERY_WATCH_TABLE);
		$cache->destroy('_albums');

		if ($sync)
		{
			// Resync counters
			update_album_info($from_id);
			update_album_info($to_id);
		}

		return array();
	}

	/**
	* Remove complete album
	*
	* borrowed from phpBB3
	* @author: phpBB Group
	* @function: delete_forum
	*/
	function delete_album($album_id, $action_images = 'delete', $action_subalbums = 'delete', $images_to_id = 0, $subalbums_to_id = 0)
	{
		global $db, $user, $cache;

		$album_data = get_album_info($album_id);

		$errors = array();
		$log_action_images = $log_action_albums = $images_to_name = $subalbums_to_name = '';
		$album_ids = array($album_id);

		if ($action_images == 'delete')
		{
			$log_action_images = 'IMAGES';
			$errors = array_merge($errors, $this->delete_album_content($album_id));
		}
		else if ($action_images == 'move')
		{
			if (!$images_to_id)
			{
				$errors[] = $user->lang['NO_DESTINATION_ALBUM'];
			}
			else
			{
				$log_action_images = 'MOVE_IMAGES';

				$sql = 'SELECT album_name
					FROM ' . GALLERY_ALBUMS_TABLE . '
					WHERE album_id = ' . $images_to_id;
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				if (!$row)
				{
					$errors[] = $user->lang['NO_ALBUM'];
				}
				else
				{
					$images_to_name = $row['album_name'];
					$errors = array_merge($errors, $this->move_album_content($album_id, $images_to_id));
				}
			}
		}

		if (sizeof($errors))
		{
			return $errors;
		}

		if ($action_subalbums == 'delete')
		{
			$log_action_albums = 'ALBUMS';
			$rows = get_album_branch(NON_PERSONAL_ALBUMS, $album_id, 'children', 'descending', false);

			foreach ($rows as $row)
			{
				$album_ids[] = $row['album_id'];
				$errors = array_merge($errors, $this->delete_album_content($row['album_id']));
			}

			if (sizeof($errors))
			{
				return $errors;
			}

			$diff = sizeof($album_ids) * 2;

			$sql = 'DELETE FROM ' . GALLERY_ALBUMS_TABLE . '
				WHERE ' . $db->sql_in_set('album_id', $album_ids);
			$db->sql_query($sql);
		}
		else if ($action_subalbums == 'move')
		{
			if (!$subalbums_to_id)
			{
				$errors[] = $user->lang['NO_DESTINATION_ALBUM'];
			}
			else
			{
				$log_action_albums = 'MOVE_ALBUMS';

				$sql = 'SELECT album_name
					FROM ' . GALLERY_ALBUMS_TABLE . '
					WHERE album_id = ' . $subalbums_to_id;
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				if (!$row)
				{
					$errors[] = $user->lang['NO_ALBUM'];
				}
				else
				{
					$subalbums_to_name = $row['album_name'];

					$sql = 'SELECT album_id
						FROM ' . GALLERY_ALBUMS_TABLE . "
						WHERE parent_id = $album_id";
					$result = $db->sql_query($sql);

					while ($row = $db->sql_fetchrow($result))
					{
						$this->move_album($row['album_id'], $subalbums_to_id);
					}
					$db->sql_freeresult($result);

					// Grab new album data for correct tree updating later
					$album_data = get_album_info($album_id);

					$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . "
						SET parent_id = $subalbums_to_id
						WHERE parent_id = $album_id
							AND album_user_id = " . NON_PERSONAL_ALBUMS;
					$db->sql_query($sql);

					$diff = 2;
					$sql = 'DELETE FROM ' . GALLERY_ALBUMS_TABLE . "
						WHERE album_id = $album_id";
					$db->sql_query($sql);
				}
			}

			if (sizeof($errors))
			{
				return $errors;
			}
		}
		else
		{
			$diff = 2;
			$sql = 'DELETE FROM ' . GALLERY_ALBUMS_TABLE . "
				WHERE album_id = $album_id";
			$db->sql_query($sql);
		}

		// Resync tree
		$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . "
			SET right_id = right_id - $diff
			WHERE left_id < {$album_data['right_id']} AND right_id > {$album_data['right_id']}
				AND album_user_id = " . NON_PERSONAL_ALBUMS;
		$db->sql_query($sql);

		$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . "
			SET left_id = left_id - $diff, right_id = right_id - $diff
			WHERE left_id > {$album_data['right_id']}
				AND album_user_id = " . NON_PERSONAL_ALBUMS;
		$db->sql_query($sql);

		$log_action = implode('_', array($log_action_images, $log_action_albums));

		/**
		* Log what we did
		*/
		switch ($log_action)
		{
			case 'MOVE_IMAGES_MOVE_ALBUMS':
				add_log('admin', 'LOG_ALBUM_DEL_MOVE_IMAGES_MOVE_ALBUMS', $images_to_name, $subalbums_to_name, $album_data['album_name']);
			break;

			case 'MOVE_IMAGES_ALBUMS':
				add_log('admin', 'LOG_ALBUM_DEL_MOVE_IMAGES_ALBUMS', $images_to_name, $album_data['album_name']);
			break;

			case 'IMAGES_MOVE_ALBUMS':
				add_log('admin', 'LOG_ALBUM_DEL_IMAGES_MOVE_ALBUMS', $subalbums_to_name, $album_data['album_name']);
			break;

			case '_MOVE_ALBUMS':
				add_log('admin', 'LOG_ALBUM_DEL_MOVE_ALBUMS', $subalbums_to_name, $album_data['album_name']);
			break;

			case 'MOVE_IMAGES_':
				add_log('admin', 'LOG_ALBUM_DEL_MOVE_IMAGES', $images_to_name, $album_data['album_name']);
			break;

			case 'IMAGES_ALBUMS':
				add_log('admin', 'LOG_ALBUM_DEL_IMAGES_ALBUMS', $album_data['album_name']);
			break;

			case '_ALBUMS':
				add_log('admin', 'LOG_ALBUM_DEL_ALBUMS', $album_data['album_name']);
			break;

			case 'IMAGES_':
				add_log('admin', 'LOG_ALBUM_DEL_IMAGES', $album_data['album_name']);
			break;

			default:
				add_log('admin', 'LOG_ALBUM_DEL_ALBUM', $album_data['album_name']);
			break;
		}

		return $errors;
	}

	/**
	* Delete album content
	*/
	function delete_album_content($album_id)
	{
		global $cache, $config, $gallery_config, $db;

		// Before we remove anything we make sure we are able to adjust the image counts later. ;)
		$sql = 'SELECT image_user_id
			FROM ' . GALLERY_IMAGES_TABLE . '
			WHERE image_album_id = ' . $album_id . '
				AND image_status <> ' . IMAGE_UNAPPROVED;
		$result = $db->sql_query($sql);

		$image_counts = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$image_counts[$row['image_user_id']] = (!empty($image_counts[$row['image_user_id']])) ? $image_counts[$row['image_user_id']] + 1 : 1;
		}
		$db->sql_freeresult($result);

		$sql = 'SELECT image_id, image_filename, image_thumbnail, image_album_id
			FROM ' . GALLERY_IMAGES_TABLE . '
			WHERE image_album_id = ' . $album_id;
		$result = $db->sql_query($sql);

		$images = $deleted_images = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$images[] = $row;
			$deleted_images[] = $row['image_id'];
		}
		$db->sql_freeresult($result);

		if (count($images) > 0)
		{
			// Delete the files themselves.
			foreach ($images as $row)
			{
				@unlink($phpbb_root_path . GALLERY_CACHE_PATH . $row['image_thumbnail']);
				@unlink($phpbb_root_path . GALLERY_MEDIUM_PATH . $row['image_filename']);
				@unlink($phpbb_root_path . GALLERY_UPLOAD_PATH . $row['image_filename']);
			}
			$sql = 'DELETE FROM ' . GALLERY_COMMENTS_TABLE . '
				WHERE ' . $db->sql_in_set('comment_image_id', $deleted_images);
			$db->sql_query($sql);
			$sql = 'DELETE FROM ' . GALLERY_FAVORITES_TABLE . '
				WHERE ' . $db->sql_in_set('image_id', $deleted_images);
			$db->sql_query($sql);
			$sql = 'DELETE FROM ' . GALLERY_RATES_TABLE . '
				WHERE ' . $db->sql_in_set('rate_image_id', $deleted_images);
			$db->sql_query($sql);
			$sql = 'DELETE FROM ' . GALLERY_REPORTS_TABLE . '
				WHERE ' . $db->sql_in_set('report_image_id', $deleted_images);
			$db->sql_query($sql);
			$sql = 'DELETE FROM ' . GALLERY_WATCH_TABLE . '
				WHERE ' . $db->sql_in_set('image_id', $deleted_images);
			$db->sql_query($sql);
			$sql = 'DELETE FROM ' . GALLERY_IMAGES_TABLE . '
				WHERE ' . $db->sql_in_set('image_id', $deleted_images);
			$db->sql_query($sql);
		}

		$sql = 'DELETE FROM ' . LOG_TABLE . "
			WHERE album_id = $album_id
				AND log_type = " . LOG_GALLERY;
		$db->sql_query($sql);

		//@todo: merge queries into loop
		$sql = 'DELETE FROM ' . GALLERY_PERMISSIONS_TABLE . '
			WHERE perm_album_id = ' . (int) $album_id;
		$db->sql_query($sql);
		$sql = 'DELETE FROM ' . GALLERY_CONTESTS_TABLE . '
			WHERE contest_album_id = ' . (int) $album_id;
		$db->sql_query($sql);

		$table_ary = array(GALLERY_WATCH_TABLE, GALLERY_MODSCACHE_TABLE);

		foreach ($table_ary as $table)
		{
			$db->sql_query("DELETE FROM $table WHERE album_id = $album_id");
		}

		// Adjust users image counts
		if (sizeof($image_counts))
		{
			foreach ($image_counts as $image_user_id => $substract)
			{
				$sql = 'UPDATE ' . GALLERY_USERS_TABLE . '
					SET user_images = 0
					WHERE user_id = ' . $image_user_id . '
						AND user_images < ' . $substract;
				$db->sql_query($sql);

				$sql = 'UPDATE ' . GALLERY_USERS_TABLE . '
					SET user_images = user_images - ' . $substract . '
					WHERE user_id = ' . $image_user_id . '
						AND user_images >= ' . $substract;
				$db->sql_query($sql);
			}
		}

		// Make sure the overall image & comment count is correct...
		$sql = 'SELECT COUNT(image_id) AS num_images, SUM(image_comments) AS num_comments
			FROM ' . GALLERY_IMAGES_TABLE . '
			WHERE image_status <> ' . IMAGE_UNAPPROVED;
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		set_config('num_images', (int) $row['num_images'], true);
		set_gallery_config('num_comments', (int) $row['num_comments'], true);

		$cache->destroy('sql', GALLERY_ALBUMS_TABLE);
		$cache->destroy('sql', GALLERY_COMMENTS_TABLE);
		$cache->destroy('sql', GALLERY_FAVORITES_TABLE);
		$cache->destroy('sql', GALLERY_IMAGES_TABLE);
		$cache->destroy('sql', GALLERY_RATES_TABLE);
		$cache->destroy('sql', GALLERY_REPORTS_TABLE);
		$cache->destroy('sql', GALLERY_WATCH_TABLE);
		$cache->destroy('_albums');

		return array();
	}

	/**
	* Move album position by $steps up/down
	*
	* borrowed from phpBB3
	* @author: phpBB Group
	* @function: move_forum_by
	*/
	function move_album_by($album_row, $action = 'move_up', $steps = 1)
	{
		global $db;

		/**
		* Fetch all the siblings between the module's current spot
		* and where we want to move it to. If there are less than $steps
		* siblings between the current spot and the target then the
		* module will move as far as possible
		*/
		$sql = 'SELECT album_id, album_name, left_id, right_id
			FROM ' . GALLERY_ALBUMS_TABLE . "
			WHERE parent_id = {$album_row['parent_id']}
				AND album_user_id = " . NON_PERSONAL_ALBUMS . '
				AND ' . (($action == 'move_up') ? "right_id < {$album_row['right_id']} ORDER BY right_id DESC" : "left_id > {$album_row['left_id']} ORDER BY left_id ASC");
		$result = $db->sql_query_limit($sql, $steps);

		$target = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$target = $row;
		}
		$db->sql_freeresult($result);

		if (!sizeof($target))
		{
			// The album is already on top or bottom
			return false;
		}

		/**
		* $left_id and $right_id define the scope of the nodes that are affected by the move.
		* $diff_up and $diff_down are the values to substract or add to each node's left_id
		* and right_id in order to move them up or down.
		* $move_up_left and $move_up_right define the scope of the nodes that are moving
		* up. Other nodes in the scope of ($left_id, $right_id) are considered to move down.
		*/
		if ($action == 'move_up')
		{
			$left_id = $target['left_id'];
			$right_id = $album_row['right_id'];

			$diff_up = $album_row['left_id'] - $target['left_id'];
			$diff_down = $album_row['right_id'] + 1 - $album_row['left_id'];

			$move_up_left = $album_row['left_id'];
			$move_up_right = $album_row['right_id'];
		}
		else
		{
			$left_id = $album_row['left_id'];
			$right_id = $target['right_id'];

			$diff_up = $album_row['right_id'] + 1 - $album_row['left_id'];
			$diff_down = $target['right_id'] - $album_row['right_id'];

			$move_up_left = $album_row['right_id'] + 1;
			$move_up_right = $target['right_id'];
		}

		// Now do the dirty job
		$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . "
			SET left_id = left_id + CASE
				WHEN left_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
				ELSE {$diff_down}
			END,
			right_id = right_id + CASE
				WHEN right_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
				ELSE {$diff_down}
			END,
			album_parents = ''
			WHERE
				left_id BETWEEN {$left_id} AND {$right_id}
				AND right_id BETWEEN {$left_id} AND {$right_id}
				AND album_user_id = " . NON_PERSONAL_ALBUMS;
		$db->sql_query($sql);

		return $target['album_name'];
	}

	/**
	* Display progress bar for syncinc albums
	*
	* borrowed from phpBB3
	* @author: phpBB Group
	* @function: display_progress_bar
	*/
	function display_progress_bar($start, $total)
	{
		global $template, $user;

		adm_page_header($user->lang['SYNC_IN_PROGRESS']);

		$template->set_filenames(array(
			'body'	=> 'progress_bar.html',
		));

		$template->assign_vars(array(
			'L_PROGRESS'			=> $user->lang['SYNC_IN_PROGRESS'],
			'L_PROGRESS_EXPLAIN'	=> ($start && $total) ? sprintf($user->lang['SYNC_IN_PROGRESS_EXPLAIN'], $start, $total) : $user->lang['SYNC_IN_PROGRESS'])
		);

		adm_page_footer();
	}
}

?>