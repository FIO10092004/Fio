<?php

$host = "localhost";
$dbname = "gestion_tareas";
$user = "root";
$password = "";

try {

    $conexion = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $password
    );

    $conexion->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

}
catch(PDOException $e){

    die(
        $e->getMessage()
    );

}