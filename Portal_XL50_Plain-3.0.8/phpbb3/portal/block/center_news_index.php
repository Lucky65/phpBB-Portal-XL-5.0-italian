<?php
/*
*
* @name center_news_index.php
* @package phpBB3 Portal XL
* @version $Id: center_news_index.php,v 1.3 2009/05/26 11:35:16 damysterious Exp $
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
$user->setup('viewtopic');

/**
* initalise some global variables
*/
global $portal_config, $config, $phpbb_root_path, $phpEx, $db, $str_where, $total_news, $display_notice;

/**
* News pagination
*/
$news = request_var('news_article', -1);
$news = ($news > $portal_config['portal_number_of_news'] -1) ? -1 : $news;  

$start = request_var('nws', 0);
$start = ($start < 0) ? 0 : $start;
$limit_news = $portal_config['portal_number_of_news']; // number of news allowed to show for pagination
$portal_news_repository = ($portal_config['portal_news_repository']) ? true : false; // activate/deactivate pagination
//$portal_news_permissions = ($portal_config['portal_news_permissions']) ? true : false; // Not in use at moment
$portal_show_all_news = ($portal_config['portal_show_all_news']) ? true : false;
$portal_news_length = ($news < 0) ? $portal_config['portal_news_length'] : 0;

/*
* Fetch Posts for news from portal/includes/functions.php
*/
//$fetch_news = phpbb_fetch_news($portal_config['portal_news_forum'], $limit_news, $portal_news_length, 0, ($portal_show_all_news) ? 'news_all' : 'news', $start);
$fetch_news = phpbb_fetch_news($portal_config['portal_news_forum'], $limit_news, $portal_news_length, 0, ($portal_show_all_news) ? 'news_all' : 'news', $start);

