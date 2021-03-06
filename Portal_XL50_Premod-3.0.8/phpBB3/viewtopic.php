<?php
/**
*
* @package phpBB3
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
include($phpbb_root_path . 'includes/bbcode.' . $phpEx);
// -- Gender MOD 1.0.1
include($phpbb_root_path . 'includes/functions_genders.' . $phpEx);
// -- Gender MOD 1.0.1
// -- Calendar MOD
include($phpbb_root_path . 'includes/functions_calendar.' . $phpEx);
// -- Calendar MOD

// -- Thank post MOD
if ($portal_config['portal_show_thanks'] == true)
{
  include($phpbb_root_path . 'portal/portal_thanks.' . $phpEx);
}
// -- Thank post MOD

// www.phpBB-SEO.com SEO TOOLKIT BEGIN
if (empty($_REQUEST['f'])) {
	$phpbb_seo->get_forum_id($session_forum_id);
	if ($session_forum_id > 0) {
		$_REQUEST['f'] = (int) $session_forum_id;
	}
}
if (!empty($_REQUEST['hilit'])) {
	$_REQUEST['hilit'] = rawurldecode($_REQUEST['hilit']);
	if (!$phpbb_seo->is_utf8($_REQUEST['hilit'])) {
		$_REQUEST['hilit'] = utf8_normalize_nfc(utf8_recode($_REQUEST['hilit'], 'iso-8859-1'));
	}
}
// www.phpBB-SEO.com SEO TOOLKIT END

// Start DM Multi Zodiacs
include($phpbb_root_path . 'includes/functions_zodiacs.' . $phpEx);
$user->add_lang('mods/zodiacs');
// End DM  Multi Zodiacs

// Start session management
$user->session_begin();
$auth->acl($user->data);

// Initial var setup
$forum_id	= request_var('f', 0);
$topic_id	= request_var('t', 0);
$post_id	= request_var('p', 0);
$voted_id	= request_var('vote_id', array('' => 0));

$voted_id = (sizeof($voted_id) > 1) ? array_unique($voted_id) : $voted_id;


$start		= request_var('start', 0);
$view		= request_var('view', '');

$default_sort_days	= (!empty($user->data['user_post_show_days'])) ? $user->data['user_post_show_days'] : 0;
$default_sort_key	= (!empty($user->data['user_post_sortby_type'])) ? $user->data['user_post_sortby_type'] : 't';
$default_sort_dir	= (!empty($user->data['user_post_sortby_dir'])) ? $user->data['user_post_sortby_dir'] : 'a';

$sort_days	= request_var('st', $default_sort_days);
$sort_key	= request_var('sk', $default_sort_key);
$sort_dir	= request_var('sd', $default_sort_dir);

$update		= request_var('update', false);

$s_can_vote = false;

if (defined('PORTAL_INDEX_PAGE')) {
	$user->setup('mods/portal_xl');
	include($phpbb_root_path . 'portal/includes/functions.'.$phpEx);
	include_once($phpbb_root_path . 'portal/includes/viewforum_blocks.' . $phpEx);
	include_once($phpbb_root_path . 'portal/includes/functions_blocks_index.' . $phpEx);
}

/**
* @todo normalize?
*/
$hilit_words	= request_var('hilit', '', true);

// start mod view or mark unread posts
$unread_post_id	= request_var('mu', 0);
if ($unread_post_id)
{
	mark_unread_post($unread_post_id);
}
// end mod view or mark unread posts

// Do we have a topic or post id?
if (!$topic_id && !$post_id)
{
	trigger_error('NO_TOPIC');
}

// Find topic id if user requested a newer or older topic
if ($view && !$post_id)
{
	if (!$forum_id)
	{
		$sql = 'SELECT forum_id
			FROM ' . TOPICS_TABLE . "
			WHERE topic_id = $topic_id";
		$result = $db->sql_query($sql);
		$forum_id = (int) $db->sql_fetchfield('forum_id');
		$db->sql_freeresult($result);

		if (!$forum_id)
		{
			trigger_error('NO_TOPIC');
		}
	}

	if ($view == 'unread')
	{
		// Get topic tracking info
		$topic_tracking_info = get_complete_topic_tracking($forum_id, $topic_id);

		$topic_last_read = (isset($topic_tracking_info[$topic_id])) ? $topic_tracking_info[$topic_id] : 0;

		$sql = 'SELECT post_id, topic_id, forum_id
			FROM ' . POSTS_TABLE . "
			WHERE topic_id = $topic_id
				" . (($auth->acl_get('m_approve', $forum_id)) ? '' : 'AND post_approved = 1') . "
				AND post_time > $topic_last_read
				AND forum_id = $forum_id
			ORDER BY post_time ASC";
		$result = $db->sql_query_limit($sql, 1);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		if (!$row)
		{
			$sql = 'SELECT topic_last_post_id as post_id, topic_id, forum_id
				FROM ' . TOPICS_TABLE . '
				WHERE topic_id = ' . $topic_id;
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);
		}

		if (!$row)
		{
			// Setup user environment so we can process lang string
			$user->setup('viewtopic');

			trigger_error('NO_TOPIC');
		}

		$post_id = $row['post_id'];
		$topic_id = $row['topic_id'];
	}
	else if ($view == 'next' || $view == 'previous')
	{
		$sql_condition = ($view == 'next') ? '>' : '<';
		$sql_ordering = ($view == 'next') ? 'ASC' : 'DESC';

		$sql = 'SELECT forum_id, topic_last_post_time
			FROM ' . TOPICS_TABLE . '
			WHERE topic_id = ' . $topic_id;
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		if (!$row)
		{
			$user->setup('viewtopic');
			// OK, the topic doesn't exist. This error message is not helpful, but technically correct.
			trigger_error(($view == 'next') ? 'NO_NEWER_TOPICS' : 'NO_OLDER_TOPICS');
		}
		else
		{
			$sql = 'SELECT topic_id, forum_id
				FROM ' . TOPICS_TABLE . '
				WHERE forum_id = ' . $row['forum_id'] . "
					AND topic_moved_id = 0
					AND topic_last_post_time $sql_condition {$row['topic_last_post_time']}
					" . (($auth->acl_get('m_approve', $row['forum_id'])) ? '' : 'AND topic_approved = 1') . "
				ORDER BY topic_last_post_time $sql_ordering";
			$result = $db->sql_query_limit($sql, 1);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);

			if (!$row)
			{
				$user->setup('viewtopic');
				trigger_error(($view == 'next') ? 'NO_NEWER_TOPICS' : 'NO_OLDER_TOPICS');
			}
			else
			{
				$topic_id = $row['topic_id'];

				// Check for global announcement correctness?
				if (!$row['forum_id'] && !$forum_id)
				{
					trigger_error('NO_TOPIC');
				}
				else if ($row['forum_id'])
				{
					$forum_id = $row['forum_id'];
				}
			}
		}
	}

	// Check for global announcement correctness?
	if ((!isset($row) || !$row['forum_id']) && !$forum_id)
	{
		trigger_error('NO_TOPIC');
	}
	else if (isset($row) && $row['forum_id'])
	{
		$forum_id = $row['forum_id'];
	}
}

// This rather complex gaggle of code handles querying for topics but
// also allows for direct linking to a post (and the calculation of which
// page the post is on and the correct display of viewtopic)
$sql_array = array(
	'SELECT'	=> 't.*, f.*',

	'FROM'		=> array(FORUMS_TABLE => 'f'),
);

// Firebird handles two columns of the same name a little differently, this
// addresses that by forcing the forum_id to come from the forums table.
if ($db->sql_layer === 'firebird')
{
	$sql_array['SELECT'] = 'f.forum_id AS forum_id, ' . $sql_array['SELECT'];
}

// The FROM-Order is quite important here, else t.* columns can not be correctly bound.
if ($post_id)
{
	$sql_array['SELECT'] .= ', p.post_approved';
	$sql_array['FROM'][POSTS_TABLE] = 'p';
}

// Topics table need to be the last in the chain
$sql_array['FROM'][TOPICS_TABLE] = 't';

if ($user->data['is_registered'])
{
	$sql_array['SELECT'] .= ', tw.notify_status';
	$sql_array['LEFT_JOIN'] = array();

	$sql_array['LEFT_JOIN'][] = array(
		'FROM'	=> array(TOPICS_WATCH_TABLE => 'tw'),
		'ON'	=> 'tw.user_id = ' . $user->data['user_id'] . ' AND t.topic_id = tw.topic_id'
	);

	if ($config['allow_bookmarks'])
	{
		$sql_array['SELECT'] .= ', bm.topic_id as bookmarked';
		$sql_array['LEFT_JOIN'][] = array(
			'FROM'	=> array(BOOKMARKS_TABLE => 'bm'),
			'ON'	=> 'bm.user_id = ' . $user->data['user_id'] . ' AND t.topic_id = bm.topic_id'
		);
	}

	if ($config['load_db_lastread'])
	{
		$sql_array['SELECT'] .= ', tt.mark_time, ft.mark_time as forum_mark_time';

		$sql_array['LEFT_JOIN'][] = array(
			'FROM'	=> array(TOPICS_TRACK_TABLE => 'tt'),
			'ON'	=> 'tt.user_id = ' . $user->data['user_id'] . ' AND t.topic_id = tt.topic_id'
		);

		$sql_array['LEFT_JOIN'][] = array(
			'FROM'	=> array(FORUMS_TRACK_TABLE => 'ft'),
			'ON'	=> 'ft.user_id = ' . $user->data['user_id'] . ' AND t.forum_id = ft.forum_id'
		);
	}
}

if (!$post_id)
{
	$sql_array['WHERE'] = "t.topic_id = $topic_id";
}
else
{
	$sql_array['WHERE'] = "p.post_id = $post_id AND t.topic_id = p.topic_id";
}

$sql_array['WHERE'] .= ' AND (f.forum_id = t.forum_id';

if (!$forum_id)
{
	// If it is a global announcement make sure to set the forum id to a postable forum
	$sql_array['WHERE'] .= ' OR (t.topic_type = ' . POST_GLOBAL . '
		AND f.forum_type = ' . FORUM_POST . ')';
}
else
{
	$sql_array['WHERE'] .= ' OR (t.topic_type = ' . POST_GLOBAL . "
		AND f.forum_id = $forum_id)";
}

$sql_array['WHERE'] .= ')';

// Join to forum table on topic forum_id unless topic forum_id is zero
// whereupon we join on the forum_id passed as a parameter ... this
// is done so navigation, forum name, etc. remain consistent with where
// user clicked to view a global topic
$sql = $db->sql_build_query('SELECT', $sql_array);
$result = $db->sql_query($sql);
$topic_data = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

// link to unapproved post or incorrect link
if (!$topic_data)
{
	// If post_id was submitted, we try at least to display the topic as a last resort...
	if ($post_id && $topic_id)
	{
		redirect(append_sid("{$phpbb_root_path}viewtopic.$phpEx", "t=$topic_id" . (($forum_id) ? "&amp;f=$forum_id" : '')));
	}

	trigger_error('NO_TOPIC');
}

$forum_id = (int) $topic_data['forum_id'];
// This is for determining where we are (page)
if ($post_id)
{
	// are we where we are supposed to be?
	if (!$topic_data['post_approved'] && !$auth->acl_get('m_approve', $topic_data['forum_id']))
	{
		// If post_id was submitted, we try at least to display the topic as a last resort...
		if ($topic_id)
		{
			redirect(append_sid("{$phpbb_root_path}viewtopic.$phpEx", "t=$topic_id" . (($forum_id) ? "&amp;f=$forum_id" : '')));
		}

		trigger_error('NO_TOPIC');
	}
	if ($post_id == $topic_data['topic_first_post_id'] || $post_id == $topic_data['topic_last_post_id'])
	{
		$check_sort = ($post_id == $topic_data['topic_first_post_id']) ? 'd' : 'a';

		if ($sort_dir == $check_sort)
		{
			$topic_data['prev_posts'] = ($auth->acl_get('m_approve', $forum_id)) ? $topic_data['topic_replies_real'] : $topic_data['topic_replies'];
		}
		else
		{
			$topic_data['prev_posts'] = 0;
		}
	}
	else
	{
		$sql = 'SELECT COUNT(p1.post_id) AS prev_posts
			FROM ' . POSTS_TABLE . ' p1, ' . POSTS_TABLE . " p2
			WHERE p1.topic_id = {$topic_data['topic_id']}
				AND p2.post_id = {$post_id}
				" . ((!$auth->acl_get('m_approve', $forum_id)) ? 'AND p1.post_approved = 1' : '') . '
				AND ' . (($sort_dir == 'd') ? 'p1.post_time >= p2.post_time' : 'p1.post_time <= p2.post_time');

		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);

		$topic_data['prev_posts'] = $row['prev_posts'] - 1;
	}
}

$forum_id = (int) $topic_data['forum_id'];
$topic_id = (int) $topic_data['topic_id'];

// www.phpBB-SEO.com SEO TOOLKIT BEGIN
$phpbb_seo->set_url($topic_data['forum_name'], $forum_id, 'forum');
if ($topic_data['topic_type'] == POST_GLOBAL) {
	// Let's make sure user will see global annoucements
	$auth->cache[$forum_id]['f_read'] = 1;
	$_parent = $phpbb_seo->seo_static['global_announce'];
} else {
	$_parent = $phpbb_seo->seo_url['forum'][$forum_id];
}
if (!empty($phpbb_seo->seo_opt['sql_rewrite'])) {
	if ( !$phpbb_seo->check_url('topic', $topic_data['topic_url'], $_parent)) {
		if (!empty($topic_data['topic_url'])) {
			// Here we get rid of the seo delim (-t) and put it back even in simple mod
			// to be able to handle all cases at once
			$_url = preg_replace('`' . $phpbb_seo->seo_delim['topic'] . '$`i', '', $topic_data['topic_url']);
			$_title = $phpbb_seo->get_url_info('topic', $_url . $phpbb_seo->seo_delim['topic'] . $topic_id, 'title');
		} else {
			$_title = $phpbb_seo->modrtype > 2 ? censor_text($topic_data['topic_title']) : '';
		}
		unset($phpbb_seo->seo_url['topic'][$topic_id]);
		$topic_data['topic_url'] = $phpbb_seo->get_url_info('topic', $phpbb_seo->prepare_url( 'topic', $_title, $topic_id, $_parent, (( empty($_title) || ($_title == $phpbb_seo->seo_static['topic']) ) ? true : false) ), 'url');
		unset($phpbb_seo->seo_url['topic'][$topic_id]);
		if ($topic_data['topic_url']) {
			// Update the topic_url field for later re-use
			$sql = "UPDATE " . TOPICS_TABLE . " SET topic_url = '" . $db->sql_escape($topic_data['topic_url']) . "'
				WHERE topic_id = $topic_id";
			$db->sql_query($sql);
		}
	}
} else {
	$topic_data['topic_url'] = '';
}
$phpbb_seo->prepare_iurl($topic_data, 'topic', $_parent);
// www.phpBB-SEO.com SEO TOOLKIT END

