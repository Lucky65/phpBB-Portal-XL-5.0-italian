<?php
/**
*
* @package user acheivements
* @version 0.0.1
* @copyright Ian Taylor
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
function has_created_topic($id)
{

		global $db;

		$sql = 'SELECT COUNT(topic_id) AS total_topics 
				FROM '. TOPICS_TABLE .' 
				WHERE topic_poster ='.$id;
		$result = $db->sql_query($sql);
		$total_topics = $db->sql_fetchfield('total_topics');
		$db->sql_freeresult($result);
		return $total_topics;
}

function get_total_topic_views($id)
{

		global $db;

		$sql = 'SELECT 
				topic_poster
				, topic_views 
				FROM '.TOPICS_TABLE.' 
				WHERE topic_poster ='.$id.' 
				ORDER BY topic_views DESC';
		$result	 	= $db->sql_query($sql);
		$total_topic_views = $db->sql_fetchfield('topic_views');
		$db->sql_freeresult($result);

		return $total_topic_views;

}
function get_total_topic_replies($id)
{

		global $db;

		$sql = 'SELECT 
		topic_poster
		, topic_replies 
		FROM '.TOPICS_TABLE.' 
		WHERE topic_poster ='.$id.' 
		ORDER BY topic_replies DESC';
		$result	 	= $db->sql_query($sql);
		$total_topic_replies = $db->sql_fetchfield('topic_replies');
		$db->sql_freeresult($result);
		
		return $total_topic_replies;

}
function has_attachments($id)
{

		global $db;

		$sql = 'SELECT 
		poster_id
		, attach_id FROM '.ATTACHMENTS_TABLE.' 
		WHERE poster_id ='.$id;
		$result	 	= $db->sql_query($sql);
		$has_attached = ($db->sql_fetchfield('attach_id')) ? true : false;
		$db->sql_freeresult($result);
		
		return $has_attached;

}
function has_created_poll($id)
{

		global $db;

		$sql = 'SELECT 
				topic_poster
				, poll_start
				, poll_title 
				FROM '.TOPICS_TABLE.' 
				WHERE topic_poster ='.$id.' 
					AND poll_start <> 0';
		$result	 	= $db->sql_query($sql);
		$has_poll = ($db->sql_fetchfield('poll_title')) ? true : false;
		$db->sql_freeresult($result);
		
		return $has_poll;

}
function total_friends($id)
{

		global $db;

		$sql = 'SELECT COUNT(zebra_id) 
				AS number_friends 
				FROM '. ZEBRA_TABLE ." 
				WHERE user_id=$id 
					AND friend = 1";
		$result = $db->sql_query($sql);
		$total_friend = $db->sql_fetchfield('number_friends');
		$db->sql_freeresult($result);
		
		return $total_friend;
}

function total_join_days($id)
{
		
		global $db;

		$sql = 'SELECT 
				user_regdate
				FROM '.USERS_TABLE.' 
				WHERE user_id ='.$id; 
		$result	 	= $db->sql_query($sql);

		$joindate		= $db->sql_fetchfield('user_regdate');
		$userdays       = round((time() - $joindate) / 86400, 4);
		$db->sql_freeresult($result);
		
		return	$userdays;

}
function has_voted_poll($id)
{

		global $db;

		$sql = 'SELECT 
				vote_user_id 
				FROM '.POLL_VOTES_TABLE.' 
				WHERE vote_user_id ='.$id;
		$result	 	= $db->sql_query($sql);
		$has_voted_poll = ($db->sql_fetchfield('vote_user_id')) ? true : false;
		$db->sql_freeresult($result);
		
		return $has_voted_poll;
}

function total_post_goals()
{
	global $member;
		
	$posts = $member['user_posts'];
	$posts_40 = ($posts >= 40) ? true : false;
	$posts_80 = ($posts >= 80) ? true : false;
	$posts_160 = ($posts >= 160) ? true : false;
	$posts_240 = ($posts >= 240) ? true : false;
	$posts_480 = ($posts >= 480) ? true : false;
	$posts_600 = ($posts >= 600) ? true : false;
	$posts_1000 = ($posts >= 1000) ? true : false;
	$posts_2000 = ($posts >= 2000) ? true : false;
	$posts_3000 = ($posts >= 3000) ? true : false;
	
	$total_post_goal = $posts_40 + $posts_80 + $posts_160 + $posts_240 + $posts_480 + $posts_600 + $posts_1000 + $posts_2000 + $posts_3000;
	
	return $total_post_goal;

}

function total_topic_created_goals()
{
	global $db, $member;
	
	$user_id = request_var('u', 0);
	
	$total_topic 	=	 has_created_topic($user_id);
	$total_topic_10 =	($total_topic >= 10) ? true : false;
	$total_topic_20 =	($total_topic >= 20) ? true : false;
	$total_topic_50 =	($total_topic >= 50) ? true : false;
	
	$total_topic_goal = $total_topic_10 + $total_topic_20 + $total_topic_50;
	
	return $total_topic_goal;

}

function total_topic_views_goals()
{
	global $db, $member;
	
	$user_id = request_var('u', 0);
	
	$total_topic_view = get_total_topic_views($user_id);
	$total_topic_view_500 = ($total_topic_view >= 500) ? true : false;
	$total_topic_view_1000 = ($total_topic_view >= 1000) ? true : false;
	$total_topic_view_10000 = ($total_topic_view >= 10000) ? true : false;
	
	$total_topic_views	= $total_topic_view_500 + $total_topic_view_1000 + $total_topic_view_10000;
	
	return $total_topic_views;
}
function total_topic_reply_goals()
{
	global $db, $member;
	
	$user_id = request_var('u', 0);
	
	$topic_replies = get_total_topic_replies($user_id);
	$topic_replies_25 = ($topic_replies >= 25) ? true : false;
	$topic_replies_50 = ($topic_replies >= 50) ? true : false;
	$topic_replies_100 = ($topic_replies >= 100) ? true : false;
	$topic_replies_500 = ($topic_replies >= 500) ? true : false;
	
	$total_topic_replies = $topic_replies_25 + $topic_replies_50 + $topic_replies_100 + $topic_replies_500;
		
	return $total_topic_replies;
}
function total_randy_goals()
{
	global $db, $member;
	
	$user_id = request_var('u', 0);
	
	$has_poll = (has_created_poll($user_id)) ? true : false;
	$has_voted_poll = (has_voted_poll($user_id)) ? true : false;
	$has_avatar = ($member['user_avatar']) ? true : false;
	$has_uploaded = (has_attachments($user_id)) ? true : false;
			
	$randy_goals = $has_poll + $has_voted_poll + $has_avatar + $has_uploaded;
		
	return $randy_goals;
}
function total_friend_goals()
{
	global $db, $member;
	
	$user_id = request_var('u', 0);
	
	$has_friend = total_friends($user_id);
	$friend_5 = ($has_friend >= 5) ? true : false;
	$friend_10 = ($has_friend >= 10) ? true : false;
	$friend_20 = ($has_friend >= 20) ? true : false;
	$friend_50 = ($has_friend >= 50) ? true : false;
	
	$friend_goals = $friend_5 + $friend_10 + $friend_20 + $friend_50;
		
	return $friend_goals;
}
function total_member_goals()
{
	global $db, $member;
		
	$user_id = request_var('u', 0);

	$member_for = total_join_days($user_id);
	$member_for_30 = ($member_for >= 30) ? true : false;
	$member_for_60 = ($member_for >= 60) ? true : false;
	$member_for_365 = ($member_for >= 365) ? true : false;
	
	$member_goal = $member_for_30 + $member_for_60 + $member_for_365;
		
	return $member_goal;
}
function total_join_days_goals()
{
	global $db, $member;
	
	$user_id = request_var('u', 0);

	$per_day = total_join_days($user_id);
	$post_per_day_5 = ($member['user_posts'] / $per_day >= 5) ? true : false;
	$post_per_day_10 = ($member['user_posts'] / $per_day >= 10) ? true : false;
	$post_per_day_20 = ($member['user_posts'] / $per_day >= 20) ? true : false;
	
	$post_per_day_goal = $post_per_day_10 + $post_per_day_5 + $post_per_day_20;
		
	return $post_per_day_goal;
}
?>