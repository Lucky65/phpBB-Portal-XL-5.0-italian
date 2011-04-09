<?php
/**
*
* gallery_mcp [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package phpBB Gallery
* @version $Id: gallery_mcp.php 915 2009-01-21 22:01:12Z nickvergessen $
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

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
	'CHOOSE_ACTION'					=> 'Volby výkonu',

	'GALLERY_MCP_MAIN'				=> 'Zadania Výkonov',
	'GALLERY_MCP_QUEUE'				=> 'Čakajúci',
	'GALLERY_MCP_QUEUE_DETAIL'		=> 'Detaily obrázka',
	'GALLERY_MCP_REPORTED'			=> 'Nahlásené obrázky',
	'GALLERY_MCP_REPO_DONE'			=> 'Zatvorim nahlásenie',
	'GALLERY_MCP_REPO_OPEN'			=> 'Otvorím nahlásenie',
	'GALLERY_MCP_REPO_DETAIL'		=> 'Podrobnosti nahlásenia',
	'GALLERY_MCP_UNAPPROVED'		=> 'Obrázky čakajúce na schválenie',
	'GALLERY_MCP_APPROVED'			=> 'Schváliť obrázok',
	'GALLERY_MCP_LOCKED'			=> 'Uzamknuté obrázky',
	'GALLERY_MCP_VIEWALBUM'			=> 'Obsah albumu',

	'IMAGE_REPORTED'				=> 'Tento obrátok je nahlásený.',
	'IMAGE_UNAPPROVED'				=> 'Tento obrázok čaká na schválenie.',

	'MODERATE_ALBUM'				=> 'Moderovať album',

	'QUEUE_A_APPROVE'				=> 'Schváliť obrázok/y',
	'QUEUE_A_APPROVE2'				=> 'Autorizovanie obrázkov!',
	'QUEUE_A_APPROVE2_CONFIRM'		=> 'Ste si istí, mám schváliť obrázok/y?',
	'QUEUE_A_DELETE'				=> 'Vymazať obrázok/y',
	'QUEUE_A_DELETE2'				=> 'Vymazanie obrázkov!',
	'QUEUE_A_DELETE2_CONFIRM'		=> 'Ste si istý mám vymazať obrázok/y?',
	'QUEUE_A_LOCK'					=> 'Uzamknúť obrázok/y',
	'QUEUE_A_LOCK2'					=> 'Uzamknutie obrázkov!',
	'QUEUE_A_LOCK2_CONFIRM'			=> 'Ste si istý mám, ozamknúť obrázok/y?',
	'QUEUE_A_MOVE'					=> 'Presunúť obrázok/y',
	'QUEUE_A_UNAPPROVE'				=> 'Neschváliť obrázok/y',
	'QUEUE_A_UNAPPROVE2'			=> 'Neschválenie obrázkov!',
	'QUEUE_A_UNAPPROVE2_CONFIRM'	=> 'Ste si istý mám zakázať zverejniť obrázok/y?',

	'QUEUE_STATUS_0'				=> 'Obrázok čaká na schválenie.',
	'QUEUE_STATUS_1'				=> 'Obrázok je schválený.',
	'QUEUE_STATUS_2'				=> 'Obrázok je uzamkmutý.',

	'QUEUES_A_APPROVE'				=> 'Schváliť obrázok',
	'QUEUES_A_APPROVE2'				=> 'Schválenie obrázkov!',
	'QUEUES_A_APPROVE2_CONFIRM'		=> 'Ste si istí, mám schváliť tieto obrázky?',
	'QUEUES_A_DELETE'				=> 'Vymazať obrázky',
	'QUEUES_A_DELETE2'				=> 'Vymazanie obrázkov!',
	'QUEUES_A_DELETE2_CONFIRM'		=> 'Ste si istí, mám vymazať tieto obrázky?',
	'QUEUES_A_LOCK'					=> 'Uzamknúť obrázky',
	'QUEUES_A_LOCK2'				=> 'Uzamknútie obrázkov!',
	'QUEUES_A_LOCK2_CONFIRM'		=> 'Ste si istí, mám uzamknúť tieto obrázky?',
	'QUEUES_A_MOVE'					=> 'Presunúť obrázok/y',
	'QUEUES_A_UNAPPROVE'			=> 'Neschváliť obrázky',
	'QUEUES_A_UNAPPROVE2'			=> 'Neschválenie obrázkov!',
	'QUEUES_A_UNAPPROVE2_CONFIRM'	=> 'Ste si istí, mám neschváliť tieto obrázky?',

	'REPORT_A_CLOSE'				=> 'Zatvoriť nahlásenie',
	'REPORT_A_CLOSE2'				=> 'Zatvoriť nahlásenie!',
	'REPORT_A_CLOSE2_CONFIRM'		=> 'Ste si istí, mám zatvoriť toto nahlásenie?',
	'REPORT_A_DELETE'				=> 'Vymazať nahlásenie',
	'REPORT_A_DELETE2'				=> 'Vymazať nahlásenie!',
	'REPORT_A_DELETE2_CONFIRM'		=> 'Ste si istí, mám vymazať toto nahlásenie?',
	'REPORT_A_OPEN'					=> 'Otvorím nahlásenie',
	'REPORT_A_OPEN2'				=> 'Otvorím nahlásenie!',
	'REPORT_A_OPEN2_CONFIRM'		=> 'Ste si istí, mám otvoriť toto nahlásenie?',

	'REPORT_STATUS_1'				=> 'Toto oznámenie je potrebné skontrolovať.',
	'REPORT_STATUS_2'				=> 'Toto oznámenie je uzatvorené.',

	'REPORTS_A_CLOSE'				=> 'Uzavrieť nahlásenia',
	'REPORTS_A_CLOSE2'				=> 'Uzavrietie nahlásení!',
	'REPORTS_A_CLOSE2_CONFIRM'		=> 'Ste si istí, mám uzavrieť tieto nahlásenia?',
	'REPORTS_A_DELETE'				=> 'Vymazať nahlásenia',
	'REPORTS_A_DELETE2'				=> 'Vymazanie nahlásení!',
	'REPORTS_A_DELETE2_CONFIRM'		=> 'Ste si istí, mám vymazať tieto nahlásenia?',
	'REPORTS_A_OPEN'				=> 'Otvoriť nahlásenia',
	'REPORTS_A_OPEN2'				=> 'Otvorím nahlásenia!',
	'REPORTS_A_OPEN2_CONFIRM'		=> 'Ste si istí, mám otvoriť tieto nahlásenia?',

	'REPORT_MOD'					=> 'Upravil',
	'REPORTED_IMAGES'				=> 'Nahlásené obrázky',
	'REPORTER'						=> 'Nahlásil uživateľ',
	'REPORTER_AND_ALBUM'			=> 'Referent & Album',

	'WAITING_APPROVED_IMAGE'		=> array(
		0			=> 'Nie sú tu žiadne obrázky na schválenie.',
		1			=> 'Je tu <span style="font-weight: bold;">1</span> obrázok na schválenie.',
		2			=> 'Celkom je <span style="font-weight: bold;">%s</span> obrázov na schválenie.',
	),
	'WAITING_LOCKED_IMAGE'			=> array(
		0			=> 'Žiadny obrázok nie je uzamknutý.',
		1			=> 'Je tu <span style="font-weight: bold;">1</span> obrázok uzamknutý.',
		2			=> 'Celkom je <span style="font-weight: bold;">%s</span> obrázkov uzamknutých.',
	),
	'WAITING_REPORTED_DONE'			=> array(
		0			=> 'Nie sú tu žiadne nahlásenia na posúdenie.',
		1			=> 'Je tu <span style="font-weight: bold;">1</span> nahlásenie na posúdenie.',
		2			=> 'Celkom je <span style="font-weight: bold;">%s</span> nahlásení na posúdenie.',
	),
	'WAITING_REPORTED_IMAGE'		=> array(
		0			=> 'Nie sú tu žiadne nahlásenia na posúdenie.',
		1			=> 'Je tu <span style="font-weight: bold;">1</span> nahlásenie na posúdenie.',
		2			=> 'Celkom je <span style="font-weight: bold;">%s</span> nahlásení na posúdenie.',
	),
	'WAITING_UNAPPROVED_IMAGE'		=> array(
		0			=> 'Nie sú tu žiadne obrázky ktoré čakajú na schválenie.',
		1			=> 'Je tu <span style="font-weight: bold;">1</span> obrázok čaká na schválenie.',
		2			=> 'Celkom <span style="font-weight: bold;">%s</span> obrázkov čaká na schválenie.',
	),
));

?>