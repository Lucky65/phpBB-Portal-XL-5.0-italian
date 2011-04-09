<?php

/** 
*
* @mod package		Download Mod 6
* @file				class_dl_cache.php 2 2011/01/03 OXPUS
* @copyright		(c) 2009 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
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
* Class for grabbing/handling cached entries on Download MOD
*/
class dlmod_cache extends acm
{
	/**
	 * Download MOD Category Cache
	*/	 	
	function obtain_dl_cats()
	{
		global $db, $user;

		if (($dl_index = $this->get('_dl_cats')) === false)
		{
			$sql = "SELECT * FROM " . DL_CAT_TABLE . '
				ORDER BY parent, sort';
			$result = $db->sql_query($sql);
	
			while ($row = $db->sql_fetchrow($result))
			{
				$dl_index[$row['id']] = $row;
	
				$dl_index[$row['id']]['auth_view_real'] = $dl_index[$row['id']]['auth_view'];
				$dl_index[$row['id']]['auth_dl_real'] = $dl_index[$row['id']]['auth_dl'];
				$dl_index[$row['id']]['auth_up_real'] = $dl_index[$row['id']]['auth_up'];
				$dl_index[$row['id']]['auth_mod_real'] = $dl_index[$row['id']]['auth_mod'];
				$dl_index[$row['id']]['cat_name_nav'] = $dl_index[$row['id']]['cat_name'];
			}
	
			$db->sql_freeresult($result);

			$this->put('_dl_cats', $dl_index);
		}

		$sql = "SELECT cat_id, cat_traffic_use FROM " . DL_CAT_TRAF_TABLE;
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$dl_index[$row['cat_id']]['cat_traffic_use'] = $row['cat_traffic_use'];
		}

		$db->sql_freeresult($result);

