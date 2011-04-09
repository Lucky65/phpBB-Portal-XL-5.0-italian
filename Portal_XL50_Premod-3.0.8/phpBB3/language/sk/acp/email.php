<?php
/**
*
* acp_email [Slovak]
*
* @package language
* @version $Id: email.php,v 1.16 2007/10/15 00:00:00 phpbb3.sk Exp $
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Tu môžete poslať emailovú správu všetkým užívateľom alebo užívateľom určitej skupiny.  Email bude odoslaný z adresy administrátora s kópiou všetkým príjemcom. Ak posielate mail väčšej skupine ľudí, prosím počkajte na koniec odosielania a nestopujte ho. Po úplnom odoslaní budete informovaný skriptom.',
	'ALL_USERS'						=> 'Všetci užívatelia',

	'COMPOSE'				=> 'Napísať novú',

	'EMAIL_SEND_ERROR'		=> 'Pri odosielaní správy sa vyskytla jedna alebo viac chýb. Prosím skontrolujte %schybový záznam%s pre odstránenie chýb.',
	'EMAIL_SENT'			=> 'Vaša správa bola odoslaná.',
	'EMAIL_SENT_QUEUE'		=> 'Vaša správa čaká na odoslanie.',

	'LOG_SESSION'			=> 'Zoznam mailových správ v chybovom zázname',

	'SEND_IMMEDIATELY'		=> 'Poslať hneď',
	'SEND_TO_GROUP'			=> 'Poslať skupine',
	'SEND_TO_USERS'			=> 'Poslať užívateľom',
	'SEND_TO_USERS_EXPLAIN'	=> 'Vložte mená, ktoré nahradia skupinu vyššie. Každé užívateľské meno vlož na samostatný riadok.',

	'MAIL_HIGH_PRIORITY'	=> 'Vysoká',
	'MAIL_LOW_PRIORITY'		=> 'Nízka',
	'MAIL_NORMAL_PRIORITY'	=> 'Normálna',
	'MAIL_PRIORITY'			=> 'Priorita mailu',
	'MASS_MESSAGE'			=> 'Vaša správa',
	'MASS_MESSAGE_EXPLAIN'	=> 'Prosím skontrolujte, či ste vložili čistý text. Diakritika bude pri odosielaní odstránená.',

	'NO_EMAIL_MESSAGE'		=> 'Musíte vložiť vašu správu.',
	'NO_EMAIL_SUBJECT'		=> 'Musíte napísať predmet tejto správy.',
));

?>