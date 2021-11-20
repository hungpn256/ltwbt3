<?php
    session_start();
    session_destroy();
    header('Location: http://localhost/ltwbt3/pages/login.php');
    exit();
