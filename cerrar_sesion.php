<?php
include("bd.php"); 
// Function to start session
//session_start();

// Check the session name exists or not
if( isset($_SESSION['log']) ) {
    echo 'user loged in.'.'<br>' ;
}
else {
    echo 'user no loged in'.'<br>';
}

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}


// Finally, destroy the session.
session_destroy();

header("location:longin.php");
?>