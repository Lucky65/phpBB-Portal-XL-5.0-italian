<?php
/**
*
* @package install_upgrade_remove.php
* @package Modification Installer for phpBB3 Portal XL
* @version $Id: install_upgrade_remove.php,v 1.2 2009/10/20 damysterious Exp $
*
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
		'module_title'		=> 'UPGRADE_REMOVE',
		'module_filename'	=> substr(basename(__FILE__), 0, -strlen($phpEx)-1),
		'module_order'		=> 50,
		'module_subs'		=> '',
		'module_stages'		=> array('INTRO', 'UPDATE_DB', 'FINAL'),
		'module_reqs'		=> ''
	);
}

/**
* Class holding all specific details.
* @package install
*/
class upgrade_remove
{
	var $cur_release = 'Premod';

	var $p_master;

	function upgrade_remove(&$p_master)
	{
		$this->p_master = &$p_master;
	}
}

/**
* Convert class for conversions
* @package install
*/
class install_upgrade_remove extends module
{
	/**
	* Variables used while converting, they are accessible from the global variable $convert
	*/
	function install_upgrade_remove(&$p_master)
	{
		$this->p_master = &$p_master;
	}

	function main($mode, $sub)
	{
		global $lang, $template, $phpbb_root_path, $phpEx, $cache, $config, $language, $table_prefix;

		$this->mode = $mode;

		$upgrade_remove = new upgrade_remove($this->p_master);

		switch ($sub)
		{
			case 'intro':
				$this->page_title = $lang['PORTAL_REMOVE_UPGRADE'];

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
		
				if ((!defined('PORTAL') && $portal_version >= 'Premod') || !$portal_version || $portal_version < '0.0.0' || ($portal_version >= $update->cur_release && !in_array($portal_version, array('RC4 - Premod', 'Premod', 'Premod 0.1', 'Premod 0.2', 'Premod 0.3'))))
				{
					$template->assign_vars(array(
						'S_NOT_INSTALLED'		=> true,
						'TITLE'					=> $lang['PORTAL_REMOVE_UPGRADE'],
						'BODY'					=> sprintf($lang['PORTAL_REMOVE_UPGRADE_NOT_POSSIBLE'], $portal_version),
						
						'S_LANG_SELECT'			=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
					));

					return;
				}

				$s_hidden_fields = '<input type="hidden" name="mode" value="upgrade_remove" />';
				$s_hidden_fields .= '<input type="hidden" name="sub" value="update_db" />';

				$template->assign_vars(array(
					'L_SUBMIT'				=> $lang['REMOVE_DATABASE'],
					'TITLE'					=> $lang['PORTAL_REMOVE_UPGRADE'],
					'BODY'					=> sprintf($lang['PORTAL_REMOVE_UPGRADE_TODO'], $portal_version, $upgrade_remove->cur_release),
					'S_HIDDEN_FIELDS'		=> $s_hidden_fields,
					'U_ACTION'				=> append_sid($phpbb_root_path . 'install_portal/index.' . $phpEx),
						
					'S_LANG_SELECT'			=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
				));

			break;

			case 'update_db':
				$this->upgrade_remove_data($sub);

			break;

			case 'final':
				$this->page_title = $lang['REMOVE_COMPLETED'];

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
					$new_config_data .= "// phpBB 3.0.x auto-generated configuration file\n// Do not change anything in this file!\n";
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

				// clear cache
				$cache->purge();

				$template->assign_vars(array(
					'TITLE'		        => $lang['REMOVE_COMPLETED'],
					'BODY'		        => $lang['PORTAL_REMOVE_UPGRADE_SUCCESS'],
					'L_SUBMIT'			=> $lang['FINAL_STEP'],
					'U_ACTION'			=> $this->p_master->module_url . "?mode=overview&sub=intro",
						
					'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
				));
				
			break;
		}
	}

