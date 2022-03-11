<?php

$sql = 'SELECT * FROM yt_cards ORDER BY id ASC';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$articles3 = $query->fetchAll(PDO::FETCH_ASSOC);

// On détermine sur quelle page on se trouve
if(isset($_GET['tuto']) && !empty($_GET['tuto'])){
    $currentPage3 = (int) strip_tags($_GET['tuto']);
}else{
    $currentPage3 = 1;
}

// On détermine le nombre total d'articles
$sql = 'SELECT COUNT(*) AS id FROM yt_cards';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute();

// On récupère le nombre d'articles
$result3 = $query->fetch();

$nbArticles3 = (int) $result3['id'];

// On détermine le nombre d'articles par page
$parPage3 = 10;

// On calcule le nombre de pages total
$pages3 = ceil($nbArticles3 / $parPage3);

// Calcul du 1er article de la page
$premier3 = ($currentPage3 * $parPage3) - $parPage3;

$sql = 'SELECT * FROM yt_cards ORDER BY id ASC LIMIT :premier3, :parpage3';

// On prépare la requête
$query = $db->prepare($sql);

$query->bindValue(':premier3', $premier3, PDO::PARAM_INT);
$query->bindValue(':parpage3', $parPage3, PDO::PARAM_INT);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$articles3 = $query->fetchAll(PDO::FETCH_ASSOC);

$count = $query->rowCount();
?>