<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location:http://localhost/ltwbt3/pages/login.php" ,true, 301);
    }
?>