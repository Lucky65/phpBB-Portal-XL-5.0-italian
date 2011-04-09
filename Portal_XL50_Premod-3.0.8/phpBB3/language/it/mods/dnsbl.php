<?php 
/** 
*
* @package Advanced Block Mod
* @version $Id: dnsbl.php, italian, v 1.001 2009/04/27 Martin Truckenbrodt Exp$
* @copyright (c) 2009 phpBB Group 
* @copyright (c) 2010 luckylab.eu - translated for portal xl on 2010/04/10
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

$lang = array_merge($lang, array(
	'DNSBL'						=> 'Blacklist DNS',
	'DNSBL_ADDED_EDITED'		=> 'Blacklist DNS aggiunta o modificata con successo',
	'DNSBL_ADMIN'				=> 'Amministrazione Blacklist DNS',
	'DNSBL_ADMIN_EXPLAIN'		=> 'Non ci sono categorie. Risulta solo l’elenco di tutte le Blacklist DNS. Le blacklist DNS saranno utilizzate secondo l’ordine dell’elenco.',
	'DNSBL_CREATE'				=> 'Creata Blacklist DNS',
	'DNSBL_DELETE'				=> 'Cancellata Blacklist DNS',
	'DNSBL_DELETE_EXPLAIN'		=> 'Il modulo qui sotto vi permetterà di eliminare una blacklist DNS.',
	'DNSBL_DELETED'				=> 'Blacklist DNS cancellata con successo',
	'DNSBL_EDIT'				=> 'Modificata Blacklist DNS',
	'DNSBL_EDIT_EXPLAIN'		=> 'Il modulo qui sotto vi permetterà di modificare una blacklist DNS.',
	'DNSBL_FQDN'				=> 'Blacklist DNS FQDN',
	'DNSBL_FQDN_EXPLAIN'		=> 'Il nome di dominio completo per la Blacklist DNS.',
	'DNSBL_LOOKUP'				=> 'DNS Blacklist URL',
	'DNSBL_LOOKUP_EXPLAIN'		=> 'E’ possibile utilizzare questo link per vedere i dettagli sulla Blacklist DNS e puoi ottenere informazioni sui motivi del blocco. L’indirizzo IP verrà aggiunto automaticamente dal registro. Devi aggiungere http:// avanti alla voce.',
	'DNSBL_LOOK_UP'				=> 'Seleziona una Blacklist DNS',
	'DNSBL_LOOK_UP_EXPLAIN'		=> '<strong>Non</strong> hai le autorizzazioni per selezionare più una Blacklist DNS.',
	'DNSBL_SETTINGS'			=> 'Configurazione Blacklist DNS',
	'DNSBL_REGISTER'			=> 'Usa DNSBL per la registrazione utente',
	'DNSBL_REGISTER_EXPLAIN'	=> 'Questo può sparmiare prestazioni su grandi tabelle. Se non hai attivato i permessi di scrivere messaggi agli ospiti, è possibile impostare tutte le DNSBL solo agli utenti registrati',
	'DNSBL_REGISTER_SHORT'		=> 'Solo per utenti registrati',
	'DNSBL_WEIGHT'				=> 'Soglia Blacklist DNS',
	'DNSBL_WEIGHT_EXPLAIN'		=> 'Gli indirizzi IP saranno bloccati quando sarà raggiunta la soglia del valore di 5. Per la singola blacklist DNS, è possibile impostare valori più bassi, se non sei sicuro se è una buona idea utilizzare questo elenco o ad esempio DNSBL che non elenca solo gli indirizzi IP o intervalli di indirizzi interi. Quindi, l’indirizzo IP deve essere elencato in DNSBL per essere bloccati. 0 disattiva la Blacklist DNS.',

	'NO_DNSBL'					=> 'Nessuna Blacklist DNS trovata. Contatta un’amministratore.',
	'NO_DNSBL_SELECTED'			=> 'Nessuna Blacklist DNS selezionata!',
	'NO_DNSBLS'					=> 'Non risultano Blacklist DNST.',

	'VIEW_DNSBL'				=> '1 Blacklist DNS',
	'VIEW_DNSBLS'				=> '%d Blacklist DNS',
));

?>