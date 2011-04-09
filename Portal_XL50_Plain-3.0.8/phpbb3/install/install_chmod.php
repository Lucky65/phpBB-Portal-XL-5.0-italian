<?php
/**
*
* @package install_chmod.php
* @package Modification Installer for phpBB3 Portal XL
* @version $Id: install_chmod.php,v 1.1.1.1 2009/05/15 04:03:27 damysterious Exp $
*
* @copyright (c) 2007, 2008 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
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
		'module_title'		=> 'CHMOD',
		'module_filename'	=> substr(basename(__FILE__), 0, -strlen($phpEx)-1),
		'module_order'		=> 20,
		'module_subs'		=> '',
		'module_stages'		=> array('INTRO', 'CHMOD', 'FINAL'),
		'module_reqs'		=> ''
	);
}

/**
* Class holding all specific details.
* @package install
*/
class chmod
{
	var $cur_release = 'Plain';

	var $p_master;

	function chmod(&$p_master)
	{
		$this->p_master = &$p_master;
	}
}

/**
* Convert class for conversions
* @package install
*/
class install_chmod extends module
{
	/**
	* Variables used while converting, they are accessible from the global variable $convert
	*/
	function install_chmod(&$p_master)
	{
		$this->p_master = &$p_master;
	}

	function main($mode, $sub)
	{
		global $lang, $template, $phpbb_root_path, $phpEx, $cache, $config, $language, $table_prefix;

		$this->mode = $mode;

		$chmod = new chmod($this->p_master);

		switch ($sub)
		{
			case 'intro':
				$this->page_title = $lang['PORTAL_CHMOD'];

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
		
				if ((!defined('PORTAL') && $portal_version >= 'Plain') || !$portal_version || $portal_version < '0.0.0' || ($portal_version >= $chmod->cur_release && !in_array($portal_version, array('RC4 - Plain', 'Plain', 'Plain 0.1', 'Plain 0.2'))))
				{
					$template->assign_vars(array(
						'S_NOT_INSTALLED'		=> true,
						'TITLE'					=> $lang['PORTAL_CHMOD'],
						'BODY'					=> sprintf($lang['PORTAL_CHMOD_NOT_POSSIBLE'], $portal_version),
					));

					return;
				}

				$s_hidden_fields = '<input type="hidden" name="mode" value="chmod" />';
				$s_hidden_fields .= '<input type="hidden" name="sub" value="chmod" />';

				$template->assign_vars(array(
					'L_SUBMIT'				=> $lang['PORTAL_CHMOD_FILES'],
					'TITLE'					=> $lang['PORTAL_CHMOD'],
					'BODY'					=> sprintf($lang['PORTAL_CHMOD_TODO'], $portal_version, $chmod->cur_release),
					'S_HIDDEN_FIELDS'		=> $s_hidden_fields,
					'U_ACTION'				=> append_sid($phpbb_root_path . 'install/index.' . $phpEx),
				));

			break;

			case 'chmod':
				$this->page_title = $lang['STAGE_CHMOD'];
				$this->chmod_data($sub);
			
			break;
			
			case 'final':
				$this->page_title = $lang['CHMOD_COMPLETED'];

				$template->assign_vars(array(
					'TITLE'		=> $lang['CHMOD_COMPLETED'],
					'BODY'		=> $lang['PORTAL_CHMOD_SUCCESS'],
				));

			break;
		}
	}

	/**
	* The function which does the actual work (or dispatches it to the relevant places)
	*/
	function chmod_data($sub)
	{
		global $template, $user, $phpbb_root_path, $phpEx, $db, $lang, $config, $cache;

		require($phpbb_root_path . 'config.' . $phpEx);
		require($phpbb_root_path . 'includes/constants.' . $phpEx);
		require($phpbb_root_path . 'includes/db/' . $dbms . '.' . $phpEx);

		$chmod = new chmod($this->p_master);

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

		if ((!defined('PORTAL') && $portal_version >= 'Plain') || !$portal_version || $portal_version < '0.0.0' || ($portal_version >= $chmod->cur_release && !in_array($portal_version, array('RC4 - Plain', 'Plain', 'Plain 0.1', 'Plain 0.2'))))
		{
			return;
		}

		$this->page_title = $lang['PORTAL_CHMOD'];

		// The real work from here
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
			* We try to set the right CHMOD for *NIX systems
			*/
			@chmod($phpbb_root_path . 'config.' . $phpEx, 0644);
			@chmod($phpbb_root_path . 'images/counter/ip.txt', 0666);
			@chmod($phpbb_root_path . 'cache', 0777);
			@chmod($phpbb_root_path . 'store', 0777);
			@chmod($phpbb_root_path . 'files', 0777);
			@chmod($phpbb_root_path . 'images/upload/avartars', 0777);
				
			// We try to rename portal's installation directory
			// @rename($phpbb_root_path . 'install', $phpbb_root_path . '_install'); 

			/**
			* do we need log entries here?
			* add_log('admin', 'phpBB3 Portal XL ~ ' . $chmod->cur_release . ' portal chmodd');
			*/
			
			case 'Plain 0.3':
			case 'Plain 0.4':
			case 'Plain 0.5':

			$old_chmod = true;

			break;
		}

		$s_hidden_fields = '<input type="hidden" name="mode" value="install" />';
		if (defined('PORTAL'))
		{
			$url = $this->p_master->module_url . "?mode=chmod&amp;sub=final";

			$s_hidden_fields = '<input type="hidden" name="mode" value="chmod" />';
			$s_hidden_fields .= '<input type="hidden" name="sub" value="final" />';

			$l_submit = $lang['INSTALL_NEXT'];
			$body = $lang['PORTAL_FINAL_CHMOD_STEP'];
		}
		else
		{
			$url = $this->p_master->module_url . "?mode=install&amp;sub=overview";
		}		
		$s_hidden_fields .= '<input type="hidden" name="language" value="' . $language . '" />';

		$template->assign_vars(array(
			'TITLE'				=> $lang['PORTAL_CHMOD'],
			'BODY'				=> $body,
			'L_SUBMIT'			=> $l_submit,
			'S_HIDDEN_FIELDS'	=> $s_hidden_fields,
			'U_ACTION'			=> $this->p_master->module_url,
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
