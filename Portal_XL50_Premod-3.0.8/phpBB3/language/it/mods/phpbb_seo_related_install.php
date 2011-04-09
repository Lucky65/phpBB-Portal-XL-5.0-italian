<?php
/**
*
* acp_phpbb_seo [italian]
*
* @package Ultimate SEO URL phpBB SEO
* @version $Id: phpbb_seo_related_install.php 152 2009-11-10 19:21:31Z dcz $
* @copyright (c) 2006 - 2009 www.phpbb-seo.com
* @copyright (c) 2009, 2010 luckylab.eu - translated for portal xl on 2010/03/16
* @license http://opensource.org/licenses/gpl-license.php GNU Public License v2
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
	// ACP
	'SEO_RELATED' => 'Attivazione argomenti correlati',
	'SEO_RELATED_EXPLAIN' => 'Visualizza o meno la lista degli argomenti correlati negli argomenti delle pagine.<br/><b style="color:red;">Nota :</b><br/>With MYSQL >=4.1 con relative tabelle usano MyISAM, gli argomenti correlati sono ottenuti usando un indice FullText index sul titolo dell’argomento e verrà ordinato per rilevanza.',
	'SEO_RELATED_CHECK_IGNORE' => 'Ignora filtro parole',
	'SEO_RELATED_CHECK_IGNORE_EXPLAIN' => 'Applica o meno, le esclusioni della search_ignore_words.php durante la ricerca per argomenti correlati',
	'SEO_RELATED_LIMIT' => 'Limite argomenti correlati',
	'SEO_RELATED_LIMIT_EXPLAIN' => 'Valore massimo degli argomenti visualizzati',
	'SEO_RELATED_ALLFORUMS' => 'Cerca in tutti i forums',
	'SEO_RELATED_ALLFORUMS_EXPLAIN' => 'Cerca in tutti i forums invece di cercare in quello attuale.<br/><b style="color:red;">Nota :</b><br/>Cerca in tutti i forums è più lento e non comporta necessariamente un risultato migliore.',
	// Install
	'INSTALLED' => 'phpBB SEO argomenti correlati installato',
	'ALREADY_INSTALLED' => 'phpBB SEO argomenti correlati è già installato',
	'FULLTEXT_INSTALLED' => 'Mysql indice FullText installato',
	'FULLTEXT_NOT_INSTALLED' => 'Mysql indice FullText non è disponibile su questo server, SQL LIKE potrebbe essere utilizzato',
	'INSTALLATION' => 'phpBB SEO argomenti correlati installazione mod',
	'INSTALLATION_START' => '&rArr; <a href="%1$s" ><b>Procedi con l’installazione del mod</b></a><br/><br/>&rArr; <a href="%2$s" ><b>Riprova ed imposta l’indice FullText</b></a> (Mysql >= 4.1 usa solo tabelle Myisam)<br/><br/>&rArr; <a href="%3$s" ><b>Procedi con la disinstallazione del mod</b></a>',
	// un-install
	'UNINSTALLED' => 'phpBB SEO argomenti correlati disintallato',
	'ALREADY_UNINSTALLED' => 'phpBB SEO argomenti correlati è già disibstallato',
	'UNINSTALLATION' => 'phpBB SEO disinstallazione argomenti correlati',
	// SQL message
	'SQL_REQUIRED' => 'La configurazione dell’utente db non dispone di privilegi sufficienti per modificare le tabelle, è necessario eseguire questa query manualmente, al fine di aggiungere o eliminare l’indice Mysql FullText :<br/>%1$s',
	// Security
	'SEO_LOGIN'		=> 'Il forum richiede che tu sia registrato e loggato per vedere questa pagina.',
	'SEO_LOGIN_ADMIN'	=> 'Il forum richiede che tu sia loggato come admin per vedere questa pagina.<br/>La tua sessione è stata cancellata per motivi di sicurezza.',
	'SEO_LOGIN_FOUNDER'	=> 'Il forum richiede che tu sia loggato come founder per vedere questa pagina',
	'SEO_LOGIN_SESSION'	=> 'Controllo sessione fallito.<br/>Le configurazioni non sono state alterate.<br/>La tua sessione è stata cancellata per motivi di sicurezza.',
));
?>