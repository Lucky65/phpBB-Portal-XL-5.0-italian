<?php

/** 
*
* @mod package		Download Mod 6
* @file				dl_code.php 3 2009/08/13 OXPUS
* @copyright		(c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* @copyright mod	(c) hotschi / demolition fabi / oxpus
* @license			http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/*
* connect to phpBB
*/
if ( !defined('IN_PHPBB') )
{
	exit;
}

if ($code != 'oxpus123')
{
	$hotlink_id = ($code == 'd') ? 'dlvc' : 'repvc';

	$sql = 'SELECT code FROM ' . DL_HOTLINK_TABLE . '
		WHERE user_id = ' . $user->data['user_id'] . "
			AND hotlink_id = '" . $hotlink_id . "'";
	$sql .= (!$user->data['is_registered']) ? " AND session_id = '" . $user->data['session_id'] . "' " : '';
	$result = $db->sql_query($sql);
	$code	= $db->sql_fetchfield('code');
	$db->sql_freeresult($result);

	if (!$code)
	{
		trigger_error('ERROR', E_USER_WARNING);
	}
}

if ($config['captcha_gd'])
{
	include($phpbb_root_path . 'includes/captcha/captcha_gd.' . $phpEx);
}
else
{
	include($phpbb_root_path . 'includes/captcha/captcha_non_gd.' . $phpEx);
}

$captcha = new captcha();
$captcha->execute($code, 0);

garbage_collection();
exit_handler();

?>