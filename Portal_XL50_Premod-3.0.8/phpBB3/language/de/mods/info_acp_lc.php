<?php
/**
*
* acp_lc [Deutsch - Du]
*
* @author Mickaël Salfati (Elglobo) http://www.phpbb-services.com
*
* @package acp
* @version $Id: info_acp_lc.php 2008-06-12 00:20:00 (local) $
* @copyright (c) 2007 phpBB-Services
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @german translation by woipi
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
	'ACP_CONNECTIONS_LOGS'			=> 'Verbindungslog',
	'ACP_CONNECTIONS_LOGS_EXPLAIN'	=> 'Hier werden alle Verbindungen/Einloggen in das Forum aufgelistet. Du kannst die jeweilige Rubrik sortieren duch einfaches klicken auf Name, Datum, IP oder Markieren zum weiteren Filtern der Ergebnisse. Wenn Du erweiterte Zugriffsrechte hast, kannst Du auch L&ouml;schungen oder einzelne Einstellungen in der Konfiguration vornehmen, oder die Logs komplett abschalten.',
	'ACP_LOGS_GOODIES'				=> '<strong>Trick</strong>: Einzelheiten zum Mitglied und der geloggten IP Adresse k&ouml;nnen direkt &uuml;ber klicken der jeweiligen IP <strong><em>Whois</em></strong> oder Name des Mitglieds eingesehen werden.',
	'ACP_LOGS_HOSTNAME'				=> 'Hostnamen',
	'ACP_LOGS_SORT'					=> 'Sortieren',
	'ACP_LOGS_ALL'					=> 'Alles',
	'ACP_LOGS_FAIL'					=> 'Fehler',
	
	'LOG_CLEAR_CONNECTIONS'			=> '<strong>Verbindungslogs gel&ouml;scht</strong>',
	'LOG_CONFIG_LOG_CONNECTIONS'	=> '<strong>Konfiguration der Einstellungen erfolgreich ge&auml;ndert</strong>',
	'LOG_AUTH_SUCCESS'				=> '<strong>Einloggen erfolgreich</strong>',
	'LOG_AUTH_SUCCESS_AUTO'			=> '<strong>Einloggen erfolgreich (Autologgin)</strong><br />Â» %s',
	'LOG_AUTH_FAIL'					=> '<strong>Fehler</strong> - falsches Paswort',
	'LOG_AUTH_FAIL_NO_PASSWORD'		=> '<strong>Fehler</strong> - kein Password eingegeben<br />» %s',
	'LOG_AUTH_FAIL_BAN'				=> '<strong>Fehler</strong> - Mitgliedsname gebannt',
	'LOG_AUTH_FAIL_CONFIRM'			=> '<strong>Fehler</strong> - falscher Best&auml;tigungscode',
	'LOG_AUTH_FAIL_CONVERT'			=> '<strong>Fehler</strong> - Passwort nicht umgewandelt',
	'LOG_AUTH_FAIL_INACTIVE'		=> '<strong>Fehler</strong> - inaktives Mitglied',
	'LOG_AUTH_FAIL_UNKNOWN'			=> '<strong>Fehler</strong> - unbekanntes Mitglied<br />Â» %s',
	'LOG_ADMIN_AUTH_FAIL'			=> '<strong>Fehler-Einloggen-ACP</strong> - falsches Passwort',
	'LOG_ADMIN_AUTH_FAIL_NO_ADMIN'	=> '<strong>Fehler-Einloggen-ACP</strong> - keine Berechtigung',
	'LOG_ADMIN_AUTH_FAIL_DIFFER'	=> '<strong>Fehler-Einloggen-ACP</strong> - wiedererkannt jedoch als anderer User<br />Â» %s',
	'LOG_ADMIN_AUTH_SUCCESS'		=> '<strong>Erfolgreiches einloggen im ACP</strong>',
	'LOG_LC_EXCLUDE_IP'				=> '<strong>Ausgeschlossene IP Adressen</strong><br />Â» %s',
	'LOG_LC_UNEXCLUDE_IP'			=> '<strong>Nicht ausgeschlossene IP Adressen</strong><br />Â» %s',
	'LOG_LC_INTERVAL'				=> '(<strong>%s</strong> mal versucht)',
	
	// Settings panel
	'ACP_LC'						=> 'Connection log',
	'ACP_CONNECTIONS'				=> 'Verbindungslog',
	'ACP_CONNECTIONS_SETTINGS'		=> 'Verbindungslog einstellungen',
	'ACP_CONNECTIONS_SETTINGS_EXPLAIN'		=> 'Hier kannst Du die Einstellungen der eingehenden einzelnen Verbindungen die Du registriert/aufgelistet haben m&ouml;chtest vornehmen.<br />Du kannst auch ausgeschlossene/zugelassene IP Adressen, die versuchen Einzuloggen, auflisten lassen.',
	'LC_SETTINGS'					=> 'Konfiguration',
	'LC_PRUNING'					=> 'Automatisches L&ouml;schen',
	'LC_DISABLE'					=> 'Logging der Verbindungen abschalten',
	'LC_DISABLE_EXPLAIN'			=> 'Diese Option schaltet das gesamte Loggen/Registrieren - der eingehenden Verbindungen zum Forum ab.',
	'LC_ACP_DISABLE'				=> 'Verbindungslogs -Einloggen- in das ACP abschalten',
	'LC_ACP_DISABLE_EXPLAIN'		=> 'Alle <em><strong>Fehler</strong> (Passwort/Username)</em> beim Einloggen werden immer registriert/gelistet.',
	'LC_FOUNDER_DISABLE'			=> 'Verbindungslogs von <em>Gr&uuml;ndern</em> abschalten',
	'LC_FOUNDER_DISABLE_EXPLAIN'	=> 'Alle <em><strong>Fehler</strong></em> von <em>Gr&uuml;ndern</em> beim Einloggen werden immer registriert/gelistet.',
	'LC_ADMIN_DISABLE'				=> 'Einloggen des Administrators abschalten',
	'LC_ADMIN_DISABLE_EXPLAIN'		=> 'Alle <em><strong>Fehler</strong> (Passwort/Username)</em> beim Einloggen zum Administrations-Account werden immer registriert/gelistet.',
	'LC_INTERVAL'					=> 'Einlogg versuche (zeitraum)',
	'LC_INTERVAL_EXPLAIN'			=> 'Zeit in Sekunden zwischen  dem Registrieren bei Falscheingabe und der korrekten Eingabe von Username und Passwort. Die Eingabe des Wertes <strong>"0"</strong> schaltet diese Funktion aus.',
	'LC_PRUNE_DAY'					=> 'Automatisches l&ouml;schen der Verbindungslogs',
	'LC_PRUNE_DAY_EXPLAIN'			=> 'Angabe in Tagen, wie lange die Logs gespeichert werden sollen. Der Wert <strong>"0"</strong> schaltet diese Funktion ab.',
	
	'LC_MANAGE_IP'					=> 'IP Adressen Manager',
	'LC_NO_EXCLUDE_IP'				=> 'Unzul&auml;ssige IP Adressen',
	'LC_EXCLUSION_IP'				=> 'Diese IP Adressen nicht Loggen',
	'LC_EXCLUSION_IP_EXPLAIN'		=> 'Um mehrere verschiedene IP Adressen einzugeben,die gew&uuml;nschte IP bitte jeweils in eine neue Zeile eingeben. Um best. IP-Adr. auszuschlie&szlig;en benutze als Wildcard bitte â€œ*â€. <br /> <br />z.B.: <strong> 87.168.252.*</strong><br /> <br /> <strong>Achtung:</strong><br />Das ausschlie&szlig;en der IP Adressen bezieht sich <strong>nur</strong> auf das Loggen/Registrieren. Es kann damit <strong>kein</strong> einloggen im Forum verhindert werden!',
	'LC_UNEXCLUSION_IP'				=> 'IP Adressen vom Ausschlu&szlig; entfernen',
	'LC_UNEXCLUSION_IP_EXPLAIN'		=> 'Es k&ouml;nnen auch mehrere IP Adressen mit der Maus und Tastenkombination <strong>"STRG"</strong> zur Auswahl selektiert werden.',
	
	'LC_EXCLUDE_NO_IP'				=> 'Die IP Adressen wurden nicht richtig definiert!',
	'LC_EXCLUDE_IP_UPDATE_SUCCESSFUL'		=> 'Die Ausschlu&szlig;liste der IP Adressen wurde erfolgreich aktualisiert.',
	
));

?>
