<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "bank";
    $conn = mysqli_connect($hostname, $username, $password, $database);

    if(!$conn){
        die( "connection failed");
        
    }
   
?>