	/**
	* The function which does the actual work (or dispatches it to the relevant places)
	*/
	function upgrade_remove_data($sub)
	{
		global $template, $user, $phpbb_root_path, $phpEx, $db, $lang, $config, $cache;

		require($phpbb_root_path . 'config.' . $phpEx);
		require($phpbb_root_path . 'includes/db/' . $dbms . '.' . $phpEx);

		$upgrade_remove = new upgrade_remove($this->p_master);

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

		if ((!defined('PORTAL') && $portal_version >= 'Premod') || !$portal_version || $portal_version < '0.0.0' || ($portal_version >= $update->cur_release && !in_array($portal_version, array('RC4 - Premod', 'Premod', 'Premod 0.1', 'Premod 0.2', 'Premod 0.3'))))
		{
			return;
		}

		$this->page_title = $lang['STAGE_REMOVE_DB'];

		// Now do the real work from here
		$sql = array();

		$old_upgrade_remove = false;

		switch($portal_version)
		{
			case '0.0.0':
			case 'RC4 - Premod':
			case 'Premod':
			case 'Premod 0.1':
			case 'Premod 0.2':
			case 'Premod 0.3':
			
				/**
				* Removing all database tables of Portal XL
				*/
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_CONFIG_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_CONFIG_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_BLOCK_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_BLOCK_INDEX_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_MENU_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_QUOTE_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_PARTNERS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_BANNER_HO_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_BANNER_VE_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_LINKS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_MODS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_FORUMADDS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_PAGES_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_NEWSFEEDS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_ACRONYMS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . PORTAL_THANKS_TABLE;
				
				$sql[] = "DROP TABLE IF EXISTS " . LOG_LC_EXCLUDE_IP_TABLE;
				
				$sql[] = "DROP TABLE IF EXISTS " . KB_ARTICLE_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . KB_REPORTS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . KB_CATEGORIE_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . KB_CONFIG_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . KB_LOG_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . KB_TYPES_TABLE;
				
				$sql[] = "DROP TABLE IF EXISTS " . CALENDAR_CONFIG_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . CALENDAR_EVENTS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . CALENDAR_EVENT_TYPES_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . CALENDAR_RSVP_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . CALENDAR_RECURRING_EVENTS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . CALENDAR_EVENTS_WATCH;
				$sql[] = "DROP TABLE IF EXISTS " . CALENDAR_WATCH;
				
				$sql[] = "DROP TABLE IF EXISTS " . SHOUTBOX_TABLE;
				
				$sql[] = "DROP TABLE IF EXISTS " . DOWNLOADS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_CAT_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_AUTH_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_COMMENTS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_RATING_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_STATS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_EXT_BLACKLIST;
				$sql[] = "DROP TABLE IF EXISTS " . DL_BANLIST_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_FAVORITES_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_NOTRAF_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_HOTLINK_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_BUGS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_BUG_HISTORY_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_REM_TRAF_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_CAT_TRAF_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_VERSIONS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_FIELDS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_FIELDS_DATA_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_FIELDS_LANG_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DL_LANG_TABLE;
				
				$sql[] = "DROP TABLE IF EXISTS " . POST_REVISIONS_TABLE;

				$sql[] = "DROP TABLE IF EXISTS " . ANNOUNCEMENTS_CENTRE_TABLE;
				
				$sql[] = "DROP TABLE IF EXISTS " . IMPRESSUM_TABLE;

				$sql[] = "DROP TABLE IF EXISTS " . TOPLIST_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . TOPLIST_COMMENTS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . TOPLIST_FLOOD_CONTROL_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . TOPLIST_RATE_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . TOPLIST_HASH_TABLE;
				
				$sql[] = "DROP TABLE IF EXISTS " . WPM_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . COUNTRY_FLAGS_TABLE;

				
				/**
				* Removing all module entries of Portal XL
				*/
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_ADMIN'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_ANNOUNCE_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_NEWS_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_RECENT_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_WORDGRAPH_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_PAYPAL_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_ATTACHMENTS_NUMBER_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_MEMBERS_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_POLLS_INFO'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_BOTS_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_MOST_POSTER_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_WELCOME_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_SHOUTBOX_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_MINICALENDAR_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_WEATHER_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_SCROLL_MESSAGE_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_METATAGS_INFO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_ADMIN_BLOCKS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_MANAGE_BLOCKS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_MANAGE_INDEX_BLOCKS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_MANAGE_PAGES'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_ADMIN_MENUS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_MANAGE_MENUS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_ADMIN_QUOTES'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_MANAGE_QUOTES'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_ADMIN_LINKS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_MANAGE_LINKS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_ADMIN_BANNERS_HO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_MANAGE_BANNERS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_MANAGE_BANNERS_HO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_MANAGE_BANNERS_VE'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_ADMIN_MODS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_MANAGE_MODS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_ADMIN_ADDS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_MANAGE_ADDS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_ADMIN_NEWSFEEDS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_MANAGE_NEWSFEEDS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PORTAL_ADMIN_ACRONYMS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_MANAGE_ACRONYMS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_COUNTER_SETTINGS'";
	
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'KB_NAME'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_basename ) = 'downloads'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_basename ) = 'kb'";
	
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_LC'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_CONNECTIONS_SETTINGS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_CONNECTIONS_LOGS'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_CAT_USERS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_ADD_USER_ACCOUNT'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PM_SPY'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_FAQ_MANAGER'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_SHOUTBOX'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_AS_MANAGEMENT'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_AS_OVERVIEW'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_AS_SETTINGS'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_ANNOUNCEMENTS_CENTRE'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'IMPRESSUM'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_CAT_PHPBB_SEO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PHPBB_SEO_CLASS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_FORUM_URL'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_HTACCESS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_SEO_EXTENDED'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_CONTACT_ADMIN_SETTINGS'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_TOPLIST'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_TOPLIST_SETTINGS'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_WELCOME_PM'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_WPM_SETTINGS'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_DOWNLOADS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'DL_ACP_CONFIG_MANAGEMENT'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'DL_ACP_TRAFFIC_MANAGEMENT'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'DL_ACP_CATEGORIES_MANAGEMENT'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'DL_ACP_FILES_MANAGEMENT'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'DL_ACP_PERMISSIONS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'DL_ACP_STATS_MANAGEMENT'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'DL_ACP_BANLIST'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'DL_EXT_BLACKLIST'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'DL_MANAGE'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'DOWNLOADS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'DL_CONFIG'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'DL_FAVORITE'";
				// -- New on 6.4.0 
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'DL_ACP_FIELDS'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_CALENDAR'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_CALENDAR_SETTINGS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_CALENDAR_ETYPES'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'UCP_MAIN_CALENDAR_REGISTRATION'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'UCP_MAIN_CALENDAR_MYEVENTS'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_FRIEND_SETTINGS'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_PROFILE_FRIENDS'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_SHARE_ON'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_SHARE_ON_SETTINGS'";

