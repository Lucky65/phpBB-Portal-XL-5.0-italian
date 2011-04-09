<?php
/** 
*
* flags [German]
*
* @package language
* @version $Id: flags.php,v 1.003 2007/05/20 12:25:00 nedka Exp $
* @copyright (c) 2007 nedka (Nguyen Dang Khoa) 
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

/**
* German translation by Michael Zacher (http://startrekguide.com/forum/memberlist.php?mode=viewprofile&u=3675)
*/

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

// Country Flags
$lang = array_merge($lang, array(
	'ACP_FLAGS_EXPLAIN'		=> 'Mithilfe dieses Formulars kannst Du Flaggen hinzuf&uuml;gen, bearbeiten, betrachten oder l&ouml;schen. Jede Flagge muss seinen L&auml;ndercode haben.',
	'ADD_FLAG'				=> 'Neue Flagge hinzuf&uuml;gen',

	'FLAG_ADDED'			=> 'Flagge wurde erfolgreich hinzugef&uuml;gt.',
	'FLAG_CODE'				=> 'L&auml;ndercode',
	'FLAG_COUNTRY'			=> 'Land',
	'FLAG_IMAGE'			=> 'Flagge',
	'FLAG_IMAGE_EXPLAIN'	=> 'Lege ein Bild f&uuml;r die Flagge fest. Der Pfad ist relativ zum Rootordner des Forums, z. B. <samp>images/flags</samp>',
	'FLAG_REMOVED'			=> 'Flagge wurde erfolgreich entfernt.',
	'FLAG_UPDATED'			=> 'Flagge wurde erfolgreich aktualisiert.',

	'MUST_SELECT_FLAG'		=> 'Du musst eine Flagge w&auml;hlen.',

	'NO_FLAG'				=> 'Keine Flagge zugewiesen',
	'NO_FLAG_CODE'			=> 'Du hast keinen L&auml;ndercode f&uuml;r die Flagge angegeben.',
	'NO_FLAG_COUNTRY'		=> 'Du hast keine Flagge f&uuml;r den L&auml;ndercode angegeben.',
	'NO_UPDATE_FLAGS'		=> 'Flagge wurde erfolgreich entfernt. Benutzer und Gruppen, die diese Flagge benutzten, wurden nicht aktualisiert. Du musst die Flagge bei den Benutzern und Gruppen zur&uuml;cksetzen.',

	'TOTAL_USERS'			=> 'Mitglieder insgesamt',

	'USER_FLAG_UPDATED'		=> 'Benutzerflagge aktualisiert.',
));

?>