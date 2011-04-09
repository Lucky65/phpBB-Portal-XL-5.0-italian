<?php
/**
*
* prime_post_revisions [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'PRIME_POST_REVISIONS_VIEW'				=> 'Zobrazenie histórie prispevku.',	// Text for the link to view the revision history

	// Viewing revisions
	'PRIME_POST_REVISIONS_VIEWING'			=> 'Zobrazenie histórie príspevkov',
	'PRIME_POST_REVISIONS_VIEWING_EXPLAIN'	=> 'Táto stránka zobrazuje všetky verzie príspevkov, začínajúc s najaktuálnejšou verziou.',
	'PRIME_POST_REVISIONS_TITLE'			=> 'História zobrazenia príspevku: %s',	// The %s is the post title
	'PRIME_POST_REVISIONS_FIRST'			=> 'Originálny príspevok: %s',			// The %s is the post title
	'PRIME_POST_REVISIONS_FINAL'			=> 'Aktuálny príspevok: %s',			// The %s is the post title
	'PRIME_POST_REVISIONS_COUNT'			=> 'Opravovaný %d: %s',			// The %s is the post title
	'PRIME_POST_REVISIONS_INFO'				=> 'Upravil ho %1$s v %2$s.',
	'PRIME_POST_REVISIONS_NO_SUBJECT'		=> '[nie je tu žiadny objek]',	

	// Delete a revision
	'PRIME_POST_REVISIONS_DELETE'			=> 'Vymažem Opravu',
	'PRIME_POST_REVISIONS_DELETE_CONFIRM'	=> 'Ste si istý, mám vymazať túto opravu?',
	'PRIME_POST_REVISIONS_DELETE_DENIED'	=> 'Nemáte udelené oprávnenie na vymazanie opravy.',
	'PRIME_POST_REVISIONS_DELETE_FAILED'	=> 'Ľutujem nastala chyba počas pokusu o vymazanie tejto opravy.',
	'PRIME_POST_REVISIONS_DELETE_SUCCESS'	=> 'Opava bola úspešne vymazaná.',
	'PRIME_POST_REVISIONS_DELETE_INVALID'	=> 'Nebola zadaná žiadna oprava príspevku na odstránenie.',

	// Delete all revisions
	'PRIME_POST_REVISIONS_DELETES'			=> 'Vymažem všetky opravy.',
	'PRIME_POST_REVISIONS_DELETES_CONFIRM'	=> 'Ste si istý, mám vymazať tieto opravy?',
	'PRIME_POST_REVISIONS_DELETES_DENIED'	=> 'Nemáte udelené oprávnenie na vymazanie týchto opráv.',
	'PRIME_POST_REVISIONS_DELETES_FAILED'	=> 'Ľutujem nastala chyba počas pokusu o vymazanie týchto opráv.',
	'PRIME_POST_REVISIONS_DELETES_SUCCESS'	=> 'Opravy boli úspešne vymazané.',
	'PRIME_POST_REVISIONS_DELETES_INVALID'	=> 'Neboli zadané žiadne opravy príspevkov na odstránenie.',
));

?>