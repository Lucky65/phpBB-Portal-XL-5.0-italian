<?php
/** 
*
* contact [Italian]
*
* @package	language
* @version	1.0.9 2009-12-25
* @copyright(c) 2009 RMcGirr83
* @copyright (c) 2007 eviL3
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/28
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
	
	'CONTACT_BOT_ERROR'						=> 'Non puoi usare il modulo contatti perchè risulta un errore nella configurazione.  Una email è stata inviata all’amministratore.',
	'CONTACT_BOT_NONE'						=> 'L’utente %1$s ha provato ad usare il modulo contatti %2$s per inviare un %3$s, ma non ci sono amministratori che permettono %3$ss agli utenti.' . "\n\n" . 'Aggiungi la tua configurazione in ACP per il forum %4$s e scegli l’opzione “Amministratore forum”' . "\n\n" . 'Il mod non è attivo',
	'CONTACT_BOT_SUBJECT'					=> 'Contatto amministratore forum',
	'CONTACT_BOT_USER_MESSAGE'				=> 'L’utente %1$s ha provato ad usare il modulo di contatto amministratore forum su %2$s, ma l’utente selezionato nella configurazione non è corretto.' . "\n\n" . 'Visita il forum %3$s e scegli un utente differente in ACP per il modulo contatti amministratore forum.' . "\n\n" . 'Il mod non è attivo',
	'CONTACT_BOT_FORUM_MESSAGE'				=> 'L’utente %1$s ha provato ad usare il modulo di contatto amministratore forum su %2$s, ma l’utente selezionato nella configurazione non è corretto.' . "\n\n" . 'Visita il forum %3$s e scegli un utente differente in ACP per il modulo contatti amministratore forum.' . "\n\n" . 'Il mod non è attivo',
	'CONTACT_CONFIRM'						=> 'Conferma',
	'CONTACT_INSTALLED'						=> 'Il mod “contatti amministrazione forum” è stato installato con successo.',

	'CONTACT_DISABLED'			=> 'Non puoi usare il modulo contatti perchè al momento è disattivato.',
	'CONTACT_MAIL_DISABLED'		=> 'C’è un errore con la configurazione nella MOD Contatto Amministrazione Forum.<br />La MOD è impostata per inviare una e-mail, ma la configurazione del forum non è impostata per inviare le email. Si prega di avvisare l’amministratore o il webmaster: <a href="mailto:%1$s">%1$s</a>', 	
	'CONTACT_MSG_SENT'			=> 'Il tuo messaggio è stato inviato con successo',
	'CONTACT_MSG_BODY_EXPLAIN'	=> '<br /><span>Usa il modulo contatti <strong><em>solo</em></strong> se non hai trovato altro modo per contattarci.<br /><br /><span style="text-align:center;"><strong>Il tuo indirizzo ΙΡ sarà registrato ed ogni abuso punito.</strong></span></span>',
	'CONTACT_NO_NAME'			=> 'Non hai inserito un nome.',
	'CONTACT_NO_EMAIL'			=> 'Non hai inserito un indirizzo email.',
	'CONTACT_NO_MSG'			=> 'Non hai inserito un messaggio.',
	'CONTACT_NO_SUBJ'			=> 'Non hai inserito un oggetto.',
	'CONTACT_NO_REASON'			=> 'Non hai inserito una motivazione.',
	'CONTACT_OUTDATED'			=> 'Il database per la pagina contatti non è aggiornato. Attendi che l’amministratore faccia l’aggiornamento.',
	'CONTACT_REASON'			=> 'Motivazione',
	'CONTACT_TEMPLATE'			=> '<strong>Nome:</strong> %1$s' . "\n" . '<strong>Indirizzo email:</strong> %2$s' . "\n" . '<strong>IP:</strong> %3$s' . "\n" . '<strong>Data:</strong> %4$s' . "\n" . '<strong>Motivazione:</strong> %5$s' . "\n" . '<strong>Oggetto:</strong> %6$s' . "\n\n" . '<strong>Ha inviato il seguente messaggio nel modulo contatti:</strong>' . "\n" . '%7$s',
	'CONTACT_TEMPLATE_NO_REASON'	=> '<strong>Nome:</strong> %1$s' . "\n" . '<strong>Indirizzo email:</strong> %2$s' . "\n" . '<strong>IP:</strong> %3$s' . "\n" . '<strong>Data:</strong> %4$s' . "\n" . '<strong>Oggetto:</strong> %5$s' . "\n\n" . '<strong>Ha inviato il seguente messaggio nel modulo contatti:</strong>' . "\n" . '%6$s',
	'CONTACT_TITLE'				=> 'Contatto amministratore forum',
	'CONTACT_TOO_MANY'			=> 'Hai superato il numero massimo di possibilità di contatto per questa sessione. Prova più tardi.',
	'CONTACT_UNINSTALLED'		=> 'Il mod “contatti amministrazione forum” è stato disinstallato con successo.',
	'CONTACT_UPDATED'			=> 'Il mod “contatti amministrazione forum” è stato aggiornato alla versione %s con successo.',
	
	'CONTACT_YOUR_NAME'				=> 'Tuo nome',
	'CONTACT_YOUR_NAME_EXPLAIN'		=> 'Aggiungi il tuo nome completo.',
	'CONTACT_YOUR_EMAIL'			=> 'Tuo indirizzo email',
	'CONTACT_YOUR_EMAIL_EXPLAIN'	=> 'Aggiungi il tuo indirizzo email, ci servirà per contattarti.',
	'CONTACT_YOUR_EMAIL_CONFIRM'	=> 'Conferma il tuo indirizzo email',
	'CONTACT_YOUR_EMAIL_CONFIRM_EXPLAIN'	=> 'Conferma il tuo indirizzo email, eviterà errori!',	

	'RETURN_CONTACT'				=> '%sRitorna alla pagina contatti%s',
	'URL_UNAUTHED'		=> 'Non puoi scrivere urls, elimina o rinomina:<br /><em>%1$s</em>',
));

?>