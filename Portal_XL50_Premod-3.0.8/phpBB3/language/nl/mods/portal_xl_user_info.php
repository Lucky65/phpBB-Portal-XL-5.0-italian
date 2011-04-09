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
	'FRONTPAGE'                => 'Hoofdpagina',
	'BOOKMARKS'                => 'Bladwijzerbeheer',
	'SUBSCRIPTION'             => 'Abonnementenbeheer',
	'DRAFTS'                   => 'Conceptenbeheer',
	'ATTACHMENTS'              => 'Bijlagenbeheer',
	
	'UPROFILE'                 => 'Wijzig Profiel',
	'SIGNATURE'                => 'Wijzig Onderschrift',
	'AVATAR'                   => 'Wijzig Avatar',
	'ACCOUNT'                  => 'Wijzig Registratiedetails',
	
	'GLOBALSETTINGS'           => 'Wijzig Persoonlijke Instellingen',
	'POSTINDEFAULT'            => 'Wijzig Berichtstandaarden',
	'DISPLAYOPTIONS'           => 'Wijzig Weergaveinstellingen',
	
	'COMPOSEPMMESSAGESG'       => 'Schrijf bericht',
	'MANAGEPMDRAFTS'           => 'Beheer Concepten',
	'INBOX'                    => 'Postvak In',
	'OUTBOX'                   => 'Postvak Uit',
	'SENDMESSAGEBOX'           => 'Verzonden Berichten',
	'UNREADMESSAGES'           => 'Ongelezen Berichten',
	'RULEFOLDERSETTING'        => 'Regels &amp; Mappen',
	
	'EDITMEMBERSHIP'           => 'Lidmaatschappen',
	'MANAGEGROUPS'             => 'Groepenbeheer',
	
	'MANAGEFRIENDS'            => 'Beheer Vrienden',
	'MANAGEFOES'               => 'Beheer Vijanden',
	
	'PRIVATE_MESSAGES'         => 'Prive Berichten',
	'POST_TOPIC_INFO'          => 'Posts &amp; Topics',
	'GROUPS_INFO'              => 'Usergroups',
	'OVERVIEW_INFO'            => 'Overzicht',
	'FRIENDS_FOES'             => 'Vrienden &amp; Vijanden',
	'ADMIN'                    => 'Admin Control Panel',
	'PROFILE_INFO'     	       => 'Settings &amp; Profile',
	'ACPANEL'     	       	   => 'ACP',


	));

?>