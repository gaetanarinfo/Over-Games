<?php

include 'req.php';

/* Getting file name */
$filename = $_FILES['file']['name'];
/* Location */
$location = "../../upload/background/".$filename;
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
/* Valid Extensions */
$valid_extensions = array("jpg","jpeg","png");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}
if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */
   if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){

    echo $location;
    $data = [
    'image_fond' =>  $filename,
    'email' => $_SESSION['email'],
    ];

    $sql = "UPDATE membres SET image_fond = :image_fond WHERE email = :email";
    $stmt= $db->prepare($sql);
    $stmt->execute($data);
    
   }else{
      echo 0;
   }
}

?>