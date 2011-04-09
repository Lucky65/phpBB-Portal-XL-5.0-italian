<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $Id: gym_google.php 134 2009-11-02 11:13:45Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
/**
*
* gym_google [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'GOOGLE_MAIN' => 'Nastavenie Google mapovanie stránok',
	'GOOGLE_MAIN_EXPLAIN' => 'Toto sú hlavné nastavenia pre Google mapovania stránok.<br/>Všetky nastavenia v predvolenom nastavení budú platiť na moduly Google mapovania stránok.',
	// Linking setup
	'GOOGLE_LINKS_ACTIVATION' => 'Pripojenie Fóra',
	'GOOGLE_LINKS_MAIN' => 'Hlavné odkazy',
	'GOOGLE_LINKS_MAIN_EXPLAIN' => 'Zobrazím, <b>Zoznam mapovaných</b> odkaz sa zobrazí dole v lište stránky.<br/>Táto funkcia vyžaduje, aby zobrazenie linkov bolo aktívne v Hlavnom nastavení.',
	'GOOGLE_LINKS_INDEX' => 'Odkazy na index',
	'GOOGLE_LINKS_INDEX_EXPLAIN' => 'Zobrazím, odkaz <b>Zoznam mapovaných</b> každého fóra na indexe fóra. Tento odkaz sa vloží pod popis fóra.<br/>Táto funkcia vyžaduje, aby zobrazenie linkov na indexe, bolo aktívne v Hlavnom nastavení.',
	'GOOGLE_LINKS_CAT' => 'Odkazy na stránke fóra',
	'GOOGLE_LINKS_CAT_EXPLAIN' => 'Zobrazím, odkaz <b>Mapu stránky</b> súčasného fóra. Tento odkaz sa vloží pod názov fóra.<br/>Táto funkcia vyžaduje, aby zobrazenie linkov na indexe, bolo aktívne v Hlavnom nastavení.',
	// Reset settings
	'GOOGLE_ALL_RESET' => '<b>Všetky</b> Moduly Google mapovania stránok',
	'GOOGLE_URL' => 'URL pre Google k mapovaniu stránok',
	'GOOGLE_URL_EXPLAIN' => 'Sem zadajte úplnú adresu URL vašej stránky napr http://www.stranka.com/eventual_dir/ sitemap.php ak je inštalovaná v http://www.stranka.com/eventual_dir/. <br/>Táto možnosť je užitočná, keď phpBB nie je nainštalované v roote doméney a chcete mať zoznam adries z úrovni domény pre Google mapovanie stránok.',
	'GOOGLE_PING' => 'Prevolanie Google',
	'GOOGLE_PING_EXPLAIN' => 'Prevolám Google vždy keď sa aktualizujú mapy stránky..',
	'GOOGLE_THRESHOLD' => 'Hranica mapy stránok',
	'GOOGLE_THRESHOLD_EXPLAIN' => 'Minimálne množstvo položiek ktoré sa zobrazia v mape stránky. Pri zadaní hodnoty "1", to znamená že sa mapa zobrazí pri prekročenie tohoto čísla. Příklad: chcem aby sa mi zobrazovalo z fóra v mape stránkok 5 príspevkov, tak tu musím nastaviť hodnotu na "6".',
	'GOOGLE_PRIORITIES' => 'Nastavenie Priority',
	'GOOGLE_DEFAULT_PRIORITY' => 'Predvolenie Priority',
	'GOOGLE_DEFAULT_PRIORITY_EXPLAIN' => 'Predvolená priorita URL adries pre všetky mapované stránky, zadanie bude použité, pokial je v module správne nastavené zadanie (musí to byť číslo medzi 0.0 a 1.0 vrátane)',
	'GOOGLE_XSLT' => 'Dizajn XSLT',
	'GOOGLE_XSLT_EXPLAIN' => 'Aktivuje výstupný štýl zoznamu XSL priateľské rozhranie kliknutim na linky vygenerované mapy stránok Google. Toto nastavenie sa prejaví až po tom, čo v ponuke Údržba ktorá je vyššie prečistíte cache.',
	'GOOGLE_LOAD_PHPBB_CSS' => 'Zavedenie phpBB CSS',
	'GOOGLE_LOAD_PHPBB_CSS_EXPLAIN' => 'Modul mapa stránok GYM používa šablóny phpBB3. XSL slúži na vytvorenie html výstupov ktoré sú kompatibilné zo štýlmi phpBB3. <br/>Vďaka tomu môže štýly XSL aplikovať kaskádové v phpBB namiesto defaultne predvolených. Všetky zmeny, ako napríklad zmena pozadia, farby fontu, či obrázkov, sa potom použijú vo výstupe Google sitemap. <br/>Zmeny sa však prejavia až po prečistení cache RSS cez zadanie "Údržba". <br/>Ak nebudú v danom štýle k dispozícii súbory štýlu Google sitemap, bude použitý defaultný štýl (vždy prítomný, založený na prosilver). <br/>Nesnažte sa používať šablóny prosilver s iných štýloch,  s najväčšou pravdepodobnosťou nebudú kompatibilné s nastavením v CSS.',
	// Auth settings
	'GOOGLE_AUTH_SETTINGS' => 'Povolenie nastavenia',
	'GOOGLE_ALLOW_AUTH' => 'Autorizácia',
	'GOOGLE_ALLOW_AUTH_EXPLAIN' => 'Aktivovaním povolenia pre Mapu stránok, sa umožní prihláseným užívateľom a robotom si prezerať fórum a mapy stránok, ak budú mať k tomu zadané riadne povolenia.',
	'GOOGLE_CACHE_AUTH' => 'Cache privátne mapy stránok',
	'GOOGLE_CACHE_AUTH_EXPLAIN' => 'V tomto zadani môžete vypnúť ak je umožnené cache na neverejné mapy stránok.<br/> Kešovanie súkromných stránok zvýši počet súborov vo vyrovnávacej pamäti. To by nemal byť problém, ale tu sa môžete rozhodnúť, že sa cache použije iba pre verejné mapy stránok.',
));
?>