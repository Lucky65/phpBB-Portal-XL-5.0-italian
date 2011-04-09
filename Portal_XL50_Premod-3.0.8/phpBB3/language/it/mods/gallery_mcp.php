<?php
/**
*
* gallery_mcp [Italian]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @copyright (c) 2009, 2011 luckylab.eu - update translation for portal xl on 2011/03/29
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
	'CHOOSE_ACTION'					=> 'Seleziona l’azione desiderata',

	'GALLERY_MCP_MAIN'				=> 'Principale',
	'GALLERY_MCP_QUEUE'				=> 'Coda',
	'GALLERY_MCP_QUEUE_DETAIL'		=> 'Dettagli immagine',
	'GALLERY_MCP_REPORTED'			=> 'Immagini segnalate',
	'GALLERY_MCP_REPO_DONE'			=> 'Segnalazioni chiuse',
	'GALLERY_MCP_REPO_OPEN'			=> 'Apri segnalazioni',
	'GALLERY_MCP_REPO_DETAIL'		=> 'Dettagli segnalazioni',
	'GALLERY_MCP_UNAPPROVED'		=> 'Immagini in attesa di approvazione',
	'GALLERY_MCP_APPROVED'			=> 'Immagini approvate',
	'GALLERY_MCP_LOCKED'			=> 'Immagini bloccate',
	'GALLERY_MCP_VIEWALBUM'			=> 'Visualizza album',

	'IMAGE_REPORTED'				=> 'Questa immagine è stata segnalata.',
	'IMAGE_UNAPPROVED'				=> 'Questa immagine è in attesa di approvazione.',

	'MODERATE_ALBUM'				=> 'Modera album',

	'QUEUE_A_APPROVE'				=> 'Approva immagine',
	'QUEUE_A_APPROVE2'				=> 'Approva immagine?',
	'QUEUE_A_APPROVE2_CONFIRM'		=> 'Sei sicuro di voler approvare questa immagine?',
	'QUEUE_A_DELETE'				=> 'Cancella immagine',
	'QUEUE_A_DELETE2'				=> 'Cancella immagine?',
	'QUEUE_A_DELETE2_CONFIRM'		=> 'Sei sicuro di voler cancellare questa immagine?',
	'QUEUE_A_LOCK'					=> 'Blocca immagine',
	'QUEUE_A_LOCK2'					=> 'Blocca immagine?',
	'QUEUE_A_LOCK2_CONFIRM'			=> 'Sei sicuro di voler bloccare questa immagine?',
	'QUEUE_A_MOVE'					=> 'Sposta immagine',
	'QUEUE_A_UNAPPROVE'				=> 'Disapprova immagine',
	'QUEUE_A_UNAPPROVE2'			=> 'Disapprova immagine?',
	'QUEUE_A_UNAPPROVE2_CONFIRM'	=> 'Sei sicuro di voler disapprovare questa immagine?',

	'QUEUE_STATUS_0'				=> 'Questa immagine è in attesa di approvazione.',
	'QUEUE_STATUS_1'				=> 'Questa immagine è stata approvata.',
	'QUEUE_STATUS_2'				=> 'Questa immagine è bloccata.',

	'QUEUES_A_APPROVE'				=> 'Approva immagine',
	'QUEUES_A_APPROVE2'				=> 'Approva immagine?',
	'QUEUES_A_APPROVE2_CONFIRM'		=> 'Sei sicuro di voler approvare questa immagine?',
	'QUEUES_A_DELETE'				=> 'Cancella immagine',
	'QUEUES_A_DELETE2'				=> 'Cancella immagine?',
	'QUEUES_A_DELETE2_CONFIRM'		=> 'Sei sicuro di voler cancellare questa immagine?',
	'QUEUES_A_LOCK'					=> 'Blocca immagini',
	'QUEUES_A_LOCK2'				=> 'Blocca immagini?',
	'QUEUES_A_LOCK2_CONFIRM'		=> 'Sei sicuro di voler bloccare queste immagini?',
	'QUEUES_A_MOVE'					=> 'Sposta immagini',
	'QUEUES_A_UNAPPROVE'			=> 'Disapprova immagini',
	'QUEUES_A_UNAPPROVE2'			=> 'Disapprova immagini?',
	'QUEUES_A_UNAPPROVE2_CONFIRM'	=> 'Sei sicuro di voler disapprovare queste immagini?',

	'REPORT_A_CLOSE'				=> 'Chiudi segnalazione',
	'REPORT_A_CLOSE2'				=> 'Chiudi segnalazione?',
	'REPORT_A_CLOSE2_CONFIRM'		=> 'Sei sicuro di voler chiudere questa segnalazione?',
	'REPORT_A_DELETE'				=> 'Cancella segnalzione',
	'REPORT_A_DELETE2'				=> 'Cancella segnalzione?',
	'REPORT_A_DELETE2_CONFIRM'		=> 'Sei sicuro di voler cancellare questa segnalazione?',
	'REPORT_A_OPEN'					=> 'Apri segnalazione',
	'REPORT_A_OPEN2'				=> 'Apri segnalazione?',
	'REPORT_A_OPEN2_CONFIRM'		=> 'Sei sicuro di voler aprire questa segnalazione?',

	'REPORT_STATUS_1'				=> 'Questa segnalzione necessita di controllo.',
	'REPORT_STATUS_2'				=> 'Questa segnalazione è chiusa.',

	'REPORTS_A_CLOSE'				=> 'Chiudi segnalazioni',
	'REPORTS_A_CLOSE2'				=> 'Chiudi segnalazioni?',
	'REPORTS_A_CLOSE2_CONFIRM'		=> 'Sei sicuro di voler chiudere queste segnalazioni?',
	'REPORTS_A_DELETE'				=> 'Cancella segnalazioni',
	'REPORTS_A_DELETE2'				=> 'Cancella segnalazioni?',
	'REPORTS_A_DELETE2_CONFIRM'		=> 'Sei sicuro di voler cancellare queste segnalazioni?',
	'REPORTS_A_OPEN'				=> 'Apri segnalazioni',
	'REPORTS_A_OPEN2'				=> 'Apri segnalazioni?',
	'REPORTS_A_OPEN2_CONFIRM'		=> 'Sei sicuro di voler aprire queste segnalzioni?',

	'REPORT_MOD'					=> 'Modificato da',
	'REPORTED_IMAGES'				=> 'Immagini segnalate',
	'REPORTER'						=> 'Segnalazione utente',
	'REPORTER_AND_ALBUM'			=> 'Segnalazione & Album',

	'WAITING_APPROVED_IMAGE'		=> array(
		0			=> 'Non ci sono immagini approvate.',
		1			=> 'In totale c’è <span style="font-weight: bold;">1</span> immagine approvata.',
		2			=> 'In totale ci sono <span style="font-weight: bold;">%s</span> imamagini approvate.',
	),
	'WAITING_LOCKED_IMAGE'			=> array(
		0			=> 'Nessuna immagine bloccata.',
		1			=> 'In totale c’è <span style="font-weight: bold;">1</span> immagine chiusa.',
		2			=> 'In totale ci sono <span style="font-weight: bold;">%s</span> immagini chiuse.',
	),
	'WAITING_REPORTED_DONE'			=> array(
		0			=> 'Nessuna segnalazione ricevuta.',
		1			=> 'In totale c’è <span style="font-weight: bold;">1</span> segnalazione controllate.',
		2			=> 'In totale ci sono <span style="font-weight: bold;">%s</span> segnalazioni controllate.',
	),
	'WAITING_REPORTED_IMAGE'		=> array(
		0			=> 'Nessuna segnalazione ricevuta.',
		1			=> 'In totale c’è <span style="font-weight: bold;">1</span> segnalazione da controllare.',
		2			=> 'In totale ci sono <span style="font-weight: bold;">%s</span> segnalazioni da controllare.',
	),
	'WAITING_UNAPPROVED_IMAGE'		=> array(
		0			=> 'Non risultano immagini in attesa di approvazione.',
		1			=> 'In totale c’è <span style="font-weight: bold;">1</span> imaggine in attesa di approvazione.',
		2			=> 'In totale ci sono <span style="font-weight: bold;">%s</span> immagini in attesa di approvazione.',
	),
));

?>