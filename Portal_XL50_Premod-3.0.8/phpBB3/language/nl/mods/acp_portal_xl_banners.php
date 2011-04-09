<?php
/** 
*
* @name acp_portal_xl_banners.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_banners.php,v 1.3 2009/10/18 damysterious Exp $
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
	'TITLE_PARTNERS' 				=> 'Partners beheer 88x31px',
	'TITLE_PARTNERS_EXPLAIN'		=> 'Via dit formulier is maken / bewerken / verwijderen mogelijk voor partners items. <br /> Pad is relatief aan de forums hoofdmap, dwz "http://www.yourdomain.com/" voor een externe link. Interne links naar banners kunnen worden toegevoegd zoals "portal/images/banners/88x31/yourdomain.com.gif". Max beeldformaat 88x31 pixel, grotere afbeeldingen worden verkleind tot die waarde in de portal blok. U kunt zo veel partners zoals u graag laten zien in dit blok, stel je je limiet voor willekeurige weergave van het logo\'s hieronder.',
 
 	'TITLE_HO' 						=> 'Banner management horizontaal 400x60px',
	'TITLE_HO_EXPLAIN'				=> 'Via dit formulier is maken / bewerken / verwijderen mogelijk voor banners items. <br /> pad is relatief aan de forums hoofdmap, dwz "http://www.yourdomain.com/", zoals "portal/images/banners/400x60/yourdomain.com.gif" voor horizontale banners. Max beeldformaat 400x60px, grotere beelden zullen worden aangepast aan die waarde. U kunt net zoveel banners als je wilt laten zien in dit blok, is er een limiet voor willekeurige weergave van 1 logo set. <br /> <br /> ACP voorbeeld van de banners wordt aangepast aan de helft van de werkelijke grootte.',

	'TITLE_VE' 						=> 'Banners management verticaal 130x600px',
	'TITLE_VE_EXPLAIN'				=> 'Via dit formulier is maken / bewerken / verwijderen mogelijk voor banners items. <br /> pad is relatief aan de forums hoofdmap, dwz "http://www.yourdomain.com/", zoals "portal/images/banners/130x600/yourdomain.com.gif" voor verticale banners. Max beeldformaat 130x600px, grotere afbeeldingen worden verkleind tot die waarde in de portal blok. U kunt net zoveel banners als je wilt laten zien in dit blok, is er een limiet voor willekeurige weergave van 1 logo set. <br /> <br /> ACP voorbeeld van de banners wordt aangepast aan de helft van de werkelijke grootte.',
	
	'PORTAL_PARTNERS_EDIT_HEADER'	=> 'Toevoegen of wijzigen van een partner',
	'ACP_MANAGE_PARTNERS'			=> 'Voeg een partner toe of wijzig',	
	'ACP_PARTNERS'					=> 'Partners beheer',
	'ACP_PARTNERS_EXPLAIN'			=> 'Voeg toe, wijzig of verwijder een partner',
	'ADD_PARTNERS'					=> 'Voeg partner toe',
	'MUST_SELECT_PARTNERS'			=> 'Geselecteerde partner',
	'PARTNERS'						=> 'Partners',	
	'PARTNERS_ADDED'				=> 'Partner succesvol toegevoegd',
	'PARTNERS_DESCRIPTION'			=> 'Beschrijving',	
	'PARTNERS_DESCRIPTION_EXPLAIN'	=> 'Partner beschrijving of het doel van de partners site.',
	'PARTNERS_IMG'			        => 'Logo url',
	'PARTNERS_IMG_EXPLAIN'			=> 'Partner logo url, pad is relatief aan de forum hoofdmap, bijv "http://www.yourdomain.com/"',
	'PARTNERS_LOGO'					=> 'Logo (88x31px)',
	'PARTNERS_REMOVED'				=> 'Partner succesvol verwijdert',
	'PARTNERS_UPDATED'				=> 'Partner succesvol gewijzigd',
	'PARTNERS_URL'					=> 'Site url',	
	'PARTNERS_URL_EXPLAIN'			=> 'Partner Site url, pad is relatief aan de forum hoofdmap, bijv "http://www.yourdomain.com/"',
	'RESET_PARTNERS' 				=> 'Reset',

	'PORTAL_PARTNERS_DISPLAY' 			=> 'Random waarde die wordt getoont',
	'PORTAL_PARTNERS_DISPLAY_EXPLAIN' 	=> 'Zet een waarde voor hoeveel banners er getoond worden.',
	'PORTAL_PARTNERS_DISPLAY_VALUE' 	=> 'Gelijktijdig getoonde banners',
	
	'PORTAL_BANNERS_EDIT_HEADER'	=> 'Toevoegen of wijzigen van een banner',
	'ACP_MANAGE_BANNERS'			=> 'Voeg toe of wijzig een banner',	
	'ACP_BANNERS'					=> 'Banners management',
	'ACP_BANNERS_EXPLAIN'			=> 'Voeg toe, wijzig of verwijder een banner',
	'ADD_BANNERS'					=> 'Voeg banner toe',
	'MUST_SELECT_BANNERS'			=> 'Geselecteerde banner',
	'BANNERS'						=> 'Banners',	
	'BANNERS_ADDED'					=> 'Banner succesvol toegevoegd',
	'BANNERS_DESCRIPTION'			=> 'Beschrijving',	
	'BANNERS_DESCRIPTION_EXPLAIN'	=> 'Banner beschrijving zoals het thema van de site.',
	'BANNERS_IMG_EXPLAIN'			=> 'Banner Logo url, pad is relatief aan de site hoofd url, bijv "http://www.yourdomain.com/"',
	'BANNERS_REMOVED'				=> 'Banner succesvol verwijdert',
	'BANNERS_UPDATED'				=> 'Banner succesvol gewijzigd',
	'BANNERS_URL'					=> 'Site url',	
	'BANNERS_URL_EXPLAIN'			=> 'Banner Site url, pad is relatief aan de site hoofd url, bijv "http://www.yourdomain.com/"',
	'RESET_BANNERS' 				=> 'Reset',
	
	'BANNERS_IMG_HO'			    => 'Logo url horizontaal 400x60px',
	'BANNERS_LOGO_HO'				=> 'Logo (400x60px)',

	'BANNERS_IMG_VE'			    => 'Logo url verticaal 130x600px',
	'BANNERS_LOGO_VE'				=> 'Logo (130x600px)',
	
));

?>