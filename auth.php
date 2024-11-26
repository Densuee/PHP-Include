<?php
    session_start();
    $logged_user = $_SESSION["username"] ?? null;

    if(!$logged_user){
        header("Location: index.php");
    }
?>