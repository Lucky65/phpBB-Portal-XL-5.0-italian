<?php
/**
*
* install_gallery [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package phpBB Gallery
* @version $Id: install_gallery.php 1298 2009-08-23 21:42:50Z nickvergessen $
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
	'BBCODES_NEEDS_REPARSE'		=> 'Potrebné BBCode ktoré sa musia prestavať.',

	'CAT_CONVERT'				=> 'konvertovanie phpBB2',
	'CAT_CONVERT_TS'			=> 'konvertovanie TS Galérie',

	'CHECK_TABLES'				=> 'Preverenie tabuliek',
	'CHECK_TABLES_EXPLAIN'		=> 'Nasledujúce tabuľky musia existovať, aby boli prestavené.',

	'CONVERT_SMARTOR_INTRO'			=> 'Prevod z „MÓDU-Albumu" na modernú „phpBB Galériu“',
	'CONVERT_SMARTOR_INTRO_BODY'	=> 'S týmto konvertorom, môžete zmeniť vaše albumy, obrázky, hlasovania a komentáre z  <a href="http://www.phpbb.com/community/viewtopic.php?f=16&t=74772">MÓDU-Albumu</a> od Smartor (verzia v2.0.56) a <a href="http://www.phpbbhacks.com/download/5028">Plný Balík Albumu</a> (verzia v1.4.1) na túto Galériu phpBB.<br /><br /><strong>Pozor:</strong> Toto <strong>povolenie</strong> je <strong>nekopirovatelné</strong>.',
	'CONVERT_TS_INTRO'				=> 'Konvertovanie „TS Galériu“ na „phpBB Galériu“',
	'CONVERT_TS_INTRO_BODY'			=> 'S týmto konvertorom, môžete zmeniť vaše albumy, obrázky, hlasovania a komentáre z <a href="http://www.phpbb.com/community/viewtopic.php?f=70&t=610509">TS Galérie</a> (verzie v0.2.1) na túto phpBB Galériu.<br /><br /><strong>Pozor:</strong> Toto <strong>povolenie</strong> je <strong>nekopirovatelné</strong>.',
	'CONVERT_COMPLETE_EXPLAIN'		=> 'Zmena z vašej galérie na Galériu phpBB v%s prebehla úspešne.<br />Prosím teraz vymažte inštalačný adresár, z rootu fóra, aby nastavenia prebehli korektne.<br /><br /><strong>Prosím pozor tieto oprávnenia nie sú kopírovatelné.</strong><br /><br />Mal by ste prečistiť vašu databázu ohladne starých položiek a chybajúcich obrázkov. Toto môžete vykonať cez ".MÓDY > phpBB Galéria > Vyčistiť galériu".',

	'CONVERTED_ALBUMS'			=> 'Tieto albumy boli úspešne prekopírované.',
	'CONVERTED_COMMENTS'		=> 'Komentáre boli úspešne prekopírované.',
	'CONVERTED_IMAGES'			=> 'Obrázky boli úspešne prekopírované.',
	'CONVERTED_MISC'			=> 'Konvertovanie rôznych pomerov.',
	'CONVERTED_PERSONALS'		=> 'Osobné albumy boli úspešne prekopírované.',
	'CONVERTED_RATES'			=> 'Klasifikácie boli úspešne prekopírované.',
	'CONVERTED_RESYNC_ALBUMS'	=> 'Resynchronizácia štatistýk albumu.',
	'CONVERTED_RESYNC_COMMENTS'	=> 'Resynchronizácia komentárov.',
	'CONVERTED_RESYNC_COUNTS'	=> 'Resynchronizácia skupín počítadiel obrázkov.',
	'CONVERTED_RESYNC_RATES'	=> 'Resynchronizácia ohodnotení.',

	'FILE_DELETE_FAIL'				=> 'Súbor som nevedel vymazať, musíte ho vymazať manuálne',
	'FILE_STILL_EXISTS'				=> 'Súbor stále existuje',
	'FILES_REQUIRED_EXPLAIN'		=> '<strong>Požiadavky</strong> - Aby bola správne phpBB Galéria nainštalovaná musia byť sprístupnené k zápisu určité súbory alebo adresáre. Ak vidíte vedľa zadaných "Nezapisovatelný" musíte zmeníť oprávnenia v roote phpBB.',
	'FILES_DELETE_OUTDATED'			=> 'Vymazanie starých súborov',
	'FILES_DELETE_OUTDATED_EXPLAIN'	=> 'Keď kliknete na vymazať súbory, súbory budú vymazané bez možnosti ich znovuobnovenia!<br /><br />Prosím pozor:<br />Ak máte nainštalovaných viac štýlov a jazykov, tak ich súbory musíte vymazať manuálne.',
	'FILES_OUTDATED'				=> 'Staré súbory',
	'FILES_OUTDATED_EXPLAIN'		=> '<strong>Staré súbory</strong> - Kvôli zamedzeniu pokusom o hackerstvo, prosím odstráňte nasledujúce súbory.',

	'INSTALL_CONGRATS_EXPLAIN'	=> '<p>Nová inštalácia Galérie phpBB je úspešne dokončená v%s.<br/><br/><strong>Prosím teraz vymažte, presunte alebo premenujte inštalačný adresár predtým, než spustíte fórum. Ak tento adresár bude dostupný, spristupnený bude len Administrátorsky Ovládací panel (ACP).</strong></p>',
	'INSTALL_INTRO_BODY'		=> 'Cez tieto nastavenie, môžete nainštalovať phpBB Galériu na vaše fórum.',

	'GOTO_GALLERY'				=> 'Prejdem do fóra Galérie phpBB',

	'MISSING_CONSTANTS'			=> 'Predtým než spustíte inštalačný skript, musíte presunúť vaše editované súbory, obzvlášť includes/constants.php.',
	'MODULES_CREATE_PARENT'		=> 'Vytvorenie hlavných štandardov-modulu',
	'MODULES_PARENT_SELECT'		=> 'Nastavenie modulov',
	'MODULES_SELECT_4ACP'		=> 'Umiestnim hlavný modul "Administrátorský ovládací panel" do',
	'MODULES_SELECT_4LOG'		=> 'Umiestnim hlavný modul "Protokol galérie" do',
	'MODULES_SELECT_4MCP'		=> 'Umiestnim hlavný modul "Moderátorský ovládací panel" do',
	'MODULES_SELECT_4UCP'		=> 'Umiestnim hlavný modul "Uživateľský ovládací panel" do',
	'MODULES_SELECT_NONE'		=> 'Ovladací Panel Uživateľa',

	'OPTIONAL_EXIFDATA'				=> 'Funkcia "exif_read_data" existuje',
	'OPTIONAL_EXIFDATA_EXP'			=> 'Exif- modul nie je zavedený alebo nainštalovaný.',
	'OPTIONAL_EXIFDATA_EXPLAIN'		=> 'Ak funkcia exif, existuje dáta obrázkov sú zobrazené na stránke obrázkov .',
	'OPTIONAL_IMAGEROTATE'			=> 'Funkcia "imagerotate" existuje',
	'OPTIONAL_IMAGEROTATE_EXP'		=> 'Mali by ste aktualizovať verziu GD, na aktuálnu "%s".',
	'OPTIONAL_IMAGEROTATE_EXPLAIN'	=> 'Ak funkcia existuje, môžete upravovať ako aj otáčať nahraté obrázky.',

	'PHP_SETTINGS'				=> 'Nastavenia PHP',
	'PHP_SETTINGS_EXP'			=> 'Tieto nastavenia konfigurácie PHP sú potrebné pre inštaláciu a prevádzku galérie.',
	'PHP_SETTINGS_OPTIONAL'		=> 'Voliteľné nastavenia PHP',
	'PHP_SETTINGS_OPTIONAL_EXP'	=> 'Tieto nastavenia PHP <strong>NIE SÚ</strong> potrebné pre bežné použitie, ale pridajú extra funkcie.',

	'REQ_GD_LIBRARY'			=> 'Vloženie GD Knižníc',
	'REQUIREMENTS_EXPLAIN'		=> 'Pred výkonom plnej inštalácie phpBB uskutoční určité testy konfigurácie súborov na vašom servery, aby sa dala nainštalovať a spustiť Galéria phpBB. Prosím venujte pozornosť všetkým výsledkom a nepokračujte pokiaľ všetky požadované testy v poriadku neprebehnú.',

	'STAGE_ADVANCED_EXPLAIN'		=> 'Prosím vyberte si hlavný modul pre moduly galérie. Ale velmi sa nedoporučuje meniť všetky predvolené nastavenia.',
	'STAGE_COPY_TABLE'				=> 'Kopírovanie tabuliek do databázy',
	'STAGE_COPY_TABLE_EXPLAIN'		=> 'Tabuľky databázy pre album a uživateľské dáta majú tie isté pomenovania v TS Galérie ako aj v phpBB Galérie, takže prekopírovaním sa zmenia v nich informácie.',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Tabulky v použitej databáze pre phpBB Galériu boli vytvorené a nastavené s určitými východiskovými údajmi. Stlačte "Pokračovať" a dokončenie inštaláciu phpBB Galérie.',
	'SUPPORT_BODY'					=> 'Plná podpora bude bezplatne poskytnutá pre súčasnú uvoľnenú stabilnú verziu Galériu phpBB. V tom je zahrnutá:</p><ul><li>inštalácia</li><li>konfugurácia</li><li>technické problémy</li><li>problémy vo vzťahu ku potenciálnej výstroji v programovom vybavení</li><li>aktualizácia z Release Candidate (RC) verzie na najnovšiu stabilnú verziu</li><li>konvertovanie z Smartor\'s Album-MOD pre phpBB 2.0.x a Galériu phpBB pre phpBB3</li><li>konvertovanie z TS Galérie do phpBB Galérie</li></ul><p>Beta - Verzia je limitovaná. Ak existuje aktualizácia, doporučujeme stiahnuť vždy novú verziu.</p><p>Podpora je na nasledujúcich zadaniach</p><ul><li><a href="http://www.flying-bits.org/">flying-bits.org - MOD-Autor nickvergessen\'s board</a></li><li><a href="http://www.phpbb.de/">phpbb.de</a></li><li><a href="http://www.phpbb.com/">phpbb.com</a></li></ul><p>',

	'TABLE_ALBUM'				=> 'tabuľky vrátane obrázkov',
	'TABLE_ALBUM_CAT'			=> 'tabuľky vrátane albumov',
	'TABLE_ALBUM_COMMENT'		=> 'tabuľky vrátane komentárov',
	'TABLE_ALBUM_CONFIG'		=> 'tabuľky vrátane nastavení',
	'TABLE_ALBUM_RATE'			=> 'tabuľky vrátane hodnotení',
	'TABLE_EXISTS'				=> 'existuje',
	'TABLE_MISSING'				=> 'chýba',
	'TABLE_PREFIX_EXPLAIN'		=> 'Prefix z phpBB2-inštalácie',

	'UPDATE_INSTALLATION_EXPLAIN'	=> 'S tadialto si môžete aktualizovať vašu Verziu Galérie phpBB.',

	'VERSION_NOT_SUPPORTED'		=> 'Ľutujem, ale vaša aktualizácia z < 0.2.0 nie je podporovaná z tejto inštalačnej verzie.',
));

?>