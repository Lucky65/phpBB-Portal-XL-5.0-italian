<?php
/**
*
* @package phpBB3 User Blog [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @version $Id: info_acp_blogs.php 493 2008-08-28 17:43:39Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_BLOGS'						=> 'Užívateľský Mód',
	'ACP_BLOG_CATEGORIES'			=> 'Kategórie blogu',
	'ACP_BLOG_PLUGINS'				=> 'Pluginy Blogu',
	'ACP_BLOG_SEARCH'				=> 'Vyhľadávanie v Blogu',
	'ACP_BLOG_SETTINGS'				=> 'Nastavenia Blogu',

	'IMG_BUTTON_BLOG_NEW'			=> 'Nový Vstup Blogu',

	'LOG_BLOG_CATEGORY_ADD'			=> '<strong>Pridal do blogu novú kategóriu</strong><br />» %s',
	'LOG_BLOG_CATEGORY_DELETE'		=> '<strong>Vymazal z blogu kategóriu</strong><br />» %s',
	'LOG_BLOG_CATEGORY_EDIT'		=> '<strong>Upravil v blogu kategóriu</strong><br />» %s',
	'LOG_BLOG_CONFIG'				=> '<strong>Zmenil nastavenia blogu</strong>',
	'LOG_BLOG_CONFIG_SEARCH'		=> '<strong>Zmenil nastavenia hľadania v blogu</strong>',
	'LOG_BLOG_PLUGIN_DISABLED'		=> '<strong>Zablokoval Plugin v blogu</strong><br />» %s',
	'LOG_BLOG_PLUGIN_ENABLED'		=> '<strong>Aktivoval Plugin v blogu</strong><br />» %s',
	'LOG_BLOG_PLUGIN_INSTALLED'		=> '<strong>Nainštaloval Plugin do blogu</strong><br />» %s',
	'LOG_BLOG_PLUGIN_UNINSTALLED'	=> '<strong>Odinštaloval Plugin z blogu</strong><br />» %s',
	'LOG_BLOG_PLUGIN_UPDATED'		=> '<strong>Aktualizoval Plugin v blogu</strong><br />» %s',
	'LOG_BLOG_SEARCH_INDEX_CREATED'	=> '<strong>Prestaval vyhľadávanie v Indexe blogu</strong>',
	'LOG_BLOG_SEARCH_INDEX_REMOVED'	=> '<strong>Vymazal vyhľadávanie z Indexu blogu</strong>',
));

?>