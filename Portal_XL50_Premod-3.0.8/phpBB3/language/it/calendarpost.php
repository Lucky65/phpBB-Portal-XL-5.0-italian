<?php
/**
*
* calendar [Italian]
*
* @author alightner
*
* @package phpBB Calendar
* @version CVS/SVN: $Id: $
* @copyright (c) 2009 alightner
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/*** DO NOT CHANGE*/
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
	'ALL_DAY'					=> 'Tutti gli eventi di oggi',
	'ALLOW_GUESTS'				=> 'Tutti gli utenti che controllano questo evento',
	'ALLOW_GUESTS_ON'			=> 'Utenti a cui è permesso controllare gli ospiti di questo evento.',
	'ALLOW_GUESTS_OFF'			=> 'Utenti a cui non è permesso controllare gli ospiti di questo evento.',
	'AM'						=> 'AM',	
	'CALENDAR_POST_EVENT'		=> 'Crea nuovo evento',
	'CALENDAR_EDIT_EVENT'		=> 'Modifica evento',
	'CALENDAR_TITLE'			=> 'Calendario',
	'DELETE_EVENT'				=> 'Cancella evento',
	'DELETE_ALL_EVENTS'			=> 'Cancella tutti gli eventi',	
	'EMPTY_EVENT_MESSAGE'		=> 'Devi scrivere un messaggio quando inserisci un’evento.',
	'EMPTY_EVENT_SUBJECT'		=> 'Devi scrivere un’oggetto quando inserisci gli eventi.',
	'END_DATE'					=> 'Data fine',
	'END_RECURRING_EVENT_DATE'	=> 'Qual’è la fine di questo evento?',	
	'END_TIME'					=> 'Tempo fine',
	'EVENT_ACCESS_LEVEL'			=> 'Chi può vedere questo evento?',
	'EVENT_ACCESS_LEVEL_GROUP'		=> 'Gruppi',
	'EVENT_ACCESS_LEVEL_PERSONAL'	=> 'Personale',
	'EVENT_ACCESS_LEVEL_PUBLIC'		=> 'Pubblico',
	'EVENT_CREATED_BY'			=> 'Evento scritto da',
	'EVENT_DELETED'				=> 'Questo evento è stato cancellato.',
	'EVENT_EDITED'				=> 'Questo evento è stato modificato.',
	'EVENT_GROUP'				=> 'Quale gruppo può vedere questo evento?',
	'EVENT_STORED'				=> 'Questo evento è stato correttamente creato.',
	'EVENT_TYPE'				=> 'Tipo evento',
	'EVERYONE'					=> 'Tutti',
	'FREQUENCEY_LESS_THAN_1'	=> 'Gli eventi ricorrenti devono avere una frequenza maggiore o uguale a 1',
	'FROM_TIME'					=> 'Da',
	'INVITE_INFO'				=> 'Riservato a',
	'LOGIN_EXPLAIN_POST_EVENT'	=> 'Devi essere loggato per aggiungere/modificare/cancellare eventi.',
	'MESSAGE_BODY_EXPLAIN'		=> 'Scrivi il tuo messaggio qui, ricorda che non può contenere più di <strong>%d</strong> caratteri.',
	'NEGATIVE_LENGTH_EVENT'		=> 'L’evento non può terminare prima del suo inizio.',
	'NEW_EVENT'					=> 'Nuovo evento',
	'NO_EVENT'					=> 'L’evento richiesto non esiste.',
	'NO_EVENT_TYPES'			=> 'L’amministratore del sito non ha istituito tipologie di eventi per questo calendario.  Il calendario eventi è stato disabilitato.',
	'NO_GROUP_SELECTED'			=> 'Non risultano gruppi selezionati per questo evento.',
	'NO_POST_EVENT_MODE'		=> 'Nessuna modalità specificata.',
	'PM'						=> 'PM',
	'RECURRING_EVENT'			=> 'Evento ricorrente',
	'RECURRING_EVENT_TYPE'		=> 'Come dovrebbe essere calcolato il prossimo evento?',
	'RECURRING_EVENT_TYPE_EXPLAIN'	=> 'Suggerimento la scelta inizia con una lettera per indicare la frequenza: A - Annuale, M - Mensile, S - Settimanale, G - Giornaliero.',
	'RECURRING_EVENT_FREQ'		=> 'Quante volte questo evento dovrebbe verificarsi?',
	'RECURRING_EVENT_FREQ_EXPLAIN'	=> 'Questo valore è rappresentato da [Y] nella scelta di cui sopra',
	'RECURRING_EVENT_CASE_1'    => 'A: [X] Giorno di [nome mese] ogni [Y] Anno(i)',
	'RECURRING_EVENT_CASE_2'    => 'A: [X] [Nome giorni feriali] del [nome mese] ogni [Y] Anno(i)',
	'RECURRING_EVENT_CASE_3'    => 'A: [X] [Nome giorni feriali] dell’intera settimana nel [nome mese] ogni [Y] Anno(i)',
	'RECURRING_EVENT_CASE_4'    => 'A: [X] Dall’ultimo [Nome giorni feriali] del [nome mese] ogni [Y] Anno(i)',
	'RECURRING_EVENT_CASE_5'    => 'A: [X] Dall’ultimo [Nome giorni feriali] delle intere settimane nel [nome mese] ogni [Y] Anno(i)',
	'RECURRING_EVENT_CASE_6'    => 'M: [X] Giorno del mese ogni [Y] mese(i)',
	'RECURRING_EVENT_CASE_7'    => 'M: [X] [Nome giorni feriali] del mese ogni [Y] mese(i)',
	'RECURRING_EVENT_CASE_8'    => 'M: [X] [Nome giorni feriali] delle intere settimane nel mese ogni [Y] mese(i)',
	'RECURRING_EVENT_CASE_9'    => 'M: [X] Dall’ultimo [Nome giorni feriali] del mese ogni [Y] mese(i)',
	'RECURRING_EVENT_CASE_10'    => 'M: [X] Dall’ultimo [Nome giorni feriali] delle intere settimane nel mese ogni [Y] mese(i)',
	'RECURRING_EVENT_CASE_11'    => 'S: [Nome giorni feriali] ogni [Y] settimana',
	'RECURRING_EVENT_CASE_12'    => 'G: Ogni [Y] giorno(i)',

	'RETURN_CALENDAR'			=> '%sTorna al calendario%s',
	'START_DATE'				=> 'Data inizio',
	'START_TIME'				=> 'Tempo inizio',
	'TO_TIME'					=> 'A',
	'TRACK_RSVPS'				=> 'Monitoraggio ricorrenti',
	'TRACK_RSVPS_ON'			=> 'Monitoraggio ricorrenti è attivato.',
	'TRACK_RSVPS_OFF'			=> 'Monitoraggio ricorrenti non è attivato.',	
	'USER_CANNOT_DELETE_EVENT'	=> 'Non hai i permessi per cancellare gli eventi.',
	'USER_CANNOT_EDIT_EVENT'	=> 'Non hai i permessi per modificare gli eventi.',
	'USER_CANNOT_POST_EVENT'	=> 'Non hai i permessi per creare gli eventi.',
	'USER_CANNOT_VIEW_EVENT'	=> 'Non hai i permessi per leggere gli eventi.',
	'VIEW_EVENT'				=> '%sGuarda l’evento inviato%s',
	'WEEK'						=> 'Settimana',
	'ZERO_LENGTH_EVENT'			=> 'L’evento non può finire nello stesso tempo di inizio.',
));

?>