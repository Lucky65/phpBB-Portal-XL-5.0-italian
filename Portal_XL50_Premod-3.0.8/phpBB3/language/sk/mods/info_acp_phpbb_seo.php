<?php
/**
*
* info_acp_phpbb_seo [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package Ultimate SEO URL phpBB SEO
* @version $Id: info_acp_phpbb_seo.php 131 2009-10-25 12:03:44Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://www.opensource.org/licenses/rpl1.5.txt Reciprocal Public License 1.5
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
	'ACP_CAT_PHPBB_SEO' => 'phpBB SEO',
	'ACP_MOD_REWRITE' => 'Nastavenia Prepísania URL',
	'ACP_PHPBB_SEO_CLASS' => 'Trieda Nastavení SEO phpBB',
	'ACP_FORUM_URL' => 'Fórum Správa URL',
	'ACP_HTACCESS' => '.htaccess',
	'ACP_SEO_EXTENDED' => 'Rozšírené Nastavenia',
	'ACP_PREMOD_UPDATE' => '<h1>Tlačové vyhlásenie</h1>
	<p>Táto aktualizácia sa týka iba premod, nie jadra phpBB.</p>
	<p>Nová verzia phpBB SEO premod je k dispozícii : %1$s<br/>Navštívte<a href="%2$s" title="Cez toto vlákno"><b>uvolnenú verziu</b></a> a aktualizujte si vašu inštaláciu.</p>',
	'SEO_LOG_INSTALL_PHPBB_SEO' => '<strong>Nainštaloval phpBB SEO mód rewrite (v%s)</strong>',
	'SEO_LOG_INSTALL_PHPBB_SEO_FAIL' => '<strong>Pokusil sa naštalovať phpBB SEO mod rewrite ale pokus zlyhal</strong><br/>%s',
	'SEO_LOG_UNINSTALL_PHPBB_SEO' => '<strong>Odinštaloval phpBB SEO mod rewrite (v%s)</strong>',
	'SEO_LOG_UNINSTALL_PHPBB_SEO_FAIL' => '<strong>Pokusil sa odinštalovať phpBB SEO mod rewrite ale pokus zlyhal</strong><br/>%s',
	'SEO_LOG_CONFIG_SETTINGS' => '<strong>Zmenil nastavenia Tried phpBB SEO</strong>',
	'SEO_LOG_CONFIG_FORUM_URL' => '<strong>Zmenil URL Fóra</strong>',
	'SEO_LOG_CONFIG_HTACCESS' => '<strong>Vytvoril nový .htaccess</strong>',
	'SEO_LOG_CONFIG_EXTENDED' => '<strong>Zmenil rozšírené nastavenia phpBB SEO</strong>',
));

?>