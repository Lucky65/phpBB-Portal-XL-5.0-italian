<?php
/** 
*
* @name acp_portal_xl_banners.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_banners.php,v 1.3 2009/10/18 damysterious Exp $
* @german update by woipi
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
	'TITLE_PARTNERS' 				=> 'Partner Verwaltung 88x31px',
	'TITLE_PARTNERS_EXPLAIN'		=> 'Hier kannst du die Partnereinstellungen verwalten.<br /> Pfad ist relativ zum root, z. Bsp. "http://www.yourdomain.com/" f&uuml;r einen externen Link. Interne Links k&ouml;nnen hinzugef&uuml;gt werden wie "portal/images/banners/88x31/yourdomain.com.gif". Die maximale Bildgr&ouml;&szlig;e betr&auml;gt 88x31 Pixel, gr&ouml;&szlig;ere Bilder werden auf die Einstellungen im Portalblock angepasst. F&uuml;g hinzu soviel du willst, aber es existiert ein Limit f&uuml;r zuf&auml;llige Bilder. 6 Logo\'s gleichzeitig um den Server zu schonen.',
 
 	'TITLE_HO' 						=> 'Banner Verwaltung horizontal 400x60px',
	'TITLE_HO_EXPLAIN'				=> 'Hier kannst du banner erstellen/bearbeiten/l&ouml;schen. <br /> Relative Pfadangabe zum root, z. Bsp. "http://www.yourdomain.com/", wie "portal/images/banners/400x60/yourdomain.com.gif" f&uuml;r horizontale banner. Max. Bildgr&ouml;&szlig;e 400x60px, gr&ouml;&szlig;ere Bilder werden in den Standardwerten dargestellt. Nur 1 Logo Set. <br /><br />ACP Blick ist um die H&auml;lfte kleiner als die Originalgr&ouml;&szlig;e.',

	'TITLE_VE' 						=> 'Banner Verwaltung Vertikal 130x600px',
	'TITLE_VE_EXPLAIN'				=> 'Hier kannst du Banner erstellen/ver&auml;ndern/l&ouml;schen. <br /> Der Pfad bezieht sich relativ auf das Foren root Verzeichnis. z.B. "http://www.yourdomain.com/", wie "portal/images/banners/130x600/yourdomain.com.gif" f&uuml;r vertikale Banner. Maximale Bildgr&ouml;&szlig;e ist 130x600px, gr&ouml;&szlig;ere Bilder werden an den jeweiligen Wert im Portal angepasst. Du kannst beliebig viele Banner einem Block hinzuf&uuml;gen, jedoch gibt es eine Grenze von 1 Zeichens&auml;tze unterschiedlicher Aufl&ouml;sungen. <br /><br />ACP Die dargestellten Banner sind um 50% kleiner als im Original.',
 
	'PORTAL_PARTNERS_EDIT_HEADER'	=> 'Hinzuf&uuml;gen und Bearbeiten von Partnern',
	'ACP_MANAGE_PARTNERS'			=> 'Hinzuf&uuml;gen und Bearbeiten von Partnern',	
	'ACP_PARTNERS'					=> 'Partner verwalten ',
	'ACP_PARTNERS_EXPLAIN'			=> 'Hinzuf&uuml;gen, bearbeiten, l&ouml;schen eines Partners',
	'ADD_PARTNERS'					=> 'Partner hinzuf&uuml;gen',
	'MUST_SELECT_PARTNERS'			=> 'Kein Partner ausge&auml;hlt',
	'PARTNERS'						=> 'Partner',	
	'PARTNERS_ADDED'				=> 'Partner erfolgreich hinzugef&uuml;gt',
	'PARTNERS_DESCRIPTION'			=> 'Beschreibung',	
	'PARTNERS_DESCRIPTION_EXPLAIN'	=> 'Partner Beschreibung der Partnerseite.',
	'PARTNERS_IMG'			        => 'Logo URL',
	'PARTNERS_IMG_EXPLAIN'			=> 'Partner Logo URL, Pfad ist relativ zum root Verzeichnis, z. Bsp. "http://www.yourdomain.com/"',
	'PARTNERS_LOGO'					=> 'Logo (88x31px)',
	'PARTNERS_REMOVED'				=> 'Partner erfolgreich entfernt',
	'PARTNERS_UPDATED'				=> 'Partner erfolgreich bearbeitet',
	'PARTNERS_URL'					=> 'Seite URL',	
	'PARTNERS_URL_EXPLAIN'			=> 'Partner Seite URL, Pfad ist relativ zum root Verzeichnis, z. Bsp. "http://www.yourdomain.com/"',
	'RESET_PARTNERS' 				=> 'Zur&uuml;cksetzen',
	
	'PORTAL_PARTNERS_DISPLAY' 			=> 'Zufalles-Anzeige Wert',
	'PORTAL_PARTNERS_DISPLAY_EXPLAIN' 	=> 'Wiviele verschiedne Banner sollen per Zufall in diesem Block per Zufall angeigt werden.',
	'PORTAL_PARTNERS_DISPLAY_VALUE' 	=> 'Gleichzeitiges Anzeigen von Bannern',
	
	'PORTAL_BANNERS_EDIT_HEADER'	=> 'Banner hinzuf&uuml;gen oder bearbeiten',
	'ACP_MANAGE_BANNERS'			=> 'Banner hinzuf&uuml;gen oder bearbeiten',	
	'ACP_BANNERS'					=> 'Banner verwalten ',
	'ACP_BANNERS_EXPLAIN'			=> 'Hinzuf&uuml;gen, Bearbeiten, L&ouml;schen eines Banners',
	'ADD_BANNERS'					=> 'Banner hinzuf&uuml;gen',
	'MUST_SELECT_BANNERS'			=> 'Kein Banner ausge&auml;hlt',
	'BANNERS'						=> 'Banner',	
	'BANNERS_ADDED'					=> 'Banner erfolgreich hinzugef&uuml;gt',
	'BANNERS_DESCRIPTION'			=> 'Beschreibung',	
	'BANNERS_DESCRIPTION_EXPLAIN'	=> 'Banner Beschreibung passend zum Inhalt der Seite.',
	'BANNERS_IMG_EXPLAIN'			=> 'Banner Logo url, Relative Pfadangabe zum root, z. Bsp. "http://www.yourdomain.com/"',
	'BANNERS_REMOVED'				=> 'Banner erfolgreich entfernt',
	'BANNERS_UPDATED'				=> 'Banner erfolgreich bearbeitet',
	'BANNERS_URL'					=> 'Seite url',	
	'BANNERS_URL_EXPLAIN'			=> 'Banner Seite url, Relative Pfadangabe zum root, z. Bsp. "http://www.yourdomain.com/"',
	'RESET_BANNERS' 				=> 'zur&uuml;cksetzen',
	
	'BANNERS_IMG_HO'			    => 'Logo url horizontal 400x60px',
	'BANNERS_LOGO_HO'				=> 'Logo (400x60px)',

	'BANNERS_IMG_VE'			    => 'Logo url vertical 130x600px',
	'BANNERS_LOGO_VE'				=> 'Logo (130x600px)',
	
));

?>