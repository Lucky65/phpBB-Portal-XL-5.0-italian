<?php
/**
*
* acp_lc [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @author Mickaël Salfati (Elglobo) http://www.phpbb-services.com
*
* @package acp
* @version $Id: info_acp_lc.php,v 1.1.1.1 2009/05/15 05:16:04 damysterious Exp $
* @copyright (c) 2007 phpBB-Services
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
	'ACP_CONNECTIONS_LOGS'			=> 'Záznamenané pripojenia',
	'ACP_CONNECTIONS_LOGS_EXPLAIN'	=> 'Tento zoznam výkonov všetkých spojení v panely. Môžete ich radiť / filtrovať podľa mena, dátumu, IP adresy alebo výkonu. Ak máte príslušné oprávnenie, môžete vymazať jednotlivé operácie, alebo záznam ako celok.',
	'ACP_LOGS_GOODIES'				=> '<strong>Trik</strong>: Môžete si prezrieť všetko okolo IP kliknutím na názov v kolonke <em>Whois</em> kliknutím na IP.',
	'ACP_LOGS_HOSTNAME'				=> 'Názov hostiteľa',
	'ACP_LOGS_SORT'					=> 'Vytriediť',
	'ACP_LOGS_ALL'					=> 'Všetko',
	'ACP_LOGS_FAIL'					=> 'Zlyhanie',
	
	'LOG_CLEAR_CONNECTIONS'			=> '<strong>Prečistil protokol pripojení</strong>',
	'LOG_CONFIG_LOG_CONNECTIONS'	=> '<strong>Zmenil nastavenia prihlásenia pre pripojenie</strong>',
	'LOG_AUTH_SUCCESS'				=> '<strong>Úspešne sa pripojil</strong>',
	'LOG_AUTH_SUCCESS_AUTO'			=> '<strong>Úspešne sa pripojil (Auto.prihlásenie)</strong><br />» %s',
	'LOG_AUTH_FAIL'					=> '<strong>Zadal</strong> - nesprávne heslo',
	'LOG_AUTH_FAIL_NO_PASSWORD'     => '<strong>Failure</strong> - no password supplied<br />» %s',
	'LOG_AUTH_FAIL_BAN'				=> '<strong>Zadal</strong> - zakázané užívateľské meno ',
	'LOG_AUTH_FAIL_CONFIRM'			=> '<strong>Zadal</strong> - nesprávny potvrdzovací kód',
	'LOG_AUTH_FAIL_CONVERT'			=> '<strong>Zadal</strong> - neprevediteľné heslo',
	'LOG_AUTH_FAIL_INACTIVE'		=> '<strong>Zadal</strong> - neaktívny užívateľ',
	'LOG_AUTH_FAIL_UNKNOWN'			=> '<strong>Zadal</strong> - neexistujúci užívateľ<br />» %s',
	'LOG_ADMIN_AUTH_FAIL'			=> '<strong>Zadal do ACP</strong> - nesprávne heslo',
	'LOG_ADMIN_AUTH_FAIL_NO_ADMIN'	=> '<strong>Zadal do ACP</strong> - neoprávnený',
	'LOG_ADMIN_AUTH_FAIL_DIFFER'	=> '<strong>Zadal do ACP</strong> - znovu-overenie ako iný užívateľ<br />» %s',
	'LOG_ADMIN_AUTH_SUCCESS'		=> '<strong>Úspešne sa pripojil do ACP</strong>',
	'LOG_LC_EXCLUDE_IP'				=> '<strong>Vylúčil IP v protokole pripojení</strong><br />» %s',
	'LOG_LC_UNEXCLUDE_IP'			=> '<strong>Povolil IP v protokole pripojení</strong><br />» %s',
	'LOG_LC_INTERVAL'				=> '(%s attempts)',
	
	// Settings panel
	'ACP_LC'						=> 'Záznamenávanie pripojenia',
	'ACP_CONNECTIONS'				=> 'Záznamenánie pripojenia',
	'ACP_CONNECTIONS_SETTINGS'		=> 'Nastavenie Záznamu Pripojenia',
	'ACP_CONNECTIONS_SETTINGS_EXPLAIN'		=> 'Z tohto panelu môžete konfigurovať všetky nastavenia detekovaných pripojení všetkých prihlásených.<br />Ale aj <em>vylúčiť (alebo znovu povoliť)</em> IP adresy v protokole pripojenia.',
	'LC_SETTINGS'					=> 'Nastavenie',
	'LC_PRUNING'					=> 'Auto-prečistenie',
	'LC_DISABLE'					=> 'Vypnem zaznamenávanie pripojenia',
	'LC_DISABLE_EXPLAIN'			=> 'Toto zadanie celkom <em>vypne</em> zaznamenávanie pripojenia.',
	'LC_ACP_DISABLE'				=> 'Vypnem zlyhania pripojenia do ACP',
	'LC_ACP_DISABLE_EXPLAIN'		=> 'Pripojenie <em>v zlyhaní</em> bude vždy zaznamenané.',
	'LC_FOUNDER_DISABLE'			=> 'Vypnem zaznamenávanie pripojenia <em>Zakladateľov</em>',
	'LC_FOUNDER_DISABLE_EXPLAIN'	=> 'Pripojenie <em>v zlyhaní</em> zakladateľov budú vždy zaznamenané.',
	'LC_ADMIN_DISABLE'				=> 'Vypnem zaznamenávanie pripojenia <em>administrátorov</em>',
	'LC_ADMIN_DISABLE_EXPLAIN'		=> 'Spojenia <em>v zlyhaní</em> budú vždy zaznamenané na súvahe administrátora.',
	'LC_INTERVAL'					=> 'Interval zaznamenávania',
	'LC_INTERVAL_EXPLAIN'			=> 'Čas v sekundách medzi zaznamenaním 2 vstupov, ktoré sú <em>v zlyhaní identické</em>. Nastavením hodnoty na 0 sa vyradí z prevádzky toto chovanie.',
	'LC_PRUNE_DAY'					=> 'Auto-odstranenie zo záznamu pripojenia',
	'LC_PRUNE_DAY_EXPLAIN'			=> 'Nastavte obdobie dní po koľkých zoznam zaznamenaných pripojení vymažem. Nastavením hodnoty na 0 sa vyradí z prevádzky toto chovanie.',
	
	'LC_MANAGE_IP'					=> 'Správa IP adries',
	'LC_NO_EXCLUDE_IP'				=> 'Nie sú žiadne vylúčené IP adresy',
	'LC_EXCLUSION_IP'				=> 'Vylúčíť IP adrery',
	'LC_EXCLUSION_IP_EXPLAIN'		=> 'Ak chcete zadať niekoľko rôznych IP zadajte maximálne na nový riadok, použite “*”.',
	'LC_UNEXCLUSION_IP'				=> 'Zrušiť vylúčenie IP adries',
	'LC_UNEXCLUSION_IP_EXPLAIN'		=> 'Môžete zrušiť vylúčenie viacerých viac IP adries naraz pomocou vhodnej kombinácie myši a klávesnice cez váš počítač a prehliadač.',
	
	'LC_EXCLUDE_NO_IP'					=> 'Chyba: Nie je správne zadaná IP adresa',
	'LC_EXCLUDE_IP_UPDATE_SUCCESSFUL'	=> 'Zoznam vylúčených bol úspešne aktualizovaný.',
	
));

?>