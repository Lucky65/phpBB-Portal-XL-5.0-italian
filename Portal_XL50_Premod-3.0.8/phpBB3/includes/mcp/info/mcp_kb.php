<?php
/**
*
* @package mcp
* @version $Id: mcp_kb.php,v 1.1.1.1 2009/05/15 05:14:43 damysterious Exp $
* @copyright (c) 2007 SEO phpBB http://www.phpbb-seo.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class mcp_kb_info
{
	function module()
	{
		return array(
			'filename'	=> 'mcp_kb',
			'title'		=> 'KB_NAME',
			'version'	=> '0.2.9',
			'modes'		=> array(
				'kb_activate'		=> array('title' => 'MCP_KB_ACTIVATE', 'auth' => 'acl_m_activate_kb', 'cat' => array('KB_NAME')),
				'kb_reports'		=> array('title' => 'MCP_KB_REPORTS', 'auth' => 'acl_m_report_kb', 'cat' => array('KB_NAME')),
				'kb_main'			=> array('title' => 'MCP_KB_MAIN', 'auth' => '', 'cat' => array('KB_NAME')),
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