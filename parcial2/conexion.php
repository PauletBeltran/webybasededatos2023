<?php

$server = "localhost";
$user = "root";
$password = ""; //es el password del CHAMP
$baseDatos = "cetis107";

//conexion
$baseDatos = "cetis107";
$conexion = new mysqli($server, $user, $password,$baseDatos);

//revisar conexion
if($conexion->connect_error){
    die("fallló la conexión" . $conexion->connect_error);
}
?>