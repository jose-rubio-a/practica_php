<?php
    //Credenciales
    $servername = "localhost";
    $username = "root";
    $password = "Alvarez&26";
    $database = "ejemplo_html";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: ".$e->getMessage();
    }
?>