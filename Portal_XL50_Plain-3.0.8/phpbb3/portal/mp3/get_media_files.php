<?php
/**
*
* @name get_mp3_files.php
* @package phpBB3 Portal XL 5.0
* @version $Id: get_media_files.php,v 1.1.1.1 2009/05/15 04:04:51 damysterious Exp $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

// Description: 
// This file filter only accepts files with a ".mp3" extension.
$filter = ".";

$directory = ($phpbb_root_path . 'portal/mp3/media/');

// read through the directory and filter files to an array
@$d = dir($directory);
if ($d) 
{ 
	while($entry=$d->read()) 
	{  
		$ps = strpos(strtolower($entry), $filter);
		if (!($ps === false)) {  
			$items[] = $entry; 
		} 
	}
	$d->close();
	sort($items);
}

// Format: xspf format Add an xml header and the opening tags .. 
header("content-type:text/xml;charset=utf-8");

echo "<?xml version='1.0' encoding='UTF-8' ?>\n";
echo "<playlist version='1' xmlns='http://xspf.org/ns/0/'>\n";
echo "	<title>PHP Generated Playlist</title>\n";
echo "	<info>http://www.jeroenwijering.com/</info>\n";
echo "	<trackList>\n";


for($i=0; $i<sizeof($items); $i++) 
{
	echo "		<track>\n";
	echo "			<annotation>" . ($i+1) . "</annotation>\n";
	echo "			<title>" . $items[$i] . "</title>\n";
	echo "			<location>" . $directory . '/' . $items[$i] . "</location>\n";
	echo "			<info></info>\n";
	echo "		</track>\n";
}
 
// Add closing tags
echo "	</trackList>\n";
echo "</playlist>\n";

?>