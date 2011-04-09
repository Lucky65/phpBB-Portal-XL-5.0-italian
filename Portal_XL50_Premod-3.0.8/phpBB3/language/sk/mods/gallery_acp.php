<?php
/**
*
* gallery_acp [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package phpBB Gallery
* @version $Id: gallery_acp.php 1298 2009-08-23 21:42:50Z nickvergessen $
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
	'ACP_GALLERY_CLEANUP_EXPLAIN'	=> 'S tohoto zadania môžete vymazať niektoré zostávajúce zvyšky.',
	'ACP_GALLERY_OVERVIEW'			=> 'Galéria phpBB',
	'ACP_GALLERY_OVERVIEW_EXPLAIN'	=> 'V tomto zadaní sú určité štatistiky vašej galérie.',
	'ACP_IMPORT_ALBUMS'				=> 'Import obrázkov',
	'ACP_IMPORT_ALBUMS_EXPLAIN'		=> 'V tomto zadaní môžete importovať obrázky zo systému súborov. Pred importovaním obrázkov, prosím zmente manuálne ich vlastnosť.',


	'ADD_ALBUM_ON_TOP'				=> 'Pridať album na vrch',
	'ADD_PERMISSIONS'				=> 'Pridať Povolenia',
	'ALBUM_ADMIN'					=> 'Administrácia Albumu',
	'ALBUM_ADMIN_EXPLAIN'			=> 'V Galeria phpBB nie sú žiadne kategórie, všetko je založené na vloženom albume. Každý album môže mať bez obmedzenia podalbumy a môžete určiť či bude každý uverejnený alebo nie (týka sa to napr. starých kategórií). V tomto zadaní môžete pridať, editovať, vymazať, uzamknúť uvoľniť individuálne albumy, ako tiež aj nastaviť určité ďalšie nastavenia. Ak vaše obrázky nie sú zosynchronizované môžete ich v albume zosynchronizovať. <strong>Ak chcete môžete skopírovať povolenia pre nové vytvorené albumy ktoré budú zobrazené.</strong>',
	'ALBUM_AUTH_TITLE'				=> 'Povolenia v Albume',
	'ALBUM_CREATED'					=> 'Album bol úspešne vytvorený.',
	'ALBUM_DELETE'					=> 'Vymazať album',
	'ALBUM_DELETE_EXPLAIN'			=> 'V tomto zadaní môžete vymazať album a rozhodnúť sa kde chcete preložiť obrázky ktoré album obsahoval',
	'ALBUM_DELETED'					=> 'Album bol úspešne vymazaný.',
	'ALBUM_DESC'					=> 'Popis',
	'ALBUM_DESC_EXPLAIN'			=> 'Toto zadanie popisu bude zobrazené tak ako bude zadané!.',
	'ALBUM_DESC_TOO_LONG'			=> 'Popis Albumu je príliš dlhý, popis nesmie obsahovať viac ak 4000 znakov.',
	'ALBUM_EDIT_EXPLAIN'			=> 'V tomto zadaní môžete upraviť tento album. Prosím všimnite si, že nastavenia obmedzenia oprávnení v albume sa môžu individuálne nastaviť pre každý album zvlášť ide o ' . /*uživateľa alebo */ 'uživateľské skupiny.',
	'ALBUM_ID'						=> 'Album-ID',
	'ALBUM_IMAGE'					=> 'Obrázky v albume',
	'ALBUM_IMAGE_EXPLAIN'			=> 'Relatívne umiestnenie, vztiahujúce sa k rootu phpBB, s ďalšímy obrázkami ktoré budú pridružené, k tomuto albumu.',
	'ALBUM_NAME_EMPTY'				=> 'Musíte zadať názov pre tento album.',
	'ALBUM_NO_TYPE_CHANGE_TO_CONTEST'	=> 'Nesúťažný Album sa nedá zmeneniť na Súťažný Album.',
	'ALBUM_PARENT'					=> 'Nadradený album',
	'ALBUM_PASSWORD'				=> 'Heslo pre Album',
	'ALBUM_PASSWORD_EXPLAIN'		=> 'Zadajte heslo pre tento album, použite uprednostnené oprávnenie systému.',
	'ALBUM_PASSWORD_CONFIRM'		=> 'Potvrdiť heslo pre album',
	'ALBUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Len ak potrebujete nastaviť heslo pre album.',
	'ALBUM_RESYNCED'				=> 'Album “%s” bol úspešne resynchronizovaný',
	'ALBUM_SETTINGS'				=> 'Nastavenie albumu',
	'ALBUM_STATUS'					=> 'Stav albumu',
	'ALBUM_TYPE'					=> 'Typ albumu',
	'ALBUM_TYPE_CAT'				=> 'Kategória',
	'ALBUM_TYPE_CONTEST'			=> 'Súťažný',
	'ALBUM_TYPE_UPLOAD'				=> 'Album',
	'ALBUM_UPDATED'					=> 'Album bol úspešne aktualizovaný.',
	'ALBUM_WITH_CONTEST_NO_TYPE_CHANGE'	=> 'Súťažné albumy nemôžu byť zmenené na Ne - Súťažné - Albumy.',
	'ALBUMS'						=> 'Albumy',

	'CACHE_DIR_SIZE'				=> 'cache/-veľkosť adresára',
	'CHANGE_AUTHOR'					=> 'Zmeniť autora na hosťa',
	'CHECK'							=> '<strong><font color=*blue*>Preveriť</font></strong>',
	'CHECK_AUTHOR_EXPLAIN'			=> 'Nie najdené obrázky platného autora.',
	'CHECK_COMMENT_EXPLAIN'			=> 'Nie najdené komentáre platného autora.',
	'CHECK_ENTRY_EXPLAIN'			=> 'Spustite najprv Preveriť, pre vyhladanie súborov ktoré nemajú vstupy v databáze.',
	'CHECK_PERSONALS_EXPLAIN'		=> 'Nie najdené osobné albumy platného vlastníka .',
	'CHECK_PERSONALS_BAD_EXPLAIN'	=> 'Nie najdené osobné albumy.',
	'CHECK_SOURCE_EXPLAIN'			=> 'Nie najdené vstupy. Spustite Preveriť!',
	'CLEAN_AUTHORS_DONE'			=> 'Zmazané obrázky bez platného autora.',
	'CLEAN_CHANGED'					=> 'Autorstvo "Hosťa" bolo úspešne zmenené.',
	'CLEAN_COMMENTS_DONE'			=> 'Zmazané komentáre mimo platného autora.',
	'CLEAN_ENTRIES_DONE'			=> 'Zmazané súbory mimo stupov v databáze.',
	'CLEAN_GALLERY'					=> 'Vyčistenie galérie',
	'CLEAN_GALLERY_ABORT'			=> 'Čistenie bolo prerušené!',
	'CLEAN_PERSONALS_DONE'			=> 'Osobné albumy bez platného vlastníka sú vymazané.',
	'CLEAN_PERSONALS_BAD_DONE'		=> 'Osobné albumy zadaného uživateľa sú vymazané.',
	'CLEAN_SOURCES_DONE'			=> 'Súbor obrázkov je vymazaný.',
	'COLS_PER_PAGE'					=> 'Počet stĺpcov na stránke miniatúr',
	'COMMENT'						=> 'Komentár',
	'COMMENT_ID'					=> 'ID Komentára',
	'COMMENT_SYSTEM'				=> 'Aktivujem systém komentárov',
	'CONFIRM_CLEAN'					=> 'Tento krok sa nedá už odvolať!',
	'CONFIRM_CLEAN_AUTHORS'			=> 'Mám vymazať obrázky platného autora?',
	'CONFIRM_CLEAN_COMMENTS'		=> 'Mám vymazať komentáre platného autora?',
	'CONFIRM_CLEAN_ENTRIES'			=> 'Mám vymazať z databázy vstupy súborov?',
	'CONFIRM_CLEAN_PERSONALS'		=> 'Mám vymazať<br /><strong>» %s</strong> osobné albumy platného autora?',
	'CONFIRM_CLEAN_PERSONALS_BAD'	=> 'Mám vymazať<br /><strong>» %s</strong> osobné albumy vybraného uživateľa?',
	'CONFIRM_CLEAN_SOURCES'			=> 'Mám vymazať súbory von zo súboru?',
	'CONTEST_DATE_EXPLAIN'			=> 'Prosím zadajte dátum vo formíte YYYY-MM-DD HH:MM.',
	'CONTEST_END'					=> 'Ukončenie hlasovania',
	'CONTEST_END_BEFORE_RATING'		=> 'Ulončiť Súťaž sa nesmie skvôr ako sa vyhodnotí spustená súťaž.',
	'CONTEST_END_BEFORE_START'		=> 'Ulončiť Súťaž sa nesmie skvôr ak je spustená súťaž.',
	'CONTEST_END_EXPLAIN'			=> 'Po ukončení súťaže, uživatelia nemôžu už ďalej klasifikovať obrázky.',
	'CONTEST_END_INVALID'			=> 'Neplatné ukončenie súťaže (%s). Prosím zadajte dátum vo formáte YYYY-MM-DD HH:MM.',
	'CONTEST_RATING'				=> 'Spustenie hlasovania',
	'CONTEST_RATING_BEFORE_START'	=> 'Spustenie súťaže z hodnotením sa nesmie spustiťť pred spustenov súťažov.',
	'CONTEST_RATING_EXPLAIN'		=> 'Po "Spustení hlasovania", uživatelia už nemôžu nahrávať obrázky.',
	'CONTEST_RATING_INVALID'		=> 'Toto je neplatné spustenie súťažné klasifikovanie (%s). Prosím zadajte dáta vo formáte YYYY-MM-DD HH:MM.',
	'CONTEST_SETTINGS'				=> 'Nastavenie súťaže',
	'CONTEST_START'					=> 'Spustenie súťaže',
	'CONTEST_START_EXPLAIN'			=> 'Na začiatku súťaže, uživatelia majú dovolené nahrávať obrázky.',
	'CONTEST_START_INVALID'			=> 'Toto je neplatné spustenie súťaže (%s). Prosím zadajte dáta vo formáte YYYY-MM-DD HH:MM.',
	'COPY_PERMISSIONS'				=> 'Skopírovať oprávnenia z',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Ak vyberiete prekopirovať oprávnenia, album bude obsahovať tie isté oprávnenia ako ten, ktorého ste vybral. ak nevyberiete žiadny album tak musíte zadať oprávnenia.',
	'COPY_PERMISSIONS_ALBUM_FROM_EXPLAIN'	=> 'Zdrojový album, z ktorého chcete skopírovať oprávnenia.',
	'COPY_PERMISSIONS_ALBUM_TO_EXPLAIN'		=> 'Cieľový album, do ktorého chcete skopírovať oprávnenia.',
	'COPY_PERMISSIONS_CONFIRM'		=> 'Majte na pamäti, že sa týmto prepíšu existujúce povolenia vybraného albumu.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'V tomto zadaní môžete prestaviť oprávnenia, ktoré boli predtým zadané pre tento album. Ak nezadate žiadne tak súčasné oprávnenia budú ponechané.',
	'COPY_PERMISSIONS_FROM'			=> 'Skopírovať oprávnenia z',
	'COPY_PERMISSIONS_SUCCESSFUL'	=> 'Prekopírovanie oprávnení do cieľového albumu prebehlo úspešne.',
	'COPY_PERMISSIONS_TO'			=> 'Nahrať oprávnenia do',
	'CREATE_ALBUM'					=> 'Vytvoriť nový album',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Vymazať obsah alebo premiestniť do albumu',
	'DECIDE_MOVE_DELETE_SUBALBUMS'	=> 'Vymazať podalbumy alebo premiestniť do albumu',
	'DEFAULT_SORT_METHOD'			=> 'Spôsob triedenia podľa',
	'DEFAULT_SORT_ORDER'			=> 'Spôsob triedenia v poradí',
	'DELETE_ALBUM_SUBS'				=> 'Prosím odstránte ako prvý podalbumy',
	'DELETE_ALL_IMAGES'				=> 'Vymazať obrázky',
	'DELETE_IMAGES'					=> 'Vymažem obrázky',
	'DELETE_PERMISSIONS'			=> 'Vymažem oprávnenia',
	'DELETE_SUBALBUMS'				=> 'Vymažem podalbumy aj z obsahom obrázkov',
	'DISP_BIRTHDAYS'				=> 'Zobrazím narodeniny',
	'DISP_EXIF_DATA'				=> 'Zobrazím Exif-informácie.<br><font color=*00000B*</br>Formát EXIF súboru je ten do ktorého sa zapisujú informácie a je zabudovaný do obrazového súboru JPG. Na obrázku vľavo uvidíte okienko s EXIF informáciami. Tam uvidite, všetky údaje ktoré sú v snímku zaznamenané: výrobca, dátum a čas vytvorenia snímku a ďalšie systémové informácie</font>',
	'DISP_EXIF_DATA_EXP'			=> 'Táto funkcia sa nedá použiť, ak zariadenie "exif_read_data" nie je zahrnuté vo vašej inštalácii PHP.',
	'DISP_FAKE_THUMB'				=> 'Zobrazím miniatúry v zozname albumu',
	'DISP_LOGIN'					=> 'Zobrazím pole prihlásenia',
	'DISP_LOGIN_EXP'				=> 'Len Hosť',
	'DISP_PERSONAL_ALBUM_PROFILE'	=> 'Zobrazím link do osobného albumu v profile uživateľa',
	'DISP_STATISTIC'				=> 'Zobrazím štatistiku v galérii',
	'DISP_TOTAL_IMAGES'				=> 'Zobrazím "Všetky obrázky" na index.' . $phpEx,
	'DISP_USER_IMAGES_PROFILE'		=> 'Zobrazím štatistiku nahratých obrázkov v atribútoch profilu uživateľa',
	'DISP_VIEWTOPIC_ICON'			=> 'Zobrazím tlačítko pre osobný album v viewtopic.' . $phpEx,
	'DISP_VIEWTOPIC_IMAGES'			=> 'Zobrazím počet obrázkov v viewtopic.' . $phpEx,
	'DISP_VIEWTOPIC_LINK'			=> 'Link počtu obrázkov pre obrázky uživateľov',
	'DISP_WHOISONLINE'				=> 'Zobraziť Kdo-Je-Online',
	'DISPLAY_IN_RRC'				=> 'Zobrazovať obrázky z tohoto albumu ako "Nové - Náhodné" -obrázky',
	'DONT_COPY_PERMISSIONS'			=> 'Nekopírovať oprávnenia',

	'EDIT_ALBUM'					=> 'Upravenie albumu',

	'FAKE_THUMB_SIZE'				=> 'Veľkosť miniatúr',
	'FAKE_THUMB_SIZE_EXP'			=> 'Ak chcete zmeniť ich veľkosť, pripomínam že riadkovanie 16 pixelov bude čierna-informácia',

	'GALLERY_ALBUMS_TITLE'			=> 'Kontrola Albumov Galérie',
	'GALLERY_CONFIG'				=> 'Nastavenie Galérie',
	'GALLERY_CONFIG_EXPLAIN'		=> 'V tomto zadaní môžete zmeniť všeobecné nastavenia Galérie v phpBB.',
	'GALLERY_CONFIG_UPDATED'		=> 'Nastavenia Galérie boli uspešne aktualizované.',
	'GALLERY_INDEX'					=> 'Obsah Galérie',
	'GALLERY_PURGE_CACHE_EXPLAIN'	=> 'Prečistím vyrovnávaciu pamäť, všetky uložené miniatúry obrázkov v "Konfigurácii Galérie", prinútim regenerovať.',
	'GALLERY_STATS'					=> 'Štatistika Galérie',
	'GALLERY_VERSION'				=> 'Verzia Galérie',
	'GD_VERSION'					=> 'Zoptimalizujem pre verziu GD. <br><font color=*00000B*</br>Ide o modul, ktorý sa používa pre generovanie obrázkov a práce s nimi. Môžete ich zmenšovať, zväčšovať, zamieňať alebo si vlastné vytvárať</font>',
	'GENERAL_ALBUM_SETTINGS'		=> 'Hlavné nastavenia albumu',
	'GIF_ALLOWED'					=> 'Umožnim nahrávať súbory z príponov .GIF',
	'GUPLOAD_DIR_SIZE'				=> 'nahratie/-veľkosť adresára',

	'HACKING_ATTEMPT'				=> 'Útok hekerov!',
	'HANDLE_IMAGES'					=> 'Ako pracovať z obrázkami',
	'HANDLE_SUBS'					=> 'Ako pracovať z podalbumami',
	'HOTLINK_ALLOWED'				=> 'Umožním domény pre priame linky',
	'HOTLINK_ALLOWED_EXP'			=> 'Domény musia byť oddeleé čiarkov nesmie ostať (žiadna medzera). Rozpätie: "flying-bits.org,phpbb.com"',
	'HOTLINK_PREVENT'				=> 'Preventívne Priame linky',

	'IMAGE_DESC_MAX_LENGTH'			=> 'Obsah popisu k obrázku max. dľžka v (bytoch)',
	'IMAGE_ID'						=> 'ID Obrázka',
	'IMAGE_SETTINGS'				=> 'Nastavenie obrázku',
	'IMAGES_PER_DAY'				=> 'Obrázky na každý deň',
	'IMPORT_ALBUM'					=> 'Album, import obrázov do',
	'IMPORT_DEBUG_MES'				=> 'Importoval som obrázkov celkom %1$s, ale ostalo tam ešte obrázkov celkom %2$s.',
	'IMPORT_DIR_EMPTY'				=> 'Zložka %s je prázdna. Obrázky musia byť najprv nahraté, predtým ako ich môžete inportovať.',
	'IMPORT_FINISHED'				=> 'Všetky v počte %1$s obrázkov boli úspešne importované.',
	'IMPORT_MISSING_ALBUM'			=> 'Prosím vyberte album do ktorého importujem obrázky.',
	'IMPORT_SELECT'					=> 'Vyberte obrázky ktoré chcete importovať. Úspešne uploadnuté obrázky sa vymažú. Všetky iné obrázky zostanú stále dostupné .',
	'IMPORT_SCHEMA_CREATED'			=> 'Importované schéma bolo úspešne vytvorené, prosím počkajte pokial obrázky budú dosadené.',
	'IMPORT_USER'					=> 'Komu Nahrať',
	'IMPORT_USER_EXP'				=> 'Tu môžete pridať obrázky inému uživateľovi.',
	'INDEX_SETTINGS'				=> 'Nastavenie obsahu galérie.' . $phpEx,
	'INFO_LINE'						=> 'Zobrazím veľkosť súboru v miniatúre',
	'INHERIT_PERMISSIONS_ALBUM'		=> 'Zdedené oprávnenia z iného albumu',
	'INHERIT_PERMISSIONS_VICTIM'	=> 'Zdedené oprávnenia z iného nastavenia',

	'JPG_ALLOWED'					=> 'Umožnim nahrávať súbory z príponov .JPG',
	'JPG_QUALITY'					=> 'Kvalita JPG',
	'JPG_QUALITY_EXP'				=> 'Pri otáčaní alebo zmene veľkosti obrázka, sa môže stať že sa zväčší ako bol pred výkonom zadania. S touto voľbou sa prinúti dodržať presnosť zadania, čím sa aj ušetriť miesto na disku.',

	'LIST_INDEX'					=> 'Zoznam podalbumov v legende pôvodných albumov',
	'LIST_INDEX_EXPLAIN'			=> 'Na indexe pripojím zobrazenie tohoto albumu v rámci legendy pôvodného albumu, tento album ako "Podalbum v albume" ak táto voľba je povolená.',
	'LIST_SUBALBUMS'				=> 'Zoznam podalbumov v legende',
	'LIST_SUBALBUMS_EXPLAIN'		=> 'Na indexe zobrazený album s podalbumamy pripojím v rámci legendy ako "Podalbumy v legende albumu" ak táto voľba je povolená.',
	'LOCKED'						=> 'Uzamknutý',
	'LOOK_UP_ALBUM'					=> 'Výber albumov',
	'LOOK_UP_ALBUMS_EXPLAIN'		=> 'Môžete si vybrať viac ako len jeden album.',

	'MANAGE_CRASHED_ENTRIES'		=> 'Správa chybných vstupov',
	'MANAGE_CRASHED_IMAGES'			=> 'Správa chybných obrázkov',
	'MANAGE_PERSONALS'				=> 'Správa osobných albumov',
	'MAX_IMAGES_PER_ALBUM'			=> 'Maximálny počet obrázkov pre každý album',
	'MAX_IMAGES_PER_ALBUM_EXP'		=> 'Neobmedzene je -1',
	'MEDIUM_CACHE'					=> 'Zmenším obrázky v Cache, obrázok na stránke ',
	'MEDIUM_DIR_SIZE'				=> 'naplnenie/-veľkosť adresára',
	'MISSING_ALBUM_NAME'			=> 'Musíte zadať názov albumu.',
	'MISSING_AUTHOR'				=> 'Obrázky bez platného autora',
	'MISSING_AUTHOR_C'				=> 'Komentáre bez platného autora',
	'MISSING_ENTRY'					=> 'Súbory bez vstupov v databáze',
	'MISSING_IMPORT_SCHEMA'			=> 'Zadanú schému importu (%s) som nenašiel.',
	'MISSING_OWNER'					=> 'Osobné albumy bez platného vlastníka',
	'MISSING_OWNER_EXP'				=> 'Nesprávne zmazané zadané podalbumy, obrázky a komentáre.',
	'MISSING_SOURCE'				=> 'Obrázky mimo súborov',
	'MOVE_IMAGES_TO'				=> 'Presunúť obrázky do',
	'MOVE_SUBALBUMS_TO'				=> 'Presunúť podalbumy do',

	'NEW_ALBUM_CREATED'				=> 'Nový album bol úspešne vytvorený',
	'NO_ALBUM_SELECTED'				=> 'Musíte vybrať aspoň jeden album.',
	'NO_DESTINATION_ALBUM'			=> 'Nemáte zadaný album do ktorého mám presunúť obsah.',
	'NO_FILE_SELECTED'				=> 'Musíte vybrať aspoň jeden súbor.',
	'NO_PERMISSIONS_SELECTED'		=> 'Musíte vybrať aspoň jeden album alebo špeciálny systém oprávnení.',
	'NO_VICTIM_SELECTED'			=> 'Musíte vybrať aspoň jedného uživateľa alebo skupinu.',
	'NO_INHERIT'					=> 'Nekopírovať oprávnenia',
	'NO_PARENT_ALBUM'				=> 'Bez nadradeného',
	'NO_SUBALBUMS'					=> 'Žiadny album nie je pripojený',
	'NUMBER_ALBUMS'					=> 'Počet albumov',
	'NUMBER_IMAGES'					=> 'Počet obrázkov',
	'NUMBER_PERSONALS'				=> 'Počet osobných albumov',

	'OWN_PERSONAL_ALBUMS'			=> 'Povoliť osobné albumy',

	'PERMISSION'					=> 'Oprávnenie',
	'PERMISSION_NEVER'				=> 'Žiadne',
	'PERMISSION_NO'					=> 'Nie',
	'PERMISSION_SETTING'			=> 'Nastavenie',
	'PERMISSION_YES'				=> 'Áno',

	'PERMISSION_A_LIST'				=> 'Môže vidieť album',
	'PERMISSION_ALBUM_COUNT'		=> 'Počet možných osobných podalbumov',
	'PERMISSION_ALBUM_UNLIMITED'	=> 'Počet osobných podalbumov, bez obmedzenia',
	'PERMISSION_C'					=> 'Komentáre',
	'PERMISSION_C_DELETE'			=> 'Môže vymazať svoje komentáre',
	'PERMISSION_C_EDIT'				=> 'Môže upravovať svoje komentáre',
	'PERMISSION_C_POST'				=> 'Môže komentovať obrázky',
	'PERMISSION_C_READ'				=> 'Môže čítať komentáre',
	'PERMISSION_I'					=> 'Obrázky',
	'PERMISSION_I_APPROVE'			=> 'Môže nahrávať bez schválenia',
	'PERMISSION_I_COUNT'			=> 'Počet z nahratých obrázkov',
	'PERMISSION_I_DELETE'			=> 'Môže vymazať svoje obrázky',
	'PERMISSION_I_EDIT'				=> 'Môže upravovať svoje obrázky',
	'PERMISSION_I_LOCK'				=> 'Môže uzamknúť obrázky',
	'PERMISSION_I_RATE'				=> 'Môže hodnotiť obrázky',
 	'PERMISSION_I_RATE_EXPLAIN'		=> 'Hostia <samp>NEMÔŽU</samp> nahrávať ani hodnotiť obrázky obrazové.',
	'PERMISSION_I_REPORT'			=> 'Môže nahlásiť obrázky',
	'PERMISSION_I_UNLIMITED'		=> 'Môže nahrávať obrázky bez obmedzenia',
	'PERMISSION_I_UPLOAD'			=> 'Môže nahrávať obrázky',
	'PERMISSION_I_VIEW'				=> 'Môže vidieť obrázky',
	'PERMISSION_I_WATERMARK'		=> 'Môže vidieť obrázky bez vodoznaku',
	'PERMISSION_M'					=> 'Moderovať',
	'PERMISSION_MISC'				=> 'Rôzne', //Miscellaneous
	'PERMISSION_M_COMMENTS'			=> 'Môže moderovať komentáre',
	'PERMISSION_M_DELETE'			=> 'Môže vymazať obrázky',
	'PERMISSION_M_EDIT'				=> 'Môže upravovať obrázky',
	'PERMISSION_M_MOVE'				=> 'Môže presúvať obrázky',
	'PERMISSION_M_REPORT'			=> 'Môže menežovať správy ',
	'PERMISSION_M_STATUS'			=> 'Môže schváliť alebo uzamknúť obrázky',

	'PERMISSION_EMPTY'				=> 'Vaše všetky povolenia.',
	'PERMISSIONS'					=> 'Povolenia',
	'PERMISSIONS_EXPLAIN'			=> 'V tomto zadaní môžete upraviť uživateľov a skupiny ktorý si môžu sprístupniť albumy.',
	'PERMISSIONS_STORED'			=> 'Povolenia boli úspešne uložené.',
	'PERSONAL_ALBUM_INDEX'			=> 'Zobrazím osobné albumy ako album na indexe',
	'PERSONAL_ALBUM_INDEX_EXP'		=> 'Ak zadate "Nie", tak linka bude, celkom dole.',
	'PGALLERIES_PER_PAGE'			=> 'Počet osobných galérií na stránku',
	'PHPBB_INTEGRATION'				=> 'Integrácia do phpBB',
	'PNG_ALLOWED'					=> 'Umožnim nahrávať súbory z príponov .PNG',
	'PURGED_CACHE'					=> 'Prečistenie cache prebehlo úspešne',

	'RATE_SCALE'					=> 'Škála ohodnotenia',
	'RATE_SYSTEM'					=> 'Aktivujem systém hlasovania',
	'REDIRECT_ACL'					=> 'Teraz ak chcete môžete %sprestaviť oprávnenia%s pre tento album.',
	'REMOVE_IMAGES_FOR_CAT'			=> 'Musíte odstrániť obrázky z albumu predtým než budete môcť zmeniť typ kategórie albumu.',
	'RESET_RATING'					=> 'Vynulujem hodmotenia pre tento album',
	'RESET_RATING_COMPLETED'		=> 'Hodnotenia boli úspešne vymazané.',
	'RESET_RATING_CONFIRM'			=> 'Naozaj mám vymazať všetky hodnotenia obrázkov albumu "%s"?',
	'RESET_RATING_EXPLAIN'			=> 'Vymažem všetky hodnotenia obrázkov v zadanom albume. Zadajte id albumu v poli na pravej strane.',
	'RESIZE_IMAGES'					=> 'Prestavím veľké obrázky',
	'RESYNC_IMAGECOUNTS'			=> 'Resynchronizácia obsahu obrázkov',
	'RESYNC_IMAGECOUNTS_CONFIRM'	=> 'Ste si istý, mám resynchronizovať obsah obrázkov?',
	'RESYNC_IMAGECOUNTS_EXPLAIN'	=> 'Len existujúce obrázky budú obmenené.',
	'RESYNC_LAST_IMAGES'			=> 'Obnoviť "Posledný obrázok"',
	'RESYNC_PERSONALS'				=> 'Resynchronizácia osobnývh id albumov',
	'RESYNC_PERSONALS_CONFIRM'		=> 'Ste si istý, mám resynchronizovať obsah obrázkov?',
	'RESYNCED_IMAGECOUNTS'			=> 'Resynchronizácia obsah obrázkov',
	'RESYNCED_LAST_IMAGES'			=> 'Obnoviť "Posledný obrázok"',
	'RESYNCED_PERSONALS'			=> 'Resynchronizácia osobnývh id albumov',
	'ROTATE_IMAGES'					=> 'Umožníím otáčanie obrázkov ',
	'ROTATE_IMAGES_EXP'				=> 'Táto funkcia sa nedá použiť, ak funkcia "imagerotate" nie je zahrnutá v Verzii GD.',
	'ROWS_PER_PAGE'					=> 'Počet rád na stránke k zmenšeninám obrázkov ',

	'RRC_DISPLAY_ALBUMNAME'			=> 'Názov albumu',
	'RRC_DISPLAY_COMMENTS'			=> 'Komentáre',
	'RRC_DISPLAY_IMAGENAME'			=> 'Názov obrázku',
	'RRC_DISPLAY_IMAGETIME'			=> 'Čas obrázku',
	'RRC_DISPLAY_IMAGEVIEWS'		=> 'Zobrazenia obrázku',
	'RRC_DISPLAY_IP'				=> 'IP Uživateľa',	
	'RRC_DISPLAY_NONE'				=> 'Nič',
	'RRC_DISPLAY_OPTIONS'			=> 'Ktoré hodnoty majú byť zobrazené pod miniatúramy',
	'RRC_DISPLAY_USERNAME'			=> 'Uživ.Názov',
	'RRC_DISPLAY_RATINGS'			=> 'Hodnotenie',
	'RRC_GINDEX'					=> 'Režim "Nové a Náhodné Obrázky" Funkcie',
	'RRC_GINDEX_COLUMNS'			=> 'Stľpce',
	'RRC_GINDEX_COMMENTS'			=> 'Zbalenie komentárov',
	'RRC_GINDEX_CONTESTS'			=> 'Počet súťaží',
	'RRC_GINDEX_CROWS'				=> 'Počet komentárov',
	'RRC_GINDEX_MODE'				=> 'Režim',
	'RRC_GINDEX_MODE_EXP'			=> 'Ak je veľká databáza obrázkov tak zavedenie "Náhodných obrázkov" zaberie určitý čas pokial sa zavedú!',
	'RRC_GINDEX_PGALLERIES'			=> 'Zobrazím obrázky v osobnom albume',
	'RRC_GINDEX_ROWS'				=> 'Rady',
	'RRC_MODE_COMMENTS'				=> 'Komentáre',
	'RRC_MODE_NONE'					=> 'Nič',
	'RRC_MODE_RANDOM'				=> 'Náhodné obrázky',
	'RRC_MODE_RECENT'				=> 'Nové obrázky',
	'RRC_PROFILE_COLUMNS'			=> 'Stľpce',
	'RRC_PROFILE_MODE'				=> 'Režim "Nové a Náhodné Obrázky" Funkcia v profile',
	'RRC_PROFILE_MODE_EXP'			=> 'Ak je veľká databáza obrázkov tak zavedenie "Náhodných obrázkov" zaberie určitý čas pokial sa zavedú!',
	'RRC_PROFILE_ROWS'				=> 'Rady',

	'RSZ_HEIGHT'					=> 'Maximálna výška pri zobrazení obrázku',
	'RSZ_WIDTH'						=> 'Maximálna šírka pri zobrazení obrázku',

	'SEARCH_SETTINGS'				=> 'Vyhľadávacie nastavenia',
	'SELECT_ALBUM'					=> 'Vyberte album',
	'SELECT_GROUPS'					=> 'Vyberte skupinu',
	'SELECT_PERM_SYS'				=> 'Výber formy oprávnení',
	'SELECT_PERMISSIONS'			=> 'Výber oprávnení',
	'SELECTED_ALBUM_NOT_EXIST'		=> 'Vybraný album neexistuje.',
	'SELECTED_ALBUMS'				=> 'Vyčlenené albumy',
	'SELECTED_GROUPS'				=> 'Vyčlenené skupiny',
	'SELECTED_PERM_SYS'				=> 'Zvolený systém oprávnení',
	'SET_PERMISSIONS'				=> '<br />Nastavenie <a href="%s">oprávnenia</a> now.',
	'SHORTED_IMAGENAMES'			=> 'Dĺžka názvu obrázka',
	'SHORTED_IMAGENAMES_EXP'		=> 'Ak názov obrázku presiahne dlžku zadania a obsahuje medzery, schéma bude zrušená.',
	'SORRY_NO_STATISTIC'			=> 'Ľutujem, táto štatistická hodnota zatial nie je dostupná.',
	'SYNC_IN_PROGRESS'				=> 'Synchronizácia albumu',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> 'Aktuálna obnovená synchronizácie rozsahu obrázka je %1$d/%2$d.',

	'THUMBNAIL_CACHE'				=> 'Miniatúry cache',
	'THUMBNAIL_QUALITY'				=> 'Kvalita miniatúry (1-100)',
	'THUMBNAIL_SETTINGS'			=> 'Nastavenie miniatúr',

	'UC_IMAGE_NAME'					=> 'Názov obrázku',
	'UC_IMAGE_ICON'					=> 'Ikona posledného obrázka',
	'UC_IMAGEPAGE'					=> 'Zobrazenie obrázkov na stránke (s komentármi a hodnotením)<br><font color=*00000B*</br>Čo je Highslide-Plugin? Ide o javascript, ktorý vytvára náhľady obrázkov, diapozitívov</font>',
	'UC_LINK_CONFIG'				=> 'Konfigurácia linku',
	'UC_LINK_HIGHSLIDE'				=> 'Otvorim Highslide-Plugin',
	'UC_LINK_IMAGE'					=> 'Otvorim obrázok',
	'UC_LINK_IMAGE_PAGE'			=> 'Otvor.zobraz. na stránke (s komentármi a hodnotením)',
	'UC_LINK_LYTEBOX'				=> 'Otvorím Lytebox-Plugin',
	'UC_LINK_NONE'					=> 'Bez Linku',
	'UC_LINK_SHADOWBOX'				=> 'Otvorím Shadowbox-Plugin',	
	'UC_THUMBNAIL'					=> 'Miniatúra',
	'UC_THUMBNAIL_EXP'				=> 'Taktiež použiť pre BBCode.',
	'UNLOCKED'						=> 'Odomknutý',
	'UPDATE_BBCODE'					=> 'Aktualizovať BBCode',
	'UPLOAD_IMAGES'					=> 'Nahranie viacerých obrázkov',

	'VIEW_IMAGE_URL'				=> 'Zobrazím Image-URL na stránke obrázku',

	'WATERMARK'						=> 'Vodotlač',
	'WATERMARK_HEIGHT'				=> 'Minimálna výška pre vodotlač',
	'WATERMARK_HEIGHT_EXP'			=> 'Ak sa chcete vyhnúť malým obrázkom pokrytých vodotlačov, tak tu si môžete zadať minimálnu výšku.',
	'WATERMARK_IMAGES'				=> 'Použijem vodotlač do obrázkov.<br><font color=*00000B*</br> Ide o vodotlač ktorá sa umiestni do obrázku kvôli ochrane autorských práv obrázka</font>',
	'WATERMARK_OPTIONS'				=> 'Volby vodotlače',
	'WATERMARK_POSITION'			=> 'Pozícia vodotlače',
	'WATERMARK_POSITION_BOTTOM'		=> 'spodná časť',
	'WATERMARK_POSITION_CENTER'		=> 'v strede',
	'WATERMARK_POSITION_LEFT'		=> 'vľavo',
	'WATERMARK_POSITION_MIDDLE'		=> 'v prostriedku',
	'WATERMARK_POSITION_RIGHT'		=> 'vpravo',
	'WATERMARK_POSITION_TOP'		=> 'na vrchu',
	'WATERMARK_SOURCE'		 		=> 'Zdrojový súbor pre vytlačenie Vodotlače (relatívna cesta vo vášom roote phpbb)',
	'WATERMARK_WIDTH'				=> 'Minimálna šírka pre vodotlač',
	'WATERMARK_WIDTH_EXP'			=> 'Ak sa chcete vyhnúť malým obrázkom pokrytých vodotlačov, tak tu si môžete zadať minimálnu šírku.',
));

/**
* A copy of Handyman` s MOD version check, to view it on the gallery overview
*/
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TOPIC'	=> 'Oznámenie, Verzia',
	'CURRENT_VERSION'		=> 'Aktuálna Verzia',
	'DOWNLOAD_LATEST'		=> 'Stiahntá Posledna Verzia',
	'LATEST_VERSION'		=> 'Posledná Verzia',
	'NO_INFO'					=> 'Nedarí sa mi skontaktovť zo serverom pre stiahnutie MÓDU',
	'NOT_UP_TO_DATE'			=> '%s už nie je aktuálna',
	'RELEASE_ANNOUNCEMENT'	=> 'Oznámenia Tém',
	'UP_TO_DATE'			=> '%s je najnovšia verzia',
	'VERSION_CHECK'			=> 'Preverenie Verzie Módu',
));

?>
