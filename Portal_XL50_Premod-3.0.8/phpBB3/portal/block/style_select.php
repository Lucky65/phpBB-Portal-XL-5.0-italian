<?php
/*
*
* @name style_select.php
* @package phpBB3 Portal XL
* @version $Id: style_select.php,v 1.3 2009/05/25 14:19:18 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/
global $lang;

/*
* Start session management
*/
$user->setup('mods/portal_xl');

/*
* Begin select styles
*/
$style = request_var('style', 0);
	
$sql = 'SELECT style_id, style_name
	FROM ' . STYLES_TABLE . '
	WHERE style_active = 1 
	ORDER BY style_name ASC';
$result = $db->sql_query($sql);
$num_styles = sizeof($db->sql_fetchrowset($result));
$result = $db->sql_query($sql);

$style_select = '<option selected="selected" disabled="disabled">' . $user->lang['STYLE_SELECT'] . '</option>';
while ($row = $db->sql_fetchrow($result))
{
	$selected = ( $style == $row['style_id'] ) ? ' selected="selected"' : '';
	$style_value = append_sid("{$phpbb_root_path}portal.$phpEx", 'style=' . $row['style_id']);
	$style_select .= '<option value="' . $style_value . '"' . $selected . '>&nbsp;' . $row['style_name'] . '&nbsp;</option>';
}
$db->sql_freeresult($result);

// Assign template specific vars
$template->assign_vars(array(
	'S_STYLE_ACTION'	=> append_sid("{$phpbb_root_path}portal.$phpEx"),
	'STYLE_NAME' 		=> $row['style_name'],
	'STYLE_SELECT' 		=> $style_select,
	'S_TOTAL_STYLES'	=> $num_styles,
	'L_BOARD_STYLE'		=> $user->lang['BOARD_STYLES'],
	'L_VIEW_STYLES'		=> $user->lang['VIEW_STYLES'],
	'L_TOTAL_STYLES'	=> $user->lang['TOTAL_STYLES'],
	));

/*
* Begin select language
*/
$lang = request_var('lang', 0);
	
$sql = 'SELECT lang_id, lang_local_name, lang_dir
	FROM ' . LANG_TABLE . '
	ORDER BY lang_local_name ASC';
$result = $db->sql_query($sql);
$num_langs = sizeof($db->sql_fetchrowset($result));
$result = $db->sql_query($sql);

$lang_select = '<option selected="selected" disabled="disabled">' . $user->lang['LANGUAGE_SELECT'] . '</option>';
while ($row = $db->sql_fetchrow($result))
{
	$selected = ( $lang == $row['lang_id'] ) ? ' selected="selected"' : '';
	// $lang_value = append_sid("{$phpbb_root_path}portal.$phpEx", 'lang=' . $row['lang_dir']);
	$lang_value = $_SERVER['PHP_SELF'] . '?lang=' . $row['lang_dir'];
	$lang_select .= '<option value="' . $lang_value . '"' . $selected . '>&nbsp;' . $row['lang_local_name'] . '&nbsp;</option>';
}
$db->sql_freeresult($result);

// Assign template specific vars
$template->assign_vars(array(
	'S_LANGUAGE_ACTION'	=> append_sid("{$phpbb_root_path}portal.$phpEx"),
	'LANGUAGE_NAME' 	=> $row['lang_local_name'],
	'LANGUAGE_SELECT' 	=> $lang_select,
	'S_TOTAL_LANGUAGE'	=> $num_langs,
	'L_BOARD_LANGUAGE'	=> $user->lang['BOARD_LANGUAGE'],
	'L_VIEW_LANGUAGE'	=> $user->lang['VIEW_LANGUAGE'],
	'L_TOTAL_LANGUAGE'	=> $user->lang['TOTAL_LANGUAGE'],
	));

// Assign template specific vars
$template->assign_vars(array(
	'S_STYLE_OPTIONS'			=> ($config['override_user_style']) ? '' : style_select($user->data['user_style']),
	'S_DISPLAY_CHANGE_STYLE'	=> true,
	));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/style_select.html',
	));

?>