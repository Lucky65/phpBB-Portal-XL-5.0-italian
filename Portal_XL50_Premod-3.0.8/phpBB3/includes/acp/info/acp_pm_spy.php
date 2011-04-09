<?php
/**
*
* @package acp_pm_spy
* @version $Id: 1.0.0
* @copyright (c) 2008 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/

class acp_pm_spy_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_pm_spy',
			'title'		=> 'ACP_PM_SPY',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'main'		=> array('title' => 'ACP_PM_SPY', 'auth' => 'acl_a_pm_spy', 'cat' => array('ACP_CAT_DOT_MODS')
				),
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