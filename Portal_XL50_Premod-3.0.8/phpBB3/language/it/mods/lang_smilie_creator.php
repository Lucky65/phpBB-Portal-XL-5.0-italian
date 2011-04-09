<?php
/** 
*
* @package smilies_creator
* $LastChangedDate: 2008-07-17 20:00:49 +0200 (Do, 17 Jul 2008) $
* $LastChangedBy: stoffel04 $
* $Id: lang_smilie_creator.php 62 2008-07-17 18:00:49Z stoffel04 $
* $Revision: 62 $
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
* @license http://opensource.org/licenses/gpl-license.php GNU Public License*
*
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
'SMILIE_CREATOR'		=> 'Crea faccine',
'SHIELDTEXT' 			=> 'Scrivi testo',
'FONTCOLOR' 			=> 'Colore testo',
'COLOR_DEFAULT'			=> 'Colore default',
'COLOR_DARK_RED'		=> 'Rosso scuro',
'COLOR_RED' 			=> 'Rosso',
'COLOR_ORANGE' 			=> 'Arancione',
'COLOR_BROWN' 			=> 'Marrone',
'COLOR_YELLOW' 			=> 'Giallo',
'COLOR_GREEN' 			=> 'Verde',
'COLOR_OLIVE' 			=> 'Oliva',
'COLOR_CYAN' 			=> 'Celeste',
'COLOR_BLUE' 			=> 'Blu',
'COLOR_DARK_BLUE' 		=> 'Blu scuro',
'COLOR_INDIGO' 			=> 'Indigo',
'COLOR_VIOLETT' 		=> 'Viola',
'COLOR_WHITE' 			=> 'Bianco',
'COLOR_BLACK' 			=> 'Nero',
'SHADOWCOLOR' 			=> 'Colore ombreggiato',
'SHIELDSHADOW' 			=> 'Testo ombreggiato',
'SHIELDSHADOW_ON' 		=> 'Attivato',
'SHIELDSHADOW_OFF' 		=> 'Disattivato',
'SMILIECHOOSER' 		=> 'Seleziona faccina',
'RANDOM_SMILIE' 		=> 'Faccina random',
'DEFAULT_SMILIE' 		=> 'Faccina default ',
'CREATE_SMILIE' 		=> 'Crea',
'STOP_CREATING' 		=> 'Cancella',
'SMILIE_NEXT'			=> 'Vuoi creare la faccina?',
'SC_ERROR' 				=> 'Questo è la tua firma smile... hai dimenticato il testo.',

));

?>