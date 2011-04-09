<?php
/**
*
* @name center_ranks.php
* @package phpBB3 Portal XL 5.0
* @version $Id: center_ranks.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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

/*
* Start session management
*/
$user->setup('mods/ranks');

/*
* Begin block script here
*/
$sql = 'SELECT *
	FROM ' . RANKS_TABLE . '
	ORDER BY rank_min ASC, rank_special ASC, rank_title ASC';
$result = $db->sql_query($sql);

while ($row = $db->sql_fetchrow($result))
{
	$template->assign_block_vars('ranks', array(
		'S_RANK_IMAGE'		=> ($row['rank_image']) ? true : false,
		'S_SPECIAL_RANK'	=> ($row['rank_special']) ? true : false,
		'RANK_IMAGE'		=> $phpbb_root_path . $config['ranks_path'] . '/' . $row['rank_image'],
		'RANK_TITLE'		=> $row['rank_title'],
		'MIN_POSTS'			=> $row['rank_min'])
	);
}

$db->sql_freeresult($result);

$template->assign_vars(array(
	'L_BR_RANKS_IMAGE'		=> $user->lang['BR_RANKS_IMAGE'],
	'L_BR_RANKS_TITLE'		=> $user->lang['BR_RANKS_TITLE'],
	'L_BR_RANKS_MINIMUM'	=> $user->lang['BR_RANKS_MINIMUM'],
	'L_BR_RANKS_PAGE_TITLE'	=> $user->lang['BR_RANKS_PAGE_TITLE'],
	'L_BACK_TO_TOP'			=> $user->lang['BACK_TO_TOP'])
);

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/center_ranks.html',
	));

?>