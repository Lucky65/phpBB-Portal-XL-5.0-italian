<?php
/**
* permissions_dm_video [Italian]
*
* @package language
* @version $Id: permissions_dm_video.php 178 2009-12-13 13:46:11Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
* @copyright (c) 2010 luckylab.eu - translated for portal xl on 2010/05/25
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
// ’ » „ “ — …
//

// Adding new category
$lang['permission_cat']['dm_mods']   = 'DM Mods';

// Adding the permissions
$lang = array_merge($lang, array(
	// User permissions
	'acl_u_dm_video_view' => array('lang' => 'Può vedere video', 'cat' => 'dm_mods'),
	'acl_u_dm_video_rate' => array('lang' => 'Può votare video', 'cat' => 'dm_mods'),
	'acl_u_dm_video_add' => array('lang' => 'Può aggiungere video', 'cat' => 'dm_mods'),
	'acl_u_dm_video_edit' => array('lang' => 'Può modificare i suoi video', 'cat' => 'dm_mods'),
	'acl_u_dm_video_del' => array('lang' => 'Può cancellare i suoi video', 'cat' => 'dm_mods'),
	'acl_u_dm_video_report' => array('lang' => 'Può inviare rapporti di video non funzionanti', 'cat' => 'dm_mods'),
    'acl_u_dm_video_comment_view' => array('lang' => 'Può vedere commenti video', 'cat' => 'dm_mods'),
    'acl_u_dm_video_comment_add' => array('lang' => 'Può aggiungere commenti video', 'cat' => 'dm_mods'),
    'acl_u_dm_video_comment_edit' => array('lang' => 'Può modificare i suoi commenti', 'cat' => 'dm_mods'),
    'acl_u_dm_video_comment_del' => array('lang' => 'Può cancellare i suoi commneti', 'cat' => 'dm_mods'),
   
	// Admin permissions
	'acl_a_dm_video' => array('lang' => 'Può gestire la mod DM Video', 'cat' => 'dm_mods'),
	'acl_a_dm_video_config' => array('lang' => 'Può modificare la configurazione video', 'cat' => 'dm_mods'),
	'acl_a_dm_video_cats' => array('lang' => 'Può gestire le categorie video', 'cat' => 'dm_mods'),
	'acl_a_dm_video_edit' => array('lang' => 'Può modificare video',	'cat' => 'dm_mods'),
	'acl_a_dm_video_release' => array('lang' => 'Può rilasciare nuovi video', 'cat' =>  'dm_mods'),
	'acl_a_dm_video_report' => array('lang' => 'Può gestire i rapporti di video non funzionanti', 'cat' =>  'dm_mods'),
	'acl_a_dm_video_auto_announce' => array('lang' => 'Gli annunci degli amministratori sono inviati automaticamente', 'cat' => 'dm_mods'),
	)
);

?>