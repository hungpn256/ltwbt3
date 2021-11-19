<?php
    include_once('../configs/constants.php');
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location:".DOMAIN."/pages/login.php" ,true, 301);
    }
?>