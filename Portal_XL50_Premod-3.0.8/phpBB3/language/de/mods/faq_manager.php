<?php
/**
*
* @package phpBB3 FAQ Manager
* @copyright (c) 2007 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_FAQ_MANAGER'			=> 'FAQ Manager',

	'BACKUP_LOCATION_NO_WRITE'	=> 'Backup-Datei konnte nicht erstellt werden.  Bitte pr&uuml;fe die Zugriffsberechtigungen f&uuml;r store/faq_backup/ und alle Unterverzeichnisse und Dateien.',
	'BAD_FAQ_FILE'				=> 'Die Datei, die du bearbeiten willst, ist keine FAQ-Datei.',

	'CAT_ALREADY_EXISTS'		=> 'Dieser Kategoriename ist bereits vorhanden.',
	'CATEGORY_NOT_EXIST'		=> 'Die Kategorie existiert bereits.',
	'CREATE_CATEGORY'			=> 'Kategorie erstellen',
	'CREATE_FIELD'				=> 'Feld erstellen',

	'DELETE_CAT'				=> 'Kategorie l&ouml;schen',
	'DELETE_CAT_CONFIRM'		=> 'Bist du dir sicher, dass du die Kategorie l&ouml;schen willst?  Alle Felder innerhalb der Kategorie werden ebenfalls gel&ouml;scht',
	'DELETE_VAR'				=> 'Feld l&ouml;schen',
	'DELETE_VAR_CONFIRM'		=> 'Bist du dir sicher, dass du das Feld l&ouml;schen willst?',

	'FAQ_CAT_LIST'				=> 'Hier kannst du alle Kategorien sehen und bearbeiten.',
	'FAQ_EDIT_SUCCESS'			=> 'Die FAQs wurden erfolgreich ge&auml;ndert.',
	'FAQ_FILE_NOT_EXIST'		=> 'Die Datei, die du bearbeiten willst, existiert nicht.',
	'FAQ_FILE_NO_WRITE'			=> 'Es ist nicht m&ouml;glich die Datei zu updaten.  Bitte pr&uuml;fe deine Zugangsberechtigung f&uuml;r die Datei.',
	'FAQ_FILE_SELECT'			=> 'Datei ausw&auml;hlen, die bearbeitet werden soll.',

	'LANGUAGE'					=> 'Sprache',
	'LOAD_BACKUP'				=> 'Backup laden',

	'NAME'						=> 'Name',
	'NOT_ALLOWED_OUT_OF_DIR'	=> 'Du kannst keine Dateien ausserhalb des Sprachverzeichnisses bearbeiten.',
	'NO_FAQ_FILES'				=> 'Es stehen keine FAQ-Dateien zur Verf&uuml;gung.',
	'NO_FAQ_VARS'				=> 'Es sind keine FAQ-Variablen in der Datei enthalten.',

	'VAR_ALREADY_EXISTS'		=> 'Das Feld ist bereits vorhanden',
	'VAR_NOT_EXIST'				=> 'Diese Variable ist nicht vorhanden.',
));

?>
