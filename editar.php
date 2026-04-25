<?php
include 'conexion.php';

// Verificamos si realmente nos pasaron un ID por la URL
if (!isset($_GET['id'])) {
    header("Location: bienvenida.php");
    exit();
}

$id = $_GET['id'];

// Si el usuario envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nuevo_estado = $_POST['estado'];
    mysqli_query($conexion, "UPDATE inventario SET estado = '$nuevo_estado' WHERE id = $id");
    header("Location: bienvenida.php");
    exit();
}

// Consultamos los datos actuales
$res = mysqli_query($conexion, "SELECT * FROM inventario WHERE id = $id");
$fila = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="es">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="p-5">
    <?php if($fila): ?>
        <h3>Editar estado: <?php echo $fila['nombre_equipo']; ?></h3>
        <form method="POST">
            <select name="estado" class="form-control mb-3">
                <option value="Disponible" <?php if($fila['estado']=='Disponible') echo 'selected'; ?>>Disponible</option>
                <option value="En Uso" <?php if($fila['estado']=='En Uso') echo 'selected'; ?>>En Uso</option>
                <option value="Reparacion" <?php if($fila['estado']=='Reparacion') echo 'selected'; ?>>En reparación</option>
            </select>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <a href="bienvenida.php" class="btn btn-secondary">Cancelar</a>
        </form>
    <?php else: ?>
        <p>Equipo no encontrado.</p>
        <a href="bienvenida.php" class="btn btn-primary">Volver</a>
    <?php endif; ?>
</body>
</html>