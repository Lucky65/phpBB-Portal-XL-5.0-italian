<?php
/**
*
* groups [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package language
* @version $Id: $
* @copyright (c) 2007 DualFusion - 2008 ..::Frans::..
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
	'ACP_WELCOME_PM'			=> 'Prvé Uvítanie ',
	'ACP_WPM_SETTINGS'			=> 'Nastavenia Uvítania Súkromá Správa',

	'LOG_WPM_SETTINGS_UPDATED'	=> '<strong>Zmena Uvítania v Nastaveniach Súkromých Správach</strong>',

	'WPM_ALREADY_INSTALLED'	=> 'Mód Uvítania je už nainštalovaný v databáze!',
	'WPM_BOARD_CONTACT'		=> 'Panel Kontakt',
	'WPM_BOARD_EMAIL'		=> 'Panel Email',
	'WPM_BOARD_SIG'			=> 'Podpis',
	'WPM_CPF_VARS'			=> 'Voliteľný profil. Pole premenných',
	'WPM_ENABLE'			=> 'Povolím Uvitanie Sukr.Správov',
	'WPM_ENABLE_EXPLAIN'	=> 'Môžete zapnúť / vypnúť tento mod v každom okamihu.',
	'WPM_ERROR_EMPTY'		=> 'Pole zadania <strong>%s</strong> nemôže ostať prázdne',
	'WPM_ERROR_USER'		=> 'Tento uživateľký názov je neznámy <strong>%s</strong> v zadanom poli',
	'WPM_ERROR_DB'			=> 'Pri aktualizícii nastal problem v <strong>%s</strong>',
	'WPM_INSTALLED'			=> 'Uvítanie v Súkromých Správach bolo úspešne nainštalovaní do databázy!',
	'WPM_NOTIFY'			=> 'Upozornenie',
	'WPM_NOTIFY_EXPLAIN'	=> 'Informovať užívateľov, že je tu nové rozhranie Súkromných Správ, ak si myslíte, že si to užívatelia nemuseli všimnúť.',
	'WPM_PREDEFINED_VARS'	=> 'Preddefinované premenné',
	'WPM_SENDER'			=> 'Meno odosielateľa',
	'WPM_SITE_NAME'			=> 'Názov stránky',
	'WPM_SITE_DESC'			=> 'Popis webu',
	'WPM_SUBJECT_EXPLAIN'	=> 'Názov správy ktorú dostane užívateľ.',
	'WPM_TITLE'				=> 'Nastavenie Súkromnej Správy pri Prvom prihlásení',
	'WPM_TITLE_EXPLAIN'		=> 'Umožňuje vám vytvoriť vlastné súkromné správy. Táto správa bude zaslaná všetkým novým užívateľom, pri prvom prihlásení.',
	'WPM_UPDATED'			=> 'Zmena Uvítania  v Nastaveniach Súkromých Správach',
	'WPM_USERNAME'			=> 'Uživateľský názov',
	'WPM_USERNAME_EXPLAIN'	=> 'Názov užívateľa, ktorému "odošlete" správu.',
	'WPM_USER_ID'			=> 'ID Uživateľa',
	'WPM_USER_IP'			=> 'IP Uživateľa',
	'WPM_USER_EMAIL'		=> 'Email Uživateľa',
	'WPM_USER_REGDATE'		=> 'Dátum Registrácie',
	'WPM_USER_LANG_EN'		=> 'Jazyk (ENGLISH)',
	'WPM_USER_LANG_LOCAL'	=> 'Jazyk (LOCAL)',
	'WPM_USER_TZ'			=> 'Časové pásmo',
	'WPM_VAR_NAME'			=> 'Názov',
	'WPM_VAR_VAR'			=> 'Variabilné',
	'WPM_VAR_EXAMPLE'		=> 'Príklad',
));
?>