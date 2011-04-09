<?php
/** 
*
* @author Tobi Schäfer http://www.phpbb-seo.de/
*
* @package phpBB3
* @version $Id: impressum.php,v 1.2 2009/05/26 15:28:04 damysterious Exp $
* @copyright (c) 2008 SEO phpBB phpbb-seo.de
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

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/impressum');

// Select Data from DB
$sql = 'SELECT value, aktiv
	FROM ' . IMPRESSUM_TABLE . '
	ORDER BY name';
$result = $db->sql_query($sql);

for ($i = 1; $row = $db->sql_fetchrow($result); $i++)
{
	$value[$i] = $row['value'];
	if ($row['aktiv'] != '0')
	{
		$show[$i] = true;
	}
	$template->assign_vars(array(
		'T' . $i  => isset($show[$i]) ? $value[$i] : '',
	));
}
$db->sql_freeresult($result);

$template->assign_vars(array(
	'TXT_TOP1' 			=> $user->lang['TXT_TOP1'],
	'TXT_TOP2' 			=> sprintf($user->lang['TXT_TOP2'], $config['sitename'], $value['2']),
	'TXT_TOP3' 			=> $user->lang['TXT_TOP3'],
	'TXT_DISCLAIMER' 	=> sprintf($user->lang['DISCLAIMER_TXT'], $config['sitename'], generate_board_url())
	));

// Output the page
page_header($config['sitename'] . ' : ' . $user->lang['IMPRESSUM']);

$template->assign_block_vars('navlinks', array(
	'FORUM_NAME'	=> $user->lang['IMPRESSUM'],
	'U_IMPRESSUM'	=> append_sid("{$phpbb_root_path}impressum.$phpEx"),
));

$template->set_filenames(array(
	'body' => 'impressum.html')
);

page_footer();

?>