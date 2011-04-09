<?php
/**
*
* sortables captcha [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package language
* @version $Id: captcha_sortables.php 9875 2009-08-13 21:40:23Z Derky $
* @copyright (c) 2009 phpBB Group
* @copyright (c) 2009 Derky - phpBB3styles.net
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
	'CAPTCHA_SORTABLES'				=> '2 Tabulky CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Prosím pretiahnite varianty myšou do korektného zoznamu, aby sa zabránilo automatickéj registrácii.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Prosím, vyberte si nižšie uvedených možností v zozname aby sa zabránilo automatickéj registrácii.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Máte nekorektne vytriedené položky, korektného zoznamu potvrdenia otázky.',

	'QUESTION_ANSWERS'			=> 'Odpoveď',
	'ANSWERS_EXPLAIN'			=> 'Sem napíšte možnú odpoveď do každého riadku zvlášť, ak chcete aby boli platné len v poradí ako ste ich zadali.',
	'CONFIRM_QUESTION'			=> 'Otázka',
	'CHANGES_SUBMIT'			=> 'Odoslať zmeny',

	'EDIT_QUESTION'				=> 'Upraviť Otázku',
	'QUESTIONS'					=> 'Roztriediť Zoznam Otázky',
	'QUESTIONS_EXPLAIN'			=> 'V tomto zadaní môžete pridať a upravovať otázky, ktoré majú byť zodpovedané pri registráciu. Musíte poskytnúť aspoň jednu otázku v predvolenom jazyku ktorý používa tento plugin. Otázky by mali byť jednoduché pre vašu cieľovú skupinu. Užívatelia uvidia všetky možnosti v jednom stĺpci a majú ich správne zoradiť do druhého stĺpca. Nezabudnite pravidelne zmeniť otázky.',
	'QUESTION_DELETED'			=> 'Vymazať otázku',
	'QUESTION_LANG'				=> 'Jazyk',
	'QUESTION_LANG_EXPLAIN'		=> 'Použite jazyk v akom bude otázka položená.',
	'QUESTION_SORT'				=> 'Predvolené zoradenie zoznamu',
	'QUESTION_SORT_EXPLAIN'		=> 'Ide o stĺpec, predvoleného nastavenia v ktorom by mali byť zobrazenie všetky odpovede.',
	
	'COLUMN_LEFT'				=> 'Ľavý stĺpec',
	'COLUMN_RIGHT'				=> 'Pravý stĺpec',
	'COLUMN_NAME'				=> 'Názov stĺpca',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Je na vás či zadáte',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Je na vás či zadáte',
	
	'DEMO_QUESTION'				=> 'Takto bude vyzerať CAPTCHA v prípade, že použijete toto nastavenia ktoré musíte vytvoriť horevyššie v Nastavení zadania.<br /><br /> Čo potrebujem pridať do paradajkovej polievky',	
	'DEMO_NAME_LEFT'			=> 'Zadania',
	'DEMO_NAME_RIGHT'			=> 'Nesprávne',
	'DEMO_OPTION_BANANAS'		=> 'Banány',
	'DEMO_OPTION_TOMATOES'		=> 'Paradajky',
	'DEMO_OPTION_APPLES'		=> 'Jablká',
	'DEMO_PREVIEW_ONLY'			=> 'Zadania v zobrazení sa potom dajú pretiahnuť.',

	'QUESTION_TEXT'				=> 'Otázka',
	'QUESTION_TEXT_EXPLAIN'		=> 'Predloha, ako variant odpovede v stĺpcoch.',

	'SORTABLES_ERROR_MSG'		=> 'Prosím, vyplňte všetky polia a zadajte aspoň jednu z možností pre oba stĺpce.',
));

?>