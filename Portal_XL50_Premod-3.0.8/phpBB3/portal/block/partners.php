<?php
/*
*
* @name partners.php
* @package phpBB3 Portal XL 5.0
* @version $Id: partners.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
$user->add_lang('mods/portal_xl');

/*
* Begin block script here
*/
	$sql = "SELECT *
		FROM " . PORTAL_PARTNERS_TABLE . "
		ORDER BY RAND()";
$result = $db->sql_query_limit($sql, $portal_config['portal_partners_display_value']);
		
while ($row = $db->sql_fetchrow($result))
{
	$i = 0;
	do
	{
	$template->assign_block_vars('partners', array(
        'ROW_NUMBER' 			=> $i + '1',	
		'PARTNERS_URL' 			=> $row['partners_url'],
		'PARTNERS_IMG' 			=> '<div style="margin:2px;"><img src="' . $row['partners_img'] . '" width="88" height="31" alt="' . $row['partners_description'] . '" title="' . $row['partners_description'] . '" /></div>',
		'PARTNERS_DESCRIPTION' 	=> $row['partners_description'],		
		));
		$i++;
	}
	while ( $row = $db->sql_fetchrow($result) );
	$db->sql_freeresult($result);
}

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/partners.html',
	));

?>