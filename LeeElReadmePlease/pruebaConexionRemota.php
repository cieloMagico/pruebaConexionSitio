<?php
if (isset($_POST['conectar'])) {
    $host = ""; // Reemplaza con tu host de FreeSQL
    $usuario = ""; // Reemplaza con tu usuario
    $clave = ""; // Reemplaza con tu contraseña
    $base_datos = ""; // Reemplaza con el nombre de tu BD

    // Crear conexión
    $conexion = new mysqli($host, $usuario, $clave, $base_datos);

    // Comprobar conexión
    if ($conexion->connect_error) {
        echo "<script>alert('Error de conexión: " . $conexion->connect_error . "');</script>";
    } else {
        echo "<script>alert('Conexión exitosa a la base de datos');</script>";
    }

    // Cerrar conexión
    $conexion->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Probar Conexión</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="conectar">Conectar a la Base de Datos</button>
    </form>
</body>
</html>
