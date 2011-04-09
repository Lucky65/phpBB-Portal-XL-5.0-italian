<?php

/** 
*
* @mod package		Download Mod 6
* @file				hacks_list.php 4 2009/12/22 OXPUS
* @copyright		(c) 2005 oxpus (Karsten Ude) <webmaster@oxpus.de> http://www.oxpus.de
* @copyright mod	(c) hotschi / demolition fabi / oxpus
* @license			http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/*
* connect to phpBB
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

/*
* session management
*/
$user->session_begin();
$auth->acl($user->data);
$user->setup();

/*
* init and get various values
*/
$sort_by	= request_var('sort_by', '');
$order		= request_var('order', '');
$start		= request_var('start', 0);

$s_sort_by = '<select name="sort_by" onchange="if(this.options[this.selectedIndex].value != -1){ forms[\'hacklist\'].submit() }">';
$s_sort_by .= '<option value="0">'.$user->lang['DL_DEFAULT_SORT'].'</option>';
$s_sort_by .= '<option value="1">'.$user->lang['DL_FILE_DESCRIPTION'].'</option>';
$s_sort_by .= '<option value="2">'.$user->lang['DL_HACK_AUTOR'].'</option>';
$s_sort_by .= '</select>';
$s_sort_by = str_replace('value="'.$sort_by.'">', 'value="'.$sort_by.'" selected="selected">', $s_sort_by);

$s_order = '<select name="order" onchange="if(this.options[this.selectedIndex].value != -1){ forms[\'hacklist\'].submit() }">';
$s_order .= '<option value="ASC">'.$user->lang['ASCENDING'].'</option>';
$s_order .= '<option value="DESC">'.$user->lang['DESCENDING'].'</option>';
$s_order .= '</select>';
$s_order = str_replace('value="'.$order.'">', 'value="'.$order.'" selected="selected">', $s_order);

switch ($sort_by)
{
	case 1:
		$sql_sort_by = 'long_desc';
		break;
	case 2:
		$sql_sort_by = 'hack_author';
		break;
	default:
		$sql_sort_by = 'description';
}

$sql_order = ($order) ? $order : 'ASC';

/*
* include and create the hacklist class
*/
include($phpbb_root_path . 'dl_mod/classes/class_hacklist.' . $phpEx);

$hacklist = array();
$hacklist = $dl_mod->hacks_index();
$status = $config['dl_use_hacklist'];

if (!$status || !sizeof($hacklist))
{
	redirect(append_sid("{$phpbb_root_path}index.$phpEx"));
}

page_header($user->lang['DL_HACKS_LIST']);

$template->set_filenames(array(
	'body' => 'dl_mod/hacks_list_body.html')
);

$dl_files = array();
$dl_files = $dl_mod->all_files($sql_sort_by, $sql_order, $start, $config['topics_per_page']);

$all_files = array();
$all_files = $dl_mod->all_files('id', 'ASC');

$pagination = ($all_files > $config['topics_per_page']) ? generate_pagination(append_sid("{$phpbb_root_path}hacks_list.$phpEx", "sort_by=$sort_by&amp;order=$order"), $all_files, $config['topics_per_page'], $start, true) : '';

$template->assign_vars(array(
	'L_NAME' => $user->lang['DL_NAME'],
	'L_DL_HACK_AUTHOR' => $user->lang['DL_HACK_AUTOR'],
	'L_DL_HACK_AUTHOR_WEBSITE' => $user->lang['DL_HACK_AUTOR_WEBSITE'],
	'L_DL_DESCRIPTION' => $user->lang['DL_FILE_DESCRIPTION'],
	'L_DL_HACK_DL_URL' => $user->lang['DL_HACK_DL_URL'],

	'L_SORT_BY' => $user->lang['SORT_BY'],
	'L_ORDER' => $user->lang['DL_ORDER'],
	'L_GO' => $user->lang['GO'],

	'PAGE_NAME' => $user->lang['DL_HACKS_LIST'],
	'PAGINATION' => $pagination,

	'S_SORT_BY' => $s_sort_by,
	'S_ORDER' => $s_order,
	'S_FORM_ACTION' => append_sid("{$phpbb_root_path}hacks_list.$phpEx"))
);

if (sizeof($dl_files))
{
	for ($i = 0; $i < sizeof($dl_files); $i++)
	{
		$cat_id = $dl_files[$i]['cat'];
		if ($hacklist[$cat_id])
		{
			$hack_name				= $dl_files[$i]['description'];
			$hack_author			= ($dl_files[$i]['hack_author'] != '') ? $dl_files[$i]['hack_author'] : 'n/a';
			$hack_author_email		= $dl_files[$i]['hack_author_email'];
			$hack_author_website	= $dl_files[$i]['hack_author_website'];
			$hackname				= ($dl_files[$i]['hacklist'] != '') ? '&nbsp;'.$dl_files[$i]['description'] : '';
			$hack_version			= ($dl_files[$i]['hacklist'] != '') ? '&nbsp;'.$dl_files[$i]['hack_version'] : '';
			$hack_dl_url			= $dl_files[$i]['hack_dl_url'];
			$description			= $dl_files[$i]['long_desc'];
			$uid					= $dl_files[$i]['long_desc_uid'];
			$bitfield				= $dl_files[$i]['long_desc_bitfield'];
			$flags					= $dl_files[$i]['long_desc_flags'];

			if ($uid)
			{
				$text_ary = generate_text_for_display($description, $uid, $bitfield, $flags);
				$description = $text_ary['text'];
			}

			$template->assign_block_vars('listrow', array(
				'CAT_NAME'				=> $hacklist[$cat_id],
				'HACK_NAME'				=> $hackname . $hack_version,
				'HACK_DESCRIPTION'		=> $description,
				'HACK_AUTHOR'			=> ($hack_author_email != '') ? '<a href="mailto:' . $hack_author_email . '">'.$hack_author.'</a>' : $hack_author,
				'HACK_AUTHOR_WEBSITE'	=> ($hack_author_website != '') ? '<a href="' . $hack_author_website . '">' . $user->lang['DL_HACK_AUTOR_WEBSITE'] . '</a>' : '',
				'HACK_DL_URL'			=> ($hack_dl_url != '') ? '<a href="' . $hack_dl_url . '">' . $user->lang['DL_DOWNLOAD'] . '</a>' : '')
			);
		}
	}
}

page_footer();

?>