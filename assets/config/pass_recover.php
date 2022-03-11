<?php

require 'db.php';

$membres_verif = $db->prepare('SELECT * FROM membres WHERE email = email');
$membres_verif->execute(array(':email' => $_POST['email']));
$membre_result_verif = $membres_verif->fetch();
$membres_verif->closeCursor();

if($membre_result_verif['membre_verif'] == "1"){

if(!empty($_POST)) {

    $email = htmlspecialchars($_POST['email']);
    $cle = htmlspecialchars($_POST['cle']);
    $newmdp = md5($_POST['password']);

      $requser = $db->prepare("SELECT * FROM membres WHERE email = :email AND cle_prive = :cle");
      $requser->execute(array(':email' => $email, ':cle' => $cle));
      $userinfo = $requser->fetch();

      if($email == $userinfo['email'] && $cle == $userinfo['cle_prive']){

        $data = [
            'password' => $newmdp,
            'email' => $email,
         ];
          
         $sql = "UPDATE membres SET passsword = :passsword WHERE email = :email";
         $stmt= $db->prepare($sql);
         $stmt->execute($data);

         echo "oui";

      }else{

         echo "2";
         
      }

} else {
    echo "1";
}

}else{
   echo "0";
}


?>