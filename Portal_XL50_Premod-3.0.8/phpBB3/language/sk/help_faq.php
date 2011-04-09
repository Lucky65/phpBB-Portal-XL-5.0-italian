<?php
/**
*
* help_faq [Slovak]
*
* @package language
* @version $Id: help_faq.php,v 1.42 2010/01/05 23:00:00 phpbb3.sk Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

/*
* The following global is needed by Download MOD to display icons in the help texts
*/
global $user, $phpbb_root_path;

$help = array(
	array(
		0 => '--',
		1 => 'Registrácia a prihlásenie'
	),
	array(
		0 => 'Prečo sa nemôžem prihlásiť?',
		1 => 'Už ste sa zaregistrovali? Pred prihlásením je potrebné sa najskôr zaregistrovať. Bola Vám na fóre zakázaná činnosť (v takom prípade sa táto skutočnosť zobrazí)? Pokiaľ áno, kontaktujte administrátora a pýtajte sa na dôvody. Pokiaľ ste sa zaregistrovali, neboli ste z fóra vylúčení a stále sa nemôžete prihlásiť, znova skontrolujte prihlasovacie meno a heslo. Obyčajne toto býva ten problém a pokiaľ nie je, kontaktujte administrátora, možno má chybné nastavenia fóra.'
	),
	array(
		0 => 'Je vôbec potrebné sa zaregistrovať?',
		1 => 'Nemusíte. Všetko záleží na administrátorovi fóra, či je potrebné sa zaregistrovať ku vkladaniu príspevkov. Samozrejme, že registrácia Vám umožní prístup k ostatným službám nedostupným anonymným užívateľom, ako napr. postavičky, súkromné správy, posielanie e-mailov užívateľom, prihlásenie do skupín, atď. Vrele Vám teda registráciu doporučujeme. Zaberie to len chvíľu.'
	),
	array(
		0 => 'Prečo som automaticky odhlásený?',
		1 => 'Pokiaľ nezaškrtnete tlačítko <i>Prihlásiť automaticky pri ďalšej návšteve</i>, budete prihlásený len počas práce vo fóre. Toto má zabrániť zneužitiu Vášho účtu niekým iným. Aby ste zostali prihlásený, zaškrtnite toto políčko, keď sa prihlasujete. Toto však nedoporučujeme, keď sa prihlasujete z verejného počítača, napr. v knižnici, z internetovej kaviarne, na univerzite atď.'
	),
	array(
		0 => 'Ako zabránim, aby sa moje užívateľské meno objavilo v zozname práve prihlásených?',
		1 => 'Vo Vašom nastavení nájdete možnosť <i>Skryť Vašu prítomnosť vo fóre</i>, pokiaľ túto možnosť <i>zvolíte</i> budete viditeľný len pre administrátorov. Budete počítaný ako skrytý užívateľ.'
	),
	array(
		0 => 'Zabudol som heslo!',
		1 => 'Nepanikárte! Vaše heslo môžeme obnoviť. V tomto prípade stlačte na prihlasovacej stránke tlačítko <u>Zabudli ste svoje heslo?</u>, pokračujte podľa inštrukcií a takmer ihneď budete prihlásený.'
	),
	array(
		0 => 'Zaregistroval som sa, ale nemôžem sa prihlásiť!',
		1 => 'Najskôr skontrolujte, že zadávate správne užívateľské meno a heslo. Pokiaľ sú v poriadku, potom sa mohla stať jedna z nasledovných dvoch vecí. Pokiaľ je povolená podpora COPPA a klikli ste pri registrácii na odkaz <u>... a je mi menej ako 13 rokov</u>, budete musieť postupovať podľa zaslaných inštrukcií. Pokiaľ toto nie je ten prípad, potom Váš účet musí byť aktivovaný. Niektoré fóra potrebujú aktiváciu všetkých nových registrácií, buď Vami, alebo administrátorom pred tim, ako sa budete môcť prihlásiť. Keď ste sa registrovali, boli by ste k tomu vyzvaný. Pokiaľ Vám bol zaslaný e-mail, postupujte podľa inštrukcií v ňom uvedených, pokiaľ ste tento e-mail neobdržali, uistite sa, že Vaša e-mailová adresa je platná. Jedným z dôvodov, prečo sa aktivácia používa, je zmenšiť možnosť <i>nežiaducich</i> užívateľov, ktorý sa snažia iba obťažovať. Pokiaľ si ste istí, že e-mailová adresa, ktorú ste použili je platná, kontaktujte administrátora fóra.'
	),
	array(
		0 => 'V minulosti som sa zaregistroval, avšak teraz sa nemôžem prihlásiť!',
		1 => 'Najpravdepodobnejšie dôvody: zadali ste chybné užívateľské meno alebo heslo (skontrolujte e-mail, ktorý ste obdržali pri registrácií) alebo administrátor z nejakého dôvodu zmazal Váš účet. Pokiaľ je to ten druhý prípad, potom ste možno nevložili žiadny príspevok. Je to bežné, že sa pravidelne odstraňujú užívatelia, ktorí ničím neprispeli, aby sa zmenšila veľkosť databázy. Skúste sa zaregistrovať znova a zapojte sa do diskusií.'
	),
	array(
		0 => 'Čo znamená COPPA?',
		1 => 'COPPA (Child Online Privacy and Protection Act) z roku 1998 je zákon Spojených Štátov, ktorý má chrániť mládež na internete. Na stránkach, kde je potencionálna možnosť ukladania osobných údajov o užívateľovi, ktorému je menej ako 13 rokov, musí mať súhlas rodičov alebo zákonných zástupcov, aby tieto data uložil. Tento zákon však platí iba v Spojených Štátoch. Pokiaľ si nie ste istý, či toto platí aj na vašom fóre, doporučujeme kontaktovať vášho právneho poradcu, phpBB Team nemôže a nebude poskytovať právnu podporu v akomkoľvek kontexte.',
  ),
	array(
		0 => 'Prečo sa nemôžem zaregistrovať?',
		1 => 'Je možné, že Administrátor fóra zablokoval vašu IP adresu alebo zakázal použitie užívateľského mena, ktoré ste si zvolili. Administrátor taktiež mohol vypnúť registrácie, aby zabránil prístupu nových užívateľov na fórum. Pre ďalšie informácie kontaktuje administrátora fóra.',
	),
	array(
		0 => 'Na čo slúži odkaz "Vymazať všetky cookies fóra"?',
		1 => '“Vymazať všetky cookies fóra” odstráni cookies, ktoré sú vytvorené phpBB a ktoré Vás udržujú prihlásených, ďalej sa taktiež starajú o funkcie sledovania nových príspevkov na fórach a v témach, pokiaľ to administrátor umožní. Zmažte cookies fóra pokiaľ máte problémy s prihlasovaním.',
	),
	array(
		0 => '--',
		1 => 'Užívateľské nastavenia'
	),
	array(
		0 => 'Ako zmením svoje nastavenia?',
		1 => 'Všetky Vaše nastavenia (pokiaľ ste zaregistrovaný) sú uložené v databáze. Ku zmene stačí stlačiť tlačítko odkazu <u>Nastavenia</u> (zvyčajne sa objavuje na hornej časti stránky, ale nemusí to byť pravidlom). Takto si môžete zmeniť všetky svoje nastavenia.'
	),
	array(
		0 => 'Časy sú chybné!',
		1 => 'Časy sú takmer vždy v poriadku, avšak to, čo vidíte sú časy zobrazené v inom časovom pásme než v tom, v ktorom sa nachádzate. Pokiaľ je to tak, zmeňte si časové pásmo v nastaveniach. Berte na vedomie, že zmenu časového pásma a podobné nastavenia môžu meniť len registrovaní užívatelia. Takže pokiaľ nie ste registrovaný, toto je dobrý dôvod, prečo tak urobiť!'
	),
	array(
		0 => 'Zmenil som časové pásmo, ale je to stále chybne!',
		1 => 'Ak ste si istí, že ste zadali časové pásmo správne a aj tak sa líši od toho správneho, tak tou najpravdepodobnejšou odpoveďou je, že sa jedná o letný čas. Fórum nie je stavané na uplatňovanie rozdielov medzi štandardným a letným časom, takže sa môže jednať o 1 hodinový rozdiel. Riešením môže byť posunutie časového pásma o jednu hodinu po dobu trvania letného času.'
	),
	array(
		0 => 'Môj jazyk nie je na zozname!',
		1 => 'Pravdepodobne administrátor nenainštaloval tento jazyk, alebo ho nikto do tohto jazyka zatiaľ nepreložil. Kontaktujte administrátora, prípadne si preklad vytvorte sami. Pre viac informácií navštívte stránky <a href="http://www.phpbb.com/" target="_blank">phpBB Group</a>.'
	),
	array(
		0 => 'Ako zobrazím obrázok pri užívateľskom mene?',
		1 => 'Možno ste zaregistrovali pri prezeraní príspevkov dva obrázky pri užívateľskom mene. Ten prvý je obrázok spojený s Vašou úrovňou, zvyčajne v tvare hviezdičiek alebo kociek ukazujúcich, koľko príspevkov ste už pridali, alebo Vašu pozíciu vo fóre. Pod ním sa môže nachádzať väčší obrázok, známy ako "postavička" (avatar), čo je vlastne unikátny obrázok každého užívateľa. Záleží na administrátorovi fóra, či postavičky povolí, či ako s nimi naloží (v akej podobe sa zobrazia). Pokiaľ nemôžete využívať postavičky, potom práve vtedy toto administrátori zakázali, a Vy by ste sa mali spýtať na dôvody (veríme, že sa hodia).'
	),
	array(
		0 => 'Ako zmeniť svoje zaradenie?',
		1 => 'Zvyčajne svoje zaradenie zmeniť priamo nemôžete (úrovne sa objavujú pod Vašim užívateľským menom v témach a vo Vašom profile, čo záleží na použitom vzhľade). Väčšina diskusných fór používa hodnotenie úrovní k rozlíšeniu počtu Vami pridaných príspevkov a k identifikácií určitých užívateľov, napr. označenie moderátorov a administrátorov môže mať zvláštny vzhľad. Prosím, nezaťažujte fórum zbytočným prispievaním len aby ste dosiahli vyššej úrovne. Moderátor alebo administrátor potom môže počet Vašich príspevkov znížiť.'
	),
	array(
		0 => 'Keď kliknem na e-mailový odkaz užívateľa, som vyzvaný k prihláseniu!',
		1 => 'Len zaregistrovaní užívatelia môžu posielať e-mail ľuďom cez      nastavený e-mailový formulár (pokiaľ administrátor túto možnosť povolil). Toto opatrenie umožňuje zbaviť sa otravných anonymných správ a robotov, ktorý zbierajú e-mailové adresy.'
	),
	array(
		0 => '--',
		1 => 'Vkladanie príspevkov'
	),
	array(
		0 => 'Ako vložím tému do fóra?',
		1 => 'Jednoducho. Kliknite na príslušné tlačítko na obrazovke fóra alebo témy. Možno bude nutné sa zaregistrovať, kým budete môcť prispieť do diskusie. To, čo vám je povolené môžete vidieť na spodnej časti fóra alebo témy (napr. <i>Môžete zakladať nové témy v tomto fóre, Môžete odpovedať na témy v tomto fóre, atď.</i>).'
	),
	array(
		0 => 'Ako zmením alebo zmažem príspevok?',
		1 => 'V prípade, že nie ste moderátor alebo administrátor, tak môžete upravovať alebo mazať len svoje príspevky. Môžete upraviť správu (niekedy len do obmedzeného času) kliknutím na tlačítko <i>upraviť</i>. Pokiaľ už niekto odpovedal na váš príspevok a vy ho upravíte, objaví sa vám malý doplnok pod príspevkom, ktorí ukazuje, koľkokrát ste tento príspevok upravovali. Tento doplnok sa neobjaví, pokiaľ zatiaľ nikto neodpovedal alebo moderátor či administrátor zmenili príspevok (tí by mali sami zanechať odkaz prečo ho zmenili). Normálny užívatelia nemôžu príspevok zmazať, pokiaľ na neho už niekto odpovedal.'
	),
	array(
		0 => 'Ako pridám podpis k môjmu príspevku?',
		1 => 'Pridať podpis znamená, že si musíte najprv nie aký vytvoriť. To urobíte cez stránku <i>Profil</i> v Užívateľskom panely. Podpis môžete pridať k práve písanému príspevku označením okienka <i>Pripojiť podpis</i>. Môžete taktiež pridať rovnaký podpis pre všetky vaše príspevky označením príslušného políčka v nastavení profilu (je možné nepridávať podpis k vybraným príspevkom odstránením tohto označenia).'
	),
	array(
		0 => 'Ako vytvorím hlasovanie?',
		1 => 'Vytvorenie hlasovania je jednoduché. Pokiaľ pridáte nový príspevok (alebo upravujete prví príspevok, pokiaľ môžete) mali by ste vidieť tlačítko <i>Pridať hlasovanie</i> pod hlavným oknom na pridávanie príspevkov (pokiaľ to nevidíte, zrejme nemáte oprávnenie vytvárať hlasovania). Mali by ste zadať názov ankety a potom aspoň dve možnosti (nastavte napísaním názov otázky a kliknite na <i>Pridať odpoveď</i>. Môžete taktiež pridať časový limit pre anketu, kde 0 znamená neobmedzenú voľbu. Počet odpovedí, ktoré môžete zadať, určuje Administrátor fóra.'
 	),
	array(
		0 => 'Prečo nemôžem pridať viac možností do hlasovania?',
		1 => 'Maximálny počet možností nastavuje Administrátor. Ak máte pocit, že potrebujete pridať viac možností pre vaše hlasovanie, kontaktujte administrátora fóra.'
	),
	array(
		0 => 'Ako zmením alebo zmažem hlasovanie?',
		1 => 'Je to rovnako ako s príspevkami, hlasovania môžu byť upravované pôvodným autorom, moderátorom alebo administrátorom. Upraviť ho môžete kliknutím na prvý príspevok v téme (toto je vždy s hlasovaním spojené). Pokiaľ nikto zatiaľ nehlasoval, pokiaľ užívatelia môžu vymazať alebo zmeniť položku v hlasovaní, v prípade už uskutočnenej voľby to tak môže učiniť len moderátor alebo administrátor. Týmto opatrením sa snažíme zabrániť manipulácii s výsledkami hlasovania.'
	),
	array(
		0 => 'Prečo sa nemôžem dostať k fóru?',
		1 => 'Niektoré fóra môžu byť zneprístupnené určitým ľuďom či skupinám. K čítaniu, prezeraniu, prispievaniu atď. potrebujete zvláštnu autorizáciu, ktorú môže poskytnúť len moderátor a administrátor, takže ich kontaktujte.'
	),
	array(
		0 => 'Prečo nemôžem pridávať prílohy?',
		1 => 'Administrátor môže povoľovať pridávanie príloh pre jednotlivé fóra, užívateľov, alebo skupiny. Pokiaľ nemáte dostatočné oprávnenia z jednej z týchto možností, alebo niektoré z nich úplne zabraňujú pridávať prílohy, nezobrazí sa vám táto možnosť pri odosielaní príspevkov.'
	),
	array(
		0 => 'Prečo som obdržal varovanie?',
		1 => 'Každý administrátor si môže stanoviť vlastné pravidlá na svojom fóre, pokiaľ ich porušíte, môže vám byť udelené varovanie. Prosíme berte na vedomie, že toto je plne v kompetencií administrátorov fóra a phpBB Group nemá s vydávaním varovaní nič spoločné.'
	),
	array(
		0 => 'Ako môžem nahlásiť príspevok moderátorom?',
		1 => 'Administrátor môže na fóre povoliť nahlasovanie príspevkov užívateľovi. Pokiaľ je táto možnosť povolené, u každého príspevku uvidíte ikonu, ktorá vás privedie na formulár, kde vyplníte všetky informácie pre nahlásenie príspevku.'
	),
	array(
		0 => 'Na čo slúži tlačítko "Uložiť" pri písaní príspevku?',
		1 => 'Táto možnosť vám umožňuje uložiť si rozpísané správy pre neskoršie odoslanie. Pre ich opätovné načítanie navštívte Užívateľský panel, kde sú správy uložené.'
	),
	array(
		0 => 'Prečo musí byť môj príspevok schválený?',
		1 => 'Administrátor fóra môže nastaviť, že príspevky od užívateľov alebo skupín musia byť pred zobrazením schválené moderátormi. Buďto je na fóre nastavené schvaľovanie, alebo ste boli umiestnený do skupiny, pri ktorej je schvaľovanie požadované. Kontaktujte administrátora fóra pre viac informácií.'
	),
	array(
		0 => 'Ako môžem oživiť svoje témy?',
		1 => 'Kliknutím na odkaz "Oživiť tému", pokiaľ ho vidíte, môžete "oživiť" tému, čím ho posuniete na prvé miesto v prehľadu tém. Pokiaľ tento odkaz nevidíte, administrátor túto možnosť pravdepodobne vypol. Tému môžete "oživiť" taktiež pridaním nového príspevku, ale dbajte na to, aby ste neporušili pravidlá fóra.'
	),
	array(
		0 => '--',
		1 => 'Formátovanie a typy príspevkov'
	),
	array(
		0 => 'Čo je BBCode?',
		1 => 'BBCode je špeciálna konfigurácia HTML. O jeho použití rozhoduje administrátor (môže to zakázať pre jednotlivé príspevky). BBCode sám o sebe je podobný štýlu HTML, tagy sú uzavreté v hranatých zátvorkách [ a ] a ponúkajú väčšiu kontrolu nad tým, čo a jak sa zobrazí. Pre viac informácií o BBCode si prezrite stránku, ktorá je dostupná cez stránku prispievania.'
	),
	array(
		0 => 'Môžem používať HTML?',
		1 => 'Bohužiaľ nie je možné používať akékoľvek HTML formátovanie na tomto fóre a ani nieje možné túto možnosť zapnúť, administrátor však môže definovať zvláštne BBCode značky, ktoré môžu HTML nahradiť.'
	),
	array(
		0 => 'Čo sú to smajlíky (emotikony)?',
		1 => 'Smajlíky, alebo emotikony sú malé grafické obrázky, ktoré sa používajú k vyjadreniu emócií použitím malého kódu, napr. :) znamená šťastný, :( znamená smutný. Kompletný zoznam smajlíkov si môžete prezrieť v príspevkovom formulári. Prosím, snažte sa tieto smajlíky nezneužívať, aby sa príspevok nestal nečitateľným. Moderátor môže taktiež prípadne váš príspevok v tomto smere zmeniť.'
	),
	array(
		0 => 'Môžem pridávať obrázky?',
		1 => 'Obrázky sa môžu zobrazovať vo vašich príspevkoch, keďže v súčasnej dobe neexistuje žiadna funkcia k nahraniu obrázkov priamo na fórum. Z tohto dôvodu musíte zadať na obrázok odkaz, napr. http://www.stránk.xx/obrazok.jpg. Nemôžete vytvárať odkazy na obrázky umiestené vo vlastnom PC (pokiaľ to nie je verejne prístupná stanica). K zobrazeniu obrázku použite buď BBCode [img] tag alebo príslušné HTML (ak je povolené).'
	),
	array(
		0 => 'Čo sú to Globálne oznámenia?',
		1 => 'Globálne oznámenia obsahujú dôležité informácie, ktoré by ste si mali prečítať čo najskôr. Globálne oznámenie sa zobrazujú nad každým fórom a taktiež vo vašom Užívateľskom panely. To, či môžete odosielať globálne oznámenie, záleží na nastavených oprávneniach, ktoré nastavujú administrátori.'
	),
	array(
		0 => 'Čo sú to Oznámenia?',
		1 => 'Oznámenia často prinášajú dôležité informácie a mali by ste ich prečítať čo najskôr. Oznámenia sa objavujú v hornej časti každej stránky fóra, kde sú uvedené. Či môžete či nemôžete pridávať oznámenia do fóra, záleží na tom, či vám to administrátor umožnil.'
	),
	array(
		0 => 'Čo sú to dôležité témy?',
		1 => 'Dôležité témy sa objavujú na fóre hneď pod Oznámením, ale iba na prvej stránke. Sú často veľmi dôležité, takže si ich prečítajte tam, kde sú. Rovnako ako pri oznámení rozhoduje administrátor, ktorí užívatelia majú právo pridávať dôležité témy.'
	),
	array(
		0 => 'Čo sú to Zamknuté témy?',
		1 => 'Témy môžu byť zamknuté moderátorom alebo administrátorom. Nemôžete odpovedať na zamknuté témy ani upravovať svoje príspevky. Každé hlasovanie je automaticky ukončené. Témy môžu byť zamknuté z rôznych dôvodov.'
	),
	array(
		0 => 'Čo sú ikony tém?',
		1 => 'Ikony tém sú obrázky, ktoré môžu byť spojené s príspevkom pre vyjadrenie jeho obsahu. Ikony môžete používať iba vtedy pokiaľ vám nastavil administrátor príslušné oprávnenie.'
	),
		// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Užívateľské úrovne a skupiny'
	),
	array(
		0 => 'Kto sú Administrátori?',
		1 => 'Administrátori sú užívatelia poverení najvyššou kontrolou nad celým fórom. Títo užívatelia môžu kontrolovať chod fóra vrátane povoľovania, zakazovania užívateľov, vytvárane užívateľských skupín alebo moderátorov, atď. Majú taktiež všetky právomoci moderátorov na celom fóre.'
	),
	array(
		0 => 'Kto sú Moderátori?',
		1 => 'Moderátori sú jednotlivci (alebo skupiny jednotlivcov), ich prácou je starať sa o chod fóra každý deň. Majú právo upravovať alebo mazať príspevky, zamykať/odomykať, presúvať, mazať a rozdeľovať témy, o ktoré sa starajú. Obecne povedané, moderátori sú na to, aby užívatelia neprispievali <i>mimo tém</i> alebo nepridávali otravný materiál.'
	),
	array(
		0 => 'Čo sú užívateľské skupiny?',
		1 => 'Užívateľské skupiny sú cestou, ktorou administrátori môžu užívateľom priradiť skupiny. Každý užívateľ môže patriť do niekoľkých skupín a každej skupine môže byť definovaný individuálny prístup. To umožňuje administrátorom ľahšie nastaviť niekoľko užívateľov ako moderátorov fóra alebo im dať prístup na súkromné fórum, atď.'
	),
	array(
		0 => 'Ako sa môžem zapojiť do užívateľskej skupiny?',
		1 => 'Pre pripojenie sa do užívateľskej skupiny stačí kliknúť na odkaz <i>Užívateľské skupiny</i> (väčšinou sa nachádza v hornej časti stránky, ale nemusí to byť pravidlom) a potom si môžete prezrieť všetky skupiny. Nie všetky skupiny majú <i>otvorený prístup</i>, niektoré sú uzavreté a niektoré majú utajené členstvo. Pokiaľ je skupina otvorená, môžete žiadať o zaradenie kliknutím na príslušné tlačítko. Moderátor užívateľskej skupiny musí vašu žiadosť schváliť a môže sa vás spýtať na dôvody, prečo chcete do skupiny vstúpiť. Prosím, nenadávajte moderátorovi, pokiaľ vašej žiadosti nevyhovie. Má svoj dôvod.'
	),
	array(
		0 => 'Ako sa stanem moderátorom užívateľskej skupiny?',
		1 => 'Užívateľské skupiny sú pôvodne vytvorené administrátorom a môžu taktiež ustanoviť moderátora. Ak máte záujem vytvoriť užívateľskú skupinu, potom ako prvého kontaktujte administrátora súkromnou správou.'
	),
	array(
		0 => 'Prečo majú niektoré skupiny inú farbu?',
		1 => 'Je možné, aby administrátor fóra pridelil členom určitej skupiny farbu, pre uľahčenie ich odlíšenia od ostatných členov.'
	),
	array(
		0 => 'Čo je "Východzia užívateľská skupina"?',
		1 => 'Pokiaľ ste členom viac skupín, vaša východzia skupina určuje, akú farbu bude mať vaše užívateľské meno. Administrátor fóra vám môže udeliť oprávnenie meniť si svoju východziu skupinu cez užívateľský panel.'
	),
	array(
		0 => 'Čo znamená odkaz "Tím"?',
		1 => 'Táto stránka vám poskytuje prehľad členov tímu fóra, vrátane administrátorov a moderátorov vrátane ďalších informácií, ako napr. ktoré fóra moderujú, hodnosť atď.'
	),
	array(
		0 => '--',
		1 => 'Súkromné správy'
	),
	array(
		0 => 'Nemôžem posielať súkromné správy!',
		1 => 'Pre tento problém existujú tri hlavné dôvody. Nie ste zaregistrovaný alebo nie ste prihlásený, alebo administrátor zakázal posielanie súkromných správ pre celé fórum alebo to administrátor zakázal priamo vám. Pokiaľ je toto ten dôvod, spýtajte sa administrátora, prečo to tomu tak je.'
	),
	array(
		0 => 'Dostávam nechcené súkromné správy!',
		1 => 'Plánujeme pridanie zoznamu ignorovaných užívateľov v systému zasielania súkromných správ. Teraz, pokiaľ dostávate takéto správy, kontaktujte svojho administrátora, ktorý má tu moc takému užívateľovi zasielanie správ zakázať.'
	),
	array(
		0 => 'Dostal/a som spamový a obťažujúci e-mail od niekoho z fóra!',
		1 => 'To je nám ľúto. Príspevkové formuláre obsahujú obranné mechanizmy, ktorými sa snažíme vystopovať takéhoto užívateľa. Mali by ste napísať administrátorovi a zaslať kópiu e-mailu, ktorý ste obdržali, čo je veľmi dôležité (kvôli hlavičke, ktorá potrebné informácie obsahuje).'
	),
	array(
		0 => '--',
		1 => 'Priatelia a nepriatelia'
	),
	array(
		0 => 'Čo je môj zoznam priateľov a nepriateľov?',
		1 => 'Tieto zoznamy môžete využiť k triedeniu ostatných užívateľov na fóre. Napríklad užívatelia vo vašom zozname priateľov budú zobrazený vo vašom užívateľskom panely so svojím stavom a budete z nich môcť rýchle vyberať napr. pri písaní súkromných správ. Pokiaľ to umožňuje vzhľad fóra, príspevky od týchto užívateľov budú zvýraznene. Pokiaľ pridáte užívateľov do zoznamu nepriateľov, jeho príspevky vám vo východzom stave nebudú zobrazované.'
	),
	array(
		0 => 'Ako môžem pridávať užívateľov do zoznamu alebo ich odoberať?',
		1 => 'Môžete pridávať užívateľov dvoma spôsobmi. V profile každého užívateľa je odkaz pre jeho pridanie do jedného z oboch zoznamov. Ďalej môžete použiť svoj užívateľský panel, kde môžete priamo zadať užívateľské mená. Sem taktiež môžete odobrať členov z vašich zoznamov.'
	),
	array(
		0 => '--',
		1 => 'Hľadanie na fóre'
	),
	array(
		0 => 'Ako môžem hľadať v jednom alebo viac fórach?',
		1 => 'Vložením hľadaného výrazu do vyhľadávacieho poľa umiestneného na titulnej stránke, na fórach alebo v témach. Pre Pokročilé vyhľadávanie kliknite na odkaz "Hľadať", ktorý je dostupný vo všetkých stránkach fóra. Spôsob, akým sa pristupuje k vyhľadávaniu sa môže líšiť podľa použitého vzhľadu.'
	),
	array(
		0 => 'Prečo moja požiadavka vracia nulový počet výsledkov?',
		1 => 'Vami hľadaný výraz bol pravdepodobne príliš obecný a obsahoval príliš mnoho častých slov, ktoré nie sú indexované. Spresnite vašu požiadavku a využite možnosti pokročilého vyhľadávania.'
	),
	array(
		0 => 'Prečo mi vyhľadávanie vracia prázdnu bielu stránku?',
		1 => 'Vašou požiadavkou sa našlo príliš mnoho výsledkov, ktoré server nebol schopný spracovať. Spresnite vašu požiadavku a využite možnosť pokročilého vyhľadávania.'
	),
	array(
		0 => 'Ako môžem vyhľadávať členov fóra?',
		1 => 'Prejdite na stránku "Užívatelia" a kliknite na odkaz "Vyhľadať užívateľa", kde môžete pomocou rôznych parametrov užívateľa vyhľadať.'
	),
	array(
		0 => 'Ako môžem nájsť svoje vlastné príspevky a témy?',
		1 => 'K vaším príspevkom sa môžete dostať kliknutím na odkaz "Hľadať užívateľove príspevky" v Užívateľskom panely, alebo cez váš profil. Pre vyhľadávanie tém, ktoré ste odoslali, využite stránku pokročilého vyhľadávania, kde zadáte odpovedajúce kritéria.'
	),
	array(
		0 => '--',
		1 => 'Sledovanie tém a záložiek'
	),
	array(
		0 => 'Aký je rozdiel medzi sledovaním a záložkami?',
		1 => 'Záložkovanie v phpBB3 je veľmi podobné záložkám, ktoré poznáte z vášho prehliadača. Nie ste upozornený, keď príde nový príspevok, ale môžete sa kedykoľvek do témy jednoducho vrátiť. Sledovanie vám ale naopak uľahčí prechádzanie tím, že vás kontaktuje vami vybraným spôsobom.'
	),
	array(
		0 => 'Ako môžem sledovať zvolené témy alebo fóra?',
		1 => 'Pre sledovanie jednotlivého fóra, kliknite po vstupu do neho na odkaz "Sledovať toto fórum". Pre sledovanie témy kliknite na odkaz v ňom alebo pri odosielaní príspevku zvoľte možnosť sledovať túto tému.'
	),
	array(
		0 => 'Ako môžem zrušiť sledovanie tém?',
		1 => 'Pre zrušenie sledovania tém, prejdite v Užívateľskom panely do sekcie Sledovanie.'
	),
	array(
		0 => '--',
		1 => 'Prílohy'
	),
	array(
		0 => 'Aké prílohy sú povolené na tomto fóre?',
		1 => 'Každý administrátor fóra môže povoliť alebo zakázať jednotlivé druhy príloh. Pokiaľ si nie ste istý, ktoré súbory môžu byť nahrávané, kontaktuje administrátora fóra.'
	),
	array(
		0 => 'Ako si môžem zobraziť všetky svoje prílohy?',
		1 => 'Pre zobrazenie kompletného zoznamu vami nahraných príloh, prejdite na Užívateľský panel a nasledujte odkazy do časti s prílohami.'
	),
	array(	
	0 => '--',
	1 => 'Downloady'
	),
	array(
	0 => 'Kde môžem nájsť Downloady?',
	1 => 'Linky k Downloadom sú na navigačnej stránke a pod záhlavim je Priamy Link: [<a href="' . append_sid("{$phpbb_root_path}downloads.$phpEx") . '">Downloady</a>]'
	),
	array(
	0 => 'Kde je problém ' . $user->img('dl_blue') . '?',
	1 => 'Ak celkový limit stanovený administrátorom na mesiac, pre každý download, alebo zobrazenú kategóriu je vyčerpaný, tak ďalšie downloady sú zablokované, pokiaľ administrátor nerozhodne inak.' 
	),
	array(
	0 => 'Kde je problém ' . $user->img('dl_red') . '?',
	1 => 'Ak nie je možné žiadne dalšie načítanie dát. Môže to byť zapríčinené tým, že:<br /> - Downloady zablokoval Administrátor.<br /> - Užívateľ nie je prihlásený a načítanie dát je umožnené len registrovaným užívateľom.<br /> - Užívateľ nemá dostatočný limit pre download súboru.<br /> - Administrátor zablokoval limit kvôli aktualizácii témy.<br /> - Limit pre tento súbor je kompletne vyčerpaný.'
	),
	array(
	0 => 'Kde je problém ' . $user->img('dl_grey') . '?',
	1 => 'Externý zdroj. Download  bude spustený z externého servera. ' . $user->img('dl_green') . ' Uživateľov limit a ani celkový limit pre downloady, nebude znížený.' 
	),
	array(
	0 => 'Kde je problém ' . $user->img('dl_white') . '?',
	1 => 'Ako ' . $user->img('Dl_green') . ' limit uživateľa nebude znížený. Len prihlásený užívatelia môžu sťahovať, "volné" downloady. Aj ak celkový limit je vyčerpaný.' 
	),
	array(
	0 => 'Kde je problém ' . $user->img('dl_yellow') . '?',
	1 => 'Download s obmedzeniami. Takýto download je len pre registrovaných užívateľov. Užívateľ musí byť prihlásený . Veľkosť súboru je základom zadaní z limitom a tiež je základnov myšlienkov celkovej prevádzky Downloadov.'
	),
	array(
	0 => 'Kde je problém ' . $user->img('dl_green') . '?',
	1 => 'Volný Download. Takýto download nebude obmedzovaný. Takýto súbor si môžu stiahnuť aj neprihlásený hostia. Váš limit ako aj celkový limit pre downloady sa nezníži to znamená obmedzovací limit je vypnutý.'
	),
	array(
	0 => 'Prečo nemôžem stiahnuť nejaký súbor?',
	1 => 'To môže mať mnoho dôvodov. Treba si prečítať ostatné zadania či problém nie je už popísaný v iných ' . $user->img('dl_blue') . 'zadaniach ' . $user->img('dl_red')
	),
	array(
	0 => 'Ako a keď získam nový limit pre môj účet?',
	1 => 'Po prvom prihlásení užívateľ dostane časovú značku. Každý prvý deň v mesiaci sa limit obnoví, užívateľ ak vstúpy do sekcie downloadov tak limit bude mať obnovený. Požiadajte vášho administrítora, ak potrebujete vyšší limit po vyčerpaní mesačného limitu.'
	),
	array(
	0 => 'Chcem načítať ešte jeden súbor, ale nemám už žiadny limit, čo s tým môžem urobiť? ',
	1 => 'V tomto prípade treba požiadať administrátora a ten rozhodne či zvýši limit uživateľovy pred spustením automatického nastavenia limitu pre budúci mesiac.' 
	),
	array(
	0 => 'Ako môžem ohodnotiť Downloady?',
	1 => 'Za každým downloadom v kategórii alebo zobrazenom detaile nájdete časť pre ohodnotenie downloadu.<br /> Kliknite na "Ohodnotiť", kde registrovaný užívateľ môže zadať ohodnotenie downloadu od 1 bodu (veľmi zlý) do 10 bodov (výborný). klasifikovať download sa môže len raz.'
	),
	array(
		0 => '--',
		1 => 'Záležitosti okolo phpBB 3'
	),
	array(
		0 => 'Kto napísal tento program?',
		1 => 'Tento software (v jeho nemodifikované forme) je vytvorený, zverejnený a chránený autorskými právami <a href="http://www.phpbb.com/" rel="external">phpBB Group</a>. Je dostupný pod the GNU General Public Licence a môže byť voľne šíriteľný. Pre viac informácií kliknite <a href="http://www.phpbb.com/" rel="external">sem</a>.'
	),
	array(
		0 => 'Prečo nie je k dispozícii funkcia X?',
		1 => 'Tento software bol napísaný a licencovaný cez phpBB Group. Máte dojem, že je potrebné pridať nejakú funkciu, navštívte stránku <a href="http://www.phpbb.com/" rel="external">http://www.phpbb.com</a> a overte si, čo phpBB Group povie. Prosím, nevkladajte tieto požiadavky na fórum phpbb.com, phpBB Group používa sourceforge k skúšaniu nových možností. Prosím, prečítajte si fóra a overte si, či už sa niečo také neskúšalo a nasledujte príslušné inštrukcie.'
	),
	array(
		0 => 'Koho mám kontaktovať ohľadom obťažujúcich e-mailov alebo právnych záležitostí fóra?',
		1 => 'Mali by ste kontaktovať administrátora tohto fóra. Ak ho nemôžete nájsť, skúste najprv kontaktovať moderátora fóra a popýtajte si kontakt. Pokiaľ sa nič neudeje, kontaktujte majiteľa domény (skúste vyhľadať na <a href="http://www.google.com/search?q=whois">"whois"</a>) alebo, pokiaľ táto služba beží na freeserveri (napr. yahoo, IC, webzdarma, atď.), management alebo oddelenie sťažností tohto poskytovateľa. Berte na vedomie, že phpBB Group nemá vôbec žiadnu moc a nemôže nijak ovplyvniť to jak, kto a kde spravuje fórum. Je zbytočné kontaktovať phpBB Group v akejkoľvek právnej záležitosti nepriamo spojené s phpbb.com alebo so samotným softwarom phpBB. Pokiaľ zašlete e-mail phpBB Group o použití softwaru treťou stranou, nečakajte žiadnu odpoveď.'
	)
);

?>