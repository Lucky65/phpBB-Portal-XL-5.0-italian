<?php
/** 
*
* @package smilie_creator
* $LastChangedDate: 2008-09-07 13:06:44 +0200 (So, 07 Sep 2008) $
* $LastChangedBy: stoffel04 $
* $Id: smilie_creator.php,v 1.1.1.1 2009/05/15 05:12:41 damysterious Exp $
* $Revision: 1.1.1.1 $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License*
*
*/

/*
 * @ignore 
*/ 
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/lang_smilie_creator');

$mode = request_var('mode' ,'');

$page_title = $user->lang['SMILIE_CREATOR'];

$smilies_selection = $smilies_js = '';

if ($mode == "text2schild")
{
	//Get all available smilies ( *.png )
	$count_smilie = -1;
	$handle = opendir($phpbb_root_path . "images/smilie_creator/");
	while ($result = readdir($handle))
	{
		if (strtolower(substr($result, (strlen($result) - 3), 3)) == "png") 
		{
			$count_smilie++;
		}
	}
	closedir($handle);

	//Build the smilie table now...
	$i = 1;
	$col_counter = 1;

	//For each smilie we found...
	while ($i <= $count_smilie)
	{
		//If we have more than 5 smilies in a row, create a new row
		if ($col_counter == 6)
		{
			$template->assign_block_vars('smilie_selection', array(
				'COL_COUNTER'	=> true,
				)
			);
			$col_counter = 1;
		}

		//Put the smilie into the table
		$template->assign_block_vars('smilie_selection', array(
			'PHPBB_ROOT_PATH'		=> $phpbb_root_path,
			'SMILIE_SELECT'			=> $i,
			'SMILIE_JS'				=> $i-1,
			)
		);

		//Ok, next one....
		$i++;
		$col_counter++;
	}

	$template->assign_vars(array(
		'S_MODE_TEXT2SCHILD'	=> true,
		'SMILIE_RANDOM'			=> $i-1,
		'SMILIE_STANDARD'		=> $i,
		'SMILIES_NEXT'			=> $user->lang['SMILIE_NEXT'],
		'SC_ERROR'				=> $user->lang['SC_ERROR'],
	   )
	);
}

$template->set_filenames(array(
	'body' => 'smilie_creator.html',
));

// Output the page
page_header($page_title);

page_footer();

?>