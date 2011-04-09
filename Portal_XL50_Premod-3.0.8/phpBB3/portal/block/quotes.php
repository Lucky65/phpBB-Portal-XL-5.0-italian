<?php
/*
*
* @name quotes.php
* @package phpBB3 Portal XL 5.0
* @version $Id: quotes.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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

/*
* Begin block script here
*/
		$sql = "SELECT *
			FROM " . PORTAL_QUOTE_TABLE . "
			ORDER BY RAND()
			LIMIT 1";
		$result = $db->sql_query($sql);

		while ($row = $db->sql_fetchrow($result))
		{
    			$quote_id 		= $row['quote_id'];
    			$quote_text 	= $row['quote'];
    			$quote_author 	= $row['quote_author'];
		}
		$db->sql_freeresult($result);

		$template->assign_block_vars('quote', array(
//			'S_QUOTE_DISABLE'   => (isset ($block_quote_disable )) ? $block_quote_disable : 0,
   	 		'QUOTE_ID' 			=> $quote_id,
			'QUOTE_TEXT' 		=> sprintf(htmlspecialchars_decode($quote_text)),
   	 		'QUOTE_AUTHOR' 		=> $quote_author,
//			'L_QUOTES_INFO'		=> $user->lang['QUOTES_INFO'],
			));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/quotes.html',
	));

?>