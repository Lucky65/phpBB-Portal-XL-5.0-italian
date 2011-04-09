<?php
/*
*
* @name center_recent.php
* @package phpBB3 Portal XL 5.0
* @version $Id: center_recent.php,v 1.3 2009/10/13 damysterious Exp $
*
* @copyright (c) 2007, 2009  Portal XL Group
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
$allow_max_topics = $portal_config['portal_max_topics'];
$allow_recent_title_limit = $portal_config['portal_recent_title_limit'];

$open_bracket 	= '[';
$close_bracket 	= ']';

/*
* Setting a max limit when topics atuthorizations will be checked
* to avoid rather short lists if standard users do not have privileges enough.
* This way the value set for max topics will always show the given amount.
*/
$max_topics_announce = '100';
$topics_counter_announce = '1';

/*
* Recent announcements
* Set up sql vars
*/
$sql_array = array(
    'SELECT' => 'p.*, t.*, u.*',
	
    'FROM' => array(
		POSTS_TABLE	=> 'p',
        TOPICS_TABLE => 't',
        USERS_TABLE => 'u'
    ),
    'WHERE' => 't.topic_poster = u.user_id AND
			t.topic_first_post_id = p.post_id AND
			(t.topic_type = 2 OR t.topic_type = 3 ) AND
			t.topic_approved = 1',
    'ORDER_BY' => 't.topic_time DESC',
	);

/*
* query database
*/
$sql = $db->sql_build_query('SELECT', $sql_array);    
$result = $db->sql_query_limit($sql, $max_topics_announce);

