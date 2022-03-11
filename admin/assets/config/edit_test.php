<?php 

require '../../assets/config/req.php';

    if($membre_result_co['rang'] == "Administrateur") { 
        
    }else{
        header('Location: /'); 
    }

if(!empty($_POST)) {

     $mailconnect = htmlspecialchars($_POST['id']);

      $requser = $db->prepare("SELECT * FROM test WHERE id = :id");
      $requser->execute(array(':id' => $mailconnect));
      $userinfo = $requser->fetch();

      if($mailconnect == $userinfo['id']){
          
        $data = [
            'titre' => $_POST['titre'],
            'lien' => $_POST['lien'],
            'small_img' => $_POST['small_img'],
            'description' => $_POST['description'],
            'plateforme' => $_POST['plateforme'],
            'id' => $mailconnect,
            'dates' => $_POST['dates'],
            'heure' => $_POST['heure']
        ];

        $sql = "UPDATE test SET titre = :titre, lien = :lien, small_img = :small_img, description = :description, plateforme = :plateforme, dates = :dates, heure = :heure WHERE id = :id";
        $stmt= $db->prepare($sql);
        $stmt->execute($data);

        echo "1";

      }else{

         echo "0";
         
      }

} else {
  
}


?>