<?php
/**
*
* help_bbcode [Slovak]
*
* @package language
* @version $Id: help_bbcode.php,v 1.27 2010/01/05 23:00:00 phpbb3.sk Exp $
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

$help = array(
	array(
		0 => '--',
		1 => 'Úvod'
	),
	array(
		0 => 'Čo je BBCode (značky)?',
		1 => 'Značky sú zvláštne príkazy vkladané do príspevku. Používanie značiek vo Vašich príspevkoch povoľuje administrátor. Môžete si dodatočně zakázať používanie značiek v jednotlivých príspevkoch vo formulári k zaslaniu príspevku. Značky sú veľmi podobné štýlu HTML, príkazy sú zapísané v zložených zátvorkách [] a uzavierajú vždy nejaký text, ktorý sa následne chová podľa týchto príkazov. Značky Vám umožnia rýchle formátovanie písaného textu. Sami sa teda môžete rozhodnúť, či budete chcieť používať tieto značky, ktoré sú zahrnuté vo formulári pre odoslanie príspevku či budete používať HTML (pokiaľ je HTML na tomto fóre povolené).'
	),
	array(
		0 => '--',
		1 => 'Formátovanie textu'
	),
	array(
		0 => 'Ako vytvoriť text písaný tučne, kurzívou či podčiarknutý?',
		1 => 'Značky obsahujú príkazy pre rýchlu zmenu štýlu Vášho textu. Môžete sa pozrieť ako ľahko dosiahnuť požadovaný výsledok. Pre vytvorenie tučne písaného textu, obklopíte text medzi <b>[b][/b]</b>.<br /><br />príklad: <b>[b]</b>Ahoj<b>[/b]</b><br />Výsledkom je <b>Ahoj</b><br /><br />Pre podčiarknutie textu, obklopíte text medzi <b>[u][/u]</b>.<br /><br />príklad: <b>[u]</b>Dobrý deň<b>[/u]</b><br />Výsledkom je: <u>Dobrý deň</u><br /><br />Pre text písaný kurzívou, obklopíte text medzi <b>[i][/i]</b>.<br /><br />príklad: Toto je <b>[i]</b>ukážka<b>[/i]</b><br />Výsledkom je: Toto je <i>ukážka</i>'
	),
	array(
		0 => 'Ako zmeniť farbu a veľkosť písma?',
		1 => 'Pre zmenu farby alebo veľkosti textu je určených niekoľko príkazov. Dajte si pozor na to, ako bude výstup zobrazený v závislosti na Vašom prehliadači a systéme. Pre zmenu farby textu, obklopíte požadovaný text medzi <b>[color=][/color]</b>. Môžete použiť buď názvy farieb (napr. red, blue, yellow, atď.) alebo odpovedajúce hexadecimálne kódy farby, napr. #FFFFFF, #000000. Na príklade si ukážeme ako vytvoriť červený text:<br /><br /><b>[color=red]</b>Ahoj!<b>[/color]</b> alebo <b>[color=#FF0000]</b>Ahoj!<b>[/color]</b><br />Výsledkom bude: <span style="color:red">Ahoj!</span><br /><br />Zmenu veľkosti textu vykonáme podobne použitím <b>[size=][/size]</b>. Tento príkaz má předdefinované číselné hodnoty, ktoré majú priradenú odpovedajúcu veľkosť písma v bodoch, začínajúc od 1 (veľmi malé písmo, nejmenej viditeľné) až po 29 (veľmi veľké). Pre ukážku:<br /><br /><b>[size=9]</b>MALÉ<b>[/size]</b><br />Výsledkom je <span style="font-size:9px">MALÉ</span><br /><br />zatiaľ čo<br /><br /><b>[size=24]</b>VEĽKÉ<b>[/size]</b><br />zobrazí <span style="font-size:24px">VEĽKÉ</span>'
	),
	array(
		0 => 'Je možné spájať formátovacie značky?',
		1 => 'Áno, toto je možné, na nasledujúcom príklade si ukážeme ako správne tieto značky zapísať. Je veľmi dôležité dodržať aj ich postupnosť.<br /><br />Napríklad: <b>[size=18][color=red][b]</b>Pozri sa<b>[/b][/color][/size]</b><br /><br />Výsledkom je: <span style="color:red;font-size:18px"><b>Pozri sa</b></span><br /><br />Pokiaľ nedodržíte postupnosť ukončení značiek v poradí v akom boli vkladané, bude text zobrazený chybne! Vždy je potrebné uzavierať značky v postupnosti v akej boli zadané. Pozrite sa na nasledujúcu ukážku, kde sú značky nekorektne uzavreté:<br /><br /><b>[b][u]</b>Toto je zle<b>[/b][/u]</b>'
	),
	array(
		0 => '--',
		1 => 'Citácia a pevná šírka textu pri odoslaní'
	),
	array(
		0 => 'Ako vytvoriť citáciu?',
		1 => 'Sú dva spôsoby zadania citovaného textu, s uvedením autora a bez neho. Keď je to vhodné môžete použiť citát k príspevku, ktorý pridá poznámku o autorovi a text do zvláštneho boxu v príspevku. Text citácie uzavrite medzi <b>[quote=""][/quote]</b>. Tento zpôsob pridá k citácií poznámku koho citujete. V nasledujúcom príklade si ukážeme ako zadáme text, ktorý vyslovil Karol Novák:<br /><br /><b>[quote="Karol Novák"]</b>Toto je text, ktorý vyslovil tento pán.<b>[/quote]</b><br /><br /> Výsledkom bude automatické pridanie textu <i>Karol Novák napísal:</i> a text citácie. Pokiaľ chcete zadať text ako svoj vlastný citát, prípadne nikoho neurčovať, zadáte len zátvorky "". Táto voľba nie je povinná. Druhým spôsobom je citovať iba text. Požadovaný text, ktorý chcete citovať uzavrite medzi <b>[quote][/quote]</b>. Keď si zobrazíte výsledok takejto správy, bude tu len <i>napísal:</i> a text citátu.'
	),
	array(
		0 => 'Výstup kódu alebo pevná šírka dát.',
		1 => 'Ak chcete vložiť kus kódu alebo čokoľvek čo vyžaduje pevnú šírku (font typu Courier), obklopte text medzi <b>[code][/code]</b>.<br /><br />napríklad: <b>[code]</b>echo "Toto je kód";<b>[/code]</b>'
	),
	array(
		0 => '--',
		1 => 'Generovanie zoznamu'
	),
	array(
		0 => 'Vytváranie jednoduchého zoznamu.',
		1 => 'Značky obsahujú aj príkazy pre vytváranie zoznamov. Podporované sú dva druhy zoznamov, jednoduchý a štrukturovaný. Jednoduchý zoznam zobrazí jednotlivé položky zoznamu postupne pod sebou oddelené odrážkou. Pre vytvorenie zoznamu použite <b>[list][/list]</b> a definujte jednotlivé položky pomocou <b>[*]</b>. Pozrite sa na nasledujúcu ukážku jednoduchého zoznamu:<br /><br /><b>[list]</b><br /><b>[*]</b>červená<br /><b>[*]</b>modrá<br /><b>[*]</b>zelená<br /><b>[/list]</b>'
	),
	array(
		0 => 'Vytváranie štrukturovaného zoznamu.',
		1 => 'Druhým spôsobom je vytváranie štrukturovaných zoznamov. Od predchádzajúceho typu sa líši znakom pred textom jednotlivých položiek, namiesto bodky je tu použitý niektorý z dvoch spôsobov vzostupného označenia položiek zoznamu. Pre vytvorenie číslovaného zoznamu použite <b>[list=1][/list]</b> a pre abecedný zoznam <b>[list=a][/list]</b>. Jednotlivé položky zoznamu definujete pomocou <b>[*]</b>. Pozrite sa na nasledujúcu ukážku:<br /><br /><b>[list=1]</b><br /><b>[*]</b>červená<br /><b>[*]</b>modrá<br /><b>[*]</b>zelená<br /><b>[/list]</b><br /><br />Pre vytvorenie abecedného zoznamu použite:<br /><br /><b>[list=a]</b><br /><b>[*]</b>prvá možná odpoveď<br /><b>[*]</b>druhá možná odpoveď<br /><b>[*]</b>tretia možná odpoveď<br /><b>[/list]</b>'
	),
		// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Vytvorenie odkazu'
	),
	array(
		0 => 'Odkaz na iné webové stránky.',
		1 => 'phpBB značky podporujú vytvorenie URL odkazov odkazujúcich sa na iné internetové stránky. Prvým spôsobom je použiť <b>[url=][/url]</b> značky, za znak = potom doplníte URL adresu, na ktorú chcete odkazovať. Text medzi obomi značkami bude zvýraznený a zároveň bude slúžiť ako odkaz na uvedenú URL adresu. Pozrite sa na nasledujúcí príklad odkazujúci na server domain.tld:<br /><br /><b>[url=http://www.domain.tld/]</b>Stránka domain.tld<b>[/url]</b><br /><br />Týmto sa vygeneruje odkaz <a href="http://www.domain.tld/">Stránka domain.tld</a>. Pokiaľ kliknete na tento vytvorený odkaz, otvorí sa Vám v novom okne prehliadača odkaz na ktorý smerujete.<br /><br />Ak chcete zobraziť URL priamo ako odkaz použite nasledujúci postup:<br /><br /><b>[url]</b>http://www.domain.tld/<b>[/url]</b><br /><br />Týmto sa vygeneruje odkaz <a href="http://www.domain.tld/">http://www.domain.tld/</a>.<br /><br />V prípade zadania syntakticky správneho URL aj bez začiatočného http:// do textu príspevku automaticky odkaz na zadanú URL adresu. Pre ukážku si môžete skúsiť napísať do príspevku www.domain.tld a uvidíte, že sa Vám text vo výsledku zobrazí automaticky ako odkaz <a href="http://www.domain.tld/">www.domain.tld</a>.<br /><br />Obdobným zpôsobom sa dajú vytvárať aj odkazy na e-mailové adresy, zadajte požadovanú e-mailovú adresu podľa príkladu:<br /><br /><b>[email]</b>support@domain.tld<b>[/email]</b><br /><br />Výsledok potom bude <a href="mailto:support@domain.tld">support@domain.tld</a> alebo môžete zadať v texte príspevku support@domain.tld a adresa sa opäť automaticky premení na odkaz.<br /></br />URL odkaz môžete zadať medzi ktorékoľvek ďalšie značky: Ak uzavriete URL medzi <b>[img][/img]</b> (viď nasledujúca kapitola) môže byť odkazom aj obrázok. Len potom nezabudnite na správnu postupnosť uzatvárania značiek.<br /><br />URL adresa nesmie obsahovať medzeru, preto pokiaľ máte takú adresu, musíte všetky medzery nahradiť znakmi \'%20\' (bez úvodzoviek).'
	),
	array(
		0 => '--',
		1 => 'Zobrazenie obrázkov v príspevkoch'
	),
	array(
		0 => 'Pridanie obrázku do príspevku.',
		1 => 'phpBB značky ďalej umožňujú vkladanie obrázkov do textu príspevku či správy. Toto je veľmi užitočná vlastnosť, vďaka ktorej nemusíte odkazovať na súbory obrázkov o ktorých napríklad píšete, ale všetci užívatelia ich hneď vidia vo Vašom príspevku. Ako bolo uvedené vyššie, môžete využiť obrázok k vytvoreniu URL odkazu na Váš server alebo napríklad pre zväčšeninu malého obrázku tu v príspevku. Obrázok sa musí však vždy nachádzať na internete a byť tak dostupný pre všetkých užívateľov, nie je možné sa teda odkazovať na súbory, ktoré máte napríklad na lokálnom disku Vášho počítača, pretože k nim by užívatelia internetu nemali prístup. Pre zobrazenie obrázku musíte uzavřieť URL obrázku medzi <b>[img][/img]</b>.<br /><br />príklad: <b>[img]</b>http://www.domain.tld/images/logo.gif<b>[/img]</b><br /><br />Ak zadáte URL adresu obrázku medzi <b>[url][/url]</b>, môže byť odkazom obrázok.<br /><br />príklad: <b>[url=http://www.domain.tld/][img]</b>http://www.domain.tld/images/logo.gif<b>[/img][/url]</b><br /><br />Výsledkom bude:<br /><a href="http://www.userbars.sk/"><img src="http://www.userbars.sk/download/userbars.png" border="0" alt="" /></a>'
	),
	array(
		0 => 'Pridanie prílohy do príspevku.',
		1 => 'Prílohy môžu byť teraz pripojené v hociktorej časti príspevku použitím <strong>[attachment=][/attachment]</strong> BBCodu, ak bola funckia príloh zapnutá administrátorom fóra &amp; ak máte právo vytvárať prílohy. Pri odosielaní príspevku máte možnosť priložiť prílohu v rade.'
	),
	array(
		0 => '--',
		1 => 'Showing videos in posts'
	),
	array(
		0 => 'Adding an video to a post',
		1 => 'There are BBCodes to videos from different videoportals in a post insert. Two very important things to remember when using this tag are: many users do not appreciate lots of videos being shown in posts and secondly the video you display must already be available on the internet (it cannot exist only on your computer for example, unless you run a webserver!). To display an video you must surround the URL pointing to the video with <strong>[youtube][/youtube]</strong> tags. For youtube example:<br /><br /><strong>[youtube]</strong>http://de.youtube.com/watch?v=ADbeCHQLUpk<strong>[/youtube]</strong><br /><br />Just works with all other video BBCodes, by the administrator activated are.'
	),
	array(
		0 => '--',
		1 => 'Ďalšie záležitosti'
	),
	array(
		0 => 'Môžem si pridať svoje vlastné tágy?',
		1 => 'Ak ste administrátor a máte potrebné oprávnenia, môžete pridať ďalšie BBcode značky cez vlastné bbcode značky v administrácii.'
	)
);

?>