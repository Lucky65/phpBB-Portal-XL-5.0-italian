<?php
/**
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
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
if (!defined('IN_INSTALL'))
{
	exit;
}

if (!empty($setmodules))
{
	$module[] = array(
		'module_type'		=> 'convert_ts',
		'module_title'		=> 'CONVERT_TS',
		'module_filename'	=> substr(basename(__FILE__), 0, -strlen($phpEx)-1),
		'module_order'		=> 30,
		'module_subs'		=> '',
		'module_stages'		=> array('INTRO', 'REQUIREMENTS', 'COPY_TABLE', 'CREATE_TABLE', 'IN_PROGRESS', 'ADVANCED', 'FINAL'),
		'module_reqs'		=> ''
	);
}

/**
* Installation
* @package install
*/
class install_convert_ts extends module
{
	var $batch_size = 500;

	function install_convert_ts(&$p_master)
	{
		$this->p_master = &$p_master;
	}

	function main($mode, $sub)
	{
		global $cache, $gallery_config, $phpbb_root_path, $phpEx, $template, $user;

		if ($user->data['user_type'] != USER_FOUNDER)
		{
			trigger_error('FOUNDER_NEEDED', E_USER_ERROR);
		}

		switch ($sub)
		{
			case 'intro':
				$this->page_title = $user->lang['SUB_INTRO'];

				$template->assign_vars(array(
					'TITLE'			=> $user->lang['CONVERT_TS_INTRO'],
					'BODY'			=> $user->lang['CONVERT_TS_INTRO_BODY'],
					'L_SUBMIT'		=> $user->lang['NEXT_STEP'],
					'U_ACTION'		=> append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=requirements"),
				));
			break;

			case 'requirements':
				$this->check_server_requirements($mode, $sub);
			break;

			case 'copy_table':
				$this->copy_schema($mode, $sub);
			break;

			case 'create_table':
				$this->load_schema($mode, $sub);
			break;

			case 'in_progress':
				$gallery_config = load_gallery_config();
				$this->convert_data($mode, $sub);
			break;

			case 'advanced':
				$gallery_config = load_gallery_config();
				$this->obtain_advanced_settings($mode, $sub);
			break;

			case 'final':
				$gallery_config = load_gallery_config();
				set_gallery_config('phpbb_gallery_version', NEWEST_PG_VERSION, true);
				$cache->purge();

				$template->assign_vars(array(
					'TITLE'		=> $user->lang['INSTALL_CONGRATS'],
					'BODY'		=> sprintf($user->lang['CONVERT_COMPLETE_EXPLAIN'], NEWEST_PG_VERSION) . $user->lang['PAYPAL_DEV_SUPPORT'],
					'L_SUBMIT'	=> $user->lang['GOTO_GALLERY'],
					'U_ACTION'	=> append_sid($phpbb_root_path . GALLERY_ROOT_PATH . 'index.' . $phpEx),
				));
			break;
		}

		$this->tpl_name = 'install_install';
	}

