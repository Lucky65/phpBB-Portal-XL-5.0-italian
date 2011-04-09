<?php
/*
*
* @name video_bbcode.php
* @package phpBB3 Portal XL 5.0
* @version $Id: video_bbcode.php,v 1.0 2010/04/30 damysterious Exp $
*
* Video BBCode Mod
* This mod is under http://opensource.org/licenses/gpl-license.php GNU General Public License v2
* Author: Fraev (http://fplace.atwebpages.com)
* Email: framp_one [at] email.it
* Works on: nearly every release of phpbb
* Tested on: 3.0+
*
* Description: This MOD will add a BBCode called "z_video", which lets users add youtube, googlevideo, dailymotion, metacafe. myspace, starsclips, yahoo, photobucket, filefront, stage6, veoh, vidilife, gametrailers, vidiac, gamespot, megavideo, vimeo, gamevideos, tu.tv and godtube videos to their post.
*
* ********************** HOWTO install: **********************
* Copy root/video.php to your root forum dir (the one which contain viewtopic.php)
* 
* Go to the Administration Control Panel and navigate to the "Posting" tab, then
* to the "BBCodes" section. Click the "Add a new BBCode" button. The following
* page is where you are to enter the information for the new BBCode.
*
*    (1) In the "BBCode usage" area, enter the following:
*    [z_video]{TEXT}[/z_video]
*
*    (2) In the "HTML replacement" area, enter the following:
*    <script type="text/javascript" src="video_bbcode.php?link={TEXT}"></script>
*
*    (3) In the "Help line" area, enter the following:
*    Insert general video: [z_video]Full video URL[/z_video]
*
*    (4) In the "Settings" area, check the box for "Display on posting page" if
*        you want a "z_video" button placed alongside the other BBCode buttons.
*
* When that's all filled out, click "Submit". 
* **********************                **********************
*
*/

