<?php
/**
*
* @name portal_bbcodes.php
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_bbcodes.php,v 1.0 2010/04/28 damysterious Exp $
*
* @copyright (c) 2007, 2010 Portal XL Group
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

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup(array('memberlist', 'mods/portal_xl'));

$start = request_var('start', 0);
$limit = $portal_config['portal_attachments_number'];

// count the bbcodes
$sql = 'SELECT COUNT(bbcode_id) AS total_bbcodes
    FROM ' . BBCODES_TABLE;
$result = $db->sql_query($sql);
$total_bbcodes = (int) $db->sql_fetchfield('total_bbcodes');
$db->sql_freeresult($result);

// set sorting options
$default_key = 'a';
$sort_key = request_var('sk', $default_key);
$sort_dir = request_var('sd', 'a');

// begin borrowed from memberlist.php
$sort_key_sql = array('a' => 'b.bbcode_tag', 'b' => 'b.bbcode_helpline', 'c' => 'b.bbcode_tpl');

// initialize $first_char...others are below
$first_char = request_var('first_char', '');

$sql_where = ' b.bbcode_id = b.bbcode_id';

if ($first_char == 'other')
{
   for ($i = 97; $i < 123; $i++)
   {
      $sql_where .= ' AND b.bbcode_tag NOT ' . $db->sql_like_expression(chr($i) . $db->any_char);
   }
}
else if ($first_char)
{
   $sql_where .= ' AND b.bbcode_tag ' . $db->sql_like_expression(substr($first_char, 0, 1) . $db->any_char);
}

// Sorting and order
if (!isset($sort_key_sql[$sort_key]))
{
   $sort_key = $default_key;
}

$order_by = $sort_key_sql[$sort_key] . ' ' . (($sort_dir == 'a') ? 'ASC' : 'DESC');

// Build a relevant pagination_url
$params = $sort_params = array();

// We do not use request_var() here directly to save some calls (not all variables are set)
$check_params = array(
   'sk'            		=> array('sk', $default_key),
   'sd'            		=> array('sd', 'a'),
   'bbcode_id'     		=> array('bbcode_id', ''),
   'bbcode_tag'   		=> array('bbcode_tag', '', true),
   'bbcode_helpline'    => array('bbcode_helpline', ''),
   'bbcode_tpl'      	=> array('bbcode_tpl', ''),
   'first_char'    		=> array('first_char', ''),
);

foreach ($check_params as $key => $call)
{
   if (!isset($_REQUEST[$key]))
   {
      continue;
   }

   $param = call_user_func_array('request_var', $call);
   $param = urlencode($key) . '=' . ((is_string($param)) ? urlencode($param) : $param);
   $params[] = $param;

   if ($key != 'sk' && $key != 'sd')
   {
      $sort_params[] = $param;
   }
}

$pagination_url = append_sid("{$phpbb_root_path}portal/portal_bbcodes.$phpEx", implode('&amp;', $params));
$sort_url = append_sid("{$phpbb_root_path}portal/portal_bbcodes.$phpEx", implode('&amp;', $sort_params));
unset($params, $sort_params);
// end borrowed from memberlist.php

// grab the bbcodes
$sql_ary = array(
  'SELECT'   => 'b.*',
  'FROM' => array(
	BBCODES_TABLE => 'b',
	),
  'WHERE' => $sql_where,
  'ORDER_BY' => $order_by,	
  );
$result = $db->sql_query_limit($db->sql_build_query('SELECT', $sql_ary), $limit, $start);

// did we got some bbcodes?
while ($row = $db->sql_fetchrow($result))
{
  $template->assign_block_vars('bbcodes', array(
//		'BBCODE_ID'        => $row['bbcode_id'],
	  'BBCODE_DISPLAY'   => ($row['display_on_posting'] == 1) ? $user->lang['YES'] : $user->lang['NO'],
	  'BBCODE_CODE'      => $row['bbcode_tag'],
	  'BBCODE_HELP'      => $row['bbcode_helpline'],
	  'BBCODE_TPL'       => htmlentities($row['bbcode_tpl'], ENT_QUOTES),
	  'BBCODE_ICON'	   => ($row['bbcode_tag']) ? '<img src="' . $phpbb_root_path . 'styles/' . $user->theme['imageset_path'] . '/imageset/bbcode_box/' . $row['bbcode_tag'] . '.png" height="16" width="16" align="absmiddle" />' : '<img src="' . $phpbb_root_path . 'portal/images/icon_menu/blank.gif'. '" height="16" width="16" align="absmiddle" />',
	  ));
}
$db->sql_freeresult($result);

// www.phpBB-SEO.com SEO TOOLKIT BEGIN
$seo_sep = strpos($sort_url, '?') === false ? '?' : '&amp;';
// www.phpBB-SEO.com SEO TOOLKIT END

// generate page
$template->assign_vars(array(
    'PAGINATION'    => generate_pagination($pagination_url, $total_bbcodes, $limit, $start),
	'PAGE_NUMBER'	=> on_page($total_bbcodes, $limit, $start),
	'TOTAL_BBCODES'	=> ($total_bbcodes == 1) ? $user->lang['BBCODE_COUNT'] : sprintf($user->lang['BBCODE_COUNT'], $total_bbcodes),
   
	// www.phpBB-SEO.com SEO TOOLKIT BEGIN
	'U_SORT_BBCODE_CODE'   	=> $sort_url . $seo_sep . 'sk=a&amp;sd=' . (($sort_key == 'a' && $sort_dir == 'a') ? 'd' : 'a'),
	'U_SORT_BBCODE_HELP' 	=> $sort_url . $seo_sep . 'sk=b&amp;sd=' . (($sort_key == 'b' && $sort_dir == 'a') ? 'd' : 'a'),     
    'U_SORT_BBCODE_TPL'   	=> $sort_url . $seo_sep . 'sk=c&amp;sd=' . (($sort_key == 'c' && $sort_dir == 'a') ? 'd' : 'a'),
	// www.phpBB-SEO.com SEO TOOLKIT END
	
	// www.phpBB-SEO.com SEO TOOLKIT BEGIN
	// Here we circumvent because our append_sid does not allow
	// an url to end with an ?, as it should.
	'S_MODE_ACTION'		=> $pagination_url . (strpos($pagination_url, '?') !== false ? '' : '?')
	// www.phpBB-SEO.com SEO TOOLKIT END
	));

// Output the page
page_header($config['sitename'] . ' : ' . $user->lang['BBCODES_TITLE']);

// Set up the Navlinks for the forums navbar
$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'       => $user->lang['BBCODES_TITLE'],
	'U_VIEW_FORUM'     => append_sid("{$phpbb_root_path}portal/portal_bbcodes.$phpEx")
	));

$template->set_filenames(array(
    'body' => 'portal/portal_bbcodes_body.html'
	));

make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));

page_footer();

?>