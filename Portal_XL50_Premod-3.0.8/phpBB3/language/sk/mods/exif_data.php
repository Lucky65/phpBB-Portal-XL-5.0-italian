<?php
/**
*
* exif_data [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
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
	'EXIF-DATA'					=> 'EXIF-Data',
	'EXIF_APERTURE'				=> 'F-number',
	'EXIF_CAM_MODEL'			=> 'Model Kamery',
	'EXIF_DATE'					=> 'Snímky, vytvorené na',
	'EXIF_EXPOSURE'				=> 'Rýchlosť uzávierky',
		'EXIF_EXPOSURE_EXP'			=> '%s Sek.',// 'EXIF_EXPOSURE' unit
	'EXIF_EXPOSURE_BIAS'		=> 'Zmena expozície',
		'EXIF_EXPOSURE_BIAS_EXP'	=> '%s EV',// 'EXIF_EXPOSURE_BIAS' unit
	'EXIF_EXPOSURE_PROG'		=> 'Program expozície',
		'EXIF_EXPOSURE_PROG_0'		=> 'Nedefinovaný',
		'EXIF_EXPOSURE_PROG_1'		=> 'Manuál',
		'EXIF_EXPOSURE_PROG_2'		=> 'Normal program',
		'EXIF_EXPOSURE_PROG_3'		=> 'Priorita clony',
		'EXIF_EXPOSURE_PROG_4'		=> 'Priorita uzávierky',
		'EXIF_EXPOSURE_PROG_5'		=> 'Kreatívna (lepšia hĺbka ostrosti)',
		'EXIF_EXPOSURE_PROG_6'		=> 'Akčný program (lepšia rýchla rýchlosť závierky)',
		'EXIF_EXPOSURE_PROG_7'		=> 'Portrét (detailný záber fotografie zo zameraním na pozadíe)',
		'EXIF_EXPOSURE_PROG_8'		=> 'Príroda (fotografie krajiny s ostrým pozadím)',
	'EXIF_FLASH'				=> 'Flash',
		'EXIF_FLASH_CASE_0'			=> 'Flash did not fire',
		'EXIF_FLASH_CASE_1'			=> 'Flash fired',
		'EXIF_FLASH_CASE_5'			=> 'return light not detected',
		'EXIF_FLASH_CASE_7'			=> 'return light detected',
		'EXIF_FLASH_CASE_8'			=> 'On, Flash did not fire',
		'EXIF_FLASH_CASE_9'			=> 'Flash fired, compulsory flash mode',
		'EXIF_FLASH_CASE_13'		=> 'Flash fired, compulsory flash mode, return light not detected',
		'EXIF_FLASH_CASE_15'		=> 'Flash fired, compulsory flash mode, return light detected',
		'EXIF_FLASH_CASE_16'		=> 'Flash did not fire, compulsory flash mode',
		'EXIF_FLASH_CASE_20'		=> 'Off, Flash did not fire, return light not detected',
		'EXIF_FLASH_CASE_24'		=> 'Flash did not fire, auto mode',
		'EXIF_FLASH_CASE_25'		=> 'Flash fired, auto mode',
		'EXIF_FLASH_CASE_29'		=> 'Flash fired, auto mode, return light not detected',
		'EXIF_FLASH_CASE_31'		=> 'Flash fired, auto mode, return light detected',
		'EXIF_FLASH_CASE_32'		=> 'No flash function',
		'EXIF_FLASH_CASE_48'		=> 'Off, No flash function',
		'EXIF_FLASH_CASE_65'		=> 'Flash fired, red-eye reduction mode',
		'EXIF_FLASH_CASE_69'		=> 'Flash fired, red-eye reduction mode, return light not detected',
		'EXIF_FLASH_CASE_71'		=> 'Flash fired, red-eye reduction mode, return light detected',
		'EXIF_FLASH_CASE_73'		=> 'Flash fired, compulsory flash mode, red-eye reduction mode',
		'EXIF_FLASH_CASE_77'		=> 'Flash fired, compulsory flash mode, red-eye reduction mode, return light not detected',
		'EXIF_FLASH_CASE_79'		=> 'Flash fired, compulsory flash mode, red-eye reduction mode, return light detected',
		'EXIF_FLASH_CASE_80'		=> 'Off, Red-eye reduction',
		'EXIF_FLASH_CASE_88'		=> 'Auto, Did not fire, Red-eye reduction',
		'EXIF_FLASH_CASE_89'		=> 'Flash fired, auto mode, red-eye reduction mode',
		'EXIF_FLASH_CASE_93'		=> 'Flash fired, auto mode, return light not detected, red-eye reduction mode',
		'EXIF_FLASH_CASE_95'		=> 'Flash fired, auto mode, return light detected, red-eye reduction mode',
	'EXIF_FOCAL'				=> 'Dĺžka ohniska',
		'EXIF_FOCAL_EXP'			=> '%s mm',// 'EXIF_FOCAL' unit
	'EXIF_ISO'					=> 'Nastavenie ISO citlivosti',
	'EXIF_METERING_MODE'		=> 'Spôsob merania',
		'EXIF_METERING_MODE_0'		=> 'Neznáme',
		'EXIF_METERING_MODE_1'		=> 'Priemerne',
		'EXIF_METERING_MODE_2'		=> 'Stredne priemerne',
		'EXIF_METERING_MODE_3'		=> 'Bod',
		'EXIF_METERING_MODE_4'		=> 'Multi-Bodové',
		'EXIF_METERING_MODE_5'		=> 'Vzor',
		'EXIF_METERING_MODE_6'		=> 'Čiastočné',
		'EXIF_METERING_MODE_255'	=> 'Iné',
	'EXIF_NOT_AVAILABLE'		=> 'nie je k dispozícii',
	'EXIF_WHITEB'				=> 'Vyváženie bielej',
		'EXIF_WHITEB_AUTO'			=> 'Automaticky',
		'EXIF_WHITEB_MANU'			=> 'Manuálne',

	'SHOW_EXIF'					=> 'zobrazím/skryjem',
));

?>