<?php
/*
*
* @name center_recent_topics.php
* @package phpBB3 Portal XL
* @version $Id: center_recent_topics.php,v 1.2 2009/05/30 07:40:33 damysterious Exp $
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
$max_topics_recent = '100';
$topics_counter_recent = '1';

/*
* Sorting the topic on first or last post time
* Set through true = by topic time, false = last post time
*/
$allow_recent_topics_sort_order = true ;

if ( $allow_recent_topics_sort_order == true)
   { $recent_topics_sort_order = 't.topic_time DESC'; }
else { $recent_topics_sort_order = 't.topic_last_post_time DESC'; }

/*
* Recent topic (only show normal topic)
* Set up sql vars
*/
$sql_array = array(
    'SELECT' => 'p.*, t.*, u.*, f.*',
	
    'FROM' => array(
		POSTS_TABLE	=> 'p',
        TOPICS_TABLE => 't',
        USERS_TABLE => 'u',
        FORUMS_TABLE => 'f'
    ),
    'WHERE' => 't.topic_poster = u.user_id AND
         t.topic_first_post_id = p.post_id AND
         t.icon_id = p.icon_id AND
         f.forum_id = t.forum_id AND
         t.topic_status <> 2 AND
         t.topic_approved = 1',
    'ORDER_BY' => $recent_topics_sort_order
	);

/*
* query database
*/
$sql = $db->sql_build_query('SELECT', $sql_array);    
$result = $db->sql_query_limit($sql, $max_topics_recent);

// Grab icons
$icons = $cache->obtain_icons();
	
