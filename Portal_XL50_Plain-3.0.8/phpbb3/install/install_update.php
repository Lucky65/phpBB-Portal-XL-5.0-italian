<?php
/**
*
* @package install_update.php
* @package Modification Installer for phpBB3 Portal XL
* @version $Id: install_update.php,v 1.1.1.1 2009/05/15 04:03:28 damysterious Exp $
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
		'module_type'		=> 'install',
		'module_title'		=> 'UPDATE',
		'module_filename'	=> substr(basename(__FILE__), 0, -strlen($phpEx)-1),
		'module_order'		=> 20,
		'module_subs'		=> '',
		'module_stages'		=> array('INTRO', 'UPDATE_DB', 'FINAL'),
		'module_reqs'		=> ''
	);
}

/**
* Class holding all convertor-specific details.
* @package install
*/
class update
{
	var $cur_release = 'Plain';

	var $p_master;

	function update(&$p_master)
	{
		$this->p_master = &$p_master;
	}
}

/**
* Convert class for conversions
* @package install
*/
class install_update extends module
{
	/**
	* Variables used while converting, they are accessible from the global variable $convert
	*/
	function install_update(&$p_master)
	{
		$this->p_master = &$p_master;
	}

	function main($mode, $sub)
	{
		global $lang, $template, $phpbb_root_path, $phpEx, $cache, $config, $language, $table_prefix;

		$this->mode = $mode;

		$update = new update($this->p_master);

		switch ($sub)
		{
			case 'intro':
				$this->page_title = $lang['PORTAL_UPDATE'];

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
		
				if ((!defined('PORTAL') && $portal_version >= 'Plain') || !$portal_version || $portal_version < '0.0.0' || ($portal_version >= $update->cur_release && !in_array($portal_version, array('RC4 - Plain', 'Plain', 'Plain 0.1'))))
				{
					$template->assign_vars(array(
						'S_NOT_INSTALLED'		=> true,
						'TITLE'					=> $lang['PORTAL_UPDATE'],
						'BODY'					=> sprintf($lang['PORTAL_UPDATE_NOT_POSSIBLE'], $portal_version, $update->cur_release),
					));

					return;
				}

				$s_hidden_fields = '<input type="hidden" name="mode" value="update" />';
				$s_hidden_fields .= '<input type="hidden" name="sub" value="update_db" />';
				$s_hidden_fields .= '<input type="hidden" name="language" value="' . $language . '" />';

				$template->assign_vars(array(
					'L_SUBMIT'				=> $lang['UPDATE_DATABASE'],
					'TITLE'					=> $lang['PORTAL_UPDATE'],
					'BODY'					=> sprintf($lang['PORTAL_UPDATE_TODO'], $portal_version, $update->cur_release),
					'S_HIDDEN_FIELDS'		=> $s_hidden_fields,
					'U_ACTION'				=> append_sid($phpbb_root_path . 'install/index.' . $phpEx),
				));

			break;

			case 'update_db':
				$this->update_data($sub);

			break;

			case 'final':
				$this->page_title = $lang['UPDATE_COMPLETED'];

				$template->assign_vars(array(
					'TITLE'		=> $lang['UPDATE_COMPLETED'],
					'BODY'		=> $lang['PORTAL_UPDATE_SUCCESS'],
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
		require($phpbb_root_path . 'includes/constants.' . $phpEx);
		require($phpbb_root_path . 'includes/db/' . $dbms . '.' . $phpEx);

		$update = new update($this->p_master);

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

		if ((!defined('PORTAL') && $portal_version >= 'Plain') || !$portal_version || $portal_version < '0.0.0' || ($portal_version >= $update->cur_release && !in_array($portal_version, array('RC4 - Plain', 'Plain', 'Plain 0.1'))))
		{
			return;
		}

		$this->page_title = $lang['STAGE_UPDATE_DB'];

		// Now do the real work from here
		$sql = array();
		$sql_ary = array();

		$old_update = false;

		switch($portal_version)
		{
			case '0.0.0':
			case 'RC4 - Plain':
				$sql[] = "UPDATE " . PORTAL_CONFIG_TABLE . " SET config_value = 'Plain' WHERE config_name = 'portal_version'";

				$sql[] = "INSERT INTO " . PORTAL_MODS_TABLE . " (mod_id, mod_title, mod_version, mod_version_type, mod_desc, mod_url, mod_author, mod_download) VALUES (19, 'Animate Digits IP Tracking Counter', '0.4.0', '', 'This MOD adds a digits visit counter for your phpBB with following features:\\n+ Enable/Disable IP Tracking (with IP tracking, we have &quot;IP Visit Counter&quot;, with no IP tracking, we have &quot;Hits Visit Counter&quot; :p).\\n+ Set number of digits for counter (from 1 to maximize).\\n+ Reset counter (started date time &amp; hits value) from ACP.\\n+ Animate effect from counter images when reload (if you select display as images in counter display mode from ACP).\\n+ Custom display mode of counter: No display/Display as images/Display as text\\n+ Enable/Disable display counter statistics.\\n+ With some other settings in ACP...', 'http://www.vinabb.com', 'nedka', 'http://www.vinabb.com')";

				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_counter_ip_logfile', 'images/counter/ip.txt', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_counter_digits_ani_path', 'images/counter/digits_ani', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_counter_digits_path', 'images/counter/digits', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_counter_block_ip', '1', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_counter_digits_height', '22', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_counter_digits_width', '16', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_counter_digits_number', '6', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_counter_block_time', '60', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_counter_display_mode', '1', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_counter_display_stats', '1', 0)";

			    $sql[] = "ALTER TABLE " . PORTAL_MENU_TABLE . " ADD menu_open MEDIUMINT( 8 ) UNSIGNED NOT NULL DEFAULT '0' AFTER menu_order";


			case 'Plain':
				$sql[] = "UPDATE " . PORTAL_CONFIG_TABLE . " SET config_value = 'Plain 0.1' WHERE config_name = 'portal_version'";
			
				$sql[] = "ALTER TABLE " . PORTAL_PAGES_TABLE . " ADD page_index TINYINT( 1 ) NOT NULL DEFAULT '0' AFTER page_id";
				$sql[] = "ALTER TABLE " . PORTAL_PAGES_TABLE . " DROP PRIMARY KEY , ADD PRIMARY KEY ( page_id , page_index )";
			
			
			case 'Plain 0.1':
				$sql[] = "UPDATE " . PORTAL_CONFIG_TABLE . " SET config_value = 'Plain 0.2' WHERE config_name = 'portal_version'";

				$sql[] = "ALTER TABLE " . PORTAL_ACRONYMS_TABLE . " ADD acronym_url VARCHAR( 150 ) NOT NULL AFTER description";
				
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_news_repository', '0', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_show_all_news', '0', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_news_permissions', '0', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_announcement_repository', '0', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_show_all_announcements', '0', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_announcements_permissions', '0', 0)";

				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_show_tool_tips', '1', 0)";
				
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_pages_page', '1', 0)";
				$sql[] = "INSERT INTO " . PORTAL_CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('portal_pages_page_number', '2', 0)";

			case 'Plain 0.2':
			
			case 'Plain 0.3':
			case 'Plain 0.4':
			case 'Plain 0.5':
			
				$old_update = true;

			break;
		}

		// Run the sql statements
		for($i = 0; $i < sizeof($sql); $i++)
		{
			$db->sql_query($sql[$i]);

			$template->assign_block_vars('update_procedure', array(
				'TITLE'	=> $lang['PORTAL_SQL_UPDATE_DONE'],
				'BODY'	=> $sql[$i],
			));
		}

		unset($sql);
	
		if ($portal_version >= 'Plain')
		{
			$url = $this->p_master->module_url . "?mode=update&amp;sub=final";

			$s_hidden_fields = '<input type="hidden" name="mode" value="update" />';
			$s_hidden_fields .= '<input type="hidden" name="sub" value="final" />';

			$template->assign_block_vars('update_procedure', array(
				'TITLE'					=> $lang['PORTAL_SQL_UPDATE_DONE'],
				'BODY'					=> $sql,
			));
		}
		else
		{
			$url = $this->p_master->module_url . "?mode=convert&amp;sub=update_db";

			$s_hidden_fields = '<input type="hidden" name="mode" value="convert" />';
			$s_hidden_fields .= '<input type="hidden" name="sub" value="update_db" />';
			$s_hidden_fields .= '<input type="hidden" name="old_update" value="' . $old_update . '" />';
		}		

		$template->assign_vars(array(
			'TITLE'				=> $lang['PORTAL_UPDATE'],
			'BODY'				=> $lang['PORTAL_FINAL_UPDATE_STEP'],
			'L_SUBMIT'			=> ($portal_version >= 'Plain') ? $lang['FINAL_STEP'] : $lang['PORTAL_UPDATE'],
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
