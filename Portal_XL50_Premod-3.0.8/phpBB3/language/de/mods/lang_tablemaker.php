<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(

'TABLEMAKER_TITLE'			      => '~ Tabellengenerator ~',
'TABLEMAKER_ROWS'			      => 'Zeilen',
'TABLEMAKER_COLUMNS'		      => 'Spalten',
'TABLEMAKER_AND_NR'			      => '+ Nr.',
'TABLEMAKER_FIND_EASY'		      => 'So finden sich die Zellen leichter',
'TABLEMAKER_BORDER_WIDTH'		  => 'Rahmenbreite',
'TABLEMAKER_CELL_INFO'			  => 'Zellen-Anzahl (Nur Info)',
'TABLEMAKER_TABLE_HEIGHT'		  => 'Tabellenhöhe (px)',
'TABLEMAKER_TABLE_WIDTH'		  => 'Tabellenbreite (px / %)',
'TABLEMAKER_BG_COLOR'			  => 'Hintergrundfarbe',
'TABLEMAKER_EXAMPEL_BG_COLOR'	  => 'z.B. #CCCCCC oder lightgray',
'TABLEMAKER_BORDER_COLOR'		  => 'Rahmenfarbe',
'TABLEMAKER_EXAMPEL_BORDER_COLOR' => 'z.B. #666666 oder gray',
'TABLEMAKER_CELL_FILLING'		  => 'Zellauffüllung',
'TABLEMAKER_CELL_ROOM'			  => 'Zellraum',
'TABLEMAKER_ALIGNMENT_HORIZ'	  => 'Ausrichtung-Horizontal',
'TABLEMAKER_ALIGNMENT_VERTI'	  => 'Ausrichtung-Vertikal ',
'TABLEMAKER_POSITION_TOP'		  => 'Oben',
'TABLEMAKER_POSITION_LEFT'		  => 'Links',
'TABLEMAKER_POSITION_CENTER'	  => 'Mitte',
'TABLEMAKER_POSITION_RIGHT'		  => 'Rechts',
'TABLEMAKER_POSITION_BOTTOM'      => 'Unten',
'TABLEMAKER_EXPL_CONFIG'		  => '1. Tabelle konfigurieren',
'TABLEMAKER_EXPL_GENERATE'		  => '2. BBCode generieren',
'TABLEMAKER_EXPL_PASTE'			  => '3. Einfügen',
'TABLEMAKER_EXPL_CLOSE_OR'		  => '4. Schliessen oder',
'TABLEMAKER_EXPL_NEW_TABLE'		  => '5. Zurücksetzen und weitere Tabelle konfigurieren',
'TABLEMAKER_BUTTON_NEW'			  => 'Zurücksetzen',
'TABLEMAKER_BUTTON_GENERATE'	  => 'BBCode generieren',
'TABLEMAKER_BUTTON_PASTE'		  => 'Einfügen',
'TABLEMAKER_BUTTON_CLOSE'		  => 'Schliessen',
'TABLEMAKER_PASTE_CONTENT'		  => 'YOUR CONTENT-',

));

?>