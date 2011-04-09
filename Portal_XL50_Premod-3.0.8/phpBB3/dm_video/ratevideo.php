<?php
/**
*
* @package DM Video
* @version $Id: ratevideo.php 211 2009-12-18 10:23:29Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
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
include($phpbb_root_path . 'includes/message_parser.' . $phpEx);

// Some mod related variables and includes
$dm_video_path = (defined('DM_VIDEO_ROOT_PATH')) ? DM_VIDEO_ROOT_PATH : 'dm_video/';
include($phpbb_root_path . $dm_video_path . 'common.' . $phpEx);

// Do the session handling
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/dm_video');

// Main template variables for the navigation
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['DMV_VIDEO'],
	'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
));

// Set some variables
$video_id	= request_var('v', 0);
$cat_id 	= request_var('c', 0);

// Add form key
add_form_key('dm_video');

// We need some informations about the category we are in for the navigation
$cat_data = get_cat_info((int) $cat_id);

// Generate the navigation
generate_cat_nav($cat_data);

// Generate the sub categories
generate_cat_list((int) $cat_id);

// Select some data for the template
$sql_array = array(
    'SELECT'    => '*',

    'FROM'      => array(
        DM_VIDEO_TABLE => 'v'
    ),

    'WHERE'     =>  'video_id = ' . (int) $video_id,
);

$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql);

$row = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

$video_title = (string) $row['video_title'];
$video_singer = (string) $row['video_singer'];

$sql_array = array(
    'SELECT'    => '*',

    'FROM'      => array(
        DM_VIDEO_CATS_TABLE => 'c'
    ),

    'WHERE'     =>  'cat_id = ' . (int) $cat_id,
);

$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql);

$row = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

$cat_name = $row['cat_name'];
	
// Do the rating stuff
if (!$auth->acl_get('u_dm_video_rate'))
{
	trigger_error('DMV_RATING_NO_PERM');
}

if ($auth->acl_get('u_dm_video_rate'))
{
	if ( isset($_POST['submit']) )
	{
		if (!check_form_key('dm_video'))
		{
			trigger_error($user->lang['FORM_INVALID']);
		}

		$sql_array = array(
			'SELECT'    => 'v.video_votetotal, v.video_votesum, r.*',

			'FROM'      => array(
				DM_VIDEO_TABLE  => 'v'
			),

			'LEFT_JOIN' => array(
				array(
					'FROM'  => array(DM_VIDEO_RATE_TABLE => 'r'),
					'ON'    => 'v.video_id = r.video_id'
				)
			),

			'WHERE'     => 'v.video_id = ' . (int) $video_id . '
				AND r.user_id = ' . (int) $user->data['user_id'],
		);

		$sql = $db->sql_build_query('SELECT', $sql_array);

		// now run the query...
		$result = $db->sql_query($sql);

		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		if ( !$row['video_rating'] )
		{
			$already_rated = false;
		}
		else
		{
			$already_rated = true;
		}
		
		$rating = request_var('video_rating', 0);

		$old_rating = (int) $row['video_rating'];
		$video_votesum = (int) $row['video_votesum'];

		// Lets do the video ratings...
		if ($rating != 0 && !$already_rated)
		{
			$sql_ary = array(
				'video_id'		=> (int) $video_id,
				'user_id'		=> (int) $user->data['user_id'],
				'video_rating'	=> (int) $rating,
				'rating_date'	=> time(),
				'user_ip'		=> $user->ip,
			);

			$sql = 'INSERT INTO ' . DM_VIDEO_RATE_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
			$db->sql_query($sql);
			add_log('user', (int) $user->data['user_id'], 'LOG_USER_VIDEO_RATE', str_replace('%', '*', (int) $video_id));

			$sql = 'UPDATE ' . DM_VIDEO_TABLE . '
					SET video_votetotal = video_votetotal + 1,
						video_votesum = video_votesum + ' . $rating . '
					WHERE video_id = ' . (int) $video_id;
			$db->sql_query($sql);
		}
		else if ($rating != 0 && $already_rated)
		{
			$rating_old = $row['video_rating'];
			$sql_ary = array(
				'video_rating'	=> $rating,
			);

			$sql = 'UPDATE ' . DM_VIDEO_RATE_TABLE . ' 
					SET ' . $db->sql_build_array('UPDATE', $sql_ary) . ' 
					WHERE video_id = ' . (int) $video_id . ' 
						AND user_id = ' . (int) $user->data['user_id'];
			$db->sql_query($sql);

			$new_video_votesum = ($video_votesum-$old_rating+$rating);
			
			$sql = 'UPDATE ' . DM_VIDEO_TABLE . '
					SET video_votesum = ' . $new_video_votesum . '
					WHERE video_id = ' . (int) $video_id;
			$db->sql_query($sql);
			add_log('user', (int) $user->data['user_id'], 'LOG_USER_VIDEO_RATE_EDITED', str_replace('%', '*', (int) $video_id));
		}

		$template->assign_vars(array(
			'S_RATED_SUCCESSFUL'	=> true,
		));
	}
}

// This will check whether the user has already voted.
$s_hidden_fields = '';

$sql_array = array(
	'SELECT'	=> 'g.video_votetotal, g.video_votesum, r.*',
	'FROM'		=> array(
		DM_VIDEO_TABLE	=> 'g',
	),
	'LEFT_JOIN'	=> array(
		array(
			'FROM'	=> array(DM_VIDEO_RATE_TABLE => 'r'),
			'ON'	=> 'g.video_id = r.video_id'
		)
	),
	'WHERE'		=> 'g.video_id = ' . (int) $video_id . '
		AND r.user_id = ' . (int) $user->data['user_id'],
);

$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql);

$row = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

$user_rating = ((int) $row['video_rating'] == '') ? 0 : (int) $row['video_rating'];
$video_rating_select = get_rating_select($user_rating);

// Send the variables to the template
$template->assign_vars(array(
	'S_HAS_PERM_RATE'		=> $auth->acl_get('u_dm_video_rate'),

	'VIDEO_RATING_SELECT'	=> $video_rating_select,

	'RATING_TITLE'			=> sprintf($user->lang['DMV_RATING_TITLE'], (string) $video_title, (string) $video_singer),
	'VIDEO_TITLE' 			=> (string) $video_title,
	'VIDEO_SINGER'			=> (string) $video_singer,
	'VIDEO_CAT_NAME'		=> (string) $cat_name,
	'U_BACK_CAT'			=> append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "c=" . (int) $cat_id),

	'S_ACTION' 				=> append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v=" . (int) $video_id . "&c=" . (int) $cat_id),
	'S_HIDDEN_FIELDS' 		=> $s_hidden_fields,
	)
);
$db->sql_freeresult($result);

// Header information
page_header($user->lang['DMV_VIDEO'] . ' &bull; ' . censor_text($video_title));

// Template file to use
$template->set_filenames(array(
   'body' => $dm_video_path . 'ratevideo_body.html'
));

// Footer information
page_footer();

?>