				// Reset of autoincrement values 
				$sql[] = "ALTER TABLE " . MODULES_TABLE . "	AUTO_INCREMENT = 0 ";
	
				/**
				* Removing all bbcode entries of Portal XL
				*/
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '13'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '14'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '15'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '16'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '17'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '18'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '19'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '20'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '21'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '22'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '23'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '24'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '25'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '26'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '28'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '53'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '30'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '33'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '36'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '37'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '38'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '39'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '40'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '41'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '42'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '43'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '44'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '64'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '65'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '51'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '52'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '54'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '55'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '56'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '57'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '66'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '62'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '63'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '71'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '72'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '73'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '68'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '69'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '88'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '70'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '74'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '75'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '76'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '77'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '78'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '79'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '80'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '81'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '82'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '83'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '84'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '85'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '86'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '87'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '89'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '90'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '91'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '92'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '93'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '94'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '95'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '96'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '97'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '98'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '99'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '100'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '101'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '102'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '103'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '104'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '105'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '106'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '107'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '108'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '109'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '110'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '111'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '112'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '113'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '114'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '115'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '116'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '117'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '118'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '119'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '120'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '121'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '122'";
				$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '123'";

				// Reset of autoincrement values 
				$sql[] = "ALTER TABLE " . BBCODES_TABLE . "	AUTO_INCREMENT = 0";

