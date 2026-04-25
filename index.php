<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login de Seguridad</title>
</head>
<body>
    <h2>Acceso al Sistema</h2>
    <form action="index.php" method="POST">
        Usuario: <input type="text" name="user"><br>
        Password: <input type="password" name="pass"><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>