<?php 

require '../../assets/config/req.php';

    if($membre_result_co['rang'] == "Administrateur") { 
        
    }else{
        header('Location: /'); 
    }

if(!empty($_POST)) {

     $mailconnect = htmlspecialchars($_POST['email']);

      $requser = $db->prepare("SELECT * FROM membres WHERE email = :email");
      $requser->execute(array(':email' => $mailconnect));
      $userinfo = $requser->fetch();

      if($mailconnect == $userinfo['email']){
          
        $data = [
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'adresse' => $_POST['adresse'],
            'adresse2' => $_POST['adresse2'],
            'pseudo' => $_POST['pseudo'],
            'ville' => $_POST['ville'],
            'pays' => $_POST['pays'],
            'postalCode' => $_POST['postalCode'],
            'sexe' => $_POST['sexe'],
            'age' => $_POST['age'],
            'membre_verif' => $_POST['verif'],
            'bloque' => $_POST['bloque'],
            'premium' => $_POST['premium'],
            'email' => $userinfo['email'],
        ];

        $sql = "UPDATE membres SET nom = :nom, prenom = :prenom, adresse = :adresse, adresse2 = :adresse2, pseudo = :pseudo, ville = :ville, pays = :pays, postalCode = :postalCode, sexe = :sexe, age = :age, membre_verif = :membre_verif, bloque = :bloque, premium = :premium WHERE email = :email";
        $stmt= $db->prepare($sql);
        $stmt->execute($data);

        echo "1";

      }else{

         echo "0";
         
      }

} else {
  
}


?>