<?php 

require '../../assets/config/req.php';

    if($membre_result_co['rang'] == "Administrateur") { 
        
    }else{
        header('Location: /'); 
    }

if(!empty($_POST)) {

     $mailconnect = htmlspecialchars($_POST['id']);
     $date = $nom_jour_fr[$nom_jour].' '.$jour.' '.$mois_fr[$mois].' '.$annee;

      $requser = $db->prepare("SELECT * FROM actualites WHERE id = :id");
      $requser->execute(array(':id' => $mailconnect));
      $userinfo = $requser->fetch();

      if($mailconnect == $userinfo['id']){
          
        $data = [
            'id' => $userinfo['id'],
            'createur' => $_POST['createur'],
            'categorie' => $_POST['categorie'],
            'titre' => $_POST['titre'],
            'subtitle' => $_POST['subtitle'],
            'small_img' => $_POST['small_img'],
            'large_img' => $_POST['large_img'],
            'content2' => $_POST['content2'],
            'content' => $_POST['content'],
            'tag' => $_POST['tag_video'],
            'videos' => $_POST['video'],
            'plateforme' => $_POST['plateforme'],
            'plateforme2' => $_POST['plateforme2'],
            'plateforme3' => $_POST['plateforme3'],
            'plateforme4' => $_POST['plateforme4'],
            'plateforme5' => $_POST['plateforme5'],
            'plateforme6' => $_POST['plateforme6'],
            'plateforme7' => $_POST['plateforme7'],
            'plateforme8' => $_POST['plateforme8'],
            'title_games' => $_POST['titre2'],
            'img_games' => $_POST['img4'],
            'genre' => $_POST['genre'],
            'date' => $_POST['date'],
            'modification' => $date
            
        ];

        $sql = "UPDATE actualites SET createur = :createur, categorie = :categorie, titre = :titre, subtitle = :subtitle, small_img = :small_img, large_img = :large_img, content2 = :content2, content = :content, tag_video = :tag, videos = :videos, plateforme = :plateforme, plateforme2 = :plateforme2, plateforme3 = :plateforme3, plateforme4 = :plateforme4, plateforme5 = :plateforme5, plateforme6 = :plateforme6, plateforme7 = :plateforme7, plateforme8 = :plateforme8, title_games = :title_games, img_games = :img_games, genre = :genre, date = :date, modification = :modification WHERE id = :id";
        $stmt= $db->prepare($sql);
        $stmt->execute($data);

        echo "1";

      }else{

         echo "0";
         
      }

} else {
  
}


?>