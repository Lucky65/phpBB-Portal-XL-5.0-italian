<?php
/**
*
* Module info ajax shoutbox [Italian]
*
* @package language
* @version $Id: info_acp_ajax_shoutbox.php 253 2008-02-16 13:50:55Z paul $
* @copyright (c) 2005 phpBB Group
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
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

/**
* NOTE: Most of the language items are used in javascript
* If you want to use quotes or other chars that need escaped, be sure you escape them double
*/
$lang = array_merge($lang, array(
	'ACP_AS_MANAGEMENT'		=> 'Ajax Shoutbox',
	'ACP_SHOUTBOX'          => 'Ajax Shoutbox',
	'ACP_AS_OVERVIEW'		=> 'Panoramica shoutbox',
	'ACP_AS_SETTINGS'		=> 'Configurazione shoutbox',
	
	'LOG_AS_CONFIG_SETTINGS'	=> '<strong>Ajax Shoutbox configurazioni aggiornate.</strong>',
	'LOG_PURGE_SHOUTBOX'		=> '<strong>Shoutbox messaggi cancellati.</strong>',
	'LOG_AS_INSTALLED'			=> '<strong>Ajax Shoutbox versione %s installata.</strong>',
	'LOG_AS_UPDATED'			=> '<strong>Aggiornamento Ajax Shoutbox dalla %1$s alla %2$s',
	'LOG_AS_UPGRADED'			=> '<strong>Aggiornamento Ajax Shoutbox dalla 1.0.x alla %1$s',
	
	'LOG_AS_PRUNED'             => '<strong>Eliminazione Ajax Shoutbox</strong>',
	'LOG_AS_REMOVED'            => '<strong>Eliminazione automatica %1$s messaggi</strong>',
));
?>
