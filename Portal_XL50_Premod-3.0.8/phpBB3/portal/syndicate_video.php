<?php 
/** 
*
* @name syndicate_video.php
* @package phpBB3 Portal XL
* @version $Id: syndicate_video.php,v 1.0 2010/05/24 damysterious Exp $
*
* @copyright (c) 2007, 2010 Portal XL Group
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

// Start DM Video
if ( isset($config['dm_video_version']) )
{
  $dm_video_path = (defined('DM_VIDEO_ROOT_PATH')) ? DM_VIDEO_ROOT_PATH : 'dm_video/';
  include($phpbb_root_path . $dm_video_path . 'common.' . $phpEx);
}
// End DM Video

global $db, $auth, $cache, $config, $db, $template, $user, $phpbb_root_path, $phpEx;

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/portal_xl');

// Create main board url
$script_name = preg_replace('/^\/?(.*?)\/?$/', '\1', trim($config['script_path']));
$video_url = ($script_name != '') ? $script_name . '/dm_video/showvideo.' . $phpEx : '/dm_video/showvideo.'. $phpEx;
$index = ($script_name != '') ? $script_name . '/portal.' . $phpEx : 'portal.'. $phpEx;
$server_name = trim($config['server_name']);
$server_protocol = ($config['cookie_secure']) ? 'https://' : 'http://';
$server_port = ($config['server_port'] <> 80) ? ':' . trim($config['server_port']) . '/' : '/';

$time = time();
$pre_timezone = date('O', $time);
$time_zone = substr($pre_timezone, 0, 3).":".substr($pre_timezone, 3, 2);

$index_url = $server_protocol . $server_name . $server_port . $index;
$video_url = $server_protocol . $server_name . $server_port . $video_url;

$rdf  = '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' . "\n";
$rdf .= '<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:annotate="http://purl.org/rss/1.0/modules/annotate/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">' . "\n";
$rdf .= '<channel>' . "\n";
$rdf .= '<title>' . strip_tags($config['sitename']) . ' Video</title>' . "\n";
$rdf .= '<link>' . $index_url . '</link>' . "\n";
$rdf .= '<description>' . strip_tags($config['site_desc']) . '</description>' . "\n";
$rdf .= '<pubDate>' . date("D, d M Y H:G:s O") . '</pubDate>' . "\n";
$rdf .= '<lastBuildDate>' . date("D, d M Y H:G:s O") . '</lastBuildDate>' . "\n";
$rdf .= '<copyright>Copyright 2009, ' . $config['sitename'] . '</copyright>' . "\n";
$rdf .= '<webMaster>' . $config['board_email'] . '</webMaster>' . "\n";
$rdf .= '<managingEditor>' . $config['board_email'] . '</managingEditor>' . "\n";

/*
* Assigns variables to display in video
*/
$order 	= request_var('order','');
$start  = request_var('start', 0);
$limit  = $config['posts_per_page']; // number of posts allowed to show, set in phpBB3's ACP

$sql = "SELECT *
	 FROM " . DM_VIDEO_TABLE . "
	 WHERE video_approval = 1
	ORDER BY video_title DESC";
$result = $db->sql_query_limit($sql, $limit, $start);

while ($row = $db->sql_fetchrow($result))
{
  $video_id 		= $row['video_id'];
  $video_cat_id 	= (int) $row['video_cat_id'];
  $video_image 		= $row['video_image'];
  $video_title 		= (string) $row['video_title'];
  $video_songtext 	= (string) $row['video_songtext'];
  $video_singer 	= (string) $row['video_singer'];
  $video_time		= (string) $row['video_time'];

  if ($auth->acl_get('u_dm_video_view'))
  {
	$rdf .= "<item>";
	$rdf .= "<title>" . $video_title . "</title>";
	$rdf .= "<link>" . $video_url . "?v=" . $video_id . "&amp;c=" . $video_cat_id . "</link>";
	$rdf .= "<pubDate>" . date("D, d M Y H:G:s O", $video_time) . "</pubDate>";
	$rdf .= "<description><![CDATA[<table><tr><td>" . generate_text_for_display($video_singer, ENT_QUOTES, 'utf-8', '') . "</td></tr></table>]]></description>";
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