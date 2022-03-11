<?php

require 'req.php';

if(!empty($_POST))
{

    if(isset($_SESSION['pseudo'])) 
    {

        $article_id = $_POST['article_id'];
        $pseudo = $_SESSION['pseudo'];
        $message = $_POST['message'];
        $dates = $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee;
        $heure = date('H:i:s');
        $timestamps = date('d/m/Y H:i:s', strtotime('+1 hour'));
    
        $Arr_Key_Value = array('article_id' => $article_id, 'pseudo' => $pseudo, 'message' => $message, 'dates' => $dates, 'heure' => $heure, 'timestamps' => $timestamps);

        //Requête d'insertion
        $Sql_Query = "INSERT INTO actualites_comment(article_id, pseudo, message, dates, heure, timestamps) VALUES (:article_id, :pseudo, :message, :dates, :heure, :timestamps)";

        //Préparation de la requête (sécurisation des variables du tableau associatif)
        $Request= $db->prepare($Sql_Query);

        //Exécution de la requête
        $Request->execute($Arr_Key_Value);

        echo $article_id;
        echo $message;

        $data = [
            'id' =>  $article_id
        ];

        $sql = "UPDATE actualites SET comment = comment +1 WHERE id = :id";
        $stmt= $db->prepare($sql);
        $stmt->execute($data);

        echo 1;
    
    }else{

        echo 0;

    }

}else{
    echo 0;
}

?>