//
$topic_replies = ($auth->acl_get('m_approve', $forum_id)) ? $topic_data['topic_replies_real'] : $topic_data['topic_replies'];

// Check sticky/announcement time limit
if (($topic_data['topic_type'] == POST_STICKY || $topic_data['topic_type'] == POST_ANNOUNCE) && $topic_data['topic_time_limit'] && ($topic_data['topic_time'] + $topic_data['topic_time_limit']) < time())
{
	$sql = 'UPDATE ' . TOPICS_TABLE . '
		SET topic_type = ' . POST_NORMAL . ', topic_time_limit = 0
		WHERE topic_id = ' . $topic_id;
	$db->sql_query($sql);

	$topic_data['topic_type'] = POST_NORMAL;
	$topic_data['topic_time_limit'] = 0;
}

// Setup look and feel
$user->setup('viewtopic', $topic_data['forum_style']);

if (!$topic_data['topic_approved'] && !$auth->acl_get('m_approve', $forum_id))
{
	trigger_error('NO_TOPIC');
}

// Start auth check
if (!$auth->acl_get('f_read', $forum_id))
{
	if ($user->data['user_id'] != ANONYMOUS)
	{
		trigger_error('SORRY_AUTH_READ');
	}

	login_box('', $user->lang['LOGIN_VIEWFORUM']);
}

// Forum is passworded ... check whether access has been granted to this
// user this session, if not show login box
if ($topic_data['forum_password'])
{
	login_forum_box($topic_data);
}

