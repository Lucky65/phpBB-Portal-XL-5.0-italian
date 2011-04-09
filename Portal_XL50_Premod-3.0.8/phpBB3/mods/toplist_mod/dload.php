<?php
define('IN_PHPBB', true);
$phpbb_root_path = '../../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.'.$phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();
$id = request_var('id', 0);
$mode = request_var('mode', '');
if(!$id)
{
	die('Location: ' . append_sid($phpbb_root_path . 'toplist.' . $phpEx));
	exit;
}
if(!$mode)
{
	if(!$id)
	{
		die('Location: ' . append_sid($phpbb_root_path . 'toplist.' . $phpEx));
		exit;
	}
	else
	{
		header('Location: ' . append_sid($phpbb_root_path . 'toplist.' . $phpEx . '?mode=site_view&w=in&id=' . $id));
		exit;
	}
}
require($phpbb_root_path . 'mods/toplist_mod/core.class.php');
$toplist_class = new toplist_class();
$toplist_class->hits_handling('in',$id);
?>