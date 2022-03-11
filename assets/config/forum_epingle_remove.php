<?php

require 'req.php';

if(isset($_SESSION['email'])) {

    if(!empty($_POST)) {

        $id1 = $_POST['fo1'];
        $id2 = $_POST['fo2'];
        $id3 = $_POST['fo3'];
        $email = $_SESSION['email'];

        $sql = 'DELETE FROM forum_sujet_reply_membre WHERE forum_id = :id1 AND forum_id_cat = :id2 AND forum_id_cat_sujet = :id3 AND email = :email';

        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id1', $id1);
        $stmt->bindValue(':id2', $id1);
        $stmt->bindValue(':id3', $id3);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        echo 1;

    }else{
        echo 0;
    }

}else{
    echo 0;
}

?>