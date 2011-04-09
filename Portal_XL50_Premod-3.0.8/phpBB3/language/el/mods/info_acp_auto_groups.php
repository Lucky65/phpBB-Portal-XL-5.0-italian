<?php
/**
*
* acp_info_auto_gropus [Greek]
*
* @package language
* @version 1.0.0 $
* @copyright (c) 2007 A_Jelly_Doughnut
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα μετάφρασης του phpbb2.gr:
* (http://phpbb2.gr/groupcp.php?g=322&sid=7acc2b540cebf07b063274dde036a3ac)
* Athanasios Ziouzios Panagioths Mixas Konstantakelhs Panagioths
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

if (!defined('IN_PHPBB'))
{
	exit;
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

$lang = array_merge($lang, array(
	'AUTO_GROUP'			=> 'Ρυθμίσεις Αυτόματης Ομάδας',
	'GROUP_MIN_POSTS'		=> 'Ελάχιστες δημοσιεύσεις',
	'GROUP_MAX_POSTS'		=> 'Μέγιστες δημοσιεύσεις',
	'GROUP_MIN_DAYS'		=> 'Ελάχιστες μέρες σαν μέλος',
	'GROUP_MAX_DAYS'		=> 'Μέγιστες μέρες σαν μέλος',
	'GROUP_MIN_WARNINGS'		=> 'Ελάχιστες προειδοποιήσεις',
	'GROUP_MAX_WARNINGS'		=> 'Μέγιστες προειδοποιήσεις',
	'DEFAULT_AUTO_GROUP'		=> 'Ορισμός σαν προεπιλεγμένη ομάδα αυτόματα',
	'DEFAULT_AUTO_GROUP_EXPLAIN'	=> 'Τα μέλη μπορούν να αλλάξουν την βασική τους ομάδα εφόσον προστεθούν σε αυτήν την ομάδα.',)
);
?>
