<?php
/** 
*
* @name acp_portal_xl_menu.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_menu.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
	'TITLE' 					=> 'Navigatie Menu beheer',
	'TITLE_EXPLAIN'				=> 'Van dit formulier kunt maken / bewerken / verplaatsen / verwijderen van een aangepaste menu-item. Dit menu blok kan worden ingeschakeld / uitgeschakeld in Portaal -> Algemeen -> Navigatie-menu. Iconen voor gebruik in dit menu worden geplaatst in de directory / portal / images / icon_menu /. Aanbevolen pictogramformaat 16x16px. Voeg zoveel iconen als je wilt maar hou in het achterhoofd het voorbeeld ziet ze allemaal, die zich de beschikbare pictogrammen mini-venster in het menu bewerken of toevoegen menu sectie. Pad is ten opzichte van de forums root directory, dwz "http://www.yourdomain.com/" voor een externe link. Interne links kunnen worden toegevoegd zoals "portal.php" te roepen een bepaald bestand van uw site, of "memberlist.php?mode=leaders" om een bepaalde functie van het forum vanuit de navigatie menu.',
	'PORTAL_MENUS_EDIT_HEADER'	=> 'Wijzig menu',
	'ACP_MENU_EXPLAIN'			=> 'Menu beheer getoond op de portal',
	'ACP_PORTAL_MENU'			=> 'Menu beheer',
	'ACTION'					=> 'Actie',
	'ADD_URL'					=> 'Voeg een menu toe',		
	'ADMIN'						=> 'Beheerder',			
	'ALL'						=> 'Iedereen',
	'GUESTS'					=> 'gasten',
	'MENU_ADDED'				=> 'Link succesvol toegevoegd',
	'MENU_REMOVED'				=> 'Link succesvol verwijdert',			
	'MENU_UPDATED'				=> 'Link succesvol geupdate',
	'MOD'						=> 'Moderator',
	'MUST_SELECT_MENU'			=> 'Selecteer',
	'NAME_LINK'					=> 'Link naam',
	'NAME_URL_EXPLAIN'			=> 'Link naam zoals te zien in portal menu',
	'NONE'						=> 'Geen',
	'REG'						=> 'Geregistreerd',
	'RESET_MENU'				=> 'Verwijder',		
	'STAFF'						=> 'Team',
	'URL_EXPLAIN'				=> 'Url van de link',
	'URL_EXPLAIN_2'				=> 'De URL kan als volgt ingevoert worden. Bijvoorbeeld: <br>index.php voor interne links, <br>http://google.com voor externe links',		
	'URL_IMG'					=> 'Icoon url zoals getoond in link menu',	
	'URL_IMG_2'					=> 'Mini icoon',		
	'URL_IMG_EXPLAIN'			=> 'Afbeeldings Url zoals getoond in link menu',
	'URL_IMG_EXPLAIN2'			=> 'Klik op de geselecteerde afbeelding',		
	'URL_LINK'					=> 'Link url',
	'VIEW_BY'					=> 'Gettond aan',
	'VIEW_BY_EXPLAIN'			=> 'Bepaalt wie de link op de portal mag bekijken',	
	'MENU_FNAME_INFO'		    => 'Beschikbare mini inconen',	
	'MENU_FNAME_I_EXPLAIN'		=> 'Preview van de beschikbare mini-pictogrammen kunt u kiezen uit (afbeeldingen zijn geplaatst in de map / portal / images / icon_menu / indien u graag meer mini toevoegt pictogrammen). Aanbevolen pictogramformaat 16x16px.',	
	'MENU_FNAME_I_CHOSEN'		=> 'Gekozen mini afbeelding.',	
	'OPEN_IN'					=> 'Open in',
	'OPEN_IN_EXPLAIN'			=> 'Bepaalt hoe de link wordt geopend. <br />Ja = Nieuw venster, Nee = zelfde venster',	
	'OPEN_IN_BLANK'				=> 'Nieuw venster',
	'OPEN_IN_SAME'				=> 'Zelfde venster',
		
   ));

?>