<?php
/**
*
* @package install_install.php
* @package Modification Installer for phpBB3 Portal XL
* @version $Id: install_install.php,v 1.2 2009/10/20 damysterious Exp $
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
	$module[] = array(
		'module_type'		=> 'install',
		'module_title'		=> 'INSTALL',
		'module_filename'	=> substr(basename(__FILE__), 0, -strlen($phpEx)-1),
		'module_order'		=> 10,
		'module_subs'		=> '',
		'module_stages'		=> array('INTRO', 'CREATE_TABLE', 'INSERT_DATA', 'CONFIG_FILE', 'INSERT_MODULES', 'FINAL'),
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
		global $lang, $template, $phpbb_root_path, $phpEx, $cache, $config, $language, $table_prefix;

		$this->mode = $mode;

		switch ($sub)
		{
			case 'intro':
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

				if (!defined('PORTAL_CONFIG_TABLE'))
				{
					require($phpbb_root_path . 'includes/constants.' . $phpEx);
				}

				if (defined('PORTAL'))
				{
					$template->assign_vars(array(
						'S_NOT_INSTALLED'		=> true,
						'TITLE'					=> $lang['PORTAL_INSTALL'],
						'BODY'					=> $lang['PORTAL_INSTALL_NOT_POSSIBLE'],

						'S_LANG_SELECT'			=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
					));

					return;
				}

				$this->page_title = $lang['PORTAL_INSTALL'];

				$s_hidden_fields = '<input type="hidden" name="mode" value="install" />';
				$s_hidden_fields .= '<input type="hidden" name="sub" value="create_table" />';

				$template->assign_vars(array(
					'TITLE'				=> $lang['PORTAL_INSTALL'],
					'BODY'				=> $lang['PORTAL_INSTALL_EXPLAIN'],
					'S_LANG_SELECT'	    => '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
					'L_SUBMIT'			=> $lang['NEXT_STEP'],
					'S_HIDDEN_FIELDS'	=> $s_hidden_fields,
					'U_ACTION'			=> $this->p_master->module_url,

					'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
				));

			break;

			case 'create_table':
				$this->page_title = $user->lang['STAGE_UPDATE_DB'];
				$this->load_schema($sub, 'schema');
				
				$template->assign_vars(array(
					'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
				));
			break;

			case 'insert_data':
				$this->page_title = $user->lang['STAGE_POPULATE_DB'];
				$this->load_schema($sub, 'schema_data');
				
				$template->assign_vars(array(
					'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
				));
			break;

			case 'config_file':
				$this->page_title = $lang['STAGE_CONFIG_FILE'];
				$this->create_config_file($mode, $sub);
				
				$template->assign_vars(array(
					'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
				));
			break;

			case 'insert_modules':
				$this->page_title = $lang['STAGE_INSERT_MODULES'];
				$this->add_modules($mode, $sub);
				
				$template->assign_vars(array(
					'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
				));
			break;

			case 'final':
				$this->page_title = $lang['PORTAL_INSTALL_FINISHED'];

				// clear cache
				$cache->purge();
				
				$url = $this->p_master->module_url . "?mode=upgrade_premod&amp;sub=intro";

				$template->assign_vars(array(
					'TITLE'				=> $lang['PORTAL_INSTALL_FINISHED'],
					'BODY'				=> sprintf($lang['PORTAL_INSTALL_FINISHED_EXPLAIN'], $portal_version),
//					'L_SUBMIT'			=> $lang['INSTALL_LOGIN'],
//					'U_ACTION'			=> append_sid($phpbb_root_path . 'ucp.' . $phpEx .'?mode=login'),
					'L_SUBMIT'			=> $lang['PORTAL_UPGRADE'],
					'U_ACTION'			=> $url,

					'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
				));

			break;
		}

		$this->tpl_name = 'portal_xl/portal_install';
	}

	/**
	* Load the contents of the schema into the database and then alter it based on what has been input during the installation
	*/
	function load_schema($sub, $schema)
	{
		global $lang, $template, $phpbb_root_path, $phpEx;

		require($phpbb_root_path . 'config.' . $phpEx);
		require($phpbb_root_path . 'includes/constants.' . $phpEx);
		require($phpbb_root_path . 'includes/db/' . $dbms . '.' . $phpEx);

		$db = new $sql_db();
		$db->sql_connect($dbhost, $dbuser, $dbpasswd, $dbname, $dbport, false, true);
		unset($dbpasswd);

		if (defined('PORTAL'))
		{
			return;
		}

		if (!defined('PORTAL_CONFIG_TABLE'))
		{
			require($phpbb_root_path . 'includes/constants.' . $phpEx);
		}

		/**
		* Load the schema file and put it into an array for query
		*/
		$schema_file = "./schemas/$schema.sql";

		if (!$schema || !@file_exists($schema_file))
		{
			return;
		}

		$this->page_title = $user->lang['STAGE_UPDATE_DB'];

		include($schema_file);

		for ($i = 0; $i < sizeof($sql); $i++)
		{
			if (!$db->sql_query($sql[$i]))
			{
				$error = $db->sql_error();

				$template->set_filenames(array(
					'body' => 'install_error.html')
				);
				$this->page_header();
				$this->generate_navigation();
		
				$template->assign_vars(array(
					'MESSAGE_TITLE'		=> $lang['INST_ERR_FATAL_DB'],
					'MESSAGE_TEXT'		=> '<p>SQL : ' . $sql . '</p><p><b>' . $error['message'] . '</b></p>',
				));
		
				// Rollback if in transaction
				if ($db->transaction)
				{
					$db->sql_transaction('rollback');
				}
		
				$this->page_footer();
			}
		}

		$s_hidden_fields = '<input type="hidden" name="mode" value="install" />';
		if ($sub == 'create_table')
		{
			$s_hidden_fields .= '<input type="hidden" name="sub" value="insert_data" />';
			$l_submit = $lang['INSTALL_NEXT'];
			$body = $lang['PORTAL_INSTALL_NEXT'];
		}
		else
		{
			$s_hidden_fields .= '<input type="hidden" name="sub" value="config_file" />';
			$l_submit = $lang['INSTALL_NEXT'];
			$body = $lang['STAGE_POPULATE_DB'];
		}		

		$template->assign_vars(array(
			'TITLE'				=> $lang['PORTAL_INSTALL'],
			'BODY'				=> $body,
			'L_SUBMIT'			=> $l_submit,
			'S_HIDDEN_FIELDS'	=> $s_hidden_fields,
			'U_ACTION'			=> $this->p_master->module_url,

			'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
		));
	}
	
	/**
	* Writes the config file to disk, or if unable to do so offers alternative methods
	*/
	function create_config_file($mode, $sub)
	{
		global $lang, $template, $phpbb_root_path, $phpEx;

		$this->page_title = $lang['STAGE_CONFIG_FILE'];

		/**
		* We try to set the right CHMOD (write access) for *NIX systems in case config.php is write protected.
		* If not successful, or not allowed by hosting company the user must do this manually before using this installer!
		*/
		@chmod($phpbb_root_path . 'config.' . $phpEx,  0777);

		require($phpbb_root_path . 'config.' . $phpEx);
		require($phpbb_root_path . 'includes/constants.' . $phpEx);
		require($phpbb_root_path . 'includes/db/' . $dbms . '.' . $phpEx);

		$db = new $sql_db();
		$db->sql_connect($dbhost, $dbuser, $dbpasswd, $dbname, $dbport, false, true);
		unset($dbpasswd);
		
		// Create a lock file to indicate that there is an install in progress
		$fp = @fopen($phpbb_root_path . 'cache/install_lock', 'wb');
		if ($fp === false)
		{
			// We were unable to create the lock file - abort
			$this->p_master->error($lang['UNABLE_WRITE_LOCK'], __LINE__, __FILE__);
		}
		@fclose($fp);

		@chmod($phpbb_root_path . 'cache/install_lock', 0777);

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
			$new_config_data .= '?' . '>'; 
			// Done this to prevent highlighting editors getting confused!

			if(!(@fwrite($fp, $new_config_data)))
			{
				trigger_error('Could not write new config.php for unknown reason...');
			}
			
			/**
			* We try to set the right CHMOD (write protected) for *NIX systems.
			* If not successful, or not allowed by hosting company the user must do this manually after installation!
			*/
			@chmod($phpbb_root_path . 'config.' . $phpEx, 0644);
			@chmod($phpbb_root_path . 'images/counter/ip.txt', 0666);
			@chmod($phpbb_root_path . 'cache', 0777);
			@chmod($phpbb_root_path . 'store', 0777);
			@chmod($phpbb_root_path . 'files', 0777);
			@chmod($phpbb_root_path . 'images/avatars/upload', 0777);
			/*
			* Special Premod parts
			*/
			@chmod($phpbb_root_path . 'dl_mod/thumbs', 0777);
			@chmod($phpbb_root_path . 'dl_mod/downloads', 0777);
			@chmod($phpbb_root_path . 'gallery/images', 0777);
			@chmod($phpbb_root_path . 'phpbb_seo/cache', 0777);
			@chmod($phpbb_root_path . 'gym_sitemaps/cache', 0777);
			@chmod($phpbb_root_path . 'mods/toplist_mod/cache', 0777);
			@chmod($phpbb_root_path . 'mods/toplist_mod/images', 0777);
			@chmod($phpbb_root_path . 'arcade', 0777);
			@chmod($phpbb_root_path . 'arcade/gamedata', 0777);
			@chmod($phpbb_root_path . 'arcade/games', 0777);
			@chmod($phpbb_root_path . 'arcade/install', 0777);
		}
		
		// Remove the lock file
		@unlink($phpbb_root_path . 'cache/install_lock');
		
		// Remove info from prying eyes
		unset($new_config_data);
		unset($config_data);

		$s_hidden_fields = '<input type="hidden" name="mode" value="install" />';
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
			'TITLE'				=> $lang['PORTAL_INSTALL'],
			'BODY'				=> $body,
			'L_SUBMIT'			=> $l_submit,
			'S_HIDDEN_FIELDS'	=> $s_hidden_fields,
			'U_ACTION'			=> $this->p_master->module_url,

			'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
		));
	}
	
	/**
	* Populate the module tables
	*/
	function add_modules($mode, $sub)
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

		if ((!defined('PORTAL') && $portal_version >= 'Plain') || !$portal_version || $portal_version < '0.0.0' || ($portal_version >= $update->cur_release && !in_array($portal_version, array('RC4 - Plain', 'Plain', 'Plain 0.1', 'Plain 0.2'))))
		{
			return;
		}

		$this->page_title = $lang['STAGE_REMOVE_DB'];

		// Now do the real work from here
		$sql = array();

		$old_module = false;

		switch($portal_version)
		{
			case '0.0.0':
			case 'RC4 - Plain':
			case 'Plain':
			case 'Plain 0.1':
			case 'Plain 0.2':
			
			/**
			* first we remove former portal modules to have a plain starting point for all
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

			// Reset of autoincrement values 
			$sql[] = "ALTER TABLE " . MODULES_TABLE . "	AUTO_INCREMENT = 0";

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $module->cur_release . ' portal acp modules removed');
			*/
			
			/**
			* install procedure module entries
			*/
			$modules = new acp_modules();

			// Our tab info
			$acp_portal = array(
   				'module_basename'   => '', // must be blank for category/tab
   				'module_mode'      	=> '', // must be blank for category/tab
   				'module_auth'      	=> '', // must be blank for category/tab
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, // must be 1 for tab
   				'parent_id'         => 0, // a tab is just a category with no parent
   				'module_langname'   => 'ACP_PORTAL', //language key or just a string for the name -- must include
   				'module_class'      => 'acp',
			);
			$modules->update_module_data($acp_portal);

			// Our subcategory info
			$acp_portal_admin = array(
   				'module_basename'   => '', // must be blank for category
   				'module_mode'      	=> '', // must be blank for category/tab
   				'module_auth'      	=> '', // must be blank for category/tab
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_ADMIN', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_admin);
			
			// And finally... our module information
			$acp_portal_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'portal', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_info);
			
			$acp_portal_announce_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'announcements',	// set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_ANNOUNCE_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_announce_info);
			
			$acp_portal_news_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'news', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_NEWS_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_news_info);
			
			$acp_portal_recent_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'recent', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_RECENT_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_recent_info);
			
			$acp_portal_wordgraph_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'wordgraph', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_WORDGRAPH_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_wordgraph_info);
			
			$acp_portal_paypal_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'paypal', 	// set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'  	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_PAYPAL_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_paypal_info);
			
			$acp_portal_attachments_number_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'attachments', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_ATTACHMENTS_NUMBER_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_attachments_number_info);
			
			$acp_portal_members_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'members', 	// set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_MEMBERS_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_members_info);
			
			$acp_portal_polls_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'polls', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_POLLS_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_polls_info);
			
			$acp_portal_bots_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'bots', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_BOTS_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_bots_info);
			
			$acp_portal_most_poster_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'poster', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_MOST_POSTER_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_most_poster_info);
			
			$acp_portal_welcome_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'welcome', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_WELCOME_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_welcome_info);
						
			$acp_portal_weather_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'weather', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_WEATHER_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_weather_info);
			
			$acp_portal_scrollmessage_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'scrollmessage', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_SCROLL_MESSAGE_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_scrollmessage_info);
			
			$acp_portal_metatags_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'metatags', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_METATAGS_INFO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_metatags_info);
			
			$acp_portal_counter_info = array(
   				'module_basename'   => 'portal', // set in includes/acp/info file
   				'module_mode'       => 'counter', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal_admin['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_COUNTER_SETTINGS', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_counter_info);

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $module->cur_release . ' main modules installed');
			*/
			
			// Our subcategory info
			$acp_portal_admin_blocks = array(
   				'module_basename'   => '', // must be blank for category
   				'module_mode'      	=> '', // must be blank for category/tab
   				'module_auth'      	=> '', // must be blank for category/tab
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_ADMIN_BLOCKS', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_admin_blocks);
			
			$acp_portal_manage_blocks = array(
   				'module_basename'   => 'portal_blocks', // set in includes/acp/info file
   				'module_mode'       => 'select', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin_blocks['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_MANAGE_BLOCKS', 	//language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_manage_blocks);
			
			$acp_portal_manage_index_blocks = array(
   				'module_basename'   => 'portal_blocks_index', // set in includes/acp/info file
   				'module_mode'       => 'select', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin_blocks['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_MANAGE_INDEX_BLOCKS', 	//language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_manage_index_blocks);
			
			$acp_portal_manage_pages = array(
   				'module_basename'   => 'portal_pages', // set in includes/acp/info file
   				'module_mode'       => 'select', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin_blocks['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_MANAGE_PAGES', 	//language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_manage_pages);

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $module->cur_release . ' block modules installed');
			*/
		
			// Our subcategory info
			$acp_portal_admin_menus = array(
   				'module_basename'   => '', // must be blank for category
   				'module_mode'      	=> '', // must be blank for category/tab
   				'module_auth'      	=> '', // must be blank for category/tab
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_ADMIN_MENUS', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_admin_menus);
			
			$acp_portal_manage_menus = array(
   				'module_basename'   => 'portal_menu', 		// set in includes/acp/info file
   				'module_mode'       => 'select', 				// set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', 		// use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin_menus['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_MANAGE_MENUS', 	//language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_manage_menus);

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $module->cur_release . ' menus modules installed');
			*/
			
			// Our subcategory info
			$acp_portal_admin_quotes = array(
   				'module_basename'   => '', // must be blank for category
   				'module_mode'      	=> '', // must be blank for category/tab
   				'module_auth'      	=> '', // must be blank for category/tab
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_ADMIN_QUOTES', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_admin_quotes);
			
			$acp_portal_manage_quotes = array(
   				'module_basename'   => 'portal_quotes', // set in includes/acp/info file
   				'module_mode'       => 'select', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin_quotes['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_MANAGE_QUOTES', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_manage_quotes);

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $module->cur_release . ' quotes modules installed');
			*/
			
			// Our subcategory info
			$acp_portal_admin_links = array(
   				'module_basename'   => '', // must be blank for category
   				'module_mode'      	=> '', // must be blank for category/tab
   				'module_auth'      	=> '', // must be blank for category/tab
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_ADMIN_LINKS', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_admin_links);
			
			$acp_portal_manage_links = array(
   				'module_basename'   => 'portal_links', // set in includes/acp/info file
   				'module_mode'       => 'select', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin_links['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_MANAGE_LINKS', 	//language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_manage_links);

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $module->cur_release . ' links modules installed');
			*/
			
			// Our subcategory info
			$acp_portal_admin_banners_ho = array(
   				'module_basename'   => '', // must be blank for category
   				'module_mode'      	=> '', // must be blank for category/tab
   				'module_auth'      	=> '', // must be blank for category/tab
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_ADMIN_BANNERS_HO', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_admin_banners_ho);
			
			$acp_portal_manage_links = array(
   				'module_basename'   => 'portal_banners', // set in includes/acp/info file
   				'module_mode'       => 'select', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin_banners_ho['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_MANAGE_BANNERS', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_manage_links);
			
			$acp_portal_manage_banner_ho = array(
   				'module_basename'   => 'portal_banners_ho', 		// set in includes/acp/info file
   				'module_mode'       => 'select', 				// set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', 		// use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin_banners_ho['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_MANAGE_BANNERS_HO', 	//language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_manage_banner_ho);
			
			$acp_portal_manage_banner_ve = array(
   				'module_basename'   => 'portal_banners_ve', // set in includes/acp/info file
   				'module_mode'       => 'select', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin_banners_ho['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_MANAGE_BANNERS_VE', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_manage_banner_ve);

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $module->cur_release . ' banners modules installed');
			*/
			
			// Our subcategory info
			$acp_portal_admin_mods = array(
   				'module_basename'   => '', // must be blank for category
   				'module_mode'      	=> '', // must be blank for category/tab
   				'module_auth'      	=> '', // must be blank for category/tab
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_ADMIN_MODS', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_admin_mods);
			
			$acp_portal_manage_mods = array(
   				'module_basename'   => 'portal_mods', 		// set in includes/acp/info file
   				'module_mode'       => 'select', 				// set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', 		// use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin_mods['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_MANAGE_MODS', 	//language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_manage_mods);

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $module->cur_release . ' mods modules installed');
			*/
			
			// Our subcategory info
			$acp_portal_admin_adds = array(
   				'module_basename'   => '', // must be blank for category
   				'module_mode'      	=> '', // must be blank for category/tab
   				'module_auth'      	=> '', // must be blank for category/tab
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_ADMIN_ADDS', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_admin_adds);
			
			$acp_portal_manage_adds = array(
   				'module_basename'   => 'portal_forumadds', 		// set in includes/acp/info file
   				'module_mode'       => 'select', 				// set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', 		// use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin_adds['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_MANAGE_ADDS', 	//language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_manage_adds);

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $module->cur_release . ' advertise modules installed');
			*/
			
			// Our subcategory info
			$acp_portal_admin_newsfeeds = array(
   				'module_basename'   => '', // must be blank for category
   				'module_mode'      	=> '', // must be blank for category/tab
   				'module_auth'      	=> '', // must be blank for category/tab
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_ADMIN_NEWSFEEDS', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_admin_newsfeeds);
			
			$acp_portal_manage_newsfeeds = array(
   				'module_basename'   => 'portal_newsfeeds', // set in includes/acp/info file
   				'module_mode'       => 'select', // set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', // use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin_newsfeeds['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_MANAGE_NEWSFEEDS', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_manage_newsfeeds);

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $module->cur_release . ' newsfeeds modules installed');
			*/
			
			// Our subcategory info
			$acp_portal_admin_acronyms = array(
   				'module_basename'   => '', // must be blank for category
   				'module_mode'      	=> '', // must be blank for category/tab
   				'module_auth'      	=> '', // must be blank for category/tab
   				'module_enabled'   	=> 1,
   				'module_display'   	=> 1, 
   				'parent_id'         => $acp_portal['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_PORTAL_ADMIN_ACRONYMS', //language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_admin_acronyms);
			
			$acp_portal_manage_acronyms = array(
   				'module_basename'   => 'portal_acronyms', 		// set in includes/acp/info file
   				'module_mode'       => 'select', 				// set in includes/acp/info file
   				'module_auth'       => 'acl_a_board', 		// use the same as set in your includes/acp/info file
   				'module_enabled'    => 1,
   				'module_display'    => 1, 
   				'parent_id'         => $acp_portal_admin_acronyms['module_id'], // If you wanted to add this to an existing tab, you could have obtained the parent_id here using module_exists('TAB_NAME', 0);
   				'module_langname'   => 'ACP_MANAGE_ACRONYMS', 	//language key or just a string for the name -- must include
   				'module_class'      =>'acp',
			);
			$modules->update_module_data($acp_portal_manage_acronyms);

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $module->cur_release . ' acronyms modules installed');
			*/
			
			case 'Plain 0.3':
			case 'Plain 0.4':
			case 'Plain 0.5':

			$old_module = true;

			break;
		}

		unset($sql);
		
			$s_hidden_fields = '<input type="hidden" name="mode" value="install" />';
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

			$template->assign_vars(array(
				'TITLE'				=> $lang['STAGE_INSERT_MODULES'],
				'BODY'				=> $lang['PORTAL_FINAL_MODULE_STEP'],
				'L_SUBMIT'			=> $l_submit,
				'S_HIDDEN_FIELDS'	=> $s_hidden_fields,
				'U_ACTION'			=> $this->p_master->module_url,

				'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
			));

		return;
	}
}

?>
