<?php
/**
*
* @package acp
* @version $Id: acp_board.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_toplist_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_toplist',
			'title'		=> 'ACP_TOPLIST',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'settings'		=> array('title' => 'ACP_TOPLIST_SETTINGS', 'auth' => 'acl_a_board', 'cat' => array('ACP_TOPLIST')),
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