				/**
				* Removing all Log connections entries of Portal XL
				*/
				$sql[] = "ALTER TABLE " . LOG_TABLE . " DROP log_number";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'lc_mod_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'lc_disable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'lc_disable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'lc_acp_disable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'lc_founder_disable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'lc_admin_disable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'lc_prune_entries'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'lc_prune_day'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'lc_interval'";

				/**
				* Removing all knowledge base entries of Portal XL
				*/
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_add_kb'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_edit_kb'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_del_kb'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_print_kb'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_attache_kb'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_report_kb'";

				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'm_log_kb'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'm_log_kb_delete'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'm_report_kb'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'm_activate_kb'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'm_edit_kb'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'm_del_kb'";

				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_config_kb'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_categorie_kb'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_types_kb'";

				/**
				* Removing all calendar entries of Portal XL
				*/
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_calendar'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'm_calendar_edit_other_users_events'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'm_calendar_delete_other_users_events'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_calendar_view_events'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_calendar_create_events'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_calendar_edit_events'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_calendar_delete_events'";
				// New entries version 0.1.0
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'm_calendar_edit_other_users_rsvps'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_calendar_create_recurring_events'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_calendar_create_public_events'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_calendar_create_group_events'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_calendar_create_private_events'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_calendar_nonmember_groups'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_calendar_track_rsvps'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_calendar_allow_guests'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_calendar_view_headcount'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_calendar_view_detailed_rsvps'";

				/**
				* Removing all shoutbox entries of Portal XL
				*/
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_as_post'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_as_view'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_as_info'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_as_delete'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_as_edit'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_as_smilies'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_as_bbcode'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_as_mod_edit'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_as_ignore_flood'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_as_manage'";

				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'as_interval'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'as_prune'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'as_max_posts'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'as_flood_interval'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'as_version'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'as_ie_nr'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'as_non_ie_nr'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'last_as_run'";

				/**
				* Removing all Thank Post MOD entries of Portal XL
				*/
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_thanked";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_thanked_others";

				/**
				* Removing all Download Mod entries of Portal XL
				*/
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " DROP group_dl_auto_traffic";

				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_allow_new_download_email";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_allow_fav_download_email";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_allow_new_download_popup";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_allow_fav_download_popup";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_dl_update_time";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_new_download";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_traffic";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_dl_note_type";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_dl_sort_fix";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_dl_sort_opt";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_dl_sort_dir";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_dl_sub_on_index";

				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dl_overview'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dl_config'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dl_traffic'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dl_categories'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dl_files'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dl_stats'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dl_permissions'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dl_banlist'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dl_blacklist'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dl_toolbox'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dl_fields'";

				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_country_flags'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_flags'";

				/**
				* Removing all Anti Bot Question entries of Portal XL
				*/
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'enable_abquestion'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'abquestion'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'abanswer'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'abanswer2'";

				/**
				* Removing all PM Spy of Portal XL
				*/
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_pm_spy'";
			
				/**
				* Removing all ACP Announcement Centre of Portal XL
				*/
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'announcement_show_index'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'announcement_enable'";
				
				/**
				* Removing all phpbb3 Support Ticket of Portal XL
				*/
				$sql[] = "ALTER TABLE " . FORUMS_TABLE . " DROP enable_sts";
				
				/**
				* Removing all Prime Trash Bin 1.0.6 of Portal XL
				*/
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'f_delete_forever'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'f_undelete'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'm_delete_forever'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'm_undelete'";

				$sql[] = "ALTER TABLE " . TOPICS_TABLE . " DROP topic_deleted_from";
				$sql[] = "ALTER TABLE " . TOPICS_TABLE . " DROP topic_deleted_user";
				$sql[] = "ALTER TABLE " . TOPICS_TABLE . " DROP topic_deleted_time";
				$sql[] = "ALTER TABLE " . TOPICS_TABLE . " DROP topic_deleted_reason";

				$sql[] = "ALTER TABLE " . POSTS_TABLE . " DROP post_deleted_from";
				$sql[] = "ALTER TABLE " . POSTS_TABLE . " DROP post_deleted_user";
				$sql[] = "ALTER TABLE " . POSTS_TABLE . " DROP post_deleted_time";
				$sql[] = "ALTER TABLE " . POSTS_TABLE . " DROP post_deleted_reason";
				
