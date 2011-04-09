<?php
/** 
*
* @name acp_portal_xl_links.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_links.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
	'TITLE' 					=> 'Links beheer',
	'TITLE_EXPLAIN'				=> 'Van dit formulier kunt maken / bewerken / verplaatsen / verwijderen van een aangepaste koppeling Post. Dit menu blok kan worden ingeschakeld / uitgeschakeld in Portaal -> Algemeen -> Links. Iconen voor gebruik in dit menu worden geplaatst in de directory / portal / images / icon_links /. Aanbevolen pictogramformaat 16x16px. Voeg zoveel iconen als je wilt maar hou in het achterhoofd het voorbeeld ziet ze allemaal, die zich de beschikbare pictogrammen mini-venster in het menu bewerken of toevoegen menu sectie. Path is ten opzichte van de forums root directory, dwz "http://www.yourdomain.com/" voor een externe link.',
 
	'PORTAL_LINKS_EDIT_HEADER'	=> 'Wijzig link',
	'ACP_LINKS_EXPLAIN'			=> 'Link beheer zoals te zien in de portal',
	'ACP_PORTAL_LINKS'			=> 'Link beheer',
	'ACTION'					=> 'Actie',
	'ADD_URL'					=> 'Voeg een link toe',		
	'ADMIN'						=> 'Beheerder',			
	'ALL'						=> 'Iedereen',
	'GUESTS'					=> 'gasten',
	'LINKS_ADDED'				=> 'Link succesvol toegevoegd',
	'LINKS_REMOVED'				=> 'Link succesvol gewijzigd',			
	'LINKS_UPDATED'				=> 'Link succesvol verwijdert',
	'MOD'						=> 'Moderator',
	'MUST_SELECT_LINKS'			=> 'Selecteer',
	'NAME_LINK'					=> 'Link naam',
	'NAME_URL_EXPLAIN'			=> 'Link naam zoals in de portal te zien is',
	'NONE'						=> 'Geen',
	'REG'						=> 'Geregistreerd',
	'RESET_LINKS'				=> 'Verwijder',		
	'STAFF'						=> 'Team',
	'URL_EXPLAIN'				=> 'URL van de link',
	'URL_EXPLAIN_2'				=> 'De url kan als volgt ingevoerd worden. Bijv <br>index.php voor interne links, of <br>http://www.google.com voor externe links',		
	'URL_IMG'					=> 'Icoon url getoond in link blok',	
	'URL_IMG_2'					=> 'Mini icoon',		
	'URL_IMG_EXPLAIN'			=> 'Afbeeldings url in blok',
	'URL_IMG_EXPLAIN2'			=> 'Klik op de geselecteerde afbeelding',		
	'URL_LINK'					=> 'Link url',
	'VIEW_BY'					=> 'Wie mag het zien',
	'VIEW_BY_EXPLAIN'			=> 'Bepaalt wie het magt zien',	
	'LINKS_FNAME_INFO'		    => 'Beschikbare mini icoontjes',	
	'LINKS_FNAME_I_EXPLAIN'		=> 'Preview van de beschikbare mini-pictogrammen kunt u kiezen uit (afbeeldingen zijn geplaatst in de map / portal / images / icon_menu / indien u graag meer mini toevoegt pictogrammen). Aanbevolen pictogramformaat 16x16px.',	
	'LINKS_FNAME_I_CHOSEN'		=> 'Gekozen mini afbeelding.',	
		
   ));

?>