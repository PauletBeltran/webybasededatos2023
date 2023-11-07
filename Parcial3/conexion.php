<?php

$server = "localhost";
$user = "root";
$password = ""; //es el password del CHAMP
$baseDatos = "cetis107";

//conexion
$baseDatos = "cetis107";
$conexion = new mysqli($server, $user, $password,$baseDatos);

    if($conexion->connect_error){
        die("Fallo la conexion" . $conexion->connect_error);
    }

?>