<?php 

require '../../assets/config/req.php';

    if($membre_result_co['rang'] == "Administrateur") { 
        
    }else{
        header('Location: /'); 
    }

?>

<?php 

// Récuperation membre
$sql = 'SELECT * FROM actualites WHERE id = :id';
$query = $db->prepare($sql);
$query->execute(array(':id' => $_GET['id']));
$result = $query->fetch();

echo json_encode( array( "createur" => $result['createur'], "categorie" => $result['categorie'], "titre" => $result['titre'], "subtitre" => $result['subtitle'], "smallimg" => $result['small_img'], "largeimg" => $result['large_img'], "content" => $result['content'], "content2" => $result['content2'], "video" => $result['videos'], "tagvideo" => $result['tag_video'], "plateforme" => $result['plateforme'], "plateforme2" => $result['plateforme2'], "plateforme3" => $result['plateforme3'], "plateforme4" => $result['plateforme4'], "plateforme5" => $result['plateforme5'], "plateforme6" => $result['plateforme6'], "plateforme7" => $result['plateforme7'], "plateforme8" => $result['plateforme8'], "titre2" => $result['title_games'], "img4" => $result['img_games'], "genre" => $result['genre'], "date" => $result['date_sortie'] ) );

?>