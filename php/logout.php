<?php
    require './includes/common.php';
    // destroy the session if present
    if(!isset($_SESSION["email_id"])){
        header("location: index.php");
    }else{
	session_unset();
	session_destroy();
    }
    header("location: index.php");
?>
