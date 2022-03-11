<?php

require 'req.php';

if($membre_result_co['rang'] == "Administrateur" OR $membre_result_co['rang'] == "Modérateur") {

    if(!empty($_POST))
    {
        $fo_id = $db->prepare('SELECT * FROM forum ORDER BY id DESC');
        $fo_id->execute();
        $fo_id_result = $fo_id->fetch();
        $fo_id->closeCursor();


        $id = $fo_id_result['forum_id'] + 1;
        $id2 = $fo_id_result['forum_id'] + 1;
        $id3 = + 1;
        $createur = $_SESSION['pseudo'];
        $content = $_POST['content'];
        $content2 = $_POST['content2'];
        $icone = $_POST['icone'];
        $titre = $_POST['titre'];
        $titre2 = $_POST['titre2'];
        $rang = $_POST['rang'];
        $topic = $_POST['topic'];

        $Arr_Key_Value = array('createur' => $createur, 'content' => $content, 'titre' => $titre, 'icone' => $icone, 'forum_id' => $id);

        //Requête d'insertion
        $Sql_Query = "INSERT INTO forum(forum_id, createur, content, titre, icone) VALUES (:forum_id, :createur, :content, :titre, :icone)";

        //Préparation de la requête (sécurisation des variables du tableau associatif)
        $Request= $db->prepare($Sql_Query);

        //Exécution de la requête
        $Request->execute($Arr_Key_Value);

        $Arr_Key_Value2 = array('titre' => $titre, 'titre2' => $titre2, 'forum_id' => $id, 'forum_id_cat' => $id2, 'rang' => $rang);

        //Requête d'insertion
        $Sql_Query2 = "INSERT INTO forum_cat(forum_id, forum_id_cat, titre, titre2, rang) VALUES (:forum_id, :forum_id_cat, :titre, :titre2, :rang)";

        //Préparation de la requête (sécurisation des variables du tableau associatif)
        $Request2= $db->prepare($Sql_Query2);

        //Exécution de la requête
        $Request2->execute($Arr_Key_Value2);

        $Arr_Key_Value3 = array('forum_id' => $id, 'forum_id_cat' => $id2, 'forum_id_cat_sujet' => $id3, 'createur' => $createur, 'icone' => $icone, 'titre' => $titre, 'titre2' => $titre2, 'content' => $content2, 'topic' => $topic);

        //Requête d'insertion
        $Sql_Query3 = "INSERT INTO forum_cat_cat(forum_id, forum_id_cat, forum_id_cat_sujet, createur, icone, titre, titre2, content, topic) VALUES (:forum_id, :forum_id_cat, :forum_id_cat_sujet, :createur, :icone, :titre, :titre2, :content, :topic)";

        //Préparation de la requête (sécurisation des variables du tableau associatif)
        $Request3 = $db->prepare($Sql_Query3);

        //Exécution de la requête
        $Request3->execute($Arr_Key_Value3);

        echo 1;

    }else{

        echo 0;

    }
}
?>