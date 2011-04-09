<?php 
/** 
*
* @name syndicate_kb.php
* @package phpBB3 Portal XL 5.0
* @version $Id: syndicate_kb.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
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

global $phpEx, $db, $config, $phpbb_root_path, $portal_config;

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/portal_xl');

// Create main board url
$script_name = preg_replace('/^\/?(.*?)\/?$/', '\1', trim($config['script_path']));
$kb_topic = ($script_name != '') ? $script_name . '/knowledge/kb_show.' . $phpEx : '/knowledge/kb_show.'. $phpEx;
$index = ($script_name != '') ? $script_name . '/portal.' . $phpEx : 'portal.'. $phpEx;
$server_name = trim($config['server_name']);
$server_protocol = ($config['cookie_secure']) ? 'https://' : 'http://';
$server_port = ($config['server_port'] <> 80) ? ':' . trim($config['server_port']) . '/' : '/';

$index_url = $server_protocol . $server_name . $server_port . $index;
$kb_topic_url = $server_protocol . $server_name . $server_port . $kb_topic;

$rdf  = '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' . "\n";
$rdf .= '<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:annotate="http://purl.org/rss/1.0/modules/annotate/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">' . "\n";
$rdf .= '<channel>' . "\n";
$rdf .= '<title>' . strip_tags($config['sitename']) . ' Knowledge Base</title>' . "\n";
$rdf .= '<link>' . $index_url . '</link>' . "\n";
$rdf .= '<description>' . strip_tags($config['site_desc']) . '</description>' . "\n";
$rdf .= '<pubDate>' . date("D, d M Y H:G:s O") . '</pubDate>' . "\n";
$rdf .= '<lastBuildDate>' . date("D, d M Y H:G:s O") . '</lastBuildDate>' . "\n";
$rdf .= '<copyright>Copyright 2007, ' . $config['sitename'] . '</copyright>' . "\n";
$rdf .= '<webMaster>' . $config['board_email'] . '</webMaster>' . "\n";
$rdf .= '<managingEditor>' . $config['board_email'] . '</managingEditor>' . "\n";

/**
* Fetch kb articles
*
*/
$order 	= request_var('order','');
$start  = request_var('start', 0);
$limit  = $config['posts_per_page']; // number of posts allowed to show, set in phpBB3's ACP

/*
* Set up sql vars
*/
	$sql = "SELECT *
		FROM " . KB_ARTICLE_TABLE . "
		WHERE article_id = article_id
		AND activ = '1'
       ORDER BY last_change DESC";
          
	$result = $db->sql_query($sql);
	$num_articles = sizeof($db->sql_fetchrowset($result));
	$result = $db->sql_query_limit($sql, $limit, $start);

	while ($row = $db->sql_fetchrow($result))
	{
		$cat = $row['cat_id'];

//      if ($auth->acl_get('u_print_kb', $row['article_id'])) 
//      {
		$rdf .= "<item>";
		$rdf .= "<title>" . $row['titel'] . "</title>";
		$rdf .= "<link>" . $kb_topic_url . "?id=" . $row["article_id"] . "</link>";
        $rdf .= "<pubDate>" . date("D, d M Y H:G:s O", $row['post_time']) . "</pubDate>";
		$rdf .= "<description>" . generate_text_for_display($row['description'], ENT_QUOTES, 'utf-8', '') . "</description>";
		$rdf .= "</item>";
      }
//	}
	
$db->sql_freeresult($result);
unset($row);

$rdf .= "</channel></rss>";

// Output the RDF
echo $rdf;
?>