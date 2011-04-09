<?php
/**
*
* @package install
* @version $Id: index.php 782 2009-06-09 19:15:02Z JRSweets $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**#@+
* @ignore
*/
define('IN_PHPBB', true);
define('IN_INSTALL', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
require($phpbb_root_path . 'common.' . $phpEx);
require($phpbb_root_path . 'includes/db/db_tools.' . $phpEx);
require($phpbb_root_path . 'includes/arcade/functions_files.' . $phpEx);
require($phpbb_root_path . 'includes/functions_module.' . $phpEx);
require($phpbb_root_path . 'includes/acp/acp_modules.' . $phpEx);
require($phpbb_root_path . 'includes/acp/auth.' . $phpEx);
require($phpbb_root_path . 'includes/functions_install.' . $phpEx);
require($phpbb_root_path . 'includes/functions_admin.' . $phpEx);

// Arcade files and configuration
require($phpbb_root_path . 'includes/arcade/arcade_constants.' . $phpEx);
require($phpbb_root_path . 'includes/auth_arcade.' . $phpEx);
require($phpbb_root_path . 'includes/acp/auth_arcade.' . $phpEx);
require($phpbb_root_path . 'includes/arcade/functions_arcade.' . $phpEx);
require('config.' . $phpEx);

// Report all errors, except notices
error_reporting(E_ALL);

// Try to override some limits - maybe it helps some...
@set_time_limit(0);
$mem_limit = @ini_get('memory_limit');
if (!empty($mem_limit))
{
	$unit = strtolower(substr($mem_limit, -1, 1));
	$mem_limit = (int) $mem_limit;

	if ($unit == 'k')
	{
		$mem_limit = floor($mem_limit / 1024);
	}
	else if ($unit == 'g')
	{
		$mem_limit *= 1024;
	}
	else if (is_numeric($unit))
	{
		$mem_limit = floor((int) ($mem_limit . $unit) / 1048576);
	}
	$mem_limit = max(128, $mem_limit) . 'M';
}
else
{
	$mem_limit = '128M';
}
@ini_set('memory_limit', $mem_limit);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup(array('mods/arcade_install', 'acp/modules'));

// This is done here so when we add/delete the module we will see the language
// value inside the admin log
$module_info = new p_master();
$module_info->add_mod_info('acp');
$module_info->add_mod_info('mcp');
$module_info->add_mod_info('ucp');

$mode = request_var('mode', 'overview');
$sub = request_var('sub', '');

$template->set_custom_template('../adm/style', 'admin');
$template->assign_var('T_TEMPLATE_PATH', '../adm/style');

// Set some standard variables we want to force
$config['load_tplcompile'] = '1';
// the acp template is never stored in the database
$user->theme['template_storedb'] = false;

$db->sql_return_on_error(true);

$install = new module();
$phpbb_db_tools = new phpbb_db_tools($db);
$file_functions = new file_functions();

$install->create('install', "index.$phpEx", $mode, $sub);
$install->load();

// Generate the page
$install->page_header();
$install->generate_navigation();

$template->set_filenames(array(
	'body' => $install->get_tpl_name())
);

$db->sql_return_on_error(false);
$install->page_footer();

/**
* @package install
*/
class module
{
	var $id = 0;
	var $type = 'install';
	var $module_ary = array();
	var $mod_config = array();
	var $filename;
	var $module_url = '';
	var $tpl_name = '';
	var $mode;
	var $sub;
	var $installed_version = false;

	/**
	* Private methods, should not be overwritten
	*/
	function create($module_type, $module_url, $selected_mod = false, $selected_submod = false)
	{
		global $db, $config, $phpEx, $mod_config, $phpbb_root_path;

		// Check if the arcade is already installed
		$tables = get_tables($db);
		if (in_array(ARCADE_CONFIG_TABLE, $tables))
		{
			$sql = 'SELECT *
				FROM ' . ARCADE_CONFIG_TABLE;
			$result = $db->sql_query($sql);

			$this->mod_config = array();
			while ($row = $db->sql_fetchrow($result))
			{
				if ($row['config_name'] == 'version')
				{
					$this->installed_version = $this->format_version((string) $row['config_value']);
				}
				$this->mod_config[$row['config_name']] = $row['config_value'];
			}
			$db->sql_freeresult($result);
		}
		unset($tables);

		$module = array();

		// Grab module information using Bart's "neat-o-module" system (tm)
		$dir = @opendir('.');

		if (!$dir)
		{
			$this->error('Unable to access the installation directory', __LINE__, __FILE__);
		}

		$setmodules = 1;
		while (($file = readdir($dir)) !== false)
		{
			if (preg_match('#^install_(.*?)\.' . $phpEx . '$#', $file))
			{
				include($file);
			}
		}
		closedir($dir);

		unset($setmodules);

		if (!sizeof($module))
		{
			$this->error('No installation modules found', __LINE__, __FILE__);
		}

		// Order to use and count further if modules get assigned to the same position or not having an order
		$max_module_order = 1000;

		foreach ($module as $row)
		{
			// Check any module pre-reqs
			if ($row['module_reqs'] != '')
			{
			}

			// Module order not specified or module already assigned at this position?
			if (!isset($row['module_order']) || isset($this->module_ary[$row['module_order']]))
			{
				$row['module_order'] = $max_module_order;
				$max_module_order++;
			}

			$this->module_ary[$row['module_order']]['name'] = $row['module_title'];
			$this->module_ary[$row['module_order']]['filename'] = $row['module_filename'];
			$this->module_ary[$row['module_order']]['subs'] = $row['module_subs'];
			$this->module_ary[$row['module_order']]['stages'] = $row['module_stages'];

			if (strtolower($selected_mod) == strtolower($row['module_title']))
			{
				$this->id = (int) $row['module_order'];
				$this->filename = (string) $row['module_filename'];
				$this->module_url = (string) $module_url;
				$this->mode = (string) $selected_mod;
				// Check that the sub-mode specified is valid or set a default if not
				if (is_array($row['module_subs']))
				{
					$this->sub = strtolower((in_array(strtoupper($selected_submod), $row['module_subs'])) ? $selected_submod : $row['module_subs'][0]);
				}
				else if (is_array($row['module_stages']))
				{
					$this->sub = strtolower((in_array(strtoupper($selected_submod), $row['module_stages'])) ? $selected_submod : $row['module_stages'][0]);
				}
				else
				{
					$this->sub = '';
				}
			}
		} // END foreach
	} // END create

	/**
	* Load and run the relevant module if applicable
	*/
	function load($mode = false, $run = true)
	{
		global $phpbb_root_path, $phpEx;

		if ($run)
		{
			if (!empty($mode))
			{
				$this->mode = $mode;
			}

			$module = $this->filename;
			if (!class_exists($module))
			{
				$this->error('Module "' . htmlspecialchars($module) . '" not accessible.', __LINE__, __FILE__);
			}
			$this->module = new $module($this);

			if (method_exists($this->module, 'main'))
			{
				$this->module->main($this->mode, $this->sub);
			}
		}
	}

	/**
	* Output the standard page header
	*/
	function page_header()
	{
		if (defined('HEADER_INC'))
		{
			return;
		}

		define('HEADER_INC', true);
		global $template, $user, $stage, $phpbb_root_path;

		$template->assign_vars(array(
			'PAGE_TITLE'			=> $this->get_page_title(),
			'T_IMAGE_PATH'			=> $phpbb_root_path . 'adm/images/',

			'S_CONTENT_DIRECTION' 	=> $user->lang['DIRECTION'],
			'S_CONTENT_FLOW_BEGIN'	=> ($user->lang['DIRECTION'] == 'ltr') ? 'left' : 'right',
			'S_CONTENT_FLOW_END'	=> ($user->lang['DIRECTION'] == 'ltr') ? 'right' : 'left',
			'S_CONTENT_ENCODING' 	=> 'UTF-8',

			'S_USER_LANG'			=> $user->lang['USER_LANG'],
			)
		);

		header('Content-type: text/html; charset=UTF-8');
		header('Cache-Control: private, no-cache="set-cookie"');
		header('Expires: 0');
		header('Pragma: no-cache');

		return;
	}

	/**
	* Output the standard page footer
	*/
	function page_footer()
	{
		global $db, $template;

		$template->display('body');

		// Close our DB connection.
		if (!empty($db) && is_object($db))
		{
			$db->sql_close();
		}

		if (function_exists('exit_handler'))
		{
			exit_handler();
		}
	}

	/**
	* Returns desired template name
	*/
	function get_tpl_name()
	{
		return $this->module->tpl_name . '.html';
	}

	/**
	* Returns the desired page title
	*/
	function get_page_title()
	{
		global $user;

		if (!isset($this->module->page_title))
		{
			return '';
		}

		return (isset($lang[$this->module->page_title])) ? $lang[$this->module->page_title] : $this->module->page_title;
	}

	/**
	* Generate an HTTP/1.1 header to redirect the user to another page
	* This is used during the installation when we do not have a database available to call the normal redirect function
	* @param string $page The page to redirect to relative to the installer root path
	*/
	function redirect($page)
	{
		// HTTP_HOST is having the correct browser url in most cases...
		$server_name = (!empty($_SERVER['HTTP_HOST'])) ? strtolower($_SERVER['HTTP_HOST']) : ((!empty($_SERVER['SERVER_NAME'])) ? $_SERVER['SERVER_NAME'] : getenv('SERVER_NAME'));
		$server_port = (!empty($_SERVER['SERVER_PORT'])) ? (int) $_SERVER['SERVER_PORT'] : (int) getenv('SERVER_PORT');
		$secure = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 1 : 0;

		$script_name = (!empty($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : getenv('PHP_SELF');
		if (!$script_name)
		{
			$script_name = (!empty($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : getenv('REQUEST_URI');
		}

		// Replace backslashes and doubled slashes (could happen on some proxy setups)
		$script_name = str_replace(array('\\', '//'), '/', $script_name);
		$script_path = trim(dirname($script_name));

		$url = (($secure) ? 'https://' : 'http://') . $server_name;

		if ($server_port && (($secure && $server_port <> 443) || (!$secure && $server_port <> 80)))
		{
			// HTTP HOST can carry a port number...
			if (strpos($server_name, ':') === false)
			{
				$url .= ':' . $server_port;
			}
		}

		$url .= $script_path . '/' . $page;
		header('Location: ' . $url);
		exit;
	}

	/**
	* Generate the navigation tabs
	*/
	function generate_navigation()
	{
		global $user, $template, $phpEx;

		if (is_array($this->module_ary))
		{
			@ksort($this->module_ary);
			foreach ($this->module_ary as $cat_ary)
			{
				$cat = $cat_ary['name'];
				$l_cat = (!empty($user->lang['CAT_' . $cat])) ? $user->lang['CAT_' . $cat] : preg_replace('#_#', ' ', $cat);
				$cat = strtolower($cat);
				$url = $this->module_url . "?mode=$cat";

				if ($this->mode == $cat)
				{
					$template->assign_block_vars('t_block1', array(
						'L_TITLE'		=> $l_cat,
						'S_SELECTED'	=> true,
						'U_TITLE'		=> $url,
					));

					if (is_array($this->module_ary[$this->id]['subs']))
					{
						$subs = $this->module_ary[$this->id]['subs'];
						foreach ($subs as $option)
						{
							$l_option = (!empty($user->lang['SUB_' . $option])) ? $user->lang['SUB_' . $option] : preg_replace('#_#', ' ', $option);
							$option = strtolower($option);
							$url = $this->module_url . '?mode=' . $this->mode . "&amp;sub=$option";

							$template->assign_block_vars('l_block1', array(
								'L_TITLE'		=> $l_option,
								'S_SELECTED'	=> ($this->sub == $option),
								'U_TITLE'		=> $url,
							));
						}
					}

					if (is_array($this->module_ary[$this->id]['stages']))
					{
						$subs = $this->module_ary[$this->id]['stages'];
						$matched = false;
						foreach ($subs as $option)
						{
							$l_option = (!empty($user->lang['STAGE_' . $option])) ? $user->lang['STAGE_' . $option] : preg_replace('#_#', ' ', $option);
							$option = strtolower($option);
							$matched = ($this->sub == $option) ? true : $matched;

							$template->assign_block_vars('l_block2', array(
								'L_TITLE'		=> $l_option,
								'S_SELECTED'	=> ($this->sub == $option),
								'S_COMPLETE'	=> !$matched,
							));
						}
					}
				}
				else
				{
					$template->assign_block_vars('t_block1', array(
						'L_TITLE'		=> $l_cat,
						'S_SELECTED'	=> false,
						'U_TITLE'		=> $url,
					));
				}
			}
		}
	}

	/**
	* Output an error message
	* If skip is true, return and continue execution, else exit
	*/
	function error($error, $line, $file, $skip = false)
	{
		global $user, $db, $template;

		if ($skip)
		{
			$template->assign_block_vars('checks', array(
				'S_LEGEND'	=> true,
				'LEGEND'	=> $user->lang['INST_ERR'],
			));

			$template->assign_block_vars('checks', array(
				'TITLE'		=> basename($file) . ' [ ' . $line . ' ]',
				'RESULT'	=> '<b style="color:red">' . $error . '</b>',
			));

			return;
		}

		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
		echo '<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">';
		echo '<head>';
		echo '<meta http-equiv="content-type" content="text/html; charset=utf-8" />';
		echo '<title>' . $user->lang['INST_ERR_FATAL'] . '</title>';
		echo '<link href="../adm/style/admin.css" rel="stylesheet" type="text/css" media="screen" />';
		echo '</head>';
		echo '<body id="errorpage">';
		echo '<div id="wrap">';
		echo '	<div id="page-header">';
		echo '	</div>';
		echo '	<div id="page-body">';
		echo '		<div id="acp">';
		echo '		<div class="panel">';
		echo '			<span class="corners-top"><span></span></span>';
		echo '			<div id="content">';
		echo '				<h1>' . $user->lang['INST_ERR_FATAL'] . '</h1>';
		echo '		<p>' . $user->lang['INST_ERR_FATAL'] . "</p>\n";
		echo '		<p>' . basename($file) . ' [ ' . $line . " ]</p>\n";
		echo '		<p><b>' . $error . "</b></p>\n";
		echo '			</div>';
		echo '			<span class="corners-bottom"><span></span></span>';
		echo '		</div>';
		echo '		</div>';
		echo '	</div>';
		echo '	<div id="page-footer">';
		echo '		Powered by phpBB &copy; 2000, 2002, 2005, 2007 <a href="http://www.phpbb.com/">phpBB Group</a>';
		echo '	</div>';
		echo '</div>';
		echo '</body>';
		echo '</html>';

		if (!empty($db) && is_object($db))
		{
			$db->sql_close();
		}

		exit_handler();
	}

	/**
	* Output an error message for a database related problem
	* If skip is true, return and continue execution, else exit
	*/
	function db_error($error, $sql, $line, $file, $skip = false)
	{
		global $user, $db, $template;

		if ($skip)
		{
			$template->assign_block_vars('checks', array(
				'S_LEGEND'	=> true,
				'LEGEND'	=> $user->lang['INST_ERR_FATAL'],
			));

			$template->assign_block_vars('checks', array(
				'TITLE'		=> basename($file) . ' [ ' . $line . ' ]',
				'RESULT'	=> '<b style="color:red">' . $error . '</b><br />&#187; SQL:' . $sql,
			));

			return;
		}

		$template->set_filenames(array(
			'body' => 'install_error.html')
		);
		$this->page_header();
		$this->generate_navigation();

		$template->assign_vars(array(
			'MESSAGE_TITLE'		=> $user->lang['INST_ERR_FATAL_DB'],
			'MESSAGE_TEXT'		=> '<p>' . basename($file) . ' [ ' . $line . ' ]</p><p>SQL : ' . $sql . '</p><p><b>' . $error . '</b></p>',
		));

		// Rollback if in transaction
		if ($db->transaction)
		{
			$db->sql_transaction('rollback');
		}

		$this->page_footer();
	}

	/**
	* Generate the relevant HTML for an input field and the associated label and explanatory text
	*/
	function input_field($name, $type, $value='', $options='')
	{
		global $user;
		$tpl_type = explode(':', $type);
		$tpl = '';

		switch ($tpl_type[0])
		{
			case 'text':
			case 'password':
				$size = (int) $tpl_type[1];
				$maxlength = (int) $tpl_type[2];

				$tpl = '<input id="' . $name . '" type="' . $tpl_type[0] . '"' . (($size) ? ' size="' . $size . '"' : '') . ' maxlength="' . (($maxlength) ? $maxlength : 255) . '" name="' . $name . '" value="' . $value . '" />';
			break;

			case 'textarea':
				$rows = (int) $tpl_type[1];
				$cols = (int) $tpl_type[2];

				$tpl = '<textarea id="' . $name . '" name="' . $name . '" rows="' . $rows . '" cols="' . $cols . '">' . $value . '</textarea>';
			break;

			case 'radio':
				$key_yes	= ($value) ? ' checked="checked" id="' . $name . '"' : '';
				$key_no		= (!$value) ? ' checked="checked" id="' . $name . '"' : '';

				$tpl_type_cond = explode('_', $tpl_type[1]);
				$type_no = ($tpl_type_cond[0] == 'disabled' || $tpl_type_cond[0] == 'enabled') ? false : true;

				$tpl_no = '<label><input type="radio" name="' . $name . '" value="0"' . $key_no . ' class="radio" /> ' . (($type_no) ? $user->lang['NO'] : $user->lang['DISABLED']) . '</label>';
				$tpl_yes = '<label><input type="radio" name="' . $name . '" value="1"' . $key_yes . ' class="radio" /> ' . (($type_no) ? $user->lang['YES'] : $user->lang['ENABLED']) . '</label>';

				$tpl = ($tpl_type_cond[0] == 'yes' || $tpl_type_cond[0] == 'enabled') ? $tpl_yes . '&nbsp;&nbsp;' . $tpl_no : $tpl_no . '&nbsp;&nbsp;' . $tpl_yes;
			break;

			case 'select':
				eval('$s_options = ' . str_replace('{VALUE}', $value, $options) . ';');
				$tpl = '<select id="' . $name . '" name="' . $name . '">' . $s_options . '</select>';
			break;

			case 'custom':
				eval('$tpl = ' . str_replace('{VALUE}', $value, $options) . ';');
			break;

			default:
			break;
		}

		return $tpl;
	}

	/*
	* The following are used perform various operations
	* while installing/updating/removing the arcade
	*/

	/**
	* Add new permission
	*/
	function add_permissions($options)
	{
		$auth_admin = new auth_admin();
		$auth_admin->acl_add_option($options);
	}

	/**
	* Add permission options to roles
	* Takes array or roles and permissions options
	*/
	function update_roles($roles, $options)
	{
		global $db;

		$options_array = array();
		foreach ($options as $option)
		{
			$sql = 'SELECT auth_option_id
				FROM ' . ACL_OPTIONS_TABLE . "
				WHERE auth_option = '$option'";
			$result = $db->sql_query($sql);
			$auth_option_id = $db->sql_fetchfield('auth_option_id');
			$db->sql_freeresult($result);

			$options_array[$option] = $auth_option_id;
		}
		unset($option);

		$roles_array = array();
		foreach ($roles as $role)
		{
			$sql = 'SELECT role_id
				FROM ' . ACL_ROLES_TABLE . "
				WHERE role_name = '$role'";
			$result = $db->sql_query($sql);
			$role_id = $db->sql_fetchfield('role_id');
			$db->sql_freeresult($result);

			$roles_array[$role] = $role_id;
		}
		unset($role);

		$sql_ary = array();
		foreach ($roles_array as $role)
		{
			foreach ($options_array as $option)
			{
				$sql_ary[] = array(
					'role_id'			=> $role,
					'auth_option_id'	=> $option,
					'auth_setting'		=> true,
				);
			}
		}

		$db->sql_multi_insert(ACL_ROLES_DATA_TABLE, $sql_ary);
	}

	/**
	* Add new arcade permission
	*/
	function add_arcade_permissions($options)
	{
		$auth_admin = new auth_arcade_admin();
		$auth_admin->acl_add_option($options);
	}

	/**
	* Add permission options to roles for arcade
	* Takes array or roles and permissions options
	*/
	function update_arcade_roles($roles, $options)
	{
		global $db;

		$options_array = array();
		foreach ($options as $option)
		{
			$sql = 'SELECT auth_option_id
				FROM ' . ACL_ARCADE_OPTIONS_TABLE . "
				WHERE auth_option = '$option'";
			$result = $db->sql_query($sql);
			$auth_option_id = $db->sql_fetchfield('auth_option_id');
			$db->sql_freeresult($result);

			$options_array[$option] = $auth_option_id;
		}
		unset($option);

		$roles_array = array();
		foreach ($roles as $role)
		{
			$sql = 'SELECT role_id
				FROM ' . ACL_ARCADE_ROLES_TABLE . "
				WHERE role_name = '$role'";
			$result = $db->sql_query($sql);
			$role_id = $db->sql_fetchfield('role_id');
			$db->sql_freeresult($result);

			$roles_array[$role] = $role_id;
		}
		unset($role);

		$sql_ary = array();
		foreach ($roles_array as $role)
		{
			foreach ($options_array as $option)
			{
				$sql_ary[] = array(
					'role_id'			=> $role,
					'auth_option_id'	=> $option,
					'auth_setting'		=> true,
				);
			}
		}

		$db->sql_multi_insert(ACL_ARCADE_ROLES_DATA_TABLE, $sql_ary);
	}

	/**
	* Removes permissions from phpBB permissions
	* Completely removes a permission options from
	* all related tables
	*/
	function remove_permissions($options)
	{
		global $db, $cache;

		$auth_option_id = array();
		if (!empty($options['local']))
		{
			foreach($options['local'] as $local)
			{
				$sql = 'SELECT auth_option_id
					FROM ' . ACL_OPTIONS_TABLE . "
				WHERE auth_option = '" . $db->sql_escape($local) . "'";

				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$auth_option_id[] = $row['auth_option_id'];
				}
				$db->sql_freeresult($result);
			}
		}

		if (!empty($options['global']))
		{
			foreach($options['global'] as $global)
			{
				$sql = 'SELECT auth_option_id
					FROM ' . ACL_OPTIONS_TABLE . "
				WHERE auth_option = '" . $db->sql_escape($global) . "'";

				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$auth_option_id[] = $row['auth_option_id'];
				}
				$db->sql_freeresult($result);
			}
		}

		// We now have a list of ids we need to remove from the auth tables...
		if (!empty($auth_option_id))
		{
			$tables = array(ACL_OPTIONS_TABLE, ACL_GROUPS_TABLE, ACL_USERS_TABLE, ACL_ROLES_DATA_TABLE);

			foreach ($tables as $table)
			{
				$sql = "DELETE FROM $table
					WHERE " . $db->sql_in_set('auth_option_id', array_map('intval', $auth_option_id));
				$db->sql_query($sql);
			}

			$auth_admin = new auth_admin();
			$cache->destroy('_acl_options');
			$auth_admin->acl_clear_prefetch();
		}
	}

	/**
	* Removes permissions from arcade permissions
	* Completely removes a permission options from
	* all related tables
	*/
	function remove_arcade_permissions($options)
	{
		global $db, $cache, $table_prefix, $phpbb_root_path, $phpEx;

		$auth_option_id = array();
		if (!empty($options['local']))
		{
			foreach($options['local'] as $local)
			{
				$sql = 'SELECT auth_option_id
					FROM ' . ACL_ARCADE_OPTIONS_TABLE . "
				WHERE auth_option = '" . $db->sql_escape($local) . "'";

				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$auth_option_id[] = $row['auth_option_id'];
				}
				$db->sql_freeresult($result);
			}
		}

		if (!empty($options['global']))
		{
			foreach($options['global'] as $global)
			{
				$sql = 'SELECT auth_option_id
					FROM ' . ACL_ARCADE_OPTIONS_TABLE . "
				WHERE auth_option = '" . $db->sql_escape($global) . "'";

				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$auth_option_id[] = $row['auth_option_id'];
				}
				$db->sql_freeresult($result);
			}
		}

		// We now have a list of ids we need to remove from the auth tables...
		if (!empty($auth_option_id))
		{
			$tables = array(ACL_ARCADE_OPTIONS_TABLE, ACL_ARCADE_GROUPS_TABLE, ACL_ARCADE_USERS_TABLE, ACL_ARCADE_ROLES_DATA_TABLE);

			foreach ($tables as $table)
			{
				$sql = "DELETE FROM $table
					WHERE " . $db->sql_in_set('auth_option_id', array_map('intval', $auth_option_id));
				$db->sql_query($sql);
			}

			$auth_admin = new auth_arcade_admin();
			$cache->destroy('_acl_arcade_options');
			$auth_admin->acl_clear_prefetch();
		}
	}

	/**
	* Creates modules
	* Creates parents and adds modules
	* Correct format is in config.php file in install directory
	*/
	function create_modules($parent_module_data, $module_data)
	{
		global $phpbb_root_path, $phpEx, $db;
		$_module = new acp_modules();
		$_module->module_class = $parent_module_data['module_class'];

		$db->sql_error_triggered = false;

		// If the module class is acp we add it to the Arcade tab in the ACP
		if ($parent_module_data['module_class'] == 'acp')
		{
			$sql = 'SELECT module_id
				FROM ' . MODULES_TABLE . "
				WHERE module_langname = 'ACP_CAT_ARCADE'";
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);

			// Create Arcade tab if missing and get id again
			if(!$row)
			{
				$parent_tab = array(
					'module_basename' 	=> '',
					'module_enabled'	=> '1',
					'module_display' 	=> '1',
					'parent_id' 		=> '0',
					'module_class' 		=> 'acp',
					'module_langname' 	=> 'ACP_CAT_ARCADE',
					'module_mode' 		=> '',
					'module_auth' 		=> '',
				);

				$_module->update_module_data($parent_tab, true);
				add_log('admin', 'LOG_MODULE_ADD', $_module->lang_name($parent_tab['module_langname']));

				$sql = 'SELECT module_id
					FROM ' . MODULES_TABLE . "
					WHERE module_langname = 'ACP_CAT_ARCADE'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);
			}

			$parent_module_data['parent_id'] = $row['module_id'];
		}

		// Add category
		$_module->update_module_data($parent_module_data, true);
		$_module->remove_cache_file();

		// Check for last sql error happened
		if ($db->sql_error_triggered)
		{
			$db->sql_error_triggered = false;
			$error = $db->sql_error($db->sql_error_sql);
			$this->db_error($error['message'], $db->sql_error_sql, __LINE__, __FILE__);
		}
		else
		{
			add_log('admin', 'LOG_MODULE_ADD', $_module->lang_name($parent_module_data['module_langname']));
		}

		$sql = 'SELECT module_id
			FROM ' . MODULES_TABLE . "
			WHERE module_langname = '{$parent_module_data['module_langname']}'
				AND module_class = '{$parent_module_data['module_class']}'";
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		for ($i = 0, $count = sizeof($module_data);$i < $count; $i++)
		{
			$module_data[$i]['parent_id'] = $row['module_id'];
			$_module->update_module_data($module_data[$i], true);
			$_module->remove_cache_file();

			// Check for last sql error happened
			if ($db->sql_error_triggered)
			{
				$db->sql_error_triggered = false;
				$error = $db->sql_error($db->sql_error_sql);
				$this->db_error($error['message'], $db->sql_error_sql, __LINE__, __FILE__);
			}
			else
			{
				add_log('admin', 'LOG_MODULE_ADD', $_module->lang_name($module_data[$i]['module_langname']));
			}
		}

		return;
	}

	/**
	* Adds modules to an existing parent
	*/
	function add_modules($parent_module_langname, $parent_module_class, $module_data)
	{
		global $phpbb_root_path, $phpEx, $db;
		$_module = new acp_modules();
		$_module->module_class = $parent_module_class;

		$db->sql_error_triggered = false;

		$sql = 'SELECT module_id
			FROM ' . MODULES_TABLE . "
			WHERE module_langname = '$parent_module_langname'
				AND module_class = '$parent_module_class'";
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		if ($row)
		{
			for ($i = 0, $count = sizeof($module_data);$i < $count; $i++)
			{
				$module_data[$i]['parent_id'] = $row['module_id'];
				$_module->update_module_data($module_data[$i], true);
				$_module->remove_cache_file();

				// Check for last sql error happened
				if ($db->sql_error_triggered)
				{
					$db->sql_error_triggered = false;
					$error = $db->sql_error($db->sql_error_sql);
					$this->db_error($error['message'], $db->sql_error_sql, __LINE__, __FILE__);
				}
				else
				{
					add_log('admin', 'LOG_MODULE_ADD', $_module->lang_name($module_data[$i]['module_langname']));
				}
			}
		}

		return;
	}

	/**
	* Remove module data
	* Expects module_data to be an array of module_basename's to remove
	* Expects parent_module_data to be an array of module_langname's to remove
	*/
	function remove_modules($parent_module_data, $module_data)
	{
		global $db;
		$_module = new acp_modules();

		$db->sql_error_triggered = false;

		if (!empty($module_data))
		{
			$sql = 'SELECT module_id, module_class
				FROM ' . MODULES_TABLE . '
				WHERE ' . $db->sql_in_set('module_basename', $module_data);
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				$_module->module_class = $row['module_class'];
				$_module->delete_module($row['module_id']);
				// Check for last sql error happened
				if ($db->sql_error_triggered)
				{
					$db->sql_error_triggered = false;
					$error = $db->sql_error($db->sql_error_sql);
					$this->db_error($error['message'], $db->sql_error_sql, __LINE__, __FILE__);
				}
			}
			$db->sql_freeresult($result);
		}

		if (!empty($parent_module_data))
		{
			// Needs to be ordered descending so that we can remove the parent module (tab) last
			$sql = 'SELECT module_id, module_class
				FROM ' . MODULES_TABLE . '
				WHERE ' . $db->sql_in_set('module_langname', $parent_module_data) . '
				ORDER BY module_id DESC';
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				$_module->module_class = $row['module_class'];
				$_module->delete_module($row['module_id']);
				// Check for last sql error happened
				if ($db->sql_error_triggered)
				{
					$db->sql_error_triggered = false;
					$error = $db->sql_error($db->sql_error_sql);
					$this->db_error($error['message'], $db->sql_error_sql, __LINE__, __FILE__);
				}
			}
			$db->sql_freeresult($result);
		}

		return;
	}

	/**
	* Remove single module
	* Expects module_data to be an array of module_basename, module_langname and module_mode to remove
	*/
	function remove_module($module_data)
	{
		global $db;
		$_module = new acp_modules();

		$db->sql_error_triggered = false;

		if (!empty($module_data))
		{
			$sql = 'SELECT module_id, module_class
				FROM ' . MODULES_TABLE . "
				WHERE module_basename = '" . $module_data['module_basename'] . "'
					AND module_langname = '" . $module_data['module_langname'] . "'
					AND module_mode = '" . $module_data['module_mode'] . "'";
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				$_module->module_class = $row['module_class'];
				$_module->delete_module($row['module_id']);
				// Check for last sql error happened
				if ($db->sql_error_triggered)
				{
					$db->sql_error_triggered = false;
					$error = $db->sql_error($db->sql_error_sql);
					$this->db_error($error['message'], $db->sql_error_sql, __LINE__, __FILE__);
				}
			}
			$db->sql_freeresult($result);
		}

		return;
	}

	/**
	* Load schema table files and display run queries
	*/
	function load_tables($prefix = '')
	{
		global $user, $db, $dbms, $table_prefix, $template;

		$available_dbms = get_available_dbms($dbms);
		// If mysql is chosen, we need to adjust the schema filename slightly to reflect the correct version. ;)
		if ($dbms == 'mysql')
		{
			if (version_compare((isset($db->mysql_version)) ? $db->mysql_version : $db->sql_server_info(true), '4.1.3', '>='))
			{
				$available_dbms[$dbms]['SCHEMA'] .= '_41';
			}
			else
			{
				$available_dbms[$dbms]['SCHEMA'] .= '_40';
			}
		}

		// Ok we have the db info go ahead and read in the relevant schema
		// and work on building the table
		$dbms_schema = 'schemas/arcade/' . $prefix . $available_dbms[$dbms]['SCHEMA'] . '_schema.sql';

		// How should we treat this schema?
		$remove_remarks = $available_dbms[$dbms]['COMMENTS'];
		$delimiter = $available_dbms[$dbms]['DELIM'];

		$sql_query = @file_get_contents($dbms_schema);
		$sql_query = preg_replace('#phpbb_#i', $table_prefix, $sql_query);
		$remove_remarks($sql_query);

		$sql_query = split_sql_file($sql_query, $delimiter);

		$sql_results = '';
		foreach ($sql_query as $sql)
		{
			if (!$db->sql_query($sql))
			{
				$error = $db->sql_error();
				$this->db_error($error['message'], $sql, __LINE__, __FILE__, true);
			}
			else
			{
				$sql_results .= preg_replace('/\t(AND|OR)(\W)/', "\$1\$2", htmlspecialchars(preg_replace('/[\s]*[\n\r\t]+[\n\r\s\t]*/', "\n", $sql))) . "\n\n";
			}
		}

		$template->assign_block_vars('checks', array(
			'S_LEGEND'	=> true,
		));

		$template->assign_block_vars('checks', array(
			'TITLE'		=> $user->lang['INST_SQL_RESULTS'],
			'RESULT'	=> '<textarea rows="10" cols="10">' . trim($sql_results) . '</textarea>',
		));

		unset($sql_query, $sql_results);
	}

	/**
	* Load schema data files and display run queries
	*/
	function load_data($file)
	{
		global $user, $db, $dbms, $table_prefix, $template;

		// Ok tables have been built, let's fill in the basic information
		$sql_query = file_get_contents($file);

		// Deal with any special comments
		switch ($dbms)
		{
			case 'mssql':
			case 'mssql_odbc':
				$sql_query = preg_replace('#\# MSSQL IDENTITY (phpbb_[a-z_]+) (ON|OFF) \##s', 'SET IDENTITY_INSERT \1 \2;', $sql_query);
			break;

			case 'postgres':
				$sql_query = preg_replace('#\# POSTGRES (BEGIN|COMMIT) \##s', '\1; ', $sql_query);
			break;
		}

		// Change prefix
		$sql_query = preg_replace('#phpbb_#i', $table_prefix, $sql_query);

		// Change language strings...
		$sql_query = preg_replace_callback('#\{L_([A-Z0-9\-_]*)\}#s', 'adjust_language_keys_callback', $sql_query);

		// Since there is only one schema file we know the comment style and are able to remove it directly with remove_remarks
		remove_remarks($sql_query);
		$sql_query = split_sql_file($sql_query, ';');

		$sql_results = '';
		foreach ($sql_query as $sql)
		{
			if (!$db->sql_query($sql))
			{
				$error = $db->sql_error();
				$this->db_error($error['message'], $sql, __LINE__, __FILE__, true);
			}
			else
			{
				$sql_results .= preg_replace('/\t(AND|OR)(\W)/', "\$1\$2", htmlspecialchars(preg_replace('/[\s]*[\n\r\t]+[\n\r\s\t]*/', "\n", $sql))) . "\n\n";
			}
		}

		$template->assign_block_vars('checks', array(
			'S_LEGEND'	=> true,
		));

		$template->assign_block_vars('checks', array(
			'TITLE'		=> $user->lang['INST_SQL_RESULTS'],
			'RESULT'	=> '<textarea rows="10" cols="10">' . trim($sql_results) . '</textarea>',
		));

		unset($sql_query, $sql_results);
	}

	/**
	* Format version strings in correctly to compare
	*/
	function format_version($version)
	{
		$find = array('rc', ' ');
		$replace = array('RC', '.');

		return str_replace($find, $replace, strtolower($version));
	}

	/**
	* Set config value. Creates missing config entry.
	*/
	function set_config($config_name, $config_value)
	{
		global $db, $cache;

		$sql = 'UPDATE ' . ARCADE_CONFIG_TABLE . "
			SET config_value = '" . $db->sql_escape($config_value) . "'
			WHERE config_name = '" . $db->sql_escape($config_name) . "'";
		$db->sql_query($sql);

		if (!$db->sql_affectedrows())
		{
			$sql = 'INSERT INTO ' . ARCADE_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
				'config_name'	=> $config_name,
				'config_value'	=> $config_value));
			$db->sql_query($sql);
		}

		// Destroy the cache of the config
		// because the values have changed
		$cache->destroy('_arcade');
	}

	/**
	* Remove config value.
	*/
	function remove_config($config_name)
	{
		global $db, $cache;

		$sql = 'DELETE FROM ' . ARCADE_CONFIG_TABLE . "
			WHERE config_name = '" . $db->sql_escape($config_name) . "'";
		$db->sql_query($sql);

		// Destroy the cache of the config
		// because the table has changed
		$cache->destroy('_arcade');
	}
}
?>