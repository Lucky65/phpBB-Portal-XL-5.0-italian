<?php
/**
*
* permission info ajax shoutbox [Italian]
*
* @package language
* @version $Id: permissions_ajax_shoutbox.php 253 2008-02-16 13:50:55Z paul $
* @copyright (c) 2005 phpBB Group
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/13
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
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

$lang['permission_cat']['shoutbox'] = 'Shoutbox';

// Teh permissions
$lang = array_merge($lang, array(
	'acl_u_as_post'				=> array('lang' => 'L’utente può inviare messaggi nello shoutbox', 'cat' => 'shoutbox'),
	'acl_u_as_view'				=> array('lang' => 'L’utente può vedere lo shoutbox', 'cat' => 'shoutbox'),
	'acl_u_as_info'				=> array('lang' => 'L’utente può vedere gli IP di altri utenti.', 'cat' => 'shoutbox'),
	'acl_u_as_delete'			=> array('lang' => 'L’utente può cancellare i messaggi di altri utenti', 'cat' => 'shoutbox'),
	'acl_u_as_edit'				=> array('lang' => 'L’utente può modificare i suoi messaggi', 'cat' => 'shoutbox'),
	'acl_u_as_smilies'			=> array('lang' => 'L’utente può inviare faccine', 'cat' => 'shoutbox'),
	'acl_u_as_bbcode'			=> array('lang' => 'L’utente può inviare bbcode', 'cat' => 'shoutbox'),
	'acl_u_as_mod_edit'			=> array('lang' => 'L’utente può modificare i messaggi di altri utenti', 'cat' => 'shoutbox'),
	'acl_u_as_ignore_flood'		=> array('lang' => 'L’utente può ignorare il limite tempo utenti', 'cat' => 'shoutbox'),
	'acl_a_as_manage'			=> array('lang' => 'L’utente può gestire le impostazioni Shoutbox', 'cat' => 'shoutbox'),
));
?>