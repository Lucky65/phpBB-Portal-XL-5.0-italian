<?php 
/** 
*
* @name syndicate.php
* @package phpBB3 Portal XL 5.0
* @version $Id: syndicate.php,v 1.4 2010/04/05 damysterious Exp $
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

global $phpEx, $db, $config, $phpbb_root_path, $portal_config;

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/portal_xl');

$count = request_var('count', 0);
$chars = request_var('chars', 0);
$type = request_var('type', '');
$fid = request_var('fid', 0);
$titlepattern = request_var('titlepattern', '');

// If not set, set the output count to 20
$count = (!isset($HTTP_GET_VARS['count'])) ? 50 : intval($HTTP_GET_VARS['count']);
$count = ($count == 0) ? 50 : $count;
if ($count < 0 || $count > 150) $count = 150; //Maximum
 
// characters
$chars = (isset($HTTP_GET_VARS['chars'])) ? intval($HTTP_GET_VARS['chars']) : 200;
if ($chars < 0 || $chars > 500) $chars = 500; //Maximum
$type = (isset($HTTP_GET_VARS['type'])) ? $HTTP_GET_VARS['type'] : 'latest';
$news = ($type == 'news');

// Create main board url
$script_name = preg_replace('/^\/?(.*?)\/?$/', '\1', trim($config['script_path']));
$viewtopic = ($script_name != '') ? $script_name . '/viewtopic.' . $phpEx : '/viewtopic.'. $phpEx;
$index = ($script_name != '') ? $script_name . '/portal.' . $phpEx : 'portal.'. $phpEx;
$server_name = trim($config['server_name']);
$server_protocol = ($config['cookie_secure']) ? 'https://' : 'http://';
$server_port = ($config['server_port'] <> 80) ? ':' . trim($config['server_port']) . '/' : '/';

$index_url = $server_protocol . $server_name . $server_port . $index;
$viewtopic_url = $server_protocol . $server_name . $server_port . $viewtopic;

// Strip all BBCodes and Smileys from the post
function strip_post($text)
{
   $text = preg_replace("#\[\/?[a-z0-9\*\+\-]+(?:=.*?)?(?::[a-z])?(\:?$uid)\]#", '', $text); // for BBCode
   $text = preg_replace('#<!\-\- s(.*?) \-\-><img src="\{SMILIES_PATH\}\/.*? \/><!\-\- s(.*?) \-\->#', '', $text); // for smileys
   $text = str_replace('&amp;#', '&#', htmlspecialchars($text, ENT_QUOTES)); // html format
   return $text;
}

$rdf  = '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' . "\n";
$rdf .= '<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:annotate="http://purl.org/rss/1.0/modules/annotate/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">' . "\n";
$rdf .= '<channel>' . "\n";
$rdf .= '<title>' . strip_tags($config['sitename']) . ' Forum</title>' . "\n";
$rdf .= '<link>' . $index_url . '</link>' . "\n";
$rdf .= '<description>' . strip_tags($config['site_desc']) . '</description>' . "\n";
$rdf .= '<pubDate>' . date("D, d M Y H:G:s O") . '</pubDate>' . "\n";
$rdf .= '<lastBuildDate>' . date("D, d M Y H:G:s O") . '</lastBuildDate>' . "\n";
$rdf .= '<copyright>Copyright 2007, ' . $config['sitename'] . '</copyright>' . "\n";
$rdf .= '<webMaster>' . $config['board_email'] . '</webMaster>' . "\n";
$rdf .= '<managingEditor>' . $config['board_email'] . '</managingEditor>' . "\n";

$fid = (isset($HTTP_GET_VARS['fid'])) ? $HTTP_GET_VARS['fid'] : array();
if (!is_array($fid)) $fid = array($fid);

$fid_new = array();
for ($i=0; $i < sizeof($fid); $i++)
{
   if (intval($fid[$i]) > 0)
   {
      if (!in_array($fid[$i], $fid_new))
      {
         $fid_new[] = $fid[$i];
      }
   }
}
$fid = $fid_new;
$sql_where = (sizeof($fid) > 0) ? " AND f.forum_id IN (" . implode($fid, ", ") . ")" : " ";

$sql_orderby = $news ? 't.topic_time DESC' : 'p.post_time DESC';
$sql_post_id_field = $news ? 't.topic_first_post_id' : 't.topic_last_post_id';

// SQL statement to fetch active topics of public forums
$sql = "SELECT t.topic_id, t.topic_title, p.post_id, p.post_time, p.post_text, p.bbcode_uid, p.bbcode_bitfield, p.post_approved, f.forum_name, f.forum_id
      FROM " . TOPICS_TABLE . " AS t, " . POSTS_TABLE . " AS p, " . FORUMS_TABLE . " AS f
      WHERE f.forum_id = t.forum_id
          AND p.topic_id = t.topic_id
          AND p.post_id = " . $sql_post_id_field . "
          AND p.post_id = p.post_id
      AND p.post_approved = 1
          " . $sql_where . "
      ORDER BY " . $sql_orderby ." LIMIT " . $count . "";
$topics_query = $db->sql_query($sql);

if (!$topics_query)
{
    die("Failed obtaining list of active topics");
} else
{
    $topics = $db->sql_fetchrowset($topics_query);
}

if (count($topics) == 0)
{
    die("No topics found");
}
else
{
   // $topics contains all interesting data
   for ($i = 0; $i < count($topics); $i++)
    {
       if (isset($HTTP_GET_VARS['titlepattern']))
       {
         $title = $HTTP_GET_VARS['titlepattern'];
            $title = str_replace('__DATE__', date("D, d M Y H:G:s O", $topics[$i]['post_time']), $title);
            $title = str_replace('__TITLE__', $topics[$i]['topic_title'], $title);
            $title = str_replace('__FORUM__', $topics[$i]['forum_name'], $title);
      } else
      {
           $title = $topics[$i]['topic_title'];
      }
      
      $url = ($news) ? $viewtopic_url . "?" . 't' . "=" . $topics[$i]['topic_id'] : $viewtopic_url . "?" . 'p' . "=" . $topics[$i]['post_id'] . '#p'. $topics[$i]['post_id'];

      $message = $topics[$i]['post_text'];
	  $message = preg_replace('/\[.+:.+\]/iU', '', $message);
	  $message = preg_replace('/<!-- s(.+?) -->.*?<!-- s\1 -->/i', '$1',$message);
	  $message = preg_replace('/<!-- (.+?) -->.*?<!-- \1 -->/i', '', $message);
      $message = strip_tags($message);
      $message = strip_post($message);

	  $message = str_replace('<br />', '<br />' . "\n", $message);
	  // $message = str_replace('<br />', '<br />' . "\r", $message);

	  // Replace some entities with their unicode counterpart
	  $entities = array(
		  '&nbsp;'		=> "\xC2\xA0",
		  '&bull;'		=> "\xE2\x80\xA2",
		  '&middot;'	=> "\xC2\xB7",
		  '&copy;'		=> "\xC2\xA9",
	  );
  
	  $message = str_replace(array_keys($entities), array_values($entities), $message);
  
	  // Other control characters
	  $message = preg_replace('#(?:[\x00-\x1F\x7F]+|(?:\xC2[\x80-\x9F])+)#', '', $message);

	  if ($chars > 0) 
	  {
		 $message = (strlen($message) > $chars) ? substr($message, 0, ($chars - 6)) . ' ...' : $message;
	  }

	  $message = censor_text($message);

      if ($auth->acl_get('f_read', $topics[$i]['forum_id'])) 
      {
         $rdf .= "<item>";
         $rdf .= "<title>" . $title . "</title>";
         $rdf .= "<link>" . $url . "</link>";
         $rdf .= "<pubDate>" . date("D, d M Y H:G:s O", $topics[$i]['post_time']) . "</pubDate>";
         $rdf .= "<description>" . generate_text_for_display($message, ENT_QUOTES, 'utf-8', '')  . "</description>";
         $rdf .= "</item>";
      }
    }
}
$db->sql_freeresult($topics_query);
unset($topics[$i]);

$rdf .= "</channel></rss>";

// Output the RDF
echo $rdf;
?>