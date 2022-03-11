<?php 

require '../../assets/config/req.php';

    if($membre_result_co['rang'] == "Administrateur") { 
        
    }else{
        header('Location: /'); 
    }

    if(!empty($_POST)) {

        $sql = 'SELECT * FROM mail_admin WHERE id = :id';
        $query = $db->prepare($sql);
        $query->execute(array(':id' => $_POST['id']));
        $result = $query->fetch();

        $destinataire = $_POST["email"];
        $mailHeaders = "From: " . $_SESSION["nom"] ."<". $_SESSION["email"] .">\r\n";
        $subject = "Over-Games - Réponse à votre message - ". $result["sujet"] ."";
        $message = $_POST["message"];

        if(mail($destinataire, $subject, $message, $mailHeaders)) {
        
        } else {
            
        }

        echo 1;
    } else{
        echo 0;
    }   
?>
