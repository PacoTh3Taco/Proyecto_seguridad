<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "prueba_seguridad";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_datos);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>