<?php
/**
*
* info_acp_phpbb_seo [Italian]
*
* @package Ultimate SEO URL phpBB SEO
* @version $Id: info_acp_phpbb_seo.php 131 2009-10-25 12:03:44Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2011 luckylab.eu - update translation for portal xl on 2011/01/01
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
	'ACP_MOD_REWRITE' => 'Configurazione riscrittura URL',
	'ACP_PHPBB_SEO_CLASS' => 'Configurazione phpBB SEO',
	'ACP_FORUM_URL' => 'Gestione url forum',
	'ACP_HTACCESS' => '.htaccess',
	'ACP_SEO_EXTENDED' => 'Configurazione estesa',
	'ACP_PREMOD_UPDATE' => '<h1>Annuncio versione</h1>
	<p>Questo aggiornamento riguarda solo la mod, non il core di phpBB.</p>
	<p>Una nuova versione di phpBB SEO è ora disponibile : %1$s<br/>Visita<a href="%2$s" title="L’argomento di versione"><b>L’argomento di versione</b></a> e aggiorna la tua installazione.</p>',
	'SEO_LOG_INSTALL_PHPBB_SEO' => '<strong>phpBB SEO mod rewrite installato (v%s)</strong>',
	'SEO_LOG_INSTALL_PHPBB_SEO_FAIL' => '<strong>phpBB SEO mod rewrite installazione fallita</strong><br/>%s',
	'SEO_LOG_UNINSTALL_PHPBB_SEO' => '<strong>phpBB SEO mod rewrite disinstallato (v%s)</strong>',
	'SEO_LOG_UNINSTALL_PHPBB_SEO_FAIL' => '<strong>phpBB SEO mod rewrite disinstallazione fallita</strong><br/>%s',
	'SEO_LOG_CONFIG_SETTINGS' => '<strong>Alterata configurazione phpBB SEO Class</strong>',
	'SEO_LOG_CONFIG_FORUM_URL' => '<strong>Alterati URL forums</strong>',
	'SEO_LOG_CONFIG_HTACCESS' => '<strong>Generato nuovo .htaccess</strong>',
	'SEO_LOG_CONFIG_EXTENDED' => '<strong>Alterata configurazione estesa phpBB SEO</strong>',
));

?>