	/**
	* Checks that the server we are installing on meets the requirements for running phpBB
	*/
	function check_server_requirements($mode, $sub)
	{
		global $user, $template, $phpbb_root_path, $phpEx, $db;

		$this->page_title = $user->lang['STAGE_REQUIREMENTS'];

		$template->assign_vars(array(
			'TITLE'		=> $user->lang['REQUIREMENTS_TITLE'],
			'BODY'		=> $user->lang['REQUIREMENTS_EXPLAIN'],
		));

		$passed = array('php' => false, 'files' => false,);

		// Test for basic PHP settings
		$template->assign_block_vars('checks', array(
			'S_LEGEND'			=> true,
			'LEGEND'			=> $user->lang['PHP_SETTINGS'],
			'LEGEND_EXPLAIN'	=> $user->lang['PHP_SETTINGS_EXP'],
		));

		// Check for GD-Library
		if (@extension_loaded('gd') || can_load_dll('gd'))
		{
			$passed['php'] = true;
			$result = '<strong style="color:green">' . $user->lang['YES'] . '</strong>';
		}
		else
		{
			$result = '<strong style="color:red">' . $user->lang['NO'] . '</strong>';
		}

		$template->assign_block_vars('checks', array(
			'TITLE'			=> $user->lang['REQ_GD_LIBRARY'],
			'RESULT'		=> $result,

			'S_EXPLAIN'		=> false,
			'S_LEGEND'		=> false,
		));

		// Test for optional PHP settings
		$template->assign_block_vars('checks', array(
			'S_LEGEND'			=> true,
			'LEGEND'			=> $user->lang['PHP_SETTINGS_OPTIONAL'],
			'LEGEND_EXPLAIN'	=> $user->lang['PHP_SETTINGS_OPTIONAL_EXP'],
		));

		// Image rotate
		if (function_exists('imagerotate'))
		{
			$result = '<strong style="color:green">' . $user->lang['YES'] . '</strong>';
		}
		else
		{
			$gd_info = gd_info();
			$result = '<strong style="color:red">' . $user->lang['NO'] . '</strong><br />' . sprintf($user->lang['OPTIONAL_IMAGEROTATE_EXP'], $gd_info['GD Version']);
		}
		$template->assign_block_vars('checks', array(
			'TITLE'			=> $user->lang['OPTIONAL_IMAGEROTATE'],
			'TITLE_EXPLAIN'	=> $user->lang['OPTIONAL_IMAGEROTATE_EXPLAIN'],
			'RESULT'		=> $result,

			'S_EXPLAIN'		=> true,
			'S_LEGEND'		=> false,
		));

		// Exif data
		if (function_exists('exif_read_data'))
		{
			$result = '<strong style="color:green">' . $user->lang['YES'] . '</strong>';
		}
		else
		{
			$result = '<strong style="color:red">' . $user->lang['NO'] . '</strong><br />' . $user->lang['OPTIONAL_EXIFDATA_EXP'];
		}
		$template->assign_block_vars('checks', array(
			'TITLE'			=> $user->lang['OPTIONAL_EXIFDATA'],
			'TITLE_EXPLAIN'	=> $user->lang['OPTIONAL_EXIFDATA_EXPLAIN'],
			'RESULT'		=> $result,

			'S_EXPLAIN'		=> true,
			'S_LEGEND'		=> false,
		));

		// Check permissions on files/directories we need access to
		$template->assign_block_vars('checks', array(
			'S_LEGEND'			=> true,
			'LEGEND'			=> $user->lang['FILES_REQUIRED'],
			'LEGEND_EXPLAIN'	=> $user->lang['FILES_REQUIRED_EXPLAIN'],
		));

		$directories = array(GALLERY_IMPORT_PATH, GALLERY_UPLOAD_PATH, GALLERY_MEDIUM_PATH, GALLERY_CACHE_PATH);

		umask(0);

		$passed['files'] = true;
		foreach ($directories as $dir)
		{
			$write = false;

			// Now really check
			if (file_exists($phpbb_root_path . $dir) && is_dir($phpbb_root_path . $dir))
			{
				if (!@is_writable($phpbb_root_path . $dir))
				{
					@chmod($phpbb_root_path . $dir, 0777);
				}
			}

			// Now check if it is writable by storing a simple file
			$fp = @fopen($phpbb_root_path . $dir . 'test_lock', 'wb');
			if ($fp !== false)
			{
				$write = true;
			}
			@fclose($fp);

			@unlink($phpbb_root_path . $dir . 'test_lock');

			$passed['files'] = ($write && $passed['files']) ? true : false;

			$write = ($write) ? '<strong style="color:green">' . $user->lang['WRITABLE'] . '</strong>' : '<strong style="color:red">' . $user->lang['UNWRITABLE'] . '</strong>';

			$template->assign_block_vars('checks', array(
				'TITLE'		=> $dir,
				'RESULT'	=> $write,

				'S_EXPLAIN'	=> false,
				'S_LEGEND'	=> false,
			));
		}

		$url = (!in_array(false, $passed)) ? append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=copy_table") : append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=requirements");
		$submit = (!in_array(false, $passed)) ? $user->lang['INSTALL_START'] : $user->lang['INSTALL_TEST'];

