<?php
/**
*
* acp_info_auto_gropus [English]
*
* @package language
* @version 1.0.0 $
* @copyright (c) 2007 A_Jelly_Doughnut
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
	'AUTO_GROUP'			=> 'Automatische Gruppeneinstellungen',
	'GROUP_MIN_POSTS'		=> 'Minimale Postanzahl',
	'GROUP_MAX_POSTS'		=> 'Maximale Postanzahl',
	'GROUP_MIN_DAYS'		=> 'Minimale Zeit Mitgliedschaft',
	'GROUP_MAX_DAYS'		=> 'Maximale Zeit Mitgliedschaft',
	'GROUP_MIN_WARNINGS'	=> 'Minimale Verwarnungspunkte',
	'GROUP_MAX_WARNINGS'	=> 'Maximale Verwarnungspunkte',
	'DEFAULT_AUTO_GROUP'	=> 'Stelle automatisch auf Default',
	'DEFAULT_AUTO_GROUP_EXPLAIN'	=> 'Die Benutzer k&ouml;nnen ihre Defaultgruppe w&auml;hlen nachdem sie zur Gruppe hinzugef&uuml;gt worden sind.',)
);
?>