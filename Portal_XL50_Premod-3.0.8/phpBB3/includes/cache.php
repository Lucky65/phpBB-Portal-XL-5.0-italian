<?php
/**
*
* @package acm
* @version $Id$
* @copyright (c) 2005 phpBB Group
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
* Class for grabbing/handling cached entries, extends acm_file or acm_db depending on the setup
* @package acm
*/
class cache extends acm
{
	/**
	* Get config values
	*/
	function obtain_config()
	{
		global $db;

		if (($config = $this->get('config')) !== false)
		{
			$sql = 'SELECT config_name, config_value
				FROM ' . CONFIG_TABLE . '
				WHERE is_dynamic = 1';
			$result = $db->sql_query($sql);

			while ($row = $db->sql_fetchrow($result))
			{
				$config[$row['config_name']] = $row['config_value'];
			}
			$db->sql_freeresult($result);
		}
		else
		{
			$config = $cached_config = array();

			$sql = 'SELECT config_name, config_value, is_dynamic
				FROM ' . CONFIG_TABLE;
			$result = $db->sql_query($sql);

			while ($row = $db->sql_fetchrow($result))
			{
				if (!$row['is_dynamic'])
				{
					$cached_config[$row['config_name']] = $row['config_value'];
				}

				$config[$row['config_name']] = $row['config_value'];
			}
			$db->sql_freeresult($result);

			$this->put('config', $cached_config);
		}
		
		/**
		*   AUTOMATIC DAYLIGHT SAVINGS TIME 2
		*
		*   If your script halts at this point, you tried to call $cache->obtain_config() without including common.php.
		*   Add the following line to your main script:
		*   require($phpbb_root_path . 'includes/automatic_dst.' . $phpEx);
		*/
		$config['board_timezone'] = automatic_dst_cache($config['board_timezone']);
		$config['board_dst'] = AUTOMATIC_DST_BOARD_ISDST;

		return $config;
	}

	/**
	* Obtain portal config
	*/
	function obtain_portal_config()
	{
		global $db, $cache;
	
		if (($portal_config = $cache->get('portal_config')) !== true)
		{
			$portal_config = $cached_portal_config = array();
	
			$sql = 'SELECT config_name, config_value
				FROM ' . PORTAL_CONFIG_TABLE;
			$result = $db->sql_query($sql);
	
			while ($row = $db->sql_fetchrow($result))
			{
				$cached_portal_config[$row['config_name']] = $row['config_value'];
				$portal_config[$row['config_name']] = $row['config_value'];
			}
			$db->sql_freeresult($result);
	
			$cache->put('portal_config', $cached_portal_config);
		}
	
		return $portal_config;
	}

	/**
	* Obtain list of naughty words and build preg style replacement arrays for use by the
	* calling script
	*/
	function obtain_word_list()
	{
		global $db;

		if (($censors = $this->get('_word_censors')) === false)
		{
			$sql = 'SELECT word, replacement
				FROM ' . WORDS_TABLE;
			$result = $db->sql_query($sql);

			$censors = array();
			$unicode = ((version_compare(PHP_VERSION, '5.1.0', '>=') || (version_compare(PHP_VERSION, '5.0.0-dev', '<=') && version_compare(PHP_VERSION, '4.4.0', '>='))) && @preg_match('/\p{L}/u', 'a') !== false) ? true : false;

			while ($row = $db->sql_fetchrow($result))
			{
				if ($unicode)
				{
					// Unescape the asterisk to simplify further conversions
					$row['word'] = str_replace('\*', '*', preg_quote($row['word'], '#'));
					
					// Replace the asterisk inside the pattern, at the start and at the end of it with regexes
					$row['word'] = preg_replace(array('#(?<=[\p{Nd}\p{L}_])\*(?=[\p{Nd}\p{L}_])#iu', '#^\*#', '#\*$#'), array('([\x20]*?|[\p{Nd}\p{L}_-]*?)', '[\p{Nd}\p{L}_-]*?', '[\p{Nd}\p{L}_-]*?'), $row['word']);

					// Generate the final substitution
					$censors['match'][] = '#(?<![\p{Nd}\p{L}_-])(' . $row['word'] . ')(?![\p{Nd}\p{L}_-])#iu';
				}
				else
				{
					$censors['match'][] = '#(?<!\S)(' . str_replace('\*', '\S*?', preg_quote($row['word'], '#')) . ')(?!\S)#iu';
				}

				$censors['replace'][] = $row['replacement'];
			}
			$db->sql_freeresult($result);

			$this->put('_word_censors', $censors);
		}

		return $censors;
	}

