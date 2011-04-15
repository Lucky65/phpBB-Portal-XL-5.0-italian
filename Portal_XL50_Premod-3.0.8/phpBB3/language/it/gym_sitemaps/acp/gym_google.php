<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: gym_google.php 204 2009-12-20 12:04:51Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2011 portalxl.eu - update translation for portal xl on 2011/04/14
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* gym_google [Italian]
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
	'GOOGLE_MAIN' => 'Configurazione mappe sito Google',
	'GOOGLE_MAIN_EXPLAIN' => 'Configurazione principale per il modulo mappa sito Google.<br/>Verranno applicate ai moduli per default di tutte le mappe sito Google.',
	// Linking setup
	'GOOGLE_LINKS_ACTIVATION' => 'Forum Linking',
	'GOOGLE_LINKS_MAIN' => 'Links principali',
	'GOOGLE_LINKS_MAIN_EXPLAIN' => 'Visualizza o meno link indice della mappa nel footer.<br/>Questa funzionalità richiede che i links vengano attivati nella configurazione principale.',
	'GOOGLE_LINKS_INDEX' => 'Links nell’indice',
	'GOOGLE_LINKS_INDEX_EXPLAIN' => 'Visualizza o meno limks delle mappe disponibili nell’indice del forum. I links sono aggiunti vicino la descrizione del forum.<br/>Questa funzionalità richiede che i links vengano attivati nella configurazione principale.',
	'GOOGLE_LINKS_CAT' => 'Links sulla pagina del forum',
	'GOOGLE_LINKS_CAT_EXPLAIN' => 'Visualizza o meno links alle mappe sito del forum corrente. I links sono aggiunti vicino al titolo del form.<br/>Questa funzionalità richiede che i links vengano attivati nella configurazione principale.',
	// Reset settings
	'GOOGLE_ALL_RESET' => '<b>Tutti</b> moduli mappe sito Google',
	'GOOGLE_URL' => 'URL mappe sito Google',
	'GOOGLE_URL_EXPLAIN' => 'Inserisci l’url completo della tua mappa indice es. http://www.example.com/eventual_dir/ se sitemap.php è installata in http://www.example.com/eventual_dir/.<br/>Questa opzione è utile quando phpBB non è installato nel dominio root e desideri l’elenco URL dal dominio radice nella tua mappa sito di Google.',
	'GOOGLE_PING' => 'Pinga Google',
	'GOOGLE_PING_EXPLAIN' => 'Pinga Google ogni volta che una mappa del sito viene rivisualizzata.',
	'GOOGLE_THRESHOLD' => 'Limite mappe sito',
	'GOOGLE_THRESHOLD_EXPLAIN' => 'Valore minimo di voci visualizzate nella mappa sito. Per il forum, significa che oltre tale soglia l’argomento avrà nel forum una mappa del sito.',
	'GOOGLE_PRIORITIES' => 'Configurazione priorità',
	'GOOGLE_DEFAULT_PRIORITY' => 'Priorità Default',
	'GOOGLE_DEFAULT_PRIORITY_EXPLAIN' => 'La priorità di default per gli URL elencati nelle mappe sito; Saranno utilizzate meno opzioni aggiuntive e sono rese possibili dal modulo (deve essere un numero tra 0.0 e 1.0 compreso)',
	'GOOGLE_XSLT' => 'Stile XSLT',
	'GOOGLE_XSLT_EXPLAIN' => 'Attiva lo stile XSL per avere un migliorato rapporto con i motori di ricerca nelle mappe sito Google con links cliccabili. Questo diventerà efficace solo dopo che avrai autorizzato la cache delle mappe sito Google utilizzando il link di manutenzione.',
	'GOOGLE_LOAD_PHPBB_CSS' => 'Carica CSS phpBB',
	'GOOGLE_LOAD_PHPBB_CSS_EXPLAIN' => 'Il modulo GYM mappa sito usa il sistema di templates di phpBB3. Lo stile XSL usato per costruire l’uscita html è compatibile con gli stili di phpBB.<br/>Quindi puoi applicare gli CSS di phpBB per default. In questo modo, tutto il tuo tema personalizzato come sfondo,font, colore o addirittura immagini saranno utilizzati in Google mappa del sito con il tuo stile di uscita.<br/>Questo avrà effetto soltanto dopo aver cancellato la cache RSS nel menu "manutenzione".<br/>Se il file dello stile della mappa sito Google non è presente nell’attuale stile, lo stile di default (sempre disponibile, basato su prosilver) può essere usato.<br/>Non provare ad usare il tema prosilver con un altro stile, probabilmente il CSS non funzionerà.',
	// Auth settings
	'GOOGLE_AUTH_SETTINGS' => 'Configurazione permessi',
	'GOOGLE_ALLOW_AUTH' => 'Permessi',
	'GOOGLE_ALLOW_AUTH_EXPLAIN' => 'Attiva permessi per mappe sito. Se attivato, utenti logati e bots saranno potranno navigare in forum privati se hanno i permessi corretti.',
	'GOOGLE_CACHE_AUTH' => 'Cache privata mappe sito',
	'GOOGLE_CACHE_AUTH_EXPLAIN' => 'Puoi disattivare la cache per le mappe non pubbliche quando consentito.<br/> La cache delle mappe sito private incrementano il numero di file in cache. Non dovrebbe essere un problema, ma puoi decidere di rendere pubbliche solo la cache delle mappe sito.',
));
?>