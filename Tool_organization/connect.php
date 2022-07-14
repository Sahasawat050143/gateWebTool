<?php
    $server = $_SERVER['HTTP_HOST'];
    $username = "root";
    $password = "";
    $database = "dbgateweb";

    $conn = mysqli_connect($server,$username,$password,$database);

    if(!$conn){
        die("Connect Failed".mysqli_connect_error());
    }
?>