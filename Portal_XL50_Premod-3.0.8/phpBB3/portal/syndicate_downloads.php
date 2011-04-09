<?php 
/** 
*
* @name syndicate_downloads
* @package phpBB3 Portal XL Premod
* @version $Id: syndicate_downloads.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
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

global $phpEx, $db, $config, $phpbb_root_path, $portal_config;

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/portal_xl');

// Create main board url
$script_name = preg_replace('/^\/?(.*?)\/?$/', '\1', trim($config['script_path']));
$download_url = ($script_name != '') ? $script_name . '/downloads.' . $phpEx : '/downloads.'. $phpEx;
$index = ($script_name != '') ? $script_name . '/portal.' . $phpEx : 'portal.'. $phpEx;
$server_name = trim($config['server_name']);
$server_protocol = ($config['cookie_secure']) ? 'https://' : 'http://';
$server_port = ($config['server_port'] <> 80) ? ':' . trim($config['server_port']) . '/' : '/';

$time = time();
$pre_timezone = date('O', $time);
$time_zone = substr($pre_timezone, 0, 3).":".substr($pre_timezone, 3, 2);
$topics_per_page = $config['posts_per_page']; // number of posts allowed to show, set in phpBB3's ACP

$index_url = $server_protocol . $server_name . $server_port . $index;
$download_url = $server_protocol . $server_name . $server_port . $download_url;
$number_of_attachments = $portal_config['portal_attachments_number'];

$rdf  = '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' . "\n";
$rdf .= '<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:annotate="http://purl.org/rss/1.0/modules/annotate/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">' . "\n";
$rdf .= '<channel>' . "\n";
$rdf .= '<title>' . strip_tags($config['sitename']) . ' Downloads</title>' . "\n";
$rdf .= '<link>' . $index_url . '</link>' . "\n";
$rdf .= '<description>' . strip_tags($config['site_desc']) . '</description>' . "\n";
$rdf .= '<pubDate>' . date("D, d M Y H:G:s O") . '</pubDate>' . "\n";
$rdf .= '<lastBuildDate>' . date("D, d M Y H:G:s O") . '</lastBuildDate>' . "\n";
$rdf .= '<copyright>Copyright 2007, ' . $config['sitename'] . '</copyright>' . "\n";
$rdf .= '<webMaster>' . $config['board_email'] . '</webMaster>' . "\n";
$rdf .= '<managingEditor>' . $config['board_email'] . '</managingEditor>' . "\n";

/**
* Fetch attachments
*
*/
$order 	= request_var('order','');
$start  = request_var('start', 0);
$limit  = $config['posts_per_page']; // number of posts allowed to show, set in phpBB3's ACP

include($phpbb_root_path . 'dl_mod/classes/class_dl_cache.' . $phpEx);
include($phpbb_root_path . 'dl_mod/classes/class_dlmod.' . $phpEx);

$dl_mod = new dlmod();
/*
* Set up sql vars
*/
	$sql = "SELECT *
         FROM " . DOWNLOADS_TABLE . "
         WHERE id = id 
		 AND approve = '1'
 		 AND broken = '0'
        ORDER BY change_time DESC";
          
	$result = $db->sql_query($sql);
	$num_files = sizeof($db->sql_fetchrowset($result));
	$result = $db->sql_query_limit($sql, $limit, $start);

	while ($row = $db->sql_fetchrow($result))
	{
		$cat = $row['cat'];
		$cat_auth = array();
		$cat_auth = $dl_mod->dl_cat_auth($cat);
	
		// proofs if user is allowed to download files
		if ($cat_auth['auth_dl'] || $row['auth_dl'] || ($auth->acl_get('a_') && $user->data['is_registered']))
		$allowed_to_download = 1;

		if ($allowed_to_download == 1)
		{
			$rdf .= "<item>";
			$rdf .= "<title>" . $row['description'] . "</title>";
			$rdf .= "<link>" . $download_url . "?view=detail&amp;df_id=" . $row["id"] . "</link>";
            $rdf .= "<pubDate>" . date("D, d M Y H:G:s O", $row['add_time']) . "</pubDate>";
			$rdf .= "<description>" . generate_text_for_display($row['long_desc'], ENT_QUOTES, 'utf-8', '') . "</description>";
			$rdf .= "</item>";
		} // end auth downloads

	}
	
$db->sql_freeresult($result);
unset($row);

// Create RDF footer
$rdf .= "</channel></rss>";

// Output the RDF
echo $rdf;
?>