<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: install.php 204 2009-12-20 12:04:51Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2011 luckylab.eu - update translation for portal xl on 2011/01/01
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* install [Italian]
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
	// Install
	'SEO_INSTALL_PANEL'	=> 'Gym Mappa sito &amp; RSS pannello di installazione',
	'CAT_INSTALL_GYM_SITEMAPS' => 'Installa GYM mappa sito',
	'CAT_UNINSTALL_GYM_SITEMAPS' => 'Disinstalla GYM mappa sito',
	'CAT_UPDATE_GYM_SITEMAPS' => 'Aggiorna GYM mappa sito',
	'SEO_ERROR_INSTALL'	=> 'Risulta un errore nel processo di installazione. Se vuoi tornare indietro, devi prima disinstallare.',
	'SEO_ERROR_INSTALLED'	=> 'Il modulo %s è già installato.',
	'SEO_ERROR_ID'	=> 'Il modulo %1$ non ha nessun numero ID.',
	'SEO_ERROR_UNINSTALLED'	=> 'Il modulo %s è già disinstallato.',
	'SEO_ERROR_INFO'	=> 'Informatione :',
	'SEO_FINAL_INSTALL_GYM_SITEMAPS'	=> 'Loggati in ACP',
	'SEO_FINAL_UPDATE_GYM_SITEMAPS'	=> 'Loggati in ACP',
	'SEO_FINAL_UNINSTALL_GYM_SITEMAPS'	=> 'Ritorna all’indice del forum',
	'SEO_OVERVIEW_TITLE'	=> 'GYM mappa sito &amp; RSS Panormaica',
	'SEO_OVERVIEW_BODY'	=> '<p>Benvenuto nell’installazione di phpBB SEO GYM mappa sito &amp; RSS %1$s.</p><p>Leggi <a href="%3$s" title="Controlla argomento rilascio versione" target="_phpBBSEO"><b>l’argomento del rilascio versione</b></a> per altre informazioni</p><p><strong style="text-transform: uppercase;">Nota:</strong> E’ necessario che tu abbia gia caricato tutti i file per poter proseguire con l’installazione.</p><p>Questo sistema di installazione ti guiderà attraverso il processo di installazione della mappa sito GYM &amp; RSS nel tuo ACP. Essa ti permetterà di generare una mappa sito e gli RSS ottimizzati per i motori di ricerca. Il suo design modulare permette di generare mappe sito Google e feed RSS per ogni applicazione PHP/SQL installata sul tuo sito, usando il plug-in dedicato. Chiedi sul <a href="%3$s" title="forum di supporto" target="_phpBBSEO"><b>forum di supporto</b></a> per ogni cosa riguardante la mappa sito GYM &amp; il modulo RSS.</p> ',
	'CAT_SEO_PREMOD'	=> 'GYM mappa sito &amp; RSS',
	'SEO_INSTALL_INTRO'		=> 'Benvenuto sull’installazione di phpBB SEO GYM mappa sito e RSS.',
	'SEO_INSTALL_INTRO_BODY'	=> '<p>Stai per installare la mod %1$s %2$s. Questo script di installazione attiverà la tua GYM mappa sito e RSS nel tuo phpBB.</p><p>Dopo l’installazione sara necessario un’appropriata configurazione nel tuo ACP.</p>
	<p><strong>Nota:</strong>Se è la prima volta che installi questo mod, ti consigliamo vivamente di prendere il tempo per verificare le varie caratteristiche del modulo su un server locale prima di andare online.</p><br/>
	<p>Requisiti :</p>
	<ul>
		<li>Server Apache (OS Linux) con mod_rewrite per la riscrittura degli URL.</li>
		<li>IIS server (OS Windows) con isapi_rewrite per la riscrittura degli URL, ma necessita di adattamento delle regole in httpd.ini.</li>
	</ul>',
	'SEO_INSTALL'		=> 'Installa',
	'UN_SEO_INSTALL_INTRO'		=> 'Benvenuto nel programma di disinstallazione del mod GYM mappa sito e RSS',
	'UN_SEO_INSTALL_INTRO_BODY'	=> '<p>Stai per disinstallre la mod %1$s %2$s.</p>
	<p><strong>Nota:</strong> Le mappe sito ed i feeds non saranno più disponibili dopo la disinstallazione.</p>',
	'UN_SEO_INSTALL'		=> 'Disinstalla',
	'SEO_INSTALL_CONGRATS'		=> 'Congratulazioni!',
	'SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Hai installato con successo la mod %1$s %2$s. Vai in ACP e procedi con la configurazione.<p>
	<p>Ti saranno mostrate le categorie phpBB SEO e tra molte altre cose sarai in grado di :</p>
	<h2>Configurare accuratamente le tue mappe sito di Google e i feeds RSS</h2>
	<p>Le mappe sito ed i feeds RSS supportano lo stile XSLt ed i CSS phpBB, potrai applicarli senza modificare una sola linea di codice.</p>
	<p>Le mappe sito ed i feeds RSS individuano automaticamente la mod phpBB SEO e riscrivono secondo le sue impostazioni. Potrai usare altri URL con estrema facilità.</p>
	<h2>Genera e personalizza .htaccess</h2>
	<p>Con la mod di riscrittura phpBB SEO avrai molte opzioni, sarai in grado di generare il tuo .htaccess personalizzato in modo rapido e caricarlo direttamente sul tuo server.</p><br/><h3>Rapporto installazione :</h3>',
	'UN_SEO_INSTALL_CONGRATS'	=> 'Il modulo GYM mappa sito e RSS è stato eliminato dal tuo ACP.',
	'UN_SEO_INSTALL_CONGRATS_EXPLAIN'	=> '<p>Hai ora disinstallato con successo la mod %1$s %2$s.<p>
	<p> Le tue mappe sito di Google non sono più disponibili.</p>',
	'SEO_VALIDATE_INFO'	=> 'Informazioni di validazione :',
	'SEO_LICENCE_TITLE'	=> 'GNU LESSER GENERAL PUBLIC LICENSE',
	'SEO_LICENCE_BODY'	=> 'la mod phpBB SEO GYM Sitemaps e RSS è realizzato sotto licenza GNU LESSER GENERAL PUBLIC LICENSE.',
	'SEO_SUPPORT_TITLE'	=> 'Supporto',
	'SEO_SUPPORT_BODY'	=> 'Pieno supporto viene dato sul <a href="%1$s" title="Visita il %2$s forum" target="_phpBBSEO"><b>forum %2$s</b></a>. Noi rispondiamo sulle questioni generali relative all’installazione, problemi di configurazione, e il supporto per determinati problemi comuni.</p><p>Visita il nostro <a href="http://www.phpbb-seo.com/boards/" title="SEO Forum" target="_phpBBSEO"><b>Forum di ottimizzazione motori di ricerca</b></a>.</p><p>Devi <a href="http://www.phpbb-seo.com/boards/profile.php?mode=register" title="Registrarti su phpBB SEO" target="_phpBBSEO"><b>registrarti</b></a>, loggarti e <a href="%3$s" title="Notifica aggiornamenti" target="_phpBBSEO"><b>sottoscrivere l’argomento della versione</b></a> per avere la notifica via mail di tutti gli aggiornamenti.',
	// Security
	'SEO_LOGIN'		=> 'Il forum richiede la registrazione per poter vedere vedere la registrazione.',
	'SEO_LOGIN_ADMIN'	=> 'Il forum richiede che tu sia loggato come amministratore per vedere questa pagina.<br/>La tua sessione è stata cancellata per scopi di sicurezza.',
	'SEO_LOGIN_FOUNDER'	=> 'Il forum richiede che tu sia loggato come founder per vedere questa pagina.',
	'SEO_LOGIN_SESSION'	=> 'Controllo sessione fallito.<br/>La configurazione non è stata alterata.<br/>La tua sessione è stata cancellata per scopi di sicurezza.',
	// Cache status
	'SEO_CACHE_FILE_TITLE'	=> 'Stato cache',
	'SEO_CACHE_STATUS'	=> 'La cartella cache è configurata in : <b>%s</b>',
	'SEO_CACHE_FOUND'	=> 'La cartella cache è stata trovata con successo.',
	'SEO_CACHE_NOT_FOUND'	=> 'La cartella cache non è stata trovata.',
	'SEO_CACHE_WRITABLE'	=> 'La cartella cache è scrivibile.',
	'SEO_CACHE_UNWRITABLE'	=> 'La cartella cache non è scrivibile. Devi configurare il CHMOD a 0777.',
	'SEO_CACHE_FORUM_NAME'	=> 'Nome forum',
	'SEO_CACHE_URL_OK'	=> 'Cache URL',
	'SEO_CACHE_URL_NOT_OK'	=> 'L’URL del forum non è in cache',
	'SEO_CACHE_URL'		=> 'URL finale',
	'SEO_CACHE_MSG_OK'	=> 'La cache è stata aggiornata.',
	'SEO_CACHE_MSG_FAIL'	=> 'E’ stato riscontrato un’errore nell’aggiornamento della cache.',
	'SEO_CACHE_UPDATE_FAIL'	=> 'L’URL inserito non può essere usato, la cache è stata alterata.',
	// Update
	'UPDATE_SEO_INSTALL_INTRO'		=> 'Benvenuto nel processo di aggiornamento del mod phpBB SEO GYM mappa sito e RSS.',
	'UPDATE_SEO_INSTALL_INTRO_BODY'	=> '<p>Stai per aggiornare la mod %1$s alla versione %2$s. Lo script aggiornerà la mod all’ultima versione rilasciata.<br/>Le attuali impostazioni non saranno modificate.</p>
	<p><strong>Nota:</strong> Lo script non aggiorna i file fisici di GYM Sitemaps e RSS.<br/><br/>Per aggiornare alla versione 2.0.x (phpBB3) <b>devi</b> caricare tutti i files nella tua <b>root/</b> tramite il tuo ftp, in alcuni casi potrebbe essere necessario effettuare modifiche manuali ad i files del tema in uso (directory phpBB/styles/, .html, .js and .xsl).<br/><br/>Successivamente <b>puoi</b> lanciare nuovamente lo script di aggiornamento, per esempio puoi anche non lanciare veramente l’aggiornamento, potrebbe essere utile per vedere solo quali modifiche devi fare.</p>',
	'UPDATE_SEO_INSTALL'		=> 'Aggiornamento',
	'SEO_ERROR_NOTINSTALLED'	=> 'GYM mappa sito e RSS non è installato!',
	'SEO_UPDATE_CONGRATS_EXPLAIN'	=> '<p>Hai correttamente aggiornato dalla versione %1$s alla versione %2$s.<p>
	<p><strong>Nota:</strong> Lo script non aggiorna i file fisici di GYM Sitemaps e RSS.</p><br/><b>Devi</b> ora installare le modifiche di codice elencate di seguito.<br/><h3>Rapporto aggiornamento :</h3>',
));
?>