while( ($row = $db->sql_fetchrow($result)) && ($row['topic_title'] != '') && ( $topics_counter_announce <= $allow_max_topics ) )
{
   // auto auth
   if ( ($auth->acl_get('f_read', $row['forum_id'])) || ($row['forum_id'] == '0') )
   {
		$topics_counter_announce = $topics_counter_announce +1;
		$user_id = (int) $row['user_id'];
		$username = $row['username'];
		$user_colour = $row['user_colour'];
		
		// www.phpBB-SEO.com SEO TOOLKIT BEGIN
		$phpbb_seo->set_url($row['forum_id'], $row['forum_id'], $phpbb_seo->seo_static['forum']);
		$phpbb_seo->prepare_iurl($row, 'topic', $row['topic_type'] == POST_GLOBAL ? $phpbb_seo->seo_static['global_announce'] : $phpbb_seo->seo_url['forum'][$row['forum_id']]);
		$phpbb_seo->set_user_url( $username, $user_id );
		// www.phpBB-SEO.com SEO TOOLKIT END
		
		// last comments
		$center_recent_announce_last_post_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id'] . '&amp;start=' . $row['topic_last_post_id']) . '#p' . $row['topic_last_post_id'];
		// topic id
		$center_recent_announce_topic_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id']) . '#p' . $row['post_id'];
		
		$username = '<b style="color:#' . $user_colour . '" onmouseover="show_popup(' .$user_id. ')" onmouseout="close_popup()">' . $username . '</b> ';
		$ShortPosterName = character_limit($row['topic_last_poster_name'], 8);
		$row['topic_last_poster_name'] = '<b style="color:#' . $row['topic_last_poster_colour'] . '" onmouseover="show_popup(' .$row['topic_last_poster_id']. ')" onmouseout="close_popup()">' . $ShortPosterName . '</b> ';
		$ShortUserName = character_limit($row['topic_first_poster_name'], 8);
		$row['topic_first_poster_name'] = '<b style="color:#' . $row['topic_first_poster_colour'] . '" onmouseover="show_popup(' .$user_id. ')" onmouseout="close_popup()">' . $ShortUserName . '</b>';
	    $replace_topic_title = str_replace(array('_','.rar','.zip','.jpg','.gif','.png','.RAR','.ZIP','.JPG','.GIF','.PNG','-'), ' ', $row['topic_title']);

		// Topic Hover Preview MOD start 
		if ($portal_config['portal_show_topic_hover_preview'] == true)
		{
			$first_post = $row['post_text'];
			$first_post = bbcode_strip($first_post);
			
			$pad = ((substr_count($first_post, '"') + substr_count($first_post, "\n")) * 5) + substr_count($first_post, '\'');
			$char_limit = 350 - intval($pad);
			if (strlen($first_post) > $char_limit)
			{
				 $first_post = substr($first_post, 0, $char_limit - 3) . "...";
			}
			$replace = str_replace('\'', '&acute;', $first_post);
			$first_post = censor_text($replace);
		}
		// Topic Hover Preview MOD end
		
 		// Country Flags Version 3.0.6
  		if ($user->data['user_id'] != ANONYMOUS)
		{
			$flag_title = $flag_img = $flag_img_src = '';
			get_user_flag($row['user_country_flag'], $row['user_country'], $flag_title, $flag_img, $flag_img_src);
		}
		// Country Flags Version 3.0.6
		
//		$row['username'] = '<b style="color:#' . $row['user_colour'] . '">' . $row['username'] . '</b> ' . $flag_img;
   
		$template->assign_block_vars('latest_announcments', array(
         	'USERNAME'         	=> $row['topic_first_poster_name'],
			'U_USERNAME'		=> (($row['user_type'] == USER_NORMAL || $row['user_type'] == USER_FOUNDER) && $user_id != ANONYMOUS) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $user_id) : '',
            'TIME'            	=> $user->format_date($row['topic_time']),
			'REPLIES'			=> $row['topic_replies'],
			'TOPIC_VIEWS'		=> $row['topic_views'],
         	'LAST_POST_TIME'   	=> $user->format_date($row['topic_last_post_time']),
            'TOPIC_TIME'   		=> $user->format_date($row['topic_time']),
         	'LAST_POSTER_NAME'  => $row['topic_last_poster_name'],         
		 	'U_LAST_POSTER_NAME'=>(($row['user_type'] == USER_NORMAL || $row['user_type'] == USER_FOUNDER) && $row['topic_last_poster_id'] != ANONYMOUS) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['topic_last_poster_id']) : '',
         	'U_LAST_COMMENTS'   => $center_recent_announce_last_post_url,
			
			// Topic Hover Preview MOD start 
			'FIRST_POST_TIME'	=> $user->format_date($row['topic_time']),
			'FIRST_POST_RESULT' => $first_post,
			// Topic Hover Preview MOD end
			
			'OPEN'				=> $open_bracket,
			'CLOSE'				=> $close_bracket,
			'MINI_POST_IMG'		=> $user->img('icon_post_target', 'POST'),
			'TITLE'	 			=> character_limit($replace_topic_title, $allow_recent_title_limit),
			'FULL_TITLE'	    => censor_text($row['topic_title']),
         	'U_VIEW_TOPIC'      => $center_recent_announce_topic_url,
         	'TITLE_LIMIT_WIDTH' => $allow_recent_title_limit,
			));
	}
}
$db->sql_freeresult($result);

/*
* Setting a max limit when topics atuthorizations will be checked
* to avoid rather short lists if standard users do not have privileges enough.
* This way the value set for max topics will always show the given amount.
*/
$max_topics_hot = '100';
$topics_counter_hot = '1';

/*
* Recent hot topics
* Set up sql vars
*/
$sql_array = array(
    'SELECT' => 'p.*, t.*, u.*',
	
    'FROM' => array(
		POSTS_TABLE	=> 'p',
        TOPICS_TABLE => 't',
        USERS_TABLE => 'u'
    ),
    'WHERE' => 't.topic_poster = u.user_id AND
         t.topic_first_post_id = p.post_id AND
         t.topic_status <> 2 AND
         t.topic_approved = 1',
    'ORDER_BY' => 't.topic_last_post_time DESC',
	);

/*
* query database
*/
$sql = $db->sql_build_query('SELECT', $sql_array);    
$result = $db->sql_query_limit($sql, $max_topics_hot);

