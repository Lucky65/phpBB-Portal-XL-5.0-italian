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
	'TITLE_BLOCKS' 						=> 'Blok beheer portaal',
	'TITLE_BLOCKS_EXPLAIN'				=> 'Van dit formulier kunt maken / bewerken / verplaatsen / verwijderen Blocks en Block objecten op het portaal bekijken. Alle richtingen kunnen verplaatsen in uw blok. Er zijn vijf kolommen beschikbaar voor het plaatsen van uw Blok in, boven, links, midden, rechts en onderaan. De standpunten van de verschillende blokken hieronder hebben dezelfde regeling, zoals u zult zien op uw portal pagina. Beide delen van het blok management met gebruikmaking van dezelfde blokken zijn van elkaar, zodat u in staat bent om een andere look en feel op portaal en de index / viewforum.',
  	'TITLE_BLOCKS_COLUMN_EXPLAIN'		=> 'Links en rechts kolombreedte instellingen. Hier kunt u uw linker-en rechter kolom breedte van informatie portal\'s hoofdpagina.',

	'TITLE_BLOCKS_INDEX' 				=> 'Blok beheer index/viewforum/viewtopic',
	'TITLE_BLOCKS_INDEX_EXPLAIN'		=> 'Van dit formulier kunt maken/bewerken/verplaatsen/verwijderen Blocks en Block items aan de index/viewforum/viewtopic uitzicht. Alle richtingen kunnen verplaatsen in uw blok. Er zijn vijf kolommen beschikbaar voor het plaatsen van uw Blok in, boven, links, midden, rechts en onderaan. De standpunten van de verschillende blokken hieronder hebben dezelfde regeling, zoals u zult zien op uw index/viewforum/viewtopic pagina. Beide delen van het blok management met gebruikmaking van dezelfde blokken zijn van elkaar, zodat u in staat bent om een andere look en feel op portaal en de index/viewforum/viewtopic. <br/> <br/> <strong style="text-transform: uppercase;"> Opmerking: </strong> Houd er rekening mee <strong> niet </strong> en verwijder <strong> center_forumblock.html </strong> uit het blok management; anders, geen forums zal zichtbaar zijn om uit te kiezen op de index pagina!',
 	'TITLE_BLOCKS_INDEX_COLUMN_EXPLAIN'	=> 'Links en rechts kolombreedte instellingen. Hier kunt u uw linker-en rechter kolom breedte van informatie portal\'s index/viewforum/viewtopic pagina.',

	'TITLE_PAGES' 						=> 'Pagina beheer portal',
	'TITLE_PAGES_EXPLAIN'				=> 'Van dit formulier kunt maken / bewerken / verplaatsen / verwijderen pagina\'s en objecten op de portal pagina\'s te openen. Alle richtingen zijn toegestaan om uw pagina in. Er zijn vijf kolommen beschikbaar voor het plaatsen van uw pagina in, boven, links, midden, rechts en onderaan. De standpunten van de verschillende pagina\'s hieronder hebben dezelfde regeling, zoals u zult zien op uw pagina\'s portal-pagina.',
  	'TITLE_PAGES_COLUMN_EXPLAIN'		=> 'Left and right column width settings. Here you can change your left and right column width information of portal\'s main page.',

	'BLOCK_EDIT_HEADER'					=> 'Wijzig/creeer een blok',
	'BLOCK_EDIT_HEADER_MAIN'			=> 'Hoofd blok beheer',
	'BLOCK_COLUMN_SETTINGS'				=> 'Kolom breedte',
	'BLOCK_EDIT_COLUMN_SETTINGS'		=> 'Wijzig een kolom breedte',

	'ADD_BLOCK'							=> 'Voeg blok toe',
	'CANCEL'							=> 'Annuleer',	
	'PIXEL'								=> 'Pixel',
	'BLOCK_ACTIV'						=> 'Blok activatie',
	'BLOCK_ACTIVE'						=> 'Activeer',
	'BLOCK_ACTIV_EXPLAIN'				=> 'Laat dit blok zien? Ja/Nee?',	
	'BLOCK_CENTRE'						=> 'Niet beschikbaar',
	'BLOCK_HTML'						=> 'Html bestand',
	'BLOCK_HTML_EXPLAIN'				=> 'Selecteer een voorgedefinieerd blok (*.html file) voor gebruik.',		
	'BLOCK_NAME'						=> 'Naam van het blok',
	'BLOCK_NAME_EXPLAIN'				=> 'Unieke naam voor je blok. Deze naam zal worden getoond als titel van je blok op de portal\'s voorpagina.',	
	'BLOCK_ORD'							=> 'Volgorde',	
	'BLOCK_ORDER'						=> 'Volgorde',
	'BLOCK_POS'							=> 'Positie',
	'BLOCK_REMOVED'						=> 'Blok sucesvol verwijdert',
	'BLOCK_UPDATED'						=> 'Succesvol geupdate',
	'BLOCK_ADDED'						=> 'Succesvol toegevoegd',
	'BLOCK_CENTER'						=> 'Centrale positie',	
	'BLOCK_BOTTOM'						=> 'Onderste positie',
	'BLOCK_DISABLE_EX'					=> 'Blok gedeactiveerd',	
	'BLOCK_RIGHT'						=> 'Rechter positie',
	'BLOCK_LEFT'						=> 'Linker positie',
	'BLOCK_TOP'						    => 'Bovenste positie',
	'BLOCK_NAME_EDIT'					=> 'Wijzig blok',
	'BLOCK_ORD'							=> 'Volgorde:',	
	'BLOCK_ORD_EXPLAIN'					=> 'Geef aan welke kolom dit blok te worden toegevoegd. Mogelijke opties zijn boven, links, midden, rechts en onderaan.',	
	'BLOCK_POSITION'					=> 'Laatste positie',	
	'BLOCK_POSITION_EXPLAIN'			=> 'Kies een kolom zoals hierboven',	
	'DISABLE_BLOCK'						=> 'Activeer blok',
	'ENABLE_BLOCK'						=> 'Deactiveer blok',
	'ICON_DELETE'						=> 'Het verwijderen van het eigen blok is toegestaan, vooraf gedefinieerde blokken kunnen niet worden verwijderd.',
	'ICON_EDIT'							=> 'Bewerken van eigen gemaakt blokken zijn toegestaan, vooraf gedefinieerde blokken kunnen niet worden bewerkt.',
	'ICON_MOVE_BOTTOM'					=> 'Verplaats het blok naar een kolom lager',
	'ICON_MOVE_BOTTOM_DIRECT'			=> 'Verplaats het blok naar de onderste kolom',	
	'ICON_MOVE_DOWN'					=> 'Verplaats het blok 1 kolom naar beneden',
	'ICON_MOVE_LEFT'					=> 'Verplaats het blok 1 kolom naar links',	
	'ICON_MOVE_LEFT_DIRECT'				=> 'Verplaats het blok naar de meest linkse kolom',	
	'ICON_MOVE_RIGHT'					=> 'Verplaat het blok 1 kolom naar rechts',
	'ICON_MOVE_RIGHT_DIRECT'			=> 'Verplaats het blok naar de meest rechtse kolom',	
	'ICON_MOVE_TOP'						=> 'Verplaats het blok 1 kolom naar boven',
	'ICON_MOVE_TOP_DIRECT'				=> 'Verplaat het blok naar de bovenste kolom',
	'ICON_MOVE_UP'						=> 'Verplaats het blok 1 kolom naar boven',
	'OPEN_ICON_PREVIEW'					=> 'Open icoon voorbeeld',	
	'CLOSE_ICON_PREVIEW'				=> 'Sluit icoon voorbeeld',
	'MUST_SELECT_BLOCK'					=> 'Selectie error',
	'OFFLIGNE'							=> 'Blok is gedeactiveerd, klik op het icoontje om te activeren',
	'ONLIGNE'							=> 'Blok is deactiveerd, klik op het icoontje om te deactiveren',
	'RESET_INCLUDE_BLOCK'				=> 'Verwijder',
	'SUBMIT_INCLUDE_BLOCK'				=> 'Opslaan',
	'PERMISSION' 						=> 'Blok machtiging',
	'PERMISSION_EXPLAIN' 				=> 'Secteer wie het blok kan zien:',
	'ADMIN'								=> 'Beheerder',			
	'ALL'								=> 'Iedereen',
	'GUESTS'							=> 'Gasten',
	'MOD'								=> 'Moderator',
	'NONE'								=> 'Niemand',
	'REG'								=> 'Geregistreerde',
	'STAFF'								=> 'Team',
	'URL_IMG_EXPLAIN'					=> 'Afbeelding url in het menu links',
	'URL_IMG_EXPLAIN2'					=> 'Klik op de geselecteerde afbeelding',		
	'BLOCK_FNAME_INFO'		    		=> 'Beschikbare mini icoontjes',	
	'BLOCK_FNAME_I_EXPLAIN'				=> 'Preview van de beschikbare mini-pictogrammen kunt u kiezen uit (afbeeldingen zijn geplaatst in de map / portal / images / icon_menu / indien u zou willen toevoegen meer mini-pictogrammen). Aanbevolen icoon grootte is 16x16px.',	
	'BLOCK_FNAME_I_CHOSEN'				=> 'Gekozen mini afbeelding.',	
    'CONFIG_UPDATED'					=> 'Configuratie succesvol geupdate.',
    'CONFIG_ADDED'						=> 'Configuration succesvol toegevoegd.',

	'DELETE'							=> 'Verwijder blok',
	'EDIT'								=> 'Wijzig blok',
	'MOVE_BOTTOM'						=> 'Verplaats 1 kolom naar beneden',
	'MOVE_BOTTOM_DIRECT'				=> 'Verplaats naar de onderste kolom',	
	'MOVE_DOWN'							=> 'Verplaats 1 kolom naar bendeden',
	'MOVE_LEFT'							=> 'Verplaats 1 kolom naar rechts',	
	'MOVE_LEFT_DIRECT'					=> 'Verplaats naar de meest linker kolom',	
	'MOVE_RIGHT'						=> 'Verplaats 1 kolom naar rechts',
	'MOVE_RIGHT_DIRECT'					=> 'Verplaats naar de meest rechtse kolom,',	
	'MOVE_TOP'							=> 'Verplaats 1 kolom naar boven',
	'MOVE_TOP_DIRECT'					=> 'Verplaats naar de bovenste kolom',
	'MOVE_UP'							=> 'Verplaats 1 rij omhoog',

	'BLOCK_CONTENT'						=> 'Inhoud',	
	'BLOCK_CONTENT_EXPLAIN'				=> 'Inhoud van het aangepaste blok gaat onafscheidelijk verbonden zijn aan. <br /> <br /> Als je gebruik maakt van dit gebied voor het aanpassen van uw portal blok dat je moet kiezen <strong> blank_custom_block.html </ strong> als HTML-bestand uit het drop-down optie hieronder om de inhoud in een blok te verwijderen. <strong> blank_custom_block.html </ strong> kan gekozen worden zo vaak als u nodig heeft.',
	
	'ACP_PORTAL_COLLUMN_WIDTH_INFO'              => 'Portal Collumn width',
	'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS'          => 'Left and right column width settings',	
	'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS_EXPLAIN'  => 'Here you can change your left and right column width information of portals page.',
	
	'PORTAL_LEFT_COLLUMN_WIDTH'                  => 'Left column width',
	'PORTAL_LEFT_COLLUMN_ACTIVE'                 => 'Left column active',
	'PORTAL_LEFT_COLLUMN_ACTIVE_EXPLAIN'         => 'Enable/Disable left portal column Yes/No?',
	'PORTAL_LEFT_COLLUMN_WIDTH_EXPLAIN'          => 'Change the width of left portal column in pixel, recommended value 180',
	
	'PORTAL_RIGHT_COLLUMN_WIDTH'                 => 'Right column width',
	'PORTAL_RIGHT_COLLUMN_ACTIVE'                => 'Right column active',
	'PORTAL_RIGHT_COLLUMN_ACTIVE_EXPLAIN'        => 'Enable/Disable right portal column Yes/No?',
	'PORTAL_RIGHT_COLLUMN_WIDTH_EXPLAIN'         => 'Change the width of right portal column in pixel, recommended value 180',
	
	'PORTAL_LAYOUT'                 			 => 'Portal Layout',
	'PORTAL_LAYOUT_ACTIVE'                		 => 'Display column layout on portal',
	'PORTAL_LAYOUT_EXPLAIN'        				 => 'This main switch is able to switch on/off the left and right columns by one click without the use of the options below, center column will resize. <br /> Enable/Disable Yes/No?',
	
	'PORTAL_INDEX_LAYOUT'                 		=> 'Index Layout',
	'PORTAL_INDEX_LAYOUT_ACTIVE'                => 'Display column layout on index/viewforum/viewtopic',
	'PORTAL_INDEX_LAYOUT_EXPLAIN'        		=> 'This main switch is able to switch on/off the left and right columns by one click without the use of the options below, center column will resize. <br /> Enable/Disable Yes/No?',
	
	'PORTAL_PAGES_LAYOUT'                 		=> 'Pages Layout',
	'PORTAL_PAGES_LAYOUT_ACTIVE'                => 'Display column layout on portal pages',
	'PORTAL_PAGES_LAYOUT_EXPLAIN'        		=> 'This main switch is able to switch on/off the left and right columns by one click without the use of the options below, center column will resize. <br /> Enable/Disable Yes/No?',
	
	'PORTAL_PAGES_PAGE_ACTIVE'        			=> 'Single page display',
	'PORTAL_PAGES_PAGE_ACTIVE_EXPLAIN'        	=> 'This switch is able to switch on/off the single page view option. If set to Yes one single page will be shown instead of the known column lay-out. If more than one page is created using block "Portal pages" they will be grouped together and paginated. You will be able to view pages page by page. All other blocks are closed out here. <br /> Enable/Disable Yes/No?',
	'PORTAL_PAGES_PAGE_ACTIVE_NUMBER'        	=> 'Active page',
	'PORTAL_PAGES_PAGE_ACTIVE_NUMBER_EXPLAIN'   => 'Specify a page ID here. This page will be displayed in first position. Combination of centre column and block name "Portal pages" will be count in only. All other blocks will be ignored. Do not leave this field empty, 0 is required than. Pages will be paginated if more than one is available.',
	'PAGES_PAGE_ACTIVE'        					=> 'Singel page active',
	'PAGES_PAGE_ACTIVE_NUMBER'        			=> 'Single page active block ID',
	'BLOCK_EDIT_PAGES_SETTINGS'        		    => 'Single page options',

));

?>