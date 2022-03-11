<?php

session_start();

require 'db.php';

$membres_verif = $db->prepare('SELECT * FROM membres WHERE email = email');
$membres_verif->execute();
$membre_result_verif = $membres_verif->fetch();
$membres_verif->closeCursor();

if($membre_result_verif['membre_verif'] == "1"){

if(!empty($_POST)) {

    $mailconnect = htmlspecialchars($_POST['email']);
    $mdpconnect = md5($_POST['password']);

      $requser = $db->prepare("SELECT * FROM membres WHERE email = :email AND password = :password");
      $requser->execute(array(':email' => $mailconnect, ':password' => $mdpconnect));
      $userinfo = $requser->fetch();

      if($mailconnect == $userinfo['email'] && $mdpconnect == $userinfo['password'] && $userinfo['block'] != "1"){
          
         session_start();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['email'] = $userinfo['email'];
         $_SESSION['loggedin_time'] = time();

         $data = [
            'ip' => $_SERVER['REMOTE_ADDR'],
            'date_connexion' => date('d/m/Y H:i:s', strtotime('+1 hour')),
            'email' => $_POST['email'],
         ];


         $sql = "UPDATE membres SET ip = :ip, date_connexion = :date_connexion WHERE email = :email";
         $stmt= $db->prepare($sql);
         $stmt->execute($data);

         echo "oui";

      }else{

         echo "non";
         
      }

} else {
  
}

}else{
   echo "0";
}


?>