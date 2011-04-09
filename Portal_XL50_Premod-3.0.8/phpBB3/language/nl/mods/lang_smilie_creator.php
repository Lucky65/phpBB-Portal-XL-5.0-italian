<?php
/** 
*
* @package smilies_creator
* $LastChangedDate: 2008-07-17 20:00:49 +0200 (Do, 17 Jul 2008) $
* $LastChangedBy: stoffel04 $
* $Id: lang_smilie_creator.php 62 2008-07-17 18:00:49Z stoffel04 $
* $Revision: 62 $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License*
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

$lang = array_merge($lang, array(
//Start smilie creator
'SMILIE_CREATOR'		=> 'Smilie maker',
'SHIELDTEXT' 			=> 'Sign text',
'FONTCOLOR' 			=> 'Tekst kleur',
'COLOR_DEFAULT'			=> 'Standaard kleur',
'COLOR_DARK_RED'		=> 'Donker rood',
'COLOR_RED' 			=> 'Rood',
'COLOR_ORANGE' 			=> 'Oranje',
'COLOR_BROWN' 			=> 'Bruin',
'COLOR_YELLOW' 			=> 'Geel',
'COLOR_GREEN' 			=> 'Groen',
'COLOR_OLIVE' 			=> 'Olijf',
'COLOR_CYAN' 			=> 'Cyaan',
'COLOR_BLUE' 			=> 'Blauw',
'COLOR_DARK_BLUE' 		=> 'Donker blauw',
'COLOR_INDIGO' 			=> 'Indigo',
'COLOR_VIOLETT' 		=> 'Paars',
'COLOR_WHITE' 			=> 'Wit',
'COLOR_BLACK' 			=> 'Zwart',
'SHADOWCOLOR' 			=> 'Schaduw kleur',
'SHIELDSHADOW' 			=> 'Sign shadow',
'SHIELDSHADOW_ON' 		=> 'Aan ',
'SHIELDSHADOW_OFF' 		=> 'Uit',
'SMILIECHOOSER' 		=> 'Smilie selectie',
'RANDOM_SMILIE' 		=> 'Random smilie',
'DEFAULT_SMILIE' 		=> 'Standaard smilie',
'CREATE_SMILIE' 		=> 'Maak',
'STOP_CREATING' 		=> 'Annuleer',
'SMILIE_NEXT'			=> 'Wil je nog een smilie maken?',
'SC_ERROR' 				=> 'Hier is je teken... je bent de tekst vergeten.',

));

?>