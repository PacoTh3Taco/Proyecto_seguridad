<?php
include 'conexion.php';
$id = $_GET['id'];
mysqli_query($conexion, "DELETE FROM inventario WHERE id = $id");
header("Location: bienvenida.php");
?>