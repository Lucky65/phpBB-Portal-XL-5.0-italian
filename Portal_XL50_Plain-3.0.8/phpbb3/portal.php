<?php
/*
*
* @name portal.php
* @package phpBB3 Portal XL 5.0
* @version $Id: portal.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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
* initalise some global variables
*/
global $db, $auth, $user, $template, $SID, $_SID;
global $phpbb_root_path, $phpEx, $config, $portal_config;

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/portal_xl');

/**
* Automatically daylight switch Summer/Winter Time for Europe
* Timezones other than user_timezone = '1.00' will not be affected.
* Changes will have place on last Saturday in March (Summertime) or
* on last Saturday in October (Wintertime) if that time/date is reached only.
*/
automatic_timezone_daylight_switch();

/**
* Automatic Update portal page views if counter block is disabled
*/
$sql = "SELECT block_name, block_disable
    FROM  " . PORTAL_BLOCK_TABLE ." 
	ORDER by block_id ASC";
    $result = $db->sql_query($sql);
	while ($row = $db->sql_fetchrow($result))
	{
		if (($row['block_name'] == 'digits_counter.html') & ($row['block_disable'] == 1))
		{
			$sql = "UPDATE " . PORTAL_CONFIG_TABLE . "
			SET config_value = config_value + 1
			WHERE config_name = 'portal_visit_counter'";
			$db->sql_query($sql);
		}
	}
	$db->sql_freeresult($result);

display_forums('', $config['load_moderators']);

/*
* output the page
*/
page_header($user->lang['PORTAL']);

/*
* include here to load all availabe block modules
*/
if (defined('PORTAL')) {
include_once($phpbb_root_path . 'portal/includes/functions.'.$phpEx);
include_once($phpbb_root_path . 'portal/includes/portal_blocks.' . $phpEx);
include_once($phpbb_root_path . 'portal/includes/functions_blocks_portal.' . $phpEx);
}

/*
* switch template if dag'n drop is on/off
*/
	if ($portal_config['portal_drag_drop'] == true)
	{
	$template->set_filenames(array(
		'body' => 'portal/portal_main_draggable.html',
		));
	}
	else
	{
	$template->set_filenames(array(
		'body' => 'portal/portal_main.html',
		));
	}

$template->assign_vars(array(
	'PORTAL'					=> defined('PORTAL') ? true : false,		
	'PORTAL_INDEX_PAGE'			=> ($portal_config['portal_index_layout']) ? true : false,
	));

make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));

page_footer();

?>