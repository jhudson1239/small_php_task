<?php

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = 'small_task';

    try {
        $conn = new PDO("mysql:host=" . $dbServername . ";dbname=" . $dbName, $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected";
    } catch(PDOException $e){
        echo "Connection failed";
    }
?>