	/**
	* Obtain currently listed icons
	*/
	function obtain_icons()
	{
		if (($icons = $this->get('_icons')) === false)
		{
			global $db;

			// Topic icons
			$sql = 'SELECT *
				FROM ' . ICONS_TABLE . '
				ORDER BY icons_order';
			$result = $db->sql_query($sql);

			$icons = array();
			while ($row = $db->sql_fetchrow($result))
			{
				$icons[$row['icons_id']]['img'] = $row['icons_url'];
				$icons[$row['icons_id']]['width'] = (int) $row['icons_width'];
				$icons[$row['icons_id']]['height'] = (int) $row['icons_height'];
				$icons[$row['icons_id']]['display'] = (bool) $row['display_on_posting'];
			}
			$db->sql_freeresult($result);

			$this->put('_icons', $icons);
		}

		return $icons;
	}

	/**
	* Obtain country flags
	*/
	function obtain_country_flags()
	{
		if (($flags = $this->get('_flags')) === false)
		{
			global $db;

			// Select country flags
			$sql = 'SELECT *
				FROM ' . COUNTRY_FLAGS_TABLE . '
				ORDER BY flag_country';
			$result = $db->sql_query($sql);

			$flags = array();
			while ($row = $db->sql_fetchrow($result))
			{
				$flags[$row['flag_code']]['country'] = $row['flag_country'];
				$flags[$row['flag_code']]['code'] = $row['flag_code'];
				$flags[$row['flag_code']]['image'] = $row['flag_image'];
			}
			$db->sql_freeresult($result);

			$this->put('_flags', $flags);
		}

		return $flags;
	}

	/**
	* Obtain ranks
	*/
	function obtain_ranks()
	{
		if (($ranks = $this->get('_ranks')) === false)
		{
			global $db;

			$sql = 'SELECT *
				FROM ' . RANKS_TABLE . '
				ORDER BY rank_min DESC';
			$result = $db->sql_query($sql);

			$ranks = array();
			while ($row = $db->sql_fetchrow($result))
			{
				if ($row['rank_special'])
				{
					$ranks['special'][$row['rank_id']] = array(
						'rank_title'	=>	$row['rank_title'],
						'rank_image'	=>	$row['rank_image']
					);
				}
				else
				{
					$ranks['normal'][] = array(
						'rank_title'	=>	$row['rank_title'],
						'rank_min'		=>	$row['rank_min'],
						'rank_image'	=>	$row['rank_image']
					);
				}
			}
			$db->sql_freeresult($result);

			$this->put('_ranks', $ranks);
		}

		return $ranks;
	}

