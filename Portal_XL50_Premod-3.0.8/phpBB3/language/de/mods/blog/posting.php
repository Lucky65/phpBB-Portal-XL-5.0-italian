<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: posting.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $ 
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* German Translation Version 1.0.7 by FatFreddy (http://ww.mebitco.de)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ADD_BLOG'					=> 'neuen Blogeintrag hinzuf&uuml;gen',
	'APPROVE_BLOG'				=> 'Blogeintrag pr&uuml;fen',
	'APPROVE_BLOG_CONFIRM'		=> 'Bist Du sicher, da&szlig; dieser Blogeintrag freigegeben werden soll?',
	'APPROVE_BLOG_SUCCESS'		=> 'Du hast den Blogeintrag zur Ansicht freigegeben.',
	'APPROVE_REPLY'				=> 'Kommentar freigeben',
	'APPROVE_REPLY_CONFIRM'		=> 'Bist Du sicher, da&szlig; dieser Kommentar freigegeben werden soll?',
	'APPROVE_REPLY_SUCCESS'		=> 'Du hast den Kommentar zur Ansicht freigegeben.',

	'BLOG_ALREADY_APPROVED'		=> 'Dieser Blogeintrag ist bereits freigegeben.',
	'BLOG_ALREADY_DELETED'		=> 'Dieser Blogeintrag ist bereits gel&ouml;scht.',
	'BLOG_APPROVE_PM'			=> 'Dies ist eine automatische Benachrichtigung vom User Blog Mod.<br /><br />%1$s hat gerade <a href="%2$s">diesen Blogeintrag</a> geschrieben, der zur Ver&ouml;ffentlichung freigegeben werden mu&szlig;.<br />Nimm dir bitte die Zeit, ihn zu lesen und zu entscheiden, was zu tun ist.',
	'BLOG_APPROVE_PM_SUBJECT'	=> 'Blogeintrag zur &Uuml;berpr&uuml;fung!',
	'BLOG_DELETED'				=> 'Blogeintrag wurde gel&ouml;scht.',
	'BLOG_EDIT_LOCKED'			=> 'Dieser Blogeintrag ist f&uuml;r Bearbeitung gesperrt.',
	'BLOG_EDIT_SUCCESS'			=> 'Blogeintrag erfolgreich bearbeitet!',
	'BLOG_NEED_APPROVE'			=> 'Ein Moderator oder Administrator mu&szlig; deine Blogeintr&auml;ge freigeben bevor sie sichtbar sind.',
	'BLOG_NOT_DELETED'			=> 'Dieser Blogeintrag wurde nicht gel&ouml;scht.  Warum versuchtst du ihn wiederherzustellen?',
	'BLOG_REPORT_CONFIRM'		=> 'Bist du sicher, da&szlig; du diesen Blogeintrag melden willst?',
	'BLOG_REPORT_PM'			=> 'Dies ist eine automatische Benachrichtigung vom User Blog Mod.<br /><br />%1$s hat gerade <a href="%2$s">diesen Blogeintrag</a> gemeldet.<br />Nimm dir bitte die Zeit, ihn zu lesen und zu entscheiden, was zu tun ist.',
	'BLOG_REPORT_PM_SUBJECT'	=> 'Blogeintrag gemeldet!',
	'BLOG_SUBMIT_SUCCESS'		=> 'Dieser Blogeintrag wurde erfolgreich gesendet !',
	'BLOG_SUBSCRIPTION_NOTICE'	=> 'Dies ist eine automatische Benachrichtigung vom User Blog Mod um dich zu informiren, da&szlig; zu [url=%1$s]diesem[/url] Blogeintrag ein neuer Kommentar von %2$s geschrieben wurde.<br /><br />Wenn Du nicht weiter benachrichtigt werden m&ouml;chtest, klicke [url=%3$s]hier[/url] um dich abzumelden.',
	'BLOG_UNDELETED'			=> 'Der Blogeintrag ist wieder hergestellt.',

	'CATEGORY_EXPLAIN'			=> 'Du kannst eine oder mehrere Kategorien ausw&auml;hlen, wenn Du die CTRL-Taste gedr&uuml;ckt h&auml;lst und die gew&uuml;nschten Kategorien anklickst.<br /><br />In deinem pers&ouml;nlichen Blog werden <strong>immer</strong> alle Blogeintr&auml;ge angezeigt.',

	'DELETE_BLOG_CONFIRM'		=> 'Bist du sicher, da&szlig; du diesen Blogeintrag l&ouml;schen m&ouml;chtest?',
	'DELETE_REPLY_CONFIRM'		=> 'Bist du sicher, da&szlig; du diesen Kommentar l&ouml;schen m&ouml;chtest?',

	'EDIT_A_BLOG'				=> 'Blogeintrag bearbeiten',
	'EDIT_A_REPLY'				=> 'Kommentar bearbeiten',

	'HARD_DELETE'				=> 'endg&uuml;ltig l&ouml;schen',
	'HARD_DELETE_EXPLAIN'		=> 'Dieser Vorgang kann nicht r&uuml;ckg&auml;ngig gemacht werden!',

	'NO_PERMISSIONS_SINGLE'		=> 'Kann diesen Blogeintrag nicht lesen oder kommentieren.',

	'PERMISSIONS'				=> 'Befugnisse',

	'REPLY_ALREADY_APPROVED'	=> 'Dieser Kommentar ist bereits gepr&uuml;ft.',
	'REPLY_APPROVE_PM'			=> 'Dies ist eine automatische Benachrichtigung vom User Blog Mod.<br /><br />%1$s hat gerade <a href="%2$s">diesen Kommentar</a> verfasst, der zur Ver&ouml;ffentlichung freigeschaltet werden mu&szlig;.<br />Nimm dir bitte die Zeit, ihn zu lesen und zu entscheiden, was zu tun ist.',
	'REPLY_APPROVE_PM_SUBJECT'	=> 'Blog Kommentar Freigabe erforderlich!',
	'REPLY_DELETED'				=> 'Kommentar wurde gel&ouml;scht.',
	'REPLY_EDIT_LOCKED'			=> 'Dieser Kommentar ist f&uuml;r Bearbeitungen gesperrt',
	'REPLY_EDIT_SUCCESS'		=> 'Der Kommentar wurde erfolgreich ge&auml;ndert!',
	'REPLY_NEED_APPROVE'		=> 'Ein Moderator oder Administrator mu&szlig; deine Kommentare freigeben bevor sie sichtbar sind.',
	'REPLY_NOT_DELETED'			=> 'Dieser Kommentar wurde nicht gel&ouml;scht.  Warum versuchtst du ihn wiederherzustellen?',
	'REPLY_PERMISSIONS_SINGLE'	=> 'Kann diesen Blogeintrag lesen und beantworten.',
	'REPLY_REPORT_CONFIRM'		=> 'Bist Du sicher, da&szlig; Du diesen Kommentar melden m&ouml;chtest?',
	'REPLY_REPORT_PM'			=> 'Dies ist eine automatische Benachrichtigung vom User Blog Mod.<br /><br />%1$s hat gerade <a href="%2$s">diesen Kommentar</a> gemeldet.<br />Nimm dir bitte die Zeit, ihn zu lesen und zu entscheiden, was zu tun ist.',
	'REPLY_REPORT_PM_SUBJECT'	=> 'Kommentar gemeldet!',
	'REPLY_SUBMIT_SUCCESS'		=> 'Kommentar wurde erfolgreich gespeichert!',
	'REPLY_UNDELETED'			=> 'Kommentar wurde wiederhergestellt.',

	'SUBSCRIPTION_NOTICE'		=> 'Beobachtungsnachricht vom User Blog Mod',

	'UNDELETE_BLOG'				=> 'Blogeintrag wieder herstellen',
	'UNDELETE_BLOG_CONFIRM'		=> 'Bist Du sicher, da&szlig; Du diesen Blogeintrag wieder herstellen m&ouml;chtest?',
	'UNDELETE_REPLY'			=> 'Kommentar wieder herstellen',
	'UNDELETE_REPLY_CONFIRM'	=> 'Bist Du sicher, da&szlig; Du diesen Kommentar wieder herstellen m&ouml;chtest?',
	'USER_SUBSCRIPTION_NOTICE'	=> 'Dies ist eine automatische Benachrichtigung vom User Blog Mod um dich zu informieren, da&szlig; %1$s einen neuen Blogeintrag geschrieben hat. Du kannst ihn [url=%2$s]hier[/url] lesen.<br /><br />Wenn Du diese Benachrichtigungen nicht l&auml;nger erhalten willst, klicke [url=%3$s]hier[/url] um dich abzumelden.',

	'VIEW_PERMISSIONS_SINGLE'	=> 'Kann diesen Blogeintrag lesen.',
));

?>