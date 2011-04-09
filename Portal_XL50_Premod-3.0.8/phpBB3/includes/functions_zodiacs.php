<?php
/**
*
* @package phpBB3
* @version 0.1.1
* @copyright (c) 2007 eviL3
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

// Functions for the zodiacs mod

/**
 * Get user zodiac
 *
 * @param int $bday_day Day of birthdate
 * @param int $bday_month Month of birthdate
 * @param bool $use_text If true the function returns text, if false it returns an image
 * @return string User zodiac
 */
function get_user_zodiac($bday_day, $bday_month, $use_text = true)
{
	global $user;
	
	foreach (array('bday_day', 'bday_month') as $var)
	{
		$$var = (string) (int) $$var;
		$$var = ((strlen($$var) < 2) != '0' ? '0' : '') . $$var;
	}
	
	$zodiac_compare = $bday_month . $bday_day;
	
	if (!isset($zodiac_ary))
	{
		static $zodiac_ary = array(
			'0101' => '0120',
			'0121' => '0220',
			'0221' => '0320',
			'0321' => '0420',
			'0421' => '0520',
			'0521' => '0621',
			'0622' => '0722',
			'0723' => '0823',
			'0824' => '0923',
			'0924' => '1023',
			'1024' => '1122',
			'1123' => '1221',
			'1222' => '1231',
		);
	}
	
	$i = 0;
	foreach ($zodiac_ary as $min => $max)
	{
		if ($zodiac_compare >= $min && $zodiac_compare <= $max)
		{
			$use_text = true;
			return ($use_text) ? $user->lang['ZODIACS'][$i] : $user->img('icon_zodiac_' . $i, 'ZODIAC');
		}
		
		$i++;
	}
	
	return '';
}

function get_user_zodiac_indian($bday_day, $bday_month, $use_text = true)
{
	global $user;
	
	foreach (array('bday_day', 'bday_month') as $var)
	{
		$$var = (string) (int) $$var;
		$$var = ((strlen($$var) < 2) != '0' ? '0' : '') . $$var;
	}
	
	$zodiac_indian_compare = $bday_month . $bday_day;
	
	if (!isset($zodiac_indian__ary))
	{
		static $zodiac_indian_ary = array(
			'0101' => '0120',
			'0121' => '0220',
			'0221' => '0320',
			'0321' => '0420',
			'0421' => '0520',
			'0521' => '0621',
			'0622' => '0722',
			'0723' => '0823',
			'0824' => '0923',
			'0924' => '1023',
			'1024' => '1122',
			'1123' => '1221',
			'1222' => '1231',
		);
	}
	
	$i = 0;
	foreach ($zodiac_indian_ary as $min => $max)
	{
		if ($zodiac_indian_compare >= $min && $zodiac_indian_compare <= $max)
		{
			$use_text = true;
			return ($use_text) ? $user->lang['ZODIACS_INDIAN'][$i] : $user->img('icon_zodiac_' . $i, 'ZODIAC');
		}
		
		$i++;
	}
	
	return '';
}

