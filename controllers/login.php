<?php
session_start();
include_once("../configs/db.php");
try {
    echo 'báhd';
    $pre_stm = $con->prepare("select * from admin where username = ?");
    echo $con->error;
    $pre_stm->bind_param("s", $_POST['username']);
    $pre_stm->execute() or die($con->error);
    $rs = $pre_stm->get_result();

    if ($rs->num_rows < 1) {
        echo "Tai khoan chua ton tai!!";
    } else {
        $row = $rs->fetch_assoc();
        if ($_POST['password'] == $row['password']) {
            echo $row['password'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['image'] = $row['image'];
            header("Location:/ltwbt3/pages", TRUE, 301);
            return;
        } else {
            header("Location:/ltwbt3/pages/login.php", TRUE, 301);
        }
    }
} catch (Exception $e) {
    echo $e;
}