				/**
				* Removing all Auto Groups MOD of Portal XL
				*/
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " DROP group_min_posts";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " DROP group_max_posts";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " DROP group_min_warnings";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " DROP group_max_warnings";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " DROP group_min_days";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " DROP group_max_days";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " DROP group_auto_default";
				$sql[] = "ALTER TABLE " . USER_GROUP_TABLE . " DROP auto_group";
				
				/**
				* Removing all Welcome PM on First Login of Portal XL
				*/
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'wpm_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'wpm_send_id'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'wpm_subject'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'wpm_message'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'wpm_preview'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'wpm_variables'";

				/**
				* Removing all Automatic DST 1.0.6 entries of Portal XL
				*/
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'board_dst'";

				/**
				* Removing all Quickly Change Your Language Version 0.1.0 entries of Portal XL
				*/
				$sql[] = "ALTER TABLE " . SESSIONS_TABLE . " DROP session_lang";

				/**
				* Removing all phpbb_seo entries of Portal XL
				*/
				$sql[] = "ALTER TABLE " . TOPICS_TABLE . " DROP topic_url";
				
				/**
				* Removing all Toplist entries of Portal XL
				*/
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_version'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_refresh'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_refresh_time'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_credits'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_cache_time'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_ratings'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_comments'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_pagenation'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_hits_in'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_hits_out'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_hits_img'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_sites_a_page'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_antiflood_time'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_gc'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_last_id'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_in_hits_weight'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_out_hits_weight'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_img_hits_weight'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_rating_weight'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_pr_weight'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_alexa_weight'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_image_cache_days'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_site_of_the_moment_length'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_site_of_the_moment_id'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_site_of_the_moment_previous_id'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_site_of_the_moment_change_time'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_banner_height'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_banner_width'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_points_per_add'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_points_per_edit'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_points_per_img_hit_visitor'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_points_per_in_hit_visitor'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_points_per_out_hit_visitor'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_points_per_img_hit_owner'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_points_per_in_hit_owner'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_points_per_out_hit_owner'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_points_per_rate'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_points_per_comment'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_sitethumbs'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_pr'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_alexa'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_cache'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_cache_clear'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_code_check'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_site_of_the_moment'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_site_of_the_moment_index'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_banner_resize'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_points_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_last_gc'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_cron_lock'";
				// Toplist MOD 2.0.0-RC3
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_show_disabled'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_enable_score'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_help_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_help_custom_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_help_lang_custom_index'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_update_check_next'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_update_check'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_update_check_security'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'toplist_update_check_mail'";
				
				/**
				* Removing all country flags 1.0.0 entries of Portal XL
				*/
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'country_flags_require'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'country_flags_path'";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_country_flag";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " DROP group_country_flag";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_country_flags'";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_gender";

				/**
				* Removing all Gym sitemaps entries of Portal XL
				*/
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'gym_installed'";
				
				/**
				* Removing all Contact board admin 1.0.4 entries of Portal XL
				*/
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_bot_forum'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_bot_user'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_confirm'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_confirm_guests'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_max_attempts'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_method'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_reasons'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'contact_version'";
				
				/**
				* Removing all Add user entries of Portal XL
				*/
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'add_user_version'";

				/**
				* Removing all Friend list on member view of Portal XL
				*/
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'number_friends'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'friend_avatar_size'";
				
				/**
				* Removing all ajax chat of Portal XL
				*/
				$sql[] = "DROP TABLE IF EXISTS ajax_chat_online";
				$sql[] = "DROP TABLE IF EXISTS ajax_chat_messages";
				$sql[] = "DROP TABLE IF EXISTS ajax_chat_bans";
				$sql[] = "DROP TABLE IF EXISTS ajax_chat_invitations";

				/**
				* Removing all Contact Admin version 1.0.10 of Portal XL
				*/
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_contact'";

				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_CAT_CONTACT'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_CONTACT_CONFIG'";
				
