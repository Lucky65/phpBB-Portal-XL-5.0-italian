<?php
/**
*
* viewtopic [Slovak]
*
* @package language
* @version $Id: viewtopic.php,v 1.20 2010/01/05 23:00:00 phpbb3.sk Exp $
* @copyright (c) 2007 phpBB Group
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
	'ATTACHMENT'						=> 'Príloha',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Prílohy nie sú povolené',

	'BOOKMARK_ADDED'		=> 'Záložka témy bola úspešne pridaná.',
	'BOOKMARK_ERR'			=> 'Pridávanie záložky témy bolo neúspešné. Skúste znovu, prosím.',
	'BOOKMARK_REMOVED'		=> 'Záložka témy bola úspešne vymazaná.',
	'BOOKMARK_TOPIC'		=> 'Pridať tému k záložkám',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Vymazať tému zo záložiek',
	'BUMPED_BY'				=> 'Posledné zvýraznenie urobil %1$s dňa %2$s',
	'BUMP_TOPIC'			=> 'Zvýrazniť tému',

	'CODE'					=> 'Kód',
	
	'COLLAPSE_QR'			=> 'Skryť rýchlu odpoveď',

	'DELETE_TOPIC'			=> 'Odstrániť tému',
	'DOWNLOAD_NOTICE'		=> 'Nemáte oprávnenie prezerať súbory priložené v tomto príspevku.',

	'EDITED_TIMES_TOTAL'	=> 'Naposledy upravil %1$s dňa %2$s, celkovo upravené %3$d',
	'EDITED_TIME_TOTAL'		=> 'Naposledy upravil %1$s dňa %2$s, celkovo upravené %3$d',
	'EMAIL_TOPIC'			=> 'Email priateľovi',
	'ERROR_NO_ATTACHMENT'	=> 'Vybraná príloha už neexistuje',

	'FILE_NOT_FOUND_404'	=> 'Súbor <strong>%s</strong> neexistuje.',
	'FORK_TOPIC'			=> 'Skopírovať tému',
	
	'FULL_EDITOR' => 'Upravit v editore',

	'LINKAGE_FORBIDDEN'		=> 'Nie ste autorizovaný pre prezeranie a sťahovanie z/do tohto webu.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Boli ste oboznámený o téme, prosím prihláste sa pre jej prezeranie.',
	'LOGIN_VIEWTOPIC'		=> 'Administrátor požaduje, aby ste boli registrovaný a prihlásený pre prezeranie tejto témy.',

	'MAKE_ANNOUNCE'				=> 'Zmeniť na Oznámenie',
	'MAKE_GLOBAL'				=> 'Zmeniť na Všeobecné',
	'MAKE_NORMAL'				=> 'Zmeniť na Normálne',
	'MAKE_STICKY'				=> 'Zmeniť na Dôležité',
	'MAX_OPTIONS_SELECT'		=> 'Môžete označiť <strong>%d</strong> možnosti',
	'MAX_OPTION_SELECT'			=> 'Môžete označiť <strong>1</strong> možnosť',
	'MISSING_INLINE_ATTACHMENT'	=> 'Príloha <strong>%s</strong> je dlhodobo nedostupná.',
	'MOVE_TOPIC'				=> 'Presunúť tému',

	'NO_ATTACHMENT_SELECTED'=> 'Nevybrali ste prílohu k stiahnutiu alebo zobrazeniu.',
	'NO_NEWER_TOPICS'		=> 'V tomto fóre nie sú žiadne novšie témy',
	'NO_OLDER_TOPICS'		=> 'V tomto fóre nie sú žiadne staršie témy',
	'NO_UNREAD_POSTS'		=> 'V tomto fóre nie sú ďalšie neprečítané témy.',
	'NO_VOTE_OPTION'		=> 'Musíte vybrať možnosť.',
	'NO_VOTES'				=> 'Nehlasovalo',

	'POLL_ENDED_AT'			=> 'Hlasovanie končí za %s',
	'POLL_RUN_TILL'			=> 'Hlasovanie trvá do %s',
	'POLL_VOTED_OPTION'		=> 'Hlasovali ste pre túto možnosť',
	'PRINT_TOPIC'			=> 'Verzia pre tlač',

  'QUICKREPLY'			=> 'Rýchla odpoveď',

	'QUICK_MOD'				=> 'Rýchla úprava',
	'QUOTE'					=> 'Citácia',

	'REPLY_TO_TOPIC'		=> 'Odpovedať na tému',
	'RETURN_POST'			=> '%sVrátiť sa na príspevok%s',
	
	'SHOW_QR'				=> 'Rýchla odpoveď',

	'SUBMIT_VOTE'			=> 'Potvrdiť voľbu',

	'TOTAL_VOTES'			=> 'Celkom hlasov',

	'UNLOCK_TOPIC'			=> 'Odomknúť tému',

	'VIEW_INFO'				=> 'Detaily príspevku',
	'VIEW_NEXT_TOPIC'		=> 'Ďalšia téma',
	'VIEW_PREVIOUS_TOPIC'	=> 'Predchádzajúca téma',
	'VIEW_RESULTS'			=> 'Zobraziť výsledky',
	'VIEW_TOPIC_POST'		=> 'Príspevok: 1',
	'VIEW_TOPIC_POSTS'		=> 'Príspevkov: %d',
	'VIEW_UNREAD_POST'		=> 'Prvé neprečítané správy',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Váš hlas bol prijatý',
  'VOTE_CONVERTED'		=> 'Zmena v hlasovaní nie je podporovaná pre konvertované hlasovanie.',
	'WROTE'					=> 'píše',
));

?>