<?php
/**
*
* @package acp
* @version $Id: acp_dnsbl.php,v 1.001 2009/05/13 Martin Truckenbrodt Exp $
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_dnsbl_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_dnsbl',
			'title'		=> 'ACP_DNSBL',
			'version'	=> '1.0.2',
			'modes'		=> array(
				'manage'		=> array('title' => 'ACP_DNSBL', 'auth' => 'acl_a_board', 'cat' => array('ACP_DNSBL')),
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