				$sql[] = "DROP TABLE IF EXISTS " . CONTACT_CONFIG_TABLE;

				/**
				* Removing all Download Mod for version 6.3.4.RC1 and up of Portal XL
				*/
				$sql[] = "DROP TABLE IF EXISTS " . DL_CONFIG_TABLE;
				
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_delay_auto_traffic'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_delay_post_traffic'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_disable_email'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_disable_popup'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_disable_popup_notify'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_click_reset_time'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_edit_time'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_links_per_page'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_method'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_method_quota'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_mod_version'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_new_time'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_posts'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_stats_perm'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_download_dir'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_download_vc'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_drop_traffic_postdel'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_edit_own_downloads'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_enable_post_dl_traffic'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_guest_stats_show'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_hotlink_action'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_icon_free_for_reg'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_latest_comments'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_limit_desc_on_index'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_newtopic_traffic'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_overall_traffic'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_physical_quota'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_prevent_hotlink'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_recent_downloads'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_reply_traffic'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_report_broken'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_report_broken_lock'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_report_broken_message'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_report_broken_vc'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_shorten_extern_links'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_show_footer_legend'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_show_footer_stat'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_show_real_filetime'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_stop_uploads'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_sort_preform'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_thumb_fsize'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_thumb_xsize'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_thumb_ysize'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_traffic_retime'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_upload_traffic_count'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_use_ext_blacklist'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_use_hacklist'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_user_dl_auto_traffic'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_user_traffic_once'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_enable_dl_topic'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_topic_forum'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_topic_text'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_overall_guest_traffic'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_ext_new_window'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_cap_char_trans'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_cap_lines'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_cap_carree_x'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_cap_carree_y'";
				// -- New on 6.3.7 
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_antispam_posts'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_antispam_hours'";
				// -- New on 6.3.8 
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_traffic_off'";
				// -- New on 6.4.0 
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_diff_topic_user'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_topic_user'";
				// -- New on 6.4.1 
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_todo_link_onoff'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_uconf_link_onoff'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_topic_more_details'";
				// -- New on 6.4.6 
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_active'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_off_hide'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_off_now_time'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_off_from'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_off_till'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dl_on_admins'";
				
				/**
				* Removing all User reminder version 1.0.5 of Portal XL
				*/
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'USER_REMINDER'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_USER_REMINDER_CONFIGURATION'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_USER_REMINDER_ZERO_POSTER'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_USER_REMINDER_INACTIVE'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_USER_REMINDER_NOT_LOGGED_IN'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_USER_REMINDER_INACTIVE_STILL'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_USER_REMINDER_PROTECTED_USERS'";
				
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_last_auto_run'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_ignore_no_email'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_delete_choice'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_zero_poster_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_zero_poster_days'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_inactive_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_inactive_days'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_inactive_still_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_inactive_still_days'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_not_logged_in_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_not_logged_in_days'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_enable'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_users_per_page'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_inactive_still_opt_zero'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_inactive_still_opt_inactive'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_inactive_still_opt_not_logged_in'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_log_opt_script'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_log_opt_users_react'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_log_opt_auto_emails'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_protected_users'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_protected_group'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'user_reminder_bcc_email'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'urmod_version'";
				
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_reminder_inactive";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_reminder_zero_poster";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_reminder_inactive_still";
				$sql[] = "ALTER TABLE " . USERS_TABLE . " DROP user_reminder_not_logged_in";
				
				// $sql[] = "ALTER TABLE " . USERS_TABLE . " DROP INDEX `user_reminder_inactive`";
				// $sql[] = "ALTER TABLE " . USERS_TABLE . " DROP INDEX `user_reminder_zero_poster`";
				// $sql[] = "ALTER TABLE " . USERS_TABLE . " DROP INDEX `user_reminder_inactive_still`";
				// $sql[] = "ALTER TABLE " . USERS_TABLE . " DROP INDEX `user_reminder_not_logged_in`";

