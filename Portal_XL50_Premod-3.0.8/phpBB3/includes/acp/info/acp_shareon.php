<?php

/**
*
* @package - Share On
* @version $Id: acp_shareon.php 2010-03-12 02:40 JesusADS $
* @copyright (c) JesusADS ( http://www.puntonokia.com/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package module_install
*/
class acp_shareon_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_shareon',
			'title'		=> 'Share On MOD',
			'version'	=> '1.0.1',
			'modes'		=> array(
			'index'		=> array('title' => 'SO_CONFIG', 'auth' => 'acl_a_board', 'cat' => array('SHARE_ON_MOD')),
			),
		);
	}
	
	function install($u_action)
    {
		global $phpbb_root_path, $phpEx, $db, $user;

		// Setup $auth_admin class so we can add permission options
		include($phpbb_root_path . 'includes/acp/auth.' . $phpEx);
		$auth_admin = new auth_admin();

		$module_data = $this->module();

		$module_basename = substr(strchr($module_data['filename'], '_'), 1);

		$sql = 'SELECT module_id
				FROM ' . MODULES_TABLE . "
				WHERE module_basename = '$module_basename'";
		$result = $db->sql_query($sql);
		$module_id = $db->sql_fetchfield('module_id');
		$db->sql_freeresult($result);

		set_config('shareon_mod_version', $module_data['version']);
		set_config('so_status', 0);
		set_config('so_userloggedin', 0);
		set_config('so_facebook', 0);
		set_config('so_twitter', 0);
		set_config('so_orkut', 0);
		set_config('so_digg', 0);
		set_config('so_myspace', 0);
		set_config('so_delicious', 0);
		set_config('so_technorati', 0);

		trigger_error(sprintf($user->lang['SHAREON_MOD_INSTALLED'], $module_data['version']) . adm_back_link($u_action));
	}
       
	function uninstall()
	{
	}
       
	function update($u_action)
	{
		global $user;
          
		$module_data = $this->module();
          
		set_config('shareon_mod_version', $module_data['version']);
          
		trigger_error(sprintf($user->lang['SHAREON_MOD_UPDATED'], $module_data['version']) . adm_back_link($u_action));
	}
}

?>