while( ($row = $db->sql_fetchrow($result)) && ($row['topic_title'] != '') && ( $topics_counter_hot <= $allow_max_topics ) )
{
	// auto auth
	if ( ($auth->acl_get('f_read', $row['forum_id'])) || ($row['forum_id'] == '0') )
	{
		$topics_counter_hot = $topics_counter_hot +1;
		$user_id = (int) $row['user_id'];
		$username = $row['username'];
		$user_colour = $row['user_colour'];
		
		// www.phpBB-SEO.com SEO TOOLKIT BEGIN
		$phpbb_seo->set_url($row['forum_id'], $row['forum_id'], $phpbb_seo->seo_static['forum']);
		$phpbb_seo->prepare_iurl($row, 'topic', $row['topic_type'] == POST_GLOBAL ? $phpbb_seo->seo_static['global_announce'] : $phpbb_seo->seo_url['forum'][$row['forum_id']]);
		$phpbb_seo->set_user_url( $username, $user_id );
		// www.phpBB-SEO.com SEO TOOLKIT END
		
		// last comments
		$center_recent_hot_last_post_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id'] . '&amp;start=' . $row['topic_last_post_id']) . '#p' . $row['topic_last_post_id'];
		// topic id
		$center_recent_hot_topic_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id']) . '#p' . $row['post_id'];
		
        $username = '<b style="color:#' . $user_colour . '" onmouseover="show_popup(' .$user_id. ')" onmouseout="close_popup()">' . $username . '</b> ';
		$ShortPosterName = character_limit($row['topic_last_poster_name'], 8);
		$row['topic_last_poster_name'] = '<b style="color:#' . $row['topic_last_poster_colour'] . '" onmouseover="show_popup(' .$row['topic_last_poster_id']. ')" onmouseout="close_popup()">' . $ShortPosterName . '</b> ';
		$ShortUserName = character_limit($row['topic_first_poster_name'], 8);
		$row['topic_first_poster_name'] = '<b style="color:#' . $row['topic_first_poster_colour'] . '" onmouseover="show_popup(' .$user_id. ')" onmouseout="close_popup()">' . $ShortUserName . '</b>';
	    $replace_topic_title = str_replace(array('_','.rar','.zip','.jpg','.gif','.png','.RAR','.ZIP','.JPG','.GIF','.PNG','-'), ' ', $row['topic_title']);

		// Topic Hover Preview MOD start 
		if ($portal_config['portal_show_topic_hover_preview'] == true)
		{
			$first_post = $row['post_text'];
			$first_post = bbcode_strip($first_post);
			
			$pad = ((substr_count($first_post, '"') + substr_count($first_post, "\n")) * 5) + substr_count($first_post, '\'');
			$char_limit = 350 - intval($pad);
			if (strlen($first_post) > $char_limit)
			{
				 $first_post = substr($first_post, 0, $char_limit - 3) . "...";
			}
			$replace = str_replace('\'', '&acute;', $first_post);
			$first_post = censor_text($replace);
		}
		// Topic Hover Preview MOD end
		
 		// Country Flags Version 3.0.6
  		if ($user->data['user_id'] != ANONYMOUS)
		{
			$flag_title = $flag_img = $flag_img_src = '';
			get_user_flag($row['user_country_flag'], $row['user_country'], $flag_title, $flag_img, $flag_img_src);
		}
		// Country Flags Version 3.0.6
		
//		$row['username'] = '<b style="color:#' . $row['user_colour'] . '">' . $row['username'] . '</b> ' . $flag_img;
   
		$template->assign_block_vars('latest_hot_topics', array(
         	'USERNAME'         	=> $row['topic_first_poster_name'],
			'U_USERNAME'		=> (($row['user_type'] == USER_NORMAL || $row['user_type'] == USER_FOUNDER) && $user_id != ANONYMOUS) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $user_id) : '',
            'TIME'            	=> $user->format_date($row['topic_time']),
			'REPLIES'			=> $row['topic_replies'],
			'TOPIC_VIEWS'		=> $row['topic_views'],
         	'LAST_POST_TIME'   	=> $user->format_date($row['topic_last_post_time']),
            'TOPIC_TIME'   		=> $user->format_date($row['topic_time']),
         	'LAST_POSTER_NAME'  => $row['topic_last_poster_name'],         
		 	'U_LAST_POSTER_NAME'=>(($row['user_type'] == USER_NORMAL || $row['user_type'] == USER_FOUNDER) && $row['topic_last_poster_id'] != ANONYMOUS) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['topic_last_poster_id']) : '',
         	'U_LAST_COMMENTS'   => $center_recent_hot_last_post_url,
			
			// Topic Hover Preview MOD start 
			'FIRST_POST_TIME'	=> $user->format_date($row['topic_time']),
			'FIRST_POST_RESULT' => $first_post,
			// Topic Hover Preview MOD end
			
			'OPEN'				=> $open_bracket,
			'CLOSE'				=> $close_bracket,
			'MINI_POST_IMG'		=> $user->img('icon_post_target', 'POST'),
			'TITLE'	 			=> character_limit($replace_topic_title, $allow_recent_title_limit),
			'FULL_TITLE'	    => censor_text($row['topic_title']),
         	'U_VIEW_TOPIC'      => $center_recent_hot_topic_url,
         	'TITLE_LIMIT_WIDTH' => $allow_recent_title_limit,
			));
	}
}
$db->sql_freeresult($result);

