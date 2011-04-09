<?PHP

/** 
*
* @mod package		Download Mod 6
* @file				dl_help.php 16 2011/01/06 OXPUS
* @copyright		(c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* @copyright mod	(c) hotschi / demolition fabi / oxpus
* @license			http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/*
* [ german ] language file for Download MOD 6
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

/*
* no help found?
*/
$lang = array_merge($lang, array(
	'HELP_TITLE' => 'Download MOD Online Hilfe',

	'DL_NO_HELP_AVIABLE' => 'Für dieses Thema steht keine Hilfe zur Verfügung.',

	'HELP_DL_ACTIVE_EXPLAIN'	=> 'Schaltet den Download Bereich in Abhängigkeit der nachfolgenden Optionen ein oder aus.',
	'HELP_DL_ANTISPAM'		=> 'Diese Option verhindert das Herunterladen von Dateien, für die der Benutzer eine gewisse Anzahl an Beiträgen im Forum verfasst haben muss, diese Anzahl Beiträge jedoch erst in den letzten Stunden im Forum hinterlassen hat.<br /><br />Beispiel:<br />Eingestellt werden 25 Beiträge in 24 Stunden.<br />Dadurch werden nicht freie Downloads, für die der Benutzer neben ausreichend Traffic auch die eingestellte Mindesanzahl Beiträge im Forum benötigt, dem Benutzer dann verwehrt, wenn er in den letzten 24 Stunden 25 und mehr Foren-Beiträge verfasst hat.<br />Somit soll verhindert werden, dass gerade Benutzer, die sich neu am Forum angemeldet haben, im Forum spammen, um die nötige Anzahl Beiträge zum Download bestimmter Dateien erreichen können, ohne dass dieses einem Teammitglied auffällt und weitere Maßnahmen ergriffen werden können.<br />Der Download wird dazu absichtlich für den Benutzer nicht als gesperrt angezeigt, so dass er in die Versuchung geführt wird, die Datei herunterladen zu können. Er erhält allerdings dann eine Meldung über fehlende Zugriffsberechtigungen.<br /><br />Um diese Prüfung abzuschalten, stelle mindestens einen der beiden Werte auf 0 ein.',
	'HELP_DL_APPROVE' => 'Diese Einstellung gibt den Download sofort frei, wenn Du dieses Formular absendest.<br />Andernfalls wird dieser Downloads vor den Benutzern versteckt, bis ein Administrator oder Download Moderator den Download freigibt.',
	'HELP_DL_APPROVE_COMMENTS' => 'Wenn Du diese Option deaktivierst, müssen neue Kommentare zunächst von einem Download Moderator oder Administrator freigegeben werden, bevor diese angezeigt werden.',

	'HELP_DL_BUG_TRACKER_CAT' => 'Aktiviert den Bug Tracker für die Downloads dieser Kategorie.<br />Bugs kann dann jeder registrierte Benutzer für den betreffenden Download einstellen, ansehen und auch für alle anderen Kategorien betrachten, sofern auch dort der Bug Tracker aktiviert wurde.<br />Bearbeiten können die Einträge nur Administratoren und Board Moderatoren.<br />Über Änderungen an Bugmeldungen werden dem Urheber betreffende Nachrichten per Email verschickt, ebenso wie an das Teammitglied, welchem ein Bug zugewiesen wurde.',

	'HELP_DL_CAT_DESCRIPTION' => 'Eine kurze Beschreibung für diese Kategorie.<br />BBCodes sind hier nicht verfügbar.<br />Diese Beschreibung wird auf dem Downloads Index und in den Subkategorien angezeigt.',
	'HELP_DL_CAT_ICON' => 'Das Icon für die Kategorie muss ein Icon sein, welches bereits in das Forum hochgeladen wurde. Z. B. unter /images/dl_icons/ (Dieser Ordner wäre dann zunächst anzulegen).<br />Dazu ist die relative URL ab dem Forum-Root anzugeben, also z. B. images/dl_icon.gif.<br /><br />Verwendet werden dürfen dabei alle Bildtypen, die Webbrowser darstellen können.<br />Empfohlen wird an dieser Stelle JPG, GIF oder PNG.<br />Bedenke auch dabei die Grösse der Icons, um das Layout auf dem Download Index nicht all zu sehr zu zerstören, da die Icons in der Grösse nicht umgewandelt werden.',
	'HELP_DL_CAT_NAME' => 'Dies ist der Name der Kategorie, der überall angezeigt wird.<br />Verwende möglichst keine Sonderzeichen, um keine schwerer zu lesenden Einträge in der Jumpbox zu generieren.',
	'HELP_DL_CAT_PARENT' => 'Die oberste Ebene oder eine Kategorie, der diese Kategorie zugordnet werden kann.<br />Mit dieser dynamischen Auswahlliste können hierarchische Strukturen für Deine Downloads erstellt werden.',
	'HELP_DL_CAT_PATH' => 'Hier musst Du einen existierenden Pfad für Deine Downloads angeben.<br />Diese Angabe ist der Name eines Subordners unterhalb des Hauptordners (z. B. downloads/), den Du in der allgemeinen Konfiguration angegeben hast.<br />Trage hier nur den Ordnernamen des Subordners mit einem Slash am Ende ein.<br />Zum Beispiel existiert der Ordner "downloads/mods/" den Du als Kategoriepfad "mods/" angeben mußt.<br />Wenn Du dieses Formular absendest, wird der Ordner überprüft. Stelle daher wirklich sicher, daß der Subordner bereits existiert!<br />Wenn der Subordner unterhalb eines anderen Subordners vorhanden ist, dann gib den kompletten Pfad der Hierarchie an.<br />Z. B. wird dann aus "downloads/mods/misc/" der Kategoriepfad "mods/misc/".<br />Versichere Dich, daß jeder Subordner die Zugriffsrechte CHMOD 777 besitzt und achte auf Groß- und Kleinschreibung der Ordnernamen, wenn Du Unix/Linux verwendest.',
	'HELP_DL_CAT_RULES' => 'Diese Regeln werden während der Kategorieansicht oberhalb der Unterkategorien und Downloads angezeigt.',
	'HELP_DL_CAT_TRAFFIC' => 'Gib hier den monatlich maximalen Traffic für diese Kategorie an.<br />Dieser Traffic erhöht nicht den Gesamttraffic!<br />Trage hier 0 ein, um die Begrenzung abzuschalten.',
	'HELP_DL_CHOOSE_CATEGORY' => 'Wähle die Kategorie, die den Download beinhalten soll.<br />Die Datei muss sich bereits in dem Ordner befinden, den Du in der Kategorieverwaltung für die gewählte Kategorie angeben hast, bevor Du diesen Download speicherst.<br />Andernfalls bekommst Du eine Fehlermeldung.',
	'HELP_DL_COMMENTS' => 'Aktiviert das Kommentarsystem für diese Kategorie.<br />Benutzer die Du gemäß den nachfolgenden Drop Downs zulässt, können Kommentare ansehen und/oder verfassen.<br />Administratoren und Dowload Moderatoren können alle Kommentare löschen und bearbeiten, die Autoren dagegen nur ihren eigenen Texte bearbeiten.',
	'HELP_DL_COPY_PERMISSIONS' => 'Kopiert die Berechtigungen von der angegebenen Kategorie.<br />Wenn die übergeordnete Kategorie angegeben wird, so erhält diese Kategorie die Berechtigungseinstellungen der zuvor angegebenen Kategorie, unter der diese Kategorie eingebunden wird.<br />Ist die zuvor gewählte übergeordnete Kategorie die oberste Ebene, so werden keine Berechtigungen gesetzt. In diesem Fall dann entweder eine andere Kategorie auswählen oder die Berechtigungen für diese Kategorie mit dem Modul Berechtigungen einstellen.', 

	'HELP_DL_DELAY_AUTO_TRAFFIC' => 'Gib hier die Anzahl Tage ein, nach denen ein neuer User den ersten automatischen Traffic erhält.<br />Der Zeitraum beginnt mit dem Registrierungsdatum.<br />Gib hier 0 ein, um diese Verzögerung zu deaktivieren.',
	'HELP_DL_DELAY_POST_TRAFFIC' => 'Gib hier die Anzahl Tage ein, nach denen ein neuer User den ersten Traffic für erstellte Beiträge erhält.<br />Der Zeitraum beginnt mit dem Registrierungsdatum.<br />Gib hier 0 ein, um diese Verzögerung zu deaktivieren.',
	'HELP_DL_DISABLE_EMAIL' => 'Mit dieser Option kannst Du die Benachrichtigungen per Email für neue, bzw. geänderte Downloads ein- oder komplett abschalten.<br />Ist diese Funktion eingeschaltet, kann beim Bearbeiten eines Downloads dieses individuell abgeschaltet werden.<br />Benachrichtigt werden bei aktivierter Funktion jedoch nur die User, die über neue, bzw. geänderte Downloads eine Email erhalten wollen.<br />Die benutzerbezogenen Einstellungen sind hierfür in der Download Konfiguration zu finden, die jeder Benutzer im Fußbereich der Downloads aufrufen kann.',
	'HELP_DL_DISABLE_EMAIL_FILES' => 'Wähle diese Option, um die Email Benachrichtigung zu unterdrücken.<br />Dieses betrifft nicht die Bearbeitungszeit oder die Popup Benachrichtigung/Board Nachricht.',
	'HELP_DL_DISABLE_POPUP' => 'Mit dieser Option kannst Du Benachrichtigungen mittels Popup oder Board Nachricht im Forum Kopf für neue, bzw. geänderte Downloads ein- oder komplett abschalten.<br />Ist diese Funktion eingeschaltet, kann beim Bearbeiten eines Downloads dieses individuell abgeschaltet werden.<br />Benachrichtigt werden bei aktivierter Funktion jedoch nur die User, die über neue, bzw. geänderte Downloads das Popup/die Board Nachricht aktiviert haben.<br />Die benutzerbezogenen Einstellungen sind hierfür in der Download Konfiguration zu finden, die jeder Benutzer im Fußbereich der Downloads aufrufen kann.',
	'HELP_DL_DISABLE_POPUP_FILES' => 'Wähle diese Option, um die Popup Benachrichtigung/Board Nachricht zu unterdrücken.<br />Dieses betrifft nicht die Bearbeitungszeit oder die Email Benachrichtigungen.',
	'HELP_DL_DISABLE_POPUP_NOTIFY' => 'Wird diese Option eingeschaltet, kann man beim Bearbeiten eines Downloads das Protokolieren der Bearbeitungszeit unterbunden werden.',
	'HELP_DL_DROP_TRAFFIC_POSTDEL' => 'Wird ein Post oder gar Topic gelöscht, so kann man mit dieser Option entscheiden, ob dem betreffenden Autoren (Beim Topic nur dem Autor des Topics selber!) der Traffic, den der für das Posten bekommen würde, im gleichen Maße abgezogen werden soll.<br />Bedenke dabei, daß der Benutzer ursprünglich eine andere Gutschrift erhalten haben könnte, wie aktuell eingestellt ist und daher der Abzug davon abweichen kann!',

	'HELP_DL_EDIT_OWN_DOWNLOADS' => 'Wenn diese Option eingeschaltet wird, kann jeder Benutzer seine eigenen hochgeladenen Dateien bearbeiten, ohne selber Administrator oder Download Moderator zu sein.<br />Löschen, verschieben und sperren kann die Downloads dann aber weiterhin nur ein Administrator oder Download Moderator.',
	'HELP_DL_EDIT_TIME' => 'Trage hier die Anzahl Tage ein, die ein geänderter Download markiert bleibt.<br />Gib 0 ein, um diese Funktion abzuschalten.',
	'HELP_DL_ENABLE_POST_TRAFFIC' => 'Gib mit den folgenden beiden Optionen den Traffic an, den Benutzer erhalten, wenn die ein neues Topic erstellen oder darin antworten, bzw. zitieren.',
	'HELP_DL_ENABLE_TOPIC'	=> 'Ermöglicht es, bei jedem neuen Download, der hochgeladen oder im Admininstration Bereich eingestellt wurde, ein neues Thema in dem nachfolgend eingestellten Forum mit dem angegebenen Text zu erstellen.<br />Wird ein Download nicht sofort freigegeben, so wird das Thema erst mit Freigabe des Download über das Moderationspanel erstellt.',
	'HELP_DL_EXT_NEW_WINDOW' => 'Öffnet externe Downloads entweder in einem neuen Browserfenster oder lädt diese im im aktuellen Fenster.',
	'HELP_DL_EXTERN' => 'Aktiviere diese Funtion, wenn du in der obigen Zeile eine URL ausserhalb Deines Servers angeben willst (http://www.beispiel.de/media.mp3).<br />Die Funktion "frei" wird dann bedeutungslos.',
	'HELP_DL_EXTERN_UP' => 'Aktiviere diese Funktion, wenn du in dem nachfolgenden Feld eine URL ausserhalb Deines Servers angeben willst (http://www.beispiel.de/media.mp3).<br />Die Funktion "frei" wird dann bedeutungslos.',

	'HELP_DL_FILE_DESCRIPTION' => 'Eine kurze Beschreibung des Downloads.<br />Diese wird auch in der Kategorie angezeigt.<br />BBCodes sind für diesen Text nicht verfügbar.<br />Bitte verfasst einen möglichst kurzen Text, um beim Öffnen der Kategorie die Ladezeit gering zu halten.',
	'HELP_DL_FILES_URL' => 'Der Dateiname des Downloads.<br />Gib ihn ohne Pfadangaben und ohne führenden Slash an.<br />Die Datei muss vor dem Speichern bereits im Ordner der Kategorie existieren, sonst wird eine Fehlermeldung angezeigt.<br />Beachte auch verbotene Dateiendungen: Dateien, die hierzu zählen, werden abgewiesen.',

	'HELP_DL_GUEST_STATS_SHOW' => 'Diese Option inkludiert oder exkludiert die Statistikdaten über Gastaktivitäten in den öffentlichen Kategoriestatistiken.<br />Das Script blendet die Daten dabei nur aus, erhebt aber weiterhin alle Daten.<br />Das ACP Statistiktool zeigt dazu immer die kompletten Statistikdaten an.',

	'HELP_DL_HACK_AUTOR' => 'Der Autor der Download Datei.<br />Lasse ihn frei, um die Angabe in den Download Details und der Gesamtübersicht auszusparen.',
	'HELP_DL_HACK_AUTOR_EMAIL' => 'Email-Adresse des Autoren.<br />Wird diese nicht angegeben, lässt der MOD diese in den Details und in der Gesamtübersicht ebenfalls aus.',
	'HELP_DL_HACK_AUTOR_WEBSITE' => 'Webseite des Autoren.<br />Diese URL sollte auf die Webseite, nicht auf die Seite des Downloads verweisen (sind nicht immer die gleichen).<br />Bitte verlinke keine geschützten Seiten oder Seiten mit fragwürdigen Inhalten.',
	'HELP_DL_HACK_DL_URL' => 'Die Seite zum alternativen Download der Datei.<br />Dieses kann die Seite des Autoren sein oder eine andere Alternative sein.<br />Bitte keine Dateien direkt verlinken, wenn der Autor das ausdrücklich untersagt.',
	'HELP_DL_HACK_VERSION' => 'Angabe über die Version des Downloads.<br />Diese wird nur bei den Downloads angezeigt.<br />Es kann nicht danach gesucht werden.',
	'HELP_DL_HACKLIST' => 'Mit dieser Option kannst Du den Download zur Hackliste hinzufügen (diese muss in der allgemeinen Konfiguration des MODs aktiviert sein), wenn Du hier Ja auswählst.<br />Nein fügt diesen Download nicht zur Hackliste hinzu und Extra Informationen anzeigen stellt diesen Block nur in den Download Details dar.',
	'HELP_DL_HOTLINK_ACTION' => 'Hier wird eingestellt, wie sich das Download Script verhalten soll, wenn ein Direktlink zum Download abgefangen wurde (siehe letzte Option).<br />Es wird dann entweder eine Meldung angezeigt (verringert die Serverlast) oder zum Download weitergeleitet (erzeugt zusätzlichen Traffic).',

	'HELP_DL_ICON_FREE_FOR_REG' => 'Diese Option schaltet das weiße Download Icon (freier Download für registrierte Benutzer) ebenfalls für Gäste auf weiß.<br />Wenn Du diese Option deaktivierst, sehen Gäste hier das rote Icon anstelle des Weissen.',
	'HELP_DL_IS_FREE' => 'Aktiviere diese Funktion, wenn der Download unabhängig des Kontos für alle Benutzer möglich sein soll.<br />Wähle frei für reg. Benutzer, um nur registrierten Benutzern einen freien Download zu ermöglichen.',

	'HELP_DL_KLICKS_RESET' => 'Hiermit können die Klicks für den aktuellen Monat wieder auf 0 gesetzt werden.<br />Diese Option ist dann sinnvoll, wenn man die Downloads für neue Dateiversionen sofort überwachen will.',
 
	'HELP_DL_LATEST_COMMENTS' => 'Zeigt die letzten X Kommentare in den Download Details. 0 schaltete diesen Block aus.',
	'HELP_DL_LIMIT_DESC_ON_INDEX' => 'Schneidet die Download Beschreibungen in den Kategorien nach der hier angegebene Anzahl Zeichen ab.<br />Gib 0 an, um diese Funktion zu deaktivieren.',
	'HELP_DL_LINKS_PER_PAGE' => 'Hiermit wird eingestellt, wieviele Downloads in den Kategorien und der ACP Statistik je angezeigter Seite aufgelistet werden.<br />In der Hackliste und in der Gesamtübersicht wird hierzu die Boardeinstellung "Themen je Seite" verwendet.',

	'HELP_DL_METHOD' => 'Die Methode "alt" sendet die Datei zum Webclient wie sie ist. Diese Methode ist kompatibel zu den meisten Umgebungen, zeigt aber nicht die wirkliche Dateigrösse während des Downloads an. Damit kann der Browser des Users auch nicht die Dauer des Downloads errechnen.<br />Die Methode "neu" zeigt hingegen die echte Dateigrösse an, kann aber Fehler verursachen.<br />Benutze die Methode "alt", wenn Du Probleme mit der neuen Downloadmethode hast.<br />Sollten alle Stricke reissen und sehr grosse Dateien nicht heruntergeladen werden können, so klicke "direkt" an. Mit dieser Methode werden Downloads, die grösser als das aktuell eingestellte Download Limit von PHP sind, direkt verlinkt, um sie ohne Umwege herunterladen zu können.',
	'HELP_DL_METHOD_QUOTA' => 'Trage hier die Dateigrösse ein, ab der die Chunked File Read Funktion für große Dateien verwendet werden soll. Dieses wird nur für die Methode "neu" verwendest.<br />Unterhalb dieser Grenze wird die Datei mittels readfile(), ausgelesen und damit an einem Stück an den Browser des Users geschickt.',
	'HELP_DL_MOD_DESC' => 'Ausführliche Beschreibung zu der hier eingetragenen MOD.<br />In der Beschreibung können BBCodes und Smilies verwendet werden, Zeilenumbrüche werden ebenfalls berücksichtigt.<br />Diese Angaben werden nur in den Download Details angezeigt.',
	'HELP_DL_MOD_DESC_ALLOW' => 'Aktiviert einen Block für MOD Informationen während dem Hinzufügen oder Bearbeiten von Downloads.',
	'HELP_DL_MOD_LIST' => 'Aktiviert diesen Block in den Download Details.<br />Wenn diese Option nicht gewählt ist, wird der gesamte Block in den Download Details ausgeblendet.',
	'HELP_DL_MOD_REQUIRE' => 'Angaben, welche weiteren MODs dieser Download benötigt, um installiert oder benutzt werden zu können.<br />Diese Angaben werden nur in den Download Details angezeigt.',
	'HELP_DL_MOD_TEST' => 'Angabe zur Testumgebung dieses Downloads.<br />Hiermit ist die Forenversion gemeint.<br />Umgesetzt wird dieses als phpBB X, wobei X hier anzugeben wäre.<br />Diese Angaben werden nur in den Download Details angezeigt.',
	'HELP_DL_MOD_TODO' => 'Hier können die nächsten Tätigkeiten an der MOD angegeben werden, die geplant sind oder aktuell anstehen.<br />Aus diesen Angaben wird die ToDo Liste erstellt, die im Fußbereich der Download aufgerufen werden kann.<br />Mit diesen Angaben kann man anderen Usern den Stand der eigenen MODs aufzeigen.<br />Zeilenumbrüche werden hierbei berücksichtigt, BBCodes sind hier nicht verfügbar.<br />Die ToDo-Liste wird auch dann mit diesen Angaben versorgt, wenn der MOD Block nicht aktiviert wurde.',
	'HELP_DL_MOD_WARNING' => 'Wichtige Hinweise zur MOD, die unbedingt bei der Installation, Benutzung oder im Zusammenspiel mit anderen MODs zu beachten sind.<br />Dieser Text wird farbig hervorgehoben in den Download Details angezeigt (im Original mit roter Schrift).<br />Zeilenumbrüche werden hierbei berücksichtigt, BBCodes sind hier nicht verfügbar.',
	'HELP_DL_MUST_APPROVE' => 'Aktiviere diese Option, um neu hochgeladene Download Dateien freizugeben, bevor sie in dieser Kategorie angezeigt werden.<br />Administratoren und Download Moderatoren erhalten über jeden neuen nicht freigegebenen Download eine Email.',

	'HELP_DL_NAME' => 'Dies ist der Name des Downloads, der überall angezeigt wird.<br />Verwende möglichst keine Sonderzeichen, um Fehler bei der Darstellung zu vermeiden.',
	'HELP_DL_NEW_TIME' => 'Trage hier die Anzahl Tage ein, die ein Download nach dem hinzufügen als neu markiert bleibt.<br />Trage 0 ein, um diese Funktion abzuschalten.',
	'HELP_DL_NEWTOPIC_TRAFFIC' => 'Für jedes neue Topic, das gepostet wird, bekommt der Autor den hier eingestellten Traffic auf seinem Konto gutgeschrieben.',
	'HELP_DL_NO_CHANGE_EDIT_TIME' => 'Wähle diese Option, um die Aktualisierung der Bearbeitungszeit zu unterdrücken.<br />Dieses betrifft nicht die Email und Popup Benachrichtigung/Board Nachricht.',

	'HELP_DL_OFF_HIDE_EXPLAIN'			=> 'Schaltet den Link in der Boardnavigation ab, um den Download Bereich zu verstecken.<br />Andernfalls wird beim Aufruf des Download Bereiches eine Meldung angezeigt.',
	'HELP_DL_OFF_NOW_TIME_EXPLAIN'		=> 'Schaltet die Download MOD sofort ab oder immer zwischen den nachfolgend eingestellten Uhrzeiten.',
	'HELP_DL_OFF_TIME_PERIOD_EXPLAIN'	=> 'Zeitspanne, in der der Download Bereich automatisch deaktiviert wird.',
	'HELP_DL_ON_ADMINS_EXPLAIN'			=> 'Erlaubt den Board-Administratoren weiterhin den Download Bereich zu betreten und darin zu arbeiten, auch wenn dieser deaktiviert ist.<br />Andernfalls werden auch diese Benutzer ausgesperrt.',
	'HELP_DL_OVERALL_TRAFFIC' => 'Das Limit des gesamten Traffics für registrierte Benutzer für alle Downloads und, sofern eingestellt, auch Uploads, der im aktuellen Monat nicht überschritten werden darf.<br />Wenn dieses Limit erreicht ist, wird jeder Download markiert und gesperrt.<br />Uploads werden dann, je nach Einstellung, ebenfalls nicht mehr möglich sein.',
	'HELP_DL_OVERALL_GUEST_TRAFFIC' => 'Das Limit des gesamten Traffics für Gäste für alle Downloads und, sofern eingestellt, auch Uploads, der im aktuellen Monat nicht überschritten werden darf.<br />Wenn dieses Limit erreicht ist, wird jeder Download markiert und gesperrt.<br />Uploads werden dann, je nach Einstellung, ebenfalls nicht mehr möglich sein.',

	'HELP_DL_PHYSICAL_QUOTA' => 'Das gesamte physische Limit, die der MOD zum Speichern und Verwalten der Downloads verwenden darf.<br />Wenn dieses Limit erreicht ist, können neue Download nur noch hinzugefügt werden, wenn sie per FTP Client hochgeladen und im ACP mit der Dateiverwaltung hinzugefügt werden.',
	'HELP_DL_POSTS' => 'Jeder Benutzer, auch jeder Administrator und Download Moderator, muss mindestens diese Anzahl Beiträge gepostet haben, um in der Lage zu sein, nicht freie Downloads herunterladen zu können.<br />Es wird dazu dringend empfohlen einen Anti Spam MOD zu installieren, um Spammern einhalt zu gebieten.<br />Gib hier 0 ein, um diese Funktion abzuschalten.<br />Diese Einstellung ist empfehlenswert für noch junge Boards.',
	'HELP_DL_PREVENT_HOTLINK' => 'Aktiviere diese Option, wenn Du Links zum direkten Download ausser aus den Download Details unterbinden willst.<br />Diese Option richtet <b>keinen</b> Verzeichnisschutz ein!',

	'HELP_DL_REPLY_TRAFFIC' => 'Der Benutzer bekommt für jede Antwort und jedes Zitat den hier eingestellten Traffic auf seinem Konto gutgeschrieben.',
	'HELP_DL_REPORT_BROKEN' => 'Schalte die Möglichkeit an oder aus, defekte Downloads zu melden.<br />Wenn Du dieses auf "nicht für Gäste" einstellst, können nur registrierte Benutzer defekte Downloads melden.',
	'HELP_DL_REPORT_BROKEN_LOCK' => 'Wenn diese Option aktiv ist, wird der Download gesperrt, solange er als defekt gemeldet gilt.<br />Dabei wird der Download Button versteckt und kein Benutzer kann diese Datei herunterladen, bis sie von einem Administrator oder Download Moderator wieder entsperrt wurde.',
	'HELP_DL_REPORT_BROKEN_MESSAGE' => 'Wenn ein Download als defekt gemeldet wurde, erscheint eine entsprechende Nachricht.<br />Ist diese Option aktiviert, erscheint diese Nachricht nur, wenn der Download auch gleichzeitig gesperrt wurde.<br />In dem Fall dann nicht unter, sondern anstelle des Download Buttons.',
	'HELP_DL_REPORT_BROKEN_VC' => 'Aktiviert die visuelle Bestätigung, wenn ein Benutzer einen Download als defekt melden will.<br />Nur, wenn der Code dann korrekt angegeben wurde, wird die Meldung gespeichert und den Administratoren, bzw. Download Moderatoren eine Nachricht hierzu gesendet.',

	'HELP_DL_SHORTEN_EXTERN_LINKS' => 'Gib die Länge des angezeigten externen Download Links an.<br />Je nach Länge wird der Link entweder in der Mitte oder von rechts beginnend gekürzt.<br />Lass dieses Feld leer oder gib 0 ein, um diese Funktion abzuschalten.',
	'HELP_DL_SHOW_FOOTER_LEGEND' => 'Diese Option schaltet die Legende mit den Icons für die unterschiedlichen Download Stati im Fußbereich der Downloads ein oder aus.<br />Die Icons bei den Downloads selber werden dadurch nicht beinflusst.',
	'HELP_DL_SHOW_FOOTER_STAT' => 'Diese Option schaltet die Statistikzeilen im Fußbereich des Download MODs ein und aus.<br />Die Statistik wird weiterhin Daten sammeln, selbst wenn Du sie ausschaltest.',
	'HELP_DL_SHOW_REAL_FILETIME' => 'Hiermit wird der wirkliche Zeitpunkt der letzten Änderung an den Download Dateien in den jeweiligen Details angezeigt.<br />Dieses ist die genaueste Angabe, selbst dann, wenn Dateien per FTP hochgeladen oder mehrfach geändert wurden, dieses aber nicht protokolliert wurde.',
	'HELP_DL_SORT_PREFORM' => 'Mit der Option "Voreinstellung" werden die Downloads für alle Benutzer in allen Kategorien gemäß der Sortierung im ACP angezeigt.<br />Mit der Option "Benutzer" kann der jeweiligen Benutzer selber entscheiden, nach welchen Kriterien sortiert wird und ob er diese fest eingestellt oder mit weiteren Auswahlmöglichkeiten haben möchte.',
	'HELP_DL_STAT_PERM' => 'Wähle hier, ab welchem Userlevel die Download Statistiken eingesehen werden darf.<br />Wenn Du diese z. B. erst ab Download Moderatoren aktivierst, kann jeder Board Administrator und Download Moderator (NICHT Forum Moderator!) diese Seite öffnen und ansehen.<br />Beachte, daß diese Seite eine extreme Ladezeit haben kann, so daß empfohlen wird, diese Seite nicht für viele zu öffnen, wenn Du ein grösseres Board betreibst und/oder viele Downloads bereitstellst.',
	'HELP_DL_STATISTICS' => 'Schaltet detailierte Statistiken über die Dateien ein.<br />Beachte, daß diese Statistiken zusätzliche Datenbank Queries benötigen und Datensätze in einer seperaten Tabelle anlegen.',
	'HELP_DL_STATS_PRUNE' => 'Gib hier die Anzahl der Datensätze ein, die die Statistik für diese Kategorie erreichen darf.<br />Jeder neue Datensatz löscht dann den Ältesten.<br />Gib hier 0 ein, um das Pruning zu deaktivieren, dadurch wächst jedoch die Datenbank immer weiter an.',
	'HELP_DL_STOP_UPLOADS' => 'Du kannst mit dieser Option Uploads aktivieren oder gänzlich deaktivieren.<br />Wenn Du dieses deaktivierst, können nur noch Adminitratoren Dateien mit dem Uploadformular hochladen.<br />Wenn diese Option aktiviert wird, können Benutzer nur abhängig der Kategorie- und Gruppenbefugnisse Dateien hochladen.',

	'HELP_DL_THUMB' => 'Dieses Feld kann ein kleines Bild hochladen (beachte die angegebene Dateigrösse und Bildmaße unterhalb dieses Feldes), das in den Download Details angezeigt wird.<br />Wenn bereits ein Thumbnail existiert, kannst Du hiermit ein neues hochladen, um das bestehende Bild zu ersetzen.<br />Wenn Du das bestehende Thumbnail mit "löschen" markierst, wird das alte Bild nur entfernt',
	'HELP_DL_THUMB_CAT' => 'Diese Option lässt Thumbnails bei den Downloads dieser Kategorie zu.<br />Die Grösse der Images ist von den Einstellungen in der allgemeinen Konfiguration des MODs abhängig.',
	'HELP_DL_THUMB_MAX_DIM' => 'Diese Angaben begrenzen die mögliche Bildgrösse der hochgeladener Thumbnails.<br />Gib hier 0 ein, um Thumbnails zu deaktivieren (nicht empfehlenswert, wenn die Thumbsnail Dategrösse angegeben wurde).<br />Bestehende Thumbnails werden nach Änderungen dieser Angaben weiterhin angezeigt, sofern nicht die Dateigrösse auf 0 gesetzt wurde.',
	'HELP_DL_THUMB_MAX_SIZE' => 'Gib  0 als Dateigrösse an, um Thumbnails in allen Kategorien abzuschalten.<br />Wenn Du Thumbnails erlaubst, dann gib in der nächsten Einstellung auch sinnvolle Bildmaße an, die die Thumbnails maximal haben dürfen.<br />Werden Thumbnails deaktiviert, zeigen die Download Details bestehene Thumbnails ebenfalls nicht mehr an.',
	'HELP_DL_TOPIC_DETAILS' => 'Zeigt die Download Beschreibung, Dateiname und Grösse, bzw. bei externen Downloads die URL des Downloads mit im Forum Thema an.<br />Der Text kann dabei über oder unterhalb dem zuvor eingetragenen Text angezeigt werden.<br />Wenn das Thema über die Downloadkategorien angelegt wird, ist diese Option in der allgemeinen Konfiguration nicht relevant.',
	'HELP_DL_TODO_LINK' => 'Schaltet im Fußbereich der Download MOD den Link zur Todoliste an oder aus. Die Todo-Daten und die Verwaltung in den Downloads bleiben hiervon unberührt.',
	'HELP_DL_TOPIC_FORUM'	=> 'Das Forum, in dem alle neue Themen zu den Downloads erstellt werden.<br />Wähle anstelle eines Forums "Kategorieauswahl", um das Forum für Download Topics je Kategorie auswählen zu können.',
	'HELP_DL_TOPIC_FORUM_C'	=> 'Das Forum, in dem alle neue Themen zu den Downloads dieser Kategorie erstellt werden.',
	'HELP_DL_TOPIC_TEXT'	=> 'Freitext, der für die Themen verwendet wird. BBCodes, HTML und Smilies sind hierbei nicht möglich, da es sich lediglich um einen einleitenden Text zum Thema handeln soll.',
	'HELP_DL_TOPIC_USER'	=> 'Wähle hier den Benutzer, der als Autor des Download Themas eingesetzt werden soll.<br />Wenn der aktuelle Benutzer Autor der Themen werden soll, dann ist die Option "Der aktuelle Benutzer" zu verwenden. Die Option über die Kategorie ermöglicht dagegen, einen Benutzer je Kategorie festzulegen. Dieses kann dann wiederum der aktuelle Benutzer sein oder ein anderer Benutzer, der über das Feld rechts neben dem Auswahlfeld mit seiner ID-Nummer vorgegeben wird. Dieses gilt auch, wenn die Auswahl "Benutzer über ID auswählen" angegeben wurde.<br /><br /><strong>Hinweis:</strong><br />Die Benutzer-ID wird durch die Download MOD nicht geprüft. Daher kann eine nicht existierende User-ID zu unerwarteten Störungen führen!',
	'HELP_DL_TRAFFIC' => 'Maximaler Traffic, welcher durch die Datei erzeugt werden darf.<br />Der Wert 0 deaktiviert die Traffickontrolle',
	'HELP_DL_TRAFFIC_OFF' => 'Schaltet die komplette Trafficverwaltung im Download Bereich ab und deaktiviert damit auch alle nachfolgenden Einstellungen zum Traffic.<br />Ist diese Option aktiviert, werden im Forum sämtliche Texte in Bezug auf den Download Traffic ausgeblendet und keine weiteren Trafficgrenzen berücksichtigt. Ebenso werden beim Download und Upload keine Trafficangaben mehr verändert.<br />Zu- oder Abschläge auf den Benutzertraffic beim Verfassen oder Löschen von Beiträgen werden ebenfalls nicht mehr berücksichtigt.<br />Automatisch vergebener Traffic wird mit Abschalten dieser Option nicht mehr den Benutzern zugeteilt. Jedoch kann man Benutzern oder Gruppenmitgliedern im Admininstrations-Bereich weiterhin Traffic setzen oder hinzufügen.<br />Ebenso bleiben im Administrations-Bereich alle Module, Texte und Funktionen für die Trafficverwaltung unverändert bestehen.',

	'HELP_DL_UCONF_LINK' => 'Schaltet im Fubbereich der Download MOD den Link zur Benutzer Konfiguration ab. Die Einstellungen bleiben von dieser Option unberührt.',
	'HELP_DL_UPLOAD_FILE' => 'Die von Deinem Computer hochzuladene Datei.<br />Stelle sicher, daß die Dateigrösse kleiner als die angezeigte Grösse ist und die Dateierweiterung nicht in der Liste enthalten ist, die Du unterhalb dieses Feldes sehen kannst.',
	'HELP_DL_UPLOAD_TRAFFIC_COUNT' => 'Wenn diese Option aktiviert ist, werden auch Uploads vom monatlichen Gesamttraffic abgezogen.<br />Bei Erreichen des Gesamttraffics sind dann Uploads ebenfalls nicht mehr möglich und neue Downloads können nur noch mittels FTP Client hochgeladen und im ACP eingebunden werden.',
	'HELP_DL_USE_EXT_BLACKLIST' => 'Wenn Du die Blackliste aktivierst, werden die eingetragenen Dateiendungen beim Hochladen oder Bearbeiten eines Downloads blockiert.',
	'HELP_DL_USE_HACKLIST' => 'Diese Option schaltet die Hack Liste an oder aus.<br />Wenn sie aktiviert ist, kannst Du beim Hinzufügen oder Bearbeiten eines Downloads Hack Informationen mit erfassen, um den Download in die Hackliste einzufügen.<br />Wenn Du die Hack Liste deaktivierst, wird sie komplett vor allen Benutzern versteckt, als wäre sie nicht vorhanden, sie ist aber jederzeit aktivierbar.<br />Beachte, daß alle Hack Informationen verloren gehen, wenn Du Dateien nach dem Deaktivieren der Hack Liste bearbeitest.',
	'HELP_DL_USER_TRAFFIC_ONCE' => 'Wähle, ob Downloads den Benutzer nur einmal Traffic abziehen sollen und danach nicht mehr erneut.<br /><b>Beachte:</b><br />Diese Option ändert nicht den Status des Downloads selber!',

	'HELP_DL_VISUAL_CONFIRMATION' => 'Aktiviere diese Option, um Benutzer einen angezeigten 5stelligen Bestätigungscode eingeben zulassen, damit der Download der Datei zugelassen wird.<br />Wenn der Benutzer keinen Code eingegeben hat oder der Code falsch ist, wird der MOD nur eine Meldung anzeigen und den Download nicht freigeben.<br />Ist diese Option abgeschaltet, muss der Benutzer keinen Code eingeben und kann direkt aus den Details die Dateien herunterladen.',

	'HELP_DOWNLOAD_PATH' => 'Dieses ist der relative Pfad unterhalb Deines phpBB Root Ordners für die Verwaltung der Downloads.<br />Nach der Neuinstallation dieses Paketes ist hier "dl_mod/downloads/" eingestellt.<br />Berücksichtige bei der Umbenennung dieses Ordners die Groß- und Kleinschreibung, wenn Du unter Unix/Linux arbeitest.<br />Wichtig ist der Slash am Ende des Ordnernamens, füge jedoch keinen Slash am Anfang hinzu.<br />Auch müssen dieser und alle enthaltenen Unterordner die Rechte CHMOD 777 haben, damit alle Funktionen korrekt arbeiten.<br />Unterhalb dieses Ordners ist auch mindestens ein weiterer Ordner anzulegen, der die Dateien physisch beinhaltet.<br />Empfohlen wird zumindest ein Ordner je inhaltlich passender Kategoriegruppe.<br />Dieser Ordner ist dann mit der gleichen Mimik wie auch der Hauptordner als Pfad in den Kategorien einzutragen, allerdings ohne diesen Hauptordner (siehe dazu auch die Hilfe in der Kategorieverwaltung).<br />Du kannst die Unterordner mit einem FTP Client oder mit der Toolbox (siehe Link dahin oben rechts auf dieser Seite) anlegen.',

	'HELP_NUMBER_RECENT_DL_ON_PORTAL' => 'Die Anzahl letzter Downloads, die der Benutzer auf dem Portal sieht.<br />Dabei wird die letzte Änderungszeit der Downloads verwendet, so daß auch ältere Downloads wieder ganz oben auf der Liste stehen können.',
));

?>