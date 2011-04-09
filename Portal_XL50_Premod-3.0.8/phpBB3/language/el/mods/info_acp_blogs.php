<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: info_acp_blogs.php 493 2008-08-28 17:43:39Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Μετάφραση Μάνος Πασχαλάκης
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
	'ACP_BLOGS'						=> 'Blog μελών Mod',
	'ACP_BLOG_CATEGORIES'			=> 'Κατηγορίες Blog',
	'ACP_BLOG_PLUGINS'				=> 'Προσθήκες Blog',
	'ACP_BLOG_SEARCH'				=> 'Αναζήτηση Blog',
	'ACP_BLOG_SETTINGS'				=> 'Ρυθμίσεις Blog',

	'IMG_BUTTON_BLOG_NEW'			=> 'Νέα εισαγωγή Blog',

	'LOG_BLOG_CATEGORY_ADD'			=> '<strong>Προστέθηκε νέα κατηγορία Blog</strong><br />» %s',
	'LOG_BLOG_CATEGORY_DELETE'		=> '<strong>Διαγράφηκε η κατηγορία Blog</strong><br />» %s',
	'LOG_BLOG_CATEGORY_EDIT'		=> '<strong>Επεξεργάστηκε η κατηγορία Blog</strong><br />» %s',
	'LOG_BLOG_CONFIG'				=> '<strong>Οι ρυθμίσεις του Blog έχουν αλλάξει</strong>',
	'LOG_BLOG_CONFIG_SEARCH'		=> '<strong>Οι ρυθμίσεις αναζήτησης του Blog έχουν αλλάξει</strong>',
	'LOG_BLOG_PLUGIN_DISABLED'		=> '<strong>Απενεργοποιήθηκε Blog Plugin</strong><br />» %s',
	'LOG_BLOG_PLUGIN_ENABLED'		=> '<strong>Ενεργοποιήθηκε Blog Plugin</strong><br />» %s',
	'LOG_BLOG_PLUGIN_INSTALLED'		=> '<strong>Εγκαταστάθηκε του Blog Plugin</strong><br />» %s',
	'LOG_BLOG_PLUGIN_UNINSTALLED'	=> '<strong>Απεγκατεστάθηκε Blog Plugin</strong><br />» %s',
	'LOG_BLOG_PLUGIN_UPDATED'		=> '<strong>Αναβαθμίστηκε του Blog Plugin</strong><br />» %s',
	'LOG_BLOG_SEARCH_INDEX_CREATED'	=> '<strong>Αναδημιουργήθηκε ευρετήριο αναζήτησης του Blog</strong>',
	'LOG_BLOG_SEARCH_INDEX_REMOVED'	=> '<strong>Διαγράφηκε ευρετήριο αναζήτησης του Blog</strong>',
));

?>