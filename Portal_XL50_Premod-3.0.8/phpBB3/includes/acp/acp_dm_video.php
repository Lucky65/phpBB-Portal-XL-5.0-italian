<?php
/**
*
* @package acp
* @version $Id: acp_dm_video.php 218 2009-12-21 05:46:34Z femu $
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

/**
* Here we start the ACP panel
*/
class acp_dm_video
{
	var $u_action;
	function main($id, $mode)
	{
		// Let's first set some globals, includes, variables and the base template
		global $db, $user, $phpbb_root_path, $phpEx, $template, $u_action, $SID,  $config;
		$dm_video_path = (defined('DM_VIDEO_ROOT_PATH')) ? DM_VIDEO_ROOT_PATH : 'dm_video/';
		include($phpbb_root_path . $dm_video_path . 'functions_acp_dm_video.' . $phpEx);

		$action = request_var('action', '');
		$id		= request_var('id', 0);
		$form_action = $this->u_action. '&amp;action=add';
		$lang_mode = $user->lang['DMV_ADD'];

		$template->assign_vars(array(
			'BASE'		=> $this->u_action,
		));

		// Add form key for S_FORM_TOKEN
		add_form_key('acp_video');

		// Here we set the main switches to use within the ACP
		switch ($mode)
		{
			// Set the main switch for managing categories
			case 'manage_categories':
				$this->page_title = 'ACP_DMV_MANAGE_CATEGORIES';
				$this->tpl_name = 'acp_dm_video';

				// Now let's define, what to do within the module Manage Categories
				switch ($action)
				{
					// Create a new category
					case 'create':
						$title = 'DMV_DM_VIDEO_ACP_CATSN';
						$this->page_title = $user->lang[$title];

						$this->create_cat();
					break;

					// Edit an existing category
					case 'edit':
						$title = 'DMV_DM_VIDEO_ACP_CATSE';
						$this->page_title = $user->lang[$title];

						$this->edit_cat();
					break;

					// Delete an existing category
					case 'delete':
						$title = 'DMV_DM_VIDEO_ACP_CATSD';
						$this->page_title = $user->lang[$title];

						$this->delete_cat();
					break;

					// Move a category to another position
					case 'move':
						$this->move_cat();
					break;

					// Call the main module
					default:
						$title = 'ACP_DMV_MANAGE_CATEGORIES';
						$this->page_title = $user->lang[$title];

						$this->manage_cats();
					break;
				}
			break;

			// Set the main switch for editing videos
			case 'edit_videos':
				$this->page_title = 'ACP_DMV_EDIT';
				$this->tpl_name = 'acp_dmv_list';

				// Read out config values 
				$sql = 'SELECT *
					FROM ' . DM_VIDEO_CONFIG_TABLE;
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$video_config[$row['config_name']] = $row['config_value'];
				}
				$db->sql_freeresult($result);
				
				$start = request_var('start', 0);
				$number = $video_config['video_page_acp'];
				$sort_days	= request_var('st', 0);
				$sort_key	= request_var('sk', 'video_title');
				$sort_dir	= request_var('sd', 'ASC');
				$limit_days = array(0 => $user->lang['ALL_VIDEOS'], 1 => $user->lang['1_DAY'], 7 => $user->lang['7_DAYS'], 14 => $user->lang['2_WEEKS'], 30 => $user->lang['1_MONTH'], 90 => $user->lang['3_MONTHS'], 180 => $user->lang['6_MONTHS'], 365 => $user->lang['1_YEAR']);

				$sort_by_text = array('t' => $user->lang['DMV_SORT_TITLE'], 'a' => $user->lang['DMV_SORT_ARTIST'], 'u' => $user->lang['DMV_SORT_FROMNAME'], 'c' => $user->lang['DMV_SORT_CAT'], 'ap' => $user->lang['DMV_SORT_APPROVAL']);
				$sort_by_sql = array('t' => 'video_title', 'a' => 'video_singer', 'u' => 'video_username', 'c' => 'video_cat_id', 'ap' => 'video_approval');

				$s_limit_days = $s_sort_key = $s_sort_dir = $u_sort_param = '';
				gen_sort_selects($limit_days, $sort_by_text, $sort_days, $sort_key, $sort_dir, $s_limit_days, $s_sort_key, $s_sort_dir, $u_sort_param);
				$sql_sort_order = $sort_by_sql[$sort_key] . ' ' . (($sort_dir == 'd') ? 'DESC' : 'ASC');

				// Count number of videos
				$sql = 'SELECT COUNT(video_id) AS total_videos
					FROM ' . DM_VIDEO_TABLE;
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$total_videos = $row['total_videos'];
				$db->sql_freeresult($result);

				// List all videos
				$sql = 'SELECT v.*, c.*
					FROM ' . DM_VIDEO_TABLE . ' v
					LEFT JOIN ' . DM_VIDEO_CATS_TABLE . ' c
						ON v.video_cat_id = c.cat_id
					ORDER by v.'. $sql_sort_order;
				$result = $db->sql_query_limit($sql, $number, $start);
				
				while ($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('videos', array(
						'TITLE'			=> $row['video_title'],
						'SINGER'		=> $row['video_singer'],
						'SONGTEXT'		=> $row['video_songtext'],
						'URL'			=> $row['video_url'],
						'USERNAME'		=> $row['video_username'],
						'APPROVAL'		=> ($row['video_approval']) ? $user->lang['YES'] : $user->lang['NO'],
						'CATNAME'		=> $row['cat_name'],
						'U_EDIT'		=> $this->u_action . '&amp;action=edit&amp;id=' .$row['video_id'],
						'U_DEL'			=> $this->u_action . '&amp;action=delete&amp;id=' .$row['video_id'],
						'U_VIDEO_PLAY'	=> append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v={$row['video_id']}&amp;c={$row['video_cat_id']}"),
						)
					);
				}
				$db->sql_freeresult($result);

				$template->assign_vars(array(
					'S_VIDEO_ACTION' 	=> $this->u_action,
					'S_SELECT_SORT_DIR'	=> $s_sort_dir,
					'S_SELECT_SORT_KEY'	=> $s_sort_key,
					'PAGINATION' 		=> generate_pagination($this->u_action . '&amp;sk=' . $sort_key .'&amp;sd=' . $sort_dir, $total_videos, $number, $start),
					'L_MODE_TITLE'		=> $lang_mode,
					'U_EDIT_ACTION'		=> $this->u_action,
					'PAGE_NUMBER'		=> on_page($total_videos, $number, $start),
					'TOTAL_VIDEOS'		=> ($total_videos == 1) ? $user->lang['DMV_SINGLE'] : sprintf($user->lang['DMV_MULTI'], $total_videos),
				));

				// Now let's define, what to do within the module Edit Videos
				switch ($action)
				{
					// Edit an existing video
					case 'edit':
						$this->page_title = 'ACP_DMV_EDIT';
						$this->tpl_name = 'acp_dmv_edit';
						$form_action = $this->u_action. '&amp;action=update';
						$lang_mode = $user->lang['ACP_DMV_EDIT'];

						$action = (!isset($_GET['action'])) ? '' : $_GET['action'];
						$action = ((isset($_POST['submit']) && !$_POST['id']) ? 'add' : $action );

						$id = request_var('id', '');

						$sql = 'SELECT *
							FROM ' . DM_VIDEO_TABLE . ' 
							WHERE video_id = ' . $id;
						$result = $db->sql_query_limit($sql,1);
						$row = $db->sql_fetchrow($result);
						$db->sql_freeresult($result);
						decode_message($row['video_songtext'], $row['bbcode_uid']);
						$video_id = $row['video_id'];

						$sql = 'SELECT *
							FROM ' . DM_VIDEO_CATS_TABLE . '
							ORDER BY cat_name';
						$result = $db->sql_query($sql);
						$cats = array();
						while ($row2 = $db->sql_fetchrow($result))
						{
							$cats[$row2['cat_id']] = array( 
								'cat_name'	=> $row2['cat_name'], 
								'cat_id'	=> $row2['cat_id'],
							);
						}
						$db->sql_freeresult($result);
						
						$options = '';
						foreach($cats as $key => $value)
						{
							if ($key == $row['video_cat_id'])
							{
								$options .= '<option value="' . $value['cat_id'] . '" selected="selected">' . $value['cat_name'] . '</option>';
							}
							else
							{
								$options .= '<option value="' . $value['cat_id'] . '">' . $value['cat_name'] . '</option>';
							}
						}

						$template->assign_vars(array(
							'ID'				=> $video_id,
							'TITLE'				=> $row['video_title'],
							'SONGTEXT'			=> $row['video_songtext'],
							'URL'				=> $row['video_url'],
							'SINGER'			=> $row['video_singer'],
							'VIDEO_IMAGE'		=> $row['video_image'],
							'DURATION'			=> $row['video_duration'],
							'USERNAME'			=> $row['video_username'],
							'APPROVAL'			=> ($row['video_approval'] == '1') ? 'checked="checked"' : '',
							'PARENT_OPTIONS'	=> $options,
							)
						);

						$template->assign_vars(array(
							'U_ACTION'		=> $form_action,
							'L_MODE_TITLE'	=> $lang_mode,
							)
						);
					break;

					// Change an existing video
					case 'update':
						$title 		= utf8_normalize_nfc(request_var('title', '', true));
						$url 		= request_var('url', '');
						$singer		= utf8_normalize_nfc(request_var('singer', '', true));
						$duration	= request_var('duration', '');
						$approval	= request_var('approval', 0);
						$image		= request_var('video_image', '');
						$v_cat_id	= request_var('parent', '');
						
						$songtext 	= utf8_normalize_nfc(request_var('songtext', '', true));
						
						$uid = $bitfield = $options = ''; // will be modified by generate_text_for_storage
						$allow_bbcode = $allow_urls = $allow_smilies = true;
						generate_text_for_storage($songtext, $uid, $bitfield, $options, $allow_bbcode, $allow_urls, $allow_smilies);

						$sql_ary = array(
							'video_title'		=> $title,
				    		'video_songtext'    => $songtext,
							'video_url'			=> $url,
							'video_image'		=> $image,
				    		'video_singer'		=> $singer,
							'video_duration'	=> $duration,
							'video_approval'	=> $approval,
							'video_cat_id'		=> $v_cat_id,
						    'bbcode_uid'        => $uid,
						    'bbcode_bitfield'   => $bitfield,
						    'bbcode_options'    => $options,
						);

						if ($title == '' || $url == '')
						{
							if ($title == '' && $url == '')
							{
								trigger_error($user->lang['DMV_NEED_DATA'] . adm_back_link($this->u_action));	
							}
							elseif ($title == '')
							{
								trigger_error($user->lang['DMV_NEED_TITLE'] . adm_back_link($this->u_action));	
							}
							elseif ($url == '')
							{
								trigger_error($user->lang['DMV_NEED_URL'] . adm_back_link($this->u_action));	
							}
						}
						else
						{
							$db->sql_query('UPDATE ' . DM_VIDEO_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . ' WHERE video_id = ' . $id);

							add_log('admin', 'LOG_ADMIN_VIDEO_UPDATED', $title);
							trigger_error($user->lang['DMV_UPDATED'] . adm_back_link($this->u_action));
						}
					break;

					// Delete an existing video
					case 'delete':
						if (confirm_box(true))
						{
							$sql = 'SELECT video_title
								FROM ' . DM_VIDEO_TABLE . '
								WHERE video_id = ' .$id;
							$result = $db->sql_query_limit($sql,1);
							$title = $db->sql_fetchfield('video_title');
							$db->sql_freeresult($result);

							// Check if UPS exists and video points is enabled
							if ( defined('IN_ULTIMATE_POINTS') && $config['points_enable'])
							{
								if (!function_exists('add_points') || !function_exists('substract_points'))
								{
									includes($phpbb_root_path . 'includes/points/functions_points.' . $phpEx);
								}
								
								$sql = 'SELECT video_user_id, video_points
									FROM ' . DM_VIDEO_TABLE . '
									WHERE video_id = ' .$id;
								$result = $db->sql_query_limit($sql,1);
								$row = $db->sql_fetchrow($result);
								$db->sql_freeresult($result);

								// Substract the points
								substract_points((int) $row['video_user_id'], $row['video_points']);
							}

							$sql = 'DELETE FROM ' . DM_VIDEO_TABLE . '
								WHERE video_id = '. $id;
							$db->sql_query($sql);

							add_log('admin', 'LOG_ADMIN_VIDEO_DELETED', $title);
							trigger_error($user->lang['DMV_DELETED'] . adm_back_link($this->u_action));
						}
						else
						{
							confirm_box(false, $user->lang['DMV_REALY_DELETE'], build_hidden_fields(array(
								'video_id'	=> $id,
								'action'	=> 'delete',
								))
							);
						}
					break;
				}

			break;

			// Set the main switch to handle reported videos
			case 'reported_videos':
				$this->page_title = 'ACP_DMV_REPORTED';
				$this->tpl_name = 'acp_dmv_reported';

				// List all videos, which are reported as broken
				$sql = 'SELECT *
					FROM ' . DM_VIDEO_TABLE . ' 
					WHERE video_reported = 0 
					ORDER by video_title';
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('videos', array(
						'TITLE'			=> $row['video_title'],
						'SINGER'		=> $row['video_singer'],
						'SONGTEXT'		=> $row['video_songtext'],
						'URL'			=> $row['video_url'],
						'USERNAME'		=> $row['video_username'],
						'APPROVAL'		=> ($row['video_approval']) ? $user->lang['YES'] : $user->lang['NO'],
						'REPORTED'		=> ($row['video_reported']) ? $user->lang['YES'] : $user->lang['NO'],
						'U_EDIT'		=> $this->u_action . '&amp;action=edit&amp;id=' .$row['video_id'],
						'U_DEL'			=> $this->u_action . '&amp;action=delete&amp;id=' .$row['video_id'],
						'U_VIDEO_PLAY'	=> append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v={$row['video_id']}&amp;c={$row['video_cat_id']}"),
						)
					);
				}
				$db->sql_freeresult($result);

