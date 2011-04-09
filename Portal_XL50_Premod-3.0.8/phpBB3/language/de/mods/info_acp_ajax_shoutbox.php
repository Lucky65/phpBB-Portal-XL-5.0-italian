<?php
/**
*
* Module info ajax shoutbox [German]
* translation by purzl--> Portal XL Germany http://portalxl.ohost.de
* @package language
* @version $Id: info_acp_ajax_shoutbox.php,v 1.1.1.1 2009/05/15 05:16:03 damysterious Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

/**
* NOTE: Most of the language items are used in javascript
* If you want to use quotes or other chars that need escaped, be sure you escape them double
*/
$lang = array_merge($lang, array(
	'ACP_AS_MANAGEMENT'		=> 'Ajax Shoutbox',
	'ACP_SHOUTBOX'          => 'Ajax Shoutbox',
	'ACP_AS_OVERVIEW'		=> 'Shoutbox &Uuml;bersicht',
	'ACP_AS_SETTINGS'		=> 'Shoutbox Konfiguration',
	
	'LOG_AS_CONFIG_SETTINGS'	=> '<strong>Einstellungen aktualisiert!.</strong>',
	'LOG_PURGE_SHOUTBOX'		=> '<strong>Shout gel&ouml;scht.</strong>',
	'LOG_AS_INSTALLED'			=> '<strong>Ajax Shoutbox version %s installiert.</strong>',
	'LOG_AS_UPDATED'			=> '<strong>Aktualisiert Ajax Shoutbox von Vers. %1$s zu Vers. %2$s',
	'LOG_AS_UPGRADED'			=> '<strong>Aktualisiert Ajax Shoutbox von Vers. 1.0.x zu Vers. %1$s',
	
	'LOG_AS_PRUNED'             => '<strong>Gel&ouml;schte Shouts</strong>',
	'LOG_AS_REMOVED'            => '<strong>%1$s Automatisch gel&ouml;schte Shouts</strong>',
));
?>
