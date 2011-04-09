<?php
/**
*
* acp_profile.php [Slovak]
*
* @package language
* @version $Id: profile.php,v 1.26 2010/01/05 23:00:00 phpbb3.sk Exp $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Vlastná položka v profile bola úspešne pridaná.',
	'ALPHA_ONLY'	=> 'Iba alfanumerické znaky',
	'ALPHA_SPACERS'	=> 'Alfanumerické znaky a medzery',
	'ALWAYS_TODAY'	=> 'Vždy aktuálny dátum',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Vložte svoje nastavenie sem',
	'BOOL_TYPE_EXPLAIN'	=> 'Zvoľte typ, buď zaškrtávacie pole alebo prepínateľné tlačidlo. Zaškrtávacie políčko sa zobrazí, iba ak je vybrané pre daného užívateľa. V tom prípade bude použitá <strong>druhá</strong> jazyková možnosť. Prepínacie tlačítka sa zobrazia vždy bez ohľadu na ich hodnotu.',

	'CHANGED_PROFILE_FIELD'	=> 'Položka profilu úspešne zmenená',
	'CHARS_ANY'	=> 'Akýkoľvek znak',
	'CHECKBOX'	=> 'Zaškrtávacie pole',
	'COLUMNS'	=> 'Stĺpce',
	'CP_LANG_DEFAULT_VALUE'	=> 'Prednastavená hodnota',
	'CP_LANG_EXPLAIN'	=> 'Popis poľa',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Vysvetlenie poľa pre užívateľa',
	'CP_LANG_NAME'	=> 'Názov/popis poľa zobrazený užívateľovi',
	'CP_LANG_OPTIONS'	=> 'Možnosti',
	'CREATE_NEW_FIELD'	=> 'Vytvoriť novú položku',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Minimálne jedna vlastná položka v profile nebola preložená. Vyplňte požadované informácie kliknutím na odkaz &quot;Preložiť&quot;.',

	'DEFAULT_ISO_LANGUAGE'	=> 'Základný jazyk [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Jazykové kľúče pre základný jazyk neboli vyplnené pre túto položku',
	'DEFAULT_VALUE'	=> 'Základná hodnota',
	'DELETE_PROFILE_FIELD'	=> 'Odstrániť položku profilu',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Skutočne chcete odstrániť túto položku?',
	'DISPLAY_AT_PROFILE'	=> 'Zobraziť v užívateľskom paneli',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Užívateľ môže meniť údaje v ovládacom paneli.',
	'DISPLAY_AT_REGISTER'	=> 'Zobraziť pri registrácii',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Pokiaľ je táto možnosť povolená, položka bude zobrazená aj pri registrácii.',
	'DISPLAY_ON_VT'									=> 'Zobrazit v témach',
	'DISPLAY_ON_VT_EXPLAIN'					=> 'Zobrazí položku v mini-profile pri príspevku na stránke témy.',
  'DISPLAY_PROFILE_FIELD'	=> 'Zobraziť položku profilu',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Položka bude zobrazená na všetkých miestach, ktoré sú povolené v nastaveniach. Nastavenie tejto možnosti na Nie, skryje toto pole na stránke príspevkov, profilov a zozname členov.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'Vložte možnosti, každú možnosť na nový riadok.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Majte na vedomí, že môžete meniť názvy a popisy možností a pridávať ďalšie na koniec. Nie je doporučené pridávať poľa medzi už existujúce položky, mohlo by to spôsobiť priradenie zlej možnosti užívateľom. Toto by sa taktiež mohlo stať, pokiaľ odstránite niektorú z možností uprostred. Po odstránení možností užívateľom bude vrátená základná hodnota.',
	'EMPTY_FIELD_IDENT'	=> 'Označenie prázdneho poľa',
	'EMPTY_USER_FIELD_NAME'	=> 'Prosím vložte názov/popis poľa',
	'ENTRIES'	=> 'Možnosti',
	'EVERYTHING_OK'	=> 'Všetko v poriadku',

	'FIELD_BOOL'				=> 'Booleovský (Áno/Nie)',
 	'FIELD_DATE'	=> 'Dátum',
	'FIELD_DESCRIPTION'	=> 'Popis poľa',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Vysvetlenie poľa, ktoré bude zobrazené užívateľom',
	'FIELD_DROPDOWN'	=> 'Rolovacie menu',
	'FIELD_IDENT'	=> 'Označenie poľa',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Vybrané označenie poľa už existuje, vyberte prosím iné.',
	'FIELD_IDENT_EXPLAIN'	=> 'Označenie poľa je názov, pod ktorým bude pole uložené v databáze a štýloch.',
	'FIELD_INT'	=> 'Číselné hodnoty',
	'FIELD_LENGTH'	=> 'Dĺžka vstupného poľa',
	'FIELD_NOT_FOUND'	=> 'Pole profilu nebolo nájdené',
	'FIELD_STRING'	=> 'Jedno textové pole',
	'FIELD_TEXT'	=> 'Textové pole',
	'FIELD_TYPE'	=> 'Druh poľa',
	'FIELD_TYPE_EXPLAIN'	=> 'Druh poľa už nie je zmeniteľný',
	'FIELD_VALIDATION'	=> 'Potvrdenie položky',
	'FIRST_OPTION'	=> 'Prvá možnosť',

	'HIDE_PROFILE_FIELD'	=> 'Skryť položku profilu',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Skry pole v profile všetkých užívateľov okrem užívateľov, administrátorov a moderátorov , ktorí môžu vidieť toto pole. Ak je možnosť zobraziť v užívateľskom paneli vypnutá, zmenu v tomto poli bude môcť vykonať iba administrátor.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Označené pole môže obsahovať iba malé a-z a _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Označené pole môže mať najviac 17 znakov',
	'ISO_LANGUAGE'	=> 'Jazyk [%s]',

	'LANG_SPECIFIC_OPTIONS'	=> 'Špecifické nastavenie jazyka [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'	=> 'Maximálny počet znakov',
	'MAX_FIELD_NUMBER'	=> 'Najvyššie povolené číslo',
	'MIN_FIELD_CHARS'	=> 'Minimálny počet znakov',
	'MIN_FIELD_NUMBER'	=> 'Najmenšie povolené číslo',

	'NO_FIELD_ENTRIES'	=> 'Neboli zadané žiadne záznamy',
	'NO_FIELD_ID'	=> 'Nebolo zvolené id poľa',
	'NO_FIELD_TYPE'	=> 'Nebol zvolený typ poľa',
	'NO_VALUE_OPTION'	=> 'Nastavenie pre neexistujúcu hodnotu',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Hodnota pre neplatný vstup. Ak je pole vyžadované, užívateľ dostane tu nastavenú chybovú hlášku',
	'NUMBERS_ONLY'	=> 'Iba čísla (0-9)',

	'PROFILE_BASIC_OPTIONS'	=> 'Základné nastavenie',
	'PROFILE_FIELD_ACTIVATED'	=> 'Položka profilu úspešne aktivovaná',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Položka profilu úspešne deaktivovaná',
	'PROFILE_LANG_OPTIONS'	=> 'Špecifické nastavenie jazyka',
	'PROFILE_TYPE_OPTIONS'	=> 'Špecifické nastavenie typu položky',

	'RADIO_BUTTONS'	=> 'Prepínacie tlačítka',
	'REMOVED_PROFILE_FIELD'	=> 'Položka úspešne odstránená',
	'REQUIRED_FIELD'	=> 'Povinné pole',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Položka profilu bude musieť byť vyplnená užívateľom alebo administrátorom. Ak je táto možnosť vypnutá pri registrácii, pole bude možné upraviť v profile.',
	'ROWS'	=> 'Rady',

	'SAVE'	=> 'Uložiť',
	'SECOND_OPTION'	=> 'Druhá možnosť',
	'STEP_1_EXPLAIN_CREATE'	=> 'Tu môžete zvoliť prvý základný parameter vášho poľa. Tieto nastavenia sú potrebné pre druhý krok, kde budete môcť pridať ďalšie možnosti a doladiť ďalšie nastavenia.',
	'STEP_1_EXPLAIN_EDIT'	=> 'Tu môžete zmeniť základné nastavenia vašej položky. Relevantné položky sú prepočítané v druhom kroku, kde budete môcť otestovať vygenerovanú položku.',
	'STEP_1_TITLE_CREATE'	=> 'Pridať položku profilu',
	'STEP_1_TITLE_EDIT'	=> 'Upraviť položku profilu',
	'STEP_2_EXPLAIN_CREATE'	=> 'Tu môžete zmeniť nejaké základné nastavenia. Môžete ich upravovať, pokiaľ nebudete spokojný.',
	'STEP_2_EXPLAIN_EDIT'	=> 'Sem môžete zmeniť nejaké základné nastavenia. Môžete ich upravovať pokiaľ nebudete spokojný.<br /><strong>Berte na vedomie, že zmeny, ktoré robíte s položkami neovplyvnia údaje doposiaľ zadané vašimi užívateľmi.</strong>',
	'STEP_2_TITLE_CREATE'	=> 'Špecifické nastavenia typu',
	'STEP_2_TITLE_EDIT'	=> 'Špecifické nastavenia typu',
	'STEP_3_EXPLAIN_CREATE'	=> 'Vzhľadom k tomu, že máte na fóre viac jazykov, musíte vyplniť aj zvyšné položky súvisiace s jazykom. Pole profilu bude fungovať s prednastaveným jazykom, zvyšné jazyky môžete doplniť neskôr.',
	'STEP_3_EXPLAIN_EDIT'	=> 'Vzhľadom k tomu, že máte na fóre viac jazykov, môžete teraz zmeniť alebo pridať aj zvyšné jazykové položky. Pole profilu bude fungovať s prednastaveným jazykom.',
	'STEP_3_TITLE_CREATE'	=> 'Zvyšné definície jazykových kľúčov',
	'STEP_3_TITLE_EDIT'	=> 'Definície jazykových kľúčov',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Vložte prednastavenú hodnotu, ktorá sa má zobraziť. Ak chcete zobraziť prázdnu správu, nechajte toto pole prázdne.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Vložte prednastavený text, ktorý sa má zobraziť. Ak nechcete zobraziť žiadny text, nechajte toto pole prázdne.',
	'TRANSLATE'	=> 'Preložiť',

	'USER_FIELD_NAME'	=> 'Názov/popis poľa, ktoré sa zobrazí užívateľovi',

	'VISIBILITY_OPTION'	=> 'Možnosti zobrazenia',
));

?>