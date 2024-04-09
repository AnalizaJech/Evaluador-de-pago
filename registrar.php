<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar empleados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Registrar empleados</h1>
        <form action="guardar_empleado.php" method="POST">
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="sueldo">Sueldo:</label>
            <input type="number" id="sueldo" name="sueldo" required><br>
            <label for="descuento">Porcentaje de descuento:</label>
            <input type="number" id="descuento" name="descuento" required><br>
            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>
