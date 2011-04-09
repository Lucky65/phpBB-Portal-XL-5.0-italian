<?php
/**
*
* Module info ajax shoutbox [Greek]
*
* @package language
* @version $Id: info_acp_ajax_shoutbox.php 253 2008-02-16 13:50:55Z paul $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* translated by Diastasi (thraki.info) & phpbb2.gr
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
	'ACP_AS_OVERVIEW'		=> 'Επισκόπηση MOD',
	'ACP_AS_SETTINGS'		=> 'Ρυθμίσεις MOD',
	
	'LOG_AS_CONFIG_SETTINGS'	=> '<strong>Οι ρυθμίσεις του Ajax Shoutbox ανανεώθηκαν.</strong>',
	'LOG_PURGE_SHOUTBOX'		=> '<strong>Τα μηνύματα του Shoutbox διαγράφηκαν.</strong>',
	'LOG_AS_INSTALLED'			=> '<strong>Η έκδοση %s του Ajax Shoutbox εγκαταστάθηκε.</strong>',
	'LOG_AS_UPDATED'			=> '<strong>Αναβάθμιση του Ajax Shoutbox από %1$s σε %2$s',
	'LOG_AS_UPGRADED'			=> '<strong>Αναβάθμιση του Ajax Shoutbox από 1.0.x σε %1$s',
	
	'LOG_AS_PRUNED'             => '<strong>Διεγραμμένο Ajax Shoutbox</strong>',
	'LOG_AS_REMOVED'            => '<strong>Αφαιρέθηκαν αυτόματα %1$s μηνύματα</strong>',
));
?>
