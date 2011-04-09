<?php
/** 
*
* @name acp_portal_xl_newsfeeds.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_newsfeeds.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
	'TITLE' 					=> 'Gestisci Feed RSS',
	'TITLE_EXPLAIN'				=> 'Da questo modulo puoi gestire i tuoi feeds RSS, creare/modificare/cancellare, tanti feeds che puoi gestire e visualizzare nel tuo portale.',
 
	'PORTAL_FEED_EDIT_HEADER'	=> 'Aggiungi o modifica feed',
	'ACP_MANAGE_FEED'			=> 'Aggiungi o modifica feeds',
	'ACP_FEED_EXPLAIN'			=> 'Gestione Feeds',
	'ADD_FEED'					=> 'Aggiungi feed',
	'DISABLE'					=> '<b>Blocco abilitato</b>',
	'DISABLE_BLOCK'				=> 'Abilita',
	'ENABLE'					=> '<b>Blocco disabilitato</b>',
	'ENABLE_BLOCK'				=> 'Disabilita',
	'MUST_SELECT_FEED'			=> 'Seleziona feed',
	'FEED'						=> 'Feeds nel database',
	'VISIT_FEED'				=> 'Sottoscrivi',
	'FEED_INFO'					=> 'Feed',
	'FEED_EXPLAIN'				=> 'Testo per il tuo feed',
	'FEED_ADDED'				=> 'Feed aggiunto',
	'FEED_REMOVED'				=> 'Feed eliminato',
	'FEED_UPDATED'				=> 'Feed modificato',
	'RESET_FEED' 				=> 'Annulla',
	'FEED_EDIT'					=> 'Modifica Feeds',
	'FEED_EDIT_EXPLAIN'			=> 'Qui puoi aggiungere o modificare gli esistenti feeds. Il titolo è necessario. Devi anche aggiungere il dettaglio del feed e dove è possibile scaricarlo o trovarlo.',
	'FEED_TITLE'				=> 'Titolo Feed',
	'FEED_TITLE_EXPLAIN'		=> 'Titolo breve Feed.',
	'FEED_SHOW'					=> 'Vuoi visualizzarlo Si/No?',
	'FEED_URL'					=> 'URL Feed',
	'FEED_URL_EXPLAIN'			=> 'Specifica un URL per questo feed (link al feed -descrizione o -argomento).',
	'FEED_POSITIONS'			=> 'Posizione',
	'FEED_POSITION'				=> 'Con quale posizione vuoi visualizzare il feed?',
	'FEED_POSITION_EXPLAIN'		=> 'Specifica con quale posizione deve essere visualizzato.',
	'LEFT'						=> 'Sinistra',
	'RIGHT'						=> 'Destra',
	'NOT_SET'					=> 'Non selezionato',
	'FEED_CACHE_TIME'			=> 'Tempo cache',
	'FEED_CACHE_TIME_EXPLAIN'	=> 'Tempo massimo cache per il file prima che il feed venga aggiornato, in secondi (default è 1 ora = 60 minuti = 3600 secondi).',
	'CACHE_TIME'				=> 'secondi',
	'FEED_ITEMS_LIMIT'			=> 'Limite',
	'FEED_ITEMS_LIMIT_EXPLAIN'	=> 'Limite massimo oggetti/righe da mostrare per singolo feed.',
	'ITEMS_LIMIT'				=> 'righe',
	'FEED_RANDOM_LIMIT'			=> 'Lista casuale',
	'FEED_RANDOM_LIMIT_EXPLAIN'	=> 'Limite massimo feeds da visualizzare nel blocco.',
	'RANDOM_LIMIT'				=> 'feeds',
	'BLOCK_FEED_SETTINGS'		=> 'Configurazione generale feeds',

));

?>