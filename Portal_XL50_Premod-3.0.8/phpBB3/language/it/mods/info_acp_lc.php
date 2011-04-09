<?php
/**
*
* acp_lc [Italian]
*
* @author Mickaël Salfati (Elglobo) http://www.phpbb-services.com
*
* @package acp
* @version $Id: info_acp_lc.php 2008-06-12 00:20:00 (local) $
* @copyright (c) 2007 phpBB-Services
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/01/15
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

$lang = array_merge($lang, array(
	'ACP_CONNECTIONS_LOGS'			=> 'Log connessioni',
	'ACP_CONNECTIONS_LOGS_EXPLAIN'	=> 'Questa è la lista di tutte le connessioni effettuate nel tuo forum. Puoi ordinarle/filtrarle per nome utente, data, IP o azione. Se hai appropriati permessi puoi anche rendere visibili le operazioni o il log nel suo complesso.',
	'ACP_LOGS_GOODIES'				=> '<strong>Suggerimento</strong>: Puoi controllare tutti gli IP cliccando sul nome della colonna e visulizzare il <em>Whois</em> cliccando sopra all’IP.',
	'ACP_LOGS_HOSTNAME'				=> 'Hostnames',
	'ACP_LOGS_SORT'					=> 'Ordinamento',
	'ACP_LOGS_ALL'					=> 'Tutto',
	'ACP_LOGS_FAIL'					=> 'Fallito',
	
	'LOG_CLEAR_CONNECTIONS'			=> '<strong>Vedi log connessioni</strong>',
	'LOG_CONFIG_LOG_CONNECTIONS'	=> '<strong>Altera log connessioni</strong>',
	'LOG_AUTH_SUCCESS'				=> '<strong>Connesso con successo</strong>',
	'LOG_AUTH_SUCCESS_AUTO'			=> '<strong>Connesso con successo (Auto login)</strong><br />» %s',
	'LOG_AUTH_FAIL'					=> '<strong>Fallito</strong> - password errata',
	'LOG_AUTH_FAIL_NO_PASSWORD'     => '<strong>Fallito</strong> - nessuna password inserita<br />» %s',
	'LOG_AUTH_FAIL_BAN'				=> '<strong>Fallito</strong> - nome utente bannato',
	'LOG_AUTH_FAIL_CONFIRM'			=> '<strong>Fallito</strong> - codice di conferma errato',
	'LOG_AUTH_FAIL_CONVERT'			=> '<strong>Fallito</strong> - password non convertita',
	'LOG_AUTH_FAIL_INACTIVE'		=> '<strong>Fallito</strong> - utente non attivo',
	'LOG_AUTH_FAIL_UNKNOWN'			=> '<strong>Fallito</strong> - utente non esistente<br />» %s',
	'LOG_ADMIN_AUTH_FAIL'			=> '<strong>Fallito collegamento in ACP</strong> - password errata',
	'LOG_ADMIN_AUTH_FAIL_NO_ADMIN'	=> '<strong>Fallito collegamento in ACP</strong> - senza autorizzazione',
	'LOG_ADMIN_AUTH_FAIL_DIFFER'	=> '<strong>Fallito collegamento in ACP</strong> - ri-autenticato con un utente diverso<br />» %s',
	'LOG_ADMIN_AUTH_SUCCESS'		=> '<strong>Connesso con successo in ACP</strong>',
	'LOG_LC_EXCLUDE_IP'				=> '<strong>Escludi IP nel log connessioni</strong><br />» %s',
	'LOG_LC_UNEXCLUDE_IP'			=> '<strong>Non escludere IP nel log connessioni</strong><br />» %s',
	'LOG_LC_INTERVAL'				=> '(%s tentativi)',
	
	// Settings panel
	'ACP_LC'						=> 'Log connessioni',
	'ACP_CONNECTIONS'				=> 'Log connessioni',
	'ACP_CONNECTIONS_SETTINGS'		=> 'Configurazione log connessioni',
	'ACP_CONNECTIONS_SETTINGS_EXPLAIN'		=> 'Con questo pannello di controllo puoi configurare tutti i logs relativi alle connessioni.<br />Puoi anche <em>escludere (o non escludere)</em> gli indirizzi IP.',
	'LC_SETTINGS'					=> 'Configurazione',
	'LC_PRUNING'					=> 'Auto-eliminazione',
	'LC_DISABLE'					=> 'Disattiva il log delle connessioni',
	'LC_DISABLE_EXPLAIN'			=> 'Questa opzione è stata disabilitata <em>completamente</em>.',
	'LC_ACP_DISABLE'				=> 'Disattiva il log delle connessioni nell’ACP',
	'LC_ACP_DISABLE_EXPLAIN'		=> 'Le connessioni <em>disabilitate</em> saranno sempre connesse.',
	'LC_FOUNDER_DISABLE'			=> 'Disattiva il log delle connessioni al gruppo <em>Fondatori</em>',
	'LC_FOUNDER_DISABLE_EXPLAIN'	=> 'Le connessioni <em>disabilitate</em> per il gruppo fondatori saranno sempre connesse.',
	'LC_ADMIN_DISABLE'				=> 'Disattiva il log delle connessioni al gruppo <em>Amministratori</em>',
	'LC_ADMIN_DISABLE_EXPLAIN'		=> 'Le connessioni <em>disabilitate</em> per il gruppo amministratori saranno sempre connesse.',
	'LC_INTERVAL'					=> 'Intervallo logs',
	'LC_INTERVAL_EXPLAIN'			=> 'Tempo in secondi tra il logging di 2 voci che risultano <em>fallite e identiche</em>. Settando a 0 l’opzione viene disabilitata.',
	'LC_PRUNE_DAY'					=> 'Auto-eliminazione log connessioni',
	'LC_PRUNE_DAY_EXPLAIN'			=> 'Seleziona in giorni l’età dei logs. Settando a 0 l’opzione viene disabilitata.',
	
	'LC_MANAGE_IP'					=> 'Gestisci indirizzi IP',
	'LC_NO_EXCLUDE_IP'				=> 'Non escludere indirizzi IP',
	'LC_EXCLUSION_IP'				=> 'Escludi IP',
	'LC_EXCLUSION_IP_EXPLAIN'		=> 'Per specificare differenti IP inserisci gli IP in linee separate. Per specificare un jolly usa “*”.',
	'LC_UNEXCLUSION_IP'				=> 'Non escludere IP',
	'LC_UNEXCLUSION_IP_EXPLAIN'		=> 'Puoi non escludere indirizzi IP multipli usando l’appropriata combinazione di mouse e tastiera per il tuo computer e browser.',
	
	'LC_EXCLUDE_NO_IP'					=> 'Nessun indirizzo IP definito',
	'LC_EXCLUDE_IP_UPDATE_SUCCESSFUL'	=> 'La lista delle esclusioni è stata aggiornata con successo.',
	
));

?>