while( ($row = $db->sql_fetchrow($result)) && ($row['topic_title'] != '') && ( $topics_counter_recent <= $allow_max_topics ) )
{
   // auto auth
   if ( ($auth->acl_get('f_read', $row['forum_id'])) || ($row['forum_id'] == '0') )
   {
		$topics_counter_recent = $topics_counter_recent +1;
		$user_id = (int) $row['user_id'];
		$username = $row['username'];
		$user_colour = $row['user_colour'];
		
		// www.phpBB-SEO.com SEO TOOLKIT BEGIN
		$phpbb_seo->set_url($row['forum_name'], $row['forum_id'], $phpbb_seo->seo_static['forum']);
		$phpbb_seo->prepare_iurl($row, 'topic', $row['topic_type'] == POST_GLOBAL ? $phpbb_seo->seo_static['global_announce'] : $phpbb_seo->seo_url['forum'][$row['forum_id']]);
		$phpbb_seo->set_user_url( $username, $user_id );
		// www.phpBB-SEO.com SEO TOOLKIT END
		
		// last comments
		$center_recent_topics_last_post_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id'] . '&amp;start=' . $row['topic_last_post_id']) . '#p' . $row['topic_last_post_id'];
		// topic id
		$center_recent_topics_topic_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $row['forum_id'] . '&amp;t=' . $row['topic_id']) . '#p' . $row['post_id'];
		
        $row['username'] = '<b style="color:#' . $row['user_colour'] . '" onmouseover="show_popup(' .$row['user_id']. ')" onmouseout="close_popup()">' . $row['username'] . '</b> ';
		$ShortPosterName = character_limit($row['topic_last_poster_name'], 15);
		$row['topic_last_poster_name'] = '<b style="color:#' . $row['topic_last_poster_colour'] . '" onmouseover="show_popup(' .$row['topic_last_poster_id']. ')" onmouseout="close_popup()">' . $ShortPosterName . '</b> ';
		$ShortUserName = character_limit($row['topic_first_poster_name'], 15);
		$row['topic_first_poster_name'] = '<b style="color:#' . $row['topic_first_poster_colour'] . '">' . $ShortUserName . '</b>';
	    $replace_topic_title = str_replace(array('_','.rar','.zip','.jpg','.gif','.png','.RAR','.ZIP','.JPG','.GIF','.PNG','.','-'), ' ', $row['topic_title']);
	    $replace_last_topic_title = str_replace(array('_','.rar','.zip','.jpg','.gif','.png','.RAR','.ZIP','.JPG','.GIF','.PNG','.','-'), ' ', $row['topic_last_post_subject']);

		// Get folder img, topic status/type related information
		$forum_id = $row['forum_id'];
		$replies = ($auth->acl_get('m_approve', $forum_id)) ? $row['topic_replies_real'] : $row['topic_replies'];
		$folder_img = $folder_alt = $topic_type = '';
		topic_status($row, $replies, (isset($topic_tracking_info[$forum_id][$row['topic_id']]) && $row['topic_last_post_time'] > $topic_tracking_info[$forum_id][$row['topic_id']]) ? true : false, $folder_img, $folder_alt, $topic_type);

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
			$first_post = censor_text($first_post);
		}
		// Topic Hover Preview MOD end

		$template->assign_block_vars('recent_topics', array(
			'USERNAME'         			=> $row['topic_first_poster_name'],
			'U_USERNAME'      			=> (($row['user_type'] == USER_NORMAL || $row['user_type'] == USER_FOUNDER) && $row['user_id'] != ANONYMOUS) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['user_id']) : '',
			
			'FIRST_POST_TIME'			=> $user->format_date($row['topic_time']),
			
			// Topic Hover Preview MOD start 
			'FIRST_POST_RESULT' 		=> $first_post,
			// Topic Hover Preview MOD end
			
			'REPLIES'         			=> $row['topic_replies'],
			'TOPIC_VIEWS'      			=> $row['topic_views'],
			
			'LAST_POST_TIME'   			=> $user->format_date($row['topic_last_post_time']),
			'LAST_POSTER_NAME'   		=> $row['topic_last_poster_name'],         
			'U_LAST_POSTER_NAME'		=>(($row['user_type'] == USER_NORMAL || $row['user_type'] == USER_FOUNDER) && $row['topic_last_poster_id'] != ANONYMOUS) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['topic_last_poster_id']) : '',
			'U_LAST_COMMENTS'   		=> $center_recent_topics_last_post_url,
			
			'OPEN'            			=> $open_bracket,
			'CLOSE'            			=> $close_bracket,
			'S_NOT_LAST'				=> ($row['topic_title'] < sizeof($row) - 1) ? true : false,
			'S_NUM_POSTS'				=> ($row['topic_title'] < sizeof($row) - 1) ? true : false,
			
			'TITLE'             		=> character_limit($replace_topic_title, $allow_recent_title_limit),
			'LAST_TITLE'             	=> character_limit($replace_last_topic_title, $allow_recent_title_limit),
			'FULL_TITLE'      			=> censor_text($row['topic_title']),
			'U_VIEW_TOPIC'      		=> $center_recent_topics_topic_url,
			'TITLE_LIMIT_WIDTH'    		=> $allow_recent_title_limit,
			
			'MINI_POST_IMG'      		=> $user->img('icon_post_target', 'POST'),
			'GOTO_PAGE_IMG'				=> $user->img('icon_post_target', 'GOTO_PAGE'),
			'NEWEST_POST_IMG'	    	=> $user->img('icon_topic_newest', 'VIEW_NEWEST_POST'),
			'LAST_POST_IMG'				=> $user->img('icon_topic_latest', 'VIEW_LATEST_POST'),
			
			'TOPIC_FOLDER_IMG'			=> $user->img($folder_img, $folder_alt),
			'TOPIC_FOLDER_IMG_SRC'		=> $user->img($folder_img, $folder_alt, false, '', 'src'),
			'TOPIC_FOLDER_IMG_ALT'		=> $user->lang[$folder_alt],
			'TOPIC_FOLDER_IMG_WIDTH'	=> $user->img($folder_img, '', false, '', 'width'),
			'TOPIC_FOLDER_IMG_HEIGHT'	=> $user->img($folder_img, '', false, '', 'height'),
			
			'TOPIC_ICON_IMG'			=> (!empty($icons[$row['icon_id']])) ? $icons[$row['icon_id']]['img'] : '',
			'TOPIC_ICON_IMG_WIDTH'		=> (!empty($icons[$row['icon_id']])) ? $icons[$row['icon_id']]['width'] : '',
			'TOPIC_ICON_IMG_HEIGHT'		=> (!empty($icons[$row['icon_id']])) ? $icons[$row['icon_id']]['height'] : '',
			
			'FORUM_ID' 					=> $row['forum_id'],
			'FORUM_NAME' 				=> $row['forum_name'],
			'FORUM_DESC'				=> generate_text_for_display($row['forum_desc'], $row['forum_desc_uid'], $row['forum_desc_bitfield'], $row['forum_desc_options']),
			
			'U_FORUM'					=> append_sid("{$phpbb_root_path}viewforum.$phpEx", "f=" . $row['forum_id']),
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
    'body' => 'portal/block/center_recent_topics.html',
	));

?>