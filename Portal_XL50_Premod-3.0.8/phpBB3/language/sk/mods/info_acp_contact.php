<?php

/**
*
* @package - Contact Board admin [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
* @version $Id: info_acp_contact.php 1.0.1 2009-12-01 RMcGirr83 $
* @copyright (c) 2009 RMcGirr83 http://rmcgirr83.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
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
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, array(

	// ACP entries
	'LOG_CONTACT_CONFIG_UPDATE'		=> '<strong>Aktualizoval konfiguračné nastavenia Kontaktovanie Administrátora</strong>',
	
	// General config options
	// Only needed to remove module from previous version installs
	'ACP_CONTACT_ADMIN_SETTINGS'	=> 'Kontaktovanie Administrátora',	
	
	'ACP_CONTACT_SETTINGS_EXPLAIN'	=> 'Toto je konfiguračná stránka pre "Kontaktovanie Administrátora" MOD RMcGirr83 pôvodným prispievateľom eviL&lt;3.',

	'ACP_CONTACT_CONFIG'			=> 'Nastavenie Stránky Kontaktu',
	'ACP_CAT_CONTACT'				=> 'Kontaktovanie Administrátora',	
	'CONTACT_CONFIG_SAVED'			=> 'Nastavenie Kontaktovanie Administrátora bolo úspešne aktualizované',
	'CONTACT_VERSION'				=> 'Verzia:',
	'CONTACT_ENABLE'				=> 'Aktivujem MÓD Kontaktovanie Administrátora',
	'CONTACT_ENABLE_EXPLAIN'		=> 'Povolím alebo zakážem prevádzku tohoto módu.',

	'CONTACT_ACP_CONFIRM'				=> 'Povolím vizuálne potvrdenie',
	'CONTACT_ACP_CONFIRM_EXPLAIN'		=> 'Ak aktivujete túto možnosť, uživatelia budú musieť zadať vizuálne potvrdenie pre umožnenie odoslania správy.<br />Cieľom tohoto zadania je zabrániť automizovanému odoslania správ. Táto vlastnosť je jedine pre stránku kontaktov, nemá vplyv na iné nastavenia vizuálneho potvrdenia.',
	'CONTACT_ATTACHMENTS'				=> 'Povolím prílohy',
	'CONTACT_ATTACHMENTS_EXPLAIN'		=> 'V príspevku fóra a súkromnej správy budú môcť uživatelia pridať aj prílohu.<br /> Ostatné zadania ostanú nedotknuté, teda rovnaké ako je základná konfigurácia.<br /><span style="color:red;">Neplatí pre kontakt cez "Email".</span>',
	'CONTACT_BBCODES'					=> 'Povolím BBcode',
	'CONTACT_BBCODES_EXPLAIN'			=> 'Uživatelia budú môcť použit aj bbcode.<br /><span style="color:red;">Neplatí pre kontakt cez "Email".</span>',
	'CONTACT_CONFIRM_GUESTS'			=> 'Vizuálne potvrdenie pre hostí',
	'CONTACT_CONFIRM_GUESTS_EXPLAIN'	=> 'Ak je táto možnosť povolená, vizuálne potvrdenie sa zobrazí iba hosťom (ak budú povolený).',
	'CONTACT_ENABLE'					=> 'Povolím kontaktnú stránku',
	'CONTACT_ENABLE_EXPLAIN'			=> 'Ak zadanie nie je povolené, kontaktná stránka ukáže správu pri navšteve stránky ale odkaz zadania v záhlavý stránky sa nezobrazí.',	
	'CONTACT_FOUNDER'					=> 'Kontaktovať len Zakladateľa',
	'CONTACT_FOUNDER_EXPLAIN'			=> 'Ak je aktivované len zadanie, Zakladateľ Fóra dostane Email alebo Súromnú Správu len on.',
	'CONTACT_GENERAL_SETTINGS'			=> 'Všeobecné nastavenie stránky kontaktu',
	'CONTACT_MAX_ATTEMPTS'				=> 'Maximálne pokusy potvrdenia',
	'CONTACT_MAX_ATTEMPTS_EXPLAIN'		=> 'Koľkokrát môže užívateľ zadať pre potvrdenie správy obrázok?<br />Zadaním 0 je neobmedzene.',
	'CONTACT_METHOD'					=> 'Spôsob kontaktu',
	'CONTACT_METHOD_EXPLAIN'			=> 'Ako chcete, aby užívatelia mohli nadviazať kontakt.<br /><span style="color:red;">Ak je nastavené na "Email", potom prílohy, BBCode a smajlíci sa nemôžu použiť.</span>',
	'CONTACT_REASONS'					=> 'Dôvod kontaktu',
	'CONTACT_REASONS_EXPLAIN'			=> 'Zadajte dôvody pre kontaktovanie, každý zvlášť do nového riadku.<br />Ak nechcete použiť toto zadanie, ponechajte toto pole prázdne.',
	'CONTACT_SMILIES'					=> 'Povolím smajle',
	'CONTACT_SMILIES_EXPLAIN'			=> 'Ak je zadanie povolené uživateľ bude môcť použiť aj smajlíky.<br /><span style="color:red;">Neplatí pre kontakt cez "Email".</span>',
	'CONTACT_URLS'						=> 'Povolím URL',
	'CONTACT_URLS_EXPLAIN'				=> 'Ak je povolené BBCode tak sa budú môct použiť aj adresy URL.<br /><span style="color:red;">Neplatí pre kontakt cez "Email".</span>',
	// Bot config options
	'CONTACT_BOT_FORUM'				=> 'Odoslanie kontaktu robotom do fóra',
	'CONTACT_BOT_FORUM_EXPLAIN'		=> 'Vyberte fórum, ktoré by mal robot použiť ako kontaktné miesto, ak niekto vykoná zadaný spôsob kontaktu "Cielové Fórum”.',
	'CONTACT_BOT_POSTER'			=> 'Robot Odošle',
	'CONTACT_BOT_POSTER_EXPLAIN'	=> 'Pri nastavení Súkromných Správ a príspevkov, pre kontakt robot použije základ hore uvedeného nastavenia.  Ak "Nie sú" tieto nastavenia zadané potom robot nepoužije odoslanie. Príspevky a Súkromné Správy budú zverejnené na základe údajov uvedených v tomto kontaktnom formuláry.',
	'CONTACT_BOT_USER'				=> 'Kontaktovanie uživateľa',
	'CONTACT_BOT_USER_EXPLAIN'		=> 'Vyberte užívateľa, ktorému bude správa zverejnená v prípade, že spôsob kontaktu je nastavený na "Súkromná správa" alebo "Odoslanie do Fóra”.',
	'CONTACT_USERNAME_CHK'			=> 'Check Username',
	'CONTACT_USERNAME_CHK_EXPLAIN'	=> 'If set yes, the users name that is entered will be checked against those in the database.  If a similar name is found the user will be presented with an error and asked to input a different user name.',
	'CONTACT_EMAIL_CHK'				=> 'Check Email',
	'CONTACT_EMAIL_CHK_EXPLAIN'		=> 'If set yes, the users email will be checked against those in the database.  If a similar email is found the user will be presented with an error and asked to input a different email address.',

	// Contact methods
	'CONTACT_METHOD_EMAIL'			=> 'Email',
	'CONTACT_METHOD_PM'				=> 'Súkromná správa',
	'CONTACT_METHOD_POST'			=> 'Odoslať do Fóra',
	
	// Contact posters...user bot
	'CONTACT_POST_NEITHER'			=> 'Nikomu',
	'CONTACT_POST_GUEST'			=> 'Len Hosťom',
	'CONTACT_POST_ALL'				=> 'Každému',		
	
	// UMIL stuff
	'ACP_CONTACT_TITLE'				=> 'Kontaktovanie Administrátora',
	'ACP_CONTACT_TITLE_EXPLAIN'		=> 'Oblasť zadania pre užívateľov a hosťov na kontakt Administrátora',
	'CONTACT_UPDATED'				=> 'Položky databázy boli aktualizované',
	'CONTACT_INSTALLED'				=> 'Položky databázy boli nainštalované',	
	
	// Log entries
	'LOG_CONFIG_CONTACT_ADMIN'		=> '<strong>Altered Contact Board Administration mod page settings</strong>',
	'LOG_CONTACT_BOT_INVALID'		=> '<strong>The Contact Board Administration mod bot has an invalid user id selected:</strong><br />User ID %1$s',
	'LOG_CONTACT_FORUM_INVALID'		=> '<strong>The Contact Board Administration mod forum has an invalid forum selected:</strong><br />Forum ID %1$s',
	'LOG_CONTACT_NONE'				=> '<strong>No Administrators are allowing users to contact them via %1$s in the Contact Board Administration mod</strong>',	
	
));

?>