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
	'ALL_DAY'				=> 'Tutti gli eventi di oggi',
	'AM'					=> 'AM',
	'CALENDAR_TITLE'		=> 'Calendario',
	'CALENDAR_NUMBER_ATTEND'=> 'Il numero di persone che controlla questo evento',
	'CALENDAR_NUMBER_ATTEND_EXPLAIN'=> '(1 per tipo)',
	'CALENDAR_RESPOND'		=> 'Registrati qui',
	'CALENDAR_WILL_ATTEND'	=> 'Vuoi partecipare a questo evento?',
	'COL_HEADCOUNT'			=> 'Conta',
	'COL_WILL_ATTEND'		=> 'Sarai presente?',
	'COMMENTS'				=> 'Commenti',
	'DAY'					=> 'Giorno',
    'DAY_OF'                => 'Vista giorno ',	
	'DELETE_ALL_EVENTS'		=> 'Cancella tutte le occorrenze di questo evento.',
	'DETAILS'				=> 'Dettagli',
	'EDIT'					=> 'Modifica',
	'EDIT_ALL_EVENTS'		=> 'Modifica tutte le occorrenze di questo evento.',
	'EVENT_CREATED_BY'		=> 'Evento scritto da',
	'EVERYONE'				=> 'Tutti',
	'FROM_TIME'				=> 'da',
	'HOW_MANY_PEOPLE'		=> 'Conteggio rapido',
	'INVALID_EVENT'			=> 'L’evento che vuoi visualizzare non esiste.',
	'INVITE_INFO'			=> 'Riservato a',
	'OCCURS_EVERY'			=> 'Si verifica ogni',	
	'RECURRING_EVENT_CASE_1_STR'    => '%1$s Giorno di %4$s - ogni %5$s Anno(i)',
	'RECURRING_EVENT_CASE_2_STR'    => '%3$s %2$s of %4$s - ogni %5$s Anno(i)',
	'RECURRING_EVENT_CASE_3_STR'    => '%3$s %2$s di settimane a pieno titolo %4$s - ogni %5$s Anno(i)',
	'RECURRING_EVENT_CASE_3b_STR'    => '%2$s prima settimana parziale di %4$s - ogni %5$s Anno(i)',
	'RECURRING_EVENT_CASE_4_STR'    => '%3$s da ultimo %2$s di %4$s - ogni %5$s Anno(i)',
	'RECURRING_EVENT_CASE_5_STR'    => '%3$s da ultimo %2$s di settimane  %4$s - ogni %5$s Anno(i)',
	'RECURRING_EVENT_CASE_5b_STR'    => '%2$s delle ultime settimane %4$s - ogni %5$s Anno(i)',
	'RECURRING_EVENT_CASE_6_STR'    => '%1$s Giorno del mese - ogni %5$s Mese(i)',
	'RECURRING_EVENT_CASE_7_STR'    => '%3$s %2$s del mese - ogni %5$s Mese(i)',
	'RECURRING_EVENT_CASE_8_STR'    => '%3$s %2$s di un’intera settimana nel mese - ogni %5$s Mese(i)',
	'RECURRING_EVENT_CASE_8b_STR'    => '%2$s della prima settimana parziale nel mese - ogni %5$s Mese(i)',
	'RECURRING_EVENT_CASE_9_STR'    => '%3$s dall’ultima %2$s del mese - ogni %5$s Mese(i)',
	'RECURRING_EVENT_CASE_10_STR'    => '%3$s dall’ultima %2$s di settimana in pieno mese - ogni %5$s Mese(i)',
	'RECURRING_EVENT_CASE_10b_STR'    => '%2$s dell’ultima parziale settimana nel mese - ogni %5$s Mese(i)',
	'RECURRING_EVENT_CASE_11_STR'    => '%2$s - ogni %5$s Settimana(e)',
	'RECURRING_EVENT_CASE_12_STR'    => 'Ogni %5$s Giorno(i)',
	'LOCAL_DATE_FORMAT'		=> '%1$s %2$s, %3$s',
	'MAYBE'					=> 'Probabile',
	'MONTH'					=> 'Mese',
	'MONTH_OF'				=> 'Mese di ',
	'MY_EVENTS'				=> 'Miei eventi',
	'NEW_EVENT'				=> 'Nuovo evento',
	'NO_EVENTS_TODAY'		=> 'Non risultano eventi programmati per questo giorno.',
	'PAGE_TITLE'			=> 'Calendario',
	'PRIVATE_EVENT'			=> 'Questo evento è privato.  Devi essere stato invitato e loggato per vedere questo evento.',
	'TO_TIME'				=> 'A',
	'UPCOMING_EVENTS'		=> 'Altri Eventi',
	'USER_CANNOT_VIEW_EVENT'=> 'Non hai i permessi per vedere questo evento.',
	'WATCH_CALENDAR_TURN_ON'	=> 'Guarda il calendario',
	'WATCH_CALENDAR_TURN_OFF'	=> 'Ferma la visione del calendario',
	'WATCH_EVENT_TURN_ON'	=> 'Guarda questo evento',
	'WATCH_EVENT_TURN_OFF'	=> 'Ferma la visione di questo evento',
	'WEEK'					=> 'Settimana',
	'WEEK_OF'				=> 'Settimana di ',
	'ZEROTH_FROM'			=> '0 da ',
	// Portal XL additions
   'CAL_AM'            => 'AM',
   'CAL_PM'            => 'PM',
    'VIEW_PREVIOUS_MONTH'   => 'Vedi i mesi precedenti',
    'VIEW_NEXT_MONTH'       => 'Vedi i mesi successivi',
    'NO_EVENT'            => 'Non esiste nessun evento.',
	'numbertext'			=> array(
		'0'		=> '0',
		'1'		=> '1',
		'2'		=> '2',
		'3'		=> '3',
		'4'		=> '4',
		'5'		=> '5',
		'6'		=> '6',
		'7'		=> '7',
		'8'		=> '8',
		'9'		=> '9',
		'10'	=> '10',
		'11'	=> '11',
		'12'	=> '12',
		'13'	=> '13',
		'14'	=> '14',
		'15'	=> '15',
		'16'	=> '16',
		'17'	=> '17',
		'18'	=> '18',
		'19'	=> '19',
		'20'	=> '20',
		'21'	=> '21',
		'22'	=> '22',
		'23'	=> '23',
		'24'	=> '24',
		'25'	=> '25',
		'26'	=> '26',
		'27'	=> '27',
		'28'	=> '28',
		'29'	=> '29',
		'30'	=> '30',
		'31'	=> '31',
		'n'		=> 'ennesimo' ),
));

// Portal XL additions
$lang = array_merge($lang, array(
		'CAL_AM'            	=> 'AM',
		'CAL_PM'            	=> 'PM',
		'VIEW_PREVIOUS_MONTH'   => 'Vedi mesi precedenti',
		'VIEW_NEXT_MONTH'       => 'Vedi mesi successivi',
		'NO_EVENT'           	=> 'Non esiste nessun evento.',
));

?>