				$template->assign_vars(array(
					'U_ACTION'		=> $form_action,
					'L_MODE_TITLE'	=> $lang_mode,
					)
				);

				// Now let's define, what to do within the module Release Videos
				switch ($action)
				{
					// Edit an existing video
					case 'edit':
						$this->page_title = 'ACP_DMV_REPORTED_EDIT';
						$this->tpl_name = 'acp_dmv_reported_edit';
						$form_action = $this->u_action. '&amp;action=update';
						$lang_mode = $user->lang['ACP_DMV_REPORTED_EDIT'];
						$action = (!isset($_GET['action'])) ? '' : $_GET['action'];
						$action = ((isset($_POST['submit']) && !$_POST['id']) ? 'add' : $action );
						$id = request_var('id', '');
						$sql = 'SELECT *
							FROM ' . DM_VIDEO_TABLE . ' 
							WHERE video_id = ' . $id;
						$result = $db->sql_query_limit($sql,1);
						$row = $db->sql_fetchrow($result);
						decode_message($row['video_title'], $row['video_songtext'], $row['video_url']);
						$video_id = $row['video_id'];
						$template->assign_vars(array(
							'ID'			=> $video_id,
							'TITLE'			=> $row['video_title'],
							'APPROVAL'		=> ($row['video_approval'] == '1') ? 'checked="checked"' : '',
							'REPORTED'		=> ($row['video_reported'] == '1') ? '' : 'checked="checked"',
							)
						);

						$db->sql_freeresult($result);

						$template->assign_vars(array(
							'U_ACTION'		=> $form_action,
							'L_MODE_TITLE'	=> $lang_mode,
							)
						);
					break;

					// Change an existing video
					case 'update':
						$title 	= request_var('title', '');
						$url 	= request_var('url', '');
						$sql_ary = array(
							'video_approval'	=> request_var('approval', 0),
							'video_reported'	=> request_var('reported', 0),
						);

						$db->sql_query('UPDATE ' . DM_VIDEO_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . ' WHERE video_id = ' . $id);

							add_log('admin', 'LOG_ADMIN_VIDEO_REP_UPDATED', $title);
							trigger_error($user->lang['DMV_UPDATED'] . adm_back_link($this->u_action));
					break;

					// Delete an existing video
					case 'delete':
						if (confirm_box(true))
						{
							$sql = 'SELECT video_title
								FROM ' . DM_VIDEO_TABLE . '
								WHERE video_id = ' .$id;
							$result = $db->sql_query_limit($sql,1);
							$title = $db->sql_fetchfield('video_title');
							$db->sql_freeresult($result);

							// Check if UPS exists and video points is enabled
							if ( defined('IN_ULTIMATE_POINTS') && $config['points_enable'])
							{
								if (!function_exists('add_points') || !function_exists('substract_points'))
								{
									includes($phpbb_root_path . 'includes/points/functions_points.' . $phpEx);
								}
								
								$sql = 'SELECT video_user_id, video_points
									FROM ' . DM_VIDEO_TABLE . '
									WHERE video_id = ' .$id;
								$result = $db->sql_query_limit($sql,1);
								$row = $db->sql_fetchrow($result);
								$db->sql_freeresult($result);

								// Substract the points
								substract_points((int) $row['video_user_id'], $row['video_points']);
							}

							$sql = 'DELETE FROM ' . DM_VIDEO_TABLE . '
								WHERE video_id = '. $id;
							$db->sql_query($sql);

							add_log('admin', 'LOG_ADMIN_VIDEO_REP_DELETED', $title);
							trigger_error($user->lang['DMV_DELETED'] . adm_back_link($this->u_action));
						}
						else
						{
							confirm_box(false, $user->lang['DMV_REALY_DELETE'], build_hidden_fields(array(
								'video_id'	=> $id,
								'action'	=> 'delete',
								))
							);
						}
					break;
				}
			break;

