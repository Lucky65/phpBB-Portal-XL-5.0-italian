<?PHP
/** 
*
* portal_xl_install.php [Slovak] preložené s prekladačom Google + PC Translator, upravil J.P alias Brahma
*
* @package language for phpBB3 Portal XL
* @version $Id: portal_xl_install.php,v 1.2 2009/10/20 damysterious Exp $
* @copyright (c) 2009 DaMysterious
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
	// Portal XL Convert Procedure
	'PORTAL_CONVERT'				=> 'Konvertovanie Portálu XL',
	'PORTAL_CONVERT_BASIC_FINISHED'	=> 'Tabulky databázy budú aktualizované pre nové textové funkcie phpBB 3.<br />Bez tohoto skripu sa text nezmení.<br /><br />Kvôli vyhnutiu sa chýb a porúch počas konvertovania textov, sa skript bude permanentne znovu spúštať sám. Pokial skript nedokončí prevod, kludne sa zamestnajte niečim iným.<br /><br />Ale ak nastane prerušenie tejto procedúry, spustite skript znovu.<br /><br />Prosím ostante trpezlivý pokial skript nezmení texty, počkajte si na konečnú správu, nakoľko veľa textov sa musí prepísať, takže to zaberie určitý čas.',
	'PORTAL_CONVERT_DATABASE'		=> 'Konvertovanie databázy',
	'PORTAL_CONVERT_NOT_POSSIBLE'	=> '<strong>Konvertovanie nie je možné!</strong><br /><br />Táto verzia Portálu XL nemôže konvertobať Portál XL 4.0 Premod.<br /><br />Verzia musí byť minimálne Portál XL <strong>Premod RC2</strong><br />Použivate aktuálne verziu Portal XL <strong>%1$s</strong>.<br /><br />Ak vaša verzia je prinajmenšom Portal XL Premod RC2, tak som schopný túto aktualizovať.',
	'PORTAL_CONVERT_PROCEDURE'		=> 'Aktuálne %1$s z %2$ nastavených dat sú aktualizované.<br /><br />Prosím kliknite na tlačidlo ktoré je dole a pokračujte, alebo chvíľu počkajte a skript sa znovu sám spustí.',
	'PORTAL_CONVERT_TODO'			=> 'Tu je celá databáza ktorú použiva Portál XL 5.0 Plain a ktorá bude prestavaná na najnovší Portáll XL 4.0 Premod RC5.<br /><br />Pre spustenie konvertovania, kliknite na tlačítko ktoré je dole.<br /><br />Prosím ostante trpezlivý počas výkonu, nakoľko tento výkon zaberie určitý čas.',
	'PORTAL_FINAL_CONVERT_STEP'		=> 'Konvertovanie databázy použivané Portálom XL je skončené.<br />Pre dokončenie kompletného výkonu použitia MÓDU je potrebný vykonať posledný krok. Prosím kliknite na tlačítko, ktoré je dole a dokončí sa posledná časť.',

	// Portal XL Installation Procedure
	'PORTAL_INSTALL'				=> 'Inštalácia Portálu XL',

	'PORTAL_INSTALL_EXPLAIN'		=> '<p>Vítajte pri Inštalácii Portálu XL<most />Toto je  inštalácia Portálu XL pre phpBB3.</p> 
	<p>Aby táto inštalácia úspešne pracovala je potrebné vykonať nasledujúce procedúry:</p>
	<ul>
		<li>Overte si, či je prekopírovaný/presunutý celý obsah adresára <strong><span style="color:#FF0000;">\root\</span></strong> do rootu phpBB 3.0.x. <strong><span style="color:#FF0000;">\forum\</span></strong> (vykonajte tento krok teraz)!</li>
	</ul>
	<ul>
		<li><em><strong><span style="color:#009900;">Zmena povolení sprístupnenia súborov CHMOD</span></strong></em><br />
		<em><strong>Pred inštaláciov zmente </strong> všetky CHMÓDY a adresáre ide o *Prístup v Roote*.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> na </span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> na </span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> ale </span></strong> (Niektoré servery vyžadujú 0777 a nie 0755):<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> a všetky podzložky<br />
		<strong>/dl_mod/downloads</strong> a všetky podzložky<br />
		<strong>/gallery/images</strong> a všetky podzložky<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/mods/toplist_mod/cache</strong><br />
		<strong>/mods/toplist_mod/images</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		</li>
	</ul>
	<p>Stačením tlačitka Pokračovať spustím inštaláciu.</p>',
	
	'PORTAL_INSTALL_NEXT'			=> 'Tabuľky databázy boli úspešne vytvorené.<br /><br />Kliknite na tlačitko a prejdem na ďalší krok, kde vykonám zápis predvolených hodnôt do tabuliek.',
	'PORTAL_INSTALL_FINISHED'		=> 'Dokončenie Inštalácie Portálu XL',
	'PORTAL_INSTALL_INTRO'			=> 'Vítaj pri Inštalácii Portálu XL',

	'PORTAL_INSTALL_FINISHED_EXPLAIN'	=> '
		<p>Nainštalovanie Portálu XL 5.0 Basic %1$s prebehlo úspešne. Tu máte možnosti voľby že čo robiť s čerstvo nainštalovaným Portálom XL.</p>
		<h2>O niekoľko sekúnd už prejdete do Portálu XL!</h2>
		<p>Potrebujem nejaký čas, aby som preskúmal možnosti, ktoré sú k dispozícii. Pamätajte si, že pomoc je k dispozícii on-line prostredníctvom <a href="http://www.portalxl.nl/forum/">Portal XL Home</a> a <a href="http://www.portalxl.nl/forum/index.php">fórum podpory</a>.</p><br />
		<p><strong style="text-transform: uppercase; font-size:13px; color: #FF0000;">Pozor:</strong></span> Na dokončenie tejto inštalácie musíte kliknúť na tlačitko nižšie a inštalátor Portálu XL Premod prejde na ďalšiu čast.</p>',

	'PORTAL_INSTALL_NOT_POSSIBLE'	=> '<strong>Inštalácia nie je možná!</strong><br /><br />Skript našiel existujúcu inštaláciu a tak inštalačný skript sa nedá spustiť pred jeho spustením musíte vymazať nainštalované zadanie z Portálu XL v roote súboru config.php, sú to dva spodné riadky.',

	'PORTAL_OVERVIEW_BODY'			=> 'Toto je najnovšia <strong>Bezplatná</strong> verzia phpBB3 Portálu XL ide o flexibilné a výkonné riešenie pre vaše fórum phpBB 3.0.x s obsahom mnohých veľkých a progresívnych funkcií.<br /><br /> 
	Tento portál zahrňuje užitočné prispôsobiteľné zadania. Súčasne, ponúkame rýchlu a účinnú alternatívu portálu k ďalším phpBB3. Mód portálu nenahrádza ale udržiava na profesionálnej úrovni phpBB3. Vytvorili sme túto modifikáciu v našom voľnom čase, my sa pokúšame urobíť túto modifikáciu čo najlepšie, ako profesionálnu sadu bez potreby nejakého skriptu a nutných znalostí administrátora.
	<p>Dôležité informácie k verzi phpBB3 Portal XL
	<ul>
		<li>Portal XL 5.0 RC4-Plain (26-02-2008 first public release Plain (basic) version by user request)</li>
		<li>Portal XL 5.0 Plain (12-04-2008)</li>
		<li>Portal XL 5.0 Plain 0.1 (31-05-2008)</li>
		<li>Portal XL 5.0 Plain 0.2 (31-10-2008)</li>
		<li>Portal XL 5.0 Plain 0.2 (01-06-2009) update to pbpBB 3.0.5</li>
		<li>Portal XL 5.0 Plain 0.2 (24-11-2009) update to pbpBB 3.0.6</li>
		<li>Portal XL 5.0 Plain 0.2 (02-03-2010) update to pbpBB 3.0.7</li>
		<li>Portal XL 5.0 Plain 0.2 (21-11-2010) update to pbpBB 3.0.8</li>
	</ul>
	<ul>
		<li>Portal XL 5.0 Premod 0.2 (05-06-2009) update to pbpBB 3.0.5</li>
		<li>Portal XL 5.0 Premod 0.3 (22-11-2009) update to pbpBB 3.0.6</li>
		<li>Portal XL 5.0 Premod 0.3 (01-03-2010) update to pbpBB 3.0.7</li>
		<li>Portal XL 5.0 Premod 0.3 (28-11-2010) update to pbpBB 3.0.8</li>
	</ul>
	</p><br />Výber dostupných tabuliek.',
	
	'PORTAL_SQL_UPDATE_DONE'		=> '<strong>Vykonal som v databáze tieto zmeny:</strong><br />',


	'PORTAL_SUB_SUPPORT'			=> 'General Portal Support',
	'PORTAL_SUPPORT_BODY'			=> 'Support will be provided for the current stable release of Portal XL 5.0 Premod, free of charge. <p>This includes:</p><p><ul><li>installation</li><li>configuration</li><li>technical questions</li><li>problems relating to potential bugs in the software</li></ul></p><p>Usage of Beta-Versions is limited recommended. If there are updates, it\'s recommended to update as soon as possible.</p><p>Support is given on: </p><ul><li><a href="http://www.portalxl.nl/forum/" target="_blank">www.portalxl.nl</a></li></ul><br />As we are unable to know what is changed/modded to your existing phpBB3 setup before, we are not able in any way to support custom changes. Remember, using this package can lead to lost of already changed code or added mod\'s.',

	// Portal XL Update Procedure
	'PORTAL_UPDATE'					=> 'Aktualizovanie Portálu XL',
	'PORTAL_UPDATE_SUCCESS'			=> 'Gratulujem!<br />Aktualizácia databázy a nastavenia Portálu XL je dokončené.<br /><br />Teraz môžete prejsť ďalej a nainštalovať zvyšné časti z inštalačných inštrukcií Portálu XL do vášho fóra.<br /><br />Prosím vymažte zložku /install/ z rootu fóra a potom spustite fórum znovu.',
	'PORTAL_UPDATE_BASIC_FINISHED'	=> 'Tabuľky databázy sú teraz aktualizované pre použitie nových textových funkcií v phpBB 3.<br />Bez tohoto skriptu text nezmeníte.<br /><br />Prosím vyhnite sa chybám ako predčasneho ukončenia počas konvertovania textou, Skript sa permanentne znovu spustí opakovane sám. Buďte tak dobrý, proste venujte sa niečomu inému, pokiaľ prevod skript neskončí.<br /><br />Ale ak nastane prerušenie tejto procedúry, znovu spustite skript a bude ďalej pokračovať.<br /><br />Prosím ostante  trpezlivý pohial skript zmená texty a počkaje na konečnú správu, tento výkon zaberie určitý čas pokiaľ skript vykoná všetky zmeny.',
	'PORTAL_UPDATE_DATABASE'		=> 'Aktualizácia databázy Portalu XL',
	'PORTAL_UPDATE_NOT_POSSIBLE'	=> '<strong>Aktualizácia nie je možná!</strong><br /><br />Táto verzia Portálu XL sa nedá aktualizovať vyzerá to tak že stav Portálu je v poriadku.<br /><br />Používate aktuálne verziu Portal XL 5.0 <strong>%1$s</strong>',
	'PORTAL_UPDATE_PROCEDURE'		=> 'Aktuálne %1$s z %2$ nastavených dát je aktualizovaných.<br /><br />Prosím kliknite na tlačítko ktoré je dole a budem pokračovať, alebo počkajte chvíľku a skript sa spustí sám',
	'PORTAL_UPDATE_TODO'			=> 'Celá jestvujúca databáza a tabuľky používané Portálom XL budú aktualizované najnovším spracovaním.<br /><br />Pre spustenie aktualizácie, kliknite na tlačitko ktoré je dole.<br /><br />Prosím ostante trpezlivý počas výkonu, nakoľko potrebujem určitý čas, na prepísanie tabuliek.',
	'PORTAL_FINAL_UPDATE_STEP'		=> 'Existujúce tabuľky Portalu XL sú teraz aktuálne.<br />Ak chcete korektné zobrazenie textov a nastavenie dát na fóre, musia sa tieto teraz prestaviť.<br /><br />Prosím kliknite na tlačítko, ktoré je dole a budem pokračovať v prestavbe.',

	// Portal XL Remove Database Entries Procedure
	'PORTAL_REMOVE'					=> 'Portal XL Remove',
	'PORTAL_REMOVE_NOT_POSSIBLE'	=> '<strong>Remove not possible!</strong><br /><br />Your version release of this Portal: <strong>%1$s</strong><br /><br />The Portal XL must at least have the release <strong>%1$s</strong>, to be able to remove all database tables.<br /><br />Please update the Portal manually to this release, before you can use this script again.',
	'PORTAL_REMOVE_SUCCESS'			=> 'Gratulujeme!<br />Odstránenie položiek z databázy Portalu XL je dokončené.<br /><br />Teraz môžete z fóra odstrániť zostávajúce časti portálu XL.<br /><br />Prosím vymažte priečinok /install_portal/ z rootu fóra, aby ste sa vyhli záležitostiam spojených zo zabezpečením fóra.',

	'PORTAL_REMOVE_TODO'			=> 'Portal XL will be removed from your database, it is save to delete all Portal XL related files, as there are (related to your root), if this step is completed:
	<ul>
		<li>v zložke <span style="color:#009900;">/adm/style/</span> remove all <span style="color:#FF0000;">acp_portal*.html</span>.</li>
		<li>v zložke <span style="color:#009900;">/includes/acp/</span> remove all <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>v zložke <span style="color:#009900;">/includes/acp/info/</span> remove  all <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>v zložke <span style="color:#009900;">/language/en/</span> remove <span style="color:#FF0000;">portal.php</span></li>
		<li>v zložke <span style="color:#009900;">/language/en/acp/</span> remove all <span style="color:#FF0000;">portal_*.php</span></li>
		<li>v zložke <span style="color:#009900;">/language/en/mods/</span> remove <span style="color:#FF0000;">portal_xl_average_statistics.php</span></li>
		<li>odstránim hlavnú zložku <span style="color:#009900;">/portal/</span></strong></li>
		<li>odstránim celý <span style="color:#009900;">/portal/</span> folders (do this for every style installed) under <span style="color:#009900;">/styles/stylename/template/</span></li>
		<li>odstránim celý <span style="color:#FF0000;">.htaccess</span> by the original one from phpBB 3.0.x, remove <span style="color:#FF0000;">portal.php</span>, <span style="color:#FF0000;">portal_pages.php</span> and <span style="color:#FF0000;">robots.txt</span>.</li>
		<li>voliteľné bbcodes nainštalované použitím tohoto inštalačného programu budú odstránené.</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Prosím čítajte:</strong> Výkonom znovu nahratia originálu phpBB 3.0.x sa prepíšu súbory ktoré sú zmenené pre Portál XL 5.0 Premod, a tak majte na pamäti, pred aktualizovaním odstráňte priečinok <span style="color:#009900;">/install/</span> a súbor <span style="color:#FF0000;">config.php</span> z originálneho balíka phpBB 3.0.x.</p>
	<p>Ďakujeme za vyskúšanie Portálu XL Premod.</p><br /><br />',
	
	'PORTAL_SQL_REMOVE_DONE'		=> '<strong>Vykonal som v databáze tieto zmeny:</strong><br />',
	'PORTAL_FINAL_REMOVE_STEP'		=> 'Všetky existujúce tabuľky databázy a položky používané Portalom XL sú odstránené.<br /><br />Kliknite na tlačitko nižšie a budem pokračovať, alebo počkajte niekoľko sekúnd, a automaticky sa presmerujem na ďalší krok.',
	'REMOVE_DATABASE'				=> 'Pokračovať',
	'STAGE_REMOVE_DB'				=> 'Odstránenie databázy',

	// Portal XL CHMOD Directories
	'PORTAL_CHMOD'					=> 'Portal XL CHMOD',
	'PORTAL_CHMOD_NOT_POSSIBLE'		=> '<strong>CHMOD not possible!</strong><br /><br />Your version release of this Portal: <strong>%1$s</strong><br /><br />The Portal XL must at least have the release <strong>%1$s</strong>, to be able to CHMOD all directories used by Portal XL.<br /><br />Please update the Portal manually to this release, before you can use this script again.',
	'PORTAL_CHMOD_SUCCESS'			=> 'Gratulujeme!<br />CHMOD to folders and files was successful.',

	'PORTAL_CHMOD_TODO'				=> 'Portal XL\'s installation Wizard will try to CHMOD / Rename following directories or files for you if acces is granted for such a procedure by your hosting company:
	<ul>
		<li><em><strong><span style="color:#009900;">Zmena povolení sprístupnenia súborov CHMOD</span></strong></em><br />
		<em><strong>Pred inštaláciov zmente</strong> všetky CHMÓDY a adresáre ide o *Prístup v Roote*.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> na </span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> na </span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> ale </span></strong> (Niektoré servery vyžadujú 0777 a nie 0755):<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> a všetky podzložky<br />
		<strong>/dl_mod/downloads</strong> a všetky podzložky<br />
		<strong>/gallery/images</strong> a všetky podzložky<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/mods/toplist_mod/cache</strong><br />
		<strong>/mods/toplist_mod/images</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Prosím čítajte:</strong> As usual, before proceeding have a recent backup of your files.</p><br /><br />',

	'PORTAL_CHMOD_DONE'			=> '<strong>Vykonal som v databáze tieto zmeny:</strong><br />',
	'PORTAL_FINAL_CHMOD_STEP'	=> 'All existing directories and files in use by Portal XL where CHMOD set.<br /><br />Click on the button below to continue or wait some seconds to automatically redirect to the next step.',
	'PORTAL_CHMOD_FILES'		=> 'Proceed to CHMOD',

	'STAGE_CHMOD_FILES'			=> 'CHMOD in action...<br />
	<ul>
		<li><em><strong><span style="color:#009900;">Zmena povolení sprístupnenia súborov CHMOD</span></strong></em><br />
		<em><strong>Pred inštaláciov zmente</strong> všetky CHMÓDY a adresáre ide o *Prístup v Roote*.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> na </span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> na </span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> ale </span></strong> (Niektoré servery vyžadujú 0777 a nie 0755):<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> a všetky podzložky<br />
		<strong>/dl_mod/downloads</strong> a všetky podzložky<br />
		<strong>/gallery/images</strong> a všetky podzložky<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/mods/toplist_mod/cache</strong><br />
		<strong>/mods/toplist_mod/images</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		</li>
	</ul>
	Po kliknutí na tlačítko sa nebude dať sprístupniť inštalátor pokial nepremenejete zložku <strong>/install/</strong> na <strong>/_install/</strong>. Pokiaľ potrebujete spustiť inštalačný program znova premenujte priečinok <strong>/_install/</strong> ako si spristupníte priamo premenovaný adresár.<br /><br />Kliknite na tlačítko nižšie a budem pokračovať.',

	// Portal XL BBCODE Import
	'PORTAL_BBCODE'					=> 'Portal XL Voliteľné bbCode',
	'PORTAL_BBCODE_NOT_POSSIBLE'		=> '<strong>Pridanie vlastných BBCodes nie je možné!</strong><br /><br />Táto verzia Portálu je: <strong>%1$s</strong><br /><br />Verzia Portálu XL musí byť aspoň <strong>%1$s</strong>, aby sa dali použiť všetky adresáre BBCode v Portále XL.<br /><br />Prosím aktualizujte si Portál pred tým, ako spustíte tento skript znovu.',
	'PORTAL_BBCODE_SUCCESS'			=> 'Gratulujeme!<br />Pridanie vlastných BBCodes do databázy prebehlo úspešne.',

	'PORTAL_BBCODE_TODO'				=> 'Vitajte v Portále XL pri inštalácii bbCode.<br /><br />Do databázy Portálu XL sa nainštalujú nasledujúce vlastné BBCode:
	<ul>
		<li><span style="color:#009900;">Insert spoiler: [spoiler]your text here[/spoiler]</span></li>
		<li><span style="color:#009900;">Insert iframe: [iframe]http://url.here[/iframe]</span></li>
		<li><span style="color:#009900;">Insert youtube: [youtube]videonumber[/youtube]</span></li>
		<li><span style="color:#009900;">Insert GVideo: [GVideo]videonumber[/GVideo]</span></li>
		<li><span style="color:#009900;">Insert myvideo: [myvideo]videonumber[/myvideo]</span></li>
		<li><span style="color:#009900;">Insert clipfish: [clipfish]videonumber[/clipfish]</span></li>
		<li><span style="color:#009900;">Insert myspace: [myspace]videonumber[/myspace]</span></li>
		<li><span style="color:#009900;">Insert gametrailers: [gametrailers]trailernumber[/gametrailers]</span></li>
		<li><span style="color:#009900;">Insert center: [center]your text[/center]</span></li>
		<li><span style="color:#009900;">Insert strike: [strike]your text[/strike]</span></li>
		<li><span style="color:#009900;">Insert bgcolor: [bgcolor=red]your text[/bgcolor]</span></li>
		<li><span style="color:#009900;">Insert hidden link: [hiddenlink=http//url.her]your text[/hiddenlink]</span></li>
		<li><span style="color:#009900;">Insert offtopic: [offtopic]your text[/offtopic]</span></li>
		<li><span style="color:#009900;">Insert marquee: [marquee=color here]your text[/marquee]</span></li>
		<li><span style="color:#009900;">Insert intended text: [tab=number here]your text[/tab]</span></li>
		<li><span style="color:#009900;">Insert Highslide Img: [hsimg]link to image[/hsimg]</span></li>
		<li><span style="color:#009900;">Insert align: [align=direction]your text[/align]</span></li>
		<li><span style="color:#009900;">Insert mailto: [mail=e-mail addres]e-mail addres[/mail]</span></li>
		<li><span style="color:#009900;">Insert horizontal ruler: [hr][/hr]</span></li>
		<li><span style="color:#009900;">Insert line break: [br][/br]</span></li>
		<li><span style="color:#009900;">Insert WMV: [wmv]http://wmv_url[/wmv]</span></li>
		<li><span style="color:#009900;">Insert super script: [sup]your text[/sup]</span></li>
		<li><span style="color:#009900;">Insert Flash video: [flash_i]your url[/flash_i]</span></li>
		<li><span style="color:#009900;">Insert stream: [stream]your url[/stream]</span></li>
		<li><span style="color:#009900;">Insert FLV: [flv]your url[/flv]</span></li>
		<li><span style="color:#009900;">Insert Real Media: [rm]your url[/rm]</span></li>
		<li><span style="color:#009900;">Insert MOV: [mov]your url[/mov]</span></li>
		<li><span style="color:#009900;">Insert Column: [col=collumn1]collumn2[/col]</span></li>
		<li><span style="color:#009900;">Insert Aligntable: [aligntable =align,width,marginleft,marginright,border,brdcolor,bkgrdcolor]{TEXT}[/aligntable]</span></li>
		<li><span style="color:#009900;">Insert Think Female: [think_f]Text here[/think_f]</span></li>
		<li><span style="color:#009900;">Insert Think Male: [think_m]Text here[/think_m]</span></li>
		<li><span style="color:#009900;">Insert Schild: [schild]your text[/schild] - This inserts your text into a smile sign</span></li>
		<li><span style="color:#009900;">[schild={SIMPLETEXT1},{NUMBER},{SIMPLETEXT2},{SIMPLETEXT3}]{TEXT}[/schild]</span></li>
		<li><span style="color:#009900;">Insert Album: [album]Picture ID[/album]</span></li>
		<li><span style="color:#009900;">Insert Tr: [tr]content[/tr]</span></li>
		<li><span style="color:#009900;">Insert Tdo: [tdo=colspan number]content[/tdo]</span></li>
		<li><span style="color:#009900;">Insert Td: [td]content[/td]</span></li>
		<li><span style="color:#009900;">Insert Table: [table]content[/table]</span></li>
		<li><span style="color:#009900;">Insert Google Map: [googlemap]Usermap-URL[/googlemap]</span></li>
		<li><span style="color:#009900;">Insert Guest Hide Text: [hide]text[/hide]</span></li>
	</ul>
	<p><strong style="text-transform: uppercase;">Prosím čítajte:</strong> Ako obvykle, pred týmto výkonom si zálohujte databázu.</p><br /><br />',

	'PORTAL_SQL_BBCODE_DONE'			=> '<strong>Vykonal som v databáze tieto zmeny:</strong><br />',
	'PORTAL_FINAL_BBCODE_STEP'		=> 'Aktualizácia astavení databázy pre BBCode.<br /><br />Kliknite na tlačítko nižšie a budem pokračovať.',
	'BBCODE_DATABASE'				=> 'Proceed to BBCODE',

	'STAGE_BBCODE_DB'				=> 'BBCODE in action...<br />
	<ul>
		<li><em><strong><span style="color:#009900;">Zmena povolení sprístupnenia súborov CHMOD</span></strong></em><br />
		<em><strong>Pred inštaláciov zmente</strong> všetky CHMÓDY a adresáre ide o *Prístup v Roote*.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> na </span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> na </span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> ale </span></strong> (Niektoré servery vyžadujú 0777 a nie 0755):<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> a všetky podzložky<br />
		<strong>/dl_mod/downloads</strong> a všetky podzložky<br />
		<strong>/gallery/images</strong> a všetky podzložky<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/mods/toplist_mod/cache</strong><br />
		<strong>/mods/toplist_mod/images</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		</li>
	</ul>
	Po kliknutí na tlačítko sa nebude dať sprístupniť inštalátor pokial nepremenejete zložku <strong>/install/</strong> na <strong>/_install/</strong>. Pokiaľ potrebujete spustiť inštalačný program znova premenujte priečinok <strong>/_install/</strong> ako si spristupníte priamo premenovaný adresár.<br /><br />Kliknite na tlačítko nižšie a budem pokračovať.',

   'PORTAL_FINAL_MODULE_STEP'		=> 'Teraz aktualizujem moduly databázy a zároveň aj ich tabuľky.<br /><br />Prosím kliknite na tlačítko, ktoré je dole a budem pokračovať.',
   'PORTAL_FINAL_CONFIGFILE_STEP'	=> 'Teraz vykonám aktualizáciu súboru config.php v roote vášho fóra.<br /><br />Prosím kliknite na tlačítko, ktoré je dole a budem pokračovať.',
   'PORTAL_SQL_MODULE_DONE'			=> '<strong>Dokončil som výkon v databáze:</strong><br />',

   'STAGE_INSERT_DATA'				=> 'Vloženie predvolených hodnôt',
   'STAGE_POPULATE_DB'				=> 'Tieto tabuľky databázy budú k dispozícii.<br /><br />Kliknutím na tlačitko dole dosadím tabuľky s informáciami.',
   'STAGE_CHMOD'					=> 'Súbory CHMOD',
   'STAGE_BBCODE'					=> 'Import bbCode',
   'STAGE_INSERT_MODULES'			=> 'Vloženie Modulov',
   'PORTAL_NOT_INSTALLED'			=> 'Inštalátor Portálu nenašiel žiadnu inštaláciu',
   'PORTAL_NOT_INSTALLED_EXPLAIN'	=> 'Najprv sa musí vykonať štandartní inštalácia Portálu XL, prosím  <a href="%s">najprv spustite inštaláciu Portálu XL</a>.',

	// Portal XL version check
	'VERSION_CHECK'					=> 'Version check',
	'VERSION_CHECK_EXPLAIN'			=> 'Checks to see if the version of Portal XL you are currently running is up to date.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Your installation is up to date, no updates are available for your version of Portal XL. You do not need to update your installation.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Your version of Portal XL is not up to date.<br />Below you will find a link to the release announcement for the latest version as well as instructions on how to perform the update.',
	'CURRENT_VERSION'				=> 'Current version',
	'LATEST_VERSION'				=> 'Latest version',
	'UPDATE_INSTRUCTIONS'			=> '
		<h2>How to update your installation with the Latest Package</h2>

		<p>The recommended way of updating your installation listed here is only valid for the latest package. You are also able to update your installation using the methods listed within the \docs\PORTAL_XL_INSTALL.html document. The steps for updating Portal XL are:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="http://www.portalxl.nl/forum/" title="http://www.portalxl.nl/forum/">Portal XL downloads page</a> and download the "Latest Package" archive.<br /></li>
			<li>Unpack the archive.<br /></li>
			<li>Upload the complete \root\ folder (retain directory structure) to your phpBB root directory (where your config.php file is).<br /></li>
			<li>Browse to \install\index.php to start the installation script and choose tab "Update"<br /></li>
			<li>Refresh cache and style(s) when done!<br /></li>
		</ul>
	',


	// Portal XL Upgrade to Premod Procedure
	'PORTAL_UPGRADE'				=> 'Portal XL 5.0 Plain Aktualizácia na Premod',
	'PORTAL_UPGRADE_SUCCESS'		=> '<br /><strong>Gratulujem</strong>!<br />Aktualizácia nastavenia databázy Portálu XL 5.0 Premod je dokončená.<br /><br />Prosím vymažte zložku<strong>/install_portal/</strong> z rootu fóra, aby sa zabránilo chybám, pri inštalovaní prídavných módov!<br /><br /><strong style="text-transform: uppercase; font-size:13px; color: #FF0000;">Upozornenie:</strong> Ďalšie kroky budú viesť k inštalácii ďalších modifikácií. tieto kroky sú nutné pre plnú prevádzku Portálu XL Premod. <br /><br /><strong style="text-transform: uppercase;">Prosím čítajte:</strong> Databázy Arkády, Užívateľského Blogu a Galérie phpBB nie sú odstránené* tento krok môžete ignorovať! <br /><br />*( Portal XL\'s inštalačné programy sa tejto časti nedotknú) <br /><br />Kliknite na tlačitko nižšie a budem pokračovať.',
	'PORTAL_UPGRADE_BASIC_FINISHED'	=> 'Tabuľky databázy sú prestavené pre nové textové funkcie v phpBB 3.<br />Bez skriptu knvertovanie textu nezmeníte.<br /><br />Kvôli vyhnutiu sa chýb a porúch počas konvertovania textov, sa skript bude permanentne znovu spúštať sám. Pokial skript nedokončí prevod, kludne sa zamestnajte niečim iným.<br /><br />Ale ak nastane prerušenie tejto procedúry, spustite skript znovu.<br /><br />Prosím ostante trpezlivý pokial skript nezmení texty, počkajte si na konečnú správu, nakoľko veľa textov sa musí prepísať, takže to zaberie určitý čas.',
	'PORTAL_UPGRADE_DATABASE'		=> 'Aktualizácia databázy Portalu XL',
	'PORTAL_UPGRADE_NOT_POSSIBLE'	=> '<strong>Aktualizácia nie je nutná!</strong><br /><br />Táto verzia Portálu XL sa nemusí aktualizovať, je v poriadku.<br /><br />Toto je aktuálna verzia Portálu XL 5.0 <strong>%1$s</strong>',
	'PORTAL_UPGRADE_PROCEDURE'		=> 'Aktuálne %1$s z %2$ nastavených dát je aktualizovaných.<br /><br />Prosím kliknite na tlačítko ktoré je dole a budem pokračovať, alebo počkajte chvíľku a skript sa spustí sám',
	'PORTAL_UPGRADE_TODO'			=> 'Všetky jestvujúce tabuľky databázy budú aktualizované pre najnovšie spracovanie Portálu XL 5.0 Premod.<br /><br />
	<ul>
		<li>Overte si, či máte prekopírovaný celý obsah adresárov do <strong><span style="color:#FF0000;">\rootu\</span></strong> phpBB 3.0.x. vášho <strong><span style="color:#FF0000;">\fóra\</span></strong> ak ste tak neurobil tak (teraz to urobte)!</li>
	</ul>
	<ul>
		<li><em><strong><span style="color:#009900;">Zmena povolení sprístupnenia súborov CHMOD</span></strong></em><br />
		<em><strong>Pred inštaláciov zmente</strong> všetky CHMÓDY a adresáre ide o *Prístup v Roote*.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> na </span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> na </span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> ale </span></strong> (Niektoré servery vyžadujú 0777 a nie 0755):<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> a všetky podzložky<br />
		<strong>/dl_mod/downloads</strong> a všetky podzložky<br />
		<strong>/gallery/images</strong> a všetky podzložky<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/mods/toplist_mod/cache</strong><br />
		<strong>/mods/toplist_mod/images</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		</li>
	</ul>
	<br /><br />Ak chcete spustiť výkon aktualizácie, kliknite na tlačítko ktoré je nižšie.<br /><br />Potrebujem nejaký čas, aby som preskúmal možnosti, ktoré sú k dispozícii.',
	'PORTAL_FINAL_UPGRADE_STEP'		=> 'Existujúce tabuľky Portalu XL sú teraz aktuálne.<br />Ak chcete korektné zobrazenie textov a nastavenie dát na vašom fóru, musia sa tieto teraz prestaviť.<br /><br />Prosím kliknite na tlačítko, ktoré je dole a budem pokračovať v prestavbe.',

   	// Portal XL Remove Database Entries Procedure
	'PORTAL_REMOVE_UPGRADE'					=> 'Portal XL 5.0 Premod Remove',
	'PORTAL_REMOVE_UPGRADE_NOT_POSSIBLE'	=> '<strong>Osdtránenie neviem vykonať!</strong><br /><br />Vašu verzia Portálu je: <strong>%1$s</strong><br /><br />Pre tento Portal XL 5.0 Premod musí byť nainštalovaná verzia <strong>Premod 0.2</strong>, a potom odstránim všetky vstupy databázy.<br /><br />Prosím aktualizujte Portál manuálne, pred použitím tohoto skriptu a potom to skúste znova.',
	'PORTAL_REMOVE_UPGRADE_SUCCESS'			=> 'Gratulujeme!<br />Odstránenie všetkých vstupov databázy z Portálu XL 5.0 Premod je dokončené.<br /><br />Teraz môžete prejsť ďalej odstrániť zvyšujúce časti Portálu XL 5.0 Premod z vášho fóra.<br /><br />Prosím vymažte priečinok /install_portal/ z rootu fóra, aby ste sa vyhli záležitostiam spojených zo zabezpečením fóra.',

	'PORTAL_REMOVE_UPGRADE_TODO'			=> 'Portál XL 5.0 Premod bude kompletne odstránený z vašej databázy, tento výkon vymaže všetky  súvisiace súbory Portálu XL 5.0 Premod, ale aj (súvisiace v roote), ak bude tento krok dokončený:
	<ul>
		<li>v zložke <span style="color:#009900;">/adm/style/</span> remove all <span style="color:#FF0000;">acp_portal*.html</span>.</li>
		<li>v zložke <span style="color:#009900;">/includes/acp/</span> remove all <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>v zložke <span style="color:#009900;">/includes/acp/info/</span> remove  all <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>v zložke <span style="color:#009900;">/language/en/</span> remove <span style="color:#FF0000;">portal.php</span></li>
		<li>v zložke <span style="color:#009900;">/language/en/acp/</span> remove all <span style="color:#FF0000;">portal_*.php</span></li>
		<li>v zložke <span style="color:#009900;">/language/en/mods/</span> remove <span style="color:#FF0000;">portal_xl_average_statistics.php</span></li>
		<li>odstránim hlavnú zložku <span style="color:#009900;">/portal/</span></strong></li>
		<li>remove all <span style="color:#009900;">/portal/</span> folders (do this for every style installed) under <span style="color:#009900;">/styles/stylename/template/</span></li>
		<li>in root replace <span style="color:#FF0000;">.htaccess</span> by the original one from phpBB 3.0.x, remove <span style="color:#FF0000;">portal.php</span>, <span style="color:#FF0000;">portal_pages.php</span> and <span style="color:#FF0000;">robots.txt</span>.</li>
		<li>additional to the above all custom bbcodes installed by use of this installer will be removed.</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Prosím čítajte:</strong> Pred začatím opätovného nahrania pôvodného phpBB 3.0.x prepíšte súbory, ktoré ste zmenil pre Portal XL 5.0 Premod, ale majte na pamäti pred nahrávaním čokoľvek, sa uistile, že je v roote nahraná položka <span style="color:#009900;">/install/</span> a súbor <span style="color:#FF0000;">config.php</span> ktorý prepíšte z pôvodného balíka phpBB 3.0.x.</p>
	<p><strong style="text-transform: uppercase; color:#FF0000;">Upozornenie:</strong> Odstránením databázy portálu XL Premod sa neodstráni z phpBB galéria! Ak chcete odstrániť tabuľky Galérie z phpBB budete musieť použiť na to skript, alebo ich manuálne odstrániť z databázy.</p>	
	<p>Ďakujeme za vyskúšanie Portálu XL 5.0 Premod.</p><br /><br />',
	
	'PORTAL_FINAL_REMOVE_UPGRADE_STEP' 		=> 'Celá jestvujúca databáza, položky a tabuľky používané Portálom XL 5.0 Premod bude odstránená.<br /><br />Kliknite na tlačítko ktoré je dole a budem pokračovať, alebo pár sekúnd počkajte a automaticky prejdem na ďalší krok.',
    'PORTAL_UPGRADE_NOT_INSTALLED_EXPLAIN'	=> 'Potrebná je štandardná inštalácia Portálu XL, prosím, <a href="%s">pokračujte prvov inštaláciuv Portálu XL</a>.',

	// Portal XL additional third party mods
	'STAGE_ADDITIONAL'							=> 'Doplnkové Módy',
	'PORTAL_ADDITIONAL_THIRD_PARTY_MODS'		=> 'Portal XL pridanie módov',
	'PORTAL_ADDITIONAL_THIRD_PARTY_MODS_BODY'	=> 'Cez toto zadanie je možné prvýkrát nainštalovať terciálne zmeny do portálu XL 5.0 Premod.<br /><span style="color:#FF0000;"><strong>Nižšie sú všetky kroky potrebné pre správne fungovanie portálu XL 5.0 Premod! Postupujte podľa uvedených krokov presne, aby sa zabránilo chybám.</strong></span>
	<hr>
	<h1 style="color:#009900;">&#8226; Krok 1 Arkáda phpBB Hranie hier Online</h1>
	<p>
	  Cez toto zadanie je možné prvýkrát nainštalovať do phpBB Arkádu, ide o mód ktorý umožňuje hrať hry on-line vo fóre portálu XL 5.0 Premod.
	  <br />Adresár <strong>\install_arcade\</strong> (ide o súčasť balíka Porálu XL) a je zavedený vo fóre hlavného adresára.
	  <br /><br />Plná podpora bude poskytovaná na aktuálnu stabilnú verziu Arkády phpBB zadarmo.
	  <br />Pomoc najdete na stránke.</p><ul><li><a href="http://www.jeffrusso.net/forum/viewforum.php?f=20" target="_blank">JeffRusso.net Arkáda phpBB Hranie hier Online</a></li></ul>
	  <br />Keď cez tlačitko, inštalácia zlyhá, vyhľadajte <strong>install_arcade/index.php</strong> (pripojte k svojmu url fóru) a spustite inštalačný skript týmto spôsobom. Kliknutím na tlačitko budete presmerovaný na novú stránku!
	  <br /><br /><div align="center"><a href="../install_arcade/index.php" target="_blank" class="button1">Spustím inštaláciu Arkády</a></div>
	</p><br />
	<hr>
	<h1 style="color:#009900;">&#8226; Krok 2 phpBB Gallery</h1>
	<p>
	  Cez toto zadanie je možné prvýkrát nainštalovať do phpBB Galériu Portálu XL 5.0 Premod
	  <br />Adresár <strong>\install_gallery\</strong> (ide o súčasť balíka Porálu XL) a je zavedený vo fóre hlavného adresára.
	  <br /><br />Plná podpora bude poskytovaná na aktuálnu stabilnú verziu phpBB Gallery, zadarmo.
	  <br />Pomoc najdete na stránke.</p><ul><li><a href="http://www.flying-bits.org/" target="_blank">flying-bits.org - MOD-Autor nickvergessen\'s board</a></li><li><a href="http://www.phpbb.de/" target="_blank">phpbb.de</a></li><li><a href="http://www.phpbb.com/" target="_blank">phpbb.com</a></li></ul>
	  <br />Keď cez tlačitko, inštalácia zlyhá, vyhľadajte <strong>install_gallery/index.php</strong> (pripojte k svojmu url fóru) a spustite inštalačný skript týmto spôsobom. Kliknutím na tlačitko budete presmerovaný na novú stránku!
	  <br /><br /><div align="center"><a href="../install_gallery/index.php" target="_blank" class="button1">Spustím inštaláciu phpBB Gallery</a></div>
	</p><br />
	<hr>
	<h1 style="color:#009900;">&#8226; Krok 3 phpBB User Blog Mod</h1>
	<p>
	  Cez toto zadanie je možné prvýkrát nainštalovať do phpBB Mód Uživateľský Blog do fóra Portalu XL 5.0 Premod.
	  <br />Adresár <strong>\blog\</strong> a <strong>\umil\</strong> (ide o súčasť balíka Porálu XL) a je zavedený vo fóre hlavného adresára.
	  <br /><br />Plná podpora bude poskytovaná na aktuálnu na aktuálnu stabilnú verziu phpBB Módu Uživateľský Blog, zadarmo.
	  <br />Pomoc najdete na stránke.</p><ul><li><a href="http://www.lithiumstudios.org/forum/viewforum.php?f=41" target="_blank">Lithium Studios phpBB Mód Uživateľský Blog</a></li></ul>
	  <br />Keď cez tlačitko, inštalácia zlyhá, vyhľadajte <strong>blog/database.php</strong> (pripojte k svojmu url fóru) a spustite inštalačný skript týmto spôsobom. Kliknutím na tlačitko budete presmerovaný na novú stránku!
	  <br /><br /><div align="center"><a href="../blog/database.php" target="_blank" class="button1">Spustím inštaláciu phpBB Mód Uživateľský Blog</a></div>
	</p><br />
 	<hr>
 	<h1 style="color:#009900;">&#8226; Krok 4 phpBB Mod Gym sitemaps</h1>
  	<p>
	  Cez toto zadanie je možné prvýkrát nainštalovať do phpBB Gym sitemaps do fóra Portalu XL 5.0 Premod.
	  <br />Adresár <strong>\gym_sitemaps\gym_install.php\</strong> a <strong>\umil\</strong> (ide o súčasť balíka Porálu XL) a je zavedený vo fóre hlavného adresára.
	  <br /><br />Plná podpora bude poskytovaná na aktuálnu na aktuálnu stabilnú verziu phpBB Módu Uživateľský Blog, zadarmo.
	  <br />Pomoc najdete na stránke.</p><ul><li><a href="http://www.phpbb-seo.com/en/forum.html" target="_blank">phpBB Mód Gym sitemaps</a></li></ul>
	  <br />Keď cez tlačitko, inštalácia zlyhá, vyhľadajte <strong>gym_sitemaps/gym_install.php</strong> (pripojte k svojmu url fóru) a spustite inštalačný skript týmto spôsobom. Kliknutím na tlačitko budete presmerovaný na novú stránku!
	  <br /><br /><div align="center"><a href="../gym_sitemaps/gym_install.php" target="_blank" class="button1">Spustím inštaláciu phpBB Mód Gym sitemaps</a></div>
	</p><br />
 	<hr>
	<p><strong style="text-transform: uppercase;" style="color:#FF0000;">Prosím čítajte:</strong> Ak sú všetky zariadenia nainštalované, odstránte všetky inštalačné adresáre, \umil\ a súbor blog/<strong>database.php</strong>, môžete preskočiť a porom nainštalovať voliteľné <a href="index.php?mode=bbcode">bbcodes</a> alebo prihlásiť do <a href="../ucp.php?mode=login">fóra</a> Portálu XL 5.0 Premod.</p>',

	// Tabs language definitions
	'CAT_UPGRADE_PREMOD'	=> 'Aktualizovať na Premod',
	'CAT_OVERVIEW'			=> 'Prehľad',
	'CAT_INSTALL'			=> 'Základná Inštalácia',
	'CAT_UPDATE'			=> 'Aktualizovať na najnovšiu verziu',
	'CAT_UPGRADE_REMOVE'	=> 'Odstrániť Portal',
	'CAT_BBCODE'			=> 'Volitelné bbCode',

));
?>
