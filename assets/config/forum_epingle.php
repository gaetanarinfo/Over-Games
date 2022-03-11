<?php

require 'req.php';

if(isset($_SESSION['email'])) {

    if(!empty($_POST))
    {

        $id = $_POST['fo1'];
        $id2 = $_POST['fo2'];
        $id3 = $_POST['fo3'];
        $id4 = $_POST['createur'];

        $fo_id = $db->prepare('SELECT * FROM forum_cat_cat_sujet_reply WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet ORDER BY id DESC');
        $fo_id->execute(array(':forum_id' => $id, ':forum_id_cat' => $id2, ':forum_id_cat_sujet' => $id3));
        $fo_id_result = $fo_id->fetch();
        $fo_id->closeCursor();

        $Arr_Key_Value = array('forum_id' => $id, 'forum_id_cat' => $id2, 'forum_id_cat_sujet' => $id3, 'createur' => $id4, 'email' => $_SESSION['email'], 'content' => $fo_id_result['content'], 'sujet' => $fo_id_result['sujet'], 'datetime' => $fo_id_result['datetime'], 'date' => $fo_id_result['date'], 'heure' => $fo_id_result['heure']);

        //Requête d'insertion
        $Sql_Query = "INSERT INTO forum_sujet_reply_membre(forum_id, forum_id_cat, forum_id_cat_sujet, createur, email, content, sujet, datetime, date, heure) VALUES (:forum_id, :forum_id_cat, :forum_id_cat_sujet, :createur, :email, :content, :sujet, :datetime, :date, :heure)";

        //Préparation de la requête (sécurisation des variables du tableau associatif)
        $Request= $db->prepare($Sql_Query);

        //Exécution de la requête
        $Request->execute($Arr_Key_Value);

        echo 1;

    }else{

        echo 0;

    }
}
?>