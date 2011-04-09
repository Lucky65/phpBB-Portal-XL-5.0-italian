<?PHP
/** 
*
* portal_xl_install.php [Italian]
*
* @package language for phpBB3 Portal XL
* @version $Id: portal_xl_install.php,v 1.2 2009/10/20 damysterious Exp $
* @copyright (c) 2009 DaMysterious
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
	// Portal XL Convert Procedure
	'PORTAL_CONVERT'				=> 'Conversione Portal XL',
	'PORTAL_CONVERT_BASIC_FINISHED'	=> 'Le tabelle del database sono ora aggiornate per le nuove funzioni testo di phpBB 3.<br />Lo script converte anche il testo.<br /><br />Per evitare timeout di errori e malfunzionamenti durante la conversione testi, si prega di non chiudere il browser fino a quando lo script ha terminato la conversione.<br /><br />Ma se vuoi interrompere questa procedura, riavvia nuovamente lo script per continuare.<br /><br />Sii paziente mentre lo script convertire i testi e attendi la fine di questo messaggio, perchè in aggiunta al numero di testi che devono essere convertiti, lo script può richiedere alcuni minuti per fare tutto il lavoro.',
	'PORTAL_CONVERT_DATABASE'		=> 'Conversione database',
	'PORTAL_CONVERT_NOT_POSSIBLE'	=> '<strong>La conversione non è possibile!</strong><br /><br />Questa release di Portal XL non può essere convertita a Portal XL 4.0 Moddata.<br /><br />La realease minima di Portal XL deve essere<strong>Premod RC2</strong><br />La tua attuale versione di Portal XL è<strong>%1$s</strong>.<br /><br />Se la tua versione non è almento Portal XL Premod RC2, lo script non sarà in grado di aggiornare il seguito.',
	'PORTAL_CONVERT_PROCEDURE'		=> 'Correnti %1$s di %2$ aggiornamento di dati sono completati.<br /><br />Far clic sul bottone qui sotto per continuare o attendi fino al momento del riavvio dello script stesso.',
	'PORTAL_CONVERT_TODO'			=> 'Da qui tutte le tabelle del database in uso da Portal XL 5.0 Plain saranno convertite all’ultima versione di Portal XL 4.0 Premod RC5.<br /><br />Per avviare la procedura di conversione, fare clic sul bottone qui sotto.<br /><br />Sii paziente durante la procedura di conversione, per terminare la procedura di conversione potrebbero occorrere alcuni minuti.',
	'PORTAL_FINAL_CONVERT_STEP'		=> 'Conversione di tutte le tabelle esistenti in uso a Portal XL terminata.<br />Per completare l’intera procedura utilizzando il MOD alla fine c’è un ultimo passo necessario da fare. Fare clic sul pulsante in basso per finire l’ultima parte.',

	// Portal XL Installation Procedure
	'PORTAL_INSTALL'				=> 'Installazione Portal XL',

	'PORTAL_INSTALL_EXPLAIN'		=> '<p>Benvenuto in Portal XL Installazione guidata<br />Questa è il processo base per l’installazione di Portal XL. Il tuo originale, folle Portale per phpBB3.</p>
	<p>Per procedere all’installazione è necessario seguire la procedura raccomandata:</p>
	<ul>
		<li>Assicurati di aver copiato/inviato/sovrascritto dall’archivio tutto il contenuto della directory <strong><span style="color:#FF0000;">\root\</span></strong> nella tua installazione di phpBB 3.0.x es. <strong><span style="color:#FF0000;">\forum\</span></strong> solo (se è presente)!</li>
	</ul>
	<ul>
		<li><em><strong><span style="color:#009900;">Permessi CHMOD</span></strong></em><br />
		<em><strong>Dopo l’installazione</strong> devi controllare i permessi a files e cartelle secondo *le impostazioni UNIX.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> in</span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> in</span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> in</span></strong>:<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> e tutte le relative sottocartelle<br />
		<strong>/dl_mod/downloads</strong> e tutte le relative sottocartelle<br />
		<strong>/gallery/images</strong> e tutte le relative sottocartelle<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/mods/toplist_mod/cache</strong><br />
		<strong>/mods/toplist_mod/images</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		</li>
	</ul>
	
	<p>Per iniziare l’installazione clicca sul pulsante "Procedi al passaggio successivo".</p>',
	
	'PORTAL_INSTALL_NEXT'			=> 'Il database è stato correttamente creato.<br /><br />Clicca sul pulsante per eseguire il prossimo step e per registrare i valori di default nelle tabelle.',
	'PORTAL_INSTALL_FINISHED'		=> 'Portal XL Installazione completata',
	'PORTAL_INSTALL_INTRO'			=> 'Benvenuto sull’installazione di Portal XL',

	'PORTAL_INSTALL_FINISHED_EXPLAIN'	=> '
		<p>Hai correttamente installato la versione Portal XL 5.0 Basic %1$s. Ora sarai guidato nell’installazione della versione Portal XL Premod.</p>
		<h2>Potrai accedere al tuo Portal XL in pochi secondi!</h2>
		<p>Prenditi il tempo per esaminare tutte le opzioni disponibili per te. Ricorda che un aiuto online è disponibile su <a href="http://www.portalxl.nl/forum/">Portal XL Home</a> e sul <a href="http://www.portalxl.nl/forum/index.php">forum di supporto</a>. Per la versione italiana invece troverai supporto su <a href="http://www.portalxl.eu/">Portal XL Italia</a> e sul <a href="http://www.portalxl.eu/forum.html">forum di supporto italiano</a>.</p><br />
		<p><strong style="text-transform: uppercase; font-size:13px; color: #FF0000;">Attenzione:</strong></span> Per completare l’installazione della XL Premod devi procedere al passaggio successivo selezionando e cliccando la scheda "<strong>UPGRADE PREMOD</strong>". Clicca sul pulsante suggerito per procedere all’installazione di Portal XL Premod ora.</p>',

	'PORTAL_INSTALL_NOT_POSSIBLE'	=> '<strong>Installazione non possibile!</strong><br /><br />Lo script ha trovato una installazione già esistente, non usare l’installazione.',

	'PORTAL_OVERVIEW_BODY'			=> 'Questa è la nuova versione <strong>Free</strong> di phpBB3 Portal XL, è la soluzione flessibile per il tuo phpBB 3.0.x.<br /><br />
	Questo portale si sforza di essere altamente personalizzabile include anche tanti utili addons. Allo stesso tempo, offriamo una rapida ed efficace supporto rispetto ad altre comunità phpBB3 con i relativi portali. Noi non pretendiamo di diventare un portale di riferimento per i mods o per phpBB3 e non ci consideriamo professionisti. Facciamo questo solo per divertimento nel nostro tempo libero, anche se stiamo cercando di fare del nostro meglio per avere un pacchetto professionale con il minor numero di bugs possibili e senza bisogno di alcuna conoscenza di scripting.
	<p>Date memorabili della realizzazione di phpBB3 Portal XL
	<ul>
		<li>Portal XL 5.0 RC4-Plain (26-02-2008 prima realizzazione)</li>
		<li>Portal XL 5.0 Plain (12-04-2008)</li>
		<li>Portal XL 5.0 Plain 0.1 (31-05-2008)</li>
		<li>Portal XL 5.0 Plain 0.2 (31-10-2008)</li>
		<li>Portal XL 5.0 Plain 0.2 (05-06-2009) aggiornamento alla versione pbpBB 3.0.5</li>
	</ul>
	<ul>
		<li>Portal XL 5.0 Premod 0.3 (22-11-2009) aggiornamento alla versione phpBB 3.0.6</li>
		<li>Portal XL 5.0 Premod 0.3 (07-03-2010) aggiornamento alla versione phpBB 3.0.7</li>
	</ul>
	</ul></p><br />Per proseguire, scegli tra le schede disponibili nel menu a sinistra e in alto.',
	
	'PORTAL_SQL_UPDATE_DONE'		=> '<strong>Azione database:</strong><br />',
	'PORTAL_SUB_SUPPORT'			=> 'Supporto Generale Portal xl',
	'PORTAL_SUPPORT_BODY'			=> 'Se ha bisogno di aiuto, soprattutto durante la fase di rilascio di versioni beta, puoi trovare supporto su <a href="http://damysterious.xs4all.nl/portal_premod/" target="_blank">damysterious.xs4all.nl</a> (in inglese) e su <a href="http://portalxl.eu/" target="_blank">Portal XL Italia</a> (in italiano), qui potrai anche segnalare eventuali bugs. Tieni a mente che avrai un supporto limitato, e che supportiamo solo l’ultima versione rilasciata. <br /><br />Poichè non siamo in grado di sapere cosa è stato modificato durante l’installazione del tuo phpBB, soprattutto se hai aggiunto dei mods, non possiamo garantirti assistenza illimitata.',

	// Portal XL Update Procedure
	'PORTAL_UPDATE'					=> 'Aggiornamento Portal XL',
	'PORTAL_UPDATE_SUCCESS'			=> 'Congratulazioni!<br />Gli aggiornamenti del database sono terminati.<br /><br />Puoi ora installare la rimanente parte seguendo le istruzioni di Portal XL nel tuo forum.<br /><br />Cancella la cartella /install/ dalla tua root.',
	'PORTAL_UPDATE_BASIC_FINISHED'	=> 'Le tabelle del database sono ora aggiornate per le nuove funzione di testo del tuo phpBB 3.<br /><br /><br />Per evitare timeout di errori o malfunzionamenti durante la conversione del testo, non chiudere il browser fino a quando lo script ha terminato la conversione.<br /><br />Ma se se vuole interrompere questa procedura, riavvia lo script nuovamente per continuare.<br /><br />Sii paziente lo script impiega qualche minuto prima di terminare la conversione.',
	'PORTAL_UPDATE_DATABASE'		=> 'Aggiornamento database per Portal XL',
	'PORTAL_UPDATE_NOT_POSSIBLE'	=> '<strong>Aggiornamento non possibile!</strong><br /><br />Questa versione di Portal XL non può essere aggiornata.<br /><br />La tua versione attuale è Portal XL 5.0 <strong>%1$s</strong>',
	'PORTAL_UPDATE_PROCEDURE'		=> 'Attualmente %1$s dei %2$ dati sono aggiornati.<br /><br />Clicca sul pulsante per continuare o attendi prima che lo script si riavvii.',
	'PORTAL_UPDATE_TODO'			=> 'Da qui tutte le tabelle del database in uso da Portal XL saranno aggiornate<br /><br />Per iniziare la procedura di aggiornamento, clicca sul pulsante.<br /><br />Sii paziente durante l’aggiornamento, la procedura impiegherà qualche minuto prima di completare.',
	'PORTAL_FINAL_UPDATE_STEP'		=> 'Le esistenti tabelle di Portal XL sono ora aggiornate.<br />Per ottenere la corretta visualizzazione dei testi sul tuo forum del set di dati deve essere convertito ora.<br /><br />Clicca sul pulsante per continuare con la conversione.',

	// Portal XL Remove Database Entries Procedure
	'PORTAL_REMOVE'					=> 'Eliminazione Portal XL',
	'PORTAL_REMOVE_NOT_POSSIBLE'	=> '<strong>Eliminazione non possibile!</strong><br /><br />La tua versione di questo portale: <strong>%1$s</strong><br /><br />XL Portal deve avere almeno la versione <strong>%1$s</strong>, per essere in grado di rimuovere tutte le tabelle dal database.<br /><br />Aggiorna manualmente a questa versione prima di avviare nuovamente questo script.',
	'PORTAL_REMOVE_SUCCESS'			=> 'Congratulazioni!<br />Hai eliminato il database dal Portale XL e hai finito<br /><br />Puoi ora eliminare la rimanente parte di Portal XL dal tuo forum.<br /><br />Cancella la cartella /install/ dalla root del forum.',

	'PORTAL_REMOVE_TODO'			=> 'Portale XL verrà eliminato dal tuo database:
	<ul>
		<li>nella cartella <span style="color:#009900;">/adm/style/</span> elima tutto <span style="color:#FF0000;">acp_portal*.html</span>.</li>
		<li>nella cartella <span style="color:#009900;">/includes/acp/</span> elimina tutto <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>nella cartella <span style="color:#009900;">/includes/acp/info/</span> elimina tutto <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>nella cartella <span style="color:#009900;">/language/it/</span> elimina <span style="color:#FF0000;">portal.php</span></li>
		<li>nella cartella <span style="color:#009900;">/language/it/acp/</span> elimina tutto <span style="color:#FF0000;">portal_*.php</span></li>
		<li>nella cartella <span style="color:#009900;">/language/it/mods/</span> elimina <span style="color:#FF0000;">portal_xl_average_statistics.php</span></li>
		<li>elimina la cartella principale <span style="color:#009900;">/portal/</span></strong></li>
		<li>elimina tutte le <span style="color:#009900;">/portal/</span> cartelle (fai questo per ogni stile installato) in <span style="color:#009900;">/styles/stylename/template/</span></li>
		<li>nella root sostituisci <span style="color:#FF0000;">.htaccess</span> con l’originale di phpBB 3.0.x, elimina <span style="color:#FF0000;">portal.php</span>, <span style="color:#FF0000;">portal_pages.php</span> e <span style="color:#FF0000;">robots.txt</span>.</li>
		<li>in aggiunta a quanto sopra tutti ibbcodes personalizzati installati mediante l’uso di questo installatore saranno eliminati.</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Nota:</strong> Prima di procedere scarica nuovamente una versione originale di phpBB 3.0.x e sovrascrivi gli esistenti files, devi però essere sicuro di di aver eliminato la cartella <span style="color:#009900;">/install/</span> e il file <span style="color:#FF0000;">config.php</span> dal tuo pacchetto phpBB 3.0.x originale.</p>
	<p>Grazie per aver usato Portal XL.</p><br /><br />',
	
	'PORTAL_SQL_REMOVE_DONE'		=> '<strong>Azione database:</strong><br />',
	'PORTAL_FINAL_REMOVE_STEP'		=> 'Tutte le voci esistenti e tabelle verranno eliminate.<br /><br />Clicca sul pulsante per continuare o attendi qualche secondo per essere automaticamente dirottato al prossimo step.',
	'REMOVE_DATABASE'				=> 'Procedi all’eliminazione',
	'STAGE_REMOVE_DB'				=> 'Aggiorna database',

	// Portal XL CHMOD Directories
	'PORTAL_CHMOD'					=> 'CHMOD Portal XL',
	'PORTAL_CHMOD_NOT_POSSIBLE'		=> '<strong>CHMOD non possibile!</strong><br /><br />La tua versione di questo portale %egrave: <strong>%1$s</strong><br /><br />Portal XL deve avere come minimo la versione <strong>%1$s</strong>, devi settare i CHMODS a tutte le directories usate da Portal XL.<br /><br />Aggiorna manualmente a questa versione prima di proseguire.',
	'PORTAL_CHMOD_SUCCESS'			=> 'Congratulazione!<br />CHMODS a cartelle e files riusciti.',

	'PORTAL_CHMOD_TODO'				=> 'Portal XL farà un’installazione guidata e proverà a configurare i tuoi CHMODS / Rinominerà le seguenti directories o files per te, ovviamente se il tuo server lo permette:
	<ul>
		<li><em><strong><span style="color:#009900;">Permessi CHMOD files</span></strong></em><br />
		<em><strong>Dopo l’installazione</strong> devi controllare tutti i CHMODS a file e cartelle secondo le *impostazioni UNIX.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> in</span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> in</span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> in</span></strong>:<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> e tutte le relative sottocartelle<br />
		<strong>/dl_mod/downloads</strong> e tutte le relative sottocartelle<br />
		<strong>/gallery/images</strong> e tutte le relative sottocartelle<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/mods/toplist_mod/cache</strong><br />
		<strong>/mods/toplist_mod/images</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Nota:</strong> Come di consueto, prima di procedere fai una copia di backup dei tuoi file.</p><br /><br />',

	'PORTAL_CHMOD_DONE'			=> '<strong>Azione database:</strong><br />',
	'PORTAL_FINAL_CHMOD_STEP'	=> 'A tutte le esistenti directories e files in uso dovranno essere configurati i CHMODS.<br /><br />Clicca sul pulsante per continuare o attendi per essere dirottato automaticamente al prossimo step.',
	'PORTAL_CHMOD_FILES'		=> 'Procedura CHMODS',

	'STAGE_CHMOD_FILES'			=> 'CHMODS in azione...<br />
	<ul>
		<ul>
		<li><em><strong><span style="color:#009900;">Permessi CHMOD files</span></strong></em><br />
		<em><strong>Dopo l’installazione</strong> devi controllare tutti i CHMODS a file e cartelle secondo le *impostazioni UNIX.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> in</span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> in</span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> in</span></strong>:<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> e tutte le relative sottocartelle<br />
		<strong>/dl_mod/downloads</strong> e tutte le relative sottocartelle<br />
		<strong>/gallery/images</strong> e tutte le relative sottocartelle<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/mods/toplist_mod/cache</strong><br />
		<strong>/mods/toplist_mod/images</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		</li>
	</ul>
	Dopo aver fatto clic sul pulsante, non sarà possibile accedere a questa installazione, poi rinomina o cancella <strong>/install/</strong> in <strong>/_install/</strong>. Se è l’installer rinominerà la tua cartella in <strong>/_install/</strong>, se questo è consentito dal tuo server.<br /><br />Clicca sul pulsante per proseguire.',

	// Portal XL BBCODE Import
	'PORTAL_BBCODE'					=> 'Configurazione bbCode XL',
	'PORTAL_BBCODE_NOT_POSSIBLE'		=> '<strong>Aggiungere bbCodes personalizzati non %egrave possibile!</strong><br /><br />La tua versione per questo portale è: <strong>%1$s</strong><br /><br />L’installazione minima prevista è <strong>%1$s</strong>, per abilitare al BBCODE tutte le directories useate da Portal XL.<br /><br />Aggiorna manualmente a questa versione, prima di usare nuovamente questo script.',
	'PORTAL_BBCODE_SUCCESS'			=> 'Congratulazioni!<br />Aggiunta bbCodes personalizzati eseguiti correttamente.',

	'PORTAL_BBCODE_TODO'				=> 'Benvenuto nella personalizzazione bbCode con installazione guidata.<br /><br />Portal XL installerà i seguenti bbCodes nel tuo database:
	<ul>
		<li><span style="color:#009900;">Aggiungi spoiler: [spoiler]tuo testo qui[/spoiler]</span></li>
		<li><span style="color:#009900;">Aggiungi iframe: [iframe]http://url.here[/iframe]</span></li>
		<li><span style="color:#009900;">Aggiungi youtube: [youtube]numero video[/youtube]</span></li>
		<li><span style="color:#009900;">Aggiungi GVideo: [GVideo]numero video[/GVideo]</span></li>
		<li><span style="color:#009900;">Aggiungi myvideo: [myvideo]numero video[/myvideo]</span></li>
		<li><span style="color:#009900;">Aggiungi clipfish: [clipfish]numero video[/clipfish]</span></li>
		<li><span style="color:#009900;">Aggiungi myspace: [myspace]numero video[/myspace]</span></li>
		<li><span style="color:#009900;">Aggiungi gametrailers: [gametrailers]numero trailer[/gametrailers]</span></li>
		<li><span style="color:#009900;">Aggiungi center: [center]tuo test[/center]</span></li>
		<li><span style="color:#009900;">Aggiungi strike: [strike]tuo testo[/strike]</span></li>
		<li><span style="color:#009900;">Aggiungi bgcolor: [bgcolor=red]tuo testo[/bgcolor]</span></li>
		<li><span style="color:#009900;">Aggiungi hidden link: [hiddenlink=http//url.her]tuo testo[/hiddenlink]</span></li>
		<li><span style="color:#009900;">Aggiungi offtopic: [offtopic]tuo testo[/offtopic]</span></li>
		<li><span style="color:#009900;">Aggiungi marquee: [marquee=color here]tuo testo[/marquee]</span></li>
		<li><span style="color:#009900;">Aggiungi intended text: [tab=number here]tuo testo[/tab]</span></li>
		<li><span style="color:#009900;">Aggiungi Highslide Img: [hsimg]link immagine[/hsimg]</span></li>
		<li><span style="color:#009900;">Aggiungi align: [align=direction]tuo testo[/align]</span></li>
		<li><span style="color:#009900;">Aggiungi mailto: [mail=e-mail addres]indirizzo e-mail[/mail]</span></li>

		<li><span style="color:#009900;">Aggiungi horizontal ruler: [hr][/hr]</span></li>
		<li><span style="color:#009900;">Aggiungi line break: [br][/br]</span></li>
		<li><span style="color:#009900;">Aggiungi WMV: [wmv]http://wmv_url[/wmv]</span></li>
		<li><span style="color:#009900;">Aggiungi super script: [sup]tuo testo[/sup]</span></li>
		<li><span style="color:#009900;">Aggiungi Flash video: [flash_i]tuo url[/flash_i]</span></li>
		<li><span style="color:#009900;">Aggiungi stream: [stream]tuo url[/stream]</span></li>
		<li><span style="color:#009900;">Aggiungi FLV: [flv]tuo url[/flv]</span></li>
		<li><span style="color:#009900;">Aggiungi Real Media: [rm]tuo url[/rm]</span></li>
		<li><span style="color:#009900;">Aggiungi MOV: [mov]tuo url[/mov]</span></li>
		<li><span style="color:#009900;">Aggiungi Column: [col=collumn1]collumn2[/col]</span></li>
		<li><span style="color:#009900;">Aggiungi Aligntable: [aligntable =align,width,marginleft,marginright,border,brdcolor,bkgrdcolor]{TEXT}[/aligntable]</span></li>

		<li><span style="color:#009900;">Aggiungi Think Female: [think_f]Testo qui[/think_f]</span></li>
		<li><span style="color:#009900;">Aggiungi Think Male: [think_m]Testo qui[/think_m]</span></li>
		<li><span style="color:#009900;">Aggiungi Schild: [schild]tuo testo[/schild] - This inserts your text into a smile sign</span></li>
		<li><span style="color:#009900;">[schild={SIMPLETEXT1},{NUMBER},{SIMPLETEXT2},{SIMPLETEXT3}]{TEXT}[/schild]</span></li>
		<li><span style="color:#009900;">Aggiungi Album: [album]ID immagine[/album]</span></li>
		<li><span style="color:#009900;">Aggiungi Tr: [tr]content[/tr]</span></li>
		<li><span style="color:#009900;">Aggiungi Tdo: [tdo=colspan number]contenuto[/tdo]</span></li>
		<li><span style="color:#009900;">Aggiungi Td: [td]contenuto[/td]</span></li>
		<li><span style="color:#009900;">Aggiungi Table: [table]contenuto[/table]</span></li>
		<li><span style="color:#009900;">Aggiungi Google Map: [googlemap]URL mappa[/googlemap]</span></li>
		<li><span style="color:#009900;">Aggiungi Guest Hide Text: [hide]testo[/hide]</span></li>
	</ul>
	<p><strong style="text-transform: uppercase;">Nota:</strong> Come al solito fai una copia di backup del tuo database.</p><br /><br />',

	'PORTAL_SQL_BBCODE_DONE'			=> '<strong>Azione database:</strong><br />',
	'PORTAL_FINAL_BBCODE_STEP'		=> 'Aggiornamento bbCodes al database.<br /><br />Clicca sul pulsante per proseguire.',
	'BBCODE_DATABASE'				=> 'Procedura BBCODE',

	'STAGE_BBCODE_DB'				=> 'BBCODE in azione...<br />
<ul>
		<ul>
		<li><em><strong><span style="color:#009900;">Permessi CHMOD files</span></strong></em><br />
		<em><strong>Dopo l’installazione</strong> devi controllare tutti i CHMODS a file e cartelle secondo le *impostazioni UNIX.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> in</span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> in</span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> in</span></strong>:<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> e tutte le relative sottocartelle<br />
		<strong>/dl_mod/downloads</strong> e tutte le relative sottocartelle<br />
		<strong>/gallery/images</strong> e tutte le relative sottocartelle<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/mods/toplist_mod/cache</strong><br />
		<strong>/mods/toplist_mod/images</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		</li>
	</ul>
	Dopo aver fatto clic sul pulsante, non sarà possibile accedere a questa installazione per la rinominazione della cartella install <strong>/install/</strong> in <strong>/_install/</strong>. Se hai bisogno di installare ancora rinomina la cartella <strong>/_install/</strong> e potrai accedere alla directory.<br /><br />Clicca sul pulsante per proseguire.',

   'PORTAL_FINAL_MODULE_STEP'		=> 'Aggiornamento del database tabelle moduli.<br /><br />Clicca sul pulsante per proseguire.',
   'PORTAL_FINAL_CONFIGFILE_STEP'	=> 'Aggiornamento file config.php root del tuo forum.<br /><br />Clicca sul pulsante per proseguire.',
   'PORTAL_SQL_MODULE_DONE'			=> '<strong>Azione database:</strong><br />',

   'STAGE_INSERT_DATA'				=> 'Aggiunta valori di default',
   'STAGE_POPULATE_DB'				=> 'Le tabelle del database sono disponibili.<br /><br />Clicca sul pulsante per popolare le tabelle.',
   'STAGE_CHMOD'					=> 'CHMOD files',
   'STAGE_BBCODE'					=> 'Importazione bbCode',
   'STAGE_INSERT_MODULES'			=> 'Aggiornamento Moduli',
   'PORTAL_NOT_INSTALLED'			=> 'Nessuna installazione trovata',
   'PORTAL_NOT_INSTALLED_EXPLAIN'	=> 'E’ necessaria un’installazione di Portal XL, devi <a href="%s">procedere prima alla installazione di Portal XL</a>.',



// Portal XL version check
	'VERSION_CHECK'					=> 'Controllo versione',
	'VERSION_CHECK_EXPLAIN'			=> 'Con questo tool puoi controllare se la tua versione è aggiornata.',
	'VERSION_UP_TO_DATE_ACP'		=> 'La tua installazione è l’ultima disponibile, non sono necessari ulteriori aggiornamenti.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'La tua versione di Portal XL non è aggiornata.<br />Controlla il link della nuova versione e segui le istruzioni per effettuare l’aggiornamento.',
	'CURRENT_VERSION'				=> 'Attuale versione',
	'LATEST_VERSION'				=> 'Ultima versione',
	'UPDATE_INSTRUCTIONS'			=> '
		<h2>Come aggiornare la tua installazione all’ultima disponibile.</h2>

		<p>Scarica il pacchetto contenente la nuova versione di Portal XL. Leggi i documenti informativi che troverai in  \docs\PORTAL_XL_INSTALL.html. Gli steps per l’aggiornamento sono:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Vai su <a href="http://www.portalxl.nl/forum/" title="http://www.portalxl.nl/forum/">Portal XL downloads</a> e su <a href="http://www.portalxl.eu/" title="Portal XL Italia">Portal XL Italia downloads</a> e scarica  "L’ultima Versione".<br /></li>
			<li>Decomprimi l’archivio.<br /></li>
			<li>Invia sul tuo server tutto il contenuto della directory \root\ (rispettando la struttura) dell tuo phpBB (dove hai il tuo config.php).<br /></li>
			<li>Scrivi sul tuo browser tuosito\install\index.php e segui le istruzioni, quindi procedi all’aggiornamento."<br /></li>
			<li>Aggiorna la cache e gli stili, finito!<br /></li>
		</ul>
	',


	// Portal XL Upgrade to Premod Procedure
	'PORTAL_UPGRADE'				=> 'Portal XL 5.0 Plain aggiornamento alla versione Premod',
	'PORTAL_UPGRADE_SUCCESS'		=> '<br /><strong>Congratulazioni!</strong>!<br />Le tue tabelle sono state aggiornate alla versione Portal XL 5.0 Premod.<br /><br />Ora cancella la tua cartella <strong>/install_portal/</strong> dalla root del tuo sito per abilitare nuovamente il forum!<br /><br />I prossimi step ti guideranno all’installazione di ulteriori mods di terze parti. Questi step sono obbligatori per avere la Portal XL Premod pienamente operativa. Clicca sul pulsante seguente per continuare.',
	'PORTAL_UPGRADE_BASIC_FINISHED'	=> 'Il database e le tabelle sono ora aggiornate per le nuove funzioni di phpBB 3.<br />Lo script ora convertirà il testo.<br /><br />Per evitare timeout di errori e malfunzionamenti durante la conversione del testo. Non chiudere il browser prima che lo script abbia terminato la conversione.<br /><br />Nel caso venga inerrotto, avvia nuovamente lo script per continuare.<br /><br />Sii paziente, lo script impiegherà alcuni minuti prima di terminare la procedura.',
	'PORTAL_UPGRADE_DATABASE'		=> 'Aggiornamento database per Portal XL',
	'PORTAL_UPGRADE_NOT_POSSIBLE'	=> '<strong>Aggiornamento non possible!</strong><br /><br />Questa versione non può essere aggiornata.<br /><br />La tua versione attuale è Portal XL 5.0 <strong>%1$s</strong>',
	'PORTAL_UPGRADE_PROCEDURE'		=> 'L’attuale versione %1$s composta da %2$ dati saranno aggiornati.<br /><br />Clicca sul pulsante in basso per continuare.',
	'PORTAL_UPGRADE_TODO'			=> 'Con questo upgrade le configurazioni del tuo database saranno aggiornate alla versione Portal XL 5.0 Premod.<br /><br />
		<ul>
		<li>Assicurati di copiare/inviare/sovrascrivere tutto il contenuto della directory <strong><span style="color:#FF0000;">\root\</span></strong> sul tuo server!</li>
<ul>
		<ul>
		<li><em><strong><span style="color:#009900;">Permessi CHMOD files</span></strong></em><br />
		<em><strong>Dopo l’installazione</strong> devi controllare tutti i CHMODS a file e cartelle secondo le *impostazioni UNIX.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> in</span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> in</span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> in</span></strong>:<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> e tutte le relative sottocartelle<br />
		<strong>/dl_mod/downloads</strong> e tutte le relative sottocartelle<br />
		<strong>/gallery/images</strong> e tutte le relative sottocartelle<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/mods/toplist_mod/cache</strong><br />
		<strong>/mods/toplist_mod/images</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		</li>
	</ul>
	<br /><br />Per iniziare la procedura di aggiornamento, clicca sul pulsante in basso.<br /><br />Sii paziente durante la procedura, per terminare l’aggiornamento saranno necessari alcuni minuti per consentire allo script di configurare le tue tabelle alla versione Premod.',
	'PORTAL_FINAL_UPGRADE_STEP'		=> 'Le tabelle esistenti sono ora aggiornate.<br />Per visualizzare in modo corretto il testo del tuo forum è necessario effettuare una conversione dei dati.<br /><br />Clicca sul pulsante in basso per continuare con la conversione.',

	// Portal XL Remove Database Entries Procedure
	'PORTAL_REMOVE_UPGRADE'					=> 'Eliminazione Portal XL 5.0 Premod',
	'PORTAL_REMOVE_UPGRADE_NOT_POSSIBLE'	=> '<strong>Eliminazione non possibile!</strong><br /><br />La tua attuale versione di questo Portale è: <strong>%1$s</strong><br /><br />Per eliminare la versione Premod è necessario avere installato la versione <strong>Premod 0.2</strong>, solo dopo l’installazione è possibile eliminare le relative tabelle.<br /><br />Aggiorna a questa versione prima di eseguire nuovamente lo script di disinstallazione.',
	'PORTAL_REMOVE_UPGRADE_SUCCESS'			=> 'Congratulazioni!<br />L’eliminazione delle tabelle relative alla versione Portal XL 5.0 Premod è stata eseguita correttamente.<br /><br />Puoi ora cancellare dal tuo server i files di Portal XL 5.0 Premod.<br /><br />Cancella la cartella /install/ per attivare nuovamente il tuo forum',

	'PORTAL_REMOVE_UPGRADE_TODO'			=> 'Portal XL 5.0 Premod sarà ora eliminata completamente dal tuo database, dopo aver cancellato i relativi files della tua versione Portal XL 5.0 Premod, questo step sarà completato:
	<ul>
		<li>nella directory <span style="color:#009900;">/adm/style/</span> elimina <span style="color:#FF0000;">acp_portal*.html</span>.</li>
		<li>nella directory <span style="color:#009900;">/includes/acp/</span> elimina <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>nella directory <span style="color:#009900;">/includes/acp/info/</span> elimina <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>nella directory <span style="color:#009900;">/language/en/</span> elimina <span style="color:#FF0000;">portal.php</span></li>
		<li>nella directory <span style="color:#009900;">/language/en/acp/</span> elimina <span style="color:#FF0000;">portal_*.php</span></li>
		<li>nella directory <span style="color:#009900;">/language/en/mods/</span> elimina <span style="color:#FF0000;">portal_xl_average_statistics.php</span></li>
		<li>elimina la directory <span style="color:#009900;">/portal/</span></strong></li>
		<li>elimina la directory <span style="color:#009900;">/portal/</span> in <span style="color:#009900;">/styles/stylename/template/</span></li>
		<li>nella root sostituisci <span style="color:#FF0000;">.htaccess</span> con il file originale di phpBB 3.0.x, elimina <span style="color:#FF0000;">portal.php</span>, <span style="color:#FF0000;">portal_pages.php</span> e <span style="color:#FF0000;">robots.txt</span>.</li>
		<li>Messaggio addizionale: per procedere alla personalizzazione dei bbcodes installati usa questo installer per l’eliminazione.</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Nota:</strong> Per procedere all’invio sul tuo server del phpBB 3.0.x originale devi sovrascrivere i files che si sono modificati con la versione di Portal XL 5.0 Premod, ma assicurati di eliminare la directory <span style="color:#009900;">/install/</span> ed il file <span style="color:#FF0000;">config.php</span> dal tuo pacchetto phpBB 3.0.x.</p>
	<p><strong style="text-transform: uppercase; color:#FF0000;">Attenzione:</strong> Eliminando le voci del database della Portal XL Premod non sarà possibile eliminare la phpBB Gallery! Per eliminare il database della phpBB Gallery dovrai usare uno script (da noi non fornito) o eliminare il mod manualmente dal database.</p>	
	<p>Grazie per aver usato Portal XL 5.0 Premod.</p><br /><br />',
	
	'PORTAL_FINAL_REMOVE_UPGRADE_STEP' 		=> 'Tutte le tabelle in uso di Portal XL 5.0 Premod sono state eliminate.<br /><br />Clicca sul pulsante o attendi qualche secondo per essere automaticamente reindirizzato al prossimo step.',
    'PORTAL_UPGRADE_NOT_INSTALLED_EXPLAIN'	=> 'Devi avere per default una versione di Portal XL, <a href="%s"> quindi puoi procedere all\installazione.</a>.',
    
	// Portal XL additional third party mods
	'STAGE_ADDITIONAL'							=> 'Mods addizionali',
	'PORTAL_ADDITIONAL_THIRD_PARTY_MODS'		=> 'Portal XL mods addizionali',
	'PORTAL_ADDITIONAL_THIRD_PARTY_MODS_BODY'	=> 'Con questa opzione è possibile installare mods addizionali per Portal XL 5.0 Premod.<br /><span style="color:#FF0000;"><strong>Tutte le fasi sono necessarie per il corretto funzionamento della tua Portal XL 5.0 Premod! Segui esattamente i successivi step per evitare errori.</strong></span>
    <hr>
	<h1 style="color:#009900;">&#8226; Step 1 phpBB Arcade</h1>
	<p>
	  Con questa opzione è possibile installare per la prima volta phpBB Arcade sul tuo forum Portal XL 5.0 Premod.
	  <br />Assicurati che sia presente la directory <strong>\install_arcade\</strong> (parte integrante del pacchetto di Portal XL Premod) e che sia caricata nella tua root correttamente.
	  <br /><br />Pieno supporto viene dato per la versione stabile di phpBB Arcade, libero e gratuito.
	  <br />Il supporto viene dato sui seguenti forums</p><ul><li><a href="http://www.jeffrusso.net/forum/viewforum.php?f=20" target="_blank">JeffRusso.net phpBB Arcade</a></li></ul>
	  <br />Se il pulsante di installazione fallisce, scrivi sulla barra del tuo browser <strong>install_arcade/index.php</strong> (subito dopo il tuo url) e sarà avviato lo script di installazione. Cliccando sul pulsante sarai dirottato alla nuova pagina!
	  <br /><br /><div align="center"><a href="../install_arcade/index.php" target="_blank" class="button1">Procedi qui per installare phpBB Arcade</a></div>
	</p><br />
	<hr>
	<h1 style="color:#009900;">&#8226; Step 2 phpBB Gallery</h1>
	<p>
	  Con questa opzione è possibile installare per la prima volta phpBB Gallery sul tuo forum Portal XL 5.0 Premod. 	
	  <br />Assicurati che sia presente la directory <strong>\install_gallery\</strong> (parte integrante del pacchetto di Portal XL Premod) e che sia caricata nella tua root correttamente.
	  <br /><br />Pieno supporto viene dato per la versione stabile di phpBB Gallery, libero e gratuito.
	  <br />Il supporto viene dato sui seguenti forums</p><ul><li><a href="http://www.flying-bits.org/" target="_blank">flying-bits.org - MOD-Autor nickvergessen’s board</a></li><li><a href="http://www.phpbb.de/" target="_blank">phpbb.de</a></li><li><a href="http://www.phpbb.com/" target="_blank">phpbb.com</a></li></ul>
	  <br />Se il pulsante di installazione fallisce, scrivi sulla barra del tuo browser <strong>install_gallery/index.php</strong> (subito dopo il tuo url) e sarà avviato lo script di installazione. Cliccando sul pulsante sarai dirottato alla nuova pagina!
	  <br /><br /><div align="center"><a href="../install_gallery/index.php" target="_blank" class="button1">Procedi qui per installare phpBB Gallery</a></div>
	</p><br />
	<hr>
	<h1 style="color:#009900;">&#8226; Step 3 phpBB User Blog Mod</h1>
	<p>
	  Con questa opzione è possibile installare per la prima volta il mod phpBB blog utente sul tuo forum Portal XL 5.0 Premod.
	  <br />Assicurati che sia presente la directory <strong>\blog\</strong> e <strong>\umil\</strong> (parte integrante del pacchetto di Portal XL Premod) e che sia caricata nella tua root correttamente.
	  <br /><br />Pieno supporto viene dato per la versione stabile del mod phpBB utente blog, libero e gratuito.
	  <br />Il supporto viene dato sui seguenti forums</p><ul><li><a href="http://www.lithiumstudios.org/forum/viewforum.php?f=41" target="_blank">Lithium Studios phpBB User Blog Mod</a></li></ul>
	  <br />Se il pulsante di installazione fallisce, scrivi sulla barra del tuo browser <strong>blog/database.php</strong> (subito dopo il tuo url) e sarà avviato lo script di installazione. Cliccando sul pulsante sarai dirottato alla nuova pagina!
	  <br /><br /><div align="center"><a href="../blog/database.php" target="_blank" class="button1">Procedi qui per installare il mod phpBB utente blog</a></div>
	</p><br />
 	<hr>
	<p><strong style="text-transform: uppercase;">Nota:</strong> Se le installazioni addizionali sono state eseguite, puoi cancellare la directory di installazione, directory \umil\ e il file blog/<strong>database.php</strong>, puoi uscire da questa pagina di installazione opzionale <a href="index.php?mode=bbcode">bbcodes</a> o loggarti nel tuo forum Portal XL 5.0 Premod <a href="../ucp.php?mode=login"></a>.</p>',

	// Tabs language definitions
	'CAT_UPGRADE_PREMOD'	=> 'Aggiornamento Premod',
	'CAT_OVERVIEW'			=> 'Panoramica',
	'CAT_INSTALL'			=> 'Installazione Base',
	'CAT_UPDATE'			=> 'Aggiornamento versione',
	'CAT_UPGRADE_REMOVE'	=> 'Elimina Portale',
	'CAT_BBCODE'			=> 'bbCode',

));
?>
