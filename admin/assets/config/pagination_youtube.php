<?php

$sql = 'SELECT * FROM lets_play ORDER BY id ASC';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$articles4 = $query->fetchAll(PDO::FETCH_ASSOC);

// On détermine sur quelle page on se trouve
if(isset($_GET['video']) && !empty($_GET['video'])){
    $currentPage4 = (int) strip_tags($_GET['video']);
}else{
    $currentPage4 = 1;
}

// On détermine le nombre total d'articles
$sql = 'SELECT COUNT(*) AS id FROM lets_play';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute();

// On récupère le nombre d'articles
$result4 = $query->fetch();

$nbArticles4 = (int) $result4['id'];

// On détermine le nombre d'articles par page
$parPage4 = 10;

// On calcule le nombre de pages total
$pages4 = ceil($nbArticles4 / $parPage4);

// Calcul du 1er article de la page
$premier4 = ($currentPage4 * $parPage4) - $parPage4;

$sql = 'SELECT * FROM lets_play ORDER BY id ASC LIMIT :premier4, :parpage4';

// On prépare la requête
$query = $db->prepare($sql);

$query->bindValue(':premier4', $premier4, PDO::PARAM_INT);
$query->bindValue(':parpage4', $parPage4, PDO::PARAM_INT);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$articles4 = $query->fetchAll(PDO::FETCH_ASSOC);

$count = $query->rowCount();
?>