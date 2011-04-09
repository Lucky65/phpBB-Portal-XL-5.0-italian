<?php
/**
*
* dm_video [Italian] 
*
* @package language
* @version $Id: dm_video.php 225 2009-12-22 13:52:33Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
* @copyright (c) 2010 luckylab.eu - translated for portal xl on 2010/05/23
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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

$lang = array_merge($lang, array(
	'DMV_ACTION'				=> 'Azione',
	'DMV_ADD_VIDEO'				=> 'Aggiungi un nuovo video',
	'DMV_ADDED'					=> 'Il tuo video è stato aggiunto con successo.<br />Ma prima di vederlo è necessario che sia approvato da un’amministratore',
	'DMV_ADDED_ADMIN'			=> 'Il tuo video è stato aggiunto.',
	'DMV_ALL_VIDEOS'			=> 'Mostra tutti i video',
	'DMV_ALL_VIDEOS_LIST'		=> 'Tutti i video',
	'DMV_ANNOUNCE_TITLE'		=> '[Video] %1$s',
	'DMV_ANNOUNCE_MSG'			=> 'Ciao,

è stato aggiunto un nuovo video!

Titolo: <strong>%1$s</strong>
Autore: <strong>%2$s</strong>
Durata: <strong>%3$s</strong>

<strong>Clicca %4$s per guardare il video!</strong>

Buon divertimento!',
	'DMV_AUTHOR'				=> 'Aggiunto da',
	'DMV_BACK'					=> 'Torna all’indice',
	'DMV_BACK_LINK'				=> '<br /><br />Clicca %squi%s per tornare all’ultima categoria',
	'DMV_BACK_LINK_COMMENT'		=> '<br /><br />Clicca %squi%s per tornare agli ultimi commenti',
	'DMV_BACK_LINK2'			=> '<br /><br />Torna alla lista delle categorie',
	'DMV_BACK_LINK3'			=> '<br /><br />Clicca %squi%s per tornare',
	'DMV_BACK_LINK4'			=> '<br /><br />Clicca %squi%s per tornare all’indice',
	'DMV_BACK_VIDEO'			=> '%sTorna all’indice dei video%s',
	'DMV_CAT_NAME'				=> 'Categorie',
	'DMV_CAT_NAME1'				=> 'Categoria',
	'DMV_CLICK'					=> 'qui',
	'DMV_COMMENT'				=> 'Commenti',
	'DMV_COMMENT_ADD'			=> 'Aggiungi un commento',
	'DMV_COMMENT_ADDED'			=> 'Il tuo commento è stato aggiunto',
	'DMV_COMMENT_DEL'			=> 'Cancella commento',
	'DMV_COMMENT_DEL_CONFIRM'	=> 'Sei sicuro di voler cancellare il tuo commento?',
	'DMV_COMMENT_DELETED'		=> 'Il tuo commento è stato cancellato',
	'DMV_COMMENT_EDIT'			=> 'Modifica commento',
	'DMV_COMMENT_EDITED'		=> 'Il tuo commento è stato aggiornato',
	'DMV_COMMENT_EXPLAIN'		=> 'Puoi lasciare un breve commento per questo video!',
	'DMV_COMMENT_MULTI'			=> '%d commenti',
	'DMV_COMMENT_NEEDED'		=> 'Devi aggiungere un commento!',
	'DMV_COMMENT_NEW'			=> 'Nuovo commento',
	'DMV_COMMENT_NO_CC'			=> 'Nessun commento',
	'DMV_COMMENT_NONE'			=> 'Non risultano commenti per questo video.',
	'DMV_COMMENT_SHOW'			=> 'Commenti per questo video %s',
	'DMV_COMMENT_SINGLE'		=> '1 commento',
	'DMV_COPY_NOTE'				=> '<strong>Nota importante!</strong> Tutti i video presenti qui, sono video di YouTube, MyVideo o operatori simili. I diritti d’autore risiedono ancora nell’autore o nel proprietario legale del copyright del video. Se l’utilizzo di un video è vietato o è disponibile su una pagina privata, ti preghiamo di inviaci un messaggio contenente il link del video, puoi contattarci su <a href="mailto:%1$s">%2$s</a> e noi elimineremo il video dalla lista.',
	'DMV_COUNT'					=> 'Numero di video',
	'DMV_DELETE_VIDEO'			=> 'Cancella il tuo video',
	'DMV_DELETE_VIDEO_CONFIRM'	=> 'Sei sicuro di voler cancellare il tuo video?',
	'DMV_DELETED_VIDEO'			=> 'Il tuo video è sato cancellato',
	'DMV_DURATION'				=> 'Durata',
	'DMV_DURATION_EXPLAIN'		=> 'Aggiungi la durata del video seguito dal formato ad esempio: 5:00 (per indicare 5 minuti)',
	'DMV_EDITED'				=> 'Il tuo video è stato aggiornato',
	'DMV_EDIT_VIDEO'			=> 'Modifica video',
	'DMV_FROM'					=> 'di',
	'DMV_HITS'					=> 'I %s video più visti',
	'DMV_IN'					=> 'in',
	'DMV_INDEX'					=> 'Indice',
	'DMV_LAST_VIDEO'			=> 'Nuovo video',
	'DMV_MOST_SEEN_VIDEOS'		=> 'I video più visti',
	'DMV_MULTI'					=> '%d video',
	'DMV_MULTI_VIEW'			=> '<strong>%d</strong> Visualizzazioni fino ad ora',
	'DMV_NEED'					=> 'I campi contrassegnati con l’asterisco (*) devono essere riempiti',
	'DMV_NEED_DATA'				=> 'È necessario inserire almeno il titolo e l’URL! Torna inditro con il pulsante del browser, per completare la tua voce.',
	'DMV_NEED_TITLE'			=> 'È necessario inserire un titolo! Torna inditro con il pulsante del browser, per completare l’operazione.',
	'DMV_NEED_URL'				=> 'È necessario inserire un URL! Torna inditro con il pulsante del browser, per completare l’operazione.',
	'DMV_NEW_VIDEOS'			=> 'Ci sono nuovi video da approvare! Clicca qui per entrare nel tuo ACP',
	'DMV_NEW_VIDEOS_PM_SUBJECT'	=> 'Ci sono nuovi video da approvare!',	
	'DMV_NEW_VIDEOS_PM'			=> 'Ciao,<br /><br />ci sono nuovo video, devono essere controllati e approvati.',
	'DMV_NEWEST_VIDEOS'			=> 'Ultimi video',
	'DMV_NO_CATS'				=> 'Attualmente non ci sono categorie disponibili',
	'DMV_NO_OWN_VIDEOS'			=> 'Non è stato ancora inserito un video ',
	'DMV_NO_VIDEOS'				=> 'Non ci sono attualmente video disponibili',
	'DMV_NO_VIDEOS_IN_CAT'		=> 'Non ci sono video disponibili in questa categoria oppure non sono stati approvati.<br />Se questa categoria ha sotto-categorie, aggiungi i tuoi video nella sotto-categoria, se è adatta al tuo video!',
	'DMV_NOT_RELEASED'			=> 'Ultimo video rilasciato!',
	'DMV_ON'					=> 'il',
	'DMV_OWN_MULTI'				=> '<strong>%d</strong> Video caricati fino ad ora',
	'DMV_OWN_SINGLE'			=> '<strong>1</strong> Video caricati fino ad ora',
	'DMV_OWN_VIDEO'				=> 'Video caricati',
	'DMV_POST_VIDEO'			=> 'Video caricati nell’attuale categoria',
	'DMV_POST_VIDEO_EXPLAIN'	=> 'Puoi inserire un video nella corrente categoria.<br />Prova a riempire tutti i campi (titolo e URL devono essere riempiti!)',
	'DMV_RANDOM_VIDEO'			=> 'Video casuale',
	'DMV_RANK'					=> 'Voti',
	'DMV_RATED_SUCCESSFUL'		=> '<strong>Il tuo voto è stato aggiunto!</strong>',
	'DMV_RATES'					=> 'I %s video più votati',
	'DMV_RATING'				=> 'Vota questo video',
	'DMV_RATING_AVG'			=> 'Medio',
	'DMV_RATING_BAD'			=> 'Pessimo',
	'DMV_RATING_GOOD'			=> 'Buono',
	'DMV_RATING_GREAT'			=> 'Favoloso',
	'DMV_RATING_LIST'			=> 'Votazioni',
	'DMV_RATING_NO'				=> 'Ancora nessun voto',
	'DMV_RATING_NOT_BAD'		=> 'Mediocre',
	'DMV_RATING_NO_PERM'		=> 'Ti è permesso di votare questo video',
	'DMV_RATING_SELECT'			=> 'Seleziona voto',
	'DMV_RATING_SUM'			=> '%s votazioni con %s',
	'DMV_RATING_SUMS'			=> '%s votazioni con medi di voti di %s',
	'DMV_RATING_TITLE'			=> 'Seleziona il tuo voto per %1$s da %2$s!',
	'DMV_RATING_VIDEO'			=> 'Seleziona il tuo voto',
	'DMV_REPORT_VIDEO'			=> 'Segnala un video interrotto',
	'DMV_REPORTED_THANKS'		=> 'Grazie molte per aver segnalato il video interrotto.',
	'DMV_REPORTED_VIDEOS'		=> 'Risultano segnalazioni video da controllare. Clicca qui per andare nel tuo ACP!',
	'DMV_RETURN_MAIN'			=> 'Ritorna al menu video',
	'DMV_SEARCH'				=> 'Cerca video',
	'DMV_SEARCH_NO_RESULTS'		=> 'Purtroppo non abbiamo trovato nulla corrispondenti alla tua ricerca .',
	'DMV_SEARCH_RESULTS'		=> 'Qui di seguito troverai i risultati di ricerca per <strong>%s</strong>',
	'DMV_SEARCH_RESULTS_HEADER'	=> 'Risultati di ricerca',
	'DMV_SEARCH_STRING'			=> 'Aggiungi un criterio di ricerca',
	'DMV_SHOW_POPUP'			=> 'Mostra video in una finestra a PopUp',
	'DMV_SHOW_TOPTEN'			=> 'Mostra lista Top %1$s',
	'DMV_SHOW_VIDEO'			=> 'Stai ora guardando',
	'DMV_SHOW_VIDEO_EXPLAIN'	=> 'Puoi ora selezionare il video.<br />Se si tratta di una canzone e devi aggiungere ulteriori informazioni, puoi trovare il campo sul lato destro.',
	'DMV_SINGER'				=> 'Autore',
	'DMV_SINGER_EXPLAIN'		=> 'Aggiungi il nome dell’autore',
	'DMV_SINGLE'				=> '1 video',
	'DMV_SINGLE_VIEW'			=> 'Visto: 1 volta',
	'DMV_SONGTEXT'				=> 'Descrizione',
	'DMV_SONGTEXT_EXPLAIN'		=> 'Puoi aggiungere una descrizione del video. Queste informazioni saranno visualizzate accanto al video.',
	'DMV_SORT_ARTIST'			=> 'Autore',
	'DMV_SORT_ASC'				=> 'Ascendente',
	'DMV_SORT_DATE'				=> 'Data',
	'DMV_SORT_DESC'				=> 'Discendente',
	'DMV_SORT_DIRECTION'		=> 'Ordinamento',
	'DMV_SORT_FROMNAME'			=> 'inviato da',
	'DMV_SORT_KEYS'				=> 'Chiave ordinamento ',
	'DMV_SORT_RATING'			=> 'Voti',
	'DMV_SORT_TITLE'			=> 'Titolo',
	'DMV_SORT_VIEWS'			=> 'Visti',
	'DMV_SUB_CAT'				=> 'Sotto-categoria',
	'DMV_SUB_CATS'				=> 'Sotto-categorie',
	'DMV_TITLE'					=> 'Titolo',
	'DMV_TITLE_EXPLAIN'			=> 'Aggiungi il titolo del video',
	'DMV_TOPTEN_HITS_EXPLAIN'	=> 'Qui puoi vedere la lista dei video più visti - %s video più visti',
	'DMV_TOPTEN_RATE_EXPLAIN'	=> 'Qui puoi vedere la lista dei video più votati - %s video più votati',
	'DMV_TOTAL_VIDEOS'			=> 'Numero totale di video: %s',
	'DMV_URL'					=> 'URL Video',
	'DMV_URL_EXPLAIN'			=> 'Aggiungi il <strong>codice embedded</strong> (non il link diretto!) di un video da YouTube, MyVideo o altri. Se hai un tuo video, devi creare un’account su uno di questi portali e poi inserire qui il codice embedded.<br><br><strong>IMPORTANTE!</strong> Per una corretta visualizzazione la dimensione del video <strong>non deve essere superiore a 430x385</strong>, Youtube usa per default 480x385. Noi ti consigliamo la dimensione di 430x385 se vuoi inserire una descrizione, la dimensione di default se non vuoi inserire una descrizione.',
	'DMV_VIDEO'					=> 'Video',
	'DMV_VIDEO_COUNTER'			=> '%s visite',
	'DMV_VIDEO_IMG'				=> 'Link immagine',
	'DMV_VIDEO_IMG_EXPLAIN'		=> 'Aggiungi un link per l’immagine del video. La dimensione non deve superare i 250 x 250px! Assicurati che il link è disponibile! E, naturalmente, verifica il diritto d’autore!',
	'DMV_VIDEO_RATES'			=> 'Voti',
	'DMV_VIDEO_VIEWS'			=> 'Visite',
	'DMV_VIEW_VIDEOS'			=> 'Video visti',

	// UMIL Installer strings
	'UMIL_DMV_INSERT_FIRST_FILL'		=> 'Le tabelle della mod DM Video sono state create con qualche dato base.',
	'UMIL_DMV_REMOVE_CONFIG_ENTRIES'	=> 'Le voci nella tabella config sono state eliminate con successo.',
	'UMIL_DMV_NAME'						=> 'DM Video',
	'UMIL_DMV_NAME_EXPLAIN'				=> 'Questa mod permette di offrire ai tuoi utenti una pagina simile a YouTube o MyVideo.<br /><br />Seleziona l’azione desiderata qui sotto (nei casi normali non è necessario cambiare impostazioni. Le migliori impostazioni verranno selezionate automaticamente).<br /><br />Buon divertimento!',
	'UMIL_DMV_UPDATE_SUCCESFUL'			=> 'Le tabelle sono state aggiornate con successo.',

	'ACP_DMV_DM_VIDEO'					=> 'DM Video',
	'ACP_DMV_CONFIG'					=> 'Configurazione',
	'ACP_DMV_EDIT'						=> 'Modifica video',
	'ACP_DMV_MANAGE_CATEGORIES'			=> 'Categorie',
	'ACP_DMV_RELEASE'					=> 'Approva video',
	'ACP_DMV_REPORTED'					=> 'Segnalazione video',
));

?>