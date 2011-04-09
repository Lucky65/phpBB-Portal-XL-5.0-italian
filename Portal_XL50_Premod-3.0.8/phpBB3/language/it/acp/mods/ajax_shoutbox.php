<?php
/**
*
* Module info ajax shoutbox [Italian]
*
* @package language
* @version $Id: ajax_shoutbox.php 253 2008-02-16 13:50:55Z paul $
* @copyright (c) 2005 phpBB Group
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/13
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
	'ACP_SHOUTBOX_SETTINGS'				=> 'Configurazione ajax shoutbox',
	'ACP_SHOUTBOX_SETTINGS_EXPLAIN'     => 'Qui puoi trovare la configurazione base per l’ajax shoutbox.',
	'ACP_SHOUTBOX_OVERVIEW'             => 'Info ajax shoutbox',

	// Overview
	'AS_OVERVIEW'			=> 'Info MOD',
	'AS_OVERVIEW_EXPLAIN'	=> 'Qui di seguito troverai alcune statistiche sull’Ajax Shoutbox.<br />
	Se trovi un bug, o desideri fare una richiesta visita <a href="http://www.paulsohier.nl/ajax">trac</a>.<br />
	Prima di fare la tua richiesta, verifica se il bug è già riportato. <br />
	Molte informazioni per lo Shoutbox, lo sviluppo e lo stato possono essere trovate presso il nostro Trac.<br />
	I permessi per lo Shoutbox possono essere trovati nella parte superiore della scheda, troverai anche i permessi per utenti o gruppi.',

	
	'AS_STATS'      => 'Statistiche Shoutbox',
	'NUMBER_SHOUTS' => 'Numero totale di messaggi',
	'AS_VERSION'    => 'Versione shoutbox',
	'AS_OPTIONS'    => 'Opzioni shoutbox',
	'PURGE_AS'      => 'Cancella tutti i messaggi',
	
	'UNABLE_CONNECT'    => 'Non è stato possibile connettersi al server per il controllo versione, è stato ricevuto il seguente errore: %s',
	'NEW_VERSION'       => 'La tua versione di ajax shoutbox non è aggiornata. La tua versione è %1$s, la nuova versione è %2$s. Leggi <a href="%3$s">qui</a> per altre informazioni.',
	
	
	// Configuration
	'AS_PRUNE_TIME'				=> 'Cancella tempo',
	'AS_PRUNE_TIME_EXPLAIN'		=> 'Il tempo in cui i messaggi vengono cancellati automaticamente. Quando la funzione massima dei messaggi è attiva, verrà sovrascritta questa configurazione. Seleziona 0 per disattivarla.',
	'AS_MAX_POSTS'				=> 'Massimo numero di messaggi',
	'AS_MAX_POSTS_EXPLAIN'		=> 'Numero massimo di messaggi. Seleziona 0 per disattivarlo. Se questa funzione è attiva verrà <strong>sovrascritta</strong> la configurazione!',
	
	'AS_FLOOD_INTERVAL'         => 'Intervallo tra utenti',
	'AS_FLOOD_INTERVAL_EXPLAIN' => 'Il tempo minimo tra 2 messaggi per utenti. Seleziona 0 per disattivarlo.',
	
	'AS_IE_NR'				=> 'Numero di messaggi',
	'AS_IE_NR_EXPLAIN'		=> 'Il numero di messaggi in internet explorer. A causa di alcuni bug di IE, è necessario configurarli.',
	'AS_NON_IE_NR'			=> 'Numero di messaggi',
	'AS_NON_IE_NR_EXPLAIN'	=> 'Il numero di messaggi in altro browser come IE.',
));
?>