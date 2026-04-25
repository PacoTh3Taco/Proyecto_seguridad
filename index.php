<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login de Seguridad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Acceso al Sistema</h2>
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Usuario:</label>
                <input type="text" name="user" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Password:</label>
                <input type="password" name="pass" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>
</body>
</html>