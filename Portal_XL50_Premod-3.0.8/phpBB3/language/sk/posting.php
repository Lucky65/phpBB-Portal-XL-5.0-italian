<?php
/**
*
* posting [Slovak]
*
* @package language
* @version $Id: posting.php,v 1.74 2010/01/05 23:00:00 phpbb3.sk Exp $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @copyright (c) 2005 phpBB Group
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
	'ADD_ATTACHMENT'			=> 'Pripojiť prílohu',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Ak si želáte pripojiť jeden alebo viac súborov vyplňte nasledujúce detaily',
	'ADD_FILE'					=> 'Pridať súbor',
	'ADD_POLL'					=> 'Vytvoriť hlasovanie',
	'ADD_POLL_EXPLAIN'			=> 'Ak nechcete pridať hlasovanie, nechajte toto pole prázdne.',
	'ALREADY_DELETED'			=> 'Táto správa už bola vymazaná.',
	'ATTACH_QUOTA_REACHED'		=> 'Bola prekročená maximálna veľkosť adresára s prílohami.',
	'ATTACH_SIG'				=> 'Pripojiť podpis',

	'BBCODE_A_HELP'				=> 'Nahraná príloha: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Tučné: [b]text[/b]  (alt+b)',
	'BBCODE_C_HELP'				=> 'Kód: [code]kód[/code]  (alt+c)',
	'BBCODE_E_HELP'				=> 'Zoznam: Pridať časť zoznamu',
	'BBCODE_F_HELP'				=> 'Veľkosť písma: [size=85]malé písmo[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s je <em>OFF</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s je <em>ON</em>',
	'BBCODE_I_HELP'				=> 'Kurzíva: [i]text[/i]  (alt+i)',
	'BBCODE_L_HELP'				=> 'Zoznam: [list]text[/list]  (alt+l)',
	'BBCODE_LISTITEM_HELP'			=> 'List item: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Usporiadaný zoznam: [list=]text[/list]  (alt+o)',
	'BBCODE_P_HELP'				=> 'Vložiť obrázok: [img]http://adresa_obrázku[/img]  (alt+p)',
	'BBCODE_Q_HELP'				=> 'Citácia: [quote]text[/quote]  (alt+q)',
	'BBCODE_S_HELP'				=> 'Farba písma: [color=red]text[/color]  Tip: môžete použiť taktiež color=#FF0000',
	'BBCODE_U_HELP'				=> 'Podčiarknuté: [u]text[/u]  (alt+u)',
	'BBCODE_W_HELP'				=> 'Vložiť odkaz: [url]http://odkaz[/url] alebo [url=http://odkaz]text[/url]  (alt+w)',
	'BBCODE_D_HELP'				=> 'Flash: [flash=šírka,výška]http://url[/flash]  (alt+d)',
	'BUMP_ERROR'				=> 'Nemôžete odoslať nový príspevok tak skoro po predchádzajúcom príspevku, chvíľu počkajte a skúste to znova.',

	'CANNOT_DELETE_REPLIED'		=> 'Prepáčte, ale môžete odstraňovať iba príspevky, na ktoré ešte nebola zaslaná odpoveď.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Tento príspevok bol zamknutý, už ho nemôžete upravovať.',
	'CANNOT_EDIT_TIME'			=> 'Nemôžete upraviť ani odstrániť tento príspevok',
	'CANNOT_POST_ANNOUNCE'		=> 'Nemáte oprávnenia pre pridanie oznámenia.',
	'CANNOT_POST_STICKY'		=> 'Nemáte oprávnenia pre pridanie dôležitej témy.',
	'CHANGE_TOPIC_TO'			=> 'Zmeniť typ témy na',
	'CLOSE_TAGS'				=> 'Uzatvoriť značky',
	'CURRENT_TOPIC'				=> 'Táto téma',

	'DELETE_FILE'				=> 'Odstrániť súbor',
	'DELETE_MESSAGE'			=> 'Odstrániť správu',
	'DELETE_MESSAGE_CONFIRM'	=> 'Naozaj chcete odstrániť tento príspevok?',
	'DELETE_OWN_POSTS'			=> 'Prepáčte, ale môžete mazať iba svoje vlastné správy.',
	'DELETE_POST_CONFIRM'		=> 'Naozaj chcete odstrániť tento príspevok?',
	'DELETE_POST_WARN'			=> 'Túto akciu už nemožno vrátiť späť!',
	'DISABLE_BBCODE'			=> 'Zakázať BBCode',
	'DISABLE_MAGIC_URL'			=> 'Automaticky neprevádzať odkazy',
	'DISABLE_SMILIES'			=> 'Zakázať smajlíky',
	'DISALLOWED_CONTENT'		=> 'Nahrávanie bolo zrušené, pretože bolo identifikované ako možný útok.',
	'DISALLOWED_EXTENSION'		=> 'Prípona %s nie je povolená',
	'DRAFT_LOADED'				=> 'Príspevok bol uložený medzi rozpísané, automaticky sa zmaže po jeho odoslaní.',
	'DRAFT_LOADED_PM'			=> 'Koncept nahraný do časti pre správy, môžete dokončiť vašu súkromnú správu.<br />Váš koncept bude zmazaný, po potvrdení tejto súkromnej správy.',
	'DRAFT_SAVED'				=> 'Koncept bol úspešne uložený.',
	'DRAFT_TITLE'				=> 'Nadpis konceptu',

	'EDIT_REASON'				=> 'Dôvod pre úpravu príspevku',
	'EMPTY_FILEUPLOAD'			=> 'Nahraný súbor je prázdny',
	'EMPTY_MESSAGE'				=> 'Musíte napísať text príspevku.',
	'EMPTY_REMOTE_DATA'			=> 'Nahrávanie súboru bolo neúspešné, skúste súbor nahrať ručne.',

	'FLASH_IS_OFF'				=> '[flash] je <em>ZAKÁZANÉ</em>',
	'FLASH_IS_ON'				=> '[flash] je <em>POVOLENÉ</em>',
	'FLOOD_ERROR'				=> 'Nemôžete odoslať nový príspevok takto skoro po predchádzajúcom príspevku, chvíľu počkajte a skúste to znova.',
	'FONT_COLOR'				=> 'Farba textu',
	'FONT_COLOR_HIDE'			=> 'Skryť paletu farieb',
	'FONT_HUGE'					=> 'Obrovské',
	'FONT_LARGE'				=> 'Veľké',
	'FONT_NORMAL'				=> 'Normálne',
	'FONT_SIZE'					=> 'Veľkosť písma',
	'FONT_SMALL'				=> 'Malé',
	'FONT_TINY'					=> 'Drobné',

	'GENERAL_UPLOAD_ERROR'		=> 'Nemôžem nahrať prílohu do %s',

	'IMAGES_ARE_OFF'			=> '[img] je <em>ZAKÁZANÉ</em>',
	'IMAGES_ARE_ON'				=> '[img] je <em>POVOLENÉ</em>',
	'INVALID_FILENAME'			=> '%s je nepovolený názov súboru',

	'LOAD'						=> 'Nahrať',
	'LOAD_DRAFT'				=> 'Nahrať koncept',
	'LOAD_DRAFT_EXPLAIN'		=> 'Tu si môžete vybrať v ktorom koncepte budete pokračovať. Vaša doterajšia správa bude vymazaná. Koncepty si môžete prezerať, upravovať a mazať vo Vašich nastaveniach.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Musíte byť prihlásený/á pre zvýraznenie témy v tomto fóre.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Musíte byť prihlásený/á pre mazanie príspevkov v tomto fóre.',
	'LOGIN_EXPLAIN_POST'		=> 'Musíte byť prihlásený/á pre pridávanie príspevkov v tomto fóre.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Musíte byť prihlásený/á pre citovanie príspevkov v tomto fóre.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Musíte byť prihlásený/á pre pridanie odpovede v tomto fóre.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Maximálna povolená veľkosť písma je %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Vaša flash animácia môže byť maximálne %1$d pixely vysoká.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Vaša flash animácia môže byť maximálne %1$d pixely široká.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Váš obrázok môže byť maximálne %1$d pixelov vysoký.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Váš obrázok môže byť maximálne %1$d pixelov široký.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Sem vložte Vašu správu. Nesmie mať viac ako <strong>%d</strong> znakov.',
	'MESSAGE_DELETED'			=> 'Vaša správa bola úspešne odstránená',
	'MORE_SMILIES'				=> 'Ďalšie smajlíky',

	'NOTIFY_REPLY'				=> 'Upozorniť ma emailom na odpovede',
	'NOT_UPLOADED'				=> 'Súbor nemôže byť nahraný.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Nemôžete vymazať existujúce odpovede',
	'NO_PM_ICON'				=> 'Žiadna SS ikona',
	'NO_POLL_TITLE'				=> 'Musíte zadať otázku hlasovania',
	'NO_POST'					=> 'Vami hľadaný príspevok neexistuje.',
	'NO_POST_MODE'				=> 'Nebol špecifikovaný žiadny mód príspevku',

	'PARTIAL_UPLOAD'			=> 'Súbor sa nepodarilo nahrať celý, bola nahraná iba jeho časť',
	'PHP_SIZE_NA'				=> 'Veľkosť príloh je príliš veľká.<br />Nemôžete prekročiť stanovenú veľkosť, ako je nastavená v php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Veľkosť príloh je príliš veľká. Maximálna povolená veľkosť príloh je %d %2$s.<br />Toto obmedzenie je nastavené v php.ini, nemôže byť zmenené.',
	'PLACE_INLINE'				=> 'Vložiť za sebou',
	'POLL_DELETE'				=> 'Odstrániť hlasovanie',
	'POLL_FOR'					=> 'Trvanie hlasovania',
	'POLL_FOR_EXPLAIN'			=> 'Napíšte 0, alebo nechajte prázdne pre neobmedzené trvanie hlasovania',
	'POLL_MAX_OPTIONS'			=> 'Hlasov na užívateľa',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Číslo možných odpovedí pre jedného užívateľa.',
	'POLL_OPTIONS'				=> 'Odpovede',
	'POLL_OPTIONS_EXPLAIN'		=> 'Každú odpoveď vložte do nového riadku. Maximálny počet odpovedí je <strong>%d</strong>',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Vložte každú možnosť do nového riadku. Maximálny počet je do <strong>%d</strong> možností. Ak odstránite, alebo pridáte možnosti, všetky predchádzajúce hlasovania budú resetované.',
	'POLL_QUESTION'				=> 'Hlasovacia otázka',
	'POLL_TITLE_TOO_LONG'		=> 'Názov hlasovania musí obsahovať menej ako 100 znakov.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Vložený názov hlasovania je príliš dlhý, zvážte odstránenie BBCodov alebo smajlíkov.',
	'POLL_VOTE_CHANGE'			=> 'Povoliť zmenu hlasu',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Pokiaľ je táto možnosť povolená, užívateľ môže zmeniť svoje hlasovanie.',
	'POSTED_ATTACHMENTS'		=> 'Pridané prílohy',
	'POST_APPROVAL_NOTIFY'		=> 'Budete oboznámení, keď váš príspevok bude schválený.',
	'POST_CONFIRMATION'			=> 'Overovací kód',
	'POST_CONFIRM_EXPLAIN'		=> 'Prepíšte uvedený overovací kód. Pokiaľ sa Vám obrázok s kódom nezobrazuje správne, kontaktujte %sAdministrátora%s.',
	'POST_DELETED'				=> 'Vaša správa bola úspešne odstránená',
	'POST_EDITED'				=> 'Vaša správa bola úspešne upravená',
	'POST_EDITED_MOD'			=> 'Vaša správa bola odstránená, ale čaká na schválenie.',
	'POST_GLOBAL'				=> 'Globálnu',
	'POST_ICON'					=> 'Ikonka témy',
	'POST_NORMAL'				=> 'Normálnu',
	'POST_REVIEW'				=> 'Náhľad',
	'POST_REVIEW_EXPLAIN'		=> 'Do témy musí byť zaslaný aspoň jeden príspevok.',
	'POST_REVIEW_EDIT'			=> 'Prehodnotenie príspevku',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Počas doby, kedy ste upravoval príspevok, ho upravil ešte niekto iný. Chcete odoslať príspevok tak, ako je teraz?.',
	'POST_STORED'				=> 'Váš príspevok bol úspešne odoslaný',
	'POST_STORED_MOD'			=> 'Vaša správa bola uložená, ale čaká na schválenie',
	'POST_TOPIC_AS'				=> 'Odoslať tému ako',
	'PROGRESS_BAR'				=> 'Nahrávanie',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Môžete vložiť maximálne %1$d citácii.',

	'SAVE'						=> 'Uložiť',
	'SAVE_DATE'					=> 'Uložené',
	'SAVE_DRAFT'				=> 'Uložiť koncept',
	'SAVE_DRAFT_CONFIRM'		=> 'Do konceptu sa ukladá iba názov a text príspevku. Ostatné prvky budú odstránené. Prajete si koncept uložiť?',
	'SMILIES'					=> 'Smajlíky',
	'SMILIES_ARE_OFF'			=> 'Smajlíky sú <em>ZAKÁZANÉ</em>',
	'SMILIES_ARE_ON'			=> 'Smajlíky sú <em>POVOLENÉ</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'časový limit oznámenia/dôležitého',
	'STICK_TOPIC_FOR'			=> 'Trvanie',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Napíšte 0, alebo nechajte prázdne pre neobmedzené trvanie oznámenia/dôležitého. Počet dní sa počíta od odoslania príspevku',
	'STYLES_TIP'				=> 'Tip: Značky môžu byť vložené rýchlejšie priamo na vyznačený text.',

	'TOO_FEW_CHARS'				=> 'Vaša správa obsahuje primálo znakov.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Vaša správa obsahuje %1$d znakov, nastavený minimálny počet znakov je %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Musíte zadať najmenej dve odpovede.',
	'TOO_MANY_ATTACHMENTS'		=> 'Nemôžete pridať ďalšiu prílohu, maximálny počet príloh je <strong>%d</strong>.',
	'TOO_MANY_CHARS'			=> 'Vaša správa obsahuje priveľa znakov.',
	'TOO_MANY_CHARS_POST'		=> 'Vaša správa obsahuje %1$d znakov. Maximálny počet povolených znakov je %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Váš podpis obsahuje %1$d znakov. Maximálny počet povolených znakov je %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Prekročili ste maximálny povolený počet hlasovacích odpovedí.',
	'TOO_MANY_SMILIES'			=> 'Vaša správa obsahuje priveľa smajlíkov. Maximálny povolený počet smajlíkov je %d.',
	'TOO_MANY_URLS'				=> 'Vaša správa obsahuje priveľa odkazov. Maximálny povolený počet odkazov je %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Nemôžete špecifikovať viac možností na užívateľa, ako je v existujúcom hlasovaní ', // neviem, či to je dobre
	'TOPIC_BUMPED'				=> 'Téma bola úspešne zvýraznená',

	'UNAUTHORISED_BBCODE'		=> 'Nemôžete použiť nasledujúce značky: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Pre zmenu tejto témy na normálnu musíte zvoliť fórum, v ktorom bude zobrazená.',
	'UPDATE_COMMENT'			=> 'Aktualizovať komentár',
	'URL_INVALID'				=> 'Tento odkaz nieje platný.',
	'URL_NOT_FOUND'				=> 'Zadaný súbor nie je možné nájsť.',
	'URL_IS_OFF'				=> '[url] je <em>ZAPNUTÉ</em>',
	'URL_IS_ON'					=> '[url] je <em>VYPNUTÉ</em>',
	'USER_CANNOT_BUMP'			=> 'Nemôžete zvýrazniť tému v tomto fóre',
	'USER_CANNOT_DELETE'		=> 'Nemôžete mazať príspevky v tomto fóre',
	'USER_CANNOT_EDIT'			=> 'Nemôžete upravovať príspevky v tomto fóre',
	'USER_CANNOT_REPLY'			=> 'Nemôžete posielať odpovede v tomto fóre',
	'USER_CANNOT_FORUM_POST'	=> 'Nemôžete posielať príspevky do tohto fóra, pretože toto fórum to nepodporuje.',

	'VIEW_MESSAGE'				=> '%sZobraziť vaše správy%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sZobraziť vaše súkromné správy%s',	

	'WRONG_FILESIZE'			=> 'Súbor je príliš veľký, maximálna povolená veľkosť je %1d %2s',
	'WRONG_SIZE'				=> 'Obrázok musí mať minimálu šírku %1$d pixelov a výšku %2$d pixelov. Nesmie mať však väčšiu širku ako %3$d pixelov a výšku %4$d pixelov. Váš obrázok má šírku %5$d pixelov a výšku %6$d pixelov.',
));

// Extra bbcode definitions Portal XL
$lang = array_merge($lang, array(
	'BBCODE_TABLE_HELP'		  	=> 'Table maker',
	'BBCODE_FONTCOLOR_HELP'		=> 'Font color',
	'BBCODE_FONTSIZE_HELP'		=> 'Font size',
	'BBCODE_FONTFAMILY_HELP'	=> 'Font family',
));

?>