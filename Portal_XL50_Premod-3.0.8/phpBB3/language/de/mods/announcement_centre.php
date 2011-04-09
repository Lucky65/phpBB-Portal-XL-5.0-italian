<?php
/** 
*
* acp_announcements_centre [German]
* translation by purzl--> portal xl germany http://portalxl.ohost.de
* @package language
* @version $Id: announcement_centre.php,v 1.1.1.1 2009/05/15 05:15:57 damysterious Exp $ 
* @copyright (c) 2007 lefty74
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

// Announcement  settings
$lang = array_merge($lang, array(
	'TITLE'									=> 'Ank&uuml;ndigungs Center',
	'TITLE_EXPLAIN'							=> 'Hier k&ouml;nnen Sie Ihre Ank&uuml;ndigungen verwalten und Reg. User sowie G&auml;ste unterschiedliche Ank&uuml;ndigungen verfassen.',
	'ANNOUNCEMENTS'							=> 'Konfiguration',
	'ANNOUNCEMENT_ENABLE'					=> 'Ank&uuml;ndigungen anzeigen',
	'ANNOUNCEMENT_SHOW'						=> 'Ank&uuml;ndigungen anzeigen in',
	'ANNOUNCEMENT_SHOW_INDEX'				=> 'Ank&uuml;ndigungen anzeigen auf Indexseite',
	'ANNOUNCEMENT_SHOW_BIRTHDAYS'			=> 'Geburtstage als Ank&uuml;ndigung anzeigen?',
	'ANNOUNCEMENT_SHOW_BIRTHDAYS_EXPLAIN'	=> 'Zeigt Geburtstage als Ank&uuml;ndigung an (wenn eingeschaltet)',
	'ANNOUNCEMENT_SHOW_GROUP'				=> 'W&auml;hle Gruppen aus die die Ank&uuml;digung sehen sollen',
	'ANNOUNCEMENT_SHOW_GROUP_EXPLAIN'		=> 'Only applicable if announcement is shown to Groups',
	'ANNOUNCEMENT_BIRTHDAY_AVATAR'			=> 'Avatare in Geburtstagsank&uuml;nd. anzeigen?',
	'ANNOUNCEMENT_BIRTHDAY_AVATAR_EXPLAIN'	=> 'Zeigt den User Avatar des Geburtstagskindes',
	'ANNOUNCEMENT_DRAFT_PREVIEW'			=> 'Ank&uuml;ndigungs Vorschau',
	'ANNOUNCEMENT_TITLE'					=> 'Ank&uuml;ndigungs Titel',
	'ANNOUNCEMENT_TITLE_EXPLAIN'			=> 'Alternativer Name f&uuml;r Ank&uuml;ndigungen <br/>frei lassen wenn Sie den default Wert ihres Sprachpacketes nutzen m&ouml;chten',
	'ANNOUNCEMENT_DRAFT'					=> 'Ank&uuml;ndigung erstellen',
	'ANNOUNCEMENT_DRAFT_EXPLAIN'			=> 'Text f&uuml;r die Ank&uuml;ndigungen hier eingeben',
	'ANNOUNCEMENT_TEXT'						=> 'Ank&uuml;ndigungs Text',
	'ANNOUNCEMENT_TEXT_EXPLAIN'				=> 'Bitte geben Sie ihren Text ein',
	'ANNOUNCEMENT_ENABLE_GUESTS'			=> 'Zeige G&auml;sten alternative Ank&uuml;ndigung?',
	'ANNOUNCEMENT_ENABLE_GUESTS_EXPLAIN'	=> 'Zeigt verschiedene Ank&uuml;ndigungen f&uuml;r G&auml;ste und Reg. User Ausser es wurde "jeder" als option eingestellt',
	'ANNOUNCEMENT_TITLE_GUESTS'				=> 'Ank&uuml;ndigungs Titel f&uuml;r G&auml;ste',
	'ANNOUNCEMENT_TITLE_GUESTS_EXPLAIN'		=> 'Alternativer Name f&uuml;r Gastank&uuml;ndigungen <br/>frei lassen wenn Sie den default Wert ihres Sprachpacketes nutzen m&ouml;chten',
	'ANNOUNCEMENT_TEXT_GUESTS'				=> 'Text f&uuml;r G&auml;steank&uuml;ndigung',
	'ANNOUNCEMENT_TEXT_GUESTS_EXPLAIN'		=> 'Bitte geben Sie ihren Text ein',
	'ACP_ANNOUNCEMENTS_CENTRE'				=> 'Ank&uuml;ndigungs Center',

	'COPY_TO_ANNOUNCEMENT_SHORT'			=> 'Copy to Ank&uuml;ndigungen',
	'COPY_TO_GUEST_ANNOUNCEMENT_SHORT'		=> 'Copy to G&auml;steank&uuml;ndigungen',
	'COPY_TO_ANNOUNCEMENT'					=> 'Copy to Ank&uuml;ndigungen',
	'COPY_TO_GUEST_ANNOUNCEMENT'			=> 'Copy to G&auml;steank&uuml;ndigungen',

	'YES'			=> 'Ja',
	'NO'			=> 'Nein',
	'GUESTS'		=> 'G&auml;ste',
	'EVERYONE'		=> 'Alle',
	'GROUPS'		=> 'Gruppen',
));

?>