		$template->assign_vars(array(
			'L_SUBMIT'	=> $submit,
			'S_HIDDEN'	=> '',
			'U_ACTION'	=> $url,
		));
	}


	/**
	* Load the contents of the schema into the database and then alter it based on what has been input during the installation
	*/
	function copy_schema($mode, $sub)
	{
		global $user, $template, $db, $table_prefix, $phpbb_root_path, $phpEx;

		$this->page_title = $user->lang['STAGE_COPY_TABLE'];
		$s_hidden_fields = '';

		$dbms_data = get_dbms_infos();
		$db_schema = $dbms_data['db_schema'];
		$delimiter = $dbms_data['delimiter'];

		// Create the tables
		nv_create_table('phpbb_gallery_copyts_albums', $dbms_data);
		nv_create_table('phpbb_gallery_copyts_users', $dbms_data);

		$offset_id = 0;
		$offset = 0;
		$batch_ary = array();
		$current_batch = 1;
		$current_batch_size = 1;

		$sql = 'SELECT *
			FROM ' . GALLERY_ALBUMS_TABLE . '
			ORDER BY album_user_id, album_left_id ASC';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			if ($row['album_user_id'] > $offset_id)
			{
				$offset_id = $row['album_user_id'];
				$offset = $row['album_left_id'] - 1;
			}
			$ary = array(
				'album_id'				=> $row['album_id'],
				'parent_id'				=> $row['album_parent_id'],
				'left_id'				=> $row['album_left_id'] - $offset,
				'right_id'				=> $row['album_right_id'] - $offset,
				'album_name'			=> $row['album_name'],
				'album_desc'			=> (isset($row['album_desc']))? $row['album_desc'] : '',
				'album_user_id'			=> $row['album_user_id'],
			);
			$offset_id = $row['album_user_id'];

			$batch_ary[$current_batch][] = $ary;

			$current_batch_size++;
			if ($current_batch_size = $this->batch_size)
			{
				$current_batch_size = 1;
				$current_batch++;
			}
		}
		$db->sql_freeresult($result);

		foreach ($batch_ary as $batch => $ary)
		{
			$db->sql_multi_insert($table_prefix . 'gallery_copyts_albums', $ary);
		}

		$batch_ary = array();
		$current_batch = 1;
		$current_batch_size = 1;

		$sql = 'SELECT *
			FROM ' . GALLERY_USERS_TABLE;
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$ary = array(
				'user_id'				=> $row['user_id'],
				'personal_album_id'		=> $row['user_album_id'],
			);
			$batch_ary[$current_batch][] = $ary;

			$current_batch_size++;
			if ($current_batch_size = $this->batch_size)
			{
				$current_batch_size = 1;
				$current_batch++;
			}
		}
		$db->sql_freeresult($result);

		foreach ($batch_ary as $batch => $ary)
		{
			$db->sql_multi_insert($table_prefix . 'gallery_copyts_users', $ary);
		}

		$template->assign_vars(array(
			'BODY'		=> $user->lang['STAGE_COPY_TABLE_EXPLAIN'],
			'L_SUBMIT'	=> $user->lang['NEXT_STEP'],
			'S_HIDDEN'	=> '',
			'U_ACTION'	=> append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=create_table"),
		));
	}


	/**
	* Load the contents of the schema into the database and then alter it based on what has been input during the installation
	*/
	function load_schema($mode, $sub)
	{
		global $cache, $gallery_config, $phpbb_root_path, $phpEx, $template, $user;
		include($phpbb_root_path . 'includes/acp/auth.' . $phpEx);

		$this->page_title = $user->lang['STAGE_CREATE_TABLE'];
		$s_hidden_fields = '';

		$dbms_data = get_dbms_infos();
		$db_schema = $dbms_data['db_schema'];
		$delimiter = $dbms_data['delimiter'];

		// Create the tables
		nv_create_table('phpbb_gallery_albums', $dbms_data);
		nv_create_table('phpbb_gallery_albums_track', $dbms_data);
		nv_create_table('phpbb_gallery_comments', $dbms_data);
		nv_create_table('phpbb_gallery_config', $dbms_data);
		nv_create_table('phpbb_gallery_contests', $dbms_data);
		nv_create_table('phpbb_gallery_favorites', $dbms_data);
		nv_create_table('phpbb_gallery_images', $dbms_data);
		nv_create_table('phpbb_gallery_modscache', $dbms_data);
		nv_create_table('phpbb_gallery_permissions', $dbms_data);
		nv_create_table('phpbb_gallery_rates', $dbms_data);
		nv_create_table('phpbb_gallery_reports', $dbms_data);
		nv_create_table('phpbb_gallery_roles', $dbms_data);
		nv_create_table('phpbb_gallery_users', $dbms_data);
		nv_create_table('phpbb_gallery_watch', $dbms_data);

		// Create columns
		nv_add_column(SESSIONS_TABLE,	'session_album_id',	array('UINT', 0));
		nv_add_column(LOG_TABLE,		'album_id',			array('UINT', 0));
		nv_add_column(LOG_TABLE,		'image_id',			array('UINT', 0));

		nv_add_index(GALLERY_USERS_TABLE,	'pg_palbum_id',	array('personal_album_id'));
		nv_add_index(SESSIONS_TABLE,		'session_aid',	array('session_album_id'));

		// Set default config
		set_default_config();

		$auth_admin = new auth_admin();
		$auth_admin->acl_add_option(array(
			'local'			=> array(),
			'global'		=> array('a_gallery_manage', 'a_gallery_albums', 'a_gallery_import', 'a_gallery_cleanup')
		));
		$cache->destroy('acl_options');

		$template->assign_vars(array(
			'BODY'		=> $user->lang['STAGE_CREATE_TABLE_EXPLAIN'],
			'L_SUBMIT'	=> $user->lang['NEXT_STEP'],
			'S_HIDDEN'	=> '',
			'U_ACTION'	=> append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=in_progress"),
		));
	}

	/**
	* Load the contents of the old tables into the database
	*/
	function convert_data($mode, $sub)
	{
		global $db, $gallery_config, $table_prefix, $template, $user, $phpbb_root_path, $phpEx;

		$this->page_title = $user->lang['STAGE_IN_PROGRESS'];

		$step = request_var('step', 0);
		$next_update_url = $body = '';

		switch ($step)
		{
			case 0:
				$batch_ary = array();
				$current_batch = 1;
				$current_batch_size = 1;

				$sql = 'SELECT *
					FROM ' . $table_prefix . 'gallery_rate
					ORDER BY rate_pic_id';
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{
					$ary = array(
						'rate_image_id'					=> $row['rate_pic_id'],
						'rate_user_id'					=> $row['rate_user_id'],
						'rate_user_ip'					=> $row['rate_user_ip'],
						'rate_point'					=> $row['rate_point'],
					);
					$batch_ary[$current_batch][] = $ary;

					$current_batch_size++;
					if ($current_batch_size = $this->batch_size)
					{
						$current_batch_size = 1;
						$current_batch++;
					}
				}
				$db->sql_freeresult($result);

				foreach ($batch_ary as $batch => $ary)
				{
					$db->sql_multi_insert(GALLERY_RATES_TABLE, $ary);
				}

				$body = $user->lang['CONVERTED_RATES'];
				$next_update_url = append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=in_progress&amp;step=1");
			break;

			case 1:
				$batch_ary = array();
				$current_batch = 1;
				$current_batch_size = 1;
				$sql = $db->sql_build_query('SELECT', array(
					'SELECT'	=> 'c.*, u.user_colour',
					'FROM'		=> array($table_prefix . 'gallery_comment' => 'c'),
					'LEFT_JOIN'	=> array(
						array(
							'FROM'	=> array(USERS_TABLE => 'u'),
							'ON'	=> 'c.comment_user_id = u.user_id',
						),
					),
					'ORDER_BY'	=> 'c.comment_id ASC',
				));
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{
					$row['comment'] = $row['comment_text'];
					$row['comment_bbcode_options'] = 7;
					$comment_text_data = generate_text_for_edit($row['comment'], $row['comment_bbcode_uid'], $row['comment_bbcode_options']);
					$comment_data = array(
						'comment_id'			=> $row['comment_id'],
						'comment_image_id'		=> $row['comment_pic_id'],
						'comment_user_id'		=> $row['comment_user_id'],
						'comment_username'		=> $row['comment_username'],
						'comment_user_colour'	=> (isset($row['user_colour'])) ? $row['user_colour'] : '',
						'comment_user_ip'		=> $row['comment_user_ip'],
						'comment_time'			=> $row['comment_time'],
						'comment'				=> $comment_text_data['text'],
						'comment_uid'			=> '',
						'comment_bitfield'		=> '',
						'comment_options'		=> 7,
						'comment_edit_time'		=> (isset($row['comment_edit_time']) ? $row['comment_edit_time'] : 0),
						'comment_edit_count'	=> (isset($row['comment_edit_count']) ? $row['comment_edit_count'] : 0),
						'comment_edit_user_id'	=> (isset($row['comment_edit_user_id']) ? $row['comment_edit_user_id'] : 0),
					);
					generate_text_for_storage($comment_data['comment'], $comment_data['comment_uid'], $comment_data['comment_bitfield'], $comment_data['comment_options'], 1, 1, 1);
					unset($comment_data['comment_options']);

					$batch_ary[$current_batch][] = $comment_data;

					$current_batch_size++;
					if ($current_batch_size = $this->batch_size)
					{
						$current_batch_size = 1;
						$current_batch++;
					}
				}
				$db->sql_freeresult($result);

				foreach ($batch_ary as $batch => $ary)
				{
					$db->sql_multi_insert(GALLERY_COMMENTS_TABLE, $ary);
				}

				$body = $user->lang['CONVERTED_COMMENTS'];
				$next_update_url = append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=in_progress&amp;step=2");
			break;

			case 2:
				$personal_albums = 0;
				$batch_ary = $batch2_ary = array();
				$current_batch = $current_batch2 = 1;
				$current_batch_size = $current_batch2_size = 1;

				$sql = 'SELECT *
					FROM ' . $table_prefix . 'gallery_copyts_albums';
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$row['album_desc_uid'] = $row['album_desc_options'] = $row['album_desc_bitfield'] = '';
					$row['album_desc'] = $row['album_desc'];
					$album_desc_data = generate_text_for_edit($row['album_desc'], $row['album_desc_uid'], $row['album_desc_options']);
					$album_data = array(
						'album_id'						=> $row['album_id'],
						'album_name'					=> $row['album_name'],
						'parent_id'						=> $row['parent_id'],
						'left_id'						=> $row['left_id'],
						'right_id'						=> $row['right_id'],
						'album_parents'					=> '',
						'album_type'					=> ($row['album_user_id']) ? ALBUM_UPLOAD : ALBUM_CAT,
						'album_status'					=> ITEM_UNLOCKED,
						'album_desc'					=> $album_desc_data['text'],
						'album_desc_uid'				=> '',
						'album_desc_bitfield'			=> '',
						'album_desc_options'			=> 7,
						'album_user_id'					=> $row['album_user_id'],
					);
					generate_text_for_storage($album_data['album_desc'], $album_data['album_desc_uid'], $album_data['album_desc_bitfield'], $album_data['album_desc_options'], true, true, true);
					$batch_ary[$current_batch][] = $album_data;

					$current_batch_size++;
					if ($current_batch_size = $this->batch_size)
					{
						$current_batch_size = 1;
						$current_batch++;
					}

					if ($row['left_id'] == 1 && $row['album_user_id'])
					{
						$ary = array(
							'user_id'			=> $row['album_user_id'],
							'personal_album_id'	=> $row['album_id'],
						);
						$batch2_ary[$current_batch2][] = $ary;

						$current_batch2_size++;
						if ($current_batch2_size = $this->batch_size)
						{
							$current_batch2_size = 1;
							$current_batch2++;
						}
						$personal_albums++;
					}
				}
				$db->sql_freeresult($result);

				foreach ($batch_ary as $batch => $ary)
				{
					$db->sql_multi_insert(GALLERY_ALBUMS_TABLE, $ary);
				}
				foreach ($batch2_ary as $batch => $ary)
				{
					$db->sql_multi_insert(GALLERY_USERS_TABLE, $ary);
				}

				// Update the config for the statistic on the index
				$sql = $db->sql_build_query('SELECT', array(
					'SELECT'	=> 'a.album_id, u.user_id, u.username, u.user_colour',
					'FROM'		=> array(GALLERY_ALBUMS_TABLE => 'a'),
					'LEFT_JOIN'	=> array(
						array(
							'FROM'	=> array(USERS_TABLE => 'u'),
							'ON'	=> 'u.user_id = a.album_user_id',
						),
					),
					'WHERE'		=> 'a.album_user_id <> 0 AND a.parent_id = 0',
					'ORDER_BY'	=> 'a.album_id DESC',
				));
				$result = $db->sql_query_limit($sql, 1);
				$newest_pgallery = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				set_gallery_config('newest_pgallery_user_id', (int) $newest_pgallery['user_id']);
				set_gallery_config('newest_pgallery_username', (string) $newest_pgallery['username']);
				set_gallery_config('newest_pgallery_user_colour', (string) $newest_pgallery['user_colour']);
				set_gallery_config('newest_pgallery_album_id', (int) $newest_pgallery['album_id']);
				set_gallery_config('personal_counter', $personal_albums);

				$body = $user->lang['CONVERTED_ALBUMS'] . '<br />' . $user->lang['CONVERTED_PERSONALS'];
				$next_update_url = append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=in_progress&amp;step=3");
			break;

			case 3:
				$batch_ary = array();
				$current_batch = 1;
				$current_batch_size = 1;

				$sql = $db->sql_build_query('SELECT', array(
					'SELECT'	=> 'i.*, u.user_colour, u.username',
					'FROM'		=> array($table_prefix . 'gallery_pics' => 'i'),
					'LEFT_JOIN'	=> array(
						array(
							'FROM'	=> array(USERS_TABLE => 'u'),
							'ON'	=> 'i.pic_user_id = u.user_id',
						),
					),
					'ORDER_BY'	=> 'i.pic_id ASC',
				));
				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{
					$row['image_desc_uid'] = $row['image_desc_options'] = $row['image_desc_bitfield'] = '';
					$row['image_desc'] = $row['pic_desc'];
					$image_desc_data = generate_text_for_edit($row['image_desc'], $row['image_desc_uid'], $row['image_desc_options']);
					$image_data = array(
						'image_id'				=> $row['pic_id'],
						'image_filename'		=> $row['pic_physical_filename'],
						'image_thumbnail'		=> $row['pic_physical_filename'],
						'image_name'			=> $row['pic_title'],
						'image_name_clean'		=> utf8_clean_string($row['pic_title']),
						'image_desc'			=> $image_desc_data['text'],
						'image_desc_uid'		=> '',
						'image_desc_bitfield'	=> '',
						'image_desc_options'	=> 7,
						'image_user_id'			=> $row['pic_user_id'],
						'image_username'		=> (isset($row['username'])) ? $row['username'] : $row['pic_username'],
						'image_username_clean'	=> (isset($row['username'])) ? utf8_clean_string($row['username']) : utf8_clean_string($row['pic_username']),
						'image_user_colour'		=> (isset($row['user_colour'])) ? $row['user_colour'] : '',
						'image_user_ip'			=> $row['pic_user_ip'],
						'image_time'			=> $row['pic_time'],
						'image_album_id'		=> $row['pic_album_id'],
						'image_view_count'		=> $row['pic_views'],
						'image_status'			=> ($row['pic_lock']) ? IMAGE_LOCKED : IMAGE_APPROVED,
						'image_reported'		=> 0,
						'image_exif_data'		=> '',
					);
					generate_text_for_storage($image_data['image_desc'], $image_data['image_desc_uid'], $image_data['image_desc_bitfield'], $image_data['image_desc_options'], true, true, true);
					unset($image_data['image_desc_options']);
					$batch_ary[$current_batch][] = $image_data;

					$current_batch_size++;
					if ($current_batch_size = $this->batch_size)
					{
						$current_batch_size = 1;
						$current_batch++;
					}
				}
				$db->sql_freeresult($result);

				foreach ($batch_ary as $batch => $ary)
				{
					$db->sql_multi_insert(GALLERY_IMAGES_TABLE, $ary);
				}

				$body = $user->lang['CONVERTED_IMAGES'];
				$next_update_url = append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=in_progress&amp;step=4");
			break;

			case 4:
				//case 4: $user->lang['CONVERTED_PERSONALS'] is already done in case 2 so we don't do it again

			case 5:
				//Step 5.1: Number of public images and last_image_id
				$sql = 'SELECT COUNT(i.image_id) images, MAX(i.image_id) last_image_id, i.image_album_id
					FROM ' . GALLERY_IMAGES_TABLE . ' i
					WHERE i.image_status <> ' . IMAGE_UNAPPROVED . '
					GROUP BY i.image_album_id';
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$sql_ary = array(
						'album_images'			=> $row['images'],
						'album_last_image_id'	=> $row['last_image_id'],
					);
					$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
						WHERE ' . $db->sql_in_set('album_id', $row['image_album_id']);
					$db->sql_query($sql);
				}
				$db->sql_freeresult($result);

				//Step 5.2: Number of real images and album_type
				$sql = 'SELECT COUNT(i.image_id) images, i.image_album_id
					FROM ' . GALLERY_IMAGES_TABLE . " i
					GROUP BY i.image_album_id";
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$sql_ary = array(
						'album_images_real'	=> $row['images'],
						'album_type'		=> ALBUM_UPLOAD,
					);
					$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
						WHERE ' . $db->sql_in_set('album_id', $row['image_album_id']);
					$db->sql_query($sql);
				}
				$db->sql_freeresult($result);

				//Step 5.3: Last image data
				$sql = $db->sql_build_query('SELECT', array(
					'SELECT'	=> 'a.album_id, a.album_last_image_id, i.image_time, i.image_name, i.image_user_id, i.image_username, i.image_user_colour, u.user_colour',
					'FROM'		=> array(GALLERY_ALBUMS_TABLE => 'a'),
					'LEFT_JOIN'	=> array(
						array(
							'FROM'	=> array(GALLERY_IMAGES_TABLE => 'i'),
							'ON'	=> 'a.album_last_image_id = i.image_id',
						),
						array(
							'FROM'	=> array(USERS_TABLE => 'u'),
							'ON'	=> 'a.album_user_id = u.user_id',
						),
					),
					'WHERE'		=> 'a.album_last_image_id > 0',
				));
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$sql_ary = array(
						'album_last_image_time'		=> $row['image_time'],
						'album_last_image_name'		=> $row['image_name'],
						'album_last_username'		=> $row['image_username'],
						'album_last_user_colour'	=> isset($row['user_colour']) ? $row['user_colour'] : '',
						'album_last_user_id'		=> $row['image_user_id'],
					);
					$sql = 'UPDATE ' . GALLERY_ALBUMS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
						WHERE ' . $db->sql_in_set('album_id', $row['album_id']);
					$db->sql_query($sql);
				}
				$db->sql_freeresult($result);

				$body = $user->lang['CONVERTED_RESYNC_ALBUMS'];
				$next_update_url = append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=in_progress&amp;step=6");
			break;

			case 6:
				$num_images = 0;
				$batch_ary = array();
				$current_batch = 1;
				$current_batch_size = 1;

				$sql = $db->sql_build_query('SELECT', array(
					'SELECT'	=> 'u.user_id, COUNT(i.image_id) AS images',
					'FROM'		=> array(USERS_TABLE => 'u'),
					'LEFT_JOIN'	=> array(
						array(
							'FROM'	=> array(GALLERY_IMAGES_TABLE => 'i'),
							'ON'	=> 'i.image_user_id = u.user_id AND i.image_status <> ' . IMAGE_UNAPPROVED,
						),
					),
					'GROUP_BY'		=> 'i.image_user_id',
				));
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$num_images = $num_images + $row['images'];
					$sql = 'UPDATE ' . GALLERY_USERS_TABLE . ' SET user_images = ' . (int) $row['images'] . '
						WHERE user_id = ' . (int) $row['user_id'];
					$db->sql_query($sql);
					if ($db->sql_affectedrows() <= 0)
					{
						$ary = array(
							'user_id'				=> $row['user_id'],
							'user_images'			=> $row['images'],
						);
						$batch_ary[$current_batch][] = $ary;

						$current_batch_size++;
						if ($current_batch_size = $this->batch_size)
						{
							$current_batch_size = 1;
							$current_batch++;
						}
					}
				}
				$db->sql_freeresult($result);
				if (sizeof($batch_ary))
				{
					foreach ($batch_ary as $batch => $ary)
					{
						$db->sql_multi_insert(GALLERY_USERS_TABLE, $ary);
					}
				}
				set_config('num_images', $num_images, true);

				$body = $user->lang['CONVERTED_RESYNC_COUNTS'];
				$next_update_url = append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=in_progress&amp;step=7");
			break;

			case 7:
				$sql = 'SELECT rate_image_id, COUNT(rate_user_ip) image_rates, AVG(rate_point) image_rate_avg, SUM(rate_point) image_rate_points
					FROM ' . GALLERY_RATES_TABLE . '
					GROUP BY rate_image_id';
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$sql = 'UPDATE ' . GALLERY_IMAGES_TABLE . '
						SET image_rates = ' . $row['image_rates'] . ',
							image_rate_points = ' . $row['image_rate_points'] . ',
							image_rate_avg = ' . round($row['image_rate_avg'], 2) * 100 . '
						WHERE image_id = ' . $row['rate_image_id'];
					$db->sql_query($sql);
				}
				$db->sql_freeresult($result);

				$body = $user->lang['CONVERTED_RESYNC_RATES'];
				$next_update_url = append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=in_progress&amp;step=8");
			break;

			case 8:
				$sql = 'SELECT COUNT(comment_id) comments, MAX(comment_id) image_last_comment, comment_image_id
					FROM ' . GALLERY_COMMENTS_TABLE . "
					GROUP BY comment_image_id";
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$sql = 'UPDATE ' . GALLERY_IMAGES_TABLE . ' SET image_comments = ' . $row['comments'] . ',
						image_last_comment = ' . $row['image_last_comment'] . '
						WHERE ' . $db->sql_in_set('image_id', $row['comment_image_id']);
					$db->sql_query($sql);
				}
				$db->sql_freeresult($result);

				$num_comments = 0;
				$sql = 'SELECT SUM(image_comments) comments
					FROM ' . GALLERY_IMAGES_TABLE . '
					WHERE image_status <> ' . IMAGE_UNAPPROVED;
				$result = $db->sql_query($sql);
				$num_comments = (int) $db->sql_fetchfield('comments');
				$db->sql_freeresult($result);
				set_gallery_config('num_comments', $num_comments, true);

				$body = $user->lang['CONVERTED_RESYNC_COMMENTS'];
				$next_update_url = append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=in_progress&amp;step=9");
			break;

			case 9:
				// Misc updates
				// Set the lastmark to the current time of update
				$sql = 'UPDATE ' . GALLERY_USERS_TABLE . '
					SET user_lastmark = ' . time() . '
					WHERE user_lastmark = 0';
				$db->sql_query($sql);

				$body = $user->lang['CONVERTED_MISC'];
				$next_update_url = append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=advanced");
			break;
		}


		$template->assign_vars(array(
			'BODY'		=> $body,
			'L_SUBMIT'	=> $user->lang['NEXT_STEP'],
			'S_HIDDEN'	=> '',
			'U_ACTION'	=> $next_update_url,
		));
	}

	/**
	* Provide an opportunity to customise some advanced settings during the install
	* in case it is necessary for them to be set to access later
	*/
	function obtain_advanced_settings($mode, $sub)
	{
		global $db, $gallery_config, $template, $user, $phpbb_root_path, $phpEx;

		$create = request_var('create', '');
		if ($create)
		{
			// Add modules
			$choosen_acp_module = request_var('acp_module', 0);
			$choosen_log_module = request_var('log_module', 0);
			$choosen_ucp_module = request_var('ucp_module', 0);
			if ($choosen_acp_module < 0)
			{
				$acp_mods_tab = array('module_basename' => '',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => 0,	'module_class' => 'acp',	'module_langname'=> 'ACP_CAT_DOT_MODS',	'module_mode' => '',	'module_auth' => '');
				add_module($acp_mods_tab);
				$choosen_acp_module = $db->sql_nextid();
			}
			// ACP
			$acp_gallery = array('module_basename' => '',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $choosen_acp_module,	'module_class' => 'acp',	'module_langname'=> 'PHPBB_GALLERY',	'module_mode' => '',	'module_auth' => '');
			add_module($acp_gallery);
			$acp_module_id = $db->sql_nextid();
			set_gallery_config('acp_parent_module', $acp_module_id);

			$acp_gallery_overview = array('module_basename' => 'gallery',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $acp_module_id,	'module_class' => 'acp',	'module_langname'=> 'ACP_GALLERY_OVERVIEW',	'module_mode' => 'overview',	'module_auth' => 'acl_a_gallery_manage');
			add_module($acp_gallery_overview);
			$acp_configure_gallery = array('module_basename' => 'gallery_config',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $acp_module_id,	'module_class' => 'acp',	'module_langname'=> 'ACP_GALLERY_CONFIGURE_GALLERY',	'module_mode' => 'main',	'module_auth' => 'acl_a_gallery_manage');
			add_module($acp_configure_gallery);
			$acp_gallery_manage_albums = array('module_basename' => 'gallery_albums',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $acp_module_id,	'module_class' => 'acp',	'module_langname'=> 'ACP_GALLERY_MANAGE_ALBUMS',	'module_mode' => 'manage',	'module_auth' => 'acl_a_gallery_albums');
			add_module($acp_gallery_manage_albums);
			$album_permissions = array('module_basename' => 'gallery_permissions',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $acp_module_id,	'module_class' => 'acp',	'module_langname'=> 'ACP_GALLERY_ALBUM_PERMISSIONS',	'module_mode' => 'manage',	'module_auth' => 'acl_a_gallery_albums');
			add_module($album_permissions);
			$album_permissions_copy = array('module_basename' => 'gallery_permissions',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $acp_module_id,	'module_class' => 'acp',	'module_langname'=> 'ACP_GALLERY_ALBUM_PERMISSIONS_COPY',	'module_mode' => 'copy',	'module_auth' => 'acl_a_gallery_albums');
			add_module($album_permissions_copy);
			$import_images = array('module_basename' => 'gallery',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $acp_module_id,	'module_class' => 'acp',	'module_langname'=> 'ACP_IMPORT_ALBUMS',	'module_mode' => 'import_images',	'module_auth' => 'acl_a_gallery_import');
			add_module($import_images);
			$cleanup = array('module_basename' => 'gallery',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $acp_module_id,	'module_class' => 'acp',	'module_langname' => 'ACP_GALLERY_CLEANUP',	'module_mode' => 'cleanup',	'module_auth' => 'acl_a_gallery_cleanup');
			add_module($cleanup);

			// UCP
			$ucp_gallery_overview = array('module_basename' => '',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $choosen_ucp_module,	'module_class' => 'ucp',	'module_langname'=> 'UCP_GALLERY',	'module_mode' => 'overview',	'module_auth' => '');
			add_module($ucp_gallery_overview);
			$ucp_module_id = $db->sql_nextid();
			set_gallery_config('ucp_parent_module', $ucp_module_id);

			$ucp_gallery = array('module_basename' => 'gallery',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $ucp_module_id,	'module_class' => 'ucp',	'module_langname' => 'UCP_GALLERY_SETTINGS',	'module_mode' => 'manage_settings',	'module_auth' => '');
			add_module($ucp_gallery);
			$ucp_gallery = array('module_basename' => 'gallery',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $ucp_module_id,	'module_class' => 'ucp',	'module_langname' => 'UCP_GALLERY_PERSONAL_ALBUMS',	'module_mode' => 'manage_albums',	'module_auth' => '');
			add_module($ucp_gallery);
			$ucp_gallery = array('module_basename' => 'gallery',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $ucp_module_id,	'module_class' => 'ucp',	'module_langname' => 'UCP_GALLERY_WATCH',	'module_mode' => 'manage_subscriptions',	'module_auth' => '');
			add_module($ucp_gallery);
			$ucp_gallery = array('module_basename' => 'gallery',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $ucp_module_id,	'module_class' => 'ucp',	'module_langname' => 'UCP_GALLERY_FAVORITES',	'module_mode' => 'manage_favorites',	'module_auth' => '');
			add_module($ucp_gallery);

			// Logs
			$gallery_log = array('module_basename' => 'logs',	'module_enabled' => 1,	'module_display' => 1,	'parent_id' => $choosen_log_module,	'module_class' => 'acp',	'module_langname' => 'ACP_GALLERY_LOGS',	'module_mode' => 'gallery',	'module_auth' => 'acl_a_viewlogs');
			add_module($gallery_log);

			// Add album-BBCode
			add_bbcode('album');
			$s_hidden_fields = '';
			$url = append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=final");
		}
		else
		{
			$data = array(
				'acp_module'		=> MODULE_DEFAULT_ACP,
				'log_module'		=> MODULE_DEFAULT_LOG,
				'ucp_module'		=> MODULE_DEFAULT_UCP,
			);

			foreach ($this->gallery_config_options as $config_key => $vars)
			{
				if (!is_array($vars) && strpos($config_key, 'legend') === false)
				{
					continue;
				}

				if (strpos($config_key, 'legend') !== false)
				{
					$template->assign_block_vars('options', array(
						'S_LEGEND'		=> true,
						'LEGEND'		=> $user->lang[$vars])
					);

					continue;
				}

				$options = isset($vars['options']) ? $vars['options'] : '';
				$template->assign_block_vars('options', array(
					'KEY'			=> $config_key,
					'TITLE'			=> $user->lang[$vars['lang']],
					'S_EXPLAIN'		=> $vars['explain'],
					'S_LEGEND'		=> false,
					'TITLE_EXPLAIN'	=> ($vars['explain']) ? $user->lang[$vars['lang'] . '_EXPLAIN'] : '',
					'CONTENT'		=> $this->p_master->input_field($config_key, $vars['type'], $data[$config_key], $options),
					)
				);
			}
			$s_hidden_fields = '<input type="hidden" name="create" value="true" />';
			$url = append_sid("{$phpbb_root_path}install_gallery/index.$phpEx", "mode=$mode&amp;sub=advanced");
		}

		$submit = $user->lang['NEXT_STEP'];

		$template->assign_vars(array(
			'TITLE'		=> $user->lang['STAGE_ADVANCED'],
			'BODY'		=> $user->lang['STAGE_ADVANCED_EXPLAIN'],
			'L_SUBMIT'	=> $submit,
			'S_HIDDEN'	=> $s_hidden_fields,
			'U_ACTION'	=> $url,
		));
	}

	/**
	* The information below will be used to build the input fields presented to the user
	*/
	var $gallery_config_options = array(
		'legend1'				=> 'MODULES_PARENT_SELECT',
		'acp_module'			=> array('lang' => 'MODULES_SELECT_4ACP', 'type' => 'select', 'options' => 'module_select(\'acp\', 31, \'ACP_CAT_DOT_MODS\')', 'explain' => false),
		'log_module'			=> array('lang' => 'MODULES_SELECT_4LOG', 'type' => 'select', 'options' => 'module_select(\'acp\', 25, \'ACP_FORUM_LOGS\')', 'explain' => false),
		'ucp_module'			=> array('lang' => 'MODULES_SELECT_4UCP', 'type' => 'select', 'options' => 'module_select(\'ucp\', 0, \'\')', 'explain' => false),
	);
}

?>