				/**
				* Removing all Advanced Block Mod 1.0.3 of Portal XL
				*/
				$sql[] = "DROP TABLE IF EXISTS " . DNSBL_TABLE;
				
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_DNSBL'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_BLOCK_LOGS'";

				$sql[] = "ALTER TABLE " . LOG_TABLE . " DROP dnsbl_id";

				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'log_check_dnsbl'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'log_email_check_mx'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'check_tz'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'log_check_tz'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dnsbl_version'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dnsbl_list_version'";

				/**
				* Removing all Email on Birthday version 1.0.1b
				*/
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'birthday_emails'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'birthday_run'";

				/**
				* Removing all Mod_Share_On by JesusADS
				*/
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'so_status'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'so_userloggedin'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'so_facebook'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'so_twitter'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'so_orkut'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'so_digg'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'so_myspace'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'so_delicious'";
				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'so_technorati'";

				/**
				* Removing all DM Video
				*/
				$sql[] = "DROP TABLE IF EXISTS " . DM_VIDEO_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DM_VIDEO_CATS_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DM_VIDEO_COMMENT_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DM_VIDEO_CONFIG_TABLE;
				$sql[] = "DROP TABLE IF EXISTS " . DM_VIDEO_RATE_TABLE;
				
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_DMV_DM_VIDEO'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_DMV_CONFIG'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_DMV_MANAGE_CATEGORIES'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_DMV_EDIT'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_DMV_RELEASE'";
				$sql[] = "DELETE FROM " . MODULES_TABLE . "	WHERE (" . MODULES_TABLE . ". module_langname ) = 'ACP_DMV_REPORTED'";

				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_dm_video_view'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_dm_video_add'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_dm_video_edit'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_dm_video_del'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_dm_video_rate'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_dm_video_report'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_dm_video_comment_view'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_dm_video_comment_add'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_dm_video_comment_edit'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'u_dm_video_comment_del'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dm_video'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dm_video_auto_announce'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dm_video_config'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dm_video_cats'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dm_video_edit'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dm_video_release'";
				$sql[] = "DELETE FROM " . ACL_OPTIONS_TABLE . " WHERE (" . ACL_OPTIONS_TABLE . " . auth_option ) = 'a_dm_video_report'";

				$sql[] = "DELETE FROM " . CONFIG_TABLE . " WHERE (" . CONFIG_TABLE . " . config_name ) = 'dm_video_version'";



			// Finally clear cache and log what we did
			$cache->purge();
			add_log('admin', 'Portal XL 5.0 Premod completely removed!');
			add_log('admin', 'LOG_PURGE_CACHE');
			
			case 'Premod 0.4':
			case 'Premod 0.5':

			$old_upgrade_remove = true;

			break;
		}

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
		
		if (defined('PORTAL'))
		{
			$url = $this->p_master->module_url . "?mode=upgrade_remove&amp;sub=final";

			$s_hidden_fields = '<input type="hidden" name="mode" value="upgrade_remove" />';
			$s_hidden_fields .= '<input type="hidden" name="sub" value="final" />';

			$template->assign_block_vars('update_procedure', array(
				'TITLE'				=> $lang['PORTAL_SQL_REMOVE_DONE'],
				'BODY'				=> $sql,
				'L_SUBMIT'			=> $lang['NEXT_STEP'],
				'S_HIDDEN_FIELDS'	=> $s_hidden_fields,
				'U_ACTION'			=> $this->p_master->module_url,
			
				'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
			));
		}
		else
		{
			$url = $this->p_master->module_url . "?mode=overview&sub=intro";
		}		

		$template->assign_vars(array(
			'TITLE'				=> $lang['PORTAL_REMOVE_UPGRADE'],
			'BODY'				=> $lang['PORTAL_FINAL_REMOVE_UPGRADE_STEP'],
			'L_SUBMIT'			=> ($portal_version >= 'Premod') ? $lang['NEXT_STEP'] : $lang['PORTAL_REMOVE_UPGRADE'],
			'S_HIDDEN_FIELDS'	=> $s_hidden_fields,
			'U_ACTION'			=> $url,
			
			'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
		));

		// $this->meta_refresh($url);

		return;
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
