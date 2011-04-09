<?php
/**
*
* sortables captcha [Italian]
*
* @package language
* @version $Id: captcha_sortables.php 9875 2009-08-13 21:40:23Z Derky $
* @copyright (c) 2009 phpBB Group
* @copyright (c) 2009 Derky - phpBB3styles.net
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
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
	'CAPTCHA_SORTABLES'				=> 'Ordinamento CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'		=> 'Per evitare le registrazioni automatiche, trascina con il mouse le opzioni dell’elenco.',
	'CONFIRM_QUESTION_EXPLAIN_NOJS'	=> 'Seleziona le opzioni della lista per evitare le registrazioni automatiche.', // With JavaScript disabled
	'CONFIRM_QUESTION_WRONG'		=> 'Hai correttamente ordinato gli elementi dell’elenco.',

	'QUESTION_ANSWERS'			=> 'Risposte',
	'ANSWERS_EXPLAIN'			=> 'Le opzioni per questa colonna. Scrivi un’opzione per linea.',
	'CONFIRM_QUESTION'			=> 'Domanda',
	'CHANGES_SUBMIT'			=> 'Salva modifiche',

	'EDIT_QUESTION'				=> 'Modifica domanda',
	'QUESTIONS'					=> 'Lista orninamento domande',
	'QUESTIONS_EXPLAIN'			=> 'Puoi aggiungere e modificare domande da porre durante la registrazione. E’ necessario fornire almeno una domanda nella lingua del forum di default per usare questo plugin. Gli utenti vedranno tutte le opzioni in una colonna e dovranno ordinare la colonna in modo corretto. Ricordati inoltre di modificare le domande regolarmente.',
	'QUESTION_DELETED'			=> 'Domanda cancellata',
	'QUESTION_LANG'				=> 'Lingua',
	'QUESTION_LANG_EXPLAIN'		=> 'La lingua per la domanda e per le sue risposte',
	'QUESTION_SORT'				=> 'Ordinamento per default',
	'QUESTION_SORT_EXPLAIN'		=> 'In questa colonna tutte le risposte saranno ordinate per default.',
	
	'COLUMN_LEFT'				=> 'Colonna sinistra',
	'COLUMN_RIGHT'				=> 'Colonna destra',
	'COLUMN_NAME'				=> 'Nome colonna',
	'COLUMN_NAME_LEFT_EXPLAIN'	=> 'Come: cose che ho bisogno',
	'COLUMN_NAME_RIGHT_EXPLAIN'	=> 'Come: cose che non ho bisogno',
	
	'DEMO_QUESTION'				=> 'Cosa aggiungi per la zuppa di pomodoro',	
	'DEMO_NAME_LEFT'			=> 'In padella',
	'DEMO_NAME_RIGHT'			=> 'Buttare via',
	'DEMO_OPTION_BANANAS'		=> 'Banane',
	'DEMO_OPTION_TOMATOES'		=> 'Pomodori',
	'DEMO_OPTION_APPLES'		=> 'Mele',
	'DEMO_PREVIEW_ONLY'			=> 'Non è possibile spostare le opzioni in anteprima.',

	'QUESTION_TEXT'				=> 'Domanda',
	'QUESTION_TEXT_EXPLAIN'		=> 'Spiega in che modo le opzioni devono essere ordinati nelle colonne.',

	'SORTABLES_ERROR_MSG'		=> 'Compila tutti i campi e aggiungi almeno una opzione per entrambe le colonne.',
));

?>