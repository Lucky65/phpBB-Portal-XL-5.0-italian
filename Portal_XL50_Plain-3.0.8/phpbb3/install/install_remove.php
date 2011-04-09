<?php
/**
*
* @package install_remove.php
* @package Modification Installer for phpBB3 Portal XL
* @version $Id: install_remove.php,v 1.1.1.1 2009/05/15 04:03:28 damysterious Exp $
*
* @copyright (c) 2007, 2008 Portal XL Group
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
		'module_type'		=> 'uninstall',
		'module_title'		=> 'REMOVE',
		'module_filename'	=> substr(basename(__FILE__), 0, -strlen($phpEx)-1),
		'module_order'		=> 20,
		'module_subs'		=> '',
		'module_stages'		=> array('INTRO', 'REMOVE_DB', 'CONFIG_FILE', 'FINAL'),
		'module_reqs'		=> ''
	);
}

/**
* Class holding all specific details.
* @package install
*/
class remove
{
	var $cur_release = 'Plain';

	var $p_master;

	function remove(&$p_master)
	{
		$this->p_master = &$p_master;
	}
}

/**
* Convert class for conversions
* @package install
*/
class install_remove extends module
{
	/**
	* Variables used while converting, they are accessible from the global variable $convert
	*/
	function install_remove(&$p_master)
	{
		$this->p_master = &$p_master;
	}

	function main($mode, $sub)
	{
		global $lang, $template, $phpbb_root_path, $phpEx, $cache, $config, $language, $table_prefix;

		$this->mode = $mode;

		$remove = new remove($this->p_master);

		switch ($sub)
		{
			case 'intro':
				$this->page_title = $lang['PORTAL_REMOVE'];

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
						'BODY'					=> sprintf($lang['BOARD_NOT_INSTALLED_EXPLAIN'], append_sid($phpbb_root_path . 'install/index.' . $phpEx, 'mode=install&amp;language=' . $language)),
					));

