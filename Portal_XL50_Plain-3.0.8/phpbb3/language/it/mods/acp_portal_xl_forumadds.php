<?php
/** 
*
* @name acp_portal_xl_forumadds.php [Italian]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_forumadds.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
*
* @copyright (c) 2007, 2009  Portal XL Group
* @copyright (c) 2009, 2010 luckylab.eu - upgrade translation for portal xl on 2010/08/09
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
	'TITLE' 				=> 'Gestione pubblicità forum',
	'TITLE_EXPLAIN'			=> 'Qui puoi gestire i piani pubblicitari del forum. Puoi aggiungere molti banners, e puoi vederli nei messaggi del forum, in tutti i nuovi messaggi e visualizzarli in modo casuale.',

	'NEED_VALUES'  			=> 'Devi compilare tutti i <strong>campi</strong> per procedere.',
	'ADDED'  				=> 'Il piano pubblicitario è stata aggiunta nel database!',
	'UPDATED'  				=> 'Il piano pubblicitario è stato aggiornato.',
	'DELETED' 	 			=> 'Il piano pubblicitario è stato cancellato dal database!',
	'REALY_DELETE'  		=> 'Sei sicuro di voler cancellare questo piano pubblicitario?',
	'MUST_SELECT_ADDS'		=> 'Selected adds',
	
	'ADDS'  				=> 'Pubblicità',
	'NEW_AD' 				=> 'Aggiungi piano pubblicitario',
	'ADDS_NAME' 			=> 'Nome',
	'ADDS_NAME_DESC' 		=> 'Nome del piano pubblicitario.',
	'ADDS_CODE' 			=> 'Aggiungi contenuto',
	'ADDS_CODE_DESC' 		=> 'Contenuto per l’uso del piano pubblicitario',
	'ADDS_FORUMS' 			=> 'ID Forum',
	'ADDS_FORUMS_DESC' 		=> 'Scrivi l’ID del forum o dei forums che vuoi pubblicizzare, ogni forum deve essere separato da una virgola.',
	'ADDS_FORUMS_DESCALL' 	=> 'Vuoi mostrarlo in tutti i forums?',
	'ADDS_ACTIVE' 			=> 'Visibilità',
	'ADDS_ACTIVE_DESC' 		=> 'Voi mostrare la pubblicità? ',
	'YES' 					=> 'Si',
	'NO' 					=> 'No',
	'GUEST' 				=> 'Ospite',
	'ADDS_VIEWS' 			=> 'Totale visite',
	'ADDS_ALL' 				=> 'Tutti i forums',
	'ADDS_SHOW' 			=> 'Nei forums',
	'ADDS_VIEWS_DESC' 		=> 'Il totale delle visite per questa campagna',
	'ADDS_MAX_VIEWS' 		=> 'Visualizzazioni',
	'ADDS_MAX_VIEWS_DESC' 	=> 'Quante visualizzazioni vuoi per questa campagna',
	'POSITION' 				=> 'Posizione',
	'POSITION_DESC' 		=> 'In quale posizione vuoi visualizzare questa campagna? ',
	'POSITION1' 			=> 'Dopo il primo messaggio',
	'POSITION2' 			=> 'Dopo ogni messaggio',
	'POSITION3' 			=> 'Prima di ogni messaggio',
	'POSITION4' 			=> 'Sotto ogni messaggio',
	'ADDS_IN_SYSTEM' 		=> 'Aggiunto/i nel database',
	'ADDS_IN_SYSTEM_DESC' 	=> 'Un elenco di piani pubblicitari esiste già',
	'SHOW_IN_ALL_FORUMS' 	=> 'Vuoi visualizzarla in tutti i forums?',
	'ADD_ADVERTISEMENT'		=> 'Aggiungi una campagna',
	'RESET_ADDS'			=> 'Annulla',
	'ADD_ADDS'				=> 'Aggiungi campagna',

	));

?>