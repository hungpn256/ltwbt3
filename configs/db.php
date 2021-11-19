<?php
    // include_once("./constants.php");
    $con = new mysqli("localhost","root","","ltw_3",3306);
    if(!$con){
        echo "connected error";
    }
?>