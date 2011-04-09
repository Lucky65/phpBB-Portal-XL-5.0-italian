<?php
/**
*
* prime_quick_reply [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'QUICK_REPLY_ATTACH_SIG'			=> 'Pripojiť podpis',
	'QUICK_REPLY_DISABLE_BBCODE'		=> 'Zakázať BBCode',
	'QUICK_REPLY_DISABLE_SMILIES'		=> 'Zakázať smajlíky',
	'QUICK_REPLY_DISABLE_MAGIC_URL'		=> 'Neprevádzať Auto.URL',
	'QUICK_REPLY_MORE_SMILIES'			=> 'Ďalšie smajlíky',
	'QUICK_REPLY_NOTIFY_REPLY'			=> 'Upozorniť ma na odpovede',
	'QUICK_REPLY_TOO_FEW_CHARS'			=> 'Vaša správa obsahuje príliš málo znakov.',

	// Custom
	'QUICK_REPLY_POST_REPLY'			=> 'Rýchla odpoveď',
	'QUICK_REPLY_SHOW_OPTIONS'			=> 'Zobrazím Volby',
	'QUICK_REPLY_HIDE_OPTIONS'			=> 'Skryjem Volby',
	'QUICK_REPLY_SHOW'					=> '[Zobrazím] -> ',
	'QUICK_REPLY_HIDE'					=> '[Skryjem] -> ',
	'QUICK_REPLY_QUOTE_LAST_POST'		=> 'Citovať poslednú správu',
	'QUICK_REPLY_DISPLAY_SUBJECT'		=> 'Zobraziť predmet',
	'QUICK_REPLY_DISPLAY_BBOCDES'		=> 'Zobraziť BBCodes',
	'QUICK_REPLY_DISPLAY_SMILIES'		=> 'Zobraziť smajlíky',

	// Admin
	'QUICK_REPLY_ADMIN_CATEGORY'		=> 'Rozšírenie z Portálu Rýchla Odpoveď',
	'QUICK_REPLY_ADMIN_ENABLED'			=> 'Povoliť Rýchlu Odpoveď',
	'QUICK_REPLY_ADMIN_ENABLED_EXPLAIN'	=> 'Umiestni Rýchlu Odpoveď pod tému.',
	'QUICK_REPLY_ADMIN_GUESTS'			=> 'Povoliť Rýchlu Odpoveď aj hosťom',
	'QUICK_REPLY_ADMIN_GUESTS_EXPLAIN'	=> 'Umožní použiť Rýchlu Odpoveď aj hosťom.',
	'QUICK_REPLY_ADMIN_MEMORY'			=> 'Pamätať si stav nastavenia',
	'QUICK_REPLY_ADMIN_MEMORY_EXPLAIN'	=> 'Pamätať si uživateľom nastavený stav skryť/zobraziť.',
	'QUICK_REPLY_ADMIN_LAST_PAGE_ONLY'	=> 'Len na poslednej stránke',
	'QUICK_REPLY_ADMIN_FORM'			=> 'Zobraziť plochu pre zadanie Odpovede',
	'QUICK_REPLY_ADMIN_FORM_EXPLAIN'	=> 'Ak je zadané "Nie", uživatelia musia kliknú na Zobraziť.',
	'QUICK_REPLY_ADMIN_OPTIONS'			=> 'Zobraziť volby',
	'QUICK_REPLY_ADMIN_OPTIONS_EXPLAIN'	=> 'Ak je zadané "Nie", uživatelia musia kliknú na Zobraziť.',
	'QUICK_REPLY_ADMIN_SUBJECT'			=> 'Zobraziť predmet',
	'QUICK_REPLY_ADMIN_SUBJECT_EXPLAIN'	=> 'Ak je zadané "Nie", uživatelia musia kliknú na Zobraziť.',
	'QUICK_REPLY_ADMIN_BBCODES'			=> 'Zobraziť BBCodes',
	'QUICK_REPLY_ADMIN_BBCODES_EXPLAIN'	=> 'Ak je zadané "Nie", uživatelia musia kliknú na Zobraziť.',
	'QUICK_REPLY_ADMIN_SMILIES'			=> 'Zobraziť smajlíky',
	'QUICK_REPLY_ADMIN_SMILIES_EXPLAIN'	=> 'Ak je zadané "Nie", uživatelia musia kliknú na Zobraziť.',
	'QUICK_REPLY_ADMIN_MINIMUM'			=> 'Minimálny počet príspevkov',
	'QUICK_REPLY_ADMIN_MINIMUM_EXPLAIN'	=> 'Musí byť minimálny počet príspevkov.',

	// Used if Prime Multi-Quote is installed
	'QUICK_REPLY_QUOTE_SELECTED'		=> 'Označený príspevok',
	'QUICK_REPLY_NO_QUOTES_SELECTED'	=> 'Nie sú tu žiadne príspevky!',
));

?>