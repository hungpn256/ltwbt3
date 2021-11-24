<?php
session_start();
require_once("../configs/dbhelp.php");
$usernamePOST = $_POST['username'];
$passwordPOST = $_POST['password'];
try {
    $rs = executeResult("select * from admin where username = '$usernamePOST' and password = '$passwordPOST'");
    echo $rs[0]['password'];
    // $pre_stm = $con->prepare("select * from admin where username = ?");
    // echo $con->error;
    // $pre_stm->bind_param("s", $_POST['username']);
    // $pre_stm->execute() or die($con->error);
    // $rs = $pre_stm->get_result();

    if (count($rs) < 1) {
        echo "Tai khoan chua ton tai!!";
    } else {
        $_SESSION['id'] = $rs[0]['id'];
        $_SESSION['username'] = $rs[0]['username'];
        $_SESSION['name'] = $rs[0]['name'];
        $_SESSION['password'] = $rs[0]['password'];
        $_SESSION['image'] = $rs[0]['image'];
        header("Location:/ltwbt3/pages", TRUE, 301);
    }
} catch (Exception $e) {
    echo $e;
}
