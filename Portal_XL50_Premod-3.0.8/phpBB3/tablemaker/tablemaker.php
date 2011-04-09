<?php 

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin(); 
$user->setup(); 
$auth->acl($user->data); 
$user->setup('mods/lang_tablemaker');

// Header
page_header('phpbb3-Tablemaker'); 

// Output page
$template->set_filenames(array( 
   'body' => 'tablemaker.html') 
); 

// Footer 
page_footer(); 

?>