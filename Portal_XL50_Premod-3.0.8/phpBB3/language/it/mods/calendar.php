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

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
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
    '12_HOURS'								=> '12 ore',
    '24_HOURS'								=> '24 ore',
    'AUTO_POPULATE_EVENT_FREQUENCY'			=> 'Popolazione automatica eventi ricorrenti',
    'AUTO_POPULATE_EVENT_FREQUENCY_EXPLAIN'	=> 'Quante volte (in giorni) dovrebbe essere popolati gli eventi ricorrenti nel calendario?  Nota se selezioni 0, gli eventi ricorrenti non saranno mai aggiunti nel calendario.',
    'AUTO_POPULATE_EVENT_LIMIT'				=> 'Limite popolazione automatica',
    'AUTO_POPULATE_EVENT_LIMIT_EXPLAIN'		=> 'Quanti giorni in anticipo devono essere popolati gli eventi ricorrenti?  In altre parole, vuoi solo vedere gli eventi ricorrenti nel calendario per il 30, 45, o più giorni prima dell’evento?',
    'AUTO_PRUNE_EVENT_FREQUENCY'			=> 'Cancellazione automatica eventi passati',
    'AUTO_PRUNE_EVENT_FREQUENCY_EXPLAIN'	=> 'Quanto spesso (in giorni) eventi del passato devono essere cancellati dal calendario?  Nota se selezioni 0, gli eeventi del pssato non saranno cancellati automaticamente, dovranno essere cancellati manualmente.',
    'AUTO_PRUNE_EVENT_LIMIT'				=> 'Cancellazione automatica limiti',
    'AUTO_PRUNE_EVENT_LIMIT_EXPLAIN'		=> 'Quanti giorni per aggiungere l’evento alla prossima cancellazione automatica?  In altre parole, desideri che tutti gli eventi restano nel calendario per 0, 30, o 45 giorni dopo l’evento?',
    'CALENDAR_ETYPE_NAME'					=> 'Nome evento',
    'CALENDAR_ETYPE_COLOR'					=> 'Colore evento',
    'CALENDAR_ETYPE_ICON'					=> 'URL icona evento',
    'CALENDAR_SETTINGS_EXPLAIN'				=> 'Aggiungi qui la configurazione del tuo calendario.',
    'CHANGE_EVENTS_TO'						=> 'Cambia tutti gli eventi di questo tipo a',
    'CLICK_PLUS_HOUR'						=> 'Sposta tutti gli eventi di un ora',
    'CLICK_PLUS_HOUR_EXPLAIN'				=> 'Puoi spostare tutti gli eventi del calendario +/- di un ora, può essere utile quando si reimposta l’ora solare. Nota: cliccando sui link per spostare gli eventi perderai tutte le modifiche precedenti. Salva il lavoro prima di spostare gli eventi  a +/- di un ora.',	
    'COLOR'									=> 'Colore',
    'CREATE_EVENT_TYPE'						=> 'Crea nuovo evento',
    'DATE_FORMAT'							=> 'Formato data',
    'DATE_FORMAT_EXPLAIN'					=> 'Prova &quot;d M Y&quot;',
    'DATE_TIME_FORMAT'						=> 'Formato data e ora',
    'DATE_TIME_FORMAT_EXPLAIN'				=> 'Prova &quot;d M Y h:i a&quot; o &quot;d M Y H:i&quot;',
    'DELETE'								=> 'Cancella',
    'DELETE_ALL_EVENTS'						=> 'Cancella tutti gli eventi esistenti di questo tipo',
    'DELETE_ETYPE'							=> 'Cancella tipo evento',
    'DELETE_ETYPE_EXPLAIN'					=> 'Sei sicuro di voler cancellare questo tipo di evento?',
    'DELETE_LAST_EVENT_TYPE'				=> 'Attenzione: questo è l’ultimo evento.',
    'DELETE_LAST_EVENT_TYPE_EXPLAIN'		=> 'Con l’eliminazione di questo tipo di evento verranno eliminati tutti gli eventi dal calendario.  La creazione di nuovi eventi è disattivata finchè non saranno create nuove tipologie di eventi.',
    'DISPLAY_12_OR_24_HOURS'				=> 'Visualizza formato ora',
    'DISPLAY_12_OR_24_HOURS_EXPLAIN'		=> 'Vuoi visualizzare l’ora nel formato di 12 ore con AM/PM o nel formato di 24 ore?  Non influisce sul formato dell’ora visualizzato dagli utenti - questo è configurato nel loro profilo. Ha solo effetto nel menu a tendina per la selezione, nel momento della creazione / modifica di eventi e le voci sulla vista giorni del calendario.',
    'DISPLAY_HIDDEN_GROUPS'					=> 'Visualizza gruppi nascosti',
    'DISPLAY_HIDDEN_GROUPS_EXPLAIN'			=> 'Preferisci che gli utenti siano in grado di vedere e di invitare i membri del gruppo nascosto?  Se questa impostazione è disattivata, solo il gruppo di amministratori sarà in grado di vedere e di invitare i membri del gruppo nascosto.',
    'DISPLAY_NAME'							=> 'Titolo visualizzato (può essere NULL)',
    'DISPLAY_EVENTS_ONLY_1_DAY'				=> 'Visualizza eventi per 1 giorno',
    'DISPLAY_EVENTS_ONLY_1_DAY_EXPLAIN'		=> 'Visualizza eventi solo per 1 giorno (ignora date/tempo).',
    'DISPLAY_FIRST_WEEK'					=> 'Visualizza attuale settimana',
    'DISPLAY_FIRST_WEEK_EXPLAIN'			=> 'Vuoi avere la settimana corrente visualizzata nell’indice del forum?',
    'DISPLAY_NEXT_EVENTS'					=> 'Visualizza eventi futuri',
    'DISPLAY_NEXT_EVENTS_EXPLAIN'			=> 'Specifica il numero di eventi che vuoi siano elencati nell’indice della pagina.  Nota questa opzione ignorala se hai attivato l’opzione per visualizzare la settimana in corso.',
    'DISPLAY_TRUNCATED_SUBJECT'				=> 'Tronca oggetto',
    'DISPLAY_TRUNCATED_SUBJECT_EXPLAIN'		=> 'Un nome lungo nell’oggetto occupa molto spazio sul calendario.  Quanti caratteri vuoi visualizzare nell’oggetto del calendario? (scrivi 0 se non vuoi troncare l’oggetto)',
    'EDIT'									=> 'Modifica',
    'EDIT_ETYPE'							=> 'Modifica evento',
    'EDIT_ETYPE_EXPLAIN'					=> 'Specifica il modo in cui vuoi visualizzare l’evento sul calendario.',
    'FIRST_DAY'								=> 'Primo giorno',
    'FIRST_DAY_EXPLAIN'						=> 'Quale giorno dovrebbe essere visualizzato come il primo giorno della settimana?',
	'FULL_NAME'								=> 'Tipo evento',
    'FRIDAY'								=> 'Venerdi',
    'ICON_URL'								=> 'URL per icona',
    'MANAGE_ETYPES'							=> 'Gestione eventi',
    'MINUS_HOUR'							=> 'Modifica tutti gli eventi a meno (-) di un ora',    
	'MANAGE_ETYPES_EXPLAIN'					=> 'Gli eventi vengono utilizzati per aiutare ad organizzare il calendario, è possibile aggiungere, modificare, eliminare o riordinare le tipologie di eventi.',
    'MONDAY'								=> 'Lunedi',
     'NO_EVENT_TYPE_ERROR'					=> 'Impossibile trovare il tipo di evento specificato.',
    'PLUS_HOUR'								=> 'Modifica tutti gli eventi a più (+) di un ora',
    'PLUS_HOUR_CONFIRM'						=> 'Sei sicuro di voler modificare tutti gli eventi di %1$s ora?',
    'PLUS_HOUR_SUCCESS'						=> 'Tutti gli eventi spostati di %1$s ora.',
    'SATURDAY'								=> 'Sabato',
    'SUNDAY'								=> 'Domenica',
    'TIME_FORMAT'							=> 'Fuso orario',
    'TIME_FORMAT_EXPLAIN'					=> 'Prova &quot;h:i a&quot; o &quot;H:i&quot;',
    'THURSDAY'								=> 'Giovedi',
    'TUESDAY'								=> 'Martedi',
    'USER_CANNOT_MANAGE_CALENDAR'			=> 'Non hai i permessi per gestire il calendario eventi.',
    'WEDNESDAY'								=> 'Mercoledi',

));

?>
