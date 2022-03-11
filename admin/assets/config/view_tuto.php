<?php 

require '../../assets/config/req.php';

    if($membre_result_co['rang'] == "Administrateur") { 
        
    }else{
        header('Location: /'); 
    }

?>

<?php 

// Récuperation membre
$sql = 'SELECT * FROM yt_cards WHERE id = :id';
$query = $db->prepare($sql);
$query->execute(array(':id' => $_GET['id']));
$result = $query->fetch();

echo json_encode( array( "titre" => $result['titre'], "content" => $result['content'], "api" => $result['api'], "lien" => $result['lien'], "chaine" => $result['chaine'], "icone" => $result['icone'], "image" => $result['images'], "cat" => $result['cat'], "date" => $result['date'] ) );

?>