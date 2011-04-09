<?php
/**
*
* info_acp_gym_sitemaps [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma preklad Brahma
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: info_acp_gym_sitemaps.php 131 2009-10-25 12:03:44Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
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
	'ACP_GYM_SITEMAPS' => 'GYM Mapy stránok &amp; RSS',
	'ACP_GYM_MAIN' => 'Hlavné nastavenia',
	'ACP_GYM_GOOGLE_MAIN' => 'Google Mapy stránok',
	'ACP_GYM_RSS_MAIN' => 'Zdroje RSS',
	'ACP_GYM_YAHOO_MAIN' => 'Yahoo! zoznam url',
	'ACP_GYM_HTML_MAIN' => 'HTML Mapy stránok',
	'GYM_LOG_CONFIG_MAIN' => '<strong>Zmenil Mapy stránok GYM &amp; nastavenia RSS</strong><br/>&raquo; Hlavné nastavenia',
	'GYM_LOG_CONFIG_GOOGLE' => '<strong>Zmenil Mapy stránok GYM &amp; nastavenia RSS</strong><br/>&raquo; Mapy stránok Google',
	'GYM_LOG_CONFIG_RSS' => '<strong>Zmenil Mapy stránok GYM &amp; nastavenia RSS</strong><br/>&raquo; Zdroje RSS',
	'GYM_LOG_CONFIG_HTML' => '<strong>Zmenil Mapy stránok GYM &amp; nastavenia RSS</strong><br/>&raquo; HTML Mapy stránok',
	'GYM_LOG_CONFIG_YAHOO' => '<strong>Zmenil Mapy stránok GYM &amp; nastavenia RSS</strong><br/>&raquo; Yahoo! zozam URL',
	// Install Logs
	'SEO_LOG_INSTALL_GYM_SITEMAPS' => '<strong>Nainštaloval Mapovania stránok GYM &amp; RSS V%s</strong>',
	'SEO_LOG_INSTALL_GYM_SITEMAPS_FAIL' => '<strong>Mapovania stránok GYM &amp; RSS pokus o nainštalavanie zlyhal</strong><br/>%s',
	'SEO_LOG_UNINSTALL_GYM_SITEMAPS' => '<strong>Odinštaloval Mapovania stránok GYM &amp; RSS V%s </strong>',
	'SEO_LOG_UNINSTALL_GYM_SITEMAPS_FAIL' => '<strong>Mapovania stránok GYM &amp; RSS pokus o odinštalavanie zlyhal</strong><br/>%s',
	'SEO_LOG_UPDATE_GYM_SITEMAPS' => '<strong>Aktualizoval Mapovanie stránok GYM &amp; RSS na V%s</strong>',
	'SEO_LOG_UPDATE_GYM_SITEMAPS_FAIL' => '<strong>Mapovania stránok GYM &amp; RSS pokus o aktualizáciu zlyhal</strong><br/>%s',
));

?>