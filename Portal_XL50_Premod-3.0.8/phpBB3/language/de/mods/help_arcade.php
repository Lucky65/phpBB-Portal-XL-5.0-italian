<?php
/**
*
* help_arcade [German]
*
* @package language
* @version $Id: help_arcade.php 810 2009-07-04 17:03:48Z JRSweets $
* @copyright (c) 2008 JeffRusso.net
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Allgemein',
	),
	array(
		0 => 'Welche Funktionen bietet die Spielhalle?',
		1 => '<ul><li>Unterst&uuml;tzung f&uuml;r zahlreiche Spiele</li>
		<li>unbegrenzte Kategorien, Unterkategorien und Links (ahmt phpBB3-Foren nach)</li>
		<li>umfangreiche ACP- und UCP-Module.</li>
		<li>Administratorenrechte f&uuml;r ACP-Module</li>
		<li>kategorienbasierte Befugnisse</li>
		<li>passwortgesch&uuml;tzte Kategorien</li>
		<li>sehr einfache Spielinstallation</li>
		<li>konvertiert automatisch IBPro-TAR-Dateien</li>
		<li>integriert sich in "Wer ist online?"</li>
		<li>zeigt an, wer welches Spiel spielt</li>
		<li>Favoritensystem</li>
		<li>eingebautes Spieldownloadsystem</li>
		<li>Statistiken</li>
		<li>Bewertungssystem</li>
		<li>Kommentarsystem</li>
		<li>Meldesystem</li> 
		<li>spielen Sie Spiele normal oder in einem neuen Fenster</li>
		<li>Suchsystem</li>
		<li>Integration von Punktesystemen</li> 
		<li>und mehr ...</li></ul>',
	),
	array(
		0 => 'Welche Themes werden unterst&uuml;tzt?',
		1 => '<ul>
		<li>proSilver</li>
		<li><a href="http://www.phpbb.com/styles/db/index.php?i=misc&mode=display&contrib_id=7525">prosilver Special Edition</a></li>
		<li><a href="http://www.phpbb.com/styles/db/index.php?i=misc&mode=display&contrib_id=8885">revolution</a></li>
		<li>subSilver2</li>
		</ul>',
	),
	array(
		0 => 'Welche Sprachen werden unterst&uuml;tzt?',
		1 => 'Alle unterst&uuml;tzten Sprachen f&uuml;r die derzeitige Spielhallenversion sind <a href="http://www.jeffrusso.net/forum/viewtopic.php?f=26&t=1329">hier</a> zu finden.',
	),
	array(
		0 => 'Was ist mit anderen Sprachen und Themes?',
		1 => 'Wenn Sie die Spielhalle in eine andere Sprache &uuml;bersetzt oder an ein anderes Theme angepasst haben, w&uuml;rde ich mich freuen, wenn Sie dies <a href="http://www.jeffrusso.net/forum/viewforum.php?f=25">hier</a> bekundeten.',
	),
	array(
		0 => 'Kann ich innerhalb der Spielhalle styleabh&auml;ngige Vorlagen nutzen?',
		1 => 'Ja. Jede Grafik innerhalb des Standard-Grafikpfades kann styleabh&auml;ngig verwendet werden. Hierzu m&uuml;ssen Sie lediglich eine Grafik gleichen Namens im Verzeichnis “ihr_style\theme\images\arcade\” platzieren. Falls ein Style keine solche Grafik hat, wird die Standardgrafik verwendet. Dies gilt auch f&uuml;r die Grafiken der Kategorien. Um styleabh&auml;ngige Kategoriengrafiken zu verwenden, w&auml;hlen Sie zun&auml;chst die Standardgrafik aus, wenn Sie die Kategorie erstellen/&auml;ndern, und laden Sie dann eine Grafik desselben Namens in das Verzeichnis “ihr_style\theme\images\arcade\cats\” hinauf.',
	),
	array(
		0 => '--',
		1 => 'Installation/Aktualisierung',
	),
	array(
		0 => 'Welche Datenbanken unterst&uuml;tzt die Spielhalle?',
		1 => 'Die Spielhalle sollte korrekt mit allen Datenbanken zusammenarbeiten, die phpBB3 unterst&uuml;tzt.',
	),
	array(
		0 => 'Wie installiere ich die Spielhalle?',
		1 => 'Es sind sehr wenige &Auml;nderungen an den phpBB3-Kerndateien n&ouml;tig, und es gibt ein Installationsscript, das die ben&ouml;tigten &Auml;nderungen an der Datenbank automatisch durchf&uuml;hrt sowie die ACP- und UCP-Module hinzuf&uuml;gt. Achten Sie darauf, die ModX-Anleitungen sowohl f&uuml;r die Kerndatei- als auch f&uuml;r die jeweiligen Theme&auml;nderungen zu befolgen.',
	),
	array(
		0 => 'Wie deinstalliere ich die Spielhalle?',
		1 => 'Machen Sie alle manuellen &Auml;nderungen an den Dateien r&uuml;ckg&auml;ngig und f&uuml;hren Sie dann das Installationsscript erneut aus. W&auml;hlen Sie "Uninstall" aus, um die Datenbank&auml;nderungen r&uuml;ckg&auml;ngig zu machen.',
	),
	array(
		0 => 'Wie aktualisiere ich die Spielhalle auf die neueste Version?',
		1 => 'Laden Sie sich das neueste Paket herunter. Laden Sie alle neuen Dateien hinauf, wobei Sie die alten &uuml;berschreiben. &Ouml;ffnen Sie die ModX-Dateien mit den Kerndateien- und Theme&auml;nderungen und f&uuml;hren Sie diese durch. F&uuml;hren Sie dann das beiliegende Installationsscript aus. W&auml;hlen Sie die Option aus, eine Aktualisierung durchzuf&uuml;hren, und entfernen Sie nach Abschluss das Verzeichnis arcade_install von Ihrem Server.<br /><br />Ein Beispiel, wenn Sie derzeit Version 0.4.5 verwenden und auf Version 0.5.1 aktualisieren m&ouml;chten:
<ul><li>Laden Sie alle neuen Dateien hoch, wobei Sie die alten &uuml;berschreiben.</li>
<li>Schauen Sie in das contrib-Verzeichnis und folgen Sie den Anweisungen in der Datei <strong>update045-050.xml</strong>, dann <strong>update045-050prosilver.xml</strong> und schlie&szlig;lich <strong>update050-051.xml</strong>.</li>
<li>F&uuml;hren Sie das Installationsscript aus und w&auml;hlen Sie die Option aus, die Spielhalle auf die neueste Version zu aktualisieren.</li></ul>',
	),
	array(
		0 => 'Wie kann ich sicherstellen, dass alle &Auml;nderungen durchgef&uuml;hrt wurden?',
		1 => 'Stellen Sie sicher, dass Sie die neueste Version der Spielhalle einsetzen. &Ouml;ffnen Sie das Installationsscript in Ihrem Webbrowser und w&auml;hlen Sie die Option aus, die Installation zu pr&uuml;fen, dies wird sicherstellen, dass die Spielhalle vollst&auml;ndig installiert wurde.',
	),
	array(
		0 => '--',
		1 => 'Punktevergabe',
	),
	array(
		0 => 'Warum werden meine Punkte nicht gespeichert?',
		1 => 'Das erste, was man &uuml;berpr&uuml;fen sollte, ist, ob der Spieltyp &uuml;berhaupt von der Spielhalle unterst&uuml;tzt wird und die Punktevariable korrekt gesetzt ist. Als n&auml;chstes muss sichergestellt werden, dass Sie die Datei <strong>index.php</strong> vollst&auml;ndig angepasst haben; andernfalls k&ouml;nnen IBPRO-Spiele Ihre Punkte nicht korrekt speichern. Die letzte zu &uuml;berpr&uuml;fende Einstellung betrifft die ACP-Einstellungen f&uuml;r die Cookies. Wenn Ihr Seiten-URL <strong>http://www.beispiel.com</strong> lautet, so sollte die Cookiedomain <strong>.beispiel.com</strong> sein.',
	),
	array(
		0 => 'Warum wird mir die folgende Nachricht nach einem Spiel angezeigt, "Die Punkte&uuml;bermittlungsmethode stimmt nicht mit dem Spieletyp &uuml;berein"?',
		1 => 'Die Art der Punktevergabe wurde f&uuml;r dieses Spiel falsch gesetzt. Wenn Sie im ACP den Spielhallen-Fehlerbericht lesen, sehen Sie den Namen des Spiels. Suchen Sie nach dem Fehlertypen "Gespeicherter und &uuml;bermittelter Spieltyp stimmen nicht &uuml;berein". Hier werden Sie den Punktetypen des Spiels (korrekt) und den &uuml;bermittelten Spieletypen (falsch) sehen. &Auml;ndern Sie in diesem Fall den Punktetypen des Spiels im ACP.',
	),	
	array(
		0 => 'Warum k&ouml;nnen G&auml;ste keine Punkte &uuml;bermitteln, obwohl sie die korrekten Befugnisse besitzen?',
		1 => 'Selbst wenn Sie der G&auml;ste-Benutzergruppe entsprechende Befugnisse erteilen, so k&ouml;nnen G&auml;ste dennoch keine Punkte &uuml;bermitteln. Das ist beabsichtigt.',
	),
	array(
		0 => 'Wie aktiviere ich den "Testmodus" f&uuml;r eine Kategorie?',
		1 => '&Ouml;ffnen Sie das ACP-Modul "Spielhalle verwalten". Bearbeiten Sie die gew&uuml;nschte Kategorie und setzen Sie dort die Option "Testmodus" auf "Ja".',
	array(
		0 => 'Was ist der "Testmodus"?',
		1 => 'Er erm&ouml;glicht es Ihnen, zu spielen, ohne dass Daten oder Punkte gespeichert werden. Dadurch k&ouml;nnen Sie Spiele zun&auml;chst testen, um sicherzustellen, dass sie korrekt funktionieren. Wenn Sie ein Spiel beendet haben, wird Ihnen angezeigt, welche Daten gespeichert worden w&auml;ren. Falls Sie Administrator sind und DEBUG_EXTRA aktiviert sind, sehen Sie detailliertere Informationen.',
	),
	array(
		0 => '--',
		1 => 'Spiele',
	),
	array(
		0 => 'Welche Spieltypen werden unterst&uuml;tzt?',
		1 => 'Die Spielhalle unterst&uuml;tzt die folgenden Spieltypen:<br /><ul><li>Activity Mod</li><li>V3 Arcade</li><li>IBPro</li><li>IBPro ArcadeLib</li><li>IBPro V3</li></ul>',
	),
	array(
		0 => 'Was ist die einfachste L&ouml;sung, Spiele zu installieren?',
		1 => 'Die einfachste M&ouml;glichkeit ist es, Spiele zu installieren, die bereits im phpBB-Arcade- oder IBPro-Format vorliegen. Sie k&ouml;nnen auch Spiele verwenden, die f&uuml;r Arcade Room gepackt wurden, wenn sie eine XML-Datei beinhalten. Die Spielhalle kann das Format des Spiels automatisch erkennen und in ein direkt installierbares Format konvertieren.',
	),	
	array(
		0 => 'Wo finde ich die arcadelib-Dateien?',
		1 => '<ul><li><a href="http://www.jeffrusso.net/forum/viewtopic.php?f=20&amp;t=1503">Server 1</a></li>
		<li><a href="http://igames.origon.dk/forum/viewtopic.php?p=2118#p2118">Server 2</a></li>
		<li><a href="http://igames.origon.dk/forum/viewtopic.php?p=3696#p3696">Server 3</a></li></ul>',
	),
	array(
		0 => 'Was wird ben&ouml;tigt, um ein Spiel zu installieren?',
		1 => 'Spiele, die Sie selbst zusammenstellen, m&uuml;ssen (standardm&auml;&szlig;ig) in <strong>http://www.beispiel.com/phpBB/arcade/games/</strong> in ein Verzeichnis desselben Namens wie die SWF-Spieldatei hochgeladen werden. Wenn die Spieldatei <strong>test.swf</strong> hei&szlig;t, w&auml;re unter <strong>http://www.beispiel.com/phpBB/arcade/games/</strong> also ein Verzeichnis des Namens <strong>test</strong> anzulegen.<br /><br />In diesem Verzeichnis bef&auml;nden sich:<br /><ul><li>test.swf (Flash)</li><li>test.gif (50px x 50 px)</li><li>test.php (Installationsdatei; falls nicht vorhanden, ist keine Installation m&ouml;glich)</li><li>index.htm (leere HTML-Datei)</li></ul>',
	),
	array(
		0 => 'Wie kann ich ein Spiel installieren?',
		1 => 'Es gibt drei Wege, ein Spiel zu installieren.<br /><ul><li>Wenn Sie das Spiel mit dem eingebauten Downloadsystem heruntergeladen haben, steht Ihnen ein komprimiertes Archiv zur Verf&uuml;gung, das Sie per FTP in <strong>http://www.beispiel.com/phpBB/arcade/install</strong> hochladen und &uuml;ber das ACP installieren k&ouml;nnen.</li><li>Wenn Sie das Spiel mit dem eingebauten Downloadsystem heruntergeladen haben, steht Ihnen ein komprimiertes Archiv zur Verf&uuml;gung, das Sie &uuml;ber das ACP-Modul "Hochladen/Entpacken" auf ihren Server laden k&ouml;nnen. Ist dies erledigt, wird das Archiv automatisch entpackt, und Sie k&ouml;nnen das Spiel &uuml;ber das ACP hinzuf&uuml;gen.</li><li>Eine weitere M&ouml;glichkeit ist es, alle zum Spiel geh&ouml;rende Dateien einzeln in die jeweiligen Verzeichnisse hochzuladen und das Spiel manuell zu installieren.</li></ul>',
	),
	array(
		0 => 'Kann ich meine eigene komprimierte Datei anlegen, um ein Spiel zu installieren?',
		1 => 'Ja. Folgen Sie den Anweisungen hier, damit Ihr komprimiertes Archiv die Grundvoraussetzungen erf&uuml;llt,stellen Sie dann sicher, dass Sie das Spielverzeichnis (normalerweise mit demselben Namen wie die SWF-Dateu) in dieser Struktur erstellen: <strong>arcade/games/spielverzeichnis</strong>. Komprimieren Sie dann das includes-Verzeichnis und geben Sie dem komrpimierten Archiv den Namen des Spielverzeichnisses.',
	),
	array(
		0 => 'Gibt es eine Beispiel-Installationsdatei?',
		1 => 'Beispiel mit zus&auml;tzlichen Dateien:<br />
<textarea rows="30" readonly="readonly" wrap="off"><?php
/**
*    Installationsdateien-How-To
*
*    Unten finden Sie die Parameter, die gesetzt werden m&uuml;ssen, um ein Spiel in
*    der Spielhalle zu installieren. Es gibt derzeit keine M&ouml;glichkeit (und es
*    wird wahrscheinlich auch keine geben), Spiele manuell aus dem ACP zu instal-
*    lieren.
*
*    Sie brauchen diese Datei, damit das Spiel im ACP zur Installation angeboten
*    wird.
*
*    Die einzigen Eintr&auml;ge, die gesetzt werden m&uuml;ssen, sind der Name des Spiels,
*    die Beschreibung, Breite, H&ouml;he, Typ, Punktetyp und die Dateien.
*
*    Die Spielhalle unterst&uuml;tzt derzeit 7 Spieltypen. (Activity Mod, IBPro, IBPro
*    arcadelib,  V3Arcade, IBProV3, Arcade Room und Spiele, die keine Punkte &uuml;ber-
*    mitteln).
*    Verwenden Sie die folgenden Konstanten f&uuml;r den Typen:
*
* 	 AMOD_GAME
*    AR_GAME
*	 IBPRO_GAME
*	 IBPRO_ARCADELIB_GAME
*	 V3ARCADE_GAME
*	 IBPROV3_GAME
*	 NOSCORE_GAME
*
*    Der Punktetyp sollte entweder SCORETYPE_HIGH oder SCORETYPE_LOW sein.
*    Diese Konstanten sind bereits in der Spielhalle definiert.
*    SCORETYPE_HIGH ist f&uuml;r Spiele, bei denen der beste Punktestand der h&ouml;chste
*    ist. SCORETYPE_LOW ist f&uuml;r Spiele, bei denen der beste Punktestand der nied-
*    rigste ist.
*
*    Der Eintrag game_files beinhaltet in einem Array alle Dateien und/oder Ver-
*    zeichnisse, die f&uuml;r das Spiel ben&ouml;tigt werden und sich nicht im Spielver-
*    zeichnis befinden. Sie sollten relativ zum phpBB-Wurzelverzeichnis aufgelis-
*    tet werden.
*
*    Das folgende Beispiel setzt drei zus&auml;tzliche Dateien voraus:
*
*    \'game_files\'        => array (
*        0    => \'arcade/gamedata/snake/scores.swf\',
*        1    => \'arcade/games/snake/scores.swf\',
*        2    => \'arcade/gamedata/games/snake/scores.swf\',
*    )
*
*    Wenn es keine zus&auml;tzlichen Dateien gibt, so sollte der Eintrag auf "false"
*    gesetzt werden:
*
*    \'game_files\'        => false,
*/

