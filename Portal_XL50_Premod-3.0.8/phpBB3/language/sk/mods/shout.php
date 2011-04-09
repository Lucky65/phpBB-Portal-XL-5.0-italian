<?php
/** 
*
* shout [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package language
* @version $Id: shout.php 249 2008-02-16 13:08:57Z paul $
* @copyright (c) 2005 phpBB Group 
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
	'MISSING_DIV' 			=> 'Chýba Chat, nemožem ho nájsť.',
	'NO_POST_GUEST'         => 'Hostia môžu odosielať správy.',
	'LOADING' 				=> 'Zavádzam',
	'POST_MESSAGE'			=> 'Odoslať správu',
	'SENDING' 				=> 'Odosielam správu.',
	'MESSAGE_EMPTY'			=> 'Nie je napisaná žiadna správa.',
	'XML_ER' 				=> 'Chýba XML.',
	'NO_MESSAGE' 			=> 'Nie sú tu žiadne Správy.',
	'NO_AJAX' 				=> 'Bez ajaxu',
	'JS_ERR' 				=> 'Nastala chyba v JavaScriptu. \nChyba:',
	'LINE' 					=> 'Riadok',
	'FILE' 					=> 'Súbor',
	'FLOOD_ERROR'	 		=> 'Nastala chyba pretečenia časový limit',
	'POSTED' 				=> 'Správu odoslal.',
	
	'NO_QUOTE' 				=> 'Nepouživajte vo výpise, quote a kód bbcode.',
	'SMILIES' 				=> 'Smajlíky', 
	'DEL_SHOUT' 			=> 'Ste si istý, mám vymazať správu?',
	'NO_SHOUT_ID'	 		=> 'Nemá id.',
	'MSG_DEL_DONE' 			=> 'Vymazávam Správu',
    'ONLY_ONE_OPEN'         => 'Môžete mať otvorené len 1 editačné poľe',
    'EDIT'                  => 'Upraviť',
    'CANCEL'                => 'Zrušiť',
    'SENDING_EDIT'          => 'odosielam upravenú správu...',
    'EDIT_DONE'             => 'Správa bola upravená',
	
	'SHOUTBOX'				=> 'Chat Portálu',
	
	'SERVER_ERR'			=> 'Ľutujem pri výkone odosielania na server nastala chyba',
	
	// No permission errors
	'NO_SMILIE_PERM'    => 'Smajlíky nie sú povolené',
	'NO_DELETE_PERM'    => 'Nemáte povolené vymazať správu',
	'NO_POST_PERM'		=> 'Nemáte povolené odosielať správy',
	'NO_EDIT_PERM'		=> 'Nemáte povolené upravovať túto správu',
	'NO_VIEW_PERM'      => 'Nemáte povolené sledovať chat',
	'NO_ADMIN_PERM'     => 'Nenašiel som oprávnenia administrátora',
	
	// Installation
	'MOD_INSTALLED'     => 'MÓD bol úspešne nainštalovaný',
	'MOD_UPGRADED'		=> 'MÓD bol úspešne upgradovaný',
	'MOD_UPDATED'		=> 'MÓD bol úspešne aktualizovaný',
	'NO_FOUNDER'        => 'Len zakladatelia môžu spustiť tento súbor',
	'ONLY_UPGRADE'      => 'Tento súbor je určený iba pre upgrady od 1.0.x',
	'ONLY_INSTALL'      => 'Tento súbor je určený len pre novú inštaláciu',
	'ONLY_UPDATE'       => 'Tento súbor je určený len pre aktualizáciu',
	'ALREADY_UPTODATE'	=> 'Databáza je aktuálna.',
	
));
?>