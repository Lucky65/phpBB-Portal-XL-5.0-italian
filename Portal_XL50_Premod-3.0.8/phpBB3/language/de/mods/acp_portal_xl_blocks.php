<?php
/** 
*
* @name acp_portal_xl_blocks.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_blocks.php,v 1.3 2009/10/17 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
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
	'TITLE_BLOCKS'						=> 'Block Management Portal',
	'TITLE_BLOCKS_EXPLAIN'				=> 'In diesem Formular k&ouml;nnen Sie Bl&ouml;cke und Block Items f&uuml;r das Portal erstellen / bearbeiten / verschieben / l&ouml;schen. Alle Richtungen zum Verschieben sind erlaubt in Ihrem Block. Es stehen f&uuml;nf Spalten zur Verf&uuml;gung, um Ihren Block, oben, links, mitte, rechts und unten zu positionieren. Die Positionen der verschiedenen Bausteine folgen der gleichen Reihenfolge, wie Sie auf Ihrem Index / viewforum sind. Beide Teile der Block  Verwaltung mit den gleichen Bl&ouml;cken sind von einander getrennt, so dass Sie in der Lage sind, zu einem anderen Layout auf dem Portal und Index / viewforum einzustellen. <BR> <br /> <strong Style="text-transform: uppercase;"> Hinweis: </ strong> Denken Sie daran, <strong> nicht </ strong> zu entfernen <strong> center_forumblock.html </ strong>, Sonst werden keine Foren sichtbar, w&auml;hlen Sie auf der Index-Seite aus.!',
  	'TITLE_BLOCKS_COLUMN_EXPLAIN'		=> 'Linke und rechte Spalteneinstellungen. Hier kannst du die Anzeigeseite bestimmen.',

	'TITLE_BLOCKS_INDEX' 				=> 'Block Management index/viewforum',
	'TITLE_BLOCKS_INDEX_EXPLAIN'		=> 'In diesem Formular k&ouml;nnen Sie Bl&ouml;cke und Block Items f&uuml;r das Index / viewforum erstellen / bearbeiten / verschieben / l&ouml;schen. Alle Richtungen zum Verschieben sind erlaubt in Ihrem Block. Es stehen f&uuml;nf Spalten zur Verf&uuml;gung, um Ihren Block, oben, links, mitte, rechts und unten zu positionieren. Die Positionen der verschiedenen Bausteine folgen der gleichen Reihenfolge, wie Sie auf Ihrem Index / viewforum sind. Beide Teile der Block  Verwaltung mit den gleichen Bl&ouml;cken sind von einander getrennt, so dass Sie in der Lage sind, zu einem anderen Layout auf dem Portal und Index / viewforum einzustellen. <BR> <br /> <strong Style="text-transform: uppercase;"> Hinweis: </ strong> Denken Sie daran, <strong> nicht </ strong> zu entfernen <strong> center_forumblock.html </ strong>, Sonst werden keine Foren sichtbar, w&auml;hlen Sie auf der Index-Seite aus.!',
 	'TITLE_BLOCKS_INDEX_COLUMN_EXPLAIN'	=> 'Linke und rechte Spalteneinstellungen. Hier kannst du die Anzeigeseite bestimmen.',

	'TITLE_PAGES' 						=> 'Seiten Management Portal',
	'TITLE_PAGES_EXPLAIN'				=> 'In diesem Formular k&ouml;nnen Sie Seiten und Themen f&uuml;r die Portal Seiten erstellen / bearbeiten / verschieben / l&ouml;schen. Es stehen f&uuml;nf Spalten zur Verf&uuml;gung, um Ihre Seite auf, oben, links, mitte, rechts und unten einzustellen. Die Positionen der verschiedenen Seiten entsprechen der gleichen Reihenfolge, wie Sie sie auf Ihren Portal Seiten sehen.',
  	'TITLE_PAGES_COLUMN_EXPLAIN'		=> 'Linke und Rechte Spaltenbreiten Einstellungen. Hier k&ouml;nnen Sie Ihre linke und rechte Spaltenbreite anpassen.',
								 
	'BLOCK_EDIT_HEADER'					=> '&Auml;ndere/Erstelle einen Block',
	'BLOCK_EDIT_HEADER_MAIN'			=> 'Haupt Block Management',
	'BLOCK_COLUMN_SETTINGS'				=> 'Spaltenbreite',
	'BLOCK_EDIT_COLUMN_SETTINGS'		=> '&auml;ndere/wechsel die index/viewforum column Einstellungen',
	
	'ADD_BLOCK'							=> 'Block hinzuf&uuml;gen',
	'CANCEL'							=> 'Abbruch',
	'PIXEL'								=> 'Pixel',
	'BLOCK_ACTIV'						=> 'Block Aktivierung',
	'BLOCK_ACTIVE'						=> 'Aktivieren',
	'BLOCK_ACTIV_EXPLAIN'				=> 'Diesen Block anzeigen Ja/Nein?',
	'BLOCK_CENTRE'						=> 'Nicht verf&uuml;gbar',
	'BLOCK_HTML'						=> 'Html Datei',
	'BLOCK_HTML_EXPLAIN'				=> 'W&auml;hle eine vordefinierte Block Datei (*.html file) f&uuml;r den Block aus.',
	'BLOCK_NAME'						=> 'Block Name',
	'BLOCK_NAME_EXPLAIN'				=> 'Anzeigename des Blocks.',
	'BLOCK_ORD'							=> 'Anweisen:',
	'BLOCK_ORDER'						=> 'anweisen',
	'BLOCK_POS'							=> 'Position',
	'BLOCK_REMOVED'						=> 'Block erfolgreich entfernt',
	'BLOCK_UPDATED'						=> 'erfolgreich aktualisiert',
	'BLOCK_ADDED'						=> 'erfolgreich hinzugef&uuml;gt',
	'BLOCK_CENTER'						=> 'Center Position',
	'BLOCK_BOTTOM'						=> 'Bottom Position',
	'BLOCK_DISABLE_EX'					=> 'Block deaktiviert',
	'BLOCK_RIGHT'						=> 'Right Position',
	'BLOCK_LEFT'						=> 'Left Position',
	'BLOCK_TOP'							=> 'Top Position',
	'BLOCK_NAME_EDIT'					=> 'Block bearbeiten',
	'BLOCK_ORD'							=> 'Order:',	
	'BLOCK_ORD_EXPLAIN'					=> 'Zu welcher Spalte soll der Block hinzugef&uuml;gt werden? M&ouml;gliche Vaariablen sind top, left, center, right und bottom.',
	'BLOCK_POSITION'					=> 'Letzte Position',
	'BLOCK_POSITION_EXPLAIN'			=> 'W&auml;hlen Sie hiervor wie f&uuml;r die Spalte',
	'DISABLE_BLOCK'						=> 'Block aktivieren',
	'ENABLE_BLOCK'						=> 'Block deaktivieren',
	'ICON_DELETE'						=> 'L&ouml;schen des eigenen Blocks ist erlaubt, vordefinierte Bausteine k&ouml;nnen nicht gel&ouml;scht werden.',
	'ICON_EDIT'							=> 'Bearbeiten des eigenen Blocks ist erlaubt, vordefinierte Bausteine k&ouml;nnen nicht bearbeitet werden.',
	'ICON_MOVE_BOTTOM'					=> 'Verschieben Sie den Block eine Spalte runter',
	'ICON_MOVE_BOTTOM_DIRECT'			=> 'Verschieben Sie den Block in die unterste Spalte',
	'ICON_MOVE_DOWN'					=> 'Verschieben Sie den Block eine Zeile runter',
	'ICON_MOVE_LEFT'					=> 'Verschieben Sie den Block in die linke Spalte',
	'ICON_MOVE_LEFT_DIRECT'				=> 'Verschieben Sie den Block ganz links in die Spalte',
	'ICON_MOVE_RIGHT'					=> 'Verschieben Sie den Block in die rechte Spalte',
	'ICON_MOVE_RIGHT_DIRECT'			=> 'Verschieben Sie den Block ganz rechts in die Spalte',
	'ICON_MOVE_TOP'						=> 'Verschieben Sie den Block eine Spalte h&ouml;her',
	'ICON_MOVE_TOP_DIRECT'				=> 'Verschieben Sie den Block in die oberste Spalte',
	'ICON_MOVE_UP'						=> 'Verschieben Sie den Block eine Zeile h&ouml;her',
	'OPEN_ICON_PREVIEW'					=> 'Icon Vorschau &ouml;ffnen',
	'CLOSE_ICON_PREVIEW'				=> 'Icon Vorschau schlie&szlig;en',
	'MUST_SELECT_BLOCK'					=> 'Auswahl Fehler',
	'OFFLIGNE'							=> 'Block ist deaktiviert, zum Aktivieren auf das Icon klicken',
	'ONLIGNE'							=> 'Block ist aktiviert, zum Deaktivieren auf das Icon klicken',
	'RESET_INCLUDE_BLOCK'				=> 'L&ouml;schen',
	'SUBMIT_INCLUDE_BLOCK'				=> 'Speichern',
	'PERMISSION'						=> 'Block Berechtigungen',
	'PERMISSION_EXPLAIN'				=> 'Wer darf den Block sehen:',
	'ADMIN'								=> 'Administrator',
	'ALL'								=> 'Alle',
	'GUESTS'							=> 'G&auml;ste',
	'MOD'								=> 'Moderator',
	'NONE'								=> 'keine Anzeige',
	'REG'								=> 'Registrierte',
	'STAFF'								=> 'Team',
	'URL_IMG_EXPLAIN'					=> 'Bild Url des angezeigten Menu links',
	'URL_IMG_EXPLAIN2'					=> 'Klicke auf das ausgew&auml;hlte Bild',
	'BLOCK_FNAME_INFO'					=> 'Verf&uuml;gbare mini icons',
	'BLOCK_FNAME_I_EXPLAIN'				=> 'Vorschau verf&uuml;gbarer mini icons aus ( /portal/images/icon_menu/ wenn du Icons hinzuf&uuml;gen willst). Empfohlene Gr&ouml;&szlig;e 16x16px.',
	'BLOCK_FNAME_I_CHOSEN'				=> 'Ausgew&auml;hltes mini Bild.',
	'CONFIG_UPDATED'					=> 'Konfiguration erfolgreich aktualisiert.',
	'CONFIG_ADDED'						=> 'Konfiguration erfolgreich hinzugef&uuml;gt.',

	'DELETE'							=> 'Block l&ouml;schen',
	'EDIT'								=> 'Block bearbeiten',
	'MOVE_BOTTOM'						=> 'Verschiebe den Block eine Spalte runter',
	'MOVE_BOTTOM_DIRECT'				=> 'Verschiebe den Block in die unterste Spalte',
	'MOVE_DOWN'							=> 'Verschiebe den Block eine Zeile runter',
	'MOVE_LEFT'							=> 'Verschiebe den Block in die linke Spalte',
	'MOVE_LEFT_DIRECT'					=> 'Verschiebe den Block ganz links in die Spalte',
	'MOVE_RIGHT'						=> 'Verschiebe den Block in die rechte Spalte',
	'MOVE_RIGHT_DIRECT'					=> 'Verschiebe den Block ganz rechts in die Spalte',
	'MOVE_TOP'							=> 'Verschiebe den Block eine Spalte h&ouml;her',
	'MOVE_TOP_DIRECT'					=> 'Verschiebe den Block in die oberste Spalte',
	'MOVE_UP'							=> 'Verschiebe den Block eine Zeile h&ouml;her',
	'BLOCK_CONTENT'						=> 'Block Inhalt',
	'BLOCK_CONTENT_EXPLAIN'				=> 'Den Inhalt deines eigenen Blocks hier rein. <br /><br /> Wenn Du Deinen Block verwenden willst, um das Portal kundenfreundlicher zu gestalten, W&auml;hle als Block <strong>blank_custom_block.html</strong> unten als HTML-File aus den Drop-Down Optionen um den Inhalt in einem Block darzustellen. <strong>blank_custom_block.html</strong> kann so oft verwendet werden wie Du willst.',
	
	'ACP_PORTAL_COLLUMN_WIDTH_INFO'              => 'Portal Spalten breite',
	'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS'          => 'Linke und Rechte Spaltenbreite',	
	'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS_EXPLAIN'  => 'Hier kann man die Portalbreiten der linken und rechten Seite einstellen.',
	
	'PORTAL_LEFT_COLLUMN_WIDTH'					=> 'Spaltenbreite links',
	'PORTAL_LEFT_COLLUMN_ACTIVE'				=> 'Linke Spalte aktiv',
	'PORTAL_LEFT_COLLUMN_ACTIVE_EXPLAIN'		=> 'Aktivieren/deaktivieren der Linken Spalte index/viewforum Ja/Nein?',
	'PORTAL_LEFT_COLLUMN_WIDTH_EXPLAIN'			=> '&Auml;ndere die Breite der linken Spalte in pixel, empfohlener Wert 180',
	
	'PORTAL_RIGHT_COLLUMN_WIDTH'				=> 'Spaltenbreite rechts',
	'PORTAL_RIGHT_COLLUMN_ACTIVE'				=> 'Rechte Spalte aktiv',
	'PORTAL_RIGHT_COLLUMN_ACTIVE_EXPLAIN'		=> 'Aktivieren/deaktivieren der Rechten Spalte index/viewforum Ja/Nein?',
	'PORTAL_RIGHT_COLLUMN_WIDTH_EXPLAIN'		=> '&Auml;ndere die Breite der rechten Spalte in pixel, empfohlener Wert 180',
	
	'PORTAL_LAYOUT'								=> 'Portal Layout',
	'PORTAL_LAYOUT_ACTIVE'						=> 'Zeige Spalten Layout im Portal',
	'PORTAL_LAYOUT_EXPLAIN'						=> 'Hier kannst du die rechte und linke Spalte mit einem Klick an-/aus-schalten. Die mittlere Spalte passt sich an. <br /> Aktivieren/Deaktivieren Ja/Nein?',
	
	'PORTAL_INDEX_LAYOUT'                 		=> 'Index Layout',
	'PORTAL_INDEX_LAYOUT_ACTIVE'                => 'Zeige Spalten Layout auf index/viewforum',
	'PORTAL_INDEX_LAYOUT_EXPLAIN'        		=> 'Hier kannst du die rechte und linke Spalte mit einem Klick an-/aus-schalten. Die mittlere Spalte passt sich an. <br /> Aktivieren/Deaktivieren Ja/Nein?',
	
	'PORTAL_PAGES_LAYOUT'                 		=> 'Seiten Ansicht',
	'PORTAL_PAGES_LAYOUT_ACTIVE'                => 'Anzeige des Spaltenlayouts auf den Portalseiten',
	'PORTAL_PAGES_LAYOUT_EXPLAIN'        		=> 'Mit diesem Hauptschalter kannst Du die Spalten links und rechts ein oder ausblenden. Die mittlere Spalte wird immer automatisch angepasst. <br /> Enable/Disable Yes/No?',
	
	'PORTAL_PAGES_PAGE_ACTIVE'        			=> 'Einzelseiten Ansicht',
	'PORTAL_PAGES_PAGE_ACTIVE_EXPLAIN'        	=> 'Mit dieser Option kann die "Zeige Einzelseiten" Funktion EIN/AUS geschalten werden. Wenn die Option auf EIN geschalten wird, wird statt dem normalen Layout eine Einzelseite angezeigt. Wenn mehr als eine Seite im Block "Portal Seiten" kreiert wird, werden die Seiten zusammengef&uuml;hrt und dargestellt. Es wird dir m&ouml;glich sein die Seiten seitenweise darzustellen. Alle anderen Blocks werden hier dann geschlossen. <br /> Aktiviert/Deaktiviert JA/NEIN?',
	'PORTAL_PAGES_PAGE_ACTIVE_NUMBER'        	=> 'Aktive Seite',
	'PORTAL_PAGES_PAGE_ACTIVE_NUMBER_EXPLAIN'   => 'Gib hier eine Seiten-ID an. Diese Seite wird an erster Stelle angezeigt. Eine Kombination aus Center, Column und dem Block mit dem Namen "Portal pages" wird als eines gez&auml;hlt. Alle anderen Blocks werden ignoriert. Lasse dieses Feld nicht leer, sondern schreibe dann 0 hinein. Die Seiten werden Seitenweise dargestellt, wenn mehr als eine Seite vorhanden ist.',
	'PAGES_PAGE_ACTIVE'        					=> 'Einzelseite aktiv',
	'PAGES_PAGE_ACTIVE_NUMBER'        			=> 'Block-ID der Einzelseite',
	'BLOCK_EDIT_PAGES_SETTINGS'        		    => 'Einzelseiten Optionen',

));

?>