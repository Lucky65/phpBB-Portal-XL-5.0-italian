<?PHP
/** 
*
* portal_xl_install.php [GERMAN]
*
* @package language for phpBB3 Portal XL
* @version $Id: portal_xl_install.php,v 1.1.1.1 2009/05/15 04:02:17 damysterious Exp $
* @copyright (c) 2008 DaMysterious
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
	// Portal XL Convert Procedure
	'PORTAL_CONVERT'				=> 'Portal XL Konvertierung',
	'PORTAL_CONVERT_BASIC_FINISHED'	=> 'Die Datenbanken sind nun auf dem neuesten Stand der phpbb3 Funktionen.<br />Das Script wird den Text nicht selber umwandeln.<br /><br />Das Script startet permanent wieder von selbst, um TIMEOUT- oder andere St&ouml;rungen zu vermeiden. Bitte schliesse den Browser nicht, bevor alle Arbeiten komplett abgeschlossen sind.<br /><br />Nur wenn es zu einem vollst&auml;ndigen Abbruch kommt, solltest Du eingreifen!.<br /><br />Bitte &uuml;be also Geduld, da die ganze Prozedur der Konvertierung einige Minuten dauern kann. In der Ruhe liegt die Kraft dieses Scripts.',
	'PORTAL_CONVERT_DATABASE'		=> 'Konvertierungsdatenbank',
	'PORTAL_CONVERT_NOT_POSSIBLE'	=> '<strong>Konvertierung nicht m&ouml;glich!</strong><br /><br />Diese PortalVersion kann nicht konvertiert werden.<br /><br />Als minimum wird Portal XL <strong>Premod RC2</strong> vorrausgesetzt.<br />Deine vorhandene Version ist: Portal XL <strong>%1$s</strong>.<br /><br />Sobald Du durch andere Updates die Version RC2 erreicht hast, kannst Du hiermit fortfahren.',
	'PORTAL_CONVERT_PROCEDURE'		=> 'Gegenw&auml;rtig %1$s von %2$ Datenbanken aktualisiert.<br /><br />Klicke auf den Weiter (Continue) Button, oder warte bis das Script alleine weiter macht.',
	'PORTAL_CONVERT_TODO'			=> 'Nun werden alle existierenden Datenbanken der XL5 Plain zu einer lauff&auml;higen Portal XL4 PreRC5 konvertiert.<br /><br />Um zu starten, klicke auf den Button.<br /><br />Bleibe w&auml;hrend der Prozedur geduldig, die Konvertierung kann mitunter einige Zeit dauern.',
	'PORTAL_FINAL_CONVERT_STEP'		=> 'Die Konvertierung aller n&ouml;tigen Datenbanken des Portal XL5 ist nun beendet.<br />Um die komplette Prozedur abzuschliessen, klicke den Button.',

	// Portal XL Installation Procedure
	'PORTAL_INSTALL'				=> 'Portal XL Installation',

	'PORTAL_INSTALL_EXPLAIN'		=> '<p>Willkommen beim PortalXL Installationsgehilfen (Wizard).<br />Das ist die Installation des Portals XL. Das total verr&uuml;ckte geniale Portal f&uuml;r PHPBB3.</p> 
	<p>Um die INstallation erfolgreich zu gestalten, sind folgende Schritte enorm wichtig:</p>
	<ul>
		<li>Gehe sicher, das alles was zur Installation erforderlich ist sich im Root-Verzeichnis: <strong><span style="color:#FF0000;">\root\</span></strong> in deinem phpbb3 root z.B.. <strong><span style="color:#FF0000;">\forum\</span></strong> befindet!</li>
	</ul>
	<ul>
		<li><em><strong><span style="color:#009900;">Datei Zugriffsrechte (FTP) CHMOD</span></strong></em><br />
		<em>Nach der Installation &uuml;berpr&uuml;fe unbedingt nochmal die Zugriffsrechte auf einem *NIX server. Folgende CHMODS m&uuml;ssen gesetzt sein.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> f&uuml;r</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> f&uuml;r</span></strong>:<br />
		/portal/counter.txt<br />
		/portal/ip.txt<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> f&uuml;r</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li>
	</ul>
	<p>Wenn Du bereit zur Installation bist, klicke Ja und den Button.</p>',
	
	'PORTAL_INSTALL_NEXT'			=> 'Die Datenbank-Tabellen wurden erfolgreich hinzugef&uuml;gt.<br /><br />Klicke nun auf den Button um die ersten Beispieleintr&auml;ge hinzuzuf&uuml;gen.',
	'PORTAL_INSTALL_FINISHED'		=> 'Installation fertig gestellt.',
	'PORTAL_INSTALL_INTRO'			=> 'Willkommen zur Portalinstallation.',

	'PORTAL_INSTALL_FINISHED_EXPLAIN'	=> '
		<p>Du hast das Portal XL 5.0 %1$s erfolgreich installiert. Um das Portal XL VOLL nutzen zu k&ouml;nnen ist folgendes noch unbedingt n&ouml;tig:</p>
		<p><strong style="text-transform: uppercase; font-size:13px; color: #FF0000;">Notiz:</strong></span><br /><br /><span style="font-size:13px; color: #FF0000;">Alle Dateien vom Hauptarchiv <strong>\portal_xl50_files\</strong> m&uuml;ssen noch in das Root-Verzeichnis kopiert werden.</span></p>
		<h2>Go live mit Deinem Portal XL!</h2>
		<p>Ein Klick auf den Button bringt Dich ins ACP. Nimm Dir die Zeit, und schaue Dir alle Funktionen in aller Ruhe an. Wenn Du Hilfe ben&ouml;tigst, wende Dich an: <a href="http://www.portalxl.nl/forum/">Portal XL Home</a> und das <a href="http://www.portalxl.nl/forum/viewforum.php?f=1">support forums</a> f&uuml;r Portal XL 4.0 Premod RC5, oder <a href="http://www.portalxl.nl/forum/viewforum.php?f=44">support forums</a> f&uuml;r Portal XL 5.0 Plain.</p><p><strong>Jetzt ist es an der Zeit, den INSTALL-Ordner zu l&ouml;schen oder selbigen einfach umzubenennen. Solange der Ordner aktiv ist, ist NUR der ACP-Bereich erreichbar.</strong></p>',

	'PORTAL_INSTALL_NOT_POSSIBLE'	=> '<strong>Installation FEHLGESCHLAGEN!</strong><br /><br />Es existiert bereits eine Installation, und das Install-Script kann nicht ein zweites mal ausgef&uuml;hrt werden.',

	'PORTAL_OVERVIEW_BODY'			=> 'Dies ist das neueste <strong>freie</strong> release des phpBB3 Portal XL welches Dein phpBB 3.0.x Forum mit Kraft und Flexibilit&auml;t unterst&uuml;tzen wird. Freue Dich auf viele geniale Features.<br /><br /> 
	Selbstverst&auml;ndlich kannst Du das ausschliesslich mit den vorhandenen Modulen nutzen, oder es aber um viele Module erweitern. Wir bieten eine Alternative zu allen erschienen Boards f&uuml;r PHPBB3. Wir sind nicht einzigartig und auch nicht die Profis schlechthin ... Wir arbeiten hier nur in unsere teuren Freizeit, damit Du ein Portal nutzen kannst, in das wir viel Kraft und Freude gesteckt haben. Jaaaa, es gibt noch kleine Fehler, aber wir arbeiten t&auml;glich an der Vernichtung dieser Bugs. Wenn Du Fehler findest, melde Sie uns!!!
	<p>aktuelle Release-Daten unserer Portale:
	<ul>
		<li>Portal XL 5.0 RC4-Plain along phpBB 3.0.x (26-02-2008 erstes release der Plain version)</li>
		<li>Portal XL 5.0 Plain (12-04-2008)</li>
		<li>Portal XL 5.0 Plain 0.1 (31-05-2008)</li>
		<li>Portal XL 5.0 Plain 0.2 (31-10-2008)</li>
		<li>Portal XL 5.0 Plain 0.2 (01-06-2009) pbpBB 3.0.5</li>
		<li>Portal XL 5.0 Plain 0.2 (24-11-2009) pbpBB 3.0.6</li>
		<li>Portal XL 5.0 Plain 0.2 (02-03-2010) pbpBB 3.0.7</li>
		<li>Portal XL 5.0 Plain 0.2 (21-11-2010) pbpBB 3.0.8</li>
	</ul></p><br />W&auml;hle aus den vorhandenen Tabs, was Du gerne machen m&ouml;chtest.',
	
	'PORTAL_SQL_UPDATE_DONE'		=> '<strong>Erfolgte Datenbankt&auml;tigkeiten:</strong><br />',
	'PORTAL_SUB_SUPPORT'			=> 'General Portal Support',
	'PORTAL_SUPPORT_BODY'			=> 'W&auml;hrend der Release-Testphasen ist der leicht eingeschr&auml;nkte Support unter: <a href="http://www.portalxl.nl/forum/" target="_blank">www.portalxl.nl</a> erreichbar. Dies ist der Ort, an dem gefundene Fehler gemldet werden sollten. Bedenke BITTE, das ist nur ein limitierter support f&uuml;r diese Portalversion mit reinem phpbb3, ohne andere MODS oder ADDONS. <br /><br />Ist das ursprungsboard nicht sauber, kann man keinen sauberen Suport geben, da niemand von uns weiss, was an MODS installiert war, oder welche anderen ver&auml;nderungen gemacht wurden. Bedenke BITTE, das dieser MOD, dieses Portal viele grosse und kleinere Ver&auml;nderungen an deinem Board vornimmt!',

	// Portal XL Update Procedure
	'PORTAL_UPDATE'					=> 'Portal XL Update',
	'PORTAL_UPDATE_SUCCESS'			=> 'Gratulation!<br />Das Update der Datenbank wurde erfolgreich beendet.<br /><br />Du kannst nun die einzelnen Installationen im Portal &uuml;berpr&uuml;fen und Einstellungen vornehmen.<br /><br />Bitte l&ouml;sche den Ordner /install/ vom Root Directory des Forums, und melde dich wieder im Forum an.',
	'PORTAL_UPDATE_BASIC_FINISHED'	=> 'Alle Datenbank wurden nun komplett aktualisiert und sind mit PHPBB3 kompatibel.<br />Das Script wird den Text nicht selber umwandeln.<br /><br />Das Script startet permanent wieder von selbst, um TIMEOUT- oder andere St&ouml;rungen zu vermeiden. Bitte schliesse den Browser nicht, bevor alle Arbeiten komplett abgeschlossen sind.<br /><br />Nur wenn es zu einem vollst&auml;ndigen Abbruch kommt, solltest Du eingreifen!.<br /><br />Bitte &uuml;be also Geduld, da die ganze Prozedur der Konvertierung einige Minuten dauern kann. In der Ruhe liegt die Kraft dieses Scripts.',
	'PORTAL_UPDATE_DATABASE'		=> 'Update der Datenbank f&uuml;r Portal XL',
	'PORTAL_UPDATE_NOT_POSSIBLE'	=> '<strong>Update micht m&ouml;glich!</strong><br /><br />Diese Version des Portals XL kann nicht upgedated werden, weil die jetzige Version f&uuml;r ein Update nicht geeignet ist.<br /><br />Minimum-Release: Portal XL 4.0 <strong>RC4 - Plain</strong><br />Deine Version ist <strong>%1$s</strong>.<br /><br />Solange deine Version nicht Portal XL 4.0 <strong>RC4 - Plain</strong> ist, wirst Du dieses Update verschieben m&uuml;ssen. Also erst ein Update auf RC4 machen... RC2 nach 3,  3nach4 etc.',
	'PORTAL_UPDATE_PROCEDURE'		=> 'Gegenw&auml;rtig %1$s von %2$ Datenbanken aktualisiert.<br /><br />Klicke auf den Weiter (Continue) Button, oder warte bis das Script alleine weiter macht.',
	'PORTAL_UPDATE_TODO'			=> 'Nun werden alle existierenden Datenbanken der XL5 Plain zu einer lauff&auml;higen Portal XL4 PreRC5 aktualisiert.<br /><br />Um zu starten, klicke auf den Button.<br /><br />Bleibe w&auml;hrend der Prozedur geduldig, die Konvertierung kann mitunter einige Zeit dauern',
	'PORTAL_FINAL_UPDATE_STEP'		=> 'Die Aktualisierung aller n&ouml;tigen Datenbanken des Portal XL5 ist nun beendet.<br />Um die komplette Prozedur abzuschliessen, klicke den Button.',

	// Portal XL Remove Database Entries Procedure
	'PORTAL_REMOVE'					=> 'Portal XL deinstallieren',
	'PORTAL_REMOVE_NOT_POSSIBLE'	=> '<strong>Deinstallierung nicht m&ouml;glich!</strong><br /><br />Deine Portal Version ist: <strong>%1$s</strong><br /><br />Deine vorhandene PortalVersion sollte mindestens sein: <strong>%1$s</strong>, um alle DatenbankTabellen zu deinstallieren.<br /><br />Bitte installiere die minimum Installation, um die gew&uuml;nschte Prozedur von hier aus zu starten.',
	'PORTAL_REMOVE_SUCCESS'			=> 'Gratulation!<br />Die Deinstallierung war erfolgreich.<br /><br />.Begib dich nun dran, &uuml;berreste der Installation zu entfernen.<br /><br />Den /install/ Ordner des Root-Verzeichnisses BITTE l&ouml;schen',

	'PORTAL_REMOVE_TODO'			=> 'Die Datenbankeintr&auml;ge wurden erfolgreich entfernt, anhand der folgenden Schritte entfernen wir nun die Reste:
	<ul>
		<li>in Ordner <span style="color:#009900;">/adm/style/</span> alles l&ouml;schen <span style="color:#FF0000;">acp_portal*.html</span>.</li>
		<li>in Ordner <span style="color:#009900;">/includes/acp/</span> alles l&ouml;schen <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>in Ordner <span style="color:#009900;">/includes/acp/info/</span> alles l&ouml;schen <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>in Ordner <span style="color:#009900;">/language/en/</span> l&ouml;sche <span style="color:#FF0000;">portal.php</span></li>
		<li>in Ordner <span style="color:#009900;">/language/en/acp/</span> alles l&ouml;schen <span style="color:#FF0000;">portal_*.php</span></li>
		<li>in Ordner <span style="color:#009900;">/language/en/mods/</span> l&ouml;sche <span style="color:#FF0000;">average_statistics.php</span></li>
		<li>l&ouml;sche Haupt-Ordner <span style="color:#009900;">/portal/</span></strong></li>
		<li>alles l&ouml;schen <span style="color:#009900;">/portal/</span> Ornder (BITTE f&uuml;r jeden Style!) unter <span style="color:#009900;">/styles/stylename/template/</span></li>
		<li>im Root-Verzeichnis tausche <span style="color:#FF0000;">.htaccess</span> von der Original phpBB 3.0.x, l&ouml;sche <span style="color:#FF0000;">portal.php</span>, <span style="color:#FF0000;">portal_pages.php</span> und <span style="color:#FF0000;">robots.txt</span>.</li>
		<li>Zus&auml;tzlich werden alle installierten BBCodes der Portal-Install deinstalliert.</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Merke:</strong> Lade nun nochmal die OriginalVersion des PHPBB3.0.x hoch, um alle vom Portal &uuml;berschriebenen Dateien mit dem Original zu &uuml;berschreiben. Bedenke, das der Ordner <span style="color:#009900;">/install/</span> un die Datei <span style="color:#FF0000;">config.php</span> NICHT (!!) mit hochgeladen werden d&uuml;rfen.</p>
	<p>Thank you for using Portal XL.</p><br /><br />',
	
	'PORTAL_SQL_REMOVE_DONE'		=> '<strong>Datenbank fertig:</strong><br />',
	'PORTAL_FINAL_REMOVE_STEP'		=> 'Alle Datenbank Eintr&auml;ge wurden entfernt.<br /><br />Bitte warte ein paar Sekunden, damit der n&auml;chste Schritt automatisch Startet.',
	'REMOVE_DATABASE'				=> 'L&ouml;schprozedur',
	'STAGE_REMOVE_DB'				=> 'Datenbank entfernt',

	// Portal XL CHMOD Directories
	'PORTAL_CHMOD'					=> 'Portal XL CHMOD',
	'PORTAL_CHMOD_NOT_POSSIBLE'		=> '<strong>CHMOD ist FALSCH!</strong><br /><br />Deine PortalVersion ist: <strong>%1$s</strong><br /><br />Deine letzte Version ist sollte sein <strong>%1$s</strong>, um den CHMOD des Portal XL anzupassen.<br /><br />Bitte mache ein Update zu dieser Version, um mit der CHMOD Prozedur fortfahren zu k&ouml;nnen.',
	'PORTAL_CHMOD_SUCCESS'			=> 'Gratulation!<br />CHMOD f&uuml;r Ordner und Dateien war erfolgreich.',

	'PORTAL_CHMOD_TODO'				=> 'Portal XL\'s installations Wizard wird nun versuchen Ordner/Dateien mit dem erforderlichen CHMOD auszustatten, wenn dies dein Hoster technisch erlaubt hat:
	<ul>
		<li><em><strong><span style="color:#009900;">Datei Rechte CHMOD</span></strong></em><br />
		<em>Pr&uuml;fe nach der installation alle Rechte f&uuml;r Dateien und Ordner f&uuml;r *NIX - servers.</em><br />
		Folgende CHMOD &Auml;nderungen wird der Wizard f&uuml;r dich ausf&uuml;hren.<br /><br />
		
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0666</span> into</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0777</span> into</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li><br />
		<li><em><strong><span style="color:#009900;">Ordner umbenennen</span></strong></em><br />
		<em>NAch der INstallations sollte der Ordner <strong>/install/</strong> umbenannt oder gel&ouml;scht oder verschoben werden.</em><br />
		Der Wizard wird versuchen den Ordner <strong>/install/</strong> nach <strong>/_install/</strong> umzubenennen.<br /><br />
		</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Merke:</strong> Mache unbedingt ein Backup Deiner Ordner und Dateien.</p><br /><br />',

	'PORTAL_CHMOD_DONE'			=> '<strong>Aktion beendet:</strong><br />',
	'PORTAL_FINAL_CHMOD_STEP'	=> 'Alle CHMODS wurden gesetzt.<br /><br />Klicke auf den Button oder warte bis das Script alleine weitermacht.',
	'PORTAL_CHMOD_FILES'		=> 'CHMOD - Prozedur',

	'STAGE_CHMOD_FILES'			=> 'CHMOD arbeitet...<br />
	<ul>
		<li><em><strong><span style="color:#009900;">Datei Rechte CHMOD</span></strong></em><br />
		<em>&Uuml;berpr&uuml;fe nach dieser Aktion BITTE, ob alle Datei und Ordnerrechte gesetzt wurden.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> into</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> into</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li>
	</ul>
	Nach einem Button Klick wird der Install-Ordner nicht mehr erreichbar sein, da er umbenannt wurde, sofern dies dein Server zugelassen hat. Umbenannt von <strong>/install/</strong> nach <strong>/_install/</strong>. Zum erneuten Installieren benenne den Ordner via FTP wieder um von <strong>/_install/ nach /install/</strong> <br /><br />Nun klicken um fortzufahren.',

	// Portal XL BBCODE Import
	'PORTAL_BBCODE'					=> 'Portal XL Custom bbCode',
	'PORTAL_BBCODE_NOT_POSSIBLE'		=> '<strong>Hinzuf&uuml;gen eines BBCodes ist nicht erlaubt!</strong><br /><br />Deine PortalVersion ist: <strong>%1$s</strong><br /><br />Deine letzte Version ist sollte sein <strong>%1$s</strong>, um den CHMOD des Portal XL anzupassen.<br /><br />Bitte mache ein Update zu dieser Version, um mit der CHMOD Prozedur fortfahren zu k&ouml;nnen.',
	'PORTAL_BBCODE_SUCCESS'			=> 'Gratulation!<br />BBCodes wurden erfolgreich hinzugef&uuml;gt.',

	'PORTAL_BBCODE_TODO'				=> 'Willkommen zur BBCODES Zusatz installation.<br /><br />Folgende BBCodes werden der Datenbank hinzugef&uuml;gt:
	<ul>
		<li><span style="color:#009900;">Insert spoiler: [spoiler]your text here[/spoiler]</span></li>
		<li><span style="color:#009900;">Insert iframe: [iframe]http://url.here[/iframe]</span></li>
		<li><span style="color:#009900;">Insert youtube: [youtube]videonumber[/youtube]</span></li>
		<li><span style="color:#009900;">Insert GVideo: [GVideo]videonumber[/GVideo]</span></li>
		<li><span style="color:#009900;">Insert myvideo: [myvideo]videonumber[/myvideo]</span></li>
		<li><span style="color:#009900;">Insert clipfish: [clipfish]videonumber[/clipfish]</span></li>
		<li><span style="color:#009900;">Insert myspace: [myspace]videonumber[/myspace]</span></li>
		<li><span style="color:#009900;">Insert gametrailers: [gametrailers]trailernumber[/gametrailers]</span></li>
		<li><span style="color:#009900;">Insert center: [center]your text[/center]</span></li>
		<li><span style="color:#009900;">Insert strike: [strike]your text[/strike]</span></li>
		<li><span style="color:#009900;">Insert bgcolor: [bgcolor=red]your text[/bgcolor]</span></li>
		<li><span style="color:#009900;">Insert hidden link: [hiddenlink=http//url.her]your text[/hiddenlink]</span></li>
		<li><span style="color:#009900;">Insert offtopic: [offtopic]your text[/offtopic]</span></li>
		<li><span style="color:#009900;">Insert marquee: [marquee=color here]your text[/marquee]</span></li>
		<li><span style="color:#009900;">Insert intended text: [tab=number here]your text[/tab]</span></li>
		<li><span style="color:#009900;">Insert album: [album]picture ID here[/album]</span></li>
	</ul>
	<p><strong style="text-transform: uppercase;">Merke:</strong> Mache unbedingt ein Backup Deiner Ordner und Dateien.</p><br /><br />',

	'PORTAL_SQL_BBCODE_DONE'			=> '<strong>Datenbank in Arbeit:</strong><br />',
	'PORTAL_FINAL_BBCODE_STEP'		=> 'Datenbankeintr&auml;ge f&uuml;r den BBCodes wurden erledigt.<br /><br />Klicke den Button um fortzusetzen.',
	'BBCODE_DATABASE'				=> 'BBCode Prozedur',

	'STAGE_BBCODE_DB'				=> 'BBCodes in Arbeit...<br />
	<ul>
		<li><em><strong><span style="color:#009900;">Zugriffsrechte BBCODE</span></strong></em><br />
		<em>Bitte &uuml;berpr&uuml;fe nach der Install die BBCODEs CHMOD Rechte der Dateien und Ordner.</em><br /><br />
		<strong><span style="color:#009900;">BBCODE <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">BBCODE <span style="color:#FF0000;">666</span> into</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">BBCODE <span style="color:#FF0000;">755</span> into</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li>
	</ul>
	Nach einem Button Klick wird der Install-Ordner nicht mehr erreichbar sein, da er umbenannt wurde, sofern dies dein Server zugelassen hat. Umbenannt von <strong>/install/</strong> nach <strong>/_install/</strong>. Zum erneuten Installieren benenne den Ordner via FTP wieder um von <strong>/_install/ nach /install/</strong> <br /><br />Nun klicken um fortzufahren.',

   'PORTAL_FINAL_MODULE_STEP'		=> 'Update der Dantenbank Module wurde gemacht.<br /><br />Buttonklick um fortzusetzen.',
   'PORTAL_FINAL_CONFIGFILE_STEP'	=> 'Update der Datei config.php im RootVerszeichnis wurde gemacht.<br /><br />Buttonklick um fortzusetzen.',
   'PORTAL_SQL_MODULE_DONE'			=> '<strong>Datenbank in Arbeit:</strong><br />',

   'STAGE_INSERT_DATA'				=> 'Einf&uuml;gen der Standart Werte',
   'STAGE_POPULATE_DB'				=> 'Datenbanken sind verf&uuml;gbar.<br /><br />Klicke den Button um die Datenbanken zu f&uuml;llen.',
   'STAGE_CHMOD'					=> 'CHMOD Dateien',
   'STAGE_BBCODE'					=> 'bbCode Import',
   'STAGE_INSERT_MODULES'			=> 'Module einf&uuml;gen',
   'PORTAL_NOT_INSTALLED'			=> 'Keine PortalInstallation gefunden',
   'PORTAL_NOT_INSTALLED_EXPLAIN'	=> 'Eine Installation der PortalVorg&auml;ngerVersion ist erforderlich, BITTE <a href="%s">Beginne mit einer neuen installation des Portal XL</a>.',

	// Portal XL version check
	'VERSION_CHECK'					=> 'Version check',
	'VERSION_CHECK_EXPLAIN'			=> 'Checks to see if the version of Portal XL you are currently running is up to date.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Your installation is up to date, no updates are available for your version of Portal XL. You do not need to update your installation.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Your version of Portal XL is not up to date.<br />Below you will find a link to the release announcement for the latest version as well as instructions on how to perform the update.',
	'CURRENT_VERSION'				=> 'Current version',
	'LATEST_VERSION'				=> 'Latest version',
	'UPDATE_INSTRUCTIONS'			=> '
		<h2>How to update your installation with the Latest Package</h2>

		<p>The recommended way of updating your installation listed here is only valid for the latest package. You are also able to update your installation using the methods listed within the \docs\PORTAL_XL_INSTALL.html document. The steps for updating Portal XL are:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="http://www.portalxl.nl/forum/" title="http://www.portalxl.nl/forum/">Portal XL downloads page</a> and download the "Latest Package" archive.<br /></li>
			<li>Unpack the archive.<br /></li>
			<li>Upload the complete \root\ folder (retain directory structure) to your phpBB root directory (where your config.php file is).<br /></li>
			<li>Browse to \install\index.php to start the installation script and choose tab "Update"<br /></li>
			<li>Refresh cache and style(s) when done!<br /></li>
		</ul>
	',

));
?>