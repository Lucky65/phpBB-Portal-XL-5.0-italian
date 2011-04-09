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
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com:
* (http://phpbbgr.com/team/)
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
// â€™ Â» â€œ â€ â€¦
//

$lang = array_merge($lang, array(
	'FRONTPAGE'                => 'Κύρια σελίδα',
	'BOOKMARKS'                => 'Διαχείριση αγαπημένων',
	'SUBSCRIPTION'             => 'Διαχείριση συνδρομών',
	'DRAFTS'                   => 'Διαχείριση προχείρων',
	'ATTACHMENTS'              => 'Διαχείριση συνημμένων',
	
	'UPROFILE'                 => 'Επεξεργασία προφίλ',
	'SIGNATURE'                => 'Επεξεργασία υπογραφής',
	'AVATAR'                   => 'Επεξεργασία άβαταρ',
	'ACCOUNT'                  => 'Επεξεργασία λογαριασμού',
	
	'GLOBALSETTINGS'           => 'Επεξεργασία γενικών ρυθμίσεων',
	'POSTINDEFAULT'            => 'Επεξεργασία ρυθμίσεων δημοσίευσης',
	'DISPLAYOPTIONS'           => 'Επεξεργασία εμφάνισης ρυθμίσεων',
	
	'COMPOSEPMMESSAGESG'       => 'Σύνθεση ΠΜ Μηνυμάτων',
	'MANAGEPMDRAFTS'           => 'Διαχείριση προχείρων ΠΜ',
	'INBOX'                    => 'Εισερχόμενα',
	'OUTBOX'                   => 'Εξερχόμενα',
	'SENDMESSAGEBOX'           => 'Απεσταλμένα',
	'UNREADMESSAGES'           => 'Αδιάβαστα',
	'RULEFOLDERSETTING'        => 'Κανόνες &amp; Φάκελλοι',
	
	'EDITMEMBERSHIP'           => 'Επεξεργασία ιδιότητες μελών',
	'MANAGEGROUPS'             => 'Διαχείριση ομάδων',
	
	'MANAGEFRIENDS'            => 'Διαχείριση φίλων',
	'MANAGEFOES'               => 'Διαχείριση εχθρών',
	
	'PRIVATE_MESSAGES'     	   => 'Προσωπικά μηνύματα',
	'POST_TOPIC_INFO'     	   => 'Δημοσίευση &amp; Θέμα',
	'GROUPS_INFO'  			   => 'Ομάδες μελών',
	'OVERVIEW_INFO' 		   => 'Επισκόπηση',
	'FRIENDS_FOES'			   => 'Φίλοι &amp; Εχθροί',
	'ADMIN'			   		   => 'Διαχείριση',
	'PROFILE_INFO'     	       => 'Ρυθμίσεις &amp; Προφίλ',
	'ACPANEL'     	       	   => 'ΠΕΔ',


	));

?>