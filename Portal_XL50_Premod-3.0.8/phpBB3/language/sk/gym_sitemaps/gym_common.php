<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: gym_common.php 112 2009-09-30 17:21:34Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* gym_common [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'RSS_AUTH_SOME_USER' => '<b><u>Upozornenie :</u></b>Táto položka zoznamu je prispôsobená podľa <b>%s</b> povolenia.<br/>Niektoré z uvedených položiek nemusia byť viditeľné, pokial nie ste prihlásený.',
	'RSS_AUTH_THIS_USER' => '<b><u>Upozornenie :</u></b>Táto položka je prispôsobené podľa <b>%s</b> povolenia.<br/>Nebude zobrazené, pokial nie ste prihlásený.',
	'RSS_AUTH_SOME' => '<b><u>Upozornenie :</u></b>Táto položka zoznamu nie je verejná.<br/>Niektoré z uvedených položiek nemusia byť viditeľné, pokial nie ste prihlásený.',
	'RSS_AUTH_THIS' => '<b><u>Upozornenie :</u></b>Táto položka nie je verejná.<br/>Nebude zobrazené, pokial nie ste prihlásený.',
	'RSS_CHAN_LIST_TITLE' => 'Zoznam RSS',
	'RSS_CHAN_LIST_DESC' => 'Tento zoznam RSS je zoznam dostupných kanálov RSS.',
	'RSS_CHAN_LIST_DESC_MODULE' => 'Tento zoznam kanálov je zoznam RSS kanálov ktoré sú k dispozícii pre : %s.',
	'RSS_ANNOUCES_DESC' => 'Toto vysielanie je výpis všetkých čo sú v globále oznámené : %s',
	'RSS_ANNOUNCES_TITLE' => 'Oznam je od : %s',
	'GYM_LAST_POST_BY' => 'Posledný príspevok je od ',
	'GYM_FIRST_POST_BY' => 'Publikoval ',
	'GYM_LINK' => 'Odkaz',
	'GYM_SOURCE' => 'Zdroj',
	'GYM_RSS_SOURCE' => 'Zdroj',
	'RSS_MORE' => 'viacej',
	'RSS_CHANNELS' => 'Kanály',
	'RSS_CONTENT' => 'Prehľad',
	'RSS_SHORT' => 'Stručný zoznam',
	'RSS_LONG' => 'Dlhý zoznam',
	'RSS_NEWS' => 'Novinky',
	'RSS_NEWS_DESC' => 'Najnovšie správy z',
	'RSS_REPORTED_UNAPPROVED' => 'Táto položka čaká na schválenie.',

	'GYM_HOME' => 'Portál',
	'GYM_FORUM_INDEX' => 'Obsah fóra',
	'GYM_LASTMOD_DATE' => 'Posledná zmena dátumu',
	'GYM_SEO' => 'Optimalizácia pre vyhľadávanie',
	'GYM_MINUTES' => 'min.',
	'GYM_SQLEXPLAIN' => 'SQL Správa Vysvetlení',
	'GYM_SQLEXPLAIN_MSG' => 'Prihlásený ako administrátor, môžete skontrolovať %s túto stránku.',
	'GYM_BOOKMARK_THIS' => 'Záložky',
	// Errors
	'GYM_ERROR_404' => 'Táto stránka neexistuje alebo nie je aktivovaná',
	'GYM_ERROR_404_EXPLAIN' => 'Na servery neboli nájdené žiadne zodpovedajúce URL stránky ktoré ste použili.',
	'GYM_ERROR_401' => 'Nie ste oprávnení si prezerať túto stránku.',
	'GYM_ERROR_401_EXPLAIN' => 'Táto stránka je prístupná len prihláseným užívateľom s požadovanýmy povoleniamy.',
	'GYM_LOGIN' => 'Nie ste oprávnený prezerať si túto stránku.',
	'GYM_LOGIN_EXPLAIN' => 'Musíte byť zaregistrovaný a prihlásený ak si chcete prezerať tieto stránky.',
	'GYM_TOO_FEW_ITEMS' => 'Stránka nie je Dostupná',
	'GYM_TOO_FEW_ITEMS_EXPLAIN' => 'Táto stránka neobsahuje dostatok položiek aby bola zobrazená.',
	'GYM_TOO_FEW_ITEMS_EXPLAIN_ADMIN' => 'Táto stránka teda jej zdroj je buď prázdny alebo neobsahuje dostatok položiek (menej, ako je nastavený prah v ACP), ktoré majú byť zobrazené.<br/>A 404 záhlavie nebolo najdené i keď bolo odoslané riadne, takže Vyhladávacie Zariadenie za chviľu zmení linku.',

	'GOOGLE_SITEMAP' => 'Mapa stránok',
	'GOOGLE_SITEMAP_OF' => 'Stránka',
	'GOOGLE_MAP_OF' => 'Stránka %1$s',
	'GOOGLE_SITEMAPINDEX' => 'Zoznam mapovaných',
	'GOOGLE_NUMBER_OF_SITEMAP' => 'Počet stránok zadaných pre mapovanie v Google',
	'GOOGLE_NUMBER_OF_URL' => 'Počet URL zadaných pre mapovanie v Google',
	'GOOGLE_SITEMAP_URL' => 'URL Mapovanie stránok',
	'GOOGLE_CHANGEFREQ' => 'Frekvencia.',
	'GOOGLE_PRIORITY' => 'priorita',

	'RSS_FEED' => 'Zdroje RSS',
	'RSS_FEED_OF' => 'Zdroj RSS %1$s',
	'RSS_2_LINK' => 'Link partnera RSS 2.0',
	'RSS_UPDATE' => 'Aktualizuje sa každých',
	'RSS_LAST_UPDATE' => 'Posledná aktualizácia bola vykonaná',
	'RSS_SUBSCRIBE_POD' => '<h3>Pridám teraz záložku tohto zdroja!</h3>Do niektorej vami preferovanej služby.',
	'RSS_SUBSCRIBE' => 'Chcete sa prihlásiť k odberu tohto kanála RSS manuálne, použite nasledujúci link URL:',
	'RSS_ITEM_LISTED' => 'Evidovaná v zozname je jedna položka.',
	'RSS_ITEMS_LISTED' => 'evidované položky v zozname.',
	'RSS_VALID' => 'RSS 2.0 Platný partner',

	// Old URL handling
	'RSS_1XREDIR' => 'Tento zdroj RSS bol premiestnený',
	'RSS_1XREDIR_MSG' => 'Zdroj RSS bol premiestnený, môžete ho nájsť tu ',
	// HTML sitemaps
	'HTML_MAP' => 'Mapa stránok',
	'HTML_MAP_OF' => 'Zo stránky %1$s',
	'HTML_MAP_NONE' => 'Nie je tu žiadna mapa stránok',
	'HTML_NO_ITEMS' => 'Nie sú tu žiadne položky',
	'HTML_NEWS' => 'Novinky',
	'HTML_NEWS_OF' => 'Aktuálne %1$s',
	'HTML_NEWS_NONE' => 'Nie sú tu žiadne novinky',
	'HTML_PAGE' => 'Stránka',
	'HTML_MORE' => 'Prečítajte si viac',
	// Forum
	'HTML_FORUM_MAP' => 'Schéma stránok na fóre',
	'HTML_FORUM_NEWS' => 'Nové na fóre',
	'HTML_FORUM_GLOBAL_MAP' => 'Zoznam globálnych oznámení',
	'HTML_FORUM_GLOBAL_NEWS' => 'Globálne oznámenia',
	'HTML_FORUM_ANNOUNCE_MAP' => 'Zoznam oznámení',
	'HTML_FORUM_ANNOUNCE_NEWS' => 'Oznámenie',
	'HTML_FORUM_STICKY_MAP' => 'Zoznam pozdržaných',
	'HTML_FORUM_STICKY_NEWS' => 'Pozdržané',
	'HTML_LASTX_TOPICS_TITLE' => 'Posledných %1$s aktívnych tém',
));
?>