			// Set the main switch for releasing videos
			case 'release_videos':
				$this->page_title = 'ACP_DMV_RELEASE';
				$this->tpl_name = 'acp_dmv_release';

				// Read out config values 
				$sql = 'SELECT *
					FROM ' . DM_VIDEO_CONFIG_TABLE;
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$video_config[$row['config_name']] = $row['config_value'];
				}
				$db->sql_freeresult($result);

				// List all videos, which are not yet released
				$sql = 'SELECT *
					FROM ' . DM_VIDEO_TABLE . ' 
					WHERE video_approval = 0 
					ORDER by video_title';
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('videos', array(
						'TITLE'			=> $row['video_title'],
						'SINGER'		=> $row['video_singer'],
						'SONGTEXT'		=> $row['video_songtext'],
						'URL'			=> $row['video_url'],
						'USERNAME'		=> $row['video_username'],
						'APPROVAL'		=> ($row['video_approval']) ? $user->lang['YES'] : $user->lang['NO'],
						'U_EDIT'		=> $this->u_action . '&amp;action=edit&amp;id=' .$row['video_id'],
						'U_DEL'			=> $this->u_action . '&amp;action=delete&amp;id=' .$row['video_id'],
						'U_VIDEO_PLAY'	=> append_sid("{$phpbb_root_path}{$dm_video_path}showvideo.$phpEx", "v={$row['video_id']}&amp;c={$row['video_cat_id']}"),
					));
				}
				$db->sql_freeresult($result);
				
				$template->assign_vars(array(
					'U_ACTION'		=> $form_action,
					'L_MODE_TITLE'	=> $lang_mode,
					)
				);

				// Now let's define, what to do within the module Release Videos
				switch ($action)
				{
					// Edit an existing video
					case 'edit':
						$this->page_title = 'ACP_DMV_RELEASE_EDIT';
						$this->tpl_name = 'acp_dmv_release_edit';
						$form_action = $this->u_action. '&amp;action=update';
						$lang_mode = $user->lang['ACP_DMV_RELEASE_EDIT'];
						$action = (!isset($_GET['action'])) ? '' : $_GET['action'];
						$action = ((isset($_POST['submit']) && !$_POST['id']) ? 'add' : $action );
						$id = request_var('id', '');
						$sql = 'SELECT *
							FROM ' . DM_VIDEO_TABLE . ' 
							WHERE video_id = ' . $id;
						$result = $db->sql_query_limit($sql,1);
						$row = $db->sql_fetchrow($result);
						decode_message($row['video_title'], $row['video_songtext'], $row['video_url']);
						$video_id = $row['video_id'];
						$template->assign_vars(array(
							'ID'			=> $video_id,
							'TITLE'			=> $row['video_title'],
							'APPROVAL'		=> ($row['video_approval'] == '1') ? 'checked="checked"' : '',
							)
						);

						$db->sql_freeresult($result);

						$template->assign_vars(array(
							'U_ACTION'		=> $form_action,
							'L_MODE_TITLE'	=> $lang_mode,
							)
						);
					break;

					// Change an existing video
					case 'update':
						$title 	= request_var('title', '');
						$url 	= request_var('url', '');
						
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

						$sql = 'SELECT *
							FROM ' . DM_VIDEO_TABLE . ' 
							WHERE video_id = ' . $id; 
						$result = $db->sql_query($sql);

						while ($row = $db->sql_fetchrow($result))
						{
							$video_title = $row['video_title'];
							$video_singer = $row['video_singer'];
							$video_duration = $row['video_duration'];
							$video_link = '[url=' . generate_board_url() . '/dm_video/showvideo.php?v=' . $id . '&amp;c=' . $row['video_cat_id'] . ']' . $user->lang['DMV_CLICK'] . '[/url]';
							$video_user_id = $row['video_user_id'];
						}
						$db->sql_freeresult($result);

						if ( $video_config['video_announce_enable'] && $row['video_announced'] == 0 )
						{
							$video_subject = sprintf($user->lang['DMV_CONFIG_ANNOUNCE_TITLE'], $video_title);
							$video_msg = sprintf($user->lang['DMV_CONFIG_ANNOUNCE_MSG'], $video_title, $video_singer, $video_duration, $video_link);

							$this->create_announcement($video_subject, $video_msg, $video_config['video_announce_forum_id']);
							$sql_ary = array(
								'video_announced'	=> 1,
							);
							$db->sql_query('UPDATE ' . DM_VIDEO_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . ' WHERE video_id = ' . $id);

							// Set points, if UPS exists and is enabled
							if ( defined('IN_ULTIMATE_POINTS') && $config['points_enable'] )
							{
								$sql_ary = array(
									'video_points'	=> $video_config['video_points_value'],
								);
								
								$db->sql_query('UPDATE ' . DM_VIDEO_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . ' WHERE video_id = ' . $id);

								// Update users points
								$sql = 'SELECT user_points
									FROM ' . USERS_TABLE . '
									WHERE user_id = ' . $video_user_id;
								$result = $db->sql_query($sql);
								$current_user_points = $db->sql_fetchfield('user_points');
								$db->sql_freeresult($result);
								
								$sql_ary = array(
									'user_points'	=> ($current_user_points + $video_config['video_points_value']),
								);
								$db->sql_query('UPDATE ' . USERS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . ' WHERE user_id = ' . $video_user_id);
							}
						}

						$sql_ary = array(
							'video_approval'	=> request_var('approval', 0),
						);

						$db->sql_query('UPDATE ' . DM_VIDEO_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . ' WHERE video_id = ' . $id);

						
						add_log('admin', 'LOG_ADMIN_VIDEO_REL_UPDATED', $title);
						trigger_error($user->lang['DMV_UPDATED'] . adm_back_link($this->u_action));
					break;

					// Delete an existing video
					case 'delete':
						if (confirm_box(true))
						{
							$sql = 'SELECT video_title
								FROM ' . DM_VIDEO_TABLE . '
								WHERE video_id = ' .$id;
							$result = $db->sql_query_limit($sql,1);
							$title = $db->sql_fetchfield('video_title');
							$db->sql_freeresult($result);

							// Check if UPS exists and video points is enabled
							if ( defined('IN_ULTIMATE_POINTS') && $config['points_enable'])
							{
								if (!function_exists('add_points') || !function_exists('substract_points'))
								{
									includes($phpbb_root_path . 'includes/points/functions_points.' . $phpEx);
								}
								
								$sql = 'SELECT video_user_id, video_points
									FROM ' . DM_VIDEO_TABLE . '
									WHERE video_id = ' .$id;
								$result = $db->sql_query_limit($sql,1);
								$row = $db->sql_fetchrow($result);
								$db->sql_freeresult($result);

								// Substract the points
								substract_points((int) $row['video_user_id'], $row['video_points']);
							}


							$sql = 'DELETE FROM ' . DM_VIDEO_TABLE . '
								WHERE video_id = '. $id;
							$db->sql_query($sql);

							add_log('admin', 'LOG_ADMIN_VIDEO_REL_DELETED', $title);
							trigger_error($user->lang['DMV_DELETED'] . adm_back_link($this->u_action));
						}
						else
						{
							confirm_box(false, $user->lang['DMV_REALY_DELETE'], build_hidden_fields(array(
								'video_id'	=> $id,
								'action'	=> 'delete',
								))
							);
						}
					break;
				}
			break;
			
			// Set the main switch for the config
			case 'video_config':
				$submit = (isset($_POST['submit'])) ? true: false;
				$this->page_title = 'ACP_DMV_CONFIG';
				$this->tpl_name = 'acp_dmv_config';

				if ( $submit == true )
				{
					if (!check_form_key('acp_video'))
					{
						trigger_error($user->lang['FORM_INVALID'] . adm_back_link($this->u_action), E_USER_WARNING);
					}				

					$sql = 'SELECT user_id 
						FROM ' . USERS_TABLE . '
						WHERE user_id = ' .  request_var('new_video_pm_from', 0);
					$result = $db->sql_query($sql);
					$row = $db->sql_fetchrow($result);
					
					if ( !$row )
					{
						trigger_error($user->lang['DMV_PM_FROM_ERROR'] . adm_back_link($this->u_action), E_USER_WARNING);
					}

					$sql = 'SELECT user_id 
						FROM ' . USERS_TABLE . '
						WHERE user_id = ' .  request_var('new_video_pm_to', 0);
					$result = $db->sql_query($sql);
					$row = $db->sql_fetchrow($result);

					if ( !$row )
					{
						trigger_error($user->lang['DMV_PM_TO_ERROR'] . adm_back_link($this->u_action), E_USER_WARNING);
					}

					$sql = "SELECT *
						FROM " . DM_VIDEO_CONFIG_TABLE;
					$result = $db->sql_query($sql);

					while ($row = $db->sql_fetchrow($result))
					{
						$config_name = $row['config_name'];
						$config_value = request_var($config_name, '', true);

						$sql = 'UPDATE ' . DM_VIDEO_CONFIG_TABLE . " 
							SET config_value = '$config_value'
							WHERE config_name = '$config_name'";
						$db->sql_query($sql);
					}

					add_log('admin', 'LOG_ADMIN_VIDEO_CONFIG_UPDATED');
					trigger_error($user->lang['DMV_CONFIG_UPDATED'] . adm_back_link($this->u_action));
				}

				$sql = 'SELECT config_name, config_value
					FROM ' . DM_VIDEO_CONFIG_TABLE;
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$new[$row['config_name']] = $row['config_value'];
				}

				// Select username for to and from ID
				$sql2 = 'SELECT username
					FROM ' . USERS_TABLE . '
					WHERE user_id = ' . $new['new_video_pm_from'];
				$result2 = $db->sql_query($sql2);
				$row2 = $db->sql_fetchrow($result2);
				$username_from = $row2['username'];
				
				$sql3 = 'SELECT username
					FROM ' . USERS_TABLE . '
					WHERE user_id = ' . $new['new_video_pm_to'];
				$result3 = $db->sql_query($sql3);
				$row3 = $db->sql_fetchrow($result3);
				$username_to = $row3['username'];
				
				// Check if Ultimate Points is installed
				if ( defined('IN_ULTIMATE_POINTS') )
				{
					if ( $config['points_enable'] )
					{
						$template->assign_vars(array(
							'S_IN_UPS' 		=> true,
							'POINTS_NAME'	=> $config['points_name'],
						));
					}
					else
					{
						$template->assign_vars(array(
							'S_IN_UPS' 			=> true,
							'S_UPS_INACTIVE'	=> true,
						));
					}
				}

				$sql = 'SELECT forum_id, forum_name
					FROM ' . FORUMS_TABLE . '
					ORDER by forum_name ASC';
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrowset($result);
				$forum_list = '';
				for ( $i = 0, $size = sizeof($row); $i < $size ; $i ++ )
				{
					$forum_list .= '<option value = "' . $row[$i]['forum_id'] . '" ' .  ($row[$i]['forum_id'] == $new['video_announce_forum_id'] ? 'selected' : '') . '>' . $row[$i]['forum_name'] . '</option>';
				}

				$template->assign_vars(array(
					'ROWS_PER_PAGE_ACP'		=> $new['video_page_acp'],
					'ROWS_PER_PAGE_USER'	=> $new['video_page_user'],
					'TOP_VIEWS'				=> $new['top_views'],
					'TOP_RATING'			=> $new['top_ratings'],
					'NEWEST_VIDEOS'			=> $new['newest_videos'],
					'ROWS_PER_PAGE_COMMENT' => $new['video_page_comment'],
					'COPY_EMAIL'			=> $new['copyright_email'],
					'COPY_SHOW'				=> $new['copyright_show'],
					'ANNOUNCE_FORUM_LIST'	=> $forum_list,
					'ANNOUNCE_ENABLE'		=> $new['video_announce_enable'],
					'PM_FROM_ID'			=> $new['new_video_pm_from'],
					'PM_TO_ID'				=> $new['new_video_pm_to'],
					'POINTS_ENABLE'			=> $new['video_points_enable'],
					'POINTS_VALUE'			=> $new['video_points_value'],
					'USERNAME_FROM'			=> $username_from,
					'USERNAME_TO'			=> $username_to,
					'L_MODE_TITLE'			=> $lang_mode,
					'U_ACTION'				=> $this->u_action,
				));
			break;
		}
	}


	/**
	* Define all the functions, which are used above
	*/

	/**
	* Function for managing categories
	*/
	function manage_cats()
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_admin_path, $phpbb_root_path, $phpEx;
		$catrow = array();
		$parent_id = request_var('parent_id', 0);
		$template->assign_vars(array(
			'S_MODE_MANAGE'	=> true,
			'S_ACTION'		=> $this->u_action . '&amp;action=create&amp;parent_id=' . $parent_id,
		));
		if (!$parent_id)
		{
			$navigation = $user->lang['DMV_DM_VIDEO_INDEX'];
		}
		else
		{
			$navigation = '<a href="' . $this->u_action . '">' . $user->lang['DMV_DM_VIDEO_INDEX'] . '</a>';

			$dm_video_nav = get_cat_branch($parent_id, 'parents', 'descending');
			foreach ($dm_video_nav as $row)
			{
				if ($row['cat_id'] == $parent_id)
				{
					$navigation .= ' -&gt; ' . $row['cat_name'];
				}
				else
				{
					$navigation .= ' -&gt; <a href="' . $this->u_action . '&amp;parent_id=' . $row['cat_id'] . '">' . $row['cat_name'] . '</a>';
				}
			}
		}
		$dm_video = array();
		$sql = 'SELECT *
			FROM ' . DM_VIDEO_CATS_TABLE . '
			WHERE parent_id = ' . $parent_id . '
			ORDER BY left_id ASC';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$dm_video[] = $row;
		}

		for( $i = 0; $i < count($dm_video); $i++ )
		{
			$folder_image = ($dm_video[$i]['left_id'] + 1 != $dm_video[$i]['right_id']) ? '<img src="images/icon_subfolder.gif" alt="' . $user->lang['SUBFORUM'] . '" />' : '<img src="images/icon_folder.gif" alt="' . $user->lang['FOLDER'] . '" />';
			$template->assign_block_vars('catrow', array(
				'FOLDER_IMAGE'			=> $folder_image,
				'U_CAT'					=> $this->u_action . '&amp;parent_id=' . $dm_video[$i]['cat_id'],
				'CAT_NAME'				=> $dm_video[$i]['cat_name'],
				'CAT_DESCRIPTION'		=> generate_text_for_display($dm_video[$i]['cat_desc'], $dm_video[$i]['cat_desc_uid'], $dm_video[$i]['cat_desc_bitfield'], $dm_video[$i]['cat_desc_options']),
				'U_MOVE_UP'				=> $this->u_action . '&amp;action=move&amp;move=move_up&amp;cat_id=' . $dm_video[$i]['cat_id'],
				'U_MOVE_DOWN'			=> $this->u_action . '&amp;action=move&amp;move=move_down&amp;cat_id=' . $dm_video[$i]['cat_id'],
				'U_EDIT'				=> $this->u_action . '&amp;action=edit&amp;cat_id=' . $dm_video[$i]['cat_id'],
				'U_DELETE'				=> $this->u_action . '&amp;action=delete&amp;cat_id=' . $dm_video[$i]['cat_id'],
			));
		}
		$template->assign_vars(array(
			'NAVIGATION'		=> $navigation,
			'S_DM_VIDEO'		=> $parent_id,
			'U_EDIT'			=> ($parent_id) ? $this->u_action . '&amp;action=edit&amp;cat_id=' . $parent_id : '',
			'U_DELETE'			=> ($parent_id) ? $this->u_action . '&amp;action=delete&amp;cat_id=' . $parent_id : '',
		));
	}

	/**
	* Function for create a category
	*/
	function create_cat()
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_admin_path, $phpbb_root_path, $phpEx;

		include($phpbb_root_path . 'includes/message_parser.' . $phpEx);
		$submit = (isset($_POST['submit'])) ? true : false;
		if($submit)
		{
			if (!check_form_key('acp_video'))
			{
				trigger_error($user->lang['FORM_INVALID'] . adm_back_link($this->u_action), E_USER_WARNING);
			}				

			$dm_video_data = array();
			$dm_video_data = array(
				'cat_name'						=> request_var('cat_name', '', true),
				'parent_id'						=> request_var('parent_id', 0),

				'cat_parents'					=> '',
				'cat_desc'						=>  utf8_normalize_nfc(request_var('cat_desc', '', true)),
				'cat_desc_options'				=> 7,
			);
			generate_text_for_storage($dm_video_data['cat_desc'], $dm_video_data['cat_desc_uid'], $dm_video_data['cat_desc_bitfield'], $dm_video_data['cat_desc_options'], request_var('desc_parse_bbcode', false), request_var('desc_parse_urls', false), request_var('desc_parse_smilies', false));

			if ($dm_video_data['parent_id'])
			{
				$sql = 'SELECT left_id, right_id
					FROM ' . DM_VIDEO_CATS_TABLE . '
					WHERE cat_id = ' . $dm_video_data['parent_id'];
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				if (!$row)
				{
					trigger_error($user->lang['PARENT_NOT_EXIST'] . adm_back_link($this->u_action . '&amp;' . $this->parent_id), E_USER_WARNING);
				}

				$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . '
					SET left_id = left_id + 2, right_id = right_id + 2
					WHERE left_id > ' . $row['right_id'];
				$db->sql_query($sql);

				$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . '
					SET right_id = right_id + 2
					WHERE ' . $row['left_id'] . ' BETWEEN left_id AND right_id';
				$db->sql_query($sql);

				$dm_video_data['left_id'] = $row['right_id'];
				$dm_video_data['right_id'] = $row['right_id'] + 1;
			}
			else
			{
				$sql = 'SELECT MAX(right_id) AS right_id
					FROM ' . DM_VIDEO_CATS_TABLE;
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				$dm_video_data['left_id'] = $row['right_id'] + 1;
				$dm_video_data['right_id'] = $row['right_id'] + 2;
			}
			$db->sql_query('INSERT INTO ' . DM_VIDEO_CATS_TABLE . ' ' . $db->sql_build_array('INSERT', $dm_video_data));
			$cache->destroy('sql', DM_VIDEO_CATS_TABLE);

			add_log('admin', 'LOG_ADMIN_VIDEO_CAT_ADDED', $dm_video_data['cat_name']);
			trigger_error($user->lang['DMV_CAT_NEW_DONE'] . adm_back_link($this->u_action . '&amp;parent_id=' . $dm_video_data['parent_id']));
		}
		$parent_options = make_cat_select(request_var('parent_id', 0), false, false, false, false);
		$template->assign_vars(array(
			'S_MODE_CREATE'				=> true,

			'S_ACTION'					=> $this->u_action . '&amp;parent_id=' . request_var('parent_id', 0),
			'S_DESC_BBCODE_CHECKED'		=> true,
			'S_DESC_SMILIES_CHECKED'	=> true,
			'S_DESC_URLS_CHECKED'		=> true,
			'S_PARENT_OPTIONS'			=> $parent_options,
		));
	}

	/**
	* Function for editing a category
	*/
	function edit_cat()
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_admin_path, $phpbb_root_path, $phpEx;

		include($phpbb_root_path . 'includes/message_parser.' . $phpEx);

		if (!$cat_id = request_var('cat_id', 0))
		{
			trigger_error('No Cat ID', E_USER_WARNING);
		}

		$submit = (isset($_POST['submit'])) ? true : false;
		if($submit)
		{
			if (!check_form_key('acp_video'))
			{
				trigger_error($user->lang['FORM_INVALID'] . adm_back_link($this->u_action), E_USER_WARNING);
			}				

			$dm_video_data = array();
			$dm_video_data = array(
				'cat_name'						=> request_var('cat_name', '', true),
				'parent_id'						=> request_var('parent_id', 0),

				'cat_parents'					=> '',
				'cat_desc_options'				=> 7,
				'cat_desc'						=> utf8_normalize_nfc(request_var('cat_desc', '', true)),
			);
			generate_text_for_storage($dm_video_data['cat_desc'], $dm_video_data['cat_desc_uid'], $dm_video_data['cat_desc_bitfield'], $dm_video_data['cat_desc_options'], request_var('desc_parse_bbcode', false), request_var('desc_parse_urls', false), request_var('desc_parse_smilies', false));
			$row = get_cat_info($cat_id);
			if ($row['parent_id'] != $dm_video_data['parent_id'])
			{
				//how many do we have to move and how far
				$moving_ids = ($row['right_id'] - $row['left_id']) + 1;
				$sql = 'SELECT MAX(right_id) AS right_id
					FROM ' . DM_VIDEO_CATS_TABLE;
				$result = $db->sql_query($sql);
				$highest = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);
				$moving_distance = ($highest['right_id'] - $row['left_id']) + 1;
				$stop_updating = $moving_distance + $row['left_id'];

				//update the moving video... move it to the end
				$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . '
					SET right_id = right_id + ' . $moving_distance . ',
						left_id = left_id + ' . $moving_distance . '
					WHERE left_id >= ' . $row['left_id'] . '
						AND right_id <= ' . $row['right_id'];
				$db->sql_query($sql);
				$new['left_id'] = $row['left_id'] + $moving_distance;
				$new['right_id'] = $row['right_id'] + $moving_distance;

				//close the gap, we got
				if ($dm_video_data['parent_id'] == 0)
				{//we move to root
					//left_id
					$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . '
						SET left_id = left_id - ' . $moving_ids . '
						WHERE left_id >= ' . $row['left_id'];
					$db->sql_query($sql);
					//right_id
					$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . '
						SET right_id = right_id - ' . $moving_ids . '
						WHERE right_id >= ' . $row['left_id'];
					$db->sql_query($sql);
				}
				else
				{
					//close the gap
					//left_id
					$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . '
						SET left_id = left_id - ' . $moving_ids . '
						WHERE left_id >= ' . $row['left_id'] . '
							AND right_id <= ' . $stop_updating;
					$db->sql_query($sql);
					//right_id
					$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . '
						SET right_id = right_id - ' . $moving_ids . '
						WHERE right_id >= ' . $row['left_id'] . '
							AND right_id <= ' . $stop_updating;
					$db->sql_query($sql);

					//create new gap
					//need parent_information
					$parent = get_cat_info($dm_video_data['parent_id']);
					//left_id
					$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . '
						SET left_id = left_id + ' . $moving_ids . '
						WHERE left_id >= ' . $parent['right_id'] . '
							AND right_id <= ' . $stop_updating;
					$db->sql_query($sql);
					//right_id
					$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . '
						SET right_id = right_id + ' . $moving_ids . '
						WHERE right_id >= ' . $parent['right_id'] . '
							AND right_id <= ' . $stop_updating;
					$db->sql_query($sql);

					//close the gap again
					//new parent right_id!!!
					$parent['right_id'] = $parent['right_id'] + $moving_ids;
					$move_back = ($new['right_id'] - $parent['right_id']) + 1;
					$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . '
						SET left_id = left_id - ' . $move_back . ',
							right_id = right_id - ' . $move_back . '
						WHERE left_id >= ' . $stop_updating;
					$db->sql_query($sql);
				}
			}
			if ($row['cat_name'] != $dm_video_data['cat_name'])
			{
				// the forum name has changed, clear the parents list of all forums (for safety)
				$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . "
					SET cat_parents = ''";
				$db->sql_query($sql);
			}
			$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . ' 
					SET ' . $db->sql_build_array('UPDATE', $dm_video_data) . '
					WHERE cat_id  = ' . (int) $cat_id;
			$db->sql_query($sql);
			$cache->destroy('sql', DM_VIDEO_CATS_TABLE);

			add_log('admin', 'LOG_ADMIN_VIDEO_CAT_UPDATED', $dm_video_data['cat_name']);
			trigger_error($user->lang['DMV_CAT_EDIT_DONE'] . adm_back_link($this->u_action . '&amp;parent_id=' . $dm_video_data['parent_id']));
		}
		$sql = 'SELECT *
			FROM ' . DM_VIDEO_CATS_TABLE . "
			WHERE cat_id = '$cat_id'";
		$result = $db->sql_query($sql);
		if ($db->sql_affectedrows($result) == 0)
		{
			trigger_error('The requested cat does not exist', E_USER_WARNING);
		}
		$dm_video_data = $db->sql_fetchrow($result);
		$dm_video_desc_data = generate_text_for_edit($dm_video_data['cat_desc'], $dm_video_data['cat_desc_uid'], $dm_video_data['cat_desc_options']);
		$parents_list = make_cat_select($dm_video_data['parent_id'], $cat_id);

		$template->assign_vars(array(
			'S_MODE_EDIT'				=> true,

			'S_ACTION'					=> $this->u_action . '&amp;action=edit&amp;cat_id=' . $cat_id,
			'S_PARENT_OPTIONS'			=> $parents_list,

			'CAT_NAME'					=> $dm_video_data['cat_name'],
			'CAT_DESC'					=> $dm_video_desc_data['text'],
			'S_DESC_BBCODE_CHECKED'		=> ($dm_video_desc_data['allow_bbcode']) ? true : false,
			'S_DESC_SMILIES_CHECKED'	=> ($dm_video_desc_data['allow_smilies']) ? true : false,
			'S_DESC_URLS_CHECKED'		=> ($dm_video_desc_data['allow_urls']) ? true : false,

			'S_MODE'				=> 'edit',
		));
	}

	/**
	* Function for deleting a category
	*/
	function delete_cat()
	{
		global $db, $template, $user, $cache;

		if (!$cat_id = request_var('cat_id', 0))
		{
			trigger_error('No Cat ID', E_USER_WARNING);
		}
		else
		{
			$sql = 'SELECT *
				FROM ' . DM_VIDEO_CATS_TABLE . "
				WHERE cat_id = '$cat_id'";
			$result = $db->sql_query($sql);
			if ($db->sql_affectedrows($result) == 0)
			{
				trigger_error($user->lang['DMV_CAT_NOT_EXISTS'], E_USER_WARNING);
			}
		}

		$submit = (isset($_POST['submit'])) ? true : false;
		if($submit)
		{
			if (!check_form_key('acp_video'))
			{
				trigger_error($user->lang['FORM_INVALID'] . adm_back_link($this->u_action), E_USER_WARNING);
			}				

			$dm_video = get_cat_info($cat_id);
			$handle_subs = request_var('handle_subs', 0);
			$handle_bugs = request_var('handle_bugs', 0);
			if (($dm_video['right_id'] - $dm_video['left_id']) > 2)
			{//handle subs if there
				//we have to learn how to delete or move the subs
				if ($handle_subs >= 0)
				{
					trigger_error($user->lang['DMV_DELETE_SUB_CATS'] . adm_back_link($this->u_action), E_USER_WARNING);
				}
			}

			// Check if category has files
			$sql = ' SELECT COUNT(video_id) AS has_videos
				FROM ' . DM_VIDEO_TABLE . '
				WHERE video_cat_id = ' . $cat_id;
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$has_videos = $row['has_videos'];
			$db->sql_freeresult($result);

			if ( $has_videos > 0 )
			{
				trigger_error($user->lang['DMV_DELETE_HAS_FILES'] . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// Get cat name
			$sql = 'SELECT video_cat_name
				FROM ' . DM_VIDEO_CATS_TABLE . "
				WHERE cat_id = '$cat_id'";
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$video_cat_name = $row['video_cat_name'];
			$db->sql_freeresult($result);

			//reorder the other videos
			//left_id
			$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . '
				SET left_id = left_id - 2
				WHERE left_id > ' . $dm_video['left_id'];
			$db->sql_query($sql);
			//right_id
			$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . '
				SET right_id = right_id - 2
				WHERE right_id > ' . $dm_video['left_id'];
			$db->sql_query($sql);
			$sql = 'DELETE FROM ' . DM_VIDEO_CATS_TABLE . "
				WHERE cat_id = '$cat_id'";
			$result = $db->sql_query($sql);
			$cache->destroy('sql', DM_VIDEO_CATS_TABLE);

			add_log('admin', 'LOG_ADMIN_VIDEO_CAT_DELETED', $video_cat_name);
			trigger_error($user->lang['DMV_CAT_DELETE_DONE'] . adm_back_link($this->u_action));
		}

		$catname = '';
		$sql = 'SELECT ec.*, COUNT(ed.video_id) AS videos
			FROM ' . DM_VIDEO_CATS_TABLE . ' AS ec
			LEFT JOIN ' . DM_VIDEO_TABLE . ' AS ed
				ON ec.cat_id = ed.video_cat_id
			WHERE ec.cat_id = ' . $cat_id . '
			GROUP BY ec.cat_id';
		$result = $db->sql_query($sql);

		$subs_found = false;
		while($row = $db->sql_fetchrow($result))
		{
			if($row['cat_id'] == $cat_id)
			{
				$thisvideo = $row;
				$subs_found = true;
			}
			else
			{
				$videorow[] = $row;
			}
		}

		if(!$subs_found)
		{
			trigger_error($user->lang['DMV_CAT_NOT_EXISTS'], E_USER_WARNING);
		}
		$db->sql_freeresult($result);

		$template->assign_vars(array(
			'S_MODE_DELETE'		=> true,

			'S_DM_VIDEO_ACTION'			=> $this->u_action . '&amp;action=delete&amp;dm_video_id=' . $cat_id,
			'DM_VIDEO_DELETE'			=> sprintf($user->lang['DMV_DM_VIDEO_ACP_CATSD'], $row['cat_name']),
			'S_PARENT_OPTIONS'			=> make_cat_select($thisvideo['parent_id'], $cat_id),
			'S_HAS_CHILDREN'			=> ($thisvideo['left_id'] + 1 != $thisvideo['right_id']) ? true : false,
			'S_HAS_BUGS'				=> ($thisvideo['videos'] > 0) ? true : false,
			'CAT_NAME'					=> $thisvideo['cat_name'],
			'DM_VIDEO_DESC'				=> generate_text_for_display($thisvideo['cat_desc'], $thisvideo['cat_desc_uid'], $thisvideo['cat_desc_bitfield'], $thisvideo['cat_desc_options']),
			'S_MOVE_DM_VIDEO_OPTIONS'	=> make_cat_select(false, $cat_id),
			'S_MOVE_IMAGE_OPTIONS'		=> make_cat_select(false, $cat_id, true),
		));
	}

	/**
	* Function for moving a category to another position
	*/
	function move_cat()
	{
		global $db, $user, $cache;

		if (!$cat_id = request_var('cat_id', 0))
		{
			trigger_error('No Cat ID', E_USER_WARNING);
		}
		else
		{
			$sql = 'SELECT *
				FROM ' . DM_VIDEO_CATS_TABLE . "
				WHERE cat_id = '$cat_id'";
			$result = $db->sql_query($sql);
			if ($db->sql_affectedrows($result) == 0)
			{
				trigger_error('The requested category does not exist', E_USER_WARNING);
			}
		}
		$move = request_var('move', '', true);
		$moving = get_cat_info($cat_id);

		$sql = 'SELECT cat_id, left_id, right_id
			FROM ' . DM_VIDEO_CATS_TABLE . "
			WHERE parent_id = {$moving['parent_id']}
				AND " . (($move == 'move_up') ? "right_id < {$moving['right_id']} ORDER BY right_id DESC" : "left_id > {$moving['left_id']} ORDER BY left_id ASC");
		$result = $db->sql_query_limit($sql, 1);

		$target = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$target = $row;
		}
		$db->sql_freeresult($result);

		if (!sizeof($target))
		{
			// The forum is already on top or bottom
			return false;
		}

		if ($move == 'move_up')
		{
			$left_id = $target['left_id'];
			$right_id = $moving['right_id'];

			$diff_up = $moving['left_id'] - $target['left_id'];
			$diff_down = $moving['right_id'] + 1 - $moving['left_id'];

			$move_up_left = $moving['left_id'];
			$move_up_right = $moving['right_id'];
		}
		else
		{
			$left_id = $moving['left_id'];
			$right_id = $target['right_id'];

			$diff_up = $moving['right_id'] + 1 - $moving['left_id'];
			$diff_down = $target['right_id'] - $moving['right_id'];

			$move_up_left = $moving['right_id'] + 1;
			$move_up_right = $target['right_id'];
		}

		// Now do the dirty job
		$sql = 'UPDATE ' . DM_VIDEO_CATS_TABLE . "
			SET left_id = left_id + CASE
				WHEN left_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
				ELSE {$diff_down}
			END,
			right_id = right_id + CASE
				WHEN right_id BETWEEN {$move_up_left} AND {$move_up_right} THEN -{$diff_up}
				ELSE {$diff_down}
			END,
			cat_parents = ''
			WHERE
				left_id BETWEEN {$left_id} AND {$right_id}
				AND right_id BETWEEN {$left_id} AND {$right_id}";
		$db->sql_query($sql);
		$cache->destroy('sql', DM_VIDEO_CATS_TABLE);
		redirect($this->u_action . '&amp;parent_id=' . $moving['parent_id']);
	}
	
	/**
	* Function for pagination
	*/
	function generate_page($replies, $url, $top)
	{
		global $config, $user;

		// Make sure $per_page is a valid value
		$per_page = ($top <= 0) ? 1 : $top;

		if (($replies) > $per_page)
		{
			$total_pages = ceil(($replies + 1) / $per_page);
			$pagination = '';

			$times = 1;
			for ($j = 0; $j < $replies + 1; $j += $per_page)
			{
				$pagination .= '<a href="' . $url . '&amp;start=' . $j . '">' . $times . '</a>';
				if ($times == 1 && $total_pages > 5)
				{
					$pagination .= ' ... ';

					// Display the last three pages
					$times = $total_pages - 3;
					$j += ($total_pages - 4) * $per_page;
				}
				else if ($times < $total_pages)
				{
					$pagination .= '<span class="page-sep">' . $user->lang['COMMA_SEPARATOR'] . '</span>';
				}
				$times++;
			}
		}
		else
		{
			$pagination = '1';
		}

		return $pagination;
	}
	/**
	* Post video announcement
	*/
	function create_announcement($video_subject, $video_msg, $forum_id)
	{
		global $db, $phpbb_root_path, $phpEx;

		if (!function_exists('submit_post'))
		{
			include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
		}

		$subject =  utf8_normalize_nfc($video_subject);
		$text =  utf8_normalize_nfc($video_msg);

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
			'forum_id'        	=> $forum_id,
			'icon_id'       	=> false,

			'enable_bbcode'     => true,
			'enable_smilies'    => true,
			'enable_urls'       => true,
			'enable_sig'        => true,

			'message'        	=> $text,
			'message_md5'    	=> (string) md5($text),

			'bbcode_bitfield'   => $bitfield,
			'bbcode_uid'        => $uid,

			'post_edit_locked'	=> 0,
			'topic_title'       => $subject,
			'notify_set'        => false,
			'notify'            => false,
			'post_time'         => 0,
			'forum_name'        => '',
			'enable_indexing'   => true,
		);

		submit_post('post', $subject, '', POST_NORMAL, $poll, $data);
	}
}

?>