/*
* Setting a max limit when topics atuthorizations will be checked
* to avoid rather short lists if standard users do not have privileges enough.
* This way the value set for max topics will always show the given amount.
*/
$max_topics_normal = '100';
$topics_counter_normal = '1';

/*
* Recent topic (only show normal topic)
* Set up sql vars
*/
$sql_array = array(
    'SELECT' => 'p.*, t.*, u.*',
	
    'FROM' => array(
		POSTS_TABLE	=> 'p',
        TOPICS_TABLE => 't',
        USERS_TABLE => 'u'
    ),
    'WHERE' => 't.topic_poster = u.user_id AND
         t.topic_first_post_id = p.post_id AND
         t.topic_status <> 2 AND
         t.topic_approved = 1',
    'ORDER_BY' => 't.topic_time DESC',
	);

/*
* query database
*/
$sql = $db->sql_build_query('SELECT', $sql_array);    
$result = $db->sql_query_limit($sql, $max_topics_normal);

while( ($row = $db->sql_fetchrow($result)) && ($row['topic_title'] != '') && ( $topics_counter_normal <= $allow_max_topics ) )
{
   // auto auth
   if ( ($auth->acl_get('f_read', $row['forum_id'])) || ($row['forum_id'] == '0') )
   {
		$topics_counter_normal = $topics_counter_normal +1;
		$user_id = (int) $row['user_id'];
		$username = $row['username'];
		$user_colour = $row['user_colour'];
		
		// www.phpBB-SEO.com SEO TOOLKIT BEGIN
		$phpbb_seo->set_url($row['forum_id'], $row['forum_id'], $phpbb_seo->seo_static['forum']);
		$phpbb_seo->prepare_iurl($row, 'topic', $row['topic_type'] == POST_GLOBAL ? $phpbb_seo->seo_static['global_announce'] : $phpbb_seo->seo_url['forum'][$row['forum_id']]);
		$phpbb_seo->set_user_url( $username, $user_id );
		// www.phpBB-SEO.com SEO TOOLKIT END
		
		// last comments
		$center_recent_latest_last_post_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id'] . '&amp;start=' . $row['topic_last_post_id']) . '#p' . $row['topic_last_post_id'];
		// topic id
		$center_recent_latest_topic_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id']) . '#p' . $row['post_id'];
	
		$ShortPosterName = character_limit($row['topic_last_poster_name'], 8);
		$row['topic_last_poster_name'] = '<b style="color:#' . $row['topic_last_poster_colour'] . '" onmouseover="show_popup(' .$row['topic_last_poster_id']. ')" onmouseout="close_popup()">' . $ShortPosterName . '</b> ';
		$ShortUserName = character_limit($row['topic_first_poster_name'], 8);
		$row['topic_first_poster_name'] = '<b style="color:#' . $row['topic_first_poster_colour'] . '" onmouseover="show_popup(' .$user_id. ')" onmouseout="close_popup()">' . $ShortUserName . '</b>';
	    $replace_topic_title = str_replace(array('_','.rar','.zip','.jpg','.gif','.png','.RAR','.ZIP','.JPG','.GIF','.PNG','-'), ' ', $row['topic_title']);

		// Topic Hover Preview MOD start 
		if ($portal_config['portal_show_topic_hover_preview'] == true)
		{
			$first_post = $row['post_text'];
			$first_post = bbcode_strip($first_post);
			
			$pad = ((substr_count($first_post, '"') + substr_count($first_post, "\n")) * 5) + substr_count($first_post, '\'');
			$char_limit = 350 - intval($pad);
			if (strlen($first_post) > $char_limit)
			{
				 $first_post = substr($first_post, 0, $char_limit - 3) . "...";
			}
			$replace = str_replace('\'', '&acute;', $first_post);
			$first_post = censor_text($replace);
		}
		// Topic Hover Preview MOD end

 		// Country Flags Version 3.0.6
  		if ($user->data['user_id'] != ANONYMOUS)
		{
			$flag_title = $flag_img = $flag_img_src = '';
			get_user_flag($row['user_country_flag'], $row['user_country'], $flag_title, $flag_img, $flag_img_src);
		}
		// Country Flags Version 3.0.6
		
//		$row['username'] = '<b style="color:#' . $row['user_colour'] . '">' . $row['username'] . '</b> ' . $flag_img;
   
      $template->assign_block_vars('latest_topics', array(
		 'USERNAME'         	=> $row['topic_first_poster_name'],
		 'U_USERNAME'		    => (($row['user_type'] == USER_NORMAL || $row['user_type'] == USER_FOUNDER) && $user_id != ANONYMOUS) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $user_id) : '',
		 'TIME'            		=> $user->format_date($row['topic_time']),
		 'REPLIES'         		=> $row['topic_replies'],
		 'TOPIC_VIEWS'      	=> $row['topic_views'],
		 'LAST_POST_TIME'   	=> $user->format_date($row['topic_last_post_time']),
		 'TOPIC_TIME'   		=> $user->format_date($row['topic_time']),
		 'LAST_POSTER_NAME'   	=> $row['topic_last_poster_name'],         
		 'U_LAST_POSTER_NAME'	=>(($row['user_type'] == USER_NORMAL || $row['user_type'] == USER_FOUNDER) && $row['topic_last_poster_id'] != ANONYMOUS) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['topic_last_poster_id']) : '',
		 'U_LAST_COMMENTS'   	=> $center_recent_latest_last_post_url,
			
		 // Topic Hover Preview MOD start 
		 'FIRST_POST_TIME'		=> $user->format_date($row['topic_time']),
		 'FIRST_POST_RESULT' 	=> $first_post,
		 // Topic Hover Preview MOD end
			
		 'OPEN'            		=> $open_bracket,
		 'CLOSE'            	=> $close_bracket,
		 'MINI_POST_IMG'      	=> $user->img('icon_post_target', 'POST'),
		 'TITLE'             	=> character_limit($replace_topic_title, $allow_recent_title_limit),
		 'FULL_TITLE'      		=> censor_text($row['topic_title']),
		 'U_VIEW_TOPIC'      	=> $center_recent_latest_topic_url,
		 'TITLE_LIMIT_WIDTH'    => $allow_recent_title_limit,
		 ));
   }   
}
$db->sql_freeresult($result);

// Assign specific vars
$template->assign_vars(array(
   'L_TOPIC_VIEWS'      => $user->lang['TOPIC_VIEWS'],
   'L_POSTED_BY'        => $user->lang['POSTED_BY'],
   'L_COMMENTS'         => $user->lang['COMMENTS'],
   'L_VIEW_COMMENTS'    => $user->lang['VIEW_COMMENTS'],
   'L_LAST_REPLIED'     => $user->lang['LAST_REPLIED'],
   'L_BY'               => $user->lang['BY'],
   'L_ON'               => $user->lang['ON'],
	));
   
// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/center_recent.html',
	));

?>