<?php 

require '../../assets/config/req.php';

    if($membre_result_co['rang'] == "Administrateur") { 
        
    }else{
        header('Location: /'); 
    }

?>

<?php 

// Récuperation membre
$sql = 'SELECT * FROM mail_admin WHERE id = :id';
$query = $db->prepare($sql);
$query->execute(array(':id' => $_GET['id']));
$result = $query->fetch();

echo json_encode(array("email" => $result['email']));

?>