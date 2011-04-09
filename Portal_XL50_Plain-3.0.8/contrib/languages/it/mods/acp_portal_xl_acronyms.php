<?php
/** 
*
* @name acp_portal_xl_acronyms.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_acronyms.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
	'TITLE' 					=> 'Gestione acronimi e abbrevazioni',
	'TITLE_EXPLAIN'				=> 'Puoi creare/modificare/cancellare acronimi. Gli acronimi sono delle abbrevazioni, come <strong>NATO</strong>, <strong>laser</strong>, e <strong>IBM</strong>, che sono formati dalle iniziali delle lettere, parole o parti di parole in una frase o nel nome. Acronimi ed iniziali vengono pronunciate come distinte in una piena forma per la quale esse sono: come i nomi delle singole lettere (come in <em><strong>IBM</strong></em>), come (<em><strong>NATO</strong></em>), o come una (combinazione <em><strong>IUPAC</strong></em>). Puoi aggiungere molti acronimi come meglio credi.',
 
	'PORTAL_ACRONYMS_EDIT_HEADER'	=> 'Aggiungi o modifica acronimi',
	'ACP_MANAGE_ACRONYM'			=> 'Aggiungi o modifica acronimi',
	'ACP_ACRONYM_EXPLAIN'			=> 'Gestione acronimi',
	'ADD_ACRONYM'					=> 'Aggiungi acronimo',
	'DESCRIPTION'					=> 'Acronimo',
	'DESCRIPTION_INFO'				=> 'Frase acronimo',
	'DESCRIPTION_EXPLAIN'			=> 'Descrizione o significato dell’acronimo.',
	'MUST_SELECT_ACRONYM'			=> 'Seleziona acronimo',
	'ACRONYM'						=> 'Acronimi nel database',
	'ACRONYM_INFO'					=> 'Acronimo',
	'ACRONYM_EXPLAIN'				=> 'Lettere iniziali della parola o parti della parola acronimo',
	'ACRONYM_ADDED'					=> 'Acronimo aggiunto',
	'ACRONYM_DISABLE_EXPLAIN2'		=> 'Puoi abiliate o disabilitare la visualizzazione del blocco nel forum : ',
	'ACRONYM_REMOVED'				=> 'Acronimo eliminato',
	'ACRONYM_UPDATED'				=> 'Acronimo modificato',
	'RESET_ACRONYM' 				=> 'Annulla',
	'BLOCK_ACRONYM_SETTINGS'		=> 'Configurazione generale acronimi',
	'ACRONYM_ALLOW'					=> 'Abilita acronimi?',
	'ACRONYM_ACTIVE'				=> 'Abilita acronimi',
	'ACRONYM_ACTIVE_EXPLAIN'		=> 'Vuoi attivare acronimi SI/No?',
	'ACRONYM_URL'					=> 'Url sito',
	'ACRONYM_URL_INFO'					=> 'Url sito',
	'ACRONYM_URL_EXPLAIN'					=> 'Il sito dell’autore',

));

?>