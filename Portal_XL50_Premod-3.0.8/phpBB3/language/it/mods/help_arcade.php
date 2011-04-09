<?php
/**
*
* help_arcade [Italian]
*
* @package language
* @version $Id: help_arcade.php 810 2009-07-04 17:03:48Z JRSweets $
* @copyright (c) 2008 JeffRusso.net
* @copyright (c) 2009, 2010 luckylab.eu - revision for portal xl on 2010/11/30
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
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

$help = array(
	array(
		0 => '--',
		1 => 'Generale',
	),
	array(
		0 => 'Quali caratteristiche sono incluse nella salagiochi?',
		1 => '<ul><li>Supporto estensivo ai giochi</li>
		<li>Illimitate Categorie, Sotto-Categorie e Link (come un forum phpbb3)</li>
		<li>Moduli nel PCA e nel PCU</li>
		<li>Permessi di Amministratore per i moduli del PCA</li>
		<li>Permessi categorie locali</li>
		<li>Categorie protette con password</li>
		<li>Semplice installazione dei giochi</li>
		<li>Automaticamente converte file tar dei giochi IBPro</li>
		<li>Integrato nel Chi c’ e’ in linea di PHPBB</li>
		<li>Mostra chi sta giocando</li>
		<li>Sistema dei giochi preferiti</li>
		<li>Sistema per il download dei giochi</li>
		<li>Statistiche</li>
		<li>Punteggi</li>
		<li>Commenti</li>
		<li>Possibilita’ di giocare normalmente o in un popup</li>
		<li>Funzione di ricerca</li>
		<li>Integrazione con Points System</li>
		<li>E tanto altro....</li></ul>',
	),
	array(
		0 => 'Quali stili sono supportati?',
		1 => '<ul>
		<li>Prosilver</li>
		<li>Subsilver2</li>
		<li><a href="http://www.phpbb.com/styles/db/index.php?i=misc&mode=display&contrib_id=7525">prosilver Special Edition</a></li>
		<li><a href="http://www.phpbb.com/styles/db/index.php?i=misc&mode=display&contrib_id=8885">revolution</a></li>
		</ul>',
	),
	array(
		0 => 'Quali lingue sono incluse?',
		1 => 'I file di linguaggio disponibili per l’ attuale versione dell’arcade si trovano <a href="http://www.jeffrusso.net/forum/viewtopic.php?f=26&t=1329">qui</a>.',
	),
	array(
		0 => 'E per le altre lingue e gli altri stili?',
		1 => 'Se traduci la phpBB Arcade nella tua lingua o crei il template per un altro stile apprezzerei che me li inviassi <a href="http://www.jeffrusso.net/forum/viewforum.php?f=25">qui</a>Ricorda che molti stili sono basati su prosilver o subsilver2 e che quindi nella maggior parte dei casi ti basterà caricare i file del template rispettivo.',
	),
	array(
		0 => '--',
		1 => 'Installazione/Aggiornamento',
	),
	array(
		0 => 'Quali database sono supportati?',
		1 => 'La salagiochi dovrebbe funzionare correttamente con ogni database supportato da phpBB3.',
	),
	array(
		0 => 'Come installo la phpBB Arcade?',
		1 => 'Ci sono poche modifiche da effettuare al core di phpBB3 ed e’ incluso un installer che pensa al database e ai moduli del PCA e PCU.  Assicurati di seguire le istruzioni del file ModX per le modifiche al core ed allo stile.',
	),
	array(
		0 => 'Come disinstallo la phpBB Arcade?',
		1 => 'Rimuovi le modifiche effettuate ai file ed esegui l’installer scegliendo l’opzione per disinstallare la salagiochi.',
	),
	array(
		0 => 'Come aggiorno phpBB Arcade all’ultima versione?',
		1 => 'Scarica l’ultimo pacchetto.  Carica tutti i file sovrascrivendo quelli vecchi. Apri i file modx di aggiornamento ed esegui le modifiche.  A questo punto esegui lo script di installazione.  Scegli tra le opzioni l’aggiornamento all’ultima versione e, una volta completato, sposta, rinomina o rimuovi la cartella arcade_install folder dal tuo server.<br /><br />Quindi se vuoi, ad esempio, aggiornare dalla versione 1.0.RC4 alla versione 1.0.RC6:
<ul><li>Carichi tutti i nuovi file, sovrascrivendo quelli vecchi</li>
<li>Cerchi nella cartella contrib il file <strong>update10RC4-10RC5.xml</strong> e segui le istruzioni, successivamente il file <strong>update10RC5-10RC6.xml</strong>.</li>
<li>Esegui lo script di installazione e scegli di aggiornare all’ultima versione</li></ul>',
	),
	array(
		0 => 'Come posso controllare di aver fatto tutto bene?',
		1 => 'Assicurati di avere l’ultima versione. Apri lo script di installazione nel tuo browser e clicca sul tab "Verifica"; in questo modo verrà eseguito un controllo sull’installazione.',
	),
	array(
		0 => '--',
		1 => 'Punteggi',
	),
	array(
		0 => 'Perche’ il mio punteggio non viene salvato?',
		1 => 'La prima cosa da controllare e’ che il tipo di gioco sia supportato dalla salagiochi e che la variabile di punteggio e’ configurata correttamente.  Altra cosa da controllare e’ assicurarsi che hai modificato l’ <strong>index.php</strong> correttamente.  Se non modificato correttamente i giochi IBPro non invieranno punteggi. Infine bisogna controllare le impostazioni dei cookie nel PCA.  Se l’url del tuo sito e’ <strong>http://www.esempio.com</strong> il dominio di cookie dovrebbe essere <strong>.esempio.com</strong>.',
	),
	array(
		0 => 'Perche’ subito dopo aver giocato viene mostrato questo messaggio: "Il metodo di invio del punteggio non corrisponde al tipo di gioco"?',
		1 => 'Il tipo di punteggio non e’ impostato correttamente per quel gioco.  Se vedi il log errori nel PCA dovresti vedere il gioco.  Cerca un errore del tipo "Punteggio inviato e memorizzato non corrispondono". Vedrai il tipo di punteggio del gioco(corretto) e il tipo di punteggio inviato(sbagliato).  Modifica il gioco per impostare il corretto tipo di punteggio.',
	),
	array(
		0 => 'Perche’ gli ospiti non possono inviare i punteggi anche se hanno i permessi impostati correttamente?',
		1 => 'Anche se assegni i permessi il gruppo ospiti non potra’ comunque inviare punteggi. Questo e’ a priori.',
	),
	array(
		0 => '--',
		1 => 'Giochi',
	),
	array(
		0 => 'Che tipo di giochi sono supportati?',
		1 => 'La salagiochi supporta i seguenti tipi di giochi:<br /><ul><li>Activity Mod</li><li>Arcade Room</li><li>V3 Arcade</li><li>IBPro</li><li>IBPro ArcadeLib</li><li>IBPro V3</li><li>Giochi senza punteggio</li></ul>',
	),
	array(
		0 => 'Qual e’ il modo piu’ facile per installare i giochi?',
		1 => 'Il modo piu’ semplice sarebbe usare i giochi che sono gia’ nella phpBB Arcade o nel formato tar IBPro.  Potresti anche usare pacchetti di giochi per l’Arcade room se contengono un file xml.  L’Arcade riconoscerà automaticamente il tipo di gioco che stai caricando o spacchettando e lo convertirà nel formato corretto per l’installazione.',
	),
	array(
		0 => 'Dove trovo i file arcadelib?',
		1 => '<ul><li><a href="http://www.jeffrusso.net/forum/viewtopic.php?f=20&amp;t=1503">Mirror 1</a></li>
		<li><a href="http://igames.origon.dk/forum/viewtopic.php?p=2118#p2118">Mirror 2</a></li>
		<li><a href="http://igames.origon.dk/forum/viewtopic.php?p=3696#p3696">Mirror 3</a></li></ul>',
	),
	array(
		0 => 'Quali sono i requisiti per l’installazione dei giochi?',
		1 => 'I giochi devono essere caricati (di default) <strong>http://www.example.com/phpBB/arcade/games/</strong> in una cartella che ha lo stesso nome del file swf . Se il file flash e’ <strong>test.swf</strong>.  All’interno di <strong>http://www.example.com/phpBB/arcade/games/</strong> dovra’ esserci una cartella chiamata <strong>test</strong>.<br /><br />All’interno di questa cartella dovranno essere presenti:<br /><ul><li>test.swf (flash)</li><li>test.gif (50px per 50 px)</li><li>test.php (file di installazione, se non e’ presente il gioco non puo’ essere installato)</li><li>index.htm (file html vuoto)</li></ul>',
	),
	array(
		0 => 'Come installo un gioco?',
		1 => 'Ci sono tre modi per installare un gioco.<br /><ul><li>Se scarichi il gioco usando il sistema di download della phpBB Arcade avrai un file compresso con le cartelle pronte per essere caricate via FTP su <strong>http://www.example.com/phpBB/arcade/install</strong> e installare il gioco nel PCA.</li><li>Se scarichi il gioco usando il sistema di download della phpBB Arcade avrai una cartella compressa che puoi caricare attraverso il PCA nel modulo Carica/Spacchetta. Una volta caricato il gioco verra’ spacchettato automaticamente e potrai aggiungerlo nella salagiochi.</li><li>Un’altra opzione consiste nel caricare tutti i file nelle corrette cartelle sul server e successivamente andare nel PCA e installare il gioco.</li></ul>',
	),
	array(
		0 => 'Posso creare un mio file compresso per installare un gioco?',
		1 => 'E’ molto semplice. Basta creare una cartella con lo stesso nome del file swf e inserire all’interno i file nomegioco.swf, nomegioco.gif, nomegioco.php e index.htm.  Zippare la acrtella ed assicurarsi che abbia lo stesso nome del file swf.',
	),
	array(
		0 => 'C’e’ un esempio di file di installazione?',
		1 => 'Esempio con file extra:<br />
<textarea rows="30" readonly="readonly" wrap="off"><?php
/**
*    File di installazione (How-to)
*
*    Di seguito ci sono i parametri da settare per l’installazione di un gioco nella
*    salagiochi. Attualmente non esiste un modo (e probabilmente non esistera’)
*    per installare manualmente un gioco dal PCA.
*
*    Hai bisogno di questo file per far si che il gioco possa essere installato attraverso il PCA.
*
*    Gli unici oggetti da impostare sono: nome del gioco, descrizione,
*    larghezza, altezza, tipo, tipo punteggio e file.
*
*    La salagiochi supporta 7 tipi di giochi. (Activity Mod, IBPro, IBPro arcadelib,
*    V3Arcade, IBProV3, Arcade room e giochi che non inviano punteggi)
*    Usa le seguenti costanti per il tipo:
*
* 	 AMOD_GAME
*	 AR_GAME
*	 IBPRO_GAME
*	 IBPRO_ARCADELIB_GAME
*	 V3ARCADE_GAME
*	 IBPROV3_GAME
*	 NOSCORE_GAME
*
*    Il tipo di punteggio dovrebbe essere SCORETYPE_HIGH o SCORETYPE_LOW
*    queste costanti sono gia’ definite nella classe principale della salagiochi.
*    SCORETYPE_HIGH riguarda i giochi nei quali il punteggio migliore e’
*    il piu’ alto.  SCORETYPE_LOW riguarda i giochi nei quali il
*    punteggio migliore e’ il piu’ basso.
*
*    L’oggetto game_files contiene un array dei file extra necessari
*    al gioco che non sono nella stessa cartella del gioco stesso.
*    Dovrebbero essere elencati senza la path dalla root di phpbb.
*
*    Il seguente esempio mostra 3 eventuali extra file:
*
*    ’game_files’        => array (
*        0    => ’arcade/gamedata/snake/scores.swf’,
*        1    => ’arcade/games/snake/scores.swf’,
*        2    => ’arcade/gamedata/games/snake/scores.swf’,
*    )
*
*    Se non ci sono extra file l’oggetto deve essere impostato su false:
*
*    ’game_files’        => false,
*/

