<?php
    session_start();
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $image = $_SESSION['image'];
    if(isset($_SESSION['image'])){
        $image = $_SESSION['image'];
    }
    if(!isset($_SESSION['id'])){
        header("Location:/ltwbt3/pages/login.php" ,true, 301);
    }
?>