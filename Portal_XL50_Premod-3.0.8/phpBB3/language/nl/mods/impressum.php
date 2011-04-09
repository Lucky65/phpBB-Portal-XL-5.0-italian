<?php
/**
*
* @author Tobi Schäfer http://www.phpbb-seo.de/
*
* impressum [Deutsch - Du]
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
	'IMPRESSUM' 		=> 'Imprint',
	'DISCLAIMER' 		=> 'Uitsluiting van aansprakelijkheid',
	'DISCLAIMER_TXT'	=> '<b>1. Inhoud</b><br />Ondanks de constante zorg en aandacht die "%1$s" aan de samenstelling van deze website besteedt, is het mogelijk dat informatie die op deze site wordt gepubliceerd onvolledig of onjuist is. De informatie op "%1$s" wordt regelmatig aangevuld en eventuele wijzigingen kunnen te allen tijde met onmiddellijke ingang en zonder enige kennisgeving worden aangebracht. Een bezoeker mag geen auteursrechtelijk beschermde werken of andere in deze website opgeslagen informatie openbaar maken of verveelvoudigen zonder voorafgaande schriftelijke toestemming van "%1$s" (ook niet via een eigen netwerk). "%1$s" kan er niet voor instaan dat de informatie op "%1$s" geschikt is voor het doel waarvoor deze door u wordt geraadpleegd. Alle informatie wordt aangeboden in de staat waarin deze zich feitelijk bevindt en zonder enige (impliciete) garantie of waarborg ten aanzien van haar deugdelijkheid en geschiktheid voor een bepaald doel of anderszins. "%1$s" sluiten alle aansprakelijkheid uit voor enigerlei directe of indirecte schade, van welke aard dan ook, die voortvloeit uit of in enig opzicht verband houdt met het gebruik van "%1$s", het gebruik van informatie die door middel van deze website is verkregen of de tijdelijke onmogelijkheid om "%1$s" te kunnen raadplegen. 
							<br /><br /><b>2. Links van/naar websites</b><br />Bepaalde (hyper)links in deze site leiden naar websites buiten het domein van "%1$s", welke geen eigendom zijn van "%1$s", maar zijn louter ter informatie van de bezoeker opgenomen. Indien deze links geactiveerd worden, verlaat men de website van "%1$s". Hoewel "%1$s" uiterst selectief is ten aanzien van de sites waarnaar verwezen wordt, kan zij niet instaan voor de inhoud en het functioneren daarvan, noch voor de kwaliteit van eventuele producten of diensten die daarop worden aangeboden. Elke aansprakelijkheid voor de inhoud van websites die niet door "%1$s" worden onderhouden wordt afgewezen.
							<br /><br /><b>3. Copyright en andere intellectuele eigendomsrechten</b><br />Wij verzoeken iedere persoon of organisatie die gebruik wil maken van de naam, het logo of enig ander intellectueel eigendomsrecht van "%1$s", vooraf contact op te nemen met "%1$s". Per aanvraag/situatie wordt een afweging gemaakt of toestemming wordt verleend. In het geval dat geen toestemming is verleend maar er door derden toch gebruik wordt gemaakt van een intellectueel eigendomsrecht van "%1$s", zal "%1$s" zich op haar rechten beroepen en degene die gebruik maakt van een intellectueel eigendomsrecht in rechte kunnen betrekken. De hieruit voortvloeiende kosten zullen op de derde partij worden verhaald. Het gebruik van intellectuele eigendomsrechten van "%1$s" voor commerciële doeleinden is in geen enkele situatie toegestaan mits "%1$s" daarvoor uitdrukkelijke toestemming heeft verleend.<br /><br /> Ook de op deze website afgebeelde gegevens, waaronder begrepen producten, teksten, foto\'s, illustraties, grafisch materiaal, (handels)namen, woordmerken en logo\'s (tezamen "merken"), zijn eigendom van of in licentie bij "%1$s" en worden beschermd door auteursrecht, merkenrecht en/of enig ander intellectueel eigendomsrecht. De hiervoor genoemde rechten gaan op geen enkele wijze over op (rechts)personen die toegang krijgen tot deze site.<br /><br /> De inhoud van deze website mag alleen worden gebruikt voor niet-commerciële privé doeleinden. Het is de gebruiker van de site niet toegestaan de inhoud van de site te vermenigvuldigen, door te sturen, distribueren, verspreiden of tegen vergoeding beschikbaar te stellen aan derden, zonder voorafgaande schriftelijke, toestemming van "%1$s", behalve voor zover strikt noodzakelijk is voor het raadplegen van de website.
							<br /><br /><b>4. Integriteit en respect</b><br />"%1$s" respecteert de privacy van de bezoekers van haar website en draagt er zorg voor dat uw gegevens vertrouwelijk worden behandeld. Uw persoonsgegevens worden in overeenstemming met alle toepasselijke privacy regelgeving behandeld. Deze privacyverklaring is afgestemd op het gebruik van, en de mogelijkheden op de website van "%1$s". Eventuele aanpassingen en/of veranderingen van de website kunnen leiden tot wijzigingen in deze privacyverklaring. Het is daarom raadzaam om deze privacyverklaring regelmatig te raadplegen.<br /><br /> "%1$s" gebruikt en bewaart uw persoonsgegevens in een zogenaamd "cookie". Door het aanmelden op "%1$s" verleent u tegelijkertijd toestemming om uw persoonsgegevens en e-mailadres op te slaan. "%1$s" gebruikt deze opgeslagen informatie om u te informeren over activiteiten op de site, het doen van andere berichtgevingen van "%1$s" en om webstatistieken te ontwikkelen. Uw gegevens worden niet aan derden ter beschikking gesteld tenzij dit noodzakelijk is op grond van een wettelijk voorschrift.<br /><br /> "%1$s" maakt gebruik van een programma dat onder andere registreert hoe vaak "%1$s" wordt bezocht, via welke links dat gebeurt en wat de voorkeuren van haar bezoekers zijn. "%1$s" gebruikt hiervoor cookies. Dat zijn kleine bestanden die door uw computer worden gedownload als u "%1$s" bezoekt. De gegevens die wij op deze manier verkrijgen blijven anoniem. U kunt uw eigen browser zo instellen dat u een bericht krijgt voordat een website een cookie naar uw computer stuurt en of u deze al dan niet accepteert.
							<br /><br /><b>5. Aansprakelijkheid</b><br />Aan de verstrekte informatie kunnen geen rechten worden ontleend. "%1$s" kan niet garanderen dat de website foutloos of ononderbroken functioneert. "%1$s" en de (eventuele) overige leveranciers aanvaarden geen enkele aansprakelijkheid voor de inhoud van deze site(s) en de daarop/daardoor verstrekte informatie. "%1$s" aanvaardt geen enkele aansprakelijkheid voor de inhoud van sites die niet door "%1$s" worden onderhouden en waarnaar wordt verwezen of die verwijzen naar de site(s) van "%1$s".',
	'TXT_TOP1' 			=> 'Imprint in overeenstetmming met Wet Bescherming Persoonsgegevens richtlijn nr. 95/46/EG. Wet van 6 Juli 2000, STB. 302, houdende regels inzake de bescherming van perssonsgegevens (Wet Bescherming Persoonsgegevens).',
	'TXT_TOP2' 			=> 'Verantwoordelijk volgens de Wet bescherming persoonsgegevens: %s (adres als bovenstaand).',
	'TXT_TOP3'			=> 'Verantwoordelijk voor de inhoud',
	'NAME'  			=> 'Naam',
	'COMPANY'  			=> 'Bedrijf',
	'ADRESS'  			=> 'Adres',
	'IMPR_LOCATION' 	=> 'Postcode/Woonplaats',
	'PHOME'  			=> 'Telefoonnummer',
	'TAXNR' 			=> 'BTW Nummer',
	'IMPRESSUM_UPDATED'	=> 'De impressum is geactualiseerd',
	'IMPRESSUM_DESC'	=> 'Hier kun je de data voor de site veranderen en kiezen welke opties worden getoond.',
	'MOBILE' 			=> 'Mobiel',
	'FAX'				=> 'Fax',
	'JUSTICATION'		=> 'Juristictie',
	'TRADE'				=> 'Handelsregister',
	'LOGO'				=> 'URL naar logo',
	'SHOW'				=> 'Laat zien',
));

?>