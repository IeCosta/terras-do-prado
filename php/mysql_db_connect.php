<?php
    // Create DB acess at localhost computer
    $servername = "localhost";//servidor
    $username = "root";//utilizador
    $password = "Admin";//psw do utilizador
    $database = "hotelestrelamar";//nome da base de dados

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->errno > 0) {
      die("DB Connection failed: " . $conn->connect_error);
    }
?>