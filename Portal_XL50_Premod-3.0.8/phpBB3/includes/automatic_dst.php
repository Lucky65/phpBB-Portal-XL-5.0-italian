<?php
/**
*
* @package - "Automatic Daylight Savings Time 2"
* @version $Id: automatic_dst.php 9 2009-11-18 MartectX $
* @copyright (C)2008-2009, MartectX ( http://mods.martectx.de/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

function automatic_dst_session()
{
	if (!defined('AUTOMATIC_DST_TIMEZONE'))
	{
		global $config, $db, $user;

		$user->add_lang('mods/automatic_dst');

		if ($user->data['user_id'] != ANONYMOUS)
		{
			if (is_numeric($user->data['user_timezone']))
			{
				// Time zone not yet converted, so lets temporarily do just that -  if there's no entry to convert to reset to board time
				$timetable = automatic_dst_get_timetable();
				$user->data['user_timezone'] = ($timetable[$user->data['user_timezone']]) ? $timetable[$user->data['user_timezone']] : AUTOMATIC_DST_BOARD_TIMEZONE;
			}

			if ($user->data['user_timezone'] != AUTOMATIC_DST_BOARD_TIMEZONE)
			{
				if (version_compare(PHP_VERSION, '5.2.0', '>'))
				{
					date_default_timezone_set($user->data['user_timezone']);
					$january = new DateTime(date('Y') . '-01-01 12:00:00');
					$july = new DateTime(date('Y') . '-07-01 12:00:00');
					$offset = ($january->getOffset() < $july->getOffset()) ? $january->getOffset() / 3600 : $july->getOffset() / 3600;
				}
				else
				{
					putenv('TZ=' . $user->data['user_timezone']);
					$offset = (date('Z', mktime(0, 0, 0, 01, 01)) < date('Z', mktime(0, 0, 0, 07, 01))) ? date('Z', mktime(0, 0, 0, 01, 01)) / 3600 : date('Z', mktime(0, 0, 0, 07, 01)) / 3600;
				}
			}
			else
			{
				$offset = $config['board_timezone'];
			}

			define('AUTOMATIC_DST_TIMEZONE', $user->data['user_timezone']);
			define('AUTOMATIC_DST_ISDST', date('I'));

			// Set all variables you can think of to the automatically determined - you never know which ones may be used by keen MOD authors... ;-)
			$user->data['user_timezone'] = $offset;
			$user->data['user_dst'] = AUTOMATIC_DST_ISDST;

			$user->timezone = $offset * 3600;
			$user->dst = AUTOMATIC_DST_ISDST * 3600;
		}
		else
		{
			if ($user->data['user_timezone'] != AUTOMATIC_DST_BOARD_TIMEZONE)
			{
				// Set the time zone of the anonymous user to the board's time zone
				$sql = 'UPDATE ' . USERS_TABLE . "
					SET user_timezone = '" . AUTOMATIC_DST_BOARD_TIMEZONE . "'
					WHERE user_id = " . ANONYMOUS;
				$db->sql_query($sql);

				$user->data['user_timezone'] = AUTOMATIC_DST_BOARD_TIMEZONE;
			}

			define('AUTOMATIC_DST_TIMEZONE', AUTOMATIC_DST_BOARD_TIMEZONE);
			define('AUTOMATIC_DST_ISDST', AUTOMATIC_DST_BOARD_ISDST);

			// Set all variables you can think of to the automatically determined - you never know which ones may be used by keen MOD authors... ;-)
			$user->data['user_timezone'] = $config['board_timezone'];
			$user->data['user_dst'] = AUTOMATIC_DST_ISDST;

			$user->timezone = $config['board_timezone'] * 3600;
			$user->dst = AUTOMATIC_DST_ISDST * 3600;
		}
	}
}

function automatic_dst_cache($timezone)
{
	if (is_numeric($timezone))
	{
		// Time zone not yet converted, so lets temporarily do just that -  if there's no entry to convert to reset to GMT
		$timetable = automatic_dst_get_timetable();
		$timezone = number_format($timezone, 2);
		$timezone = ($timetable[$timezone]) ? $timetable[$timezone] : 'Europe/London';

		// It's important for the converter that this time zone is temporary, so lets tell it
		define('AUTOMATIC_DST_TEMP_TIMEZONE', TRUE);
	}

	if (version_compare(PHP_VERSION, '5.2.0', '>'))
	{
		date_default_timezone_set($timezone);
		$january = new DateTime(date('Y') . '-01-01 12:00:00');
		$july = new DateTime(date('Y') . '-07-01 12:00:00');
		$offset = ($january->getOffset() < $july->getOffset()) ? $january->getOffset() / 3600 : $july->getOffset() / 3600;
	}
	else
	{
		putenv('TZ=' . $timezone);
		$offset = (date('Z', mktime(0, 0, 0, 01, 01)) < date('Z', mktime(0, 0, 0, 07, 01))) ? date('Z', mktime(0, 0, 0, 01, 01)) / 3600 : date('Z', mktime(0, 0, 0, 07, 01)) / 3600;
	}

	define('AUTOMATIC_DST_BOARD_TIMEZONE', $timezone);
	define('AUTOMATIC_DST_BOARD_ISDST', date('I'));

	// Return time zone offset
	return $offset;
}

function automatic_dst_get_timezones()
{
	// From http://us.php.net/manual/en/function.date-default-timezone-set.php#84459
	// Credit to Rob Kaper

	global $user;

	if (version_compare(PHP_VERSION, '5.2.0', '>'))
	{
		$timezoneslist = DateTimeZone::listAbbreviations();

		$cities = array();

		foreach($timezoneslist as $key => $zones)
		{
			foreach($zones as $id => $zone)
			{
				if (preg_match('/^(Africa|America|Antarctica|Arctic|Asia|Atlantic|Australia|Europe|Indian|Pacific)\//', $zone['timezone_id']))
				{
					$cities[$zone['timezone_id']] = strtr($zone['timezone_id'], $user->lang['automatic_dst_timezones']);
				}
			}
		}
	}
	else
	{
		// Sad, but that's how it has to be done...
		$timezoneslist = array(
		  'Africa/Abidjan', 
		  'Africa/Accra', 
		  'Africa/Addis_Ababa', 
		  'Africa/Algiers', 
		  'Africa/Asmara', 
		  'Africa/Asmera', 
		  'Africa/Bamako', 
		  'Africa/Bangui', 
		  'Africa/Banjul', 
		  'Africa/Bissau', 
		  'Africa/Blantyre', 
		  'Africa/Brazzaville', 
		  'Africa/Cairo', 
		  'Africa/Casablanca', 
		  'Africa/Ceuta', 
		  'Africa/Conakry', 
		  'Africa/Dakar', 
		  'Africa/Dar_es_Salaam', 
		  'Africa/Djibouti', 
		  'Africa/Douala', 
		  'Africa/El_Aaiun', 
		  'Africa/Freetown', 
		  'Africa/Gaborone', 
		  'Africa/Harare', 
		  'Africa/Johannesburg', 
		  'Africa/Kampala', 
		  'Africa/Khartoum', 
		  'Africa/Kigali', 
		  'Africa/Lagos', 
		  'Africa/Libreville', 
		  'Africa/Luanda', 
		  'Africa/Lusaka', 
		  'Africa/Malabo', 
		  'Africa/Maputo', 
		  'Africa/Maseru', 
		  'Africa/Mbabane', 
		  'Africa/Mogadishu', 
		  'Africa/Monrovia', 
		  'Africa/Nairobi', 
		  'Africa/Ndjamena', 
		  'Africa/Niamey', 
		  'Africa/Nouakchott', 
		  'Africa/Ouagadougou', 
		  'Africa/Porto-Novo', 
		  'Africa/Sao_Tome', 
		  'Africa/Timbuktu', 
		  'Africa/Tripoli', 
		  'Africa/Tunis', 
		  'Africa/Windhoek',
		  'America/Adak', 
		  'America/Anchorage', 
		  'America/Anguilla', 
		  'America/Antigua', 
		  'America/Araguaina', 
		  'America/Argentina/Buenos_Aires', 
		  'America/Argentina/Catamarca', 
		  'America/Argentina/ComodRivadavia', 
		  'America/Argentina/Cordoba', 
		  'America/Argentina/Jujuy', 
		  'America/Argentina/La_Rioja', 
		  'America/Argentina/Mendoza', 
		  'America/Argentina/Rio_Gallegos', 
		  'America/Argentina/San_Juan', 
		  'America/Argentina/Tucuman', 
		  'America/Argentina/Ushuaia', 
		  'America/Aruba', 
		  'America/Asuncion', 
		  'America/Atikokan', 
		  'America/Atka', 
		  'America/Bahia', 
		  'America/Barbados', 
		  'America/Belem', 
		  'America/Belize', 
		  'America/Blanc-Sablon', 
		  'America/Boa_Vista', 
		  'America/Bogota', 
		  'America/Boise', 
		  'America/Buenos_Aires', 
		  'America/Cambridge_Bay', 
		  'America/Campo_Grande', 
		  'America/Cancun', 
		  'America/Caracas', 
		  'America/Catamarca', 
		  'America/Cayenne', 
		  'America/Cayman', 
		  'America/Chicago',
		  'America/Chihuahua', 
		  'America/Coral_Harbour', 
		  'America/Cordoba', 
		  'America/Costa_Rica', 
		  'America/Cuiaba', 
		  'America/Curacao', 
		  'America/Danmarkshavn', 
		  'America/Dawson', 
		  'America/Dawson_Creek', 
		  'America/Denver', 
		  'America/Detroit', 
		  'America/Dominica', 
		  'America/Edmonton', 
		  'America/Eirunepe', 
		  'America/El_Salvador', 
		  'America/Ensenada', 
		  'America/Fort_Wayne', 
		  'America/Fortaleza', 
		  'America/Glace_Bay', 
		  'America/Godthab', 
		  'America/Goose_Bay', 
		  'America/Grand_Turk', 
		  'America/Grenada', 
		  'America/Guadeloupe', 
		  'America/Guatemala', 
		  'America/Guayaquil', 
		  'America/Guyana', 
		  'America/Halifax', 
		  'America/Havana', 
		  'America/Hermosillo', 
		  'America/Indiana/Indianapolis', 
		  'America/Indiana/Knox', 
		  'America/Indiana/Marengo', 
		  'America/Indiana/Petersburg', 
		  'America/Indiana/Vevay', 
		  'America/Indiana/Vincennes', 
		  'America/Indiana/Winamac', 
		  'America/Indianapolis', 
		  'America/Inuvik', 
		  'America/Iqaluit', 
		  'America/Jamaica', 
		  'America/Jujuy', 
		  'America/Juneau', 
		  'America/Kentucky/Louisville', 
		  'America/Kentucky/Monticello', 
		  'America/Knox_IN', 
		  'America/La_Paz', 
		  'America/Lima', 
		  'America/Los_Angeles', 
		  'America/Louisville', 
		  'America/Maceio', 
		  'America/Managua', 
		  'America/Manaus', 
		  'America/Martinique', 
		  'America/Mazatlan', 
		  'America/Mendoza', 
		  'America/Menominee', 
		  'America/Merida', 
		  'America/Mexico_City', 
		  'America/Miquelon', 
		  'America/Moncton', 
		  'America/Monterrey', 
		  'America/Montevideo', 
		  'America/Montreal', 
		  'America/Montserrat', 
		  'America/Nassau', 
		  'America/New_York', 
		  'America/Nipigon', 
		  'America/Nome', 
		  'America/Noronha', 
		  'America/North_Dakota/Center', 
		  'America/North_Dakota/New_Salem', 
		  'America/Panama', 
		  'America/Pangnirtung', 
		  'America/Paramaribo', 
		  'America/Phoenix', 
		  'America/Port-au-Prince', 
		  'America/Port_of_Spain', 
		  'America/Porto_Acre', 
		  'America/Porto_Velho', 
		  'America/Puerto_Rico', 
		  'America/Rainy_River', 
		  'America/Rankin_Inlet', 
		  'America/Recife', 
		  'America/Regina', 
		  'America/Rio_Branco', 
		  'America/Rosario', 
		  'America/Santiago', 
		  'America/Santo_Domingo', 
		  'America/Sao_Paulo', 
		  'America/Scoresbysund', 
		  'America/Shiprock', 
		  'America/St_Johns', 
		  'America/St_Kitts', 
		  'America/St_Lucia', 
		  'America/St_Thomas', 
		  'America/St_Vincent', 
		  'America/Swift_Current', 
		  'America/Tegucigalpa', 
		  'America/Thule', 
		  'America/Thunder_Bay', 
		  'America/Tijuana', 
		  'America/Toronto', 
		  'America/Tortola', 
		  'America/Vancouver', 
		  'America/Virgin', 
		  'America/Whitehorse', 
		  'America/Winnipeg', 
		  'America/Yakutat', 
		  'America/Yellowknife',
		  'Antarctica/Casey', 
		  'Antarctica/Davis', 
		  'Antarctica/DumontDUrville', 
		  'Antarctica/Mawson', 
		  'Antarctica/McMurdo', 
		  'Antarctica/Palmer', 
		  'Antarctica/Rothera', 
		  'Antarctica/South_Pole', 
		  'Antarctica/Syowa', 
		  'Antarctica/Vostok',
		  'Arctic/Longyearbyen',
		  'Asia/Aden', 
		  'Asia/Almaty', 
		  'Asia/Amman', 
		  'Asia/Anadyr', 
		  'Asia/Aqtau', 
		  'Asia/Aqtobe', 
		  'Asia/Ashgabat', 
		  'Asia/Ashkhabad', 
		  'Asia/Baghdad', 
		  'Asia/Bahrain', 
		  'Asia/Baku', 
		  'Asia/Bangkok', 
		  'Asia/Beirut', 
		  'Asia/Bishkek', 
		  'Asia/Brunei', 
		  'Asia/Calcutta', 
		  'Asia/Choibalsan', 
		  'Asia/Chongqing', 
		  'Asia/Chungking', 
		  'Asia/Colombo', 
		  'Asia/Dacca', 
		  'Asia/Damascus', 
		  'Asia/Dhaka', 
		  'Asia/Dili', 
		  'Asia/Dubai', 
		  'Asia/Dushanbe', 
		  'Asia/Gaza', 
		  'Asia/Harbin', 
		  'Asia/Hong_Kong', 
		  'Asia/Hovd', 
		  'Asia/Irkutsk', 
		  'Asia/Istanbul', 
		  'Asia/Jakarta', 
		  'Asia/Jayapura', 
		  'Asia/Jerusalem', 
		  'Asia/Kabul', 
		  'Asia/Kamchatka', 
		  'Asia/Karachi', 
		  'Asia/Kashgar', 
		  'Asia/Katmandu', 
		  'Asia/Krasnoyarsk', 
		  'Asia/Kuala_Lumpur', 
		  'Asia/Kuching', 
		  'Asia/Kuwait', 
		  'Asia/Macao', 
		  'Asia/Macau', 
		  'Asia/Magadan', 
		  'Asia/Makassar', 
		  'Asia/Manila', 
		  'Asia/Muscat', 
		  'Asia/Nicosia', 
		  'Asia/Novosibirsk',	 
		  'Asia/Omsk', 
		  'Asia/Oral', 
		  'Asia/Phnom_Penh', 
		  'Asia/Pontianak', 
		  'Asia/Pyongyang', 
		  'Asia/Qatar', 
		  'Asia/Qyzylorda', 
		  'Asia/Rangoon', 
		  'Asia/Riyadh', 
		  'Asia/Saigon', 
		  'Asia/Sakhalin', 
		  'Asia/Samarkand', 
		  'Asia/Seoul', 
		  'Asia/Shanghai', 
		  'Asia/Singapore', 
		  'Asia/Taipei', 
		  'Asia/Tashkent', 
		  'Asia/Tbilisi', 
		  'Asia/Tehran', 
		  'Asia/Tel_Aviv', 
		  'Asia/Thimbu', 
		  'Asia/Thimphu', 
		  'Asia/Tokyo',			 
		  'Asia/Ujung_Pandang', 
		  'Asia/Ulaanbaatar', 
		  'Asia/Ulan_Bator', 
		  'Asia/Urumqi', 
		  'Asia/Vientiane', 
		  'Asia/Vladivostok',	 
		  'Asia/Yakutsk', 
		  'Asia/Yekaterinburg', 
		  'Asia/Yerevan',
		  'Atlantic/Azores',		 
		  'Atlantic/Bermuda',		 
		  'Atlantic/Canary',		 
		  'Atlantic/Cape_Verde',	 
		  'Atlantic/Faeroe',		 
		  'Atlantic/Faroe',		 
		  'Atlantic/Jan_Mayen',	 
		  'Atlantic/Madeira',		 
		  'Atlantic/Reykjavik',	 
		  'Atlantic/St_Helena',	 
		  'Atlantic/Stanley',		
		  'Australia/ACT', 		
		  'Australia/Adelaide', 	
		  'Australia/Brisbane',	 
		  'Australia/Broken_Hill',	 
		  'Australia/Canberra',	 
		  'Australia/Currie',		 
		  'Australia/Darwin',		 
		  'Australia/Eucla',		 
		  'Australia/Hobart',		 
		  'Australia/LHI',			 
		  'Australia/Lindeman',	 
		  'Australia/Lord_Howe',	 
		  'Australia/Melbourne', 	
		  'Australia/NSW',			 
		  'Australia/North',		 
		  'Australia/Perth',		 
		  'Australia/Queensland',	 
		  'Australia/South',		 
		  'Australia/Sydney',		 
		  'Australia/Tasmania',	 
		  'Australia/Victoria',	 
		  'Australia/West',		 
		  'Australia/Yancowinna',	
		  'Europe/Amsterdam',		 
		  'Europe/Andorra', 		 
		  'Europe/Athens',			  
		  'Europe/Belfast', 		 
		  'Europe/Belgrade', 		 
		  'Europe/Berlin',			 
		  'Europe/Bratislava',		  
		  'Europe/Brussels',		  
		  'Europe/Bucharest',		   
		  'Europe/Budapest',		  
		  'Europe/Chisinau',		  
		  'Europe/Copenhagen',		  
		  'Europe/Dublin',		 
		  'Europe/Gibraltar',		  
		  'Europe/Guernsey',		 
		  'Europe/Helsinki',		  
		  'Europe/Isle_of_Man',	 
		  'Europe/Istanbul',		  
		  'Europe/Jersey',			  
		  'Europe/Kaliningrad',	  
		  'Europe/Kiev',			 
		  'Europe/Lisbon', 		 
		  'Europe/Ljubljana',		  
		  'Europe/London',		 
		  'Europe/Luxembourg',		  
		  'Europe/Madrid',			  
		  'Europe/Malta',			  
		  'Europe/Mariehamn',		  
		  'Europe/Minsk',			  
		  'Europe/Monaco',			  
		  'Europe/Moscow',		 
		  'Europe/Nicosia',		  
		  'Europe/Oslo',			   
		  'Europe/Paris',			   
		  'Europe/Podgorica',		   
		  'Europe/Prague',			   
		  'Europe/Riga',			  
		  'Europe/Rome', 			  
		  'Europe/Samara',			  
		  'Europe/San_Marino',		   
		  'Europe/Sarajevo',		   
		  'Europe/Simferopol',		  
		  'Europe/Skopje',			   
		  'Europe/Sofia',			  
		  'Europe/Stockholm', 		  
		  'Europe/Tallinn',		  
		  'Europe/Tirane', 		  
		  'Europe/Tiraspol',		  
		  'Europe/Uzhgorod',		  
		  'Europe/Vaduz', 			  
		  'Europe/Vatican', 		  
		  'Europe/Vienna',			   
		  'Europe/Vilnius', 		 
		  'Europe/Volgograd',		  
		  'Europe/Warsaw', 		  
		  'Europe/Zagreb',			  
		  'Europe/Zaporozhye',		  
		  'Europe/Zurich',			  
		  'Indian/Antananarivo', 	
		  'Indian/Chagos', 		
		  'Indian/Comoro', 		
		  'Indian/Kerguelen', 
		  'Indian/Mahe', 			
		  'Indian/Maldives', 	 
		  'Indian/Mauritius', 		
		  'Indian/Mayotte', 		
		  'Indian/Reunion',		
		  'Pacific/Apia', 		 
		  'Pacific/Auckland',		 
		  'Pacific/Chatham',		 
		  'Pacific/Easter',        
		  'Pacific/Efate', 		
		  'Pacific/Enderbury', 	
		  'Pacific/Fiji', 			
		  'Pacific/Galapagos',     
		  'Pacific/Gambier', 		
		  'Pacific/Guadalcanal',	 
		  'Pacific/Guam', 			
		  'Pacific/Honolulu', 		
		  'Pacific/Kiritimati',	 
		  'Pacific/Kosrae', 		
		  'Pacific/Kwajalein',		 
		  'Pacific/Majuro', 		
		  'Pacific/Marquesas', 	
		  'Pacific/Midway', 		
		  'Pacific/Nauru', 		
		  'Pacific/Niue', 		 
		  'Pacific/Norfolk',		 
		  'Pacific/Noumea', 		
		  'Pacific/Pago_Pago', 	
		  'Pacific/Pitcairn', 		 
		  'Pacific/Rarotonga', 	
		  'Pacific/Saipan', 		
		  'Pacific/Samoa',			 
		  'Pacific/Tahiti',		 
		  'Pacific/Tongatapu',		 
		);

		foreach ($timezoneslist as $zone)
		{
			$cities[$zone] = strtr($zone, $user->lang['automatic_dst_timezones']);
		}
	}

	// We have to sort the array because of possible translation order changes
	asort($cities);

	return $cities;
}

function automatic_dst_get_timetable()
{
	return array(
		/**
		* Time zone conversion table (don't flame me if your city isn't here - I had to pick one for every time zone!)
		*/
		'-0.00'		=> 'Africa/Abidjan', 
		'-0.00'		=> 'Africa/Accra', 
		'3.00'		=> 'Africa/Addis_Ababa', 
		'1.00'		=> 'Africa/Algiers', 
		'3.00'		=> 'Africa/Asmara', 
		'3.00'		=> 'Africa/Asmera', 
		'-0.00'		=> 'Africa/Bamako', 
		'1.00'		=> 'Africa/Bangui', 
		'-0.00'		=> 'Africa/Banjul', 
		'-0.00'		=> 'Africa/Bissau', 
		'2.00'		=> 'Africa/Blantyre', 
		'1.00'		=> 'Africa/Brazzaville', 
		'2.00'		=> 'Africa/Cairo', 
		'-0.00'		=> 'Africa/Casablanca', 
		'1.00'		=> 'Africa/Ceuta', 
		'-0.00'		=> 'Africa/Conakry', 
		'-0.00'		=> 'Africa/Dakar', 
		'3.00'		=> 'Africa/Dar_es_Salaam', 
		'3.00'		=> 'Africa/Djibouti', 
		'1.00'		=> 'Africa/Douala', 
		'-0.00'		=> 'Africa/El_Aaiun', 
		'-0.00'		=> 'Africa/Freetown', 
		'2.00'		=> 'Africa/Gaborone', 
		'2.00'		=> 'Africa/Harare', 
		'2.00'		=> 'Africa/Johannesburg', 
		'3.00'		=> 'Africa/Kampala', 
		'3.00'		=> 'Africa/Khartoum', 
		'2.00'		=> 'Africa/Kigali', 
		'1.00'		=> 'Africa/Lagos', 
		'1.00'		=> 'Africa/Libreville', 
		'1.00'		=> 'Africa/Luanda', 
		'2.00'		=> 'Africa/Lusaka', 
		'1.00'		=> 'Africa/Malabo', 
		'2.00'		=> 'Africa/Maputo', 
		'2.00'		=> 'Africa/Maseru', 
		'2.00'		=> 'Africa/Mbabane', 
		'3.00'		=> 'Africa/Mogadishu', 
		'-0.00'		=> 'Africa/Monrovia', 
		'3.00'		=> 'Africa/Nairobi', 
		'1.00'		=> 'Africa/Ndjamena', 
		'1.00'		=> 'Africa/Niamey', 
		'-0.00'		=> 'Africa/Nouakchott', 
		'-0.00'		=> 'Africa/Ouagadougou', 
		'1.00'		=> 'Africa/Porto-Novo', 
		'-0.00'		=> 'Africa/Sao_Tome', 
		'-0.00'		=> 'Africa/Timbuktu', 
		'2.00'		=> 'Africa/Tripoli', 
		'1.00'		=> 'Africa/Tunis', 
		'1.00'		=> 'Africa/Windhoek',
		'-10.00'	=> 'America/Adak', 
		'-9.00'		=> 'America/Anchorage',		// [UTC - 9] Alaska Standard Time, Gambier Island Time
		'-4.00'		=> 'America/Anguilla', 
		'-4.00'		=> 'America/Antigua', 
		'-3.00'		=> 'America/Araguaina', 
		'-3.00'		=> 'America/Argentina/Buenos_Aires', 
		'-3.00'		=> 'America/Argentina/Catamarca', 
		'-3.00'		=> 'America/Argentina/ComodRivadavia', 
		'-3.00'		=> 'America/Argentina/Cordoba', 
		'-3.00'		=> 'America/Argentina/Jujuy', 
		'-3.00'		=> 'America/Argentina/La_Rioja', 
		'-3.00'		=> 'America/Argentina/Mendoza', 
		'-3.00'		=> 'America/Argentina/Rio_Gallegos', 
		'-3.00'		=> 'America/Argentina/San_Juan', 
		'-3.00'		=> 'America/Argentina/Tucuman', 
		'-3.00'		=> 'America/Argentina/Ushuaia', 
		'-4.00'		=> 'America/Aruba', 
		'-3.00'		=> 'America/Asuncion', 
		'-5.00'		=> 'America/Atikokan', 
		'-10.00'	=> 'America/Atka', 
		'-3.00'		=> 'America/Bahia', 
		'-4.00'		=> 'America/Barbados', 
		'-3.00'		=> 'America/Belem', 
		'-6.00'		=> 'America/Belize', 
		'-4.00'		=> 'America/Blanc-Sablon', 
		'-4.00'		=> 'America/Boa_Vista', 
		'-5.00'		=> 'America/Bogota', 
		'-7.00'		=> 'America/Boise', 
		'-3.00'		=> 'America/Buenos_Aires', 
		'-7.00'		=> 'America/Cambridge_Bay', 
		'-4.00'		=> 'America/Campo_Grande', 
		'-6.00'		=> 'America/Cancun', 
		'-4.50'		=> 'America/Caracas', 
		'1.00'		=> 'America/Catamarca', 
		'-3.00'		=> 'America/Cayenne', 
		'-5.00'		=> 'America/Cayman', 
		'-6.00'		=> 'America/Chicago',		// [UTC - 6] Eastern Standard Time
		'-6.00'		=> 'America/Chihuahua', 
		'-5.00'		=> 'America/Coral_Harbour', 
		'-2.00'		=> 'America/Cordoba', 
		'-6.00'		=> 'America/Costa_Rica', 
		'-4.00'		=> 'America/Cuiaba', 
		'-4.00'		=> 'America/Curacao', 
		'-0.00'		=> 'America/Danmarkshavn', 
		'-7.00'		=> 'America/Dawson', 
		'-7.00'		=> 'America/Dawson_Creek', 
		'-7.00'		=> 'America/Denver',		// [UTC - 7] Mountain Standard Time
		'-5.00'		=> 'America/Detroit',		// [UTC - 5] Central Standard Time
		'-4.00'		=> 'America/Dominica', 
		'-7.00'		=> 'America/Edmonton', 
		'-5.00'		=> 'America/Eirunepe', 
		'-6.00'		=> 'America/El_Salvador', 
		'-8.00'		=> 'America/Ensenada', 
		'-5.00'		=> 'America/Fort_Wayne', 
		'-3.00'		=> 'America/Fortaleza', 
		'-4.00'		=> 'America/Glace_Bay', 
		'-3.00'		=> 'America/Godthab', 
		'-4.00'		=> 'America/Goose_Bay', 
		'-5.00'		=> 'America/Grand_Turk', 
		'-4.00'		=> 'America/Grenada',		// [UTC - 4] Atlantic Standard Time
		'-4.00'		=> 'America/Guadeloupe', 
		'-6.00'		=> 'America/Guatemala', 
		'-5.00'		=> 'America/Guayaquil', 
		'-4.00'		=> 'America/Guyana', 
		'-4.00'		=> 'America/Halifax', 
		'-5.00'		=> 'America/Havana', 
		'-7.00'		=> 'America/Hermosillo', 
		'-5.00'		=> 'America/Indiana/Indianapolis', 
		'-6.00'		=> 'America/Indiana/Knox', 
		'-5.00'		=> 'America/Indiana/Marengo', 
		'-5.00'		=> 'America/Indiana/Petersburg', 
		'-5.00'		=> 'America/Indiana/Vevay', 
		'-5.00'		=> 'America/Indiana/Vincennes', 
		'-5.00'		=> 'America/Indiana/Winamac', 
		'-5.00'		=> 'America/Indianapolis', 
		'-7.00'		=> 'America/Inuvik', 
		'-5.00'		=> 'America/Iqaluit', 
		'-5.00'		=> 'America/Jamaica', 
		'-3.00'		=> 'America/Jujuy', 
		'-9.00'		=> 'America/Juneau', 
		'-5.00'		=> 'America/Kentucky/Louisville', 
		'-5.00'		=> 'America/Kentucky/Monticello', 
		'-6.00'		=> 'America/Knox_IN', 
		'-4.00'		=> 'America/La_Paz', 
		'-5.00'		=> 'America/Lima', 
		'-8.00'		=> 'America/Los_Angeles',	// [UTC - 8] Pacific Standard Time
		'-5.00'		=> 'America/Louisville', 
		'-3.00'		=> 'America/Maceio', 
		'-6.00'		=> 'America/Managua', 
		'-4.00'		=> 'America/Manaus', 
		'-4.00'		=> 'America/Martinique', 
		'-7.00'		=> 'America/Mazatlan', 
		'-3.00'		=> 'America/Mendoza', 
		'-6.00'		=> 'America/Menominee', 
		'-6.00'		=> 'America/Merida', 
		'-6.00'		=> 'America/Mexico_City', 
		'-3.00'		=> 'America/Miquelon', 
		'-4.00'		=> 'America/Moncton', 
		'-6.00'		=> 'America/Monterrey', 
		'-3.00'		=> 'America/Montevideo', 
		'-5.00'		=> 'America/Montreal', 
		'-4.00'		=> 'America/Montserrat', 
		'-5.00'		=> 'America/Nassau', 
		'-5.00'		=> 'America/New_York', 
		'-5.00'		=> 'America/Nipigon', 
		'-9.00'		=> 'America/Nome', 
		'-2.00'		=> 'America/Noronha', 
		'-6.00'		=> 'America/North_Dakota/Center', 
		'-6.00'		=> 'America/North_Dakota/New_Salem', 
		'-5.00'		=> 'America/Panama', 
		'-5.00'		=> 'America/Pangnirtung', 
		'-3.00'		=> 'America/Paramaribo', 
		'-7.00'		=> 'America/Phoenix', 
		'-5.00'		=> 'America/Port-au-Prince', 
		'-4.00'		=> 'America/Port_of_Spain', 
		'-5.00'		=> 'America/Porto_Acre', 
		'-4.00'		=> 'America/Porto_Velho', 
		'-4.00'		=> 'America/Puerto_Rico', 
		'-6.00'		=> 'America/Rainy_River', 
		'-6.00'		=> 'America/Rankin_Inlet', 
		'-3.00'		=> 'America/Recife', 
		'-3.00'		=> 'America/Regina', 
		'-5.00'		=> 'America/Rio_Branco', 
		'-3.00'		=> 'America/Rosario', 
		'-4.00'		=> 'America/Santiago', 
		'-4.00'		=> 'America/Santo_Domingo', 
		'-3.00'		=> 'America/Sao_Paulo',		// [UTC - 3] Amazon Standard Time, Central Greenland Time
		'-2.00'		=> 'America/Scoresbysund',	// [UTC - 2] Fernando de Noronha Time, South Georgia & the South Sandwich Islands Time
		'-7.00'		=> 'America/Shiprock', 
		'-3.50'		=> 'America/St_Johns', 
		'-4.00'		=> 'America/St_Kitts', 
		'-4.00'		=> 'America/St_Lucia', 
		'-4.00'		=> 'America/St_Thomas', 
		'-4.00'		=> 'America/St_Vincent', 
		'-6.00'		=> 'America/Swift_Current', 
		'-6.00'		=> 'America/Tegucigalpa', 
		'-4.00'		=> 'America/Thule', 
		'-5.00'		=> 'America/Thunder_Bay', 
		'-8.00'		=> 'America/Tijuana', 
		'-5.00'		=> 'America/Toronto', 
		'-4.00'		=> 'America/Tortola', 
		'-8.00'		=> 'America/Vancouver', 
		'-4.00'		=> 'America/Virgin', 
		'-8.00'		=> 'America/Whitehorse', 
		'-6.00'		=> 'America/Winnipeg', 
		'-9.00'		=> 'America/Yakutat', 
		'-7.00'		=> 'America/Yellowknife',
		'8.00'		=> 'Antarctica/Casey', 
		'7.00'		=> 'Antarctica/Davis', 
		'10.00'		=> 'Antarctica/DumontDUrville', 
		'6.00'		=> 'Antarctica/Mawson', 
		'12.00'		=> 'Antarctica/McMurdo', 
		'-3.00'		=> 'Antarctica/Palmer', 
		'-3.00'		=> 'Antarctica/Rothera', 
		'12.00'		=> 'Antarctica/South_Pole', 
		'3.00'		=> 'Antarctica/Syowa', 
		'6.00'		=> 'Antarctica/Vostok',
		'1.00'		=> 'Arctic/Longyearbyen',
		'3.00'		=> 'Asia/Aden', 
		'6.00'		=> 'Asia/Almaty', 
		'2.00'		=> 'Asia/Amman', 
		'12.00'		=> 'Asia/Anadyr', 
		'5.00'		=> 'Asia/Aqtau', 
		'5.00'		=> 'Asia/Aqtobe', 
		'5.00'		=> 'Asia/Ashgabat', 
		'5.00'		=> 'Asia/Ashkhabad', 
		'3.00'		=> 'Asia/Baghdad', 
		'3.00'		=> 'Asia/Bahrain', 
		'4.00'		=> 'Asia/Baku', 
		'7.00'		=> 'Asia/Bangkok',			// [UTC + 7] Indochina Time, Krasnoyarsk Standard Time
		'2.00'		=> 'Asia/Beirut', 
		'6.00'		=> 'Asia/Bishkek', 
		'8.00'		=> 'Asia/Brunei', 
		'5.50'		=> 'Asia/Calcutta',			// [UTC + 5:30] Indian Standard Time, Sri Lanka Time
		'9.00'		=> 'Asia/Choibalsan', 
		'8.00'		=> 'Asia/Chongqing', 
		'8.00'		=> 'Asia/Chungking', 
		'5.50'		=> 'Asia/Colombo', 
		'6.00'		=> 'Asia/Dacca', 
		'2.00'		=> 'Asia/Damascus', 
		'6.00'		=> 'Asia/Dhaka', 
		'9.00'		=> 'Asia/Dili', 
		'4.00'		=> 'Asia/Dubai',			// [UTC + 4] Gulf Standard Time, Samara Standard Time
		'5.00'		=> 'Asia/Dushanbe', 
		'2.00'		=> 'Asia/Gaza', 
		'8.00'		=> 'Asia/Harbin', 
		'8.00'		=> 'Asia/Hong_Kong', 
		'7.00'		=> 'Asia/Hovd', 
		'8.00'		=> 'Asia/Irkutsk', 
		'2.00'		=> 'Asia/Istanbul', 
		'7.00'		=> 'Asia/Jakarta', 
		'9.00'		=> 'Asia/Jayapura', 
		'2.00'		=> 'Asia/Jerusalem', 
		'4.50'		=> 'Asia/Kabul',			// [UTC + 4:30] Afghanistan Time
		'12.00'		=> 'Asia/Kamchatka', 
		'5.00'		=> 'Asia/Karachi',			// [UTC + 5] Pakistan Standard Time, Yekaterinburg Standard Time
		'8.00'		=> 'Asia/Kashgar', 
		'5.75'		=> 'Asia/Katmandu',			// [UTC + 5:45] Nepal Time
		'7.00'		=> 'Asia/Krasnoyarsk', 
		'8.00'		=> 'Asia/Kuala_Lumpur', 
		'8.00'		=> 'Asia/Kuching', 
		'3.00'		=> 'Asia/Kuwait', 
		'8.00'		=> 'Asia/Macao', 
		'8.00'		=> 'Asia/Macau', 
		'11.00'		=> 'Asia/Magadan', 
		'8.00'		=> 'Asia/Makassar', 
		'8.00'		=> 'Asia/Manila', 
		'4.00'		=> 'Asia/Muscat', 
		'2.00'		=> 'Asia/Nicosia', 
		'6.00'		=> 'Asia/Novosibirsk',		// [UTC + 6] Bangladesh Time, Bhutan Time, Novosibirsk Standard Time
		'6.00'		=> 'Asia/Omsk', 
		'5.00'		=> 'Asia/Oral', 
		'7.00'		=> 'Asia/Phnom_Penh', 
		'7.00'		=> 'Asia/Pontianak', 
		'9.00'		=> 'Asia/Pyongyang', 
		'3.00'		=> 'Asia/Qatar', 
		'6.00'		=> 'Asia/Qyzylorda', 
		'6.50'		=> 'Asia/Rangoon',			// [UTC + 6:30] Cocos Islands Time, Myanmar Time
		'3.00'		=> 'Asia/Riyadh', 
		'7.00'		=> 'Asia/Saigon', 
		'10.00'		=> 'Asia/Sakhalin', 
		'5.00'		=> 'Asia/Samarkand', 
		'9.00'		=> 'Asia/Seoul', 
		'8.00'		=> 'Asia/Shanghai',			// [UTC + 8] Chinese Standard Time, Australian Western Standard Time, Irkutsk Standard Time
		'8.00'		=> 'Asia/Singapore', 
		'8.00'		=> 'Asia/Taipei', 
		'5.00'		=> 'Asia/Tashkent', 
		'4.00'		=> 'Asia/Tbilisi', 
		'3.50'		=> 'Asia/Tehran',			// [UTC + 3:30] Iran Standard Time
		'2.00'		=> 'Asia/Tel_Aviv', 
		'6.00'		=> 'Asia/Thimbu', 
		'6.00'		=> 'Asia/Thimphu', 
		'9.00'		=> 'Asia/Tokyo',			// [UTC + 9] Japan Standard Time, Korea Standard Time, Chita Standard Time
		'8.00'		=> 'Asia/Ujung_Pandang', 
		'8.00'		=> 'Asia/Ulaanbaatar', 
		'8.00'		=> 'Asia/Ulan_Bator', 
		'8.00'		=> 'Asia/Urumqi', 
		'7.00'		=> 'Asia/Vientiane', 
		'10.00'		=> 'Asia/Vladivostok',		// [UTC + 10] Australian Eastern Standard Time, Vladivostok Standard Time
		'9.00'		=> 'Asia/Yakutsk', 
		'5.00'		=> 'Asia/Yekaterinburg', 
		'4.00'		=> 'Asia/Yerevan',
		'-1.00'		=> 'Atlantic/Azores',		// [UTC - 1] 
		'-3.00'		=> 'Atlantic/Bermuda',		// [UTC - 3] 
		'-0.00'		=> 'Atlantic/Canary',		// [UTC - 0] 
		'-1.00'		=> 'Atlantic/Cape_Verde',	// [UTC - 1] Azores Standard Time, Cape Verde Time, Eastern Greenland Time
		'-0.00'		=> 'Atlantic/Faeroe',		// [UTC - 0] 
		'-0.00'		=> 'Atlantic/Faroe',		// [UTC - 0] 
		'+1.00'		=> 'Atlantic/Jan_Mayen',	// [UTC + 1] 
		'-0.00'		=> 'Atlantic/Madeira',		// [UTC - 0] 
		'-0.00'		=> 'Atlantic/Reykjavik',	// [UTC - 0] 
		'-0.00'		=> 'Atlantic/St_Helena',	// [UTC - 0] 
		'-3.00'		=> 'Atlantic/Stanley',		// [UTC - 3]
		'10.00'		=> 'Australia/ACT', 		// [UTC + 10]
		'9.50'		=> 'Australia/Adelaide', 	// [UTC + 9:30]
		'10.00'		=> 'Australia/Brisbane',	// [UTC + 10] 
		'9.50'		=> 'Australia/Broken_Hill',	// [UTC + 9:30] 
		'10.00'		=> 'Australia/Canberra',	// [UTC + 10] 
		'10.00'		=> 'Australia/Currie',		// [UTC + 10] 
		'9.50'		=> 'Australia/Darwin',		// [UTC + 9:30] 
		'9.75'		=> 'Australia/Eucla',		// [UTC + 9:45] 
		'10.00'		=> 'Australia/Hobart',		// [UTC + 10] 
		'10.50'		=> 'Australia/LHI',			// [UTC + 10] 
		'10.00'		=> 'Australia/Lindeman',	// [UTC + 10] 
		'10.50'		=> 'Australia/Lord_Howe',	// [UTC + 10:30] Lord Howe Standard Time
		'10.00'		=> 'Australia/Melbourne', 	// [UTC + 10]
		'10.00'		=> 'Australia/NSW',			// [UTC + 10] 
		'9.50'		=> 'Australia/North',		// [UTC + 9:30] 
		'8.00'		=> 'Australia/Perth',		// [UTC + 8] 
		'10.00'		=> 'Australia/Queensland',	// [UTC + 10] 
		'9.50'		=> 'Australia/South',		// [UTC + 9:30] 
		'10.00'		=> 'Australia/Sydney',		// [UTC + 10] 
		'10.00'		=> 'Australia/Tasmania',	// [UTC + 10] 
		'10.00'		=> 'Australia/Victoria',	// [UTC + 10] 
		'8.00'		=> 'Australia/West',		// [UTC + 8] 
		'9.50'		=> 'Australia/Yancowinna',	// [UTC + 9:30]
		'1.00'		=> 'Europe/Amsterdam',		// [UTC + 1] 
		'1.00'		=> 'Europe/Andorra', 		// [UTC + 1] 
		'2.00'		=> 'Europe/Athens',			// [UTC + 2]  
		'0.00'		=> 'Europe/Belfast', 		// [UTC] Western European Time, Greenwich Mean Time
		'1.00'		=> 'Europe/Belgrade', 		// [UTC + 1] 
		'1.00'		=> 'Europe/Berlin',			// [UTC + 1] 
		'1.00'		=> 'Europe/Bratislava',		// [UTC + 1]  
		'1.00'		=> 'Europe/Brussels',		// [UTC + 1]  
		'2.00'		=> 'Europe/Bucharest',		// [UTC + 2]   
		'1.00'		=> 'Europe/Budapest',		// [UTC + 1]  
		'2.00'		=> 'Europe/Chisinau',		// [UTC + 2]  
		'1.00'		=> 'Europe/Copenhagen',		// [UTC + 1]  
		'0.00'		=> 'Europe/Dublin',			// [UTC] Western European Time, Greenwich Mean Time 
		'1.00'		=> 'Europe/Gibraltar',		// [UTC + 1]  
		'0.00'		=> 'Europe/Guernsey',		// [UTC] Western European Time, Greenwich Mean Time 
		'2.00'		=> 'Europe/Helsinki',		// [UTC + 2]  
		'0.00'		=> 'Europe/Isle_of_Man',	// [UTC] Western European Time, Greenwich Mean Time 
		'2.00'		=> 'Europe/Istanbul',		// [UTC + 2]  
		'0.00'		=> 'Europe/Jersey',			// [UTC] Western European Time, Greenwich Mean Time  
		'2.00'		=> 'Europe/Kaliningrad',	// [UTC + 2] Eastern European Time, Central African Time 
		'2.00'		=> 'Europe/Kiev',			// [UTC + 2] Eastern European Time, Central African Time
		'0.00'		=> 'Europe/Lisbon', 		// [UTC] Western European Time, Greenwich Mean Time 
		'1.00'		=> 'Europe/Ljubljana',		// [UTC + 1]  
		'0.00'		=> 'Europe/London',			// [UTC] Western European Time, Greenwich Mean Time
		'1.00'		=> 'Europe/Luxembourg',		// [UTC + 1]  
		'1.00'		=> 'Europe/Madrid',			// [UTC + 1]  
		'1.00'		=> 'Europe/Malta',			// [UTC + 1]  
		'2.00'		=> 'Europe/Mariehamn',		// [UTC + 2]  
		'2.00'		=> 'Europe/Minsk',			// [UTC + 2]  
		'1.00'		=> 'Europe/Monaco',			// [UTC + 1]  
		'3.00'		=> 'Europe/Moscow',			// [UTC + 3] Moscow Standard Time, Eastern African Time
		'2.00'		=> 'Europe/Nicosia',		// [UTC + 2]  
		'1.00'		=> 'Europe/Oslo',			// [UTC + 1]   
		'1.00'		=> 'Europe/Paris',			// [UTC + 1]   
		'1.00'		=> 'Europe/Podgorica',		// [UTC + 1]   
		'1.00'		=> 'Europe/Prague',			// [UTC + 1]   
		'2.00'		=> 'Europe/Riga',			// [UTC + 2]  
		'1.00'		=> 'Europe/Rome', 			// [UTC + 1]  
		'4.00'		=> 'Europe/Samara',			// [UTC + 4]  
		'1.00'		=> 'Europe/San_Marino',		// [UTC + 1]   
		'1.00'		=> 'Europe/Sarajevo',		// [UTC + 1]   
		'2.00'		=> 'Europe/Simferopol',		// [UTC + 2]  
		'1.00'		=> 'Europe/Skopje',			// [UTC + 1]   
		'2.00'		=> 'Europe/Sofia',			// [UTC + 2]  
		'1.00'		=> 'Europe/Stockholm', 		// [UTC + 1]  
		'2.00'		=> 'Europe/Tallinn',		// [UTC + 2]  
		'1.00'		=> 'Europe/Tirane', 		// [UTC + 1]  
		'2.00'		=> 'Europe/Tiraspol',		// [UTC + 2]  
		'2.00'		=> 'Europe/Uzhgorod',		// [UTC + 2]  
		'1.00'		=> 'Europe/Vaduz', 			// [UTC + 1]  
		'1.00'		=> 'Europe/Vatican', 		// [UTC + 1]  
		'1.00'		=> 'Europe/Vienna',			// [UTC + 1]   
		'2.00'		=> 'Europe/Vilnius', 		// [UTC + 2] 
		'3.00'		=> 'Europe/Volgograd',		// [UTC + 3]  
		'1.00'		=> 'Europe/Warsaw', 		// [UTC + 1]  
		'1.00'		=> 'Europe/Zagreb',			// [UTC + 1]  
		'2.00'		=> 'Europe/Zaporozhye',		// [UTC + 2]  
		'1.00'		=> 'Europe/Zurich',			// [UTC + 1]  
		'3.00'		=> 'Indian/Antananarivo', 	// [UTC + 3]
		'6.00'		=> 'Indian/Chagos', 		// [UTC + 6]
		'3.00'		=> 'Indian/Comoro', 		// [UTC + 3]
		'5.00'		=> 'Indian/Kerguelen', 		// [UTC + 5]
		'4.00'		=> 'Indian/Mahe', 			// [UTC + 4]
		'5.00'		=> 'Indian/Maldives', 		// [UTC + 5]
		'4.00'		=> 'Indian/Mauritius', 		// [UTC + 4]
		'3.00'		=> 'Indian/Mayotte', 		// [UTC + 3]
		'4.00'		=> 'Indian/Reunion',		// [UTC + 4]
		'-11.00'	=> 'Pacific/Apia', 			// [UTC - 11] Niue Time, Apia Standard Time
		'12.00'		=> 'Pacific/Auckland',		// [UTC + 12] New Zealand Time, Fiji Time, Kamchatka Standard Time
		'12.75'		=> 'Pacific/Chatham',		// [UTC + 12:45] Chatham Islands Time
		'-6.00'		=> 'Pacific/Easter',        // [UTC - 6]
		'11.00'		=> 'Pacific/Efate', 		// [UTC + 11]
		'13.00'		=> 'Pacific/Enderbury', 	// [UTC + 13]
		'12.00'		=> 'Pacific/Fiji', 			// [UTC + 12]
		'-6.00'		=> 'Pacific/Galapagos',     // [UTC - 6]
		'-8.00'		=> 'Pacific/Gambier', 		// [UTC - 8]
		'11.00'		=> 'Pacific/Guadalcanal',	// [UTC + 11] Solomon Island Time, Magadan Standard Time
		'10.00'		=> 'Pacific/Guam', 			// [UTC + 10]
		'-10.00'	=> 'Pacific/Honolulu', 		// [UTC - 10]
		'14.00'		=> 'Pacific/Kiritimati',	// [UTC + 14] Line Island Time
		'12.00'		=> 'Pacific/Kosrae', 		// [UTC + 12]
		'12.00'		=> 'Pacific/Kwajalein',		// [UTC + 12] 
		'12.00'		=> 'Pacific/Majuro', 		// [UTC + 12]
		'-9.50'		=> 'Pacific/Marquesas', 	// [UTC - 9:30]
		'-11.00'	=> 'Pacific/Midway', 		// [UTC - 11]
		'12.00'		=> 'Pacific/Nauru', 		// [UTC + 12]
		'-11.00'	=> 'Pacific/Niue', 			// [UTC - 11] Niue Time, Niue Standard Time
		'11.50'		=> 'Pacific/Norfolk',		// [UTC + 11:30] Norfolk Island Time
		'11.00'		=> 'Pacific/Noumea', 		// [UTC + 11]
		'-11.00'	=> 'Pacific/Pago_Pago', 	// [UTC - 11]
		'-8.00'		=> 'Pacific/Pitcairn', 		// [UTC - 8] 
		'-10.00'	=> 'Pacific/Rarotonga', 	// [UTC - 10]
		'10.00'		=> 'Pacific/Saipan', 		// [UTC + 10]
		'-11.00'	=> 'Pacific/Samoa',			// [UTC - 11] Niue Time, Samoa Standard Time
		'-10.00'	=> 'Pacific/Tahiti',		// [UTC - 10] Hawaii-Aleutian Standard Time, Cook Island Time
		'13.00'		=> 'Pacific/Tongatapu',		// [UTC + 13] Tonga Time, Phoenix Islands Time
		);
}
?>