/*
* Any news present? If not terminate here.
*/
if (sizeof($fetch_news) == 0)
{
	$template->assign_block_vars('news_index_row', array(
		'S_NO_TOPICS'	=> true,
		'S_NOT_LAST'	=> false
		));
}
else
{
	/*
	* Generate pagination
	*/
	if ($portal_news_repository)
	{
		if ($auth->acl_get_list($user->data['user_id'], 'f_read', true))
		{
			$str_where = '';
			$topic_type = ($portal_show_all_news) ? '( topic_type <> ' . POST_ANNOUNCE . ' ) OR ( topic_type <> ' . POST_GLOBAL . ') OR ( topic_type <> ' . POST_STICKY . ')' : 'topic_type = ' . POST_NORMAL;
			$str_where = ( strlen($str_where) > 0 ) ? 'AND (' . trim(substr($str_where, 0, -4)) . ')' : '';
		
			$sql = 'SELECT COUNT(topic_id) AS num_topics
				FROM ' . TOPICS_TABLE . '
				WHERE ' . $topic_type . '
					AND topic_approved = 1
					AND topic_moved_id = 0
					' . $str_where;
				$result = $db->sql_query($sql);
				$total_news = (int) $db->sql_fetchfield('num_topics');
				$result = $db->sql_query_limit($sql, $limit_news, $start);
		}
	}

	if($news < 0)
	{
		for ($i = 0; $i < count($fetch_news); $i++)
		{
			if( isset($fetch_news[$i]['striped']) && $fetch_news[$i]['striped'] == true )
			{
				$open_bracket = '[ ';
				$close_bracket = ' ]';
				$read_full = $user->lang['READ_FULL'];
			}
			else
			{
				$open_bracket = '';
				$close_bracket = '';
				$read_full = '';
			}

			switch($fetch_news[$i]['user_rank'])
			{
				case '0': 
					$poster_image_icon = $phpbb_root_path . 'portal/images/user.png'; 
				break;
				
				case '1':	
					$poster_image_icon = $phpbb_root_path . 'portal/images/founder.png'; 
				break;
				
				case '2': 
					$poster_image_icon = $phpbb_root_path . 'portal/images/mod.png'; 
				break;
				
				default:
					$poster_image_icon = $phpbb_root_path . 'portal/images/user.png';
				break;
			}	
	
			$forum_id = $fetch_news[$i]['forum_id'];
			$topic_id = $fetch_news[$i]['topic_id'];
	
			// last comments
			$center_news_index_last_post_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $fetch_news[$i]['forum_id'] . '&amp;t=' . $fetch_news[$i]['topic_id'] . '&amp;start=' . $fetch_news[$i]['topic_last_post_id']) . '#p' . $fetch_news[$i]['topic_last_post_id'];
			// topic id
			$center_news_index_topic_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $fetch_news[$i]['forum_id'] . '&amp;t=' . $fetch_news[$i]['topic_id']) . '#p' . $fetch_news[$i]['post_id'];
		
			$read_full_url = (isset($_GET['nws'])) ? 'nws='. $start . '&amp;news_article=' . $i . '#newstop' : 'news_article=' . $i . '#newstop=' . $i;
			$real_forum_id = ( $forum_id == 0 ) ? $fetch_news[$i]['global_id']: $forum_id;
		
			// Replies
			$replies = ($auth->acl_get('m_approve', $forum_id)) ? $fetch_news[$i]['topic_replies_real'] : $fetch_news[$i]['topic_replies'];
	
			if ($fetch_news[$i]['topic_status'] == ITEM_MOVED)
			{
				$topic_id = $fetch_news[$i]['topic_moved_id'];
				$unread_topic = false;
			}
			else
			{
				$topic_tracking_info = get_complete_topic_tracking($forum_id, $topic_id, $global_announce_list = false);
				$unread_topic = (isset($topic_tracking_info[$topic_id]) && $fetch_news[$i]['topic_last_post_time'] > $topic_tracking_info[$topic_id]) ? true : false;
			}
	
			// Get folder img, topic status/type related information
			$folder_img = $folder_alt = $topic_type = '';
			topic_status($fetch_news[$i], $replies, $unread_topic, $folder_img, $folder_alt, $topic_type);

			// Grab icons
			$icons = $cache->obtain_icons();

			$template->assign_block_vars('news_index_row', array(
				'ATTACH_ICON_IMG'			=> ($fetch_news[$i]['attachment'] && $config['allow_attachments']) ? $user->img('icon_topic_attach', $user->lang['TOTAL_ATTACHMENTS']) : '',
				'S_HAS_ATTACHMENTS'			=> (!empty($fetch_news[$i]['attachments'])) ? true : false,
				'S_DISPLAY_NOTICE'			=> $display_notice && $fetch_news[$i]['post_attachment'],
	
				'TOPIC_FOLDER_IMG'			=> $user->img($folder_img, $folder_alt),
				'TOPIC_FOLDER_IMG_SRC'		=> $user->img($folder_img, $folder_alt, false, '', 'src'),
				'TOPIC_FOLDER_IMG_ALT'  	=> $user->lang[$folder_alt],
				'TOPIC_ICON_IMG'			=> (!empty($icons[$fetch_news[$i]['icon_id']])) ? $icons[$fetch_news[$i]['icon_id']]['img'] : '',
				'TOPIC_ICON_IMG_HEIGHT'		=> (!empty($icons[$fetch_news[$i]['icon_id']])) ? $icons[$fetch_news[$i]['icon_id']]['height'] : '',
				'TOPIC_ICON_IMG_WIDTH'		=> (!empty($icons[$fetch_news[$i]['icon_id']])) ? $icons[$fetch_news[$i]['icon_id']]['width'] : '',
				'FOLDER_IMG'				=> $user->img('topic_read', 'NO_NEW_POSTS'),
				
				'OPEN'						=> $open_bracket,
				'CLOSE'						=> $close_bracket,

				'S_NOT_LAST'				=> ($i < sizeof($fetch_news) - 1) ? true : false,
				'S_NUM_POSTS'				=> ($i < sizeof($fetch_news) - 1) ? true : false,
				'S_POLL'					=> $fetch_news[$i]['poll_title'],
				'S_UNREAD_INFO'				=> $unread_topic,

				'FORUM_NAME'				=> ( $forum_id ) ? $fetch_news[$i]['forum_name'] : '',
				'IMG_POSTER_ICON'			=> '<img src="' . $poster_image_icon . '" width="16" height="16" />',
				'L_READ_FULL'				=> $read_full,
				'MINI_POST_IMG'				=> $user->img('icon_post_target', 'POST'),
				'NEWS_ID'					=> $i,
				'POSTER'					=> $fetch_news[$i]['username'],
				'REPLIES'					=> $fetch_news[$i]['topic_replies'],
				'TEXT'						=> $fetch_news[$i]['post_text'],
				'TIME'						=> $fetch_news[$i]['topic_time'],
				'TITLE'						=> $fetch_news[$i]['topic_title'],
				'TOPIC_VIEWS'				=> $fetch_news[$i]['topic_views'],
				'U_VIEW_UNREAD'		        => append_sid("{$phpbb_root_path}viewtopic.$phpEx", (($real_forum_id) ? 'f=' . $real_forum_id . '&amp;t=' : '') . $fetch_news[$i]['topic_id'] . '&amp;view=unread#unread'),
				'U_LAST_COMMENTS'			=> $center_news_index_last_post_url,
				'U_POST_COMMENT'			=> append_sid("{$phpbb_root_path}posting.$phpEx", 'mode=reply&amp;' . (($real_forum_id) ? 'f=' . $real_forum_id . '&amp;' : '') . 't=' . $topic_id),
				'U_READ_FULL'				=> append_sid("{$phpbb_root_path}index.$phpEx", $read_full_url),
				'U_USER_PROFILE'			=> (($fetch_news[$i]['user_type'] == USER_NORMAL || $fetch_news[$i]['user_type'] == USER_FOUNDER) && $fetch_news[$i]['user_id'] != ANONYMOUS) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $fetch_news[$i]['user_id']) : '',
				'U_VIEWFORUM'				=> append_sid("{$phpbb_root_path}viewforum.$phpEx", 'f=' . $fetch_news[$i]['forum_id']),
				'U_VIEW_COMMENTS'			=> $center_news_index_topic_url,
				));						
	
			if( !empty($fetch_news[$i]['attachments']) )
			{
				foreach ($fetch_news[$i]['attachments'] as $attachment)
				{
					$template->assign_block_vars('news_index_row.attachment', array(
						'DISPLAY_ATTACHMENT'	=> $attachment)
					);
				}
			}
			
			if ($limit_news <> 0 && $portal_news_repository)
			{
				$template->assign_vars(array(
					'NEWS_PAGINATION'    => generate_repository(append_sid("{$phpbb_root_path}portal.$phpEx"), $total_news, $limit_news, $start, ($portal_show_all_news) ? 'news_all' : 'news'),
					'NEWS_PAGE_NUMBER'   => on_page($total_news, $limit_news, $start),
					'NEWS_TOTAL_NEWS'	 => $total_news,
					'S_NUM_POSTS'		 => ($i < count($fetch_news) - 1) ? true : false,
					'L_TOTAL_NEWS'		 => $user->lang['TOTAL_NEWS']
					));
			}
		}
	}
	else
	{
		/*
		* Send Read Full page to screen
		*/
		switch($fetch_news[$i]['user_rank'])
		{
			case '0': 
				$poster_image_icon = $phpbb_root_path . 'portal/images/user.png'; 
			break;
			
			case '1':	
				$poster_image_icon = $phpbb_root_path . 'portal/images/founder.png'; 
			break;
					
			case '2': 
				$poster_image_icon = $phpbb_root_path . 'portal/images/mod.png'; 
			break;
					
			default:
				$poster_image_icon = $phpbb_root_path . 'portal/images/user.png';
			break;
		}	
	
		$i = $news;
		$forum_id = $fetch_news[$i]['forum_id'];
		$topic_id = $fetch_news[$i]['topic_id'];
	
		$open_bracket = '[ ';
		$close_bracket = ' ]';
	
		// last comments
		$center_news_index_last_post_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $fetch_news[$i]['forum_id'] . '&amp;t=' . $fetch_news[$i]['topic_id'] . '&amp;start=' . @intval($phpbb_seo->seo_opt['topic_last_page'][$fetch_news[$i]['topic_id']]) ) . '#p' . $fetch_news[$i]['topic_last_post_id'];
		// topic id
		$center_news_index_topic_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $fetch_news[$i]['forum_id'] . '&amp;t=' . $fetch_news[$i]['topic_id'] . '&amp;start=' . @intval($phpbb_seo->seo_opt['topic_last_page'][$fetch_news[$i]['topic_id']]) ) . '#p' . $fetch_news[$i]['post_id'];
		
		$read_full = $user->lang['BACK_TO_PREV'];
		$read_full_url = (isset($_GET['nws'])) ? 'nws='. $start . '&amp;news=' . $i . '#newstop=' . $i : 'news=' . $i . '#newstop=' . $i;
		$real_forum_id = ( $forum_id == 0 ) ? $fetch_news[$i]['global_id']: $forum_id;
	
		// Replies
		$replies = ($auth->acl_get('m_approve', $forum_id)) ? $fetch_news[$i]['topic_replies_real'] : $fetch_news[$i]['topic_replies'];
	
		if ($fetch_news[$i]['topic_status'] == ITEM_MOVED)
		{
			$topic_id = $fetch_news[$i]['topic_moved_id'];
			$unread_topic = false;
		}
		else
		{
			$topic_tracking_info = get_complete_topic_tracking($forum_id, $topic_id, $global_announce_list = false);
			$unread_topic = (isset($topic_tracking_info[$topic_id]) && $fetch_news[$i]['topic_last_post_time'] > $topic_tracking_info[$topic_id]) ? true : false;
		}
	
		// Get folder img, topic status/type related information
		$folder_img = $folder_alt = $topic_type = '';
		topic_status($fetch_news[$i], $replies, $unread_topic, $folder_img, $folder_alt, $topic_type);
	
		// Grab icons
		$icons = $cache->obtain_icons();
	
		$template->assign_block_vars('news_index_row', array(
			'ATTACH_ICON_IMG'			=> ($fetch_news[$i]['attachment'] && $config['allow_attachments']) ? $user->img('icon_topic_attach', $user->lang['TOTAL_ATTACHMENTS']) : '',
			'S_HAS_ATTACHMENTS'			=> (!empty($fetch_news[$i]['attachments'])) ? true : false,
			'S_DISPLAY_NOTICE'			=> $display_notice && $fetch_news[$i]['post_attachment'],

			'TOPIC_FOLDER_IMG'			=> $user->img($folder_img, $folder_alt),
			'TOPIC_FOLDER_IMG_SRC'		=> $user->img($folder_img, $folder_alt, false, '', 'src'),
			'TOPIC_FOLDER_IMG_ALT'  	=> $user->lang[$folder_alt],
			'TOPIC_ICON_IMG'			=> (!empty($icons[$fetch_news[$i]['icon_id']])) ? $icons[$fetch_news[$i]['icon_id']]['img'] : '',
			'TOPIC_ICON_IMG_HEIGHT'		=> (!empty($icons[$fetch_news[$i]['icon_id']])) ? $icons[$fetch_news[$i]['icon_id']]['height'] : '',
			'TOPIC_ICON_IMG_WIDTH'		=> (!empty($icons[$fetch_news[$i]['icon_id']])) ? $icons[$fetch_news[$i]['icon_id']]['width'] : '',
			'FOLDER_IMG'				=> $user->img('topic_read', 'NO_NEW_POSTS'),
				
			'OPEN'						=> $open_bracket,
			'CLOSE'						=> $close_bracket,

			'S_NOT_LAST'				=> ($i < count($fetch_news) - 1) ? true : false,
			'S_NUM_POSTS'				=> ($i < count($fetch_news) - 1) ? true : false,
			'S_POLL'					=> $fetch_news[$i]['poll_title'],
			'S_UNREAD_INFO'				=> $unread_topic,

			'FORUM_NAME'				=> ( $forum_id ) ? $fetch_news[$i]['forum_name'] : '',
			'IMG_POSTER_ICON'			=> '<img src="' . $poster_image_icon . '" width="16" height="16" />',
			'L_READ_FULL'				=> $read_full,
			'MINI_POST_IMG'				=> $user->img('icon_post_target', 'POST'),
			'NEWS_ID'					=> $i,
			'POSTER'					=> $fetch_news[$i]['username'],
			'REPLIES'					=> $fetch_news[$i]['topic_replies'],
			'TEXT'						=> $fetch_news[$i]['post_text'],
			'TIME'						=> $fetch_news[$i]['topic_time'],
			'TITLE'						=> censor_text($fetch_news[$i]['topic_title']),
			'TOPIC_VIEWS'				=> $fetch_news[$i]['topic_views'],
			'U_VIEW_UNREAD'		        => append_sid("{$phpbb_root_path}viewtopic.$phpEx", (($real_forum_id) ? 'f=' . $real_forum_id . '&amp;t=' : '') . $fetch_news[$i]['topic_id'] . '&amp;view=unread#unread'),
			'U_LAST_COMMENTS'			=> $center_news_index_last_post_url,
			'U_POST_COMMENT'			=> append_sid("{$phpbb_root_path}posting.$phpEx", 'mode=reply&amp;' . (($real_forum_id) ? 'f=' . $real_forum_id . '&amp;' : '') . 't=' . $topic_id),
			'U_READ_FULL'      			=> append_sid("{$phpbb_root_path}index.$phpEx", $read_full_url),
			'U_USER_PROFILE'			=> (($fetch_news[$i]['user_type'] == USER_NORMAL || $fetch_news[$i]['user_type'] == USER_FOUNDER) && $fetch_news[$i]['user_id'] != ANONYMOUS) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $fetch_news[$i]['user_id']) : '',
			'U_VIEWFORUM'				=> append_sid("{$phpbb_root_path}viewforum.$phpEx", 'f=' . $fetch_news[$i]['forum_id']),
			'U_VIEW_COMMENTS'			=> $center_news_index_topic_url,
			));
	
			if( !empty($fetch_news[$i]['attachments']) )
			{
				foreach ($fetch_news[$i]['attachments'] as $attachment)
				{
					$template->assign_block_vars('news_index_row.attachment', array(
						'DISPLAY_ATTACHMENT'	=> $attachment)
					);
				}
			}
			
	}
}
		
/*
* Set some template assign variables
*/
$template->assign_vars(array(
	'NEWEST_POST_IMG'			=> $user->img('icon_topic_newest', 'VIEW_NEWEST_POST'),
	'READ_POST_IMG'				=> $user->img('icon_topic_latest', 'VIEW_NEWEST_POST'),
	'S_DISPLAY_NEWS'			=> true,
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/center_news_index.html',
	));

?>