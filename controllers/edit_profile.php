<?php
include_once("../controllers/requireLogin.php");
require_once('../configs/dbhelp.php');
$editname = str_replace('\'', '\\\'', $_POST['name']);
$editpassword = str_replace('\'', '\\\'', $_POST['password']);

$sql = "UPDATE admin SET name = '$editname', password = '$editpassword' where id = " . $id;
execute($sql);
$_SESSION['username'] = $editusername;
$_SESSION['name'] = $editname;
$_SESSION['password'] = $editpassword;
header('Location:/ltwbt3/pages/profile.php');
