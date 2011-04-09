<?php
/**
* //SupportTicket System
* ticket [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package language
* @version $Id: ticket.php 1 2008-03-19 14:31:04Z nickvergessen $
* @copyright (c) 2008 Mahony; 2008 Mahony
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
// ’ » „ “ — …
//
//
$lang = array_merge($lang, array(
	'STS_SUPPORT_TICKET'			=> 'Oznam pre Podporu Systému',

	'STS_ERRMESSAGE'				=> 'Ak ste zadal titul pre váš príspevok. Prosím stačte tlačitko Späť kvôli korekcii zadania!',
	'STS_PHPBBVERSION'				=> 'Verzia vášho phpBB:',
	'STS_PHPBBTYPE'					=> 'Typ vášho phpBB:',
	'STS_STANDARD'					=> 'Štandartné phpBB (nazývané Vanilla (phpBB2) alebo Olympus (phpBB3))',
	'STS_PREMOD'					=> 'Premodifikované phpBB',
	'STS_ANDDIST'					=> 'iná Distribúcia phpBB',
	'STS_MODS'						=> 'Máte MÓDY (modifikácie) nainštalované vo vašom fóre?',
	'STS_MODS_SHORT'				=> 'Nainštalovaný MÓD:',
	'STS_YES'						=> 'Áno',
	'STS_NO'						=> 'Nie',
	'STS_KNOWLEDGE'					=> 'Váš poznatok:',
	'STS_BEGINNER'					=> 'Začiatočník',

	'STS_BASICKNOW'					=> 'Základné Poznatky',
	'STS_EXTENDED'					=> 'Rozšírené Poznatky',
	'STS_PROFI'						=> 'Profesionálne',
	'STS_BEFOREERR'					=> 'Čo ste robil pred tým ako nastal problém?',

	'STS_BOARDLINK'					=> 'Link Tabuľky:',
	'STS_SELFSOLUTION'				=> 'Už ste sa pokúšal vyriešiť problém?',
	'STS_PHPVER'					=> 'Verzia PHP:',
	'STS_SQLVER'					=> 'Verzia MySQL:',
	'STS_HEAD_MSG'					=> 'Popis a Správa',

	'STS_OPTIONAL'					=> 'nie je požadované',
	'STS_HEAD'						=> 'Tento asistent pomáha, prívržencom, aktívne pomôcť, ostatným zo znalosťov veci a informáciami, ktorými ich môže oboznámiť . Prosím vyplnte poľia ktoré sú v zadaní, len s týmito údajmi vám môžeme rýchlo a účinne pomôcť!',
));
//SupportTicket System

?>