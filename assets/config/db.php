<?php

try {
    $db = new PDO('mysql:host=mysql.love-and-heart.fr; port=4226; dbname=OverGames;', 'gaetan72', '@Zyfnnake72');
    $db->exec("SET CHARACTER SET utf8");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>
