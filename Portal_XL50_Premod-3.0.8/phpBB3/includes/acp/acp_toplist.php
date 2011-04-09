<?php
/**
*
* @package acp
* @version $Id: acp_board.php 8911 2008-09-23 13:03:33Z acydburn $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* @todo add cron intervals to server settings? (database_gc, queue_interval, session_gc, search_gc, cache_gc, warnings_gc)
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class acp_toplist
{
	var $u_action;
	var $new_config = array();

	function main($id, $mode)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('acp/board');

		$action	= request_var('action', '');
		$submit = (isset($_POST['submit'])) ? true : false;

		$form_key = 'acp_toplist';
		add_form_key($form_key);

		/**
		*	Validation types are:
		*		string, int, bool,
		*		script_path (absolute path in url - beginning with / and no trailing slash),
		*		rpath (relative), rwpath (realtive, writable), path (relative path, but able to escape the root), wpath (writable)
		*/
		switch ($mode)
		{
			case 'settings':
				$display_vars = array(
					'title'	=> 'ACP_TOPLIST_SETTINGS',
					'vars'	=> array(
                        'legend1'							=> 'ACP_TOPLIST_BASIC',
						'toplist_enable'				=> array('lang' => 'TOPLIST_ADMIN_ENABLE_TOPLIST',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_enable_refresh'			=> array('lang' => 'TOPLIST_ADMIN_ENABLE_REFRESH',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_refresh_time'				=> array('lang' => 'TOPLIST_ADMIN_REFRESH_TIME',	'validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
						'toplist_enable_ratings'			=> array('lang' => 'TOPLIST_ADMIN_ENABLE_RATINGS',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_enable_comments'			=> array('lang' => 'TOPLIST_ADMIN_ENABLE_COMMENTS',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_enable_sitethumbs'			=> array('lang' => 'TOPLIST_ADMIN_ENABLE_SITE_THUMBNAILS',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_enable_pagenation'			=> array('lang' => 'TOPLIST_ADMIN_ENABLE_PAGENATION',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_enable_hits_in'			=> array('lang' => 'TOPLIST_ADMIN_ENABLE_HITS_IN',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_enable_hits_out'			=> array('lang' => 'TOPLIST_ADMIN_ENABLE_HITS_OUT',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_enable_hits_img'			=> array('lang' => 'TOPLIST_ADMIN_ENABLE_HITS_IMAGE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_enable_pr'				=> array('lang' => 'TOPLIST_ADMIN_ENABLE_PR',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_enable_alexa'				=> array('lang' => 'TOPLIST_ADMIN_ENABLE_ALEXA',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_sites_a_page'				=> array('lang' => 'TOPLIST_ADMIN_SITES_PER_PAGE',	'validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
                                                'toplist_enable_score'				=> array('lang' => 'TOPLIST_ADMIN_ENABLE_SCORE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
                        'toplist_enable_credits'				=> array('lang' => 'TOPLIST_ADMIN_CREDITS',	'validate' => 'int',	'type' => 'radio:yes_no', 'explain' => true),
                        'legend2'							=> 'ACP_TOPLIST_UPDATE',
                        'toplist_update_check'			=> array('lang' => 'TOPLIST_ADMIN_ENABLE_UPDATE_CHECK',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
                        'toplist_update_check_security'			=> array('lang' => 'TOPLIST_ADMIN_ENABLE_UPDATE_CHECK_SECURITY',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
                        'legend3'							=> 'ACP_TOPLIST_CACHE',
                        'toplist_enable_cache'			=> array('lang' => 'TOPLIST_ADMIN_ENABLE_CACHE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
                        'toplist_enable_cache_time'			=> array('lang' => 'TOPLIST_ADMIN_ENABLE_CACHE_TIME',	'validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
                        'toplist_enable_cache_clear'			=> array('lang' => 'TOPLIST_ADMIN_ENABLE_CACHE_CLEAR',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
                        'toplist_image_cache_days'			=> array('lang' => 'TOPLIST_ADMIN_IMAGE_CACHE_DAYS',	'validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
                        'legend4'							=> 'ACP_TOPLIST_ANTICHEAT',
						'toplist_antiflood_time'			=> array('lang' => 'TOPLIST_ADMIN_ANTI_FLOOD_WAIT_TIME',	'validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
						'toplist_code_check'				=> array('lang' => 'TOPLIST_ADMIN_CHECK_CODE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_gc'						=> array('lang' => 'TOPLIST_ADMIN_CHECK_CODE_TIME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
                                                'toplist_show_disabled'				=> array('lang' => 'TOPLIST_ADMIN_SHOW_DISABLED',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
                        'legend5'							=> 'ACP_TOPLIST_WEIGHT',
						'toplist_in_hits_weight'			=> array('lang' => 'TOPLIST_ADMIN_IN_HITS_WEIGHT',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
						'toplist_out_hits_weight'			=> array('lang' => 'TOPLIST_ADMIN_OUT_HITS_WEIGHT',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
						'toplist_img_hits_weight'			=> array('lang' => 'TOPLIST_ADMIN_IMG_HITS_WEIGHT',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
						'toplist_rating_weight'				=> array('lang' => 'TOPLIST_ADMIN_RATING_WEIGHT',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
						'toplist_pr_weight'				=> array('lang' => 'TOPLIST_ADMIN_PR_WEIGHT',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
						'toplist_alexa_weight'				=> array('lang' => 'TOPLIST_ADMIN_ALEXA_WEIGHT',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
                        'legend6'							=> 'ACP_TOPLIST_SITEOFTHEMOMENT',
						'toplist_site_of_the_moment'		=> array('lang' => 'TOPLIST_ADMIN_SITE_OF_THE_MOMENT',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_site_of_the_moment_length'	=> array('lang' => 'TOPLIST_ADMIN_SITE_OF_THE_MOMENT_LENGTH',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
                        'toplist_site_of_the_moment_index'	=> array('lang' => 'TOPLIST_ADMIN_SITE_OF_THE_MOMENT_INDEX',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
                        'legend7'							=> 'ACP_TOPLIST_BANNERRESIZE',
						'toplist_banner_resize'				=> array('lang' => 'TOPLIST_ADMIN_BANNER_RESIZE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_banner_width'				=> array('lang' => 'TOPLIST_ADMIN_BANNER_WIDTH',	'validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
						'toplist_banner_height'				=> array('lang' => 'TOPLIST_ADMIN_BANNER_HEIGHT',	'validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
                        'legend8'							=> 'ACP_TOPLIST_ADMIN_HELP',
						'toplist_help_enable'				=> array('lang' => 'TOPLIST_ADMIN_HELP_ENABLE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
                                                'toplist_help_custom_enable'				=> array('lang' => 'TOPLIST_ADMIN_HELP_CUSTOM_ENABLE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_help_lang_custom_index'				=> array('lang' => 'TOPLIST_ADMIN_HELP_CUSTOM_LANGINDEX',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
                        'legend9'							=> 'ACP_TOPLIST_POINTSMODS',
						'toplist_points_enable'		=> array('lang' => 'TOPLIST_ADMIN_POINTS_ENABLE',	'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => true),
						'toplist_points_per_add'	=> array('lang' => 'TOPLIST_ADMIN_POINTS_PER_ADD',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
                        'toplist_points_per_edit'	=> array('lang' => 'TOPLIST_ADMIN_POINTS_PER_EDIT',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
                        'toplist_points_per_img_hit_visitor'	=> array('lang' => 'TOPLIST_ADMIN_POINTS_PER_IMG_HIT_VISITOR',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
                        'toplist_points_per_in_hit_visitor'	=> array('lang' => 'TOPLIST_ADMIN_POINTS_PER_IN_HIT_VISITOR',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
                        'toplist_points_per_out_hit_visitor'	=> array('lang' => 'TOPLIST_ADMIN_POINTS_PER_OUT_HIT_VISITOR',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
                        'toplist_points_per_img_hit_owner'	=> array('lang' => 'TOPLIST_ADMIN_POINTS_PER_IMG_HIT_OWNER',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
                        'toplist_points_per_in_hit_owner'	=> array('lang' => 'TOPLIST_ADMIN_POINTS_PER_IN_HIT_OWNER',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
                        'toplist_points_per_out_hit_owner'	=> array('lang' => 'TOPLIST_ADMIN_POINTS_PER_OUT_HIT_OWNER',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
                        'toplist_points_per_rate'	=> array('lang' => 'TOPLIST_ADMIN_POINTS_PER_RATE',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
                        'toplist_points_per_comment'	=> array('lang' => 'TOPLIST_ADMIN_POINTS_PER_COMMENT',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
					)
				);
			break;

			default:
				trigger_error('NO_MODE', E_USER_ERROR);
			break;
		}

		if (isset($display_vars['lang']))
		{
			$user->add_lang($display_vars['lang']);
		}
		switch ($mode)
		{
			case 'settings':
                $this->new_config = $config;
                $cfg_array = (isset($_REQUEST['config'])) ? utf8_normalize_nfc(request_var('config', array('' => ''), true)) : $this->new_config;
                $error = array();

                // We validate the complete config if whished
                validate_config_vars($display_vars['vars'], $cfg_array, $error);

                if ($submit && !check_form_key($form_key))
                {
                    $error[] = $user->lang['FORM_INVALID'];
                }
                // Do not write values if there is an error
                if (sizeof($error))
                {
                    $submit = false;
                }

                // We go through the display_vars to make sure no one is trying to set variables he/she is not allowed to...
                foreach ($display_vars['vars'] as $config_name => $null)
                {
                    if (!isset($cfg_array[$config_name]) || strpos($config_name, 'legend') !== false)
                    {
                        continue;
                    }

                    if ($config_name == 'auth_method')
                    {
                        continue;
                    }

                    $this->new_config[$config_name] = $config_value = $cfg_array[$config_name];

                    if ($config_name == 'email_function_name')
                    {
                        $this->new_config['email_function_name'] = trim(str_replace(array('(', ')'), array('', ''), $this->new_config['email_function_name']));
                        $this->new_config['email_function_name'] = (empty($this->new_config['email_function_name']) || !function_exists($this->new_config['email_function_name'])) ? 'mail' : $this->new_config['email_function_name'];
                        $config_value = $this->new_config['email_function_name'];
                    }

                    if ($submit)
                    {
                        set_config($config_name, $config_value);
                    }
                }

                if ($submit)
                {
                    add_log('admin', 'LOG_CONFIG_' . strtoupper($mode));

                    trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
                }

                $this->tpl_name = 'acp_toplist';
                $this->page_title = $display_vars['title'];

                $template->assign_vars(array(
                    'L_TITLE'			=> $user->lang[$display_vars['title']],
                    'L_TITLE_EXPLAIN'	=> $user->lang[$display_vars['title'] . '_EXPLAIN'],

                    'S_ERROR'			=> (sizeof($error)) ? true : false,
                    'ERROR_MSG'			=> implode('<br />', $error),

                    'U_ACTION'			=> $this->u_action)
                );

                // Output relevant page
                foreach ($display_vars['vars'] as $config_key => $vars)
                {
                    if (!is_array($vars) && strpos($config_key, 'legend') === false)
                    {
                        continue;
                    }

                    if (strpos($config_key, 'legend') !== false)
                    {
                        $template->assign_block_vars('options', array(
                            'S_LEGEND'		=> true,
                            'LEGEND'		=> (isset($user->lang[$vars])) ? $user->lang[$vars] : $vars)
                        );

                        continue;
                    }

                    $type = explode(':', $vars['type']);

                    $l_explain = '';
                    if ($vars['explain'] && isset($vars['lang_explain']))
                    {
                        $l_explain = (isset($user->lang[$vars['lang_explain']])) ? $user->lang[$vars['lang_explain']] : $vars['lang_explain'];
                    }
                    else if ($vars['explain'])
                    {
                        $l_explain = (isset($user->lang[$vars['lang'] . '_EXPLAIN'])) ? $user->lang[$vars['lang'] . '_EXPLAIN'] : '';
                    }

                    $content = build_cfg_template($type, $config_key, $this->new_config, $config_key, $vars);

                    if (empty($content))
                    {
                        continue;
                    }

                    $template->assign_block_vars('options', array(
                        'KEY'			=> $config_key,
                        'TITLE'			=> (isset($user->lang[$vars['lang']])) ? $user->lang[$vars['lang']] : $vars['lang'],
                        'S_EXPLAIN'		=> $vars['explain'],
                        'TITLE_EXPLAIN'	=> $l_explain,
                        'CONTENT'		=> $content,
                        )
                    );

                    unset($display_vars['vars'][$config_key]);
                }
                // Get current and latest version
                $errstr = '';
                $errno = 0;

                if(!isset($toplist_class))
                {
                    include($phpbb_root_path . 'mods/toplist_mod/core.class.php');
                    $toplist_class = new toplist_class();
                }

                $info = $toplist_class->get_url('http://forums.wyrihaximus.net/modsupdate.php?mod=toplist');
                
                if ($info === false)
                {
                    trigger_error($errstr, E_USER_WARNING);
                }

                $info = explode("\n", $info);
                $latest_version = trim($info[0]);
                $announcement_url = trim($info[1]);
                $security_update = trim($info[2]);
                $update_link = append_sid($phpbb_root_path . 'toplistmod_install.' . $phpEx);

                $current_version = $toplist_class->get_version();

                if($current_version==$latest_version)
                {
                    $up_to_date_automatic = $up_to_date = true;
                    set_config('toplist_update_check_mail', 0, true);
                }
                else
                {
                    $up_to_date_automatic = $up_to_date = false;
                }
                //$up_to_date_automatic = (version_compare(str_replace('rc', 'RC', strtolower($current_version)), str_replace('rc', 'RC', strtolower($latest_version)), '<')) ? false : true;
                //$up_to_date = (version_compare(str_replace('rc', 'RC', strtolower($config['version'])), str_replace('rc', 'RC', strtolower($latest_version)), '<')) ? false : true;

                $template->assign_vars(array(
                    'S_UP_TO_DATE'		=> $up_to_date,
                    'S_UP_TO_DATE_AUTO'	=> $up_to_date_automatic,
                    'S_VERSION_CHECK'	=> true,
                    'U_ACTION'			=> $this->u_action,

                    'TOPLIST_LATEST_VERSION'	=> $latest_version,
                    'TOPLIST_CURRENT_VERSION'	=> $current_version,
                    'TOPLIST_AUTO_VERSION'		=> $current_version,
                    'TOPLIST_SECURITY_UPDATE'  => (($security_update) ? true : false),

                    'UPDATE_INSTRUCTIONS'	=> sprintf($user->lang['TOPLIST_UPDATE_INSTRUCTIONS'], $announcement_url, $update_link),
                ));
                break;
        }
	}
}

?>