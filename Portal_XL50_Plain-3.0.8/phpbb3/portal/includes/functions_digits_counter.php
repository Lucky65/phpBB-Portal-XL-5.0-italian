<?php
/*
*
* @name functions_digits_counter.php
* @package phpBB3 Portal XL 5.0
* @version $Id: functions_digits_counter.php,v 1.2 2009/05/15 22:32:09 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Original of this script from Simple Animated Counter PHP 1.1 by Chi Kien Uong (http://www.proxy2.de)
* Re-written by damysterious for use with phpBB3 Portal XL 5.0.
* Database is used to store hits values of counter, so you do not need a file called "counter.txt" anymore.
*/

class display_counter
{
	var $portal_config = array();
	var $config = array();

	function display_counter()
	{
		global $config, $portal_config, $phpbb_root_path, $cache;

		$this->portal_config['portal_counter_digits_path'] = $phpbb_root_path . $portal_config['portal_counter_digits_path'];
		$this->portal_config['portal_counter_digits_ani_path'] = $phpbb_root_path . $portal_config['portal_counter_digits_ani_path'];
		$this->portal_config['portal_counter_digits_number'] = $portal_config['portal_counter_digits_number'];
		$this->portal_config['portal_counter_block_ip'] = $portal_config['portal_counter_block_ip'];
		$this->portal_config['portal_counter_block_time'] = $portal_config['portal_counter_block_time'];
		$this->portal_config['portal_counter_ip_logfile'] = $phpbb_root_path . $portal_config['portal_counter_ip_logfile'];
		$this->portal_config['portal_counter_digits_height'] = $portal_config['portal_counter_digits_height'];
		$this->portal_config['portal_counter_digits_width'] = $portal_config['portal_counter_digits_width'];
	}

    function is_new_visitor()
	{
		$is_new = true;
		$rows = @file($this->portal_config['portal_counter_ip_logfile']);
		$this_time = time();
		$ip = getenv('REMOTE_ADDR');
		$reload_dat = fopen($this->portal_config['portal_counter_ip_logfile'], 'wb');

		flock($reload_dat, 2);

		for ($i = 0; $i < sizeof($rows); $i++)
		{
			list($time_stamp, $ip_addr) = preg_split('/|/', $rows[$i]);

			if ($this_time < ($time_stamp + $this->portal_config['portal_counter_block_time']))
			{
				if (chop($ip_addr) == $ip)
				{
					$is_new = false;
				}
				else
				{
					fwrite($reload_dat, "$time_stamp|$ip_addr");
				}
			}
		}

		fwrite($reload_dat, "$this_time|$ip\n");
		flock($reload_dat, 3);
		fclose($reload_dat);

		return $is_new;
	}

	function read_counter()
	{
		global $config, $portal_config, $phpbb_root_path, $cache;

		$update = false;
		$this->counter = $portal_config['portal_visit_counter'];

		if ($this->portal_config['portal_counter_block_ip'])
		{
			if ($this->is_new_visitor())
			{
				$this->counter++;
				$update = true;
			}
		}
		else
		{
			$this->counter++;
			$update = true;
		}

		if ($update)
		{
			set_portal_config('portal_visit_counter', $this->counter, true);
			// clear cache to refresh counter values immediately after update
			$cache->purge();
		}

		return $this->counter;
	}

	function create_output()
	{
		$this->read_counter();
		$this->counter = sprintf("%0" . "" . $this->portal_config['portal_counter_digits_number'] . "" . "d", $this->counter);

		$ani_digits = sprintf("%0" . "" . $this->portal_config['portal_counter_digits_number'] . "" . "d", $this->counter + 0);
		$html_output = '';

		for ($i = 0; $i < strlen($this->counter); $i++)
		{
			if (substr("$this->counter", $i, 1) == substr("$ani_digits", $i, 1))
			{
				$digit_pos = substr("$this->counter", $i, 1);
				$html_output .= '<img src="' . $this->portal_config['portal_counter_digits_path'] . '/' . $digit_pos . '.gif"';
			}
			else
			{
				$digit_pos = substr("$ani_digits", $i, 1);
				$html_output .= '<img src="' . $this->portal_config['portal_counter_digits_ani_path'] . '/' . $digit_pos. '.gif"';
			}

			$html_output .= ' alt="' . $ani_digits . '"  width="' . $this->portal_config['portal_counter_digits_width'] . '" height="' . $this->portal_config['portal_counter_digits_height'] . '" />';
		}

		return $html_output;
	}
}

?>