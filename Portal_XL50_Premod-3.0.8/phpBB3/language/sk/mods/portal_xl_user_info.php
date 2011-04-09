<?php
/**
*
* @name portal_xl_user_info.php [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'FRONTPAGE'                => 'Titulná stránka',
	'BOOKMARKS'                => 'Nastavenie Záložky',
	'SUBSCRIPTION'             => 'Nastavenie Upozornenia',
	'DRAFTS'                   => 'Nastavenie Konceptov',
	'ATTACHMENTS'              => 'Nastavenie Oprávnení',
	
	'UPROFILE'                 => 'Upraviť Profil',
	'SIGNATURE'                => 'Upraviť Podpis',
	'AVATAR'                   => 'Upraviť Avatar',
	'ACCOUNT'                  => 'Upraviť Účet',
	
	'GLOBALSETTINGS'           => 'Upraviť Globálne Nastavenia',
	'POSTINDEFAULT'            => 'Upraviť Predvolbu Odoslania',
	'DISPLAYOPTIONS'           => 'Upraviť Možnosti Zobrazenia',
	
	'COMPOSEPMMESSAGESG'       => 'Pripojenie Súkromnej Správy',
	'MANAGEPMDRAFTS'           => 'Nastavenie Konceptu Súkromnej Správy',
	'INBOX'                    => 'V Schránke',
	'OUTBOX'                   => 'Na Odoslanie',
	'SENDMESSAGEBOX'           => 'V Schránke pre Odoslanie',
	'UNREADMESSAGES'           => 'V Meprečítaných',
	'RULEFOLDERSETTING'        => 'Pravidlá &amp; Zložky',
	
	'EDITMEMBERSHIP'           => 'Upravenie Členov',
	'MANAGEGROUPS'             => 'Nastavenie Skupín',
	
	'MANAGEFRIENDS'            => 'Nastavenie Priateľov',
	'MANAGEFOES'               => 'Nastavenie Nepriateľov',
	
	'PRIVATE_MESSAGES'     	   => 'Súkromné Správy',
	'POST_TOPIC_INFO'     	   => 'Príspevok &amp; Téma',
	'GROUPS_INFO'  			   => 'Užívateľské skupiny',
	'OVERVIEW_INFO' 		   => 'Prehľad',
	'FRIENDS_FOES'			   => 'Priatelia &amp; Nepriatelia',
	'ADMIN'			   		   => 'Administrácia',
	'PROFILE_INFO'     	       => 'Nastavenie &amp; Profilu',
	'ACPANEL'     	       	   => 'ACP',


	));

?>