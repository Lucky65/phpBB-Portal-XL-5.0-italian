<?php
/*
*
* @name scroll_message.php
* @package phpBB3 Portal XL 5.0
* @version $Id: scroll_message.php,v 1.2 2009/05/15 22:32:06 damysterious Exp $
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
*/

/*
* Start session management
*/

/*
* Begin block script here
*/
	$scroll_message_display 				= $portal_config['portal_scroll_message_display'];
	$scroll_message_marquee 				= $portal_config['portal_scroll_message_marquee'];
	$scroll_message_marquee_fontcolor 		= $portal_config['portal_scroll_message_marquee_fontcolor'];
	$scroll_message_marquee_fontsize 		= $portal_config['portal_scroll_message_marquee_fontsize'];
	$scroll_message_marquee_direction 		= $portal_config['portal_scroll_message_marquee_direction'];
	$scroll_message_marquee_speed 			= $portal_config['portal_scroll_message_marquee_speed'];
	$scroll_message_text 					= $portal_config['portal_scroll_message_text'];
	
	$scroll_message_marquee_scrolldelay 	= $portal_config['portal_scroll_message_marquee_scrolldelay'];
	$scroll_message_marquee_align 			= $portal_config['portal_scroll_message_marquee_align'];
	$scroll_message_marquee_behavior 		= $portal_config['portal_scroll_message_marquee_behavior'];
	$scroll_message_marquee_bgcolor 		= $portal_config['portal_scroll_message_marquee_bgcolor'];
	$scroll_message_marquee_height 			= $portal_config['portal_scroll_message_marquee_height'];
	$scroll_message_marquee_width 			= $portal_config['portal_scroll_message_marquee_width'];
	$scroll_message_marquee_hspace 			= $portal_config['portal_scroll_message_marquee_hspace'];
	$scroll_message_marquee_vspace 			= $portal_config['portal_scroll_message_marquee_vspace'];
	$scroll_message_marquee_loop 			= $portal_config['portal_scroll_message_marquee_loop'];
	
	$template->assign_block_vars('scrollmessage', array(
//		'S_PORTAL_SCROLL_MESSAGE'   			=> (isset ($scroll_message_display)) ? $scroll_message_display : 0,
		'SCROLL_MESSAGE_MARQUEE' 				=> $scroll_message_marquee,
		'SCROLL_MESSAGE_MARQUEE_FONTCOLOR' 		=> $scroll_message_marquee_fontcolor,
		'SCROLL_MESSAGE_MARQUEE_FONTSIZE' 		=> $scroll_message_marquee_fontsize,
		'SCROLL_MESSAGE_MARQUEE_DIRECTION' 		=> $scroll_message_marquee_direction,
		'SCROLL_MESSAGE_MARQUEE_SPEED' 	    	=> $scroll_message_marquee_speed,
		'SCROLL_MESSAGE_MARQUEE_SCROLLDELAY' 	=> $scroll_message_marquee_scrolldelay, 
		'SCROLL_MESSAGE_MARQUEE_ALIGN' 			=> $scroll_message_marquee_align,       
		'SCROLL_MESSAGE_MARQUEE_BEHAVIOR' 		=> $scroll_message_marquee_behavior,    
		'SCROLL_MESSAGE_MARQUEE_BGCOLOR' 		=> $scroll_message_marquee_bgcolor,    
		'SCROLL_MESSAGE_MARQUEE_HEIGHT' 		=> $scroll_message_marquee_height,     
		'SCROLL_MESSAGE_MARQUEE_WIDTH' 			=> $scroll_message_marquee_width,      
		'SCROLL_MESSAGE_MARQUEE_HSPACE' 		=> $scroll_message_marquee_hspace,     
		'SCROLL_MESSAGE_MARQUEE_VSPACE' 		=> $scroll_message_marquee_vspace,      
		'SCROLL_MESSAGE_MARQUEE_LOOP' 			=> $scroll_message_marquee_loop,        
		'SCROLL_MESSAGE_TEXT'					=> sprintf(htmlspecialchars_decode($scroll_message_text)),
		'L_SCROLL_MESSAGE'						=> $user->lang['SCROLL_MESSAGE'],
		));

// Set the filename of the template you want to use for this file.
$template->set_filenames(array(
    'body' => 'portal/block/scroll_message.html',
	));

?>