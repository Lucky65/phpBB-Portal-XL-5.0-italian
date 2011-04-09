<?php
/** 
*
* @author Tobi Schäfer http://www.phpbb-seo.de/
*
* @package acp
* @version $Id: acp_impressum.php,v 1.1.1.1 2009/05/15 05:14:11 damysterious Exp $
* @copyright (c) 2008 SEO phpBB phpbb-seo.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/


/**
* @package acp
*/
class acp_impressum
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('mods/impressum');
		$this->tpl_name = 'acp_impressum';
		$this->page_title = $user->lang['IMPRESSUM'];

		// Update
		$submit	= (isset($_POST['submit'])) ? true : false;
		if ($submit)
		{
			for($i = 1; $i <= 19; $i++)
			{
				$value = $db->sql_escape(request_var('T' . $i, '', true));
				$show = ( isset($_POST["C$i"]) ) ? '1' :'0';
				
				$sql = "UPDATE " . IMPRESSUM_TABLE . " 
						SET value = '$value', aktiv = '$show'
						WHERE name = '$i'";
				$db->sql_query($sql);
			}
			trigger_error($user->lang['IMPRESSUM_UPDATED'] . adm_back_link($this->u_action));
		}


		// Select Data from DB
		$sql = 'SELECT *
			FROM ' . IMPRESSUM_TABLE . '
			ORDER BY name';
		$result = $db->sql_query($sql);
		
		for ($i = 1; $row = $db->sql_fetchrow($result); $i++)
		{
			$value[$i] = $row['value'];
			if ( $row['aktiv'] != '0' )
			{
				$show[$i] = 'checked';
			}
			$template->assign_vars(array(
				'T'.$i  => isset ($value[$i]) ? $value[$i] : '',
				'C'.$i  => isset ($show[$i]) ? $show[$i] : '',
			));
		}
		$db->sql_freeresult($result);

		$template->assign_vars(array(
			'U_ACTION'		=> $this->u_action)
		);

	}
}

?>