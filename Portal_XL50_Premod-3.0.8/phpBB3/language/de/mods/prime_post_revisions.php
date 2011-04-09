<?php
/**
*
* prime_post_revisions [English]
*
* @package language
* @version $Id: prime_post_revisions.php,v 1.1.1.1 2009/05/15 05:16:05 damysterious Exp $
* @copyright (c) 2007-2008 Ken F. Innes IV
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
	// Viewing posts
	'PRIME_POST_REVISIONS_VIEW'				=> 'Zeige Beitragshistory.',	// Text for the link to view the revision history

	// Viewing revisions
	'PRIME_POST_REVISIONS_VIEWING'			=> 'Zeige Beitragshistory',
	'PRIME_POST_REVISIONS_VIEWING_EXPLAIN'	=> 'Diese Seite zeigt alle Arten von Beitr&auml;gen, angefangen mit den neuesten Beitr&aum;gen.',
	'PRIME_POST_REVISIONS_TITLE'			=> 'Zeige Beitragshistory: %s',	// The %s is the post title
	'PRIME_POST_REVISIONS_FIRST'			=> 'Originaler Beitrag: %s',			// The %s is the post title
	'PRIME_POST_REVISIONS_FINAL'			=> 'Aktueller Beitrag: %s',			// The %s is the post title
	'PRIME_POST_REVISIONS_COUNT'			=> '&Auml;nderungen %d: %s',			// The %s is the post title
	'PRIME_POST_REVISIONS_INFO'				=> 'Bearbeitet von %1$s am %2$s.',
	'PRIME_POST_REVISIONS_NO_SUBJECT'		=> '[Kein Betreff]',	

	// Delete a revision
	'PRIME_POST_REVISIONS_DELETE'			=> 'L&ouml;sche Beitrags&auml;nderung',
	'PRIME_POST_REVISIONS_DELETE_CONFIRM'	=> 'Bist du sicher, dass du die Beitrags&auml;nderung l&ouml;schen willst?',
	'PRIME_POST_REVISIONS_DELETE_DENIED'	=> 'Du hast die n&ouml;tige Berechtigung nicht um die Beitrags&auml;nderung zu l&ouml;schen.',
	'PRIME_POST_REVISIONS_DELETE_FAILED'	=> 'Ein Error trat auf w&auml;hrend des Versuches die Beitrags&auml;nderung zu l&ouml;schen.',
	'PRIME_POST_REVISIONS_DELETE_SUCCESS'	=> 'Die Beitrags&auml;nderung wurde erfolgreich gel&ouml;scht.',
	'PRIME_POST_REVISIONS_DELETE_INVALID'	=> 'Es wurde keine Beitrags&auml;nderung zum L&ouml;schen ausgew&auml;hlt.',

	// Delete all revisions
	'PRIME_POST_REVISIONS_DELETES'			=> 'Alle Beitrags&auml;nderungen l&ouml;schen.',
	'PRIME_POST_REVISIONS_DELETES_CONFIRM'	=> 'Bist du sicher, dass du diese Beitrags&auml;nderungen l&ouml;schen willst?',
	'PRIME_POST_REVISIONS_DELETES_DENIED'	=> 'Du hast die n&ouml;tigen Berechtigungen nicht um die Beitrags&auml;nderungen zu l&oum;schen.',
	'PRIME_POST_REVISIONS_DELETES_FAILED'	=> 'Ein Error trat auf w&auml;hrend des Versuches die Beitrags&auml;nderungen zu l&ouml;schen.',
	'PRIME_POST_REVISIONS_DELETES_SUCCESS'	=> 'Die Beitrags&auml;nderungen wurden erfolgreich gel&ouml;scht.',
	'PRIME_POST_REVISIONS_DELETES_INVALID'	=> 'Es wurde keine Beitrags&auml;nderungen zum L&ouml;schen ausgew&auml;hlt.',
));

?>