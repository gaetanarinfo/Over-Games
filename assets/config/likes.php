<?php

require 'db.php';

    $id = $_GET['id'];
    $pseudo = $_GET['pseudo'];

    $requser = $db->prepare("SELECT * FROM actualites_comment WHERE pseudo = :pseudo");
    $requser->execute(array(':pseudo' => $pseudo));
    $userinfo = $requser->fetch();
        
    $data = [
        'pseudo' => $userinfo['pseudo'],
        'commentid' => $_GET['commentid']
    ];

    $sql = "UPDATE actualites_comment SET likes = likes +1 WHERE pseudo = :pseudo AND id = :commentid";
    $stmt= $db->prepare($sql);
    $stmt->execute($data);


?>