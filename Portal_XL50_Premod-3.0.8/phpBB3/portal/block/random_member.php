<?php
/*
*
* @name random_member.php
* @package phpBB3 Portal XL 5.0
* @version $Id: random_member.php,v 1.4 2010/01/22 damysterious Exp $
*
* @copyright (c) 2007, 2010 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
*/

/*
* Start session management
*/

/*
* Begin block script here
*/
$avatar_img = '';

$sql = 'SELECT *
	FROM ' . USERS_TABLE . '
	WHERE user_type <> ' . USER_IGNORE . '
	AND user_type <> ' . USER_INACTIVE . '
	ORDER BY RAND() 
	LIMIT 0,1';
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);

	if ($row['user_avatar'] && $user->optionget('viewavatars'))
	{
		$avatar_img = '';
		
		switch ($row['user_avatar_type'])
		{
			case AVATAR_UPLOAD:
			    $avatar_img = $phpbb_root_path . "download/file.$phpEx?avatar=";
			break;

			case AVATAR_GALLERY:
			    $avatar_img = $phpbb_root_path . $config['avatar_gallery_path'] . '/';
			break;
		}
		
	  $avatar_img .= $row['user_avatar'];
	  $avatar_img = '<img src="' . $avatar_img . '" width="' . $row['user_avatar_width'] . '" height="' . $row['user_avatar_height'] . '" alt="' . $row['username'] . '" title="' . $row['username'] . '" />';
	}

  if ($row['user_colour'])
   {
	  $user_colour = ($row['user_colour']) ? ' style="color:#' . $row['user_colour'] .'" onmouseover="show_popup(' .$row['user_id']. ')" onmouseout="close_popup()"' : '';
	  $row['username'] = '<strong>' . $row['username'] . '</strong>';
   }
  else
   {
	  $user_colour = '';
   }

   // Country Flags Version 3.0.6
   if ($user->data['user_id'] != ANONYMOUS)
   {
	  $flag_title = $flag_img = $flag_img_src = '';
	  get_user_flag($row['user_country_flag'], $row['user_country'], $flag_title, $flag_img, $flag_img_src);
   }
   // Country Flags Version 3.0.6
	
   $row['username'] = '<b style="color:#' . $row['user_colour'] . '">' . $row['username'] . '</b> ' . $flag_img;

$template->assign_block_vars('random_member', array(
	'USERNAME'				=> censor_text($row['username']),
	'USERNAME_COLOR'		=> $user_colour,
	'U_USERNAME'			=> append_sid("{$phpbb_root_path}memberlist.$phpEx", 'mode=viewprofile&amp;u=' . $row['user_id']),

	'RANK_TITLE'			=> $rank_title,
	'RANK_IMG'				=> $rank_img,
	'RANK_IMG_SRC'			=> $rank_img_src,

	'USER_POSTS'			=> (int) $row['user_posts'],
	'USER_AVATAR'			=> $avatar_img,
	'NO_USER_AVATAR'		=> '<img src="' . $phpbb_root_path . 'styles/' . $user->theme['template_path'] . '/theme/images/no_avatar.gif" alt="" />',
    'S_SEARCH_ACTION'		=> append_sid("{$phpbb_root_path}search.$phpEx", 'author_id=' . $row['user_id'] . '&amp;sr=posts'),
	
	'JOINED'		        => $user->format_date($row['user_regdate'], 'd.M.Y'),
	'USER_OCC'				=> censor_text($row['user_occ']),
	'USER_FROM'				=> censor_text($row['user_from']),
	'U_WWW'					=> censor_text($row['user_website']),
	));
$db->sql_freeresult($result);

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/random_member.html',
	));

?>