<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de empleados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Lista de empleados</h1>
        <?php
            $empleados = file('empleados.csv');
            echo "<ul>";
            foreach ($empleados as $empleado) {
                $datos = explode(',', $empleado);
                echo "<li><strong>DNI:</strong> $datos[0], <strong>Nombre:</strong> $datos[1], <strong>Sueldo:</strong> $datos[2], <strong>% Descuento:</strong> $datos[3]</li>";
            }
            echo "</ul>";
        ?>
    </div>
</body>
</html>
