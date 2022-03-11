<?php

require 'req.php';

if(!empty($_POST) AND isset($membre_result_co['email']))
{
    $id = $_POST['forum_id'];
    $id2 = $_POST['forum_id_cat'];
    $createur = $_SESSION['pseudo'];
    $content = $_POST['content'];
    $titre = $_POST['titre'];
    $date = $jour.' '.$mois_fr[$mois].' '.$annee;
    $heure = date('H:i', strtotime('+1 hour'));
    $cat = $_POST['cat'];
   
    $Arr_Key_Value4 = array('forum_id' => $id, 'forum_id_cat' => $id2, 'forum_id_cat_sujet' => $cat, 'createur' => $createur, 'titre' => $titre, 'content' => $content, 'date' => $date, 'heure' => $heure);

    //Requête d'insertion
    $Sql_Query4 = "INSERT INTO forum_cat_cat_sujet(forum_id, forum_id_cat, forum_id_cat_sujet, createur, titre, content, date, heure)  VALUES (:forum_id, :forum_id_cat, :forum_id_cat_sujet, :createur, :titre, :content, :date, :heure) ";

    //Préparation de la requête (sécurisation des variables du tableau associatif)
    $Request4 = $db->prepare($Sql_Query4);

    //Exécution de la requête
    $Request4->execute($Arr_Key_Value4);

    echo 1;

}else{

    echo 0;

}
?>