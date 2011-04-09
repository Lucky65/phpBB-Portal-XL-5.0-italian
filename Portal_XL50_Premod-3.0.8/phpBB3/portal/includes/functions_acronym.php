<?php
/*
*
* @name functions_acronym.php
* @package phpBB3 Portal XL 5.0
* @version $Id: functions_acronym.php,v 1.4 2009/12/19 damysterious Exp $
*
* @copyright (c) 2007, 2009 Portal XL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
*
*/

/**
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/***
* Portal XL hard coded acronyms
*/
function portal_acronyms($message)
{
   global $user;
   
   $message = str_replace('Opera', '<a href="http://www.opera.com/" title="Opera gives you the full Web experience everywhere.">Opera</a>', $message);
   $message = str_replace('Maxthon', '<a href="http://www.maxthon.com/" title="Seize the Web!">Maxthon</a>', $message);
   $message = str_replace('MSIE', '<a href="http://www.microsoft.com/windows/internet-explorer/" title="Making your web even better... Faster, Safer, Easier">Internet Explorer (MSIE)</a>', $message);
   $message = str_replace('FireFox', '<a href="http://www.mozilla.com/en-US/" title="Make the switch to Firefox &#8211; the faster, safer, smarter way to browse the Web.">FireFox</a>', $message);
   $message = str_replace('higshlide', '<a href="http://highslide.com/" title="Highslide JS is an open source image, media and gallery viewer written in JavaScript.">Highslide JS</a>', $message);
   $message = str_replace('CHMOD', '<a href="http://en.wikipedia.org/wiki/Chmod" title="CHMOD command in Unix and Unix-like environments helps users or administrators change file and directory permissions and modes. CHMOD is an abbreviation for CHange MODe.">CHMOD</a>', $message);
   $message = str_replace('chmod', '<a href="http://en.wikipedia.org/wiki/Chmod" title="CHMOD is an abbreviation for CHange MODe in Unix and Unix-like environments.">chmod</a>', $message);
//   $message = str_replace('portal', '<a href="http://www.portalxl.nl/forum/" title="Your insane crazy ass-kicking portal system for phpBB 3.0.x">Portal XL 5.0</a>', $message);

   return($message);
}

/**
* Automatic acronym insertion
*/
function acronym_pass($text)
{
  global $portal_config;

  if ($portal_config['portal_acronyms_allow'] == false)
  return $text;

  $acronym_cache = new acronym_cache();
  static $acronyms;
  global $cache;
  
  if (!isset($acronyms) || !is_array($acronyms))
  {
    // obtain_acronym_list is taking care of the users acronyms option and the board-wide option
    $acronyms = $acronym_cache->obtain_acronym_list();
  }

  if (sizeof($acronyms))
  {
   $text = portal_acronyms($text);
   $acronyms_match = $acronyms['match'];
   $acronyms_repl = $acronyms['replace'];
	  
   $pattern = array( 
			'#(\>(((?>([^><]+|(?R)))*)\<))#se',                          
			'#\[url:*?\]((.*?))\[/url:*?\]#se',
			'#\[url=([^\[]+?):*?\](.*?)\[/url:*?\]#se',                          
			'#/(?<a>(.+?)\](.+?))/#is',                          
			);
   
   $text =  preg_replace($acronyms_match, $acronyms_repl, $text);
   //$text =  substr(preg_replace($pattern, "preg_replace(\$acronyms_match, \$acronyms_repl, '\\0')", '>' . $text . '<'), 1, -1);
  }

  return $text;
}

/**
* Class for grabbing/handling acronym cached entries, extends acm_file or acm_db depending on the setup
* @package acm
*/
class acronym_cache extends acm
{
  /**
  * Obtain list of lexicon words for acronyms and build preg style replacement arrays for use by the
  * calling script
  */
  function obtain_acronym_list()
  {
    global $config, $user, $db;

    if (($acronyms = $this->get('_word_acronyms')) === false)
    {
      $sql = 'SELECT *
        FROM ' . PORTAL_ACRONYMS_TABLE . "
        ORDER BY LENGTH(TRIM(acronym))  DESC";
      $result = $db->sql_query($sql);
      $acronyms = array();
      while ($row = $db->sql_fetchrow($result))
      {
	  
		if ($row['acronym_url'])
		{
			$firstfilter = (!strstr($row['acronym'], ' ')? '(?:\s|^)+' : '');
			$lastfilter = (!strrchr($row['acronym'], ' ')? '[A-Za-z]*' : '');
			$acronyms['match'][] = '#'. $firstfilter . '([A-Za-z]*'. preg_quote($row['acronym'], '#'). $lastfilter . ')#';			
        	$acronyms['replace'][] = '&nbsp;<a href="' . $row['acronym_url'] . '" class="postlink" title="' . $row['description'] . '">' . $row['acronym'] . '</a>';
		}
		else if (!$row['acronym_url'])
		{
			$firstfilter = (!strstr($row['acronym'], ' ')? '(?:\s|^)+' : '');
			$lastfilter = (!strrchr($row['acronym'], ' ')? '[www]*' : '');
			$acronyms['match'][] = '#'. $firstfilter . '('. preg_quote($row['acronym'], '#'). $lastfilter . ')#';			
        	$acronyms['replace'][] = '&nbsp;<a href="' . $row['acronym_url'] . '" class="postlink" title="' . $row['description'] . '"><acronym class="acronym" title="' . $row['description'] . '">' . $row['acronym'] . '</acronym></a>';
		}
		else
		{
        	$acronyms['match'][] = '#(?<!\w)(' . preg_quote($row['acronym'], '#') . ')(?!\w)#';
        	//$acronyms['match'][] = '#(' . preg_quote($row['acronym'], '#') . ')#';
        	$acronyms['replace'][] = '<acronym class="acronym" title="' . $row['description'] . '">' . $row['acronym'] . '</acronym>';
		}
	  
      }
      $db->sql_freeresult($result);
      $this->put('_word_acronyms', $acronyms);
    }

    return $acronyms;
  }
}

?>