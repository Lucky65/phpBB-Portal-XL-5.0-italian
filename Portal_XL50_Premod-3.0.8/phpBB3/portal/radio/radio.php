<?php

///////////////////////////////////////////////////
/// Original Script By: Pelle van der Scheer    ///
/// Original Version: 1.4.0                     ///
/// Original PHPBB Version: 2.x.x               ///
///                                             ///
/// Modified Author: Insecure                   ///
/// Modified Author: Stoker                     ///
/// Modified Version: 2.0.5                     ///
/// Modified PHPBB Version: 3.x.x               ///
/// Website: www.phpbb3bbcodes.com              ///
///////////////////////////////////////////////////

/**
*
* @package phpBB3
* @version $Id: index.php 8987 2008-10-09 14:17:02Z acydburn $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

include($phpbb_root_path . 'common.' . $phpEx);
include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/radio');

$station = request_var('station', '', true);
$uiType = request_var('uiType', '', true);

##Disable Error Reporting
##error_reporting(0);

################
## XML PARSER ##
################

$xml_file  = "radio.xml";

$xml_radio_num        = "*LIVESTREAMRADIO*STATION*NUM";
$xml_radio_name       = "*LIVESTREAMRADIO*STATION*NAME";
$xml_radio_url        = "*LIVESTREAMRADIO*STATION*URL";
$xml_radio_broadband  = "*LIVESTREAMRADIO*STATION*BROADBAND";
$xml_radio_type       = "*LIVESTREAMRADIO*STATION*TYPE";
$xml_radio_genre      = "*LIVESTREAMRADIO*STATION*GENRE";

$radio_array = array();

$counter = 1;

class xml_radio{
    var $num, $name, $url, $broadband, $type, $genre;
}

function startTag($parser, $data){
    global $current_tag;
    $current_tag .= "*$data";
}

function endTag($parser, $data){
    global $current_tag;
    $tag_key = strrpos($current_tag, '*');
    $current_tag = substr($current_tag, 0, $tag_key);
}

function contents($parser, $data){
    global $current_tag, $xml_radio_num, $xml_radio_name, $xml_radio_url, $xml_radio_broadband, $xml_radio_type, $xml_radio_genre, $counter, $radio_array;
    switch($current_tag){
        case $xml_radio_num:
            $radio_array[$counter] = new xml_radio();
            $radio_array[$counter]->num = $data;
            break;
        case $xml_radio_name:
            $radio_array[$counter]->name = $data;
            break;
        case $xml_radio_url:
            $radio_array[$counter]->url = $data;
            break;
        case $xml_radio_broadband:
            $radio_array[$counter]->broadband = $data;
            break;
        case $xml_radio_type:
            $radio_array[$counter]->type = $data;
            break;
        case $xml_radio_genre:
            $radio_array[$counter]->genre = $data;
            $counter++;
            break;
    }
}

$xml_parser = xml_parser_create();
xml_set_element_handler($xml_parser, "startTag", "endTag");
xml_set_character_data_handler($xml_parser, "contents");
if (!($fp = fopen($xml_file, "r"))) {
    die("could not open XML input");
}

while ($data = fread($fp, 4096)) {
    if (!xml_parse($xml_parser, $data, feof($fp))) {
        die(sprintf("XML error: %s at line %d",
                    xml_error_string(xml_get_error_code($xml_parser)),
                    xml_get_current_line_number($xml_parser)));
    }
}
xml_parser_free($xml_parser);

####################
## end XML Parser ##
####################

 $template->assign_vars(array(
	  /* Settings */
	  "WIDTH" => "230",
	  "HEIGHT" => "270",
	  "UIType" => $uiType,
	  "RADIO" => $station,
	  
	  "SHOW_CONTROLS" => ($uiType == 1) ? '1' : '0',
	  "SHOW_STATUSBAR" => ($uiType == 1) ? '1' : '0',
	  "SHOW_DISPLAY" => ($uiType == 1) ? '1' : '0',
	  
	  /* Now Playing */
	  "NP_NAME" => ($station == 0) ? '1' : $radio_array[$station]->name,
	  "NP_URL" =>  ($station == 0) ? '1' : $radio_array[$station]->url,
	  "NP_BROADBAND" => ($station == 0) ? '1' : $radio_array[$station]->broadband,
	  "NP_TYPE" => ($station == 0) ? '1' : $radio_array[$station]->type,
	  "NP_GENRE" => ($station == 0) ? '1' : $radio_array[$station]->genre
 ));


 for($x=1;$x<$counter;$x++){ 
   
  $template->assign_block_vars('xmllist',array(
	  "NAME" =>  $radio_array[$x]->name,
	  "NUM"  => $radio_array[$x]->num,
	  "URL" => $radio_array[$x]->url,
	  "BROADBAND" => $radio_array[$x]->broadband,
	  "TYPE" => $radio_array[$x]->type,
	  "GENRE" => $radio_array[$x]->genre
  ));
  
 } 
 
// Output page
page_header($user->lang['TITLE']);

$template->set_filenames(array(
	'body' => 'portal/portal_radio.html')
);

page_footer();

?>
