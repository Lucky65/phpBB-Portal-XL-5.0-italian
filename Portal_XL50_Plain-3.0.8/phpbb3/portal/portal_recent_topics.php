<?php
/*
*
* @name portal_recent_topics.php
* @package phpBB3 Portal XL
* @version $Id: portal_recent_topics.php,v 1.3 2009/06/03 22:06:43 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
	
/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

global $portal_config, $config, $db, $auth, $template, $forums, $forum_data, $post_alt, $topic_data, $time;

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup(array('viewforum', 'mods/portal_xl'));

// ############         Edit below         ########################################
$topic_length = '55';	// length of topic title
$topic_limit = '10';	// limit of displayed topics per page
$special_forums = '0';	// specify forums ('0' = no; '1' = yes)
$forum_ids = '';		// IDs of forums; separate them with a comma
$set_mode = 'today';	// set default mode ('today', 'yesterday', 'last24', 'lastweek', 'lastXdays')
$set_days = '14';		// set default days (used for lastXdays mode)
$set_limit = '10';      // limit of pagination in topic row view
// ############         Edit above         ########################################

$start = request_var('start', 0);

if( isset($_GET['mode']) || isset($_POST['mode']) )
{
	$mode = ( isset($_GET['mode']) ) ? $_GET['mode'] : $_POST['mode'];
}
else
{
	$mode = $set_mode;
}

if( isset($_GET['amount_days']) || isset($_POST['amount_days']) )
{
	$amount_days = ( isset($_GET['amount_days']) ) ? $_GET['amount_days'] : $_POST['amount_days'];
}
else
{
	$amount_days = $set_days;
}

/*
* output the page
*/
page_header($config['sitename'] . ' : ' . $user->lang['RECENT_TOPICS']);

$except_forums = '\'start\'';
for( $f = 0; $f < count($forums); $f++ )
{
	if (!$auth->acl_gets('f_list', 'f_read', $forums[$f]['forum_id']) || ($forums[$f]['forum_type'] == FORUM_LINK && $forums[$f]['forum_link'] && !$auth->acl_get('f_read', $forums[$f]['forum_id'])))
	{
		if( $except_forums == '\'start\'' )
		{
			$except_forums = $forums[$f]['forum_id'];
		}
		else
		{
			$except_forums .= ','. $forums[$f]['forum_id'];
		}
	}
}

$sort_days = 0;

$min_post_time = time() - ($sort_days * 86400);
$post_time = ($time == 0) ? '' : 'AND t.topic_time > ' . (time() - $time * 86400);
$topic_type = '(( topic_type <> ' . POST_ANNOUNCE . ') OR ( topic_type <> ' . POST_GLOBAL . ') OR ( topic_type = ' . POST_NORMAL . ') OR ( topic_type = ' . POST_STICKY  . ') AND ( t.topic_status <> ' . ITEM_MOVED . '))';
$where_forums = ( $special_forums == '0' ) ? 't.forum_id NOT IN ('. $except_forums .')' : 't.forum_id NOT IN ('. $except_forums .') AND t.forum_id IN ('. $forum_ids .')';

$sql_start = "SELECT t.*, p.poster_id, p.post_username AS last_poster_name, p.post_id, p.post_time, p.post_text, f.forum_name, f.forum_id, u.username AS last_poster, u.user_id AS last_poster_id, u2.username AS first_poster, u2.user_id AS first_poster_id, p2.post_username AS first_poster_name
	        FROM (". TOPICS_TABLE ." t, ". POSTS_TABLE ." p)
		LEFT OUTER JOIN ". POSTS_TABLE ." p2 ON (p2.post_id = t.topic_first_post_id)
		LEFT OUTER JOIN ". FORUMS_TABLE ." f ON (f.forum_id = p.forum_id )
		LEFT OUTER JOIN ". USERS_TABLE ." u ON (u.user_id = p.poster_id)
		LEFT OUTER JOIN ". USERS_TABLE ." u2 ON (u2.user_id = t.topic_poster)
	        WHERE $where_forums 
				AND $topic_type 
				AND p.post_id = t.topic_last_post_id 
				AND t.topic_approved = 1
				AND t.topic_moved_id = 0
				AND ";
