<?php
/**
*
* exif_data [Italian]
*
* @package phpBB Gallery / NV Exif Data
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @copyright (c) 2009, 2011 luckylab.eu - translated for portal xl on 2010/03/29
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
	'EXIF-DATA'					=> 'Dati-EXIF',
	'EXIF_APERTURE'				=> 'numero-F',
	'EXIF_CAM_MODEL'			=> 'Modello camera',
	'EXIF_DATE'					=> 'Immagini salvate il',
	'EXIF_EXPOSURE'				=> 'Velocità otturatore',
	'EXIF_EXPOSURE_EXP'			=> '%s Sec',// 'EXIF_EXPOSURE' unit
	'EXIF_EXPOSURE_BIAS'		=> 'Esposizione',
	'EXIF_EXPOSURE_BIAS_EXP'	=> '%s EV',// 'EXIF_EXPOSURE_BIAS' unit
	'EXIF_EXPOSURE_PROG'		=> 'Esposimetro',
	'EXIF_EXPOSURE_PROG_0'		=> 'Non definito',
	'EXIF_EXPOSURE_PROG_1'		=> 'Manuale',
	'EXIF_EXPOSURE_PROG_2'		=> 'Programma normale',
	'EXIF_EXPOSURE_PROG_3'		=> 'Priorità apertura',
	'EXIF_EXPOSURE_PROG_4'		=> 'Priorità otturatore',
	'EXIF_EXPOSURE_PROG_5'		=> 'Creativo (orientato alla profondità campo)',
	'EXIF_EXPOSURE_PROG_6'		=> 'Sportivo (orientato alla velocità ripresa)',
	'EXIF_EXPOSURE_PROG_7'		=> 'Ritratto (per foto con lo sfondo fuori fuoco)',
	'EXIF_EXPOSURE_PROG_8'		=> 'Paesaggio (per foto con il paesaggio di sfondo a fuoco)',
	'EXIF_FLASH'				=> 'Flash',
	'EXIF_FLASH_CASE_0'			=> 'Flash fuori fuoco',
	'EXIF_FLASH_CASE_1'			=> 'Flash a fuoco',
	'EXIF_FLASH_CASE_5'			=> 'ritorno luce non rilevato',
	'EXIF_FLASH_CASE_7'			=> 'ritorno luce rilevato',
	'EXIF_FLASH_CASE_8'			=> 'Con flasch fuori fuoco',
	'EXIF_FLASH_CASE_9'			=> 'Flash a fuoco, obbligatorio modalità flash',
	'EXIF_FLASH_CASE_13'		=> 'Flash a fuoco, obbligatoria modalità flash, ritorno luce non rilevato',
	'EXIF_FLASH_CASE_15'		=> 'Flash a fuoco, obbligatoria modalità flash, luce rilevata ritorno',
	'EXIF_FLASH_CASE_16'		=> 'Flash non a fuoco, obbligatoria modalità flash',
	'EXIF_FLASH_CASE_20'		=> 'Spento, Flash non a fuoco, ritorno luce non rilevato',
	'EXIF_FLASH_CASE_24'		=> 'Flash non a fuoco, automatico',
	'EXIF_FLASH_CASE_25'		=> 'Flash a fuoco, automatico',
	'EXIF_FLASH_CASE_29'		=> 'Flash a fuoco, modalità automatica, ritorno luce non rilevato',
	'EXIF_FLASH_CASE_31'		=> 'Flash a fuoco, modalità automatica, ritorno luce rilevata',
	'EXIF_FLASH_CASE_32'		=> 'Nessuna funzione flash',
	'EXIF_FLASH_CASE_48'		=> 'Spento, nessuna funzione flash',
	'EXIF_FLASH_CASE_65'		=> 'Flash a fuoco, riduzione occhi rossi',
	'EXIF_FLASH_CASE_69'		=> 'Flash a fuoco, riduzione occhi rossi, ritorno luce non rilevato',
	'EXIF_FLASH_CASE_71'		=> 'Flash a fuoco, riduzione occhi rossi, ritorno luce rilevato',
	'EXIF_FLASH_CASE_73'		=> 'Flash a fuoco, obbligatoria modalità flash, riduzione occhi rossi',
	'EXIF_FLASH_CASE_77'		=> 'Flash a fuoco, obbligatoria modalità flash, riduzione occhi rossi, ritorno luce non rilevato',
	'EXIF_FLASH_CASE_79'		=> 'Flash a fuoco, obbligatoria modalità flash, riduzione occhi rossi, ritorno luce rilevato',
	'EXIF_FLASH_CASE_80'		=> 'Spento, riduzione occhi rossi',
	'EXIF_FLASH_CASE_88'		=> 'Automatico, fuori fuoco, riduzione occhi rossi',
	'EXIF_FLASH_CASE_89'		=> 'Flash a fuoco, automatico, riduzione occhi rossi',
	'EXIF_FLASH_CASE_93'		=> 'Flash a fuoco, automatico, ritorno luce non rilevato, riduzione occhi rossi',
	'EXIF_FLASH_CASE_95'		=> 'Flash a fuoco, automatico, ritorno luce rilevato, riduzione occhi rossi',
	'EXIF_FOCAL'				=> 'Lunghezza fuooco',
	'EXIF_FOCAL_EXP'			=> '%s mm',// 'EXIF_FOCAL' unit
	'EXIF_ISO'					=> 'Velocità ISO',
	'EXIF_METERING_MODE'		=> 'Modalità di misurazione',
	'EXIF_METERING_MODE_0'		=> 'Sconosciuto',
	'EXIF_METERING_MODE_1'		=> 'Media',
	'EXIF_METERING_MODE_2'		=> 'Centro media ponderata',
	'EXIF_METERING_MODE_3'		=> 'Spot',
	'EXIF_METERING_MODE_4'		=> 'Multi-Spot',
	'EXIF_METERING_MODE_5'		=> 'Pattern',
	'EXIF_METERING_MODE_6'		=> 'Parziale',
	'EXIF_METERING_MODE_255'	=> 'Altro',
	'EXIF_NOT_AVAILABLE'		=> 'non disponibile',
	'EXIF_WHITEB'				=> 'Bilanciamento del bianco',
	'EXIF_WHITEB_AUTO'			=> 'Automatico',
	'EXIF_WHITEB_MANU'			=> 'Manuale',

	'SHOW_EXIF'					=> 'mostra/nascondi',
));

?>