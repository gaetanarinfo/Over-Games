<?php

require 'req.php';

if($membre_result_co['rang'] == "Administrateur" OR $membre_result_co['rang'] == "Moderateur") {

    if(!empty($_POST)) {

            $id1 = $_POST['forum'];
            $id2 = $_POST['forum2'];
            $id3 = $_POST['forum3'];
            $titre = $_POST['titre'];
            $titre2 = $_POST['titre2'];
            $content = $_POST['content'];
            $topic = $_POST['topic'];

            $data = [
                'forum_id' => $id1,
                'forum_id_cat' => $id2,
                'forum_id_cat_sujet' => $id3,
                'titre' => $titre,
                'titre2' => $titre2,
                'content' => $content,
                'topic' => $topic
            ];

            $sql = "UPDATE forum_cat_cat SET titre = :titre, titre2 = :titre2, content = :content, topic = :topic WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet";
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