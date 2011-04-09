<?php
/** 
*
* @name acp_portal_xl_acronyms.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_acronyms.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
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
	'TITLE' 					=> 'Acronym en afkorting beheer',
	'TITLE_EXPLAIN'				=> 'Van dit formulier kunt maken / wijzigen / verwijderen acroniemen. Acroniemen en afkortingen initialisms zijn, zoals de NAVO <strong> </ strong>, <strong> laser </ strong>, en <strong> IBM </ strong>, die worden gevormd met behulp van de beginletters van woorden of delen in een woord zin of naam. Acroniemen en initialisms zijn meestal uitgesproken op een manier die is verschillend van die van de volledige vormen waarvoor ze staan: als de namen van de afzonderlijke letters (zoals in <em> <strong> IBM </ strong> </ em>), als een woord (zoals in <em> <strong> NAVO </ strong> </ em>), of als een combinatie (zoals in <em> <strong> IUPAC </ strong> </ em>). U kunt zo veel acroniemen als u wilt verwerken.',
 
	'PORTAL_ACRONYMS_EDIT_HEADER'	=> 'Wijzigen of toevoegen van een acroniem',
	'ACP_MANAGE_ACRONYM'			=> 'Wijzig of voeg acroniemen toe',
	'ACP_ACRONYM_EXPLAIN'			=> 'Acroniemen beheer',
	'ADD_ACRONYM'					=> 'Voeg een acroniem toe',
	'DESCRIPTION'					=> 'Acroniem',
	'DESCRIPTION_INFO'				=> 'Acroniem phrase',
	'DESCRIPTION_EXPLAIN'			=> 'Phrase output van de bovenstaande acroniem.',
	'MUST_SELECT_ACRONYM'			=> 'Geselecteerde acroniem',
	'ACRONYM'						=> 'Acroniemen in de database',
	'ACRONYM_INFO'					=> 'Acroniem',
	'ACRONYM_EXPLAIN'				=> 'Beginletters van woorden of woordcombinaties delen van uw afkorting gaat onafscheidelijk verbonden zijn aan',
	'ACRONYM_ADDED'					=> 'Acroniem succesvol toegevoegd',
	'ACRONYM_DISABLE_EXPLAIN2'		=> 'Je kunt dit block aan of uitzetten op het forum : ',
	'ACRONYM_REMOVED'				=> 'Acroniem succesvol verwijdert',
	'ACRONYM_UPDATED'				=> 'Acroniem succesvol gewijzigd',
	'RESET_ACRONYM' 				=> 'Reset',
	'BLOCK_ACRONYM_SETTINGS'		=> 'Algemene acroniemen instellingen',
	'ACRONYM_ALLOW'					=> 'Acroniemen over de gehele site teogstaan?',
	'ACRONYM_ACTIVE'				=> 'Sta acroniemen toe',
	'ACRONYM_ACTIVE_EXPLAIN'		=> 'Activeer acroniemen over de gehele website? Ja/Nee?',	
	'ACRONYM_URL'					=> 'Link url',
	'ACRONYM_URL_INFO'				=> 'Url to link to',
	'ACRONYM_URL_EXPLAIN'			=> 'Ad here a link the acronym should point to.',
));

?>