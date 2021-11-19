<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location:http://localhost:8080/ltw/pages/login.php" ,true, 301);
    }
?>