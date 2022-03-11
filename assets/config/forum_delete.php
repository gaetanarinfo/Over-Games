<?php

require 'req.php';

if($membre_result_co['rang'] == "Administrateur" OR $membre_result_co['rang'] == "Modérateur") {

    if(!empty($_POST)) {

        $id1 = $_POST['id1'];
        $id3 = $_POST['id3'];

            if($_GET['id'] == "1") {

                $sql = 'DELETE FROM forum_cat_cat WHERE forum_id = :id1 AND forum_id_cat = :id2 AND forum_id_cat_sujet = :id3';

                $stmt = $db->prepare($sql);
                $stmt->bindValue(':id1', $id1);
                $stmt->bindValue(':id2', $id1);
                $stmt->bindValue(':id3', $id3);
                $stmt->execute();
 
                $sql2 = 'DELETE FROM forum_cat WHERE forum_id = :id1 AND forum_id_cat = :id2';

                $stmt2 = $db->prepare($sql2);
                $stmt2->bindValue(':id1', $id1);
                $stmt2->bindValue(':id2', $id1);;
                $stmt2->execute();

                echo 1;

            }

            if($_GET['id'] == "2") {
 
                $sql = 'DELETE FROM forum_cat_cat WHERE forum_id = :id1 AND forum_id_cat = :id2 AND forum_id_cat_sujet = :id3';

                $stmt = $db->prepare($sql);
                $stmt->bindValue(':id1', $id1);
                $stmt->bindValue(':id2', $id1);
                $stmt->bindValue(':id3', $id3);
                $stmt->execute();

                echo 1;

            }

    }else{
        echo 0;
    }

}else{
    echo 0;
}

if(isset($_SESSION['email']) AND $_POST['createur'] == $_SESSION['pseudo']) {

    if(!empty($_POST)) {

        $id1 = $_POST['fo1'];
        $id2 = $_POST['fo2'];
        $id3 = $_POST['fo3'];

            if($_GET['id'] == "3") {

                $sql = 'DELETE FROM forum_cat_cat_sujet WHERE forum_id = :id1 AND forum_id_cat = :id2 AND forum_id_cat_sujet = :id3';

                $stmt = $db->prepare($sql);
                $stmt->bindValue(':id1', $id1);
                $stmt->bindValue(':id2', $id1);
                $stmt->bindValue(':id3', $id3);
                $stmt->execute();

                echo 1;

            }

    }else{
        echo 0;
    }

}else{
    echo 0;
}

?>