<?php
/**
*
* help_arcade [Greek]
*
* @package language
* @version $Id: help_arcade.php 810 2009-07-04 17:03:48Z JRSweets $
* @copyright (c) 2008 JeffRusso.net
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Ελληνική μετάφραση από diastasi (thraki.info) και την ομάδα  του phpbb2.gr:
* (http://phpbb2.gr/team/)
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Γενικά',
	),
	array(
		0 => 'Τι λειτουργίες περιλαμβάνονται στο phpBB Arcade?',
		1 => '<ul><li>Εκτεταμένη υποστήριξη παιχνιδιών</li>
		<li>Κατηγορίες, Υποκατηγορίες και Δεσμοί χωρίς όριο (Μίμηση των Δ.Συζητήσεων phpBB3)</li>
		<li>Πλήρεις Μονάδες ACP και UCP</li>
		<li>Προσβάσεις Διαχειριστή για τις μονάδες ACP</li>
		<li>Προσβάσεις τοπικής κατηγορίας</li>
		<li>Κατηγορίες προστατευόμενες με κωδικό</li>
		<li>Πανεύκολη εγκατάσταση παιχνιδιών</li>
		<li>Αυτόματη μετατροπή αρχείων tar παιχνιδιού IBPro</li>
		<li>Ενσωματωμένο "Ποιος είναι online" στο phpBB3</li>
		<li>Προβολή "ποιος παίζει αυτό το παιχνίδι"</li>
		<li>Σύστημα Αγαπημένων παιχνιδιών</li>
		<li>Ενσωματωμένο Σύστημα Μεταφόρτωσης παιχνιδιών</li>
		<li>Στατιστικές</li>
		<li>Σύστημα Βαθμολόγησης</li>
		<li>Σύστημα Σχολίων</li>
		<li>Σύστημα αναφορών</li>
		<li>Παίξιμο παιχνιδιών κανονικό ή σε αναδυόμενο παράθυρο</li>
		<li>Σύστημα Αναζήτησης</li>
		<li>Ενσωμάτωση Συστήματος Πόντων</li>
		<li>Και πολλά ακόμη....</li></ul>',
	),
	array(
		0 => 'Τι στυλ υποστηρίζονται?',
		1 => '<ul>
		<li>prosilver</li>
		<li><a href="http://www.phpbb.com/styles/db/index.php?i=misc&mode=display&contrib_id=7525">prosilver Special Edition</a></li>
		<li><a href="http://www.phpbb.com/styles/db/index.php?i=misc&mode=display&contrib_id=8885">revolution</a></li>
		<li>subsilver2</li>
		</ul>',
	),
	array(
		0 => 'Τι γλώσσες υποστηρίζονται?',
		1 => 'Όλες οι υποστηριζόμενες γλώσσες για την τρέχουσα έκδοση  μπορούν να βρεθούν <a href="http://www.jeffrusso.net/forum/viewtopic.php?f=26&t=1329">εδώ</a>.',
	),
	array(
		0 => 'Τι γίνεται με τα άλλα στυλ και γλώσσες?',
		1 => 'Εάν μεταφράσετε το phpBB Arcade στη γλώσσα σας ή δημιουργήσετε πρότυπο για άλλο στυλ θα εκτιμούσα αν μου το στείλετε <a href="http://www.jeffrusso.net/forum/viewforum.php?f=25">εδω</a>.',
	),	
	array(
		0 => 'Μπορώ να χρησιμοποιήσω συγκεκριμένες εικόνες στυλ μέσα στο arcade?',
		1 => 'Ναι.  Κάθε εικόνα που βρίσκεται μέσα στην προεπιλεγμένη διαδρομή εικόνων μπορεί να χρησιμοποιηθεί.  Βάλτε μία εικόνα ίδιου ονόματος μέσα στο “your_style\theme\images\arcade\” .  Εαν ένα στυλ δεν έχει συγκεκριμένη εικόνα θα χρησιμοποιηθεί η εικόνα προεπιλογής.  Αυτό ισχύει και στις εικόνες κατηγορίας. Για τη χρήση συγκεκριμένων εικόνων κατηγορίας επιλέξτε πρώτα την προεπιλεγμένη κατά τη δημιουργία/επεξεργασία κατηγορίας και μετά ανεβάστε την εικόνα με ίδιο όνομα στο “your_style\theme\images\arcade\cats\” .',
	),
	array(
		0 => '--',
		1 => 'Εγκατάσταση/Αναβάθμιση',
	),
	array(
		0 => 'Τι Βάσεις Δεδομένων υποστηρίζει το phpBB Arcade?',
		1 => 'Το arcade θα δουλέψει σωστά με όλες τις βάσεις που υποστηρίζονται από το phpBB3.',
	),
	array(
		0 => 'Πως εγκαθιστώ το phpBB Arcade?',
		1 => 'Υπάρχουν λίγα σημεία επεξεργασίας στον πυρήνα του phpBB3 που απαιτούνται και περιλαμβάνεται οδηγός εγκατάστασης για τη βάση δεδομένων και την προσθήκη των μονάδων στο ACP και το UCP.  Σιγουρευτείτε ότι ακολουθείτε πιστά τις οδηγίες εγκατάστασης στο αρχείο ModX για την επεξεργασία του πυρήνα και των στυλ.',
	),
	array(
		0 => 'Πως απεγκαθιστώ το phpBB Arcade?',
		1 => 'Αναιρέστε όλες τις επεξεργασίες στα αρχεία του phpBB και τρέξτε τον οδηγό εγκατάστασης επιλέγοντας την απεγκατάσταση.',
	),
	array(
		0 => 'Πως αναβαθμίζω το phpBB Arcade στην νεώτερη έκδοση?',
		1 => 'Μεταφορτώστε την νεώτερη έκδοση.  Ανεβάστε όλα τα αρχεία υπερκαλύπτοντας τα παλιά. Ανοίξτε το αρχείο modx αναβάθμισης και κάντε τις απαραίτητες αλλαγές στα στυλ και τον πυρήνα.  Μετά τρέξτε τον οδηγό εγκατάστασης που περιλαμβάνεται.  Επιλέξτε την αναβάθμιση στην νεώτερη έκδοση και κατόπιν διαγράψτε το φάκελο the arcade_install από τον διακομιστή.<br /><br />Εαν για παράδειγμα είστε στην έκδοση1.0.RC4 και θέλετε να πάτε στην έκδοση 1.0.RC6:
<ul><li>Ανεβάστε όλα τα αρχεία διαγράφοντας τα παλιά</li>
<li>Δείτε μέσα στον φάκελο contrib και ακολουθείστε το <strong>update10RC4-10RC5.xml</strong> και ύστερα <strong>update10RC5-10RC6.xml</strong></li>
<li>Τρέξτε τον οδηγό εγκατάστασης με την επιλογή να αναβαθμιστεί στην νεώτερη έκδοση</li></ul>',
	),
	array(
		0 => 'Πως θα ελέγξω ότι όλα έχουν γίνει σωστά?',
		1 => 'Σιγουρευτείτε ότι τρέχετε την τελευταία έκδοση του arcade.  Ανοίξτε τον οδηγό εγκατάστασης στον πλοηγό σας και κάντε κλικ στο "Έλεγχος εγκατάστασης", έτσι θα ελεγχθεί εάν το arcade είναι εγκατεστημένο πλήρως.',
	),
	array(
		0 => '--',
		1 => 'Σκόρ',
	),
	array(
		0 => 'Γιατί δεν αποθηκεύονται τα σκορ μου?',
		1 => 'Το πρώτο πράγμα που πρέπει να ελέγξετε είναι εάν το παιχνίδι υποστηρίζεται από το arcade.  Κατόπιν ελέγξτε εάν έχετε τροποποιήσει σωστά το <strong>index.php</strong>.  Εάν δεν έχει τροποποιηθεί σωστά τα παιχνίδια IBPRO δεν θα αποθηκεύουν τα σκορ.  Τέλος ελέγξτε τις ρυθμίσεις cookie στην διαχείριση.  Εάν παράδειγμα ο δεσμός για τη σελίδα σας είναι <strong>http://www.example.com</strong> τότε η ρύθμιση cookie domain πρέπει να είναι <strong>.example.com</strong>.',
	),
	array(
		0 => 'Γιατί βλέπω το παρακάτω μήνυμα αφού τελειώσει το παιχνίδι, "Ο τύπος καταχώρησης σκορ δεν ταιριάζει με τον τύπο του παιχνιδιού"?',
		1 => 'Ο τύπος σκορ έχει ρυθμιστεί λάθος για το παιχνίδι.  Εάν δείτε το ιστορικό λαθών στον πίνακα διαχείρισης θα βρείτε το παιχνίδι.  Δείτε το σφάλμα "Αποθηκευμένος και καταχωρημένος τύπος παιχνιδιού δεν ταιριάζουν". Εδώ θα δείτε τον τύπο σκορ του παιχνιδιού (σωστό) και τον καταχωρημένο τύπο (λάθος).  Επεξεργαστείτε το παιχνίδι και ρυθμίστε τον σωστό τύπο.',
	),	
	array(
		0 => 'Γιατί οι επισκέπτες, παρόλο που έχω τις κατάλληλες προσβάσεις, δεν μπορούν να αποθηκεύσουν τα σκορ?',
		1 => 'Ακόμη κι αν δώσετε πλήρεις προσβάσεις σε επισκέπτες δεν μπορούν να αποθηκεύσουν τα σκορ τους στο arcade.  Είναι από τον σχεδιασμό.',
	),
	array(
		0 => 'Πως ενεργοποιώ τη "Λειτουργία Δοκιμής" για μια κατηγορία?',
		1 => 'Πηγαινε στη μονάδα "Διαχείριση Arcade". Κάνε κλικ στην επεξεργασία για την κατηγορία που θέλεις και θέσε την επιλογή "Λειτουργία Δοκιμής" σε ΝΑΙ.',
	),
	array(
		0 => 'Τι κάνει η "λειτουργία δοκιμής"?',
		1 => 'Επιτέπει να παιχτούν παιχνίδια στην κατηγορία χωρίς να αποθηκευθούν δεδομένα ή σκορ.  Ετσι μπορείς να δοκιμάσεις παιχνίδια ώστε να σιγουρευτείς ότι λειτουργούν κανονικά. Μόλις τελειώσει τ παιχνίδι θα προβληθεί ένα μήνυμα με το τι έχει συμβεί. Εάν είσαι Διαχειριστής με ενεργοποιημένο το DEBUG_EXTRA θα δείς περισσότερες πληροφορίες.',
	),
	array(
		0 => '--',
		1 => 'Παιχνίδια',
	),
	array(
		0 => 'Τι τύποι παιχνιδιών υποστηρίζονται?',
		1 => 'Το arcade υποστηρίζει τα παρακάτω:<br /><ul><li>Activity Mod</li><li>Arcade Room</li><li>V3 Arcade</li><li>IBPro</li><li>IBPro ArcadeLib</li><li>IBPro V3</li><li>None scoring games</li></ul>',
	),
	array(
		0 => 'Ποιός είναι ο πιο εύκολος τρόπος για εγκατάσταση παιχνιδιών?',
		1 => 'Ο ευκολότερος τρόπος είναι να χρησιμοποιείτε παιχίδια ήδη εγκατεστημένα σε phpBB Arcade ή IBPro tar.  Μπορείτε επίσης να χρησιμοποιήσετε παιχνίδια για το Arcade αν περιέχουν αρχεία xml. Το arcade θα αναγνωρίσει αυτόματα ότι φορτώνετε ή αποσυμπιέζετε και θα το μετατρέψει σε κατάλληλη μορφή για εγκατάσταση.',
	),	
	array(
		0 => 'Που μπορώ να βρω τα αρχεία arcadelib?',
		1 => '<ul><li><a href="http://www.jeffrusso.net/forum/viewtopic.php?f=20&amp;t=1503">Mirror 1</a></li>
		<li><a href="http://igames.origon.dk/forum/viewtopic.php?p=2118#p2118">Mirror 2</a></li>
		<li><a href="http://igames.origon.dk/forum/viewtopic.php?p=3696#p3696">Mirror 3</a></li></ul>',
	),
	array(
		0 => 'Τι απαιτείται από το παιχνίδι για να εγκατασταθεί?',
		1 => 'Τα παιχνίδια πρέπει να "ανεβούν" στο (εξ ορισμού) <strong>http://www.example.com/phpBB/includes/arcade/games/</strong> μέσα σε φάκελο που έχει το ίδιο όνομα με το αρχείο swf.  Εαν το αρχείο flash ονομάζεται <strong>test.swf</strong>, μέσα στο <strong>http://www.example.com/phpBB/includes/arcade/games/</strong> πρέπει να υπάρχει φάκελος με το όνομα <strong>test</strong>.<br /><br />Μέσα σε αυτόν τον φάκελο πρέπει να υπάρχουν:<br /><ul><li>test.swf (flash)</li><li>test.gif (50px by 50 px)</li><li>test.php (αρχείο εγκατάστασης, χωρίς αυτό δεν θα εγκατασταθεί το παιχνίδι)</li><li>index.htm (άδειο αρχείο html)</li></ul>',
	),
	array(
		0 => 'Πως εγκαθιστώ ένα παιχνίδι?',
		1 => 'Υπάρχουν τρεις τρόποι.<br /><ul><li>Εάν μεταφορτώσατε το παιχνίδι με το ενσωματωμένο σύστημα του phpBB Arcade θα έχετε ένα συμπιεσμένο αρχείο που μπορείτε να ανεβάσετε με FTP στο <strong>http://www.example.com/phpBB/includes/arcade/install</strong> και να εγκαταστήσετε μέσω πίνακα διαχείρισης.</li><li> Επίσης μπορείτε αυτό το συμπιεσμένο αρχείο να το ανεβάσετε μέσω της επιλογής "Φορτώστε/ανοίξτε τα παιχνίδια" του ACP. Μόλις φορτωθεί το παιχνίδι θα αποσυμπιεστεί αυτόματα ώστε να μπορέσετε να το εγκαταστήσετε στο arcade.</li><li>Άλλη επιλογή είναι να φορτώσετε όλα τα αρχεία στο σωστό σημείο του κεντρικού υπολογιστή και ύστερα να το εγκαταστήσετε μέσω ACP.</li></ul>',
	),
	array(
		0 => 'Μπορώ να δημιουργήσω το δικό μου συμπιεσμένο αρχείο παιχνιδιού?',
		1 => 'Φυσικά.  Ακολουθήστε τις οδηγίες εδώ πως να συμπιέσετε ένα παιχνίδι για να το εγκαταστήσετε και τοποθετήστε τον φάκελο (με το ίδιο όνομα) μέσα στην ακόλουθη διαδρομή: <strong>includes/arcade/games/gamefolder</strong>.  Κατόπιν συμπιέστε τον φάκελο αυτό δίνοντας του το ίδιο όνομα με τον φάκελο του παιχνιδιού.',
	),
	array(
		0 => 'Υπάρχει αρχείο εγκατάστασης σε παράδειγμα?',
		1 => 'Παράδειγμα με έξτρα αρχεία:<br />
<textarea rows="30" readonly="readonly" wrap="off"><?php
/**
*    Installation File How-to
*
*    Below are the parameters that must be set for a game to be installed into
*    the arcade.  There is no current way (and there will probably not be one)
*    to manually install games from the ACP.
*
*    You need this file for the game to show up in the ACP to install.
*
*    The only items that need to be set are the games name, description,
*    width, height, type, scoretype and files.
*
*	 The arcade supports 7 types of games. (Activity Mod, IBPro, IBPro arcadelib,
*	 V3Arcade, IBProV3, Arcade room and games that do not submit scores)
*	 Use the following constants for the type:
*
*	 AMOD_GAME
*	 AR_GAME
*	 IBPRO_GAME
*	 IBPRO_ARCADELIB_GAME
*	 V3ARCADE_GAME
*	 IBPROV3_GAME
*	 NOSCORE_GAME
*
*    The scoretype should either be SCORETYPE_HIGH or SCORETYPE_LOW
*    these constants are defined in the main arcade class already.
*    SCORETYPE_HIGH is for games that score so that the best score is
*    the highest.  SCORETYPE_LOW is for games that score so that the
*    best score is the lowest.
*
*    The game_files item contains an array of any extra files and/or directories
*    that are need for the game to run that are not in the same folder as the main
*    game.  They should be listed without the path from the phpbb root.
*
*    The following example would be if the game required three( 3) files:
*
*    \'game_files\'        => array (
*        0    => \'arcade/gamedata/snake/scores.swf\',
*        1    => \'arcade/games/snake/scores.swf\',
*        2    => \'arcade/gamedata/games/snake/scores.swf\',
*    )
*
*    If there are no extra files the item should be set to false:
*
*    \'game_files\'        => false,
*/

