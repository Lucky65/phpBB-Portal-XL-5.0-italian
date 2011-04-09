<?php
/**
*
* @package install
* @version $Id: install_update.php 802 2009-07-01 16:22:57Z JRSweets $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_INSTALL') || !defined('IN_PHPBB'))
{
	// Someone has tried to access the file direct. This is not a good idea, so exit
	exit;
}

if (!empty($setmodules))
{
	if (!$this->installed_version || $this->installed_version == $mod_config['mod_version'])
	{
		return;
	}

	$module[] = array(
		'module_type'		=> 'install',
		'module_title'		=> 'UPDATE',
		'module_filename'	=> substr(basename(__FILE__), 0, -strlen($phpEx)-1),
		'module_order'		=> 20,
		'module_subs'		=> '',
		'module_stages'		=> array('INTRO', 'REQUIREMENTS', 'UPDATE'),
		'module_reqs'		=> ''
	);
}

/**
* Installation
* @package install
*/
class install_update extends module
{
	function install_update(&$p_master)
	{
		$this->p_master = &$p_master;
	}

	function main($mode, $sub)
	{
		global $user, $template, $phpbb_root_path;

		switch ($sub)
		{
			case 'intro':
				$this->page_title = $user->lang['SUB_INTRO'];

				$template->assign_vars(array(
					'TITLE'			=> $user->lang['UPDATE_INTRO'],
					'BODY'			=> $user->lang['UPDATE_INTRO_BODY'],
					'L_SUBMIT'		=> $user->lang['NEXT_STEP'],
					'U_ACTION'		=> $this->p_master->module_url . "?mode=$mode&amp;sub=requirements",
				));

			break;

			case 'requirements':
				$this->requirements($mode, $sub);

			break;

			case 'update':
				$this->update($mode, $sub);

			break;
		}

		$this->tpl_name = 'install_install';
	}

