<?php

require 'db.php';

$membres_verif = $db->prepare('SELECT * FROM membres WHERE email = email');
$membres_verif->execute(array(':email' => $_GET['email']));
$membre_result_verif = $membres_verif->fetch();
$membres_verif->closeCursor();

if($membre_result_verif['email'] == $_GET['email']) {

   echo $membre_result_verif['membre_verif'];

}

?>