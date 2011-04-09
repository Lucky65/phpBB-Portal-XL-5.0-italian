<?php
/** 
*
* @name acp_portal_xl_newsfeeds.php [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_newsfeeds.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
	'TITLE' 					=> 'Nastavenie Databázy Zdrojov RSS',
	'TITLE_EXPLAIN'				=> 'V tomto zadaní môžete chraniť vašu Databázu cez RSS Feeds (zdroje noviniek)  v zadaní môžete vytvárať/editovať/alebo vymazať údaje zdrojov zobrazených na stránke portálu. <b>Čo je RSS?</b> V zkratke, RSS feeds - prísun noviniek - sú webove stránky vytvorené tak, aby boli čitateľné počítaču miesto ľudí. Pre prevod noviniek z vaších obľúbených webovych stránok do prehľadného a ľahko čitateľného formátu potrebujete čítačku RSS',
 
	'PORTAL_FEED_EDIT_HEADER'	=> 'Pridanie alebo úprava módu',
	'ACP_MANAGE_FEED'			=> 'Pridanie alebo úprava módov',
	'ACP_FEED_EXPLAIN'			=> 'Nastavenie Noviniek',
	'ADD_FEED'					=> 'Pridať mód',
	'DISABLE'					=> '<b>Odblokujem Blok</b>',
	'DISABLE_BLOCK'				=> 'Enable',
	'ENABLE'					=> '<b>Zablokujem Blok</b>',
	'ENABLE_BLOCK'				=> 'Disable',
	'MUST_SELECT_FEED'			=> 'Selected mod',
	'FEED'						=> 'Novinky v databáze',
	'VISIT_FEED'				=> 'Subscribe to feed',
	'FEED_INFO'					=> 'Feed',
	'FEED_EXPLAIN'				=> 'Text vašej existujúcej Novinky',
	'FEED_ADDED'				=> 'Novinka bola úspešne pridaná',
	'FEED_REMOVED'				=> 'Novinka bola úspešne odstránená',
	'FEED_UPDATED'				=> 'Novinka bola úspešne upravená',
	'RESET_FEED' 				=> 'Reset',
	'FEED_EDIT'					=> 'Upravenie Noviniek',
	'FEED_EDIT_EXPLAIN'			=> 'V tomto zadaní môžete pridať alebo editovať existujúcu Novinku. Je nutné aby bol zadaný Názov a číslo verzie. Sem môžete zadať podrobnosti, kde sa dá stiahnuť ako aj, kde sa samotná Novinka nachádza.',
	'FEED_TITLE'				=> 'Titul Novinky',
	'FEED_TITLE_EXPLAIN'		=> 'Zobrazenie noviniek v pozícii.',
	'FEED_SHOW'					=> 'Zobraziť Áno/Nie?',
	'FEED_URL'					=> 'URL noviniek',
	'FEED_URL_EXPLAIN'			=> 'Zadajte stránku URL pre túto novinku (link novinky -popis alebo -téma).',
	'FEED_POSITIONS'			=> 'Pozícia',
	'FEED_POSITION'				=> 'Zobrazenie zadanie v pozícii?',
	'FEED_POSITION_EXPLAIN'		=> 'Zadajte na ktorej strane tabule sa RSS zobrazí.',
	'LEFT'						=> 'Vľavo',
	'RIGHT'						=> 'Vpravo',
	'NOT_SET'					=> 'Nie je nastavené',
	'FEED_CACHE_TIME'			=> 'Čas v Cache',
	'FEED_CACHE_TIME_EXPLAIN'	=> 'Maximálna doba ponechania v cache súbor novinky, než bude aktualizovaný, v sekundách (predvolba je 1 hodina = 60 minút = 3600 sekúnd).',
	'CACHE_TIME'				=> 'sekundy',
	'FEED_ITEMS_LIMIT'			=> 'Limit poznámok',
	'FEED_ITEMS_LIMIT_EXPLAIN'	=> 'Maximum poznámok zobraziť v jednej novinke.',
	'ITEMS_LIMIT'				=> 'polí',
	'FEED_RANDOM_LIMIT'			=> 'Náhodný limit',
	'FEED_RANDOM_LIMIT_EXPLAIN'	=> 'Maximum nahodných noviniek zobrazených v bloku portálu.',
	'RANDOM_LIMIT'				=> 'pripojení',
	'BLOCK_FEED_SETTINGS'		=> 'Všeobecné nastavenia noviniek',

));

?>