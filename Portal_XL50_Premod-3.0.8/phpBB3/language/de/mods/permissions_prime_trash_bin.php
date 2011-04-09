<?php
/**
*
* permissions_prime_trash_bin [German]
*
* @package language
* @version $Id: permissions_prime_trash_bin.php,v 1.0.6 2008/08/26 14:20:00 primehalo Exp $
* @copyright (c) 2007 Ken F. Innes IV
* @translation 2007 German by Thilak
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

$lang = array_merge($lang, array(
	'acl_f_delete_forever'	=> array('lang' => 'Kann eigene Postings entg&uuml;ltig l&ouml;schen ', 'cat' => 'actions'),
	'acl_f_undelete'		=> array('lang' => 'Kann eigene Postings l&ouml;schen', 'cat' => 'actions'),
	'acl_m_delete_forever'	=> array('lang' => 'Kann Postings endg&uuml;ltig l&ouml;schen', 'cat' => 'post_actions'),
	'acl_m_undelete'		=> array('lang' => 'Kann Postings wiederherstellen', 'cat' => 'post_actions'),
));

?>