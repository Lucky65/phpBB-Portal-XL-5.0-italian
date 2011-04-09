<?php 
/** 
*
* @name syndicate_gallery.php
* @package phpBB3 Portal XL
* @version $Id: syndicate_gallery.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
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

global $auth, $cache, $config, $db, $gallery_config, $portal_config, $template, $user;
global $location, $location_url, $album_data, $gallery_root_path, $phpbb_root_path, $phpEx, $album_access_array;

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/portal_xl');

// Create main board url
$script_name = preg_replace('/^\/?(.*?)\/?$/', '\1', trim($config['script_path']));
$picture_url = ($script_name != '') ? $script_name . '/gallery/image_page.' . $phpEx : '/gallery/image_page.'. $phpEx;
$thumb_url = ($script_name != '') ? $script_name . '/gallery/image.' . $phpEx : '/gallery/image.'. $phpEx;
$index = ($script_name != '') ? $script_name . '/portal.' . $phpEx : 'portal.'. $phpEx;
$server_name = trim($config['server_name']);
$server_protocol = ($config['cookie_secure']) ? 'https://' : 'http://';
$server_port = ($config['server_port'] <> 80) ? ':' . trim($config['server_port']) . '/' : '/';

$time = time();
$pre_timezone = date('O', $time);
$time_zone = substr($pre_timezone, 0, 3).":".substr($pre_timezone, 3, 2);
$topics_per_page = $config['posts_per_page'];

$index_url = $server_protocol . $server_name . $server_port . $index;
$picture_url = $server_protocol . $server_name . $server_port . $picture_url;
$thumb_url = $server_protocol . $server_name . $server_port . $thumb_url;
$number_of_attachments = $portal_config['portal_attachments_number'];

$rdf  = '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' . "\n";
$rdf .= '<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:annotate="http://purl.org/rss/1.0/modules/annotate/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">' . "\n";
$rdf .= '<channel>' . "\n";
$rdf .= '<title>' . strip_tags($config['sitename']) . ' Gallery Pictures</title>' . "\n";
$rdf .= '<link>' . $index_url . '</link>' . "\n";
$rdf .= '<description>' . strip_tags($config['site_desc']) . '</description>' . "\n";
$rdf .= '<pubDate>' . date("D, d M Y H:G:s O") . '</pubDate>' . "\n";
$rdf .= '<lastBuildDate>' . date("D, d M Y H:G:s O") . '</lastBuildDate>' . "\n";
$rdf .= '<copyright>Copyright 2009, ' . $config['sitename'] . '</copyright>' . "\n";
$rdf .= '<webMaster>' . $config['board_email'] . '</webMaster>' . "\n";
$rdf .= '<managingEditor>' . $config['board_email'] . '</managingEditor>' . "\n";

/**
* Fetch pictures
*
*/
$gallery_root_path = GALLERY_ROOT_PATH;
$include_pgalleries = false;

/**
* Get general album information
*/
if (!function_exists('load_gallery_config'))
{
	$recent_image_addon = true;
	include($phpbb_root_path . $gallery_root_path . 'includes/common.' . $phpEx);
	include($phpbb_root_path . $gallery_root_path . 'includes/permissions.' . $phpEx);
}

if (!isset($album_data))
{
	$user->add_lang('mods/gallery');
	$album_access_array = get_album_access_array();
	$albums = $cache->obtain_album_list();
}

if (!function_exists('generate_text_for_display'))
{
	include($phpbb_root_path . 'includes/message_parser.' . $phpEx);
}

/*
* Set up sql vars
*/
/**
* Display single picture by random
*/
$album_id = $user_id = 0;
$limit_sql = $config['posts_per_page']; // number of posts allowed to show, set in phpBB3's ACP

if ($album_id && !(gallery_acl_check('i_view', $album_id) || gallery_acl_check('m_status', $album_id)))
{
	return;
}

$moderate_albums = $view_albums = array();
if ($album_id)
{
	if (gallery_acl_check('i_view', $album_id))
	{
		$view_albums[] = $album_id;
		$sql_permission_where = '(image_album_id = ' . $album_id . ' AND image_status <> ' . IMAGE_UNAPPROVED . ')';
	}
	if (gallery_acl_check('m_status', $album_id))
	{
		$moderate_albums[] = $album_id;
		$sql_permission_where = '(image_album_id = ' . $album_id . ')';
	}
	if (gallery_acl_check('c_read', $album_id))
	{
		$comment_albums[] = $album_id;
	}
}
else
{
	$moderate_albums = gallery_acl_album_ids('m_status', 'array', true, $include_pgalleries);
	$view_albums = array_diff(gallery_acl_album_ids('i_view', 'array', true, $include_pgalleries), $moderate_albums);
	$comment_albums = gallery_acl_album_ids('c_read', 'array', true, $include_pgalleries);

	$sql_permission_where = '(';
	$sql_permission_where .= ((sizeof($view_albums)) ? '(' . $db->sql_in_set('image_album_id', $view_albums) . ' AND image_status <> ' . IMAGE_UNAPPROVED . (($user_id) ? ' AND image_contest = ' . IMAGE_NO_CONTEST : '') . ')' : '');
	$sql_permission_where .= ((sizeof($moderate_albums)) ? ((sizeof($view_albums)) ? ' OR ' : '') . '(' . $db->sql_in_set('image_album_id', $moderate_albums, false, true) . ')' : '');
	$sql_permission_where .= ($user_id) ? ') AND image_user_id = ' . $user_id : ')';
}


if ((sizeof($view_albums) || sizeof($moderate_albums)) && $limit_sql)
{
	$sql = 'SELECT p.*, u.user_id, u.username, u.user_colour
		FROM ' . GALLERY_IMAGES_TABLE . ' AS p
		LEFT JOIN ' . USERS_TABLE . ' AS u
			ON p.image_user_id = u.user_id
		LEFT JOIN ' . GALLERY_ALBUMS_TABLE . ' AS ct
			ON p.image_album_id = ct.album_id
		WHERE ' . $sql_permission_where . ' 
			AND ( p.image_status = 1)
		GROUP BY p.image_id
			ORDER BY p.image_time DESC';
	$result = $db->sql_query_limit($sql, $limit_sql);

	while ($picrow = $db->sql_fetchrow($result))
	{
	  $rdf .= "<item>";
	  $rdf .= "<title>" . $picrow['image_name'] . "</title>";
	  $rdf .= "<link>" . $picture_url . "?album_id=" . $picrow['image_album_id'] . "&amp;image_id=" . $picrow['image_id'] . "</link>";
	  $rdf .= "<pubDate>" . date("D, d M Y H:G:s O", $picrow['image_time']) . "</pubDate>";
//	  $rdf .= "<description>" . htmlspecialchars($picrow['image_desc'], ENT_QUOTES, 'utf-8') . "</description>";
	  $rdf .= "<description><![CDATA[<table><tr><td><img src=" . $thumb_url . "?mode=thumbnail&amp;album_id=" . $picrow['image_album_id'] . "&amp;image_id=" . $picrow['image_id'] . " /></td></tr><tr><td>" . generate_text_for_display($picrow['image_desc'], ENT_QUOTES, 'utf-8', '') . "</td></tr></table>]]></description>";
	  $rdf .= "</item>";
	}
}
/*
* query database
*/
	
$db->sql_freeresult($result);
unset($row);

// Create RDF footer
$rdf .= "</channel></rss>";

// Output the RDF
echo $rdf;
?>