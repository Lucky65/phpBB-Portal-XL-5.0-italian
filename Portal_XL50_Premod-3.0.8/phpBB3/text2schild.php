<?php
/** 
*
* @package smilie_creator
* $LastChangedDate: 2008-10-18 22:15:51 +0200 (Sa, 18 Okt 2008) $
* $LastChangedBy: stoffel04 $
* $Id: text2schild.php,v 1.1.1.1 2009/05/15 05:12:42 damysterious Exp $
* $Revision: 1.1.1.1 $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License*
*
*/

/*
 * @ignore 
*/ 
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

$user->session_begin(false);
$auth->acl($user->data);
$user->setup();

$text 			= utf8_decode(request_var('text', '', true));
$smilie 		= request_var('smilie', '');
$fontcolor 		= request_var('fontcolor', '');
$shadowcolor 	= request_var('shadowcolor', '');
$shieldshadow 	= request_var('shieldshadow', 0);

//Here we are able to set a special custom font file... if you want ;-)
//$fontfile 	= phpbb_realpath ('images/smilie_creator/comic.TTF');
//$fontfile 	= phpbb_realpath ('images/smilie_creator/palai.TTF');
//$fontfile 	= phpbb_realpath ('images/smilie_creator/comic.TTF');
$fontfile 			= '';
$fontheight			= '';
$fontwidth			= '';
$character_count 	= 0;
$default_smilie 	= 1;
$count_smilie 		= -1;

if ($smilie == 'undefined' || $smilie == 'standard')
{
	$smilie = 1;
}

//Get all available smilies ( *.png )
$handle = opendir("{$phpbb_root_path}images/smilie_creator/");
while ($result = readdir($handle))
{
	if (strtolower(substr($result, (strlen($result) - 3), 3)) == "png")
	{
		$count_smilie++;
	}
}
closedir($handle);


if (version_compare(PHP_VERSION, '4.3.3', '>='))
{
	$gd_info = gd_info();
}
else
{
	$gd_info["FreeType Support"] = 1;
}

if ((!$gd_info["FreeType Support"]) || (!file_exists($fontfile)))
{
	$fontwidth = 6;
	$fontheight = 8;
}
else
{
	if ((!$fontheight) || (!$fontwidth))
	{
		$fontwidth = imagefontwidth($fontfile) + 1;
		$fontheight = imagefontheight($fontfile);
	}
}
$fontheight += 2;


 

// remove html code tags.
$text = str_replace('%20', ' ', $text);
$text = htmlspecialchars_decode($text);
$text = stripslashes($text);
$text = str_replace("&lt;","<",$text);
$text = str_replace("&gt;",">",$text);

while (substr_count($text, "<"))
{
	$text = ereg_replace(substr($text, strpos($text, "<"), (strpos($text, ">") - strpos($text, "<") + 1)), "", $text);
}

// Have we some text to show ?
if ($text == '')
{
	$text = $user->lang['GENERAL_ERROR'];
}

//What if the text length is longer than 33 characters?
if (strlen($text) > 33)
{
	//try to split them into single words
	$words = split(" ", $text);

	if  (is_array($words))
	{
		$i = 0;
		$output[$i] = '';

		//Check the line lenght after each word
		foreach ($words as $word)
		{
			if ((strlen($output[$i] . " " . $word) < 33) && (!substr_count($word, "[SM")))
			{
				$output[$i] .= " " . $word;
			}
			else
			{
				//limit the shield to 12 lines
				if ($i <= 11)
				{
					if ($character_count < strlen($output[$i])) 
					{
						$character_count = strlen($output[$i]);
					}
					$i++;
					$output[$i] = $word;
				}
			}
		}
	}
	else
	{
		//sorry, no split possible, so we have to cut the line.
		$character_count = 33;
		$output[0] = substr($text, 0, 30) . "...";
	}
}
else
{
	$character_count = strlen($text);
	$output[0] = $text;
}

if (sizeof($output) > 12)
{
	//we have more than 12 lines.... cut the last line.
	$output[12] = substr($output[12], 0, 30) . "...";
}

//Maybe we have to tweak here a bit. Depends on the font...
$width = ($character_count * $fontwidth) + 40;
$height = (sizeof($output) * $fontheight) + 40;
if ($width < 60)
{
	$width = 60;
}

//We have a random smilie ?
mt_srand((double)microtime()*3216549);
if ($smilie == "random")
{
	$smilie = mt_rand(1,$count_smilie);
}


if (!$smilie)
{
	if ($default_smilie)
	{
		$smilie = $default_smilie;
	}
	else
	{
		$smilie = mt_rand(1,$count_smilie);
	}
}

//Main work here
$smilie				= imagecreatefrompng("{$phpbb_root_path}images/smilie_creator/smilie" . $smilie . ".png");
$schild				= imagecreatefrompng("{$phpbb_root_path}images/smilie_creator/schild.png");
$img				= imagecreate($width, $height);

$fontcolor 			= str_replace("#","",$fontcolor);
$shadowcolor		= str_replace("#","",$shadowcolor);

