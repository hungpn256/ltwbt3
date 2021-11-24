<?php
session_start();
require_once("../configs/dbhelp.php");

$passwordPOST = $_POST['password'];
$usernamePOST = $_POST['username'];
$namePOST = $_POST['name'];
$sql = "INSERT INTO admin(username,password,name) VALUES ('$usernamePOST','$passwordPOST','$namePOST')";
execute($sql);
header("Location:/ltwbt3/pages/login.php", TRUE, 301);

echo "fail";
