<?php
/**
*
* @package DM Video
* @version $Id: common.php 234 2010-02-08 03:19:59Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Some mod related variables and includes
$dm_video_path = (defined('DM_VIDEO_ROOT_PATH')) ? DM_VIDEO_ROOT_PATH : 'dm_video/';
$user->add_lang('mods/dm_video');
$video_unapproved = 0;

// Get config values
$sql_array = array(
    'SELECT'    => 'config_name, config_value',

    'FROM'      => array(
        DM_VIDEO_CONFIG_TABLE => 'vc'
    ),
);
$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql);

while ($row = $db->sql_fetchrow($result))
{
    $dmv_config[$row['config_name']] = $row['config_value'];
}
$db->sql_freeresult($result);

// Some additional template variables
$template->assign_vars(array(
	'S_IN_DMV'			=> true,
	'S_DMV_NEW_VIDEOS'	=> false,
	'U_DMV_INDEX'		=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
	'DMV_COPY_NOTE'		=> sprintf($user->lang['DMV_COPY_NOTE'], $dmv_config['copyright_email'], $dmv_config['copyright_show']),
));

// Here we start with functions we need

// Check for new videos (not yet approved videos)
function generate_unapproved()
{
	global $db, $user, $template, $auth;
	global $phpEx, $phpbb_root_path, $dm_video_path, $dmv_config;

	$sql_array = array(
		'SELECT'    => 'COUNT(video_approval) AS video_unapproved',

		'FROM'      => array(
			DM_VIDEO_TABLE => 'v'
		),

		'WHERE'     =>  'video_approval = "0"
			AND video_reported = "1"',
	);
	$sql = $db->sql_build_query('SELECT', $sql_array);
	$result = $db->sql_query($sql);
	$video_unapproved = (int) $db->sql_fetchfield('video_unapproved');

	if ( $video_unapproved > 0 )
	{
		$template->assign_vars(array(
			'S_DMV_NEW_VIDEOS'	=> true,
			'U_DMV_NEW_VIDEOS'	=> append_sid("{$phpbb_root_path}adm/index.$phpEx", "i=dm_video&amp;mode=release_videos", true, $user->session_id),
		));
	}
	$db->sql_freeresult($result);
}

// Check for reported videos
function generate_reported()
{
	global $db, $user, $template, $auth;
	global $phpEx, $phpbb_root_path, $dm_video_path, $dmv_config;

	$sql_array = array(
		'SELECT'    => 'COUNT(video_reported) AS video_reported',

		'FROM'      => array(
			DM_VIDEO_TABLE => 'v'
		),

		'WHERE'     =>  'video_reported = "0"',
	);
	$sql = $db->sql_build_query('SELECT', $sql_array);
	$result = $db->sql_query($sql);
	
	$video_reported = (int) $db->sql_fetchfield('video_reported');

	if ( $video_reported > 0 )
	{
		$template->assign_vars(array(
			'S_DMV_REPORTED_VIDEOS'	=> true,
			'U_DMV_REPORTED_VIDEOS'	=> append_sid("{$phpbb_root_path}adm/index.$phpEx", "i=dm_video&amp;mode=reported_videos", true, $user->session_id),
		));
	}
	$db->sql_freeresult($result);
}

// Generate the navigation bar
function generate_cat_nav(&$cat_data)
{
	global $db, $user, $template, $auth;
	global $phpEx, $phpbb_root_path, $dm_video_path, $dmv_config;

	// Get video parents
	$cat_parents = get_cat_parents($cat_data);

	// Build navigation links
	if (!empty($cat_parents))
	{
		foreach ($cat_parents as $parent_cat_id => $parent_data)
		{
			list($parent_name, $parent_type) = array_values($parent_data);
			$template->assign_block_vars('navlinks', array(
				'FORUM_NAME'	=> $parent_name,
				'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "c=" . $parent_cat_id),
			));
		}
	}

	$template->assign_block_vars('navlinks', array(
		'FORUM_NAME'	=> $cat_data['cat_name'],
		'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "c=" . $cat_data['cat_id']),
	));
	return;
}

// Returns cat parents as an array
function get_cat_parents(&$cat_data)
{
	global $db;

	$cat_parents = array();
	if ($cat_data['parent_id'] > 0)
	{
		if ($cat_data['cat_parents'] == '')
		{
			$sql_array = array(
				'SELECT'    => 'cat_id, cat_name',

				'FROM'      => array(
					DM_VIDEO_CATS_TABLE  => 'c'
				),

				'WHERE'     => 'left_id < ' . (int) $cat_data['left_id'] . '
					AND right_id > ' . (int) $cat_data['right_id'],

				'ORDER_BY'  => 'left_id ASC'
			);
			$sql = $db->sql_build_query('SELECT', $sql_array);
			$result = $db->sql_query($sql);

			while ($row = $db->sql_fetchrow($result))
			{
				$row['cat_type'] = 1;
				$cat_parents[$row['cat_id']] = array($row['cat_name'], (int) $row['cat_type']);
			}
			$db->sql_freeresult($result);

			$cat_data['cat_parents'] = serialize($cat_parents);

			$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . "
				SET cat_parents = '" . $db->sql_escape($cat_data['cat_parents']) . "'
				WHERE parent_id = " . (int) $cat_data['parent_id'];
			$db->sql_query($sql);
		}
		else
		{
			$cat_parents = unserialize($cat_data['cat_parents']);
		}
	}
	return $cat_parents;
}

// Get the categories infos
function get_cat_info($cat_id)
{
	global $db;

	$sql_array = array(
		'SELECT'    => '*',

		'FROM'      => array(
			DM_VIDEO_CATS_TABLE => 'c'
		),

		'WHERE'     =>  'cat_id = ' . (int) $cat_id,
	);

	$sql = $db->sql_build_query('SELECT', $sql_array);
	$result = $db->sql_query($sql);

	while ($row = $db->sql_fetchrow($result))
	{
		$cat_data = $row;
	}
	return $cat_data;
}

// Generate the sub categories list
function generate_cat_list($cat_id)
{
	global $db, $template, $phpbb_root_path, $phpEx, $user, $config, $dm_video_path, $dmv_config;

	$sql_array = array(
		'SELECT'	=> 'bc.*, bd.*, COUNT(bd.video_id) AS number_videos, MAX(bd.last_poster_time) AS last_video',

		'FROM'		=> array(
			DM_VIDEO_CATS_TABLE	=> 'bc',
		),

		'LEFT_JOIN'	=> array(
			array(
				'FROM'	=> array(DM_VIDEO_CATS_TABLE => 'bc2'),
				'ON'	=> 'bc2.left_id < bc.right_id
					AND bc2.left_id > bc.left_id'
			),
			array(
				'FROM' => array(DM_VIDEO_TABLE => 'bd'),
				'ON'	=> 'bd.video_cat_id = bc.cat_id
					OR bd.video_cat_id = bc2.cat_id'
			),
		),

		'WHERE'		=> 'bc.parent_id = ' . (int) $cat_id,

		'GROUP_BY'	=> 'bc.cat_id',

		'ORDER_BY'	=>	'bc.left_id ASC'
	);

	$sql = $db->sql_build_query('SELECT', $sql_array);
	$result = $db->sql_query($sql);

	while ($row = $db->sql_fetchrow($result))
	{
		$row['last_video'] = ($row['last_video']) ? $row['last_video'] : 0;
		$subcats = $last_video_id = $last_video_title = $last_video_time = $last_user_id = $last_username = $last_user_colour = $last_poster_full = '';

		// Do we have sub categories?
		if (($row['left_id'] + 1) != $row['right_id'])
		{
			$sql_array2 = array(
				'SELECT'    => 'bc.*',

				'FROM'      => array(
					DM_VIDEO_CATS_TABLE => 'bc'
				),

				'WHERE'     =>  'bc.parent_id = ' . $row['cat_id'],

				'ORDER_BY'  => 'bc.left_id ASC'
			);

			$sql2 = $db->sql_build_query('SELECT', $sql_array2);

			// Run the built query statement
			$result2 = $db->sql_query($sql2);
			
			while ($row2 = $db->sql_fetchrow($result2))
			{
				$subcats .= ($subcats) ? ', ' : '';
				$subcats .= '<a class="subforum ' . (((isset($read_info[$row2['cat_id']]) ? $read_info[$row2['cat_id']] : 0) && ($user->data['user_id'] != ANONYMOUS)) ? 'unread' : 'read') . '" href="';
				$subcats .= append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "c=" . $row2['cat_id']);
				$subcats .= '">' . censor_text($row2['cat_name']) . '</a>';
			}
			$db->sql_freeresult($result2);

			$folder_image = 'forum_read_subforum';
			$folder_alt = 'no';
			$l_subcats = $user->lang['DMV_SUB_CAT'];
			if ($row['left_id'] + 3 != $row['right_id'])
			{
				$l_subcats = $user->lang['DMV_SUB_CATS'];
			}
		}
		else
		{
			$folder_image = 'forum_read';
			$l_subcats = '';
			$folder_alt = 'no';
		}

		// Do we have new videos?
		if ($row['last_video'] != 0)
		{
			$last_video_approval = '';

			$sql_array2 = array(
				'SELECT'	=> 'bd.*, u.username, u.user_id, u.user_colour',

				'FROM'		=> array(
					DM_VIDEO_TABLE	=> 'bd',
				),

				'LEFT_JOIN'	=> array(
					array(
						'FROM'	=> array(USERS_TABLE => 'u'),
						'ON'	=> 'u.user_id = bd.last_poster_id'
					),
				),

				'WHERE'		=> 'bd.last_poster_time = ' . $row['last_video'],
			);

			$sql2 = $db->sql_build_query('SELECT', $sql_array2);
			$result2 = $db->sql_query($sql2);

			while ($row2 = $db->sql_fetchrow($result2))
			{
				$last_video_id 			= (int) $row2['video_id'];
				$last_video_title 		= (string) $row2['video_title'];
				$last_user_id 			= (int) $row2['last_poster_id'];
				$last_username 			= (string) $row2['last_poster_name'];
				$last_user_colour 		= (string) $row2['last_poster_colour'];
				$last_video_time 		= (int) $row2['last_poster_time'];
				$last_video_approval	= (bool) $row2['video_approval'];

				if ( $last_video_approval == 0 )
				{
					$last_video_title 	= '';
					$last_video_show 	= $user->lang['DMV_NOT_RELEASED'];
					$last_poster_full 	= '';
					$last_video_time 	= '';
				}
				else
				{
					$last_poster_full = $user->lang['POST_BY_AUTHOR'] . ' ' . get_username_string('full', (int) $last_user_id, (string) $last_username, (string) $last_user_colour);
					$last_video_time = $user->lang['POSTED_ON_DATE'] . ' ' . $user->format_date((int) $last_video_time);

					$last_video_show = '<a href="' . append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v=" . (int) $last_video_id . "&amp;c=" . (int) $row['cat_id']) . '" style="font-weight: bold;" title="' . (string) $last_video_title . '">' . (string) $last_video_title . '</a>';
				}
				$db->sql_freeresult($result2);
			}
		}
		else
		{
			$last_video_show = '';
		}

		// Send the results to the template
		$template->assign_block_vars('catrow', array(
			'LAST_VIDEO'			=> $row['last_video'],
			'DMV_CAT_NAME'			=> censor_text($row['cat_name']),
			'NUMBER_VIDEOS'			=> (int) $row['number_videos'],
			'U_DMV_CAT'				=> append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "c=" . $row['cat_id']),
			'DMV_CAT_DESC'			=> generate_text_for_display((string) $row['cat_desc'], (string) $row['cat_desc_uid'], (string) $row['cat_desc_bitfield'], (string) $row['cat_desc_options']),
			'LAST_VIDEO_TITLE'		=> (string) $last_video_title,
			'LAST_POSTER_FULL'		=> (string) $last_poster_full,
			'LAST_VIDEO_TIME'		=> (string) $last_video_time,
			'U_LAST_VIDEO'			=> (string) $last_video_show,

			'CAT_FOLDER_IMG_SRC'	=> $user->img($folder_image, $folder_alt, false, '', 'src'),
			'SUBCATS'				=> ($subcats) ? $l_subcats . ': <span style="font-weight: bold;">' . $subcats . '</span>' : '',
		));
	}
	
	$db->sql_freeresult($result);

	$template->assign_vars(array(
		'LAST_POST_IMG'	=> $user->img('icon_topic_latest', 'VIEW_LATEST_POST'),
	));
}

// Generate 5 latest videos
function generate_latest_videos()
{
	global $db, $template, $phpbb_root_path, $phpEx, $user, $config, $dm_video_path, $dmv_config;

	$sql_array = array(
		'SELECT'    => 'v.*, u.*',

		'FROM'      => array(
			DM_VIDEO_TABLE  => 'v'
		),

		'LEFT_JOIN' => array(
			array(
				'FROM'  => array(USERS_TABLE => 'u'),
				'ON'    => 'v.video_user_id = u.user_id'
			)
		),

		'WHERE'     => 'v.video_approval = 1',

		'ORDER_BY'  => 'v.video_time DESC'
	);

	$sql = $db->sql_build_query('SELECT', $sql_array);
	// now run the query...
	$result = $db->sql_query_limit($sql, (string) $dmv_config['newest_videos']);
	
	while ($row = $db->sql_fetchrow($result))
	{
		$votes 		= (int) $row['video_votetotal'];
		$sum 		= (int) $row['video_votesum'];
		$avg_score 	= ($row['video_votetotal'] == 0) ? 0 : round($row['video_votesum'] / $row['video_votetotal'], 2);
		$cat_id 	= (int) $row['video_cat_id'];

		// Send the results to the template
		$template->assign_block_vars('newest', array(
			'TITLE'				=> (string) $row['video_title'],
			'SINGER'			=> (string) $row['video_singer'],
			'DURATION'			=> (string) $row['video_duration'],
			'RATING'			=> set_rating_image($votes, $sum, $avg_score),
			'VIEWS'				=> (int) $row['video_counter'],
			'POST_AUTHOR_FULL'	=> get_username_string('full', (int) $row['user_id'], (string) $row['username'], (string) $row['user_colour']),
			'POST_TIME'			=> $user->format_date((string) $row['video_time']),
			'U_SHOW_VIDEO'		=> append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v=" . (int) $row['video_id'] . "&amp;c=" . (int) $cat_id),
		));
	}
	$db->sql_freeresult($result);

	$template->assign_vars(array(
		'U_SHOW_ALL' => append_sid("{$phpbb_root_path}{$dm_video_path}all_videos.$phpEx"),
	));
}

// Generate the video list
function generate_video_list($cat_id)
{
	global $db, $template, $phpbb_root_path, $phpEx, $user, $config, $dm_video_path, $dmv_config;

	$start 		= request_var('start', 0);
	$number 	= (string) $dmv_config['video_page_user'];
	
	$sort_days	= request_var('st', 0);
	$sort_key	= request_var('sk', 'video_title');
	$sort_dir	= request_var('sd', 'ASC');
	$limit_days = array(0 => $user->lang['ALL_POSTS'], 1 => $user->lang['1_DAY'], 7 => $user->lang['7_DAYS'], 14 => $user->lang['2_WEEKS'], 30 => $user->lang['1_MONTH'], 90 => $user->lang['3_MONTHS'], 180 => $user->lang['6_MONTHS'], 365 => $user->lang['1_YEAR']);

	$sort_by_text	= array('t' => $user->lang['DMV_SORT_TITLE'], 'a' => $user->lang['DMV_SORT_ARTIST'], 'u' => $user->lang['DMV_SORT_FROMNAME'], 'r' => $user->lang['DMV_SORT_RATING'], 'v' => $user->lang['DMV_SORT_VIEWS']);
	$sort_by_sql 	= array('t' => 'video_title', 'a' => 'video_singer', 'u' => 'video_username', 'r' => 'video_votesum / video_votetotal', 'v' => 'video_counter');

	$s_limit_days = $s_sort_key = $s_sort_dir = $u_sort_param = '';
	gen_sort_selects($limit_days, $sort_by_text, $sort_days, $sort_key, $sort_dir, $s_limit_days, $s_sort_key, $s_sort_dir, $u_sort_param);
	$sql_sort_order = $sort_by_sql[$sort_key] . ' ' . (($sort_dir == 'd') ? 'DESC' : 'ASC');

	// Total number of videos
	$sql_array = array(
		'SELECT'    => 'COUNT(video_id) AS total_videos',

		'FROM'      => array(
			DM_VIDEO_TABLE => 'v'
		),

		'WHERE'     =>  'video_cat_id = ' . (int) $cat_id . '
			AND video_approval = "1"
			AND video_reported = "1"',
	);

	$sql = $db->sql_build_query('SELECT', $sql_array);

	// Run the built query statement
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	
	$total_videos = $row['total_videos'];
	$db->sql_freeresult($result);

	// List all videos
	$sql_array = array(
		'SELECT'	=> 'v.*, u1.user_id, u1.username, u1.user_colour, bc.*',

		'FROM'		=> array(
			DM_VIDEO_TABLE	=> 'v',
		),

		'LEFT_JOIN'	=> array(
			array(
				'FROM'	=> array(USERS_TABLE => 'u1'),
				'ON'	=> 'u1.user_id = v.video_user_id'
			),
			array(
				'FROM' => array(DM_VIDEO_CATS_TABLE => 'bc'),
				'ON'	=> 'bc.cat_id = v.video_cat_id'
			),
		),

		'WHERE'		=> 'v.video_cat_id = ' . (int) $cat_id . ' 
			AND v.video_approval = 1
			AND v.video_reported = 1',

		'ORDER_BY'	=>	'v.' . $sql_sort_order,
	);

	$sql = $db->sql_build_query('SELECT', $sql_array);
	$result = $db->sql_query_limit($sql, (int) $number, (int) $start);

	while ($row = $db->sql_fetchrow($result))
	{
		$votes 			= (int) $row['video_votetotal'];
		$sum 			= (int) $row['video_votesum'];
		$avg_score 		= ($row['video_votetotal'] == 0) ? 0 : round($row['video_votesum'] / $row['video_votetotal'], 2);
		$video_cat_link = '<a href="' . append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "t=" . (int) $row['video_id']) . '"><span style="font-weight: bold;">' . censor_text((string) $row['video_title']) . '</span></a>';
		$votes 			= $row['video_votetotal'];
		$sum 			= $row['video_votesum'];
		$avg_score 		= ($row['video_votetotal'] == 0) ? 0 : round($row['video_votesum'] / $row['video_votetotal'], 2);

		// Send fields to the template
		$template->assign_block_vars('videolistrow', array(
			'POST_AUTHOR_FULL'		=> get_username_string('full', (int) $row['user_id'], (string) $row['username'], (string) $row['user_colour']),
			'POST_TIME'				=> $user->format_date((string) $row['video_time']),
			'VIDEO_ID'				=> (int) $row['video_id'],
			'VIDEO_TITLE'			=> censor_text((string) $row['video_title']),
			'VIDEO_SINGER'			=> (string) $row['video_singer'],
			'VIDEO_SONGTEXT'		=> (string) $row['video_songtext'],
			'VIDEO_DURATION'		=> (string) $row['video_duration'],
			'VIDEO_CLICKS'			=> (int) $row['video_counter'],
			'VIDEO_TIME'			=> $user->format_date((string) $row['video_time']),
			'VIDEO_RATING_IMG' 		=> set_rating_image((int) $votes, (int) $sum, (float) $avg_score),	
			'U_SHOW_VIDEO'			=> append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v=" . (int) $row['video_id'] . '&amp;c=' . (int) $cat_id),
			'U_VIDEO_CAT'			=> (string) $video_cat_link,
			'VIDEO_CAT'				=> (int) $row['video_cat_id'],
		));
	}
	$db->sql_freeresult($result);

	$template->assign_vars(array(
		'S_VIDEO_ACTION' 	=> append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "c=" . $cat_id),
		'S_SELECT_SORT_DIR'	=> $s_sort_dir,
		'S_SELECT_SORT_KEY'	=> $s_sort_key,
		'LAST_POST_IMG'		=> $user->img('icon_topic_latest', 'VIEW_LATEST_POST'),
		'PAGINATION' 		=> generate_pagination(append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "c=" . $cat_id . "&amp;sk=" . $sort_key . "&amp;sd=" . $sort_dir), (int) $total_videos, (int) $number, (int) $start),
		'PAGE_NUMBER'		=> on_page((int) $total_videos, (int) $number, (int) $start),
		'TOTAL_VIDEOS'		=> ($total_videos == 1) ? $user->lang['DMV_SINGLE'] : sprintf($user->lang['DMV_MULTI'], (int) $total_videos),
	));
}

// Generate rating selection list
function get_rating_select($selected)
{
	global $user;

	$rating_array = array(
		array(
			'value' => 0,
			'text'	=> $user->lang['DMV_RATING_SELECT'],
		),
		array(
			'value' => 1,
			'text'	=> '1 - ' . $user->lang['DMV_RATING_BAD'],
		),
		array(
			'value' => 2,
			'text'	=> '2 - ' . $user->lang['DMV_RATING_NOT_BAD'],
		),
		array(
			'value' => 3,
			'text'	=> '3 - ' . $user->lang['DMV_RATING_AVG'],
		),
		array(
			'value' => 4,
			'text'	=> '4 - ' . $user->lang['DMV_RATING_GOOD'],
		),
		array(
			'value' => 5,
			'text'	=> '5 - ' . $user->lang['DMV_RATING_GREAT'],
		),
	);

	$rating_select = '<select name="video_rating" id="video_rating">';
	
	foreach ($rating_array as $option)
	{
		$rating_select .= '<option value="' . $option['value'] . '"' . (($selected == $option['value']) ? ' selected="selected"' : '') . '>' . $option['text'] . '</option>';
	}
	$rating_select .= '</select>';

	return $rating_select;
}

// Set the rating image for the video
function set_rating_image($votes, $sum, $avg_score)
{
	global $user, $phpbb_root_path;

	$image 				= '';
	$rating_score 		= round($avg_score);
	$rating_score_text 	= $avg_score;

	if ($votes < 1)
	{
		$votes = $user->lang['DMV_RATING_NO'];
	}
	else
	{
		$votes = ($votes == 1 ) ? sprintf($user->lang['DMV_RATING_SUM'], $votes, $rating_score) : sprintf($user->lang['DMV_RATING_SUMS'], $votes, $rating_score_text);
	}

	for ($i = 1; $i <= $rating_score; $i++)
	{
		$image .= '<img src="' . $phpbb_root_path . 'images/dm_video/star1.gif" title="' . $votes . '" alt="' . $votes . '" />';
	}

	$blank_stars = ( 5 - $rating_score);
	for ($i = 1; $i <= $blank_stars; $i++)
	{
		$image .= '<img src="' . $phpbb_root_path . 'images/dm_video/star2.gif" title="' . $votes . '" alt="' . $votes . '" />';
	}
	return $image;
}

// Create Top 10 list by hits
function set_top_10_hits()
{
	global $db, $user, $template, $auth;
	global $phpEx, $phpbb_root_path, $dm_video_path, $dmv_config;
	
	$start = '';

	$sql_array = array(
		'SELECT'    => 'v.*, c.cat_name',

		'FROM'      => array(
			DM_VIDEO_TABLE  => 'v'
		),

		'LEFT_JOIN' => array(
			array(
				'FROM'  => array(DM_VIDEO_CATS_TABLE => 'c'),
				'ON'    => 'v.video_cat_id = c.cat_id'
			)
		),

		'WHERE'     => 'v.video_counter > 0',

		'ORDER_BY'  => 'v.video_counter DESC'
	);

	$sql = $db->sql_build_query('SELECT', $sql_array);

	// now run the query...
	$result = $db->sql_query_limit($sql, (string) $dmv_config['top_views']);

	$position = ((int) $start > 0 ) ? (int) $start : 0;
	$actual_position = ((int) $start > 0 ) ? (int) $start : 0;
	$lastscore = 0;

	while ($row = $db->sql_fetchrow($result))
	{
		$actual_position++;
		if ($lastscore != (int) $row['video_counter'])
		{
			$position = $actual_position;
		}
		$lastscore = (int) $row['video_counter'] ;

		// Create the array for sending to the template
		$template->assign_block_vars('toptenrow', array(
			'POS' 				=> (int) $position,
			'VIDEO_TITLE' 		=> (string) $row['video_title'],
			'VIDEO_SINGER' 		=> (string) $row['video_singer'],
			'VIDEO_CAT_NAME'	=> (string) $row['cat_name'],
			'VIDEO_COUNTER'		=> (int) $row['video_counter'],
			'U_SHOW_VIDEO'		=> append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v=" . (int) $row['video_id'] . "&amp;c=" . (int) $row['video_cat_id']),
		));
	}
	$db->sql_freeresult($result);

	$template->assign_vars(array(
		'TOPTEN_RATING'			=> sprintf($user->lang['DMV_RATES'], (string) $dmv_config['top_ratings']),
		'TOPTEN_HITS'			=> sprintf($user->lang['DMV_HITS'], (string) $dmv_config['top_views']),
		'TOPTEN_HITS_EXPLAIN' 	=> sprintf($user->lang['DMV_TOPTEN_HITS_EXPLAIN'], (string) $dmv_config['top_views']),
		'U_BACK'				=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
		'U_TOP_RATES'			=> append_sid("{$phpbb_root_path}{$dm_video_path}topten.$phpEx", "mode=rating")
	));
}

// Create Top 10 list by rating
function set_top_10_rating()
{
	global $db, $user, $template, $auth;
	global $phpEx, $phpbb_root_path, $dm_video_path, $dmv_config;
	
	$start = $votes = $sum = $avg_score = '';

	$sql_array = array(
		'SELECT'    => 'v.*, c.cat_name',

		'FROM'      => array(
			DM_VIDEO_TABLE  => 'v'
		),

		'LEFT_JOIN' => array(
			array(
				'FROM'  => array(DM_VIDEO_CATS_TABLE => 'c'),
				'ON'    => 'v.video_cat_id = c.cat_id'
			)
		),

		'WHERE'     => 'v.video_votesum > 0',

		'ORDER_BY'  => 'v.video_votesum/v.video_votetotal DESC, v.video_votetotal DESC'
	);

	$sql = $db->sql_build_query('SELECT', $sql_array);

	// now run the query...
	$result = $db->sql_query_limit($sql, (string) $dmv_config['top_ratings']);

	$position 			= ((int) $start > 0 ) ? (int) $start : 0;
	$actual_position 	= ((int) $start > 0 ) ? (int) $start : 0;
	$lastscore 			= 0;

	while ($row = $db->sql_fetchrow($result))
	{
		$votes 		= (int) $row['video_votetotal'];
		$sum 		= (int) $row['video_votesum'];
		$avg_score 	= ($row['video_votetotal'] == 0) ? 0 : ($row['video_votesum'] / $row['video_votetotal']);

		$actual_position++;
		
		if ($lastscore != (((int) $row['video_votesum'] / (int) $row['video_votetotal'])))
		{
			$position = $actual_position;
		}
		$lastscore = (((int) $row['video_votesum'] / (int) $row['video_votetotal'])) ;

		// Create the array for sending to the template
		$template->assign_block_vars('toptenrow', array(
			'POS' 				=> (int) $position,
			'VIDEO_TITLE' 		=> (string) $row['video_title'],
			'VIDEO_SINGER' 		=> (string) $row['video_singer'],
			'VIDEO_CAT_NAME'	=> (string) $row['cat_name'],
			'VIDEO_COUNTER'		=> (((int) $row['video_votesum'] / (int) $row['video_votetotal'])),
			'VIDEO_RATING_IMG'	=> set_rating_image((int) $votes, (int) $sum, (float) $avg_score),
			'U_SHOW_VIDEO'		=> append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v=" . (int) $row['video_id'] . "&amp;c=" . (int) $row['video_cat_id']),
		));
	}
	$db->sql_freeresult($result);

	$template->assign_vars(array(
		'TOPTEN_RATING'			=> sprintf($user->lang['DMV_RATES'], (string) $dmv_config['top_ratings']),
		'TOPTEN_HITS'			=> sprintf($user->lang['DMV_HITS'], (string) $dmv_config['top_views']),
		'TOPTEN_RATE_EXPLAIN' 	=> sprintf($user->lang['DMV_TOPTEN_RATE_EXPLAIN'], (string) $dmv_config['top_ratings']),
		'U_BACK'				=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
		'U_TOP_HITS'			=> append_sid("{$phpbb_root_path}{$dm_video_path}topten.$phpEx", "mode=hits"),
	));
}

// Show comments
function show_comments($show_id)
{
	global $db, $user, $template, $auth;
	global $phpEx, $phpbb_root_path, $dm_video_path, $dmv_config;
	
	$sql_array = array(
		'SELECT'    => '*',

		'FROM'      => array(
			DM_VIDEO_COMMENT_TABLE  => 'c'
		),

		'LEFT_JOIN' => array(
			array(
				'FROM'  => array(USERS_TABLE => 'u'),
				'ON'    => 'c.user_id = u.user_id'
			)
		),

		'WHERE'     => 'video_id = ' . (int) $show_id
	);

	$sql = $db->sql_build_query('SELECT', $sql_array);

	// now run the query...
	$result = $db->sql_query($sql);

	while ($row = $db->sql_fetchrow($result))
	{
		$comment_text = (string) $row['comment_text'];

		$template->assign_block_vars('comment',array(
		));
	}
	
	$db->sql_freeresult($result);

	$template->assign_vars(array(
		'U_BACK' => append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
	));
}

// Post video announcement
function create_announcement($video_subject, $video_msg, $forum_id)
{
	global $db, $phpbb_root_path, $phpEx;

	if (!function_exists('submit_post'))
	{
		include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
	}

	$subject =  utf8_normalize_nfc((string) $video_subject);
	$text =  utf8_normalize_nfc((string) $video_msg);

	// Do not try to post message if subject or text is empty
	if (empty($subject) || empty($text))
	{
		return;
	}

	// variables to hold the parameters for submit_post
	$poll = $uid = $bitfield = $options = '';

	generate_text_for_storage($subject, $uid, $bitfield, $options, false, false, false);
	generate_text_for_storage($text, $uid, $bitfield, $options, true, true, true);

	$data = array(
		'forum_id'        	=> (int)$forum_id,
		'icon_id'       	=> false,

		'enable_bbcode'     => true,
		'enable_smilies'    => true,
		'enable_urls'       => true,
		'enable_sig'        => true,

		'message'        	=> (string) $text,
		'message_md5'    	=> (string) md5($text),

		'bbcode_bitfield'   => (string) $bitfield,
		'bbcode_uid'        => (string) $uid,

		'post_edit_locked'	=> 0,
		'topic_title'       => (string) $subject,
		'notify_set'        => false,
		'notify'            => false,
		'post_time'         => 0,
		'forum_name'        => '',
		'enable_indexing'   => true,
	);

	submit_post('post', (string) $subject, '', POST_NORMAL, $poll, $data);
}

?>