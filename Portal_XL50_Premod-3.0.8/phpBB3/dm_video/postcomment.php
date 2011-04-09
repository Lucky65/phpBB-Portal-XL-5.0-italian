<?php
/**
*
* @package DM Video
* @version $Id: postcomment.php 228 2009-12-23 12:32:03Z Wuerzi $
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
include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'includes/message_parser.' . $phpEx);

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
$comment_id = request_var('p', 0);
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
		$sql_array = array(
			'SELECT'    => 'vn.*',

			'FROM'      => array(
				DM_VIDEO_CATS_TABLE => 'vn'
			),

			'WHERE'     =>  'vn.cat_id = ' . (int) $cat_id,
		);
		$sql = $db->sql_build_query('SELECT', $sql_array);
	break;
	
	case 'delete':
		$sql_array = array(
			'SELECT'	=> 'vd.*, vc.*, v.*',

			'FROM'		=> array(
				DM_VIDEO_COMMENT_TABLE	=> 'vd',
			),

			'LEFT_JOIN'	=> array(
				array(
					'FROM'	=> array(DM_VIDEO_TABLE => 'v'),
					'ON'	=> 'v.video_id = vd.video_id'
				),
				array(
					'FROM' => array(DM_VIDEO_CATS_TABLE => 'vc'),
					'ON'	=> 'v.video_cat_id = vc.cat_id'
				),
			),

			'WHERE'		=> 'vd.comment_id = ' . (int) $comment_id,
		);

		$sql = $db->sql_build_query('SELECT', $sql_array);
	break;
	
	case 'edit';
		$sql_array = array(
			'SELECT'	=> 'vd.*, vc.*, v.*',

			'FROM'		=> array(
				DM_VIDEO_COMMENT_TABLE	=> 'vd',
			),

			'LEFT_JOIN'	=> array(
				array(
					'FROM'	=> array(DM_VIDEO_TABLE => 'v'),
					'ON'	=> 'v.video_id = vd.video_id'
				),
				array(
					'FROM' => array(DM_VIDEO_CATS_TABLE => 'vc'),
					'ON'	=> 'v.video_cat_id = vc.cat_id'
				),
			),

			'WHERE'		=> 'vd.comment_id = ' . (int) $comment_id,
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

// Redirect unauthorized ones
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

		if (!$auth->acl_get('u_dm_video_comment_add', 'a_dm_video_comment_add'))
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
			$data['bbcode_checked']		= (isset($_POST['disable_bbcode'])) ? false : true;
			$data['smilies_checked']	= (isset($_POST['disable_smilies'])) ? false : true;
			$data['urls_checked']		= (isset($_POST['disable_magic_url'])) ? false : true;
			$data['video_user_id']		= (int) $user->data['user_id'];
			$data['video_user_name']	= (string) $user->data['username'];
			$data['video_user_colour']	= (string) $user->data['user_colour'];

			$back_link = append_sid("{$phpbb_root_path}{$dm_video_path}postcomment.$phpEx", "mode=new&amp;c=" . (int) $cat_id . "&amp;v=" . (int) $video_id);

			if(empty($data['message']))
			{
				trigger_error($user->lang['DMV_COMMENT_NEEDED'] . sprintf($user->lang['DMV_BACK_LINK3'],'<a href="' . $back_link . '">', '</a>'));
			}

			$uid = $bitfield = $options = ''; // will be modified by generate_text_for_storage
			generate_text_for_storage($data['message'], $uid, $bitfield, $options, $data['bbcode_checked'], $data['urls_checked'], $data['smilies_checked']);

			// Create array for video comment
			$sql_ary = array(
				'video_id'					=> (int) $video_id,
				'video_user_id'				=> (int) $user->data['user_id'],
				'video_username'			=> (string) $user->data['username'],
				'video_user_colour'			=> (string) $user->data['user_colour'],
				'video_time'				=> (string) $time,
				'video_comment'				=> (string) $data['message'],
				'enable_bbcode' 			=> $data['bbcode_checked'],
				'enable_smilies' 			=> $data['smilies_checked'],
				'enable_magic_url'			=> $data['urls_checked'],
				'comment_bbcode_bitfield'	=> $bitfield,
				'comment_bbcode_uid'		=> $uid,
				'comment_bbcode_options'	=> $options,
			);

			$db->sql_query('INSERT INTO ' . DM_VIDEO_COMMENT_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
			add_log('user', $user->data['user_id'], 'LOG_USER_COMMENT_ADDED', str_replace('%', '*', (int) $video_id));
			$redirect_url = append_sid("{$phpbb_root_path}{$dm_video_path}showcomments.$phpEx", "v=" . (int) $video_id . "&amp;c=" . (int) $cat_id);
			trigger_error($user->lang['DMV_COMMENT_ADDED'] . sprintf($user->lang['DMV_BACK_LINK_COMMENT'],'<a href="' . $redirect_url . '">', '</a>'));
		}

		$template->assign_vars(array(
			'VIDEO_COMMENT'				=> request_var('message', '', true),

			'L_POST_A' 					=> ($mode == 'edit') ? $user->lang['DMV_COMMENT_EDIT'] : $user->lang['DMV_COMMENT_ADD'],

			'S_EDIT_MODE'				=> ($mode == 'edit') ? true : false,
			'S_FORM_ENCTYPE'			=> ' enctype="multipart/form-data"',
			'S_BBCODE_ALLOWED'			=> $user->optionget('bbcode'),
			'S_BBCODE_IMG'				=> $user->optionget('bbcode'),
			'S_LINKS_ALLOWED'			=> $user->optionget('bbcode'),
			'S_BBCODE_URL'				=> $user->optionget('bbcode'),
			'S_BBCODE_FLASH'			=> $user->optionget('bbcode'),
			'S_BBCODE_QUOTE'			=> true,
			'VIDEO_ID'					=> (int) $video_id,
			'BBCODE_STATUS'				=> sprintf($user->lang['BBCODE_IS_ON'], '<a href="' . append_sid("{$phpbb_root_path}faq.$phpEx", "mode=bbcode") . '">', '</a>'),
		));
	break;
	
	case 'edit':
		$video_user_id 	= (int) $cat_data['video_user_id'];
		decode_message($cat_data['video_comment'], $cat_data['comment_bbcode_uid']);
		$post_message 	= (string) $cat_data['video_comment'];
		
		if ($submit)
		{
			if (!check_form_key('dm_video'))
			{
				trigger_error($user->lang['FORM_INVALID']);
			}

			$data['message']			= utf8_normalize_nfc(request_var('message', '', true));
			$data['bbcode_checked']		= (int) $cat_data['enable_bbcode'];
			$data['smilies_checked']	= (int) $cat_data['enable_smilies'];
			$data['urls_checked']		= (int) $cat_data['enable_magic_url'];

			if (((int) $video_user_id != (int) $user->data['user_id'] && !$auth->acl_get('u_dm_video_comment_edit')))
			{
				$redirect_url = append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx");
				trigger_error($user->lang['NOT_AUTHORISED'] . sprintf($user->lang['DMV_BACK_LINK4'],'<a href="' . $redirect_url . '">', '</a>'));
			}

			$uid = $bitfield = $options = ''; // will be modified by generate_text_for_storage
			generate_text_for_storage($data['message'], $uid, $bitfield, $options, $data['bbcode_checked'], $data['urls_checked'], $data['smilies_checked']);

			// Create array for video comment
			$sql_edit_ary = array(
				'video_comment'				=> (string) $data['message'],
				'enable_bbcode' 			=> (int) $data['bbcode_checked'],
				'enable_smilies' 			=> (int) $data['smilies_checked'],
				'enable_magic_url'			=> (int) $data['urls_checked'],
				'comment_bbcode_bitfield'	=> $bitfield,
				'comment_bbcode_uid'		=> $uid,
				'comment_bbcode_options' 	=> $options,
			);

			$db->sql_query('UPDATE ' . DM_VIDEO_COMMENT_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_edit_ary) . ' WHERE comment_id = ' . (int) $comment_id);
			add_log('user', (int) $user->data['user_id'], 'LOG_USER_COMMENT_EDITED', str_replace('%', '*', (int) $comment_id));

			$redirect_url = append_sid("{$phpbb_root_path}{$dm_video_path}showcomments.$phpEx", "v=" . (int) $cat_data['video_id'] . "&amp;c=" . (int) $cat_data['cat_id']);
			trigger_error($user->lang['DMV_COMMENT_EDITED'] . sprintf($user->lang['DMV_BACK_LINK_COMMENT'],'<a href="' . $redirect_url . '">', '</a>'));
		}

		$template->assign_vars(array(
			'VIDEO_COMMENT'		=> (string) $post_message,

			'L_POST_A' 			=> ($mode == 'edit') ? $user->lang['DMV_COMMENT_EDIT'] : $user->lang['DMV_COMMENT_NEW'],

			'S_FORM_ENCTYPE'	=> ' enctype="multipart/form-data"',
			'S_BBCODE_ALLOWED'	=> $user->optionget('bbcode'),
			'S_BBCODE_IMG'		=> $user->optionget('bbcode'),
			'S_LINKS_ALLOWED'	=> $user->optionget('bbcode'),
			'S_BBCODE_URL'		=> $user->optionget('bbcode'),
			'S_BBCODE_FLASH'	=> $user->optionget('bbcode'),
			'S_BBCODE_QUOTE'	=> true,
			'VIDEO_ID'			=> (int) $video_id,
			'BBCODE_STATUS'		=> sprintf($user->lang['BBCODE_IS_ON'], '<a href="' . append_sid("{$phpbb_root_path}faq.$phpEx", "mode=bbcode") . '">', '</a>'),
		));
	break;
	
	case 'delete':
		$show_video_id = $cat_data['video_id'];
		
		if (!$auth->acl_get('u_dm_video_comment_del') || !$auth->acl_get('a_dm_video_edit'))
		{
			trigger_error('NOT_AUTHORISED');
		}

		$s_hidden_fields = build_hidden_fields(array(
			'p'		=> (int) $comment_id,
			'mode'	=> 'delete')
		);

		if (confirm_box(true))
		{
			$sql = 'DELETE FROM ' . DM_VIDEO_COMMENT_TABLE . ' WHERE comment_id = ' . (int) $comment_id;
			$db->sql_query($sql);
			$cache->destroy('sql', DM_VIDEO_COMMENT_TABLE);
			add_log('user', $user->data['user_id'], 'LOG_USER_COMMENT_DELETED', str_replace('%', '*', $comment_id));

			$redirect_url = append_sid("{$phpbb_root_path}{$dm_video_path}index.$phpEx");
			meta_refresh(3, $redirect_url);
			trigger_error($user->lang['DMV_COMMENT_DELETED'] . '<br /><br />' . sprintf($user->lang['DMV_BACK_VIDEO'],'<a href="' . $redirect_url . '">', '</a>'));
		}
		else
		{
			if (isset($_POST['cancel']))
			{
				redirect(append_sid("{$phpbb_root_path}{$dm_video_path}showcomments.$phpEx", "v=" . (int) $show_video_id . "&amp;c=" . (int) $show_cat_id));
			}
			else
			{
				confirm_box(false, 'DMV_COMMENT_DEL', $s_hidden_fields);
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

// Local template variables for the navigation
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['DMV_COMMENT'],
));

// Header information
page_header(($mode == 'edit') ? $user->lang['DMV_COMMENT_EDIT'] : $user->lang['DMV_COMMENT_ADD']);
$action = ($mode == 'new') ? $user->lang['DMV_COMMENT_NEW'] : $user->lang['DMV_COMMENT_EDIT'];

page_header($user->lang['DMV_VIDEO'] . ' &bull; ' . $action);

// Template file to use
$template->set_filenames(array(
	'body' => $dm_video_path . 'postcomment_body.html'
));

// Footer information
page_footer();

?>