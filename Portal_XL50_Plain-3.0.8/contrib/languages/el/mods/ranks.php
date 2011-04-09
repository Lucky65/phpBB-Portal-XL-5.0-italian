<?php
/** 
*
* @name ranks.php [Greek-El]
* @package phpBB3 Portal XL
* @version $Id: ranks.php,v 1.9 2008/05/04 07:53:41 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Ελληνική μετάφραση από την ομάδα μετάφρασης του phpbbgr.com:
* (http://phpbbgr.com/team/)
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

$lang = array_merge($lang, array(
	'BR_RANKS_IMAGE'			=> 'Εικόνα βαθμού',
	'BR_RANKS_TITLE'			=> 'Βαθμός',
	'BR_RANKS_MINIMUM'			=> 'Ελάχιστες δημοσιεύσεις',
	'BR_RANKS_PAGE_TITLE'		=> 'Σελίδα βαθμών',
));

?>
