<?php
session_start();
include_once("../configs/db.php");
if (isset($_POST['register'])) {
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['name'])) {
        // header("location:". DOMAIN . "/pages/register.php", true, 301);
    } else {
        try {
            $pre_stm = $con->prepare("INSERT INTO Admin(username,password,name) VALUES (?,?,?)");
            $pre_stm->bind_param("sss", $_POST['username'], $_POST['password'], $_POST['name']);
            $pre_stm->execute();

            header("Location:http://localhost:8080/ltwbt3/pages/login.php", TRUE, 301);
            
        } catch (PDOException $e) {
            // header("Location:" . DOMAIN . "/pages/register.php", TRUE, 301);
            echo "Error: " . $e->getMessage();
        }
    }
} else {
    echo "not working";
}