					return;
				}
				
				if (!defined('PORTAL'))
				{
					$template->assign_vars(array(
						'S_NOT_INSTALLED'		=> true,
						'TITLE'					=> $lang['PORTAL_NOT_INSTALLED'],
						'BODY'					=> sprintf($lang['PORTAL_NOT_INSTALLED_EXPLAIN'], append_sid($phpbb_root_path . 'install/index.' . $phpEx, 'mode=install&amp;language=' . $language)),
					));

					return;
				}

				require($phpbb_root_path . 'config.' . $phpEx);
				require($phpbb_root_path . 'includes/constants.' . $phpEx);
				require($phpbb_root_path . 'includes/db/' . $dbms . '.' . $phpEx);
		
				$db = new $sql_db();
				$db->sql_connect($dbhost, $dbuser, $dbpasswd, $dbname, $dbport, false, true);
				unset($dbpasswd);

				define('PORTAL_CONFIG_TABLE',			$table_prefix . 'portal_config');

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
					$template->assign_vars(array(
						'S_NOT_INSTALLED'		=> true,
						'TITLE'					=> $lang['PORTAL_REMOVE'],
						'BODY'					=> sprintf($lang['PORTAL_REMOVE_NOT_POSSIBLE'], $portal_version),
					));

					return;
				}

				$s_hidden_fields = '<input type="hidden" name="mode" value="remove" />';
				$s_hidden_fields .= '<input type="hidden" name="sub" value="remove_db" />';
				$s_hidden_fields .= '<input type="hidden" name="language" value="' . $language . '" />';

				$template->assign_vars(array(
					'L_SUBMIT'				=> $lang['REMOVE_DATABASE'],
					'TITLE'					=> $lang['PORTAL_REMOVE'],
					'BODY'					=> sprintf($lang['PORTAL_REMOVE_TODO'], $portal_version, $remove->cur_release),
					'S_HIDDEN_FIELDS'		=> $s_hidden_fields,
					'U_ACTION'				=> append_sid($phpbb_root_path . 'install/index.' . $phpEx),
				));

			break;

			case 'remove_db':
				$this->remove_data($sub);

			break;

			case 'final':
				$this->page_title = $lang['REMOVE_COMPLETED'];

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
			
					@chmod($phpbb_root_path . 'config.' . $phpEx, 0644);
				}
		
				// Remove the lock file
				@unlink($phpbb_root_path . 'cache/install_lock');
			
				// Remove info from prying eyes
				unset($new_config_data);
				unset($config_data);



				$template->assign_vars(array(
					'TITLE'		=> $lang['REMOVE_COMPLETED'],
					'BODY'		=> $lang['PORTAL_REMOVE_SUCCESS'],
				));

			break;
		}
	}

	/**
	* The function which does the actual work (or dispatches it to the relevant places)
	*/
	function remove_data($sub)
	{
		global $template, $user, $phpbb_root_path, $phpEx, $db, $lang, $config, $cache;

		require($phpbb_root_path . 'config.' . $phpEx);
		require($phpbb_root_path . 'includes/constants.' . $phpEx);
		require($phpbb_root_path . 'includes/db/' . $dbms . '.' . $phpEx);

		$remove = new remove($this->p_master);

		$db = new $sql_db();
		$db->sql_connect($dbhost, $dbuser, $dbpasswd, $dbname, $dbport, false, true);
		unset($dbpasswd);

		define('PORTAL_CONFIG_TABLE',			$table_prefix . 'portal_config');
		define('PORTAL_BLOCK_TABLE',			$table_prefix . 'portal_block');
		define('PORTAL_BLOCK_INDEX_TABLE',		$table_prefix . 'portal_block_index');
		define('PORTAL_MENU_TABLE',         	$table_prefix . 'portal_menu');
		define('PORTAL_QUOTE_TABLE',        	$table_prefix . 'portal_quote');
		define('PORTAL_PARTNERS_TABLE',     	$table_prefix . 'portal_partners');
		define('PORTAL_BANNER_HO_TABLE',    	$table_prefix . 'portal_banners_ho');
		define('PORTAL_BANNER_VE_TABLE',    	$table_prefix . 'portal_banners_ve');
		define('PORTAL_LINKS_TABLE',    		$table_prefix . 'portal_links');
		define('PORTAL_MODS_TABLE',				$table_prefix . 'portal_mods');
		define('PORTAL_FORUMADDS_TABLE',		$table_prefix . 'portal_forumadds');
		define('PORTAL_PAGES_TABLE', 	        $table_prefix .	'portal_pages');
		define('PORTAL_NEWSFEEDS_TABLE',  		$table_prefix . 'portal_newsfeeds');
		define('PORTAL_ACRONYMS_TABLE',  		$table_prefix . 'portal_acronyms');

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

		$old_remove = false;

		switch($portal_version)
		{
			case '0.0.0':
			case 'RC4 - Plain':
			case 'Plain':
			case 'Plain 0.1':
			case 'Plain 0.2':

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
			
			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $remove->cur_release . ' portal database tables removed');
			*/
			
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

			// Reset of autoincrement values 
			$sql[] = "ALTER TABLE " . MODULES_TABLE . "	AUTO_INCREMENT = 0 ";

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $remove->cur_release . ' portal module entries removed');
			*/

			/**
			* Removing all bbcode entries of Portal XL
			*/
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '50'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '51'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '52'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '53'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '54'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '55'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '56'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '57'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '58'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '59'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '60'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '61'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '62'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '63'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '64'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '65'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '66'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '67'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '68'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '69'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '70'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '71'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '72'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '73'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '74'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '75'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '76'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '77'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '78'";
			$sql[] = "DELETE FROM " . BBCODES_TABLE . "	WHERE (" . BBCODES_TABLE . ". bbcode_id ) = '79'";

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $remove->cur_release . ' portal bbcode entries removed');
			*/
			
			case 'Plain 0.3':
			case 'Plain 0.4':
			case 'Plain 0.5':

			$old_remove = true;

			break;
		}

		// Run the sql statements
		for($i = 0; $i < sizeof($sql); $i++)
		{
			$db->sql_query($sql[$i]);

			$template->assign_block_vars('update_procedure', array(
				'TITLE'	=> $lang['PORTAL_SQL_REMOVE_DONE'],
				'BODY'	=> $sql[$i],
			));
		}

		unset($sql);
		
		if (defined('PORTAL'))
		{
			$url = $this->p_master->module_url . "?mode=remove&amp;sub=final";

			$s_hidden_fields = '<input type="hidden" name="mode" value="remove" />';
			$s_hidden_fields .= '<input type="hidden" name="sub" value="final" />';

			$template->assign_block_vars('update_procedure', array(
				'TITLE'					=> $lang['PORTAL_SQL_REMOVE_DONE'],
				'BODY'					=> $sql,
			));
		}
		else
		{
			$url = $this->p_master->module_url . "?mode=install&amp;sub=overview";
		}		

		$template->assign_vars(array(
			'TITLE'				=> $lang['PORTAL_REMOVE'],
			'BODY'				=> $lang['PORTAL_FINAL_REMOVE_STEP'],
			'L_SUBMIT'			=> ($portal_version >= 'Plain') ? $lang['FINAL_STEP'] : $lang['PORTAL_REMOVE'],
			'S_HIDDEN_FIELDS'	=> $s_hidden_fields,
			'U_ACTION'			=> $url,
		));

		$this->meta_refresh($url);

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
			'META'		=> '<meta http-equiv="refresh" content="5;url=' . $url . '" />')
		);
	}
}

?>
