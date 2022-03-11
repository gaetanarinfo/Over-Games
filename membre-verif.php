<?php

require 'assets/config/req.php';

$membres_verif = $db->prepare('SELECT * FROM membres WHERE email = :email');
$membres_verif->execute(array(':email' => $_SESSION['email']));
$membre_result_verif = $membres_verif->fetch();
$membres_verif->closeCursor();

if($_SESSION['cle_activate'] == $membre_result_verif['cle_activate'] && $_SESSION['email'] == $membre_result_verif['email']) {

    $req = $db->prepare('UPDATE membres SET membre_verif = :membre_verif WHERE email = :email');

    $req->execute(array(

        'membre_verif' => '1',
        'email' => $_SESSION['email']

        ));

    $_SESSION['cle_activate'] = '';
    $_SESSION['cle_prive'] = '';
    $_SESSION['email'] = '';

    header('Location: /');
    
}else{
    header('Location: /');
}

?>