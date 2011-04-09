<?php
/*
*
* @name link_us.php
* @package phpBB3 Portal XL 5.0
* @version $Id: link_us.php,v 1.2 2010/06/20 damysterious Exp $
*
* @copyright (c) 2007, 2010 Portal XL Group
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

// We have to generate a full HTTP/1.1 header here 
$server_name = (!empty($_SERVER['HTTP_HOST'])) ? strtolower($_SERVER['HTTP_HOST']) : ((!empty($_SERVER['SERVER_NAME'])) ? $_SERVER['SERVER_NAME'] : getenv('SERVER_NAME'));
$server_port = (!empty($_SERVER['SERVER_PORT'])) ? (int) $_SERVER['SERVER_PORT'] : (int) getenv('SERVER_PORT');
$secure = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 1 : 0;

$script_name = (!empty($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : getenv('PHP_SELF');
if (!$script_name)
{
	$script_name = (!empty($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : getenv('REQUEST_URI');
}

// Replace any number of consecutive backslashes and/or slashes with a single slash
// (could happen on some proxy setups and/or Windows servers)
$script_path = trim(dirname($script_name)) . '/';
$script_path = preg_replace('#[\\\\/]{2,}#', '/', $script_path);

$url = (($secure) ? 'https://' : 'http://') . $server_name;

if ($server_port && (($secure && $server_port <> 443) || (!$secure && $server_port <> 80)))
{
	// HTTP HOST can carry a port number...
	if (strpos($server_name, ':') === false)
	{
		$url .= ':' . $server_port;
	}
}

$url .= $script_path;

$site_ref_img = $url . 'portal/images/banners/88x31/lucky88x31.gif';

// Assign specific vars
$template->assign_vars(array(
	'LINK_US_TXT'		=> sprintf($user->lang['LINK_US_TXT'], $config['sitename']),
    'U_LINK_US'         => '&lt;a&nbsp;href=&quot;' . $url . '&quot;&nbsp;target=&quot;_blank&quot;&nbsp;title=&quot;' . $config['site_desc'] . '&quot;&gt;' . $config['sitename'] .'<br />' . ' &lt;'. 'img src=&quot;'  . $site_ref_img . '&quot; border&quot;0&quot;' . '&gt' . '&lt;/a&gt;',
    'U_LINK_US_BANNER'  => '<a href="' . $url . '" target="_blank" title="' . $config['site_desc'] . '">' . $config['sitename'] . '<br /><img src="' . $site_ref_img . '" border"0" alt"' . $config['site_desc'] . '" /></a>',
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/link_us.html',
	));

?>