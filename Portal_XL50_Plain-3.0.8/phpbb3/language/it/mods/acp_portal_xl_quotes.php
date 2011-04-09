<?php
/** 
*
* @name acp_portal_xl_quotes.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_quotes.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
*
* @copyright (c) 2007, 2009  Portal XL Group
* @copyright (c) 2009, 2010 luckylab.eu - upgrade translation for portal xl on 2010/08/09
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
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
	'TITLE' 					=> 'Gestione Citazioni',
	'TITLE_EXPLAIN'				=> 'Da questo menu puoi creare/modficare/cancellare le tue citazioni Puoi aggiungere molte citazioni e visualizzarle in questo blocco, ma esse sono limitate alla visualizzazione casuale delle citazioni selezionate.',
 
	'PORTAL_QUOTES_EDIT_HEADER'	=> 'Aggiungi o modifica citazioni',
	'ACP_MANAGE_QUOTE'			=> 'Aggiungi o modifica citazioni',
	'ACP_QUOTE_EXPLAIN'			=> 'Gestione citazioni',
	'ADD_QUOTE'					=> 'Aggiungi citazione',
	'AUTHOR'					=> 'Autore',
	'AUTHOR_INFO'				=> 'Autore',
	'AUTHOR_EXPLAIN'			=> 'Nome autore originale, scrivi Sconosciuto se non sai chi sia.',
	'DISABLE'					=> '<b>Blocco abilitato</b>',
	'DISABLE_BLOCK'				=> 'Attiva',
	'ENABLE'					=> '<b>Blocco disabilitato</b>',
	'ENABLE_BLOCK'				=> 'Dsattiva',
	'MUST_SELECT_QUOTE'			=> 'Seleziona citazione',
	'QUOTE'						=> 'Citazioni nel database',
	'QUOTE_INFO'				=> 'Citazione',
	'QUOTE_EXPLAIN'				=> 'Scrivi qui il testo della tua citazione',
	'QUOTE_ADDED'				=> 'Citazione aggiunta',
	'QUOTE_DISABLE'				=> '<b>Attiva</b>',
	'QUOTE_DISABLE_EXPLAIN'		=> '<b>Attiva :</b><br>visualizzazione blocco nel forum.',
	'QUOTE_DISABLE_EXPLAIN2'	=> 'Puoi attivare o disattivare la visualizzazione del blocco nel forum : ',
	'QUOTE_REMOVED'				=> 'Citazione eliminata',
	'QUOTE_UPDATED'				=> 'Citazione modificata',
	'RESET_QUOTE' 				=> 'Annulla',

));

?>