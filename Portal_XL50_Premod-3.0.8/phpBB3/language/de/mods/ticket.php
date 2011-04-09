<?php
/**
* //SupportTicket System
* ticket [German]
* translation by purzl--> Portal XL Germany http://portalxl.ohost.de
* @package language
* @version $Id: ticket.php 1 2008-03-19 14:31:04Z nickvergessen $
* @copyright (c) 2008 Mahony; 2008 Mahony
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Deutsche &Uuml;bersetzung durch Mahony
* 
*
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
// ’ » „ “ — …
//
//
$lang = array_merge($lang, array(
	'STS_SUPPORT_TICKET'			=> 'Supportticket System',

	'STS_ERRMESSAGE'				=> 'Du hast keinen Titel f&uuml;r Dein Ticket angegeben. Bitte korrigiere dies, in dem Du den Zur&uuml;ck Button benutzt.',
	'STS_PHPBBVERSION'				=> 'Deine phpBB Version:',
	'STS_PHPBBTYPE'					=> 'Dein Portal Type:',
	'STS_STANDARD'					=> 'Standard Portal XL (Portal XL - Plain)',
	'STS_PREMOD'					=> 'Premodded Portal XL (Portal XL - premod)',
	'STS_ANDDIST'					=> 'andere phpBB Distribution',
	'STS_MODS'						=> 'Hast Du MODs (Modifications) im Forum installiert?',
	'STS_MODS_SHORT'				=> 'MODs installiert:',
	'STS_YES'						=> 'Ja',
	'STS_NO'						=> 'Nein',
	'STS_KNOWLEDGE'					=> 'Dein Wissensstand:',
	'STS_BEGINNER'					=> 'Einsteiger',

	'STS_BASICKNOW'					=> 'Anf&auml;nger',
	'STS_EXTENDED'					=> 'Fortgeschrittener',
	'STS_PROFI'						=> 'Profi',
	'STS_BEFOREERR'					=> 'Was hast Du gemacht, bevor das Problem aufgetaucht ist?',

	'STS_BOARDLINK'					=> 'Deine Boardadresse:',
	'STS_SELFSOLUTION'				=> 'Welche Versuche hast selber schon zur Probleml&ouml;sung unternommen?',
	'STS_PHPVER'					=> 'PHP Version:',
	'STS_SQLVER'					=> 'MySQL Version:',
	'STS_HEAD_MSG'					=> 'Beschreibung / Mitteilung',

	'STS_OPTIONAL'					=> 'nicht erforderlich',
	'STS_HEAD'						=> 'Mit diesen Informationen erleichterst Du den Supportern die Hilfe. <br />F&uuml;lle soviele Felder aus, wie eben m&ouml;glich. <br />Nur mit diesen Informationen kann Dir schnell und effizient geholfen werden! <br />Je mehr Informationen Sie uns geben desto schneller und effizienter ist die Hilfe.',
));
//SupportTicket System

?>