<?php
/**
* acp_permissions_arcade  (phpBB Arcade Permission Set) [Italian]
*
* @package language
* @version $Id: permissions_arcade.php 601 2008-11-29 17:52:14Z jrsweets $
* @copyright (c) 2008 JeffRusso.net
* @copyright (c) 2009, 2010 luckylab.eu - revision for portal xl on 2010/01/15
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a seperate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang['permission_cat']['arcade'] 	= 'phpBB Arcade';
$lang['permission_type']['c_'] 		= 'Arcade Local Category Permissions';

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_cauth'				=> array('lang' => 'Può alterare la classe permessi arcade', 'cat' => 'arcade'),
	'acl_a_arcade_settings'		=> array('lang' => 'Può gestire le impostazioni arcade', 'cat' => 'arcade'),
	'acl_a_arcade_game'			=> array('lang' => 'Può aggiungere/modificare giochi ', 'cat' => 'arcade'),
	'acl_a_arcade_delete_game'	=> array('lang' => 'Può eliminare giochi', 'cat' => 'arcade'),
	'acl_a_arcade_cat'			=> array('lang' => 'Può aggiungere/modificare categorie arcade', 'cat' => 'arcade'),
	'acl_a_arcade_delete_cat'	=> array('lang' => 'Può eliminare categorie arcade', 'cat' => 'arcade'),
	'acl_a_arcade_scores'		=> array('lang' => 'Può modificare i punteggi', 'cat' => 'arcade'),
	'acl_a_arcade_utilities'	=> array('lang' => 'Può usare le funzioni arcade', 'cat' => 'arcade'),
));

$lang = array_merge($lang, array(
	'acl_c_list'					=> array('lang' => 'Può elencare categorie', 'cat' => 'arcade'),
	'acl_c_view'					=> array('lang' => 'Può vedere categorie', 'cat' => 'arcade'),
	'acl_c_play'					=> array('lang' => 'Può giocare', 'cat' => 'arcade'),
	'acl_c_popup'					=> array('lang' => 'Può giocare in una nuova finestra', 'cat' => 'arcade'),
	'acl_c_playfree'				=> array('lang' => 'Può giocare gratis', 'cat' => 'arcade'),
	'acl_c_score'					=> array('lang' => 'Può inviare punteggi', 'cat' => 'arcade'),
	'acl_c_rate'					=> array('lang' => 'Può votare i giochi', 'cat' => 'arcade'),
	'acl_c_comment'					=> array('lang' => 'Può inviare commenti', 'cat' => 'arcade'),
	'acl_c_report'                  => array('lang' => 'Può segnalare i giochi', 'cat' => 'arcade'),
	'acl_c_download'				=> array('lang' => 'Può scaricare i giochi', 'cat' => 'arcade'),
	'acl_c_ignorecontrol'			=> array('lang' => 'Può ignorare il play control', 'cat' => 'arcade'),
	'acl_c_resolution'				=> array('lang' => 'Può cambiare la risoluzione del gioco', 'cat' => 'arcade'),
));

?>