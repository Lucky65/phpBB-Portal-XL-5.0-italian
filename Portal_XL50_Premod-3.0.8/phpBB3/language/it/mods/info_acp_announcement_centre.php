<?php
/**
*
* @package acp
* @version $Id: info_acp_announcement_centre.php 111 2008-07-15 18:49:37Z lefty74 $ 
* @copyright (c) 2007 lefty74 
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
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

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge language entries into the common lang array
$lang = array_merge($lang, array(
	'ACP_ANNOUNCEMENTS_CENTRE'	=> 'Annunci centrali',
	'LOG_ANNOUNCEMENT_UPDATED'	=> '<strong>Aggiornamento Annunci</strong>',
));
?>