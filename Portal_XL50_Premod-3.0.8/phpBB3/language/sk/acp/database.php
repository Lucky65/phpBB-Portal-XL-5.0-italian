<?php
/**
*
* acp_database [Slovak]
*
* @package language
* @version $Id: database.php,v 1.25 2010/01/05 23:00:00 phpbb3.sk Exp $
* @copyright (c) 2007 phpBB Group
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Tu môžete zálohovať všetky dáta spojene s vašim phpBB fórom. Vytvorený súbor môžete uložiť do priečinku <samp>store/</samp> alebo ho rovno stiahnuť. Súbory môžete komprimovať do rôznych formátov - záleží to na konfigurácií vášho serveru.',
	'ACP_RESTORE_EXPLAIN'	=> 'Tu môžete obnoviť všetky tabuľky vášho phpBB fóra zo súboru zálohy. Ak to váš server podporuje, môžete použiť komprimovaný (gzip alebo bzip2)textový súbor - bude automaticky dekomprimovaný. <strong>POZOR</strong> Týmto krokom prepíšete všetky existujúce dáta. Obnova môže trvať dlhšiu dobu - prosím neopúšťajte túto stránku, pokiaľ nebude hotová. Záloha je uložená v adresári <samp>store/</samp> a odporúča sa, aby bola vytvorená phpBB zálohovacím systémom. Použitie záloh, ktoré boli vytvorené iným spôsobom, nemusia fungovať.',

	'BACKUP_DELETE'		=> 'Súbor zálohy bol úspešne odstránený.',
	'BACKUP_INVALID'	=> 'Vybraný súbor je nesprávny.',
	'BACKUP_OPTIONS'	=> 'Možnosti zálohy',
	'BACKUP_SUCCESS'	=> 'Súbor zálohy bol úspešne vytvorený.',
	'BACKUP_TYPE'		=> 'Typ zálohy',

	'DATABASE'			=> 'Nástroje databázy',
	'DATA_ONLY'			=> 'Iba dáta',
	'DELETE_BACKUP'		=> 'Odstrániť zálohu',
	'DELETE_SELECTED_BACKUP'	=> 'Naozaj chcete trvalo odstrániť vybratú zálohu?',
	'DESELECT_ALL'		=> 'Zrušiť výber',
	'DOWNLOAD_BACKUP'	=> 'Stiahnuť zálohu',

	'FILE_TYPE'			=> 'Typ súboru',
	'FILE_WRITE_FAIL'	=> 'Nemožno uložiť súbor v ukladacom adresári',
	'FULL_BACKUP'		=> 'Plná',

	'RESTORE_FAILURE'		=> 'Súbor so zálohou môže byť poškodený.',
	'RESTORE_OPTIONS'		=> 'Možnosti obnovy',
	'RESTORE_SUCCESS'		=> 'Databáza bola úspešne obnovená.<br /><br />Vaše fórum by malo byť v stave, v ktorom bola táto záloha vytvorená.',

	'SELECT_ALL'			=> 'Označiť všetko',
	'SELECT_FILE'			=> 'Vybrať súbor',
	'START_BACKUP'			=> 'Spustiť zálohovanie',
	'START_RESTORE'			=> 'Spustiť obnovu',
	'STORE_AND_DOWNLOAD'	=> 'Uložiť a stiahnuť',
	'STORE_LOCAL'			=> 'Uložiť súbor lokálne',
	'STRUCTURE_ONLY'		=> 'Iba štruktúra',

	'TABLE_SELECT'		=> 'Výber tabuľky',
	'TABLE_SELECT_ERROR'=> 'Musíte vybrať aspoň jednu tabuľku.',
));

?>