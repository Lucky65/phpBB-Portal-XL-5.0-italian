<?php
/** 
*
* @package acp
* @version $Id: acp_announcements_centre.php,v 1.1.1.1 2009/05/15 05:14:02 damysterious Exp $
* @copyright (c) 2007, 2008 lefty74 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package acp
*/
class acp_announcements_centre
{
	var $u_action;

	function main($id, $mode)
	{
		global $config, $db, $user, $auth, $template, $cache;
		global $phpbb_root_path, $phpbb_admin_path, $phpEx, $table_prefix;

		include_once($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
		include_once($phpbb_root_path . 'includes/functions_display.' . $phpEx);
		include_once($phpbb_root_path . 'includes/functions_content.' . $phpEx);
		include_once($phpbb_root_path . 'includes/functions_announcements.' . $phpEx);

		$user->add_lang(array('posting', 'mods/announcement_centre'));
		$this->tpl_name = 'acp_announcement_centre';
		$this->page_title = 'ACP_ANNOUNCEMENTS_CENTRE';
		add_form_key('announcement_centre');


		// Set some vars
		//$action	= request_var('action', '');
		$submit 	= (isset($_POST['submit'])) ? true : false;
		$preview	= (isset($_POST['preview'])) ? true : false;

		$announcement_row = array(
		'announcement_enable_guests' 	=> request_var('announcement_enable_guests', 0),
		'announcement_show' 			=> request_var('announcement_show', 0),
		'announcement_show_birthdays' 	=> request_var('announcement_show_birthdays', 0),
		'announcement_birthday_avatar' 	=> request_var('announcement_birthday_avatar', 0),
		'announcement_title' 			=> utf8_normalize_nfc(request_var('announcement_title', $user->lang['ANNOUNCEMENT_TITLE'], true)),
		'announcement_text' 			=> utf8_normalize_nfc( request_var('announcement_text', $user->lang['ANNOUNCEMENT_TEXT'], true)),
		'announcement_draft' 			=> utf8_normalize_nfc(request_var('announcement_draft', $user->lang['ANNOUNCEMENT_DRAFT'], true)),
		'announcement_title_guests' 	=> utf8_normalize_nfc(request_var('announcement_title_guests', $user->lang['ANNOUNCEMENT_TITLE_GUESTS'], true)),
		'announcement_text_guests' 		=> utf8_normalize_nfc(request_var('announcement_text_guests', $user->lang['ANNOUNCEMENT_TEXT_GUESTS'], true)),
		'announcement_show_group' 		=> request_var('announcement_show_group', array(0)),
		);
		
		$announcement_enable			= request_var('announcement_enable', 0);
		$announcement_show_index		= request_var('announcement_show_index', 0);

	
		if ($submit || $preview)
		{
			if (!check_form_key('announcement_centre'))
			{
				trigger_error('FORM_INVALID');
			}
		}

		if ($submit)
		{
			$uid_text = $bitfield_text = $options_text = ''; // will be modified by generate_text_for_storage
			$uid_text_guests = $bitfield_text_guests = $options_text_guests = ''; // will be modified by generate_text_for_storage
			$uid_draft = $bitfield_draft = $options_draft = ''; // will be modified by generate_text_for_storage
			$allow_bbcode = $allow_urls = $allow_smilies = true;

			generate_text_for_storage($announcement_row['announcement_text'], $uid_text, $bitfield_text, $options_text, $allow_bbcode, $allow_urls, $allow_smilies);
			generate_text_for_storage($announcement_row['announcement_text_guests'], $uid_text_guests, $bitfield_text_guests, $options_text_guests, $allow_bbcode, $allow_urls, $allow_smilies);
			generate_text_for_storage($announcement_row['announcement_draft'], $uid_draft, $bitfield_draft, $options_draft, $allow_bbcode, $allow_urls, $allow_smilies);

			$sql_ary = array(
			'announcement_enable_guests' 				=> (int) $announcement_row['announcement_enable_guests'],
			'announcement_show' 						=> (int) $announcement_row['announcement_show'],
			'announcement_show_birthdays' 				=> (int) $announcement_row['announcement_show_birthdays'],
			'announcement_birthday_avatar' 				=> (int) $announcement_row['announcement_birthday_avatar'],
			'announcement_title' 						=> (string) $announcement_row['announcement_title'],
			'announcement_text' 						=> (string) $announcement_row['announcement_text'],
			'announcement_text_bbcode_uid'		 		=> (string) $uid_text,
			'announcement_text_bbcode_bitfield'			=> (string) $bitfield_text,
			'announcement_text_bbcode_options' 			=> (int) 	$options_text,
			'announcement_draft' 						=> (string) $announcement_row['announcement_draft'],
			'announcement_draft_bbcode_uid' 			=> (string) $uid_draft,
			'announcement_draft_bbcode_bitfield' 		=> (string) $bitfield_draft,
			'announcement_draft_bbcode_options' 		=> (int) 	$options_draft,
			'announcement_title_guests' 				=> (string) $announcement_row['announcement_title_guests'],
			'announcement_text_guests' 					=> (string) $announcement_row['announcement_text_guests'],
			'announcement_text_guests_bbcode_uid' 		=> (string) $uid_text_guests,
			'announcement_text_guests_bbcode_bitfield' 	=> (string) $bitfield_text_guests,
			'announcement_text_guests_bbcode_options' 	=> (int) 	$options_text_guests,
			'announcement_show_group' 					=> (string) implode(",", $announcement_row['announcement_show_group']),
			);

			$sql = 'UPDATE ' . ANNOUNCEMENTS_CENTRE_TABLE . '
					SET ' . $db->sql_build_array('UPDATE', $sql_ary);
			$db->sql_query($sql);
			
			set_config('announcement_enable', (int) $announcement_enable);
			set_config('announcement_show_index', (int) $announcement_show_index);
		}
		
		
		if ($submit)
		{						
			add_log('admin', 'LOG_ANNOUNCEMENT_UPDATED');
			trigger_error($user->lang['LOG_ANNOUNCEMENT_UPDATED'] . adm_back_link($this->u_action));
		}
			
		$sql = 'SELECT * 
			FROM ' . ANNOUNCEMENTS_CENTRE_TABLE;
		$result = $db->sql_query($sql);
		$announcement = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
			
		$selected_groups = $exclude_groups = array();
		$selected_groups = explode(",", $announcement['announcement_show_group']);

		// dont show the guests group as we already have guests specified separately
		$sql = 'SELECT group_id 
			FROM ' . GROUPS_TABLE . "
			WHERE group_type = 3
				AND group_name = 'GUESTS'";
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
		$exclude_groups[] = $row['group_id']; 

		$announcement_preview = '';
		
		if ($preview)
		{
			$announcement_preview = preview_announcement($announcement_row['announcement_draft']);
		}
		
		generate_smilies('inline', '',1);
		
		$announcement_draft = '';
		$announcement_draft = $announcement['announcement_draft'];
		$announcement_draft = generate_text_for_display($announcement_draft, $announcement['announcement_draft_bbcode_uid'], $announcement['announcement_draft_bbcode_bitfield'], $announcement['announcement_draft_bbcode_options']);
	
		decode_message($announcement['announcement_text'], $announcement['announcement_text_bbcode_uid']);
		decode_message($announcement['announcement_draft'], $announcement['announcement_draft_bbcode_uid']);
		decode_message($announcement['announcement_text_guests'], $announcement['announcement_text_guests_bbcode_uid']);
		
		$template->assign_vars(array(
			'U_ACTION'		=> $this->u_action,
			
			'ANNOUNCEMENT_ENABLE'				=> $config['announcement_enable'],
			'ANNOUNCEMENT_SHOW_INDEX'			=> $config['announcement_show_index'],
			'ANNOUNCEMENT_ENABLE_GUESTS'		=> $announcement['announcement_enable_guests'],
			'ANNOUNCEMENT_SHOW_BIRTHDAYS'		=> $announcement['announcement_show_birthdays'],
			'ANNOUNCEMENT_BIRTHDAY_AVATAR'		=> $announcement['announcement_birthday_avatar'],
			'ANNOUNCEMENT_SHOW'					=> $announcement['announcement_show'],
			'S_ANNOUNCEMENT_SHOW_GROUPS'		=> ( $announcement['announcement_show'] == GROUPS_ONLY ) ? true:false,
			'S_ANNOUNCEMENT_SHOW_EVERYONE'		=> ( $announcement['announcement_show'] == EVERYONE ) ? true:false,
			'S_ANNOUNCEMENT_SHOW_GUESTS'		=> ( $announcement['announcement_show'] == GUESTS_ONLY ) ? true:false,
			'ANNOUNCEMENT_TITLE'				=> $announcement['announcement_title'],
			'ANNOUNCEMENT_TEXT'					=> $announcement['announcement_text'],
			'ANNOUNCEMENT_DRAFT'				=> ( $announcement_preview ) ? $announcement_row['announcement_draft'] : $announcement['announcement_draft'],
			'ANNOUNCEMENT_DRAFT_PREVIEW'		=> ( $announcement_preview ) ? $announcement_preview : $announcement_draft,
			'ANNOUNCEMENT_TITLE_GUESTS'			=> $announcement['announcement_title_guests'],
			'ANNOUNCEMENT_TEXT_GUESTS'			=> $announcement['announcement_text_guests'],
			'S_ANNOUNCEMENT_SELECT_GROUP'		=> group_select_options_selected($selected_groups, $exclude_groups, false),
			)
		);
		// Assigning custom bbcodes
		display_custom_bbcodes();
	}
}
?>