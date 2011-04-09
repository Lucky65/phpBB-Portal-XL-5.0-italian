<?php
/**
*
* @author Tobi Sch&auml;fer http://www.phpbb-seo.de/
*
* impressum [Deutsch - Du]
*
* @package language
* @version $Id: impressum.php,v 1.1.1.1 2009/05/15 05:16:03 damysterious Exp $
* @copyright (c) 2008 SEO phpBB phpbb-seo.de
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

// Bot settings
$lang = array_merge($lang, array(
	'IMPRESSUM' 		=> 'Impressum',
	'DISCLAIMER' 		=> 'Haftungsausschluss',
	'DISCLAIMER_TXT'	=> '<p><b>1. Inhalt des Onlineangebotes</b><br />Der Autor &uuml;bernimmt keinerlei Gew&auml;hr f&uuml;r die Aktualit&auml;t, Korrektheit, Vollst&auml;ndigkeit oder Qualit&auml;t der bereitgestellten Informationen. Haftungsanspr&uuml;che gegen den Autor, welche sich auf Sch&auml;den materieller oder ideeller Art beziehen, die durch die Nutzung oder Nichtnutzung der dargebotenen Informationen bzw. durch die Nutzung fehlerhafter und unvollst&auml;ndiger Informationen verursacht wurden, sind grunds&auml;tzlich ausgeschlossen, sofern seitens des Autors kein nachweislich vors&auml;tzliches oder grob fahrl&auml;ssiges Verschulden vorliegt.<br />Alle Angebote sind freibleibend und unverbindlich. Der Autor beh&auml;lt es sich ausdr&uuml;cklich vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ank&uuml;ndigung zu ver&auml;ndern, zu erg&auml;nzen, zu l&ouml;schen oder die Ver&ouml;ffentlichung zeitweise oder endg&uuml;ltig einzustellen.</p><p>&nbsp;</p><p><b>2. Verweise und Links</b><br />Bei direkten oder indirekten Verweisen auf fremde Webseiten (&quot;Hyperlinks&quot;), die au&szlig;erhalb des Verantwortungsbereiches des Autors liegen, w&uuml;rde eine Haftungsverpflichtung ausschlie&szlig;lich in dem Fall in Kraft treten, in dem der Autor von den Inhalten Kenntnis hat und es ihm technisch m&ouml;glich und zumutbar w&auml;re, die Nutzung im Falle rechtswidriger Inhalte zu verhindern.<br />Der Autor erkl&auml;rt hiermit ausdr&uuml;cklich, dass zum Zeitpunkt der Linksetzung keine illegalen Inhalte auf den zu verlinkenden Seiten erkennbar waren. Auf die aktuelle und zuk&uuml;nftige Gestaltung, die Inhalte oder die Urheberschaft der gelinkten/verkn&uuml;pften Seiten hat der Autor keinerlei Einfluss. Deshalb distanziert er sich hiermit ausdr&uuml;cklich von allen Inhalten aller gelinkten /verkn&uuml;pften Seiten, die nach der Linksetzung ver&auml;ndert wurden. Diese Feststellung gilt f&uuml;r alle innerhalb des eigenen Internetangebotes gesetzten Links und Verweise sowie f&uuml;r Fremdeintr&auml;ge in vom Autor eingerichteten G&auml;steb&uuml;chern, Diskussionsforen und Mailinglisten. F&uuml;r illegale, fehlerhafte oder unvollst&auml;ndige Inhalte und insbesondere f&uuml;r Sch&auml;den, die aus der Nutzung oder Nichtnutzung solcherart dargebotener Informationen entstehen, haftet allein der Anbieter der Seite, auf welche verwiesen wurde, nicht derjenige, der &uuml;ber Links auf die jeweilige Ver&ouml;ffentlichung lediglich verweist.</p><p>&nbsp;</p><p><b>3. Urheber- und Kennzeichenrecht</b> <br />Der Autor ist bestrebt, in allen Publikationen die Urheberrechte der verwendeten Grafiken, Tondokumente, Videosequenzen und Texte zu beachten, von ihm selbst erstellte Grafiken, Tondokumente, Videosequenzen und Texte zu nutzen oder auf lizenzfreie Grafiken, Tondokumente, Videosequenzen und Texte zur&uuml;ckzugreifen.<br />Alle innerhalb des Internetangebotes genannten und ggf. durch Dritte gesch&uuml;tzten Marken- und Warenzeichen unterliegen uneingeschr&auml;nkt den Bestimmungen des jeweils g&uuml;ltigen Kennzeichenrechts und den Besitzrechten der jeweiligen eingetragenen Eigent&uuml;mer. Allein aufgrund der blo&szlig;en Nennung ist nicht der Schluss zu ziehen, dass Markenzeichen nicht durch Rechte Dritter gesch&uuml;tzt sind!<br />Das Copyright f&uuml;r ver&ouml;ffentlichte, vom Autor selbst erstellte Objekte bleibt allein beim Autor der Seiten. Eine Vervielf&auml;ltigung oder Verwendung solcher Grafiken, Tondokumente, Videosequenzen und Texte in anderen elektronischen oder gedruckten Publikationen ist ohne ausdr&uuml;ckliche Zustimmung des Autors nicht gestattet.</p><p>&nbsp;</p><p><b>4. Datenschutz</b><br />Sofern innerhalb des Internetangebotes die M&ouml;glichkeit zur Eingabe pers&ouml;nlicher oder gesch&auml;ftlicher Daten (Emailadressen, Namen, Anschriften) besteht, so erfolgt die Preisgabe dieser Daten seitens des Nutzers auf ausdr&uuml;cklich freiwilliger Basis. Die Inanspruchnahme und Bezahlung aller angebotenen Dienste ist - soweit technisch m&ouml;glich und zumutbar - auch ohne Angabe solcher Daten bzw. unter Angabe anonymisierter Daten oder eines Pseudonyms gestattet. Die Nutzung der im Rahmen des Impressums oder vergleichbarer Angaben ver&ouml;ffentlichten Kontaktdaten wie Postanschriften, Telefon- und Faxnummern sowie Emailadressen durch Dritte zur &Uuml;bersendung von nicht ausdr&uuml;cklich angeforderten Informationen ist nicht gestattet. Rechtliche Schritte gegen die Versender von sogenannten Spam-Mails bei Verst&ouml;ssen gegen dieses Verbot sind ausdr&uuml;cklich vorbehalten. </p><p>&nbsp;</p><p><b>5. Rechtswirksamkeit dieses Haftungsausschlusses</b><br />Dieser Haftungsausschluss ist als Teil des Internetangebotes zu betrachten, von dem aus auf diese Seite verwiesen wurde. Sofern Teile oder einzelne Formulierungen dieses Textes der geltenden Rechtslage nicht, nicht mehr oder nicht vollst&auml;ndig entsprechen sollten, bleiben die &uuml;brigen Teile des Dokumentes in ihrem Inhalt und ihrer G&uuml;ltigkeit davon unber&uuml;hrt. </p>',
	'TXT_TOP1' 		=> 'Impressum gem&auml;&szlig; &sect; 6 Teledienstegesetz (TDG), &sect; 6 Mediendienste-Staatsvertrag (MDSTv) und &sect; 4 Abs. 3 Bundesdatenschutzgesetz (BDSG)',
	'TXT_TOP2' 		=> 'Inhaltlich Verantwortlicher gem&auml;&szlig; &sect; 10 Absatz 3 MDStV: %s (Anschrift wie oben).',
	'TXT_TOP3'		=> 'Verantwortlich f&uuml;r den Inhalt',
	'NAME'  		=> 'Vorname / Name',
	'COMPANY'  		=> 'Firma',
	'ADRESS'  		=> 'Adresse',
	'IMPR_LOCATION'	=> 'Plz/Ort',
	'PHOME'  		=> 'Telefon',
	'TAXNR' 		=> 'Ust-ID',
	'IMPRESSUM_UPDATED' 	=> 'Das Impressum wurde aktuallisiert',
	'IMPRESSUM_DESC'	=> 'Hier kannst du die Daten f&uuml;r das Impressum &auml;ndern und ausw&auml;hlen welche Optionen angezeigt werden sollen.',
	'MOBILE' 		=> 'Handy',
	'FAX'			=> 'Fax',
	'JUSTICATION'		=> 'Gerichtsstand',
	'TRADE'			=> 'Handelsregister',
	'LOGO'			=> 'URL zum Logo',
	'SHOW'			=> 'anzeigen',
));

?>