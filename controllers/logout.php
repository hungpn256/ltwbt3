<?php
    session_start();
    session_destroy();
    header('Location:/ltwbt3/pages/login.php');
    exit();
