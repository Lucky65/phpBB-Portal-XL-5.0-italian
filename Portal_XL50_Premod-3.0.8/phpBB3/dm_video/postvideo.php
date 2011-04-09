<?php
/**
*
* @package DM Video
* @version $Id: postvideo.php 232 2009-12-26 16:46:31Z femu $
* @copyright (c) 2008, 2009 Die Muellers http://die-muellers.org
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
include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'includes/message_parser.' . $phpEx);
include($phpbb_root_path . 'includes/functions_privmsgs.' . $phpEx);

$dm_video_path = (defined('DM_VIDEO_ROOT_PATH')) ? DM_VIDEO_ROOT_PATH : 'dm_video/';
include($phpbb_root_path . $dm_video_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup(array('posting', 'mods/dm_video'));

// Set some variables
$mode 		= request_var('mode', '');
$cat_id 	= request_var('c', 0);
$video_id 	= request_var('v', 0);
$submit		= (isset($_POST['post'])) ? true : false;
$user_id 	= (int) $user->data['user_id'];

$error 		= '';
$time 		= time();

// Add form key
add_form_key('dm_video');

// Main template variables for the navigation
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['DMV_VIDEO'],
	'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"),
));

// Needed switches
switch ($mode)
{
	case 'new':
		$sql_array = 	array(
			'SELECT'    => 	'*',

			'FROM'      => 	array(
				DM_VIDEO_CATS_TABLE =>	'c',
			),

			'WHERE'     =>  'cat_id = ' . (int) $cat_id,
		);

		$sql = $db->sql_build_query('SELECT', $sql_array);
	break;
	
	case 'edit';
		$sql_array =	array(
			'SELECT'	=> 	'vc.*, v.*',

			'FROM'		=> 	array(
				DM_VIDEO_TABLE	=> 	'v',
			),

			'LEFT_JOIN'	=>	array(
				array(
					'FROM'	=> 	array(DM_VIDEO_CATS_TABLE => 'vc'),
					'ON'	=> 	'v.video_cat_id = vc.cat_id'
				),
			),

			'WHERE'		=>	'v.video_id = ' . (int) $video_id,
		);

		$sql = $db->sql_build_query('SELECT', $sql_array);
	break;
	
	case 'delete':
		$sql_array =	array(
			'SELECT'	=> 	'vd.*, vc.*, v.*',

			'FROM'		=> 	array(
				DM_VIDEO_COMMENT_TABLE	=> 	'vd',
			),

			'LEFT_JOIN'	=>	array(
				array(
					'FROM'	=> 	array(DM_VIDEO_TABLE => 'v'),
					'ON'	=> 	'v.video_id = vd.video_id'
				),
				array(
					'FROM'	=> 	array(DM_VIDEO_CATS_TABLE => 'vc'),
					'ON'	=> 	'v.video_cat_id = vc.cat_id'
				),
			),

			'WHERE'		=>	'v.video_id = ' . (int) $video_id,
		);

		$sql = $db->sql_build_query('SELECT', $sql_array);
	break;
	
	default:
	break;
}
$result = $db->sql_query($sql);
$cat_data = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

$video_cat_name = (string) $cat_data['cat_name'];
$video_parent_cat_id = (int) $cat_data['parent_id'];
$show_cat_id = (int) $cat_data['cat_id'];

// Redirect bots
if ($user->data['is_bot'])
{
	switch ($mode)
	{
		default:
			redirect(append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx"));
		break;
	}
}

// Generate the navigation
generate_cat_nav($cat_data);

// Main working switches here
switch ($mode)
{
	case 'new':

		if (!$auth->acl_get('u_dm_video_add'))
		{
			trigger_error('NOT_AUTHORISED');
		}
		
		if($submit)
		{
			if (!check_form_key('dm_video'))
			{
				trigger_error($user->lang['FORM_INVALID']);
			}

			$data['video_title']		= utf8_normalize_nfc(request_var('video_title', '', true));
			$data['video_singer']		= utf8_normalize_nfc(request_var('video_singer', '', true));
			$data['video_url'] 			= utf8_normalize_nfc(request_var('video_url', '', true));
			$data['video_duration']		= utf8_normalize_nfc(request_var('video_duration', '', true));
			$data['video_image'] 		= utf8_normalize_nfc(request_var('video_image', '', true));
			$data['message']			= utf8_normalize_nfc(request_var('message', '', true));
			$data['video_cat_id']		= (int) $cat_id;
			$data['bbcode_checked']		= (isset($_POST['disable_bbcode'])) ? false : true;
			$data['smilies_checked']	= (isset($_POST['disable_smilies'])) ? false : true;
			$data['urls_checked']		= (isset($_POST['disable_magic_url'])) ? false : true;
			$data['video_user_id']		= (int) $user->data['user_id'];
			$data['video_user_name']	= (string) $user->data['username'];
			$data['video_user_colour']	= (string) $user->data['user_colour'];

			if ( $auth->acl_get('a_dm_video_auto_announce') )
			{
				$data['video_approval']	= request_var('video_approval', 1);
			}
			else
			{
				$data['video_approval']	= request_var('video_approval', 0);
			}

			$back_link = append_sid("{$phpbb_root_path}{$dm_video_path}postvideo.$phpEx", "mode=new&amp;c=" . (int) $cat_id);

			if(empty($data['video_title']) || empty($data['video_url']))
			{
				trigger_error($user->lang['DMV_NEED_DATA'] . sprintf($user->lang['DMV_BACK_LINK3'],'<a href="' . $back_link . '">', '</a>'));
			}

			// Check if UPS exists and video points is enabled
			if ( defined('IN_ULTIMATE_POINTS') && $dmv_config['video_points_enable'] && $config['points_enable'] )
			{
				if (!function_exists('add_points') || !function_exists('substract_points'))
				{
					includes($phpbb_root_path . 'includes/points/functions_points.' . $phpEx);
				}

				// Add the points
				add_points((int) $user->data['user_id'], $dmv_config['video_points_value']);
			}

			$uid = $bitfield = $options = ''; // will be modified by generate_text_for_storage
			generate_text_for_storage($data['message'], $uid, $bitfield, $options, $data['bbcode_checked'], $data['urls_checked'], $data['smilies_checked']);

			// Create array for video 
			$sql_ary = array(
				'video_title'			=> (string) $data['video_title'],
				'video_songtext'		=> (string) $data['message'],
				'video_url'				=> (string) $data['video_url'],
				'video_singer'			=> (string) $data['video_singer'],
				'video_duration'		=> (string) $data['video_duration'],
				'video_image'			=> (string) $data['video_image'],
				'video_approval'		=> (int) $data['video_approval'],
				'video_user_id'			=> (int) $user->data['user_id'],
				'video_username'		=> (string) $user->data['username'],
				'video_time'			=> $time,
				'video_cat_id'			=> (int) $data['video_cat_id'],
				'last_poster_id'		=> (int) $user->data['user_id'],
				'last_poster_name'		=> (string) $user->data['username'],
				'last_poster_colour'	=> (string) $user->data['user_colour'],
				'last_poster_time'		=> $time,
				'last_poster_cat_id'	=> (int) $data['video_cat_id'],
				'enable_bbcode' 		=> $data['bbcode_checked'],
				'enable_smilies' 		=> $data['smilies_checked'],
				'enable_magic_url'		=> $data['urls_checked'],
				'bbcode_bitfield'		=> $bitfield,
				'bbcode_uid'			=> $uid,
				'bbcode_options'		=> $options,
				'video_points'			=> (int) $dmv_config['video_points_value']
			);

			$db->sql_query('INSERT INTO ' . DM_VIDEO_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
			add_log('user', (int) $user->data['user_id'], 'LOG_USER_VIDEO_ADDED', str_replace('%', '*', (string) $data['video_title']));


			// Directly announce videos, if admin posts videos
			if ( $auth->acl_get('a_dm_video_auto_announce') )
			{
				// Check if announcement is enabled
				// Read out config values 
				$sql = 'SELECT *
					FROM ' . DM_VIDEO_CONFIG_TABLE;
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$video_config[$row['config_name']] = $row['config_value'];
				}
				$db->sql_freeresult($result);

				$sql_array = array(
					'SELECT'    => '*',

					'FROM'      => array(
						DM_VIDEO_TABLE  => 'v'
					),

					'WHERE'     => 'video_user_id = ' . (int) $user->data['user_id'] . '
						AND video_title = "' . $data['video_title'] . '"',

					'ORDER_BY'  => 'video_id DESC'
				);
				$sql = $db->sql_build_query('SELECT', $sql_array);
				$result = $db->sql_query_limit($sql, 1);

				while ($row = $db->sql_fetchrow($result))
				{
					$video_title 	= (string) $row['video_title'];
					$video_singer 	= (string) $row['video_singer'];
					$video_duration = (string) $row['video_duration'];
					$video_link 	= '[url=' . generate_board_url() . '/dm_video/showvideo.php?v=' . (int) $row['video_id'] . '&amp;c=' . (int) $row['video_cat_id'] . ']' . $user->lang['DMV_CLICK'] . '[/url]';
					$video_user_id 	= (int) $row['video_user_id'];
					$video_id 		= (int) $row['video_id'];
				}
				$db->sql_freeresult($result);

				if ( $video_config['video_announce_enable'] )
				{
					$video_subject = sprintf($user->lang['DMV_ANNOUNCE_TITLE'], (string) $video_title);
					$video_msg = sprintf($user->lang['DMV_ANNOUNCE_MSG'], (string) $video_title, (string) $video_singer, (string) $video_duration, $video_link);

					create_announcement($video_subject, $video_msg, $video_config['video_announce_forum_id']);
					$sql_ary = array(
						'video_announced'	=> 1,
					);
					$db->sql_query('UPDATE ' . DM_VIDEO_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . ' WHERE video_id = ' . (int) $video_id);
				}
			}

			if ( !$auth->acl_get('a_dm_video_auto_announce') )
			{
				// Prepare data to send PM about new videos
				$sql_array = array(
					'SELECT'    => 'config_name, config_value',
					'FROM'      => array(
						DM_VIDEO_CONFIG_TABLE => 'c',
					),
				);
				$sql = $db->sql_build_query('SELECT', $sql_array);
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{
					$video_config[$row['config_name']] = $row['config_value'];
				}
				$db->sql_freeresult($result);
				
				// note that multibyte support is enabled here 
				$video_pm_from		= (string) $video_config['new_video_pm_from'];
				$video_pm_to		= (string) $video_config['new_video_pm_to'];
				$new_video_subject	= $user->lang['DMV_NEW_VIDEOS_PM_SUBJECT'];
				$new_video_text		= $user->lang['DMV_NEW_VIDEOS_PM'];

				// variables to hold the parameters for submit_pm
				$poll = $uid = $bitfield = $options = ''; 
				generate_text_for_storage($new_video_subject, $uid, $bitfield, $options, false, false, false);
				generate_text_for_storage($new_video_text, $uid, $bitfield, $options, true, true, true);

				$data = array( 
					'address_list'		=> array ('u' => array((string) $video_pm_to => 'to')),
					'from_user_id'		=> (string) $video_pm_from,
					'from_username'		=> 'DM Video',
					'icon_id'			=> 0,
					'from_user_ip'		=> (int) $user->data['user_ip'],
					 
					'enable_bbcode'		=> true,
					'enable_smilies'	=> true,
					'enable_urls'		=> true,
					'enable_sig'		=> true,

					'message'			=> (string) $new_video_text,
					'bbcode_bitfield'	=> $bitfield,
					'bbcode_uid'		=> $uid,
				);

				submit_pm('post', $new_video_subject, $data, false);
			}
			
			$redirect_url = append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "c=" . (int) $cat_id);

			if ( !$auth->acl_get('a_dm_video_auto_announce') )
			{
				trigger_error($user->lang['DMV_ADDED'] . sprintf($user->lang['DMV_BACK_LINK'],'<a href="' . $redirect_url . '">', '</a>'));
			}
			else
			{
				trigger_error($user->lang['DMV_ADDED_ADMIN'] . sprintf($user->lang['DMV_BACK_LINK'],'<a href="' . $redirect_url . '">', '</a>'));
			}
		}

		// Start assigning vars for main posting page ...
		$template->assign_block_vars('navlinks', array(
			'FORUM_NAME'	=> $user->lang['DMV_ADD_VIDEO'],
			'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}postvideo.$phpEx", "mode=new&amp;c=" . (int) $cat_id),
		));

		$template->assign_vars(array(
			'VIDEO_URL' 		=> request_var('video_url', '', true),
			'VIDEO_TITLE'		=> request_var('video_title', '', true),
			'VIDEO_SINGER'		=> request_var('video_singer', '', true),
			'VIDEO_SONGTEXT'	=> request_var('message', '', true),
			'VIDEO_DURATION'	=> request_var('video_duration', '', true),
			'VIDEO_IMAGE'		=> request_var('video_image', '', true),

			'L_POST_A' 			=> ($mode == 'edit') ? $user->lang['DMV_EDIT_VIDEO'] : $user->lang['DMV_ADD_VIDEO'],

			'S_EDIT_MODE'		=> ($mode == 'edit') ? true : false,
			'S_EDIT'			=> ($mode == 'edit') ? true : false,
			'S_FORM_ENCTYPE'	=> ' enctype="multipart/form-data"',
			'S_BBCODE_ALLOWED'	=> $user->optionget('bbcode'),
			'S_BBCODE_IMG'		=> $user->optionget('bbcode'),
			'S_LINKS_ALLOWED'	=> $user->optionget('bbcode'),
			'S_BBCODE_URL'		=> $user->optionget('bbcode'),
			'S_BBCODE_FLASH'	=> $user->optionget('bbcode'),
			'S_BBCODE_QUOTE'	=> true,
			
			'CAT_ID'			=> (int) $cat_id,
			'BBCODE_STATUS'		=> sprintf($user->lang['BBCODE_IS_ON'], '<a href="' . append_sid("{$phpbb_root_path}faq.$phpEx", "mode=bbcode") . '">', '</a>'),
		));
	break;

	case 'edit':
		decode_message($cat_data['video_songtext'], $cat_data['bbcode_uid']);
		$post_message = $cat_data['video_songtext'];

		if (!$auth->acl_get('u_dm_video_edit'))
		{
			trigger_error('NOT_AUTHORISED');
		}
		
		if($submit)
		{
			if (!check_form_key('dm_video'))
			{
				trigger_error($user->lang['FORM_INVALID']);
			}

			$data['message']			= utf8_normalize_nfc(request_var('message', '', true));
			$data['video_title'] 		= request_var('video_title', '', true);
			$data['video_url']			= request_var('video_url', '', true);
			$data['video_singer']		= request_var('video_singer', '', true);
			$data['video_duration']		= request_var('video_duration', '', true);
			$data['video_image']		= request_var('video_image', '', true);
			$data['bbcode_checked']		= (string) $cat_data['enable_bbcode'];
			$data['smilies_checked']	= (string) $cat_data['enable_smilies'];
			$data['urls_checked']		= (string) $cat_data['enable_magic_url'];

			$uid = $bitfield = $options = ''; // will be modified by generate_text_for_storage
			generate_text_for_storage($data['message'], $uid, $bitfield, $options, $data['bbcode_checked'], $data['urls_checked'], $data['smilies_checked']);

			// Create SQL array for editing
			$sql_edit_ary = array(
				'video_title'		=> (string) $data['video_title'],
				'video_songtext'	=> (string) $data['message'],
				'video_url'			=> (string) $data['video_url'],
				'video_singer'		=> (string) $data['video_singer'],
				'video_duration'	=> (string) $data['video_duration'],
				'video_image'		=> (string) $data['video_image'],
				'enable_bbcode' 	=> (string) $data['bbcode_checked'],
				'enable_smilies' 	=> (string) $data['smilies_checked'],
				'enable_magic_url'	=> (string) $data['urls_checked'],
				'bbcode_bitfield'	=> $bitfield,
				'bbcode_uid'		=> $uid,
				'bbcode_options' 	=> $options,
			);

			$db->sql_query('UPDATE ' . DM_VIDEO_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_edit_ary) . ' WHERE video_id = ' . (int) $video_id);
			add_log('user', $user->data['user_id'], 'LOG_USER_VIDEO_EDITED', str_replace('%', '*', (int) $video_id));
			$cache->destroy('sql', DM_VIDEO_TABLE);

			$redirect_url = append_sid("{$phpbb_root_path}{$dm_video_path}viewcat.$phpEx", "c=" . (int) $cat_id);
			trigger_error($user->lang['DMV_EDITED'] . sprintf($user->lang['DMV_BACK_LINK'],'<a href="' . $redirect_url . '">', '</a>'));
		}

		// Start assigning vars for main posting page ...
		$template->assign_block_vars('navlinks', array(
			'FORUM_NAME'	=> $user->lang['DMV_EDIT_VIDEO'],
			'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}{$dm_video_path}postvideo.$phpEx", "mode=edit&amp;v=" . (int) $video_id . "&amp;c=" . (int) $cat_id),
		));

		$template->assign_vars(array(
			'VIDEO_URL' 		=> (string) $cat_data['video_url'],
			'VIDEO_TITLE'		=> (string) $cat_data['video_title'],
			'VIDEO_SINGER'		=> (string) $cat_data['video_singer'],
			'VIDEO_SONGTEXT'	=> (string) $post_message,
			'VIDEO_DURATION'	=> (string) $cat_data['video_duration'],
			'VIDEO_IMAGE'		=> (string) $cat_data['video_image'],

			'L_POST_A' 			=> ($mode == 'edit') ? $user->lang['DMV_EDIT_VIDEO'] : $user->lang['DMV_ADD_VIDEO'],

			'S_EDIT_MODE'		=> ($mode == 'edit') ? true : false,
			'S_EDIT'			=> ($mode == 'edit') ? true : false,
			'S_FORM_ENCTYPE'	=> ' enctype="multipart/form-data"',
			'S_BBCODE_ALLOWED'	=> $user->optionget('bbcode'),
			'S_BBCODE_IMG'		=> $user->optionget('bbcode'),
			'S_LINKS_ALLOWED'	=> $user->optionget('bbcode'),
			'S_BBCODE_URL'		=> $user->optionget('bbcode'),
			'S_BBCODE_FLASH'	=> $user->optionget('bbcode'),
			'S_BBCODE_QUOTE'	=> true,
			
			'CAT_ID'			=> (int) $cat_id,
			'BBCODE_STATUS'		=> sprintf($user->lang['BBCODE_IS_ON'], '<a href="' . append_sid("{$phpbb_root_path}faq.$phpEx", "mode=bbcode") . '">', '</a>'),
		));
	break;
	
	case 'delete':
		if (!$auth->acl_get('u_dm_video_del') || !$auth->acl_get('a_dm_video_edit'))
		{
			trigger_error('NOT_AUTHORISED');
		}

		$s_hidden_fields = build_hidden_fields(array(
			'p'		=> (int) $video_id,
			'mode'	=> 'delete')
		);

		if (confirm_box(true))
		{
			// Delete points, if UPS exists
			if ( defined('IN_ULTIMATE_POINTS') )
			{
				// Select video data
				$sql_array = array(
					'SELECT'    => '*',
					'FROM'      => array(
						DM_VIDEO_TABLE => 'v',
					),

					'WHERE'	=>	'video_id = ' . (int) $video_id,
				);
				$sql = $db->sql_build_query('SELECT', $sql_array);
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{
						$video_points = (int) $row['video_points'];
						$video_user_id = (int) $row['video_user_id'];
				}
				$db->sql_freeresult($result);

				// Pick up points  from video poster
				$sql_array = array(
					'SELECT'    => 'user_points',
					'FROM'      => array(
						USERS_TABLE => 'u',
					),

					'WHERE'	=>	'user_id = ' . (int) $video_user_id,
				);
				$sql = $db->sql_build_query('SELECT', $sql_array);
				$result = $db->sql_query($sql);

				$current_user_points = $db->sql_fetchfield('user_points');
				$db->sql_freeresult($result);

				// Substract the points from the user account
				$sql_ary = array(
					'user_points'	=> ($current_user_points - $video_points),
				);
				$db->sql_query('UPDATE ' . USERS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . ' WHERE user_id = ' . (int) $video_user_id);
			}

			$sql = 'DELETE FROM ' . DM_VIDEO_TABLE . ' WHERE video_id = ' . (int) $video_id;
			$db->sql_query($sql);
			add_log('user', (int) $user->data['user_id'], 'LOG_USER_VIDEO_DELETED', str_replace('%', '*', (int) $video_id));
			$cache->destroy('sql', DM_VIDEO_TABLE);
			
			$sql = 'DELETE FROM ' . DM_VIDEO_COMMENT_TABLE . ' WHERE video_id = ' . (int) $video_id;
			$db->sql_query($sql);
			$cache->destroy('sql', DM_VIDEO_COMMENT_TABLE);

			$redirect_url = append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx");
			meta_refresh(3, $redirect_url);
			trigger_error($user->lang['DMV_DELETED_VIDEO'] . '<br /><br />' . sprintf($user->lang['DMV_BACK_VIDEO'],'<a href="' . $redirect_url . '">', '</a>'));
		}
		else
		{
			if (isset($_POST['cancel']))
			{
				redirect(append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v=" . (int) $video_id . "&amp;c=" . (int) $cat_id));
			}
			else
			{
				confirm_box(false, 'DMV_DELETE_VIDEO', $s_hidden_fields);
			}
		}
	break;
	
	default:
	break;
}

// Build custom bbcodes array
display_custom_bbcodes();
if($user->optionget('smilies'))
{
	generate_smilies('inline', 1);
}

// Header information
page_header(($mode == 'edit') ? $user->lang['DMV_EDIT_VIDEO'] : $user->lang['DMV_ADD_VIDEO']);
page_header($user->lang['DMV_VIDEO'] . ' &bull; ' . $user->lang['DMV_INDEX']);

// Template file to use
$template->set_filenames(array(
	'body' => $dm_video_path . 'postvideo_body.html'
));

// Footer information
page_footer();

?>