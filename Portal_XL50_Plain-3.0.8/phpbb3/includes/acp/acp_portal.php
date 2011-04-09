<?php
/** 
*
* @name acp_portal.php
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/

/**
* @package acp
*/
class acp_portal
{
   var $u_action;
   var $new_config = array();

   function main($id, $mode)
   {
	  global $db, $user, $auth, $template;
	  global $config, $portal_config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

      $user->add_lang('mods/acp_portal_xl');

      $action = request_var('action', '');
      $submit = (isset($_POST['submit'])) ? true : false;
	  
      /**
      *   Validation types are:
      *      string, int, bool,
      *      script_path (absolute path in url - beginning with / and no trailing slash),
      *      rpath (relative), rwpath (realtive, writeable), path (relative path, but able to escape the root), wpath (writeable)
      */
      switch ($mode)
      {

         case 'portal':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_INFO',
               'vars'   => array(
	              'legend1'                     		=> 'ACP_PORTAL_SWITCHES_SETTINGS',
                  'portal_picture_resize'          		=> array('lang' => 'PORTAL_PICTURE_RESIZE'            ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),
                  'portal_max_online_friends'         	=> array('lang' => 'PORTAL_MAX_ONLINE_FRIENDS'        ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),
                  'portal_max_lastvisits'         		=> array('lang' => 'PORTAL_MAX_LASTVISITS'        	  ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),
                  'portal_news_show_last_post'    		=> array('lang' => 'PORTAL_SHOW_LAST_NEWS'            ,   'validate' => 'bool',   	'type' => 'radio:yes_no',   'explain' => true),
                  'portal_show_tool_tips'    			=> array('lang' => 'PORTAL_SHOW_TOOL_TIPS'  		  ,   'validate' => 'bool',   	'type' => 'radio:yes_no',   'explain' => true),

                  'portal_drag_drop'    				=> array('lang' => 'PORTAL_DRAG_DROP'                 ,   'validate' => 'bool',   	'type' => 'radio:yes_no',   'explain' => true),

               )
            );
			
			$template->assign_vars(array(
				'S_VERSION_CHECK_DISPLAY'	=> true,
			));
         break;         

         case 'announcements':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_ANNOUNCE_SETTINGS',
               'vars'   => array(
	              'legend1'                     		=> 'ACP_PORTAL_ANNOUNCE_SETTINGS',
                  'portal_number_of_announcments'     	=> array('lang' => 'PORTAL_NUMBER_OF_ANNOUNCMENTS'   ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),
                  'portal_announcments_day'           	=> array('lang' => 'PORTAL_ANNOUNCMENTS_DAY'         ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),
                  'portal_announcments_length'        	=> array('lang' => 'PORTAL_ANNOUNCMENTS_LENGTH'      ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),
                  'portal_global_announcments_forum'  	=> array('lang' => 'PORTAL_GLOBAL_ANNOUNCMENTS_FORUM',   'validate' => 'string',   	'type' => 'text:50:200',    'explain' => true),

				  'legend2'								=> 'ACP_PORTAL_ANNOUNCE_PAG_SETTINGS',
				  'portal_announcement_repository'      => array('lang' => 'PORTAL_PAG_REPOSITORY'	 		 ,   'validate' => 'bool',   	'type' => 'radio:yes_no',   'explain' => true),
				  'portal_show_all_announcements'		=> array('lang' => 'PORTAL_PAG_SHOW_ALL'			 ,   'validate' => 'bool',   	'type' => 'radio:yes_no',   'explain' => true),
				  'portal_announcements_permissions'	=> array('lang' => 'PORTAL_PAG_PERMISSIONS' 		 ,   'validate' => 'bool',   	'type' => 'radio:yes_no',   'explain' => true),

               )
            );
         break;         

