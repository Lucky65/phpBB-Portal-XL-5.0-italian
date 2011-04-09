<?php
/**
*
* @name portal_xl_user_info.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_xl_user_info.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* Language definitions portal_xl_user_info.php contributed by black_terror
*
* @copyright (c) 2007, 2009 Portal XL Group
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
	'FRONTPAGE'                => 'Startseite',
	'BOOKMARKS'                => 'Bookmarks verwalten',
	'SUBSCRIPTION'             => 'Subscriptions verwalten',
	'DRAFTS'                   => 'Drafts verwalten',
	'ATTACHMENTS'              => 'Anh&auml;nge verwalten',
	
	'UPROFILE'                 => 'Profil editieren',
	'SIGNATURE'                => 'Signatur editieren',
	'AVATAR'                   => 'Avatar editieren',
	'ACCOUNT'                  => 'Account editieren',
	
	'GLOBALSETTINGS'           => 'Globale Einstellungen',
	'POSTINDEFAULT'            => 'Sendeoptionen',
	'DISPLAYOPTIONS'           => 'Anzeigeoptionen',
	
	'COMPOSEPMMESSAGESG'       => 'Neue PN erstellen',
	'MANAGEPMDRAFTS'           => 'PN Drafts verwalten',
	'INBOX'                    => 'Eingang',
	'OUTBOX'                   => 'Ausgang',
	'SENDMESSAGEBOX'           => 'Gesendet',
	'UNREADMESSAGES'           => 'Ungelesen',
	'RULEFOLDERSETTING'        => 'Regeln &amp; Ordner',
	
	'EDITMEMBERSHIP'           => 'Mitgliedschaft editieren',
	'MANAGEGROUPS'             => 'Gruppen verwalten',
	
	'MANAGEFRIENDS'            => 'Freunde verwalten',
	'MANAGEFOES'               => 'Feinde verwalten',
	
	'PRIVATE_MESSAGES'     	   => 'Private Nachrichten',
	'POST_TOPIC_INFO'     	   => 'Senden &amp; Thema',
	'GROUPS_INFO'  			   => 'Usergruppen',
	'OVERVIEW_INFO' 		   => '&Uuml;bersicht',
	'FRIENDS_FOES'			   => 'Freunde &amp; Feinde',
	'ADMIN'			   		   => 'Administration',
	'PROFILE_INFO'     	       => 'Einstellungen &amp; Profil',
	'ACPANEL'     	       	   => 'ACP',
	'BTCLOCK'                  => 'Es ist zur Zeit:',
	'NOUNREADS'                => 'Keine ungelesenen Nachrichten',
	'YOU_VISIT_LAST'           => 'Zuletzt besucht:<br /> %s',
	));

?>