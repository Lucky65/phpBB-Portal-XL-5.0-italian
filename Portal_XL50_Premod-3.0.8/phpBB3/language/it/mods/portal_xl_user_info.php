<?php
/**
*
* @name portal_xl_user_info.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_xl_user_info.php,v 1.1.1.1 2009/05/15 05:16:05 damysterious Exp $
*
* Language definitions portal_xl_user_info.php contributed by black_terror
*
* @copyright (c) 2007, 2009  Portal XL Group
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
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
	'FRONTPAGE'                => 'Pannello controllo utente',
	'BOOKMARKS'                => 'Preferiti',
	'SUBSCRIPTION'             => 'Sottoscrizioni',
	'DRAFTS'                   => 'Bozze',
	'ATTACHMENTS'              => 'Allegati',
	
	'UPROFILE'                 => 'Modifica profilo',
	'SIGNATURE'                => 'Modifica firma',
	'AVATAR'                   => 'Modifica avatar',
	'ACCOUNT'                  => 'Modifica account',
	
	'GLOBALSETTINGS'           => 'Preferenze globali',
	'POSTINDEFAULT'            => 'Preferenze messaggi',
	'DISPLAYOPTIONS'           => 'Opzioni visualizzazione',
	
	'COMPOSEPMMESSAGESG'       => 'Scrivi MP',
	'MANAGEPMDRAFTS'           => 'Gestione bozze',
	'INBOX'                    => 'MP in arrivo',
	'OUTBOX'                   => 'MP in uscita',
	'SENDMESSAGEBOX'           => 'MP spediti',
	'UNREADMESSAGES'           => 'MP non letti',
	'RULEFOLDERSETTING'        => 'Regole e preferenze',
	
	'EDITMEMBERSHIP'           => 'Iscrizioni',
	'MANAGEGROUPS'             => 'Gruppi',
	
	'MANAGEFRIENDS'            => 'Amici',
	'MANAGEFOES'               => 'Ignorati',
	
	'PRIVATE_MESSAGES'     	   => 'Messaggi privati',
	'POST_TOPIC_INFO'     	   => 'Messaggi e argomenti',
	'GROUPS_INFO'  			   => 'Gruppi',
	'OVERVIEW_INFO' 		   => 'Panoramica',
	'FRIENDS_FOES'			   => 'Amici e ignorati',
	'ADMIN'			   		   => 'Amministrazione',
	'PROFILE_INFO'     	       => 'Configurazione profilo',
	'ACPANEL'     	       	   => 'ACP',


	));

?>