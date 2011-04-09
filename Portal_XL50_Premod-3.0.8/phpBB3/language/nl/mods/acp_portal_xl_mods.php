<?php
/** 
*
* @name acp_portal_xl_mods.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_mods.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
	'TITLE' 					=> 'Beheer Mod\'s database',
	'TITLE_EXPLAIN'				=> 'Hier kun je je Mods database bijhouden, creeer/wijzig/verwijder Mods vanuit hier.',
 
	'PORTAL_MOD_EDIT_HEADER'	=> 'Toevoegen of wijzigen van een Mod',
	'ACP_MANAGE_MOD'			=> 'Voeg toe of wijzig Mods',
	'ACP_MOD_EXPLAIN'			=> 'Mods beheer',
	'ADD_MOD'					=> 'Voeg mod toe',
	'DISABLE'					=> '<b>Blok enabled</b>',
	'DISABLE_BLOCK'				=> 'Enable',
	'ENABLE'					=> '<b>Block disabled</b>',
	'ENABLE_BLOCK'				=> 'Disable',
	'MUST_SELECT_MOD'			=> 'Geselecteerde mod',
	'MOD'						=> 'Mods in de database',
	'MOD_INFO'					=> 'Mod',
	'MOD_EXPLAIN'				=> 'De tekst van je mod gaat hierin',
	'MOD_ADDED'					=> 'Mod succesvol toegevoegd',
	'MOD_DISABLE'				=> '<b>Enable</b>',
	'MOD_DISABLE_EXPLAIN'		=> '<b>Enable :</b><br>Blok op het forum.',
	'MOD_DISABLE_EXPLAIN2'		=> 'Je kunt het blok enablen/disablen op het forum : ',
	'MOD_REMOVED'				=> 'Mod succesvol verwijdert',
	'MOD_UPDATED'				=> 'Mod succesvol gewijzigd',
	'RESET_MOD' 				=> 'Reset',
	'MOD_EDIT'					=> 'Wijzig mods',
	'MOD_EDIT_EXPLAIN'			=> 'Hier kunt u toevoegen of bewerken een bestaand Mod binnenkomst. De titel en het versienummer zijn vereist. U zult ook in staat om details van de plaats waar de Mod gedownload kan worden en waar de Mod zelf kan worden gevonden',
	'MOD_TITLE'					=> 'Mod Titel',
	'MOD_TITLE_EXPLAIN'			=> 'Kleine maar pakkende titel van de mod.',
	'MOD_VERSION'				=> 'Versie',
	'MOD_VERSION_EXPLAIN'		=> 'Versie nummer bijv 0.4B5',
	'MOD_VERSION_TYPE'			=> 'Versie Type',
	'MOD_VERSION_TYPE_EXPLAIN'	=> 'Alpha, Beta, Dev of RC*',
	'MOD_DESC'					=> 'Omschrijving',
	'MOD_DESC_EXPLAIN'			=> 'De omschrijving van je mod komt hier. Een goede beschrijving kun je meestal vinden als je de mod installeert.',
	'MOD_AUTHOR'				=> 'Auteur',
	'MOD_AUTHOR_EXPLAIN'		=> 'Naam van de originele auteur. Zet hier "unknown" neer als je het niet weet.',
	'MOD_URL'					=> 'URL',
	'MOD_URL_EXPLAIN'			=> 'Zet hier de link neer naar de Mod op een externe site.',
	'MOD_DOWNLOAD'				=> 'Download',
	'MOD_DOWNLOAD_EXPLAIN'		=> 'Zet hier de download URL neer voor de Mod.',

));

?>