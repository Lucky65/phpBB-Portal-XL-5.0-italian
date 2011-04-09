<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: info_acp_blogs.php 493 2008-08-28 17:43:39Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/06/26
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
	'ACP_BLOGS'						=> 'Mod blog utente',
	'ACP_BLOG_CATEGORIES'			=> 'Categorie blog',
	'ACP_BLOG_PLUGINS'				=> 'Plugins blog',
	'ACP_BLOG_SEARCH'				=> 'Ricerca blog',
	'ACP_BLOG_SETTINGS'				=> 'Configurazione blog',

	'IMG_BUTTON_BLOG_NEW'			=> 'Aggiungi voce blog',

	'LOG_ADDED_BLOG'				=> '<strong>Aggiunta nuova voce blog</strong><br />» %s',
	'LOG_EDITED_BLOG'				=> '<strong>Modificata voce blog</strong><br />» %s',
	'LOG_ADDED_BLOG_REPLY'			=> '<strong>Aggiunta risposta a voce blog</strong><br />» %s',
	'LOG_EDITED_BLOG_REPLY'			=> '<strong>Modificata risposta blog</strong><br />» %s',
	'LOG_BLOG_CATEGORY_ADD'			=> '<strong>Aggiunta nuova categoria blog</strong><br />» %s',
	'LOG_BLOG_CATEGORY_DELETE'		=> '<strong>Eliminata categoria blog</strong><br />» %s',
	'LOG_BLOG_CATEGORY_EDIT'		=> '<strong>Modificata categoria blog</strong><br />» %s',
	'LOG_BLOG_CONFIG'				=> '<strong>Alterata configurazione blog</strong>',
	'LOG_BLOG_CONFIG_SEARCH'		=> '<strong>Alterata configurazione ricerca blog</strong>',
	'LOG_BLOG_PLUGIN_DISABLED'		=> '<strong>Disattivato plugin blog</strong><br />» %s',
	'LOG_BLOG_PLUGIN_ENABLED'		=> '<strong>Attivato plugin blog</strong><br />» %s',
	'LOG_BLOG_PLUGIN_INSTALLED'		=> '<strong>Installato plugin blog</strong><br />» %s',
	'LOG_BLOG_PLUGIN_UNINSTALLED'	=> '<strong>Disinstallato plugin blog</strong><br />» %s',
	'LOG_BLOG_PLUGIN_UPDATED'		=> '<strong>Aggiornato plugin blog</strong><br />» %s',
	'LOG_BLOG_SEARCH_INDEX_CREATED'	=> '<strong>Ricostruito indice di ricerca blog</strong>',
	'LOG_BLOG_SEARCH_INDEX_REMOVED'	=> '<strong>Eliminato indice di ricerca blog</strong>',
));

?>