if (!defined(\'IN_PHPBB\'))
{
	exit;
}

$game_file = basename(__FILE__, \'.\' . $phpEx);

$game_data = array(
	\'game_name\'			=> \'Snake\',
	\'game_desc\'			=> \'Essen Sie die &Auml;pfel und treffen Sie nicht die W&auml;nde.... oder sich selbst.\',
	\'game_image\'			=> $game_file.\'.gif\',
	\'game_swf\'				=> $game_file.\'.swf\',
	\'game_scorevar\'			=> $game_file,
	\'game_type\'			=> IBPROV3_GAME,
	\'game_width\'			=> 360,
	\'game_height\'			=> 300,
	\'game_scoretype\'			=> SCORETYPE_HIGH,
	\'game_files\'			=> array (
		0 	=> \'arcade/gamedata/snake/snake.txt\',
		1 	=> \'arcade/gamedata/snake/v3game.txt\',
	),
);
?></textarea><br /><br />
Beispiel ohne zus&auml;tzliche Dateien:<br />
<textarea rows="30" readonly="readonly" wrap="off"><?php
/**
*    Installationsdateien-How-To
*
*    Unten finden Sie die Parameter, die gesetzt werden m&uuml;ssen, um ein Spiel in
*    der Spielhalle zu installieren. Es gibt derzeit keine M&ouml;glichkeit (und es
*    wird wahrscheinlich auch keine geben), Spiele manuell aus dem ACP zu instal-
*    lieren.
*
*    Sie brauchen diese Datei, damit das Spiel im ACP zur Installation angeboten
*    wird.
*
*    Die einzigen Eintr&auml;ge, die gesetzt werden m&uuml;ssen, sind der Name des Spiels,
*    die Beschreibung, Breite, H&ouml;he, Typ, Punktetyp und die Dateien.
*
*    Die Spielhalle unterst&uuml;tzt derzeit 7 Spieltypen. (Activity Mod, IBPro, IBPro
*    arcadelib,  V3Arcade, IBProV3, Arcade Room und Spiele, die keine Punkte &uuml;ber-
*    mitteln).
*    Verwenden Sie die folgenden Konstanten f&uuml;r den Typen:
*
* 	 AMOD_GAME
*    AR_GAME
*	 IBPRO_GAME
*	 IBPRO_ARCADELIB_GAME
*	 V3ARCADE_GAME
*	 IBPROV3_GAME
*	 NOSCORE_GAME
*
*    Der Punktetyp sollte entweder SCORETYPE_HIGH oder SCORETYPE_LOW sein.
*    Diese Konstanten sind bereits in der Spielhalle definiert.
*    SCORETYPE_HIGH ist f&uuml;r Spiele, bei denen der beste Punktestand der h&ouml;chste
*    ist. SCORETYPE_LOW ist f&uuml;r Spiele, bei denen der beste Punktestand der nied-
*    rigste ist.
*
*    Der Eintrag game_files beinhaltet in einem Array alle Dateien und/oder Ver-
*    zeichnisse, die f&uuml;r das Spiel ben&ouml;tigt werden und sich nicht im Spielver-
*    zeichnis befinden. Sie sollten relativ zum phpBB-Wurzelverzeichnis aufgelis-
*    tet werden.
*
*    Das folgende Beispiel setzt drei zus&auml;tzliche Dateien voraus:
*
*    \'game_files\'        => array (
*        0    => \'arcade/gamedata/snake/scores.swf\',
*        1    => \'arcade/games/snake/scores.swf\',
*        2    => \'arcade/gamedata/games/snake/scores.swf\',
*    )
*
*    Wenn es keine zus&auml;tzlichen Dateien gibt, so sollte der Eintrag auf "false"
*    gesetzt werden:
*
*    \'game_files\'        => false,
*/

if (!defined(\'IN_PHPBB\'))
{
	exit;
}

$game_file = basename(__FILE__, \'.\' . $phpEx);

$game_data = array(
	\'game_name\'			=> \'Snake\',
	\'game_desc\'			=> \'Essen Sie die &Auml;pfel und treffen Sie nicht die W&auml;nde.... oder sich selbst.\',
	\'game_image\'			=> $game_file.\'.gif\',
	\'game_swf\'				=> $game_file.\'.swf\',
	\'game_scorevar\'			=> $game_file,
	\'game_type\'			=> IBPROV3_GAME,
	\'game_width\'			=> 360,
	\'game_height\'			=> 300,
	\'game_scoretype\'			=> SCORETYPE_HIGH,
	\'game_files\'			=> false,
);
?></textarea>',
	),
	array(
		0 => 'Muss ich die Installationsdatei von Hand erstellen?',
		1 => 'Nein. Obwohl dies m&ouml;glich ist, gibt es im ACP zwei Werkzeuge, die bei dieser Aufgabe helfen.<br /><ul><li>Es gibt ein Werkzeug, das eine Installationsdatei komplett neu erzeugt. Geben Sie lediglich die ben&ouml;tigten Informationen ein, und Sie k&ouml;nnen die Installationsdatei herunterladen, anzeigen lassen oder auf dem Server speichern.</li><li>Es gibt ein Werkzeug, das es erm&ouml;glicht, die Installatonsdateien von bereits installierten Spielen anzuzeigen oder herunterzuladen.</li></ul>',
	),
	array(
		0 => 'Warum muss ich alle zus&auml;tzlichen Dateien in der Installationsdatei auflisten?',
		1 => 'Obwohl Sie, rein technisch, f&uuml;r den normalen Spielbetrieb in der Spielhalle diese zus&auml;tzlichen Dateien nicht auflisten m&uuml;ssten, w&uuml;rde andernfalls bei Benutzung des eingebauten Downloadsystems nicht das komplette Spiel heruntergeladen werden. Dies w&uuml;rde das Spiel f&uuml;r Dritte unspielbar machen, falls Sie es zum Download bereitstellen.',
	),
	/*array(
		0 => 'Ich bin noch immer verwirrt... gibt es eine ausf&uuml;hrliche Anleitung, Spiele zu installieren, die nicht an die Spielhalle angepasst wurden?',
		1 => '<a href="http://www.jeffrusso.net/forum/files/downloads/flash/convert_game.zip">Laden Sie die Flashdatei herunter, um sie auf Ihrem Computer zu betrachten.</a>',
	),*/
	array(
		0 => 'Wie kann ich ein Spiel entfernen?',
		1 => 'Sie k&ouml;nnen ein Spiel entfernen, indem Sie das Modul "Spielhalle verwalten" im ACP aufrufen. Alternativ k&ouml;nnen Sie das Modul "Spiele bearbeiten" verwenden. Beachten Sie, dass die Dateien eines entfernten Spiels noch immer auf dem Server liegen und manuell entfernt werden m&uuml;ssen.',
	),
	array( 
		0 => '--',
		1 => 'Spielhallen-ACP-Module',
	),
	array(
		0 => 'Welche ACP-Module hat die Spielhalle?',
		1 => '<ul>
		<li><strong>Allgemeine Einstellungen</strong> - Legt allgemeine Einstellungen f&uuml;r die Spielhalle fest</li> 
		<li><strong>Spieleinstellungen</strong> - Legt Spieleinstellungen f&uuml;r die Spielhalle fest</li> 
		<li><strong>Funktionen</strong> - Steuert Sonderfunktionen der Spielhalle</li> 
		<li><strong>Seiteneinstellungen</strong> - Passt die Darstellung der einzelnen Seiten der Spielhalle an</li> 
		<li><strong>Pfadeinstellungen</strong> - &Auml;ndert die Pfadeinstellungen der Spielhalle</li> 
		<li><strong>Spielhalle verwalten</strong> - Hier k&ouml;nnen Sie Kategorien und Spiele hinzuf&uuml;gen, &auml;ndern, l&ouml;schen, verschieben und synchronisieren</li>
		<li><strong>Spiele hinzuf&uuml;gen</strong> - F&uuml;gt der Spielhalle ein Spiel hinzu; mehrere Spiele k&ouml;nnen in einem Rutsch einer Kategorie zugewiesen werden</li>
		<li><strong>Spiele herunterladen</strong> - L&auml;dt Spiele von kompatiblen Seiten herunter</li>
		<li><strong>Spiele bearbeiten</strong> - &Auml;ndert jede Eigenschaft eines Spiels</li>
		<li><strong>Punkte bearbeiten</strong> - &Auml;ndert den Punktestand jedes Spiels</li>
		<li><strong>Spiele hochladen/entpacken</strong> - L&auml;dt heruntergeladene Spiele in das Spieleverzeichnis und entpackt sie</li>
		<li><strong>Installationsdatei erstellen</strong> - Erstellen Sie eine neue Installationsdatei f&uuml;r ein Spiel oder betrachten/laden Sie die Installationsdatei eines bereits installierten Spiels herunter</li>
		<li><strong>Downloadstatistik</strong> - Betrachten Sie die Statistik des Downloadsystems</li>
		<li><strong>Fehler anzeigen</strong> - Betrachten Sie den Fehlerverlauf der Spielhalle</li>
		<li><strong>Meldungen anzeigen</strong> - Betrachten Sie gemeldete Spiele</li>
		<li><strong>Benutzerhandbuch</strong> - Zeigt dieses Handbuch an</li>
		<li><strong>Befugnisse</strong> - Mehrere Module, um die lokalen Befugnisse der Spielhalle festzulegen, diese ahmen die phpBB3-Forenbefugnisse nach</li></ul>',
	),
	array(
		0 => 'Wie kommt es, dass ich nicht alle ACP-Module sehen kann?',
		1 => 'Um alle Module zu sehen, m&uuml;ssen Sie als Gr&uuml;nder eingetragen sein oder die korrekten Administratorenbefugnisse besitzen. Wenn Sie dennoch nicht alle Module sehen k&ouml;nnen, liegt dies wahrscheinlich an doppelten Werten in der Tabelle acl_options. Bitte f&uuml;hren Sie, um dies zu &uuml;berpr&uuml;fen, das Installationsscript mit der Option "Check installation" aus.',
	),
	array(
		0 => 'Wo muss ich die Befugnisse einstellen?/Warum habe ich nicht die Befugnis, die Spielhalle aufzurufen?',
		1 => 'Sobald die Spielhalle installiert ist, m&uuml;ssen Sie die korrekten Befugnisse einstellen. Die Spielhalle verwendet kategorienbasierte Befugnisse, die das Befugnissystem von phpBB3 nachahmen; dies beinhaltet die Nutzung von Rollen. Zudem k&ouml;nnen Sie Administratorenbefugnisse einstellen, um auch den Zugriff auf die ACP-Module zu konfigurieren.',
	),
	array(
		0 => 'Warum kann ich keine Spiele hinzuf&uuml;gen?',
		1 => 'Um Spiele hinzuf&uuml;gen zu k&ouml;nnen, m&uuml;ssen zuvor auch Kategorien erstellt worden sein, in die sie aufgenommen werden k&ouml;nnen. Verwenden Sie hierf&uuml;r das ACP-Modul <strong>Spielhalle verwalten</strong>. Das Erstellen einer Kategorie ist sehr &auml;hnlich dem Erstellen eines Forums in phpBB3.',
	),
	array(
		0 => 'Wie biete ich Spieledownloads an?',
		1 => 'Die M&ouml;glichkeit, Spiele herunterzuladen, wird &uuml;ber die Spielhallenbefugnisse gesteuert. Setzen Sie die Befugnisse nach Ihren Bed&uuml;rfnissen, und Ihre Benutzer werden den Link zum Herunterladen beim Betrachten oder Spielen der Spiele sehen. Um das Herunterladen zu vereinfachen, k&ouml;nnen Sie im ACP auch die globale Downloadfunktion aktivieren. Diese erm&ouml;glicht es anderen Nutzern der Spielhalle, Spiele aus Ihrem Forum &uuml;ber das Modul "Spiele herunterladen" in ihrer Spielhalle zu installieren.',
	),
	array(
		0 => 'Wie verwende ich das Modul "Spiele herunterladen"?',
		1 => 'Alles, was Sie tun m&uuml;ssen, ist es, den Pfad zum Spielhallen-Wurzelverzeichnis des Forums einzugeben, das Spiele anbietet. Sie werden dann eine Auflistung der zum Download verf&uuml;gbaren Spiele sehen. Wenn ein Spiel gr&uuml;n hervorgehoben wird, so bedeutet dies, dass sich dieses Spiel bereits auf Ihrem Server befindet. Bitte beachten Sie, dass die Befugnisse zum Download von der Seite gesteuert werden, von der Sie die Spiele herunterladen. So m&uuml;ssen Sie zum Beispiel angemeldet sein und/oder einer besonderen Benutzergruppe angeh&ouml;ren, um Spiele herunterladen zu k&ouml;nnen. Kontaktieren Sie den Administrator des Forums, wenn Sie hierzu Fragen haben.<br /><br /><a href="http://img148.imageshack.us/my.php?image=dlgamesssuq3.png" target="_blank"><img src="http://img148.imageshack.us/img148/817/dlgamesssuq3.th.png" border="0" alt="Spiele herunterladen" /></a>',
	),
	array(
		0 => 'Warum findet das Modul "Spiele herunterladen" keine Spiele?',
		1 => 'Dieses Modul setzt voraus, dass <strong>"allow_url_fopen"</strong> aktiviert oder PHPs <strong>cURL-Bibliothek</strong> installiert ist. Das kann &uuml;berpr&uuml;ft werden, indem Sie die phpinfo()-Funktion Ihres Servers aufrufen. Wenn der Wert f&uuml;r <strong>"allow_url_fopen"</strong> auf "off" steht und die <strong>cURL-Bibliothek</strong> nicht installiert ist, funktioniert das Modul nicht.',
	),
	array(
		0 => '--',
		1 => 'Points Systems', 
	), 
	array( 
		0 => 'Welche Punktesysteme werden unterst&uuml;tzt?', 
		1 => '<ul>
		<li>Cash Mod</li>
		<li>Points System</li>
		<li>Simple Points System</li>
		<li>Ultimate Points System</li>
		</ul>', 
	), 
	array( 
		0 => 'Wie funktioniert die Integration eines Punktesystems?', 
		1 => 'Sie k&ouml;nnen Kosten und Belohnung pro Spiel, pro Kategorie und global festlegen. Sie k&ouml;nnen jede Kombination dieser Einstellungen verwenden. Die Spieleinstellungen &uuml;berschreiben die Kategorieneinstellungen, die wiederum die globalen Einstellungen &uuml;berschreiben. Es gibt zudem einen Jackpot. Jedes Mal, wenn ein Benutzer spielt und nicht gewinnt, landen die Kosten f&uuml;r das Spiel in diesem Jackpot. Es gibt eine globale Einstellung f&uuml;r die Begrenzung dieses Jackpots, und seine H&ouml;he kann manuell im ACP festgesetzt werden. Sie k&ouml;nnen au&szlig;erdem die Kosten und die Belohnung f&uuml;r ein Spiel auf -1 setzen, um es kostenlos anzubieten.', 
	), 
	array( 
		0 => '--', 
		1 => 'Spielhallendaten au&szlig;erhalb der Spielhalle anzeigen',
	),
	array(
		0 => 'Wie zeige ich Spielhallendaten auf externen Seiten an?',
		1 => 'Sie m&uuml;ssen die folgenden Codezeilen verwenden, um die Daten korrekt anzeigen zu k&ouml;nnen:<br />
<textarea rows="6" readonly="readonly">include($phpbb_root_path . \'includes/arcade/arcade_common.\' . $phpEx);		
// Spielhallen-Authsystem initialisieren
$auth_arcade->acl($user->data);
// Spielhallenklasse initialisieren
$arcade = new arcade();</textarea><br /><br />Verwenden Sie au&szlig;erdem die folgenden Funktionen, um die Daten anzuzeigen:
	<ul>
	<li><strong>$arcade->number_format()</strong> - Alle angezeigten Zahlen sollten mit dieser Funktion verwendet werden, um sicherzustellen, dass sie f&uuml;r den Benutzer korrekt angezeigt werden</li>
	<li><strong>$arcade->time_format()</strong> - Konvertiert eine Zeit in Sekunden in Tage/Stunden/Minuten/Sekunden</li>
	<li><strong>$arcade->get_username_string()</strong> - Verlinkt korrekt auf ein Spielhallenprofil und f&auml;rbt den Benutzernamen ein</li>
	</ul>',
	),
	array(
		0 => 'Gibt es einen Beispielportalblock?',
		1 => 'Ja, das folgende Beispiel zeigt die neuesten Spiele, die Gesamtspiele und die neuesten Rekorde an.<br /><br />PHP-Code:<br />
<textarea rows="20" readonly="readonly" wrap="off">if (file_exists($phpbb_root_path . \'includes/arcade/arcade_common.\' . $phpEx))
{
	include($phpbb_root_path . \'includes/arcade/arcade_common.\' . $phpEx);		
	// Spielhallen-Authsystem initialisieren
	$auth_arcade->acl($user->data);
	// Spielhallenklasse initialisieren
	$arcade = new arcade();
	
	foreach($arcade->newest_games as $newest_games)
	{
		$template->assign_block_vars(\'newest_games\', array(
			\'U_GAME_PLAY\'	=> append_sid("{$phpbb_root_path}arcade.$phpEx", \'mode=play&amp;g=\' . $newest_games[\'game_id\']),
			\'GAME_IMAGE\'	=> ($newest_games[\'game_image\'] != \'\') ? $phpbb_root_path . "arcade.$phpEx?img=" . $newest_games[\'game_image\'] : \'\',
			\'GAME_NAME\'		=> $newest_games[\'game_name\'],
		));
	}
	
	$total_games = sizeof($arcade->games);
	if ($total_games > 1)
	{
		$total_games = sprintf($user->lang[\'ARCADE_TOTAL_GAMES\'], $arcade->number_format($total_games));
	}
	else if ($total_games == 1)
	{
		$total_games = sprintf($user->lang[\'ARCADE_TOTAL_GAME\'], $arcade->number_format($total_games));
	}
	
	$total_games_played = '';
	if ($arcade->totals[\'games_played\'] > 1)
	{
		$total_games_played = sprintf($user->lang[\'ARCADE_TOTAL_PLAYS\'], $arcade->number_format($arcade->totals[\'games_played\']), $arcade->time_format($arcade->totals[\'games_time\']));
	}
	else if ($arcade->totals[\'games_played\'] == 1)
	{
		$total_games_played = sprintf($user->lang[\'ARCADE_TOTAL_PLAY\'], $arcade->number_format($arcade->totals[\'games_played\']), $arcade->time_format($arcade->totals[\'games_time\']));
	}

	$template->assign_vars(array(
		\'S_ARCADE_BLOCK\'		=> true,
		\'TOTAL_GAMES\'			=> $total_games,
		\'TOTAL_GAMES_PLAYED\'	=> $total_games_played,
	));
	
	// Beginn der neuesten Rekorde
	foreach($arcade->latest_highscores as $latest_highscore)
	{
		$latest_scoreuser = $arcade->get_username_string(\'full\', $latest_highscore[\'game_highuser\'], $latest_highscore[\'username\'], $latest_highscore[\'user_colour\']);
		$latest_score = sprintf($user->lang[\'ARCADE_WELCOME_SCORE\'], $arcade->number_format($latest_highscore[\'game_highscore\']), $user->format_date($latest_highscore[\'game_highdate\']));
		$game_url = \'<a href="\' . append_sid("arcade.$phpEx?mode=play&amp;g=" . $latest_highscore[\'game_id\']) . \'">\' . $latest_highscore[\'game_name\'] . \'</a>\';
		$game_url_tooltip = \'<a href="\' . append_sid("arcade.$phpEx?mode=play&amp;g=" . $latest_highscore[\'game_id\']) . \'" class="tooltip">\' . $latest_highscore[\'game_name\'] . \'<span class="aheader">\' . $latest_score . \'</span></a>\';

		$template->assign_block_vars(\'latest_scores\', array(
			\'HEADING_CHAMP\' 				=> sprintf($user->lang[\'ARCADE_WELCOME_CHAMP\'], $latest_scoreuser, $game_url),
			\'HEADING_CHAMP_SCORE\'			=> $latest_score,
			\'HEADING_CHAMP_TOOLTIP\' 		=> sprintf($user->lang[\'ARCADE_WELCOME_CHAMP\'], $latest_scoreuser, $game_url_tooltip),
		));
	}
	// Ende der neuesten Rekorde
}</textarea><br /><br />HTML-Code:<br />
<textarea rows="15" readonly="readonly" wrap="off"><!-- IF S_ARCADE_BLOCK -->
<h3>{L_ARCADE}</h3>
<div class="panel">
	<div class="inner"><span class="corners-top"><span></span></span>		
		<div class="content">
			<!-- BEGIN newest_games -->
				<p style="margin: 4px;"><!-- IF newest_games.GAME_IMAGE --><a href="{newest_games.U_GAME_PLAY}"><img src="{newest_games.GAME_IMAGE}" alt="{newest_games.GAME_NAME}" width="20" height="20" style="vertical-align: middle;" /></a><!-- ENDIF -->&nbsp;{newest_games.GAME_NAME}</p>
			<!-- END newest_games -->
			<!-- IF TOTAL_GAMES -->
			<br />
			<p style="text-align: center;">{TOTAL_GAMES}</p>
			<!-- ENDIF -->
			<!-- IF .latest_scores -->
				<ul>
			<!-- BEGIN latest_scores -->
					<li>{latest_scores.HEADING_CHAMP}</li>
			<!-- END latest_scores -->
				</ul>
			<!-- ELSE -->
				<div style="text-align: center;">{L_ARCADE_NO_LATEST_HIGHSCORES}</div>
			<!-- ENDIF -->
		</div>		
	<span class="corners-bottom"><span></span></span></div>
</div>
<!-- ENDIF --></textarea>',
),
);

?>