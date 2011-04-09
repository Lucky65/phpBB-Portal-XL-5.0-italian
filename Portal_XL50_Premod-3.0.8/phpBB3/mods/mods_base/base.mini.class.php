<?php

class mods_base_mini_class
{
    function __construct()
    {
        global $config;
        if($config['server_port']==80)
        {
            $this->phpbb_base_url = $config['server_name'] . $this->check_path($config['script_path']);
        }
        else
        {
            $this->phpbb_base_url = $config['server_name'] . ':' . $config['server_port'] . $this->check_path($config['script_path']);
        }
    }
    function get_url($url)
	{
		if(function_exists('curl_init') && function_exists('curl_setopt') && function_exists('curl_exec') && function_exists('curl_close'))
		{
			$process = curl_init($url);
			curl_setopt($process, CURLOPT_HTTPHEADER, array('Accept: */*','Connection: Keep-Alive','Content-type: application/x-www-form-urlencoded;charset=UTF-8'));
			curl_setopt($process, CURLOPT_HEADER, 0);
			curl_setopt($process, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)');
			curl_setopt($process, CURLOPT_ENCODING, 'gzip');
			curl_setopt($process, CURLOPT_ENCODING, 'gzip');
			curl_setopt($process, CURLOPT_REFERER, "http://" . $this->phpbb_base_url);
			curl_setopt($process, CURLOPT_TIMEOUT, 30);
			curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
			$return = curl_exec($process);
			curl_close($process);
			return $return;
		}
		else
		{
		   // get the host name and url path
		   $parsed_url = parse_url($url);
		   $host = $parsed_url['host'];
		   if(isset($parsed_url['path']))
		   {
			   $path = $parsed_url['path'];
		   }
		   else
		   {
			   $path = '/';
		   }
		   if(isset($parsed_url['query']))
		   {
			   $path .= '?' . $parsed_url['query'];
		   }
		   if (isset($parsed_url['port']))
		   {
			   $port = $parsed_url['port'];
		   }
		   else
		   {
			   $port = '80';
		   }
		   $timeout = 10;
		   $response = '';
		   // connect to the remote server
		   $fp = @fsockopen($host, '80', $errno, $errstr, $timeout );
		   if( !$fp )
		   {
			   return false;
		   }
		   else
		   {
			$put =  "GET $path HTTP/1.0\r\n" .
				"Host: $host\r\n" .
				"User-Agent: Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)\r\n" .
				"Accept: */*\r\n" .
				"Accept-Language: en-us,en;q=0.5\r\n" .
				"Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7\r\n" .
				"Keep-Alive: 300\r\n" .
				"Connection: keep-alive\r\n" .
				"Referer: http://" . $this->phpbb_base_url . "\r\n\r\n";
			// send the necessary headers to get the file
			fputs($fp,$put);
			// retrieve the response from the remote server
			while(!feof($fp) && $line = fread($fp, 4096))
			{
				$response .= $line;
			}
			fclose( $fp );
			// strip the headers
			$pos = strpos($response, "\r\n\r\n");
			$response = substr($response, $pos + 4);
			// return the file content
			return $response;
		   }
		}
	}

    function add_points($user_id,$amount)
    {
        $field = $this->points_field();
        if($field)
        {
            global $db,$config;
            $sql = "UPDATE " . USERS_TABLE . " SET " . $field . " = " . $field . " + " . $amount . "WHERE user_id = " . $user_id;
            return $db->sql_query($sql);
        }
        else
        {
            return false;
        }
    }

    function remove_points($user_id,$amount)
    {
        $field = $this->points_field();
        if($field)
        {
            global $db,$config;
            $sql = "UPDATE " . USERS_TABLE . " SET " . $field . " = " . $field . " - " . $amount . "WHERE user_id = " . $user_id;
            return $db->sql_query($sql);
        }
        else
        {
            return false;
        }
    }

    function points_field()
    {
        // Find out what points mod is installed
        if(defined('IN_ULTIMATE_POINTS'))
        {
            $field = 'user_points';
        }
        else
        {
            $field = false;
        }
        return $field;
    }

