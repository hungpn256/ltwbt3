<?php
session_start();
include_once("../configs/db.php");
if (isset($_POST['login'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        header("location:index.php", true, 301);
    } else {
        $pre_stm = $con->prepare("select * from Admin where username = ?");
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
                header("Location:http://localhost/ltwbt3" ,TRUE, 301);
                return;
            } else {
                header("Location:http://localhost/ltwbt3/pages/login.php" ,TRUE, 301);
            }
        }
    }
} else {
    echo "not working";
}