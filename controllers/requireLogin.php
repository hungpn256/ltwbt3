<?php
    session_start();
    include_once('../configs/constants.php');
    if(!isset($_SESSION['id'])){
        header("Location:".DOMAIN."/pages/login.php" ,true, 301);
    }
?>