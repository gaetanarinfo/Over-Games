<?php 

require 'req.php';

    if($membre_result_co['rang'] == "Administrateur" OR $membre_result_co['rang'] == "Modérateur") { 
        
    }else{
        header('Location: /'); 
    }

?>

<?php 

// Récuperation membre
$sql = 'SELECT * FROM forum_cat_cat WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet';
$query = $db->prepare($sql);
$query->execute(array(':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat'], ':forum_id_cat_sujet' => $_GET['forum_id_cat_sujet']));
$result = $query->fetch();

echo json_encode( array( "content" => $result['content'], "titre" => $result['titre'], "titre2" => $result['titre2'] ) );

?>