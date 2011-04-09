<?php
/**
*
* exif_data [Greek]
*
* @package phpBB Gallery / NV Exif Data
* @version $Id: exif_data.php 126 2009-06-09 14:52:22Z diastasi $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com:
* (http://phpbbgr.com/team/)
* (http://thraki.info) diastasi
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
	'EXIF-DATA'					=> 'Δεδομένα-EXIF',
	'EXIF_APERTURE'				=> 'Αριθμός-F',
	'EXIF_CAM_MODEL'			=> 'Μοντέλο Κάμερας',
	'EXIF_DATE'					=> 'Εικόνα τραβήχτηκε',
	'EXIF_EXPOSURE'				=> 'Ταχύτητα κλείστρου',
		'EXIF_EXPOSURE_EXP'			=> '%s Δευτ',// 'EXIF_EXPOSURE' unit
	'EXIF_EXPOSURE_BIAS'		=> 'Πόλωση έκθεσης',
		'EXIF_EXPOSURE_BIAS_EXP'	=> '%s EV',// 'EXIF_EXPOSURE_BIAS' unit
	'EXIF_EXPOSURE_PROG'		=> 'Πρόγραμμα έκθεσης',
		'EXIF_EXPOSURE_PROG_0'		=> 'Δεν καθορίστηκε',
		'EXIF_EXPOSURE_PROG_1'		=> 'Χειροκίνητα',
		'EXIF_EXPOSURE_PROG_2'		=> 'Νορμάλ Πρόγραμμα',
		'EXIF_EXPOSURE_PROG_3'		=> 'Προτεραιότητα ανοίγματος',
		'EXIF_EXPOSURE_PROG_4'		=> 'Προτεραιότητα κλείστρου',
		'EXIF_EXPOSURE_PROG_5'		=> 'Πρόγραμμα Δημιουργίας (Πόλωση προς βάθος πεδίου)',
		'EXIF_EXPOSURE_PROG_6'		=> 'Πρόγραμμα Ενέργειας (Πόλωση προς γρήγορη ταχύτητα κλείστρου)',
		'EXIF_EXPOSURE_PROG_7'		=> 'Κατάσταση Portrait (Για κοντινές φωτογραφίες με φόντο εκτός εστίασης)',
		'EXIF_EXPOSURE_PROG_8'		=> 'Κατάσταση Landscape (Για τοπία με εστιασμένο φόντο)',
	'EXIF_FLASH'				=> 'Φλας',
		'EXIF_FLASH_CASE_0'			=> 'Το φλας δεν λειτούργησε',
		'EXIF_FLASH_CASE_1'			=> 'Το φλας λειτούργησε',
		'EXIF_FLASH_CASE_5'			=> 'Δε βρέθηκε φως επιστροφής',
		'EXIF_FLASH_CASE_7'			=> 'βρέθηκε φως επιστροφής',
		'EXIF_FLASH_CASE_8'			=> 'Ανοικτό, Το φλας δεν λειτούργησε',
		'EXIF_FLASH_CASE_9'			=> 'Το φλας λειτούργησε, υποχρεωτική χρήση φλας',
		'EXIF_FLASH_CASE_13'		=> 'Το φλας λειτούργησε, υποχρεωτική χρήση φλας, Δε βρέθηκε φως επιστροφής',
		'EXIF_FLASH_CASE_15'		=> 'Το φλας λειτούργησε, υποχρεωτική χρήση φλας, βρέθηκε φως επιστροφής',
		'EXIF_FLASH_CASE_16'		=> 'Το φλας δεν λειτούργησε, υποχρεωτική χρήση φλας',
		'EXIF_FLASH_CASE_20'		=> 'Κλειστό,, το φλας λειτούργησε. Δεν βρέθηκε φως επιστροφής',
		'EXIF_FLASH_CASE_24'		=> 'Το φλας δεν λειτούργησε, αυτόματη λειτουργία',
		'EXIF_FLASH_CASE_25'		=> 'Το φλας λειτούργησε, αυτόματη λειτουργία',
		'EXIF_FLASH_CASE_29'		=> 'Το φλας λειτούργησε, αυτόματη λειτουργία, Δε βρέθηκε φως επιστροφής',
		'EXIF_FLASH_CASE_31'		=> 'Το φλας λειτούργησε, αυτόματη λειτουργία, βρέθηκε φως επιστροφής',
		'EXIF_FLASH_CASE_32'		=> 'Καμία λειτουργία φλας',
		'EXIF_FLASH_CASE_48'		=> 'Κλειστό, Καμία λειτουργία φλας',
		'EXIF_FLASH_CASE_65'		=> 'Το φλας λειτούργησε, λειτουργία κόκκινου-ματιού',
		'EXIF_FLASH_CASE_69'		=> 'Το φλας λειτούργησε, λειτουργία κόκκινου-ματιού. Δεν βρέθηκε φως επιστροφής',
		'EXIF_FLASH_CASE_71'		=> 'Το φλας λειτούργησε, λειτουργία κόκκινου-ματιού. Δεν βρέθηκε φως επιστροφής',
		'EXIF_FLASH_CASE_73'		=> 'Το φλας λειτούργησε, υποχρεωτική χρήση φλας, λειτουργία κόκκινου-ματιού',
		'EXIF_FLASH_CASE_77'		=> 'Το φλας λειτούργησε, υποχρεωτική χρήση φλας, λειτουργία κόκκινου-ματιού. Δεν βρέθηκε φως επιστροφής',
		'EXIF_FLASH_CASE_79'		=> 'Το φλας λειτούργησε, υποχρεωτική χρήση φλας, λειτουργία κόκκινου-ματιού. Δεν βρέθηκε φως επιστροφής',
		'EXIF_FLASH_CASE_80'		=> 'Κλειστό, λειτουργία κόκκινου-ματιού',
		'EXIF_FLASH_CASE_88'		=> 'Αυτόματο, δεν λειτούργησε, κόκκινου-ματιού παράγοντας',
		'EXIF_FLASH_CASE_89'		=> 'Το φλας λειτούργησε, Αυτόματο, λειτουργία κόκκινου-ματιού',
		'EXIF_FLASH_CASE_93'		=> 'Το φλας λειτούργησε, Αυτόματο, Δε βρέθηκε φως επιστροφής, λειτουργία κόκκινου-ματιού',
		'EXIF_FLASH_CASE_95'		=> 'Το φλας λειτούργησε, Αυτόματο, βρέθηκε φως επιστροφής, λειτουργία κόκκινου-ματιού',
	'EXIF_FOCAL'				=> 'Μήκος φακού',
		'EXIF_FOCAL_EXP'			=> '%s mm',// 'EXIF_FOCAL' unit
	'EXIF_ISO'					=> 'Κατάταξη ταχύτητας ISO',
	'EXIF_METERING_MODE'		=> 'λειτουργία Μέτρησης',
		'EXIF_METERING_MODE_0'		=> 'Άγνωστο',
		'EXIF_METERING_MODE_1'		=> 'Εκτίμηση',
		'EXIF_METERING_MODE_2'		=> 'Εκτίμηση Κεντρικής επιβάρυνσης',
		'EXIF_METERING_MODE_3'		=> 'Κηλίδα',
		'EXIF_METERING_MODE_4'		=> 'Πολλαπλή κηλίδα',
		'EXIF_METERING_MODE_5'		=> 'Μοτίβο',
		'EXIF_METERING_MODE_6'		=> 'Μερικό',
		'EXIF_METERING_MODE_255'	=> 'Άλλο',
	'EXIF_NOT_AVAILABLE'		=> 'Δεν βρέθηκε',
	'EXIF_WHITEB'				=> 'Ισορροπία Λευκού',
		'EXIF_WHITEB_AUTO'			=> 'Αυτόματο',
		'EXIF_WHITEB_MANU'			=> 'Χειροκίνητο',

	'SHOW_EXIF'					=> 'προβολή/απόκρυψη',
));

?>