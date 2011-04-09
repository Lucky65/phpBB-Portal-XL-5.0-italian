<?php
/** 
*
* @name portal_xl_average_statistics.php [English]
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
	'TOPICS_PER_DAY_OTHER'	=> 'Onderwerpen per dag: <strong>%d</strong>',
	'TOPICS_PER_DAY_ZERO'	=> 'Onderwerpen per dag: <strong>0</strong>',
	'POSTS_PER_DAY_OTHER'	=> 'Bijdrage per dag: <strong>%d</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'Bijdrage per dag: <strong>0</strong>',
	'USERS_PER_DAY_OTHER'	=> 'Gebruikers per dag: <strong>%d</strong>',
	'USERS_PER_DAY_ZERO'	=> 'Gebruikers per dag: <strong>0</strong>',
	'TOPICS_PER_USER_OTHER'	=> 'Onderwerpen per gebruiker: <strong>%d</strong>',
	'TOPICS_PER_USER_ZERO'	=> 'Onderwerpen per gebruiker: <strong>0</strong>',
	'POSTS_PER_USER_OTHER'	=> 'Bijdrage per gebruiker: <strong>%d</strong>',
	'POSTS_PER_USER_ZERO'	=> 'Bijdrage per gebruiker: <strong>0</strong>',
	'POSTS_PER_TOPIC_OTHER'	=> 'Bijdrage per onderwerp: <strong>%d</strong>',
	'POSTS_PER_TOPIC_ZERO'	=> 'Bijdrage per onderwerp: <strong>0</strong>',
));
?>