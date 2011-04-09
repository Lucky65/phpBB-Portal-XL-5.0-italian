<?php
/**
*
* @package acp [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @version $Id: info_acp_announcement_centre.php,v 1.1.1.1 2009/05/15 05:16:03 damysterious Exp $ 
* @copyright (c) 2007 lefty74 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge language entries into the common lang array
$lang = array_merge($lang, array(
	'ACP_ANNOUNCEMENTS_CENTRE'	=> 'Centrálne Oznámenia',
	'LOG_ANNOUNCEMENT_UPDATED'	=> '<strong>Upozornenia boli úspešne aktualizované</strong>',
));
?>