/*
* Available bbCodes:
[code][z_video]http://youtube.com/watch?v=IiJdn6bg3fs[/z_video][/code]
[z_video]http://youtube.com/watch?v=IiJdn6bg3fs[/z_video]
[code][z_video]http://video.google.it/videoplay?docid=-1807566009355608301[/z_video][/code]
[z_video]http://video.google.it/videoplay?docid=-1807566009355608301[/z_video]
[code][z_video]http://dailymotion.alice.it/video/x3gvg0_baby-break-dance_fun[/z_video][/code]
[z_video]http://dailymotion.alice.it/video/x3gvg0_baby-break-dance_fun[/z_video]
[code][z_video]http://www.metacafe.com/watch/976183/amazing_denver_zoo_lights_2007/[/z_video][/code]
[z_video]http://www.metacafe.com/watch/976183/amazing_denver_zoo_lights_2007/[/z_video]
[code][z_video]http://www.starsclips.net/videos.aspx/video~two_awesome_brothers_free_running/[/z_video][/code]
[z_video]http://www.starsclips.net/videos.aspx/video~two_awesome_brothers_free_running/[/z_video]
[code][z_video]http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoID=1590276358[/z_video][/code]
[z_video]http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoID=1590276358[/z_video]
[code][z_video]http://video.yahoo.com/video/play?vid=1845135&fr=&cache=1[/z_video][/code]
[z_video]http://video.yahoo.com/video/play?vid=1845135&fr=&cache=1[/z_video]
[code][z_video]http://photobucket.com/video/recent/imaan_sygku/22533661.flv?o=10[/z_video][/code]
[z_video]http://photobucket.com/video/recent/imaan_sygku/22533661.flv?o=10[/z_video]
[code][z_video]http://files.filefront.com/Enemy+Territory+Quake+Wars+Island+Trailer+HD/;10527364;/fileinfo.html[/z_video][/code]
[z_video]http://files.filefront.com/Enemy+Territory+Quake+Wars+Island+Trailer+HD/;10527364;/fileinfo.html[/z_video]
[code][z_video]http://www.veoh.com/videos/v3307355BSa7tBwK?source=featured&cmpTag=featured&rank=3[/z_video][/code]
[z_video]http://www.veoh.com/videos/v3307355BSa7tBwK?source=featured&cmpTag=featured&rank=3[/z_video]
[code][z_video]http://www.vidilife.com/video_play_1125851_Not_Karate.htm?hmtrk=Not_Karate[/z_video][/code]
[z_video]http://www.vidilife.com/video_play_1125851_Not_Karate.htm?hmtrk=Not_Karate[/z_video]
[code][z_video]http://www.gametrailers.com/player/30032.html[/z_video][/code]
[z_video]http://www.gametrailers.com/player/30032.html[/z_video]
[code][z_video]http://www.vidiac.com/video/7fd7de8b-67e8-4ffb-a5bd-991900422e1a.htm[/z_video][/code]
[z_video]http://www.vidiac.com/video/7fd7de8b-67e8-4ffb-a5bd-991900422e1a.htm[/z_video]
[code][z_video]http://www.gamespot.com/video/938343/6185167/videoplayerpop?[/z_video][/code]
[z_video]http://www.gamespot.com/video/938343/6185167/videoplayerpop?[/z_video]
[code][z_video]http://www.megavideo.com/?v=QZ4O9C8P[/z_video][/code]
[z_video]http://www.megavideo.com/?v=QZ4O9C8P[/z_video]
[code][z_video]http://www.vimeo.com/173714[/z_video][/code]
[z_video]http://www.vimeo.com/173714[/z_video]
[code][z_video]http://www.gamevideos.com/video/id/17281[/z_video][/code]
[z_video]http://www.gamevideos.com/video/id/17281[/z_video]
[code][z_video]http://www.tu.tv/videos/nuco-diga-no-a-una-mujer[/z_video][/code]
[z_video]http://www.tu.tv/videos/nuco-diga-no-a-una-mujer[/z_video]
[code][z_video]http://www.godtube.com/view_video.php?viewkey=8cf08faca5dd9ea45513[/z_video][/code]
[z_video]http://www.godtube.com/view_video.php?viewkey=8cf08faca5dd9ea45513[/z_video]
[code][z_video]http://www.myvideo.de/watch/4276644/Handys_boese[/z_video][/code]
[z_video]http://www.myvideo.de/watch/4276644/Handys_boese[/z_video]
[code][z_video]http://www.collegehumor.com/video:1819139[/z_video][/code]
[z_video]http://www.collegehumor.com/video:1819139[/z_video]
[code][z_video]http://www.comedycentral.com/videos/index.jhtml?videoId=173093[/z_video][/code]
[z_video]http://www.comedycentral.com/videos/index.jhtml?videoId=173093[/z_video]
[code][z_video]http://www.slideshare.net/ewan.mcintosh/unleasing-the-tribe/[/z_video][/code]
[z_video]http://www.slideshare.net/ewan.mcintosh/unleasing-the-tribe/[/z_video]
[code][z_video]http://www.revver.com/video/129859/poker-player/[/z_video][/code]
[z_video]http://www.revver.com/video/129859/poker-player/[/z_video]
[code][z_video]http://de.sevenload.com/videos/7oREPw6-Simpsons-Intro-mit-Schauspielern[/z_video][/code]
[z_video]http://de.sevenload.com/videos/7oREPw6-Simpsons-Intro-mit-Schauspielern[/z_video]
[code][z_video]http://www.clipfish.de/player.php?videoid=MTMyNzg4fDI0NTY3MzM%3D&tl=4712&utm_source=ft&utm_medium=ft_2&utm_term=ft_2_unset&utm_content=ft_2_unset_video&utm_campaign=cf[/z_video][/code]
[z_video]http://www.clipfish.de/player.php?videoid=MTMyNzg4fDI0NTY3MzM%3D&tl=4712&utm_source=ft&utm_medium=ft_2&utm_term=ft_2_unset&utm_content=ft_2_unset_video&utm_campaign=cf[/z_video]
*
*/

/**
*/
foreach ($_GET as $key => $item)
{
  if ($key!='link' and $key!='debug')
  {
	$_GET['link'].='&'.$key.'='.$item;
  }
}

If ($_GET['link'])
{
  If ($_GET['debug']) echo '<script>';
  echo "window.document.write('".preg_replace('/<\/script>/', '</scr\'+\'ipt>', addslashes(get_video($_GET['link'])))."');";
  If ($_GET['debug']) echo '</script>';
}

