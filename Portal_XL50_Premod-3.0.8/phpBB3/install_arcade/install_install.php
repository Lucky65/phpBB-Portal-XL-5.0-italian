<?php
/**
*
* @package install
* @version $Id: install_install.php 791 2009-06-19 14:43:28Z JRSweets $
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
	if ($this->installed_version)
	{
		return;
	}

	$module[] = array(
		'module_type'		=> 'install',
		'module_title'		=> 'INSTALL',
		'module_filename'	=> substr(basename(__FILE__), 0, -strlen($phpEx)-1),
		'module_order'		=> 10,
		'module_subs'		=> '',
		'module_stages'		=> array('INTRO', 'REQUIREMENTS', 'INSTALL'),
		'module_reqs'		=> ''
	);
}

/**
* Installation
* @package install
*/
class install_install extends module
{
	function install_install(&$p_master)
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
					'TITLE'			=> $user->lang['INSTALL_INTRO'],
					'BODY'			=> $user->lang['INSTALL_INTRO_BODY'],
					'L_SUBMIT'		=> $user->lang['NEXT_STEP'],
					'U_ACTION'		=> $this->p_master->module_url . "?mode=$mode&amp;sub=requirements",
				));

			break;

			case 'requirements':
				$this->requirements($mode, $sub);

			break;

			case 'install':
				$this->install($mode, $sub);

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
		$url = (!in_array(false, $passed)) ? $this->p_master->module_url . "?mode=$mode&amp;sub=install" : $this->p_master->module_url . "?mode=$mode&amp;sub=requirements";
		$submit = (!in_array(false, $passed)) ? $user->lang['INSTALL_START'] : $user->lang['INSTALL_TEST'];

		$template->assign_vars(array(
			'L_SUBMIT'	=> $submit,
			'S_HIDDEN'	=> $s_hidden_fields,
			'U_ACTION'	=> $url,
		));
	}

	/**
	* Obtain the information required to connect to the database
	*/
	function install($mode, $sub)
	{
		global $table_prefix, $user, $template, $cache, $phpEx, $phpbb_root_path, $phpbb_db_tools, $mod_config;

		$this->page_title = $user->lang['STAGE_INSTALL_ARCADE'];

		// Load all the tables
		include ($phpbb_root_path . 'install_arcade/schemas/arcade/schema_structure.' . $phpEx);
		foreach ($schema_data as $table_name => $table_data)
		{
			// Change prefix, we always have phpbb_, therefore we can do a substr() here
			$table_name = $table_prefix . substr($table_name, 6);
			// Now create the table
			$phpbb_db_tools->sql_create_table($table_name, $table_data);
		}

		// Load all the arcade data
		$this->p_master->load_data($mod_config['data_file']);

		if (isset($mod_config['schema_changes']))
		{
			// Alter some existing tables
			$phpbb_db_tools->perform_schema_changes($mod_config['schema_changes']);
		}

		// Add the admin permissions for the arcade acp modules
		$this->p_master->add_permissions($mod_config['permission_options']);
		// Add the admin permissions for the arcade acp modules to the correct roles
		$this->p_master->update_roles(array('ROLE_ADMIN_STANDARD', 'ROLE_ADMIN_FULL'), $mod_config['permission_options']['global']);

		// Add the modules
		foreach($mod_config['mod_modules'] as $modules)
		{
			$this->p_master->create_modules($modules['parent_module_data'], $modules['module_data']);
		}

		// Purge the cache
		$cache->purge();
		add_log('admin', 'LOG_ARCADE_INSTALL', $mod_config['mod_version']);

		$template->assign_vars(array(
			'TITLE'		=> $user->lang['INSTALL_CONGRATS'],
			'BODY'		=> $user->lang['STAGE_INSTALL_ARCADE_EXPLAIN'] . '<br /><br />' . sprintf($user->lang['INSTALL_CONGRATS_EXPLAIN'], $mod_config['mod_version']),
			'L_SUBMIT'	=> $user->lang['INSTALL_LOGIN'],
			'U_ACTION'	=> append_sid("{$phpbb_root_path}adm/index.$phpEx", false, true, $user->session_id),
		));
	}
}

?>