// Redirect to login or to the correct post upon emailed notification links
if (isset($_GET['e']))
{
	$jump_to = request_var('e', 0);

	// www.phpBB-SEO.com SEO TOOLKIT BEGIN
	//$redirect_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id");
	// www.phpBB-SEO.com SEO TOOLKIT END

	if ($user->data['user_id'] == ANONYMOUS)
	{
		// www.phpBB-SEO.com SEO TOOLKIT BEGIN
		login_box(append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id&amp;p=$post_id&amp;e=$jump_to"), $user->lang['LOGIN_NOTIFY_TOPIC']);
		// www.phpBB-SEO.com SEO TOOLKIT END
	}

	if ($jump_to > 0)
	{
		// We direct the already logged in user to the correct post...
		// www.phpBB-SEO.com SEO TOOLKIT BEGIN
		redirect(append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id" . ((!$post_id) ? "&amp;p=$jump_to" : "&amp;p=$post_id")) . "#p$jump_to");
		// www.phpBB-SEO.com SEO TOOLKIT END
	}
}

// What is start equal to?
if ($post_id)
{
	$start = floor(($topic_data['prev_posts']) / $config['posts_per_page']) * $config['posts_per_page'];
}

// Get topic tracking info
if (!isset($topic_tracking_info))
{
	$topic_tracking_info = array();

	// Get topic tracking info
	if ($config['load_db_lastread'] && $user->data['is_registered'])
	{
		$tmp_topic_data = array($topic_id => $topic_data);
		$topic_tracking_info = get_topic_tracking($forum_id, $topic_id, $tmp_topic_data, array($forum_id => $topic_data['forum_mark_time']));
		unset($tmp_topic_data);
	}
	else if ($config['load_anon_lastread'] || $user->data['is_registered'])
	{
		$topic_tracking_info = get_complete_topic_tracking($forum_id, $topic_id);
	}
}

// Post ordering options
$limit_days = array(0 => $user->lang['ALL_POSTS'], 1 => $user->lang['1_DAY'], 7 => $user->lang['7_DAYS'], 14 => $user->lang['2_WEEKS'], 30 => $user->lang['1_MONTH'], 90 => $user->lang['3_MONTHS'], 180 => $user->lang['6_MONTHS'], 365 => $user->lang['1_YEAR']);

$sort_by_text = array('a' => $user->lang['AUTHOR'], 't' => $user->lang['POST_TIME'], 's' => $user->lang['SUBJECT']);
$sort_by_sql = array('a' => array('u.username_clean', 'p.post_id'), 't' => 'p.post_time', 's' => array('p.post_subject', 'p.post_id'));
$join_user_sql = array('a' => true, 't' => false, 's' => false);

$s_limit_days = $s_sort_key = $s_sort_dir = $u_sort_param = '';

gen_sort_selects($limit_days, $sort_by_text, $sort_days, $sort_key, $sort_dir, $s_limit_days, $s_sort_key, $s_sort_dir, $u_sort_param, $default_sort_days, $default_sort_key, $default_sort_dir);

// Obtain correct post count and ordering SQL if user has
// requested anything different
if ($sort_days)
{
	$min_post_time = time() - ($sort_days * 86400);

	$sql = 'SELECT COUNT(post_id) AS num_posts
		FROM ' . POSTS_TABLE . "
		WHERE topic_id = $topic_id
			AND post_time >= $min_post_time
		" . (($auth->acl_get('m_approve', $forum_id)) ? '' : 'AND post_approved = 1');
	$result = $db->sql_query($sql);
	$total_posts = (int) $db->sql_fetchfield('num_posts');
	$db->sql_freeresult($result);

	$limit_posts_time = "AND p.post_time >= $min_post_time ";

	if (isset($_POST['sort']))
	{
		$start = 0;
	}
}
else
{
	$total_posts = $topic_replies + 1;
	$limit_posts_time = '';
}

// Was a highlight request part of the URI?
$highlight_match = $highlight = '';
if ($hilit_words)
{
	foreach (explode(' ', trim($hilit_words)) as $word)
	{
		if (trim($word))
		{
			$word = str_replace('\*', '\w+?', preg_quote($word, '#'));
			$word = preg_replace('#(^|\s)\\\\w\*\?(\s|$)#', '$1\w+?$2', $word);
			$highlight_match .= (($highlight_match != '') ? '|' : '') . $word;
		}
	}

	$highlight = urlencode($hilit_words);
}

// Make sure $start is set to the last page if it exceeds the amount
if ($start < 0 || $start >= $total_posts)
{
	$start = ($start < 0) ? 0 : floor(($total_posts - 1) / $config['posts_per_page']) * $config['posts_per_page'];
}

// www.phpBB-SEO.com SEO TOOLKIT BEGIN -> Zero dupe
$phpbb_seo->seo_opt['zero_dupe']['start'] = $phpbb_seo->seo_chk_start( $start, $config['posts_per_page'] );

   // Changings for primehalo's Post Revision MOD
   $displ_history = request_var('display_history', false);
   $rem_history = request_var('remove_history', '');
   $conf_key = request_var('confirm_key', '');

if (!empty($phpbb_seo->seo_opt['url_rewrite'])) {
	$phpbb_seo->seo_path['canonical'] = $phpbb_seo->drop_sid(append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id&amp;start=$start"));
}

if ( $post_id && !$view && !$phpbb_seo->set_do_redir_post()) {
	$phpbb_seo->seo_opt['zero_dupe']['redir_def'] = array(
		'p' => array('val' => $post_id, 'keep' => true, 'force' => true, 'hash' => "p$post_id"),
		'hilit' => array('val' => (($highlight_match) ? $highlight : ''), 'keep' => !empty($highlight_match)),
	  
	  // Changings for primehalo's Post Revision MOD
	  'display_history' => array('val' => $displ_history, 'keep' => (boolean) ($displ_history == true)),
	  'remove_history' => array('val' => $rem_history, 'keep' => $rem_history),
	  'confirm_key' => array('val' => $conf_key, 'keep' => $conf_key),
   );
} else {
	$seo_watch = request_var('watch', '');
	$seo_unwatch = request_var('unwatch', '');
	$seo_bookmark = request_var('bookmark', 0);
	$keep_watch = (boolean) ($seo_watch == 'topic' && $user->data['is_registered']);
	$keep_unwatch = (boolean) ($seo_unwatch == 'topic' && $user->data['is_registered']);
	$keep_hash = (boolean) ($keep_watch || $keep_unwatch || $seo_bookmark);
	$seo_uid = max(0, request_var('uid', 0));
	$phpbb_seo->seo_opt['zero_dupe']['redir_def'] = array(
		'uid' => array('val' => $seo_uid, 'keep' => (boolean) ($keep_hash && $seo_uid)),
		'f' => array('val' => $forum_id, 'keep' => true, 'force' => true),
		't' => array('val' => $topic_id, 'keep' => true, 'force' => true, 'hash' => $post_id ? "p$post_id" : ''),
		'p' => array('val' => $post_id, 'keep' =>  ($post_id && $view == 'show' ? true : false), 'hash' => "p$post_id"),
		'watch' => array('val' => $seo_watch, 'keep' => $keep_watch),
		'unwatch' => array('val' => $seo_unwatch, 'keep' => $keep_unwatch),
		'bookmark' => array('val' => $seo_bookmark, 'keep' => (boolean) ($user->data['is_registered'] && $config['allow_bookmarks'] && $seo_bookmark)),
		'start' => array('val' => $phpbb_seo->seo_opt['zero_dupe']['start'], 'keep' => true, 'force' => true),
		'hash' => array('val' => request_var('hash', ''), 'keep' => $keep_hash),
		'st' => array('val' => $sort_days, 'keep' => true),
		'sk' => array('val' => $sort_key, 'keep' => true),
		'sd' => array('val' => $sort_dir, 'keep' => true),
		'view' => array('val' => $view, 'keep' => $view == 'print' ? (boolean) $auth->acl_get('f_print', $forum_id) : (($view == 'viewpoll' || $view == 'show') ? true : false)),
		'hilit' => array('val' => (($highlight_match) ? $highlight : ''), 'keep' => (boolean) !(!$user->data['is_registered'] && $phpbb_seo->seo_opt['rem_hilit'])),
	);
	if ($phpbb_seo->seo_opt['zero_dupe']['redir_def']['bookmark']['keep']) { // Prevent unessecary redirections
		// Note : bookmark, watch and unwatch cases could just not be handled by the zero dupe (no redirect at all when used),
		// but the handling as well acts as a poweful security shield so, it's worth it ;)
		unset($phpbb_seo->seo_opt['zero_dupe']['redir_def']['start']);
	}
}
$phpbb_seo->seo_chk_dupe();
// www.phpBB-SEO.com SEO TOOLKIT END -> Zero dupe
	
// General Viewtopic URL for return links
$viewtopic_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id" . (($start == 0) ? '' : "&amp;start=$start") . ((strlen($u_sort_param)) ? "&amp;$u_sort_param" : '') . (($highlight_match) ? "&amp;hilit=$highlight" : ''));

// Are we watching this topic?
$s_watching_topic = array(
	'link'			=> '',
	'title'			=> '',
	'is_watching'	=> false,
);

if (($config['email_enable'] || $config['jab_enable']) && $config['allow_topic_notify'] && $user->data['is_registered'])
{
	watch_topic_forum('topic', $s_watching_topic, $user->data['user_id'], $forum_id, $topic_id, $topic_data['notify_status'], $start);

	// Reset forum notification if forum notify is set
	if ($config['allow_forum_notify'] && $auth->acl_get('f_subscribe', $forum_id))
	{
		$s_watching_forum = $s_watching_topic;
		watch_topic_forum('forum', $s_watching_forum, $user->data['user_id'], $forum_id, 0);
	}
}

// Bookmarks
if ($config['allow_bookmarks'] && $user->data['is_registered'] && request_var('bookmark', 0))
{
	if (check_link_hash(request_var('hash', ''), "topic_$topic_id"))
	{
		if (!$topic_data['bookmarked'])
		{
			$sql = 'INSERT INTO ' . BOOKMARKS_TABLE . ' ' . $db->sql_build_array('INSERT', array(
				'user_id'	=> $user->data['user_id'],
				'topic_id'	=> $topic_id,
			));
			$db->sql_query($sql);
		}
		else
		{
			$sql = 'DELETE FROM ' . BOOKMARKS_TABLE . "
				WHERE user_id = {$user->data['user_id']}
					AND topic_id = $topic_id";
			$db->sql_query($sql);
		}
		$message = (($topic_data['bookmarked']) ? $user->lang['BOOKMARK_REMOVED'] : $user->lang['BOOKMARK_ADDED']) . '<br /><br />' . sprintf($user->lang['RETURN_TOPIC'], '<a href="' . $viewtopic_url . '">', '</a>');
	}
	else
	{
		$message = $user->lang['BOOKMARK_ERR'] . '<br /><br />' . sprintf($user->lang['RETURN_TOPIC'], '<a href="' . $viewtopic_url . '">', '</a>');
	}
	meta_refresh(3, $viewtopic_url);

	trigger_error($message);
}

// Grab country flags
$flags = $cache->obtain_country_flags();

// Grab ranks
$ranks = $cache->obtain_ranks();

// Grab icons
$icons = $cache->obtain_icons();

// Grab extensions
$extensions = array();
if ($topic_data['topic_attachment'])
{
	$extensions = $cache->obtain_attach_extensions($forum_id);
}

// Forum rules listing
$s_forum_rules = '';
gen_forum_auth_level('topic', $forum_id, $topic_data['forum_status']);

// Quick mod tools
$allow_change_type = ($auth->acl_get('m_', $forum_id) || ($user->data['is_registered'] && $user->data['user_id'] == $topic_data['topic_poster'])) ? true : false;

$topic_mod = '';
$topic_mod .= ($auth->acl_get('m_lock', $forum_id) || ($auth->acl_get('f_user_lock', $forum_id) && $user->data['is_registered'] && $user->data['user_id'] == $topic_data['topic_poster'] && $topic_data['topic_status'] == ITEM_UNLOCKED)) ? (($topic_data['topic_status'] == ITEM_UNLOCKED) ? '<option value="lock">' . $user->lang['LOCK_TOPIC'] . '</option>' : '<option value="unlock">' . $user->lang['UNLOCK_TOPIC'] . '</option>') : '';
$topic_mod .= ($auth->acl_get('m_delete', $forum_id)) ? '<option value="delete_topic">' . $user->lang['DELETE_TOPIC'] . '</option>' : '';
$topic_mod .= ($auth->acl_get('m_move', $forum_id) && $topic_data['topic_status'] != ITEM_MOVED) ? '<option value="move">' . $user->lang['MOVE_TOPIC'] . '</option>' : '';
$topic_mod .= ($auth->acl_get('m_split', $forum_id)) ? '<option value="split">' . $user->lang['SPLIT_TOPIC'] . '</option>' : '';
$topic_mod .= ($auth->acl_get('m_merge', $forum_id)) ? '<option value="merge">' . $user->lang['MERGE_POSTS'] . '</option>' : '';
$topic_mod .= ($auth->acl_get('m_merge', $forum_id)) ? '<option value="merge_topic">' . $user->lang['MERGE_TOPIC'] . '</option>' : '';
$topic_mod .= ($auth->acl_get('m_move', $forum_id)) ? '<option value="fork">' . $user->lang['FORK_TOPIC'] . '</option>' : '';
$topic_mod .= ($allow_change_type && $auth->acl_gets('f_sticky', 'f_announce', $forum_id) && $topic_data['topic_type'] != POST_NORMAL) ? '<option value="make_normal">' . $user->lang['MAKE_NORMAL'] . '</option>' : '';
$topic_mod .= ($allow_change_type && $auth->acl_get('f_sticky', $forum_id) && $topic_data['topic_type'] != POST_STICKY) ? '<option value="make_sticky">' . $user->lang['MAKE_STICKY'] . '</option>' : '';
$topic_mod .= ($allow_change_type && $auth->acl_get('f_announce', $forum_id) && $topic_data['topic_type'] != POST_ANNOUNCE) ? '<option value="make_announce">' . $user->lang['MAKE_ANNOUNCE'] . '</option>' : '';
$topic_mod .= ($allow_change_type && $auth->acl_get('f_announce', $forum_id) && $topic_data['topic_type'] != POST_GLOBAL) ? '<option value="make_global">' . $user->lang['MAKE_GLOBAL'] . '</option>' : '';
$topic_mod .= ($auth->acl_get('m_', $forum_id)) ? '<option value="topic_logs">' . $user->lang['VIEW_TOPIC_LOGS'] . '</option>' : '';

// If we've got a hightlight set pass it on to pagination.
$pagination = generate_pagination(append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id" . ((strlen($u_sort_param)) ? "&amp;$u_sort_param" : '') . (($highlight_match) ? "&amp;hilit=$highlight" : '')), $total_posts, $config['posts_per_page'], $start);

// Navigation links
generate_forum_nav($topic_data);

// Forum Rules
generate_forum_rules($topic_data);

// Moderators
$forum_moderators = array();
if ($config['load_moderators'])
{
	get_moderators($forum_moderators, $forum_id);
}

// This is only used for print view so ...
$server_path = (!$view) ? $phpbb_root_path : generate_board_url() . '/';

// Replace naughty words in title
$topic_data['topic_title'] = censor_text($topic_data['topic_title']);

// Start output Addvertisements
$active = ($user->data['user_id'] != ANONYMOUS) ? '1' : '3';
$adds_id = '';

$sql = "SELECT adds_code, adds_name, adds_id, adds_position 
    FROM " . PORTAL_FORUMADDS_TABLE ." 
	WHERE (adds_active = '" . $active . "' OR adds_active = '1')
	AND (adds_max_views >= adds_views OR adds_max_views = '0')
	AND (FIND_IN_SET('" . $forum_id . "', adds_show_forums) > 0 OR adds_show_all_forums = '1')
	ORDER BY rand()";
$result = $db->sql_query($sql);

while($row = $db->sql_fetchrow($result))
{
	$addscode[$row['adds_position']] = html_entity_decode($row['adds_code']);
	$addsname[$row['adds_position']] = html_entity_decode($row['adds_name']);
	$adds_id[$row['adds_position']]['adds_id'] = $row['adds_id'];
}	

// update views for every Ad
for ($i = 1; $i <= 4; $i++)
{
   if (isset($adds_id[$i]['adds_id']))
   {
      $db->sql_query('UPDATE ' . PORTAL_FORUMADDS_TABLE . ' SET adds_views = adds_views +1 WHERE adds_id = ' . $adds_id[$i]['adds_id']);
   }
}
// End output Ad

//-- mod: Prime Trash Bin (Topics) ------------------------------------------//
// Adjust the quickmod dropdown list if necessary.
include ($phpbb_root_path . 'includes/prime_trash_bin.' . $phpEx);
$topic_deleted = !empty($topic_data['topic_deleted_time']);
if ($topic_deleted)
{
	$topic_mod = fake_delete_alter_quickmod($topic_mod, $forum_id);
}
//-- end: Prime Trash Bin (Topics) ------------------------------------------//

// Send vars to template
$template->assign_vars(array(
	'ADVERTISEMENT1'  		=> isset($addscode[1]) ? $addscode[1] : '',
	'ADVERTISEMENT2'  		=> isset($addscode[2]) ? $addscode[2] : '',
	'ADVERTISEMENT3'  		=> isset($addscode[3]) ? $addscode[3] : '',
	'ADVERTISEMENT4'  		=> isset($addscode[4]) ? $addscode[4] : '',
	'ADVERTISEMENT_NAME1'  	=> isset($addsname[1]) ? $addsname[1] : '',
	'ADVERTISEMENT_NAME2'  	=> isset($addsname[2]) ? $addsname[2] : '',
	'ADVERTISEMENT_NAME3'  	=> isset($addsname[3]) ? $addsname[3] : '',
	'ADVERTISEMENT_NAME4'  	=> isset($addsname[4]) ? $addsname[4] : '',
	));
// End output Addvertisements

// Send vars to template
$template->assign_vars(array(
	'FORUM_ID' 		=> $forum_id,
	'FORUM_NAME' 	=> $topic_data['forum_name'],
	'FORUM_DESC'	=> generate_text_for_display($topic_data['forum_desc'], $topic_data['forum_desc_uid'], $topic_data['forum_desc_bitfield'], $topic_data['forum_desc_options']),
	'TOPIC_ID' 		=> $topic_id,
	'TOPIC_TITLE' 	=> $topic_data['topic_title'],
	'TOPIC_POSTER'	=> $topic_data['topic_poster'],

	'TOPIC_AUTHOR_FULL'		=> get_username_string('full', $topic_data['topic_poster'], $topic_data['topic_first_poster_name'], $topic_data['topic_first_poster_colour']),
	'TOPIC_AUTHOR_COLOUR'	=> get_username_string('colour', $topic_data['topic_poster'], $topic_data['topic_first_poster_name'], $topic_data['topic_first_poster_colour']),
	'TOPIC_AUTHOR'			=> get_username_string('username', $topic_data['topic_poster'], $topic_data['topic_first_poster_name'], $topic_data['topic_first_poster_colour']),

	'PAGINATION' 	=> $pagination,
	'PAGE_NUMBER' 	=> on_page($total_posts, $config['posts_per_page'], $start),
	'TOTAL_POSTS'	=> ($total_posts == 1) ? $user->lang['VIEW_TOPIC_POST'] : sprintf($user->lang['VIEW_TOPIC_POSTS'], $total_posts),
	'U_MCP' 		=> ($auth->acl_get('m_', $forum_id)) ? append_sid("{$phpbb_root_path}mcp.$phpEx", "i=main&amp;mode=topic_view&amp;f=$forum_id&amp;t=$topic_id" . (($start == 0) ? '' : "&amp;start=$start") . ((strlen($u_sort_param)) ? "&amp;$u_sort_param" : ''), true, $user->session_id) : '',
	'MODERATORS'	=> (isset($forum_moderators[$forum_id]) && sizeof($forum_moderators[$forum_id])) ? implode(', ', $forum_moderators[$forum_id]) : '',

	'POST_IMG' 			=> ($topic_data['forum_status'] == ITEM_LOCKED) ? $user->img('button_topic_locked', 'FORUM_LOCKED') : $user->img('button_topic_new', 'POST_NEW_TOPIC'),
	'QUOTE_IMG' 		=> $user->img('icon_post_quote', 'REPLY_WITH_QUOTE'),
	'REPLY_IMG'			=> ($topic_data['forum_status'] == ITEM_LOCKED || $topic_data['topic_status'] == ITEM_LOCKED) ? $user->img('button_topic_locked', 'TOPIC_LOCKED') : $user->img('button_topic_reply', 'REPLY_TO_TOPIC'),
	'EDIT_IMG' 			=> $user->img('icon_post_edit', 'EDIT_POST'),
	'DELETE_IMG' 		=> $user->img('icon_post_delete', 'DELETE_POST'),
	'INFO_IMG' 			=> $user->img('icon_post_info', 'VIEW_INFO'),
	'PROFILE_IMG'		=> $user->img('icon_user_profile', 'READ_PROFILE'),
	'SEARCH_IMG' 		=> $user->img('icon_user_search', 'SEARCH_USER_POSTS'),
	'PM_IMG' 			=> $user->img('icon_contact_pm', 'SEND_PRIVATE_MESSAGE'),
	'EMAIL_IMG' 		=> $user->img('icon_contact_email', 'SEND_EMAIL'),
	'WWW_IMG' 			=> $user->img('icon_contact_www', 'VISIT_WEBSITE'),
	'ICQ_IMG' 			=> $user->img('icon_contact_icq', 'ICQ'),
	'AIM_IMG' 			=> $user->img('icon_contact_aim', 'AIM'),
	'MSN_IMG' 			=> $user->img('icon_contact_msnm', 'MSNM'),
	'YIM_IMG' 			=> $user->img('icon_contact_yahoo', 'YIM'),
	'JABBER_IMG'		=> $user->img('icon_contact_jabber', 'JABBER') ,
	
	// phpBB Gallery integration
	'GALLERY_IMG'		=> $user->img('icon_contact_gallery', 'PERSONAL_ALBUM'),
	// phpBB Gallery integration
	
	'REPORT_IMG'		=> $user->img('icon_post_report', 'REPORT_POST'),
	'REPORTED_IMG'		=> $user->img('icon_topic_reported', 'POST_REPORTED'),
	'UNAPPROVED_IMG'	=> $user->img('icon_topic_unapproved', 'POST_UNAPPROVED'),
	'WARN_IMG'			=> $user->img('icon_user_warn', 'WARN_USER'),

	'S_IS_LOCKED'			=> ($topic_data['topic_status'] == ITEM_UNLOCKED && $topic_data['forum_status'] == ITEM_UNLOCKED) ? false : true,
	'S_SELECT_SORT_DIR' 	=> $s_sort_dir,
	'S_SELECT_SORT_KEY' 	=> $s_sort_key,
	'S_SELECT_SORT_DAYS' 	=> $s_limit_days,
	'S_SINGLE_MODERATOR'	=> (!empty($forum_moderators[$forum_id]) && sizeof($forum_moderators[$forum_id]) > 1) ? false : true,
	'S_TOPIC_ACTION' 		=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id" . (($start == 0) ? '' : "&amp;start=$start")),
	'S_TOPIC_MOD' 			=> ($topic_mod != '') ? '<select name="action" id="quick-mod-select">' . $topic_mod . '</select>' : '',
	'S_MOD_ACTION' 			=> append_sid("{$phpbb_root_path}mcp.$phpEx", "f=$forum_id&amp;t=$topic_id" . (($start == 0) ? '' : "&amp;start=$start") . "&amp;quickmod=1&amp;redirect=" . urlencode(str_replace('&amp;', '&', $viewtopic_url)), true, $user->session_id),

	'S_VIEWTOPIC'			=> true,
	'S_DISPLAY_SEARCHBOX'	=> ($auth->acl_get('u_search') && $auth->acl_get('f_search', $forum_id) && $config['load_search']) ? true : false,
	'S_SEARCHBOX_ACTION'	=> append_sid("{$phpbb_root_path}search.$phpEx", 't=' . $topic_id),

	'S_DISPLAY_POST_INFO'	=> ($topic_data['forum_type'] == FORUM_POST && ($auth->acl_get('f_post', $forum_id) || $user->data['user_id'] == ANONYMOUS)) ? true : false,
	'S_DISPLAY_REPLY_INFO'	=> ($topic_data['forum_type'] == FORUM_POST && ($auth->acl_get('f_reply', $forum_id) || $user->data['user_id'] == ANONYMOUS)) ? true : false,
	'S_ENABLE_FEEDS_TOPIC'	=> ($config['feed_topic'] && !phpbb_optionget(FORUM_OPTION_FEED_EXCLUDE, $topic_data['forum_options'])) ? true : false,

	'S_PORTAL_SHOW_THANKS'	=> ($portal_config['portal_show_thanks']) ? true : false,
		
	// www.phpBB-SEO.com SEO TOOLKIT BEGIN
	'U_TOPIC'				=> !empty($phpbb_seo->seo_opt['url_rewrite']) ? $phpbb_seo->drop_sid($viewtopic_url) : "{$server_path}viewtopic.$phpEx?f=$forum_id&amp;t=$topic_id",
	// www.phpBB-SEO.com SEO TOOLKIT END
	
	'U_FORUM'				=> $server_path,
	'U_VIEW_TOPIC' 			=> $viewtopic_url,
	'U_VIEW_FORUM' 			=> append_sid("{$phpbb_root_path}viewforum.$phpEx", 'f=' . $forum_id),
	'U_VIEW_OLDER_TOPIC'	=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id&amp;view=previous"),
	'U_VIEW_NEWER_TOPIC'	=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id&amp;view=next"),
	
	// www.phpBB-SEO.com SEO TOOLKIT BEGIN
	'U_PRINT_TOPIC'			=> ($auth->acl_get('f_print', $forum_id)) ? append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id&amp;start=$start" . ((strlen($u_sort_param)) ? "&amp;$u_sort_param" : '') . (($highlight_match) ? "&amp;hilit=$highlight" : '') . "&amp;view=print") : '',
	// www.phpBB-SEO.com SEO TOOLKIT END
	
	'U_EMAIL_TOPIC'			=> ($auth->acl_get('f_email', $forum_id) && $config['email_enable']) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=email&amp;t=$topic_id") : '',

	'U_WATCH_TOPIC' 		=> $s_watching_topic['link'],
	'L_WATCH_TOPIC' 		=> $s_watching_topic['title'],
	'S_WATCHING_TOPIC'		=> $s_watching_topic['is_watching'],

	// www.phpBB-SEO.com SEO TOOLKIT BEGIN
	'U_BOOKMARK_TOPIC'		=> ($user->data['is_registered'] && $config['allow_bookmarks']) ? append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id&amp;bookmark=1&amp;hash=" . generate_link_hash("topic_$topic_id")) : '',
	// www.phpBB-SEO.com SEO TOOLKIT END
	
	'L_BOOKMARK_TOPIC'		=> ($user->data['is_registered'] && $config['allow_bookmarks'] && $topic_data['bookmarked']) ? $user->lang['BOOKMARK_TOPIC_REMOVE'] : $user->lang['BOOKMARK_TOPIC'],

	'U_POST_NEW_TOPIC' 		=> ($auth->acl_get('f_post', $forum_id) || $user->data['user_id'] == ANONYMOUS) ? append_sid("{$phpbb_root_path}posting.$phpEx", "mode=post&amp;f=$forum_id") : '',
	'U_POST_REPLY_TOPIC' 	=> ($auth->acl_get('f_reply', $forum_id) || $user->data['user_id'] == ANONYMOUS) ? append_sid("{$phpbb_root_path}posting.$phpEx", "mode=reply&amp;f=$forum_id&amp;t=$topic_id") : '',
	'U_BUMP_TOPIC'			=> (bump_topic_allowed($forum_id, $topic_data['topic_bumped'], $topic_data['topic_last_post_time'], $topic_data['topic_poster'], $topic_data['topic_last_poster_id'])) ? append_sid("{$phpbb_root_path}posting.$phpEx", "mode=bump&amp;f=$forum_id&amp;t=$topic_id&amp;hash=" . generate_link_hash("topic_$topic_id")) : '')
);

// Does this topic contain a poll?
if (!empty($topic_data['poll_start']))
{
	$sql = 'SELECT o.*, p.bbcode_bitfield, p.bbcode_uid
		FROM ' . POLL_OPTIONS_TABLE . ' o, ' . POSTS_TABLE . " p
		WHERE o.topic_id = $topic_id
			AND p.post_id = {$topic_data['topic_first_post_id']}
			AND p.topic_id = o.topic_id
		ORDER BY o.poll_option_id";
	$result = $db->sql_query($sql);

	$poll_info = array();
	while ($row = $db->sql_fetchrow($result))
	{
		$poll_info[] = $row;
	}
	$db->sql_freeresult($result);

	$cur_voted_id = array();
	if ($user->data['is_registered'])
	{
		$sql = 'SELECT poll_option_id
			FROM ' . POLL_VOTES_TABLE . '
			WHERE topic_id = ' . $topic_id . '
				AND vote_user_id = ' . $user->data['user_id'];
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$cur_voted_id[] = $row['poll_option_id'];
		}
		$db->sql_freeresult($result);
	}
	else
	{
		// Cookie based guest tracking ... I don't like this but hum ho
		// it's oft requested. This relies on "nice" users who don't feel
		// the need to delete cookies to mess with results.
		if (isset($_COOKIE[$config['cookie_name'] . '_poll_' . $topic_id]))
		{
			$cur_voted_id = explode(',', $_COOKIE[$config['cookie_name'] . '_poll_' . $topic_id]);
			$cur_voted_id = array_map('intval', $cur_voted_id);
		}
	}

	// Can not vote at all if no vote permission
	$s_can_vote = ($auth->acl_get('f_vote', $forum_id) &&
		(($topic_data['poll_length'] != 0 && $topic_data['poll_start'] + $topic_data['poll_length'] > time()) || $topic_data['poll_length'] == 0) &&
		$topic_data['topic_status'] != ITEM_LOCKED &&
		$topic_data['forum_status'] != ITEM_LOCKED &&
		(!sizeof($cur_voted_id) ||
		($auth->acl_get('f_votechg', $forum_id) && $topic_data['poll_vote_change']))) ? true : false;
	$s_display_results = (!$s_can_vote || ($s_can_vote && sizeof($cur_voted_id)) || $view == 'viewpoll') ? true : false;

	if ($update && $s_can_vote)
	{

		if (!sizeof($voted_id) || sizeof($voted_id) > $topic_data['poll_max_options'] || in_array(VOTE_CONVERTED, $cur_voted_id) || !check_form_key('posting'))
		{
			$redirect_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id" . (($start == 0) ? '' : "&amp;start=$start"));

			meta_refresh(5, $redirect_url);
			if (!sizeof($voted_id))
			{
				$message = 'NO_VOTE_OPTION';
			}
			else if (sizeof($voted_id) > $topic_data['poll_max_options'])
			{
				$message = 'TOO_MANY_VOTE_OPTIONS';
			}
			else if (in_array(VOTE_CONVERTED, $cur_voted_id))
			{
				$message = 'VOTE_CONVERTED';
			}
			else
			{
				$message = 'FORM_INVALID';
			}

			$message = $user->lang[$message] . '<br /><br />' . sprintf($user->lang['RETURN_TOPIC'], '<a href="' . $redirect_url . '">', '</a>');
			trigger_error($message);
		}

		foreach ($voted_id as $option)
		{
			if (in_array($option, $cur_voted_id))
			{
				continue;
			}

			$sql = 'UPDATE ' . POLL_OPTIONS_TABLE . '
				SET poll_option_total = poll_option_total + 1
				WHERE poll_option_id = ' . (int) $option . '
					AND topic_id = ' . (int) $topic_id;
			$db->sql_query($sql);

			if ($user->data['is_registered'])
			{
				$sql_ary = array(
					'topic_id'			=> (int) $topic_id,
					'poll_option_id'	=> (int) $option,
					'vote_user_id'		=> (int) $user->data['user_id'],
					'vote_user_ip'		=> (string) $user->ip,
				);

				$sql = 'INSERT INTO ' . POLL_VOTES_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
				$db->sql_query($sql);
			}
		}

		foreach ($cur_voted_id as $option)
		{
			if (!in_array($option, $voted_id))
			{
				$sql = 'UPDATE ' . POLL_OPTIONS_TABLE . '
					SET poll_option_total = poll_option_total - 1
					WHERE poll_option_id = ' . (int) $option . '
						AND topic_id = ' . (int) $topic_id;
				$db->sql_query($sql);

				if ($user->data['is_registered'])
				{
					$sql = 'DELETE FROM ' . POLL_VOTES_TABLE . '
						WHERE topic_id = ' . (int) $topic_id . '
							AND poll_option_id = ' . (int) $option . '
							AND vote_user_id = ' . (int) $user->data['user_id'];
					$db->sql_query($sql);
				}
			}
		}

		if ($user->data['user_id'] == ANONYMOUS && !$user->data['is_bot'])
		{
			$user->set_cookie('poll_' . $topic_id, implode(',', $voted_id), time() + 31536000);
		}

		$sql = 'UPDATE ' . TOPICS_TABLE . '
			SET poll_last_vote = ' . time() . "
			WHERE topic_id = $topic_id";
		//, topic_last_post_time = ' . time() . " -- for bumping topics with new votes, ignore for now
		$db->sql_query($sql);

		$redirect_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id" . (($start == 0) ? '' : "&amp;start=$start"));

		meta_refresh(5, $redirect_url);
		trigger_error($user->lang['VOTE_SUBMITTED'] . '<br /><br />' . sprintf($user->lang['RETURN_TOPIC'], '<a href="' . $redirect_url . '">', '</a>'));
	}

	$poll_total = 0;
	foreach ($poll_info as $poll_option)
	{
		$poll_total += $poll_option['poll_option_total'];
	}

	if ($poll_info[0]['bbcode_bitfield'])
	{
		$poll_bbcode = new bbcode();
	}
	else
	{
		$poll_bbcode = false;
	}

	for ($i = 0, $size = sizeof($poll_info); $i < $size; $i++)
	{
		$poll_info[$i]['poll_option_text'] = censor_text($poll_info[$i]['poll_option_text']);

		if ($poll_bbcode !== false)
		{
			$poll_bbcode->bbcode_second_pass($poll_info[$i]['poll_option_text'], $poll_info[$i]['bbcode_uid'], $poll_option['bbcode_bitfield']);
		}

		$poll_info[$i]['poll_option_text'] = bbcode_nl2br($poll_info[$i]['poll_option_text']);
		$poll_info[$i]['poll_option_text'] = smiley_text($poll_info[$i]['poll_option_text']);
	 
		/* Begin 'Show voters' MOD by Ernst Vaarties */
		$sql_voters = '
		SELECT username, vote_user_id
		FROM ' . POLL_VOTES_TABLE . ', ' . USERS_TABLE . '
		WHERE topic_id = ' . $topic_id . '
		AND poll_option_id = ' . $poll_info[$i]['poll_option_id'] . '
		AND ' . POLL_VOTES_TABLE . '.vote_user_id = ' . USERS_TABLE . '.user_id
		ORDER BY username ASC, vote_user_id ASC';
		
		$results_voters = $db->sql_query($sql_voters);
		$voters_total = 0;
		$voters_string = "";
		
		// Add all voters to a string.
		while ($row_voters = $db->sql_fetchrow($results_voters)) {
		  $voters_total = $voters_total + 1;
		  $voters_string = $voters_string . "<option value='u=" . $row_voters['vote_user_id'] . "'>" . $row_voters['username'] ."</option>";
		}
		
		// Is the total nr of voters <> the nr of votes for the poll? Add this to the same string.
		if ($voters_total <> $poll_info[$i]['poll_option_total']){
		  $voters_string = $voters_string . "<option><> " . ($poll_info[$i]['poll_option_total'] - $voters_total) . "</option>";
		}
		
		// Add the string to the list.
		$poll_info[$i]['poll_option_voters'] = $voters_string;
		$db->sql_freeresult($results_voters);
		/* End 'Show voters' MOD by Ernst Vaarties */
		
	}

	$topic_data['poll_title'] = censor_text($topic_data['poll_title']);

	if ($poll_bbcode !== false)
	{
		$poll_bbcode->bbcode_second_pass($topic_data['poll_title'], $poll_info[0]['bbcode_uid'], $poll_info[0]['bbcode_bitfield']);
	}

	$topic_data['poll_title'] = bbcode_nl2br($topic_data['poll_title']);
	$topic_data['poll_title'] = smiley_text($topic_data['poll_title']);

	unset($poll_bbcode);

	foreach ($poll_info as $poll_option)
	{
		$option_pct = ($poll_total > 0) ? $poll_option['poll_option_total'] / $poll_total : 0;
		$option_pct_txt = sprintf("%.1d%%", round($option_pct * 100));

		$template->assign_block_vars('poll_option', array(
			'POLL_OPTION_ID' 		=> $poll_option['poll_option_id'],
			'POLL_OPTION_CAPTION' 	=> $poll_option['poll_option_text'],
			'POLL_OPTION_RESULT' 	=> $poll_option['poll_option_total'],
			'POLL_OPTION_PERCENT' 	=> $option_pct_txt,
			'POLL_OPTION_PCT'		=> round($option_pct * 100),
			'POLL_OPTION_IMG' 		=> $user->img('poll_center', $option_pct_txt, round($option_pct * 250)),
			'POLL_OPTION_VOTED'     => (in_array($poll_option['poll_option_id'], $cur_voted_id)) ? true : false,
			/* 'Show voters' MOD by Ernst Vaarties */			
			'POLL_OPTION_VOTERS' 	=> $poll_option['poll_option_voters'])
		);
	}

	$poll_end = $topic_data['poll_length'] + $topic_data['poll_start'];

	$template->assign_vars(array(
		'POLL_QUESTION'		=> $topic_data['poll_title'],
		'TOTAL_VOTES' 		=> $poll_total,
		'POLL_LEFT_CAP_IMG'	=> $user->img('poll_left'),
		'POLL_RIGHT_CAP_IMG'=> $user->img('poll_right'),

		'L_MAX_VOTES'		=> ($topic_data['poll_max_options'] == 1) ? $user->lang['MAX_OPTION_SELECT'] : sprintf($user->lang['MAX_OPTIONS_SELECT'], $topic_data['poll_max_options']),
		'L_POLL_LENGTH'		=> ($topic_data['poll_length']) ? sprintf($user->lang[($poll_end > time()) ? 'POLL_RUN_TILL' : 'POLL_ENDED_AT'], $user->format_date($poll_end)) : '',

		'S_HAS_POLL'		=> true,
		'S_CAN_VOTE'		=> $s_can_vote,
		'S_DISPLAY_RESULTS'	=> $s_display_results,
		'S_IS_MULTI_CHOICE'	=> ($topic_data['poll_max_options'] > 1) ? true : false,
		'S_POLL_ACTION'		=> $viewtopic_url,

		// www.phpBB-SEO.com SEO TOOLKIT BEGIN
		'U_VIEW_RESULTS'	=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id&amp;view=viewpoll") )
		// www.phpBB-SEO.com SEO TOOLKIT END
	);

	unset($poll_end, $poll_info, $voted_id);
}

// If the user is trying to reach the second half of the topic, fetch it starting from the end
$store_reverse = false;
$sql_limit = $config['posts_per_page'];
$sql_sort_order = $direction = '';

if ($start > $total_posts / 2)
{
	$store_reverse = true;

	if ($start + $config['posts_per_page'] > $total_posts)
	{
		$sql_limit = min($config['posts_per_page'], max(1, $total_posts - $start));
	}

	// Select the sort order
	$direction = (($sort_dir == 'd') ? 'ASC' : 'DESC');
	$sql_start = max(0, $total_posts - $sql_limit - $start);
}
else
{
	// Select the sort order
	$direction = (($sort_dir == 'd') ? 'DESC' : 'ASC');
	$sql_start = $start;
}

if (is_array($sort_by_sql[$sort_key]))
{
	$sql_sort_order = implode(' ' . $direction . ', ', $sort_by_sql[$sort_key]) . ' ' . $direction;
}
else
{
	$sql_sort_order = $sort_by_sql[$sort_key] . ' ' . $direction;
}

// Container for user details, only process once
$post_list = $user_cache = $id_cache = $attachments = $attach_list = $rowset = $update_count = $post_edit_list = array();
$has_attachments = $display_notice = false;
$bbcode_bitfield = '';
$i = $i_total = 0;

// Go ahead and pull all data for this topic
$sql = 'SELECT p.post_id
	FROM ' . POSTS_TABLE . ' p' . (($join_user_sql[$sort_key]) ? ', ' . USERS_TABLE . ' u': '') . "
	WHERE p.topic_id = $topic_id
		" . ((!$auth->acl_get('m_approve', $forum_id)) ? 'AND p.post_approved = 1' : '') . "
		" . (($join_user_sql[$sort_key]) ? 'AND u.user_id = p.poster_id': '') . "
		$limit_posts_time
	ORDER BY $sql_sort_order";
$result = $db->sql_query_limit($sql, $sql_limit, $sql_start);

$i = ($store_reverse) ? $sql_limit - 1 : 0;
while ($row = $db->sql_fetchrow($result))
{
	$post_list[$i] = (int) $row['post_id'];
	($store_reverse) ? $i-- : $i++;
}
$db->sql_freeresult($result);

//-- mod: Prime Trash Bin (Topics) ------------------------------------------//
// Make it so no posts will show up if the topic has been deleted and
// the user doesn't have the permissions to view the deleted content.
if ($topic_deleted)
{
	if (!auth_fake_delete('list', $forum_id)) // User can't view placeholder, so display "No Topic"
	{
		$post_list = array();
	}
	else if (!auth_fake_delete('view', $forum_id)) // User can view placeholder, but not the deleted posts
	{
		$post_list = array(0); //Needs an element or a "No Topic" message will be displayed
	}
}
//-- end: Prime Trash Bin (Topics) ------------------------------------------//

if (!sizeof($post_list))
{
	if ($sort_days)
	{
		trigger_error('NO_POSTS_TIME_FRAME');
	}
	else
	{
		trigger_error('NO_TOPIC');
	}
}

// Holding maximum post time for marking topic read
// We need to grab it because we do reverse ordering sometimes
$max_post_time = 0;

//-- mod: Prime Post Revisions ----------------------------------------------//
include($phpbb_root_path . 'includes/prime_post_revisions.' . $phpEx);
$prime_post_revisions = new prime_post_revisions($post_list, $forum_id, $topic_id, $post_id);
//-- end: Prime Post Revisions ----------------------------------------------//

$sql = $db->sql_build_query('SELECT', array(
	'SELECT'	=> 'u.*, z.friend, z.foe, p.*, gu.personal_album_id, gu.user_images', // phpbb gallery

	'FROM'		=> array(
		USERS_TABLE		=> 'u',
		POSTS_TABLE		=> 'p',
	),

	'LEFT_JOIN'	=> array(
		array(
			'FROM'	=> array(ZEBRA_TABLE => 'z'),
			'ON'	=> 'z.user_id = ' . $user->data['user_id'] . ' AND z.zebra_id = p.poster_id'
		)
		, array(
			'FROM'	=> array(GALLERY_USERS_TABLE => 'gu'),
			'ON'	=> 'gu.user_id = p.poster_id'
		)
	),

	'WHERE'		=> $db->sql_in_set('p.post_id', $post_list) . '
		AND u.user_id = p.poster_id'
));

$result = $db->sql_query($sql);

$now = getdate(time() + $user->timezone + $user->dst - date('Z'));

//-- mod: Prime Post Revisions ----------------------------------------------//
$prime_post_revisions->get_revision_info($post_list, $result, $viewtopic_url, $viewtopic_title);
//-- end: Prime Post Revisions ----------------------------------------------//

// Posts are stored in the $rowset array while $attach_list, $user_cache
// and the global bbcode_bitfield are built
while ($row = $db->sql_fetchrow($result))
{
//-- mod: Prime Trash Bin (Posts) -------------------------------------------//
// If the post has been deleted, we need to check if the user is allowed to view the placeholder.
	if (!empty($row['post_deleted_time']) && !auth_fake_delete('list', $forum_id))
	{
		continue;
	}
//-- end: Prime Trash Bin (Posts) -------------------------------------------//
//-- mod: Prime Post Revisions ----------------------------------------------//
	$prime_post_revisions->merge_revision_info($post_list, $result, $row);
//-- end: Prime Post Revisions ----------------------------------------------//

	// Set max_post_time
	if ($row['post_time'] > $max_post_time)
	{
		$max_post_time = $row['post_time'];
	}

	$poster_id = (int) $row['poster_id'];
	// www.phpBB-SEO.com SEO TOOLKIT BEGIN
	$phpbb_seo->set_user_url( $row['username'], $poster_id );
	// www.phpBB-SEO.com SEO TOOLKIT END
	// Does post have an attachment? If so, add it to the list
	if ($row['post_attachment'] && $config['allow_attachments'])
	{
		$attach_list[] = (int) $row['post_id'];

		if ($row['post_approved'])
		{
			$has_attachments = true;
		}
	}

	$rowset[$row['post_id']] = array(
		'hide_post'			=> ($row['foe'] && ($view != 'show' || $post_id != $row['post_id'])) ? true : false,

		'post_id'			=> $row['post_id'],
		'post_time'			=> $row['post_time'],
		'user_id'			=> $row['user_id'],
		'username'			=> $row['username'],
		'user_colour'		=> $row['user_colour'],
		'topic_id'			=> $row['topic_id'],
		'forum_id'			=> $row['forum_id'],
		'post_subject'		=> $row['post_subject'],
		'post_edit_count'	=> $row['post_edit_count'],
		'post_edit_time'	=> $row['post_edit_time'],
		'post_edit_reason'	=> $row['post_edit_reason'],
		'post_edit_user'	=> $row['post_edit_user'],
		'post_edit_locked'	=> $row['post_edit_locked'],

		// Make sure the icon actually exists
		'icon_id'			=> (isset($icons[$row['icon_id']]['img'], $icons[$row['icon_id']]['height'], $icons[$row['icon_id']]['width'])) ? $row['icon_id'] : 0,
		'post_attachment'	=> $row['post_attachment'],
		'post_approved'		=> $row['post_approved'],
		'post_reported'		=> $row['post_reported'],
		'post_username'		=> $row['post_username'],
		'post_text'			=> $row['post_text'],
		'bbcode_uid'		=> $row['bbcode_uid'],
		'bbcode_bitfield'	=> $row['bbcode_bitfield'],
		'enable_smilies'	=> $row['enable_smilies'],
		'enable_sig'		=> $row['enable_sig'],
		'friend'			=> $row['friend'],
		'foe'				=> $row['foe'],
	);

//-- mod: Prime Trash Bin (Posts) -------------------------------------------//
// This is where we make the deletion info available for when the script starts
// looping through each post to set the template variables. If we're viewing
// the post's revision history (another MOD), then don't hide the post's content.
	if (!empty($row['post_deleted_time']) && empty($display_history))
	{
		$rowset[$row['post_id']]['post_deleted_from']   = $row['post_deleted_from'];
		$rowset[$row['post_id']]['post_deleted_user']   = $row['post_deleted_user'];
		$rowset[$row['post_id']]['post_deleted_time']   = $row['post_deleted_time'];
		$rowset[$row['post_id']]['post_deleted_reason'] = censor_text($row['post_deleted_reason']);

		// We don't want to display any info about previous edits.
		$rowset[$row['post_id']]['post_edit_reason'] = '';
		$rowset[$row['post_id']]['post_edit_count']  = 0;
	}
//-- end: Prime Trash Bin (Posts) -------------------------------------------//

	// Define the global bbcode bitfield, will be used to load bbcodes
	$bbcode_bitfield = $bbcode_bitfield | base64_decode($row['bbcode_bitfield']);

	// Is a signature attached? Are we going to display it?
	if ($row['enable_sig'] && $config['allow_sig'] && $user->optionget('viewsigs'))
	{
		$bbcode_bitfield = $bbcode_bitfield | base64_decode($row['user_sig_bbcode_bitfield']);
	}

	// Cache various user specific data ... so we don't have to recompute
	// this each time the same user appears on this page
	if (!isset($user_cache[$poster_id]))
	{
		if ($poster_id == ANONYMOUS)
		{
			$user_cache[$poster_id] = array(
				'joined'		=> '',
				'posts'			=> '',
				'from'			=> '',

				'sig'					=> '',
				'sig_bbcode_uid'		=> '',
				'sig_bbcode_bitfield'	=> '',

				'online'			=> false,
				// Country Flags Version 3.0.6
				'flag_country'		=> '',
				'flag_code'			=> '',
				'flag_img'			=> '',
				'flag_img_src'		=> '',
				// Country Flags Version 3.0.6
				'avatar'			=> ($user->optionget('viewavatars')) ? get_user_avatar($row['user_avatar'], $row['user_avatar_type'], $row['user_avatar_width'], $row['user_avatar_height']) : '',
				// -- Gender MOD 1.0.1
				'user_gender'		=> GENDER_X,
				'user_gender'		=> $row['user_gender'],				
				// -- Gender MOD 1.0.1
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
				// Start DM multi Zodiacs
				'zodiac'			=> '',
				'zodiac_indian'		=> '',
				'zodiac_chinese'	=> '',
				// End DM Multi Zodiac
				// -- Gender MOD 1.0.1
				'gender_img'		=> '',
				'gender'			=> '',
				// -- Gender MOD 1.0.1
				// phpBB Gallery integration
				'gallery_album'		=> '',
				'gallery_images'	=> '',
				'gallery_search'	=> '',
				// phpBB Gallery integration
				
				'username'			=> $row['username'],
				'user_colour'		=> $row['user_colour'],
				'group_id'          => $row['group_id'],     
					
				'warnings'			=> 0,
				'allow_pm'			=> 0,
			);

			get_user_rank($row['user_rank'], false, $user_cache[$poster_id]['rank_title'], $user_cache[$poster_id]['rank_image'], $user_cache[$poster_id]['rank_image_src']);
		}
		else
		{
			$user_sig = '';

			// We add the signature to every posters entry because enable_sig is post dependant
			if ($row['user_sig'] && $config['allow_sig'] && $user->optionget('viewsigs'))
			{
				$user_sig = $row['user_sig'];
//				$user_sig ='<fieldset style="border: 1px solid #D7D7D7; margin: 15px 0; padding: 10px;"><legend>'.$user->lang['SIGNATURE'].'</legend>' . $row['user_sig'] . '</fieldset>';
			}

			$id_cache[] = $poster_id;
			
			// www.phpBB-SEO.com SEO TOOLKIT BEGIN PHPBB GALLERY	 
			if ($row['personal_album_id']) { 	 
				   $phpbb_seo->prepare_url('album', $row['username'], $row['personal_album_id']); 	 
			} 	 
			// www.phpBB-SEO.com SEO TOOLKIT END PHPBB GALLERY			

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
				// Start DM Multi Zodiac
				'zodiac'			=> '',
				'zodiac_indian'		=> '',
				'zodiac_chinese'	=> '',
				// End DM Multi Zodiac
				// -- Gender MOD 1.0.1
				'gender_img'	=> get_user_gender($row['user_gender']),
				'gender'		=> get_user_gender($row['user_gender'], true),
				// -- Gender MOD 1.0.1
				'rank_title'		=> '',
				'rank_image'		=> '',
				'rank_image_src'	=> '',

				'username'			=> $row['username'],
				'user_colour'		=> $row['user_colour'],
				'group_id'          => $row['group_id'],     

				'online'		=> false,
				'profile'		=> append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=viewprofile&amp;u=$poster_id"),
				'www'			=> $row['user_website'],
				'aim'			=> ($row['user_aim'] && $auth->acl_get('u_sendim')) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=contact&amp;action=aim&amp;u=$poster_id") : '',
				'msn'			=> ($row['user_msnm'] && $auth->acl_get('u_sendim')) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=contact&amp;action=msnm&amp;u=$poster_id") : '',
				'yim'			=> ($row['user_yim']) ? 'http://edit.yahoo.com/config/send_webmesg?.target=' . urlencode($row['user_yim']) . '&amp;.src=pg' : '',
				'jabber'		=> ($row['user_jabber'] && $auth->acl_get('u_sendim')) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=contact&amp;action=jabber&amp;u=$poster_id") : '',
				'search'		=> ($auth->acl_get('u_search')) ? append_sid("{$phpbb_root_path}search.$phpEx", "author_id=$poster_id&amp;sr=posts") : '',
				// User Blog Mod
				'blog_count'	=> ((isset($row['blog_count'])) ? $row['blog_count'] : 0),
				// User Blog Mod
				
				// phpBB Gallery integration
				'gallery_album'		=> ($row['personal_album_id'] && $config['gallery_viewtopic_icon']) ? append_sid("{$phpbb_root_path}" . GALLERY_ROOT_PATH . "album.$phpEx", "album_id=" . $row['personal_album_id']) : '',
				'gallery_images'	=> ($config['gallery_viewtopic_images']) ? $row['user_images'] : 0,
				'gallery_search'	=> ($config['gallery_viewtopic_images'] && $config['gallery_viewtopic_link'] && $row['user_images']) ? append_sid("{$phpbb_root_path}" . GALLERY_ROOT_PATH . "search.$phpEx", "user_id=$poster_id") : '',				
				// phpBB Gallery integration
				
				'author_full'		=> get_username_string('full', $poster_id, $row['username'], $row['user_colour']),
				'author_colour'		=> get_username_string('colour', $poster_id, $row['username'], $row['user_colour']),
				'author_username'	=> get_username_string('username', $poster_id, $row['username'], $row['user_colour']),
				'author_profile'	=> get_username_string('profile', $poster_id, $row['username'], $row['user_colour']),
			);

			// Country Flags Version 3.0.6
			get_user_flag($row['user_country_flag'], $user_cache[$poster_id]['flag_country'], $user_cache[$poster_id]['flag_code'], $user_cache[$poster_id]['flag_img'], $user_cache[$poster_id]['flag_img_src']);
			// Country Flags Version 3.0.6

			get_user_rank($row['user_rank'], $row['user_posts'], $user_cache[$poster_id]['rank_title'], $user_cache[$poster_id]['rank_image'], $user_cache[$poster_id]['rank_image_src']);

			if ((!empty($row['user_allow_viewemail']) && $auth->acl_get('u_sendemail')) || $auth->acl_get('a_email'))
			{
				$user_cache[$poster_id]['email'] = ($config['board_email_form'] && $config['email_enable']) ? append_sid("{$phpbb_root_path}memberlist.$phpEx", "mode=email&amp;u=$poster_id") : (($config['board_hide_emails'] && !$auth->acl_get('a_email')) ? '' : 'mailto:' . $row['user_email']);
			}
			else
			{
				$user_cache[$poster_id]['email'] = '';
			}

			if (!empty($row['user_icq']))
			{
				$user_cache[$poster_id]['icq'] = 'http://www.icq.com/people/webmsg.php?to=' . $row['user_icq'];
				$user_cache[$poster_id]['icq_status_img'] = '<img src="http://web.icq.com/whitepages/online?icq=' . $row['user_icq'] . '&amp;img=5" width="18" height="18" alt="" />';
			}
			else
			{
				$user_cache[$poster_id]['icq_status_img'] = '';
				$user_cache[$poster_id]['icq'] = '';
			}

			if ($config['allow_birthdays'] && !empty($row['user_birthday']))
			{
				list($bday_day, $bday_month, $bday_year) = array_map('intval', explode('-', $row['user_birthday']));

				if ($bday_year)
				{
					$diff = $now['mon'] - $bday_month;
					if ($diff == 0)
					{
						$diff = ($now['mday'] - $bday_day < 0) ? 1 : 0;
					}
					else
					{
						$diff = ($diff < 0) ? 1 : 0;
					}

					$user_cache[$poster_id]['age'] = (int) ($now['year'] - $bday_year - $diff);
				}
				
				// Start DM Multi Zodiac
				$user_cache[$poster_id]['zodiac']				= get_user_zodiac($bday_day, $bday_month);
				$user_cache[$poster_id]['zodiac_img']			= get_user_zodiac($bday_day, $bday_month, false);
				$user_cache[$poster_id]['zodiac_indian']		= get_user_zodiac_indian($bday_day, $bday_month);
				$user_cache[$poster_id]['zodiac_indian_img']	= get_user_zodiac_indian($bday_day, $bday_month, false);
				$user_cache[$poster_id]['zodiac_chinese']		= get_user_zodiac_chinese($bday_day, $bday_month, $bday_year);
				$user_cache[$poster_id]['zodiac_chinese_img']	= get_user_zodiac_chinese($bday_day, $bday_month, $bday_year, false);
				// End DM Multi Zodiac
				
			}
		}
	}
}
$db->sql_freeresult($result);

// Start Add User Blog Mod ------------------
if (isset($config['user_blog_enable']) && $config['user_blog_enable'])
{
	include($phpbb_root_path . 'blog/includes/constants.' . $phpEx);
	include($phpbb_root_path . 'blog/plugins/plugins.' . $phpEx);
	include($phpbb_root_path . 'blog/includes/functions.' . $phpEx);
	include($phpbb_root_path . 'blog/includes/functions_view.' . $phpEx);
	$user->add_lang('mods/blog/common');
	new blog_plugins();
	get_zebra_info($user->data['user_id'], true);
	get_user_settings($id_cache);
}
// End Add User Blog Mod --------------------

// Load custom profile fields
if ($config['load_cpf_viewtopic'])
{
	if (!class_exists('custom_profile'))
	{
		include($phpbb_root_path . 'includes/functions_profile_fields.' . $phpEx);
	}
	$cp = new custom_profile();

	// Grab all profile fields from users in id cache for later use - similar to the poster cache
	$profile_fields_tmp = $cp->generate_profile_fields_template('grab', $id_cache);

	// filter out fields not to be displayed on viewtopic. Yes, it's a hack, but this shouldn't break any MODs.
	$profile_fields_cache = array();
	foreach ($profile_fields_tmp as $profile_user_id => $profile_fields)
	{
		$profile_fields_cache[$profile_user_id] = array();
		foreach ($profile_fields as $used_ident => $profile_field)
		{
			if ($profile_field['data']['field_show_on_vt'])
			{
				$profile_fields_cache[$profile_user_id][$used_ident] = $profile_field;
			}
		}
	}
	unset($profile_fields_tmp);
}

// Generate online information for user
if ($config['load_onlinetrack'] && sizeof($id_cache))
{
	$sql = 'SELECT session_user_id, MAX(session_time) as online_time, MIN(session_viewonline) AS viewonline
		FROM ' . SESSIONS_TABLE . '
		WHERE ' . $db->sql_in_set('session_user_id', $id_cache) . '
		GROUP BY session_user_id';
	$result = $db->sql_query($sql);

	$update_time = $config['load_online_time'] * 60;
	while ($row = $db->sql_fetchrow($result))
	{
		$user_cache[$row['session_user_id']]['online'] = (time() - $update_time < $row['online_time'] && (($row['viewonline']) || $auth->acl_get('u_viewonline'))) ? true : false;
	}
	$db->sql_freeresult($result);
}
unset($id_cache);

// Pull attachment data
if (sizeof($attach_list))
{
	if ($auth->acl_get('u_download') && $auth->acl_get('f_download', $forum_id))
	{
		$sql = 'SELECT *
			FROM ' . ATTACHMENTS_TABLE . '
			WHERE ' . $db->sql_in_set('post_msg_id', $attach_list) . '
				AND in_message = 0
			ORDER BY filetime DESC, post_msg_id ASC';
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
			$attachments[$row['post_msg_id']][] = $row;
		}
		$db->sql_freeresult($result);

		// No attachments exist, but post table thinks they do so go ahead and reset post_attach flags
		if (!sizeof($attachments))
		{
			$sql = 'UPDATE ' . POSTS_TABLE . '
				SET post_attachment = 0
				WHERE ' . $db->sql_in_set('post_id', $attach_list);
			$db->sql_query($sql);

			// We need to update the topic indicator too if the complete topic is now without an attachment
			if (sizeof($rowset) != $total_posts)
			{
				// Not all posts are displayed so we query the db to find if there's any attachment for this topic
				$sql = 'SELECT a.post_msg_id as post_id
					FROM ' . ATTACHMENTS_TABLE . ' a, ' . POSTS_TABLE . " p
					WHERE p.topic_id = $topic_id
						AND p.post_approved = 1
						AND p.topic_id = a.topic_id";
				$result = $db->sql_query_limit($sql, 1);
				$row = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);

				if (!$row)
				{
					$sql = 'UPDATE ' . TOPICS_TABLE . "
						SET topic_attachment = 0
						WHERE topic_id = $topic_id";
					$db->sql_query($sql);
				}
			}
			else
			{
				$sql = 'UPDATE ' . TOPICS_TABLE . "
					SET topic_attachment = 0
					WHERE topic_id = $topic_id";
				$db->sql_query($sql);
			}
		}
		else if ($has_attachments && !$topic_data['topic_attachment'])
		{
			// Topic has approved attachments but its flag is wrong
			$sql = 'UPDATE ' . TOPICS_TABLE . "
				SET topic_attachment = 1
				WHERE topic_id = $topic_id";
			$db->sql_query($sql);

			$topic_data['topic_attachment'] = 1;
		}
	}
	else
	{
		$display_notice = true;
	}
}

// Instantiate BBCode if need be
if ($bbcode_bitfield !== '')
{
	$bbcode = new bbcode(base64_encode($bbcode_bitfield));
}

$i_total = sizeof($rowset) - 1;
$prev_post_id = '';

$template->assign_vars(array(
	'S_NUM_POSTS' => sizeof($post_list))
);

// phpBB arcade integration
include($phpbb_root_path . 'includes/arcade/arcade_constants.' . $phpEx);
include($phpbb_root_path . 'includes/arcade/arcade_cache.' . $phpEx);
include($phpbb_root_path . 'includes/arcade/functions_arcade.' . $phpEx);
$user->add_lang('mods/arcade');
// phpBB arcade integration

// Output the posts
$first_unread = $post_unread = false;
for ($i = 0, $end = sizeof($post_list); $i < $end; ++$i)
{
	// A non-existing rowset only happens if there was no user present for the entered poster_id
	// This could be a broken posts table.
	if (!isset($rowset[$post_list[$i]]))
	{
		continue;
	}

	$row =& $rowset[$post_list[$i]];
	$poster_id = $row['user_id'];

	// End signature parsing, only if needed
	if ($user_cache[$poster_id]['sig'] && $row['enable_sig'] && empty($user_cache[$poster_id]['sig_parsed']))
	{
		$user_cache[$poster_id]['sig'] = censor_text($user_cache[$poster_id]['sig']);

		if ($user_cache[$poster_id]['sig_bbcode_bitfield'])
		{
			$bbcode->bbcode_second_pass($user_cache[$poster_id]['sig'], $user_cache[$poster_id]['sig_bbcode_uid'], $user_cache[$poster_id]['sig_bbcode_bitfield']);
		}

		$user_cache[$poster_id]['sig'] = bbcode_nl2br($user_cache[$poster_id]['sig']);
		$user_cache[$poster_id]['sig'] = smiley_text($user_cache[$poster_id]['sig']);
		$user_cache[$poster_id]['sig_parsed'] = true;
	}

	// Parse the message and subject
	$message = censor_text($row['post_text']);
	// www.phpBB-SEO.com SEO TOOLKIT BEGIN  - META
	if ($i == 0) {
		$m_kewrd = '';
		$seo_meta->collect('description', $message);
		if ($seo_meta->mconfig['topic_sql']) {
			$common_sql = $seo_meta->mconfig['bypass_common'] ? '' : 'AND w.word_common = 0';
			// collect keywords from all post in page
			$post_id_sql = $db->sql_in_set('m.post_id', $post_list, false, true);
			$sql = "SELECT w.word_text
				FROM " . SEARCH_WORDMATCH_TABLE . " m, " . SEARCH_WORDLIST_TABLE . " w
				WHERE $post_id_sql
					AND w.word_id = m.word_id
					$common_sql
				ORDER BY w.word_count DESC";
			$result = $db->sql_query_limit($sql, min(25, (int) $seo_meta->mconfig['keywordlimit']));
			while ( $meta_row = $db->sql_fetchrow($result) ) {
				$m_kewrd .= ' ' . $meta_row['word_text'];
			}
			$db->sql_freeresult($result);
		}
		$seo_meta->collect('keywords', $topic_data['topic_title'] . ' ' . $row['post_subject'] . ' ' . (!empty($m_kewrd) ? $m_kewrd : $seo_meta->meta['description']));
	}
	// www.phpBB-SEO.com SEO TOOLKIT END  - META
	
    if ($portal_config['portal_acronyms_allow'] == true)
    {
		include_once($phpbb_root_path . 'portal/includes/functions_acronym.' . $phpEx);
    	$message = acronym_pass($message);
    }
	
	// Second parse bbcode here
	if ($row['bbcode_bitfield'])
	{
		$bbcode->bbcode_second_pass($message, $row['bbcode_uid'], $row['bbcode_bitfield']);
	}

	$message = bbcode_nl2br($message);
	$message = smiley_text($message);

	if (!empty($attachments[$row['post_id']]))
	{
		parse_attachments($forum_id, $message, $attachments[$row['post_id']], $update_count);
	}

	// Replace naughty words such as farty pants
	$row['post_subject'] = censor_text($row['post_subject']);

	// Highlight active words (primarily for search)
	if ($highlight_match)
	{
		$message = preg_replace('#(?!<.*)(?<!\w)(' . $highlight_match . ')(?!\w|[^<>]*(?:</s(?:cript|tyle))?>)#is', '<span class="posthilit">\1</span>', $message);
		$row['post_subject'] = preg_replace('#(?!<.*)(?<!\w)(' . $highlight_match . ')(?!\w|[^<>]*(?:</s(?:cript|tyle))?>)#is', '<span class="posthilit">\1</span>', $row['post_subject']);
	}

//-- mod: Prime Post Revisions ----------------------------------------------//
	$prime_post_revisions->set_edit_count($row);
//-- end: Prime Post Revisions ----------------------------------------------//

	// Editing information
	if (($row['post_edit_count'] && $config['display_last_edited']) || $row['post_edit_reason'])
	{
		// Get usernames for all following posts if not already stored
		if (!sizeof($post_edit_list) && ($row['post_edit_reason'] || ($row['post_edit_user'] && !isset($user_cache[$row['post_edit_user']]))))
		{
			// Remove all post_ids already parsed (we do not have to check them)
			$post_storage_list = (!$store_reverse) ? array_slice($post_list, $i) : array_slice(array_reverse($post_list), $i);

			$sql = 'SELECT DISTINCT u.user_id, u.username, u.user_colour
				FROM ' . POSTS_TABLE . ' p, ' . USERS_TABLE . ' u
				WHERE ' . $db->sql_in_set('p.post_id', $post_storage_list) . '
					AND p.post_edit_count <> 0
					AND p.post_edit_user <> 0
					AND p.post_edit_user = u.user_id';
			$result2 = $db->sql_query($sql);
			while ($user_edit_row = $db->sql_fetchrow($result2))
			{
				$post_edit_list[$user_edit_row['user_id']] = $user_edit_row;
			}
			$db->sql_freeresult($result2);

			unset($post_storage_list);
		}

//-- mod: Prime Post Revisions ----------------------------------------------//
		$prime_post_revisions->inject_user_data($row);
//-- end: Prime Post Revisions ----------------------------------------------//

		$l_edit_time_total = ($row['post_edit_count'] == 1) ? $user->lang['EDITED_TIME_TOTAL'] : $user->lang['EDITED_TIMES_TOTAL'];

		if ($row['post_edit_reason'])
		{
			// User having edited the post also being the post author?
			if (!$row['post_edit_user'] || $row['post_edit_user'] == $poster_id)
			{
				$display_username = get_username_string('full', $poster_id, $row['username'], $row['user_colour'], $row['post_username']);
			}
			else
			{
				$display_username = get_username_string('full', $row['post_edit_user'], $post_edit_list[$row['post_edit_user']]['username'], $post_edit_list[$row['post_edit_user']]['user_colour']);
			}

			$l_edited_by = sprintf($l_edit_time_total, $display_username, $user->format_date($row['post_edit_time'], false, true), $row['post_edit_count']);
		}
		else
		{
			if ($row['post_edit_user'] && !isset($user_cache[$row['post_edit_user']]))
			{
				$user_cache[$row['post_edit_user']] = $post_edit_list[$row['post_edit_user']];
			}

			// User having edited the post also being the post author?
			if (!$row['post_edit_user'] || $row['post_edit_user'] == $poster_id)
			{
				$display_username = get_username_string('full', $poster_id, $row['username'], $row['user_colour'], $row['post_username']);
			}
			else
			{
				$display_username = get_username_string('full', $row['post_edit_user'], $user_cache[$row['post_edit_user']]['username'], $user_cache[$row['post_edit_user']]['user_colour']);
			}

			$l_edited_by = sprintf($l_edit_time_total, $display_username, $user->format_date($row['post_edit_time'], false, true), $row['post_edit_count']);
		}
	}
	else
	{
		$l_edited_by = '';
	}

	// Bump information
	if ($topic_data['topic_bumped'] && $row['post_id'] == $topic_data['topic_last_post_id'] && isset($user_cache[$topic_data['topic_bumper']]) )
	{
		// It is safe to grab the username from the user cache array, we are at the last
		// post and only the topic poster and last poster are allowed to bump.
		// Admins and mods are bound to the above rules too...
		$l_bumped_by = sprintf($user->lang['BUMPED_BY'], $user_cache[$topic_data['topic_bumper']]['username'], $user->format_date($topic_data['topic_last_post_time'], false, true));
	}
	else
	{
		$l_bumped_by = '';
	}

	$cp_row = array();

	//
	if ($config['load_cpf_viewtopic'])
	{
		$cp_row = (isset($profile_fields_cache[$poster_id])) ? $cp->generate_profile_fields_template('show', false, $profile_fields_cache[$poster_id]) : array();
	}

	$post_unread = (isset($topic_tracking_info[$topic_id]) && $row['post_time'] > $topic_tracking_info[$topic_id]) ? true : false;

	$s_first_unread = false;
	if (!$first_unread && $post_unread)
	{
		$s_first_unread = $first_unread = true;
	}

	$edit_allowed = ($user->data['is_registered'] && ($auth->acl_get('m_edit', $forum_id) || (
		$user->data['user_id'] == $poster_id &&
		$auth->acl_get('f_edit', $forum_id) &&
		!$row['post_edit_locked'] &&
		($row['post_time'] > time() - ($config['edit_time'] * 60) || !$config['edit_time'])
	)));

	$delete_allowed = ($user->data['is_registered'] && ($auth->acl_get('m_delete', $forum_id) || (
		$user->data['user_id'] == $poster_id &&
		$auth->acl_get('f_delete', $forum_id) &&
		$topic_data['topic_last_post_id'] == $row['post_id'] &&
		($row['post_time'] > time() - ($config['delete_time'] * 60) || !$config['delete_time']) &&
		// we do not want to allow removal of the last post if a moderator locked it!
		!$row['post_edit_locked']
	)));

	// Group list in viewtopic 
	// some code borrowed from memberlist.php
	$gsql = 'SELECT g.group_id, g.group_name, g.group_type, g.group_colour
		FROM ' . GROUPS_TABLE . ' g, ' . USER_GROUP_TABLE . " ug
		WHERE ug.user_id = $poster_id
			AND g.group_id = ug.group_id" . ((!$auth->acl_gets('a_group', 'a_groupadd', 'a_groupdel')) ? ' AND g.group_type <> ' . GROUP_HIDDEN : '') . '
			AND ug.user_pending = 0
		ORDER BY g.group_type, g.group_name';
	// some code borrowed from index.php
	$gcresult = $db->sql_query($gsql);
	$grouplistcolor = array();
	while ($gcrow = $db->sql_fetchrow($gcresult))
	{
	   $groupcolor_text = ($gcrow['group_colour']) ? ' style="color:#' . $gcrow['group_colour'] . '"' : '';
	   $group_name = ($gcrow['group_type'] == GROUP_SPECIAL) ? $user->lang['G_' . $gcrow['group_name']] : $gcrow['group_name'];
	   {
		  $grouplistcolor[] = '<a' . $groupcolor_text . ' href="' . append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=group&amp;g=' . $gcrow['group_id']) . '">' . $group_name . '</a>';
	   }
	}
	$db->sql_freeresult($gcresult);

	$grouplistcolor = implode(', ', $grouplistcolor);
	// Group list in viewtopic 
	
	// Get the default group name of the poster
	if ( !function_exists('get_group_name') )
	{
		include_once($phpbb_root_path . 'includes/functions_user.'.$phpEx);
	}
	
	$poster_group = get_group_name($user_cache[$poster_id]['group_id']); 
	// Get the default group name of the poster
	
 	// Disable first post signature
	$disable_first_post_sig = ($row['post_id'] != $topic_data['topic_first_post_id']) ? true : false; 
 	// Disable first post signature
		
	$postrow = array(
        'S_FIRST_POST_TRUE'     => ($topic_data['topic_first_post_id'] == $row['post_id']) ? true : false,					 
		'POST_AUTHOR_FULL'		=> ($poster_id != ANONYMOUS) ? $user_cache[$poster_id]['author_full'] : get_username_string('full', $poster_id, $row['username'], $row['user_colour'], $row['post_username']),
		'POST_AUTHOR_COLOUR'	=> ($poster_id != ANONYMOUS) ? $user_cache[$poster_id]['author_colour'] : get_username_string('colour', $poster_id, $row['username'], $row['user_colour'], $row['post_username']),
		'POST_AUTHOR'			=> ($poster_id != ANONYMOUS) ? $user_cache[$poster_id]['author_username'] : get_username_string('username', $poster_id, $row['username'], $row['user_colour'], $row['post_username']),
		'U_POST_AUTHOR'			=> ($poster_id != ANONYMOUS) ? $user_cache[$poster_id]['author_profile'] : get_username_string('profile', $poster_id, $row['username'], $row['user_colour'], $row['post_username']),
		// -- Country Flags Version 3.0.6
		'FLAG_COUNTRY'		=> $user_cache[$poster_id]['flag_country'],
		'FLAG_CODE'			=> $user_cache[$poster_id]['flag_code'],
		'FLAG_IMG'			=> $user_cache[$poster_id]['flag_img'],
		'FLAG_IMG_SRC'		=> $user_cache[$poster_id]['flag_img_src'],
		// -- Country Flags Version 3.0.6
		// -- Disable first post signature
        'DISABLE_FIRST_POST_SIGNATURE' => $disable_first_post_sig, 
		// -- Disable first post signature
		'RANK_TITLE'		=> $user_cache[$poster_id]['rank_title'],
		'RANK_IMG'			=> $user_cache[$poster_id]['rank_image'],
		'RANK_IMG_SRC'		=> $user_cache[$poster_id]['rank_image_src'],
		'POSTER_JOINED'		=> $user_cache[$poster_id]['joined'],
		'POSTER_POSTS'		=> $user_cache[$poster_id]['posts'],
		'POSTER_FROM'		=> $user_cache[$poster_id]['from'],
		'POSTER_AVATAR'		=> $user_cache[$poster_id]['avatar'],
		'POSTER_WARNINGS'	=> $user_cache[$poster_id]['warnings'],
		'POSTER_AGE'		=> $user_cache[$poster_id]['age'],
		// Start DM Multi Zodiac
		'POSTER_ZODIAC'				=> $user_cache[$poster_id]['zodiac'],
		'POSTER_ZODIAC_IMG'			=> $user_cache[$poster_id]['zodiac_img'],
		'POSTER_ZODIAC_INDIAN'		=> $user_cache[$poster_id]['zodiac_indian'],
		'POSTER_ZODIAC_INDIAN_IMG'	=> $user_cache[$poster_id]['zodiac_indian_img'],
		'POSTER_ZODIAC_CHINESE'		=> $user_cache[$poster_id]['zodiac_chinese'],
		'POSTER_ZODIAC_CHINESE_IMG'	=> $user_cache[$poster_id]['zodiac_chinese_img'],
		// End DM Multi Zodiac
		// -- Get the default group name of the poster
		'POSTER_GROUP'		=> $poster_group,
		// -- Get the default group name of the poster
		// -- Gender MOD 1.0.1
		'POSTER_GENDER_IMG'	=> $user_cache[$poster_id]['gender_img'],
		'POSTER_GENDER'		=> $user_cache[$poster_id]['gender'],
		// -- Gender MOD 1.0.1
		'POSTER_THEME'		=> $user->theme['theme_name'],

		'POST_DATE'			=> $user->format_date($row['post_time'], false, ($view == 'print') ? true : false),
		'POST_SUBJECT'		=> $row['post_subject'],
		'MESSAGE'			=> $message,
		'SIGNATURE'			=> ($row['enable_sig']) ? $user_cache[$poster_id]['sig'] : '',
		'EDITED_MESSAGE'	=> $l_edited_by,
		'EDIT_REASON'		=> $row['post_edit_reason'],
		'BUMPED_MESSAGE'	=> $l_bumped_by,

		'MINI_POST_IMG'			=> ($post_unread) ? $user->img('icon_post_target_unread', 'UNREAD_POST') : $user->img('icon_post_target', 'POST'),
		'POST_ICON_IMG'			=> ($topic_data['enable_icons'] && !empty($row['icon_id'])) ? $icons[$row['icon_id']]['img'] : '',
		'POST_ICON_IMG_WIDTH'	=> ($topic_data['enable_icons'] && !empty($row['icon_id'])) ? $icons[$row['icon_id']]['width'] : '',
		'POST_ICON_IMG_HEIGHT'	=> ($topic_data['enable_icons'] && !empty($row['icon_id'])) ? $icons[$row['icon_id']]['height'] : '',
		'ICQ_STATUS_IMG'		=> $user_cache[$poster_id]['icq_status_img'],
		'ONLINE_IMG'			=> ($poster_id == ANONYMOUS || !$config['load_onlinetrack']) ? '' : (($user_cache[$poster_id]['online']) ? $user->img('icon_user_online', 'ONLINE') : $user->img('icon_user_offline', 'OFFLINE')),
		'S_ONLINE'				=> ($poster_id == ANONYMOUS || !$config['load_onlinetrack']) ? false : (($user_cache[$poster_id]['online']) ? true : false),

		'U_EDIT'			=> ($edit_allowed) ? append_sid("{$phpbb_root_path}posting.$phpEx", "mode=edit&amp;f=$forum_id&amp;p={$row['post_id']}") : '',
		'U_QUOTE'			=> ($auth->acl_get('f_reply', $forum_id)) ? append_sid("{$phpbb_root_path}posting.$phpEx", "mode=quote&amp;f=$forum_id&amp;p={$row['post_id']}") : '',
		'U_INFO'			=> ($auth->acl_get('m_info', $forum_id)) ? append_sid("{$phpbb_root_path}mcp.$phpEx", "i=main&amp;mode=post_details&amp;f=$forum_id&amp;p=" . $row['post_id'], true, $user->session_id) : '',
		'U_DELETE'			=> ($delete_allowed) ? append_sid("{$phpbb_root_path}posting.$phpEx", "mode=delete&amp;f=$forum_id&amp;p={$row['post_id']}") : '',
		// -- start mod view or mark unread posts
		'U_MARK_UNREAD'		=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", "mu={$row['post_id']}"),
		// -- end mod  view or mark unread posts

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

		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// Replace "YOUR_FORUM_TWITTER_ID" for your forum twitter id, or remove the "(from @YOUR_TWITTER_ID)" from the line if your board doesn't have a twitter id //
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		// Mod_Share_On by JesusADS
		'U_FACEBOOK'	=> 'http://www.facebook.com/share.php?u=' . generate_board_url() . '/viewtopic.php?t='. $topic_data['topic_id'],
		'U_TWITTER'		=> 'http://twitter.com/home?status=' . $topic_data['topic_title'] . ' (from &#064;YOUR_FORUM_TWITTER_ID) '. generate_board_url() . '/viewtopic.php?t=' . $topic_data['topic_id'],
		'U_DIGG'		=> 'http://digg.com/submit?phase=2&url=' . generate_board_url() . '/viewtopic.php?t='. $topic_data['topic_id'] . '&title=' . $topic_data['topic_title'],
		'U_MYSPACE'		=> 'http://www.myspace.com/Modules/PostTo/Pages/?u=' . generate_board_url() . '/viewtopic.php?t='. $topic_data['topic_id'] . '&t=' . $topic_data['topic_title'],
		'U_DELICIOUS' 	=> 'http://delicious.com/post?url=' . generate_board_url() . '/viewtopic.php?t='. $topic_data['topic_id'] . '&title=' . $topic_data['topic_title'],		
		'U_TECHNORATI'	=> 'http://technorati.com/faves?add=' . generate_board_url() . '/viewtopic.php?t='. $topic_data['topic_id'],
		// Mod_Share_On

		// -- phpBB Gallery integration
		'U_GALLERY'			=> $user_cache[$poster_id]['gallery_album'],
		'GALLERY_IMAGES'	=> $user_cache[$poster_id]['gallery_images'],
		'U_GALLERY_SEARCH'	=> $user_cache[$poster_id]['gallery_search'],
		// -- phpBB Gallery integration

		'U_REPORT'			=> ($auth->acl_get('f_report', $forum_id)) ? append_sid("{$phpbb_root_path}report.$phpEx", 'f=' . $forum_id . '&amp;p=' . $row['post_id']) : '',
		'U_MCP_REPORT'		=> ($auth->acl_get('m_report', $forum_id)) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=reports&amp;mode=report_details&amp;f=' . $forum_id . '&amp;p=' . $row['post_id'], true, $user->session_id) : '',
		'U_MCP_APPROVE'		=> ($auth->acl_get('m_approve', $forum_id)) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=queue&amp;mode=approve_details&amp;f=' . $forum_id . '&amp;p=' . $row['post_id'], true, $user->session_id) : '',
		// www.phpBB-SEO.com SEO TOOLKIT BEGIN -> no dupe
		'U_MINI_POST' => @$phpbb_seo->seo_opt['no_dupe']['on'] ? append_sid("{$phpbb_root_path}viewtopic.$phpEx", 't=' . $topic_id . '&amp;f=' . $forum_id . '&amp;start=' . $start ) . '#p' . $row['post_id'] : append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'p=' . $row['post_id'] . (($topic_data['topic_type'] == POST_GLOBAL) ? '&amp;f=' . $forum_id : '')) . '#p' . $row['post_id'],
		// www.phpBB-SEO.com SEO TOOLKIT END -> no dupe
		'U_NEXT_POST_ID'	=> ($i < $i_total && isset($rowset[$post_list[$i + 1]])) ? $rowset[$post_list[$i + 1]]['post_id'] : '',
		'U_PREV_POST_ID'	=> $prev_post_id,
		'U_NOTES'			=> ($auth->acl_getf_global('m_')) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=notes&amp;mode=user_notes&amp;u=' . $poster_id, true, $user->session_id) : '',
		'U_WARN'			=> ($auth->acl_get('m_warn') && $poster_id != $user->data['user_id'] && $poster_id != ANONYMOUS) ? append_sid("{$phpbb_root_path}mcp.$phpEx", 'i=warn&amp;mode=warn_post&amp;f=' . $forum_id . '&amp;p=' . $row['post_id'], true, $user->session_id) : '',

		'POST_ID'			=> $row['post_id'],
		'POSTER_ID'			=> $poster_id,

		'S_HAS_ATTACHMENTS'	=> (!empty($attachments[$row['post_id']])) ? true : false,
		'S_POST_UNAPPROVED'	=> ($row['post_approved']) ? false : true,
		'S_POST_REPORTED'	=> ($row['post_reported'] && $auth->acl_get('m_report', $forum_id)) ? true : false,
		'S_DISPLAY_NOTICE'	=> $display_notice && $row['post_attachment'],
		'S_FRIEND'			=> ($row['friend']) ? true : false,
		'S_UNREAD_POST'		=> $post_unread,
		'S_FIRST_UNREAD'	=> $s_first_unread,
		'S_CUSTOM_FIELDS'	=> (isset($cp_row['row']) && sizeof($cp_row['row'])) ? true : false,
		'S_TOPIC_POSTER'	=> ($topic_data['topic_poster'] == $poster_id) ? true : false,

		// Mod_Share_On by JesusADS		
		'S_SO_STATUS'			=> $config['so_status'],
		'S_SO_USERLOGGEDIN'		=> $config['so_userloggedin'],
		'S_SO_FACEBOOK'			=> $config['so_facebook'],
		'S_SO_TWITTER'			=> $config['so_twitter'],
		'S_SO_ORKUT'			=> $config['so_orkut'],
		'S_SO_DIGG'				=> $config['so_digg'],
		'S_SO_MYSPACE'			=> $config['so_myspace'],
		'S_SO_DELICIOUS' 		=> $config['so_delicious'],
		'S_SO_TECHNORATI'		=> $config['so_technorati'],
		'S_SHARE_ON_FIRST_POST'	=> ($row['post_id'] == $topic_data['topic_first_post_id']) ? true : false,
		// Mod_Share_On
		
		// -- Group list in viewtopic 
        'S_GROUP_LIST'      => $grouplistcolor, 
		// -- Group list in viewtopic 
		'S_IGNORE_POST'		=> ($row['hide_post']) ? true : false,
		// www.phpBB-SEO.com SEO TOOLKIT BEGIN
		'L_IGNORE_POST'		=> ($row['hide_post']) ? sprintf($user->lang['POST_BY_FOE'], get_username_string('full', $poster_id, $row['username'], $row['user_colour'], $row['post_username']), '<a href="' . append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id&amp;p={$row['post_id']}&amp;view=show") . '#p' . $row['post_id'] . '">', '</a>') : '',
		// www.phpBB-SEO.com SEO TOOLKIT END
	);

	if ($portal_config['portal_show_thanks'] == true)
	{
		output_thanks($row['user_id']);
	}
	
//-- mod: Prime Post Revisions ----------------------------------------------//
	$prime_post_revisions->update_postrow($post_list, $i, $rowset, $postrow);
//-- end: Prime Post Revisions ----------------------------------------------//
	
// phpBB arcade integration
	$arcade_data = display_arcade_highscores($poster_id, basename(__FILE__, '.' . $phpEx));
	if (sizeof($arcade_data))
	{
		$postrow = array_merge($postrow, $arcade_data);
	}
// phpBB arcade integration
	
	if (isset($cp_row['row']) && sizeof($cp_row['row']))
	{
		$postrow = array_merge($postrow, $cp_row['row']);
	}

//-- mod: Prime Trash Bin (Posts) -------------------------------------------//
// Set up what we're going to display for the deleted message.
	if (!empty($row['post_deleted_time']))
	{
		include ($phpbb_root_path . 'includes/prime_trash_bin.' . $phpEx);
		set_stifled_post_template_vars($row, $message, $row['post_subject'], $postrow);
	}
	// If there is only one post, and the topic has been deleted, then only display the delete icon if user can permanently delete the topic.
	if ($topic_data['topic_first_post_id'] == $topic_data['topic_last_post_id'] && $topic_data['topic_deleted_time'])
	{
		$postrow['U_DELETE'] = auth_fake_delete('delete', isset($topic_data['forum_id'])) ? $postrow['U_DELETE'] : '';
	}
//-- end: Prime Trash Bin (Posts) -------------------------------------------//

	// Dump vars into template
	$template->assign_block_vars('postrow', $postrow);
	
	// Start Add User Blog Mod ------------------
	if (isset($config['user_blog_enable']) && $config['user_blog_enable'])
	{
		add_blog_links($poster_id, 'postrow.custom_fields', $user_cache[$poster_id]);
	}
	// End Add User Blog Mod --------------------
	
	if (!empty($cp_row['blockrow']))
	{
		foreach ($cp_row['blockrow'] as $field_data)
		{
			$template->assign_block_vars('postrow.custom_fields', $field_data);
		}
	}

	// Display not already displayed Attachments for this post, we already parsed them. ;)
	if (!empty($attachments[$row['post_id']]))
	{
		foreach ($attachments[$row['post_id']] as $attachment)
		{
			$template->assign_block_vars('postrow.attachment', array(
				'DISPLAY_ATTACHMENT'	=> $attachment)
			);
		}
	}

	$prev_post_id = $row['post_id'];

//-- mod: Prime Quick Reply -------------------------------------------------//
	if (empty($row['post_deleted_time']))
	{
		if (!isset($prime_multi_quote_count) || $prime_multi_quote_count < 2)
		{
			unset($last_post); // Don't need to keep more than 1 post if we're not multi-quoting
		}
		$last_post[$row['post_id']] = array('post_text' => $row['post_text'], 'bbcode_uid' => $row['bbcode_uid'], 'username' => $row['username']);
	}
//-- end: Prime Quick Reply -------------------------------------------------//

	unset($rowset[$post_list[$i]]);
	unset($attachments[$row['post_id']]);
}
unset($rowset, $user_cache);

// Update topic view and if necessary attachment view counters ... but only for humans and if this is the first 'page view'
if (isset($user->data['session_page']) && !$user->data['is_bot'] && (strpos($user->data['session_page'], '&t=' . $topic_id) === false || isset($user->data['session_created'])))
{
	$sql = 'UPDATE ' . TOPICS_TABLE . '
		SET topic_views = topic_views + 1, topic_last_view_time = ' . time() . "
		WHERE topic_id = $topic_id";
	$db->sql_query($sql);

	// Update the attachment download counts
	if (sizeof($update_count))
	{
		$sql = 'UPDATE ' . ATTACHMENTS_TABLE . '
			SET download_count = download_count + 1
			WHERE ' . $db->sql_in_set('attach_id', array_unique($update_count));
		$db->sql_query($sql);
	}
}

// Get last post time for all global announcements
// to keep proper forums tracking
if ($topic_data['topic_type'] == POST_GLOBAL)
{
	$sql = 'SELECT topic_last_post_time as forum_last_post_time
		FROM ' . TOPICS_TABLE . '
		WHERE forum_id = 0
		ORDER BY topic_last_post_time DESC';
	$result = $db->sql_query_limit($sql, 1);
	$topic_data['forum_last_post_time'] = (int) $db->sql_fetchfield('forum_last_post_time');
	$db->sql_freeresult($result);

	$sql = 'SELECT mark_time as forum_mark_time
		FROM ' . FORUMS_TRACK_TABLE . '
		WHERE forum_id = 0
			AND user_id = ' . $user->data['user_id'];
	$result = $db->sql_query($sql);
	$topic_data['forum_mark_time'] = (int) $db->sql_fetchfield('forum_mark_time');
	$db->sql_freeresult($result);
}

// Only mark topic if it's currently unread. Also make sure we do not set topic tracking back if earlier pages are viewed.
if (isset($topic_tracking_info[$topic_id]) && $topic_data['topic_last_post_time'] > $topic_tracking_info[$topic_id] && $max_post_time > $topic_tracking_info[$topic_id])
{
	markread('topic', (($topic_data['topic_type'] == POST_GLOBAL) ? 0 : $forum_id), $topic_id, $max_post_time);

	// Update forum info
	$all_marked_read = update_forum_tracking_info((($topic_data['topic_type'] == POST_GLOBAL) ? 0 : $forum_id), $topic_data['forum_last_post_time'], (isset($topic_data['forum_mark_time'])) ? $topic_data['forum_mark_time'] : false, false);
}
else
{
	$all_marked_read = true;
}

// If there are absolutely no more unread posts in this forum and unread posts shown, we can savely show the #unread link
if ($all_marked_read)
{
	if ($post_unread)
	{
		$template->assign_vars(array(
			'U_VIEW_UNREAD_POST'	=> '#unread',
		));
	}
	else if (isset($topic_tracking_info[$topic_id]) && $topic_data['topic_last_post_time'] > $topic_tracking_info[$topic_id])
	{
		$template->assign_vars(array(
			'U_VIEW_UNREAD_POST'	=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id&amp;view=unread") . '#unread',
		));
	}
}
else if (!$all_marked_read)
{
	$last_page = ((floor($start / $config['posts_per_page']) + 1) == max(ceil($total_posts / $config['posts_per_page']), 1)) ? true : false;

	// What can happen is that we are at the last displayed page. If so, we also display the #unread link based in $post_unread
	if ($last_page && $post_unread)
	{
		$template->assign_vars(array(
			'U_VIEW_UNREAD_POST'	=> '#unread',
		));
	}
	else if (!$last_page)
	{
		$template->assign_vars(array(
			'U_VIEW_UNREAD_POST'	=> append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=$forum_id&amp;t=$topic_id&amp;view=unread") . '#unread',
		));
	}
}

// let's set up quick_reply
$s_quick_reply = false;
if ($user->data['is_registered'] && $config['allow_quick_reply'] && ($topic_data['forum_flags'] & FORUM_FLAG_QUICK_REPLY) && $auth->acl_get('f_reply', $forum_id))
{
	// Quick reply enabled forum
	$s_quick_reply = (($topic_data['forum_status'] == ITEM_UNLOCKED && $topic_data['topic_status'] == ITEM_UNLOCKED) || $auth->acl_get('m_edit', $forum_id)) ? true : false;
}

if ($s_can_vote || $s_quick_reply)
{
	add_form_key('posting');

	if ($s_quick_reply)
	{
		$s_attach_sig	= $config['allow_sig'] && $user->optionget('attachsig') && $auth->acl_get('f_sigs', $forum_id) && $auth->acl_get('u_sig');
		$s_smilies		= $config['allow_smilies'] && $user->optionget('smilies') && $auth->acl_get('f_smilies', $forum_id);
		$s_bbcode		= $config['allow_bbcode'] && $user->optionget('bbcode') && $auth->acl_get('f_bbcode', $forum_id);
		$s_notify		= $config['allow_topic_notify'] && ($user->data['user_notify'] || $s_watching_topic['is_watching']);

		$qr_hidden_fields = array(
			'topic_cur_post_id'		=> (int) $topic_data['topic_last_post_id'],
			'lastclick'				=> (int) time(),
			'topic_id'				=> (int) $topic_data['topic_id'],
			'forum_id'				=> (int) $forum_id,
		);

		// Originally we use checkboxes and check with isset(), so we only provide them if they would be checked
		(!$s_bbcode)					? $qr_hidden_fields['disable_bbcode'] = 1		: true;
		(!$s_smilies)					? $qr_hidden_fields['disable_smilies'] = 1		: true;
		(!$config['allow_post_links'])	? $qr_hidden_fields['disable_magic_url'] = 1	: true;
		($s_attach_sig)					? $qr_hidden_fields['attach_sig'] = 1			: true;
		($s_notify)						? $qr_hidden_fields['notify'] = 1				: true;
		($topic_data['topic_status'] == ITEM_LOCKED) ? $qr_hidden_fields['lock_topic'] = 1 : true;

		$template->assign_vars(array(
			'S_QUICK_REPLY'			=> true,
			'U_QR_ACTION'			=> append_sid("{$phpbb_root_path}posting.$phpEx", "mode=reply&amp;f=$forum_id&amp;t=$topic_id"),
			'QR_HIDDEN_FIELDS'		=> build_hidden_fields($qr_hidden_fields),
			'SUBJECT'				=> 'Re: ' . censor_text($topic_data['topic_title']),
		));
	}
}
// now I have the urge to wash my hands :(


// We overwrite $_REQUEST['f'] if there is no forum specified
// to be able to display the correct online list.
// One downside is that the user currently viewing this topic/post is not taken into account.
if (empty($_REQUEST['f']))
{
	$_REQUEST['f'] = $forum_id;
}

// We need to do the same with the topic_id. See #53025.
if (empty($_REQUEST['t']) && !empty($topic_id))
{
	$_REQUEST['t'] = $topic_id;
}

//-- mod: Prime Trash Bin (Topics) ------------------------------------------//
if ($topic_deleted)
{
	$template_vars = set_stifled_topic_template_vars($topic_data, $topic_data['topic_title'], ($blockname = true));

	// This will become the page's title (in the browser's title bar).
	$topic_data['topic_title'] = $template_vars['TOPIC_TITLE'];
}
//-- end: Prime Trash Bin (Topics) ------------------------------------------//

// www.phpBB-SEO.com SEO TOOLKIT BEGIN - Related Topics
if (!empty($config['seo_related'])) {
	require($phpbb_root_path . "phpbb_seo/phpbb_seo_related.$phpEx");
	$seo_related = new seo_related();
	$seo_related->get($topic_data, $forum_id);
}
// www.phpBB-SEO.com SEO TOOLKIT END - Related Topics

// Output the page
// www.phpBB-SEO.com SEO TOOLKIT BEGIN - TITLE
$extra_title = ($start > 0) ? ' - ' . $user->lang['Page'] . ( floor( ($start / $config['posts_per_page']) ) + 1 ) : '';
page_header($topic_data['topic_title'] . ' : ' .  $topic_data['forum_name'] . $extra_title, true, $forum_id);
// www.phpBB-SEO.com SEO TOOLKIT END - TITLE

//-- mod: Prime Post Revisions ----------------------------------------------//
$prime_post_revisions->assign_template_variables($viewtopic_url, $viewtopic_title);
//-- end: Prime Post Revisions ----------------------------------------------//

// Begin similar topics
$sql_array = array(
	'SELECT'	=> 'f.*, t.*, u.user_id, u.username, u.user_colour',

	'FROM'		=> array(
		TOPICS_TABLE	=> 't',
	),

	'LEFT_JOIN'	=> array(
		array(
			'FROM'	=>	array(USERS_TABLE	=> 'u'),
			'ON'	=> 'u.user_id = t.topic_poster'
	),
		array(
			'FROM'	=>	array(FORUMS_TABLE	=> 'f'),
			'ON'	=> 'f.forum_id = t.forum_id'
		),
	),

	'WHERE'		=> "MATCH (t.topic_title) AGAINST ('" . $db->sql_escape($topic_data['topic_title']) . "' IN BOOLEAN MODE)
		AND t.topic_status <> " . ITEM_MOVED . '
		AND t.topic_id <> ' . (int) $topic_data['topic_id'],

	'GROUP_BY'	=> 't.topic_id',

	'ORDER_BY'	=> 'rand()',
);
$sql = $db->sql_build_query('SELECT', $sql_array);
if ($result = $db->sql_query_limit($sql, 5))
{
	while($similar = $db->sql_fetchrow($result))
	{
		if ($auth->acl_get('f_list', $similar['forum_id']))
		{
			
          if ($similar['topic_status'] == ITEM_MOVED) {
             $similar['topic_id'] = $similar['topic_moved_id'];
          }
		  
			 // www.phpBB-SEO.com SEO TOOLKIT BEGIN -> no dupe
			 if (@$phpbb_seo->seo_opt['no_dupe']['on']) {   
				if ($auth->acl_get('m_approve', $similar['forum_id'])) {
				   $similar['forum_topics'] = $similar['forum_topics_real'];
				   $replies = $similar['topic_replies_real'];
				} else {
				   $similar['forum_topics'] = $similar['forum_topics'];
				   $replies = $similar['topic_replies'];
				}
				if (($replies + 1) > $phpbb_seo->seo_opt['topic_per_page']) {
				   $phpbb_seo->seo_opt['topic_last_page'][$similar['topic_id']] = floor($replies / $phpbb_seo->seo_opt['topic_per_page']) * $phpbb_seo->seo_opt['topic_per_page'];
				}
			 } else {
				$row['forum_topics'] = ($auth->acl_get('m_approve', $similar['forum_id'])) ? $similar['forum_topics_real'] : $similar['forum_topics'];
			 }
			 // www.phpBB-SEO.com SEO TOOLKIT END -> no dupe
	   
			$similar_forum_url	= append_sid("{$phpbb_root_path}viewforum.$phpEx", "f=" . $similar['forum_id']);
			// call by last post id			
//			$similar_topic_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $similar['forum_id'] . '&amp;t=' . $similar['topic_id'] . '&amp;start=' . @intval($phpbb_seo->seo_opt['topic_last_page'][$similar['topic_id']]) ) . '#p' . $similar['topic_last_post_id'];			

			// call by first post id			
			$similar_topic_url = append_sid("{$phpbb_root_path}viewtopic.$phpEx", 'f=' . $similar['forum_id'] . '&amp;t=' . $similar['topic_id'] . '&amp;start=' . @intval($phpbb_seo->seo_opt['topic_last_page'][$similar['topic_id']]) ) . '#p' . $similar['topic_first_post_id'];			
			// call by topic id			
//			$similar_topic_url	= append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=" . $similar['forum_id'] . '&amp;t=' . $similar['topic_id']);
			$similar_user		= get_username_string('full', $similar['user_id'], $similar['username'], $similar['user_colour'], $similar['username']);

			$template->assign_block_vars('similar', array(
				'TOPIC_TITLE'			=> $similar['topic_title'],
				'U_TOPIC'				=> $similar_topic_url,
				'REPLIES'				=> $similar['topic_replies'],
				'USER'					=> $similar_user,
				'U_FORUM'				=> $similar_forum_url,
				'FORUM'					=> $similar['forum_name'])
			);
		}
	}
}
// End Similar Topics


/*
* switch template if the portal index/viewtopic is active
*/
	if (defined('PORTAL_INDEX_PAGE')) {
	$template->set_filenames(array(
		'body' => ($view == 'print') ? 'portal/portal_viewtopic_print.html' : 'portal/portal_viewtopic_body.html',
		));
	}
	else {
	$template->set_filenames(array(
		'body' => ($view == 'print') ? 'viewtopic_print.html' : 'viewtopic_body.html',
		));
	}

make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"), $forum_id);

//-- mod: Prime Quick Reply -------------------------------------------------//
include($phpbb_root_path . 'includes/prime_quick_reply.' . $phpEx);
$prime_quick_reply->display_form($topic_id, $forum_id, $topic_data, ($last_post = isset($last_post) ? $last_post : null));
//-- end: Prime Quick Reply -------------------------------------------------//

page_footer();

?>