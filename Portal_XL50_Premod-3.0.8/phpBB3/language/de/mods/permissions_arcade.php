<?php
/** 
* acp_permissions_arcade  (phpBB Arcade Permission Set) [English]
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
$lang['permission_cat']['arcade']	= 'Spielhalle';
$lang['permission_type']['c_']		= 'Lokale Kategorienbefugnisse';

// Admin Permissions
$lang = array_merge($lang, array(	
	'acl_a_cauth'				=> array('lang' => 'Kann Befugnisklasse &auml;ndern', 'cat' => 'arcade'),
	'acl_a_arcade_settings'		=> array('lang' => 'Kann Spielhalleneinstellungen verwalten', 'cat' => 'arcade'),
	'acl_a_arcade_game'			=> array('lang' => 'Kann Spiele hinzuf&uuml;gen/&auml;ndern', 'cat' => 'arcade'),
	'acl_a_arcade_delete_game'	=> array('lang' => 'Kann Spiele l&ouml;schen', 'cat' => 'arcade'),
	'acl_a_arcade_cat'			=> array('lang' => 'Kann Kategorien hinzuf&uuml;gen/&auml;ndern', 'cat' => 'arcade'),
	'acl_a_arcade_delete_cat'	=> array('lang' => 'Kann Kategorien l&ouml;schen', 'cat' => 'arcade'),
	'acl_a_arcade_scores'		=> array('lang' => 'Kann Punkte &auml;ndern', 'cat' => 'arcade'),
	'acl_a_arcade_utilities'	=> array('lang' => 'Kann Werkzeuge nutzen', 'cat' => 'arcade'),
));

$lang = array_merge($lang, array(		
	'acl_c_list'					=> array('lang' => 'Kann Kategorie auflisten', 'cat' => 'arcade'),
	'acl_c_view'					=> array('lang' => 'Kann Kategorie ansehen', 'cat' => 'arcade'),
	'acl_c_play'					=> array('lang' => 'Kann Spiele spielen', 'cat' => 'arcade'),
	'acl_c_popup'					=> array('lang' => 'Kann Spiele in einem neuen Fenster spielen', 'cat' => 'arcade'),
	'acl_c_playfree'				=> array('lang' => 'Kann Spiele kostenlos spielen', 'cat' => 'arcade'), 
	'acl_c_score'					=> array('lang' => 'Kann Punkte &uuml;bermitteln', 'cat' => 'arcade'),
	'acl_c_rate'					=> array('lang' => 'Kann Spiele bewerten', 'cat' => 'arcade'),
	'acl_c_comment'					=> array('lang' => 'Kann Spiele kommentieren', 'cat' => 'arcade'),
	'acl_c_report'					=> array('lang' => 'Kann Spiele melden', 'cat' => 'arcade'), 
	'acl_c_download'				=> array('lang' => 'Kann Spiele herunterladen', 'cat' => 'arcade'),
	'acl_c_ignorecontrol'			=> array('lang' => 'Kann Spielkontrolle umgehen', 'cat' => 'arcade'),
	'acl_c_resolution'				=> array('lang' => 'Kann Spielaufl&ouml;sung &auml;ndern', 'cat' => 'arcade'),
));

?>