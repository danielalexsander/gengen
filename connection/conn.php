<?php
    //Database Properties
    $host       = $_POST['host'];
    $user       = $_POST['user'];
    $password   = $_POST['password'];
    $database   = $_POST['database'];

    //Database Connection
    $conn = mysqli_connect($host, $user, $password, $database);
?>