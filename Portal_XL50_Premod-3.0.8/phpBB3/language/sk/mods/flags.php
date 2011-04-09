<?php
/** 
*
* flags [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package language
* @version $Id: flags.php,v 1.003 2007/05/20 12:25:00 nedka Exp $
* @copyright (c) 2007 nedka (Nguyen Dang Khoa) 
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

// Country Flags
$lang = array_merge($lang, array(
	'ACP_FLAGS_EXPLAIN'		=> 'Pomocou tohto formulára môžete pridať, upraviť, zobraziť a odstrániť vlajku krajiny. Každá krajina musí mať svoj názov a kód krajiny.',
	'ADD_FLAG'				=> 'Pridať novú vlajku',

	'FLAG_ADDED'			=> 'Štátna Vlajka, bola úspešne pridaná.',
	'FLAG_CODE'				=> 'Kód krajiny',
	'FLAG_COUNTRY'			=> 'Názov štátu',
	'FLAG_IMAGE'			=> 'Obrázky štátnych vlajok',
	'FLAG_IMAGE_EXPLAIN'	=> 'Použite stanovené obrázky vlajok. Cesta je relatívna v roote phpBB, napríklad <samp>images/flags</samp>',
	'FLAG_REMOVED'			=> 'Vlajka, bola úspešne vymazaná.',
	'FLAG_UPDATED'			=> 'Vlajka, bola úspešne aktualizovaná.',

	'MUST_SELECT_FLAG'		=> 'Musíte si vybrať krajinu vlajky.',

	'NO_FLAG'				=> 'Nie je priradená vlajka krajiny',
	'NO_FLAG_CODE'			=> 'Nemáte zadaný kód krajiny pre vlajku.',
	'NO_FLAG_COUNTRY'		=> 'Nemáte zadaný názov krajiny pre vlajku.',
	'NO_UPDATE_FLAGS'		=> 'Vlajka, bola úspešne zmazaná. Avšak uživateľské účty alebo skupiny používajúce túto vlajky neboli aktualizované. Budete musieť na týchto účtoch manuálne obnoviť vlajku krajiny.',

	'TOTAL_USERS'			=> 'Celkom užívateľov',

	'USER_FLAG_UPDATED'		=> 'Užívateľ aktualizoval vlajku krajiny.',
));

?>