         case 'news':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_NEWS_SETTINGS',
               'vars'   => array(
                  'legend1'                     		=> 'ACP_PORTAL_NEWS_SETTINGS',
                  'portal_number_of_news'             	=> array('lang' => 'PORTAL_NUMBER_OF_NEWS'           ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),
                  'portal_news_length'                	=> array('lang' => 'PORTAL_NEWS_LENGTH'              ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),
                  'portal_news_forum'                 	=> array('lang' => 'PORTAL_NEWS_FORUM'               ,   'validate' => 'string',   	'type' => 'text:50:200',    'explain' => true),

				  'legend2'								=> 'ACP_PORTAL_NEWS_PAG_SETTINGS',
				  'portal_news_repository'              => array('lang' => 'PORTAL_PAG_REPOSITORY'		 	 ,   'validate' => 'bool',   	'type' => 'radio:yes_no',   'explain' => true),
				  'portal_show_all_news'				=> array('lang' => 'PORTAL_PAG_SHOW_ALL'		 	 ,   'validate' => 'bool',   	'type' => 'radio:yes_no',   'explain' => true),
				  'portal_news_permissions'				=> array('lang' => 'PORTAL_PAG_PERMISSIONS'	 		 ,   'validate' => 'bool',   	'type' => 'radio:yes_no',   'explain' => true),

               )
            );
         break;         

         case 'recent':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_RECENT_SETTINGS',
               'vars'   => array(
                  'legend1'                     		=> 'ACP_PORTAL_RECENT_SETTINGS',
                  'portal_max_topics'                 	=> array('lang' => 'PORTAL_MAX_TOPIC'                ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),
                  'portal_recent_title_limit'         	=> array('lang' => 'PORTAL_RECENT_TITLE_LIMIT'       ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),

               )
            );
         break;         

         case 'wordgraph':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_WORDGRAPH_SETTINGS',
               'vars'   => array(
	              'legend1'                     		=> 'ACP_PORTAL_WORDGRAPH_SETTINGS',
                  'portal_word_graph_max_words'   		=> array('lang' => 'PORTAL_WORD_GRAPH_MAX_WORDS' 	 ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),
                  'portal_word_graph_word_counts'       => array('lang' => 'PORTAL_WORD_GRAPH_WORD_COUNTS'   ,   'validate' => 'bool',   	'type' => 'radio:yes_no',   'explain' => true),
                  'portal_word_graph_ratio'       		=> array('lang' => 'PORTAL_WORD_GRAPH_RATIO'    	 ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),

               )
            );
         break;         

         case 'paypal':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_PAYPAL_SETTINGS',
               'vars'   => array(
	              'legend2'                     		=> 'ACP_PORTAL_PAYPAL_SETTINGS',
                  'portal_pay_c_block'                	=> array('lang' => 'PORTAL_PAY_C_BLOCK'              ,   'validate' => 'bool',   	'type' => 'radio:yes_no',   'explain' => true),
                  'portal_pay_s_block'                	=> array('lang' => 'PORTAL_PAY_S_BLOCK'              ,   'validate' => 'bool',   	'type' => 'radio:yes_no',   'explain' => true),
                  'portal_pay_acc'                    	=> array('lang' => 'PORTAL_PAY_ACC'                  ,   'validate' => 'string',   	'type' => 'text:25:100',    'explain' => true),

               )
            );
         break;         

         case 'attachments':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS',
               'vars'   => array(
	              'legend1'                     		=> 'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS',
                  'portal_attachments_number'         	=> array('lang' => 'PORTAL_ATTACHMENTS_NUMBER'       ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),

               )
            );
         break;         

         case 'members':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_MEMBERS_SETTINGS',
               'vars'   => array(
	              'legend1'                     		=> 'ACP_PORTAL_MEMBERS_SETTINGS',
                  'portal_max_last_member'            	=> array('lang' => 'PORTAL_MAX_LAST_MEMBER'          ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),

               )
            );
         break;         

         case 'polls':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_POLLS_SETTINGS',
               'vars'   => array(
	              'legend1'                     		=> 'ACP_PORTAL_POLLS_SETTINGS',
                  'portal_poll_topic_id'              	=> array('lang' => 'PORTAL_POLL_TOPIC_ID'            ,   'validate' => 'string',   	'type' => 'text:10:200',    'explain' => true),
                  'portal_poll_forum_id'              	=> array('lang' => 'PORTAL_POLL_FORUM_ID'            ,   'validate' => 'string',   	'type' => 'text:10:200',    'explain' => true),
                  'portal_poll_post_id'              	=> array('lang' => 'PORTAL_POLL_POST_ID'             ,   'validate' => 'string',   	'type' => 'text:10:200',    'explain' => true),

               )
            );
         break;         

         case 'bots':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_BOTS_SETTINGS',
               'vars'   => array(
	              'legend1'                     		=> 'ACP_PORTAL_BOTS_SETTINGS',
                  'portal_last_visited_bots_number'   	=> array('lang' => 'PORTAL_LAST_VISITED_BOTS_NUMBER' ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),

               )
            );
         break;         

         case 'poster':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_MOST_POSTER_SETTINGS',
               'vars'   => array(
	              'legend1'                     		=> 'ACP_PORTAL_MOST_POSTER_SETTINGS',
                  'portal_max_most_poster'            	=> array('lang' => 'PORTAL_MAX_MOST_POSTER'           ,   'validate' => 'int',   	'type' => 'text:3:3',       'explain' => true),

               )
            );
         break;         

         case 'welcome':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_WELCOME_SETTINGS',
               'vars'   => array(
	              'legend1'                     		=> 'ACP_PORTAL_WELCOME_TXT_SETTINGS',
                  'portal_welcome_intro'                => array('lang' => 'PORTAL_WELCOME_INTRO'             ,   'validate' => 'string',   'type' => 'textarea:15:2000',    'explain' => true),
                  'portal_welcome_back'                 => array('lang' => 'PORTAL_WELCOME_BACK'              ,   'validate' => 'string',   'type' => 'textarea:15:2000',    'explain' => true),

               )
            );
         break;         

         case 'weather':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_WEATHER_SETTINGS',
               'vars'   => array(
	              'legend1'                     		=> 'ACP_PORTAL_WEATHER_SETTINGS_GER',
                  'portal_weather_ger'          		=> array('lang' => 'PORTAL_WEATHER_GER'            ,   'validate' => 'bool',    'type' => 'radio:yes_no',   'explain' => true),				  
                  'portal_weather_zipcode'          	=> array('lang' => 'PORTAL_WEATHER_ZIPCODE'        ,   'validate' => 'string',  'type' => 'text:10:10'  ,   'explain' => true),

	              'legend2'                     		=> 'ACP_PORTAL_WEATHER_SETTINGS_ALT',
                  'portal_weather_alternate_url'       	=> array('lang' => 'PORTAL_WEATHER_ALTERNATE_URL'  ,   'validate' => 'string',  'type' => 'textarea:5:1000'  ,   'explain' => true),
                  'portal_weather_alternate_url1'       => array('lang' => 'PORTAL_WEATHER_ALTERNATE_URL1'  ,   'validate' => 'string',  'type' => 'textarea:5:1000'  ,   'explain' => true),
                  'portal_weather_alternate_url2'       => array('lang' => 'PORTAL_WEATHER_ALTERNATE_URL2'  ,   'validate' => 'string',  'type' => 'textarea:5:1000'  ,   'explain' => true),

               )
            );
         break;         

         case 'scrollmessage':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_SCROLL_MESSAGE_INFO',
               'vars'   => array(
	              'legend1'                     				=> 'ACP_PORTAL_SCROLL_MESSAGE_INFO',
                  'portal_scroll_message_display'  				=> array('lang' => 'PORTAL_SCROLL_MESSAGE_DISPLAY'           	,   'validate' => 'bool',    'type' => 'radio:yes_no',   'explain' => true),
                  'portal_scroll_message_marquee'  				=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE'           	,   'validate' => 'bool',    'type' => 'radio:yes_no',   'explain' => true),
				  
                  'portal_scroll_message_marquee_fontcolor' 	=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTCOLOR'    ,   'validate' => 'string',  'type' => 'text:10:15',     'explain' => true),
                  'portal_scroll_message_marquee_fontsize'  	=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTSIZE'     ,   'validate' => 'string',  'type' => 'text:10:15',     'explain' => true),
                  'portal_scroll_message_marquee_direction' 	=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE_DIRECTION'    ,   'validate' => 'string',  'type' => 'text:10:15',     'explain' => true),
                  'portal_scroll_message_marquee_speed'  		=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE_SPEED'        ,   'validate' => 'string',  'type' => 'text:10:15',     'explain' => true),
                  'portal_scroll_message_marquee_scrolldelay'  	=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE_SCROLLDELAY'  ,   'validate' => 'string',  'type' => 'text:10:15',     'explain' => true),
                  'portal_scroll_message_marquee_align'  		=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE_ALIGN'        ,   'validate' => 'string',  'type' => 'text:10:15',     'explain' => true),
                  'portal_scroll_message_marquee_behavior'  	=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE_BEHAVIOR'     ,   'validate' => 'string',  'type' => 'text:10:15',     'explain' => true),
                  'portal_scroll_message_marquee_bgcolor'  		=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE_BGCOLOR'      ,   'validate' => 'string',  'type' => 'text:10:15',     'explain' => true),
                  'portal_scroll_message_marquee_height'  		=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE_HEIGHT'       ,   'validate' => 'string',  'type' => 'text:10:15',     'explain' => true),
                  'portal_scroll_message_marquee_width'  		=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE_WIDTH'        ,   'validate' => 'string',  'type' => 'text:10:15',     'explain' => true),
                  'portal_scroll_message_marquee_hspace'  		=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE_HSPACE'       ,   'validate' => 'string',  'type' => 'text:10:15',     'explain' => true),
                  'portal_scroll_message_marquee_vspace'  		=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE_VSPACE'       ,   'validate' => 'string',  'type' => 'text:10:15',     'explain' => true),
                  'portal_scroll_message_marquee_loop'  		=> array('lang' => 'PORTAL_SCROLL_MESSAGE_MARQUEE_LOOP'         ,   'validate' => 'string',  'type' => 'text:10:15',     'explain' => true),

	              'legend2'                     				=> 'ACP_PORTAL_SCROLL_MESSAGE_TXT_SETTINGS',
                  'portal_scroll_message_text'          		=> array('lang' => 'PORTAL_SCROLL_MESSAGE_INTRO'             	,   'validate' => 'string',  'type' => 'textarea:15:1000',    'explain' => true),

               )
            );
         break;         

         case 'metatags':
            $display_vars = array(
               'title'   => 'ACP_PORTAL_METATAGS_INFO',
               'vars'   => array(
	              'legend1'                     		=> 'ACP_PORTAL_METATAGS_INFO',
                  'portal_meta_redirect_url_time'    	=> array('lang' => 'PORTAL_META_REDIRECT_URL_TIME'         	,   'validate' => 'string',  'type' => 'text:20:15',     	'explain' => true),
                  'portal_meta_redirect_url_adress'    	=> array('lang' => 'PORTAL_META_REDIRECT_URL_ADRESS'       	,   'validate' => 'string',  'type' => 'text:50:200',     	'explain' => true),
                  'portal_meta_refresh'    				=> array('lang' => 'PORTAL_META_REFRESH'           			,   'validate' => 'string',  'type' => 'text:20:15',     	'explain' => true),
                  'portal_meta_pragma'    				=> array('lang' => 'PORTAL_META_PRAGMA'           			,   'validate' => 'string',  'type' => 'text:20:15',     	'explain' => true),
                  'portal_meta_keywords'    			=> array('lang' => 'PORTAL_META_KEYWORDS'          			,   'validate' => 'string',  'type' => 'textarea:15:1000',  'explain' => true),
                  'portal_meta_description'    			=> array('lang' => 'PORTAL_META_DESCRIPTION'        		,   'validate' => 'string',  'type' => 'textarea:15:200',   'explain' => true),
                  'portal_meta_author'    				=> array('lang' => 'PORTAL_META_AUTHOR'           			,   'validate' => 'string',  'type' => 'text:50:200',     	'explain' => true),
                  'portal_meta_identifier_url'    		=> array('lang' => 'PORTAL_META_IDENTIFIER_URL'           	,   'validate' => 'string',  'type' => 'text:50:200',     	'explain' => true),
                  'portal_meta_reply_to'    			=> array('lang' => 'PORTAL_META_REPLY_TO'           		,   'validate' => 'string',  'type' => 'text:50:100',     	'explain' => true),
                  'portal_meta_revisit_after'    		=> array('lang' => 'PORTAL_META_REVISIT_AFTER'           	,   'validate' => 'string',  'type' => 'text:20:15',     	'explain' => true),
                  'portal_meta_category'    			=> array('lang' => 'PORTAL_META_CATEGORY'           		,   'validate' => 'string',  'type' => 'text:50:200',     	'explain' => true),
                  'portal_meta_copyright'    			=> array('lang' => 'PORTAL_META_COPYRIGHT'        			,   'validate' => 'string',  'type' => 'textarea:15:500', 	'explain' => true),
                  'portal_meta_generator'    			=> array('lang' => 'PORTAL_META_GENERATOR'           		,   'validate' => 'string',  'type' => 'text:50:100',     	'explain' => true),
                  'portal_meta_robots'    				=> array('lang' => 'PORTAL_META_ROBOTS'           			,   'validate' => 'string',  'type' => 'text:50:100',     	'explain' => true),
                  'portal_meta_distribution'    		=> array('lang' => 'PORTAL_META_DISTRIBUTION'           	,   'validate' => 'string',  'type' => 'text:20:15',     	'explain' => true),
                  'portal_meta_date_creation_year'    	=> array('lang' => 'PORTAL_META_CREATION_YEAR'           	,   'validate' => 'string',  'type' => 'text:20:15',     	'explain' => true),
                  'portal_meta_date_creation_month'    	=> array('lang' => 'PORTAL_META_CREATION_MONTH'           	,   'validate' => 'string',  'type' => 'text:20:15',     	'explain' => true),
                  'portal_meta_date_creation_day'    	=> array('lang' => 'PORTAL_META_CREATION_DAY'           	,   'validate' => 'string',  'type' => 'text:20:15',     	'explain' => true),
                  'portal_meta_date_revision_year'    	=> array('lang' => 'PORTAL_META_REVISION_YEAR'           	,   'validate' => 'string',  'type' => 'text:20:15',     	'explain' => true),
                  'portal_meta_date_revision_month'    	=> array('lang' => 'PORTAL_META_REVISION_MONTH'           	,   'validate' => 'string',  'type' => 'text:20:15',     	'explain' => true),
                  'portal_meta_date_revision_day'    	=> array('lang' => 'PORTAL_META_REVISION_DAY'           	,   'validate' => 'string',  'type' => 'text:20:15',     	'explain' => true),

               )
            );
         break;         

		case 'counter':
			$display_vars = array(
				'title'	=> 'ACP_COUNTER_SETTINGS',
				'vars'	=> array(
					'legend1'							=> 'ACP_COUNTER_DISPLAY_SETTINGS',
					'portal_counter_display_mode'		=> array('lang' => 'SELECT_COUNTER_DISPLAY_MODE',	'validate' => 'int',  'type' => 'custom',  'method' => 'build_portal_cfg_template', 'explain' => true),

					'legend2'							=> 'ACP_COUNTER_DIGITS_SETTINGS',
					'portal_counter_digits_path'		=> array('lang' => 'COUNTER_DIGITS_PATH',		'validate' => 'rpath',	'type' => 'text:20:255',	'explain' => true),
					'portal_counter_digits_ani_path'	=> array('lang' => 'COUNTER_DIGITS_ANI_PATH',	'validate' => 'rpath',	'type' => 'text:20:255',	'explain' => true),
					'portal_counter_digits_number'		=> array('lang' => 'COUNTER_DIGITS_NUMBER',		'validate' => 'int',	'type' => 'text:3:4',		'explain' => true),
					'portal_counter_digits_width'		=> array('lang' => 'COUNTER_DIGITS_WIDTH',		'validate' => 'int',	'type' => 'text:3:4',		'explain' => true, 'append' => ' ' . $user->lang['PIXEL']),
					'portal_counter_digits_height'		=> array('lang' => 'COUNTER_DIGITS_HEIGHT',		'validate' => 'int',	'type' => 'text:3:4',		'explain' => true, 'append' => ' ' . $user->lang['PIXEL']),

					'legend3'							=> 'ACP_COUNTER_IP_SETTINGS',
					'portal_counter_block_ip'			=> array('lang' => 'COUNTER_BLOCK_IP',		'validate' => 'bool',	'type' => 'radio:yes_no',   'explain' => true),
					'portal_counter_block_time'			=> array('lang' => 'COUNTER_BLOCK_TIME',	'validate' => 'int',	'type' => 'text:3:4',		'explain' => true, 'append' => ' ' . $user->lang['SECONDS']),
					'portal_counter_ip_logfile'			=> array('lang' => 'COUNTER_IP_LOGFILE',	'validate' => 'string',	'type' => 'text:40:255',	'explain' => true),
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

      $this->new_config = $portal_config;
      $cfg_array = (isset($_REQUEST['portal_config'])) ? utf8_normalize_nfc(request_var('portal_config', array('' => ''), true)) : $this->new_config;
      $error = array();

      // We validate the complete config if whished
      validate_config_vars($display_vars['vars'], $cfg_array, $error);

      // Do not write values if there is an error
      if (sizeof($error))
      {
         $submit = false;
		 trigger_error('Error in portal_config');
      }

		// We go through the display_vars to make sure no one is trying to set variables he/she is not allowed to...
		foreach ($display_vars['vars'] as $config_name => $null)
		{
			if (!isset($cfg_array[$config_name]) || strpos($config_name, 'legend') !== false)
			{
				continue;
			}

			$this->new_config[$config_name] = $config_value = $cfg_array[$config_name];

			if ($submit)
			{
				set_portal_config($config_name, htmlspecialchars_decode($config_value));
			}

		}

		if ($submit)
		{
			add_log('admin', 'LOG_CONFIG_' . strtoupper($mode));
			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

      $this->tpl_name = 'portal_xl/acp_portal';
      $this->page_title = $display_vars['title'];

      $template->assign_vars(array(
         'L_TITLE'         => $user->lang[$display_vars['title']],
         'L_TITLE_EXPLAIN'   => $user->lang[$display_vars['title'] . '_EXPLAIN'],
		 'PORTAL_VERSION'	=> sprintf(htmlspecialchars_decode($portal_config['portal_version'])),

         'S_ERROR'         => (sizeof($error)) ? true : false,
         'ERROR_MSG'         => implode('<br />', $error),

         'U_ACTION'         => $this->u_action)
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

			$template->assign_block_vars('options', array(
				'KEY'			=> $config_key,
				'TITLE'			=> (isset($user->lang[$vars['lang']])) ? $user->lang[$vars['lang']] : $vars['lang'],
				'S_EXPLAIN'		=> $vars['explain'],
				'TITLE_EXPLAIN'	=> $l_explain,
				'CONTENT'		=> build_portal_cfg_template($type, $config_key, $this->new_config, $config_key, $vars),
				)
			);
		
			unset($display_vars['vars'][$config_key]);
		}

	}

}

/**
* Set portal_config template.
*/
	function build_portal_cfg_template($tpl_type, $key, &$new, $config_key, $vars)
	{
		global $user, $module;

		$tpl = '';
		$name = 'portal_config[' . $config_key . ']';

		switch ($tpl_type[0])
		{
			case 'text':
			case 'password':
				$size = (int) $tpl_type[1];
				$maxlength = (int) $tpl_type[2];

				$tpl = '<input id="' . $key . '" type="' . $tpl_type[0] . '"' . (($size) ? ' size="' . $size . '"' : '') . ' maxlength="' . (($maxlength) ? $maxlength : 255) . '" name="' . $name . '" value="' . $new[$config_key] . '" />';
			break;

			case 'dimension':
				$size = (int) $tpl_type[1];
				$maxlength = (int) $tpl_type[2];

				$tpl = '<input id="' . $key . '" type="text"' . (($size) ? ' size="' . $size . '"' : '') . ' maxlength="' . (($maxlength) ? $maxlength : 255) . '" name="config[' . $config_key . '_height]" value="' . $new[$config_key . '_height'] . '" /> x <input type="text"' . (($size) ? ' size="' . $size . '"' : '') . ' maxlength="' . (($maxlength) ? $maxlength : 255) . '" name="config[' . $config_key . '_width]" value="' . $new[$config_key . '_width'] . '" />';
			break;

			case 'textarea':
				$rows = (int) $tpl_type[1];
				$cols = (int) $tpl_type[2];

				$tpl = '<textarea id="' . $key . '" name="' . $name . '" rows="' . $rows . '" cols="' . $cols . '">' . $new[$config_key] . '</textarea>';
			break;

			case 'radio':
				$key_yes	= ($new[$config_key]) ? ' checked="checked"' : '';
				$key_no		= (!$new[$config_key]) ? ' checked="checked"' : '';

				$tpl_type_cond = explode('_', $tpl_type[1]);
				$type_no = ($tpl_type_cond[0] == 'disabled' || $tpl_type_cond[0] == 'enabled') ? false : true;

				$tpl_no = '<input type="radio" name="' . $name . '" value="0"' . $key_no . ' class="radio" />&nbsp;' . (($type_no) ? $user->lang['NO'] : $user->lang['DISABLED']);
				$tpl_yes = '<input type="radio" id="' . $key . '" name="' . $name . '" value="1"' . $key_yes . ' class="radio" />&nbsp;' . (($type_no) ? $user->lang['YES'] : $user->lang['ENABLED']);

				$tpl = ($tpl_type_cond[0] == 'yes' || $tpl_type_cond[0] == 'enabled') ? $tpl_yes . '&nbsp;&nbsp;' . $tpl_no : $tpl_no . '&nbsp;&nbsp;' . $tpl_yes;
			break;

			case 'select':
			case 'custom':
			
				$return = '';

				if (isset($vars['method']))
				{
					$call = array($module->module, $vars['method']);
				}
				else if (isset($vars['function']))
				{
					$call = $vars['function'];
				}
				else
				{
					break;
				}

				if (isset($vars['params']))
				{
					$args = array();
					foreach ($vars['params'] as $value)
					{
						switch ($value)
						{
							case '{CONFIG_VALUE}':
								$value = $new[$config_key];
							break;

							case '{KEY}':
								$value = $key;
							break;
						}

						$args[] = $value;
					}
				}
				else
				{
					$args = array($new[$config_key], $key);
				}
				
				$radio_ary = array(COUNTER_NONE => 'COUNTER_DISPLAY_NONE', COUNTER_IMAGE => 'COUNTER_DISPLAY_IMAGE', COUNTER_TEXT => 'COUNTER_DISPLAY_TEXT');
				return h_radio('portal_config[portal_counter_display_mode]', $radio_ary, $value, $key);
			
				$return = call_user_func_array($call, $args);

				if ($tpl_type[0] == 'select')
				{
					$tpl = '<select id="' . $key . '" name="' . $name . '">' . $return . '</select>';
				}
				else
				{
					$tpl = $return;
				}

			break;

			default:
			break;
		}

		if (isset($vars['append']))
		{
			$tpl .= $vars['append'];
		}

		return $tpl;
	}

?>