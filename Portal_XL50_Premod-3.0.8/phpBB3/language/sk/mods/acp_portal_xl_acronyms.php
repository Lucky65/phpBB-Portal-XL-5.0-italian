<?php
/** 
*
* @name acp_portal_xl_acronyms.php [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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

$lang = array_merge($lang, array(   
	'TITLE' 					=> 'Nastavenie skratiek akronymov',
	'TITLE_EXPLAIN'				=> 'Z tohoto zadania, môžete akronymy vytvárať/editovať/ alebo vymazať. Akronymy sú skratky, také ako <strong>NATO</strong>, <strong>laser</strong>, a <strong>IBM</strong>,  boli vytvorené ako úvodné znaky z časti slov alebo fráz. Akronym je vlastne forma skratky individuálnych znakov (ako je (<em><strong>IBM</strong></em>), alebo (<em><strong>NATO</strong></em>), alebo ako zostava (<em><strong>IUPAC</strong></em>). Môžete si pridať také akronymy aké chcete s ktorými pracujete.',
 
	'PORTAL_ACRONYMS_EDIT_HEADER'	=> 'Pridanie alebo úprava akronymu ',
	'ACP_MANAGE_ACRONYM'			=> 'Pridať alebo upraviť akronymy',
	'ACP_ACRONYM_EXPLAIN'			=> 'Nastavenia akronymov',
	'ADD_ACRONYM'					=> 'Pridať akronym',
	'DESCRIPTION'					=> 'Akronym',
	'DESCRIPTION_INFO'				=> 'Fráza Akronyma',
	'DESCRIPTION_EXPLAIN'			=> 'Slovná formula vyššie uvedeného akronymu.',
	'MUST_SELECT_ACRONYM'			=> 'Vybrané skratky',
	'ACRONYM'						=> 'Skratky v databáze',
	'ACRONYM_INFO'					=> 'Akronym',
	'ACRONYM_EXPLAIN'				=> 'Úvodné znaky slov alebo slovných časti vášho akronymu',
	'ACRONYM_ADDED'					=> 'Akronym bol úspešne pridaný',
	'ACRONYM_DISABLE_EXPLAIN2'		=> 'Môžete aktivovať alebo vypnúť zobrazenie tohoto bloku na fóre : ',
	'ACRONYM_REMOVED'				=> 'Akronym bol úspešne odstránený',
	'ACRONYM_UPDATED'				=> 'Akronym bol úspešne aktualizovaný',
	'RESET_ACRONYM' 				=> 'Reset',
	'BLOCK_ACRONYM_SETTINGS'		=> 'Všeobecné nastavenia akronymov',
	'ACRONYM_ALLOW'					=> 'Rozšírenie skratiek tabulky, sú aktivované?',
	'ACRONYM_ACTIVE'				=> 'Povolím skratky',
	'ACRONYM_ACTIVE_EXPLAIN'		=> 'Aktivujem akronymy rozšírene tabuľky Áno/Nie?',	
	'ACRONYM_URL'					=> 'Link url',
	'ACRONYM_URL_INFO'				=> 'Url pripojenie ku',
	'ACRONYM_URL_EXPLAIN'			=> 'Link akronyma ktorý by mal poukazovať napríklad na: reklamu.',
));

?>