<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inventario</title>
</head>
<body class="bg-light p-4">
<div class="container bg-white p-4 shadow rounded">
    <h2>Inventario de hardware</h2>
    <form action="registrar.php" method="POST" class="row g-3 mb-4">
        <div class="col-md-5"><input type="text" name="nombre" class="form-control" placeholder="Nombre equipo" required></div>
        <div class="col-md-4">
            <select name="estado" class="form-control">
                <option value="Disponible">Disponible</option>
                <option value="En Uso">En uso</option>
                <option value="Reparacion">En reparación</option>
            </select>
        </div>
        <div class="col-md-3"><button type="submit" class="btn btn-success w-100">Agregar</button></div>
    </form>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr><th>ID</th><th>Equipo</th><th>Estado</th><th>Acciones</th></tr>
        </thead>
        <tbody>
            <?php
            $res = mysqli_query($conexion, "SELECT * FROM inventario");
            while($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nombre_equipo']}</td>
                        <td>{$row['estado']}</td>
                        <td>
                            <a href='editar.php?id={$row['id']}' class='btn btn-warning btn-sm'>Editar</a>
                            <a href='eliminar.php?id={$row['id']}' class='btn btn-danger btn-sm'>Eliminar</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="logout.php" class="btn btn-secondary">Cerrar sesión</a>
</div>
</body>
</html>