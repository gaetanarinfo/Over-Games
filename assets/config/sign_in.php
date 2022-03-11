<?php

require 'req.php';

if(!empty($_POST))
{

    if($membre_result['pseudo'] != $_POST['pseudo'] && $membre_result['email'] != $_POST['email']) 
    {
        $password = md5($_POST['password']);

        $cle_prive = md5(uniqid(rand(), true));
        $cle_activate = md5(uniqid(rand(), true));
        $date_creation = date("d/m/Y H:i:s", strtotime('+1 hour'));
        $ip = $_SERVER['REMOTE_ADDR'];

        $_SESSION['cle_prive'] = $cle_prive;
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['cle_activate'] = $cle_activate;
    
        $Arr_Key_Value = array('nom' => $_POST['nom'], 'prenom' => $_POST['prenom'], 'email' => $_POST['email'], 'pseudo' => $_POST['pseudo'], 'password' => $password, 'pays' => $_POST['pays'], 'cle_prive' => $cle_prive, 'cle_activate' => $cle_activate, 'date_creation' => $date_creation,'ip' => $ip, 'age' => $_POST['age'], 'sexe' => $_POST['sexe'], 'day' => $_POST['day'], 'month' => $_POST['month']);

        //Requête d'insertion
        $Sql_Query = "INSERT INTO membres(nom, prenom, email, pseudo, password, pays, cle_prive, cle_activate, date_creation, ip, sexe, age, day, month) 
            VALUES (:nom, :prenom, :email, :pseudo, :password, :pays, :cle_prive, :cle_activate, :date_creation, :ip, :sexe, :age, :day, :month)";

        //Préparation de la requête (sécurisation des variables du tableau associatif)
        $Request= $db->prepare($Sql_Query);

        //Exécution de la requête
        $Request->execute($Arr_Key_Value);
    
        $Arr_Key_Value2 = array('email' => $_POST['email']);

        //Requête d'insertion
        $Sql_Query2 = "INSERT INTO membres_visible(email) 
            VALUES (:email)";

        //Préparation de la requête (sécurisation des variables du tableau associatif)
        $Request2= $db->prepare($Sql_Query2);

        //Exécution de la requête
        $Request2->execute($Arr_Key_Value2);
    }else{

        echo json_encode(array('error' => 'PDO fel "$err"'));

    }

        }

?>