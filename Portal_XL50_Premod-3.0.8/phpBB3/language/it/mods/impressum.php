<?php
/**
*
* @author Tobi Schäfer http://www.phpbb-seo.de/
*
* impressum [Italian]
*
* @package language
* @version $Id: impressum.php, V0.1.6 2008-08-21 18:08:26 tas2580 $
* @copyright (c) 2008 SEO phpBB phpbb-seo.de
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

// Bot settings
$lang = array_merge($lang, array(
	'IMPRESSUM' 		=> 'Note Legali',
	'DISCLAIMER' 		=> 'Disclaimer',
	'DISCLAIMER_TXT'	=> '<b>1. Contenuto</b><br />L’autore non si ritiene responsabile per attualità, la correttezza, la completezza o la qualità delle informazioni fornite. Dell’eventuale responsabilità relativa a danni causati con l’uso di tutte le informazioni fornite, compreso qualsiasi tipo di informazioni incomplete o errate, verranno respinte. Tutte le offerte sono non vincolanti e senza obbligo. Parti delle pagine o l’intera pubblicazione, compreso tutte le offerte e le informazioni possono essere estese, modificate o completamente eliminate dal diritto d’autore delle pagine.<br /><br /><b>2. Referrals e links</b><br />L’auore non è responsabile per ogni contenuto di links o referrer di queste pagine - a meno che non abbia piena conoscenza dei contenuti illegali e sono in grado di impedire i visitatori del proprio sito di visualizzare le pagine. Se il danno si verifica con l’uso di informazioni presentate, solo l’autore delle rispettive pagine potrebbero essere responsabile, non colui che è legato a queste pagine. Inoltre l’autore non è responsabile per eventuali messaggi pubblicati dagli utenti nelle discussioni del forum, guestbooks o mailinglists presenti sulla propria pagina.<br /><br /><b>3. Copyright</b><br />L’autore non utilizza alcun materiale coperto da copyright per la publicazione, se non possibile, indica il copyright dei rispettivi oggetti. Il copyright per ogni materiale creato dall’auore è riservato. Ogni duplicazione o uso di oggetti, quali immaggini, diagrammi, suoni o testi nelle pagine pubblicate e stampate non è permessa senza accordo scritto dell’autore.<br /><br /><b>4. Privacy</b><br />Per quanto riguarda i dati personali o aziendali (indirizzi e-mail, nome, indirizzi), l’inserimento di tali dati avviene in modo volontario. L’utilizzo e il pagamento di tutti i servizi offerti sono consentiti - se e per quanto tecnicamente possibile e ragionevole - senza specificazione di tutti i dati personali o la specificazione della dati anonimi o un alias. L’uso di indirizzi postali pubblicati, numeri di telefono o fax e indirizzi di posta elettronica per scopi di marketing, è vietato, i trasgressori che inviano messaggi spam indesiderati verranno puniti.<br /><br /><b>5. Validità legale di questo disclaimer</b><br />Questa esclusione di responsabilità va considerata come parte integrante del sito internet. Se sezioni o singoli termini di tale dichiarazione non sono legali o corretti, il contenuto o la validità delle altre parti non vengono inficiati da tale fatto.',
	'TXT_TOP1' 		=> 'Se hai domande, commenti o suggerimenti riguardanti le Note Legali, ti invitiamo ad usare il nostro <a href="contact.php">Modulo Contatti</a>.',
	'TXT_TOP2' 		=> 'Contenuto',
	'TXT_TOP3'		=> 'Questo sito non rappresenta una testata giornalistica, in quanto viene aggiornato senza alcuna periodicità. Non può, pertanto, considerarsi un prodotto editoriale, ai sensi della <a href="http://www.camera.it/parlam/leggi/01062l.htm" target="new"><strong>legge n. 62 del 7/03/2001</strong></a>',
	'NAME'  		=> 'Nome',
	'COMPANY'  		=> 'Compagnia',
	'ADRESS'  		=> 'Indirizzo',
	'IMPR_LOCATION' => 'C.A.P./Località',
	'PHOME'  		=> 'Telefono',
	'TAXNR' 		=> 'Ust-ID',
	'IMPRESSUM_UPDATED'	=> 'La configurazione è stata aggiornata',
	'IMPRESSUM_DESC'	=> 'Qui si possono utilizzare i dati per modificare il sito e scegliere le opzioni che devono essere visualizzate.',
	'MOBILE' 		=> 'Telefono mobile',
	'FAX'			=> 'Fax',
	'JUSTICATION'		=> 'Giurisdizione',
	'TRADE'			=> 'Registro Commercio',
	'LOGO'			=> 'URL al logo',
	'SHOW'			=> 'mostra',
));

?>