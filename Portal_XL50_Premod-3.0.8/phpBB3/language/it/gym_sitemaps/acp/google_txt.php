<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: google_txt.php 204 2009-12-20 12:04:51Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2011 portalxl.eu - update translation for portal xl on 2011/04/14
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* google_txt [Italian]
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
	'GOOGLE_TXT' => 'Mappe sito TXT',
	'GOOGLE_TXT_EXPLAIN' => 'Questi sono i parametri per il modulo Google TXT mappe sito. Si può integrare pienamente un URL in elenco da un file di testo (un URL per riga) in GYM mappe sito e sfruttare tutte le funzionalità del modulo come stile XSLT e caching.<br/> Alcune impostazioni possono essere sovrascritte in funzione di Google mappe sito e le principali priorità sulle impostazioni.<br/>Ogni file di testo è aggiunto in gym_sitemaps/sources/ sarà preso in considerazione una volta che avrai eliminato il modulo ACP in cache, utilizzando il link qui sopra manutenzione.<br/> Ogni elenco di URL di file testo deve essere composto da un URL completo per riga e dovranno seguire un modello di base per la denominazione dei file: <b>google_</b>txt_nome_file<b>.txt</b>.<br />Una nuova voce sarà creata nell’indice della mappa sito con URL <b>example.com/sitemap.php?txt=txt_nome_file</b> e <b>example.com/txt-txt_nome_file.xml</b> quando l’url viene riscritto.<br/> Il nome del file sorgente deve utilizzare caratteri alfanumerici (0-9a-z) maggiorato di due separatori "_" e "-".<br/><u style="color:red;">Nota :</u><br/> Si consiglia di usare la cache di questo modulo per evitare inutili e potenziali parsing di file di testo troppo grande.',
	// Main
	'GOOGLE_TXT_CONFIG' => 'Configurazioni mappa sito TXT',
	'GOOGLE_TXT_CONFIG_EXPLAIN' => 'Alcune opzioni possono essere sovrascritte e questo dipende dalle configurazioni della mappa sito di Google.',
	'GOOGLE_TXT_RANDOMIZE' => 'URL casuali',
	'GOOGLE_TXT_RANDOMIZE_EXPLAIN' => 'È possibile generare URL casuali presi dal file di testo. Cambiare l’ordine su base regolare può aiutare un pò per la scansione. Questa opzione è anche utile per esempio quando se si limitano gli URL a 1000 per il presente modulo e l’uso di testo file sorgente con 5000 urls, in tali casi, tutte le 5000 URL saranno regolarmente visualizzati sulla corrispondente mappa del sito.',
	'GOOGLE_TXT_UNIQUE' => 'Controllo duplicati',
	'GOOGLE_TXT_UNIQUE_EXPLAIN' => 'Attiva questa opzione se vuoi che alcuni URL vengano visualizzati più di una volta nel testo di origine, questa opzione visualizzerà solo una volta la mappa del sito.',
	'GOOGLE_TXT_FORCE_LASTMOD' => 'Ultime modifiche',
	'GOOGLE_TXT_FORCE_LASTMOD_EXPLAIN' => 'È possibile forzare l’ultima data di modifica sulla base del ciclo di durata della cache (anche se la cache non è attivata) per tutti gli URL nella mappa sito. Il modulo e il calcolo delle priorità cambia le frequenze sulla base di questo ultimo tempo. Per impostazione predefinita, nessun tag ultime modifiche è aggiunto.',
	// Reset settings
	'GOOGLE_TXT_RESET' => 'Mappe sito TXT',
	'GOOGLE_TXT_RESET_EXPLAIN' => 'Ripristina ai valori di default le opzioni di ordinamento del modulo mappe sito TXT.',
	'GOOGLE_TXT_MAIN_RESET' => 'Configurazioni mappe sito TXT',
	'GOOGLE_TXT_MAIN_RESET_EXPLAIN' => 'Ripristina ai valori di default le opzioni in "configurazioni mappe sito TXT".',
	'GOOGLE_TXT_CACHE_RESET' => 'Cache mappa sito TXT',
	'GOOGLE_TXT_CACHE_RESET_EXPLAIN' => 'Ripristina ai valori di default le opzioni in "cache configurazioni mappe sito".',
	'GOOGLE_TXT_GZIP_RESET' => 'Mappa sito Gunzip TXT',
	'GOOGLE_TXT_GZIP_RESET_EXPLAIN' => 'Ripristina ai valori di default le opzioni in "gunzip configurazioni mappe sito".',
	'GOOGLE_TXT_LIMIT_RESET' => 'Limite mappa sito TXT',
	'GOOGLE_TXT_LIMIT_RESET_EXPLAIN' => 'Ripristina ai valori di default le opzioni in "limite configurazioni mappe sito".',
));
?>