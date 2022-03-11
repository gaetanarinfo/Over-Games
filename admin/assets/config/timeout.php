<?php 

require 'db.php';

function isLoginSessionExpired() {
	$login_session_duration = 6000; 
	$current_time = time(); 
	if(isset($_SESSION['loggedin_time']) and isset($_SESSION["email"])){  
		if(((time() - $_SESSION['loggedin_time']) > $login_session_duration)){ 
			return true; 
		} 
	}
	return false;
}

if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
}

if(isset($_SESSION["email"])) {
	if(!isLoginSessionExpired()) {
		
	} else {
		$_SESSION = array();
        session_unset();
        session_destroy(); 
        $url = "https://gaetan-seigneur.store/";
        if(isset($_GET["session_expired"])) {
            $url .= "?session_expired=" . $_GET["session_expired"];
        }
        header("Location:$url");
	}
}

?>