<?php
/**
*
* @name stat_adv_small.php
* @package phpBB3 Portal XL 5.0
* @version $Id: stat_adv_small.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/

// switch idea from phpbb2 :p
function get_db_stat($mode)
{
	global $db, $user;

	switch( $mode )
	{
		case 'newposttotal':
			$sql = "SELECT COUNT(post_id) AS newpost_total
				FROM " . POSTS_TABLE . "
				WHERE post_time > " . $user->data['session_last_visit'];
			break;

		case 'newtopictotal':
			$sql = "SELECT COUNT(distinct p.post_id) AS newtopic_total
				FROM " . POSTS_TABLE . " p, " . TOPICS_TABLE . " t
				WHERE p.post_time > " . $user->data['session_last_visit'] . "
				AND p.post_id = t.topic_first_post_id";
			break;
			
		case 'newannouncementtotal':
			$sql = "SELECT COUNT(distinct t.topic_id) AS newannouncement_total
				FROM " . TOPICS_TABLE . " t, " . POSTS_TABLE . " p
				WHERE t.topic_type = " . POST_ANNOUNCE . "
				AND p.post_time > " . $user->data['session_last_visit'] . "
				AND p.post_id = t.topic_first_post_id";
			break;

		case 'newstickytotal':
			$sql = "SELECT COUNT(distinct t.topic_id) AS newsticky_total
				FROM " . TOPICS_TABLE . " t, " . POSTS_TABLE . " p
				WHERE t.topic_type = " . POST_STICKY . "
				AND p.post_time > " . $user->data['session_last_visit'] . "
				AND p.post_id = t.topic_first_post_id";
			break;	

		case 'announcementtotal':
			$sql = "SELECT COUNT(distinct t.topic_id) AS announcement_total
				FROM " . TOPICS_TABLE . " t, " . POSTS_TABLE . " p
				WHERE t.topic_type = " . POST_ANNOUNCE . " OR topic_type = " . POST_GLOBAL. "
				AND p.post_id = t.topic_first_post_id";
			break;

		case 'stickytotal':
			$sql = "SELECT COUNT(distinct t.topic_id) AS sticky_total
				FROM " . TOPICS_TABLE . " t, " . POSTS_TABLE . " p
				WHERE t.topic_type = " . POST_STICKY . "
				AND p.post_id = t.topic_first_post_id";
			break;

		case 'attachmentstotal':
			$sql = 'SELECT COUNT(attach_id) AS attachments_total
					FROM ' . ATTACHMENTS_TABLE;
			break;
			
		case 'attachmentstotalsize':
			$sql = 'SELECT SUM(download_count * filesize) AS attachmentstotal_size
					FROM ' . ATTACHMENTS_TABLE;
			break;
			
		case 'activeuserpostcount':
			$sql = 'SELECT COUNT(user_id) AS userpost_count 
					FROM ' . USERS_TABLE . '
					WHERE user_posts > 0';
			break;
			
		case 'poststotal':
			$sql = 'SELECT COUNT(post_id) AS posts_total
					FROM ' . POSTS_TABLE;
			break;
			
		case 'topicstotal':
			$sql = 'SELECT COUNT(topic_id) AS topics_total
					FROM ' . TOPICS_TABLE;
			break;
			
	}
	
	if ( !($result = $db->sql_query($sql)) )
	{
		return false;
	}

	$row = $db->sql_fetchrow($result);
 	$db->sql_freeresult($result);

	switch ( $mode )
	{
		case 'newposttotal':
			return $row['newpost_total'];
			break;

		case 'newtopictotal':
			return $row['newtopic_total'];
			break;

		case 'newannouncementtotal':
			return $row['newannouncement_total'];
			break;

		case 'announcementtotal':
			return $row['announcement_total'];
			break;
			
		case 'newstickytotal':
			return $row['newsticky_total'];
			break;

		case 'stickytotal':
			return $row['sticky_total'];
			break;

		case 'attachmentstotal':
			return $row['attachments_total'];
			break;
			
		case 'attachmentstotalsize':
			return $row['attachmentstotal_size'];
			break;
			
		case 'activeuserpostcount':
			return $row['userpost_count'];
			break;
			
		case 'poststotal':
			return $row['posts_total'];
			break;
			
		case 'topicstotal':
			return $row['topics_total'];
			break;

	}
	return false;
}
	
// Set some stats, get posts count from forums data if we... hum... retrieve all forums data
$total_posts		= $config['num_posts'];
$total_topics		= $config['num_topics'];
$total_users		= $config['num_users'];
$newest_user		= $config['newest_username'];
$newest_uid			= $config['newest_user_id'];

$l_total_user_s 	= ($total_users == 0) ? 'TOTAL_USERS_ZERO' : 'TOTAL_USERS_OTHER';
$l_total_post_s 	= ($total_posts == 0) ? 'TOTAL_POSTS_ZERO' : 'TOTAL_POSTS_OTHER';
$l_total_topic_s	= ($total_topics == 0) ? 'TOTAL_TOPICS_ZERO' : 'TOTAL_TOPICS_OTHER';

$board_days = ceil((time() - $config['board_startdate']) / 86400);

$topics_per_day = ($board_days == 0) ? 0 : round($total_topics / $board_days, 0);
$posts_per_day = ($board_days == 0) ? 0 : round($total_posts  / $board_days, 0);
$users_per_day = ($board_days == 0) ? 0 : round($total_users  / $board_days, 0);
$topics_per_user = ($total_users == 0)  ? 0 : round($total_topics / $total_users, 0);
$posts_per_user = ($total_users == 0)  ? 0 : round($total_posts  / $total_users, 0);
$posts_per_topic = ($total_topics == 0) ? 0 : round($total_posts  / $total_topics, 0); 

if ($topics_per_day > $total_topics)
{
	$topics_per_day = $total_topics;
}

if ($posts_per_day > $total_posts)
{
	$posts_per_day = $total_posts;
}

if ($users_per_day > $total_users)
{
	$users_per_day = $total_users;
}

if ($topics_per_user > $total_topics)
{
	$topics_per_user = $total_topics;
}

if ($posts_per_user > $total_posts)
{
	$posts_per_user = $total_posts;
}

if ($posts_per_topic > $total_posts)
{
	$posts_per_topic = $total_posts;
}

$user->add_lang('mods/portal_xl_average_statistics');

$l_topics_per_day_s = ($total_topics == 0) ? 'TOPICS_PER_DAY_ZERO' : 'TOPICS_PER_DAY_OTHER';
$l_posts_per_day_s = ($total_posts == 0) ? 'POSTS_PER_DAY_ZERO' : 'POSTS_PER_DAY_OTHER';
$l_users_per_day_s = ($total_users == 0) ? 'USERS_PER_DAY_ZERO' : 'USERS_PER_DAY_OTHER';
$l_topics_per_user_s = ($total_topics == 0) ? 'TOPICS_PER_USER_ZERO' : 'TOPICS_PER_USER_OTHER';
$l_posts_per_user_s = ($total_posts == 0) ? 'POSTS_PER_USER_ZERO' : 'POSTS_PER_USER_OTHER';
$l_posts_per_topic_s = ($total_posts == 0) ? 'POSTS_PER_TOPIC_ZERO' : 'POSTS_PER_TOPIC_OTHER';

$size_lang_attach = (get_db_stat('attachmentstotalsize') >= 1048576) ? $user->lang['MIB'] : ((get_db_stat('attachmentstotalsize') >= 1024) ? $user->lang['KIB'] : $user->lang['BYTES']);
$formatted_attachsize = (get_db_stat('attachmentstotalsize') >= 1048576) ? round((round(get_db_stat('attachmentstotalsize') / 1048576 * 100) / 100), 2) : ((get_db_stat('attachmentstotalsize') >= 1024) ? round((round(get_db_stat('attachmentstotalsize') / 1024 * 100) / 100), 2) : get_db_stat('attachmentstotalsize'));

// clear cache to refresh counter values immediately
//global $cache;
//$cache->purge();

// Assign specific vars
$template->assign_vars(array(
	'TOTAL_POSTS'				=> sprintf($user->lang[$l_total_post_s], $total_posts),
	'TOTAL_TOPICS'				=> sprintf($user->lang[$l_total_topic_s], $total_topics),
	'TOTAL_USERS'				=> sprintf($user->lang[$l_total_user_s], $total_users),
	'NEWEST_USER'				=> sprintf($user->lang['NEWEST_USER'], get_username_string('full', $config['newest_user_id'], $config['newest_username'], $config['newest_user_colour'])),
	'ST_TOT_VISIT'				=> sprintf($user->lang['ST_TOT_VISIT']),
	'ST_LAT_VISIT'				=> sprintf($user->lang['ST_LAT_VISIT']),
	'VISIT_COUNTER'				=> $portal_config['portal_visit_counter'],
	'TOPICS_PER_DAY'			=> sprintf($user->lang[$l_topics_per_day_s], $topics_per_day),	
	'POSTS_PER_DAY'				=> sprintf($user->lang[$l_posts_per_day_s], $posts_per_day),	
	'USERS_PER_DAY'				=> sprintf($user->lang[$l_users_per_day_s], $users_per_day),	
	'TOPICS_PER_USER'			=> sprintf($user->lang[$l_topics_per_user_s], $topics_per_user),	
	'POSTS_PER_USER'			=> sprintf($user->lang[$l_posts_per_user_s], $posts_per_user),	
	'POSTS_PER_TOPIC'			=> sprintf($user->lang[$l_posts_per_topic_s], $posts_per_topic),
	'S_NEW_POSTS'				=> get_db_stat('newposttotal'),
	'S_NEW_TOPIC'				=> get_db_stat('newtopictotal'),
	'S_NEW_ANN'					=> get_db_stat('newannouncementtotal'),
	'S_NEW_SCT'					=> get_db_stat('newstickytotal'),
	'S_ANN'						=> get_db_stat('announcementtotal'),
	'S_SCT'						=> get_db_stat('stickytotal'),
	'S_TOT_ATTACH'				=> ($config['allow_attachments']) ? get_db_stat('attachmentstotal') : 0,
	'S_TOT_ATTACH_SIZE'			=> $formatted_attachsize . ' ' . $size_lang_attach,
	'S_TOT_ACTIVE_USERS'		=> get_db_stat('activeuserpostcount'),
	'S_TOT_POSTS'				=> get_db_stat('poststotal'),
	'S_TOT_TOPICS'				=> get_db_stat('topicstotal'),
	
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/stat_adv_small.html',
	));

?>