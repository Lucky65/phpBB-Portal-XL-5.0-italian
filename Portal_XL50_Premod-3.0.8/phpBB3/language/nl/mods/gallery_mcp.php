<?php
/**
*
* gallery_mcp [Nederlands]
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
	'CHOOSE_ACTION'					=> 'Selecteer gewenste actie',

	'GALLERY_MCP_MAIN'				=> 'Hoofdmenu',
	'GALLERY_MCP_QUEUE'				=> 'Wachtrij',
	'GALLERY_MCP_QUEUE_DETAIL'		=> 'Afbeeldingdetails',
	'GALLERY_MCP_REPORTED'			=> 'Gerapporteerde afbeeldingen',
	'GALLERY_MCP_REPO_DONE'			=> 'Gesloten rapportages',
	'GALLERY_MCP_REPO_OPEN'			=> 'Open rapportages',
	'GALLERY_MCP_REPO_DETAIL'		=> 'Rapportage details',
	'GALLERY_MCP_UNAPPROVED'		=> 'Afbeeldingen wachtend op goedkeuring',
	'GALLERY_MCP_APPROVED'			=> 'Goedgekeurde afbeeldingen',
	'GALLERY_MCP_LOCKED'			=> 'Gesloten afbeeldingen',
	'GALLERY_MCP_VIEWALBUM'			=> 'Bekijk album',

	'IMAGE_REPORTED'				=> 'Deze afbeelding is gerapporteerd.',
	'IMAGE_UNAPPROVED'				=> 'Deze afbeelding wacht op goedkeuring.',

	'MODERATE_ALBUM'				=> 'Modereer album',

	'QUEUE_A_APPROVE'				=> 'Afbeelding goedkeuren',
	'QUEUE_A_APPROVE2'				=> 'Afbeelding goedkeuren?',
	'QUEUE_A_APPROVE2_CONFIRM'		=> 'Weet je zeker dat je deze afbeelding wilt goedkeuren?',
	'QUEUE_A_DELETE'				=> 'Afbeelding verwijderen',
	'QUEUE_A_DELETE2'				=> 'Afbeelding verwijderen?',
	'QUEUE_A_DELETE2_CONFIRM'		=> 'Weet je zeker dat je deze afbeelding wilt verwijderen?',
	'QUEUE_A_LOCK'					=> 'Afbeelding sluiten',
	'QUEUE_A_LOCK2'					=> 'Afbeelding sluiten?',
	'QUEUE_A_LOCK2_CONFIRM'			=> 'Weet je zeker dat je deze afbeelding wilt sluiten?',
	'QUEUE_A_MOVE'					=> 'Verplaats afbeelding',
	'QUEUE_A_UNAPPROVE'				=> 'Afbeelding afkeuren',
	'QUEUE_A_UNAPPROVE2'			=> 'Afbeelding afkeuren?',
	'QUEUE_A_UNAPPROVE2_CONFIRM'	=> 'Weet je zeker dat je deze afbeelding wilt afkeuren?',

	'QUEUE_STATUS_0'				=> 'Deze afbeelding wacht op goedkeuring.',
	'QUEUE_STATUS_1'				=> 'Deze afbeelding is goedgekeurd.',
	'QUEUE_STATUS_2'				=> 'Deze afbeelding is gesloten.',

	'QUEUES_A_APPROVE'				=> 'Afbeeldingen goedkeuren',
	'QUEUES_A_APPROVE2'				=> 'Afbeeldingen goedkeuren?',
	'QUEUES_A_APPROVE2_CONFIRM'		=> 'Weet je zeker dat je deze afbeeldingen wilt goedkeuren?',
	'QUEUES_A_DELETE'				=> 'Afbeeldingen verwijderen',
	'QUEUES_A_DELETE2'				=> 'Afbeeldingen verwijderen?',
	'QUEUES_A_DELETE2_CONFIRM'		=> 'Weet je zeker dat je deze afbeeldingen wilt verwijderen?',
	'QUEUES_A_LOCK'					=> 'Afbeeldingen sluiten',
	'QUEUES_A_LOCK2'				=> 'Afbeeldingen sluiten?',
	'QUEUES_A_LOCK2_CONFIRM'		=> 'Weet je zeker dat je deze afbeeldingen wilt sluiten?',
	'QUEUES_A_MOVE'					=> 'Verplaats afbeeldingen',
	'QUEUES_A_UNAPPROVE'			=> 'Afbeeldingen afkeuren',
	'QUEUES_A_UNAPPROVE2'			=> 'Afbeeldingen afkeuren?',
	'QUEUES_A_UNAPPROVE2_CONFIRM'	=> 'Weet je zeker dat je deze afbeeldingen wilt afkeuren?',

	'REPORT_A_CLOSE'				=> 'Rapportage sluiten',
	'REPORT_A_CLOSE2'				=> 'Rapportage sluiten?',
	'REPORT_A_CLOSE2_CONFIRM'		=> 'Weet je zeker dat je deze rapportage wilt sluiten?',
	'REPORT_A_DELETE'				=> 'Rapportage verwijderen',
	'REPORT_A_DELETE2'				=> 'Rapportage verwijderen?',
	'REPORT_A_DELETE2_CONFIRM'		=> 'Weet je zeker dat je deze rapportage wilt verwijderen?',
	'REPORT_A_OPEN'					=> 'Rapportage openen',
	'REPORT_A_OPEN2'				=> 'Rapportage openen?',
	'REPORT_A_OPEN2_CONFIRM'		=> 'Weet je zeker dat je deze rapportage wilt openen?',

	'REPORT_STATUS_1'				=> 'Deze rapportage moet bekeken worden.',
	'REPORT_STATUS_2'				=> 'Deze rapportage is gesloten.',

	'REPORTS_A_CLOSE'				=> 'Rapportages sluiten',
	'REPORTS_A_CLOSE2'				=> 'Rapportages sluiten?',
	'REPORTS_A_CLOSE2_CONFIRM'		=> 'Weet je zeker dat je deze rapportages wilt sluiten?',
	'REPORTS_A_DELETE'				=> 'Rapportages verwijderen',
	'REPORTS_A_DELETE2'				=> 'Rapportages verwijderen?',
	'REPORTS_A_DELETE2_CONFIRM'		=> 'Weet je zeker dat je deze rapportages wilt verwijderen?',
	'REPORTS_A_OPEN'				=> 'Rapportages openen',
	'REPORTS_A_OPEN2'				=> 'Rapportages openen?',
	'REPORTS_A_OPEN2_CONFIRM'		=> 'Weet je zeker dat je deze rapportages wilt openen?',

	'REPORT_MOD'					=> 'Bewerkt door',
	'REPORTED_IMAGES'				=> 'Gerapporteerde afbeeldingen',
	'REPORTER'						=> 'Rapporterende gebruiker',
	'REPORTER_AND_ALBUM'			=> 'Rapporteur & Album',

	'WAITING_APPROVED_IMAGE'		=> array(
		0			=> 'Geen te keuren afbeeldingen.',
		1			=> 'In totaal is er <span style="font-weight: bold;">1</span> afbeelding goedgekeurd.',
		2			=> 'In totaal zijn er <span style="font-weight: bold;">%s</span> afbeelding goedgekeurd.',
	),
	'WAITING_LOCKED_IMAGE'			=> array(
		0			=> 'Geen afgesloten afbeeldingen.',
		1			=> 'In totaal is er <span style="font-weight: bold;">1</span> afbeelding gesloten.',
		2			=> 'In totaal zijn er <span style="font-weight: bold;">%s</span> afbeeldingen gesloten.',
	),
	'WAITING_REPORTED_DONE'			=> array(
		0			=> 'Geen rapportages bekeken.',
		1			=> 'In totaal is er <span style="font-weight: bold;">1</span> rapportage bekeken.',
		2			=> 'In totaal zijn er <span style="font-weight: bold;">%s</span> rapportages bekeken.',
	),
	'WAITING_REPORTED_IMAGE'		=> array(
		0			=> 'Geen rapportages om te bekijken.',
		1			=> 'In totaal is er <span style="font-weight: bold;">1</span> rapportage om te bekijken.',
		2			=> 'In totaal zijn er <span style="font-weight: bold;">%s</span> rapportages om te bekijken.',
	),
	'WAITING_UNAPPROVED_IMAGE'		=> array(
		0			=> 'Geen afbeeldingen die wachten op goedkeuring.',
		1			=> 'In totaal is er <span style="font-weight: bold;">1</span> afbeelding die wacht op goedkeuring.',
		2			=> 'In totaal zijn er <span style="font-weight: bold;">%s</span> afbeeldingen die wachten op goedkeuring.',
	),
));

?>