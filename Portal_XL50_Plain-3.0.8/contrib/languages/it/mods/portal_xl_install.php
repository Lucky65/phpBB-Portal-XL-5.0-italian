<?PHP
/** 
*
* portal_xl_install.php [Italian]
*
* @package language for phpBB3 Portal XL
* @version $Id: portal_xl_install.php,v 1.2 2009/10/20 damysterious Exp $
* @copyright (c) 2008 DaMysterious
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

$lang = array_merge($lang, array(
	// Portal XL Convert Procedure
	'PORTAL_CONVERT'				=> 'Conversione XL Converting',
	'PORTAL_CONVERT_BASIC_FINISHED'	=> 'Le tabelle del database sono ora aggiornate per le nuove funzioni testo di phpBB 3.<br />Lo script converte anche il testo.<br /><br />Per evitare timeout di errori e malfunzionamenti durante la conversione testi, si prega di non chiudere il browser fino a quando lo script ha terminato la conversione.<br /><br />Ma se vuoi interrompere questa procedura, riavvia nuovamente lo script per continuare.<br /><br />Sii paziente mentre lo script convertire i testi e attendi la fine di questo messaggio, perchè in aggiunta al numero di testi che devono essere convertiti, lo script può richiedere alcuni minuti per fare tutto il lavoro.',
	'PORTAL_CONVERT_DATABASE'		=> 'Conversione database',
	'PORTAL_CONVERT_NOT_POSSIBLE'	=> '<strong>La conversione non è possibile!</strong><br /><br />Questa release di Portal XL non può essere convertita a Portal XL 4.0 Moddata.<br /><br />La realease minima di Portal XL deve essere<strong>Premod RC2</strong><br />La tua attuale versione di Portal XL è<strong>%1$s</strong>.<br /><br />Se la tua versione non è almento Portal XL Premod RC2, lo script non sarà in grado di aggiornare il seguito.',
	'PORTAL_CONVERT_PROCEDURE'		=> 'Correnti %1$s di %2$ aggiornamento di dati sono completati.<br /><br />Far clic sul bottone qui sotto per continuare o attendi fino al momento del riavvio dello script stesso.',
	'PORTAL_CONVERT_TODO'			=> 'Da qui tutte le tabelle del database in uso da Portal XL 5.0 Plain saranno convertite all’ultima versione di Portal XL 4.0 Premod RC5.<br /><br />Per avviare la procedura di conversione, fare clic sul bottone qui sotto.<br /><br />Sii paziente durante la procedura di conversione, per terminare la procedura di conversione potrebbero occorrere alcuni minuti.',
	'PORTAL_FINAL_CONVERT_STEP'		=> 'Conversione di tutte le tabelle esistenti in uso a Portal XL terminata.<br />Per completare l’intera procedura utilizzando il MOD alla fine c’è un ultimo passo necessario da fare. Fare clic sul pulsante in basso per finire l’ultima parte.',

	// Portal XL Installation Procedure
	'PORTAL_INSTALL'				=> 'Installazione Portal XL',

	'PORTAL_INSTALL_EXPLAIN'		=> '<p>Benvenuto in Portal XL Installazione guidata<br />Questa è l’installazione di Portal XL. Il tuo originale, folle Portale per phpBB3.</p>
	<p>Per procedere all’installazione è necessario seguire la procedura raccomandata:</p>
	<ul>
		<li>Assicurati di aver fatto una copia di backup di tutti i contenuti della directory <strong><span style="color:#FF0000;">\root\</span></strong> del tuo phpBB 3.0.x es. <strong><span style="color:#FF0000;">\forum\</span></strong> solo (se presente)!</li>
	</ul>
	<ul>
		<li><em><strong><span style="color:#009900;">Permessi file CHMOD</span></strong></em><br />
		<em>Dopo l’installazione devi settare tutti i CHMODS su i relativi files e directories *Permessi su file e cartelle.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> in</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> in</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> in</span></strong>:<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		</li>
	</ul>
	<p>Per iniziare premi il pulsante.</p>',
	
	'PORTAL_INSTALL_NEXT'			=> 'Il database è stato correttamente creato.<br /><br />Clicca sul pulsante per eseguire il prossimo step e per registrare i valori di default nelle tabelle.',
	'PORTAL_INSTALL_FINISHED'		=> 'Portal XL Installazione completata',
	'PORTAL_INSTALL_INTRO'			=> 'Benvenuto sull’installazione di Portal XL',

	'PORTAL_INSTALL_FINISHED_EXPLAIN'	=> '
		<p>Hai correttamente installato Portal XL 5.0 %1$s. Ora hai a disposizione diverse opzioni per quanto riguarda il tuo Portal XL:</p>
		<p><strong style="text-transform: uppercase; font-size:13px; color: #FF0000;">Nota:</strong></span><br /><br /><span style="font-size:13px; color: #FF0000;">Prima di procedere è necessario disporre di una copia di tutti i contenuti all’interno della <strong>\root\</strong> del tuo portal XL.</span></p>
		<h2>Vai sul tuo Portal XL!</h2>
		<p>Cliccando sul pulsante sotto andrai sul tuo pannello di amministrazione (ACP). Prendi un po di tempo per esaminare le opzioni a tua disposizione. Ricorda che è disponibile un aiuto on-line su <a href="http://damysterious.xs4all.nl/portal_premod/">Portal XL Home</a> e sul <a href="http://damysterious.xs4all.nl/portal_premod/viewforum.php?f=1">forum di supporto</a> per Portal XL 4.0 Premod RC5, o sul <a href="http://damysterious.xs4all.nl/portal_premod/viewforum.php?f=44">forum di supporto</a> per Portal XL 5.0 Plain.</p><p><strong>Cancella, sposta o rinomina la directory di installazione. Se la directory è presente, solo l’amministrazione sarà accessibile.</strong></p>',

	'PORTAL_INSTALL_NOT_POSSIBLE'	=> '<strong>Installazione non possibile!</strong><br /><br />Lo script ha trovato una installazione già esistente, non usare ancora l’installazione.',

	'PORTAL_OVERVIEW_BODY'			=> 'Questa è la nuova versione <strong>Free</strong> di phpBB3 Portal XL, è la soluzione flessibile per il tuo phpBB 3.0.x.<br /><br />
	Questo portale si sforza di essere altamente personalizzabile include anche tanti utili addons. Allo stesso tempo, offriamo una rapida ed efficace supporto rispetto ad altre comunità phpBB3 con i relativi portali. Noi non pretendiamo di diventare un portale di riferimento per i mods o per phpBB3 e non ci consideriamo professionisti. Facciamo questo solo per divertimento nel nostro tempo libero, anche se stiamo cercando di fare del nostro meglio per avere un pacchetto professionale con il minor numero di bugs possibili e senza bisogno di alcuna conoscenza di scripting.
	<p>Date memorabili della realizzazione di phpBB3 Portal XL
	<ul>
		<li>Portal XL 5.0 RC4-Plain (26-02-2008 prima realizzazione)</li>
		<li>Portal XL 5.0 Plain (12-04-2008)</li>
		<li>Portal XL 5.0 Plain 0.1 (31-05-2008)</li>
		<li>Portal XL 5.0 Plain 0.2 (31-10-2008)</li>
        <li>Portal XL 5.0 Plain 0.2 per phpBB 3.0.6 (24-11-2009)</li>
		<li>Portal XL 5.0 Plain 0.2 per phpBB 3.0.7 (07-03-2010)</li>
	</ul></p><br />Per proseguire, scegli tra le schede disponibili nel menu a sinistra e in alto.',
	
	'PORTAL_SQL_UPDATE_DONE'		=> '<strong>Azione database:</strong><br />',
	'PORTAL_SUB_SUPPORT'			=> 'Supporto Generale Portal XL',
	'PORTAL_SUPPORT_BODY'			=> 'Se ha bisogno di aiuto, soprattutto durante la fase di rilascio di versioni beta, puoi trovare supporto su <a href="http://damysterious.xs4all.nl/portal_premod/" target="_blank">damysterious.xs4all.nl</a> (in inglese) e su <a href="http://www.portalxl.eu/" target="_blank">Portal XL Italia</a> (in italiano), qui potrai anche segnalare eventuali bugs. Tieni a mente che avrai un supporto limitato, e che supportiamo solo l’ultima versione rilasciata. <br /><br />Poichè non siamo in grado di sapere cosa è stato modificato durante l’installazione del tuo phpBB, soprattutto se hai aggiunto dei mods, non possiamo garantirti assistenza illimitata.',

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
		<li>in aggiunta a quanto sopra tutti ibbcodes personalizzati installato mediante l’uso di questo installatore saranno eliminati.</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Nota:</strong> Prima di procedere scarica nuovamente una versione originale di phpBB 3.0.x e sovrascrivi gli esistenti files, devi però essere sicuro di di aver eliminato la cartella <span style="color:#009900;">/install/</span> e il file <span style="color:#FF0000;">config.php</span> dal tuo pacchetto phpBB 3.0.x originale.</p>
	<p>Grazie per aver usato Portal XL.</p><br /><br />',
	
	'PORTAL_SQL_REMOVE_DONE'		=> '<strong>Azione database:</strong><br />',
	'PORTAL_FINAL_REMOVE_STEP'		=> 'Tutte le voci esistenti e tabelle verranno eliminate.<br /><br />Clicca sul pulsante per continuare o attendi qualche secondo per essere automaticamente dirottato al prossimo step.',
	'REMOVE_DATABASE'				=> 'Procedi all’eliminazione',
	'STAGE_REMOVE_DB'				=> 'Elimina database',

	// Portal XL CHMOD Directories
	'PORTAL_CHMOD'					=> 'CHMOD Portal XL',
	'PORTAL_CHMOD_NOT_POSSIBLE'		=> '<strong>CHMOD non possibile!</strong><br /><br />La tua versione di questo portale %egrave: <strong>%1$s</strong><br /><br />Portal XL deve avere come minimo la versione <strong>%1$s</strong>, devi settare i CHMODS a tutte le directories usate da Portal XL.<br /><br />Aggiorna manualmente a questa versione prima di proseguire.',
	'PORTAL_CHMOD_SUCCESS'			=> 'Congratulazione!<br />CHMODS a cartelle e files riusciti.',

	'PORTAL_CHMOD_TODO'				=> 'Portal XL farà un’installazione guidata e proverà a configurare i tuoi CHMODS / Rinominare le seguenti directories o files per te, ovviamente se il tuo server lo permette:
	<ul>
		<li><em><strong><span style="color:#009900;">Permessi files CHMOD</span></strong></em><br />
		<em>Dopo l’installazione devi settare tutti i CHMODS su files e directories.</em><br />
		L’installazione guidata e proverà a configurare i tuoi CHMODS.<br /><br />
		
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> in</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0666</span> in</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0777</span> in</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li><br />
		<li><em><strong><span style="color:#009900;">Rinomina directory</span></strong></em><br />
		<em>Dopo l’installazione devi verificare, eliminare, rinominare o spostare le directory <strong>/install/</strong> sul tuo server.</em><br />
		L’installazione guidata proverà a rinominarla <strong>/install/</strong> in <strong>/_install/</strong> per te.<br /><br />
		</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Nota:</strong> Come di consueto, prima di procedere fai una copia di backup dei tuoi file.</p><br /><br />',

	'PORTAL_CHMOD_DONE'			=> '<strong>Azione database:</strong><br />',
	'PORTAL_FINAL_CHMOD_STEP'	=> 'A tutte le esistenti directories e files in uso dovranno essere configurati i CHMODS.<br /><br />Clicca sul pulsante per continuare o attendi per essere dirottato automaticamente al prossimo step.',
	'PORTAL_CHMOD_FILES'		=> 'Proceedura CHMODS',

	'STAGE_CHMOD_FILES'			=> 'CHMODS in azione...<br />
	<ul>
		<li><em><strong><span style="color:#009900;">Permiss files CHMOD</span></strong></em><br />
		<em>Dopo il settaggio dei CHMODS devi controllare i tuoi files e directories.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> into</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> into</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li>
	</ul>
	Dopo aver fatto clic sul pulsante, non sarà possibile accedere a questa installazione, poi rinomina o cancella <strong>/install/</strong> to <strong>/_install/</strong>. Se è l’installer rinominerà la tua cartella in <strong>/_install/</strong>, se questo è consentito dal tuo server.<br /><br />Clicca sul pulsante per proseguire.',

	// Portal XL BBCODE Import
	'PORTAL_BBCODE'					=> 'Configurazione bbCode XL',
	'PORTAL_BBCODE_NOT_POSSIBLE'		=> '<strong>Aggiungere bbCodes personalizzati non %egrave possibile!</strong><br /><br />La tua versione per questo portale è: <strong>%1$s</strong><br /><br />L’installazione minima prevista è <strong>%1$s</strong>, per abilitare al BBCODE tutte le directories useate da Portal XL.<br /><br />Aggiorna manualmente a questa versione, prima di usare nuovamente questo script.',
	'PORTAL_BBCODE_SUCCESS'			=> 'Congratulazioni!<br />Aggiunta bbCodes personalizzati eseguiti correttamente.',

	'PORTAL_BBCODE_TODO'				=> 'Benvenuto nella personalizzazione bbCode con installazione guidata.<br /><br />Portal XL installerà i seguenti bbCodes nel vostro database:
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
		<li><span style="color:#009900;">Aggiungi align: [align=direction]tuo testo[/align]</span></li>
		<li><span style="color:#009900;">Allinea immagine sinistra: [img_l]http://img_url[/img_l]</span></li>
		<li><span style="color:#009900;">Allinea immagine destra: [img_r]http://img_url[/img_r]</span></li>
		<li><span style="color:#009900;">Aggiungi mailto: [mail=e-mail addres]indirizzo e-mail[/mail]</span></li>
		<li><span style="color:#009900;">Aggiungi spoiler allineato centrale: [spoil]tuo testo[/spoil]</span></li>
		<li><span style="color:#009900;">Aggiungi spoiler allineato sinistra: [spoil_l]tuo testo[/spoil_l]</span></li>
		<li><span style="color:#009900;">Aggiungi horizontal ruler: [hr][/hr]</span></li>
		<li><span style="color:#009900;">Aggiungi line break: [br][/br]</span></li>
		<li><span style="color:#009900;">Aggiungi WMV: [wmv]http://wmv_url[/wmv]</span></li>
		<li><span style="color:#009900;">Aggiungi super script: [sup]tuo testo[/sup]</span></li>
		<li><span style="color:#009900;">Aggiungi Flash video: [flash_i]tuo url[/flash_i]</span></li>
		<li><span style="color:#009900;">Aggiungi stream: [stream]tuo url[/stream]</span></li>
		<li><span style="color:#009900;">Aggiungi FLV: [flv]tuo url[/flv]</span></li>
		<li><span style="color:#009900;">Aggiungi Real Media: [rm]tuo url[/rm]</span></li>
		<li><span style="color:#009900;">Aggiungi MOV: [mov]tuo url[/mov]</span></li>
	</ul>
	<p><strong style="text-transform: uppercase;">Nota:</strong> Come al solito fai una copia di backup del tuo database.</p><br /><br />',

	'PORTAL_SQL_BBCODE_DONE'			=> '<strong>Azione database:</strong><br />',
	'PORTAL_FINAL_BBCODE_STEP'		=> 'Aggiornamento bbCodes al database.<br /><br />Clicca sul pulsante per proseguire.',
	'BBCODE_DATABASE'				=> 'Proceedura BBCODE',

	'STAGE_BBCODE_DB'				=> 'BBCODE in azione...<br />
	<ul>
		<li><em><strong><span style="color:#009900;">Permessi BBCODE</span></strong></em><br />
		<em>Dopo l’azione ai BBCODE devi controllare tutti i permessi alle directories ed ai files.</em><br /><br />
		<strong><span style="color:#009900;">BBCODE <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">BBCODE <span style="color:#FF0000;">666</span> into</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">BBCODE <span style="color:#FF0000;">755</span> into</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li>
	</ul>
	Dopo aver fatto clic sul pulsante, non sarà possibile accedere a questa installazione per la rinominazione della cartella install <strong>/install/</strong> in <strong>/_install/</strong>. Se hai bisogno di installare ancora rinomina la cartella <strong>/_install/</strong> e potrai accedere alla directory.<br /><br />Clicca sul pulsante per proseguire.',

   'PORTAL_FINAL_MODULE_STEP'		=> 'Aggiornamento del database tabelle moduli.<br /><br />Clicca sul pulsante per proseguire.',
   'PORTAL_FINAL_CONFIGFILE_STEP'	=> 'Aggiorna il file config.php nella root del tuo forum.<br /><br />Clicca sul pulsante per proseguire.',
   'PORTAL_SQL_MODULE_DONE'			=> '<strong>Azione database:</strong><br />',

   'STAGE_INSERT_DATA'				=> 'Aggiunta valori di default',
   'STAGE_POPULATE_DB'				=> 'Le tabelle del database sono disponibili.<br /><br />Clicca sul pulsante per popolare le tabelle.',
   'STAGE_CHMOD'					=> 'CHMOD files',
   'STAGE_BBCODE'					=> 'Importazione bbCode',
   'STAGE_INSERT_MODULES'			=> 'Aggiungi Moduli',
   'PORTAL_NOT_INSTALLED'			=> 'Nessuna installazione trovata',
   'PORTAL_NOT_INSTALLED_EXPLAIN'	=> 'E’ necessaria un’installazione di Portal XL, devi <a href="%s">procedere prima alla installazione di Portal XL</a>.',
   'CAT_REMOVE'				        => 'Elimina',
   
	// Portal XL version check
	'VERSION_CHECK'					=> 'Controllo versione',
	'VERSION_CHECK_EXPLAIN'			=> 'Controlla se l’attuale versione è aggiornata.',
	'VERSION_UP_TO_DATE_ACP'		=> 'La tua versione è aggiornata, non risultano aggiornamenti disponibili per questa versione di Portal XL. Non sono necessari aggiornamenti.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'La tua versione non è aggiornata.<br />Di seguito troverai un link per l’annuncio di aggiornamento versione con le istruzioni su come eseguire l’aggiornamento.',
	'CURRENT_VERSION'				=> 'Versione attuale',
	'LATEST_VERSION'				=> 'Ultima versione',
	'UPDATE_INSTRUCTIONS'			=> '
		<h2>Come aggiornare la tua installazione con l’ultimo pacchetto</h2>

		<p>Il modo consigliato per aggiornare la tua installazione qui indicato è valido solo per l’ultima versione. Puoi anche seguire le istruzioni contenute nel documento \docs\PORTAL_XL_INSTALL_IT.html. Gli step per l’aggiornamento di Portal XL sono:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Vai sulla <a href="http://www.portalxl.nl/forum/" title="http://www.portalxl.nl/forum/">pagina downloads di Portal XL</a> e scarica "l’ultimo pacchetto".<br /></li>
			<li>Per la versione italiana vai sulla <a href="http://www.portalxl.eu/" title="Portal XL Italia/">pagina downloads di Portal XL</a> e scarica "l’ultimo pacchetto".<br /></li>
			<li>Scompatta l’archivio.<br /></li>
			<li>Carica l’intero contenuto della cartella \root\ (rispettando la struttura) sulla tua root o public_html (dove hai installato phpbb 3.0.6 e dove si trova il tuo config.php).<br /></li>
			<li>Esegui \install\index.php per iniziare l’installazione, scegli la scheda "Aggiornamento"<br /></li>
			<li>Aggiorna la cache e gli stili!<br /></li>
		</ul>
	',

));

?>