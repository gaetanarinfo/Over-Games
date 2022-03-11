<?php

require '../../assets/config/req.php';

if($membre_result_co['rang'] == "Administrateur") {

    if(!empty($_POST)) {

        $id = $_POST['id'];

        $sql = 'DELETE FROM lets_play WHERE id = :id';

        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        echo 1;

    }else{
        echo 0;
    }

}else{
    echo 0;
}

?>