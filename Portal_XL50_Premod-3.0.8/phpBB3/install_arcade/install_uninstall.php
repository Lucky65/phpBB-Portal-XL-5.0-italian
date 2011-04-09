<?php
/**
*
* @package install
* @version $Id: install_uninstall.php 791 2009-06-19 14:43:28Z JRSweets $
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
	if (!$this->installed_version)
	{
		return;
	}

	$module[] = array(
		'module_type'		=> 'install',
		'module_title'		=> 'UNINSTALL',
		'module_filename'	=> substr(basename(__FILE__), 0, -strlen($phpEx)-1),
		'module_order'		=> 30,
		'module_subs'		=> '',
		'module_stages'		=> array('INTRO', 'UNINSTALL'),
		'module_reqs'		=> ''
	);
}

/**
* Installation
* @package install
*/
class install_uninstall extends module
{
	function install_uninstall(&$p_master)
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
					'TITLE'			=> $user->lang['UNINSTALL_INTRO'],
					'BODY'			=> $user->lang['UNINSTALL_INTRO_BODY'],
					'L_SUBMIT'		=> $user->lang['UNINSTALL_START'],
					'U_ACTION'		=> $this->p_master->module_url . "?mode=$mode&amp;sub=uninstall",
				));

			break;

			case 'uninstall':
				$this->uninstall($mode, $sub);

			break;
		}

		$this->tpl_name = 'install_install';
	}

	/**
	* Obtain the information required to connect to the database
	*/
	function uninstall($mode, $sub)
	{
		global $user, $template, $cache, $phpEx, $phpbb_root_path, $phpbb_db_tools, $db, $mod_config;

		$this->page_title = $user->lang['STAGE_UNINSTALL_ARCADE'];

		// Remove all the arcade tables.
		foreach ($mod_config['install_check']['tables'] as $table_name)
		{
			$phpbb_db_tools->sql_table_drop($table_name);
		}

		if (isset($mod_config['remove_data_file']))
		{
			$this->p_master->load_data($mod_config['remove_data_file']);
		}

		if (isset($mod_config['remove_schema_changes']))
		{
			// Remove any changes made to existing tables
			$phpbb_db_tools->perform_schema_changes($mod_config['remove_schema_changes']);
		}

		// Remove all permission options
		$this->p_master->remove_permissions($mod_config['permission_options']);

		// Just in case, we remove the older permission options if still there
		$old_perm = array();
		$old_perm['global'] = $mod_config['old_permission_options'];
		$this->p_master->remove_permissions($old_perm);

		// Remove modules
		$this->p_master->remove_modules($mod_config['parent_module_remove'], $mod_config['module_remove']);

		// Clear prefetch and permissions cache
		$auth_admin = new auth_admin();
		$cache->destroy('_acl_options');
		$auth_admin->acl_clear_prefetch();

		// Purge the cache
		$cache->purge();
		add_log('admin', 'LOG_ARCADE_UNINSTALL', $mod_config['mod_version']);

		$template->assign_vars(array(
			'BODY'		=> $user->lang['STAGE_UNINSTALL_ARCADE_EXPLAIN'] . '<br /><br />' . sprintf($user->lang['UNINSTALL_CONGRATS_EXPLAIN'], $mod_config['mod_version']),
			'L_SUBMIT'	=> $user->lang['INSTALL_LOGIN'],
			'U_ACTION'	=> append_sid("{$phpbb_root_path}adm/index.$phpEx", false, true, $user->session_id),
		));
	}
}

?>