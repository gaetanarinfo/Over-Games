<?php

require 'db.php';

if(!empty($_POST)) {

     $mailconnect = htmlspecialchars($_SESSION['email']);

      $requser = $db->prepare("SELECT * FROM membres WHERE email = :email");
      $requser->execute(array(':email' => $mailconnect));
      $userinfo = $requser->fetch();

      if($mailconnect == $userinfo['email']){
          
        $data = [
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'adresse' => $_POST['adresse'],
            'adresse2' => $_POST['adresse2'],
            'ville' => $_POST['ville'],
            'pays' => $_POST['pays'],
            'postalCode' => $_POST['postalCode'],
            'sexe' => $_POST['sexe'],
            'age' => $_POST['age'],
            'email' => $userinfo['email'],
        ];

        $sql = "UPDATE membres SET nom = :nom, prenom = :prenom, adresse = :adresse, adresse2 = :adresse2, ville = :ville, pays = :pays, postalCode = :postalCode, sexe = :sexe, age = :age WHERE email = :email";
        $stmt= $db->prepare($sql);
        $stmt->execute($data);

        echo "1";

      }else{

         echo "0";
         
      }

} else {
  
}


?>