<?php
/** 
*
* acp_announcements_centre [Italian]
*
* @package language
* @version $Id: announcement_centre.php 111 2008-07-15 18:49:37Z lefty74 $ 
* @copyright (c) 2007 lefty74
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}


/**
* DO NOT CHANGE
*/
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

// Announcement  settings
$lang = array_merge($lang, array(
	'TITLE'									=> 'ACP Annunci',
	'TITLE_EXPLAIN'							=> 'Con questo modulo puoi scrivere gli annunci per il tuo sito. Puoi scegliere chi deve vedere gli annunci, infatti è anche possibile avere annunci alternativi per gli ospiti.',
	'ANNOUNCEMENTS'							=> 'Configuurazione annunnci',
	'ANNOUNCEMENT_ENABLE'					=> 'Visualizza annunci',
	'ANNOUNCEMENT_SHOW'						=> 'Visualizza annunci in',
	'ANNOUNCEMENT_SHOW_INDEX'				=> 'Visualizza annunci solo nell’indice della pagina',
	'ANNOUNCEMENT_SHOW_BIRTHDAYS'			=> 'Vuoi visualizzare annunci di compleanni',
	'ANNOUNCEMENT_SHOW_BIRTHDAYS_EXPLAIN'	=> 'Vuoi visualizzare gli attuali compleanni (se sono abilitati) come annunci (ha la priorità agli annunci di testo nel sito)',
	'ANNOUNCEMENT_SHOW_GROUP'				=> 'Scegli gruppo(i) che dovrebbe visualizzare l’annuncio',
	'ANNOUNCEMENT_SHOW_GROUP_EXPLAIN'		=> 'Applicabile solo se forum è diviso in gruppi',
	'ANNOUNCEMENT_BIRTHDAY_AVATAR'			=> 'Vuoi visualizzare gli avatars negli annunci di compleanno',
	'ANNOUNCEMENT_BIRTHDAY_AVATAR_EXPLAIN'	=> 'Mostra anche l’avatar dell’utente',
	'ANNOUNCEMENT_DRAFT_PREVIEW'			=> 'Anteprima annuncio',
	'ANNOUNCEMENT_TITLE'					=> 'Titolo annuncio',
	'ANNOUNCEMENT_TITLE_EXPLAIN'			=> 'Personalizza il titolo del blocco annunci qui <br/>Lascia in bianco per usare il linguaggio predefinito disponibile',
	'ANNOUNCEMENT_DRAFT'					=> 'Crea Annuncio',
	'ANNOUNCEMENT_DRAFT_EXPLAIN'			=> 'Crea qui il testo del tuo annuncio',
	'ANNOUNCEMENT_TEXT'						=> 'Testo annuncio',
	'ANNOUNCEMENT_TEXT_EXPLAIN'				=> 'Crea qui il testo del tuo annuncio',
	'ANNOUNCEMENT_ENABLE_GUESTS'			=> 'Visualizza annuncio diverso per gli ospiti',
	'ANNOUNCEMENT_ENABLE_GUESTS_EXPLAIN'	=> 'Visualizza annuncio diverso per gli ospiti eccetto quando il blocco annunci è configurati ad essere visualizzati da tutti',
	'ANNOUNCEMENT_TITLE_GUESTS'				=> 'Titolo annuncio ospiti',
	'ANNOUNCEMENT_TITLE_GUESTS_EXPLAIN'		=> 'Personalizza il titolo del blocco annunci qui <br/>Lascia in bianco per usare il linguaggio predefinito disponibile',
	'ANNOUNCEMENT_TEXT_GUESTS'				=> 'Testo annunci ospiti',
	'ANNOUNCEMENT_TEXT_GUESTS_EXPLAIN'		=> 'Scrivi qui il testo annuncio per gli ospiti',
	'ACP_ANNOUNCEMENTS_CENTRE'				=> 'Centro annunci',

	'COPY_TO_ANNOUNCEMENT_SHORT'			=> 'Copia testo',
	'COPY_TO_GUEST_ANNOUNCEMENT_SHORT'		=> 'Copia testo',
	'COPY_TO_ANNOUNCEMENT'					=> 'Copia nel testo annuncio',
	'COPY_TO_GUEST_ANNOUNCEMENT'			=> 'Copia nel testo annuncio ospiti',

	'YES'			=> 'Si',
	'NO'			=> 'No',
	'GUESTS'		=> 'Ospiti',
	'EVERYONE'		=> 'Tutti',
	'GROUPS'		=> 'Gruppi',
));

?>