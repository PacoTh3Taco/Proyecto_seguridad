<?php
session_start();
include 'conexion.php';
$nombre = $_POST['nombre'];
$estado = $_POST['estado'];
mysqli_query($conexion, "INSERT INTO inventario (nombre_equipo, estado) VALUES ('$nombre', '$estado')");
header("Location: bienvenida.php");
?>