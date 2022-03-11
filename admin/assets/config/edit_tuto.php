<?php 

require '../../assets/config/req.php';

    if($membre_result_co['rang'] == "Administrateur") { 
        
    }else{
        header('Location: /'); 
    }

if(!empty($_POST)) {

     $mailconnect = htmlspecialchars($_POST['id']);

      $requser = $db->prepare("SELECT * FROM yt_cards WHERE id = :id");
      $requser->execute(array(':id' => $mailconnect));
      $userinfo = $requser->fetch();

      if($mailconnect == $userinfo['id']){
          
        $data = [
            'id' => $mailconnect,
            'titre' => $_POST['titre'],
            'content' => $_POST['content'], 
            'api' => $_POST['api'], 
            'lien' => $_POST['lien'],  
            'chaine' => $_POST['chaine'],  
            'icone' => $_POST['icone'],  
            'dateTuto' => $_POST['date'], 
            'images' => $_POST['image'],
            'cat' => $_POST['cat']
        ];

        $sql = "UPDATE yt_cards SET titre = :titre, content = :content, api = :api, lien = :lien, chaine = :chaine, icone = :icone, dateTuto = :dateTuto, images = :images, cat = :cat WHERE id = :id";
        $stmt= $db->prepare($sql);
        $stmt->execute($data);

        echo "1";

      }else{

         echo "0";
         
      }

} else {
  
}


?>