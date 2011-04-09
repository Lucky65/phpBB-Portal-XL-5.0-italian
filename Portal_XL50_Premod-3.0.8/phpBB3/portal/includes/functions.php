<?php
/*
*
* @name functions.php
* @package phpBB3 Portal XL 5.0
* @version $Id: functions.php,v 1.4 2010/01/22 damysterious Exp $
*
* @copyright (c) 2007, 2010 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Only include once
*/
if (function_exists('portal_init'))
{
	return;
}

/**
* Available functions
*
* phpbb_fetch_news()
* character_limit()
* smilies_pass()
* smiley_sort()
* phpbb_preg_quote()
* smilie_text()
* obtain_word_list()
*
*/

/**
* 
*/
include($phpbb_root_path . 'includes/message_parser.'.$phpEx);

/**
* Fetch news processing
*/
function phpbb_fetch_news($forum_from, $number_of_posts, $text_length, $time, $type, $start = 0)
{
	/**
	* initalise some global variables
	*/
	global $db, $config, $portal_config, $phpbb_root_path, $auth, $user, $bbcode_bitfield, $mode, $forum_id, $forum_status;
	
	$posts = array();
	$post_time = ($time == 0) ? '' : 'AND t.topic_time > ' . (time() - $time * 86400);

	$forum_from = ( strpos($forum_from, ',') !== FALSE ) ? explode(',', $forum_from) : (($forum_from != '') ? array($forum_from) : array());

	$str_where = '';
	$topic_icons = array(0);
	$have_icons = 0;
	$global_f = 0;

	$allow_access = array_unique(array_keys($auth->acl_getf('f_read', true)));

	if( sizeof($allow_access) ){

		if( sizeof($forum_from) )
		{
			foreach( $allow_access as $acc_id )
			{
				if( in_array($acc_id, $forum_from ) )
				{
					$str_where .= "t.forum_id = $acc_id OR ";
					if( !isset($gobal_f) )
					{				
						$global_f = $acc_id;
					}
				}
			}
		}
		else
		{
			foreach( $allow_access as $acc_id )
			{
				
				$str_where .= "t.forum_id = $acc_id OR ";
				if( !isset($gobal_f) )
				{				
					$global_f = $acc_id;
				}
			}
		}

		if( utf8_strlen($str_where) > 0 )
		{

			switch( $type )
			{
				case "announcements":

					$topic_type = '(( t.topic_type = ' . POST_ANNOUNCE . ') OR ( t.topic_type = ' . POST_GLOBAL . '))';
					$str_where = ( utf8_strlen($str_where) > 0 ) ? 'AND (t.forum_id = 0 OR ' . substr($str_where, 0, -4) . ')' : '';
					$user_link = 't.topic_poster = u.user_id';
					$post_link = 't.topic_first_post_id = p.post_id';
					$topic_order = 't.topic_time DESC';

				break;
				case "news":

					$topic_type = '(( t.topic_type = ' . POST_NORMAL . ') OR ( t.topic_type = ' . POST_STICKY . '))';
					$str_where = ( strlen($str_where) > 0 ) ? 'AND (' . trim(substr($str_where, 0, -4)) . ')' : '';
					
					if ( $portal_config['portal_news_show_last_post'] == true)
					{
						$user_link = 't.topic_last_poster_id = u.user_id';
						$post_link = 't.topic_last_post_id = p.post_id';
						$topic_order = 't.topic_last_post_id DESC';
					}
					else
					{
						$user_link = 't.topic_poster = u.user_id';
						$post_link = 't.topic_first_post_id = p.post_id';
						$topic_order = 't.topic_time DESC';
					}

				break;
				case "news_all":

					$topic_type = '( t.topic_type <> ' . POST_ANNOUNCE . ' ) AND ( t.topic_type <> ' . POST_GLOBAL . ')';
					$str_where = ( strlen($str_where) > 0 ) ? 'AND (' . trim(substr($str_where, 0, -4)) . ')' : '';
					
					if ( $portal_config['portal_news_show_last_post'] == true)
					{
						$user_link = 't.topic_last_poster_id = u.user_id';
						$post_link = 't.topic_last_post_id = p.post_id';
						$topic_order = 't.topic_last_post_id DESC';
					}
					else
					{
						$user_link = 't.topic_poster = u.user_id';
						$post_link = 't.topic_first_post_id = p.post_id';
						$topic_order = 't.topic_time DESC';
					}

				break;
			}

		$sql_array = array(
			'SELECT' => 'f.enable_icons,
				  f.forum_name,
				  p.bbcode_bitfield,
				  p.bbcode_uid,
				  p.enable_bbcode,
				  p.enable_magic_url,
				  p.enable_smilies,
				  p.post_approved,		
				  p.post_attachment,
				  p.post_id,
				  p.post_subject,			
				  p.post_text,			
				  p.post_time,			
				  p.post_username,
				  p.poster_id,
				  t.forum_id,
				  t.icon_id,
				  t.poll_start,			
				  t.poll_title,			
				  t.topic_approved,
				  t.topic_attachment,
				  t.topic_first_post_id,	
				  t.topic_id,
				  t.topic_last_post_id,			
				  t.topic_last_post_time,			
				  t.topic_last_poster_colour,
				  t.topic_last_poster_id,
				  t.topic_last_poster_name,
				  t.topic_moved_id,
				  t.topic_poster,
				  t.topic_replies,
				  t.topic_replies_real,
				  t.topic_status,
				  t.topic_time,
				  t.topic_title,
				  t.topic_type,			
				  t.topic_views,
				  u.user_colour,			
				  u.user_country_flag,
				  u.user_id,
				  u.user_rank,
				  u.user_type,
				  u.username',
			'FROM' => array(
				TOPICS_TABLE => 't',
				),
			'LEFT_JOIN' => array(
				array(
					'FROM' => array(USERS_TABLE => 'u'),
					'ON' => $user_link,
					),
				array(
					'FROM' => array(FORUMS_TABLE => 'f'),
					'ON' => 't.forum_id=f.forum_id',
					),
				array(
					'FROM' => array(POSTS_TABLE => 'p'),
					'ON' => $post_link,
					),
				),
			'WHERE' => $topic_type . '
					' . $post_time . '
					AND t.topic_status <> ' . ITEM_MOVED . '
					AND t.topic_approved = 1
					AND t.topic_moved_id = 0
					' . $str_where,
			'ORDER_BY' => $topic_order,	
			);
	
			$sql_array['LEFT_JOIN'][] = array('FROM' => array(TOPICS_POSTED_TABLE => 'tp'), 'ON' => 'tp.topic_id = t.topic_id AND tp.user_id = ' . $user->data['user_id']);
			$sql_array['SELECT'] .= ', tp.topic_posted';
					
			$sql = $db->sql_build_query('SELECT', $sql_array);

			if($number_of_posts != 0)
			{
				$result = $db->sql_query_limit($sql, $number_of_posts, $start);
			} else {
				$result = $db->sql_query($sql);
			}
	
			$i = 0;

			while ( $row = $db->sql_fetchrow($result) )
			{
				// Pull attachment data
				$display_notice = false;
				$attachments = array();
			
				if ($row['post_attachment'] && $config['allow_attachments'])
				{
					if ($auth->acl_get('u_download', $row['post_attachment']))
					{
						$sql2 = 'SELECT *
						   FROM ' . ATTACHMENTS_TABLE . '
						   WHERE post_msg_id = '. $row['post_id'] .'
						   AND in_message = 0
						   ORDER BY filetime DESC';
						$result2 = $db->sql_query($sql2);
			
						while ($row2 = $db->sql_fetchrow($result2))
						{
							$attachments[] = $row2;
						}
						$db->sql_freeresult($result2);
			
					}
					else
					{
						$display_notice = true;
					}
				}

				if ($row['user_id'] != ANONYMOUS && $row['user_colour'])
				{
            		$row['username'] = '<b style="color:#' . $row['user_colour'] . '" onmouseover="show_popup(' .$row['user_id']. ')" onmouseout="close_popup()">' . $row['username'] . '</b> ';
				}
				
				if ($user->data['is_registered'])
				{
					// Country Flags Version 3.0.6
					$flag_title = $flag_img = $flag_img_src = '';
					get_user_flag($row['user_country_flag'], $row['user_country'], $flag_title, $flag_img, $flag_img_src);
					// Country Flags Version 3.0.6
					
            		$row['username'] = '<b style="color:#' . $row['user_colour'] . '" onmouseover="show_popup(' .$row['user_id']. ')" onmouseout="close_popup()">' . $row['username'] . '</b> ' . $flag_img;
				}

				$posts[$i]['bbcode_uid'] = $row['bbcode_uid'];
				$len_check = $row['post_text'];
				if (($text_length != 0) && (strlen($len_check) > $text_length))
				{
            		$message = substr($len_check, 0, $text_length);
			        $message = str_replace(array("\n", "\r"), array('<br />', "\n"), $message);
            		$message .= ' ...';
            		$posts[$i]['striped'] = true;
				}
				else 
				{
					$message = censor_text(str_replace("\n", '<br/> ', $row['post_text']));
				}

				if ($auth->acl_get('f_html', $row['forum_id'])) 
				{
					$message = preg_replace('#<!\-\-(.*?)\-\->#is', '', $message); // Remove Comments from post content
				}

				if (!empty($attachments))
				{
				   parse_attachments($row['forum_id'], $message, $attachments, $update_count);
				}

				if ($portal_config['portal_acronyms_allow'] == true)
         		{
					include_once($phpbb_root_path . 'portal/includes/functions_acronym.php');
         			$message = acronym_pass($message);
         		}
	
				// Parse bbcode here
				$row['bbcode_options'] = (($row['enable_bbcode']) ? OPTION_FLAG_BBCODE : 0) + (($row['enable_smilies']) ? OPTION_FLAG_SMILIES : 0) + (($row['enable_magic_url']) ? OPTION_FLAG_LINKS : 0);
		 
				$message = generate_text_for_display($message, $row['bbcode_uid'], $row['bbcode_bitfield'], $row['bbcode_options']);
		
				$posts[$i] = array_merge($posts[$i], array(
					'attachment'			=> ($row['topic_attachment']) ? true : false,
					'attachments'			=> (!empty($attachments)) ? $attachments : array(),
					'bbcode_bitfield'		=> $row['bbcode_bitfield'],
					'bbcode_uid'			=> $row['bbcode_uid'],
					'enable_bbcode'			=> $row['enable_bbcode'],
					'enable_magic_url'		=> $row['enable_magic_url'],
					'enable_smilies'		=> $row['enable_smilies'],
					'forum_id'				=> $row['forum_id'],
					'forum_name'			=> $row['forum_name'],
					'icon_id'				=> $row['icon_id'],
					'poll'					=> ($row['poll_title']) ? true : false,
					'poll_start'			=> (int) $row['poll_start'],
					'poll_title' 			=> ($row['poll_title'] != '') ? true : false, 
					'post_approved'			=> $row['post_approved'],		
					'post_attachment' 		=> $row['post_attachment'],
					'post_id'				=> $row['post_id'],
					'post_subject'			=> $row['post_subject'],			
					'post_text'				=> $message,
					'post_time' 			=> $user->format_date($row['post_time']),			
					'topic_approved'		=> $row['topic_approved'],
					'topic_attachment'		=> $row['topic_attachment'],
					'topic_first_post_id'	=> $row['topic_first_post_id'],			
					'topic_id'				=> $row['topic_id'],
					'topic_last_post_id'	=> $row['topic_last_post_id'],
					'topic_last_post_time'	=> $row['topic_last_post_time'],
					'topic_posted'			=> (isset($row['topic_posted']) && $row['topic_posted']) ? true : false,
					'topic_poster'			=> $row['topic_poster'],
					'topic_replies'			=> $row['topic_replies'],
					'topic_replies_real'	=> $row['topic_replies_real'],
					'topic_status'			=> $row['topic_status'],
					'topic_time'			=> $user->format_date($row['post_time']),
					'topic_title'			=> $row['topic_title'],
					'topic_type'			=> $row['topic_type'],
					'topic_views'			=> $row['topic_views'],
					'user_colour'     		=> $row['user_colour'],					
					'user_id' 				=> $row['user_id'],
					'user_rank' 			=> $row['user_rank'],
					'user_type'        		=> $row['user_type'],
					'username' 				=> $row['username'],
					'username_full'			=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour'], $row['username']),
					'username_full_last'	=> get_username_string('full', $row['topic_last_poster_id'], $row['topic_last_poster_name'], $row['topic_last_poster_colour'], $row['topic_last_poster_name']),
					));
				
				$posts[$i]['global_id']		= $global_f;
				$i++;
			}
			$db->sql_freeresult($result);
		}
	}
	return $posts;
}

