<?php 

session_start();

require 'db.php';

// include_once 'func.php';

include_once 'timeout.php';

//Voici les deux tableaux des jours et des mois traduits en français
$nom_jour_fr = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
$mois_fr = Array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", 
        "Septembre", "Octobre", "Novembre", "Décembre");

// on extrait la date du jour
list($nom_jour, $jour, $mois, $annee) = explode('/', date("w/d/n/Y"));

//Membre

$membres = $db->prepare('SELECT * FROM membres');
$membres->execute();
$membre_result = $membres->fetch();
$membres->closeCursor();

$membresvisible = $db->prepare('SELECT * FROM membres_visible WHERE email = :email');
$membresvisible->execute(array(':email' => $_SESSION['email']));
$membre_visible_result = $membresvisible->fetch();
$membresvisible->closeCursor();

$membresco = $db->prepare('SELECT * FROM membres WHERE email = :email');
$membresco->execute(array(':email' => $_SESSION['email']));
$membre_result_co = $membresco->fetch();
$membresco->closeCursor();

//Actualité index header & footer

$req1 = $db->prepare('SELECT * FROM actualites ORDER BY id DESC LIMIT 0,1');
$req1->execute();
$actualite = $req1->fetch();
$req1->closeCursor();

$req2 = $db->prepare('SELECT * FROM actualites ORDER BY id DESC LIMIT 1,1');
$req2->execute();
$actualite2 = $req2->fetch();
$req2->closeCursor();

$req3 = $db->prepare('SELECT * FROM actualites ORDER BY id DESC LIMIT 2,1');
$req3->execute();
$actualite3 = $req3->fetch();
$req3->closeCursor();

//End

//Test

$req4 = $db->prepare('SELECT * FROM test ORDER BY id DESC LIMIT 0,5');
$req4->execute();

//Comment Section Right

$req5 = $db->prepare('SELECT * FROM actualites_comment ORDER BY id DESC LIMIT 0,7');
$req5->execute();
$count_comment = $req5->rowCount();

//

//News Section Sub Center

$req6 = $db->prepare('SELECT * FROM actualites ORDER BY id DESC LIMIT 0,20');
$req6->execute();

//

//Actualité id & comment

$article = $db->prepare('SELECT * FROM actualites WHERE id = :id');
$article->execute(array(':id' => $_GET['id']));
$article_result = $article->fetch();
$article->closeCursor();

$article_comment = $db->prepare('SELECT * FROM actualites_comment WHERE article_id = :article_id');
$article_comment->execute(array(':article_id' => $_GET['id']));
$article_comment_result = $article_comment->fetch();
$article_comment->closeCursor();

$article_comment2 = $db->prepare('SELECT * FROM actualites_comment WHERE pseudo = :pseudo');
$article_comment2->execute(array(':pseudo' => $article_comment_result['pseudo']));
$article_comment_result2 = $article_comment2->fetch();
$article_comment2->closeCursor();

//Actualité

$req9 = $db->prepare('SELECT * FROM actualites_comment WHERE article_id = :article_id ORDER BY timestamps DESC LIMIT 0,20');
$req9->execute(array(':article_id' => $_GET['id']));
$count_comment2 = $req9->rowCount();

$actu_premium = $db->prepare('SELECT * FROM actualites ORDER BY id DESC LIMIT 1,1');
$actu_premium->execute();
$actu_premium_result = $actu_premium->fetch();
$actu_premium->closeCursor();

$actu_premium2 = $db->prepare('SELECT * FROM actualites ORDER BY id DESC LIMIT 0,1');
$actu_premium2->execute();
$actu_premium_result2 = $actu_premium2->fetch();
$actu_premium2->closeCursor();

$actu_premium3 = $db->prepare('SELECT * FROM actualites ORDER BY id DESC LIMIT 2,1');
$actu_premium3->execute();
$actu_premium_result3 = $actu_premium3->fetch();
$actu_premium3->closeCursor();

$actu = $db->prepare('SELECT * FROM actualites ORDER BY id DESC LIMIT 0,30');
$actu->execute();

//

// Trailer du jour

$trailer = $db->prepare('SELECT * FROM trailersj ORDER BY id DESC');
$trailer->execute();
$result_trailerj = $trailer->fetch();
$trailer->closeCursor();

// Section right tuto

$req7 = $db->prepare('SELECT * FROM yt_cards ORDER BY id DESC LIMIT 0,5');
$req7->execute();
$req7_7 = $db->prepare('SELECT * FROM yt_cards ORDER BY id DESC LIMIT 0,5');
$req7_7->execute();

// Lets Play YouTube

$req8 = $db->prepare('SELECT * FROM lets_play ORDER BY id ASC LIMIT 0,8');
$req8->execute();

// Profil public
$profil_public = $db->prepare('SELECT * FROM membres WHERE pseudo = :pseudo');
$profil_public->execute(array(':pseudo' => $_GET['pseudo']));
$profil_public_result = $profil_public->fetch();
$profil_public->closeCursor();

// Discord
$discord = $db->prepare('SELECT * FROM discord ORDER BY id DESC LIMIT 0,30');
$discord->execute();

$discord_modal = $db->prepare('SELECT * FROM discord ORDER BY id DESC LIMIT 0,30');
$discord_modal->execute();

$req9 = $db->prepare('SELECT * FROM tuto_disc ORDER BY id ASC LIMIT 0,8');
$req9->execute();

$html = file_get_contents('https://www.gamekult.com/guide-achat.html'); //get the html returned from the following url

$pokemon_doc = new DOMDocument();

$pokemon_list = array();

libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty($html)){ //if any html is actually returned

	$pokemon_doc->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$pokemon_xpath = new DOMXPath($pokemon_doc);

	//get all the h2's with an id
	$pokemon_row = $pokemon_xpath->query('//ul[@class="g2-row g2__list--16 g2__list--8--v-sm--mw g2__vr--24 g2__vr--16--v-sm--mw"]');

	if($pokemon_row->length > 0){
		foreach($pokemon_row as $row){
            for ($i = 0; $i <= 21; $i++) {
                $name[$i] = $pokemon_xpath->query('//h2', $row)->item($i)->nodeValue;    
            }
		    $pokemon_list[] = array('title' => $name);
		}
	}
}

?>