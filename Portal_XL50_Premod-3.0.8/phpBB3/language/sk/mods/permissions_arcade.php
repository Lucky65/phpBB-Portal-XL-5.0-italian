<?php
/**
* acp_permissions_arcade  (phpBB Arcade Permission Set) [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package language
* @version $Id: permissions_arcade.php 601 2008-11-29 17:52:14Z jrsweets $
* @copyright (c) 2008 JeffRusso.net
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
*	$lang['permission_cat']['bugs'] = 'Chyby';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Oprávenenie pre Chyby';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Môže si zobraziť hlásenia o chybách', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Môže aktualizovať záznam chýb', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang['permission_cat']['arcade'] 	= 'Arkáda phpBB';
$lang['permission_type']['c_'] 		= 'Miestne Povolenia Kategórií Arkády';

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_cauth'				=> array('lang' => 'Môže modifikovať oprávnenia skupin v arkáde', 	'cat' => 'arcade'),
	'acl_a_arcade_settings'		=> array('lang' => 'Môže menežovať nastavenia arkády', 			'cat' => 'arcade'),
	'acl_a_arcade_game'			=> array('lang' => 'Môže pridávať/upravovať hry arkády', 			'cat' => 'arcade'),
	'acl_a_arcade_delete_game'	=> array('lang' => 'Môže vymazať hry arkády', 				'cat' => 'arcade'),
	'acl_a_arcade_cat'			=> array('lang' => 'Môže pridávať/upravovať kategórie arkády', 		'cat' => 'arcade'),
	'acl_a_arcade_delete_cat'	=> array('lang' => 'Môže vymazať kategórie arkády', 			'cat' => 'arcade'),
	'acl_a_arcade_scores'		=> array('lang' => 'Môže upravovať skóre hry', 					'cat' => 'arcade'),
	'acl_a_arcade_utilities'	=> array('lang' => 'Môže používať obslužné programy arkády', 				'cat' => 'arcade'),
));

$lang = array_merge($lang, array(
	'acl_c_list'					=> array('lang' => 'Môže vypísať kategóriu', 						'cat' => 'arcade'),
	'acl_c_view'					=> array('lang' => 'Môže si zobraziť kategórie', 						'cat' => 'arcade'),
	'acl_c_play'					=> array('lang' => 'Môže hrať hry arkády', 					'cat' => 'arcade'),
	'acl_c_popup'					=> array('lang' => 'Môže hrať hry arkády v novom okne', 	'cat' => 'arcade'),
	'acl_c_playfree'				=> array('lang' => 'Môže hrať hry arkády zadarmo', 			'cat' => 'arcade'),
	'acl_c_score'					=> array('lang' => 'Môže predkladať skóre', 						'cat' => 'arcade'),
	'acl_c_rate'					=> array('lang' => 'Môže hodnotiť hry', 							'cat' => 'arcade'),
	'acl_c_comment'					=> array('lang' => 'Môže predložiť pripomienky', 						'cat' => 'arcade'),
	'acl_c_report'					=> array('lang' => 'Môže nahlasovať hry arkády', 			'cat' => 'arcade'),
	'acl_c_download'				=> array('lang' => 'Môže sťahovať hry arkády', 				'cat' => 'arcade'),
	'acl_c_ignorecontrol'			=> array('lang' => 'Môže ignorovať hranie hry', 					'cat' => 'arcade'),
	'acl_c_resolution'				=> array('lang' => 'Môže meniť rozlíšenie hry', 			'cat' => 'arcade'),
));

?>
