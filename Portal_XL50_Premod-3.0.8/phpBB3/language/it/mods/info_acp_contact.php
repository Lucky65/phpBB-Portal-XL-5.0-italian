<?php

/**
*
* @package - Contact Board admin
* @version $Id: info_acp_contact.php 1.0.9 2009-12-25 RMcGirr83 $
* @copyright (c) 2009 RMcGirr83 http://rmcgirr83.org
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/28
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
	'LOG_CONTACT_CONFIG_UPDATE'		=> '<strong>Aggiornamento configurazione modulo contatti</strong>',
	
	// General config options
	// Only needed to remove module from previous version installs
	'ACP_CONTACT_ADMIN_SETTINGS'	=> 'Contatto amministratore forum',	
	
	'ACP_CONTACT_SETTINGS_EXPLAIN'	=> 'Questa è la pagina di configurazione per il mod “Contatto Amministratore Forum” di RMcGirr83 con il precedente contributo di eviL&lt;3.',

	'ACP_CONTACT_CONFIG'			=> 'Configurazione',
	'ACP_CAT_CONTACT'				=> 'Contatto amministratore forum',	
	'CONTACT_CONFIG_SAVED'			=> 'Contatto amministratore forum aggiornato con successo.',
	'CONTACT_VERSION'				=> 'Versione:',
	'CONTACT_ENABLE'				=> 'Attiva contatto amministratore forum.',
	'CONTACT_ENABLE_EXPLAIN'		=> 'Attiva o disattiva il mod globalmente.',

	'CONTACT_ACP_CONFIRM'				=> 'Attiva conferma visuale',
	'CONTACT_ACP_CONFIRM_EXPLAIN'		=> 'Se attivi questa opzione, gli utenti dovranno inserire un codice di sicurezza per inviare il messaggio.<br />Questa opzione previene i messaggi automatici. Nota che questa opzione è valida solo per la pagina contatti.  Non ha effetto sulla conferma visuale di phpBB.',
	'CONTACT_ATTACHMENTS'				=> 'Permetti allegati',
	'CONTACT_ATTACHMENTS_EXPLAIN'		=> 'Se imposti l’invio allegati, gli utenti saranno autorizzati ad inviare allegati nel forum e nei messaggi.<br />Le estensioni consentite sono le stesse della configurazione di phpBB.<br /><span style="color:red;">Non si applica per il metodo di contatto via “Email”.</span>',
	'CONTACT_BBCODES'					=> 'Permetti BBcodes',
	'CONTACT_BBCODES_EXPLAIN'			=> 'Se imposti i bbcodes, gli utenti saranno autorizzati ad usarli.<br /><span style="color:red;">Non si applica per il metodo di contatto via “Email”.</span>',
	'CONTACT_CONFIRM_GUESTS'			=> 'Conferma visuale solo per ospiti',
	'CONTACT_CONFIRM_GUESTS_EXPLAIN'	=> 'Se questa opzione è attivata, il codice di sicurezza sarà visualizzato solo agli ospiti (se attivato).',
	'CONTACT_ENABLE'					=> 'Attiva pagina contatti',
	'CONTACT_ENABLE_EXPLAIN'			=> 'Se disattivata, la pagina nella pagina dei contatti verrà visualizzato un messaggio quando viene visitata e il link non verrà visualizzato nell’header.',	
	'CONTACT_FOUNDER'					=> 'Contatto solo fondatore forum',
	'CONTACT_FOUNDER_EXPLAIN'			=> 'Se impostato solo il fondatore del forum riceverà un avviso per Email o PM.',
	'CONTACT_GENERAL_SETTINGS'			=> 'Configurazione generale pagina contatti',
	'CONTACT_MAX_ATTEMPTS'				=> 'Numero massimo di tentativi',
	'CONTACT_MAX_ATTEMPTS_EXPLAIN'		=> 'Quante volte un utente può tentare di leggere correttamente il codice di conferma?<br />Aggiungi 0 per illimitati tentativi.',
	'CONTACT_METHOD'					=> 'Metodo contatto',
	'CONTACT_METHOD_EXPLAIN'			=> 'Come preferisci essere contatattato.<br /><span style="color:red;">Se selezionata con “Email”, gli allegati, bbcodes and smilies non saranno applicati.</span>',
	'CONTACT_REASONS'					=> 'Motivazione contatto',
	'CONTACT_REASONS_EXPLAIN'			=> 'Aggiungi le motivazioni per il contatto, separate da nuove linee.<br />Se non vuoi usare questo strumento, lascia i campi vuoti.',
	'CONTACT_SMILIES'					=> 'Permetti smilies',
	'CONTACT_SMILIES_EXPLAIN'			=> 'Se attivata l’opzione permette l’utilizzo agli utenti di smilies.<br /><span style="color:red;">Non si applica per il metodo di contatto via “Email”.</span>',
	'CONTACT_URLS'						=> 'Permetti URL',
	'CONTACT_URLS_EXPLAIN'				=> 'Se attivata l’opzione autorizza gli utenti nell’invio di BBcodes e di URL.<br /><span style="color:red;">Non si applica per il metodo di contatto via “Email”.</span>',
	// Bot config options
	'CONTACT_BOT_FORUM'				=> 'Contatto bot forum',
	'CONTACT_BOT_FORUM_EXPLAIN'		=> 'Seleziona il forum, se il metodo di contatto è impostato su "messaggio forum".',
	'CONTACT_BOT_POSTER'			=> 'Bot come invio',
	'CONTACT_BOT_POSTER_EXPLAIN'	=> 'Se impostato come messaggio privato la funzione previene il contatto da bot e contatta l’utente scelto in precedenza sulla base delle configurazioni qui impostate.',
	'CONTACT_BOT_USER'				=> 'Contatto utente bot',
	'CONTACT_BOT_USER_EXPLAIN'		=> 'Selezionare l’utente per i messaggi che verranno pubblicati per il metodo di contatto impostato su “Messaggio Privato” o “Messaggio forum”.',
	'CONTACT_USERNAME_CHK'			=> 'Controllo nome utente',
	'CONTACT_USERNAME_CHK_EXPLAIN'	=> 'Se impostato su Sì, il nome degli utenti verranno controllati con quelli presenti nel database. Se un nome simile viene trovato l’utente verrà presentato con un errore e verrà chiesto di inserire un nome utente diverso.',
	'CONTACT_EMAIL_CHK'				=> 'Controllo Email',
	'CONTACT_EMAIL_CHK_EXPLAIN'		=> 'Se impostato su Sì, gli indirizzi Email degli utenti verranno controllati con quelli presenti nel database. Se una Email viene trovata l’utente verrà presentato con un errore e verrà chiesto di inserire una Email diversa.',

	// Contact methods
	'CONTACT_METHOD_EMAIL'			=> 'Email',
	'CONTACT_METHOD_PM'				=> 'Messaggio privato',
	'CONTACT_METHOD_POST'			=> 'Messaggio forum',
	
	// Contact posters...user bot
	'CONTACT_POST_NEITHER'			=> 'Nessuno dei due',
	'CONTACT_POST_GUEST'			=> 'Solo ospiti',
	'CONTACT_POST_ALL'				=> 'Tutti',		
	
	// UMIL stuff
	'ACP_CONTACT_TITLE'				=> 'Contatto amministratore forum',
	'ACP_CONTACT_TITLE_EXPLAIN'		=> 'Una zona per gli ospiti e gli utenti per contattare l’amministratore del forum',
	'CONTACT_UPDATED'				=> 'Voci database aggiornate',
	'CONTACT_INSTALLED'				=> 'Voci database installate',	
	
	// Log entries
	'LOG_CONFIG_CONTACT_ADMIN'		=> '<strong>Alterata configurazione pagina Contatto Amministrazione Forum</strong>',
	'LOG_CONTACT_BOT_INVALID'		=> '<strong>La MOD Contatto Amministrazione Forum ha un id selezionato non valido:</strong><br />ID utente %1$s',
	'LOG_CONTACT_FORUM_INVALID'		=> '<strong>La MOD Contatto Amministrazione Forum ha un forum selezionato non valido:</strong><br />ID forum %1$s',
	'LOG_CONTACT_NONE'				=> '<strong>Gli amministratori non permettono agli utenti di contattarti con %1$s la MOD Contatto Amministrazione Forum</strong>',	
	
));

?>