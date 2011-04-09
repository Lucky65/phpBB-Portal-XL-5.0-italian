<?php

/** 
*
* @mod package		Download Mod 6
* @file				class_dlmod.php 46 2011/01/09 OXPUS
* @copyright		(c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* @copyright mod	(c) hotschi / demolition fabi / oxpus
* @license			http://opensource.org/licenses/gpl-license.php GNU Public License 
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
* class dlmod
*
* This class contains the following functions:
* --------------------------------------------
* $dl_mod->dl_cat_auth($cat_id); * Return the group_permissions for the given category
* $dl_mod->get_ext_blacklist(); * Returns the extention blacklist, if exists
* $dl_mod->user_auth($cat_id, $perm); * Check a single auth value for the current user
* $dl_mod->files($cat_id, $sql_sort_by, $sql_order, $start, $limit); * Return the download data for each file in the given category
* $dl_mod->all_files($cat_id, $sql_sort_by, $sql_order, $extra_where, $df_id); * Return the download data for all files e.g. for the overview
* $dl_mod->mini_status_cat($parent); * Returns the mini icon for new/edited files in the given category
* $dl_mod->mini_status_file($parent, $file_id); * Returns the mini icon for one given file
* $dl_mod->index(); * Create the viewable index for all or one category
* $dl_mod->full_index($only_cat, $parent, $level, $auth_level); * Create the complete index, e.g. for admin view or downloading an unviewable file
* $dl_mod->get_todo(); * Return all data for the todo list
* $dl_mod->get_dl_overall_size(); * Return the overall file size
* $dl_mod->count_dl_approve(); * Return the number for not approved downloads filtered by user permissions
* $dl_mod->count_comment_approve(); * Return the number for not approved comments filtered by user permissions
* $dl_mod->find_latest_dl($last_data, $parent); * Return the time from the last added or edited download for the given category
* $dl_mod->get_sublevel($cat_id); * Read the sublevel for the given category
* $dl_mod->count_sublevel($cat_id); * Count the existing sub categories of a given category
* $dl_mod->get_sublevel_count($cat_id); * Read the downloads for the given sublevel and each cat in this. Will also be used by $dlmod->get_sublevel($cat_id)!
* $dl_mod->dl_nav($cat_id, $disp_art); * Create the navigation path for the given cat
* $dl_mod->dl_dropdown($cur, $parent, $level, $select_cat, $perm, $rem_cat); * Create the download dropdown for jumpbox or cat select while upload
* $dl_mod->rating_img($rating_points); * Choose the rating image for the given rating points
* $dl_mod->dl_client($client); * Returns the client from the current user
* $dl_mod->dl_size($input_value, $rnd, $out_type); * Format the size fromthe given download filesize
* $dl_mod->dl_prune_stats($cat_id, $stats_prune); * Delete all old stats data
* $dl_mod->stats_perm($cats = array()); * Manage the access permissions for statistics
* $dl_mod->cat_auth_comment_read($cat_id); * Manage the access permissions for reading comments
* $dl_mod->cat_auth_comment_post($cat_id); * Manage the access permissions for posting comments
* $dl_mod->read_exist_files(); * Read all files from the database
* $dl_mod->read_dl_dirs($download_dir, $path); * Read all existing download folders from the server
* $dl_mod->read_dl_files($download_dir, $path); * Read all existing download files from the server
* $dl_mod->read_dl_sizes($download_dir, $path); * Read all existing download filesizes from the server
* $dl_mod->readfile_chunked($filename, $retbytes); * Read the file chunked for download
* $dl_mod->dl_status($df_id); * Get the download status for the given file id
* $dl_mod->dl_auth_users($cat_id, $perm); * Read all user ids for the given download permission
* $dl_mod->bug_tracker(); * Check if the bug tracker will be enabled for at least one category
* $dl_mod->gen_dl_topic($dl_id); * Generate a new topic for the given download
* $dl_mod->delete_topic($topic_id); * Delete created topic for download if download will be deleted before
* $dl_mod->update_topic($topic_id, $dl_id); * Update topic title with new download description, if it was changed 
* $dl_mod->dl_cat_select($parent, $level, $select_cat); * Creates a selectable categories list
* $dl_mod->mod_version(); * Displayes the current mod version number and compares with the latest release
*/

class dlmod
{
	/*
	* init basic variables
	*/
	var $dl_auth = array();
	var $dl_file = array();
	var $dl_file_icon = array();
	var $dl_index = array();
	var $path_dl_array = array();
	var $ext_blacklist = array();
	var $user_client = 'n/a';
	var $user_dl_update_time = 0;
	var $user_id = ANONYMOUS;
	var $user_admin = 0;
	var $user_logged_in = 0;
	var $user_posts = 0;
	var $user_regdate = 0;
	var $user_traffic = 0;
	var $user_banned = 0;

