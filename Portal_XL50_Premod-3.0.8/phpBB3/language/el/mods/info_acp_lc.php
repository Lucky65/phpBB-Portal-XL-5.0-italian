<?php
/**
*
* acp_lc [Greek]
*
* @author Mickaël Salfati (Elglobo) http://www.phpbb-services.com
*
* @package acp
* @version $Id: info_acp_lc.php,v 1.1 2008/08/31 08:06:40 damysterious Exp $
* @copyright (c) 2007 phpBB-Services
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
* Ελληνική μετάφραση από την ομάδα μετάφρασης του phpbb2.gr:
* (http://phpbb2.gr/groupcp.php?g=322&sid=7acc2b540cebf07b063274dde036a3ac)
* Athanasios Ziouzios Panagioths Mixas Konstantakelhs Panagioths
*
**/

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

$lang = array_merge($lang, array(
	'ACP_CONNECTIONS_LOGS'			=> 'Ιστορικό Συνδέσεων',
	'ACP_CONNECTIONS_LOGS_EXPLAIN'	=> 'Εδώ θα απαριθμούνται όλες οι συνδέσεις που πραγματοποιούνται στην κοινότητα σας. Μπορείτε να τις κατατάξετε ανά όνομα μέλους, ημερομηνία, IP ή ενέργεια. Επίσης αν έχετε τα απαραίτητα δικαιώματα μπορείτε να καθαρίσετε τις ενέργειες οποιουδήποτε μέλους ή όλο το ιστορικό.',
	'ACP_LOGS_GOODIES'				=> '<strong>Σημείωση</strong>: Μπορείτε να ερευνήσετε όλες τις IP κάνοντας κλικ στο όνομα της στήλης ή πατώντας στην IP που θέλετε.',
	'ACP_LOGS_HOSTNAME'				=> 'Κόμβος',
	'ACP_LOGS_SORT'					=> 'Ταξινόμηση',
	'ACP_LOGS_ALL'					=> 'Όλα',
	'ACP_LOGS_FAIL'					=> 'Λάθος',
	
	'LOG_CLEAR_CONNECTIONS'			=> '<strong>Ιστορικό συνδέσεων καθαρίστηκε</strong>',
	'LOG_CONFIG_LOG_CONNECTIONS'	=> '<strong>Μεταβλήθηκαν ρυθμίσεις ιστορικού συνδέσεων</strong>',
	'LOG_AUTH_SUCCESS'				=> '<strong>Επιτυχής σύνδεση</strong>',
	'LOG_AUTH_SUCCESS_AUTO'			=> '<strong>Επιτυχής σύνδεση (Αυτόματη σύνδεση)</strong><br />» %s',
	'LOG_AUTH_FAIL'					=> '<strong>Αποτυχία</strong> - λάθος κωδικός πρόσβασης',
	'LOG_AUTH_FAIL_NO_PASSWORD'     => '<strong>Failure</strong> - no password supplied<br />» %s',
	'LOG_AUTH_FAIL_BAN'				=> '<strong>Αποτυχία</strong> - απαγορευμένο όνομα μέλους',
	'LOG_AUTH_FAIL_CONFIRM'			=> '<strong>Αποτυχία</strong> - λάθος κωδικός επιβεβαίωσης',
	'LOG_AUTH_FAIL_CONVERT'			=> '<strong>Αποτυχία</strong> - μετατροπής κωδικού',
	'LOG_AUTH_FAIL_INACTIVE'		=> '<strong>Αποτυχία</strong> - μη ενεργό μέλος',
	'LOG_AUTH_FAIL_UNKNOWN'			=> '<strong>Αποτυχία</strong> - μη υπαρκτό μέλος<br />» %s',
	'LOG_ADMIN_AUTH_FAIL'			=> '<strong>Αποτυχία σύνδεσης στον ΠΕΔ</strong> - λάθος κωδικός πρόσβασης',
	'LOG_ADMIN_AUTH_FAIL_NO_ADMIN'	=> '<strong>Αποτυχία σύνδεσης στον ΠΕΔ</strong> - χωρίς δικαιώματα πρόσβασης',
	'LOG_ADMIN_AUTH_FAIL_DIFFER'	=> '<strong>Αποτυχία σύνδεσης στον ΠΕΔ</strong> - επανα-πιστοποίηση σαν διαφορετικό μέλος<br />» %s',
	'LOG_ADMIN_AUTH_SUCCESS'		=> '<strong>Επιτυχής σύνδεση στο ΠΕΔ</strong>',
	'LOG_LC_EXCLUDE_IP'				=> '<strong>IP εξαιρείται από το ιστορικό συνδέσεων</strong><br />» %s',
	'LOG_LC_UNEXCLUDE_IP'			=> '<strong>IP δεν εξαιρείται από το ιστορικό συνδέσεων</strong><br />» %s',
	'LOG_LC_INTERVAL'				=> '(%s προσπάθειες)',
	
	// Settings panel
	'ACP_LC'						=> 'Ιστορικό συνδέσεων',
	'ACP_CONNECTIONS'				=> 'Ιστορικό συνδέσεων',
	'ACP_CONNECTIONS_SETTINGS'		=> 'Ρυθμίσεις Ιστορικού Συνδέσεων',
	'ACP_CONNECTIONS_SETTINGS_EXPLAIN'		=> 'Από εδώ μπορείτε να ρυθμίσετε όλες τις παραμέτρους για το ιστορικό συνδέσεων.<br />Μπορείτε ακόμα να <em>εξαιρέσετε (ή επαναφέρετε)</em> διευθύνσεις IP στο ιστορικό συνδέσεων.',
	'LC_SETTINGS'					=> 'Ρυθμίσεις',
	'LC_PRUNING'					=> 'Αυτόματος καθαρισμός',
	'LC_DISABLE'					=> 'Απενεργοποίηση καταγραφής συνδέσεων',
	'LC_DISABLE_EXPLAIN'			=> 'Αυτή η επιλογή απενεργοποιεί <em>εντελώς</em> την καταγραφή των συνδέσεων.',
	'LC_ACP_DISABLE'				=> 'Απενεργοποίηση καταγραφής συνδέσεων στο ΠΕΔ',
	'LC_ACP_DISABLE_EXPLAIN'		=> 'Η <em>αποτυχημένες</em> συνδέσεις θα καταγράφονται πάνα.',
	'LC_FOUNDER_DISABLE'			=> 'Απενεργοποίηση καταγραφής συνδέσεων <em>Ιδρυτικών μελών</em>',
	'LC_FOUNDER_DISABLE_EXPLAIN'	=> 'Οι <em>αποτυχημένες</em> συνδέσεις Ιδρυτικών μελών θα καταγράφονται πάντα.',
	'LC_ADMIN_DISABLE'				=> 'Απενεργοποίηση καταγραφής συνδέσεων για <em>Διαχειριστές</em>',
	'LC_ADMIN_DISABLE_EXPLAIN'		=> 'Οι <em>αποτυχημένες</em> συνδέσεις διαχειριστών θα καταγράφονται πάντα.',
	'LC_INTERVAL'					=> 'Διάστημα μεταξύ των καταγραφών',
	'LC_INTERVAL_EXPLAIN'			=> 'Ο χρόνος σε δευτερόλεπτα ανάμεσα σε δυο <em>αποτυχημένες ή ίδιες</em> καταχωρήσεις. Θέτοντας την τιμή στο 0 απενεργοποιείται.',
	'LC_PRUNE_DAY'					=> 'Αυτόματος καθαρισμός ιστορικού συνδέσεων',
	'LC_PRUNE_DAY_EXPLAIN'			=> 'Καθορίζεται σε ημέρες την διάρκεια του ιστορικού συνδέσεων. Βάζοντας το 0 το απενεργοποιείται.',
	
	'LC_MANAGE_IP'					=> 'Διαχείριση διευθύνσεων IP',
	'LC_NO_EXCLUDE_IP'				=> 'Καμία εξαιρεμένη διεύθυνση IP',
	'LC_EXCLUSION_IP'				=> 'Εξαιρεμένες IP',
	'LC_EXCLUSION_IP_EXPLAIN'		=> 'Για να ορίσετε πάνω από μια διαφορετικές IP βάλτε τες σε διαφορετικές γραμμές. Για χρήση χαρακτήρα μπαλαντέρ χρησιμοποιήστε το “*”.',
	'LC_UNEXCLUSION_IP'				=> 'Επαναφορά IP',
	'LC_UNEXCLUSION_IP_EXPLAIN'		=> 'Μπορείτε να επαναφέρετε πολλαπλές διευθύνσεις IP με την μια χρησιμοποιώντας κατάλληλα το πληκτρολόγιο και το ποντίκι σας για τον υπολογιστή και τον πλοηγό σας.',
	
	'LC_EXCLUDE_NO_IP'					=> 'Δεν καθορίστηκαν σωστά διευθύνσεις IP',
	'LC_EXCLUDE_IP_UPDATE_SUCCESSFUL'	=> 'Επιτυχής ενημέρωση λίστα εξαίρεσης.',
	
));

?>