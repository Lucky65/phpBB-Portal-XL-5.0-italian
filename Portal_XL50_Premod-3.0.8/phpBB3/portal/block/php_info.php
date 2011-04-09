<?php
/*
*
* @name php_info.php
* @package phpBB3 Portal XL 5.0
* @version $Id: php_info.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/

/*
* Start session management
*/

/*
* Begin block script here
*/

// Get webserver info
if (preg_match('#(Apache)/([0-9\.]+)\s#siU', $_SERVER['SERVER_SOFTWARE'], $info))
{
	$webserver_info = "$info[1] v$info[2]";
}
else if (strtoupper($_SERVER['SERVER_SOFTWARE']) == 'APACHE')
{
	$webserver_info = 'Apache';
}
else if (preg_match('#Microsoft-IIS/([0-9\.]+)#siU', $_SERVER['SERVER_SOFTWARE'], $info))
{
	$webserver_info = "IIS v$info[1]";
}
else if (preg_match('#Zeus/([0-9\.]+)#siU', $_SERVER['SERVER_SOFTWARE'], $info))
{
	$webserver_info = "Zeus v$info[1]";
}
else
{
	$webserver_info = php_sapi_name();
}

	$template->assign_vars(array(
		'GZIP_COMPRESSION'		=> ($config['gzip_compress']) ? $user->lang['ON'] : $user->lang['OFF'],			
		'DATABASE_INFO'			=> $db->sql_server_info(),			
		'OS_INFO'				=> PHP_OS,
		'WEBSERVER_INFO'		=> $webserver_info,
		'PHP_INFO'				=> 'PHP ' . PHP_VERSION,
		'L_PHP_INFO_EXPLAIN'	=> $user->lang['PHP_INFO_EXPLAIN'],
		));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/php_info.html',
	));

?>