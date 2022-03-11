<?php

require 'db.php';

$sql = 'SELECT * FROM forum_cat_cat WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat ORDER BY id ASC';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute(array(':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat']));

// On récupère les valeurs dans un tableau associatif
$articles = $query->fetchAll(PDO::FETCH_ASSOC);

// On détermine sur quelle page on se trouve
if(isset($_GET['p']) && !empty($_GET['p'])){
    $currentPage = (int) strip_tags($_GET['p']);
}else{
    $currentPage = 1;
}

// On détermine le nombre total d'articles
$sql = 'SELECT COUNT(*) AS id FROM forum_cat_cat WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute
$query->execute(array(':forum_id' => $_GET['forum_id'], ':forum_id_cat' => $_GET['forum_id_cat']));

// On récupère le nombre d'articles
$result = $query->fetch();

$nbArticles = (int) $result['id'];

// On détermine le nombre d'articles par page
$parPage = 31;

// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

$sql = 'SELECT * FROM forum_cat_cat WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat ORDER BY id ASC LIMIT :premier, :parpage';

// On prépare la requête
$query = $db->prepare($sql);

$query->bindParam(':forum_id', $_GET['forum_id']);
$query->bindParam(':forum_id_cat', $_GET['forum_id_cat']);
$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$articles = $query->fetchAll(PDO::FETCH_ASSOC);

$count = $query->rowCount();
?>