<?php 

require 'req.php';

if(empty($_GET['id']) OR $_GET['id'] != $article_result['id']) { 
    header('Location: /'); 
}else{
    
}

?>