<?php
require('conexion.php');

    if(!empty($_POST['nombre']) && !empty($_POST['correo'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $password = "";

        $sql = "INSERT INTO usuario(nombre, correo, password) VALUES ('$nombre', '$correo', '$password')";
        $conn->exec($sql);

        header('Location: index.php');
    }
?>