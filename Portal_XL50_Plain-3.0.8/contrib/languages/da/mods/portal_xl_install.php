<?PHP
/** 
*
* portal_xl_install.php [English]
*
* @package language for phpBB3 Portal XL
* @version $Id: portal_xl_install.php,v 1.1.1.1 2009/05/15 04:03:35 damysterious Exp $
* @copyright (c) 2008 DaMysterious
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	// Portal XL Convert Procedure
	'PORTAL_CONVERT'				=> 'Portal XL Converting',
	'PORTAL_CONVERT_BASIC_FINISHED'	=> 'The database tables are now updated for the new text functions of the phpBB 3.<br />Not the script will convert the text themselves.<br /><br />To avoid timeout errors and malfunctions while converting the texts, the script will permanently restart itself. Please do not close the browser until the script have finished the conversion.<br /><br />But if you will get an interruption of this procedure, restart the script again to continue.<br /><br />Please be patient while the script will convert the texts and wait for the closing message, because in addition for the number of texts which must be converted, the script may take some minutes to do all the work.',
	'PORTAL_CONVERT_DATABASE'		=> 'Convert database',
	'PORTAL_CONVERT_NOT_POSSIBLE'	=> '<strong>Conversion not possible!</strong><br /><br />This release of Portal XL can not be converted to Portal XL 4.0 Premod as it seem not to be on recommended state.<br /><br />The release must have as minimum Portal XL <strong>Premod RC2</strong><br />Your current release carries version Portal XL <strong>%1$s</strong>.<br /><br />If your release does carrie out at least Portal XL Premod RC2, you will be able to update after.',
	'PORTAL_CONVERT_PROCEDURE'		=> 'Currently %1$s from %2$ datasets are updated.<br /><br />Please click on the button below to continue or wait a moment till the script restarts itself.',
	'PORTAL_CONVERT_TODO'			=> 'From on here all existing database tables in use by Portal XL 5.0 Plain will be converted to the latest workflow of Portal XL 4.0 Premod RC5.<br /><br />To start the conversion procedure, click on the button below.<br /><br />Please be patient while proceeding, because it can take some time to the number of conversions to make.',
	'PORTAL_FINAL_CONVERT_STEP'		=> 'Conversion of all existing database tables in use by Portal XL is finished now.<br />To finish the complete procedure and using the MOD at the end there is one last step needed to do. Please click for this on the button below to do this last part.',

	// Portal XL Installation Procedure
	'PORTAL_INSTALL'				=> 'Portal XL Installation',

	'PORTAL_INSTALL_EXPLAIN'		=> '<p>Welcome to the Portal XL Installation Wizard<br />This is the installation of Portal XL. Your original insane crazy Portal for phpBB3.</p> 
	<p>In order for this installation to work successfully the following procedures are recommended:</p>
	<ul>
		<li>Make sure you did copy/upload from archive all content of directory <strong><span style="color:#FF0000;">\root\</span></strong> to your phpBB 3.0.x root eg. <strong><span style="color:#FF0000;">\forum\</span></strong> only (you did already)!</li>
	</ul>
	<ul>
		<li><em><strong><span style="color:#009900;">File permissions CHMOD</span></strong></em><br />
		<em>After installation you should check all CHMOD\'s on files and directories for *NIX related servers.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> into</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> into</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li>
	</ul>
	<p>To begin the installation choose Yes and press the button.</p>',
	
	'PORTAL_INSTALL_NEXT'			=> 'The database tables are now successfull created.<br /><br />Click on the button below to run the next step for writing the default values into these tables.',
	'PORTAL_INSTALL_FINISHED'		=> 'Portal XL Installation finished',
	'PORTAL_INSTALL_INTRO'			=> 'Welcome to the Portal XL Installation',

	'PORTAL_INSTALL_FINISHED_EXPLAIN'	=> '
		<p>You have now successfully installed Portal XL 5.0 %1$s. From here, you have several options as to what to do with your newly installed Portal XL:</p>
		<p><strong style="text-transform: uppercase; font-size:13px; color: #FF0000;">Note:</strong></span><br /><br /><span style="font-size:13px; color: #FF0000;">Before proceeding you must have copied/uploaded all content from within the Portal XL main archive directory <strong>\root\</strong> to your forum root.</span></p>
		<h2>Go live with your Portal XL!</h2>
		<p>Clicking the button below will take you to your Administration Control Panel (ACP). Take some time to examine the options available to you. Remember that help is available online via the <a href="http://www.portalxl.nl/forum/">Portal XL Home</a> and the <a href="http://www.portalxl.nl/forum/viewforum.php?f=1">support forums</a> for Portal XL 4.0 Premod RC5, or <a href="http://www.portalxl.nl/forum/viewforum.php?f=44">support forums</a> for Portal XL 5.0 Plain.</p><p><strong>Please now delete, move or rename the install directory before you use your board. If this directory is still present, only the Administration Control Panel (ACP) will be accessible.</strong></p>',

	'PORTAL_INSTALL_NOT_POSSIBLE'	=> '<strong>Installation not possible!</strong><br /><br />The script found an existing installation, so you can not use the installation script again.',

	'PORTAL_OVERVIEW_BODY'			=> 'This is the newest <strong>Free</strong> release of phpBB3 Portal XL which is a flexible and powerful portal solution for your phpBB 3.0.x forum with lots of great and advanced features.<br /><br /> 
	This portal strives to be highly customizeable aswell as include a useful amount of addons. At the same time, we will offer a quick and efficient alternative to other phpBB3 related portal\'s. We do not claim to become a reference portal or mod for phpBB3 and we don\'t maintain to be professionals. We are modding this just for fun in our spare time, even if we are trying to do our best to have a professional looking package with as few bugs as possible and without need of any scripting knowledge required from the admin.
	<p>Memorable release data of phpBB3 Portal XL
	<ul>
		<li>Portal XL 5.0 RC4-Plain (26-02-2008 first release Plain version by user request)</li>
		<li>Portal XL 5.0 Plain (12-04-2008)</li>
		<li>Portal XL 5.0 Plain 0.1 (31-05-2008)</li>
		<li>Portal XL 5.0 Plain 0.2 (31-10-2008)</li>
		<li>Portal XL 5.0 Plain 0.2 (01-06-2009) pbpBB 3.0.5</li>
		<li>Portal XL 5.0 Plain 0.2 (24-11-2009) pbpBB 3.0.6</li>
		<li>Portal XL 5.0 Plain 0.2 (02-03-2010) pbpBB 3.0.7</li>
		<li>Portal XL 5.0 Plain 0.2 (21-11-2010) pbpBB 3.0.8</li>
	</ul></p><br />Please choose from the available tabs what you want to do.',
	
	'PORTAL_SQL_UPDATE_DONE'		=> '<strong>Done database action:</strong><br />',
	'PORTAL_SUB_SUPPORT'			=> 'General Portal Support',
	'PORTAL_SUPPORT_BODY'			=> 'During the beta- / public test releases, limited support will be available at <a href="http://www.portalxl.nl/forum/" target="_blank">www.portalxl.nl</a>, this is also the place to report portal related bugs. Bear in mind that it will only be limited support, and that we will only support the latest beta- / test release, installed with the supported phpBB3 version. <br /><br />As we are unable to know what is changed/modded to your existing phpBB3 setup before, we are not able in any way to support custom changes. Remember, using this package can lead to lost of already changed code or added mod\'s.',

	// Portal XL Update Procedure
	'PORTAL_UPDATE'					=> 'Portal XL Update',
	'PORTAL_UPDATE_SUCCESS'			=> 'Congratulation!<br />The update of the database settings from the Portal XL is finished.<br /><br />You can now go on to install the remaining parts from the install instruction of Portal XL into your forum.<br /><br />Please delete the folder /install/ from your forum root to enable your forum again.',
	'PORTAL_UPDATE_BASIC_FINISHED'	=> 'The database tables are now updated for the new text functions of the phpBB 3.<br />Not the script will convert the text themselves.<br /><br />To avoid timeout errors and malfunctions while converting the texts, the script will permanently restart itself. Please do not close the browser until the script have finished the conversion.<br /><br />But if you will get an interruption of this procedure, restart the script again to continue.<br /><br />Please be patient while the script will convert the texts and wait for the closing message, because in addition for the number of texts which must be converted, the script may take some minutes to do all the work.',
	'PORTAL_UPDATE_DATABASE'		=> 'Update database for the Portal XL',
	'PORTAL_UPDATE_NOT_POSSIBLE'	=> '<strong>Update not possible!</strong><br /><br />This release of Portal XL can not be updated as it seem to be on recommended state.<br /><br />Your current release carries version Portal XL 5.0 <strong>%1$s</strong>',
	'PORTAL_UPDATE_PROCEDURE'		=> 'Currently %1$s from %2$ datasets are updated.<br /><br />Please click on the button below to continue or wait a moment till the script restarts itself.',
	'PORTAL_UPDATE_TODO'			=> 'From on here all existing database tables in use by Portal XL will be updated to the latest workflow.<br /><br />To start the update procedure, click on the button below.<br /><br />Please be patient while proceeding, because it can take some time to the number of updates to make.',
	'PORTAL_FINAL_UPDATE_STEP'		=> 'The existing tables from Portal XL are now up to date.<br />To get correct displayed texts on your forum the datasets needs to be converted now.<br /><br />Click on the button below to continue now with the converting.',

	// Portal XL Remove Database Entries Procedure
	'PORTAL_REMOVE'					=> 'Portal XL Remove',
	'PORTAL_REMOVE_NOT_POSSIBLE'	=> '<strong>Remove not possible!</strong><br /><br />Your version release of this Portal: <strong>%1$s</strong><br /><br />The Portal XL must at least have the release <strong>%1$s</strong>, to be able to remove all database tables.<br /><br />Please update the Portal manually to this release, before you can use this script again.',
	'PORTAL_REMOVE_SUCCESS'			=> 'Congratulation!<br />Remove of the database entries from Portal XL is finished.<br /><br />You can now go on to remove remaining parts of Portal XL from your forum.<br /><br />Please delete the folder /install/ from your forum root to enable your forum again.',

	'PORTAL_REMOVE_TODO'			=> 'Portal XL will be removed from your database, it is save to delete all Portal XL related files, as there are (related to your root), if this step is completed:
	<ul>
		<li>in folder <span style="color:#009900;">/adm/style/</span> remove all <span style="color:#FF0000;">acp_portal*.html</span>.</li>
		<li>in folder <span style="color:#009900;">/includes/acp/</span> remove all <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>in folder <span style="color:#009900;">/includes/acp/info/</span> remove  all <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>in folder <span style="color:#009900;">/language/en/</span> remove <span style="color:#FF0000;">portal.php</span></li>
		<li>in folder <span style="color:#009900;">/language/en/acp/</span> remove all <span style="color:#FF0000;">portal_*.php</span></li>
		<li>in folder <span style="color:#009900;">/language/en/mods/</span> remove <span style="color:#FF0000;">portal_xl_average_statistics.php</span></li>
		<li>remove main folder <span style="color:#009900;">/portal/</span></strong></li>
		<li>remove all <span style="color:#009900;">/portal/</span> folders (do this for every style installed) under <span style="color:#009900;">/styles/stylename/template/</span></li>
		<li>in root replace <span style="color:#FF0000;">.htaccess</span> by the original one from phpBB 3.0.x, remove <span style="color:#FF0000;">portal.php</span>, <span style="color:#FF0000;">portal_pages.php</span> and <span style="color:#FF0000;">robots.txt</span>.</li>
		<li>additional to the above all custom bbcodes installed by use of this installer will be removed.</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Note:</strong> Before proceeding re-upload a original phpBB 3.0.x distribution to overwrite files which have been changed for use of Portal XL, but bear in mind before uploading anything to be sure to have removed folder <span style="color:#009900;">/install/</span> and file <span style="color:#FF0000;">config.php</span> from the original phpBB 3.0.x package.</p>
	<p>Thank you for using Portal XL.</p><br /><br />',
	
	'PORTAL_SQL_REMOVE_DONE'		=> '<strong>Done database action:</strong><br />',
	'PORTAL_FINAL_REMOVE_STEP'		=> 'All existing database entries and tables in use by Portal XL where removed.<br /><br />Click on the button below to continue or wait some seconds to automatically redirect to the next step.',
	'REMOVE_DATABASE'				=> 'Proceed to Remove',
	'STAGE_REMOVE_DB'				=> 'Removing Database',

	// Portal XL CHMOD Directories
	'PORTAL_CHMOD'					=> 'Portal XL CHMOD',
	'PORTAL_CHMOD_NOT_POSSIBLE'		=> '<strong>CHMOD not possible!</strong><br /><br />Your version release of this Portal: <strong>%1$s</strong><br /><br />The Portal XL must at least have the release <strong>%1$s</strong>, to be able to CHMOD all directories used by Portal XL.<br /><br />Please update the Portal manually to this release, before you can use this script again.',
	'PORTAL_CHMOD_SUCCESS'			=> 'Congratulation!<br />CHMOD to folders and files was successful.',

	'PORTAL_CHMOD_TODO'				=> 'Portal XL\'s installation Wizard will try to CHMOD / Rename following directories or files for you if acces is granted for such a procedure by your hosting company:
	<ul>
		<li><em><strong><span style="color:#009900;">File permissions CHMOD</span></strong></em><br />
		<em>After installation you should check all CHMOD\'s on files and directories for *NIX related servers.</em><br />
		The wizard will try to CHMOD listed directories below for you.<br /><br />
		
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0666</span> into</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0777</span> into</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li><br />
		<li><em><strong><span style="color:#009900;">Directory rename</span></strong></em><br />
		<em>After installation you should check on delete, rename or move directory <strong>/install/</strong> on your server when ready.</em><br />
		The wizard will try to rename <strong>/install/</strong> into <strong>/_install/</strong> for you.<br /><br />
		</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Note:</strong> As usual, before proceeding have a recent backup of your files.</p><br /><br />',

	'PORTAL_CHMOD_DONE'			=> '<strong>Done database action:</strong><br />',
	'PORTAL_FINAL_CHMOD_STEP'	=> 'All existing directories and files in use by Portal XL where CHMOD set.<br /><br />Click on the button below to continue or wait some seconds to automatically redirect to the next step.',
	'PORTAL_CHMOD_FILES'		=> 'Proceed to CHMOD',

	'STAGE_CHMOD_FILES'			=> 'CHMOD in action...<br />
	<ul>
		<li><em><strong><span style="color:#009900;">File permissions CHMOD</span></strong></em><br />
		<em>After CHMOD actions you should check all CHMOD\'s on files and directories for *NIX related servers.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> into</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">755</span> into</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li>
	</ul>
	After clicking the button you will not be able to acces this installer anymore due to rename of folder <strong>/install/</strong> to <strong>/_install/</strong>. If you need the installer again rename folder <strong>/_install/</strong> than or access the renamed directory directly.<br /><br />Click the button below to continue.',

	// Portal XL BBCODE Import
	'PORTAL_BBCODE'					=> 'Portal XL Custom bbCode',
	'PORTAL_BBCODE_NOT_POSSIBLE'		=> '<strong>Adding custom bbCodes is not possible!</strong><br /><br />Your version release of this Portal: <strong>%1$s</strong><br /><br />The Portal XL must at least have the release <strong>%1$s</strong>, to be able to BBCODE all directories used by Portal XL.<br /><br />Please update the Portal manually to this release, before you can use this script again.',
	'PORTAL_BBCODE_SUCCESS'			=> 'Congratulation!<br />Adding custom bbCodes to database was successful.',

	'PORTAL_BBCODE_TODO'				=> 'Welcome to the Portal XL custom bbCode installation Wizard.<br /><br />Portal XL will install following custom bbCodes into your database:
	<ul>
		<li><span style="color:#009900;">Insert spoiler: [spoiler]your text here[/spoiler]</span></li>
		<li><span style="color:#009900;">Insert iframe: [iframe]http://url.here[/iframe]</span></li>
		<li><span style="color:#009900;">Insert youtube: [youtube]videonumber[/youtube]</span></li>
		<li><span style="color:#009900;">Insert GVideo: [GVideo]videonumber[/GVideo]</span></li>
		<li><span style="color:#009900;">Insert myvideo: [myvideo]videonumber[/myvideo]</span></li>
		<li><span style="color:#009900;">Insert clipfish: [clipfish]videonumber[/clipfish]</span></li>
		<li><span style="color:#009900;">Insert myspace: [myspace]videonumber[/myspace]</span></li>
		<li><span style="color:#009900;">Insert gametrailers: [gametrailers]trailernumber[/gametrailers]</span></li>
		<li><span style="color:#009900;">Insert center: [center]your text[/center]</span></li>
		<li><span style="color:#009900;">Insert strike: [strike]your text[/strike]</span></li>
		<li><span style="color:#009900;">Insert bgcolor: [bgcolor=red]your text[/bgcolor]</span></li>
		<li><span style="color:#009900;">Insert hidden link: [hiddenlink=http//url.her]your text[/hiddenlink]</span></li>
		<li><span style="color:#009900;">Insert offtopic: [offtopic]your text[/offtopic]</span></li>
		<li><span style="color:#009900;">Insert marquee: [marquee=color here]your text[/marquee]</span></li>
		<li><span style="color:#009900;">Insert intended text: [tab=number here]your text[/tab]</span></li>
		<li><span style="color:#009900;">Insert align: [align=direction]your text[/align]</span></li>
		<li><span style="color:#009900;">Align Image Left: [img_l]http://img_url[/img_l]</span></li>
		<li><span style="color:#009900;">Align Image Right: [img_r]http://img_url[/img_r]</span></li>
		<li><span style="color:#009900;">Insert mailto: [mail=e-mail addres]e-mail addres[/mail]</span></li>
		<li><span style="color:#009900;">Insert spoiler center align: [spoil]your text here[/spoil]</span></li>
		<li><span style="color:#009900;">Insert spoiler left align: [spoil_l]your text here[/spoil_l]</span></li>
		<li><span style="color:#009900;">Insert horizontal ruler: [hr][/hr]</span></li>
		<li><span style="color:#009900;">Insert line break: [br][/br]</span></li>
		<li><span style="color:#009900;">Insert WMV: [wmv]http://wmv_url[/wmv]</span></li>
		<li><span style="color:#009900;">Insert super script: [sup]your text[/sup]</span></li>
		<li><span style="color:#009900;">Insert Flash video: [flash_i]your url[/flash_i]</span></li>
		<li><span style="color:#009900;">Insert stream: [stream]your url[/stream]</span></li>
		<li><span style="color:#009900;">Insert FLV: [flv]your url[/flv]</span></li>
		<li><span style="color:#009900;">Insert Real Media: [rm]your url[/rm]</span></li>
		<li><span style="color:#009900;">Insert MOV: [mov]your url[/mov]</span></li>
	</ul>
	<p><strong style="text-transform: uppercase;">Note:</strong> As usual, before proceeding have a recent backup of your database.</p><br /><br />',

	'PORTAL_SQL_BBCODE_DONE'			=> '<strong>Done database action:</strong><br />',
	'PORTAL_FINAL_BBCODE_STEP'		=> 'Update bbCodes to database where set.<br /><br />Click on the button below to continue.',
	'BBCODE_DATABASE'				=> 'Proceed to BBCODE',

	'STAGE_BBCODE_DB'				=> 'BBCODE in action...<br />
	<ul>
		<li><em><strong><span style="color:#009900;">File permissions BBCODE</span></strong></em><br />
		<em>After BBCODE actions you should check all BBCODE\'s on files and directories for *NIX related servers.</em><br /><br />
		<strong><span style="color:#009900;">BBCODE <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		config.php<br /><br />
		<strong><span style="color:#009900;">BBCODE <span style="color:#FF0000;">666</span> into</span></strong>:<br />
		/images/counter/ip.txt<br /><br />
		<strong><span style="color:#009900;">BBCODE <span style="color:#FF0000;">755</span> into</span></strong>:<br />
		/cache<br />
		/store<br />
		/files<br />
		/images/upload/avartars<br />
		</li>
	</ul>
	After clicking the button you will not be able to acces this installer anymore due to rename of folder <strong>/install/</strong> to <strong>/_install/</strong>. If you need the installer again rename folder <strong>/_install/</strong> than or access the renamed directory directly.<br /><br />Click the button below to continue.',

   'PORTAL_FINAL_MODULE_STEP'		=> 'Update of the database modules table where set.<br /><br />Click on the button below to continue.',
   'PORTAL_FINAL_CONFIGFILE_STEP'	=> 'Update of the file config.php in your forum root where set.<br /><br />Click on the button below to continue.',
   'PORTAL_SQL_MODULE_DONE'			=> '<strong>Done database action:</strong><br />',

   'STAGE_INSERT_DATA'				=> 'Insert default values',
   'STAGE_POPULATE_DB'				=> 'The database tables are available.<br /><br />Click on the button below to populate the tables with data.',
   'STAGE_CHMOD'					=> 'CHMOD files',
   'STAGE_BBCODE'					=> 'bbCode Import',
   'STAGE_INSERT_MODULES'			=> 'Insert Modules',
   'PORTAL_NOT_INSTALLED'			=> 'No Portal installation found',
   'PORTAL_NOT_INSTALLED_EXPLAIN'	=> 'A default installation of Portal XL is required, please <a href="%s">proceed by first installing Portal XL</a>.',

	// Portal XL version check
	'VERSION_CHECK'					=> 'Version check',
	'VERSION_CHECK_EXPLAIN'			=> 'Checks to see if the version of Portal XL you are currently running is up to date.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Your installation is up to date, no updates are available for your version of Portal XL. You do not need to update your installation.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Your version of Portal XL is not up to date.<br />Below you will find a link to the release announcement for the latest version as well as instructions on how to perform the update.',
	'CURRENT_VERSION'				=> 'Current version',
	'LATEST_VERSION'				=> 'Latest version',
	'UPDATE_INSTRUCTIONS'			=> '
		<h2>How to update your installation with the Latest Package</h2>

		<p>The recommended way of updating your installation listed here is only valid for the latest package. You are also able to update your installation using the methods listed within the \docs\PORTAL_XL_INSTALL.html document. The steps for updating Portal XL are:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="http://www.portalxl.nl/forum/" title="http://www.portalxl.nl/forum/">Portal XL downloads page</a> and download the "Latest Package" archive.<br /></li>
			<li>Unpack the archive.<br /></li>
			<li>Upload the complete \root\ folder (retain directory structure) to your phpBB root directory (where your config.php file is).<br /></li>
			<li>Browse to \install\index.php to start the installation script and choose tab "Update"<br /></li>
			<li>Refresh cache and style(s) when done!<br /></li>
		</ul>
	',

));
?>