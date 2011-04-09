<?php
/**
*
* @package install_upgrade_premod.php
* @package Modification Installer for phpBB3 Portal XL
* @version $Id: install_upgrade_premod.php,v 1.2 2009/10/20 damysterious Exp $
* @revision translation in Italian for Portal Xl Premod 2011/04/01 Lucky Luckylab.eu
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* @some code borrowed from phpBB's installer
* @copyright (c) 2005 phpBB Group
*/

/**
*/
if (!defined('IN_INSTALL'))
{
	// Someone has tried to access the file direct. This is not a good idea, so exit
	exit;
}

if (!empty($setmodules))
{
	// If phpBB is already installed we do not include this module
	if (@file_exists($phpbb_root_path . 'config.' . $phpEx) && !file_exists($phpbb_root_path . 'cache/install_lock'))
	{
		include_once($phpbb_root_path . 'config.' . $phpEx);

		if (!defined('PORTAL'))
		{
			return;
		}
	}

	$module[] = array(
		'module_type'		=> 'install',
		'module_title'		=> 'UPGRADE_PREMOD',
		'module_filename'	=> substr(basename(__FILE__), 0, -strlen($phpEx)-1),
		'module_order'		=> 20,
		'module_subs'		=> '',
		'module_stages'		=> array('INTRO', 'UPDATE_DB', 'INSERT_MODULES', 'FINAL', 'ADDITIONAL'),
		'module_reqs'		=> ''
	);
}

/**
* Class holding all specific details.
* @package install
*/
class upgrade_premod
{
	var $cur_release = 'Premod';

	var $p_master;

	function upgrade_premod(&$p_master)
	{
		$this->p_master = &$p_master;
	}
}

/**
* Convert class for conversions
* @package install
*/
class install_upgrade_premod extends module
{
	/**
	* Variables used while converting, they are accessible from the global variable $convert
	*/
	function install_upgrade_premod(&$p_master)
	{
		$this->p_master = &$p_master;
	}

	function main($mode, $sub)
	{
		global $lang, $template, $phpbb_root_path, $phpEx, $cache, $config, $language, $table_prefix;

		$this->mode = $mode;

		$upgrade_premod = new upgrade_premod($this->p_master);

		switch ($sub)
		{
			case 'intro':
				$this->page_title = $lang['PORTAL_UPGRADE'];

				// Try opening config file
				// @todo If phpBB is not installed, we need to do a cut-down installation here
				// For now, we redirect to the installation script instead
				if (@file_exists($phpbb_root_path . 'config.' . $phpEx))
				{
					include($phpbb_root_path . 'config.' . $phpEx);
				}

				if (!defined('PHPBB_INSTALLED'))
				{
					$template->assign_vars(array(
						'S_NOT_INSTALLED'		=> true,
						'TITLE'					=> $lang['BOARD_NOT_INSTALLED'],
						'BODY'					=> sprintf($lang['BOARD_NOT_INSTALLED_EXPLAIN'], append_sid($phpbb_root_path . 'install_portal/index.' . $phpEx, 'mode=install&amp;language=' . $language)),
						
						'S_LANG_SELECT'			=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
					));

					return;
				}
				
				if (!defined('PORTAL'))
				{
					$template->assign_vars(array(
						'S_NOT_INSTALLED'		=> true,
						'TITLE'					=> $lang['PORTAL_NOT_INSTALLED'],
						'BODY'					=> sprintf($lang['PORTAL_UPGRADE_NOT_INSTALLED_EXPLAIN'], append_sid($phpbb_root_path . 'install_portal/index.' . $phpEx, 'mode=install&amp;language=' . $language)),
						
						'S_LANG_SELECT'			=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
					));

					return;
				}

				require($phpbb_root_path . 'config.' . $phpEx);
				require($phpbb_root_path . 'includes/db/' . $dbms . '.' . $phpEx);
		
				$db = new $sql_db();
				$db->sql_connect($dbhost, $dbuser, $dbpasswd, $dbname, $dbport, false, true);
				unset($dbpasswd);

				if (!defined('PORTAL_CONFIG_TABLE'))
				{
					require($phpbb_root_path . 'includes/constants.' . $phpEx);
				}

				$sql = 'SELECT config_value
					FROM ' . PORTAL_CONFIG_TABLE . "
					WHERE config_name = 'portal_version'";
				$result = $db->sql_query($sql);
		
				while ($row = $db->sql_fetchrow($result))
				{
					$portal_version = $row['config_value'];
				}
				$db->sql_freeresult($result);
		
				if ((!defined('PORTAL') && $portal_version >= 'Plain') || !$portal_version || $portal_version < '0.0.0' || ($portal_version >= $upgrade_premod->cur_release && !in_array($portal_version, array('RC4 - Plain', 'Plain', 'Plain 0.1', 'Plain 0.2'))))
				{
					$template->assign_vars(array(
						'S_NOT_INSTALLED'		=> true,
						'TITLE'					=> $lang['PORTAL_UPDATE'],
						'BODY'					=> sprintf($lang['PORTAL_UPDATE_NOT_POSSIBLE'], $portal_version, $upgrade_premod->cur_release),
						
						'S_LANG_SELECT'			=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
					));

					return;
				}

				$s_hidden_fields = '<input type="hidden" name="mode" value="upgrade_premod" />';
				$s_hidden_fields .= '<input type="hidden" name="sub" value="update_db" />';

				$template->assign_vars(array(
					'L_SUBMIT'				=> $lang['UPDATE_DATABASE'],
					'TITLE'					=> $lang['PORTAL_UPGRADE'],
					'BODY'					=> sprintf($lang['PORTAL_UPGRADE_TODO'], $portal_version, $upgrade_premod->cur_release),
					'S_HIDDEN_FIELDS'		=> $s_hidden_fields,
					'U_ACTION'				=> append_sid($phpbb_root_path . 'install_portal/index.' . $phpEx),
						
					'S_LANG_SELECT'			=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
				));

			break;

			case 'update_db':
				$this->update_data($sub);

			break;

			case 'insert_modules':
				$this->page_title = $lang['ACP_MODULE_MANAGEMENT'];

				require($phpbb_root_path . 'config.' . $phpEx);
				require($phpbb_root_path . 'includes/constants.' . $phpEx);
				require($phpbb_root_path . 'includes/db/' . $dbms . '.' . $phpEx);
		
				$db = new $sql_db();
				$db->sql_connect($dbhost, $dbuser, $dbpasswd, $dbname, $dbport, false, true);
				unset($dbpasswd);

				// Check existing mods tab on acp 
				$sql = "SELECT module_id FROM " . MODULES_TABLE . "
					WHERE module_langname = 'ACP_CAT_DOT_MODS'
						AND module_class = 'acp'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);
				
				$choosen_acp_module = intval($row['module_id']);
				
				// Create mods tab, if not found
				if ($choosen_acp_module <= 0)
				{
					$acp_mods_tab = array('module_basename' => '',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => 0,	'module_class' => 'acp',	'module_langname'=> 'ACP_CAT_DOT_MODS',	'module_mode' => '',	'module_auth' => '');
					$this->add_module($acp_mods_tab, $db);
					$choosen_acp_module = $db->sql_nextid();
				}
				else
				{
					$sql = "UPDATE " . MODULES_TABLE . " SET
						module_enabled = 1, module_display = 1
						WHERE module_class = 'ACP'
							AND module_langname = 'ACP_CAT_DOT_MODS'";
					$db->sql_query($sql);
				}

				// Add new Download MOD modules
				$dl_mod = array(
					'module_basename'   => '', // must be blank for category
					'module_mode'      	=> '', // must be blank for category/tab
					'module_auth'      	=> '', // must be blank for category/tab
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module, // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
					'module_langname'   => 'ACP_DOWNLOADS', //language key or just a string for the name -- must include
					'module_class'      => 'acp');
				$this->add_module($dl_mod, $db);
				$acp_module_id = $db->sql_nextid();
				
				$dl_mod_overview = array(
					'module_basename' 	=> 'downloads',	
					'module_mode' 		=> 'overview',	
					'module_auth' 		=> 'acl_a_dl_overview',
					'module_enabled' 	=> 1,	
					'module_display' 	=> 1,	
					'parent_id' 		=> $acp_module_id,	
					'module_langname'	=> 'ACP_USER_OVERVIEW',	
					'module_class' 		=> 'acp');	
				$this->add_module($dl_mod_overview, $db);
				$dl_mod_config = array(
					'module_basename' 	=> 'downloads',	
					'module_mode' 		=> 'config',	
					'module_auth' 		=> 'acl_a_dl_config',
					'module_enabled' 	=> 1,	
					'module_display' 	=> 1,	
					'parent_id' 		=> $acp_module_id,	
					'module_langname'	=> 'DL_ACP_CONFIG_MANAGEMENT',	
					'module_class' 		=> 'acp');	
				$this->add_module($dl_mod_config, $db);
				$dl_mod_traffic 		= array(
					'module_basename' 	=> 'downloads',	
					'module_mode' 		=> 'traffic',	
					'module_auth' 		=> 'acl_a_dl_traffic',
					'module_enabled' 	=> 1,	
					'module_display' 	=> 1,	
					'parent_id' 		=> $acp_module_id,	
					'module_langname'	=> 'DL_ACP_TRAFFIC_MANAGEMENT',	
					'module_class' 		=> 'acp');	
				$this->add_module($dl_mod_traffic, $db);
				$dl_mod_categories = array(
					'module_basename' 	=> 'downloads',	
					'module_mode' 		=> 'categories',	
					'module_auth' 		=> 'acl_a_dl_categories',
					'module_enabled' 	=> 1,	
					'module_display' 	=> 1,	
					'parent_id' 		=> $acp_module_id,	
					'module_langname'	=> 'DL_ACP_CATEGORIES_MANAGEMENT',	
					'module_class' 		=> 'acp');	
				$this->add_module($dl_mod_categories, $db);
				$dl_mod_files = array(
					'module_basename' 	=> 'downloads',	
					'module_mode' 		=> 'files',	
					'module_auth' 		=> 'acl_a_dl_files',
					'module_enabled' 	=> 1,	
					'module_display' 	=> 1,	
					'parent_id' 		=> $acp_module_id,	
					'module_langname'	=> 'DL_ACP_FILES_MANAGEMENT',	
					'module_class' 		=> 'acp');	
				$this->add_module($dl_mod_files, $db);
				$dl_mod_permissions = array(
					'module_basename' 	=> 'downloads',	
					'module_mode' 		=> 'permissions',	
					'module_auth' 		=> 'acl_a_dl_permissions',
					'module_enabled' 	=> 1,	
					'module_display' 	=> 1,	
					'parent_id' 		=> $acp_module_id,	
					'module_langname'	=> 'DL_ACP_PERMISSIONS',	
					'module_class' 		=> 'acp');	
				$this->add_module($dl_mod_permissions, $db);
				$dl_mod_stats = array(
					'module_basename' 	=> 'downloads',	
					'module_mode' 		=> 'stats',	
					'module_auth' 		=> 'acl_a_dl_stats',
					'module_enabled' 	=> 1,	
					'module_display' 	=> 1,	
					'parent_id' 		=> $acp_module_id,	
					'module_langname'	=> 'DL_ACP_STATS_MANAGEMENT',	
					'module_class' 		=> 'acp');	
				$this->add_module($dl_mod_stats, $db);
				$dl_mod_banlist = array(
					'module_basename' 	=> 'downloads',	
					'module_mode' 		=> 'banlist',	
					'module_auth' 		=> 'acl_a_dl_banlist',
					'module_enabled' 	=> 1,	
					'module_display' 	=> 1,	
					'parent_id' 		=> $acp_module_id,	
					'module_langname' 	=> 'DL_ACP_BANLIST',	
					'module_class' 		=> 'acp');	
				$this->add_module($dl_mod_banlist, $db);
				$dl_mod_blacklist = array(
					'module_basename' 	=> 'downloads',	
					'module_mode' 		=> 'ext_blacklist',	
					'module_auth' 		=> 'acl_a_dl_blacklist',
					'module_enabled' 	=> 1,	
					'module_display' 	=> 1,	
					'parent_id' 		=> $acp_module_id,	
					'module_langname' 	=> 'DL_EXT_BLACKLIST',	
					'module_class' 		=> 'acp');	
				$this->add_module($dl_mod_blacklist, $db);
				$dl_mod_toolbox = array(
					'module_basename' 	=> 'downloads',	
					'module_mode' 		=> 'toolbox',	
					'module_auth' 		=> 'acl_a_dl_toolbox',
					'module_enabled' 	=> 1,	
					'module_display' 	=> 1,	
					'parent_id' 		=> $acp_module_id,	
					'module_langname' 	=> 'DL_MANAGE',	
					'module_class' 		=> 'acp');	
				$this->add_module($dl_mod_toolbox, $db);
				// -- New on 6.4.0 
				$dl_mod_fields = array(
					'module_basename' 	=> 'downloads',	
					'module_mode' 		=> 'fields',	
					'module_auth' 		=> 'acl_a_dl_fields',
					'module_enabled' 	=> 1,	
					'module_display' 	=> 1,	
					'parent_id' 		=> $acp_module_id,	
					'module_langname' 	=> 'DL_ACP_FIELDS',	
					'module_class' 		=> 'acp');	
				$this->add_module($dl_mod_fields, $db);


				// Add new Knowledge Base MOD modules
				$kb_mod = array(
					'module_basename'   => '', // must be blank for category
					'module_mode'      	=> '', // must be blank for category/tab
					'module_auth'      	=> '', // must be blank for category/tab
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module, // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
					'module_langname'   => 'KB_NAME', //language key or just a string for the name -- must include
					'module_class'      => 'acp');
				$this->add_module($kb_mod, $db);
				$acp_module_id = $db->sql_nextid();

				$kb_mod_main = array(
					'module_basename'   => 'kb',
					'module_mode'      	=> 'main',
					'module_auth'      	=> 'acl_a_categorie_kb',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'CATEGORIES',
					'module_class'      => 'acp');
				$this->add_module($kb_mod_main, $db);
				$kb_mod_config = array(
					'module_basename'   => 'kb',
					'module_mode'      	=> 'config',
					'module_auth'      	=> 'acl_a_config_kb',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'KB_CONFIG',
					'module_class'      => 'acp');
				$this->add_module($kb_mod_config, $db);
				$kb_mod_types = array(
					'module_basename'   => 'kb',
					'module_mode'      	=> 'types',
					'module_auth'      	=> 'acl_a_types_kb',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'TYPES',
					'module_class'      => 'acp');
				$this->add_module($kb_mod_types, $db);


				// Add new Calendar MOD modules
				$cal_mod = array(
					'module_basename'   => '', // must be blank for category
					'module_mode'      	=> '', // must be blank for category/tab
					'module_auth'      	=> '', // must be blank for category/tab
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module, // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
					'module_langname'   => 'ACP_CALENDAR', //language key or just a string for the name -- must include
					'module_class'      => 'acp');
				$this->add_module($cal_mod, $db);
				$acp_module_id = $db->sql_nextid();

				$cal_settings = array(
					'module_basename'   => 'calendar',
					'module_mode'      	=> 'calsettings',
					'module_auth'      	=> 'acl_a_calendar',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_CALENDAR_SETTINGS',
					'module_class'      => 'acp');
				$this->add_module($cal_settings, $db);
				$cal_etypes = array(
					'module_basename'   => 'calendar',
					'module_mode'      	=> 'caletypes',
					'module_auth'      	=> 'acl_a_calendar',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_CALENDAR_ETYPES',
					'module_class'      => 'acp');
				$this->add_module($cal_etypes, $db);


				// Add new log_connections MOD modules
				$lc_mod = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'ACP_LC',
					'module_class'      => 'acp');
				$this->add_module($lc_mod, $db);
				$acp_module_id = $db->sql_nextid();

				$lc_log_connections = array(
					'module_basename'   => 'lc',
					'module_mode'      	=> 'log_connections',
					'module_auth'      	=> 'acl_a_board',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_CONNECTIONS_SETTINGS',
					'module_class'      => 'acp');
				$this->add_module($lc_log_connections, $db);
				$lc_connections = array(
					'module_basename'   => 'lc',
					'module_mode'      	=> 'connections',
					'module_auth'      	=> 'acl_a_viewlogs',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_CONNECTIONS_LOGS',
					'module_class'      => 'acp');
				$this->add_module($lc_connections, $db);


