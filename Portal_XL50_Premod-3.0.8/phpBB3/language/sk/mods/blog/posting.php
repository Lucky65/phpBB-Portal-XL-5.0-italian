<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: posting.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
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
	'ADD_BLOG'					=> 'Pridať nový príspevok do blogu',
	'APPROVE_BLOG'				=> 'Schválenie Zadania do Blogu',
	'APPROVE_BLOG_CONFIRM'		=> 'Ste si istí, mám povoliť toto zadanie v blogu?',
	'APPROVE_BLOG_SUCCESS'		=> 'Zadanie som povolil, je uvolnené pre verejné sledovanie v Blogu.',
	'APPROVE_REPLY'				=> 'Schválenie Komentára',
	'APPROVE_REPLY_CONFIRM'		=> 'Ste si istí, mám povoliť tento komentár?',
	'APPROVE_REPLY_SUCCESS'		=> 'Komentár som povolil, a je uvolnený pre verejné sledovanie v Blogu.',

	'BLOG_ALREADY_APPROVED'		=> 'Táto položka blogu je už schválená.',
	'BLOG_ALREADY_DELETED'		=> 'Zadanie v blogu bolo už odstránené.',
	'BLOG_APPROVE_PM'			=> 'Toto je automaticky odoslaná správa z Módu Uživateľského Blogu.<br /><br />%1$s has just posted <a href="%2$s">toto zadanie v  blogu</a> and it needs approval before it is publically viewable.<br />Prečítajte si zadanie blogu a rozhodnite sa, čo s tým urobíte.',
	'BLOG_APPROVE_PM_SUBJECT'	=> 'Zadanie Blogu musí byť schválené!',
	'BLOG_DELETED'				=> 'Zadanie z Blogu bolo úspešne odstránené.',
	'BLOG_EDIT_LOCKED'			=> 'Zadanie v Blogu je uzamknuté nemôže sa upravovať.',
	'BLOG_EDIT_SUCCESS'			=> 'Zadanie v Blogu bolo úspešne upravené!',
	'BLOG_NEED_APPROVE'			=> 'Moderátor alebo administrátor musia schváliť váš blog, pred tým ako bude zverejnený.',
	'BLOG_NOT_DELETED'			=> 'Zadanie v blogu nie je odstránené. Prečo sa snažíte o jeho obnovenie?',
	'BLOG_REPORT_CONFIRM'		=> 'Ste si istí, chcete nahlásiť zadanie tohto blogu?',
	'BLOG_REPORT_PM'			=> 'Toto je automaticky odoslaná správa z Módu Uživateľského Blogu.<br /><br />%1$s nahlásil <a href="%2$s">toto zadanie v  blogu</a>.<br />Prečítajte si zadanie blogu a rozhodnite sa, čo s tým urobíte.',
	'BLOG_REPORT_PM_SUBJECT'	=> 'Bolo Nahlásené Zadanie Blogu!',
	'BLOG_SUBMIT_SUCCESS'		=> 'Zadanie do Blogu bolo úspešne odoslané!',
	'BLOG_SUBSCRIPTION_NOTICE'	=> 'Toto je automaticky odoslaná správa z Módu Uživateľského Blogu ktorá vám oznamujeme, že bol pridaný komentár do [url=%1$s]this[/url] blog entry by %2$s.<br /><br />If you would like to no longer recieve these notices click [url=%3$s]here[/url] to unsubscribe.',
	'BLOG_UNDELETED'			=> 'Zadanie v Blogu bolo úspešne obnovené  .',

	'CATEGORY_EXPLAIN'			=> 'Môžete označiť aj viac ako jednu kategóriu, podržte kláves CTRL a kliknutím, alebo ich označením sa vloží zadané do vášho výberu.<br /><br />Položky blogu budú <strong>vždy</strong> zobrazené aj vo vašom osobnom Blogu.',

	'DELETE_BLOG_CONFIRM'		=> 'Ste si istí, mám zmazať toto zadanie v  blogu?',
	'DELETE_REPLY_CONFIRM'		=> 'Ste si istí, mám zmazať tento komentár?',

	'EDIT_A_BLOG'				=> 'Upraviť položku v blogu',
	'EDIT_A_REPLY'				=> 'Upraviť komentár',

	'HARD_DELETE'				=> 'Nenávratne Vymazať',
	'HARD_DELETE_EXPLAIN'		=> 'Ak označíte toto zadanie, príspevok sa nikdy nebude dať vrátiť späť!',

	'NO_PERMISSIONS_SINGLE'		=> 'V blogu zadanie nemôže čítať ani naň odpovedať.',

	'PERMISSIONS'				=> 'Oprávnenia',

	'REPLY_ALREADY_APPROVED'	=> 'Tento komentár je už schválený.',
	'REPLY_APPROVE_PM'			=> 'Toto je automaticky odoslaná správa z Módu Uživateľského Blogu.<br /><br />%1$s práve uverejnil <a href="%2$s">tento komentár</a> je treba vykonať schválenie predtým, ako bude zverejnený.<br />Prečítajte si zadanie blogu a rozhodnite sa, čo s tým urobíte.',
	'REPLY_APPROVE_PM_SUBJECT'	=> 'Komentár v Blogu čaká na schválenie!',
	'REPLY_DELETED'				=> 'Komentár bol vymazaný.',
	'REPLY_EDIT_LOCKED'			=> 'Tento komentár je uzamknutý, práve sa upravuje.',
	'REPLY_EDIT_SUCCESS'		=> 'Komentár bol upravený úspešne!',
	'REPLY_NEED_APPROVE'		=> 'Moderátor alebo administrátor musia schváliť tvoje pripomienky pred tým, ako budú zverejnené.',
	'REPLY_NOT_DELETED'			=> 'Tento komentár nie je odstránená. Prečo sa ho snažíš obnoviť zo zmazaných?',
	'REPLY_PERMISSIONS_SINGLE'	=> 'Môže čítať a odpovedať na toto zadanie v  blogu.',
	'REPLY_REPORT_CONFIRM'		=> 'Ste si istí, naozaj chcete nahlásiť tento komentár?',
	'REPLY_REPORT_PM'			=> 'Toto je automaticky odoslaná správa z Módu Uživateľského Blogu.<br /><br />%1$s nahlásil <a href="%2$s">this comment</a>.<br />Prečítajte si zadanie blogu a rozhodnite sa, čo s tým urobíte.',
	'REPLY_REPORT_PM_SUBJECT'	=> 'Bolo Nahlásené Zadanie Blogu!',
	'REPLY_SUBMIT_SUCCESS'		=> 'Komentár bol úspešne odoslaný!',
	'REPLY_UNDELETED'			=> 'Komentár bol úspešne obnovený.',

	'SUBSCRIPTION_NOTICE'		=> 'Sledovať oznámenia Blogu Užívateľov',

	'UNDELETE_BLOG'				=> 'Obnoviť vymazaný zadnie Blogu',
	'UNDELETE_BLOG_CONFIRM'		=> 'Ste si istí, mám obnoviť toto vymazané zadanie v  blogu?',
	'UNDELETE_REPLY'			=> 'Obnoviť vymazaný Komentár',
	'UNDELETE_REPLY_CONFIRM'	=> 'Ste si istí, mám obnoviť tento vymazaný komentár?',
	'USER_SUBSCRIPTION_NOTICE'	=> 'Toto je automaticky odoslaná správa od užívateľa Blogu Oznamujem, že bol vytvorený nový blog. %1$s.  Môžete si prezrieť blog ak kliknete [url=%2$s]sem[/url].<br /><br />Ak už nechcete dostávat tieto oznamy, môžete sa odhlásiť kliknutím [url=%3$s]sem[/url].',

	'VIEW_PERMISSIONS_SINGLE'	=> 'V blogu zadanie môže len čítať.',
));

?>