$sql_end = "  ORDER BY t.topic_last_post_id DESC LIMIT $start, $topic_limit";

switch( $mode )
{
	case 'today':
		$sql = $sql_start ."FROM_UNIXTIME(p.post_time,'%Y%m%d') - FROM_UNIXTIME(unix_timestamp(NOW()),'%Y%m%d') = 0". $sql_end;
		$template->assign_vars(array('STATUS' => $user->lang['RECENT_TODAY']));
		$where_count = "$where_forums AND FROM_UNIXTIME(p.post_time,'%Y%m%d') - FROM_UNIXTIME(unix_timestamp(NOW()),'%Y%m%d') = 0";
		$l_mode = $user->lang['RECENT_TITLE_TODAY'];
		break;

	case 'yesterday':
		$sql = $sql_start ."FROM_UNIXTIME(p.post_time,'%Y%m%d') - FROM_UNIXTIME(unix_timestamp(NOW()),'%Y%m%d') = -1". $sql_end;
		$template->assign_vars(array('STATUS' => $user->lang['RECENT_YESTERDAY']));
		$where_count = "$where_forums AND FROM_UNIXTIME(p.post_time,'%Y%m%d') - FROM_UNIXTIME(unix_timestamp(NOW()),'%Y%m%d') = -1";
		$l_mode = $user->lang['RECENT_TITLE_YESTERDAY'];
		break;

	case 'last24':
		$sql   = $sql_start ."UNIX_TIMESTAMP(NOW()) - p.post_time < 86400". $sql_end;
		$template->assign_vars(array('STATUS' => $user->lang['RECENT_LAST24']));
		$where_count = "$where_forums AND UNIX_TIMESTAMP(NOW()) - p.post_time < 86400";
		$l_mode = $user->lang['RECENT_TITLE_LAST24'];
		break;

	case 'lastweek':
		$sql  = $sql_start ."UNIX_TIMESTAMP(NOW()) - p.post_time < 691200". $sql_end;
		$template->assign_vars(array('STATUS' => $user->lang['RECENT_LASTWEEK']));
		$where_count = "$where_forums AND UNIX_TIMESTAMP(NOW()) - p.post_time < 691200";
		$l_mode = $user->lang['RECENT_TITLE_WEEK'];
		break;

	case 'lastXdays':
		$sql    = $sql_start ."UNIX_TIMESTAMP(NOW()) - p.post_time < 86400 * $amount_days". $sql_end;
		$template->assign_vars(array('STATUS' => sprintf($user->lang['RECENT_LASTXDAYS'], $amount_days)));
		$where_count = "$where_forums AND UNIX_TIMESTAMP(NOW()) - p.post_time < 86400 * $amount_days";
		$l_mode = sprintf($user->lang['RECENT_TITLE_LASTXDAYS'], $amount_days);
		break;

	default:
		$message = $user->lang['RECENT_WRONG_MODE'] .'<br /><br />'. sprintf($user->lang['RECENT_CLICK_RETURN'], '<a href="'. append_sid("portal_recent_topics.$phpEx") .'">', '</a>') .'<br />'. sprintf($user->lang['RECENT_CLICK_RETURN'], '<a href="'. append_sid("index.$phpEx") .'">', '</a>');
		message_die(GENERAL_MESSAGE, $message);
		break;
}
$result = $db->sql_query($sql);

$line = array();
while( $row = $db->sql_fetchrow($result))
{
	$line[] = $row;
}
$db->sql_freeresult($result);
		
$orig_word = array();
$replacement_word = array();

