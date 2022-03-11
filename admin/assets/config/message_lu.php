<?php 

require '../../assets/config/req.php';

if($membre_result_co['rang'] == "Administrateur") { 
    
}else{
    header('Location: /'); 
}

    $mailconnect = htmlspecialchars($_POST['id']);

    $requser = $db->prepare("SELECT * FROM mail_admin WHERE id = :id");
    $requser->execute(array(':id' => $mailconnect));
    $userinfo = $requser->fetch();

    if($mailconnect == $userinfo['id']){
        
    $data = [
        'id' => $mailconnect,
        'lu' => 1
    ];

    $sql = "UPDATE mail_admin SET lu = :lu WHERE id = :id";
    $stmt= $db->prepare($sql);
    $stmt->execute($data);

    echo "1";

    }else{

        echo "0";
        
    }


?>