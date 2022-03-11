<?php 

require '../../assets/config/req.php';

    if($membre_result_co['rang'] == "Administrateur") { 
        
    }else{
        header('Location: /'); 
    }

?>

<?php 

// Récuperation membre
$sql = 'SELECT * FROM lets_play WHERE id = :id';
$query = $db->prepare($sql);
$query->execute(array(':id' => $_GET['id']));
$result = $query->fetch();

echo json_encode( array( "titre" => $result['titre'], "api" => $result['api'] ) );

?>