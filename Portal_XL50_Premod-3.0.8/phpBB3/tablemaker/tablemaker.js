// Basis dieses Codes ist die Version eines freien Java-Scripts von W. Zenk
// Der Code wurde dabei von Html in BBCode portiert, angepasst und xhtml valide gemacht
// Dieses Script darf frei genutzt werden, solange dieser Vermerk nicht entfernt wird!
function phpbbtablemaker(){
var head1='[table';
var tabrow1='';
var datacell1='[td';
var note='';
var s=document.getElementById("form").spalten.value;
var r=document.getElementById("form").reihen.value;
var zellenanzahl=0;
if(document.getElementById("form").textausrichtung_horizontal.checked){
if(document.getElementById("form").l[0].checked){datacell1+=' align=left'}
if(document.getElementById("form").l[1].checked){datacell1+=' align=center'}
if(document.getElementById("form").l[2].checked){datacell1+=' align=right'}}

if(document.getElementById("form").textausrichtung_vertikal.checked){
if(document.getElementById("form").m[0].checked){datacell1+=' valign=top'}
if(document.getElementById("form").m[1].checked){datacell1+=' valign=middle'}
if(document.getElementById("form").m[2].checked){datacell1+=' valign=bottom'}}

if(document.getElementById("form").zellen_rahmenfarbe.checked){datacell1+=' bordercolor='+document.getElementById("form").Farbe4.value+''}
if(document.getElementById("form").zellen_hintergrundfarbe.checked){datacell1+=' bgcolor='+document.getElementById("form").Farbe3.value+''}

datacell1+=']';
if(document.getElementById("form").rahmen.checked){head1+=' border='+document.getElementById("form").border_nr.value+''}
if(document.getElementById("form").padding_nr.value != ""){head1+=' cellpadding='+document.getElementById("form").padding_nr.value+''}
if(document.getElementById("form").spacing_nr.value != ""){head1+=' cellspacing='+document.getElementById("form").spacing_nr.value+''}
if(document.getElementById("form").tabellenbreite.checked){head1+=' width='+document.getElementById("form").breite.value+''}
if(document.getElementById("form").tabellenhoehe.checked){head1+=' height='+document.getElementById("form").hoehe.value+'px'}

head1+=']';

for(i=0;i<r;i++)
{tabrow1+= ' [tr]';
for (x=0;x<s;x++){tabrow1+= '  '+datacell1;zellenanzahl++
if(document.getElementById("form").zelleninhalt.checked){tabrow1+=document.getElementById("form").zellencontent.value}
if(document.getElementById("form").zellen_nr.checked){tabrow1+=zellenanzahl}
else{tabrow1+='&nbsp;'}
tabrow1+='[/td]'}
tabrow1+=' [/tr]'}

var Tabelle=head1 + tabrow1 + '[/table]';

document.getElementById("form").ausgabe.value=Tabelle.replace(/&nbsp;/gi,"");
document.getElementById("form").zellenanzeige.value=zellenanzahl;}

function farbe_zeigen(A,B){
if (B.length == 6) {
document.getElementById(A).style.backgroundColor=B;}}

var explorer ="";

function Markieren(){
document.getElementById("form").ausgabe.select();}


function tablecopy(){var copy = document.forms["form"].elements["ausgabe"].value;
opener.document.forms['postform'].message.value += copy;}


