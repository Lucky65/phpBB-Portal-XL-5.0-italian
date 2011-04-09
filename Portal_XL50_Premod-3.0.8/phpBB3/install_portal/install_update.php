<?php
/**
*
* @package install_update.php
* @package Modification Installer for phpBB3 Portal XL
* @version $Id: install_update.php,v 1.3 2009/11/20 damysterious Exp $
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
		'module_title'		=> 'UPDATE',
		'module_filename'	=> substr(basename(__FILE__), 0, -strlen($phpEx)-1),
		'module_order'		=> 40,
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
		global $lang, $template, $phpbb_root_path, $phpEx, $cache, $config, $language, $table_prefix, $portal_config;

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
						'BODY'					=> sprintf($lang['PORTAL_NOT_INSTALLED_EXPLAIN'], append_sid($phpbb_root_path . 'install_portal/index.' . $phpEx, 'mode=install&amp;language=' . $language)),
						
						'S_LANG_SELECT'			=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
					));

					return;
				}

				if (!defined('PORTAL_CONFIG_TABLE'))
				{
					require($phpbb_root_path . 'includes/constants.' . $phpEx);
				}
				require($phpbb_root_path . 'includes/db/' . $dbms . '.' . $phpEx);
		
				$db = new $sql_db();
				$db->sql_connect($dbhost, $dbuser, $dbpasswd, $dbname, $dbport, false, true);
				unset($dbpasswd);

				$sql = 'SELECT config_value
					FROM ' . PORTAL_CONFIG_TABLE . "
					WHERE config_name = 'portal_version'";
				$result = $db->sql_query($sql);
		
				while ($row = $db->sql_fetchrow($result))
				{
					$portal_version = $row['config_value'];
				}
				$db->sql_freeresult($result);
		
				if ((!defined('PORTAL') && $portal_version >= 'Plain') || !$portal_version || $portal_version < '0.0.0' || ($portal_version >= $update->cur_release && !in_array($portal_version, array('RC4 - Plain', 'Plain', 'Plain 0.1', 'Premod 0.2'))))
				{
					$template->assign_vars(array(
						'S_NOT_INSTALLED'		=> true,
						'TITLE'					=> $lang['PORTAL_UPDATE'],
						'BODY'					=> sprintf($lang['PORTAL_UPGRADE_NOT_POSSIBLE'], $portal_version, $update->cur_release),
						
						'S_LANG_SELECT'			=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
					));

					return;
				}

				$s_hidden_fields = '<input type="hidden" name="mode" value="update" />';
				if ($sub == 'update_db')
				{
					$s_hidden_fields .= '<input type="hidden" name="sub" value="final" />';
					$l_submit = $lang['INSTALL_NEXT'];
					$body = $lang['PORTAL_FINAL_UPDATE_STEP'];
				}
				else
				{
					$s_hidden_fields .= '<input type="hidden" name="sub" value="update_db" />';
					$l_submit = $lang['INSTALL_NEXT'];
					$body = $lang['PORTAL_UPDATE_TODO'];
				}		
		
				$url = $this->p_master->module_url . "?mode=install_update&amp;sub=update_db";
				
				$template->assign_vars(array(
					'TITLE'				=> $lang['UPDATE_DATABASE'],
					'BODY'				=> $body,
					'L_SUBMIT'			=> $l_submit,
					'S_HIDDEN_FIELDS'	=> $s_hidden_fields,
					'U_ACTION'			=> $url,
						
					'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
				));

			break;

			case 'update_db':
				$this->update_data($sub);

			break;

			case 'final':
				$this->page_title = $lang['UPDATE_COMPLETED'];

				// Clear cache
				$cache->purge();
				
				$url = $this->p_master->module_url . "?mode=install_additional&amp;sub=intro";

				$template->assign_vars(array(
					'TITLE'				=> $lang['UPDATE_COMPLETED'],
					'BODY'				=> $lang['PORTAL_UPDATE_SUCCESS'],
					'U_ACTION'			=> $url,
						
					'S_LANG_SELECT'		=> '<select id="language" name="language">' . $this->p_master->inst_language_select($language) . '</select>',
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

		if (!defined('PORTAL_CONFIG_TABLE'))
		{
			require($phpbb_root_path . 'includes/constants.' . $phpEx);
		}

		$update = new update($this->p_master);

		$db = new $sql_db();
		$db->sql_connect($dbhost, $dbuser, $dbpasswd, $dbname, $dbport, false, true);
		unset($dbpasswd);

		$sql = 'SELECT config_value
			FROM ' . PORTAL_CONFIG_TABLE . "
			WHERE config_name = 'portal_version'";
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$portal_version = $row['config_value'];
		}
		$db->sql_freeresult($result);

		if ((!defined('PORTAL') && $portal_version >= 'Plain') || !$portal_version || $portal_version < '0.0.0' || ($portal_version >= $update->cur_release && !in_array($portal_version, array('RC4 - Plain', 'Plain', 'Plain 0.1', 'Premod 0.2'))))
		{
			return;
		}

		$this->page_title = $lang['STAGE_UPDATE_DB'];

		// Now do the real work from here
		$sql = array();

		$old_update = false;

		switch($portal_version)
		{
			case '0.0.0':
			case 'RC4 - Plain':
			
				$sql[] = "UPDATE " . PORTAL_CONFIG_TABLE . "
						  SET config_value = 'Plain'
						  WHERE config_name = 'portal_version'";
				
				$sql[] = 'SELECT * 
						 FROM ' . PORTAL_MODS_TABLE . "
						 WHERE mod_id = '19'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '19',
						'mod_title' 		=> 'Contatore e monitoraggio IP', 
						'mod_version' 		=> '0.4.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Questa MOD aggiunge un contatore di visite per il tuo phpBB ed ha le seguenti caratteristiche:\nAttiva/Disattiva il monitoraggio IP (con il monitoraggio IP, si ha a disposizione un &quot;Contatore di visite IP&quot;, senza il monitoraggio Ip si ha a disposizione solo le &quot;Maggiori visite&quot; :p).\nConfiguri il numero di cifre da visualizzare per il contatore.\nAzzeri il contatore (data inizio e valori) dal tuo ACP.\nPuoi animare gli effetti del tuo contatore con delle immagini.\nAttivi/disattivi la visualizzazioni delle statistiche.\nAltre configurazioni sono disponibili dal tuo ACP....', 
						'mod_url' 			=> 'http://www.vinabb.com', 
						'mod_author' 		=> 'nedka', 
						'mod_download' 		=> 'http://www.vinabb.com',
					));
				}
				$db->sql_freeresult($result);
				
				$sql[] = 'SELECT * 
						 FROM ' . PORTAL_CONFIG_TABLE . "
						 WHERE config_name = 'portal_counter_ip_logfile'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_counter_ip_logfile',
						'config_value'		=> 'images/counter/ip.txt',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						 FROM ' . PORTAL_CONFIG_TABLE . "
						 WHERE config_name = 'portal_counter_digits_ani_path'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_counter_digits_ani_path',
						'config_value'		=> 'images/counter/digits_ani',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						 FROM ' . PORTAL_CONFIG_TABLE . "
						 WHERE config_name = 'portal_counter_digits_path'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_counter_digits_path',
						'config_value'		=> 'images/counter/digits',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						 FROM ' . PORTAL_CONFIG_TABLE . "
						 WHERE config_name = 'portal_counter_block_ip'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_counter_block_ip',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						 FROM ' . PORTAL_CONFIG_TABLE . "
						 WHERE config_name = 'portal_counter_digits_height'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_counter_digits_height',
						'config_value'		=> 22,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						 FROM ' . PORTAL_CONFIG_TABLE . "
						 WHERE config_name = 'portal_counter_digits_width'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_counter_digits_width',
						'config_value'		=> 16,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						 FROM ' . PORTAL_CONFIG_TABLE . "
						 WHERE config_name = 'portal_counter_digits_number'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_counter_digits_number',
						'config_value'		=> 6,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						 FROM ' . PORTAL_CONFIG_TABLE . "
						 WHERE config_name = 'portal_counter_block_time'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_counter_block_time',
						'config_value'		=> 60,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						 FROM ' . PORTAL_CONFIG_TABLE . "
						 WHERE config_name = 'portal_counter_display_mode'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_counter_display_mode',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						 FROM ' . PORTAL_CONFIG_TABLE . "
						 WHERE config_name = 'portal_counter_display_stats'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_counter_display_stats',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);
			
				$sql[] = "ALTER TABLE " . PORTAL_MENU_TABLE . " ADD menu_open MEDIUMINT( 8 ) UNSIGNED NOT NULL DEFAULT '0' AFTER menu_order";
				
			case 'Plain':
			
				$sql[] = "UPDATE " . PORTAL_CONFIG_TABLE . "
						 SET config_value = 'Plain 0.1'
						 WHERE config_name = 'portal_version'";
			
				$sql[] = "ALTER TABLE " . PORTAL_PAGES_TABLE . " ADD page_index TINYINT( 1 ) NOT NULL DEFAULT '0' AFTER page_id";
				$sql[] = "ALTER TABLE " . PORTAL_PAGES_TABLE . " DROP PRIMARY KEY , ADD PRIMARY KEY ( page_id , page_index )";
			
			case 'Plain 0.1':
			
				$sql[] = "UPDATE " . PORTAL_CONFIG_TABLE . "
						 SET config_value = 'Plain 0.2'
						 WHERE config_name = 'portal_version'";
			
				$sql[] = "ALTER TABLE " . PORTAL_ACRONYMS_TABLE . "	ADD acronym_url VARCHAR( 150 ) NOT NULL AFTER description";

				$sql[] = 'SELECT * 
						FROM ' . PORTAL_CONFIG_TABLE . "
						WHERE config_name = 'portal_news_repository'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_news_repository',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . PORTAL_CONFIG_TABLE . "
						WHERE config_name = 'portal_show_all_news'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_show_all_news',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . PORTAL_CONFIG_TABLE . "
						WHERE config_name = 'portal_news_permissions'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_news_permissions',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . PORTAL_CONFIG_TABLE . "
						WHERE config_name = 'portal_announcement_repository'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_announcement_repository',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . PORTAL_CONFIG_TABLE . "
						WHERE config_name = 'portal_show_all_announcements'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_show_all_announcements',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . PORTAL_CONFIG_TABLE . "
						WHERE config_name = 'portal_announcements_permissions'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_announcements_permissions',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . PORTAL_CONFIG_TABLE . "
						WHERE config_name = 'portal_show_tool_tips'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_show_tool_tips',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

			case 'Plain 0.2':
			case 'Plain 0.3':
			case 'Plain 0.4':
			case 'Plain 0.5':
			
			case 'Premod 0.1':
			case 'Premod 0.2':
			
				$sql[] = "UPDATE " . PORTAL_CONFIG_TABLE . "
						  SET config_value = 'Premod 0.3'
						  WHERE config_name = 'portal_version'";
				
				// -- Automatic DST 2.0.2
				$sql[] = "UPDATE " . CONFIG_TABLE . "
						  SET is_dynamic = '1'
						  WHERE config_name = 'board_dst'";
	
				// -- Automatic DST 1.0.6
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '57'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '57',
						'mod_title' 		=> 'DST automatico', 
						'mod_version' 		=> '2.0.2',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Consente agli utenti di scegliere l\'ora legale (DST) automaticamente, invece di impostarla due volte all\'anno. La base di questo adeguamento &egrave data dalle impostazioni del server web.', 
						'mod_url' 			=> 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=1020905', 
						'mod_author' 		=> 'MartectX', 
						'mod_download' 		=> 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=1020905',
					));
				}
				$db->sql_freeresult($result);

				// -- Smilie Creator
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '58'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '58',
						'mod_title' 		=> 'Creatore Smilie', 
						'mod_version' 		=> '1.0.6',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Con questo modulo &egrave possibile aggiungere alcuni Smilie  per il tuo forum. \nPuoi utilizzare questo MOD come BBCode personalizzato o con un popup creatore smilie.', 
						'mod_url' 			=> 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=1069695',
						'mod_author' 		=> 'Dr.Death', 
						'mod_download' 		=> 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=1069695',
					));
				}
				$db->sql_freeresult($result);

				// -- Quickly Change Your Language Version 0.1.0
				$sql[] = 'SELECT session_lang 
						FROM ' . SESSIONS_TABLE . "
						WHERE session_lang = 'it'";
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$sql[] = "ALTER TABLE " . SESSIONS_TABLE . "
							  ADD session_lang varchar(30) DEFAULT 'it' NOT NULL";
				}
				$db->sql_freeresult($result);
			
				// -- Quickly Change Your Language Version 0.1.0
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '59'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '59',
						'mod_title' 		=> 'Modifica rapida linguaggio', 
						'mod_version' 		=> '0.1.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Permette agli utenti di modificare rapidamente il proprio linguaggio (lang=URL).',
						'mod_url' 			=> '', 
						'mod_author' 		=> 'LEW21', 
						'mod_download' 		=> '',
					));
				}
				$db->sql_freeresult($result);
			
				// -- phpBB Gallery
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '60'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '60',
						'mod_title' 		=> 'phpBB Gallery', 
						'mod_version' 		=> '1.0.5',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Una galleria di immagini integrata nel tuo forum phpbb.', 
						'mod_url' 			=> 'http://www.flying-bits.org/', 
						'mod_author' 		=> 'nickvergessen', 
						'mod_download' 		=> 'http://www.flying-bits.org/',
					));
				}
				$db->sql_freeresult($result);

				// -- jQuery JavaScript Library
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '61'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '61',
						'mod_title' 		=> 'jQuery JavaScript Library', 
						'mod_version' 		=> '1.4.2',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'jQuery &egrave una liberia JavaScript che semplifica i documenti HTML, gestisce gli eventi, l\'animazione, le interazioni e utilizza Ajax per il rapido sviluppo del web. jQuery &egrave destinato a cambiare il modo in cui si scrive in JavaScript.', 
						'mod_url' 			=> 'http://jquery.com/', 
						'mod_author' 		=> 'John Resig', 
						'mod_download' 		=> 'http://jquery.com/',
					));
				}
				$db->sql_freeresult($result);

				// -- Easy Widgets jQuery plugin
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '62'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '62',
						'mod_title' 		=> 'Easy Widgets jQuery plugin', 
						'mod_version' 		=> '2.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Un modo semplice per usare i Widgets nel tuo sito.', 
						'mod_url' 			=> 'http://www.davidesperalta.com/', 
						'mod_author' 		=> 'David Esperalta', 
						'mod_download' 		=> 'http://www.davidesperalta.com/',
					));
				}
				$db->sql_freeresult($result);

				// -- Character Countdown
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '63'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '63',
						'mod_title' 		=> 'Contatore di caratteri', 
						'mod_version' 		=> '0.0.3',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Visualizza il numero di caratteri scritti durante la risposta ad un messaggio.',
						'mod_url' 			=> 'http://www.phpbb.com/community/viewtopic.php?p=10312655#p10312655', 
						'mod_author' 		=> 'Xtracker!', 
						'mod_download' 		=> 'http://www.phpbb.com/community/viewtopic.php?p=10312655#p10312655',
					));
				}
				$db->sql_freeresult($result);

				// -- Toplist MOD
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '64'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '64',
						'mod_title' 		=> 'Mod Toplist', 
						'mod_version' 		=> '2.0.0',
						'mod_version_type' 	=> 'RC4', 
						'mod_desc' 			=> 'Aggiunge una toplist (directory) nel tuo forum phpBB3.', 
						'mod_url' 			=> 'http://www.phpbb.com/community/viewtopic.php?f=70&t=951985', 
						'mod_author' 		=> 'Wyr!H@x!mu$', 
						'mod_download' 		=> 'http://www.wyrihaximus.net',
					));
				}
				$db->sql_freeresult($result);
				
				$sql[] = 'CREATE TABLE IF NOT EXISTS ' . TOPLIST_TABLE . " (
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
				
				$sql[] = 'SELECT * 
						FROM ' . TOPLIST_TABLE . "
						WHERE site_name = 'DaMysterious'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . TOPLIST_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'id' 			=> 5,
						'in_hits' 		=> 0,
						'out_hits' 		=> 1, 
						'image_hits' 	=> 0,
						'pr' 			=> 1,
						'alexa' 		=> 0,
						'owner' 		=> 2,
						'image' 		=> 'SimpleGD:banner3.jpg',
						'image_type' 	=> 0,
						'ip' 			=> '82.95.242.37',
						'site_name' 	=> 'DaMysterious',
						'site_info' 	=> 'Portal XL 5.0 ~ Your insane crazy ass-kicking portal system for phpBB 3.0.x',
						'site_banner' 	=> 'http://www.portalxl.nl/forum/portal/images/banners/400x60/damysterious.xs4all.nl.gif',
						'site_url' 		=> 'http://www.portalxl.nl/forum/',
						'enabled' 		=> 1,
						'show_banner' 	=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'CREATE TABLE IF NOT EXISTS ' . TOPLIST_COMMENTS_TABLE  . " (
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
				
				$sql[] = 'CREATE TABLE IF NOT EXISTS ' . TOPLIST_FLOOD_CONTROL_TABLE  . " (
					id int(32) NOT NULL default '0',
					ip varchar(255) binary NOT NULL default '',
					`time` int(32) NOT NULL default '0',
					`type` varchar(5) binary NOT NULL default '0'
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				$sql[] = 'SELECT * 
						FROM ' . TOPLIST_FLOOD_CONTROL_TABLE . "
						WHERE ip = '82.95.242.37'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . TOPLIST_FLOOD_CONTROL_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'id' 			=> 5,
						'ip' 			=> '82.95.242.37',
						'time' 			=> 1249628709,
						'type' 			=> 'out',
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'CREATE TABLE IF NOT EXISTS ' . TOPLIST_HASH_TABLE . " (
					site_id int(32) NOT NULL default '0',
					`type` varchar(5) binary NOT NULL default '',
					`time` int(32) NOT NULL default '0',
					`hash` varchar(32) binary NOT NULL default '',
					uniqid int(32) NOT NULL default '0'
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = 'CREATE TABLE IF NOT EXISTS ' . TOPLIST_RATE_TABLE . " (
					site_id int(32) NOT NULL default '0',
					user_id int(32) NOT NULL default '0',
					rating int(1) NOT NULL default '0',
					ip varchar(255) binary NOT NULL default ''
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
				
				$sql[] = 'SELECT * 
						FROM ' . TOPLIST_RATE_TABLE . "
						WHERE ip = '82.95.242.37'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . TOPLIST_RATE_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'site_id' 			=> 5,
						'user_id' 			=> 2,
						'rating' 			=> 5,
						'ip' 				=> '82.95.242.37',
					));
				}
				$db->sql_freeresult($result);
				
				// first check if entry exist already
				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_version'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_version',
						'config_value'		=> '2.0.0-RC4',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_refresh'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_refresh',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_refresh_time'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_refresh_time',
						'config_value'		=> 60,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_credits'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_credits',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_cache_time'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_cache_time',
						'config_value'		=> 300,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_ratings'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_ratings',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_comments'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_comments',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_pagenation'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_pagenation',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_hits_in'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_hits_in',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_hits_out'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_hits_out',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_hits_img'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_hits_img',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_sites_a_page'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_sites_a_page',
						'config_value'		=> 50,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_antiflood_time'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_antiflood_time',
						'config_value'		=> 86400,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_gc'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_gc',
						'config_value'		=> 3600,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_last_id'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_last_id',
						'config_value'		=> 5,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_in_hits_weight'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_in_hits_weight',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_out_hits_weight'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_out_hits_weight',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_img_hits_weight'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_img_hits_weight',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_rating_weight'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_rating_weight',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_pr_weight'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_pr_weight',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_alexa_weight'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_alexa_weight',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_image_cache_days'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_image_cache_days',
						'config_value'		=> 7,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_site_of_the_moment_length'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_site_of_the_moment_length',
						'config_value'		=> 604800,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_site_of_the_moment_id'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_site_of_the_moment_id',
						'config_value'		=> '-1',
						'is_dynamic'		=> 1,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_site_of_the_moment_previous_id'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_site_of_the_moment_previous_id',
						'config_value'		=> '-1',
						'is_dynamic'		=> 1,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_site_of_the_moment_change_time'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_site_of_the_moment_change_time',
						'config_value'		=> 0,
						'is_dynamic'		=> 1,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_banner_height'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_banner_height',
						'config_value'		=> 150,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_banner_width'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_banner_width',
						'config_value'		=> 350,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_points_per_add'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_points_per_add',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_points_per_edit'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_points_per_edit',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_points_per_img_hit_visitor'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_points_per_img_hit_visitor',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_points_per_in_hit_visitor'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_points_per_in_hit_visitor',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_points_per_out_hit_visitor'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_points_per_out_hit_visitor',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_points_per_img_hit_owner'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_points_per_img_hit_owner',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_points_per_in_hit_owner'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_points_per_in_hit_owner',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_points_per_out_hit_owner'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_points_per_out_hit_owner',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_points_per_rate'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_points_per_rate',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_points_per_comment'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_points_per_comment',
						'config_value'		=> '1.0',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_sitethumbs'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_sitethumbs',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_pr'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_pr',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_alexa'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_alexa',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_cache'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_cache',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_enable_cache_clear'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_enable_cache_clear',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_code_check'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_code_check',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_site_of_the_moment'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_site_of_the_moment',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_site_of_the_moment_index'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_site_of_the_moment_index',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_banner_resize'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_banner_resize',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_points_enable'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_points_enable',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_last_gc'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_last_gc',
						'config_value'		=> 1249545177,
						'is_dynamic'		=> 1,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'toplist_cron_lock'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'toplist_cron_lock',
						'config_value'		=> 'notlocked',
						'is_dynamic'		=> 1,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . PORTAL_CONFIG_TABLE . "
						WHERE config_name = 'portal_show_thanks'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						  'config_name'		=> 'portal_show_thanks',
						  'config_value'		=> 1,
						  'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . PORTAL_CONFIG_TABLE . "
						WHERE config_name = 'portal_pages_page'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						  'config_name'		=> 'portal_pages_page',
						  'config_value'		=> 1,
						  'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);
				
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_CONFIG_TABLE . "
						WHERE config_name = 'portal_pages_page_number'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_pages_page_number',
						'config_value'		=> 2,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);
				
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
				
				
				$sql[] = 'SELECT * 
						FROM ' . WPM_TABLE . "
						WHERE wpm_config_id = '1'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . WPM_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'wpm_config_id'		=> 1,
						'wpm_enable'		=> 1,
						'wpm_send_id'		=> 2,
						'wpm_preview'		=> 0,
						'wpm_variables'		=> '',
						'wpm_subject'		=> 'Benvenuto su {SITE_NAME}!',
						'wpm_message'		=> 'Ciao, [b]{USERNAME}[/b]!\n\nBenvenuto su {SITE_NAME}	({SITE_DESC})\n\nTi sei registrato il [b]{USER_REGDATE}[/b]. Secondo le tue istruzioni, la tua email &egrave [b]{USER_EMAIL}[/b] ed hai il seguente fuso orario [b]{USER_TZ}[/b]. Siamo felici di sapere che la tua lingua &egrave {USER_LANG_LOCAL}.\n\nPuoi contattarci qui : {BOARD_CONTACT} oppure qui: {BOARD_EMAIL}, quando e come preferisci. Grazie per la tua scelta.\n\n-Grazie per la tua registrazione su {SITE_NAME}!\n\nGrazie da, {SENDER}',
						'wpm_version'		=> '2.2.5',						'wpm_version'		=> '2.2.5',
					));
				}
				$db->sql_freeresult($result);

				// -- New Welcome PM on First Login 2.2.5
				$sql[] = "UPDATE " . PORTAL_MODS_TABLE . " SET `mod_version` = '2.2.5', 
					`mod_url` = 'http://www.phpbb.com/community/viewtopic.php?f=69&t=573016',
					`mod_download` = 'http://www.phpbb.com/community/viewtopic.php?f=69&t=573016',
					`mod_author` = '..::Frans::..' WHERE `phpbb_portal_mods`.`mod_id` =51 LIMIT 1";

				// -- Sortables CAPTCHA Plugin
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '65'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '65',
						'mod_title' 		=> 'Plugin CAPTCHA ordinabile', 
						'mod_version' 		=> '1.0.1',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Questo plugin CAPTCHA aggiunge due colonne, &egrave possibile aggiungere le opzioni per ogni colonna. Tutte le opzioni saranno visualizzate in una colonna, poi l\'utente ha la possibilit&agrave di ordinare le colonne da una all\'altra, trascinandole con il mouse. Con questo plugin non &egrave necessario modificare nessun file, basta caricare tutti i file e funziona!', 
						'mod_url' 			=> 'http://www.phpbb.com/community/viewtopic.php?f=70&t=1714415', 
						'mod_author' 		=> 'Derky', 
						'mod_download' 		=> 'http://www.phpbb.com/community/viewtopic.php?f=70&t=1714415',
					));
				}
				$db->sql_freeresult($result);

				// -- Country Flags Version 3.0.6
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '66'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '66',
						'mod_title' 		=> 'Country Flags', 
						'mod_version' 		=> '3.0.6',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Sei un patriota? Con questo MOD gli utenti registrati potranno selezionare la bandiera della propria nazionalit&agrave.\r\nLe bandiere degli stati saranno visualizzate in phpBB. Puoi selezionare una bandiera di default per i gruppi.\r\nPuoi gestire anche le bandiere (modificare/cancellare/aggiungere), modificare alcune configurazioni, selezionare bandiere per utenti/gruppi...\r\nin ACP, e in UCP per i gruppi.', 
						'mod_url' 			=> 'http://www.vinabb.com/', 
						'mod_author' 		=> 'nedka', 
						'mod_download' 		=> 'http://www.vinabb.com/',
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'country_flags_require'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'country_flags_require',
						'config_value'		=> 1,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'country_flags_path'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'country_flags_path',
						'config_value'		=> 'images/flags',
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'a_country_flags'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'a_country_flags',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'a_flags'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'a_flags',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD user_country_flag varchar(30) binary NOT NULL DEFAULT '0'";
				$sql[] = "ALTER TABLE " . GROUPS_TABLE . " ADD group_country_flag varchar(30) binary NOT NULL DEFAULT '0'";

				$sql[] = "CREATE TABLE IF NOT EXISTS " . COUNTRY_FLAGS_TABLE . " (
					flag_id mediumint(8) unsigned NOT NULL auto_increment,
					flag_country blob NOT NULL,
					flag_code blob NOT NULL,
					flag_image varbinary(255) NOT NULL default '',
					PRIMARY KEY  (flag_id)
				) DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

				$sql[] = 'SELECT * 
						FROM ' . COUNTRY_FLAGS_TABLE . "
						WHERE flag_id = '1'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = "REPLACE INTO " . COUNTRY_FLAGS_TABLE . " (flag_id, flag_country, flag_code, flag_image) VALUES
							(1, 'Afghanistan', 'af', 'af.png'),
							(2, 'Aland Islands', 'ax', 'ax.png'),
							(3, 'Albania', 'al', 'al.png'),
							(4, 'Algeria', 'dz', 'dz.png'),
							(5, 'American Samoa', 'as', 'as.png'),
							(6, 'Andorra', 'ad', 'ad.png'),
							(7, 'Angola', 'ao', 'ao.png'),
							(8, 'Anguilla', 'ai', 'ai.png'),
							(9, 'Antarctica', 'aq', 'aq.png'),
							(10, 'Antigua and Barbuda', 'ag', 'ag.png'),
							(11, 'Argentina', 'ar', 'ar.png'),
							(12, 'Armenia', 'am', 'am.png'),
							(13, 'Aruba', 'aw', 'aw.png'),
							(14, 'Ascension Island', 'ac', 'ac.png'),
							(15, 'Australia', 'au', 'au.png'),
							(16, 'Austria', 'at', 'at.png'),
							(17, 'Azerbaijan', 'az', 'az.png'),
							(18, 'Bahamas', 'bs', 'bs.png'),
							(19, 'Bahrain', 'bh', 'bh.png'),
							(20, 'Bangladesh', 'bd', 'bd.png'),
							(21, 'Barbados', 'bb', 'bb.png'),
							(22, 'Belarus', 'by', 'by.png'),
							(23, 'Belgium', 'be', 'be.png'),
							(24, 'Belize', 'bz', 'bz.png'),
							(25, 'Benin', 'bj', 'bj.png'),
							(26, 'Bermuda', 'bm', 'bm.png'),
							(27, 'Bhutan', 'bt', 'bt.png'),
							(28, 'Bolivia', 'bo', 'bo.png'),
							(29, 'Bosnia and Herzegowina', 'ba', 'ba.png'),
							(30, 'Botswana', 'bw', 'bw.png'),
							(31, 'Bouvet Island', 'bv', 'bv.png'),
							(32, 'Brazil', 'br', 'br.png'),
							(33, 'British Indian Ocean Territory', 'io', 'io.png'),
							(34, 'Brunei', 'bn', 'bn.png'),
							(35, 'Bulgaria', 'bg', 'bg.png'),
							(36, 'Burkina Faso', 'bf', 'bf.png'),
							(37, 'Burundi', 'bi', 'bi.png'),
							(38, 'Cambodia', 'kh', 'kh.png'),
							(39, 'Cameroon', 'cm', 'cm.png'),
							(40, 'Canada', 'ca', 'ca.png'),
							(41, 'Cape Verde', 'cv', 'cv.png'),
							(42, 'Cayman Islands', 'ky', 'ky.png'),
							(43, 'Central African Republic', 'cf', 'cf.png'),
							(44, 'Chad', 'td', 'td.png'),
							(45, 'Chile', 'cl', 'cl.png'),
							(46, 'China', 'cn', 'cn.png'),
							(47, 'Christmas Island', 'cx', 'cx.png'),
							(48, 'Cocos (Keeling) Islands', 'cc', 'cc.png'),
							(49, 'Colombia', 'co', 'co.png'),
							(50, 'Comoros', 'km', 'km.png'),
							(51, 'Congo', 'cg', 'cg.png'),
							(52, 'Congo, Democratic Republic of', 'cd', 'cd.png'),
							(53, 'Cook Islands', 'ck', 'ck.png'),
							(54, 'Costa Rica', 'cr', 'cr.png'),
							(55, 'Cote d''Ivoire', 'ci', 'ci.png'),
							(56, 'Croatia', 'hr', 'hr.png'),
							(57, 'Cuba', 'cu', 'cu.png'),
							(58, 'Cyprus', 'cy', 'cy.png'),
							(59, 'Czech Republic', 'cz', 'cz.png'),
							(60, 'Denmark', 'dk', 'dk.png'),
							(61, 'Djibouti', 'dj', 'dj.png'),
							(62, 'Dominica', 'dm', 'dm.png'),
							(63, 'Dominican Republic', 'do', 'do.png'),
							(64, 'Ecuador', 'ec', 'ec.png'),
							(65, 'Egypt', 'eg', 'eg.png'),
							(66, 'El Salvador', 'sv', 'sv.png'),
							(67, 'Equatorial Guinea', 'gq', 'gq.png'),
							(68, 'Eritrea', 'er', 'er.png'),
							(69, 'Estonia', 'ee', 'ee.png'),
							(70, 'Ethiopia', 'et', 'et.png'),
							(71, 'Falkland Islands', 'fk', 'fk.png'),
							(72, 'Faroe Islands', 'fo', 'fo.png'),
							(73, 'Fiji', 'fj', 'fj.png'),
							(74, 'Finland', 'fi', 'fi.png'),
							(75, 'France', 'fr', 'fr.png'),
							(76, 'French Guiana', 'gf', 'gf.png'),
							(77, 'French Polynesia', 'pf', 'pf.png'),
							(78, 'French Southern Territories', 'tf', 'tf.png'),
							(79, 'Gabon', 'ga', 'ga.png'),
							(80, 'Gambia', 'gm', 'gm.png'),
							(81, 'Georgia', 'ge', 'ge.png'),
							(82, 'Germany', 'de', 'de.png'),
							(83, 'Ghana', 'gh', 'gh.png'),
							(84, 'Gibraltar', 'gi', 'gi.png'),
							(85, 'Greece', 'gr', 'gr.png'),
							(86, 'Greenland', 'gl', 'gl.png'),
							(87, 'Grenada', 'gd', 'gd.png'),
							(88, 'Guadeloupe', 'gp', 'gp.png'),
							(89, 'Guam', 'gu', 'gu.png'),
							(90, 'Guatemala', 'gt', 'gt.png'),
							(91, 'Guernsey', 'gg', 'gg.png'),
							(92, 'Guinea', 'gn', 'gn.png'),
							(93, 'Guinea-Bissau', 'gw', 'gw.png'),
							(94, 'Guyana', 'gy', 'gy.png'),
							(95, 'Haiti', 'ht', 'ht.png'),
							(96, 'Heard Island and McDonald Islands', 'hm', 'hm.png'),
							(97, 'Holy See (Vatican City State)', 'va', 'va.png'),
							(98, 'Honduras', 'hn', 'hn.png'),
							(99, 'Hong Kong', 'hk', 'hk.png'),
							(100, 'Hungary', 'hu', 'hu.png'),
							(101, 'Iceland', 'is', 'is.png'),
							(102, 'India', 'in', 'in.png'),
							(103, 'Indonesia', 'id', 'id.png'),
							(104, 'Iran', 'ir', 'ir.png'),
							(105, 'Iraq', 'iq', 'iq.png'),
							(106, 'Ireland', 'ie', 'ie.png'),
							(107, 'Isle of Man', 'im', 'im.png'),
							(108, 'Israel', 'il', 'il.png'),
							(109, 'Italy', 'it', 'it.png'),
							(110, 'Jamaica', 'jm', 'jm.png'),
							(111, 'Japan', 'jp', 'jp.png'),
							(112, 'Jersey', 'je', 'je.png'),
							(113, 'Jordan', 'jo', 'jo.png'),
							(114, 'Kazakhstan', 'kz', 'kz.png'),
							(115, 'Kenya', 'ke', 'ke.png'),
							(116, 'Kiribati', 'ki', 'ki.png'),
							(117, 'Korea, Democratic People''s Republic of', 'kp', 'kp.png'),
							(118, 'Korea, Republic of', 'kr', 'kr.png'),
							(119, 'Kuwait', 'kw', 'kw.png'),
							(120, 'Kyrgyzstan', 'kg', 'kg.png'),
							(121, 'Laos', 'la', 'la.png'),
							(122, 'Latvia', 'lv', 'lv.png'),
							(123, 'Lebanon', 'lb', 'lb.png'),
							(124, 'Lesotho', 'ls', 'ls.png'),
							(125, 'Liberia', 'lr', 'lr.png'),
							(126, 'Libyan Arab Jamahiriya', 'ly', 'ly.png'),
							(127, 'Liechtenstein', 'li', 'li.png'),
							(128, 'Lithuania', 'lt', 'lt.png'),
							(129, 'Luxembourg', 'lu', 'lu.png'),
							(130, 'Macao', 'mo', 'mo.png'),
							(131, 'Macedonia', 'mk', 'mk.png'),
							(132, 'Madagascar', 'mg', 'mg.png'),
							(133, 'Malawi', 'mw', 'mw.png'),
							(134, 'Malaysia', 'my', 'my.png'),
							(135, 'Maldives', 'mv', 'mv.png'),
							(136, 'Mali', 'ml', 'ml.png'),
							(137, 'Malta', 'mt', 'mt.png'),
							(138, 'Marshall Island', 'mh', 'mh.png'),
							(139, 'Martinique', 'mq', 'mq.png'),
							(140, 'Mauritania', 'mr', 'mr.png'),
							(141, 'Mauritius', 'mu', 'mu.png'),
							(142, 'Mayotte', 'yt', 'yt.png'),
							(143, 'Mexico', 'mx', 'mx.png'),
							(144, 'Micronesia', 'fm', 'fm.png'),
							(145, 'Moldova', 'md', 'md.png'),
							(146, 'Monaco', 'mc', 'mc.png'),
							(147, 'Mongolia', 'mn', 'mn.png'),
							(148, 'Montenegro', 'me', 'me.png'),
							(149, 'Montserrat', 'ms', 'ms.png'),
							(150, 'Morocco', 'ma', 'ma.png'),
							(151, 'Mozambique', 'mz', 'mz.png'),
							(152, 'Myanmar', 'mm', 'mm.png'),
							(153, 'Namibia', 'na', 'na.png'),
							(154, 'Nauru', 'nr', 'nr.png'),
							(155, 'Nepal', 'np', 'np.png'),
							(156, 'Netherlands', 'nl', 'nl.png'),
							(157, 'Netherlands Antilles', 'an', 'an.png'),
							(158, 'New Caledonia', 'nc', 'nc.png'),
							(159, 'New Zealand', 'nz', 'nz.png'),
							(160, 'Nicaragua', 'ni', 'ni.png'),
							(161, 'Niger', 'ne', 'ne.png'),
							(162, 'Nigeria', 'ng', 'ng.png'),
							(163, 'Niue', 'nu', 'nu.png'),
							(164, 'Norfolk Island', 'nf', 'nf.png'),
							(165, 'Northern Mariana Islands', 'mp', 'mp.png'),
							(166, 'Norway', 'no', 'no.png'),
							(167, 'Oman', 'om', 'om.png'),
							(168, 'Pakistan', 'pk', 'pk.png'),
							(169, 'Palau', 'pw', 'pw.png'),
							(170, 'Palestine', 'ps', 'ps.png'),
							(171, 'Panama', 'pa', 'pa.png'),
							(172, 'Papua New Guinea', 'pg', 'pg.png'),
							(173, 'Paraguay', 'py', 'py.png'),
							(174, 'Peru', 'pe', 'pe.png'),
							(175, 'Philippines', 'ph', 'ph.png'),
							(176, 'Pitcairn', 'pn', 'pn.png'),
							(177, 'Poland', 'pl', 'pl.png'),
							(178, 'Portugal', 'pt', 'pt.png'),
							(179, 'Puerto Rico', 'pr', 'pr.png'),
							(180, 'Qatar', 'qa', 'qa.png'),
							(181, 'Reunion', 're', 're.png'),
							(182, 'Romania', 'ro', 'ro.png'),
							(183, 'Russia', 'ru', 'ru.png'),
							(184, 'Rwanda', 'rw', 'rw.png'),
							(185, 'Saint Helena', 'sh', 'sh.png'),
							(186, 'Saint Kitts and Nevis', 'kn', 'kn.png'),
							(187, 'Saint Lucia', 'lc', 'lc.png'),
							(188, 'Saint Pierre and Miquelon', 'pm', 'pm.png'),
							(189, 'Saint Vincent and the Grenadines', 'vc', 'vc.png'),
							(190, 'Samoa', 'ws', 'ws.png'),
							(191, 'San Marino', 'sm', 'sm.png'),
							(192, 'Sao Tome and Principe', 'st', 'st.png'),
							(193, 'Saudi Arabia', 'sa', 'sa.png'),
							(194, 'Senegal', 'sn', 'sn.png'),
							(195, 'Serbia', 'rs', 'rs.png'),
							(196, 'Seychelles', 'sc', 'sc.png'),
							(197, 'Sierra Leone', 'sl', 'sl.png'),
							(198, 'Singapore', 'sg', 'sg.png'),
							(199, 'Slovakia', 'sk', 'sk.png'),
							(200, 'Slovenia', 'si', 'si.png'),
							(201, 'Slomon Islands', 'sb', 'sb.png'),
							(202, 'Somalia', 'so', 'so.png'),
							(203, 'South Africa', 'za', 'za.png'),
							(204, 'South Georgia and the South Sandwich Islands', 'gs', 'gs.png'),
							(205, 'Spain', 'es', 'es.png'),
							(206, 'Sri Lanka', 'lk', 'lk.png'),
							(207, 'Sudan', 'sd', 'sd.png'),
							(208, 'Suriname', 'sr', 'sr.png'),
							(209, 'Svalbard and Jan Mayen', 'sj', 'sj.png'),
							(210, 'Swaziland', 'sz', 'sz.png'),
							(211, 'Sweden', 'se', 'se.png'),
							(212, 'Switzerland', 'ch', 'ch.png'),
							(213, 'Syria', 'sy', 'sy.png'),
							(214, 'Taiwan', 'tw', 'tw.png'),
							(215, 'Tajikistan', 'tj', 'tj.png'),
							(216, 'Tanzania', 'tz', 'tz.png'),
							(217, 'Thailand', 'th', 'th.png'),
							(218, 'Timor-Leste', 'tl', 'tl.png'),
							(219, 'Togo', 'tg', 'tg.png'),
							(220, 'Tokelau', 'tk', 'tk.png'),
							(221, 'Tonga', 'to', 'to.png'),
							(222, 'Trinidad and Tobago', 'tt', 'tt.png'),
							(223, 'Tunisia', 'tn', 'tn.png'),
							(224, 'Turkey', 'tr', 'tr.png'),
							(225, 'Turkmenistan', 'tm', 'tm.png'),
							(226, 'Turks and Caicos Islands', 'tc', 'tc.png'),
							(227, 'Tuvalu', 'tv', 'tv.png'),
							(228, 'Uganda', 'ug', 'ug.png'),
							(229, 'Ukraine', 'ua', 'ua.png'),
							(230, 'United Arab Emirates', 'ae', 'ae.png'),
							(231, 'United Kingdom', 'uk', 'uk.png'),
							(232, 'United States', 'us', 'us.png'),
							(233, 'United States Minor Outlying Islands', 'um', 'um.png'),
							(234, 'Uruguay', 'uy', 'uy.png'),
							(235, 'Uzbekistan', 'uz', 'uz.png'),
							(236, 'Vanuatu', 'vu', 'vu.png'),
							(237, 'Venezuela', 've', 've.png'),
							(238, 'Vietnam', 'vn', 'vn.png'),
							(239, 'Virgin Islands (British)', 'vg', 'vg.png'),
							(240, 'Virgin Islands (US)', 'vi', 'vi.png'),
							(241, 'Wallis and Futuna', 'wf', 'wf.png'),
							(242, 'Western Sahara', 'eh', 'eh.png'),
							(243, 'Yemen', 'ye', 'ye.png'),
							(244, 'Zambia', 'zm', 'zm.png'),
							(245, 'Zimbabwe', 'zw', 'zw.png')";
				}
				$db->sql_freeresult($result);

				// -- Gender MOD 1.0.1
				$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD user_gender TINYINT(1) UNSIGNED NOT NULL DEFAULT 0";

				// -- Gender MOD 1.0.1
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '67'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '67',
						'mod_title' 		=> 'Genders', 
						'mod_version' 		=> '1.0.1',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Questa mod permette di specificare il sesso degli utenti. Essi possono scegliere tra &quot;Maschio&quot;, &quot;Femmina&quot; and &quot;Non specificato&quot;.', 
						'mod_url' 			=> 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=736135&amp;start=0', 
						'mod_author' 		=> 'eviL<3', 
						'mod_download' 		=> 'http://www.phpbb.com/community/viewtopic.php?f=69&amp;t=736135&amp;start=0',
					));
				}
				$db->sql_freeresult($result);

				// -- User achievements 0.0.2
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '68'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '68',
						'mod_title' 		=> 'Archivio utenti', 
						'mod_version' 		=> '0.0.2',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Aggiunge obiettivi nei profili utenti', 
						'mod_url' 			=> 'http://itmods.com/viewtopic.php?p=605#p605', 
						'mod_author' 		=> 'platinum_2007', 
						'mod_download' 		=> 'http://itmods.com/viewtopic.php?p=605#p605',
					));
				}
				$db->sql_freeresult($result);

				// -- Ranks page
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '69'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '69',
						'mod_title' 		=> 'Pagina livelli', 
						'mod_version' 		=> '1.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Aggiunge una pagina dei livelli installati sul forum. La pagina crea automaticamente nuove pagine in presenza di pi&ugrave livelli.', 
                        'mod_url' 			=> 'http://www.portalxl.nl/forum/', 
						'mod_author' 		=> 'DaMysterious', 
						'mod_download' 		=> 'http://www.portalxl.nl/forum/',
					));
				}
				$db->sql_freeresult($result);

				// -- Smiles page
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '70'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '70',
						'mod_title' 		=> 'Pagina smiles', 
						'mod_version' 		=> '1.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Aggiunge una pagina di smiles installati sul forum. La pagina crea automaticamente nuove pagine in presenza di pi&ugrave smiles.', 
						'mod_url' 			=> 'http://www.portalxl.nl/forum/', 
						'mod_author' 		=> 'DaMysterious', 
						'mod_download' 		=> 'http://www.portalxl.nl/forum/',
					));
				}
				$db->sql_freeresult($result);

				// -- Google search
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '71'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '71',
						'mod_title' 		=> 'Ricerca Google', 
						'mod_version' 		=> '1.0.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Aggiunge un pulsante di ricerca Google nella ricerca standard.', 
						'mod_url' 			=> 'http://www.phpbb.com/community/viewtopic.php?f=69&t=1659335', 
						'mod_author' 		=> 'AllCity', 
						'mod_download' 		=> 'http://www.phpbb.com/community/viewtopic.php?f=69&t=1659335',
					));
				}
				$db->sql_freeresult($result);

				// -- Hide bbcode
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '72'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '72',
						'mod_title' 		=> 'Guest Hide BBCode MOD', 
						'mod_version' 		=> '1.4.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Con il BBCode [hide], gli utenti possono nascondere il contenuto dei loro messaggi agli ospiti!', 
						'mod_url' 			=> 'http://www.phpbb.com/community/viewtopic.php?p=8076165', 
						'mod_author' 		=> 'AllCity', 
						'mod_download' 		=> 'http://www.phpbb.com/community/viewtopic.php?p=8076165',
					));
				}
				$db->sql_freeresult($result);

				// -- Friend list on member view
				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'number_friends'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'number_friends',
						'config_value'		=> 5,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . CONFIG_TABLE . "
						WHERE config_name = 'friend_avatar_size'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . CONFIG_TABLE  . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'friend_avatar_size',
						'config_value'		=> 80,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				// -- Friend list on member view
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '73'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '73',
						'mod_title' 		=> 'Amici nel profilo utente', 
						'mod_version' 		=> '1.0.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Aggiunge la lista amici nel profilo utente.', 
						'mod_url' 			=> 'http://www.portalxl.nl/forum/', 
						'mod_author' 		=> 'DaMysterious', 
						'mod_download' 		=> 'http://www.portalxl.nl/forum/',
					));
				}
				$db->sql_freeresult($result);

				// -- phpBB Arcade
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '74'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '74',
						'mod_title' 		=> 'phpBB Arcade', 
						'mod_version' 		=> '1.1',
						'mod_version_type' 	=> 'RC1', 
						'mod_desc' 			=> 'Una sala giochi per phpBB 3.0.x.', 
						'mod_url' 			=> 'http://www.jeffrusso.net', 
						'mod_author' 		=> 'JRSweets', 
						'mod_download' 		=> 'http://www.jeffrusso.net',
					));
				}
				$db->sql_freeresult($result);

				// -- update AJAX User Registration Checks 1.0.0
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '56'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '56',
						'mod_title' 		=> 'AJAX controllo registrazione utente', 
						'mod_version' 		=> '1.0.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Durante la registrazione, questo MOD formula una serie di controlli per vedere se &egrave possibile trovare errori con le informazioni fornite dall\'utente. Tali controlli sono; \n* Verifica se il nome utente &egrave disponibile o se &egrave gi&agrave stato registrato. \n* Controlla che le due password inserite sono identiche. \n* Verifica se il primo indirizzo e-mail &egrave nel formato corretto.', 
						'mod_url' 			=> 'http://www.phpbb.com/community/viewtopic.php?f=70&amp;t=1311855&amp;start=0', 
						'mod_author' 		=> 'andy2295', 
						'mod_download' 		=> 'http://www.phpbb.com/community/viewtopic.php?f=70&amp;t=1311855&amp;start=0',
					));
				}
				$db->sql_freeresult($result);

				// -- update Prime Trash Bin 1.0.8a
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '49'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '49',
						'mod_title' 		=> 'Prime Cestino', 
						'mod_version' 		=> '1.0.8',
						'mod_version_type' 	=> 'a', 
						'mod_desc' 			=> 'Consente di esaminare argomenti e messaggi prima di essere eliminati, in modo che possano essere controllati prima della cancellazione permanente (o ripristinati). Inoltre, offre la possibilit&agrave di inserire una ragione per l\'eliminazione, e consente la possibilit&agrave di spostare argomenti e messaggi in un determinato cestino forum. Argomenti e messaggi eliminati possono essere visualizzati, ripristinati o cancellati in modo permanente dagli amministratori.', 
						'mod_url' 			=> 'http://www.absoluteanime.com/admin/mods.htm#trash_bin', 
						'mod_author' 		=> 'primehalo', 
						'mod_download' 		=> 'http://www.absoluteanime.com/admin/mods.htm#trash_bin',
					));
				}
				$db->sql_freeresult($result);

				// -- update Prime Quick Reply 1.0.7
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '27'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '27',
						'mod_title' 		=> 'Prime risposta rapida', 
						'mod_version' 		=> '1.0.7',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Aggiunge una risposta rapida nel forum, sono disponibili nuovi strumenti configurabili via ACP come:  Anti-bot, Citazioni multiple, e Prime Cestino..', 
						'mod_url' 			=> 'http://www.absoluteanime.com/admin/mods.htm', 
						'mod_author' 		=> 'primehalo', 
						'mod_download' 		=> 'http://www.absoluteanime.com/admin/mods.htm',
					));
				}
				$db->sql_freeresult($result);

				// -- flag list page
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '75'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '75',
						'mod_title' 		=> 'Lista bandiere', 
						'mod_version' 		=> '1.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Aggiunge la lista delle bandiere installate sul forum.', 
						'mod_url' 			=> 'http://www.portalxl.nl/forum/', 
						'mod_author' 		=> 'DaMysterious', 
						'mod_download' 		=> 'http://www.portalxl.nl/forum/',
					));
				}
				$db->sql_freeresult($result);

				// -- User Blog Mod
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '76'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '76',
						'mod_title' 		=> 'Mod blog utente', 
						'mod_version' 		=> '1.0.13',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Aggiunge un blog nel forum phpBB3.', 
						'mod_url' 			=> 'http://www.lithiumstudios.org/', 
						'mod_author' 		=> 'EXreaction', 
						'mod_download' 		=> 'http://www.lithiumstudios.org/',
					));
				}
				$db->sql_freeresult($result);
				
				// -- groups list page
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '77'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '77',
						'mod_title' 		=> 'Pagina gruppi', 
						'mod_version' 		=> '1.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Aggiunge una lista gruppi mostrando tutti i gruppi disponibili in Portal XL Premod.',  
						'mod_url' 			=> 'http://www.portalxl.nl/forum/', 
						'mod_author' 		=> 'DaMysterious', 
						'mod_download' 		=> 'http://www.portalxl.nl/forum/',
					));
				}
				$db->sql_freeresult($result);

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
				
				// -- ajax chat
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '78'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '78',
						'mod_title' 		=> 'AJAX Chat', 
						'mod_version' 		=> '0.8.3',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'AJAX Chat &egrave una chat open source altamente configurabile in JavaScript, PHP and MySQL. La chat utilizza la tecnologia Flash lato client e Ruby lato server. Questa versione &egrave un\'integrazione di phpBB.', 
						'mod_url' 			=> 'https://blueimp.net/ajax/', 
						'mod_author' 		=> 'Sebastian Tschan', 
						'mod_download' 		=> 'https://blueimp.net/ajax/',
					));
				}
				$db->sql_freeresult($result);

				// -- Automatic DST 2
				$sql[] = "ALTER TABLE " . USERS_TABLE . " CHANGE user_timezone user_timezone VARCHAR( 255 ) NOT NULL";
				
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

				// -- Contact board administration 1.0.10
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '51'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '52',
						'mod_title' 		=> 'Contatto amministratore forum', 
						'mod_version' 		=> '1.0.10',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Questo MOD configurabile nel pannello amministrativo consente di contattare l\'amministratore del forum.', 
						'mod_url' 			=> 'http://www.phpbb.com/community/viewtopic.php?p=11384095#p11384095', 
						'mod_author' 		=> 'RMcGirr83', 
						'mod_download' 		=> 'http://www.phpbb.com/community/viewtopic.php?p=11384095#p11384095',
					));
				}
				$db->sql_freeresult($result);
				
				// -- New on 6.3.3 download mod 
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
				
				$sql[] = "DROP TABLE IF EXISTS " . DL_CONFIG_TABLE;
				
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
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dl_mod_version', '6.4.5', 0)";
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
				
				// -- Table: 'phpbb_dl_versions'
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
				
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '21'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '22',
						'mod_title' 		=> 'Download Mod per phpBB 3', 
						'mod_version' 		=> '6.4.7',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Questa mod genera una pagina di downloads per il tuo forum phpBB 3.', 
						'mod_url' 			=> 'http://phpbb3.oxpus.net/index.php', 
						'mod_author' 		=> 'OXPUS', 
						'mod_download' 		=> 'http://phpbb3.oxpus.net/index.php',
					));
				}
				$db->sql_freeresult($result);
				
				// -- Log connections 1.0.3
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '27'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '27',
						'mod_title' 		=> 'Log connections', 
						'mod_version' 		=> '1.0.3',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'This MOD allows to log forum connections in success or failure. In ACP, many options are available to limit or maximize the number of logs in your database.', 
						'mod_url' 			=> 'http://www.phpbb-services.com', 
						'mod_author' 		=> 'Elglobo', 
						'mod_download' 		=> 'http://www.phpbb-services.com',
					));
				}
				$db->sql_freeresult($result);

				// -- Advanced Block Mod 1.0.3, module created above already
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

				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('log_check_dnsbl', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('log_email_check_mx', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('check_tz', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('log_check_tz', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dnsbl_version', '1.0.3', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES('dnsbl_list_version', '1.0.3', 0)";

				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '79'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '80',
						'mod_title' 		=> 'Advanced Block Mod', 
						'mod_version' 		=> '1.0.3',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Aggiunge maggiori blacklist DNS di phpBB3. Le blacklist possono essere gestite da ACP e configurate da 0 a 5 per raggiungere un valore di soglia del 5 allo scopo di bloccarle. Aggiunge un nuovo registro per le azioni di blocco. Aggiunge la registrazione a validate_email e check_dnsbl. Aggiunge WHOIS di log.', 
						'mod_url' 			=> 'http://www.martin-truckenbrodt.com', 
						'mod_author' 		=> 'Martin Truckenbrodt', 
						'mod_download' 		=> 'http://www.martin-truckenbrodt.com',
					));
				}
				$db->sql_freeresult($result);

				// Email on Birthday version 1.0.1b
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('birthday_emails', '0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('birthday_run', '')";

				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '80'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '81',
						'mod_title' 		=> 'Email on Birthday', 
						'mod_version' 		=> '1.0.1',
						'mod_version_type' 	=> 'b', 
						'mod_desc' 			=> 'Se sono abilitati i compleanni la Mod invia una e-mail agli utenti per il loro compleanno, pu&ograve essere disattivato tramite ACP.', 
						'mod_url' 			=> 'http://www.lefty74.com', 
						'mod_author' 		=> 'lefty74', 
						'mod_download' 		=> 'http://www.lefty74.com',
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '81'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '81',
						'mod_title' 		=> 'Portal XL Custom bbCode Box', 
						'mod_version' 		=> '1.0.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'This mod adds a Office like tool-bar for formatting and multimedia-contents to the phpBB3-Postbox and eliminates the standard phpBB3 bbCode Buttons.', 
						'mod_url' 			=> 'http://www.portalxl.nl/forum/', 
						'mod_author' 		=> 'DaMysterious', 
						'mod_download' 		=> 'http://www.portalxl.nl/forum/',
					));
				}
				$db->sql_freeresult($result);

				// Mod_Share_On by JesusADS
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '82'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '83',
						'mod_title' 		=> 'Share On', 
						'mod_version' 		=> '1.0.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Aggiunge ad ogni primo post icone con i link per la condivisione su Social Network tra i quali: Facebook, Twitter, MySpace, Orkut, Digg, Technorati e Delicious.', 
						'mod_url' 			=> 'http://www.phpbb.com/community/viewtopic.php?f=70&t=1844865', 
						'mod_author' 		=> 'JesusADS', 
						'mod_download' 		=> 'http://www.phpbb.com/community/viewtopic.php?f=70&t=1844865',
					));
				}
				$db->sql_freeresult($result);
				
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_status', '1')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_userloggedin', '0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_facebook', '1')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_twitter', '1')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_orkut', '0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_digg', '0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_myspace', '1')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_delicious', '0')";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value) VALUES ('so_technorati', '0')";

				// Toplist MOD 2.0.0-RC3
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_show_disabled', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_enable_score', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_help_enable', '1', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_help_custom_enable', '0', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_help_lang_custom_index', 'TOPLIST_CUSTOM_HELP', 0)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_update_check_next', '0', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_update_check', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_update_check_security', '1', 1)";
				$sql[] = "INSERT INTO " . CONFIG_TABLE . " (config_name, config_value, is_dynamic) VALUES ('toplist_update_check_mail', '0', 1)";

				// DM Multi Zodiacs
				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '84'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '84',
						'mod_title' 		=> 'DM Multi Zodiacs', 
						'mod_version' 		=> '1.0.0',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Questa mod aggiunge i segni zodiacali europei, cinesi e indiani nel profilo utente e nel view topic. Le immagini sono state create da darko.', 
						'mod_url' 			=> 'http://die-muellers.org', 
						'mod_author' 		=> 'Felix Mueller', 
						'mod_download' 		=> 'http://die-muellers.org',
					));
				}
				$db->sql_freeresult($result);

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

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'u_dm_video_view'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'u_dm_video_view',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'u_dm_video_add'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'u_dm_video_add',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'u_dm_video_edit'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'u_dm_video_edit',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'u_dm_video_del'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'u_dm_video_del',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'u_dm_video_rate'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'u_dm_video_rate',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'u_dm_video_report'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'u_dm_video_report',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'u_dm_video_comment_view'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'u_dm_video_comment_view',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'u_dm_video_comment_add'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'u_dm_video_comment_add',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'u_dm_video_comment_edit'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'u_dm_video_comment_edit',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'u_dm_video_comment_del'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'u_dm_video_comment_del',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'a_dm_video'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'a_dm_video',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'a_dm_video_auto_announce'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'a_dm_video_auto_announce',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'a_dm_video_config'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'a_dm_video_config',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'a_dm_video_cats'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'a_dm_video_cats',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'a_dm_video_edit'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'a_dm_video_edit',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'a_dm_video_release'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'a_dm_video_release',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . ACL_OPTIONS_TABLE . "
						WHERE auth_option = 'a_dm_video_report'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . ACL_OPTIONS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'auth_option'		=> 'a_dm_video_report',
						'is_global'			=> 1,
						'is_local'			=> 0,
						'founder_only'		=> 0,
					));
				}
				$db->sql_freeresult($result);

				$sql[] = 'SELECT * 
						FROM ' . PORTAL_MODS_TABLE . "
						WHERE mod_id = '85'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_MODS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'mod_id' 			=> '85',
						'mod_title' 		=> 'DM Video', 
						'mod_version' 		=> '1.0.5',
						'mod_version_type' 	=> '', 
						'mod_desc' 			=> 'Questa mod aggiunge una pagina di video al forum, dove &egrave possibile visualizzare i video come su YouTube, MyVideo o di altri fornitori che offrono codici embedded da copiare. I video possono essere aggiunti dagli utenti, ma occorre l\'approvazione da parte dell\'amministratore. Inoltre pu&ograve essere inserita una descrizione. Si possono avere categorie e sottocategorie per ordinare i video.', 
						'mod_url' 			=> 'http://die-muellers.org', 
						'mod_author' 		=> 'Felix Mueller', 
						'mod_download' 		=> 'http://die-muellers.org',
					));
				}
				$db->sql_freeresult($result);
				
				$sql[] = 'SELECT * 
						 FROM ' . PORTAL_CONFIG_TABLE . "
						 WHERE config_name = 'portal_show_bbcode_box'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_show_bbcode_box',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);
				
				$sql[] = 'SELECT * 
						 FROM ' . PORTAL_CONFIG_TABLE . "
						 WHERE config_name = 'portal_show_zodiacs'";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				if (!$row)
				{
					$sql[] = 'REPLACE INTO ' . PORTAL_CONFIG_TABLE . ' ' . $db->sql_build_array('INSERT', array(
						'config_name'		=> 'portal_show_zodiacs',
						'config_value'		=> 0,
						'is_dynamic'		=> 0,
					));
				}
				$db->sql_freeresult($result);





			// Finally clear cache and log what we did
			$cache->purge();
			add_log('admin', 'Portal XL 5.0 Premod updated to latest database release!');
			add_log('admin', 'LOG_PURGE_CACHE');
			
			case 'Premod 0.3':
			case 'Premod 0.4':
			case 'Premod 0.5':
			case 'Premod 0.6':

				$old_update = true;

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

		$s_hidden_fields = '<input type="hidden" name="mode" value="update" />';
		if ($sub == 'update_db')
		{
			$s_hidden_fields .= '<input type="hidden" name="sub" value="final" />';
			$l_submit = $lang['INSTALL_NEXT'];
			$body = $lang['PORTAL_FINAL_UPDATE_STEP'];
		}
		else
		{
			$s_hidden_fields .= '<input type="hidden" name="sub" value="update_db" />';
			$l_submit = $lang['INSTALL_NEXT'];
			$body = $lang['PORTAL_FINAL_UPDATE_STEP'];
		}		

		$url = $this->p_master->module_url . "?mode=install_update&amp;sub=final";

		$template->assign_vars(array(
			'TITLE'				=> $lang['UPDATE_DATABASE'],
			'BODY'				=> $body,
			'L_SUBMIT'			=> $l_submit,
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
