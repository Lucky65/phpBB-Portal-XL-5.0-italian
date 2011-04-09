<?php
/** 
*
* acp_add_user [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @author David Lewis (Highway of Life) http://phpbbacademy.com
*
* @package acp
* @version $Id: info_acp_add_user_mod.php,v 1.1.1.1 2009/05/15 05:16:03 damysterious Exp $
* @copyright (c) 2007 Star Trek Guide Group
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
	'ACP_ACCOUNT_ADDED'			=> 'Užívateľský účet bol vytvorený. Uživateľ sa teraz môže prihlásiť s uživateľským menom a heslom, ktorý mu bol odoslaný na ním poskytnutú e-mailovú adresu.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Užívateľský účet bol vytvorený. Avšak, nastavenie fóra požaduje aby si užívateľ aktivoval svoj účet.<br />Aktivačný kľúč bol zaslaný na poskytnutú e-mailovú adresu.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Účet bol vytvorený. Avšak, nastavenia fóra vyžaduje aktiváciu účtu správcom.<br />E-mail bol zaslaný Admministrátorovy a užívateľ bude informovaný, keď jeho účet bude aktivovaný',
	'ACP_ADD_USER'				=> 'Pridať uživateľa',
	'ACP_ADD_USER_ACCOUNT'		=> 'Pridať účet užívateľa',
	'ACP_ADMIN_ACTIVATE'		=> 'E-mail bude odoslaný Administrátorovy o aktiváciu účtu, prípadne si môžete okamžite skontrolovať aktiváciu účtu nižšie v poly pre aktiváciu účtu, akonáhle je vytvorený. Užívateľ dostane e-mail obsahujúci prihlasovacie údaje k účtu.',
	'ACP_EMAIL_ACTIVATE'		=> 'Akonáhle je účet vytvorený, užívateľ dostane e-mail obsahujúci aktivačný odkaz na aktiváciu účtu.',
	'ACP_INSTANT_ACTIVATE'		=> 'Účet bude aktivovaný okamžite. Uživateľ dostane e-mail s údajmi pre prihlásenie.',
	
	'ADD_USER'					=> 'Pridať užívateľa',
	'ADD_USER_EXPLAIN'			=> 'Vytvorenie nového užívateľského účtu. Ak nastavenie aktivácie vykoná Administrátor, užívateľ sa môže prihlásiť okamžite.',
	'ADD_USER_MOD_INSTALLED'	=> 'Uživateľský MÓD verzia %s je nainštalovaný<br />Nezabudnite priradiť <em>user_add</em> administrátorské oprávnenia pre užívateľov, ktorých chcete aby mali prístup k tomuto modulu.',
	'ADD_USER_MOD_UPDATED'		=> 'Aktualizujte si Uživateľský MÓD na verziu %s',
	'ADMIN_ACTIVATE'			=> 'Aktivácia uživateľského účtu',
	
	'EDIT_USER_GROUPS'			=> '%sSem kliknite ak chcete upravit užívateľskú skupinu pre tohto užívateľa%s',
	
	'CONTINUE_EDIT_USER'		=> '%1$sSem kliknite ak chcete nastaviť profil %2$s%3$s', // e.g.: Click here to edit Joe’s profile.
	'LOG_USER_ADDED'			=> '<strong>Vytvoril nového uživateľa</strong><br />» %s',
	
	'acl_a_add_user'			=> array('lang' => 'Môže vytvárať nové užívateľské účty', 'cat' => 'user_group'),
));

?>