	/**
	* Obtain allowed extensions
	*
	* @param mixed $forum_id If false then check for private messaging, if int then check for forum id. If true, then only return extension informations.
	*
	* @return array allowed extensions array.
	*/
	function obtain_attach_extensions($forum_id)
	{
		if (($extensions = $this->get('_extensions')) === false)
		{
			global $db;

			$extensions = array(
				'_allowed_post'	=> array(),
				'_allowed_pm'	=> array(),
			);

			// The rule is to only allow those extensions defined. ;)
			$sql = 'SELECT e.extension, g.*
				FROM ' . EXTENSIONS_TABLE . ' e, ' . EXTENSION_GROUPS_TABLE . ' g
				WHERE e.group_id = g.group_id
					AND (g.allow_group = 1 OR g.allow_in_pm = 1)';
			$result = $db->sql_query($sql);

			while ($row = $db->sql_fetchrow($result))
			{
				$extension = strtolower(trim($row['extension']));

				$extensions[$extension] = array(
					'display_cat'	=> (int) $row['cat_id'],
					'download_mode'	=> (int) $row['download_mode'],
					'upload_icon'	=> trim($row['upload_icon']),
					'max_filesize'	=> (int) $row['max_filesize'],
					'allow_group'	=> $row['allow_group'],
					'allow_in_pm'	=> $row['allow_in_pm'],
				);

				$allowed_forums = ($row['allowed_forums']) ? unserialize(trim($row['allowed_forums'])) : array();

				// Store allowed extensions forum wise
				if ($row['allow_group'])
				{
					$extensions['_allowed_post'][$extension] = (!sizeof($allowed_forums)) ? 0 : $allowed_forums;
				}

				if ($row['allow_in_pm'])
				{
					$extensions['_allowed_pm'][$extension] = 0;
				}
			}
			$db->sql_freeresult($result);

			$this->put('_extensions', $extensions);
		}

		// Forum post
		if ($forum_id === false)
		{
			// We are checking for private messages, therefore we only need to get the pm extensions...
			$return = array('_allowed_' => array());

			foreach ($extensions['_allowed_pm'] as $extension => $check)
			{
				$return['_allowed_'][$extension] = 0;
				$return[$extension] = $extensions[$extension];
			}

			$extensions = $return;
		}
		else if ($forum_id === true)
		{
			return $extensions;
		}
		else
		{
			$forum_id = (int) $forum_id;
			$return = array('_allowed_' => array());

			foreach ($extensions['_allowed_post'] as $extension => $check)
			{
				// Check for allowed forums
				if (is_array($check))
				{
					$allowed = (!in_array($forum_id, $check)) ? false : true;
				}
				else
				{
					$allowed = true;
				}

				if ($allowed)
				{
					$return['_allowed_'][$extension] = 0;
					$return[$extension] = $extensions[$extension];
				}
			}

			$extensions = $return;
		}

		if (!isset($extensions['_allowed_']))
		{
			$extensions['_allowed_'] = array();
		}

		return $extensions;
	}

	/**
	* Obtain active bots
	*/
	function obtain_bots()
	{
		if (($bots = $this->get('_bots')) === false)
		{
			global $db;

			switch ($db->sql_layer)
			{
				case 'mssql':
				case 'mssql_odbc':
				case 'mssqlnative':
					$sql = 'SELECT user_id, bot_agent, bot_ip
						FROM ' . BOTS_TABLE . '
						WHERE bot_active = 1
					ORDER BY LEN(bot_agent) DESC';
				break;

				case 'firebird':
					$sql = 'SELECT user_id, bot_agent, bot_ip
						FROM ' . BOTS_TABLE . '
						WHERE bot_active = 1
					ORDER BY CHAR_LENGTH(bot_agent) DESC';
				break;

				// LENGTH supported by MySQL, IBM DB2 and Oracle for sure...
				default:
					$sql = 'SELECT user_id, bot_agent, bot_ip
						FROM ' . BOTS_TABLE . '
						WHERE bot_active = 1
					ORDER BY LENGTH(bot_agent) DESC';
				break;
			}
			$result = $db->sql_query($sql);

			$bots = array();
			while ($row = $db->sql_fetchrow($result))
			{
				$bots[] = $row;
			}
			$db->sql_freeresult($result);

			$this->put('_bots', $bots);
		}

		return $bots;
	}

	/**
	* Obtain cfg file data
	*/
	function obtain_cfg_items($theme)
	{
		global $config, $phpbb_root_path;

		$parsed_items = array(
			'theme'		=> array(),
			'template'	=> array(),
			'imageset'	=> array()
		);

		foreach ($parsed_items as $key => $parsed_array)
		{
			$parsed_array = $this->get('_cfg_' . $key . '_' . $theme[$key . '_path']);

			if ($parsed_array === false)
			{
				$parsed_array = array();
			}

			$reparse = false;
			$filename = $phpbb_root_path . 'styles/' . $theme[$key . '_path'] . '/' . $key . '/' . $key . '.cfg';

			if (!file_exists($filename))
			{
				continue;
			}

			if (!isset($parsed_array['filetime']) || (($config['load_tplcompile'] && @filemtime($filename) > $parsed_array['filetime'])))
			{
				$reparse = true;
			}

			// Re-parse cfg file
			if ($reparse)
			{
				$parsed_array = parse_cfg_file($filename);
				$parsed_array['filetime'] = @filemtime($filename);

				$this->put('_cfg_' . $key . '_' . $theme[$key . '_path'], $parsed_array);
			}
			$parsed_items[$key] = $parsed_array;
		}

		return $parsed_items;
	}

