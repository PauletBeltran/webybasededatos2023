<?php

$server = "localhost";
$server = "root";
$password = "123456789"; //es el password del CHAMP

//conexion
$conexion = new mysqli($server, $user, $password);

//revisar conexion
if($conexion->connect_error){
    die("fallló la conexión" . $conexion->connect_error);
}
?>