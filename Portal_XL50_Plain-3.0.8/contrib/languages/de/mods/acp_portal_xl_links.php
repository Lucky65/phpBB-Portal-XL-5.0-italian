<?php
/** 
*
* @name acp_portal_xl_links.phpacp_portal_xl_links.php [Deutsch — Du]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_links.php,v 1.1.1.1 2009/05/15 04:02:15 damysterious Exp $
*
* @copyright (c) 2007, 2008  Portal XL Group
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

$lang = array_merge($lang, array(   
	'TITLE' 					=> 'Links Management',
	'TITLE_EXPLAIN'				=> 'Auf diesem Formular k&ouml;nnen Sie einen benutzerdefinierten Link erstellen / bearbeiten / verschieben / l&ouml;schen. Dieser Men&uuml; Block kann ein- im Portal -> Allgemein -> Links Link festlegen. Symbole f&uuml;r den Einsatz in diesem Men&uuml; befinden sich im Verzeichnis / Portal / images / icon_links /. Empfohlene Symbol Gr&ouml;&szlig;e 16x16px. F&uuml;gen Sie so viele Symbole hinzu, wie Sie wollen, aber beachten Sie die Vorschau zeigt sie alle, die Mini Icons, Fenster, in dem Men&uuml; Bearbeiten drin sind. Pfad ist relativ zu den Foren Root-Verzeichnis, dh "http://www.yourdomain.com/" f&uuml;r einen externen Link.',
 
	'PORTAL_LINKS_EDIT_HEADER'	=> 'Link Bearbeiten',
	'ACP_LINKS_EXPLAIN'			=> 'Links Management Anzeige im Portal',
	'ACP_PORTAL_LINKS'			=> 'Link Management',
	'ACTION'					=> 'Action',
	'ADD_URL'					=> 'Link hinzuf&uuml;gen',		
	'ADMIN'						=> 'Administrator',			
	'ALL'						=> 'Alle',
	'GUESTS'					=> 'G&auml;ste',
	'LINKS_ADDED'				=> 'Link erfolgreich hinzugef&uuml;gt',
	'LINKS_REMOVED'				=> 'Link erfolgreich entfernt',			
	'LINKS_UPDATED'				=> 'Link erfolgreich aktualisiert',
	'MOD'						=> 'Moderator',
	'MUST_SELECT_LINKS'			=> 'Ausw&auml;hlen',
	'NAME_LINK'					=> 'Link Name',
	'NAME_URL_EXPLAIN'			=> 'Link Name der angezeigt wird im Portal Links Block',
	'NONE'						=> 'Keine Anzeige',
	'REG'						=> 'Registriert',
	'RESET_LINKS'				=> 'l&ouml;schen',		
	'STAFF'						=> 'Team',
	'URL_EXPLAIN'				=> 'Url zum Fenster &ouml;ffnen',
	'URL_EXPLAIN_2'				=> 'Die url kann wie folgt geschrieben werden. Beispiel : <br>index.php f&uuml;r interne Links, <br>http://google.com f&uuml;r externe Links',		
	'URL_IMG'					=> 'Icon url Anzeige im Links Block',	
	'URL_IMG_2'					=> 'Mini icon',		
	'URL_IMG_EXPLAIN'			=> 'Image Url Anzeige im Links Block',
	'URL_IMG_EXPLAIN2'			=> 'Klick auf das ausgew&auml;hlte Bild',		
	'URL_LINK'					=> 'Link url',
	'VIEW_BY'					=> 'Sichtbar f&uuml;r',
	'VIEW_BY_EXPLAIN'			=> 'Legt fest wer den Link sehen kann',	
	'LINKS_FNAME_INFO'		    => 'Verf&uuml;gbare mini icons',	
	'LINKS_FNAME_I_EXPLAIN'		=> 'Vorschau der verf&uuml;gbaren mini icons ausw&auml;hlen kannst und zwar aus ( /portal/images/icon_menu/ wenn du welche hinzuf&uuml;gen willst). Standardgr&ouml;&szlig;e betr&auml;gt 16x16px.',	
	'LINKS_FNAME_I_CHOSEN'		=> 'gew&auml;hltes mini Bild.',	
		
   ));

?>