	/**
	* Obtain disallowed usernames
	*/
	function obtain_disallowed_usernames()
	{
		if (($usernames = $this->get('_disallowed_usernames')) === false)
		{
			global $db;

			$sql = 'SELECT disallow_username
				FROM ' . DISALLOW_TABLE;
			$result = $db->sql_query($sql);

			$usernames = array();
			while ($row = $db->sql_fetchrow($result))
			{
				$usernames[] = str_replace('%', '.*?', preg_quote(utf8_clean_string($row['disallow_username']), '#'));
			}
			$db->sql_freeresult($result);

			$this->put('_disallowed_usernames', $usernames);
		}

		return $usernames;
	}

	/**
	* Obtain hooks...
	*/
	function obtain_hooks()
	{
		global $phpbb_root_path, $phpEx;

		if (($hook_files = $this->get('_hooks')) === false)
		{
			$hook_files = array();

			// Now search for hooks...
			$dh = @opendir($phpbb_root_path . 'includes/hooks/');

			if ($dh)
			{
				while (($file = readdir($dh)) !== false)
				{
					if (strpos($file, 'hook_') === 0 && substr($file, -(strlen($phpEx) + 1)) === '.' . $phpEx)
					{
						$hook_files[] = substr($file, 0, -(strlen($phpEx) + 1));
					}
				}
				closedir($dh);
			}

			$this->put('_hooks', $hook_files);
		}

		return $hook_files;
	}
	
	/**
	* Obtain list of albums
	*/
	function obtain_album_list()
	{
		global $db;

		// www.phpBB-SEO.com SEO TOOLKIT BEGIN
		global $phpbb_seo;
		// www.phpBB-SEO.com SEO TOOLKIT END

		if (($albums = $this->get('_albums')) === false)
		{
			$sql = 'SELECT album_id, parent_id, album_name, album_type, left_id, right_id, album_user_id, display_in_rrc
				FROM ' . GALLERY_ALBUMS_TABLE . '
				ORDER BY album_user_id ASC, left_id ASC';
			$result = $db->sql_query($sql);

			$albums = array();
			while ($row = $db->sql_fetchrow($result))
			{
				$albums[$row['album_id']] = array(
					'album_id'			=> $row['album_id'],
					'parent_id'			=> $row['parent_id'],
					'album_name'		=> $row['album_name'],
					'album_type'		=> $row['album_type'],
					'left_id'			=> $row['left_id'],
					'right_id'			=> $row['right_id'],
					'album_user_id'		=> $row['album_user_id'],
					'display_in_rrc'	=> $row['display_in_rrc'],
				);

				// www.phpBB-SEO.com SEO TOOLKIT BEGIN
				$albums['seo_url'][$row['album_id']] = $phpbb_seo->prepare_url('album', $row['album_name'], $row['album_id']);
				// www.phpBB-SEO.com SEO TOOLKIT END
				
			}
			$db->sql_freeresult($result);

			$this->put('_albums', $albums);
		}

		// www.phpBB-SEO.com SEO TOOLKIT BEGIN
		$phpbb_seo->seo_url['album'] = $albums['seo_url'];
		// circumvent the album_id = 0 case.
		$phpbb_seo->seo_url['album'][0] = $phpbb_seo->seo_static['album'] . $phpbb_seo->seo_delim['album'] . '0';
		unset($albums['seo_url']);
		// www.phpBB-SEO.com SEO TOOLKIT END
		
		return $albums;
	}	
}

?>