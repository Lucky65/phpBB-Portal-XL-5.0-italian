<?php
/**
*
* arcade [Italian]
*
* @package language
* @version $Id: arcade.php 803 2009-07-01 17:55:12Z JRSweets $
* @copyright (c) 2008 JeffRusso.net
* @copyright (c) 2009, 2010 luckylab.eu - revision for portal xl on 2010/11/30
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

//These are used through out the arcade
$lang = array_merge($lang, array(
	'AMOD_GAME'								=> 'Attività Mod',
	'ARCADE'								=> 'Arcade',
	'ARCADE_ADD_FAV'						=> 'Aggiungi ai preferiti',
	'ARCADE_ADV_SEARCH'						=> 'Ricerca avanzata giochi',
	'ARCADE_ALL_CATEGORIES'					=> 'Tutte le categorie',
	'ARCADE_ALL_GAMES'						=> 'Tutti i giochi',

	'ARCADE_BACK_BUTTON_ERROR'				=> 'Dati mancanti per questa partita. Ciò è normalmente causato dalla pressione del tasto indietro(back) nel browser per gicare.  Bisogna usare i collegamenti interni alla salagiochi per giocare nuovamente.  Se devi usare il tasto indietro, assicurati di aggiornare la pagina.',
	'ARCADE_BALANCE'						=> 'Saldo',
	'ARCADE_BEST_DATE_EXPLAIN'				=> 'Punteggio registrato il <b>%s</b>.',
	'ARCADE_CATEGORIES'						=> 'Categorie',
	'ARCADE_CATEGORY'						=> 'Categoria',
	'ARCADE_CAT_LOCKED'						=> 'Bloccato',

	'ARCADE_CAT_LOCKED_ERROR'				=> 'Questa categoria è bloccata. Non puoi giocare con i giochi all’interno.',
	'ARCADE_CAT_TEST_MODE'					=> 'Questa categoria è attualmente in modo test',	
	'ARCADE_CHAMPION_PLAYED'				=> 'Numero di partite',
	'ARCADE_CHAMPION_SPENT'					=> 'Tempo speso giocando',
	'ARCADE_CLICK_PLAY'						=> 'Clicca per giocare!',
	'ARCADE_COMMENT'						=> 'Commento',

	'ARCADE_COOKIE_ERROR'					=> 'Errore leggendo i dati della sessione. Accertati di avere i cookies abilitati nel tuo browser.',
	'ARCADE_COST'							=> 'Costo',
	'ARCADE_CREATE'							=> 'Crea',
	'ARCADE_DATE'							=> 'Data',
	'ARCADE_DEFAULT'						=> 'Predefinito',

	'ARCADE_DISABLE'						=> 'La salagiochi è momentaneamente non disponibile.',
	'ARCADE_DISABLED'						=> 'La salagiochi è momentaneamente disabilitata.',
	'ARCADE_DOWNLOAD'						=> 'Scarica',
	'ARCADE_DOWNLOAD_AS'					=> 'Scarica come',
	'ARCADE_DOWNLOAD_AS_EXPLAIN'			=> 'Scegli un formato per scaricare il file.',
	'ARCADE_DOWNLOAD_FORMAT'				=> 'Scegli un formato per scaricare %s',
	'ARCADE_DOWNLOAD_GAME'					=> 'Scarica gioco',
	'ARCADE_DOWNLOAD_MISSING_FILES'			=> 'E’ stato riscontrato un errore durante il download.<br /><br />Contatta l’amministratore ed informalo che mancano i seguenti file:<br /><strong>%s</strong>',
	'ARCADE_DOWNLOAD_MISSING_FILES_DEBUG'	=> 'E’ stato riscontrato un errore durante il download.<br /><br />I seguenti file e/o cartelle mancano:<br /><strong>%s</strong>',
	'ARCADE_EXPLAIN'						=> 'Entra nella sala giochi',
	'ARCADE_EDIT_GAME_QUICK'				=> 'Modifica gioco',
	'ARCADE_EDIT_SCORES_QUICK'				=> 'Modifica punteggio',
	'ARCADE_EXPLAIN'						=> 'Gioca nella sala giochi',
	'ARCADE_FAV'							=> 'Miei preferiti',
	'ARCADE_FEELING_LUCKY'					=> 'Mi sento fortunato',
	'ARCADE_FIRST'							=> 'Primo posto',
	'ARCADE_FLASH_VERSION'					=> 'Devi aver installato Adobe Flash Player versione %s o successiva.',
	'ARCADE_FREE'							=> 'Gratis',
	'ARCADE_FULL_DONE'						=> 'Grazie per aver giocato a %s.<br/><br/>%sClicca qui per giocare a %s di nuovo%s<br/><br/>%sClicca qui per tornare a %s%s<br/><br/>%sClicca qui per tornare alla SalaGiochi%s',
	'ARCADE_GAME'							=> 'Gioco',
	'ARCADE_GAMES'							=> 'Giochi',
	'ARCADE_GAMES_FILESIZE'					=> 'Dimensione: %s',
	'ARCADE_GAMES_PER_PAGE'					=> 'Giochi per pagina',
	'ARCADE_GAMES_SORT_DIR'					=> 'Direzione ordinamento giochi',
	'ARCADE_GAMES_SORT_FIXED'				=> 'Fisso',
	'ARCADE_GAMES_SORT_INSTALLDATE'			=> 'Data di installazione',
	'ARCADE_GAMES_SORT_NAME'				=> 'Nome',
	'ARCADE_GAMES_SORT_ORDER'				=> 'Indice ordinamento giochi',
	'ARCADE_GAMES_SORT_PLAYS'				=> 'Giocate',
	'ARCADE_GAMES_SORT_RATING'				=> 'Voto',
	'ARCADE_GAME_CHAMP'						=> 'Campione del gioco',
	'ARCADE_GAME_CHAMPION'					=> 'Campione',
	'ARCADE_GAME_CHAMPION_COMMENT'			=> 'Commento del campione',
	'ARCADE_GAME_DESC'						=> 'Descrizione',
	'ARCADE_GAME_DOWNLOAD_TOTAL'			=> '%s è stato scaricato %s volta.',
	'ARCADE_GAME_DOWNLOAD_TOTALS'			=> '%s è stato scaricato %s volte.',
	'ARCADE_GAME_FAVS'						=> 'Giochi preferiti',
	'ARCADE_GAME_INFO'						=> 'Info Gioco',
	'ARCADE_GAME_NAME'						=> 'Nome Gioco',
	'ARCADE_GAME_NO_SCORES'					=> 'Non ci sono record per %s.  Se vuoi giocare clicca  <a href="%s">qui</a>.',
	'ARCADE_GAME_OPTIONS'					=> 'Opzioni Gioco',
	'ARCADE_GAME_OVER'						=> 'Game over!',
	'ARCADE_GAME_RATE'						=> 'Seleziona il voto',
	'ARCADE_GAME_RATE_ALREADY'				=> 'Hai già votato questo gioco: <strong>%d</strong>.<br />Puoi cambiare il tuo voto.',
	'ARCADE_GAME_STATS'						=> 'Statistiche gioco',
	'ARCADE_GAME_STATS_INFO'				=> 'Info Gioco',

	'ARCADE_GUEST_FAVS'						=> 'Se fossi registrato avresti accesso ai tuoi giochi preferiti.',
	'ARCADE_HERE'							=> 'qui',
	'ARCADE_HIGHSCORE'						=> 'Record',
	'ARCADE_HIGHSCORES'						=> 'Record',



	'ARCADE_HIGH_SCORE_SAVED' 				=> 'Sei il nuovo campione di %s. Il tuo punteggio di %s batte il vecchio record di %s.',
	'ARCADE_HIGH_SCORE_SAVED_NEW' 			=> 'Sei il nuovo campione di %s. Il tuo punteggio di %s è il primo che viene salvato.',
	'ARCADE_IBPROV3_ERROR'					=> 'I dati del punteggio inviati erano mancanti o corrotti.  Per favore gioca di nuovo.  Se hai visto questo messaggio più di una volta contatta gli amministratori del forum.',
	'ARCADE_INDEX'							=> 'Indice salagiochi',
	'ARCADE_JACKPOT'						=> 'Jackpot',
	'ARCADE_LAST_PLAY'						=> '%s punteggio di %s giocando a %s',
	'ARCADE_LAST_PLAY_TITLE'				=> 'Ultima partita',
	'ARCADE_LATEST_HIGHSCORES'				=> 'Ultimi record',
	'ARCADE_LEADERS'						=> 'Migliori giocatori',
	'ARCADE_LEAST_DOWNLOADED'				=> 'Giochi meno scaricati',

	'ARCADE_LEAST_DOWNLOADED_EXPLAIN' 		=> 'Il numero dei giochi meno scaricati da mostrare nella pagina principale delle statistiche.',
	'ARCADE_LEAST_POPULAR' 					=> 'Giochi meno popolari',



	'ARCADE_LEAST_POPULAR_EXPLAIN'			=> 'Il numero di giochi meno popolari da mostrare nella pagina principale delle statistiche',
	'ARCADE_LIMIT_PLAY_TYPE_DAYS'			=> 'Devi avere un totale di %s messaggi negli ultimi %s giorni per giocare.<br /><br />Ti servono altri %s messaggi per poter giocare.',
	'ARCADE_LIMIT_PLAY_TYPE_POSTS'			=> 'Devi avere un totale di %s messaggi per poter giocare.<br /><br />Ti servono altri %s messaggi per poter giocare.',
	'ARCADE_LINKS'							=> 'Links',
	'ARCADE_LOGIN_CAT'						=> 'Per vedere i giochi o giocare in questa categoria, devi inserire la sua password.',	

	'ARCADE_LOGIN_EXPLAIN'					=> 'Devi essere registrato per usare questa funzione della Salagiochi.',
	'ARCADE_LONGEST_SCORE'					=> 'Record più duraturi',
	'ARCADE_MOST_DOWNLOADED'				=> 'Giochi più scaricati',

	'ARCADE_MOST_DOWNLOADED_EXPLAIN' 		=> 'Il numero dei diochi più scaricati da mostrare nella pagina principale delle statistiche',
	'ARCADE_MOST_POPULAR'					=> 'Giochi popolari',

	'ARCADE_MOST_POPULAR_EXPLAIN' 			=> 'Il numero di giochi più giocati da mostrare nella pagina principale delle statistiche',
	'ARCADE_MY_STATS'						=> 'Mie statistiche',
	'ARCADE_NEWEST_GAMES'					=> 'Nuovi giochi',
	'ARCADE_NEW_GAMES'						=> 'Nuovi giochi aggiunti di recente',
	'ARCADE_NONE'							=> 'Nessuno',
	'ARCADE_NOSCORE_GAME'					=> 'Questo gioco non supporta punteggi.',

	'ARCADE_NO_GAMES'						=> 'Non ci sono giochi installati nella Salagiochi.',
	'ARCADE_NO_GAME_FAVS'					=> 'Non hai selezionato alcun gioco preferito.',
	'ARCADE_NO_HIGHSCORE'					=> 'Nessun record',
	'ARCADE_NO_HIGHSCORES'					=> 'Questo utente non ha punteggi.',
	'ARCADE_NO_ID_ERROR'					=> 'Per usare questa funzione bisogna inserire un id.',

	'ARCADE_NO_LATEST_HIGHSCORES'			=> 'Non ci sono record registrati.<br />Gioca con qualche gioco.',
	'ARCADE_NO_NEW_GAMES'					=> 'Non ci sono nuovi giochi recentemente aggiunti',
	'ARCADE_NO_ORDER_TYPE_ERROR'			=> 'Il tipo di ordine selezionato non è supportato.',
	'ARCADE_NO_PLAYS'						=> 'Nessuna partita',
	'ARCADE_NO_POINTS'						=> 'Non hai abbastanza %s per giocare.',

	'ARCADE_NO_SCORE_SAVED'					=> 'Nessun punteggio salvato, perchè %s non ha battuto il tuo precedente punteggio di %s.',
	'ARCADE_NO_TIMES_PLAYED'				=> 'Non ancora giocato',
	'ARCADE_NO_TOTAL_TYPE_ERROR'			=> 'Il total type mode selezionato non è supportato.',
	'ARCADE_NO_VOTES'						=> 'Non ancora votato',

	'ARCADE_OFFLINE'						=> 'Nessuno sta giocando.',
	'ARCADE_ONLINE'							=> 'Chi sta giocando?',
	'ARCADE_PERMISSIONS'					=> 'Permessi Arcade',
	'ARCADE_PERSONAL_BEST'					=> 'Miglior personale',
	'ARCADE_PLAYED_GAMES_HIGHLIGHT'			=> 'I giochi evidenziati non sono stati ancora giocati da te',
	'ARCADE_PLAYED_NO_GAME'					=> 'Questo utente non ha mai giocato a questo gioco.',

	'ARCADE_PLAYED_NO_GAMES'				=> 'Questo utente non ha mai giocato.',
	'ARCADE_PLAYS'							=> 'Partite',
	'ARCADE_PLAY_LINK'						=> 'Gioca',
	'ARCADE_POPUP_DONE' 					=> 'Grazie per aver giocato a %s.<br/><br/>%sClicca qui per giocare a %s di nuovo%s<br/><br/>%sClicca qui per chiudere la finestra%s',
	'ARCADE_POPUP_HIGHUSER'					=> 'Record per %s: %s (%s)',
	'ARCADE_POPUP_LINK'						=> 'Gioca in una nuova finestra',
	'ARCADE_POP_NO_HIGHSCORE'				=> 'Nessun record per %s',
	'ARCADE_QUICK_JUMP'						=> 'Salto veloce',
	'ARCADE_RANK'							=> 'Voto',
	'ARCADE_RATING_AVG'						=> 'Medio',
	'ARCADE_RATING_BAD'						=> 'Brutto',
	'ARCADE_RATING_GREAT'					=> 'Bello',



	'ARCADE_REDIRECT'						=> 'Se non vieni reindirizzato entro breve, clicca %squi%s per continuare.',
	'ARCADE_REGISTER_MESSAGE_PLAY' 			=> 'Dato che non sei un membro registrato, o non sei attualmente connesso al sito con il tuo nome utente, non puoi giocare.<br/><br/>Questo sito ha attualmente <b>%s</b> giochi installati e spesso ne vengono aggiunti.<br/>Se vuoi godere appieno di questa sezione di giochi per favore registrati al sito o esegui il login.<br/><br/>La registrazione è gratuita e può essere eseguita cliccando  %squi%s.<br/><br/>Se vuoi fare il login e continuare con il gioco selezionato: clicca %squi%s.',
	'ARCADE_REGISTER_MESSAGE_SCORE' 		=> 'Dato che non sei un membro registrato, o non sei attualmente connesso al sito con il tuo nome utente, il tuo punteggio non sarà salvato.<br/><br/>Questo sito ha attualmente <b>%s</b> giochi installati e spesso ne vengono aggiunti.<br/>Se vuoi godere appieno di questa sezione di giochi per favore registrati al sito o esegui il login.<br/><br/>La registrazione è gratuita e può essere eseguita cliccando  %squi%s.',
	'ARCADE_REMOVE_FAV'						=> 'Rimuovi dai preferiti',
	'ARCADE_REPORT'							=> 'Segnala un problema del gioco',
	'ARCADE_REPORTS_OPEN'					=> 'Ci sono attaulmente %s segnalazioni giochi aperte.',

	'ARCADE_REPORT_ADDED'					=> 'Grazie per aver segnalato il gioco per <strong>%s</strong>.<br /><br />  Questo report verrà controllato dall’amministratore e preso in considerazione.  Se saranno necessarie più informazioni verrai contattato dall’amministratore.',
	'ARCADE_REPORT_BELOW'					=> 'Inserisci il messaggio in basso',
	'ARCADE_REPORT_DOWNLOADING'				=> 'Problema di download',
	'ARCADE_REPORT_GAME'					=> 'Segnala il gioco',
	'ARCADE_REPORT_OPEN'					=> 'C’è attualmente %s segnalazione di gioco aperta.',
	'ARCADE_REPORT_OTHER'					=> 'Altro...',
	'ARCADE_REPORT_PLAYING'					=> 'Problema di gioco',
	'ARCADE_REPORT_SCORING'					=> 'Problema di punteggio',
	'ARCADE_REPORT_SUCCESS'					=> 'Report inviato con successo',
	'ARCADE_REPORT_TYPE'					=> 'Seleziona un’opzione',
	'ARCADE_RESOLUTION'						=> 'Cambia risoluzione',
	'ARCADE_RESOLUTION_AUTO'				=> 'Auto',
	'ARCADE_RESOLUTION_INCREASE'			=> 'Aumenta',
	'ARCADE_RESOLUTION_REDUCE'				=> 'Riduci',
	'ARCADE_REWARD'							=> 'Ricompensa',
	'ARCADE_REWARD_MESSAGE'					=> 'Congratulazioni!  Hai appena ricevuto %s %s.  Il tuo totale di %s a %s.',
	'ARCADE_RULES_COMMENT_CAN'				=> 'Tu <strong>puoi</strong> inviare commenti in questa categoria',
	'ARCADE_RULES_COMMENT_CANNOT'			=> 'Tu <strong>non puoi</strong> inviare commenti in questa categoria',
	'ARCADE_RULES_DOWNLOAD_CAN'				=> 'Tu <strong>puoi</strong> scaricare i giochi in questa categoria',
	'ARCADE_RULES_DOWNLOAD_CANNOT'			=> 'Tu <strong>non puoi</strong> scaricare i giochi in questa categoria',
	'ARCADE_RULES_IGNORE_CONTROL_CAN'		=> 'Tu <strong>puoi</strong> ignorare il limite di gioco in questa categoria',
	'ARCADE_RULES_IGNORE_CONTROL_CANNOT'	=> 'Tu <strong>non puoi</strong> ignorare il limite di gioco in questa categoria',
	'ARCADE_RULES_PLAY_CAN'					=> 'Tu <strong>puoi</strong> giocare in questa categoria',
	'ARCADE_RULES_PLAY_CANNOT'				=> 'Tu <strong>non puoi</strong> giocare in questa categoria',
	'ARCADE_RULES_PLAY_FREE_CAN'			=> 'Tu <strong>puoi</strong> giocare gratis in questa categoria',
	'ARCADE_RULES_PLAY_FREE_CANNOT'			=> 'Tu <strong>non puoi</strong> giocare gratis in questa categoria',
	'ARCADE_RULES_PLAY_POPUP_CAN'			=> 'Tu <strong>puoi</strong> giocare in una nuova finestra in questa categoria',
	'ARCADE_RULES_PLAY_POPUP_CANNOT'		=> 'Tu <strong>non puoi</strong> giocare in una nuova finestra in questa categoria',
	'ARCADE_RULES_RATE_CAN'					=> 'Tu <strong>puoi</strong> votare i giochi in questa categoria',
	'ARCADE_RULES_RATE_CANNOT'				=> 'Tu <strong>non puoi</strong> votare i giochi in questa categoria',
	'ARCADE_RULES_REPORT_CAN'				=> 'Tu <strong>puoi</strong> segnalare i giochi in questa categoria',
	'ARCADE_RULES_REPORT_CANNOT'			=> 'Tu <strong>non puoi</strong> segnalare i giochi in questa categoria',
	'ARCADE_RULES_RESOLUTION_CAN'			=> 'Tu <strong>puoi</strong> cambiare la risoluzione del gioco in questa categoria',
	'ARCADE_RULES_RESOLUTION_CANNOT'		=> 'Tu <strong>non puoi</strong> cambiare la risoluzione del gioco in questa categoria',
	'ARCADE_RULES_SCORE_CAN'				=> 'Tu <strong>puoi</strong> inviare punteggi in questa categoria',
	'ARCADE_RULES_SCORE_CANNOT'				=> 'Tu <strong>non puoi</strong> inviare punteggi in questa categoria',
	'ARCADE_SCORE'							=> 'Punteggio',
	'ARCADE_SCORES'							=> 'Punteggi',

	'ARCADE_SCOREVAR_ERROR'					=> 'I dati inviati per il gioco sono mancanti o corrotti. Gioca di nuovo.  Se hai visto questo messaggio più di una volta contatta gli amministratori del forum.',
	'ARCADE_SCORE_COMMENT'					=> 'Inserisci commento',
	'ARCADE_SCORE_COMMENT_BELOW'			=> 'Scrivi il commento in basso',


	'ARCADE_SCORE_ERROR'					=> 'Il tuo punteggio per il gioco manca, nessun punteggio verrà salvato. Se vuoi giocare a %s nuovamente clicca %squi%s.',
	'ARCADE_SCORE_SAVED' 					=> 'Il tuo punteggio di %s è stato salvato. Non hai comunque battuto il record di %s.',
	'ARCADE_SEARCH'							=> 'Cerca giochi',
	'ARCADE_SEARCH_DESCRIPTION'				=> 'Inserisci qui i termini per la ricerca giochi',
	'ARCADE_SEARCH_NEW_GAMES'				=> 'Nuovi giochi',

	'ARCADE_SEARCH_NO_MATCHES'				=> 'Nessun gioco per il termine ricercato. Prova ancora.',
	'ARCADE_SEARCH_RESULTS_FOR'				=> 'Risultati ricerca per %s',
	'ARCADE_SECOND'							=> 'Secondo posto',
	'ARCADE_SELECT_CATEGORY'				=> 'Seleziona una categoria',
	'ARCADE_SELECT_GAME'					=> 'Seleziona un gioco',
	'ARCADE_SELECT_RATING'					=> 'Seleziona un voto',
	'ARCADE_SELECT_STATS'					=> 'Seleziona un gioco o un utente',
	'ARCADE_SELECT_USER'					=> 'Seleziona un utente',


	'ARCADE_SEND_PM'						=> 'Manda MP per la perdita di un record',
	'ARCADE_SEND_PM_UCP_EXPLAIN'			=> 'Quando perdi un record, te ne viene inviata notifica via messaggio privato.',
	'ARCADE_STATS'							=> 'Statistiche',
	'ARCADE_STATS_AVG'						=> 'Tempo medio',
	'ARCADE_STATS_BEST_DATE'				=> 'Data',
	'ARCADE_STATS_BEST_SCORE'				=> 'Punteggio',
	'ARCADE_STATS_PAGE_TITLE'				=> 'Statistiche salagiochi',
	'ARCADE_STATS_PLAY'						=> '%s è stato giocato %s volta.',
	'ARCADE_STATS_PLAYS'					=> '%s è stato giocato %s volte.',
	'ARCADE_STATS_SCORE_PAGE_TITLE'			=> 'Statistiche salagiochi per %s - %s',
	'ARCADE_STATS_TOTAL'					=> 'Tesmpo totale',
	'ARCADE_STATS_TOTAL_DOWNLOADS'			=> 'Download totali',
	'ARCADE_STATS_TOTAL_PLAYS'				=> 'Totale partite',
	'ARCADE_STATS_TOTAL_TIME'				=> 'Tempo totale',
	'ARCADE_STATS_USER_GAME_PAGE_TITLE'		=> 'Statistiche salagiochi di %s',
	'ARCADE_STATS_WIN'						=> '%s ha %s record.',
	'ARCADE_STATS_WINS'						=> '%s ha %s record.',
	'ARCADE_SUBCAT'							=> 'Sottocategoria',
	'ARCADE_SUBCATS'						=> 'Sottocategorie',
	'ARCADE_SYNC_MODE_NOT_SUPPORTED'		=> 'Il sync mode selezionato non è supportato.',

	'ARCADE_TEST_SCORE'						=> 'Il tuo punteggio deve essere registrato sulla <strong>%s</strong>, comunque nessun punteggio sarà registrato perchè sei in modalità <strong>test</strong>. Se vuoi giocare %s ancora clicca %squi%s. Se vuoi tornare alla categoria clicca %squi%s.',
	'ARCADE_THIRD'							=> 'Terzo posto',
	'ARCADE_TIMES_DOWNLOADED'				=> 'Scaricato: %d',
	'ARCADE_TIMES_PLAYED'					=> 'Giocato: %d',
	'ARCADE_TIME_HELD'						=> 'Durata',
	'ARCADE_TOP_SCORES'						=> 'Punteggi migliori',
	'ARCADE_TOTAL_DOWNLOAD'					=> 'Il gioco è stato scaricato <b>%s</b> volte.',
	'ARCADE_TOTAL_DOWNLOADS'				=> 'I giochi sono stati scaricati <b>%s</b> volte.',
	'ARCADE_TOTAL_GAME'						=> 'Attualmente <b>%s</b> gioco è installato.',
	'ARCADE_TOTAL_GAMES'					=> 'Ci sono attualmente <b>%s</b> giochi installati.',


	'ARCADE_TOTAL_PLAYED'					=> 'I giochi sono stati giocati <b>%s</b> volte per un totale di <b>%s</b>.',
	'ARCADE_TYPE'							=> 'Tipo',

	'ARCADE_TYPE_ERROR' 					=> 'Il metodo di invio del punteggio non corrisponde al tipo di gioco.  Per favore notificalo agli amministratori del sito.',
	'ARCADE_USER_FAV'						=> 'Preferiti dall’utente',
	'ARCADE_USER_HIGHSCORES'				=> 'Vedi record utente',
	'ARCADE_USER_INFO'						=> 'Info utente',
	'ARCADE_USER_SCORES'					=> 'Vedi tutti i punteggi dell’utente',
	'ARCADE_USER_STATS'						=> 'Statistiche utente',
	'ARCADE_VIEW'							=> 'Guarda',
	'ARCADE_VIEW_USERS_STATS'				=> 'Vedi le statistiche salagiochi dell’utente',
	'ARCADE_VOTE'							=> '%s voto, %s media',
	'ARCADE_VOTES'							=> '%s voti, %s media',
	'ARCADE_VOTES_NO'						=> 'Non ci sono voti',
	'ARCADE_WELCOME'						=> 'Benvenuto nella Sala giochi!',
	'ARCADE_WELCOME_CHAMP'					=> '%s è il nuovo campione di %s!',
	'ARCADE_WELCOME_PLAYS' 					=> 'Totale partite',
	'ARCADE_WELCOME_SCORE'					=> 'Punteggio di <b>%s</b> » %s.',
	'ARCADE_WELCOME_TIME' 					=> 'Tempo speso giocando',
	'ARCADE_WELCOME_TIMEPLAYED' 			=> 'Tempo di gioco',
	'ARCADE_WELCOME_WINS'					=> 'Totale vittorie',

	'ARCADE_ZERO_NEGATIVE_SCORE'			=> 'Il tuo punteggio per il gioco è 0 o è negativo, nessun punteggio verrà salvato. Se vuoi giocare a %s nuovamente clicca %squi%s.',
	'AR_GAME'								=> 'Arcade room',

	'CAT_RULES'								=> 'Regole della categoria',
	'CAT_RULES_LINK_CLICK'					=> 'Clicca qui per vedere le regole della categoria',
	'CLOSE'									=> 'Chiudi',

	'DOWNLOADING_GAME'						=> 'Sta scaricando il gioco %s',
	'DOWNLOADING_GAME_LIST'					=> 'Sta scaricando il gioco %s attraverso la lista download',
	'DOWNLOADING_LIST'						=> 'Sta vedendo la lista download',

	'IBPROV3_GAME'							=> 'IBPROV3',
	'IBPRO_ARCADELIB_GAME'					=> 'IBPRO (arcadelib)',
	'IBPRO_GAME'							=> 'IBPRO',



	'LOGIN_VIEWARCADE'						=> 'Per vedere questa categoria devi essere registrato e loggato.',
	'NEW_GAMES'								=> 'Nuovi giochi',
	'NEW_GAMES_LOCKED'						=> 'Nuovi giochi [Bloccato]',
	'NOSCORE_GAME'							=> 'Nessun punteggio',



	'NO_ARCADE_GAMES'						=> 'Non ci sono giochi installati in questa categoria.',
	'NO_CAT_ID'								=> 'Nessuna categoria selezionata o categoria inesistente.',
	'NO_GAME_ID'							=> 'Gioco non selezionato o inesistente.',
	'NO_NEW_GAMES'							=> 'Non ci sono nuovi giochi',
	'NO_NEW_GAMES_LOCKED'					=> 'Non ci sono nuovi giochi [Bloccato]',









	'NO_PERMISSION_ARCADE_COMMENT'			=> 'Non hai il permesso di inviare commenti in questa categoria.  Se credi sia sbagliato contatta gli amministratori del forum.',
	'NO_PERMISSION_ARCADE_DOWNLOAD'			=> 'Non hai il permesso di scaricare giochi in questa categoria.  Se credi sia sbagliato contatta gli amministratori del forum.',
	'NO_PERMISSION_ARCADE_PLAY'				=> 'Non hai il permesso di giocare in questa categoria.  Se credi sia sbagliato contatta gli amministratori del forum.',
	'NO_PERMISSION_ARCADE_PLAY_POPUP'		=> 'Non hai il permesso di giocare in una nuova finestra in questa categoria. Se credi sia sbagliato contatta gli amministratori del forum',
	'NO_PERMISSION_ARCADE_RATE'				=> 'Non hai il permesso di votare i giochi in questa categoria.  Se credi sia sbagliato contatta gli amministratori del forum.',
	'NO_PERMISSION_ARCADE_REPORT'			=> 'Non hai il permesso di segnalare i giochi in questa categoria.  Se credi sia sbagliato contatta gli amministratori del forum.',
	'NO_PERMISSION_ARCADE_SCORE'			=> 'Non hai il permesso di inviare il punteggio in questa categoria.  Se credi sia sbagliato contatta gli amministratori del forum.',
	'NO_PERMISSION_ARCADE_VIEW'				=> 'Non hai il permesso di vedere questa categoria.  Se credi sia sbagliato contatta gli amministratori del forum.',
	'OPEN'									=> 'Apri',

	'PLAYING_GAME'							=> 'Sta giocando a %s',

	'RETURN_TO_ARCADE'						=> 'Ritorna alla salagiochi',

	'SEPARATOR_DECIMAL'						=> ',',
	'SEPARATOR_THOUSANDS'					=> '.',

	'TIME_DAY'								=> 'giorno',
	'TIME_DAYS'								=> 'giorni',
	'TIME_HOUR'								=> 'ora',
	'TIME_HOURS'							=> 'ore',
	'TIME_MINUTE'							=> 'min',
	'TIME_MINUTES'							=> 'min',
	'TIME_MONTH'							=> 'mese',
	'TIME_MONTHS'							=> 'mesi',
	'TIME_SECOND'							=> 'sec',
	'TIME_SECONDS'							=> 'sec',
	'TIME_WEEK'								=> 'settimana',
	'TIME_WEEKS'							=> 'settimane',
	'TIME_YEAR'								=> 'anno',
	'TIME_YEARS'							=> 'anni',

	'V3ARCADE_GAME'							=> 'V3Arcade',
	'VIEWING_ARCADE'						=> 'Sta guardando la salagiochi',
	'VIEWING_ARCADE_CAT'					=> 'Sta guardando la categoria %s',
	'VIEWING_ARCADE_FAVS'					=> 'Sta guardando i preferiti',
	'VIEWING_ARCADE_SEARCH'					=> 'Sta cercando giochi',
	'VIEWING_ARCADE_STATS'					=> 'Sta guardando le statistiche',
	'VIEWING_ARCADE_STATS_GAME'				=> 'Sta guardando le statistiche del gioco %s',
	'VIEWING_ARCADE_STATS_GAME_USER'		=> 'Sta guardando le statistiche del gioco %s di %s',
	'VIEWING_ARCADE_STATS_USER'				=> 'Sta guardando le statistiche di %s',
));

?>