<?php
/** 
*
* @package smilies_creator
* $LastChangedDate: 2008-07-17 20:00:49 +0200 (Do, 17 Jul 2008) $
* $LastChangedBy: stoffel04 $
* $Id: lang_smilie_creator.php 62 2008-07-17 18:00:49Z stoffel04 $
* $Revision: 62 $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License*
* @german translation by woipi
*/

/*
 * @ignore 
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
//Start smilie creator
'SMILIE_CREATOR'		=> 'Smilie Creator',
'SHIELDTEXT' 			=> 'Text eintragen',
'FONTCOLOR' 			=> 'Textfarbe',
'COLOR_DEFAULT'			=> 'Default Farbe',
'COLOR_DARK_RED'		=> 'Dunkelrot',
'COLOR_RED' 			=> 'Rot',
'COLOR_ORANGE' 			=> 'Orange',
'COLOR_BROWN' 			=> 'Baun',
'COLOR_YELLOW' 			=> 'Gelb',
'COLOR_GREEN' 			=> 'Gr&uuml;n',
'COLOR_OLIVE' 			=> 'Olivegr&uuml;n',
'COLOR_CYAN' 			=> 'T&uuml;rkis',
'COLOR_BLUE' 			=> 'Blau',
'COLOR_DARK_BLUE' 		=> 'Dunkelblau',
'COLOR_INDIGO' 			=> 'Indigoblau',
'COLOR_VIOLETT' 		=> 'Violett',
'COLOR_WHITE' 			=> 'Wei&szlig;',
'COLOR_BLACK' 			=> 'Schwarz',
'SHADOWCOLOR' 			=> 'Schattenfarbe',
'SHIELDSHADOW' 			=> 'Schatten eintragen',
'SHIELDSHADOW_ON' 		=> 'Aktivieren',
'SHIELDSHADOW_OFF' 		=> 'Deaktivieren',
'SMILIECHOOSER' 		=> 'Smilie auswahl',
'RANDOM_SMILIE' 		=> 'Zuf&aumllliger Smilie',
'DEFAULT_SMILIE' 		=> 'Default Smilie',
'CREATE_SMILIE' 		=> 'Erstellen',
'STOP_CREATING' 		=> 'Abbrechen',
'SMILIE_NEXT'			=> 'Willst du eine andere Smilieeintragung erstellen?',
'SC_ERROR' 				=> 'Hier ist deine Eintragung... Du hast den Text vergessen.',

));

?>