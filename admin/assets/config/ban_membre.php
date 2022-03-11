<?php

require '../../assets/config/req.php';

if($membre_result_co['rang'] == "Administrateur") {

    if(!empty($_POST)) {

        $email = $_POST['email'];

        $data = [
            'bloque' => "1",
            'email' => $email,
        ];

        $sql = "UPDATE membres SET bloque = :bloque WHERE email = :email";
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