<?php
session_start();
require 'req.php';

if($_GET['pseudo'] == 'pseudo') {

    $membres = $db->prepare('SELECT * FROM membres WHERE email = :email ORDER BY id DESC');
    $membres->execute(array(':email' => $_SESSION['email']));
    $membre_result = $membres->fetch();
    $membres->closeCursor();

    echo $membre_result['pseudo'];

    }
    
    if($_GET['cle'] == 'cle') {

        $membres3 = $db->prepare('SELECT * FROM membres WHERE email = :email ORDER BY id DESC');
        $membres3->execute(array(':email' => $_SESSION['email']));
        $membre_result3 = $membres3->fetch();
        $membres3->closeCursor();
        echo $membre_result3['cle_activate'];
        
    }

?>