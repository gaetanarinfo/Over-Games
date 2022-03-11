<?php 

require 'req.php';

if($article_result['categorie'] == "PREMIUM") { 

    if($membre_result_co['premium'] == "1" OR $membre_result_co['rang'] == "Administrateur") { 
        
    }else{
        header('Location: /'); 
    }

}

?>