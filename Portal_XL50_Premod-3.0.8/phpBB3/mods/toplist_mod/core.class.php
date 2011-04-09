<?php
//die('fdsfadsfads');

define("GOOGLE_MAGIC", 0xE6359A60);

include_once($phpbb_root_path . 'mods/mods_base/base.mini.class.php');

class toplist_class extends mods_base_mini_class {
    var $_version = '2.0.0-RC4';
    //var $_hash_storage = array();
    //var $_hash_sql = array();
    function get_version() {
        return $this->_version;
    }
    function __construct() {
        parent::__construct();
        global $phpbb_root_path,$db,$phpEx,$cache,$auth,$user,$config;
        /**
         * Note: This mod can help you alot in generating more visitors
         * We request to keep this copyright enabled, it only shows on enabled
         * Toplist MOD pages (since there is no reason to show it on other
         * pages 2. If you cannot keep this enabled please provide a small but
         * visible link somewhere else to: http://wyrihaximus.net/
         */
        if(isset($user->lang['TRANSLATION_INFO']) && $config['toplist_enable_credits']) {
            $user->lang['TRANSLATION_INFO'] .= '<div style="padding-top:5px;text-align:middle"><a href="http://www.wyrihaximus.net/" title="phpBB3 Toplist MOD by WyriHaximus.net"><img src="http://' . $this->phpbb_base_url . 'mods/toplist_mod/button.png" alt="phpBB3 Toplist MOD by WyriHaximus.net"/></a></div>';
        }
        /*if($config['toplist_hash_gc')<(time()-(($config['toplist_enable_refresh')) ? ($config['toplist_refresh_time') + 60) : 60)))
		{
			$this->_clean_hash_table();
			set_config('toplist_hash_gc', time(), true);
		}*/
    }
    // Generate the pages for this MOD
    function gen_page($mode) {
        // Display method for all pages within this MOD
        global $db,$template,$user,$phpEx,$images,$theme,$session,$phpbb_root_path,$auth,$user,$config,$now,$cache;
        $id = request_var('id', 0);
        $this->add_nav_item($user->lang['TOPLIST'],append_sid("{$phpbb_root_path}toplist.$phpEx" . (($mode=='ip_lookup') ? '?mode=ip_lookup&amp;id=' . $id : '')));
        $template->assign_vars(array(
                'L_TOPLIST' => $user->lang['TOPLIST'])
        );
        $w = request_var('w', '');
        if(!$config['toplist_enable']) {
            trigger_error($user->lang['TOPLIST_DISABLED']);
        }
        $template->assign_vars(array(
                'L_TOPLIST_RANK' => $user->lang['TOPLIST_RANK'],
                'L_TOPLIST_SITE' => $user->lang['TOPLIST_SITE'],
                'L_TOPLIST_HITS_IN' => $user->lang['TOPLIST_HITS_IN'],
                'L_TOPLIST_HITS_OUT' => $user->lang['TOPLIST_HITS_OUT'],
                'L_TOPLIST_HITS_IMG' => $user->lang['TOPLIST_HITS_IMG'],
                'L_TOPLIST_RATING_COLL' => $user->lang['TOPLIST_RATING_COLL'],
                'L_TOPLIST_EDIT' => $user->lang['TOPLIST_EDIT'],
                'L_TOPLIST_DELETE' => $user->lang['TOPLIST_DELETE'],
                'L_TOPLIST_ADD_SITE' => $user->lang['TOPLIST_ADD_SITE'],
                'L_TOPLIST_PREVIEW' => $user->lang['TOPLIST_PREVIEW'],
                'L_TOPLIST_RATE_THIS_SITE' => $user->lang['TOPLIST_RATE_THIS_SITE'],
                'L_TOPLIST_NO_SITES_IN_TOPLIST' => $user->lang['TOPLIST_NO_SITES_IN_TOPLIST'],
                'SCORE_ENABLED' => ($config['toplist_enable_score']) ? true : false,
                'COMMENTS_ENABLED' => ($config['toplist_enable_comments']) ? true : false,
                'RATING_ENABLED' => ($config['toplist_enable_ratings']) ? true : false,
                'HITS_IN_ENABLED' => ($config['toplist_enable_hits_in']) ? true : false,
                'HITS_OUT_ENABLED' => ($config['toplist_enable_hits_out']) ? true : false,
                'HITS_IMG_ENABLED' => ($config['toplist_enable_hits_img']) ? true : false,
                'PREVIEW_ENABLED' => ($config['toplist_enable_sitethumbs']) ? true : false,
                'TOPLIST_HELP' => ($config['toplist_help_enable']) ? true : false,
                'TOPLIST_CODECHECK' => ($config['toplist_code_check']) ? true : false,
                'TOPLIST_CUSTOM_HELP' => ($config['toplist_help_custom_enable']) ? true : false,
                'TOPLIST_CUSTOM_HELP_LANG' => $user->lang[$config['toplist_help_lang_custom_index']],
                )
        );
        switch($mode) {
            default:
            // Show the main list with hostname look up when requested
            case 'ip_lookup':
            case 'list':
                $start = request_var('start', 0);
                if($config['toplist_enable_refresh']) {
                    $args = array();
                    if($mode=='ip_lookup') {
                        $args['mode'] = 'ip_lookup';
                        $args['id'] = $id;
                    }
                    if($start>0) {
                        $args['start'] = $start;
                    }
                    meta_refresh($config['toplist_refresh_time'], append_sid($phpbb_root_path . 'toplist.' . $phpEx,$args));
                }
                $i = 0;
                $rank_calc = array();
                if($config['toplist_enable_hits_in']) {
                    $rank_calc[] = "SUM(
						(t.in_hits * " . $config['toplist_in_hits_weight'] . ")
					)";
                }
                if($config['toplist_enable_hits_out']) {
                    $rank_calc[] = "SUM(
						(t.out_hits * " . $config['toplist_out_hits_weight'] . ")
					)";
                }
                if($config['toplist_enable_hits_img']) {
                    $rank_calc[] = "SUM(
						(t.image_hits * " . $config['toplist_img_hits_weight'] . ")
					)";
                }
                if($config['toplist_enable_ratings']) {
                    $rank_calc[] = "SUM(
						(rating * " . $config['toplist_rating_weight'] . ")
					)";
                }
                if($config['toplist_enable_pr']) {
                    $rank_calc[] = "SUM(
						(t.pr * " . $config['toplist_pr_weight'] . ")
					)";
                }
                if($config['toplist_enable_alexa']) {
                    $rank_calc[] = "SUM(
						(
							(t.alexa - t.alexa - t.alexa)
						* " . $config['toplist_alexa_weight'] . ")
					)";
                }
                $sql = "SELECT
				AVG(
					r.rating
				) AS rating, 
				t.*, " . ((count($rank_calc)>0) ? "(" . implode(' + ',$rank_calc) . ") AS total, " : '') . " 
				u.user_id,
				u.username,
				u.user_colour
				FROM " . TOPLIST_TABLE . " t 
				LEFT JOIN " . USERS_TABLE . " u ON (u.user_id=t.owner) 
				LEFT JOIN " . TOPLIST_RATE_TABLE . " r ON (r.site_id=t.id) 
				" . (($config['toplist_code_check'] && !$config['toplist_show_disabled'] && !$auth->acl_get('a_')) ? "WHERE (t.enabled = '1' OR (t.enabled = '0' AND t.owner = " . intval($user->data['user_id']) . ")) " : '') . "
				GROUP BY t.id 
				ORDER BY t.enabled DESC, " . ((count($rank_calc)>0) ? " total DESC" : " t.id ASC") . ", t.site_name ASC";
                //echo($sql);
                if($config['toplist_enable_cache']) {
                    $result = $db->sql_query($sql,$config['toplist_enable_cache_time']);
                }
                else {
                    $result = $db->sql_query($sql);
                }
                // Come one babe do the loop, spin around like crazy and make me go wild!
                while($row = $db->sql_fetchrow($result)) {
                    $i++;
                    if ($config['toplist_enable_pagenation'] && ($i > $start + $config['toplist_sites_a_page'] || $i <= $start)) {
                        continue;
                    }
                    if($auth->acl_get('a_') || $row['owner']==$user->data['user_id']) {
                        $can_admin = true;
                    }
                    else {
                        $can_admin = false;
                    }
                    // The rating part, the SQL should have done the most time consuming part allready for us
                    if($config['toplist_enable_ratings']) {
                        $row['rating'] = round($row['rating']);
                        if(is_null($row['rating'])) {
                            $row['rating'] = array();
                            $row['rating']['nnr'] = '0.gif';
                            $row['rating']['is_rated'] = false;
                        }
                        else {
                            $row['rating'] = array('nr' => round($row['rating']));
                            $row['rating']['text'] = '';
                            $row['rating']['nnr'] = $row['rating']['nr'] . '.gif';
                            $row['rating']['is_rated'] = true;
                        }
                        if($user->data['is_registered']) {
                            $row['rating']['can_rate'] = true;
                        }
                        else {
                            $row['rating']['can_rate'] = false;
                        }
                        $row['rating']['enabled'] = true;
                        $row['rating']['hash'] = $this->_gen_hash($row['id'],'image');
                    }
                    else {
                        unset($row['rating']);
                        $row['rating'] = array();
                        $row['rating']['enabled'] = false;
                        $row['rating']['is_rated'] = false;
                        $row['rating']['can_rate'] = false;
                        $row['rating']['nnr'] = '0.gif';
                        $row['rating']['hash']['hash'] = $row['rating']['hash']['uniqid'] = $row['rating']['text'] = '';
                    }
                    $hash = $this->_gen_hash($row['id'],'image');
                    $whois_sc = $this->_get_whois_sc_image($row['site_url'],$row['id']);
                    // Block information for the row
                    //die(var_export($whois_sc));
                    //header('Location: ' . $whois_sc['url']);die();
                    $template->assign_block_vars('toplistrow',array(
                            'RANK' => $i,
                            'SCORE' => $row['total'],
                            'RATE_ACTION' => append_sid($phpbb_root_path . 'toplist.' . $phpEx . '?mode=rate&amp;hash=' . $row['rating']['hash']['hash'] . '&amp;uniqid=' . $row['rating']['hash']['uniqid']),
                            'SITE_NAME' => $row['site_name'],
                            'SITE_DESC' => $row['site_info'],
                            'SITE_BANNER' => $phpbb_root_path . 'mods/toplist_mod/image.' . $phpEx . '?mode=inside&amp;id=' . $row['id'] . '&amp;hash=' . $hash['hash'] . '&amp;uniqid=' . $hash['uniqid'],
                            //'SITE_BANNER' => $row['site_banner'],
                            'IN' => $row['in_hits'],
                            'OUT' => $row['out_hits'],
                            'IMG' => $row['image_hits'],
                            'U_GO' => append_sid($phpbb_root_path . 'toplist.' . $phpEx . '?mode=site_view&amp;w=out&amp;id=' . $row['id']/* . '&amp;hash=' . $go_hash['hash'] . '&amp;uniqid=' . $go_hash['uniqid']*/),
                            'U_GO_TARGET' => mt_rand(),
                            'ID' => $row['id'],
                            'RATING' => $row['rating']['nnr'],
                            'RATING_ENABLED' => $row['rating']['enabled'],
                            'WHOIS_SC_IMAGE' => $whois_sc['url'],
                            'S_DISABLED' => (($config['toplist_show_disabled'] || !$config['toplist_code_check'] || $row['enabled']) ? false : true))
                    );
                    // Display some extra info if the user is an ADMIN or the owner of this site.
                    if($can_admin) {
                        $template->assign_block_vars('toplistrow.toplistrow_admin',array(
                                'U_CHECK_CODE' => append_sid($phpbb_root_path . 'toplist.' . $phpEx . '?mode=check_code&amp;id=' . $row['id']),
                                'U_EDIT' => append_sid($phpbb_root_path . 'toplist.' . $phpEx . '?mode=edit&amp;id=' . $row['id']),
                                'U_DELETE' => append_sid($phpbb_root_path . 'toplist.' . $phpEx . '?mode=predelete&amp;id=' . $row['id']))
                        );
                        if($auth->acl_get('a_')) {
                            // Some admin only info
                            $template->assign_block_vars('toplistrow.toplistrow_admin.toplistrow_is_admin',array(
                                    'U_IP' => append_sid($phpbb_root_path . 'toplist.' . $phpEx . '?mode=ip_lookup&amp;id=' . $row['id'] . '&amp;start=' . $start),
                                    'IP' => (($mode='ip_lookup' && $id==$row['id']) ? gethostbyaddr($row['ip']) : $row['ip']),
                                    'OWNER' => get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']))
                            );
                        }
                    }
                    // Show ratings when enabled
                    if($config['toplist_enable_ratings']) {
                        if($row['rating']['can_rate']) {
                            $template->assign_block_vars('toplistrow.canrate',array(
                                    'RATE_ACTION' => append_sid($phpbb_root_path . 'toplist.' . $phpEx . '?mode=rate&amp;hash=' . $row['rating']['hash']['hash'] . '&amp;uniqid=' . $row['rating']['hash']['uniqid']),
                                    'ID' => $row['id'])
                            );
                        }
                    }
                    if($i==1) {
                        $template->assign_block_vars('notoplistrow',array());
                    }
                }
                $template->assign_vars(array(
                        'U_TOPLIST_ADD_LINK' => append_sid($phpbb_root_path . 'toplist.' . $phpEx . '?mode=add'))
                );
                if($i==0) {
                    $template->assign_block_vars('toplistrow_none',array());
                    if($user->data['is_registered']) {
                        $template->assign_block_vars('toplistrow_none.toplistrow_none_user',array());
                    }
                }
                else {
                    $template->assign_block_vars('toplistrow_add',array());
                    if($user->data['is_registered']) {
                        $template->assign_block_vars('toplistrow_add.toplistrow_edit_user',array());
                    }
                }
                // Should be come usefull in the future
                /*$sql = "SELECT COUNT(id) AS count FROM " . TOPLIST_TABLE . " WHERE owner = '" . $user->data['user_id') . "'";
				$result = $db->sql_query($sql,120);
				$row = $db->sql_fetchrow($result);*/
                if($user->data['is_registered']) {
                    $template->assign_block_vars('tlnavlinks',array(
                            'NAME' => $user->lang['TOPLIST_ADD_SITES'],
                            'URL' => append_sid($phpbb_root_path . 'toplist.php?mode=add'))
                    );
                }
                if($config['toplist_enable_pagenation']) {
                    $pagination = generate_pagination(append_sid("{$phpbb_root_path}toplist.$phpEx"), $i, $config['toplist_sites_a_page'], $start);
                    $page_number = on_page($i, $config['toplist_sites_a_page'], $start);
                }
                else {
                    $page_number = $pagination = '';
                }
                $id = false;
                if($config['toplist_site_of_the_moment']) {
                    $this->siteofthemoment();
                }
                $template->assign_vars(array(
                        'TOTAL_SITES' => $i,
                        'PAGINATION' => $pagination,
                        'PAGE_NUMBER' => $page_number)
                );
                $return = array('toplist_list_body.html',$user->lang['TOPLIST_TOPLIST']);
                break;
            // Show information about the site before going out or coming in.
            case 'site_view':
                if($config['toplist_enable_comments']) {
                    $template->assign_block_vars('toplist_enabled_comments',array());
                }
                $w = request_var('w', '');
                $id = request_var('id', 0);
                if(!$id || $id==0) {
                    $template->assign_vars(array(
                            'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                    );
                    $message = $user->lang['TOPLIST_NO_ID'];
                    trigger_error($message);
                }
                // Grab site info from database
                $sql = "SELECT AVG(r.rating) AS rating, t.*, u.user_id, u.username
				, u.user_colour
				 FROM " . TOPLIST_TABLE . " t LEFT JOIN " . USERS_TABLE . " u ON (u.user_id=t.owner) LEFT JOIN " . TOPLIST_RATE_TABLE . " r ON (r.site_id=t.id) WHERE t.enabled = 1 AND t.id = " . $id . " GROUP BY t.id";
                $result = $db->sql_query($sql);
                $row = $db->sql_fetchrow($result);
                if(!$row) {
                    $template->assign_vars(array(
                            'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                    );
                    $message = $user->lang['TOPLIST_NO_ID'];
                    trigger_error($message);
                }
                $whois_sc = $this->_get_whois_sc_image($row['site_url'],$id);
                if($whois_sc['code']==1) {
                    $template->assign_block_vars('whois_sc',array(
                            'WHOIS_SC_IMAGE' => $whois_sc['url'])
                    );
                }
                unset($whois_sc);
                $hash = $this->_gen_hash($id,$w);
                switch($w) {
                    case 'out':
                        $url = 'mods/toplist_mod/go.' . $phpEx . '?id=' . $id . '&mode=out&uniqid=' . $hash['uniqid'] . '&hash=' . $hash['hash'];
                        $url_seo = $row['site_url'];
                        $blank_target = true;
                        $out_template_switch = true;
                        break;
                    case 'in':
                        $url_seo = $url = $phpbb_root_path . 'mods/toplist_mod/dload.' . $phpEx . '?id=' . $id . '&amp;mode=in&amp;uniqid=' . $hash['uniqid'] . '&amp;hash=' . $hash['hash'];
                        $blank_target = false;
                        $out_template_switch = false;
                        break;
                    default:
                        die('xxx');
                        break;
                }
                if($config['toplist_enable_ratings']) {
                    $row['rating'] = round($row['rating']);
                    if(is_null($row['rating'])) {
                        $row['rating'] = array();
                        $row['rating']['nnr'] = '0.gif';
                        $row['rating']['is_rated'] = false;
                    }
                    else {
                        $row['rating'] = array('nr' => round($row['rating']));
                        $row['rating']['text'] = '';
                        $row['rating']['nnr'] = $row['rating']['nr'] . '.gif';
                        $row['rating']['is_rated'] = true;
                    }
                    if($user->data['is_registered']) {
                        $row['rating']['can_rate'] = true;
                    }
                    else {
                        $row['rating']['can_rate'] = false;
                    }
                    $row['rating']['hash'] = $this->_gen_hash($id,'image');
                }
                else {
                    unset($row['rating']);
                    $row['rating'] = array();
                    $row['rating']['is_rated'] = false;
                    $row['rating']['can_rate'] = false;
                    $row['rating']['nnr'] = '0.gif';
                    $row['rating']['text'] = '';
                }
                if($config['toplist_enable_ratings']) {
                    if($row['rating']['can_rate']) {
                        $template->assign_block_vars('canrate',array(
                                'RATE_ACTION' => append_sid($phpbb_root_path . 'toplist.' . $phpEx . '?mode=rate&amp;hash=' . $row['rating']['hash']['hash'] . '&amp;uniqid=' . $row['rating']['hash']['uniqid'] . '&amp;w=out'),
                                'ID' => $id)
                        );
                    }
                }
                $this->add_nav_item($row['site_name'],append_sid($phpbb_root_path . $url));
                $hash = $this->_gen_hash($id,'image');
                $template->assign_vars(array(
                        'SITE_BANNER' => $phpbb_root_path . 'mods/toplist_mod/image.' . $phpEx . '?mode=inside&amp;id=' . $id . '&amp;hash=' . $hash['hash'] . '&amp;uniqid=' . $hash['uniqid'],
                        'S_OUT' => $out_template_switch,
                        'L_TOPLIST_NO_COMMENTS' => $user->lang['TOPLIST_NO_COMMENTS'],
                        'L_TOPLIST_PROCEED_TO_SITE' => $user->lang['TOPLIST_PROCEED_TO_SITE'],
                        'L_TOPLIST_RATE_THIS_SITE' => $user->lang['TOPLIST_RATE_THIS_SITE'],
                        'SITE_NAME' => $row['site_name'],
                        'SITE_INFO' => $row['site_info'],
                        'ID' => $id,
                        'RATING' => $row['rating']['nnr'],
                        'U_URL' => append_sid($url),
                        'U_URL_SEO' => $this->_fix_url($url_seo),
                        'U_TOPLIST_HOME' => append_sid($phpbb_root_path . 'toplist.' . $phpEx ),
                        'U_TOPLIST_POST_COMMENT' => append_sid($phpbb_root_path . 'toplist.' . $phpEx, array('mode' => 'site_view', 'w' => $w, 'id' => $id) ),
                        'W' => $w,
                        'RATING_ENABLED' => ($config['toplist_enable_ratings']) ? true : false,
                        'COMMENTS_ENABLED' => ($config['toplist_enable_comments']) ? true : false,
                        'U_URL_OUTGOING' => $blank_target)
                );
                if($config['toplist_enable_comments']) {
                    //
                    // Comments
                    //
                    /*
					 *   START: The next piece of code is nicked from the normal phpBB sources.
                    */
                    // Go ahead and pull all data for this topic
                    /*$sql = "SELECT *
						FROM " . RANKS_TABLE . "
						ORDER BY rank_special, rank_min";
					if ( !($result = $db->sql_query($sql)) )
					{
						message_die(GENERAL_ERROR, "Could not obtain ranks information.", '', __LINE__, __FILE__, $sql);
					}
					
					$ranksrow = array();
					while ( $row = $db->sql_fetchrow($result) )
					{
						$ranksrow[] = $row;
					}
					$db->sql_freeresult($result);*/
                    //
                    // Okay, let's do the loop, yeah come on baby let's do the loop
                    // and it goes like this ...
                    //
                    // Generate online information for user
                    $user_cache_online = $user_cache = array();
                    if ($config['load_onlinetrack']) {
                        $sql = 'SELECT session_user_id, MAX(session_time) as online_time, MIN(session_viewonline) AS viewonline
							FROM ' . SESSIONS_TABLE . '
							WHERE session_time >= ' . (time() - ($config['load_online_time'] * 60)) . '
							GROUP BY session_user_id';
                        if($config['toplist_enable_cache']) {
                            $result = $db->sql_query($sql,$config['toplist_enable_cache_time']);
                        }
                        else {
                            $result = $db->sql_query($sql);
                        }
                        //$result = $db->sql_query($sql);

                        $update_time = $config['load_online_time'] * 60;
                        while ($row = $db->sql_fetchrow($result)) {
                            $user_cache_online[$row['session_user_id']]['online'] = (time() - $update_time < $row['online_time'] && (($row['viewonline']) || $auth->acl_get('u_viewonline'))) ? true : false;
                        }
                        $db->sql_freeresult($result);
                    }
                    $bbcode = new bbcode(base64_encode(''));
                    $sql = "SELECT c.*, u.*, c.id AS post_id
						FROM " . TOPLIST_COMMENTS_TABLE . " c LEFT JOIN " . USERS_TABLE . " u ON (u.user_id=c.poster)
						WHERE c.site = $id
						ORDER BY c.time";
                    if($config['toplist_enable_cache']) {
                        $result = $db->sql_query($sql,$config['toplist_enable_cache_time']);
                    }
                    else {
                        $result = $db->sql_query($sql);
                    }
                    while ($row = $db->sql_fetchrow($result)) {
                        $poster_id = $row['poster'];

                        if (!isset($user_cache[$poster_id])) {
                            if ($poster_id == ANONYMOUS) {
                                $user_cache[$poster_id] = array(
                                        'joined'		=> '',
                                        'posts'			=> '',
                                        'from'			=> '',

                                        'sig'					=> '',
                                        'sig_bbcode_uid'		=> '',
                                        'sig_bbcode_bitfield'	=> '',

                                        'online'			=> false,
                                        'avatar'			=> '',
                                        'rank_title'		=> '',
                                        'rank_image'		=> '',
                                        'rank_image_src'	=> '',
                                        'sig'				=> '',
                                        'profile'			=> '',
                                        'pm'				=> '',
                                        'email'				=> '',
                                        'www'				=> '',
                                        'icq_status_img'	=> '',
                                        'icq'				=> '',
                                        'aim'				=> '',
                                        'msn'				=> '',
                                        'yim'				=> '',
                                        'jabber'			=> '',
                                        'search'			=> '',
                                        'age'				=> '',

                                        'username'			=> $row['username'],
                                        'user_colour'		=> $row['user_colour'],

                                        'warnings'			=> 0,
                                        'allow_pm'			=> 0,
                                );
                            }
                            else {
                                $user_sig = '';

                                // We add the signature to every posters entry because enable_sig is post dependant
                                if ($row['user_sig'] && $config['allow_sig'] && $user->optionget('viewsigs')) {
                                    $user_sig = $row['user_sig'];
                                }

                                $id_cache[] = $poster_id;

                                $user_cache[$poster_id] = array(
                                        'joined'		=> $user->format_date($row['user_regdate']),
                                        'posts'			=> $row['user_posts'],
                                        'warnings'		=> (isset($row['user_warnings'])) ? $row['user_warnings'] : 0,
                                        'from'			=> (!empty($row['user_from'])) ? $row['user_from'] : '',

                                        'sig'					=> $user_sig,
                                        'sig_bbcode_uid'		=> (!empty($row['user_sig_bbcode_uid'])) ? $row['user_sig_bbcode_uid'] : '',
                                        'sig_bbcode_bitfield'	=> (!empty($row['user_sig_bbcode_bitfield'])) ? $row['user_sig_bbcode_bitfield'] : '',

                                        'viewonline'	=> $row['user_allow_viewonline'],
                                        'allow_pm'		=> $row['user_allow_pm'],

                                        'avatar'		=> ($user->optionget('viewavatars')) ? get_user_avatar($row['user_avatar'], $row['user_avatar_type'], $row['user_avatar_width'], $row['user_avatar_height']) : '',
                                        'age'			=> '',

                                        'rank_title'		=> '',
                                        'rank_image'		=> '',
                                        'rank_image_src'	=> '',

                                        'username'			=> $row['username'],
                                        'user_colour'		=> $row['user_colour'],

                                        'online'		=> (isset($user_cache_online[$poster_id])) ? true : false,
                                        'profile'		=> append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=viewprofile&amp;u=$poster_id"),
                                        'www'			=> $row['user_website'],
                                        'aim'			=> ($row['user_aim'] && $auth->acl_get('u_sendim')) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=contact&amp;action=aim&amp;u=$poster_id") : '',
                                        'msn'			=> ($row['user_msnm'] && $auth->acl_get('u_sendim')) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=contact&amp;action=msnm&amp;u=$poster_id") : '',
                                        'yim'			=> ($row['user_yim']) ? 'http://edit.yahoo.com/config/send_webmesg?.target=' . urlencode($row['user_yim']) . '&amp;.src=pg' : '',
                                        'jabber'		=> ($row['user_jabber'] && $auth->acl_get('u_sendim')) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=contact&amp;action=jabber&amp;u=$poster_id") : '',
                                        'search'		=> ($auth->acl_get('u_search')) ? append_sid("{$phpbb_root_path}search.$phpEx", 'search_author=' . urlencode($row['username']) .'&amp;sr=posts') : '',
                                );
                                get_user_rank($row['user_rank'], $row['user_posts'], $user_cache[$poster_id]['rank_title'], $user_cache[$poster_id]['rank_image'], $user_cache[$poster_id]['rank_image_src']);

                                if (!empty($row['user_allow_viewemail']) || $auth->acl_get('a_email')) {
                                    $user_cache[$poster_id]['email'] = ($config['board_email_form'] && $config['email_enable']) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=email&amp;u=$poster_id") : (($config['board_hide_emails'] && !$auth->acl_get('a_email')) ? '' : 'mailto:' . $row['user_email']);
                                }
                                else {
                                    $user_cache[$poster_id]['email'] = '';
                                }

                                if (!empty($row['user_icq'])) {
                                    $user_cache[$poster_id]['icq'] = 'http://www.icq.com/people/webmsg.php?to=' . $row['user_icq'];
                                    $user_cache[$poster_id]['icq_status_img'] = '<img src="http://web.icq.com/whitepages/online?icq=' . $row['user_icq'] . '&amp;img=5" width="18" height="18" alt="" />';
                                }
                                else {
                                    $user_cache[$poster_id]['icq_status_img'] = '';
                                    $user_cache[$poster_id]['icq'] = '';
                                }

                                if ($config['allow_birthdays'] && !empty($row['user_birthday'])) {
                                    list($bday_day, $bday_month, $bday_year) = array_map('intval', explode('-', $row['user_birthday']));

                                    if ($bday_year) {
                                        $diff = $now['mon'] - $bday_month;
                                        if ($diff == 0) {
                                            $diff = ($now['mday'] - $bday_day < 0) ? 1 : 0;
                                        }
                                        else {
                                            $diff = ($diff < 0) ? 1 : 0;
                                        }

                                        $user_cache[$poster_id]['age'] = (int) ($now['year'] - $bday_year - $diff);
                                    }
                                }
                            }
                        }
                        // Parse the message and subject
                        $message = censor_text($row['message']);

                        // Second parse bbcode here
                        if ($row['bbbitfield']) {
                            $bbcode->bbcode_second_pass($message, $row['bbuid'], $row['bbbitfield']);
                        }

                        $message = bbcode_nl2br($message);
                        $message = smiley_text($message);
                        $postrow = array(
                                'POST_AUTHOR_FULL'		=> get_username_string('full', $poster_id, $row['username'], $row['user_colour'], $row['username']),
                                'POST_AUTHOR_COLOUR'	=> get_username_string('colour', $poster_id, $row['username'], $row['user_colour'], $row['username']),
                                'POST_AUTHOR'			=> get_username_string('username', $poster_id, $row['username'], $row['user_colour'], $row['username']),
                                'U_POST_AUTHOR'			=> get_username_string('profile', $poster_id, $row['username'], $row['user_colour'], $row['username']),

                                'RANK_TITLE'		=> $user_cache[$poster_id]['rank_title'],
                                'RANK_IMG'			=> $user_cache[$poster_id]['rank_image'],
                                'RANK_IMG_SRC'		=> $user_cache[$poster_id]['rank_image_src'],
                                'POSTER_JOINED'		=> $user_cache[$poster_id]['joined'],
                                'POSTER_POSTS'		=> $user_cache[$poster_id]['posts'],
                                'POSTER_FROM'		=> $user_cache[$poster_id]['from'],
                                'POSTER_AVATAR'		=> $user_cache[$poster_id]['avatar'],
                                'POSTER_WARNINGS'	=> $user_cache[$poster_id]['warnings'],
                                'POSTER_AGE'		=> $user_cache[$poster_id]['age'],

                                'POST_DATE'			=> $user->format_date($row['time']),
                                'POST_SUBJECT'		=> $row['subject'],
                                'MESSAGE'			=> $message,

                                'ICQ_STATUS_IMG'		=> $user_cache[$poster_id]['icq_status_img'],
                                'ONLINE_IMG'			=> ($poster_id == ANONYMOUS || !$config['load_onlinetrack']) ? '' : (($user_cache[$poster_id]['online']) ? $user->img('icon_user_online', 'ONLINE') : $user->img('icon_user_offline', 'OFFLINE')),
                                'S_ONLINE'				=> ($poster_id == ANONYMOUS || !$config['load_onlinetrack']) ? false : (($user_cache[$poster_id]['online']) ? true : false),

                                'U_QUOTE'			=> (!$user->data['is_registered']) ? '' : base64_encode('[quote="' . $row['username'] . '"]' . $message . '[/quote]'),
                                'U_DELETE'			=> (!$user->data['is_registered']) ? '' : ((($user->data['user_id'] == $poster_id && ($row['time'] > time() - ($config['edit_time'] * 60) || !$config['edit_time']))) ? append_sid("{$phpbb_root_path}toplist.$phpEx", "mode=delete_comment&amp;w=$w&amp;id={$id}&amp;cid={$row['id']}") : ''),

                                'U_PROFILE'		=> $user_cache[$poster_id]['profile'],
                                'U_SEARCH'		=> $user_cache[$poster_id]['search'],
                                'U_PM'			=> ($poster_id != ANONYMOUS && $config['allow_privmsg'] && $auth->acl_get('u_sendpm') && ($user_cache[$poster_id]['allow_pm'] || $auth->acl_gets('a_', 'm_') || $auth->acl_getf_global('m_'))) ? append_sid("{$phpbb_root_path}ucp.$phpEx", 'i=pm&amp;mode=compose&amp;action=quotepost&amp;p=' . $row['post_id']) : '',
                                'U_EMAIL'		=> $user_cache[$poster_id]['email'],
                                'U_WWW'			=> $user_cache[$poster_id]['www'],
                                'U_ICQ'			=> $user_cache[$poster_id]['icq'],
                                'U_AIM'			=> $user_cache[$poster_id]['aim'],
                                'U_MSN'			=> $user_cache[$poster_id]['msn'],
                                'U_YIM'			=> $user_cache[$poster_id]['yim'],
                                'U_JABBER'		=> $user_cache[$poster_id]['jabber'],

                                'U_NOTES'			=> ($auth->acl_getf_global('m_')) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=notes&amp;mode=user_notes&amp;u=' . $poster_id, true, $user->session_id) : '',

                                'POST_ID'			=> $row['post_id'],
                                'POSTER_ID'			=> $poster_id,

                                'S_HAS_ATTACHMENTS'	=> false,
                                'S_POST_UNAPPROVED'	=> false,
                                'S_POST_REPORTED'	=> false,
                                'S_CUSTOM_FIELDS'	=> (isset($cp_row['row']) && sizeof($cp_row['row'])) ? true : false,
                        );
                        //var_export($postrow);
                        // Dump vars into template
                        $template->assign_block_vars('postrow', $postrow);
                    }
                    //var_export($postrow);
                    //var_export($user_cache);
                    unset($message,$postrow);
                    /*
					 *   END: The next piece of code is nicked from the normal phpBB sources.
                    */
                    //
                    if($config['toplist_enable_comments'] && $user->data['user_id']!=ANONYMOUS && (isset($_POST['preview']) || isset($_POST['postcomment']))) {
                        $message = utf8_normalize_nfc(request_var('message', '', true));
                        $subject = utf8_normalize_nfc(request_var('subject', '', true));
                        $message_parser = new parse_message();
                        $message_parser->mode = 'post';
                        $message_parser->bbcode_init();
                        $message_parser->message = &$message;
                        // begin mobile browser detection mod - by sithnar
                        if ($user->data['is_mobile']) {
                            $message_parser->message .= "\n\n[size=80][b][i][ " . $user->lang['TOPLIST_MOBILE_COMMENTS'] . " ][/i][/b][/size] [img]http://" . $this->phpbb_base_url . "images/mobile.png[/img]";
                        }
                        // end mobile browser detection mod
                        $bbcodeId = $message_parser->bbcode_uid;
                        $message_parser->prepare_bbcodes();
                        $message_parser->parse_bbcode();
                        $bitfield = $message_parser->bbcode_bitfield;
                        //$message_parser->parse($post_data['enable_bbcode'], ($config['allow_post_links']) ? $post_data['enable_urls'] : false, $post_data['enable_smilies'], $img_status, $flash_status, $quote_status, $config['allow_post_links']);
                        //var_export($message_parser);die();
                        /*
						if(isset($_POST['preview']))
						{
							$orig_word = array();
							$replacement_word = array();
							obtain_word_list($orig_word, $replacement_word);
							$preview_subject = preg_replace($orig_word, $replacement_word, $subject);
							if(!isset($_POST['disable_bbcode']))
							{
								$preview_message = bbencode_second_pass($message, $bbcode_uid);
							}
							$preview_message = preg_replace($orig_word, $replacement_word,$preview_message);
							$preview_message = make_clickable($preview_message);
							if(!isset($_POST['disable_smilies']))
							{
								$preview_message = smilies_pass($preview_message);
							}
							$preview_message = str_replace("\n", '<br />', $preview_message);
							$template->assign_block_vars('comment_preview',array(
								'TOPIC_TITLE' => $preview_subject,
								'POST_SUBJECT' => $preview_subject,
								'POSTER_NAME' => $preview_username,
								'POST_DATE' => create_date($config['default_dateformat'), time(), $config['board_timezone')),
								'MESSAGE' => $preview_message)
							);
							$message = preg_replace('/\:(([a-z0-9]:)?)' . $bbcode_uid . '/s', '', $message);
						}
						else*/if(isset($_POST['postcomment'])) {
                            $current_time = time();
                            // Flood check
                            $last_post_time = 0;

                            $sql = 'SELECT time AS last_post_time
								FROM ' . TOPLIST_COMMENTS_TABLE . "
								WHERE poster = '" . intval($user->data['user_id']) . "'
									AND time > " . ($current_time - $config['flood_interval']);
                            $result = $db->sql_query_limit($sql, 1);
                            if ($row = $db->sql_fetchrow($result)) {
                                $last_post_time = $row['last_post_time'];
                            }
                            $db->sql_freeresult($result);

                            if($last_post_time && ($current_time - $last_post_time) < intval($config['flood_interval'])) {
                                trigger_error('Flood limit hit!');
                            }
                            else {
                                $sql = "INSERT INTO " . TOPLIST_COMMENTS_TABLE . " (bbuid,bbbitfield,poster,time,subject,message,site) VALUES ('" . $bbcodeId . "','" . $bitfield . "'," . intval($user->data['user_id']) . "," . time() . ",'" . addslashes($subject) . "','" . addslashes($message) . "'," . $id . ")";
                                $result = $db->sql_query($sql);
                                if($result) {
                                    if($config['toplist_points_enable'] && $config['toplist_points_per_comment']>0) {
                                        $this->add_points($user->data['user_id'],$config['toplist_points_per_comment']);
                                    }
                                    if($config['toplist_enable_cache'] && $config['toplist_enable_cache_clear']) {
                                        $cache->destroy('sql',TOPLIST_COMMENTS_TABLE);
                                    }
                                    $template->assign_vars(array(
                                            'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . "toplist.$phpEx?mode=site_view&amp;w=" . $w . "&amp;id=" . $id) . '">')
                                    );
                                    //$message = $user->lang['TOPLIST_NO_ID'];
                                    trigger_error('Comment added!');
                                }
                                else {
                                    trigger_error('Comment not added!' . mysql_error());
                                }
                            }
                        }
                    }
                    /*
					elseif(isset($_GET['quote']) && intval($_GET['quote'])>0)
					{
						$orig_word = array();
						$replacement_word = array();
						obtain_word_list($orig_word, $replace_word);
						$sql = "SELECT c.*, u.username, u.user_id FROM " . TOPLIST_COMMENTS_TABLE . " c LEFT JOIN " . USERS_TABLE . " u ON (u.user_id=c.poster) WHERE id = " . intval($_GET['quote']);
						$result = $db->sql_query($sql);
						$post_info = $db->sql_fetchrow($result);
						$msg_date =  create_date($board_config['default_dateformat'], $postrow['post_time'], $board_config['board_timezone']);
						if ( $post_info['bbuid'] != '' )
						{
							$post_info['message'] = preg_replace('/\:(([a-z0-9]:)?)' . $post_info['bbuid'] . '/s', '', $post_info['message']);
						}
						$quote_username = $post_info['username'];
						$message = '[quote="' . $quote_username . '"]' . $post_info['message'] . '[/quote]';
						$subject = $post_info['subject'];
						
						if ( !empty($orig_word) )
						{
							$subject = ( !empty($subject) ) ? preg_replace($orig_word, $replace_word, $subject) : '';
							$message = ( !empty($message) ) ? preg_replace($orig_word, $replace_word, $message) : '';
						}
			
						if ( !preg_match('/^Re:/', $subject) && strlen($subject) > 0 )
						{
							$subject = 'Re: ' . $subject;
						}
					}*/
                }
                $return = array('toplist_site_view.html',$user->lang['TOPLIST_SITE_VIEW']);
                break;
            // Delete a comment, only for admins or the user who left the comment!
            case 'delete_comment':
                if(!$user->data['is_registered']) {
                    login_box('', $user->lang['TOPLIST_LOGIN_EXP']);
                }
                $id = request_var('id', 0);
                if(!$id || $id==0) {
                    $template->assign_vars(array(
                            'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                    );
                    $message = $user->lang['TOPLIST_NO_ID'];
                    trigger_error($message);
                }
                $sql = "SELECT * FROM " . TOPLIST_COMMENTS_TABLE . " WHERE id = " . intval(id);
                $result = $db->sql_query($sql);
                $row = $db->sql_fetchrow($result);
                //var_export($sql);
                if($auth->acl_get('a_') || $user->data['user_id']==$row['poster']) {
                    $w = request_var('w', '');
                    $cid = request_var('cid', 0);
                    confirm_box(false, $user->lang['TOPLIST_CONFIRM_COMMENT_DELETE'], '', 'confirm_body.html',append_sid($phpbb_root_path . 'toplist.' . $phpEx . '?mode=dodelete_comment&cid=' . intval($cid) . '&amp;id=' . intval($id) . '&amp;w=' . (($w=='in') ? 'in' : 'out')));
                }
                break;
            case 'dodelete_comment':
                if(!$user->data['is_registered']) {
                    login_box('', $user->lang['TOPLIST_LOGIN_EXP']);
                }
                $id = request_var('id', 0);
                $cid = request_var('cid', 0);
                $w = request_var('w', '');
                if(!$id || $id==0) {
                    $template->assign_vars(array(
                            'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                    );
                    $message = $user->lang['TOPLIST_NO_ID'];
                    trigger_error($message);
                }
                if(isset($_POST['confirm'])) {
                    $sql = "SELECT * FROM " . TOPLIST_COMMENTS_TABLE . " WHERE id = '" . $cid . "'";
                    $result = $db->sql_query($sql);
                    $row = $db->sql_fetchrow($result);
                    if($row['poster']!=$user->data['user_id']) {
                        if(!$auth->acl_get('a_')) {
                            $template->assign_vars(array(
                                    'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                            );
                            $message = $user->lang['TOPLIST_NO_AUTH'];
                            trigger_error($message);
                        }
                    }
                    $sql = "DELETE FROM " . TOPLIST_COMMENTS_TABLE . " WHERE id = " . intval($cid);
                    $result = $db->sql_query($sql);
                    if($config['toplist_enable_cache'] && $config['toplist_enable_cache_clear']) {
                        $cache->destroy('sql',TOPLIST_COMMENTS_TABLE);
                    }
                    $template->assign_vars(array(
                            'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . "toplist.$phpEx?mode=site_view&amp;w=" . (($w=='in') ? 'in' : 'out') . "&amp;id=" . intval($id)) . '">')
                    );
                    trigger_error($user->lang['TOPLIST_COMMENT_DELETED']);
                }
                $template->assign_vars(array(
                        'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . "toplist.$phpEx?mode=site_view&amp;w=" . (($w=='in') ? 'in' : 'out') . "&amp;id=" . intval($id)) . '">')
                );
                trigger_error($user->lang['TOPLIST_COMMENT_NOT_DELETED']);
                break;
            // Edit a site listing, only for the owner or an admin
            case 'edit':
                if(!$user->data['is_registered']) {
                    login_box('', $user->lang['TOPLIST_LOGIN_EXP']);
                }
                $template->assign_block_vars('toplist_edit',array());
                $id = request_var('id', 0);
                if(!$id || $id==0) {
                    $template->assign_vars(array(
                            'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                    );
                    $message = $user->lang['TOPLIST_NO_ID'];
                    trigger_error($message);
                }
                $sql = "SELECT * FROM " . TOPLIST_TABLE . " WHERE id = '" . $id . "'";
                $result = $db->sql_query($sql);
                $row = $db->sql_fetchrow($result);
                if($row['owner']!=$user->data['user_id']) {
                    if(!$auth->acl_get('a_')) {
                        $template->assign_vars(array(
                                'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                        );
                        $message = $user->lang['TOPLIST_NO_AUTH'];
                        trigger_error($message);
                    }
                }
                $template->assign_vars(array(
                        'S_EDIT' => true,
                        'CODE_BASE' => 'http://' . $this->phpbb_base_url,
                        'CODE_ID' => $row['id'],
                        'NAME' => $row['site_name'],
                        'INFO' => $row['site_info'],
                        'LINK' => $row['site_url'],
                        'BANNER' => $row['site_banner'],
                        'ACTION' => append_sid($phpbb_root_path . 'toplist.php?mode=do_edit&amp;id=' . $row['id']))
                );
                if(function_exists('imagedestroy')) {
                    /*$template->assign_vars(array(
						'S_NORMAL' => (($row['image_type']==0) ? 'checked="checked" ' : ''),
						'S_GD' => (($row['image_type']==1) ? 'checked="checked" ' : ''))
					);*/
                    $template->assign_block_vars('gd_installed',array());
                }
                else {

                    $template->assign_block_vars('gd_installed_not',array());
                }
                $dir = $phpbb_root_path . 'mods/toplist_mod/images/';
                if($dh = opendir($dir)) {
                    while(($file = readdir($dh)) !== false) {
                        if($file!='.htaccess' && $file!='index.html' && $file!='index.htm' && $file!='.' && $file!='..' && !is_dir($dir . $file)) {
                            $template->assign_block_vars('image',array(
                                    'URL' => $dir . $file,
                                    'SELECTED' => (($file==$row['image']) ? 'checked="checked" ' : ''),
                                    'FILENAME' => $file)
                            );
                            $template->assign_block_vars('gdimage',array(
                                    'URL' => $phpbb_root_path . 'mods/toplist_mod/image.php?mode=gdsimplepreview&amp;id=' . $id . '&image=' . $file,
                                    'SELECTED' => (('SimpleGD:' . $file==$row['image']) ? 'checked="checked" ' : ''),
                                    'FILENAME' => $file)
                            );
                        }
                    }
                    closedir($dh);
                }
                $template->assign_vars(array(
                        'L_TOPLIST_NAME' => $user->lang['TOPLIST_NAME'],
                        'L_TOPLIST_INFO' => $user->lang['TOPLIST_INFO'],
                        'L_TOPLIST_SITE_URL' => $user->lang['TOPLIST_SITE_URL'],
                        'L_TOPLIST_BANNER_URL' => $user->lang['TOPLIST_BANNER_URL'],
                        'L_TOPLIST_RESEND_HTML' => $user->lang['TOPLIST_RESEND_HTML'],
                        'L_TOPLIST_EDIT_WEBSITE' => $user->lang['TOPLIST_EDIT_WEBSITE'],
                        'L_TOPLIST_ADD_WEBSITE' => $user->lang['TOPLIST_ADD_WEBSITE'],
                        'L_SUBMIT' => $user->lang['SUBMIT'],
                        'L_TOPLIST_DISPLAYS_IMAGES' => $user->lang['TOPLIST_DISPLAYS_IMAGES'])
                );
                $template->assign_block_vars('edit',array());
                $return = array('toplist_edit.html',$user->lang['TOPLIST_EDIT_WEBSITE']);
                break;
            // (Actual execute) Edit a site listing, only for the owner or an admin
            case 'do_edit':
                if(!$user->data['is_registered']) {
                    login_box('', $user->lang['TOPLIST_LOGIN_EXP']);
                }
                $id = request_var('id', 0);
                if(!$id || $id==0) {
                    $template->assign_vars(array(
                            'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                    );
                    $message = $user->lang['TOPLIST_NO_ID'];
                    trigger_error($message);
                }
                $sql = "SELECT * FROM " . TOPLIST_TABLE . " WHERE id = '" . $id . "'";
                $result = $db->sql_query($sql);
                $row = $db->sql_fetchrow($result);
                if($row['owner']!=$user->data['user_id']) {
                    if(!$auth->acl_get('a_')) {
                        $template->assign_vars(array(
                                'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                        );
                        $message = $user->lang['TOPLIST_NO_AUTH'];
                        trigger_error($message);
                    }
                }

                $site_name = utf8_normalize_nfc(request_var('site_name', '', true));
                $site_name = htmlspecialchars(addslashes($site_name));
                $site_info = utf8_normalize_nfc(request_var('site_info', '', true));
                $site_info = htmlspecialchars(addslashes($site_info));
                $site_link = utf8_normalize_nfc(request_var('site_link', '', true));
                $site_link = $this->_fix_url($site_link);
                $site_link_host = @parse_url($site_link,PHP_URL_HOST);
                $site_link = addslashes($site_link);
                //if(empty($site_link) && @gethostbyname($site_link_host)!=$site_link_host)
                $site_banner = utf8_normalize_nfc(request_var('site_banner', '', true));
                $site_banner = addslashes($site_banner);
                $image = utf8_normalize_nfc(request_var('image', '', true));
                $image = addslashes($image);
                $image_type = request_var('image_type', 0);
                $resend = request_var('resend', '');
                $dir = $phpbb_root_path . 'mods/toplist_mod/images/';
                if($dh = opendir($dir)) {
                    while(($file = readdir($dh)) !== false) {
                        if($file!='.htaccess' && $file!='index.html' && $file!='index.htm' && $file!='.' && $file!='..') {
                            $image = request_var('image',$file);
                            break;
                        }
                    }
                    closedir($dh);
                }
                $sql = "UPDATE " . TOPLIST_TABLE . " SET site_name = '" . $site_name . "', site_info = '" . $site_info . "', site_url = '" . $site_link . "', site_banner = '" . $site_banner . "', image = '" . $image . "', image_type = '" . $image_type . "' WHERE id = '" . $id . "'";
                $result = $db->sql_query($sql);
                if($config['toplist_points_enable'] && $config['toplist_points_per_edit']>0) {
                    $this->add_points($user->data['user_id'],$config['toplist_points_per_edit']);
                }
                if($config['toplist_enable_cache'] && $config['toplist_enable_cache_clear']) {
                    $cache->destroy('sql',TOPLIST_TABLE);
                }
                $message = $user->lang['TOPLIST_EDIT_DONE'];
                $this->_check_banner($id);
                if(false)//$resend)
                {
                    /*
					$html_code = $this->_get_html_code($row['id']);
					$tmp_userdata = $mod_base_class->get_userdata($row['owner']);
					$email = array();
					$email['subject'] = $config['sitename'] . ' -> ' . $user->lang['TOPLIST_EDIT_WEBSITE'];
					$email['message'] = $user->lang['TOPLIST_ADD_DONE_EMAIL'];
					$email['message'] = sprintf($email['message'],$tmp_userdata['username'],$site_name,$xtra_msg,$html_code);
					$email['language'] = $tmp_userdata['user_lang'];
					$email['address'] = $tmp_userdata['user_email'];
					$email['name'] = $tmp_userdata['username'];
					$mod_base_class->send_email_message($email['address'],$email['subject'],$email['message'],$email['language'],$email['name'],'');
					$message .= '<br /><br />';
					$message .= $user->lang['TOPLIST_DID_RESEND'];
                    */
                }
                $template->assign_vars(array(
                        'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                );
                trigger_error($message);
                break;
            // (Actual execute) Add a site to the toplist
            case 'do_add':
                if(!$user->data['is_registered']) {
                    login_box('', $user->lang['TOPLIST_LOGIN_EXP']);
                }
                $ip = $user->data['session_ip'];
                $fire_away = true;
                $site_name = utf8_normalize_nfc(request_var('site_name', '', true));
                $site_name = htmlspecialchars(addslashes($site_name));
                if(empty($site_name)) {
                    $fire_away = false;
                    $template->assign_block_vars('toplist_name_error',array());
                }
                $site_info = utf8_normalize_nfc(request_var('site_info', '', true));
                $site_info = htmlspecialchars(addslashes($site_info));
                if(empty($site_info)) {
                    $fire_away = false;
                    $template->assign_block_vars('toplist_info_error',array());
                }
                $site_link = utf8_normalize_nfc(request_var('site_link', '', true));
                $site_link = $this->_fix_url($site_link);
                $site_link_host = @parse_url($site_link,PHP_URL_HOST);
                $site_link = addslashes($site_link);
                if(empty($site_link) || @gethostbyname($site_link_host)==$site_link_host) {
                    $fire_away = false;
                    $template->assign_block_vars('toplist_url_error',array());
                }
                $site_banner = utf8_normalize_nfc(request_var('site_banner', '', true));
                $site_banner = addslashes($site_banner);
                $image = utf8_normalize_nfc(request_var('image', '', true));
                $image = addslashes($image);
                if(empty($image)) {
                    $fire_away = false;
                    $template->assign_block_vars('toplist_image_error',array());
                }
                $image_type = request_var('image_type', 0);
                $sql = "SELECT * FROM " . TOPLIST_TABLE . "  WHERE site_url = '" . $site_link . "'";
                $result = $db->sql_query($sql);
                $row = $db->sql_fetchrow($result);
                if($row) {
                    $fire_away = false;
                    $template->assign_block_vars('toplist_url_exists_error',array());
                }
                if($fire_away) {
                    $enabled = 1;
                    $sql = "INSERT INTO " . TOPLIST_TABLE . " (ip,owner,site_name,site_info,site_url,site_banner,image,image_type,enabled) VALUES ('" . $ip . "','" . intval($user->data['user_id']) . "','" . $site_name . "','" . $site_info . "','" . $site_link . "','" . $site_banner . "','" . $image . "','" . $image_type . "','" . $enabled . "')";
                    $result = $db->sql_query($sql);
                    $tmp_site_id = $db->sql_nextid();
                    if($config['toplist_points_enable'] && $config['toplist_points_per_add']>0) {
                        $this->add_points($user->data['user_id'],$config['toplist_points_per_add']);
                    }
                    if($config['toplist_enable_cache'] && $config['toplist_enable_cache_clear']) {
                        $cache->destroy('sql',TOPLIST_TABLE);
                    }
                    $html_code = $this->_get_html_code($tmp_site_id);
                    $this->_check_banner($tmp_site_id);
                    $xtra_msg = '';
                    $args = array();
                    $args['FORUM_NAME'] = $config['sitename'];
                    $args['TOPLIST_SITE_NAME'] = $site_name;
                    $args['TOPLIST_SITE_CODE'] = $html_code;
                    //$args['EMAIL_SIG'] = ;
                    $sql = $db->sql_build_query('SELECT',
                            array(
                            'SELECT'   => 'u.user_notify_type, u.user_email, u.user_jabber, u.username, u.user_lang',
                            'FROM'      => array(
                                    USERS_TABLE   => 'u',
                            ),
                            'WHERE' => ' u.user_id IN(' . implode(',',array(intval($user->data['user_id']))) . ')'
                            )
                    );
                    $result = $db->sql_query($sql);
                    while($row = $db->sql_fetchrow($result)) {
                        $args['USERNAME'] = $row['username'];
                        $this->send_notify($row,'toplist_site_add',$args);
                    }
                    $message = $user->lang['TOPLIST_ADD_DONE'];
                    $message = sprintf($message,htmlspecialchars($html_code));
                    trigger_error($message);
                }
            // Add a site to the toplist
            case 'add':
                if(!$user->data['is_registered']) {
                    login_box('', $user->lang['TOPLIST_LOGIN_EXP']);
                }
                $template->assign_block_vars('toplist_add',array());
                $template->assign_vars(array(
                        'ACTION' => append_sid($phpbb_root_path . 'toplist.php?mode=do_add'))
                );
                if(function_exists('imagedestroy')) {
                    $template->assign_block_vars('gd_installed',array());
                }
                else {

                    $template->assign_block_vars('gd_installed_not',array());
                }
                $dir = $phpbb_root_path . 'mods/toplist_mod/images/';
                if($dh = opendir($dir)) {
                    while(($file = readdir($dh)) !== false) {
                        if($file!='.htaccess' && $file!='index.html' && $file!='index.htm' && $file!='.' && $file!='..' && !is_dir($dir . $file)) {
                            $template->assign_block_vars('image',array(
                                    'URL' => $dir . $file,
                                    'SELECTED' => '',
                                    'FILENAME' => $file)
                            );
                            $template->assign_block_vars('gdimage',array(
                                    'URL' => $phpbb_root_path . 'mods/toplist_mod/image.php?mode=gdsimplepreview&amp;id=0&image=' . $file,
                                    'SELECTED' => '',
                                    'FILENAME' => $file)
                            );
                        }
                    }
                    closedir($dh);
                }
                if(!isset($site_name)) {
                    $site_name = '';
                }
                if(!isset($site_info)) {
                    $site_info = '';
                }
                if(!isset($site_link)) {
                    $site_link = '';
                }
                if(!isset($site_banner)) {
                    $site_banner = '';
                }
                $template->assign_vars(array(
                        'NAME' => $site_name,
                        'INFO' => $site_info,
                        'LINK' => $site_link,
                        'BANNER' => $site_banner,
                        'L_TOPLIST_NAME' => $user->lang['TOPLIST_NAME'],
                        'L_TOPLIST_INFO' => $user->lang['TOPLIST_INFO'],
                        'L_TOPLIST_SITE_URL' => $user->lang['TOPLIST_SITE_URL'],
                        'L_TOPLIST_BANNER_URL' => $user->lang['TOPLIST_BANNER_URL'],
                        'L_TOPLIST_RESEND_HTML' => $user->lang['TOPLIST_RESEND_HTML'],
                        'L_TOPLIST_EDIT_WEBSITE' => $user->lang['TOPLIST_EDIT_WEBSITE'],
                        'L_TOPLIST_ADD_WEBSITE' => $user->lang['TOPLIST_ADD_WEBSITE'],
                        'L_SUBMIT' => $user->lang['SUBMIT'],
                        'L_TOPLIST_DISPLAYS_IMAGES' => $user->lang['TOPLIST_DISPLAYS_IMAGES'])
                );
                $template->assign_block_vars('add',array());
                $this->add_nav_item($user->lang['TOPLIST_ADD_WEBSITE'],'');
                $return = array('toplist_edit.html',$user->lang['TOPLIST_ADD_WEBSITE']);
                break;
            case 'predelete':
                if(!$user->data['is_registered']) {
                    login_box('', $user->lang['TOPLIST_LOGIN_EXP']);
                }
                $id = request_var('id', 0);
                if(!$id || $id==0) {
                    $template->assign_vars(array(
                            'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                    );
                    $message = $user->lang['TOPLIST_NO_ID'];
                    trigger_error($message);
                }
                $sql = "SELECT * FROM " . TOPLIST_TABLE . " WHERE id = '" . $id . "'";
                $result = $db->sql_query($sql);
                $row = $db->sql_fetchrow($result);
                if($row['owner']!=$user->data['user_id']) {
                    if(!$auth->acl_get('a_')) {
                        $template->assign_vars(array(
                                'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                        );
                        $message = $user->lang['TOPLIST_NO_AUTH'];
                        trigger_error($message);
                    }
                }
                confirm_box(false, $user->lang['TOPLIST_CONFIRM_DELETE'], '', 'confirm_body.html',append_sid($phpbb_root_path . 'toplist.' . $phpEx . '?mode=delete&amp;id=' . $row['id']));
                break;
            // Delete a site from the toplist (Only for the owner or an admin)
            case 'delete':
                if(!$user->data['is_registered']) {
                    login_box('', $user->lang['TOPLIST_LOGIN_EXP']);
                }
                $id = request_var('id', 0);
                if(!$id || $id==0) {
                    $template->assign_vars(array(
                            'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                    );
                    $message = $user->lang['TOPLIST_NO_ID'];
                    trigger_error($message);
                }
                $sql = "SELECT * FROM " . TOPLIST_TABLE . " WHERE id = '" . $id . "'";
                $result = $db->sql_query($sql);
                $row = $db->sql_fetchrow($result);
                if($row['owner']!=$user->data['user_id']) {
                    if(!$auth->acl_get('a_')) {
                        $template->assign_vars(array(
                                'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                        );
                        $message = $user->lang['TOPLIST_NO_AUTH'];
                        trigger_error($message);
                    }
                }
                //$confirm = ( $_POST['confirm'] ) ? TRUE : 0;
                /*
				if(!isset($_POST['confirm']) && !isset($_POST['cancel']))
				{
					include($phpbb_root_path . 'includes/page_header.'.$phpEx);
					
					//
					// Set template files
					//
					$template->set_filenames(array(
						'confirm' => 'confirm_body.tpl')
					);
		
					$template->assign_vars(array(
						'MESSAGE_TITLE' => $user->lang['Confirm') . ' -> ' . $user->lang['TOPLIST_CONFIRM_DELETE'),
						'MESSAGE_TEXT' => $user->lang['TOPLIST_CONFIRM_DELETE_CONFIRM'),
		
						'L_YES' => $user->lang['Yes'),
						'L_NO' => $user->lang['No'),
		
						'S_CONFIRM_ACTION' => append_sid($phpbb_root_path . "toplist.$phpEx?mode=delete&amp;id=" . $id),
						'S_HIDDEN_FIELDS' => $hidden)
					);

					$template->pparse('confirm');
		
					include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
				}
				elseif($confirm==true)*/
                if(confirm_box(true)) {
                    $sql = "DELETE FROM " . TOPLIST_TABLE . " WHERE id = '" . $id . "'";
                    $result = $db->sql_query($sql);
                    if($config['toplist_site_of_the_moment_id']==$id) {
                        $this->_set_new_site_of_the_moment();
                    }
                    if($config['toplist_enable_cache'] && $config['toplist_enable_cache_clear']) {
                        $cache->destroy('sql',TOPLIST_TABLE);
                    }
                    meta_refresh(3, append_sid($phpbb_root_path . 'toplist.php'));
                    $message = $user->lang['TOPLIST_DELETE_DONE'];
                    trigger_error($message);
                }/*
				elseif(isset($_POST['cancel']))
				{
					$template->assign_vars(array(
						'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
					);
					$message = $user->lang['TOPLIST_DELETE_NOT_DONE');
					message_die(GENERAL_MESSAGE, $message);
				}
                */else {
                    redirect(append_sid($phpbb_root_path . 'toplist.' . $phpEx, true));
                }
                break;
            // Rate a site, if you rated on this site before the your rate will be adjusted
            case 'rate':
                $rating = request_var('rating', 0);
                if(!$config['toplist_enable_ratings'] || $rating>5) {
                    $this->_rate_ajax_done($id);
                    trigger_error($user->lang['TOPLIST_DISABLED_RATING']);
                }
                if(!$user->data['is_registered']) {
                    $this->_rate_ajax_done($id);
                    login_box('', $user->lang['TOPLIST_LOGIN_EXP']);
                }
                $id = request_var('id', 0);
                $w = request_var('w', '');
                if(!$id || $id==0) {
                    $this->_rate_ajax_done($id);
                    $template->assign_vars(array(
                            'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php' . ((isset($w)) ? '?mode=site_view&amp;w=out&amp;id=' . $id : '')) . '">')
                    );
                    $message = $user->lang['TOPLIST_NO_ID'];
                    trigger_error($message);
                }
                $uniqid = request_var('uniqid', '');
                $id = request_var('id', 0);
                $hash = request_var('hash', '');
                /*if($this->_validate_hash($id,$hash,$uniqid,true))
				{
					$this->_rate_ajax_done($id);
					$template->assign_vars(array(
						'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php' . ((isset($_GET['w'])) ? '?mode=site_view&amp;w=out&amp;id=' . $id : '')) . '">')
					);
					$message = $user->lang['TOPLIST_BAD_AUTH');
					trigger_error($message);
				}*/
                $ip = $user->data['session_ip'];

                $sql = "SELECT ip FROM " . TOPLIST_RATE_TABLE . " WHERE site_id = " . $id . " AND user_id = " . $user->data['user_id'];
                if(!$user->data['user_id']) {
                    $sql .= " AND ip = '" . $ip . "'";
                }
                $result = $db->sql_query($sql);
                $row = $db->sql_fetchrow($result);
                if($row) {
                    $sql = "UPDATE " . TOPLIST_RATE_TABLE . " SET rating = '" . $rating . "' WHERE site_id = " . $id . " AND user_id = " . $user->data['user_id'];
                    $result = $db->sql_query($sql);
                }
                else {
                    $sql = "INSERT INTO " . TOPLIST_RATE_TABLE . " (site_id,user_id,rating,ip) VALUES ('" . $id . "','" . $user->data['user_id'] . "','" . $rating . "','" . $ip . "')";
                    $result = $db->sql_query($sql);
                    if($config['toplist_points_enable'] && $config['toplist_points_per_rate']>0) {
                        $this->add_points($user->data['user_id'],$config['toplist_points_per_rate']);
                    }
                }
                if($config['toplist_enable_cache'] && $config['toplist_enable_cache_clear']) {
                    $cache->destroy('sql',TOPLIST_RATE_TABLE);
                }
                $this->_rate_ajax_done($id);
                $template->assign_vars(array(
                        'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php' . ((isset($w)) ? '?mode=site_view&amp;w=out&amp;id=' . $id : '')) . '">')
                );
                $message = $user->lang['TOPLIST_RATING_DONE'];
                trigger_error($message);
                break;
            case 'check_code':
                if(!$user->data['is_registered']) {
                    login_box('', $user->lang['TOPLIST_LOGIN_EXP']);
                }
                $id = request_var('id', 0);
                if(!$id || $id==0) {
                    $template->assign_vars(array(
                            'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                    );
                    $message = $user->lang['TOPLIST_NO_ID'];
                    trigger_error($message);
                }
                $sql = "SELECT * FROM " . TOPLIST_TABLE . " WHERE id = " . intval($id);
                $result = $db->sql_query($sql);
                $row = $db->sql_fetchrow($result);
                if($row['owner']!=$user->data['user_id']) {
                    if(!$auth->acl_get('a_')) {
                        $template->assign_vars(array(
                                'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                        );
                        $message = $user->lang['TOPLIST_NO_AUTH'];
                        trigger_error($message);
                    }
                }
                $this->_check_code_site($id,$this->_fix_url($row['site_url']));
                $template->assign_vars(array(
                        'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid($phpbb_root_path . 'toplist.php') . '">')
                );
                $message = $user->lang['TOPLIST_CHECK_CODE_DONE'];
                trigger_error($message);
                break;
        }
        $this->_add_hash_to_table();
        return $return;
    }

    function _rate_ajax_done($id) {
        if(!isset($_POST['ajax'])) {
            return false;
        }
        global $db;
        $sql = "SELECT AVG(r.rating) AS rating
		FROM " . TOPLIST_TABLE . " t LEFT JOIN " . USERS_TABLE . " u ON (u.user_id=t.owner) LEFT JOIN " . TOPLIST_RATE_TABLE . " r ON (r.site_id=t.id) WHERE t.id = '" . $id . "' GROUP BY t.id";
        $result = $db->sql_query($sql);
        $row = $db->sql_fetchrow($result);
        die(round(intval($row['rating'])));
    }

    function image_handling($mode,$id,$hash = '',$uniqid = '') {
        global $db,$template,$user,$phpbb_root_path,$cache,$config,$auth;
        switch($mode) {
            case 'inside':
                $uniqid = request_var('uniqid', '');
                $hash = request_var('hash', '');
                $uniqid = rawurldecode($uniqid);
                $url = 'leeg.gif';
                if($this->_validate_hash($id,$hash,$uniqid)) {
                    $sql = "SELECT site_banner, id, show_banner FROM " . TOPLIST_TABLE . " WHERE id = '" . $id . "' AND site_banner != ''";
                    $result = $db->sql_query($sql);
                    if($result) {
                        $row = $db->sql_fetchrow($result);
                        if($row['show_banner'] || (!$row['show_banner'] && $config['toplist_banner_resize']) || $this->_check_banner($row['id'])) {
                            $banner = $row['site_banner'];
                            if(!empty($banner) && @parse_url($banner)) {
                                unset($sql,$result);
                                if(!$row['show_banner'] && $config['toplist_banner_resize']) {
                                    $url1 = 'cache/banner_' . intval($id) . '.png';
                                    if(!file_exists($url1) || time()>(filemtime($url1) + (60*60*24*$config['toplist_image_cache_days']))) {
                                        try {
                                            list($width_orig, $height_orig, $type) = @getimagesize($banner);
                                        } catch (Exception $e) {
                                            // Dodo!
                                        }
                                        if (isset($width_orig) && intval($width_orig)>0 && isset($height_orig) && intval($height_orig)>0 && function_exists('imagecreatefromjpeg') && function_exists('imagecreatefrompng') && function_exists('imagecreatefromgif') && function_exists('imagecreatetruecolor') && function_exists('imagecopyresampled') && function_exists('imagejpeg') && function_exists('getimagesize')) {
                                            switch($type) {
                                                case IMAGETYPE_GIF:
                                                    $org = imagecreatefromgif($banner);
                                                    break;
                                                case IMAGETYPE_JPEG:
                                                    $org = imagecreatefromjpeg($banner);
                                                    break;
                                                case IMAGETYPE_PNG:
                                                    $org = imagecreatefrompng($banner);
                                                    break;
                                            }
                                            switch($type) {
                                                case IMAGETYPE_GIF:
                                                case IMAGETYPE_JPEG:
                                                case IMAGETYPE_PNG:
                                                    if(($width_orig > $config['toplist_banner_width'] || $height_orig > $config['toplist_banner_height'])) {
                                                        $width = $config['toplist_banner_width'];
                                                        $height = $config['toplist_banner_height'];
                                                        $ratio_orig = ($width_orig / $height_orig);
                                                        if ($width/$height > $ratio_orig) {
                                                            $width = $height*$ratio_orig;
                                                        }
                                                        else {
                                                            $height = $width/$ratio_orig;
                                                        }
                                                        $rs = imagecreatetruecolor($width, $height);
                                                        imagecopyresampled($rs, $org, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
                                                    }
                                                    else {
                                                        $rs = $org;
                                                    }
                                                    imagepng($rs, $url1,9);
                                                    header('Content-type: image/png');
                                                    imagepng($rs);
                                                    imagedestroy($org);
                                                    imagedestroy($rs);
                                                    break;
                                            }
                                        }
                                        elseif(isset($width_orig) && intval($width_orig)>0 && isset($height_orig) && intval($height_orig)>0 && !($width_orig > $config['toplist_banner_width'] || $height_orig > $config['toplist_banner_height'])) {
                                            $url = $banner;
                                        }
                                    }
                                    elseif(file_exists($url1)) {
                                        $url = $url1;
                                    }
                                }
                                else {
                                    $url = $banner;
                                }
                            }
                        }
                    }
                }
                if(!$url) {
                    $url = 'leeg.gif';
                }
                header('Location: ' . $url);
                break;
            case 'outside':
                $this->hits_handling('image',$id,true);
            case 'gdsimplepreview':
                $image = 'leeg.gif';
                $sql = "SELECT * FROM " . TOPLIST_TABLE . " WHERE id = '" . $id . "'";
                $result = $db->sql_query($sql);
                $dir = $phpbb_root_path . 'mods/toplist_mod/images/';
                $url = 'http://' . $this->phpbb_base_url . 'mods/toplist_mod/images/';
                if($result) {
                    $row = $db->sql_fetchrow($result);
                    if($mode=='gdsimplepreview') {
                        // Ok dangerous bit of code, we dont wanne have the same troubles like last time don't we?
                        // So lets strip all / : and .. from it so any attempt will utterly fail
                        $pimg = request_var('image', 'leeg.gif');
                        if(str_replace(array('sftp://','ftp://','http://','https://','..'),'',$pimg)!=$pimg) {
                            die();
                        }
                        $row['image'] = 'SimpleGD:' . $pimg;
                    }
                    //var_export($row);die();
                    if(substr($row['image'],0,9)=='SimpleGD:') {
                        if(!file_exists($phpbb_root_path . 'mods/toplist_mod/cache/rank_' . intval($id) . '_' . md5($row['image']) . '.png') || time()>(filemtime($phpbb_root_path . 'mods/toplist_mod/cache/rank_' . intval($id) . '_' . md5($row['image']) . '.png') + (60*60*6*$config['toplist_image_cache_days']))) {
                            $row['image'] = substr($row['image'],9,(strlen($row['image'])-9));
                            list($width, $height, $type, $attr) = getimagesize('images/' . $row['image']);
                            switch($type) {
                                case 1:
                                    if(function_exists('imagecreatefromgif')) {
                                        $img = imagecreatefromgif('images/' . $row['image']);
                                        if(!$img) {
                                            //header('Location:' . $url . $row['image']);
                                            exit(/*var_export(__LINE__)*/);
                                        }
                                    }
                                    else {
                                        //header('Location:' . $url . $row['image']);
                                        exit(/*var_export(__LINE__)*/);
                                    }
                                    break;
                                case 2:
                                    if(function_exists('imagecreatefromjpeg')) {
                                        $img = imagecreatefromjpeg('images/' . $row['image']);
                                        if(!$img) {
                                            //header('Location:' . $url . $row['image']);
                                            exit(/*var_export(__LINE__)*/);
                                        }
                                    }
                                    else {
                                        //header('Location:' . $url . $row['image']);
                                        exit(/*var_export(__LINE__)*/);
                                    }
                                    break;
                                case 3:
                                    if(function_exists('imagecreatefrompng')) {
                                        $img = imagecreatefrompng('images/' . $row['image']);
                                        if(!$img) {
                                            //header('Location:' . $url . $row['image']);
                                            exit(/*var_export(__LINE__)*/);
                                        }
                                    }
                                    else {
                                        //header('Location:' . $url . $row['image']);
                                        exit(/*var_export(__LINE__)*/);
                                    }
                                    break;
                                default:
                                //header('Location:' . $url . $row['image']);
                                    exit(/*var_export(__LINE__)*/);
                                    break;
                            }
                            if(function_exists('imagecreatetruecolor') && $type!=1) {
                                $bg = imagecreatetruecolor($width, $height + 15);
                            }
                            elseif(function_exists('imagecreate')) {
                                $bg = imagecreate($width, $height + 15);
                            }
                            else {
                                //header('Location:' . $url . $row['image']);
                                exit(/*var_export(__LINE__)*/);
                            }
                            if(function_exists('imagecolorallocate')) {
                                $red = imagecolorallocate($bg, 255, 0, 0);
                                $green = imagecolorallocate($bg, 0, 255, 0);
                                $blue = imagecolorallocate($bg, 0, 0, 255);
                                $white = imagecolorallocate($bg, 255, 255, 255);
                                $black = imagecolorallocate($bg, 0, 0, 0);
                            }
                            else {
                                //header('Location:' . $url . $row['image']);
                                exit(/*var_export(__LINE__)*/);
                            }
                            if(function_exists('imagefill')) {
                                imagefill($bg, 0, 0, $white);
                            }
                            else {
                                //header('Location:' . $url . $row['image']);
                                exit(/*var_export(__LINE__)*/);
                            }
                            if(function_exists('imagestring')) {
                                if(empty($text)) {
                                    if(!file_exists($phpbb_root_path . 'mods/toplist_mod/cache/rank_' . intval($id)) || time()>(filemtime($phpbb_root_path . 'mods/toplist_mod/cache/rank_' . intval($id)) + (60*60*24*$config['toplist_image_cache_days']))) {
                                        $i = 0;
                                        $rank_calc = array();
                                        if($config['toplist_enable_hits_in']) {
                                            $rank_calc[] = "SUM(
                                                                                        (t.in_hits * " . $config['toplist_in_hits_weight'] . ")
                                                                                )";
                                        }
                                        if($config['toplist_enable_hits_out']) {
                                            $rank_calc[] = "SUM(
                                                                                        (t.out_hits * " . $config['toplist_out_hits_weight'] . ")
                                                                                )";
                                        }
                                        if($config['toplist_enable_hits_img']) {
                                            $rank_calc[] = "SUM(
                                                                                        (t.image_hits * " . $config['toplist_img_hits_weight'] . ")
                                                                                )";
                                        }
                                        if($config['toplist_enable_ratings']) {
                                            $rank_calc[] = "SUM(
                                                                                        (rating * " . $config['toplist_rating_weight'] . ")
                                                                                )";
                                        }
                                        if($config['toplist_enable_pr']) {
                                            $rank_calc[] = "SUM(
                                                                                        (t.pr * " . $config['toplist_pr_weight'] . ")
                                                                                )";
                                        }
                                        if($config['toplist_enable_alexa']) {
                                            $rank_calc[] = "SUM(
                                                                                        (
                                                                                                (t.alexa - t.alexa - t.alexa)
                                                                                        * " . $config['toplist_alexa_weight'] . ")
                                                                                )";
                                        }
                                        $sql = "SELECT
                                                                        AVG(
                                                                                r.rating
                                                                        ) AS rating,
                                                                        t.*, " . ((count($rank_calc)>0) ? "(" . implode(' + ',$rank_calc) . ") AS total, " : '') . "
                                                                        u.user_id,
                                                                        u.username,
                                                                        u.user_colour
                                                                        FROM " . TOPLIST_TABLE . " t
                                                                        LEFT JOIN " . USERS_TABLE . " u ON (u.user_id=t.owner)
                                                                        LEFT JOIN " . TOPLIST_RATE_TABLE . " r ON (r.site_id=t.id)
                                                                        " . (($config['toplist_code_check'] && !$config['toplist_show_disabled'] && !$auth->acl_get('a_')) ? "WHERE (t.enabled = '1' OR (t.enabled = '0' AND t.owner = " . intval($user->data['user_id']) . ")) " : '') . "
                                                                        GROUP BY t.id
                                                                        ORDER BY t.enabled DESC, " . ((count($rank_calc)>0) ? " total DESC" : " t.id ASC");
                                        $result = $db->sql_query($sql);
                                        // Come one babe do the loop, spin around like crazy and make me go wild!
                                        while($row = $db->sql_fetchrow($result)) {
                                            $i++;
                                            if($row['id']==$id) {
                                                break;
                                            }
                                        }
                                        file_put_contents('cache/rank_' . intval($id),$i);
                                    }
                                    else {
                                        $i = intval(file_get_contents('cache/rank_' . intval($id)));
                                    }
                                    imagestring($bg, 2, 1, $height + 1, "Rank #" . $i, $red);
                                }
                                else {
                                    imagestring($bg, 2, 1, $height + 1, $text, $red);
                                }
                            }
                            else {
                                //header('Location:' . $url . $row['image']);
                                exit(/*var_export(__LINE__)*/);
                            }
                            if(function_exists('imagecopy')) {
                                imagecopy($bg, $img, 0, 0, 0, 0, $width, $height);
                            }
                            else {
                                //header('Location:' . $url . $row['image']);
                                exit(/*var_export(__LINE__)*/);
                            }
                            if(function_exists('imagepng') && function_exists('imagedestroy')) {
                                header('Content-Type: image/png');
                                imagepng($bg,$phpbb_root_path . 'mods/toplist_mod/cache/rank_' . intval($id) . '_' . md5($row['image']) . '.png');
                                imagedestroy($bg);
                                $image = $phpbb_root_path . 'toplist_mod/cache/rank_' . intval($id) . '_' . md5($row['image']) . '.png';
                                //exit;//(var_export(__LINE__));
                            }
                            else {
                                //header('Location:' . $url . $row['image']);
                                exit(/*var_export(__LINE__)*/);
                            }
                        }
                        else {
                            $image = $phpbb_root_path . 'toplist_mod/cache/rank_' . intval($id) . '_' . md5($row['image']) . '.png';
                        }
                    }
                    elseif(substr($row['image'],0,11)=='AdvancedGD:') {
                        // Not yet implented so highly unlikely :P
                    }
                    else {
                        $image = $row['image'];
                    }
                }
                header('Location: ' . $url . $image);
                exit(/*var_export(__LINE__)*/);
                break;
            case 'raw':
                $uniqid = request_var('uniqid', '');
                $hash = request_var('hash', '');
                $uniqid = rawurldecode($uniqid);
                /*if(!$this->_validate_hash($id,$hash,$uniqid))
				{
					header('Location: leeg.gif');
					exit(/ *var_export(__LINE__)* /);
				}
				else
				{*/
                $sql = "SELECT site_url FROM " . TOPLIST_TABLE . " WHERE id = '" . $id . "'";
                $result = $db->sql_query($sql);
                $row = $db->sql_fetchrow($result);
                $url = str_replace('http://','',$row['site_url']);
                $url = str_replace('https://','',$url);
                $url = explode('/',$url);
                for($i=0;$i<count($url);$i++) {
                    if(empty($url[$i])) {
                        unset($url[$i]);
                    }
                }
                list($data,$type) = $cache->read('toplist_mod_whois.sc_thumbnails_' . $url[0],true);
                header("Content-type: " . $type);
                exit($data);
                //}
                break;
        }
    }

    function hits_handling($type,$id) {
        global $db,$template,$user,$phpbb_root_path,$phpEx,$cache,$user,$config;
        $uniqid = request_var('uniqid', '');
        $hash = request_var('hash', '');
        $uniqid = rawurldecode($uniqid);
        switch($type) {
            case 'in':
                if($config['toplist_enable_hits_in']) {
                    if($this->_validate_hash($id,$hash,$uniqid,true)) {
                        $sqlx = "DELETE FROM " . TOPLIST_HASH_TABLE . " WHERE site_id = '" . $id . "' AND hash = '" . $hash . "'";
                        //$result = $db->sql_query($sqlx);
                        $sql = "SELECT site_url, owner FROM " . TOPLIST_TABLE . " WHERE id = '" . $id . "'";
                        $result = $db->sql_query($sql);
                        $row = $db->sql_fetchrow($result);
                        if($this->_anti_flood('in',$id)) {
                            $sql = "UPDATE " . TOPLIST_TABLE . " SET in_hits = in_hits + 1 WHERE id = '" . $id . "'";
                            $result = $db->sql_query($sql);
                            if($user->data['is_registered'] && $config['toplist_points_enable'] && $config['toplist_points_per_in_hit_visitor']>0) {
                                $this->add_points($user->data['user_id'],$config['toplist_points_per_in_hit_visitor']);
                            }
                            if($config['toplist_points_enable'] && $config['toplist_points_per_in_hit_owner']>0) {
                                $this->add_points($row['owner'],$config['toplist_points_per_in_hit_owner']);
                            }
                            /*if($config['toplist_enable_cache'] && $config['toplist_enable_cache_clear'])
                            {
                                $cache->destroy('sql',TOPLIST_TABLE);
                            }*/
                        }
                    }
                }
                header('Location: ' . $phpbb_root_path . 'toplist.' . $phpEx);
                exit(/*var_export(__LINE__)*/);
                break;
            case 'out':
            /*if($this->_validate_hash($id,$hash,$uniqid,true))
				{
					$die_code = '<html><body><script>';
					$die_code .= "\r\nwindow.close();\r\n";
					$die_code .= '</script></body></html>';
					die($die_code);
				}
				$sql = "DELETE FROM " . TOPLIST_HASH_TABLE . " WHERE site_id = '" . $id . "' AND hash = '" . $hash . "'";
				$result = $db->sql_query($sqlx);*/
                $sql = "SELECT site_url, site_name, owner FROM " . TOPLIST_TABLE . " WHERE id = '" . $id . "'";
                $result = $db->sql_query($sql);
                $row = $db->sql_fetchrow($result);
                if($config['toplist_enable_hits_out'] && $this->_anti_flood('out',$id)) {
                    $sql = "UPDATE " . TOPLIST_TABLE . " SET out_hits = out_hits + 1 WHERE id = '" . $id . "'";
                    $result = $db->sql_query($sql);
                    if($user->data['is_registered'] && $config['toplist_points_enable'] && $config['toplist_points_per_out_hit_visitor']>0) {
                        $this->add_points($user->data['user_id'],$config['toplist_points_per_out_hit_visitor']);
                    }
                    if($config['toplist_points_enable'] && $config['toplist_points_per_out_hit_owner']>0) {
                        $this->add_points($row['owner'],$config['toplist_points_per_out_hit_owner']);
                    }
                    /*if($config['toplist_enable_cache'] && $config['toplist_enable_cache_clear'])
                    {
                        $cache->destroy('sql',TOPLIST_TABLE);
                    }*/
                }
                //header('Location: ' . $row['site_url']);
                die("<html><head><title>" . $row['site_name'] . "</title>
    <meta http-equiv=\"refresh\" content=\"1;url=" . $this->_fix_url($row['site_url']) . "\"></head><body><center>You'll be redirected to <a href=\"" . $row['site_url'] . "\">" . $row['site_name'] . "</a> in a few secconds.</center></body></html>");
                exit(/*var_export(__LINE__)*/);
                break;
            case 'image':
                if($config['toplist_enable_hits_img']) {
                    $sql = "DELETE FROM " . TOPLIST_HASH_TABLE . " WHERE site_id = '" . $id . "' AND hash = '" . $hash . "'";
                    //$result = $db->sql_query($sql);
                    $sql = "SELECT site_url, owner FROM " . TOPLIST_TABLE . " WHERE id = '" . $id . "'";
                    $result = $db->sql_query($sql);
                    $row = $db->sql_fetchrow($result);
                    if($this->_anti_flood('img',$id)) {
                        $sql = "UPDATE " . TOPLIST_TABLE . " SET image_hits = image_hits + 1 WHERE id = '" . $id . "'";
                        $result = $db->sql_query($sql);
                        if($user->data['is_registered'] && $config['toplist_points_enable'] && $config['toplist_points_per_img_hit_visitor']>0) {
                            $this->add_points($user->data['user_id'],$config['toplist_points_per_img_hit_visitor']);
                        }
                        if($config['toplist_points_enable'] && $config['toplist_points_per_img_hit_owner']>0) {
                            $this->add_points($row['owner'],$config['toplist_points_per_img_hit_owner']);
                        }
                        /*if($config['toplist_enable_cache'] && $config['toplist_enable_cache_clear'])
                        {
                            $cache->destroy('sql',TOPLIST_TABLE);
                        }*/
                    }
                }
                break;
        }
    }
    // The redone anti-flood function
    function _anti_flood($type,$id) {
        global $db,$template,$user,$_COOKIE,$cookietime,$config,$user;
        if($config['toplist_antiflood_time']==0) {
            return true;
        }
        $ip = $user->data['session_ip'];
        $cookiename = $config['cookie_name'] . '_tl_af_' . $type . '_' . $id;
        $exptime = (time() + intval($config['toplist_antiflood_time']));
        if(!isset($_COOKIE[$cookiename])) {
            $sql = "DELETE FROM " . TOPLIST_FLOOD_CONTROL_TABLE . " WHERE time < '" . time() . "'";
            $result = $db->sql_query($sql);
            if($result) {
                $sql = "SELECT COUNT(id) AS count FROM " . TOPLIST_FLOOD_CONTROL_TABLE . " WHERE id = '" . $id . "' AND ip = '" . $ip . "' AND type = '" . $type . "'";
                $result = $db->sql_query($sql);
                $row = $db->sql_fetchrow($result);
                if($row['count']==0) {
                    $cookiedata = 'busted';
                    $name_data = rawurlencode($cookiename) . '=' . rawurlencode($cookiedata);
                    $expire = gmdate('D, d-M-Y H:i:s \\G\\M\\T', $cookietime);
                    $domain = (!isset($config['cookie_domain']) || isset($config['cookie_domain']) == 'localhost' || isset($config['cookie_domain']) == '127.0.0.1') ? '' : '; domain=' . isset($config['cookie_domain']);
                    $cookie = 'Set-Cookie: ' . $name_data . (($cookietime) ? '; expires=' . $expire : '') . '; path=' . isset($config['cookie_path']) . $domain . ((!isset($config['cookie_secure'])) ? '' : '; secure') . '; HttpOnly';
                    header($cookie, false);
                    $sql = "INSERT INTO " . TOPLIST_FLOOD_CONTROL_TABLE . " (id,ip,time,type) VALUES ('" . $id . "','" . $ip . "'," . $exptime . ",'" . $type . "')";
                    $result = $db->sql_query($sql);
                    if($result) {
                        return true;
                    }
                    else {
                        return false;
                    }
                }
                else {
                    return false;
                }
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }
    }
    function _get_whois_sc_image($url,$id) {
        global $db,$template,$user,$phpbb_root_path,$config;
        // Ok it looks a bit wierd but incase the fetch fails and we allready have the image we can just display it normaly. Otherwise we send a fail code (0) and a default 1x1 transparent gif image :).
        $result = array();
        $result['code'] = 0;
        $result['url'] = $phpbb_root_path . 'mods/toplist_mod/leeg.gif';
        if($config['toplist_enable_sitethumbs']) {
            if(file_exists($phpbb_root_path . 'mods/toplist_mod/cache/thumb_' . intval($id) . '.jpg')) {
                $result['url'] = $phpbb_root_path . 'mods/toplist_mod/cache/thumb_' . intval($id) . '.jpg';
            }
            /*if(defined('DEBUG'))
            {
                var_export(time());
                echo("\r\n");
                var_export(filemtime($phpbb_root_path . 'mods/toplist_mod/cache/thumb_' . intval($id) . '.jpg'));
                echo("\r\n");
                var_export((filemtime($phpbb_root_path . 'mods/toplist_mod/cache/thumb_' . intval($id) . '.jpg') + (60*60*24*$config['toplist_image_cache_days'])));
                echo("\r\n");
                echo("\r\n");
                echo("\r\n");
                echo("\r\n");
            }*/
            if(!file_exists($phpbb_root_path . 'mods/toplist_mod/cache/thumb_' . intval($id) . '.jpg') || time()>(filemtime($phpbb_root_path . 'mods/toplist_mod/cache/thumb_' . intval($id) . '.jpg') + (60*60*24*$config['toplist_image_cache_days']))) {
                if($cache_data = $this->get_url("http://open.thumbshots.org/image.aspx?url=" . rawurlencode($url))) {
                    if(file_put_contents($phpbb_root_path . 'mods/toplist_mod/cache/thumb_' . intval($id) . '.jpg',$cache_data)) {
                        $result['code'] = 1;
                        $result['url'] = $phpbb_root_path . 'mods/toplist_mod/cache/thumb_' . intval($id) . '.jpg';
                    }
                }
            }
            else {
                $result['code'] = 1;
                $result['url'] = $phpbb_root_path . 'mods/toplist_mod/cache/thumb_' . intval($id) . '.jpg';
            }
        }
        return $result;
    }
    /*
	 *  The hash handling functions, these functions are optimized to run as few queries on the database as possible to keep the load as low as possible.
    */
    function _gen_hash($id,$type,$number = 1) {
        return $array = array('hash' => '','uniqid' =>'');
        global $db,$template,$user;
        if(count($this->_hash_storage)>0) {
            $return = $this->_hash_storage[count($this->_hash_storage) - 1];
            unset($this->_hash_storage[count($this->_hash_storage) - 1]);
            return $return;
        }
        else {
            if($number==1) {
                $hash = md5(uniqid(time()) . uniqid($id) . uniqid(mt_rand()) . $type);
                $array = array('hash' => $hash,'uniqid' => rawurlencode(uniqid(time() * $id * M_PI,true)));
                $this->_hash_sql[] = "('" . $id . "','" . $type . "','" . time() . "','" . $array['hash'] . "','" . $array['uniqid'] . "')";
            }
            else {
                for($i=0;$i<$number;$i++) {
                    $hash = md5(uniqid(time()) . uniqid($id) . uniqid(mt_rand()) . $type);
                    $array = array('hash' => $hash,'uniqid' => rawurlencode(uniqid(time() * $id * M_PI,true)));
                    $this->_hash_sql[] = "('" . $id . "','" . $type . "','" . time() . "','" . $array['hash'] . "','" . $array['uniqid'] . "')";
                    $this->_hash_storage[] = $array;
                }
                unset($this->_hash_storage[count($this->_hash_storage) - 1]);
            }
            return $array;
        }
    }

    function _clean_hash_table() {
        global $db,$template,$user;
        $sql = "DELETE FROM " . TOPLIST_HASH_TABLE . " WHERE time < '" . (time() - 300) . "'";
        $db->sql_query($sql);
    }
    // Validate a hash and remove it right away after checking for it so it can't be reused.
    function _validate_hash($id,$hash,$uniqid,$reverse = false) {
        return true;
        global $db,$template,$user;
        $sql = "SELECT * FROM " . TOPLIST_HASH_TABLE . " WHERE site_id = '" . $id . "' AND hash = '" . $hash . "' AND uniqid = '" . $uniqid . "'";
        $result = $db->sql_query($sql);
        $row = $db->sql_fetchrow($result);
        $sql = "DELETE FROM " . TOPLIST_HASH_TABLE . " WHERE site_id = '" . $id . "' AND hash = '" . $hash . "' AND uniqid = '" . $uniqid . "'";
        $result = $db->sql_query($sql);
        if($reverse) {
            if($row['hash']!=$hash || md5($row['uniqid'])!=md5($uniqid) || md5($row['hash'] . $row['uniqid'])!=md5($hash . $uniqid)) {
                return true;
            }
            else {
                return false;
            }
        }
        else {
            if($row['hash']==$hash && md5($row['uniqid'])==md5($uniqid) && md5($row['hash'] . $row['uniqid'])==md5($hash . $uniqid)) {
                return true;
            }
            else {
                return false;
            }
        }
    }

    function _add_hash_to_table() {
        return false;
        if(count($this->_hash_sql)>0) {
            global $db;
            $sql = "INSERT INTO " . TOPLIST_HASH_TABLE . " (site_id,type,time,hash,uniqid) VALUES ";
            $sql .= implode(', ',$this->_hash_sql);
            //$result = $db->sql_query($sql);
        }
    }
    /*
	 *  End of the hash functions.
    */
    function _get_html_code($id,$adv = false) {
        global $db,$template,$user;
        $text = '';
        $urls = $this->_get_html_code_urls($id);
        if($adv) {
            $text .= '<script type="tex/javascript" src="' . $urls['adv'] . '"></script>';
        }
        else {
            $text .= '<a href="' . $urls['link'] . '">' . "\r\n";
            $text .= '<img src="' . $urls['img'] . '" style="border:0px;" />' . "\r\n";
            $text .= '</a>';
        }
        return $text;
    }

    function _get_html_code_urls($id) {
        global $db,$template,$user;
        $site_root = 'http://' . $this->phpbb_base_url;
        $return = array();
        $return['adv'] = $site_root . 'mods/toplist_mod/js.php?id=' . $id;
        $return['link'] = $site_root . 'mods/toplist_mod/dload.php?id=' . $id;
        $return['img'] = $site_root . 'mods/toplist_mod/image.php?id=' . $id;
        return $return;
    }

    function cron() {
        global $db,$config,$auth,$phpEx,$phpbb_root_path;
        set_config('toplist_last_gc', time(), true);
        if($this->lockcron('toplist_cron_lock')) {
            return false;
        }
        if($config['toplist_update_check'] && $config['toplist_update_check_next']<time()) {
            set_config('toplist_update_check_next', time() + 86400, true);
            $info = $this->get_url('http://forums.wyrihaximus.net/modsupdate.php?mod=toplist');
            if (!($info === false)) {
                $info = explode("\n", $info);
                $latest_version = trim($info[0]);
                $announcement_url = trim($info[1]);
                $security_update = trim($info[2]);
                $current_version = $this->get_version();
                if($current_version!=$latest_version) {
                    if((intval($security_update)==1 || $config['toplist_update_check_security']) && !$config['toplist_update_check_mail']) {
                        include_once($phpbb_root_path . 'includes/functions_user.' . $phpEx);
                        $user_ary = $auth->acl_get_list(false, array('a_'), false);
                        $admin_id_ary = $forum_id_ary = array();
                        foreach ($user_ary as $forum_id => $forum_ary) {
                            foreach ($forum_ary as $auth_option => $id_ary) {
                                if (!$forum_id) {
                                    if ($auth_option == 'a_') {
                                        $admin_id_ary = array_merge($admin_id_ary, $id_ary);
                                    }
                                    continue;
                                }

                                if ($forum_id) {
                                    foreach ($id_ary as $id) {
                                        $forum_id_ary[$id][] = $forum_id;
                                    }
                                }
                            }
                        }

                        $admin_id_ary = array_unique($admin_id_ary);

                        // Admin group id...
                        $sql = 'SELECT group_id
                                FROM ' . GROUPS_TABLE . "
                                WHERE group_name = 'ADMINISTRATORS'";
                        $result = $db->sql_query($sql);
                        $admin_group_id = (int) $db->sql_fetchfield('group_id');
                        $db->sql_freeresult($result);

                        // Get group memberships for the admin id ary...
                        $admin_memberships = group_memberships($admin_group_id, $admin_id_ary);

                        $admin_user_ids = array();

                        if (!empty($admin_memberships)) {
                            // ok, we only need the user ids...
                            foreach ($admin_memberships as $row) {
                                $admin_user_ids[$row['user_id']] = $row['user_id'];
                            }
                        }
                        unset($admin_memberships);
                        $sql = $db->sql_build_query('SELECT',
                                array(
                                'SELECT'   => 'u.user_notify_type, u.user_email, u.user_jabber, u.username, u.user_lang',
                                'FROM'      => array(
                                        USERS_TABLE   => 'u',
                                ),
                                'WHERE' => ' u.user_id IN(' . implode(',',$admin_user_ids) . ')'
                                )
                        );
                        $result = $db->sql_query($sql);
                        while($row = $db->sql_fetchrow($result)) {
                            if(intval($security_update)==1) {
                                $this->send_notify($row,'toplist_security_update',array('FORUM_NAME' => $config['sitename'], 'USERNAME' => $row['username'], 'VERSION' => $latest_version, 'UPDATE_URL' => $announcement_url));
                            } else {
                                $this->send_notify($row,'toplist_update',array('FORUM_NAME' => $config['sitename'], 'USERNAME' => $row['username'], 'VERSION' => $latest_version, 'UPDATE_URL' => $announcement_url));
                            }
                        }
                        set_config('toplist_update_check_mail', 1, true);
                    }
                }
            }
        }
        $last_id = $config['toplist_last_id'];
        $sites = $runlist = array();
        $prev = -1;
        $curr = -1;
        $first = -1;
        $sql = "SELECT id, site_url FROM " . TOPLIST_TABLE . " ORDER BY id";
        $result = $db->sql_query($sql);
        while($row = $db->sql_fetchrow($result)) {
            if(empty($last_id)) {
                $last_id = $row['id'];
            }
            $sites[] = $row;
            $urls[$row['id']] = $this->_fix_url($row['site_url']);
        }
        for($i=0;$i<count($sites);$i++) {
            if($first==-1) {
                $first = $sites[$i]['id'];
            }
            $runlist[$prev] = $sites[$i]['id'];
            $prev = $sites[$i]['id'];
        }
        $runlist[$prev] = $first;
        $torun = $runlist[$last_id];
        set_config('toplist_last_id', $torun, true);
        $pr = $this->googleRank($urls[$torun]);
        if($pr) {
            $sql = "UPDATE " . TOPLIST_TABLE . " SET pr = " . intval($pr) . " WHERE id = " . $torun;
            $result = $db->sql_query($sql);
        }
        $alexa = $this->alexaRank($urls[$torun]);
        if($alexa) {
            $sql = "UPDATE " . TOPLIST_TABLE . " SET alexa = " . intval($alexa) . " WHERE id = " . $torun;
            $result = $db->sql_query($sql);
        }
        if($config['toplist_code_check']) {
            $this->_check_code_site($torun,$urls[$torun]);
        }
        $this->_check_banner($torun);
        /*
        if($config['toplist_enable_cache') && $config['toplist_enable_cache_clear'))
        {
            $cache->destroy('sql',TOPLIST_TABLE);
        }
        */
        $this->unlockcron('toplist_cron_lock');
    }

    function siteofthemoment() {
        global $db,$config,$template,$phpbb_root_path,$phpEx,$user;
        $w = 'out';
        $id = intval($config['toplist_site_of_the_moment_id']);
        if(!$id || time()>($config['toplist_site_of_the_moment_length'] + $config['toplist_site_of_the_moment_change_time'])) {
            if(defined('DEBUG')) {
                echo("1<br />\r\n");
                echo(time() . "<br />\r\n");
                echo(($config['toplist_site_of_the_moment_length'] + $config['toplist_site_of_the_moment_change_time']) . "<br />\r\n");
            }
            $this->_set_new_site_of_the_moment();
            $id = intval($config['toplist_site_of_the_moment_id']);
        }
        if($id) {
            $sql = "SELECT AVG(r.rating) AS rating, t.*, u.user_id, u.username
            , u.user_colour
            FROM " . TOPLIST_TABLE . " t LEFT JOIN " . USERS_TABLE . " u ON (u.user_id=t.owner) LEFT JOIN " . TOPLIST_RATE_TABLE . " r ON (r.site_id=t.id) WHERE t.enabled = '1' AND t.id = '" . $id . "' GROUP BY t.id";
            $result = $db->sql_query($sql);
            $row = $db->sql_fetchrow($result);
            if(!$row) {
                $this->_set_new_site_of_the_moment();
                $id = intval($config['toplist_site_of_the_moment_id']);
                if(defined('DEBUG')) {
                    echo("2<br />\r\n");
                }
                $sql = "SELECT AVG(r.rating) AS rating, t.*, u.user_id, u.username
                , u.user_colour
                FROM " . TOPLIST_TABLE . " t LEFT JOIN " . USERS_TABLE . " u ON (u.user_id=t.owner) LEFT JOIN " . TOPLIST_RATE_TABLE . " r ON (r.site_id=t.id) WHERE t.enabled = '1' AND t.id = '" . $id . "' GROUP BY t.id";
                $result = $db->sql_query($sql);
                $row = $db->sql_fetchrow($result);
            }
            $whois_sc = $this->_get_whois_sc_image($row['site_url'],$row['id']);
            if($whois_sc['code']==1) {
                $template->assign_block_vars('site_of_the_moment_whois_sc',array(
                        'WHOIS_SC_IMAGE' => $whois_sc['url'])
                );
            }
            unset($whois_sc);
            $hash = $this->_gen_hash($id,$w);
            $url = 'mods/toplist_mod/go.' . $phpEx . '?id=' . $id . '&mode=out&uniqid=' . $hash['uniqid'] . '&hash=' . $hash['hash'];
            $url_seo = $row['site_url'];
            if($config['toplist_enable_ratings']) {
                $row['rating'] = round($row['rating']);
                if(is_null($row['rating'])) {
                    $row['rating'] = array();
                    $row['rating']['nnr'] = '0.gif';
                    $row['rating']['is_rated'] = false;
                }
                else {
                    $row['rating'] = array('nr' => round($row['rating']));
                    $row['rating']['text'] = '';
                    $row['rating']['nnr'] = $row['rating']['nr'] . '.gif';
                    $row['rating']['is_rated'] = true;
                }
                if($user->data['is_registered']) {
                    $row['rating']['can_rate'] = true;
                }
                else {
                    $row['rating']['can_rate'] = false;
                }
                $row['rating']['hash'] = $this->_gen_hash($row['id'],'image');
            }
            else {
                unset($row['rating']);
                $row['rating'] = array();
                $row['rating']['is_rated'] = false;
                $row['rating']['can_rate'] = false;
                $row['rating']['nnr'] = '0.gif';
                $row['rating']['text'] = '';
            }
            if($config['toplist_enable_ratings']) {
                if($row['rating']['can_rate']) {
                    $template->assign_vars(array(
                            'RATING_ENABLED' => true)
                    );
                    $template->assign_block_vars('canrate',array(
                            'RATE_ACTION' => append_sid($phpbb_root_path . 'toplist.' . $phpEx . '?mode=rate&amp;hash=' . $row['rating']['hash']['hash'] . '&amp;uniqid=' . $row['rating']['hash']['uniqid'] . '&amp;w=out'),
                            'ID' => $row['id'])
                    );
                }
            }
            $hash = $this->_gen_hash($row['id'],'image');
            $template->assign_vars(array(
                    'SITE_OF_THE_MOMENT_SITE_BANNER' => $phpbb_root_path . 'mods/toplist_mod/image.' . $phpEx . '?mode=inside&amp;id=' . $row['id'] . '&amp;hash=' . $hash['hash'] . '&amp;uniqid=' . $hash['uniqid'],
                    'SITE_OF_THE_MOMENT_SITE_NAME' => $row['site_name'],
                    'SITE_OF_THE_MOMENT_SITE_INFO' => $row['site_info'],
                    'SITE_OF_THE_MOMENT_ID' => $row['id'],
                    'SITE_OF_THE_MOMENT_RATING' => $row['rating']['nnr'],
                    'SITE_OF_THE_MOMENT_U_URL' => append_sid($url),
                    'SITE_OF_THE_MOMENT_U_URL_SEO' => $this->_fix_url($url_seo),
                    'SITE_OF_THE_MOMENT_U_TOPLIST_HOME' => append_sid($phpbb_root_path . 'toplist.' . $phpEx ),
                    'SITE_OF_THE_MOMENT_ID' => $row['id'],
                    'SITE_OF_THE_MOMENT' => ($config['toplist_site_of_the_moment'] && $id) ? true : false)
            );
        }
    }

    function _check_code_site($torun,$url) {
        global $db,$config;
        $html = $this->get_url($url);
        if($html) {
            $html = str_replace(':80','',$html);
            $code_urls = $this->_get_html_code_urls($torun);
            $code = $this->_get_html_code($torun);
            $code_adv = $this->_get_html_code($torun,true);
            $checks = array_merge(array($code,$code_adv),$code_urls);
            unset($code_urls,$code,$code_adv);
            $result = 0;
            // First we check the normal way
            foreach($checks as $i => $value) {
                $htmlnocode = str_replace($value,'',$html);
                if($htmlnocode!=$html) {
                    $result = 1;
                    break;
                }
            }
            // Check if there is a frame redirector active
            if($result==0) {
                if(str_replace('<frame','',$html)!=$html || str_replace('<iframe','',$html)!=$html) {
                    if(str_replace('<frame','',$html)!=$html) {
                        $ex = explode('<frame src="',$html);
                        for($i=1;$i<count($ex);$i++) {
                            if(isset($ex[$i])) {
                                $ex2 = explode('"',$ex[$i]);
                                if(@parse_url($ex2[0])) {
                                    $html2 = $this->get_url($ex2[0]);
                                    foreach($checks as $void => $value) {
                                        $htmlnocode = str_replace($value,'',$html2);
                                        if($htmlnocode!=$html2) {
                                            $result = 1;
                                            break 2;
                                        }
                                    }
                                }
                            }
                        }
                    }
                    if($result==0 && str_replace('<iframe','',$html)!=$html) {
                        $ex = explode('<iframe src="',$html);
                        for($i=1;$i<count($ex);$i++) {
                            if(isset($ex[$i])) {
                                $ex2 = explode('"',$ex[$i]);
                                if(@parse_url($ex2[0])) {
                                    $html2 = $this->get_url($ex2[0]);
                                    foreach($checks as $void => $value) {
                                        $htmlnocode = str_replace($value,'',$html2);
                                        if($htmlnocode!=$html2) {
                                            $result = 1;
                                            break 2;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $sql = "UPDATE " . TOPLIST_TABLE . " SET enabled = " . $result . " WHERE id = " . $torun;
            $result = $db->sql_query($sql);
            if($config['toplist_site_of_the_moment_id']==$torun && !$result) {
                $this->_set_new_site_of_the_moment();
            }
        }
    }

    function _check_banner($id) {
        global $db, $config;
        $sql = "SELECT * FROM " . TOPLIST_TABLE . " WHERE id = " . intval($id);
        $result = $db->sql_query($sql);
        $row = $db->sql_fetchrow($result);
        if(!empty($row['site_banner'])) {
            $data = @getimagesize($row['site_banner']);
            if($data) {
                $width = $data[0];
                $height = $data[1];
                if($width>$config['toplist_banner_width'] || $height>$config['toplist_banner_height']) {
                    $sql = "UPDATE " . TOPLIST_TABLE . " SET show_banner = 0 WHERE id = " . $id;
                    $result = $db->sql_query($sql);
                    return false;
                }
                else {
                    $sql = "UPDATE " . TOPLIST_TABLE . " SET show_banner = 1 WHERE id = " . $id;
                    $result = $db->sql_query($sql);
                    return true;
                }
            }
        }
        return false;
    }

    function _set_new_site_of_the_moment() {
        if(defined('DEBUG')) {
            echo("siteofthemoment<br />\r\n");
        }
        global $db, $config;
        $id = intval($config['toplist_site_of_the_moment_id']);
        set_config('toplist_site_of_the_moment_previous_id', $id, true);
        set_config('toplist_site_of_the_moment_change_time', time(), true);
        $sites = array();
        $sql = "SELECT id FROM " . TOPLIST_TABLE . " WHERE enabled = 1 AND id != " . $id;
        $result = $db->sql_query($sql);
        while($row = $db->sql_fetchrow($result)) {
            $sites[] = $row['id'];
        }
        if(count($sites)==0) {
            $id = false;
        }
        else {
            if(count($sites)==1) {
                $id = $sites[0];
            }
            else {
                // Dangerious loop so we build in a max of 50 rounds
                $xxx = 0;
                while(true) {
                    $xxx++;
                    $tmp_id = $sites[mt_rand(0,(count($sites)-1))];
                    if($tmp_id!=$id || $xxx>50) {
                        $id = $tmp_id;
                        break;
                    }
                }
            }
        }

        set_config('toplist_site_of_the_moment_id', $id, true);
    }

    function _fix_url($url) {
        return 'http://' . str_replace('http://','',$url);
    }

    /**
     * Code block taken from: http://www.searchengineengine.com/files/pagerank-code.txt
     **/

    function zeroFill($a, $b) {
        $z = hexdec(80000000);
        if ($z & $a) {
            $a = ($a>>1);
            $a &= (~$z);
            $a |= 0x40000000;
            $a = ($a>>($b-1));
        }
        else {
            $a = ($a>>$b);
        }
        return $a;
    }

    function mix($a, $b, $c) {		//This function is used in the Google Checksum calculation
        $a -= $b;
        $a -= $c;
        $a ^= ($this->zeroFill($c,13));
        $b -= $c;
        $b -= $a;
        $b ^= ($a<<8);
        $c -= $a;
        $c -= $b;
        $c ^= ($this->zeroFill($b,13));
        $a -= $b;
        $a -= $c;
        $a ^= ($this->zeroFill($c,12));
        $b -= $c;
        $b -= $a;
        $b ^= ($a<<16);
        $c -= $a;
        $c -= $b;
        $c ^= ($this->zeroFill($b,5));
        $a -= $b;
        $a -= $c;
        $a ^= ($this->zeroFill($c,3));
        $b -= $c;
        $b -= $a;
        $b ^= ($a<<10);
        $c -= $a;
        $c -= $b;
        $c ^= ($this->zeroFill($b,15));
        return array($a,$b,$c);
    }

    function GoogleCH($url, $length=null, $init=GOOGLE_MAGIC) {		//Calculate the Google Checksum for a given URL
        if(is_null($length)) {
            $length = sizeof($url);
        }
        $a = $b = 0x9E3779B9;
        $c = $init;
        $k = 0;
        $len = $length;
        while($len >= 12) {
            $a += ($url[$k+0] +($url[$k+1]<<8) +($url[$k+2]<<16) +($url[$k+3]<<24));
            $b += ($url[$k+4] +($url[$k+5]<<8) +($url[$k+6]<<16) +($url[$k+7]<<24));
            $c += ($url[$k+8] +($url[$k+9]<<8) +($url[$k+10]<<16)+($url[$k+11]<<24));
            $mix = $this->mix($a,$b,$c);
            $a = $mix[0];
            $b = $mix[1];
            $c = $mix[2];
            $k += 12;
            $len -= 12;
        }
        $c += $length;
        switch($len)			/* all the case statements fall through */ {
            case 11: $c+=($url[$k+10]<<24);
            case 10: $c+=($url[$k+9]<<16);
            case 9 : $c+=($url[$k+8]<<8);
            /* the first byte of c is reserved for the length */
            case 8 : $b+=($url[$k+7]<<24);
            case 7 : $b+=($url[$k+6]<<16);
            case 6 : $b+=($url[$k+5]<<8);
            case 5 : $b+=($url[$k+4]);
            case 4 : $a+=($url[$k+3]<<24);
            case 3 : $a+=($url[$k+2]<<16);
            case 2 : $a+=($url[$k+1]<<8);
            case 1 : $a+=($url[$k+0]);
            /* case 0: nothing left to add */
        }
        $mix = $this->mix($a,$b,$c);
        return $mix[2];
    }

    function strord($string) {		//converts a string into an array of integers containing the numeric value of the char
        for($i=0;$i<strlen($string);$i++) {
            $result[$i] = ord($string{$i});
        }
        return $result;
    }

    function googleRank($url, $prefix="info:", $datacenter="www.google.com") {				//This is the function used to get the PageRank value.
        //If $prefix is "info:", then the Toolbar pagerank will be returned.
        //$datacenter sets the datacenter to get the results from. e.g., "www.google.com", "216.239.53.99", "66.102.11.99".
        $url = parse_url($url,PHP_URL_HOST);
        $url = $prefix.$url;
        $ch = $this->GoogleCH($this->strord($url));		//Get the Google checksum for $url using the GoogleCH function.
        $file = "http://$datacenter/search?client=navclient-auto&ch=6$ch&features=Rank&q=$url";
        //To get the Crawl Date instead of the PageRank, change "&features=Rank" to "&features=Crawldate"
        //To get detailed XML results, remove "&features=Rank"
        $oldlevel = error_reporting(0);		//Suppress error reporting temporarily.
        $data = $this->get_url($file);
        error_reporting($oldlevel);			//Restart error reporting.
        if(!$data || preg_match("/(.*)\.(.*)/i", $url)==0) return false;			//If the Google data is unavailable, or the URL is invalid, return "N/A".
        //The preg_match check is a very basic url validator that only checks if the URL has a period in it.
        $rankarray = explode (":", $data);		//There are two line breaks before the PageRank data on the Google page.
        $rank = trim($rankarray[2]);		//Trim whitespace and line breaks.
        if($rank=="") return false;			//Return N/A if no rank.
        return $rank;
    }

    /**
     * Alexa rank fetch code: http://www.webdigity.com/?action=tutorial;code=49
     **/

    function alexaRank($domain) {
        $ret = '';
        $curl_ret = $this->get_url('http://alexa.com/data/details/traffic_details?url='.$domain);
        $curl_ret = explode('Visit http://aws.amazon.com/awis for more information about the Alexa Web Information Service.-->', $curl_ret);
        if(isset($curl_ret[1])) {
            $curl_ret = array_shift(explode('<br',$curl_ret[1]));
            $ignore = false;
            for($i=0;$i<strlen($curl_ret);$i++) {
                if(isset($curl_ret{$i}) && is_numeric($curl_ret{$i}) && !$ignore) {
                    $ret .= $curl_ret{$i};
                }
                elseif(isset($curl_ret{$i}) && $curl_ret{$i}=='<') {
                    $ignore = true;
                }
                elseif(isset($curl_ret{$i}) && $curl_ret{$i}=='>') {
                    $ignore = false;
                }
            }
        }
        return (int)$ret;
    }

}