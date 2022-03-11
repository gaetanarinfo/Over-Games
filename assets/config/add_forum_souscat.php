<?php

require 'req.php';

    if(!empty($_POST) AND isset($membre_result_co['email']))
    {
        $fo_id = $db->prepare('SELECT * FROM forum_cat_cat WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat ORDER BY id DESC');
        $fo_id->execute(array('forum_id' => $_POST['id'], 'forum_id_cat' => $_POST['id2']));
        $fo_id_result = $fo_id->fetch();
        $fo_id->closeCursor();

        $id = $_POST['id'];
        $id2 = $_POST['id2'];
        $id3 = $fo_id_result['forum_id_cat_sujet'] + 1;
        $createur = $_SESSION['pseudo'];
        $content = $_POST['content'];
        $icone = "assets/images/forum/categorie/assassins-creed-black-flag-icon-256.png";
        $titre = $_POST['titre'];
        $titre2 = $_POST['titre2'];
        $topic = 0;

        $Arr_Key_Value = array('createur' => $createur, 'content' => $content, 'titre' => $titre, 'titre2' => $titre2, 'icone' => $icone, 'forum_id' => $id, 'forum_id_cat' => $id2, 'forum_id_cat_sujet' => $id3);

        //Requête d'insertion
        $Sql_Query = "INSERT INTO forum_cat_cat(forum_id, forum_id_cat, forum_id_cat_sujet, createur, content, titre, titre2, icone) VALUES (:forum_id, :forum_id_cat, :forum_id_cat_sujet, :createur, :content, :titre, :titre2, :icone)";

        //Préparation de la requête (sécurisation des variables du tableau associatif)
        $Request= $db->prepare($Sql_Query);

        //Exécution de la requête
        $Request->execute($Arr_Key_Value);

        echo 1;

    }else{

        echo 0;

    }
?>