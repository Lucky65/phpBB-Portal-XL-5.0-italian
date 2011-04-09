<?php
/** 
*
* @name acp_portal_xl_menu.php [Deutsch — Du]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_menu.php,v 1.1.1.1 2009/05/15 04:02:16 damysterious Exp $
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
	'TITLE' 					=> 'Navigations Men&uuml; Management',
	'TITLE_EXPLAIN'				=> 'Auf diesem Formular k&ouml;nnen Sie einen benutzerdefinierten Men&uuml;punkt erstellen / bearbeiten / verschieben / l&ouml;schen. Dieser Men&uuml; Block kann ein- im Portal -> Allgemein -> Navigation Men&uuml;. Symbol  f&uuml;r den Einsatz in diesem Men&uuml; bestimmen. Zu finden im Verzeichnis / Portal / Bilder / icon_menu /. Empfohlene Symbol Gr&ouml;&szlig;e 16x16px. F&uuml;gen Sie so viele Symbole hizu, wie Sie wollen, aber beachten Sie die Vorschau zeigt sie alle an. Pfad ist relativ zum Foren Root-Verzeichnis, das hei&szlig;t "http://www.yourdomain.com/" f&uuml;r einen externen Link. Interne Links k&ouml;nnen hinzugef&uuml;gt werden, wie "portal.php" nennen einer bestimmten Datei von Ihrer Website, oder "memberlist.php? Modus = leaders" zu nennen eine bestimmte Funktion des Forums aus der Navigationsleiste.',
 
	'PORTAL_MENUS_EDIT_HEADER'	=> 'Men&uuml; Bearbeiten',
	'ACP_MENU_EXPLAIN'			=> 'Menu Management Portalanzeige',
	'ACP_PORTAL_MENU'			=> 'Men&uuml; Management',
	'ACTION'					=> 'Action',
	'ADD_URL'					=> 'Men&uuml; hinzuf&uuml;gen',		
	'ADMIN'						=> 'Administrator',			
	'ALL'						=> 'Alle',
	'GUESTS'					=> 'G&auml;ste',
	'MENU_ADDED'				=> 'Link erfolgreich hinzugef&uuml;gt',
	'MENU_REMOVED'				=> 'Link erfolgreich entfernt',			
	'MENU_UPDATED'				=> 'Link erfolgreich aktualisiert',
	'MOD'						=> 'Moderator',
	'MUST_SELECT_MENU'			=> 'Auswahl',
	'NAME_LINK'					=> 'Link Name',
	'NAME_URL_EXPLAIN'			=> 'Link Name Anzeige im Portal menu',
	'NONE'						=> 'keine Anzeige',
	'REG'						=> 'Registered',
	'RESET_MENU'				=> 'l&ouml;schen',		
	'STAFF'						=> 'Team',
	'URL_EXPLAIN'				=> 'Url des &ouml;ffnenden Fensters',
	'URL_EXPLAIN_2'				=> 'Die url kann wie folgt geschrieben werden. Beispiel : <br>index.php f&uuml;r interne Links, <br>http://google.com F&uuml;r externe Links',		
	'URL_IMG'					=> 'Icon url angezeigt in Men&uuml; Links',	
	'URL_IMG_2'					=> 'Mini icon',		
	'URL_IMG_EXPLAIN'			=> 'Image Url angezeigt in Men&uuml; Links',
	'URL_IMG_EXPLAIN2'			=> 'Klicke auf das ausgew&auml;hlte Bild',		
	'URL_LINK'					=> 'Link url',
	'VIEW_BY'					=> 'Sichtbar f&uuml;r',
	'VIEW_BY_EXPLAIN'			=> 'Bestimmer wer den Link im Portal sehen kann',	
	'MENU_FNAME_INFO'		    => 'Verf&uuml;gbare Mini Icons',	
	'MENU_FNAME_I_EXPLAIN'		=> 'Vorschau der Bilder erfolgt aus (Bilder sind hier /portal/images/icon_menu/ wenn du Icons hinzuf&uuml;gen willst). Standard Icon Gr&ouml;&szlig;e ist 16x16px.',	
	'MENU_FNAME_I_CHOSEN'		=> 'Ausgew&auml;hltes Mini Bild.',	
	'OPEN_IN'					=> '&Ouml;ffnen in',
	'OPEN_IN_EXPLAIN'			=> 'Wie soll ein neues Fenster ge&ouml;ffnet werden. <br />JA = Neues Fenster, NEIN = Selbes Fenster',	
	'OPEN_IN_BLANK'				=> 'Neues Fenster',
	'OPEN_IN_SAME'				=> 'Selbes Fenster',
		
   ));

?>