				// Add new add_user MOD modules
				$add_user_mod = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'ACP_CAT_USERS',
					'module_class'      => 'acp');
				$this->add_module($add_user_mod, $db);
				$acp_module_id = $db->sql_nextid();

				$add_user = array(
					'module_basename'   => 'add_user',
					'module_mode'      	=> 'add_user',
					'module_auth'      	=> 'acl_a_user',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_ADD_USER_ACCOUNT',
					'module_class'      => 'acp');
				$this->add_module($add_user, $db);
				$pm_spy = array(
					'module_basename'   => 'pm_spy',
					'module_mode'      	=> 'main',
					'module_auth'      	=> 'acl_a_pm_spy',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_PM_SPY',
					'module_class'      => 'acp');
				$this->add_module($pm_spy, $db);


				// Add new faq_manager MOD modules
				$faq_mod = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'ACP_FAQ_MANAGER',
					'module_class'      => 'acp');
				$this->add_module($faq_mod, $db);
				$acp_module_id = $db->sql_nextid();

				$faq_manager = array(
					'module_basename'   => 'faq_manager',
					'module_mode'      	=> 'default',
					'module_auth'      	=> 'acl_a_language',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_FAQ_MANAGER',
					'module_class'      => 'acp');
				$this->add_module($faq_manager, $db);


				// Add new shoutbox MOD modules
				$shoutbox = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'ACP_AS_MANAGEMENT',
					'module_class'      => 'acp');
				$this->add_module($shoutbox, $db);
				$acp_module_id = $db->sql_nextid();

				$shoutbox_overview = array(
					'module_basename'   => 'shoutbox',
					'module_mode'      	=> 'overview',
					'module_auth'      	=> 'acl_a_as_manage',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_AS_OVERVIEW',
					'module_class'      => 'acp');
				$this->add_module($shoutbox_overview, $db);
				$shoutbox_settings = array(
					'module_basename'   => 'shoutbox',
					'module_mode'      	=> 'settings',
					'module_auth'      	=> 'acl_a_as_manage',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_AS_SETTINGS',
					'module_class'      => 'acp');
				$this->add_module($shoutbox_settings, $db);


				// Add new shoutbox MOD modules
				$announcements_centre = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'ACP_ANNOUNCEMENTS_CENTRE',
					'module_class'      => 'acp');
				$this->add_module($announcements_centre, $db);
				$acp_module_id = $db->sql_nextid();

				$announcements_centre_default = array(
					'module_basename'   => 'announcements_centre',
					'module_mode'      	=> 'default',
					'module_auth'      	=> 'acl_a_board',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_ANNOUNCEMENTS_CENTRE',
					'module_class'      => 'acp');
				$this->add_module($announcements_centre_default, $db);


				// Add new Imprint modules
				$impressum = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'IMPRESSUM',
					'module_class'      => 'acp');
				$this->add_module($impressum, $db);
				$acp_module_id = $db->sql_nextid();

				$edit_impressum = array(
					'module_basename'   => 'impressum',
					'module_mode'      	=> 'edit_impressum',
					'module_auth'      	=> 'acl_a_board',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'IMPRESSUM',
					'module_class'      => 'acp');
				$this->add_module($edit_impressum, $db);


				// Add new SEO modules
				$acp_portal_seo = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'ACP_CAT_PHPBB_SEO',
					'module_class'      => 'acp',
				);
				$this->add_module($acp_portal_seo, $db);
				$acp_module_id = $db->sql_nextid();

				$acp_portal_seo_settings = array(
					'module_basename'   => 'phpbb_seo',
					'module_mode'       => 'settings',
					'module_auth'       => 'acl_a_board',
					'module_enabled'    => 1,
					'module_display'    => 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_PHPBB_SEO_CLASS',
					'module_class'      => 'acp',
				);
				$this->add_module($acp_portal_seo_settings, $db);
				$acp_portal_seo_forum_url = array(
					'module_basename'   => 'phpbb_seo',
					'module_mode'       => 'forum_url',
					'module_auth'       => 'acl_a_board',
					'module_enabled'    => 1,
					'module_display'    => 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_FORUM_URL',
					'module_class'      => 'acp',
				);
				$this->add_module($acp_portal_seo_forum_url, $db);
				$acp_portal_seo_htaccess = array(
					'module_basename'   => 'phpbb_seo',
					'module_mode'       => 'htaccess',
					'module_auth'       => 'acl_a_board',
					'module_enabled'    => 1,
					'module_display'    => 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_HTACCESS',
					'module_class'      => 'acp',
				);
				$this->add_module($acp_portal_seo_htaccess, $db);
				$acp_portal_seo_extended = array(
					'module_basename'   => 'phpbb_seo',
					'module_mode'       => 'extended',
					'module_auth'       => 'acl_a_board',
					'module_enabled'    => 1,
					'module_display'    => 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_SEO_EXTENDED',
					'module_class'      => 'acp',
				);
				$this->add_module($acp_portal_seo_extended, $db);


				// Add new Toplist modules
				$toplist = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'ACP_TOPLIST',
					'module_class'      => 'acp');
				$this->add_module($toplist, $db);
				$acp_module_id = $db->sql_nextid();

				$settings_toplist = array(
					'module_basename'   => 'toplist',
					'module_mode'      	=> 'settings',
					'module_auth'      	=> 'acl_a_board',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_TOPLIST_SETTINGS',
					'module_class'      => 'acp');
				$this->add_module($settings_toplist, $db);


				// Add new Welcome PM modules
				$wpm = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'ACP_WELCOME_PM',
					'module_class'      => 'acp');
				$this->add_module($wpm, $db);
				$acp_module_id = $db->sql_nextid();

				$settings_wpm = array(
					'module_basename'   => 'wpm',
					'module_mode'      	=> 'settings',
					'module_auth'      	=> 'acl_a_board',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_WPM_SETTINGS',
					'module_class'      => 'acp');
				$this->add_module($settings_wpm, $db);


				// Friend list on member view
				$fom = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'ACP_FRIEND_SETTINGS',
					'module_class'      => 'acp');
				$this->add_module($fom, $db);
				$acp_module_id = $db->sql_nextid();

				$settings_fom = array(
					'module_basename'   => 'board',
					'module_mode'      	=> 'profilefriends',
					'module_auth'      	=> 'acl_a_board',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_PROFILE_FRIENDS',
					'module_class'      => 'acp');
				$this->add_module($settings_fom, $db);


				// Contact Admin version 1.0.7
				$contact_admin = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'ACP_CAT_CONTACT',
					'module_class'      => 'acp');
				$this->add_module($contact_admin, $db);
				$acp_module_id = $db->sql_nextid();

				$settings_contact_admin = array(
					'module_basename'   => 'contact',
					'module_mode'      	=> 'configuration',
					'module_auth'      	=> 'acl_a_contact',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_CONTACT_CONFIG',
					'module_class'      => 'acp');
				$this->add_module($settings_contact_admin, $db);

				// User reminder version 1.0.5
				$user_reminder = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'USER_REMINDER',
					'module_class'      => 'acp');
				$this->add_module($user_reminder, $db);
				$acp_module_id = $db->sql_nextid();

				$user_reminder_configuration = array(
					'module_basename'   => 'user_reminder',
					'module_mode'      	=> 'configuration',
					'module_auth'      	=> 'acl_a_user || acl_a_userdel',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_USER_REMINDER_CONFIGURATION',
					'module_class'      => 'acp');
				$this->add_module($user_reminder_configuration, $db);
				$user_reminder_zero_poster = array(
					'module_basename'   => 'user_reminder',
					'module_mode'      	=> 'zero_poster',
					'module_auth'      	=> 'acl_a_user || acl_a_userdel',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_USER_REMINDER_ZERO_POSTER',
					'module_class'      => 'acp');
				$this->add_module($user_reminder_zero_poster, $db);
				$user_reminder_inactive = array(
					'module_basename'   => 'user_reminder',
					'module_mode'      	=> 'inactive',
					'module_auth'      	=> 'acl_a_user || acl_a_userdel',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_USER_REMINDER_INACTIVE',
					'module_class'      => 'acp');
				$this->add_module($user_reminder_inactive, $db);
				$user_reminder_not_logged_in = array(
					'module_basename'   => 'user_reminder',
					'module_mode'      	=> 'not_logged_in',
					'module_auth'      	=> 'acl_a_user || acl_a_userdel',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_USER_REMINDER_NOT_LOGGED_IN',
					'module_class'      => 'acp');
				$this->add_module($user_reminder_not_logged_in, $db);
				$user_reminder_inactive_still = array(
					'module_basename'   => 'user_reminder',
					'module_mode'      	=> 'inactive_still',
					'module_auth'      	=> 'acl_a_user || acl_a_userdel',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_USER_REMINDER_INACTIVE_STILL',
					'module_class'      => 'acp');
				$this->add_module($user_reminder_inactive_still, $db);
				$user_reminder_protected_users = array(
					'module_basename'   => 'user_reminder',
					'module_mode'      	=> 'protected_users',
					'module_auth'      	=> 'acl_a_user || acl_a_userdel',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_USER_REMINDER_PROTECTED_USERS',
					'module_class'      => 'acp');
				$this->add_module($user_reminder_protected_users, $db);

				// Advanced Block Mod 1.0.3
				$user_dnsbl_manage = array(
					'module_basename'   => 'dnsbl',
					'module_mode'      	=> 'manage',
					'module_auth'      	=> 'acl_a_board',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => 5,
					'module_langname'   => 'ACP_DNSBL',
					'module_class'      => 'acp');
				$this->add_module($user_dnsbl_manage, $db);

				$user_dnsbl_manage = array(
					'module_basename'   => 'logs',
					'module_mode'      	=> 'block',
					'module_auth'      	=> 'acl_a_viewlogs',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => 25,
					'module_langname'   => 'ACP_BLOCK_LOGS',
					'module_class'      => 'acp');
				$this->add_module($user_dnsbl_manage, $db);

				// Mod_Share_On by JesusADS
				$shareon = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'ACP_SHARE_ON',
					'module_class'      => 'acp');
				$this->add_module($shareon, $db);
				$acp_module_id = $db->sql_nextid();

				$shareon_configuration = array(
					'module_basename'   => 'shareon',
					'module_mode'      	=> 'configuration',
					'module_auth'      	=> 'acl_a_board',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_SHARE_ON_SETTINGS',
					'module_class'      => 'acp');
				$this->add_module($shareon_configuration, $db);

				// Dm Video
				$dm_video = array(
					'module_basename'   => '',
					'module_mode'      	=> '',
					'module_auth'      	=> '',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $choosen_acp_module,
					'module_langname'   => 'ACP_DMV_DM_VIDEO',
					'module_class'      => 'acp');
				$this->add_module($dm_video, $db);
				$acp_module_id = $db->sql_nextid();

				$dm_video_video_config = array(
					'module_basename'   => 'dm_video',
					'module_mode'      	=> 'video_config',
					'module_auth'      	=> 'acl_a_dm_video_config',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_DMV_CONFIG',
					'module_class'      => 'acp');
				$this->add_module($dm_video_video_config, $db);

				$dm_video_manage_categories = array(
					'module_basename'   => 'dm_video',
					'module_mode'      	=> 'manage_categories',
					'module_auth'      	=> 'acl_a_dm_video_cats',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_DMV_MANAGE_CATEGORIES',
					'module_class'      => 'acp');
				$this->add_module($dm_video_manage_categories, $db);

				$dm_video_edit_videos = array(
					'module_basename'   => 'dm_video',
					'module_mode'      	=> 'edit_videos',
					'module_auth'      	=> 'acl_a_dm_video_edit',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_DMV_EDIT',
					'module_class'      => 'acp');
				$this->add_module($dm_video_edit_videos, $db);

				$dm_video_release_videos = array(
					'module_basename'   => 'dm_video',
					'module_mode'      	=> 'release_videos',
					'module_auth'      	=> 'acl_a_dm_video_release',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_DMV_RELEASE',
					'module_class'      => 'acp');
				$this->add_module($dm_video_release_videos, $db);

				$dm_video_reported_videos = array(
					'module_basename'   => 'dm_video',
					'module_mode'      	=> 'reported_videos',
					'module_auth'      	=> 'acl_a_dm_video_report',
					'module_enabled'   	=> 1,
					'module_display'   	=> 1, 
					'parent_id'         => $acp_module_id,
					'module_langname'   => 'ACP_DMV_REPORTED',
					'module_class'      => 'acp');
				$this->add_module($dm_video_reported_videos, $db);



				$s_hidden_fields = '<input type="hidden" name="mode" value="upgrade_premod" />';
				if ($sub == 'create_table')
				{
					$s_hidden_fields .= '<input type="hidden" name="sub" value="final" />';
					$l_submit = $lang['INSTALL_NEXT'];
					$body = $lang['PORTAL_FINAL_MODULE_STEP'];
				}
				else
				{
					$s_hidden_fields .= '<input type="hidden" name="sub" value="final" />';
					$l_submit = $lang['INSTALL_NEXT'];
					$body = $lang['PORTAL_FINAL_MODULE_STEP'];
				}		
				$s_hidden_fields .= '<input type="hidden" name="language" value="' . $language . '" />';
	
				$template->assign_vars(array(
					'TITLE'				=> $lang['STAGE_INSERT_MODULES'],
					'BODY'				=> $lang['PORTAL_FINAL_MODULE_STEP'],
					'L_SUBMIT'			=> $l_submit,
					'S_HIDDEN_FIELDS'	=> $s_hidden_fields,
					'U_ACTION'			=> $this->p_master->module_url,
						
					'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
				));

			break;

			case 'final':
				$this->page_title = $lang['UPDATE_COMPLETED'];

				// Clear cache
				$cache->purge();
				
				$url = $this->p_master->module_url . "?mode=upgrade_premod&amp;sub=additional";

				$template->assign_vars(array(
					'TITLE'					=> $lang['UPDATE_COMPLETED'],
					'BODY'					=> $lang['PORTAL_UPGRADE_SUCCESS'],
//					'L_SUBMIT'				=> $lang['INSTALL_LOGIN'],
//					'U_ACTION'				=> append_sid($phpbb_root_path . 'ucp.' . $phpEx .'?mode=login'),
					'L_SUBMIT'				=> $lang['PORTAL_ADDITIONAL_THIRD_PARTY_MODS'],
					'U_ACTION'				=> $url,
						
					'S_LANG_SELECT'			=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
				));

			break;

			case 'additional' :
				$this->page_title = $lang['PORTAL_ADDITIONAL_THIRD_PARTY_MODS'];

				$template->assign_vars(array(
					'TITLE'					=> $lang['PORTAL_ADDITIONAL_THIRD_PARTY_MODS'],
					'BODY'					=> $lang['PORTAL_ADDITIONAL_THIRD_PARTY_MODS_BODY'],
						
					'S_LANG_SELECT'			=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
				));
			break;
		}
	}

	/**
	* The function which does the actual work (or dispatches it to the relevant places)
	*/
	function update_data($sub)
	{
		global $template, $user, $phpbb_root_path, $phpEx, $db, $lang, $config, $cache;

		require($phpbb_root_path . 'config.' . $phpEx);
		require($phpbb_root_path . 'includes/db/' . $dbms . '.' . $phpEx);
		require($phpbb_root_path . 'includes/acp/acp_modules.' . $phpEx);

		$module = new module($this->p_master);

		$db = new $sql_db();
		$db->sql_connect($dbhost, $dbuser, $dbpasswd, $dbname, $dbport, false, true);
		unset($dbpasswd);

		if (!defined('PORTAL_CONFIG_TABLE'))
		{
			require($phpbb_root_path . 'includes/constants.' . $phpEx);
		}

		$sql = 'SELECT config_value
			FROM ' . PORTAL_CONFIG_TABLE . "
			WHERE config_name = 'portal_version'";
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$portal_version = $row['config_value'];
		}
		$db->sql_freeresult($result);

		if ((!defined('PORTAL') && $portal_version >= 'Plain') || !$portal_version || $portal_version < '0.0.0' || ($portal_version >= $upgrade_premod->cur_release && !in_array($portal_version, array('RC4 - Plain', 'Plain', 'Plain 0.1', 'Plain 0.2'))))
		{
			return;
		}

		$this->page_title = $lang['STAGE_UPDATE_DB'];

		// Now do the real work from here
		$sql = array();

		$old_upgrade_premod = false;

		switch($portal_version)
		{
			case '0.0.0':
			case 'RC4 - Plain':
			case 'Plain':
			case 'Plain 0.1':
			case 'Plain 0.2':

				$sql[] = "UPDATE " . PORTAL_CONFIG_TABLE . " SET config_value = 'Premod 0.3' WHERE config_name = 'portal_version'";

				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_show_ajax_userinfo', '1', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_show_topic_hover_preview', '1', 0)";

				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (22, 'Download Mod per phpBB 3', '6.4.7', '', 'Questo mod genera una pagina per i tuoi downloads nell\'indice del forum, ha molti strumenti ed &egrave altamente configurabile nel pannello amministrativo.', 'http://phpbb3.oxpus.net/index.php', 'OXPUS', 'http://phpbb3.oxpus.net/downloads.php?view=detail&amp;df_id=1')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (23, 'Prime Links', '1.2.6', '', 'Modifica i links in modo che i collegamenti siano correttamente classificati come tali. Si possono anche applicare links esterni (ad esempio, per aprire in una nuova finestra) e anteporre collegamenti (ad esempio, per applicare un anonymizer).', 'http://www.absoluteanime.com/admin/mods.htm', 'primehalo', 'http://www.absoluteanime.com/admin/mods.htm')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (24, 'Prime Links: Forum Links', '1.2.6', '', 'Applica nel forum il targhet in modo che i links possono aprirsi in una nuova finestra del browser. Il targhet &egrave definito da EXTERNAL_LINK_TARGET nel file &quot;include / prime_links.php&quot;.', 'http://www.absoluteanime.com/admin/mods.htm', 'primehalo', 'http://www.absoluteanime.com/admin/mods.htm')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (25, 'Prime Links: Style Links', '1.2.6', '', 'Aggiunge un foglio di stile.', 'http://www.absoluteanime.com/admin/mods.htm', 'primehalo', 'http://www.absoluteanime.com/admin/mods.htm')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (26, 'Prime Links: Siti web utenti', '1.2.4', '', 'Consente un target ai links degli utenti che saranno aperti in una nuova finestra del browser.', 'http://www.absoluteanime.com/admin/mods.htm', 'primehalo', 'http://www.absoluteanime.com/admin/mods.htm')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (27, 'Prime risposta rapida', '1.0.7', '', 'Aggiunge una risposta rapida nel forum, sono disponibili nuovi strumenti configurabili via ACP come:  Anti-bot, Citazioni multiple, e Prime Cestino.', 'http://www.absoluteanime.com/admin/mods.htm', 'primehalo', 'http://www.absoluteanime.com/admin/mods.htm')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (28, 'Log connessioni', '1.0.3', '', 'Questo MOD consente di controllare le connessioni eseguite correttamente e quelle fallite nel forum.', 'http://www.phpbb-services.com', 'Elglobo', 'http://www.phpbb-services.com')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (29, 'ACP mod aggiunta utenti', '1.0.1', '', 'Consente agli amministratori di creare nuovi account utenti direttamente dal pannello amministrativo, impostare i permessi, e attivare immediatamente gli utenti creati.', 'http://phpBBAcademy.com', 'Highway of Life', 'http://phpBBAcademy.com')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (30, 'Mini guida base', '0.2.9', '', 'Aggiunge una guida base per il tuo forum.', 'http://www.phpbb.com/community/viewtopic.php?f=70&amp;t=589907&amp;start=0', 'tas2580', 'http://www.phpbb.com/community/viewtopic.php?f=70&amp;t=589907&amp;start=0')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (31, 'Domanda anti bot', '1.1.0', '', 'Aggiunge un controllo anti bot nel form di registrazione.', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=645075', 'CoC', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=645075')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (32, 'Calendario PhpBB', '0.1.0', '', 'Un Mod calendario con tantissimi strumenti configurabili da pannello amministrativo.', 'http://phpbbcalendarmod.com', 'alightner', 'http://phpbbcalendarmod.com')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (33, 'Ajax ShoutBox', '1.2 RC1', '', 'Questo mod aggiunge uno shoutbox nell\'indice del forum, completamente configurabile in ACP.', 'http://www.phpbb.com/community/viewtopic.php?f=70&amp;t=645725', 'Paul', 'http://www.phpbb.com/community/viewtopic.php?f=70&amp;t=645725')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (34, 'MOD di ringraziamento messaggi', '0.4.0', '', 'Con questo mod &egrave possibile ringraziare gli utenti per determinati messaggi, questo mod &egrave stato riscritto per Portal XL.', 'https://www.phpbb.com/community/viewtopic.php?f=70&amp;t=543797&amp;start=0', 'geoffreak', 'https://www.phpbb.com/community/viewtopic.php?f=70&amp;t=543797&amp;start=0')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (35, 'Gestione FAQ', '1.2.5', '', 'Aggiunge e configura nel tuo ACP ed in piena autonomia le tue FAQ.', 'http://www.lithiumstudios.org/forum/viewtopic.php?f=31&t=464', 'EXreaction', 'http://www.lithiumstudios.org/forum/viewtopic.php?f=31&t=464')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (36, 'Categorie di annunci', '1.0.0', '', 'Questo MOD separa gli argomenti in Annunci Globali, Annunci, Importanti, e Normali. Gli annunci Globali sono visualizzati per primi, seguono gli Annunci, Importanti e Normali.', 'http://www.phpbb.com/community/viewtopic.php?f=69&t=1101445', 'Ash Hi Fi Zone', 'http://www.phpbb.com/community/viewtopic.php?f=69&t=1101445')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (37, 'Messaggi per giorno', '1.0.0', '', 'Aggiunge nell\'indice informazioni extra relative al numero dei messaggi inviati da quando il forum &egrave stato creato.', 'http://www.phpbb.com/community/viewtopic.php?f=69&t=1214815', 'MartectX', 'http://www.phpbb.com/community/viewtopic.php?f=69&t=1214815')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (38, 'Gestione messaggi privati', '0.0.1', '', 'Consente all\'amministratore di verificare tutti i messaggi privati del forum, compresi quelli degli utenti.', 'http://www.phpbb.com/community/viewtopic.php?f=70&t=1074285', 'david63', 'http://www.phpbb.com/community/viewtopic.php?f=70&t=1074285')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (39, 'Avatar nella lista iscritti', '1.0.0', '', 'Mostra una piccola anteprima dell\'avatar utente nell\'elenco utenti. - Posizionando  il mouse sopra l\'anteprima viene  mostrata per intero.', 'https://www.phpbb.com/community/viewtopic.php?f=69&amp;t=583545', 'Highway of Life', 'https://www.phpbb.com/community/viewtopic.php?f=69&amp;t=583545')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (40, 'MCP info su indice', '1.0.2', '', 'Aggiunge un riquadro rosso per l\'indice quando non sono segnalati o messaggi non approvati. Il mod &egrave visibile solo per i moderatori o gli amministratori con i permessi di moderatore.', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=1214675', 'Derky', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=1214675')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (41, 'Prime Post Revisioni', '1.2.3', '', 'Conserva per ogni messaggio modificato le revisioni, che saranno visibili a chi detiene le necessarie autorizzazioni.', 'http://www.absoluteanime.com/admin/mods.htm#post_revisions', 'primehalo', 'http://www.absoluteanime.com/admin/mods.htm#post_revisions')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (42, 'Mod allegati Highslide', '4.0.10', '', 'Apre le immaggini allegate nella galleria in belle popups. Le immaggini grandi sono auotomaticamente ridimensionate e possono essere visualizzate a schermo intero.', 'http://www.phpbb3bbcodes.com/', 'Stoker', 'http://www.phpbb3bbcodes.com/')";				
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (43, 'ACP annunci centrali', '1.0.3', 'a', 'Permette di inserire un blocco centrale da utilizzare per gli annunci del portale.\nStrumenti:\n- Attiva/Disattiva gli annunci\n- Annunci per gli ospiti\n- BBCode/Smilie \n- Possibilit&agrave di visualizzare differenti annunci per ospiti e utenti\n- Possibilit&agrave di visualizzare compleanni e annunci (con visualizzazione dell\'avatar)\n- Visualizzazione degli annunci per gruppi\n- Configurazione dei titoli annunci configurabile\n- Opzione di visualizzazione in tutte le pagine o nell\'indice.', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=981855&amp;start=0', 'lefty74', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=981855&amp;start=0')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (44, 'Pagina delle regole', '1.0.0', 'b', 'Questo MOD aggiunge una pagina di regole visulizzabili nel forum (faq.php).', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=753535&amp;start=0', 'eviL&lt;3', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=753535&amp;start=0')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (45, 'Note legali', '0.1.6', 'b', 'Aggiunge le note legali con molte opzioni configurabili via ACP.', 'http://www.phpbb-seo.de/downloads/mod-impressum.html', 'tas2580', 'http://www.phpbb-seo.de/downloads/mod-impressum.html')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (46, 'Argomenti similari', '1.0.0', '', 'Mostra un elenco di argomenti simili a fine argomento.', 'http://www.phpbb-seo.de/downloads/mod-similar-topics.html', 'tas2580', 'http://www.phpbb-seo.de/downloads/mod-similar-topics.html')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (47, 'phpBB3 SEO mod rewrite avanzato', '0.6.4', '', 'Questo mod riscrive gli URL in phpBB URLs, convertendo categorie, forum e l\'argomento dei titoli nel proprio URL', 'http://www.phpbb-seo.com/', 'dcz', 'http://www.phpbb-seo.com/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (48, 'Ticket per phpBB Siti di Supporto', '1.0.2', '', 'Questo MOD aggiunge un\'assistente di supporto per il tuo  phpBB forum. Gli utenti potranno aggiungere le importanti informazioni per risolvere i loro problemi, come la versione utilizzata, notizie relative al server ecc.', 'http://www.flying-bits.org/', 'nickvergessen', 'http://www.flying-bits.org/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (49, 'Prime Cestino', '1.0.8', '', 'Consente di esaminare argomenti e messaggi prima di essere eliminati, in modo che possano essere controllati prima della cancellazione permanente (o ripristinati). Inoltre, offre la possibilit&agrave di inserire una ragione per l\'eliminazione, e consente la possibilit&agrave di spostare argomenti e messaggi in un determinato cestino forum. Argomenti e messaggi eliminati possono essere visualizzati, ripristinati o cancellati in modo permanente dagli amministratori.', 'http://www.absoluteanime.com/admin/mods.htm#trash_bin', 'primehalo', 'http://www.absoluteanime.com/admin/mods.htm#trash_bin')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (50, 'MOD gruppi automatici', '1.0.1', '', 'Permette agli amministratori di configurare gli utenti in gruppi basati sul numero dei messaggi, giorni dalla registrazione, e punteggi.', 'http://www.phpbb.com/community/viewtopic.php?f=69&t=770205', 'A_Jelly_Doughnut', 'http://www.phpbb.com/community/viewtopic.php?f=69&t=770205')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (51, 'Messaggio di benvenuto al primo login', '2.2.5', '', 'Permette agli amministratori di configurare un messaggio di benvenuto ai suoi utenti quando dopo l\'iscrizione effettueranno il primo login.', 'http://www.phpbb.com/community/viewtopic.php?f=69&t=573016', 'DualFusion', 'http://www.phpbb.com/community/viewtopic.php?f=69&t=573016')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (52, 'Contatto amministratore forum', '1.0.10', '', 'Questo MOD configurabile nel pannello amministrativo consente di contattare l\'amministratore del forum.', 'http://www.phpbb.com/community/viewtopic.php?p=11384095#p11384095', 'RMcGirr83', 'http://www.phpbb.com/community/viewtopic.php?p=11384095#p11384095')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (53, 'AJAX Userinfo', '0.1.0', '', 'Mostra un piccolo popup con l\'avatar e informazioni riferite all\'utente con il passaggio del mouse su un nome utente. Ajax  Userinfo &egrave stato riscritto da DaMysterious per Portal XL.', 'http://www.phpbb.com/community/viewtopic.php?p=3009017#p3009017', 'tas2580', 'http://www.phpbb.com/community/viewtopic.php?p=3009017#p3009017')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (54, 'Anteprima Argomento', '0.3.1', '', 'Anteprima su argomento link mostra il testo del primo messaggio di questo argomento.', '', 'raptor5001', '')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (55, 'Leggi o marca messaggi non letti', '1.0.4', '', 'Aggiunge i links ''Messaggi non letti'' o ''Non hai nuovi messaggi'' nell\'indice del forum.', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=788695', 'asinshesq', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=788695')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (56, 'AJAX controllo registrazione utente', '1.0.0', '', 'Durante la registrazione, questo MOD formula una serie di controlli per vedere se &egrave possibile trovare errori con le informazioni fornite dall\'utente. Tali controlli sono; \n* Verifica se il nome utente &egrave disponibile o se &egrave gi&agrave stato registrato. \n* Controlla che le due password inserite sono identiche. \n* Verifica se il primo indirizzo e-mail &egrave nel formato corretto.', 'http://www.phpbb.com/community/viewtopic.php?f=70&amp;t=1311855&amp;start=0', 'andy2295', 'http://www.phpbb.com/community/viewtopic.php?f=70&amp;t=1311855&amp;start=0')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (57, 'DST automatico', '2.0.1', '', 'Consente agli utenti di scegliere l\'ora legale (DST) automaticamente, invece di impostarla due volte all\'anno. La base di questo adeguamento &egrave data dalle impostazioni del server web.', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=1020905', 'MartectX', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=1020905')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (58, 'Creatore Smilie', '1.0.6', '', 'Con questo modulo &egrave possibile aggiungere alcuni Smilie  per il tuo forum. \nPuoi utilizzare questo MOD come BBCode personalizzato o con un popup creatore smilie.', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=1069695', 'Dr.Death', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=1069695')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (59, 'Modifica rapida linguaggio', '0.1.0', '', 'Permette agli utenti di modificare rapidamente il proprio linguaggio (lang=URL).', NULL, 'LEW21', NULL)";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (60, 'phpBB Gallery', '1.0.6', '', 'Una galleria di immagini integrata nel tuo forum phpbb.', 'http://www.flying-bits.org/', 'nickvergessen', 'http://www.flying-bits.org/')";
	            $sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (61, 'jQuery JavaScript Library', '1.4.2', '', 'jQuery &egrave una liberia JavaScript che semplifica i documenti HTML, gestisce gli eventi, l\'animazione, le interazioni e utilizza Ajax per il rapido sviluppo del web. jQuery &egrave destinato a cambiare il modo in cui si scrive in JavaScript.', 'http://jquery.com/', 'John Resig', 'http://jquery.com/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (62, 'Easy Widgets jQuery plugin', '2.0', '', 'Un modo semplice per usare i Widgets nel tuo sito.', 'http://www.davidesperalta.com/jquery-easywidgets', 'David Esperalta', 'http://bb.magudas.com/jq/easywidgets/index.html')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (63, 'Contatore di caratteri', '0.0.3', '', 'Visualizza il numero di caratteri scritti durante la risposta ad un messaggio.', 'http://www.phpbb.com/community/viewtopic.php?p=10312655#p10312655', 'Xtracker!', 'http://www.phpbb.com/community/viewtopic.php?p=10312655#p10312655')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (64, 'Mod Toplist', '2.0.0-RC4', '', 'Aggiunge una toplist (directory) nel tuo forum phpBB3.', 'http://www.phpbb.com/community/viewtopic.php?f=70&t=951985', 'Wyr!H@x!mu$', 'http://www.wyrihaximus.net')";	
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (65, 'Plugin CAPTCHA ordinabile', '1.0.1', '', 'Questo plugin CAPTCHA aggiunge due colonne, &egrave possibile aggiungere le opzioni per ogni colonna. Tutte le opzioni saranno visualizzate in una colonna, poi l\'utente ha la possibilit&agrave di ordinare le colonne da una all\'altra, trascinandole con il mouse. Con questo plugin non &egrave necessario modificare nessun file, basta caricare tutti i file e funziona!', 'http://www.phpbb.com/community/viewtopic.php?f=70&t=1714415', 'Derky', 'http://www.phpbb.com/community/viewtopic.php?f=70&t=1714415')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (66, 'Country Flags', '1.0.0', '', 'Sei un patriota? Con questo MOD gli utenti registrati potranno selezionare la bandiera della propria nazionalit&agrave.\r\nLe bandiere degli stati saranno visualizzate in phpBB. Puoi selezionare una bandiera di default per i gruppi.\r\nPuoi gestire anche le bandiere (modificare/cancellare/aggiungere), modificare alcune configurazioni, selezionare bandiere per utenti/gruppi...\r\nin ACP, e in UCP per i gruppi.', 'http://www.vinabb.com/', 'nedka', 'http://vinabb.com/viewtopic.php?p=513#p513')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (67, 'Genders', '1.0.1', '', 'Questo mod permette di specificare il sesso degli utenti. Essi possono scegliere tra &quot;Maschio&quot;, &quot;Femmina&quot; and &quot;Non specificato&quot;.', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=736135&amp;start=0', 'eviL<3', 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=736135&amp;start=0')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (68, 'Archivio utenti', '0.0.2', '', 'Aggiunge obiettivi nei profili utenti', 'http://itmods.com/viewtopic.php?p=605#p605', 'platinum_2007', 'http://itmods.com/viewtopic.php?p=605#p605')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (69, 'Pagina livelli', '1.0', '', 'Aggiunge una pagina dei livelli installati sul forum. La pagina crea automaticamente nuove pagine in presenza di pi&ugrave livelli.', 'http://www.portalxl.nl/forum/', 'DaMysterious', 'http://www.portalxl.nl/forum/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (70, 'Pagina smiles', '1.0', '', 'Aggiunge una pagina di smiles installati sul forum. La pagina crea automaticamente nuove pagine in presenza di pi&ugrave smiles.', 'http://www.portalxl.nl/forum/', 'DaMysterious', 'http://www.portalxl.nl/forum/')";
                $sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (71, 'Ricerca Google', '1.0.0', '', 'Aggiunge un pulsante di ricerca Google nella ricerca standard.', 'http://allcity.net.ru/', 'AllCity', 'http://allcity.net.ru/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (72, 'Guest Hide BBCode MOD', '1.4.0', '', 'Con il BBCode [hide], gli utenti possono nascondere il contenuto dei loro messaggi agli ospiti!', 'http://allcity.net.ru/', 'AllCity', 'http://allcity.net.ru/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (73, 'Amici nel profilo utente', '1.0.0', '', 'Aggiunge la lista amici nel profilo utente.', 'http://www.portalxl.nl/forum/', 'DaMysterious', 'http://www.portalxl.nl/forum/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (74, 'phpBB Arcade', '1.1', 'RC1', 'Una sala giochi per phpBB 3.0.x.', 'http://www.jeffrusso.net', 'JRSweets', 'http://www.jeffrusso.net')";
                $sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (75, 'Lista bandiere', '1.0', '', 'Aggiunge la lista delle bandiere installate sul forum.', 'http://www.portalxl.nl/forum/', 'DaMysterious', 'http://www.portalxl.nl/forum/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (76, 'Mod blog utente', '1.0.13', '', 'Aggiunge un blog nel forum phpBB3.', 'http://www.lithiumstudios.org/', 'EXreaction', 'http://www.lithiumstudios.org/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (77, 'Pagina gruppi', '1.0', '', 'Aggiunge una lista gruppi mostrando tutti i gruppi disponibili in Portal XL Premod.', 'http://www.portalxl.nl/forum/', 'DaMysterious', 'http://www.portalxl.nl/forum/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (78, 'AJAX Chat', '0.8.3', '', 'AJAX Chat &egrave una chat open source altamente configurabile in JavaScript, PHP and MySQL. La chat utilizza la tecnologia Flash lato client e Ruby lato server. Questa versione &egrave un\'integrazione di phpBB.', 'https://blueimp.net/ajax/', 'Sebastian Tschan', 'https://blueimp.net/ajax/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (79, 'User Reminder', '1.0.5', '', 'Invia promemoria a utenti registrati ma non attivi, a utenti che non si loggano da un certo periodo di tempo, invia anche un secondo promemoria agli utenti che non si sono loggati con l\'invio del primo promemoria.', 'http://www.lefty74.com', 'lefty74', 'http://www.lefty74.com')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (80, 'Advanced Block Mod', '1.0.3', '', 'Aggiunge maggiori blacklist DNS di phpBB3. Le blacklist possono essere gestite da ACP e configurate da 0 a 5 per raggiungere un valore di soglia del 5 allo scopo di bloccarle. Aggiunge un nuovo registro per le azioni di blocco. Aggiunge la registrazione a validate_email e check_dnsbl. Aggiunge WHOIS di log.', 'http://www.martin-truckenbrodt.com', 'Martin Truckenbrodt', 'http://www.martin-truckenbrodt.com')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (81, 'Email on Birthday', '1.0.1', 'b', 'Se sono abilitati i compleanni la Mod invia una e-mail agli utenti per il loro compleanno, pu&ograve essere disattivato tramite ACP.', 'http://www.lefty74.com', 'lefty74', 'http://www.lefty74.com')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (82, 'Portal XL Custom bbCode Box', '1.0.0', '', 'Un editor multimediale che pu&ograve essere abilitato o disabilitato con una variabile, abilitato l\'editor multimediale viene disabilitato quello di phpBB 3.', 'http://www.portalxl.nl/forum/', 'DaMysterious', 'http://www.portalxl.nl/forum/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (83, 'Share On', '1.0.1', '', 'Aggiunge ad ogni primo post icone con i link per la condivisione su Social Network tra i quali: Facebook, Twitter, MySpace, Orkut, Digg, Technorati e Delicious', 'http://www.phpbb.com/community/viewtopic.php?f=70&t=1844865', 'JesusADS', 'http://www.phpbb.com/community/viewtopic.php?f=70&t=1844865')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (84, 'DM Multi Zodiacs', '1.0.0', '', 'Questa mod aggiunge i segni zodiacali europei, cinesi e indiani nel profilo utente e nel view topic. Le immagini sono state create da darko.', 'http://die-muellers.org', 'Felix Mueller', 'http://die-muellers.org')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (85, 'DM Video', '1.0.5', '', 'Questa mod aggiunge una pagina di video al forum, dove &egrave possibile visualizzare i video come su YouTube, MyVideo o di altri fornitori che offrono codici embedded da copiare. I video possono essere aggiunti dagli utenti, ma occorre l\'approvazione da parte dell\'amministratore. Inoltre pu&ograve essere inserita una descrizione. Si possono avere categorie e sottocategorie per ordinare i video.', 'http://die-muellers.org', 'Felix Mueller', 'http://die-muellers.org')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (86, 'RSS syndication downloads', '1.0', '', 'RSS (nel suo formato pi&ugrave recente &egrave sinonimo di &quot;Really Simple Syndication&quot;). I contenuti RSS possono essere letti utilizzando un software chiamato &quot;feed reader&quot; o un &quot;aggregatore.&quot; Gli utenti sottoscrivono un feed inserendo il link del feed nel lettore o cliccando su una icona RSS. Il lettore controlla la sottoscrizione degli utenti regolarmente mostrando i nuovi contenuti, o aggiornamenti recenti. ', 'http://www.portalxl.nl/forum/', 'DaMysterious', 'http://www.portalxl.nl/forum/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (87, 'RSS syndication guida base', '1.0', '', 'RSS (nel suo formato pi&ugrave recente &egrave sinonimo di &quot;Really Simple Syndication&quot;). I contenuti RSS possono essere letti utilizzando un software chiamato &quot;feed reader&quot; o un &quot;aggregatore.&quot; Gli utenti sottoscrivono un feed inserendo il link del feed nel lettore o cliccando su una icona RSS. Il lettore controlla la sottoscrizione degli utenti regolarmente mostrando i nuovi contenuti, o aggiornamenti recenti. ', 'http://www.portalxl.nl/forum/', 'DaMysterious', 'http://www.portalxl.nl/forum/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (88, 'RSS syndication gallery', '1.0', '', 'RSS (nel suo formato pi&ugrave recente &egrave sinonimo di &quot;Really Simple Syndication&quot;). I contenuti RSS possono essere letti utilizzando un software chiamato &quot;feed reader&quot; o un &quot;aggregatore.&quot; Gli utenti sottoscrivono un feed inserendo il link del feed nel lettore o cliccando su una icona RSS. Il lettore controlla la sottoscrizione degli utenti regolarmente mostrando i nuovi contenuti, o aggiornamenti recenti. ', 'http://www.portalxl.nl/forum/', 'DaMysterious', 'http://www.portalxl.nl/forum/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (89, 'RSS syndication arcade', '1.0', '', 'RSS (nel suo formato pi&ugrave recente &egrave sinonimo di &quot;Really Simple Syndication&quot;). I contenuti RSS possono essere letti utilizzando un software chiamato &quot;feed reader&quot; o un &quot;aggregatore.&quot; Gli utenti sottoscrivono un feed inserendo il link del feed nel lettore o cliccando su una icona RSS. Il lettore controlla la sottoscrizione degli utenti regolarmente mostrando i nuovi contenuti, o aggiornamenti recenti. ', 'http://www.portalxl.nl/forum/', 'DaMysterious', 'http://www.portalxl.nl/forum/')";
				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (90, 'RSS syndication video', '1.0', '', 'RSS (nel suo formato pi&ugrave recente &egrave sinonimo di &quot;Really Simple Syndication&quot;). I contenuti RSS possono essere letti utilizzando un software chiamato &quot;feed reader&quot; o un &quot;aggregatore.&quot; Gli utenti sottoscrivono un feed inserendo il link del feed nel lettore o cliccando su una icona RSS. Il lettore controlla la sottoscrizione degli utenti regolarmente mostrando i nuovi contenuti, o aggiornamenti recenti. ', 'http://www.portalxl.nl/forum/', 'DaMysterious', 'http://www.portalxl.nl/forum/')";
				

				// Table: 'phpbb_log_lc_exclude_ip'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . LOG_LC_EXCLUDE_IP_TABLE . " (
					exclude_id mediumint(8) NOT NULL auto_increment,
					exclude_ip varchar(40) NOT NULL default '',
					PRIMARY KEY (exclude_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_kb_article'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . KB_ARTICLE_TABLE . " (
					article_id int(11) NOT NULL auto_increment,
					cat_id mediumint(8) NOT NULL,
					type_id mediumint(8) NOT NULL,
					hits int(11) NOT NULL default '0',
					titel varchar(255) NOT NULL,
					description text NOT NULL,
					article longtext NOT NULL,
					user_id mediumint(8) NOT NULL,
					last_edit_user mediumint(8) NOT NULL,
					activ tinyint(1) NOT NULL default '0',
					bbcode_uid varchar(8) binary NOT NULL,
					bbcode_bitfield varchar(255) NOT NULL default '',
					bbcode_options varchar(255) NOT NULL default '',
					enable_magic_url tinyint(1) NOT NULL default '0',
					enable_smilies tinyint(1) NOT NULL default '0',
					enable_bbcode tinyint(1) NOT NULL default '0',
					post_time varchar(14) NOT NULL,
					page_uri varchar(255) NOT NULL default '',
					last_change varchar(14) NOT NULL,
					post_id mediumint(8) NOT NULL default '0',
					has_attachment tinyint(1) NOT NULL,
					PRIMARY KEY  (article_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_kb_reports'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . KB_REPORTS_TABLE . " (
					report_id mediumint(8) unsigned NOT NULL auto_increment,
					reason_id smallint(4) unsigned NOT NULL default '0',
					article_id mediumint(8) unsigned NOT NULL default '0',
					user_id mediumint(8) unsigned NOT NULL default '0',
					user_notify tinyint(1) unsigned NOT NULL default '0',
					report_closed tinyint(1) unsigned NOT NULL default '0',
					report_time int(11) unsigned NOT NULL default '0',
					report_text mediumtext NOT NULL,
					PRIMARY KEY  (report_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_kb_categorie'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . KB_CATEGORIE_TABLE . " (
					cat_id mediumint(8) NOT NULL auto_increment,
					right_id mediumint(8) NOT NULL,
					left_id mediumint(8) NOT NULL,
					parent_id mediumint(8) NOT NULL default '0',	
					cat_mode tinyint(1) NOT NULL,
					cat_parents text NULL,
					show_edits tinyint(1) NOT NULL,
					post_forum mediumint(8) default NULL,
					cat_title varchar(255) binary NOT NULL,
					description text NOT NULL,
					bbcode_uid varchar(8) binary NOT NULL,
					bbcode_bitfield varchar(255) binary NOT NULL,
					bbcode_options mediumint(4) NOT NULL,
					image varchar(255) binary NOT NULL,
					display_on_index tinyint(1) NOT NULL,
					PRIMARY KEY  (cat_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_kb_config'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . KB_CONFIG_TABLE . " (
					config_name varchar(100) binary NOT NULL,
					config_value mediumtext NOT NULL,
					config_type tinyint(1) NOT NULL default '1'
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_kb_changelog'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . KB_LOG_TABLE . " (
					log_id MEDIUMINT(8) NOT NULL auto_increment,
					article_id MEDIUMINT(8) NOT NULL,
					time varchar(14) binary NOT NULL,
					user_id MEDIUMINT(8) NOT NULL,
					reason MEDIUMTEXT NULL,
					PRIMARY KEY  (log_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_kb_types'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . KB_TYPES_TABLE . " (
					type_id MEDIUMINT(8) NOT NULL auto_increment,
					name varchar(255) binary NOT NULL,
					PRIMARY KEY  (type_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_calendar_config'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . CALENDAR_CONFIG_TABLE . " (
				  config_name varchar(255) binary NOT NULL,
				  config_value varchar(255) binary NOT NULL
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_calendar_events'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . CALENDAR_EVENTS_TABLE . " (
				  event_id mediumint(8) unsigned NOT NULL auto_increment,
				  etype_id tinyint(4) NOT NULL,
				  sort_timestamp bigint(20) unsigned NOT NULL,
				  event_start_time bigint(20) unsigned NOT NULL,
				  event_end_time bigint(20) unsigned NOT NULL,
				  event_all_day tinyint(2) NOT NULL default '0',
				  event_day varchar(10) binary NOT NULL default '',
				  event_subject varchar(255) NOT NULL default '',
				  event_body longblob NOT NULL,
				  poster_id mediumint(8) unsigned NOT NULL default '0',
				  event_access_level tinyint(1) NOT NULL default '0',
				  group_id mediumint(8) unsigned NOT NULL default '0',
				  group_id_list varchar(255) NOT NULL default ',',
				  enable_bbcode tinyint(1) unsigned NOT NULL default '1',
				  enable_smilies tinyint(1) unsigned NOT NULL default '1',
				  enable_magic_url tinyint(1) unsigned NOT NULL default '1',
				  bbcode_bitfield varchar(255) binary NOT NULL default '',
				  bbcode_uid varchar(8) binary NOT NULL,
				  track_rsvps tinyint(1) unsigned NOT NULL default '0',
				  allow_guests tinyint(1) unsigned NOT NULL default '0',
				  rsvp_yes mediumint(8) unsigned NOT NULL default '0',
				  rsvp_no mediumint(8) unsigned NOT NULL default '0',
				  rsvp_maybe mediumint(8) unsigned NOT NULL default '0',
				  recurr_id mediumint(8) unsigned NOT NULL default '0',
				  PRIMARY KEY  (event_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_calendar_event_types'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . CALENDAR_EVENT_TYPES_TABLE . " (
				  etype_id tinyint(3) unsigned NOT NULL auto_increment,
				  etype_index tinyint(3) unsigned NOT NULL default '0',
				  etype_full_name varchar(255) NOT NULL default '',
				  etype_display_name varchar(255) NOT NULL default '',
				  etype_color varchar(6) binary NOT NULL default '',
				  etype_image varchar(255) binary NOT NULL,
				  PRIMARY KEY  (etype_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_calendar_event_types'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . CALENDAR_EVENTS_WATCH . " (
				  event_id mediumint(8) unsigned NOT NULL default '0',
				  user_id mediumint(8) unsigned NOT NULL default '0',
				  notify_status tinyint(1) unsigned NOT NULL default '0',
				  track_replies tinyint(1) unsigned NOT NULL default '0',
				  KEY event_id (event_id),
				  KEY user_id (user_id),
				  KEY notify_stat (notify_status)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_calendar_event_types'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . CALENDAR_RECURRING_EVENTS_TABLE . " (
				  recurr_id mediumint(8) unsigned NOT NULL auto_increment,
				  etype_id tinyint(4) NOT NULL,
				  frequency tinyint(4) NOT NULL default '1',
				  frequency_type tinyint(4) NOT NULL default '0',
				  first_occ_time bigint(20) unsigned NOT NULL,
				  final_occ_time bigint(20) unsigned NOT NULL,
				  event_all_day tinyint(2) NOT NULL default '0',
				  event_duration bigint(20) unsigned NOT NULL,
				  week_index tinyint(2) NOT NULL default '0',
				  first_day_of_week tinyint(1) unsigned NOT NULL default '0',
				  last_calc_time bigint(20) unsigned NOT NULL,
				  next_calc_time bigint(20) unsigned NOT NULL,
				  event_subject varchar(255) NOT NULL default '',
				  event_body longblob NOT NULL,
				  poster_id mediumint(8) unsigned NOT NULL default '0',
				  poster_timezone decimal(5,2) NOT NULL default '0.00',
				  poster_dst tinyint(1) unsigned NOT NULL default '0',
				  event_access_level tinyint(1) NOT NULL default '0',
				  group_id mediumint(8) unsigned NOT NULL default '0',
				  group_id_list varchar(255) NOT NULL default ',',
				  enable_bbcode tinyint(1) unsigned NOT NULL default '1',
				  enable_smilies tinyint(1) unsigned NOT NULL default '1',
				  enable_magic_url tinyint(1) unsigned NOT NULL default '1',
				  bbcode_bitfield varchar(255) binary NOT NULL default '',
				  bbcode_uid varchar(8) binary NOT NULL,
				  track_rsvps tinyint(1) unsigned NOT NULL default '0',
				  allow_guests tinyint(1) unsigned NOT NULL default '0',
				  PRIMARY KEY  (recurr_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_calendar_event_types'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . CALENDAR_RSVP_TABLE . " (
				  rsvp_id mediumint(8) unsigned NOT NULL auto_increment,
				  event_id mediumint(8) unsigned NOT NULL default '0',
				  poster_id mediumint(8) unsigned NOT NULL default '0',
				  poster_name varchar(255) binary NOT NULL default '',
				  poster_colour varchar(6) binary NOT NULL default '',
				  poster_ip varchar(40) binary NOT NULL default '',
				  post_time int(11) unsigned NOT NULL default '0',
				  rsvp_val tinyint(1) unsigned NOT NULL default '0',
				  rsvp_count smallint(4) unsigned NOT NULL default '1',
				  rsvp_detail mediumtext NOT NULL,
				  bbcode_bitfield varchar(255) binary NOT NULL default '',
				  bbcode_uid varchar(8) binary NOT NULL,
				  bbcode_options tinyint(1) unsigned NOT NULL default '7',
				  PRIMARY KEY  (rsvp_id),
				  KEY event_id (event_id),
				  KEY poster_id (poster_id),
				  KEY eid_post_time (event_id,post_time)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_calendar_event_types'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . CALENDAR_WATCH . " (
				  user_id mediumint(8) unsigned NOT NULL default '0',
				  notify_status tinyint(1) unsigned NOT NULL default '0',
				  KEY user_id (user_id),
				  KEY notify_stat (notify_status)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				// Table: 'phpbb_shoutbox'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . SHOUTBOX_TABLE . " (
				  shout_id mediumint(8) unsigned NOT NULL auto_increment,
				  shout_user_id mediumint(8) unsigned NOT NULL default '0',
				  shout_time int(11) unsigned NOT NULL default '0',
				  shout_ip varchar(40) binary NOT NULL default '',
				  shout_text mediumtext NOT NULL,
				  shout_bbcode_bitfield varchar(255) binary NOT NULL default '',
				  shout_bbcode_uid varchar(8) binary NOT NULL default '',
				  shout_bbcode_flags int(11) unsigned NOT NULL default '7',
				  PRIMARY KEY  (shout_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('as_interval', '3600', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('as_prune', '336', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('as_max_posts', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('as_flood_interval', '15', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('as_version', '1.2.RC1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('as_ie_nr', '5', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('as_non_ie_nr', '20', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('last_as_run', '0', 1)";

				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES
					('u_as_post', 1, 0, 0),
					('u_as_view', 1, 0, 0),
					('u_as_info', 1, 0, 0),
					('u_as_delete', 1, 0, 0),
					('u_as_edit', 1, 0, 0),
					('u_as_smilies', 1, 0, 0),
					('u_as_bbcode', 1, 0, 0),
					('u_as_mod_edit', 1, 0, 0),
					('u_as_ignore_flood', 1, 0, 0),
					('a_as_manage', 1, 0, 0)";
				
				// Table: 'portal_thanks'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . PORTAL_THANKS_TABLE . " (
				  post_id mediumint(8) NOT NULL default '0',
				  user_id mediumint(8) NOT NULL default '0',
				  KEY post_id (post_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_downloads'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DOWNLOADS_TABLE . " (
					id int(11) NOT NULL AUTO_INCREMENT,
					description blob,
					file_name varchar(255) binary DEFAULT '',
					klicks int(11) DEFAULT '0',
					free tinyint(1) DEFAULT '0',
					extern tinyint(1) DEFAULT '0',
					long_desc blob,
					sort int(11) DEFAULT '0',
					cat int(11) DEFAULT '0',
					hacklist tinyint(1) DEFAULT '0',
					hack_author varchar(255) binary DEFAULT '',
					hack_author_email varchar(255) binary DEFAULT '',
					hack_author_website tinytext,
					hack_version varchar(32) binary DEFAULT '',
					hack_dl_url tinytext,
					test varchar(50) binary DEFAULT '',
					req blob,
					todo blob,
					warning blob,
					mod_desc blob,
					mod_list tinyint(1) DEFAULT '0',
					file_size bigint(20) NOT NULL DEFAULT '0',
					change_time int(11) DEFAULT '0',
					add_time int(11) DEFAULT '0',
					rating smallint(5) NOT NULL DEFAULT '0',
					file_traffic bigint(20) NOT NULL DEFAULT '0',
					overall_klicks int(11) DEFAULT '0',
					approve tinyint(1) DEFAULT '0',
					add_user mediumint(8) DEFAULT '0',
					change_user mediumint(8) DEFAULT '0',
					last_time int(11) DEFAULT '0',
					down_user mediumint(8) NOT NULL DEFAULT '0',
					thumbnail varchar(255) binary NOT NULL DEFAULT '',
					broken tinyint(1) NOT NULL DEFAULT '0',
					mod_desc_uid varchar(8) binary NOT NULL DEFAULT '',
					mod_desc_bitfield varchar(255) binary NOT NULL DEFAULT '',
					mod_desc_flags int(11) unsigned NOT NULL DEFAULT '0',
					long_desc_uid varchar(8) binary NOT NULL DEFAULT '',
					long_desc_bitfield varchar(255) binary NOT NULL DEFAULT '',
					long_desc_flags int(11) unsigned NOT NULL DEFAULT '0',
					desc_uid varchar(8) binary NOT NULL DEFAULT '',
					desc_bitfield varchar(255) binary NOT NULL DEFAULT '',
					desc_flags int(11) unsigned NOT NULL DEFAULT '0',
					warn_uid varchar(8) binary NOT NULL DEFAULT '',
					warn_bitfield varchar(255) binary NOT NULL DEFAULT '',
					warn_flags int(11) unsigned NOT NULL DEFAULT '0',
					dl_topic int(11) NOT NULL DEFAULT '0',
					real_file varchar(255) binary DEFAULT '',
					todo_uid char(8) binary NOT NULL DEFAULT '',
					todo_bitfield varchar(255) binary NOT NULL DEFAULT '',
					todo_flags int(11) unsigned NOT NULL DEFAULT '0',
					PRIMARY KEY (id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_downloads_cat'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_CAT_TABLE . " (
					id int(11) NOT NULL AUTO_INCREMENT,
					parent int(11) DEFAULT '0',
					path varchar(255) binary DEFAULT '',
					cat_name varchar(255) binary DEFAULT '',
					sort int(11) DEFAULT '0',
					description blob,
					rules blob,
					auth_view tinyint(1) NOT NULL DEFAULT '1',
					auth_dl tinyint(1) NOT NULL DEFAULT '1',
					auth_up tinyint(1) NOT NULL DEFAULT '0',
					auth_mod tinyint(1) NOT NULL DEFAULT '0',
					must_approve tinyint(1) NOT NULL DEFAULT '0',
					allow_mod_desc tinyint(1) NOT NULL DEFAULT '0',
					statistics tinyint(1) NOT NULL DEFAULT '1',
					stats_prune mediumint(8) NOT NULL DEFAULT '0',
					comments tinyint(1) NOT NULL DEFAULT '1',
					cat_traffic bigint(20) NOT NULL DEFAULT '0',
					allow_thumbs tinyint(1) NOT NULL DEFAULT '0',
					auth_cread tinyint(1) NOT NULL DEFAULT '0',
					auth_cpost tinyint(1) NOT NULL DEFAULT '1',
					approve_comments tinyint(1) NOT NULL DEFAULT '1',
					bug_tracker tinyint(1) NOT NULL DEFAULT '0',
					desc_uid varchar(8) binary NOT NULL DEFAULT '',
					desc_bitfield varchar(255) binary NOT NULL DEFAULT '',
					desc_flags int(11) unsigned NOT NULL DEFAULT '0',
					rules_uid varchar(8) binary NOT NULL DEFAULT '',
					rules_bitfield varchar(255) binary NOT NULL DEFAULT '',
					rules_flags int(11) unsigned NOT NULL DEFAULT '0',
					dl_topic_forum int(11) NOT NULL DEFAULT '0',
					dl_topic_text mediumtext NOT NULL,
					cat_icon varchar(255) binary NOT NULL DEFAULT '',
					diff_topic_user tinyint(1) unsigned NOT NULL DEFAULT '0',
					topic_user int(11) unsigned NOT NULL DEFAULT '0',
					topic_more_details tinyint(1) unsigned NOT NULL DEFAULT '1',
					PRIMARY KEY (id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_auth'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_AUTH_TABLE . " (
					cat_id int(11) NOT NULL,
					group_id int(11) NOT NULL,
					auth_view tinyint(1) NOT NULL DEFAULT '1',
					auth_dl tinyint(1) NOT NULL DEFAULT '1',
					auth_up tinyint(1) NOT NULL DEFAULT '1',
					auth_mod tinyint(1) NOT NULL DEFAULT '0'
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_comments'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_COMMENTS_TABLE . " (
					dl_id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
					id int(11) NOT NULL DEFAULT '0',
					cat_id int(11) NOT NULL DEFAULT '0',
					user_id mediumint(8) NOT NULL DEFAULT '0',
					username varchar(32) binary NOT NULL DEFAULT '',
					comment_time int(11) NOT NULL DEFAULT '0',
					comment_edit_time int(11) NOT NULL DEFAULT '0',
					comment_text blob,
					approve tinyint(1) NOT NULL DEFAULT '0',
					com_uid varchar(8) binary NOT NULL DEFAULT '',
					com_bitfield varchar(255) binary NOT NULL DEFAULT '',
					com_flags int(11) unsigned NOT NULL DEFAULT '0',
					PRIMARY KEY (dl_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_ratings'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_RATING_TABLE . " (
					dl_id int(11) default '0',
					user_id mediumint(8) default '0',
					rate_point varchar(10) binary default '0'
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_stats'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_STATS_TABLE . " (
					dl_id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
					id int(11) NOT NULL DEFAULT '0',
					cat_id int(11) NOT NULL DEFAULT '0',
					user_id mediumint(8) NOT NULL DEFAULT '0',
					username varchar(32) binary NOT NULL DEFAULT '',
					traffic bigint(20) NOT NULL DEFAULT '0',
					direction tinyint(1) NOT NULL DEFAULT '0',
					user_ip varchar(40) binary NOT NULL,
					browser varchar(20) binary NOT NULL DEFAULT '',
					time_stamp int(11) NOT NULL DEFAULT '0',
					PRIMARY KEY (dl_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_ext_blacklist'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_EXT_BLACKLIST . " (
					extention varchar(10) binary NOT NULL DEFAULT ''
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_banlist'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_BANLIST_TABLE . "(
					ban_id int(11) NOT NULL AUTO_INCREMENT,
					user_id mediumint(8) NOT NULL DEFAULT '0',
					user_ip varchar(40) binary DEFAULT NULL,
					user_agent varchar(50) binary NOT NULL DEFAULT '',
					username varchar(25) binary NOT NULL DEFAULT '',
					guests tinyint(1) NOT NULL DEFAULT '0',
					PRIMARY KEY (ban_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_favorites'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_FAVORITES_TABLE . " (
					fav_id int(11) NOT NULL AUTO_INCREMENT,
					fav_dl_id int(11) NOT NULL DEFAULT '0',
					fav_dl_cat int(11) NOT NULL DEFAULT '0',
					fav_user_id mediumint(8) NOT NULL DEFAULT '0',
					PRIMARY KEY (fav_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_notraf'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_NOTRAF_TABLE . " (
					user_id mediumint(8) NOT NULL default '0',
					dl_id int(11) NOT NULL default '0'
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_hotlink'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_HOTLINK_TABLE . " (
					user_id mediumint(8) NOT NULL DEFAULT '0',
					session_id varchar(32) binary NOT NULL DEFAULT '',
					hotlink_id varchar(32) binary NOT NULL DEFAULT '',
					`code` varchar(10) binary NOT NULL DEFAULT '-'
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_bug_tracker'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_BUGS_TABLE . " (
					report_id int(11) NOT NULL AUTO_INCREMENT,
					df_id int(11) NOT NULL DEFAULT '0',
					report_title varchar(255) binary DEFAULT '',
					report_text blob,
					report_file_ver varchar(50) binary DEFAULT '',
					report_date int(11) DEFAULT '0',
					report_author_id mediumint(8) NOT NULL DEFAULT '0',
					report_assign_id mediumint(8) NOT NULL DEFAULT '0',
					report_assign_date int(11) DEFAULT '0',
					report_status tinyint(1) NOT NULL DEFAULT '0',
					report_status_date int(11) DEFAULT '0',
					report_php varchar(50) binary DEFAULT '',
					report_db varchar(50) binary DEFAULT '',
					report_forum varchar(50) binary DEFAULT '',
					bug_uid varchar(8) binary NOT NULL DEFAULT '',
					bug_bitfield varchar(255) binary NOT NULL DEFAULT '',
					bug_flags int(11) unsigned NOT NULL DEFAULT '0',
					PRIMARY KEY (report_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_bug_history'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_BUG_HISTORY_TABLE . " (
					report_his_id int(11) NOT NULL AUTO_INCREMENT,
					df_id int(11) NOT NULL DEFAULT '0',
					report_id int(11) NOT NULL,
					report_his_type varchar(10) binary DEFAULT '',
					report_his_date int(11) DEFAULT '0',
					report_his_value varchar(255) binary DEFAULT NULL,
					PRIMARY KEY (report_his_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// -- New on 6.3.3 
				// Table: 'phpbb_dl_rem_traf'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_REM_TRAF_TABLE . " (
					config_name varchar(255) binary NOT NULL DEFAULT '',
					config_value varchar(255) binary NOT NULL DEFAULT '',
					PRIMARY KEY (config_name)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_cat_traf'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_CAT_TRAF_TABLE . " (
					cat_id int(11) unsigned NOT NULL DEFAULT '0',
					cat_traffic_use bigint(20) NOT NULL DEFAULT '0',
					PRIMARY KEY (cat_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// -- New on 6.3.7 
				// Table: 'phpbb_dl_versions'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_VERSIONS_TABLE . " (
					ver_id int(11) unsigned NOT NULL AUTO_INCREMENT,
					dl_id int(11) unsigned NOT NULL DEFAULT '0',
					ver_file_name varchar(255) binary NOT NULL DEFAULT '',
					ver_real_file varchar(255) binary NOT NULL DEFAULT '',
					ver_file_size bigint(20) NOT NULL DEFAULT '0',
					ver_version varchar(32) binary NOT NULL DEFAULT '',
					ver_change_time int(11) unsigned NOT NULL DEFAULT '0',
					ver_add_time int(11) unsigned NOT NULL DEFAULT '0',
					ver_add_user mediumint(8) unsigned NOT NULL DEFAULT '0',
					ver_change_user mediumint(8) unsigned NOT NULL DEFAULT '0',
					PRIMARY KEY (ver_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// -- New on 6.4.0 
				// Table: 'phpbb_dl_fields'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_FIELDS_TABLE . " (
					field_id int(8) unsigned NOT NULL AUTO_INCREMENT,
					field_name mediumtext NOT NULL,
					field_type int(4) NOT NULL DEFAULT '0',
					field_ident varchar(20) binary NOT NULL DEFAULT '',
					field_length varchar(20) binary NOT NULL DEFAULT '',
					field_minlen varchar(255) binary NOT NULL DEFAULT '',
					field_maxlen varchar(255) binary NOT NULL DEFAULT '',
					field_novalue mediumtext NOT NULL,
					field_default_value mediumtext NOT NULL,
					field_validation varchar(60) binary NOT NULL DEFAULT '',
					field_required tinyint(1) unsigned NOT NULL DEFAULT '0',
					field_active tinyint(1) unsigned NOT NULL DEFAULT '0',
					field_order int(8) unsigned NOT NULL DEFAULT '0',
					PRIMARY KEY (field_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_fields_data'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_FIELDS_TABLE . " (
					df_id int(11) unsigned NOT NULL DEFAULT '0',
					PRIMARY KEY (df_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_fields_lang'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_FIELDS_LANG_TABLE . " (
					field_id int(8) unsigned NOT NULL DEFAULT '0',
					lang_id int(8) unsigned NOT NULL DEFAULT '0',
					option_id int(8) unsigned NOT NULL DEFAULT '0',
					field_type int(4) NOT NULL DEFAULT '0',
					lang_value mediumtext NOT NULL,
					PRIMARY KEY (field_id,lang_id,option_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Table: 'phpbb_dl_fields_data'
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DL_LANG_TABLE . " (
					field_id int(8) unsigned NOT NULL DEFAULT '0',
					lang_id int(8) unsigned NOT NULL DEFAULT '0',
					lang_name mediumtext NOT NULL,
					lang_explain mediumtext NOT NULL,
					lang_default_value mediumtext NOT NULL,
					PRIMARY KEY (field_id,lang_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// -- Log connections 1.0.3
				$sql[] = "ALTER TABLE " . LOG_TABLE . " ADD log_number MEDIUMINT( 8 ) NOT NULL DEFAULT '1'";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('lc_mod_enable', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('lc_disable', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('lc_acp_disable', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('lc_founder_disable', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('lc_admin_disable', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('lc_prune_entries', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('lc_prune_day', '7', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('lc_interval', '60', 0)";
				
				// -- Knowledge Base Version 0.2.9
				$sql[] = "INSERT INTO " . KB_CONFIG_TABLE . " (config_name, config_value, config_type) VALUES
					('kb_title', '', 1),
					('kb_description', '', 1),
					('post_subject', '', 1),
					('post_message','', 1),
					('index_topics', '3', 0),
					('topic_type', '0', 0),
					('post_user', '2', 0),
					('kb_mode', '1', 0),
					('cache_time', '3600', 0),
					('activ_types', '1', 0),
					('show_post_edit', '1', 0),
					('sort_order_dir', 'ASC', 1),
					('sort_order', 'hits', 1),
					('update_post', '1', 0)";
					
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES
					('u_add_kb', 1, 0, 0),
					('u_edit_kb', 1, 0, 0),
					('u_del_kb', 1, 0, 0),
					('u_print_kb', 1, 0, 0),
					('u_attache_kb', 1, 0, 0),
					('u_report_kb', 1, 0, 0),
					
					('m_log_kb', 1, 0, 0),
					('m_log_kb_delete', 1, 0, 0),
					('m_report_kb', 1, 0, 0),
					('m_activate_kb', 1, 0, 0),
					('m_edit_kb', 1, 0, 0),
					('m_del_kb', 1, 0, 0),
					
					('a_config_kb', 1, 0, 0),
					('a_categorie_kb', 1, 0, 0),
					('a_types_kb', 1, 0, 0)";
				
				// -- Anti Bot Question 1.1.0
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('enable_abquestion', '0', '0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('abquestion','','0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('abanswer','','0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('abanswer2','','0')";
				
				// -- phpBB Calendar 0.0.8
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES ('first_day_of_week', '1')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES ('index_display_week', '1')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES ('index_display_next_events', '0')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES ('hour_mode', '24')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES ('display_truncated_name', '0')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES ('prune_frequency', '864000')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES ('last_prune', '0')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES ('prune_limit', '2592000')";
				// New entries version 0.1.0
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES('display_hidden_groups', '0')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES('time_format', 'h:i a')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES('date_format', 'M d, Y')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES('date_time_format', 'M d, Y h:i a')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES('disp_events_only_on_start', '0')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES('populate_frequency', '86400')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES('last_populate', '0')";
				$sql[] = "INSERT INTO " . CALENDAR_CONFIG_TABLE . " (config_name, config_value) VALUES('populate_limit', '2592000')";

				$sql[] = "INSERT INTO " . CALENDAR_EVENT_TYPES_TABLE . " (etype_id, etype_index, etype_full_name, etype_display_name, etype_color, etype_image) VALUES (1, 1, 'Generic Event', 'All events', '993333', '')";
				
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'a_calendar', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'm_calendar_edit_other_users_events', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'm_calendar_delete_other_users_events', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'u_calendar_view_events', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'u_calendar_create_events', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'u_calendar_edit_events', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'u_calendar_delete_events', 1, 0, 0)";
				// New entries version 0.1.0
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'm_calendar_edit_other_users_rsvps', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'u_calendar_create_recurring_events', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'u_calendar_create_public_events', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'u_calendar_create_group_events', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'u_calendar_create_private_events', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'u_calendar_nonmember_groups', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'u_calendar_track_rsvps', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'u_calendar_allow_guests', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'u_calendar_view_headcount', 1, 0, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'u_calendar_view_detailed_rsvps', 1, 0, 0)";
				
				// -- Thank Post MOD
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD user_thanked int(11) NOT NULL default '0'";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD user_thanked_others int(11) NOT NULL default '0'";
				
				// -- Alter table groups
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " ADD COLUMN group_dl_auto_traffic BIGINT(20) DEFAULT '0' NOT NULL";
				
				// -- Alter table users
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD COLUMN user_allow_new_download_email TINYINT(1) DEFAULT '0' NOT NULL";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD COLUMN user_allow_fav_download_email TINYINT(1) DEFAULT '1' NOT NULL";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD COLUMN user_allow_new_download_popup TINYINT(1) DEFAULT '1' NOT NULL";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD COLUMN user_allow_fav_download_popup TINYINT(1) DEFAULT '1' NOT NULL";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD COLUMN user_dl_update_time INT( 11 ) DEFAULT '0' NOT NULL";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD COLUMN user_new_download TINYINT(1) DEFAULT '0' NOT NULL";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD COLUMN user_traffic BIGINT(20) DEFAULT '0' NOT NULL";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD COLUMN user_dl_note_type TINYINT(1) DEFAULT '1' NOT NULL";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD COLUMN user_dl_sort_fix TINYINT(1) DEFAULT '0' NOT NULL";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD COLUMN user_dl_sort_opt TINYINT(1) DEFAULT '0' NOT NULL";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD COLUMN user_dl_sort_dir TINYINT(1) DEFAULT '0' NOT NULL";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD COLUMN user_dl_sub_on_index TINYINT(1) DEFAULT 1 NOT NULL";
				
				// -- Configuration values moved into phpbb_config table on 6.3.4.RC1 
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_cap_carree_x', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_cap_carree_y', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_cap_char_trans', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_cap_lines', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_click_reset_time', '1260058009', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_delay_auto_traffic', '30', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_delay_post_traffic', '30', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_disable_email', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_disable_popup', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_disable_popup_notify', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_download_dir', 'dl_mod/downloads/', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_download_vc', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_drop_traffic_postdel', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_edit_own_downloads', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_edit_time', '3', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_enable_dl_topic', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_enable_post_dl_traffic', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_ext_new_window', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_guest_stats_show', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_hotlink_action', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_icon_free_for_reg', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_latest_comments', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_limit_desc_on_index', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_links_per_page', '10', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_method', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_method_quota', '20971520', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_mod_version', '6.4.7', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_new_time', '3', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_newtopic_traffic', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_overall_guest_traffic', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_overall_traffic', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_physical_quota', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_posts', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_prevent_hotlink', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_recent_downloads', '10', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_reply_traffic', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_report_broken', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_report_broken_lock', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_report_broken_message', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_report_broken_vc', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_shorten_extern_links', '10', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_show_footer_legend', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_show_footer_stat', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_show_real_filetime', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_sort_preform', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_stats_perm', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_stop_uploads', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_thumb_fsize', '512000', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_thumb_xsize', '800', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_thumb_ysize', '600', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_topic_forum', '2', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_topic_text', 'New arrived file downloads!', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_traffic_retime', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_upload_traffic_count', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_use_ext_blacklist', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_use_hacklist', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_user_dl_auto_traffic', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_user_traffic_once', '0', 1)";

				// -- New on 6.3.7 
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_antispam_posts', '50', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_antispam_hours', '24', 1)";
				
				// -- New on 6.3.8 
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_traffic_off', '0', 1)";
				
				// -- New on 6.4.0 
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_diff_topic_user', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_topic_user', '0', 1)";
				
				// -- New on 6.4.1 
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_todo_link_onoff', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_uconf_link_onoff', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_topic_more_details', '0', 1)";
				
				// -- New on 6.4.6 
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_active', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_off_hide', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_off_now_time', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_off_from', '00:00', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_off_till', '23:59', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_on_admins', '1', 1)";
				
				// -- Default file extention blacklist values
				$sql[] = "INSERT INTO " . DL_EXT_BLACKLIST . " (extention) VALUES
					('asp'), ('cgi'), ('dhtm'), ('dhtml'), ('exe'), ('htm'), ('html'), ('jar'), ('js'), ('php'), ('php3'), ('pl'), ('sh'), ('shtm'), ('shtml')";
				
				// -- Default banlist values
				$sql[] = "INSERT INTO " . DL_BANLIST_TABLE . " (user_agent) VALUES ('n/a')";
			
				// -- New on 6.3.3 
				$sql[] = "INSERT INTO " . DL_REM_TRAF_TABLE . " (config_name, config_value) VALUES('dl_remain_traffic', '0')";
				$sql[] = "INSERT INTO " . DL_REM_TRAF_TABLE . " (config_name, config_value) VALUES('dl_remain_guest_traffic', '0')";

				// -- PM Spy
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'a_pm_spy', 1, 0, 0)";

				// -- Post revisions
				$sql[] = "CREATE TABLE IF NOT EXISTS " . POST_REVISIONS_TABLE . " (
					post_id mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
					post_subject varchar(100) DEFAULT '' NOT NULL,
					post_text mediumblob NOT NULL,
					bbcode_uid varchar(8) DEFAULT '' NOT NULL,
					post_edit_time int(11) UNSIGNED DEFAULT '0' NOT NULL,
					post_edit_user mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
					post_edit_reason varchar(255) DEFAULT '' NOT NULL,
					KEY post_id (post_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				// -- ACP Announcement Centre
				$sql[] = "CREATE TABLE IF NOT EXISTS " . ANNOUNCEMENTS_CENTRE_TABLE . " (
					announcement_show tinyint (1) NOT NULL,
					announcement_enable_guests tinyint (1) NOT NULL,
					announcement_show_birthdays tinyint (1) NOT NULL,
					announcement_birthday_avatar tinyint (1) NOT NULL,
					announcement_draft text NOT NULL,
					announcement_draft_bbcode_uid varchar(8) DEFAULT '' NOT NULL,
					announcement_draft_bbcode_bitfield varchar(255) DEFAULT '' NOT NULL,
					announcement_draft_bbcode_options mediumint(4) DEFAULT 0 NOT NULL,
					announcement_text text NOT NULL,
					announcement_text_bbcode_uid varchar(8) DEFAULT '' NOT NULL,
					announcement_text_bbcode_bitfield varchar(255) DEFAULT '' NOT NULL,
					announcement_text_bbcode_options mediumint(4) DEFAULT 0 NOT NULL,
					announcement_text_guests text NOT NULL,
					announcement_text_guests_bbcode_uid varchar(8) DEFAULT 0 NOT NULL,
					announcement_text_guests_bbcode_bitfield varchar(255) DEFAULT 0 NOT NULL,
					announcement_text_guests_bbcode_options mediumint(4) DEFAULT 0 NOT NULL,
					announcement_title varchar(255) NOT NULL default '',
					announcement_title_guests varchar(255) NOT NULL default '',
					announcement_show_group varchar(255) NOT NULL default ''
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = "INSERT INTO " . ANNOUNCEMENTS_CENTRE_TABLE  . " (announcement_show, announcement_enable_guests, announcement_show_birthdays, announcement_birthday_avatar, announcement_title, announcement_text, announcement_draft, announcement_title_guests, announcement_text_guests, announcement_show_group) VALUES ('0', '1', '0', '0', 'Site Announcements', '[color=red][b]Site Announcements[/b][/color] can be seen here!! :mrgreen:', '[color=red][b]Draft Announcements[/b][/color] can be seen here!! :mrgreen:', 'Guest Announcements', '[color=green][b]Guest Announcements[/b][/color] can be seen here!! :wink:', '2')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('announcement_show_index', '0', '0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('announcement_enable', '1', '0')";

				// -- Imprint 0.1.6
				$sql[] = "CREATE TABLE IF NOT EXISTS " . IMPRESSUM_TABLE  . " (
				  name smallint(2) NOT NULL default '0',
				  value varchar(255) binary NOT NULL default '',
				  aktiv smallint(1) NOT NULL default '0'
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(1, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(2, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(3, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(4, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(5, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(6, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(7, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(8, '', 0)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(9, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(10, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(11, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(12, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(13, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(14, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(15, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(16, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(17, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(18, '', 1)";
				$sql[] = "INSERT INTO " . IMPRESSUM_TABLE  . " (name, value, aktiv) VALUES(19, '', 1)";

				// -- SupportTicket Assistant for phpBB Support Sites 1 0 2
				$sql[] = "ALTER TABLE " . FORUMS_TABLE  . " ADD COLUMN enable_sts TINYINT(1) DEFAULT '0' NOT NULL";

				// -- Prime Trash Bin 1.0.6
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('f_delete_forever', 0, 1, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('f_undelete', 0, 1, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('m_delete_forever', 1, 1, 0)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('m_undelete', 1, 1, 0)";
				
				$sql[] = "ALTER TABLE " . TOPICS_TABLE . " ADD topic_deleted_from mediumint(8) UNSIGNED DEFAULT '0' NOT NULL";
				$sql[] = "ALTER TABLE " . TOPICS_TABLE . " ADD topic_deleted_user mediumint(8) UNSIGNED DEFAULT '0' NOT NULL";
				$sql[] = "ALTER TABLE " . TOPICS_TABLE . " ADD topic_deleted_time int(11) UNSIGNED DEFAULT '0' NOT NULL";
				$sql[] = "ALTER TABLE " . TOPICS_TABLE . " ADD topic_deleted_reason varchar(255) DEFAULT '' NOT NULL";

				$sql[] = "ALTER TABLE " . POSTS_TABLE . " ADD post_deleted_from mediumint(8) UNSIGNED DEFAULT '0' NOT NULL";
				$sql[] = "ALTER TABLE " . POSTS_TABLE . " ADD post_deleted_user mediumint(8) UNSIGNED DEFAULT '0' NOT NULL";
				$sql[] = "ALTER TABLE " . POSTS_TABLE . " ADD post_deleted_time int(11) UNSIGNED DEFAULT '0' NOT NULL";
				$sql[] = "ALTER TABLE " . POSTS_TABLE . " ADD post_deleted_reason varchar(255) DEFAULT '' NOT NULL";

				// -- Auto Groups MOD
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " ADD group_min_posts MEDIUMINT(8) DEFAULT 0";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " ADD group_max_posts MEDIUMINT(8) DEFAULT 0";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " ADD group_min_warnings MEDIUMINT(8) DEFAULT 0";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " ADD group_max_warnings MEDIUMINT(8) DEFAULT 0";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " ADD group_min_days MEDIUMINT(8) DEFAULT 0";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " ADD group_max_days MEDIUMINT(8) DEFAULT 0";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " ADD group_auto_default TINYINT(1) DEFAULT 0";
				$sql[] = "ALTER TABLE " . USER_GROUP_TABLE . " ADD auto_group TINYINT(1) DEFAULT '0'";

				// -- Quickly Change Your Language Version 0.1.0
				$sql[] = "ALTER TABLE " . SESSIONS_TABLE . " ADD session_lang varchar(30) DEFAULT 'it' NOT NULL";

				// -- phpbb_seo
				$sql[] = "ALTER TABLE " . TOPICS_TABLE . " ADD topic_url VARCHAR(255) binary NOT NULL default '' AFTER topic_deleted_reason";

				// -- Toplist MOD
				$sql[] = "CREATE TABLE IF NOT EXISTS " . TOPLIST_TABLE . " (
					id int(32) NOT NULL auto_increment,
					in_hits int(32) NOT NULL default '0',
					out_hits int(32) NOT NULL default '0',
					image_hits int(32) NOT NULL default '0',
					pr int(1) NOT NULL default '0',
					alexa int(32) NOT NULL default '0',
					owner int(32) NOT NULL default '0',
					image varchar(255) binary NOT NULL default '',
					image_type varchar(255) binary NOT NULL default '',
					ip varchar(255) binary NOT NULL default '',
					site_name varchar(255) binary NOT NULL default '',
					site_info text NOT NULL,
					site_banner varchar(255) binary NOT NULL default '',
					site_url varchar(255) binary NOT NULL default '',
					enabled int(1) NOT NULL default '1',
					show_banner int(1) NOT NULL default '1',
					PRIMARY KEY  (id),
					KEY id (id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = "INSERT INTO " . TOPLIST_TABLE  . " (id, in_hits, out_hits, image_hits, pr, alexa, owner, image, image_type, ip, site_name, site_info, site_banner, site_url, enabled, show_banner) VALUES (5, 0, 1, 0, 1, 0, 2, 'SimpleGD:banner3.jpg', '0', '82.95.242.37', 'DaMysterious', 'Portal XL 5.0 ~ Your insane crazy ass-kicking portal system for phpBB 3.0.x', 'http://www.portalxl.nl/forum/portal/images/banners/400x60/damysterious.xs4all.nl.gif', 'http://www.portalxl.nl/forum/', 1, 0)";
				$sql[] = "INSERT INTO " . TOPLIST_TABLE  . " (id, in_hits, out_hits, image_hits, pr, alexa, owner, image, image_type, ip, site_name, site_info, site_banner, site_url, enabled, show_banner) VALUES (6, 0, 1, 0, 1, 0, 2, 'SimpleGD:banner3.jpg', '0', '87.10.92.211', 'Lucky', 'Portal XL Italia ~ Il supporto italiano ufficiale a Portal XL 5.0, la prima comunit&agrave europea dedicata a Portal XL in italiano', 'http://www.portalxl.eu/portal/images/banners/400x60/lucky400x60.gif', 'http://www.portalxl.eu/', 1, 0)";

				$sql[] = "CREATE TABLE IF NOT EXISTS " . TOPLIST_COMMENTS_TABLE . " (
					id int(32) NOT NULL auto_increment,
					poster int(32) NOT NULL default '0',
					`time` int(32) NOT NULL default '0',
					bbuid varchar(255) binary NOT NULL default '',
					bbbitfield varchar(255) binary NOT NULL default '',
					`subject` varchar(255) binary NOT NULL default '',
					message text NOT NULL,
					site int(32) NOT NULL default '0',
					PRIMARY KEY  (id),
					KEY id (id),
					KEY poster (poster),
					KEY site (site),
					KEY `time` (`time`)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = "CREATE TABLE IF NOT EXISTS " . TOPLIST_FLOOD_CONTROL_TABLE . " (
					id int(32) NOT NULL default '0',
					ip varchar(255) binary NOT NULL default '',
					`time` int(32) NOT NULL default '0',
					`type` varchar(5) binary NOT NULL default '0'
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = "INSERT INTO " . TOPLIST_FLOOD_CONTROL_TABLE  . " (id, ip, time, type) VALUES (1, '82.95.242.37', 1249628709, 'out')";

				$sql[] = "CREATE TABLE IF NOT EXISTS " . TOPLIST_HASH_TABLE . " (
					site_id int(32) NOT NULL default '0',
					`type` varchar(5) binary NOT NULL default '',
					`time` int(32) NOT NULL default '0',
					`hash` varchar(32) binary NOT NULL default '',
					uniqid int(32) NOT NULL default '0'
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = "CREATE TABLE IF NOT EXISTS " . TOPLIST_RATE_TABLE . " (
					site_id int(32) NOT NULL default '0',
					user_id int(32) NOT NULL default '0',
					rating int(1) NOT NULL default '0',
					ip varchar(255) binary NOT NULL default ''
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = "INSERT INTO " . TOPLIST_RATE_TABLE  . " (site_id, user_id, rating, ip) VALUES (5, 2, 5, '82.95.242.37')";

				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_version', '2.0.0-RC4', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_refresh', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_refresh_time', '60', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_credits', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_cache_time', '300', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_ratings', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_comments', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_pagenation', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_hits_in', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_hits_out', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_hits_img', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_sites_a_page', '50', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_antiflood_time', '86400', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_gc', '3600', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_last_id', '5', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_in_hits_weight', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_out_hits_weight', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_img_hits_weight', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_rating_weight', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_pr_weight', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_alexa_weight', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_image_cache_days', '7', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_site_of_the_moment_length', '604800', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_site_of_the_moment_id', '-1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_site_of_the_moment_previous_id', '-1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_site_of_the_moment_change_time', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_banner_height', '150', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_banner_width', '350', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_points_per_add', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_points_per_edit', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_points_per_img_hit_visitor', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_points_per_in_hit_visitor', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_points_per_out_hit_visitor', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_points_per_img_hit_owner', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_points_per_in_hit_owner', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_points_per_out_hit_owner', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_points_per_rate', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_points_per_comment', '1.0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_sitethumbs', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_pr', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_alexa', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_cache', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_cache_clear', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_code_check', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_site_of_the_moment', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_site_of_the_moment_index', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_banner_resize', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_points_enable', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_last_gc', '1249545177', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_cron_lock', 'notlocked', 1)";
				// Toplist MOD 2.0.0-RC4
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_show_disabled', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_score', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_help_enable', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_help_custom_enable', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_help_lang_custom_index', 'TOPLIST_CUSTOM_HELP', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_update_check_next', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_update_check', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_update_check_security', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_update_check_mail', '0', 1)";

				// -- Removing old Welcome PM on First Login
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'wpm_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'wpm_send_id'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'wpm_subject'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'wpm_message'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'wpm_preview'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'wpm_variables'";
				
				// -- New Welcome PM on First Login 2.2.5
				$sql[] = "CREATE TABLE IF NOT EXISTS " . WPM_TABLE . " (
					wpm_config_id int(3) NOT NULL,
					wpm_enable tinyint(1) unsigned NOT NULL,
					wpm_send_id mediumint(8) NOT NULL,
					wpm_preview tinyint(1) unsigned NOT NULL,
					wpm_variables varchar(255) NOT NULL,
					wpm_subject varchar(100) NOT NULL,
					wpm_message mediumtext NOT NULL,
					wpm_version varchar(255) NOT NULL,
					PRIMARY KEY	(wpm_config_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = "INSERT INTO " . WPM_TABLE . " (wpm_config_id, wpm_enable, wpm_send_id, wpm_preview, wpm_variables, wpm_subject, wpm_message, wpm_version) VALUES(1, 1, 2, 0, '', 'Benvenuto su {SITE_NAME}!', 'Ciao, [b]{USERNAME}[/b]!\n\nBenvenuto su {SITE_NAME}	({SITE_DESC})\n\nTi sei registrato il [b]{USER_REGDATE}[/b]. Secondo le tue istruzioni, la tua email &egrave [b]{USER_EMAIL}[/b], hai il seguente fuso orario [b]{USER_TZ}[/b]. E\' piacevole sapere che parli la lingua {USER_LANG_LOCAL}.\n\nSe vuoi puoi contattarci a questo link : {BOARD_CONTACT} o qui: {BOARD_EMAIL}, scegli quello che preferisci. Grazie per la scelta.\n\n-Grazie per la tua registrazione su {SITE_NAME}!\n\nGrazie da, {SENDER}', '2.2.5')";
					
				// -- Automatic DST 2
				$sql[] = "UPDATE " . CONFIG_TABLE . " SET is_dynamic = '1' WHERE config_name = 'board_dst'";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " CHANGE user_timezone user_timezone VARCHAR( 255 ) NOT NULL";

				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('country_flags_require', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('country_flags_path', 'images/flags', 0)";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD user_country_flag varchar(30) binary NOT NULL DEFAULT '0'";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " ADD group_country_flag varchar(30) binary NOT NULL DEFAULT '0'";

				$sql[] = "CREATE TABLE IF NOT EXISTS " . COUNTRY_FLAGS_TABLE . " (
					flag_id mediumint(8) unsigned NOT NULL auto_increment,
					flag_country blob NOT NULL,
					flag_code blob NOT NULL,
					flag_image varbinary(255) NOT NULL default '',
					PRIMARY KEY  (flag_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (1, 'Afghanistan', 'af', 'af.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (2, 'Aland Islands', 'ax', 'ax.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (3, 'Albania', 'al', 'al.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (4, 'Algeria', 'dz', 'dz.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (5, 'American Samoa', 'as', 'as.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (6, 'Andorra', 'ad', 'ad.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (7, 'Angola', 'ao', 'ao.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (8, 'Anguilla', 'ai', 'ai.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (9, 'Antarctica', 'aq', 'aq.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (10, 'Antigua and Barbuda', 'ag', 'ag.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (11, 'Argentina', 'ar', 'ar.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (12, 'Armenia', 'am', 'am.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (13, 'Aruba', 'aw', 'aw.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (14, 'Ascension Island', 'ac', 'ac.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (15, 'Australia', 'au', 'au.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (16, 'Austria', 'at', 'at.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (17, 'Azerbaijan', 'az', 'az.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (18, 'Bahamas', 'bs', 'bs.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (19, 'Bahrain', 'bh', 'bh.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (20, 'Bangladesh', 'bd', 'bd.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (21, 'Barbados', 'bb', 'bb.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (22, 'Belarus', 'by', 'by.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (23, 'Belgium', 'be', 'be.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (24, 'Belize', 'bz', 'bz.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (25, 'Benin', 'bj', 'bj.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (26, 'Bermuda', 'bm', 'bm.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (27, 'Bhutan', 'bt', 'bt.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (28, 'Bolivia', 'bo', 'bo.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (29, 'Bosnia and Herzegowina', 'ba', 'ba.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (30, 'Botswana', 'bw', 'bw.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (31, 'Bouvet Island', 'bv', 'bv.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (32, 'Brazil', 'br', 'br.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (33, 'British Indian Ocean Territory', 'io', 'io.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (34, 'Brunei', 'bn', 'bn.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (35, 'Bulgaria', 'bg', 'bg.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (36, 'Burkina Faso', 'bf', 'bf.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (37, 'Burundi', 'bi', 'bi.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (38, 'Cambodia', 'kh', 'kh.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (39, 'Cameroon', 'cm', 'cm.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (40, 'Canada', 'ca', 'ca.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (41, 'Cape Verde', 'cv', 'cv.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (42, 'Cayman Islands', 'ky', 'ky.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (43, 'Central African Republic', 'cf', 'cf.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (44, 'Chad', 'td', 'td.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (45, 'Chile', 'cl', 'cl.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (46, 'China', 'cn', 'cn.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (47, 'Christmas Island', 'cx', 'cx.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (48, 'Cocos (Keeling) Islands', 'cc', 'cc.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (49, 'Colombia', 'co', 'co.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (50, 'Comoros', 'km', 'km.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (51, 'Congo', 'cg', 'cg.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (52, 'Congo, Democratic Republic of', 'cd', 'cd.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (53, 'Cook Islands', 'ck', 'ck.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (54, 'Costa Rica', 'cr', 'cr.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (55, 'Cote d''Ivoire', 'ci', 'ci.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (56, 'Croatia', 'hr', 'hr.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (57, 'Cuba', 'cu', 'cu.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (58, 'Cyprus', 'cy', 'cy.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (59, 'Czech Republic', 'cz', 'cz.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (60, 'Denmark', 'dk', 'dk.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (61, 'Djibouti', 'dj', 'dj.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (62, 'Dominica', 'dm', 'dm.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (63, 'Dominican Republic', 'do', 'do.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (64, 'Ecuador', 'ec', 'ec.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (65, 'Egypt', 'eg', 'eg.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (66, 'El Salvador', 'sv', 'sv.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (67, 'Equatorial Guinea', 'gq', 'gq.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (68, 'Eritrea', 'er', 'er.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (69, 'Estonia', 'ee', 'ee.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (70, 'Ethiopia', 'et', 'et.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (71, 'Falkland Islands', 'fk', 'fk.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (72, 'Faroe Islands', 'fo', 'fo.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (73, 'Fiji', 'fj', 'fj.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (74, 'Finland', 'fi', 'fi.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (75, 'France', 'fr', 'fr.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (76, 'French Guiana', 'gf', 'gf.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (77, 'French Polynesia', 'pf', 'pf.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (78, 'French Southern Territories', 'tf', 'tf.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (79, 'Gabon', 'ga', 'ga.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (80, 'Gambia', 'gm', 'gm.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (81, 'Georgia', 'ge', 'ge.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (82, 'Germany', 'de', 'de.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (83, 'Ghana', 'gh', 'gh.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (84, 'Gibraltar', 'gi', 'gi.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (85, 'Greece', 'gr', 'gr.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (86, 'Greenland', 'gl', 'gl.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (87, 'Grenada', 'gd', 'gd.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (88, 'Guadeloupe', 'gp', 'gp.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (89, 'Guam', 'gu', 'gu.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (90, 'Guatemala', 'gt', 'gt.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (91, 'Guernsey', 'gg', 'gg.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (92, 'Guinea', 'gn', 'gn.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (93, 'Guinea-Bissau', 'gw', 'gw.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (94, 'Guyana', 'gy', 'gy.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (95, 'Haiti', 'ht', 'ht.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (96, 'Heard Island and McDonald Islands', 'hm', 'hm.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (97, 'Holy See (Vatican City State)', 'va', 'va.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (98, 'Honduras', 'hn', 'hn.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (99, 'Hong Kong', 'hk', 'hk.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (100, 'Hungary', 'hu', 'hu.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (101, 'Iceland', 'is', 'is.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (102, 'India', 'in', 'in.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (103, 'Indonesia', 'id', 'id.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (104, 'Iran', 'ir', 'ir.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (105, 'Iraq', 'iq', 'iq.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (106, 'Ireland', 'ie', 'ie.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (107, 'Isle of Man', 'im', 'im.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (108, 'Israel', 'il', 'il.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (109, 'Italy', 'it', 'it.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (110, 'Jamaica', 'jm', 'jm.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (111, 'Japan', 'jp', 'jp.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (112, 'Jersey', 'je', 'je.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (113, 'Jordan', 'jo', 'jo.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (114, 'Kazakhstan', 'kz', 'kz.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (115, 'Kenya', 'ke', 'ke.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (116, 'Kiribati', 'ki', 'ki.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (117, 'Korea, Democratic People''s Republic of', 'kp', 'kp.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (118, 'Korea, Republic of', 'kr', 'kr.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (119, 'Kuwait', 'kw', 'kw.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (120, 'Kyrgyzstan', 'kg', 'kg.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (121, 'Laos', 'la', 'la.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (122, 'Latvia', 'lv', 'lv.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (123, 'Lebanon', 'lb', 'lb.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (124, 'Lesotho', 'ls', 'ls.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (125, 'Liberia', 'lr', 'lr.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (126, 'Libyan Arab Jamahiriya', 'ly', 'ly.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (127, 'Liechtenstein', 'li', 'li.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (128, 'Lithuania', 'lt', 'lt.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (129, 'Luxembourg', 'lu', 'lu.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (130, 'Macao', 'mo', 'mo.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (131, 'Macedonia', 'mk', 'mk.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (132, 'Madagascar', 'mg', 'mg.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (133, 'Malawi', 'mw', 'mw.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (134, 'Malaysia', 'my', 'my.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (135, 'Maldives', 'mv', 'mv.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (136, 'Mali', 'ml', 'ml.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (137, 'Malta', 'mt', 'mt.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (138, 'Marshall Island', 'mh', 'mh.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (139, 'Martinique', 'mq', 'mq.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (140, 'Mauritania', 'mr', 'mr.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (141, 'Mauritius', 'mu', 'mu.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (142, 'Mayotte', 'yt', 'yt.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (143, 'Mexico', 'mx', 'mx.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (144, 'Micronesia', 'fm', 'fm.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (145, 'Moldova', 'md', 'md.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (146, 'Monaco', 'mc', 'mc.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (147, 'Mongolia', 'mn', 'mn.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (148, 'Montenegro', 'me', 'me.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (149, 'Montserrat', 'ms', 'ms.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (150, 'Morocco', 'ma', 'ma.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (151, 'Mozambique', 'mz', 'mz.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (152, 'Myanmar', 'mm', 'mm.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (153, 'Namibia', 'na', 'na.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (154, 'Nauru', 'nr', 'nr.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (155, 'Nepal', 'np', 'np.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (156, 'Netherlands', 'nl', 'nl.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (157, 'Netherlands Antilles', 'an', 'an.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (158, 'New Caledonia', 'nc', 'nc.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (159, 'New Zealand', 'nz', 'nz.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (160, 'Nicaragua', 'ni', 'ni.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (161, 'Niger', 'ne', 'ne.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (162, 'Nigeria', 'ng', 'ng.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (163, 'Niue', 'nu', 'nu.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (164, 'Norfolk Island', 'nf', 'nf.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (165, 'Northern Mariana Islands', 'mp', 'mp.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (166, 'Norway', 'no', 'no.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (167, 'Oman', 'om', 'om.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (168, 'Pakistan', 'pk', 'pk.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (169, 'Palau', 'pw', 'pw.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (170, 'Palestine', 'ps', 'ps.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (171, 'Panama', 'pa', 'pa.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (172, 'Papua New Guinea', 'pg', 'pg.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (173, 'Paraguay', 'py', 'py.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (174, 'Peru', 'pe', 'pe.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (175, 'Philippines', 'ph', 'ph.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (176, 'Pitcairn', 'pn', 'pn.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (177, 'Poland', 'pl', 'pl.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (178, 'Portugal', 'pt', 'pt.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (179, 'Puerto Rico', 'pr', 'pr.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (180, 'Qatar', 'qa', 'qa.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (181, 'Reunion', 're', 're.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (182, 'Romania', 'ro', 'ro.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (183, 'Russia', 'ru', 'ru.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (184, 'Rwanda', 'rw', 'rw.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (185, 'Saint Helena', 'sh', 'sh.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (186, 'Saint Kitts and Nevis', 'kn', 'kn.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (187, 'Saint Lucia', 'lc', 'lc.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (188, 'Saint Pierre and Miquelon', 'pm', 'pm.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (189, 'Saint Vincent and the Grenadines', 'vc', 'vc.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (190, 'Samoa', 'ws', 'ws.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (191, 'San Marino', 'sm', 'sm.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (192, 'Sao Tome and Principe', 'st', 'st.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (193, 'Saudi Arabia', 'sa', 'sa.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (194, 'Senegal', 'sn', 'sn.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (195, 'Serbia', 'rs', 'rs.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (196, 'Seychelles', 'sc', 'sc.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (197, 'Sierra Leone', 'sl', 'sl.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (198, 'Singapore', 'sg', 'sg.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (199, 'Slovakia', 'sk', 'sk.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (200, 'Slovenia', 'si', 'si.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (201, 'Slomon Islands', 'sb', 'sb.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (202, 'Somalia', 'so', 'so.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (203, 'South Africa', 'za', 'za.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (204, 'South Georgia and the South Sandwich Islands', 'gs', 'gs.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (205, 'Spain', 'es', 'es.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (206, 'Sri Lanka', 'lk', 'lk.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (207, 'Sudan', 'sd', 'sd.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (208, 'Suriname', 'sr', 'sr.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (209, 'Svalbard and Jan Mayen', 'sj', 'sj.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (210, 'Swaziland', 'sz', 'sz.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (211, 'Sweden', 'se', 'se.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (212, 'Switzerland', 'ch', 'ch.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (213, 'Syria', 'sy', 'sy.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (214, 'Taiwan', 'tw', 'tw.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (215, 'Tajikistan', 'tj', 'tj.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (216, 'Tanzania', 'tz', 'tz.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (217, 'Thailand', 'th', 'th.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (218, 'Timor-Leste', 'tl', 'tl.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (219, 'Togo', 'tg', 'tg.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (220, 'Tokelau', 'tk', 'tk.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (221, 'Tonga', 'to', 'to.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (222, 'Trinidad and Tobago', 'tt', 'tt.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (223, 'Tunisia', 'tn', 'tn.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (224, 'Turkey', 'tr', 'tr.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (225, 'Turkmenistan', 'tm', 'tm.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (226, 'Turks and Caicos Islands', 'tc', 'tc.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (227, 'Tuvalu', 'tv', 'tv.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (228, 'Uganda', 'ug', 'ug.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (229, 'Ukraine', 'ua', 'ua.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (230, 'United Arab Emirates', 'ae', 'ae.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (231, 'United Kingdom', 'uk', 'uk.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (232, 'United States', 'us', 'us.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (233, 'United States Minor Outlying Islands', 'um', 'um.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (234, 'Uruguay', 'uy', 'uy.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (235, 'Uzbekistan', 'uz', 'uz.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (236, 'Vanuatu', 'vu', 'vu.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (237, 'Venezuela', 've', 've.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (238, 'Vietnam', 'vn', 'vn.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (239, 'Virgin Islands (British)', 'vg', 'vg.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (240, 'Virgin Islands (US)', 'vi', 'vi.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (241, 'Wallis and Futuna', 'wf', 'wf.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (242, 'Western Sahara', 'eh', 'eh.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (243, 'Yemen', 'ye', 'ye.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (244, 'Zambia', 'zm', 'zm.png')";
				$sql[] = "INSERT INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES (245, 'Zimbabwe', 'zw', 'zw.png')";

				// -- Gender MOD 1.0.1
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD user_gender TINYINT(1) UNSIGNED NOT NULL DEFAULT 0";

				// -- Friend list on member view
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('number_friends', '5', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('friend_avatar_size', '80', 0)";

				// -- ajax chat
				$sql[] = "CREATE TABLE IF NOT EXISTS ajax_chat_online (
					userID INT(11) NOT NULL,
					userName VARCHAR(64) NOT NULL,
					userRole INT(1) NOT NULL,
					channel INT(11) NOT NULL,
					dateTime DATETIME NOT NULL,
					ip VARBINARY(16) NOT NULL
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				$sql[] = "CREATE TABLE IF NOT EXISTS ajax_chat_messages (
					id INT(11) NOT NULL AUTO_INCREMENT,
					userID INT(11) NOT NULL,
					userName VARCHAR(64) NOT NULL,
					userRole INT(1) NOT NULL,
					channel INT(11) NOT NULL,
					dateTime DATETIME NOT NULL,
					ip VARBINARY(16) NOT NULL,
					text TEXT,
					PRIMARY KEY (id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				$sql[] = "CREATE TABLE IF NOT EXISTS ajax_chat_bans (
					userID INT(11) NOT NULL,
					userName VARCHAR(64) NOT NULL,
					dateTime DATETIME NOT NULL,
					ip VARBINARY(16) NOT NULL
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				$sql[] = "CREATE TABLE IF NOT EXISTS ajax_chat_invitations (
					userID INT(11) NOT NULL,
					channel INT(11) NOT NULL,
					dateTime DATETIME NOT NULL
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				// Contact Admin version 1.0.10, module created above already
				// To be on the save site we remove the former contact 1.0.4 entries first if there are
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_bot_forum'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_bot_user'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_confirm'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_confirm_guests'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_max_attempts'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_method'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_reasons'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_version'";
				
				$sql[] = "CREATE TABLE IF NOT EXISTS " . CONTACT_CONFIG_TABLE . " (
					contact_confirm tinyint(1) unsigned NOT NULL DEFAULT '1',
					contact_confirm_guests tinyint(1) unsigned NOT NULL DEFAULT '1',
					contact_max_attempts int(3) unsigned NOT NULL DEFAULT '0',
					contact_method tinyint(1) unsigned NOT NULL DEFAULT '0',
					contact_bot_user mediumint(8) unsigned NOT NULL DEFAULT '0',
					contact_bot_forum mediumint(8) unsigned NOT NULL DEFAULT '0',
					contact_reasons mediumtext NOT NULL,
					contact_founder_only tinyint(1) unsigned NOT NULL DEFAULT '0',
					contact_bbcodes_allowed tinyint(1) unsigned NOT NULL DEFAULT '0',
					contact_smilies_allowed tinyint(1) unsigned NOT NULL DEFAULT '0',
					contact_bot_poster tinyint(1) unsigned NOT NULL DEFAULT '0',
					contact_attach_allowed tinyint(1) unsigned NOT NULL DEFAULT '0',
					contact_urls_allowed tinyint(1) unsigned NOT NULL DEFAULT '0',
					contact_username_chk tinyint(1) unsigned NOT NULL DEFAULT '0',
					contact_email_chk tinyint(1) unsigned NOT NULL DEFAULT '0'					
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option_id, auth_option, is_global, is_local, founder_only) VALUES (NULL, 'a_contact', 1, 0, 0)";
				$sql[] = "INSERT INTO " . CONTACT_CONFIG_TABLE . " (contact_confirm, contact_confirm_guests, contact_max_attempts, contact_method, contact_bot_user, contact_bot_forum, contact_reasons, contact_founder_only, contact_bbcodes_allowed, contact_smilies_allowed, contact_bot_poster, contact_attach_allowed, contact_urls_allowed, contact_username_chk, contact_email_chk) VALUES(1, 1, 0, 0, 2, 2, '', 1, 0, 0, 0, 0, 0, 1, 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('contact_version', '1.0.10', 0)";
	
				// User reminder version 1.0.5, module created above already
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_last_auto_run', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_ignore_no_email', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_delete_choice', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_zero_poster_enable', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_zero_poster_days', '15', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_inactive_enable', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_inactive_days', '60', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_inactive_still_enable', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_inactive_still_days', '30', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_not_logged_in_enable', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_not_logged_in_days', '20', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_enable', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_users_per_page', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_inactive_still_opt_zero', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_inactive_still_opt_inactive', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_inactive_still_opt_not_logged_in', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_log_opt_script', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_log_opt_users_react', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_log_opt_auto_emails', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_protected_users', '', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_protected_group', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('user_reminder_bcc_email', '', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('urmod_version', '1.0.5', 0)";

				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD user_reminder_inactive int(11) NOT NULL DEFAULT '0'";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD user_reminder_zero_poster int(11) NOT NULL DEFAULT '0'";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD user_reminder_inactive_still int(11) NOT NULL DEFAULT '0'";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD user_reminder_not_logged_in int(11) NOT NULL DEFAULT '0'";

				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD INDEX ( `user_reminder_inactive` )"; 
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD INDEX ( `user_reminder_zero_poster` )"; 
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD INDEX ( `user_reminder_inactive_still` )"; 
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD INDEX ( `user_reminder_not_logged_in` )"; 

				// Advanced Block Mod 1.0.3, module created above already
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DNSBL_TABLE . " (
					dnsbl_id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
					left_id mediumint(8) unsigned NOT NULL DEFAULT '0',
					right_id mediumint(8) unsigned NOT NULL DEFAULT '0',
					dnsbl_fqdn varchar(255) binary NOT NULL DEFAULT '',
					dnsbl_lookup varchar(255) binary NOT NULL DEFAULT '',
					dnsbl_register tinyint(1) NOT NULL DEFAULT '0',
					dnsbl_weight tinyint(1) NOT NULL DEFAULT '0',
					PRIMARY KEY (dnsbl_id),
					KEY left_right_id (left_id,right_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (1, 1, 2, 'sbl-xbl.spamhaus.org', 'http://www.spamhaus.org/query/bl?ip=', 0, 4)";
				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (2, 19, 20, 'bl.spamcop.net', 'http://spamcop.net/bl.shtml?', 1, 5)";
				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (3, 21, 22, 'no-more-funn.moensted.dk', 'http://moensted.dk/spam/no-more-funn/?Submit=Submit&addr=', 1, 1)";
				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (4, 27, 28, 'blackholes.five-ten-sg.com', 'http://www.five-ten-sg.com/blackhole.php?Search=Search&ip=', 1, 1)";
				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (5, 13, 14, 'cbl.abuseat.org', 'http://cbl.abuseat.org/lookup.cgi?.submit=Lookup&ip=', 1, 5)";
				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (6, 15, 16, 'bl.spamcannibal.org', '', 1, 5)";
				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (7, 17, 18, 'dnsbl-1.uceprotect.net', 'http://www.uceprotect.net/en/rblcheck.php?ipr=', 1, 5)";
				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (8, 25, 26, 'dnsbl-2.uceprotect.net', 'http://www.uceprotect.net/en/rblcheck.php?ipr=', 1, 1)";
				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (9, 23, 24, 'dnsbl-3.uceprotect.net', 'http://www.uceprotect.net/en/rblcheck.php?ipr=', 1, 1)";
				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (13, 5, 6, 'spam.dnsbl.sorbs.net', 'http://www.sorbs.net/lookup.shtml?', 1, 5)";
				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (12, 3, 4, 'opm.tornevall.org', 'http://www.stopforumspam.com/api?ip=', 0, 4)";
				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (14, 7, 8, 'smtp.dnsbl.sorbs.net', 'http://www.sorbs.net/lookup.shtml?', 1, 5)";
				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (15, 9, 10, 'socks.dnsbl.sorbs.net', 'http://www.sorbs.net/lookup.shtml?', 1, 5)";
				$sql[] = "INSERT INTO " . DNSBL_TABLE . " (dnsbl_id, left_id, right_id, dnsbl_fqdn, dnsbl_lookup, dnsbl_register, dnsbl_weight) VALUES (16, 11, 12, 'escalations.dnsbl.sorbs.net', 'http://www.sorbs.net/lookup.shtml?', 1, 5)";

				$sql[] = "ALTER TABLE " . LOG_TABLE . " ADD dnsbl_id mediumint(8) unsigned NOT NULL DEFAULT '0'";

				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('log_check_dnsbl', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('log_email_check_mx', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('check_tz', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('log_check_tz', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('dnsbl_version', '1.0.3', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('dnsbl_list_version', '1.0.3', 0)";

				// Email on Birthday version 1.0.1b
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('birthday_emails', '0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('birthday_run', '')";

				// Mod_Share_On by JesusADS
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_status', '1')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_userloggedin', '0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_facebook', '1')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_twitter', '1')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_orkut', '0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_digg', '0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_myspace', '1')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_delicious', '0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_technorati', '0')";

				// DM Video
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DM_VIDEO_TABLE . " (
					video_id int(10) unsigned NOT NULL AUTO_INCREMENT,
					video_title varchar(255) binary NOT NULL DEFAULT '',
					video_url mediumtext NOT NULL,
					video_songtext mediumtext NOT NULL,
					video_singer varchar(255) binary NOT NULL DEFAULT '',
					video_duration varchar(255) binary NOT NULL DEFAULT '',
					video_user_id mediumint(8) unsigned NOT NULL DEFAULT '0',
					video_username varchar(32) binary NOT NULL DEFAULT '',
					video_time varchar(15) binary NOT NULL DEFAULT '',
					video_cat_id mediumint(8) unsigned NOT NULL DEFAULT '0',
					video_approval tinyint(3) NOT NULL DEFAULT '0',
					video_counter int(11) unsigned NOT NULL DEFAULT '0',
					video_votetotal int(8) unsigned NOT NULL DEFAULT '0',
					video_votesum int(8) unsigned NOT NULL DEFAULT '0',
					last_poster_id mediumint(8) unsigned NOT NULL DEFAULT '0',
					last_poster_name varchar(255) binary NOT NULL DEFAULT '',
					last_poster_colour varchar(6) binary NOT NULL DEFAULT '',
					last_poster_time int(11) unsigned NOT NULL DEFAULT '0',
					last_poster_cat_id mediumint(8) unsigned NOT NULL DEFAULT '0',
					video_image tinytext NOT NULL,
					bbcode_bitfield varchar(255) binary NOT NULL DEFAULT '',
					bbcode_uid varchar(8) binary NOT NULL DEFAULT '',
					bbcode_options mediumint(4) NOT NULL DEFAULT '0',
					video_reported tinyint(1) NOT NULL DEFAULT '1',
					enable_magic_url tinyint(1) NOT NULL DEFAULT '0',
					enable_smilies tinyint(1) NOT NULL DEFAULT '0',
					enable_bbcode tinyint(1) NOT NULL DEFAULT '0',
					video_announced tinyint(1) NOT NULL DEFAULT '0',
					video_points int(4) NOT NULL DEFAULT '0',
					PRIMARY KEY (video_id),
					KEY video_cat_id (video_cat_id),
					KEY video_user_id (video_user_id),
					KEY video_time (video_time)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DM_VIDEO_CATS_TABLE . " (
					cat_id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
					parent_id mediumint(8) unsigned NOT NULL DEFAULT '0',
					left_id mediumint(8) unsigned NOT NULL DEFAULT '1',
					right_id mediumint(8) unsigned NOT NULL DEFAULT '2',
					cat_parents mediumtext NOT NULL,
					cat_name varchar(255) binary NOT NULL DEFAULT '',
					cat_desc mediumtext NOT NULL,
					cat_desc_uid varchar(8) binary NOT NULL DEFAULT '',
					cat_desc_bitfield varchar(255) binary NOT NULL DEFAULT '',
					cat_desc_options mediumint(8) unsigned NOT NULL DEFAULT '0',
					PRIMARY KEY (cat_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DM_VIDEO_COMMENT_TABLE . " (
					comment_id int(11) unsigned NOT NULL AUTO_INCREMENT,
					video_id int(11) unsigned NOT NULL DEFAULT '0',
					video_user_id int(8) unsigned NOT NULL DEFAULT '0',
					video_username varchar(255) binary NOT NULL DEFAULT '',
					video_user_colour varchar(6) binary NOT NULL DEFAULT '',
					video_time int(11) unsigned NOT NULL DEFAULT '0',
					video_comment mediumtext NOT NULL,
					comment_bbcode_bitfield varchar(255) binary NOT NULL DEFAULT '',
					comment_bbcode_options int(4) unsigned NOT NULL DEFAULT '0',
					comment_bbcode_uid varchar(8) binary NOT NULL DEFAULT '',
					enable_magic_url tinyint(1) NOT NULL DEFAULT '1',
					enable_smilies tinyint(1) NOT NULL DEFAULT '1',
					enable_bbcode tinyint(1) NOT NULL DEFAULT '1',
					PRIMARY KEY (comment_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DM_VIDEO_CONFIG_TABLE . " (
					config_name varchar(255) binary NOT NULL DEFAULT '',
					config_value varchar(255) binary NOT NULL DEFAULT '',
					PRIMARY KEY (config_name)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('video_page_user', '15')";
				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('video_page_acp', '15')";
				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('top_views', '10')";
				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('top_ratings', '10')";
				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('newest_videos', '5')";
				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('video_page_comment', '15')";
				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('copyright_email', 'sample@yourdomain.com')";
				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('copyright_show', 'Sample At Yourdomain Dot Com')";
				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('video_announce_forum_id', '0')";
				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('video_announce_enable', '0')";
				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('new_video_pm_from', '2')";
				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('new_video_pm_to', '2')";
				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('video_points_enable', '0')";
				$sql[] = "INSERT INTO " . DM_VIDEO_CONFIG_TABLE . " (config_name, config_value) VALUES('video_points_value', '0')";
				
				$sql[] = "CREATE TABLE IF NOT EXISTS " . DM_VIDEO_RATE_TABLE . " (
					video_id int(8) unsigned NOT NULL DEFAULT '0',
					user_id int(8) unsigned NOT NULL DEFAULT '0',
					video_rating int(8) unsigned NOT NULL DEFAULT '0',
					rating_date int(11) unsigned NOT NULL DEFAULT '0',
					user_ip varchar(16) binary NOT NULL DEFAULT '',
					PRIMARY KEY (video_id,user_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('dm_video_version', '1.0.5')";



				// Authorizations
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dl_overview', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dl_config', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dl_traffic', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dl_categories', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dl_files', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dl_permissions', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dl_stats', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dl_banlist', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dl_blacklist', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dl_toolbox', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dl_fields', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_country_flags', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('u_dm_video_view', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('u_dm_video_rate', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dm_video_edit', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('u_dm_video_add', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('u_dm_video_edit', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('u_dm_video_del', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('u_dm_video_report', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('u_dm_video_comment_view', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('u_dm_video_comment_add', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('u_dm_video_comment_edit', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('u_dm_video_comment_del', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dm_video_report', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dm_video_release', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dm_video_cats', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dm_video_config', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dm_video_auto_announce', 1, 0, 0)";
				
				$auth_option_id = $db->sql_nextid();
				$sql[] = "INSERT INTO " . ACL_GROUPS_TABLE . " (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) VALUES (5, 0, $auth_option_id, 0, 1)";
				$sql[] = "INSERT INTO " . ACL_OPTIONS_TABLE . " (auth_option, is_global, is_local, founder_only) VALUES ('a_dm_video', 1, 0, 0)";


				// Run the sql statements
				for($i = 0; $i < sizeof($sql); $i++)
				{
					if (!$db->sql_query($sql[$i]))
					{
						$error = $db->sql_error();
						$this->db_error($error['message'], $sql, __LINE__, __FILE__, true);
					}
					else
					{
						$sql_results .= preg_replace('/\t(AND|OR)(\W)/', "\$1\$2", htmlspecialchars(preg_replace('/[\s]*[\n\r\t]+[\n\r\s\t]*/', "\n", $sql[$i]))) . "\n\n";
					}
		
				}
		
				$template->assign_block_vars('checks', array(
					'S_LEGEND'	=> true,
				));
		
				$template->assign_block_vars('checks', array(
					'TITLE'		=> $lang['PORTAL_SQL_UPDATE_DONE'],
					'RESULT'	=> '<textarea rows="10" cols="15">' . trim($sql_results) . '</textarea>',
				));
		
				unset($sql);

				/**
				* We try to set the right CHMOD (write access) for *NIX systems in case config.php is write protected.
				* If not successful, or not allowed by hosting company the user must do this manually before using this installer!
				*/
				@chmod($phpbb_root_path . 'config.' . $phpEx,  0777);

				// Create a lock file to indicate that there is an install in progress
				$fp = @fopen($phpbb_root_path . 'cache/install_lock', 'wb');
				if ($fp === false)
				{
					// We were unable to create the lock file - abort
					$this->p_master->error($lang['UNABLE_WRITE_LOCK'], __LINE__, __FILE__);
				}
				@fclose($fp);
	
				@chmod($phpbb_root_path . 'cache/install_lock', 0666);
	
				// Open, rewrite config.php and chmod all files and directories
				$config_file = $phpbb_root_path . 'config.' . $phpEx;
				
				// Open, retrieve and unset all config.php variables here
				require($config_file);
				$config_data['dbms'] = $dbms;
				$config_data['dbhost'] = $dbhost;
				$config_data['dbport'] = $dbport;
				$config_data['dbname'] = $dbname;
				$config_data['dbuser'] = $dbuser;
				$config_data['dbpasswd'] = $dbpasswd;
				$config_data['table_prefix'] = $table_prefix;
				$config_data['acm_type'] = $acm_type;
				$config_data['load_extensions'] = $load_extensions;
			
				unset($dbms);
				unset($dbhost);
				unset($dbname);
				unset($dbuser);
				unset($dbpasswd);
				unset($table_prefix);
				unset($acm_type);
				unset($load_extensions);
			
				$fp = @fopen($config_file, 'wb');
				if ($fp !== false)
				{
					// Construct config data
					$new_config_data = "<?php\n";
					$new_config_data .= "// phpBB 3.0. Portal XL auto-generated configuration file\n// Do not change anything in this file!\n";
					$new_config_data .= "\$dbms = '" . $config_data['dbms'] . "';\n";
					$new_config_data .= "\$dbhost = '" . $config_data['dbhost'] . "';\n";
					$new_config_data .= "\$dbport = '" . $config_data['dbport'] . "';\n";
					$new_config_data .= "\$dbname = '" . $config_data['dbname'] . "';\n";
					$new_config_data .= "\$dbuser = '" . $config_data['dbuser'] . "';\n";
					$new_config_data .= "\$dbpasswd = '" . $config_data['dbpasswd'] . "';\n\n";
					$new_config_data .= "\$table_prefix = '" . $config_data['table_prefix'] . "';\n";
					$new_config_data .= "\$acm_type = 'file';\n";
					$new_config_data .= "\$load_extensions = '" . $config_data['load_extensions'] . "';\n\n";
					$new_config_data .= "@define('PHPBB_INSTALLED', true);\n";
					$new_config_data .= "// @define('DEBUG', true);\n";
					$new_config_data .= "// @define('DEBUG_EXTRA', true);\n";
					$new_config_data .= "@define('PORTAL', true); // remove this line to pass the portal (remove portal.php from .htaccess)\n";
					$new_config_data .= "@define('PORTAL_INDEX_PAGE', true); // remove above and this line to have a plain phpBB3\n";
					$new_config_data .= '?' . '>'; // Done this to prevent highlighting editors getting confused!
	
					if(!(@fwrite($fp, $new_config_data)))
					{
						trigger_error('Could not write new config.php for unknown reason...');
					}
				
					/**
					* We try to set the right CHMOD (write protected) for *NIX systems.
					* If not successful, or not allowed by hosting company the user must do this manually after installation!
					*/
					@chmod($phpbb_root_path . 'config.' . $phpEx, 0644);
				}
			
				// Remove the lock file
				@unlink($phpbb_root_path . 'cache/install_lock');
				
				// Remove info from prying eyes
				unset($new_config_data);
				unset($config_data);
				add_log('admin', 'Portal XL 5.0 Premod config.php rewritten after install');
				
				// clear cache and log what we did
				$cache->purge();
				add_log('admin', 'Portal XL 5.0 Premod completely installed!');
				add_log('admin', 'LOG_PURGE_CACHE');

			case 'Plain 0.3':
			case 'Plain 0.4':
			case 'Plain 0.5':
			
				$old_upgrade_premod = true;

			break;
		}
	
		$s_hidden_fields = '<input type="hidden" name="mode" value="upgrade_premod" />';
		if ($sub == 'create_table')
		{
			$s_hidden_fields .= '<input type="hidden" name="sub" value="insert_modules" />';
			$l_submit = $lang['INSTALL_NEXT'];
			$body = $lang['PORTAL_FINAL_CONFIGFILE_STEP'];
		}
		else
		{
			$s_hidden_fields .= '<input type="hidden" name="sub" value="insert_modules" />';
			$l_submit = $lang['INSTALL_NEXT'];
			$body = $lang['PORTAL_FINAL_CONFIGFILE_STEP'];
		}		

		$template->assign_vars(array(
			'TITLE'					=> $lang['PORTAL_INSTALL'],
			'BODY'					=> $body,
			'L_SUBMIT'				=> $l_submit,
			'S_HIDDEN_FIELDS'		=> $s_hidden_fields,
			'U_ACTION'				=> $this->p_master->module_url,
						
			'S_LANG_SELECT'			=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
		));

		// $this->meta_refresh($url);

		return;
	}

	function add_module($module_data, $db)
	{
		// no module_id means we're creating a new category/module
		if ($module_data['parent_id'])
		{
			$sql = 'SELECT left_id, right_id
				FROM ' . MODULES_TABLE . "
				WHERE module_class = '" . $db->sql_escape($module_data['module_class']) . "'
					AND module_id = " . (int) $module_data['parent_id'];
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);
	
			if (!$row)
			{
				return 'PARENT_NO_EXIST';
			}
	
			// Workaround
			$row['left_id'] = (int) $row['left_id'];
			$row['right_id'] = (int) $row['right_id'];
	
			$sql = 'UPDATE ' . MODULES_TABLE . "
				SET left_id = left_id + 2, right_id = right_id + 2
				WHERE module_class = '" . $db->sql_escape($module_data['module_class']) . "'
					AND left_id > {$row['right_id']}";
			$db->sql_query($sql);
	
			$sql = 'UPDATE ' . MODULES_TABLE . "
				SET right_id = right_id + 2
				WHERE module_class = '" . $db->sql_escape($module_data['module_class']) . "'
					AND {$row['left_id']} BETWEEN left_id AND right_id";
			$db->sql_query($sql);
	
			$module_data['left_id'] = (int) $row['right_id'];
			$module_data['right_id'] = (int) $row['right_id'] + 1;
		}
		else
		{
			$sql = 'SELECT MAX(right_id) AS right_id
				FROM ' . MODULES_TABLE . "
				WHERE module_class = '" . $db->sql_escape($module_data['module_class']) . "'";
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);
	
			$module_data['left_id'] = (int) $row['right_id'] + 1;
			$module_data['right_id'] = (int) $row['right_id'] + 2;
		}
	
		$sql = 'INSERT INTO ' . MODULES_TABLE . ' ' . $db->sql_build_array('INSERT', $module_data);
		$db->sql_query($sql);
	
		$module_data['module_id'] = $db->sql_nextid();

		// $this->meta_refresh($url);

		return array();
	}

	/**
	* Meta refresh function to be able to change the global time used
	*/
	function meta_refresh($url)
	{
		global $template;

		$template->assign_vars(array(
			'S_REFRESH'	=> true,
			'META'		=> '<meta http-equiv="refresh" content="15;url=' . $url . '" />')
		);
	}
}

?>