	/**
	* Checks that the server we are installing on meets the requirements for running phpBB
	*/
	function requirements($mode, $sub)
	{
		global $user, $config, $mod_config, $template, $phpbb_root_path, $phpEx;

		$this->page_title = $user->lang['STAGE_REQUIREMENTS'];

		$template->assign_vars(array(
			'TITLE'		=> $user->lang['REQUIREMENTS_TITLE'],
			'BODY'		=> $user->lang['REQUIREMENTS_EXPLAIN'],
		));

		$passed = array('phpbb' => false, 'files' => false,);

		// Test for basic PHP settings
		$template->assign_block_vars('checks', array(
			'S_LEGEND'			=> true,
			'LEGEND'			=> $user->lang['PHP_SETTINGS'],
			'LEGEND_EXPLAIN'	=> sprintf($user->lang['PHP_SETTINGS_EXPLAIN'], $mod_config['phpbb_version']),
		));

		if (version_compare($config['version'], $mod_config['phpbb_version']) < 0)
		{
			$result = '<strong style="color:red">' . $user->lang['NO'] . '</strong>';
		}
		else
		{
			$passed['phpbb'] = true;
			$result = '<strong style="color:green">' . $user->lang['YES'] . '</strong>';
		}

		$template->assign_block_vars('checks', array(
			'TITLE'			=> sprintf($user->lang['PHPBB_VERSION_REQD'], $mod_config['phpbb_version']),
			'RESULT'		=> $result,

			'S_EXPLAIN'		=> false,
			'S_LEGEND'		=> false,
		));

		// Check for url_fopen
		if (@ini_get('allow_url_fopen') == '1' || strtolower(@ini_get('allow_url_fopen')) == 'on')
		{
			$result = '<strong style="color:green">' . $user->lang['YES'] . '</strong>';
		}
		else
		{
			$result = '<strong style="color:red">' . $user->lang['NO'] . '</strong>';
		}

		$template->assign_block_vars('checks', array(
			'TITLE'			=> $user->lang['PHP_URL_FOPEN_SUPPORT'],
			'TITLE_EXPLAIN'	=> $user->lang['PHP_URL_FOPEN_SUPPORT_EXPLAIN'],
			'RESULT'		=> $result,

			'S_EXPLAIN'		=> true,
			'S_LEGEND'		=> false,
		));


		// Check for curl
		if (function_exists('curl_init') && !@ini_get('safe_mode') && !@ini_get('open_basedir'))
		{
			$result = '<strong style="color:green">' . $user->lang['YES'] . '</strong>';
		}
		else
		{
			$result = '<strong style="color:red">' . $user->lang['NO'] . '</strong>';
		}

		$template->assign_block_vars('checks', array(
			'TITLE'			=> $user->lang['PHP_CURL_SUPPORT'],
			'TITLE_EXPLAIN'	=> $user->lang['PHP_CURL_SUPPORT_EXPLAIN'],
			'RESULT'		=> $result,

			'S_EXPLAIN'		=> true,
			'S_LEGEND'		=> false,
		));

		// Check permissions on files/directories we need access to
		$template->assign_block_vars('checks', array(
			'S_LEGEND'			=> true,
			'LEGEND'			=> $user->lang['FILES_REQUIRED'],
			'LEGEND_EXPLAIN'	=> $user->lang['FILES_REQUIRED_EXPLAIN'],
		));

		$directories = array('arcade/', 'arcade/gamedata/', 'arcade/games/', 'arcade/install/');

		umask(0);

		$passed['files'] = true;
		foreach ($directories as $dir)
		{
			$exists = $write = false;

			// Try to create the directory if it does not exist
			if (!file_exists($phpbb_root_path . $dir))
			{
				@mkdir($phpbb_root_path . $dir, 0777);
				@chmod($phpbb_root_path . $dir, 0777);
			}

			// Now really check
			if (file_exists($phpbb_root_path . $dir) && is_dir($phpbb_root_path . $dir))
			{
				if (!@is_writable($phpbb_root_path . $dir))
				{
					@chmod($phpbb_root_path . $dir, 0777);
				}
				$exists = true;
			}

			// Now check if it is writable by storing a simple file
			$fp = @fopen($phpbb_root_path . $dir . 'test_lock', 'wb');
			if ($fp !== false)
			{
				$write = true;
			}
			@fclose($fp);

			@unlink($phpbb_root_path . $dir . 'test_lock');

			$passed['files'] = ($exists && $write && $passed['files']) ? true : false;

			$exists = ($exists) ? '<strong style="color:green">' . $user->lang['FOUND'] . '</strong>' : '<strong style="color:red">' . $user->lang['NOT_FOUND'] . '</strong>';
			$write = ($write) ? ', <strong style="color:green">' . $user->lang['WRITABLE'] . '</strong>' : (($exists) ? ', <strong style="color:red">' . $user->lang['UNWRITABLE'] . '</strong>' : '');

			$template->assign_block_vars('checks', array(
				'TITLE'		=> $dir,
				'RESULT'	=> $exists . $write,

				'S_EXPLAIN'	=> false,
				'S_LEGEND'	=> false,
			));
		}

		$s_hidden_fields = '';
		$url = (!in_array(false, $passed)) ? $this->p_master->module_url . "?mode=$mode&amp;sub=update" : $this->p_master->module_url . "?mode=$mode&amp;sub=requirements";
		$submit = (!in_array(false, $passed)) ? $user->lang['UPDATE_START'] : $user->lang['INSTALL_TEST'];

		$template->assign_vars(array(
			'L_SUBMIT'	=> $submit,
			'S_HIDDEN'	=> $s_hidden_fields,
			'U_ACTION'	=> $url,
		));
	}

	/**
	* Obtain the information required to connect to the database
	*/
	function update($mode, $sub)
	{
		global $user, $template, $cache, $phpEx, $phpbb_root_path, $file_functions, $phpbb_db_tools, $db, $mod_config;

		$this->page_title = $user->lang['STAGE_UPDATE_ARCADE'];

		// Purge the cache
		$cache->purge();

		if (version_compare($this->p_master->installed_version, $mod_config['mod_version'], '<'))
		{
			switch ($this->p_master->installed_version)
			{
				case '0.1.0.beta':
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['0.2.0']);
					$this->p_master->set_config('download_list', false);

					// Add New ACP Modules...
					// No longer need since we remove all and re-add them in 0.5.0
					// $this->p_master->add_modules($mod_config['mod_modules'][0]['parent_module_data']['module_langname'], $mod_config['mod_modules'][0]['parent_module_data']['module_class'], array($mod_config['mod_modules'][0]['module_data'][9]));

					// Add New UCP Module
					//$this->p_master->create_modules($mod_config['mod_modules'][1]['parent_module_data'], $mod_config['mod_modules'][1]['module_data']);

				case '0.2.0.beta':
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['0.3.0']);

				case '0.3.0.beta':
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['0.3.1']);
					$this->p_master->set_config('copyright', 'Powered by phpBB Arcade &copy; 2008 <a href="http:// www.jeffrusso.net">JRSweets</a>');

