<?PHP

/** 
*
* @mod package		Download Mod 6
* @file				dl_help.php 12 2011/01/06 OXPUS
* @copyright		(c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* @copyright mod	(c) hotschi / demolition fabi / oxpus
* @copyright        (c) 2009, 2011 luckylab.eu - update translation on 2011/08/02
* @license			http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/*
* [ italian ] language file for Download MOD 6
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

$lang = array_merge($lang, array(
	'HELP_TITLE' => 'Download MOD Aiuto online',

	'DL_NO_HELP_AVIABLE' => 'Questo non è un aiuto disponibile per questa opzione',

	'HELP_DL_ANTISPAM'		=> 'Questa opzione blocca i downloads per i quali l’utente deve avere il valore richiesto di traffico in rapporto al numero dei messaggi inviati e inseriti nelle ultime ore.<br /><br />Esempio:<br />La configurazione contiene 25 messaggi nelle ultime 24 ore.<br />Sulla base di queste impostazioni saranno bloccati i downloads se l’utente invierà 25 o più messaggi nelle ultime 24 ore.<br />Questa impostazione previene lo spamming dei downloads, soprattutto per i nuovi utenti, prime che un membro del team sia a conoscenza e prenda i giusti provvedimenti.<br />Il download sarà ancora mostrato come disponibile, ma verrà visualizzato un messaggio relativo alla mancanza di autorizzazioni.<br /><br />Per disabilitare la funzione impostare il valore di 0.',	
	'HELP_DL_APPROVE' => 'Con questo modulo puoi approvare immediatamente i downloads inviati.<br />Finchè non sarà approvato il download sarà nascosto agli utenti.',
	'HELP_DL_APPROVE_COMMENTS' => 'Se disattivi questa opzione, ogni nuovo commento deve essere approvato da un moderatore o dall’amministratore prima che gli altri utenti possono vederlo.',
	
	'HELP_DL_BUG_TRACKER_CAT' => 'Attiva il Bug Tracker per il download in questa categoria.<br />Se il bug tracker è consentito i relativi bugs possono essere inviati e visti da ogni utente registrato per i relativi downloads.<br />Solo gli amministratori e moderatori possono gestire i bugs.<br />Per ogni cambiamento sui messaggi bugs, l’autore riceverà un messaggio di posta elettronica, sarà informato anche il membro del team che opera per il bug.',

	'HELP_DL_CAT_DESCRIPTION' => 'Una breve descrizione per questa categoria.<br />BBCodes non sono disponibili qui.<br />Questa descrizione sarà visualizzata sul download e nelle sottocategorie.',
	'HELP_DL_CAT_ICON' => 'L’icona associata alla categoria caricata nel tuo forum. Es. nella cartella /images/dl_icons/ (La cartella deve essere creata prima che le icone vengano caricate in essa).<br />Aggiungi l’URL relativo della tua root, es. images/dl_icon.gif.<br /><br />Usa solo icone che possono essere visualizzate da un web browser.<br />Ti raccomandiamo di usare icone JPG, GIF o PNG.<br />Usa dimensioni appropriate per le icone per evitare di visualizzare in modo anomalo l’indice dei tuoi downloads, le immagini non sono ridimensionate prima dell’uso.',	
	'HELP_DL_CAT_NAME' => 'Questa è il nome della categoria che sarà mostrata.<br />Cerca di evitare caratteri speciali per evitare di confondere le voci in jumpbox.',
	'HELP_DL_CAT_PARENT' => 'Possono essere uniti il livello principale o di un altra categoria.<br />Con questa dinamica casella a discesa è possibile costruire strutture gerarchiche per i tuoi download.',
	'HELP_DL_CAT_PATH' => 'Qui è necessario inserire un percorso per i tuoi download.<br />Questo valore deve essere il nome di una sottocartella sotto la cartella principale (es .downloads/) che è stato definito nella configurazione principale.<br />Inserisci qui la cartella con uno slash alla fine.<br />Ad esempio, se esiste la cartella "downloads/mods/" devi inserire nella categoria il percorso "mods/".<br />Se si invia il presente modulo, sarà utilizzata la cartella selezionata.<br />Assicurati che la cartella selezionata esista!<br />Se la cartella è una sottocartella di una sottocartella, inserisci qui il percorso completo della gerarchia.<br />Es. "downloads/mods/misc/" deve inserito nel percorso "mods/misc/".<br />La cartella deve avere i chmod impostati a 777.',
	'HELP_DL_CAT_RULES' => 'Le regole verranno visualizzate nelle sotto-categorie e nei downloads durante la visualizzazione della categoria.',
	'HELP_DL_CAT_TRAFFIC' => 'Aggiungi il massimo traffico mensile per questa categoria.<br />Questo traffico non aumenta il traffico massimo!<br />Aggiungi 0 se non vuoi impostare limiti.',
	'HELP_DL_CHOOSE_CATEGORY' => 'Scegli la categoria che include il download.<br />Il file deve essere già stato salvato nella cartella che hai inserito nella categoria di gestione prima di salvare il download.<br />Altrimenti otterrai un messaggio di errore.',
	'HELP_DL_COMMENTS' => 'Attiva il sistema dei commmenti per questa categoria.<br />Gli utenti possono possibile visualizzare i commenti in questa categoria.<br />Amministratori e moderatori possono modificare e cancellare tutti i commenti, gli autori possono modificare il loro testo.',
	'HELP_DL_COPY_PERMISSIONS' => 'Copie le autorizzazioni nella categoria selezionata.<br />Se si è selezionata la categoria madre in questa categoria saranno utilizzati i permessi dalla categoria che sono stati selezionati in precedenza, in questo modo le categorie saranno unite.<br />Se la categoria madre è l’indice, questa categoria non copia le sue autorizzazioni. In questo caso, scegli una categoria o imposta le autorizzazioni per questa categoria con il modulo Autorizzazioni.',
	
	'HELP_DL_DELAY_AUTO_TRAFFIC' => 'Inserisci qui i giorni che un nuovo attenderà per il rinnovo del traffico automatico.<br />Il ritardo inizia con il giorno della data di registrazione.<br />Scrivi 0 per disabilitare il ritardo.',
	'HELP_DL_DELAY_POST_TRAFFIC' => 'Inserisci qui il numero di giorni dopo che un nuovo utente riceverà il primo traffico per i messaggi.<br />Il ritardo inizia con il giorno della data di registrazione.<br />Scrivi 0 per disabilitare il ritardo.',
	'HELP_DL_DISABLE_EMAIL' => 'Con questa opzione è possibile attivare o disattivare completamente le notifiche e-mail sulle nuove aggiunte o modificate dei downloads.<br />Anche se questa funzione è attivata qui, può essere disattivata individualmente quando aggiungi o modifichi un download.<br />Solo l’utente riceverà una e-mail se avrà attivato le notifiche sui nuovi o modificati downloads.<br />Essi potranno aprire la loro configurazione dalla pagina dei downloads.',
	'HELP_DL_DISABLE_EMAIL_FILES' => 'Scegli questa opzione per disattivare le notifiche via email.<br />Questo non pregiudica la notifica dei nuovi aggiornamenti relativi al forum.',
	'HELP_DL_DISABLE_POPUP' => 'Con questa opzione è possibile attivare o disattivare completamente le notifiche popup nel forum di testa sui nuovi download aggiunti o modificati.<br />Anche se questa funzione è attivata qui, può essere disattivata individualmente quando aggiungi o modifichi un download.<br />Solo l’utente riceverà una e-mail se avrà attivato le notifiche sui nuovi o modificati downloads.<br />Essi potranno aprire la loro configurazione dalla pagina dei downloads.',
	'HELP_DL_DISABLE_POPUP_FILES' => 'Scegli questa opzione se desideri disattivare la notifica popup dei messaggi forum.<br />Questo non pregiudica la notifica dei nuovi aggiornamenti relativi al forum.',
	'HELP_DL_DISABLE_POPUP_NOTIFY' => 'Se questa opzione è attivata, puoi disattivare o cambiarla aggiungendo o modificando un download.',
	'HELP_DL_DROP_TRAFFIC_POSTDEL' => 'Se un messaggio o un argomento verrà eliminato, questa opzione può il traffico degli autori, (cancella un argomento di un’autore sempre con rispetto!).<br />',

	'HELP_DL_EDIT_OWN_DOWNLOADS' => 'Se attivi questa opzione, ogni utente può modificare i propri file caricati senza essere un amministratore o moderatore.',
	'HELP_DL_EDIT_TIME' => 'Inserisci qui il numero di giorni e per quanto tempo uno download modificato sarà segnato.<br />Scrivi 0 per disabilitare questa funzione.',
	'HELP_DL_ENABLE_POST_TRAFFIC' => 'Impostare la quantità di traffico che un utente riceverà per la creazione di nuovi temi, come risposta o citazione nelle prossimi due opzioni.',
	'HELP_DL_ENABLE_TOPIC'	=> 'Permette di creare un argomento automatico per ogni nuovo download, che sarà inserito e aggiunto nel forum specificato in "Seleziona forum nuovo argomento" e con un determinato testo preimpostato. Per scaricare i file devono essere approvati prima di essere visualizzati, l’argomento viene creato nel pannello di moderazione.',
	'HELP_DL_EXT_NEW_WINDOW' => 'Apri downloads esterni in una nuova finestra del browser o nella stessa finestra.',
	'HELP_DL_EXTERN' => 'Attiva questa funzione per un altro file che entra nel campo di cui sopra (http://www.example.com/media.mp3).<br />La funzione "libero" diventa insignificante.',
	'HELP_DL_EXTERN_UP' => 'Attiva questa funzione per un altro file che entra nel campo di destra (http://www.example.com/media.mp3).<br />La funzione "libero" diventa insignificante.',

	'HELP_DL_FILE_DESCRIPTION' => 'Una breve descrizione per questo download.<br />Verrà visualizzato nella categoria dei file da scaricare.<br />BBCodes sono disabilitati qui.<br />Aggiungi un breve testo.',
	'HELP_DL_FILES_URL' => 'Il nome del file per questo download.<br />Immettere il nome di un percorso di file o slash.<br />il file deve esistere, altrimenti riceverai un messaggio di errore.<br />Nota estensioni vietate di file: ogni file che ha un’estensione sarà vietato e bloccato.',
	
	'HELP_DL_GUEST_STATS_SHOW' => 'Questa opzione include o esclude i dati statistici sui clients nella categoria statistiche.<br />Lo script continua a raccogliere tutti i dati.<br />Le statistiche ACP visualizzano sempre tutti i dati statistici.',

	'HELP_DL_HACK_AUTOR' => 'L’autore per questo download.<br />Lascia il campo vuoto per nascondere questo valore nei dettagli del download.',
	'HELP_DL_HACK_AUTOR_EMAIL' => 'L’indirizzo email dell’autore.<br />Se non viene aggiunto, il downloads diventerebbe nascosto e non sarebbe visto globalmente.',
	'HELP_DL_HACK_AUTOR_WEBSITE' => 'Sito web dell’autore.<br />L’URL dovrebbe essere il sito dell’autore, non la pagina per il download.<br />Non inserire link protetti o siti web di dubbia attendibilità.',
	'HELP_DL_HACK_DL_URL' => 'La pagina alternativa per scaricare questo file.<br />Può essere il sito web dell’autore o un altro sito alternativo.<br />Non inserire links diretti se l’autore non lo permette.',
	'HELP_DL_HACK_VERSION' => 'L’annuncio relativo al rilascio del download.<br />Sarà sempre visualizzato accanto al download.<br />Non è per questa ricerca.',
	'HELP_DL_HACKLIST' => 'Con questa opzione è possibile aggiungere il download nella hacklist (deve essere attivato nella configurazione generale) se scegli Si qui.<br />N. non inserire il download nella hacklist.<br />Risultati extra sono visualizzati nelle informazioni relative al dettaglio download.',
	'HELP_DL_HOTLINK_ACTION' => 'Qui puoi scegliere, come il download dovrebbe reagire, mentre impedisce un link diretto al download (vedi anche l’ultima opzione).<br />Visualizzerà un messaggio di introduzione (riduce il carico del server) o il download di redirect (produce ulteriore traffico).',

	'HELP_DL_ICON_FREE_FOR_REG' => 'Questa opzione visualizza un’icona bianca per i downloads agli ospiti (il download è gratuito generalmente per gli utenti registrati).<br /> Se si disattiva questa opzione, gli ospiti potranno vedere un icona rossa invece di una bianca.',
	'HELP_DL_IS_FREE' => 'Attiva questa funzione se il download deve essere libero per il per tutti.<br />Il traffico degli accounts non verrà utilizzato.<br />Scegli libero per utenti registrati per attivare il libero download solo per gli utenti registrati.',

	'HELP_DL_KLICKS_RESET' => 'Con questa opzione è possibile ripristinare i clics a zero.<br />Questo è utile se si vuole controllare i clics dopo aver cambiato il file.',
 
	'HELP_DL_LATEST_COMMENTS' => 'Questa opzione visualizza gli ultimi commenti. Scrivi 0 per disabilitare questa funzione.',
	'HELP_DL_LIMIT_DESC_ON_INDEX' => 'Taglia la descrizione entro un certo numero di caratteri.<br />Scrivi 0 per disabilitare questa funzione.',
	'HELP_DL_LINKS_PER_PAGE' => 'Questa opzione controlla come molti downloads saranno visualizzati su ogni pagina e nelle statistiche ACP.<br />Nella hacklist l’impostazione consigliata è "argomenti per pagina".',

	'HELP_DL_METHOD' => 'Il "vecchio" metodo invierà il file direttamente sul web client.<br />Questo metodo è compatibile con la maggior parte degli ambienti web, ma non può visualizzare la vera dimensione del file durante il download, non può quindi calcolare precisamente il tempo restante per lo scaricamento.<br />Il "nuovo" metodo visualizza la reale dimensione del file, ma può produrre errori.<br />Usa il "vecchio" metodo, se hai problemi con quello nuovo.<br />Se non funziona correttamente, seleziona la casella di controllo "diretto" per collegare direttamente il download del file sul server, se questo sarà troppo grande rispetto al limite di memoria di PHP.',
	'HELP_DL_METHOD_QUOTA' => 'Imposta la dimensione del file qui che deve essere letta come un grande file se si è scelto il "nuovo" metodo di download.<br />Sotto questa quota il file sarà scaricato dalla lettura del file (), e sarà dirottato al web client.',
	'HELP_DL_MOD_DESC' => 'La descrizione dettagliate per il MOD inserito.<br />Non puoi usare BBCodes e Smilies in questo testo.<br />Le linee di testo saranno formattate.<br />Il testo inserito sarà visualizzato nel dettaglio del download.',
	'HELP_DL_MOD_DESC_ALLOW' => 'Abilita il mod informazioni mentre aggiungi o modifichi un download.',
	'HELP_DL_MOD_LIST' => 'Attiva questo blocco nel dettaglio del download.<br />Se non attivi questa opzione, il blocco completo non potrà essere visualizzato.',
	'HELP_DL_MOD_REQUIRE' => 'Mods o altre informazioni che un utente deve leggere per installare o utilizzare questo download.<br />Il testo utilizzato sarà visualizzato nel dettaglio del download.',
	'HELP_DL_MOD_TEST' => 'Dichiarazione che il mod è stato testato con successo su phpBB.<br />Basta inserire il rilascio, da parte del consiglio di prova.<br />Lo script visualizza esso in un phpBB X, quindi è necessario inserire solo qui X.<br />Il testo inserito sarà visualizzato nel dettaglio del download.',
	'HELP_DL_MOD_TODO' => 'Qui puoi inserire i prossimi progetti che hai in programma per quest MOD a cui attualmente stai lavorando.<br />Verrà creata una ToDo list (cose da fare) che può essere aperta nel footer downloads.<br />Con questo testo l’utente può essere informato sulle ultime noovità di questo MOD.<br />Le linee saranno formattate, BBCodes non è disponibile qui.<br /> La ToDo list continuerà ad essere compilata anche se questo blocco verrà disattivato.',
	'HELP_DL_MOD_WARNING' => 'Importanti consigli su questo MOD, che deve essere considerato per l’installazione, utilizzando interazioni con altri MODs.<br />Il testo sarà visualizzato nel dettaglio del download, e sarà formattato con altri colori (per default il colore è rosso).<br />Le linee di testo saranno formattate.<br />BBCodes non è disponibile qui.',
	'HELP_DL_MUST_APPROVE' => 'Attiva questa opzione per approvare i nuovi uploaded o download prima che siano visualizzati in questa categoria.<br />Amministratori e moderatori riceveranno una mail per i nuovi downloads approvati.',
		
	'HELP_DL_NAME' => 'Questo è il nome del download, che sarà visualizzato in diversi luoghi.<br />Cerca di non inserire caratteri speciali per eliminare la possibilità di visualizzare errori.',
	'HELP_DL_NEW_TIME' => 'Inserisci qui il numero di giorni in cui un nuovo download deve essere contrassegnato.<br />Scrivi 0 per disabilitare questa funzione.',
	'HELP_DL_NEWTOPIC_TRAFFIC' => 'Per ogni nuovo argomento inviato l’autore riceverà traffico in più.',
	'HELP_DL_NO_CHANGE_EDIT_TIME' => 'Seleziona questa opzione per eliminare l’ultimo aggiornamento di tempo per modificare il download.<br />Questo non pregiudica la notifica delle email per i nuovi aggiornamenti del forum.',
	
	'HELP_DL_OFF_HIDE_EXPLAIN'			=> 'Nascondi il link nella navigazione della board.<br />In caso contrario, l’area download visualizza solo un messaggio.',
	'HELP_DL_OFF_NOW_TIME_EXPLAIN'		=> 'Attiva il download immediatamente o disattiva il download regolarmente tra il periodo di tempo seguente.',
	'HELP_DL_OFF_TIME_PERIOD_EXPLAIN'	=> 'Periodo di tempo in cui il sarà automaticamente disattivato.',
	'HELP_DL_ON_ADMINS_EXPLAIN'			=> 'Permette agli amministratori della board di entrare nei downloads e lavorare anche se la mod download è disattivata.<br />In caso contrario saranno bloccati anche gli amministratori.',	
	'HELP_DL_OVERALL_TRAFFIC' => 'Il limite per gli utenti registrati relativo a tutti i download e, se abilitato, tutti i downloads che non possono essere superati nel mese in corso.<br />Dopo aver raggiunto questo limite, ciascun download sarà bloccato e, se attivato, sarà impossibile l’upload.',
	'HELP_DL_OVERALL_GUEST_TRAFFIC' => 'Il limite per gli ospiti relativo a tutti i download e, se abilitato, tutti i downloads che non possono essere superati nel mese in corso.<br />Dopo aver raggiunto questo limite, ciascun download sarà bloccato e, se attivato, sarà impossibile l’upload.',

	'HELP_DL_PHYSICAL_QUOTA' => 'Il limite fisico del MOD sarà in grado di utilizzare per salvare e gestire i download.<br />Se tale limite viene raggiunto, nuovi downloads possono essere aggiunti solo quando sono stati caricati con un client FTP e sono stati aggiunti con la gestione dei files sull’ACP.',
	'HELP_DL_POSTS' => 'Ogni utente, anche amministratore o moderatore, deve avere inviato un numero minimo di messaggi per poter scaricare nuovi downloads gratuitamente.<br />Si raccomanda di installare un Anti Spam MOD, per evitare lo spamming degli autori.<br />Scrivi 0 per disabilitare questa funzione. raccomandato per nuovi forum.',
	'HELP_DL_PREVENT_HOTLINK' => 'Attiva questa opzione, se vuoi evitare ogni download diretto dal link tranne il download nei dettagli.<br />Questa opzione <b>non</b> crea una cartella protetta!',
	
	'HELP_DL_REPLY_TRAFFIC' => 'L’utente riceverà nuovo traffico per ogni risposta data o citazione fatta.',
	'HELP_DL_REPORT_BROKEN' => 'Accendere o spegnere questa funzione per attivare o disattivare il report dei downloads errati.<br />Se impostato su "non per gli ospiti", solo gli utenti registrati possono inviare report ai downloads.',
	'HELP_DL_REPORT_BROKEN_LOCK' => 'Se si attiva questa opzione, il download sarà bloccato mentre è segnalato come errato.<br />La funzione nasconde il pulsante di download e l’utente non potrà scaricare il file fino a quando un amministratore o moderatore sbloccherà il download.',
	'HELP_DL_REPORT_BROKEN_MESSAGE' => 'Se il download è stato segnalato come errato sarà visualizzato un messaggio.<br />Se attivi questa opzione, il messaggio è unico mentre il download è bloccato.<br />In questo caso non sotto il pulsante di download.',
	'HELP_DL_REPORT_BROKEN_VC' => 'Attiva un codice di sicurezza se un’utente segnala un download errato.<br />Solo se il codice è corretto il rapporto viene salvato e amministratori o moderatori saranno informati con una e-mail.',

	'HELP_DL_SHORTEN_EXTERN_LINKS' => 'Inserisce la lunghezza della visualizzazione sul link per il download nei dettagli.<br />Basato sulla lunghezza del collegamento potrebbe essere tagliato a metà o essere accorciato a partire dalla parte di destra.<br />Lascia questo campo vuoto oppure scrivi 0 per disabilitare questa funzione.',
	'HELP_DL_SHOW_FOOTER_LEGEND' => 'Questa opzione visualizza una legenda con icone di stato sulla pagina di download.<br />Le icone che si trovano accanto al download non saranno modificate da questa opzione.',
	'HELP_DL_SHOW_FOOTER_STAT' => 'Questa opzione visualizza la statistica sulle linee footer del download.<br />.',
	'HELP_DL_SHOW_REAL_FILETIME' => 'Con questa opzione è possibile visualizzare il tempo per scaricare il file nei dettagli del download.<br />E’ il tempo esatto per caricare con un client FTP il download.',
	'HELP_DL_SORT_PREFORM' => 'L’opzione "Preset" ordina tutti i download in tutte le categorie, come per tutti gli utenti che sono ordinati nel tuo ACP.<br />Con l’opzione "Utente" ogni utente può scegliere come i download verranno ordinati e se questa sarà la scelta ad altri criteri di ordinamento.',
	'HELP_DL_STAT_PERM' => 'Seleziona qui il livello utente da cui l’utente può visualizzare la pagina di statistica.<br />Es. se permetterai di scaricare a moderatori e amministratori puoi aprire e visualizzare questa pagina.<br />Nota bene che questa pagina può produrre un pesante carico, per cui noi raccomandiamo di non aprirla alle masse, se disponi di un grande forum o gestisci molti download.',
	'HELP_DL_STATISTICS' => 'Attiva la visualizzazione delle statistiche nei files.<br />Nota bene, l’attivazione delle statistiche produce traffico addizionale nel database con aumento di dati e queries nelle tabelle.',
	'HELP_DL_STATS_PRUNE' => 'Aggiunge il numero di righe di dati della statistica per questa categoria.<br />Ogni nuova riga elimina la più vecchia.<br />Scrivi 0 per disabilitare la cancellazione.',
	'HELP_DL_STOP_UPLOADS' => 'Con questa opzione puoi attivare o disattivare l’uploads.<br />Se disattivi questa opzione, solo gli amministratori possono attivare l’upload di nuovi files.<br />Attiva questa opzione per consentire agli utenti di caricare a seconda della categoria e dei permessi.',
	
	'HELP_DL_THUMB' => 'Questo campo può caricare una piccola immagine (nota la dimensione del file visualizzato) visualizzabile nel dettaglio del download.<br />Se esiste già un thumbsnail, è possibile caricane uno nuovo e sostituirlo.<br />Controlla l’anteprima esistente per "eliminarla".',
	'HELP_DL_THUMB_CAT' => 'Questa opzione attiva l’anteprima del download in questa categoria.<br />La dimensione di queste immaggini è basata sulla configurazione di questo MOD.',
	'HELP_DL_THUMB_MAX_DIM' => 'Questo valore limita le dimensioni delle immagini caricate nelle miniature.<br />Scrivi 0 per disabilitare le miniature (non raccomandato).<br />Le miniature esistenti saranno visualizzate fino a quando il valore non sarà impostato a 0.',
	'HELP_DL_THUMB_MAX_SIZE' => 'Aggiungi 0 per disabilitare le miniature in questa categoria.<br />Se attivi le miniature, allora aggiungi la dimensione delle immaggini per le nuove miniature.<br />Se disattivi le miniature non potrai vedere le esisistenti miniature nei dettagli del download.',
	'HELP_DL_TODO_LINK' => 'Mostra o meno un link con la lista di cose da fare nella pagina del footer.',
	'HELP_DL_TOPIC_DETAILS' => 'Mostra la descrizione del download, il nome del file, la dimensione o i downloads esterni nell’argomento del forum.<br />Il testo può essere collocato sopra o dopo il testo precedente.<br />Se l’argomento viene creato sulle categorie dei downloads l’opzione nella configurazione generale viene ignorata.',
	'HELP_DL_TOPIC_FORUM'	=> 'Il forum che mostra i nuovi argomenti sul download.',
	'HELP_DL_TOPIC_FORUM_C'	=> 'Il forum che consente di visualizzare gli argomenti nuovi per il download da questa categoria.',
	'HELP_DL_TOPIC_TEXT'	=> 'Testo libero per creare argomenti relativi ai downloads. BBCodes, HTML e smileys non sono consentiti perchè il testo deve essere utilizzato solo per introdurre l’argomento.',
	'HELP_DL_TOPIC_USER'	=> 'Seleziona se l’utente deve essere l’autore degli argomenti del download.<br />Se l’attuale utente deve essere l’autore dell’argomento devi selezionare l’opzione utente corrente. L’opzione selezionata per categoria permette di scegliere per ogni categoria un utente argomento utente separatamente. Questo è raccomandato per l’opzione "Seleziona ID utente".<br /><br /><strong>Suggerimento:</strong><br />L’ID utente non sarà controllato dal download stessa mod, quindi una mancata identificazione può interrompere le funzioni!',	
	'HELP_DL_TRAFFIC' => 'Il massimo traffico consentito.<br />Il valore 0 disabilita il controllo del traffico.',
	'HELP_DL_TRAFFIC_OFF' => 'Disabilita la gestione del traffico in area download e disattiva tutte le opzioni per il traffico.<br />Attivando questa opzione verranno nascosti tutti i testi per il traffico download nel forum e non vengono considerati i limiti di traffico. Allo stesso modo durante il download e caricamento i dati sul traffico non si modificano più.<br />Modifiche al traffico degli utenti durante la scrittura o la cancellazione di messaggi non sono accettati anche gli account utente.<br />Il traffico non sarà più assegnato automaticamente agli utenti, se questa opzione è disattivata. Tuttavia gli utenti o membri del gruppo possono ancora ottenere il traffico con il modulo di gestione del traffico in ACP.<br />Solo in ACP tutti i moduli, i testi e le funzioni per la gestione del traffico resterà invariati.',

	'HELP_DL_UCONF_LINK' => 'Switch the link for the user configuration in the download footer on or off. >The user configuration are not affected while changing this option.',	
	'HELP_DL_UPLOAD_FILE' => 'L’upload di file dal computer.<br />La dimensione del file sarà più piccola come estensione e il file non inclusi nell’elenco visualizzabile sotto questo campo.',
	'HELP_DL_UPLOAD_TRAFFIC_COUNT' => 'Se l’opzione è attivata, si arriva in modo graduale al raggiungimento del traffico globale, anche.<br />Quando il limite globale non è ancora raggiunto, è possibile caricare e scaricare nuovi download scaricabili con un client FTP o aggiunto nell’ACP.',
	'HELP_DL_USE_EXT_BLACKLIST' => 'Se si attiva la "lista nera" tutti i file iscritti saranno bloccati per i nuovi downloads.',
	'HELP_DL_USE_HACKLIST' => 'Questa opzione può essere attivata o disattivata.<br />Se è attivata, puoi aggiungere le informazioni relative alla lista nera.<br />Se disattivata, sarà completamente nascosta.<br />Nota bene, ogni hack di informazioni nei downloads andranno perduti, se modifichi il file nell’elenco disattivato.',
	'HELP_DL_USER_TRAFFIC_ONCE' => 'Scegli se l’utente può diminuire il traffico per il download di un file (solo la prima volta).<br /><b>Considera:</b><br />che questa opzione non modifica lo stato del download!',

	
	'HELP_DL_VISUAL_CONFIRMATION' => 'Attiva questa opzione per permettere all’utente di accedere al downlod visualizzando un codice di conferma di 5 cifre.<br />Se l’utente non scrive il codice o esso è errato il MOD appena visualizzato comunica un messaggio di arresto e il download viene bloccato.',

	'HELP_DOWNLOAD_PATH' => 'Il percorso relativo della tua root phpBB <br />In sede di prima installazione di questo pacchetto trovi il valore "dl_mod/downloads/".<br />Considera che i nomi sono "case sensitive".<br />Lo slash alla fine della cartella non è importante, ma non aggiungerlo all’inizio.<br />Questa e tutte le sottocartelle devono essere settate con Chmod 777.<br />Nell’ambito di questa cartella puoi creare uno o più sottocartelle che contengono tutti i file fisici.<br />E’ raccomandato creare sottocartelle con gruppi logici di categorie.<br />Le sottocartelle devono essere inserite nel percorso della categoria con la stessa sintassi della cartella principale.<br />Puoi creare altre sottocartelle con il tuo client ftp o usando la gestione files (vedi il link sulla pagina). Il percorso dei downloads può anche essere diverso dalla configurazione di default, è importante che dopo ogni download inviato via ftp sia configurato con gestione files.',

	'HELP_NUMBER_RECENT_DL_ON_PORTAL' => 'Il numero dell’ultimo download che l’utente ha visto sul portale.<br />Il blocco usa l’ultima modifica di tempo della lista, in modo che possa essere possibile avere un vecchio download in cima a questa lista.',
));

?>