if (!defined(\'IN_PHPBB\'))
{
	exit;
}

$game_file = basename(__FILE__, \'.\' . $phpEx);

$game_data = array(
	\'game_name\'			=> \'Snake\',
	\'game_desc\'			=> \'Eat the apples and don&#39;t hit the walls.... or yourself.\',
	\'game_image\'			=> $game_file.\'.gif\',
	\'game_swf\'				=> $game_file.\'.swf\',
	\'game_scorevar\'			=> $game_file,
	\'game_type\'			=> IBPROV3_GAME,
	\'game_width\'			=> 360,
	\'game_height\'			=> 300,
	\'game_scoretype\'			=> SCORETYPE_HIGH,
	\'game_files\'			=> array (
		0 	=> \'arcade/gamedata/snake/snake.txt\',
		1 	=> \'arcade/gamedata/snake/v3game.txt\',
	),
);
?></textarea><br /><br />
Παράδειγμα χωρίς εξτρά αρχεία:<br />
<textarea rows="30" readonly="readonly" wrap="off"><?php
/**
*    Installation File How-to
*
*    Below are the parameters that must be set for a game to be installed into
*    the arcade.  There is no current way (and there will probably not be one)
*    to manually install games from the ACP.
*
*    You need this file for the game to show up in the ACP to install.
*
*    The only items that need to be set are the games name, description,
*    width, height, type, scoretype and files.
*
*	 The arcade supports 7 types of games. (Activity Mod, IBPro, IBPro arcadelib,
*	 V3Arcade, IBProV3, Arcade room and games that do not submit scores)
*	 Use the following constants for the type:
*
*	 AMOD_GAME
*	 AR_GAME
*	 IBPRO_GAME
*	 IBPRO_ARCADELIB_GAME
*	 V3ARCADE_GAME
*	 IBPROV3_GAME
*	 NOSCORE_GAME
*
*    The scoretype should either be SCORETYPE_HIGH or SCORETYPE_LOW
*    these constants are defined in the main arcade class already.
*    SCORETYPE_HIGH is for games that score so that the best score is
*    the highest.  SCORETYPE_LOW is for games that score so that the
*    best score is the lowest.
*
*    The game_files item contains an array of any extra files and/or directories
*    that are need for the game to run that are not in the same folder as the main
*    game.  They should be listed without the path from the phpbb root.
*
*    The following example would be if the game required three( 3) files:
*
*    \'game_files\'        => array (
*        0    => \'arcade/gamedata/snake/scores.swf\',
*        1    => \'arcade/games/snake/scores.swf\',
*        2    => \'arcade/gamedata/games/snake/scores.swf\',
*    )
*
*    If there are no extra files the item should be set to false:
*
*    \'game_files\'        => false,
*/

if (!defined(\'IN_PHPBB\'))
{
	exit;
}

$game_file = basename(__FILE__, \'.\' . $phpEx);

$game_data = array(
	\'game_name\'			=> \'Snake\',
	\'game_desc\'			=> \'Eat the apples and don&#39;t hit the walls.... or yourself.\',
	\'game_image\'			=> $game_file.\'.gif\',
	\'game_swf\'				=> $game_file.\'.swf\',
	\'game_scorevar\'			=> $game_file,
	\'game_type\'			=> IBPROV3_GAME,
	\'game_width\'			=> 360,
	\'game_height\'			=> 300,
	\'game_scoretype\'			=> SCORETYPE_HIGH,
	\'game_files\'			=> false,
);
?></textarea>',
	),
	array(
		0 => 'Πρέπει να δημιουργήσω το αρχείο εγκατάστασης με το χέρι?',
		1 => 'Όχι, αν και είναι δυνατό. Υπάρχουν δύο εργαλεία στο phpBB Arcade ACP που θα σας βοηθήσουν.<br /><ul><li>Υπάρχει εργαλείο που δημιουργεί κι εγκαθιστά το αρχείο από την αρχή.  Δώστε όλες τις απαραίτητες πληροφορίες και θα δημιουργηθεί, θα απεικονιστεί ή θα μεταφορτωθεί το αρχείο εγκατάστασης. </li><li> Υπάρχει εργαλείο για να μεταφορτώσετε ή να δείτε τα αρχεία που ήδη υπάρχουν από παιχνίδια εγκατεστημένα.</li><li>',
	),
	array(
		0 => 'Γιατί πρέπει να βάλω τα έξτρα αρχεία στο αρχείο εγκατάστασης?',
		1 => 'Ενώ τεχνικά δεν είναι απαραίτητο για να χρησιμοποιηθεί το παιχνίδι στο phpBB Arcade, εάν χρησιμοποιήσετε το ενσωματωμένο σύστημα μεταφόρτωσης δεν θα πάρετε όλο το παιχνίδι όταν μεταφορτωθεί. Αυτό θα κάνει το παιχνίδι να μη λειτουργεί σε άλλους εάν προσφέρετε μεταφόρτωση.',
	),
	/*array(
		0 => 'Είμαι ακόμη μπερδεμένος... Μήπως υπάρχει κάποιοι εκπαιδευτικό για εγκατάσταση παιχνιδιών που δεν είναι έτοιμα για το phpBB Arcade?',
		1 => '<a href="http://www.jeffrusso.net/forum/files/downloads/flash/convert_game.zip">Μεταφορτώστε τοπικά για να δείτε<a/>',
	),*/
	array(
		0 => 'Πως διαγράφω παιχνίδια?',
		1 => 'Μπορείς να διαγράψεις παιχνίδια κάνοντας κλικ στο "Διαχείριση arcade" στον Πίνακα Διαχείρισης. Μπορείς επίσης να χρησιμοποιήσεις την "Επεξεργασία παιχνιδιού" και να επιλέξεις το παιχνίδι για διαγραφή. Θυμήσου ότι όταν διαγραφεί, τα αρχεία θα συνεχίσουν να υπάρχουν στο σέρβερ και θα πρέπει να διαγραφούν χειροκίνητα.',
	),
	array(
		0 => '--',
		1 => 'Μονάδες Arcade ACP',
	),
	array(
		0 => 'Τι μονάδες ACP έχει το phpBB Arcade?',
		1 => '<ul>
		<li><strong>Γενικές ρυθμίσεις</strong> - Ελέγχει όλες τις ρυθμίσεις για το Arcade</li>
		<li><strong>Ρυθμίσεις παιχνιδιών</strong> - Ελεγχος ρυθμίσεων παιχνιδιών του arcade</li>
		<li><strong>Ρυθμίσεις χαρακτηριστικών</strong> - Ελεγχος χαρακτηριστικών του arcade</li>
		<li><strong>Ρυθμίσεις σελίδας</strong> - Ελεγχος ρυθμίσεων σελίδων του arcade</li>
		<li><strong>Ρυθμίσεις Διαδρομών</strong> - Ελεγχος ρυθμίσεων διαδρομών του arcade</li>
		<li><strong>Διαχείριση arcade</strong> - Προσθήκη, επεξεργασία, διαγραφή, μετακίνηση και επανασυγχρονισμός κατηγοριών και παιχνιδιών</li>
		<li><strong>Προσθήκη παιχνιδιών</strong> - Προσθέτει παιχνίδια στο, πολλαπλά παιχνίδια μπορούν να εγκατασταθούν σε μια κατηγορία με μια κίνηση</li>
		<li><strong>Μεταφόρτωση παιχνιδιών</strong> - Μεταφορτώστε παιχνίδια που φιλοξενούνται σε άλλα site</li>
		<li><strong>Επεξεργασία παιχνιδιών</strong> - Επεξεργασία λεπτομερειών του παιχνιδιού</li>
		<li><strong>Επεξεργασία σκορ</strong> - Επεξεργασία σκορ των παιχνιδιών</li>
		<li><strong>Φορτώστε/ανοίξτε τα παιχνίδια</strong> - Φορτώνει και αποσυμπιέζει παιχνίδια μεταφορτωμένα με το ενσωματωμένο σύστημα στο σωστό φάκελο για εγκατάσταση</li><li><strong>Προσθήκη παιχνιδιών</strong> - Προσθέτει παιχνίδια σε συγκεκριμένη κατηγορία</li>
		<li><strong>Δημιουργήστε το αρχείο εγκατάστασης του παιχνιδιού</strong> - Δημιουργήστε ένα νέο αρχείο εγκατάστασης για μεταφόρτωση/προβολή/αποθήκευση στον κεντρικό υπολογιστή ή μεταφορτώστε/δείτε υπάρχοντα αρχεία εγκατάστασης</li>
		<li><strong>Μεταφόρτωση στατιστικών</strong> - Προβολή στατιστικών του συστήματος μεταφόρτωσης</li>
		<li><strong>Προβολή σφαλμάτων</strong> - Προβολή σφαλμάτων που αποθηκεύθηκαν απο το arcade</li>
		<li><strong>Προβολή αναφορών</strong> - Δείτε κάθε αναφορά που καταχωρήθηκε απο χρήστες σχετικά με κάποια παιχνίδια</li>
		<li><strong>Οδηγίες χρήσης</strong> - Προβάλει τον οδηγό χρήσης του arcade</li>
		<li><strong>Προσβάσεις</strong> - Πολλαπλές μονάδες για τον έλεγχο των κατηγοριών του arcade, προσομοιώνει τις προσβάσεις κατηγοριών του phpBB </li></ul>',
	),
	array(
		0 => 'Γιατι δε βλέπω όλες τις μονάδες arcade στο ACP?',
		1 => 'Για να δείτε όλες τις μονάδες πρέπει να συνδεθείτε σαν Ιδρυτής ή να έχετε τις σωστές προσβάσεις Διαχείρισης.  Εάν ακόμη δεν μπορείτε να έχετε πρόσβαση τότε πιθανώς υπάρχουν διπλές επιλογές πιστοποποίησης στον πίνακα acl_options.  Παρακαλώ τρέξτε τον οδηγό εγκατάστασης κι ελέγξτε για διπλοεγγραφές.',
	),
	array(
		0 => 'Που είναι οι ρυθμίσεις προσβάσεων?/Γιατί δεν έχω πρόσβαση να δω/χρησιμοποιήσω το phpBB Arcade?',
		1 => 'Μόλις εγκατασταθεί το arcade, πρέπει να ρυθμίσετε προσβάσεις για να το χρησιμοποιήσετε. Το arcade χρησιμοποιεί το σύστημα προσβάσεων ίδιο με του phpBB σε κατηγορίες καθώς και σύστημα ρόλων. Επίσης μπορείτε να χρησιμοποιήσετε άδειες Διαχείρισης για μέλη/ομάδες ώστε να μπορούν να χρησιμοποιούν τις μονάδες στο ACP.',
	),
	array(
		0 => 'Γιατί δεν μπορώ να προσθέσω παιχνίδια?',
		1 => 'Για προσθήκη παιχνιδιών πρέπει πρώτα να δημιουργήσετε κατηγορίες που θα προστεθούν. Χρησιμοποιήστε τη <strong>Διαχείριση arcade</strong> στην μονάδα ACP για αυτό το λόγο.  Η δημιουργία είναι παρόμοια με τη δημιουργία Δ. Συζητήσεων στο phpBB3.',
	),
	array(
		0 => 'Πως δίνω τα παιχνίδια μου σε άλλους για μεταφόρτωση?',
		1 => 'Η δυνατότητα μεταφόρτωσης παιχνιδιών ελέγχεται από τις προσβάσεις arcade.  Ρυθμίστε τις προσβάσεις όταν θέλετε οι χρήστες που παίζουν να μπορούν να μεταφορτώσουν τα παιχνίδια.  Για να γίνει εύκολο μπορείτε να ενεργοποιήσετε τη λειτουργία λίστα μεταφόρτωσης στις ρυθμίσεις phpBB Arcade ACP.  Αυτό θα επιτρέπει τους άλλους να χρησιμοποιούν το "Μεταφορτώστε παιχνίδια" από την ιστοσελίδα σας, στα δικά τους ACP.',
	),
	array(
		0 => 'Πως χρησιμοποιώ τη μονάδα "Μεταφορτώστε παιχνίδια"?',
		1 => 'Το μόνο που έχετε να κάνετε είναι να δώσετε το δεσμό από το ριζικό φάκελο εγκατάστασης του phpBB της ιστοσελίδας που προσφέρει παιχνίδια για μεταφόρτωση από το δικό του phpBB Arcade.  Θα δείτε πλέον μια λίστα με παιχνίδια.  Εάν το χρώμα του παιχνιδιού είναι πράσινο σημαίνει ότι το παιχνίδι είναι ήδη εγκατεστημένο σε σας. Θυμηθείτε ότι η μεταφόρτωση ελέγχεται πλήρως από τις προσβάσεις που έχει δώσει ο άλλος.  Γιαυτό ίσως χρειάζεται να συνδεθείτε σαν μέλος ή όπως αλλιώς έχει ρυθμιστείι.  Επικοινωνήστε με το Διαχειριστή της άλλης ιστοσελίδας εάν έχετε ερωτήσεις.<br /><br /><a href="http://img128.imageshack.us/my.php?image=downloadlistbl3.png"><img src="http://img128.imageshack.us/img128/3079/downloadlistbl3.th.png" /></a>',
	),
	array(
		0 => 'Γιατί το "Μεταφορτώστε παιχνίδια" δεν βρίσκει ποτέ παιχνίδια?',
		1 => 'Η μονάδα πρέπει να έχει ρύθμιση ΟΝ <strong>"allow_url_fopen"</strong> στην <strong>cURL library</strong> PHP που είναι εγκατεστημένο.  Αυτό ελέγχεται από τις πληροφορίες php() του διακομιστή.  Αν η τιμή <strong>"allow_url_fopen"</strong> είναι off και η <strong>cURL library</strong> δεν είναι εγκατεστημένη η μονάδα δε θα λειτουργήσει.',
	),
	array(
		0 => '--',
		1 => 'Σύστημα πόντων',
	),
	array(
		0 => 'Τι συστήματα πόντων υποστηρίζονται?',
		1 => '<ul>
		<li>Mod Μετρητών</li>
		<li>Απλό Σύστημα Πόντων</li>
		<li>Σύστημα Πόντων</li>
		<li>Ενισχυμένο σύστημα πόντων</li>
		</ul>',
	),
	array(
		0 => 'Πως λειτουργεί το σύστημα ενσωμάτωσης πόντων?',
		1 => 'Μπορείτε να ορίσετε κόστος και ανταμοιβή ανά παιχνίδι, κατηγορία ή καθολική ρύθμιση.  Μπορείτε επίσης να χρησιμοποιήσετε συνδυασμούς αυτών. Οι ρυθμίσεις παιχνιδιών υπερισχύουν των ρυθμίσεων κατηγορίας που υπερισχύουν των καθολικών ρυθμίσεων. Υπάρχει επίσης και η ρύθμιση τζάκποτ. Κάθε φορά που ο χρήστης παίζει και δεν κερδίζει το κόστος μπαίνει σε τζάκποτ. Υπάρχει καθολική ρύθμιση για όριο τζάκποτ και το τζάκποτ μπορεί να ρυθμιστεί χειροκίνητα επεξεργάζοντας το παιχνίδι στον Πιν. Διαχείρισης. Μπορείτε επίσης να ρυθμίσετε το κόστος/ανταμοιβή σε -1 για να παίζεται ελεύθερα.',
	),
	array(
		0 => '--',
		1 => 'Προβολή δεδομένων arcade έξω από το arcade',
	),
	array(
		0 => 'Πως μπορώ να προβάλω τα δεδομένα του arcade σε εξωτερικές σελίδες?',
		1 => 'Πρέπει να βάλετε τις παρακάτω γραμμές ΄κώδικα για να προβληθούν σωστά:<br />
<textarea rows="6" readonly="readonly">include($phpbb_root_path . \'includes/arcade/arcade_common.\' . $phpEx);
// Initialize arcade auth
$auth_arcade->acl($user->data);
// Initialize arcade class
$arcade = new arcade(false);</textarea><br /><br />Also make sure to use the following functions to display data:
	<ul>
	<li><strong>$arcade->number_format()</strong> - All numbers displayed should go through this function to make sure they are displayed correctly to the user</li>
	<li><strong>$arcade->time_format()</strong> - Convert a time in seconds to days/hours/mins/secs</li>
	<li><strong>$arcade->get_username_string()</strong> - Correctly link to arcade profile and color a username</li>
	</ul>',
	),
	array(
		0 => 'Υπάρχει δείγμα αρχείου portal block?',
		1 => 'Ναι, το παρακάτω παράδειγμα θα δείξει τα νεώτερα παιχνίδια, συνολικά παιχνίδια και νεώτερα σκορ.<br /><br />Block php code:<br />
<textarea rows="20" readonly="readonly" wrap="off">if (file_exists($phpbb_root_path . \'includes/arcade/arcade_common.\' . $phpEx))
{
	include($phpbb_root_path . \'includes/arcade/arcade_common.\' . $phpEx);
	// Initialize arcade auth
	$auth_arcade->acl($user->data);
	// Initialize arcade class
	$arcade = new arcade(false);

	foreach($arcade->newest_games as $newest_games)
	{
		$template->assign_block_vars(\'newest_games\', array(
			\'U_GAME_PLAY\'	=> append_sid("{$phpbb_root_path}arcade.$phpEx", \'mode=play&amp;g=\' . $newest_games[\'game_id\']),
			\'GAME_IMAGE\'	=> ($newest_games[\'game_image\'] != \'\') ? $phpbb_root_path . "arcade.$phpEx?img=" . $newest_games[\'game_image\'] : \'\',
			\'GAME_NAME\'		=> $newest_games[\'game_name\'],
		));
	}

	$total_games = sizeof($arcade->games);
	if ($total_games > 1)
	{
		$total_games = sprintf($user->lang[\'ARCADE_TOTAL_GAMES\'], $arcade->number_format($total_games));
	}
	else if ($total_games == 1)
	{
		$total_games = sprintf($user->lang[\'ARCADE_TOTAL_GAME\'], $arcade->number_format($total_games));
	}

	$total_games_played = \'\';
	if ($arcade->totals[\'games_played\'] > 1)
	{
		$total_games_played = sprintf($user->lang[\'ARCADE_TOTAL_PLAYS\'], $arcade->number_format($arcade->totals[\'games_played\']), $arcade->time_format($arcade->totals[\'games_time\']));
	}
	else if ($arcade->totals[\'games_played\'] == 1)
	{
		$total_games_played = sprintf($user->lang[\'ARCADE_TOTAL_PLAY\'], $arcade->number_format($arcade->totals[\'games_played\']), $arcade->time_format($arcade->totals[\'games_time\']));
	}

	$template->assign_vars(array(
		\'S_ARCADE_BLOCK\'		=> true,
		\'TOTAL_GAMES\'			=> $total_games,
		\'TOTAL_GAMES_PLAYED\'	=> $total_games_played,
	));

	// Start of Lastest highscores
	foreach($arcade->latest_highscores as $latest_highscore)
	{
		$latest_scoreuser = $arcade->get_username_string(\'full\', $latest_highscore[\'game_highuser\'], $latest_highscore[\'username\'], $latest_highscore[\'user_colour\']);
		$latest_score = sprintf($user->lang[\'ARCADE_WELCOME_SCORE\'], $arcade->number_format($latest_highscore[\'game_highscore\']), $user->format_date($latest_highscore[\'game_highdate\']));
		$game_url = \'<a href="\' . append_sid("arcade.$phpEx?mode=play&amp;g=" . $latest_highscore[\'game_id\']) . \'">\' . $latest_highscore[\'game_name\'] . \'</a>\';
		$game_url_tooltip = \'<a href="\' . append_sid("arcade.$phpEx?mode=play&amp;g=" . $latest_highscore[\'game_id\']) . \'" class="tooltip">\' . $latest_highscore[\'game_name\'] . \'<span class="aheader">\' . $latest_score . \'</span></a>\';

		$template->assign_block_vars(\'latest_scores\', array(
			\'HEADING_CHAMP\' 				=> sprintf($user->lang[\'ARCADE_WELCOME_CHAMP\'], $latest_scoreuser, $game_url),
			\'HEADING_CHAMP_SCORE\'			=> $latest_score,
			\'HEADING_CHAMP_TOOLTIP\' 		=> sprintf($user->lang[\'ARCADE_WELCOME_CHAMP\'], $latest_scoreuser, $game_url_tooltip),
		));
	}
	// End Lastest Highscores
}</textarea><br /><br />Block html code:<br />
<textarea rows="15" readonly="readonly" wrap="off"><!-- IF S_ARCADE_BLOCK -->
<h3>{L_ARCADE}</h3>
<div class="panel">
	<div class="inner"><span class="corners-top"><span></span></span>
		<div class="content">
			<!-- BEGIN newest_games -->
				<p style="margin: 4px;"><!-- IF newest_games.GAME_IMAGE --><a href="{newest_games.U_GAME_PLAY}"><img src="{newest_games.GAME_IMAGE}" alt="{newest_games.GAME_NAME}" width="20" height="20" style="vertical-align: middle;" /></a><!-- ENDIF -->&nbsp;{newest_games.GAME_NAME}</p>
			<!-- END newest_games -->
			<!-- IF TOTAL_GAMES -->
			<br />
			<p style="text-align: center;">{TOTAL_GAMES}</p>
			<!-- ENDIF -->
			<!-- IF .latest_scores -->
				<ul>
			<!-- BEGIN latest_scores -->
					<li>{latest_scores.HEADING_CHAMP}</li>
			<!-- END latest_scores -->
				</ul>
			<!-- ELSE -->
				<div style="text-align: center;">{L_ARCADE_NO_LATEST_HIGHSCORES}</div>
			<!-- ENDIF -->
		</div>
	<span class="corners-bottom"><span></span></span></div>
</div>
<!-- ENDIF --></textarea>',
	),
);

?>