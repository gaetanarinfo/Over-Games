<?php

require '../../assets/config/req.php';

if($membre_result_co['rang'] == "Administrateur") {

    if(!empty($_POST))
    {

        $Arr_Key_Value = array('titre' => $_POST['titre'], 'api' => $_POST['api']);

        //Requête d'insertion
        $Sql_Query = "INSERT INTO lets_play(
            titre, 
            api
            ) 
            VALUES (
            :titre, 
            :api
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