$tracking_topics = ( isset($HTTP_COOKIE_VARS[$config['cookie_name'] .'_t']) ) ? unserialize($HTTP_COOKIE_VARS[$config['cookie_name'] .'_t']) : array();
$tracking_forums = ( isset($HTTP_COOKIE_VARS[$config['cookie_name'] .'_f']) ) ? unserialize($HTTP_COOKIE_VARS[$config['cookie_name'] .'_f']) : array();

for( $i = 0; $i < count($line); $i++ )
{
	$forum_id = $line[$i]['forum_id'];
	$forum_name = $line[$i]['forum_name'];
	$forum_url = append_sid("{$phpbb_root_path}viewforum.$phpEx", "f=$forum_id");
	$topic_id = $line[$i]['topic_id'];
	$topic_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $forum_id . '&amp;t=' . $topic_id . '&amp;start=' . $line[$i]['topic_last_post_id']) . '#p' . $line[$i]['topic_last_post_id'];

	$word_censor = censor_text($line[$i]['topic_title']);
	$topic_title = ( strlen($line[$i]['topic_title']) < $topic_length ) ? $word_censor : substr(stripslashes($word_censor), 0, $topic_length) .'...';

	$topic_type =  ( $line[$i]['topic_type'] == POST_ANNOUNCE ) ? $user->lang['POST_ANNOUNCEMENT'] .' ': '';
	$topic_type .= ( $line[$i]['topic_type'] == POST_GLOBAL ) ? $user->lang['REPLYING_GLOBAL_ANNOUNCE'] .' ': '';
	$topic_type .= ( $line[$i]['topic_type'] == POST_STICKY ) ? $user->lang['POST_STICKY'] .' ': '';
	$topic_type .= ( $line[$i]['poll_last_vote'] ) ? $user->lang['VIEW_TOPIC_POLL'] .' ': '';

	$views = $line[$i]['topic_views'];
	$replies = $line[$i]['topic_replies'];
	if( ( $replies + 1 ) > $set_limit )
	{
		$total_pages = ceil( ( $replies + 1 ) / $set_limit );
		$goto_page = ' [ ';
		$times = '1';
		for( $j = 0; $j < $replies + 1; $j += $set_limit )
		{
			$goto_page .= '<a href="'. append_sid("{$phpbb_root_path}viewtopic.$phpEx?", 'f=' . $forum_id . '&amp;t=' . $topic_id ."&amp;start=$j") .'">'. $times .'</a>';
			if( $times == '1' && $total_pages > '4' )
			{
				$goto_page .= ' ... ';
				$times = $total_pages - 3;
				$j += ( $total_pages - 4 ) * $set_limit;
			}
			else if( $times < $total_pages )
			{
				$goto_page .= ', ';
			}
			$times++;
		}
		$goto_page .= ' ] ';
	}
	else
	{
		$goto_page = '';
	}

	if( $line[$i]['topic_status'] == ITEM_LOCKED )
	{
		$folder = $user->img('topic_read_locked', 'NO_NEW_POSTS_LOCKED');
		$folder_new = $user->img('topic_unread_locked', 'NEW_POSTS_LOCKED');
	}
	else if( $line[$i]['topic_type'] == POST_ANNOUNCE )
	{
		$folder = $user->img('announce_read', 'POST_ANNOUNCEMENT');
		$folder_new = $user->img('announce_unread', 'POST_ANNOUNCEMENT');
	}
	else if( $line[$i]['topic_type'] == POST_GLOBAL )
	{
		$folder = $user->img['folder_global_announce'];
		$folder_new = $user->img['folder_global_announce_new'];
	}
	else if( $line[$i]['topic_type'] == POST_STICKY )
	{
		$folder = $user->img('sticky_read', 'POST_STICKY');
		$folder_new = $user->img('sticky_unread', 'POST_STICKY');
	}
	else
	{
		if( $replies >= $config['hot_threshold'] )
		{
			$folder = $user->img('topic_read_hot', 'NO_NEW_POSTS_HOT');
			$folder_new = $user->img('topic_unread_hot', 'NEW_POSTS_HOT');
		}
		else
		{
			$folder = $user->img('topic_read', 'NO_NEW_POSTS');
			$folder_new = $user->img('topic_unread', 'NEW_POSTS');
		}
	}

	$newest_img = '';
	if( $user->data['session_id'] )
	{
		if( $line[$i]['post_time'] > $user->data['user_lastvisit'] ) 
		{
			if( !empty($tracking_topics) || !empty($tracking_forums) || isset($HTTP_COOKIE_VARS[$config['cookie_name'] .'_f_all']) )
			{
				$unread_topics = true;
				if( !empty($tracking_topics[$topic_id]) )
				{
					if( $tracking_topics[$topic_id] >= $line[$i]['post_time'] )
					{
						$unread_topics = false;
					}
				}
				if( !empty($tracking_forums[$forum_id]) )
				{
					if( $tracking_forums[$forum_id] >= $line[$i]['post_time'] )
					{
						$unread_topics = false;
					}
				}
				if( isset($HTTP_COOKIE_VARS[$config['cookie_name'] .'_f_all']) )
				{
					if( $HTTP_COOKIE_VARS[$config['cookie_name'] .'_f_all'] >= $line[$i]['post_time'] )
					{
						$unread_topics = false;
					}
				}

				if( $unread_topics )
				{
					$folder_image = $folder_new;
					$folder_alt = $user->lang['NEW_MESSAGES'];
				    $newest_img = '<a href="'. append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $forum_id . '&amp;t='. $topic_id .'&amp;view=newest') .'">' . $user->img('icon_newest_reply', 'NEW_MESSAGES') . '</a> ';
				}
				else
				{
					$folder_image = $folder;
					$folder_alt = ( $line[$i]['topic_status'] == ITEM_LOCKED ) ? $user->lang['POST_FORUM_LOCKED'] : $user->lang['NO_NEW_POSTS'];
					$newest_img = '';
				}
			}
			else
			{
				$folder_image = $folder_new;
				$folder_alt = ( $line[$i]['topic_status'] == ITEM_LOCKED ) ? $user->lang['POST_FORUM_LOCKED'] : $user->lang['NEW_MESSAGES'];
				$newest_img = '<a href="'. append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $forum_id . '&amp;t='. $topic_id .'&amp;view=newest') .'">' . $user->img('icon_newest_reply', 'NEW_MESSAGES') . '</a> ';
			}
		}
		else 
		{
			$folder_image = $folder;
			$folder_alt = ( $line[$i]['topic_status'] == ITEM_LOCKED ) ? $user->lang['POST_FORUM_LOCKED'] : $user->lang['NO_NEW_POSTS'];
			$newest_img = '';
		}
	}
	else
	{
		$folder_image = $folder;
		$folder_alt = ( $line[$i]['topic_status'] == ITEM_LOCKED ) ? $user->lang['POST_FORUM_LOCKED'] : $user->lang['NO_NEW_POSTS'];
		$newest_img = '';
	}
			
	if ($forum_id && $auth->acl_get('f_list', $forum_id))
	{
		$first_time = $user->format_date($line[$i]['topic_time']);
		$first_author = get_username_string('full', $line[$i]['topic_poster'], $line[$i]['topic_first_poster_name'], $line[$i]['topic_first_poster_colour']);
		$last_time = $user->format_date($line[$i]['topic_last_post_time']);
		$last_author = get_username_string('full', $line[$i]['topic_last_poster_id'], $line[$i]['topic_last_poster_name'], $line[$i]['topic_last_poster_colour']);
		$last_url = '<a href="'. append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $forum_id . '&amp;t=' . $topic_id) . '#p' . $line[$i]['topic_last_post_id'] . '">' . $user->img('icon_topic_latest', 'VIEW_LATEST_POST') . '</a>';
		$forum_name = $line[$i]['forum_name'];
		if ( strlen($forum_name) > (intval($topic_length)-3) ) $forum_name = substr($forum_name, 0, intval($topic_length)) . '...';

		$template->assign_block_vars('recent', array(
			'TOPIC_TITLE' 		=> $topic_title,
			'TOPIC_TYPE' 		=> $topic_type,
			'GOTO_PAGE' 		=> $goto_page,
			'L_VIEWS' 			=> $user->lang['VIEWS'],
			'VIEWS' 			=> $views,
			'L_REPLIES' 		=> $user->lang['REPLIES'],
			'REPLIES' 			=> $replies,
			'NEWEST_IMG' 		=> $newest_img,
			'TOPIC_FOLDER_IMG' 	=> $folder_image,
			'TOPIC_FOLDER_ALT'	=> $folder_alt,
			'FIRST_TIME' 		=> sprintf($user->lang['RECENT_FIRST'], $first_time),
			'FIRST_AUTHOR' 		=> sprintf($user->lang['RECENT_FIRST_POSTER'], $first_author),
			'LAST_TIME' 		=> $last_time,
			'LAST_AUTHOR' 		=> $last_author,
			'LAST_URL' 			=> $last_url,
			'FORUM_NAME' 		=> $forum_name,
			'U_VIEW_FORUM'		=> $forum_url,
			'U_VIEW_TOPIC' 		=> $topic_url,
			));
	}
}

