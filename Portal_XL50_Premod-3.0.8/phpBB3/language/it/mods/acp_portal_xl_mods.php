<?php
/** 
*
* @name acp_portal_xl_mods.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_mods.php,v 1.1.1.1 2009/05/15 05:15:57 damysterious Exp $
* @copyright (c) 2007, 2009  Portal XL Group
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
	'TITLE' 					=> 'Gestione database Mods',
	'TITLE_EXPLAIN'				=> 'Da questo modulo puoi gestire le Mods del database, creare/modificare/cancellare.',
 
	'PORTAL_MOD_EDIT_HEADER'	=> 'Aggiungi o modifica una mod',
	'ACP_MANAGE_MOD'			=> 'Aggiungi o modifica mods',
	'ACP_MOD_EXPLAIN'			=> 'Gestione Mods',
	'ADD_MOD'					=> 'Aggiungi mod',
	'DISABLE'					=> '<b>Blocco abilitato</b>',
	'DISABLE_BLOCK'				=> 'Abilita',
	'ENABLE'					=> '<b>Blocco disabilitato</b>',
	'ENABLE_BLOCK'				=> 'Disabilita',
	'MUST_SELECT_MOD'			=> 'Seleziona mod',
	'MOD'						=> 'Mods nel database',
	'MOD_INFO'					=> 'Mod',
	'MOD_EXPLAIN'				=> 'Tsto per il tuo Mod',
	'MOD_ADDED'					=> 'Mod aggiunta',
	'MOD_DISABLE'				=> '<b>Abilita</b>',
	'MOD_DISABLE_EXPLAIN'		=> '<b>Abilita :</b><br>Blocco visualizzato nel forum.',
	'MOD_DISABLE_EXPLAIN2'		=> 'Puoi abilitare o disabilitare la visualizzazione del blocco nel forum : ',
	'MOD_REMOVED'				=> 'Mod eliminato',
	'MOD_UPDATED'				=> 'Mod modificato',
	'RESET_MOD' 				=> 'Annulla',
	'MOD_EDIT'					=> 'Modifica Mod',
	'MOD_EDIT_EXPLAIN'			=> 'Qui puoi aggiungere o modificare una Mod esistente. Il titolo e la versione sono necessari. Devi anche aggiungere i dettagli del Mod, dove può essere scaricato, o dove è possibile trovarlo.',
	'MOD_TITLE'					=> 'Titolo Mod',
	'MOD_TITLE_EXPLAIN'			=> 'Titolo breve del Mod.',
	'MOD_VERSION'				=> 'Versione',
	'MOD_VERSION_EXPLAIN'		=> 'Numero versione es. 0.4B5',
	'MOD_VERSION_TYPE'			=> 'Tipo versione',
	'MOD_VERSION_TYPE_EXPLAIN'	=> 'Alpha, Beta, Dev or RC*',
	'MOD_DESC'					=> 'Descrizione',
	'MOD_DESC_EXPLAIN'			=> 'Descrizione del tuo Mod. Una chiara descrizione della mod e della sua installazione.',
	'MOD_AUTHOR'				=> 'Autore',
	'MOD_AUTHOR_EXPLAIN'		=> 'Nome dell’autore originale se conosciuto, sconosciuto se non sai chi sia.',
	'MOD_URL'					=> 'URL',
	'MOD_URL_EXPLAIN'			=> 'Specifica un sito URL (link al mod -descrizione o -argomento).',
	'MOD_DOWNLOAD'				=> 'Download',
	'MOD_DOWNLOAD_EXPLAIN'		=> 'Specifica un URL per il download (link diretto per il download).',

));

?>