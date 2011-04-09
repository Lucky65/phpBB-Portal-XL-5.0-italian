<?php
/** 
*
* @name portal_xl_average_statistics.php [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_xl_average_statistics.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
**/

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
	'TOPICS_PER_DAY_OTHER'	=> 'Tém za deň: <strong>%d</strong>',
	'TOPICS_PER_DAY_ZERO'	=> 'Tém  za deň: <strong>0</strong>',
	'POSTS_PER_DAY_OTHER'	=> 'Príspevkov za deň: <strong>%d</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'Príspevkov za deň: <strong>0</strong>',
	'USERS_PER_DAY_OTHER'	=> 'Uživateľov za deň: <strong>%d</strong>',
	'USERS_PER_DAY_ZERO'	=> 'Uživateľov za deň: <strong>0</strong>',
	'TOPICS_PER_USER_OTHER'	=> 'Tém od uživateľov: <strong>%d</strong>',
	'TOPICS_PER_USER_ZERO'	=> 'Tém od uživateľov: <strong>0</strong>',
	'POSTS_PER_USER_OTHER'	=> 'Príspevky od uživateľov: <strong>%d</strong>',
	'POSTS_PER_USER_ZERO'	=> 'Príspevky od uživateľov: <strong>0</strong>',
	'POSTS_PER_TOPIC_OTHER'	=> 'Príspevky a témy: <strong>%d</strong>',
	'POSTS_PER_TOPIC_ZERO'	=> 'Príspevky a témy: <strong>0</strong>',
));
?>