/**
* Censor title, return short title
*
* @param $title string title to censor
* @param $limit int short title character limit
*
*/
function character_limit(&$title, $limit = 0)
{
   $title = censor_text($title);
   if ($limit > 0)
   {
      return (utf8_strlen(utf8_decode($title)) > $limit + 3) ? truncate_string($title, $limit) . '...' : $title;
   }
   else
   {
	// return the result   
      return $title;
   }
}

/**
* smilies_pass processing
*/
function smilies_pass($message)
{
	static $orig, $repl;

	if (!isset($orig))
	{
		global $db, $images, $portal_config;

		$orig = $repl = array();

		if(!$orig)
		{
			$sql = 'SELECT * FROM ' . SMILIES_TABLE;
			if( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Couldn't obtain smilies data", "", __LINE__, __FILE__, $sql);
			}
			$smilies = $db->sql_fetchrowset($result);

			if (count($smilies))
			{
				usort($smilies, "smiley_sort");
			}

			for ($i = 0; $i < count($smilies); $i++)
			{
				$orig[] = "/(?<=.\W|\W.|^\W)" . phpbb_preg_quote($smilies[$i]['code'], "/") . "(?=.\W|\W.|\W$)/";
				$repl[] = '<img src="images/smilies/'. $images['smilies'] . '/' . $smilies[$i]['smiley_url'] . '" alt="' . $smilies[$i]['emotion'] . '" border="0" />';

			}
		}
	}

	if (count($orig))
	{
		$message = preg_replace($orig, $repl, ' ' . $message . ' ');
		$message = substr($message, 1, -1);
	}
	
	return $message;
}

