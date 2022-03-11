<?php

require 'req.php';

// Fonction qui permet de mettre à jour le compteur de visites

$ip   = $_SERVER['REMOTE_ADDR']; // L'adresse IP du visiteur
$date = date('Y-m-d');           // La date d'aujourd'hui, sous la forme AAAA-MM-JJ

$visiteur = $db->prepare("SELECT COUNT(*) as nb FROM stats_visites WHERE ip='".$ip."'");
$visiteur->execute();
$list_visiteur = $visiteur->fetch(PDO::FETCH_ASSOC);
$nb = $list_visiteur['nb'];

$visiteur2 = $db->prepare("SELECT * FROM stats_visites");
$visiteur2->execute();
$result_visiteur = $visiteur2->fetch();
$count_visit = $visiteur2->rowCount();
$visiteur2->closeCursor();


if (empty($nb)) {
    $query = $db->prepare("
    INSERT INTO stats_visites (ip , date_visite , pages_vues) VALUES ('".$ip."' , '".$date."' , 1)
");
    $query->execute();
} elseif ($nb >= 0) {

}

// Fonction qui permet de récupérer le temp de chargement

$begin_time = array_sum(explode(' ', microtime()));

$end_time = array_sum(explode(' ', microtime()));

// Fonction End

$profil_visible_1 = $membre_visible_result['nom'];
$profil_visible_2 = $membre_visible_result['prenom'];
$profil_visible_3 = $membre_visible_result['pseudo'];
$profil_visible_4 = $membre_visible_result['emails'];
$profil_visible_5 = $membre_visible_result['sexe'];
$profil_visible_6 = $membre_visible_result['age'];
$profil_visible_7 = $membre_visible_result['adresse'];
$profil_visible_8 = $membre_visible_result['adresse2'];
$profil_visible_9 = $membre_visible_result['ville'];
$profil_visible_10 = $membre_visible_result['pays'];
$profil_visible_11 = $membre_visible_result['postalCode'];

?>