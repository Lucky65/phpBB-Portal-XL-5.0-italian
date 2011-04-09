<?php
/*
*
* @name center_rss_feeds.php
* @package phpBB3 Portal XL 5.0
* @version $Id: center_rss_feeds.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
$portal_feeds_cache_time = $portal_config['portal_feeds_cache_time'];
$portal_feeds_items_limit = $portal_config['portal_feeds_items_limit'];
$portal_feeds_random_limit = $portal_config['portal_feeds_random_limit'];

function ShowRSS($url) {
    global $rss;
    if ($rs = $rss->get($url)) {
//        $msg = '<h3><a href="' . $rs['link'] . '" target="_blank">' . $rs['title'] . "</a></h3>";
        $msg= '<p class="gensmall"><em>' . $rs['description'] . "</em></p>";
            $msg.= "<br /><div>";
            foreach ($rs['items'] as $item) {
                $msg.= '<span class="gensmall"><img src="./portal/images/rss.png" title="' . $item['description'] . '" /> <a href="' . $item['link'] . '" target="_blank">' . $item['title'] . '</a></span><br />';
            }
            if ($rs['items_count'] <= 0) { $msg.= '<li class="gensmall">Sorry, no RSS items found in the cache file.</li>'; }
            $msg.= "</div><br />";
    }
    return $msg;
}

// include lastRSS
include_once($phpbb_root_path . 'portal/block/lastRSS.'.$phpEx);

// Create lastRSS object
$rss = new lastRSS;

// Set cache dir, cache interval and character encoding
$rss->cache_dir = './cache';
$rss->cache_time = $portal_feeds_cache_time; // Maximum age of the cache file for feed before it is updated, in seconds. 
$rss->cp = 'UTF-8';  // character encoding of your page ! phpBB default is UTF8 so you don´t need to edit it
$rss->rsscp = 'UTF-8'; // default encoding of RSS if encoding tag is not available
$rss->items_limit = $portal_feeds_items_limit; //number of news


	// Pull data from database
	$sql = "SELECT *
		FROM " . PORTAL_NEWSFEEDS_TABLE . "
        WHERE feed_show = 1
		ORDER BY RAND()
		LIMIT " . $portal_feeds_random_limit;
	$result = $db->sql_query($sql);
  	if(!($result = $db->sql_query($sql)))
	{
		trigger_error('Could not get RSS list.', E_USER_ERROR);
	} 
  	else
  	{
    	$i = 0;
    	while($row = $db->sql_fetchrow($result))
    	{ 
			$feeds[$i]['title'] = $row['feed_title'];
			$feeds[$i]['id'] = $row['feed_id'];
			$feeds[$i]['url'] = $row['feed_url'];
			$feeds[$i]['position'] = $row['feed_position'];
      		$i++;
    	}
  	} 
  	$db->sql_freeresult($result);

// Main feeds
for ($i = 0; isset($feeds[$i]['id']); $i++)
{

	$template->assign_block_vars('maincat', array(
		'S_ROW_POSITION'	=> $feeds[$i]['position'],
		));

		if($feeds[$i]['position'] == 1) // left side
		{
			// Get left RSS content
			$feed_left_url[$feeds[$i]['position'] == 1] = $feeds[$i]['url'];
			$rss_left_column = '';
			foreach ($feed_left_url as $url) $rss_left_column.=ShowRSS($url);

			$template->assign_block_vars('rss_left_column', array(
				'LEFT_SYNDICATION' => $rss_left_column,
				'FEEDS_TITLE' => '<h3><a href="' . $feeds[$i]['url'] . '" target="_blank">' . $feeds[$i]['title'] . "</a></h3>",
				));
		}
	
		if($feeds[$i]['position'] == 2) // right side
		{
			// Get right RSS content
			$feed_right_url[$feeds[$i]['position'] == 2] = $feeds[$i]['url'];
			$rss_right_column ='';
			foreach ($feed_right_url as $url) $rss_right_column.=ShowRSS($url);

			$template->assign_block_vars('rss_right_column', array(
				'RIGHT_SYNDICATION'	=> $rss_right_column,
				'FEEDS_TITLE' => '<h3><a href="' . $feeds[$i]['url'] . '" target="_blank">' . $feeds[$i]['title'] . "</a></h3>",
				));
		}

}// Main feeds

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/center_rss_feeds.html',
	));

?>