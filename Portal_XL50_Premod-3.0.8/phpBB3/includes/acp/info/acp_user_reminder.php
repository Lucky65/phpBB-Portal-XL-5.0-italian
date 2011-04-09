<?php

/**
*
* @package phpBB3
* @version $Id: acp_user_reminder.php 231 2009-06-30 19:51:35Z lefty74 $
* @copyright (c) 2008 lefty74
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
class acp_user_reminder_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_user_reminder',
			'title'		=> 'USER_REMINDER',
			'version'	=> '1.0.5',
			'modes'		=> array(
				'configuration'					=> array('title' => 'ACP_USER_REMINDER_CONFIGURATION',			'auth' => 'acl_a_user || acl_a_userdel', 'cat' => array('USER_REMINDER')),
				'zero_poster'					=> array('title' => 'ACP_USER_REMINDER_ZERO_POSTER',			'auth' => 'acl_a_user || acl_a_userdel', 'cat' => array('USER_REMINDER')),
				'inactive'						=> array('title' => 'ACP_USER_REMINDER_INACTIVE',				'auth' => 'acl_a_user || acl_a_userdel', 'cat' => array('USER_REMINDER')),
				'not_logged_in'					=> array('title' => 'ACP_USER_REMINDER_NOT_LOGGED_IN',			'auth' => 'acl_a_user || acl_a_userdel', 'cat' => array('USER_REMINDER')),
				'inactive_still'				=> array('title' => 'ACP_USER_REMINDER_INACTIVE_STILL',			'auth' => 'acl_a_user || acl_a_userdel', 'cat' => array('USER_REMINDER')),				
				'protected_users'				=> array('title' => 'ACP_USER_REMINDER_PROTECTED_USERS',		'auth' => 'acl_a_user || acl_a_userdel', 'cat' => array('USER_REMINDER')),				
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