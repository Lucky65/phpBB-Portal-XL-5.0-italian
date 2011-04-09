<?php
/**
*
* prime_quick_reply [English]
*
* @package language
* @version $Id: prime_quick_reply.php,v 1.0.0 2008/06/25 14:00:00 primehalo Exp $
* @copyright (c) 2008 Ken F. Innes IV
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
	'QUICK_REPLY_ATTACH_SIG'			=> 'Voeg onderschrift toe',
	'QUICK_REPLY_DISABLE_BBCODE'		=> 'Schakel BBCode uit',
	'QUICK_REPLY_DISABLE_SMILIES'		=> 'Schakel smilies uit',
	'QUICK_REPLY_DISABLE_MAGIC_URL'		=> 'Maak URL\'s niet automatisch kleiner',
	'QUICK_REPLY_MORE_SMILIES'			=> 'Bekijk meer smilies',
	'QUICK_REPLY_NOTIFY_REPLY'			=> 'Waarschuw me bij reacties',
	'QUICK_REPLY_TOO_FEW_CHARS'			=> 'Je bericht bevat te weinig karakters.',

	// Custom
	'QUICK_REPLY_POST_REPLY'			=> 'Schrijf een reactie',
	'QUICK_REPLY_SHOW_OPTIONS'			=> 'Laat anwoord opties zien',
	'QUICK_REPLY_HIDE_OPTIONS'			=> 'Verberg antwoord opties',
	'QUICK_REPLY_SHOW'					=> '[Laat zien]',
	'QUICK_REPLY_HIDE'					=> '[Verberg]',
	'QUICK_REPLY_QUOTE_LAST_POST'		=> 'Citeer laatste bericht',
	'QUICK_REPLY_DISPLAY_SUBJECT'		=> 'Laat onderwerp zien',
	'QUICK_REPLY_DISPLAY_BBOCDES'		=> 'Schakel BBCodes aan',
	'QUICK_REPLY_DISPLAY_SMILIES'		=> 'Schakel smilies aan',

	// Admin
	'QUICK_REPLY_ADMIN_CATEGORY'		=> 'Snel atwoord',
	'QUICK_REPLY_ADMIN_ENABLED'			=> 'Schakel snel antwoorden aan',
	'QUICK_REPLY_ADMIN_ENABLED_EXPLAIN'	=> 'Plaats een snel antwoord formulier onder het onderwerp.',
	'QUICK_REPLY_ADMIN_GUESTS'			=> 'Schakel in voor gasten',
	'QUICK_REPLY_ADMIN_GUESTS_EXPLAIN'	=> 'Sta gasten toe om het te gebruiken.',
	'QUICK_REPLY_ADMIN_MEMORY'			=> 'Onthoud formulier status',
	'QUICK_REPLY_ADMIN_MEMORY_EXPLAIN'	=> 'Onthoudt of de gebruiker het formulier aan of uit heeft staan.',
	'QUICK_REPLY_ADMIN_LAST_PAGE_ONLY'	=> 'Alleen op de laatste pagina',
	'QUICK_REPLY_ADMIN_FORM'			=> 'Gedeelte van de pagina',
	'QUICK_REPLY_ADMIN_FORM_EXPLAIN'	=> 'Als het niet standaard wordt getoond, dan moet de gebruiker er op klikken om het te zien.',
	'QUICK_REPLY_ADMIN_OPTIONS'			=> 'Display opties',
	'QUICK_REPLY_ADMIN_OPTIONS_EXPLAIN'	=> 'Als het niet standaard wordt getoond, dan moet de gebruiker er op klikken om het te zien.',
	'QUICK_REPLY_ADMIN_SUBJECT'			=> 'Display onderwerp',
	'QUICK_REPLY_ADMIN_SUBJECT_EXPLAIN'	=> 'Als het niet standaard wordt getoond, dan moet de gebruiker er op klikken om het te zien.',
	'QUICK_REPLY_ADMIN_BBCODES'			=> 'Display BBCodes',
	'QUICK_REPLY_ADMIN_BBCODES_EXPLAIN'	=> 'Als het niet standaard wordt getoond, dan moet de gebruiker er op klikken om het te zien.',
	'QUICK_REPLY_ADMIN_SMILIES'			=> 'Display smilies',
	'QUICK_REPLY_ADMIN_SMILIES_EXPLAIN'	=> 'Als het niet standaard wordt getoond, dan moet de gebruiker er op klikken om het te zien.',
	'QUICK_REPLY_ADMIN_MINIMUM'			=> 'Minimaal aantal reacties',
	'QUICK_REPLY_ADMIN_MINIMUM_EXPLAIN'	=> 'Moet voldoen aan het minimaal aantal reacties.',

	// Used if Prime Multi-Quote is installed
	'QUICK_REPLY_QUOTE_SELECTED'		=> 'Citaat geselecteerd',
	'QUICK_REPLY_NO_QUOTES_SELECTED'	=> 'Geen citaat geselecteerd!',
));

?>