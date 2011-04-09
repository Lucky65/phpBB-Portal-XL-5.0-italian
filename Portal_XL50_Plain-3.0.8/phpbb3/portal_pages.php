<?php
/*
*
* @name portal_pages.php
* @package phpBB3 Portal XL
* @version $Id: portal_pages.php,v 1.3 2009/10/06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/

/**
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

/**
* Initalise some global variables
*/
global $db, $auth, $user, $template, $portal_blog_block_view, $start;
global $phpbb_root_path, $phpEx, $config, $portal_config, $bbcode_bitfield;

/*
* Start session management
*/
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/portal_xl');

/*
* Begin script here
*/
$portal_pages_page = ($portal_config['portal_pages_page']) ? true : false;
$portal_pages_page_number = $portal_config['portal_pages_page_number'];

/*
* include portal block management if portal is active
*/
if (defined('PORTAL_PAGE')) {
  include_once($phpbb_root_path . 'portal/includes/functions.'.$phpEx);
  include_once($phpbb_root_path . 'portal/includes/portal_pages_blocks.' . $phpEx);
  include_once($phpbb_root_path . 'portal/includes/functions_blocks_portal_pages.' . $phpEx);
}

if($portal_pages_page == true)
{
	// pagination		
	$start = request_var('pgs', 0);
	$start = ($start > 0) ? 0 : $start;
	$pages_limit = '1';	// activate the pagination after this value
		
	// List single page
	$pages = str_replace(',','', str_split($portal_pages_page_number, 2)); 
  
	$sql = 'SELECT page_id, page_title, page_content, page_alias, page_position
			FROM ' . PORTAL_PAGES_TABLE . ' 
			WHERE ' . $db->sql_in_set('page_id', $pages) . ' 
			AND page_title = "portal_pages.html"
			AND page_disable = 0
		GROUP BY page_id, page_title';
	$result = $db->sql_query($sql);
	$num_pages = sizeof($db->sql_fetchrowset($result));
	$result = $db->sql_query_limit($sql, $pages_limit, $start);
  
	// Now write that data into the $portal_pagerow array
	$pagepage = array();
	while($row = $db->sql_fetchrow($result))
	{
		$pagepage[] = $row;
	}
 
	if (!sizeof($pagepage))
	{
		trigger_error($user->lang['PAGES_NONE_EXIST']);
	}
  
	$template->set_filenames(array(
		'body' => 'portal/portal_pages_page_body.html',
		));
  
	for ($i = 0 ; $i < sizeof($pagepage); $i++)
	{
		if ($pagepage[$i]['enable_bbcode'] !== '0')
		{
			include_once($phpbb_root_path . 'includes/bbcode.' . $phpEx);
			$bbcode = new bbcode(base64_encode($bbcode_bitfield));
			$bbcode->bbcode_second_pass($pagepage[$i]['page_content'], $pagepage[$i]['enable_bbcode'], $pagepage[$i]['enable_smilies']);
			
			// Always process smilies after parsing bbcodes
			$pagepage_content = smilie_text($pagepage[$i]['page_content']);
		
			// Parse the message and subject
			$pagepage_content = censor_text($pagepage_content);
	
			// show embedded smilies
			$pagepage_content = smilies_pass($pagepage_content);
		}
			
		if ($portal_config['portal_acronyms_allow'] == true)
		{
			include_once($phpbb_root_path . 'portal/includes/functions_acronym.' . $phpEx);
			$pagepage_content = acronym_pass($pagepage_content);
		}
	
		$template->assign_block_vars('pagepage', array(
		  'PAGEPAGE_TITLE'		=> $pagepage[$i]['page_alias'],
		  'PAGEPAGE_CONTENT'	=> htmlspecialchars_decode($pagepage_content),
		  'U_PORTAL_PAGES'		=> append_sid("{$phpbb_root_path}portal_pages.$phpEx"),
		  "S_ROW_COUNT" 		=> $i,
		));

		if ($num_pages <> 0)
		{
		  $template->assign_vars(array(
			'PAGE_PAGES_PAGINATION'   	=> generate_repository(append_sid("{$phpbb_root_path}portal_pages.$phpEx"), $num_pages, $pages_limit, $start, 'portalpages'),
			'PAGE_PAGES_NUMBER'       	=> on_page($num_pages, $pages_limit, $start),
			'PAGE_PAGES_TOTAL'	      	=> $num_pages,
			'S_NUM_PAGES' 				=> ($i < count($num_pages) - 1) ? true : false,
			'TOTAL_PAGE_PAGES'	  		=> $user->lang['TOTAL_PAGE_PAGES'],
		  ));  
		}
		// pagination		
		$db->sql_freeresult($result);
	}
}
else
{
	// The $_GET variables
	if (isset($_GET["page"])) 
	{
		$page_id = $_GET['page'];
	} 
	else 
	{
		$page_id = array();
	}
	
	// Get the Page Data if the $get stuff is set
	if($page_id == true)
	{
		$sql = 'SELECT * 
				FROM ' . PORTAL_PAGES_TABLE . ' 
				WHERE page_id = "' . (int) $page_id . '" 
				AND ' . $db->sql_in_set('page_view', $portal_page_block_view) . '
				AND page_disable = 0
				LIMIT 1';
		$result = $db->sql_query($sql);
	
		// Now write that data into the $portal_page array
		$portal_page = array();
		if (!$portal_page = $db->sql_fetchrow($result))
		{
			trigger_error($user->lang['PAGES_NOT_EXIST']);
		}
		$db->sql_freeresult($result);
	
		$template->set_filenames(array(
			'body' => 'portal/portal_pages_body.html',
			));
	
		if ($portal_page['enable_bbcode'] !== '0')
		{
			include_once($phpbb_root_path . 'includes/bbcode.' . $phpEx);
			$bbcode = new bbcode(base64_encode($bbcode_bitfield));
			$bbcode->bbcode_second_pass($portal_page['page_content'], $portal_page['enable_bbcode'], $portal_page['enable_smilies']);
			
			// Always process smilies after parsing bbcodes
			$page_content = smilie_text($portal_page['page_content']);
		
			// Parse the message and subject
			$page_content = censor_text($page_content);
	
			// show embedded smilies
			$page_content = smilies_pass($page_content);
		}
			
		if ($portal_config['portal_acronyms_allow'] == true)
		{
			include_once($phpbb_root_path . 'portal/includes/functions_acronym.' . $phpEx);
			$page_content = acronym_pass($page_content);
		}
	
		$template->assign_vars(array(
			'PORTAL_PAGE_TITLE'	=> $portal_page['page_alias'],
			'PORTAL_PAGE_CONTENT'	=> htmlspecialchars_decode($page_content),
			'U_PORTAL_PAGES'		=> append_sid("{$phpbb_root_path}portal_pages.$phpEx"),
			'L_PAGE_TITLE'		=> $user->lang['PAGES_NONE_EXIST'],
			));
	}
	else // List all Pages
	{
		$sql = 'SELECT page_id, page_title, page_content, page_alias
				FROM ' . PORTAL_PAGES_TABLE.' WHERE page_disable=0';
		$result = $db->sql_query($sql);
	
		// Now write that data into the $portal_pagerow array
		$portal_pagerow = array();
		while($row = $db->sql_fetchrow($result))
		{
			$portal_pagerow[] = $row;
		}
	
		if (!sizeof($portal_pagerow))
		{
			trigger_error($user->lang['PAGES_NONE_EXIST']);
		}
	
		for ($i = 0 ; $i < sizeof($portal_pagerow); $i++)
		{
			$template->assign_block_vars('pagerow',	array(
				'PORTAL_PAGEROW_TITLE' 	=> $portal_pagerow[$i]['page_alias'],
				'PORTAL_PAGEROW_CONTENT' 	=> $portal_pagerow[$i]['page_content'],
				'U_PAGES' 		        => append_sid("{$phpbb_root_path}portal_pages.$phpEx?page=" . $portal_pagerow[$i]['page_id']),
				));
		}
	
		$template->set_filenames(array(
			'body' => 'portal/portal_pages_list_body.html',
			));
	}
}

$template->assign_vars(array(
	'L_PAGES_LIST_TITLE'	=> $user->lang['PAGES_LIST_TITLE'],
	'L_PAGES_VIEW_FULL'		=> $user->lang['PAGES_VIEW_FULL'],
	));

/**
* Output the basic page
*/
page_header($user->lang['PAGES_LIST_TITLE']);

$template->assign_block_vars('navlinks', array(
	'U_VIEW_FORUM'	=> append_sid("{$phpbb_root_path}portal_pages.$phpEx"),
	'FORUM_NAME'	=> $user->lang['PAGES_LIST_TITLE'],
));

make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));

page_footer();

?> 