				case '0.3.1':
					$this->p_master->set_config('protect_amod', true);
					$this->p_master->set_config('protect_ibpro', true);
					$this->p_master->set_config('protect_v3arcade', true);

				case '0.3.2':
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['0.4.0']);

				case '0.4.0':
					$this->p_master->set_config('game_scores', 5);
					$this->p_master->set_config('parse_bbcode', true);
					$this->p_master->set_config('parse_smilies', true);
					$this->p_master->set_config('parse_links', true);
					$this->p_master->set_config('game_width', 0);
					$this->p_master->set_config('game_height', 0);

				case '0.4.1':
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['0.4.2']);

					// Add new tables
					$schema_data = array();
					$schema_data[ARCADE_DOWNLOAD_TABLE] = array(
						'COLUMNS'		=> array(
							'user_id'			=> array('UINT', 0),
							'game_id'			=> array('UINT', 0),
							'total'				=> array('UINT', 0),
						),
						'PRIMARY_KEY'	=> array('user_id', 'game_id'),
					);

					foreach ($schema_data as $table_name => $table_data)
					{
						// Now create the table
						$phpbb_db_tools->sql_create_table($table_name, $table_data);
					}

					// Add New ACP Modules...
					// No longer need since we remove all and re-add them in 0.5.0
					// $this->p_master->add_modules($mod_config['mod_modules'][0]['parent_module_data']['module_langname'], $mod_config['mod_modules'][0]['parent_module_data']['module_class'], array($mod_config['mod_modules'][0]['module_data'][10]));

					$sql = 'SELECT game_name, game_id
						FROM ' . ARCADE_GAMES_TABLE;
					$result = $db->sql_query($sql);

					$row = $db->sql_fetchrowset($result);
					$db->sql_freeresult($result);

					foreach ($row as $item)
					{
						$sql = 'UPDATE ' . ARCADE_GAMES_TABLE . "
							SET game_name_clean = '" . $db->sql_escape(utf8_clean_string($item['game_name'])) . "'
						WHERE game_id = " . (int) $item['game_id'];
						$db->sql_query($sql);
					}

				case '0.4.2':
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['0.4.3']);
					$this->p_master->set_config('played_games', 1);
					$this->p_master->set_config('played_colour', 'cdcdcd');

				case '0.4.3':
					$this->p_master->set_config('online_time', 0);
					$this->p_master->set_config('announce_game', false);
					$this->p_master->set_config('announce_forum', 0);
					$this->p_master->set_config('announce_subject', '[GAME RELEASE] [game_name]');
					$this->p_master->set_config('announce_message', '[game_image]
[b]Game Name:[/b] [game_name]
[b]Game Description:[/b] [game_desc]

[game_link]
[download_link]
[stats_link]');

				case '0.4.4':
					$this->p_master->add_permissions($mod_config['update_permission_options']['0.4.5']);

				case '0.4.5':
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['0.5.0']);

					// Add new tables
					$schema_data = array();
					$schema_data[ACL_ARCADE_GROUPS_TABLE] = array(
						'COLUMNS'		=> array(
							'group_id'			=> array('UINT', 0),
							'cat_id'			=> array('UINT', 0),
							'auth_option_id'	=> array('UINT', 0),
							'auth_role_id'		=> array('UINT', 0),
							'auth_setting'		=> array('TINT:2', 0),
						),
						'KEYS'			=> array(
							'group_id'		=> array('INDEX', 'group_id'),
							'auth_opt_id'	=> array('INDEX', 'auth_option_id'),
							'auth_role_id'	=> array('INDEX', 'auth_role_id'),
						),
					);

					$schema_data[ACL_ARCADE_OPTIONS_TABLE] = array(
						'COLUMNS'		=> array(
							'auth_option_id'	=> array('UINT', NULL, 'auto_increment'),
							'auth_option'		=> array('VCHAR:50', ''),
							'is_global'			=> array('BOOL', 0),
							'is_local'			=> array('BOOL', 0),
							'founder_only'		=> array('BOOL', 0),
						),
						'PRIMARY_KEY'	=> 'auth_option_id',
						'KEYS'			=> array(
							'auth_option'		=> array('UNIQUE', 'auth_option'),
						),
					);

					$schema_data[ACL_ARCADE_ROLES_TABLE] = array(
						'COLUMNS'		=> array(
							'role_id'			=> array('UINT', NULL, 'auto_increment'),
							'role_name'			=> array('VCHAR_UNI', ''),
							'role_description'	=> array('TEXT_UNI', ''),
							'role_type'			=> array('VCHAR:10', ''),
							'role_order'		=> array('USINT', 0),
						),
						'PRIMARY_KEY'	=> 'role_id',
						'KEYS'			=> array(
							'role_type'			=> array('INDEX', 'role_type'),
							'role_order'		=> array('INDEX', 'role_order'),
						),
					);

					$schema_data[ACL_ARCADE_ROLES_DATA_TABLE] = array(
						'COLUMNS'		=> array(
							'role_id'			=> array('UINT', 0),
							'auth_option_id'	=> array('UINT', 0),
							'auth_setting'		=> array('TINT:2', 0),
						),
						'PRIMARY_KEY'	=> array('role_id', 'auth_option_id'),
						'KEYS'			=> array(
							'ath_op_id'			=> array('INDEX', 'auth_option_id'),
						),
					);

					$schema_data[ACL_ARCADE_USERS_TABLE] = array(
						'COLUMNS'		=> array(
							'user_id'			=> array('UINT', 0),
							'cat_id'			=> array('UINT', 0),
							'auth_option_id'	=> array('UINT', 0),
							'auth_role_id'		=> array('UINT', 0),
							'auth_setting'		=> array('TINT:2', 0),
						),
						'KEYS'			=> array(
							'user_id'			=> array('INDEX', 'user_id'),
							'auth_option_id'	=> array('INDEX', 'auth_option_id'),
							'auth_role_id'		=> array('INDEX', 'auth_role_id'),
						),
					);

					foreach ($schema_data as $table_name => $table_data)
					{
						// Now create the table
						$phpbb_db_tools->sql_create_table($table_name, $table_data);
					}

					$this->p_master->load_data('schemas/arcade/0.5.0schema_data.sql');

					$this->p_master->set_config('arcade_leaders_header', 3);
					$this->p_master->set_config('resolution_select', 1);
					$this->p_master->set_config('display_desc', true);
					$this->p_master->set_config('arcade_disable', false);
					$this->p_master->set_config('arcade_disable_msg', '');
					$this->p_master->set_config('cache_time', 4);

					// Ok this is tricky I hope it doesn't mess anything up...
					// First set any links (old value was cat type 1) to new value 2
					$sql = 'UPDATE ' . ARCADE_CATS_TABLE . '
						SET cat_type = 2
						WHERE cat_type = 1';
					$db->sql_query($sql);

					// Now change any old arcade cats with games (old value was cat type 0) to new value 1
					// This makes room for categories without games (like the non postable forums)
					$sql = 'UPDATE ' . ARCADE_CATS_TABLE . '
						SET cat_type = 1
						WHERE cat_type = 0';
					$db->sql_query($sql);

					// Now lets deal with passwords for cats....
					$sql = 'SELECT cat_id, cat_password
						FROM ' . ARCADE_CATS_TABLE . "
						WHERE cat_password <> ''";
					$result = $db->sql_query($sql);

					while ($row = $db->sql_fetchrow($result))
					{
						$sql = 'UPDATE ' . ARCADE_CATS_TABLE . '
							SET ' . $db->sql_build_array('UPDATE', array('cat_password' => phpbb_hash($row['cat_password']))) . '
							WHERE cat_id = ' . (int) $row['cat_id'];
						$db->sql_query($sql);
					}
					$db->sql_freeresult($result);

					// Remove old permissions
					$old_perm = array();
					$old_perm['global'] = $mod_config['old_permission_options'];
					$this->p_master->remove_permissions($old_perm);
					$this->p_master->add_permissions($mod_config['update_permission_options']['0.5.0']);

					$auth_admin = new auth_admin();
					$cache->destroy('_acl_options');
					$cache->destroy('_acl_arcade_options');
					$auth_admin->acl_clear_prefetch();

					// Remove all modules from the .MODS tab,  we will next try to create a new tab just for the arcade
					// Also remove the ucp modules and re-add with different auth settings
					$this->p_master->remove_modules(array('ACP_ARCADE', 'UCP_ARCADE'), $mod_config['module_remove']);
					//foreach($mod_config['mod_modules'] as $modules)
					//{
					//	$this->p_master->create_modules($modules['parent_module_data'], $modules['module_data']);
					//}

				case '0.5.0':
					$this->p_master->set_config('welcome_index', 1);
					$this->p_master->set_config('search_index', 1);
					$this->p_master->set_config('links_index', 1);
					$this->p_master->set_config('welcome_cats', 1);
					$this->p_master->set_config('search_cats', 1);
					$this->p_master->set_config('links_cats', 1);
					$this->p_master->set_config('welcome_stats', 1);
					$this->p_master->set_config('search_stats', 1);
					$this->p_master->set_config('links_stats', 1);

				case '0.5.1':
					$this->p_master->set_config('most_downloaded', 5);
					$this->p_master->set_config('least_downloaded', 5);
					$this->p_master->set_config('limit_play_total_posts', 5);
					// No longer needed since in 1.0.RC4 we remove and re-add all the modules
					//$this->p_master->add_modules($mod_config['mod_modules'][0]['parent_module_data']['module_langname'], $mod_config['mod_modules'][0]['parent_module_data']['module_class'], array($mod_config['mod_modules'][0]['module_data'][2]));
					$this->p_master->add_arcade_permissions($mod_config['update_arcade_permission_options']['0.6.0']);

					$sql = 'SELECT auth_option_id
						FROM ' . ACL_ARCADE_OPTIONS_TABLE . "
						WHERE auth_option = 'c_popup'";
					$result = $db->sql_query($sql);
					$auth_option_id = $db->sql_fetchfield('auth_option_id');
					$db->sql_freeresult($result);

					$arcade_roles = array('ROLE_ARCADE_FULL', 'ROLE_ARCADE_LIMITED', 'ROLE_ARCADE_PLAYONLY', 'ROLE_ARCADE_STANDARD', 'ROLE_ARCADE_STANDARD_DOWNLOADS');
					foreach ($arcade_roles as $role)
					{
						$sql = 'SELECT role_id
							FROM ' . ACL_ARCADE_ROLES_TABLE . "
							WHERE role_name = '$role'";
						$result = $db->sql_query($sql);
						$role_id = $db->sql_fetchfield('role_id');
						$db->sql_freeresult($result);

						$sql_ary = array(
							'role_id'			=> $role_id,
							'auth_option_id'	=> $auth_option_id,
							'auth_setting'		=> 1,
						);

						$sql = 'INSERT INTO ' . ACL_ARCADE_ROLES_DATA_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
						$db->sql_query($sql);
					}

				case '0.6.0':
					$this->p_master->set_config('display_viewtopic', 1);
					$this->p_master->set_config('display_memberlist', 1);
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['0.6.1']);

					$sql = 'SELECT game_id, game_swf, game_files
						FROM ' . ARCADE_GAMES_TABLE;
					$result = $db->sql_query($sql);
					while ($row = $db->sql_fetchrow($result))
					{
						$path = $file_functions->remove_extension($row['game_swf']);
						$game_files_array = array();
						$game_files_array[] = $phpbb_root_path . $arcade_config['game_path'] . $path . '/' . $row['game_swf'];

						$extra_game_files = ($row['game_files'] != '') ? unserialize($row['game_files']) : '';
						if (is_array($extra_game_files))
						{
							foreach ($extra_game_files as $file)
							{
								$file = $phpbb_root_path . $file;
								if (file_exists($file))
								{
									$game_files_array[] = $file;
								}
							}
						}

						$filesize = $file_functions->filesize($game_files_array);
						if ($filesize)
						{
							$sql = 'UPDATE ' . ARCADE_GAMES_TABLE . '
								SET game_filesize = '. (int) $filesize . '
								WHERE game_id = ' . (int) $row['game_id'];
							$db->sql_query($sql);
						}
					}
					$db->sql_freeresult($result);

				case '0.6.1':
				case '0.7.0':
				case '1.0.RC1':
					$this->p_master->set_config('game_cost', 5);
					$this->p_master->set_config('game_reward', 10);
					$this->p_master->set_config('use_jackpot', 0);
					$this->p_master->set_config('jackpot_limit', 0);
					$this->p_master->set_config('use_points', 0);
					$this->p_master->set_config('cm_currency_id', 0);
					$this->p_master->set_config('game_autosize', 0);
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['1.0.RC2']);

					$this->p_master->add_arcade_permissions($mod_config['update_arcade_permission_options']['1.0.RC2']);

					$sql = 'SELECT auth_option_id
						FROM ' . ACL_ARCADE_OPTIONS_TABLE . "
						WHERE auth_option = 'c_playfree'";
					$result = $db->sql_query($sql);
					$auth_option_id = $db->sql_fetchfield('auth_option_id');
					$db->sql_freeresult($result);

					$arcade_roles = array('ROLE_ARCADE_FULL');
					foreach ($arcade_roles as $role)
					{
						$sql = 'SELECT role_id
							FROM ' . ACL_ARCADE_ROLES_TABLE . "
							WHERE role_name = '$role'";
						$result = $db->sql_query($sql);
						$role_id = $db->sql_fetchfield('role_id');
						$db->sql_freeresult($result);

						$sql_ary = array(
							'role_id'			=> $role_id,
							'auth_option_id'	=> $auth_option_id,
							'auth_setting'		=> 1,
						);

						$sql = 'INSERT INTO ' . ACL_ARCADE_ROLES_DATA_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
						$db->sql_query($sql);
					}

				case '1.0.RC2':
					$this->p_master->set_config('resolution_start_value', 50);
					$this->p_master->set_config('resolution_stop_value', 200);
					$this->p_master->set_config('resolution_step_value', 25);
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['1.0.RC3']);
					// Set arcade admin permissions for admin standard and full roles
					$this->p_master->update_roles(array('ROLE_ADMIN_STANDARD', 'ROLE_ADMIN_FULL'), $mod_config['permission_options']['global']);

				case '1.0.RC3':
					$this->p_master->set_config('jackpot_minimum', 0);
					$this->p_master->set_config('auto_disable', 0);
					$this->p_master->set_config('auto_disable_start', '');
					$this->p_master->set_config('auto_disable_end', '');
					$this->p_master->set_config('download_list_message', '');
					$this->p_master->set_config('download_list_per_page', 50);
					$this->p_master->set_config('game_zero_negative_score', 0);
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['1.0.RC4']);

					$this->p_master->add_arcade_permissions($mod_config['update_arcade_permission_options']['1.0.RC4']);
					$this->p_master->update_arcade_roles(array('ROLE_ARCADE_STANDARD', 'ROLE_ARCADE_STANDARD_DOWNLOADS', 'ROLE_ARCADE_FULL'), $mod_config['update_arcade_permission_options']['1.0.RC4']['local']);

					// Add new tables
					$schema_data = array();
					$schema_data[ARCADE_REPORTS_TABLE] = array(
						'COLUMNS'		=> array(
							'report_id'					=> array('UINT', NULL, 'auto_increment'),
							'user_id'					=> array('UINT', 0),
							'game_id'					=> array('UINT', 0),
							'report_type'				=> array('TINT:1', 0),
							'report_desc'				=> array('TEXT_UNI', ''),
							'report_desc_bitfield'		=> array('VCHAR:255', ''),
							'report_desc_options'		=> array('UINT:11', 7),
							'report_desc_uid'			=> array('VCHAR:8', ''),
							'report_time'				=> array('INT:11', 0),
							'report_ip'					=> array('VCHAR:40', ''),
						),
						'PRIMARY_KEY'	=> 'report_id',
					);

					foreach ($schema_data as $table_name => $table_data)
					{
						// Now create the table
						$phpbb_db_tools->sql_create_table($table_name, $table_data);
					}

					$this->p_master->remove_modules($mod_config['parent_module_remove'], $mod_config['module_remove']);
					foreach($mod_config['mod_modules'] as $modules)
					{
						$this->p_master->create_modules($modules['parent_module_data'], $modules['module_data']);
					}

				case '1.0.RC4':
					$this->p_master->set_config('override_user_sort', 0);

					// Set user sort options to new default settings
					$sql_ary = array(
						'games_sort_order'		=> '0',
						'games_sort_dir'		=> '0',
					);

					$sql = 'UPDATE ' . USERS_TABLE . '
						SET ' . $db->sql_build_array('UPDATE', $sql_ary);
					$db->sql_query($sql);

					$values = array('resolution_start_value', 'resolution_stop_value', 'resolution_step_value');
					$sql = 'DELETE FROM ' . ARCADE_CONFIG_TABLE . '
						WHERE ' . $db->sql_in_set('config_name', $values);
					$db->sql_query($sql);

					// We will know try to move the includes/arcade/games, includes/arcade/install
					// and includes/arcade/images to the arcade folder.  I don't like that we were
					// uploading files inside the includes directory.
					$dirs = array('arcade/', 'arcade/images/', 'arcade/images/cats/', 'arcade/games/', 'arcade/install');
					foreach ($dirs as $directory)
					{
						if (!file_exists($phpbb_root_path . $directory))
						{
							mkdir($phpbb_root_path . $directory);
						}
					}
					unset($dirs);

					$dirs = array();
					if ($this->p_master->mod_config['game_path'] == 'includes/arcade/games/')
					{
						$dirs[] = array(
							'old'		=> $this->p_master->mod_config['game_path'],
							'new'		=> 'arcade/games/',
							'config'	=> 'game_path',
						);
					}

					if ($this->p_master->mod_config['unpack_game_path'] == 'includes/arcade/install/')
					{
						$dirs[] = array(
							'old'		=> $this->p_master->mod_config['unpack_game_path'],
							'new'		=> 'arcade/install/',
							'config'	=> 'unpack_game_path',
						);
					}

					if ($this->p_master->mod_config['cat_image_path'] == 'includes/arcade/images/cats/')
					{
						$dirs[] = array(
							'old'		=> $this->p_master->mod_config['cat_image_path'],
							'new'		=> 'arcade/images/cats/',
							'config'	=> 'cat_image_path',
						);
					}

					if ($this->p_master->mod_config['image_path'] == 'includes/arcade/images/')
					{
						$dirs[] = array(
							'old'		=> $this->p_master->mod_config['image_path'],
							'new'		=> 'arcade/images/',
							'config'	=> 'image_path',
						);
					}

					foreach ($dirs as $directory)
					{
						$file_functions->move_dir($phpbb_root_path . $directory['old'], $phpbb_root_path . $directory['new']);
						$this->p_master->set_config($directory['config'], $directory['new']);
					}

				case '1.0.RC5':
					// Remove the ibp install file convertor as this function is now built into the upload function
					$this->p_master->remove_module(array('module_basename' => 'arcade_utilities', 'module_mode'	=> 'convert_install', 'module_langname' => 'ACP_ARCADE_UTILITIES_CONVERT_INSTALL'));
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['1.0.RC6']);

					// I before E except after C
					$pm_message = str_replace('recieved', 'received', $this->p_master->mod_config['pm_message']);
					$this->p_master->set_config('pm_message', $pm_message);

				case '1.0.RC6':
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['1.0.RC7']);

				case '1.0.RC7':
					// Before we are able to add a unique key to auth_option, we need to remove duplicate entries
					// We get duplicate entries first
					$sql = 'SELECT auth_option
						FROM ' . ACL_ARCADE_OPTIONS_TABLE . '
						GROUP BY auth_option
						HAVING COUNT(*) >= 1';
					$result = $db->sql_query($sql);

					$auth_options = array();
					while ($row = $db->sql_fetchrow($result))
					{
						$auth_options[] = $row['auth_option'];
					}
					$db->sql_freeresult($result);

					// Remove specific auth options
					if (!empty($auth_options))
					{
						foreach ($auth_options as $option)
						{
							// Select auth_option_ids... the largest id will be preserved
							$sql = 'SELECT auth_option_id
								FROM ' . ACL_ARCADE_OPTIONS_TABLE . "
								WHERE auth_option = '" . $db->sql_escape($option) . "'
								ORDER BY auth_option_id DESC";
							$result = $db->sql_query_limit($sql, 0, 1);

							while ($row = $db->sql_fetchrow($result))
							{
								// Ok, remove this auth option...
								$db->sql_query('DELETE FROM ' . ACL_ARCADE_OPTIONS_TABLE . ' WHERE auth_option_id = ' . $row['auth_option_id']);
								$db->sql_query('DELETE FROM ' . ACL_ARCADE_ROLES_DATA_TABLE . ' WHERE auth_option_id = ' . $row['auth_option_id']);
								$db->sql_query('DELETE FROM ' . ACL_ARCADE_GROUPS_TABLE . ' WHERE auth_option_id = ' . $row['auth_option_id']);
								$db->sql_query('DELETE FROM ' . ACL_ARCADE_USERS_TABLE . ' WHERE auth_option_id = ' . $row['auth_option_id']);
							}
							$db->sql_freeresult($result);
						}
					}

					// Now make auth_option UNIQUE, by dropping the old index and adding a UNIQUE one.
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['1.0.RC8']);

				case '1.0.RC8':
					// Add new tables
					$schema_data = array();
					$schema_data[ARCADE_PLAYS_TABLE] = array(
						'COLUMNS'		=> array(
							'game_id'				=> array('UINT', 0),
							'user_id'				=> array('UINT', 0),
							'total_time'			=> array('TIMESTAMP', 0),
							'total_plays'			=> array('UINT', 0),
						),
						'PRIMARY_KEY'	=> array('game_id', 'user_id'),
					);

					foreach ($schema_data as $table_name => $table_data)
					{
						// Now create the table
						$phpbb_db_tools->sql_create_table($table_name, $table_data);
					}

					// Move plays data from scores table to new plays table
					$sql = 'SELECT game_id, user_id, total_time, total_plays
						FROM ' . ARCADE_SCORES_TABLE;

					$result = $db->sql_query($sql);
					while ($row = $db->sql_fetchrow($result))
					{
						$sql_ary = array(
							'game_id'				=> $row['game_id'],
							'user_id'				=> $row['user_id'],
							'total_time'			=> $row['total_time'],
							'total_plays'			=> $row['total_plays'],
						);

						$sql = 'INSERT INTO ' . ARCADE_PLAYS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
						$db->sql_query($sql);
					}
					$db->sql_freeresult($result);

					// Rename jackpot_limit to jackpot_maximum and then remove jackpot_limit
					$this->p_master->set_config('jackpot_maximum', $this->p_master->mod_config['jackpot_limit']);
					$this->p_master->remove_config('jackpot_limit');
					// This is needed because of the schema being out of date with the changes made during RC3 and RC4
					unset($mod_config['update_schema_changes']['1.0.RC3']['add_columns']);
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['1.0.RC3']);
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['1.0.RC4']);
					$phpbb_db_tools->perform_schema_changes($mod_config['update_schema_changes']['1.0.RC9']);
				break;

				default:
				break;
			}

			// Set arcade version config value to latest version
			$this->p_master->set_config('version', $mod_config['mod_version']);
			// Purge the cache
			$cache->purge();
			add_log('admin', 'LOG_ARCADE_UPDATE', $this->p_master->installed_version, $mod_config['mod_version']);
		}

		$template->assign_vars(array(
			'TITLE'		=> $user->lang['INSTALL_CONGRATS'],
			'BODY'		=> $user->lang['STAGE_UPDATE_ARCADE_EXPLAIN'] . '<br /><br />' . sprintf($user->lang['UPDATE_CONGRATS_EXPLAIN'], $mod_config['mod_version']),
			'L_SUBMIT'	=> $user->lang['INSTALL_LOGIN'],
			'U_ACTION'	=> append_sid("{$phpbb_root_path}adm/index.$phpEx", false, true, $user->session_id),
		));
	}

}

?>