/**
* smiley_sort processing
*/
function smiley_sort($a, $b)
{
	if ( utf8_strlen($a['code']) == utf8_strlen($b['code']) )
	{
		return 0;
	}

	return ( utf8_strlen($a['code']) > utf8_strlen($b['code']) ) ? -1 : 1;
}

/**
* phpbb_preg_quote processing
*/
function phpbb_preg_quote($str, $delimiter)
{
	$text = preg_quote($str);
	$text = str_replace($delimiter, '\\' . $delimiter, $text);
	
	return $text;
}

/**
* smilie_text processing
*/
function smilie_text($text, $force_option = false)
{
	global $config, $user, $phpbb_root_path;
 
	$userstylepath = $phpbb_root_path .  'images/smilies';
	$phpbb_root_path = '';
	
	return ($force_option || !$config['allow_smilies'] || !$user->optionget('viewsmilies')) ? preg_replace('#<!\-\- s(.*?) \-\-><img src="\{SMILIES_PATH\}\/.*? \/><!\-\- s\1 \-\->#', '\1', $text) : str_replace('<img src="{SMILIES_PATH}', '<img src="' . $userstylepath, $text); 	   
}

/**
* obtain_word_list processing
*/
function obtain_word_list(&$censors)
{
	global $db, $cache, $user;

	if (!$user->optionget('viewcensors') && $config['allow_nocensors'])
	{
		return;
	}
		$sql = 'SELECT word, replacement
			FROM  ' . WORDS_TABLE;
		$result = $db->sql_query($sql);

		$censors = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$censors['match'][] = '#\b(' . str_replace('\*', '\w*?', preg_quote($row['word'], '#')) . ')\b#i';
			$censors['replace'][] = $row['replacement'];
		}
		$db->sql_freeresult($result);

		$cache->put('word_censors', $censors);
//	}

	return true;
}


?>