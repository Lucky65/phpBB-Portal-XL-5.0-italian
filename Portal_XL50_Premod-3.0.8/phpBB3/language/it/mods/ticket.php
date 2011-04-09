<?php
/**
* //SupportTicket System
* ticket [Italian]
*
* @package language
* @version $Id: ticket.php 1 2008-03-19 14:31:04Z nickvergessen $
* @copyright (c) 2008 Mahony; 2008 Mahony
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/13
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Deutsche Übersetzung durch Mahony
* 
*
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
// ’ » „ “ — …
//
//
$lang = array_merge($lang, array(
	'STS_SUPPORT_TICKET'			=> 'Sistema supporto ticket',

	'STS_ERRMESSAGE'				=> 'Non hai inserito un titolo per il tuo messaggio. Premi il pulsante indietro del tuo browser per correggere!',
	'STS_PHPBBVERSION'				=> 'La tua versione phpBB:',
	'STS_PHPBBTYPE'					=> 'Il tipo di phpBB:',
	'STS_STANDARD'					=> 'phpBB standard (phpBB3)',
	'STS_PREMOD'					=> 'Portal XL Plain',
	'STS_ANDDIST'					=> 'Portal XL Premod',
	'STS_MODS'						=> 'Hai MOD (Modifiche) installate sul tuo forum?',
	'STS_MODS_SHORT'				=> 'MOD installati:',
	'STS_YES'						=> 'Si',
	'STS_NO'						=> 'No',
	'STS_KNOWLEDGE'					=> 'La tua conoscenza:',
	'STS_BEGINNER'					=> 'Iniziale',

	'STS_BASICKNOW'					=> 'Base',
	'STS_EXTENDED'					=> 'Avanzata',
	'STS_PROFI'						=> 'Professionale',
	'STS_BEFOREERR'					=> 'Che cosa hai fatto prima che si è presentato il problema?',

	'STS_BOARDLINK'					=> 'Link forum:',
	'STS_SELFSOLUTION'				=> 'Come hai provato a risolvere il problema?',
	'STS_PHPVER'					=> 'Versione PHP:',
	'STS_SQLVER'					=> 'Versione MySQL:',
	'STS_HEAD_MSG'					=> 'Descrizione e messaggio',

	'STS_OPTIONAL'					=> 'non richiesto',
	'STS_HEAD'						=> 'Questo è un sistema di supporto, affinchè possiamo aiutarti in modo corretto, compila tutti i campi, cerca di essere preciso. Solo con queste informazioni è possibile aiutarti!',
));
//SupportTicket System

?>