$sql = "SELECT count(t.topic_id) AS total_topics FROM ". TOPICS_TABLE ." t , ". POSTS_TABLE ." p
           WHERE $where_count AND p.post_id = t.topic_last_post_id";
$result = $db->sql_query($sql);
if( $total = $db->sql_fetchrow($result) )
{
	$total_topics = $total['total_topics'];
	$pagination = generate_pagination("portal_recent_topics.$phpEx?amount_days=$amount_days&mode=$mode", $total_topics, $topic_limit, $start) .'&nbsp;';
}
$db->sql_freeresult($result);

if( $total_topics == '0' )
{
	$template->assign_block_vars('switch_no_topics', array());
}

$template->assign_vars(array(
	'L_RECENT_TITLE' 			=> ( $total_topics == '1' ) ? sprintf($user->lang['RECENT_TITLE_ONE'], $total_topics, $l_mode) : sprintf($user->lang['RECENT_TITLE_MORE'], $total_topics, $l_mode),
	'L_TODAY' 					=> $user->lang['RECENT_TODAY'],
	'L_YESTERDAY' 				=> $user->lang['RECENT_YESTERDAY'],
	'L_LAST24' 					=> $user->lang['RECENT_LAST24'],
	'L_LASTWEEK' 				=> $user->lang['RECENT_LASTWEEK'],
	'L_LAST' 					=> $user->lang['RECENT_LAST'],
	'L_DAYS' 					=> $user->lang['RECENT_DAYS'],
	'L_SELECT_MODE' 			=> $user->lang['RECENT_SELECT_MODE'],
	'L_SHOWING_POSTS' 			=> $user->lang['RECENT_SHOWING_POSTS'],
	'L_NO_TOPICS' 				=> $user->lang['RECENT_NO_TOPICS'],
	'AMOUNT_DAYS' 				=> $amount_days,
	
	'POST_IMG'					=> ($forum_data['forum_status'] == ITEM_LOCKED) ? $user->img('button_topic_locked', $post_alt) : $user->img('button_topic_new', $post_alt),
	'NEWEST_POST_IMG'			=> $user->img('icon_topic_newest', 'VIEW_NEWEST_POST'),
	'LAST_POST_IMG'				=> $user->img('icon_topic_latest', 'VIEW_LATEST_POST'),
	'FOLDER_IMG'				=> $user->img('topic_read', 'NO_NEW_POSTS'),
	'FOLDER_NEW_IMG'			=> $user->img('topic_unread', 'NEW_POSTS'),
	'FOLDER_HOT_IMG'			=> $user->img('topic_read_hot', 'NO_NEW_POSTS_HOT'),
	'FOLDER_HOT_NEW_IMG'		=> $user->img('topic_unread_hot', 'NEW_POSTS_HOT'),
	'FOLDER_LOCKED_IMG'			=> $user->img('topic_read_locked', 'NO_NEW_POSTS_LOCKED'),
	'FOLDER_LOCKED_NEW_IMG'		=> $user->img('topic_unread_locked', 'NEW_POSTS_LOCKED'),
	'FOLDER_STICKY_IMG'			=> $user->img('sticky_read', 'POST_STICKY'),
	'FOLDER_STICKY_NEW_IMG'		=> $user->img('sticky_unread', 'POST_STICKY'),
	'FOLDER_ANNOUNCE_IMG'		=> $user->img('announce_read', 'POST_ANNOUNCEMENT'),
	'FOLDER_ANNOUNCE_NEW_IMG'	=> $user->img('announce_unread', 'POST_ANNOUNCEMENT'),
	'FOLDER_MOVED_IMG'			=> $user->img('topic_moved', 'TOPIC_MOVED'),
	'REPORTED_IMG'				=> $user->img('icon_topic_reported', 'TOPIC_REPORTED'),
	'UNAPPROVED_IMG'			=> $user->img('icon_topic_unapproved', 'TOPIC_UNAPPROVED'),

	'GOTO_PAGE_IMG'				=> $user->img('icon_post_target', 'GOTO_PAGE'),
	'L_NO_TOPICS' 				=> ($forum_data['forum_status'] == ITEM_LOCKED) ? $user->lang['POST_FORUM_LOCKED'] : $user->lang['NO_TOPICS'],

	'S_DISPLAY_POST_INFO'		=> ($topic_data['forum_type'] == FORUM_POST && ($auth->acl_get('f_post', $forum_id) || $user->data['user_id'] == ANONYMOUS)) ? true : false,
	'S_DISPLAY_REPLY_INFO'		=> ($topic_data['forum_type'] == FORUM_POST && ($auth->acl_get('f_reply', $forum_id) || $user->data['user_id'] == ANONYMOUS)) ? true : false,
	
	'L_GLOBAL_ANNOUNCEMENT'		=> $user->lang['POST_ANNOUNCEMENT'],
	'L_NEW_POSTS'				=> $user->lang['NEW_POSTS'],
	'L_NO_NEW_POSTS_LOCKED' 	=> $user->lang['NO_NEW_POSTS_LOCKED'], 
	'L_NEW_POSTS_LOCKED' 		=> $user->lang['NEW_POSTS_LOCKED'], 
	'L_NO_NEW_POSTS_HOT' 		=> $user->lang['NO_NEW_POSTS_HOT'],
	'L_NEW_POSTS_HOT' 			=> $user->lang['NEW_POSTS_HOT'],
	'L_ANNOUNCEMENT' 			=> $user->lang['POST_ANNOUNCEMENT'], 
	'L_STICKY' 					=> $user->lang['POST_STICKY'], 	
	'FORM_ACTION' 				=> append_sid("portal_recent_topics.$phpEx"),
	));

$template->assign_block_vars('recentpgn', array(
	'PAGINATION' 				=> ( $total_topics != '0' ) ? $pagination : '',
	'PAGE_NUMBER'           	=> on_page($total_topics, $topic_limit, $start) ,
	'TOTAL_RECENT_TOPICS'		=> ( $total_topics == 0) ? $user->lang['TOTAL_RECENT_TOPICS'] : sprintf($user->lang['TOTAL_RECENT_TOPICS'], $total_topics)
	));

$template->set_filenames(array(
	'body' => 'portal/portal_recent_topics_body.html',
	));

$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'				=> $user->lang['RECENT_TOPICS'],
	'U_PORTAL_RECENT_TOPICS'	=> append_sid("{$phpbb_root_path}portal/portal_recent_topics.$phpEx"),
	));

make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));

page_footer();

?>