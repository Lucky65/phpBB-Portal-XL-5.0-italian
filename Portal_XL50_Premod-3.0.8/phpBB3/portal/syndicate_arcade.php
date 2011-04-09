<?php 
/** 
*
* @name syndicate_arcade.php
* @package phpBB3 Portal XL
* @version $Id: syndicate_arcade.php,v 1.0 2009/11/04 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

// XML and nocaching headers
header ('Cache-Control: private, pre-check=0, post-check=0, max-age=0');
header ('Expires: ' . gmdate('D, d M Y H:i:s', time()) . ' GMT');
header ('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header ('Content-Type: text/xml');

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

global $db, $auth, $cache, $config, $db, $template, $user, $phpbb_root_path, $phpEx;

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/portal_xl');

// Create main board url
$script_name = preg_replace('/^\/?(.*?)\/?$/', '\1', trim($config['script_path']));
$arcade_url = ($script_name != '') ? $script_name . '/arcade.' . $phpEx : '/arcade.'. $phpEx;
$index = ($script_name != '') ? $script_name . '/portal.' . $phpEx : 'portal.'. $phpEx;
$server_name = trim($config['server_name']);
$server_protocol = ($config['cookie_secure']) ? 'https://' : 'http://';
$server_port = ($config['server_port'] <> 80) ? ':' . trim($config['server_port']) . '/' : '/';

$time = time();
$pre_timezone = date('O', $time);
$time_zone = substr($pre_timezone, 0, 3).":".substr($pre_timezone, 3, 2);

$index_url = $server_protocol . $server_name . $server_port . $index;
$arcade_url = $server_protocol . $server_name . $server_port . $arcade_url;

$rdf  = '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' . "\n";
$rdf .= '<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:annotate="http://purl.org/rss/1.0/modules/annotate/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">' . "\n";
$rdf .= '<channel>' . "\n";
$rdf .= '<title>' . strip_tags($config['sitename']) . ' Arcade Games</title>' . "\n";
$rdf .= '<link>' . $index_url . '</link>' . "\n";
$rdf .= '<description>' . strip_tags($config['site_desc']) . '</description>' . "\n";
$rdf .= '<pubDate>' . date("D, d M Y H:G:s O") . '</pubDate>' . "\n";
$rdf .= '<lastBuildDate>' . date("D, d M Y H:G:s O") . '</lastBuildDate>' . "\n";
$rdf .= '<copyright>Copyright 2009, ' . $config['sitename'] . '</copyright>' . "\n";
$rdf .= '<webMaster>' . $config['board_email'] . '</webMaster>' . "\n";
$rdf .= '<managingEditor>' . $config['board_email'] . '</managingEditor>' . "\n";

if (file_exists($phpbb_root_path . 'includes/arcade/arcade_common.' . $phpEx))
{
	include($phpbb_root_path . 'includes/arcade/arcade_common.' . $phpEx);
	// Initialize arcade auth
	$auth_arcade->acl($user->data);
	// Initialize arcade class
	$arcade = new arcade(false);
}

/*
* Assigns variables to display in arcade
*/
$order 	= request_var('order','');
$start  = request_var('start', 0);
$limit  = $config['posts_per_page']; // number of posts allowed to show, set in phpBB3's ACP

$sql = "SELECT *
	 FROM " . ARCADE_GAMES_TABLE . "
	 WHERE game_id = game_id 
	ORDER BY game_installdate DESC";
$result = $db->sql_query_limit($sql, $limit, $start);

while ($row = $db->sql_fetchrow($result))
{
  $game_id = $row['game_id'];
  $game_image = $row['game_image'];
  $game_name = $row['game_name_clean'];
  $game_desc = $row['game_desc'];

  if ($auth_arcade->acl_getc_global('c_list'))
  {
	$rdf .= "<item>";
	$rdf .= "<title>" . $game_name . "</title>";
	$rdf .= "<link>" . $arcade_url . "?mode=play&amp;g=" . $game_id . "</link>";
	$rdf .= "<pubDate>" . date("D, d M Y H:G:s O", $row['game_installdate']) . "</pubDate>";
	//	  $rdf .= "<description>" . htmlspecialchars($game_desc, ENT_QUOTES, 'utf-8') . "</description>";
	$rdf .= "<description><![CDATA[<table><tr><td><img src=" . $phpbb_root_path . "arcade.$phpEx?img=" . $row['game_image'] . " /></td></tr><tr><td>" . generate_text_for_display($game_desc, ENT_QUOTES, 'utf-8', '') . "</td></tr></table>]]></description>";
	$rdf .= "</item>";
  }
}
$db->sql_freeresult($result);
unset($row);

// Create RDF footer
$rdf .= "</channel></rss>";

// Output the RDF
echo $rdf;
?>