<?php
/**
*
* permission info ajax shoutbox [Dutch]
*
* @package language
* @version $Id: permissions_ajax_shoutbox.php 253 2008-02-16 13:50:55Z paul $
* @copyright (c) 2005 phpBB Group
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
// � � � � �
//

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

$lang['permission_cat']['shoutbox'] = 'Ajax Shoutbox';

// Teh permissions
$lang = array_merge($lang, array(
	'acl_u_as_post'				=> array('lang' => 'Een gebruiker kan een bericht plaatsen in de shoutbox', 'cat' => 'shoutbox'),
	'acl_u_as_view'				=> array('lang' => 'Een gebruiker kan de shoutbox bekijken', 'cat' => 'shoutbox'),
	'acl_u_as_info'				=> array('lang' => 'Een gebruiker kan de ip adressen van andere gebruikers zien.', 'cat' => 'shoutbox'),
	'acl_u_as_delete'			=> array('lang' => 'Een gebruiker kan shouts van andere gerbuikers verwijderen', 'cat' => 'shoutbox'),
	'acl_u_as_edit'				=> array('lang' => 'Een gebruiker kan shouts van zichzelf wijzigen', 'cat' => 'shoutbox'),
	'acl_u_as_smilies'			=> array('lang' => 'Een gebruiker kan smilies gebruiken', 'cat' => 'shoutbox'),
	'acl_u_as_bbcode'			=> array('lang' => 'Een gebruiker kan bbcode gebruiken', 'cat' => 'shoutbox'),
	'acl_u_as_mod_edit'			=> array('lang' => 'Een gebruiker kan shouts van andere gebruikers wijzigen', 'cat' => 'shoutbox'),
	'acl_u_as_ignore_flood'		=> array('lang' => 'Een gebruiker kan meer shouts plaatsen dan de ingesteld in de tijdlimiet', 'cat' => 'shoutbox'),
	'acl_a_as_manage'			=> array('lang' => 'Een gebruiker kan de shoutbox instellingen beheren', 'cat' => 'shoutbox'),
));
?>