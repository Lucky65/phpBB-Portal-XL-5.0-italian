<?php 
// -------------------------------------------------------------
//
// FILENAME  : toplist.php
// STARTED   : Wensday November 29, 2005
// COPYRIGHT : © 2005 - 2008 WyriHaximus
// WWW       : http://wyrihaximus.net/projects/toplist-mod-2/
// LICENCE   : GPL vs2.0 [ see /docs/COPYING ]
//
// -------------------------------------------------------------

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
if(class_exists('bbcode'))
{
	include($phpbb_root_path . 'includes/bbcode.' . $phpEx);
}
include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
include($phpbb_root_path . 'includes/message_parser.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/toplist');

$mode	= request_var('mode', '');

if(!isset($toplist_class))
{
	include($phpbb_root_path . 'mods/toplist_mod/core.class.php');
	$toplist_class = new toplist_class;
}

list($tpl_file,$page_title) = $toplist_class->gen_page($mode);
page_header($page_title);

$template->set_filenames(array(
	'body' => 'toplist/' . $tpl_file)
);

page_footer();

?>