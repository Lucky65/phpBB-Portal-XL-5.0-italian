<?php
/**
*
* install_gallery [Nederlands]
*
* @package phpBB Gallery
* @version $Id: install_gallery.php 1298 2009-08-23 21:42:50Z nickvergessen $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

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

$lang = array_merge($lang, array(
	'BBCODES_NEEDS_REPARSE'		=> 'The BBCode needs to be rebuild.',
	'CAT_CONVERT'					=> 'converteer phpBB2',
	'CAT_CONVERT_TS'				=> 'converteer TS Gallery',

	'CHECK_TABLES'					=> 'Controleer tabellen',
	'CHECK_TABLES_EXPLAIN'			=> 'De volgende tabellen moeten bestaan zodat ze geconverteerd kunnen worden.',

	'CONVERT_SMARTOR_INTRO'			=> 'Converteer van „Album-MOD“ van Smartor naar „phpBB Galerie“',
	'CONVERT_SMARTOR_INTRO_BODY'	=> 'Met dit conversieprogramma kun je je albums, afbeeldingen, beoordelingen en commentaren van de <a href="http://www.phpbb.com/community/viewtopic.php?f=16&t=74772">Album-MOD</a> van Smartor (getest v2.0.56) en <a href="http://www.phpbbhacks.com/download/5028">Full Album Pack</a> (getest v1.4.1) naar phpBB Galerie omzetten.<br /><br /><strong>Let op:</strong> De <strong>permissies</strong> worden <strong>niet meegenomen</strong>.',
	'CONVERT_TS_INTRO'				=> 'Converteer van „TS Gallery“ naar „phpBB Galerie“',
	'CONVERT_TS_INTRO_BODY'			=> 'Met dit conversieprogramma kun je je albums, afbeeldingen, beoordelingen en commentaren van de <a href="http://www.phpbb.com/community/viewtopic.php?f=70&t=610509">TS Gallery</a> (getest v0.2.1) naar phpBB Galerie omzetten.<br /><br /><strong>Let op:</strong> De <strong>permissies</strong> worden <strong>niet meegenomen</strong>.',
	'CONVERT_COMPLETE_EXPLAIN'		=> 'Conversie van je galerij naar phpBB Galerie v%s was succesvol.<br />Controleer a.u.b. dat de instellingen goed zijn overgenomen voordat je je forum weer actief maakt door de install-map te verwijderen.<br /><br /><strong>Let op dat de permissies niet meegenomen zijn.</strong><br /><br />Je moet ook je database ontdoen van gegevens waar geen afbeeldingen meer beschikbaar bij zijn.  Je kunt dit doen onder ".MODs > phpBB Galerie > Galerie schoonmaken".',

	'CONVERTED_ALBUMS'				=> 'De albums zijn succesvol gekopieerd.',
	'CONVERTED_COMMENTS'			=> 'De commentaren zijn succesvol gekopieerd.',
	'CONVERTED_IMAGES'				=> 'De afbeeldingen zijn succesvol gekopieerd.',
	'CONVERTED_MISC'				=> 'Diverse onderdelen geconverteerd.',
	'CONVERTED_PERSONALS'			=> 'De persoonlijke albums zijn succesvol gekopieerd.',
	'CONVERTED_RATES'				=> 'De beoordelingen zijn succesvol gekopieerd.',
	'CONVERTED_RESYNC_ALBUMS'		=> 'Ververs albumstatistieken.',
	'CONVERTED_RESYNC_COMMENTS'		=> 'Ververs commentaren.',
	'CONVERTED_RESYNC_COUNTS'		=> 'Ververs afbeeldingstellers.',
	'CONVERTED_RESYNC_RATES'		=> 'Ververs beoordelingen.',

	'FILE_DELETE_FAIL'				=> 'Bestand kan niet worden verwijderd, moet je handmatig verwijderen',
	'FILES_STILL_EXISTS'			=> 'Bestanden bestaan nog',
	'FILES_REQUIRED_EXPLAIN'		=> '<strong>Benodigd</strong> - Om goed te kunnen functioneren heeft phpBB Galerie toegang nodig om bepaalde bestanden of mappen te kunnen schrijven. Als je “Niet schrijfbaar” ziet moet je de permissies van het bestand of de map zo aanpassen dat phpBB er heen kan schrijven.',
	'FILES_DELETE_OUTDATED'			=> 'Verwijder verouderde bestanden',
	'FILES_DELETE_OUTDATED_EXPLAIN'	=> 'Als je klikt om de verouderde bestanden te verwijderen worden ze totaal verwijderd en kunnen niet teruggezet worden!<br /><br />Let op:<br />Als je nog andere stijlen en/of talen hebt geïnstalleerd moet je daar de betreffende handmatig verwijderen.',
	'FILES_OUTDATED'				=> 'Verouderde bestanden',
	'FILES_OUTDATED_EXPLAIN'		=> '<strong>verouderd</strong> - Om hack-pogingen te voorkomen a.u.b. de volgende bestanden verwijderen.',

	'INSTALL_CONGRATS_EXPLAIN'		=> '<p>Je hebt succesvol phpBB Galerie v%s ge&iuml;nstalleerd.<br/><br/><strong>Verwijderen, verplaats of hernoem nu de install map voor je je forum gaat gebruiken.  Zolang de map bestaat zal alleen het Beheerderspaneel (ACP) toegangkelijk zijn.</strong></p>',
	'INSTALL_INTRO_BODY'			=> 'Met deze optie kun je phpBB Galerie in je forum installeren.',

	'GOTO_GALLERY'					=> 'Ga naar phpBB Galerie',

 	'MISSING_CONSTANTS'				=> 'Voordat je het installatiescript kunt starten moet je de bijgewerkte bestanden uploaden, in bijzonder includes/constants.php.',
	'MODULES_CREATE_PARENT'			=> 'Cre&eumler hoofd standard-module',
	'MODULES_PARENT_SELECT'			=> 'Kies hoofd module',
	'MODULES_SELECT_4ACP'			=> 'Kies hoofd module voor "beheerderspaneel"',
	'MODULES_SELECT_4LOG'			=> 'Kies hoofd module voor "Galerie-log"',
	'MODULES_SELECT_4MCP'			=> 'Kies hoofd module voor "moderatorpaneel"',
	'MODULES_SELECT_4UCP'			=> 'Kies hoofd module voor "gebruikerspaneel"',
	'MODULES_SELECT_NONE'			=> 'geen hoofd module',

	'OPTIONAL_EXIFDATA'				=> 'Function "exif_read_data" exists',
	'OPTIONAL_EXIFDATA_EXP'			=> 'The exif-module is not loaded or installed.',
	'OPTIONAL_EXIFDATA_EXPLAIN'		=> 'If the function exists, the exif data of the images are displayed on the imagepage.',
	'OPTIONAL_IMAGEROTATE'			=> 'Function "imagerotate" exists',
	'OPTIONAL_IMAGEROTATE_EXP'		=> 'You should update your GD Version, which is currently "%s".',
	'OPTIONAL_IMAGEROTATE_EXPLAIN'	=> 'If the function exists, you can rotate images while uploading and editing them.',

	'PHP_SETTINGS'				=> 'PHP settings',
	'PHP_SETTINGS_EXP'			=> 'These PHP settings and configurations are required for installing and running the gallery.',
	'PHP_SETTINGS_OPTIONAL'		=> 'Optional PHP settings',
	'PHP_SETTINGS_OPTIONAL_EXP'	=> 'These PHP settings are <strong>NOT</strong> required for normal usage, but will give some extra features.',
	'REQ_GD_LIBRARY'				=> 'GD Bibliotheek is ge&iuml;nstalleerd',
	'REQUIREMENTS_EXPLAIN'			=> 'Voor je verder gaat met de installatie zal phpBB een aantal tests uitvoeren op je server instellingen en bestanden om er zeker van te zijn dat je de installatie kunt doen en phpBB Galerie kunt gebruiken. Lees de resultaten aandachtig en ga niet verder voordat alle verplichte tests succesvol gedaan zijn.',

	'STAGE_ADVANCED_EXPLAIN'		=> 'Kies de hoofd module waar de galerij modules onder komen. Normaliter zou je dit niet hoeven wijzigen.',
	'STAGE_COPY_TABLE'				=> 'Kopieer de database-tabellen',
	'STAGE_COPY_TABLE_EXPLAIN'		=> 'De database-tabellen met de albums en gebruikersgegevens van TS Gallery hebben dezelfde namen als voor phpBB Galerie. Daarom is er een kopie aangemaakt om de gegevens toch te kunnen importeren.',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'De database-tabellen die phpBB Galerie gebruikt zijn aangemaakt en gevuld met initi&euml;le gegevens.  Ga verder naar het volgende scherm om de installatie van phpBB Galerie te voltooien.',
	'SUPPORT_BODY'					=> 'Volledige ondersteuning zal worden geleverd voor de actuele stabiele versie van phpBB Galerie, gratis. Dit omvat:</p><ul><li>installatie</li><li>instellingen</li><li>technische vragen</li><li>problemen veroorzaakt door mogelijk fouten in het programma</li><li>bijwerken van Release Candidate (RC) versies naar recentere stabiele versies</li><li>Converteren van Smartor\'s Album-MOD voor phpBB 2.0.x naar phpBB Galerie for phpBB3</li><li>Converteren van TS Gallery naar phpBB Galerie</li></ul><p>Het gebruik van Beta-V of Test-versies wordt beperkt aangeraden. Als er aanpassingen zijn is het wenselijk die zo spoedig mogelijk te installeren.</p><p>Ondersteuning wordt geleverd via de fora </p><ul><li><a href="http://www.flying-bits.org/">flying-bits.org - MOD-Autor nickvergessen\'s board</a></li><li><a href="http://www.phpbb.de/">phpbb.de</a></li><li><a href="http://www.phpbb.com/">phpbb.com</a></li></ul><p>',

	'TABLE_ALBUM'					=> 'tabel met de afbeeldingen',
	'TABLE_ALBUM_CAT'				=> 'tabel met de albums',
	'TABLE_ALBUM_COMMENT'			=> 'tabel met de commentaren',
	'TABLE_ALBUM_CONFIG'			=> 'tabel met de instellingen',
	'TABLE_ALBUM_RATE'				=> 'tabel met de beoordelingen',
	'TABLE_EXISTS'					=> 'bestaat',
	'TABLE_MISSING'					=> 'mist',
	'TABLE_PREFIX_EXPLAIN'			=> 'Prefix (voorloop) van de phpBB2-installatie',

	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Hier kun je je phpBB Galerie-versie bijwerken.',

	'VERSION_NOT_SUPPORTED'			=> 'Sorry, maar updates van voor versie 0.2.0 worden door deze installatie niet ondersteund.',
));

?>