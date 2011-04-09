<?php
/** 
*
* search_synonyms [English]
*
* @package language
* @version $Id: search_synonyms.php,v 3RC7 2007/10/15 00:00:00 phpbb3.sk Exp $
* @copyright (c) 2007 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

$synonyms = array(
	'abcense'			=> 'absence',
	'abridgement'		=> 'abridgment',
	'accomodate'		=> 'accommodate',
	'acknowledgment'	=> 'acknowledgement',
	'admin'	=> 'administr�tor',
	'airplane'			=> 'aeroplane',
	'allright'			=> 'alright ',
	'andy'				=> 'andrew',
	'anemia'			=> 'anaemia',
	'anemic'			=> 'anaemic',
	'anesthesia'		=> 'anaesthesia',
	'appologize'		=> 'appologise',
	'archean'			=> 'archaean',
	'archeology'		=> 'archaeology',
	'archeozoic'		=> 'archaeozoic',
	'armor'				=> 'armour',
	'artic'				=> 'arctic',
	'attachment'		=> 'attachement',
	'attendence'		=> 'attendance',

	'barbecue'	=> 'barbeque',
	'behavior'	=> 'behaviour',
	'biassed'	=> 'biased',
	'biol'		=> 'biology',
	'buletin'	=> 'bulletin',

	'calender'	=> 'calendar',
	'canceled'	=> 'cancelled',
	'car'		=> 'automobile',
	'catalog'	=> 'catalogue',
	'cenozoic'	=> 'caenozoic',
	'center'	=> 'centre',
	'check'		=> 'cheque',
	'clich�'	=> 'kli��',
	'color'		=> 'colour',
	'comission'	=> 'commission',
	'comittee'	=> 'committee',
	'commitee'	=> 'committee',
	'conceed'	=> 'concede',
	'creating'	=> 'createing',
	'curiculum'	=> 'curriculum',

	'defense'		=> 'defence',
	'develope'		=> 'develop',
	'discription'	=> 'description',
	'diskuzia'		=> 'diskusia',
	'dopis'		=> 'list',
	'doporucujem'		=> 'odpor�cam',
	'dulness'		=> 'dullness',

	'encyclopedia'	=> 'encyclopaedia',
	'enroll'		=> 'enrol',
	'esthetic'		=> 'aesthetic',
	'etiology'		=> 'aetiology',
	'exhorbitant'	=> 'exorbitant',
	'exhuberant'	=> 'exuberant',
	'existance'		=> 'existence',

	'favorite'		=> 'favourite',
	'fetus'			=> 'foetus',
	'ficticious'	=> 'fictitious',
	'flavor'		=> 'flavour',
	'flourescent'	=> 'fluorescent',
	'foriegn'		=> 'foreign',
	'fourty'		=> 'forty',

	'gage'			=> 'gauge',
	'geneology'		=> 'genealogy',
	'grammer'		=> 'grammar',
	'gray'			=> 'grey',
	'guerilla'		=> 'guerrilla',
	'gynecology'	=> 'gynaecology',

	'harbor'		=> 'harbour',
	'heighth'		=> 'height',
	'hejno'		=> 'roj',
	'hemaglobin'	=> 'haemaglobin',
	'hematin'		=> 'haematin',
	'hematite'		=> 'haematite',
	'hematology'	=> 'haematology',
	'honor'			=> 'honour',
	'horko'		=> 'teplo',

	'innoculate'	=> 'inoculate',
	'installment'	=> 'instalment',
	'irrelevent'	=> 'irrelevant',
	'irrevelant'	=> 'irrelevant',

	'jeweler'	=> 'jeweller',
	'judgement'	=> 'judgement',

  'kotn�k'		=> 'clenok',

	'labeled'	=> 'labelled',
	'labor'		=> 'labour',
	'laborer'	=> 'labourer',
	'laborers'	=> 'labourers',
	'laboring'	=> 'labouring',
	'ladvina'	=> 'oblicka',
	'licence'	=> 'license',
	'liesure'	=> 'leisure',
	'liquify'	=> 'liquefy',
	'ladvina'	=> 'oblicka',

	'maintainance'	=> 'maintenance',
	'maintenence'	=> 'maintenance',
	'medieval'		=> 'mediaeval',
	'meter'			=> 'metre',
	'milage'		=> 'mileage',
	'millipede'		=> 'millepede',
	'miscelaneous'	=> 'miscellaneous',
	'morgage'		=> 'mortgage',

	'nedosa�iteln�'		=> 'nedosiahnuteln�',
  'noticable'	=> 'noticeable',

	'occurence'	=> 'occurrence',
	'offense'	=> 'offence',
	'ommision'	=> 'omission',
	'ommission'	=> 'omission',
	'optimize'	=> 'optimise',
	'organize'	=> 'organise',

	'pajamas'			=> 'pyjamas',
	'paleography'		=> 'palaeography',
	'paleolithic'		=> 'palaeolithic',
	'paleontological'	=> 'palaeontological',
	'paleontologist'	=> 'palaeontologist',
	'paleontology'		=> 'palaeontology',
	'paleozoic'			=> 'palaeozoic',
	'pamplet'			=> 'pamphlet',
	'paralell'			=> 'parallel',
	'parl'				=> 'parliament',
	'parlt'				=> 'parliament',
	'pediatric'			=> 'paediatric',
	'pediatrician'		=> 'paediatrician',
	'pediatrics'		=> 'paediatrics',
	'pedodontia'		=> 'paedodontia',
	'pedodontics'		=> 'paedodontics',
	'personel'			=> 'personnel',
	'practise'			=> 'practice',
	'pr�dlo'		=> 'bielizen',
	'pr�li�'	=> 'pr�li�',
	'program'			=> 'programme',
	'psych'				=> 'psychology',

	'questionaire'	=> 'questionnaire',

	'rarify'		=> 'rarefy',
	'reccomend'		=> 'recommend',
	'recieve'		=> 'receive',
	'resistence'	=> 'resistance',
	'restaraunt'	=> 'restaurant',
	'rohl�k'		=> 'ro�ok',

	'savior'			=> 'saviour',
	'sav�'		=> 'pijav�',
  'sep'				=> 'september',
	'seperate'			=> 'separate',
	'sept'				=> 'september',
	'sieze'				=> 'seize',
	'sluch�tko'		=> 'sl�chadlo',
	'sl�chatko'		=> 'sl�chadlo',
	'sn�mok'		=> 'sn�mka',
	'summarize'			=> 'summarise',
	'summerize'			=> 'summarise',
	'superceed'			=> 'supercede',
	'superintendant'	=> 'superintendent',
	'supersede'			=> 'supercede',
	'suprise'			=> 'surprise',
	'surprize'			=> 'surprise',
	'synchronise'		=> 'synchronize',
	
	'�eptat'		=> '�epkat',
	'�eptalo'		=> '�epkalo',

	'temperary'		=> 'temporary',
	'theater'		=> 'theatre',
	'threshhold'	=> 'threshold',
	'transfered'	=> 'transferred',
	'truely'		=> 'truly',
	'truley'		=> 'truly',

	'useable'	=> 'usable',

	'valor'	=> 'valour',
	'varianta'		=> 'variant',
	'vigor'	=> 'vigour',
	'vol'	=> 'volume',
	'v�daje'		=> 'v�davky',
	'vzpam�tat'		=> 'spam�tat',

	'whack'		=> 'wack',
	'withold'	=> 'withhold',

	'yeild'	=> 'yield',
);
?>
