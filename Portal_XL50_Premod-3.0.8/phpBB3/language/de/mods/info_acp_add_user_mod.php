<?php
/** 
*
* acp_add_user [German]
*
* @author David Lewis (Highway of Life) http://phpbbacademy.com
* translation by purzl--> Portal XL Germany http://portalxl.ohost.de
* @package acp
* @version $Id: info_acp_add_user_mod.php 31M 2007-08-05 01:14:00Z (local) $
* @copyright (c) 2007 Star Trek Guide Group
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

$lang = array_merge($lang, array(
	'ACP_ACCOUNT_ADDED'			=> 'Der neue Benutzer wurde angelegt. Der Benutzer kann sich jetzt anmelden seine Zugangsdaten wurden per Mail an die angebene Adresse versand.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Der neue Benutzer wurde angelegt. Der Benutzer muss sich noch aktivieren<br />Ein Aktivierungsschl&uuml;ssel wurde an seine E-Mail versand.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Der neue Benutzer wurde angelegt. Ihr Account muss noch vom Administrator freigeschaltet werden!.<br />Eine E-Mail wurde an den Admin versand. Er wird Sie Informieren sobald ihr Account aktiviert wurde.',
	'ACP_ADD_USER'				=> 'Neuer Benutzer',
	'ACP_ADD_USER_ACCOUNT'		=> 'Benutzer hinzuf&uuml;gen',
	'ACP_ADMIN_ACTIVATE'		=> 'Eine E-Mail wurde an den Administrator gesand um den Benutzer zu aktivieren, Werden in ihren Forum neue Benutzer durch den Administrator freigeschaltet werden, haben Sie die m&ouml;glichkeit die Freischaltung gleich hier vorzunehmen. Der neue Benutzer wird per Mail informiert.',
	'ACP_EMAIL_ACTIVATE'		=> 'Dem neu angelegten Butzer wird eine E-Mail mit den Registrierungsdeteils zugesand.',
	'ACP_INSTANT_ACTIVATE'		=> 'Der neue Benutzer wird freigeschaltet. Dem Benutzer wurde eine E-Mail mit den Login Details gesand.',
	
	'ADD_USER'					=> 'Neuer Benutzer',
	'ADD_USER_EXPLAIN'			=> 'Neuen Benutzer anlegen. Werden in ihren Forum neue Benutzer durch den Administrator freigeschaltet werden, haben Sie die m&ouml;glichkeit die Freischaltung gleich hier vorzunehmen. Der neue Benutzer wird per Mail informiert.',
	'ADD_USER_MOD_INSTALLED'	=> 'Add User MOD version %s installiert<br />Bitte stellen Sie sicher das die Rechtevergabe beachtet wird.',
	'ADD_USER_MOD_UPDATED'		=> 'Add User MOD updated zur version %s',
	'ADMIN_ACTIVATE'			=> 'Benutzer aktivieren',
	
	'EDIT_USER_GROUPS'			=> '%sHier klicken um die Benutzergruppe einzustellen%s',
	
	'CONTINUE_EDIT_USER'		=> '%1$sHier klicken um %2$s’s profil%3$s zu bearbeiten', // e.g.: Click here to edit Joe’s profile.
	'LOG_USER_ADDED'			=> '<strong>Neuer Benutzer wurde angelegt!</strong><br />» %s',
	
	'acl_a_add_user'			=> array('lang' => 'Neuer Benutzer kann nicht angelegt werden.', 'cat' => 'user_group'),
));

?>