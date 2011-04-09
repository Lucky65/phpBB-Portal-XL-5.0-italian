<?php
/**
*
* @package acp
* @version $Id: info_acp_announcement_centre.php,v 1.1.1.1 2009/05/15 05:16:03 damysterious Exp $ 
* @copyright (c) 2007 lefty74 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* german translation by purzl--> Portal XL Germany http://portalxl.ohost.de
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
	'ACP_ANNOUNCEMENTS_CENTRE'	=> 'Ank&uuml;ndigungscenter',
	'LOG_ANNOUNCEMENT_UPDATED'	=> '<strong>Ank&uuml;ndigungen aktualisiert</strong>',
));
?>