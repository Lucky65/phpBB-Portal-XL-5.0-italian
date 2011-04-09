<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: google_xml.php 204 2009-12-20 12:04:51Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/03/16
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* google_xml [Italian]
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
	'GOOGLE_XML' => 'Mappa sito XML',
	'GOOGLE_XML_EXPLAIN' => 'Questi sono i parametri per la mappa sito di Google XML. Puoi integrare pienamente la lista degli URL da un file xml (un url per linea) nelle mappe sito GYM e sfruttare tutte le funzionalità del modulo come ad esempio stili e cache XSL.<br/> Alcune impostazioni possono essere sovrascritte in funzione di Google mappe sito e le principali priorità sulle originarie impostazioni.<br/>Ogni file xml può essere aggiunto nella directory gym_sitemaps/sources/ e sarà preso in considerazione una volta che sarà eliminato il modulo ACP cache, utilizzando il link qui sopra manutenzione.<br/> Ogni lista di URL deve essere composto di un URL completo per riga e deve seguire un modello di base per la denominazione dei file : <b>google_</b>xml_nome_file<b>.xml</b>.<br />Una nuove voce sarà creata nell’indice mappa sito <b>esempio.com/sitemap.php?xml=xml_nome_file</b> o <b>esempio.com/xml-xml_nome_file.xml</b> quando gli urls sono riscritti.<br/> Nel nome del file sorgente devono devono utilizzare caratteri alfanumerici (0-9a-z) maggiorato di due separatori "_" e "-".<p>È possibile anche utilizzare un URL completo del sito generato da un altra applicazione, deve essere configurato nel file gym_sitemaps/sources/xml_google_external.php (Leggi i commenti nel file per maggiori dettagli).</p><u style="color:red;">Nota :</u><br/> Si consiglia di cachere il modulo mappe sito per evitare inutili parsing di file xml potenzialmente grandi.',
	// Main
	'GOOGLE_XML_CONFIG' => 'Configurazione mappa sito XML',
	'GOOGLE_XML_CONFIG_EXPLAIN' => 'Alcune impostazioni possono essere sovrascritte in funzione di Google Sitemaps e le principali priorità sulle impostazioni.',
	'GOOGLE_XML_RANDOMIZE' => 'Crea urls casuali',
	'GOOGLE_XML_RANDOMIZE_EXPLAIN' => 'Puoi creare URL casuali dal file XML. Cambiare l’ordine su base regolare può aiutare per il crawling. Questa opzione è anche utile per esempio quando si limitano gli URL a 1000 per modulo e usare il file XML con 5000 URL, in tal caso tutti i 5000 URL saranno regolarmente mostrati sulla corrispondente Mappa del sito.<br/><u>Nota :</u><br/>Questa opzione richiede una completa analisi sintattica del file sorgente, si consiglia di usare il caching quando è attivata.',
	'GOOGLE_XML_UNIQUE' => 'Trova duplicati',
	'GOOGLE_XML_UNIQUE_EXPLAIN' => 'Attiva se sei sicuro che, alcuni URL sono da più tempo nel sorgente XML, saranno visualizzati solo una volta nella mappa del sito.',
	'GOOGLE_XML_FORCE_LASTMOD' => 'Ultima modifica',
	'GOOGLE_XML_FORCE_LASTMOD_EXPLAIN' => 'Puoi forzare l’ultima modifica nel ciclo di durata della cache (anche se la cache non è attivata) per tutti gli URL nella mappa del sito. Il modulo calcola le priorità e il cambiamento frequenze basato sul tempo. In alternativa l’eventuale ultima modifica e priorità dai tags forniti.<br/><u>Nota :</u><br/>Questa opzione richiede una completa analisi sintattica del file sorgente, si consiglia di usare il caching quando è attivata.',
	'GOOGLE_XML_FORCE_LIMIT' => 'Forza limite',
	'GOOGLE_XML_FORCE_LIMIT_EXPLAIN' => 'Puoi forzare il numero di URL che saranno visualizzati nella mappa.<br/><u>Nota :</u><br/>Questa opzione richiede una completa analisi sintattica del file sorgente, si consiglia di usare il caching quando è attivata.',
	// Reset settings
	'GOOGLE_XML_RESET' => 'Modulo XML mappa sito',
	'GOOGLE_XML_RESET_EXPLAIN' => 'Ripristina ai valori di default tutte le opzioni nella "configurazione mappa sito XML" scheda (principale) del modulo XML mappa sito.',
	'GOOGLE_XML_MAIN_RESET' => 'Configurazione mappa sito XML',
	'GOOGLE_XML_MAIN_RESET_EXPLAIN' => 'Ripristina ai valori di default tutte le opzioni nella "configurazione mappa sito XML" scheda (principale) del modulo XML mappa sito.',
	'GOOGLE_XML_CACHE_RESET' => 'Cache mappa sito XML',
	'GOOGLE_XML_CACHE_RESET_EXPLAIN' => 'Ripristina ai valori di default nelle opzioni cache del modulo mappa sito XML.',
	'GOOGLE_XML_GZIP_RESET' => 'Gunzip mappa sito XML',
	'GOOGLE_XML_GZIP_RESET_EXPLAIN' => 'Ripristina ai valori di default nelle opzioni Gunzip del modulo mappa sito XML.',
	'GOOGLE_XML_LIMIT_RESET' => 'Limite mappa sito XML',
	'GOOGLE_XML_LIMIT_RESET_EXPLAIN' => 'Ripristina ai valori di default nelle opzioni limite del modulo mappa sito XML.',
));
?>