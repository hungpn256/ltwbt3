<?php
<<<<<<< HEAD
    include_once('../configs/constants.php');
=======
>>>>>>> 136d78871d86d6dcf2cf1fc4889d11a56d744439
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location:http://localhost:8080/ltwbt3/pages/login.php" ,true, 301);
    }
?>