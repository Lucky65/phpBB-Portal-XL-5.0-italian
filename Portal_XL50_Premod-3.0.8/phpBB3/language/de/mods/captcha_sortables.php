<?php
/**
*
* sortables captcha [English]
*
* @package language
* @version $Id: captcha_sortables.php 9875 2009-08-13 21:40:23Z Derky $
* @copyright (c) 2009 phpBB Group
* @copyright (c) 2009 Derky - phpBB3styles.net
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CAPTCHA_SORTABLES'				=> 'Sortierbares CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Bitte sortiere die Objekte in der richtigen Reihenfolge, um die automatische Registrierung zu verhindern.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Bitte sortiere die Liste in der richtigen Reihenfolge, um die automatische Registrierung zu verhindern.', // Mit JavaScript deaktiviert
	'CONFIRM_QUESTION_WRONG'		=> 'Du hast die Objekte der Frage nach in der falschen Reihenfolge angeordnet.',

	'QUESTION_ANSWERS'			=> 'Antworten',
	'ANSWERS_EXPLAIN'			=> 'Die Optionen f&uuml;r diese Spalte. Bitte schreibe eine Option pro Zeile.',
	'CONFIRM_QUESTION'			=> 'Frage',
	'CHANGES_SUBMIT'			=> '&Auml;nderungen akzeptieren',

	'EDIT_QUESTION'				=> 'Frage bearbeiten',
	'QUESTIONS'					=> 'Sortierlisten Fragen',
	'QUESTIONS_EXPLAIN'			=> 'Hier kannst du Fragen, die bei der Registrierung gestellt werden sollen hinzuf&uuml;gen und bearbeiten. Du musst zumindest eine Frage in der standart Sprache des Boards stellen, um diese Funktion nutzen zu k&ouml;nnen. Die Fragen sollten leicht von jedermann zu l&ouml;sen sein. Die Benutzer werden alle Optionen in einer Spalte sehen und m&uuml;ssen sie den richtigen Spalten zuordnen. Du solltest die Fragen auch regelm&auml;&szlig;ig &aum;ndern.',
	'QUESTION_DELETED'			=> 'Frage gel&ouml;scht',
	'QUESTION_LANG'				=> 'Sprache',
	'QUESTION_LANG_EXPLAIN'		=> 'Die Sprache in der die Frage und deren Optionen geschrieben worden sind.',
	'QUESTION_SORT'				=> 'Standart Sortierliste',
	'QUESTION_SORT_EXPLAIN'		=> 'In welcher Spalte alle Antworten standartm&auml;&szlig;ig angezeigt werden sollen.',
	
	'COLUMN_LEFT'				=> 'Linke Spalte',
	'COLUMN_RIGHT'				=> 'Rechte Spalte',
	'COLUMN_NAME'				=> 'Spalten Name',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Wie z.B.: Dinge die ich brauche',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Wie z.B.: Dinge die ich nicht brauche',
	
	'DEMO_QUESTION'				=> 'Was brauch ich f&uuml;r eine Tomatensuppe',	
	'DEMO_NAME_LEFT'			=> 'In der Pfanne',
	'DEMO_NAME_RIGHT'			=> 'Wegwerfen',
	'DEMO_OPTION_BANANAS'		=> 'Bananen',
	'DEMO_OPTION_TOMATOES'		=> 'Tomaten',
	'DEMO_OPTION_APPLES'		=> '&Auml;pfel',
	'DEMO_PREVIEW_ONLY'			=> 'Du kannst die Objekte nicht in der Vorschau ansehen.',

	'QUESTION_TEXT'				=> 'Frage',
	'QUESTION_TEXT_EXPLAIN'		=> 'Erkl&auml;re wie die Objekte in den Spalten angeordnet werden sollen.',

	'SORTABLES_ERROR_MSG'		=> 'Bitte f&uuml;lle alle Felder aus und gib wenigstens ein Objekt f&uuml;r beide Spalten an.',
));

?>