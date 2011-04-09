<?php
define('IN_PHPBB', true);
$phpbb_root_path = '../../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();
$id = request_var('id', 0);
$mode = request_var('mode', 'outside');
require($phpbb_root_path . 'mods/toplist_mod/core.class.php');
$toplist_class = new toplist_class();
$toplist_class->image_handling($mode,$id);
?>