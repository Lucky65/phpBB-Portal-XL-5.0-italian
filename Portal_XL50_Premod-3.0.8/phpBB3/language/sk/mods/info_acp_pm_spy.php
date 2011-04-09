<?php
/**
*
* acp [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package disclaimer
* @version 1.0.0
* @copyright (c) 2008 david63
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_PM_SPY'			=> 'Záznamnik Súkromných Správ',
	'AUTHOR_IP'				=> 'IP Autora',
	'DATE'					=> 'Dátum',
	'DELETE_PMS'			=> 'Vymazať Správy',
	'NO_PM_SELECTED'		=> 'Nebola označená žiadna správa, nič som nevymazal',
	'PM_BOX'				=> 'Kde je',
	'PM_SPY_READ'			=> 'Zoznam Súkromných Správ',
	'PM_SPY_READ_EXPLAIN'	=> 'Tu je zoznam všetkých súkromných správ z tabuľky Súkromných Správ.',
	'TO'					=> 'Komu',
	'TOTAL_USERS'			=> 'Celkom uživateľov',
	'PM_COUNT'				=> 'Počet správ',

	'INSTALL_NOT_DELETED'	=> 'Inštalačný súbor pre tento mod nebol vymazaný',

	'PM_HOLDBOX'			=> 'Držaný',	
	'PM_INBOX'				=> 'Je v Schránka',
	'PM_NOBOX'				=> 'Nie je v Schránke',
	'PM_OUTBOX'				=> 'Je v odoslaní',
	'PM_SAVED'				=> 'Uložil',
	'PM_SENTBOX'			=> 'Odoslal',

	'SORT_FROM'				=> 'Od',
	'SORT_TO'				=> 'Komu',
	'SORT_BCC'				=> 'BCC',
	'SORT_PM_BOX'			=> 'Kde je',
	
	'LOG_PM_SPY'			=> '<strong>Vymazané Súkromné Správy zaznamenané v Súkromných Správach</strong><br />',
));

// Install
$lang = array_merge($lang, array(
	'NO_FOUNDER'				=> 'Nie ste oprávnení nainštalovať tento Mód - musíte byt oprávnený zakladateľ.',
	'INSTALL_PM_SPY'			=> 'Inštalácia Módu zoznam Súkromných Správ',
	'COMPLETE'					=> 'Inštalácia je dokončená ...',
));

?>