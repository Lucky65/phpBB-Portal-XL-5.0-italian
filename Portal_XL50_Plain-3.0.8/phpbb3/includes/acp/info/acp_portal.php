<?php
/** 
*
* @name acp_portal.php
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal.php,v 1.2 2009/05/15 22:13:03 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/

class acp_portal_info
{
   function module()
   {
      return array(
         'filename'   => 'acp_portal',
         'title'      => 'ACP_PORTAL_INFO',
         'version'    => '1.0.0',
         'modes'      => array(
         		'portal'   			=> array('title' => 'ACP_PORTAL_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL', 'ACP_PORTAL_ADMIN')),
         		'announcements'   	=> array('title' => 'ACP_PORTAL_ANNOUNCE_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
         		'news'   			=> array('title' => 'ACP_PORTAL_NEWS_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
         		'recent'   			=> array('title' => 'ACP_PORTAL_RECENT_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
         		'wordgraph'   		=> array('title' => 'ACP_PORTAL_WORDGRAPH_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
         		'paypal'   			=> array('title' => 'ACP_PORTAL_PAYPAL_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
         		'attachments'   	=> array('title' => 'ACP_PORTAL_ATTACHMENTS_NUMBER_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
         		'members'   		=> array('title' => 'ACP_PORTAL_MEMBERS_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
         		'polls'   		    => array('title' => 'ACP_PORTAL_POLLS_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
         		'bots'   		    => array('title' => 'ACP_PORTAL_BOTS_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
         		'poster'   		    => array('title' => 'ACP_PORTAL_MOST_POSTER_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
         		'welcome'   		=> array('title' => 'ACP_PORTAL_WELCOME_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
         		'weather'   	    => array('title' => 'ACP_PORTAL_WEATHER_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
         		'scrollmessage'     => array('title' => 'ACP_PORTAL_SCROLL_MESSAGE_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
         		'metatags'     		=> array('title' => 'ACP_PORTAL_METATAGS_INFO', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),
				'counter'			=> array('title' => 'ACP_COUNTER_SETTINGS', 'auth' => 'acl_a_board', 'cat' => array('ACP_PORTAL_ADMIN')),

         ),
      );
   }

   function install()
   {
   }

   function uninstall()
   {
   }
}

?>
