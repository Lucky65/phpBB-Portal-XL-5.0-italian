<?php
/**
*
* prime_quick_reply [Italian]
*
* @package language
* @version $Id: prime_quick_reply.php,v 0.1.2 2008/01/29 14:00:00 primehalo Exp $
* @copyright (c) 2008 Ken F. Innes IV
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

$lang = array_merge($lang, array(
	// Originally from posting.php, edited to fit
	'QUICK_REPLY_ATTACH_SIG'			=> 'Allega firma',
	'QUICK_REPLY_DISABLE_BBCODE'		=> 'Disattiva BBCode',
	'QUICK_REPLY_DISABLE_SMILIES'		=> 'Disattiva emoticons',
	'QUICK_REPLY_DISABLE_MAGIC_URL'		=> 'Disattiva autoparse',
	'QUICK_REPLY_MORE_SMILIES'			=> 'Visualizza tutte le emoticon',
	'QUICK_REPLY_NOTIFY_REPLY'			=> 'Notificami le repliche',
	'QUICK_REPLY_TOO_FEW_CHARS'			=> 'Il tuo messaggio contiene pochi caratteri.',

	// Custom
	'QUICK_REPLY_POST_REPLY'			=> 'Risposta rapida',
	'QUICK_REPLY_SHOW_OPTIONS'			=> 'Mostra opzioni di riposta',
	'QUICK_REPLY_HIDE_OPTIONS'			=> 'Nascondi opzioni di risposta',
	'QUICK_REPLY_SHOW'					=> '[Mostra]',
	'QUICK_REPLY_HIDE'					=> '[Nascondi]',
	'QUICK_REPLY_QUOTE_LAST_POST'		=> 'Cita ultimo',
	'QUICK_REPLY_DISPLAY_SUBJECT'		=> 'Visualizza oggetto',
	'QUICK_REPLY_DISPLAY_BBOCDES'		=> 'Visualizza BBCodes',
	'QUICK_REPLY_DISPLAY_SMILIES'		=> 'Visualizza emoticons',

	// Admin
	'QUICK_REPLY_ADMIN_CATEGORY'		=> 'Risposta rapida',
	'QUICK_REPLY_ADMIN_ENABLED'			=> 'Attiva risposta rapida',
	'QUICK_REPLY_ADMIN_ENABLED_EXPLAIN'	=> 'Posiziona un modulo di risposta rapida sotto ogni argomento.',
	'QUICK_REPLY_ADMIN_GUESTS'			=> 'Attiva per gli ospiti',
	'QUICK_REPLY_ADMIN_GUESTS_EXPLAIN'	=> 'Permetti di usare agli ospiti la risposta rapida.',
	'QUICK_REPLY_ADMIN_MEMORY'			=> 'Ricorda lo stato',
	'QUICK_REPLY_ADMIN_MEMORY_EXPLAIN'	=> 'Ricorda se un’utente è visibile o nascosto.',
	'QUICK_REPLY_ADMIN_LAST_PAGE_ONLY'	=> 'Ultima pagina',
	'QUICK_REPLY_ADMIN_FORM'			=> 'Visualizza dall’area',
	'QUICK_REPLY_ADMIN_FORM_EXPLAIN'	=> 'Se non è visualizzato, gli utenti devono scegliere di essere visibili.',
	'QUICK_REPLY_ADMIN_OPTIONS'			=> 'Visualizza opzioni',
	'QUICK_REPLY_ADMIN_OPTIONS_EXPLAIN'	=> 'Se non è visualizzato, gli utenti devono scegliere di essere visibili.',
	'QUICK_REPLY_ADMIN_SUBJECT'			=> 'Visualizza oggetto',
	'QUICK_REPLY_ADMIN_SUBJECT_EXPLAIN'	=> 'Se non è visualizzato, gli utenti devono scegliere di essere visibili.',
	'QUICK_REPLY_ADMIN_BBCODES'			=> 'Visualizza BBCodes',
	'QUICK_REPLY_ADMIN_BBCODES_EXPLAIN'	=> 'Se non è visualizzato, gli utenti devono scegliere di essere visibili.',
	'QUICK_REPLY_ADMIN_SMILIES'			=> 'Visualizza emoticons',
	'QUICK_REPLY_ADMIN_SMILIES_EXPLAIN'	=> 'Se non è visualizzato, gli utenti devono scegliere di essere visibili.',
	'QUICK_REPLY_ADMIN_MINIMUM'			=> 'Conteggio minimo messaggi',
	'QUICK_REPLY_ADMIN_MINIMUM_EXPLAIN'	=> 'Richiede un numero minimo di messaggi.',

	// Used if Prime Multi-Quote is installed
	'QUICK_REPLY_QUOTE_SELECTED'		=> 'Citazione selezionata',
	'QUICK_REPLY_NO_QUOTES_SELECTED'	=> 'Nessun messaggio selezionato!',
));

?>