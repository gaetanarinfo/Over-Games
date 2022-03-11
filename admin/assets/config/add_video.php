<?php

require '../../assets/config/req.php';

if($membre_result_co['rang'] == "Administrateur") {

    if(!empty($_POST))
    {

        $Arr_Key_Value = array('titre' => $_POST['titre'], 'content' => $_POST['content'], 'api' => $_POST['api'], 'lien' => $_POST['lien'], 'chaine' => $_POST['chaine'], 'icone' => $_POST['icone'], 'dateTuto' => $_POST['dateTuto'], 'images' => $_POST['images'], 'cat' => $_POST['cat']);

        //Requête d'insertion
        $Sql_Query = "INSERT INTO yt_cards(
            titre, 
            content, 
            api, 
            lien, 
            chaine, 
            icone,
            dateTuto, 
            images,
            cat
            ) 
            VALUES (
            :titre, 
            :content, 
            :api, 
            :lien, 
            :chaine, 
            :icone, 
            :dateTuto,
            :images,
            :cat
            )";

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