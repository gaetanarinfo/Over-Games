<?php 

require 'assets/config/req.php';

    if($membre_result_co['rang'] == "Administrateur") { 
        
    }else{
        header('Location: /'); 
    }

?>

<?php 

// Mail Admin
$sql = 'SELECT COUNT(*) AS id FROM mail_admin WHERE lu = :lu OR archive = :archive ORDER BY dates DESC';
$query = $db->prepare($sql);
$query->execute(array(':lu' => "0", ':archive' => "0"));
$result = $query->fetch();
$nbMail = (int) $result['id'];

$sql7 = 'SELECT * FROM mail_admin ORDER BY dates DESC';
$query7 = $db->prepare($sql7);
$query7->execute();

// Actualité En ligne
$sql2 = 'SELECT COUNT(*) AS id FROM actualites ORDER BY id DESC';
$query2 = $db->prepare($sql2);
$query2->execute();
$resultnews = $query2->fetch();
$nbNews = (int) $resultnews['id'];

// Membres inscrit
$sql3 = 'SELECT COUNT(*) AS id FROM membres ORDER BY id DESC';
$query3 = $db->prepare($sql3);
$query3->execute();
$resultmembre = $query3->fetch();
$nbMembre = (int) $resultmembre['id'];

// Vidéo en ligne
$sql4 = 'SELECT COUNT(*) AS id FROM yt_cards ORDER BY id DESC';
$query4 = $db->prepare($sql4);
$query4->execute();
$resultvideo = $query4->fetch();
$nbVideo = (int) $resultvideo['id'];

// Visiteur
$sql5 = 'SELECT COUNT(*) AS id FROM stats_visites ORDER BY id DESC';
$query5 = $db->prepare($sql5);
$query5->execute();
$resultvisite = $query5->fetch();
$nbVisite = (int) $resultvisite['id'];

// Actualité Table
$sql6 = 'SELECT * FROM actualites ORDER BY id DESC LIMIT 0,10';
$query6 = $db->prepare($sql6);
$query6->execute();

// Membres Table
$req1 = $db->prepare('SELECT * FROM membres ORDER BY id DESC LIMIT 0,20');
$req1->execute();
$req2 = $db->prepare('SELECT * FROM membres ORDER BY id DESC LIMIT 0,20');
$req2->execute();

// Message Table
$req3 = $db->prepare('SELECT * FROM mail_admin ORDER BY id DESC');
$req3->execute();

?>