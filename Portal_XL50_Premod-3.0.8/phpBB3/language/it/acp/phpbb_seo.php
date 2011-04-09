<?php
/** 
*
* phpbb_seo [Italian]
*
* @package phpbb_seo
* @version $Id: phpbb_seo.php, 2007/08/30 13:48:48 fds Exp $
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/16
* @copyright (c) 2007 phpBB SEO
*
*/
/**
* DO NOT CHANGE
*/
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
	// ACP Main CAT
	'ACP_CAT_PHPBB_SEO'	=> 'phpBB SEO',
	'ACP_MOD_REWRITE'	=> 'Configurazione URL Rewriting',
	// ACP sub Cat
	'ACP_PHPBB_SEO_CLASS'	=> 'Configurazione phpBB SEO Class',
	'ACP_PHPBB_SEO_CLASS_EXPLAIN'	=> 'Puoi impostare varie opzioni del phpBB SEO mod rewrite.<br/>Le varie impostazioni di default, come i delimitatori ed i suffissi devono essere istituiti in phpbb_seo_class.php, dal momento che implica una modifica di queste nell’.htaccess e, molto probabilmente, nel caso di redirezioni.%s',
	'ACP_PHPBB_SEO_VERSION' => 'Versione',
	'ACP_SEO_SUPPORT_FORUM' => 'Supporto Forum',
	// ACP sub Cat
	'ACP_FORUM_URL'	=> 'Gestione URL Forum',
	'ACP_FORUM_URL_EXPLAIN'		=> 'Qui puoi vedere quello che contiene la cache del forum, il titolo da inserire nei loro URL.<br/>Il forum di colore verde è in cache, quello di colore rosso non è in cache.<br/><br/><b style="color:red">Nota bene</b><ul><b>any-title-fxx/</b> sarà sempre correttamente reindirizzato con Zero duplicati, ma non sarà il caso se si modifica <b>any-title/</b> a <b>something-else/</b>.<br/> In questo caso, <b>any-title/</b> sarà trattato come un forum che non esiste se non imposti adeguate redirezioni.</ul>',
	'ACP_NO_FORUM_URL'	=> '<b>Gestione URL forum disattivato<b><br/>La gestione dell’URL forum è disponibile in avanzate e nel modo misto quando la cach del forum è attivata.<br/>Gli URL sono già configurati e resterà attivo in modalità mista e avanzata.',
	// ACP sub Cat
	'ACP_HTACCESS'	=> '.htaccess',
	'ACP_HTACCESS_EXPLAIN'	=> 'Questo strumento ti aiuterà a cui costruire il tuo .htacess.<br/>La versione proposta è scritta nella tua configurazione di phpbb_seo/phpbb_seo_class.php.<br/>Puoi modificare i valori di $seo_ext e $seo_static prima di installare .htaccess e personalizzare gli URL.<br/>Puoi ad esempio scegliere di usare .htm invece di .html, ’message’ invece di ’post’ ’mysite-team’ invece di ’the-team’ e altri.<br/>Puoi modificare mentre sei già indicizzato in SE, devi personalizzate le redirezioni.<br/>La configurazione di default non va bene per tutto, puoi saltare questo step senza preoccupazioni, se preferisci.<br/>E’il momento migliore per farlo, facendolo dopo richiederà alcuni personalizzate redirezioni.<br/>Per default l’.htaccess deve essere caricato nella root del dominio (es dove www.example.com è linkato).<br/>Se phpBB è inserito in una sotto-directory, devi aggiungere l’opzione che consente di caricare nel phpBB.',
	'SEO_HTACCESS_RBASE'	=> 'Locazione .htaccess',
	'SEO_HTACCESS_RBASE_EXPLAIN' => 'Inserisci .htaccess nella root del tuo phpBB ?<br/>La configurazione di base permette di aggiungere .htaccess nella tua directory. Generalmente è più conveniente inserire htaccess nellla cartella principale del phpbb, puoi anche aggiungerlo in una sotto directory,  ma è preferibile inserire l’htaccess nella directory principale.',
	'SEO_HTACCESS_SLASH'	=> 'RegEx Slash Destro',
	'SEO_HTACCESS_SLASH_EXPLAIN'	=> 'Dipende dall’host che usi, potrebbe essere necessario eliminare o aggiungere  ("/") all’inizio della parte destra di ogni rewriterules. Questo particolare slash è usato per default quando .htaccess è posizionato nel primo livello della root. Al contrario se è posizionato in una sottodirectory ed usi un .htaccess nella stessa directory.<br/>Le impostazioni predefinite dovrebbero funzionare automaticamente, in caso contrario prova a rigenerare un .htaccess usando il pulsante di rigenerazione.',
	'SEO_HTACCESS_WSLASH'	=> 'RegEx Slash Sinistro',
	'SEO_HTACCESS_WSLASH_EXPLAIN'	=> 'Dipende dall’host che usi, potrebbe essere necessario eliminare o aggiungere  ("/") all’inizio della parte destra di ogni rewriterules. Questo particolare slash non è usato per default.<br/>Le impostazioni predefinite dovrebbero funzionare automaticamente, in caso contrario prova a rigenerare un .htaccess usando il pulsante di rigenerazione.',
	'SEO_MORE_OPTION'	=> 'Altre Opzioni',
	'SEO_MORE_OPTION_EXPLAIN' => 'Se il primo suggerimento non funziona.<br/>Sii sicuro che il mod_rewrite sia attivato sul tuo server.<br/>Quindi, assicurati di avere caricato il .htaccess nella cartella giusta, e che non ci siano altri .htaccess che creano conflitto.<br/>Se questo non basta verifica le altre opzioni.',
	'SEO_HTACCESS_SAVE' => 'Salva .htaccess',
	'SEO_HTACCESS_SAVE_EXPLAIN' => 'Se selezionato un .htaccess verrà generato nella directory phpbb_seo/cache/. Quindi sarà pronto per essere usato con le tue impostazioni.',
	'SEO_HTACCESS_ROOT_MSG'	=> 'Quando sei pronto è possibile selezionare il codice .htaccess, ed incollarlo nel tuo file .htaccess file o usare "Salva .htaccess" con le relative istruzioni.<br/> Questo .htaccess è pensato per essere usato nella cartella principale del tuo dominio, nel tuo caso <u>%1$s</u> aggiungilo con il tuo FTP.<br/><br/>Puoi anche rigenerare un .htaccess in una sottodirectory usando le altre opzioni.',
	'SEO_HTACCESS_FOLDER_MSG' => 'Quando sei pronto è possibile selezionare il codice .htaccess, ed incollarlo nel tuo file .htaccess file o usare "Salva .htaccess" con le relative istruzioni.<br/> Questo .htaccess è pensato per essere usato nella cartella principale del tuo dominio, nel tuo caso <u>%1$s</u> aggiungilo con il tuo FTP.',
	'SEO_HTACCESS_CAPTION' => 'Titolo',
	'SEO_HTACCESS_CAPTION_COMMENT' => 'Commenti',
	'SEO_HTACCESS_CAPTION_STATIC' => 'Statistica, modificabile in phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_DELIM' => 'Delimitatori, modificabili in phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_SUFFIX' => 'Suffissi, modificabili in phpbb_seo_class.php',
	'SEO_HTACCESS_CAPTION_SLASH' => 'Slashes opzionali',
	'SEO_SLASH_DEFAULT'	=> 'Default',
	'SEO_SLASH_ALT'		=> 'Alternato',
	'SEO_MOD_TYPE_ER'	=> 'Il mod rewrite non è installato correttamente in phpbb_seo/phpbb_seo_class.php.', 
	'SEO_SHOW'		=> 'Mostra',
	'SEO_HIDE'		=> 'Nascondi',
	'SEO_SELECT_ALL'	=> 'Seleziona tutto',
	// Install
	'SEO_INSTALL_PANEL'	=> 'phpBB SEO Pannello Installazione',
	'SEO_ERROR_INSTALL'	=> 'Risulta un’errore nel processo di installazione. Disinstalla prima di riprovare.',
	'SEO_ERROR_INSTALLED'	=> 'Il modulo %s è già installato.',
	'SEO_ERROR_ID'	=> 'Il modulo %1$ ha numero ID.',
	'SEO_ERROR_UNINSTALLED'	=> 'Il modulo %s è già disinstallato.',
	'SEO_ERROR_INFO'	=> 'Informazione :',
	'SEO_FINAL_INSTALL_PHPBB_SEO'	=> 'Login in ACP',
	'SEO_FINAL_UNINSTALL_PHPBB_SEO'	=> 'Ritorna all’indice del forum',
	'CAT_INSTALL_PHPBB_SEO'	=> 'Installazione',
	'CAT_UNINSTALL_PHPBB_SEO'	=> 'Disinstallazione',
	'SEO_OVERVIEW_TITLE'	=> 'Panoramica phpBB SEO Mod rewrite',
	'SEO_OVERVIEW_BODY'	=> 'Benvenuto nella versione pubblica di %1$s phpBB3 SEO mod rewrite %2$s.</p><p>Leggi <a href="%3$s" title="Check the release thread" target="_phpBBSEO"><b>the release thread</b></a> per altre informazioni</p><p><strong style="text-transform: uppercase;">Nota:</strong> Devi avere già svolto le necessarie modifiche al codice e caricato tutti i nuovi file prima di poter procedere con questa procedura guidata di installazione.</p><p>Questo sistema di installazione ti guiderà attraverso il processo di installazione. Ti permetterà di scegliere in modo accurato il tuo phpBB rewritten URL standard per il migliore uso nei motori di ricerca</p>.',
	'CAT_SEO_PREMOD'	=> 'phpBB SEO Premod',
	'SEO_PREMOD_TITLE'	=> 'Panoramica phpBB SEO Premod',
	'SEO_PREMOD_BODY'	=> 'Benvenuto nella versione pubblica di phpBB SEO Premod.</p><p>Leggi <a href="http://www.phpbb-seo.com/boards/phpbb-seo-premod/seo-url-premod-vt1549.html" title="Check the release thread" target="_phpBBSEO"><b>the release thread</b></a> per altre informazioni</p><p><strong style="text-transform: uppercase;">Nota:</strong> Potrai scegliere tra i tre phpBB3 SEO mod rewrites.<br/><br/><b>Tre differenti URL rewriting standards disponibili :</b><ul><li><a href="http://www.phpbb-seo.com/boards/simple-seo-url/simple-phpbb3-seo-url-vt1566.html" title="More details about the Simple mod"><b>The Simple mod</b></a>,</li><li><a href="http://www.phpbb-seo.com/boards/mixed-seo-url/mixed-phpbb3-seo-url-vt1565.html" title="More details about the Mixed mod"><b>The Mixed mod</b></a>,</li><li><a href="http://www.phpbb-seo.com/boards/advanced-seo-url/advanced-phpbb3-seo-url-vt1219.html" title="More details about the Advanced mod"><b>Advanced</b></a>.</li></ul>Questa scelta è molto importante, ti invitiamo a prendere il tempo per scoprire gli strumenti SEO di questo mod prima di metterlo online.<br/>Installarlo è semplice su phpBB3, segui il processo di installazione.<br/><br/>
	<p>Requisiti per URL rewriting :</p>
	<ul>
		<li>Apache server (linux OS) con mod_rewrite module.</li>
		<li>IIS server (windows OS) con isapi_rewrite module, ma devi adattare le regole di rewrite in httpd.ini</li>
	</ul>
	<p>Dopo averlo installato sarà necessario andare nel tuo ACP ed attivare il mod.</p>',
	'SEO_LICENCE_TITLE'	=> 'LICENZA PUBBLICA RECIPROCA',
	'SEO_LICENCE_BODY'	=> 'Il phpBB SEO mod rewrites è realizzato sotto licenza RPL e afferma che non è possibile rimuovere i crediti di phpBB SEO.<br/>Per altri dettagli ed eventuali eccezioni, contatta l’amministratore di phpBB SEO (primarily SeO or dcz).',
	'SEO_PREMOD_LICENCE'	=> 'Il phpBB SEO mod rewrites e Zero duplicati incluso in questo mod sono realizzati sotto licenza RPL, per utilizzare liberamente questo software, la licenza afferma che tu non puoi eliminare i crediti di phpBB SEO.<br/>Per altri dettagli ed eventuali eccezioni, contatta l’amministratore di phpBB SEO (primarily SeO or dcz).',
	'SEO_SUPPORT_TITLE'	=> 'Supporto',
	'SEO_SUPPORT_BODY'	=> 'Pieno supporto è disponibile nel <a href="%1$s" title="Visit the %2$s SEO URL forum" target="_phpBBSEO"><b>%2$s SEO URL forum</b></a>. Puoi trovare risposte generali riguardanti l’installazione, problemi di configurazione, e supporto per altri problemi.</p><p>Visita il nostro <a href="http://www.phpbb-seo.com/boards/" title="SEO Forum" target="_phpBBSEO"><b>Search Engine Optimization forums</b></a>.</p><p>Devi <a href="http://www.phpbb-seo.com/boards/profile.php?mode=register" title="Register to phpBB SEO" target="_phpBBSEO"><b>registrarti</b></a>, loggarti e <a href="%3$s" title="Be notified about updates" target="_phpBBSEO"><b>sottoscrivere il thread della versione</b></a> per ricevere le relative notifiche o aggiornamenti.',
	'SEO_PREMOD_SUPPORT_BODY'	=> 'Pieno supporto è disponibile nel <a href="http://www.phpbb-seo.com/boards/phpbb-seo-premod-vf61/" title="Visit the phpBB SEO Premod forum" target="_phpBBSEO"><b>phpBB SEO Premod forum</b></a>. Puoi trovare risposte generali riguardanti l’installazione, problemi di configurazione, e supporto per altri problemi.</p><p>Visita il nostro <a href="http://www.phpbb-seo.com/boards/" title="SEO Forum" target="_phpBBSEO"><b>Search Engine Optimization forums</b></a>.</p><p>Devi <a href="http://www.phpbb-seo.com/boards/profile.php?mode=register" title="Register to phpBB SEO" target="_phpBBSEO"><b>registrarti</b></a>, loggarti e <a href="http://www.phpbb-seo.com/boards/viewtopic.php?t=1549&watch=topic" title="Be notified about updates" target="_phpBBSEO"><b>sottoscrivere il thread della versione</b></a> per ricevere le relative notifiche o aggiornamenti.',
	'SEO_INSTALL_INTRO'		=> 'Benvenuto nell’installazione guidata di phpBB SEO',
	'SEO_INSTALL_INTRO_BODY'	=> '<p>Stai per installare %1$s phpBB SEO mod rewrite %2$s. Il tool di installazione attiverà il phpBB SEO mod rewrite nel tuo pannello di controllo ACP.</p><p>Una volta installato, sarà necessario andare nel tuo ACP per attivare il mod.</p>
	<p><strong>Nota:</strong> Se è la prima volta si tenta questo mod, si consiglia vivamente di prendere il tempo per testare i vari standard url questo mod può produrre a livello locale o privato su un server di prova. In questo modo, non si mostra un bot URL diverso per ogni giorno, mentre fai le prove. E non si scopre un mese dopo che avresti preferito URL diversi. La pazienza è virtù SEO saggia e anche se il reindirizzamento di Zero duplicati HTTP rende il tutto molto facile, non vuoi reindirizzare tutti i forum del tuo URL troppo spesso.</p><br/>
	<p>Requisiti :</p>
	<ul>
		<li>Apache server (linux OS) con mod_rewrite module.</li>
		<li>IIS server (windows OS) with isapi_rewrite module, ma devi adattare le regole nel tuo httpd.ini</li>
	</ul>',
	'SEO_INSTALL'		=> 'Installazione',
	'UN_SEO_INSTALL_INTRO'		=> 'Benvenuti nella procedura guidata di disinstallazione di phpBB SEO',
	'UN_SEO_INSTALL_INTRO_BODY'	=> '<p>Stai per disinstallare il %1$s phpBB SEO mod rewrite %2$s ACP module.</p>
	<p><strong>Nota:</strong> non disattivare la riscrittura degli URL sul tuo forum finchè i files phpBB non sono ancora moddati.</p>',
	'UN_SEO_INSTALL'		=> 'Elimina',
	'SEO_INSTALL_CONGRATS'			=> 'Congratulazioni!',
	'SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Hai appena installato con successo il %1$s phpBB3 SEO mod rewrite %2$s. Devi andare ora nel tuo ACP per configurare il mod.<p>
	<p>Nella nuova categoria phpBB SEO, devi attivare :</p>
	<h2>Selezionare e attivare l’URL rewriting</h2>
		<p>Prenditi il tempo per sceliere come preferisci il tuo url. Le opzioni di Zero duplicati sono ora state installate.</p>
	<h2>Scegli accuratamente l’URL del tuo forum</h2>
		<p>Utilizzandolo in modo misto o avanzato, potrai dissociare gli URL del forum dai loro titoli e scegliere di utilizzare qualsiasi parola chiave.</p>
	<h2>Genera e personalizza .htaccess</h2>
	<p>Dopo aver creato le opzioni di cui sopra, sarai in grado di generare uno .htaccess personalizzato e salvarlo direttamente sul server.</p>',
	'UN_SEO_INSTALL_CONGRATS'	=> 'Il modulo phpBB SEO è stato eliminato.',
	'UN_SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Hai correttamente eliminato il %1$s phpBB3 SEO mod rewrite %2$s.<p>
	<p>Ora, non sisattivare la riscrittura degli URL finchè i files phpBB non saranno moddati.</p>',
	'SEO_VALIDATE_INFO'	=> 'Info validazione :',
	// Security
	'SEO_LOGIN'		=> 'Il forum richiede che tu sia registrato e loggato per vedere questa pagina.',
	'SEO_LOGIN_ADMIN'	=> 'Il forum richiede che tu sia loggato come admin per vedere questa pagina.<br/>La sessione è stata cancellata per motivi di sicurezza.',
	'SEO_LOGIN_FOUNDER'	=> 'Il forum richiede che tu sia loggato per vedere questa pagina.',
	'SEO_LOGIN_SESSION'	=> 'Controllo sessione fallito.<br/>La configurazione non è stata alterata.<br/>La sessione è stata cancellata per motivi di sicurezza.',
	// Cache status
	'SEO_CACHE_FILE_TITLE'	=> 'Stato cache file',
	'SEO_CACHE_STATUS'	=> 'La directory cache è configurata in : <b>%s</b>',
	'SEO_CACHE_FOUND'	=> 'La directory cache è stata trovata.',
	'SEO_CACHE_NOT_FOUND'	=> 'La directory cache non è stata trovata.',
	'SEO_CACHE_WRITABLE'	=> 'La directory cache è scrivibile.',
	'SEO_CACHE_UNWRITABLE'	=> 'La directory cache non è scrivibile. Devi settare a 777 il tuo CHMOD.',
	'SEO_CACHE_FORUM_NAME'	=> 'Nome forum',
	'SEO_CACHE_URL_OK'	=> 'URL Cache',
	'SEO_CACHE_URL_NOT_OK'	=> 'Questo URL non è in cache',
	'SEO_CACHE_URL'		=> 'URL finale',
	'SEO_CACHE_MSG_OK'	=> 'Il file cache è stato aggiornato.',
	'SEO_CACHE_MSG_FAIL'	=> 'Risulta un errore nell’aggiornamento del file cache.',
	'SEO_CACHE_UPDATE_FAIL'	=> 'L’url inserito non può essere utilizzato, la cache è stata alterata.',
	// Seo advices
	'SEO_ADVICE_DUPE'	=> 'E’ stato rilevato un contenuto duplicato nel titolo URL : <b>%1$s</b>.<br/>Esso resterà invariato fino a quando non aggiorni.',
	'SEO_ADVICE_RESERVED'	=> 'Url riservati (utilizzati da altri URL, come membri di tali profili), il loro ingresso nel titolo è stato rilevato per un forum URL : <b>%1$s</b>.<br/>Esso resterà invariato fino a quando non aggiorni.',
	'SEO_ADVICE_LENGTH'	=> 'L’URL cache è un troppo lungo.<br/>Cerca di accorciarlo',
	'SEO_ADVICE_DELIM'	=> 'L’URL cache contiene un delimitatore SEO e ID.<br/>Cerca di rispettare la struttura originale.',
	'SEO_ADVICE_WORDS'	=> 'L’URL cache contiene troppe parole.<br/>Cerca di crearne uno migliore.',
	'SEO_ADVICE_DEFAULT'	=> 'La fine dell’URL, dopo la formattazione, è di default.<br/>Cerca di rispettare la struttura originale.',
	'SEO_ADVICE_START'	=> 'Forum URL non può terminare con un parametro di impaginazione.<br/>Saranno eliminati dall’invio.',
	'SEO_ADVICE_DELIM_REM'	=> 'L’URL non può terminare con un forum delimitatore.<br/>Saranno eliminati dall’invio.',
	// Mod Rewrite type
	'ACP_SEO_SIMPLE'	=> 'Semplice',
	'ACP_SEO_MIXED'		=> 'Misto',
	'ACP_SEO_ADVANCED'	=> 'Avanzato',
	// phpBB SEO Class option
	'url_rewrite' => 'Attiva URL rewriting',
	'url_rewrite_explain' => 'Dopo aver attivato le opzioni qui di seguito, e aver generato un .htaccess personalizzato, è possibile attivare la riscrittura URL e verificare se il tuo URL funziona correttamente. Se ricevi un errore 404, è probabile che hai un problema, prova a crearne uno nuovo.',
	'modrtype' => 'Tipo URL rewriting',
	'modrtype_explain' => 'Il phpBB SEO premod è compatibile con tre phpBB SEO mod rewrite.<br/>Il <a href="http://www.phpbb-seo.com/boards/simple-seo-url/simple-phpbb3-seo-url-vt1566.html" title="More details about the Simple mod"><b>Semplice</b></a> il <a href="http://www.phpbb-seo.com/boards/mixed-seo-url/mixed-phpbb3-seo-url-vt1565.html" title="More details about the Mixed mod"><b>Misto</b></a>e<a href="http://www.phpbb-seo.com/boards/advanced-seo-url/advanced-phpbb3-seo-url-vt1219.html" title="More details about the Advanced mod"><b>l’Avanzato</b></a>.<br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Modificando queste opzioni cambierà il modo di scrivere l’URL  su tuo sito.<br/>Farlo con un sito web già indicizzato dovrebbe quindi essere considerato con la stessa attenzione di una migrazione e non frequentemente.<br/>Decidi come meglio credi se proseguire.</ul>',
	'profile_inj' => 'Profili e gruppi',
	'profile_inj_explain' => 'Puoi usare nickname, nomi di gruppo, e messaggi utenti (facoltativo vedi sotto) URL al posto di quello di default, <b>phpBB/nickname-uxx.html</b> riscritti come <b>phpBB/memberxx.html</b>.<br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Modificando questa opzione sarà richiesto un aggiornamento  di .htaccess</ul>',
	'profile_vfolder' => 'Profilo directory virtuale',
	'profile_vfolder_explain' => 'Puoi scegliere di simulare un struttura di directory per profili e messaggi di pagina (opzionale vedi sotto) URLs, <b>phpBB/nickname-uxx/(topics/)</b> o <b>phpBB/memberxx/(topics/)</b> intestati come <b>phpBB/nickname-uxx(-topics).html</b> e <b>phpBB/memberxx(-topics).html</b>.<br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Il profilo ID sarà sovrascitto alla configurazione.<br/>Modificando questa opzione sarà richiesto un aggiornamento  di .htaccess</ul>',
	'profile_noids' => 'Eliminazione Profilo ID',
	'profile_noids_explain' => 'Quando il profilo ad il gruppo è attivato, puoi scegliere di usare <b>example.com/phpBB/member/nickname</b> o <b>example.com/phpBB/nickname-uxx.html</b>. phpBB usa una SQL query sulla pagina con l’user id.<br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">I caratteri speciali non saranno riconosciuti su tutti i browser. FF sempre codificato (<a href="http://www.php.net/urlencode">urlencode()</a>), e come sembra utilizzando Latin1, IE e Opera no. Per avanzate opzioni di encoding, leggi il file di installazione.<br/>Modificando queste opzioni cambierà il modo di scrivere l’URL  su tuo sito.</ul>',
	'rewrite_usermsg' => 'Ricerca comune e pagine di rewriting messaggi utente',
	'rewrite_usermsg_explain' => 'Questa opzione rende più senso se si consente l’accesso del pubblico ad entrambi i profili e alle pagine di ricerca.<br/> Utilizzando questa opzione implica un maggiore utilizzo di funzioni di ricerca e quindi un pesante carico del server.<br/> Il tipo di URL rewriting (con e senza ID) segue una serie di profili e gruppi.<br/><b>phpBB/messages/nickname/topics/</b> o <b>phpBB/nickname-uxx-topics.html</b> o <b>phpBB/memberxx-topics.html</b>.<br/>Inoltre, questa opzione attiva la ricerca comune e riscrive le pagine, come gli argomenti, senza nuovi articoli e pagine.<br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">La rimozione di tali collegamenti comporterà la stessa limitazione, come per i profili utente.<br/>Modificando queste opzioni cambierà il modo di scrivere l’URL  su tuo sito.</ul>',
	'rem_sid' => 'Eliminazione SID',
	'rem_sid_explain' => 'SID verrà rimosso dal 100% degli URL che passa attraverso il phpbb_seo class, per ospiti e bots.<br/>Questo garantisce che il bot non veda alcun SID sul forum, l’argomento e dopo gli URL, ma il visitatore che non accetta i cookie probabilmente crearà più di una sessione.<br/>Zero duplicati reindirizzerà su 301 con SID per utenti e bot per impostazione predefinita.',
	'rem_hilit' => 'Eliminazione highlights',
	'rem_hilit_explain' => 'Highlights sarà eliminato del 100% di URLs passanti attraverso il phpbb_seo class, per ospiti e bots.<br/>Zero duplicati reindirizzerà su 301 con SID per utenti e bot per impostazione predefinita.',
	'rem_small_words' => 'Elimina parole corte',
	'rem_small_words_explain' => 'Permette di eliminare tutte le parole inferiori a tre lettere in rewrite URL.<br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Il filtraggio cambia molti URL sul tuo sito web.<br/>Anche se il duplicato zero mod avrà cura di tutte le richieste di reindirizzamento quando si cambia questa opzione, prima di essere usato su un sito già indicizzato dovrebbe essere considerato con la stessa attenzione di una migrazione e non di frequente.<br/>Decidi come meglio credi, ma pensaci prima di proseguire.</ul>',
	'virtual_folder' => 'Directory virtuale',
	'virtual_folder_explain' => 'Permette di aggiungere l’URL in una directory virtuale.<br/><u>Esempio :</u><ul style="margin-left:20px"><b>forum-title-fxx/topic-title-txx.html</b> o <b>topic-title-txx.html</b><br/>per argomento URL.</ul><br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">La directory virtuale può cambiare tutte le tue URL del sito molto facilmente.<br/>quando si cambia questa opzione, prima di essere usato su un sito già indicizzato dovrebbe essere considerato con la stessa attenzione di una migrazione e non di frequente.<br/>Pensaci prima di proseguire.</ul>',
	'virtual_root' => 'Root virtuale',
	'virtual_root_explain' => 'Se phpBB è installato in una sotto directory (example phpBB3/), puoi simulare una riscrittura di links.<br/><u>Esempio :</u><ul style="margin-left:20px"><b>phpBB3/forum-title-fxx/topic-title-txx.html</b> o <b>forum-title-fxx/topic-title-txx.html</b><br/>per argomento URL.</ul><br/>Questo può essere utile per abbreviare gli URLs soprattutto se si utilizza la "Directory virtuale".Nota :</b><br/><ul style="margin-left:20px">Usando questa opzione devi usare una home page ed un’indice per il forum (esempio forum.html).<br/> Questa opzione modifica gli URLs molto rapidamente.<br/>Modificando queste opzioni cambierà il modo di scrivere l’URL  su tuo sito.</ul>',
	'cache_layer' => 'Forum URL cache',
	'cache_layer_explain' => 'Accende la cache forum per gli URL e gli consentono di separare i loro titoli dal forum URL<br/><u>Esempio :</u><ul style="margin-left:20px"><b>forum-title-fxx/</b> o <b>any-title-fxx/</b><br/>per un url forum.</ul><br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Questa opzione modifica gli URLs del tuo forum, con il rischio di modificarne troppi se usi una directory virtuale.<br/>Gli argomenti saranno sempre dirottati con Zero Duplicati.<br/></ul>',
	'rem_ids' => 'Eliminazione forum ID',
	'rem_ids_explain' => 'Elimina gli ID e delimitatori URL nel forum. Si applica solo se il caching Forum URL viene attivato<br/><u>Esempio :</u><ul style="margin-left:20px"><b>any-title-fxx/</b> o <b>any-title/</b><br/>per un url forum.</ul><br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Questa opzione modifica gli URLs del tuo forum, con il rischio di modificarne troppi se usi una directory virtuale.<br/>Gli argomenti saranno sempre dirottati con Zero Duplicati.<br/></ul>',
	// copytrights
	'copyrights' => 'Copyrights',
	'copyrights_img' => 'Link immaggine',
	'copyrights_img_explain' => 'Puoi scegliere di visualizzare un link di copyright con un’immaggine o un link di testo.',
	'copyrights_txt' => 'Link testo',
	'copyrights_txt_explain' => 'Puoi scegliere di visualizzare un link di copyright un link di testo. Lasciandolo vuoto saranno attivati i dati di default.',
	'copyrights_title' => 'Titolo link',
	'copyrights_title_explain' => 'Puoi scegliere di visualizzare un link di copyright con un titolo. Lasciandolo vuoto saranno attivati i dati di default.',
	// Zero duplicate
	// Options 
	'ACP_ZERO_DUPE_OFF' => 'Spento',
	'ACP_ZERO_DUPE_MSG' => 'Messaggio',
	'ACP_ZERO_DUPE_GUEST' => 'Ospite',
	'ACP_ZERO_DUPE_ALL' => 'Tutto',
	'zero_dupe' =>'Zero duplictati',
	'zero_dupe_explain' => 'Le seguenti configurazioni riguardano Zero duplicati, puoi modificare ciò che preferisci secondo le tue esigenze.<br/>Non implica nessun aggiornamento di .htacess.',
	'zero_dupe_on' => 'Attiva Zero duplicati',
	'zero_dupe_on_explain' => 'Attiva o disattiva il reindirizzamento di Zero Duplicati.',
	'zero_dupe_strict' => 'Modo Strict',
	'zero_dupe_strict_explain' => 'Quando viene attivato, Zero Duplicati verificherà se la richiesta URL corrisponda esattamente quello frequentato.<br/>Quando è impostato su no, Zero Duplicati verifica che l’url frequentato corrisponde alla prima parte della richiesta.<br/>L’interesse è quello di rendere più facile trattare con mods che potrebbero interferire con Zero Duplicati aggiungendo le variabili GET.',
	'zero_dupe_post_redir' => 'Reindirizzamento Messaggi',
	'zero_dupe_post_redir_explain' => 'La scelta determina il modo di gestire gli urls dei messaggi; può assumere quattro valori :<ul style="margin-left:20px"><li><b>&nbsp;spento</b>, non reindirizzare url messaggi, in ogni caso,</li><li><b>&nbsp;messaggio</b>, assicurati che postxx.html sia usato per messaggi url,</li><li><b>&nbsp;ospite</b>, reindirizzare gli ospiti, se necessario, per il corrispondente argomento url piuttosto che al postxx.html, e assicurati che postxx.html è usato per gli utenti loggati,<li><b>&nbsp;tutto</b>, reindirizzare se richiesto al corrispondente argomento url.</li></ul><br/><b style="color:red">Nota</b><br/><ul style="margin-left:20px">Mantieni <b>postxx.html</b> URL SEO fintanto che mantieni sul messaggio e disabilita l’URL del tuo file robots.txt.<br/>Reindirizzare tutto produce la maggior parte delle redirezioni tra tutti.<br/>Reindirizza postxx.html in tutti i casi, anche questo significa che un messaggio che sarà inviato in un thread e poi spostato in un altro cambierà l’url, che grazie a Zero duplicati non inficierà sulla tua SEO, ma il legame con il precedente messaggio non è un link ad esso.</ul>.',
	// no duplicate
	'no_dupe' => 'Numero duplicati',
	'no_dupe_on' => 'Attiva numero duplicati',
	'no_dupe_on_explain' => 'Il numero duplicati sostituisce l’url con il corrispondente argomento (con paginazione).<br/>Non aggiungere qualsiasi SQL una query JOIN già in corso di esecuzione, questo potrebbe significare più lavoro, anche se non dovrebbe essere un problema per il carico del tuo server.',
));
?>
