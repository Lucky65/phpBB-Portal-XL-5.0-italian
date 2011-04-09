<?php
/**
*
* prime_quick_reply [German]
*
* @package language
* @version $Id: prime_quick_reply.php,v 1.0.0 2008/06/25 14:00:00 primehalo Exp $
* @copyright (c) 2008 Ken F. Innes IV
* @translation H3nK
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
	// Originally from posting.php, edited to fit
	'QUICK_REPLY_ATTACH_SIG'			=> 'Signatur anh&auml;ngen',
	'QUICK_REPLY_DISABLE_BBCODE'		=> 'BBCode deaktivieren',
	'QUICK_REPLY_DISABLE_SMILIES'		=> 'Smilies deaktivieren',
	'QUICK_REPLY_DISABLE_MAGIC_URL'		=> 'URLs nicht automatisch umwandeln',
	'QUICK_REPLY_MORE_SMILIES'			=> 'Mehr Smilies zeigen',
	'QUICK_REPLY_NOTIFY_REPLY'			=> 'Benachrichtige mich bei Antworten',
	'QUICK_REPLY_TOO_FEW_CHARS'			=> 'Deine Nachricht enth&auml;lt zu wenig Zeichen',

	// Custom
	'QUICK_REPLY_POST_REPLY'			=> 'Eine Antwort posten',
	'QUICK_REPLY_SHOW_OPTIONS'			=> 'Antwort-Optionen zeigen',
	'QUICK_REPLY_HIDE_OPTIONS'			=> 'Antwort-Optionen verstecken',
	'QUICK_REPLY_SHOW'					=> '[Zeigen]',
	'QUICK_REPLY_HIDE'					=> '[Verstecken]',
	'QUICK_REPLY_QUOTE_LAST_POST'		=> 'Letzten Beitrag zitieren',
	'QUICK_REPLY_DISPLAY_SUBJECT'		=> 'Betreff anzeigen',
	'QUICK_REPLY_DISPLAY_BBOCDES'		=> 'BBCodes anzeigen',
	'QUICK_REPLY_DISPLAY_SMILIES'		=> 'Smilies anzeigen',

	// Admin
	'QUICK_REPLY_ADMIN_CATEGORY'		=> 'Quick Reply',
	'QUICK_REPLY_ADMIN_ENABLED'			=> 'Quick Reply aktivieren',
	'QUICK_REPLY_ADMIN_ENABLED_EXPLAIN'	=> 'Platziere Quick Reply unterhalb des Themas.',
	'QUICK_REPLY_ADMIN_GUESTS'			=> 'F&uuml;r G&auml;ste aktivieren',
	'QUICK_REPLY_ADMIN_GUESTS_EXPLAIN'	=> 'G&auml;sten erlauben Quick Reply zu benutzen.',
	'QUICK_REPLY_ADMIN_MEMORY'			=> 'Formularstatus merken',
	'QUICK_REPLY_ADMIN_MEMORY_EXPLAIN'	=> 'Merken, ob ein Benutzer das Formular sichtbar oder versteckt hat.',
	'QUICK_REPLY_ADMIN_LAST_PAGE_ONLY'	=> 'Nur letzte Seite',
	'QUICK_REPLY_ADMIN_FORM'			=> 'Formularbereich anzeigen',
	'QUICK_REPLY_ADMIN_FORM_EXPLAIN'	=> 'Falls nicht angezeigt m&uuml;ssen Benutzer klicken um es anzuzeigen',
	'QUICK_REPLY_ADMIN_OPTIONS'			=> 'Anzeigeoptionen',
	'QUICK_REPLY_ADMIN_OPTIONS_EXPLAIN'	=> 'Falls nicht angezeigt m&uuml;ssen Benutzer klicken um es anzuzeigen',
	'QUICK_REPLY_ADMIN_SUBJECT'			=> 'Display subject',
	'QUICK_REPLY_ADMIN_SUBJECT_EXPLAIN'	=> 'Falls nicht angezeigt m&uuml;ssen Benutzer klicken um es anzuzeigen',
	'QUICK_REPLY_ADMIN_BBCODES'			=> 'BBCodes anzeigen',
	'QUICK_REPLY_ADMIN_BBCODES_EXPLAIN'	=> 'Falls nicht angezeigt m&uuml;ssen Benutzer klicken um es anzuzeigen',
	'QUICK_REPLY_ADMIN_SMILIES'			=> 'Smilies anzeigen',
	'QUICK_REPLY_ADMIN_SMILIES_EXPLAIN'	=> 'Falls nicht angezeigt m&uuml;ssen Benutzer klicken um es anzuzeigen',
	'QUICK_REPLY_ADMIN_MINIMUM'			=> 'Minimum post count',
	'QUICK_REPLY_ADMIN_MINIMUM_EXPLAIN'	=> 'Require a minimum number of posts.',

	// Used if Prime Multi-Quote is installed
	'QUICK_REPLY_QUOTE_SELECTED'		=> 'Makiertes zitieren',
	'QUICK_REPLY_NO_QUOTES_SELECTED'	=> 'Keine posts ausgew&auml;hlt!',
));

?>