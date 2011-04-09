<?php
/** 
*
* acp_add_user [Dutch]
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
	'ACP_ACCOUNT_ADDED'				=> 'Het gebruikersaccount is aangemaakt. De gebruiker kan nu inloggen met zijn gebruikersnaam en wachtwoord.',
	'ACP_ACCOUNT_INACTIVE'			=> 'Het gebruikersaccount is aangemaakt, desondanks verplichten de foruminstellingen dat het gebruikersaccount geactiveerd dient te worden.<br />Een activatiecode is opgestuurd naar het opgegeven e-mailadres van de gebruiker.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'	=> 'Het gebruikersaccount is aangemaakt, desondanks verplichten de foruminstellingen dat het gebruikersaccount door een beheerder geactiveerd dient te worden.<br />Er is een e-mailbericht naar de beheerders gestuurd met informatie hoe ze jouw account kunnen activeren.',
	'ACP_ADD_USER'			=> 'Gebruiker toevoegen',
	'ACP_ADD_USER_ACCOUNT'			=> 'Gebruiker toevoegen',
	'ACP_ADMIN_ACTIVATE'			=> 'Er zal een e-mailbericht naar de beheerders gestuurd worden, u kunt ook het vakje hieronder aanvinken zodat de account meteen geactiveerd word zodra deze aangemaakt is. De gebruiker zal een e-mailbericht krijgen met inlog informatie.',
	'ACP_EMAIL_ACTIVATE'			=> 'Zodra de gebruikersaccount is aangemaakt zal de gebruiker een e-mailbericht krijgen met een activatiecode.',
	'ACP_INSTANT_ACTIVATE'			=> 'De gebruikersaccount zal meteen geactiveerd worden, de gebruiker zal een e-mailbericht krijgen met inlog informatie.',
	
	'ADD_USER'					=> 'Gebruiker toevoegen',
	'ADD_USER_EXPLAIN'			=> 'Maak een nieuwe gebruikersaccount aan. Als de activatieinstellingen ingesteld staan zodat de beheerder de account dient te activeren, dan zal de optie meteen activeren beschikbaar zijn.',
	'ADD_USER_MOD_INSTALLED'	=> 'Add User MOD versie %s ge&iuml;nstalleerd<br />Wees er zeker van om de <em>user_add</em> beheerderspermissies toe te wijzen aan de gebruikers waarvan je wilt dat ze deze module kunnen zien.',
	'ADD_USER_MOD_UPDATED'		=> 'Add User MOD bijgewerkt naar versie %s',
	'ADMIN_ACTIVATE'			=> 'Activeer gebruikersaccount',
	
	'EDIT_USER_GROUPS'	=> '%sKlik hier om de gebruikersgroepen aan te passen voor deze gebruiker%s',
	
	'CONTINUE_EDIT_USER'	=> '%1$sKlik hier om %2$s&acute;s profiel te beheren%3$s', // e.g.: Click here to edit Joe's profile.
	'LOG_USER_ADDED'		=> '<strong>Nieuwe gebruiker aangemaakt</strong><br /> %s',
	
	'acl_a_add_user'=> array('lang' => 'Kan nieuwe gebruikersaccounts aanmaken', 'cat' => 'user_group'),
));

?>