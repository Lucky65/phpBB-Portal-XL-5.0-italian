<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $id: gym_common.php - 5707 12-19-2008 15:55:58 - 2.0.RC3 dcz $
* @copyright (c) 2006 - 2008 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* gym_common [English]
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
	'RSS_AUTH_SOME_USER' => '<b><u>Waarschuwing :</u></b>Deze items zijn gerelateerd aan <b>%s</b>\'s machtigingen.<br/>Sommige items zijn niet zichtbaar als je niet ingelogd bent.',
	'RSS_AUTH_THIS_USER' => '<b><u>Waarschuwing :</u></b>Deze items zijn gerelateerd aan <b>%s</b>\'s machtigingen.<br/>Deze items zijn enkel zichtbaar voor ingelogde gebruikers.',
	'RSS_AUTH_SOME' => '<b><u>Waarschuwing :</u></b>Deze itemlijst is niet publiek.<br/>Sommige items zijn niet zichtbaar als je niet ingelogd bent.',
	'RSS_AUTH_THIS' => '<b><u>Waarschuwing :</u></b>Dit item is niet publiek.<br/>Deze items zijn enkel zichtbaar voor ingelogde gebruikers.',
	'RSS_CHAN_LIST_TITLE' => 'Kanalenlijst',
	'RSS_CHAN_LIST_DESC' => 'Deze kanalenlijst is beschikbaar als RSS bron.',
	'RSS_CHAN_LIST_DESC_MODULE' => 'Deze kanalenlijst toont de RSS bronnen beschikbaar voor : %s.',
	'RSS_ANNOUCES_DESC' => 'Deze bronnen tonen alle globale aankondigingen van : %s',
	'RSS_ANNOUNCES_TITLE' => 'Aankondigingen van  : %s',
	'GYM_LAST_POST_BY' => 'Laatste bericht van ',
	'GYM_FIRST_POST_BY' => 'Bericht van ',
	'GYM_LINK' => 'Link',
	'GYM_SOURCE' => 'Bron',
	'GYM_RSS_SOURCE' => 'Bron',
	'RSS_MORE' => 'meer',
	'RSS_CHANNELS' => 'Kanalen',
	'RSS_CONTENT' => 'Overzicht',
	'RSS_SHORT' => 'Verkorte lijst',
	'RSS_LONG' => 'Uitvoerige lijst',
	'RSS_NEWS' => 'Nieuws',
	'RSS_NEWS_DESC' => 'Laatste nieuws van',
	'RSS_REPORTED_UNAPPROVED' => 'Dit item is in afwachting van goedkeuring.',

	'GYM_HOME' => 'Index pagina',
	'GYM_FORUM_INDEX' => 'Forum index',
	'GYM_LASTMOD_DATE' => 'Laatste dag van wijziging',
	'GYM_SEO' => 'Zoekmachineoptimalisatie',
	'GYM_MINUTES' => 'minu(u)t(en)',
	'GYM_SQLEXPLAIN' => 'SQL uitleg van rapport',
	'GYM_SQLEXPLAIN_MSG' => 'Ingelogd als administrator, kan je deze %s paginas controleren.',
	'GYM_BOOKMARK_THIS' => 'Maak dit bladwijzer',
	// Errors
	'GYM_ERROR_404' => 'Deze pagina is niet beschikbaar of niet actief',
	'GYM_ERROR_404_EXPLAIN' => 'De server was niet in staat een gelijkluidende URL te vinden.',
	'GYM_ERROR_401' => 'Je hebt geen toestemming om deze pagina te bekijken.',
	'GYM_ERROR_401_EXPLAIN' => 'Deze pagina is enkel toegankelijk voor gebruikers die ingelogd zijn en de benodigde toegangsrechten hebben.',
	'GYM_LOGIN' => 'Je bent niet gemachtigd deze pagina te bekijken.',
	'GYM_LOGIN_EXPLAIN' => 'Je dient geregistreed en ingelogd te zijn om deze pagina te kunnen bekijken.',
	'GYM_TOO_FEW_ITEMS' => 'Pagina is niet beschikbaar',
	'GYM_TOO_FEW_ITEMS_EXPLAIN' => 'Deze pagina heeft te weinig items om weergegeven te kunnen worden.',
	'GYM_TOO_FEW_ITEMS_EXPLAIN_ADMIN' => 'De bronpagina is leeg of heeft te weinig inhoud (minder dan de waarde opgegeven in het ACP) om weer gegeven te kunnen worden.<br/>Foutmelding 404 is weergegeven aan zoekmachines om deze link te onderdrukken.',

	'GOOGLE_SITEMAP' => 'Sitemap',
	'GOOGLE_SITEMAP_OF' => 'Sitemap van',
	'GOOGLE_MAP_OF' => 'Sitemap van %1$s',
	'GOOGLE_SITEMAPINDEX' => 'SitemapIndex',
	'GOOGLE_NUMBER_OF_SITEMAP' => 'Aantal Sitemaps in deze Google SitemapIndex',
	'GOOGLE_NUMBER_OF_URL' => 'Aantal URLs in deze Google Sitemap',
	'GOOGLE_SITEMAP_URL' => 'Sitemap URL',
	'GOOGLE_CHANGEFREQ' => 'Wijzig frequentie',
	'GOOGLE_PRIORITY' => 'prioriteit',

	'RSS_FEED' => 'RSS Bron',
	'RSS_FEED_OF' => 'RSS bron voor %1$s',
	'RSS_2_LINK' => 'RSS 2.0 bronlink',
	'RSS_UPDATE' => 'Update',
	'RSS_LAST_UPDATE' => 'Laatste update',
	'RSS_SUBSCRIBE_POD' => '<h2>Voeg nu toe aan favorieten!</h2>Met gebruikmaking van je geprefereerde service.',
	'RSS_SUBSCRIBE' => 'Om je handmatig te abonneren op deze RSS bron, volg de bijstaande URL :',
	'RSS_ITEM_LISTED' => 'Een item opgesomd.',
	'RSS_ITEMS_LISTED' => 'items opgesomd.',
	'RSS_VALID' => 'Geldige RSS 2.0 bron',

	// Old URL handling
	'RSS_1XREDIR' => 'Deze RSS bron is verplaatst',
	'RSS_1XREDIR_MSG' => 'Deze RSS bron is verplaatst, je kan de link hier terug vinden ',
	// HTML sitemaps
	'HTML_MAP' => 'Sitemap',
	'HTML_MAP_OF' => 'Sitemap voor %1$s',
	'HTML_MAP_NONE' => 'Geen sitemap beschikbaar',
	'HTML_NO_ITEMS' => 'Geen item beschikbaar',
	'HTML_NEWS' => 'Nieuws',
	'HTML_NEWS_OF' => 'Nieuws voor %1$s',
	'HTML_NEWS_NONE' => 'Geen nieuws beschikbaar',
	'HTML_PAGE' => 'Pagina',
	'HTML_MORE' => 'Lees meer',
	// Forum
	'HTML_FORUM_MAP' => 'Forumsitemap',
	'HTML_FORUM_NEWS' => 'Forumsnieuws',
	'HTML_FORUM_GLOBAL_MAP' => 'Lijst globale aankondigingen',
	'HTML_FORUM_GLOBAL_NEWS' => 'Globale aankondigingen',
	'HTML_FORUM_ANNOUNCE_MAP' => 'Lijst aankondigingen',
	'HTML_FORUM_ANNOUNCE_NEWS' => 'Aankondigingen',
	'HTML_FORUM_STICKY_MAP' => 'Stickylijst',
	'HTML_FORUM_STICKY_NEWS' => 'Stickies',
	'HTML_LASTX_TOPICS_TITLE' => 'Laatste %1$s active onderwerpen',
));
?>