if (!defined(’IN_PHPBB’))
{
	exit;
}

$game_file = basename(__FILE__, ’.’ . $phpEx);

$game_data = array(
	’game_name’			=> ’Snake’,
	’game_desc’			=> ’Mangia le mele e non scontrare i muri...o te stesso.’,
	’game_image’			=> $game_file.’.gif’,
	’game_swf’				=> $game_file.’.swf’,
	’game_scorevar’			=> $game_file,
	’game_type’			=> IBPROV3_GAME,
	’game_width’			=> 360,
	’game_height’			=> 300,
	’game_scoretype’			=> SCORETYPE_HIGH,
	’game_files’			=> array (
		0 	=> ’arcade/gamedata/snake/snake.txt’,
		1 	=> ’arcade/gamedata/snake/v3game.txt’,
	),
);
?></textarea><br /><br />
Esempio senza extra file:<br />
<textarea rows="30" readonly="readonly" wrap="off"><?php
/**
*    File di installazione (How-to)
*
*    Di seguito ci sono i parametri da settare per l’installazione di un gioco nella
*    salagiochi. Attualmente non esiste un modo (e probabilmente non esistera’)
*    per installare manualmente un gioco dal PCA.
*
*    Hai bisogno di questo file per far si che il gioco possa essere installato attraverso il PCA.
*
*    Gli unici oggetti da impostaresono: nome del gioco, descrizione,
*    larghezza, altezza, tipo, tipo punteggio e file.
*
*    La salagiochi supporta 7 tipi di giochi. (Activity Mod, IBPro, IBPro arcadelib,
*    V3Arcade, IBProV3, Arcade room e giochi che non inviano punteggi)
*    Usa le seguenti costanti per il tipo:
*
* 	 AMOD_GAME
*    AR_GAME
*	 IBPRO_GAME
*	 IBPRO_ARCADELIB_GAME
*	 V3ARCADE_GAME
*	 IBPROV3_GAME
*	 NOSCORE_GAME
*
*    Il tipo di punteggio dovrebbe essere SCORETYPE_HIGH o SCORETYPE_LOW
*    queste costanti sono gia’ definite nella classe principale della salagiochi.
*    SCORETYPE_HIGH riguarda i giochi nei quali il punteggio migliore e’
*    il piu’ alto.  SCORETYPE_LOW riguarda i giochi nei quali il
*    punteggio migliore e’ il piu’ basso.
*
*    L’oggetto game_files contiene un array dei file extra necessari
*    al gioco che non sono nella stessa cartella del gioco stesso.
*    Dovrebbero essere elencati senza la path dalla root di phpbb.
*
*    Il seguente esempio mostra 3 eventuali extra file:
*
*    ’game_files’        => array (
*        0    => ’arcade/gamedata/snake/scores.swf’,
*        1    => ’arcade/games/snake/scores.swf’,
*        2    => ’arcade/gamedata/games/snake/scores.swf’,
*    )
*
*    Se non ci sono extra file l’oggetto deve essere impostato su false:
*
*    ’game_files’        => false,
*/