$bgcolor			= imagecolorallocate ($img, 111, 252, 134);
$txtcolor			= imagecolorallocate ($img, hexdec(substr($fontcolor, 0, 2)),   hexdec(substr($fontcolor, 2, 2)),   hexdec(substr($fontcolor, 4, 2)));
$txt2color			= imagecolorallocate ($img, hexdec(substr($shadowcolor, 0, 2)), hexdec(substr($shadowcolor, 2, 2)), hexdec(substr($shadowcolor, 4, 2)));
$bocolor			= imagecolorallocate ($img, 0, 0, 0);
$schcolor			= imagecolorallocate ($img, 255, 255, 255);
$shadow1color		= imagecolorallocate ($img, 235, 235, 235);
$shadow2color		= imagecolorallocate ($img, 219, 219, 219);

$smiliecolor 		= imagecolorsforindex($smilie, imagecolorat($smilie, 5, 14));

imagesetpixel($schild, 1, 14, imagecolorallocate($schild, ($smiliecolor["red"] + 52), ($smiliecolor["green"] + 59), ($smiliecolor["blue"] + 11)));
imagesetpixel($schild, 2, 14, imagecolorallocate($schild, ($smiliecolor["red"] + 50), ($smiliecolor["green"] + 52), ($smiliecolor["blue"] + 50)));
imagesetpixel($schild, 1, 15, imagecolorallocate($schild, ($smiliecolor["red"] + 50), ($smiliecolor["green"] + 52), ($smiliecolor["blue"] + 50)));
imagesetpixel($schild, 2, 15, imagecolorallocate($schild, ($smiliecolor["red"] + 22), ($smiliecolor["green"] + 21), ($smiliecolor["blue"] + 35)));
imagesetpixel($schild, 1, 16, imagecolorat($smilie, 5, 14));
imagesetpixel($schild, 2, 16, imagecolorat($smilie, 5, 14));
imagesetpixel($schild, 5, 16, imagecolorallocate($schild, ($smiliecolor["red"] + 22), ($smiliecolor["green"] + 21), ($smiliecolor["blue"] + 35)));
imagesetpixel($schild, 6, 16, imagecolorat($smilie, 5, 14));
imagesetpixel($schild, 5, 15, imagecolorallocate($schild, ($smiliecolor["red"] + 52), ($smiliecolor["green"] + 59), ($smiliecolor["blue"] + 11)));
imagesetpixel($schild, 6, 15, imagecolorallocate($schild, ($smiliecolor["red"] + 50), ($smiliecolor["green"] + 52), ($smiliecolor["blue"] + 50)));


imagecopy ($img, $schild, ($width / 2 - 3), 0, 0, 0, 6, 4); // Copy image tile
imagecopy ($img, $schild, ($width / 2 - 3), ($height - 24), 0, 5, 9, 17); // Copy image tile
imagecopy ($img, $smilie, ($width / 2 + 6), ($height - 24), 0, 0, 23, 23); // Copy image tile

imagefilledrectangle($img, 0, 4, $width, ($height - 25), $bocolor);
imagefilledrectangle($img, 1, 5, ($width - 2), ($height - 26), $schcolor);

if ($shieldshadow)
{
	imagefilledpolygon($img, array((($width - 2) / 2 + ((($width - 2) / 4) - 3)), 5, (($width - 2) / 2 + ((($width - 2) / 4) + 3)), 5, (($width - 2) / 2 - ((($width - 2) / 4) - 3)), ($height - 26), (($width - 2) / 2 - ((($width - 2) / 4) + 3)), ($height - 26)), 4, $shadow1color);
	imagefilledpolygon($img, array((($width - 2) / 2 + ((($width - 2) / 4) + 4)), 5, ($width - 2), 5, ($width - 2), ($height - 26), (($width - 2) / 2 - ((($width - 2) / 4) - 4)), ($height - 26)), 4, $shadow2color);
}

$i = 0;
while ($i < sizeof($output))
{
	if (((!$gd_info["FreeType Support"]) || (!file_exists($fontfile))))
	{
		if ($shadowcolor)
		{
			imagestring($img, 2, (($width - (strlen(trim($output[$i])) * $fontwidth) - 2) / 2 + 1), ($i * $fontheight + 6), trim($output[$i]), $txt2color);
		}
		imagestring($img, 2, (($width - (strlen(trim($output[$i])) * $fontwidth) - 2) / 2), ($i * $fontheight + 5), trim($output[$i]), $txtcolor);
	}
	else
	{
		if ($shadowcolor)
		{
			imagettftext($img, $fontheight, 0, (($width - (strlen(trim($output[$i])) * $fontwidth) - 2) / 2 + 1), ($i * $fontheight + $fontheight + 7), $txt2color, $fontfile, trim($output[$i]));
		}
		imagettftext($img, $fontheight, 0, (($width - (strlen(trim($output[$i])) * $fontwidth) - 2) / 2), ($i * $fontheight + $fontheight + 8), $txtcolor, $fontfile, trim($output[$i]));
	}
	$i++;
}

imagecolortransparent($img, $bgcolor);
imageinterlace($img, 1);

//Send the image to the browser
header("Content-type: image/png");
@imagepng($img);
exit;
?>