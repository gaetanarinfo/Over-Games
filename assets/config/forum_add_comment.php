<?php

require 'req.php';

if(!empty($_POST))
{

    if(isset($_SESSION['pseudo'])) 
    {

        $forum_id = $_POST['forum_id'];
        $forum_id_cat = $_POST['forum_id_cat'];
        $forum_id_cat_sujet = $_POST['forum_id_cat_sujet'];
        $sujet = $_POST['sujet'];
        $pseudo = $_SESSION['pseudo'];
        $message = $_POST['message'];
        $date = $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee;
        $heure = date('H:i:s', strtotime('+1 hour'));
        $datetime = date('d/m/Y H:i:s', strtotime('+1 hour'));
    
        $Arr_Key_Value = array('forum_id' => $forum_id, 'forum_id_cat' => $forum_id_cat, 'forum_id_cat_sujet' => $forum_id_cat_sujet, 'sujet' => $sujet, 'createur' => $pseudo, 'content' => $message, 'date' => $date, 'heure' => $heure, 'datetime' => $datetime);

        //Requête d'insertion
        $Sql_Query = "INSERT INTO forum_cat_cat_sujet_reply(forum_id, forum_id_cat, forum_id_cat_sujet, sujet, createur, content, date, heure, datetime) VALUES (:forum_id, :forum_id_cat, :forum_id_cat_sujet, :sujet, :createur, :content, :date, :heure, :datetime)";

        //Préparation de la requête (sécurisation des variables du tableau associatif)
        $Request= $db->prepare($Sql_Query);

        //Exécution de la requête
        $Request->execute($Arr_Key_Value);

        echo 1;
    
    }else{

        echo 0;

    }

}else{
    echo 0;
}

?>