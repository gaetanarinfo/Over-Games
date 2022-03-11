<?php

require 'req.php';

if(!empty($_POST)) {

    if(isset($_SESSION['email'])) {
            
            $data = [
                'forum_id' => $_POST['id1'],
                'forum_id_cat' => $_POST['id2'],
                'forum_id_cat_sujet' => $_POST['id3'],
                'resolved' => 1
            ];

            $sql = "UPDATE forum_cat_cat_sujet SET resolved = :resolved WHERE forum_id = :forum_id AND forum_id_cat = :forum_id_cat AND forum_id_cat_sujet = :forum_id_cat_sujet";
            $stmt= $db->prepare($sql);
            $stmt->execute($data);

            echo 1;

    }else{
        echo 0;
    }

}
else{
    echo 0;
}
?>