function get_user_zodiac_chinese($bday_day, $bday_month, $bday_year, $use_text = true)
{
	global $user;
	
	foreach (array('bday_day', 'bday_month') as $var)
	{
		$$var = (string) (int) $$var;
		$$var = ((strlen($$var) < 2) ? '0' : '') . $$var;
	}
	
	$zodiac_chinese_compare = $bday_year . $bday_month . $bday_day;

	if (!isset($zodiac_chinese_ary) || !is_array($zodiac_chinese_ary))
	{
		$zodiac_chinese_ary = array(
			19010218 => 'Rat',
			19020207 => 'Buffalo',
			19030128 => 'Tiger',
			19040215 => 'Cat',
			19050203 => 'Dragon',
			19060124 => 'Snake',
			19070212 => 'Horse',
			19080201 => 'Goat',
			19090121 => 'Monkey',
			19100209 => 'Cock',
			19110129 => 'Dog',
			19120217 => 'Pig',
			19130205 => 'Rat',
			19140125 => 'Buffalo',
			19150213 => 'Tiger',
			19160202 => 'Cat',
			19170122 => 'Dragon',
			19180210 => 'Snake',
			19190131 => 'Horse',
			19200219 => 'Goat',
			19210207 => 'Monkey',
			19220127 => 'Cock',
			19230215 => 'Dog',
			19240204 => 'Pig',
			19250124 => 'Rat',
			19260212 => 'Buffalo',
			19270201 => 'Tiger',
			19280122 => 'Cat',
			19290209 => 'Dragon',
			19300129 => 'Snake',
			19310216 => 'Horse',
			19320205 => 'Goat',
			19330125 => 'Monkey',
			19340213 => 'Cock',
			19350203 => 'Dog',
			19360123 => 'Pig',
			19370210 => 'Rat',
			19380230 => 'Buffalo',
			19390218 => 'Tiger',
			19400207 => 'Cat',
			19410126 => 'Dragon',
			19420214 => 'Snake',
			19430204 => 'Horse',
			19440124 => 'Goat',
			19450212 => 'Monkey',
			19460201 => 'Cock',
			19470121 => 'Dog',
			19480209 => 'Pig',
			19490128 => 'Rat',
			19500216 => 'Buffalo',
			19510205 => 'Tiger',
			19520126 => 'Cat',
			19530213 => 'Dragon',
			19540202 => 'Snake',
			19550123 => 'Horse',
			19560211 => 'Goat',
			19570130 => 'Monkey',
			19580217 => 'Cock',
			19590207 => 'Dog',
			19600127 => 'Pig',
			19610214 => 'Rat',
			19620204 => 'Buffalo',
			19630124 => 'Tiger',
			19640212 => 'Cat',
			19650201 => 'Dragon',
			19660120 => 'Snake',
			19670208 => 'Horse',
			19680129 => 'Goat',
			19690216 => 'Monkey',
			19700205 => 'Cock',
			19710126 => 'Dog',
			19720214 => 'Pig',
			19730202 => 'Rat',
			19740122 => 'Buffalo',
			19750210 => 'Tiger',
			19760130 => 'Cat',
			19770217 => 'Dragon',
			19780206 => 'Snake',
			19790127 => 'Horse',
			19800215 => 'Goat',
			19810204 => 'Monkey',
			19820124 => 'Cock',
			19830212 => 'Dog',
			19840201 => 'Pig',
			19850219 => 'Rat',
			19860208 => 'Buffalo',
			19870128 => 'Tiger',
			19880216 => 'Cat',
			19890205 => 'Dragon',
			19900126 => 'Snake',
			19910214 => 'Horse',
			19920203 => 'Goat',
			19930122 => 'Monkey',
			19940209 => 'Cock',
			19950130 => 'Dog',
			19960218 => 'Pig',
			19970206 => 'Rat',
			19980127 => 'Buffalo',
			19990215 => 'Tiger',
			20000204 => 'Cat',
			20010123 => 'Dragon',
			20020211 => 'Snake',
			20030131 => 'Horse',
			20040121 => 'Goat',
			20050208 => 'Monkey',
			20060129 => 'Cock',
			20070218 => 'Dog',
			20080207 => 'Pig',
			20090126 => 'Rat',
			20100210 => 'Buffalo',
			20110203 => 'Tiger',
			20120123 => 'Cat',
			20130210 => 'Dragon',
			20140131 => 'Snake',
			20150219 => 'Horse',
			20160209 => 'Goat',
			20170128 => 'Monkey',
			20180216 => 'Cock',
			20190205 => 'Dog',
			20200125 => 'Pig',
			20210212 => 'Rat',
			20220201 => 'Buffalo',
			20230122 => 'Tiger',
			20240210 => 'Cat',
			20250129 => 'Dragon',
			20260217 => 'Snake',
			20270206 => 'Horse',
			20280126 => 'Goat',
			20290213 => 'Monkey',
			20300203 => 'Cock',
			20310123 => 'Dog',
			20320211 => 'Pig',
			20330131 => 'Rat',
			20340219 => 'Buffalo',
			20350208 => 'Tiger',
			20360128 => 'Cat',
			20370215 => 'Dragon',
			20380204 => 'Snake',
			20390124 => 'Horse',
		);
	}
	
	$i = 0;

	foreach ($zodiac_chinese_ary as $key => $var)
	{
		if ($zodiac_chinese_compare >= $key )
		{

			continue;
		}
		else
		{
		  return $user->lang['ZODIACS_CHINESE'][$var];
		}
		
		$i++;
	}
	
	return '';
}

?>