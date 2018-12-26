<?php
    session_start();

    $_SESSION["firstname"]= null;
    $_SESSION["lastname"] = null;    
    $_SESSION["address"] = null; 
    $_SESSION["city"] = null; 
    $_SESSION["state"]= null;
    $_SESSION["country"] = null;   
    $_SESSION["phone"] = null; 
    $_SESSION["email"] = null;

    session_destroy();
    header("Location:index.php");

?>
    