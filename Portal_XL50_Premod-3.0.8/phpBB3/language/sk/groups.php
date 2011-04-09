<?php
/**
*
* groups [Slovak]
*
* @package language
* @version $Id: groups.php,v 1.22  2007/10/15 00:00:00 phpbb3.sk Exp $
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

$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'	=> 'Vybraná skupina je už vašou predvolenou skupinou',
	'ALREADY_IN_GROUP'		=> 'Už ste členom tejto skupiny',
	'ALREADY_IN_GROUP_PENDING'	=> 'Už ste si zažiadali o členstvo v tejto skupine.',
  'CANNOT_JOIN_GROUP'			=> 'Nemôžete sa pripojiť do tejto skupiny. Môžete sa pripojiť iba do otvorených skupín.',
	'CANNOT_RESIGN_GROUP'		=> 'Nemôžete opustiť túto skupinu. Môžete opustiť iba otvorenú skupinu.',
	'CHANGED_DEFAULT_GROUP'	=> 'Predvolená skupina bola úspešne zmenená',

	'GROUP_AVATAR'			=> 'Avatar skupiny',
	'GROUP_CHANGE_DEFAULT'	=> 'Ste si istý, že chcete zmeniť vaše predvolené členstvo na skupinu "%s"?',
	'GROUP_CLOSED'			=> 'Uzavretá',
	'GROUP_DESC'			=> 'Popis skupiny',
	'GROUP_HIDDEN'			=> 'Skrytá',
	'GROUP_INFORMATION'		=> 'Podrobnosti o skupine',
	'GROUP_IS_CLOSED'					=> 'Toto je uzavretá skupina, noví užívatelia do nej môžu vstúpiť iba na pozvanie od moderátora skupiny.',
	'GROUP_IS_FREE'						=> 'Toto je otvorená skupina, všetci noví uživatelia sú vítaní.',
	'GROUP_IS_HIDDEN'					=> 'Toto je skrytá skupina, iba členovia môžu vidieť dalších členov tejto skupiny.',
	'GROUP_IS_OPEN'						=> 'Toto je otvorená skupina, noví uživatelia môžu požiadať o vstup do nej.',
	'GROUP_IS_SPECIAL'					=> 'Toto je zvláštna skupina. Zvláštne skupiny sú spravováné administrátormi fóra.',
	'GROUP_JOIN'			=> 'Vstúpiť do skupiny',
	'GROUP_JOIN_CONFIRM'	=> 'Naozaj chcete vstúpiť do tejto skupiny?',
	'GROUP_JOIN_PENDING'	=> 'Požiadať o vstup do tejto skupiny',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'Naozaj chcete požiadať o členstvo v tejto skupine?',
	'GROUP_JOINED'			=> 'Úspešne ste vstúpil/a do skupiny',
	'GROUP_JOINED_PENDING'	=> 'Úspešne ste požiadal/a o členstvo v skupine. Počkajte na overenie žiadosti moderátorom skupiny.',
	'GROUP_LIST'			=> 'Kontrolovať užívateľov',
	'GROUP_MEMBERS'			=> 'Členovia skupiny',
	'GROUP_NAME'			=> 'Názov skupiny',
	'GROUP_OPEN'			=> 'Otvorená',
	'GROUP_RANK'			=> 'Hodnosť skupiny',
	'GROUP_RESIGN_MEMBERSHIP'		=> 'Odísť zo skupiny',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Naozaj chcete odísť z vybranej skupiny?',
	'GROUP_RESIGN_PENDING'			=> 'Zrušiť žiadosť o vstup',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'Naozaj chcete zrušiť vašu žiadosť o vstup do tejto skupiny?',
	'GROUP_RESIGNED_MEMBERSHIP'		=> 'Boli ste úspešne odstránený z vybranej skupiny',
	'GROUP_RESIGNED_PENDING'		=> 'Vaša žiadosť bola úspešne zrušená',
	'GROUP_TYPE'			=> 'Druh skupiny',
	'GROUP_UNDISCLOSED'		=> 'Skrytá skupina',
	'FORUM_UNDISCLOSED'					=> 'Moderovať skryté fórum(fóra)',

	'LOGIN_EXPLAIN_GROUP'	=> 'Musíte sa prihlásiť pre zobrazenie podrobností o skupine',

	'NO_LEADERS'			=> 'Nie ste moderátorom tejto skupiny',
	'NOT_LEADER_OF_GROUP'	=> 'K tejto operácií nemáte oprávnenie, pretože nie ste moderátorom tejto skupiny.',
	'NOT_MEMBER_OF_GROUP'	=> 'K tejto operácií nemáte oprávnenie, pretože nie ste členom tejto skupiny.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Nemôžete odísť z vašej skupiny.',

	'PRIMARY_GROUP'		=> 'Hlavná skupina',

	'REMOVE_SELECTED'		=> 'Odstrániť vybrané',

	'USER_GROUP_CHANGE'			=> 'Zo skupiny "%1$s" do "%2$s"',
	'USER_GROUP_DEMOTE'			=> 'Odobrať moderátorstvo',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Naozaj sa chcete vzdať funkcie moderátora tejto skupiny?',
	'USER_GROUP_DEMOTED'		=> 'Vedenie skupiny bolo úspešne odobraté.',
));

?>