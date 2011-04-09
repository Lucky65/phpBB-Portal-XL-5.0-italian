<?php
/**
*
* exif_data [Nederlands]
* 
* @package phpBB Gallery / NV Exif Data
* @version $Id: exif_data.php 849 2008-12-30 01:06:17Z nickvergessen $
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
	'EXIF-DATA'						=> 'EXIF-Gegevens',
	'EXIF_APERTURE'					=> 'F-nummer',
	'EXIF_CAM_MODEL'				=> 'Cameramodel',
	'EXIF_DATE'						=> 'Foto genomen op',
	'EXIF_EXPOSURE'					=> 'Sluitersnelheid',
		'EXIF_EXPOSURE_EXP'			=> '%s sec',// 'EXIF_EXPOSURE' unit
	'EXIF_EXPOSURE_BIAS'			=> 'Belichtingscompensatie',
		'EXIF_EXPOSURE_BIAS_EXP'	=> '%s EV',// 'EXIF_EXPOSURE_BIAS' unit
	'EXIF_EXPOSURE_PROG'			=> 'Belichtingsprogramma',
		'EXIF_EXPOSURE_PROG_0'		=> 'Niet gedefinieerd',
		'EXIF_EXPOSURE_PROG_1'		=> 'Handmatig',
		'EXIF_EXPOSURE_PROG_2'		=> 'Standaard programma',
		'EXIF_EXPOSURE_PROG_3'		=> 'Diafragma',
		'EXIF_EXPOSURE_PROG_4'		=> 'Sluiter',
		'EXIF_EXPOSURE_PROG_5'		=> 'Creatief programma (gecompenseerd voor diepte)',
		'EXIF_EXPOSURE_PROG_6'		=> 'Actie programma (gecompenseerd voor korte sluitertijd)',
		'EXIF_EXPOSURE_PROG_7'		=> 'Portret modus (voor dichtbij-opnames met een onscherpe achtergrond)',
		'EXIF_EXPOSURE_PROG_8'		=> 'Landscape mode (voor landschaps-opnames met een scherpe achtergrond)',
	'EXIF_FLASH'					=> 'Flitser',
		'EXIF_FLASH_CASE_0'			=> 'Flitser niet afgegaan',
		'EXIF_FLASH_CASE_1'			=> 'Flitser afgegaan',
		'EXIF_FLASH_CASE_5'			=> 'Geen reflectie gedetecteerd',
		'EXIF_FLASH_CASE_7'			=> 'Reflectie gedetecteerd',
		'EXIF_FLASH_CASE_8'			=> 'Aan, flitser niet afgegaan',
		'EXIF_FLASH_CASE_9'			=> 'Flitser afgegaan, verplicht flitsen modus',
		'EXIF_FLASH_CASE_13'		=> 'Flitser afgegaan, verplicht flitsen modus, geen reflectie gedetecteerd',
		'EXIF_FLASH_CASE_15'		=> 'Flitser afgegaan, verplicht flitsen modus, reflectie gedetecteerd',
		'EXIF_FLASH_CASE_16'		=> 'Flitser niet afgegaan, verplicht flitsen modus',
		'EXIF_FLASH_CASE_20'		=> 'Uit, flitser niet afgegaan, geen reflectie gedetecteerd',
		'EXIF_FLASH_CASE_24'		=> 'Flitser niet afgegaan, auto modus',
		'EXIF_FLASH_CASE_25'		=> 'Flitser afgegaan, auto modus',
		'EXIF_FLASH_CASE_29'		=> 'Flitser afgegaan, auto modus, geen reflectie gedetecteerd',
		'EXIF_FLASH_CASE_31'		=> 'Flitser afgegaan, auto modus, reflectie gedetecteerd',
		'EXIF_FLASH_CASE_32'		=> 'Geen flits-functie',
		'EXIF_FLASH_CASE_48'		=> 'Uit, geen flits-functie',
		'EXIF_FLASH_CASE_65'		=> 'Flitser afgegaan, rode-ogen-correctie modus',
		'EXIF_FLASH_CASE_69'		=> 'Flitser afgegaan, rode-ogen-correctie modus, geen reflectie gedetecteerd',
		'EXIF_FLASH_CASE_71'		=> 'Flitser afgegaan, rode-ogen-correctie modus, reflectie gedetecteerd',
		'EXIF_FLASH_CASE_73'		=> 'Flitser afgegaan, verplicht flitsen modus, rode-ogen-correctie modus',
		'EXIF_FLASH_CASE_77'		=> 'Flitser afgegaan, verplicht flitsen modus, rode-ogen-correctie modus, geen reflectie gedetecteerd',
		'EXIF_FLASH_CASE_79'		=> 'Flitser afgegaan, verplicht flitsen modus, rode-ogen-correctie modus, reflectie gedetecteerd',
		'EXIF_FLASH_CASE_80'		=> 'Uit, rode-ogen-correctie modus',
		'EXIF_FLASH_CASE_88'		=> 'Auto, rode-ogen-correctie modus',
		'EXIF_FLASH_CASE_89'		=> 'Flitser afgegaan, auto modus, rode-ogen-correctie modus',
		'EXIF_FLASH_CASE_93'		=> 'Flitser afgegaan, auto modus, geen reflectie gedetecteerd, rode-ogen-correctie modus',
		'EXIF_FLASH_CASE_95'		=> 'Flitser afgegaan, auto modus, reflectie gedetecteerd, rode-ogen-correctie modus',
	'EXIF_FOCAL'					=> 'Brandpuntsafstand',
		'EXIF_FOCAL_EXP'			=> '%s mm',// 'EXIF_FOCAL' unit
	'EXIF_ISO'						=> 'ISO gevoeligheidsnorm',
	'EXIF_METERING_MODE'			=> 'Meetmodus',
		'EXIF_METERING_MODE_0'		=> 'Onbekend',
		'EXIF_METERING_MODE_1'		=> 'Gemiddeld',
		'EXIF_METERING_MODE_2'		=> 'Centraal Gewogen Gemiddelde',
		'EXIF_METERING_MODE_3'		=> 'Punt',
		'EXIF_METERING_MODE_4'		=> 'Meerpunts',
		'EXIF_METERING_MODE_5'		=> 'Patroon',
		'EXIF_METERING_MODE_6'		=> 'Gedeeltelijk',
		'EXIF_METERING_MODE_255'	=> 'Anders',
	'EXIF_NOT_AVAILABLE'			=> 'niet beschikbaar',
	'EXIF_WHITEB'					=> 'Witbalans',
		'EXIF_WHITEB_AUTO'			=> 'Automatisch',
		'EXIF_WHITEB_MANU'			=> 'Manueel',
		
	'SHOW_EXIF'						=> 'in-/uitschakelen',
));

?>