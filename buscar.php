<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar empleados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Buscar empleado</h1>
        <form action="buscar_empleado.php" method="GET">
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required><br>
            <button type="submit">Buscar</button>
        </form>
    </div>
</body>
</html>