		return $dl_index;
	}

	/**
	 * Download MOD Configuration Cache
	*/	 	
	function obtain_dl_config()
	{
		global $db;

		$sql = 'SELECT * FROM ' . DL_REM_TRAF_TABLE;
		$result = $db->sql_query($sql);

		while ( $row = $db->sql_fetchrow($result) )
		{
			$dl_config[$row['config_name']] = $row['config_value'];
		}
		$db->sql_freeresult($result);

		return $dl_config;
	}

	/**
	 * Download MOD Blacklist Cache
	*/	 	
	function obtain_dl_blacklist()
	{
		global $db;

		if (($dl_black = $this->get('_dl_black')) === false)
		{
			$sql = 'SELECT extention FROM ' . DL_EXT_BLACKLIST . '
				ORDER BY extention';
			$result = $db->sql_query($sql);

			while ( $row = $db->sql_fetchrow($result) )
			{
				$dl_black[] = $row['extention'];
			}
			$db->sql_freeresult($result);

			$this->put('_dl_black', $dl_black);
		}

		return $dl_black;
	}

	/**
	 * Download MOD Cat Filecount Cache
	*/	 	
	function obtain_dl_cat_counts()
	{
		global $db;

		if (($dl_cat_counts = $this->get('_dl_cat_counts')) === false)
		{
			$sql = 'SELECT COUNT(id) AS total, cat FROM ' . DOWNLOADS_TABLE . '
				GROUP BY cat';
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				$dl_cat_counts[$row['cat']] = $row['total'];
			}
			$db->sql_freeresult($result);

			$this->put('_dl_cat_counts', $dl_cat_counts);
		}

		return $dl_cat_counts;
	}

	/**
	 * Download MOD Files Cache
	*/	 	
	function obtain_dl_files($dl_new_time, $dl_edit_time)
	{
		$dl_file['new'] = array();
		$dl_file['new_sum'] = array();
		$dl_file['edit'] = array();
		$dl_file['edit_sum'] = array();
		$dl_file['id'] = array();

		if (!$dl_new_time && !$dl_edit_time)
		{
			return $dl_file;
		}

		$cache_release_time = max($dl_new_time, $dl_edit_time) * 86400;

		if (($dl_file = $this->get('_dl_file_preset')) === false)
		{
			global $db;

			$cur_time = time();
			$sql_time_preset = '';
	
			if ($dl_new_time && $dl_edit_time)
			{
				$sql_time_preset = " AND ((add_time = change_time AND (($cur_time - change_time) / 86400 <= $dl_new_time)) OR ";
				$sql_time_preset .= " (add_time <> change_time AND (($cur_time - change_time) / 86400 <= $dl_edit_time))) ";
			}
	
			if ($dl_new_time && !$dl_edit_time)
			{
				$sql_time_preset = " AND (add_time = change_time AND (($cur_time - change_time) / 86400 <= $dl_new_time)) ";
			}
	
			if (!$dl_new_time && $dl_edit_time)
			{
				$sql_time_preset = " AND (add_time <> change_time AND (($cur_time - change_time) / 86400 <= $dl_edit_time)) ";
			}
	
			$sql = 'SELECT id, cat, add_time, change_time FROM ' . DOWNLOADS_TABLE . '
					WHERE approve = ' . true . "
						$sql_time_preset";
			$result = $db->sql_query($sql);
	
			while ($row = $db->sql_fetchrow($result))
			{
				$dl_id = $row['id'];
				$cat_id = $row['cat'];
				$change_time = $row['change_time'];
				$add_time = $row['add_time'];
	
				if (!isset($dl_file['new'][$cat_id]))
				{
					$dl_file['new'][$cat_id][$dl_id] = 0;
				}
				if (!isset($dl_file['new_sum'][$cat_id]))
				{
					$dl_file['new_sum'][$cat_id] = 0;
				}
				if (!isset($dl_file['edit'][$cat_id]))
				{
					$dl_file['edit'][$cat_id][$dl_id] = 0;
				}
				if (!isset($dl_file['edit_sum'][$cat_id]))
				{
					$dl_file['edit_sum'][$cat_id] = 0;
				}

				$count_new = ($change_time == $add_time && ((time() - $change_time)) / 86400 <= $dl_new_time && $dl_new_time > 0) ? 1 : 0;
				$count_edit = ($change_time != $add_time && ((time() - $change_time) / 86400) <= $dl_edit_time && $dl_edit_time > 0) ? 1 : 0;
	
				$dl_file['new'][$cat_id][$dl_id] = $count_new;
				$dl_file['new_sum'][$cat_id] += $count_new;
				$dl_file['edit'][$cat_id][$dl_id] = $count_edit;
				$dl_file['edit_sum'][$cat_id] += $count_edit;
			}

			$db->sql_freeresult($result);

			$this->put('_dl_file_preset', $dl_file, $cache_release_time);
		}

		return $dl_file;
	}

	/**
	 * Download MOD Auth Cache
	*/	 	
	function obtain_dl_auth()
	{
		global $db;

		$auth_cat = $group_perm_ids = $auth_perm = array();

		if (($dl_auth_perm = $this->get('_dl_auth')) === false)
		{
			$sql = 'SELECT * FROM ' . DL_AUTH_TABLE;
			$result = $db->sql_query($sql);
	
			$total_perms = $db->sql_affectedrows($result);
	
			if ($total_perms)
			{
				while ($row = $db->sql_fetchrow($result))
				{
					$cat_id = $row['cat_id'];
					$group_id = $row['group_id'];
	
					$auth_cat[] = $cat_id;
					$group_perm_ids[] = $group_id;
	
					$auth_perm[$cat_id][$group_id]['auth_view'] = $row['auth_view'];
					$auth_perm[$cat_id][$group_id]['auth_dl'] = $row['auth_dl'];
					$auth_perm[$cat_id][$group_id]['auth_up'] = $row['auth_up'];
					$auth_perm[$cat_id][$group_id]['auth_mod'] = $row['auth_mod'];
				}
				$db->sql_freeresult($result);
	
				if ($total_perms > 1)
				{
					$auth_cat = array_unique($auth_cat);
					sort($auth_cat);
				}
			}

			$dl_auth_perm['auth_cat'] = $auth_cat;
			$dl_auth_perm['group_perm_ids'] = $group_perm_ids;
			$dl_auth_perm['auth_perm'] = $auth_perm;

			$this->put('_dl_auth', $dl_auth_perm);
		}

		return $dl_auth_perm;
	}
}

/**
* Initiate the Download MOD cache
*/ 
$dl_cache = new dlmod_cache();

?>