	/*
	* run the class constructor
	*/
	public function dlmod()
	{
		global $db, $auth, $user, $config, $dl_cache;

		/*
		* define the current user
		*/
		$this->user_id = ($user->data['user_perm_from']) ? $user->data['user_perm_from'] : $user->data['user_id'];
		$this->user_regdate = $user->data['user_regdate'];
		$this->user_dl_update_time = $user->data['user_dl_update_time'];
		$this->user_traffic = $user->data['user_traffic'];
		$this->user_logged_in = $user->data['is_registered'];
		$this->user_posts = $user->data['user_posts'];
		$this->user_client = $user->data['session_browser'];
		$this->username = $user->data['username'];
		$this->user_ip = $user->data['session_ip'];
		$this->user_admin = ($auth->acl_get('a_') && $user->data['is_registered'] && !$user->data['user_perm_from']) ? true : false;

		$dl_rem = $dl_cache->obtain_dl_config();
		$config = array_merge($config, $dl_rem);

		/*
		* read the extention blacklist if enabled
		*/
		if ($config['dl_use_ext_blacklist'])
		{
			$blacklist_ary = $dl_cache->obtain_dl_blacklist();
			if (is_array($blacklist_ary) && sizeof($blacklist_ary))
			{
				$this->ext_blacklist = array_unique($dl_cache->obtain_dl_blacklist());
			}
		}

		/*
		* disable the extention blacklist if it will be empty
		*/
		if (sizeof($this->ext_blacklist))
		{
			$config['dl_enable_blacklist'] = TRUE;
		}
		else
		{
			$config['dl_enable_blacklist'] = 0;
		}	

		/*
		* set the overall traffic and categories traffic if needed (each first day of a month)
		*/
		if (isset($config['dl_traffic_retime']) && !$config['dl_traffic_off'])
		{
			$auto_overall_traffic_month = $user->format_date($config['dl_traffic_retime'], 'Ym');
			$current_traffic_month = $user->format_date(time(), 'Ym');
	
			if ($auto_overall_traffic_month < $current_traffic_month)
			{
				$config['dl_traffic_retime'] = time();
				$config['dl_remain_traffic'] = 0;
				$config['dl_remain_guest_traffic'] = 0;
	
				$sql = 'UPDATE ' . DL_REM_TRAF_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
					'config_value' => '0'));
				$db->sql_query($sql);
	
				$sql = 'UPDATE ' . DL_CAT_TRAF_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
					'cat_traffic_use' => 0));
				$db->sql_query($sql);
	
				set_config('dl_traffic_retime', $config['dl_traffic_retime'], true);
			}
		}

		/*
		* reset download clicks (each first day of a month)
		*/
		if (isset($config['dl_click_reset_time']))
		{
			$auto_click_reset_month = $user->format_date($config['dl_click_reset_time'], 'Ym');
			$current_traffic_month = $user->format_date(time(), 'Ym');
	
			if ($auto_click_reset_month < $current_traffic_month)
			{
				$sql = 'UPDATE ' . DOWNLOADS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
					'klicks' => 0));
				$db->sql_query($sql);
	
				set_config('dl_click_reset_time', time(), true);
			}
		}

		/*
		* set the user traffic if needed (each first day of the month)
		*/
		if ($this->user_id <> ANONYMOUS && !$config['dl_traffic_off'] && (intval($config['dl_delay_auto_traffic']) == 0 || (time() - $this->user_regdate) / 84600 > $config['dl_delay_auto_traffic']))
		{
			$user_auto_traffic_month = $user->format_date($user->data['user_dl_update_time'], 'Ym');
			$current_traffic_month = $user->format_date(time(), 'Ym');

			if ($user_auto_traffic_month < $current_traffic_month)
			{
				$sql = 'SELECT max(g.group_dl_auto_traffic) AS max_traffic FROM ' . GROUPS_TABLE . ' g, ' . USER_GROUP_TABLE . ' ug
					WHERE g.group_id = ug.group_id
						AND ug.user_id = ' . $this->user_id . '
						AND ug.user_pending <> ' . true;
				$result = $db->sql_query($sql);
				$max_group_row = $db->sql_fetchfield('max_traffic');
				$db->sql_freeresult($result);

				$user_traffic = (intval($max_group_row) != 0) ? $max_group_row : $config['dl_user_dl_auto_traffic'];

				if ($user_traffic > $this->user_traffic)
				{
					$sql = 'UPDATE ' . USERS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
						'user_traffic'			=> $user_traffic,
						'user_dl_update_time'	=> time())) . ' WHERE user_id = ' . $this->user_id;
					$db->sql_query($sql);

					$this->user_traffic = $user_traffic;
				}
			}
		}

		/*
		* read the index
		*/
		$this->dl_index = $dl_cache->obtain_dl_cats();

		if (sizeof($this->dl_index) > 0 && is_array($this->dl_index))
		{
			foreach($this->dl_index as $key => $value)
			{
				// check the default cat permissions
				if ($this->dl_index[$key]['auth_view'] == 1 || ($this->dl_index[$key]['auth_view'] == 2 && $this->user_logged_in))
				{
					$this->dl_index[$key]['auth_view'] = true;
				}
				else
				{
					$this->dl_index[$key]['auth_view'] = false;
				}
		
				if ($this->dl_index[$key]['auth_dl'] == 1 || ($this->dl_index[$key]['auth_dl'] == 2 && $this->user_logged_in))
				{
					$this->dl_index[$key]['auth_dl'] = true;
				}
				else
				{
					$this->dl_index[$key]['auth_dl'] = false;
				}
		
				if ($this->dl_index[$key]['auth_up'] == 1 || ($this->dl_index[$key]['auth_up'] == 2 && $this->user_logged_in))
				{
					$this->dl_index[$key]['auth_up'] = true;
				}
				else
				{
					$this->dl_index[$key]['auth_up'] = false;
				}
		
				if ($this->dl_index[$key]['auth_mod'] == 1 || ($this->dl_index[$key]['auth_mod'] == 2 && $this->user_logged_in))
				{
					$this->dl_index[$key]['auth_mod'] = true;
				}
				else
				{
					$this->dl_index[$key]['auth_mod'] = false;
				}
			}
		}
		else
		{
			$this->dl_index = array();
		}

		/*
		* count all files per category
		*/
		$cat_counts = $dl_cache->obtain_dl_cat_counts();

		if (is_array($cat_counts) && sizeof($cat_counts) > 0)
		{
			foreach($cat_counts as $key => $value)
			{
				$this->dl_index[$key]['total'] = $value;
			}
		}
		else
		{
			$cat_counts = array();
		}

		/*
		* get the user permissions
		*/
		$cat_auth_array = $group_ids = array();

		$dl_auth_perm = $dl_cache->obtain_dl_auth();

		$auth_cat = (isset($dl_auth_perm['auth_cat'])) ? $dl_auth_perm['auth_cat'] : array();
		$group_perm_ids = (isset($dl_auth_perm['group_perm_ids'])) ? $dl_auth_perm['group_perm_ids'] : array();
		$auth_perm = (isset($dl_auth_perm['auth_perm'])) ? $dl_auth_perm['auth_perm'] : array();

		if (sizeof($group_perm_ids) != 0)
		{
			$sql = 'SELECT group_id FROM ' . USER_GROUP_TABLE . '
				WHERE ' . $db->sql_in_set('group_id', $group_perm_ids) . '
					AND user_id = ' . $this->user_id . '
					AND user_pending <> ' . true;
			$result = $db->sql_query($sql);

			while ($row = $db->sql_fetchrow($result))
			{
				$group_ids[] = $row['group_id'];
			}
			$db->sql_freeresult($result);

			for ($i = 0; $i < count($auth_cat); $i++)
			{
				$auth_view = $auth_dl = $auth_up = $auth_mod = 0;
				$cat = $auth_cat[$i];

				for ($j = 0; $j < count($group_ids); $j++)
				{
					$user_group = $group_ids[$j];

					if (isset($auth_perm[$cat][$user_group]['auth_view']) && $auth_perm[$cat][$user_group]['auth_view'] == true)
					{
						$auth_view = true;
					}
					if (isset($auth_perm[$cat][$user_group]['auth_dl']) && $auth_perm[$cat][$user_group]['auth_dl'] == true)
					{
						$auth_dl = true;
					}
					if (isset($auth_perm[$cat][$user_group]['auth_up']) && $auth_perm[$cat][$user_group]['auth_up'] == true)
					{
						$auth_up = true;
					}
					if (isset($auth_perm[$cat][$user_group]['auth_mod']) && $auth_perm[$cat][$user_group]['auth_mod'] == true)
					{
						$auth_mod = true;
					}
				}

				$cat_auth_array[$cat]['auth_view'] = $auth_view;
				$cat_auth_array[$cat]['auth_dl'] = $auth_dl;
				$cat_auth_array[$cat]['auth_up'] = $auth_up;
				$cat_auth_array[$cat]['auth_mod'] = $auth_mod;
			}
		}

		$this->dl_auth = $cat_auth_array;

		/*
		* preset all files
		*/
		$this->dl_file = array();

		$sql = 'SELECT id, cat, file_name, real_file, file_size, extern, free, file_traffic, klicks FROM ' . DOWNLOADS_TABLE . '
				WHERE approve = ' . true;
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$this->dl_file[$row['id']] = $row;
		}
		$db->sql_freeresult($result);

		$this->dl_file_icon = $dl_cache->obtain_dl_files(intval($config['dl_new_time']), intval($config['dl_edit_time']));

		/*
		* get ban status for current user
		*/
		$sql_guests = (!$this->user_logged_in) ? " OR guests = 1 " : '';

		$sql = 'SELECT ban_id FROM ' . DL_BANLIST_TABLE . '
			WHERE user_id = ' . $this->user_id . "
				OR user_ip = '" . $this->user_ip . "'
				OR user_agent " . $db->sql_like_expression($this->dl_client()) . "
				OR username = '" . $this->username . "'
				$sql_guests";
		$result = $db->sql_query($sql);

		$total_ban_ids = $db->sql_affectedrows($result);
		$db->sql_freeresult($result);

		if ($total_ban_ids)
		{
			$this->user_banned = true;
		}

		return;
	}

	public function dl_cat_auth($cat_id)
	{
		$cat_perm = array();

		$cat_perm['auth_view'] = (isset($this->dl_auth[$cat_id]['auth_view'])) ? intval($this->dl_auth[$cat_id]['auth_view']) : 0;
		$cat_perm['auth_dl'] = (isset($this->dl_auth[$cat_id]['auth_dl'])) ? intval($this->dl_auth[$cat_id]['auth_dl']) : 0;
		$cat_perm['auth_mod'] = (isset($this->dl_auth[$cat_id]['auth_mod'])) ? intval($this->dl_auth[$cat_id]['auth_mod']) : 0;
		$cat_perm['auth_up'] = (isset($this->dl_auth[$cat_id]['auth_up'])) ? intval($this->dl_auth[$cat_id]['auth_up']) : 0;
		$cat_perm['auth_cread'] = (isset($this->dl_auth[$cat_id]['auth_cread'])) ? intval($this->dl_auth[$cat_id]['auth_cread']) : 0;
		$cat_perm['auth_cpost'] = (isset($this->dl_auth[$cat_id]['auth_cpost'])) ? intval($this->dl_auth[$cat_id]['auth_cpost']) : 0;

		return $cat_perm;
	}

	public function get_ext_blacklist()
	{
		return $this->ext_blacklist;
	}

	public function user_auth($cat_id, $perm)
	{
		if ((isset($this->dl_auth[$cat_id][$perm]) && $this->dl_auth[$cat_id][$perm]) || (isset($this->dl_index[$cat_id][$perm]) && $this->dl_index[$cat_id][$perm]) || $this->user_admin)
		{
			return true;
		}

		return false;
	}

	public function files($cat_id, $sql_sort_by, $sql_order, $start, $limit, $sql_fields = '*')
	{
		global $db;

		$dl_files = array();

		$sql = "SELECT $sql_fields FROM " . DOWNLOADS_TABLE . "
			WHERE cat = $cat_id
				AND approve = " . true . "
			ORDER BY $sql_sort_by $sql_order";
		if ($limit)
		{
			$result = $db->sql_query_limit($sql, $limit, $start);
		}
		else
		{
			$result = $db->sql_query($sql);
		}

		while ($row = $db->sql_fetchrow($result))
		{
			$dl_files[] = $row;
		}
		$db->sql_freeresult($result);

		return $dl_files;
	}

	public function all_files($cat_id, $sql_sort_by, $sql_order, $extra_where, $df_id, $modcp, $sql_fields)
	{
		global $db;

		$dl_files = array();

		$sql = "SELECT $sql_fields FROM " . DOWNLOADS_TABLE;
		$sql .= ($modcp) ? ' WHERE ' . $db->sql_in_set('approve', array(0, 1)) : ' WHERE approve = 1';
		$sql .= ($cat_id) ? " AND cat = $cat_id " : '';
		$sql .= ($df_id) ? " AND id = $df_id " : '';
		$sql .= ($extra_where) ? " $extra_where " : '';
		$sql .= ($sql_sort_by) ? " ORDER BY $sql_sort_by $sql_order" : '';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$dl_files[] = $row;
		}
		$db->sql_freeresult($result);

		return ($df_id) ? ((isset($dl_files[0])) ? $dl_files[0] : array()) : $dl_files;
	}

	public function mini_status_cat($cur, $parent, $flag = 0)
	{
		$mini_status_icon[$cur]['new'] = 0;
		$mini_status_icon[$cur]['edit'] = 0;

		if (!is_array($this->dl_index) || !sizeof($this->dl_index))
		{
			return array();
		}

		foreach($this->dl_index as $cat_id => $value)
		{
			if ($cat_id == $parent && !$flag)
			{
				if ((isset($this->dl_index[$cat_id]['auth_view']) && $this->dl_index[$cat_id]['auth_view']) || (isset($this->dl_auth[$cat_id]['auth_view'])))
				{
					if (isset($this->dl_index[$cat_id]['total']))
					{
						$new_sum = (isset($this->dl_file_icon['new_sum'][$cat_id])) ? intval($this->dl_file_icon['new_sum'][$cat_id]) : 0;
						$edit_sum = (isset($this->dl_file_icon['edit_sum'][$cat_id])) ? intval($this->dl_file_icon['edit_sum'][$cat_id]) : 0;

						$mini_status_icon[$cur]['new'] += $new_sum;
						$mini_status_icon[$cur]['edit'] += $edit_sum;
					}
				}

				$mini_icon = $this->mini_status_cat($cur, $cat_id, 1);
				$mini_status_icon[$cur]['new'] += $mini_icon[$cur]['new'];
				$mini_status_icon[$cur]['edit'] += $mini_icon[$cur]['edit'];
			}

			if ((isset($this->dl_index[$cat_id]['parent']) && $this->dl_index[$cat_id]['parent'] == $parent) && $flag)
			{
				if ((isset($this->dl_index[$cat_id]['auth_view']) && $this->dl_index[$cat_id]['auth_view']) || (isset($this->dl_auth[$cat_id]['auth_view'])))
				{
					if (isset($this->dl_index[$cat_id]['total']))
					{
						$new_sum = (isset($this->dl_file_icon['new_sum'][$cat_id])) ? intval($this->dl_file_icon['new_sum'][$cat_id]) : 0;
						$edit_sum = (isset($this->dl_file_icon['edit_sum'][$cat_id])) ? intval($this->dl_file_icon['edit_sum'][$cat_id]) : 0;

						$mini_status_icon[$cur]['new'] += $new_sum;
						$mini_status_icon[$cur]['edit'] += $edit_sum;
					}
				}

				$mini_icon = $this->mini_status_cat($cur, $cat_id, 1);
				$mini_status_icon[$cur]['new'] += $mini_icon[$cur]['new'];
				$mini_status_icon[$cur]['edit'] += $mini_icon[$cur]['edit'];
			}
		}

		return $mini_status_icon;
	}

	public function mini_status_file($parent, $file_id)
	{
		global $user;

		if (isset($this->dl_file_icon['new'][$parent][$file_id]) && $this->dl_file_icon['new'][$parent][$file_id] == true)
		{
			$mini_icon_img = $user->img('dl_file_new');
		}
		else if (isset($this->dl_file_icon['edit'][$parent][$file_id]) && $this->dl_file_icon['edit'][$parent][$file_id] == true)
		{
			$mini_icon_img = $user->img('dl_file_edit');
		}
		else
		{
			$mini_icon_img = '';
		}

		return $mini_icon_img;
	}

	public function index($parent = 0)
	{
		global $phpEx, $phpbb_root_path;

		if (!is_array($this->dl_index) || !sizeof($this->dl_index))
		{
			return array();
		}

		$tree_dl = array();

		foreach($this->dl_index as $cat_id => $value)
		{
			if (((isset($value['auth_view']) && $value['auth_view']) || (isset($this->dl_auth[$cat_id]['auth_view']) && $this->dl_auth[$cat_id]['auth_view']) || $this->user_admin) && (isset($value['parent']) && $value['parent'] == $parent))
			{
				$tree_dl[$cat_id] = $value;
				$tree_dl[$cat_id]['cat_icon'] = (isset($value['cat_icon']) && $value['cat_icon'] != '') ? generate_board_url() . '/' . $value['cat_icon'] : generate_board_url() . '/images/spacer.gif';
				$tree_dl[$cat_id]['nav_path'] = append_sid("{$phpbb_root_path}downloads.$phpEx?cat=$cat_id");
				$tree_dl[$cat_id]['cat_path'] = $value['path'];
				$tree_dl[$cat_id]['cat_name_nav'] = $value['cat_name'];
				$tree_dl[$cat_id]['sublevel'] = $this->get_sublevel($cat_id);
			}
		}
		return $tree_dl;
	}

	public function full_index($only_cat = 0, $parent = 0, $level = 0, $auth_level = 0)
	{
		global $phpEx, $tree_dl, $phpbb_root_path, $access_ids;

		if (!is_array($this->dl_index) || !sizeof($this->dl_index))
		{
			return array();
		}

		if ($only_cat)
		{
			$tree_dl[$only_cat] = $this->dl_index[$only_cat];
			$tree_dl[$only_cat]['cat_icon'] = (isset($this->dl_index[$only_cat]['cat_icon']) && $this->dl_index[$only_cat]['cat_icon'] != '') ? generate_board_url() . '/' . $this->dl_index[$only_cat]['cat_icon'] : generate_board_url() . '/images/spacer.gif';
			$tree_dl[$only_cat]['nav_path'] = append_sid("{$phpbb_root_path}downloads.$phpEx?cat=$only_cat");
			$tree_dl[$only_cat]['cat_path'] = $this->dl_index[$only_cat]['path'];
			$tree_dl[$only_cat]['cat_name_nav'] = $this->dl_index[$only_cat]['cat_name'];
		}
		else
		{
			if ($auth_level)
			{
				unset($access_ids);
				$access_ids = array();
			}

			foreach($this->dl_index as $cat_id => $value)
			{
				if ((isset($value['auth_view']) && $value['auth_view']) || (isset($this->dl_auth[$cat_id]['auth_view']) && $this->dl_auth[$cat_id]['auth_view']) || $this->user_admin)
				{
					/*
					* $auth level will return the following data
					* 0 = Default values for each category
					* 1 = IDs from all viewable categories
					* 2 = IDs from moderated categories
					* 3 = IDs from upload categories
					*/

					if ($auth_level == 1 && isset($value['id']) && $value['id'] && ($value['auth_view'] || (isset($this->dl_auth[$cat_id]['auth_view']) && $this->dl_auth[$cat_id]['auth_view']) || $this->user_admin))
					{
						$access_ids[] = $cat_id;
					}
					else if ($auth_level == 2 && isset($value['id']) && $value['id'] && ((isset($value['auth_mod']) && $value['auth_mod']) || (isset($this->dl_auth[$cat_id]['auth_mod']) && $this->dl_auth[$cat_id]['auth_mod']) || $this->user_admin))
					{
						$access_ids[] = $cat_id;
					}
					else if ($auth_level == 3 && isset($value['id']) && $value['id'] && ((isset($value['auth_up']) && $value['auth_up']) || (isset($this->dl_auth[$cat_id]['auth_up']) && $this->dl_auth[$cat_id]['auth_up']) || $this->user_admin))
					{
						$access_ids[] = $cat_id;
					}
					else if (isset($value['parent']) && $value['parent'] == $parent)
					{
						$seperator = '';
						for ($i = 0; $i < $level; $i++)
						{
							$seperator .= ($value['parent'] != 0) ? '&nbsp;&nbsp;|___&nbsp;' : '';
						}

						$tree_dl[$cat_id] = $value;
						$tree_dl[$cat_id]['cat_icon'] = (isset($value['cat_icon']) && $value['cat_icon'] != '') ? generate_board_url() . '/' . $value['cat_icon'] : generate_board_url() . '/images/spacer.gif';
						$tree_dl[$cat_id]['nav_path'] = append_sid("{$phpbb_root_path}downloads.$phpEx?cat=$cat_id");
						$tree_dl[$cat_id]['cat_path'] = $value['path'];
						$tree_dl[$cat_id]['cat_name'] = $seperator . $value['cat_name'];
						$tree_dl[$cat_id]['cat_name_nav'] = $value['cat_name'];

						$level++;
						$this->full_index(0, $cat_id, $level, 0);
						$level--;
					}
				}
			}
		}

		return (isset($auth_level) && $auth_level <> 0) ? $access_ids : $tree_dl;
	}

	public function get_todo()
	{
		global $phpEx, $phpbb_root_path;

		$todo = array();

		$dl_files = $this->all_files(0, '', 'ASC', "AND todo <> '' AND todo IS NOT NULL", 0, 0, 'cat, id, description, hack_version, todo, todo_uid, todo_flags, todo_bitfield');
		$dl_cats = $this->full_index(0, 0, 0, 1);

		for ($i = 0; $i < sizeof($dl_files); $i++)
		{
			$cat_id = $dl_files[$i]['cat'];
			if (in_array($cat_id, $dl_cats))
			{
				$file_link		= append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=" . $dl_files[$i]['id']);
				$file_name		= $dl_files[$i]['description'];
				$hack_version	= ($dl_files[$i]['hack_version'] != '') ? ' ' . $dl_files[$i]['hack_version'] : '';
				$todo_text		= generate_text_for_display($dl_files[$i]['todo'], $dl_files[$i]['todo_uid'], $dl_files[$i]['todo_bitfield'], $dl_files[$i]['todo_flags']);

				$todo['file_link'][]	= $file_link;
				$todo['file_name'][]	= $file_name;
				$todo['hack_version'][]	= $hack_version;
				$todo['todo'][]			= $todo_text;
				$todo['df_id'][]		= $dl_files[$i]['id'];
			}
		}

		return $todo;
	}

	public function get_dl_overall_size()
	{
		global $db, $phpEx;

		$overall_size = 0;

		$dl_files = array();
		$dl_files = $this->all_files(0, '', '', '', 0, true, 'cat, file_size');
		$dl_cats = array();
		$dl_cats = $this->full_index(0, 0, 0, 1);

		if (sizeof($dl_cats))
		{
			for ($i = 0; $i < sizeof($dl_files); $i++)
			{
				$cat_id = $dl_files[$i]['cat'];
				if (in_array($cat_id, $dl_cats))
				{
					if ($dl_files[$i]['file_size'] >= 0)
					{
						$overall_size += $dl_files[$i]['file_size'];
					}
				}
			}
		}

		$sql = 'SELECT SUM(ver_file_size) AS total_size FROM ' . DL_VERSIONS_TABLE;
		$result = $db->sql_query($sql);
		$overall_size += $db->sql_fetchfield('total_size');
		$db->sql_freeresult($result);

		return $overall_size;
	}

	public function count_dl_approve()
	{
		global $db;

		if (!$this->user_logged_in)
		{
			return 0;
		}

		$access_cats = array();
		$access_cats = $this->full_index(0, 0, 0, 2);
		if ((!isset($access_cats[0]) || !$access_cats[0] || !sizeof($access_cats)) && !$this->user_admin)
		{
			return 0;
		}
			
		$sql_access_cats = ($this->user_admin) ? '' : ' AND ' . $db->sql_in_set('cat', $access_cats);

		$sql = 'SELECT COUNT(id) AS total FROM ' . DOWNLOADS_TABLE . "
			WHERE approve = 0
				$sql_access_cats";
		$result = $db->sql_query($sql);
		$total = $db->sql_fetchfield('total');
		$db->sql_freeresult($result);

		return $total;
	}

	public function count_comments_approve()
	{
		global $db;

		if (!$this->user_logged_in)
		{
			return 0;
		}

		$access_cats = array();
		$access_cats = $this->full_index(0, 0, 0, 2);
		if ((!isset($access_cats[0]) || !$access_cats[0] || !sizeof($access_cats)) && !$this->user_admin)
		{
			return 0;
		}

		$sql_access_cats = ($this->user_admin) ? '' : ' AND ' . $db->sql_in_set('cat_id', $access_cats);

		$sql = 'SELECT COUNT(dl_id) AS total FROM ' . DL_COMMENTS_TABLE . "
			WHERE approve = 0
				$sql_access_cats";
		$result = $db->sql_query($sql);
		$total = $db->sql_fetchfield('total');
		$db->sql_freeresult($result);

		return $total;
	}

	public function find_latest_dl($last_data, $parent, $main_cat, $last_dl_time)
	{
		foreach($last_data as $cat_id => $value)
		{
			if ($last_data[$cat_id]['parent'] == $parent || $main_cat == $cat_id)
			{
				$last_cat_time = (isset($last_data[$cat_id]['change_time'])) ? $last_data[$cat_id]['change_time'] : 0;
				$last_dl_times = (isset($last_dl_time['change_time'])) ? $last_dl_time['change_time'] : 0;

				if ($last_cat_time > $last_dl_times && ((isset($this->dl_index[$cat_id]['auth_view']) && $this->dl_index[$cat_id]['auth_view']) || (isset($this->dl_auth[$cat_id]['auth_view']) && $this->dl_auth[$cat_id]['auth_view']) || $this->user_admin))
				{
					$last_dl_time['change_time'] = $last_cat_time;
					$last_dl_time['cat_id'] = $cat_id;
				}

				$last_temp = $this->find_latest_dl($last_data, $cat_id, -1, $last_dl_time);
				$last_temp_time = (isset($last_temp['change_time'])) ? $last_temp['change_time'] : 0;
				$last_dl_times = (isset($last_dl_time['change_time'])) ? $last_dl_time['change_time'] : 0;

				if ($last_temp_time > $last_dl_times)
				{
					$last_dl_time['change_time'] = $last_temp['change_time'];
					$last_dl_time['cat_id'] = $last_temp['cat_id'];
				}
			}
		}

		return $last_dl_time;
	}

	public function get_sublevel($parent)
	{
		if (!is_array($this->dl_index) || !sizeof($this->dl_index))
		{
			return array();
		}

		global $phpEx, $phpbb_root_path;

		$sublevel = array();
		$i = 0;

		foreach($this->dl_index as $cat_id => $value)
		{
			if (((isset($this->dl_index[$cat_id]['auth_view']) && $this->dl_index[$cat_id]['auth_view']) || (isset($this->dl_auth[$cat_id]['auth_view']) && $this->dl_auth[$cat_id]['auth_view']) || $this->user_admin) && (isset($this->dl_index[$cat_id]['parent']) && $this->dl_index[$cat_id]['parent'] == $parent))
			{
				$sublevel['cat_name'][$i] = $this->dl_index[$cat_id]['cat_name'];
				$sublevel['cat_icon'][$i] = (isset($this->dl_index[$cat_id]['cat_icon']) && $this->dl_index[$cat_id]['cat_icon'] != '') ? generate_board_url() . '/' . $this->dl_index[$cat_id]['cat_icon'] : generate_board_url() . '/images/spacer.gif';
				$sublevel['total'][$i] = (isset($this->dl_index[$cat_id]['total'])) ? $this->dl_index[$cat_id]['total'] : 0;
				$sublevel['cat_id'][$i] = $this->dl_index[$cat_id]['id'];
				$sublevel['cat_path'][$i] = append_sid("{$phpbb_root_path}downloads.$phpEx?cat=$cat_id");
				$sublevel['cat_sub'][$i] = $cat_id;

				$sublevel['description'][$i] = (isset($this->dl_index[$cat_id]['description'])) ? $this->dl_index[$cat_id]['description'] : '';
				$sublevel['desc_uid'][$i] = (isset($this->dl_index[$cat_id]['desc_uid'])) ? $this->dl_index[$cat_id]['desc_uid'] : '';
				$sublevel['desc_bitfield'][$i] = (isset($this->dl_index[$cat_id]['desc_bitfield'])) ? $this->dl_index[$cat_id]['desc_bitfield'] : '';
				$sublevel['desc_flags'][$i] = (isset($this->dl_index[$cat_id]['desc_flags'])) ? $this->dl_index[$cat_id]['desc_flags'] : '';
				$i++;
			}
		}

		return $sublevel;
	}

	public function count_sublevel($parent)
	{
		if (!is_array($this->dl_index) || !sizeof($this->dl_index))
		{
			return 0;
		}

		$sublevel = 0;

		foreach($this->dl_index as $cat_id => $value)
		{
			if ((isset($this->dl_index[$cat_id]['auth_view']) || isset($this->dl_auth[$cat_id]['auth_view']) || $this->user_admin) && (isset($this->dl_index[$cat_id]['parent']) && $this->dl_index[$cat_id]['parent'] == $parent))
			{
				$sublevel++;
			}
		}

		return $sublevel;
	}

	public function get_sublevel_count($parent = 0)
	{
		if (!is_array($this->dl_index) || !sizeof($this->dl_index))
		{
			return 0;
		}

		$sublevel_count = 0;

		foreach($this->dl_index as $cat_id => $value)
		{
			if (isset($this->dl_index[$cat_id]['parent']) && $this->dl_index[$cat_id]['parent'] == $parent && (isset($this->dl_index[$cat_id]['auth_view']) || isset($this->dl_auth[$cat_id]['auth_view']) || $this->user_admin))
			{
				$sublevel_count += (isset($this->dl_index[$cat_id]['total'])) ? $this->dl_index[$cat_id]['total'] : 0;
				$sublevel_count += $this->get_sublevel_count($cat_id);
			}
		}

		return $sublevel_count;
	}

	public function dl_nav($parent, $disp_art, &$tmp_nav)
	{
		if (!is_array($this->dl_index) || !sizeof($this->dl_index))
		{
			return;
		}

		global $phpEx, $config, $path_dl_array, $phpbb_root_path;

		$cat_id = (isset($this->dl_index[$parent]['id'])) ? $this->dl_index[$parent]['id'] : 0;

		if ($cat_id == 0)
		{
			return;;
		}

		$temp_url = append_sid("{$phpbb_root_path}downloads.$phpEx?cat=$cat_id");
		$temp_title = $this->dl_index[$parent]['cat_name_nav'];

		if (((isset($this->dl_index[$cat_id]['auth_view']) && $this->dl_index[$cat_id]['auth_view']) || (isset($this->dl_auth[$cat_id]['auth_view']) && $this->dl_auth[$cat_id]['auth_view']) || $this->user_admin) && $disp_art == 'url')
		{
			$tmp_nav['link'][] = $temp_url;
			$tmp_nav['name'][] = $temp_title;
		}
		if (((isset($this->dl_index[$cat_id]['auth_view']) && $this->dl_index[$cat_id]['auth_view']) || (isset($this->dl_auth[$cat_id]['auth_view']) && $this->dl_auth[$cat_id]['auth_view']) || $this->user_admin) && $disp_art == 'links')
		{
			$path_dl_array[] = '&nbsp;&raquo;&nbsp;<a href="' . $temp_url . '">' . $temp_title . '</a>';
		}
		else
		{
			$path_dl_array[] = '&nbsp;<strong>&#8249;</strong>&nbsp;' . $temp_title;
		}

		if (isset($this->dl_index[$parent]['parent']) && $this->dl_index[$parent]['parent'] != 0)
		{
			$this->dl_nav($this->dl_index[$parent]['parent'], $disp_art, $tmp_nav);
		}

		$path_dl = '';

		if ($disp_art != 'url')
		{
			for ($i = sizeof($path_dl_array); $i >= 0 ; $i--)
			{
				$path_dl .= (isset($path_dl_array[$i])) ? $path_dl_array[$i] : '';
			}
		}

		return ($disp_art == 'url') ? $tmp_nav : $path_dl;
	}

	public function dl_dropdown($parent = 0, $level = 0, $select_cat = 0, $perm, $rem_cat = 0)
	{
		if (!is_array($this->dl_index) || !sizeof($this->dl_index))
		{
			return;
		}

		if (!isset($catlist))
		{
			$catlist = '';
		}

		foreach($this->dl_index as $cat_id => $value)
		{
			if (isset($this->dl_index[$cat_id]['parent']) && $this->dl_index[$cat_id]['parent'] == $parent)
			{
				if (isset($this->dl_index[$cat_id][$perm]) && $this->dl_index[$cat_id][$perm] || isset($this->dl_auth[$cat_id][$perm]) && $this->dl_auth[$cat_id][$perm] || $this->user_admin)
				{
					$cat_name = $this->dl_index[$cat_id]['cat_name'];

					$seperator = '';

					if ($this->dl_index[$cat_id]['parent'] != 0)
					{
						for($i = 0; $i < $level; $i++)
						{
							$seperator .= '&nbsp;&nbsp;|';
						}
						$seperator .= '___&nbsp;';
					}

					if ($perm == 'auth_up' || $rem_cat)
					{
						$status = ($select_cat == $cat_id) ? 'selected="selected"' : '';
					}
					else
					{
						$status = '';
					}

					if ($rem_cat != $cat_id)
					{
						$catlist .= '<option value="' . $cat_id . '" ' . $status . '>' . $seperator . $cat_name . '</option>';
					}
				}

				$level++;
				$catlist .= $this->dl_dropdown($cat_id, $level, $select_cat, $perm, $rem_cat);
				$level--;
			}
		}

		return $catlist;
	}

	public function rating_img($rating_points)
	{
		global $user;

		$rate_points = ceil($rating_points);
		$rate_image = '';

		for ($i = 0; $i < 10; $i++)
		{
			$j = $i + 1;
			$rate_image .= ($j <= $rate_points ) ? $user->img('dl_rate_yes') : $user->img('dl_rate_no');
		}

		return $rate_image;
	}

	public function dl_client()
	{
		$client = $this->user_client;

		if (strstr($client, "gecko"))
		{
			if (strstr($client, "safari"))
			{
				$browser_name = "Safari";
			}
			else if (strstr($client, "camino"))
			{
				$browser_name = "Camino";
			}
			else if (strstr($client, "epiphany"))
			{
				$browser_name = "Epiphany";
			}
			else if (strstr($client, "firefo"))
			{
				$browser_name = "Firefox";
			}
			else if (strstr($client, "konqueror"))
			{
				$browser_name = "Konqueror";
			}
			else if (strstr($client, "netscape"))
			{
				$browser_name = "Netscape";
			}
			else if (strstr($client, "seamonk"))
			{
				$browser_name = "SeaMonkey";
			}
			else if (strstr($client, "cback"))
			{
				$browser_name = "CBACK";
			}
			else
			{
				$browser_name = "Mozilla";
			}
		}
		else if (strstr($client, "opera"))
		{
			$browser_name = "Opera";
		}
		else if (strstr($client, "abolimba"))
		{
			$browser_name = "Abolimba";
		}
		else if (strstr($client, "msie"))
		{
			if (strstr($client, "maxthon"))
			{
				$browser_name = "Maxthon";
			}
			else
			{
				$browser_name = "Internet Explorer";
			}
		}
		else if (strstr($client,"voyager"))
		{
			$browser_name = "Voyager";        
		}
		else if (strstr($client,"lynx"))
		{
			$browser_name = "Lynx";
		}
		else
		{
			$browser_name = "n/a";
		}

		return $browser_name;
	}

	public function dl_size($input_value, $rnd = 2, $out_type = 'combine')
	{
		global $user;

		if ($input_value < 1024)
		{
			$output_value = $input_value;
			$output_desc = '&nbsp;&nbsp;'.$user->lang['DL_BYTES'];
		}
		else if ($input_value < 1048576)
		{
			$output_value = $input_value / 1024;
			$output_desc = '&nbsp;'.$user->lang['DL_KB'];
		}
		else if ($input_value < 1073741824)
		{
			$output_value = $input_value / 1048576;
			$output_desc = '&nbsp;'.$user->lang['DL_MB'];
		}
		else
		{
			$output_value = $input_value / 1073741824;
			$output_desc = '&nbsp;'.$user->lang['DL_GB'];
		}

		$output_value = round($output_value, $rnd);

		$data_out = ($out_type == 'combine') ? $output_value . $output_desc : array('size_out' => $output_value, 'range' => $output_desc);

		return $data_out;
	}

	public function dl_prune_stats($cat_id, $stats_prune)
	{
		global $db;

		$stats_prune--;

		if ($stats_prune)
		{
			$sql = 'SELECT time_stamp FROM ' . DL_STATS_TABLE . "
				WHERE cat_id = $cat_id
				ORDER BY time_stamp DESC";
			$result = $db->sql_query_limit($sql, 1, $stats_prune);
			$first_time_stamp = $db->sql_fetchfield('time_stamp');
			$db->sql_freeresult($result);

			if ($first_time_stamp)
			{
				$sql = 'DELETE FROM ' . DL_STATS_TABLE . "
					WHERE time_stamp <= $first_time_stamp
						AND cat_id = $cat_id";
				$db->sql_query($sql);
			}
		}

		return true;
	}

	public function stats_perm()
	{
		global $cat_id, $config;

		$stats_view = 0;

		switch($config['dl_stats_perm'])
		{
			case 0:
				$stats_view = TRUE;
				break;

			case 1:
				if ($this->user_logged_in)
				{
					$stats_view = TRUE;
				}
				break;

			case 2:
				if ($this->user_auth($cat_id, 'auth_mod'))
				{
					$stats_view = TRUE;
				}
				break;

			case 3:
				if ($this->user_admin)
				{
					$stats_view = TRUE;
				}
				break;

			default:
				$stats_view = 0;
		}

		return $stats_view;
	}

	public function cat_auth_comment_read($cat_id)
	{
		$auth_cread = 0;

		switch($this->dl_index[$cat_id]['auth_cread'])
		{
			case 0:
				$auth_cread = TRUE;
				break;

			case 1:
				if ($this->user_logged_in)
				{
					$auth_cread = TRUE;
				}
				break;

			case 2:
				if ($this->user_auth($cat_id, 'auth_mod'))
				{
					$auth_cread = TRUE;
				}
				break;

			case 3:
				if ($this->user_admin)
				{
					$auth_cread = TRUE;
				}
				break;

			default:
				$auth_cread = 0;
		}

		return $auth_cread;
	}

	public function cat_auth_comment_post($cat_id)
	{
		$auth_cpost = 0;

		switch($this->dl_index[$cat_id]['auth_cpost'])
		{
			case 0:
				$auth_cpost = TRUE;
				break;

			case 1:
				if ($this->user_logged_in)
				{
					$auth_cpost = TRUE;
				}
				break;

			case 2:
				if ($this->user_auth($cat_id, 'auth_mod'))
				{
					$auth_cpost = TRUE;
				}
				break;

			case 3:
				if ($this->user_admin)
				{
					$auth_cpost = TRUE;
				}
				break;

			default:
				$auth_cpost = 0;
		}

		return $auth_cpost;
	}

	public function read_exist_files()
	{
		$dl_files = $this->all_files(0, '', '', '', 0, 1, 'real_file');

		$exist_files = array();

		for ($i = 0; $i < sizeof($dl_files); $i++)
		{
			$exist_files[] = $dl_files[$i]['real_file'];
		}

		global $db;

		$sql = 'SELECT ver_real_file FROM ' . DL_VERSIONS_TABLE;
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$exist_files[] = $row['ver_real_file'];
		}

		$db->sql_freeresult($result);

		return $exist_files;
	}

	public function read_dl_dirs($download_dir, $path = '')
	{
		global $user, $cur, $unas_files, $phpbb_root_path;

		$folders = '';

		$dl_dir = substr($download_dir, 0, strlen($download_dir)-1);

		@$dir = opendir($download_dir . $path);

		while (false !== ($file=@readdir($dir)))
		{
			if ($file{0} != ".")
			{
				if(is_dir($download_dir . $path . '/' . $file))
				{
					$temp_dir = $dl_dir . $path . '/' . $file;
					$temp_dir = str_replace($phpbb_root_path, '', $temp_dir);
					$folders .= ('/'.$cur != $path . '/' . $file) ? '<option value="' . $dl_dir . $path . '/' . $file . '/">'.$user->lang['DL_MOVE'].' &raquo; ' . $temp_dir . '/</option>' : '';
					$folders .= $this->read_dl_dirs($download_dir, $path . '/' . $file);
				}
			}
		}

		closedir($dir);

		return $folders;
	}

	public function read_dl_files($download_dir, $path = '', $unas_files = array())
	{
		$files = '';

		$dl_dir = ($path) ? $download_dir : substr($download_dir, 0, strlen($download_dir)-1);

		@$dir = opendir($dl_dir . $path);

		while (false !== ($file=@readdir($dir)))
		{
			if ($file{0} != ".")
			{
				$files .= (in_array($file, $unas_files)) ? $path . '/' . $file . '|' : '';
				$files .= $this->read_dl_files($download_dir, $path . '/' . $file, $unas_files);
			}
		}

		@closedir($dir);

		return $files;
	}

	public function read_dl_sizes($download_dir)
	{
		$file_size = 0;
		
		if (@function_exists('scandir'))
		{
			$dirs = array_diff(scandir($download_dir), array(".", ".."));
			$dir_array = array();
			
			foreach($dirs as $d)
			{
				if (is_dir($download_dir . '/' . $d))
				{
					$file_size += $this->read_dl_sizes($download_dir . '/' . $d);
				}
				else
				{
					$file_size += sprintf("%u", @filesize($download_dir . '/' . $d));
				}
			}
		}
		else
		{
			$file_size = $this->_old_read_dl_sizes($download_dir);
		}
		
		return $file_size;
	}

	// Internal function for PHP 4 compliant
	private function _old_read_dl_sizes($download_dir, $path = '')
	{
		$file_size = 0;

		$dl_dir = substr($download_dir, 0, strlen($download_dir)-1);

		@$dir = opendir($dl_dir . $path);

		while (false !== ($file=@readdir($dir)))
		{
			if ($file{0} != ".")
			{
				$file_size += sprintf("%u", @filesize($dl_dir . $path . '/' . $file));
				$file_size += $this->_old_read_dl_sizes($download_dir, $path . '/' . $file);
			}
		}

		@closedir($dir);

		return $file_size;
	}

	// Added by suggestion from Neverbirth. Thx to him!!!
	public function readfile_chunked($filename, $retbytes = true)
	{
		$chunksize = 1048576;
		$buffer = '';
		$cnt =0;
		$handle = fopen($filename, 'rb');

		if ($handle === false)
		{
			return false;
		}

		while (!feof($handle))
		{
			$buffer = fread($handle, $chunksize);
			echo $buffer;
			if ($retbytes)
			{
				$cnt += strlen($buffer);
			}
	         ob_flush();
	         flush();
		}

		$status = fclose($handle);

		if ($retbytes && $status)
		{
			return $cnt;
		}

		return $status;
	}

	public function dl_status($df_id)
	{
		global $user, $phpEx, $phpbb_root_path, $config;

		$user->lang['DL_RED_EXPLAIN_ALT'] = sprintf($user->lang['DL_RED_EXPLAIN_ALT'], $config['dl_posts']);

		if (!isset($this->dl_file[$df_id]['cat']))
		{
			return array('status' => '', 'file_name' => '', 'auth_dl' => 0, 'file_detail' => '', 'status_detail' => $user->img('dl_red', $user->lang['DL_RED_EXPLAIN_ALT']));
		}

		$cat_id = $this->dl_file[$df_id]['cat'];
		$cat_auth = array();
		$cat_auth = $this->dl_cat_auth($cat_id);
		$index = array();
		$index = $this->full_index($cat_id);
		$status = '';
		$file_name = '';
		$auth_dl = 0;


		$file_name = '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$df_id").'">'.$this->dl_file[$df_id]['file_name'].'</a>';
		$file_detail = $this->dl_file[$df_id]['file_name'];

		if ($this->user_banned)
		{
			$status_detail = $user->img('dl_banlist', $user->lang['DL_BANNED']);
			$status = '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$df_id").'">'.$status_detail.'</a>';
			$auth_dl = 0;
			return array('status' => $status, 'file_name' => $file_detail, 'auth_dl' => $auth_dl, 'file_detail' => $file_detail, 'status_detail' => $status_detail);
		}

		if (!$config['dl_traffic_off'])
		{
			if ($this->user_logged_in && intval($this->user_traffic) > $this->dl_file[$df_id]['file_size'] && !$this->dl_file[$df_id]['extern'])
			{
				$status_detail = $user->img('dl_yellow', $user->lang['DL_YELLOW_EXPLAIN']);
				$status = '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$df_id").'">'.$status_detail.'</a>';
				$auth_dl = TRUE;
			}
			else
			{
				$status_detail = $user->img('dl_red', $user->lang['DL_RED_EXPLAIN_ALT']);
				$status = '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$df_id").'">'.$status_detail.'</a>';
				$auth_dl = 0;
			}
		}
		else
		{
			$status_detail = $user->img('dl_white', $user->lang['DL_WHITE_EXPLAIN']);
			$status = '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$df_id").'">'.$status_detail.'</a>';
			$auth_dl = TRUE;
		}

		if ($this->user_posts < $config['dl_posts'] && !$this->dl_file[$df_id]['extern'] && !$this->dl_file[$df_id]['free'])
		{
			$status_detail = $user->img('dl_red', $user->lang['DL_RED_EXPLAIN_ALT']);
			$status = '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$df_id").'">'.$status_detail.'</a>';
			$auth_dl = 0;
		}

		if ($this->dl_file[$df_id]['free'] == 1)
		{
			$status_detail = $user->img('dl_green', $user->lang['DL_GREEN_EXPLAIN']);
			$status = '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$df_id").'">'.$status_detail.'</a>';
			$auth_dl = TRUE;
		}

		if ($this->dl_file[$df_id]['free'] == 2)
		{
			if ($config['dl_icon_free_for_reg'] || (!$config['dl_icon_free_for_reg'] && $this->user_logged_in))
			{
				$status_detail = $user->img('dl_white', $user->lang['DL_WHITE_EXPLAIN']);
				$status = '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$df_id").'">'.$status_detail.'</a>';
			}

			if ($this->user_logged_in)
			{
				$auth_dl = TRUE;
			}
			else
			{
				$auth_dl = 0;
			}
		}

		if (!$cat_auth['auth_dl'] && !$index[$cat_id]['auth_dl'] && !$this->user_admin)
		{
			$status_detail = $user->img('dl_red', $user->lang['DL_RED_EXPLAIN_PERM']);
			$status = '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$df_id").'">'.$status_detail.'</a>';
			$auth_dl = 0;
		}

		if ($this->dl_file[$df_id]['file_traffic'] && $this->dl_file[$df_id]['klicks'] * $this->dl_file[$df_id]['file_size'] >= $this->dl_file[$df_id]['file_traffic'] && !$config['dl_traffic_off'])
		{
			$status_detail = $user->img('dl_blue', $user->lang['DL_BLUE_EXPLAIN_FILE']);
			$status = '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$df_id").'">'.$status_detail.'</a>';
			$auth_dl = 0;
		}

		if ((($config['dl_overall_traffic'] - $config['dl_remain_traffic'] <= 0) || ($index[$cat_id]['cat_traffic'] && ($index[$cat_id]['cat_traffic'] - $index[$cat_id]['cat_traffic_use'] <= 0))) && !$config['dl_traffic_off'])
		{
			$status_detail = $user->img('dl_blue', $user->lang['DL_BLUE_EXPLAIN']);
			$status = '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$df_id").'">'.$status_detail.'</a>';
			$auth_dl = 0;
		}

		if ($this->dl_file[$df_id]['extern'])
		{
			$status_detail = $user->img('dl_grey', $user->lang['DL_GREY_EXPLAIN']);
			$status = '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$df_id").'">'.$status_detail.'</a>';
			$file_name = '<a href="'.append_sid("{$phpbb_root_path}downloads.$phpEx?view=detail", "df_id=$df_id").'">'.$user->lang['DL_EXTERN'].'</a>';
			$auth_dl = TRUE;
		}

		return array('status' => $status, 'file_name' => $file_name, 'auth_dl' => $auth_dl, 'file_detail' => $file_detail, 'status_detail' => $status_detail);
	}

	public function dl_auth_users($cat_id, $perm)
	{
		if (!is_array($this->dl_index) || !sizeof($this->dl_index))
		{
			return 0;
		}

		global $db;

		$user_ids = 0;

		if ($this->dl_index[$cat_id][$perm])
		{
			$sql = 'SELECT user_id FROM ' . USERS_TABLE . '
				WHERE user_id <> ' . ANONYMOUS . '
					AND user_id <> ' . $this->user_id;
			$result = $db->sql_query($sql);
		}
		else
		{
			$sql = 'SELECT group_id FROM ' . DL_AUTH_TABLE . "
				WHERE cat_id = $cat_id
					AND $perm = " . true . '
				GROUP BY group_id';
			$result = $db->sql_query($sql);
			$total_group_perms = $db->sql_affectedrows($result);

			if (!$total_group_perms)
			{
				$db->sql_freeresult($result);
				return 0;
			}

			$group_ids = array();

			while ($row = $db->sql_fetchrow($result))
			{
				$group_ids[] = $row['group_id'];
			}

			$db->sql_freeresult($result);

			if (!sizeof($group_ids))
			{
				return 0;
			}

			$sql = 'SELECT user_id FROM ' . USER_GROUP_TABLE . '
				WHERE user_id <> ' . $this->user_id . '
					AND ' . $db->sql_in_set('group_id', $group_ids) . '
					AND user_pending <> ' . true;
			$result = $db->sql_query($sql);

		}

		while ($row = $db->sql_fetchrow($result))
		{
			$user_ids .= ', ' . $row['user_id'];
		}
		$db->sql_freeresult($result);

		return $user_ids;
	}

	public function bug_tracker()
	{
		if (!is_array($this->dl_index) || !sizeof($this->dl_index))
		{
			return false;
		}

		$bug_tracker = false;

		foreach($this->dl_index as $cat_id => $value)
		{
			if (isset($this->dl_index[$cat_id]['bug_tracker']) && $this->dl_index[$cat_id]['bug_tracker'])
			{
				$bug_tracker = true;
				break;
			}
		}

		return $bug_tracker;
	}

	public function gen_dl_topic($dl_id)
	{
		global $db, $user, $phpbb_root_path, $phpEx, $config, $auth;

		if (!$config['dl_enable_dl_topic'])
		{
			return;
		}

		$sql = 'SELECT id, description, dl_topic, long_desc, file_name, extern, file_size, cat, long_desc_uid, long_desc_flags, desc_uid, desc_flags 
			FROM ' . DOWNLOADS_TABLE . "
			WHERE id = $dl_id";
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);		

		if ($row['dl_topic'])
		{
			return;
		}

		$description = $row['description'];
		$long_desc = $row['long_desc'];
		$file_name = $row['file_name'];
		$file_size = $row['file_size'];
		$extern = $row['extern'];

		$long_desc_uid			= $row['long_desc_uid'];
		$long_desc_flags		= $row['long_desc_flags'];
		$desc_uid				= $row['desc_uid'];
		$desc_flags				= $row['desc_flags'];
		
		$text_ary		= generate_text_for_edit($long_desc, $long_desc_uid, $long_desc_flags);
		$long_desc		= $text_ary['text'];
		$text_ary		= generate_text_for_edit($description, $desc_uid, $desc_flags);
		$description	= $text_ary['text'];
		
		$cat_id		= $row['cat'];
		$dl_title	= '"' . $description . '"';

		$topic_text_add = "\n\n[b]" . $user->lang['DL_FILE_DESCRIPTION'] . ":[/b]\n" . $long_desc;
		$topic_text_add .= "\n\n[b]" . (($extern) ? $user->lang['DL_EXTERN'] : $user->lang['DL_FILE_NAME']) . ':[/b] ' . $file_name;
		$topic_text_add .= (($extern) ? '' : "\n\n[b]" . $user->lang['DL_FILE_SIZE']) . ':[/b] ' . $this->dl_size($file_size);

		if ($config['dl_topic_forum'] == -1)
		{
			$topic_forum		= $this->dl_index[$cat_id]['dl_topic_forum'];
			$topic_text			= $this->dl_index[$cat_id]['dl_topic_text'];

			if ($this->dl_index[$cat_id]['topic_more_details'] == 1)
			{
				$topic_text .= $topic_text_add;
			}
			else if ($this->dl_index[$cat_id]['topic_more_details'] == 2)
			{
				$topic_text = $topic_text_add . "\n\n" . $topic_text;
			}
		}
		else
		{
			$topic_forum		= $config['dl_topic_forum'];
			$topic_text			= $config['dl_topic_text'];

			if ($config['dl_topic_more_details'] == 1)
			{
				$topic_text .= $topic_text_add;
			}
			else if ($config['dl_topic_more_details'] == 2)
			{
				$topic_text = $topic_text_add . "\n\n" . $topic_text;
			}
		}

		$poster_id	= $user->data['user_id'];
		$username	= $user->data['username'];

		if (!$config['dl_diff_topic_user'] || ($config['dl_diff_topic_user'] == 2 && !$this->dl_index[$cat_id]['diff_topic_user']))
		{
			$poster_id	= $user->data['user_id'];
			$username	= $user->data['username'];
		}
		else if ($config['dl_diff_topic_user'] == 1)
		{
			$poster_id = $config['dl_topic_user'];

			$sql = 'SELECT username FROM ' . USERS_TABLE . '
				WHERE user_id = ' . $poster_id;
			$result = $db->sql_query($sql);
			$username = $db->sql_fetchfield('username');
			$db->sql_freeresult($result);
		}
		else if ($config['dl_diff_topic_user'] == 2 && $this->dl_index[$cat_id]['diff_topic_user'])
		{
			$poster_id = $this->dl_index[$cat_id]['topic_user'];

			$sql = 'SELECT username FROM ' . USERS_TABLE . '
				WHERE user_id = ' . $poster_id;
			$result = $db->sql_query($sql);
			$username = $db->sql_fetchfield('username');
			$db->sql_freeresult($result);
		}

		if (!$topic_forum)
		{
			return;
		}

		$topic_title = sprintf($user->lang['DL_TOPIC_SUBJECT'], $dl_title);
		$topic_text .= "\n\n" . '<!-- l --><a class="postlink-local" href="' . generate_board_url() . '/downloads.' . $phpEx . '?view=detail&amp;df_id=' . $dl_id . '">' . $dl_title . '</a><!-- l -->';

		$poll			= array();
		$update_message	= false;
	
		$sql = 'SELECT forum_parents, forum_name FROM ' . FORUMS_TABLE . "
			WHERE forum_id = $topic_forum";
		$result = $db->sql_query($sql);
		$post_data = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		$message = $topic_text;

		$bbcode_status	= true;
		$smilies_status	= true;
		$img_status		= true;
		$url_status		= true;
		$flash_status	= ($auth->acl_get('f_flash', $topic_forum) && $config['allow_post_flash']) ? true : false;
		$quote_status	= true;
		$enable_sig		= false;

		if (!class_exists('parse_message'))
		{
			include($phpbb_root_path . 'includes/message_parser.' . $phpEx);
		}
		$message_parser = new parse_message();
		$message_parser->message = $topic_text;
		$message_md5 = md5($message_parser->message);
		$message_parser->parse($bbcode_status, $url_status, $smilies_status, $img_status, $flash_status, $quote_status, $url_status);
	
		$data = array(
			'topic_title'			=> $topic_title,
			'topic_first_post_id'	=> 0,
			'topic_last_post_id'	=> 0,
			'topic_time_limit'		=> 0,
			'topic_attachment'		=> 0,
			'post_id'				=> 0,
			'topic_id'				=> 0,
			'forum_id'				=> $topic_forum,
			'icon_id'				=> 0,
			'poster_id'				=> $poster_id,
			'enable_sig'			=> $enable_sig,
			'enable_bbcode'			=> $bbcode_status,
			'enable_smilies'		=> $smilies_status,
			'enable_urls'			=> $url_status,
			'enable_indexing'		=> 0,
			'message_md5'			=> $message_md5,
			'post_time'				=> time(),
			'post_checksum'			=> '',
			'post_edit_reason'		=> '',
			'post_edit_user'		=> 0,
			'forum_parents'			=> $post_data['forum_parents'],
			'forum_name'			=> $post_data['forum_name'],
			'notify'				=> false,
			'notify_set'			=> 0,
			'poster_ip'				=> $user->ip,
			'post_edit_locked'		=> 0,
			'bbcode_bitfield'		=> $message_parser->bbcode_bitfield,
			'bbcode_uid'			=> $message_parser->bbcode_uid,
			'message'				=> $message_parser->message,
			'dl_topic_user'			=> ($poster_id <> $user->data['user_id']) ? true : false,
		);
	
		if (!function_exists('submit_post'))
		{
			include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
		}
		submit_post('post', $topic_title, $username, POST_NORMAL, $poll, $data, $update_message);

		$dl_topic_id = (int) $data['topic_id'];

		$sql = 'UPDATE ' . DOWNLOADS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', array(
			'dl_topic' => $dl_topic_id)) . " WHERE id = $dl_id";
		$db->sql_query($sql);
		
		return;	
	}

	public function delete_topic($topic_ids)
	{
		if (!$topic_ids)
		{
			return;
		}

		global $phpbb_root_path, $phpEx;

		if (!function_exists('recalc_nested_sets'))
		{
			include($phpbb_root_path . 'includes/functions_admin.' . $phpEx);
		}

		$return = delete_topics('topic_id', $topic_ids);
	}

	public function update_topic($topic_id, $dl_id)
	{
		if (!$topic_id || !$dl_id)
		{
			return;
		}

		global $db, $user, $config, $phpEx, $phpbb_root_path, $auth;

		$sql = 'SELECT id, description, dl_topic, long_desc, file_name, extern, file_size, cat, long_desc_uid, long_desc_flags, desc_uid, desc_flags 
			FROM ' . DOWNLOADS_TABLE . "
			WHERE id = $dl_id";
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);		

		$description = $row['description'];
		$long_desc = $row['long_desc'];
		$file_name = $row['file_name'];
		$file_size = $row['file_size'];
		$extern = $row['extern'];

		$long_desc_uid			= $row['long_desc_uid'];
		$long_desc_flags		= $row['long_desc_flags'];
		$desc_uid				= $row['desc_uid'];
		$desc_flags				= $row['desc_flags'];
		
		$text_ary		= generate_text_for_edit($long_desc, $long_desc_uid, $long_desc_flags);
		$long_desc		= $text_ary['text'];
		$text_ary		= generate_text_for_edit($description, $desc_uid, $desc_flags);
		$description	= $text_ary['text'];
		
		$cat_id		= $row['cat'];
		$dl_title	= '"' . $description . '"';

		$topic_text_add = "\n\n[b]" . $user->lang['DL_FILE_DESCRIPTION'] . ":[/b]\n" . $long_desc;
		$topic_text_add .= "\n\n[b]" . (($extern) ? $user->lang['DL_EXTERN'] : $user->lang['DL_FILE_NAME']) . ':[/b] ' . $file_name;
		$topic_text_add .= (($extern) ? '' : "\n\n[b]" . $user->lang['DL_FILE_SIZE']) . ':[/b] ' . $this->dl_size($file_size);

		if ($config['dl_topic_forum'] == -1)
		{
			$topic_forum		= $this->dl_index[$cat_id]['dl_topic_forum'];
			$topic_text			= $this->dl_index[$cat_id]['dl_topic_text'];

			if ($this->dl_index[$cat_id]['topic_more_details'] == 1)
			{
				$topic_text .= $topic_text_add;
			}
			else if ($this->dl_index[$cat_id]['topic_more_details'] == 2)
			{
				$topic_text = $topic_text_add . "\n\n" . $topic_text;
			}
		}
		else
		{
			$topic_forum		= $config['dl_topic_forum'];
			$topic_text			= $config['dl_topic_text'];

			if ($config['dl_topic_more_details'] == 1)
			{
				$topic_text .= $topic_text_add;
			}
			else if ($config['dl_topic_more_details'] == 2)
			{
				$topic_text = $topic_text_add . "\n\n" . $topic_text;
			}
		}

		$poster_id	= $user->data['user_id'];
		$username	= $user->data['username'];

		if (!$config['dl_diff_topic_user'] || ($config['dl_diff_topic_user'] == 2 && !$this->dl_index[$cat_id]['diff_topic_user']))
		{
			$poster_id	= $user->data['user_id'];
			$username	= $user->data['username'];
		}
		else if ($config['dl_diff_topic_user'] == 1)
		{
			$poster_id = $config['dl_topic_user'];

			$sql = 'SELECT username FROM ' . USERS_TABLE . '
				WHERE user_id = ' . $poster_id;
			$result = $db->sql_query($sql);
			$username = $db->sql_fetchfield('username');
			$db->sql_freeresult($result);
		}
		else if ($config['dl_diff_topic_user'] == 2 && $this->dl_index[$cat_id]['diff_topic_user'])
		{
			$poster_id = $this->dl_index[$cat_id]['topic_user'];

			$sql = 'SELECT username FROM ' . USERS_TABLE . '
				WHERE user_id = ' . $poster_id;
			$result = $db->sql_query($sql);
			$username = $db->sql_fetchfield('username');
			$db->sql_freeresult($result);
		}

		if (!$topic_forum)
		{
			return;
		}

		$topic_title = sprintf($user->lang['DL_TOPIC_SUBJECT'], $dl_title);
		$topic_text .= "\n\n" . '<!-- l --><a class="postlink-local" href="' . generate_board_url() . '/downloads.' . $phpEx . '?view=detail&amp;df_id=' . $dl_id . '">' . $dl_title . '</a><!-- l -->';

		$poll			= array();
		$update_message	= true;
	
		$sql = 'SELECT forum_parents, forum_name FROM ' . FORUMS_TABLE . "
			WHERE forum_id = $topic_forum";
		$result = $db->sql_query($sql);
		$post_data = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		$sql = 'SELECT topic_first_post_id, topic_replies, topic_replies_real FROM ' . TOPICS_TABLE . "
			WHERE topic_id = $topic_id";
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$post_data['post_id'] = $post_id = $row['topic_first_post_id'];
		$post_data['topic_replies_real'] = $row['topic_replies_real'];
		$post_data['topic_replies'] = $row['topic_replies'];
		$db->sql_freeresult($result);

		$sql = 'SELECT bbcode_uid FROM ' . POSTS_TABLE . "
			WHERE post_id = $post_id";
		$result = $db->sql_query($sql);
		$post_data['bbcode_uid'] = $db->sql_fetchfield('bbcode_uid');
		$db->sql_freeresult($result);

		$message = $topic_text;
		$post_data['topic_id'] = $topic_id;

		$bbcode_status	= true;
		$smilies_status	= true;
		$img_status		= true;
		$url_status		= true;
		$flash_status	= ($auth->acl_get('f_flash', $topic_forum) && $config['allow_post_flash']) ? true : false;
		$quote_status	= true;
		$enable_sig		= false;

		if (!class_exists('parse_message'))
		{
			include($phpbb_root_path . 'includes/message_parser.' . $phpEx);
		}
		$message_parser = new parse_message();
		$message_parser->message = $topic_text;
		$message_parser->bbcode_uid = $post_data['bbcode_uid'];
		$message_md5 = md5($message_parser->message);
		$message_parser->parse($bbcode_status, $url_status, $smilies_status, $img_status, $flash_status, $quote_status, $url_status);

		$data = array(
			'topic_title'			=> $topic_title,
			'topic_first_post_id'	=> 0,
			'topic_last_post_id'	=> 0,
			'topic_time_limit'		=> 0,
			'topic_replies_real'	=> $post_data['topic_replies_real'],
			'topic_replies'			=> $post_data['topic_replies'],
			'topic_attachment'		=> 0,
			'post_id'				=> $post_id,
			'topic_id'				=> $topic_id,
			'forum_id'				=> $topic_forum,
			'icon_id'				=> 0,
			'poster_id'				=> $poster_id,
			'enable_sig'			=> $enable_sig,
			'enable_bbcode'			=> $bbcode_status,
			'enable_smilies'		=> $smilies_status,
			'enable_urls'			=> $url_status,
			'enable_indexing'		=> 0,
			'message_md5'			=> $message_md5,
			'post_time'				=> time(),
			'post_checksum'			=> '',
			'post_edit_reason'		=> '',
			'post_edit_user'		=> 0,
			'forum_parents'			=> $post_data['forum_parents'],
			'forum_name'			=> $post_data['forum_name'],
			'notify'				=> false,
			'notify_set'			=> 0,
			'poster_ip'				=> $user->ip,
			'post_edit_locked'		=> 0,
			'bbcode_bitfield'		=> $message_parser->bbcode_bitfield,
			'bbcode_uid'			=> $message_parser->bbcode_uid,
			'message'				=> $message_parser->message,
			'dl_topic_user'			=> ($poster_id <> $user->data['user_id']) ? true : false,
		);

		if (!function_exists('submit_post'))
		{
			include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
		}
		submit_post('edit', $topic_title, $username, POST_NORMAL, $poll, $data, $update_message);
	}

	public function dl_cat_select($parent = 0, $level = 0, $select_cat = array())
	{
		if (!isset($catlist))
		{
			$catlist = '';
		}

		foreach($this->dl_index as $cat_id => $value)
		{
			if ($this->dl_index[$cat_id]['parent'] == $parent)
			{
				$cat_name = $this->dl_index[$cat_id]['cat_name'];

				$seperator = '';

				if ($this->dl_index[$cat_id]['parent'] != 0)
				{
					for($i = 0; $i < $level; $i++)
					{
						$seperator .= '&nbsp;&nbsp;|';
					}
					$seperator .= '___&nbsp;';
				}

				$status = (in_array($cat_id, $select_cat)) ? 'selected="selected"' : '';

				$catlist .= '<option value="' . $cat_id . '" ' . $status . '>' . $seperator . $cat_name . '</option>';

				$level++;
				$catlist .= $this->dl_cat_select($cat_id, $level, $select_cat);
				$level--;
			}
		}

		return $catlist;
	}

	public function dl_mod_version()
	{
		global $user, $template, $config;
		global $phpbb_root_path, $phpEx;
	
		if (!function_exists('get_remote_file'))
		{
			global $phpbb_root_path;
			if (!function_exists('recalc_nested_sets'))
			{
				include($phpbb_root_path . 'includes/functions_admin.' . $phpEx);
			}
		}
	
		// load version files
		$class_functions = array();
		if (!class_exists('download_mod_version'))
		{
			include($phpbb_root_path . 'adm/mods/download_mod_version.' . $phpEx);
		}
		$class_name = 'download_mod_version';
	
		$var = call_user_func(array($class_name, 'version'));
	
		// Get current and latest version
		$errstr = '';
		$errno = 0;
	
		$mod_version = '0.0.0';

		$mod_version = $user->lang['DL_NO_INFO'];

		$data = array(
			'title'			=> $var['title'],
			'description'	=> $user->lang['DL_NO_INFO'],
			'download'		=> $user->lang['DL_NO_INFO'],
			'announcement'	=> $user->lang['DL_NO_INFO'],
		);

		$file = get_remote_file($var['file'][0], '/' . $var['file'][1], $var['file'][2], $errstr, $errno);
	
		if ($file)
		{
			if (version_compare(PHP_VERSION, '5.0.0', '<'))
			{
				$row = array();
				$data_array = $this->_dl_setup_array($file);
	
				$row = $data_array['mods'][$var['tag']];
				$mod_version = $row['mod_version'];
				$mod_version = $mod_version['major'] . '.' . $mod_version['minor'] . '.' . $mod_version['revision'] . $mod_version['release'];
	
				$data = array(
					'title'			=> $row['title'],
					'description'	=> $row['description'],
					'download'		=> $row['download'],
					'announcement'	=> $row['announcement'],
				);
			}
			else
			{
				// let's not stop the page from loading if a mod author messed up their mod check file
				// also take care of one of the easiest ways to mess up an xml file: "&"
				$mod = @simplexml_load_string(str_replace('&', '&amp;', $file));
				if (isset($mod->$var['tag']))
				{
					$row = $mod->$var['tag'];
					$mod_version = $row->mod_version->major . '.' . $row->mod_version->minor . '.' . $row->mod_version->revision . $row->mod_version->release;
	
					$data = array(
						'title'			=> $row->title,
						'description'	=> $row->description,
						'download'		=> $row->download,
						'announcement'	=> $row->announcement,
					);
				}
			}
		}
	
		// remove spaces from the version in the mod file stored locally
		$version = $config['dl_mod_version'];
		$version_compare = (version_compare($version, $mod_version, '<')) ? false : true;
	
		$template->assign_block_vars('mods', array(
			'ANNOUNCEMENT'		=> $data['announcement'],
			'AUTHOR'			=> $var['author'],
			'CURRENT_VERSION'	=> $version,
			'DESCRIPTION'		=> $data['description'],
			'DOWNLOAD'			=> $data['download'],
			'LATEST_VERSION'	=> $mod_version,
			'TITLE'				=> $data['title'],
	
			'UP_TO_DATE'		=> sprintf((!$version_compare) ? $user->lang['DL_NOT_UP_TO_DATE'] : $user->lang['DL_UP_TO_DATE'], $data['title']),
	
			'S_UP_TO_DATE'		=> $version_compare,
	
			'U_AUTHOR'			=> 'http://www.phpbb.com/community/memberlist.php?mode=viewprofile&un=' . $var['author'],
		));
	}

	/**
	 * Internal function for dl_mod_version();
	 * Not for public uses!
	 */	 	 	
	private function _dl_setup_array($xml)
	{
		// Fire up the built-in XML parser
		$values = $index = array();
		$parser = xml_parser_create();
		xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);

		// this takes care of one possible xml error
		$xml = str_replace('&', '&amp;', $xml);

		// Set tag names and values
		xml_parse_into_struct($parser, $xml, $values, $index);

		// Close down XML parser
		xml_parser_free($parser);

		$ary = array();

		foreach ($values as $value)
		{
			switch (trim($value['level']))
			{
				case 1:
					if ($value['type'] == 'open')
					{
						$one = $value['tag'];
					}
					else if ($value['type'] == 'complete')
					{
						$ary[$value['tag']] = $value['value'];
					}
				break;

				case 2:
					if ($value['type'] == 'open')
					{
						$two = $value['tag'];
					}
					else if ($value['type'] == 'complete')
					{
						$ary[$one][$value['tag']] = $value['value'];
					}
				break;

				case 3:
					if ($value['type'] == 'open')
					{
						$three = $value['tag'];
					}
					else if ($value['type'] == 'complete')
					{
						$ary[$one][$two][$value['tag']] = $value['value'];
					}
				break;

				case 4:
					if ($value['type'] == 'complete')
					{
						$ary[$one][$two][$three][$value['tag']] = isset($value['value']) ? $value['value'] : '';
					}
				break;
			}
		}
		return $ary;
	}
}

/**
* Initiate the Download MOD class
*/ 
$dl_mod = new dlmod();

?>