<?php
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
$lang = array_merge($lang, array(
    'TOPLIST_MOD' => 'Toplist MOD',
    'INSTALL_TOPLIST_MOD' => 'Toplist MOD Installation',
    'INSTALL_TOPLIST_MOD_CONFIRM' => 'Are you sure you want to install the Toplist MOD?',
    'UPDATE_TOPLIST_MOD' => 'Toplist MOD Update',
    'UPDATE_TOPLIST_MOD_CONFIRM' => 'Are you sure you want to update the Toplist MOD?',
    'UNINSTALL_TOPLIST_MOD' => 'Toplist MOD Uninstall',
    'UNINSTALL_TOPLIST_MOD_CONFIRM' => 'Are you sure you want to uninstall the Toplist MOD?',
));
?>