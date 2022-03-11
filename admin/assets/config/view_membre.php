<?php 

require '../../assets/config/req.php';

    if($membre_result_co['rang'] == "Administrateur") { 
        
    }else{
        header('Location: /'); 
    }

?>

<?php 

// Récuperation membre
$sql = 'SELECT * FROM membres WHERE email = :email';
$query = $db->prepare($sql);
$query->execute(array(':email' => $_GET['email']));
$result = $query->fetch();

echo json_encode( array( "nom" => $result['nom'], "prenom" => $result['prenom'], "sexe" => $result['sexe'], "age" => $result['age'], "pseudo" => $result['pseudo'], "email" => $result['email'], "verif" => $result['membre_verif'], "premium" => $result['premium'], "adresse" => $result['adresse'], "adresse2" => $result['adresse2'], "ville" => $result['ville'], "postalCode" => $result['postalCode'], "pays" => $result['pays'], "bloque" => $result['bloque'] ) );

?>