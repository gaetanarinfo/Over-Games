<?php

$sql = 'SELECT * FROM test ORDER BY id ASC';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$articles2 = $query->fetchAll(PDO::FETCH_ASSOC);

// On détermine sur quelle page on se trouve
if(isset($_GET['test']) && !empty($_GET['test'])){
    $currentPage2 = (int) strip_tags($_GET['test']);
}else{
    $currentPage2 = 1;
}

// On détermine le nombre total d'articles
$sql = 'SELECT COUNT(*) AS id FROM test';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute();

// On récupère le nombre d'articles
$result2 = $query->fetch();

$nbArticles2 = (int) $result2['id'];

// On détermine le nombre d'articles par page
$parPage2 = 10;

// On calcule le nombre de pages total
$pages2 = ceil($nbArticles2 / $parPage2);

// Calcul du 1er article de la page
$premier2 = ($currentPage2 * $parPage2) - $parPage2;

$sql = 'SELECT * FROM test ORDER BY id ASC LIMIT :premier2, :parpage2';

// On prépare la requête
$query = $db->prepare($sql);

$query->bindValue(':premier2', $premier2, PDO::PARAM_INT);
$query->bindValue(':parpage2', $parPage2, PDO::PARAM_INT);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$articles2 = $query->fetchAll(PDO::FETCH_ASSOC);

$count = $query->rowCount();
?>