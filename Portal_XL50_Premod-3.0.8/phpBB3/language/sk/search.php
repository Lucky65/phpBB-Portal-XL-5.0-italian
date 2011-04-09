<?php
/**
*
* search [Slovak]
*
* @package language
* @version $Id: search.php,v 1.26 2010/01/05 23:00:00 phpbb3.sk Exp $
* @copyright (c) 2007 phpBB Group
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

$lang = array_merge($lang, array(
	'ALL_AVAILABLE'			=> 'Všetky dostupné',
	'ALL_RESULTS'			=> 'Všetky výsledky',

	'DISPLAY_RESULTS'		=> 'Zobraziť výsledky ako',

	'FOUND_SEARCH_MATCH'	=> 'Vyhľadávanie našlo %d výsledok',
	'FOUND_SEARCH_MATCHES'	=> 'Vyhľadávanie našlo %d výsledkov',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Vyhľadávanie našlo viac než %d výsledkov',

	'GLOBAL'				=> 'Globálne oznámenie',

	'IGNORED_TERMS'			=> 'vynechané',
	'IGNORED_TERMS_EXPLAIN'	=> 'Tieto slová z vašej požiadavky boli vynechané, pretože obsahovali príliš všeobecné výrazy: <b>%s</b>',

	'JUMP_TO_POST'			=> 'Prejsť na príspevok',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Aby ste si mohli pozerať vaše príspevky, musíte byť prihlásený.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Pre zobrazenie zoznamu neprečítaných príspevkov sa musíte prihlásiť.',
	
  'MAX_NUM_SEARCH_KEYWORDS_REFINE'   => 'Zadali ste príliš veľa kľúčových slov, skúste zadať najviac %1$d slov.',

	'NO_KEYWORDS'			=> 'Musíte zadať minimálne jedno slovo ktoré chcete vyhľadať. Každé slovo musí obsahovať najmenej %d a maximálne %d znakov (okrem *).',
	'NO_RECENT_SEARCHES'	=> 'Neboli nájdené žiadne predchádzajúce vyhľadávania',
	'NO_SEARCH'				=> 'Je nám ľúto, ale nemáte oprávnenie vyhľadávať na tomto fóre.',
	'NO_SEARCH_RESULTS'		=> 'Neboli nájdené žiadne vhodné výsledky.',
	'NO_SEARCH_TIME'		=> 'Ospravedlňujeme sa, ale teraz nemôžete vyhľadávať. Skúste to za niekoľko minút.',
		'NO_SEARCH_UNREADS'		=> 'Ospravedlňujeme sa, ale hľadanie nových príspevkov bolo zakázané na tomto fóre.',
	'WORD_IN_NO_POST'		=> 'Nebol nájdený žiadny príspevok, pretože slovo %s nie je obsiahnuté v žiadnom z príspevkov.',
	'WORDS_IN_NO_POST'		=> 'Nebol nájdený žiadny príspevok, pretože slová %s nie sú obsiahnuté v žiadnom z príspevkov.',

	'POST_CHARACTERS'		=> 'znakov príspevku',

	'RECENT_SEARCHES'		=> 'Posledné vyhľadávanie',
	'RESULT_DAYS'			=> 'Obmedziť výsledky na predchádzajúce',
	'RESULT_SORT'			=> 'Zoradiť výsledky podľa',
	'RETURN_FIRST'			=> 'Vrátiť prvých',
	'RETURN_TO_SEARCH_ADV'	=> 'Návrat do rozšíreného vyhľadávania',

	'SEARCHED_FOR'			=> 'Text vyhľadávania',
	'SEARCHED_TOPIC'		=> 'Prehľadávaná téma',
	'SEARCH_ALL_TERMS'		=> 'Hľadať so všetkými podmienkami alebo text vyhľadávania presne tak, ako bol zadaný',
	'SEARCH_ANY_TERMS'		=> 'Hľadať so všetkými podmienkami',
	'SEARCH_AUTHOR'			=> 'Vyhľadať autora',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Zadaním * nahradíte časť slova',
	'SEARCH_FIRST_POST'		=> 'Len prvý príspevok v téme',
	'SEARCH_FORUMS'			=> 'Prehľadávať fóra',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Zvoľte fórum alebo fóra, v ktorých chcete vyhľadávať. Ak nevypnete možnosť prehľadávať subfóra, budú sa automaticky prehľadávať aj tie.',
	'SEARCH_IN_RESULTS'		=> 'Prehľadať tieto výsledky',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Umiestnenie <strong>+</strong> pred slovom znamená, že slovo musí byť vo výsledkoch a <strong>-</strong> znamená že slovo nemá byť vo výsledkoch. Ak umiestnite <strong>|</strong> pred slová, každý výsledok bude obsahovať aspoň jedno z nich. Použitím * nahradíte časť slova',
	'SEARCH_MSG_ONLY'		=> 'Len text príspevku',
	'SEARCH_OPTIONS'		=> 'Nastavenia vyhľadávania',
	'SEARCH_QUERY'			=> 'Vyhľadávaný text',
	'SEARCH_SUBFORUMS'		=> 'Prehľadávať Sub-fóra',
	'SEARCH_TITLE_MSG'		=> 'Názvy príspevkov a ich texty',
	'SEARCH_TITLE_ONLY'		=> 'Len názvy príspevkov',
	'SEARCH_WITHIN'			=> 'Hľadať vnútri',
	'SORT_ASCENDING'		=> 'Vzostupne',
	'SORT_AUTHOR'			=> 'Autor',
	'SORT_DESCENDING'		=> 'Zostupne',
	'SORT_FORUM'			=> 'Fórum',
	'SORT_POST_SUBJECT'		=> 'Predmet príspevku',
	'SORT_TIME'				=> 'Čas odoslania',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Musíte zadať najmenej %d znakov z mena autora.',
));

?>