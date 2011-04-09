<?php
/** 
*
* @name acp_portal_xl_quotes.php [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_quotes.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
	'TITLE' 					=> 'Nastavenie Citátov',
	'TITLE_EXPLAIN'				=> 'V tomto zadaní môžete vytvárať, upravovať alebo vymazať Citáty. Môžete pridať toľko citátov koľko chcete, ale je to limitované náhodným zobrazením 1 citátu.',
 
	'PORTAL_QUOTES_EDIT_HEADER'	=> 'Pridať alebo upraviť citát',
	'ACP_MANAGE_QUOTE'			=> 'Pridať alebo upraviť citát',
	'ACP_QUOTE_EXPLAIN'			=> 'Správa citátov',
	'ADD_QUOTE'					=> 'Pridať citát',
	'AUTHOR'					=> 'Autor',
	'AUTHOR_INFO'				=> 'Autor',
	'AUTHOR_EXPLAIN'			=> 'Zadajte ak je známy názov originálneho autora.',
	'DISABLE'					=> '<b>Blok je aktivovaný</b>',
	'DISABLE_BLOCK'				=> 'Aktivovať',
	'ENABLE'					=> '<b>Blok je zablokovaný</b>',
	'ENABLE_BLOCK'				=> 'Zablokovať',
	'MUST_SELECT_QUOTE'			=> 'Volba citátu',
	'QUOTE'						=> 'Citáty v databáze ',
	'QUOTE_INFO'				=> 'Citát',
	'QUOTE_EXPLAIN'				=> 'Zadanie pre text vášho citátu',
	'QUOTE_ADDED'				=> 'Citát bol úspešne pridaný',
	'QUOTE_DISABLE'				=> '<b>Aktivovať</b>',
	'QUOTE_DISABLE_EXPLAIN'		=> '<b>Aktivovaný:</b><br>Blok sa zobrazí na fóre.',
	'QUOTE_DISABLE_EXPLAIN2'	=> 'Môžete zapnúť alebo vypnúť zobrazovanie citátov v Bloku na fóre: ',
	'QUOTE_REMOVED'				=> 'Citát bol úspešne odstránený',
	'QUOTE_UPDATED'				=> 'Citát bol úspešne upravený',
	'RESET_QUOTE' 				=> 'Vynulovať',

));

?>