if (!defined(’IN_PHPBB’))
{
	exit;
}

$game_file = basename(__FILE__, ’.’ . $phpEx);

$game_data = array(
	’game_name’			=> ’Snake’,
	’game_desc’			=> ’Mangia le mele e non scontrare i muri...o te stesso.’,
	’game_image’			=> $game_file.’.gif’,
	’game_swf’				=> $game_file.’.swf’,
	’game_scorevar’			=> $game_file,
	’game_type’			=> IBPROV3_GAME,
	’game_width’			=> 360,
	’game_height’			=> 300,
	’game_scoretype’			=> SCORETYPE_HIGH,
	’game_files’			=> false,
);
?></textarea>',
	),
	array(
		0 => 'Devo creare il file di installazione a mano?',
		1 => 'No, sebbene sia possibile, ci sono 2 strumenti nel PCA in Arcade che aiutano.<br /><ul><li>C’e’ uno strumento per creare e installare i file. Basta inserire tutte le informazioni richieste e sara’ possibile scaricare o mostrare il file di installazione.</li><li>There is a tool to download or view existing install files from the games already installed.</li></ul>',
	),
	array(
		0 => 'Devo elencare gli extra file nel file di installazione?',
		1 => 'Tecnicamente non devi elencare gli extra file per usare il gioco nella phpBB Arcade, ma se usi il sistema integrato di download non avrai il gioco completo scaricato. Il gioco non potra’ essere giocato da utenti che lo scaricheranno.',
	),
	array(
		0 => 'Sono ancora confuso... C’è un tutorial per installare giochi che non sono pacchettati correttamente?',
		1 => '<a href="http://www.jeffrusso.net/forum/files/downloads/flash/convert_game.zip">Scarica il file flash per visualizzarlo<a/>',
	),
	array(
		0 => 'Come cancello i giochi?',
		1 => 'Puoi cancellare i giochi cliccando sul modulo in PCA "Gestisci salagiochi". Puoi anche usare il modulo "Modifica giochi" e selezionare il gioco da eliminare. Ricorda che una volta che il gioco sarà cancellato, i file resteranno sul server e dovranno essere rimossi manualmente.',
	),
	array(
		0 => '--',
		1 => 'Moduli SalaGiochi nel PCA',
	),
	array(
		0 => 'Quali moduli ha la salagiochi nel PCA?',
		1 => '<ul>
		<li><strong>Gestione Impostazioni</strong> - Controllo delle impostazioni della salagiochi</li>
		<li><strong>Impostazioni di gioco</strong> - Controlla le impostazioni di gioco</li>
		<li><strong>Caratteristiche</strong> - Controlla le caratteristiche della salagiochi</li>
		<li><strong>Impostazioni di pagina</strong> - Controlla le impostazioni di pagina</li>
		<li><strong>Impostazioni path</strong> - Controlla le impostazioni di path</li>
		<li><strong>Guida utente</strong> - Mostra la guida utente</li>
		<li><strong>Gestione salagiochi</strong> - Aggiungi, modifica, elimina, sposta, sincronizza categorie e giochi</li>
		<li><strong>Aggiungi giochi</strong> - Aggiungi un gioco alla salagiochi, possono essere aggiunti piu’ giochi in una categoria simultaneamente</li>
		<li><strong>Scarica giochi</strong> - Scarica i giochi dai siti che permettono il download dei giochi</li>
		<li><strong>Modifica giochi</strong> - Modifica qualsiasi dettaglio di un gioco</li>
		<li><strong>Modifica punteggi</strong> - Modifica i punteggi di un gioco</li>
		<li><strong>Carica/Spacchetta giochi</strong> - Carica ed estrae i giochi scaricati ,dal sistema integrato di download, compressi(s) per installarli</li><li><strong>Aggiungi giochi</strong> - Installa giochi in una specifica categoria</li>
		<li><strong>Crea file di installazione gioco</strong> - Crea un nuovo file di installazione per essere scaricato/visualizzato/salvato sul server oppure scarica/visualizza gli esistenti file di installazione dei giochi</li>
		<li><strong>Statistiche Download</strong> - Visualizza le statistiche del sistema di download</li>
		<li><strong>Vedi errori</strong> - Visualizza gli errori registrati dalla salagiochi</li><li><strong>Scarica giochi</strong> - Scarica i giochi pronti per essere usati nella salagiochi</li>
		<li><strong>Vedi errori</strong> - Vedi i log errori</li>
		<li><strong>Vedi report</strong> - Vedi i report inviati dagli utenti sui giochi</li>
		<li><strong>Guida utente</strong> - Vedi la guida utente</li>
		<li><strong>Permessi</strong> - Moduli multipli per gestire e controllare i permessi locali delle categorie della salagiochi, similarmente ai permessi dei forum di phpBB</li></ul>',
	),
	array(
		0 => 'Come mai non vedo i moduli della salagiochi nel PCA?',
		1 => 'Per visualizzare tutti i moduli devi essere impostato come utente fondatore o avere i corretti permessi di amministrazione.  Se ancora non riesci a vedere i moduli allora probabilmente ci sono duplicati nelle opzioni auth all’interno della tabella acl_options.  Esegui il controllo installazione per una lista dei valori duplicati.',
	),
	array(
		0 => 'Dove imposto i permessi?/Perche’ non ho i permessi per vedere/usare la salagiochi?',
		1 => 'Subito dopo l’installazione, devi impostare i permessi. La salagiochi utilizza il sistema di permessi delle categorie che mima il sistema dei permessi forum di phpBB3, inclusi i ruoli. Inoltre, puoi usare i permessi di amministratore per impostare l’accesso agli utenti/gruppi alla salagiochi nei moduli del PCA.',
	),
	array(
		0 => 'Perche’ non posso aggiungere giochi?',
		1 => 'Per aggiungere giochi prima assicurati di aver creato delle categorie.  Usa il modulo <strong>Gestisci salagiochi</strong> nel PCA.  Crearle e’ simile alla creazione di forum in phpBB3.',
	),
	array(
		0 => 'Come permetto agli altri di scaricare i giochi?',
		1 => 'La possibilita’ di scaricare i giochi e’ controllata attraverso i permessi.  Imposta i permessi e gli utenti vedranno i link per scaricare i giochi.  Per rendere piu’ semplice la procedura puoi abilitare le impostazioni della lista di download dal PCA.  Cio’ permettera’ agli utenti di usare il Modulo "Scarica giochi" del PCA per scaricare i giochi dal tuo sito.',
	),
	array(
		0 => 'Come si usa il Modulo "Scarica giochi"?',
		1 => 'Basta inserire l’url alla root del forum phpBB del sito che offre il download dei giochi nella propria phpBB Arcade.  Vedrai la lista dei giochi disponibili per il download.  Se il gioco e’ evidenziato in verde significa che e’ gia’ presente sul tuo server. Ricorda che i download sono controllati dai permessi del sito che ospita i giochi.  Quindi probabilmente dovrai accedere o far parte del gruppo al quale e’ permesso il download.  Contatta l’amministratore del sito per qualsiasi domanda.<br /><br /><a href="http://img148.imageshack.us/my.php?image=dlgamesssuq3.png" target="_blank"><img src="http://img148.imageshack.us/img148/817/dlgamesssuq3.th.png" border="0" alt="Download games" /></a>',
	),
	array(
		0 => 'Perche’ il Modulo "Scarica giochi" non trova tutti i giochi?',
		1 => 'Questo modulo deve avere l’<strong>"allow_url_fopen"</strong> impostato su on o la libreria PHP <strong>cURL library</strong> installata.  Cio’ puo’ essere controllato dal phpinfo() del tuo server.  Se il valore per <strong>"allow_url_fopen"</strong> e’ su off e la <strong>cURL library</strong> non e’ installata il modulo non funzionera’.',
	),
	array(
		0 => '--',
		1 => 'Sistemi di punteggi',
	),
	array(
		0 => 'Quali sistemi sono supportati?',
		1 => '<ul>
		<li>Cash Mod</li>
		<li>Simple Points System</li>
		<li>Points System</li>
		</ul>',
	),
	array(
		0 => 'Come funziona l’integrazione?',
		1 => 'Puoi impostare un costo ed un premio per gioco, cetegoria o globale. Puoi anche usare una combinazione di premi. Le impostazioni di gioco sovrascrivono quell di categoria che a loro volta sovrascrivon quelle globali. Ci sono anche le impostazioni per un jackpot: questa opzione puo’ essere impostata globalmente, per categoria o per gioco. Ogni volta che l’utente gioca e non vince il csto pagato andra’ nel jackpot. Il jackpot non viene incrementato se l’utente non paga il costo per giocare. Il jackpot puo’ essere manualmente modificato nelle impostazioni di gioco(PCA). Puoi anche impostare costo/premio giochi a -1 per non avere costi/premi.',
	),
	array(
		0 => '--',
		1 => 'Visualizzare i dati della salagiochi al di fuori della stessa',
	),
	array(
		0 => 'Come mostro i dati della salagiochi in pagine esterne?',
		1 => 'Bisogna usare le seguenti linee di codice per vedere i dati della salagiochi correttamente:<br />
<textarea rows="6" readonly="readonly">include($phpbb_root_path . ’includes/arcade/arcade_common.’ . $phpEx);
// Initialize arcade auth
$auth_arcade->acl($user->data);
// Initialize arcade class
$arcade = new arcade(false);</textarea><br /><br />Inoltre assicurati di usare le seguenti funzioni per mostrare i dati:
	<ul>
	<li><strong>$arcade->number_format()</strong> - Tutti i numeri mostrati devono passare attraverso questa funzione per assicurare la corretta visualizzazione all’utente</li>
	<li><strong>$arcade->time_format()</strong> - Converte un tempo da secondi a giorni/ore/minuti/secondi</li>
	<li><strong>$arcade->get_username_string()</strong> - Da il link correttamente agli utenti (colore e profilo)</li>
	</ul>',
	),
	array(
		0 => 'C’e’ un esempio di file per un blocco di un portale?',
		1 => 'Si, il seguente esempio mostra i nuovi giochi, i giochi totali, e gli ultimi punteggi migliori.<br /><br />Codice del blocco in php:<br />
<textarea rows="20" readonly="readonly" wrap="off">if (file_exists($phpbb_root_path . ’includes/arcade/arcade_common.’ . $phpEx))
{
	include($phpbb_root_path . ’includes/arcade/arcade_common.’ . $phpEx);		
	// Initialize arcade auth
	$auth_arcade->acl($user->data);
	// Initialize arcade class
	$arcade = new arcade(false);
	
	foreach($arcade->newest_games as $newest_games)
	{
		$template->assign_block_vars(’newest_games’, array(
			’U_GAME_PLAY’	=> append_sid("{$phpbb_root_path}arcade.$phpEx", ’mode=play&amp;g=’ . $newest_games[’game_id’]),
			’GAME_IMAGE’	=> ($newest_games[’game_image’] != ’’) ? $phpbb_root_path . "arcade.$phpEx?img=" . $newest_games[’game_image’] : ’’,
			’GAME_NAME’		=> $newest_games[’game_name’],
		));
	}
	
	$total_games = sizeof($arcade->games);
	if ($total_games > 1)
	{
		$total_games = sprintf($user->lang[\'ARCADE_TOTAL_GAMES\'], $arcade->number_format($total_games));
	}
	else if ($total_games == 1)
	{
		$total_games = sprintf($user->lang[\'ARCADE_TOTAL_GAME\'], $arcade->number_format($total_games));
	}

	$total_games_played = \'\';
	if ($arcade->totals[\'games_played\'] > 1)
	{
		$total_games_played = sprintf($user->lang[\'ARCADE_TOTAL_PLAYS\'], $arcade->number_format($arcade->totals[\'games_played\']), $arcade->time_format($arcade->totals[\'games_time\']));
	}
	else if ($arcade->totals[\'games_played\'] == 1)
	{
		$total_games_played = sprintf($user->lang[\'ARCADE_TOTAL_PLAY\'], $arcade->number_format($arcade->totals[\'games_played\']), $arcade->time_format($arcade->totals[\'games_time\']));
	}

	$template->assign_vars(array(
		\'S_ARCADE_BLOCK\'		=> true,
		\'TOTAL_GAMES\'			=> $total_games,
		\'TOTAL_GAMES_PLAYED\'	=> $total_games_played,
	));


	// Start of Lastest highscores
	foreach($arcade->latest_highscores as $latest_highscore)
	{
		$latest_scoreuser = $arcade->get_username_string(’full’, $latest_highscore[’game_highuser’], $latest_highscore[’username’], $latest_highscore[’user_colour’]);
		$latest_score = sprintf($user->lang[’ARCADE_WELCOME_SCORE’], $arcade->number_format($latest_highscore[’game_highscore’]), $user->format_date($latest_highscore[’game_highdate’]));
		$game_url = ’<a href="’ . append_sid("arcade.$phpEx?mode=play&amp;g=" . $latest_highscore[’game_id’]) . ’">’ . $latest_highscore[’game_name’] . ’</a>’;
		$game_url_tooltip = ’<a href="’ . append_sid("arcade.$phpEx?mode=play&amp;g=" . $latest_highscore[’game_id’]) . ’" class="tooltip">’ . $latest_highscore[’game_name’] . ’<span class="aheader">’ . $latest_score . ’</span></a>’;

		$template->assign_block_vars(’latest_scores’, array(
			’HEADING_CHAMP’ 				=> sprintf($user->lang[’ARCADE_WELCOME_CHAMP’], $latest_scoreuser, $game_url),
			’HEADING_CHAMP_SCORE’			=> $latest_score,
			’HEADING_CHAMP_TOOLTIP’ 		=> sprintf($user->lang[’ARCADE_WELCOME_CHAMP’], $latest_scoreuser, $game_url_tooltip),
		));
	}
	// End Lastest Highscores
}</textarea><br /><br />Codice blocco html:<br />
<textarea rows="15" readonly="readonly" wrap="off"><!-- IF S_ARCADE_BLOCK -->
<h3>{L_ARCADE}</h3>
<div class="panel">
	<div class="inner"><span class="corners-top"><span></span></span>
		<div class="content">
			<!-- BEGIN newest_games -->
				<p style="margin: 4px;"><!-- IF newest_games.GAME_IMAGE --><a href="{newest_games.U_GAME_PLAY}"><img src="{newest_games.GAME_IMAGE}" alt="{newest_games.GAME_NAME}" width="20" height="20" style="vertical-align: middle;" /></a><!-- ENDIF -->&nbsp;{newest_games.GAME_NAME}</p>
			<!-- END newest_games -->
			<!-- IF TOTAL_GAMES -->
			<br />
			<p style="text-align: center;">{TOTAL_GAMES}</p>
			<!-- ENDIF -->
			<!-- IF .latest_scores -->
				<ul>
			<!-- BEGIN latest_scores -->
					<li>{latest_scores.HEADING_CHAMP}</li>
			<!-- END latest_scores -->
				</ul>
			<!-- ELSE -->
				<div style="text-align: center;">{L_ARCADE_NO_LATEST_HIGHSCORES}</div>
			<!-- ENDIF -->
		</div>
	<span class="corners-bottom"><span></span></span></div>
</div>
<!-- ENDIF --></textarea>',
	),
);

?>