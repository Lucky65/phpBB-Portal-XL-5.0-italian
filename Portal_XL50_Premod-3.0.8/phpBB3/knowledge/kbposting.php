<?php
/**
*
* @author Tobi Schaefer http://www.tas2580.de/
*
* @package Knowledge_Base
* @version $Id: kbposting.php,v 1.1.1.1 2009/05/15 05:15:38 damysterious Exp $
* @copyright (c) 2007 SEO phpBB http://www.phpbb-seo.de
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
include($phpbb_root_path . 'includes/functions_kb.' . $phpEx);
include('kb_common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup(array('posting', 'mods/kb'));

if (!$auth->acl_get('u_add_kb', 'u_edit_kb', 'u_del_kb', 'm_edit_kb', 'm_del_kb'))
{
	trigger_error('NOT_AUTHORISED');
}

$config['allow_pm_attach'] = $config['allow_attachments'];

$submit			= (isset($_POST['post'])) ? true : false;
$preview		= (isset($_POST['preview'])) ? true : false;
$id 			= request_var('id', 0);
$refresh		= (isset($_POST['add_file']) || isset($_POST['delete_file'])) ? true : false;
$error			= array();
$mode			= request_var('mode', '');

$data['post_id']			= request_var('post_id', 0);
$data['cat_id'] 			= request_var('cat_id', 0);
$data['type_id']			= request_var('type_id', 0);
$data['user_id']			= request_var('user', 0);
$data['post_time'] 			= request_var('post_time', time());
$data['page_uri'] 			= request_var('page_uri', '');
$data['edit_reason']		= utf8_normalize_nfc(request_var('edit_reason', '', true));
$data['title'] 				= utf8_normalize_nfc(request_var('title', '', true));
$data['description'] 		= utf8_normalize_nfc(request_var('description', '', true));
$data['message'] 			= $post_message = utf8_normalize_nfc(request_var('message', '', true));
$data['bbcode_checked']		= (isset($_POST['disable_bbcode'])) ? false : true;
$data['smilies_checked']	= (isset($_POST['disable_smilies'])) ? false : true;
$data['urls_checked']		= (isset($_POST['disable_magic_url'])) ? false : true;
$data['activ']				= request_var('activ', 0);
$data['post_attachment']	= request_var('post_attachment', 0);

if ($mode == 'popup')
{
	upload_popup();
	exit_handler();
}

$message_parser = new parse_message();
$poll_bbcode = new bbcode();

if ($auth->acl_get('u_attach') && $config['allow_attachments'])
{
	$message_parser->get_submitted_attachment_data();
	$message_parser->parse_attachments('fileupload', $mode, 0, $submit, $preview, $refresh);
}

// preview
if ($preview == true)
{
	$uid = $bitfield = $options = ''; // will be modified by generate_text_for_storage
	generate_text_for_storage($data['message'], $uid, $bitfield, $options, $data['bbcode_checked'], $data['urls_checked'], $data['smilies_checked']);
	$preview_message = generate_text_for_display($data['message'], $uid, $bitfield, $options);

	// Attachment Preview
	if (sizeof($message_parser->attachment_data))
	{
		$template->assign_var('S_HAS_ATTACHMENTS', true && $auth->acl_get('u_attach'));
	
		$update_count = array();
		$attachment_data = $message_parser->attachment_data;
		parse_attachments(0, $preview_message, $attachment_data, $update_count, true);

		foreach ($attachment_data as $i => $attachment)
		{
			$template->assign_block_vars('attachment', array(
				'DISPLAY_ATTACHMENT'	=> $attachment)
			);
		}
		unset($attachment_data);
	}

	$template->assign_vars(array(
		'PREVIEW_SUBJECT'	=> $data['title'],
		'PREVIEW_MESSAGE'	=> $preview_message,
		'S_DISPLAY_PREVIEW'	=> true)
	);
}

// Make SQL array
if ($submit == true && $preview == false)
{
	if (!check_form_key('kb_posting'))
	{
		$error[] = $user->lang['FORM_INVALID'];
	}

	if(empty($data['title']) || empty($data['message']) || empty($data['cat_id']))
	{
		$error[] = $user->lang['NEED_INPUT'];
	}

	$uid = $bitfield = $options = ''; // will be modified by generate_text_for_storage
	generate_text_for_storage($data['message'], $uid, $bitfield, $options, $data['bbcode_checked'], $data['urls_checked'], $data['smilies_checked']);

	$sql_ary = array(
		'titel'				=> $db->sql_escape($data['title']),
		'article'			=> $data['message'],
		'page_uri'			=> $data['page_uri'],
		'description'		=> $db->sql_escape($data['description']),
		'cat_id'			=> $data['cat_id'],
		'type_id'			=> $data['type_id'],
		'enable_bbcode' 	=> $data['bbcode_checked'],
		'enable_smilies' 	=> $data['smilies_checked'],
		'enable_magic_url'	=> $data['urls_checked'],
		'post_id'			=> $data['post_id'],
		'last_edit_user'	=> $user->data['user_id'],
		'last_change'		=> time(),
		'bbcode_bitfield'	=> $bitfield,
		'bbcode_uid'		=> $uid,
		'bbcode_options' 	=> $options,
		'has_attachment'	=> sizeof($message_parser->attachment_data) ? '1' : '0',
	);
}

// submit
if ($submit == true && $mode != 'edit' && $preview == false && $auth->acl_get('u_add_kb') && !sizeof($error))
{
	$sql_ary1 = array(
		'post_time'			=> time(),
		'user_id'			=> $user->data['user_id'],
	);
	$sql_ary = array_merge($sql_ary, $sql_ary1);

	$db->sql_query('INSERT INTO ' . KB_ARTICLE_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
	$article_id = $db->sql_nextid();

	if ($auth->acl_get('u_attache_kb') && $config['allow_attachments'])
	{
		$attach_data = array(
			'poster_id'				=> $user->data['user_id'],
			'post_id'				=> $article_id,
			'attachment_data'		=> $message_parser->attachment_data,
		);
		post_attacement($attach_data);
	}
	article_log($article_id, $user->lang['ARTICLE_POSTET']);

	if(isset($_POST['activ']))
	{
		activate_article($article_id);
		$redirect_url = article_link($article_id, $data['page_uri']);
		meta_refresh(3, $redirect_url);
		trigger_error($user->lang['ARTICLE_ADDED_AKTIV'] . '<br /><br />' . sprintf($user->lang['BACK_TO_KB'], '<a href="' . append_sid("{$kb_root_path}") . '">', '</a>') . '<br /><br />'. sprintf($user->lang['BACK_TO_ARTICLE'], '<a href="' . $redirect_url . '">', '</a>'));
	}
	else
	{
		$redirect_url = append_sid("{$kb_root_path}");
		meta_refresh(3, $redirect_url);
		trigger_error($user->lang['ARTICLE_ADDED'] . '<br /><br />' . sprintf($user->lang['BACK_TO_KB'], '<a href="' . append_sid("{$kb_root_path}") . '">', '</a>'));
	}
}

// Edit
if ($mode == 'edit' && ($auth->acl_get('u_edit_kb') || $auth->acl_get('m_edit_kb')) && $preview == false && !sizeof($error))
{
	$sql = 'SELECT *
		FROM ' . KB_ARTICLE_TABLE . '
		WHERE article_id = ' . $id;
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);


	if ($row['user_id'] != $user->data['user_id'] && !$auth->acl_get('m_edit_kb'))
	{
		$redirect_url = append_sid("{$kb_root_path}");
		meta_refresh(3, $redirect_url);
		trigger_error($user->lang['NOT_AUTHORISED'] . '<br /><br />' . sprintf($user->lang['BACK_TO_KB'], '<a href="' . append_sid("{$kb_root_path}") . '">', '</a>'));
	}


	if (empty($row))
	{
		$redirect_url = append_sid("{$kb_root_path}");
		meta_refresh(3, $redirect_url);
		trigger_error($user->lang['NO_ARTICLE'] . '<br /><br />' . sprintf($user->lang['BACK_TO_KB'], '<a href="' . append_sid("{$kb_root_path}") . '">', '</a>'));
	}
	else
	{
		if ($row['has_attachment'] && !$submit && !$refresh && $auth->acl_get('u_attache_kb') && $config['allow_attachments'])
		{
			// Do not change to SELECT *
			$sql = 'SELECT attach_id, is_orphan, attach_comment, real_filename
				FROM ' . ATTACHMENTS_TABLE . '
				WHERE post_msg_id = ' . $row['article_id'] . '
					AND in_message = 2
					AND topic_id = 0
					AND is_orphan = 0
				ORDER BY filetime DESC';
			$result = $db->sql_query($sql);
			$message_parser->attachment_data = array_merge($message_parser->attachment_data, $db->sql_fetchrowset($result));
			$db->sql_freeresult($result);
		}

		decode_message($row['article'], $row['bbcode_uid']);
		$post_message				= $row['article'];
		$data['title'] 				= $row['titel'];
		$data['description']		= $row['description'];
		$data['post_time']			= $row['post_time'];
		$data['user_id']			= $row['user_id'];
		$data['cat_id']				= $row['cat_id'];
		$data['post_id']			= $row['post_id'];
		$data['type_id']			= $row['type_id'];
		$data['page_uri']			= $row['page_uri'];
		$data['post_id']			= $row['post_id'];
		$data['bbcode_checked']		= $row['enable_bbcode'];
		$data['smilies_checked']	= $row['enable_smilies'];
		$data['urls_checked']		= $row['enable_magic_url'];
		$data['activ'] 				= $row['activ'];
	}

	if ($submit == true && !sizeof($error))
	{
		$db->sql_query('UPDATE ' . KB_ARTICLE_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . ' WHERE article_id = ' . $id);
		if(isset($_POST['activ']))
		{
			activate_article($id);
		}
		else
		{
			deactivate_article($id);
		}
		if ($auth->acl_get('u_attache_kb') && $config['allow_attachments'])
		{
			$attach_data = array(
				'poster_id'				=> $row['user_id'],
				'post_id'				=> $row['article_id'],
				'attachment_data'		=> $message_parser->attachment_data,
			);
			post_attacement($attach_data);
		}
		update_article_post($id);
		article_log($id, utf8_normalize_nfc($data['edit_reason']));

		$redirect_url = article_link($id,  request_var('page_uri', ''));
		meta_refresh(3, $redirect_url);
		trigger_error($user->lang['ARTICLE_EDITED'] . '<br /><br />' . sprintf($user->lang['BACK_TO_KB'], '<a href="' . append_sid("{$kb_root_path}") . '">', '</a>') . '<br /><br />'. sprintf($user->lang['BACK_TO_ARTICLE'], '<a href="' . $redirect_url . '">', '</a>'));
	}
}

if (sizeof($message_parser->warn_msg))
{
	$error[] = implode('<br />', $message_parser->warn_msg);
	$message_parser->warn_msg = array();
}

if ($auth->acl_get('u_attache_kb') && $config['allow_attachments'])
{
	$attachment_data = $message_parser->attachment_data;
	$filename_data = $message_parser->filename_data;
	posting_gen_attachment_entry($attachment_data, $filename_data);
	posting_gen_inline_attachments($attachment_data);
}
// Build custom bbcodes array
display_custom_bbcodes();
generate_smilies('inline', 1);
add_form_key('kb_posting');

// Output page
page_header(($mode == 'edit') ? $user->lang['ARTICLE_EDIT'] : $user->lang['ARTICLE_ADD']);

// Start assigning vars for main posting page ...
$template->assign_vars(array(
	'DESCRIPTION' 				=> $data['description'],
	'TITLE'						=> $data['title'],
	'EDIT_REASON'				=> $data['edit_reason'],
	'POST_ID'					=> $data['post_id'],
	'ACTIV'						=> ($data['activ'] == 1) ? ' checked="checked"' : '',
	'MESSAGE'					=> $post_message,
	'PAGE_URI'					=> $data['page_uri'],
	'CAT_LIST'					=> make_cat_select($data['cat_id'], 0),
	'TYPE_LIST'					=> ($kb_config['activ_types'] == 1 ) ? make_type_list($data['type_id']) : '',
	'TYPE_ID'					=> $data['type_id'],
	'S_ARTICLE_TYPES'			=> ($kb_config['activ_types'] == 1 ) ? true : false,
	'L_POST_A' 					=> ($mode == 'edit') ? $user->lang['ARTICLE_EDIT'] : $user->lang['ARTICLE_ADD'],
	'S_EDIT_MODE'				=> ($mode == 'edit') ? true : false,
	'S_EDIT'					=> ($mode == 'edit') ? true : false,
	'S_POST_ACTION'				=> ($mode == 'edit') ? append_sid("{$kb_root_path}kbposting.$phpEx?mode=edit&amp;id=$id") : append_sid("{$kb_root_path}kbposting.$phpEx"),
	'S_ACTIVATE_ARTICLE'		=> $auth->acl_get('m_activate_kb'),
	'S_SEO_URI'					=> KB_SEO,
	'S_BBCODE_CHECKED'			=> ($data['bbcode_checked']) ? '' : ' checked="checked"',
	'S_SMILIES_CHECKED'			=> ($data['smilies_checked']) ? '' : ' checked="checked"',
	'S_MAGIC_URL_CHECKED'		=> ($data['urls_checked']) ? '' : ' checked="checked"',
	'ERROR'						=> (sizeof($error)) ? implode('<br />', $error) : '',
	'UA_PROGRESS_BAR'			=> addslashes(append_sid("{$kb_root_path}kbposting.$phpEx", "mode=popup")),
	'S_CLOSE_PROGRESS_WINDOW'	=> (isset($_POST['add_file'])) ? true : false,
	'S_FORM_ENCTYPE'			=> ' enctype="multipart/form-data"',
	'S_BBCODE_ALLOWED'			=> true,
	'S_BBCODE_IMG'				=> true,
	'S_LINKS_ALLOWED'			=> true,
	'S_BBCODE_URL'				=> true,
	'S_BBCODE_FLASH'			=> true,
	'S_SHOW_ATTACH_BOX'			=> $auth->acl_get('u_attache_kb'),
	'S_BBCODE_QUOTE'			=> true,
	'BBCODE_STATUS'				=> sprintf($user->lang['BBCODE_IS_ON'], '<a href="' . append_sid("{$phpbb_root_path}faq.$phpEx", 'mode=bbcode') . '">', '</a>'),
));

$template->assign_block_vars('navlinks', array(
	'U_VIEW_FORUM'	=> append_sid("{$kb_root_path}"),
	'FORUM_NAME'	=> $user->lang['KBASE'])
);

$template->set_filenames(array(
	'body' => 'kb/kb_posting.html')
);

page_footer();

?>