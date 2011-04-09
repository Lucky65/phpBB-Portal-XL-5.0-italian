<?php
/**
*
* install [Italian]
*
* @package language
* @version $Id: arcade_install.php 681 2008-12-16 16:36:54Z JRSweets $
* @copyright (c) 2005 phpBB Group
* @copyright (c) 2009, 2010 luckylab.eu - revision for portal xl on 2010/15/01
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
	'CAT_INSTALL'							=> 'Installa',
	'CAT_OVERVIEW'							=> 'Panoramica',
	'CAT_UNINSTALL'							=> 'Disinstalla',
	'CAT_UPDATE'							=> 'Aggiorna',
	'CAT_VERIFY'							=> 'Verifica',

	'DONE'									=> 'Fatto',
	'DUPLICATE_AUTH_FOUND'					=> '%s è stato trovato %s volte',

	'FILES_REQUIRED'						=> 'File e Directory',
	'FILES_REQUIRED_EXPLAIN'				=> '<strong>Richiesto</strong> - Per funzionare correttamente phpBB Arcade deve poter aver accesso o scrivere certi file o directory. Se visualizzi “Non trovato” devi creare il rispettivo file o directory. Se visualizzi “Non scrivibile” devi cambiare i permessi del dispettivo file o directory in modo da permettere a phpBB Arcade la scrittura.',
	'FOUND'									=> 'Trovato',

	'GPL'									=> 'General Public License',

	'INSTALL_CONGRATS'						=> 'Congratulazioni!',
	'INSTALL_CONGRATS_EXPLAIN'				=> '
		<p>Hai correttamente installato la salagiochi phpBB Arcade %1$s.</p>
		<p>Clicca il bottone in basso per andare nel tuo pannello di controllo amministratore (PCA). Esamina le nuove opzioni disponibili</p><p><strong>Cancella, sposta o rinomina la cartella di installazione prima di usare la board. Se questa cartella è presente, solo il Pannello di Controllo Amministratore sarà accessibile.</strong></p>',
	'INSTALL_INTRO'							=> 'Benvenuto nell’installazione della salagiochi phpBB Arcade',
	'INSTALL_INTRO_BODY'					=> 'Con questa opzione è possibile installare la salagiochi nel tuo database.',
	'INSTALL_LOGIN'							=> 'Procedi nel PCA',
	'INSTALL_PANEL'							=> 'Pannello installazione phpBB Arcade',
	'INSTALL_START'							=> 'Inizia installazione',
	'INSTALL_TEST'							=> 'Esegui il test nuovamente',
	'INST_ERR'								=> 'Errore installazione',
	'INST_ERR_AUTH'							=> 'Non sei autorizzato ad eseguire lo script.<br /><br />Le seguienti condizioni devono essere soddisfatte.  Devi essere loggato al sito e devi essere un utente fondatore. Se sei loggato e fondatore allora hai parametri sbagliati dei cookie nel PCA. Controlla le impostazioni di dominio. Se l’url del tuo sito è <strong>http://www.esempio.com</strong> allora il dominio cookie deve essere <strong>.esempio.com</strong>.',
	'INST_ERR_FATAL'						=> 'Errore grave installazione',
	'INST_ERR_FATAL_DB'						=> 'Si è verificato un errore grave ed irrecuperabile. La causa potrebbe essere un utente senza i giusti permessi per <code>CREARE TABELLE</code> o <code>INSERIRE</code> dati, ecc. Ulteriori informazioni in basso. Contatta il tuo hosting provider o il forum disupporto phpBB per ulteriore assistenza.',
	'INST_SQL_RESULTS'						=> 'Modifiche SQL Completate',

	'MODULE_ACP'							=> 'Modula PCA',
	'MODULE_MCP'							=> 'Modulo PCM',
	'MODULE_UCP'							=> 'Modulo PCU',

	'NEXT_STEP'								=> 'Procedi al passaggio successivo',
	'NOT_FOUND'								=> 'Non trovato',

	'OVERVIEW_BODY'							=> 'Benvenuto nella Sala giochi!<br /><br />phpBB Arcade è ricca di caratteristiche, con un interfaccia amichevole, ed è pienamente supportata.<br /><br />Il sistema di installazione ti guiderà attraverso l’installazione della phpBB Arcade, aggiornandola all’ultima versione per le vecchie release, disinstallandola o verificando se è installata correttamente. Per leggere la licenza phpBB Arcade o ottenere supporto, seleziona le rispettive opzioni dal menu. Per continuare, seleziona il tab appropriato sopra.',

	'PHPBB_VERSION_REQD'					=> 'Versione phpBB >= %s',
	'PHP_CURL_SUPPORT'						=> 'Impostazioni PHP<var>curl</var> installate',
	'PHP_CURL_SUPPORT_EXPLAIN'				=> '<strong>Facoltativo</strong> - Questa impostazione è facoltativa, comunque raccomandiamo che la libreria curl sia installata sul tuo server se vuoi usare il modulo download giochi nel PCA.',
	'PHP_SETTINGS'							=> 'Versione phpBB e impostazioni PHP',
	'PHP_SETTINGS_EXPLAIN'					=> '<strong>Richiesto</strong> - Devi avere almeno la versione %s di phpBB per installare phpBB Arcade.',
	'PHP_URL_FOPEN_SUPPORT'					=> 'L’impostazione PHP <var>allow_url_fopen</var> è abilitata',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'			=> '<strong>Facoltativo</strong> - Questa impostazione è facoltativa, comunque raccomandiamo che la libreria curl sia installata sul tuo server se vuoi usare il modulo download giochi nel PCA.',

	'REQUIREMENTS_EXPLAIN'					=> 'Prima di procedere nell’installazione, phpBB Arcade eseguirà alcuni test sulla configurazione del server per assicurarsi che puoi installare ed eseguire la salagiochi phpBB Arcade. Assicurati di leggere attentamente i risultati e di non procedere fino a quando i test non sono superati. Se vuoi usare caratteristiche che dipendono dai test facoltativi, devi assicurarti che siano superati anche quelli.',
	'REQUIREMENTS_TITLE'					=> 'Compatibilità installazione',

	'STAGE_INSTALL'							=> 'Installa',
	'STAGE_INSTALL_ARCADE'					=> 'Installazione della phpBB Arcade',
	'STAGE_INSTALL_ARCADE_EXPLAIN'			=> 'Le tabelle del database, i moduli, i permessi e i dati usati dalla phpBB Arcade sono stati creati.',
	'STAGE_INTRO'							=> 'Introduzione',
	'STAGE_REQUIREMENTS'					=> 'Requisiti',
	'STAGE_UNINSTALL'						=> 'Disinstalla',
	'STAGE_UNINSTALL_ARCADE'				=> 'Disinstallazione della phpBB Arcade',
	'STAGE_UNINSTALL_ARCADE_EXPLAIN'		=> 'Le tabelle del database, i moduli, i permessi e i dati usati dalla phpBB Arcade sono stati rimossi.  Per completare la disinstallazione devi effettuare le modifiche hai file in maniera inversa e rimuovere tutti i file della MOD dal server.',
	'STAGE_UPDATE'							=> 'Aggiorna',
	'STAGE_UPDATE_ARCADE'					=> 'Aggiorna phpBB Arcade',
	'STAGE_UPDATE_ARCADE_EXPLAIN'			=> 'La salagiochi phpBB Arcade è stata aggiornata all’ultima versione.',
	'STAGE_VERIFY'							=> 'Verifica',
	'SUB_INTRO'								=> 'Introduzione',
	'SUB_LICENSE'							=> 'Licenza',
	'SUB_SUPPORT'							=> 'Supporto',
	'SUPPORT_BODY'							=> 'Pieno supporto verrà dato alla versione corrente della phpBB Arcade, gratis. Questo include:</p><ul><li>installazione</li><li>configurazione</li><li>questioni tecniche</li><li>problemi relativi a potenziali bug nel software</li><li>aggiornamenti da precendenti versioni</li></ul><p>Raccomandiamo gli utenti con vecchie versioni della phpBB Arcade di aggiornare l’installazione all’ultima versione.</p><h2>Ottenere supporto</h2><p><a href="http://www.jeffrusso.net/forum/viewforum.php?f=20">Sito principale di sviluppo</a><br /><a href="http://www.phpbb.com/community/viewtopic.php?f=70&amp;t=685225">Argomento di sviluppo su phpBB.com</a><br />Guida utente (si trova nel PCA)<br /><br />',

	'UNAVAILABLE'							=> 'Non disponibile',
	'UNINSTALL_CONGRATS_EXPLAIN'			=> '
		<p>Hai correttamente disinstallato la phpBB Arcade %1$s.</p>
		<p>Clicca il bottone in basso per andare nel tuo pannello di controllo amministratore (PCA). Esamina le nuove opzioni disponibili</p><p><strong>Cancella, sposta o rinomina la cartella di installazione prima di usare la board. Se questa cartella è presente, solo il Pannello di Controllo Amministratore sarà accessibile.</strong></p>',
	'UNINSTALL_INTRO'						=> 'Benvenuto nella disinstallazione di phpBB Arcade',
	'UNINSTALL_INTRO_BODY'					=> 'Con questa opzione è possibile rimuovere la salagiochi phpBB Arcade dal tuo database.',
	'UNINSTALL_START'						=> 'Inizia la disinstallazione',
	'UNWRITABLE'							=> 'Non scrivibile',
	'UPDATE_CONGRATS_EXPLAIN'				=> '
		<p>Hai correttamente aggiornato la salagiochi phpBB Arcade %1$s.</p>
		<p>Clicca il bottone in basso per andare nel tuo pannello di controllo amministratore (PCA). Esamina le nuove opzioni disponibili</p><p><strong>Cancella, sposta o rinomina la cartella di installazione prima di usare la board. Se questa cartella è presente, solo il Pannello di Controllo Amministratore sarà accessibile.</strong></p>',
	'UPDATE_INTRO'							=> 'Benvenuto nell’aggiornamento della phpBB Arcade',
	'UPDATE_INTRO_BODY'						=> 'Con questa opzione è possibile aggiornare la phpBB Arcade all’ultima versione.',
	'UPDATE_START'							=> 'Inizia l’aggiornamento',

	'VERIFY_ALL_FILES'						=> 'Tutti i file trovati',
	'VERIFY_ALL_FILES_EDITED'				=> 'Tutti i file sono modifcati',
	'VERIFY_ALL_MODULES'					=> 'Tutti i moduli trovati',
	'VERIFY_ALL_PERMISSIONS'				=> 'Tutti i permessi trovati',
	'VERIFY_ALL_TABLES'						=> 'Tutte le tabelle trovate',
	'VERIFY_ARCADE_INSTALLATION'			=> 'Verifica l’installazione della salagiochi',
	'VERIFY_ARCADE_INSTALLATION_EXPLAIN'	=> 'Questo controllerà che la salagiochi è installata correttamente.',
	'VERIFY_CONGRATS_EXPLAIN'				=> '
		<p>Hai correttamente verificato l’installazione la salagiochi phpBB Arcade %1$s.</p>
		<p>Clicca il bottone in basso per andare nel tuo pannello di controllo amministratore (PCA). Esamina le nuove opzioni disponibili</p><p><strong>Cancella, sposta o rinomina la cartella di installazione prima di usare la board. Se questa cartella è presente, solo il Pannello di Controllo Amministratore sarà accessibile.</strong></p>',
	'VERIFY_DUPLICATE_ARCADE_PERMISSIONS'	=> 'Controllando eventuali duplicati di permessi arcade',
	'VERIFY_DUPLICATE_PERMISSIONS'			=> 'Controllando eventuali duplicati di permessi phpBB',
	'VERIFY_ERRORS'							=> 'Senza successo!',
	'VERIFY_ERRORS_EXPLAIN'					=> '
		<p>La phpBB Arcade %1$s non è installata correttamente.</p>
		<p>Clicca il bottone in basso per tornare alla verifica dell’installazione.</p><p><strong>Controlla gli errori qui in basso.</strong></p>',
	'VERIFY_FILES_EDITED'					=> 'Controllando le modifiche ai file',
	'VERIFY_FILES_EXIST'					=> 'Controllando se i file esistono',
	'VERIFY_FOUND_DUPLICATE_PERMISSIONS'	=> 'Valori auth duplicati possono causare problemi con i permessi. I seguenti valori auth duplicati sono stati trovati nella tabella %s :<br />%s',
	'VERIFY_INTRO'							=> 'Benvenuto nella verifica di installazione della phpBB Arcade',
	'VERIFY_INTRO_BODY'						=> 'Con questa opzione è possibile verificare che la salagiochi phpBB Arcade è installata correttamente sul tuo server.',
	'VERIFY_MISSING_FILES'					=> 'Mancano i seguenti file:<br />%s',
	'VERIFY_MISSING_FILES_EDITED'			=> 'I seguenti file sembrano non modificati:<br />%s',
	'VERIFY_MISSING_MODULES'				=> 'Mancano i seguenti moduli:<br />%s',
	'VERIFY_MISSING_PERMISSIONS'			=> 'Mancano i seguenti permessi:<br />%s',
	'VERIFY_MISSING_TABLES'					=> 'Mancano le seguenti tabelle:<br />%s',
	'VERIFY_MODULES'						=> 'Controllando la presenza dei moduli',
	'VERIFY_NO_DUPLICATE_PERMISSIONS'		=> 'Nessun duplicato permessi trovato',
	'VERIFY_OTHER_DB_DATA'					=> 'Controllando altri dati nel db',
	'VERIFY_PERMISSIONS'					=> 'Controllando se tutti i permessi esistono',
	'VERIFY_TABLES_EXIST'					=> 'Controllando se le tabelle esistono',
	'VERIFY_TABLE_ALTERED'					=> 'Tabella %s correttamente alterata',
	'VERIFY_TABLE_NOT_ALTERED'				=> 'Le seguenti colonne mancano nella tabella %s:<br />%s',
	'VERSION'								=> 'Versione',

	'WELCOME_INSTALL'						=> 'Benvenuto nell’installazione della phpBB Arcade',
	'WRITABLE'								=> 'Scrivibile',
));

?>