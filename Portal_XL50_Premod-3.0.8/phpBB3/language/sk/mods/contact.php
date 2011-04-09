<?php
/** 
*
* contact [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package	language
* @version	1.0.8 12/02/09
* @copyright(c) 2009 RMcGirr83
* @copyright (c) 2007 eviL3
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

	// teh form
	
	'CONTACT_BOT_ERROR'						=> 'Nedá sa použiť kontaktný formulár, nakoľko nastala chyba v konfigurácii. E-mail o tejto chybe bol už zaslaný administrátorovy.',
	'CONTACT_BOT_NONE'						=> 'Uživateľ %1$s sa pokúsil použiť Modifikáciu Kontaktovanie administrátora v %2$s a chcel odoslať %3$s, ale nie sú tam žiadny Administratory, ktoré by povolili %3$ss pre užívateľov.' . "\n\n" . 'Prosím, zadajte Kontaktného Robota pre fórum v Nastavení Administrátorského Panela %4$s a zadajte variant "Zakladateľ Panela"' . "\n\n" . 'Modifikácia bol vypnutá',
	'CONTACT_BOT_SUBJECT'					=> 'Chybu Modifikácie, Kontaktovanie administrátora',
	'CONTACT_BOT_USER_MESSAGE'				=> 'Uživateľ %1$s sa pokúsil použiť Modifikáciu Kontaktovanie administrátora v %2$s, ale vybraný uživateľ je nesprávne nastavený.' . "\n\n" . 'Prosím, navštívte fórum %3$s a vyberte iného užívateľa v ACP pre Kontaktovanie Administrátora.' . "\n\n" . 'Modifikácia bola vypnutá',
	'CONTACT_BOT_FORUM_MESSAGE'				=> 'Uživateľ %1$s sa pokúsil použiť Modifikáciu Kontaktovanie administrátora v %2$s, ale vybrané fórum je nesprávne nastavené.' . "\n\n" . 'Prosím, navštívte fórum %3$s alebo vyberte iné fórum v ACP pre Kontaktovanie Administrátora.' . "\n\n" . 'Modifikácia bola vypnutá',
	'CONTACT_CONFIRM'						=> 'Potvrdenie',
	'CONTACT_INSTALLED'						=> 'Modifikácia “Kontaktovanie administrátora” bola úspešne nainštalovaná.',

	'CONTACT_DISABLED'			=> 'Kontaktný formulár sa nedá použiť, nakoľko nie je povolený.',
	'CONTACT_MAIL_DISABLED'		=> 'There is an error with the configuration of the Contact Board Administration Mod.<br />The mod is set to send an email but the board configuration isn’t setup to send emails.  Please notify the board administrator or webmaster: <a href="mailto:%1$s">%1$s</a>', 
	'CONTACT_MSG_SENT'			=> 'Vaša správa bola úspešne odoslaná',
	'CONTACT_MSG_BODY_EXPLAIN'	=> '<br /><span>Použite prosím kontaktný formulár <strong><em>len</em></strong> ak neexistuje iný spôsob, ako nás kontaktovať.<br /><br /><span style="text-align:center;"><strong>Vaša ΙΡ adresa je zaznamenaná a neodôvodné zneužíie bude potrestané.</strong></span></span>',
	'CONTACT_NO_NAME'			=> 'Nezadal ste názov.',
	'CONTACT_NO_EMAIL'			=> 'Nezadal ste adresu emailu.',
	'CONTACT_NO_MSG'			=> 'Nezadal ste správu.',
	'CONTACT_NO_SUBJ'			=> 'Nezadal ste predmet.',
	'CONTACT_NO_REASON'			=> 'Nezadal ste dôvod.',
	'CONTACT_OUTDATED'			=> 'Databáza pre kontaktnú stránku nebola zatiaľ aktualizovaná. Prosím, počkajte na adminstrátora pokial ju neaktualizuje.',
	'CONTACT_REASON'			=> 'Dôvod',
	'CONTACT_TEMPLATE'			=> '<strong>Názov:</strong> %1$s' . "\n" . '<strong>Adresa Emailu:</strong> %2$s' . "\n" . '<strong>IP:</strong> %3$s' . "\n" . '<strong>Dátum:</strong> %4$s' . "\n" . '<strong>Dôvod:</strong> %5$s' . "\n" . '<strong>Predmet:</strong> %6$s' . "\n\n" . '<strong>Správa kontaktného formulára:</strong>' . "\n" . '%7$s',
	'CONTACT_TEMPLATE_NO_REASON'	=> '<strong>Názov:</strong> %1$s' . "\n" . '<strong>Adresa Emailu:</strong> %2$s' . "\n" . '<strong>IP:</strong> %3$s' . "\n" . '<strong>Dátum:</strong> %4$s' . "\n" . '<strong>Predmet:</strong> %5$s' . "\n\n" . '<strong>Správa kontaktného formulára:</strong>' . "\n" . '%6$s',
	'CONTACT_TITLE'				=> 'Kontaktovanie administrátora',
	'CONTACT_TOO_MANY'			=> 'Prekročili ste maximálny počet pokusov potvrdenia o kontakt pre túto reláciu. Prosím, skúste to znova neskôr.',
	'CONTACT_UNINSTALLED'		=> 'Modifikácia “Kontaktovanie administrátora” bola úspešne odinštalovaná.',
	'CONTACT_UPDATED'			=> 'Modifikácia “Kontaktovanie administrátora” bola úspešne aktualizovaná na verziu %s.',
	
	'CONTACT_YOUR_NAME'				=> 'Vaše meno',
	'CONTACT_YOUR_NAME_EXPLAIN'		=> 'Prosím, zadajte svoj názov aby sa dala správa stotožniť.',
	'CONTACT_YOUR_EMAIL'			=> 'Vaša emailová adresa',
	'CONTACT_YOUR_EMAIL_EXPLAIN'	=> 'Zadajte platnú e-mailovú adresu, aby sme sa mohli s vami spojiť.',
	'CONTACT_YOUR_EMAIL_CONFIRM'	=> 'Znova zadajte svoju e-mailovú adresu',
	'CONTACT_YOUR_EMAIL_CONFIRM_EXPLAIN'	=> 'Prosím, zadajte znovu svoju e-mailovú adresu.',	

	'RETURN_CONTACT'				=> '%sVrátim sa na stránku kontaktov%s',
	'URL_UNAUTHED'		=> 'Nemôžete aktualizovať záznam urls, prosím odstráňte ho alebo ho premenujte:<br /><em>%1$s</em>',
));

?>