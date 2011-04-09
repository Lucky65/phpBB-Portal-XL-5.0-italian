<?php
/** 
*
* @name acp_portal_xl_forumadds.php [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_forumadds.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
	'TITLE' 				=> 'Nastavenie Inzerátov vo fóre',
	'TITLE_EXPLAIN'			=> 'V tomto zadaní môžete nastaviť alebo pridať inzeráty na fórum, všetky zobrazené položky tém budú zobrazené náhodne.',

	'NEED_VALUES'  			=> 'Musia byť vyplnené <strong>všetky</strong> poľia, aby sa inzerát mohol realizovať.',
	'ADDED'  				=> 'Inzerát bol úspešne pridaný do databázy!',
	'UPDATED'  				=> 'Inzerát bol úspešne aktualizovaný.',
	'DELETED' 	 			=> 'Inzerát bol z databázy úspešne vymazaný!',
	'REALY_DELETE'  		=> 'Ste si istý, naozaj mám vymazať tento inzerát?',
	'MUST_SELECT_ADDS'		=> 'Celková ponuka',
	
	'ADDS'  				=> 'Inzerát',
	'NEW_AD' 				=> 'Pridať Inzerát',
	'ADDS_NAME' 			=> 'Názov',
	'ADDS_NAME_DESC' 		=> 'Názov oznámenia.',
	'ADDS_CODE' 			=> '  Obsah inzerátu',
	'ADDS_CODE_DESC' 		=> 'Obsah pre použitie v Inzeráte',
	'ADDS_FORUMS' 			=> 'Fóra',
	'ADDS_FORUMS_DESC' 		=> 'Vyplňte ID fóra alebo fóra na ktorých bude zobrazené toto oznámenie, viacero fór musí byť oddelené čiarkou.',
	'ADDS_FORUMS_DESCALL' 	=> 'Zobrazím na všetkých Fórach?',
	'ADDS_ACTIVE' 			=> 'Aktívny pre',
	'ADDS_ACTIVE_DESC' 		=> 'Zobrazím toto oznámenie? ',
	'YES' 					=> 'Áno',
	'NO' 					=> 'Nie',
	'GUEST' 				=> 'Hosťov',
	'ADDS_VIEWS' 			=> 'Zobrazenie Inzerátu',
	'ADDS_ALL' 				=> 'Všetky fóra',
	'ADDS_SHOW' 			=> 'Vo fóre',
	'ADDS_VIEWS_DESC' 		=> 'Počet zobrazení pre tento inzerát',
	'ADDS_MAX_VIEWS' 		=> 'Max.zobr.',
	'ADDS_MAX_VIEWS_DESC' 	=> 'Maximálny počet zobrazení pre tento inzerát',         
	'POSITION' 				=> 'Pozícia',
	'POSITION_DESC' 		=> 'Na ktorej pozícii má byť inzerát zobrazený? ',
	'POSITION1' 			=> 'Po prvom príspevku',
	'POSITION2' 			=> 'Po každom príspevku',
	'POSITION3' 			=> 'Nad príspevkom',
	'POSITION4' 			=> 'Pod príspevkom',
	'ADDS_IN_SYSTEM' 		=> 'Inzeráty z databázy',
	'ADDS_IN_SYSTEM_DESC' 	=> 'Zoznam Inzerátov už uložených v databáze',
	'SHOW_IN_ALL_FORUMS' 	=> 'Zobrazím na všetkých fórach?',
	'ADD_ADVERTISEMENT'		=> 'Pridať oznámenie',		
	'RESET_ADDS'			=> 'Reset',		
	'ADD_ADDS'				=> 'Pridať oznámenie',		

	));

?>