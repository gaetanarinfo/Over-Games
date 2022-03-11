<?php

require 'req.php';

if(!empty($_POST['email'])) 
{
   
    $date = $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee;
    $heure = date('H:i:s', strtotime('+1 hour'));
    $dates = date('d/m/Y H:i:s', strtotime('+1 hour'));

    $Arr_Key_Value = array('nom' => $_POST['nom'], 'prenom' => $_POST['prenom'], 'email' => $_POST['email'], 
    'date' => $date, 'sujet' => $_POST['sujet'], 'bug' => $_POST['bug'], 'message' => $_POST['message'], 'heure' => $heure, 'dates' => $dates);

    //Requête d'insertion
    $Sql_Query = "INSERT INTO mail_admin(nom, prenom, email, date, sujet, bug, message, heure, dates) 
        VALUES (:nom, :prenom, :email, :date, :sujet, :bug, :message, :heure, :dates)";

    //Préparation de la requête (sécurisation des variables du tableau associatif)
    $Request= $db->prepare($Sql_Query);

    //Exécution de la requête
    $Request->execute($Arr_Key_Value);

    echo '1';

}else{

    echo '0';

}


?>