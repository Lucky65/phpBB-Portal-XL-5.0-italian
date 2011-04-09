<?php
/**
*
* posting [Slovak]
*
* @package language
* @version $Id: posting.php,v 1.50 2010/01/05 23:00:00 phpbb3.sk Exp $
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode je zvláštna implementácia jazyka HTML, ktorá umožňuje väčšiu kontrolu nad tým, ako vyzerajú vaše príspevky. Z tejto stránky môžete pridávať, odstraňovať alebo upravovať vlastné BBCode značky.',
	'ADD_BBCODE'				=> 'Pridať nový BBCode',
	'BBCODE_DANGER'				=> 'BBcode, ktorý sa snažíte pridať vyzerá tak, že používa {TEXT} v HTML atribúte. Toto je možná bezpečnostná chyba XSS. Namiesto toho radšej skúste použiť viac obmedzené {SIMPLETEXT} alebo {INTTEXT}. Pokračujte iba ak rozumiete rizikám a považujete na použitie {TEXT} ako potrebné.',
	'BBCODE_DANGER_PROCEED'		=> 'Pokračovať', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BBCode úspešne pridaný.',
	'BBCODE_EDITED'				=> 'BBCode úspešne upravený.',
	'BBCODE_NOT_EXIST'			=> 'Vybraný BBCode neexistuje.',
	'BBCODE_HELPLINE'			=> 'Nápoveda',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Text, ktorý sa zobrazí pri prejdení BBCode myšou.',
	'BBCODE_HELPLINE_TEXT'		=> 'Text k nápovede',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Text nápovedy, ktorý ste zadali, je príliš dlhý.',
	'BBCODE_INVALID_TAG_NAME'	=> 'BBCode s týmto názvom už existuje.',
  'BBCODE_INVALID'			=> 'Zadali ste nesprávny BBCode, jeho konštrukcia obsahuje chyby.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Vaše BBCode musí obsahovať štartovaciu aj zakončovaciu značku.',
	'BBCODE_TAG'				=> 'Značka',
	'BBCODE_TAG_TOO_LONG'		=> 'Vybraný názov značky je príliš dlhý.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Definícia vášho BBCode je príliš dlhá, skráťte ju prosím.',
	'BBCODE_USAGE'				=> 'Použitie BBCode',	
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Tu definujete ako používať BBCode. Nahraďte premenné za tie, ktoré odpovedajú budúcemu obsahu BBCode značky(%spozri nižšie%s)',

	'EXAMPLE'						=> 'Príklad:',
	'EXAMPLES'						=> 'Príklady:',

	'HTML_REPLACEMENT'				=> 'HTML náhrada',	
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Tu definujete akým HTML kódom bude BBCode nahradený (každý template môže mať svoju náhradu). Nezabudnite vložiť rovnaké premenné, ktoré ste použili vyššie!',

	'TOKEN'					=> 'Premenná',
	'TOKENS'				=> 'Premenné',
	'TOKENS_EXPLAIN'		=> 'Premenné držia miesto pre budúci užívateľský vstup, na ich miesto budú užívatelia vyplňovať dáta. Značka bude spracovaná, len pokiaľ je na danom mieste text odpovedajúci definícií premennej. Pokiaľ potrebujete, môžete ich číslovať, pridaním čísla pred uzatváracou zátvorkou, napr. {USERNAME1}, {USERNAME2}.<br /><br />Vedľa týchto premenných sa dá použiť akýkoľvek jazykový reťazec, ktorý je prítomný v prekladoch. Vložte ho v tomto formáte {L_<em>&lt;názov reťazca&gt;</em>},kde <em>&lt;názov reťazca&gt;</em> je názov preloženého reťazca, ktorý chcete zobraziť. Napríklad, {L_WROTE} bude anglicky zobrazené ako „wrote“, a pokiaľ má užívateľ aktivovanú slovenčinu, tak ako „napísal“.<br /><br /><strong>Prosím berte na vedomie, že iba premenné zobrazené nižšie môžu byť použité ako súčasť vlastných BB kódov.</strong>',
	'TOKEN_DEFINITION'		=> 'Použiteľné znaky',
	'TOO_MANY_BBCODES'		=> 'Nedajú sa vytvoriť ďalšie BBCode značky. Odstráňte jednu, alebo viac značiek a skúste to znovu.',

	'tokens'	=>	array(		
		'TEXT'			=> 'Bežný text, vrátane cudzích znakov, čísiel, atď. Nemali by ste používať túto premennú v HTML tagoch. Miesto toho skúste použiť IDENTIFIER, INTTEXT alebo SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Znaky z latinskej abecedy (A-Z), čísla, medzery, čiarky, bodky, mínus, plus, pomlčka a  podčiarknutie',
		'INTTEXT'		=> 'Unicode znaky, čísla, medzery, čiarky, bodky, mínusy, plusy, pomĺčky a podtrhovníky.',
		'IDENTIFIER'	=> 'Znaky z latinskej abecedy (A-Z),  čísla, pomlčka a  podčiarknutie',
		'NUMBER'		=> 'Akákoľvek rada číslic',
		'EMAIL'			=> 'Platná e-mailová adresa',
		'URL'			=> 'Platná URL, používajúca voliteľný protokol (http, ftp, atď... nedá sa zneužiť pre JavaScriptové útoky). Pokiaľ nie je zvolený žiadny, protokol „http://“ je pripojený na začiatok reťazca',
		'LOCAL_URL'		=> 'Lokálna URL adresa. Zadaná URL musí byť relatívna k stránke s témou a nesmie obsahovať definíciu protokolu, alebo názov serveru.',
		'COLOR'			=> 'HTML farba, buď v hexadecimálnom formáte <samp>#FF1234</samp> alebo ako <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS farba</a> ako <samp>fuchsia</samp> alebo <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Odtiaľto môžete pridávať a upravovať ikony, ktoré užívatelia môžu použiť v záhlaví správ. Tieto ikony sú najčastejšie zobrazené vedľa názvu témy v zozname tém, alebo vedľa predmetu v prehľade tém. Môžete tiež inštalovať alebo vytvoriť celé kolekcie ikon.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smajlíci alebo emotikony sú často malé, niekedy animované obrázky, ktoré umožňujú vyjadriť emócie, alebo náladu. Z tejto stránky môžete pridávať a upravovať smajlíkov, ktorých užívatelia môžu používať v ich príspevkoch a správach. Môžete tiež inštalovať, alebo vytvoriť celú kolekciu smajlíkov.',
	'ADD_SMILIES'			=> 'Pridať ďalšie smajlíky',
	'ADD_SMILEY_CODE'		=> 'Pridať ďalší kód smajlíkov',
	'ADD_ICONS'				=> 'Pridať ďalšie ikony',
	'AFTER_ICONS'			=> 'Za %s',
	'AFTER_SMILIES'			=> 'Za %s',

	'CODE'						=> 'Kód',
	'CURRENT_ICONS'				=> 'Súčasné ikony',
	'CURRENT_ICONS_EXPLAIN'		=> 'Tu môžete pracovať s inštalovanými ikonami',
	'CURRENT_SMILIES'			=> 'Súčasné smajlíky',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Tu môžete pracovať s inštalovanými smajlíkmi',

	'DISPLAY_ON_POSTING'	=> 'Zobraziť pri prispievaní',
	'DISPLAY_POSTING'         => 'Pri odosielaní',
  'DISPLAY_POSTING_NO'      => 'Nezobraziť pri odosielaní',



	'EDIT_ICONS'				=> 'Upraviť ikony',
	'EDIT_SMILIES'				=> 'Upraviť smajlíkov',
	'EMOTION'					=> 'Emócie',
	'EXPORT_ICONS'				=> 'Exportovať a stiahnuť icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sKliknutím na tento odkaz bude konfiguračný súbor pre inštalované ikony zabalený do súboru <samp>icons.pak</samp>, ktoré ide po stiahnutí použiť pre vytvorenie <samp>.zip</samp> alebo <samp>.tgz</samp> archívu, obsahujúceho všetky vaše ikony a tento <samp>icons.pak</samp> konfiguračný súbor%s.',
	'EXPORT_SMILIES'			=> 'Exportovať a stiahnuť smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sKliknutím na tento odkaz bude konfiguračný súbor pre inštalovaných smajlíkov zabalený do súboru <samp>smilies.pak</samp>, ktoré ide po stiahnutí použiť pre vytvorenie <samp>.zip</samp> alebo <samp>.tgz</samp> archívu, obsahujúceho všetkých vašich smajlíkov a tento <samp>smilies.pak</samp> konfiguračný súbor%s.',

	'FIRST'			=> 'Prvý',

	'ICONS_ADD'				=> 'Pridať novú ikonu',
	'ICONS_NONE_ADDED'      => 'Žiadna ikona nebola pridaná.',
  'ICONS_ONE_ADDED'      => 'Ikona bola úspešne pridaná.',
	'ICONS_ADDED'			=> 'Ikony boli úspešne pridané.',
	'ICONS_CONFIG'			=> 'Nastavenie ikon',
	'ICONS_DELETED'			=> 'Ikona bola úspešne odstránená.',
	'ICONS_EDIT'			=> 'Upraviť ikonu',
	'ICONS_ONE_EDITED'		=> 'Ikona bola úspešne aktualizovaná.',
	'ICONS_NONE_EDITED'		=> 'Žiadna ikona nebola aktualizovaná.',
	'ICONS_EDITED'			=> 'Ikony boli úspešne aktualizované.',
	'ICONS_HEIGHT'			=> 'Výška ikony',
	'ICONS_IMAGE'			=> 'Obrázok ikony',
	'ICONS_IMPORTED'		=> 'Sada ikon bola úspešne nainštalovaná.',
	'ICONS_IMPORT_SUCCESS'	=> 'Sada ikon bola úspešne importovaná.',
	'ICONS_LOCATION'		=> 'Umiestnenie ikony',
	'ICONS_NOT_DISPLAYED'	=> 'Nasledujúce ikony nie sú zobrazené na stránke pre písanie príspevkov',
	'ICONS_ORDER'			=> 'Poradie ikon',
	'ICONS_URL'				=> 'Súbor obrázku ikony',
	'ICONS_WIDTH'			=> 'Šírka ikony',
	'IMPORT_ICONS'			=> 'Inštalovať pak ikon',
	'IMPORT_SMILIES'		=> 'Inštalovať pak smajlíkov',

	'KEEP_ALL'			=> 'Ponechať všetko',

	'MASS_ADD_SMILIES'	=> 'Pridať viac smajlíkov',

	'NO_ICONS_ADD'		=> 'Nie sú dostupné žiadne ikony na pridanie.',
	'NO_ICONS_EDIT'		=> 'Nie sú dostupné žiadne ikony pre úpravu.',
	'NO_ICONS_EXPORT'	=> 'Nemáte žiadne ikony na vytvorenie smajlíkov.',
	'NO_ICONS_PAK'		=> 'Nebol nájdený žiadny balík ikon.',
	'NO_SMILIES_ADD'	=> 'Nie sú dostupné žiadne smajlíky na pridanie.',
	'NO_SMILIES_EDIT'	=> 'Nie sú dostupné žiadne smajlíky pre úpravu.',
	'NO_SMILIES_EXPORT'	=> 'Nemáte žiadnych smajlíkov na vytvorenie balíku.',
	'NO_SMILIES_PAK'	=> 'Nebol nájdený žiadny balík smajlíkov.',

	'PAK_FILE_NOT_READABLE'		=> 'Nedá sa prečítať <samp>.pak</samp> súbor.',

	'REPLACE_MATCHES'	=> 'Nahradiť odpovedajúce hodnoty',

	'SELECT_PACKAGE'			=> 'Vybrať balík',
	'SMILIES_ADD'				=> 'Pridať nového smajlíka',
	'SMILIES_NONE_ADDED'		=> 'Žiadny smajlík nebol pridaný.',
	'SMILIES_ONE_ADDED'			=> 'Smajlík bol úspešne pridaný.',
	'SMILIES_ADDED'				=> 'Smajlíci boli úspešne pridaní.',
	'SMILIES_CODE'				=> 'Kód smajlíku',
	'SMILIES_CONFIG'			=> 'Nastavenie smajlíkov',
	'SMILIES_DELETED'			=> 'Smajlík bol úspešne odstránený.',
	'SMILIES_EDIT'				=> 'Upraviť smajlíka',
	'SMILIE_NO_CODE'			=> 'Smajlík “%s” bol ignorovaný, pretože nebol vložený žiadny kód.',
	'SMILIE_NO_EMOTION'			=> 'Smajlík “%s” bol ignorovaný, pretože nebola vložená žiadna emócia.',
	'SMILIES_NONE_EDITED'		=> 'Žiadny smajlík nebol aktualizovaný.',
	'SMILIES_ONE_EDITED'		=> 'Smajlík bol úspešne aktualizovaný.',
	'SMILIES_EDITED'			=> 'Smajlíci boli úspešne aktualizovaní.',
	'SMILIES_EMOTION'			=> 'Emócie',
	'SMILIES_HEIGHT'			=> 'Výška smajlíka',
	'SMILIES_IMAGE'				=> 'Obrázok smajlíka',
	'SMILIES_IMPORTED'			=> 'Balík smajlíkov bol úspešne nainštalovaný..',
	'SMILIES_IMPORT_SUCCESS'	=> 'Balík smajlíkov bol úspešne importovaný.',
	'SMILIES_LOCATION'			=> 'Umiestnenie smajlíka',
	'SMILIES_NOT_DISPLAYED'		=> 'Nasledujúce smajlíky nie sú zobrazené na stránke k odoslaniu správy.',
	'SMILIES_ORDER'				=> 'Poradie',
	'SMILIES_URL'				=> 'Obrázok smajlíka',
	'SMILIES_WIDTH'				=> 'Šírka smajlíka',
	
	'TOO_MANY_SMILIES'			=> 'Bol prekročený limit %d smajlíkov.',

	'WRONG_PAK_TYPE'	=> 'Zvolený balík neobsahuje potrebné dáta.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Z tohto panela môžete pridávať, upravovať alebo odstraňovať slová, ktoré budú automaticky cenzurované pri odosielaní príspevku. Používatelia si ďalej nemôžu registrovať mená, ktoré sú tu napísané. Zástupný znak (*) je možné použiť na nájdenie zhody, napr. *ekonom* odpovedá aj "neekonomické", ekonom* bude odpovedať napr. aj "ekonomické" atď.',
	'ADD_WORD'				=> 'Pridať nové slovo',

	'EDIT_WORD'		=> 'Upraviť cenzurované slovo',
	'ENTER_WORD'	=> 'Musíte vložiť slovo a jeho náhradu.',

	'NO_WORD'	=> 'Neboli zvolené žiadne slová pre úpravu.',

	'REPLACEMENT'	=> 'Náhrada',

	'UPDATE_WORD'	=> 'Upraviť cenzurované slovo',

	'WORD'				=> 'Slovo',
	'WORD_ADDED'		=> 'Cenzurovaný výraz bol úspešne pridaný.',
	'WORD_REMOVED'		=> 'Cenzurovaný výraz bol úspešne odstránený.',
	'WORD_UPDATED'		=> 'Cenzurovaný výraz bol úspešne upravený.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Na tejto stránke môžete spravovať hodnosti. Môžete tiež vytvoriť zvláštne hodnosti, ktoré užívateľom budú priradené cez užívateľskú administráciu.',
	'ADD_RANK'				=> 'Pridať novú hodnosť',

	'MUST_SELECT_RANK'		=> 'Musíte vybrať hodnosť.',

	'NO_ASSIGNED_RANK'		=> 'Nebola pridelená zvláštna hodnosť.',
	'NO_RANK_TITLE'			=> 'Nezvolili ste názov hodnosti.',
	'NO_UPDATE_RANKS'		=> 'Hodnosť bola úspešne odstránená. Neaktualizovali sa ale účty s touto hodnosťou, budete musieť ručne upraviť túto hodnosť na ich účtoch.',

	'RANK_ADDED'			=> 'Hodnosť bola úspešne pridaná.',
	'RANK_IMAGE'			=> 'Obrázok hodnosti',
	'RANK_IMAGE_EXPLAIN'	=> 'Tu môžete definovať malý obrázok, ktorý bude zobrazený pri hodnosti. Cesta je relatívna k základnej zložke phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(používaná)',
  'RANK_MINIMUM'			=> 'Minimálny počet príspevkov',
	'RANK_REMOVED'			=> 'Hodnosť bola úspešne odstránená.',
	'RANK_SPECIAL'			=> 'Nastaviť ako zvláštnu hodnosť',
	'RANK_TITLE'			=> 'Názov hodnosti',
	'RANK_UPDATED'			=> 'Hodnosť bola úspešne upravená.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Tu môžete upravovať užívateľské mená, ktoré sa nedajú používať. Nepovolené mená sa dajú definovať pomocou zástupného znaku *.  Berte na vedomie, že nejde pridať už registrované meno, musíte ho zmazať, alebo premenovať skôr, ako ho zakážete',
	'ADD_DISALLOW_EXPLAIN'	=> 'Môžete zakázať užívateľské meno pomocou zástupného symbolu * pre zhodu s akýmkoľvek znakom.',
	'ADD_DISALLOW_TITLE'	=> 'Pridať nepovolené meno',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Odstrániť nepovolené meno môžete kliknutím na meno v zozname a odoslaním.',
	'DELETE_DISALLOW_TITLE'		=> 'Odstrániť nepovolené meno',
	'DISALLOWED_ALREADY'		=> 'Zvolené meno sa nedá zakázať. Buď už v zozname existuje, je obsiahnuté v zozname cenzurovaných výrazov, alebo také užívateľské meno niekto momentálne používa.',
	'DISALLOWED_DELETED'		=> 'Nepovolené meno bolo úspešne odstránené.',
	'DISALLOW_SUCCESSFUL'		=> 'Nepovolené meno bolo úspešne pridané.',

	'NO_DISALLOWED'				=> 'Žiadne mená',
	'NO_USERNAME_SPECIFIED'		=> 'Nezvolili ste žiadne užívateľské mená.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Tu môžete spravovať odôvodnenia, ktoré sú použité v hláseniach chybných príspevkov alebo schvaľovaniach. Vždy je nastavené jedno základné odôvodnenie (označené s *), ktoré nemôžete odstrániť. Toto odôvodnenie je použité v prípadoch kedy nie je možné použiť vami vytvorené odôvodnenie.',
	'ADD_NEW_REASON'		=> 'Pridať nový dôvod',
	'AVAILABLE_TITLES'		=> 'Dostupné preložené odôvodnenie',

	'IS_NOT_TRANSLATED'			=> 'Odôvodnenie <strong>nebolo</strong> preložené.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Odôvodnenie <strong>nebolo</strong> preložené. Pokiaľ chcete poskytnúť preložené znenie, vytvorte odpovedajúcu položku v časti jazykových súborov pre odôvodnenie o schválení/zamietnutí.',
	'IS_TRANSLATED'				=> 'Odôvodnenie bolo preložené.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Odôvodnenie bolo preložené. Pokiaľ je názov, ktorý je tu zvolený, obsiahnutý v jazykových súboroch, bude použitá preložená verzia.',

	'NO_REASON'					=> 'Odôvodnenie nebolo nájdené.',
	'NO_REASON_INFO'			=> 'Musíte zvoliť názov a popis odôvodnenia.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Nedá sa odstrániť prednastavené odôvodnenie pre "Ostatné".',

	'REASON_ADD'				=> 'Pridať odôvodnenie',
	'REASON_ADDED'				=> 'Odôvodnenie schválení/zamietnutí bolo úspešne pridané.',
	'REASON_ALREADY_EXIST'		=> 'Odôvodnenie s týmto názvom už existuje, zvoľte iný.',
	'REASON_DESCRIPTION'		=> 'Popis odôvodnení',
	'REASON_DESC_TRANSLATED'	=> 'Zobrazený popis odôvodnení',
	'REASON_EDIT'				=> 'Upraviť odôvodnenie',
	'REASON_EDIT_EXPLAIN'		=> 'Tu môžete pridať alebo upraviť odôvodnenie. Pokiaľ je odôvodnenie preložené, preložená verzia bude použitá namiesto popisu, ktorý tu zadáte.',
	'REASON_REMOVED'			=> 'Odôvodnenie schválení/zamietnutí bolo úspešne odstránené.',
	'REASON_TITLE'				=> 'Názov odôvodnení',
	'REASON_TITLE_TRANSLATED'	=> 'Zobrazený názov odôvodnení',
	'REASON_UPDATED'			=> 'Odôvodnenie schválení/zamietnutí bolo úspešne aktualizované.',

	'USED_IN_REPORTS'		=> 'Použité v nahláseniach',
));

?>