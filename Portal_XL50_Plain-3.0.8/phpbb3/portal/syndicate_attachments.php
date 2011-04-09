<?php 
/** 
*
* @name syndicate_attachments.php
* @package phpBB3 Portal XL
* @version $Id: syndicate_attachments.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
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
$attachment_url = ($script_name != '') ? $script_name . '/download/file.' . $phpEx : '/download/file.'. $phpEx;
$index = ($script_name != '') ? $script_name . '/portal.' . $phpEx : 'portal.'. $phpEx;
$server_name = trim($config['server_name']);
$server_protocol = ($config['cookie_secure']) ? 'https://' : 'http://';
$server_port = ($config['server_port'] <> 80) ? ':' . trim($config['server_port']) . '/' : '/';

$time = time();
$pre_timezone = date('O', $time);
$time_zone = substr($pre_timezone, 0, 3).":".substr($pre_timezone, 3, 2);
$topics_per_page = $config['posts_per_page']; // number of posts allowed to show, set in phpBB3's ACP

$index_url = $server_protocol . $server_name . $server_port . $index;
$attachment_url = $server_protocol . $server_name . $server_port . $attachment_url;
$number_of_attachments = $portal_config['portal_attachments_number'];

$rdf  = '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' . "\n";
$rdf .= '<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:annotate="http://purl.org/rss/1.0/modules/annotate/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">' . "\n";
$rdf .= '<channel>' . "\n";
$rdf .= '<title>' . strip_tags($config['sitename']) . ' Forum Attachments</title>' . "\n";
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

switch ($order) {
	default:
		$order_sql = "LOWER(a.filetime) DESC";
		break;
}

/*
* Set up sql vars
*/
$sql_array = array(
    'SELECT'    			=> 't.*, p.*, u.username, f.forum_name, f.forum_id, a.* ',
    'FROM'        			=> array(
		POSTS_TABLE			=> 'p',
        TOPICS_TABLE        => 't',
        USERS_TABLE         => 'u',
        FORUMS_TABLE        => 'f',
        ATTACHMENTS_TABLE  	=> 'a'
    ),
    'WHERE'        			=> "p.post_attachment = 1
        AND a.post_msg_id = p.post_id
        AND t.topic_id = p.topic_id
        AND u.user_id = p.poster_id
        AND f.forum_id = p.forum_id",
    'ORDER_BY'    			=> $order_sql
);
/*
* query database
*/
$sql = $db->sql_build_query('SELECT', $sql_array);    
$result = $db->sql_query($sql);
$num_attachments = sizeof($db->sql_fetchrowset($result));
$result = $db->sql_query_limit($sql, $limit, $start);

	while ($row = $db->sql_fetchrow($result))
	{
	
	$size_lang = ($row['filesize'] >= 1048576) ? $user->lang['MB'] : (($row['filesize'] >= 1024) ? $user->lang['KB'] : $user->lang['BYTES']);
	$row['filesize'] = ($row['filesize'] >= 1048576) ? round((round($row['filesize'] / 1048576 * 100) / 100), 2) : (($row['filesize'] >= 1024) ? round((round($row['filesize'] / 1024 * 100) / 100), 2) : $row['filesize']);

    $topicId = $row["attach_id"] ;
    $title = $row['real_filename'];

	if ($auth->acl_get('f_download', $row['forum_id']))
	{
		$rdf .= "<item>";
		$rdf .= "<title>" . $title . "</title>";
		$rdf .= "<link>" . $attachment_url . "?id=" . $topicId . "</link>";
		$rdf .= "<pubDate>" . date("D, d M Y H:G:s O", $row['post_time']) . "</pubDate>";
		$rdf .= "<description>" . generate_text_for_display($row['attach_comment'], ENT_QUOTES, 'utf-8', '') . "</description>";
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