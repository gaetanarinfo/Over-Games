<?php

require '../../assets/config/req.php';

if($membre_result_co['rang'] == "Administrateur") {

    if(!empty($_POST)) {

        $email = $_POST['email'];

        $sql = 'DELETE FROM membres WHERE email = :email';

        $stmt = $db->prepare($sql);
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