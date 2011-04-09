<?php
/**
*
* install [German]
*
* @package language
* @version $Id: arcade_install.php 681 2008-12-16 16:36:54Z JRSweets $
* @copyright (c) 2005 phpBB Group
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

$lang = array_merge($lang, array(
	'CAT_INSTALL'							=> 'Installation',
	'CAT_OVERVIEW'							=> '&Uuml;bersicht',
	'CAT_UNINSTALL'							=> 'Deinstallation',
	'CAT_UPDATE'							=> 'Aktualisieren',
	'CAT_VERIFY'							=> '&Uuml;berpr&uuml;fen',

	'DONE'					=> 'Fertig',
	'DUPLICATE_AUTH_FOUND'	=> '%s wurde %s-mal gefunden', 

	'FILES_REQUIRED'			=> 'Dateien und Verzeichnisse',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Ben&ouml;tigt</strong> - Um korrekt funktionieren zu k&ouml;nnen, muss die Spielhalle Schreibzugriff auf einige Dateien und Verzeichnisse erhalten. Falls Sie “Nicht gefunden”lesen, m&uuml;ssen Sie das entsprechende Verzeichnis oder die Datei erstellen. Wenn Sie “Nicht beschreibbar”lesen, m&uuml;ssen Sie die Zugriffsrechte anpassen, so dass die Spielhalle schreibend auf das Verzeichnis/die Datei zugreifen kann.',
	'FOUND'						=> 'Gefunden',
	
	'GPL'	=> 'General Public License',
	
	'INSTALL_CONGRATS'			=> 'Gratulation!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>Sie haben die phpBB-Spielhalle %1$s erfolgreich installiert.</p>
		<p>Wenn Sie auf den Button unten klicken, werden Sie in Ihr Administrationszentrum (ACP) weitergeleitet. Nehmen Sie sich ein paar Minuten, um sich mit den verf&uuml;gbaren Optionen vertraut zu machen.</p><p><strong>Sie m&uuml;ssen das Installationsverzeichnis nun l&ouml;schen, verschieben oder umbenennen, bevor Sie Ihr Forum benutzen k&ouml;nnen. So lange dieses Verzeichnis vorhanden ist, k&ouml;nnen Sie nur auf das ACP zugreifen.</strong></p>',	
	'INSTALL_INTRO'				=> 'Willkommen zur Installation der phpBB-Spielhalle',
	'INSTALL_INTRO_BODY'		=> 'Mit dieser Option k&ouml;nnen Sie die Spielhalle in Ihrer Datenbank einrichten.',	
	'INSTALL_LOGIN'				=> 'Fortfahren ins ACP',
	'INSTALL_PANEL'				=> 'phpBB Arcade Installation Panel',
	'INSTALL_START'				=> 'Installation beginnen',
	'INSTALL_TEST'				=> 'Nochmals testen',
	'INST_ERR'					=> 'Installationsfehler',
	'INST_ERR_AUTH'				=> 'Sie sind nicht berechtigt, dieses Skript zu nutzen.<br /><br />	Beachten Sie bitte, dass f&uuml;r die Installation folgende Voraussetzungen erf&uuml;llt sein m&uuml;ssen:<br /><br />	Zun&auml;chst m&uuml;ssen Sie auf der Seite angemeldet sein und zudem den Gr&uuml;nderstatus besitzen. Wenn Sie angemeldet und der Gr&uuml;nder sind, aber dennoch diese Warnmeldung bekommen, sind Ihre Cookieeinstellungen im ACP falsch gesetzt. Bitte &uuml;berpr&uuml;fen Sie die Cookiedom&auml;nen-Einstellung. Wenn Ihr URL das Format <strong>http://www.example.com</strong> hat, so sollte die Cookiedom&auml;ne <strong>.example.com</strong> lauten.',
	'INST_ERR_FATAL'			=> 'Schwer wiegender Installationsfehler',
	'INST_ERR_FATAL_DB'			=> 'Ein schwer wiegender Datenbankfehler ist aufgetreten. Dies kann passiert sein, weil der Datenbankbenutzer keine Rechte hat, die Anweisungen <code>CREATE TABLES</code> oder <code>INSERT</code> auszuf&uuml;hren. Weitere Informationen sind im Folgenden zu finden. Bitte kontaktieren Sie zun&auml;chst Ihren Hoster oder melden Sie sich f&uuml;r weitere Hilfestellung im phpBB-Forum an.',
	'INST_SQL_RESULTS'			=> 'SQL-Befehle abgeschlossen',
	
	'MODULE_ACP'	=> 'ACP-Modul', 
	'MODULE_MCP'	=> 'MCP-Modul', 
	'MODULE_UCP'	=> 'UCP-Modul', 
	
	'NEXT_STEP'	=> 'Fortfahren mit dem n&auml;chsten Schritt',
	'NOT_FOUND'	=> 'Nicht gefunden:',
	
	'OVERVIEW_BODY'	=> 'Willkommen in der phpBB-Spielhalle!<br /><br />Die Spielhalle ist funktionsreich, benutzerfreundlich und wird vollst&auml;ndig unterst&uuml;tzt.<br /><br />Dieses Installationsskript f&uuml;hrt Sie durch die Installation der Spielhalle, aktualisiert sie von fr&uuml;heren Versionen auf den neuesten Stand, deinstalliert sie und &uuml;berpr&uuml;ft die korrekte Installation. Um die Lizenz der Spielhalle zu lesen oder zu erfahren, wo und wie Sie Unterst&uuml;tzung bekommen k&ouml;nnen, w&auml;hlen Sie bitte die entsprechende Option im Men&uuml; auf der linken Seite aus. Um fortzufahren, klicken Sie oben auf den entsprechenden Tab.',
	
	'PHPBB_VERSION_REQD'			=> 'phpBB-Version >= %s',
	'PHP_CURL_SUPPORT'				=> 'Unterst&uuml;tzung f&uuml;r <var>curl</var> ist installiert',
	'PHP_CURL_SUPPORT_EXPLAIN'		=> '<strong>Optional</strong> - Diese Einstellung ist optional, es wird allerdings empfohlen, dass die curl-Bibliothek auf Ihrem Server vorhanden ist, wenn Sie das Downloadmodul im ACP nutzen m&ouml;chten.',
	'PHP_SETTINGS'					=> 'phpBB-Version und PHP-Einstellungen',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Ben&ouml;tigt</strong> - Sie m&uuml;ssen mindestens phpBB in der Version %s benutzen, um die Spielhalle installieren zu k&ouml;nnen.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP-Funktion <var>allow_url_fopen</var> ist aktiviert',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Optional</strong> - Diese Funktion ist optional, es wird allerdings empfohlen, dass sie auf Ihrem Server aktiviert ist, wenn Sie das Downloadmodul im ACP nutzen m&ouml;chten.',

	'REQUIREMENTS_EXPLAIN'	=> 'Bevor die Installation fortgesetzt werden kann, f&uuml;hrt die Spielhalle einige &Uuml;berpr&uuml;fungen auf Ihrem Server durch, um sicherzustellen, dass sie fehlerfrei installiert und ausgef&uuml;hrt werden kann. Bitte lesen Sie alle Hinweise aufmerksam durch und fahren Sie nicht fort, bevor alle ben&ouml;tigten Tests bestanden worden sind. Falls Sie irgendwelche Funktionen nutzen wollen, die vom Bestehen der optionalen &Uuml;berpr&uuml;fungen abh&auml;ngig sind, achten Sie bitte darauf, dass auch diese bestanden werden.',
	'REQUIREMENTS_TITLE'	=> 'Installationsvoraussetzungen',

	'STAGE_INSTALL'						=> 'Installieren',
	'STAGE_INSTALL_ARCADE'				=> 'Installation der phpBB-Spielhalle',
	'STAGE_INSTALL_ARCADE_EXPLAIN'		=> 'Die Tabellen, Module, Berechtigungen und Daten, die von der Spielhalle genutzt werden, wurden erfolgreich erstellt.',
	'STAGE_INTRO'						=> 'Einf&uuml;hrung',
	'STAGE_REQUIREMENTS'				=> 'Voraussetzungen',
	'STAGE_UNINSTALL'					=> 'Deinstallieren',
	'STAGE_UNINSTALL_ARCADE'			=> 'Deinstallation der phpBB-Spielhalle',
	'STAGE_UNINSTALL_ARCADE_EXPLAIN'	=> 'Die Tabellen, Module, Berechtigungen und Daten, die von der Spielhalle genutzt werden, wurden aus der Datenbank entfernt. Um die Deinstallation abzuschlie&szlig;en, m&uuml;ssen Sie alle &Auml;nderungen in den phpBB-Dateien r&uuml;ckg&auml;ngig machen und die Dateien und Verzeichnisse der Spielhalle von Ihrem Server entfernen.',
	'STAGE_UPDATE'						=> 'Aktualisieren',
	'STAGE_UPDATE_ARCADE'				=> 'Aktualisierung der phpBB-Spielhalle',
	'STAGE_UPDATE_ARCADE_EXPLAIN'		=> 'Die Spielhalle wurde auf die neueste Version aktualisiert',	
	'STAGE_VERIFY'						=> '&Uuml;berpr&uuml;fen',
	'SUB_INTRO'							=> 'Einf&uuml;hrung',
	'SUB_LICENSE'						=> 'Lizenz',
	'SUB_SUPPORT'						=> 'Unterst&uuml;tzung',
	'SUPPORT_BODY'						=> 'Vollst&auml;ndige, kostenlose Unterst&uuml;tzung wird f&uuml;r die aktuelle stabile und die Entwicklerversion der Spielhalle angeboten. Sie beinhaltet:</p><ul><li>Installation</li><li>Konfiguration</li><li>Technische Fragen</li><li>Probleme in Verbindung mit m&ouml;glichen Fehlern in der Spielhalle</li><li>Aktualisieren von &auml;lteren Versionen auf die neueste Version</li></ul><p>Ich rufe alle Nutzer der Spielhalle auf, die noch mit einer &auml;lteren Version arbeiten, auf die jeweils neueste Version zu aktualisieren.</p><h2>Unterst&uuml;tzung erhalten</h2><p><a href="http://www.jeffrusso.net/forum/viewforum.php?f=20">Entwicklerforum</a><br /><a href="http://www.phpbb.com/community/viewtopic.php?f=70&amp;t=685225">Thema auf phpBB.com</a><br />Benutzerhandbuch (zu finden im phpBB-ACP)<br /><br />',

	'UNAVAILABLE'					=> 'Nicht verf&uuml;gbar',
	'UNINSTALL_CONGRATS_EXPLAIN'	=> '
		<p>Sie haben die phpBB-Spielhalle %1$s erfolgreich deinstalliert.</p>
		<p>Wenn Sie auf den Button unten klicken, werden Sie in Ihr Administrationszentrum (ACP) weitergeleitet. Nehmen Sie sich ein paar Minuten, um sich mit den verf&uuml;gbaren Optionen vertraut zu machen. <p><strong>Sie m&uuml;ssen das Installationsverzeichnis nun l&ouml;schen, verschieben oder umbenennen, bevor Sie Ihr Forum benutzen k&ouml;nnen. So lange dieses Verzeichnis vorhanden ist, k&ouml;nnen Sie nur auf das ACP zugreifen.</strong></p>',
	'UNINSTALL_INTRO'				=> 'Willkommen zur Deinstallation der phpBB-Spielhalle',
	'UNINSTALL_INTRO_BODY'			=> 'Mit dieser Option k&ouml;nnen Sie die Spielhalle aus Ihrer Datenbank entfernen.',
	'UNINSTALL_START'				=> 'Deinstallation beginnen',
	'UNWRITABLE'					=> 'Nicht beschreibbar',
	'UPDATE_CONGRATS_EXPLAIN'		=> '
		<p>Sie haben erfolgreich auf die Spielhallenversion %1$s aktualisiert.</p>
		<p>Wenn Sie auf den Button unten klicken, werden Sie in Ihr Administrationszentrum (ACP) weitergeleitet. Nehmen Sie sich ein paar Minuten, um sich mit den verf&uuml;gbaren Optionen vertraut zu machen.</p><p><strong>Sie m&uuml;ssen das Installationsverzeichnis nun l&ouml;schen, verschieben oder umbenennen, bevor Sie Ihr Forum benutzen k&ouml;nnen. So lange dieses Verzeichnis vorhanden ist, k&ouml;nnen Sie nur auf das ACP zugreifen.</strong></p>',
	'UPDATE_INTRO'					=> 'Willkommen zur Aktualisierung der phpBB-Spielhalle',
	'UPDATE_INTRO_BODY'				=> 'Mit dieser Option k&ouml;nnen Sie die Spielhalle auf die neueste Version aktualisieren.',
	'UPDATE_START'					=> 'Aktualisierung beginnen',

	'VERIFY_ALL_FILES'						=> 'Alle Dateien gefunden',
	'VERIFY_ALL_FILES_EDITED'				=> 'Alle Dateien wurden ge&auml;ndert',
	'VERIFY_ALL_MODULES'					=> 'Alle Module gefunden',
	'VERIFY_ALL_PERMISSIONS'				=> 'Alle Berechtigungen gefunden',
	'VERIFY_ALL_TABLES'						=> 'Alle Tabellen gefunden',
	'VERIFY_ARCADE_INSTALLATION' 			=> '&Uuml;berpr&uuml;fe Installation',
	'VERIFY_ARCADE_INSTALLATION_EXPLAIN'	=> 'Dies stellt sicher, dass die Spielhalle vollst&auml;ndig und korrekt installiert ist.',
	'VERIFY_CONGRATS_EXPLAIN'				=> '
		<p>Sie haben die Installation der Spielhalle %1$s erfolgreich &uuml;berpr&uuml;ft.</p>
		<p>Wenn Sie auf den Button unten klicken, werden Sie in Ihr Administrationszentrum (ACP) weitergeleitet. Nehmen Sie sich ein paar Minuten, um sich mit den verf&uuml;gbaren Optionen vertraut zu machen.</p><p><strong>Sie m&uuml;ssen das Installationsverzeichnis nun l&ouml;schen, verschieben oder umbenennen, bevor Sie Ihr Forum benutzen k&ouml;nnen. So lange dieses Verzeichnis vorhanden ist, k&ouml;nnen Sie nur auf das ACP zugreifen.</strong></p>',
	'VERIFY_DUPLICATE_ARCADE_PERMISSIONS'	=> 'Pr&uuml;fe, ob doppelte Spielhallen-Berechtigungen vorhanden sind',
	'VERIFY_DUPLICATE_PERMISSIONS'			=> 'Pr&uuml;fe, ob doppelte phpBB-Berechtigungen vorhanden sind',
	'VERIFY_ERRORS'							=> 'Nicht erfolgreich!',
	'VERIFY_ERRORS_EXPLAIN'					=> '
		<p>Sie haben die Spielhalle %1$s nicht erfolgreich installiert.</p>
		<p>Wenn Sie auf den Button unten klicken, wird Ihre Installation erneut &uuml;berpr&uuml;ft.</p><p><strong>Bitte beheben Sie zun&auml;chst die unten angezeigten Fehler.</strong></p>',
	'VERIFY_FILES_EDITED'					=> 'Pr&uuml;fe, ob n&ouml;tige &Auml;nderungen vorgenommen wurden',
	'VERIFY_FILES_EXIST'					=> 'Pr&uuml;fe, ob Dateien existieren',
	'VERIFY_FOUND_DUPLICATE_PERMISSIONS'	=> 'Doppelte Authwerte k&ouml;nnen Probleme mit den Berechtigungen verursachen. Folgende doppelte Werte wurden in der Tabelle %s gefunden:<br />%s',
	'VERIFY_INTRO'							=> 'Willkommen zur &Uuml;berpr&uuml;fung der Spielhalleninstallation',
	'VERIFY_INTRO_BODY'						=> 'Mit dieser Option k&ouml;nnen Sie &uuml;berpr&uuml;fen, ob die Spielhalle auf Ihrem Server korrekt eingerichtet ist.',
	'VERIFY_MISSING_FILES'					=> 'Folgende Dateien fehlten:<br />%s',
	'VERIFY_MISSING_FILES_EDITED'			=> 'Folgende Dateien scheinen nicht ge&auml;ndert worden zu sein:<br />%s',
	'VERIFY_MISSING_MODULES'				=> 'Folgende Module fehlten:<br />%s',
	'VERIFY_MISSING_PERMISSIONS'			=> 'Folgende Berechtigungen fehlten:<br />%s',
	'VERIFY_MISSING_TABLES'					=> 'Folgende Tabellen fehlten:<br />%s',
	'VERIFY_MODULES'						=> 'Pr&uuml;fe, ob alle Module existieren',
	'VERIFY_NO_DUPLICATE_PERMISSIONS'		=> 'Keine doppelten Berechtigungen gefunden',
	'VERIFY_OTHER_DB_DATA'					=> 'Pr&uuml;fe weitere Daten',
	'VERIFY_PERMISSIONS'					=> 'Pr&uuml;fe, ob alle Berechtigungen existieren',
	'VERIFY_TABLES_EXIST'					=> 'Pr&uuml;fe, ob Tabellen existieren',
	'VERIFY_TABLE_ALTERED'					=> 'Tabelle %s korrekt ge&auml;ndert',
	'VERIFY_TABLE_NOT_ALTERED'				=> 'Folgende Spalten fehlen in der Tabelle %s:<br />%s',
	'VERSION'								=> 'Version',

	'WELCOME_INSTALL'	=> 'Welcome to phpBB Arcade Installation',
	'WRITABLE'			=> 'Beschreibbar',
));

?>