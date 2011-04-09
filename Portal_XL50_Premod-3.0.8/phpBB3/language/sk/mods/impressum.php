<?php
/**
*
* @author Tobi Schäfer http://www.phpbb-seo.de/
*
* impressum [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package language
* @version $Id: impressum.php,v 1.1.1.1 2009/05/15 05:16:03 damysterious Exp $
* @copyright (c) 2008 SEO phpBB phpbb-seo.de
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

// Bot settings
$lang = array_merge($lang, array(
	'IMPRESSUM' 		=> 'Tiráž',
	'DISCLAIMER' 		=> 'Dementi',
	'DISCLAIMER_TXT'	=> '<b>1. Obsah</b><br />Tento portál je otvorená internetová encyklopédia rôzneho zamerania, tzn. ide o zoskupenie dobrovoľníkov, ktorí vytvárajú databázu. Princíp dovoľuje komukoľvek s pripojením k internetu a webovým prehliadačom meniť jej obsah. Preto je treba upozorniť, že vlastník portálu nie je zodpovedný za obsah ktorý tu nájdete, nakoľko tento obsah nemusí obsahovať úplné a presné ani spoľahlivé informácie.<br /><br /><b>2. Odkazy a linky</b><br />Majiteľ stránok nenesie žiadnu zodpovednosť za tu uverejnené odkazy. Nepoužívajte tuto stránku k distribúcií alebo k downloadu akýchkoľvek materiálov, ku ktorým nemáte legálne oprávnenie. Všetko konáte na vlastnú zodpovednosť.<br /><br /><b>3. Autorské právo</b><br />Smernica Európskeho parlamentu a Rady <a style="color: #FF0606; target="_blank" href="http://www.culture.gov.sk/uploads/6m/KZ/6mKZr2TIhggrwOpFWKWd8Q/priloha-02_smernica-2009_24_es.rtf">2009/24/ES</a> z 23. apríla 2009 o právnej ochrane počítačových programov (kodifikované znenie).<br /><br /><b>4. Súkromná stratégia</b><br />Súhlasíte s tým, že nebudete odosielať žiadne urážlivé, obscénne, vulgárne, ohováracie, nenávistné, výhražné, sexuálne orientované príspevky alebo posielať akýkoľvek iný materiál, ktorý môže porušovať ktorékoľvek zákony krajiny, v ktorej sa nachádzate. Takéto konanie môže viesť k okamžitému a trvalému vylúčeniu. IP adresa všetkých Vašich príspevkov je zaznamenávaná na pomoc vo vymožiteľnosti týchto podmienok. Súhlasíte s tým, že majiteľ má právo kedykoľvek odstrániť, upraviť, presunúť alebo uzamknúť ktorúkoľvek tému, ktorá by porušovala tieto podmienky, ďalej prevádkovateľ nenesie zodpovednosť za akýkoľvek pokus o prienik (hacking), ktorý môže viesť k zneužitiu týchto údajov.<br /><br /><b>5. Právna platnosť dementi</b><br />Toto dementi je pre časť publikácií z internetu ak sekcie alebo individuálne požiadavky sú legálne, pre iné časti sú hore uvedené zadania.',
	'TXT_TOP1' 		=> 'Pečať podľa &sect; 6 Tele Services Act (TDG), &sect; 6 Federálnej Dohody (MDSTv) a Sekcie 4, paragraf 3 Federálnej Ochrany Dát Act (BDSG)',
	'TXT_TOP2' 		=> 'Zodpovednosť za obsah sa prezentuje podľa &sect; 10, paragrafu 3 MDStV: %s (v zadaní ako je vyššie uvedené).',
	'TXT_TOP3'		=> 'Všeobecné Informácie',
	'NAME'  		=> 'Názov',
	'COMPANY'  		=> 'Spoločnosť',
	'ADRESS'  		=> 'Adresa',
	'IMPR_LOCATION' => 'Pošt.smer.číslo/Lokalita',
	'PHOME'  		=> 'Telefón',
	'TAXNR' 		=> 'Ust-ID',
	'IMPRESSUM_UPDATED'	=> 'Tiráž bola aktualizovaná	',
	'IMPRESSUM_DESC'	=> 'V tomto zadaní môžete zmeniť zadania ktoré majú byť zobrazené ako informácia pre stránku.',
	'MOBILE' 		=> 'Mobil',
	'FAX'			=> 'Fax',
	'JUSTICATION'		=> 'Príslušnosť',
	'TRADE'			=> 'Obchodný Register',
	'LOGO'			=> 'URL pre logo',
	'SHOW'			=> 'zobraziť',
));

?>