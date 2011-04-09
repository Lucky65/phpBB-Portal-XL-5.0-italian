<?php
/**
*
* Knowledge Base [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @author Tobi Schaefer http://www.tas2580.de/
*
* english translation by RedTrinity
*
* @package language
* @version $Id: kb.php, v 0.2.8 2008/07/08 18:14:44 tas2580 Exp $
* @copyright (c) 2007 SEO phpBB http://www.phpbb-seo.de
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
	
	'ARTICLE_DETAIL'		=> 'Podrobnosti článku',
	'ARTICLE_REPORTED'		=> 'Tento článok bol oznámený',
	'DISPLAY_ON_INDEX'		=> 'Náhľad v hlavnej kategórii',
	'DISPLAY_ON_INDEX_DESC'	=> '',
	'DELETED'				=> 'Zadaná hodonota bola vymazaná',
	'MCP_REPORT_TITLE'		=> 'Nahlásiť článok',
	'MCP_REPORT_EXPLAIN'	=> '',
	'REALY_DELETE'			=> 'Ste si istý mám celý vstup vymazať?',
	'VIEW_REPORTS_OLD'		=> 'Zobrazím uzavreté správy',
	'VIEW_REPORTS_NEW'		=> 'Zobrazím otvorené správy',
	'SHOW_ARTICLE'			=> 'Zobrazím celý článok',
	'SORT_ORDER'			=> 'Zoradenie triedenia',
	'SORT_ORDER_DESC'		=> 'Triedenie článkov v kategóriách',
	'SUB_CATGEGORIES'		=> 'Podkategórie',
	'SEARCH_CATEGORIE'		=> 'Hľadať kategórie',
	'ACP_TYPES'				=> 'Typy článkov',
	'ACP_TYPES_DESC'		=> 'V tomto nastavení môžete pridať a editovať typ článku',
	'ACP_CATEGORIE'			=> 'Vytvorenie Kategórie',
	'ACP_CATEGORIE_DESC'	=> 'V tomto zadaní môžete pridať alebo editovať kategórie pre bázu poznatkov.',
	'ACP_CONFIG'			=> 'Nastavenia Bázy Poznatkov',
	'ACP_CONFIG_DESC'		=> 'V tomto zadaní môžete upraviť nastavenie bázy poznatkov.',
	'ARTICLE_ACTIVATED'		=> 'Článok bol uvoľnený!',
	'ARTICLE_DELETED'		=> 'Článok bol vymazaný!',
	'ARTICLE_ADDED'			=> 'Článok bol predložený a bude uvoľnený do bázy poznatkov po tom, čo bude skontrolovaný.',
	'ARTICLE_HISTORY'		=> 'Zoznam Článkov',
	'ARTICLE_ADD'			=> 'Pridať článok',
	'ARTICLE_TITLE'			=> 'Titul',
	'ARTICLE_DESCRIPTION'	=> 'Popis',
	'ARTICLE'				=> 'Článok',
	'ARTICLE_TYPES'			=> 'Typy článkov',
	'ARTICLE_TYPES_DESC'	=> 'Označte v ktorých typoch článkov mám hladať? <strong>Klúčom</strong> zadania pre prehľadanie všetkých typov článkov ako jedneho, je ak neoznačíte ani jeden .',
	'ARTICLE_CONT'			=> 'Celkom článkov v databáze je',
	'ARTICLE_DEL'			=> 'Ste si istý mám vymazať tento článok?',
	'ARTICLE_EDIT'			=> 'Upraviť článok',
	'ARTICLE_EDITED'		=> 'Článok bol úspešne upravený!',
	'ARTICLE_DEACTIVATED'	=> 'Uzamknúť článok',
	'ARTICLE_POSTET'		=> 'Článok Možnosti Výkonu',
	'AKTIVATE'				=> 'Aktivovať',

	'BACK_ARTICLE'			=> 'Naspäť do článkov',
	'BACK_KB'				=> 'Vrátim sa do bázy poznatkov',
	'BACK_TO_ARTICLE'		=> '%Sem kliknite a zobrazím článok%s.',
	'BACK_TO_POSTING'		=> '%sKliknite sem a vrátim sa späť%s.',
	'BACK_TO_KB'			=> '%sKliknite sem a vrátim sa späť do Bázy Poznatkov%s.',
	'BACK_TO_LOG'			=> '%sKliknite sem a vrátim sa späť do zoznamu článkov%s.',



	'CATEGORIE'				=> 'Kategória',
	'CHANGED_AT'			=> 'Zmenené',
	'CONT_CAT'				=> 'Kategórie',
	'CATEGORIES'			=> 'Kategórie',
	'CATEGORIES_DESC'		=> 'Označte v ktorých kategóriach mám hladať? <strong>Klúčom</strong> zadania pre prehľadanie všetkých kategórií ako jednej, je ak neoznačíte ani jednu.',
	'CAT_NOT_EMPTY'			=> 'Táto kategória nie je prázdna!',
	'CAT_NAME'				=> 'Názov kategórie',
	'CAT_NAME_DESC'			=> 'Názov kategórie',
	'CAT_IMAGE'				=> 'Obrázok kategórie',
	'CAT_IMAGE_DESC'		=> 'Zadanie URL obrázka pre kategóriu.',
	'CAT_DECRIPTION_DESC'	=> 'Zadanie pre opis kategórie',
	'CAT_MAIN'				=> 'Hlavné kategórie',
	'CAT_SELECT_MAIN'		=> 'Vyberte hlavnú kategóriu',
	'CAT_ADDED'				=> 'Kategória bola pridaná',
	'CAT_DELETED'			=> 'Kategória bola úspešne zmazaná.',
	'CAT_UPDATED'			=> 'Kategória bola úspešne aktualizovaná.',
	'CAT_REALY_DELETE'		=> 'Naozaj mám vymazať túto kategóriu?',
	'CAT_CREATE_NEW'		=> 'Nová kategória',
	'DESCRIPTION'			=> 'Opis',


	'FIENAME'				=> 'Názov súboru',
	'FOUND_IN'				=> 'Nájdené v',
	'INDEX_POSTS'			=> 'Články v rámci indexu stránky',
	'INDEX_POSTS_DESC'		=> 'Koľko článkov má byť zobrazené v indexe stránky?',
	'KB_NAME'				=> 'Báza Poznatkov',
	'KB_NAME_DESC'			=> 'Názov bázy poznatkov',
	'KB_DECRIPTION_DESC'	=> 'Zadanie popisu pre bázu poznatkov .',
	'KBASE'					=> 'Báza Poznatkov',
	'KB_DESCRIPTION'		=> 'Ak je napísaný článok, môžete ho predbežné zobraziť na konci stránky a vykonať recenziu. Ak článok bude schválený, bude zverejnený v báze poznatkov. ',

	'LOG_TITEL'				=> 'Zoznam článkov',
	'LOG_DESCRIPTION'		=> 'V tomto zadaní si môžete skontrolovať, ktorý uživateľ a kedy upravil článok.',
	'LOG_DELETED'			=> 'Zoznam článkov bol úspešne vymazaný.',

	'MAINCAT_DESC'			=> 'V tomto zadaní si môžete vytvoriť hlavné kategórie, a následne podkategórie pre články.',

	'MODE'					=> 'Režim',
	'MODE_DESC'				=> 'Ktorý režim chcete použiť v obsahu stránky?',
	'MODE_MODERN'			=> 'Moderný',
	'MODE_CLASSIC'			=> 'Klasický',
	'NO_ARTICLE'			=> 'Ľutujem tento článok už neexistuje!',
	'NEED_INPUT'			=> 'Musíte zadať titul a text pre článok!',
	'ARTICLE_NEW'			=> 'Nevydané články',
	'ARTICLE_NEW_DESC'		=> 'Nasledujúce položky nie sú ešte uvoľnené alebo sú uzamnknuté',
	'NAME'					=> 'Názov kategórie',
	'NEED_NAME'				=> 'Zadanie pre názov kategórie',
	'ARTICLE_NEWEST'		=> 'Najnovší článok je',
	'NO_TYPE'				=> 'Žiadny Typ',
	'POST_FORUM'			=> 'Fórum pre odkaz na tento článok',
	'POST_TEMPLATE'			=> 'Šablóna príspevku',
	'POST_MESSAGE'			=> 'Text príspevku',
	'POST_USER'				=> 'ID Uživateľa',
	'POST_NORMAL'			=> 'Normal',
	'POST_TOPIC_GLOBAL'		=> 'Globálne oznámenie',
	'POST_TOPIC_AS'			=> 'Téma príspevku bude ako',
	'POST_TOPIC_AS_DESC'	=> 'Aký druh témy bude vytvorený?',
	'POST_USER_DESC'		=> 'ID užívateľa, ktorý vytvára príspevok',
	'POST_SUBJECT'			=> 'Titul Témy',
	'POST_SUBJECT_DESC'		=> 'Titul témy ktorá bude vytvorená',
	'POST_FORUM_DESC'		=> 'Zadajte ID fóra z fóra do ktorého odkaz na článok bude vytvorený, zadanim "0" nebudem evidoviť žiadne nové články',
	'POST_MESSAGE_DESC'		=> '{TITLE} = Titul článku <br />{DESCRIPTION} = Popis članku<br />{POST_TIME} = Time when writing<br />{TYPE} = Typ článku<br />{SUB_CAT} = Kategoria<br />{URL} = URL to article<br />{AUTHOR} = Autor of article<br />{AUTHOR_ID} = User-ID of author.',
	'RELASED'				=> 'Vytvorené',
	'READ_MORE'				=> 'Zobrazenie všetkých článkov bolo %s ',


	'SEARCH_KEYWORDS_DESC'	=> 'Po zvolenom zadaní prehľadám bázu poznatkov.',
	'SHOW_EDITS'			=> 'Upraviť zobrazené',
	'SHOW_EDITS_DESC'		=> 'Chcete upraviť zobrazený článok?',
	'TYPE'					=> 'Typ článku',
	'TYPE_DESC'				=> 'Zadajte názov pre typ článku',
	'TYPE_ADDED'			=> 'Typ bol úspešne pridaný',
	'TYPE_UPDATED'			=> 'Typ bol úspešne vymazaný',

	'NO_SUBCAT_IN_MAINCAT'	=> 'Na indexe sa nemôže vytvoriť podkategória!',
	'CAT_TYPE'				=> 'Typ kategórie',
	'CAT_TYPE_DESC'			=> 'Vyberte Typ kategórie',
	'IN_INDEX'				=> 'Na Indexe',
	'CAT_SUB'				=> 'Podkategórie',

	'CACHE_TIME'			=> 'Čas Cache',
	'CACHE_TIME_DESC'		=> 'Čas pre typ kategórie dokedy bude uskladnená',
	'SECONDS'				=> 'Sek.',
	'ACTIVATE_TYPES'		=> 'Použijem typ článku?',
	'ACTIVATE_TYPES_DESC'	=> 'Môžem zadať typ článoku?',
	'UPDATE_POST'			=> 'Regenerovať príspevky',
	'UPDATE_POST_DESC'		=> 'Mám aj príspevok tohto článku aktualizovať, keď budem aktualizovať článok?',
	'POST_UPDATE_MESSAGE'	=> 'Aktualizovať článok',
	'POST_ID'				=> 'ID fóra príspevku',
	'ARTICLE_ADDED_AKTIV'	=> 'Príspevok bol odoslaný do databázy a ke aktivny',
	'SHOW_POST_EDIT'		=> 'Zobraziť aktualizáciu',
	'SHOW_POST_EDIT_DESC'	=> 'Mám ho aktualizovať aby bol zobrazený v pozícii?',

	'PRINT_TOPIC'			=> 'Vytlačiť článok',
	
	// Portal XL Additions
	'HITS'					=> 'Názory',
	'LATEST_TOPICS'			=> 'Najnovšie témy',
	
));

?>