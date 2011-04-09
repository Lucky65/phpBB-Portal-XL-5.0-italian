<?php
/**
*
* captcha_qa [Slovak]
*
* @package language
* @version $Id: captcha_qa.php,v 1.195 2010/01/05 23:00:00 phpbb3.sk Exp $
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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Táto otázka je prostriedkom na zabránenie automatických pokusov spambotov.',
	'CONFIRM_QUESTION_WRONG'	=> 'Neodpovedali ste správne na potvrdzovaciu otázku.',

	'QUESTION_ANSWERS'			=> 'Odpovede',
	'ANSWERS_EXPLAIN'			=> 'Zadajte platné odpovede na otázku, jednu na každý nový riadok.',
	'CONFIRM_QUESTION'			=> 'Otázka',

	'ANSWER'					=> 'Odpoveď',
	'EDIT_QUESTION'				=> 'Upraviť otázku',
	'QUESTIONS'					=> 'Otázky',
	'QUESTIONS_EXPLAIN'			=> 'Pre každý formulár, kde ste povolili Q&amp;A plugin, užívatelia budú vyzvaní k odpovedi na jednu z otázok uvedených tu. Ak chcete použiť tento plugin aspoň na jednu otázku musí byť nastavená v predvolenom jazyku. Otázky by mali byť jednoduché na zodpovedanie, ale odpovede by sa nemali dať nájsť na Google™ alebo Zoznam. Použitím väčšieho počtu otázok, ktoré budete pravidelne obmieňať, dosiahnete najlepšie výsledky. Použite kontrolu presné zhody, ak u otázok záleží na veľkosti písmen alebo interpunkci.',
	'QUESTION_DELETED'			=> 'Otázka odstránená',
	'QUESTION_LANG'				=> 'Jazyk',
	'QUESTION_LANG_EXPLAIN'		=> 'Jazyk, v ktorom je otázka a odpoveď.',
	'QUESTION_STRICT'			=> 'Presná zhoda',
	'QUESTION_STRICT_EXPLAIN'	=> 'Ak zapnete kontrolu presnej zhody, bude braný ohľad na veľkosť písmen a medzery.',

	'QUESTION_TEXT'				=> 'Otázka',
	'QUESTION_TEXT_EXPLAIN'		=> 'Otázka, ktorá bude položená užívateľom.',

	'QA_ERROR_MSG'				=> 'Zadajte všetky polia vrátane otázky a aspoň jednej odpovede.',
	'QA_LAST_QUESTION'			=> 'Nemôžete vymazať všetky otázky keď je plugin aktívny.',
));

?>