<?php
/** 
*
* permissions_kb [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @author Tobi Schaefer http://www.tas2580.de/
*
* @package language
* @version $Id: permissions_kb.php, v 0.2.8 2008/07/08 18:14:44 tas2580 Exp $
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

// Adding new category
$lang['permission_cat']['kb'] = 'Knowledge Base';

// Adding the permissions
$lang = array_merge($lang, array(



	'acl_u_print_kb'			=> array('lang' => 'Môže si vytlačiť články', 'cat' => 'kb'),
	'acl_u_attache_kb'			=> array('lang' => 'Môže nahrávať do príloh', 'cat' => 'kb'),
	'acl_u_edit_kb'				=> array('lang' => 'Môže upravovať svoje články', 'cat' => 'kb'),
	'acl_u_del_kb'				=> array('lang' => 'Môže vymazať svoje články', 'cat' => 'kb'),
	'acl_u_add_kb'				=> array('lang' => 'Môže pridávať články', 'cat' => 'kb'),
	'acl_u_report_kb'			=> array('lang' => 'Môže nahlasovať články', 'cat' => 'kb'),

	'acl_m_log_kb'				=> array('lang' => 'Môže prezerať zoznam článkov', 'cat' => 'kb'),
	'acl_m_log_kb_delete'		=> array('lang' => 'Môže vymazať zoznam článkov', 'cat' => 'kb'),
	'acl_m_report_kb'			=> array('lang' => 'Môže nahlásiť staré články', 'cat' => 'kb'),
	'acl_m_activate_kb'			=> array('lang' => 'Môže aktivovať články', 'cat' => 'kb'),
	'acl_m_edit_kb'				=> array('lang' => 'Môže upravovať články', 'cat' => 'kb'),
	'acl_m_del_kb'				=> array('lang' => 'Môže vymazať články', 'cat' => 'kb'),

	'acl_a_config_kb'			=> array('lang' => 'Môže upravovať nastavenia', 'cat' => 'kb'),
	'acl_a_categorie_kb'		=> array('lang' => 'Môže upravovať kategórie', 'cat' => 'kb'),
	'acl_a_types_kb'			=> array('lang' => 'Môže upravovať výpisy', 'cat' => 'kb'),

));
?>