function get_video($link)
{
  $values = array (
  //http://www.youtube.com/watch?v=OygxkgewEhU
  array('/youtube\.com.*v=([^&]*)/i', '<object width="400" height="300"><param name="movie" value="http://www.youtube.com/v/{ID_VIDEO}"></param><embed src="http://www.youtube.com/v/{ID_VIDEO}" type="application/x-shockwave-flash" width="400" height="300"></embed></object>'),
  
  //http://video.google.it/videoplay?docid=-1807566009355608301
  array('/video.google.*docid=([^&]*)/i', '<embed id="VideoPlayback" style="width:400px;height:300px" allowFullScreen="true" flashvars="fs=true" src="http://video.google.com/googleplayer.swf?docid={ID_VIDEO}" type="application/x-shockwave-flash"></embed>'),
  
  //http://dailymotion.alice.it/video/x3gvg0_baby-break-dance_fun
  array('/(dailymotion)/i', '{DOWNLOAD%/<textarea id="video_player_embed_code_text" class="text" onclick="this\.select\(\)" type="text">(.*?)<\/textarea>/ism%html_entity_decode|}'),
  
  //http://www.metacafe.com/watch/976183/amazing_denver_zoo_lights_2007/
  array('/metacafe\.com\/watch\/(.*)\//i', '<embed src="http://www.metacafe.com/fplayer/{ID_VIDEO}.swf" width="400" height="300" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed>'),
  
  //http://www.starsclips.net/videos.aspx/video~two_awesome_brothers_free_running/
  array('/starsclips\.net\/videos\.aspx\/(.*)/i', '<object width="400" height="300"><param name="movie" value="http://www.starsclips.net/emb.aspx/{ID_VIDEO}"></param><param name="wmode" value="transparent"></param><embed src="http://www.starsclips.net/emb.aspx/{ID_VIDEO}" type="application/x-shockwave-flash" wmode="transparent" width="400" height="300"></embed></object>'),
  
  //http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoID=1590276358
  array('/vids\.myspace\.com.*?videoID=([^&]*)/i', '<object width="400px" height="300px"><param name="wmode" value="transparent"/><param name="allowscriptaccess" value="always"/><param name="movie" value="http://lads.myspace.com/videos/vplayer.swf"/><param name="flashvars" value="m={ID_VIDEO}"/><embed src="http://lads.myspace.com/videos/vplayer.swf" width="400" height="300" flashvars="m={ID_VIDEO}" type="application/x-shockwave-flash" allowscriptaccess="always" /></object>'),
  
  array('/myspacetv\.com.*?videoID=([^&]*)/i', '<object width="400px" height="300px"><param name="wmode" value="transparent"/><param name="allowscriptaccess" value="always"/><param name="movie" value="http://lads.myspace.com/videos/vplayer.swf"/><param name="flashvars" value="m={ID_VIDEO}"/><embed src="http://lads.myspace.com/videos/vplayer.swf" width="400" height="300" flashvars="m={ID_VIDEO}" type="application/x-shockwave-flash" allowscriptaccess="always" /></object>'),
  
  //http://video.yahoo.com/video/play?vid=1845135&fr=&cache=1
  array('/video\.yahoo.*vid=([^&]*)/i','<object width="400" height="300"><param name="movie" value="http://d.yimg.com/static.video.yahoo.com/yep/YV_YEP.swf?ver=2.2.2" /><param name="allowFullScreen" value="true" /><param name="flashVars" value="id={DOWNLOAD%/so\.addVariable\("id", "(.*?)"\);/%}&vid={ID_VIDEO}&thumbUrl={DOWNLOAD%/so\.addVariable\("thumbUrl", "(.*?)"\);/%}&embed=1" /><embed src="http://d.yimg.com/static.video.yahoo.com/yep/YV_YEP.swf?ver=2.2.2" type="application/x-shockwave-flash" width="400" height="300" allowFullScreen="true" flashVars="id={DOWNLOAD%/so\.addVariable\("id", "(.*?)"\);/%}&vid={ID_VIDEO}&thumbUrl={DOWNLOAD%/so\.addVariable\("thumbUrl", "(.*?)"\);/%}&embed=1" ></embed></object>'),
  
  //http://photobucket.com/video/recent/imaan_sygku/22533661.flv?o=10
  array ('/(photobucket\.com)/i', '{DOWNLOAD%/<input name="txtThumbTag2" id="txtThumbTag2".*?value="(.*?)"/ism%html_entity_decode}'),
  
  //http://files.filefront.com/Enemy+Territory+Quake+Wars+Island+Trailer+HD/;10527364;/fileinfo.html
  array ('/(filefront\.com)/i','{DOWNLOAD%/<input type"text" id="embedSrc" value=\'(.*?)\'/ism%}'), 
  
  //http://www.veoh.com/videos/v14162290wNDAzzyh?rank=16&order=mr
  array ('/veoh\.com\/videos\/([^\?]*)/i', '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId={ID_VIDEO}&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="400" height="300" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>'),
  
  //http://www.vidilife.com/video_play_1125851_Not_Karate.htm?hmtrk=Not_Karate
  array ('/(vidilife\.com)/i','{DOWNLOAD%/<input type="text" name="url1" value="(.*?)"/%}'),
  
  //http://www.gametrailers.com/player/30032.html
  array ('/gametrailers\.com\/player\/(.*?).html/i', '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="400" height="300">      <param name="allowScriptAccess" value="sameDomain" />   <param name="allowFullScreen" value="true" /> <param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid={ID_VIDEO}"/> <param name="quality" value="high" /> <embed src="http://www.gametrailers.com/remote_wrap.php?mid={ID_VIDEO}" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="sameDomain" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="400" height="300"></embed> </object>'),
  
  //http://www.vidiac.com/video/7fd7de8b-67e8-4ffb-a5bd-991900422e1a.htm
  array ('/vidiac\.com\/video\/(.*?)\.htm/i', '<embed src="http://www.vidiac.com/vidiac.swf" FlashVars="video={ID_VIDEO}" quality="high" bgcolor="#ffffff" width="400" height="300" name="ePlayer" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>'),
  
  //http://www.gamespot.com/video/938343/6185167/videoplayerpop?
  array ('/gamespot\.com\/video\//i', '<embed id="mymovie" width="400" height="300" flashvars="playerMode=embedded&movieAspect=4.3&flavor=EmbeddedPlayerVersion&skin=http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/one/skins/gamespot.png&paramsURI={DOWNLOAD%/so\.addVariable\(\'paramsURI\', \'(.*?)\'\);/ism%}" wmode="transparent" allowscriptaccess="always" quality="high" name="mymovie" style="" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/one/proteus2.swf" type="application/x-shockwave-flash"/>'),
  
  //http://www.megavideo.com/?v=QZ4O9C8P
  array ('/(megavideo\.com)/i', '{DOWNLOAD%/<input type="text" value=\'(.*?)\'/%}'),
  
  //http://www.vimeo.com/173714
  array ('/vimeo\.com\/([^&]*)/i', '<object class="swf_holder" type="application/x-shockwave-flash" width="400" height="300" data="http://www.vimeo.com/moogaloop_local.swf?clip_id={ID_VIDEO}&amp;server=www.vimeo.com&amp;autoplay=0&amp;fullscreen=1&amp;show_portrait=0&amp;show_title=0&amp;show_byline=0&amp;md5=&amp;color="><param name="quality" value="high" /><param name="allowfullscreen" value="true" /><param name="scale" value="showAll" /><param name="movie" value="http://www.vimeo.com/moogaloop_local.swf?clip_id={ID_VIDEO}&amp;server=www.vimeo.com&amp;autoplay=0&amp;fullscreen=1&amp;show_portrait=0&amp;show_title=0&amp;show_byline=0&amp;md5=&amp;color=" /></object>'),
  
  //http://www.gamevideos.com/video/id/17281
  array ('/(gamevideos\.com)/i', '{DOWNLOAD%/Embed: <input.*value="(.*?)"/%html_entity_decode}'),
  
  //http://www.tu.tv/videos/nuco-diga-no-a-una-mujer
  array ('/(tu\.tv)/i', '{DOWNLOAD%/<input name="html".*value=\'(.*?)\'/%}'),
  
  //http://www.godtube.com/view_video.php?viewkey=8cf08faca5dd9ea45513
  array ('/godtube\.com.*viewkey=([^&]*)/i', '<embed src="http://godtube.com/flvplayer.swf" FlashVars="viewkey={ID_VIDEO}" wmode="transparent" quality="high" width="400" height="300" name="godtube" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></embed>'),
  
  //http://www.myvideo.de/watch/4276644/Handys_boese
  array ('/myvideo.de\/watch\/(.*?)\//i', "<object style='width:400px;height:300px;' width='470' height='406' type='application/x-shockwave-flash' data='http://www.myvideo.de/movie/{ID_VIDEO}'><param name='movie' value='http://www.myvideo.de/movie/{ID_VIDEO}'/><param name='AllowFullscreen' value='true' /><embed src='http://www.myvideo.de/movie/{ID_VIDEO}' width='400' height='300'></embed></object>"),
  
  //http://www.collegehumor.com/video:1819139
  array ('/collegehumor.*video:(.*)/i', '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1819139&fullscreen=1" width="400" height="300" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id={ID_VIDEO}&fullscreen=1" /></object>'),
  
  //http://www.comedycentral.com/videos/index.jhtml?videoId=173093
  array ('/comedycentral.*videoId=([^&]*)/i', "<embed FlashVars='videoId={ID_VIDEO}' src='http://www.comedycentral.com/sitewide/video_player/view/default/swf.jhtml' quality='high' bgcolor='#cccccc' width='400' height='300' name='comedy_central_player' align='middle' allowScriptAccess='always' allownetworking='external' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer'></embed>"),
  
  //http://www.slideshare.net/ewan.mcintosh/unleasing-the-tribe/
  array ('/(slideshare\.net)/i', '{DOWNLOAD%/<input.*?id="embedded_code" value="(.*?)"/%html_entity_decode}'),
  
  //http://www.revver.com/video/129859/poker-player/
  array ('/revver\.com\/video\/(.*?)\//i', '<script src="http://flash.revver.com/player/1.0/player.js?mediaId:{ID_VIDEO};width:400;height:300;" type="text/javascript"></script>'),
  
  //http://de.sevenload.com/videos/7oREPw6-Simpsons-Intro-mit-Schauspielern
  array ('/sevenload\.com\/videos\/(.*?)-/i', '<script type="text/javascript" src="http://de.sevenload.com/pl/{ID_VIDEO}/400x300"></script>'),
  
  //http://www.clipfish.de/player.php?videoid=MTMyNzg4fDI0NTY3MzM%3D&tl=4712&utm_source=ft&utm_medium=ft_2&utm_term=ft_2_unset&utm_content=ft_2_unset_video&utm_campaign=cf
  array ('/clipfish\.de.*?videoid=([^&]*)/i', "<object width='400' height='300'><param name='movie' value='http://www.clipfish.de/videoplayer.swf?videoid={ID_VIDEO}' /><param name='allowFullScreen' value='true' /><embed src='http://www.clipfish.de/videoplayer.swf?videoid=MTMyNzg4fDI0NTY3MzM' width='400' height='300' name='player' allowFullScreen='true' type='application/x-shockwave-flash'></embed></object>"),
  );

foreach ($values as $value)
{
  if (preg_match($value[0], $link, $matches))
  {
	$id_video=$matches[1];
	return preg_replace_callback('/{.*?}/', create_function('$matches', 'switch (true)
	{
	  case preg_match("/\{ID_VIDEO\}/", $matches[0]):
	  return "'.$id_video.'";
	  break;
	  case preg_match("/\{LINK\}/", $matches[0]):
	  return "'.$link.'";
	  break;
	  case preg_match("/\{DOWNLOAD(.*?)%(.*?)%(.*?)\}/", $matches[0], $matches2):
	  if (empty($matches2[1])) $matches2[1]="'.$link.'";
	  preg_match($matches2[2], file_get_contents(str_replace(" ","+",$matches2[1])), $matches3);
	  if (empty($matches2[3])){
	  return $matches3[1];
	  }else{
	  $t=$matches3[1];
	  foreach(explode("|", $matches2[3]) as $e){
	  eval(\'$t=\'.$e.\'($t);\');
	}
	  return $t;
	}
	  break;
	}
  return $matches[0];'), $value[1]);
  }
}
  return 'Error, site not recognized';
}
?>