    function send_notify($row,$template_name,$args)
    {
        global $phpEx,$phpbb_root_path;
		include_once($phpbb_root_path . 'includes/functions_messenger.' . $phpEx);
		$messenger = new messenger();
                $messenger->template($template_name, $row['user_lang']);

                $messenger->to($row['user_email'], $row['username']);
                $messenger->im($row['user_jabber'], $row['username']);
                $messenger->assign_vars($args);
                $messenger->send($row['user_notify_type']);
		$messenger->save_queue();
    }
	function check_path($path)
	{
		if(substr($path,-1,1)!='/')
		{
			$path .= '/';
		}
		return $path;
	}
	function add_nav_item($text,$link)
	{
		global $template;
		$template->assign_block_vars('navlinks', array(
			'FORUM_NAME'	=> $text,
			'U_VIEW_FORUM'	=> $link)
		);
	}


    function lockcron($configid)
    {
        global $db,$config;
        if($config[$configid]!='notlocked')
        {
            return false;
        }
        else
        {
            $hash = md5(mt_rand(0,time()) * time() . serialize(var_export($_SERVER,true)));
            $sql = $db->sql_build_query('SELECT',
                array(
                    'SELECT'   => 'c.*',
                    'FROM'      => array(
                        CONFIG_TABLE   => 'c',
                    ),
                    'WHERE' => 'c.config_name = \'' . $configid . '\''
                )
            );
            $result = $db->sql_query($sql);
            while($row = $db->sql_fetchrow($result))
            {
                if($row['config_value']!='notlocked')
                {
                    return false;
                }
            }
            set_config('toplist_cron_lock', 'notlocked', true);
            sleep(1);
            $sql = $db->sql_build_query('SELECT',
                array(
                    'SELECT'   => 'c.*',
                    'FROM'      => array(
                        CONFIG_TABLE   => 'c',
                    ),
                    'WHERE' => 'c.config_name = \'' . $configid . '\''
                )
            );
            $result = $db->sql_query($sql);
            while($row = $db->sql_fetchrow($result))
            {
                if($row['config_value']!=$hash)
                {
                    return false;
                }
            }
            return true;
        }
    }

    function unlockcron($configid)
    {
        global $db;
        set_config($configid, 'notlocked', true);
    }

function group_memberships($group_id_ary = false, $user_id_ary = false, $return_bool = false)
{
	global $db;

	if (!$group_id_ary && !$user_id_ary)
	{
		return true;
	}

	if ($user_id_ary)
	{
		$user_id_ary = (!is_array($user_id_ary)) ? array($user_id_ary) : $user_id_ary;
	}

	if ($group_id_ary)
	{
		$group_id_ary = (!is_array($group_id_ary)) ? array($group_id_ary) : $group_id_ary;
	}

	$sql = 'SELECT ug.*, u.username, u.username_clean, u.user_email
		FROM ' . USER_GROUP_TABLE . ' ug, ' . USERS_TABLE . ' u
		WHERE ug.user_id = u.user_id
			AND ug.user_pending = 0 AND ';

	if ($group_id_ary)
	{
		$sql .= ' ' . $db->sql_in_set('ug.group_id', $group_id_ary);
	}

	if ($user_id_ary)
	{
		$sql .= ($group_id_ary) ? ' AND ' : ' ';
		$sql .= $db->sql_in_set('ug.user_id', $user_id_ary);
	}

	$result = ($return_bool) ? $db->sql_query_limit($sql, 1) : $db->sql_query($sql);

	$row = $db->sql_fetchrow($result);

	if ($return_bool)
	{
		$db->sql_freeresult($result);
		return ($row) ? true : false;
	}

	if (!$row)
	{
		return false;
	}

	$return = array();

	do
	{
		$return[] = $row;
	}
	while ($row = $db->sql_fetchrow($result));

	$db->sql_freeresult($result);

	return $return;
    }
}

?>