<?php
/**
*
* en/mods/help_rules_page
*
* Built with the FAQ Manager addon by EXreaction
* http://www.lithiumstudios.org/phpBB3/viewtopic.php?f=31&t=464
*
* @name help_rules_page.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: help_rules_page.php,v 1.2 2009/05/29 15:46:28 damysterious Exp $
*
* @copyright (c) 2007, 2009  Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
global $config, $user;

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

$help = array(
	array(
		0 => '--',
		1 => 'Forum Rules [Nederlands]'
	),
	array(
		0 => 'Wat verwachten we van jou als forum-gebruiker?',
		1 => '<p>
<ul>    
	<li>Wederzijds respect tussen alle forum-gebruikers. Dit houdt in dat je op geen enkel moment een discussie begint met iemand anders waarbij je iemand aanvalt op zijn haar gedrag, mogelijke fysieke of mentale afwijkingen, huidskleur of geslacht. Laat je niet uit je tent lokken door opmerkingen van anderen maar plaats ook geen opmerkingen waar anderen aanstoot aan kunnen nemen.</li>
    <li>Spendeer eerst eens 10 minuten op dit forum zonder iets te posten. Leer de structuur van de forums kennen en maak je bekend met de lokatie van de zoek-functie en de Privé-berichten. Helpen bestaande topics en de zoek-functie je niet; maak dan een nieuw topic met een goede titel (die aangeeft wat je wil vragen/zeggen en niet zoiets als "HEEEELLLPPP! WTF!!! KUT-WINDOWS!!!").</li>
    <li>In topics waar iemand wat vraagt of wil weten; post daar alleen als je ook daadwerkelijk iets nuttigs toe te voegen hebt aan het topic. Niemand zit te wachten op een antwoord als "OMFG, N00B" als de vraag wordt gesteld hoe je precies je firewall in moet stellen.</li>
</ul>
</p>'
	),
	array(
		0 => 'Welke regeltjes zijn er nog meer?',
		1 => '<p>
<ul>    
    <li>Het is niet toegestaan om te spammen met topics over (betaalde of onbetaalde) advertenties, kettingbrieven, sollicitaties, nodeloze reakties of bepaalde internetsites.</li>
    <li>Het is niet toegestaan om afbeeldingen of teksten te plaatsen die auteursrechterlijk beschermd zijn zonder volledige bron-vermelding.</li>
    <li>Het is niet toegestaan om illegale software aan te bieden of vragen te stellen over hoe auteursrechterlijke materialen kan omzeilen, kopieren, verspreiden of veranderen. Bij constatering hiervan (hetzij op het forum of via Privé-berichten) ben je per direct niet meer welkom.</li>
    <li>Het is niet toegestaan om overige discriminerende, bedreigende, sexuele, schokkende of lasterende berichten of plaatjes te plaatsen.</li>
    <li>Het is niet toegestaan om overige discriminerende, bedreigende, sexuele, schokkende of lasterende, cq speciale codes berichten of plaatjes in je sig te plaatsen.</li>
    <li>Het is niet toegestaan om persoonlijke informatie (naam, adres, telefoonnummer, etc...) te vermelden; niet van jezelf en niet van anderen.</li>
    <li>Het is niet toegestaan om meerdere accounts te hebben; bij overtreding gaat de meest recente account zonder pardon op slot.</li>
</ul>
</p>'
	),
	array(
		0 => 'Wat kan je verwachten bij overtredingen?',
		1 => '<p>
Als je je niet aan bovenstaande regels houdt, dan kan je een aktie verwachten van de moderators, de super moderators of zelfs de eigenaren van de forum:
<ul>    
    <li>Berichten kunnen worden aangepast waarbij in het bericht zeer kort zal worden vermeld waarom. Discussies hierover zijn niet nodig.</li>
    <li>Berichten kunnen worden verwijderd; dit gebeurt voornamelijk als je bericht in overtreding is van de forum-regels.</li>
    <li>Via Privé-berichten kan je ook waarschuwingen van moderators verwachten; zet in je profiel dan ook aan dat je berichten wil ontvangen. Kunnen we je geen bericht sturen, dan gaat je account voor bepaalde tijd op slot.</li>
    <li>Na meerdere waarschuwingen zal er worden overlegd in een apart sub-forum of je hier nog langer welkom bent.</li>
</ul>
</p>'
	),
	array(
		0 => 'Overige mededelingen',
		1 => '<p>
<ul>    
    <li>Het forum is de enige officiele manier van support leveren/verkrijgen tussen gebruikers en beheerder. Krijg je op het forum geen antwoord, dan behouden de moderators zich het recht voor om een topic, bij uitblijven van reakties, na enkele dagen te verwijderen zonder tegenbericht aan de topicstarter.</li>
</ul>
</p>'
	),
	array(
		0 => 'Privacy-verklaring op dit forum',
		1 => '<br />
<p>Door middel van de forum-software worden er een aantal gegevens over je verzameld door middel van zogenaamde cookies. Deze gegevens worden eigendom van de forumbeheerder maar zullen nooit worden verkocht of verspreid aan andere partijen zonder schriftelijke toestemming van jou. Waar mogelijk gebruiken we deze gegevens ook om het forum aan te passen en af te stemmen op de gebruikers. En wanneer nodig gebruiken we deze gegevens ook om je van het forum te weren (en in het ergste geval van alle servers en sites die forum beheerder beheert).</p>
<p>Mocht je met bovenstaande niet akkoord gaan, kan je een mail sturen via het contact formulier waarin je aangeeft dat je je forum-account niet langer wil gebruiken. Deze zal dan worden verwijderd.</p>
<p>De forumeigenaar (al dan niet in overleg met moderators) behoudt zich het recht voor om bovenstaande regels zonder expliciete aankonding te wijzigen. Het kennisnemen van de regels is dus volledige verantwoording van de gebruiker; het naleven van de regels, en optreden waar nodig, zal gebeuren door forumbeheerder of door forumbeheerder aangewezen personen.</p>'
	),
	array(
		0 => 'Support geven',
		1 => '<p>Reageer enkel wanneer je de vrager er ook echt mee helpt.</p>
<p>Het reageren met "Zoeken" of direct met een linkje komen is niet de bedoeling, geef de oplossing en verwijs hem vervolgens door voor meer informatie.</p>
<p>Extern linken naar andere sites is toegestaan indien we de info zelf niet in huis hebben. Post dus geen link waarvan je niet zeker bent dat het geen extra waarde geeft in tegenstelling met wat we zelf hebben in het forum.</p>
<p>Het is niet nodig om de gebruiker aan te spreken op iets wat ze fout doen, hiervoor zijn de moderators.</p>
<p>Afsluiten van een onderwerp doe je altijd middels [SOLVED].</p>'
	),
	array(
		0 => 'Copyrightbeleid',
		1 => '<p>Het beheer, onze teams en vooral de supporters hechten er belang aan als de gebruiker de copyrights van phpBB respecteert, zowel die van de phpBB software, de phpBB stijlen als de phpBB modificaties. Indien ze er staan, laten staan dus!</p>
<p>Als de copyright van phpBB, ' . $config['sitename'] . ' of anderen ontbreekt behouden wij het ons voor support te weigeren.</p>'
	),
);

?>