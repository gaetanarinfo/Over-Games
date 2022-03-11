<?php

require 'req.php';

if(isset($_SESSION['email']) AND $_POST['createur'] == $_SESSION['pseudo']) {

    if(!empty($_POST)) {

        $id1 = $_POST['fo1'];
        $id2 = $_POST['fo2'];
        $id3 = $_POST['fo3'];
        $titre = $_POST['titre'];

        $data = [
            'forum_id' => $id1,
            'forum_id_cat' => $id2,
            'forum_id_cat_sujet' => $id3,
            'createur' => $_POST['createur'],
            'content' => $_POST['content'],
            'titre' => $_POST['titre']
        ];

        $sql = "UPDATE forum_cat_cat_sujet SET content = :content, titre = :titre WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet AND createur = :createur";
        $stmt= $db->prepare($sql);
        $stmt->execute($data);

        echo 1;

    }else{
        echo 0;
    }

}else{
    echo 0;
}

?>