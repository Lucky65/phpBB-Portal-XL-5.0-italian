<?php
/**
*
* @author Mickaël Salfati (Elglobo) http://www.phpbb-services.com
*
* @package acp
* @version $Id: acp_lc.php,v 1.1.1.1 2009/05/15 05:14:29 damysterious Exp $
* @copyright (c) 2007 phpBB-Services
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/
class acp_lc_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_lc',
			'title'		=> 'ACP_CONNECTIONS',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'log_connections'		=> array('title' => 'ACP_CONNECTIONS_SETTINGS',	'auth' => 'acl_a_board', 	'cat' => array('ACP_QUICK_ACCESS')),
				'connections'			=> array('title' => 'ACP_CONNECTIONS_LOGS',		'auth' => 'acl_a_viewlogs', 'cat' => array('ACP_FORUM_LOGS')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>